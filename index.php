<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navig.css">

    <title>Basic Banking System</title>
  </head>

  <!-- Backgroung Image -->
  <body>
    <img src="images/home.jpg" class="bg" />

  <?php
  include 'navig.php';
  ?>
  
      <div class="container-fluid" >
      <!-- Introduction section -->
            <div class="heading">
                <div class="heading text-center hhead" style="background-color: #2a97d2">
                  <h3>Welcome to</h3>
                  <h1>THE SPARKS BANK</h1>
                </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="row-md act">
                    <br>
                    <a href="newuser.php"><button>Create a New User</button></a>
                  </div>
                  <div class="row-md act">
                    <br>
                    <a href="transfer.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="row-md act">
                    <br>
                    <a href="transaction.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      </div>
  </body>
</html>