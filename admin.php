<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
<head>
    <title>Login</title>
    <div style="position: relative;top: 30px; left: -650px;"><a href="front1.html"><button>kembali</button></a></div>
</head>
<body>
    <h2>Login</h2>
    <center><form class="form" action="proses_login.php" method="POST" >
        <p class="form-title">Sign in to your account</p>
        <div class="input-container">
          <input type="text"  name="username" placeholder="Enter text" required>
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password"  name="password" placeholder="Enter password" required>
        </div>
         <button type="submit" class="submit">
        Sign in
      </button>

      <p class="signup-link">
        No account? 
        <a href="">Sign up</a>
      </p>
    </form>
</body>
</html>
 