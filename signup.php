<?php
include('./inc/header.php');
include('./inc/config.php');
?>
    <section class="container">
    <h1 class="pt-5">Sign Up</h1>
    <form action="./userSignup.php" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
</div>
<button>Submit</button>
</form>
<section>
    <?php
       $sql = "SELECT * FROM test where id =".$_GET['id'];
       $result = $link->query($sql);
       if ($result->num_rows > 0) { 
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo '
               <div class="py-5">
               <h1 class="pb-5">'.$row['head'].'</h1>
                <img src="'.$row['image'].'"style="width: 100%">

                <p class="pt-5">'.$row['description'].'</p>
                </div>
                ';
           }
        }
    ?>
    </section>
<?php
    include('./inc/footer.php');
?>        