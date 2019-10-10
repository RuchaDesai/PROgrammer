<!DOCTYPE html>
<html>
<head>
  <title>Quote's Website</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="style.css" rel="stylesheet" />
    <link href="../loginForm/loginStyle.css" rel="stylesheet" />


</head>

<body>
<?php include "../includes/sessionStarting.php" ?>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
           
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-logo" href="#">
          <img src="../img/logo.png" width="70" height="50">
        </a>

      </div>


<?php include "../includes/header_links.php" ?>

  </div>
  </nav>

<br> <br> <br>


<div class="jumbotron text-center" >
  <h1>ABOUT US</h1>
  <p>Aspire To Aspire!</p> 
  <p></p> 
</div>

  <br> <br>

  <div class="container">
    <div class="row">

       <div class="col-sm-3 info">
        <h3 class="minihead"><br>A Galore Of Quotes<br><br></h3>
        <p class="yellowStyle">To serve our users with some of the best & inspiring quotes and also to provide them  significant information about some profilic authors which have faded away with time.        <br> <br>  <br>
        </p>

       </div>

       <div class="col-sm-1"></div>


      <div class="col-sm-3 info">
        <h3 class="minihead"><br>User friendly attractive interface<br><br></h3>
        <p class="yellowStyle">We provide a secure and free interface for uou to browse quotes of your choice.<br>
        We believe access to the spoken word gives us a unique glimpse into the historic, political and cultural history of the world we share.</p>
      </div>

       <div class="col-sm-1"></div>

      <div class="col-sm-4 info">
        <h3 class="minihead"><br>Share your thoughts<br><br></h3>      
        <p class="yellowStyle">Lorem ipsum dolor sit amet, consectetur adipisicing elit...
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<br><br><br><br><br><br><br><br></p>
      </div>
    </div>
  </div>

<br><br>

<!-- Section: form gradient -->


<!-- </section>
<!-- Section: form gradient -->
<!-- Section: form dark -->
<section class="form-dark mb-5">

  <!--Form without header-->

    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

      <!--Header-->
      <div class="text-center">
        <h3 class="white-text mb-5 mt-4 font-weight-bold text-uppercase"><strong>Contact</strong> <a class="green-text font-weight-bold"><strong>
              Us</strong></a></h3>
      </div>

      <div class="md-form">
        <input type="text" id="form100" class="form-control">
        <label for="form100">Your name</label>
      </div>

      <div class="md-form">
        <input type="text" id="form101" class="form-control">
        <label for="form101">Your email</label>
      </div>

      <div class="md-form">
        <input type="text" id="form102" class="form-control">
        <label for="form102">Subject</label>
      </div>

      <div class="md-form">
        <textarea id="form103" class="md-textarea form-control" rows="5"></textarea>
        <label for="form103">Your message</label>
      </div>

      <!--Grid row-->
      <div class="row d-flex align-items-center">

        <!--Grid column-->
        <div class="text-center col-md-12 mt-3 mb-2">
          <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Send</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

    </div>
  </div>
  

</section>
<!-- Section: form dark -->
<br> <br> <br>

  <?php include "../includes/footer.php" ?>
  <?php include "../loginForm/loginForm.php" ?>

</body>
</html>







