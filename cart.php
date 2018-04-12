<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>cart</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
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

  <div class="cart-container">
    <a class="cart-pay cart-payUp" href="pay.php">Passer la commande</a>
    <div class="cart-listContainer">
      <div class="cart-itemsDescrition cart-item">
        <p class="cart-reference cart-item">Ref.</p>
        <p class="cart-productName cart-item">Nom du produit</p>
        <p class="cart-price cart-item">Prix</p>
        <p class="cart-quantity cart-item">Quantité</p>
        <p class="cart-delete cart-item">Supprimer</p>
      </div>
      <div class="cart-itemsContainer cart-item">
        <p class="cart-reference cart-item">000000</p>
        <p class="cart-productName cart-item">Partie de drone</p>
        <p class="cart-price cart-item">0.00€</p>
        <p class="cart-quantity cart-item">0</p>
        <img class="cart-delete cart-cross" src="assets/img/cross.png" alt="delete from cart">
      </div>
    </div>
    <a class="cart-pay cart-payDown" href="pay.php">Passer la commande</a>
  </div>
</body>

</html>
