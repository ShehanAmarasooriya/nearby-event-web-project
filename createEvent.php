<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php confirmLogin();?>
<?php

if(isset($_POST["btnCreateEvent"])){

    $datetime = strftime("%B-%d-%Y %H:%M:%S", time()); //grap btn click time
    $ename = mysqli_real_escape_string($conn, $_POST["eventName"]);
    $loc = mysqli_real_escape_string($conn, $_POST["location"]);
    $sdate = mysqli_real_escape_string($conn, $_POST["sdate"]);
    $stime = mysqli_real_escape_string($conn, $_POST["stime"]);
    $edate = mysqli_real_escape_string($conn, $_POST["edate"]);
    $etime = mysqli_real_escape_string($conn, $_POST["etime"]);
    $category =  mysqli_real_escape_string($conn, $_POST["category"]);
    $eventtype = mysqli_real_escape_string($conn, $_POST["eventtype"]);
    $participantsNo =  mysqli_real_escape_string($conn, $_POST["participantsNo"]);
    $des =  mysqli_real_escape_string($conn, $_POST["description"]);

    $image = $_FILES["image"]["name"];
    $target = "./upload/" . basename($_FILES["image"]["name"]);
    echo("event : ".$ename."\n");
    echo("loc : ".$loc."\n...........");
    echo("sd : ".$sdate."\n.........");
    echo("st : ".$stime."\n...........");
    echo("edate : ".$edate."\n..........");
    echo("etime : ".$etime."\n......");
    echo("category : ".$category."\n.....");
    echo("event type : ".$eventtype."\n.......");
    echo("dec : ".$des);

    //check empty fields
   if(empty($ename) || empty($loc) || empty($sdate) || empty($stime) || empty($edate) || empty($etime) || empty($category) || empty($eventtype) || empty($des)){
        $_SESSION["errMsg"] = "Empty not allowed";
        redirect_to("createEvent.php");
            return;
    }

    //check event name is already there
    if(isEventNameAlredyExist($ename)){
        $_SESSION["errMsg"] = "Event name is already there";
        redirect_to("createEvent.php");
        return;
    }

    $sql = "INSERT INTO event(event_name,description,category,event_create_datetime,event_start_date,event_start_time,event_end_date,event_end_time,location,image,author) 
                VALUES('$ename', '$des','$category','$datetime','$sdate','$stime','$edate','$etime','$loc','$image','{$_SESSION["user_name"]}')";

    //image move to upload
    move_uploaded_file($_FILES["image"]["tmp_name"], $target); 
    if (query_execute($sql) == true) {
        $_SESSION["successMsg"] = "Event Added Successfully";
        redirect_to("createEvent.php");
    }else{
        $_SESSION["successMsg"] = "fucked";
        redirect_to("createEvent.php");
    }
}


?>

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
        <nav class="navbar bg-black-solid">
            <a href="./index.php"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.html">Browse Events</a></li>
                <li><a href="./createEvent.php">Create Event</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="login_btn"><?php echo $_SESSION["user_name"] ?></a></li>
                <?php } else { ?>
                <li><a id="login_btn" href="./login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="container create-event bg-yellow">
            <h1>Create an event</h1>
            <div><?php echo success_msg();
                    echo warn_msg();
                    echo err_msg();
                    echo exception_msg(); ?>
                </div>
            <div>
                <form action="createEvent.php" method = "post"  enctype="multipart/form-data">
                    <div>
                        <input type="text" id="eventName" name="eventName" placeholder="Event Name">
                        <input type="text" id="location" name="location" placeholder="Location">
                    </div>
                    <div>
                        <input placeholder="Start Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="sdate" name="sdate">
                        <input placeholder="Start Time" type="text" onfocus="(this.type='Time')" onblur="(this.type='text')" id="stime" name="stime">
                    </div>
                    <div>
                        <input placeholder="End Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="edate" name="edate">
                        <input placeholder="End Time" type="text" onfocus="(this.type='Time')" onblur="(this.type='text')" id="etime" name="etime">
                    </div>
                    <div>
                        <select  name="category" id="category">
                            <option value="">Event Category</option>
                            <option value="food_and_drink">Food & Drink</option>
                            <option value="concerts">Concerts</option>
                            <option value="art_and_drama">Art & Drama</option>
                            <option value="business">Business</option>
                            <option value="exhibition">Exhibition</option>
                            <option value="meetups">Meetups</option>
                            <option value="party">Party</option>
                            <option value="sports">Sports</option>
                            <option value="health_and_wellness">Health & Wellness</option>
                            <option value="technology">Technology</option>
                        </select>
                        <select id="eventtype" name="eventtype" ><!--onchange="selectType()"-->
                            <option value="">Event Type</option>
                            <option value="openEvent">Open Event</option>
                            <option value="closedEvent">Closed Event</option>
                        </select>
                        <input class="parti" type="text" placeholder="Count" id="participantsNo" name="participantsNo">
                    </div>
                    <textarea placeholder="Description" id="description" name="description">

                    </textarea>
                    <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                    </label>
                    <input id="file-upload" type="file" name="image" id="image"/>
                    <input type="submit" id="btnCreateEvent" name="btnCreateEvent" value = "Add Event">
                </form>
            </div>
        </div>
    </div>

    <!-- footer-->
    <div class="container footer bg-yellow">
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