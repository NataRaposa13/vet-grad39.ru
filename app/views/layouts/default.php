<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300;400;700&family=Comfortaa:wght@300;400;700&family=Jura:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/common.css">
    <link rel="stylesheet" href="../../../public/assets/css/modules/header.css">
    <link type="image/x-icon" href="../../../public/assets/img/icon/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="../../../public/assets/img/icon/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<?= $this->getMeta(); ?>
</head>
<body>
    <div class="blob-wrap header-blob-wrap">
        <div class="container container-relative">
            <div class="top-orange-blob uk-animation-slide-top-medium" logo-hover-animate="true"></div>
            <div class="top-blue-blob uk-animation-slide-top-small" logo-hover-animate="true"></div>
        </div>
    </div>

    <header class="vet-header vet-header_main">
        <div class="blob-wrap">
            <div class="uk-container container-relative">
                <div class="top-blue-blob" logo-hover-animate="true"></div>
            </div>
        </div>
        <div class="uk-container container-relative">
            <div class="vet-header-inner">
                <a href="<?= PATH ?>" class="logo">
                    <img src="../../../public/assets/img/icon/logo.svg" alt="">
                </a>
                <div class="vet-navbar">
                    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar="mode: click">
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav">
								<? if (!empty($serviceTypes)): ?>
									<li>
										<a href="#">Услуги <span uk-icon="icon: chevron-down; ratio: 0.7"></span></a>
										<div class="uk-navbar-dropdown" uk-drop>
											<ul class="uk-nav uk-navbar-dropdown-nav">
												<? foreach ($serviceTypes as $serviceType): ?>
													<li><a href="/services/<?= $serviceType['alias']; ?>"><?= $serviceType['title']; ?></a></li>
												<? endforeach; ?>
											</ul>
										</div>
									</li>
								<? endif; ?>
                                <!-- TODO -->
                                <li><a href="/doctors">Врачи</a></li>
                                <li class="market-nav-item"><a href="#">Магазин</a></li>
                                <li><a href="/#contacts">Контакты</a></li>
                                <div class="uk-divider-vertical"></div>
                                <li>
                                    <a class="vet-profile-link" href="https://flexbe.ru/">
                                        <img src="../../../public/assets/img/icon/base-profile.png" alt="">
                                    </a>
                                    <div class="uk-navbar-dropdown" uk-drop="pos: bottom-right">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#"><span uk-icon="icon: sign-in"></span>Войти</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

	<?= $content; ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script defer type="module" src="../../../public/assets/js/libs/index.js"></script>
</body>
</html>
