<?php
    $con = new mysqli("localhost","root","","perform");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        body{
            margin: 10% auto 0;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>

    <center><h1>Data Display & Delete</h1></center>
    <table align="center" border="1">
        <tr>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>ISBN</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
          
        <?php
	/* Fetch data from databse(select query) */
            $res = $con->query("select * from books") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <tr>
            <td><?php echo $row["book_title"]; ?></td>
            <td><?php echo $row["authorname"]; ?></td>
            <td><?php echo $row["ISBN"]; ?></td>
            <td><?php echo $row["Category"]; ?></td>
            <td> <a href="?delete=<?php echo $row["book_id"]; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    
    <?php
	/* Delete code.Wehen click on delete link this will perform.!*/
        if(isset($_REQUEST["delete"]))
        {
			$query3="DELETE from books where book_id='".$_REQUEST["delete"]."'";
            mysqli_query($con,$query3) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='display.php';</script>";   
        }
    ?>
</body>
</html>