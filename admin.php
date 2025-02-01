<html>
    <head>
        <title>Dispaly</title>
        <link rel="stylesheet" href="logout.css">
        <link rel="stylesheet" href="stylee.css">

        <style>
            body{
                background: white;
            }
            table{
                background-color: white;
                text-align: center;
            }
            
        </style>

    </head>
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
                    <a href="reserve.php">Reservation</a>
                    <a href="employee.php">Employee</a>
                    <a href="display.php">Menu</a>
                    <a href="logout.php"><input type="submit" name="" value="Logout" style="background: red;
                        color: white;
                        height: 35px;
                        width: 100px;
                        margin: 0px;
                        font-size: 18px;
                        border: 0;
                        border-radius: 5px;
                        cursor: pointer;">
                    </a>
                </li>
                </ul>
        </nav>
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

    

    $query="SELECT * FROM admin";
    $data=mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);

    if($total != 0)
{
    ?>

    <h2 align=" center"  ><mark>Rama Rama Admins<br><br> Admin Details</mark></h2>
    <table  border="1" cellspacing ="7">
        <tr>
        <th width="10%" >Username</th>
        <!-- <th width="10%">E-Mail</th> -->
        <th width="10%">Password</th>
        </tr>
        
    

    <?php
    while($result=mysqli_fetch_assoc($data))
        echo " <tr>
        <td>".$result['uname']."</td>
        <td>".$result['passd']."</td>
        </tr>";
}
else{
    echo" No records found";
}
?>
<!-- 
<a href="logout.php"><input type="submit" name="" value="Logout" style="background: red;
color: white;
height: 35px;
width: 100px;
margin: 20px;
font-size: 18px;
border: 0;
border-radius: 5px;
cursor: pointer;"></a> -->

</table>

                


