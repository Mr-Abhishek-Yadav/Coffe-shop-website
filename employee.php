<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
      nav{
    background: #0082e6;
    height: 80px;
    width: 100%;
  }
  table {
        border-collapse: collapse;
        width: 100%;
        margin: 0.5rem;
    }
    th, td {
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .center {
        text-align: center;
    }
    .remove-icon {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }
  nav ul{
    float: right;
    margin-right: 20px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }
</style>
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
                    <a href="display.php">User</a>
                    <a href="display.php">Menu</a>
                    <a href="display.php">Order Details</a>
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

<table>
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Employee ID</th>
            <th>Employee Email</th>
            <th>Employee Address</th>
            <th class="center">Employee Phone Number</th>
          
            <th class="center">Date of Joining</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        $data = array(
            array('Deepak', '010', 'deepak23@gmail.com', 'Powai', '8879675645',  '2023-02-13'),
            array('Ajay', '011', 'ajrj@gmail.com', 'samta nagar,thane', '9467586487', '2023-03-08'),
            array('kamlesh', '012', 'kamlesh@gmail.com', 'indiranagar,kalyan', '9356686383', '2023-02-28'),
            array('priya', '013', 'priya33@gmail.com', 'chiragnagar, Ghatkopar', '9996883573',  '2023-03-28'),
            array('pannalal', '014', 'suraj@gmail.com', 'Bhandup', '8887665689',  '2023-04-28'),
            array('vinod', '015', 'vinooo@gmail.com', 'naya nagar, Mira road', '7768889556',  '2023-04-30'),
            array('ramesh', '016', 'rameshhh@gmail.com', 'krishna nagar, Marol', '9147483647',  '2023-03-28'),
            array('nidhi', '017', 'nidhi143@gmail.com', 'Navpada, Andheri', '8147483647',  '2023-04-18'),
            array('Abhinav', '018', 'abhii@gmail.com', 'sakinaka, Andheri', '7147483647',  '2023-05-07'),
        );
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '<td class="center"><img class="remove-icon" src="https://icons.veryicon.com/png/o/miscellaneous/linear-small-icon/edit-246.png" alt="Remove icon"></td>';
            
            echo '<td class="center"><img class="remove-icon" src="https://cdn-icons-png.flaticon.com/512/3405/3405244.png" alt="Remove icon"></td>';
            echo '</tr>';

        }
        ?>
    </tbody>
</table>
<script>
    // Add an event listener to each remove icon
    const removeIcons = document.querySelectorAll('.remove-icon');
    removeIcons.forEach((removeIcon) => {
        removeIcon.addEventListener('click', () => {
            // Get the parent row of the remove icon
            const row = removeIcon.parentNode.parentNode;
            // Remove the row from the table
            row.parentNode.removeChild(row);
        });
    });

    // Add an event listener to each edit icon
    const editIcons = document.querySelectorAll('.edit-icon');
    editIcons.forEach((editIcon) => {
        editIcon.addEventListener('click', () => {
            // Get the parent row of the edit icon
            const row = editIcon.parentNode.parentNode;
            // Do something with the row, such as open a form for editing
        });
    });
</script>
    
</body>
</html>