import header from './modules/header.js';
import animations from './modules/animations.js';

header.init();
animations.init();



const headerTimeout = setInterval(() => {
    const isEcommerce = !!$('body').find('.is_ecommerce')[0];

    if (isEcommerce) {
        clearInterval(headerTimeout);
        header.setType('market');
    }
}, 100);

setTimeout(() => {
    clearInterval(headerTimeout);
}, 60000);
