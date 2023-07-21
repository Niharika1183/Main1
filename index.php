<?php include("connection.php"); ?>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <video autoplay loop muted plays-inline id="video">
      <source src="DonatePageBG.mp4" type="video/mp4">
  </video>
    <nav>
      <img src="Bookish-01.png" class="logo">           
      <ul class="yoni">                                                                   
          <li id="contact"><a class="yo" href="card.html"">Contact Us</a></li>
          <li id="contact1"><a class="yo1" href="Index1.html"">Home</a></li>
      </ul>
     
  </nav>
   
  <!-- <div class="scroll"> -->
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required name="fname"/>
        </div>

        <div class="input-box">
          <label>University Email Address</label>
          <input type="text" placeholder="Enter email address" required name="email" />
        </div>
        <div class="input-box">
          <label>Roll Number</label>
          <input type="text" placeholder="Enter Roll Number" required name="roll"/>
        </div>
        <div class="input-box">
          <label>Course</label>
          <input type="text" placeholder="Enter Course" required name="course" />
        </div>
        <div class="input-box">
          <label>Branch</label>
          <input type="text" placeholder="Enter Branch" required name="branch" />
        </div>
        
        <div class="select-box">
          <select name="select">
            <option hidden>Year</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
          </select>
        </div>

        
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required name="phone" />
          </div>
          <div class="input-box">
            <label>Name of the Book</label>
            <input type="number" placeholder="Enter Name of the Book" required name="name" />
          </div>
          <div class="input-box">
            <label>Date you want to submit your Book</label>
            <input type="date" placeholder="Enter birth date" required name="date"/>
          </div>
          
        <div class="input_field">
          <input type="submit" value="Register" class="btn" name="register">
          </div>
      </form>
    </section>
  <!-- </div> -->
  </body>
</html>
<?php
if($_POST['register'])
{
$fname = $_POST['fname'];
$email = $_POST['email'];
$roll =$_POST['roll'];
$course =$_POST['course'];
$branch =$_POST['branch'];
$select =$_POST['select'];
$phone =$_POST['phone'];
$name =$_POST['name'];
$date =$_POST['date'];




$query= "INSERT INTO FORM VALUES('$fname', '$email', '$roll', '$course', $branch', '$select', '$phone', '$name','$date')";
$data = mysqli_query($conn, $query);
if ($data)
{
echo "Data Inserted into Database";
}
else
{
echo 'Failed";
}
}
?>