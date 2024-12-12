<?php
include('connect.php');
include('classes.php');

$quarters = array();

$getIslandQuery = "SELECT * FROM islandsofpersonality";
$getIslandResult = executeQuery($getIslandQuery);

while ($getIslandRow = mysqli_fetch_assoc($getIslandResult)) {
  $q = new personalityIsland(
    $getIslandRow['name'],
    $getIslandRow['shortDescription'],
    $getIslandRow['longDescription'],
    $getIslandRow['image'],
    $getIslandRow['islandOfPersonalityID']
  );

  array_push($quarters, $q);
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Island of Personalities </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="Logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<style>
  body {
    font-family: 'Poppins', serif !important;
    font-weight: 400;
    font-style: normal;
  }

  a {
    text-decoration: none;
    color:black;
  }

  .w3-display-container {
    background-image: url('img/cover2.png');
    background-size: cover;
    background-position: center;
    max-width: 100%;
    height: auto;
  }

  .w3-cobalt {
    background-color: #1976D2;
    color: white;
  }

  h2 {
    font-family: "Londrina Solid", sans-serif;
    font-weight: 500;
    font-style: normal;
    font-size: 72px;
  }
</style>

<body id="myPage">

  <!-- Navbar -->
  <?php include("shared/Nav.php") ?>

  <!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity">
    <img src="img/cover1.png" class="img-fluid mt-4" alt="boat" style="width: 100%; height: auto;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">
      <button onclick="document.getElementById('id01').style.display='block'"
        class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">Who is Jermaine?</button>
    </div>
  </div>


  <!-- Modal -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-cobalt w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4 class="p-4" style="background-color: purple; color: aliceblue;">Get to know Jermaine...</h4>
      <div class="w3-container">
        <p>Third-year BSIT student from Polytechnic University of the Philippines. <br>
          I'm 20 years old - May 14, 2004 <br>
          I sought refuge in the serenity of bed rotting.
        </p>
        <p>Go to <a class="w3-text-teal" href="mainnely.github.io">mainnely.github.io</a> to explore my page!</p>
      </div>
    </div>
  </div>

  <!-- Team Container -->
  <div class="w3-container py-5 w3-center" id="island">
    <h2>Islands of Personalities</h2>
    <p class="pt-2 pb-1">Explore Jermaine's personalities through this interactive website.</p>

    <div class="w3-row py-5">
      <?php foreach ($quarters as $quarter) { ?>
        <?php echo $quarter->buildIsland() ?>
      <?php } ?>
    </div>
  </div>

  <!-- Footer -->
  <?php include("shared/Footer.php") ?>

  <script>

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>