<?php

include 'connect.php';

if (isset($_POST['submit'])) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $middlename = $_POST['middlename'];
   $age = $_POST['age'];
   $address = $_POST['address'];
   $dob = $_POST['dob'];
   $section = $_POST['section'];
   $email = $_POST['email'];

   $sql = "insert into  `stutable` (firstname,lastname,middlename,age,address,dob,section,email) values('$firstname','$lastname','$middlename','$age','$address','$dob','$section','$email')";
   $result = mysqli_query($con, $sql);
   if ($result) {
      // echo "Data inserted Successfully";
      header('location:display.php');
   } else {
      die(mysqli_error($con));
   }
}

?>

<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="./css/user.css">

   <title>Add Student</title>
</head>

<body>
   <button class=""> <a href="index.html " class="text-light">Home</a>
      <div class="container myx-5" style="background-color: gray; ">
         
         <form  method="post">
            <div>
               <label for="name">First Name</label>
               <input type="text" id="name" placeholder="Enter your first name" name="firstname" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Last Name</label>
               <input type="text" id="name" placeholder="Enter your last name" name="lastname" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Middle Name</label>
               <input type="text" id="name" placeholder="Enter your middle name" name="middlename" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Age</label>
               <input type="text" id="name" placeholder="Enter your age" name="age" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Address</label>
               <input type="text" id="name" placeholder="Enter your address" name="address" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Year Enrolled</label>
               <input type="date" id="name" placeholder="Enter year enrolled" name="dob" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Course</label>
               <input type="text" id="name" placeholder="Enter your course" name="section" autocomplete="off" required />
            </div>
            <div>
               <label for="name">Email</label>
               <input type="email" id="name" placeholder="Enter your email" name="email" autocomplete="off" required />
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
         </form>
      </div>


</body>

</html>