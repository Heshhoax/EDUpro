<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    <title>Packages And Offers</title>
</head>
<body>
    <!-- Include header -->
    <?php 
     include 'heade.php';
     ?>
    
    <div class="side0">
        <h2>Packages And Offers</h2>

        <div class="packagerow">
             <!--PLATINUM-->
            <div class="package" id="side1">
                <legend><h5>PLATINUM</h5></legend>
                <img src="images/platinum.jpeg" width="200px" height="200px">
                <h3>Rs. 25,000/- </h3>
                <p>Duration: 4 Months</p>
                <h3>Features:</h3>     
                <h4>Extra practical sessions for hands-on learning.</h4>
                <h5>Quick-paced sessions to accelerate your progress.</h5>
                <h5>Access to an extensive online library for comprehensive resources.</h5>
                <h5>Personalized mentorship for tailored guidance and support.</h5>   
                <a href="includes/imaduincludes/payment.php"><button buy id="btn-buy">BUY</button></a>
            </div>
             <!--GOLD-->
            <div class="package" id="side1">
                <legend><h5>GOLD</h5></legend>
                <img src="images/gold.jpeg" width="200px" height="200px">
                <h3>Rs. 20,000/- </h3>
                <p>Duration: 5 Months</p>
                <h3>Features:</h3> 
                <h4>Interactive sessions with experienced instructors.</h4>    
                <h5>Comprehensive curriculum spread over a slightly longer duration.</h5>
                <h5>Access to the online library for research and reference.</h5>
                <h5>Regular assessments to track progress and ensure mastery.</h5> 
                <a href="includes/imaduincludes/payment.php"><button buy id="btn-buy">BUY</button></a>
            </div>
             <!--SILVER-->
             <div class="package" id="side1">
                <legend><h5>SILVER</h5></legend>
                <img src="images/silver.jpg" width="200px" height="200px">
                <h3>Rs. 15,000/- </h3>
                <p>Duration: 6 Months</p>
                <h3>Features:</h3>
                <h4>Budget-friendly option for thorough training experience.</h4>     
                <h5>Flexible timetable suited for a longer-term commitment.</h5>
                <h5>Full access to the online library for continuous learning.</h5>
                <h5>Engaging webinars and discussion forums to enhance learning.</h5>                
                <a href="includes/imaduincludes/payment.php"><button buy id="btn-buy">BUY</button></a>
            </div>
        </div>
    </div>
    
    <!-- Include footer -->
    <?php include('footer.php');?>
    
</body>
</html>