<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Configure</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/BuildTest001.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <header class="header">
        <h1 class="header-title">Site.fr</h1>
        <nav class="nav">
          <ul class="nav-listContainer">
            <li class="nav-listItem"><a href="">bla</a></li>
            <li class="nav-listItem"><a href="">bla</a></li>
            <li class="nav-listItem"><a href="">bla</a></li>
            <li class="nav-listItem"><a href="">bla</a></li>
          </ul>
        </nav>
    </header>

    <div class="wrapper">
      <div class="left-player">
        <!-- mettre le truc de unity ici -->
        <div id="gameContainer" style="width: 100%; height: 620px;;">

        </div>
      </div>
      <div class="right-recap">

        <h2 class="recap-title">Récapitulatif:</h2>
        <!-- ici c'est chelou je touche pas wallah -->
        <p class="recap-item"><span class="recap-itemSpan">A retiré</span> c'est un test</p>
        <p class="recap-item"><span class="recap-itemSpan">A retiré</span> c'est un test</p>
        <p class="recap-item"><span class="recap-itemSpan">A retiré</span> c'est un test</p>
      </div>

    </div>
  </body>
</html>
