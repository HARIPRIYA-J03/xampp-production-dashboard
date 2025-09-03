<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - SNQS International Socks</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      
      
    }

    #about {
      background: url('images/about.jpeg') no-repeat center center fixed;
      background-size: cover; 
     height: 91vh;
      position: relative;
      color: #fff;
    }

    #about::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 0;
    }

    #about h2 {
      text-align: center;
      font-size: 2.8rem;
      margin-bottom: 40px;
      padding: 30px;
      z-index: 1;
      position: relative;
      color: #fdfdfd;
    }

    .about-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 40px;
      position: relative;
      z-index: 1;
      max-width: 1200px;
      margin: auto;
      background: rgba(10, 10, 10, 0.7);
      border-radius: 15px;
     
    }

    .about-content img {
      max-width: 550px;
      width: 100%;
      
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      padding: 20px;
    }

    .about-content p {
      max-width: 600px;
      font-size: 1.2rem;
      line-height: 1.8;
      color: #f8f8f8;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
    }

    @media (max-width: 768px) {
      #about h2 {
        font-size: 2.2rem;
      }

      .about-content {
        flex-direction: column;
        text-align: center;
      }

      .about-content p {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <section id="about">
    <h2>About SNQS International Socks Pvt. Ltd.</h2>
    <div class="about-content">
      <img src="images/about_img.jpeg" alt="Factory Production" />
      <p>
        SNQS International is a leading manufacturer of high-quality socks, dedicated to innovation, sustainability, and customer satisfaction.
        Established in 2000, we have grown steadily by combining advanced production technology with skilled craftsmanship.
        Our commitment to quality and timely delivery makes us a trusted partner in the textile industry worldwide.
        Join us on our journey towards a more comfortable and sustainable future.
      </p>
    </div>
  </section>
  <?php

include "footer.php";
?>
</body>
</html>
