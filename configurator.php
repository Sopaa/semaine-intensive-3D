<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Configure</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="TemplateData/style.css">
  <script src="assets/TemplateData/UnityProgress.js"></script>
  <script src="assets/Build/UnityLoader.js"></script>
  <script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "assets/Build/BuildTest02.json", {onProgress: UnityProgress});
  </script>
</head>

<body>
  <header class="header">
    <h1 class="header-title">Site.fr</h1>
    <nav class="nav">
      <ul class="nav-listContainer">
        <li class="nav-listItem"><a href="index.php">Acceuil</a></li>
        <li class="nav-listItem"><a href="">Drones</a></li>
        <li class="nav-listItem"><a href="">Contact</a></li>
        <li class="nav-listItem"><a href="cart.php"><img class="header-cart" src="assets/img/cart.png" alt="cart"></a></li>
      </ul>
    </nav>
  </header>

  <div class="wrapper">
    <div class="left-player">
      <div id="gameContainer" style="width: 95%; height: 580px;">

      </div>
    </div>
    <div class="right-recap">

      <h2 class="recap-title">Récapitulatif:</h2>

      <a class="recap-button" href="cart.php">Ajouter au panier</a>
    </div>

  </div>
</body>

</html>
