<?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['email'] == $email && $user['password'] == $password){
            session_start();
      
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:home.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Email or Password!";
              exit();
            }
          }
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="myStyle.css">
<title>Document</title>
</head>
<body>

  <section id="section-1">
    <div class="box">
      <header>
        <a href="./Projekti1.html">
          <img src="fotot4/logo1.jpg" class="main-logo">
        </a>
        <nav>
        <ul class="nav-links">
          <li class="active"><a href="./Projekti1.html">HOME</a></li>
          <li><a href="./menu.html">MENU</a></li>
          <li><a href="./about-us.html">ABOUT US</a></li>
          <li><a href="./contact.html">CONTACT</a></li>
          <li><a href="./login.html">LOG IN</a></li>
          <li><a href="./register.html">
            <button type="button" class="nav-register-button">
              REGISTER
            </button>
          </a></li>
        </ul>
      </nav>
     </header>
			</div>
		</section>

    <section class="login-page-container">
      <h1 style="text-align: center;">Login</h1>

      <form class="login-form-container" id="registrationForm"onsubmit="return validateForm()">
        <div class="login-form-container-input">
          <label for="email">Email:</label>
          <input type="email"id="email" name="email"required>
        </div>

        <div class="login-form-container-input">
          <label for="password">Password:</label>
        <input type="text"id="password" name="password"required>
        </div>
    
        <button type="submit">Log In</button>
      </form>
    </section>
    <script>
      function validateForm(){
          var email = document.getElementById('email').value;
          var password = document.getElementById('password').value;

          var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
          if(!emailRegex.test(name)){
              return false;
          }
          var passswordRegex = /^[A-Z\s]{2,3}+$/;
          if (passsword.length < 6) {
              alert('Password must be at least 6 characters long.');
              return false;
          }
              return true;
      }
  </script>
    <section id="section-7">
      <div class="copyright">
          <h2>&copy;2023 Rricco Restaurant. All rights reserved.  Privacy Policy</h2>
      </div>
  </section>
</body>
</html>