<!DOCTYPE html>
<html lang="en-US">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="profile" href="//gmpg.org/xfn/11">
<link rel="pingback" href="https://demo.ovatheme.com/aovis/xmlrpc.php">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>{{ $title }}</title>
<meta name='robots' content='noindex, nofollow' />
<link rel='dns-prefetch' href='//demo.ovatheme.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml"
    title="Aovis - Film &amp; Movie Booking WordPress Theme &raquo; Feed"
    href="https://demo.ovatheme.com/aovis/feed/" />
<link rel="alternate" type="application/rss+xml"
    title="Aovis - Film &amp; Movie Booking WordPress Theme &raquo; Comments Feed"
    href="https://demo.ovatheme.com/aovis/comments/feed/" />
<script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/demo.ovatheme.com\/aovis\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
</script>
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='wp-block-library-css'
    href='https://demo.ovatheme.com/aovis/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-active-filters-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/active-filters.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-add-to-cart-form-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/add-to-cart-form.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-packages-style-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/packages-style.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-all-products-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-products.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-all-reviews-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-reviews.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-attribute-filter-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/attribute-filter.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-breadcrumbs-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/breadcrumbs.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-catalog-sorting-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/catalog-sorting.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-customer-account-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/customer-account.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-featured-category-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-category.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-featured-product-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-product.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-mini-cart-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-price-filter-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/price-filter.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-add-to-cart-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-add-to-cart.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-button-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-button.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-categories-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-categories.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-image-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-image-gallery-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image-gallery.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-query-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-query.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-results-count-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-results-count.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-reviews-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-reviews.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-sale-badge-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sale-badge.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-search-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-search.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-sku-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sku.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-stock-indicator-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-stock-indicator.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-summary-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-summary.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-title-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-title.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-rating-filter-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/rating-filter.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-reviews-by-category-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-category.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-reviews-by-product-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-product.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-details-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-details.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-single-product-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/single-product.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-stock-filter-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stock-filter.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-cart-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/cart.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-checkout-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/checkout.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-mini-cart-contents-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart-contents.css?ver=10.6.6'
    type='text/css' media='all' />
<style type="text/css">
    body {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: normal;
        font-size: 14px;
    }

    #amy-site-nav .sub-menu .menu-item a {
        font-family: "Roboto Condensed";
        font-weight: 700;
        font-size: 15px;
    }

    h1 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 36px;
    }

    h2 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 30px;
    }

    h3 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 24px;
    }

    h4 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 18px;
    }

    h5 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 14px;
    }

    .amy-site-footer {
        background-color: #606060;
    }

    #amy-page-header {
        background-image: url(http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_50.jpg);
    }
</style>
</head>

<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link {
    color: #fff;
    background-color: #32373c;
    border-radius: 9999px;
    box-shadow: none;
    text-decoration: none;
    padding: calc(.667em + 2px) calc(1.333em + 2px);
    font-size: 1.125em
}

.wp-block-file__button {
    background: #32373c;
    color: #fff;
    text-decoration: none
}
</style>
<style id='global-styles-inline-css' type='text/css'>
body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
    --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
    --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
    --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
}

:where(.is-layout-flex) {
    gap: 0.5em;
}

:where(.is-layout-grid) {
    gap: 0.5em;
}

body .is-layout-flow>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-flow>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-flow>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-constrained>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-constrained>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: var(--wp--style--global--content-size);
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignwide {
    max-width: var(--wp--style--global--wide-size);
}

body .is-layout-flex {
    display: flex;
}

body .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
}

body .is-layout-flex>* {
    margin: 0;
}

body .is-layout-grid {
    display: grid;
}

body .is-layout-grid>* {
    margin: 0;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
}

:where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
}

.has-black-color {
    color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-color {
    color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
}

.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
}

.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
}

.has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
}

.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
}

.has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
}

.has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
}

.has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
}

.has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
}

.has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
}

.has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
}

.has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
}

.has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
}

.has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
}

.has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
}

.has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
}

.wp-block-navigation a:where(:not(.wp-element-button)) {
    color: inherit;
}

:where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
}

