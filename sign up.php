<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <div class="d-flex" >
        <form class="col-4 mx-auto" onsubmit="return false;">
            <h2>Sign up</h2>
            <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" class="form-control" id="user" aria-describedby="userHelp">
                <div id="userError" class="form-text" style="color: red;"></div>
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
              <div id="emailError" class="form-text" style="color: red;"></div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password">
              <div id="passwordError" class="form-text" style="color: red;"></div>
            </div>
            <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
          </form>
    </div>

    <script>
        document.getElementById('submitbtn').addEventListener('click', function() {
            let user = document.getElementById('user').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            document.getElementById('userError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';

            if(user == '') {
                document.getElementById('userError').innerText = 'Username is required';
            }  else if(email == '') {
                document.getElementById('emailError').innerText = 'Email is required';
            } else if(password == '') {
                document.getElementById('passwordError').innerText = 'Password is required';
            } else {
                alert('submitted');
            }
        });
    </script>
</body>
</html> 