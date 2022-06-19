<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../../public/assets/css/pages/specialization.css">

    <!-- TODO -->
	<title></title>
</head>
<body uk-parallax="bgy: -140">
    <section class="vet-services vet-card-page">
        <div class="container">
            <div class="vet-card-page__inner">
                <h1 class="vet-card-page__title"></h1>

                <div class="vet-card__list">
                    <? if (!empty($services)): ?>
                        <? if ($isDoctors): ?>
                            <? foreach ($services as $doctor): ?>
                                <? if ($doctor['id']): ?>
                                    <div class="vet-card__item">
                                        <img src="../../../public/assets/img/spetiality/<?= $doctor['id'] ?>.svg" alt="" class="vet-card__item-icon">
                                        <div class="vet-card__item-inner">
                                            <div class="vet-card__name">
                                                <?= $doctor['title'] ?>
                                            </div>

                                            <div class="vet-card__text">
                                                <?= $doctor['description'] ?>
                                            </div>

                                            <div class="vet-card__item-footer">
                                                <button type="button" class="btn btn-primary btn-sm btn-vet-button">Записаться</button>

                                                <? if (!empty($doctor['cost'])): ?>
                                                    <div class="vet-card__price">
                                                        <?= $doctor['cost'] ?> руб.
                                                    </div>
                                                <? endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <? endif; ?>
                            <? endforeach; ?>
                        <? else: ?>
                            <? foreach ($services as $service): ?>
                                <div class="vet-card__item">
                                    <div class="vet-card__name">
                                        <?= $service['title'] ?>
                                    </div>

                                    <div class="vet-card__text">
                                        <?= $service['description'] ?>
                                    </div>


                                    <div class="vet-card__item-footer">
                                        <button type="button" class="btn btn-primary btn-sm btn-vet-button">Записаться</button>

                                        <? if (!empty($service['cost'])): ?>
                                            <div class="vet-card__price">
                                                <?= $service['cost'] ?> руб.
                                            </div>
                                        <? endif; ?>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        <? endif; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="../../../public/assets/js/index.js"></script>
</body>
</html>

