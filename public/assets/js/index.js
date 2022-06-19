import header from './modules/header.js';
import animations from './modules/animations.js';

header.init();
animations.init();

console.log('dsds')

const checkMap = setInterval(() => {
    const $map = $('body').find('.map-iframe');
    console.log('sdsds')

    if ($map[0]) {
        clearInterval(checkMap);

        $map.width($(window).width());

        $(window).on('resize', () => {
            $map.width($(window).width());
        });
    }
}, 500);

setTimeout(() => {
    clearInterval(checkMap);
}, 10000);
