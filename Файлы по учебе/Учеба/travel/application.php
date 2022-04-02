
 <div class="application" >
        <div class="text-application">
            <h1 class="title-application">Оставьте заявку на подбор тура</h1>
            <p class="text-application">Если вы не можете выбрать подходящий тур, то мы вам в этом поможем</p>
        </div>
        <form method="post" class="application-input" action="db.php">
            <input type="text" name="telefon" id = "tel" class="input-application" placeholder="Телефон" required>
            <button type="sub" name="btn" onclick="btnClick();" class="button_application" id="btnClick">Отправить</button>
        </form>
        <p id="application_info" class="app">Заявка отправлена</p>
        <h3 id="error-application">Заполните форму</h3>
</div>