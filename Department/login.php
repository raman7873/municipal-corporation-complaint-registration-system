<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>Department User Login</title>
        
        <link href="/muni1.css" rel="stylesheet">
        <script type="text/javascript">
            function valid()
            {
             if(document.forgot.password.value!= document.forgot.confirmpassword.value)
            {
            alert("Password and Confirm Password Field do not match  !!");
            document.forgot.confirmpassword.focus();
            return false;
            }
            return true;
            }
        </script>
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
    width: 40%;
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
    <body>
        <div id="login-page">
            <div class="container">
                <form class="form-login" name="login" method="post" action="usercheck.php" ><br>
                    <div style="text-align: center"><h2 style="font-size: 35px; color: tomato; padding-top: 80px;">Department User Login</h2></div>
                    <br>
                    <div class="login-wrap">
                        <input type="text" name="email" placeholder="Email ID" pattern=".+@gmail\.com" autocomplete="off" class="form-control" required><br >
                        <input type="password" class="form-control" name="password" minlength="6" required placeholder="Password">
                        <span class="pull-right"><br>
                            <div style="text-align: center">
                                <a href="forgotpassword.php" > Forgot Password?</a><br><br>
                            </div>
                        </span>
                        </label>
                        <div style="text-align:center"><button  class="btn btn-theme btn-block" name="submit" type="submit" ><i class="fa fa-lock" ></i> SIGN IN</button></div>
                        
                        
                        
                </form>
                
            </div>
        </div>
    </body>
</html>