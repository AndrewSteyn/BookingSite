<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--CSS link-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>KIMPTON Hotel Booking</title>
  </head>

  <body>

    <div class="navbar-wrapper">
      <!--navbar section-->
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="navigation">
        <a class="navbar-brand" href="#"><img src="images/logo1.png" width=110 height=60></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#homeSection">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutSection">ABOUT</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#roomsSection">ROOMS</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#bookingSection">BOOKING</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#contactSection">CONTACT US</a>
            </li>

            <!--Social Media Platforms on the navbar - facebook, twitter, instagram, youtube, pinterest, google maps-->
            <div class="socialmedia">
              <a class="facebook" id="icons" href="https://facebook.com/"><img src="https://img.icons8.com/color/96/000000/facebook-new.png"/ width=50 height=50></a> 
              <a class="twitter" id="icons" href="https://twitter.com"><img src="https://img.icons8.com/color/96/000000/twitter.png"/ width=50 height=50></a>
              <a class="instagram" id="icons" href="https://instagram.com"><img src="https://img.icons8.com/color/96/000000/instagram-new.png"/ width=50 height=50></a>
              <a class="youtube" id="icons" href="https://youtube.com"><img src="https://img.icons8.com/color/96/000000/youtube-play.png"/ width=50 height=50></a>
              <a class="pintrest" id="icons" href="https://za.pinterest.com/"><img src="https://img.icons8.com/color/96/000000/pinterest--v1.png"/ width=50 height=50></a>
              <a class="maps" id="icons" href="#contactSection"><img src="https://img.icons8.com/color/96/000000/google-maps.png"/ width=50 height=50></a>
            </div>
        </div>
      </nav>
    </div>
      <!--navbar ends here-->
    <div class="content-wrapper">
      <div class="container-fluid">
        <div id="homeSection">
          <div class="jumbotron jumbotron-fluid" id="homeSection">
            <div class="container heading-container">         
              <p class="lead"><span class="titleHead">KIMPTON</span> Memories That Will Last Forever.</p>
              <center>
                <div class="homeButtons">
                  <a href="#roomsSection"><button type="submit" name="">Veiw Rooms</button></a>
                  <a href="#bookingSection"><button type="submit" name="">Make Booking</button></a>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div id="aboutSection">
          <div class="jumbotron jumbotron-fluid" id="aboutSection">
            <div class="container aboutContainer">
              <!--Grid system starts here-->
              <center>
                <div class="container gridsystem">
                  <div class="row aboutRow">
                    <div class="col-sm column1">
                      <div class="jumbotron jumbotron-fluid aboutTransparent">
                        <div class="container">
                          <h1 class="heading">About Us</h1>
                          <p class="lead">KIMPTON Is A Hotel Organization That Offers The Best Accomodation And Services To Its Clients. We Offer Noting But The Best Quality Of Luxury Vaccation Appartments That Are Avaliable For Rental. All You Have To Do Is Sit Back And Relax, As we Render The Luxury Sevice You Desire, Lastly - You Have Every Right To Desire What You Require!</p>
                        </div>
                      </div>
                    </div>
                    <br/>
                    <div class="col-sm column2">
                      <!--Carousel starts-->
                      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/radisson/radissonHotel.jpg" width=300 height=400 class="d-block w-100" alt="The Radisson Hotel">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="title">Radisson Hotel</h5>
                              <p class="title">Western Cape, Cape Town.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/kelway/kelwayHotel.jpg" width=300 height=400 class="d-block w-100" alt="The Kelway Hotel">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="title">Kelway Hotel</h5>
                              <p class="title">KwaZulu Natal.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/hub/hubHotel.jpg" width=300 height=400 class="d-block w-100" alt="The Hub Hotel">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="title">The Hub Bouquet Hotel</h5>
                              <p class="title">Gauteng Province, Johannesburg.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/protea/proteaHotel.jpg" width=300 height=400 class="d-block w-100" alt="The Protea Hotel">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="title">Protea Hotel</h5>
                              <p class="title">Eastern Cape, Port Elizabeth.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--Carousel ends here-->
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div id="roomsSection">
          <div class="jumbotron jumbotron-fluid" id="roomsSection">
            <div class="container">
              <center>
                <div class="titleHead">ROOMS</div>
              </center>
            <!--Card Decks Start here-->
            <div class="row row-cols-1 row-cols-md-2">
              <div class="col mb-4">
                <div class="card">
                  <img src="images/radisson/bedroom.jpg" height=200 class="card-img-top" alt="Radisson Blu Hotel Image">
                  <div class="card-body">
                    <h5 class="card-title">Radisson Blu Hotel</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="images/kelway/bedroom.jpg" height=200 class="card-img-top" alt="Kelway Hotel Image">
                  <div class="card-body">
                    <h5 class="card-title">Kelway Hotel</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="images/hub/bedroom.jpg" height=200 class="card-img-top" alt="The Hub Bouquet Hotel Image">
                  <div class="card-body">
                    <h5 class="card-title">Hub Bouquet Hotel</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="images/protea/bedroom.jpg" height=200 class="card-img-top" alt="Protea Hotel Image">
                  <div class="card-body">
                    <h5 class="card-title">Protea Hotel Image</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>


            <!--Dropdown Select-->
            <center>
            <select id="selection1" name="selection1">
              <option name="radioson" value="radioson">Radisson Blue Hotel</option>
              <option name="kelway" value="kelway">The Kelway Hotel</option>
              <option name="hub" value="hub">The Hub Botique Hotel</option>
              <option name="protea" value="protea">Protea Hotel</option>
            </select>
            <br/>
            <br/>
            <select id="selection2" name="selection2">
              <option name="radioson" value="radioson">Radisson Blue Hotel</option>
              <option name="kelway" value="kelway">The Kelway Hotel</option>
              <option name="hub" value="hub">The Hub Botique Hotel</option>
              <option name="protea" value="protea">Protea Hotel</option>
            </select>
            <br/>
            <br/>
            </center>
            <!--Book Now Button-->
            <center>
              <button type="submit" name="">Compare Hotels</button>
            </center>
            <!--Book Now Button stops here-->
            </div>
          </div>
        </div>

        <!--Booking Section-->
        <div id="bookingSection">
          <div class="jumbotron jumbotron-fluid" id="bookingSection">
            <div class="container">
              <center>
                <div class="titleHead">BOOKINGS</div>
              </center>
              <center>
                <form class="userdetails">
                  <input type="text" name="fistname" placeholder="Your First Name" required>
                  <input type="text" name="surname" placeholder="Your Surname" required>
                  <input type="email" name="email" placeholder="Example@gmail.com" required>
                  <label for="checkin">Check In Date: </label>
                  <br/>
                  <input type="date" name="checkin">
                  <label for="checkout">Check Out Date: </label>
                  <br/>
                  <input type="date" name="checkout">
                  <button type="submit" name="btn-submit">Book</button>
                </form>
            </center>
            </div>
          </div>
        </div>
         <!--Top Scroller-->
            <a id="back2Top" title="Back to top" href="#">&#10148;</a>
          <!--Top Scroller ends here-->
            </div>
        <center>
        <div id="contactSection">
          <div class="jumbotron jumbotron-fluid" id="contactSection">
            <center>
                <div class="titleHead">CONTACT US</div>
              </center>
            <div class="container">
            <div class="container">
              
              <div class="row contactform">
                
                  <div class="col-sm innerform">
                    <input type="text" name="fistname" placeholder="Your First Name" required>
                    <input type="text" name="surname" placeholder="Your Surname" required>
                    <input type="email" name="email" placeholder="Example@gmail.com" required>
                    <textarea rows="5" placeholder="Write To Us....."></textarea>
                    <br/>
                    <button type="submit">Send Message</button>
                  </div>
                
                <div class="col-sm googlemaps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.637543469859!2d18.44652591521168!3d-33.924727034365496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5d9854044ed9%3A0x6a0ebf49da5aabab!2sCodeSpace!5e0!3m2!1sen!2sza!4v1585823472004!5m2!1sen!2sza" frameborder="1" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            <!--Bookingsection ends here-->
            
            </div>
          </div>
        </div>
      </center>
     
    </div>

    <!--Top Scroller JavaScript-->
    <script>
        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#back2Top').fadeIn();
            } else {
                $('#back2Top').fadeOut();
            }
        });
        $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
        });

        });
     /*Scroll to top when arrow up clicked END*/
</script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>