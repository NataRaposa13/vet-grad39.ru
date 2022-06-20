<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/assets/css/pages/doctor.css">
    <title></title>
</head>
<body>
    <!-- Хлебные крошки -->
    <div class="breadcramps">
        <span>...</span>
        <span>...</span>
        <span>...</span>
        <span>...</span>
        <span>...</span>
    </div>

    <!-- ИНФОРМАЦИЯ О ВРАЧЕ -->
    <div class="vet-doctor">
        <div class="container container-relative">
            <div class="vet-doctor__inner">
                <div class="vet-doctor__name">...ФИО...</div>
                <div class="vet-doctor__info">
                    <!--Поле информации-->
                    <div class="vet-doctor__info-item">
                        <div class="vet-doctor__info-title">Специальность</div>
                        <div class="vet-doctor__info-value">...специальность...</div>
                    </div>
                    <div class="vet-doctor__info-item">
                        <div class="vet-doctor__info-title">Стаж</div>
                        <div class="vet-doctor__info-value">...стаж... лет</div>
                    </div>

                    <!-- По аналогии можешь использовать дальше -->
                    <div class="vet-doctor__info-item">
                        <div class="vet-doctor__info-title">Любой заголовок</div>
                        <div class="vet-doctor__info-value">Любое значение</div>
                    </div>
                </div>

                <div class="vet-doctor__button">
                    <a href="...сcылка на форму..." class="">Записаться на прием</a>
                    <span>Запишитесь на прием к доктору в удобное для вас время</span>
                </div>

                <div class="vet-doctor__image"></div>
            </div>
        </div>
    </div>

    <!-- УСЛУГИ -->
    <div class="vet-doctor-services">
        <div class="container container-relative">
            <div class="vet-doctor-services__title">Услуги</div>
            <div class="vet-doctor-services__list">
                <!--Карточка услуги-->
                <div class="vet-doctor-services__item">
                    <div class="vet-doctor-services__item-name">...название услуги...</div>
                    <!--Отображать только в случае еслт они есть-->
                    <div class="vet-doctor-services__item-docs-link">Требуемые документы</div>
                    <div class="vet-doctor-services__item-docs-list">
                        <!--Список документов-->
                        <div class="vet-doctor-services__item-docs-item">...документ...</div>
                        <div class="vet-doctor-services__item-docs-item">...документ...</div>
                        <div class="vet-doctor-services__item-docs-item">...документ...</div>
                        <div class="vet-doctor-services__item-docs-item">...документ...</div>
                    </div>

                    <div class="vet-doctor-services__item-price">...цена услуги(хз надо или нет)...</div>
                    <a href="...сcылка на форму..." class="vet-doctor-services__item-button">Записаться</a>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="../../../public/assets/js/index.js"></script>
</body>
</html>
