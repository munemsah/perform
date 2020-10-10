<?php include("header.php")  ?>
<?php include("connection.php") ?>
<title>Member Registration</title>


<?php


if(isset($_POST['submit'])) 
{
    $book = $_POST['book'];
  $author = $_POST['author'];
  $isbn = $_POST['isbn'];
  $cat = $_POST['cat'];
   $copies = $_POST['copies'];

	
    if($book == ""|| $author == ""  || $isbn == "" || $cat == "" || $copies == "" ) 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO books(book_title, authorname,ISBN, Category, copies) 
        VALUES('$book', '$author','$isbn','$cat','$copies')";
    }

        if (mysqli_query($conn, $insert)) 
        {
             echo " <div class='alert alert-primary alert-dismissible fade show' role='alert'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                 <span class='sr-only'>Close</span>
             </button>
             <strong>Successfully Added</strong> You should check all fields.
         </div>";
        } 
        else 
        {
             echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
        }
       

}


?>


<body>
  <section class="image">

    <form class="reg-box border-warning" action="" method="post">
      <h3 class="text-capitalize text-center text-white p-lg-4">Register as a Volunteer</h3>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="book" placeholder="Book Name">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="author" placeholder="Author Name">
  </div>
<div class="form-group ">
    <input type="name" class="form-control" name="isbn" placeholder="ISBN">
  </div>

    <div class="form-group">
  <select name="cat"  class="form-control">
        <option selected>Book Category...</option>
        <option>Romance</option>
        <option>Thriller</option>
        <option>Mystery</option>
        <option>Fantasy</option>

      </select>
  </div>

 <div class="form-group ">
    <input type="name" class="form-control" name="copies" placeholder="Book Copies">
  </div>
  

<div>

   <input type="submit" name="submit" class="btn btn-success" value="Create My Account">
</div>
<p class="text-warning pt-4">
      Already a member: <a class="text-white" href="volunteerlogin.php">SIGN IN</a>
    </p>
</form>

</div>
</form>
</section>
</body>




<?php include("footer.php")  ?>