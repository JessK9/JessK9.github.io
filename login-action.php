<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Humphrey01$');
define('DB_NAME', 'userDetails');
/*connect to the MySQL database*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//check the connection
if($link === false) {
    die("ERROR: could not connect " . mysqli_connect_error());
}

if(!isset($_POST['fname'], $_POST['lname'], $_POST['email'])) {
    exit('please fill in the fields');
}

if($stmt = $con->prepare('SELECT userID, firstName FROM user WHERE emailAddress = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if($stmt->num_rows > 0) {
        echo 'Welcome '. $_POST['fname'];
    } else{
        echo 'Something went wrong';
    }
	$stmt->close();
}
?>