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
            <h1 class="page-header ">Достижения</h1>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="lobster">Международные</h4>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="well well-sm">
                                <p class="lobster">2015</p> Обладатель Гран-При, Лауреат I, II степени, Дипломант I степени и обладатель специального приза жюри «За костюмы» фестиваля-конкурса в рамках Международного проекта «Сибирь зажигает звезды», г. Красноярск;</div>
                                <div class="well well-sm">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="lobster">Всероссийские</h4>
                                </a>
                              </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="well well-sm">
                                <p class="lobster">2015</p>Лауреат I, III степени XI Всероссийского конкурса детского и юношеского творчества «Москва-Байкальск транзит» г. Байкальск;</div>
                                <div class="well well-sm">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="lobster">Региональные, областные</h4>
                                </a>
                              </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="well well-sm">
                                <p class="lobster">2015</p>Лауреат I степени II областного конкурса «Ступеньки к успеху»;</div>
                                <div class="well well-sm">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="lobster">Городские</h4>
                                </a>
                              </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="well well-sm">
                                <p class="lobster">2015</p>Победитель конкурса концертных программ «Великая страна – Великая победа»;</div>
                                <div class="well well-sm">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>