<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="<?=base_url()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/bangalore/css/city.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="city-container">
      <nav class="navbar">
        <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold"
          >Housify</p1
        >

        <div class="info">
          <p1><a href="location/about">About Us</a></p1>
          <p1><a href="#contact-row">Contact Us</a></p1>
        </div>
        <div class="btn" onclick="toggleModal()">
          <button class="btn3">Request Call</button>
        </div>
      </nav>

      <nav class="mobile-nav">
        <div class="top">
          <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold"
            >Housify</p1
          >
         
          <div class="info">
            <p1><a href="location/about">About Us</a></p1>
            <p1>Contact Us</p1>
          </div>
        </div>
        <div class="bottom">
          <div class="btn" onclick="toggleModal()">
            <button class="btn3">Request Call</button>
          </div>
        </div>
      </nav>

      <section class="cards" data-aos="fade-in" data-aos-duration="1000">
        <div class="heading" >
          <p>Coliving Spaces in Bangalore</p>
          <div class="area">
            <div class="search-box">
              <div class="inner-search">
                <input
                  type="text"
                  placeholder="Search Your Area "
                  readonly
                  onclick="toggleMenu()"
                />
                <div class="search-icon">
                  <img src="assets/images/icons8-magnifying-glass-30.png" />
                </div>
                <div class="dropdown-menu">
                  <span class="close" style="float: right; margin: 15px; cursor: pointer;"><i class="fa-solid fa-xl  fa-xmark"></i></span>
                  <a href="location/bangaloreCity">Koramangala</a>
                  <a href="location/delhiCity">Indiranagar</a>
                  <a href="location/noidaCity">Whitefield</a>
                  <a href="location/gurugramCity">Marathahalli</a>
                  <a href="location/hyderabadCity">BellandurHSR</a>
                  <a href="location/puneCity">LayoutElectronic</a>
                  <a href="location/mumbaiCity">cityBrookfield</a>
                  <a href="location/ahmedabadCity">MG Road</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="coliving-spaces">
          <div class="card" onclick="showDetails(1)">
            <img src="assets/bangalore/banglore-coliving/img1.webp" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(2)">
            <img src="assets/bangalore/banglore-coliving/img2.jpg" alt="img-1" />
            <div class="details">
              <h4>Hyphen Club Sprout</h4>
              <p>Koramangala, Bangalore</p>
              <h4>₹12,999 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(3)">
            <img src="assets/bangalore/banglore-coliving/img-4.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Shanghai House</h4>
              <p>Bellandur, Bangalore</p>
              <h4>₹9,799 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(4)">
            <img src="assets/bangalore/banglore-coliving/img-6.webp" alt="img-1" />
            <div class="details">
              <h4>Hyphen Club Vieux</h4>
              <p>Malleshwaram, Bangalore</p>
              <h4>₹20,999 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(5)">
            <img src="assets/bangalore/banglore-coliving/img-7.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Casper House</h4>
              <p>Domlur, Bangalore</p>
              <h4>₹17,699 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(6)">
            <img src="assets/bangalore/banglore-coliving/img-8.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Canterbury House</h4>
              <p>Marathahalli, Bangalore</p>
              <h4>₹7,599 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(7)">
            <img src="assets/bangalore/banglore-coliving/img-9.webp" alt="img-1" />
            <div class="details">
              <h4>Hyphen Club Lush</h4>
              <p>Marathahalli, Bengaluru, Karnataka</p>
              <h4>₹13,499 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(8)">
            <img src="assets/bangalore/banglore-coliving/img-10.webp" alt="img-1" />
            <div class="details">
              <h4>COVIE Bannerghatta 185</h4>
              <p>Bannerghatta, Bangalore</p>
              <h4>₹15,700 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(9)">
            <img src="assets/bangalore/banglore-coliving/img-3.webp" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="add">
        <div class="image-container">
            <img src="assets/bangalore/banglore-coliving/bg.jpg"/>
            <div class="more-area"> 
                <p>Get Perfect Living in Your City</p>
                <ul>
                    <li>Koramangala</li>
                    <li>Indiranagar</li>
                    <li>Whitefield</li>
                    <li>Marathahalli</li>
                    <li>BellandurHSR</li>
                    <li>LayoutElectronic</li>
                    <li>cityBrookfield</li>
                    <li>MG Road and More..</li>
             
                </ul>
            </div>
        </div>
      </section>

      <section class="more-cards">
        <div class="card" onclick="showDetails(10)">
            <img src="assets/bangalore/banglore-coliving/img-11.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(11)">
            <img src="assets/bangalore/banglore-coliving/img-12.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(12)">
            <img src="assets/bangalore/banglore-coliving/img-13.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(13)">
            <img src="assets/bangalore/banglore-coliving/img-14.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(14)">
            <img src="assets/bangalore/banglore-coliving/img-15.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
          <div class="card" onclick="showDetails(15)">
            <img src="assets/bangalore/banglore-coliving/img-16.jpg" alt="img-1" />
            <div class="details">
              <h4>Stanza Living Modena House</h4>
              <p>Manayata Tech Park, Bangalore</p>
              <h4>₹9,099 / month</h4>
              <p>Call Owner</p>
            </div>
          </div>
      </section>
     
      <section class="top-amenities">
        <div class="container">
          <div class="row" data-aos="fade-in" data-aos-duration="1000">
            <div class="left">
              <img  src="assets/bangalore/banglore-coliving/amenities-img.png"/>
            </div>
            <div class="right">
              <div class="inner-right">
                <p class="p-1">Live with Housify</p>
                <p class="p-2">With us, you will get a chance to unlock incredible amenities with a vibrant community of like-minded people.</p>
                <div class="icons">
                  <div class="icon">
                    <div class="img-container">
                      <img src="assets/bangalore/banglore-coliving/food.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>Tasty Food</h4>
                      <p>Our spaces offer homelike food with hygienic and delicious food servings</p>
                    </div>
                  </div>
                  <div class="icon">
                    <div class="img-container">
                      <img src="assets/bangalore/banglore-coliving/car.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>Parking</h4>
                      <p>Our living spaces offer designated parking spots</p>
                    </div>
                  </div>
                  <div class="icon">
                    <div class="img-container">
                      <img src="assets/bangalore/banglore-coliving/cleaning.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>Daily Cleaning</h4>
                      <p>You will get daily house cleaning services without any additional cost</p>
                    </div>
                  </div>
                  <div class="icon">
                    <div class="img-container">
                      <img src="banglore-coliving/wifi.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>High Speed WiFi</h4>
                      <p>Our all spaces have a blazing speed internet connection</p>
                    </div>
                  </div>
                  <div class="icon">
                    <div class="img-container">
                      <img src="assets/bangalore/banglore-coliving/washing-machine.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>Laundry</h4>
                      <p>Free access to the laundry and drying facility</p>
                    </div>
                  </div>
                  
                  <div class="icon">
                    <div class="img-container">
                      <img src="assets/bangalore/banglore-coliving/washing-machine.png" class="image"/>
                    </div>
                    <div class="details">
                      <h4>Fully Furnished</h4>
                      <p>Our all living spaces are equipped with modern furniture</p>
                    </div>
                  </div>
                 
                </div>

                     <!-- mobile icons -->

                     <div class="mobile-container">
                      <div class="mobile-row">
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/bed.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Bed</p>
                          </div>
                        </div>
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/wifi.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Wifi</p>
                          </div>
                        </div>
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/food.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Food</p>
                          </div>
                        </div>
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/car.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Parking</p>
                          </div>
                        </div>
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/cleaning.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Cleaning</p>
                          </div>
                        </div>
                        <div class="mobile-icon">
                          <div class="icon-img">
                              <img src="assets/bangalore/images/washing-machine.png" alt="bed"/>
                          </div>
                          <div class="text">
                            <p>Laundry</p>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="modal-contents">
        <div id="myModal" class="modal">
            
            <div class="modal-content">
                <div>
                    <p>Request Call Back</p>
                </div>
              <form class="modal-form">
                <input type="text" name="name" placeholder="Name"><br>
                <input type="email" name="email" placeholder="Email"><br>
                <input type="tel" name="phone" placeholder="Phone"><br>
                <select name="Type of Space">
                  <option value="option1">Type of Space</option>
                  <option value="option2">Single Room</option>
                  <option value="option3">Twin Sharing</option>
                  <option value="option4">Co-Living</option>
                </select>
                <select name="Select City">
                  <option value="option1">Select City</option>
                  <option value="option2">Banglore</option>
                  <option value="option3">gurugram</option>
                  <option value="option4">Noida</option>
                </select><br>
                <div class="checkbox">
                  <input type="checkbox" id="agree">
                  <label for="agree">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="btn-send" onclick="handleSubmit(event)">Send</button>
              </form>
            </div>
          </div>
          
      </section>
    </div>

    <div id="toast" class="toast"></div>

    
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
    <script src="assets/bangalore/js/Bcity.js"></script>
    <script src="singlePg.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
