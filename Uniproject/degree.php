<!DOCTYPE html>
<html lang="en">
<title>Degree</title>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      
    <?php
      include 'degr.php';
      
    ?>
    
</head>

<body>

    <section class="sub-header">
        <nav>
            <a href="Finalproject.html"><img src="projectimages/logo1.png" height="70px"></a>
            <div class="nav-Links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="Course.html">COURSE</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Blogs.php">BLOG</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                    <li><a href="Applyonline.html">APPLY ONLINE</a></li>

                    <li><a href="login.html">Login</a></li>
                    <li><a href="sign up.html">Sign Up</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1 style="color: crimson;">APPLY</h1>
    </section>




    <div class="container2">
        
    <center>
       
            <h1>APPLY ONLINE</h1>
            <h3>Online</h3>
            <form  method="post">
        <fieldset>

          <br>

          <label>First name</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <input type="text" id="fname" name="fname1" placeholder="Enter your first name" class="f1" required>

          <br>

          <label>Last name</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <input type="text" id="lname" name="lname1" placeholder="Enter last name" class="f1" required>

          <br>
          <br>

           <label for="">Marks in Intermediate</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
           <input type="number" placeholder="Enter Marks" name="marks1" />

          <br>
          <br>
          
          <label for="Course">Select Department</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <select name="select1" id="">
                    <option value="Department Of Educational Sciences">Department Of Educational Sciences</option>
                    <option value="Department Of Computer Science">Department Of Computer Science</option>
                    <option value="Department Of International Relations">Department Of International Relations</option>
                </select>
          <br>
          <br>
         <label for="">Select Degree</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <select name="select2" id="">
                    <option value=""> B.Ed (Hons.) 4 Year</option>
                    <option value=""> B.Ed (Bridging) </option>
                    <option value=""> BS Health and Physical Education </option>
                    <option value=""> BS Computer Science (BSCS)
                    </option>
                    <option value=""> BS Artificial Intelligence (BS AI) </option>
                    <option value=""> BS International Relations </option>
                    <option value=""> BS International Relations</option>
                </select>
           <br>
           <br>

         <label for="">Email</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="email" placeholder="Enter your Valid email" name="email1" required class="f1" />

          <br>

          <label>Address</label> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <input type="text" id="Addres" name="address1" placeholder="Address" class="f1" required>

          <br>

            <label for="">phone#</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="tel" placeholder="Enter your phone number" name="phone1" class="f1" required>
          
          <br>
            <label for="">Upload your photo</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                
                <input type="file" name="photo1" id="" required class="f1">
           &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
        <br>
         <a href="intermediate.php"><input type="submit" value="submit" name="saves" class="sub"></a>
         
          <br>
          <br>

        </fieldset>
      </form></center>
 
    </div>
    <div class="course-col2">
        <center>
            <h1>For More Info Visit:</h1>
            <iframe src="https://numl.edu.pk/" frameborder="0"
                height="700px" width="50%"></iframe>
        </center>
    </div>


    </div>
    </div>
    </section>

    <section class="facilites">
        <h1>Our Facilities</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">

        </div>
    </section>

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, laboriosam ducimus.
            Quasi rerum <br>dolorum nemo modi numquam vel iure. Fuga unde perferendis
        </p>
        <div class="icon">
            <a href="https://www.facebook.com/NUMLRawalpindi"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/NUMLRawalpindi"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/NUMLRawalpindi"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
        </div>
        <p>Made BY <i class="fa fa-heart-o"></i> Group 5 </p>

    </section>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>