<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/d53fe27e47.js" crossorigin="anonymous"></script>


    <title>SUNTOURS</title>
    <style>
        .navbar {
            opacity: .8;
        }

        .balts .balts-hover {
            color: white;
            text-decoration: none;
        }
    .navbar {
        color: navy;
        font-family: fantasy;
        size: 200%;
    }

    .container {
        font-family: fantasy;
    }

    .longtext {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .papyrus {
        font-family: fantasy;
    }


    .mapsection {
        background-image: url('https://picsum.photos/id/162/1500/998');
    }

    #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: white; /* Set a background color */
    color: lightgray; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 100px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
  }


    </style>


  </head>
  <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand logo" href="/">SUNTOURS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Membership</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/contactus">Contact Us</a>
                          </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Plan Your Trip
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/destinations">Destinations</a>
                        <a class="dropdown-item" href="#">Prices</a>
                        <a class="dropdown-item" href="#">Cruises</a>
                        <a class="dropdown-item" href="#">Deals</a>
                      </div>
                    </li>
                  </ul>

                </div>
              </nav>


              <section>
                  <div class="container-fluid padding px-0">
                      <div class="row no-gutters">
                          <div class="col">
                              <img class="img-fluid" src="https://picsum.photos/id/1057/2016/516" class="img-fluid" alt="SUNTOURS">

                          </div>
                      </div>
                  </div>
              </section>






              <section class="footer bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <img class="img-fluid pt-5" src="{{$post->img}}">
                        </div>

                                <div class="col">
                                        <h4 class="pt-5 py-2">{{$post->title}}</h4>
                                <h6 class="longtext">{{$post->body}}</h6>
                                <div>
                    </div>
                </div>
              </section>

            </br>

              <div class="pt-5 container">
                    <div>
                            <h3>Sign up to our mailing list<h3>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                    <a class="btn btn-outline-secondary papyrus" href="#">Submit</a>
                            </div>


                    <div class="row py-5">

                       <div class="col text-center longtext bg-white card">

                               <div class="card-body">
                                 <blockquote class="blockquote papyrus mb-0">
                                   <p>“With age, comes wisdom. With travel, comes understanding.”</p>
                                   <footer class="blockquote-footer">Sandra Lake</cite></footer>
                                 </blockquote>
                               </div>
                             </div>
                           </div>
<footer class="page-footer font-small blue longtext">

   <!-- Copyright -->
   <div class="footer-copyright text-center py-3">© 2019 Copyright:
     <p>SUNTOURS TM</p>
   </div>
   <!-- Copyright -->

 </footer>
 <!-- Footer -->
</div>

            </section>


            <button onclick="topFunction()" id="myBtn" title="Go to top">
                    &nbsp;<i class="fas fa-chevron-up"></i>&nbsp;
                </button>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>//Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        </script>

</body>
</html>
