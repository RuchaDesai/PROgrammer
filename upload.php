
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
  <h1>UPLOAD THOUGHTS</h1>
  <p>Where People Would Listen!</p> 
  <p></p> 
</div>

  <br> <br>
<div class="form-group shadow-textarea">
  <label for="exampleFormControlTextarea6"></label>
  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="WRITE YOUR THOUGHT HERE"></textarea>
</div>

<br><br>
<br> <br> <br>

  <?php include "../includes/footer.php" ?>
  <?php include "../loginForm/loginForm.php" ?>

</body>
</html>










