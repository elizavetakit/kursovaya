<?php require 'header.php'?>


   <main class="main_page">
        <div class="container">
            <h1 class="title-block">Бронирование</h1>
            <div class="booking-tour">
                <h3>Ваш тур</h3>
                <div class="card_tour">
                    <img class="image_tour" src="img\туры\россия\байкал.jpg" alt="байкал">
                    <div class="text_tour text">
                        <p class="text"> <b>Город:</b> Улан-Удэ</p>
                        <div class="hotel">
                            <p class="text"> <b>Гостиница:</b> Байкал Плаза</p>
                            <div class="text" class="rating">
                                <img class="image_rating" src="img/иконки/рейтинг.svg" alt="рейтинг">
                                <img class="image_rating" src="img/иконки/рейтинг.svg" alt="рейтинг">
                                <img class="image_rating" src="img/иконки/рейтинг.svg" alt="рейтинг">
                                <img class="image_rating" src="img/иконки/рейтинг.svg" alt="рейтинг">
                                <img class="image_rating" src="img/иконки/рейтинг.svg" alt="рейтинг">
                            </div>
                        </div>
                        <p class="text"> <b>Вид:</b> Экскурсионный тур</p>
                        <p class="text"> <b>Авиакомпания:</b> Аэрофлот</p>
                        <div class="text extensions text">
                            <p class="extensions_tour">Wi-Fi</p>
                            <p class="extensions_tour">Питание</p>
                            <p class="extensions_tour">Экскурсии</p>
                        </div>
                            <h1 class="price">от 30000 ₽ </h1>
                    </div>
                </div>
            </div>
            <div class="booking-form">
                <h3>Заполните форму бронирования</h3>
                <div class="form1">
                    <div class="policy">
                        <p>Страховка*</p>
                        <select name="policy" class="option-policy" id="policy">
                            <option value="350" onchange="calc()" id="count1">Страховка горнолыжная - 350₽</option>
                            <option value="550" selected onchange="calc()" id="count2">Страховка медецинска - 550₽</option>
                            <option value="450" onchange="calc()" id="count3">Страховка спортивная - 450₽</option>
                        </select>
                    </div>
                    <div class="transfer">
                        <p>Трансфер*</p>
                        <select name="transfer" class="option-policy" id="transfer">
                            <option value="1890" onchange="calc()" id="count4" selected>Групповой трансфер (GDS)(Трансфер в Оба Конца) - 1890₽</option>
                            <option value="1950" onchange="calc()" id="count5"> Индивидуальный трансфер автомобиль 1-3 чел(Трансфер в Оба Конца) - 1950₽</option>
                            <option value="3050" onchange="calc()" id="count6">Индивидуальный трансфер минивэн 1-6 чел.(Трансфер в Оба Конца) - 3050₽</option>
                            <option value="5969" onchange="calc()" id="count7">Индивидуальный трансфер микроавтобус Спринтер 1-17 чел.(Трансфер в Оба Конца) - 5969₽</option>
                        </select>
                    </div>
                    <div class="Number-room">
                        <p>Номер*</p>
                        <select name="Number-room" class="option-policy" id="Number_room">
                            <option value="4000" onchange="calc()" id="count8">Стандарт - 4000₽</option>
                            <option value="13000" onchange="calc()" selected id="count9">Комфорт - 13000₽</option>
                            <option value="20000" onchange="calc()" id="count10">Premium - 20000₽</option>
                        </select>
                    </div>
                </div>
                <div class="form2">
                    <div class="Tourists" id="Tourists">
                        <p>Количество туристов*</p>
                        <input name="policy" class="option-input" onchange="calc()" id="count11" type="number"></input>
                    </div>
                    <div class="Data">
                        <p>Дата вылета:*</p>
                        <input type="date" class="option-policy" onchange="calc()" id="Data">
                    </div>
                    <div class="Data-e">
                        <p>Дата возвращения:*</p>
                        <input type="date" class="option-policy" onchange="calc()" id="Data2">
                    </div>
                    <div class="Air">
                        <p>Перелет*</p>
                        <select name="Air" class="option-policy" id="Air">
                            <option value="9000" onchange="calc()" id="Air_class">Эконом-класс - 9000₽</option>
                            <option value="14000" onchange="calc()" id="Air_class">Premium-класс - 14000₽</option>
                        </select>
                    </div>
                    <h1 class=" title-block price-booking" id="price_booking"></h1>
                </div>
            </div>
<?php require 'form_info.php'?>
        </div>

    </div>

<?php require 'application.php'?>

    </main>


<?php require 'footer.php'?>