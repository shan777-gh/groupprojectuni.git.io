<!DOCTYPE html>
<html lang="en">
    <title>Blog</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
 include("blog.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                    <li><a href="Blogs.phps">BLOG</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                    <li><a href="Applyonline.html">APPLY ONLINE</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="sign up.html">Sign Up</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Our Certificate & Onine Program 2021</h1>
    </section>

    <section class="blog-content">
        <div class="row">
            <div class="left">
                <img src="projectimages/certificate.jpg">
                <h2>Our Certificate & Onine Program 2021</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque odio, labore quas 
                    obcaecati quidem nulla id quaerat sit adipisci necessitatibus tempore fuga non consequuntur
                     ducimus pariatur ratione similique unde! </p>
                     <br>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque odio, labore quas 
                        obcaecati quidem nulla id quaerat sit adipisci necessitatibus tempore fuga non consequuntur
                         ducimus pariatur ratione similique unde!</p>
                         <br>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque odio, labore quas 
                            obcaecati quidem nulla id quaerat sit adipisci necessitatibus tempore fuga non consequuntur
                             ducimus pariatur ratione similique unde!</p>
                             <br>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque odio, labore quas 
                                obcaecati quidem nulla id quaerat sit adipisci necessitatibus tempore fuga non consequuntur
                                 ducimus pariatur ratione similique unde!</p>

                                 <div class="Comment-Box">
                                     <h3>
                                         Leave a Comment
                                     </h3>
                                     <form class="Comment-form" method="post">
                                         <input type="text" placeholder="Enter Name" name="Name">
                                         <input type="email" placeholder="Enter Email" name="Email">
                                         <textarea rows="5" placeholder="Your Comment" name="Comment"></textarea>
                                         <a href="blog.php"><button type="submit" class="btn red-btn" name="save">POST COMMENT</button></a>

                                     </form>
                                 </div>

            </div>
            <div class="right">
                <h3>Post Categories</h3>
                <div>
                    <span>
                        Business Analytics
                    </span>
                    <span>21</span>
                </div>
                <div>
                    <span>
                        Machine Learning
                    </span>
                    <span>15</span>
                </div>
                <div>
                    <span>
                        Data Science
                        
                    </span>
                    <span>18</span>
                </div>
                <div>
                    <span>
                        Commerce
                    </span>
                    <span>8</span>
                </div>
                <div>
                    <span>
                        Web Development
                    </span>
                    <span>21</span>
                </div>
                <div>
                    <span>
                        Apps Development
                    </span>
                    <span>21</span>
                </div>
                <div>
                    <span>
                        .Net Specllist
                    </span>
                    <span>21</span>
                </div>

            </div>

        </div>

    </section>

   

 
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, laboriosam ducimus.
             Quasi rerum <br>dolorum nemo modi numquam vel iure. Fuga unde perferendis 
        </p>
        <div class="icon">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
        </div>
        <p>Made BY <i class="fa fa-heart-o"></i> Group 5 </p>

    </section>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu()
        {
            navLinks.style.right ="0";
        }
        function hideMenu()
        {
            navLinks.style.right ="-200px";
        }
    </script>
    
</body>
</html>