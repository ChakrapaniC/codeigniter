<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="<?=base_url()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/result.css') ?>"/>
</head>
<body>
    <div class="city-container">
        <nav class="navbar">
            <p style="font-size: 35px; letter-spacing: 5px; font-weight: bold">Housify</p>
            <div class="info">
                <p><a href="location/about">About Us</a></p>
                <p><a href="#contact-row">Contact Us</a></p>
            </div>
            <div class="btn" onclick="toggleModal()">
                <button class="btn3">Request Call</button>
            </div>
        </nav>
        <nav class="mobile-nav" >
            <div class="top">
                <p style="font-size: 35px; letter-spacing: 5px; font-weight: bold">Housify</p>
                <div class="info">
                    <p><a href="location/about">About Us</a></p>
                    <p>Contact Us</p>
                </div>
            </div>
            <div class="bottom">
                <div class="btn" onclick="toggleModal()">
                    <button class="btn3">Request Call</button>
                </div>
            </div>
        </nav>
        <?php if (!empty($city_data)): ?>
        <h4 style="margin: 20px; font-size: 25px;">Properties in <?= $city ?></h4>
        <div class="coliving-spaces">
            <?php foreach ($city_data as $row): ?>
                <div class="card" onclick="showDetails(<?= $row['id'] ?>)">
                    <img src="<?= base_url('assets/'.$row['imgSrc']) ?>" alt="img-<?= $row['imgSrc'] ?>" />
                    <div class="details">
                        <h4><?= $row['name'] ?></h4>
                        <p><?= $row['location'] ?></p>
                        <h4>₹15,000 / month</h4>
                        <p>Call Owner</p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No results found</p>
        <?php endif; ?>
        </div>
    </div>

    <section class="upper-footer">
      <div class="footer-content">
        <div class="rows">
          <div class="content-row">
            <div>
              <div class="Housify" style="margin-bottom: 10px;"><h4>HOUSIFY</h4></div>
              <div class="text">
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
              <div class="two"><p style="text-align: justify;">Don’t miss to subscribe to our new feeds, kindly fill the form below.</p></div>
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
</body>
</html>
