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
            <h1 class="page-header ">Расписание</h1>
            <h4 class="lobster">Ансамбль</h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              ПЕДАГОГИ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p><strong>Классический танец:</strong> Анчугова Марина Васильевна</p>
                            <p><strong>Концертмейстер:</strong> Ершова Галина Борисовна</p>
                            <p><strong>Постановщик - репетитор:</strong> Чарушина Елена Николаевна</p>
                            <p><strong>Педагог – репетитор:</strong> Мельничук Анастасия Сергеевна</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            ГРУППЫ И ВОЗРАСТ ДЕТЕЙ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>А1 14-17 лет</p>
                            <p>А2 11-13 лет</p>
                            <p>А3 8-10 лет</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            МЕСТО ЗАНЯТИЙ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>клуб «Геофизик», школа № 80</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseRasp">
                            РАСПИСАНИЕ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseRasp" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <p>Время</p>
                                    </td>
                                    <td>
                                        <p>Понедельник</p>
                                    </td>
                                    <td>
                                        <p>Вторник</p>
                                    </td>
                                    <td>
                                        <p>Среда</p>
                                    </td>
                                    <td>
                                        <p>Четверг</p>
                                    </td>
                                    <td>
                                        <p>Пятница</p>
                                    </td>
                                    <td>
                                        <p>Суббота</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        8:30 – 10:00
                                    </td>
                                    <td>
                                        А3 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А3 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А3 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td rowspan="2">
                                        Занятия в школе № 80
                                        <br /> по дополнительному расписанию
                                        <br /> с 15:00 до 21:00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10:00 – 11:30
                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        14:30 – 16:00
                                    </td>
                                    <td>
                                        А3 (I смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А3 (I смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А3 (I смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        16:00 – 17:30
                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А2 (II смена)
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        17:30 – 21:00
                                    </td>
                                    <td>
                                        А1
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А1
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        А1
                                        <br /> классика, танец
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 class="lobster">Подготовительные группы</h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              ПЕДАГОГ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Гапшите Елена Павловна</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                            ГРУППЫ, ВОЗРАСТ ДЕТЕЙ, ГОД ОБУЧЕНИЯ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>М1 3 – 4 года, первый год обучения</p>
                            <p>М2 6 – 7 лет, третий год обучения</p>
                            <p>М3 4 – 5 лет, второй год обучения</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                            МЕСТО ЗАНЯТИЙ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>клуб «Геофизик»</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseRaspTwo">
                            РАСПИСАНИЕ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseRaspTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <p>Группа</p>
                                    </td>
                                    <td>
                                        <p>Понедельник</p>
                                    </td>
                                    <td>
                                        <p>Вторник</p>
                                    </td>
                                    <td>
                                        <p>Среда</p>
                                    </td>
                                    <td>
                                        <p>Четверг</p>
                                    </td>
                                    <td>
                                        <p>Пятница</p>
                                    </td>
                                    <td>
                                        <p>Суббота</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        М1
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        18:00-18:30
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        18:00-18:30
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        М2
                                    </td>
                                    <td>
                                        19:00-19:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        19:00-19:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        14:00-14:50
                                        <br /> школа № 80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        М3
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        20:00-20:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        20:00-20:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        10:00-10:45
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 class="lobster">Подготовительные группы</h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                              ПЕДАГОГ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Сердюк Юлия Евгеньевна</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                            ГРУППЫ, ВОЗРАСТ ДЕТЕЙ, ГОД ОБУЧЕНИЯ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>М4 3 –4 года, первый год обучения</p>
                            <p>М5 5 – 6 лет, первый год обучения</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                              МЕСТО ЗАНЯТИЙ:
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>клуб «Геофизик»</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseRaspThree">
                            РАСПИСАНИЕ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseRaspThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <p>Группа</p>
                                    </td>
                                    <td>
                                        <p>Понедельник</p>
                                    </td>
                                    <td>
                                        <p>Вторник</p>
                                    </td>
                                    <td>
                                        <p>Среда</p>
                                    </td>
                                    <td>
                                        <p>Четверг</p>
                                    </td>
                                    <td>
                                        <p>Пятница</p>
                                    </td>
                                    <td>
                                        <p>Суббота</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        М4
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        19:00-19:30
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        19:00-19:30
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        М5
                                    </td>
                                    <td>
                                        20:00-20:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        20:00-20:45
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        11:00-11:45
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 class="lobster">Подготовительные группы</h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                              ПЕДАГОГ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Мельничук Анастасия Сергеевна</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                            ГРУППЫ, ВОЗРАСТ ДЕТЕЙ, ГОД ОБУЧЕНИЯ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Д4 4 – 5 лет</p>
                            <p>Ш1 5 -6 лет</p>
                            <p>Ш2 7 - 9 лет</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                              МЕСТО ЗАНЯТИЙ:
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>школа №80, актовый зал</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseRaspFour">
                            РАСПИСАНИЕ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseRaspFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <p>Группа</p>
                                    </td>
                                    <td>
                                        <p>Понедельник</p>
                                    </td>
                                    <td>
                                        <p>Вторник</p>
                                    </td>
                                    <td>
                                        <p>Среда</p>
                                    </td>
                                    <td>
                                        <p>Четверг</p>
                                    </td>
                                    <td>
                                        <p>Пятница</p>
                                    </td>
                                    <td>
                                        <p>Суббота</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ш1
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        18:00-18:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        18:00-18:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        12:00-12:50
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Д4
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        19:00-19:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        19:00-19:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        11:00-11:50
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ш2
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        20:00-20:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        20:00-20:50
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        13:00-13:50
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 class="lobster">Подготовительные группы</h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                              ПЕДАГОГ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Мельничук Анастасия Сергеевна</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                            ГРУППЫ, ВОЗРАСТ ДЕТЕЙ, ГОД ОБУЧЕНИЯ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Ш3 9 - 11 лет</p>
                            <p>Ш4 11 – 14 лет</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                              МЕСТО ЗАНЯТИЙ:
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>клуб «Геофизик», школа №80, актовый зал</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseRaspFive">
                            РАСПИСАНИЕ:
                          </a>
                        </h4>
                    </div>
                    <div id="collapseRaspFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <p>Группа</p>
                                    </td>
                                    <td>
                                        <p>Понедельник</p>
                                    </td>
                                    <td>
                                        <p>Вторник</p>
                                    </td>
                                    <td>
                                        <p>Среда</p>
                                    </td>
                                    <td>
                                        <p>Четверг</p>
                                    </td>
                                    <td>
                                        <p>Пятница</p>
                                    </td>
                                    <td>
                                        <p>Суббота</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ш3
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        9:00-9:50
                                        <br /> 15:00-15:50
                                        <br /> (по сменам)
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        9:00-9:50
                                        <br /> 15:00-15:50
                                        <br /> (по сменам)
                                    </td>
                                    <td>
                                        18:30-19:20
                                        <br /> (все вместе в
                                        <br /> школе №80)
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ш4
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        10:00-10:50
                                        <br /> 16:00-16:50
                                        <br /> (по сменам)
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        10:00-10:50
                                        <br /> 16:00-16:50
                                        <br /> (по сменам)
                                    </td>
                                    <td>
                                        19:30-20:20
                                        <br /> (все вместе в
                                        <br /> школе №80)
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
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