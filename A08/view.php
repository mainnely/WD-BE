<?php
include("connect.php");
include("classes.php");

$islandID = $_GET['id'];
$islandMemory = array();

$islandQuery = "SELECT *,islandcontents.image AS islandcontentimage FROM islandcontents LEFT JOIN islandsofpersonality 
ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID 
WHERE islandcontents.islandOfPersonalityID = '$islandID'";

$islandResult = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResult)) {
  $im = new islandcontents(
    $islandID,
    $islandRow["islandcontentimage"],
    $islandRow["content"],
    $islandRow["name"],
    $islandRow["longDescription"],
    $islandRow["color"]
  );
  array_push($islandMemory, $im);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
  body {
    font-family: 'Poppins', serif !important;
    font-weight: 400;
    font-style:normal
  }

  a {
    text-decoration: none;
  }

  .w3-display-container {
    background-image: url('img/cover2.png');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100vh;
  }

  .w3-cobalt {
    background-color: #1976D2;
    color: white;
  }

  .islandName {
  font-family: "Londrina Solid", sans-serif;
  font-weight: 400;
  font-style: normal;
  }
</style>

<body id="myPage">

  <!-- Navbar -->
  <?php include("shared/Nav.php") ?>

  <!-- Island Title -->
  <div class="container-fluid" style='background-image: linear-gradient(to bottom right, white, #<?php echo $im->color?>);'>
    <div class="row mt-4 py-5 text-center">
      <div class="display-1 islandName"><?php echo $im->islandName ?></div>
      <div class="h5 pt-4"><?php echo $im->longDesc ?></div>
    </div>
  </div>

  <!-- Island Image -->
  <div class="container-fluid mt-5">
    <?php foreach ($islandMemory as $im) {
      echo $im->buildMemory() ?>
    <?php } ?>
  </div>



  <!-- Footer -->
  <?php include("shared/Footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>