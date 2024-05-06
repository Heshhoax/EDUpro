function loadData(data)
{
    if(data == 'btn-buy1')
        {
            document.getElementById("para").innerHTML="COURSE 1     .Basic Programming Concepts:This course/module introduces fundamental concepts of programming, including variables, data types, control structures such as loops and conditionals, functions, and basic algorithms. Students will learn how to write simple programs in a chosen programming language.";
        }
    else if(data == 'btn-buy2')
        {
            document.getElementById("para").innerHTML="COURSE 2     .Creating Websites:This course/module covers the essentials of web development, focusing on HTML, CSS, and JavaScript. Students will learn how to create static web pages and enhance them with styling and interactivity. Additionally, they will be introduced to frameworks and libraries that aid in website development.";
        }
    else if(data == 'btn-buy3')
            {
                document.getElementById("para").innerHTML="COURSE 3     .Managing Databases:This course/module teaches the principles of database management, including database design, normalization, querying using SQL (Structured Query Language), and basic database administration tasks. Students will gain hands-on experience with popular database management systems like MySQL, PostgreSQL, or SQLite.";
            }  
    else if(data == 'btn-buy4')
                {
                    document.getElementById("para").innerHTML="COURSE 4     .Cybersecurity Skills:This course/module provides an overview of cybersecurity concepts and practices. Topics covered may include network security, cryptography, ethical hacking, threat detection and prevention, incident response, and security best practices. Students will learn how to identify and mitigate security risks to protect digital assets and information.";
                }  
    else{
        alert('Invalid');
    }    


}