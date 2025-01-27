<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?=base_url()?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="assets/about/css/about.css"/>
    <title>Document</title>
</head>
<body>
    <div class="about-container" data-aos="fade-in" data-aos-duration="1000">
        <nav class="navbar">
            <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold"
              >Housify</p1
            >
    
            <div class="info">
              <p1><a href="#conatct-row">Contact Us</a></p1>
            </div>
            <div class="btn" onclick="toggleModal()">
              <button class="btn3" >Request Call</button>
            </div>
          </nav>

          <nav class="mobile-nav">
            <div class="top">
              <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold"
                >Housify</p1
              >
             
              <div class="info">
                <p1>Contact Us</p1>
              </div>
            </div>
            <div class="bottom">
              <div class="btn" onclick="toggleModal()">
                <button class="btn3">Request Call</button>
              </div>
            </div>
          </nav>
        
        <section class="section-1">
            <div class="left">
                <img src="assets/about/images/amenities-img.png" alt="loading"/>
            </div>
            <div class="right">
              <div>
                <h4>Space Search Made Simple</h4>
                <p>Housify is India's fastest growing online discovery platform for searching and booking Coworking and Co-living spaces. Our spaces boast of present-day amenities and reflect Freedom, Flexibility and Fulfillment completely in sync with the modern day millennial behavior</p>
            </div>
        </section>

        <section class="section-2" data-aos="fade-out" data-aos-duration="1000">
            <div class="left-div">
                <div class="info">
                    <h2>The Housify Network</h2>
                    <hr>
                    <p>The CoFynd network includes more than 100,000+ verified work and living spaces in 25+ cities across India located in top neighborhood and available on complete flexible terms. Cofynd is India’s fastest growing discovery platform to find and book your perfect Space. And we have just started !</p>
                </div>
                <div class="more-info">
                    <div class="inner-div">
                       <div class="div-1">
                        <div>
                            <p class="p-1">25+</p>
                            <p class="p-2">Cities</p>
                        </div>
                       </div>
                       <div class="div-2">
                        <div>
                            <p class="p-1">1000+</p>
                            <p class="p-2">Locations</p>
                        </div>
                       </div>
                       <div class="div-3">
                        <div>
                            <p class="p-1">100,000+</p>
                            <p class="p-2">Spaces</p>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="right-div">
                <img src="assets/about/images/Cities-on-map.svg"/>
            </div>
        </section>

        <section class="section-3" data-aos="fade-out" data-aos-duration="1000">
            <div class="left-div">
                <img src="assets/about/images/img-1.jpg" alt="img-1"/>
            </div> 
            <div class="right-div">
                <div>
                    <h4>On-Demand Spaces To Work, Meet, And Live.</h4>
                    <hr/>
                    <p>CoFynd was born when Atul realised a paradigm shift in the way people wanted to Work & Live. Many were leaving behind the traditional mundane offices to quirky Co-Working spaces and conventional living to community based Co-Living. With a solid vision in his mind, he implemented this platform with the technology partner in the country, T9L to fulfill the dynamic user needs.</p>
                </div>
            </div>
        </section>

        <section class="section-4" data-aos="fade-out" data-aos-duration="1000">
            <div class="left-side">
                <div>
                    <h4>Flexible Office Space, Without The Distractions Of Coworking.</h4>
                    <hr/>
                    <p>While we tap on more and more cities everyday, our constant aim remains to offer the highest quality of flexibility and privacy at each point. Our spaces speak loud of present-day amenities that are well suited for maximizing work efficiency and potential of the individuals.</p>
                </div>
            </div>
            <div class="right-side">
                <img src="assets/about/images/img-2.jpg" alt="img-2"/>
            </div>
        </section>

        <section class="upper-footer">
          <div class="footer-content">
            <div class="rows">
              <div class="content-row">
                <div>
                  <div class="Housify" style="margin-bottom: 10px;"><h4>HOUSIFY</h4></div>
                  <div  class="text">
                    <p> Housify is a top leading platform to provide couple-friendly space in pan India. Our team physically verified all the listed spaces, these are perfect and offer you a premium, prestigious, and trouble-free lifestyle. Housify is an ideal platform that provides independence, liberty, as well as freedom to couples. You just need to follow three easy steps to onboard on your desired couple-friendly living accommodation with Housify.</p>
                  </div>
                </div>
              </div>
              <div class="pg-row">
                <div>
                  <div class="pg"><h4>PG</h4></div>
                  <hr/>
                  <div class="ull">
                    <li><a href="location/bangaloreCity">PG in Bangalore</a></li>
                    <li><a href="location/delhiCity">PG in Delhi</a></li>
                    <li><a href="location/gurugramCity">PG in Gurugram</a></li>
                    <li><a href="location/noidaCity">PG in Noida</a></li>
                    <li><a href="location/puneCity">PG in Pune</a></li>
                    <li><a href="location/hyderabadCity">PG in Hyderabad</a></li>
                    <li><a href="location/mumbaiCity">PG in Mumbai</a></li>
                    <li><a href="location/ahmedabadCity">PG in Ahmedabad</a></li>
  
                  </div>
                </div>
              </div>
              <div class="contact-row" id="contact-row">
                <div>
                  <div class="one">
                    <div style="margin-bottom: 10px;"><h4>Contact us</h4></div>
                    <hr style="margin-bottom: 10px; width: 30%; height: 3px; background-color: blue;"/>
                    <a style="text-decoration: none;">get.Housify@gmail.com</a>
                  </div>
                  <div class="two"> <p style="text-align: justify;">Don’t miss to subscribe to our new feeds, kindlyy fill the form below.</p></div>
                   
                  <div class="three" style="margin-top: 20px;">
                    <div style="margin-bottom: 20px;"><h3>follow us</h3></div>
                    <a><i class="fab fa-facebook-f facebook-bg i-1"></i></a>
                    <a><i class="fab fa-twitter twitter-bg i-2"></i></a>
                    <a><i class="fab fa-google-plus-g google-bg i-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <footer>
            <p>Copyrigth&copy;2024 All right Reserved</p>
        </footer>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>