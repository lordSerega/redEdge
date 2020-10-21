<?php
$conn = new mysqli("localhost", "root", "", "rededge");
$result = $conn->query("SELECT * FROM `post` WHERE 1");
while($row = $result->fetch_assoc()) {
    $i++;
    $temp[] = $row;
    if($i % 3 == 0)
    {
        $news[] = $temp;
        $temp = [];
    }
}
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <title>Главная</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> </head>

    <body>
        <div class="container-fluid m-screen p-0 m-0">
            <div class="row p-0 m-0">
                <div class="col-xl-12 p-0 m-0 ">
                    <nav class="navbar navbar-expand-lg  navbar-light navig p-0 m-0">
                        <a class="navbar-brand order-1 mr-auto order-lg-0" href="#"><img src="img/logo.png" class="log" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <img src="img/burg.png" alt=""> </button>
                        <div class="order-2 mobile-contact">
                            <p class="text-right tel">8(863)243-15-10</p>
                            <p class="text-right city">Ростов-на-Дону</p>
                        </div>
                        <div class="collapse  navbar-collapse p-0 m-0" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto  navig">
                                <li class="nav-item"> <a class="nav-link" href="#">Услуги</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Портфолио</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Отзывы</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Вакансии</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Контакты</a> </li>
                            </ul>
                            <div class="contact">
                                <p class="text-right tel">8(863)243-15-10</p>
                                <p class="text-right city">Ростов-на-Дону</p>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container m-screen"> </div>
        <div class="container desc-nav">
            <div class="row pl-0 ">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg  navbar-light navig ">
                        <a class="navbar-brand order-1 mr-auto order-lg-0" href="#"><img src="img/logo.png" class="log" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse  navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto  navig">
                                <li class="nav-item"> <a class="nav-link" href="#">Услуги</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Портфолио</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Отзывы</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Вакансии</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Контакты</a> </li>
                            </ul>
                            <div class="bg-contact">
                                <p class="text-right tel">8(863)243-15-10</p>
                                <p class="text-right city">Ростов-на-Дону</p>
                            </div>
                            <div class="contact">
                                <p class="text-right tel">8(863)243-15-10</p>
                                <p class="text-right city">Ростов-на-Дону</p>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid banner">
            <div class="row">
                <div class="col-xl-12 ">
                    <div class="container description">
                        <h1>Рекламно-информационное <br> агентство</h1>
                        <p>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Номер телефона"> </div>
                            <button type="submit" class="btn btn-primary mb-2">Обратный звонок</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center news">Новости</h1> </div>
            </div>
        </div>
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="card-deck">
                                <div class="card card-red">
                                    <div class="card-body"> </div>
                                </div>
                                <div class="card">
                                    <div class="card-body"> </div>
                                </div>
                                <div class="card card-purp ">
                                    <div class="card-body"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo" class="carousel slide" data-interval="false">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <?php for($i = 0; $i < count($news); $i++)
            if($i == 0):
      ?>
                            <li data-target="#demo" data-slide-to="<?=$i;?>" class="active"></li>
                            <?php else: ?>
                                <li data-target="#demo" data-slide-to="<?=$i;?>"></li>
                                <?php endif; ?>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <?php for($i = 0; $i < count($news); $i++) { ?>
                            <?php if($i == 0) { ?>
                                <div class="carousel-item active">
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <?php } ?>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="card-deck">
                                                            <?php foreach($news[$i] as $value) { ?>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <p class="card-date">
                                                                            <?=$value['postDate'];?>
                                                                        </p>
                                                                        <h5 class="card-title"><?=$value['title'];?></h5>
                                                                        <button type="submit" class="btn btn-details">Подробнее</button>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <?php } ?>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteiner-fluid podval">
            <div class="row p-0 m-0">
                <div class="col-xl-2"> </div>
                <div class="col-xl-8">
                    <ul class="nav justify-content-center bmenu">
                        <li class="nav-item"> <a class="nav-link active" href="#">Услуги</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Портфолио</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Отзывы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Вакансии</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Контакты</a> </li>
                    </ul>
                </div>
                <div class="col-xl-2"> </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>

    </html>