<?php include("header.php")  ?>
<?php include("connection.php") ?>
<title>Member Registration</title>


<?php


if(isset($_POST['submit'])) 
{
    $book = $_POST['books'];
  $member = $_POST['member'];
  $isbn = $_POST['isbn'];
   $copies = $_POST['copies'];
  $rd = $_POST['rd'];

  
    if($book == ""|| $member == ""  || $isbn == ""  || $copies == "" || $rd == "") 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else{

        $insert="SELECT copies FROM `borrow` WHERE  isbn='$isbn'";
        $result=mysqli_query($conn,$insert);
        if($result!= TRUE){
            echo "<script>alert('You haven't borrowed this book!');</script>";
            //echo "You haven't borrowed this book!";
        }
        else{
                $row = mysqli_fetch_assoc($result);
                $insert2="SELECT * FROM `books` WHERE isbn='$isbn'"; 
                $result2=mysqli_query($conn,$instert2);
                $row2 = mysqli_fetch_assoc($result2);
                $copies=$row2['copies'];
                $copies2=$copies+$copies2;  
                $insert3="UPDATE books set copies='$copies' WHERE isbn='$isbn' "; 
                $result=mysqli_query($conn,$insert3);
                echo "<script>alert('Data Returned....!');</script>";   
                        
                
            }
            
    }

}


?>


<body>
  <section class="image">

    <form class="reg-box border-warning" action="" method="post">
      <h3 class="text-capitalize text-center text-white p-lg-4">Register as a Volunteer</h3>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="books" placeholder="Book ID">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="member" placeholder="Member ID">
  </div>
<div class="form-group ">
    <input type="name" class="form-control" name="isbn" placeholder="ISBN">
  </div>
    <div class="form-group">
  <select name="copies"  class="form-control">
        <option selected>Number of Copies...</option>
        <option>1</option>
        <option>2</option>

      </select>
  </div>

<div>
  <div class=" my-2 boxinfo">
      <label style="font-weight:bold;">Return Date</label>
      </div>
      <div class="form-group my-2 boxinfo">
      <input type="date" name="rd"  ?>
      <span id="userNumMess" class="text-danger"></span>
       </div>

   <input type="submit" name="submit" class="btn btn-danger" value="Borrow Book">
</div>

</form>

</div>
</form>
</section>
</body>




<?php include("footer.php")  ?>