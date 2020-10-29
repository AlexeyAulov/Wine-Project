<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS and style sheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>Lab 1c! </title>
    </head>
        <header>
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

// For Loop Demonstration

echo "Using a for Loop  <br> <br>";

$fruits=array("dates","elderberries","apple","cucumber","bannana");

for($x=0;$x<=4;$x++)
{
    echo "Fruit: ".$fruits[$x]."<br>";
}


echo "<br><br>";

//Foreach() loop demonstration

echo "using a foreach() loop <br><br>";



foreach ($fruits as $loopdata)
{

echo "Fruit:  ".$loopdata."<br>";

}

echo "<br><br>";


//assort function demostration

echo"The asort() function makes it easier to place items from least\n 
to greatest with swapping the index's of the array";

echo "using a asort() with fruits array <br><br>";


arsort($fruits);
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$val\n <br><br>";
}


//multidimensional array definition and using one

echo"This table shows what is stored in an multidimensional array. A 
multidimentional array is an array with another array in it's index,
the index is pointed to by a key! <br> <br>";

$users=array(
    1 => array("user1"=>"password"),
    2 => array("user2"=>"password2"),
    "3" => array("user3"=>"passsword3"),
    array("user4"=>"password4"),
);

echo"<br><br>";

//table to show the the data with a table and a foreach() function

echo "<table border ='1' width ='500' cellspacing='0'>";
echo "<tr>";
echo "<td>Username</td>";
echo "<td>password</td>";
echo"</tr>";
foreach($users as $key => $user)
{

foreach($user as $username => $password)
{
echo "<tr>";  
echo "<td>$username</td>";
echo "<td>$password</td>";
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
                        <a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1b.php" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1a.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1b.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabOne/lab1c.php">3</a></li>
                        <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
    
    
    
                
    
    </body>
</html>