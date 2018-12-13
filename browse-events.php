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
        <nav class="navbar bg-black">
            <a href="./index.html"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.php">Browse Events</a></li>
                <li><a href="./createEvent.php">Create Event</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.html">Log In</a></li>
            </ul>
        </nav>

        <!-- Container with the Gallery -->
        <div class="container mt-5">
            <h1 class="g-head"
                data-sal-duration="1200"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Events to Explore</h1>
            <h3 class="g-subhead"
                data-sal-duration="1200"
                data-sal="slide-left"
                data-sal-delay="700"
                data-sal-easing="ease-out-bounce"
            >Find out all the events happening nearby...</h3>

            <!-- Search bar -->
            <div class="container bg-black-solid search-bar">
                <form>
                    <input type="text" id="txt-event" placeholder="Event">
                    <input type="text" id="txt-location" placeholder="Location">
                    <select id="select-option">
                        <option value="any">Any date</option>
                        <option value="today">Today</option>
                        <option value="tomorrow">Tomorrow</option>
                        <option value="this-weekend">This Weekend</option>
                        <option value="this-week">This Week</option>
                        <option value="this-month">This Month</option>
                        <option value="next-month">Next Month</option>
                        <option value="pick-date">Pick a Date</option>
                    </select>
                    <input id="input-date" type="date">
                    <input type="button" value="Filter">
                </form>
            </div>
            <!-- Gallery -->
            <div class="gallery mt-3">
                <div 
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce" 
                >
                    <div class="card">
                        <img src="./Resources/Images/sample.png">
                        <div class="caption">
                            <h3>Event Name</h3>
                            <div class="additional">
                                <p>Location: xxxxxx<br>Date: xxxx-xx-xx<br>Time: xx:xx</p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
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
                        <img src="./Resources/Images/sample.png">
                        <div class="caption">
                            <h3>Event Name</h3>
                            <div class="additional">
                                <p>Location: xxxxxx<br>Date: xxxx-xx-xx<br>Time: xx:xx</p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
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
                        <img src="./Resources/Images/sample.png">
                        <div class="caption">
                            <h3>Event Name</h3>
                            <div class="additional">
                                <p>Location: xxxxxx<br>Date: xxxx-xx-xx<br>Time: xx:xx</p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
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
                        <img src="./Resources/Images/sample.png">
                        <div class="caption">
                            <h3>Event Name</h3>
                            <div class="additional">
                                <p>Location: xxxxxx<br>Date: xxxx-xx-xx<br>Time: xx:xx</p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
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
                        <img src="./Resources/Images/sample.png">
                        <div class="caption">
                            <h3>Event Name</h3>
                            <div class="additional">
                                <p>Location: xxxxxx<br>Date: xxxx-xx-xx<br>Time: xx:xx</p>
                                <input type="submit" value="Info">
                                <input type="submit" value="Mark Going">
                            </div>
                        </div>
                    </div>
                </div>
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