<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/assets/css/pages/main.css">
    <title>Главная</title>
</head>
<body>
    <div class="main-page">
        <section class="main-first-screen">
            <div class="blob-wrap">
                <div class="container container-relative">
                    <div class="blue-blob_animated uk-animation-slide-bottom-medium"></div>
                    <svg class="syrcle-grid uk-animation-slide-left-medium">
                        <use xlink:href="./../../public/assets/img/icon/cyrcle-border.svg#s"/>
                    </svg>
                    <svg use="../../../public/assets/img/icon/cyrcle-border.svg#s" class="syrcle-grid uk-animation-slide-left-medium"/>
                    <div class="syrcle-round uk-animation-slide-right-medium"></div>
                </div>
            </div>
            <div class="container container-relative">
                <img class="main-first-screen__image" src="../../../public/assets/img/content/first-screen-img.png" alt="" uk-parallax="start: 30vh; end: 30vh; y: 70; easing: 0;">
                <div class="main-first-screen__inner">
                    <h1 class="main-title">Большой спектр ветеренарных услуг</h1>
                </div>
            </div>
        </section>

        <section class="main-advantage">
            <div class="container container-relative">
                <div class="vet-card-list">
                    <div class="vet-card">
                        <img src="../../../public/assets/img/icon/main-pre-1.svg" class="vet-card__icon" alt=""/>
                        <div class="vet-card__title">Современное оборудование</div>
                        <div class="vet-card__text">В нашей клинике используется новейшее оборудование и только качетвенные медицинские препараты</div>
                    </div>
                    <div class="vet-card">
                        <img src="../../../public/assets/img/icon/main-pre-2.svg" class="vet-card__icon" alt=""/>
                        <div class="vet-card__title">Квалифицированные врачи</div>
                        <div class="vet-card__text">Все наши врачи имеют профессиональное высшее образование и большой стаж работы</div>
                    </div>
                    <div class="vet-card">
                        <img src="../../../public/assets/img/icon/main-pre-3.svg" class="vet-card__icon" alt=""/>
                        <div class="vet-card__title">Доступные цены</div>
                        <div class="vet-card__text">Мы стараемся делать наши достумными всем</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-contacts" id="contacts">
            <div class="container">
                <div class="main-contacts__inner">
                <iframe class="map-iframe" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa16d905dd007c8d2caf12c3c04ddec57d3f8caf2fa6ac99616796c6e555f2a20&amp;source=constructor" width="1060" height="615" frameborder="0"></iframe>
                    <div class="contacts-block">
                        <div class="contacts-block__title">Контакты</div>
                        <div class="contacts-block__list">
                            <div class="contacts-block__item">
                                <span uk-icon="icon: receiver"></span>
                                <span class="contacts-block__item-name">Телефон: </span>
                                <span>+ 7 (952) 700-79-67</span>
                            </div>
                            <div class="contacts-block__item">
                                <span uk-icon="icon: mail"></span>
                                <span class="contacts-block__item-name">Почта: </span>
                                <span>vetgrad39@info.ru</span>
                            </div>
                            <div class="contacts-block__item">
                                <span uk-icon="icon: location"></span>
                                <span class="contacts-block__item-name">Адреса клиник: </span>
                                <div class="d-flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <script type="module" src="../../../public/assets/js/index.js"></script>
</body>
</html>
