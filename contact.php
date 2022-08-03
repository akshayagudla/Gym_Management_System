<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <style>
            p { 
    text-align: center;
    border-top: 1px solid #57b1dc; 
    padding-top: 1em;
  }
  

img {
	display: flex;
  margin-left: auto;
  margin-right: auto;
}
        </style>
    </head>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "fitness_arena";
    $con = mysqli_connect($host,$user,$pass,$db);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone_number= $_POST['phone_number'];
        $message= $_POST['message'];
        /*echo $name,$email,$phone_number,$message;*/
        $sql = mysqli_query($con,"INSERT INTO table_1(name,email,phone_number,message) Values('$name','$email','$phone_number','$message')");
        if($sql){
            /*echo "successful";*/
            echo "<p>Thank you for your interest in the program. We have received your submitted information. A member of our team will contact you soon.</p>

            <img src='../wt_project_/assets/images/thankyou.jpg' alt='Thank you' class='center'>";
        }
        else{

            echo "Unsuccessful";
        }
    }
?>
</html>