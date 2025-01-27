<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="<?=base_url()?>">
    <?php $this->load->view("link"); ?>
    <title>Document</title>
  </head>

  <body>
    <div class="container">
      <!-- Mobile Navigation -->
      <nav class="mobile-nav">
          <div class="top">
              <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold">Housify</p1>
              <div class="info">
                  <p1><a href="<?php echo base_url('about/about.html'); ?>">About Us</a></p1>
                  <p1>Contact Us</p1>
              </div>
          </div>
          <div class="bottom">
              <div class="btn">
                  <button class="btn3">Request Call</button>
              </div>
          </div>
      </nav>

      <!-- Navbar with Search Box -->
      <nav id="navbar1">
          <div class="navbar-new">
              <p1 style="font-size: 30px; letter-spacing: 5px; font-weight: bold">Housify</p1>
              <div class="info">
                  <p1><a href="<?php echo base_url('about/about.html'); ?>">About Us</a></p1>
                  <p1><a href="#contact-row">Contact Us</a></p1>
                  <p1><a href="#top-living">Top Living</a></p1>
              </div>
              <div class="btn">
                  <button class="call-btn">Request Call</button>
              </div>
          </div>
          <div class="search-box">
              <div class="inner-search">
                  <input
                      type="text"
                      placeholder="Search Your Location"
                      readonly
                      onclick="toggleMenu()"
                  />
                  <div class="search-icon">
                      <img src="assets/images/icons8-magnifying-glass-30.png" />
                  </div>
                  <div class="dropdown-menu">
                      <a href="location/bangaloreCity">Bangalore</a>
                      <a href="location/delhiCity">Delhi</a>
                      <a href="location/noidaCity">Noida</a>
                      <a href="location/gurugramCity">Gurugram</a>
                      <a href="location/hyderabadCity">Hyderabad</a>
                      <a href="location/puneCity">Pune</a>
                      <a href="location/mumbaiCity">Mumbai</a>
                      <a href="location/ahmedabadCity">Ahmedabad</a>
                  </div>
              </div>
          </div>
      </nav>


      <section class="amenities" style="background-color: rgb(229, 229, 177)">
        <div class="left-side">
          <div class="tag-line" data-aos="fade-right" data-aos-duration="1000">
            <p1
              >Find Your Best
              <span style="color: rgb(230, 43, 43)">Space</span>
            </p1>
            <p1>For Living</p1>
            <p1 style="color: rgb(75, 75, 241)">Here</p1>
          </div>
          <div class="perks" data-aos="fade-right" data-aos-duration="1000">
            <div class="perks_div" style="display: flex; gap: 40px">
              <div class="wifi">
                <div
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 70px;
                    height: 70px;
                    background-color: white;
                    border-radius: 50%;
                  "
                >
                  <img
                    src="assets/images/landing-page-img/wifi.png"
                    style="width: 40px; height: 40px"
                  />
                </div>
                <h2>WiFi</h2>
              </div>
              <div class="laundry">
                <div
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 70px;
                    height: 70px;
                    background-color: white;
                    border-radius: 50%;
                  "
                >
                  <img
                    src="assets/images/landing-page-img/washing-machine.png"
                    style="width: 40px; height: 40px"
                  />
                </div>
                <h2>Laundry</h2>
              </div>
            </div>

            <div class="perks_div" style="display: flex; gap: 40px">
              <div class="food">
                <div
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 70px;
                    height: 70px;
                    background-color: white;
                    border-radius: 50%;
                  "
                >
                  <img
                    src="assets/images/landing-page-img/fast-food.png"
                    style="width: 40px; height: 40px"
                  />
                </div>
                <h2>Food</h2>
              </div>
              <div class="car">
                <div
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 70px;
                    height: 70px;
                    background-color: white;
                    border-radius: 50%;
                  "
                >
                  <img
                    src="assets/images/landing-page-img/parked-car.png"
                    style="width: 40px; height: 40px"
                  />
                </div>
                <h2>Parking</h2>
              </div>
            </div>
            `
          </div>
        </div>

        <div class="right-side" style="width: 50%">
          <div class="prefrences" style="margin-bottom: 20px">
            <div class="img-container" style="display: flex; gap: 50px">
              <div
                class="img-1"
                style="
                  width: 250px;
                  height: 200px;
                  border-radius: 15px;
                  position: relative;
                "
                data-aos="fade-down-right"
                data-aos-duration="1000"
              >
                <img
                  src="assets/images/landing-page-img/girl.jpeg"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <p1
                  style="
                    position: absolute;
                    top: 80%;
                    left: 15px;
                    color: white;
                    font-size: 20px;
                    font-weight: 600;
                  "
                  >For Girls</p1
                >
              </div>
              <div
                class="img-2"
                style="
                  width: 250px;
                  height: 200px;
                  border-radius: 15px;
                  position: relative;
                "
                data-aos="fade-down-left"
                data-aos-duration="1000"
              >
                <img
                  src="assets/images/landing-page-img/boys.jpeg"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <p1
                  style="
                    position: absolute;
                    top: 80%;
                    left: 15px;
                    color: white;
                    font-size: 20px;
                    font-weight: 600;
                  "
                  >For Boys</p1
                >
              </div>
            </div>

            <div class="img-container" style="display: flex; gap: 50px">
              <div
                class="img-3"
                style="
                  width: 250px;
                  height: 200px;
                  border-radius: 15px;
                  position: relative;
                "
                data-aos="fade-up-right"
                data-aos-duration="1000"
              >
                <img
                  src="assets/images/landing-page-img/single room.png"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <p1
                  style="
                    position: absolute;
                    top: 80%;
                    left: 15px;
                    color: white;
                    font-size: 20px;
                    font-weight: 600;
                  "
                >
                  Single Room</p1
                >
              </div>
              <div
                class="img-4"
                style="
                  width: 250px;
                  height: 200px;
                  border-radius: 15px;
                  position: relative;
                "
                data-aos="fade-up-left"
                data-aos-duration="1000"
              >
                <img
                  src="assets/images/landing-page-img/for_professionals.png"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <p1
                  style="
                    position: absolute;
                    top: 80%;
                    left: 15px;
                    color: white;
                    font-size: 20px;
                    font-weight: 600;
                  "
                >
                  Professionals</p1
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="Properties"
        style="background-color: white"
        data-aos="fade-in"
        data-aos-duration="1000"
      >
        <div
          class="latest-propety"
          style="padding: 20px 40px; margin-bottom: 40px"
        >
          <div
            class="heading"
            style="display: flex; justify-content: space-between"
          >
            <div>
              <p style="font-size: 30px; font-weight: 600">
                Recently Posted Properties :
              </p>
              <p style="font-size: 20px; font-weight: 400; padding-top: 5px">
                Hurry Up, Rooms Are Filling Up Quickly
              </p>
            </div>
            <div class="see-more">
              <a href="recent/recent.html">See More</a>
            </div>
          </div>
          <div class="card-container">
            <div class="cards">
              <div class="card-1">
                <img
                  src="assets/images/landing-page-img/house 2.jpeg"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <div class="price">
                  <p>&#8377; 9000</p>
                </div>
                <p style="font-weight: 600; font-size: 18px; padding: 5px 0px">
                  Shared By Two
                </p>
                <p>
                  in Sector 22 ,
                  <span style="font-weight: 600; padding-top: 5px">Noida</span>
                </p>
              </div>
              <div class="card-1">
                <img
                  src="assets/images/house 1.avif"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <div class="price">
                  <p>&#8377; 12000</p>
                </div>
                <p style="font-weight: 600; font-size: 18px; padding: 5px 0px">
                  Shared By Three
                </p>
                <p>
                  in malhad west ,
                  <span style="font-weight: 600; padding-top: 5px">Mumbai</span>
                </p>
              </div>
              <div class="card-1">
                <img
                  src="assets/images/landing-page-img/house 4.jpeg"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <div class="price">
                  <p>&#8377; 15000</p>
                </div>
                <p style="font-weight: 600; font-size: 18px; padding: 5px 0px">
                  Single Room
                </p>
                <p>
                  in Sector 22 ,
                  <span style="font-weight: 600; padding-top: 5px"
                    >Banglore</span
                  >
                </p>
              </div>
              <div class="card-1">
                <img
                  src="assets/images/landing-page-img/house.jpeg"
                  style="
                    border-radius: 15px;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  "
                />
                <div class="price">
                  <p>&#8377; 8000</p>
                </div>
                <p style="font-weight: 600; font-size: 18px; padding: 5px 0px">
                  Shared By Two
                </p>
                <p>
                  in pragati medan 22 ,
                  <span style="font-weight: 600; padding-top: 5px"
                    >New Delhi</span
                  >
                </p>
              </div>
            </div>
          </div>
        </div>

        <section
          class="query-section"
          style="background-color: rgb(77, 107, 228)"
        >
          <div class="query-container">
            <div class="query-fields">
              <div class="query-heading">
                <p style="font-size: 25px; font-weight: 600">
                  Let Us Find Your Perfect Property
                </p>
                <p style="font-size: 20px; font-weight: 500; margin: 10px 0px">
                  Connect to a Homesaty Expert Now
                </p>
              </div>
              <div class="query-field">
              <?= form_open('Welcome/getCityData') ?>
                  <div class="input">
                      <div>
                          <input name="name" placeholder="name" type="text" required />
                      </div>
                      <div>
                          <input name="email" placeholder="email" type="email" required />
                      </div>
                      <div>
                          <input name="phone" placeholder="Phone number" type="tel" maxlength="10" required />
                      </div>
                      <div>
                          <select name="spaceType">
                              <option value="" style="display: none">Type of Space</option>
                              <option>Single Room</option>
                              <option>Triple Share</option>
                              <option>Twin Share</option>
                          </select>
                      </div>
                      <div>
                          <select name="city" id="citySelect">
                              <option value="" style="display: none">Select City</option>
                              <option value="noida">noida</option>
                              <option value="bangalore">bangalore</option>
                              <option value="gurugram">gurugram</option>
                              <option value="delhi">delhi</option>
                              <option value="pune">hyderabad</option>
                          </select>
                      </div>
                      <div>
                          <button class="sub-btn" type="submit"  >Submit</button>
                      </div>
                  </div>
              <?= form_close() ?>
              </div>
            </div>

            <div class="img-field">
              <img src="assets/images/landing-page-img/img-fleld.jpeg" />
            </div>
          </div>
        </section>

        <div class="city">
          <div class="heading" style="padding: 20px 40px; margin-bottom: 20px">
            <p style="font-size: 30px; font-weight: 600">Explore By City :</p>
          </div>
          <div class="cards">
            <div class="mumbai" id="mumbai">
              <img
                src="assets/images/landing-page-img/mumbai.jpg"
                style="
                  width: 100%;
                  height: 80%;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                "
              />
              <p
                style="
                  text-align: center;
                  color: black;
                  font-size: 25px;
                  font-weight: 600;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                "
              >
                Mumbai
              </p>
            </div>
            <div class="mumbai" id="banglore">
              <img
                src="assets/images/landing-page-img/bangalore-img.jpg"
                style="
                  width: 100%;
                  height: 80%;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                "
              />
              <p
                style="
                  text-align: center;
                  color: black;
                  font-size: 25px;
                  font-weight: 600;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                "
              >
                Banglore
              </p>
            </div>
            <div class="mumbai" id="delhi">
              <img
                src="assets/images/landing-page-img/delhi-img.jpg"
                style="
                  width: 100%;
                  height: 80%;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                "
              />
              <p
                style="
                  text-align: center;
                  color: black;
                  font-size: 25px;
                  font-weight: 600;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                "
              >
                New Delhi
              </p>
            </div>
            <div class="mumbai" id="noida">
              <img
                src="assets/images/top-living/wtc-noida.jpg"
                style="
                  width: 100%;
                  height: 80%;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                "
              />
              <p
                style="
                  text-align: center;
                  color: black;
                  font-size: 25px;
                  font-weight: 600;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                "
              >
                Noida
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="renting">
        <div class="property-img">
          <img src="assets/images/landing-page-img/renting.webp" />
        </div>
        <br />
        <div class="property-info">
          <p style="color: rgb(194, 192, 189); font-weight: 600">RENT A HOME</p>
          <p
            style="
              color: black;
              font-size: 30px;
              font-weight: 600;
              text-align: center;
            "
          >
            Considering Renting A Home ?
          </p>
          <p style="font-size: 20px">Rent a HOME in Similar Budget</p>
          <button>Explore Renting</button>
        </div>
      </section>

      <section
        class="top-living"
        id="top-living"
        data-aos="fade-up"
        data-aos-duration="1500"
      >
        <div class="top-living-container">
          <div class="top-heading">
            <p>Top Living in India</p>
            <hr />
          </div>

          <div class="top-living-cards">
            <div class="Gurugram">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/gurugram.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Gurugram</h4>
                <p>Millennium City</p>
              </div>
            </div>
   
            <div class="Bangalore">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/banglore.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Banglore</h4>
                <p>India's Silicon Valley</p>
              </div>
            </div>
            <div class="Noida">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/noida.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Noida</h4>
                <p>The Hitech City</p>
              </div>
            </div>
            <div class="Pune">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/pune.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Pune</h4>
                <p>Queens of the Deccan</p>
              </div>
            </div>
            <div class="Hyderabad">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/hydrabad.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Hyderabad</h4>
                <p>A City of Nawabs</p>
              </div>
            </div>
            <div class="Mumbai1">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/mumbai.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Mumbai</h4>
                <p>A City of Dreams</p>
              </div>
            </div>
            <div class="Delhi">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/delhi.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Delhi</h4>
                <p>The National Capital</p>
              </div>
            </div>
            <div class="Ahmedabad">
              <div class="Gurugram-img">
                <img src="assets/images/top-living/gujrat.jpg" alt="gurugram" />
              </div>
              <div class="card-text">
                <h4>Ahmedabad</h4>
                <p>The Hitech City</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="advantage-section"
        data-aos="fade-up"
        data-aos-duration="500"
      >
        <div class="advantage-container">
          <div class="advantage-heading">
            <p class="p-1">Housify Advantages</p>
            <p class="p-2">
              Housify is a plateform that provide you ease in hunting a perfect
              Living Spaces
            </p>
          </div>
          <div class="advantages">
            <div class="brokerage">
              <div class="brokerage-img">
                <img src="assets/images/landing-page-img/brokergage-free.jpg" />
              </div>
              <div>
                <p class="inner-p-1">Brokerage Free</p>
                <hr
                  style="
                    width: 50px;
                    height: 2px;
                    background-color: rgb(65, 65, 233);
                    margin: 5px auto;
                  "
                />
                <p class="inner-p-2">We have a zero brokerage policy</p>
              </div>
            </div>
            <div class="exiting">
              <div class="exiting-img">
                <img src="assets/images/landing-page-img/giftd.jpg" />
              </div>
              <div>
                <p class="inner-p-1">Exciting Offers</p>
                <hr
                  style="
                    width: 50px;
                    height: 2px;
                    background-color: rgb(11, 11, 148);
                    margin: 5px auto;
                  "
                />
                <p class="inner-p-2">
                  Fasten your seatbelts to get the ride of Housify breathtaking
                  offers
                </p>
              </div>
            </div>
            <div class="amazing">
              <div class="amazing-img">
                <img src="assets/images/landing-page-img/community.jpg" />
              </div>
              <div>
                <p class="inner-p-1">Amazing Opportunity</p>
                <hr
                  style="
                    width: 50px;
                    height: 2px;
                    background-color: rgb(65, 65, 233);
                    margin: 5px auto;
                  "
                />
                <p class="inner-p-2">
                  You will get an amazing community of like-minded people with
                  the same spirit
                </p>
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
              <input type="text" name="name" placeholder="Name" /><br />
              <input type="email" name="email" placeholder="Email" /><br />
              <input type="tel" name="phone" placeholder="Phone" /><br />
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
                <option value="option4">Noida</option></select
              ><br />
              <div class="checkbox">
                <input type="checkbox" id="agree" />
                <label for="agree">I agree to the terms and conditions</label>
              </div>
              <button
                type="submit"
                class="btn-send"
                onclick="handleSubmit(event)"
              >
                Send
              </button>
            </form>
            <?= form_close() ?>
          </div>
        </div>
      </section>

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
                  <li><a href="bangalore/city.html">PG in Bangalore</a></li>
                  <li><a href="delhi/delhi.html">PG in Delhi</a></li>
                  <li><a href="gurugram/gurugram.html">PG in Gurugram</a></li>
                  <li><a href="noida/noida.html">PG in Noida</a></li>
                  <li><a href="pune/pune.html">PG in Pune</a></li>
                  <li><a href="hyderabad/hyderabad.html">PG in Hyderabad</a></li>
                  <li><a href="mumbai/mumbai.html">PG in Mumbai</a></li>
                  <li><a href="ahmedabad/ahmedabad.html">PG in Ahmedabad</a></li>

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
    
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
