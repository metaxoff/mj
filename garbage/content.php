<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <ul class="nav-tabs nav" id="navigation">
            <li class="active">
                <a href="#invitation"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Invitation</a>
            </li>
            <li>
                <a href="#wedding_venue"><i class="glyphicon glyphicon-glass"></i>&nbsp;Wedding venue</a>
            </li>
            <li>
                <a href="#wedding_party">Wedding party</a>
            </li>
            <li>
                <a href="#rsvp">RSVP</a>
            </li>
            <li>
                <a href="#bulgaria">Bulgaria</a>
            </li>
            <li>
                <a href="#belgium">Belgium</a>
            </li>
            <li>
                <a href="#maria_jan">Maria & Jan</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="invitation" class="tab-pane active" data-toggle="tab">
                <div class="videoUiWrapper thumbnail">
                    <video width="100%" height="auto" id="video1" controls autoplay>
                        <source src="/img/maria_jan/wedding.mp4" type="vieo/mp4">
                    </video>
                </div>
            </div>
            <div class="tab-pane fade" id="wedding_venue">
                <h2>Wedding venue</h2>
            </div>
            <div class="tab-pane fade" id="wedding_party">
                <h2>Wedding party</h2>
            </div>
            <div class="tab-pane fade" id="rsvp">
                <h2>RSVP</h2>
            </div>
            <div class="tab-pane fade" id="bulgaria">
                <h2>Bulgaria Lodging and Flights</h2>
            </div>
            <div class="tab-pane fade" id="belgium">
                <h2>Belgium</h2>
            </div>
            <div class="intro intro-body tab-pane" id="maria_jan" data-toggle="tab">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active"><img src="img/maria_jan/DSC00559.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC01118.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC01581.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC03032.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC03058.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC03064.jpg"/><div class="carousel-caption"></div></div>
                        <div class="item"><img src="img/maria_jan/DSC01748.jpg"/><div class="carousel-caption"></div></div>
                    </div>
                    <div>
                        <a href="#about" class="btn btn-circle"> <i class="fa fa-angle-double-down animated"></i> </a>
                    </div>
                </div>
                <p> 
                    Our wedding date: 02.08.2014
                    Hotel Hilton, Sofia, Bulgaria
                    Start at 18:00 pm
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Core JavaScript Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="./js/grayscale.js"></script>
<script src="./js/jquery.videocontrols.js"></script>
</body>
</html>
<script type="text/javascript">
    $('.carousel').carousel();
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });



    $('#navigation a').click(function(e) {

        if ($(this).parent('li').hasClass('active')) {
            $($(this).attr('href')).hide();
        }
        else {
            e.preventDefault();
            $(this).tab('show');
        }
    });
    // $('video').videocontrols();

</script>