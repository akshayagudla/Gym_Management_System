<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONFIRMATION DATA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <style>
            /*table{
                border-collapse:collapse;
                width:80%;
                /*color:red;
                font-size:25px;
                text-align:left;
                
                color:black;
                margin-left: auto;
                margin-right: auto;
            }*/
           table th{
                background-color:gray;text-align:center;
                color:white;
            }
            /*tr:nth-child(even){background-color :#f2f2f2;
                color:black;
            }
            tr:hover{background-color:lightgray;}*/
            h1{
                text-align:center;
                color:whitesmoke;
            }
            .table{
                margin:auto;
                width:80% !important;
                background-color :#f2f2f2;
                font-size:20px;
            }
            /**{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:'Poppins',sans-serif;
}*/
            body {
                /*font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
            background-image: url("../wt_project_/assets/images/istock.jpg");
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;*/
                background-color: rgb(69,121,233);
            }
            /*#main{
    min-height: 90vh;
    width:90%;
    border-radius: 15px;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
   /*background-color:rgb(82, 69, 233);*/
   /*background-color: rgb(144, 143, 163);
   background-color:rgb(201, 28, 28);
   background-color:rgb(69, 121, 233);
    margin:auto;
            }*/
        </style>
    </head>
<body>
    <br>
    <br>
    <br>
    <div id="main">
    <h1>Confirmation List</h1>
    <br>
    <table class="table table-bordered table-striped text-center">
    <thead>
    <tr>
        <th>NAME</th>
        <th>PHONE NUMBER</th>
        <th>TRAINER</th>
    </tr>
        </thead>
        <tbody>
<?php

$conn=mysqli_connect('localhost','root','','fitness_arena');
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
if(isset($_POST['x1'])){
    $a = $_POST['t1'];
    $phn=$_POST['phn'];
    $y=$_POST['n1'];
    $sql = mysqli_query($conn,"INSERT INTO table_2(name,phone_number,trainer) Values('$y','$phn','$a')");
 /*$r="SELECT name,phone_number from table_1 WHERE phone_number=$phn";
        $re=$conn->query($r);
        if($re->num_rows==1)
        {
            
            while($xo=$re->fetch_assoc()){
                echo" 
            <tr>
            <td>".$xo["name"]."</td>
            <td>".$xo["phone_number"]."</td>
            <td>".$a."</td>
            </tr>";
            /*$x=$xo["name"];
            $y=$xo["phone_number"];
               $sql = mysqli_query($conn,"INSERT INTO table_2(name,phone_number,trainer) Values('$x','$y','$a')");
            }
        }*/
        $q="DELETE FROM table_1 WHERE phone_number = $phn";
        $delete=$conn->query($q);
    }
$sql="SELECT * from table_2";
$res=$conn->query($sql);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        echo "
        <tr>
        <td>".$row["name"]."</td>
        <td>".$row["phone_number"]."</td>
        <td>".$row["trainer"]."</td>
        
        </tr>";
    }
    echo "</tbody></table></div>";
}
else{
    echo "0 result";
        /*$q="DELETE FROM table_1 WHERE phone_number = $phn";
        $delete=$conn->query($q);*/
 }
    ?>
</body>
</html>