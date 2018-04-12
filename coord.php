<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pas ptdr</title>
    <link rel="stylesheet" href="css/coord.css">
  </head>
  <body>


  <header class="header">
        <h1 class="header-title">Site.fr</h1>
        <nav class="nav">
          <ul class="nav-listContainer">
            <li class="nav-listItem"><a class="nav-listLink" href="">Home</a></li>
            <li class="nav-listItem"><a class="nav-listLink" href="">About</a></li>
            <li class="nav-listItem"><a class="nav-listLink" href="">Kikoo</a></li>
            <li class="nav-listItem"><a class="nav-listLink" href="">Buy</a></li>
          </ul>
        </nav>
    </header>

    <div class="container">

        <div class="mini__container">

            <div class="total">
                Total: 449€
            </div>

            <div class="barre"></div>

            <div class="card">
                
                <p class="card__text">Indiquez les informations correspondant à votre carte</p>
                <img class="card__img" src="../img/visuel_CB.png" alt="Carte de credit">

            </div>

             <div class="numero">
                <label for="name" class="card__label">Numéro de la carte:</label>
                <input type="text" class="card__input border" placeholder="" id="name" maxlength="16" required>
                <img class="lock-2" src="../img/lock.png" alt="lock">

            </div>

            <div class="card__date">

                <div class="date">
                    Date d'expiration:
                </div>


        <div class="container__my">
            <div class="container__months">
                <select class="card__months border" id="card__months">
                    <option></option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
            </div>
           
            <div class="container__year">
                 <select class="card__year border" id="card__year">
                    <option></option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>
            </div>

        </div>
        
    </div>


         <div class="securite">
            <label class="cvv" for="card-ccv">Code de sécurité:</label>
            <input class="cvv__box border" type="text" id="card-ccv" maxlength="3" />
            <img class="lock" src="../img/lock.png" alt="lock">
         </div>

            <div class="condition">

                <div class="condition__radio-group">
                    <input type="radio" class="condition__radio-input" id="condi" name="size">
                    <label for="condi" class="condition__radio-label">
                    <span class="condition__radio-button"></span>
                         J'accepte les conditions de paiement.             
                    </label>
                </div>                
               
            </div>
        


        
        </div>


                <div class="btn__container">
                    <a class="btn__link link-blue" href="">Valider</a>
                </div>

    </div>







  </body>
</html>
