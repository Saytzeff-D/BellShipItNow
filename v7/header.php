<?php
  session_start();
  $username = isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['username'] != 'Guest'?$_SESSION['username']:'';
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/css/style-1.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
  <title>Bellshipitnow</title>
</head>

<body data-w-id="5bcd4d1b9f4e0e4bca6d4334">
  
<section class="top_header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="header_ul">
            <li>
              <a class="top_header_ancher">
                <img src="assets/img/image/mail.png"> info@bellshipitnow.com </a>
              </li>
              <li>
                <a class="top_header_ancher">
                  <img src="assets/img/image/phone.png"> 1-844-227-4641 </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 text-end">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select Language </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="header mt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <a href="index.html">
                <img src="assets/img/image/logo.png" class="w-100">
              </a>
            </div>
            <div class="col-md-8">
              <ul class="main_ul">
                <li>
                  <a class="navbar" href="index.php">Home </a>
                </li>
                <li>
                  <a class="navbar" href="about.php">About Us </a>
                </li>
                <li>
                  <a class="navbar">Tacking </a>
                </li>
                <li>
                  <a class="navbar">Free Rate Estimate </a>
                </li>
                <li>
                  <a class="navbar">FAQs </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 text-end">
              <ul class="header_ul">
                <li>
                  <a class="navbar" type="button" data-toggle="modal" data-target="#exampleModal">Login </a>
                </li>
                <li>
                  <a class="btn btn-primary w-100">Sign Up </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="mobile_header">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-4">
              <a href="index.php">
                <img src="assets/img/image/logo.png" class="w-100">
              </a>
            </div>
            <div class="col-md-6 col-5"></div>
            <div class="col-md-3 col-3 text-end">
              <a href="#" id="myButton" class="btn world_button">
                <img src="assets/img/image/toogle.png" style="width: 29px;">
              </a>
            </div>
          </div>
          <div class="row " id="myDiv" style="display:none">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <ul class="header_ul_mobile text-center">
                    <li>
                      <a class="navbar">Home </a>
                    </li>
                    <li>
                      <a class="navbar" href="about.html">About Us </a>
                    </li>
                    <li>
                      <a class="navbar">Tacking </a>
                    </li>
                    <li>
                      <a class="navbar">Free Rate Estimate </a>
                    </li>
                    <li>
                      <a class="navbar">FAQs </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

 