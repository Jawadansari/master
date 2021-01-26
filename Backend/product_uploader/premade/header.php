<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .btn-outline-success {
      color: #ffffff;
      border-color: #ffffff;
    }

    .h1 {
      text-align: center;
      padding: 10px;
      color: white;
      background-color: rgb(65, 65, 65);
    }

    .colA {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .jumbotron1 {
      padding: 2rem 1rem;
      margin-bottom: 2rem;
      background-color: #343a40;
      color: white;
      border-radius: 0.3rem;
    }

    .form {
      margin-bottom: 30px;

    }
  </style>

</head>

<body style="background-color:#e9ecef;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="images/logoicon.svg" width="50" height="50" alt="logoicon">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Graphics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Video Animation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-caption">
        <h1>PORTFOLIO</h1>
        <p>The High Defination Graphics Design For Your Work</p>
      </div>

      <div class="carousel-item active">
        <img src="images/1234.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/final1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/final2.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/final3.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/final4.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/Portfolio-templates.jpg" class="d-block w-100">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
