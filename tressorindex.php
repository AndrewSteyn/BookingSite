<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--boostrap css plugins-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- CSS stylesheet link -->
    <link rel="stylesheet" href="style.css">
     <!-- Font Google link -->
     <link href="https://fonts.googleapis.com/css?family=Bellota+Text|Dancing+Script|Indie+Flower|Oxanium&display=swap" rel="stylesheet">
     <!--jQuery Google CDN and Ripple Effect CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
     <!-- Font awesome links-->
     <script src="js/all.min.js"></script>
    <title>PHP HOTEL BOOKING PROJECT</title>
  </head>
  <body>
    <!--************************Socials Icons******************************************-->
    <div class="container-fluid info p-3" id="top-icons">
      <div class="row">
        <div class="col d-flex justify-content-between align-itms-baseline flex-wrap">
          <div class="info-icons p-2">
            <a href="" class="mr-2"><i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="" class="mr-2"><i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="" class="mr-2"><i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="" class="mr-2"><i class="fab fa-yelp fa-2x"></i>
            </a>
          </div>
          <h1 class="secondary-color text-center w-50% mx-auto  "> 
            <small>Best Cape Town Hotels, South Africa - Booking </small></h1>
        </div>
      </div>
    </div>
    <!--************************HEADER SECTION******************************************-->
    <header id="header">
     <div class="container">
       <div class="row height-90 align-items-center justify-content-center">
         <div class="col">
           <div class="banner text-center">
             <h1 class=" secondary-color display-3 text-center w-50% mx-auto"> 
               <small>Hotels Combines : Compare Six Hotels,</small><strong class="primary-color">Booking</strong>
             </h1>
             <a href="#contact" class="btn main-btn sushi-btn my-4 text-capitalize">Get Started</a>
           </div>
         </div>
       </div>
     </div>
     <a href="#photos-gall" class=" btn header-link primary-color">
      <i class="fas fa-arrow-down"></i>
    </a>
     </header>
     <!--******END of HEADER*****-->


     <!--******  SECOND NAVBAR   *************-->
     <nav class="navbar navbar-expand-lg">
      <a href="" class="navbar-brand text-uppercase primary-color">
        <h3 class="secondary-color text-center w-50% mx-auto pt-4"> 
          <small>Hotel</small><strong class="primary-color">Booking</strong>
        </h3>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"> 
        <div class="toggler-btn">
           <div class="bar bar-1"></div>
           <div class="bar bar-2"></div>
           <div class="bar bar-3"></div>
        </div> 
      </button>
      <!--links-->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item">
            <a href="#header" class="nav-link text-capitalize">Home</a>
          </li>

          <li class="nav-item">
            <a href="#contact" class="nav-link text-capitalize">Hotel Compare</a>
          </li>
          <li class="nav-item">
            <a href="#photos-gall" class="nav-link text-capitalize">Gallery Photos</a>
          </li>

          <li class="nav-item">
            <a href="#about" class="nav-link text-capitalize">Team members</a>
          </li>
        </ul>
      
      </div>
     </nav>
     <!--=========   END OF SECOND NAVBAR  ===================-->

      <!--==========================
  PHOTO-TEXT-1 SECTION
  ============================-->
  <section id="photo-text-1">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <h3 class="display-5 secondary-color text-center w-50% mx-auto pt-4"> 
                 Hotels Combines: Compare and save up to 50% | no Booking Fees
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!--============== END PHOTO-TEXT-1 SECTION   =======================-->

  <!--============== CONTACT SECTION START HERE  =======================-->

  
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        
        <div class="col-md-10 my-5">
          <section id="contact">
           <div class="card text-center">
             <div class="card-header">
               <h2 class="text-uppercase">Booking form</h2>

             </div>
             <div class="card-body">
              <form class="form-inline" action="">
                <!--input-group name text-->
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                      <i class="fas fa-user "></i>
                    </span>
                  </div>
                  <input type="text" id="text" class="form-control  mr-md-5 form-control-md" 
                   placeholder="Enter your Firstname here">
                </div>
                <!--input-group surname text-->
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" id="text" class="form-control  mr-md-5 form-control-md" 
                   placeholder="Enter your Surname here">
                </div>
            
                      <!--input-group email-text-->

                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-email">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                  <input type="email" id="email" class="form-control  mr-md-5 form-control-md" 
                   placeholder="Enter your Email here">
                </div>
                <!--input-group email-text-->
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-phone">
                      <i class="fas fa-phone "></i>
                    </span>
                  </div>
                  
                  <input type="email" id="email" class="form-control  mr-md-5 form-control-md" 
                   placeholder="Enter Phone number here">
                </div>

                
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-email">
                      <i class="fas fa-calendar"></i>

                    </span>
                  </div>
                  <input type="date" id="date" class="form-control  mr-md-5 form-control-md" 
                   placeholder="Enter your email here">
                </div>
                <!--input-group email-text-->
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-phone">
                      <i class="fas fa-calendar"></i>
                    </span>
                  </div>
                  <input type="date" id="date" class="form-control  mr-md-5 form-control-md" 
                   placeholder="checking date">
                </div>   
              </div>
              <div class="container">
              <button type="submit" class="btn btn-block  text-uppercase contact-btn">
                <i class="far fa-hand-point-right mr-2"></i>Submit-here</button>
              </div>
               </form>
             </div>
            </section>
           </div>
          
        </div>
        <div class="col-md-1"></div>

      </div>