.wp-block-pullquote {
    font-size: 1.5em;
    line-height: 1.6;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8'
type='text/css' media='all' />
<link rel='stylesheet' id='mb_frontend-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/movie-booking/assets/css/frontend/style.css?ver=6.3.1'
type='text/css' media='all' />
<link rel='stylesheet' id='event-frontend-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/ova-events/assets/css/frontend/event.css' type='text/css'
media='all' />
<style id='event-frontend-inline-css' type='text/css'>
#sidebar-event .widget_feature_event .event-feature .item .date-event .date,
.single_event .content-event .tab-Location ul.event_nav li.event_nav-item.active:after,
.single_event .content-event .tab-Location ul.event_nav li.event_nav-item a:after,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .date-event .date,
#sidebar-event .widget ul li a:hover:before,
.type1 .desc .event_post .button_event .view_detail:hover,
.type2 .desc .event_post .button_event .view_detail:hover,
#sidebar-event .widget_feature_event .event-feature .item .desc .event_post .button_event .view_detail:hover,
#sidebar-event .widget_list_event .button-all-event a:hover,
.single_event .content-event .event_intro .wrap-event-info .wrap-booking-links a:hover .single_event .content-event .ova-next-pre-post .pre:hover .num-1 .icon,
.single_event .content-event .ova-next-pre-post .next:hover .num-1 .icon,
.single_event .content-event .ova-next-pre-post .pre:hover .num-1 .icon,
.single_event .content-event .ova-next-pre-post .next:hover .num-1 .icon,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .desc .event_post .button_event .view_detail:hover,
.single_event .content-event .event_intro .wrap-event-info .wrap-booking-links a:hover,
.ovaev-event-element.ovaev-event-slide .owl-nav button:hover,
.ovapo_project_slide .grid .owl-nav button:hover,
.search_archive_event form .wrap-ovaev_submit .ovaev_submit,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .date-event .date,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .desc .event_post .button_event .view_detail:hover,
.blog_pagination .pagination li.active a,
.blog_pagination .pagination li a:hover,
.blog_pagination .pagination li a:focus,
.ovaev-event-element.ovaev-event-slide .owl-dots .owl-dot.active span,
.ovapo_project_grid .btn_grid .btn_grid_event:hover,
.events_pagination .page-numbers li span,
.events_pagination .page-numbers li a:hover,
.ovaev-wrapper-search-ajax .search-ajax-pagination ul li .page-numbers.current,
.ovaev-wrapper-search-ajax .search-ajax-pagination ul li .page-numbers:hover {
    background-color: #d96c2c;
}

.type1 .desc .event_post .button_event .view_detail:hover,
.type2 .desc .event_post .button_event .view_detail:hover,
#sidebar-event .widget_feature_event .event-feature .item .desc .event_post .button_event .view_detail:hover,
#sidebar-event .widget_list_event .button-all-event a:hover,
.single_event .content-event .event_intro .wrap-event-info .wrap-booking-links a:hover,
.single_event .content-event .ova-next-pre-post .pre:hover .num-1 .icon,
.single_event .content-event .ova-next-pre-post .next:hover .num-1 .icon,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .desc .event_post .button_event .view_detail:hover,
.search_archive_event form .wrap-ovaev_submit .ovaev_submit,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .desc .event_post .button_event .view_detail:hover,
.blog_pagination .pagination li.active a,
.blog_pagination .pagination li a:hover,
.blog_pagination .pagination li a:focus,
.ovapo_project_grid .btn_grid .btn_grid_event:hover,
.events_pagination .page-numbers li a:hover,
.events_pagination .page-numbers li span,
.ovaev-wrapper-search-ajax .search-ajax-pagination ul li .page-numbers.current,
.ovaev-wrapper-search-ajax .search-ajax-pagination ul li .page-numbers:hover,
.ovaev-booking-btn a:hover {
    border-color: #d96c2c;
}

.type1 .date-event .month-year,
.type1 .desc .event_post .post_cat .event_type,
.type1 .desc .event_post .event_title a:hover,
.icon_event,
.type2 .date-event .month-year,
.type2 .desc .event_post .post_cat .event_type,
.type2 .desc .event_post .event_title a:hover,
#sidebar-event .widget_feature_event .event-feature .item .date-event .month-year,
#sidebar-event .widget_feature_event .event-feature .item .desc .event_post .post_cat .event_type,
#sidebar-event .widget_feature_event .event-feature .item .desc .event_post .event_title a:hover,
#sidebar-event .widget_list_event .list-event .item-event .ova-content .title a:hover,
#sidebar-event .widget ul li:hover a,
#sidebar-event .widget ul li:hover,
.single_event .content-event .event_intro .wrap-event-info .wrap-info .wrap-pro i,
.single_event .content-event .event_intro .wrap-event-info .wrap-info .ovaev-category i,
.single_event .content-event .ova-next-pre-post .pre .num-2 .title:hover,
.single_event .content-event .ova-next-pre-post .next .num-2 .title:hover,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .date-event .month-year,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .desc .event_post .post_cat .event_type,
.single_event .content-event .event-related .archive_event .ovaev-content.content-grid .desc .event_post .event_title a:hover,
.single_event .content-event .event_tags_share .event-tags a:hover,
#sidebar-event .widget .tagcloud a:hover,
.ovapo_project_grid .button-filter button.active,
.ovapo_project_grid .button-filter button:hover,
.more_date_text,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .date-event .month-year,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .desc .event_post .event_title a:hover,
.ovaev-event-element.version_2 .wp-content .ovaev-content.content-grid .desc .event_post .time-event .time .more_date_text span,
.ovaev-event-element.version_2 .title-readmore .read-more,
.ovaev-event-element .item .title a:hover,
.single_event .content-event .event_intro .wrap-event-info .ovaev-category a:hover,
#sidebar-event .widget_list_event .list-event .item-event .ova-content .time .more_date_text span,
.ovaev-shortcode-title a:hover,
.ovaev-shortcode-date i,
.ovaev-shortcode-time i,
.ovaev-shortcode-location i,
.ovaev-shortcode-categories i,
.ovaev-shortcode-categories span.event-category a:hover,
.ovaev-shortcode-tags .ovaev-tag:hover {
    color: #d96c2c;
}

#sidebar-event .widget .widget-title {
    border-bottom-color: #d96c2c;
}

