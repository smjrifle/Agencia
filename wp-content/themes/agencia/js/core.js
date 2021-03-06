"use strict";
var HUGE;
HUGE = function() {
    function c() {
        var f, e, u, i;
        if (n) {
            for ($("body").addClass("touch-device"), i = 0; i < r.length; i++) navigator.userAgent.indexOf(r[i]) > -1 && $("body").addClass(r[i]);
            u = function() {
                var t = $("meta[name=viewport]"),
                    n;
                switch (window.orientation) {
                    case -90:
                    case 90:
                        n = "device-width";
                        break;
                    default:
                        n = 640
                }
                t.attr("content", t.attr("content").replace(/width=[^,]+/, "width=" + n)), g()
            }, f = "onorientationchange" in window, e = f ? "orientationchange" : "resize", window.addEventListener(e, function() {
                u()
            }, !1), u(), $(window).width() < 656 && $("h1").fitText(1.2, {
                minFontSize: "60px",
                maxFontSize: "96px"
            })
        }
        t && ($('embed[type="application/x-shockwave-flash"]').parent().hide(), l())
    }

    function l() {
        var n = $("body"),
            i = $("input, textarea"),
            t = "ios-fixed-fix";
        i.focus(function() {
            n.addClass(t)
        }).blur(function() {
            n.removeClass(t)
        }), n.bind("touchmove", function() {
            i.blur(), $(this).removeClass(t)
        })
    }

    function f() {
        return window.innerHeight || document.documentElement.offsetHeight || document.documentElement.clientHeight
    }

    function a() {
        function l() {
            return r = window.pageYOffset, u = r > s ? "down" : "up", s = r, u
        }

        function e(i) {
            return i ? $("body").bind("touchmove", function(n) {
                n.preventDefault()
            }) : ($("body").unbind("touchmove"), n.addClass("closing"), clearTimeout(o), o = setTimeout(function() {
                n.removeClass("closing")
            }, 450)), n.toggleClass("open", i), t.attr("tabindex", i ? 0 : -1), setTimeout(function() {
                $("body").toggleClass("clip", i)
            }, 600), !1
        }

        function c() {
            var n = f(),
                i = n / t.length,
                r = Math.min(i / 2, 60);
            //t.css("font-size", r)
        }
        var n = $("body > nav"),
            i = !1,
            o, t = n.find("li a"),
            s = 0,
            r, u;
        t.attr("tabindex", -1), h(c), $("#toggle").click(function(n) {
            n.preventDefault(), c(), e(i = !i)
        }), $(document).keyup(function(n) {
            n.keyCode === 27 && e(!1)
        });
        $(".nav-background").on("click", function() {
            e(i = !1)
        });
        $(window).bind("scroll", function() {
            if (!n.hasClass("open")) {
                var t = l(),
                    i = window.pageYOffset;
                i > 460 && t == "down" ? n.addClass("hide-it") : n.removeClass("hide-it"), t == "up" && i > 500 ? n.addClass("solid") : n.removeClass("solid")
            }
        })
    }

    function e(n) {
        var t = n || $(".carousel");
        t.each(function(n, t) {
            function u() {
                i > e && (i = 0), i < 0 && (i = e), $(t).scooch("move", i + 1), o()
            }

            function o() {
                f.removeClass("active"), f.eq(i).addClass("active")
            }

            function s() {
                r = setTimeout(function() {
                    i++, u(), s()
                }, 4e3)
            }
            if (!$(t).hasClass("carousel-activated")) {
                var i = 0,
                    f = $(t).find("nav span"),
                    h = $(t).find(".next"),
                    c = $(t).find(".prev"),
                    e = $(t).find(".carousel-wrap > li").length - 1,
                    r;
                $(t).scooch({
                    classPrefix: "",
                    classNames: {
                        active: "active",
                        outer: "carousel",
                        inner: "carousel-wrap"
                    }
                }).on("afterSlide", function(n, t, r) {
                    i = r - 1, o()
                }).addClass("carousel-activated"), f.each(function(n) {
                    $(this).click(function() {
                        i = n, clearTimeout(r), u()
                    })
                }), c.click(function() {
                    i--, clearTimeout(r), u()
                }), h.click(function() {
                    i++, clearTimeout(r), u()
                }), $(t).data("autoplay") && s()
            }
        })
    }

    function o(n) {
        function r() {
            t.removeClass("engage"), i.removeClass("clip"), i.trigger("HUGE.close")
        }
        var t = $(n),
            i = $("body");
        $(n).on("touchstart", function() {});
        t.addClass("engage"), i.addClass("clip"), t.find(".close").click(r);
        $(document).on("keyup.overlay", function(n) {
            n.keyCode === 27 && r()
        })
    }

    function v() {
        $(".share").click(function(n) {
            n.preventDefault();
            var t = $(this).attr("href"),
                i = $(this).attr("data-title");
            $(t).find("h1").html(i), o(t)
        });
        var t = 575,
            i = 440,
            r = ($(window).width() - t) / 2,
            u = ($(window).height() - i) / 2,
            n = "status=1,width=" + t + ",height=" + i + ",top=" + u + ",left=" + r;
        $(".facebook").on("click touchend", function(t) {
            t.preventDefault();
            var i = $(this).attr("href");
            i || (i = location.href), window.open("https://www.facebook.com/sharer/sharer.php?u=" + i, "sharer", n)
        });
        $(".twitter").on("click touchend", function(t) {
            t.preventDefault();
            var i = $(".twitter-link").attr("href");
            i || (i = "https://twitter.com/intent/tweet?url=" + location.href), window.open(i, "twitter", n)
        });
        $(".gplus").on("click touchend", function(t) {
            t.preventDefault();
            var i = $(this).attr("href");
            i || (i = location.href), window.open("http://plus.google.com/share?url=" + i, "google", n)
        });
        $(".linkedin").on("click touchend", function(t) {
            t.preventDefault();
            var i = $(this).attr("href");
            i || (i = location.href), window.open("http://www.linkedin.com/shareArticle?mini=true&url=" + location.href + "&source=HUGE", "linkedin", n)
        });
        $(".pinterest").on("click touchend", function(t) {
            t.preventDefault();
            var i = $(this).attr("href");
            i || (i = location.href), window.open("http://tbd/share?url=" + i, "pinterest", n)
        })
    }

    function y() {
        function i(n, t) {
            function u(t) {
                var u = t - r.offset().left,
                    i = 100 * u / r.width();
                i > 100 && (i = 100), i < 0 && (i = 0), f.css("width", i + "%"), n.currentTime = n.duration * i / 100
            }

            function e(n, t) {
                t = t || n;
                var i = Math.floor(n % 60),
                    r = Math.floor(n / 60 % 60),
                    u = Math.floor(n / 3600),
                    f = Math.floor(t / 60 % 60),
                    e = Math.floor(t / 3600);
                return (isNaN(n) || n === Infinity) && (u = r = i = "-"), u = u > 0 || e > 0 ? u + ":" : "", r = ((u || f >= 10) && r < 10 ? "0" + r : r) + ":", i = i < 10 ? "0" + i : i, u + r + i
            }
            n.removeAttribute("controls");
            var o = $(t).find(".plause"),
                r = $(t).find(".progress"),
                f = $(t).find(".progress .played"),
                s = $(t).find(".progress .loaded"),
                h = $(t).find(".time .current"),
                i = !1;
            o[0].addEventListener("click", function() {
                n.paused ? n.play() : n.pause()
            }), n.addEventListener("loadedmetadata", function() {
                $(t).find(".time .duration").html(e(n.duration))
            }), n.addEventListener("timeupdate", function() {
                var t = (100 * n.currentTime / n.duration).toFixed(1);
                h.text(e(n.currentTime)), f.css("width", t + "%")
            }), n.addEventListener("progress", function() {
                if (n.buffered && n.buffered.length && n.buffered.end) {
                    var t = (100 * n.buffered.end(0) / n.duration).toFixed(1);
                    s.css("width", t + "%")
                }
            }), r.mousedown(function(n) {
                i = !0, u(n.pageX)
            }), $(document).mouseup(function(t) {
                i && (i = !1, u(t.pageX), n.play())
            }), $(document).mousemove(function(t) {
                i && (n.pause(), u(t.pageX))
            })
        }
        $(".video").each(function(r, u) {
            var f = $(this).find("video")[0],
                a = $(this).find(".controls"),
                e = $(this).find(".play"),
                h = !1,
                o, s, c, l;
            if (e.length < 1 && (e = $(this).parent().find(".play")), f === undefined || !f.canPlayType) {
                e.hide();
                return
            }
            if (t && $(f).hide(), o = n ? !1 : $(this).find(".popout"), s = n ? !1 : $(f).data("teaser"), c = f.currentSrc, i(f, a), o.length) {
                $("body").on("HUGE.close", function() {
                    f.pause(), o.removeClass("overlay")
                });
                f.addEventListener("ended", function() {
                    o.removeClass("overlay engage"), o.find(".close").click()
                })
            }
            s && (s = f.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, "") ? s[0] : s[1], l = function() {
                $(u).addClass("teaser"), typeof f.load == "function" && (c || (c = $(u).find(".mp4").attr("src")), f.removeAttribute("controls"), f.src = s, f.loop = !0, f.load(), f.play())
            }, l());
            e.on("click touchend", function() {
                t && $(f).show(), s && !h && ($(u).removeClass("teaser"), f.src = c, f.load()), o.length ? (o.addClass("overlay"), HUGE.showOverlay(o)) : n && (f.webkitSupportsFullscreen ? $("body").hasClass("iPad") ? setTimeout(function() {
                    f.webkitEnterFullscreen()
                }, 0) : (f.load(), f.play(), f.webkitEnterFullscreen()) : f.requestFullscreen ? f.requestFullscreen() : f.mozRequestFullScreen && f.mozRequestFullScreen()), h = !0, f.play()
            });
            f.addEventListener("play", function() {
                h && (e.hide(), $(".ie-poster").hide(), f.loop = !1, $(u).addClass("playing"))
            }), f.addEventListener("pause", function() {
                f.removeAttribute("controls"), $(u).removeClass("playing"), e.show(), t && $(f).hide()
            }), f.addEventListener("ended", function() {
                h = !1, $(".ie-poster").show(), f.webkitSupportsFullscreen && f.webkitExitFullscreen(), e.show(), s ? l() : f.load(), t && $(f).hide()
            })
        })
    }

    function p() {
        var n = document.querySelector("#mosaic .container");
        // new Masonry(n, {
        //     columnWidth: 320,
        //     itemSelector: ".tile"
        // })
    }

    function s() {
        $(".load").click(function(n) {
            var i;
            if (n.preventDefault(), i = $(n.currentTarget), !$(this).hasClass("loading")) {
                var r = $(this).attr("href"),
                    u = $(this).data("target"),
                    t = $(this).data("data"),
                    f = $(this).addClass("loading");
                t || (t = {
                    page: 1
                }, $(this).data("data", t)), $.ajax({
                    url: r,
                    data: t
                }).done(function(n) {
                    var r = $(n).css({
                        opacity: 0
                    });
                    $(u).append(r), r.animate({
                        opacity: 1
                    }), f.removeClass("loading"), t.page = t.page + 1, $(this).data("data", t), window._nextpage || $(".load").hide(), i.trigger("load-more-done")
                })
            }
        })
    }

    function w(n) {
        if (u) {
            var e, t, o, i, r, f, s = $(n).data("gmt") || 0,
                h = $(n).find(".hour"),
                c = $(n).find(".minute"),
                l = $(n).find(".second");
            e = s + (new Date).getUTCHours(), t = (new Date).getMinutes(), o = (new Date).getSeconds(), i = e * 30 + t / 2, r = t * 6, f = o * 6, setInterval(function() {
                f += 6, r += .1, i += .008333333333, h.css({
                    transform: "rotate(" + i + "deg)"
                }), c.css({
                    transform: "rotate(" + r + "deg)"
                }), l.css({
                    transform: "rotate(" + f + "deg)"
                })
            }, 1e3)
        }
    }

    function b(n) {
        var r = new Date,
            f = $(n).data("gmt") || 0,
            i, t, u;
        n && setInterval(function() {
            (r = new Date, t !== r.getMinutes()) && (i = (f + r.getUTCHours() + 24) % 24, t = r.getMinutes(), t < 10 && (t = "0" + t), u = i == 0 ? "12:" + t + " am" : i == 12 ? "12:" + t + " pm" : i > 12 ? i - 12 + ":" + t + " pm" : i + ":" + t + " am", n.innerHTML = u)
        }, 1e3)
    }

    function k() {
        $(window).one("scroll", function() {
            $("#top-overlap").addClass("scroll"), setTimeout(function(n) {
                $(n).trigger("shift")
            }, 700, this)
        })
    }

    function d() {
        var t = $("main"),
            i = $("aside"),
            n = 144,
            r = i.find(".container > *");
        r.each(function() {
            n += $(this).outerHeight(!0)
        }), n > t.height() && t.height(n)
    }

    function h(n) {
        i.push(n)
    }

    function g() {
        for (var n = 0; n < i.length; n++) i[n].call()
    }

    function nt() {
        var n = $(".detail").find(".formatting > :last-child");
        n.is("div") ? tt(n) : n.addClass("last")
    }

    function tt(n) {
        n.hasClass("media") ? n.prev().addClass("last") : n.find("> :first-child").is("ul") && n.find("li:last-child").addClass("last")
    }

    function it() {
        window.location.href.indexOf("client-services") < 0 && (document.cookie = "office=; expires=Thu, 01-Jan-70 00:00:01 GMT;")
    }

    function rt() {
        var n = $(".ie8 [placeholder], .ie9 [placeholder]");
        n.focus(function() {
            var n = $(this);
            n.val() == n.attr("placeholder") && (n.val(""), n.removeClass("placeholder"))
        }).blur(function() {
            var n = $(this);
            (n.val() == "" || n.val() == n.attr("placeholder")) && (n.addClass("placeholder"), n.val(n.attr("placeholder")))
        }).blur(), n.parents("form").submit(function() {
            $(this).find("[placeholder]").each(function() {
                var n = $(this);
                n.val() == n.attr("placeholder") && n.val("")
            })
        })
    }
    var i = [],
        n = navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g),
        r = ["iPad", "iPhone", "iPod", "Android"],
        t = navigator.userAgent.match(/(iPad|iPhone|iPod)/g),
        u = function() {
            var n = function() {
                var n, i = document.createElement("fake"),
                    t = {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        MSTransition: "msTransitionEnd",
                        OTransition: "oTransitionEnd otransitionend",
                        transition: "transitionend"
                    };
                for (n in t)
                    if (i.style[n] !== undefined) return t[n]
            }();
            return n && {
                end: n
            }
        }();
    return {
        init: function() {
            window.console || (console = {
                log: function() {}
            }), c(), a(), e(), k(), y(), s(), nt(), it(), rt()
        },
        showOverlay: o,
        share: v,
        carousel: e,
        analogClock: w,
        digitalClock: b,
        mosaic: p,
        registerOrientationMethods: h,
        transitionSupport: u,
        getWindowHeight: f,
        equalizeHeights: d,
        loadMore: s,
        isTouchDevice: n,
        iOSDevices: ["iPad", "iPhone"]
    }
}(), $(HUGE.init)