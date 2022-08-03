<!DOCTYPE html>
<html lang="en">
<head>
    <title>PENDING DATA</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../wt_project_/sssm.css">
    </head>
<body>
   
    <div id="main">
        <h2 style="margin-top:20px;color:#fff">Pending Details</h2>
    
        <?php
            $conn=mysqli_connect('localhost','root','','fitness_arena');
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
                }

            $sql="SELECT name,phone_number,email,message from table_1";
            $res=$conn->query($sql);
            if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                /* echo "
                    <tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["phone_number"]."</td>
                    <td>".$row["message"]."</td>
                    <td><form method='GET' action='delete.php'>
                    <input type='text' name='t1' class='in'/>
                    </td>
                    <td>
                    <input type='hidden' name='n1' value=".$row["name"].">
                    <input type='hidden' name='phn' value=".$row["phone_number"].">
                    <input type='submit' name='x1' value='CONFIRM' class='btn'/></td>
                    </form>
                    </tr>";*/
                echo "
                 <div class='card' id='mat'>
                    <div class=card-header text-nowrap>
                     Email : ".$row["email"]."
                        </div>
                    <div class='card-body'>
                    <div id='tx' class='text-nowrap'>
                        <p>Name:".$row["name"]."</p>
                        <p>Phone:".$row["phone_number"]."</p>
                    </div>
                    <div id='in'>
                    <form method='POST' action='delete.php'>
                    <input type='hidden' name='n1' value=".$row["name"].">
                    <input type='hidden' name='phn' value=".$row["phone_number"].">
                    <table>
                    <td><input type='text' name='t1' class='form-control' style='width:100%;text-align:center;' placeholder='Enter Trainee Name:'></td>
                    <td><input type='dateTime-local' name='t2' class='form-control' style='width:100%;text-align:center;' placeholder='Slot Timings '></td>
                    <td><input type='submit' name='x1' value='Submit' style='height: 40px;width:100%;text-align: center;'class='btn btn-success'  ></td>
                    </table>
                    </form>
                    </div>
                    </div>
                </div>";
            }
            /* echo "</table>";*/
            }
            else{
            echo "0 result";
            }
            $conn->close();
            /*<a href='pending.php?phn=".$row["phone_number"]." ' class='btn'>OK</a></td>*/
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</html>
