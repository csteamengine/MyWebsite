<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | StoneStreet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script>
        $(document).ready(function(){
            if (Modernizr.touch) {
                // show the close overlay button
                $(".close-overlay").removeClass("hidden");
                // handle the adding of hover class when clicked
                $(".img").click(function(e){
                    if (!$(this).hasClass("hover")) {
                        $(this).addClass("hover");
                    }
                });
                // handle the closing of the overlay
                $(".close-overlay").click(function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    if ($(this).closest(".img").hasClass("hover")) {
                        $(this).closest(".img").removeClass("hover");
                    }
                });
            } else {
                // handle the mouseenter functionality
                $(".img").mouseenter(function(){
                    $(this).addClass("hover");
                })
                    // handle the mouseleave functionality
                    .mouseleave(function(){
                        $(this).removeClass("hover");
                    });
            }
        });
    </script>
    <![endif]-->
    <link href="Style.css" rel="stylesheet">
</head>
<?php include('header.php');?>
<div class="Text">
    <h1>A little about me</h1>
    <p>I am a Software engineering major at Iowa State University and I'm currently in my Junior year. I am the Vice President,
        Treasurer, and a founding member of the ISU Web Development Club. As a kid I always had an interest in computers, and
        Iowa State gave me the opportunity to make them my career. </p>
    <hr>
    <h1>Most Recent Projects</h1>
</div>
<div id="effect-5" class="effects clearfix">
    <div class="img">

        <img src="Images/apple-desk-office-technology.jpg" alt="">
        <div class="overlay">
            <p>Project Name</p>
            <a href="Portfolio.php" class="expand">+</a>
            <a class="close-overlay hidden">x</a>
        </div>
    </div>
    <div class="img">
        <img src="Images/apple-desk-office-technology.jpg" alt="">
        <div class="overlay">
            <p>Project Name</p>
            <a href="Portfolio.php" class="expand">+</a>
            <a class="close-overlay hidden">x</a>
        </div>
    </div>
    <div class="img">
        <img src="Images/apple-desk-office-technology.jpg" alt="">
        <div class="overlay">
            <p>Project Name</p>
            <a href="Portfolio.php" class="expand">+</a>
            <a class="close-overlay hidden">x</a>
        </div>
    </div>
</div>

<div class="Text">
    <hr>
    <h1>Most Recent Accomplishment</h1>
</div>

<div id="effect-5" class="effects1 clearfix">
    <div class="img">
        <img src="Images/apple-desk-office-technology.jpg" alt="">
        <div class="overlay">
            <p>Project Name</p>
            <a href="Portfolio.php" class="expand">+</a>
            <a class="close-overlay hidden">x</a>
        </div>
    </div>
</div>

<div class="Text">
    <p>Recently, a friend and I won the Rockwell Collins award at HackISU, an event where computer nerds gather
        to develop software or hardware projects. We developed a self balancing robot with lots of wires and circuit boards.
        We spent less than $10 on the robot and won over $500 in prizes.
    </p>
    <hr>
    <h1>A Brief Look at My Life</h1>
</div>
<p id="img_cont">
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
    <a href="#"><img src="Images/apple-laptop-notebook-notes.jpg" /></a>
</p>
<div class="Text">
    <hr>
</div>
<div class="HireMe">
    <p>Want to hire me today? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn">Contact Me</button></p>
</div>
<<<<<<< Updated upstream
=======
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
                // handle the mouseleave functionality
                .mouseleave(function(){
                    $(this).removeClass("hover");
                });
        }
    });
</script>
>>>>>>> Stashed changes
<?php include('footer.php');?>

