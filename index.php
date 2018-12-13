<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventbrite</title>
    <link rel="stylesheet" href="./css_files/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
</head>
<body>
    <!-- Main Container -->
    <div class="container-fluid">

        <!-- Navigation bar -->
        <nav class="navbar">
            <a href="#"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.html">Browse Events</a></li>
                <li><a href="./createEvent.html">Create Events</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.php">Log In</a></li>
            </ul>
        </nav>

        <!-- Container with video -->
        <div class="container-fluid bg-black shape">
            <div class="hero">
                <video autoplay muted loop id="video">
                    <source src="./Resources/Video/Video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="hero-text">
                <h1 
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >Discover events happening in your city</h1>
                <h2 
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="900"
                    data-sal-easing="ease-out-bounce"
                >Do more of what you love</h2>
            </div>
            <div class="arrow bounce">
                <i class="fa fa-angle-down fa-2x txt-white"></i>
            </div>
        </div>

        <!-- Container with the Gallery -->
        <div class="container mt-2">
            <h1 class="g-head"
                data-sal-duration="1200"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Categories to Explore</h1>
            <h3 class="g-subhead"
                data-sal-duration="1200"
                data-sal="slide-left"
                data-sal-delay="700"
                data-sal-easing="ease-out-bounce"
            >Find out the events in the moods for...</h3>
            <div class="gallery">
                
                <div 
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce" 
                >
                    <div class="card">
                        <img src="./Resources/Images/food.png">
                        <div class="caption">
                            <h3>Food & Drink</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnFoodDrink">
                            </div>
                        </div>
                    </div>
                </div>




                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/concerts.png">
                        <div class="caption">
                            <h3>Concerts</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnConcert">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/artdrama.png">
                        <div class="caption">
                            <h3>Art & Drama</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnArtDrama">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/business.png">
                        <div class="caption">
                            <h3>Business</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnBusiness">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/exhibitions.png">
                        <div class="caption">
                            <h3>Exhibitions</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnExhibition">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/meetups.png">
                        <div class="caption">
                            <h3>Meetups</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnMeetup">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/party.png">
                        <div class="caption">
                            <h3>Party</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnParty">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/sports.png">
                        <div class="caption">
                            <h3>Sports</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnSports">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/health.png">
                        <div class="caption">
                            <h3>Health & Wellness</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnHealthWellness">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/tech.png">
                        <div class="caption">
                            <h3>Technology</h3>
                            <div class="additional">
                                <p>food drink food drink</p>
                                <input type="submit" value="Explore" id="btnTechnology">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create event banner -->
        <div class="container bg-black-solid banner mt-3"
            data-sal-duration="1400"
            data-sal="fade"
            data-sal-delay="500"
            data-sal-easing="ease-out-bounce"
        >
            <h1 class="banner-text"
                data-sal-duration="800"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Want to create an <span>event ?</span></h1>
            <a class="btn-secondary" href="#">Start Now</a>
        </div>

        <!-- Latest Events -->
        <div class="container mt-2">
            <h1 class="g-head"
                data-sal-duration="1200"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Recent Events</h1>
            <h3 class="g-subhead"
                data-sal-duration="1200"
                data-sal="slide-left"
                data-sal-delay="700"
                data-sal-easing="ease-out-bounce"
            >Find out all the latest events happening...</h3>

            <!-- Recent Events Gallery -->
            <div class="gallery mt-3">
                <!--event box-->
                <?php 
            
                $sql = "SELECT * FROM event ORDER BY event_start_date DESC LIMIT 5";
                $res = query_execute($sql);

                while($dr = mysqli_fetch_array($res)){

                    $eventname = $dr["event_name"];
                    $loc = $dr["location"];
                    $sdate = $dr["event_start_date"];
                    $stime = $dr["event_start_time"]; 
                    $image =  $dr["image"];          
                    
                ?>

                <div 
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce" 
                >
                    <div class="card">
                        <img src="./upload/<?php echo $image; ?>">
                        <div class="caption">
                            <h3><?php echo(htmlentities($eventname));?></h3>
                            <div class="additional">
                                <p><?php echo(htmlentities($loc));?><br><?php echo(htmlentities($sdate));?><br><?php echo(htmlentities($stime));?></p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>


                
                
            </div>
        </div>
    </div>
    
    <!-- footer-->
    <div class="container footer bg-yellow mt-3">
        <div class="main-section">
            <h1>Stay in Touch</h1>
            <p>Subscribe for the latest updates of top events and festivals nearby</p>
            <form>
                <input type="text" id="sub-email" placeholder="Enter your email address here">
                <input type="submit" id="sub-submit" value="Subscribe">
            </form>
        </div>
        <div class="sub-section">
            <p>Follow us on</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="trademark">
        <p>Eventbrite Inc. &copy; 2018</p>
        <div class="terms">
            <a href="#">Terms of Services</a>
            <a href="#">FAQ</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>

    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script src="./scripts/animate.js"></script>
</body>
</html>