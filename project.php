<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monish Naidu</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
		<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #FF0000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 3px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>

    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>IOT Enabled Environment monitoring system</h1>
                            <br/>
                            <a  href="connect.php"><button class="button" style="color:#FFFFFF"><span>Wanna know more?</span></a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
			<div class="col-xs-12">
				<h3>Abstract</h3>
				<p>Internet of Things (IoT) is expected to play a major role in our lives through pervasive systems of sensor networks encompassing our environment. These systems are designed to monitor environment changes and generate result which can be transmitted and saved at cloud from where this information can be accessed through applications and further actions can be taken.
This project presents the implementation and results of an environment monitoring system using light sensor and temperature sensor. The temperature is measured using temperature sensor and an alert sent via message, email and even a tweet on social media. The system deploys Bolt iot wifi module which transmits data to open IOT API service Digital Ocean.
</p>
			</div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>