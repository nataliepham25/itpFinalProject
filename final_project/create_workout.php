<?php
	// Step 1: Establish DB connection
	$host = "303.itpwebdev.com";
	$user = "nqpham_db_user";
	$password = "itp303fall2021";
	$db = "nqpham_dvd_db";

	// Connect to the DB by creating an instance of the MySQLI class
	$mysqli = new mysqli($host, $user, $password, $db);

	if ( $mysqli->connect_errno) {
		echo $mysqli->connect_error;
		// Exit the program if there's an error. There's no reason to continue the program.
		exit();
	}

	$mysqli->set_charset('utf8');
	// Genres:
	$sql_genres = "SELECT * FROM genres;";
	$results_genres = $mysqli->query($sql_genres);
	if ( $results_genres == false ) {
		echo $mysqli->error;
		exit();
	}

	// Ratings:
	$sql_ratings = "SELECT * FROM ratings;";
	$results_ratings = $mysqli->query($sql_ratings);
	if ( $results_ratings == false ) {
		echo $mysqli->error;
		exit();
	}

	// Labels:
	$sql_labels = "SELECT * FROM labels;";
	$results_labels = $mysqli->query($sql_labels);
	if ( $results_labels == false ) {
		echo $mysqli->error;
		exit();
	}

	// Formats:
	$sql_formats = "SELECT * FROM formats;";
	$results_formats = $mysqli->query($sql_formats);
	if ( $results_formats == false ) {
		echo $mysqli->error;
		exit();
	}

	// Sounds:
	$sql_sounds = "SELECT * FROM sounds;";
	$results_sounds = $mysqli->query($sql_sounds);
	if ( $results_sounds == false ) {
		echo $mysqli->error;
		exit();
	}

	$mysqli->close();

?>
<!DOCTYPE html>
<html>

<head>
    <title>lifting for noobs</title>

    <!-- external css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="omegasquat">
    <meta property="og:description" content="Share your personalized workouts with your friends!">



    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ee5150bb3.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <div class="main">
        <div class="main-nav">
            <div class="logo">
                <a href="explore.html">lifting<span class="red-text">noobs</span></a>
            </div>
            <div class="navbar">
                <a class="profile-link" href="#courses">Profile</a>
                <a class="create-workout-link" href="#courses">Create Workout</a>
            </div>
        </div>
        <div class="create-workout-container">
            <div class="create-workout-card">
                <form class="create-workout-form">
                    <input type="text" id="title" name="title" placeholder="Title">
                    <div class="checkboxes">

                        <label class="container">Triceps
                            <input type="checkbox" name="tag" value="triceps">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Back
                            <input type="checkbox" name="tag" value="back">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Quads
                            <input type="checkbox" name="tag" value="quads">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Shoulders
                            <input type="checkbox" name="tag" value="shoulders">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Biceps
                            <input type="checkbox" name="tag" value="biceps">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Core
                            <input type="checkbox" name="tag" value="core">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Legs
                            <input type="checkbox" name="tag" value="legs">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Calves
                            <input type="checkbox" name="tag" value="calves">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Yoga
                            <input type="checkbox" name="tag" value="yoga">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Endurance
                            <input type="checkbox" name="tag" value="endurance">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <textarea id="description" name="description" placeholder="Description" rows="4"
                        cols="50"></textarea>
                    <input class="submit-button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
// Navbar effect
var nav = document.querySelector('.main-nav');
window.addEventListener('scroll', function() {
    if (window.pageYOffset > 10) {
        nav.classList = 'main-nav small'
        document.querySelector('#logo').src = "images/logoblack.png";
        let links = document.querySelectorAll('.nav-links');
        for (let i = 0; i < links.length; i++) {
            links[i].style.color = 'rgb(70,55,48)'
        }
    } else {
        nav.classList = 'main-nav'
        // document.querySelector('#logo').src = "images/logowhite.png"
        // let links = document.querySelectorAll('.nav-links');
        // for (let i=0; i<links.length; i++){
        // 	links[i].style.color = 'white';
        // }
    }
})

// pre-loader
$(window).on("load", function() {
    $(".loader-wrapper").fadeOut("slow");

    $(".navbar").addClass("nav-animation");
    $(".logo").addClass("nav-animation");
    $(".resume-link").addClass("highlight-animation3");
    $(".highlight1").addClass("highlight-animation1");
    $(".highlight2").addClass("highlight-animation2");
});
</script>

</html>
