<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device=device-width,initial-scale=1.0" />
  <title>home</title>

  <!-- swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- custom css file link-->
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <!-- header section starts-->
  <section class="header">
    <div class ="logo">
      <a href="home.php"><img src="images/logo1.png" alt="logo" id="logo"></a>
    <a href="home.php" class="text">NepalYatra.</a>
</div>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="login.php">Admin</a>
      <img src="images/moon.png" id ="icon">
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>
  <!-- header section end-->


  <!-- home section starts-->

  <section class="home">

    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
          <div class="content">
            <div class="text">
              <span >The journey is the destination</span>
              <p class="body-text">Adventure is worthwhile</p>
            </div>

            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/flag.webp) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
                <p class="body-text">Travel is my therapy</h3>
            </div>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
              <p class="body-text">adventure begin</p>
            </div>
              <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>
  </section>

  <!-- home section ends-->


  <!-- services section starts-->
  <section class="services">

    <h1 class="heading-title">our services </h1>
    <div class="box-container">
      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>
      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>
      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>camp fire</h3>
      </div>
      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>off road</h3>
      </div>
      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>treeking</h3>
      </div>
    </div>


  </section>
  <!-- services section ends -->

   <!-- about us section starts-->

<section class="home-about">
  <div class="image">
    <img src="images/about-img.jpeg" alt="">
  </div>
<div class="content">
  <h3> about us</h3>
  <p>we're not just in the business of travel; we're in the business of creating unforgettable experiences.
     Our journey began in 2023 when a group of passionate adventurers came together with a shared vision: 
     to introduce travelers to the wonders of the nepal and help them embark on journeys that would leave a lasting impact.
     We believe that travel has the power to transform lives and broaden horizons,
      and we're committed to making that transformation accessible to everyone.
      Our commitment to quality, safety, and excellence ensures that your adventure is not only thrilling but also worry-free.
       We work closely with local communities and organizations to minimize our environmental impact and
       contribute positively to the destinations we explore </p>
  <a href="about.php" class="btn">read more</a>
</div>

</section>
<!-- about us section ends -->

<!-- package section starts-->

<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <?php
        // Establish a database connection
        $connection = mysqli_connect('localhost', 'root', '', 'tourstravels');

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch a limited number of data from the 'packages' table along with associated images
        $query = "SELECT p.name, p.description, pi.image_path 
                  FROM packages p 
                  JOIN package_image pi ON p.id = pi.package_id
                  LIMIT 4"; // Change 5 to the desired number of packages to display

        $result = mysqli_query($connection, $query);

        // Check if there are any packages in the database
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through the packages and display them
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="box">';
                echo '<div class="image">';
                // Display the image if it exists
                if (isset($row['image_path']) && file_exists($row['image_path'])) {
                    echo '<img src="' . $row['image_path'] . '" alt="' . $row['name'] . '">';
                } else {
                    echo '<p>Image not found.</p>';
                }
                echo '</div>';
                echo '<div class="content">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<a href="book.php" class="btn">Book Now</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No packages available.</p>';
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>


<!--package section ends -->

<!-- offer section starts-->

  <section class ="home-offer">
    <div>
      <div class ="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
        <a href= "book.php" class= "btn" >book now</a>
      </div>
    </div>  

  </section>

<!--offer section ends -->


<!-- footer section starts-->
  <section class="footer">
    <div>
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3> extra links</h3>
          <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
          <a href="#"><i class="fas fa-angle-right"></i>about us </a>
          <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
          <h3> contact info</h3>
          <a href="#"><i class="fas fa-phone"></i>9806951074</a>
          <a href="#"><i class="fas fa-phone"></i>9869747143</a>
          <a href="#" style="text-decoration: none; text-transform: lowercase;">
    <i class="fas fa-envelope"></i> cricketerbibek619@gmail.com</a>

    <a href="#" style="text-decoration: none; text-transform: lowercase;">
    <i class="fas fa-map"></i> kathmandu,nepal-101010</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
          <a href="#"><i class="fab fa-twitter"></i>twitter</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
        <div class="box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.0057930494513!2d85.31852427536717!3d27.65529247621244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb177c56a520d9%3A0xf3d0d1e37134dfb7!2sCosmos%20College%20of%20Management%20and%20Technology!5e0!3m2!1sen!2snp!4v1690473122573!5m2!1sen!2snp" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="credit"> created by <span> C2001 (2020)</span> |all rights reserved! </div>

    </div>
  </section>


  <!-- footer section ends-->



  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <!-- custom js file link-->
  <script src="script.js">
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
 
  </script>

</body>

</html>