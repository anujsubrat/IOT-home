<?php
$server="localhost";
$username="root";
$password="";
$dbname="iot";

$con =mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("connection failed due to".mysqli_connect_error());
}
//echo"your registration is Sucessfull";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$hpassword=password_hash($password,PASSWORD_DEFAULT);

$sql= "INSERT INTO `userinfo` (`fname`, `lname`, `email`, `mobile`, `gender`, `address`, `pincode`, `password`, `date`) VALUES ('$fname', '$lname', '$email', '$mobile', '$gender', '$address', '$pincode', '$password',current_timestamp())";
//echo $sql;
if($con->query($sql)== true){
    echo "Registraion Sucessfull <br><br><br>";
   
    echo "<center><button><a href='html.html' target='_blank'>Go to home</a></button></center>";
}else{
    echo "Error : $sql <br> $con->error";

}
$con->close();
?>