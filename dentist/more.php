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

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            <a href="#reviews">support</a>
            <a href="#videos">videos</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>


<section style="background-color: #B7DBDE;" class="home2" id="home">

   <div class="container" style="padding-top: 100px; margin-top: 50px;">

      <div class="row align-items-center">
            <div class="content text-center">
        <div class="column" >
            <img src="images/dental.jpg"  alt="imagen1" style="width: 400px; margin-right: 20px; border-radius: 20px;" class="gallery-img">
            
            <img src="images/dental4.jpg" alt="imagen4" style="width: 400px; margin-right: 20px; border-radius: 20px;" class="gallery-img">
        </div>
        <h3 style="font-size: 3rem; margin-top: 2.5rem">Who We Are</h3>
        <p style="font-size: 17px;" class="p">We're dedicated to helping you achieve optimal dental <span>health</span> for a happy, fulfilling life. Our skilled and compassionate team provides personalized care and a full range of services to help you maintain a beautiful, healthy smile. Come experience the difference at our dental care.</p>
        <a href="#contact" class="link-btn">make appointment</a>
        </div>
      </div>

   </div>

</section>

<style>
    .p {
        line-height: 2;
        font-size: 1.5rem;
        color:var(--light-color);
        padding:1rem 0;
    }

    .gallery-img {
        width: 150px;
        margin-right: 10px;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .gallery-img:hover {
    transform: scale(1.1);
    opacity: 0.8;
    }

</style>

<!-- home section ends -->

<!-- about section starts  -->


<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <video style="width: 500px" autoplay loop muted>
                <source src="images/video.mp4" type="video/mp4">
            </video>

         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>We believe that excellent dental care should be accessible and enjoyable for everyone. Our team is committed to providing compassionate, personalized dental services to individuals and families of all ages. We strive to create a welcoming, comfortable environment where you and your loved ones can feel relaxed and confident in the care you receive. Experience true dental care that puts you and your family's needs first.</p>
            <a href="#contact" class="link-btn">make appointment</a>
            <a href="index.php" style="display: inline-block; margin-left: 5px;" class="link-btn" id="view-more-btn">
               <img src="images/left.png" alt="" style="height: 20px; margin-right: 5px;">
               Go Back
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




<section style="background-color: #B7DBDE;" class="reviews" id="reviews">

   <h1 class="heading"> Help & Support <img style="width: 50px; margin-right: 20px; border-radius: 20px;" src="images/support.png" alt=""> </h1>

   <div class="box-container container">

      <div class="box" id="gallery-img">
         <img src="images/woman.jpg" style="max-width: 50%; height: auto" alt="">
         <p>I suffer from tooth sensitivity and don't know what to do to reduce the pain when eating or drinking cold or hot things.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>Tooth Sensitivity</span>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/woman4.jpg" style="max-width: 50%; height: auto" alt="">
         <p>I have stains on my teeth and feel embarrassed when smiling. Is there any treatment that can help me have a whiter smile?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jessica Davis</h3>
         <span>Teeth staining issue</span>
      </div>

      <div class="box" id="gallery-img">
         <img src="images/man.jpg" style="max-width: 100%; height: auto" alt="">
         <p>I have trouble sleeping due to teeth grinding and am worried that this could affect my dental health in the long run.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lucas Nguyen</h3>
         <span>Restless Nights</span>
      </div>

      
    <br />
   </div>
   <div class="container">
        <h3 style="font-size: 3rem; margin-top: 2.5rem">How often should I visit the dentist?</h3>
        <p class="p">It is recommended to visit the dentist at least twice a year for a general checkup and a professional teeth cleaning. However, if you have any dental problems or pain, do not hesitate to schedule an appointment to be evaluated by the dentist.</p>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <br />
        <h3 style="font-size: 3rem; margin-top: 2.5rem">How can I prevent cavities?</h3>
        <p class="p">To prevent cavities, it is important to maintain good oral hygiene. This means brushing your teeth at least twice a day and using dental floss daily. It is also recommended to reduce the consumption of sugary foods and drinks and to visit the dentist regularly for a checkup and professional teeth cleaning.</p>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <br />
        <h3 style="font-size: 3rem; margin-top: 2.5rem">Can dental problems affect my overall health?</h3>
        <p class="p">Yes, dental problems such as gum disease have been linked to other health issues such as heart disease, diabetes, and stroke. It is important to maintain good oral health to help prevent these health problems.</p>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
   </div>
   

</section>

<section class="about" id="videos">

   <div class="container">

      <div class="row align-items-center">

         <div class="content">
            <span>Instructional Videos</span>
            <h3>How to Brush Your Teeth</h3>
            <p>In this video you will learn the proper techniques for brushing your teeth to maintain optimal dental health. Our expert dental hygienist will guide you through step-by-step instructions on how to brush your teeth effectively and efficiently. You will also gain insight into the benefits of proper brushing techniques and the consequences of improper brushing habits.</p>

            <div style="margin-top: 20px;" class="content">
               <iframe style="border-radius: 20px;" width="560" height="315" src="https://www.youtube.com/embed/leVF5RYj42Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

            <br />
            <h3>How to use Floss Properly</h3>
            <p>In this video you will learn the proper techniques for brushing your teeth to maintain optimal dental health. Our expert dental hygienist will guide you through step-by-step instructions on how to brush your teeth effectively and efficiently. You will also gain insight into the benefits of proper brushing techniques and the consequences of improper brushing habits.</p>

            <div style="margin-top: 20px;" class="content">
               <iframe style="border-radius: 20px;" width="560" height="315" src="https://www.youtube.com/embed/WviE5aa5Ha0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>
            <br />
            <h3>How To Use Mouthwash</h3>
            <p>Mouthwash can be a valuable addition to your daily oral care routine, helping to freshen breath, prevent gum disease, and kill bacteria that can cause cavities. In this instructional video, we'll walk you through the proper technique for using mouthwash, including how much to use, when to use it, and tips for maximizing its effectiveness. Say goodbye to bad breath and hello to a healthier, happier smile with our simple guide to using mouthwash.</p>

            <div style="margin-top: 20px;" class="content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wiflxvRl04M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

            
             <!-- <div style="text-align: center; margin-top: 20px;">
               <a href="#contact" class="link-btn">contact us</a>
               <a href="index.php" style="display: inline-block; margin-left: 5px;" class="link-btn" id="view-more-btn">
                  <img src="images/left.png" alt="" style="height: 20px; margin-right: 5px;">
                  Go Back
               </a>
            </div>  -->
            
               
         </div>

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