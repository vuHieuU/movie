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
    {{-- <link rel='dns-prefetch' href='//fonts.googleapis.com' />
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
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-packages-style-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/packages-style.css?ver=10.6.6'
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-style-all-products-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-products.css?ver=10.6.6'
    type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-all-reviews-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-reviews.css?ver=10.6.6'
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-style-attribute-filter-css'
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
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-style-featured-product-css'
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
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-style-product-sku-css'
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
    type='text/css' media='all' /> --}}
    {{-- <link rel='stylesheet' id='wc-blocks-style-single-product-css'
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
    type='text/css' media='all' /> --}}
    {{-- <style type="text/css">
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
</style> --}}
</head>

{{-- <style id='classic-theme-styles-inline-css' type='text/css'>
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
</style> --}}
<link rel='stylesheet' id='contact-form-7-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8'
    type='text/css' media='all' />
<link rel='stylesheet' id='mb_frontend-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/movie-booking/assets/css/frontend/style.css?ver=6.3.1'
    type='text/css' media='all' />
<link rel='stylesheet' id='event-frontend-css'
    href='https://demo.ovatheme.com/aovis/wp-content/plugins/ova-events/assets/css/frontend/event.css' type='text/css'
    media='all' />
{{-- <style id='event-frontend-inline-css' type='text/css'>
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
</style> --}}
{{-- <link rel='stylesheet' id='woocommerce-layout-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.0.3'
type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.0.3'
type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.0.3'
type='text/css' media='all' /> --}}

