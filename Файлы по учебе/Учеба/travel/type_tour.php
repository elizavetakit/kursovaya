<?php require 'header.php'?>

   <main class="main_page">
       <div class="container">
            <section class="side_blocks_tour">
                <h1 class="side_blocks">Типы отдыха</h1>
                <div class="type_tour">
                    <div class="grid-element" onclick="location.href='Extreme_tours.php'"> <img class="image_type_tour" src="img/типы туров/экстримальный туризм.jpg" alt="extrim_tour">
                        <h1 class="grid-text-tour extrim_tour">Экстремальный <br> тур</h1>
                    </div>
                    <div class="grid-element" onclick="location.href='Premium_tours.php'"> <img class="image_type_tour" src="img/типы туров/Premium отдых.jpg" alt="Premium_tour"> 
                        <h1 class="grid-text-tour Premium_tour">Premium <br> отдых</h1>
                    </div>
                    <div class="grid-element" onclick="location.href='Economy_tour.php'"> <img class="image_type_tour" src="img/типы туров/экономичный отдых.jpg" alt="econom_tour"> 
                        <h1 class="grid-text-tour econom_tour">Экономичный <br> отдых</h1>
                    </div>
                    <div class="grid-element" onclick="location.href='Sightseeing_tours.php'"> <img class="image_type_tour" src="img/типы туров/экскурсионный тур.jpg" alt="excurs_tour"> 
                        <h1 class="grid-text-tour excurs_tour">Экскурсионный <br> тур</h1>
                    </div>
                    <div class="grid-element" onclick="location.href='family_tours.php'"> <img class="image_type_tour" src="img/типы туров/семейный отдых.jpg" alt="family_tour"> 
                        <h1 class="grid-text-tour family_tour">Семейный <br> отдых</h1>
                    </div>
                    <div class="grid-element" onclick="location.href='Ski_tours.php'"> <img class="image_type_tour" src="img/типы туров/горнолыжный курорт.jpg" alt="ski_resort_tour"> 
                        <h1 class="grid-text-tour ski_resort_tour">Горнолыжный <br> тур</h1>
                    </div>
                </div>
            </section> 
       </div>


<?php require 'application.php'?>
    
   </main>


<?php require 'footer.php'?>