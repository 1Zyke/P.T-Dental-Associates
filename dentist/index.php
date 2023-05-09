<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dental Care</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header style="background-color: #CAF0F3;" class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Palm Tree <span>Dental Associates</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Healthy Teeth Happy Life</h3>
            <p>We're dedicated to helping you achieve optimal dental health for a happy, fulfilling life. Our skilled and compassionate team provides personalized care and a full range of services to help you maintain a beautiful, healthy smile. Come experience the difference at our dental care.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->
<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img style="border-radius: 20px" src="images/about.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>We believe that excellent dental care should be accessible and enjoyable for everyone. Our team is committed to providing compassionate, personalized dental services to individuals and families of all ages. We strive to create a welcoming, comfortable environment where you and your loved ones can feel relaxed and confident in the care you receive. Experience true dental care that puts you and your family's needs first.</p>
            <a href="#contact" class="link-btn">make appointment</a>
            <a href="more.php" style="display: inline-block; margin-left: 5px;" class="link-btn" id="view-more-btn">
               <img src="images/right.png" alt="" style="height: 20px; margin-right: 5px;">
               View More
            </a>

         </div>

      </div>

   </div>

</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#view-more-btn').click(function(event) {
            event.preventDefault();
            var url = $(this).attr('href');
            $('body').fadeOut(500, function() {
                window.location.href = url;
            });
        });
    });
</script>

<!-- about section ends -->

<!-- services section starts  -->

<section style="background-color: #CAF0F3;" class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box" id="gallery-img">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>Our Alignment Specialist service is designed to help you achieve a confident, beautiful smile by correcting misaligned teeth and jaw. Our team of experts uses state-of-the-art technology and personalized treatment plans to give you the perfect smile you deserve. Say goodbye to discomfort and hello to a stunning, healthy smile with our Alignment Specialist service.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Cosmetic Dentistry is an art that combines the latest techniques and technology to enhance your smile's aesthetic appearance. At our dental care, we offer a range of cosmetic dentistry services such as teeth whitening, veneers, and dental implants to help you achieve the smile you desire. Our expert team of cosmetic dentists will work closely with you to create a personalized treatment plan that suits your unique needs and goals, ensuring you leave our office with a beautiful and confident smile.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Our oral hygiene experts provide comprehensive and personalized care to help you achieve and maintain optimal oral health. From routine cleanings to advanced periodontal therapy, we offer a range of services to keep your smile healthy and beautiful. Our team is dedicated to educating and empowering you to take control of your oral health through proper hygiene habits and preventive care. Trust us to be your partner in achieving a lifetime of healthy smiles.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>Our Root Canal Specialist service is focused on providing expert care for patients who need root canal treatment. Our highly trained and experienced specialists use the latest techniques and technologies to ensure that our patients receive the highest quality care. We understand that root canal treatment can be intimidating, which is why we take a gentle and compassionate approach to help patients feel at ease during the procedure. Our goal is to ensure that every patient leaves our care with a healthy and pain-free smile.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>Our Live Dental Advisory service provides real-time professional advice and guidance on your dental concerns. Our experienced dental advisors are available to assist you with any questions or issues you may have, from routine dental care to emergency situations. With our Live Dental Advisory service, you can have peace of mind knowing that you have a reliable source of expert advice and support at your fingertips.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>Our Cavity Inspection service is designed to identify cavities in their early stages and prevent further damage to your teeth. Our experienced dentists use advanced technology to detect cavities and provide personalized treatment plans to restore your teeth to their natural health. Don't let cavities go unnoticed, schedule your cavity inspection appointment with us today.</p>
      </div>

   </div>

</section>

<style>
    #gallery-img {
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    #gallery-img:hover {
    transform: scale(1.1);
    opacity: 0.8;
    }

</style>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box" id="gallery-img">
         <img src="images/process-1.png" alt="">
         <h3>Teeth Cleaning</h3>
         <p>Our dental hygienists use specialized tools to remove plaque and tartar buildup from your teeth and gum line. This process is important for maintaining good oral health and preventing cavities and gum disease.</p>
      </div>


      <div class="box" id="gallery-img">
         <img src="images/process-2.png" alt="">
         <h3>Root Canal Therapy</h3>
         <p>If you have a damaged or infected tooth, our dentists can perform a root canal to remove the damaged tissue and restore your tooth. This process can save your tooth from extraction and prevent further damage to your oral health.</p>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>For patients with missing teeth, dental implants provide a long-lasting, natural-looking replacement option. Our dental care team can surgically place a titanium post in your jawbone, which will fuse with the bone over time to create a stable foundation for a dental crown.</p>
      </div>

      

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section style="background-color: #CAF0F3;" class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box" id="gallery-img">
         <img src="images/pic-1.png" alt="">
         <p>I am very pleased with the root canal treatment I received at your office. The staff was very friendly and professional, and made me feel comfortable throughout the entire process. I highly recommend your dental service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marcus Chen</h3>
         <span>satisfied client</span>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/pic-2.png" alt="">
         <p>My experience with Palm Tree Dental Associates was amazing. The root canal treatment was performed quickly and painlessly, and the staff provided exceptional care at all times. I will definitely return for my dental needs in the future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Johnson</h3>
         <span>satisfied client</span>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/pic-3.png" alt="">
         <p>Thank you Palm Tree Dental Associates for the root canal treatment I recently received. The staff was very attentive and friendly, and the procedure was much more comfortable than I expected. I can now eat and speak without pain! I will definitely recommend your service to friends and family!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Juan Hernandez</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Schedule Appointment!</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>Full Name:</span>
      <input type="text" name="name" placeholder="Name" class="box" required>
      <span>Email Address:</span>
      <input type="email" name="email" placeholder="Email" class="box" required>
      <span>Phone Number:</span>
      <input type="number" name="number" placeholder="Number" class="box" required>
      <span>Appointment Date:</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section style="background-color: #CAF0F3;" class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+809-726-7840</p>
         <p>+809-726-7841</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Sto. Dgo. Rep. Dom. - 10100</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>8:00 A.M to 7:00 P.M</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>dcare@gmail.com</p>
         <p>loronf19@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>4Zyke</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>