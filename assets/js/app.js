/*!
 
██╗███╗░░██╗████████╗███████╗██████╗░░██████╗███╗░░░███╗░█████╗░██████╗░████████╗
██║████╗░██║╚══██╔══╝██╔════╝██╔══██╗██╔════╝████╗░████║██╔══██╗██╔══██╗╚══██╔══╝
██║██╔██╗██║░░░██║░░░█████╗░░██████╔╝╚█████╗░██╔████╔██║███████║██████╔╝░░░██║░░░
██║██║╚████║░░░██║░░░██╔══╝░░██╔══██╗░╚═══██╗██║╚██╔╝██║██╔══██║██╔══██╗░░░██║░░░
██║██║░╚███║░░░██║░░░███████╗██║░░██║██████╔╝██║░╚═╝░██║██║░░██║██║░░██║░░░██║░░░
╚═╝╚═╝░░╚══╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚═════╝░╚═╝░░░░░╚═╝╚═╝░░╚═╝╚═╝░░╚═╝░░░╚═╝░░░
 
 * Disigned & Developed by Intersmart Solutions (https://intersmartsolution.com)
 * Copyright 2011-2022 Intersmart Solutions pvt LTD.
 */
/******************************************/
/************** SMOOTHSCROll **************/
/******************************************/
! function () {
    var s, i, c, a, o = { frameRate: 150, animationTime: 400, stepSize: 100, pulseAlgorithm: !0, pulseScale: 4, pulseNormalize: 1, accelerationDelta: 50, accelerationMax: 3, keyboardSupport: !0, arrowScroll: 50, fixedBackground: !0, excluded: "" },
        p = o,
        u = !1,
        d = !1,
        n = { x: 0, y: 0 },
        f = !1,
        m = document.documentElement,
        l = [],
        h = /^Mac/.test(navigator.platform),
        w = { left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36 },
        v = { 37: 1, 38: 1, 39: 1, 40: 1 };

    function y() {
        if (!f && document.body) {
            f = !0;
            var e = document.body,
                t = document.documentElement,
                o = window.innerHeight,
                n = e.scrollHeight;
            if (m = 0 <= document.compatMode.indexOf("CSS") ? t : e, s = e, p.keyboardSupport && Y("keydown", x), top != self) d = !0;
            else if (Q && o < n && (e.offsetHeight <= o || t.offsetHeight <= o)) {
                var r, a = document.createElement("div");
                a.style.cssText = "position:absolute; z-index:-10000; top:0; left:0; right:0; height:" + m.scrollHeight + "px", document.body.appendChild(a), c = function () { r = r || setTimeout(function () { u || (a.style.height = "0", a.style.height = m.scrollHeight + "px", r = null) }, 500) }, setTimeout(c, 10), Y("resize", c);
                if ((i = new R(c)).observe(e, { attributes: !0, childList: !0, characterData: !1 }), m.offsetHeight <= o) {
                    var l = document.createElement("div");
                    l.style.clear = "both", e.appendChild(l)
                }
            }
            p.fixedBackground || u || (e.style.backgroundAttachment = "scroll", t.style.backgroundAttachment = "scroll")
        }
    }
    var b = [],
        g = !1,
        r = Date.now();

    function S(d, f, m) {
        if (function (e, t) { e = 0 < e ? 1 : -1, t = 0 < t ? 1 : -1, n.x === e && n.y === t || (n.x = e, n.y = t, b = [], r = 0) }(f, m), 1 != p.accelerationMax) {
            var e = Date.now() - r;
            if (e < p.accelerationDelta) {
                var t = (1 + 50 / e) / 2;
                1 < t && (t = Math.min(t, p.accelerationMax), f *= t, m *= t)
            }
            r = Date.now()
        }
        if (b.push({ x: f, y: m, lastX: f < 0 ? .99 : -.99, lastY: m < 0 ? .99 : -.99, start: Date.now() }), !g) {
            var o = q(),
                h = d === o || d === document.body;
            null == d.$scrollBehavior && function (e) {
                var t = M(e);
                if (null == B[t]) {
                    var o = getComputedStyle(e, "")["scroll-behavior"];
                    B[t] = "smooth" == o
                }
                return B[t]
            }(d) && (d.$scrollBehavior = d.style.scrollBehavior, d.style.scrollBehavior = "auto");
            var w = function (e) {
                for (var t = Date.now(), o = 0, n = 0, r = 0; r < b.length; r++) {
                    var a = b[r],
                        l = t - a.start,
                        i = l >= p.animationTime,
                        c = i ? 1 : l / p.animationTime;
                    p.pulseAlgorithm && (c = F(c));
                    var s = a.x * c - a.lastX >> 0,
                        u = a.y * c - a.lastY >> 0;
                    o += s, n += u, a.lastX += s, a.lastY += u, i && (b.splice(r, 1), r--)
                }
                h ? window.scrollBy(o, n) : (o && (d.scrollLeft += o), n && (d.scrollTop += n)), f || m || (b = []), b.length ? j(w, d, 1e3 / p.frameRate + 1) : (g = !1, null != d.$scrollBehavior && (d.style.scrollBehavior = d.$scrollBehavior, d.$scrollBehavior = null))
            };
            j(w, d, 0), g = !0
        }
    }

    function e(e) {
        f || y();
        var t = e.target;
        if (e.defaultPrevented || e.ctrlKey) return !0;
        if (N(s, "embed") || N(t, "embed") && /\.pdf/i.test(t.src) || N(s, "object") || t.shadowRoot) return !0;
        var o = -e.wheelDeltaX || e.deltaX || 0,
            n = -e.wheelDeltaY || e.deltaY || 0;
        h && (e.wheelDeltaX && K(e.wheelDeltaX, 120) && (o = e.wheelDeltaX / Math.abs(e.wheelDeltaX) * -120), e.wheelDeltaY && K(e.wheelDeltaY, 120) && (n = e.wheelDeltaY / Math.abs(e.wheelDeltaY) * -120)), o || n || (n = -e.wheelDelta || 0), 1 === e.deltaMode && (o *= 40, n *= 40);
        var r = z(t);
        return r ? !! function (e) {
            if (!e) return;
            l.length || (l = [e, e, e]);
            e = Math.abs(e), l.push(e), l.shift(), clearTimeout(a), a = setTimeout(function () { try { localStorage.SS_deltaBuffer = l.join(",") } catch (e) { } }, 1e3);
            var t = 120 < e && P(e),
                o = !P(120) && !P(100) && !t;
            return e < 50 || o
        }(n) || (1.2 < Math.abs(o) && (o *= p.stepSize / 120), 1.2 < Math.abs(n) && (n *= p.stepSize / 120), S(r, o, n), e.preventDefault(), void C()) : !d || !W || (Object.defineProperty(e, "target", { value: window.frameElement }), parent.wheel(e))
    }

    function x(e) {
        var t = e.target,
            o = e.ctrlKey || e.altKey || e.metaKey || e.shiftKey && e.keyCode !== w.spacebar;
        document.body.contains(s) || (s = document.activeElement);
        var n = /^(button|submit|radio|checkbox|file|color|image)$/i;
        if (e.defaultPrevented || /^(textarea|select|embed|object)$/i.test(t.nodeName) || N(t, "input") && !n.test(t.type) || N(s, "video") || function (e) {
            var t = e.target,
                o = !1;
            if (-1 != document.URL.indexOf("www.youtube.com/watch"))
                do { if (o = t.classList && t.classList.contains("html5-video-controls")) break } while (t = t.parentNode);
            return o
        }(e) || t.isContentEditable || o) return !0;
        if ((N(t, "button") || N(t, "input") && n.test(t.type)) && e.keyCode === w.spacebar) return !0;
        if (N(t, "input") && "radio" == t.type && v[e.keyCode]) return !0;
        var r = 0,
            a = 0,
            l = z(s);
        if (!l) return !d || !W || parent.keydown(e);
        var i = l.clientHeight;
        switch (l == document.body && (i = window.innerHeight), e.keyCode) {
            case w.up:
                a = -p.arrowScroll;
                break;
            case w.down:
                a = p.arrowScroll;
                break;
            case w.spacebar:
                a = -(e.shiftKey ? 1 : -1) * i * .9;
                break;
            case w.pageup:
                a = .9 * -i;
                break;
            case w.pagedown:
                a = .9 * i;
                break;
            case w.home:
                l == document.body && document.scrollingElement && (l = document.scrollingElement), a = -l.scrollTop;
                break;
            case w.end:
                var c = l.scrollHeight - l.scrollTop - i;
                a = 0 < c ? 10 + c : 0;
                break;
            case w.left:
                r = -p.arrowScroll;
                break;
            case w.right:
                r = p.arrowScroll;
                break;
            default:
                return !0
        }
        S(l, r, a), e.preventDefault(), C()
    }

    function t(e) { s = e.target }
    var k, D, M = (k = 0, function (e) { return e.uniqueID || (e.uniqueID = k++) }),
        E = {},
        T = {},
        B = {};

    function C() { clearTimeout(D), D = setInterval(function () { E = T = B = {} }, 1e3) }

    function H(e, t, o) { for (var n = o ? E : T, r = e.length; r--;) n[M(e[r])] = t; return t }

    function z(e) {
        var t = [],
            o = document.body,
            n = m.scrollHeight;
        do { var r = (!1 ? E : T)[M(e)]; if (r) return H(t, r); if (t.push(e), n === e.scrollHeight) { var a = O(m) && O(o) || X(m); if (d && L(m) || !d && a) return H(t, q()) } else if (L(e) && X(e)) return H(t, e) } while (e = e.parentElement)
    }

    function L(e) { return e.clientHeight + 10 < e.scrollHeight }

    function O(e) { return "hidden" !== getComputedStyle(e, "").getPropertyValue("overflow-y") }

    function X(e) { var t = getComputedStyle(e, "").getPropertyValue("overflow-y"); return "scroll" === t || "auto" === t }

    function Y(e, t, o) { window.addEventListener(e, t, o || !1) }

    function A(e, t, o) { window.removeEventListener(e, t, o || !1) }

    function N(e, t) { return e && (e.nodeName || "").toLowerCase() === t.toLowerCase() }
    if (window.localStorage && localStorage.SS_deltaBuffer) try { l = localStorage.SS_deltaBuffer.split(",") } catch (e) { }

    function K(e, t) { return Math.floor(e / t) == e / t }

    function P(e) { return K(l[0], e) && K(l[1], e) && K(l[2], e) }
    var $, j = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (e, t, o) { window.setTimeout(e, o || 1e3 / 60) },
        R = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver,
        q = ($ = document.scrollingElement, function () {
            if (!$) {
                var e = document.createElement("div");
                e.style.cssText = "height:10000px;width:1px;", document.body.appendChild(e);
                var t = document.body.scrollTop;
                document.documentElement.scrollTop, window.scrollBy(0, 3), $ = document.body.scrollTop != t ? document.body : document.documentElement, window.scrollBy(0, -3), document.body.removeChild(e)
            }
            return $
        });

    function V(e) { var t; return ((e *= p.pulseScale) < 1 ? e - (1 - Math.exp(-e)) : (e -= 1, (t = Math.exp(-1)) + (1 - Math.exp(-e)) * (1 - t))) * p.pulseNormalize }

    function F(e) { return 1 <= e ? 1 : e <= 0 ? 0 : (1 == p.pulseNormalize && (p.pulseNormalize /= V(1)), V(e)) }
    var I = window.navigator.userAgent,
        _ = /Edge/.test(I),
        W = /chrome/i.test(I) && !_,
        U = /safari/i.test(I) && !_,
        G = /mobile/i.test(I),
        J = /Windows NT 6.1/i.test(I) && /rv:11/i.test(I),
        Q = U && (/Version\/8/i.test(I) || /Version\/9/i.test(I)),
        Z = (W || U || J) && !G,
        ee = !1;
    try { window.addEventListener("test", null, Object.defineProperty({}, "passive", { get: function () { ee = !0 } })) } catch (e) { }
    var te = !!ee && { passive: !1 },
        oe = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";

    function ne(e) { for (var t in e) o.hasOwnProperty(t) && (p[t] = e[t]) }
    oe && Z && (Y(oe, e, te), Y("mousedown", t), Y("load", y)), ne.destroy = function () { i && i.disconnect(), A(oe, e), A("mousedown", t), A("keydown", x), A("resize", c), A("load", y) }, window.SmoothScrollOptions && ne(window.SmoothScrollOptions), "function" == typeof define && define.amd ? define(function () { return ne }) : "object" == typeof exports ? module.exports = ne : window.SmoothScroll = ne
}();



