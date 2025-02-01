<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">

</head>
<body>
<body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">CS Cafeteria</label>
      <ul>
        <li>
        <a href="admindetails.php">Dashboard</a>
        <a href="reservation.php">Reservation</a>
          <a href="employee.php">Employee</a>
        
          <a href="display.php">User</a>
          <a href="menu1.php">Menu</a>
                    <a href="display.php">Order Details</a>
          <a href="logout.php"><input type="submit" name="" value="Logout" style="background: red;
    color: white;
    height: 35px;
    width: 100px;
    margin: 0px;
    font-size: 18px;
    border: 0;
    border-radius: 5px;
    cursor: pointer;"></a>
       </li>
      </ul>
    </nav>
    
    </body>


</body>
</html>

<?php
    include("connection.php");
    error_reporting(0);

    // $admin_profile =$_SESSION['adminname'];     
    // if($admin_profile==true){

    // }
    // else{
    //     header("location:admin.php");
    // }

    $query="SELECT * FROM reserve";
    $data=mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    // $result=mysqli_fetch_assoc($data);

    
    if($total !=0)
    {
        ?>

        <h2 align=" center"  ><mark>Dispalying Reserve Request</mark></h2>
        <table  border="1" cellspacing ="7">
            <tr>
            <th width="10%" >Name</th>
            <th width="10%">ID</th>
            <th width="10%">Phone Number</th>
            <th width="10%">Number of Person</th>
            <th width="10%">Date</th>
            <th width="10%">Time</th>

            </tr>
            
        

        <?php
        while($result=mysqli_fetch_assoc($data))
            echo " <tr>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['number']."</td>
            <td>".$result['person']."</td>
            <td>".$result['date']."</td>
            <td>".$result['time']."</td>
            


            
            </tr>";
    }
    else{
        echo" No records found";
    }
?>

<!-- <a href="logout.php"><input type="submit" name="" value="Logout" style="background: red;
    color: white;
    height: 35px;
    width: 100px;
    margin: 20px;
    font-size: 18px;
    border: 0;
    border-radius: 5px;
    cursor: pointer;"></a> -->

</table>


                