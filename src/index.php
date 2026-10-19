<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Ahmad Ali</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fullPage.css">  	     	                       
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<?php
$servername = "db";
$username = "root";
$password = "example";
$dbname = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Verbinding met database is geslaagd!";
?>

<div id="fullpage">

    <!-- start home -->
    <div id="home" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 wow fadeIn" data-wow-delay="0.9s"> 
                    <h3>Ahmad Ali</h3>
                    <h2>SOFTWARE DEVELOPER </h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- end home -->


 <!-- about -->
	<div id="about" class="section">
		<div class="container">
			<div class="row">
				<!-- About Section -->
				<div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
					<h2>ABOUT ME</h2>
					<h4>I'M A SOFTWARE DEVELOPER</h4>
					<p>I am a software developer with a passion for learning new languages and technologies. 
					I'm constantly striving to improve my skills and expand my knowledge to create impactful solutions.</p>
					<p>Here are the programming languages I am eager to master:</p>
				</div>
				
				<!-- Languages Section -->
				<div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">
    <?php 
        echo "<h4>LANGUAGES I'M EXCITED TO LEARN</h4>";

        include 'db.php';
        // Show only programming languages
        $sql = "SELECT * FROM languages WHERE type='programming'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<span>" . htmlspecialchars($row["language"]) . "</span>";
                echo "<div class=\"progress\" style=\"background:" . htmlspecialchars($row["color"]) . "\"></div>";
            }
        } else {
            echo "0 results";
        }
         include 'db.php';
        echo "<h4>Subjects im lerning</h4>";
        $sql = "SELECT * FROM languages WHERE type='other'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<span>" . htmlspecialchars($row["language"]) . "</span>";
                echo "<div class=\"progress\" style=\"background:" . htmlspecialchars($row["color"]) . "\"></div>";
            }
        } else {
            echo "0 results";
        }
    ?>
</div>
			</div>
		</div>
	</div>
	
    <!-- end about -->
	     <!-- cv-->
		 <div id="cv" class="section">
			<div class="container">
				<h2>MY CV</i></h2>
				<img src="images/cv.png" alt="portfolio-img1" class="cv.png width="90" height="85"">
				<h3 class="media-heading">Download My CV</h3>
				<p>I am a dedicated software developer in training at Alfa College, with a keen interest in learning, coding, and problem-solving. Click below to download my CV and explore my journey, skills, and experiences.</p>
				<a href="#" class="btn btn-primary mt-3" target="_blank">Download CV</a>
			</div>
		</div>
		
	 <!-- end cv -->
	

<!-- start projects -->
<div id="project" class="section">
    <div class="container">
        <h2 class="wow bounce">PROJECTS</h2>
        <div class="row">
            <?php
            include 'db.php';
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 col-sm-6">';
                    echo '  <a href="' . $row["link"] . '" target="_blank">';
                    echo '    <img src="images/' . $row["image"] . '" alt="' . $row["title"] . '" style="width:100%; height:auto;">';
                    echo '    <h4 style="text-align:center; margin-top:10px;">' . $row["title"] . '</h4>';
                    echo '  </a>';
                    echo '</div>';
                }
            } else {
                echo "<p>No projects found.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>

    <!-- start contact -->
    <div id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="wow bounce">CONTACT ME</h2>
                </div>
            </div>
            <div class="row">
                <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="submit" class="form-control" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end contact -->

</div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Scripts -->
<script src="js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/jquery.fullPage.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