/************************************/
/************** HEADER **************/
/************************************/

(function () {

    var doc = document.documentElement;
    var w = window;

    /*
    define four variables: curScroll, prevScroll, curDirection, prevDirection
    */

    var curScroll;
    var prevScroll = w.scrollY || doc.scrollTop;
    var curDirection = 0;
    var prevDirection = 0;

    var header = document.getElementById('Header');
    var toggled;
    var threshold = 200;

    var checkScroll = function () {
        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
            // scrolled down
            curDirection = 2;
        } else {
            //scrolled up
            curDirection = 1;
        }

        if (curScroll == 0) {
            header.classList.remove('sticky');
        }
        if (curDirection !== prevDirection) {
            toggled = toggleHeader();
        }

        prevScroll = curScroll;
        if (toggled) {
            prevDirection = curDirection;
        }
    };

    var toggleHeader = function () {

        toggled = true;
        if (curDirection === 2 && curScroll > threshold) {
            header.classList.add('hide');
            header.classList.remove('sticky');
        } else if (curDirection === 1) {
            header.classList.remove('hide');
            header.classList.add('sticky');

        } else {
            toggled = false;
        }
        return toggled;
    };

    window.addEventListener('scroll', checkScroll);

})();
/************ SEARCH ************/
$(document).ready(function () {
    $('.SearchModal').on('shown.bs.modal', function () {
        $('[type="search"').focus();
    })

    // HEADER_MENU
    $('#HeaderPOP').on("shown.bs.modal", function () {
        $(".MenuIcon").addClass("open");
        $(".modal-backdrop").hide();
    });
    $('#HeaderPOP').on("hide.bs.modal", function () {
        $(".MenuIcon").removeClass("open");
        $(".modal-backdrop").show();
    });
});

