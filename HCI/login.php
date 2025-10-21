<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- ✅ Internal CSS -->
    <style>
        body {
          background: linear-gradient(135deg, #4facfe, #00f2fe);
          font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
        }

        .container {
          max-width: 400px;
          width: 100%;
          background: #fff;
          padding: 30px;
          border-radius: 12px;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
          text-align: center;
        }

        h1 {
          font-size: 26px;
          margin-bottom: 25px;
          color: #333;
          font-weight: 600;
        }

        .form-group {
          margin-bottom: 18px;
          text-align: left;
        }

        .form-control {
          border-radius: 8px;
          padding: 12px;
          font-size: 15px;
          border: 1px solid #ddd;
          transition: 0.3s;
        }

        .form-control:focus {
          border-color: #4facfe;
          box-shadow: 0 0 6px rgba(79, 172, 254, 0.5);
        }

        .form-btn input {
          width: 100%;
          padding: 12px;
          border-radius: 8px;
          font-size: 16px;
          font-weight: 500;
          background: #4facfe;
          border: none;
          transition: 0.3s;
        }

        .form-btn input:hover {
          background: #00c6ff;
        }

        .container p {
          margin-top: 15px;
          font-size: 14px;
          color: #555;
        }

        .container a {
          color: #4facfe;
          font-weight: 500;
          text-decoration: none;
        }

        .container a:hover {
          text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <h1>Student Details</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not registered yet? <a href="registration.php">Register Here</a></p></div>
        <div><p>Back to home <a href="index.php">Back</a></p></div>
    </div>
</body>
</html>
