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

    <!-- added this for arrows! -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">

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
                <a class="create-workout-link" href="create_workout.html">Create Workout</a>
            </div>
        </div>
        <div class="description-container">
            <div class="description-card">
                <div class="first-half">
                    <h1 class="description-title">Workout Title</h1>
                    <h1 class="description-author">Natalie Pham</h1>
                    <img class="description-image" src="images/random.jpg">
                    <div class="upvotes">
                        <h2>
                            <!-- need to import font-awesome library for this (here's the documentation for React: https://fontawesome.com/how-to-use/on-the-web/using-with/react) -->
                            <i class="fas fa-chevron-up"></i>
                            <span class="upvote-count">15</span>
                            <i class="fas fa-chevron-down"></i>
                        </h2>
                    </div>
                </div>
                <div class="second-half">
                    <div class="tags">
                        <div class="tag">
                            <h2>Quads</h2>
                        </div>
                        <div class="tag">
                            <h2>Shoulders</h2>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Ultrices neque ornare aenean euismod. Natoque penatibus et magnis
                            dis parturient. Blandit massa enim nec dui nunc. Faucibus scelerisque eleifend donec pretium. Facilisis magna etiam tempor orci eu. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Consectetur adipiscing
                            elit pellentesque habitant morbi tristique. At consectetur lorem donec massa. Neque sodales ut etiam sit amet. Et malesuada fames ac turpis egestas integer eget aliquet. Non quam lacus suspendisse faucibus interdum posuere
                            lorem ipsum dolor. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida.
                        </p>
                    </div>

                </div>
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

        $(".navbar").addClass("nav-animation");
        $(".logo").addClass("nav-animation");
        $(".resume-link").addClass("highlight-animation3");
        $(".highlight1").addClass("highlight-animation1");
        $(".highlight2").addClass("highlight-animation2");
    });
</script>

</html>