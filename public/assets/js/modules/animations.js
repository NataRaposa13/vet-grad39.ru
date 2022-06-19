export default class Animations {
    static init(opts) {
        return new Animations(opts);
    }

    constructor(opts) {
        this.opts = opts;

        this.bindEvents();
    }

    bindEvents() {
        const $logo = $('.logo');

        $logo.on('mouseenter', () => {
            // TODO pashtet: может сделать этот код универсальным и не привязываться к лого
            $('[logo-hover-animate]').addClass('logo-hovered');
        });

        $logo.on('mouseleave', () => {
            $('[logo-hover-animate]').removeClass('logo-hovered');
        });
    }
}
