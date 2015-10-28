<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact | Stonestreet</title>
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
    <![endif]-->
    <link href="Style.css" rel="stylesheet">
</head>
<?php include('header.php');?>
<div class="Text">
    <h1 style="text-decoration: underline;">Gregory Steenhagen</h1>
    <p><strong>Email:</strong> gcs@iastate.edu</p>
    <p><strong>Alt. Email:</strong> csteen@stonestreetsoftware.com</p>
    <p><br>You can either use this contact form, or send me an email with your own email client.</p>
    <div class="contactform">
        <form id="contact-form" name="contact-form" method="post" action="form-processing.php">
            <p>
                <label><br />
                    <input name="Name" type="text" id="FName" size="48" placeholder="Name"/>
                </label>
            </p>
            <p>
                <label><br />
                    <input name="Email" type="text" id="Email" size="48" placeholder="Email"/>
                </label>
            </p>
            <p>
                <label><br />
                    <textarea name="Message" id="Message" cols="50" rows="7" placeholder="Message"></textarea>
                </label>
            </p>
            <p>
                <label class="sbutton">
                    <input name="button" type="submit" class="submit-button" id="button" value="Send"  />
                </label>
            </p>
        </form>
    </div>
</div>
<?php include('footer.php');?>
