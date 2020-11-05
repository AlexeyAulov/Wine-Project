<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link  rel="stylesheet" href="../CSS/Cool.css">
    <title>Checkout Page</title>
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../All_Pages/HM.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../All_Pages/CG.php">Catalog <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../All_Pages/CT.php">Cart</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="../All_Pages/AU.php">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="../All_Pages/LISU.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sign up</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Log in</a>
          <a class="dropdown-item" href="#">Sign out</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
  </header>
          
        <form method="post" class="needs-validation" novalidate>
            <div class="container m-auto">
                <h3 class="text-center text-dark ">Where should we send your order?</h3>
                <h4 class="text-dark text-center">Enter your name and address</h4>
            <div class="form-row" >
              <div class="col-md-4 mb-3 ">
                <label for="validationCustom01">First Name</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3 ">
                <label for="validationCustom02">Last Name</label>
                <input type="text" class="form-control" id="validationCustom02"  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3 ">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>New York</option>
                  <option>New Jersey</option>
                  <option>Pensilvania</option>
                  <option>Connecticut</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip Code</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder=""required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Country/Region</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="United States">
              </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email and phone number with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputTel1">Phone Number</label>
                <input type="number" class="form-control" id="tel">
              </div>
             
             
        <div class="row ml-5">
              <div class="form-check m-auto">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
        
            <div class="form-check m-auto">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                  Remember me
                </label>
              </div>
            </div>
            <div class=" text-center mt-3">
                <button class="btn btn-primary" type="submit">Continue to payment</button>
                </div>
        </div>
    </div>
           
        

          
         

        </form>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>