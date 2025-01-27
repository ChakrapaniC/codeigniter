<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="<?=base_url()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/ahmedabad/css/singlePg.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="inner-container" data-aos="fade-out" data-aos-duration="1000">
            <nav class="navbar">
                <p1 style="font-size: 35px; letter-spacing: 5px; font-weight: bold">Housify</p1>

                <div class="info">
                    <p1><a href="location/about">About Us</a></p1>
                    <p1><a href="#contact-row">Contact Us</a></p1>
                </div>
                <div class="btn" onclick="toggleModal()">
                    <button class="btn3">Book Now</button>
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
                    <button class="btn3">Book Now</button>
                  </div>
                </div>
              </nav>

            <div class="content">
                <section class="img-section">
                    <img src="" class="image" />
                    <!-- <iframe class="map" src="" width="40%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    <iframe style="border-radius: 20px;" width="100%" height="500px" src="https://www.youtube.com/embed/6O1lMtcwORM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </section>
                <div style="width:100%; margin-bottom: 40px; border-radius: 20px;">
                    <h4 style="margin-bottom: 20px;">Virtual Tour</h4>
                    <!-- <iframe style="border-radius: 20px;" width="100%" height="415" src="https://www.youtube.com/embed/6O1lMtcwORM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <iframe style="border-radius: 20px;"  class="map" src="" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h4>Nearby Amenities</h4>
                <div id="results">
                    
                </div>
                <section class="full-details">
                    <div class="details">
                        <div class="inner-1"></div>
                        <h4 class="h-4"></h4>
                    </div>
                </section>
                <hr />
                <section class="amenities">
                    <h5>Amenities</h5>
                    <div class="all-amenities">
                        <div>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/wifi.png" />
                                <span>Wifi</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/tv.png" />
                                <span>Tv</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/parking.png" />
                                <span>Parking</span>
                            </p>
                        </div>
                        <div>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/cupbord.png" />
                                <span>Cupbord</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/deposite.png" />
                                <span>Deposite</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/icons8-do-not-touch-100.png" />
                                <span>No Restriction</span>
                            </p>
                        </div>
                        <div>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/kitchen.png" />
                                <span>Kitchen</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/housekeeping.png" />
                                <span>Housekeeping</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/images/amenity/icons8-lease-100.png" />
                                <span>Security</span>
                            </p>
                        </div>
                        <div>
                            <p>
                                <img src="assets/ahmedabad/banglore-coliving/amenity/icons8-hot-springs-100 (1).png" />
                                <span>Geyser</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/banglore-coliving/amenity/icons8-bathroom-100.png" />
                                <span>Bathroom</span>
                            </p>
                            <p>
                                <img src="assets/ahmedabad/banglore-coliving/amenity/power.png" />
                                <span>Power Backup</span>
                            </p>
                        </div>
                    </div>
                     </section>
                <hr />
                <section class="pricing" style="margin: 40px 0px;">
                    <h4 style="padding-bottom: 20px;">Pricing</h4>
                    <div class="plans">
                        <div class="imga">
                            <img src="assets/ahmedabad/images/single sharing.jpeg" />
                        </div>
                        <div class="sharing">
                            <h5>Private Room</h5>
                            <p style="padding-top: 10px;">Entire room for yourself with access to amenities</p>
                        </div>
                        <div class="price">
                            <h5>&#8377;30,000/ month</h5>
                        </div>
                    </div>
                    <div class="plans">
                        <div class="imga">
                            <img src="assets/ahmedabad/images/double-sharing.jpeg" />
                        </div>
                        <div class="sharing">
                            <h5>Double Sharing</h5>
                            <p style="padding-top: 10px;">Entire room for yourself with access to amenities</p>
                        </div>
                        <div class="price">
                            <h5 class="dynamic"></h5>
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
         
            </div>
        </div>

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

    </div>
    </div>
    <script src="assets/ahmedabad/js/pgInfo.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>