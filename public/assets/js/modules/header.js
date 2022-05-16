export default class Header {
    static init(opts) {
        return new Header(opts);
    }

    constructor(opts) {
        this.opts = opts;
        this.$header = $('.vet-header');

        this.bindEvents();
        this.checkFilled();
    }

    bindEvents() {
        $(document).on('scroll', () => {
            this.checkFilled({ afterScroll: true });
        });
    }

    checkFilled({ afterScroll = false } = {}) {
        const needBanTransition = !afterScroll;
        let transitionValue = this.$header.css('transition');

        // Блокируем анимацию
        if (needBanTransition) {
            this.$header.css('transition', 'none');

            setTimeout(() => {
                this.$header.css('transition', transitionValue);
            }, 200);
        }

        this.$header.toggleClass('filled', $('html').scrollTop() > 80);
    }
}
