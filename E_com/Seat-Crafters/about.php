<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey there! I'm Denzel Jezreel Lazo, the proud owner of Seat Crafters. We specialize in crafting modified motorcycle seats tailored to perfection. With a passion for design and innovation, I love creating unique and functional seat solutions for riders. Exploring new techniques and trends in seat customization is more than just a hobby—it's my craft.</p>

         <p>I would like to extend my heartfelt gratitude to all my customers and supporters who have inspired me to continuously improve and bring creative projects like this to life. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>Been using their services for quite a bit and have never had an issue with the quality of their products. Online e-products working great as well. Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time. Everything else has been good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/Jhonmarc.Abad" target="_blank">Jhon Marc Abad</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>Seat Crafters is one of the most reliable motorcycle seat modification services available. Customers can trust the quality and craftsmanship completely. We encourage clients to share feedback immediately if there are any issues with the modifications. In rare cases of dissatisfaction, we provide prompt solutions, including adjustments or refunds, without requiring unnecessary hassle. Our strict quality control ensures top-notch service, making Seat Crafters a trusted name for motorcycle enthusiasts day by day..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/jacklord.bajog" target="_blank">jacklord Bajog</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>Seat Crafters is great if you choose quality services. A variety of motorcycle seat modification options are available. Customers can request adjustments or modifications within 7 days for their satisfaction. Seat Crafters is boosting the motorcycle customization industry, providing enthusiasts with a seamless way to enhance their rides. It offers a fantastic opportunity to personalize seats with comfort and style..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/jimmy.catalan.779" target="_blank">Jimmy Aberina Catalan Jr.</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-7.jpg" alt="">
         <p>Being a solid customer of Seat Crafters for motorcycle seat modifications for almost 3 years has been an outstanding experience. The attention to detail and customer-focused services are truly impressive. Affordable customization options and convenient pick-up or delivery make it even more hassle-free, ensuring top-notch service without extra costs..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/paulvincent.reynante" target="_blank">Paul Vincent Riotoc Reynante</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
         <p>I have been using Seat Crafters' services for the last two years, and I have found them to be extremely reliable. Their return policy provides an extra layer of confidence and peace of mind. If the product doesn’t meet your expectations or has any faults, you can return it within seven days from the date of delivery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/billyjohn.orteza.58" target="_blank">Billy John Orteza </a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>Seat Crafters is amazing! I've had numerous motorcycle seats modified by them and never faced any issues. They deliver on time without delays, and the quality of their work is exceptional. Their attention to detail and affordable rates make them stand out. Just an incredible service—I'll keep coming back to Seat Crafters!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/nathanrey.rodillas.7"  target="_blank">Nathan Rey Rodillas</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>