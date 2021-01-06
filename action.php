<?php 

$hostname = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'company';

$conn = mysqli_connect($hostname, $db_user, $db_pass, $db_name);

$full_name = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];

$sql = "INSERT INTO user(fullname, email , password, contact) values('$full_name', '$email', '$password','$contact')";

if(mysqli_query($conn, $sql )){
    echo "<script>alert('User Resgistered successfully')</script>";

}
else{
    echo mysqli_error($conn);
}

mysqli_close($conn);





