<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Site</title>
    <link rel="homestyle.css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome<?php echo ' '.$username ?></h1>
    </header>

    <div class="slideshow-container">
        <!-- Slideshow content goes here -->
    </div>

    <section id="team-members">
        <!-- Team members section goes here -->
    <div class="team-member">
        <img src="team-member1.jpg" alt="Team Member 1">
        <h2>Team Member 1</h2>
        <p>Description of Team Member 1</p>
    </div>
    <div class="team-member">
        <img src="team-member2.jpg" alt="Team Member 2">
        <h2>Team Member 2</h2>
        <p>Description of Team Member 2</p>
    </div>
    <div class="team-member">
        <img src="team-member2.jpg" alt="Team Member 2">
        <h2>Team Member 2</h2>
        <p>Description of Team Member 2</p>
    </div>
    <div class="team-member">
        <img src="team-member2.jpg" alt="Team Member 2">
        <h2>Team Member 2</h2>
        <p>Description of Team Member 2</p>
    </div>
    <div class="team-member">
        <img src="team-member2.jpg" alt="Team Member 2">
        <h2>Team Member 2</h2>
        <p>Description of Team Member 2</p>
    </div>
   
</section>
    </section>

    <section id="subjects">
        <!-- Subjects section goes here -->
    </section>

    <script src="script.js"></script>
</body>
</html>
