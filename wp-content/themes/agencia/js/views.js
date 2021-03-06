"use strict";
var HUGE = HUGE || {};
HUGE.Home = function(n) {
        function tt() {
            n(window).on({
                "DOMMouseScroll mousewheel": ft,
                keydown: et,
                resize: lt
            });
            p.on({
                touchstart: it,
                touchmove: rt,
                touchend: ut
            })
        }

        function it(n) {
            c === null && (n.originalEvent.touches && (n = n.originalEvent.touches[0]), c = n.clientY, l = i.eq(t)[0], l.classList.add("no-animation"), u = i.eq(t - 1)[0], u.classList.add("no-animation"))
        }

        function rt(n) {
            if (g, !s) return !0;
            if (c !== null) {
                if (n.originalEvent.touches && (n = n.originalEvent.touches[0]), r = c - n.clientY, f = r / o, f > 0) {
                    if (t === h) return a(!1, !0), !0;
                    l.style.height = 100 - f * 100 + "%", u && (u.style.height = "")
                } else u && (u.style.height = -f * 100 + "%", l.style.height = "");
                return !1
            }
        }

        function ut() {
            if (c = null, l.classList.remove("no-animation"), u && u.classList.remove("no-animation"), !s) {
                var t = n("#wrap")[0].getBoundingClientRect().top;
                return t >= 0 ? (a(!0, !0), !1) : !0
            }
            f >= d ? b() : Math.abs(f) >= d ? w() : y(), f = 0
        }

        function ft(i) {
            if (e) return !1;
            if (i.originalEvent.detail < 0 || i.originalEvent.wheelDelta > 0) {
                if (t === 0) return !1;
                if (r--, Math.abs(r) >= k)
                    if (s) w();
                    else {
                        var u = n("#main")[0].getBoundingClientRect().top;
                        return u === 0 ? (a(!0), !1) : !0
                    }
            } else {
                if (!s) return !0;
                r++, r >= k && b()
            }
            return !1
        }

        function et(n) {
            (n.keyCode === 37 || n.keyCode === 38) && w(), (n.keyCode === 39 || n.keyCode === 40) && b()
        }

        function a(t, i) {
            r = 0, s = t, e = !0, setTimeout(function() {
                n("body > nav").toggleClass("solid", !t)
            }, 600), i ? t && setTimeout(scrollTo, 0, 0, 1) : (n("body").toggleClass("shifted", !t), setTimeout(function() {
                n("body").css("overflow", t ? "hidden" : "auto"), e = !1
            }, 950), document.getElementById("project-2").style.webkitTransform = "scale(1)")
        }

        function y() {
            r = 0, e = !0, i.each(function(i, r) {
                r.style.height = "", n(r).toggleClass("active", i >= t)
            }), v.removeClass("active").eq(t).addClass("active")
        }

        function w() {
            t--, t < 0 && (t = 0), y()
        }

        function b() {
            if (t === h) return a(!1), !1;
            t++, t > h && (t = h), y()
        }

        function ot() {
            HUGE.isTouchDevice || (t = i.length - 1, a(!1), setTimeout(function() {
                i.removeClass("active").last().addClass("active"), v.removeClass("active").last().addClass("active")
            }, 1e3))
        }

        function st() {
            if (!g && HUGE.transitionSupport) {
                p = n("#projects"), i = p.find(".slide"), h = i.length - 1, v = n("#projects nav span").not(".mosaic-link"), n("body").addClass("gallery"), HUGE.registerOrientationMethods(nt), tt(), ht(), nt(), i.each(function() {
                    n(this).on(HUGE.transitionSupport.end, function(n) {
                        n.stopPropagation(), n.target == this && (e = !1)
                    })
                });
                n("#wrap").on(HUGE.transitionSupport.end, function(n) {
                    n.target == this && (e = !1)
                });
                setTimeout(scrollTo, 1e3, 0, 0)
            }
        }

        function ht() {
            v.each(function(i) {
                n(this).click(function() {
                    t = i, y()
                })
            }), n("nav .mosaic-link, button").click(function() {
                ot()
            })
        }

        function ct() {
            var t = (new Date).getDay(),
                i = ["Chill. <em>Sunday.<\/em>", "Oof. <em>Monday.<\/em>", "Meh. <em>Tuesday.<\/em>", "Hello. <em>Humpday.<\/em>", "Just <em>Thursday.<\/em>", "YES. <em>Friday.<\/em>", "Sweet. <em>Saturday.<\/em>"][t];
            n(".welcome span").text().trim() === "" && n(".welcome span").html(i)
        }

        function lt() {
            HUGE.isTouchDevice && (o = HUGE.getWindowHeight(), n("body").css("height", o))
        }

        function nt() {
            var t;
            if (HUGE.isTouchDevice) {
                setTimeout(scrollTo, 0, 0, 1), n(window).resize(), o = HUGE.getWindowHeight(), t = o - 100, n("body").css("height", o);
                switch (window.orientation) {
                    case -90:
                    case 90:
                        n(".slide").css("-webkit-background-size", "auto " + t + "px"), n(".slide").css("background-size", "auto " + t + "px");
                        break;
                    default:
                        n(".slide").css("-webkit-background-size", "auto " + t + "px"), n(".slide").css("background-size", "auto " + t + "px")
                }
            }
        }
        var e = !1,
            s = !0,
            p, i, v, t = 0,
            h, o = HUGE.getWindowHeight(),
            k = 5,
            d = .15,
            r = 0,
            c = null,
            f = 0,
            g = /Android /.test(window.navigator.appVersion) && !/Chrome\/\d/.test(window.navigator.appVersion),
            l, u;
        return {
            init: function() {
                st(), ct(), HUGE.mosaic()
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.About = function(n) {
        function r() {
            var i = n("#leadership a");
            i.each(function(r) {
                n(this).click(function(n) {
                    n.preventDefault(), t(i, r)
                })
            })
        }

        function t(t, r) {
            function s(r) {
                var e = t.eq(r),
                    s = e.data("name"),
                    f = e.data("loaded"),
                    o = e.attr("href");
                if (o) return typeof history.pushState != "undefined" && (history.pushState(r, s, o), i.push(r)), u.addClass("faded"), f !== undefined ? (u.empty().append(f).removeClass("faded"), HUGE.carousel(u.find(".carousel"))) : n.ajax({
                    url: o + "?overlay=true"
                }).done(function(t) {
                    var i = n(t);
                    f = i.filter("#content"), e.data("loaded", f), u.empty().append(f).removeClass("faded"), HUGE.carousel(u.find(".carousel"))
                }), !1
            }
            var o = n(".overlay"),
                u = n("#display"),
                f = o.find(".prev").unbind(),
                e = o.find(".next").unbind();
            if (t) {
                r || (r = 0), n(f, e).removeClass("disabled"), n(r <= 0 && f || r >= t.length - 1 && e || []).addClass("disabled"), f.click(function() {
                    n(this).hasClass("disabled") || (e.removeClass("disabled"), s(--r), r <= 0 && (r = 0, f.addClass("disabled")))
                }), e.click(function() {
                    n(this).hasClass("disabled") || (f.removeClass("disabled"), s(++r), r >= t.length - 1 && (r = t.length - 1, e.addClass("disabled")))
                });
                n("body").on("HUGE.close", function() {
                    u.empty(), typeof history.pushState != "undefined" && history.pushState("about", "", "/about/")
                });
                s(r), HUGE.showOverlay(o)
            }
        }

        function u() {
            var t = n("li", "#office-map"),
                i = [];
            t.each(function(t) {
                n(this).data("bg-hover") && (i[t] = new Image, i[t].src = n(this).data("bg-hover"))
            }), t.hover(function() {
                var t = n(this).data("bg-hover");
                n(this).css("background-image", "url(" + t + ")")
            }, function() {
                n(this).css("background-image", "none")
            }), n(".clock", "#office-map").each(function() {
                new HUGE.analogClock(this)
            })
        }
        var i = [];
        return {
            init: function() {
                r(), u();
                n("header .play.button").one("click", function() {
                    n("#top-overlap").addClass("scroll")
                })
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Careers = function(n) {
        function b() {
            var t = f("office");
            n("#jobs li").each(function() {
                n(this).data("location") == t.toString() ? n(this).addClass("show") : n(this).removeClass("show")
            })
        }
        var e = "London",
            o = function() {
                var i = n("header .carousel"),
                    r = i.find("li"),
                    t = [];
                r.each(function(i) {
                    var r = new Image;
                    r.src = n(this).data("bg"), n(r).appendTo("header"), t[i] = r
                }), n(t[0]).animate({
                    opacity: 1
                });
                i.on("beforeSlide", function(i, r, u) {
                    u--, r--, n(t[r]).animate({
                        opacity: 0
                    }), n(t[u]).animate({
                        opacity: 1
                    })
                })
            },
            s = function(i) {
                for (var o = n("#department-listing ul"), f = "", r, e = 0; e < i.departments.length; e++)(r = i.departments[e], r.id !== 0) && r.jobs.length > 0 && (f += '<li class="active"><a class="block" href="/careers/' + t(r.name) + '"><h4>' + r.name + "<\/h4>", f += u(r.jobs.length), f += "<\/li>");
                o.empty().append(f)
            },
            h = function(u) {
                function l(n) {
                    var t = 0,
                        i;
                    for (i in n) t += n[i].jobs.length;
                    return t
                }

                function a(n) {
                    var t = 0,
                        i;
                    for (i in n) n.hasOwnProperty(i) && t++;
                    return t
                }
                var h = n("#jobs ul"),
                    s = "",
                    c = location.href.match(/careers\/(.*)/)[1],
                    f, e, o;
                u = greenhouse.setDataDepartments(u, c, t), f = l(u), e = a(u), f === 1 ? n("#num-openings").html("1 opening in ") : n("#num-openings").html(f + " openings in "), e === 1 ? n("#num-offices").html("1 office") : n("#num-offices").html(e + " offices"), n("#department-subhead").fadeIn("fast");
                for (o in u) s += i(u[o].department_name, u[o]);
                r(h, s)
            },
            c = function(t) {
                var e = n("ul.department-listing"),
                    f = "",
                    u;
                for (u in t.departments) t.departments[u].jobs.length > 0 && (f += i(t.departments[u].name, t.departments[u]));
                r(e, f)
            },
            i = function(n, i) {
                var f = i.jobs.length ? " active" : "",
                    r = '<li class="' + f + '" data-location="' + t(i.name) + '">';
                return r += '<div class="block"><h4>' + i.name + "<\/h4>", r += u(i.jobs.length), r += "<\/div>", r += l(n, i), r + "<\/li>"
            },
            l = function(n, i) {
                var u = "<ul>",
                    r;
                for (r in i.jobs) u += '<li><a href="/careers/' + t(n) + "/" + t(i.jobs[r].location.name) + "/" + t(i.jobs[r].title) + "?gh_jid=" + i.jobs[r].id + '">' + i.jobs[r].title + "<\/a><\/li>";
                return u + "<\/ul>"
            },
            r = function(t, i) {
                t.empty().append(i), console.log(n(".blocks > li").length);
                n(document).on("click", ".active", function(t) {
                    t.target.tagName.toLowerCase() === "a" || n(this).toggleClass("show")
                });
                n(".blocks > li").length == 1 && n(".blocks > li").addClass("show")
            },
            a = function(i) {
                var r;
                n("header").find("h1").html(i.title), document.title = i.title + " | Huge " + i.location.name, n("header").find("h3").html(i.departments[0].name + ", " + i.location.name), r = n("<div />").html(i.content).text(), r = r.replace(/\&nbsp;/g, " "), r = r.replace(/\u25cf/g, "&bull;"), n("#job-description-content").html(r), n("#job-description").show(), n("#job-application-error a").click(function(t) {
                    t.preventDefault(), n("#job-application-form").show(), n("#job-application-error").hide(), n("#job-application-form").find("input[type=submit]").removeClass("load loading").val("Submit")
                }), v(i.questions), i.location.name === e && n("#form-inputs").append('<p class="opt-in"><input type="checkbox" class="checkbox" data-required="true" /><span>I have read Huge\'s Privacy Notice and understand how my personal information will be used and processed.  I agree and consent to the collection, transfer, processing, use and disclosure of personal information I submit through when applying for a job position as outlined in the Privacy Notice accessible through the Privacy link below.<\/span><\/p>'), navigator.userAgent.indexOf("MSIE") > 0 && n(".jobpage").scrollTop(0);
                var u = new Date,
                    f = u.getTime(),
                    o = f + 24e6;
                u.setTime(o), document.cookie = "office=" + t(i.location.name) + ";expires=" + u.toGMTString() + ";path=/"
            },
            v = function(t) {
                function o() {
                    n("#job-application-form").hide(), n("#job-application-success").show()
                }

                function e() {
                    n("#job-application-form").hide(), n("#job-application-error").show()
                }

                function s(t) {
                    var i = n(t);
                    i.after('<div class="input-wrapper"><a href="#" class="button black">Attach ' + i.data("label") + '<\/a><span class="selected-file">no file chosen<\/span><\/div>'), i.next().click(function(n) {
                        n.preventDefault(), i.trigger("click")
                    }), i.change(function() {
                        i.next().find(".button").removeClass("error").html("File attached!"), i.next().find(".selected-file").html("File attached.")
                    })
                }

                function h(n, t, i) {
                    var r = "",
                        f = i ? " *" : "",
                        u;
                    switch (t.type) {
                        case "input_text":
                            u = n === "Website" || n === "LinkedIn Profile" || n === "Portfolio URL" ? "url" : t.name === "email" ? "email" : t.name === "phone" ? "tel" : "text", r += '<input type="' + u + '" class="' + t.type + '" name="' + t.name + '" placeholder="' + n + f + '" data-required="' + i + '" />';
                            break;
                        case "input_file":
                            r += '<input type="file" class="' + t.type + '" data-label="' + n + '" name="' + t.name + '" data-required="' + i + '"/>';
                            break;
                        case "textarea":
                            r += t.name !== "resume_text" && t.name !== "cover_letter_text" ? '<textarea class="' + t.type + '" name="' + t.name + '" placeholder="' + n + f + '" data-required="' + i + '"><\/textarea>' : " ";
                            break;
                        case "multi_value_single_select":
                        case "multi_value_multi_select":
                            r += c(t)
                    }
                    return r
                }

                function c() {
                    return ""
                }
                for (var u = "", r, i = 0; i < t.length; i++)
                    for (r = 0; r < t[i].fields.length; r++) u += h(t[i].label, t[i].fields[r], t[i].required);
                n("#form-inputs").html(u), window.scrollTo(0, 0), n(".input_file").each(function() {
                    s(this)
                }), n('input[name="mapped_url_token"]').val(f("gh_src")), n("#job-application-form").submit(function(t) {
                    if (t.preventDefault(), y(this)) {
                        n(this).find("input[type=submit]").addClass("load loading").val("");
                        var i = n(this).serializefiles();
                        n.ajax({
                            url: n(this).attr("action"),
                            type: "POST",
                            data: i,
                            crossDomain: !0,
                            async: !1,
                            cache: !1,
                            contentType: !1,
                            processData: !1,
                            success: function(n) {
                                n === "True" ? o() : e()
                            },
                            error: function() {
                                e()
                            }
                        })
                    }
                })
            },
            y = function(t) {
                var r = n(t),
                    i = !1;
                return r.find("input[data-required=true], textarea[data-required=true]").removeClass("error").each(function(t, r) {
                    var u = n(r);
                    if (u.parent().removeClass("error"), u.removeClass("error"), u.next().find(".button").removeClass("error"), u.is("input[type=checkbox]") && !u.is(":checked") && (i = !0, u.parent().addClass("error")), u.val() === "") i = !0, u.addClass("error"), u.is("input[type=file]") && u.next().find(".button").addClass("error");
                    else {
                        switch (u.attr("name")) {
                            case "email":
                                i = u.val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/) === null ? !0 : !1;
                                break;
                            case "phone":
                                i = u.val().match(/^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/) === null ? !0 : !1;
                                break;
                            case "first_name":
                            case "last_name":
                                i = u.val().match(/[a-zA-z]+/) === null ? !0 : !1
                        }
                        i && u.addClass("error")
                    }
                }), i ? !1 : !0
            },
            u = function(n) {
                return n === 1 ? '<span class="number-openings">1 opening<\/span><\/a><\/h4>' : '<span class="number-openings">' + n + " openings<\/span><\/a><\/h4>"
            },
            t = function(n) {
                return n = n.replace(/&/g, "and"), n = n.replace(/^[.\s]+|[.\s]+$/g, ""), n = n.replace(/\s/g, "-"), n.toLowerCase().replace(/ /g, "-").replace(/[^\w-]+/g, "")
            },
            p = function() {
                var t = {};
                return n.each(document.location.search.substr(1).split("&"), function(n, i) {
                    var r = i.split("=");
                    typeof r != "undefined" && r[0] !== "" && (t[r[0].toString()] = r[1].toString())
                }), t
            },
            w = function(n, t, i) {
                var r = new Date,
                    u;
                r.setTime(r.getTime() + i * 864e5), u = "expires=" + r.toGMTString(), document.cookie = n + "=" + t + "; " + u
            },
            f = function(n) {
                for (var r = n + "=", u = document.cookie.split(";"), i, t = 0; t < u.length; t++)
                    if (i = u[t].trim(), i.indexOf(r) == 0) return i.substring(r.length, i.length);
                return ""
            };
        return {
            init: function() {
                o();
                var n = p();
                typeof n.gh_src != "undefined" && w("gh_src", n.gh_src, 1), b()
            },
            buildAllDepartments: s,
            buildOfficesByDepartment: h,
            buildJobsByDepartment: c,
            buildJobArticle: a,
            sanitizeURL: t
        }
    }(jQuery),
    function(n) {
        n.fn.serializefiles = function() {
            var i = n(this),
                t = new FormData,
                r;
            return n.each(n(i).find('input[type="file"]'), function(i, r) {
                n.each(n(r)[0].files, function(n, i) {
                    t.append(r.name, i)
                })
            }), r = n(i).serializeArray(), n.each(r, function(n, i) {
                t.append(i.name, i.value)
            }), t
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Contact = function(n) {
        function t() {
            !HUGE.isTouchDevice || n(window).width() > 640 || n("#our-offices li").each(function() {
                var t = n(this).find("> a"),
                    i = n(this).find(".info");
                i.find("address p").append('<a href="' + t.attr("href") + '">About the Office<\/a>'), t.click(function(n) {
                    n.preventDefault(), i.toggleClass("expanded")
                })
            })
        }
        return {
            init: function() {
                t()
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.H = function(n) {
        function t() {
            n(".load").on("load-more-done", function() {
                HUGE.carousel(n(".carousel"))
            })
        }
        return {
            init: function() {
                t()
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Ideas = function(n) {
        function t() {
            var t = n("[data-tab]");
            n(t).click(function() {
                var i = n(this).data("tab");
                t.removeClass("active"), n(this).addClass("active"), n("#ideas").empty(), n(".load").show(), i = i === "all" ? "" : i, n(".load").data({
                    data: {
                        filter: i,
                        page: 0
                    }
                }).click()
            })
        }

        function i() {
            var t = 0;
            n("#tabs li span").on("touchstart click", function(i) {
                t ? setTimeout(function() {
                    n("#tabs .close").trigger("touchstart")
                }, 1e3) : (t = 1, i.stopPropagation(), i.preventDefault(), n("#tabs").addClass("overlay engage"), n("body").addClass("clip"))
            });
            n("#tabs .close").on("touchstart click", function(i) {
                i.preventDefault(), i.stopPropagation(), n("#tabs").removeClass("overlay engage"), n("body").removeClass("clip"), t = 0
            })
        }
        return {
            init: function() {
                t(), i()
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Office = function(n) {
        function o() {
            var t = n("#mosaic .time .analog")[0],
                i = n("#mosaic .time .digital")[0];
            new HUGE.analogClock(t), new HUGE.digitalClock(i)
        }
        var i, r, t, u, f = function() {
                r.on("click", function() {
                    var r = n(this);
                    t = i.find(".selected"), r.hasClass("selected") || (t.removeClass("selected"), t.height(u), r.addClass("selected"), r.height(t.data("store-height")))
                })
            },
            e = function() {
                for (var n, i = 0; i < r.length; i++) n = r.eq(i), n.css("height", "auto"), n.data("store-height", n.height()), n.css("height", u);
                t.height(t.data("store-height"))
            };
        return {
            init: function() {
                i = n(".job-types"), r = i.find("> li"), t = i.find(".selected"), u = 160, f(), e(), o()
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Work = function(n) {
        return {
            init: function() {
                n("header .play.button").one("click", function() {
                    n("#top-overlap").addClass("scroll")
                })
            }
        }
    }(jQuery), HUGE = HUGE || {}, HUGE.Capabilities = function(n) {
        function t() {
            n("#more-services").click(function() {
                n("#load-more").hide(), n(".capability-subs .service").slideDown()
            })
        }
        return {
            init: function() {
                t()
            }
        }
    }(jQuery)