.ovapo_project_grid .wrap_loader .loader circle,
.ovaev-wrapper-search-ajax .ovaev-search-ajax-container .wrap_loader .loader circle {
    stroke: #d96c2c;
}
</style>
<link rel='stylesheet' id='woocommerce-layout-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.0.3'
type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.0.3'
type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.0.3'
type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required {
    visibility: visible;
}
</style>
<link rel='stylesheet' id='aovis-style-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis/style.css?ver=1.0.1' type='text/css'
media='all' />
<style id='aovis-style-inline-css' type='text/css'>
:root {
    --primary: #d96c2c;
    --heading: #000000;
    --text: #737373;
    --light: #E0E0E0;
    --primary-font: Space Grotesk;
    --font-size: 16px;
    --line-height: 1.86em;
    --letter-spacing: 0px;
    --secondary-font: Space Grotesk;
    --width-sidebar: 370px;
    --main-content: calc(100% - 370px);
    --container-width: 1190px;
    --boxed-offset: 20px;
    --woo-layout: layout_1c;
    --woo-width-sidebar: 320px;
    --woo-main-content: calc(100% - 320px);
}

@media (min-width: 1024px) and (max-width: 1250px) {

    body .row_site,
    body .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 100%;
        padding-left: 30px;
        padding-right: 30px;
    }
}
</style>
<link rel='stylesheet' id='child-style-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis-child/style.css?ver=1.0.0' type='text/css'
media='all' />
<link rel='stylesheet' id='ova-google-fonts-css'
href='//fonts.googleapis.com/css?family=Space+Grotesk%3A300%2Cregular%2C500%2C600%2C700%7CSpace+Grotesk%3A300%2Cregular%2C500%2C600%2C700'
type='text/css' media='all' />
<link rel='stylesheet' id='carousel-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis/assets/libs/carousel/assets/owl.carousel.min.css'
type='text/css' media='all' />
<link rel='stylesheet' id='ovaicon-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis/assets/libs/ovaicon/font/ovaicon.css'
type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-aovis-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis/assets/libs/flaticon/font/flaticon_aovis.css'
type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.21.0'
type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.15.3'
type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-6 {
    --e-global-color-primary: #6EC1E4;
    --e-global-color-secondary: #54595F;
    --e-global-color-text: #7A7A7A;
    --e-global-color-accent: #61CE70;
    --e-global-typography-primary-font-family: "Roboto";
    --e-global-typography-primary-font-weight: 600;
    --e-global-typography-secondary-font-family: "Roboto Slab";
    --e-global-typography-secondary-font-weight: 400;
    --e-global-typography-text-font-family: "Roboto";
    --e-global-typography-text-font-weight: 400;
    --e-global-typography-accent-font-family: "Roboto";
    --e-global-typography-accent-font-weight: 500;
}

