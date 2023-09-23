<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device=device-width,initial-scale=1.0"/>
        <title>about</title>

 <!-- swiper css link-->
 <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<!-- custom css file link-->
<link rel="stylesheet" href="style.css"/>

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
<div class="heading" style="background:url(images/woodspanaromic.webp) no-repeat">
    <h1>book </h1>
</div>


<!-- booking section starts -->
<section class="booking">
<h1 class="heading-title">book your trip!</h1>
<form action ="book_form.php" method  ="post" class="book-form">

<div class="flex">
<div class="inputBox">
    <span>name :</span>
    <input type="text" placeholder="enter your name" name="name">
</div>


<div class="inputBox">
    <span>email :</span>
    <input type="text" placeholder="enter your email" name="email">
</div>

<div class="inputBox">
    <span>phone :</span>
    <input type="text" placeholder="enter your number" name="phone">
</div>

<div class="inputBox">
    <span>address :</span>
    <input type="text" placeholder="enter your address" name="address">
</div>

<div class="inputBox">
    <span>where to visit:</span>
    <input type="text" placeholder="place you want to visit " name="location">
</div>

<div class="inputBox">
    <span>how many :</span>
    <input type="number" placeholder="number of guests" name="guests">
</div>

<div class="inputBox">
    <span>arrivals :</span>
    <input type="date"  name="arrivals" id="demo">
</div>

<div class="inputBox">
    <span>leaving :</span>
    <input type="date" name="leaving" id="demo1">
</div>

</div>
<input type="submit" value="submit" class="btn" name="send">
</form>


</section>


<!-- booking section ends-->



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
<script src="script.js"></script>
<script>
    //booking date
var date = new Date();
var tdate = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
if (tdate < 10) {

  tdate = '0' + tdate;
}
if (month < 10) {

  month = '0' + month;
}
var mindate = year + "-" + month + "-" + tdate;
document.getElementById("demo").setAttribute('min', mindate)
document.getElementById("demo1").setAttribute('min', mindate)

</script>
</body>
</html>