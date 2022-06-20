<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/assets/css/pages/ecommerce.css">
    <title></title>
</head>
<body>
    <section class="vet-market is_ecommerce">
        <div class="container">
            <div class="vet-market__inner">
                <div class="vet-market__title">
                    Корма для кошек

                    <div class="product-count">20 товаров</div>
                </div>

                <div class="vet-market__products vet-card__list cols-3">
                    <? foreach ([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15] as $product): ?>
                        <div class="vet-card__item column pointer align-center">
                            <div class="vet-card__img">
                                <img src="../../../public/assets/img/products/cat-corn/<?= $product ?>.png" alt="<?= $product ?>">
                            </div>

                            <div class="vet-card__name">
                                Ownat
                            </div>

                            <div class="vet-card__text">
                                Сухой корм для кошек с курицей
                                и рисом
                            </div>

                            <div class="vet-card__item-footer">
                                <button type="button" class="btn btn-primary btn-lg btn-vet-button">Купить</button>
                                <div class="vet-card__price">
                                    1999 руб.
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
