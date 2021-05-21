<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
  crossorigin="anonymous">

  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style.css">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: ARIAL;
    }

    a:link {
      color: black;
    }

    a:hover {
      color: black;
      text-decoration: none;
    }

    h5 {
      color: black
    }
  </style>
</head>

<body>
  <nav>
    <div class="container-fluid nav-wrapper #000000 black darken-3 z-depth-7">
      <a href="index.php" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php"></a></li>
        <li><a href="./php/transfermoney.php">VIEW CUSTOMERS </a></li>
        <li><a href="./php/transactionhistory.php"> TRANSACTION DETAIL </a></li>
      </ul>
    </div>
  </nav>

  <!--heading / title -->
  <div class="center head mt-0">
    <h2><b><span><img src="data:image/png;base64,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" style="height:70px;width:60px" /></span> TSF BANK </b></h2>
  </div>

  <!---3 col start-->
  <div class="">


      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img src="https://c8.alamy.com/comp/H9NF86/colorful-square-blank-background-vector-design-concept-H9NF86.jpg">
            </div>
 <button onclick="location.href='./php/transfermoney.php'" style="color:blue" class="waves-effect waves-light #ffffff white accent-5 btn-large"><b>Transfer</b><i class="material-icons right">add_circle</i></button>
            <br />

          </div>
        </div>
      </div>
    </div>
 

    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img src="https://thumbs.dreamstime.com/z/online-banking-businessman-holding-tablet-computer-dark-background-collage-financial-pictograms-panorama-concept-178079853.jpg">
            </div>
            <button type="button" onclick="location.href='./php/transactionhistory.php'" style="color:blue" class="waves-effect waves-light #ffffff white accent-4 btn-large"><b> 
Transactions</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->

  </div>
  <!--sectio-->
  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>