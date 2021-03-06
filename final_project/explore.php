<?php




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
                <a class="profile-link" href="description.html">Profile</a>
                <a class="create-workout-link" href="create_workout.html">Create Workout</a>
            </div>
        </div>
        <!-- takes up space behind hovering nav bar. -->
        <div class="navbar-buffer"></div>
        <div class="tags-container">
            <div class="tags">
                <div class="tag">
                    <h2>Triceps</h2>
                </div>
                <div class="tag">
                    <h2>Back</h2>
                </div>
                <div class="tag">
                    <h2>Quads</h2>
                </div>
                <div class="tag">
                    <h2>Shoulders</h2>
                </div>
                <div class="tag">
                    <h2>Core</h2>
                </div>
                <div class="tag">
                    <h2>Legs</h2>
                </div>
                <div class="tag">
                    <h2>Yoga</h2>
                </div>

            </div>
        </div>
        <div class="workouts-container">
            <div class="workouts">
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/pullups.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Extreme Pullups</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info</p>
                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/shoulder_press.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/row.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
                </div>
                <div class="workout">
                    <div class="workout-top-half">
                        <img class="workout-image" src="images/random.jpg">
                    </div>
                    <div class="workout-bottom-half">
                        <h1 class="workout-title">Lorem Ipsum</h1>
                        <h2 class="workout-author">Natalie Pham</h2>
                        <p class="workout-description">insert info </p>

                    </div>
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

    // $(".navbar").addClass( "nav-fade-in-animation" );
    // $(".logo").addClass( "nav-fade-in-animation" );
    $(".tag").addClass("tags-fade-in-animation");
    $(".workout").addClass("workouts-fade-in-animation");
    $(".resume-link").addClass("highlight-animation3");
    $(".highlight1").addClass("highlight-animation1");
    $(".highlight2").addClass("highlight-animation2");
});
</script>

</html>