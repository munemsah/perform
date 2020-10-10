<?php include("header.php");  

require_once 'connection.php';
echo "<div class='container'>";

$sql ="SELECT * from books";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

?>



<div class="form-group">
    <label for=""></label>

    <?php
    echo "<select>
    <option>SELECT</option>";
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        echo '<option'.$row['Category'].'</option>';


    }
    echo "</select>";
    ?>


</div>



<h1> List </h1>

<table class="table table-bordered table-striped">

<thread>
<tr>

<th> Book Title</th>
<th> Book author</th>
<th> Book ISDM</th>
<th> Book Category</th>
</tr>
</thread>

<?php
while($row = mysqli_fetch_assoc($result))
{
    echo "<form action='' method='POST'>";
    echo "<tr>";
    echo "<input type= 'hidden' value='".$row["id"]."' name='id'/>";
    echo "<td>".$row["book_title"]."</td>";
    echo "<td>".$row["authorname"]."</td>";
    echo "<td>".$row["ISBN"]."</td>";
    echo "<td>".$row["Category"]."</td>";
    echo "</tr>";
    echo "</form>";

}
?>
</table>


<?php
}
else {
    echo "<h1> no record </h1>";
}
?>


</div>
<?php include("footer.php");
