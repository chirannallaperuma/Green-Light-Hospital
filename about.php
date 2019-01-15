<?php
if (!isset($_SESSION)) {
        session_start();
    }
?>

<?php
	include('header.php');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Green Light Hospital</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		
		<center><H1 style="color:#000080;">About Us</H1></center>
			
		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="image/medi.JPEG" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Mission</h3>
										<p>" To be a regional centre providing comprehensive tertiary hospital services in a friendly and caring environment. We achive this through highly skilled staff, state-of-the-art technology and a dedication to consistent quality and continous improvement " </p>
										<h3>Vision</h3>
										<p>" To be the most customer-friendly leading edge tertiary hospital in Sri-lanka " </p>
										
										
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Our Story</h3>
									<p>Green Light Hospital has been a trusted name in Sri Lankan healthcare for more than seven Decades.We have built a reputation for regional leadership in medical excellence and innovation, based on a simple philosophy: that improving the health of our community should be driven by passion as well as compassion.We offer the best consultants, specialists and employees, all of whom are dedicated to providing exceptional clinical outcomes and utmost customer satisfaction. With cutting-edge technology, we have evolved into a world-class tertiary care institute. Our offer several  facilities.We have specialised doctors according to the needs of the patients and they have qualifications and skills on it.Our aim is to provide you a comfortable service through our experience. </p>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="image/doctor.JPEG" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Management</h2>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<h4>Chairman <br> </h4>
									<div class="image square fit">
										<img src="image/no.png" alt="" />
									</div>
									<H3>Mr.L.L.B.Lenadora </H3>
									
								</div>
								<div class="col align-center">
									<h4>Group Cheif Executive Officer</h4>
									<div class="image square fit">
										<img src="image/no.png" alt="" />
									</div>
									<H3> Mrs.N.L.Lenadora </H3>
									
								</div>
								<div class="col align-center">
									<h4>Commity Member</h4>	
									<div class="image square fit">
										<img src="image/no.png" alt="" />
									</div>
									<H4>Mr.L.Lenadora</H4>
									
								</div>
							</div>
						</div>
					</section>

			</div>

			<br><br>
      <footer>
  <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/consult.JPG" width="300" height="150">
                        <h2>CAREERS</h2>
                        <p>In keeping with our promise to deliver the very best in healthcare, we welcome the highest echelon of specialist consultants to join our professional team.</p>
                    </div>
                    <div class="card-link">
                        <a href="careers.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/6.JPG" width="300" height="150">
                        <h2>HIGHLIGHTS</h2>
                        <p>If you are passionate to serve humanity and be a part of a team that strives to provide the very best in patient care, please contact us. </p>
                    </div>
                    <div class="card-link">
                        <a href="" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/suggest.JPEG" width="300" height="150">
                        <h2>SUGGESTIONS & COMPLAINTS</h2>
                        <p>Your suggestions and complaints help us improve the quality of our customer services, helping us to serve you with greater efficiency.</p>
                    </div>
                    <div class="card-link">
                        <a href="complain.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>



</footer>


</body>
<style type="text/css">
      

        .card-box {
            background: #FAFAFA;
            min-height: 300px;
            position: relative;
            padding: 30px 30px 20px;
            margin-bottom: 20px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            position: relative;
            cursor: pointer;
        }

        .card-box:hover {
            background: linear-gradient(to right, #1fa2ff17 0%, #12d8fa2b 51%, #1fa2ff36 100%);
        }

        .card-box:after {
            display: block;
            background: #2196F3;
            border-top: 2px solid #2196F3;
            content: '';
            width: 100%;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .card-title h2 {
            margin: 0;
            padding-top: 5%;
            color: #2196F3;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 15px;
        }

        .card-title p {
            margin: 0;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .card-link a {
            text-decoration: none;
            font-family: 'Oswald', sans-serif;
            color: #FF5722;
            font-size: 15px;
        }

      
    </style>
			


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>