$("#Header .MenuIcon button").click(function () {
    $(".modal-backdrop").hide();
});

// if (window.matchMedia('(min-width: 992px)').matches) {
//     $('#HeaderPOP').on("shown.bs.modal", function () {
//         $(".modal-backdrop").hide();
//     });
// } else {
//     $('#HeaderPOP').on("shown.bs.modal", function () {
//         $(".modal-backdrop").show();
//     });
// }

/********************************************/
/************ GLOBAL SCRIPTS ****************/
/********************************************/

/************ WATERMARK ************/
var str = "InterSmart Solutions https://www.intersmartsolution.com";
console.log("Powered by " + str);


/************ SELECT 2 ************/
$("select").select2({
    minimumResultsForSearch: Infinity,
    theme: "bootstrap-5",
    containerCssClass: "select2--small", // For Select2 v4.0
    selectionCssClass: "select2--small", // For Select2 v4.1
    dropdownCssClass: "select2--small",
});

/***************************************/
/************SCROLLTOP****************/
/***************************************/
$(document).ready(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() > 1500) {

            $('.scrollup').fadeIn();
            $('.scrollup').css('display', 'block');
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

});
/************ MOBILE SHARE ************/
$(".MobShare").click(function () {
    $(this).toggleClass("open");
    $(".fixedRit ul").toggleClass("show");
});

/************ AOS ************/
AOS.init({
    throttleDelay: 99,
    duration: 800,
    once: true,
    mirror: true,
});


/********************************/
/************ FOOTER ************/
/********************************/

// $(document).ready(function () {
//     if ($(window).width() <= 468) {
//         $("footer .collapse").removeClass("show")
//         $("footer .accordion-header button").attr("aria-expanded", "false");
//     }
// });

// QUANTITY INCREMENT
$('.btn-number').click(function (e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function () {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});