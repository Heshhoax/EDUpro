
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Site</title>
    <link rel="stylesheet" href="homestyle.css">  
</head>
<body>
    <?php include'heade.php'; $username = $_SESSION['username'];?>
    <header>
        <h1>Welcome<?php echo ' '.$username.'!' ?></h1>
    </header>

    <script>
     document.addEventListener("DOMContentLoaded", function() {
    // Your JavaScript code here 
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
});  
    </script>

    <section id="slideshow-container">

    <div class="slides">
    <img src="images/slide1.jpg" alt="Team Member 1">
        
    </div>
    <div class="slides">
    <img src="images/slide2.jpeg" alt="Team Member 1">
       
    </div>
    <div class="slides">
    <img src="images/slide3.jpeg" alt="Team Member 1">
        
    </div>
    <div class="slides">
    <img src="images/slide4.jpg" alt="Team Member 1">
        
    </div>
    <div class="slides">
    <img src="images/slide5.jpg" alt="Team Member 1">
       
    </div>

    </section>

    <section id="team-members">
        <!-- Team members section goes here -->
    <div class="team-member">
        <img src="images/manager.png" alt="Team Member 1">
        <h2>Manager_Heshan</h2>
        <p>Oversees the operations and strategic direction of our institution. With a keen eye for detail and a passion for excellence, they ensure that every aspect of our organization runs smoothly and efficiently.</p>
    </div>
    <div class="team-member">
        <img src="images/lecturer.jpg" alt="Team Member 2">
        <h2>Lecturer_Upasama</h2>
        <p>Lecturers bring a wealth of knowledge and expertise to the classroom. Dedicated to fostering an engaging and supportive learning environment, they inspire students to reach their full potential and achieve academic success. 2</p>
    </div>
    <div class="team-member">
        <img src="images/lecturer2.png" alt="Team Member 2">
        <h2>Lecturer_Inuka</h2>
        <p>Lecturers are committed to delivering high-quality education and enriching learning experiences. Through innovative teaching methods and a deep understanding of their subject matter, they empower students to excel academically and thrive in their chosen fields.</p>
    </div>
    <div class="team-member">
        <img src="images/examiner.jpg" alt="Team Member 2">
        <h2>Examiner_Dinithi</h2>
        <p>As examiners, our team plays a vital role in evaluating student performance and ensuring academic integrity. With rigorous standards and impartial judgment, they assess student work fairly and provide valuable feedback for continuous improvement.</p>
    </div>
    <div class="team-member">
        <img src="images/admin.jpg" alt="Team Member 2">
        <h2>Admin_Imadu</h2>
        <p>Provides essential support to ensure the smooth operation of our institution. From managing schedules and coordinating resources to handling administrative tasks, they work behind the scenes to keep everything running efficiently and effectively.</p>
    </div>
   
<!--</section>
    <section id="subjects">
         Subjects section goes here 
    </section>-->

    <script src="script.js"></script>
    <div class="footer">
    <?php include'footer.php'; ?>
    </div>
</body>
</html>
