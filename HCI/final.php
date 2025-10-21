<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Feedback sent</title>
</head>
<body>
<div class="container">
        <?php
        if (isset($_POST["Send FeedBack"])) {
           $course = $_POST["course"];
           $reg_num = $_POST["reg_num"];
		   $feedback = $_POST["feedback"];
		   
            require_once "record_database.php";
			sql = "SELECT * FROM feed WHERE reg_num = '$reg_num'";
			$result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
		}
        ?>
		<h1>Student Details</h1>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    <h1> Your Feedback is Recorded</h1>
	<p><a href="logout.php">Another Response</a></p>
</body>
</html>
