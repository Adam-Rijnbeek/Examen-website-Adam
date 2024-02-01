<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lg-fb-comment-box.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
  <section class="header">
    
    <a href="home.php" class="logo">Travel & Tour</a>

<nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>


<div class="heading" style="background:url(images/3plaatje.jpg) no-repeat">
<h1>book</h1>
</div>


<section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="book_form.php" methot="post" class="book-form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
</div>

<div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
</div>

<div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
</div>

<div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
</div>

<div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
</div>

<div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests">
</div>

<div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
</div>

<div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">
</div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</form>
</section>


<section class="footer">

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>"
    <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>"
    <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>"
    <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>"
</div>

<div class="box">
    <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>"
    <a href="#"> <i class="fas fa-angle-right"></i> about us</a>"
    <a href="#"> <i class="fas fa-angle-right"></i> privacy</a>"
    <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>"
</div>

<div class="box">
    <h3>contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i> 0612345678</a>"
    <a href="#"> <i class="fas fa-phone"></i> 0698765432</a>"
    <a href="#"> <i class="fas fa-envelope"></i> travelentour@gmail.com</a>"
    <a href="#"> <i class="fas fa-map"></i> Uithoorn, Netherlands - Witkopeend 13</a>"
</div>

<div class="box">
    <h3>follow us</h3>
    <a href="#"> <i class="fas fa-twitter"></i> twitter</a>"
    <a href="#"> <i class="fas fa-instagram"></i> instagram</a>"
    <a href="#"> <i class="fas fa-facebook"></i> facebook</a>"
</div>
</div>
<div class="credit"> created by <div><span> Adam and Collin</span></div> | all rights reserved | </div>

</section>








    <script src="script.js"></script>
</body>
</html>