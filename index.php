<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe2</title>
    <link rel="stylesheet" href="css/materialize.css">
    <!-- link icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>       
/* @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap'); */
        
         @import url('https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap');
        html {
        font-family: "Oregano", cursive;
        font-weight: 400;
        font-style: normal;
      }
       .underline-text {
        text-decoration: underline !important;
      }
/* style for hover effect on the cards */
        .card-image:hover .overlay{
            border-radius: 10px;
            opacity: 1;
            cursor: pointer;
            text-decoration: underline white;
        }

        .video-overlay{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        } 

        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            opacity: 0;
            transition: opacity 0.5s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay-text{
            color: white;
            font-size: 2px;
            text-align: center;
        }

        .rounded-edges{
            border-radius: 10px !important;
        }

        .card-image:hover .overlay{
            border-radius: 10px;
        }

        .gradient-bg{
            background: linear-gradient(to bottom, #ffffff, #e65100);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            padding: 25px;
            background-color: #E25822;
            color: white;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .btn:hover:hover {
            transform: scale(1.1); /* Slightly scale the button */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a shadow */
        }
    </style>
    <link rel="shortcut icon" href="img/rcon.png" type="image/x-icon">
</head>
<body>
    <header>
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="white ">
                <div class="container">
                    <a href="index.html" class="brand-logo">
                        <img src="img/logo.png" alt="main logo" width="150px" class="hide-on-med-and-down">
                        <img src="img/logo.png" alt="main logo" width="75%" class="hide-on-large-only">
                    </a>
                    <!-- for sidenav to show only on mobile devices -->
                    <a href="#mobile-nav" class="sidenav-trigger right">
                        <i class="material-icons orange-text text-darken-4 hide-on-large-only">menu</i>
                    </a>
                    <!-- to hide on phone and tablet so for laptops-->
                    <ul class="right hide-on-med-and-down">
                        <li><a class="orange-text text-darken-4" href="#whoweare">Who We Are</a></li>
                        <li><a class="orange-text text-darken-4" href="recipes.php">Find a Recipe</a></li>
                        <li><a class="orange-text text-darken-4" href="#reviews">Our Reviews</a></li>
                        <li><a class="orange-text text-darken-4" href="contactus.php">Contact Us</a></li>
                        <li><button class="btn orange darken-4 white-text">Login</button></li>
                    </ul>
                </div>                
            </nav>
        </div>
        <div class="video-container hide-on-med-and-down" id="video">
            <video src="img/header-bg-vid.mp4" class="responsive-video" width="100%" alt=""></video>
            <div class="video-overlay">
                <div class="hide-on-med-and-down white-text">
                    <h2 class="white-text">Every Dish Tells A Story  </h2>
                    <h4>Explore, cook, and eat with.</h4>
                    <a href="" class="btn btn-flat orange darken-4 white-text rounded-edges"> GET STARTED</a>
                </div>
            </div>
        </div>

        <!-- sidenav for mobile device -->
        <div class="sidenav" id="mobile-nav">
            <ul>
                <li><a class="orange-text text-darken-4" href="#whoweare">Who We Are</a></li>
                <li><a class="orange-text text-darken-4" href="#recipes">Find a Recipe</a></li>
                <li><a class="orange-text text-darken-4" href="#reviews">Our Reviews</a></li>
                <li><a class="orange-text text-darken-4" href="#contact">Contact Us</a></li>
                <li><button class="btn orange darken-4 white-text">Login</button></li>
        </div>
    </header> 
    <main>
        <br>
        <br>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6"> 
                            <div class="card-content">
                                <h2 class="title text-darken-4">Start your culinary journey class <em class="orange-text text-darken-4"> today.</em></h2>
                                <p class="flow-text">We offer you a gateway to an expertly curated selection of global recipes, ranging from traditional dishes to innovative creations, spanning various cuisines and cooking techniques.</p>
                            </div>
                            <div class="card-action">
                                <a href="recipes.php" class="btn btn-flat orange darken-4 white-text">START YOUR JOURNEY</a>
                            </div>
                    </div>
                        <div class="col s12 m6 l6"> 
                                <div class="card-content">
                                    <img src="img/spagetti.png" alt="spagetti" class="responsive-img">
                                </div>
                        </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section>
            <div class="container">
                <h2 class="heading center-align"><span style="color: #000000;"> Select a</span> <span style="color: #E25822;">category</span></h2>
                <div class="row">
                    <div class="col s12 m4 l4">
                        <a href="cakes.php">
                            <div class="card rounded-edges">
                                <div class="card-image rounded-edges">
                                    <img src="img/cake-main.jpg" alt="cake" class="responsive-img rounded-edges">
                                    <div class="overlay">
                                        <div class="overlay-text" style="font-size:25px;" >Cakes
                                            <i class="material-icons white-text" style="transform: rotate(-45deg);" >arrow_forward</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col s12 m4 l4">
                        <a href="chicken.php">
                            <div class="card rounded-edges">
                                <div class="card-image rounded-edges">
                                    <img src="img/chicken-main.jpg" alt="chicken" class="responsive-img rounded-edges">
                                    <div class="overlay">
                                        <div class="overlay-text" style="font-size:25px;">Chicken
                                            <i class="material-icons white-text" style="transform: rotate(-45deg);" >arrow_forward</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>         
                    </div>
                    <div class="col s12 m4 l4">
                        <a href="soups.php">
                            <div class="card rounded-edges">
                                <div class="card-image rounded-edges">
                                    <img src="img/soup-main.jpg" alt="soup" class="responsive-img rounded-edges">
                                    <div class="overlay">
                                        <div class="overlay-text" style="font-size:25px;">Soup
                                            <i class="material-icons white-text" style="transform: rotate(-45deg);" >arrow_forward</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
            </div>
        </section>
        <br>
        <br>
        <br>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">  
                                <div class="card-content">
                                    <img src="img/chef.jpg" alt="chef" class="responsive-img">
                                </div>
                        </div>
                        <div class="col s12 m6 l6">
                                <div class="card-content">
                                    <h2 class="heading"><span style="color: #000000;"> Crafted by culinary</span> <span style="color: #880e4f;">Wizards</span></h2>                                     
                                    <p>Discover a world a flavourful options that promise mouthwatering results, mticulously curated and perfected by culinary experts, all at your fingertips. Easy as pie, isn't it?</p>
                                </div>
                                <div class="card-action">
                                    <a href="https://www.youtube.com/results?search_query=recipes" class="btn btn-flat pink darken-4 white-text">START COOKING</a>
                                </div>
                        </div>
                    </div>
                </div>
            </section> 
            
        <section class="black">
            <div class="container">
                <div class="row">
                    <br>
                    <br>
                    <h3 class="heading center-align"><span style=" color:white;">See our</span> <span style="color: #E25822;">numbers </span> </h3>                         
                        <div class="col s12 m4 l4">
                            <h2 class="white-text center-align">27k+</h2>
                            <h5 class="orange-text text-darken-4 center-align"><i>active users each month</i></h5>
                        </div>
                        <div class="col s12 m4 l4">
                            <h2 class="white-text center-align">800+</h2>
                                <h5 class="orange-text text-darken-4 center-align"><i>available recipes till date</i></h5>
                        </div>
                        <div class="col s12 m4 l4">
                            <h2 class="white-text center-align">30+</h2>
                                <h5 class="orange-text text-darken-4 center-align"><i>chefs for consultation</i></h5>
                        </div>                    
                </div>
            </div>    
            <br>
            <br>
            <br>
        </section>

        <section>
        <div class="container">
        <h2 class="heading">
            <span style="color: #000000;"> Meet the</span> 
            <span style="color: #E25822;">experts</span></h2>        
        <span  style="display: block; margin-bottom: 20px;">Our team of seasoned chefs offer expert guidance and delectable recipes to elevate your dishes to new heights.
        </span>  

            <ul id="dropdown-liam" class="dropdown-content">
            <li><a href="#!" class="orange-text text-darken-4">Chef Liam</a></li>
            <li>
                <span style="display:block; padding:10px; color:#000000;">
                Liam Hamish is a pastry artisan renowned for his delicate touch and artistic flair. 
                Known for his mastery of textures, he balances soft sponges, silky creams, and rich ganaches to perfection. 
                Liam’s philosophy: a cake should be an edible piece of art that tells a story with every bite.
                </span>
            </li>
            </ul>

            <ul id="dropdown-marcus" class="dropdown-content">
            <li><a href="#!" class="orange-text text-darken-4">Chef Marcus</a></li>
            <li>
                <span style="display:block; padding:10px;color:#000000;">
                Marcus has built his culinary career around reimagining one of the world’s most versatile proteins: chicken. 
                From smoky barbecue wings to herb-stuffed roasts and globally inspired curries, his dishes celebrate the bird’s adaptability. 
                His marinades and slow-cooking methods transform even the simplest cut into a flavorful masterpiece.
                </span>
            </li>
            </ul>

            <ul id="dropdown-hana" class="dropdown-content">
            <li><a href="#!" class="orange-text text-darken-4">Chef Hana</a></li>
            <li>
                <span style="display:block; padding:10px;color:#000000;">
                Hana is celebrated for her soul-warming soups, drawing inspiration from rustic traditions and modern wellness cuisine. 
                From hearty beef stews to delicate miso broths, her soups highlight depth of flavor and comfort. 
                She believes soups are “the hug of the culinary world,” nourishing both body and soul.
                </span>
            </li>
            </ul>

            <div class="row center-align">
            <!-- Chef Liam -->
            <div class="col s12 m4 l4">
                <img src="img/expert-1.jpg" alt="Chef Liam" class="responsive-img z-depth-2">
                <h5 class="heading">
                <span style="color: #000000;">Liam</span> 
                <span style="color: rgba(226, 88, 34, 1);">Hamish</span>
                <!-- Dropdown Trigger (icon) -->
                <a class="dropdown-trigger" href="#" data-target="dropdown-liam">
                    <i class="material-icons orange-text text-darken-4">more_vert</i>
                </a>
                </h5>
            </div>

            <!-- Chef Marcus -->
            <div class="col s12 m4 l4">
                <img src="img/expert-2.jpg" alt="Chef Marcus" class="responsive-img z-depth-2">
                <h5 class="heading">
                <span style="color: #000000;">Marcus</span> 
                <span style="color: rgba(226, 88, 34, 1);">James</span>
                <!-- Dropdown Trigger (icon) -->
                <a class="dropdown-trigger" href="#" data-target="dropdown-marcus">
                    <i class="material-icons orange-text text-darken-4">more_vert</i>
                </a>
                </h5>
            </div>

            <!-- Chef Hana -->
            <div class="col s12 m4 l4">
                <img src="img/expert-3.jpg" alt="Chef Hana" class="responsive-img z-depth-2">
                <h5 class="heading">
                <span style="color: #000000;">Hana</span> 
                <span style="color: rgba(226, 88, 34, 1);">Lee</span>
                <!-- Dropdown Trigger (icon) -->
                <a class="dropdown-trigger" href="#" data-target="dropdown-hana">
                    <i class="material-icons orange-text text-darken-4">more_vert</i>
                </a>
                </h5>
            </div>

            </div>
        
                <!-- <div class= "row">                                        
                    <div class="col s12 m4 l4">
                        <img src="img/expert-2.jpg" alt="" class="responsive-img">
                        <h5 class="heading"><span style="color: #000000;"> Liam</span> <span style="color: #E25822; ">Hamish</span></h5>                        
                    </div>      
                    <div class="col s12 m4 l4">
                        <img src="img/expert-2.jpg" alt="" class="responsive-img">
                        <h5 class="heading"><span style="color: #000000;"> Alejandro</span> <span style="color: #E25822; ">Mateo</span></h5>                        
                    </div>      
                    <div class="col s12 m4 l4">
                        <img src="img/expert-3.jpg" alt="" class="responsive-img">
                        <h5 class="heading"><span style="color: #000000;"> Miranda</span> <span style="color: #E25822; ">Tangrove</span></h5>                        
                    </div>                      
                </div>
                <br><br>
                <hr>
            </div> -->

            <div class="section">
                <h2 class="center-align"><span style="color: #000000;"> Our Esteemed</span> <span style="color: #E25822;">Clients</span></h2>       
            <div class= "row">
                <div class="col s12 m2 l2">
                    <img src="img/rest-1.avif" alt="" class="responsive-img">
                </div>                      
                <div class="col s12 m2 l2">
                    <img src="img/rest-2.avif" alt="" class="responsive-img">
                </div>                      
                <div class="col s12 m2 l2">
                    <img src="img/rest-3.avif" alt="" class="responsive-img">
                </div>                      
                <div class="col s12 m2 l2">
                    <img src="img/rest-4.avif" alt="" class="responsive-img">
                </div>      
                <div class="col s12 m2 l2">
                    <img src="img/rest-5.avif" alt="" class="responsive-img">
                </div>                      
                <div class="col s12 m2 l2">
                    <img src="img/rest-6.avif" alt="" class="responsive-img">                
                </div>
            </div>
        </div>
        <br>
        <br>
        <hr class="container">
        <br>
        <br>
    </section>
    </main>
        <footer class="gradient-bg">
            <div>
                <div class="row">
                        <div class="col s12 m3 l3">
                            <h4 class="orange-text text-darken-4">About</h4>
                            <ul>
                                <li> <a href="#whoweare" class="black-text">Who We Are</a></li>
                                <li> <a href="#meet" class="black-text">Meet the Circle</a></li>
                                <li> <a href="#reviews" class="black-text">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="orange-text text-darken-4">Explore</h4>
                            <ul>
                                <li> <a href="#recipes" class="black-text">Recipes</a></li>
                                <li> <a href="#cakes" class="black-text"> Cake</a></li>
                                <li> <a href="#soups" class="black-text"> Soups</a></li>
                                <li> <a href="#chicken" class="black-text"> Chicken</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="orange-text text-darken-4">Legal</h4>
                            <ul>
                                <li> <a href="#home" class="black-text">Privacy Policy</a></li>
                                <li> <a href="#cakes" class="black-text">Term & Conditions</a></li>
                                <li> <a href="#soups" class="black-text">Disclosure</a></li>                            
                            </ul>                               
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="orange-text text-darken-4">Contact Us</h4>
                            +2349024364876 <br>
                            customersupport@recipe.com                    
                        </div>                    
                </div> 
                <div class="white-text center-align">
                    &copy 2025 Recipe.com.<a href="https://github.com/Jennysgitt" class="white-text">All rights reserved</a>           
                </div>
            </div> 
        </footer>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems, {
      coverTrigger: false, // dropdown appears below icon
      constrainWidth: false // allows full text width
    });
  });
</script>
</body>
</html>