<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Courses</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    <!--<script src='mainjava.js'></script>-->
</head>
<body>
    <!-- <div class="header">
          <hr>
          <header>
              <img src="images/edupro_black.png" width="150" height="60" >
          </header>
          <hr>
          </div>-->

     <?php include('header.php');?>
    
    <div class="packoff" id="side4">
            
        <h2>COURSES</h2>
         
         <div class="packagerow">
            <div class="packoff" id="side7">          
                 <img src="images/course1.jpg" width="200px" height="200px">
                 <p>"Basic Programming Concepts: Learn the fundamentals of programming languages and problem-solving techniques to teach beginners effectively."</p>
                 <button class="buy1" id="btn-buy1">Course 1</button>
            </div>
            <div class="packoff" id="side7">  
                 <img src="images/course2.jpg " width="200px" height="200px">
                 <p>"Creating Websites with HTML/CSS: Understand the basics of web development to teach students how to design and style web pages."</p>
                 <button class="buy1" id="btn-buy1">Course 2</button>
                 
            </div>
            <div class="packoff" id="side7">  
                 <img src="images/course3.jpg " width="200px" height="200px">
                 <p>"Managing Data with Databases: Explore the essentials of database management and SQL queries to help students organize and retrieve information efficiently."</p>
                 <button class="buy1" id="btn-buy1">Course 3</button>    
            </div>

            <div class="packoff" id="side7">  
                <img src="images/course4.jpeg " width="200px" height="200px">
                <p>"Essential Cybersecurity Skills: Gain insights into cybersecurity principles to guide students in understanding threats and implementing protective measures."</p>
                <button class="buy1" id="btn-buy1">Course 4</button>    
           </div>
         </div>

         <div class="container">
               <div class="pagination">
                    <button class="btn1" onclick="backBtn()"><img src="images/arrow.png">Previous</button>
                    <ul>
                         <li class="link active" value="1" onclick="activelink()">1</li>
                         <li class="link active" value="2" onclick="activelink()">2</li>
                         <li class="link active" value="3" onclick="activelink()">3</li>
                         <li class="link active" value="4" onclick="activelink()">4</li>
                         <li class="link active" value="5" onclick="activelink()">5</li>
                         <li class="link active" value="6" onclick="activelink()">6</li>
                    </ul>
                    <button class="btn2" onclick="nextbtn()">next<img src="images/arrow.png"></button>
               </div>
         </div>


     </div>
     <script>
          let link = document.getElementsByClassName("link");
          let currentValue = 1;

          function activeLink()
          {
               for(l of link){
                    l.classList.remove("active");
               }
               event.target.classList.add("active");
               currentValue = event.target.value;
          }

          function backBtn(){
                if(currentValue > 1){
                for(l of link){
                    l.classList.remove("active");
               }
               currentValue--;
               link[currentValue-1].classList.add("active");
               }
          }

          function nextBtn(){
           if(currentValue < 6){
               for(l of link){
               l.classList.remove("active");
               }
               currentValue++;
               link[currentValue-1].classList.add("active");
                }
          }
     </script>
     <?php include('footer.php');?>
</body>
</html>