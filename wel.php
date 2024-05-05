<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION["username"])) {
    // User is logged in, display the user's name
    $username = $_SESSION["username"];
    echo "Welcome, $username!";
} else {
    // User is not logged in, redirect to the login page
    header('location:../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <!-- Your home page content here -->
    <h1>Welcome to the Home Page</h1>
    <!-- Other content of your home page -->
</body>
</html>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
        <h3> Empowering Educators, Inspiring Excellence!</h3>

<p>Greetings and a heartfelt welcome to EDUpro, your premier destination for professional development in education. Whether you're an experienced educator, a budding teacher, or an enthusiastic lifelong learner, you've found your home among peers who share your passion for transforming lives through education.

At EDUpro, we believe in the power of education to shape the future. Our mission is simple yet profound: to equip educators with the knowledge, skills, and resources they need to excel in their noble calling. From innovative teaching strategies to cutting-edge technology integration, we're here to support you every step of the way on your journey to greatness.

Explore our comprehensive range of training programs, workshops, and resources designed to elevate your teaching practice to new heights. Connect with fellow educators from around the globe, share best practices, and embark on a collaborative learning journey that fosters growth and inspiration.

Whether you're seeking to enhance your classroom instruction, develop leadership skills, or stay abreast of the latest trends in education, you'll find a wealth of opportunities awaiting you here at EDUpro. Our commitment to excellence and lifelong learning ensures that you'll always have access to the tools and support you need to thrive in today's dynamic educational landscape.

Thank you for choosing EDUpro as your partner in professional growth and development. Together, let's embark on a transformative journey that empowers educators, enriches lives, and shapes the future of education.

<br>Welcome aboard!</p>

<p>Warm regards,<br>

The EDUpro Team</p>
    
    <?php include"footer.php"; ?>
</body>
</html>