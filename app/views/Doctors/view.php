<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/assets/css/pages/specialization.css">

    <title>Врачи</title>
</head>
<body>
    <section class="vet-doctors vet-doctors-page">
        <div class="container">
            <div class="vet-card-page__inner">
                <h1 class="vet-card-page__title">Врачи</h1>

                <div class="vet-card__list">
                    <? if (!empty($doctors)): ?>
                        <? foreach ($doctors as $doctor): ?>
							<div class="vet-card__item column pointer align-center">
								<div class="vet-card__img">
									<img src="../../../public/assets/img/doctors/<?= $doctor['id'] ?>.png" alt="<?= $doctor['name'] ?>">
								</div>

								<div class="vet-card__name">
									<?= $doctor['name'] ?>
								</div>

								<div class="vet-card__text">
									<?= join(", ", $doctor['specialities']) ?>
								</div>

								<div class="vet-card__item-footer">
									<button type="button" class="btn btn-primary btn-m btn-vet-button">Записаться на прием</button>
								</div>
							</div>
                        <? endforeach; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
