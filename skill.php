<?php
require("includes/common.php");
require("includes/header.php");
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
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
						<div class="col-xs-12">
							<div class="col-xs-8">
							<br><br><br>
								<p style="vertical-align:middle">Artificial Intelligence (AI) and Machine Learning (ML) are two very hot buzzwords right now, and often seem to be used interchangeably. ... Machine Learning is a current application of AI based around the idea that we should really just be able to give machines access to data and let them learn for themselves.</p>
								<a href="connect.php"><button class="button" style="vertical-align:middle"><span>Contact me to know more</span></button></a>
							</div>
							<div class="col-xs-4">
								<div class="thumbnail">
									<img src="img/4.jpg">
								</div>
								<div class="caption">
									<p><h1>ML/AI</h1></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							
							<div class="col-xs-8">
							<br><br><br>
								<p style="vertical-align:middle">Data visualization is the graphical representation of information and data. By using visual elements like charts, graphs, and maps, data visualization tools provide an accessible way to see and understand trends, outliers, and patterns in data.</p>
								<a href="connect.php"><button class="button" style="vertical-align:middle"><span>Contact me to know more </span></button></a>
							</div>
							<div class="col-xs-4">
								<div class="thumbnail">
									<img src="img/1.jpg">
								</div>
								<div class="caption">
									<p><h1>Data Visualization</h1></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="col-xs-8">
							<br><br><br>
								<p style="vertical-align:middle">Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python's design philosophy emphasizes code readability with its notable use of significant whitespace.</p>
								<a href="connect.php"><button class="button" style="vertical-align:middle"><span>Contact me to know more</span></button></a>
							</div>
							<div class="col-xs-4">
								<div class="thumbnail">
									<img src="img/2.jpg">
								</div>
								<div class="caption">
									<p><h1>Python</h1></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							
							<div class="col-xs-8">
							<br><br><br>
								<p style="vertical-align:middle">Web development is the work involved in developing a web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.</p>
								<a href="connect.php"><button class="button" style="vertical-align:middle"><span>Contact me to know more </span></button></a>
							</div>
							<div class="col-xs-4">
								<div class="thumbnail">
									<img src="img/3.jpg">
								</div>
								<div class="caption">
									<p><h1>Web Development</h1></p>
								</div>
							</div>
						</div>
				</div>
			</div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>