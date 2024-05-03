<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registerform.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <div class="register-box">
      <h1>Register</h1>
      <h4>Welcome. Please fill in the form below.</h4>
      <form>
        <label>Userame</label>
        <input type="text" placeholder="" required/>
        <label>Email</label>
        <input type="email" placeholder="" required/>
        <label>Password</label>
        <input type="password" placeholder="" required/>
        <label>Confirm Password</label>
        <input type="password" placeholder="" required/>
        <input type="button" value="Submit" />
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
</body>
</html>