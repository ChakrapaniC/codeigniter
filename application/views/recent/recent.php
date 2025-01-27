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
    <link rel="stylesheet" href="assets/recent/css/recent.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold"
          >Housify</p1
        >

        <div class="info-1">
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

          <div class="info-1">
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

      <section class="delhi">
        <div class="delhi-container">
            <div>
                <h3 style="font-size: 22px;">New Property in Delhi</h3>
            </div>
            <div class="cards">
               
            </div>
        </div>
      </section>

      <section class="gurugram">
        <div class="gurugram-container">
            <div>
                <h3 style="font-size: 22px;">New Property in gurugram</h3>
            </div>
            <div class="cards">
                
            </div>
        </div>
      </section>

      <section class="bangalore">
        <div class="bangalore-container">
            <div>
                <h3 style="font-size: 22px;">New Property in Bangalore</h3>
            </div>
            <div class="cards">
                
            </div>
        </div>
      </section>

      <section class="noida ">
        <div class="noida-container">
            <div>
                <h3 style="font-size: 22px;">New Property in Noida</h3>
            </div>
            <div class="cards">
              
            </div>
        </div>
      </section>

      <section class="hyderabad">
        <div class="hyderabad-container">
            <div>
                <h3 style="font-size: 22px;">New Property in Hyderabad</h3>
            </div>
            <div class="cards">
                
            </div>
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
                        <option value="option1">Select Type</option>
                        <option value="option2">Single Room</option>
                        <option value="option3">Twin Sharing</option>
                    </select>
                    <select name="Budget">
                        <option value="option1">Budget</option>
                        <option value="option2">Above 30k</option>
                        <option value="option3">20k to 30k</option>
                        <option value="option4">10k to 20k</option>
                    </select><br>
                    <div class="checkbox">
                        <input type="checkbox" id="agree">
                        <label for="agree">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn-send">Book</button>
                </form>
            </div>
        </div>

    </section>
      
      <script src="assets/recent/js/Recent.js"></script>
    </div>
  </body>
</html>