.elementor-section.elementor-section-boxed>.elementor-container {
    max-width: 1140px;
}

.e-con {
    --container-max-width: 1140px;
}

.elementor-widget:not(:last-child) {
    margin-bottom: 20px;
}

.elementor-element {
    --widgets-spacing: 20px;
}

    {}

h1.entry-title {
    display: var(--page-title-display);
}

@media(max-width:1024px) {
    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1024px;
    }

    .e-con {
        --container-max-width: 1024px;
    }
}

@media(max-width:767px) {
    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 767px;
    }

    .e-con {
        --container-max-width: 767px;
    }
}

.elementor-38 .elementor-element.elementor-element-34407b9>.elementor-container {
    max-width: 790px;
}

.elementor-38 .elementor-element.elementor-element-34407b9 {
    margin-top: -10px;
    margin-bottom: 0px;
    padding: 0px 0px 65px 0px;
}

.elementor-38 .elementor-element.elementor-element-49147d5 .ova-heading {
    text-align: center;
}

.elementor-38 .elementor-element.elementor-element-49147d5>.elementor-widget-container {
    margin: 0px 0px 30px 0px;
}

.elementor-38 .elementor-element.elementor-element-3e5e475>.elementor-background-overlay {
    background-image: url("https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-map-contact-page.jpg");
    background-position: 0px 87px;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.1;
    mix-blend-mode: luminosity;
}

.elementor-38 .elementor-element.elementor-element-3e5e475 {
    padding: 0px 0px 110px 0px;
}

.elementor-38 .elementor-element.elementor-element-12ef2eb .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-12ef2eb .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-762c11c .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-762c11c .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-c24b6f6 .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-c24b6f6 .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-10af393 iframe {
    height: 463px;
    filter: brightness(100%) contrast(100%) saturate(0%) blur(0px) hue-rotate(0deg);
}

@media(max-width:1024px) {
    .elementor-38 .elementor-element.elementor-element-34407b9 {
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 10px 0px 20px 0px;
    }

    .elementor-38 .elementor-element.elementor-element-3e5e475>.elementor-background-overlay {
        background-position: top center;
        background-size: 0px auto;
    }

    .elementor-38 .elementor-element.elementor-element-3e5e475 {
        padding: 0px 0px 65px 0px;
    }

    .elementor-38 .elementor-element.elementor-element-10af393 iframe {
        height: 350px;
    }
}

@media(max-width:767px) {
    .elementor-38 .elementor-element.elementor-element-10af393 iframe {
        height: 300px;
    }
}

@media(max-width:1024px) and (min-width:768px) {
    .elementor-38 .elementor-element.elementor-element-f7e58e9 {
        width: 100%;
    }

    .elementor-38 .elementor-element.elementor-element-4bc0068 {
        width: 100%;
    }

    .elementor-38 .elementor-element.elementor-element-8b4f8e0 {
        width: 100%;
    }
}
</style>
<link rel='stylesheet' id='swiper-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.15.3'
type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.15.3'
type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'
href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.1'
type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='https://demo.ovatheme.com/aovis/wp-includes/js/jquery/jquery.min.js?ver=3.7.0'
    id='jquery-core-js'></script>
<script type='text/javascript'
    src='https://demo.ovatheme.com/aovis/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' id='jquery-migrate-js'>
</script>
<script type='text/javascript'
    src='https://demo.ovatheme.com/aovis/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.15.3'
    id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="https://demo.ovatheme.com/aovis/wp-json/" />
<link rel="alternate" type="application/json" href="https://demo.ovatheme.com/aovis/wp-json/wp/v2/pages/38" />
<link rel="EditURI" type="application/rsd+xml" title="RSD"
href="https://demo.ovatheme.com/aovis/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.3.1" />
<meta name="generator" content="WooCommerce 8.0.3" />
<link rel="canonical" href="https://demo.ovatheme.com/aovis/contact/" />
<link rel='shortlink' href='https://demo.ovatheme.com/aovis/?p=38' />

<link rel="alternate" type="application/json+oembed"
href="https://demo.ovatheme.com/aovis/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.ovatheme.com%2Faovis%2Fcontact%2F" />
<link rel="alternate" type="text/xml+oembed"
href="https://demo.ovatheme.com/aovis/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.ovatheme.com%2Faovis%2Fcontact%2F&#038;format=xml" />
<noscript>
<style>
    .woocommerce-product-gallery {
        opacity: 1 !important;
    }
