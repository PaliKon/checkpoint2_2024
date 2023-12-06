<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produkty</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="style.css"  rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
  <div class="navbar">
    <div class="logo">
      <img src="obrazky/logo.jpg" width="125" alt="">
    </div>
    <nav>
      <ul>
        <li><a href="main.php">Domov</a></li>
        <li><a href="produkty.html">Produkty</a></li>
        <li><a href="Udaje.php">Udaje</a></li>
        <li><a href="ucet.html"><?php if (isset($_SESSION['username'])) { } else {echo "Prihlasit";} ?></a></li>
        <li><a href="logout.php"><?php if (isset($_SESSION['username'])) { echo "Odhlasit";} ?></a></li>
        <li><a  href="profil.php"><?php if (isset($_SESSION['username'])) { echo $_SESSION['username'];} ?></a></li>
        <img src="obrazky/profile.png" class="user-pic" onclick="toggleMenu()">
      </ul>
    </nav>
  </div>

</div>

<!-- kategorie -->

  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="obrazky/kategoria-tricka.jpg" alt="">

        </div>
        <div class="col-3">
          <img src="obrazky/kategoria-tyc.jpg" alt="">
        </div>
        <div class="col-3">
          <img src="obrazky/kategoria-pomocky.jpg" alt="">

        </div>
      </div>
    </div>

</div>
<!-- doporucene kategorie -->
<div class="small-container">
  <h2>Odporucane kategorie</h2>
  <div class="row">
    <div class="col-4">

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>