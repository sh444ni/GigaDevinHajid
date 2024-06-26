<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW Store Home</title>
    <link rel="stylesheet" href="./css/s_index.css">
    <link rel="stylesheet" href="./css/s_sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php 
include './header.php';
?>
    <div class="container">

        <section class="one">
            <div class="gallery">
                <figure class="gallery-card">
                    <img src="./css/home1.jpg" alt="">
                  </figure>
                  <figure class="gallery-card">
                    <img src="./css/home2.jpg" alt="">
                  </figure>
                  <figure class="gallery-card">
                    <img src="./css/home3.jpg" alt="">
                  </figure>
                  <figure class="gallery-card">
                    <img src="./css/home4.jpg" alt="">
                  </figure>     
              </div>
        </section>

        <section class="two">

            <div class="judul">
                <h1>Our Products</h1>
            </div>

            <div class="card-menu">
                <div class="card">
                <a class="warna" href="./champ.php">
                    <img src="./img/champ2.jpg" alt="">
                    <div class="intro">
                        <h1>'21-'22 Champs</h1>
                        <p>Check Out Our T-Shirts!</p>
                    </div>
                    </a>
                </div>
                <div class="card">
                    <a class="warna" href="./jersey.php">
                    <img src="./img/curry_association.jpg" alt="">
                    <div class="intro">
                        <h1>Jerseys</h1>
                        <p>Check Out Our Jerseys</p>
                    </div>
                    </a>
                </div>
                <div class="card">
                    <a class="warna" href="./by_player.php">
                    <img src="./img/mina1.jpg" alt="">
                    <div class="intro">
                        <h1>Shop By Player</h1>
                        <p>MinaMinaMinaMinaMina</p> 
                    </div>
                    </a>
                </div> 
        </section>
        
        <section class="three">
            <div class="judul">
                <h1>2023-'24 Roster</h1>
            </div>
            <div class="roster-container">
              <a href="./by_player.html">
                <div class="roster-card">
                  <img src="./img/starting_curry.jpg" alt="">
                  <h4>Stephen Curry</h4>
                  <div>
                      <p>Point Guard</p>
                  </div>
              </div>
              </a>
              <a href="./by_player.html">
                <div class="roster-card">
                  <img src="./img/starting_klay.jpg" alt="">
                  <h4>Klay Thompson</h4>
                  <div>
                      <p>Shooting Guard</p>
                  </div>
              </div>
              </a>
                <div class="roster-card">
                    <img src="./img/starting_wiggins.jpg" alt="">
                    <h4>Andrew Wiggins</h4>
                    <div>
                        <p>Small Foward</p>
                    </div>
                </div>
                <div class="roster-card">
                    <img src="./img/starting_kuminga.jpg" alt="">
                    <h4>Jonathan Kuminga</h4>
                    <div>
                        <p>Power Foward</p>
                    </div>
                </div>
                <div class="roster-card">
                    <img src="./img/dray.jpg" alt="">
                    <h4>Draymond Green</h4>
                    <div>
                        <p>Center</p>
                    </div>
                </div>
            </div>
        </section>    
    </div>
    
</body>
<?php 
include './footer.php';
?>
</html>
