<?php include("header.php")  ?>
<?php include("connection.php") ?>
<title>Member Registration</title>


<?php


if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
  $address = $_POST['Location'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $email = $_POST['emailaddress'];
  $contact = $_POST['Contact'];
  $age = $_POST['Age'];

	
    if($name == ""|| $address == ""  || $street == "" || $city == ""  ||   $email == "" || $contact == "" || $age == "") 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO member(Name, Address,Street, City,Email, Phone, Age) 
        VALUES('$name', '$address','$street','$city','$email','$contact','$age')";
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
    <input type="name" class="form-control" name="name" placeholder="Fullname">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Location" placeholder="Address">
  </div>
<div class="form-group ">
    <input type="name" class="form-control" name="street" placeholder="Street">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="city" placeholder="City">
  </div>

  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
</div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Contact" placeholder="Phone">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Age" placeholder="Age">
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