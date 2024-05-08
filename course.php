<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Courses</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    <script src='injava.js'></script>
</head>
<body>
     <?php 
     include 'heade.php';
     ?>
    
    <div class="packoff" id="side4">
            
        <h2>COURSES</h2>
         
         <div class="packagerow">
            <div class="packoff" id="side7">          
                 <img src="images/course1.jpg" width="200px" height="200px">
                 <p>"Basic Programming Concepts: Learn the fundamentals of programming languages and problem-solving techniques to teach beginners effectively."</p>
                 <button class="buy1" id="btn-buy1" onclick="loadData('btn-buy1')">Course 1</button>
            </div>
            <div class="packoff" id="side7">  
                 <img src="images/course2.jpg " width="200px" height="200px">
                 <p>"Creating Websites with HTML/CSS: Understand the basics of web development to teach students how to design and style web pages."</p>
                 <button class="buy1" id="btn-buy2"onclick="loadData('btn-buy2')">Course 2</button>
                 
            </div>
            <div class="packoff" id="side7">  
                 <img src="images/course3.jpg " width="200px" height="200px">
                 <p>"Managing Data with Databases: Explore the essentials of database management and SQL queries to help students organize and retrieve information efficiently."</p>
                 <button class="buy1" id="btn-buy3" onclick="loadData('btn-buy3')">Course 3</button>    
            </div>

            <div class="packoff" id="side7">  
                <img src="images/course4.jpeg " width="200px" height="200px">
                <p>"Essential Cybersecurity Skills: Gain insights into cybersecurity principles to guide students in understanding threats and implementing protective measures."</p>
                <button class="buy1" id="btn-buy4" onclick="loadData('btn-buy4')">Course 4</button>    
           </div>
           <div id="para"></div>
         </div>
     <?php include('footer.php');?>
</body>
</html>