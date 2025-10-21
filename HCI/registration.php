<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- ✅ Internal CSS -->
    <style>
        body {
          background: linear-gradient(135deg, #667eea, #764ba2);
          font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
        }

        .container {
          max-width: 420px;
          width: 100%;
          background: #fff;
          padding: 35px;
          border-radius: 12px;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
          text-align: center;
        }

        h1 {
          font-size: 28px;
          margin-bottom: 25px;
          color: #333;
          font-weight: 700;
          text-transform: uppercase;
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
          border-color: #667eea;
          box-shadow: 0 0 6px rgba(102, 126, 234, 0.6);
        }

        .form-btn input {
          width: 100%;
          padding: 12px;
          border-radius: 8px;
          font-size: 16px;
          font-weight: 600;
          background: #667eea;
          border: none;
          transition: 0.3s;
        }

        .form-btn input:hover {
          background: #5a67d8;
        }

        .alert {
          font-size: 14px;
          text-align: left;
        }

        p {
          margin-top: 15px;
          font-size: 14px;
          color: #555;
        }

        a {
          color: #667eea;
          font-weight: 500;
          text-decoration: none;
        }

        a:hover {
          text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 characters long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Passwords do not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>
		
        <form action="registration.php" method="post">
		    <h1>SIGN UP</h1>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:" required>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <p>Already Registered? <a href="login.php">Login Here</a></p>
    </div>
</body>
</html>
