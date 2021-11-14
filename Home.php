<?php
  session_start();
  if(isset($_SESSION['name']) == "")
  {
    header("location: login.html");
    exit;
  }
?>
<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <!--link css -->
  <link href="css/Home.css" rel="stylesheet" />
  <title>Home</title>
</head>

<body>
  <!--signup box container-->
  <div id="box">
    <!--right container-->
    <div class="main">
      <h1>Welcome,
        <?php echo $_SESSION['name']?>
      </h1>
      <div class="form-container">
        <a class="logout_btn" href="database/logout.php">Log out</a>
        <div class="container my-4">
          <table class="table" id="myTable">
            <thead>
              <tr>
                <td scope="col">1</td>
                <td scope="col">Find Factorial</td>
                <td scope="col"><a class="link" href="pages/factorial.html">Open</a></td>
              </tr>
              <tr>
                <td scope="col">2</td>
                <td scope="col">Check Leap Year</td>
                <td scope="col"><a class="link" href="pages/leapYear.html">Open</a></td>
              </tr>
              <tr>
                <td scope="col">3</td>
                <td scope="col">Play a Game</td>
                <td scope="col"><a class="link" href="pages/game.html">Open</a></td>
              </tr>
              <tr>
                <td scope="col">4</td>
                <td scope="col">Temperature Converter</td>
                <td scope="col"><a class="link" href="pages/temperature.html">Open</a></td>
              </tr>
              <tr>
                <td scope="col">5</td>
                <td scope="col">Even or Odd</td>
                <td scope="col"><a class="link" href="pages/evenOrOdd.html">Open</a></td>
              </tr>
            </thead>
            <tbody>      
        </div>
      </div>
    </div>
  </div>
</body>

</html>