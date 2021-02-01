<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome to spotify</title>
  </head>
  <body>
    <div class="inputContainer">
      <form class="loginForm" action="register.php" method="post">
      <h2>login to your account</h2>
      <label for="loginUsername">Username</label>
      <p><input type="loginUsername" name="loginUsername" value="text"placeholder="e.g.asadkhan"></p>
      <label for="loginpassword">password</label>
      <p><input type="password" name="password" value="password"placeholder="Your Password"></p>
    <button type="submit" name="loginButton">LOG IN</button>
      </form>




      <form class="redisterForm" action="register.php" method="post">
      <h2>Create your account</h2>


      <p><label for="firstName">First Name</label></p>
        <p><input type="firstName" name="firstName" value="text"placeholder="e.g.asadkhan"></p>

        <p><label for="lastname">last Name</label></p>
          <p><input type="lastname" name="lastname" value="text"placeholder="e.g.asadkhan"></p>

          <p><label for="email">Email</label></p>
            <p><input type="email" name="email" value="text"placeholder="e.g.asadkhan"></p>

            <p><label for="email2">Conform Email</label></p>
              <p><input type="email2" name="email2" value="text"placeholder="e.g.asadkhan"></p>

              <p><label for="loginPassword">login Password</label></p>
                <p><input type="loginPassword" name="loginPassword" value="password"placeholder="Your Password"></p>



      <label for="password2">conform password</label>
      <p><input type="password2" name="password2" value="Password"placeholder="Your Password"></p>
      <button type="submit" name="registerButton">SIGN UP</button>
      </form>
    </div>


  </body>
</html>
