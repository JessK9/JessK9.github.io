<?php
include("login-action.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //DETAILS SENT FROM THE FORM
    $myfirstname = mysqli_real_escape_string($db, $_POST['fname']);
    $mylastname = mysqli_real_escape_string($db, $_POST['lname']);

    $sql = "SELECT id FROM userDetails WHERE firstName = '$myfirstname' AND lastName = '$mylastname'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);

    // if result matched then table rows must be 1
    if($count == 1) {
        //session_register("myfirstname");
       // $_SESSION['login_user'] = $myfirstname;
        echo 'Signed in';
       // header("location: welcome.php");
     }else {
        $error = "Your Login Name or Password is invalid";
     }
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
       
        </head>
<body>
	<form action="login-action.php" method="post">  <!--when submit is clicked the data is sent to login-action.php page-->
        <label for="fname">First name:</label>
        <br>
        <input type="text" id="fname" name="fname"> 
        <br>
        <label for="lname">Last name:</label>
        <br>
        <input type="text" id="lname" name="lname">
        <br>
        <label for="email">Email address:</label>
        <br>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <input type="submit" value="submit">
    </form> 
</body>
</html>