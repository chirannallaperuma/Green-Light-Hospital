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

		

		<!-- Banner -->
			

		<!-- One -->
		<center><h1 style="color:#000080;">Contact Us</h1></center>
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<header>
								<center><img src="image/4n.png" height="70" width="70"></center>
								<center><h3>Telephone</h3></center>
							</header>
							<center><p><b>+9434 223 9000 <br>+9434 223 0619</b></p></center>
						</article>
						<article>
							<header>
								<center><img src="image/email.JPEG" height="70" width="70"></center>
								<center><h3>email</h3></center>
							</header>
							<center><p><b>glh@gmail.com</b></p></center>
							
						</article>
						
						<article>
							<header>
								<center><img src="image/address.png" height="80" width="80"></center>
								<center><h3>Address</h3></center>
							</header>
							<center><p><b>No:58,<br />
								Central Junction,<br />
								Nagoda,<br />
								Kalutara,<br />
								Sri Lanka.</b></p></center>
							
						</article>
					</div>
				</div>
			</section>			

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.68299821082!2d79.97970831402459!3d6.561639324541043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2313495d24c07%3A0xc0f040790dd8b501!2sGreen+Light+Medical+Center!5e0!3m2!1sen!2slk!4v1537379401499" width="100%"" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                        <a href="hghlights.php" class="c-link">Go
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

	</body>
</html>