<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dra. Maria Goreti</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-png" href="img/leaf.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>


  <style>
    body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #2ecc71;

  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  h1 {
    color: #fff;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color:  #FFf ;
  }
  .logo-small {
    color: #2ecc71;
    font-size: 50px;
  }
  .logo {
    color: #2ecc71;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #2ecc71;
  }
  .carousel-indicators li {
    border-color: #2ecc71;
  }
  .carousel-indicators li.active {
    background-color: #2ecc71;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #2ecc71;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #2ecc71;
    background-color: #fff !important;
    color: #2ecc71;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #2ecc71 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #2ecc71;
    color: #fff;
  }

  .navbar-default{
    background-color: #2ecc71;
  }
  .navbar navbar-default navbar-fixed-top{
    background-color: #2ecc71;
  }
  .navbar{
    margin-bottom: 0;
    background-color:  #2ecc71 ;
    z-index: 9999;
    border: 0;
    margin: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color:   #fff  !important;
    background-color:  #2ecc71;

  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #2ecc71  !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
    background-color: #2ecc71;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #2ecc71;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>






   <nav class='navbar navbar-default navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
            <span class='icon-bar'>Sobre</span>
            <span class='icon-bar'>Especializações</span>
            <span class='icon-bar'>Matérias</span>
            <span class='icon-bar'>Contato</span>
          </button>
          <a class='navbar-brand' href='home.php'>Dra. Maria Goreti dos Santos</a>
        </div>
        <div class='collapse navbar-collapse' id='myNavbar'>
          <ul class='nav navbar-nav navbar-right'>
            <li><a href="home.php">Sobre</a></li>
            <li><a href="Artigos.php">Matérias</a></li>
            <li><a href="Contato.php">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </html>

