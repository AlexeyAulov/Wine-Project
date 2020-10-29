<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS and style sheet -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        


        <title>Lab 1a!</title>
    </head>
        <header>
           
           <!--Navbar using bootstrap-->
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="http://localhost/main/myweb/AlexPort/Alex'sPortfolio.php">Alex's Projects</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/Alex'sPortfolio.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/LabFront.php">Labs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/FinalProject.php">Final Project</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost/main/myweb/AlexPort/AboutMe.php">About Me</a>
                </li>
                </li>
                </ul>
            </div>
            </nav>
        </header>  
  
    <body>
            
            
            <div id="list-example" class="list-group ">
               
               <!--List group for different sections of the website-->
               
                <a class="list-group-item list-group-item-action" href="#list-item-1"><b>Intro to PHP</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-2"><b>Programs to Install</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-3"><b>Creating a PHP File</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-4"><b>Running a PHP File</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-5"><b>Basic Syntax</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-6"><b>Variables</b></a>
             
            
                    

                <!-- Definitions for each section-->

                <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                <p class="list-item"id="list-item-1">PHP stands for Hypertext Preprocessor, PHP works with web servers to run the script request
                which then comes back to the user to see the scripts run.
                </p>
                <br>
                <p class="list-item"id="list-item-2">PHP is usually ran after installing it on https://www.php.net/
                and installing XAMPP sever and running apache.</p>
                <br>
                <p class="list-item"id="list-item-3">Once installing the programs you can create a file into this path
                C:\xampp\htdocs and create a index.php file.</p>
                <br>
                <p class="list-item" id="list-item-4">After creating a PHP file in the directory you can run XAMPP and start the apache programs
                on the XAMPP server. After the process is done you can click on Google Chrome or FireFox and type in localhost/ and the path as well
                as the PHP File.</p>
                <br>
                <p class="list-item" id="list-item-5">
                Basic Syntax: .php is a file extension,&lt ?php and ? &gt is used as the outside, echo is used for printing out statements,
                var_dump($var) print information about the variable with the details about the variable content,print_r($var)-print out information about the variable.
                </p>
                <br>
                <p class="list-item" id="list-item-6">To declare variables you use a $ sign before the variable name
                ex:$First_var="Hello_World"; PHP is also case sensitive with variabele calling as well. Needs to start with
                letter of underscore(_).</p>
                <br>
            </div>
            <div class="alert alert-secondary" role="alert">
                    <strong>Pg 1,2,3 is equal to lab 1a,1b,1c!</strong>
            </div>
                
                
                <!--Page selector-->
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1a.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1b.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1c.php">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1b.php">Next</a>
                        </li>
                    </ul>
                </nav>
    
    
    
    
    
    </body>
</html>