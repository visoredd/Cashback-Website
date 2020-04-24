 window.CD = {
    c: {},
    p: {}
}, CD.config = function() {
    var e = {
        Android: function() {
            return navigator.userAgent.match(/Android/i)
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i)
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i)
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i)
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i)
        },
        any: function() {
            return e.Android() || e.BlackBerry() || e.iOS() || e.Opera() || e.Windows()
        }
    };
    return {
        BASE_URL: "https://www.coupondunia.in",
        CMS_BASE_URL: "https://cmsprod.coupondunia.in",
        NOTIFICATION_URL: "https://www.coupondunia.in/cd-api/notifications",
        prod_cdn: "https://d1nrhamtcpp354.cloudfront.net",
        FACEBOOK: {
            JS_SRC: "//connect.facebook.net/en_US/sdk.js"
        },
        GOOGLE_LOGIN: {
            CLIENT_ID: "608876151977-raj3kuj6fp4dtd4v72fvmmlo4t6707o5.apps.googleusercontent.com",
            COOKIE_POLICY: "single_host_origin"
        },
        FACEBOOK_LOGIN: {
            appId: "137416682991324",
            xfbml: !0,
            version: "v2.7"
        },
        DESKTOP_URL: "https://www.coupondunia.in/",
        MOBILE_URL: "https://m.coupondunia.in/",
        ANDROID_URL: "https://306429.measurementapi.com/serve?action=click&publisher_id=306429&site_id=67270&destination_id=88434&sub_placement=xpromo",
        IPHONE_URL: "https://306429.measurementapi.com/serve?action=click&publisher_id=306429&site_id=71552&destination_id=105516&sub_placement=xpromo",
        platform: e,
        DOMAIN_NAME: "coupondunia.in",
        CHROME_EXTENSION_ID: "iledpgbdhgeianadegpmahgpieckekfp"
    }
}();
var _config = CD.config;
CD.c.loader = function() {
    function e() {
        a.loader = $("#common-loader")
    }

    function o(e) {
        a.loader[e ? "show" : "hide"]()
    }

    function t() {
        e()
    }
    var a = {};
    return t(), {
        show: o
    }
}();
var _loader = CD.c.loader;
CD.c.util = function(e, o) {
    function t(o, t, a, s, r, n, i, l, c, d) {
        void 0 === i && (i = "json");
        var u = {
            url: o,
            type: t
        };
        return l ? l["Is-Ajax"] = !0 : l = {
            "Is-Ajax": !0
        }, a && (u.data = a), s && (u.success = s), r && (u.error = r), i && (u.dataType = i), l && (u.headers = l), c && (u.complete = c), d && (u.xhrFields = d), n && (u.beforeSend = function() {
            e.show(!0)
        }, u.complete = function() {
            e.show(!1)
        }), $.ajax(u)
    }

    function a(e) {
        var o = new Date(e.replace(/\-/g, "/")),
            t = o.getTime();
        t = new Date(t + 198e5);
        var a = t.getFullYear(),
            s = t.getMonth() + 1;
        s < 10 && (s = "0" + s);
        var o = t.getDate();
        o < 10 && (o = "0" + o);
        var r = t.getHours();
        r < 10 && (r = "0" + r);
        var n = t.getMinutes();
        n < 10 && (n = "0" + n);
        var i = t.getSeconds();
        i < 10 && (i = "0" + i);
        var l = a + "-" + s + "-" + o + " " + r + ":" + n + ":" + i;
        return l
    }

    function s(e, o) {
        if ("d/m/yyyy" == o) {
            var t = e.split("-"),
                a = t[0],
                s = t[1],
                r = t[2];
            return a + "/" + I[s] + "/" + r
        }
        return e
    }

    function r(e) {
        var o = ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"],
            t = new Date(e);
        return t = o[t.getMonth()] + " " + t.getDate() + ", " + t.getFullYear()
    }

    function n() {
        !!window.chrome && !!window.chrome.webstore, "undefined" != typeof InstallTrigger
    }

    function l(e, t, a, s, r) {
        void 0 == s && (s = "/"), void 0 == r && (r = o.DOMAIN_NAME), void 0 == a && (a = 1);
        var n = new Date;
        n.setTime(n.getTime() + 24 * a * 60 * 60 * 1e3);
        var i = "expires=" + n.toUTCString();
        document.cookie = e + "=" + t + "; " + i + ";domain= " + r + ";path=" + s
    }

    function c() {
        var e = document.cookie;
        e = e.split(";");
        for (var o = {}, t = 0; t < e.length; t++) {
            var a = e[t].split("=");
            o[a[0].trim()] = a[1]
        }
        return o
    }

    function d(e) {
        var o = c();
        for (var t in o)
            if (t === e) return o[t];
        return null
    }

    function u(e, t, a, s, r) {
        void 0 == s && (s = "/"), void 0 == r && (r = o.DOMAIN_NAME), void 0 == a && (a = 1);
        var n = new Date;
        n.setTime(n.getTime() + 24 * a * 60 * 60 * 1e3);
        var i = "expires=" + n.toUTCString(),
            l = e + "=" + t + "; " + i + "; domain= " + r + "; path=" + s;
        document.cookie = l
    }

    function f(e, t) {
        var a = e + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        "undefined" != typeof t && (a += "domain=" + o.DOMAIN_NAME), document.cookie = a
    }

    function p(e, o) {
        o || (o = window.location.href), e = e.replace(/[\[\]]/g, "\\$&");
        var t = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)"),
            a = t.exec(o);
        return a ? a[2] ? decodeURIComponent(a[2].replace(/\+/g, " ")) : "" : null
    }

    function h(e) {
        t(o.BASE_URL + "/session/user-audit-trail", "POST", e, function(e) {
            1 == e.success && (w(), location.hostname.indexOf("localhost") > -1 && l("cd-uid", "random"))
        }, null, !1, "json")
    }

    function m(e, o) {
        "add" == o ? e.addClass("md-show") : e.removeClass("md-show")
    }

    function g(e) {
        var o = window.location.href.split("?"),
            t = (o[0].split("/"), {}),
            a = "";
        if (void 0 !== o[1]) {
            a = "?";
            var s = o[1].split("&");
            for (i = 0; i < s.length; i++) {
                var r = s[i].split("=");
                void 0 === t[r[0]] ? t[r[0]] = r[1] : "string" == typeof t[r[0]] ? t[r[0]] = [t[r[0]], r[1]] : t[r[0]].push(r[1]), $.inArray(r[0], e) == -1 && (a += r[0] + "=" + r[1] + "&")
            }
            a = a.substring(0, a.length - 1)
        }
        return "" != a && (t.queryParams = a), t
    }

    function b() {
        var e = ["modal", "page", "utm_source", "utm_medium", "referral", "notification_id", "offer", "merchant"],
            o = window.location.href.split("?"),
            t = {};
        if (void 0 !== o[1]) {
            var a = o[1].split("&");
            for (i = 0; i < a.length; i++) {
                var s = a[i].split("=");
                void 0 === t[s[0]] ? t[s[0]] = s[1] : "string" == typeof t[s[0]] ? t[s[0]] = [t[s[0]], s[1]] : t[s[0]].push(s[1])
            }
            var r = e.length;
            for (i = 0; i < r; i++) delete t[e[i]];
            return t
        }
        return t
    }

    function v(e, o, t, a, s, r, n) {
        T.userTrailDataParams = {}, T.userTrailDataParams.email = "undefined" != typeof userEmail ? userEmail : null, T.userTrailDataParams.entity_id = "undefined" != typeof o ? o : null, T.userTrailDataParams.coupon_id = "undefined" != typeof t ? t : null, T.userTrailDataParams.sessid = d("cd-session-id"), T.userTrailDataParams.uid = d("cd-uid"), T.userTrailDataParams.event_id = T.userActions[e], T.userTrailDataParams.type = "undefined" != typeof a ? a : null, T.userTrailDataParams.url = window.location.href, T.userTrailDataParams.referrer = document.referrer, T.userTrailDataParams.user_agent = navigator.userAgent, T.userTrailDataParams.source = "WEB", h(T.userTrailDataParams)
    }

    function w() {
        T.userTrailDataParams = {
            email: "",
            user_agent: "",
            url: "",
            referrer: "",
            uid: "",
            sessid: "",
            entity_id: "",
            coupon_id: "",
            event_id: "",
            source: "WEB",
            type: ""
        }, T.userTrailDataParams.user_agent = navigator.userAgent
    }

    function y(e, o) {
        var t, a = o.split("?")[0],
            s = [],
            r = o.indexOf("?") !== -1 ? o.split("?")[1] : "";
        if ("" !== r) {
            s = r.split("&");
            for (var n = s.length - 1; n >= 0; n -= 1) t = s[n].split("=")[0], t === e && s.splice(n, 1);
            s.length > 0 && (a = a + "?" + s.join("&"))
        }
        return a
    }

    function k() {
        var e = window.location.href;
        e = y("modal", e), e = y("affKey", e), e = y("loginSkipped", e), e && history.replaceState(null, null, e)
    }

    function C(e) {
        var o = "";
        return $.each(e, function(e, t) {
            if ("object" == typeof t)
                for (var a = 0; a < t.length; a++) o += e + "=" + t[a] + "&";
            else o += e + "=" + t + "&"
        }), o = o.substring(0, o.length - 1)
    }

    function S(e) {
        var o = new Date(e).getTime();
        return o
    }

    function x() {
        var e = navigator.userAgent.indexOf("Safari") !== -1 && navigator.userAgent.indexOf("Chrome") === -1;
        return !e && "object" == typeof window.localStorage
    }
    var I = {
            Jan: 1,
            Feb: 2,
            Mar: 3,
            Apr: 4,
            May: 5,
            Jun: 6,
            Jul: 7,
            Aug: 8,
            Sep: 9,
            Oct: 10,
            Nov: 11,
            Dec: 12
        },
        T = {
            userActions: {
                "pageview-site": 1,
                "pageview-utm": 2,
                "pageview-referral-return": 3,
                "pageview-email": 4,
                "offer-click": 5,
                "subscribe-store": 6,
                "subscribe-category": 7,
                "social-fb-like": 8,
                "social-fb-share": 9,
                "social-twitter-tweet": 10,
                "social-whatsapp-share": 11,
                "referral-invite-email": 12,
                "referral-invite-gmail": 13,
                "referral-copy-link": 14,
                "user-notification-dropdown-open": 15,
                "user-notification-read": 16,
                "user-login-facebook": 17,
                "user-login-gmail": 18,
                "user-login-email": 19,
                "user-register-email": 20,
                "user-forgot-password": 21,
                "signup-utm": 22,
                "pageview-merchant": 23,
                "pageview-category": 24
            },
            userTrailDataParams: []
        };
    return n(), {
        ajax: t,
        dateToIST: a,
        formatDate: s,
        stringToDate: r,
        replaceCookie: l,
        getCookie: d,
        setCookie: u,
        deleteCookie: f,
        logUserAction: v,
        getQueryParam: p,
        queryDeserializer: g,
        querySerializer: C,
        removeQueryParams: k,
        modal: m,
        deleteQueryParams: b,
        dateTimeToMiliSec: S,
        hasLocalStorage: x,
        removeParam: y
    }
}(_loader, _config);
var _util = CD.c.util;
CD.c.popUp = function() {
    function e() {
        i.popupClose = $(".alert-modal .alert-popup-close"), i.getCodeModalClose = $(".get-code-close-modal"), i.popupDiv = $("#alert-modal"), i.getCodePopups = $(".get-code-modal-popup"), i.document = $(document), i.emailInputBox = $("#signin-email"), i.percentageReferralPopup = $("#percentage-details-popup"), i.percentageDetailsModal = $("#percentage-details-modal"), i.percentageModalClose = $(".perc-close")
    }

    function o() {
        i.popupClose.on("click", t), i.getCodeModalClose.on("click", a), $(document).on("keydown", function(e) {
            27 === e.keyCode && (i.document.find(".get-code-modal-popup").removeClass("md-show"), isGetCodeLastAction = !1)
        }), i.percentageReferralPopup.click(function() {
            i.percentageDetailsModal.addClass("md-show")
        }), i.percentageModalClose.click(function() {
            i.percentageDetailsModal.removeClass("md-show")
        })
    }

    function t() {
        i.popupDiv.removeClass("md-show"), l.focusInputBox === !0 && (i.emailInputBox.focus(), l.focusInputBox = !1), clearTimeout(l.clearTimeout)
    }

    function a() {
        i.getCodePopups.removeClass("md-show")
    }

    function s(e, o, t, a) {
        t === !0 && (l.focusInputBox = !0), clearTimeout(l.clearTimeout);
        var s = $(".alert-modal #alert-body").attr("class").split(" ")[1];
        $("#alert-body").removeClass(s), s = "error" == o ? "error" : "success", $("#alert-msg").html(e), $("#alert-body").addClass(s), i.popupDiv.addClass("md-show"), 0 != a && r(t)
    }

    function r(e) {
        l.clearTimeout = setTimeout(function() {
            i.popupDiv.removeClass("md-show"), l.focusInputBox === !0 && (i.emailInputBox.focus(), l.focusInputBox = !1)
        }, 15e3)
    }

    function n() {
        e(), o()
    }
    var i = {},
        l = {
            clearTimeout: null,
            focusInputBox: !1
        };
    return n(), {
        show: s,
        hide: t
    }
}();
var _popUp = CD.c.popUp;
CD.c.validation = function() {
    function e(e, o) {
        o instanceof Array || (o = [o]);
        for (var a = 0; a < o.length; a++) {
            var s = o[a].split(":"),
                r = s.shift();
            s.unshift(e.trim());
            var n = t[r].apply(null, s);
            if (!n) return !1
        }
        return !0
    }

    function o() {}
    var t = {};
    return function(e) {
        e.required = function(e) {
            return "string" == typeof e && (e = e.trim()), !!e
        }, e.max = function(e, o) {
            return "string" == typeof e && e.length <= o
        }, e.min = function(e, o) {
            return "string" == typeof e && e.length >= o
        }, e.email = function(e) {
            var o = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return o.test(e)
        }, e.amount = function(e) {
            var o = /^\d+(\.\d+)?$/;
            return o.test(e)
        }, e.password = function(e) {
            var o = ".{6,}";
            return !!e.match(o)
        }, e.firstname = function(e) {
            var o = /^[A-Za-z]{1,30}$/;
            return !!e.match(o)
        }, e.lastname = function(e) {
            var o = /^[A-Za-z]{1,30}$/;
            return !!e.match(o)
        }, e.isString = function(e) {
            if (e.length < 1) return !1;
            var o = /^[a-zA-Z ]*$/;
            return !!e.match(o)
        }, e.isValidIFSCCode = function(e) {
            var o = /^[a-zA-Z0-9._\b]+$/;
            return !!e.match(o)
        }, e.isNumber = function(e) {
            if (!e) return !1;
            var o = /^[0-9]+$/;
            return !!e.toString().match(o)
        }, e.isNotEmptyNumber = function(e) {
            return 0 != e
        }
    }(t), o(), {
        validate: e
    }
}();
var _validation = CD.c.validation;
CD.c.scroll = function() {
    function e(e, o) {
        function t(e) {
            for (var o = 0; void 0 != e.offsetParent && null != e.offsetParent;) o += e.offsetTop + (null != e.clientTop ? e.clientTop : 0), e = e.offsetParent;
            return o
        }

        function a() {
            return document.documentElement.scrollTop + document.body.scrollTop
        }
        var s = 500,
            r = 15,
            n = document.getElementById(e),
            i = s / r,
            l = a(),
            c = (t(n) - l) / i;
        void 0 == o && (o = 60);
        for (var d = 1; d <= i; d++) ! function() {
            var e = c * d;
            setTimeout(function() {
                window.scrollTo(0, e + l - o)
            }, r * d)
        }()
    }

    function o(e) {
        e ? (document.body.classList.add("hideOverflowY"), document.documentElement.classList.add("hideOverflowY"), $(document.body).css("box-sizing", "border-box")) : (document.body.classList.remove("hideOverflowY"), document.documentElement.classList.remove("hideOverflowY"), $(document.body).css("box-sizing", ""))
    }

    function t() {
        var e = $(this).scrollTop();
        e < s.lastElementPos && s.filterScroll && ($(".demo").remove(), s.isCategoryPage ? $(".refer-friend-bg").before($(".filters-div")) : $(".merchant-info").after($(".filters-div")), $(".filters-div").css({
            position: "relative",
            "margin-top": "auto",
            top: "auto"
        }).removeClass("toggle-fix"), s.filterScroll = !1), 0 !== $(".pre-render").children().length && (e > $(".pre-render").offset().top + $(".pre-render").height() && s.filterScroll && ($(".filters-div").css({
            position: "absolute",
            "margin-top": $(".pre-render").offset().top + $(".pre-render").height() - $(".filters-div").height() - $(".sidebar").height() - $(".sidebar").offset().top + 20,
            top: "",
            width: "260px"
        }), s.lastOfferReached = !0), e > s.lastElementPos && !s.filterScroll ? (s.filterScroll = !0, s.isCategoryPage ? $(".refer-friend-bg").before('<div class="demo" style="height:' + $(".filters-div").height() + 'px; width:2px; margin-bottom:20px"></div>') : $(".merchant-info").after('<div class="demo" style="height:' + $(".filters-div").height() + 'px; width:2px; margin-bottom:20px"></div>'), $(".sidebar").append($(".filters-div")), $(".filters-div").css({
            "margin-top": "20px"
        }), $(".filters-div").addClass("toggle-fix"), s.lastOfferReached = !1) : !s.lastOfferReached && s.filterScroll && $(".filters-div").height() + s.headerHeight < $(window).height() && e > $(".filters-div").offset().top - s.headerHeight ? $(".filters-div").css({
            position: "fixed",
            top: s.headerHeight,
            "margin-top": "20px",
            width: "260px"
        }) : !s.lastOfferReached && s.filterScroll && $(".filters-div").height() + s.headerHeight > $(window).height() && e + $(window).height() - 20 > $(".filters-div").offset().top + $(".filters-div").height() ? $(".filters-div").css({
            position: "fixed",
            top: $(window).height() - $(".filters-div").height(),
            "margin-top": "-20px",
            width: "260px"
        }) : !s.lastOfferReached && s.filterScroll && $(".pre-render").offset().top + $(".pre-render").height() <= $(".filters-div").offset().top + $(".filters-div").height() && ($(".filters-div").css({
            position: "absolute",
            "margin-top": $(".pre-render").offset().top + $(".pre-render").height() - $(".filters-div").height() - $(".sidebar").height() - $(".sidebar").offset().top + 20,
            top: "",
            width: "260px"
        }), s.lastOfferReached = !0), "fixed" != $(".filters-div").css("position") && "absolute" != $(".filters-div").css("position") || (e < s.lastScrollTop ? s.lastOfferReached && e + s.headerHeight <= $(".filters-div").offset().top ? ($(".filters-div").css({
            position: "fixed",
            top: s.headerHeight,
            "margin-top": "20px",
            width: "260px"
        }), s.lastOfferReached = !1) : e + s.headerHeight <= $(".filters-div").offset().top ? $(".filters-div").css({
            position: "fixed",
            top: s.headerHeight,
            "margin-top": "20px",
            width: "260px"
        }) : $(".filters-div").css({
            position: "absolute",
            top: $(".filters-div").offset().top,
            width: "260px",
            "margin-top": "0px"
        }) : e + 100 <= $(".filters-div").offset().top && $(".filters-div").height() + s.headerHeight > $(window).height() && "absolute" !== $(".filters-div").css("position") && $(".filters-div").css({
            position: "absolute",
            top: $(".filters-div").offset().top,
            width: "260px",
            "margin-top": "0px"
        })), s.lastScrollTop = e)
    }

    function a() {
        s.filterScroll && $(".pre-render").offset().top + $(".pre-render").height() > $(".filters-div").offset().top + $(".filters-div").height() + 50 ? ($(".filters-div").height() < $(window).height() ? $(".filters-div").css({
            position: "fixed",
            top: s.headerHeight,
            "margin-top": "20px",
            width: "260px"
        }) : $(".filters-div").css({
            position: "fixed",
            top: $(window).height() - $(".filters-div").height(),
            "margin-top": "-20px",
            width: "260px"
        }), s.lastOfferReached = !1, window.onscroll = t) : s.filterScroll && (window.onscroll = function() {}, $(".demo").remove(), s.isCategoryPage ? $(".refer-friend-bg").before($(".filters-div")) : $(".merchant-info").after($(".filters-div")), $(".filters-div").css({
            position: "relative",
            "margin-top": "",
            top: ""
        }), s.filterScroll = !1), !s.filterScroll && $(".pre-render").offset() && $(".pre-render").offset().top + $(".pre-render").height() > $(".sidebar").offset().top + $(".sidebar").height() + $(".filters-div").height() ? window.onscroll = t : s.filterScroll || (window.onscroll = function() {})
    }
    var s = {
        filterScroll: !1,
        isCategoryPage: window.location.href.indexOf("category") > 1 || window.location.href.indexOf("search") > 1,
        lastScrollTop: 0,
        lastOfferReached: !1
    };
    return window.onload = function() {
        if ($(".pre-render").offset() && $(".pre-render").offset().top + $(".pre-render").height() > $(".sidebar").offset().top + $(".sidebar").height() + $(".filters-div").height()) {
            var e = $(".ext-merchantpage-sidebanner").height() < 50 ? 498 : 0;
            s.lastElementPos = $(".sidebar").offset().top + $(".sidebar").height() + e - 120, $(".sale-header-banner").length && "none" !== $(".sale-header-banner").css("display") || $(".extention-notification").length && "none" !== $(".extention-notification").css("display") ? s.headerHeight = 130 : s.headerHeight = 80, window.onscroll = t
        }
    }, {
        smooth: e,
        disableBodyScroll: o,
        afterRenderScroll: a,
        locals: s
    }
}();
var _scroll = CD.c.scroll;
CD.c.extinstall = function(e, o, t, a) {
    function s() {
        y.chromeInstallButtons = $(".chrome-inline-install"), y.allExtInstallButtons = $(".chromeHome, .otherBrowserHome, .firefoxHome"), y.allExtInstalledButtons = $(".bextInstalled"), y.extNotify = $(".extention-notification"), y.document = $(document), y.extensionToolbar = $(".user-info-cards .ext-toolbar-card"), y.extensionPlus = $(".withdrawal-extension-plus"), y.withdrawalExtensionMinus = $(".withdrawal-extension-minus")
    }

    function r() {
        w.extNotification && !w.isExtensionInstalled && (y.extNotify.find(".close-btn").click(function(e) {
            l(!1), e.stopPropagation()
        }), y.document.on("keyup click scroll", function() {
            var e = i();
            e && (new Date).getTime() >= parseInt(e) ? l(!0) : n()
        }))
    }

    function n() {
        var e, o, a = y.extNotify.attr("data-expiry").trim();
        try {
            a = a.indexOf("d") > 0 ? a.split("d") : a, "object" == typeof a ? (e = parseInt(a[0]), o = a[1] ? parseInt(a[1].slice(0, -1)) : 0) : (a = a.split("h"), o = parseFloat(a[0])), isNaN(e) && (e = 0), isNaN(o) && (o = 0);
            var s = (new Date).getTime() + 60 * (24 * e + o) * 60 * 1e3;
            t.hasLocalStorage() ? localStorage.setItem("ext-ban-expiry", s) : t.setCookie("ext-ban-expiry", s)
        } catch (e) {}
    }

    function i() {
        return t.hasLocalStorage() ? localStorage.getItem("ext-ban-expiry") : t.getCookie("ext-ban-expiry")
    }

    function l(e) {
        if (w.extNotification) {
            var o = i();
            o && (new Date).getTime() < parseInt(o) && (e = !1), n(), document.body.classList[e ? "add" : "remove"]("ext-notify"), a.locals.headerHeight = 80, "130px" === $(".filters-div").css("top") && $(".filters-div").css("top", 80)
        }
    }

    function c() {
        y.allExtInstallButtons.removeClass("make-visible"), y.allExtInstalledButtons.addClass("make-visible"), y.extensionToolbar.length && y.extensionToolbar.removeClass("dw-toolbar").addClass("dw-toolbar-green"), l(!1), w.isExtensionInstalled = !0
    }

    function d() {
        if (!k) {
            var e = !!window.chrome && !!window.chrome.webstore,
                o = "undefined" != typeof InstallTrigger;
            k = e ? "chrome" : o ? "firefox" : "other"
        }
        return k
    }

    function u() {
        y.chromeInstallButtons.click(function() {
            var t = "https://chrome.google.com/webstore/detail/" + e.CHROME_EXTENSION_ID,
                a = function() {
                    c(), v()
                },
                s = function(t) {
                    "User cancelled install" != t && o.show('Installation Failed. <a href="https://chrome.google.com/webstore/detail/coupondunia-browser-exten/' + e.CHROME_EXTENSION_ID + '" target="_blank">Click Here</a> to install', "error")
                };
            chrome.webstore.install(t, a, s)
        })
    }

    function f() {
        "chrome" == d() && chrome.runtime ? chrome.runtime.sendMessage(e.CHROME_EXTENSION_ID, {
            request: "isExtensionInstalled"
        }, function(e) {
            e && e.success ? (c(), v()) : ($(document).trigger("ext-install-status"), l(!0), b())
        }) : "firefox" == d() ? (v(), setTimeout(function() {
            $(document).trigger("ext-install-status")
        }, 500)) : v()
    }

    function p(o) {
        "chrome" == d() && chrome.runtime && chrome.runtime.sendMessage(e.CHROME_EXTENSION_ID, {
            request: "webCashbackActivated",
            CBdata: o
        }, function(e) {
            console.log(e)
        })
    }

    function h() {
        var e = d();
        "firefox" == e ? ($(".otherBrowserHome").removeClass("make-visible"), $(".firefoxHome").addClass("make-visible"), w.extNotification && y.extNotify.find(".chrome-inline-install").hide(), l(!0)) : "chrome" == e && ($(".otherBrowserHome").removeClass("make-visible"), $(".chromeHome").addClass("make-visible"), u(), w.extNotification && y.extNotify.find(".firefox-install").hide())
    }

    function m() {
        var e = document.getElementById("casback-rates-ctr");
        e && (e.scrollIntoView(), window.scrollBy(0, -90))
    }

    function g() {
        s(), h(), f(), r()
    }

    function b() {
        y.extensionPlus.show(), y.withdrawalExtensionMinus.hide()
    }

    function v() {
        y.extensionPlus.hide(), y.withdrawalExtensionMinus.show()
    }
    var w = {
            extNotification: !!$(".extention-notification").length,
            isExtensionInstalled: !1
        },
        y = {},
        k = null;
    return g(), document.onreadystatechange = function() {
        "complete" == document.readyState && window.location.href.indexOf("extension=cashbackrates") != -1 && m()
    }, {
        cashbackActivated: p
    }
}(_config, _popUp, _util, _scroll);
var _extinstall = CD.c.extinstall;
CD.c.getcode = function(e, o, t, a, s) {
    function r() {
        D.offerGetCodeButton = $(".offer-get-code-btn"), D.offerSkipLoginButton = $(".skip-login-btn"), D.startShoppingButton = $(".start-shop-btn, .load-offer-btn.outlink"), D.affUrlSelected = $(".btn-type"), D.storeOptionsPopup = $("#whatShopModal"), D.shopViaMobileButton = $(".shop-via-mobile-btn"), D.appOnlySmsInput = $("#merchant-app-mobile-number"), D.getInMobileInput = $("#mweb-sms-mobile-number"), D.appOnlySmsSubmit = $(".merchant-app-send-sms"), D.getInMobileSubmit = $(".get-in-mobile-submit"), D.getInMobileModal = $("#getInMobileModal"), D.appOnlyModalSubsriptionInput = $("#merchant-app-email"), D.appOnlyModalEmailSubmit = $(".subsc-btn"), D.appOnlyModalSubsriptionError = $(".subsc-error"), D.appOnlyModalClose = $(".app-only-md-close"), D.feedbackEmail = $(".feedback-subsc-email"), D.emailError = $(".feedback-email-error"), D.feedbackNameInput = $(".name-input-box"), D.feedbackEmailInput = $(".email-input-box"), D.feedbackCommentInput = $(".feedback-comment textarea"), D.ohWaitModalClose = $("#ohWaitModalClose"), D.copyButton = $(".copy-btn"), D.cashbackInfoText = $(".cashback-info-feedback-popup"), D.thumbsUpBtn = $(".thumbs-up-feedback-modal"), D.thumbsDownBtn = $(".thumbs-down-feedback-modal"), D.ohWaitSignin = $(".oh-wait-signin"), D.disableClose = $(".disable-on-oh-wait"), D.removeCloseClass = $(".remove-close"), D.alreadySubscribed = $(".already-subscribed-message"), D.feedbackSubscriptionBtn = $(".subscription-textbox-holder"), D.feedbackPopupSubmitBtn = $(".feedback-popup-submit-btn"), D.howItWorksIcon = $(".how-works-icon"), D.howItWorksStep = $(".how-works-step"), D.howThisWorksModalLink = ".how-this-works-modal-link", D.howItWorksModal = $("#howItWorksModal"), D.howItWorksModalClose = $("#howItWorksModal .get-code-close-modal"), D.skipOrLoginDeal = $(".skip-lose-deal"), D.skipOrLoginCoupon = $(".skip-lose-coupon"), D.extFeedback = $(".ext-feedback"), D.getCodeSignup = $(".get-code-signup")
    }

    function n(e, t, a, r) {
        if (U.offer = null, U.isStoreOutlink = !1, U.offer = t, "undefined" == typeof a && (a = !1), "undefined" != typeof r && r) var n = o.getQueryParam("q");
        var i = o.getQueryParam("h");
        U.isStoreOutlink = a;
        var u;
        if ("redirection-modal-tab" === e) {
            U.skipLogin = !0, l("startShopStoreModal");
            var f = R();
            u = U.basehref + "/load-offer/" + U.offer.id + "?adBlocker=" + f, "undefined" != typeof U.offer && U.offer && "undefined" != typeof U.offer.isCashback && U.offer.isCashback && U.isLoggedIn && (u += "&cd-cashback-activated=true");
            var p = window.open(u, "_blank");
            return void(p ? p.opener = null : "")
        }
        if ("one-time-coupon" === e) {
            var h = "getCodeModal";
            intermediateUrl = window.location.pathname + "?modal=" + h + "&offer=" + U.offer.id + ("undefined" != typeof r && r ? "&q=" + encodeURIComponent(n) + "&merchant=" + U.offer.storeId : "") + (i ? "&h=" + i : "") + ("undefined" != typeof r && 0 != r || "undefined" == typeof CD.p.category ? "" : "&" + CD.p.category.getFilterParamsForUrl()), u = U.basehref + "/code-redirect?cid=WEB&offer_id=" + U.offer.id + "&page_url=" + encodeURIComponent(intermediateUrl), 1 == U.offer.isCashback && U.isLoggedIn && (u += "&cd-cashback-activated=true");
            var p = window.open(u, "_blank");
            return p ? p.opener = null : "", s.cashbackActivated(U.offer.isCashback), void y(U.offer.id, "offer", !0)
        }
        if ("start-shop-code-modal-tab" === e || "get-code-modal-tab" === e) {
            u = U.basehref + "?modal=getCodeModal&offer=" + U.offer.id + "&affKey=" + btoa(U.offer.affKey) + (U.loginSkipped ? "&loginSkipped=false" : "") + ("undefined" != typeof r && r ? "&q=" + encodeURIComponent(n) + "&merchant=" + U.offer.storeId : "") + (i ? "&h=" + i : "") + ("undefined" != typeof r && 0 != r || "undefined" == typeof CD.p.category ? "" : "&" + CD.p.category.getFilterParamsForUrl()), 1 == U.offer.isCashback && U.isLoggedIn && (u += "&cd-cashback-activated=true");
            var p = window.open(u, "_blank");
            return p ? p.opener = null : "", s.cashbackActivated(U.offer.isCashback), void y(U.offer.id, "offer", !0)
        }
        if ("whatShopModal" === e) d();
        else if ("ohWaitModal" === e || "ohWaitModal2" === e) {
            if ("ohWaitModal" === e && U.offer.offerTitle) return U.skipLogin = !0, M(), c("coupon" === U.offer.couponType ? "getCodeModal" : "startShopStoreModal"), !1;
            c(e)
        } else "getCodeModal" !== e || 1 != U.offer.isCashback || U.isLoggedIn || c(e);
        l(e)
    }

    function l(e) {
        "ohWaitModal" === e && U.offer.offerTitle || b(e, U.offer), U.feedbackTimer = 0
    }

    function c(e) {
        var t = $("#" + e).find(".signin-link"),
            a = $("#" + e).find(".signup-link");
        "undefined" != typeof isSearchPage && isSearchPage ? (t.attr("data-search-merchant", U.offer.storeId), a.attr("data-search-merchant", U.offer.storeId)) : "undefined" != typeof CD.p.category && (t.attr("data-sub-url", CD.p.category.getFilterParamsForUrl()), a.attr("data-sub-url", CD.p.category.getFilterParamsForUrl()));
        var s = o.getQueryParam("h");
        return s && (t.attr("data-highlighted-offer", s), a.attr("data-highlighted-offer", s)), "ohWaitModal2" === e ? void("deal" === U.offer.couponType ? (t.attr("data-modal", "startShopStoreModal"), t.attr("data-modal-id", U.offer.id), a.attr("data-modal", "startShopStoreModal"), a.attr("data-modal-id", U.offer.id)) : U.offer.isCashback && "deal" !== U.offer.couponType ? (t.attr("data-modal", "startShopModal"), t.attr("data-modal-id", U.offer.id), a.attr("data-modal", "startShopModal"), a.attr("data-modal-id", U.offer.id)) : "one-time-coupon" === U.offer.couponType && (t.attr("data-modal", "startShopModal"), t.attr("data-modal-id", U.offer.id), a.attr("data-modal", "startShopModal"), a.attr("data-modal-id", U.offer.id))) : void(U.isStoreOutlink && hasMultipleOutUrls ? (t.attr("data-modal", "whatShopModal"), t.attr("data-modal-id", ""), a.attr("data-modal", "whatShopModal"), a.attr("data-modal-id", "")) : U.isStoreOutlink && !hasMultipleOutUrls ? (t.attr("data-modal", "startShopStoreModal"), t.attr("data-modal-id", ""), a.attr("data-modal", "startShopStoreModal"), a.attr("data-modal-id", "")) : !U.isStoreOutlink && U.offer.isCashback && "deal" === U.offer.couponType ? (t.attr("data-modal", "startShopStoreModal"), t.attr("data-modal-id", U.offer.id), a.attr("data-modal", "startShopStoreModal"), a.attr("data-modal-id", U.offer.id)) : !U.isStoreOutlink && U.offer.isCashback && "deal" !== U.offer.couponType && (t.attr("data-modal", "startShopModal"), t.attr("data-modal-id", U.offer.id), a.attr("data-modal", "startShopModal"), a.attr("data-modal-id", U.offer.id)))
    }

    function d(e, o) {
        var t;
        if (U.isStoreOutlink) return hasMultipleOutUrls ? void D.storeOptionsPopup.addClass("md-show") : void h(null, o, e);
        "deal" === U.offer.couponType && U.skipLogin === !0 && l("startShopStoreModal"), t = U.basehref + "/load-offer/" + U.offer.id;
        var a = R();
        t = t.split("?").length > 1 ? t + "&adBlocker=" + a : t + "?adBlocker=" + a, "undefined" != typeof U.offer && U.offer && "undefined" != typeof U.offer.isCashback && U.offer.isCashback && U.isLoggedIn && (t += "&cd-cashback-activated=true");
        var s = window.open(t, "_blank");
        s ? s.opener = null : ""
    }

    function u(e) {
        $("#thumbs-down-popup" + e).hasClass("thumbs-down-active") || ($("#thumbs-up-popup" + e).hasClass("thumbs-up-active") ? ($("#thumbs-up-popup" + e).removeClass("thumbs-up-active"), U.offer.voted = null) : (U.offer.voted = "upvote", $("#thumbs-up-popup" + e).addClass("thumbs-up-active")), "upvote" === U.offer.voted && p(e, !0))
    }

    function f(e) {
        var o = null;
        $("#thumbs-up-popup" + e).hasClass("thumbs-up-active") || ($("#thumbs-down-popup" + e).hasClass("thumbs-down-active") ? ($("#thumbs-down-popup" + e).removeClass("thumbs-down-active"), o = "cancelled", U.offer.voted = null) : (o = "downvote", U.offer.voted = "downvote", $("#thumbs-down-popup" + e).addClass("thumbs-down-active")), "downvote" === U.offer.voted && p(e, !1))
    }

    function p(e, o) {
        o ? $("#offer-feedback-thanks-" + e).html("<div class='offer-feedback-thanks'>Great! Tell others what you liked by leaving a comment -</div>") : $("#offer-feedback-thanks-" + e).html("<div class='offer-feedback-thanks'>What went wrong? Leave a comment for other users -</div>"), $("#slide_3" + e).prop("checked", !0), $("#slide_2" + e).prop("checked", !1), g()
    }

    function h(e, t, a) {
        if (1 == a) {
            var s = R();
            t = t.split("?").length > 1 ? t + "&adBlocker=" + s : t + "?adBlocker=" + s, "undefined" != typeof U.offer && U.offer && "undefined" != typeof U.offer.isCashback && U.offer.isCashback && U.isLoggedIn && (t += "&cd-cashback-activated=true");
            var r = window.open(t, "_blank");
            return void(r ? r.opener = null : "")
        }
        urlOptionId = e ? e : storeOptionId, null == urlOptionId && (urlOptionId = ""), U.offer && U.offer.landingUrl && (t = U.offer.landingUrl);
        var n = {};
        n.option = urlOptionId, t && (n.landing_url = t);
        var i = $.param(n);
        redirectUrl = "/go-store/" + storeId + "?" + i, o.removeQueryParams();
        var s = R();
        redirectUrl = redirectUrl + "&adBlocker=" + s, "undefined" != typeof U.offer && U.offer && "undefined" != typeof U.offer.isCashback && U.offer.isCashback && U.isLoggedIn && (redirectUrl += "&cd-cashback-activated=true");
        var r = window.open(redirectUrl, "_blank");
        r ? r.opener = null : ""
    }

    function m(e) {
        $("#slide_1" + e).prop("checked", !0);
        for (var o = "#slide_", t = "2"; t <= "4"; t++) $(o + t + e).prop("checked", !1);
        g()
    }

    function g() {
        D.feedbackNameInput.val(""), D.feedbackEmailInput.val(""), D.feedbackCommentInput.val(""), w()
    }

    function b(e, o) {
        if (v(), "startShopStoreModal" === e && ("coupon" === o.couponType ? ($("#is-coupon-code-reqd").text("Coupon code required"), $(".deal-modal-back-btn").text("Back to Coupon")) : ($("#is-coupon-code-reqd").text("No code required"), $(".deal-modal-back-btn").text("Back to Deal"))), o && o.isCashback ? D.cashbackInfoText.html("+ <span data-type='html' data-model='cashbackText'></span> From CouponDunia") : D.cashbackInfoText.html(""), models = $("#" + e).find("[data-model]"), models.each(function() {
                var e = $(this),
                    t = e.data("type"),
                    a = e.data("model");
                switch (t) {
                    case "html":
                        return e.html(o[a] ? o[a] : ""), void("offerTitle" === a && e.attr("title", o[a] ? o[a] : ""));
                    case "img":
                        return e.attr("src", o[a] ? o[a] : ""), e.attr("alt", o.storeName ? o.storeName : ""), void e.removeClass("placeholder-img");
                    case "visible":
                        var s = "!" === a[0];
                        modelKey = s ? a.slice(1) : a;
                        var r = s ? !o[modelKey] : !!o[modelKey];
                        if (e.data("show") === !0) return;
                        return void e.toggle(r);
                    case "visible-condition":
                        var r = 1 == a ? "one-time-coupon" === o.couponType && "undefined" != typeof o.validationType && o.validationType.length && "email" === o.validationType[0] : "one-time-coupon" !== o.couponType || "undefined" == typeof o.validationType || "undefined" != typeof o.validationType && o.validationType.length && "email" !== o.validationType[0];
                        return void e.toggle(r);
                    case "attribute":
                        var n = e.data("attr-name");
                        return void e.attr(n, o[a]);
                    case "offer-dom-node":
                        $("#" + o.id + "cat").clone().removeClass("cHide").appendTo(e);
                        var i = e.find(".offer-card-holder");
                        return i.hasClass("highlightedoffer") && i.removeClass("highlightedoffer"), e.find(".hit-content,.success-hit,.comments-section").remove(), void e.find(".cHide").removeClass("cHide");
                    case "link":
                        return void("coupon" === o.couponType ? e.prop("href", "/" + o.storeId + "?h=" + o.id + "&cmts=true&affKey=" + btoa(U.offer.affKey)) : e.prop("href", "/" + o.storeId + "?h=" + o.id + "&cmts=true"));
                    case "visible-on-value":
                        return void(o[a] && o[a] === e.data("value") ? e.css("display", "block") : e.css("display", "none"))
                }
            }), o && "upvote" === o.voted && D.thumbsUpBtn.addClass("thumbs-up-active"), o && "downvote" === o.voted && D.thumbsDownBtn.addClass("thumbs-down-active"), "startShopStoreModal" !== e || U.skipLogin || d(), U.showModal === !0 && $("#" + e).addClass("md-show"), $("#" + e).parent().hasClass("get-code-modals")) {
            var t = 48,
                a = "2.8em";
            U.isLoggedIn && U.offer.isCashback || (t = 72, a = "4.2em");
            var s = $("#" + e + " .title");
            s.css("height", "auto"), s[0].getBoundingClientRect().height > t ? (s.css("height", a), s.each(function() {
                $(this).removeClass("hidden")
            })) : s.each(function() {
                $(this).addClass("hidden")
            })
        }
        var r = $("#" + e);
        if ("ohWaitModal" === e && r.find(".modal-var-B").length > 0) {
            var n = r.find(".modal-var-B #cta-text-yes"),
                i = r.find(".modal-var-B #cta-text-no");
            "coupon" === o.couponType || "one-time-coupon" === o.couponType ? (n.html("&amp; GET CODE"), i.html("Get Code without ")) : "deal" === o.couponType ? (n.html("&amp; GET DEAL"), i.html("Get Deal without ")) : (n.html("&amp; CONTINUE"), i.html("Continue without "))
        }
    }

    function v() {
        m("1"), m("2"), $("#feedback-subsc-btn-1").text("Subscribe"), $("#feedback-subsc-btn-2").text("Subscribe"), D.thumbsUpBtn.hasClass("thumbs-up-active") && D.thumbsUpBtn.removeClass("thumbs-up-active"), D.thumbsDownBtn.hasClass("thumbs-down-active") && D.thumbsDownBtn.removeClass("thumbs-down-active"), w()
    }

    function w() {
        D.feedbackPopupSubmitBtn.css("color", "rgba(0, 0, 0, 0.35)"), D.feedbackPopupSubmitBtn.css("background-color", "#e9e9e9"), D.feedbackPopupSubmitBtn.css("border", "solid 1px #e0e0e0"), D.emailError.text("")
    }

    function y(e, o, t) {
        "undefined" == typeof t && (t = !1);
        var a = "";
        "store" === o ? a = U.basehref + "/go-store/" + e : (a = U.basehref + "/load-offer/" + e, t && (a += "&silent=true"));
        var s = R();
        a = a + "&adBlocker=" + s, "undefined" != typeof U.offer && U.offer && "undefined" != typeof U.offer.isCashback && U.offer.isCashback && U.isLoggedIn && (a += "&cd-cashback-activated=true"), window.location = a
    }

    function k() {
        for ("undefined" != typeof salesPage && 1 == salesPage || (D.offerSkipLoginButton.click(M), D.startShoppingButton.click(function() {
                d()
            })), D.affUrlSelected.click(function() {
                var e = $(this),
                    t = e.data("aff-id"),
                    a = o.getQueryParam("source_page_url");
                return a ? void h(t, a) : void h(t)
            }), $(window).focus(function() {
                if (U.blurred === !0 && U.feedbackTimer >= 60) {
                    var e = $("#slide_21"),
                        o = $("#slide_11");
                    e && o && o.prop("checked") === !0 && (e.prop("checked", !0), o.prop("checked", !1)), e = $("#slide_22"), o = $("#slide_12"),
                        U.offer && U.offer.hasOwnProperty("offerTitle") && e && o && o.prop("checked") === !0 && (e.prop("checked", !0), o.prop("checked", !1))
                }
                clearInterval(U.slideInterval), U.feedbackTimer = 0, U.blurred = !1
            }), $(window).blur(function() {
                U.blurred = !0, U.slideInterval = setInterval(function() {
                    U.feedbackTimer++
                }, 1e3)
            }), D.shopViaMobileButton.click(function() {
                l("getInMobileModal")
            }), D.appOnlySmsSubmit.click(function() {
                var e = D.appOnlySmsInput.val();
                C(U.offer.id, e)
            }), D.getInMobileSubmit.click(function() {
                var e = D.getInMobileInput.val();
                C(U.offer.id, e)
            }), D.appOnlyModalEmailSubmit.click(function() {
                x(U.offer.storeId)
            }), D.feedbackEmail.focus(function() {
                D.emailError.css("display", "none")
            }), D.appOnlyModalClose.click(function() {
                D.appOnlyModalSubsriptionInput.val(""), D.appOnlySmsInput.val(""), D.getInMobileModal.removeClass("md-show"), D.getInMobileInput.val(""), D.appOnlyModalSubsriptionError.html(""), D.appOnlyModalEmailSubmit.text("Subscribe")
            }), D.ohWaitModalClose.click(function() {
                dismissFlag || $("#ohWaitModal").removeClass("md-show")
            }), D.copyButton.click(function(e) {
                e.preventDefault();
                var o = $(this);
                A(o), o.addClass("copied-btn"), setTimeout(function() {
                    o.removeClass("copied-btn")
                }, 2e3)
            }), D.ohWaitSignin.click(P), i = "1"; i <= "2"; i++) $("#feedback-comment-ta-" + i).keyup(function() {
            var e = $(this).attr("id").slice(-1),
                o = $("#feedback-popup-submit-" + e);
            $(this).val() && "" != $(this).val() ? (o.css("color", "#ffffff"), o.css("background-color", "#cd3232"), o.css("border", "solid 1px #cd3232")) : (o.css("color", "rgba(0, 0, 0, 0.35)"), o.css("background-color", "#e9e9e9"), o.css("border", "solid 1px #e0e0e0"))
        });
        D.howItWorksModalClose.click(function() {
            clearInterval(U.howWorksAnimationTimer)
        }), $(document).on("click", D.howThisWorksModalLink, function(e) {
            e.preventDefault(), T(), U.howItWorksAnimationIndex = 0, _(), U.howItWorksAnimationIndex = 1, clearInterval(U.howWorksAnimationTimer), D.howItWorksModal.addClass("md-show"), I()
        }), $(window).keydown(function(e) {
            27 === e.keyCode && window.location.href.indexOf("alert-login") == -1 && clearInterval(U.howWorksAnimationTimer)
        }), $(document).on("ext-install-status", function() {
            D.extFeedback.html($(".ext-feedback-content").html()).addClass("ext-feedback-footer")
        }), D.getCodeSignup.click(function() {
            $("#" + $(this).attr("data-parent-modal")).removeClass("md-show")
        })
    }

    function C(a, s) {
        return L.test(s) ? void o.ajax(e.BASE_URL + "/offers/" + a + "/sms", "POST", {
            mobile_number: s
        }, function(e) {
            e.success ? t.show("SMS sent !", "success") : e.errors.user_display ? t.show(e.errors.message, "error") : t.show("SMS not Sent. Try Again.", "error")
        }, null, !0) : void t.show("Please enter valid mobile number", "error")
    }

    function S(e) {
        x(U.offer.storeId, e)
    }

    function x(s, r) {
        var n;
        if ("undefined" == typeof r && (r = !1), r === !1) n = D.appOnlyModalSubsriptionInput.val();
        else {
            n = U.isLoggedIn ? $("#feedback-subsc-email-" + r + "2").val() : $("#feedback-subsc-email-" + r + "1").val(), null !== n && "" !== n || (D.emailError.text("Email cannot be empty!"), D.emailError.css("display", "block"));
            var i = a.validate(n, "email");
            if (i === !1) return D.emailError.text("Please enter a valid Email Id!"), void D.emailError.css("display", "block")
        }
        a.validate(n, "email") ? o.ajax(e.BASE_URL + "/subscriptions/subscribe", "POST", {
            email: n,
            identifier: s,
            type: "store"
        }, function(e) {
            if (e.success) r === !1 ? (D.appOnlyModalSubsriptionError.html(e.response.message.replace("<>", s)), D.appOnlyModalEmailSubmit.text("Subscribed")) : (D.alreadySubscribed.show(), D.feedbackSubscriptionBtn.hide(), "undefined" != typeof page && "stores" == page ? storeLocals.isSubscribed = 1 : U.isSubscribed = 1);
            else {
                var o = e.errors.user_display ? e.errors.message : "Something went wrong. Try Again.";
                D.appOnlyModalSubsriptionError.html(o)
            }
        }, null, !0) : null === n || "" === n ? t.show("Email cannot be empty.", "error") : t.show("Invalid Email Id! Please try again.", "error")
    }

    function I() {
        U.howWorksAnimationTimer = setInterval(function() {
            T(), _(), U.howItWorksAnimationIndex++, 4 === U.howItWorksAnimationIndex && (U.howItWorksAnimationIndex = 0)
        }, 1e3)
    }

    function T() {
        var e = "";
        0 === U.howItWorksAnimationIndex ? (e = $(D.howItWorksIcon[3]).attr("class").split(" ")[2], $(D.howItWorksIcon[3]).removeClass(e).addClass(e.split("-red")[0]), $(D.howItWorksStep[3]).removeClass("red")) : (e = $(D.howItWorksIcon[U.howItWorksAnimationIndex - 1]).attr("class").split(" ")[2], $(D.howItWorksIcon[U.howItWorksAnimationIndex - 1]).removeClass(e).addClass(e.split("-red")[0]), $(D.howItWorksStep[U.howItWorksAnimationIndex - 1]).removeClass("red"))
    }

    function _() {
        var e = $(D.howItWorksIcon[U.howItWorksAnimationIndex]).attr("class").split(" ")[2];
        $(D.howItWorksIcon[U.howItWorksAnimationIndex]).removeClass(e).addClass(e.split("-red")[0] + "-red"), $(D.howItWorksStep[U.howItWorksAnimationIndex]).addClass("red")
    }

    function M(e, t, a) {
        if ("undefined" != typeof a && (U.offer = a), sessionStorage.setItem("cdIsloginSkipped", "true"), U.loginSkipped = !0, U.offer && void 0 !== U.offer) {
            if (U.offer.couponCode && "" !== U.offer.couponCode) {
                redirectUrl = U.basehref + "?modal=getCodeModal&offer=" + U.offer.id + "&affKey=" + btoa(U.offer.affKey) + ("undefined" != typeof isSearchPage && isSearchPage ? "&q=" + encodeURIComponent(o.getQueryParam("q")) + "&merchant=" + U.offer.storeId : "") + (o.getQueryParam("h") ? "&h=" + o.getQueryParam("h") : "") + ("undefined" != typeof isSearchPage && 0 != isSearchPage || "undefined" == typeof CD.p.category ? "" : "&" + CD.p.category.getFilterParamsForUrl());
                var s = window.open(redirectUrl, "_blank");
                return s ? s.opener = null : "", void y(U.offer.id, "offer", !0)
            }
            d(e, t)
        }
    }

    function A(e) {
        var o = $("<textarea/>");
        $("body").append(o), o.text(U.offer.couponCode), o.select();
        var a = document.execCommand("copy");
        o.remove(), a ? (e.addClass("btn-copied"), e.attr("data-copied", !0), e.text("COPIED")) : t.show("Oops! Your browser doesn't support copy option, please copy manually", "error")
    }

    function O(e) {
        e = $(e).closest(".skip-lose-card"), setTimeout(function() {
            e.css("z-index", "-1"), e.css("display", "none")
        }, 300), e.parent().find(".offer-card-ctr").css("height", "auto").css("overflow", "inherit"), e.parent().css("transform", "rotateY(0)")
    }

    function P() {
        D.disableClose.css("display", "none")
    }

    function R() {
        var e = document.createElement("div");
        e.innerHTML = "&nbsp;", e.className = "adsbox";
        var o = !1;
        try {
            document.body.appendChild(e), o = 0 === document.getElementsByClassName("adsbox")[0].offsetHeight, document.body.removeChild(e)
        } catch (e) {
            o = !1
        }
        if (1 == o) return o;
        var t = !1;
        return "undefined" != typeof fuckAdBlock && "undefined" != typeof fuckAdBlock._var || (t = !0), o || t
    }

    function B() {
        r(), k(), U.loginSkipped = !!sessionStorage.getItem("cdIsloginSkipped")
    }
    var D = {},
        U = {
            offer: null,
            isLoggedIn: "undefined" != typeof loggedIn && loggedIn,
            basehref: "",
            isStoreOutlink: !1,
            blurred: !1,
            slideInterval: null,
            feedbackTimer: 0,
            loginSkipped: !1,
            isSearchPage: !1,
            howWorksAnimationTimer: null,
            howItWorksAnimationIndex: 0,
            skipLogin: !1,
            showModal: !0
        },
        L = /^[0-9]{10}$/;
    return B(), {
        offerRedirect: n,
        redirectToStoreOutlink: h,
        backToCoupon: m,
        upvoteOffer: u,
        downvoteOffer: f,
        subscribeToStoreFromPopup: S,
        initForms: g,
        openModal: l,
        offerSkipLogin: M,
        checkAdblock: R,
        beginRedirect: d,
        backToCouponDetails: O,
        disablePopupClose: P,
        locals: U
    }
}(_config, _util, _popUp, _validation, _extinstall);
var _getcode = CD.c.getcode;
CD.c.auditTrail = function(e, o) {
    function t() {
        var t = !1,
            s = $(location).attr("href");
        if (s.indexOf("utm") > -1 && (t = !0), "undefined" != typeof page) {
            if ("stores" == page) e.logUserAction("pageview-merchant", storeId);
            else if ("category" == page) {
                var r = globals.urlId;
                "" != globals.subCategory && (r = globals.subCategory), e.logUserAction("pageview-category", r)
            }
        } else if (s.indexOf("referral") > -1) {
            var n = a("referral", s);
            e.logUserAction("pageview-referral-return", n)
        } else if (s.indexOf("reset-password") == -1 && s.indexOf("verify/") == -1 && s.indexOf("confirmemailsub/") == -1) {
            var i = "";
            i = t ? "pageview-utm" : "pageview-site";
            var l = document.referrer,
                c = !1;
            "" != l && l.indexOf(o.BASE_URL) != -1 || (c = !0), "pageview-site" === i && c ? e.logUserAction(i, r) : "pageview-utm" === i && e.logUserAction(i, r)
        }
    }

    function a(e, o) {
        o || (o = window.location.href), e = e.replace(/[\[\]]/g, "\\$&");
        var t = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)"),
            a = t.exec(o);
        return a ? a[2] ? decodeURIComponent(a[2].replace(/\+/g, " ")) : "" : null
    }
    t()
}(_util, _config), CD.c.GTM = function(e) {
    function o(e) {
        dataLayer.push(e)
    }

    function t(e) {
        var o = parseInt(e.balance ? e.balance.withdrawn_amount : 0),
            t = parseInt(e.balance ? e.balance.confirmed_balance : 0),
            a = parseInt(e.balance ? e.balance.total_earnings : 0);
        return {
            userEmail: e.email || "",
            gender: e.gender || "",
            hasEarnedCashback: e.has_earned_cashback || "",
            availableBalance: e.balance ? e.balance.available_balance : 0,
            pendingBalance: e.balance ? e.balance.pending_balance : 0,
            lifetimeEarningsConfirmedOnly: t + o,
            lifetimeTransactionsIncludingStillPending: a + o
        }
    }

    function a(e) {
        "undefined" != typeof e ? (l.user = t(e), l.user.loggedIn = !0) : (l.user = {}, l.user.loggedIn = !1), l.user.platform = "web"
    }

    function s(e) {
        l.event = e
    }

    function r(e) {
        l.page = e
    }

    function n(e) {
        for (var o in e) l[o] = e[o]
    }

    function i() {
        dataLayer.push(l)
    }
    var l = {};
    return {
        push: i,
        setPageData: r,
        setEvent: s,
        setUserData: a,
        pushRawData: o,
        setValue: n
    }
}(_config);
var _gtm = CD.c.GTM;
CD.c.auth = function(e, o, t, a, s, r, n) {
    function i() {
        T.toggler = {
            login: ".signin-link",
            signup: ".signup-link"
        }, T.modals = {
            login: $("#login-modal"),
            signup: $("#signup-modal"),
            signup2: $("#signup-modal-2"),
            reset: $("#reset-modal"),
            forgotPassword: $("#forgot-modal"),
            changeModal: $("#change-modal"),
            checkAuth: $("#authorize-modal"),
            signupSuccess: $("#signup-success-modal"),
            referral: $("#referral-code-modal")
        }, T.modalClose = $(".md-close,.md-overlay"), T.formInput = $(".sign-in-input"), T.formError = $(".popup-error"), T.inputCtr = $(".sign-up-input-ctr,.sign-in-input-ctr"), T.formPassword = $(".password-toggle"), T.login = {
            email: $("#signin-email"),
            password: $("#signin-password")
        }, T.forgot = {
            email: $("#forgot-email")
        }, T.reset = {
            password: $("#reset-password"),
            confirm: $("#reset-confirm")
        }, T.signup = {
            email: $("#signup-email"),
            password: $("#signup-password"),
            firstname: $("#signup-firstname"),
            lastname: $("#signup-lastname"),
            referral: $("#signup-referral")
        }, T.form = {
            login: $("#signin-form"),
            forgot: $("#forgot-form"),
            reset: $("#reset-form"),
            signup: $("#signup-form"),
            signup2: $("#signup-form-2")
        }, T.verify = {
            alert: $(".verify-alert"),
            confirm: $(".verify-confirm"),
            close: $(".verify-alert-close"),
            popup: $(".cd-verify"),
            emailBtn: $("#verify-email-btn, .verify-btn")
        }, T.referral = {
            input: $("#referral-code-input"),
            submit: $("#referral-submit"),
            skip: $("#referral-skip")
        }, T.facebookLogin = $("#facebook-sign-in"), T.googleLogin = $("#google-sign-in"), T.facebookSignup = $(".facebook-sign-up"), T.googleSignup = $(".google-sign-up"), T.forgotPasswordToggle = $("#forgot-password"), T.showPassword = $(".show-password"), T.startBtn = $(".lets-start-btn"), T.closeButton = $(".cd-modal-popup-close"), T.popupDiv = $("#alert-modal"), T.offerPageFacebook = $("#offerpage-facebook"), T.offerPageGoogle = $("#offerpage-google"), T.storeFavourite = $("#store-favourite-heart"), T.hasReferralCode = $(".is-referred"), T.socialSignupReferralCode = $("#post-social-signup-referral"), T.socialSignupReferralSubmit = $("#social-signup-referral-submit"), T.socialSignupReferralInput = $("#social-signup-referral-input"), T.socialSignupReferralError = $("#social-signup-referral-error"), T.continueToOffers = $("#continue-after-signup"), T.emailSignupReferralBox = $("#email-signup-referral-box"), T.congratsModalReferralBlock = $("#social-signup-user-referral"), T.emailLoginBtn = $(".sign-in-btn"), T.reCaptcha = $(".g-recaptcha"), T.claimRaffle = $(".store-raffle")
    }

    function l() {
        T.offerPageFacebook.click(P.facebookPopup), T.offerPageGoogle.click(P.googlePopup), T.form.login.submit(R.showCaptcha), T.form.forgot.submit(B.forgotSubmit), T.form.reset.submit(D.resetSubmit), T.form.signup.submit(U.emailCheck), T.form.signup2.submit(U.signup), T.facebookLogin.click(P.facebookPopup), T.googleLogin.click(P.googlePopup), T.facebookSignup.click(P.facebookSignup), T.googleSignup.click(P.googleSignup), T.forgotPasswordToggle.click(function() {
            m(), T.modals.login.removeClass("md-show"), T.modals.forgotPassword.addClass("md-show")
        }), T.modalClose.click(function(e) {
            e.stopPropagation(), ($(this).hasClass("md-overlay") || $(this).hasClass("md-close")) && ($("#" + $(this).attr("data-modal")).removeClass("md-show"), "signup-modal" !== $(this).attr("data-modal") && "login-modal" !== $(this).attr("data-modal") && "signup-modal-2" !== $(this).attr("data-modal") || m(), "alert-modal" !== $(this).attr("data-modal") && (isGetCodeLastAction = !1))
        }), T.formInput.on("keyup change", function() {
            return $(this).removeClass("focus-out"), g(this.id) ? ($(this).addClass("validation-true"), $("." + $(this).attr("data-error")).hide(), void $("." + $(this).attr("data-box")).addClass("input--filled")) : "" === $(this).val() ? ($("." + $(this).attr("data-box")).removeClass("input--filled"), "email" !== $(this).attr("name") && $("." + $(this).attr("data-error")).css({
                color: "gray",
                display: "inline-block"
            }), void("firstname" == $(this).attr("name") && $("." + $(this).attr("data-error")).text("Only text characters are allowed."))) : ($("." + $(this).attr("data-box")).addClass("input--filled"), $("." + $(this).attr("data-error")).removeClass("move-down"), ("referralCode" !== $(this).attr("name") || "1" === $(this).attr("valid-referral-code")) && ("email" !== $(this).attr("name") && $("." + $(this).attr("data-error")).css({
                color: "#eb3937",
                display: "inline-block"
            }), "firstname" == $(this).attr("name") && ($("." + $(this).attr("data-error")).text("Only text characters are allowed."), $(this).val().length > 30 && ($("." + $(this).attr("data-error")).text("First name cannot be more than 30 characters."), 0 == newSignupModalFlag && $("." + $(this).attr("data-error")).addClass("move-down")))), void 0)
        }), T.formInput.blur(function() {
            if ($(this).attr("id").search("referral") === -1 && "" !== $(this).val()) {
                if ("email" === $(this).attr("name") && !g($(this).attr("id"))) return void $("." + $(this).attr("data-error")).css({
                    color: "#eb3937",
                    display: "inline-block"
                });
                g($(this).attr("id"))
            } else "" === $(this).val() && ($(this).addClass("focus-out"), $("." + $(this).attr("data-error")).hide().css("color", "#eb3937"))
        }), T.formInput.focus(function() {
            if ($(this).removeClass("focus-out"), g(this.id)) return $(this).addClass("validation-true"), void $("." + $(this).attr("data-error")).hide();
            if ("" === $(this).val() && "email" !== $(this).attr("name")) $("." + $(this).attr("data-error")).css({
                color: "gray",
                display: "inline-block"
            });
            else {
                if ("referralCode" === $(this).attr("name") && "1" !== $(this).attr("valid-referral-code")) return;
                "email" !== $(this).attr("name") && $("." + $(this).attr("data-error")).css({
                    color: "#eb3937",
                    display: "inline-block"
                })
            }
        }), T.formInput.on("input", function() {
            "" !== $(this).val() && $(this).trigger("keyup")
        }), T.showPassword.click(function() {
            "text" == $("#" + $(this).attr("data-input")).prop("type") ? ($("#" + $(this).attr("data-input")).prop("type", "password"), a.prod_cdn ? $(this).attr("src", a.prod_cdn + "/modules/web/assets/images/eye.png") : $(this).attr("src", "/modules/web/assets/images/eye.png")) : ($("#" + $(this).attr("data-input")).prop("type", "text"), a.prod_cdn ? $(this).attr("src", a.prod_cdn + "/modules/web/assets/images/red-eye.png") : $(this).attr("src", "/modules/web/assets/images/red-eye.png"))
        }), T.modals.changeModal.click(function() {
            m(), T.modals.signup2.removeClass("md-show"), T.signup.email.val($("#sign-top-email").html()), $(".signup-email-box").addClass("input--filled"), T.modals.signup.addClass("md-show"), T.signup.email.focus()
        }), $(document).on("click", T.toggler.login, function() {
            "undefined" != typeof isGetCodeLastAction && isGetCodeLastAction || (A.lastAction.openPage = $(this).attr("data-page"), A.lastAction.openModal = $(this).attr("data-modal"), "startShopModal" !== A.lastAction.openModal && "startShopStoreModal" !== A.lastAction.openModal || (isGetCodeLastAction = !0, A.lastAction.modalId = $(this).data("modal-id"), A.lastAction.searchMerchant = $(this).data("search-merchant"), A.lastAction.highlightedOffer = $(this).data("highlighted-offer"), A.lastAction.url = $(this).data("sub-url"))), m(), T.modals.signup2.removeClass("md-show"), T.modals.signup.removeClass("md-show"), T.modals.login.addClass("md-show"), T.login.email.focus(), s.hide()
        }), $(document).on("click", T.toggler.signup, function() {
            "undefined" != typeof isGetCodeLastAction && isGetCodeLastAction || (A.lastAction.openPage = $(this).attr("data-page"), A.lastAction.openModal = $(this).attr("data-modal"), "startShopModal" !== A.lastAction.openModal && "startShopStoreModal" !== A.lastAction.openModal || (isGetCodeLastAction = !0, A.lastAction.modalId = $(this).data("modal-id"), A.lastAction.searchMerchant = $(this).data("search-merchant"), A.lastAction.highlightedOffer = $(this).data("highlighted-offer"), A.lastAction.url = $(this).data("sub-url"))), m(), T.popupDiv.removeClass("md-show"), T.modals.forgotPassword.removeClass("md-show"), T.modals.login.removeClass("md-show"), T.modals.signup.addClass("md-show"), T.signup.email.focus()
        }), T.verify.close.click(function() {
            T.verify.popup.hide()
        }), T.verify.emailBtn.click(function() {
            e.ajax(a.BASE_URL + "/users/me/verify/user", "GET", null, function(e) {
                1 == e.success ? e.response.status ? (T.verify.alert.hide(), T.verify.confirm.show(), $("#emailVerificationModal").removeClass("md-show"), $("#startShopModal").removeClass("md-show"), setTimeout(function() {
                    T.verify.confirm.hide()
                }, 15e3)) : s.show("Email not sent , Try again", "error") : e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error")
            }, function() {
                s.show("Email not sent , Try again", "error")
            }, !0)
        }), T.startBtn.click(function() {
            T.modals.signupSuccess.removeClass("md-show")
        }), T.referral.submit.click(function() {
            A.referralCode = T.referral.input.val(), T.referral.input.val(""), P.openSignup()
        }), T.referral.skip.click(function() {
            A.referralCode = "", P.openSignup()
        }), T.hasReferralCode.click(function() {
            T.socialSignupReferralCode.css("display", "block"), T.emailSignupReferralBox.css("visibility", "visible"), T.hasReferralCode.css("display", "none"), T.signup.referral.val() && T.signup.referral.parent().addClass("input--filled")
        }), T.socialSignupReferralError.click(function() {
            T.socialSignupReferralError.css("display", "none")
        }), T.socialSignupReferralInput.keyup(function() {
            if (6 === T.socialSignupReferralInput.val().length) {
                var o = {
                    referral_code: T.socialSignupReferralInput.val()
                };
                e.ajax(a.BASE_URL + "/users/validate-referral-code", "POST", o, function(e) {
                    e.success === !0 && e.response.status === !1 && (T.socialSignupReferralError.css("display", "block"), T.socialSignupReferralError.text(e.response.message))
                }, null, !1, "json")
            }
        }), T.signup.referral.on("keyup blur", function() {
            if (6 === T.signup.referral.val().length) {
                var o = {
                    referral_code: T.signup.referral.val()
                };
                e.ajax(a.BASE_URL + "/users/signup-modal-info", "POST", o, function(e) {
                    e.success === !0 && (e.response.is_valid_referral_code === !0 ? ($("#referree-name").text(e.response.first_name), $("#referree_bonus").text(e.response.referee_bonus), $("#referree_target").text(e.response.referee_target), $(".signup-referral-code-error").css("display", "none"), T.signup.referral.removeClass("sign-in-input-error"), T.signup.referral.attr("valid-referral-code", 1), T.signup.referral.addClass("validation-true")) : ($(".signup-referral-code-error").css("display", "block"), T.signup.referral.addClass("sign-in-input-error"), T.signup.referral.removeClass("validation-true"), T.signup.referral.attr("valid-referral-code", 0)))
                }, null, !1, "json")
            } else T.signup.referral.addClass("sign-in-input-error"), T.signup.referral.removeClass("validation-true")
        }), T.continueToOffers.click(function() {
            A.lastAction.openModal ? k() : (T.modals.signupSuccess.removeClass("md-show"), d())
        }), T.socialSignupReferralSubmit.click(function() {
            var o = {
                referral_code: T.socialSignupReferralInput.val()
            };
            e.ajax(a.BASE_URL + "/users/delayed-referral-submit", "POST", o, function(e) {
                e.success === !0 ? e.response.status === !0 ? (T.socialSignupReferralCode.css("display", "none"), $("#code-accepted-txt").css("display", "block"), $("#code-accepted-txt").html('<i class="fa fa-check"></i>' + e.response.message)) : e.response.status === !1 && (T.socialSignupReferralError.css("display", "block"), T.socialSignupReferralError.text(e.response.message)) : s.show("Invalid Referral Code", "error")
            }, function() {
                s.show("Referral Code could not be submitted", "error")
            }, !0, "json")
        }), $(".signup-success-md-overlay").click(function() {
            T.modals.signupSuccess.removeClass("md-show"), d()
        })
    }

    function c(e) {
        e.stopPropagation(), 27 === e.keyCode && (T.modals.signup.hasClass("md-show") || T.modals.login.hasClass("md-show") || T.modals.signup2.hasClass("md-show")) && (m(), T.modals.signup.find(".md-close").css("display", "none")), T.closeButton.each(function() {
            27 === e.keyCode && "signup-success-modal" === $(this).attr("data-modal") && "1" === window.newSignupModalFlag || ($("#" + $(this).attr("data-modal")).removeClass("md-show"), "1" === window.newSignupModalFlag && "signup-success-modal" === $(this).attr("data-modal") && d())
        }), o.show(!1), n.disableBodyScroll(!1)
    }

    function d() {
        T.congratsModalReferralBlock && "block" === T.congratsModalReferralBlock.css("display") && "block" === $("#code-accepted-txt").css("display") && w()
    }

    function u() {
        A.location.lat = A.location.lng = A.location.error = null, e.ajax("https://www.googleapis.com/geolocation/v1/geolocate?key=" + A.GEOLOCATION_API_KEY, "POST", null, function(e) {
            A.location.lat = e.location.lat, A.location.lng = e.location.lng, p()
        }, function(e) {
            A.location.error = e.responseText, p()
        }, !1)
    }

    function f() {
        location.href.search("signup-success") == -1 && location.href.search("login-success") == -1 || ((new Fingerprint2).get(function(e, o) {
            A.fingerprint = o
        }), u())
    }

    function p() {
        var o = {
            data: A.fingerprint,
            lat: A.location.lat,
            lng: A.location.lng
        };
        e.ajax(a.BASE_URL + "/users/analytics", "POST", o, null, null)
    }

    function h(e, o) {
        var t = {};
        "0" !== window.newSignupModalFlag && e ? (t.modal = "signup-success", o && (t.method = "socialsignup"), t.lastmodal = A.lastAction.openModal, A.lastAction.modalId && (t.offer = A.lastAction.modalId)) : (t.modal = A.lastAction.openModal, A.lastAction.modalId && (t.offer = A.lastAction.modalId)), A.lastAction.searchMerchant && (t.merchant = A.lastAction.searchMerchant), A.lastAction.highlightedOffer && (t.h = A.lastAction.highlightedOffer);
        var a = $.param(t),
            s = window.location.search.length > 0 ? "&" : "?";
        window.location.href = window.location.href + s + a + ("undefined" != typeof A.lastAction.url ? "&" + A.lastAction.url : "")
    }

    function m() {
        T.emailSignupReferralBox.css("visibility", "hidden"), T.hasReferralCode.css("display", "inline-block"), T.formInput.val(""), T.formInput.removeClass("validation-true"), T.formError.hide(), T.inputCtr.removeClass("input--filled"), T.forgotPasswordToggle.hide(), T.formPassword.prop("type", "password"), T.emailLoginBtn.show(), "undefined" != typeof useRecaptcha && useRecaptcha && "undefined" != typeof grecaptcha && grecaptcha && "function" == typeof grecaptcha.reset && grecaptcha.reset(), a.prod_cdn ? T.showPassword.attr("src", a.prod_cdn + "/modules/web/assets/images/eye.png") : T.showPassword.attr("src", "/modules/web/assets/images/eye.png")
    }

    function g(e) {
        return "referralCode" !== $("#" + e).attr("name") && (t.validate($("#" + e).val(), $("#" + e).attr("name")) ? ($("." + $("#" + e).attr("data-error")).hide(), $("#" + e).removeClass("sign-in-input-error"), !0) : ("email" !== $("#" + e).attr("name") && $("." + $("#" + e).attr("data-error")).show(), $("#" + e).hasClass("sign-in-input") && ($("#" + e).addClass("sign-in-input-error"), $("#" + e).removeClass("focus-out")), !1))
    }

    function b() {
        var o = e.queryDeserializer(["modal", "page"]);
        o.page && (A.lastAction.openPage = unescape(o.page), o.queryParams && (A.lastAction.openPage += o.queryParams)), location.href.indexOf("reset-password") != -1 ? (o.modal = "reset-password", m(), T.modals.reset.addClass("md-show"), A.key = location.pathname.replace("/reset-password/", ""), e.logUserAction("pageview-referral-return", A.key)) : "check-auth" === o.modal ? (m(), T.modals.checkAuth.addClass("md-show"), $("#authorise-email").html($("#info-email").val())) : "signup-success" === o.modal ? (T.modals.signupSuccess.addClass("md-show"), "1" === newSignupModalFlag && "0" === userReferralDetails && "socialsignup" === o.method && T.congratsModalReferralBlock && T.congratsModalReferralBlock.css("display", "block"), delete o.method) : "login" === o.modal ? (m(), T.modals.login.addClass("md-show"), T.login.email.focus()) : "forgot-password" === o.modal ? (m(), T.modals.forgotPassword.addClass("md-show")) : "signup" == o.modal ? (m(), o.referral && (T.signup.referral.val(o.referral), "1" === newSignupModalFlag && (A.referralCode = o.referral)), T.modals.signup.addClass("md-show"), T.signup.email.focus()) : "alert" == o.modal ? "usuccess" == o.status ? s.show("Email is verified.", "success") : "ufail" == o.status ? s.show("Verification failed.", "error") : "cfail" == o.status ? s.show("Oops! It seems you have already subscribed.", "error") : "csuccess" == o.status ? s.show("Email subscription verified.", "success") : "invalid-key" == o.status ? s.show("Invalid recovery link") : "already-verified" == o.status ? s.show("Email already verified.", "success") : "unsubscribe" == o.status ? s.show("Looks like you have already unsubscribed using the link.", "success") : "unsubscribeLoggedIn" == o.status ? ("newsletter" != o.store && (o.store += " alerts"), s.show("You've successfully unsubscribed from " + decodeURI(o.store) + ". Please review your subscriptions.", "success")) : "unsubscribeByKey" == o.status ? ("newsletter" != o.store && (o.store += " alerts"), s.show("You've successfully unsubscribed from " + decodeURI(o.store) + ". Please review your subscriptions.", "error")) : "referralUnsubscribe" == o.status && s.show("You've successfully unsubscribed.", "success") : "alert-login" == o.modal ? (m(), "unsubscribeLogIn" == o.status && ("newsletter" != o.store && (o.store += " alerts"), s.show("You've successfully unsubscribed from " + decodeURI(o.store) + ". Login to manage your subscriptions", "success", !0)), $(".md-overlay").css("pointer-events", "none"), $(".sign-up-modal .md-close").html(""), $(".sign-in-modal .md-close").html(""), T.modals.login.addClass("md-show"), T.login.email.focus()) : "alert" == o.popup && "logout" == o.type ? (s.show("You've made 3 wrong password attempts. For security reasons we've logged you out.", "error"), v()) : "alert" == o.popup && "email_verified" == o.type ? s.show("Thanks! Your email has been verified. All CouponDunia emails will be sent to this email address.", "success") : "invalid-reset-link" == o.modal ? s.show("This link is invalid or has expired.", "error") : "accountBlocked" === o.modal ? s.show("Your access has been temporarily disabled, please contact CouponDunia Customer Care for details.", "error") : "undefined" != typeof page && "unsubscribePage" == page && ("newsletter" != unsubscribedStore && (unsubscribedStore += " alerts"), s.show("You've successfully unsubscribed from " + unsubscribedStore + ". Please review your subscriptions.", "success"))
    }

    function v() {
        var o = e.queryDeserializer();
        delete o.popup, delete o.type, o.hasOwnProperty("queryParams") && delete o.queryParams;
        var t = e.querySerializer(o);
        "" !== t && (t = "?" + t), history.replaceState(null, "", "/" + t)
    }

    function w(o, t) {
        var a = e.queryDeserializer();
        delete a.modal, delete a.page, delete a.method;
        var s = window.location.origin + window.location.pathname;
        a.hasOwnProperty("queryParams") && delete a.queryParams, "signup-success" != o && "login-success" != o || (a.modal = o), "socialsignup" == t && (a.method = "socialsignup"), A.claimFreeTicket && (a.claimFreeTicket = "true");
        var r = e.querySerializer(a);
        "" !== r && (r = "?" + r), new RegExp(_.join("|")).test(window.location.href) && (s = window.location.origin), window.location.href = s + r
    }

    function y() {
        A.extension = window.location.href.indexOf("extension");
        for (var e = window.location.href.split("&"), o = 1; o < e.length; o++) A[e[o].split("=")[0]] = e[o].split("=")[1]
    }

    function k() {
        var e = {};
        e.modal = A.lastAction.openModal, A.lastAction.modalId && (e.offer = A.lastAction.modalId), A.lastAction.searchMerchant && (e.merchant = A.lastAction.searchMerchant), A.lastAction.highlightedOffer && (e.h = A.lastAction.highlightedOffer);
        var o = $.param(e),
            t = window.location.search.length > 0 ? "&" : "?";
        window.location.href = window.location.href + t + o + ("undefined" != typeof A.lastAction.url ? "&" + A.lastAction.url : "")
    }

    function C() {
        var o = {};
        if (o.lastmodal = e.getQueryParam("lastmodal"), o.offer = e.getQueryParam("offer"), o.h = e.getQueryParam("h"), o.merchant = e.getQueryParam("merchant"), o.modal = e.getQueryParam("modal"), o.lastmodal) {
            A.lastAction.openModal = o.lastmodal, o.offer && (T.continueToOffers.text("CONTINUE TO OFFERS"), A.lastAction.modalId = o.offer), o.h && (A.lastAction.highlightedOffer = o.h), o.merchant && (A.lastAction.searchMerchant = o.merchant);
            var t = window.location.href.split("?")[1];
            void 0 != t && "signup-success" === o.modal && (t = t.split("modal=signup-success")[0], "&" === t.slice(-1) && (t = t.substr(0, t.length - 1)), A.lastAction.url = t)
        }
    }

    function S() {
        O = !0, R.login()
    }

    function x() {
        $(window).on("focus", function() {
            e.getCookie("public_id") !== M && location.reload()
        })
    }

    function I() {
        i(), l(), x(), "1" === window.newSignupModalFlag && C(), b(), L.closeVerify(), y(), f()
    }
    var T = {},
        _ = ["reset-password"],
        M = e.getCookie("public_id"),
        A = {
            lastAction: {
                openPage: null,
                openModal: null,
                modalId: null
            },
            key: null,
            referralCode: "",
            signFlag: null,
            extension: null,
            makeFavouriteStore: !1,
            location: {
                lat: null,
                lng: null,
                error: null
            },
            fingerprint: null,
            GEOLOCATION_API_KEY: "AIzaSyAYVrgH4tOk-vdnl2Fqvn9mr2__Hyu8XlY",
            claimRaffle: !1,
            claimFreeTicket: !1
        },
        O = !1,
        P = function() {
            function t() {
                i("facebook")
            }

            function n() {
                i("google")
            }

            function i(e) {
                var o = "",
                    t = "";
                A.referralCode && (o = A.referralCode, t = "?referral_code=" + o);
                var s = a.BASE_URL + "/social_login/" + e + ".php" + t;
                window.open(s, "_blank", "height=500, width=600, status=yes, toolbar=no, menubar=no, location=no,addressbar=no")
            }

            function l(t) {
                var n = {
                    source: "google",
                    access_token: t,
                    referral_code: A.referralCode
                };
                A.extension >= 0 ? e.ajax(a.BASE_URL + "/users/auth/social-login", "POST", n, function(e) {
                    1 == e.success ? window.location.replace(decodeURIComponent(A.success_url)) : e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error")
                }, function(e) {
                    s.show("Unable to Signup, Try again", "error")
                }, !0, "json") : (o.show(!0), e.ajax(a.BASE_URL + "/users/auth/social-login", "POST", n, function(e) {
                    if (1 == e.success)
                        if (1 == e.response.status)
                            if (A.makeFavouriteStore && T.storeFavourite.trigger("click", [!0]), 1 == A.claimRaffle && T.claimRaffle.trigger("click"), e.response.is_new_user ? r.setValue({
                                    event: "userRegistration",
                                    signup_type: "google"
                                }) : r.setValue({
                                    event: "userLogin",
                                    login_type: "google"
                                }), r.setValue({
                                    used_referral_code: referralType
                                }), r.setUserData(e.response.user), r.push(), A.lastAction.openPage) {
                                var t = A.lastAction.openPage.indexOf("?") == -1 ? "?" : "&";
                                e.response.is_new_user ? window.location.href = A.lastAction.openPage + t + "modal=signup-success&method=socialsignup" : window.location.href = A.lastAction.openPage
                            } else A.lastAction.openModal ? "0" === window.newSignupModalFlag ? h(!1, !0) : e.response.is_new_user ? h(!0, !0) : u(!0) : e.response.is_new_user ? w("signup-success", "socialsignup") : "0" === window.newSignupModalFlag ? e.response.collect_user_analytics_data ? w("login-success") : w() : u(!1, e.response.collect_user_analytics_data);
                    else o.show(!1), s.show("Signup failed", "error");
                    else o.show(!1), e.errors.user_display ? s.show(e.errors.message, "error") : s.show("User Authentication Failed", "error")
                }, function(e) {
                    o.show(!1), s.show("Error in Request", "error")
                }, !1))
            }

            function c(t) {
                var n = {
                    source: "facebook",
                    access_token: t,
                    referral_code: A.referralCode
                };
                A.extension >= 0 ? e.ajax(a.BASE_URL + "/users/auth/social-login", "POST", n, function(e) {
                    1 == e.success ? window.location.replace(decodeURIComponent(A.success_url)) : e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error")
                }, function(e) {
                    s.show("Unable to Signup, Try again", "error")
                }, !0, "json") : (o.show(!0), e.ajax(a.BASE_URL + "/users/auth/social-login", "POST", n, function(t) {
                    if (1 == t.success)
                        if (1 == t.response.status)
                            if (e.deleteCookie("referralCode"), A.makeFavouriteStore && T.storeFavourite.trigger("click", [!0]), 1 == A.claimRaffle && T.claimRaffle.trigger("click"), t.response.is_new_user ? r.setValue({
                                    event: "userRegistration",
                                    signup_type: "facebook"
                                }) : r.setValue({
                                    event: "userLogin",
                                    login_type: "facebook"
                                }), r.setValue({
                                    used_referral_code: referralType
                                }), r.setUserData(t.response.user), r.push(), A.lastAction.openPage) {
                                var a = A.lastAction.openPage.indexOf("?") == -1 ? "?" : "&";
                                t.response.is_new_user ? window.location.href = A.lastAction.openPage + a + "modal=signup-success&method=socialsignup" : window.location.href = A.lastAction.openPage
                            } else A.lastAction.openModal ? "0" === window.newSignupModalFlag ? h(!1, !0) : t.response.is_new_user ? h(!0, !0) : u(!0) : t.response.is_new_user ? w("signup-success", "socialsignup") : "0" === window.newSignupModalFlag ? t.response.collect_user_analytics_data ? w("login-success") : w() : u(!1, t.response.collect_user_analytics_data);
                    else o.show(!1), s.show("Signup failed", "error");
                    else t.success === !1 && (o.show(!1), t.errors.user_display ? s.show(t.errors.message, "error") : s.show("User Authentication Failed", "error"))
                }, function(e) {
                    o.show(!1), s.show("Error in Request", "error")
                }, !1))
            }

            function d() {
                s.show("The entered referral code is invalid. Please re-enter code, or leave it blank.", "error")
            }

            function u(o, t) {
                void 0 === t && (t = !1),
                    e.ajax(a.BASE_URL + "/users/check-signup-delay", "POST", null, function(e) {
                        e.success === !0 && (o === !0 ? h(e.response.status, !0) : e.response.status === !0 ? w("signup-success", "socialsignup") : t ? w("login-success") : w())
                    }, null, !1, "json")
            }

            function f() {
                T.modals.signup2.removeClass("md-show"), T.modals.signup.removeClass("md-show"), A.signFlag = "facebook", "0" === window.newSignupModalFlag && 1 === isReferralScheme ? T.modals.referral.addClass("md-show") : P.openSignup();
                var o = e.getCookie("referralCode");
                o && "0" === window.newSignupModalFlag && T.referral.input.val(o)
            }

            function p() {
                T.modals.signup2.removeClass("md-show"), T.modals.signup.removeClass("md-show"), A.signFlag = "google", "0" === newSignupModalFlag && 1 === isReferralScheme ? T.modals.referral.addClass("md-show") : P.openSignup();
                var o = e.getCookie("referralCode");
                o && "0" === newSignupModalFlag && T.referral.input.val(o)
            }

            function m() {
                "0" === newSignupModalFlag && (A.referralCode = T.referral.input.val()), "0" === newSignupModalFlag && 1 === isReferralScheme && T.modals.referral.removeClass("md-show"), "facebook" == A.signFlag ? P.facebookPopup() : P.googlePopup()
            }
            return {
                facebookPopup: t,
                googlePopup: n,
                setFacebookAccessToken: c,
                setGoogleAccessToken: l,
                facebookSignup: f,
                googleSignup: p,
                openSignup: m,
                invalidReferralCode: d
            }
        }(),
        R = function() {
            function t() {
                if ("undefined" != typeof useRecaptcha && useRecaptcha && "undefined" != typeof grecaptcha && grecaptcha) {
                    var e = g("signin-email"),
                        o = g("signin-password");
                    e && o && grecaptcha.execute()
                } else R.login();
                return !1
            }

            function n() {
                var t = g("signin-email"),
                    n = g("signin-password"),
                    i = {
                        email: T.login.email.val(),
                        password: T.login.password.val()
                    };
                return "undefined" != typeof useRecaptcha && useRecaptcha && (i.recaptcha_verifier = $("#g-recaptcha-response").val()), t && n && (o.show(!0), e.ajax(a.BASE_URL + "/users/auth/email-login", "POST", i, function(e) {
                    if (T.forgotPasswordToggle.show(), T.emailLoginBtn.show(), "undefined" != typeof useRecaptcha && useRecaptcha && "undefined" != typeof grecaptcha && grecaptcha && "function" == typeof grecaptcha.reset && grecaptcha.reset(), e.success === !0)
                        if (e.response.status === !0)
                            if (A.makeFavouriteStore && T.storeFavourite.trigger("click", [!0]), 1 == A.claimRaffle && T.claimRaffle.trigger("click"), r.setValue({
                                    event: "userLogin",
                                    login_type: "email"
                                }), r.setUserData(e.response.user), r.push(), A.lastAction.openPage) window.location.href = A.lastAction.openPage;
                            else if (A.lastAction.openModal) {
                        var t = {};
                        t.modal = A.lastAction.openModal, A.lastAction.modalId && (t.offer = A.lastAction.modalId), A.lastAction.searchMerchant && (t.merchant = A.lastAction.searchMerchant), A.lastAction.highlightedOffer && (t.h = A.lastAction.highlightedOffer);
                        var a = $.param(t),
                            n = window.location.search.length > 0 ? "&" : "?";
                        window.location.href = window.location.href + n + a + ("undefined" != typeof A.lastAction.url ? "&" + A.lastAction.url : "")
                    } else e.response.collect_user_analytics_data ? w("login-success") : w();
                    else o.show(!1), s.show(e.response.message, "error");
                    else o.show(!1), T.login.password.val(""), $("." + T.login.password.attr("data-box")).removeClass("input--filled"), 410 == e.errors.code || 411 == e.errors.code ? e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error") : s.show('<b>Email/Password doesn\'t exist.<br>New User?</b> <u><a class="signup-link">Signup Here<a></u>', "error")
                }, function() {
                    o.show(!1), s.show("Unable to Login, Try again", "error")
                }, !1)), !1
            }
            return {
                login: n,
                showCaptcha: t
            }
        }(!0),
        B = function() {
            function o() {
                if (g("forgot-email")) {
                    var o = {
                        email: T.forgot.email.val()
                    };
                    e.logUserAction("user-forgot-password", o.email), e.ajax(a.BASE_URL + "/users/forgot-password", "POST", o, function(e) {
                        e.success === !0 ? e.response.status === !0 ? (T.modals.forgotPassword.removeClass("md-show"), s.show(e.response.message)) : (T.modals.forgotPassword.removeClass("md-show"), s.show("Email not sent, Try again", "error")) : (T.modals.forgotPassword.removeClass("md-show"), e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error"))
                    }, function() {
                        T.modals.forgotPassword.removeClass("md-show"), s.show("Verification email not sent, Try again", "error")
                    }, !0)
                }
                return !1
            }
            return {
                forgotSubmit: o
            }
        }(),
        D = function() {
            function t() {
                var t = g("reset-password"),
                    r = g("reset-confirm");
                if (t && r) {
                    o.show(!0);
                    var n = {
                        key: A.key,
                        new_password: T.reset.password.val(),
                        confirm_password: T.reset.confirm.val()
                    };
                    e.ajax(a.BASE_URL + "/users/reset-password", "POST", n, function(e) {
                        e.success === !0 ? e.response.status === !0 ? (o.show(!1), T.modals.reset.removeClass("md-show"), m(), T.modals.login.addClass("md-show"), T.login.email.focus()) : (o.show(!1), s.show("Password not changed, Try again", "error")) : (o.show(!1), e.errors.user_display ? s.show(e.errors.message, "error") : s.show("Error in Request,Try again!", "error"))
                    }, function(e) {
                        o.show(!1), s.show("Password not changed, Try again", "error")
                    }, !1)
                }
                return !1
            }
            return {
                resetSubmit: t
            }
        }(),
        U = function() {
            function t() {
                var o = $("#signup-referral").val();
                if ("" == o) var o = $(".bonus-code").html();
                if (g("signup-email")) {
                    var t = {
                        email: T.signup.email.val()
                    };
                    e.ajax(a.BASE_URL + "/users/auth/check-email", "POST", t, function(t) {
                        if (1 == t.success)
                            if (1 == t.response.status) {
                                r.setEvent("validSignupEmail"), r.setUserData(t.response.user), r.push(), $("#sign-top-email").html(T.signup.email.val()), o && (T.signup.referral.val(o), $(".signup-referral-box").addClass("input--filled")), T.modals.signup.removeClass("md-show"), T.modals.signup2.addClass("md-show"), T.signup.password.focus();
                                var a = e.getCookie("referralCode");
                                a && (T.signup.referral.val(a), T.hasReferralCode.trigger("click"))
                            } else s.show(t.response.message, "error");
                        else t.errors.user_display ? s.show(t.errors.message, "error") : s.show("Unable to Signup,Try again!", "error")
                    }, function() {
                        s.show("Unable to Signup, Try again", "error")
                    }, !0)
                }
                return !1
            }

            function n() {
                var t = g("signup-email"),
                    r = g("signup-password"),
                    n = g("signup-firstname");
                if ("0" === newSignupModalFlag && "" !== T.signup.lastname.val() && !g("signup-lastname")) return !1;
                if ("" !== T.signup.referral.val()) {
                    if (t && r && n) {
                        o.show(!0);
                        var l = {
                            referral_code: T.signup.referral.val()
                        };
                        referralType = joiningBonusCode == l.referral_code ? "joining_bonus" : l.referral_code ? "referral_code" : "", e.ajax(a.BASE_URL + "/users/verify-referral-code", "POST", l, function(e) {
                            1 == e.success ? i() : (o.show(!1), s.show("The entered referral code is invalid. Please re-enter code, or leave it blank.", "error"))
                        }, function() {
                            o.show(!1), s.show("Referral code verification failed, Try again", "error")
                        }, !1), e.logUserAction("pageview-referral-return", l.referral_code)
                    }
                    return !1
                }
                return i(), !1
            }

            function i() {
                var t = g("signup-email"),
                    n = g("signup-password"),
                    i = g("signup-firstname");
                if (t && n && i) {
                    o.show(!0);
                    var l = {
                        email: T.signup.email.val(),
                        password: T.signup.password.val(),
                        first_name: T.signup.firstname.val().trim(),
                        last_name: "0" === newSignupModalFlag ? T.signup.lastname.val().trim() : "",
                        referral_code: T.signup.referral.val().trim()
                    };
                    e.ajax(a.BASE_URL + "/users/auth/signup", "POST", l, function(t) {
                        if (1 == t.success)
                            if (1 == t.response.status)
                                if (A.makeFavouriteStore && T.storeFavourite.trigger("click", [!0]), 1 == A.claimRaffle && T.claimRaffle.trigger("click"), e.deleteCookie("referralCode"), r.setValue({
                                        event: "userRegistration",
                                        signup_type: "email"
                                    }), r.setValue({
                                        used_referral_code: referralType
                                    }), r.setUserData(t.response.user), r.push(), A.lastAction.openPage) {
                                    var a = A.lastAction.openPage.indexOf("?") == -1 ? "?" : "&";
                                    window.location.href = A.lastAction.openPage + a + "modal=signup-success"
                                } else A.lastAction.openModal ? "0" === newSignupModalFlag ? h(!1, !1) : h(!0, !1) : w("signup-success");
                        else o.show(!1), t.errors.user_display ? s.show(t.errors.message, "error") : s.show("Error in Request,Try again!", "error");
                        else o.show(!1), t.errors.user_display ? s.show(t.errors.message, "error") : s.show("Unable to Signup ,Try again!", "error")
                    }, function() {
                        o.show(!1), s.show("Unable to Signup, Try again", "error")
                    }, !1)
                }
                return !1
            }
            return {
                signup: n,
                emailCheck: t
            }
        }(),
        L = function() {
            function e() {
                setTimeout(function() {
                    T.verify.alert.hide()
                }, 15e3)
            }
            return {
                closeVerify: e
            }
        }();
    return I(), {
        invalidReferralCode: P.invalidReferralCode,
        setFacebookAccessToken: P.setFacebookAccessToken,
        setGoogleAccessToken: P.setGoogleAccessToken,
        closeAuthPopups: c,
        locals: A,
        captchaLogin: S
    }
}(_util, _loader, _validation, _config, _popUp, _gtm, _scroll);
var _auth = CD.c.auth;
CD.c.lazyload = function() {
    function e() {
        n.images = $("img[" + i.attribute + "]"), n.window = $(window)
    }

    function o() {
        var e = n.images.filter(function() {
            var e = $(this);
            if (!e.is(":hidden")) {
                var o = n.window.scrollTop(),
                    t = o + n.window.height(),
                    a = e.offset().top,
                    s = a + e.height();
                return s >= o - i.threshold && a <= t + i.threshold
            }
        });
        loaded = e.trigger("lazyload"), n.images = n.images.not(loaded)
    }

    function t() {
        n.images.one("lazyload", function() {
            var e = this.getAttribute(i.attribute);
            if (e) {
                this.setAttribute("src", e);
                var o = this;
                setTimeout(function() {
                    r(o)
                }, 1e3)
            }
        }), n.window.on("scroll.lazyload resize.lazyload", o)
    }

    function a(a, s) {
        i.attribute = a || "data-lazy-src", i.threshold = s || 0, e(), t(), o()
    }

    function s(e) {
        var o = e || "data-hover-src",
            t = $("img[" + o + "]");
        t.each(function() {
            var e = $(this).attr(o);
            $(this).attr("src", e);
            var t = this;
            setTimeout(function() {
                r(t)
            }, 1e3)
        })
    }

    function r(e) {
        $(e).removeClass("placeholder-img")
    }
    var n = {},
        i = {
            attribute: "data-lazy-src",
            threshold: 0
        };
    return {
        init: a,
        showHoverImages: s
    }
}();
var _lazyload = CD.c.lazyload;
CD.c.footer = function(e, o, t, a, s) {
    function r() {
        l.switchToMobile = $("#switch-site"), l.subscribeEmail = $(".subscribe-email"), l.confirmSubscribeEmail = $(".confirm-subscribe-email"), l.subscribeAlert = $(".footer-sub-alert"), l.subscribeForm = $("#subscribe-form"), l.document = $(document), l.scrollUp = $("#scrollup")
    }

    function n() {
        l.switchToMobile.click(function() {
            t.setCookie("targetSite", "mobile"), window.location.replace(e.MOBILE_URL)
        }), l.subscribeForm.submit(function() {
            return c.email = l.confirmSubscribeEmail.val(), c.email || (c.email = l.subscribeEmail.val()), o.validate(c.email, "email") ? t.ajax(e.BASE_URL + "/subscriptions/subscribe", "POST", {
                email: c.email,
                identifier: "newsletter",
                type: "newsletter"
            }, function(e) {
                if (1 == e.success) {
                    l.subscribeEmail.val("");
                    var o = e.response.message;
                    o.search("<>") > -1 && (o = o.replace("<>", "CouponDunia")), l.subscribeAlert.html(o)
                } else l.subscribeAlert.html("Unable to subscribe, Try again")
            }, function(e) {
                e.errors.user_dispaly ? l.subscribeAlert.html(e.errors.message) : s.show("Unable to Subscribe. Try Again")
            }, !1) : s.show("Oops, this is not a valid email ID! Please try entering again.", "error"), !1
        }), l.document.scroll(function() {
            document.body.getBoundingClientRect().top < -2 * document.body.offsetHeight ? l.scrollUp.addClass("load") : l.scrollUp.removeClass("load")
        }), l.scrollUp.click(function() {
            l.scrollUp.removeClass("load"), $("body, html").animate({
                scrollTop: 0
            }, 500)
        })
    }

    function i() {
        r(), n()
    }
    var l = {},
        c = {
            email: null
        };
    i()
}(_config, _validation, _util, _scroll, _popUp);
var _menudelay = function(e) {
    function o(o) {
        var t = e(this),
            a = null,
            s = [],
            r = null,
            n = null,
            i = e.extend({
                rowSelector: "> li",
                submenuSelector: "*",
                submenuDirection: "right",
                tolerance: 90,
                enter: e.noop,
                exit: e.noop,
                activate: e.noop,
                deactivate: e.noop,
                exitMenu: e.noop
            }, o),
            l = 3,
            c = 200,
            d = function(e) {
                s.push({
                    x: e.pageX,
                    y: e.pageY
                }), s.length > l && s.shift()
            },
            u = function() {
                n && clearTimeout(n), i.exitMenu(this) && (a && i.deactivate(a), a = null)
            },
            f = function() {
                n && clearTimeout(n), i.enter(this), g(this)
            },
            p = function() {
                i.exit(this)
            },
            h = function() {
                m(this)
            },
            m = function(e) {
                e != a && (a && i.deactivate(a), i.activate(e), a = e)
            },
            g = function(e) {
                var o = b();
                o ? n = setTimeout(function() {
                    g(e)
                }, o) : m(e)
            },
            b = function() {
                function o(e, o) {
                    return (o.y - e.y) / (o.x - e.x)
                }
                if (!a || !e(a).is(i.submenuSelector)) return 0;
                var n = t.offset(),
                    l = {
                        x: n.left,
                        y: n.top - i.tolerance
                    },
                    d = {
                        x: n.left + t.outerWidth(),
                        y: l.y
                    },
                    u = {
                        x: n.left,
                        y: n.top + t.outerHeight() + i.tolerance
                    },
                    f = {
                        x: n.left + t.outerWidth(),
                        y: u.y
                    },
                    p = s[s.length - 1],
                    h = s[0];
                if (!p) return 0;
                if (h || (h = p), h.x < n.left || h.x > f.x || h.y < n.top || h.y > f.y) return 0;
                if (r && p.x == r.x && p.y == r.y) return 0;
                var m = d,
                    g = f;
                "left" == i.submenuDirection ? (m = u, g = l) : "below" == i.submenuDirection ? (m = f, g = u) : "above" == i.submenuDirection && (m = l, g = d);
                var b = o(p, m),
                    v = o(p, g),
                    w = o(h, m),
                    y = o(h, g);
                return b < w && v > y ? (r = p, c) : (r = null, 0)
            };
        t.mouseleave(u).find(i.rowSelector).mouseenter(f).mouseleave(p).click(h), e(document).mousemove(d)
    }
    e.fn.menuAim = function(e) {
        return this.each(function() {
            o.call(this, e)
        }), this
    }
}(jQuery);
CD.c.header = function(e, o, t, a, s, r) {
    function n() {
        x.document = $(document), x.navBar = $(".navbar"), x.HeaderComponent = $(".header-component"), x.HeaderDropDown = $(".header-dropdown"), x.categoryItem = $(".header-category"), x.subCategoryContainer = $("#sub-categories-ctr"), x.subCategoryItem = $(".subcategory-ctr"), x.subOfferItem = $(".suboffer-ctr"), x.categoryMore = $("#category-more"), x.categoryPrev = $("#category-prev"), x.categoryDropLess = $("#less-categories"), x.categoryDropMore = $("#more-categories"), x.categoryContainer = $("#main-categories-ctr"), x.categoryOfferContainer = $("#header-banner-ctr"), x.userProfile = $("#user-profile"), x.userProfileDropDown = $("#user-profile-dropdown"), x.bellNotification = $("#bell-notification-ctr"), x.bellNotificationWrapper = $("#bell-notification-wrapper"), x.bellNotificationsDisplay = $("#bell-notification-display"), x.notificationMarkRead = $(".mark-read"), x.notificationLoader = $("#cd-notify-loader"), x.noNotifications = $(".no-more-notify"), x.viewAllWrapper = $(".view-all-wrapper"), x.signOut = $("#sign-out"), x.circleNotification = $("#circle-notify"), x.navbarSignForm = $(".navbar-sign-form"), x.salesBanner = $(".sale-header-banner"), x.floatingIcon = $(".sales-floating-icon"), x.ceoMessageDiv = $(".ceo-message-div")
    }

    function i() {
        $("a").click(function(e) {
            x.userProfileDropDown.hide(), x.HeaderDropDown.removeClass("delay-header").addClass("show-header"), x.HeaderComponent.removeClass("selectedMenu")
        }), x.HeaderComponent.mouseover(function() {
            $(".header-category").removeClass("selectedCategory"), $(this).addClass("selectedMenu"), x.HeaderComponent.not($(this)).removeClass("selectedMenu"), x.HeaderDropDown.removeClass("delay-header").addClass("show-header");
            var e = $(this).attr("id");
            if (e && $("#" + e.split("-")[1] + "-dropdown").removeClass("show-header").addClass("delay-header"), "header-category" === e && x.subCategoryContainer.hide(), !e || "header-offer" !== e && "header-store" !== e || s.showHoverImages(), "header-offer" === e) {
                var o = $("#sub-off-container-" + parseInt($("#" + e.split("-")[1] + "-dropdown").find(".selected-menu").attr("id").slice(3)));
                v(o)
            }
        }), x.HeaderComponent.mouseleave(function() {
            I.id = $(this).attr("id"), setTimeout(function() {
                I.id && !I.container[I.id.split("-")[1]] && ($("#" + I.id).removeClass("selectedMenu"), $("#" + I.id.split("-")[1] + "-dropdown").removeClass("delay-header").addClass("show-header"))
            }, 25)
        }), x.HeaderDropDown.mouseenter(function() {
            var e = $(this).attr("id").split("-");
            "dropdown" === e[1] && (I.container[e[0]] = !0)
        }), x.HeaderDropDown.mouseleave(function() {
            var e = $(this).attr("id").split("-");
            "dropdown" === e[1] && ($("#header-" + e[0]).removeClass("selectedMenu"), $("#" + e[0] + "-dropdown").removeClass("delay-header").addClass("show-header"), I.container[e[0]] = !1, I.prevX = !1)
        }), x.userProfile.click(function(e) {
            e.stopPropagation(), x.bellNotificationWrapper.hide(), x.userProfileDropDown.toggle()
        }), x.userProfileDropDown.click(function(e) {
            e.stopPropagation()
        }), x.document.on("click", "#category-more", m), x.document.on("click", "#category-prev", h), x.document.click(function(e) {
            $(e.target).hasClass("mark-read") || (x.userProfileDropDown.hide(), x.bellNotificationWrapper.hide())
        }), x.document.scroll(function(e) {
            var o = $(window).scrollTop();
            o > 60 ? x.navBar.addClass("scrolled-up-header") : x.navBar.removeClass("scrolled-up-header")
        }), x.bellNotification.click(function(e) {
            e.stopPropagation(), x.userProfileDropDown.hide(), I.loggedIn && ("block" === x.bellNotificationWrapper.css("display") ? x.bellNotificationWrapper.css("display", "none") : (x.bellNotificationWrapper.css("display", "block"), 1 != I.pageNo && t.ajax(a.BASE_URL + "/users/bellnotify", "GET", null, function(e) {
                I.pageNo++, $(e).appendTo("#bell-notification-display"), "undefined" != typeof notificationCount && notificationCount < 10 && ($(".no-more-notify").css("display", "block"), $(".cd-notify-loader").css("display", "none")), t.logUserAction("user-notification-dropdown-open")
            }, null, !1, "html")))
        }), x.circleNotification.length > 0 && I.loggedIn && t.ajax(a.BASE_URL + "/users/notification/unread", "GET", null, function(e) {
            e && e.response && e.response.unread && e.response.unread > 0 && (x.circleNotification.css("display", "block"), x.circleNotification.text(e.response.unread), x.bellNotification.addClass("hvr-buzz-out"), setTimeout(function() {
                x.bellNotification.addClass("hvr-buzz-out").removeClass("hvr-buzz-out")
            }, 2e3))
        }, null, !1), x.bellNotification.click(function() {
            I.loggedIn && t.ajax(a.BASE_URL + "/users/notifications/seen", "POST", null, function(e) {
                x.circleNotification.css("display", "none")
            }, null, !1)
        }), x.signOut.on("click", function() {
            o.show(!0), t.ajax(a.BASE_URL + "/users/auth/sign-out", "GET", null, function(a) {
                if (1 == a.success) {
                    var s = window.location.pathname,
                        r = t.deleteQueryParams();
                    delete r.modal, delete r.page, delete r.method, r.hasOwnProperty("queryParams") && delete r.queryParams;
                    var n = t.querySerializer(r);
                    "" !== n && (n = "?" + n), c(), "/withdrawal-authentication" == s ? window.location.href = "/" : s.indexOf("profile") !== -1 ? window.location.href = "/" + n : window.location.href = window.location.pathname + n, "/profile/refer" == s && (window.location.href = "/refer")
                } else o.show(!1), a.errors.user_display ? e.show(a.errors.message, "error") : e.show("Unable to Logout, Try again!", "error")
            }, function() {
                o.show(!1), e.show("Unable to Logout, Try again", "error")
            }, !1)
        }), x.document.scroll(function(e) {
            var o = $(window).scrollTop();
            o > 60 ? x.navBar.addClass("scrolled-up-header") : x.navBar.removeClass("scrolled-up-header")
        }), x.floatingIcon.length && x.floatingIcon.find(".close").click(function() {
            d(!1);
            var e = x.floatingIcon.attr("data-expiry").trim();
            if (e) try {
                if (e = e.indexOf("d") > 0 ? e.split("d") : e, "object" == typeof e) var o = parseInt(e[0]),
                    a = e[1] ? parseInt(e[1].slice(0, -1)) : 0;
                else e = e.split("h"), a = parseInt(e[0]);
                isNaN(o) && (o = 0), isNaN(a) && (a = 0);
                var s = (new Date).getTime() + 60 * (24 * o + a) * 60 * 1e3;
                t.hasLocalStorage() ? localStorage.setItem("floating-icon-expiry", s) : t.setCookie("floating-icon-expiry", s, o + 1)
            } catch (e) {}
        }), u(), x.salesBanner.length && x.salesBanner.find(".close").click(function() {
            l(!1);
            var e = x.salesBanner.attr("data-expiry").trim();
            if (r.locals.headerHeight = 80, "130px" === $(".filters-div").css("top") && $(".filters-div").css("top", 80), e) try {
                if (e = e.indexOf("d") > 0 ? e.split("d") : e, "object" == typeof e) var o = parseInt(e[0]),
                    a = e[1] ? parseInt(e[1].slice(0, -1)) : 0;
                else e = e.split("h"), a = parseInt(e[0]);
                isNaN(o) && (o = 0), isNaN(a) && (a = 0);
                var s = (new Date).getTime() + 60 * (24 * o + a) * 60 * 1e3;
                t.hasLocalStorage() ? localStorage.setItem("sales-ban-expiry", s) : t.setCookie("sales-ban-expiry", s, o + 1)
            } catch (e) {}
        }), x.document.on("keyup click scroll", function() {
            if (I.loggedIn && !I.dontShowCeo) {
                var e = t.hasLocalStorage() ? localStorage.getItem("ceo-message-expiry") : t.getCookie("ceo-message-expiry");
                (!e || (new Date).getTime() >= parseInt(e)) && (I.dontShowCeo = !0), I.dontShowCeo || (t.hasLocalStorage() ? localStorage.setItem("ceo-message-expiry", (new Date).getTime() + 18e5) : t.setCookie("ceo-message-expiry", (new Date).getTime() + 18e5, 1))
            }
        }), x.ceoMessageDiv.find(".close").click(function() {
            x.ceoMessageDiv.hide()
        }), $(document).on("ext-install-status", function() {
            x.ceoMessageDiv && I.loggedIn && (!I.expiry || (new Date).getTime() >= parseInt(I.expiry)) && x.ceoMessageDiv.show()
        })
    }

    function l(e) {
        if (x.salesBanner.length) {
            if (e) {
                var o = t.hasLocalStorage() ? localStorage.getItem("sales-ban-expiry") : t.getCookie("sales-ban-expiry");
                o && (new Date).getTime() < parseInt(o) && (e = !1)
            }
            document.body.classList[e ? "add" : "remove"]("sales-header")
        }
    }

    function c() {
        return t.hasLocalStorage() && localStorage.removeItem("welcome-ticket-colleted")
    }

    function d(e) {
        if (x.floatingIcon.length) {
            if (e) {
                var o = t.hasLocalStorage() ? localStorage.getItem("floating-icon-expiry") : t.getCookie("floating-icon-expiry");
                o && (new Date).getTime() < parseInt(o) && (e = !1)
            }
            e ? x.floatingIcon.show() : x.floatingIcon.hide()
        }
    }

    function u() {
        x.navbarSignForm.length && setTimeout(function() {
            x.navbarSignForm.find(".header-user-profile").append("<span class='notify-unread'>1</span>")
        }, 3e3), $(".signin-link, .signup-link").click(function() {
            $(".notify-unread").remove()
        })
    }

    function f(e, o, a, s, r) {
        t.logUserAction("user-notification-read", o), "unread" !== a && "read" !== a || p(o, e);
        var n = "";
        r && (n = "?notification_id=" + r), window.location.href = s + n
    }

    function p(e, o) {
        null == e && x.bellNotificationWrapper.css("display", "block"), void 0 === e && (e = null);
        var s = {};
        null !== e && (s.id = e), t.ajax(a.BASE_URL + "/users/notifications/clicked", "POST", s, function() {
            null === e && $(".notify-unread").removeClass("notify-unread")
        }, null, !1)
    }

    function h() {
        x.subCategoryContainer.hide(), x.categoryDropLess.show(), x.categoryDropMore.hide(), x.categoryMore.toggle(), x.categoryPrev.toggle()
    }

    function m() {
        x.subCategoryContainer.hide(), x.categoryDropLess.hide(), x.categoryDropMore.show(), x.categoryMore.toggle(), x.categoryPrev.toggle()
    }

    function g(e) {
        x.subCategoryItem.hide(), $("#sub-cat-container-" + e).show(), x.subCategoryContainer.show()
    }

    function b(e) {
        x.subOfferItem.hide();
        var o = $("#sub-off-container-" + e);
        o.show(), v(o)
    }

    function v(e) {
        e.hasClass("hovered") || (e.addClass("hovered"), x.bestOffersTitle = e.find(".header-banner-offer-desc"), C())
    }

    function w() {
        var e = x.notificationLoader,
            o = $(".cd-notify-loader")[0].getBoundingClientRect(),
            t = o.top;
        o.height;
        e = $(".cd-notify-loader").parent();
        do o = e[0].getBoundingClientRect(), e = e.parent(); while (e.parent().is("body"));
        t + 90 <= document.documentElement.clientHeight && "block" === $(".cd-notify-loader").css("display") && (I.loadMoreNotif = !0, y())
    }

    function y() {
        var e = {
            page: ++I.pageNo,
            "per-page": I.pageSize
        };
        I.loadMoreNotif && "none" === $(".no-more-notify").css("display") && "block" === x.bellNotification.css("display") && (I.loadMoreNotif = !1, t.ajax(a.BASE_URL + "/users/bellnotify/partial", "GET", e, function(e) {
            var o = new DOMParser,
                t = o.parseFromString(e, "text/html");
            t.querySelector("#notification-partial-data").children.length < 10 && ($(".no-more-notify").css("display", "block"), $(".cd-notify-loader").css("display", "none"));
            var a = t.querySelector("#notification-partial-data");
            $(a).appendTo("#show-more-notifications")
        }, null, !1, "html"))
    }

    function k(e) {
        x.categoryItem.removeClass("selectedCategory").removeClass("selected-menu"), I.catId = $(e).attr("id");
        var o = I.catId.substring(0, 3),
            t = parseInt(I.catId.slice(3));
        "cat" == o && "category-more" !== I.catId && "category-prev" !== I.catId ? ($(e).addClass("selectedCategory"), g(t)) : "off" == o && ($(e).addClass("selected-menu"), b(t))
    }

    function C() {
        x.bestOffersTitle.each(function() {
            $(this).height() > 48 && $(this).hasClass("best-ofr-cb") ? ($(this).addClass("best-offer-ellipsis"), $(this).css("height", "3.26em")) : $(this).height() > 70 && $(this).hasClass("best-ofr-wo-cb") && ($(this).addClass("best-offer-ellipsis"), $(this).css("height", "4.89em"))
        })
    }

    function S() {
        n(), I.loggedIn && (T.init(), I.expiry = t.hasLocalStorage() ? localStorage.getItem("ceo-message-expiry") : t.getCookie("ceo-message-expiry"), t.hasLocalStorage() ? localStorage.setItem("ceo-message-expiry", (new Date).getTime() + 18e5) : t.setCookie("ceo-message-expiry", (new Date).getTime() + 18e5, 1)), i(), l(!0), d(!0), $("#offer-category-ctr, #main-categories-ctr").menuAim({
            activate: k,
            rowSelector: ".header-category",
            exitMenu: function() {
                return !0
            }
        })
    }
    var x = {},
        I = {
            pageNo: 0,
            pageSize: 10,
            container: {
                category: !1,
                store: !1,
                offer: !1,
                help: !1
            },
            id: null,
            categoryData: null,
            storeData: null,
            catId: null,
            loadMoreNotif: !1,
            loggedIn: window.loggedIn,
            dontShowCeo: !1,
            expiry: null
        },
        T = function() {
            function e(e) {
                t.ajax(a.BASE_URL + "/users/notification/unread", "GET", null, e, null, !1)
            }

            function o(e) {
                e.success && e.response.unread && x.circleNotification.text() != e.response.unread && (x.circleNotification.css("display", "block"), x.circleNotification.text(e.response.unread), x.bellNotification.addClass("hvr-buzz-out"), setTimeout(function() {
                    x.bellNotification.addClass("hvr-buzz-out").removeClass("hvr-buzz-out")
                }, 2e3))
            }

            function s() {
                setInterval(function() {
                    e(o)
                }, 12e4)
            }
            return {
                init: s
            }
        }();
    return S(), {
        visibleY: w,
        markAsRead: p,
        notificationClick: f
    }
}(_popUp, _loader, _util, _config, _lazyload, _scroll), CD.c.body = function(e) {
    function o() {
        i.body = $(".main")
    }

    function t(e) {
        i.body[e ? "show" : "hide"]()
    }

    function a(o) {
        27 === o.keyCode && window.location.href.indexOf("alert-login") == -1 && ($(".disable-on-oh-wait").css("display", "inline-block"), $(".remove-close").hasClass("md-overlay") || $(".remove-close").toggleClass("md-overlay"), e.closeAuthPopups(o))
    }

    function s() {
        $(window).keydown(a)
    }

    function r(e) {
        document.body.classList[e ? "add" : "remove"]("no-scroll")
    }

    function n() {
        o(), s()
    }
    var i = {};
    return n(), {
        show: t,
        noScroll: r
    }
}(_auth), CD.c.search = function(e, o, t) {
    function a() {
        m.typeahead = $("#header-search-input"), m.searchForm = $("#search-form"), m.searchHolder = $(".search-placeholder"), m.recentSearchDiv = $(".recent-search-div"), m.recentSearch = $("#recent-searches"), m.recentSearchHistory = $("#recent-search-history")
    }

    function s() {
        m.typeahead.keyup(function(e) {
            if (g.typeaheadLength > 0) {
                var o = $(".recent-search-active"),
                    t = e.keyCode || e.which;
                if (38 == t || 40 == t) {
                    if (o.length) {
                        var a = $(".recent-search-active").removeClass("recent-search-active")[38 == t ? "prev" : "next"]().addClass("recent-search-active"),
                            s = $(a).children(".search-word").text();
                        "" == s ? m.typeahead.val(g.searchQuery) : m.typeahead.val(s)
                    } else 40 == t ? $(".recent-search:nth-child(1)").addClass("recent-search-active") : $(".recent-search:nth-child(" + g.typeaheadLength + ")").addClass("recent-search-active"), m.typeahead.val($(".recent-search-active").children(".search-word").text());
                    return
                }
            }
            g.searchQuery = $(this).val().trim(), g.lastSearchQueryLength >= g.searchQuery.length && (g.lastSearchQueryLength = 0), g.searchQuery.substr(-1).match(g.regex) && (g.searchQuery = g.searchQuery.replace(/[^a-zA-Z0-9.\s]/g, ""), "" == g.searchQuery || g.lastSearchQueryLength ? "" === g.searchQuery && (m.searchHolder.show(), m.recentSearchDiv.hide()) : (clearTimeout(g.timer), g.timer = setTimeout(function() {
                g.ajaxReq && g.ajaxReq.abort(), l(g.searchQuery)
            }, 100)))
        }), m.searchForm.submit(function(o) {
            o.preventDefault();
            var a = m.typeahead.val(),
                s = a.trim().replace(/[\u00A0-\u9999<>\&]/gim, function(e) {
                    return "&#" + e.charCodeAt(0) + ";"
                });
            if (s.length < 2) return void t.show("Please enter at least 2 characters and search.", "error");
            if (s = encodeURIComponent(s), "" != s) {
                i(s), m.searchHolder.hide(), m.recentSearchDiv.hide();
                for (var r in g.suggestions)
                    if (g.suggestions[r].text.trim().toLowerCase() === a.trim().toLowerCase()) {
                        switch (g.suggestions[r].type) {
                            case "store":
                                window.location.href = e.BASE_URL + "/" + g.suggestions[r].url_identifier;
                                break;
                            case "category":
                                window.location.href = e.BASE_URL + "/category/" + g.suggestions[r].url_identifier;
                                break;
                            case "subcategory":
                                window.location.href = e.BASE_URL + "/category/" + g.suggestions[r].parent_url_id + "/" + g.suggestions[r].url_identifier
                        }
                        return
                    }
                return window.location.href.search("search") === -1 ? window.location.href = e.BASE_URL + "/search?q=" + s : location.search.substring(1).split("&")[0].split("=")[1] !== s && (window.location.href = e.BASE_URL + "/search?q=" + s), !1
            }
        }), $(window).blur(function() {
            g.out = 1
        }), m.typeahead.focusout(function() {
            g.out = 0, m.searchHolder.hide(), m.recentSearchDiv.hide()
        }), m.typeahead.focusin(function() {
            g.out ? g.typeaheadLength ? m.recentSearchDiv.show() : m.searchHolder.show() : (m.recentSearchDiv.hide(), m.searchHolder.show())
        }), m.recentSearchDiv.on("mousedown", function(e) {
            e.preventDefault()
        }), m.recentSearchHistory.on("mousedown", function(e) {
            e.preventDefault()
        })
    }

    function r() {
        return o.hasLocalStorage() ? localStorage.getItem("recentSearches") : o.getCookie("recentSearches")
    }

    function n(e) {
        o.hasLocalStorage() ? localStorage.setItem("recentSearches", JSON.stringify(e)) : o.setCookie("recentSearches", JSON.stringify(e), 7)
    }

    function i(e) {
        e = decodeURIComponent(e.toString());
        var o = r(),
            t = new Array;
        if (null == o) t.unshift(e);
        else {
            t = JSON.parse(o);
            var a = t.indexOf(e);
            a >= 0 && t.splice(a, 1), t.length < 5 ? t.unshift(e) : (t.pop(), t.unshift(e))
        }
        n(t)
    }

    function l(t) {
        g.ajaxReq = o.ajax(e.BASE_URL + "/search/typeahead?query=" + t, "GET", null, function(e) {
            g.suggestions = e.response.suggestions;
            var o = "";
            g.typeaheadLength = Object.keys(g.suggestions).length;
            for (var a = 0; a < Object.keys(g.suggestions).length; a++) {
                var s = "",
                    r = !1;
                if (g.suggestions[a].hasOwnProperty("web_cashback") && g.suggestions[a].web_cashback && null != g.suggestions[a].web_cashback.type) {
                    s += '<div class="search-word-cashback cashback-text" data-gtm="' + g.suggestions[a].text + '">';
                    var n;
                    r = !0, 1 == g.suggestions[a].currency_type_id ? n = "percentage" == g.suggestions[a].web_cashback.type ? g.suggestions[a].web_cashback.value + "% cashback" : "Rs. " + g.suggestions[a].web_cashback.value + " cashback" : 2 == g.suggestions[a].currency_type_id ? n = "percentage" == g.suggestions[a].web_cashback.type ? g.suggestions[a].web_cashback.value + "% rewards" : "Rs. " + g.suggestions[a].web_cashback.value + " rewards" : 3 == g.suggestions[a].currency_type_id && (n = "percentage" == g.suggestions[a].web_cashback.type ? g.suggestions[a].web_cashback.value + "% voucher rewards" : "Rs. " + g.suggestions[a].web_cashback.value + " voucher rewards"), s += '<span class="cb-text flat-green"><span class="ico"></span><span>&nbsp;' + n + "</span></span></div>"
                }
                o += '<div class="recent-search typeahead" data-gtm="' + g.suggestions[a].text + '" onclick="CD.c.search.typeaheadClick(\'' + g.suggestions[a].type + "','" + g.suggestions[a].url_identifier + "','" + g.suggestions[a].parent_url_id + "','" + g.suggestions[a].text.replace(/'/g, "\\'") + '\')"><div class="search-word ' + (r ? "" : "no-cb-store") + '" data-gtm="' + g.suggestions[a].text + '">' + g.suggestions[a].text + "</div>" + s + '<div class="search-place" data-gtm="' + g.suggestions[a].text + '">' + ("subcategory" !== g.suggestions[a].type ? g.suggestions[a].type : "category") + "</div></div>"
            }
            "" === g.searchQuery ? (m.searchHolder.show(), m.recentSearchDiv.hide()) : (m.searchHolder.hide(), m.recentSearchDiv.html(o), m.recentSearchDiv.show()), t.length >= 4 && !g.typeaheadLength && (g.lastSearchQueryLength = t.length - 1)
        }, null, !1, "json")
    }

    function c() {
        var e = r();
        if (e) {
            for (var o = JSON.parse(e), t = "", a = 0; a < o.length; a++) t += '<div class="search-menu-placeholder recent-search-ph"><div class="section-name recent-searches" onclick="CD.c.search.requestSearch(\'' + o[a].replace(/'/g, "\\'") + "')\">" + o[a] + "</div></div>";
            m.recentSearch.show(), m.recentSearch.after(t)
        } else m.recentSearch.hide()
    }

    function d(o) {
        var t = o.trim().replace(/[\u00A0-\u9999<>\&]/gim, function(e) {
            return "&#" + e.charCodeAt(0) + ";"
        });
        t = encodeURIComponent(t), window.location.href = e.BASE_URL + "/search?q=" + t
    }

    function u(o, t, a, s) {
        var r = o;
        "subcategory" == o && (r = "category"), i(s), f(r, t), "store" === o ? window.location.href = e.BASE_URL + "/" + t : "category" === o ? window.location.href = e.BASE_URL + "/category/" + t : "subcategory" === o && (window.location.href = e.BASE_URL + "/category/" + a + "/" + t)
    }

    function f(t, a) {
        o.ajax(e.BASE_URL + "/search/typeahead/" + t + "/" + a, "POST", null, function(e) {}, null, !1, "json")
    }

    function p() {
        var e = r();
        e && e.indexOf("[") === -1 && (e = e.split(","), n(e))
    }

    function h() {
        a(), s(), p(), c()
    }
    var m = {},
        g = {
            key: null,
            regex: /[a-zA-Z0-9.\s]/,
            timer: null,
            suggestions: null,
            typeaheadLength: 0,
            searchQuery: null,
            out: 0,
            lastSearchQueryLength: 0,
            ajaxReq: null
        };
    return h(), {
        typeaheadClick: u,
        requestSearch: d
    }
}(_config, _util, _popUp), CD.p.offer = function(e, o, t, a, s, r, n) {
    function i() {
        V.offerGetCodeButton = $(".get-codebtn"), V.lessDesc = $(".less-desc"), V.moreDesc = $(".more-desc"), V.lessTag = $(".less-tag"), V.moreTag = $(".more-tag"), V.openComment = $(".open-comment"), V.offersWrapper = "undefined" != typeof isSearchPage && isSearchPage ? $(".content-wrapper-search") : $(".offer-cards"), V.getCodeVisibleButton = $(".copy-visible-code"), V.sendOTP = $(".send-otp"), V.phoneNumberForOTP = $("#otp-mobile-number"), V.otpCodeInput = $("#otp-code"), V.submitOTPCode = $(".submit-otp"), V.timer = $(".otp-expire-timer"), V.document = $(document), V.otcSuccessBtn = $(".success-btn-otc"), V.alreadySubscribed = $(".already-subscribed-message"), V.feedbackSubscriptionBtn = $(".subscription-textbox-holder"), V.otcInputHolder = $(".otp-input-holder"), V.copyButton = $(".copy-btn"), V.moreDescriptionTextArea = $(".editable-description"), V.disableAdblockModal = $("#disableAdblockModal"), V.howToDisableAdblockBtn = $(".how-to-do-btn"), V.disabledAdblockBtn = $(".disabled-adblock-btn"), V.skipAdblockCb = $(".skip-adblock-btn"), V.howToUseModal = $(".how-to-use-modal"), V.mainImageContainer = $(".desktop-image-zoom-primary-image-container"), V.modalMainImage = $(".desktop-image-zoom-primary-image-container img"), V.nextImageBtn = $(".zoom-nav-next-div"), V.prevImageBtn = $(".zoom-nav-prev-div"), V.closeHowToUseModal = $(".how-to-use-container-close"), V.modalThumbnailsContainer = $(".thumbnails-horizontal-container"), V.howToUseModalContainer = $(".how-to-use-container"), V.prevThumbnails = $(".prev-thumbnails"), V.nextThumbnails = $(".next-thumbnails"), V.modalImageDesc = $(".image-desc"), V.modalLoader = $(".how-to-use-modal-loader")
    }

    function l() {
        var e;
        V.moreDescriptionTextArea.keyup(Q), V.document.click(function(e) {
            if ($(e.target).hasClass("mtc-md-overlay")) return void $(".merchant-terms-conditions-modal").css("display", "none");
        }), V.howToDisableAdblockBtn.click(function() {
            V.disableAdblockModal.removeClass("md-show")
        }), V.disabledAdblockBtn.click(function() {
            V.disableAdblockModal.removeClass("md-show"), $(this).hasClass("cliked-store-btn") || (a.locals.skipLogin = !1, a.locals.showModal = !0, c.call(e))
        }), V.skipAdblockCb.click(function() {
            V.disableAdblockModal.removeClass("md-show"), $(this).hasClass("cliked-store-btn") || (a.locals.skipLogin = !0, a.locals.showModal = !0, c.call(e, !0), $("#ohWaitModal").removeClass("md-show"))
        }), V.offersWrapper.on("click", ".offer-get-code-link", function() {
            var o = a.checkAdblock();
            J.isLoggedIn && o && 1 === $(this).closest('[data-offer-key^="isCashback"]').data("offer-value") ? (e = this, "true" === $(this).attr("data-flip") ? V.disabledAdblockBtn.attr("data-gtm", "flip") : V.disabledAdblockBtn.attr("data-gtm", ""), V.disableAdblockModal.addClass("md-show")) : (a.locals.skipLogin = !1, a.locals.showModal = !0, c.call(this))
        }), V.offersWrapper.on("click", ".copy-visible-code", function() {
            var e = $(this);
            if (J.codeCopied = !1, P(e), J.codeCopied === !0) {
                J.id = e.data("id");
                var o, a = p(J.id, !0);
                1 == a.isCashback && J.isLoggedIn && (o = !0), o ? t.show("Code copied! Paste it at checkout on the <a href='/load-offer/" + J.id + "?cd-cashback-activated=true' target='_blank'>store's website.</a>") : t.show("Code copied! Paste it at checkout on the <a href='/load-offer/" + J.id + "' target='_blank'>store's website.</a>")
            }
        }), V.sendOTP.click(function() {
            var e = V.phoneNumberForOTP.val();
            return K.test(e) ? void z(e) : void t.show("Please enter valid mobile number", "error")
        }), V.submitOTPCode.click(function() {
            var e = V.otpCodeInput.val(),
                o = V.phoneNumberForOTP.val();
            return K.test(o) ? X.test(e) ? void j(e, o) : void t.show("Invalid OTP, Try again.", "error") : void t.show("Please enter valid mobile number", "error")
        }), V.otcSuccessBtn.click(N), $(window).focus(function() {
            if (J.blurred === !0) {
                J.blurred = !1, $("#alert-modal").hasClass("md-show") && $("#alert-modal").removeClass("md-show");
                var e = p(J.id, !0);
                a.offerRedirect("getCodeModal", e)
            }
        }), $(window).blur(function() {
            J.codeCopied === !0 && null != J.id && (J.codeCopied = !1, J.blurred = !0)
        }), window.addEventListener("applied-filters", function() {
            $(".comments-section").hide()
        }), V.offersWrapper.on("click", ".how-to-use-horizontal-thumbnails-ctr .how-to-use-horizontal-thumbnails", function() {
            var e = $(this).parents(".how-to-use-horizontal-thumbnails-ctr");
            if ($(".how-to-use-horizontal-thumbnails-ctr").not(e).attr("data-populated", 0), 1 != e.attr("data-populated")) {
                J.howToUsedata = d(e), e.attr("data-populated", 1);
                for (var o = "", t = 0; t < J.howToUsedata.length; t++) o += '<div class="desktop-image-zoom-thumbnail-button" data-loaded=0><img class="desktop-image-zoom-thumbnail" data-zoom-src="' + J.howToUsedata[t][0] + '" src="' + J.howToUsedata[t][1] + '" data-desc="' + J.howToUsedata[t][2] + '"></div>';
                V.modalThumbnailsContainer.html(o), J.howToUsedata.length > 1 ? $(".desktop-image-zoom-image-container").css("cursor", "pointer") : (V.nextImageBtn.hide(), V.prevImageBtn.hide())
            }
            V.nextThumbnails.hide(), V.prevThumbnails.hide(), J.imageIndex = $(this).parent().index(), V.howToUseModal.addClass("md-show").focus();
            var a = $(".desktop-image-zoom-thumbnail-button:eq(" + J.imageIndex + ")");
            0 == a.attr("data-loaded") && (V.modalLoader.show(), a.attr("data-loaded", 1)), "undefined" == typeof J.originalModalWidth ? J.originalModalWidth = V.howToUseModal.width() : (V.howToUseModal.css("width", "85%"), V.mainImageContainer.css("width", "90%")), V.modalMainImage.attr("src", J.howToUsedata[J.imageIndex][0]).on("load", function() {
                J.previousAspectRatio = this.width / this.height;
                var e = V.modalMainImage.width() + 190,
                    o = e > parseInt(V.howToUseModal.css("min-width"), 10) ? e : V.howToUseModal.css("min-width");
                V.howToUseModal.width(o), V.modalMainImage.width() > parseInt(V.modalImageDesc.css("min-width"), 10) ? V.modalImageDesc.width(V.modalMainImage.width()) : V.modalImageDesc.width(805), V.modalThumbnailsContainer.scrollLeft(0), $(".desktop-image-zoom-thumbnail-button:first").css("margin-left", 0), setTimeout(function() {
                    V.modalThumbnailsContainer[0].getBoundingClientRect().right < $(".desktop-image-zoom-thumbnail-button:last")[0].getBoundingClientRect().right && V.nextThumbnails.show(), V.modalLoader.hide(), V.modalMainImage.off()
                }, 200)
            }).siblings(".image-desc").html(J.howToUsedata[J.imageIndex][2]), J.pageYOffset = $(window).scrollTop(), r.disableBodyScroll(!0), a.addClass("highlight-image-zoom-thumbnail")
        }), V.modalThumbnailsContainer.on("click", ".desktop-image-zoom-thumbnail-button", function() {
            0 == $(this).attr("data-loaded") && (V.modalLoader.show(), $(this).attr("data-loaded", 1)), J.imageIndex = $(this).index();
            var e = $(this),
                o = V.howToUseModal.width();
            $("<img>").attr("src", J.howToUsedata[J.imageIndex][0]).on("load", function() {
                if (currentAspectRatio = this.width / this.height, currentAspectRatio >= J.previousAspectRatio) {
                    J.previousAspectRatio = currentAspectRatio;
                    var t = currentAspectRatio * V.mainImageContainer.height();
                    t > 90 * (J.originalModalWidth - 40) / 100 && (t = 90 * (J.originalModalWidth - 40) / 100), t < this.width && t > V.mainImageContainer.width() && (o = t + 190)
                }
                V.modalMainImage.attr("src", J.howToUsedata[J.imageIndex][0]).siblings(".image-desc").html(J.howToUsedata[J.imageIndex][2]), V.modalMainImage.width() > parseInt(V.modalImageDesc.css("min-width"), 10) && V.modalImageDesc.width(V.modalMainImage.width()), V.howToUseModal.width(o), V.modalThumbnailsContainer[0].getBoundingClientRect().right > $(".desktop-image-zoom-thumbnail-button:last")[0].getBoundingClientRect().right && V.modalThumbnailsContainer[0].getBoundingClientRect().left < $(".desktop-image-zoom-thumbnail-button:first")[0].getBoundingClientRect().left && (V.nextThumbnails.hide(), V.prevThumbnails.hide());
                var a = e[0].getBoundingClientRect().right - V.modalThumbnailsContainer[0].getBoundingClientRect().right,
                    s = e[0].getBoundingClientRect().left - V.modalThumbnailsContainer[0].getBoundingClientRect().left;
                a > 6 ? V.nextThumbnails.trigger("click") : s < 6 && V.prevThumbnails.trigger("click"), V.modalLoader.hide()
            }), $(this).addClass("highlight-image-zoom-thumbnail").siblings().removeClass("highlight-image-zoom-thumbnail")
        }), V.nextThumbnails.on("click", function() {
            $(this).hide(), $(".desktop-image-zoom-thumbnail-button:last")[0].scrollIntoView(!1), $(this).siblings(".prev-thumbnails").show();
            var e = V.modalThumbnailsContainer[0].getBoundingClientRect().right - $(".desktop-image-zoom-thumbnail-button:last")[0].getBoundingClientRect().right;
            e < 0 && $(".desktop-image-zoom-thumbnail-button:first").css("margin-left", e - 6)
        }), V.prevThumbnails.on("click", function() {
            $(this).hide(), $(this).siblings(".next-thumbnails").show(), V.modalThumbnailsContainer.scrollLeft(0), $(".desktop-image-zoom-thumbnail-button:first").css("margin-left", 0)
        }), V.nextImageBtn.on("click", function() {
            J.imageIndex++;
            var e = J.howToUsedata.length;
            J.imageIndex == e && (J.imageIndex = 0), $(".desktop-image-zoom-thumbnail-button:eq(" + J.imageIndex + ")").trigger("click")
        }), V.prevImageBtn.on("click", function() {
            J.imageIndex--;
            var e = J.howToUsedata.length;
            J.imageIndex < 0 && (J.imageIndex = e - 1), $(".desktop-image-zoom-thumbnail-button:eq(" + J.imageIndex + ")").trigger("click")
        }), V.closeHowToUseModal.on("click", function() {
            V.howToUseModal.removeClass("md-show"), $(".desktop-image-zoom-thumbnail-button").removeClass("highlight-image-zoom-thumbnail"), V.modalLoader.hide(), r.disableBodyScroll(!1), $(window).scrollTop(J.pageYOffset)
        }), V.howToUseModal.on("keydown", function(e) {
            39 === e.keyCode ? V.nextImageBtn.trigger("click") : 37 === e.keyCode ? V.prevImageBtn.trigger("click") : 27 === e.keyCode && V.closeHowToUseModal.trigger("click")
        }), V.mainImageContainer.on("click", function() {
            V.nextImageBtn.trigger("click")
        }), V.offersWrapper.on("click", ".how-to-use-thumbnail-preview .how-to-use-horizontal-thumbnails", function() {
            $(this).parents(".card-content-bottom").find(".how-to-use-horizontal-thumbnails-ctr .how-to-use-horizontal-thumbnails:eq(" + $(this).parent().index() + ")").trigger("click")
        })
    }

    function c(e) {
        J.codeCopied = !1;
        var o = $(this);
        J.otpSmsType = "new", clearInterval(J.smsOtpTimer), V.sendOTP.text("SEND OTP"), V.timer.hide(), V.otcInputHolder.hide(), $(".otp-expire-timer span").html("10:00"), J.clickedOfferType = o.data("popup-id"), J.validationStepIndex = 0;
        var s = o.data("offer-id");
        J.clickedOfferId = s;
        var r = p(s);
        if (r.isDaySpecific && !r.isValidToday) {
            var n = u(r.validDays),
                i = "";
            return n.length > 1 ? (i = " and " + n.splice(-1), i = n.join(", ") + i) : i = n.join(", "), void t.show("This offer is valid on " + i + " only.")
        }
        return "one-time-coupon" === r.couponType && "ohWaitModal" !== J.clickedOfferType && "ohWaitModal2" !== J.clickedOfferType && null != r.validationType ? void F(r.validationType) : e === !0 && "startShopStoreModal" === J.clickedOfferType ? void a.offerSkipLogin(null, null, r) : void N()
    }

    function d(e) {
        var o = [];
        return e.find("img").each(function() {
            var e = [$(this).attr("data-zoom-src"), $(this).attr("data-lazy-src"), $(this).attr("data-desc")];
            o.push(e)
        }), o
    }

    function u(e) {
        var o = [],
            t = 0;
        for (var a in Z) e.indexOf(a) > -1 && (o[t] = Z[a], t++);
        return o
    }

    function f(e) {
        e === !0 ? v(J.id) : w(J.id)
    }

    function p(e, o) {
        var t = $("#" + e + "cat"),
            a = {},
            s = t.find("[data-offer-key]");
        return s.each(function() {
            var e = $(this),
                o = e.data("offer-key"),
                t = e.data("offer-value");
            a[o] = t
        }), a.voted = h(e), a.success_rate = $("." + e + "success-percent").length ? $("." + e + "success-percent")[0].textContent : "", $(".commentcount" + e).length ? a.comment_count = 1 === parseInt($(".commentcount" + e)[0].textContent) ? $(".commentcount" + e)[0].textContent + " Comment" : $(".commentcount" + e)[0].textContent + " Comments" : a.comment_count = "", J.id = a.id, "undefined" != typeof page && "stores" == page || (J.isSubscribed = $("#" + J.id + "cat").data("issubs")), a
    }

    function h(e) {
        return $(".thumbsup" + e).hasClass("thumbs-up-active") ? "upvote" : $(".thumbsdown" + e).hasClass("thumbs-down-active") ? "downvote" : "cancelled"
    }

    function m(e) {
        $(e).hide(), $(e).siblings(".how-to-use-horizontal-thumbnails-ctr").find(".how-to-use-horizontal-thumbnails img").each(function() {
            $(this).attr("src", $(this).attr("data-lazy-src"))
        }), $(e).attr("data-height", $(e).siblings(".offer-desc").css("max-height")), $(e).siblings(".offer-desc").css({
            "max-height": "none",
            overflow: "auto"
        }), $(e).siblings(".how-to-use-thumbnail-preview").hide(), $(e).siblings(".how-to-use-div, .how-to-use-horizontal-thumbnails-ctr, .read-less").show()
    }

    function g(e) {
        $(e).hide(), $(e).siblings(".how-to-use-thumbnail-preview, .read-more").show(), $(e).siblings(".offer-desc").css({
            "max-height": $(e).siblings(".read-more").attr("data-height"),
            "overflow-y": "hidden"
        }), $(e).siblings(".how-to-use-div, .how-to-use-horizontal-thumbnails-ctr").hide()
    }

    function b(a, s) {
        e.ajax(o.BASE_URL + "/offers/" + a + "/vote", "POST", {
            type: s
        }, function(e) {
            e.success === !0 ? $("." + a + "success-percent").text(e.response.status.success_rate + "% ") : 400 === e.errors.code && t.show("You have already given your feedback for this offer.")
        }, null, !1, "json")
    }

    function v(e) {
        $(".thumbsdown" + e).hasClass("thumbs-down-active") || ($(".thumbsup" + e).hasClass("thumbs-up-active") ? ($(".thumbsup" + e).removeClass("thumbs-up-active"), J.action = "cancelled", J.voted = null, b(e, J.action)) : (J.action = "upvote", J.voted = "upvote", b(e, J.action), $(".thumbsup" + e).addClass("thumbs-up-active")))
    }

    function w(e) {
        $(".thumbsup" + e).hasClass("thumbs-up-active") || ($(".thumbsdown" + e).hasClass("thumbs-down-active") ? (J.action = "cancelled", J.voted = null, b(e, J.action), $(".thumbsdown" + e).removeClass("thumbs-down-active")) : (J.action = "downvote", J.voted = "downvote", b(e, J.action), $(".thumbsdown" + e).addClass("thumbs-down-active")))
    }

    function y(e, o) {
        if (J.id) {
            var t = $(".cmt-post-btn" + J.id)[0];
            k(t, J.id, e, o)
        }
    }

    function k(a, s, r, n) {
        var i = null,
            l = null;
        if ("undefined" == typeof n && (n = null), i = n ? $("#feedback-comment-ta-" + n).val() : $(a).parent().find(".add-comment-input").val(), !i || "" === i) return void t.show("Comment cannot be blank!", "error");
        if (l = n ? $(".post-comment-name-" + n).val() : $(a).parent().find(".cmt-name-input").val(), !l || "" == l) return void t.show("Name cannot be blank", "error");
        var c = {},
            d = new Date((new Date).toUTCString());
        c.comment = String(i), c.user_name = String(l), e.ajax(o.BASE_URL + "/offers/" + s + "/comment", "POST", {
            comment: i,
            user_name: l
        }, function(o) {
            C(a, s, i, l, "0 sec ago", r, n, o.response.id), null != n && "false" === r && e.hasLocalStorage() && (localStorage.setItem("lastComment", encodeURIComponent(i)), localStorage.setItem("lastCommentName", encodeURIComponent(l)), localStorage.setItem("lastCommentTime", encodeURIComponent(d))), null === n && t.show("Yay! Your comment has been successfully submitted.", "success"), null != n && S(n)
        }, function(e) {
            t.show("Oops! Your comment wasn't posted. Could you please try again?", "error")
        }, !0, "json")
    }

    function C(e, o, t, a, s, r, n, i) {
        "undefined" == typeof r && (r = !1), "undefined" == typeof n && (n = null), $(e).parent().find(".add-comment-input").val(""), "false" == r && $(e).parent().find(".cmt-name-input").val("");
        var l = parseInt($(".commentcount" + o).eq(0).text()),
            c = l;
        null != n && (0 === l ? $(".comments-count-" + n).text(l + 1 + " Comment") : $(".comments-count-" + n).text(l + 1 + " Comments"));
        var d = ' <div class="cmt-body comment-' + i + '"> <div class="cmt-comp-wrapper"> <div class="cmt-icon"><i class="fa fa-commenting ' + (isAdmin ? "red-bubble" : "") + '"></i> </div> <div class="cmt-right-holder"> <div class="cmt-txt ' + (isAdmin ? "cmt-right-margin" : "") + '"></div>' + (isAdmin ? ' <div class="pin-holder" data-comment-id="' + i + '"><input class="pin-it" type="checkbox" onchange="CD.p.offer.pinComment(this)"><div >Pin It </div></div>' : "") + '<div class="cmt-meta-wrapper"> <div class="cmt-author"><span class="cmt-status"> </span> </div> <div class="post-date">' + s + "</div> </div> </div>  </div>" + (isAdmin ? '<button class="cmt-comment-reject cmt-admin-approve-btns" title="reject" onclick=\'CD.p.adminOffer.changeStatus("' + i + '","rejected", this)\'>&#215;</button>' : "") + "</div>";
        $(".comment-container-" + o).find(".comment-pinned").length > 0 ? $(".comment-container-" + o + " .comment-pinned:last").after(d) : $(".comment-container-" + o).prepend(d), isAdmin && (c += parseInt($(".pendingcommentcount" + o).text())), 3 === c && ($(".showmore" + o).toggle(), $(".comment-container-" + o).addClass("show-top-comments")), $(".comment-" + i).find(".cmt-txt").text(t), $(".comment-" + i).find(".cmt-author").text("by " + a), $(".commentcount" + o).html("<i class='fa fa-commenting-dots'></i>" + (l + 1)), $(".commentcount" + o).next().text(0 === l ? " Comment" : " Comments"), $(".showmorecommentcount" + o).contents().replaceWith(c + 1), $(".showmorecommentcount" + o).parent().contents().last().replaceWith(0 === c ? " Comment" : " Comments")
    }

    function S(e) {
        var o = 0;
        o = "undefined" != typeof page && "stores" == page ? storeLocals.isSubscribed : J.isSubscribed, 1 == o ? (V.alreadySubscribed.show(), V.feedbackSubscriptionBtn.hide()) : (V.alreadySubscribed.hide(), V.feedbackSubscriptionBtn.show()), $("#slide_4" + e).prop("checked", !0), $("#slide_3" + e).prop("checked", !1), a.initForms()
    }

    function x(e, o) {
        "none" === $(".comment-box-down" + e).css("display") ? ($(".pinned-comments-section" + e).css("display", "none"), $(".comment-box-down" + e).css("display", "block"), $(".seemore" + e).css("display", "none")) : ($(".pinned-comments-section" + e).css("display", "block"), $(".seemore" + e).css("display", "inline"), $(".comment-box-down" + e).css("display", "none")), $(".close" + e).unbind("click").click(function() {
            I(e), isAdmin || $(o).show()
        }), $(".showmore" + e).unbind("click").click(function() {
            T(e)
        }), isAdmin || $(o).hide()
    }

    function I(e) {
        $(".seemore" + e).css("display", "inline"), $(".comment-box-down" + e).css("display", "none"), $(".pinned-comments-section" + e).css("display", "block")
    }

    function T(e) {
        $(".comment-container-" + e).removeClass("show-top-comments"), $(".showmore" + e).toggle()
    }

    function _(e, o) {
        $(".seemore" + o).css("display", "none"), $(".pinned-comments-section" + o).css("display", "none"), $(".comment-box-down" + o).css("display", "block"), $(".close" + o).click(function() {
            I(o), isAdmin || $(".commentcount" + o).parent().show()
        }), $(".showmore" + o).click(function() {
            T(o)
        }), isAdmin || $(".commentcount" + o).parent().hide()
    }

    function M(e) {
        t.show(e, "error")
    }

    function A(e) {
        $(".terms-conditions-modal" + e).css("display", "block")
    }

    function O(e) {
        $(".terms-conditions-modal" + e).css("display", "none")
    }

    function P(e) {
        var o = $("<textarea/>");
        $("body").append(o), o.text(e.text()), o.select();
        var a = document.execCommand("copy");
        o.remove(), a ? (J.codeCopied = !0, V.copyButton.addClass("btn-copied"), V.copyButton.attr("data-copied", !0), V.copyButton.text("COPIED")) : t.show("Oops! Your browser doesn't support copy option, please copy manually", "error")
    }

    function R() {
        var e = p(J.id, !0);
        return J.clickedOfferId = J.id, J.validationStepIndex = 0, J.clickedOfferType = $($("#" + J.id + "cat").find("[data-popup-id]")[0]).attr("data-popup-id"), "one-time-coupon" === e.couponType && "ohWaitModal" !== J.clickedOfferType && "ohWaitModal2" !== J.clickedOfferType && null != e.validationType ? void F(e.validationType) : void N()
    }

    function B() {
        var o = e.getQueryParam("modal");
        if (o) {
            var t = e.getQueryParam("offer");
            if (t) {
                getcodeAffKey = e.getQueryParam("affKey"), getcodeLoginSkipped = e.getQueryParam("loginSkipped");
                var s = p(t, !0),
                    r = e.getQueryParam("uc");
                r && (s.couponCode = atob(r)), s.hasOwnProperty("id") && a.offerRedirect(o, s), e.removeQueryParams()
            }
        }
    }

    function D() {
        var o = e.getQueryParam("cmts"),
            t = e.getQueryParam("h");
        if ("true" === o) {
            var a;
            if (e.hasLocalStorage()) {
                a = decodeURIComponent(localStorage.getItem("lastComment"));
                var s = decodeURIComponent(localStorage.getItem("lastCommentName")),
                    r = decodeURIComponent(localStorage.getItem("lastCommentTime"))
            }
            if ("null" !== a) {
                var n = $(".cmt-post-btn" + t);
                r = U(new Date((new Date).toUTCString()) - new Date(new Date(r).toUTCString())), C(n, t, a, s, r)
            }
            x(t, $(".commentcount" + t).parent())
        }
        e.hasLocalStorage() && (localStorage.removeItem("lastComment"), localStorage.removeItem("lastCommentTime"), localStorage.removeItem("lastCommentName"))
    }

    function U(e) {
        if (e = Math.floor(e / 1e3), e < 60) return 1 == e ? e + " second ago" : e + " seconds ago";
        var o = Math.floor(e / 60);
        if (o < 60) return 1 == o ? o + " minute ago" : o + " minutes ago";
        var t = Math.floor(o / 60);
        if (t < 24) return 1 == t ? t + " hour ago" : t + " hours ago";
        var a = Math.floor(t / 24);
        if (a < 7) return 1 == a ? a + " day ago" : a + " days ago";
        var s = Math.floor(a / 7);
        if (s < 4) return 1 == s ? s + " week ago" : s + " weeks ago";
        var r = Math.floor(s / 4);
        if (r < 12) return 1 == r ? r + " month ago" : r + " months ago";
        var n = Math.floor(r / 12);
        return 1 == n ? n + " year ago" : n + " years ago"
    }

    function L(e, o) {
        J.otpSmsType = "new", clearInterval(J.smsOtpTimer), V.sendOTP.text("SEND OTP"), V.timer.hide(), V.otcInputHolder.hide(), $(".otp-expire-timer span").html("10:00"), J.clickedOfferType = e, J.validationStepIndex = 0;
        var o = o;
        J.clickedOfferId = o;
        var a = p(o, !0);
        if (a.isDaySpecific && !a.isValidToday) {
            var s = u(a.validDays);
            return void t.show("This offer is valid on " + s.join(", ") + " only.")
        }
        return "one-time-coupon" === a.couponType && "ohWaitModal" !== J.clickedOfferType && "ohWaitModal2" !== J.clickedOfferType && null != a.validationType ? void F(a.validationType) : void N()
    }

    function E() {
        var o = e.getQueryParam("extension");
        if (o) {
            var t = e.getQueryParam("source_page_url"),
                a = e.getQueryParam("offer_type");
            if (t && !a) return void CD.p.stores.startShopping(!1, t);
            var s = e.getQueryParam("t");
            s && e.getCookie(s) && e.setCookie(s, "", -1);
            var r = e.getQueryParam("offerId");
            !!e.getQueryParam("give_cashback");
            if ("deal" === a) {
                var n = $.param({
                    offer: r,
                    modal: "startShopStoreModal"
                });
                window.location.href = window.location.pathname + "?" + n
            } else if ("coupon" === a || "one-time-coupon" === a) {
                var i = "getCodeModal",
                    l = {
                        offer: r,
                        modal: i
                    };
                "one-time-coupon" === a && (l.uc = e.getQueryParam("uc"));
                var n = $.param(l);
                window.location.href = window.location.pathname + "?" + n
            }
        }
    }

    function N() {
        var e = p(J.clickedOfferId),
            o = J.clickedOfferType;
        "undefined" != typeof isSearchPage && isSearchPage ? a.offerRedirect(o, e, !1, !0) : a.offerRedirect(o, e, !1, !1), $("#" + o).find(".modal-var-B .offer-title").removeClass("shop-at-merchant-btn-click")
    }

    function F(e) {
        if (!e || 0 != e.length) {
            if ("email" === e[J.validationStepIndex] && isUserVerified === !1) {
                if ($("#startShopModal").hasClass("md-show")) return;
                return $("#startShopModal").removeClass("md-show"), void $("#emailVerificationModal").addClass("md-show")
            }
            if ("email" === e[J.validationStepIndex] && isUserVerified === !0) {
                J.validationStepIndex++;
                var o = p(J.clickedOfferId);
                return void F(o.validationType)
            }
            return "captcha" === e[J.validationStepIndex] ? ($("#startShopModal").removeClass("md-show"), void $("#recaptchaModal").addClass("md-show")) : "sms" === e[J.validationStepIndex] ? (J.validationStepIndex++, $("#recaptchaModal").removeClass("md-show"), $("#otp-mobile-number").val(p(J.clickedOfferId).phoneNumber), $("#startShopModal").removeClass("md-show"), void $("#validateSMSModal").addClass("md-show")) : J.validationStepIndex >= e.length && J.validationStepIndex > 0 && "email" !== e[J.validationStepIndex - 1] ? ($("#recaptchaModal").removeClass("md-show"), $("#startShopModal").removeClass("md-show"), $("#validateSMSModal").removeClass("md-show"), void $("#oneTimeValidationSucceessModal").addClass("md-show")) : void N()
        }
    }

    function W(t) {
        e.ajax(o.BASE_URL + "/offers/one-time-code-user-verify", "POST", {
            action: "recaptcha",
            response: t
        }, function(e) {
            if (e.success && e.response.hasOwnProperty("response") && e.response.response.success) {
                J.validationStepIndex++;
                var o = p(J.clickedOfferId);
                F(o.validationType), grecaptcha.reset()
            }
        }, null, !1, "json")
    }

    function z(a) {
        e.ajax(o.BASE_URL + "/offers/one-time-code-user-verify", "POST", {
            action: "send-otp",
            type: J.otpSmsType,
            id: J.clickedOfferId,
            mobile_number: a
        }, function(e) {
            e.success ? (t.show("OTP has been sent to your phone.", "success"), V.sendOTP.text("RESEND OTP"), V.timer.show(), V.otcInputHolder.show(), "new" === J.otpSmsType && (H(), J.smsType = "resend")) : e.errors.user_display ? t.show(e.errors.message, "error") : t.show("SMS not Sent. Try Again.", "error")
        }, null, !0, "json")
    }

    function j(a, s) {
        e.ajax(o.BASE_URL + "/offers/one-time-code-user-verify", "POST", {
            action: "verify-otp",
            id: J.clickedOfferId,
            otp: a,
            mobile_number: s
        }, function(e) {
            if (e.success) {
                V.otpCodeInput.val(""), V.phoneNumberForOTP.val(""), J.validationStepIndex++;
                var o = p(J.clickedOfferId);
                F(o.validationType)
            } else e.errors.user_display ? t.show(e.errors.message, "error") : t.show("Incorrect OTP.", "error")
        }, null, !0, "json")
    }

    function H() {
        clearInterval(J.smsOtpTimer), J.smsOtpTimer = setInterval(function() {
            var e = $(".otp-expire-timer span").html();
            e = e.split(":");
            var o = parseInt(e[0], 10),
                t = parseInt(e[1], 10);
            return t -= 1, o < 0 ? clearInterval(J.smsOtpTimer) : (o < 10 && 2 != o.length && (o = "0" + o), t < 0 && 0 != o ? (o -= 1, t = 59) : t < 10 && 2 != t.length && (t = "0" + t), $(".otp-expire-timer span").html(o + ":" + t), void(0 == o && 0 == t && (clearInterval(J.smsOtpTimer), V.sendOTP.text("SEND OTP"), V.timer.hide(), V.otcInputHolder.hide(), J.smsType = "new", $(".otp-expire-timer span").html("10:00"))))
        }, 1e3)
    }

    function q() {
        var o = $(".offer-card-ctr .offer-desc");
        o.each(function() {
            var e = 0;
            $(this).find(".desc-txt").length && $(this).find(".desc-txt").height() > 84 && (e = 60, $(this).css("max-height", e), $(this).parent().find(".read-more").css("display", "block")), ($(this).siblings(".how-to-use-div").length || $(this).siblings(".how-to-use-horizontal-thumbnails-ctr").length) && $(this).parent().find(".read-more").css("display", "block").find(".read-more-less-text").text("Steps to Redeem")
        });
        var t = e.getQueryParam("h");
        t && "true" === e.getQueryParam("see-more") && "none" !== $("#" + t + "cat .read-more").css("display") && m($("#" + t + "cat .read-more")[0])
    }

    function Q(e) {
        var o;
        13 == e.keyCode && (o = $(this).prop("selectionStart"), $(this).val($(this).val().slice(0, o) + "[*] " + $(this).val().slice(o)), $(this).prop("selectionStart", o + 4), $(this).prop("selectionEnd", o + 4))
    }

    function G(a) {
        var s = $(a),
            r = s.is(":checked"),
            n = s.parent().attr("data-comment-id");
        e.ajax(o.BASE_URL + "/offers/pin-comment", "POST", {
            pin_it: r,
            comment_id: n
        }, function(e) {
            var o = e.response.result.success ? "success" : "error";
            t.show(e.response.result.msg, o), r ? s.parent().next().find(".cmt-author").after('<div class="is-pinned"><i class="fa fa-star"></i> Pinned Comment</div>') : s.parent().next().find(".is-pinned").remove()
        }, function() {
            t.show("Error in sending the request", "error")
        }, !0)
    }

    function Y() {
        B(), D(), i(), l(), a.checkAdblock() || V.offersWrapper.find('[data-flip="true"]').attr("data-gtm", "flip"), q(), n.init()
    }
    var V = {},
        J = {
            action: null,
            voted: null,
            id: null,
            codeCopied: !1,
            blurred: !1,
            clickedOfferType: null,
            clickedOfferId: null,
            validationStepIndex: 0,
            isLoggedIn: "undefined" != typeof loggedIn && loggedIn,
            smsOtpTimer: null,
            otpSmsType: "new"
        },
        K = /^[0-9]{10}$/,
        X = /^[0-9]{6}$/,
        Z = {
            sun: "sunday",
            mon: "monday",
            tue: "tuesday",
            wed: "wednesday",
            thu: "thursday",
            fri: "friday",
            sat: "saturday"
        };
    return Y(), {
        likeclick: v,
        unlikeclick: w,
        postComment: k,
        commentBox: x,
        seeMoreClick: _,
        moredescclick: m,
        lessdescclick: g,
        TandCclick: M,
        pinComment: G,
        updateOfferCardThumb: f,
        postCommentFromPopup: y,
        offerPageTandC: A,
        closeTermsModal: O,
        extensionCheck: E,
        verifyCaptchaResponse: W,
        singleOfferRedirect: L,
        offerDescMoreLessTagInit: q,
        showGetCodeCoupon: R
    }
}(_util, _config, _popUp, _getcode, _gtm, _scroll, _lazyload), CD.c.slotMachine = function(e, o, t) {
    function a() {
        h.spin = $(".spin-btn-wrap"), h.tncBtn = $(".sm-terms-btn"), h.tncModal = $("#bigSalesTnc"), h.rulesTab = $(".sm-rules"), h.rewardsTab = $(".sm-rewards"), h.rulesDesc = $(".rules-mc"), h.rewardsDesc = $(".rewards-mc"), h.merchantRuleBtn = $(".mc-rules"), h.merchantRewardBtn = $(".mc-rewards"), h.rulesModal = $("#merchant-slot-machine-rules-modal"), h.rewardsModal = $("#reward-modal"), h.reels = $(".reel"), h.timeLeft = $(".time-left"), h.turnsLeft = $(".turns-left"), h.audio = $("audio")[0], h.footer = $(".sm-footer .share-text"), h.slotContainer = $(".mc-sec.left"), h.storePageRightContainer = $(".sec.right-sec"), h.popups = {
            login: $("#slot-machine-login-modal"),
            hardLuck: $(".reward-kept"),
            redeem: $("#bigSaleCongrats"),
            lose: $(".sm-lose-text"),
            loginWin: $("#smLoginWin"),
            shagunTnc: $("#shagunTnc")
        }, h.share = {
            facebook: $(".facebook-share"),
            twitter: $(".twitter-share")
        }, h.winningComb = $(".winning-comb"), h.winningDesc = $(".winning-desc"), h.winningImage = $(".winning-image"), h.closeModal = $(".sm-close"), h.shagunTncBtn = $(".shagun-tnc-btn")
    }

    function s() {
        h.popups.login.find(".green").click(function() {
            h.popups.login.removeClass("md-show")
        }), h.shagunTncBtn.click(function() {
            h.popups.shagunTnc.addClass("md-show")
        }), h.spin.click(function() {
            var o = e.hasLocalStorage() ? localStorage.getItem("smRules") : e.getCookie("smRules");
            if (!o) return void g.rulesModal();
            if (loggedIn) $(this).addClass("disabled"), b.spin(function(e) {
                var o = [1, 2, 3];
                m.spin(o)
            });
            else if (p.turns) {
                p.turns--, e.hasLocalStorage() ? localStorage.setItem("smUserTurns", p.turns) : e.setCookie("smUserTurns", p.turns);
                var t = [0, 1, 2, 3, 4, 5].sort(function() {
                    return Math.random() - .5
                });
                m.spin([t.pop(), t.pop(), t.pop()])
            } else g.login()
        }), h.rulesModal.find(".play-now").click(function() {
            $(this).hasClass("continue-btn") && h.spin.trigger("click")
        }), h.closeModal.click(function() {
            $("#" + $(this).attr("data-modal")).removeClass("md-show")
        }), h.popups.redeem.find(".cancel-reward").click(m.spinMore), h.popups.redeem.find(".keep-reward").click(function() {
            b.reedem(function() {
                h.popups.redeem.removeClass("md-show"), v.win(), g.win()
            })
        }), h.tncBtn.click(function() {
            h.tncModal.addClass("md-show")
        }), h.rulesTab.click(function() {
            i(!0)
        }), h.rewardsTab.click(function() {
            i(!1)
        }), h.merchantRuleBtn.click(function() {
            h.rulesModal.find(".play-now").removeClass("continue-btn").text("PLAY NOW"), h.rulesModal.addClass("md-show")
        }), h.merchantRewardBtn.click(function() {
            h.rewardsModal.addClass("md-show")
        }), h.share.facebook.click(r), h.share.twitter.click(n), $(window).focus(function() {
            w.storeUserTurns()
        })
    }

    function r() {
        var e = "https://goo.gl/aBJUDd";
        e = "http://www.facebook.com/dialog/feed?app_id=170140026660763&link=" + e;
        var o = window.open(e, "_blank", "width=640,height=300 ,status=yes, toolbar=no, menubar=no, location=no,addressbar=no");
        o.opener = null
    }

    function n() {
        var e = "http://twitter.com/intent/tweet?text=",
            o = "",
            t = "https://goo.gl/rDcx3F";
        o = p.win ? "Hey! I won " + p.winTitle + " by playing Jackpot on CouponDunia\nTry your luck too! Play here: " : "Hey! Try your luck at Jackpot on CouponDunia!\nWin 100% Cashback and more. Play Here: ", e += o + t;
        var a = window.open(encodeURI(e), "_blank", "width=640,height=300 ,status=yes, toolbar=no, menubar=no, location=no,addressbar=no");
        a.opener = null
    }

    function i(e) {
        h.rulesTab.toggleClass("active", e), h.rewardsTab.toggleClass("active", !e), h.rulesDesc.toggle(e), h.rewardsDesc.toggle(!e)
    }

    function l() {
        $hour = h.timeLeft.find(".hrs"), $min = h.timeLeft.find(".mins"), $sec = h.timeLeft.find(".sec");
        var e = parseInt($hour.text()),
            o = parseInt($min.text()),
            t = parseInt($sec.text());
        0 != t ? (t -= 1, $sec.text(t >= 10 ? t : "0" + t)) : 0 != o ? (o -= 1, $sec.text("59"), $min.text(o >= 10 ? o : "0" + o)) : 0 != e ? (e -= 1, $sec.text("59"), $min.text("59"), $hour.text(e >= 10 ? e : "0" + e)) : (c(), clearInterval(window.SMTimer))
    }

    function c() {
        var e = window.location.origin + window.location.pathname;
        window.location.href = e
    }

    function d() {
        p.icons = {}, jQuery.each(winResult, function(e, o) {
            p.icons[SM.symbol[o].image_index] || (p.icons[SM.symbol[o].image_index] = 0), p.icons[SM.symbol[o].image_index]++
        })
    }

    function u() {
        f()
    }

    function f() {
        a(), s(), "undefined" != typeof SM && void 0 !== h.audio && (clearInterval(window.SMTimer), window.SMTimer = setInterval(l, 1e3), v.init(h.audio), p.turns = SM.turns || 0, p.symbols = SM.symbol, w.storeUserTurns(), winResult && (d(), m.updateElements(), p.turns && Object.keys(p.icons).length < 3 && h.popups.redeem.addClass("md-show")), m.randomizeReel())
    }
    var p = {
            gridSize: 97.66,
            reelTimings: [3.2, 3.7, 4.7],
            recentTarget: [0, 0, 0],
            maxIcons: 6,
            icons: {},
            turns: 0,
            symbols: null,
            winTitle: "",
            win: !1,
            extra_turns: 0,
            spinResponse: null,
            api: {
                spin: "/game/slot-machine/spin",
                cashOut: "/game/slot-machine/keep",
                skip: "/game/slot-machine/skip"
            },
            messages: ["Oops! you just missed it!", "Come on!! Spin it harder!", "We know you are lucky! Keep trying!", "Keep your fingers crossed this time!"]
        },
        h = {},
        m = function() {
            function e(e, o) {
                h.popups.lose.addClass("cHide"), h.spin.addClass("disabled"), v.roll(function() {
                    h.reels.each(function(o, t) {
                        $(t).css("transition", "none").css("background-position", "22px " + (-(p.recentTarget[o] * p.gridSize - p.gridSize / 2) + "px")), setTimeout(function() {
                            var a = 100 * p.gridSize + (e[o] + 1) * p.gridSize + p.gridSize / 2;
                            $(t).css("transition", "all " + p.reelTimings[o] + "s ease-in"), $(t).css("background-position", "22px " + -a + "px")
                        }, 100)
                    }), setTimeout(t, 5700, e)
                })
            }

            function o() {
                h.reels.each(function(e, o) {
                    p.recentTarget[e] = Math.floor(Math.random() * (p.maxIcons - 1)) + 0, $(o).css("transition", "all 1s ease-out").css("background-position", "22px " + (-(p.recentTarget[e] * p.gridSize - p.gridSize / 2) + "px"))
                })
            }

            function t(e) {
                p.recentTarget = e, h.spin.removeClass("disabled"), h.turnsLeft.text((p.turns < 10 ? "0" : "") + p.turns.toString());
                var o = !1;
                p.icons = {};
                for (var t = 0; t < e.length; t++) p.icons[e[t]] || (p.icons[e[t]] = 0), p.icons[e[t]]++;
                if (Object.keys(p.icons).length < 3 && (o = !0), !loggedIn) return v[o ? "win" : "lose"](), o ? void g.loginWin() : void(!p.turns && g.login());
                if (o) {
                    if (v.win(), p.extra_turns) return void g.extraSpins();
                    g.redeem()
                } else v.lose(), g[p.turns ? "missed" : "hardLuck"]()
            }

            function a() {
                var e = p.icons[Object.keys(p.icons)[0]] >= 2 ? Object.keys(p.icons)[0] : Object.keys(p.icons)[1];
                h.winningComb.html("<div class='sm-icon-sprite " + icon_arr[e] + "'></div><i class='fa fa-plus'></i><div class='sm-icon-sprite " + icon_arr[e] + "'></div>" + (1 == Object.keys(p.icons).length ? "<i class='fa fa-plus'></i><div class='sm-icon-sprite " + icon_arr[e] + "'></div>" : ""));
                var o = 1 === Object.keys(p.icons).length ? 3 : 2;
                jQuery.each(SM.symbol, function(t, a) {
                    if (a.image_index == e) {
                        h.winningDesc.html(a[o].description), p.winTitle = a[o].name, p.win = !0;
                        var s = null;
                        try {
                            s = a[o].images.WEB.logo_large_url
                        } catch (e) {}
                        h.winningImage.attr("src", s), "VOUCHER" === a[1 === Object.keys(p.icons).length ? "3" : "2"].reward_type ? (h.popups.redeem.css("height", "420px"), h.popups.redeem.find(".add-info").hide()) : (h.popups.redeem.css("height", "480px"), h.popups.redeem.find(".add-info").show())
                    }
                })
            }

            function s() {
                h.popups.redeem.removeClass("md-show"), b.skip(function() {})
            }
            return {
                spin: e,
                randomizeReel: o,
                updateElements: a,
                spinMore: s
            }
        }(),
        g = function() {
            function o() {
                h.popups.login.addClass("md-show")
            }

            function t() {
                h.popups.lose.find("div").html(p.messages[Math.floor(Math.random() * p.messages.length) + 0]), h.popups.lose.removeClass("cHide")
            }

            function a() {
                p.win = !0, m.updateElements(), "big-sales" === page ? (h.slotContainer.addClass("cHide"), h.footer.addClass("cHide")) : h.storePageRightContainer.addClass("cHide"), h.spin.addClass("disabled"), h.popups.hardLuck.removeClass("cHide"), h.popups.hardLuck.find(".turns-over").addClass("cHide"), h.popups.hardLuck.find(".won").removeClass("cHide")
            }

            function s() {
                p.win = !1, "big-sales" === page ? (h.slotContainer.addClass("cHide"), h.footer.addClass("cHide")) : h.storePageRightContainer.addClass("cHide"), h.spin.addClass("disabled"), h.popups.hardLuck.removeClass("cHide")
            }

            function r() {
                m.updateElements(), h.popups.redeem.addClass("md-show")
            }

            function n() {
                m.updateElements(), h.popups.loginWin.addClass("md-show")
            }

            function i() {
                h.rulesModal.find(".play-now").addClass("continue-btn").text("CONTINUE"), h.rulesModal.addClass("md-show"), e.hasLocalStorage() ? localStorage.setItem("smRules", "1") : e.setCookie("smRules", "1");
            }

            function l() {
                h.popups.lose.find("div").text("+" + p.extra_turns + " Extra Turns! Keep Spinning!"), h.popups.lose.removeClass("cHide")
            }
            return {
                login: o,
                missed: t,
                win: a,
                hardLuck: s,
                redeem: r,
                loginWin: n,
                rulesModal: i,
                extraSpins: l
            }
        }(),
        b = function() {
            function t(t) {
                if (!p.turns) return v.lose(), void g.hardLuck();
                var a = function() {
                    o.show("Unable to spin! Please refresh the page.", "error"), h.spin.removeClass("disabled")
                };
                e.ajax(p.api.spin, "post", null, function(e) {
                    if (e.success && Object.keys(e.response).length) {
                        p.spinResponse = e.response.reel;
                        var o = [];
                        o.push(parseInt(p.symbols[p.spinResponse.reel_1].image_index)), o.push(parseInt(p.symbols[p.spinResponse.reel_2].image_index)), o.push(parseInt(p.symbols[p.spinResponse.reel_3].image_index)), p.turns = e.response.turns_left, e.response.extra_turns ? p.extra_turns = e.response.extra_turns : p.extra_turns = 0, m.spin(o)
                    } else a()
                }, a)
            }

            function a(t) {
                var a = function() {
                    o.show("Unable to keep reward! please try again!", "error")
                };
                e.ajax(p.api.cashOut, "post", null, function(e) {
                    e.response && e.response.status ? t() : a()
                }, a, !0)
            }

            function s(o) {
                var t = function() {};
                e.ajax(p.api.skip, "post", null, function(e) {
                    e.response && e.response.status ? o() : t()
                }, t, !0)
            }
            return {
                spin: t,
                reedem: a,
                skip: s
            }
        }(),
        v = function() {
            function e() {
                r.pause(), r.currentTime = 0
            }

            function o(o) {
                e(), r.play(), clearTimeout(n), r.ontimeupdate = function() {
                    o(), r.ontimeupdate = null, n = setTimeout(function() {
                        r.pause()
                    }, 5500)
                }
            }

            function t() {
                r.currentTime = 5.99, r.play(), clearTimeout(n), n = setTimeout(function() {
                    r.pause(), e()
                }, 2e3)
            }

            function a() {
                r.currentTime = 8.75, r.play(), clearTimeout(n), n = setTimeout(function() {
                    r.pause(), e()
                }, 2200)
            }

            function s(o) {
                r = o, e()
            }
            var r, n = null;
            return {
                roll: o,
                win: t,
                lose: a,
                init: s
            }
        }(),
        w = function() {
            function o() {
                if (!loggedIn) {
                    var o = e.hasLocalStorage() ? localStorage.getItem("smUserTurns") : e.getCookie("smUserTurns");
                    o && (p.turns = parseInt(o), h.turnsLeft.html((p.turns < 10 ? "0" : "") + p.turns.toString()))
                }
            }
            return {
                storeUserTurns: o
            }
        }();
    return f(), {
        dynamicBind: u
    }
}(_util, _popUp, _config);
var _slotMachine = CD.c.slotMachine;
CD.p.category = function(e, o, t, a, s, r, n) {
    function i() {
        u.filters = {
            existingUser: "#existing-user-filter",
            subCategory: '.sub-category-filter input[type="checkbox"]',
            category: ".cat-filter",
            store: '.store-checkbox-filter input[type="checkbox"]',
            storeWrapper: ".website-filter .filter-list",
            bank: ".bank-filter"
        }, u.filters.clear = "[data-clear-filter]", u.filters.clearTags = "#clear-all-category-filters", u.filters.searchStore = ".website-search-input", u.tabs = "[data-tab]", u.loadMore = ".load-more-offers", u.noOffersMsg = ".no-offer-avail", u.container = {
            preRender: ".pre-render",
            tag: ".applied-filters-container",
            offerCards: ".offer-cards"
        }, u.filterDropdownCategory = ".filter-dropdown-category", u.loader = ".offer-loader-gif", u.pointArrow = ".no-offer-arrow-img .general-sprite .no-offer-arrow", u.noOfferBlock = ".no-offer-avail", u.sorryMsg = ".sorry-msg", u.moreLink = ".more-link", u.msgSuffix = ".msg-suffix", u.msgLink = ".msg-link", u.msgPrefix = ".msg-prefix", u.stillEarnCashback = ".still-earn-cashback", u.howItWorks = {
            trigger: ".info",
            target: ".cashback-detail"
        }
    }

    function l() {
        $(u.filters.store).change(p.populate.bind(null, "store")), $(u.filters.subCategory).change(p.populate.bind(null, "subCategory")), $(u.filters.category).change(p.populate.bind(null, "category", !0)), $(u.filters.bank).change(p.populate.bind(null, "bank")), $(u.filters.existingUser).change(p.populate.bind(null, "existingUser")), $(u.filters.clear).click(function() {
            p.clear($(this).attr("data-clear-filter"))
        }), $(u.filters.searchStore).on("keyup paste", function() {
            var e = this.value.toUpperCase();
            $(u.filters.store).each(function(o, t) {
                $(t).parent().parent()[$(t).attr("data-lbl").toUpperCase().indexOf(e) === -1 ? "addClass" : "removeClass"]("cHide")
            })
        }), $(u.tabs).click(function() {
            f.filters.tab = $(this).attr("data-tab"), $(u.tabs).removeClass("offer-active-tab"), $(this).addClass("offer-active-tab"), p.apply()
        }), $(u.container.offerCards).on("click", ".load-more-offers", function() {
            f.pagination[f.filters.tab]++, p.apply(!0)
        });
        var e = function(e) {
            var o = $(u.filters[$(e).attr("data-filter")] + '[value="' + $(e).attr("data-value") + '"]');
            o.prop("checked", !1), "category" == $(e).attr("data-filter") && (o.parent().find(".sub-category").prop("checked", !1), p.populate("subCategory", !0)), p.populate($(e).attr("data-filter"), !0)
        };
        $(u.container.tag).on("click", ".applied-filters", function() {
            e(this), p.apply()
        }), $(u.filters.clearTags).click(function() {
            $(u.container.tag + " [data-filter]").each(function(o, t) {
                e(t)
            }), p.apply()
        }), $(u.filterDropdownCategory).click(function() {
            $(this).next("ul").toggle(), $(this).toggleClass("fa-angle-right fa-angle-down")
        }), $(u.filters.category).change(function() {
            $(this).parent().find(".sub-category").prop("checked", $(this).prop("checked")), p.populate("subCategory")
        }), $(u.filters.subCategory).change(function() {
            var e = $(this).parent().parent().parent().find(".cat-filter");
            e.prop("checked", 0 !== e.parent().find(".sub-category-filter").find("input:checked").length), p.populate("category", !0)
        }), $(u.msgLink).click(function() {
            $('[data-tab="' + this.dataset.goto + '"]').click()
        }), $(document).on("mouseenter", u.howItWorks.trigger, function() {
            if (!$(this).find(u.howItWorks.target).length) {
                var e = $(u.howItWorks.target + "[data-original]").clone();
                e.removeAttr("data-original"), e.find("[data-t]").text($(this).attr("data-t"));
                var o = $(this).attr("data-s");
                o && e.find("[data-s]").text(" " + o), $(this).append(e)
            }
        })
    }

    function c() {
        var e = $.param({
            subcategories: f.filters.subCategory.length > 0 ? f.filters.subCategory : "",
            banks: f.filters.bank.length > 0 ? f.filters.bank : "",
            stores: f.filters.store,
            sortBy: f.filters.sortBy,
            noOfPages: f.pagination[f.filters.tab],
            tab: f.filters.tab,
            new_user: !!f.filters.existingUser[0]
        });
        return e
    }

    function d() {
        i(), l(), p.init()
    }
    var u = {},
        f = {
            filters: {},
            pagination: {
                perPage: 100
            },
            tabs: ["all", "coupon", "cashback", "couponcashback", "deal"],
            highlightedOffer: null,
            response: {
                tabs: {},
                storeCounter: {},
                newUserExclusive: 0
            },
            cache: {
                xhr: null,
                prevFilter: null,
                prevPagination: null,
                prevSubCat: "[]"
            }
        },
        p = function(e) {
            function t() {
                e.existingUser = [], e.store = [], e.subCategory = [], e.category = [], e.tab = "all", e.tabCounter = {}, e.storeCounter = {}, e.sortBy = "popularity"
            }

            function a() {
                f.tabs.forEach(function(e) {
                    f.pagination[e] = 1
                })
            }

            function s() {
                $(u.filters.category).each(function(e, o) {
                    $(o).prop("checked", 0 !== $(o).parent().find(".sub-category-filter").find("input:checked").length)
                })
            }

            function r(o, t) {
                e[o] = [], $(u.filters[o]).each(function(t, a) {
                    a.checked && e[o].push(a.value)
                }), "existingUser" == o && "undefined" != typeof page && "stores" === page && n("undefined" != typeof e.existingUser[0] ? "add" : "delete"), t !== !0 && ($(".expired-offer-msg").hide(), a(), l(), "stores" === page && (newUserOffer = !1))
            }

            function n(e) {
                var t = o.getCookie("hideNewUserOffers");
                t && t.indexOf("[") === -1 && o.deleteCookie("hideNewUserOffers", !0), t = t ? JSON.parse(t) : [];
                var a = window.location.pathname.substr(1);
                "add" === e && t.indexOf(a) === -1 ? t.push(a) : "delete" === e && t.indexOf(a) !== -1 && t.splice(t.indexOf(a), 1), o.setCookie("hideNewUserOffers", JSON.stringify(t), 365)
            }

            function i(o) {
                e[o] = [], $(u.filters[o]).prop("checked", !1), $(u.filters.category).prop("checked", !1), r("category", !0), $(u.filterDropdownCategory).each(function(e, o) {
                    $(o).next("ul").hide(), $(o).removeClass("fa-angle-down").addClass("fa-angle-right")
                }), l()
            }

            function l(t) {
                f.cache.prevFilter === JSON.stringify(e) && f.cache.prevPagination === JSON.stringify(f.pagination) || (f.cache.xhr && f.cache.xhr.abort(), m.show(!0), $(u.noOffersMsg).addClass("cHide"), $(u.loadMore).addClass("cHide"), f.loadMore = $(u.loadMore), f.loader = $(".cat-store-loader"), f.stillEarnCashback = $(u.stillEarnCashback), f.pagination.perPage = 100, t ? "stores" == page && (f.pagination.perPage = 1e5) : $(".filters-div").hasClass("toggle-fix") ? ($("html, body").animate({
                    scrollTop: 0
                }, 50), setTimeout(function() {
                    h.clearContainer(), a()
                }, 50)) : (h.clearContainer(), a()), window.history.replaceState(history.state, document.title, "?" + c()), f.cache.xhr = o.ajax("?", "POST", JSON.stringify({
                    subcategories: e.subCategory,
                    stores: e.store,
                    sortBy: e.sortBy,
                    new_user: !!e.existingUser[0],
                    page: f.pagination[f.filters.tab],
                    tab: f.filters.tab,
                    affKey: "undefined" != typeof getcodeAffKey ? getcodeAffKey : "",
                    loginSkipped: "undefined" != typeof getcodeLoginSkipped ? getcodeLoginSkipped : "",
                    h: f.highlightedOffer,
                    response: "ajax",
                    banks: e.bank
                }), function(o) {
                    f.response.tabs = o.response.tabs, f.response.storeCounter = o.response.storeCounters, f.response.newUserExclusive = o.response.newUserExclusive, h.render(), s(), f.cache.prevFilter = JSON.stringify(e), f.cache.prevPagination = JSON.stringify(f.pagination), m.show(!1)
                }, null, !1, "json", {
                    "Content-Type": "application/json; charset=utf-8"
                }))
            }

            function d() {
                e.tab = $(u.tabs + ".offer-active-tab").attr("data-tab");
                var t = o.queryDeserializer();
                t.noOfPages && (f.pagination[e.tab] = t.noOfPages instanceof Array ? t.noOfPages[0] : t.noOfPages), t.h && (f.highlightedOffer = t.h instanceof Array ? t.h[0] : t.h), r("subCategory", !0), r("store", !0), r("existingUser", !0), r("bank", !0), $(u.filters.category).each(function(o, t) {
                    var a = $(t).parent().find(".sub-category-filter").find("input:checked").length;
                    t.checked = !!a, a && a === $(t).parent().find(".sub-category-filter").find("input").length && e.category.push(t.value)
                }), h.renderTags(), f.cache.prevSubCat = JSON.stringify(f.filters.subCategory)
            }

            function p() {
                t(), a(), d(), h.renderTags()
            }
            return {
                init: p,
                apply: l,
                reset: t,
                populate: r,
                clear: i
            }
        }(f.filters),
        h = function() {
            function e() {
                var e = "",
                    o = JSON.parse(JSON.stringify(f.filters));
                if (o.category.length)
                    for (var t = o.category.length - 1; t >= 0; t--) {
                        var a = $(u.filters.category + '[value="' + o.category[t] + '"]');
                        a.parent().find(".sub-category-filter").find("input:checked").length == a.parent().find(".sub-category-filter").find("input").length ? a.parent().find(".sub-category-filter").find("input").each(function(e, t) {
                            o.subCategory.splice(o.subCategory.indexOf(t.value), 1)
                        }) : o.category.splice(t, 1)
                    }["category", "store", "subCategory", "bank"].forEach(function(t) {
                        o[t].forEach(function(o) {
                            e += '<div class="applied-filters" data-filter="' + t + '" data-value="' + o + '"><div><div class="filter-name">' + $(u.filters[t] + '[value="' + o + '"]').attr("data-lbl") + ' </div><div class="close-btn">×</div></div></div>'
                        })
                    }), $(u.container.tag).html(e).parent()[e ? "removeClass" : "addClass"]("cHide"), $(u.container.tag + " .applied-filters").sort(function(e, o) {
                        return $(e).find(".filter-name").text().toUpperCase() > $(o).find(".filter-name").text().toUpperCase() ? 1 : -1
                    }).appendTo($(u.container.tag))
            }

            function o() {
                for (var e in f.response.tabs) $('[data-tab="' + e + '"] span').text(f.response.tabs[e].count);
                f.cache.prevSubCat !== JSON.stringify(f.filters.subCategory) && (f.cache.prevSubCat = JSON.stringify(f.filters.subCategory), $(u.filters.store).each(function(e, o) {
                    $(o).parent().parent().show(), $(o).parent().parent().find("span:nth(1)").text(f.response.storeCounter[o.value] || 0), f.response.storeCounter[o.value] || $(o).parent().parent().hide()
                }), $("#existing-user-offers").text("(" + (f.response.newUserExclusive || 0) + ")"), $(u.filters.storeWrapper + " .store-checkbox-filter").sort(function(e, o) {
                    return +$(o).find("span").text() > +$(e).find("span").text() ? 1 : -1
                }).appendTo($(u.filters.storeWrapper)))
            }

            function t() {
                $(u.container.preRender).append(f.response.tabs[f.filters.tab].html), $(u.container.offerCards).append(f.loader), $(u.container.offerCards).append(f.loadMore), $(u.container.offerCards).append(f.stillEarnCashback);
                var e = f.pagination[f.filters.tab] * f.pagination.perPage < f.response.tabs[f.filters.tab].count;
                $(u.loadMore)[e ? "removeClass" : "addClass"]("cHide"), $(u.stillEarnCashback)[e ? "addClass" : "removeClass"]("cHide"), $(u.noOffersMsg)[f.response.tabs[f.filters.tab].count ? "addClass" : "removeClass"]("cHide"), a.offerDescMoreLessTagInit()
            }

            function i() {
                if ("stores" === window.page && ($(u.noOfferBlock)[f.response.tabs[f.filters.tab].count ? "hide" : "show"](), $(".offer-card-holder").hasClass("expiredoffer") && $(u.noOfferBlock).hide(), !f.response.tabs[f.filters.tab].count)) {
                    var e = "";
                    $(u.moreLink).show(), $(u.pointArrow).css("display", "none"), "coupon" === f.filters.tab && 0 === f.filters.subCategory.length && f.response.tabs.deal.count > 0 ? (e = "Sorry, we don't have any coupons to show.", $(u.msgPrefix).text("But we do have "), $(u.msgLink).text(f.response.tabs.deal.count + (f.response.tabs.deal.count > 1 ? " deals" : " deal")), $(u.msgSuffix).text(""), $(u.msgLink).attr("data-goto", "deal")) : "deal" === f.filters.tab && 0 === f.filters.subCategory.length && f.response.tabs.coupon.count > 0 ? (e = "Sorry, we don't have any deals to show.", $(u.msgPrefix).text("But we do have "), $(u.msgLink).text(f.response.tabs.coupon.count + (f.response.tabs.coupon.count > 1 ? " coupons" : " coupon")), $(u.msgSuffix).text(""), $(u.msgLink).attr("data-goto", "coupon")) : "coupon" === f.filters.tab && f.response.tabs.all.count > 0 && f.response.tabs.deal.count > 0 ? (e = "Sorry, we don't have any coupons to show.", $(u.msgPrefix).text("But we have "), $(u.msgLink).text(f.response.tabs.deal.count + (f.response.tabs.deal.count > 1 ? " deals" : " deal")), $(u.msgSuffix).text(" on the categories selected."), $(u.msgLink).attr("data-goto", "deal")) : "coupon" === f.filters.tab && f.response.tabs.all.count > 0 && 0 === f.response.tabs.deal.count ? (e = "Sorry, we don't have any offers to show.", $(u.msgPrefix).text("But we have "), $(u.msgLink).text(f.response.tabs.all.count + (f.response.tabs.all.count > 1 ? " offers" : " offer")), $(u.msgSuffix).text(" on other categories."), $(u.msgLink).attr("data-goto", "all")) : "deal" === f.filters.tab && f.filters.subCategory.length > 0 && f.response.tabs.coupon.count > 0 ? (e = "Sorry, we don't have any deals to show.", $(u.msgPrefix).text("But we have "), $(u.msgLink).text(f.response.tabs.coupon.count + (f.response.tabs.coupon.count > 1 ? " coupons" : " coupon")), $(u.msgSuffix).text(" on the categories selected."), $(u.msgLink).attr("data-goto", "coupon")) : "deal" === f.filters.tab && f.response.tabs.all.count > 0 && 0 === f.response.tabs.deal.count ? (e = "Sorry, we don't have any deals to show.", $(u.msgPrefix).text("But we have "), $(u.msgLink).text(f.response.tabs.all.count + (f.response.tabs.all.count > 1 ? " offers" : " offer")), $(u.msgSuffix).text(" on other categories."), $(u.msgLink).attr("data-goto", "all")) : (window.isCashback && 0 === f.response.tabs.all.count ? (e = "Sorry, we don't have any offers on " + window.storeName + " today but you can check this out!", $(u.pointArrow).css("display", "block")) : (e = "Sorry, we don't have any offers on " + window.storeName + " today but you can check these stores.", $(u.pointArrow).css("display", "none")), $(u.moreLink).hide()), $(u.sorryMsg).text(e).show()
                }
            }

            function l() {
                $(u.container.preRender).html("")
            }

            function c() {
                o(), t(), i(), "undefined" != typeof newUserOffer && newUserOffer === !0 && ($("#existing-user-filter").prop("checked") === !1 ? $(".expired-offer-msg").hide() : $(".expired-offer-msg").show()), e(), s.afterRenderScroll(), r.init(), "stores" === window.page && n.dynamicBind()
            }
            return {
                render: c,
                clearContainer: l,
                renderTags: e
            }
        }(),
        m = function() {
            function e(e) {
                $(u.loader)[e ? "show" : "hide"]()
            }
            return {
                show: e
            }
        }();
    return d(), {
        getFilterParamsForUrl: c
    }
}(_config, _util, _gtm, CD.p.offer, _scroll, _lazyload, _slotMachine), CD.p.stores = function(e, o, t, a, s, r, n, i) {
    function l() {
        b.cashbackRate = $("#view-more-cashback-rates"), b.cashbackRateModal = $(".newcashback-modal"), b.oldCashbackRateModal = $(".oldcashback-modal"), b.viewMore = $("#view-more-desc"), b.viewLess = $("#view-less-desc"), b.aboutMerchantCard = $(".about-merchant .about-merchant-desc"), b.shopAtButtonWithCashback = $("#shop-at-merchant-button-is-cashback"), b.shopAtButtonWithNoCashback = $("#shop-at-merchant-button-no-cashback"), b.startShopModal = $("#startShopStoreModal"), b.storeFavourite = $("#store-favourite-heart"), b.signupModal = $("#signup-modal"), b.subscribeButton = $("#subscribe-btn"), b.subscribeInput = $("#subscribe-input"), b.subscribed = $(".subscribed"), b.subscribe = $(".subscribe"), b.storeOptionsPopup = $("#whatShopModal"), b.stillEarnCashback = $(".still-earn-cashback-btn"), b.subscribedButton = $("#subscribe-button"), b.modal = $(".view-more-cashback-rates-modal"), b.disableAdblockModal = $("#disableAdblockModal"), b.disabledAdblockBtn = $(".disabled-adblock-btn"), b.skipAdblockCb = $(".skip-adblock-btn"), b.storeNotesContent = $("#store-sticky-content"), b.maximisedArrowDown = $("#minimise-store-notes"), b.signupEmail = $("#signup-email"), b.expiredCouponsOfferTitle = $(".expiredCoupons .card-title"), b.ratingWrapper = $(".rating"), b.claimRaffle = $(".store-raffle")
    }

    function c() {
        b.cashbackRate.click(function() {
            5 == $(".newcashback-modal .table-heading.red td").length && ($(".newcashback-modal").css("width", "860px"), $(".newcashback-modal tr").css("width", "815px")), 5 == $(".oldcashback-modal .table-heading.red td").length && ($(".oldcashback-modal").css("width", "860px"), $(".oldcashback-modal tr").css("width", "815px")), b.cashbackRateModal.addClass("md-show"), $(".newcashback-modal tbody").css("top", $(".newcashback-modal .table-heading.red").height()), $(".oldcashback-modal tbody").css("top", $(".oldcashback-modal .table-heading.red").height()), n.disableBodyScroll(!0)
        }), b.viewMore.click(function() {
            b.viewMore.hide(), b.viewLess.show(), b.aboutMerchantCard.css("-webkit-line-clamp", "50")
        }), b.viewLess.click(function() {
            b.viewLess.hide(), b.viewMore.show(), b.aboutMerchantCard.css("-webkit-line-clamp", "9")
        }), b.shopAtButtonWithCashback.click(function(e) {
            f(), u(!1, "", e), $("#ohWaitModal").find(".modal-var-B .offer-desc-wrapper .offer-title").text("Shop at " + storeName).addClass("shop-at-merchant-btn-click")
        }), b.shopAtButtonWithNoCashback.click(function(e) {
            u(!0, "", e)
        }), b.storeFavourite.on("click", function(e, o) {
            isAuthorized || o ? d() : (b.signupModal.addClass("md-show"), b.signupEmail.focus(), r.locals.makeFavouriteStore = !0)
        }), b.subscribeButton.click(function() {
            isAuthorized && e.ajax(o.BASE_URL + "/subscriptions/unsubscribe", "POST", {
                type: "store",
                identifier: storeId
            }, function(e) {
                storeLocals.isSubscribed = 0, b.subscribed.css("display", "none"), b.subscribe.css("display", "inline"), w.init("Unsubscribed Successfully.")
            }, null, !1)
        }), b.subscribeInput.blur(function() {
            v.focus = 0
        }), b.subscribedButton.click(function(a) {
            var s, r = {
                type: "store",
                identifier: storeId
            };
            isAuthorized || (s = b.subscribeInput.val(), r.email = s), !isAuthorized && "" != s || isAuthorized ? e.ajax(o.BASE_URL + "/subscriptions/subscribe", "POST", r, function(o) {
                o.success ? (b.subscribed.css("display", "inline"), b.subscribe.css("display", "none"), storeLocals.isSubscribed = 1, o.response.message = o.response.message.replace(/<>/g, storeName), w.init(o.response.message), isAuthorized || b.subscribeInput.val("")) : (b.subscribeInput.val(""), o.errors.user_display ? t.show(o.errors.message, "error") : t.show("Request could not be completed , Try again!", "error")), e.logUserAction("subscribe-store", storeId)
            }, function(e) {
                t.show("Request could not be completed", "error")
            }, !1) : b.subscribeInput.is(":focus") || 0 != v.focus ? 1 == v.focus && (b.subscribeInput.blur(), v.focus = 0) : (b.subscribeInput.focus(), v.focus = 1)
        }), $("#casback-rates-ctr , #cashback-offers-ctr").css("height", "auto"), $(".offer-cards").on("click", ".still-earn-cashback-btn", function(e) {
            f(), u(!1, "", e), $("#ohWaitModal .modal-var-B .offer-desc-wrapper .offer-title").text("Shop at " + storeName).addClass("shop-at-merchant-btn-click")
        }), b.modal.find(".close-cashback-rates-popup,.md-overlay").click(function() {
            b.modal.find(".md-show").removeClass("md-show"), n.disableBodyScroll(!1)
        }), b.disabledAdblockBtn.click(function() {
            $(this).hasClass("cliked-store-btn") && (a.locals.skipLogin = !1, a.locals.showModal = !0, p(v.savedStates.noCashback, v.savedStates.offer, v.savedStates.landingUrl))
        }), b.skipAdblockCb.click(function() {
            $(this).hasClass("cliked-store-btn") && (a.locals.skipLogin = !0, a.locals.showModal = !1, p(v.savedStates.noCashback, v.savedStates.offer, v.savedStates.landingUrl), $("#ohWaitModal").removeClass("md-show"), a.offerSkipLogin())
        }), b.maximisedArrowDown.click(function() {
            $(this).toggleClass("fa-chevron-down").toggleClass("fa-chevron-up"), b.storeNotesContent.toggleClass("cHide")
        }), b.ratingWrapper.find("input").click(function() {
            v.rating = parseInt($(this).val()), localStorage.setItem(storeId + "-rating", v.rating), e.ajax(o.BASE_URL + "/stores/" + storeId + "/rate", "POST", {
                rating: v.rating
            }, function(e) {
                t.show(e.response.message, "success")
            }, null, !0)
        }), b.claimRaffle.click(function() {
            var a = $(this);
            loggedIn ? e.ajax(o.BASE_URL + "/game/raffle/claim-raffle-ticket", "POST", {
                raffle_identifier: a.data("id")
            }, function(e) {
                e.success && e.response.status ? (a.addClass("cHide"), t.show('You have collected your Raffle ticket. <a href="/diwali-sale#raffleDashboard">Click here</a> to visit the dashboard and enter tickets into draw', "success", !1, !1)) : t.show("Could not claim your raffle on this store. Please try again!", "error")
            }, function(e) {
                t.show("Could not claim your raffle on this store. Please try again!", "error")
            }, !0, "json", null, null, {
                withCredentials: !0
            }) : r.locals.claimRaffle = !0
        })
    }

    function d() {
        b.storeFavourite.hasClass("fav-already") ? type = "unset" : type = "set", r.locals.makeFavouriteStore && (type = "set"), e.ajax(o.BASE_URL + "/stores/" + storeId + "/favourite", "POST", {
            type: type
        }, function(e) {
            b.storeFavourite["unset" == type ? "removeClass" : "addClass"]("fav-already"), b.storeFavourite["unset" == type ? "removeClass" : "addClass"]("fav-heartblast"), b.storeFavourite.attr("title", "unset" == type ? "Add to Favourites" : "Remove from Favourites")
        }, null, !0)
    }

    function u(e, o, t) {
        var s = {
            storeName: storeName,
            cashbackType: cashbackType,
            storeImage: storeImage,
            storeImageSmall: storeImageSmall,
            isCashback: isCashback,
            id: storeId,
            cashbackText: cashbackText
        };
        o && (s.landingUrl = o), t = t || window.event;
        var r = a.checkAdblock();
        r && 1 === s.isCashback && "undefined" != typeof t && t.target && ("shop-at-merchant-button-is-cashback" === t.target.id || t.target.classList.contains("still-earn-cashback-btn")) ? (v.savedStates.noCashback = e, v.savedStates.offer = s, v.savedStates.landingUrl = o, b.disabledAdblockBtn.addClass("cliked-store-btn"), b.skipAdblockCb.addClass("cliked-store-btn"), b.disableAdblockModal.addClass("md-show")) : p(e, s, o)
    }

    function f() {
        var o = window.location.href;
        o = e.removeParam("offer", o), o && history.replaceState(null, null, o)
    }

    function p(e, o, t) {
        if ((b.disabledAdblockBtn.hasClass("cliked-store-btn") || b.skipAdblockCb.hasClass("cliked-store-btn")) && (b.disabledAdblockBtn.removeClass("cliked-store-btn"), b.skipAdblockCb.removeClass("cliked-store-btn")), e || isAuthorized) {
            if (hasMultipleOutUrls) return void b.storeOptionsPopup.addClass("md-show");
            isAuthorized && !e ? (a.locals.showModal = !1, a.offerRedirect("startShopStoreModal", o, !0)) : a.redirectToStoreOutlink(null, t)
        } else a.offerRedirect("ohWaitModal", o, !0)
    }

    function h() {
        var o = e.getQueryParam("modal"),
            t = e.getQueryParam("offer");
        o && !t && (!o || "startShopStoreModal" != o && "whatShopModal" != o || (u(!isCashback), e.removeQueryParams()))
    }

    function m() {
        var e = localStorage.getItem(storeId + "-rating");
        e && ($("#star" + e).prop("checked", "true"), v.rating = parseInt(e))
    }

    function g() {
        l(), b.aboutMerchantCard.height() > 190 && (b.viewMore.show(), b.aboutMerchantCard.css("-webkit-line-clamp", "9")), b.expiredCouponsOfferTitle.each(function() {
            var e = $(this);
            e.css("height", "auto"), e.height() > 62 ? (e.css("height", "55px"), e.removeClass("hidden")) : e.addClass("hidden")
        }), isFavourite && b.storeFavourite.addClass("fav-already"), v.focus = 0, c(), h(), i.extensionCheck(), showRating && m(), window.location.href.indexOf("?tc=") > -1 && b.oldCashbackRateModal.addClass("md-show")
    }
    var b = {},
        v = {
            focus: 0,
            try: !1,
            savedStates: {
                noCashback: {},
                offer: {},
                landingUrl: {}
            },
            rating: 4
        },
        w = function() {
            function e() {
                b.notify = $("#notify")
            }

            function o(o) {
                e(), b.notify.text(o), b.notify.show(), setTimeout(function() {
                    b.notify.hide()
                }, 5e3)
            }
            return {
                init: o
            }
        }();
    return g(), {
        startShopping: u,
        makeFavouriteStore: d
    }
}(_util, _config, _popUp, _getcode, _gtm, _auth, _scroll, CD.p.offer);