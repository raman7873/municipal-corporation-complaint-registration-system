<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Municipal Corporation Complaint Registration System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/muni1.css" rel="stylesheet">
</head>
<style>
    html,
body {
    height: 100%;
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}


.nav > li > a:hover{
    background-color:#808080;!important
}

.carousel {
    height: 50%;
}

.item,
.active,
.carousel-inner {
    height: 100%;
}


.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    background-image: -moz-linear-gradient();
}

footer {
    margin: 50px 0;
}
h1 {
    margin: .67em 0;
    font-size: larger;
    text-align-: center;
  }
.text-center {
    text-align: center;
    height: 20px;
    position: relative;
    
  }
  .text-justify {
    text-align: justify;
  }
.col-lg-12{
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  .form-control {
    display: block;
    margin:auto;
    width: 50%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }
  .modal-dialog {
    position: relative;
    width: auto;
    margin:5px;
  }
  .modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
            background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
  }
  .modal-title {
    margin: auto;
    align-items: center;
    line-height: 1.42857143;
  }
  .modal-body {
    position: relative;
    padding: 15px;
  }
  .text, h1{
    position: relative;
    height: 10px;
    z-index: 2;
    font-size: larger;
  }
  .pull-right {
    right: auto;
    left: auto;
    margin: auto;
    align-items: center;
  }
  .a{

    align-items: center;
  }
  .modal-header {
    padding: 15px;
    align-items: center;
  }
  .modal-title{
    text-align: center;
    font-size: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color:seagreen;
  }
  .modal-body{
    font-size: 20px;
    padding: 15px;
    color: red;
    text-align: center;
  }
  .modal-footer{
    text-align: center;
    size: 100px;
  }
</style>
<body img>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark ">
      <a class="navbar-brand py-0" href="">
        <img src="logo.jpg" width="70" height="70" class="d-inline-block align-center" alt="">
          <span ><b>Municipal Corporation</b></span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-white" id="navbarNav">
        <ul class="nav nav-pills justify-content-end">
          <li class="nav-item">
            <a class="nav-link active text-white" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="http://localhost//CMS/Public/login.php">User Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="http://localhost//CMS/Department/login.php">Department Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="http://localhost//CMS/Admin/login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <h1 class="text-center" style="font-size: 42px;">Municipal Corporation Complaint Registration System</h1>
        <div class="carousel-inner">
            <div class="item active">    
                <div class="fill" style="background-image:url('D:\xampp\htdocs\CMS\common\bg.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('D:\xampp\htdocs\CMS\common\logo.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <br>
    <div class="container">
        <footer class="page-footer font-small blue fixed-bottom">
        </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>
</body>
</html>