{{-- <style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required {
    visibility: visible;
}
</style> --}}
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
{{-- <link rel='stylesheet' id='child-style-css'
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
type='text/css' media='all' /> --}}
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
{{-- <link rel='stylesheet' id='swiper-css'
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
</noscript> --}}
{{-- <meta name="generator"
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
content="https://demo.ovatheme.com/aovis/wp-content/uploads/2023/02/cropped-favicon-270x270.png" /> --}}
{{-- ảnh url --}}
<link rel="shortcut icon" href="storage/images/img_66.png" type="image/png">
{{-- ảnh url --}}
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-38 wp-embed-responsive theme-aovis woocommerce-no-js chrome group-blog layout_2r woo_layout_1c elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-38">


    <div class="wrap-fullwidth">
        <div class="inside-content">

            {{-- <style id="elementor-post-108">
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
        </style> --}}
            <style>
                .font-16 {
                    font-family: "Roboto Condensed";
                    color: #000000;
                    font-size: 16px Oswald;
                    font-weight: 500;
                }

                div ul li {
                    padding: 5px;
                }

                div ul {
                    margin-top: 30px;
                }

                .nav-tab {
                    border-right: 1px solid gray;
                    margin-right: 50px;
                }
            </style>
            <div data-elementor-type="wp-post" data-elementor-id="108" class="elementor elementor-108">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                </script>
                <link rel='stylesheet' id='font-awesome-css'
                    href='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0'
                    type='text/css' media='all' />

                @extends('client.layout.main.main')

                @section('contact')
                    <div id="main">
                        <div class="container">
                            <!-- TABS -->
                            <div class="row margin-bottom-35 margin-top-40">
                                <div class="col-lg-3 col-md-3">
                                    <ul class="nav nav-tab tabs-left text-uppercase tab-information">
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0 active"><a class="font-16" href="#tab-1"
                                                    data-toggle="tab">Giới thiệu</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-4"
                                                    data-toggle="tab">F.A.Q</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-5"
                                                    data-toggle="tab">Thẻ quà tặng</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-6"
                                                    data-toggle="tab">Hoạt động xã hội</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-7"
                                                    data-toggle="tab">Điều khoản sử dụng</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-8"
                                                    data-toggle="tab">Liên hệ quảng cáo</a></li>
                                        </a>
                                        <a href="">
                                            <li class="col-lg-12 border-radius-0"><a class="font-16" href="#tab-9"
                                                    data-toggle="tab">Điều khoản bảo mật</a></li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="tab-content font-family-san font-16">
                                        <div class="tab-pane active" id="tab-1">
                                            <div class="text-center">
                                                <img id="BodyContent_ctl00_ctl03_imgAnhDaiDienGioiThieu"
                                                    class="img-responsive margin-bottom-30 margin-top-20" src=""
                                                    style="display: initial;">
                                            </div>

                                            <p style="text-align: justify;">Công ty Cổ phần TF Media với tiền thân là Công
                                                ty TNHH TF Media thành lập ngày 08 tháng 09 năm 2014, trụ sở chính đặt tại
                                                Tầng 3, số 595, đường Giải Phóng, Phường Giáp Bát, Quận Hoàng Mai, Thành phố
                                                Hà Nội.</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;">TF Media được thành lập với mục tiêu đem tới
                                                khách hàng các sản phẩm và dịch vụ chất lượng tốt nhất, giá cả hợp lý nhất;
                                                với hai mảng kinh doanh chính là Tổ hợp dịch vụ ăn uống giải trí và cung cấp
                                                dịch vụ truyền thông. Chúng tôi đặt ra mục tiêu đem lại những trải nghiệm
                                                văn hoá và giải trí tuyệt vời nhất cho người dân Việt Nam, đặc biệt là giới
                                                trẻ. Những hoạt động của TF Media bao gồm:</p>

                                            <ul>
                                                <li style="text-align: justify;">Hoạt động chiếu phim</li>
                                                <li style="text-align: justify;">Hoạt động sản xuất phim điện ảnh, phim
                                                    video và chương trình truyền hình</li>
                                                <li style="text-align: justify;">Hoạt động phát hành phim điện ảnh, phim
                                                    video và chương trình truyền hình</li>
                                                <li style="text-align: justify;">Nhà hàng và các dịch vụ ăn uống phục vụ
                                                    lưu động</li>
                                                <li style="text-align: justify;">Quảng cáo</li>
                                            </ul>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;">Với sứ mệnh mong muốn mang tới giá trị văn hóa
                                                hiện đại và chất lượng, TF luôn lắng nghe, nghiên cứu nhằm thấu hiểu và thoả
                                                mãn nhu cầu của khách hàng, sáng tạo trong từng sản phẩm, tận tâm đem đến
                                                chất lượng dịch vụ hàng đầu.</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;">
                                                <meta charset="utf-8">
                                            </p>

                                            <p dir="ltr">CÔNG TY CỔ PHẦN TF MEDIA</p>

                                            <p dir="ltr">Giấy CNĐKKD số: 0106633482 - Đăng ký lần đầu ngày 08/09/2014
                                                tại Sở Kế hoạch và Đầu tư Thành phố Hà Nội</p>

                                            <p dir="ltr">Địa chỉ trụ sở: Tầng 3, số 595 Giải Phóng, P. Giáp Bát, Q.
                                                Hoàng Mai, TP. Hà Nội</p>

                                            <p dir="ltr">Hotline: 0934 632 682</p>

                                            <p dir="ltr">Email: cskh@TFcorp.vn</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                        <div class="tab-pane fade" id="tab-2">
                                            <!-- Google Map -->
                                            <h2 class="text-uppercase">
                                                Liên hệ với chúng tôi
                                            </h2>
                                            <div class="row margin-bottom-20">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-16">
                                                            <div class="form-group">
                                                                <h3>Tỉnh/ Thành phố</h3>
                                                                <div class="select2-container form-control"
                                                                    id="s2id_cboTinhThanhLienHe"><a
                                                                        href="javascript:void(0)" class="select2-choice"
                                                                        tabindex="-1"> <span class="select2-chosen"
                                                                            id="select2-chosen-2">Tỉnh/ Thành
                                                                            phố</span><abbr
                                                                            class="select2-search-choice-close"></abbr>
                                                                        <span class="select2-arrow" role="presentation"><b
                                                                                role="presentation"></b></span></a><label
                                                                        for="s2id_autogen2"
                                                                        class="select2-offscreen"></label><input
                                                                        class="select2-focusser select2-offscreen"
                                                                        type="text" aria-haspopup="true"
                                                                        role="button" aria-labelledby="select2-chosen-2"
                                                                        id="s2id_autogen2" tabindex="1">
                                                                    <div
                                                                        class="select2-drop select2-display-none select2-with-searchbox">
                                                                        <div class="select2-search"> <label
                                                                                for="s2id_autogen2_search"
                                                                                class="select2-offscreen"></label> <input
                                                                                type="text" autocomplete="off"
                                                                                autocorrect="off" autocapitalize="off"
                                                                                spellcheck="false" class="select2-input"
                                                                                role="combobox" aria-expanded="true"
                                                                                aria-autocomplete="list"
                                                                                aria-owns="select2-results-2"
                                                                                id="s2id_autogen2_search" placeholder="">
                                                                        </div>
                                                                        <ul class="select2-results" role="listbox"
                                                                            id="select2-results-2"> </ul>
                                                                    </div>
                                                                </div><select id="cboTinhThanhLienHe"
                                                                    class="form-control select2-offscreen"
                                                                    data-placeholder="Tỉnh/ Thành phố" tabindex="-1"
                                                                    title="">
                                                                    <option class="option-item" value="0">Tỉnh/ Thành
                                                                        phố</option>

                                                                    <option class="option-item"
                                                                        value="3fd25e4b-8f3e-4d39-8a8a-a647627d8459">Thái
                                                                        Nguyên</option>

                                                                    <option class="option-item"
                                                                        value="a0f4b33c-58ce-4047-b54f-2fa28f47311e">Đồng
                                                                        Nai</option>

                                                                    <option class="option-item"
                                                                        value="5f672cb2-d9c2-442e-a8e7-12939fec65ab">Hà Nội
                                                                    </option>

                                                                    <option class="option-item"
                                                                        value="f4b0a1f8-95d0-46dd-8595-7b1d9e41985c">Thanh
                                                                        Hóa</option>

                                                                    <option class="option-item"
                                                                        value="66e64727-7b67-43f3-84db-0a1731528398">Bắc
                                                                        Giang</option>

                                                                    <option class="option-item"
                                                                        value="46015d6d-3f96-4dad-a487-415be85dd24d">Khánh
                                                                        Hòa</option>

                                                                    <option class="option-item"
                                                                        value="1c5f58bb-f1ac-4ca0-8df8-b65869d69b7f">TP. Hồ
                                                                        Chí Minh</option>

                                                                    <option class="option-item"
                                                                        value="1b13f701-6fa6-4580-ae2e-d986ee5b9d42">Bà Rịa
                                                                        - Vũng Tàu</option>

                                                                    <option class="option-item"
                                                                        value="c178132d-2d14-4d54-9673-ca054dd96d0c">Bình
                                                                        Dương</option>

                                                                    <option class="option-item"
                                                                        value="8a02eadd-a4fe-43f8-85e8-f58402d25bda">Kiên
                                                                        Giang</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="clear-fix"></div>
                                                    <div class="row">
                                                        <div class="col-md-16">
                                                            <div class="form-group">
                                                                <h3>Tên rạp</h3>
                                                                <select id="cboRapLienHe" class="form-control"
                                                                    data-placeholder="Chọn rạp phim" tabindex="1">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="well" id="divCinemaInfo">
                                                        <h1>TF Thái Nguyên</h1>
                                                        <div class="font-16"><b>
                                                                Địa chỉ:</b> Hoàng Gia Plaza, 259 Quang Trung, Tân Thịnh, TP
                                                            Thái Nguyên, Tỉnh Thái Nguyên</div>
                                                        <br>
                                                        <div class="font-16"><b>
                                                                Số điện thoại:</b> 0867 460 053</div>
                                                        <br>
                                                        <div class="text-center">
                                                            <iframe allowfullscreen="" frameborder="0" height="450"
                                                                src="https://maps.google.com/maps?q=21.5789802,105.8146316&amp;hl=vi&amp;output=embed"
                                                                style="border: 0" width="100%"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h3>
                                                        Thông tin phản hồi</h3>
                                                    <!-- BEGIN FORM-->
                                                    <div class="form-group">
                                                        <div class="input-icon">
                                                            <i class="fa fa-user"></i>
                                                            <input type="text" id="txtName" class="form-control"
                                                                placeholder="Tên">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon">
                                                            <i class="fa fa-envelope"></i>
                                                            <input type="text" id="txtEmail" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon">
                                                            <i class="fa fa-phone-square"></i>
                                                            <input type="text" id="txtDienThoai" class="form-control"
                                                                placeholder="Số điện thoại">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="txtNoiDung" rows="3=6" placeholder="Nội dung"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <img class="pull-left" id="captchafeedback"
                                                            src="CreateCapcha.aspx" alt=""><a
                                                            onclick="changeImage('captchafeedback', 'CreateCapcha.aspx')"
                                                            class="pull-left" style="padding: 9px;"><i
                                                                style="font-size: 30px;" class="fa fa-refresh"></i></a>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="txtMaXacThuc" class="form-control"
                                                            placeholder="Nhập mã xác thực">
                                                    </div>
                                                    <button type="button" onclick="addFeedback();"
                                                        class="btn green pull-right">
                                                        Gửi yêu cầu</button>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-3">
                                            <h2 class="text-uppercase">
                                                Thông tin tuyển dụng
                                            </h2>
                                            <div class="row">
                                                <div class="col-lg-16">
                                                    <p>Công ty Cổ Phần TF Media chuyên kinh doanh trong lĩnh vực dịch vụ
                                                        giải trí và ăn uống. Với môi trường làm việc năng động, trẻ trung và
                                                        chuyên nghiệp, chúng tôi đang hướng đến phát triển các chuỗi nhà
                                                        hàng, dịch vụ giải trí hàng đầu Việt Nam.</p>
                                                    <p>Chúng tôi chào đón các bạn đến với môi trường làm việc năng động,
                                                        chuyên nghiệp và nhiều đãi ngộ.</p>
                                                </div>

                                                <div class="col-lg-8 margin-bottom-10">
                                                    <div class="border-radius-10" style="background-color: #fff;">
                                                        <div class="padding-15 text-center">
                                                            <h3 class="no-margin"><a class="link-text"
                                                                    href="/thong-tin-tuyen-dung.htm">THÔNG TIN TUYỂN
                                                                    DỤNG</a></h3>
                                                            <p class="font-family-san">

                                                            </p>
                                                            <p><a href="/thong-tin-tuyen-dung.htm">Xem thêm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-4">
                                            <div class="panel-group accordion scrollable" id="accordion2">

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <a class="accordion-toggle accordion-toggle-styled"
                                                                data-toggle="collapse" data-parent="#accordion2"
                                                                href="#dfe70379-c650-4b1a-be72-5f96d984ab1b">Câu hỏi thường
                                                                gặp</a>
                                                        </h3>
                                                    </div>
                                                    <div id="dfe70379-c650-4b1a-be72-5f96d984ab1b"
                                                        class="panel-collapse in">
                                                        <div class="panel-body">

                                                            <h3>Tôi có được mang đồ ăn từ bên ngoài vào không?</h3>
                                                            <div class="font-16">
                                                                <p>Nhằm đảm bảo chất lượng phục vụ bao gồm vệ sinh an toàn
                                                                    thực phẩm và tránh gây nhầm lẫn về đồ ăn bên ngoài và
                                                                    được bán ở rạp, quy khách vui lòng gửi đồ ăn tại quầy
                                                                    Con hoặc tiêu dùng hết trước khi vào bộ phận soát vé. TF
                                                                    rất cám ơn sự hợp tác của quý khách.</p>

                                                            </div>

                                                            <h3>HƯỚNG DẪN ĐẶT VÉ ONLINE</h3>
                                                            <div class="font-16">
                                                                <p dir="ltr" style="text-align: justify;">💓 Cùng
                                                                    điểm qua vài lợi ích khi đặt vé online nhé!</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Được ở nhà nằm điều hòa, chọn sương sương
                                                                    chục bộ phim và ghế ngồi trước khi quyết định đặt mà
                                                                    không lo người phía sau phải đợi chờ.</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Không phải xếp hàng dài như sông Volga để
                                                                    đợi mua vé xem phim bom tấn mà vẫn nơm nớp lo hết vé.
                                                                </p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Được giảm đến 10.000 đ khi mua combo
                                                                    bỏng+nước online. 🍿🍿</p>

                                                                <p dir="ltr" style="text-align: justify;">Còn chần gì
                                                                    nữa mà không làm theo hướng dẫn sau đây để đặt vé online
                                                                    một cách nhanh nhất nào:&nbsp;</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 1: Đăng nhập tài khoản thành viên</strong>
                                                                </p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Nếu Quý khách chưa
                                                                            có tài khoản, vui lòng điền thông tin đăng ký <a
                                                                                href="https://www.TFcinemas.vn/login.htm#login">TẠI
                                                                                ĐÂY!</a></p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 2: Chọn rạp và phim muốn xem, tiếp tục chọn
                                                                        suất chiếu và ghế</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý: Mỗi giao
                                                                            dịch chỉ chọn được tối đa 8 ghế.&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Quý khách có thể
                                                                            tải ứng dụng TF Cinemas về điện thoại để thao
                                                                            tác đặt vé dễ dàng hơn.</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Ứng dụng TF
                                                                            Cinemas đã có mặt trên cả Android và IOS, Quý
                                                                            khách vui lòng truy cập link dưới đây để tải ứng
                                                                            dụng về máy:</p>
                                                                    </li>
                                                                </ul>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation">IOS: <a
                                                                                href="https://apps.apple.com/vn/app/TF-cinemas/id1403107666">https://apps.apple.com/vn/app/TF-cinemas/id1403107666</a>
                                                                        </p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation">Android: <a
                                                                                href="https://play.google.com/store/apps/details?id=com.TF.TFcineplex&amp;hl=vi&amp;gl=US">https://play.google.com/store/apps/details?id=com.TF.TFcineplex&amp;hl=vi&amp;gl=US</a>
                                                                        </p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 3: Kiểm tra lại thông tin đặt vé trước khi
                                                                        thanh toán</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý: Vé đã thanh
                                                                            toán thành công sẽ không được đổi trả hay hoàn
                                                                            lại. Quý khách vui lòng check kỹ các thông tin
                                                                            sau:</p>
                                                                    </li>
                                                                </ul>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Cụm rạp muốn xem
                                                                        </p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thời gian suất
                                                                            chiếu và vị trí ghế ngồi</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý về độ tuổi
                                                                            quy định của phim</p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 4: Xác nhận thanh toán&nbsp;</strong></p>

                                                                <p dir="ltr" style="text-align: justify;">Khách hàng
                                                                    có thể lựa chọn các hình thức thanh toán sau để thanh
                                                                    toán cho giao dịch đặt vé trên website TF Cinemas:</p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Điểm tích lũy
                                                                            thành viên</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thanh toán bằng Ví
                                                                            điện tử MoMo/Shopee Pay&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thẻ ATM (Thẻ ghi
                                                                            nợ/thanh toán/trả trước nội địa)</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thẻ tín dụng thẻ,
                                                                            thẻ ghi nợ, thẻ trả trước quốc tế</p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">Hiện tại
                                                                    các giá vé ưu đãi áp dụng cho học sinh, sinh viên, người
                                                                    cao tuổi, trẻ em chưa thể được áp dụng trên hệ thống bán
                                                                    vé online. Nếu muốn sử dụng các loại ưu đãi này, Quý
                                                                    khách vui lòng tới mua vé tại quầy BOX OFFICE tại các
                                                                    cụm rạp TF CINEMAS nhé!</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 5: Nhận thông tin đặt vé thành công qua
                                                                        Email đã đăng ký/Ứng dụng TF Cinemas</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Sau khi xác nhận
                                                                            thanh toán thành công, thông tin vé đã đặt sẽ
                                                                            được gửi về qua email của Quý Khách.&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Quý khách có thể
                                                                            kiểm tra lại thông tin tại “Hành Trình Điện Ảnh”
                                                                            của phần Thành viên trên trang web hoặc có thể
                                                                            truy cập vào phần Lịch Sử Giao Dịch tại ứng dụng
                                                                            TF Cinemas.</p>
                                                                    </li>
                                                                </ul>

                                                                <p style="text-align: justify;">Nếu Quý khách có gặp bất cứ
                                                                    vấn đề nào liên quan tới việc đặt vé online, vui lòng
                                                                    liên hệ fanpage <a
                                                                        href="https://www.facebook.com/TFcinemas">Facebook
                                                                        của TF Cinemas</a> hoặc gọi điện tới hotline 0934
                                                                    632 682 để được hỗ trợ nhanh nhất.</p>
                                                                <quillbot-extension-portal></quillbot-extension-portal>
                                                            </div>

                                                            <h3>Vấn đề chụp hình, ghi âm tại rạp?</h3>
                                                            <div class="font-16">
                                                                <p>Việc quay phim, chụp hình trong phòng chiếu là vi phạm
                                                                    Luật sở hữu trí tuệ của nước CHXH CN Việt Nam, theo
                                                                    khung xử phạt hành chính lên đến 35.000.000 VNĐ.</p>

                                                            </div>

                                                            <h3>Chính sách giảm giá cho HSSV, trẻ em và người già?</h3>
                                                            <div class="font-16">
                                                                <p>TF áp dụng giá vé ưu đãi giành cho các đối tượng như
                                                                    trên. Chi tiết các bạn có thể liên hệ quầy vé.</p>

                                                                <p>Bên cạnh đó, trẻ em dưới 0,7m khi đến xem phim tại TF
                                                                    Cinemas sẽ được miễn phí vé hoàn toàn. Bé sẽ ngồi chung
                                                                    ghế với bố mẹ khi xem phim.</p>

                                                                <p>Lưu ý:</p>

                                                                <p>- Áp dụng cho trẻ em cao từ 0,7m đến 1,3m.</p>

                                                                <p>- Áp dụng cho người cao tuổi từ 55 tuổi trở lên. Vui lòng
                                                                    xuất trình CMND khi mua vé.</p>

                                                                <p>- Đối với sinh viên học sinh, các bạn vui lòng xuất trình
                                                                    Thẻ HSSV hoặc CMND dưới 22 tuổi&nbsp;khi mua vé. Mỗi thẻ
                                                                    chỉ được áp dụng trên 1 vé.</p>

                                                            </div>

                                                            <h3>TF Combo, Sweet Combo và Family Combo? Việc mua combo ở Quầy
                                                                vé có lợi gì?</h3>
                                                            <div class="font-16">
                                                                <p>Combo là một bộ bao gồm đồ ăn và nước uống.</p>

                                                                <p>Trong đó, Sweet&nbsp;Combo gồm hai nước lớn và một bỏng
                                                                    ngô lớn (bỏng thường) với giá 98.000 đồng; TF
                                                                    Combo&nbsp;gồm một nước lớn và một bỏng lớn (bỏng
                                                                    thường) với giá 78.000 đồng; Family Combo gồm bốn nước
                                                                    lớn, hai bắp lớn và hai snack bất kỳ với giá 223.000
                                                                    đồng.</p>

                                                                <p>- Đối với các khách hàng mua vé kèm combo bỏng
                                                                    nước&nbsp;tại quầy vé&nbsp;sẽ được giảm 5k/ combo</p>

                                                                <p>- Đối với Đối với các khách hàng mua vé online qua app TF
                                                                    hoặc Website thi khi mua thêm combo bỏng&nbsp;nước sẽ
                                                                    được giảm 10k/ combo.</p>

                                                                <p>Mua combo kèm vé sẽ&nbsp;tiết kiệm thời gian giao dịch 1
                                                                    lần, khách hàng chỉ cần&nbsp;cầm phiếu đổi sang quầy Con
                                                                    đổi mà&nbsp;không&nbsp;phải xếp hàng thanh toán.</p>
                                                                <quillbot-extension-portal></quillbot-extension-portal>
                                                            </div>

                                                            <h3>"Qui định khi xem phim" là gì?</h3>
                                                            <div class="font-16">
                                                                <p>“Qui định khi xem phim” áp dụng khi các hãng phim hay nhà
                                                                    phát hành bộ phim yêu cầu khán giả không sử dụng các
                                                                    thiết bị ghi âm điện tử (máy ảnh, điện thoại di động,
                                                                    máy tính, ...) trong phòng chiếu phim. Các thiết bị điện
                                                                    tử của bạn sẽ được cất trữ an toàn và gửi lại bạn sau
                                                                    khi bộ phim kết thúc. Qui định này thường áp dụng cho
                                                                    các tuần khởi chiếu của phim.</p>

                                                                <p>Khi xem phim 3D, bạn cần phải giữ kính 3D cẩn thận. Trong
                                                                    trường hợp làm mất mát hoặc hư hỏng kính, bạn sẽ phải
                                                                    đền bù. Do đó, khi nhận kính 3D từ nhân viên TF Cineplex
                                                                    trước khi vào rạp chiếu phim, các bạn vui lòng kiểm tra
                                                                    kính cẩn thận.</p>

                                                            </div>

                                                            <h3>Các vị trí ghế có gì khác nhau?</h3>
                                                            <div class="font-16">
                                                                <p>Hiện tại rạp có 3 loại ghế trong một phòng, trong đó:</p>

                                                                <p><strong>Ghế đôi: </strong>TF Cinemas được biết đến với hê
                                                                    thống ghế đôi, hay còn gọi là “Ghế Tình Nhân” đặc biệt.
                                                                    Hãy tận hưởng cảm giác thoải mái và ấm cúng cùng người
                                                                    ấy với ghế đôi của TF. Tuyệt hơn nữa, ghế đôi được đặt ở
                                                                    vị trí rất thuận lợi để hai bạn có thể thưởng thức những
                                                                    thước phim hay với tầm nhìn và vị thế đẹp nhất.</p>

                                                                <p><strong>Ghế VIP: </strong>là ghế ở khu vực trung tâm của
                                                                    rạp chiếu phim, là vị trí khá là tốt để bạn có thể
                                                                    thưởng thức trọn vẹn bộ phim mà mình yêu thích.</p>

                                                                <p><strong>Ghế thường:</strong> là ghế ở khu vực phía trước,
                                                                    gần màn hình hơn</p>

                                                            </div>

                                                            <h3>Tại sao không được mang thú cưng vào rạp cũng như hút thuốc
                                                                trong rạp?</h3>
                                                            <div class="font-16">
                                                                <p>Để đảm bảo vệ sinh và sức khỏe cho cộng đồng, các bạn vui
                                                                    lòng không mang thú cưng và hút thuốc vào trong rạp.</p>

                                                            </div>

                                                            <h3>Tôi có được hoàn lại tiền vé hoặc thay đổi suất chiếu?</h3>
                                                            <div class="font-16">
                                                                <p>Vé đã mua rồi không thể hủy hoặc thay đổi.</p>

                                                            </div>

                                                            <h3>Trước khi trình chiếu ở Việt Nam, các bộ phim được kiểm
                                                                duyệt thế nào?</h3>
                                                            <div class="font-16">
                                                                <p>Tất cả những phim được trình chiếu tại các rạp chiếu phim
                                                                    ở Việt Nam phải được kiểm duyệt, sau đó được cấp giấy
                                                                    phép phát hành và phạm vi phổ biến phim bởi Cục Điện Ảnh
                                                                    thuộc Bộ Văn Hóa, Thể Thao và Du Lịch Việt Nam. Do đó,
                                                                    một số cảnh quay có thể được yêu cầu phải cắt bỏ bởi Cục
                                                                    Điện Ảnh để phù hợp với văn hóa của Việt Nam trước khi
                                                                    lưu hành. Tuy nhiên, không ngoại trừ một số phim sẽ
                                                                    không được cấp phép phát hành tại Việt Nam.</p>

                                                            </div>

                                                            <h3>Các định dạng phim khác nhau chỗ nào? Tôi nên lựa chọn phim
                                                                sao cho hợp lý?</h3>
                                                            <div class="font-16">
                                                                <p>Nhiều phim bom tấn mới ra mắt dưới nhiều định dạng khác
                                                                    nhau cho khán giả lựa chọn.</p>

                                                                <p>2D Digital: phim được chiếu ở định dạng 2D Digital với
                                                                    hình ảnh sáng hơn, sắc nét hơn, âm thanh sống động hơn.
                                                                </p>

                                                                <p>3D: phim được chiếu ở định dạng 3D với hình ảnh và âm
                                                                    thanh hoàn toàn sắc nét, sống động. Bạn cần đến mắt
                                                                    kiếng chuyên dụng 3D để xem phim.</p>

                                                            </div>

                                                            <h3>2D Digital là gì?</h3>
                                                            <div class="font-16">
                                                                <p>Cuộc cách mạng số được tiếp diễn với công nghệ phim 2D
                                                                    Digital. Rất nhiều khách hàng đã hỏi chúng tôi về sự
                                                                    khác nhau giữa phim 2D tiêu chuẩn 35mm và 2D Digital và
                                                                    đây là câu trả lời dành cho các bạn:</p>

                                                                <p>Không giống như phim 2D thông thường với các bản phim và
                                                                    máy chiếu tiêu chuẩn, 2D Digital sử dụng các thiết bị kỹ
                                                                    thuật số tương tự như công nghệ 3D Digital chỉ khác là
                                                                    không có hiệu ứng 3D. Điều này có nghĩa là bạn sẽ được
                                                                    thưởng thức hiệu ứng hình ảnh sáng hơn, sắc nét hơn của
                                                                    công nghệ 3D với âm thanh digital sống động.</p>

                                                                <p>Hãy đón xem 2D Digital để có trải nghiệm điện ảnh thật sự
                                                                    tuyệt vời.</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <a class="accordion-toggle accordion-toggle-styled"
                                                                data-toggle="collapse" data-parent="#accordion2"
                                                                href="#90125bc1-5c7f-4a6a-a060-bee74560bab4">Các câu hỏi
                                                                thường gặp khi đặt vé online</a>
                                                        </h3>
                                                    </div>
                                                    <div id="90125bc1-5c7f-4a6a-a060-bee74560bab4"
                                                        class="panel-collapse in">
                                                        <div class="panel-body">

                                                            <h3>Vì sao tôi đã đặt vé thành công mà chưa nhận được xác nhận
                                                                đặt vé?</h3>
                                                            <div class="font-16">
                                                                <p>Trong vòng 30 phút kể từ khi thanh toán thành công, chúng
                                                                    tôi sẽ gửi bạn mã xác nhận thông tin vé qua email của
                                                                    bạn. Bạn vui lòng kiểm tra cả hòm thư rác. Nếu bạn cần
                                                                    hỗ trợ hay thắc mắc, khiếu nại về xác nhận mã vé thì vui
                                                                    lòng nhắn tin tới Facebook Fanpage TF Cinemas tại:
                                                                    <em><u>m.me/TFcinemas</u></em>&nbsp;trong vòng 60 phút
                                                                    kể từ khi thanh toán vé thành công. Sau khoảng thời gian
                                                                    trên, chúng tôi không chấp nhận giải quyết bất kỳ khiếu
                                                                    nại nào.</p>

                                                                <p>Chúng tôi không chịu trách nhiệm trong trường hợp thông
                                                                    tin địa chỉ email, số điện thoại bạn nhập không chính
                                                                    xác dẫn đến không nhận được thư xác nhận của chúng tôi.
                                                                    Vui lòng kiểm tra kỹ các thông tin này trước khi thực
                                                                    hiện thanh toán. Chúng tôi không hỗ trợ xử lý và không
                                                                    chịu trách nhiệm trong trường hợp đã gửi thư xác nhận mã
                                                                    vé đến địa chỉ email của bạn nhưng vì một lý do nào đó
                                                                    mà bạn không thể đến xem phim (noshow).</p>

                                                            </div>

                                                            <h3>Có thể hủy hoặc thay đổi vé đã mua online được không?</h3>
                                                            <div class="font-16">
                                                                <p>Vé đã mua rồi không thể huỷ/đổi trả/hoàn tiền vì bất kỳ
                                                                    lý do gì. Chúng tôi chỉ thực hiện hoàn tiền trong trường
                                                                    hợp thẻ của bạn đã bị trừ tiền nhưng hệ thống của chúng
                                                                    tôi không ghi nhận việc đặt vé của bạn, và bạn không
                                                                    nhận được xác nhận đặt vé thành công.</p>

                                                                <p>Khi đó, bạn vui lòng liên hệ với rạp TF mà bạn vừa chọn
                                                                    để mua vé bằng cách nhắn tin cho Facebook Fanpage TF
                                                                    Cinemas tại: <em><u>m.me/TFcinemas</u></em></p>

                                                                <p>Sau khi đã xác nhận các thông tin của khách hàng cung cấp
                                                                    về giao dịch không thành công, tùy theo từng loại tài
                                                                    khoản khách hàng sử dụng mà việc hoàn tiền sẽ có thời
                                                                    gian khác nhau:</p>

                                                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thẻ
                                                                    ATM: hoàn tiền trong 1 tuần làm việc.</p>

                                                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thẻ
                                                                    Visa Credit Card, Master Card, JCB Card: hoàn tiền trong
                                                                    vòng 1 tháng làm việc.</p>

                                                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Các thẻ
                                                                    của ngân hàng Vietcombank: hoàn tiền trong vòng 48 giờ
                                                                    làm việc.</p>

                                                            </div>

                                                            <h3>Vé liệt kê trên website áp dụng cho đối tượng nào?</h3>
                                                            <div class="font-16">
                                                                <p>Theo quy định của Cục Điện Ảnh, một số phim sẽ không dành
                                                                    cho khán giả dưới 13, 16 hoặc 18&nbsp;tuổi. Khi đến lấy
                                                                    vé tại quầy vé, nhân viên có thể yêu cầu bạn xuất trình
                                                                    giấy tờ tuỳ thân để chứng minh độ tuổi quy định. Vui
                                                                    lòng lưu ý và cân nhắc chắc chắn trước khi mua vé.</p>

                                                            </div>

                                                            <h3>Sau khi đặt mua vé thành công thì tôi nên làm gì?</h3>
                                                            <div class="font-16">
                                                                <p>Vui lòng kiểm tra thông tin xác nhận vé cẩn thận và ghi
                                                                    nhớ mã đặt vé. Khi đến nhận vé tại Quầy vé của Chúng
                                                                    tôi, bạn cũng cần mang theo giấy tờ tùy thân như CMND,
                                                                    thẻ sinh viên hoặc hộ chiếu.</p>

                                                            </div>

                                                            <h3>Tại sao thẻ của bạn bị từ chối, giao dịch thanh toán không
                                                                thành công?</h3>
                                                            <div class="font-16">
                                                                <p>Giao dịch thanh toán không thành công có thể do nhiều
                                                                    nguyên nhân. Bạn tham khảo các nguyên nhân sau:</p>

                                                                <ul>
                                                                    <li>Chưa đăng ký chức năng thanh toán trên Internet với
                                                                        Ngân hàng (Đối với thẻ Visa, MasterCard, JCB)</li>
                                                                    <li>Chưa đăng ký đủ điều kiện để thực hiện thanh toán
                                                                        trực tuyến với Ngân hàng (Đối với thẻ ATM nội địa)
                                                                    </li>
                                                                    <li>Thẻ không đủ hạn mức/ số dư để thanh toán. Một số
                                                                        Ngân hàng có quy định cả hạn mức chi tiêu theo ngày
                                                                        cho thẻ.</li>
                                                                    <li>Nhập sai thông tin thẻ.</li>
                                                                </ul>

                                                                <p>Để biết nguyên nhân chính xác, vui lòng liên hệ với Ngân
                                                                    hàng phát hành thẻ.</p>
                                                                <quillbot-extension-portal></quillbot-extension-portal>
                                                            </div>

                                                            <h3>Tôi đã thanh toán thành công, tiền trong tài khoản đã bị
                                                                trừ, nhưng không nhận được email xác nhận từ TF Media thì
                                                                tôi phải làm gì?</h3>
                                                            <div class="font-16">
                                                                <p>Khi đó bạn vui lòng liên hệ đến số Hotline của rạp hoặc
                                                                    Inbox đến Facebook Fanpage chính thức của TF Cinemas:
                                                                    <em><u>m.me/TFcinemas</u></em> hoặc hotline của từng rạp
                                                                    theo danh sách bên dưới.&nbsp;Bạn vui lòng cung cấp cho
                                                                    chúng tôi các thông tin về Tên, số điện thoại của bạn,
                                                                    thông tin đặt vé, suất chiếu, rạp chiếu, ngày giờ đặt
                                                                    vé. Chúng tôi sẽ hỗ trợ chậm nhất sau 24h làm việc.</p>

                                                                <ul>
                                                                    <li><strong>FT Cinemas Thanh
                                                                            Xuân:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Mỹ Đình:&nbsp;0123456789</strong>
                                                                    </li>
                                                                    <li><strong>FT Cinemas Giải
                                                                            Phóng:&nbsp;&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Đan
                                                                            Phượng:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Thái
                                                                            Nguyên:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Thanh
                                                                            Hóa:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Bắc
                                                                            Giang:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Quang
                                                                            Trung:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Biên Hòa:&nbs0123456789</strong>
                                                                    </li>
                                                                    <li><strong>FT Cinemas Nha
                                                                            Trang:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Long Thành</strong></li>
                                                                    <li><strong>FT Cinemas Empire Bình
                                                                            Dương:&nbsp;0123456789</strong></li>
                                                                    <li><strong>FT Cinemas Tân
                                                                            Uyên:&nbsp;0123456789</strong></li>
                                                                </ul>

                                                                <p>&nbsp;</p>
                                                                <quillbot-extension-portal></quillbot-extension-portal><quillbot-extension-portal></quillbot-extension-portal>
                                                            </div>

                                                            <h3>HƯỚNG DẪN ĐẶT VÉ ONLINE</h3>
                                                            <div class="font-16">
                                                                <p dir="ltr" style="text-align: justify;">💓 Cùng
                                                                    điểm qua vài lợi ích khi đặt vé online nhé!</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Được ở nhà nằm điều hòa, chọn sương sương
                                                                    chục bộ phim và ghế ngồi trước khi quyết định đặt mà
                                                                    không lo người phía sau phải đợi chờ.</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Không phải xếp hàng dài như sông Volga để
                                                                    đợi mua vé xem phim bom tấn mà vẫn nơm nớp lo hết vé.
                                                                </p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    &nbsp;&nbsp;🔸 Được giảm đến 10.000 đ khi mua combo
                                                                    bỏng+nước online. 🍿🍿</p>

                                                                <p dir="ltr" style="text-align: justify;">Còn chần gì
                                                                    nữa mà không làm theo hướng dẫn sau đây để đặt vé online
                                                                    một cách nhanh nhất nào:&nbsp;</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 1: Đăng nhập tài khoản thành viên</strong>
                                                                </p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Nếu Quý khách chưa
                                                                            có tài khoản, vui lòng điền thông tin đăng ký <a
                                                                                href="https://www.TFcinemas.vn/login.htm#login">TẠI
                                                                                ĐÂY!</a></p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 2: Chọn rạp và phim muốn xem, tiếp tục chọn
                                                                        suất chiếu và ghế</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý: Mỗi giao
                                                                            dịch chỉ chọn được tối đa 8 ghế.&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Quý khách có thể
                                                                            tải ứng dụng TF Cinemas về điện thoại để thao
                                                                            tác đặt vé dễ dàng hơn.</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Ứng dụng TF
                                                                            Cinemas đã có mặt trên cả Android và IOS, Quý
                                                                            khách vui lòng truy cập link dưới đây để tải ứng
                                                                            dụng về máy:</p>
                                                                    </li>
                                                                </ul>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation">IOS: <a
                                                                                href="https://apps.apple.com/vn/app/TF-cinemas/id1403107666">https://apps.apple.com/vn/app/TF-cinemas/id1403107666</a>
                                                                        </p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation">Android: <a
                                                                                href="https://play.google.com/store/apps/details?id=com.TF.TFcineplex&amp;hl=vi&amp;gl=US">https://play.google.com/store/apps/details?id=com.TF.TFcineplex&amp;hl=vi&amp;gl=US</a>
                                                                        </p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 3: Kiểm tra lại thông tin đặt vé trước khi
                                                                        thanh toán</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý: Vé đã thanh
                                                                            toán thành công sẽ không được đổi trả hay hoàn
                                                                            lại. Quý khách vui lòng check kỹ các thông tin
                                                                            sau:</p>
                                                                    </li>
                                                                </ul>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Cụm rạp muốn xem
                                                                        </p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thời gian suất
                                                                            chiếu và vị trí ghế ngồi</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Lưu ý về độ tuổi
                                                                            quy định của phim</p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 4: Xác nhận thanh toán&nbsp;</strong></p>

                                                                <p dir="ltr" style="text-align: justify;">Khách hàng
                                                                    có thể lựa chọn các hình thức thanh toán sau để thanh
                                                                    toán cho giao dịch đặt vé trên website TF Cinemas:</p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Điểm tích lũy
                                                                            thành viên</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thanh toán bằng Ví
                                                                            điện tử MoMo/Shopee Pay&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thẻ ATM (Thẻ ghi
                                                                            nợ/thanh toán/trả trước nội địa)</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Thẻ tín dụng thẻ,
                                                                            thẻ ghi nợ, thẻ trả trước quốc tế</p>
                                                                    </li>
                                                                </ul>

                                                                <p dir="ltr" style="text-align: justify;">Hiện tại
                                                                    các giá vé ưu đãi áp dụng cho học sinh, sinh viên, người
                                                                    cao tuổi, trẻ em chưa thể được áp dụng trên hệ thống bán
                                                                    vé online. Nếu muốn sử dụng các loại ưu đãi này, Quý
                                                                    khách vui lòng tới mua vé tại quầy BOX OFFICE tại các
                                                                    cụm rạp TF CINEMAS nhé!</p>

                                                                <p dir="ltr" style="text-align: justify;">
                                                                    <strong>Bước 5: Nhận thông tin đặt vé thành công qua
                                                                        Email đã đăng ký/Ứng dụng TF Cinemas</strong></p>

                                                                <ul>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Sau khi xác nhận
                                                                            thanh toán thành công, thông tin vé đã đặt sẽ
                                                                            được gửi về qua email của Quý Khách.&nbsp;</p>
                                                                    </li>
                                                                    <li aria-level="1" dir="ltr">
                                                                        <p dir="ltr" role="presentation"
                                                                            style="text-align: justify;">Quý khách có thể
                                                                            kiểm tra lại thông tin tại “Hành Trình Điện Ảnh”
                                                                            của phần Thành viên trên trang web hoặc có thể
                                                                            truy cập vào phần Lịch Sử Giao Dịch tại ứng dụng
                                                                            TF Cinemas.</p>
                                                                    </li>
                                                                </ul>

                                                                <p style="text-align: justify;">Nếu Quý khách có gặp bất cứ
                                                                    vấn đề nào liên quan tới việc đặt vé online, vui lòng
                                                                    liên hệ fanpage <a
                                                                        href="https://www.facebook.com/TFcinemas">Facebook
                                                                        của TF Cinemas</a> hoặc gọi điện tới hotline 0934
                                                                    632 682 để được hỗ trợ nhanh nhất.</p>
                                                                <quillbot-extension-portal></quillbot-extension-portal>
                                                            </div>

                                                            <h3>Làm sao để thanh toán Online?</h3>
                                                            <div class="font-16">
                                                                <p>Thẻ phải được kích hoạt chức năng thanh toán trực tuyến,
                                                                    và có đủ hạn mức/ số dư để thanh toán. Bạn cần nhập
                                                                    chính xác thông tin thẻ (tên chủ thẻ, số thẻ, ngày hết
                                                                    hạn, số CVC, OTP,...)</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-5">
                                            <div class="text-center">
                                                <img id="BodyContent_ctl00_ctl03_imgAnhDaiDienTheQuaTang"
                                                    class="img-responsive margin-bottom-30 margin-top-20" src=""
                                                    style="display: initial;">
                                            </div>

                                            <p style="text-align: justify;">Bạn luôn phân vân không biết tặng bạn bè, người
                                                thân món quà nào mỗi dịp sinh nhật hay lễ Tết? Bạn luôn lo lắng vì không
                                                chọn được món quà mà người đó sẽ thích?</p>

                                            <p style="text-align: justify;"><br>
                                                Nếu câu trả lời là "có", Phiếu tặng vé&nbsp;phim 2D và 3D là giải pháp hợp
                                                lý dành cho bạn. Với Phiếu tặng vé, bạn có thể tặng những suất chiếu phim 2D
                                                hoặc 3D cho bạn bè và gia đình. Vì vậy, TF Cinemas&nbsp;hân hạnh giới thiệu
                                                phiếu tặng vé với hai&nbsp;mức giá cho phim 2D và 3D rất ưu đãi. Với Phiếu
                                                tặng vé từ bạn, bạn bè và người thân của bạn có thể được chọn bất cứ phim
                                                nào, giờ chiếu nào, chỗ ngồi nào mà không phải trả thêm bất kỳ&nbsp;chi phí
                                                nào.</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;"><em style=""><b>Đặc biệt: Từ tháng
                                                        4/2018, TF Cinemas&nbsp;phát hành thêm loại voucher đồng giá 45k cho
                                                        mọi suất chiếu và ghế ngồi - áp dụng duy nhất tại các rạp chiếu phim
                                                        TF Cinemas&nbsp;Thanh Xuân, TF Cinemas&nbsp;Biên Hòa, TF
                                                        Cinemas&nbsp;Nha Trang - với số lượng có hạn.</b></em></p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;">Để mua Phiếu tặng vé - Gift voucher, bạn hãy
                                                liên hệ tới hotline<strong><em><strong>&nbsp;</strong>0934 632
                                                        682</em></strong>&nbsp;để được hưởng ưu đãi tốt nhất bạn nhé!</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                        <div class="tab-pane fade" id="tab-6">
                                            <div class="text-center">
                                                <img id="BodyContent_ctl00_ctl03_imgAnhDaiDienHoatDongXaHoi"
                                                    class="img-responsive margin-bottom-30 margin-top-20" src=""
                                                    style="display: initial;">
                                            </div>
                                            <h2 class="text-uppercase">
                                                Trách nhiệm xã hội và cộng đồng
                                            </h2>

                                            <p>Song song với hoạt động kinh doanh, TF Media cũng luôn quan tâm tới các dự án
                                                phục vụ lợi ích cộng đồng và có sự hợp tác rộng rãi với các tổ chức xã hội
                                                như:</p>

                                            <p>- Civilian Felllowship for International Hàn Quốc (CFIE): Trong tuần lễ từ
                                                15/03 đến 21/03/2015, rạp phim TF Cinemas&nbsp;đã phối hợp cùng với CFIE tài
                                                trợ cho gần 500 trẻ em học sinh tiểu học, điều kiện khó khăn trên địa bàn
                                                tỉnh Thái Nguyên xem phim hoạt hình Madagasca và Lọ Lem Cinderella – Những
                                                bộ phim có tính giáo dục cao cho trẻ em.</p>

                                            <p>Tại tỉnh Thái Nguyên, rạp phim TF Cinemas&nbsp;đã có những đóng góp thiết
                                                thực vào sự phát triển và nâng cao kiến thức cho trẻ em, đặc biệt là trẻ em
                                                nghèo tại các khu vực khó khăn của tỉnh.</p>

                                            <p>- Operation Smile: Tổ chức từ thiện gây quỹ phẫu thuật nụ cười cho các bệnh
                                                nhi không may mắc chứng hở hàm ếch bẩm sinh.</p>

                                            <p>- VPV: TF Media đã bảo trợ và tài trợ cho đêm nhạc từ thiện “Đem nước về thôn
                                                Khem”. Đây là đêm nhạc nằm trong dự án từ thiện “Đông ấm tình thương” do tổ
                                                chức Volunteer For Peace Viet Nam (VPV), nhằm giúp đỡ, mang lại niềm vui đến
                                                cho các em nhỏ vùng cao, vùng xa thiếu thốn tỉnh Hòa Bình, giúp đỡ các em có
                                                một điều kiện để học tập tốt hơn. Đồng thời cũng mong muốn khắc phục tình
                                                trạng thiếu nước sạch trầm trọng của người dân nơi đây. Sự kiện âm nhạc này
                                                cũng có sự tham gia của các ca sĩ trẻ như: Minh TF, Bảo Trâm Idol, Đoàn Mạnh
                                                Thắng, Phan Tuấn (The voice) cùng rất nhiều bạn trẻ đến từ các trường Đại
                                                học trên địa bàn Hà Nội.</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                        <div class="tab-pane fade" id="tab-7">
                                            <div class="text-center">

                                            </div>
                                            <h2 class="text-uppercase">
                                                Điều khoản chung
                                            </h2>

                                            <p dir="ltr" style="text-align: justify;">Việc bạn sử dụng website này
                                                đồng nghĩa với việc bạn đồng ý với những thỏa thuận dưới đây.</p>

                                            <p dir="ltr" style="text-align: justify;">Nếu bạn không đồng ý, xin vui
                                                lòng không sử dụng website.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>1. Chấp nhận các điều
                                                    khoản sử dụng</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Các điều khoản và điều kiện sau
                                                đây (gọi chung là các “Điều khoản sử dụng”) quy định việc truy cập và sử
                                                dụng các dịch vụ, thông tin từ TF Cinemas</p>

                                            <p dir="ltr" style="text-align: justify;">Bằng việc sử dụng bất kỳ dịch
                                                vụ nào của công ty, Quý khách chấp nhận, đồng ý bị ràng buộc và tuân thủ các
                                                điều khoản sử dụng dưới đây.</p>

                                            <p dir="ltr" style="text-align: justify;">Nếu Quý khách không đồng ý với
                                                bất kỳ điều khoản sử dụng, chính sách bảo mật của TF Cinemas hoặc không có
                                                đầy đủ năng lực hành vi dân sự phù hợp, xin vui lòng dừng việc truy cập và
                                                sử dụng ngay lập tức.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>2. Truy
                                                    cập&nbsp;</strong></p>

                                            <p dir="ltr" style="text-align: justify;">TF Cinemas bảo lưu quyền được
                                                chấm dứt, thay đổi bất kỳ dịch vụ, thông tin nào mà TF Cinemas cung cấp vào
                                                bất cứ lúc nào, theo quyết định của công ty mà không cần báo trước. Để truy
                                                cập và sử dụng các dịch vụ, thông tin của công ty, Quý khách có thể được yêu
                                                cầu cung cấp một số thông tin đăng ký nhất định khi Quý khách đăng ký thành
                                                viên/ đăng ký nhận bản tin.</p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách đảm bảo rằng tất cả
                                                các thông tin Quý khách cung cấp cho TF Cinemas là chính xác, đầy đủ và cập
                                                nhật. Quý khách đồng ý rằng tất cả các thông tin mà Quý khách cung cấp cho
                                                TF Cinemas thông qua Website được điều chỉnh bởi chính sách bảo mật của công
                                                ty .</p>

                                            <p dir="ltr" style="text-align: justify;">Nếu Quý khách lựa chọn, hoặc
                                                được cung cấp, một tên người dùng, mật khẩu hoặc bất kỳ phần nào khác của
                                                thông tin như là một phần của thủ tục an ninh, Quý khách có nghĩa vụ bảo mật
                                                các thông tin này, và không được tiết lộ cho bất kỳ người nào hoặc tổ chức
                                                nào khác.</p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách cũng xác nhận rằng
                                                tài khoản của Quý khách là dành riêng cho Quý khách và đồng ý không cung cấp
                                                thông tin tài khoản cho bất kỳ người nào khác để truy cập vào các dịch vụ,
                                                thông tin của TF Cinemas. Quý khách đồng ý thông báo cho TF Cinemas ngay lập
                                                tức bất kỳ việc truy cập trái phép nào có sử dụng đến tên sử dụng, mật khẩu
                                                của Quý khách.</p>

                                            <p dir="ltr" style="text-align: justify;">TF Cinemas có quyền vô hiệu hóa
                                                bất kỳ tên người dùng, mật khẩu hoặc số nhận dạng khác, đã được lựa chọn bởi
                                                Quý khách hoặc cung cấp bởi TF Cinemas, bất cứ lúc nào theo quyết định của
                                                TF Cinemas mà không cần thông báo lý do của việc vô hiệu hóa đó.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>3. Quyền sở hữu trí
                                                    tuệ</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Các Điều khoản sử dụng cho phép
                                                Quý khách sử dụng các dịch vụ của TF Cinemas cho cá nhân, cho mục đích phi
                                                thương mại.</p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách không được sao chép,
                                                phân phối, sửa đổi, hiển thị công khai, thực hiện công khai, tái xuất bản,
                                                tải về, lưu trữ hoặc truyền tải bất kỳ nội dung hoặc tài liệu có sẵn trên
                                                Website của TF Cinemas ngoại trừ trường hợp việc này được thực hiện tự động
                                                bởi máy tính/trình duyệt web mà Quý khách sử dụng, cần thiết cho việc truy
                                                cập và sử dụng các dịch vụ, thông tin của TF Cinemas.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>4. Thương hiệu</strong>
                                            </p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách không được sử dụng
                                                thương hiệu của TF Cinemas mà không có sự cho phép trước bằng văn bản của
                                                công ty. Các thương hiệu của các bên thứ ba, các biểu tượng, sản phẩm hoặc
                                                dịch vụ, thiết kế hay khẩu hiệu xuất hiện trên web không nhất thiết chỉ ra
                                                bất kỳ sự liên kết nào của các bên thứ ba đó.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>5. Hành vi nghiêm
                                                    cấm</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách chỉ có thể sử dụng
                                                các dịch vụ của TF Cinemas cho các mục đích hợp pháp và phù hợp với các điều
                                                khoản sử dụng. Quý khách đồng ý không sử dụng các dịch vụ của TF Cinemas cho
                                                bất kỳ hành vi hoặc mục đích vi phạm pháp luật.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>6. Đóng góp của thành
                                                    viên</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Các dịch vụ của TF Cinemas có
                                                thể chứa bảng tin, các trang web cá nhân hoặc cấu hình, chức năng nhắn tin
                                                và các tính năng tương tác khác (gọi chung là “Dịch vụ tương tác”) cho phép
                                                người dùng gửi, xuất bản, truyền tải cho người khác nội dung hoặc tài liệu
                                                (gọi chung là “những đóng góp của thành viên”), trên hoặc thông qua Dịch vụ
                                                của TF Cinemas.</p>

                                            <p dir="ltr" style="text-align: justify;">Bất kỳ thông tin nào Quý khách
                                                gửi đến các Dịch vụ của TF Cinemas sẽ không được coi là các thông tin bảo
                                                mật. Bằng cách cung cấp bất kỳ đóng góp nào trên các Dịch vụ của TF Cinemas,
                                                Quý khách cấp cho TF Cinemas quyền không thể thu hồi, đầy đủ, vĩnh viễn, và
                                                miễn phí để tái xuất bản, trưng bày, phân phối, sửa đổi.</p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách bảo đảm rằng Quý
                                                khách sở hữu hoặc kiểm soát mọi quyền đối với các thông tin đóng góp cho TF
                                                Cinemas. Quý khách đảm bảo tính hợp pháp, độ tin cậy, tính chính xác và phù
                                                hợp của các thông tin đó. TF Cinemas không chịu trách nhiệm với bất kỳ bên
                                                thứ ba nào, về nội dung hoặc tính chính xác của bất kỳ đóng góp nào của
                                                người dùng.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>7. Giám sát và Thi
                                                    hành</strong></p>

                                            <p dir="ltr" style="text-align: justify;">TF Cinemas có quyền: loại bỏ
                                                hoặc từ chối đưa lên bất kỳ thông tin đóng góp nào của thành viên theo đánh
                                                giá của công ty; thực hiện các sửa đổi mà TF Cinemas cho là cần thiết đối
                                                với các đóng góp của thành viên; tiết lộ danh tính của Quý khách hoặc các
                                                thông tin khác về Quý khách theo các yêu cầu của các cơ quan chức năng có
                                                thẩm quyền; chấm dứt hoặc đình chỉ truy cập của Quý khách đến tất cả hay một
                                                phần của Dịch vụ công ty cho bất kỳ hoặc không vì lý do gì.</p>

                                            <p dir="ltr" style="text-align: justify;">TF Cinemas không thực hiện xem
                                                xét các tài liệu trước khi nó được đăng tải trên các Dịch vụ của TF Cinemas,
                                                và không thể đảm bảo loại bỏ nhanh chóng các thông tin này sau khi nó đã
                                                được đăng.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>8. Tiêu chuẩn nội
                                                    dung</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Tiêu chuẩn áp dụng cho bất kỳ
                                                và tất cả các đóng góp của người sử dụng. Nội dung đóng góp của người dùng
                                                phải tuân thủ các quy định pháp luật.</p>

                                            <p dir="ltr" style="text-align: justify;">Theo đó, TF Cinemas không chịu
                                                trách nhiệm với bất kỳ bên thứ ba nào về việc TF Cinemas không thể loại bỏ
                                                kịp thời các thông tin đóng góp bởi thành viên trên các dịch vụ của TF
                                                Cinemas .</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>9. Vi phạm bản
                                                    quyền</strong></p>

                                            <p dir="ltr" style="text-align: justify;">TF Cinemas coi trọng vấn đề bản
                                                quyền và sẽ phản hồi lại các thông báo về việc vi phạm bản quyền theo đúng
                                                các quy định của pháp luật. Nếu Quý khách tin rằng bất kỳ thông tin nào cung
                                                cấp trên TF Cinemas vi phạm bản quyền của Quý khách, Quý khách có thể yêu
                                                cầu loại bỏ các thông tin này từ các dịch vụ của TF Cinemas bằng cách gửi
                                                thông báo cho TF Cinemas qua thư điện tử hoặc các hình thức liên lạc phù hợp
                                                khác.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>10. Dựa vào thông tin
                                                    cung cấp</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Các thông tin có sẵn trên hoặc
                                                thông qua Dịch vụ của TF Cinemas được cung cấp duy nhất cho mục đích thông
                                                tin chung. TF Cinemas có thể cập nhật các thông tin này theo thời gian,
                                                nhưng nội dung của nó không nhất thiết phải hoàn chỉnh hoặc được cập nhật
                                                một cách đầy đủ. Bất kỳ thông tin nào có sẵn trên Website có thể được thay
                                                đổi tại bất kỳ thời điểm nào, và TF Cinemas không có nghĩa vụ phải cập nhật
                                                thông tin như vậy.</p>

                                            <p dir="ltr" style="text-align: justify;">Thông tin được cung cấp trên TF
                                                Cinemas cho mục đích thông tin chung. Chúng tôi từ chối bất kỳ và tất cả các
                                                trách nhiệm liên quan đến độ chính xác, hoàn thiện, tin cậy, hiệu quả, sử
                                                dụng, hoặc kết quả sử dụng các thông tin công bố trên TF Cinemas; và Quý
                                                khách chịu trách nhiệm hoàn toàn với bất kỳ hành động nào dựa vào việc sử
                                                dụng bất cứ thông tin công bố trên TF Cinemas.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>11. Từ chối các bảo
                                                    đảm</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Quý khách hiểu rằng TF Cinemas
                                                không thể và không đảm bảo những tập tin có sẵn để tải về từ Internet hoặc
                                                các trang web sẽ không chứa virus hoặc các mã phá hoại khác. Quý khách chịu
                                                trách nhiệm thực hiện đầy đủ thủ tục kiểm tra để đáp ứng các yêu cầu cụ thể
                                                để bảo vệ Quý khách chống virus và các chương trình phá hoại.</p>

                                            <p dir="ltr" style="text-align: justify;"><strong>12. Miễn trừ trách
                                                    nhiệm pháp lý</strong></p>

                                            <p dir="ltr" style="text-align: justify;">Trong bất cứ trường hợp nào, TF
                                                Cinemas sẽ không chịu trách nhiệm với Quý khách hoặc bất kỳ người nào khác/
                                                bên thứ ba nào khác cho mọi, hậu quả phát sinh bên ngoài hoặc liên quan đến
                                                những điều khoản sử dụng và/hoặc những dịch vụ của TF Cinemas.</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                        <div class="tab-pane fade" id="tab-8">
                                            <div class="text-center">
                                                <img id="BodyContent_ctl00_ctl03_imgAnhDaiDienLienHeQuangCao"
                                                    class="img-responsive margin-bottom-30 margin-top-20" src=""
                                                    style="display: initial;">
                                            </div>
                                            <h2 class="text-uppercase">
                                                Thông tin quảng cáo
                                            </h2>

                                            <p style="text-align: justify;"><strong>THƯ NGỎ</strong></p>

                                            <p style="text-align: justify;">Phương châm của TF “<strong>Your Success is Our
                                                    Success too</strong>&nbsp;-&nbsp;<strong><em>thành công của bạn cũng là
                                                        thành công của chúng tôi”</em></strong>&nbsp;với mục tiêu trở thành
                                                doanh nghiệp hàng đầu trong lĩnh vực truyền thông, TF tin tưởng là cầu nối
                                                làm gia tăng mức độ nhận biết thương hiệu của các đối tác.</p>

                                            <p style="text-align: justify;">Theo khảo sát&nbsp; có tới:</p>

                                            <p style="text-align: justify;">- 74&nbsp;% khách hàng thường xuyên của TF có
                                                độ tuổi nằm trong khoảng từ 13&nbsp;đến 30, là phân khúc khách hàng nhạy cảm
                                                nhất với xu hướng mới</p>

                                            <p style="text-align: justify;">- Tỉ lệ sẵn sàng dùng thử sản phẩm mới của độ
                                                tuổi này lên tới 53 %</p>

                                            <p style="text-align: justify;">Với mức giá cực kỳ canh tranh, TF tin tưởng sẽ
                                                là nơi xứng đáng cho việc quảng cáo sản phẩm của các doanh nghiệp</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;"><strong>MỨC ĐỘ HÀI LÒNG CỦA KHÁCH HÀNG</strong>
                                            </p>

                                            <p style="text-align: justify;">Trên 60 % khách hàng phản hồi rằng việc quảng
                                                cáo tại rạp chiếu phim giúp khách hàng cập nhật thông tin về sản phẩm và
                                                dịch vụ mới</p>

                                            <p style="text-align: justify;">Trên 55% khách hàng phản hồi rằng việc quảng
                                                cáo kích thích tâm lý dùng thử của khách hàng</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;"><strong>VỊ TRÍ ĐẶT QUẢNG CÁO</strong></p>

                                            <p style="text-align: justify;">Tại rạp&nbsp;<strong>TF Cinemas:</strong></p>

                                            <p style="text-align: justify;">Trên ghế ngồi xem phim. đến tháng
                                                6/2018&nbsp;<strong>TF Cinemas&nbsp;</strong>sở hữu 48&nbsp;phòng chiếu phim
                                                với trang thiết bị hiện đại với tổng số ghế của 10&nbsp;cụm rạp lên đến
                                                8.000 ghế.</p>

                                            <p style="text-align: justify;">Trên màn hình. Các phòng chiếu
                                                của&nbsp;<strong>TF Cinemas&nbsp;</strong>đều chất lượng âm thanh, hình ảnh
                                                chuẩn Hollywood: màn chiếu Barco, dàn âm thanh Dolby 7.1, màn chiếu chất
                                                lượng cao cho hình ảnh chân thật, sống động nhất.</p>

                                            <p style="text-align: justify;">Trên màn hình TV. Bên trên quầy bán vé và quầy
                                                bán đồ ăn uống của&nbsp;<strong>TF Cinemas&nbsp;</strong>được trang bị các
                                                màn hình TV cỡ lớn, hình ảnh sắc nét giúp quảng bá sản phẩm, thương hiệu của
                                                bạn tới khách hàng một cách thật dễ dàng.</p>

                                            <p style="text-align: justify;">Standee, biển hộp đèn… Phía ngoài của chính và
                                                bên trong rạp đều được lắp đặt hệ thống biển hộp đèn kích thước lớn, các
                                                standee được đặt tại những vị trí bắt mắt nhất khiến sản phẩm, thương hiệu
                                                của bạn trở nên sinh động, thu hút khách hàng hơn.</p>

                                            <p style="text-align: justify;">&nbsp;</p>

                                            <p style="text-align: justify;">Để được tư vấn cụ thể hơn, Quý khách vui lòng
                                                liên hệ với Hotline: <strong>0934 632 682&nbsp;</strong></p>

                                            <p style="text-align: justify;">Cảm ơn Quý khách đã quan tâm và ủng hộ đến TF,
                                            </p>

                                            <p style="text-align: justify;">TF Cinemas</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                        <div class="tab-pane fade" id="tab-9">
                                            <div class="text-center">

                                            </div>
                                            <h2 class="text-uppercase">
                                                Điều Khoản Bảo Mật
                                            </h2>

                                            <p style="text-align: justify;">CHÍNH SÁCH BẢO MẬT THÔNG TIN CÁ NHÂN KHÁCH HÀNG
                                            </p>

                                            <p style="text-align: justify;"><strong>1. &nbsp; Mục đích và phạm vi thu
                                                    thập</strong></p>

                                            <p style="text-align: justify;">Việc thu thập dữ liệu chủ yếu trên website
                                                TFcinemas.vn bao gồm: email, điện thoại, số chứng minh thư nhân dân/căn cước
                                                công dân, mật khẩu đăng nhập, địa chỉ khách hàng (thành viên). Đây là các
                                                thông tin mà website TFcinemas.vn cần thành viên cung cấp bắt buộc khi đăng
                                                ký sử dụng dịch vụ và để website TFcinemas.vn liên hệ xác nhận khi khách
                                                hàng đăng ký sử dụng dịch vụ trên website TFcinemas.vn nhằm đảm bảo quyền
                                                lợi cho người tiêu dùng.</p>

                                            <p style="text-align: justify;">Trong quá trình giao dịch thanh toán Website
                                                TFcinemas.vn, chúng tôi chỉ lưu giữ thông tin chi tiết về đơn hàng đã thanh
                                                toán của thành viên, các thông tin về số tài khoản ngân hàng của thành viên
                                                sẽ không được lưu giữ.</p>

                                            <p style="text-align: justify;">Các thành viên sẽ tự chịu trách nhiệm về bảo
                                                mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới tên đăng ký, mật khẩu và
                                                hộp thư điện tử của mình. Ngoài ra, thành viên có trách nhiệm thông báo kịp
                                                thời cho Ban quản lý website TFcineplex.vn về những hành vi sử dụng trái
                                                phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ
                                                ba để có biện pháp giải quyết phù hợp.</p>

                                            <p style="text-align: justify;"><strong>2. Phạm vi sử dụng thông tin</strong>
                                            </p>

                                            <p style="text-align: justify;">Công ty sử dụng thông tin thành viên cung cấp
                                                để:</p>

                                            <p style="text-align: justify;">- Cung cấp các dịch vụ đến thành viên;</p>

                                            <p style="text-align: justify;">- Gửi các thông báo về các hoạt động trao đổi
                                                thông tin giữa thành viên và website TFcinemas.vn;</p>

                                            <p style="text-align: justify;">- Ngăn ngừa các hoạt động phá hủy tài khoản
                                                người dùng của thành viên hoặc các hoạt động giả mạo thành viên;</p>

                                            <p style="text-align: justify;">- Liên lạc và giải quyết với thành viên trong
                                                những trường hợp đặc biệt.</p>

                                            <p style="text-align: justify;">- Không sử dụng thông tin cá nhân của thành
                                                viên ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch tại
                                                website TFcinemas.vn.</p>

                                            <p style="text-align: justify;">- Trong trường hợp có yêu cầu của pháp luật:
                                                Công ty có trách nhiệm hợp tác cung cấp thông tin cá nhân thành viên khi có
                                                yêu cầu từ cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an
                                                điều tra liên quan đến hành vi vi phạm pháp luật nào đó của khách hàng.
                                                Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của thành viên.
                                            </p>

                                            <p style="text-align: justify;">- Trong những trường hợp còn lại, chúng tôi sẽ
                                                có thông báo cụ thể cho Quý Khách Hàng khi phải tiết lộ thông tin cho một
                                                bên thứ ba và thông tin này chỉ được cung cấp khi được sự phản hồi đồng ‎ý‎
                                                từ phía Quý Khách Hàng. VD: các chương trình khuyến mãi có sự hợp tác, tài
                                                trợ với các đối tác của Công ty TF; cung cấp các thông tin giao nhận cần
                                                thiết cho các đơn vị vận chuyển.</p>

                                            <p style="text-align: justify;"><strong>3. Thời gian lưu trữ thông tin</strong>
                                            </p>

                                            <p style="text-align: justify;">- Dữ liệu cá nhân của khách hàng sẽ được lưu
                                                trữ cho đến khi có yêu cầu hủy bỏ hoặc tự khách hàng đăng nhập và thực hiện
                                                hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân khách hàng sẽ được
                                                bảo mật trên máy chủ của website TFcinemas.vn.</p>

                                            <p style="text-align: justify;"><strong>4. Những người hoặc tổ chức có thể được
                                                    tiếp cận với thông tin đó</strong></p>

                                            <p style="text-align: justify;">- Ban quản lý website TFcinemas.vn và các bộ
                                                phận liên quan đến việc hỗ trợ và thực hiện hợp đồng với người tiêu dùng.
                                            </p>

                                            <p style="text-align: justify;">- Trong trường hợp có yêu cầu của pháp luật:
                                                Công ty có trách nhiệm hợp tác cung cấp thông tin cá nhân khách hàng khi có
                                                yêu cầu từ cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an
                                                điều tra liên quan đến hành vi vi phạm pháp luật nào đó của khách hàng.
                                                Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của khách hàng.
                                            </p>

                                            <p style="text-align: justify;"><strong>5. Địa chỉ của đơn vị thu thập và quản
                                                    lý thông tin cá nhân</strong></p>

                                            <p style="text-align: justify;">Công ty Cổ Phần TF MEDIA</p>

                                            <p style="text-align: justify;">Tầng 3, số 595, đường Giải Phóng, phường Giáp
                                                Bát, quận Hoàng Mai, thành phố Hà Nội</p>

                                            <p style="text-align: justify;">Email: cskh@TFcorp.vn</p>

                                            <p style="text-align: justify;">Hoặc liên hệ hotline: 0934 632 682</p>

                                            <p style="text-align: justify;">Đối với các thắc mắc về hoạt động thu thập, xử
                                                lý thông tin liên quan đến cá nhân người tiêu dùng, khách hàng có thể liên
                                                hệ hotline</p>

                                            <p style="text-align: justify;"><strong>6. Phương thức và công cụ để người tiêu
                                                    dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</strong></p>

                                            <p style="text-align: justify;">- Thành viên có quyền tự kiểm tra, cập nhật,
                                                điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách đăng nhập vào
                                                tài khoản đã được cấp trên website TFcinemas.vn. Sau đó, chọn mục “Thông tin
                                                cá nhân” để thực hiện việc chỉnh sửa theo yêu cầu của người tiêu dùng.</p>

                                            <p style="text-align: justify;"><strong>7. Cam kết bảo mật thông tin cá nhân
                                                    khách hàng</strong></p>

                                            <p style="text-align: justify;">- Thông tin cá nhân của thành viên trên Website
                                                TFcinemas.vn được Công ty Cổ phần TF Media cam kết bảo mật tuyệt đối theo
                                                chính sách bảo vệ thông tin cá nhân của Công ty. Việc thu thập và sử dụng
                                                thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách
                                                hàng đó trừ những trường hợp pháp luật có quy định khác.</p>

                                            <p style="text-align: justify;">- Không sử dụng, không chuyển giao, cung cấp
                                                hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của thành viên khi không
                                                có sự cho phép đồng ý từ thành viên.</p>

                                            <p style="text-align: justify;">- Trong trường hợp máy chủ lưu trữ thông tin bị
                                                hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, Website
                                                TFcinemas.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều
                                                tra xử lý kịp thời và thông báo cho thành viên được biết.</p>

                                            <p style="text-align: justify;">- Bảo mật tuyệt đối mọi thông tin giao dịch
                                                trực tuyến của thành viên bao gồm thông tin hóa đơn kế toán chứng từ số hóa
                                                tại khu vực dữ liệu trung tâm an toàn cấp 1 của Website TFcinemas.vn.</p>

                                            <p style="text-align: justify;">- Ban quản lý Website TFcinemas.vn yêu cầu các
                                                cá nhân khi đăng ký/mua hàng là Thành viên, phải cung cấp đầy đủ thông tin
                                                cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, số chứng minh
                                                nhân dân, điện thoại, số tài khoản, số thẻ thanh toán … và chịu trách nhiệm
                                                về tính pháp lý của những thông tin trên. Ban quản lý Website TFcinemas.vn
                                                không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan
                                                đến quyền lợi của thành viên đó nếu xét thấy tất cả thông tin cá nhân của
                                                thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.</p>

                                            <p style="text-align: justify;"><strong>8. Cơ chế tiếp nhận và giải quyết khiếu
                                                    nại liên quan đến việc thông tin cá nhân khách hàng</strong></p>

                                            <p style="text-align: justify;">- Khi phát hiện thông tin cá nhân của mình bị
                                                sử dụng sai mục đích hoặc phạm vi, thành viên có thể cung cấp các thông tin,
                                                chứng cứ liên quan đến việc này theo địa chỉ:&nbsp;</p>

                                            <p style="text-align: justify;">Công ty Cổ Phần TF MEDIA</p>

                                            <p style="text-align: justify;">Tầng 3, số 595, đường Giải Phóng, phường Giáp
                                                Bát, quận Hoàng Mai, thành phố Hà Nội</p>

                                            <p style="text-align: justify;">Email: cskh@TFcorp.vn</p>

                                            <p style="text-align: justify;">Hoặc liên hệ hotline: 0934 632 682</p>

                                            <p style="text-align: justify;">Trong thời hạn 10 ngày làm việc kể từ ngày nhận
                                                được khiếu nại của thành viên, Bộ phận/đơn vị chủ trì giải quyết khiếu nại
                                                có trách nhiệm tìm ra nguyên nhân khiếu nại và đưa ra phương án giải quyết.
                                                Trả lời cho thành viên về kết quả giải quyết khiếu nại. Tùy theo mức độ,
                                                tính chất của việc khiếu nại mà Bộ phận/đơn vị chủ trì giải quyết khiếu nại
                                                sẽ có biện pháp giải quyết cụ thể.</p>

                                            <p style="text-align: justify;">Nếu thông qua hình thức thỏa thuận mà vẫn không
                                                thể giải quyết được khiếu nại của thành viên thì một trong hai bên sẽ có
                                                quyền nhờ đến cơ quan pháp luật có thẩm quyền can thiệp nhằm đảm bảo lợi ích
                                                hợp pháp của các bên.</p>

                                            <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END TABS -->
                        </div>
                    </div>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            jQuery(document).ready(function() {
                                Layout.init();
                                Layout.initOWL();
                            });
                            $("img.scale").imageScale();
                        });
                    </script>
                @endsection
