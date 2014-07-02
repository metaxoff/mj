<!DOCTYPE html>
<html>
    <head>
        <!-- Title here -->
        <title>Maria &AMP; Jan</title>
        <!-- Description, Keywords and Author -->
        <meta name="description" content="Maria and Jan Website">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- FlexSlider --> 
        <link href="css/flexslider.css" rel="stylesheet"> 
        <!-- Font awesome CSS --> 
        <link href="css/font-awesome.min.css" rel="stylesheet">		
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>

    <body>
        <!-- Navigation Starts -->
        <div class="navbar navbar-default navbar-fixed-top bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Maria &amp; Jan</a>
                </div>

                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="anchorLink">Invitation</a></li>
                        <li><a href="#wedding" class="anchorLink">Wedding</a></li>
                        <li><a href="#rsvp" class="anchorLink">RSVP</a></li>
                        <li><a href="#photos" class="anchorLink">Photos</a></li>
                    </ul> 
                </nav>
            </div>
        </div>
        <a name="home" id="home"></a>
        <!-- Navigation Ends -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">    
                        <video width="100%" height="auto" controls autoplay>
                            <source src="./video.php" type="video/mp4">
                        </video>
                    </div>

                    <div class="col-md-2">
                        <div class="main-date bulgaria">
                            <i class="icon-heart"></i>
                            <div class="date">
                                <span class="month">
                                    <strong>2,AUG</strong>
                                </span><br>
                                <span class="year">
                                    <strong>2014</strong>                                
                                </span><br>
                                <span class="place">Bulgaria</span>
                            </div>	
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bor"></div>
                        <div class="bor"></div>
                    </div>
                </div>

                <div class="row about">
                    <div class="col-md-4 col-sm-4">
                        <div class="bride">
                            <h3>Maria</h3>
                            <hr>
                            <p class="text-center"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="love">
                            <i class="icon-heart"></i>
                        
                            <h3>2,AUG 2014</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="bride">
                            <h3>Jan</h3>
                            <hr>
                            <p class="text-center"></p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

<!-- Wedding Starts -->
<div class="wedding" id="wedding">
    <div class="container">
        <div class="bor"></div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="well row">
                    <div class="col-md-6">
                        <p><strong> Love makes life a paradise...</strong></p><br />
                       <p> We invite you to be with us<br />
                        as we begin our new life<br />
                        together<br />
                        on Saturday, the second of August<br />
                        two thousand and fourteen<br />
                        at half past five in the<br />
                        afternoon<br />
                        <b>Hilton Sofia <br>
                        1, Bulgaria Blvd.,  Sofia,  1421,  Bulgaria  <br /><br /></b>
                        Maria Metaxova<br />
                        and<br />
                        Jan Van den Bogaert <br />
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img width="200px" src="img/maria_jan/love-birds-hi.png" style="margin-top: 50px;" />
                    </div>
                </div>
            </div>
        </div>
        <a name="rsvp" id="rsvp"></a>
        <hr>
    </div>
</div>

<!-- Wedding Ends -->
<!-- RSVP Starts -->
<div class="rsvp">
    <div class="container">
        <div class="title">
            <h3>RSVP</h3>
        </div>
        <div class="bor"></div>

        <div class="row">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <div class="well">
                    <p>We really hope that you can make it for our special day! Please send us your confirmation by July, 15 2014</p>
                    <br><p>Thank you!!!</p>
                    <form class="form-horizontal" role="form" id="rsvpForm">
                        <div class="form-group">
                            <label class="control-form col-md-3" for="name">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" required="required" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-form col-md-3" for="email">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" required="required"  class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-form col-md-3" for="attentive">Message</label>
                            <div class="col-md-9">
                                <textarea name="message" required="required"  class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="button" class="btn btn-danger" id="submitRSVP">Submit</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12" style="margin-top: 20px;">
                                <span class="notification" style="display: none;  margin-left: 30px" id="notification"> </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
        <!-- About Starts -->
<div class="about photos" id="photos">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="bor"></div>
            <div class="flexslider" >
                <ul class="slides">
                    <li><img src="img/maria_jan/1.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/2.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/3.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/4.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/5.jpg" alt="" class="img-responsive" /></li>                                                      
                    <li><img src="img/maria_jan/6.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/7.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/8.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/9.jpg" alt="" class="img-responsive" /></li>
                    <li><img src="img/maria_jan/10.jpg" alt="" class="img-responsive" /></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer>
    <p class="col-md-2 col-md-offset-5">
        Copyright &copy; 2014 Angel Metaxov<br>
     All Rights Reserved.</p>
</footer>

<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 
<!-- Javascript files -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- jQuery Anchor Plugin -->
<script src="js/jquery.anchor.js"></script>
<!-- Respond JS for IE8 -->
<script src="js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="js/html5shiv.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
<script src="../js/html5media.min.js"></script>
</body>	
</html>
<script type="text/javascript">
    $('#submitRSVP').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'rsvp.php',
            data: $('#rsvpForm').serialize(),
            dataType: 'json',
            type: 'POST',
            complete: function(data) {
                $('input').val('');
                $('textarea').val('');
                $('#notification').html('<span class="alert-success">The message is successfully sent to Maria and Jan</span>');
                $('#notification').show(1000);
            }
        });
    });
    
    $(".flexslider").flexslider({
        animation:  "fade slide",
        touch:"true",
        animationSpeed: "600",
        slideshowSpeed:"4000",
        directionNav: false
       
    });
</script>

 