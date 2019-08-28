<!DOCTYPE html>
<html ng-app="app">
<head>
    <!-- TITLE -->
    <title>Sharebook.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" href="img/logotab.png" type="image/x-icon" /> 
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IcoFont CSS -->
    <link href="css/icofont.css" rel="stylesheet">

    <!-- FontAwesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- OWL CAROUSEL CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">

    <!-- ANIMATE CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Mobile Menu Css -->
    <link href="css/meanmenu.css" rel="stylesheet">

    <!-- PrettyPhoto CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- DIRECTORY FONT -->
    <link href="font/stylesheet.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">


    <!--Jquery,bootstrap,angular,fa-icons JS CDN's-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">




    <!--Local links-->
    <link rel='stylesheet' href='css/style.css'/>
    <script type="text/javascript" src="js/ctrl.js"></script>
    <!-- <script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script> -->
    <script src='ocr\lib/tesseract.js'></script>
    <script src='ocr/lib/runtime.js'></script>
    <script src='ocr/lib/edittime.js'></script>
    <script src='ocr/lib/common.js'></script>

<script>

Tesseract.recognize('uploads/uploads.png')
       .progress(function  (p) { console.log('progress', p)    })
       .then(function(result){
 document.getElementById("demo").innerHTML =(result.text)
 });
</script>

</head>
<body ng-controller="ctrl">
        <header class="header-area">
        <div class="head-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- /.End Of Logo -->
                    </div>
                    <div class="col-sm-9 hidden-xs">
                        <div class="head-top-right fix">

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-social-google-map"></i>
                                </div>
                                <div class="info-content">
                                    <span>178/15 Tân Sơn<br>
                                    TÂN BÌNH,TP.HCM</span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-clock-time"></i>
                                </div>
                                <div class="info-content">
                                    <span>9am - 7pm <br> Mon - Sat</span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info border-none fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-contacts"></i>
                                </div>
                                <div class="info-content">
                                    <a href="mailto:info@company.com">truongcongloi98@outlook.com</a>
                                    <a href="tel:+0213421543">0911.855.369</a>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Top Head -->
        <div class="head-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="mainmenu-area">
                        <nav class="navigation-menus">
                            <ul class="mobile-menu nav navbar-nav">
                                <li ><a href="index.html">Home</a></li>
                                <li><a  href="ebook.html">Sách Hay</a></li>
                               
                                <li><a  href="sachsale.html">Sách sale</a></li>
                                <li class="active"><a  href="ocr.php">OCR</a></li>
                                <li><a  href="tintuc.html">Triết Lý & Tin Tức</a></li>
                                <li><a  href="danhngon.html">Danh Ngôn</a></li>
                                <li><a  href="gioithieu.html">Giới Thiệu</a>
                                </li>
                                <li><a  href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <a href="contact.html" class="button button-hover quote-btn">get a free quote</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Bottom Head -->
    </header>
<div class="container">
    <div >
        <!-- <h1 style="text-align: center;margin-top: 20px;"><i class="fa fa-search faa-pulse animated"></i> Optical Character Recognition</h1> -->
        <!-- <p>This is an OCR app</p></div>-->
        <div class="text-center">
            <div class="form-group ">

                <div class="">
                    <form action="upload.php" action="/api/getText" method="POST" enctype="multipart/form-data" >
                       <!--action="/api/getText"  target="frame"  enctype="multipart/form-data" method="post" -->

                        <div class="input-group col-md-10 col-sm-10" style="margin-top: 50px;margin-left: 15px;width: 89%">
                            <!--Browse button-->
                            <span class="input-group-btn btn-file "><!-- ng-change="fileUpload();"-->
                                <button type="file" name="file" class="btn btn-primary"> Browse…
                                 <i class="fa fa-folder-open faa-horizontal animated"></i></button>
                                <!--Accepts only image files-->
                                 <input type="file" name="file"  id="image" accept="image/*" >
                                 <!-- type="file" name="image" -->
                            </span>

                            <input  class="form-control" placeholder="Select File" readonly>
                            <span class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-success ">Upload
                            <i class="fa fa-upload faa-float animated"></i> </button></span>
                        </div>

                    </form>
                    <!--<div class="input-group">

                    <form action="/api/getText" enctype="multipart/form-data" method="post" target="frame">

                        <span class="input-group-btn">
                           <span class="btn btn-primary"> Browse… </span>

                        </span>
                        <input type="file" id="image" name="image"/>
                        <span class="input-group-btn">
                            <input class="btn btn-success " type="submit" value="Upload File" name="submit"></span>
                    </form>
                    </div>-->

                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <br><br>
                        <!--Display uploaded image-->
                        <img id='img-upload' class="img-rounded box"
                             src="img/giphy.gif"/>
                    </div>
                    <div class="col-md-6 col-sm-6"><br><br>
                    <div>
        <textarea class="iframe well box" style="width: 345px;height: 500px; color: black" id="demo" name="subject" placeholder="Write something.."></textarea>
                    </div>

                        <!--MultiPart FormData response stored here-->
                        <!-- <iframe id="frame" name="frame" class="iframe well box" height="500px"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer Area
        =========================== -->
        <footer id="footer-area">
            <div class="footer-bottom fix">
                <div class="container bb-top foo-padding">
                    <div class="row">
                        <div class="col-sm-6 copyright">
                            <span id="textbottom">&copy; 2017 Copyright Gachoi.com . A product by Trương Công Lợi</span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="social-links">
                                <ul id="textbottom">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">google+</a></li>
                                    <li><a href="#">Zalo</a></li>
                                    <li><a href="#">Skype</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.End Of Footer Area -->

        <!-- JQUERY LIBRARY -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Mobile Menu JS -->
        <script src="js/jquery.meanmenu.js"></script>

        <!-- WayPoints JS -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>

        <!-- CounterUp JS -->
        <script src="js/jquery.counterup.min.js"></script>

        <!-- OWL CAROUSEL JS -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- PrettyPhoto JS -->
        <script src="js/jquery.prettyPhoto.js"></script>

        <!-- SLICK SLIDER -->
        <script src="js/slick.min.js"></script>

        <!-- MAIN JS -->
        <script src="js/main.js"></script>

        <!-- Color Settings JS -->
        <script src="js/color-settings.js"></script>
        <div id='bttop'><img src="img/totop.png" style="width: 50px; height: 50px"></div>
        <script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},900);});});</script>
        <script>
      function snackmessge() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}
     </script>
     <div id="snackbar">Chúc Các Bạn Có Những Giờ Phút Bổ Ích Cùng <br> Sharebook.com</div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIVV");
var btns = header.getElementsByClassName("btnpage");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("actives");
    current[0].className = current[0].className.replace(" actives", "");
    this.className += " actives";
  });
}
</script>
</body>

</html>