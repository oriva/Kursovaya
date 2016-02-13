<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Макет сайта</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/common.css" rel="stylesheet">
          <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php include 'menu.php'; ?>
        </header>      
        <main>
           <div class="container">
               <div class="col-xs-4 well well-serv" onclick="document.location='/promo/service/statistika-vyzovov'">
                <div class="forh4">
                    <h4>Юбилей!</h4>
                </div>
                <p>Студия танца "Конопушки" приветствует всех в юбилейном танцевальном сезоне!
                    Нас ждет увлекательный, насыщенный, яркий, событийный учебный год!
                    Нам исполняется 15 лет!
                    Желаем всем трудолюбия, усердия, терпения, вдохновения, любви, счастья и здоровья, побед!
                    Вперед к юбилею, друзья!</p>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="row">

                </div>
            </div>
        </footer>    


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
