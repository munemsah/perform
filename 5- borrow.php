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
  $cd = $_POST['cd'];
  $rd = $_POST['rd'];

	
    if($book == ""|| $member == ""  || $isbn == ""  || $copies == "" || $cd == ""|| $rd == "") 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
      $insert2="SELECT * FROM `books` WHERE isbn='$isbn'"; 
          $data2=mysqli_query($conn,$insert2);
          $row = mysqli_fetch_assoc($data2);
          $copies2=$row['copies'];    
      
          
          if($copies2!= 0){
        $insert="INSERT INTO borrow(book_id, member_id,ISBN,copies, Cd, rd) 
        VALUES('$book', '$member','$isbn','$copies','$cd' ,'$rd')";
     $data=mysqli_query($conn,$insert);  
            $tcopies=$copies2-$copies;
              
              if($data == TRUE)
                        {
                            $update="UPDATE books set copies='$tcopies' WHERE isbn='$isbn' "; 
                            $dataX=mysqli_query($conn,$update);
                            echo "<script>alert('Data updated successfully..!');</script>";   
                        }
                else{echo mysqli_error($conn);}
          }
          else {
            echo "<script>alert('Books Not Found On database..!');</script>";
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


 

  <div class=" my-2 boxinfo">
      <label style="font-weight:bold;">Current Date</label>
       </div>
      <div class="form-group my-2 boxinfo">
     <input type="date" name="cd"  ?>
      <span id="userNumMess" class="text-danger"></span>
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