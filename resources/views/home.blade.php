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

  #myBtn:hover {
    background-color: #fff;
    color: #333;
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


              <section class="bg-light">

            <div class="container">
                <div class="row">
                    <div class="col text-center py-5">
                        <h1>Dream big with SUNTOURS</h1>


                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col px-4 pt-4">
                                <div class="bg-white">
                                <img class="img-fluid" src="{{$post->img}}">
                                <h4 class="py-2 bg-white text-center">{{$post->title}}</h4>
                                <h6 class="longtext">{{$post->body}}</h6>
                                <a class="btn btn-outline-secondary" href="/post/{{$post->id}}">Read More...</a>
                            </div>
                            </div>
                        @endforeach
              </section>

        <section class="bg-light">
            <div class="container">
                    <div class="row pt-5 text-center">
                <img class="img-fluid" src="https://picsum.photos/id/219/1200/150">
                </div>
            </div>
        </section>





              <section class="bg-light">
                  <div class="container">
                      <div class="row py-5 no-gutters">

                          <div class="col bg-white">
                              <h4>Coming Soon...</h4>
                              <div class="longtext">

                                  <p>Kuta is one of the most well-known beaches in Bali. Along with this stretch are an array of hotels, restaurants, shops, and cafes. In the evenings the area throbs to the beat of disco music.
                                        For a quieter evening enjoy the beach at Jimbaran, a popular spot to eat fresh barbecued seafood. </p>
                                        <p>Also known as the Land of the Gods, Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity. It is also famous for surfers’ paradise! Bali enchants with its dramatic dances and colorful ceremonies, its arts, and crafts, to its luxurious beach resorts and exciting nightlife. And everywhere, you will find intricately carved temples.
                                            </p>
                                </div>
                          </div>

                          <div class="px-5 pt-5">
                              <h4>Join our membership for special deals</h4>

                              <form id="contact-form">
                                    <div class="row">
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="First Name" required="required">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="Last Name" required="required">
                                      </div>
                                    </div>
                                </form>
                            </br>
                                    <div class="row">
                                            <div class="col">
                                              <input type="text" class="form-control" placeholder="City" required="required">
                                            </div>
                                            <div class="col">
                                              <input type="e-mail" class="form-control" placeholder="E-mail" required="required">
                                            </div>
                                          </div>
                                        </br>
                                    <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                              I agree to Terms & Conditions
                                            </label>
                                          </div>
                                  </form>
                                </br>
                                  <a class="btn btn-outline-secondary papyrus" href="#">Submit</a>
                          </div>


                      </div>
                    </div>
                 </section>


                 <section class="bg-light">
                     <div class="container mapsection">
<div class="row py-5">
    <div class="col">
        <div class="text-center bg-white">
            <h4>Discover Bali</h4>
        </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010296.0016281338!2d114.5097021410462!3d-8.453711873388777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali%2C%20Indonesia!5e0!3m2!1sen!2slv!4v1571504521087!5m2!1sen!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="col text-center longtext bg-white py-5">

        <p>Bali is Indonesia's main tourist destination, which has seen a significant rise in tourists since the 1980s.  It is renowned for its highly developed arts, including traditional and modern dance, sculpture, painting, leather, metalworking, and music. The Indonesian International Film Festival is held every year in Bali. In March 2017, TripAdvisor named Bali as the world's top destination in its Traveller's Choice award.</p>
    </b>
    <p>Bali is part of the Coral Triangle, the area with the highest biodiversity of marine species. In this area alone, over 500 reef-building coral species can be found. For comparison, this is about seven times as many as in the entire Caribbean.</p>
    <a class="btn btn-outline-secondary papyrus" href="#">Read more</a>
    <a class="btn btn-outline-secondary papyrus" href="#">Plan your trip</a>

    </div>


</div>
</div>
                 </section>

                 <section class="footer bg-light">
                     <div class="container">





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
                                  <!-- Footer -->
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