<!--========================== end FORM =====================================-->

     <!--***************** Gallery - TITLE*******************************-->
     <h3 class="display-4 secondary-color text-center w-50% mx-auto pt-4"> 
      <small>Gallery-</small><strong class="primary-color">Photos</strong>
    </h3>
     <!--************************Gallary-ITEMS-Photos********************-->

    <section class="gallery-img py-2" id="photos-gall">
      <div class="container my-2">
        <div class="row parent-container">
          <!--Gallery- items-->

          <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
               <div class="gall-img-container">
                 <img src="bgim/hotel4.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
                   <a href="bgim/hotel4.jpg">
                     <H1 class="text-uppercase text-center item-link px-3">Best Hotel</H1>
                   </a>
                 </div>
         </div>
          <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
            <div class="gall-img-container">
              <img src="bgim/hotel4.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
              <a href="bgim/hotel4.jpg">
                <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
              </a>
            </div>
          </div>
          <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
            <div class="gall-img-container">
              <img src="bgim/hotel4.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
              <a href="bgim/hotel4.jpg">
                <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
              </a>
            </div>
          </div>

          <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
            <div class="gall-img-container">
              <img src="bgim/hotel4.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
              <a href="bgim/hotel4.jpg">
                <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
              </a>
            </div>
          </div>

          
          <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
            <div class="gall-img-container">
              <img src="bgim/hotel1.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
                <a href="bgim/hotel1.jpg">
                  <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
                </a>
              </div>
      </div>
       <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
         <div class="gall-img-container">
           <img src="bgim/hotel3.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
           <a href="bgim/hotel3.jpg">
             <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
           </a>
         </div>
       </div>
       <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
         <div class="gall-img-container">
           <img src="bgim/hotel2.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
           <a href="bgim/hotel2.jpg">
             <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
           </a>
         </div>
       </div>

       <div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
         <div class="gall-img-container">
           <img src="bgim/hotel2.jpg" class="img-fluid img-thumbnail item-img" alt="Best hotel">
           <a href="bgim/hotel2.jpg">
             <H1 class="text-uppercase text-center item-link px-3">Best hotel</H1>
           </a>
         </div>
       </div>
        </div>
      </div>
    </section>
   
  <!--*************************************ABOUT-US***********************************************-->
<section id="about" class="py-2 mr-2">
  <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h1 class="display-3 secondary-color text-center w-50% mx-auto pt-4"> 
           <small>About-</small><strong class="primary-color">US</strong>
         </h1>
          <h2 class="text-aboutus">Lorem ipsum dolor sit amet consectetur
               adipisicing elit. Maxime rem illum, mollitia assumenda adipisci
               in ex impedit eveniet. Debitis soluta ipsum
               saepe quasi facere rem dolorem eos porro fugiat consequuntur!</h2>
        <a href="" class="btn main-btn my-4 text-capitalize">Learn more</a>

        </div>
        <div class="col-md-6 about-picutres my-4 d-none d-lg-block">

         <img src="bgim/Romeo.jpg" alt="" class="img-1 img-thumbnail about-image">

         <img src="bgim/Romeo.jpg" alt="" class="img-2 img-thumbnail about-image">

         <img src="bgim/tresor.jpg" alt="" class="img-3 img-thumbnail about-image">

         <img src="bgim/tresor.jpg" alt="" class="img-4 img-thumbnail about-image">

         <img src="bgim/tresor.jpg" alt="" class="img-5 img-thumbnail about-image">

        </div>

   </div>
 </div>
</section> 
<!--*************************************END-ABOUT-US***********************************************-->

<!--***********************************FOOTER*************************************************-->  
      <div class="container-fluid info p-3">
        <div class="row">
          <div class="col d-flex justify-content-between align-itms-baseline flex-wrap">
            <div class="info-icons p-2">
              <a href="" class="mr-2"><i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mr-2"><i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="" class="mr-2"><i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mr-2"><i class="fab fa-yelp fa-2x"></i>
              </a>
            </div>
            
             <footer class="primary-color text-center w-50% mx-auto">Coded by <a href=https://facebook.com/tresormazinga>Tresor,Romeo,Andrew</a>
            
          </div>
        </div>
      </div>
      
             
<a href="#top-icons" id="scrollTop" class="p-1"><i class="fa fa-arrow-up primary-color fa-1x"></i></a>

<!--Jqwery Ripples effect js script-->
<script>
    $('#header').ripples({
      resolution:400,
      perturbance:0.4,
    });
  </script>
  
  <!--Jqwery Ripples Magnific-Popup js script-->
  <script>


  </script>
  
 
<!--font awesome plugins file-->
<script src="js/all.min.js"></script>
<!--Jqwery js plugins-->
<script scr="js/jquery-3.4.1.min.js"></script>
<!--boostrap js plugins-->
<script scr="js/bootstrap.bundle.min.js"></script>
<!--Jqwery Ripples js plugins-->
<script src="ripple/jquery.ripples-min.js"></script>
<!--main.js stylesheet link of js page-->
<script scr="js/main.css/script.js"></script>
<script src="js/jqwery"></script>
  </body>
</html>