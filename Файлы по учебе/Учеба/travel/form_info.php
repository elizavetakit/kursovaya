
 <div class="container">
<form class="booking-form-info" id="booking_form_info" method="post" action="db.php">
                <h3>Заполните форму личной информации (на каждого туриста)</h3>
                <div class="form1">
                    <div class="gender">
                        <p>Пол*</p>
                        <select name="pol" class="option-input" onkeyup="checkParams()" type="text">
                            <option value="s1">Мужской</option>
                            <option value="s2" selected>Женский</option>
                        </select>
                    </div>
                    <div class="Number-phone" >
                        <p>Номер телефона*</p>
                        <input type="text" name="phone" class="option-input" id="phone" required></input>
                    </div>
                    <div class="Mail">
                        <p>E-Mail*</p>
                        <input type="text" name="Mail" class="option-input" id = "email" required></input>
                    </div>
                    <div class="date_of_birth">
                        <p>Дата рождения*</p>
                        <input type="date" id="day" class="option-input" name="dr" required>
                    </div>
                </div>
                <div class="form2">
                    <div class="first_name">
                        <p>Имя*</p>
                        <input type="text" id="first_name" name="first_name" class="option-input" required></input>
                    </div>
                    <div class="last_name">
                        <p>Фамилия*</p>
                        <input type="text" id="last_name" name="last_name" class="option-input" required></input>
                    </div>
                    <div class="patronymic">
                        <p>Отчество*</p>
                        <input type="text" id="patronymic" name="patronymic" class="option-input" required></input>
                    </div>
                </div>
            </div>
            <div class="duplicate">
                <button class="button-duplicate" onclick="addInput()" id="add">+</button>
                <p>Добавить форму личной информации</p>
            </div>
            <div class="consent-section">
                <input class="radio_reviews" name="dzen" type="checkbox" value="" onclick="check()" autocomplete="off" id="checkbox" required>
                <p>Я даю согласие на <b onclick="show('block')">обработку персональных данных</b> для бронирования</p>
                <div id="filter" ></div>
                <div id="modalForm">
                    <span class="close" onclick="show('none')"></span>
                        <p>
                            Статья 14. Право субъекта персональных данных на доступ к своим персональным данным <br><br>
                                1. Субъект персональных данных имеет право на получение сведений об операторе, о месте его нахождения,
                                о наличии у оператора персональных данных, относящихся к соответствующему субъекту персональных данных,
                                а также на ознакомление с такими персональными данными, за исключением случаев, предусмотренных частью 5 настоящей статьи.
                                Субъект персональных данных вправе требовать от оператора уточнения своих персональных данных, их блокирования или уничтожения
                                в случае, если персональные данные являются неполными, устаревшими, недостоверными, незаконно полученными или не являются
                                необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав. <br>

                                2. Сведения о наличии персональных данных должны быть предоставлены субъекту персональных данных оператором в доступной форме,
                                и в них не должны содержаться персональные данные, относящиеся к другим субъектам персональных данных. <br>

                                3. Доступ к своим персональным данным предоставляется субъекту персональных данных или его законному представителю
                                оператором при обращении либо при получении запроса субъекта персональных данных или его законного представителя.
                                Запрос должен содержать номер основного документа, удостоверяющего личность субъекта персональных данных или его законного
                                представителя, сведения о дате выдачи указанного документа и выдавшем его органе и собственноручную подпись субъекта
                                персональных данных или его законного представителя. Запрос может быть направлен в электронной форме и подписан
                                электронной цифровой подписью в соответствии с законодательством Российской Федерации.<br>

                                4. Субъект персональных данных имеет право на получение при обращении
                                или при получении запроса информации, касающейся обработки его персональных данных, в том числе содержащей:<br><br>

                                1) подтверждение факта обработки персональных данных оператором, а также цель такой обработки;<br>
                                2) способы обработки персональных данных, применяемые оператором;<br>
                                3) сведения о лицах, которые имеют доступ к персональным данным или которым может быть предоставлен такой доступ;<br>
                                4) перечень обрабатываемых персональных данных и источник их получения;<br>
                                5) сроки обработки персональных данных, в том числе сроки их хранения;<br>
                                6) сведения о том, какие юридические последствия для субъекта персональных данных может повлечь за собой обработка <br>
                                его персональных данных.<br><br>

                                5. Право субъекта персональных данных на доступ к своим персональным данным ограничивается в случае, если:<br><br>

                                1) обработка персональных данных, в том числе персональных данных, полученных в результате оперативно-розыскной,
                                контрразведывательной и разведывательной деятельности, осуществляется в целях обороны страны, безопасности государства и
                                охраны правопорядка;<br>

                                2) обработка персональных данных осуществляется органами, осуществившими задержание субъекта персональных данных по
                                подозрению в совершении преступления, либо предъявившими субъекту персональных данных обвинение по уголовному делу,
                                либо применившими к субъекту персональных данных меру пресечения до предъявления обвинения, за исключением предусмотренных
                                уголовно-процессуальным законодательством Российской Федерации случаев, если допускается ознакомление подозреваемого или
                                обвиняемого с такими персональными данными;<br>

                                3) предоставление персональных данных нарушает конституционные права и свободы других лиц.<br><br>

                                Статья 15. Права субъектов персональных данных при обработке их персональных данных в целях продвижения товаров, работ,
                                услуг на рынке, а также в целях политической агитации<br><br>

                                1. Обработка персональных данных в целях продвижения товаров, работ, услуг на рынке путем осуществления прямых контактов с
                                потенциальным потребителем с помощью средств связи, а также в целях политической агитации допускается только при условии
                                предварительного согласия субъекта персональных данных. Указанная обработка персональных данных признается осуществляемой
                                без предварительного согласия субъекта персональных данных, если оператор не докажет, что такое согласие было получено.<br>

                                2. Оператор обязан немедленно прекратить по требованию субъекта персональных данных обработку его персональных данных,
                                указанную в части 1 настоящей статьи.<br><br>

                                Статья 16. Права субъектов персональных данных при принятии решений на основании исключительно автоматизированной
                                обработки их персональных данных<br>

                                1. Запрещается принятие на основании исключительно автоматизированной обработки персональных данных решений, порождающих
                                юридические последствия в отношении субъекта персональных данных или иным образом затрагивающих его права и законные
                                интересы, за исключением случаев, предусмотренных частью 2 настоящей статьи.<br>

                                2. Решение, порождающее юридические последствия в отношении субъекта персональных данных или иным образом затрагивающее
                                его права и законные интересы, может быть принято на основании исключительно автоматизированной обработки его персональных
                                данных только при наличии согласия в письменной форме субъекта персональных данных или в случаях, предусмотренных
                                федеральными законами, устанавливающими также меры по обеспечению соблюдения прав и законных интересов субъекта персональных
                                данных.<br>

                                3. Оператор обязан разъяснить субъекту персональных данных порядок принятия решения на основании исключительно
                                автоматизированной обработки его персональных данных и возможные юридические последствия такого решения, предоставить
                                возможность заявить возражение против такого решения, а также разъяснить порядок защиты субъектом персональных данных
                                своих прав и законных интересов.<br>

                                4. Оператор обязан рассмотреть возражение, указанное в части 3 настоящей статьи, в течение семи рабочих дней со дня
                                его получения и уведомить субъекта персональных данных о результатах рассмотрения такого возражения.<br>
                        </p>
                </div>
                <button name="submit" id="submit" onclick="btnFormClick();" class="booking-button">Забронировать
                </button>
                <p id="booking-finish">Бронирование прошло успешно, вам перезвонят</p>
                <h3 id="error">Не все обязательные поля заполнены</h3>
            </form>

    </div>
            