</style>
</noscript>
<meta name="generator"
content="Elementor 3.15.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading; settings: css_print_method-internal, google_font-enabled, font_display-swap">
<link rel="icon" href="https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/cropped-favicon-32x32.png"
sizes="32x32" />
<link rel="icon" href="https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/cropped-favicon-192x192.png"
sizes="192x192" />
<link rel="apple-touch-icon"
href="https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/cropped-favicon-180x180.png" />



<link rel='stylesheet' id='plyr-css'
href='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/css/vendor/plyr.css?ver=1.0.0'
type='text/css' media='all' />
<link rel='stylesheet' id='amy-movie-style-css'
href='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/css/style.css?ver=1.0.0'
type='text/css' media='all' />

<style id='amy-movie-style-inline-css' type='text/css'>
.amy-primary-navigation ul.nav-menu>li>a::after {
    top: 70%;
}
</style>

<meta name="msapplication-TileImage"
content="https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/cropped-favicon-270x270.png" />
</head>

<body
class="page-template page-template-elementor_header_footer page page-id-38 wp-embed-responsive theme-aovis woocommerce-no-js chrome group-blog layout_2r woo_layout_1c elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-38">


<div class="wrap-fullwidth">
    <div class="inside-content">

        <style id="elementor-post-108">
            .elementor-108 .elementor-element.elementor-element-ca3d059>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-108 .elementor-element.elementor-element-ca3d059 {
                border-style: solid;
                border-width: 0px 0px 1px 0px;
                border-color: #FFFFFF26;
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 30px 40px 30px 40px;
                z-index: 9999;
            }

            .elementor-108 .elementor-element.elementor-element-ca3d059>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-108 .elementor-element.elementor-element-5e4d312.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 ul li a {
                font-size: 16px;
                font-weight: 400;
                text-transform: capitalize;
                line-height: 1.2em;
                padding: 10px 24px 10px 24px;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 ul {
                padding: 0px 0px 0px 0px;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 ul.menu>li>a {
                color: #FFFFFF;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 ul.menu>li>a:hover {
                color: #D96C2C;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 ul.menu>li.current-menu-item>a {
                color: #D96C2C;
            }

            .elementor-108 .elementor-element.elementor-element-0bbfee0 {
                width: auto;
                max-width: auto;
            }

            .elementor-108 .elementor-element.elementor-element-9108b98 .menu-canvas {
                text-align: right;
            }

            .elementor-108 .elementor-element.elementor-element-9108b98>.elementor-widget-container {
                margin: 0px 0px 0px 20px;
            }

            .elementor-108 .elementor-element.elementor-element-9108b98 {
                width: auto;
                max-width: auto;
            }

            .elementor-108 .elementor-element.elementor-element-e24734f.elementor-column>.elementor-widget-wrap {
                justify-content: flex-end;
            }

            .elementor-108 .elementor-element.elementor-element-8ad989f .ova_wrap_search_popup i {
                font-size: 24px;
                color: #FFFFFF;
            }

            .elementor-108 .elementor-element.elementor-element-8ad989f>.elementor-widget-container {
                padding: 0px 25px 0px 0px;
                border-style: none;
            }

            .elementor-108 .elementor-element.elementor-element-8ad989f {
                width: auto;
                max-width: auto;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708.elementor-view-stacked .elementor-icon {
                background-color: #FFFFFF;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708.elementor-view-framed .elementor-icon,
            .elementor-108 .elementor-element.elementor-element-2f55708.elementor-view-default .elementor-icon {
                color: #FFFFFF;
                border-color: #FFFFFF;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708.elementor-view-framed .elementor-icon,
            .elementor-108 .elementor-element.elementor-element-2f55708.elementor-view-default .elementor-icon svg {
                fill: #FFFFFF;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708 .elementor-icon {
                font-size: 24px;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708>.elementor-widget-container {
                margin: 0px 0px -10px 0px;
            }

            .elementor-108 .elementor-element.elementor-element-2f55708 {
                width: auto;
                max-width: auto;
            }

            .elementor-108 .elementor-element.elementor-element-4c25947>.elementor-background-overlay {
                background-image: url("https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/background-header-2.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 1;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-108 .elementor-element.elementor-element-4c25947 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: -130px;
                margin-bottom: 0px;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .cover_color {
                background-color: #00000080;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el .header_title {
                color: #fff;
                padding: 0px 0px 185px 0px;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el ul.breadcrumb li {
                color: #fff;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el ul.breadcrumb li a {
                color: #fff;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el ul.breadcrumb a {
                color: #fff;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el ul.breadcrumb li .separator i {
                color: #fff;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el ul.breadcrumb li a:hover {
                color: #D96C2C;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el .header_breadcrumbs {
                padding: 310px 0px 0px 0px;
            }

            .elementor-108 .elementor-element.elementor-element-f75b9d1 {
                text-align: center;
            }

            .elementor-108 .elementor-element.elementor-element-42d6d99 {
                margin-top: 0px;
                margin-bottom: 110px;
            }

            .elementor-108 .elementor-element.elementor-element-1f9c558 img {
                width: 100vw;
                height: 10px;
            }

            @media(max-width:1024px) {
                .elementor-108 .elementor-element.elementor-element-ca3d059 {
                    padding: 20px 20px 20px 20px;
                }

                .elementor-108 .elementor-element.elementor-element-5e4d312.elementor-column>.elementor-widget-wrap {
                    justify-content: flex-end;
                }

                .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el .header_title {
                    padding: 0px 0px 85px 0px;
                }

                .elementor-108 .elementor-element.elementor-element-f75b9d1 .header_banner_el .header_breadcrumbs {
                    padding: 210px 0px 0px 0px;
                }

                .elementor-108 .elementor-element.elementor-element-42d6d99 {
                    margin-top: 0px;
                    margin-bottom: 50px;
                }
            }

            @media(max-width:767px) {
                .elementor-108 .elementor-element.elementor-element-ca3d059 {
                    padding: 10px 20px 10px 20px;
                }

                .elementor-108 .elementor-element.elementor-element-9ec60b8 {
                    width: 50%;
                }

                .elementor-108 .elementor-element.elementor-element-5e4d312 {
                    width: 50%;
                }

                .elementor-108 .elementor-element.elementor-element-e24734f {
                    width: 100%;
                }
            }

            @media(min-width:768px) {
                .elementor-108 .elementor-element.elementor-element-9ec60b8 {
                    width: 14%;
                }

                .elementor-108 .elementor-element.elementor-element-5e4d312 {
                    width: 71.664%;
                }

                .elementor-108 .elementor-element.elementor-element-e24734f {
                    width: 14%;
                }
            }

            @media(max-width:1024px) and (min-width:768px) {
                .elementor-108 .elementor-element.elementor-element-9ec60b8 {
                    width: 50%;
                }

                .elementor-108 .elementor-element.elementor-element-5e4d312 {
                    width: 50%;
                }

                .elementor-108 .elementor-element.elementor-element-e24734f {
                    width: 100%;
                }
            }
        </style>
        <div data-elementor-type="wp-post" data-elementor-id="108" class="elementor elementor-108">


            @extends('client.layout.main.main')

            @section('contact')





                <div id="main">
                    <div id="content" class="site-content">


                        <section id="amy-page-header" class="amy-page-header">
                            <div class="amy-page-title amy-center">
                                <div class="amy-inner container">
                                    <h1 class="page-title">
                                        Contact </h1>
                                </div>
                            </div>
                            <span class="amy-section-overlay"></span>
                        </section>







                    </div>
                    <div data-elementor-type="wp-page" data-elementor-id="38" class="elementor elementor-38">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-34407b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="34407b9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5e8793"
                                    data-id="b5e8793" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-49147d5 elementor-widget elementor-widget-aovis_elementor_heading"
                                            data-id="49147d5" data-element_type="widget"
                                            data-widget_type="aovis_elementor_heading.default">
                                            <div class="elementor-widget-container">

                                                <div class="ova-heading ova-heading-template1">

                                                    <div class="icon m">
                                                        
                                                    </div>

                                                    <div class="top-heading " style="margin-top: 20px">
                                                        <h3 class="sub-title ">Contact With us</h3>



                                                        <h2 class="title">Feel Free to Write us
                                                            Anytime</h2>


                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-53cc65f elementor-widget elementor-widget-shortcode"
                                            data-id="53cc65f" data-element_type="widget"
                                            data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="wpcf7 no-js" id="wpcf7-f5-p38-o1" lang="en-US"
                                                        dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true">
                                                            </p>
                                                            <ul></ul>
                                                        </div>
                                                        <form action="/aovis/contact/#wpcf7-f5-p38-o1" method="post"
                                                            class="wpcf7-form init" aria-label="Contact form"
                                                            novalidate="novalidate" data-status="init">
                                                            <div style="display: none;">
                                                                <input type="hidden" name="_wpcf7"
                                                                    value="5" />
                                                                <input type="hidden" name="_wpcf7_version"
                                                                    value="5.8" />
                                                                <input type="hidden" name="_wpcf7_locale"
                                                                    value="en_US" />
                                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                                    value="wpcf7-f5-p38-o1" />
                                                                <input type="hidden" name="_wpcf7_container_post"
                                                                    value="38" />
                                                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                    value="" />
                                                            </div>
                                                            <div class="ova-ctform7">
                                                                <div class="two-column">
                                                                    <div class="name ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-name"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Your Name"
                                                                                    value="" type="text"
                                                                                    name="your-name" /></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="email ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-email"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email Adress"
                                                                                    value="" type="email"
                                                                                    name="your-email" /></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="two-column">
                                                                    <div class="phone ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-phone"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Phone" value=""
                                                                                    type="tel"
                                                                                    name="your-phone" /></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="subject ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="Subject"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Subject"
                                                                                    value="" type="text"
                                                                                    name="Subject" /></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="message ova_wrap_input">
                                                                    <p><span class="wpcf7-form-control-wrap"
                                                                            data-name="your-message">
                                                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                aria-required="true" aria-invalid="false" placeholder="Write a Comment" name="your-message"></textarea>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div class="ova-submit">
                                                                    <p><input
                                                                            class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                            type="submit" value="Send a Message" />
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output" aria-hidden="true">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-3e5e475 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3e5e475" data-element_type="section">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f7e58e9"
                                    data-id="f7e58e9" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-12ef2eb elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="12ef2eb" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">About</h3>


                                                        <ul class="info">



                                                            <li class="item ">

                                                                <p>Morbi ut tellus ac leo mol stie luctus nec vehicula
                                                                    sed</p>


                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-regular fa-address-card"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4bc0068"
                                    data-id="4bc0068" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-762c11c elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="762c11c" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">Address</h3>


                                                        <ul class="info">



                                                            <li class="item ">
                                                                <a href="https://www.google.com/maps" target="_blank"
                                                                    title="68 Road Broklyn Street, New York, UnitedStates of America">68
                                                                    Road Broklyn Street, New York, UnitedStates of
                                                                    America</a>
                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-solid fa-location-crosshairs"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8b4f8e0"
                                    data-id="8b4f8e0" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c24b6f6 elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="c24b6f6" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">Contact</h3>


                                                        <ul class="info">



                                                            <li class="item ">

                                                                <a href="tel:9288006780" title=" address ">+92 ( 8800
                                                                    ) - 6780</a>


                                                            </li>



                                                            <li class="item ">

                                                                <a href="/cdn-cgi/l/email-protection#711f14141519141d013100031e06155f121e1c51"
                                                                    title="address"><span class="__cf_email__"
                                                                        data-cfemail="4a242f2f2e222f263a0a3b38253d2e64292527">[email&#160;protected]</span></a>


                                                            </li>



                                                            <li class="item ">

                                                                <a href="/cdn-cgi/l/email-protection#7f161119103f0e0d10081b511c10125f"
                                                                    title="address"><span class="__cf_email__"
                                                                        data-cfemail="7910171f1639080b160e1d571a1614">[email&#160;protected]</span></a>


                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-solid fa-address-book"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5aa8682 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="5aa8682" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b1dc425"
                                    data-id="b1dc425" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-10af393 elementor-widget elementor-widget-google_maps"
                                            data-id="10af393" data-element_type="widget"
                                            data-widget_type="google_maps.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.15.0 - 20-08-2023 */
                                                    .elementor-widget-google_maps .elementor-widget-container {
                                                        overflow: hidden
                                                    }

                                                    .elementor-widget-google_maps .elementor-custom-embed {
                                                        line-height: 0
                                                    }

                                                    .elementor-widget-google_maps iframe {
                                                        height: 300px
                                                    }
                                                </style>
                                                <div class="elementor-custom-embed">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.45620275852!2d105.72735008715817!3d21.038124999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1695198952855!5m2!1svi!2s"
                                                        width="600" height="450" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div> <!-- /Inside Content -->



</div>

			 @endsection





               