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
            <h1 class="page-header">Контакты</h1>
            <section class="col-sm-9">
                <h2>"АРТиШОК", школа танца</h2>
                <p>г. Иркутск, ул. Ломоносова, 72
                </p>
                <p><strong>тел.: (3952) 969-858</strong></p>
                <p>Электронная почта: <a href="mailto:Boss@artishok-irk.ru">Boss@artishok-irk.ru</a></p>
                <a class="dg-widget-link" href="http://2gis.ru/irkutsk/firm/70000001006417054/center/104.25962799999999,52.26657800000001/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Иркутска</a>
                <div class="dg-widget-link"><a href="http://2gis.ru/irkutsk/center/104.259628,52.266578/zoom/16/routeTab/rsType/bus/to/104.259628,52.266578╎АРТиШОК, центр танца?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до АРТиШОК, центр танца</a></div>
                <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                <script charset="utf-8">
                    new DGWidgetLoader({
                        "width": 640,
                        "height": 600,
                        "borderColor": "#a3a3a3",
                        "pos": {
                            "lat": 52.26657800000001,
                            "lon": 104.25962799999999,
                            "zoom": 16
                        },
                        "opt": {
                            "city": "irkutsk"
                        },
                        "org": [{
                            "id": "70000001006417054"
                        }]
                    });
                </script>
                <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </section>
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