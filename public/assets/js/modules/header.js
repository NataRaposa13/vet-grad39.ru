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

    static setType(type) {
        if (type === 'market') {
            $('.header-blob-wrap').css('opacity', 0);
            $('.vet-header .top-blue-blob').addClass('top-light-orange-blob');
            $('.vet-header .logo img').attr('src', '../../../public/assets/img/icon/logo-market.svg');
            $('.vet-header').addClass('market');
            $('.market-nav-item').addClass('active');
        }
        else {
            $('.header-blob-wrap').show();
            $('.vet-header .logo img').attr('src', '../../../public/assets/img/icon/logo.svg');
        };
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
