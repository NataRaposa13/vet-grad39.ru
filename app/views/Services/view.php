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
<body>
<div class="vet-service-page">
	<div class="container">
		<div class="vet-service-page__inner">
			<h1 class="vet-service-page__title">
                <!-- TODO -->
			</h1>

			<div class="vet-service__list">
                <? if (!empty($services)): ?>
                    <? if $services['is_doctors']: ?>
                        <? foreach ($services as $service): ?>
                            <div class="vet-service__item">
                                <div class="vet-service__name">
                                    <?= $service['title'] ?>
                                </div>

                                <div class="vet-service__text">
                                    <?= $service['description'] ?>
                                </div>


                                <div class="vet-service__item-footer">
                                    <button type="button" class="btn btn-primary btn-sm btn-vet-button">Записаться</button>

                                    <? if (!empty($service['cost'])): ?>
                                        <div class="vet-service__price">
                                            <?= $service['cost'] ?> руб.
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    <? else: ?>
                        <!-- TODO -->
                        <? foreach ($doctor as $services): ?>
                            <div class="vet-service__item">
                                <div class="vet-service__name">
                                    <?= $service['title'] ?>
                                </div>

                                <div class="vet-service__text">
                                    <?= $service['description'] ?>
                                </div>


                                <div class="vet-service__item-footer">
                                    <button type="button" class="btn btn-primary btn-sm btn-vet-button">Записаться</button>

                                    <? if (!empty($services['cost'])): ?>
                                        <div class="vet-service__price">
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
</div>
</body>
</html>

