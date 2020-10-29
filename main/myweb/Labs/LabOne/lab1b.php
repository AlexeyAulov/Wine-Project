<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS and style sheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        
        <title>Lab 1b! </title>
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
            
         
           
               
            <?php

           //for loop and if function to display a table of two columns and $x amount of rows

            echo "<table border ='1' width ='500' cellspacing='0'>";
                    echo "<tr>";
                    echo "<td>Numbers</td>";
                    echo "<td>Results</td>";
                    echo "</tr>";

                   //if and elseif function to differentiate the odd and even
                   
                    $y=0;
                    $result;
                    for($x=0;$x<=100;$x++)
                    {
                            if($x%2==0)
                        {
                            $y=$x;
                            $result="even";
                            
                            
                            //inputing data into the chart

                            echo "<tr>";
                            echo "<td>$y</td>";
                            echo "<td>$result</td>";
                            echo "</tr>";    
                        
                        
                        } 
                            elseif($x%2==1)
                            { 
                                $y=$x;
                                $result="odd";
                                
                                //inputing data into the chart
                                
                                echo "<tr>";
                                echo "<td>$y</td>";
                                echo "<td>$result</td>";
                                echo "</tr>";
                            
                            
                            }
                    }
                echo "</table>";
            
            
            
                
            
            
        ?>

               
               
               
                     <div class="alert alert-secondary" role="alert">
                        <strong>Pg 1,2,3 is equal to lab 1a,1b,1c!</strong>
                     </div> 
               
                <!--Page selector-->
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item ">
                        <a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1a.php" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1a.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1b.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1c.php">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1c.php">Next</a>
                        </li>
                    </ul>
                </nav>
    
    
    
    
    
    </body>
</html>