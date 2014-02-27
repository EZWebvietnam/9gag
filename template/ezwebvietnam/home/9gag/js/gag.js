jQuery.noConflict();
(function (b, a) {
    GAG = {};
    a.GAG = GAG;
    GAG.GA = {
        track: function (h, m, f, l) {
            try {
                if (l == undefined) {
                    l = 1
                }
                _gaq.push(["_trackEvent", h, m, f, l]);
                if (a._ga && a._ga instanceof Array) {
                    for (var g = 0; g < a._ga.length; g++) {
                        var j = a._ga[g];
                        _gaq.push([j + "._trackEvent", h, m, f, l])
                    }
                }
            } catch (n) {}
        }
    };
    if (!a.console) {
        a.console = {
            log: function () {}
        }
    }
    shortcut = {
        all_shortcuts: {},
        add: function (m, f, j) {
            var g = {
                type: "keydown",
                propagate: false,
                disable_in_input: false,
                target: document,
                keycode: false
            };
            if (!j) {
                j = g
            } else {
                for (var e in g) {
                    if (typeof j[e] == "undefined") {
                        j[e] = g[e]
                    }
                }
            }
            var h = j.target;
            if (typeof j.target == "string") {
                h = document.getElementById(j.target)
            }
            var l = this;
            m = m.toLowerCase();
            var i = function (r) {
                    r = r || a.event;
                    if (j.disable_in_input) {
                        var u;
                        if (r.target) {
                            u = r.target
                        } else {
                            if (r.srcElement) {
                                u = r.srcElement
                            }
                        }
                        if (u.nodeType == 3) {
                            u = u.parentNode
                        }
                        if (u.tagName == "INPUT" || u.tagName == "TEXTAREA") {
                            return
                        }
                    }
                    if (r.keyCode) {
                        code = r.keyCode
                    } else {
                        if (r.which) {
                            code = r.which
                        }
                    }
                    var s = String.fromCharCode(code);
                    if (code == 188) {
                        s = ","
                    }
                    if (code == 190) {
                        s = "."
                    }
                    var n = m.split("+");
                    var o = 0;
                    var q = {
                        "`": "~",
                        "1": "!",
                        "2": "@",
                        "3": "#",
                        "4": "$",
                        "5": "%",
                        "6": "^",
                        "7": "&",
                        "8": "*",
                        "9": "(",
                        "0": ")",
                        "-": "_",
                        "=": "+",
                        ";": ":",
                        "'": '"',
                        ",": "<",
                        ".": ">",
                        "/": "?",
                        "\\": "|"
                    };
                    var t = {
                        esc: 27,
                        escape: 27,
                        tab: 9,
                        space: 32,
                        "return": 13,
                        enter: 13,
                        backspace: 8,
                        scrolllock: 145,
                        scroll_lock: 145,
                        scroll: 145,
                        capslock: 20,
                        caps_lock: 20,
                        caps: 20,
                        numlock: 144,
                        num_lock: 144,
                        num: 144,
                        pause: 19,
                        "break": 19,
                        insert: 45,
                        home: 36,
                        "delete": 46,
                        end: 35,
                        pageup: 33,
                        page_up: 33,
                        pu: 33,
                        pagedown: 34,
                        page_down: 34,
                        pd: 34,
                        left: 37,
                        up: 38,
                        right: 39,
                        down: 40,
                        f1: 112,
                        f2: 113,
                        f3: 114,
                        f4: 115,
                        f5: 116,
                        f6: 117,
                        f7: 118,
                        f8: 119,
                        f9: 120,
                        f10: 121,
                        f11: 122,
                        f12: 123
                    };
                    var p = {
                        shift: {
                            wanted: false,
                            pressed: false
                        },
                        ctrl: {
                            wanted: false,
                            pressed: false
                        },
                        alt: {
                            wanted: false,
                            pressed: false
                        },
                        meta: {
                            wanted: false,
                            pressed: false
                        }
                    };
                    if (r.ctrlKey) {
                        p.ctrl.pressed = true
                    }
                    if (r.shiftKey) {
                        p.shift.pressed = true
                    }
                    if (r.altKey) {
                        p.alt.pressed = true
                    }
                    if (r.metaKey) {
                        p.meta.pressed = true
                    }
                    for (var v = 0; k = n[v], v < n.length; v++) {
                        if (k == "ctrl" || k == "control") {
                            o++;
                            p.ctrl.wanted = true
                        } else {
                            if (k == "shift") {
                                o++;
                                p.shift.wanted = true
                            } else {
                                if (k == "alt") {
                                    o++;
                                    p.alt.wanted = true
                                } else {
                                    if (k == "meta") {
                                        o++;
                                        p.meta.wanted = true
                                    } else {
                                        if (k.length > 1) {
                                            if (t[k] == code) {
                                                o++
                                            }
                                        } else {
                                            if (j.keycode) {
                                                if (j.keycode == code) {
                                                    o++
                                                }
                                            } else {
                                                if (s.toLowerCase() == k.toLowerCase()) {
                                                    o++
                                                } else {
                                                    if (q[s] && r.shiftKey) {
                                                        s = q[s];
                                                        if (s == k) {
                                                            o++
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    if (o == n.length && p.ctrl.pressed == p.ctrl.wanted && p.shift.pressed == p.shift.wanted && p.alt.pressed == p.alt.wanted && p.meta.pressed == p.meta.wanted) {
                        f(r);
                        if (!j.propagate) {
                            r.cancelBubble = true;
                            r.returnValue = false;
                            if (r.stopPropagation) {
                                r.stopPropagation();
                                r.preventDefault()
                            }
                            return false
                        }
                    }
                };
            this.all_shortcuts[m] = {
                callback: i,
                target: h,
                event: j.type
            };
            if (h.addEventListener) {
                h.addEventListener(j.type, i, false)
            } else {
                if (h.attachEvent) {
                    h.attachEvent("on" + j.type, i)
                } else {
                    h["on" + j.type] = i
                }
            }
        },
        remove: function (e) {
            e = e.toLowerCase();
            var g = this.all_shortcuts[e];
            delete(this.all_shortcuts[e]);
            if (!g) {
                return
            }
            var i = g.event;
            var h = g.target;
            var f = g.callback;
            if (h.detachEvent) {
                h.detachEvent("on" + i, f)
            } else {
                if (h.removeEventListener) {
                    h.removeEventListener(i, f, false)
                } else {
                    h["on" + i] = false
                }
            }
        }
    };
    GAG.Utils = {
        loadScript: function (f, e) {
            (function () {
                var h = document.createElement("script");
                h.type = "text/javascript";
                h.async = true;
                h.src = f;
                h.async = e;
                var g = document.getElementsByTagName("script")[0];
                g.parentNode.insertBefore(h, g)
            })()
        },
        scriptLoaded: function (f) {
            var e = b("script").filter(function () {
                return (b(this).attr("src") == f)
            }).length;
            return (e > 0)
        },
        parseJsonString: function (f) {
            try {
                return b.parseJSON(f)
            } catch (g) {}
            return {}
        },
        formatPostLink: function (e) {
            return "http://" + GAG.Page.getDomain() + "/" + e
        },
        formatProtocolForUrl: function (e) {
           
            if(location.protocol!='')
            {
                return e.replace(/(^.*http:)|(^.*https:)/, location.protocol)
            }
        },
        textSearch: function (h, e, g, f) {
            if (typeof f == "undefined") {
                f = {}
            }
            b(h).keyup(function () {
                var i = b(this).val();
                var j = 0;
                b(e).each(function () {
                    var l = -1;
                    var o = b(this).find(g).text();
                    if ((l = o.search(new RegExp(i, "i"))) < 0) {
                        b(this).hide()
                    } else {
                        b(this).show();
                        if (typeof f.highlight != "undefined" && f.highlight) {
                            var n = o.substr(0, l) + "<strong>";
                            var m = o.substr(l, i.length) + "</strong>" + o.substr(l + i.length, o.length);
                            b(this).find(g).html(n + m)
                        }
                        j++
                    }
                })
            })
        },
        getUrlParam: function (e) {
            return decodeURI((RegExp(e + "=(.+?)(&|$)").exec(location.search) || [, null])[1])
        },
        isCurrentlyFocusedInTypeable: function () {
            var e = b(document.activeElement).prop("tagName").toLowerCase();
            return (e == "input" || e == "textarea")
        },
        formatNumber: function (j, g, m, i) {
            if (typeof g === "undefined") {
                g = 0
            }
            j = (j + "").replace(/[^0-9+\-Ee.]/g, "");
            var f = !isFinite(+j) ? 0 : +j,
                e = !isFinite(+g) ? 0 : Math.abs(g),
                p = (typeof i === "undefined") ? "," : i,
                h = (typeof m === "undefined") ? "." : m,
                o, l = function (s, r) {
                    var q = Math.pow(10, r);
                    return "" + Math.round(s * q) / q
                };
            o = (e ? l(f, e) : "" + Math.round(f)).split(".");
            if (o[0].length > 3) {
                o[0] = o[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, p)
            }
            if ((o[1] || "").length < e) {
                o[1] = o[1] || "";
                o[1] += new Array(e - o[1].length + 1).join("0")
            }
            return o.join(h)
        },
        cookieCheckKey: "cchk",
        isCookieEnabled: function () {
            var e = b.cookie(GAG.Utils.cookieCheckKey);
            if (e != null) {
                return true
            }
            b.cookie(GAG.Utils.cookieCheckKey, 1, {
                duration: 1000
            });
            e = b.cookie(GAG.Utils.cookieCheckKey);
            if (e != null) {
                return true
            }
            return false
        }
    };
    GAG.Validator = {
        isValidLoginKey: function (e) {
            return this.isValidUsername(e) || this.isValidEmail(e)
        },
        isValidUsername: function (e) {
            return e.test("^[0-9a-zA-Z_]{3,15}$")
        },
        isValidEmail: function (e) {
            return (e.match("^([a-zA-Z0-9._-]+)@([a-zA-Z0-9.-]+)\\.([a-zA-Z]{2,4})$") != null)
        },
        isValidFullName: function (e) {
            return (b.trim(e).length > 0)
        },
        isValidPassword: function (f, g, e) {
            var h = true;
            if (g != undefined) {
                if (f.length < g) {
                    h = false
                }
            }
            if (e != undefined) {
                if (f.length > e) {
                    h = false
                }
            }
            if (f.length == 0) {
                h = false
            }
            return h
        },
        isValidGender: function (e) {
            return e == "F" || e == "M"
        },
        MONTH_DAYS: [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
        isValidDateValues: function (g, h, j) {
            var f = g % 400 == 0 || (g % 100 != 0 && g % 4 == 0);
            this.MONTH_DAYS[1] = f ? 29 : 28;
            var i = (j >= 1 && j <= 31) && (h >= 1 && h <= 12) && (g >= 1900);
            var e = j <= this.MONTH_DAYS[h - 1];
            return i && e
        },
        isValidPostLink: function (e) {
            var f = new RegExp("^http(s?)://" + GAG.Page.getDomain() + "/gag/([1-9])([0-9]*)(\\?[^ ]*)?$");
            return e.trim().test(f)
        },
        lookLikeURL: function (e) {
            var f = new RegExp("^http(s?)://");
            return e.trim().test(f)
        }
    };
    GAG.Response = function () {
        this._isSuccess = false;
        this._keys = {};
        this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE, "")
    };
    GAG.Response.Constants = {
        RESPONSE_MESSAGE: "RESPONSE_MESSAGE",
        RESPONSE_CODE: "RESPONSE_CODE",
        RESPONSE_DATA: "RESPONSE_DATA"
    };
    GAG.Response.prototype.succeeded = function (e) {
        this._isSuccess = true;
        this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE, e);
        return this
    };
    GAG.Response.prototype.failed = function (e) {
        this._isSuccess = false;
        this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE, e);
        return this
    };
    GAG.Response.prototype.isSuccess = function () {
        return this._isSuccess
    };
    GAG.Response.prototype.setKey = function (e, f) {
        this._keys[e] = f;
        return this
    };
    GAG.Response.prototype.getKey = function (e) {
        return this._keys[e]
    };
    GAG.Response.prototype.setCode = function (e) {
        this.setKey(GAG.Response.Constants.RESPONSE_CODE, e);
        return this
    };
    GAG.Response.prototype.getCode = function () {
        return this.getKey(GAG.Response.Constants.RESPONSE_CODE)
    };
    GAG.Response.prototype.setData = function (e) {
        this.setKey(GAG.Response.Constants.RESPONSE_DATA, e);
        return this
    };
    GAG.Response.prototype.getData = function () {
        return this.getKey(GAG.Response.Constants.RESPONSE_DATA)
    };
    GAG.Response.prototype.setMessage = function (e) {
        this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE, e);
        return this
    };
    GAG.Response.prototype.getMessage = function () {
        return this.getKey(GAG.Response.Constants.RESPONSE_MESSAGE)
    };
    GAG.BaseObject = function () {
        this._namespace = ""
    };
    GAG.BaseObject.prototype.setNamespace = function (e) {
        this._namespace = e
    };
    GAG.BaseObject.prototype.log = function (f, e) {
        console.log(this._namespace + " " + (e ? e + " " : "") + f)
    };
    GAG.BaseObject.prototype.failed = function (e) {
        return (new GAG.Response()).failed(e)
    };
    GAG.BaseObject.prototype.succeeded = function (e) {
        return (new GAG.Response()).succeeded(e)
    };
    GAG.Model = function () {
        this._base = this
    };
    GAG.Model.prototype = new GAG.BaseObject();
    GAG.Model.prototype.getBase = function () {
        return this._base
    };
    GAG.Model.prototype.init = function () {};
    GAG.Configs = {
        _configs: {},
        init: function () {},
        load: function (e) {
            this._configs = e ? e : {}
        },
        get: function (f) {
            var g = f.split(".");
            var e = this._configs;
            var h = "";
            while (e && g.length > 0) {
                e = e[g.shift()];
                h = e
            }
            return h
        },
        Facebook: {
            init: function () {},
            getAppId: function () {
                return GAG.Configs.get("configs.facebook.app_id")
            },
            getChannelFile: function () {
                var e = GAG.Page.getProtocol();
                return "//" + GAG.Page.getDomain() + "/static/" + e + "_channel.html"
            }
        }
    };
    GAG.State = {
        fbAsyncInited: false
    };
    GAG.Page = {
        _domain: "http://localhost/web9gag",
        _backUrl: "",
        _pageKey: "",
        init: function () {
            this._domain = GAG.Configs.get("page.domain");
            this._backUrl = GAG.Configs.get("page.back_url");
            this._pageKey = GAG.Configs.get("page.page_key")
        },
        getProtocol: function () {
            return ("https:" == document.location.protocol) ? "https" : "http"
        },
        getDomain: function () {
            return this._domain
        },
        getCookieOptions: function () {
            return {
                path: "/",
                expires: 365 * 20
            }
        },
        getPageKey: function () {
            return this._pageKey
        },
        load: function (e) {
            a.location = e
        },
        preloadImage: function (g) {
            var f = new Image();
            f.src = g;
            var e = document.getElementById("tmp-img");
            if (e) {
                e.appendChild(f)
            }
        },
        getBackUrl: function () {
            return this._backUrl
        },
        KEYS: {
            NEW_VOTE_PAGE: "v",
            POST_PAGE: "post",
            LANDING_PAGE: "landing",
            PROFILE_PAGE: "profile",
            MEMBER_PAGE: "member",
            HOT_PAGE: "hot",
            TRENDING_PAGE: "trending",
            VOTE_PAGE: "vote",
            INVITE_FACEBOOK_PAGE: "invite",
            CONTACT_PAGE: "contact",
            SIGNUP_PAGE: "signup"
        },
        isNewVotePage: function () {
            return this._pageKey == this.KEYS.NEW_VOTE_PAGE
        },
        isPostPage: function () {
            return this._pageKey == this.KEYS.POST_PAGE
        },
        isLandingPage: function () {
            return this._pageKey == this.KEYS.LANDING_PAGE
        },
        isListingPage: function () {
            return (jQuery.inArray(this._pageKey, [this.KEYS.HOT_PAGE, this.KEYS.TRENDING_PAGE, this.KEYS.VOTE_PAGE]) >= 0) ? true : false
        },
        isProfilePage: function () {
            return this._pageKey == this.KEYS.PROFILE_PAGE
        },
        isMemberPage: function () {
            return this._pageKey == this.KEYS.MEMBER_PAGE
        },
        isInviteFacebookPage: function () {
            return this._pageKey == this.KEYS.INVITE_FACEBOOK_PAGE
        },
        isContactPage: function () {
            return this._pageKey == this.KEYS.CONTACT_PAGE
        },
        isSignupPage: function () {
            return this._pageKey == this.KEYS.SIGNUP_PAGE
        }
    };
    GAG.Facebook = {
        _xfbmlRenderItems: [],
        _fbInitedCallbacks: [],
        _getFriendsCallbacks: [],
        init: function () {},
        asyncInit: function () {
            GAG.State.fbAsyncInited = true;
            this.initApp();
            this.executeRenderQueue();
            this.getFriends()
        },
        initApp: function () {
            FB.init({
                appId: GAG.Configs.Facebook.getAppId(),
                channelUrl: GAG.Configs.Facebook.getChannelFile(),
                xfbml: false,
                status: true,
                cookie: true
            });
            this._checkFacebookLoginStatus()
        },
        addInitCallback: function (f, e) {
            GAG.Facebook._fbInitedCallbacks.push({
                callbackType: f,
                callback: e
            })
        },
        _executeFbInitedCallbacks: function (g) {
            for (var e = 0; e < this._fbInitedCallbacks.length; e++) {
                var f = this._fbInitedCallbacks[e];
                if ((g.indexOf(f.callbackType) !== -1) && (typeof f.callback == "function") && (!this._fbInitedCallbacks[e]["executed"])) {
                    this._fbInitedCallbacks[e]["executed"] = true;
                    f.callback()
                }
            }
        },
        sessionChangeHandler: function (e) {
            if (!e) {
                return
            }
            if (e.status === "connected") {
                if (e.authResponse) {
                    GAG.Facebook.autoLogin();
                    GAG.Facebook._executeFbInitedCallbacks("connected,logged-in,all")
                }
            } else {
                if (e.status === "not_authorized") {
                    GAG.Facebook._executeFbInitedCallbacks("logged-in,all")
                } else {
                    GAG.Facebook._executeFbInitedCallbacks("logged-out,all")
                }
            }
        },
        _checkFacebookLoginStatus: function () {
            FB.getLoginStatus(GAG.Facebook.sessionChangeHandler);
            FB.Event.subscribe("auth.authResponseChange", GAG.Facebook.sessionChangeHandler)
        },
        executeRenderQueue: function () {
            for (var f = 0; f < this._xfbmlRenderItems.length; f++) {
                var e = this._xfbmlRenderItems[f];
                this.parseElement(e.elementId, e.callback)
            }
        },
        renderElement: function (e, f) {
            if (GAG.State.fbAsyncInited) {
                this.parseElement(e, f)
            } else {
                this._xfbmlRenderItems.push({
                    elementId: e,
                    callback: f
                })
            }
        },
        parseElement: function (f, i) {
            var g = document.getElementById(f);
            if (!g) {
                return
            }
            try {
                if (i) {
                    FB.XFBML.parse(g, i)
                } else {
                    FB.XFBML.parse(g)
                }
            } catch (h) {}
        },
        login: function (e) {
            FB.login(function (f) {
                if (f.authResponse) {
                    if (typeof (e) == "function") {
                        e.call(f)
                    } else {
                        alert("it is not a callback")
                    }
                }
                return f.authResponse
            })
        },
        autoConnectKey: "auto_log",
        autoConnectDuration: {
            path: "/",
            duration: 365 * 20
        },
        autoLogin: function () {
            if (GAG.User.isLoggedIn()) {
                return
            }
            if (!GAG.Utils.isCookieEnabled()) {
                return
            }
            var f = b.cookie(GAG.Facebook.autoConnectKey);
            var h = {
                a: false,
                d: false,
                lo: false,
                dl: false
            };
            if (f || f === false) {
                h = JSON.parse(f)
            }
            if (h != null) {
                if (h.a) {
                    return
                }
                if (!h.dl && (h.lo || h.d)) {
                    return
                }
            }
            GAG.GA.track("Facebook-Login", "Auto", "");
            h.a = true;
            var e = JSON.stringify(h);
            var g = b.cookie(GAG.Facebook.autoConnectKey, e, GAG.Facebook.autoConnectDuration);
            GAG.Facebook.Connect.autoLogin(location.href)
        },
        openSendDialog: function (g, f, h, i, e) {
            FB.ui({
                method: "send",
                name: f,
                to: g,
                link: h,
                desciption: i,
                picture: e
            })
        },
        getFriends: function () {
            if (GAG.Facebook._getFriendsCallbacks.length > 0) {
                FB.getLoginStatus(function (g) {
                    if (g.status === "connected") {
                        for (var h = 0; h < GAG.Facebook._getFriendsCallbacks.length; h++) {
                            try {
                                FB.api("/me/friends", GAG.Facebook._getFriendsCallbacks[h])
                            } catch (j) {}
                        }
                        GAG.Facebook._getFriendsCallbacks = []
                    } else {
                        var f = GAG.Facebook.login(GAG.Facebook.getFriends)
                    }
                })
            }
        },
        addGetFriendsCallback: function (e) {
            this._getFriendsCallbacks.push(e)
        },
        getProfilePic: function (f) {
            var e = "https://graph.facebook.com/{{fbid}}/picture?type=square";
            return e.replace("{{fbid}}", f)
        },
        renderComment: function (e, i, g) {
            var h = this.Plugins.Comments.getElement(g);
            var f = b("#" + e).append(h);
            this.renderElement(e, i)
        },
        renderLike: function (e, i, g) {
            var h = this.Plugins.Like.getElement(g);
            var f = b("#" + e).html("").append(h);
            this.renderElement(e, i)
        },
        Plugins: {
            Comments: {
                getElement: function (f) {
                    var e = {
                        "class": "fb-comments",
                        "data-href": "",
                        "data-num-posts": 5,
                        "data-width": 470
                    };
                    f = b.extend(e, f);
                    var h = b("<div/>");
                    for (var g in f) {
                        h.attr(g, f[g])
                    }
                    return h
                }
            },
            Like: {
                getElement: function (f) {
                    var e = {
                        "class": "fb-like",
                        "data-href": "",
                        "data-layout": "button_count",
                        "data-show-faces": "false",
                        "data-font": "arial",
                        "data-width": 300
                    };
                    f = b.extend(e, f);
                    var h = b("<div/>");
                    for (var g in f) {
                        h.attr(g, f[g])
                    }
                    return h
                }
            }
        },
        Connect: {
            FB_CONNECT_CALLBACK_URL: "/connect/facebook-callback",
            INIT_FAILURE_MESSAGE: "Facebook Connect is not enabled, please check if there's any browser plugin blocking the function.",
            _additionalParams: {},
            addParam: function (e, f) {
                this._additionalParams[e] = f
            },
            _getConnectParamsString: function () {
                var f = "";
                var e = 0;
                for (k in this._additionalParams) {
                    f += (e == 0 ? "" : "&") + k + "=" + encodeURIComponent(this._additionalParams[k]);
                    e++
                }
                return f
            },
            _getConnectUrl: function (f) {
                var e = GAG.Facebook.Connect.FB_CONNECT_CALLBACK_URL;
                e += "?" + this._getConnectParamsString();
                return e
            },
            autoLogin: function (h) {
                try {
                    if (h == undefined || h == null) {
                        h = "/"
                    }
                    var f = "https://" + GAG.Page.getDomain() + "/connect/auto-login";
                    var g = "next=" + encodeURIComponent(h + "&" + this._getConnectParamsString());
                    f += "?" + g;
                    a.location = f
                } catch (i) {
                    if (b.browser.msie && parseInt(b.browser.version, 10) <= 8) {} else {}
                    return
                }
            },
            connect: function (h) {
                try {
                    if (h == undefined || h == null) {
                        h = "/"
                    }
                    var f = "https://" + GAG.Page.getDomain() + "/connect/facebook";
                    var g = "next=" + encodeURIComponent(h + "&" + this._getConnectParamsString());
                    f += "?" + g;
                    a.location = f
                } catch (i) {
                    if (b.browser.msie && parseInt(b.browser.version, 10) <= 8) {} else {}
                    return
                }
            }
        }
    };
    a.fbAsyncInit = function () {
        GAG.Facebook.asyncInit()
    };
    GAG.GPlus = {
        btnClicked: false,
        _asyncInited: false,
        _renderQueue: [],
        init: function () {
            this._checkAsyncInit()
        },
        _checkAsyncInit: function () {
            if (typeof gapi !== "undefined") {
                this.asyncInit()
            } else {
                setTimeout(b.proxy(this._checkAsyncInit, this), 100)
            }
        },
        asyncInit: function () {
            this._asyncInited = true;
            this._executeQueue()
        },
        renderButton: function (e, g) {
            var f = this._getRenderOptions();
            f.callback = g;
            if (this._asyncInited) {
                gapi.signin.render(e, f)
            } else {
                this._renderQueue.push({
                    domId: e,
                    options: f
                })
            }
        },
        _executeQueue: function () {
            while (this._renderQueue.length > 0) {
                var e = this._renderQueue.shift();
                gapi.signin.render(e.domId, e.options)
            }
        },
        _getRenderOptions: function () {
            var e = {
                clientid: GAG.Configs.get("configs.gplus.client_id"),
                cookiepolicy: "single_host_origin",
                accesstype: "offline",
                scope: "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
            };
            var f = GAG.Configs.get("configs.gplus.app_package_name");
            if (f) {
                e.apppackagename = f
            }
            return e
        }
    };
    a.gplusRender = function () {};
    GAG.User = b.extend({}, new GAG.Model(), (function () {
        var e = {
            _isLoggedIn: null,
            _user: null
        };
        return {
            init: function () {
                e._user = GAG.Configs.get("user")
            },
            isLoggedIn: function (h, g) {
                if (e._isLoggedIn === null) {
                    e._isLoggedIn = this.getUsername().length > 0
                }
                if (h && !e._isLoggedIn) {
                    var f = "https://" + GAG.Page.getDomain() + "/login";
                    if (g) {
                        f += "?next=" + g
                    }
                    GAG.Page.load(f)
                }
                return e._isLoggedIn
            },
            getUsername: function () {
                return e._user && e._user.username ? e._user.username : ""
            }
        }
    })());
    GAG.Login = b.extend({}, new GAG.Model(), {
        userId: ""
    });
    GAG.Entry = (function () {
        var e = {
            API: {
                REPORT_ENTRY_URI: "/report-post"
            },
            init: function () {},
            _isRequesting: false,
            report: function (j, g, h, l, f) {
                if (!GAG.User.isLoggedIn(true, GAG.Page.getBackUrl())) {
                    return
                }
                if (e._isRequesting) {
                    return
                }
                var m = {
                    entryId: j,
                    type: g,
                    link: h
                };
                var i = e.API.REPORT_ENTRY_URI;
                b.ajax({
                    type: "POST",
                    url: i,
                    data: m,
                    beforeSend: function () {
                        GAG.Entry._isRequesting = true
                    },
                    complete: function () {
                        GAG.Entry._isRequesting = false
                    },
                    success: function (o) {
                        var n = GAG.Utils.parseJsonString(o);
                        if (n.okay) {
                            l(j)
                        } else {
                            f(j)
                        }
                    },
                    error: function (n) {
                        f(j)
                    }
                })
            }
        };
        return {
            init: e.init,
            report: e.report
        }
    })();
    GAG.Vote = b.extend({}, new GAG.Model(), {
        API: {
            URL_LIKE: "/vote/like",
            URL_DISLIKE: "/vote/dislike",
            URL_UNLIKE: "/vote/unlike"
        },
        _requests: {},
        _isRequesting: false,
        init: function () {},
        _submitRequest: function (f, h, i, e) {
            if (h === undefined) {
                return
            }
            if (this._isRequesting) {}
            var j = {
                id: h
            };
            var g = true;
            b.ajax({
                type: "POST",
                url: f,
                data: j,
                beforeSend: function () {
                    GAG.Vote._isRequesting = true;
                    if (typeof i == "function") {
                        i(h)
                    }
                },
                complete: function () {
                    GAG.Vote._isRequesting = false
                },
                success: function (m) {
                    var l = GAG.Utils.parseJsonString(m);
                    if (l.id && l.msg) {
                        if (typeof i == "function") {
                            i(h)
                        }
                    } else {
                        if (typeof e == "function") {
                            e(h)
                        }
                    }
                },
                error: function (l) {
                    if (typeof e == "function") {
                        e(h)
                    }
                }
            })
        },
        like: function (f, g, e) {
            this._submitRequest(this.API.URL_LIKE, f, g, e)
        },
        unlike: function (f, g, e) {
            this._submitRequest(this.API.URL_UNLIKE, f, g, e)
        },
        dislike: function (f, g, e) {
            this._submitRequest(this.API.URL_DISLIKE, f, g, e)
        }
    });
    GAG.Track = {
        tuvCookie: "_tuv",
        tuvCookieMax: 100,
        baseUrl: "http://t.9gag.com",
        imageUrl: "/img.gif",
        _entryIDsBuffer: {},
        init: function () {
            var e = GAG.Configs.get("configs.t.domain");
            if (e) {
                GAG.Track.baseUrl = e
            }
        },
        _saveHistory: function (g, f) {
            var e = f.join(",");
            b.cookie(g, e, {
                expires: 10000,
                path: "/",
                domain: GAG.Configs.get("page.cookie_domain")
            })
        },
        _checkUnique: function (i, f, e) {
            if (e.length > 32) {
                var e = b.md5(e)
            }
            if (GAG.Track._entryIDsBuffer[e]) {
                return false
            } else {
                GAG.Track._entryIDsBuffer[e] = 1
            }
            var g = b.cookie(i);
            var h = [];
            if (g) {
                h = g.split(",")
            }
            if (h.indexOf(e) == -1) {
                if (h.length >= f) {
                    h.shift()
                }
                h.push(e);
                GAG.Track._saveHistory(i, h);
                return true
            } else {
                return false
            }
            return true
        },
        uniqueViewed: function (g) {
            var l = "unique-viewed";
            if (typeof g.entry == "undefined") {
                return
            }
            var f = g.entry + "" || "";
            var j = f.split(",");
            var e = [];
            for (var h = 0; h < j.length; h++) {
                if (GAG.Track._checkUnique(GAG.Track.tuvCookie, GAG.Track.tuvCookieMax, j[h])) {
                    e.push(j[h])
                }
            }
            if (j.length > 0 && e.length > 0) {
                g.entry = e.join(",");
                GAG.Track.event(l, "v", g)
            }
        },
        read: function (e) {
            b.ajax({
                type: "POST",
                url: "/read/ids",
                data: {
                    ids: e.join(",")
                },
                dataType: "json",
                success: function (f) {},
                error: function (f) {}
            })
        },
        markReadInCookie: function (e) {
            GAG.Track._checkUnique("viewed_ids", GAG.Track.tuvCookieMax, e)
        },
        event: function (j, i, h) {
            var f = h.user ? h.user : GAG.Configs.get("user.id");
            if (!f) {
                f = ""
            }
            var l = {
                action: j,
                value: i,
                ref: "",
                label: (typeof h.label === "undefined") ? "" : h.label,
                labelValue: (typeof h.labelValue === "undefined") ? "" : h.labelValue,
                platform: (typeof h.platform === "undefined") ? "" : h.platform,
                entry: (typeof h.entry === "undefined") ? "" : h.entry,
                user: f,
                view: (typeof h.view === "undefined") ? "" : h.view
            };
            l.ref = GAG.Track._getQueryStringParam("ref");
            var g = GAG.Track._formatUrl(l);
            var e = new Image();
            e.src = g
        },
        _getUrl: function () {
            return location.href
        },
        _getReferrer: function () {
            return document.referrer
        },
        _getTime: function () {
            var e = new Date();
            var f = new Date(e.getUTCFullYear(), e.getUTCMonth(), e.getUTCDate(), e.getUTCHours(), e.getUTCMinutes(), e.getUTCSeconds());
            var g = Math.round((f).getTime() / 1000);
            return g
        },
        _getQueryStringParam: function (h) {
            var f = a.location.href;
            var e = f.split(/[\?&]+/);
            for (var g = 0; g < e.length; g++) {
                var j = e[g].split("=");
                if (j[0] == h) {
                    return j[1]
                }
            }
            return ""
        },
        _formatUrl: function (g) {
            var e = GAG.Track.baseUrl + GAG.Track.imageUrl;
            var j = "";
            var h = [];
            if (g) {
                if (g.action != undefined && g.action != null) {
                    h.push("a=" + encodeURIComponent(g.action))
                }
                if (g.value != undefined && g.value != null) {
                    h.push("v=" + encodeURIComponent(g.value))
                }
                if (g.ref != undefined && g.ref != null) {
                    h.push("ref=" + encodeURIComponent(g.ref))
                }
                if (g.label != undefined && g.label != null) {
                    h.push("lbl=" + encodeURIComponent(g.label))
                }
                if (g.labelValue != undefined && g.labelValue != null) {
                    h.push("lblv=" + encodeURIComponent(g.labelValue))
                }
                if (g.platform != undefined && g.platform != null) {
                    h.push("p=" + encodeURIComponent(g.platform))
                }
                if (g.entry != undefined && g.entry != null) {
                    h.push("e=" + encodeURIComponent(g.entry))
                }
                if (g.user != undefined && g.user != null) {
                    h.push("u=" + encodeURIComponent(g.user))
                }
                if (g.view != undefined && g.view != null) {
                    h.push("w=" + encodeURIComponent(g.view))
                }
            }
            h.push("url=" + encodeURIComponent(GAG.Track._getUrl()));
            h.push("referrer=" + encodeURIComponent(GAG.Track._getReferrer()));
            h.push("t=" + encodeURIComponent(GAG.Track._getTime()));
            for (var f = 0; f < h.length; f++) {
                j += h[f] + "&"
            }
            e += "?" + j;
            return e
        }
    };
    GAG.Controller = function () {
        this._base = this
    };
    GAG.Controller.prototype = new GAG.BaseObject();
    GAG.Controller.prototype.getBase = function () {
        return this._base
    };
    GAG.Controller.prototype.init = function () {};
    GAG.Controller.prototype.onLoad = function () {};
    GAG.Controller.prototype.onResize = function () {};
    GAG.Controller.prototype.onScroll = function () {};
    GAG.Controller.prototype.onDomReady = function () {};
    GAG.CacheController = b.extend({}, new GAG.Controller(), {
        _dataMap: {},
        _updateQueue: [],
        _entryUpdateQueue: [],
        init: function () {
            this._dataMap.entryInfo = {}
        },
        keys: {
            ENTRY_LIST: "entryList",
            ENTRY_INFO: "entryInfo",
            FEATURED_LIST: "featuredList",
            FEATURED_INFO: "featuredInfo",
        },
        getValue: function (e) {
            return this._dataMap[e]
        },
        setValue: function (f, e) {
            this._dataMap[f] = e
        },
        invalidate: function (e) {
            delete this._dataMap[e]
        },
        reset: function () {
            this._dataMap = {}
        },
        notifyForCacheUpdate: function (e) {
            this._updateQueue.push(e)
        },
        isUpdateNeeded: function (e) {
            return (b.inArray(e, this._updateQueue) >= 0)
        },
        notifyForCacheUpdateCompleted: function (f) {
            var e = b.inArray(f, this._updateQueue);
            if (e >= 0) {
                this._updateQueue.splice(e, 1)
            }
        },
        setList: function (f, e) {
            if (f instanceof Array) {
                this._dataMap[e] = f
            }
        },
        getList: function (e) {
            if (!this._dataMap[e]) {
                this._dataMap[e] = []
            }
            return this._dataMap[e]
        },
        addItemsToList: function (e, g) {
            for (var f = 0; f < e.length; f++) {
                if (b.inArray(e[f], this.getList(g)) === false) {
                    this.getList(g).push(e[f])
                }
            }
        },
        setItemInfoForList: function (g, e, f) {
            this.getList(f)[g] = e
        },
        getItemInfoForList: function (f, e) {
            if (!this.getList(e)) {
                this.getList(e)[f] = {}
            }
            return this.getList(e)[f]
        },
        getItemInfoForKeyInList: function (g, e, f) {
            if (this.getItemInfoForList(g, f)) {
                return this.getItemInfoForList(g, f)[e]
            } else {
                return null
            }
        },
        handlers: {
            getEntryInfoFromDOM: function (f) {
                var e = {
                    offset: b(f).offset(),
                    height: b(f).height(),
                    outerHeight: b(f).outerHeight(),
                };
                return e
            },
            getFeaturedItemInfoFromDOM: function (f) {
                var e = {
                    top: b(f).offset().top,
                    height: b(f).height(),
                };
                return e
            },
            featuredItemHandler: {
                setFeaturedList: function (f) {
                    var e = GAG.CacheController;
                    e.setList(f, e.keys.FEATURED_LIST)
                },
                getFeaturedList: function () {
                    var e = GAG.CacheController;
                    return e.getList(e.keys.FEATURED_LIST)
                },
                addFeaturedItemsToList: function (f) {
                    var e = GAG.CacheController;
                    e.addItemsToList(f, e.keys.FEATURED_LIST)
                },
                setFeaturedItemInfo: function (g, e) {
                    var f = GAG.CacheController;
                    f.setItemInfoForList(g, e, f.keys.FEATURED_INFO)
                },
                getFeaturedItemInfo: function (f) {
                    var e = GAG.CacheController;
                    return e.getItemInfoForList(f, e.keys.FEATURED_INFO)
                },
                getFeaturedItemInfoForKey: function (g, f) {
                    var e = GAG.CacheController;
                    return e.getItemInfoForKeyInList(g, f, e.keys.FEATURED_INFO)
                },
            },
            entryHandler: {
                _self: GAG.CacheController,
                setEntryList: function (f) {
                    var e = GAG.CacheController;
                    e.setList(f, e.keys.ENTRY_LIST)
                },
                getEntryList: function () {
                    var e = GAG.CacheController;
                    return e.getList(e.keys.ENTRY_LIST)
                },
                addEntriesToList: function (e) {
                    var f = GAG.CacheController;
                    f.addItemsToList(e, f.keys.ENTRY_LIST)
                },
                setEntryInfo: function (g, e) {
                    var f = GAG.CacheController;
                    f.setItemInfoForList(g, e, f.keys.ENTRY_INFO)
                },
                getEntryInfo: function (f) {
                    var e = GAG.CacheController;
                    return e.getItemInfoForList(f, e.keys.ENTRY_INFO)
                },
                getEntryInfoForKey: function (g, f) {
                    var e = GAG.CacheController;
                    return e.getItemInfoForKeyInList(g, f, e.keys.ENTRY_INFO)
                },
            },
        },
        getFeaturedItemHandler: function () {
            var e = GAG.CacheController;
            return e.handlers.featuredItemHandler
        },
        getEntryHandler: function () {
            var e = GAG.CacheController;
            return e.handlers.entryHandler
        },
        parseEntryInfo: function () {
            var e = GAG.CacheController;
            var f = [];
            b(GAG.ListController.selectors.ENTRY_CONTAINER).each(function () {
                var h = b(this).data("entry-id");
                f.push(h);
                var g = e.handlers.getEntryInfoFromDOM(this);
                e.handlers.entryHandler.setEntryInfo(h, g)
            });
            e.handlers.entryHandler.setEntryList(f)
        },
        updateEntryInfoForEntryIds: function (g) {
            for (var f = 0; f < g.length; f++) {
                var e = b("#jsid-entry-entity-" + g[f]);
                if (e && e.length == 1) {
                    this.handlers.getEntryInfoFromDOM(e)
                }
            }
        },
    });
    GAG.AdsController = b.extend({}, new GAG.Controller(), {
        _ADS_TAG_HTML: "",
        _mode: "",
        _modeAvailable: ["", "nsfw"],
        _postSeries: 0,
        init: function () {
            var e = b("#gag-ads-init-mode");
            if (e.length > 0) {
                this._mode = e.data("mode");
                e.remove()
            }
            this.renderAllAds()
        },
        selectors: {
            ADS_CONTAINER: ".badge-gag-ads-container",
            ADS_DATA_TAG: "gag-ads",
        },
        handlers: {
            renderAds: function (f, g) {
                var e = GAG.AdsController;
                b(f + " " + e.selectors.ADS_CONTAINER).each(function () {
                    var h = b(this).data(e.selectors.ADS_DATA_TAG);
                    if (g && b(this).html().length > 0) {
                        return
                    }
                    if (h && h.length > 0) {
                        b(this).html(e.handlers.getAdsTagHTML(h))
                    }
                })
            },
            getAdsTagHTML: function (g) {
                var f = GAG.AdsController;
                var j = f._mode;
                var h = 300;
                var e = 250;
                if (j.length > 0) {
                    j += "-"
                }
                var i = g.match(/\s*(\d+)[x](\d+)\s*/);
                if (i && i.length > 2) {
                    h = i[1];
                    e = i[2]
                }
                return '<iframe width="' + h + '" height="' + e + '" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="/static/ads/googleAds.html?tag=' + j + g + '"></iframe>'
            }
        },
        getMode: function () {
            var e = GAG.AdsController;
            return e._mode
        },
        setMode: function (f) {
            var e = GAG.AdsController;
            if (e._modeAvailable.indexOf(f) >= 0 && e._mode != f) {
                e._mode = f;
                e.renderAllAds()
            }
        },
        renderAllAds: function () {
            var e = GAG.AdsController;
            e.handlers.renderAds("")
        },
        notifyForAdsUpdate: function (e) {
            var f = GAG.AdsController;
            f.handlers.renderAds(e)
        },
        notifyForAdsInsert: function (e) {
            var f = GAG.AdsController;
            f.handlers.renderAds(e, true)
        },
    });
    GAG.FacebookController = b.extend({}, new GAG.Controller(), (function () {
        var e = {
            BADGE_FACEBOOK_RENDER: ".badge_facebook_render",
            FB_RENDER_PREFIX: "jsid-fb-render",
            _pushFbElementsToQueue: function () {
                b(e.BADGE_FACEBOOK_RENDER).each(function (f, g) {
                    var h = b(g).attr("id");
                    if (!h) {
                        h = GAG.PageController.getUniqueDomId(GAG.FacebookController.FB_RENDER_PREFIX);
                        b(g).attr("id", h)
                    }
                    GAG.Facebook.renderElement(h)
                })
            },
            _bindAddToTimelineButtons: function () {
                b(".badge-add-fb-timeline").on("click", function (h) {
                    h.preventDefault();
                    var f = b(this).hasClass("switch_on");
                    if (f) {
                        GAG.FacebookController.enableFbTimelineAck(false);
                        return
                    }
                    var g = "email,publish_actions";
                    try {
                        FB.login(function (i) {
                            var j = i.authResponse ? true : false;
                            GAG.FacebookController.enableFbTimelineAck(j)
                        }, {
                            scope: g
                        })
                    } catch (h) {}
                })
            }
        };
        return {
            init: function () {
                e._pushFbElementsToQueue();
                e._bindAddToTimelineButtons()
            },
            enableFbTimelineAck: function (f) {
                var g = "/member/facebook-timeline";
                var h = {
                    on: f ? "on" : "off",
                    platform: "facebook"
                };
                if (!f) {
                    g = "/connect/unlink"
                }
                b.ajax({
                    type: "POST",
                    dataType: "json",
                    url: g,
                    data: h,
                    success: function (i) {
                        a.location.reload()
                    }
                })
            }
        }
    })());
    GAG.FeaturedController = b.extend({}, new GAG.Controller(), {
        _isLoading: false,
        _page: 1,
        _loadCountMax: 20,
        _loadedCount: 1,
        _loadedItemCount: 0,
        _noMoreItem: false,
        _loadMorePending: true,
        _initialPosition: 0,
        _endPoint: "/9gag/",
        init: function () {
            this._endPoint ="/9gag/";
            
            this._endPoint = GAG.Utils.formatProtocolForUrl(this._endPoint);
            this.bindScrollEvents();
            b.proxy(this.handlers.loadMoreScrollHandler, this)()
        },
        selectors: {
            SIDEBAR_CONTAINER: "#sidebar-content",
            SIDEBAR_ITEMS: ".badge-featured-item",
            SIDEBAR_ITEM_PREFIX: "#featured-item-",
            ITEM_CONTAINER: "#jsid-featured-item-container",
            FEATURED_AD: "#jsid-featured-sidebar-ad",
            DIV_GET_THE_APP: ".get-the-app",
            LOADING_DIALOG: "#block-feature-cover .loading",
            SIDEBAR_FOOTER: "#sidebar .footer",
            POST_ENTRY_INFO: ".badge-entry-info",
            MAIN_WRAPPER: ".main-wrap",
            FEATURED_TAIL: "#jsid-featured-sidebar-tail",
            LOADING_SPINNER: ".block-feature-cover .loading",
        },
        handlers: {
            windowScrollHandler: function () {
                b.proxy(this.handlers.loadMoreScrollHandler, this)()
            },
            resetSidebarToTop: function () {
                var e = GAG.FeaturedController;
                var f = b(e.selectors.SIDEBAR_CONTAINER);
                f.removeClass("sticky");
                f.css({
                    position: "",
                    top: ""
                })
            },
            loadMoreScrollHandler: function () {
                if (b(GAG.FeaturedController.selectors.ITEM_CONTAINER).length > 0) {
                    var q = GAG.FeaturedController;
                    var j = b(a).height() - GAG.PageController._topStickyElementHeight;
                    var h = GAG.PageController.getWindowEffectiveScrollTop();
                    var r = h + j;
                    var o = b(q.selectors.SIDEBAR_CONTAINER);
                    var m = o.offset().top + o.height();
                    var s = m - r;
                    var f = b(q.selectors.FEATURED_TAIL);
                    var l = 50;
                    var i = +f.height() - l;
                    var g = b(".badge-page").offset().top + o.height() - i - (!GAG.Page.isPostPage() ? GAG.PageController._topStickyElementHeight : 0);
                    var p = b(".badge-page").offset().top + b(".badge-page").height() + (j - i);
                    var n = b(q.selectors.MAIN_WRAPPER).height();
                    var e = n > o.height() && j < o.height() && GAG.FeaturedController._noMoreItem && !o.hasClass("sticky");
                    if (h >= g && r <= p && e) {
                        o.css({
                            position: "fixed",
                            top: (-g + (GAG.Page.isPostPage() ? 46 : 49) + b(".badge-page").offset().top) + "px",
                            width: "inherit"
                        });
                        o.addClass("sticky")
                    } else {
                        if (h < g && o.hasClass("sticky")) {
                            q.handlers.resetSidebarToTop();
                            GAG.CacheController.notifyForCacheUpdate(GAG.CacheController.keys.FEATURED_LIST)
                        } else {
                            if (r > p && o.hasClass("sticky")) {
                                o.css({
                                    position: "absolute",
                                    top: (b(".badge-page").offset().top + b(".badge-page").height() - o.height() - 90) + "px",
                                    width: "inherit"
                                });
                                o.removeClass("sticky")
                            }
                        }
                    }
                    if (s < j * 3) {
                       
                    }
                }
            },
            loadMoreAjaxCallbackHandler: function (h) {
                if (!h || !h.okay) {
                    return
                }
                var r = GAG.FeaturedController;
                if (!h.result || h.result.length == 0) {
                    r._noMoreItem = true
                }
                var e = b(r.selectors.ITEM_CONTAINER);
                var m = e.data("ads-position") + "";
                var l = m.split(",");
                var f = e.data("list-key");
                var n = '<section class="badge-block-ad block-ad">                <div class="badge-gag-ads-container img-container" data-gag-ads="' + (f == "post" ? f : "list") + '-featured-sidebar-300x250"></div>            </section>';
                var j = 0;
                var p = "";
                for (var g = 0; g < h.result.length; g++) {
                    var q = h.result[g];
                    if (b.inArray(g + "", l) >= 0) {
                        p += n;
                        j++
                    }
                    var o = '<li class="badge-featured-item" data-item-id="' + q.itemId + '" id="featured-item-' + q.itemId + '">                    <div class="img-container" data-item-id="' + q.itemId + '">                        <a href="' + q.url + '?ref=fsidebar" class="badge-evt" target="_blank" data-evt="Featured-Sidebar,' + f + "ImageClicked," + q.url + '">                        <img src="' + q.imageURL + '" /></a>                    </div>                    <div class="info-container" data-item-id="' + q.itemId + '">                        <h3><a href="' + q.url + '?ref=fsidebar" class="badge-evt" target="_blank" data-evt="Featured-Sidebar,' + f + "TitleClicked," + q.url + '">' + q.title + "</a></h3>                    </div>                </li>";
                    if (b("#featured-item-" + q.itemId).length == 0) {
                        p += o
                    }
                    r._loadedItemCount++
                }
                if (p.length > 0) {
                    e.append(p)
                }
                if (j > 0) {
                    e.ready(function () {
                        GAG.AdsController.notifyForAdsInsert(r.selectors.SIDEBAR_CONTAINER)
                    })
                }
                GAG.CacheController.notifyForCacheUpdate(GAG.CacheController.keys.FEATURED_LIST);
                r._page++;
                r._loadedItemCount++;
                r._isLoading = false;
                b(r.selectors.LOADING_SPINNER).addClass("hide");
                b.proxy(r.handlers.loadMoreScrollHandler(), r)
            }
        },
        bindScrollEvents: function () {
            b(a).on("scroll resize", null, null, b.proxy(this.handlers.windowScrollHandler, this))
        }
    });
    GAG.GPlusController = b.extend({}, new GAG.Controller(), {
        init: function () {
            this._bindElements()
        },
        _bindProfile: function (e) {
            if (!GAG.GPlus.btnClicked) {
                return
            }
            if (e.access_token) {
                var f = e.code;
                var g = {
                    platform: "google-plus"
                };
                if (f) {
                    g.code = f
                }
                b.ajax({
                    url: "/connect/social",
                    type: "POST",
                    dataType: "json",
                    data: g,
                    success: function (h) {
                        if (h && h.okay) {
                            a.location.reload()
                        }
                    },
                    error: function (h) {
                        console.log(h)
                    }
                })
            }
        },
        _doLogin: function (f) {
            if (!GAG.GPlus.btnClicked) {
                return
            }
            if (f.access_token) {
                var g = f.code;
                var e = "https://" + GAG.Page.getDomain() + "/connect/google-plus-callback?code=" + encodeURIComponent(g);
                a.location.href = e
            }
        },
        _bindElements: function () {
            GAG.GPlus.renderButton("jsid-gplus-btn-settings", this._bindProfile);
            b(".badge-gplus-connect").each(function (e, g) {
                var f = b(g);
                var h = f.attr("id");
                if (!h) {
                    h = GAG.PageController.getUniqueDomId("gplus");
                    f.attr("id", h)
                }
                GAG.GPlus.renderButton(h, GAG.GPlusController._doLogin)
            })
        }
    });
    GAG.ShareController = b.extend({}, new GAG.Controller(), (function () {
        var e = {
            selectors: {
                CLICK_EVENT_SELECTOR_DELEGATE: "#container"
            },
            _openFacebookShareDialog: function (i) {
                i.preventDefault();
                var g = b(this);
                var h = g.attr("data-share");
                var f = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(h);
                e._openWindow(f)
            },
            _openTwitterShareDialog: function (j) {
                j.preventDefault();
                var h = b(this);
                var i = h.attr("data-share");
                var g = h.attr("data-title");
                var f = "https://twitter.com/intent/tweet?via=9GAG&source=tweetbutton&original_referer=" + encodeURIComponent(i) + "&text=" + g + "&url=" + encodeURIComponent(i);
                e._openWindow(f)
            },
            _openGPlusShareDialog: function (j) {
                j.preventDefault();
                var h = b(this);
                var i = h.attr("data-share");
                var g = h.attr("data-title");
                var f = "https://plus.google.com/share?url=" + encodeURIComponent(i);
                e._openWindow(f)
            },
            _openPinterestShareDialog: function (l) {
                l.preventDefault();
                var i = b(this);
                var j = i.attr("data-share");
                var h = i.attr("data-img");
                var g = i.attr("data-title");
                var f = "//pinterest.com/pin/create/button/?url=" + encodeURIComponent(j) + "&media=" + encodeURIComponent(h) + "&description=" + g;
                e._openWindow(f)
            },
            _openWindow: function (j) {
                var g = 640;
                var m = 460;
                var f = a.screen.height / 2 - (m / 2);
                var i = a.screen.width / 2 - (g / 2);
                var l = a.open(j, "Share", "status=1,height=" + m + ",width=" + g + ",top=" + f + ",left=" + i + ",resizable=0")
            },
            _bindElements: function () {
                b(e.selectors.CLICK_EVENT_SELECTOR_DELEGATE).on("click", ".badge-facebook-share", e._openFacebookShareDialog);
                b(e.selectors.CLICK_EVENT_SELECTOR_DELEGATE).on("click", ".badge-twitter-share", e._openTwitterShareDialog);
                b(e.selectors.CLICK_EVENT_SELECTOR_DELEGATE).on("click", ".badge-gplus-share", e._openGPlusShareDialog);
                b(e.selectors.CLICK_EVENT_SELECTOR_DELEGATE).on("click", ".badge-pinterest-share", e._openPinterestShareDialog)
            }
        };
        return {
            init: function () {
                e._bindElements()
            }
        }
    })());
    GAG.HeadbarController = b.extend({}, new GAG.Controller(), (function () {
        var e = {
            _bindElements: function () {
                e._bindSearchIcon()
            },
            _bindSearchIcon: function () {
                var f = b("#jsid-search-icon");
                f.on("click", function (g) {
                    g.preventDefault();
                    e._toggleSearchBar()
                })
            },
            SLIDE_DURATION: 300,
            _toggleSearchBar: function () {
                var f = b("#header_searchbar");
                f.slideToggle(e.SLIDE_DURATION)
            }
        };
        return {
            init: function () {
                e._bindElements();
                var j = b(".nav-wrap");
                var l = j.find("h1");
                var f = j.find(".headbar-items");
                var h = f.find("#jsid-header-funny-menu").parent();
                var g = b("#jsid-header-funny-menu-items");
                var abc = f.find("#jsid-header-girl-menu").parent();
                var abcd = b("#jsid-header-girl-menu-items");
                var i = l.width() + f.width() - h.width();
                g.css("margin-left", i + "px");
                g.css("left", "0")
                abcd.css("margin-left", i + "px");
                abcd.css("left", "0")
            }
        }
    })());
    GAG.ListController = b.extend({}, new GAG.Controller(), {
        _scrollDuration: 100,
        _focusMinimumInViewPortion: 150,
        _entryReadTimeout: 800,
        _scrollFaultTolerance: 20,
        _lastScrolledTop: 0,
        selectors: {
            LIST_VIEW: ".badge-list-view-element",
            ENTRY_CONTAINER: ".badge-entry-container",
            IN_VIEW_ELEMENTS: ".badge-in-view",
            IN_FOCUS_ELEMENTS: ".badge-in-view-focus",
            IN_VIEW_CLASS: "badge-in-view",
            IN_FOCUS_CLASS: "badge-in-view-focus",
            ENTRY_CONTAINER_ID_PREFIX: "#jsid-entry-entity-",
        },
        customEvents: {
            IN_FOCUS_SET: "inViewFocusSet",
            IN_FOCUS_UNSET: "inViewFocusUnset",
            ENTRY_READ: "entryRead"
        },
        init: function () {
            this.bindElements();
            b.proxy(this.handlers.listViewScrollHandler, this)()
        },
        bindElements: function () {
            this.bindInViewTrackerEvents();
            this._bindViewHistoryTrackingEvents()
        },
        handlers: {
            recalculateInViewEntries: function () {
                var r = GAG.ListController;
                var g = GAG.PageController.getWindowEffectiveScrollTop();
                var f = g + b(a).height();
                r._lastScrolledTop = g;
                var e = GAG.CacheController;
                var o = e.getEntryHandler();
                var h = o.getEntryList();
                if (!h || h.length == 0 || e.isUpdateNeeded(e.keys.ENTRY_LIST)) {
                    e.parseEntryInfo();
                    h = o.getEntryList()
                }
                var q = [];
                var j = [];
                for (var m = 0; m < h.length; m++) {
                    var l = h[m];
                    var n = o.getEntryInfoForKey(l, "offset").top - GAG.PageController._topStickyElementHeight;
                    var p = o.getEntryInfoForKey(l, "outerHeight");
                    if (n < f && n + p > g) {
                        q.push(l);
                        if (n + p >= g + r._focusMinimumInViewPortion && n + r._focusMinimumInViewPortion <= f) {
                            j.push(l)
                        }
                    }
                }
                r._updateEntriesInView(q);
                r._updateEntriesInViewFocus(j)
            },
            listViewScrollHandler: function (f) {
                var e = this;
                var g = GAG.PageController.getWindowEffectiveScrollTop();
                if (Math.abs(g - e._lastScrolledTop) > 200) {
                    e.handlers.recalculateInViewEntries()
                }
            },
        },
        bindInViewTrackerEvents: function () {
            b(a).on("scroll resize", null, null, b.proxy(this.handlers.listViewScrollHandler, this));
            b("body").on(this.customEvents.IN_FOCUS_SET, this.selectors.ENTRY_CONTAINER, null, b.proxy(function (h) {
                var f = b(h.target);
                var g = setTimeout(b.proxy(function () {
                    b(f).trigger(b.Event(this.customEvents.ENTRY_READ))
                }, this), this._entryReadTimeout);
                b(f).data("entry-read-timeout-object", g)
            }, this));
            b("body").on(this.customEvents.IN_FOCUS_UNSET, this.selectors.ENTRY_CONTAINER, null, b.proxy(function (g) {
                var f = b(g.target);
                clearTimeout(b(f).data("entry-read-timeout-object"))
            }, this))
        },
        _updateEntriesInView: function (g) {
            var e = GAG.ListController;
            var f = e.selectors.IN_VIEW_CLASS;
            e._unsetEntriesInViewInFocus(f, g, false);
            e._setEntriesInViewInFocus(f, g, false)
        },
        _updateEntriesInViewFocus: function (g) {
            var e = GAG.ListController;
            var f = e.selectors.IN_FOCUS_CLASS;
            e._unsetEntriesInViewInFocus(f, g, true);
            e._setEntriesInViewInFocus(f, g, true)
        },
        _unsetEntriesInViewInFocus: function (g, h, e) {
            var f = GAG.ListController;
            b("." + g).each(function () {
                var j = b(this).data("entry-id");
                var i = b.inArray(j, h);
                if (i < 0) {
                    b(this).removeClass(g);
                    if (e) {
                        b(this).trigger(b.Event(f.customEvents.IN_FOCUS_UNSET))
                    }
                }
            })
        },
        _setEntriesInViewInFocus: function (j, l, f) {
            var g = GAG.ListController;
            var e = [];
            for (var h = 0; h < l.length; h++) {
                e.push(g.selectors.ENTRY_CONTAINER_ID_PREFIX + l[h])
            }
            b(e.join(", ")).each(function () {
                b(this).addClass(j);
                if (f === true) {
                    b(this).trigger(b.Event(g.customEvents.IN_FOCUS_SET))
                }
            })
        },
        findCurrentlyInViewEntries: function () {
            return b(this.selectors.IN_VIEW_ELEMENTS)
        },
        findCurrentlyInViewEntry: function () {
            return this.findCurrentlyInViewEntries().first()
        },
        findCurrentlyInFocusEntries: function () {
            return b(this.selectors.IN_FOCUS_ELEMENTS)
        },
        findCurrentlyInFocusEntry: function () {
            return this.findCurrentlyInFocusEntries().first()
        },
        scrollToNextEntry: function (i) {
            if (typeof i == "undefined") {
                i = this.findCurrentlyInViewEntry()
            }
            var g = GAG.ListController;
            var m = b(this.selectors.ENTRY_CONTAINER);
            var e = m.index(i);
            var f = e + 1 >= m.length ? e : e + 1;
            var j = b(m[f]);
            if (e + 1 >= m.length) {
                var h = GAG.ListScrollingController;
                if (h._loadedCount >= h._loadCountMax) {
                    var l = b(h.selectors.LOAD_MORE_BUTTON);
                    if (l && l.length > 0) {
                        l[0].click()
                    }
                }
            }
            if (!j.offset()) {
                return
            }
            b("html,body").animate({
                scrollTop: j.offset().top - GAG.PageController._topStickyElementHeight
            }, this._scrollDuration, "swing", function () {
                g.handlers.recalculateInViewEntries()
            })
        },
        scrollToPrevEntry: function (i) {
            var h = GAG.ListController;
            if (typeof i == "undefined") {
                i = this.findCurrentlyInViewEntry()
            }
            if (b(a).scrollTop() == 0) {
                return
            }
            if (!i.offset()) {
                return
            }
            var j = b(i);
            var f = false;
            if (Math.abs(i.offset().top - GAG.PageController.getWindowEffectiveScrollTop()) < this._scrollFaultTolerance) {
                var l = b(this.selectors.ENTRY_CONTAINER);
                var e = l.index(i);
                var g = e - 1 < 0 ? 0 : e - 1;
                j = b(l[g]);
                f = g == 0
            }
            if (!j.offset()) {
                return
            }
            b("html,body").animate({
                scrollTop: !f ? (j.offset().top - GAG.PageController._topStickyElementHeight) : 0
            }, this._scrollDuration, "swing", function () {
                h.handlers.recalculateInViewEntries()
            })
        },
        _readIds: {},
        _readIdsBuffer: [],
        _readIdsBufferFlushThreshold: 5,
        _bindViewHistoryTrackingEvents: function () {
            b("body").on(this.customEvents.ENTRY_READ, this.selectors.ENTRY_CONTAINER, null, b.proxy(function (j) {
                var i = b(j.target);
                var h = b(i).data("entry-id");
                var f = GAG.Configs.get("page.page_pool");
                if (!this._readIds[h]) {
                    this._readIds[h] = 1;
                    this._readIdsBuffer.push(h);
                    if (f) {
                        GAG.Track.markReadInCookie(h)
                    }
                    if (this._readIdsBuffer.length >= this._readIdsBufferFlushThreshold) {
                        if (f) {
                            GAG.Track.read(this._readIdsBuffer)
                        }
                        var g = {
                            label: "",
                            labelValue: "",
                            platform: "d",
                            entry: this._readIdsBuffer.join(","),
                            view: "l"
                        };
                        GAG.Track.uniqueViewed(g);
                        this._readIdsBuffer = []
                    }
                }
            }, this))
        }
    });
    GAG.ListScrollingController = b.extend({}, new GAG.Controller(), {
        _isLoading: false,
        _listViewElement: null,
        _bottomReached: false,
        _loadCountMax: 20,
        _loadItemCount: 0,
        _loadedCount: 1,
        _lastScrollEntryPoint: 0,
        _lastScrollFeaturedPoint: 0,
        _disableAutoHiding: false,
        selectors: {
            LOAD_MORE_BUTTON: ".badge-load-more-post",
            ENTRY_LIST_CONTAINER: ".badge-entry-collection",
            ENTRY_CONTAINER: ".badge-entry-container",
            ENTRY_LIST_VIEW: ".badge-list-view-element",
            ADS_CONTAINER_FEATURED: "#jsid-featured-item-container section",
        },
        init: function () {
            this._listViewElement = b(this.selectors.ENTRY_LIST_VIEW);
            if (navigator.userAgent.match(/(iPhone|iPod|iPad)/i)) {
                this._disableAutoHiding = true
            } else {
                if (GAG.Page.isPostPage()) {
                    this._disableAutoHiding = true
                }
            }
            this.bindElements()
        },
        bindElements: function () {
            this.bindScrollEvents();
            this.bindLastEntryInFocus()
        },
        handlers: {
            windowScrollHandler: function () {
                b.proxy(this.handlers.loadMoreScrollHandler, this)();
                if (!this._disableAutoHiding) {
                    b.proxy(this.handlers.autoHidingScrollHandler, this)()
                }
            },
            loadMoreScrollHandler: function () {
                var e = b(a).height();
                if (b(a).scrollTop() + e >= b(document).height() - e * 3) {

                }
            },
            loadMoreLastEntryFocusHandler: function (g) {
                var f = b(g.target);
                if (b(this.selectors.ENTRY_CONTAINER).last().is(f)) {

                }
            },
            archiveContainer: function (f, e) {
                if (f.html() != "") {
                    GAG.PostController.postCallback("postWillArchive", f);
                    f.css("min-height", e + "px");
                    f.data("stored-html", f.html());
                    f.empty();
                    f.addClass("archived");
                    GAG.PostController.postCallback("postDidArchive", f)
                }
            },
            extractContainer: function (e) {
                if (e.data("stored-html") != null) {
                    GAG.PostController.postCallback("postWillRestore", e);
                    e.html(e.data("stored-html"));
                    e.data("stored-html", null);
                    e.removeClass("archived");
                    GAG.PostController.postCallback("postDidRestore", e)
                }
            },
            scanEntriesForArchive: function () {
                var w = GAG.ListScrollingController;
                var f = GAG.CacheController;
                var v = f.getEntryHandler();
                var s = GAG.ListController;
                var m = v.getEntryList();
                var o = b(a).height();
                var u = o * 3;
                var g = o * 4;
                var r = GAG.PageController.getWindowEffectiveScrollTop();
                if (!m || m.length == 0 || f.isUpdateNeeded(f.keys.ENTRY_LIST)) {
                    f.parseEntryInfo();
                    m = v.getEntryList();
                    f.notifyForCacheUpdateCompleted(f.keys.ENTRY_LIST)
                }
                b(s.selectors.ENTRY_CONTAINER + ":not(.archived)").each(function () {
                    var i = b(this);
                    var z = i.data("entry-id");
                    var y = v.getEntryInfoForKey(z, "height");
                    var B = v.getEntryInfoForKey(z, "offset");
                    var A = B.top;
                    var x = B.top + y;
                    if (x < r - u - y || A > r + g + y) {
                        w.handlers.archiveContainer(i, y)
                    }
                });
                for (var p = 0; p < m.length; p++) {
                    var n = m[p];
                    var q = v.getEntryInfoForKey(n, "height");
                    var l = v.getEntryInfoForKey(n, "offset");
                    var t = l.top;
                    var e = l.top + q;
                    if (e >= r - u - q && t <= r + g + q) {
                        var j = b(s.selectors.ENTRY_CONTAINER_ID_PREFIX + n);
                        w.handlers.extractContainer(j)
                    }
                }
            },
            scanFeaturedItemForArchive: function () {
                var v = GAG.ListScrollingController;
                var f = GAG.CacheController;
                var t = f.getFeaturedItemHandler();
                var s = GAG.FeaturedController;
                var m = b(a).height();
                var r = m * 2;
                var g = m * 3;
                var o = GAG.PageController.getWindowEffectiveScrollTop();
                var u = t.getFeaturedList();
                if (!u || u.length == 0 || f.isUpdateNeeded(f.keys.FEATURED_LIST)) {
                    var l = [];
                    b(s.selectors.SIDEBAR_ITEMS).each(function () {
                        var w = b(this).data("item-id");
                        var i = f.handlers.getFeaturedItemInfoFromDOM(b(this));
                        t.setFeaturedItemInfo(w, i);
                        l.push(w)
                    });
                    t.setFeaturedList(l);
                    u = l;
                    f.notifyForCacheUpdateCompleted(f.keys.FEATURED_LIST)
                }
                b(s.selectors.SIDEBAR_ITEMS + ":not(.archived)").each(function () {
                    var i = b(this);
                    var z = i.data("item-id");
                    var y = t.getFeaturedItemInfo(z);
                    if (!y) {
                        y = f.handlers.getFeaturedItemInfoFromDOM(i);
                        t.setFeaturedItemInfo(z, y)
                    }
                    var x = y.top;
                    var w = x + y.height;
                    if (w < o - r - y.height || x > o + g + y.height) {
                        v.handlers.archiveContainer(i, y.height)
                    }
                });
                for (var n = 0; n < u.length; n++) {
                    var q = u[n];
                    var j = t.getFeaturedItemInfo(q);
                    if (!j) {
                        j = f.handlers.getFeaturedItemInfoFromDOM(h);
                        t.setFeaturedItemInfo(q, j)
                    }
                    var p = j.top;
                    var e = p + j.height;
                    if (e >= o - r - j.height && p <= o + g + j.height) {
                        var h = b(s.selectors.SIDEBAR_ITEM_PREFIX + q);
                        v.handlers.extractContainer(h)
                    }
                }
            },
            autoHidingScrollHandler: function () {
                var f = this;
                var h = GAG.PageController.getWindowEffectiveScrollTop();
                var e = Math.abs(h - this._lastScrollEntryPoint);
                var g = Math.abs(h - this._lastScrollFeaturedPoint);
                if (e > 1000) {
                    f._lastScrollEntryPoint = h;
                    f.handlers.scanEntriesForArchive()
                }
                if (g > 1000) {
                    f._lastScrollFeaturedPoint = h;
                    f.handlers.scanFeaturedItemForArchive()
                }
            },
            loadMoreAjaxHandler: function (j) {
                if (!j.okay) {
                    return
                }
                var f = b("#jsid-gat-interval").data("post-interval") + "";
                var o = f.split(",");
                var h = "";
                var g = false;
                for (var l = 0; l < j.ids.length; l++) {
                    var n = j.ids[l];
                    if (b("#jsid-entry-entity-" + n).length == 0) {
                        if (o.indexOf(l + "") > -1) {
                            h += '<div class="banner-block stream-naughty">                                    <div class="naughty-background">                                        <div class="badge-gag-ads-container naughty-container" data-gag-ads="list-instream-300x250"></div>                                    </div>                                </div>';
                            g = true
                        }
                        h += j.items[n];
                        this._loadItemCount++
                    }
                }
                var p = this.findLastEntryElement();
                b(p).append(h);
                var e = GAG.CacheController;
                e.notifyForCacheUpdate(e.keys.ENTRY_LIST);
                if (g) {
                    GAG.AdsController.notifyForAdsInsert(this.selectors.ENTRY_LIST_CONTAINER)
                }
                GAG.GA.track("load-more", GAG.Configs.get("page.page_list"), "load-" + this._loadedCount);
                this._loadedCount++;
                var m = b(this.selectors.LOAD_MORE_BUTTON);
                if (this._loadedCount < this._loadCountMax) {
                    if (j.loadMoreUrl != "") {
                        m.prop("href", j.loadMoreUrl);
                        m.text(m.data("original-text"));
                        m.data("original-text", "");
                        m.removeClass("spin")
                    } else {
                        m.removeAttr("href");
                        m.text("No more posts");
                        m.removeClass("spin").addClass("end");
                        this._bottomReached = true
                    }
                } else {
                    m.text("I want more fun");
                    m.prop("href", j.loadMoreUrl);
                    m.removeClass("spin").addClass("blue");
                    this._bottomReached = true
                }
                this._isLoading = false
            }
        },
        
        findLastEntryElement: function () {
            return this._listViewElement.find(this.selectors.ENTRY_LIST_CONTAINER).last();
            return this._listViewElement.find(this.selectors.ENTRY_CONTAINER).last()
        },
        bindScrollEvents: function () {
            b(a).scroll(b.proxy(this.handlers.windowScrollHandler, this))
        },
        bindLastEntryInFocus: function () {
            b("body").on(GAG.ListController.customEvents.IN_FOCUS_SET, this.selectors.ENTRY_CONTAINER, null, b.proxy(this.handlers.loadMoreLastEntryFocusHandler, this))
        }
    });
    GAG.PostController = b.extend({}, new GAG.Controller(), {
        _entryStickyElementMarginTop: 20,
        _entryStickyElementMarginTopProfile: 20,
        _reportInProgress: false,
        _voteUp: "up",
        _voteDown: "down",
        _fastInitLoad: true,
        _domReady: false,
        CLASS_STICKY: "sticked",
        init: function () {
            this._domReady = true;
            this.bindElements();
            this.renderPostFooterLike();
            this.trackPostUV()
        },
        availableCallbacks: ["postWillArchive", "postDidArchive", "postWillRestore", "postDidRestore"],
        selectors: {
            CONTAINER: "div#container",
            ENTRY_CONTAINER: ".badge-entry-container",
            ENTRY_CONTAINER_RAW: "badge-entry-container",
            ENTRY_ENTITY: ".badge-entry-entity",
            ENTRY_MAIN_POST_COMMENT_ID: "jsid-main-post-facebook-comment-plugin",
            ENTRY_POST_FOOTER_LIKE_ID: "jsid-footer-facebook-like-plugin",
            ENTRY_STICKY_ELEMENTS: ".badge-entry-sticky",
            ENTRY_STICKY_ELEMENTS_SHADOW: ".badge-entry-sticky-shadow",
            ENTRY_TITLE: ".badge-item-title",
            ENTRY_IMG: ".badge-item-img",
            ENTRY_LOVE_COUNT: ".badge-item-love-count",
            ENTRY_COMMENT_COUNT: ".badge-item-comment-count",
            ENTRY_FB_COMMENT_COUNT: ".badge-item-fb-comment-count",
            ENTRY_SHARE_COUNT: ".badge-item-share-count",
            ENTRY_SHARE: ".badge-item-share",
            ENTRY_SHARE_MENU: ".badge-item-share-menu",
            ENTRY_FB_SHARE: ".badge-facebook-share",
            ENTRY_FB_BOT_SHARE: ".badge-facebook-bot-share",
            ENTRY_TW_SHARE: ".badge-twitter-share",
            ENTRY_TW_BOT_SHARE: ".badge-twitter-bot-share",
            ENTRY_GPLUS_SHARE: ".badge-gplus-share",
            ENTRY_PIN_SHARE: ".badge-pinterest-share",
            ENTRY_EMAIL_SHARE: ".badge-email-share",
            ENTRY_NSFW_COVER: ".badge-nsfw-entry-cover",
            ENTRY_VIDEO_CONTAINER: ".badge-video-container",
            ENTRY_VIDEO_COVER: ".badge-video-cover",
            ENTRY_ANIMATED_COVER: ".badge-animated-cover",
            ENTRY_ANIMATED_CONTAINER_ANIMATED: ".badge-animated-container-animated",
            ENTRY_ANIMATED_CONTAINER_STATIC: ".badge-animated-container-static",
            ENTRY_ANIMATED_SPINNER: ".gif-spinner",
            ENTRY_ANIMATED_PLAY_BUTTON: ".play",
            ENTRY_NEXT_POST_ENTRY: ".badge-next-post-entry",
            ENTRY_PREV_POST_ENTRY: ".badge-prev-post-entry",
            ENTRY_POST_GRID_ENTRY: ".badge-post-grid-entry",
            ENTRY_CONTENT: ".badge-entry-content",
            ENTRY_INFO: ".badge-entry-info",
            ENTRY_UPVOTE_BUTTON: ".badge-item-vote-up",
            ENTRY_DOWNVOTE_BUTTON: ".badge-item-vote-down",
            ENTRY_COMMENT_BUTTON: ".badge-item-comment",
            ENTRY_VOTE_CONTAINER: ".badge-item-vote-container",
            ENTRY_POST_ZOOM: ".badge-post-zoom",
            ENTRY_POST_CONTAINER: ".badge-post-container",
            ENTRY_EXPAND_BTN: ".badge-expand-post",
            COMMENT_SWITCH_9GAG: ".badge-comment-switch-9gag",
            COMMENT_SWITCH_FB: ".badge-comment-switch-fb",
            MODAL_POST_ZOOM_CONTAINER: "#jsid-modal-post-zoom",
            SEARCH_ENTRY_ENTITY: ".badge-search-entry-entity",
            MODAL_REPORT_CONTAINER: ".badge-overlay-report",
            MODAL_REPORT_TYPE: "input[name=radio-report]",
            MODAL_REPORT_SUBMIT: ".badge-report-submit-btn",
            REPORT_LINK: ".badge-item-report",
            MORE_SHARE_BUTTON: ".badge-more-share-button",
            MORE_SHARE_MENU: ".badge-more-share-menu",
            POST_DOWNLOAD_FOOTER: "badge-download-footer",
            POST_SOCIAL_FOOTER: "badge-social-footer",
            GROUP_TW_SHARE: "twitter-post-share",
            GROUP_GPLUS_SHARE: "gplus-post-share",
            ENTRY_TOOLBAR_PRE: ".badge-toolbar-pre",
            ENTRY_TOOLBAR_STICKY: ".badge-entry-toolbar-sticky",
            FEATURED_SIDEBAR_BOTTOM_ADS: "#jsid-featured-sidebar-ad .img-container",
        },
        bindElements: function () {
            this.bindVoteUpElements();
            this.bindVoteDownElements();
            this.bindCommentElements();
            this.bindToggleShareMenu();
            this.bindReportElements();
            this.bindEntryCoverElements();
            this.bindStickyEntryBars();
            this.bindZoomElements();
            this._bindEntryTrackingEvents();
            this.bindExpandElements();
            this.bindSearchResultElements();
            this.bindFastElements()
        },
        _fastItems: null,
        _fastEntryIds: [],
        _fastCurrentEntryKey: null,
        _fastLastEntryKey: null,
        _fastForwardDirection: true,
        _fastTriggerLoadThreshold: 9,
        _fastPostGridSize: 6,
        _fastTimer: null,
        _fastReloadAdsThreshold: 5,
        _fastReloadAdsCount: 1,
        _fastSkipBackward: [],
        _fastSkipForward: [],
        _fastForwardByButton: false,
        initLoadFastEntries: function () {
            var e = GAG.Configs.get("data");
            this._fastCurrentEntryKey = b(this.selectors.ENTRY_ENTITY).data("entry-id");
            if (e.fast_entries != null) {
                this.extractFastEntries(e.fast_entries)
            }
        },
        getFastEntriesJson: function (e) {
            var f = "next";
            if (!this._fastForwardDirection) {
                var f = "prev"
            }
            e = e + "?direction=" + f + "&c=13";
            if (GAG.Configs.get("configs").from_section && GAG.Configs.get("configs").section_url) {
                e += "&sc=" + GAG.Configs.get("configs").section_url
            }
            b.getJSON(e, null, b.proxy(this.extractFastEntries, this))
        },
        extractFastEntries: function (l) {
            if (!l.okay) {
                return
            }
            var j = 0;
            if (this._fastItems == null) {
                this._fastItems = l.items
            } else {
                b.extend(this._fastItems, l.items)
            }
            var f = l.entryIds;
            if (!this._fastForwardDirection) {
                f.reverse()
            }
            var e = 0;
            for (var h = 0; h < f.length; h++) {
                if (b.inArray(f[h], this._fastEntryIds) < 0) {
                    if (this._fastForwardDirection) {
                        this._fastEntryIds.push(f[h])
                    } else {
                        this._fastEntryIds.unshift(f[h])
                    }
                    e++
                }
            }
            var g = b.inArray(this._fastCurrentEntryKey, this._fastEntryIds);
            this.updatePrevNextButtons(g);
            if (f.length > 0 && e == 0) {
                if (this._fastForwardDirection) {
                    this._fastSkipForward.push(l.entryIds[0])
                } else {
                    this._fastSkipBackward.push(l.entryIds[0])
                }
            }
        },
        fastEntriesMapElements: function (g, e) {
            if (this._fastItems[g] != null) {
                var f = this._fastItems[g];
                this.mapPostContent(f);
                if (this._fastReloadAdsCount >= this._fastReloadAdsThreshold) {
                    GAG.AdsController.renderAllAds();
                    this._fastReloadAdsCount = 1
                } else {
                    this._fastReloadAdsCount++
                }
            } else {
                a.location.href = e
            }
        },
        bindFastElements: function () {
            if (!GAG.Page.isPostPage()) {
                return
            }
            this.initLoadFastEntries();
            b(this.selectors.CONTAINER).on("click", ".badge-fast-entry", b.proxy(function (m) {
                m.preventDefault();
                var n = b(m.currentTarget);
                if (n.hasClass("disabled")) {
                    return
                }
                var o = n.data("entry-key");
                var p = n.attr("href");
                var i = "";
                if (n.hasClass("badge-next-post-entry")) {
                    i = "NEXT_ENTRY";
                    this._fastForwardDirection = true
                } else {
                    if (n.hasClass("badge-prev-post-entry")) {
                        i = "PREV_ENTRY";
                        this._fastForwardDirection = false
                    } else {
                        i = "GRID_ENTRY"
                    }
                }
                this._fastLastEntryKey = this._fastCurrentEntryKey;
                this._fastCurrentEntryKey = o;
                this._fastForwardByButton = true;
                if (p) {
                    this.fastEntriesMapElements(o, p);
                    var l = b.inArray(this._fastCurrentEntryKey, this._fastEntryIds);
                    var j = this._fastTriggerLoadThreshold;
                    var h = this._fastEntryIds.length - this._fastTriggerLoadThreshold;
                    var g = b.makeArray(this._fastEntryIds);
                    if (!this._fastForwardDirection && l <= j) {
                        var r = g[1];
                        if (b.inArray(r, this._fastSkipBackward) < 0) {
                            p = this._fastItems[r].entryRelativeUrl;
                            this.getFastEntriesJson(p)
                        }
                    } else {
                        if (this._fastForwardDirection && l >= h) {
                            var f = g[g.length - 2];
                            if (b.inArray(f, this._fastSkipForward) < 0) {
                                p = this._fastItems[f].entryRelativeUrl;
                                this.getFastEntriesJson(p)
                            }
                        }
                    }
                    GAG.GA.track("fast-entry", i, GAG.Page.getPageKey());
                    var q = {
                        label: "",
                        labelValue: "",
                        platform: "d",
                        entry: o,
                        view: "p"
                    };
                    GAG.Track.uniqueViewed(q)
                }
            }, this));
            if (GAG.Page.isPostPage()) {
                a.onpopstate = b.proxy(function (i) {
                    this.trackPostUV();
                    var g = a.location.href;
                    var f = g.split("/");
                    if (jQuery.inArray("gag", f) >= 0) {
                        if (!this._fastInitLoad) {
                            var h = f[jQuery.inArray("gag", f) + 1];
                            var j = (a.location.hash && a.location.hash.length > 0);
                            if (!j) {
                                this.fastEntriesMapElements(h, g)
                            }
                        } else {
                            this._fastInitLoad = false
                        }
                    }
                }, this)
            }
        },
        updatePrevNextButtons: function (f) {
            GAG.FeaturedController.handlers.resetSidebarToTop();
            GAG.PostController.handlers.resetEntryStickyToolbar();
            var e = this._fastItems[this._fastEntryIds[f + 1]];
            b(this.selectors.ENTRY_NEXT_POST_ENTRY).removeData("entry-key");
            if (typeof e != "undefined") {
                b(this.selectors.ENTRY_NEXT_POST_ENTRY).removeClass("disabled");
                b(this.selectors.ENTRY_NEXT_POST_ENTRY).data("entry-key", e.entryId);
                b(this.selectors.ENTRY_NEXT_POST_ENTRY).attr("href", e.entryRelativeUrl)
            } else {
                b(this.selectors.ENTRY_NEXT_POST_ENTRY).addClass("disabled");
                b(this.selectors.ENTRY_NEXT_POST_ENTRY).attr("href", "")
            }
            var g = this._fastItems[this._fastEntryIds[f - 1]];
            b(this.selectors.ENTRY_PREV_POST_ENTRY).removeData("entry-key");
            if (typeof g != "undefined") {
                b(this.selectors.ENTRY_PREV_POST_ENTRY).removeClass("disabled");
                b(this.selectors.ENTRY_PREV_POST_ENTRY).data("entry-key", g.entryId);
                b(this.selectors.ENTRY_PREV_POST_ENTRY).attr("href", g.entryRelativeUrl)
            } else {
                b(this.selectors.ENTRY_PREV_POST_ENTRY).addClass("disabled");
                b(this.selectors.ENTRY_PREV_POST_ENTRY).attr("href", "")
            }
        },
        mapPostContent: function (e) {
            b("html, body").animate({
                scrollTop: 0
            }, 0);
            var o = b(this.selectors.ENTRY_ENTITY);
            var n = b.inArray(e.entryId, this._fastEntryIds);
            this._fastCurrentEntryKey = e.entryId.toString();
            if (!this._fastForwardByButton) {
                var h = b.makeArray(this._fastEntryIds);
                for (var m = 0; m < h.length; m++) {
                    h[m] = h[m].toString()
                }
                var f = o.data("entry-id").toString();
                this._fastForwardDirection = h.indexOf(f) > h.indexOf(this._fastCurrentEntryKey) ? false : true
            } else {
                if (this._fastLastEntryKey) {
                    this.replacePostUrl(this._fastLastEntryKey);
                    this.updatePostUrl(this._fastCurrentEntryKey)
                }
            }
            this._fastForwardByButton = false;
            o.removeData("entry-id");
            o.removeData("entry-thumbnail-url");
            o.removeData("entry-url");
            o.removeData("entry-votes");
            o.removeData("entry-comments");
            o.attr("id", "jsid-entry-entity-" + e.entryId);
            o.attr("data-entry-id", e.entryId);
            o.data("entry-id", e.entryId);
            o.data("entry-thumbnail-url", e.thumbnailUrl);
            o.data("entry-url", e.entryUrl);
            o.data("entry-votes", e.votes);
            o.data("entry-comments", e.comments);
            b(this.selectors.ENTRY_TITLE).text(e.title);
            GAG.PageController.setPageTitleWithSpecialChars(e.pageTitle);
            var g = b(this.selectors.ENTRY_LOVE_COUNT).parent().attr("id", "love-count-" + e.entryId);
            b(this.selectors.ENTRY_LOVE_COUNT, g).text(GAG.Utils.formatNumber(e.votes));
            b(this.selectors.ENTRY_COMMENT_COUNT).text(e.comments);
            b(this.selectors.ENTRY_FB_COMMENT_COUNT).text(e.fbComments);
            b(this.selectors.ENTRY_SHARE).attr("data-entry-id", e.entryId);
            b(this.selectors.ENTRY_SHARE_MENU).attr("id", "share-menu-" + e.entryId);
            b(this.selectors.ENTRY_CONTENT).html(e.entryContent);
            if (e.currentVote == 1) {
                this.handlers.likeHandler(e.entryId)
            } else {
                if (e.currentVote == -1) {
                    this.handlers.dislikeHandler(e.entryId)
                } else {
                    this.handlers.unlikeHandler(e.entryId)
                }
            }
            b(this.selectors.ENTRY_INFO).html(e.entryInfo);
            this.updatePrevNextButtons(n);
            b("link[rel=image_src]").attr("href", e.entryUrl);
            b("link[rel=canonical]").attr("href", e.entryUrl);
            b("meta[name=title]").attr("href", e.title);
            b(this.selectors.ENTRY_SHARE_COUNT).text(e.totalShares);
            b(this.selectors.ENTRY_FB_SHARE).removeAttr("data-track").attr("data-track", e.fbTrack);
            b(this.selectors.ENTRY_FB_SHARE).removeAttr("data-evt").attr("data-evt", e.fbEvt);
            b(this.selectors.ENTRY_FB_SHARE).removeAttr("data-share").attr("data-share", e.fbShare);
            b(this.selectors.ENTRY_FB_BOT_SHARE).removeAttr("data-evt").attr("data-evt", e.fbBotEvt);
            b(this.selectors.ENTRY_TW_SHARE).removeAttr("data-track").attr("data-track", e.twTrack);
            b(this.selectors.ENTRY_TW_SHARE).removeAttr("data-evt").attr("data-evt", e.twEvt);
            b(this.selectors.ENTRY_TW_SHARE).removeAttr("data-title").attr("data-title", e.twTitle);
            b(this.selectors.ENTRY_TW_SHARE).removeAttr("data-share").attr("data-share", e.twShare);
            b(this.selectors.ENTRY_TW_BOT_SHARE).removeAttr("data-evt").attr("data-evt", e.twBotEvt);
            b(this.selectors.ENTRY_GPLUS_SHARE).removeAttr("data-track").attr("data-track", e.gPlusTrack);
            b(this.selectors.ENTRY_GPLUS_SHARE).removeAttr("data-evt").attr("data-evt", e.gPlusEvt);
            b(this.selectors.ENTRY_GPLUS_SHARE).removeAttr("data-share").attr("data-share", e.gPlusShare);
            b(this.selectors.ENTRY_PIN_SHARE).removeAttr("data-track").attr("data-track", e.pinTrack);
            b(this.selectors.ENTRY_PIN_SHARE).removeAttr("data-evt").attr("data-evt", e.pinEvt);
            b(this.selectors.ENTRY_PIN_SHARE).removeAttr("data-title").attr("data-title", e.pinTitle);
            b(this.selectors.ENTRY_PIN_SHARE).removeAttr("data-share").attr("data-share", e.pinShare);
            b(this.selectors.ENTRY_PIN_SHARE).removeAttr("data-img").attr("data-img", e.pinImg);
            b(this.selectors.ENTRY_EMAIL_SHARE).attr("href", e.emailHref);
            b(this.selectors.ENTRY_EMAIL_SHARE).removeAttr("data-track").attr("data-track", e.emailTrack);
            b(this.selectors.ENTRY_EMAIL_SHARE).removeAttr("data-evt").attr("data-evt", e.emailEvt);
            this.renderCommentElement(e.entryUrl, this._currentCommentType);
            var l = e.isNsfw;
            var j = l > 0 ? "nsfw" : "";
            if (GAG.AdsController.getMode() != j) {
                GAG.AdsController.setMode(j);
                this._fastReloadAdsCount = 1
            }
            if (e.entryAdminMeta != "undefined") {
                b("#jsid-admin-meta").html(e.entryAdminMeta)
            }
        },
        renderPendingComment: function () {
            if (a.csAsyncInited && this._domReady) {
                if (a.pendingComment) {
                    this.renderCommentElement(a.pendingComment.url, a.pendingComment.commentType)
                } else {}
            } else {}
        },
        renderCommentElement: function (f, e) {
            if (this._currentEntryUrl == f && this._currentCommentType == e) {
                return
            }
            if (!e) {
                e = GAG.Configs.get("page.default_comment_type")
            }
            this._currentEntryUrl = f;
            this._currentCommentType = e;
            if (e == "9gag") {
                b(this.selectors.COMMENT_SWITCH_FB).removeClass("selected");
                b(this.selectors.COMMENT_SWITCH_9GAG).addClass("selected");
                b(".badge-comment").removeAttr("data-href").attr("data-href", f);
                if (a.CS2.setLoginUrl) {
                    a.CS2.setLoginUrl("https://" + GAG.Configs.get("page.domain") + "/login?next=" + encodeURIComponent(f) + "#comment")
                }
                a.CS2.load(f);
                b("#" + this.selectors.ENTRY_MAIN_POST_COMMENT_ID).hide();
                b(".badge-comment").show()
            } else {
                if (e == "fb") {
                    b(this.selectors.COMMENT_SWITCH_9GAG).removeClass("selected");
                    b(this.selectors.COMMENT_SWITCH_FB).addClass("selected");
                    b("#" + this.selectors.ENTRY_MAIN_POST_COMMENT_ID).html("");
                    b("#" + this.selectors.ENTRY_MAIN_POST_COMMENT_ID).removeData("href").data("href", f);
                    this.renderMainPostComment();
                    b(".badge-comment").hide();
                    b("#" + this.selectors.ENTRY_MAIN_POST_COMMENT_ID).show()
                }
            }
        },
        renderMainPostComment: function () {
            var e = b("#" + this.selectors.ENTRY_MAIN_POST_COMMENT_ID).data("href");
            GAG.Facebook.renderComment(this.selectors.ENTRY_MAIN_POST_COMMENT_ID, function () {}, {
                "data-href": e,
                "data-num-posts": 10,
                "data-width": 600
            })
        },
        renderPostFooterLike: function () {
            var e = b("#" + this.selectors.ENTRY_POST_FOOTER_LIKE_ID).data("href");
            GAG.Facebook.renderLike(this.selectors.ENTRY_POST_FOOTER_LIKE_ID, function () {}, {
                "data-href": e
            })
        },
        handlers: {
            likeHandler: function (e) {
                GAG.PostController.handlers.loveHandler(e, 1)
            },
            dislikeHandler: function (e) {
                GAG.PostController.handlers.loveHandler(e, -1)
            },
            unlikeHandler: function (e) {
                GAG.PostController.handlers.loveHandler(e, 0)
            },
            loveHandler: function (g, h) {
                var e = b("#jsid-entry-entity-" + g);
                var f = e.find(GAG.PostController.selectors.ENTRY_VOTE_CONTAINER);
                f.removeClass(GAG.PostController._voteDown);
                f.removeClass(GAG.PostController._voteUp);
                if (h > 0) {
                    f.addClass(GAG.PostController._voteUp)
                } else {
                    if (h < 0) {
                        f.addClass(GAG.PostController._voteDown)
                    }
                }
                GAG.PostController.updateFastItem(g, "currentVote", h)
            },
            reportHandler: function (e) {
                if (!GAG.User.isLoggedIn()) {
                    e.preventDefault();
                    GAG.AccountController.presentSignupForm();
                    return
                }
                b(this.selectors.MODAL_REPORT_CONTAINER).data("entry-id", b(e.currentTarget).closest(this.selectors.ENTRY_ENTITY).data("entry-id"));
                GAG.OverlayController.showOverlay(GAG.OverlayController.selectors.OVERLAY_COMPONENT_REPORT)
            },
            reportSubmitHandler: function (h) {
                if (!this._reportInProgress) {
                    this._reportInProgress = true;
                    var l = b(h.currentTarget);
                    var j = b(this.selectors.MODAL_REPORT_CONTAINER);
                    var i = j.data("entry-id");
                    var e = b(this.selectors.MODAL_REPORT_TYPE + ":checked", j);
                    var f = e.val();
                    var g = b("#jsid-repost-link").val();
                    l.data("text-normal", l.val());
                    l.val(l.data("text-loading"));
                    GAG.Entry.report(i, f, g, b.proxy(function () {
                        l.val(l.data("text-normal"));
                        GAG.OverlayController.hideOverlay(GAG.OverlayController.selectors.OVERLAY_COMPONENT_REPORT);
                        e.prop("checked", false);
                        this._reportInProgress = false
                    }, this), b.proxy(function () {
                        l.val(l.data("text-normal"));
                        alert("Something went wrong, please try again");
                        this._reportInProgress = false
                    }, this))
                }
            },
            resetEntryStickyToolbar: function () {
                var e = GAG.PostController;
                var f = b(e.selectors.ENTRY_TOOLBAR_STICKY);
                if (f && f.length > 0) {
                    f.css({
                        position: "",
                        "z-index": "",
                        top: ""
                    });
                    f.removeClass("sticked")
                }
            },
            entryStickyToolbarHandler: function () {
                var p = GAG.PostController;
                var l = b(a).scrollTop();
                var h = b(a).height();
                var o = b(p.selectors.ENTRY_CONTAINER);
                var j = o.find(p.selectors.ENTRY_TOOLBAR_PRE);
                var g = o.find(p.selectors.ENTRY_TOOLBAR_STICKY);
                if (g && g.length > 0) {
                    var i = j.offset().top;
                    var q = g.height();
                    var n = g.height();
                    var f = 10;
                    var m = b(p.selectors.ENTRY_POST_CONTAINER);
                    var e = m.offset().top + m.height() - q - f * 2;
                    if (l < i && g.hasClass("sticked")) {
                        p.handlers.resetEntryStickyToolbar()
                    } else {
                        if (l >= i && l <= e && !g.hasClass("sticked")) {
                            g.css({
                                position: "fixed",
                                "z-index": "3",
                                top: "0"
                            });
                            g.addClass("sticked")
                        }
                    }
                }
            },
            entryStickElementHandler: function (w) {
                var t = GAG.PostController;
                var r = GAG.CacheController;
                var A = GAG.ListController;
                var D = b(a).scrollTop();
                var v = b(a).height();
                var C = r.getEntryHandler();
                var m = C.getEntryList();
                if (!m || m.length == 0 || r.isUpdateNeeded(r.keys.ENTRY_LIST)) {
                    r.parseEntryInfo();
                    m = C.getEntryList();
                    r.notifyForCacheUpdateCompleted(r.keys.ENTRY_LIST)
                }
                var u = [];
                for (var y = 0; y < m.length; y++) {
                    var f = m[y];
                    var z = C.getEntryInfoForKey(f, "height");
                    var E = C.getEntryInfoForKey(f, "offset");
                    var s = E.top;
                    var o = E.top + z;
                    if (o >= D - v - z && s <= D + v + z) {
                        var e = b(A.selectors.ENTRY_CONTAINER_ID_PREFIX + f);
                        var n = e.find(t.selectors.ENTRY_STICKY_ELEMENTS_SHADOW);
                        var j = e.find(t.selectors.ENTRY_STICKY_ELEMENTS);
                        if (n && n.length > 0 && j && j.length > 0) {
                            var x = n.offset().top;
                            var q = j.height() || j.outerHeight();
                            if (x - t._entryStickyElementMarginTop >= GAG.PageController.getWindowEffectiveScrollTop()) {
                                j.css({
                                    position: "relative",
                                    "z-index": 1,
                                    top: ""
                                });
                                j.removeClass(t.CLASS_STICKY)
                            } else {
                                if (x - t._entryStickyElementMarginTop < GAG.PageController.getWindowEffectiveScrollTop() && s + z + parseFloat(e.css("paddingTop")) - q - t._entryStickyElementMarginTop > GAG.PageController.getWindowEffectiveScrollTop()) {
                                    var p = (GAG.PageController._topStickyElementHeight + t._entryStickyElementMarginTop) + "px";
                                    j.css({
                                        position: "fixed",
                                        "z-index": 2,
                                        top: p
                                    });
                                    j.addClass(t.CLASS_STICKY);
                                    u.push(f)
                                } else {
                                    var p = (z + parseFloat(e.css("paddingTop")) - (x - s) - q) + "px";
                                    j.css({
                                        position: "relative",
                                        "z-index": 2,
                                        top: p
                                    });
                                    j.removeClass(t.CLASS_STICKY)
                                }
                            }
                        }
                    }
                }
                var B = false;
                var l = "entrySticked";
                var g = r.getValue(l);
                if (g && g.length > 0) {
                    for (var y = 0; y < g.length; y++) {
                        if (b.inArray(g[y], u) < 0) {
                            var f = g[y];
                            var e = b(A.selectors.ENTRY_CONTAINER_ID_PREFIX + f);
                            var j = e.find(t.selectors.ENTRY_STICKY_ELEMENTS);
                            if (j.hasClass(t.CLASS_STICKY)) {
                                j.css({
                                    position: "",
                                    "z-index": "",
                                    top: ""
                                });
                                j.removeClass(t.CLASS_STICKY);
                                needUpdate = true
                            }
                        }
                    }
                }
                r.setValue(l, u);
                if (B) {
                    t.handlers.entryStickElementHandler()
                }
            }
        },
        onVoteUp: function (l) {
            var g = b(l.currentTarget);
            var i = g.closest(this.selectors.ENTRY_ENTITY).data("entry-id");
            var j = g.closest(this.selectors.ENTRY_ENTITY).data("entry-url");
            var f = g.closest(this.selectors.ENTRY_VOTE_CONTAINER);
            if (GAG.PageController.ensureLoggedIn(j)) {
                var h = f.hasClass(this._voteUp);
                if (f.hasClass(this._voteDown)) {
                    this.addLoveCount(i)
                }
                if (h) {
                    GAG.Vote.unlike(i, function () {}, function () {});
                    this.minusLoveCount(i);
                    this.handlers.unlikeHandler(i);
                    GAG.GA.track("EntryAction", "UndoUpvote", this._getPageTrackKey())
                } else {
                    GAG.Vote.like(i, function () {}, function () {});
                    this.addLoveCount(i);
                    this.handlers.likeHandler(i);
                    GAG.GA.track("EntryAction", "Upvote", this._getPageTrackKey())
                }
            }
        },
        _getPageTrackKey: function () {
            var e = "ListPage";
            if (GAG.Page.isPostPage()) {
                e = "PostPage"
            } else {
                if (GAG.Page.isProfilePage()) {
                    e = "ProfilePage"
                }
            }
            return e
        },
        onVoteDown: function (l) {
            var g = b(l.currentTarget);
            var i = g.closest(this.selectors.ENTRY_ENTITY).data("entry-id");
            var j = g.closest(this.selectors.ENTRY_ENTITY).data("entry-url");
            var f = g.closest(this.selectors.ENTRY_VOTE_CONTAINER);
            if (GAG.PageController.ensureLoggedIn(j)) {
                var h = f.hasClass(this._voteDown);
                if (f.hasClass(this._voteUp)) {
                    this.minusLoveCount(i)
                }
                if (h) {
                    GAG.Vote.unlike(i, function () {}, function () {});
                    this.addLoveCount(i);
                    this.handlers.unlikeHandler(i);
                    GAG.GA.track("EntryAction", "UndoDownvote", this._getPageTrackKey())
                } else {
                    GAG.Vote.dislike(i, function () {}, function () {});
                    this.minusLoveCount(i);
                    this.handlers.dislikeHandler(i);
                    GAG.GA.track("EntryAction", "Downvote", this._getPageTrackKey())
                }
            }
        },
        addLoveCount: function (g) {
            var e = this.getLoveCounter(g);
            var f = b("#jsid-entry-entity-" + g);
            var h = parseInt(f.data("entry-votes"));
            if (isNaN(h)) {
                return
            }
            h++;
            b(this.selectors.ENTRY_LOVE_COUNT, e).text(GAG.Utils.formatNumber(h));
            f.data("entry-votes", h);
            GAG.PostController.updateFastItem(g, "votes", h)
        },
        minusLoveCount: function (g) {
            var e = this.getLoveCounter(g);
            var f = b("#jsid-entry-entity-" + g);
            var h = parseInt(f.data("entry-votes"));
            if (isNaN(h)) {
                return
            }
            h--;
            b(this.selectors.ENTRY_LOVE_COUNT, e).text(GAG.Utils.formatNumber(h));
            f.data("entry-votes", h);
            GAG.PostController.updateFastItem(g, "votes", h)
        },
        updateFastItem: function (f, e, g) {
            if (GAG.PostController._fastItems != null) {
                if (GAG.PostController._fastItems[f] != "undefined") {
                    GAG.PostController._fastItems[f][e] = g
                }
            }
        },
        getLoveCounter: function (e) {
            return b("#love-count-" + e)
        },
        trackPostUV: function () {
            if (GAG.Page.isPostPage()) {
                var f = b(this.selectors.ENTRY_ENTITY).data("entry-id");
                var e = {
                    label: "",
                    labelValue: "",
                    platform: "d",
                    entry: f,
                    view: "p"
                };
                GAG.Track.uniqueViewed(e)
            }
        },
        bindStickyEntryBars: function () {
            if (GAG.Page.isPostPage()) {
                b(a).on("scroll resize", null, null, b.proxy(this.handlers.entryStickyToolbarHandler, this))
            } else {
                if (GAG.Page.isProfilePage()) {
                    this._entryStickyElementMarginTop = this._entryStickyElementMarginTopProfile
                }
                b(a).on("scroll resize", null, null, b.proxy(this.handlers.entryStickElementHandler, this))
            }
        },
        bindVoteUpElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_UPVOTE_BUTTON, b.proxy(this.onVoteUp, this))
        },
        bindVoteDownElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_DOWNVOTE_BUTTON, b.proxy(this.onVoteDown, this))
        },
        _currentCommentType: "",
        _currentEntryUrl: "",
        bindCommentElements: function () {
            this._currentCommentType = "";
            this._currentEntryUrl = GAG.Configs.get("page.entry_url");
            b(this.selectors.COMMENT_SWITCH_9GAG).on("click", b.proxy(function (f) {
                this.renderCommentElement(this._currentEntryUrl, "9gag")
            }, this));
            b(this.selectors.COMMENT_SWITCH_FB).on("click", b.proxy(function (f) {
                this.renderCommentElement(this._currentEntryUrl, "fb")
            }, this));
            this.renderPendingComment()
        },
        bindExpandElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_EXPAND_BTN, null, b.proxy(function (i) {
                i.preventDefault();
                var h = b(i.currentTarget);
                var g = h.closest(this.selectors.ENTRY_POST_CONTAINER);
                g.find(".long-post-container").removeClass("long-post-container");
                h.addClass("hide");
                var f = GAG.CacheController;
                f.notifyForCacheUpdate(f.keys.ENTRY_LIST)
            }, this))
        },
        bindSearchResultElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.SEARCH_ENTRY_ENTITY, null, b.proxy(function (h) {
                h.preventDefault();
                var f = b(h.currentTarget);
                var g = f.data("entry-url");
                a.open(g, "_blank")
            }, this));
            b(this.selectors.CONTAINER).on("click", this.selectors.SEARCH_ENTRY_ENTITY + " " + this.selectors.ENTRY_NSFW_COVER, null, b.proxy(function (f) {
                f.stopPropagation()
            }, this))
        },
        bindEntryCoverElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_NSFW_COVER, null, b.proxy(function (g) {
                g.preventDefault();
                var f = b(g.currentTarget).parents(this.selectors.ENTRY_ENTITY).data("entry-url");
                if (!f) {
                    f = b(g.currentTarget).parents(this.selectors.SEARCH_ENTRY_ENTITY).data("entry-url")
                }
                GAG.AccountController.setSafeMode(0, f)
            }, this));
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_VIDEO_COVER, null, b.proxy(function (m) {
                m.preventDefault();
                var l = b(m.currentTarget);
                var h = l.closest(this.selectors.ENTRY_ENTITY);
                var g = b(m.currentTarget).parents(this.selectors.ENTRY_VIDEO_CONTAINER);
                var i = "500";
                var f = "277";
                if (h.hasClass("post-page")) {
                    var i = "600";
                    var f = "340"
                }
                var j = '<iframe width="' + i + '" height="' + f + '" src="http://www.youtube.com/embed/' + g.data("video-id") + '?autoplay=1&controls=1&iv_load_policy=3" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen></iframe>';
                g.html(j)
            }, this));
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_ANIMATED_COVER, null, b.proxy(function (l) {
                l.preventDefault();
                var q = GAG.PostController;
                var m = b(l.currentTarget);
                var n = m.find(q.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);
                var o = m.find(q.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED);
                var f = n.parent();
                var p = o.find("img");
                var j = n.find(".badge-item-img");
                if (p.length == 0) {
                    var h = 'alt="' + j.attr("alt") + '"';
                    if (b.browser && b.browser.mozilla) {
                        h = ""
                    }
                    var g = n.find("img").attr("style");
                    o.append('<img src="' + o.data("image") + '" ' + h + ' style="' + g + '"/>');
                    o.removeData("image");
                    o.attr("data-image", "");
                    a.setTimeout(function () {
                        if (!n.hasClass("hide")) {
                            n.addClass("loading")
                        }
                    }, 300);
                    q.bindImageLoadedEvent(f)
                } else {
                    if (!n.hasClass("loading") && (n.hasClass("presenting") || n.hasClass("hide"))) {
                        n.toggleClass("hide");
                        n.toggleClass("presenting");
                        if (!n.hasClass("presenting")) {
                            var i = o.find("img");
                            i.prop("src", i.prop("src"))
                        } else {}
                    }
                }
            }, this))
        },
        bindImageLoadedEvent: function (f) {
            var g = GAG.PostController;
            var e = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);
            var h = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED);
            h.find("img").load(function () {
                e.removeClass("loading");
                e.addClass("hide");
                h.removeClass("hide");
                h.find("img").unbind()
            }).each(function () {
                if (this.complete) {
                    b(this).load()
                }
            })
        },
        bindReportElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.REPORT_LINK, null, b.proxy(this.handlers.reportHandler, this));
            b(this.selectors.MODAL_REPORT_SUBMIT).on("click", null, null, b.proxy(this.handlers.reportSubmitHandler, this))
        },
        bindToggleShareMenu: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.MORE_SHARE_BUTTON, b.proxy(function (g) {
                g.stopPropagation();
                var i = b(g.currentTarget);
                var f = i.closest(this.selectors.ENTRY_ENTITY);
                var h = f.find(".badge-more-share-menu");
                if (h.hasClass("hide")) {
                    GAG.PageController.hidePopupMenu(this.selectors.MORE_SHARE_MENU);
                    h.removeClass("hide");
                    GAG.GA.track("EntryAction", "ShareMenuOpened", this._getPageTrackKey())
                } else {
                    GAG.PageController.hidePopupMenu();
                    GAG.GA.track("EntryAction", "ShareMenuClosed", this._getPageTrackKey())
                }
            }, this))
        },
        bindShortcutKeys: function () {
            GAG.KeyboardController.bindAction("l", b.proxy(this.onVoteUp, this));
            GAG.KeyboardController.bindAction("h", b.proxy(this.onVoteDown, this))
        },
        bindZoomElements: function () {
            b(this.selectors.CONTAINER).on("click", this.selectors.ENTRY_POST_ZOOM, b.proxy(function (h) {
                h.preventDefault();
                var g = b(h.currentTarget);
                var f = g.closest(this.selectors.ENTRY_ENTITY);
                this.showPostZoomOverlay(f)
            }, this))
        },
        _bindEntryTrackingEvents: function () {
            GAG.Facebook.addInitCallback("all", b.proxy(function () {
                FB.Event.subscribe("edge.create", b.proxy(function (g, j, f) {
                    var i = b(j.dom);
                    var h = i.closest(this.selectors.ENTRY_ENTITY).data("entry-id");
                    var e = i.parents(GAG.ListController.selectors.LIST_VIEW).length > 0 ? "l" : "p";
                    GAG.Track.event("social", "fb.l", {
                        platform: "d",
                        entry: h,
                        view: e
                    })
                }, this));
                FB.Event.subscribe("edge.remove", b.proxy(function (g, j, f) {
                    var i = b(j.dom);
                    var h = i.closest(this.selectors.ENTRY_ENTITY).data("entry-id");
                    var e = i.parents(GAG.ListController.selectors.LIST_VIEW).length > 0 ? "l" : "p";
                    GAG.Track.event("social", "fb.rl", {
                        platform: "d",
                        entry: h,
                        view: e
                    })
                }, this));
                FB.Event.subscribe("comment.create", b.proxy(function (i) {
                    var f = i.href;
                    var h = b(this.selectors.ENTRY_ENTITY + '[data-entry-url="' + f + '"]');
                    var g = h.data("entry-id");
                    var e = h.parents(GAG.ListController.selectors.LIST_VIEW).length > 0 ? "l" : "p";
                    GAG.Track.event("social", "fb.c", {
                        platform: "d",
                        entry: g,
                        view: e
                    })
                }, this));
                FB.Event.subscribe("comment.remove", b.proxy(function (i) {
                    var f = i.href;
                    var h = b(this.selectors.ENTRY_ENTITY + '[data-entry-url="' + f + '"]');
                    var g = h.data("entry-id");
                    var e = h.parents(GAG.ListController.selectors.LIST_VIEW).length > 0 ? "l" : "p";
                    GAG.Track.event("social", "fb.rc", {
                        platform: "d",
                        entry: g,
                        view: e
                    })
                }, this))
            }, this))
        },
        replacePostUrl: function (f) {
            var e = "http://" + document.location.hostname + "/gag/" + f;
            if (typeof (a.history.pushState) != "undefined") {
                a.history.pushState({}, "", e)
            }
        },
        updatePostUrl: function (f) {
            var e = "http://" + document.location.hostname + "/gag/" + f;
            if (typeof (a.history.replaceState) != "undefined") {
                a.history.replaceState({}, "", e)
            }
        },
        recoverOrginialUrl: function () {
            a.history.go(-1)
        },
        showPostZoomOverlay: function (e) {
            var f = e.find("img").first().clone().removeAttr("class");
            b(this.selectors.MODAL_POST_ZOOM_CONTAINER).find(".badge-post-zoom-img").html("").append(f);
            GAG.OverlayController.showOverlay(this.selectors.MODAL_POST_ZOOM_CONTAINER)
        },
        hidePostZoomOverlay: function () {
            b(this.selectors.MODAL_POST_ZOOM_CONTAINER).addClass("hide");
            b("body").removeClass("no-scroll")
        },
        scrollToComment: function () {
            var e = b("#comment");
            b("html,body").animate({
                scrollTop: e.offset().top
            }, 100)
        },
        upvoteEntry: function (e) {
            b(e).find(this.selectors.ENTRY_UPVOTE_BUTTON).first().click()
        },
        downvoteEntry: function (e) {
            b(e).find(this.selectors.ENTRY_DOWNVOTE_BUTTON).first().click()
        },
        commentEntry: function (f) {
            var g = b(f).first();
            if (GAG.Page.isPostPage()) {
                this.scrollToComment()
            } else {
                if (f.length > 0) {
                    var e = b(f).find(this.selectors.ENTRY_COMMENT_BUTTON).first();
                    e.click();
                    a.open(e.attr("href"), "_blank")
                }
            }
        },
        playEntry: function (e) {
            var g = b(e).first();
            var h = g.find(this.selectors.ENTRY_EXPAND_BTN);
            var f = g.find(this.selectors.ENTRY_VIDEO_COVER);
            var i = g.find(this.selectors.ENTRY_ANIMATED_COVER);
            if (h.length) {
                h.click()
            } else {
                if (f.length) {
                    f.click()
                } else {
                    if (i.length) {
                        i.click()
                    }
                }
            }
        },
        prevEntry: function () {
            b(this.selectors.ENTRY_PREV_POST_ENTRY).click()
        },
        nextEntry: function () {
            b(this.selectors.ENTRY_NEXT_POST_ENTRY).click()
        },
        postCallback: function (g, e) {
            var f = GAG.PostController;
            if (b.inArray(g, f.availableCallbacks) >= 0) {
                f[g](e)
            }
        },
        postWillArchive: function (f) {
            var g = GAG.PostController;
            if (f.hasClass(g.selectors.ENTRY_CONTAINER_RAW)) {
                var e = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);
                if (e && e.length > 0 && e.hasClass("loading")) {
                    var h = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED + " img");
                    if (h && h.length > 0) {
                        h.unbind()
                    }
                }
            }
        },
        postDidArchive: function (e) {},
        postWillRestore: function (e) {},
        postDidRestore: function (f) {
            var g = GAG.PostController;
            if (f.hasClass(g.selectors.ENTRY_CONTAINER_RAW)) {
                var e = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);
                var j = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED);
                var i = f.find(g.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED + " img");
                var h = (i && i.length > 0);
                if (h && i[0].complete && e.hasClass("loading")) {
                    e.removeClass("loading");
                    e.removeClass("presenting");
                    e.addClass("hide")
                } else {
                    if (h && !i[0].complete && e.hasClass("loading")) {
                        e.addClass("loading");
                        e.removeClass("presenting");
                        g.bindImageLoadedEvent(f)
                    }
                }
            }
        },
    });
    GAG.PageController = b.extend({}, new GAG.Controller(), {
        docTitle: "",
        init: function () {
            this.bindElements();
            this.docTitle = document.title
        },
        getUniqueDomId: function (e) {
            var f;
            while (!f || document.getElementById(f)) {
                f = (e ? e : "jsid_dom") + "_" + parseInt((Math.random() * 999999), 10)
            }
            return f
        },
        _toastFadeDuration: 500,
        _showFooterNavAfter: 600,
        _sidebarStickyElementMarginTop: 20,
        _sidebarStickyHeight: 0,
        _topVolatileElementHeight: 0,
        _topStickyElementHeight: 0,
        _autoCompleteMinLength: 2,
        _autoCompleteMaxResult: 10,
        _isNotificationShown: false,
        _lastNotificationUpdateTs: false,
        _isUpdatingNotification: false,
        _isMarkingNotificationAsRead: false,
        _CLASS_STICKY: "sticked",
        _CLASS_EXPANDED: "expanded",
        _themeIdCookieKey: "themeId",
        selectors: {
            THEME_FILES: ".badge-theme-file",
            FOOTER_NAV: ".footer .buttons-area",
            PREV_ENTRY: "a.badge-prev-entry",
            NEXT_ENTRY: "a.badge-next-entry",
            SCROLL_TO_TOP: "a.badge-scroll-to-top",
            HEADER_TOP_NAV: ".badge-sticky-nav",
            HEADER_TOP_BANNER: ".badge-volatile-banner",
            HEADER_USER_MENU: "#jsid-header-user-menu",
            HEADER_USER_ITEM: "#jsid-header-user-menu-items",
            HEADER_FUNNY_MENU: "#jsid-header-funny-menu",
            HEADER_FUNNY_ITEM: "#jsid-header-funny-menu-items",
            HEADER_NOTIFICATION_MENU: "#jsid-header-notification-menu",
            HEADER_NOTIFICATION_ITEM: "#jsid-header-notification-items",
            HEADER_NOTIFICATION_CONTAINER: "#jsid-header-notification-items-container",
            HEADER_NOTIFICATION_SEE_ALL: "#jsid-header-notification-see-all",
            HEADER_UPLOAD_ITEM: ".badge-upload-items",
            HEADER_UPLOAD_MENU: "#jsid-upload-menu",
            HEADER_DOWNLOAD_MENU: "#jsid-header-download-menu",
            HEADER_DOWNLOAD_ITEM: "#jsid-header-download-menu-items",
            HEADER_SEARCH: ".badge-header-search",
            HEADER_SEARCH_INPUT: "#jsid-search-input",
            HEADER_TOAST: ".badge-toast-container",
            HEADER_TOAST_MESSAGE: ".badge-toast-message",
            HEADER_TOAST_CLOSE: ".badge-toast-close",
            SUBNAV_STICKY_STATIC: ".badge-sticky-subnav-static",
            CONTAINTER: "#container",
            PAGE: ".badge-page",
            CLICK_EVENT_SELECTOR: ".badge-evt, .badge-track",
            CLICK_EVENT_NOFOLLOW_SELECTOR: ".badge-track-no-follow"
        },
        onScroll: function () {
            this.checkFooterNavElements()
        },
        bindElements: function () {
            this.calculateHeights();
            this.bindStickyNav();
            this.bindFooterNavElements();
            this.bindCustomizeElements();
            this.bindUploadElements();
            this.bindUserSettingElements();
            this.bindGroupElements();
            this.bindDownloadElements();
            this.bindNotificationElements();
            this.bindSearchElements();
            this.bindToastElements();
            this.bindEventTracking();
            this.bindCloseAdvice();
            this.bindContactElements();
            this.bindEditorDashboardElements();
            this.bindPopupMenu()
        },
        calculateHeights: function () {
            this._topStickyElementHeight = b(this.selectors.HEADER_TOP_NAV).height();
            b(this.selectors.HEADER_TOP_BANNER).each(function () {
                GAG.PageController._topVolatileElementHeight += b(this).height()
            })
        },
        bindEditorDashboardElements: function () {
            b(".badge-period-dropdown-control .period").on("click", function () {
                event.preventDefault();
                b(this).next(".period-dropdown").toggleClass("hide")
            });
            b("#jsid-period-dropdown-from").datepicker({
                minDate: "-30D",
                maxDate: "+0D",
                changeMonth: true,
                numberOfMonths: 2,
                onClose: function (e) {
                    b("#jsid-period-dropdown-to").datepicker("option", "minDate", e)
                }
            });
            b("#jsid-period-dropdown-to").datepicker({
                minDate: "-30D",
                maxDate: "+0D",
                changeMonth: true,
                numberOfMonths: 2,
                onClose: function (e) {
                    b("#jsid-period-dropdown-from").datepicker("option", "maxDate", e)
                }
            });
            b("#jsid-period-dropdown-from, #jsid-period-dropdown-to, #ui-datepicker-div").click(function (e) {
                e.stopPropagation()
            });
            b(".badge-load-more-entry").on("click", function (h) {
                h.preventDefault();
                var g = b(this);
                g.data("original-text", g.text());
                g.text(g.data("loading-text"));
                var f = g.prop("href");
                if (typeof f != "undefined" && f != "") {
                    b.ajax({
                        url: f,
                        dataType: "json",
                        success: function (l) {
                            var e = "";
                            for (var j = 0; j < l.ids.length; j++) {
                                var m = l.ids[j];
                                e += l.items[m]
                            }
                            b(".badge-posts-items").append(e);
                            if (l.loadMoreUrl != "") {
                                g.prop("href", l.loadMoreUrl);
                                g.text(g.data("original-text"));
                                g.data("original-text", "");
                                g.data("original-url", l.loadMoreUrl)
                            } else {
                                g.removeAttr("href");
                                g.text("No more posts")
                            }
                        }
                    })
                }
            });
            b(".badge-second-col").on("change", function () {
                if (b(this).val() == "r") {
                    b(".badge-comment-col").addClass("hide");
                    b(".badge-report-col").removeClass("hide")
                } else {
                    if (b(this).val() == "c") {
                        b(".badge-comment-col").removeClass("hide");
                        b(".badge-report-col").addClass("hide")
                    }
                }
                b(".badge-update-url").each(function () {
                    var e = b(".badge-second-col").val();
                    var g = "&scol=";
                    if (e == "r") {
                        g += "r"
                    } else {
                        if (e == "c") {
                            g += "c"
                        }
                    }
                    var f = b(this).data("original-url") + g;
                    b(this).attr("href", f)
                })
            })
        },
        bindContactElements: function () {
            if (!GAG.Page.isContactPage()) {
                return
            }
            GAG.AccountController._showCaptcha();
            b("#jsid-contact-form").on("submit", b.proxy(function () {
                if (!b("#jsid-interaction-name").val().length) {
                    b("#jsid-contact-name-error").removeClass("hide");
                    return false
                } else {
                    b("#jsid-contact-name-error").addClass("hide")
                }
                if (!GAG.Validator.isValidEmail(b("#jsid-interaction-email").val())) {
                    b("#jsid-contact-email-error").removeClass("hide");
                    return false
                } else {
                    b("#jsid-contact-email-error").addClass("hide")
                }
                if (b("#jsid-email-category").val() == 0) {
                    b("#jsid-contact-category-error").removeClass("hide");
                    return false
                } else {
                    b("#jsid-contact-category-error").addClass("hide")
                }
                if (!b("#jsid-email-subject").val().length) {
                    b("#jsid-contact-subject-error").removeClass("hide");
                    return false
                } else {
                    b("#jsid-contact-subject-error").addClass("hide")
                }
                if (!b("#jsid-email-message").val().length) {
                    b("#jsid-contact-message-error").removeClass("hide");
                    return false
                } else {
                    b("#jsid-contact-message-error").addClass("hide")
                }
                var i = true;
                try {
                    if (Recaptcha) {
                        var g = Recaptcha.get_challenge();
                        var f = Recaptcha.get_response();
                        b("#recaptcha_challenge").val(g);
                        b("#recaptcha_response").val(f)
                    }
                } catch (h) {}
                if (!i) {
                    event.preventDefault();
                    return false
                }
                return true
            }, this))
        },
        bindSearchElements: function () {
            var g = b(this.selectors.HEADER_SEARCH);
            var e = b(this.selectors.HEADER_SEARCH_INPUT);
            var h = e.attr("id");
            b("body").on("mousedown", function (i) {
                if (e.length && i.target.id !== h && g.hasClass("selected") && !e.val().length) {
                    g.removeClass("selected");
                    e.removeAttr("placeholder")
                }
            });
            g.click(function () {
                if (!g.hasClass("selected")) {
                    g.addClass("selected");
                    e.attr("placeholder", e.data("placeholder")).focus();
                    return false
                }
            });
            if (e.length) {
                var f = {
                    url: "/tags/suggest",
                    appendTo: this.selectors.HEADER_SEARCH,
                    menuClass: "search-suggestion small"
                };
                this.loadAutoComplete(this.selectors.HEADER_SEARCH_INPUT, f)
            }
        },
        loadAutoComplete: function (e, f) {
            var g = {
                url: (typeof f.url === "undefined") ? "" : f.url,
                appendTo: (typeof f.appendTo === "undefined") ? "" : f.appendTo,
                minLength: (typeof f.minLength === "undefined") ? this._autoCompleteMinLength : f.minLength,
                maxResult: (typeof f.maxResult === "undefined") ? this._autoCompleteMaxResult : f.maxResult,
                menuClass: (typeof f.menuClass === "undefined") ? "" : f.menuClass
            };
            b(e).autocomplete({
                source: function (i, h) {
                    b.ajax({
                        url: g.url,
                        dataType: "json",
                        data: {
                            tag: i.term
                        },
                        success: function (m) {
                            var j = m.slice(0, g.maxResult);
                            var l = "<strong>" + i.term + "</strong>";
                            h(b.map(j, function (n) {
                                return {
                                    label: l + n.substr(i.term.length),
                                    value: n
                                }
                            }));
                            b(".ui-helper-hidden-accessible").addClass("hide")
                        }
                    })
                },
                minLength: g.minLength,
                appendTo: g.appendTo,
                open: function () {
                    var h = b(".ui-autocomplete");
                    h.removeAttr("class").addClass(g.menuClass).removeAttr("style");
                    b(".ui-helper-hidden-accessible").addClass("hide")
                },
                select: function (i) {
                    var h = b(i.currentTarget);
                    b(GAG.PageController.selectors.HEADER_SEARCH_INPUT).val(h.find(".ui-state-focus").first().text());
                    h.closest("form").submit()
                }
            }).data("ui-autocomplete")._renderItem = function (h, i) {
                return b("<li></li>").data("ui-autocomplete-item", i).append("<a>" + i.label + "</a>").appendTo(h)
            }
        },
        toggleMenu: function (e) {
            return !(b(e).toggleClass("hide").hasClass("hide"))
        },
        showMenu: function (e) {
            b(e).removeClass("hide")
        },
        hideMenu: function (e) {
            b(e).addClass("hide")
        },
        loadSpinner: function (e, f) {
            var g = {
                lines: (typeof f.lines === "undefined") ? 10 : f.lines,
                length: (typeof f.length === "undefined") ? 8 : f.length,
                width: (typeof f.width === "undefined") ? 4 : f.width,
                radius: (typeof f.radius === "undefined") ? 10 : f.radius,
                corners: (typeof f.corners === "undefined") ? 1 : f.corners,
                rotate: (typeof f.rotate === "undefined") ? 0 : f.rotate,
                color: (typeof f.color === "undefined") ? "#555" : f.color,
                speed: (typeof f.speed === "undefined") ? 1 : f.speed,
                trail: (typeof f.trail === "undefined") ? 60 : f.trail,
                shadow: (typeof f.shadow === "undefined") ? false : f.shadow,
                hwaccel: (typeof f.hwaccel === "undefined") ? false : f.hwaccel,
                className: (typeof f.className === "undefined") ? "spinner" : f.className,
                zIndex: (typeof f.zIndex === "undefined") ? 2000000000 : f.zIndex,
                top: (typeof f.top === "undefined") ? "auto" : f.top,
                left: (typeof f.left === "undefined") ? "auto" : f.left
            };
            var h = document.getElementById(e);
            var i = new Spinner(g).spin(h)
        },
        updateLanguage: function (g) {
            var e = GAG.Page.getBackUrl();
            var f = "http://" + GAG.Page.getDomain() + "/profile/setlanguage/lang/" + g + "?url=" + e;
            a.location.href = f
        },
        bindStickyNav: function () {
            if (!GAG.Page.isPostPage()) {
                b(a).scroll(b.proxy(function () {
                    var e = b(this.selectors.HEADER_TOP_NAV);
                    b(this.selectors.SUBNAV_STICKY_STATIC).height(e.height() + 1);
                    if (b(a).scrollTop() > this._topVolatileElementHeight && !e.hasClass(this._CLASS_STICKY)) {
                        e.css({
                            top: 0,
                            position: "fixed",
                            "z-index": 3
                        });
                        e.addClass(this._CLASS_STICKY)
                    } else {
                        if (b(a).scrollTop() <= this._topVolatileElementHeight && e.hasClass(this._CLASS_STICKY)) {
                            e.removeClass(this._CLASS_STICKY);
                            e.removeAttr("style")
                        }
                    }
                }, this))
            }
        },
        bindUserSettingElements: function () {
            b(this.selectors.HEADER_USER_MENU + ", " + this.selectors.HEADER_USER_ITEM).click(b.proxy(function (g) {
                g.stopPropagation();
                var f = this.toggleMenu(this.selectors.HEADER_USER_ITEM);
                this.hidePopupMenu(f ? this.selectors.HEADER_USER_ITEM : null)
            }, this))
        },
        hidePopupMenu: function (f) {
            var h = [this.selectors.HEADER_FUNNY_ITEM, this.selectors.HEADER_DOWNLOAD_ITEM, this.selectors.HEADER_USER_ITEM, this.selectors.HEADER_NOTIFICATION_ITEM, this.selectors.HEADER_UPLOAD_ITEM, GAG.PostController.selectors.MORE_SHARE_MENU];
            var g = {};
            g[this.selectors.HEADER_FUNNY_ITEM] = this.selectors.HEADER_FUNNY_MENU;
            g[this.selectors.HEADER_DOWNLOAD_ITEM] = this.selectors.HEADER_DOWNLOAD_MENU;
            g[this.selectors.HEADER_USER_ITEM] = this.selectors.HEADER_USER_MENU;
            g[this.selectors.HEADER_NOTIFICATION_ITEM] = this.selectors.HEADER_NOTIFICATION_MENU;
            g[this.selectors.HEADER_UPLOAD_ITEM] = this.selectors.HEADER_UPLOAD_MENU;
            g[GAG.PostController.selectors.MORE_SHARE_MENU] = GAG.PostController.selectors.MORE_SHARE_BUTTON;
            if (f != this.selectors.HEADER_NOTIFICATION_ITEM) {
                GAG.PageController._isNotificationShown = false
            }
            h = b.grep(h, function (l) {
                return l != f
            });
            b(h.join(",")).addClass("hide");
            for (var j in g) {
                var e = g[j];
                var i = "";
                switch (j) {
                case this.selectors.HEADER_FUNNY_ITEM:
                    i = "selected-alt";
                    break;
                case this.selectors.HEADER_USER_ITEM:
                    i = "selected";
                    e = e + " a";
                    break;
                case this.selectors.HEADER_DOWNLOAD_ITEM:
                    i = "selected";
                    break;
                case this.selectors.HEADER_NOTIFICATION_ITEM:
                    i = "selected";
                    e = e + " a";
                    break
                }
                if (j != f) {
                    b(e).removeClass("selected-alt").removeClass("selected")
                } else {
                    b(e).addClass(i)
                }
            }
        },
        bindPopupMenu: function () {
            b("body").on("click", b.proxy(function (f) {
                this.hidePopupMenu()
            }, this))
        },
        bindGroupElements: function () {
            b(this.selectors.HEADER_FUNNY_MENU + ", " + this.selectors.HEADER_FUNNY_ITEM).click(b.proxy(function (g) {
                g.stopPropagation();
                var f = this.toggleMenu(this.selectors.HEADER_FUNNY_ITEM, this.selectors.HEADER_FUNNY_MENU);
                this.hidePopupMenu(f ? this.selectors.HEADER_FUNNY_ITEM : null)
            }, this))
        },
        bindDownloadElements: function () {
            b(this.selectors.HEADER_DOWNLOAD_MENU + ", " + this.selectors.HEADER_DOWNLOAD_ITEM).click(b.proxy(function (g) {
                g.stopPropagation();
                var f = this.toggleMenu(this.selectors.HEADER_DOWNLOAD_ITEM);
                this.hidePopupMenu(f ? this.selectors.HEADER_DOWNLOAD_ITEM : null)
            }, this))
        },
        bindNotificationElements: function () {
            if (!GAG.Configs.get("user.id")) {
                return
            }
            b(this.selectors.HEADER_NOTIFICATION_ITEM).on("click", this.selectors.CLICK_EVENT_SELECTOR, b.proxy(this._handelClickEventTracking, this));
            b(this.selectors.HEADER_NOTIFICATION_ITEM).tinyscrollbar({
                invertscroll: true
            });
            GAG.PageController.getNotifications();
            b(document).click(b.proxy(function (f) {
                if (GAG.PageController._isNotificationShown) {
                    GAG.PageController._isNotificationShown = !GAG.PageController._isNotificationShown;
                    this.hideMenu(this.selectors.HEADER_NOTIFICATION_ITEM);
                    b(this.selectors.HEADER_NOTIFICATION_MENU).removeClass("menu");
                    b(this.selectors.HEADER_NOTIFICATION_MENU + " a").removeClass("selected")
                }
            }, this));
            b(this.selectors.HEADER_NOTIFICATION_MENU).click(b.proxy(function (f) {
                f.stopPropagation();
                f.preventDefault();
                if (GAG.PageController._isNotificationShown) {
                    this.hideMenu(this.selectors.HEADER_NOTIFICATION_ITEM);
                    b(this.selectors.HEADER_NOTIFICATION_MENU).removeClass("menu");
                    b(this.selectors.HEADER_NOTIFICATION_MENU + " a").removeClass("selected");
                    this._handelClickEventTracking(f)
                } else {
                    this.showMenu(this.selectors.HEADER_NOTIFICATION_ITEM);
                    b(this.selectors.HEADER_NOTIFICATION_MENU).addClass("menu");
                    b(this.selectors.HEADER_NOTIFICATION_MENU + " a").addClass("selected");
                    b(this.selectors.HEADER_NOTIFICATION_ITEM).tinyscrollbar_update({
                        invertscroll: true
                    });
                    GAG.PageController.markNotificationsAsRead();
                    this._handelClickEventTracking(f);
                    this.hidePopupMenu(this.selectors.HEADER_NOTIFICATION_ITEM)
                }
                GAG.PageController._isNotificationShown = !GAG.PageController._isNotificationShown
            }, this))
        },
        bindUploadElements: function () {
            b(this.selectors.HEADER_UPLOAD_MENU).click(b.proxy(function (f) {
                f.stopPropagation();
                this.toggleMenu(this.selectors.HEADER_UPLOAD_ITEM);
                this.hidePopupMenu(this.selectors.HEADER_UPLOAD_ITEM)
            }, this));
            b(".badge-upload-url").on("click", function (f) {
                f.preventDefault();
                b("#jsid-upload-url-btn").trigger("click")
            });
            b(".badge-upload-image").on("click", function (f) {
                f.preventDefault();
                b("#jsid-upload-file-btn").trigger("click")
            });
            b(".badge-upload-selector").on("click", function (f) {
                f.preventDefault();
                b(GAG.UploadController.selectors.UPLOAD_TITLE_INPUT).val("");
                b("#jsid-source-input").addClass("hide").val("");
                b("#upload-file input[type=checkbox]").removeAttr("checked");
                b("#upload-file p.error-message").text("");
                GAG.OverlayController.showOverlay("#modal-upload")
            })
        },
        bindCustomizeElements: function () {
            b(".badge-personalise-btn").on("click", function (f) {
                f.preventDefault();
                b(this).toggleClass("selected");
                b("#jsid-personalise-selector").slideToggle("fast", function () {})
            });
            b(".badge-personalise-options").on("click", function (g) {
                g.preventDefault();
                b(this).toggleClass("on");
                var f = b(this).find("input");
                if (f.val() == "1") {
                    f.val("")
                } else {
                    f.val("1")
                }
            });
            b(".badge-personalise-option-nsfw").on("click", function (h) {
                h.preventDefault();
                var g = (b(this).find("input").val() == "1") ? 0 : 1;
                if (!GAG.User.isLoggedIn()) {
                    var f = GAG.Page.getCookieOptions();
                    f.domain = "." + document.domain;
                    b.cookie("side_personalize", 1, f);
                    GAG.AccountController.setSafeMode(g, a.location.href)
                }
            });
            b("#jsid-personalise-btn-save").on("click", function (f) {
                f.preventDefault();
                b("#jsid-personalise-selector").slideUp("fast", function () {
                    b("#jsid-personalise-form").submit()
                })
            });
            b("#jsid-personalise-btn-reset").on("click", function (f) {
                f.preventDefault();
                var g = "This will remove all your manual personalisation settings.";
                if (confirm(g)) {
                    b("#jsid-personalise-form input[name=customize_reset]").val("1");
                    b("#jsid-personalise-selector").slideUp("fast", function () {
                        b("#jsid-personalise-form").submit()
                    })
                }
            })
        },
        resetCustomize: function () {
            b("#form-modal-customize").find("input:checkbox").each(function () {
                var e = b(this);
                if (e.data("checked")) {
                    e.attr("checked", "checked")
                } else {
                    e.removeAttr("checked")
                }
            })
        },
        bindFooterNavElements: function () {
            var g = b(this.selectors.SCROLL_TO_TOP);
            g.on("click", function (h) {
                h.preventDefault();
                GAG.KeyboardController.scrollToTop()
            });
            var f = b(this.selectors.PREV_ENTRY);
            f.on("click", function (h) {
                h.preventDefault();
                GAG.ListController.scrollToPrevEntry()
            });
            var e = b(this.selectors.NEXT_ENTRY);
            e.on("click", function (h) {
                h.preventDefault();
                GAG.ListController.scrollToNextEntry()
            })
        },
        checkFooterNavElements: function () {
            var e = b(a).scrollTop();
            if (e > this._showFooterNavAfter && !b(this.selectors.FOOTER_NAV).hasClass(this._CLASS_EXPANDED)) {
                b(this.selectors.FOOTER_NAV).show();
                b(this.selectors.FOOTER_NAV).addClass(this._CLASS_EXPANDED)
            } else {
                if (e <= this._showFooterNavAfter && b(this.selectors.FOOTER_NAV).hasClass(this._CLASS_EXPANDED)) {
                    b(this.selectors.FOOTER_NAV).hide();
                    b(this.selectors.FOOTER_NAV).removeClass(this._CLASS_EXPANDED)
                }
            }
        },
        bindToastElements: function () {
            b(this.selectors.HEADER_TOAST_CLOSE).click(b.proxy(function (e) {
                e.preventDefault();
                this.hideToast()
            }, this));
            if (b(this.selectors.HEADER_TOAST).is(":visible")) {
                setTimeout(b.proxy(function () {
                    this.hideToast()
                }, this), 5000)
            }
        },
        bindCloseAdvice: function () {
            b(".badge-advice-close").click(b.proxy(function (e) {
                e.preventDefault();
                var f = b(e.currentTarget);
                b(".badge-announcement-banner").addClass("hide");
                b(".badge-advice").removeClass("before");
                b.cookie("announcement_banner", 0, GAG.Page.getCookieOptions())
            }, this))
        },
        _trackGaEvent: function (g) {
            var i = g.attr("data-evt");
            if (!i) {
                return
            }
            i += "";
            var f = i.split(",");
            var h = "",
                l = "",
                e = "",
                j = 1;
            h = f.shift();
            l = f.shift();
            e = f.shift();
            GAG.GA.track(h, l, e, j)
        },
        _trackEvent: function (e) {
            var o = e.attr("data-track");
            if (!o || o == undefined) {
                return
            }
            o += "";
            var p = o.split(",");
            var h = p.shift();
            var n = p.shift();
            var l = p.shift();
            var i = p.shift();
            var f = p.shift();
            var m = p.shift();
            var j = p.shift();
            var g = {
                label: l,
                labelValue: i,
                platform: f,
                entry: m,
                view: j
            };
            GAG.Track.event(h, n, g)
        },
        _handelClickEventTracking: function (i) {
            var g = b(i.currentTarget);
            this._trackGaEvent(g);
            this._trackEvent(g);
            var f = g.prop("tagName");
            var e = g.attr("href") + "";
            var h = g.attr("target");
            var l = g.is(this.selectors.CLICK_EVENT_NOFOLLOW_SELECTOR);
            if (!l && f == "A" && (e.indexOf("http") === 0 || e.indexOf("/") === 0) && !h) {
                if (i) {
                    i.preventDefault()
                }
                var j = "window.location.href = '" + e + "';";
                a.setTimeout(j, 100)
            }
        },
        bindEventTracking: function () {
            b(this.selectors.CONTAINTER).on("click", this.selectors.CLICK_EVENT_SELECTOR, b.proxy(this._handelClickEventTracking, this))
        },
        _cleanToastColor: function (e) {
            e = b(e);
            var g = e.attr("class").split(/\s+/);
            for (var f = 0; f < g.length; f++) {
                if (g[f].substr(0, 12) == "toast-color-") {
                    e.removeClass(g[f])
                }
            }
        },
        setPageTitle: function (f) {
            this.docTitle = f;
            var e = GAG.PushController.unreadCount;
            var g = e > 0 ? "(" + e + ") " : "";
            document.title = g + f
        },
        setPageTitleWithSpecialChars: function (e) {
            var f = document.createElement("div");
            f.innerHTML = e;
            this.setPageTitle(f.firstChild.nodeValue)
        },
        refreshPageTitle: function () {
            this.setPageTitle(this.docTitle)
        },
        getWindowEffectiveScrollTop: function () {
            if (b(a).scrollTop() < this._topVolatileElementHeight) {
                return this._topVolatileElementHeight + this._topStickyElementHeight
            }
            return b(a).scrollTop() + this._topStickyElementHeight
        },
        scrollToTop: function () {
            b("html, body").animate({
                scrollTop: 0
            }, 300)
        },
        ensureLoggedIn: function (e) {
            if (GAG.User.isLoggedIn()) {
                return true
            } else {
                GAG.AccountController.presentSignupForm(e);
                return false
            }
        },
        showToast: function (g, f, h) {
            var e = b(this.selectors.HEADER_TOAST);
            e.hide();
            this._cleanToastColor(e);
            b(this.selectors.HEADER_TOAST).addClass("toast-color-" + f);
            b(this.selectors.HEADER_TOAST_MESSAGE).text(g);
            b(this.selectors.HEADER_TOAST).fadeIn(this._toastFadeDuration);
            if (typeof h != "undefined") {
                setTimeout(b.proxy(function () {
                    this.hideToast()
                }, this), h)
            }
        },
        hideToast: function () {
            b(this.selectors.HEADER_TOAST).fadeOut(this._toastFadeDuration)
        },
        getNotifications: function () {
            if (GAG.PageController._isUpdatingNotification) {
                return
            }
            GAG.PageController._isUpdatingNotification = true;
            var e = b.ajax({
                url: "/notifications.json",
                dataType: "json",
                success: function (f) {
                    GAG.PageController._isUpdatingNotification = false;
                    GAG.PageController._lastNotificationUpdateTs = (new Date()).getTime();
                    GAG.PageController.updateNotification(f)
                },
                error: function (f) {
                    GAG.PageController._isUpdatingNotification = false
                }
            })
        },
        markNotificationsAsRead: function () {
            if (GAG.PageController._isMarkingNotificationAsRead) {
                return
            }
            GAG.PageController._isMarkingNotificationAsRead = true;
            var g = GAG.Configs.get("configs.noti.read_state_url");
            var e = GAG.Configs.get("configs.noti.read_state_params");
            var f = b.ajax({
                url: g,
                data: e,
                dataType: "json",
                type: "POST",
                success: function (h) {
                    GAG.PageController._isMarkingNotificationAsRead = false;
                    if (h.status == "OK") {
                        GAG.PushController.updateNotificationUnreadCount(0)
                    }
                },
                error: function (h) {
                    GAG.PageController._isMarkingNotificationAsRead = false
                }
            })
        },
        markNotificationItemAsRead: function (g, f, e) {
            if (b(g).data("markedRead")) {
                return
            }
            b.ajax({
                url: "/notifications/mark-item",
                data: {
                    actionType: f,
                    objectId: e,
                    state: 1
                },
                dataType: "json",
                type: "POST",
                success: function (h) {
                    if (h.status == "OK") {
                        b(g).data("markedRead", true).removeClass("new")
                    }
                },
                error: function (h) {}
            })
        },
        updateNotification: function (g) {
            var e = b(this.selectors.HEADER_NOTIFICATION_CONTAINER);
            e.empty();
            if (g.status == "OK") {
                if (g.items.length > 0) {
                    for (var f = 0; f < g.items.length; f++) {
                        e.append(g.items[f]["message"])
                    }
                    if (GAG.PushController.unreadCount > 20) {
                        b(this.selectors.HEADER_NOTIFICATION_SEE_ALL).text("See " + (GAG.PushController.unreadCount - 20) + " more")
                    } else {
                        b(this.selectors.HEADER_NOTIFICATION_SEE_ALL).text("See all")
                    }
                } else {
                    e.append(g.message)
                }
            } else {
                e.append(g.message)
            }
            b(this.selectors.HEADER_NOTIFICATION_ITEM).tinyscrollbar({
                invertscroll: true
            })
        }
    });
    GAG.PushController = b.extend({}, new GAG.Controller(), {
        DELAY: 1000,
        INIT_DELAY: 2000,
        _lastBadgetTs: false,
        _minBadgeInterval: 5000,
        _regularLongPollingInterval: 180000,
        _checkUpdateQueueInterval: 1000,
        _isRequestingUpdate: false,
        unreadCount: 0,
        init: function () {},
        onWindowLoad: function () {
            if (!GAG.Configs.get("user.id")) {
                return
            }
            setTimeout(b.proxy(function () {
                this._initPush();
                this._initBadgeUpdate()
            }, this), this.INIT_DELAY)
        },
        selectors: {
            NOTIFICATION_UNREAD_COUNT: "#jsid-notification-unread-count"
        },
        _log: function (e) {
            if (console && console.log) {
                console.log(e)
            }
        },
        _pullNotificatons: function (f) {
            var e = b(this.selectors.NOTIFICATION_UNREAD_COUNT);
            if (!e) {
                return
            }
            this.putToUpdateQueue(f)
        },
        _initPush: function () {
            function f(m, n, i) {
                var l = {
                    type: "noti",
                    message: m,
                    id: n,
                    channel: i
                };
                GAG.PushController._log(l);
                GAG.PushController._pullNotificatons(l)
            }
            var g = {
                host: GAG.Configs.get("configs.noti.host"),
                port: GAG.Configs.get("configs.noti.port"),
                modes: GAG.Configs.get("configs.noti.modes")
            };
            if (!g.host || !g.port) {
                return
            }
            var j = new PushStream(g);
            j.onmessage = f;
            var e = GAG.Configs.get("configs.noti.channels");
            if (e instanceof Array) {
                for (var h = 0; h < e.length; h++) {
                    j.addChannel(e[h]);
                    GAG.PushController._log(e[h])
                }
            }
            j.connect()
        },
        _updateQueue: [],
        putToUpdateQueue: function (e) {
            this._updateQueue.push(e)
        },
        getNsReadStateCb: function (e) {
            GAG.PushController._isRequestingUpdate = false;
            GAG.PushController._lastBadgetTs = (new Date()).getTime();
            if (e && e.status == "OK") {
                if (GAG.PushController.unreadCount != e.payload.unreadCount) {
                    GAG.PageController.getNotifications()
                }
                GAG.PushController.updateNotificationUnreadCount(e.payload.unreadCount)
            } else {
                GAG.PushController._isRequestingUpdate = false
            }
        },
        _getNsReadState: function () {
            var f = GAG.Configs.get("configs.noti.read_state_url") + "?" + GAG.Configs.get("configs.noti.read_state_params");
            this._isRequestingUpdate = true;
            var e = b.ajax({
                url: f,
                type: "GET",
                dataType: "jsonp",
                jsonpCallback: "GAG.PushController.getNsReadStateCb"
            })
        },
        getNotificationBadge: function () {
            if (this._isRequestingUpdate) {
                return
            }
            return this._getNsReadState()
        },
        updateNotificationUnreadCount: function (f) {
            var e = b(this.selectors.NOTIFICATION_UNREAD_COUNT);
            if (!e) {
                return
            }
            if (f > 0) {
                GAG.PushController.unreadCount = f;
                e.text(f);
                e.removeClass("hide")
            } else {
                GAG.PushController.unreadCount = 0;
                e.text("0");
                e.addClass("hide")
            }
            GAG.PageController.refreshPageTitle()
        },
        checkUpdateQueue: function () {
            if (this._updateQueue.length > 0) {
                this._updateQueue = [];
                this.getNotificationBadge()
            }
        },
        processUpdateQueue: function () {
            var e = (new Date()).getTime();
            if (!this._lastBadgetTs || e - this._lastBadgetTs >= this._minBadgeInterval) {
                this.checkUpdateQueue()
            }
        },
        addRegularLongPolling: function () {
            this.putToUpdateQueue({})
        },
        scheduleRegularLongPolling: function () {
            this.addRegularLongPolling();
            this._regularLongPollingInterval = this._regularLongPollingInterval * 1.5;
            setTimeout("GAG.PushController.scheduleRegularLongPolling();", this._regularLongPollingInterval)
        },
        _initBadgeUpdate: function () {
            setInterval("GAG.PushController.processUpdateQueue();", this._checkUpdateQueueInterval);
            setTimeout("GAG.PushController.scheduleRegularLongPolling();", this._regularLongPollingInterval)
        }
    });
    GAG.ProfileController = b.extend({}, new GAG.Controller(), {
        init: function () {
            this.bindElements()
        },
        selectors: {
            SETTING_SOCIAL_UNLINK_BTNS: ".badge-social-unbind",
            PROFILE_AVATAR_IMAGE: "#jsid-profile-avatar",
            PROFILE_AVATAR_UPLOAD: "input[name=avatar]",
            PROFILE_DEFAULT_AVATAR: "input[name=default_avatar]",
            RANDOM_AVATAR_BTN: "#jsid-random-avatar-btn"
        },
        _bindSocialUnlinkButtons: function () {
            b(this.selectors.SETTING_SOCIAL_UNLINK_BTNS).on("click", function (h) {
                var g = b(this);
                var f = g.attr("data-platform");
                b.ajax({
                    url: "/connect/unlink",
                    data: {
                        platform: f
                    },
                    dataType: "json",
                    success: function (e) {
                        if (e && e.okay) {
                            a.location.reload()
                        }
                    },
                    error: function (e) {}
                })
            })
        },
        _bindRandomAvatarButton: function () {
            var g = b(this.selectors.PROFILE_AVATAR_IMAGE);
            var e = b(this.selectors.PROFILE_DEFAULT_AVATAR);
            var f = b(this.selectors.RANDOM_AVATAR_BTN);
            b(f).click(b.proxy(function () {
                var j = f.data("path");
                var h = f.data("max");
                var i = Math.floor(Math.random() * h + 1);
                var l = j.replace("%random%", i);
                if (g.attr("src") != l) {
                    g.attr("src", l);
                    e.val(i);
                    var m = b(this.selectors.PROFILE_AVATAR_UPLOAD);
                    m.replaceWith(m.clone())
                } else {
                    f.click()
                }
                return false
            }, this));
            b(document).on("change", this.selectors.PROFILE_AVATAR_UPLOAD, function () {
                e.val("")
            })
        },
        bindElements: function () {
            this._bindSocialUnlinkButtons();
            this._bindRandomAvatarButton()
        }
    });
    GAG.OverlayController = b.extend({}, new GAG.Controller(), {
        _isShown: false,
        _hideUsingBackground: true,
        selectors: {
            OVERLAY: "#overlay-container",
            OVERLAY_COMPONENT: "section",
            OVERLAY_CLOSE_BUTTON: ".badge-overlay-close",
            OVERLAY_COMPONENT_REPORT: ".badge-overlay-report",
            OVERLAY_COMPONENT_LOGIN: ".badge-overlay-signin",
            OVERLAY_COMPONENT_SIGNUP_FB: ".badge-overlay-signup-fb",
            OVERLAY_COMPONENT_SIGNUP_EMAIL: ".badge-overlay-signup-email"
        },
        init: function () {
            this.bindOverlayCloseButtons()
        },
        handlers: {
            closeButtonClickedHandler: function (e) {
                this.hideOverlay(b(e.currentTarget).closest(this.selectors.OVERLAY_COMPONENT));
                e.preventDefault()
            },
            overlayBackgroundClickedHandler: function (e) {
                if (this._hideUsingBackground) {
                    this.hideAllOverlay()
                }
            },
            overlayComponentClickedHandler: function (e) {
                e.stopPropagation()
            }
        },
        setHideUsingBackground: function (e) {
            this._hideUsingBackground = (e !== false)
        },
        showOverlay: function (e) {
            this.hideAllOverlay();
            this._isShown = true;
            b(this.selectors.OVERLAY).removeClass("hide");
            b("body").addClass("no-scroll");
            if (typeof e != "undefined") {
                b(e).removeClass("hide")
            }
        },
        hideOverlay: function (e) {
            this._isShown = false;
            b(this.selectors.OVERLAY).addClass("hide");
            b("body").removeClass("no-scroll");
            if (typeof e != "undefined") {
                b(e).addClass("hide")
            }
            GAG.PageController.resetCustomize()
        },
        hideAllOverlay: function () {
            this.hideOverlay(b(this.selectors.OVERLAY).children())
        },
        bindOverlayCloseButtons: function () {
            b(this.selectors.OVERLAY).find(this.selectors.OVERLAY_CLOSE_BUTTON).click(b.proxy(this.handlers.closeButtonClickedHandler, this));
            b(this.selectors.OVERLAY).click(b.proxy(this.handlers.overlayBackgroundClickedHandler, this));
            b(this.selectors.OVERLAY).find(this.selectors.OVERLAY_COMPONENT).click(b.proxy(this.handlers.overlayComponentClickedHandler, this))
        },
        isInsideOverlay: function (e) {
            return b(e).is(this.selectors.OVERLAY + " *")
        }
    });
    GAG.KeyboardController = b.extend({}, new GAG.Controller(), (function () {
        var e = {
            JUMP_PREV: "JUMP_PREV",
            JUMP_NEXT: "JUMP_NEXT",
            VOTE_UP: "VOTE_UP",
            VOTE_DOWN: "VOTE_DOWN",
            UNVOTE: "UNVOTE",
            JUMP_COMMENT: "JUMP_COMMENT",
            LEFT_ARROW: 37,
            RIGHT_ARROW: 39,
            KEY_END: 35,
            KEY_HOME: 36,
            _track: function (f) {
                GAG.GA.track("keyboard", f, GAG.Page.getPageKey())
            },
            _bindHomeEnd: function () {
                b(document).keydown(function (g) {
                    if (GAG.Utils.isCurrentlyFocusedInTypeable()) {
                        return true
                    }
                    if (g.keyCode == e.KEY_HOME || g.keyCode == e.KEY_END) {
                        g.preventDefault();
                        var f = GAG.PostController;
                        b("html,body").animate({
                            scrollTop: g.keyCode == e.KEY_END ? b(document).height() : 0
                        }, 100, "swing", function () {
                            GAG.ListController.handlers.recalculateInViewEntries();
                            b(f.selectors.ENTRY_CONTAINER + " " + f.selectors.ENTRY_STICKY_ELEMENTS).each(function () {
                                b(this).css({
                                    position: "",
                                    "z-index": "",
                                    top: ""
                                });
                                b(this).removeClass(f.CLASS_STICKY)
                            });
                            GAG.PostController.handlers.entryStickElementHandler();
                            GAG.ListScrollingController.handlers.scanFeaturedItemForArchive()
                        });
                        return false
                    }
                })
            },
            _bindJumpPrev: function (f) {
                e.bindAction(f, function () {
                    e._track("prev");
                    if (GAG.Page.isPostPage()) {
                        GAG.PostController.prevEntry()
                    } else {
                        e.jump(e.JUMP_PREV)
                    }
                });
                if (GAG.Page.isPostPage()) {
                    b(document).keydown(function (g) {
                        if (GAG.Utils.isCurrentlyFocusedInTypeable()) {
                            return true
                        }
                        if (g.keyCode == e.LEFT_ARROW) {
                            GAG.PostController.prevEntry();
                            return false
                        }
                    })
                }
            },
            _bindJumpNext: function (f) {
                e.bindAction(f, function () {
                    e._track("next");
                    if (GAG.Page.isPostPage()) {
                        GAG.GA.track("Next-Post-Toolbar-keyboard", "PostClicked", 1);
                        GAG.PostController.nextEntry()
                    } else {
                        e.jump(e.JUMP_NEXT)
                    }
                });
                if (GAG.Page.isPostPage()) {
                    b(document).keydown(function (g) {
                        if (GAG.Utils.isCurrentlyFocusedInTypeable()) {
                            return true
                        }
                        if (g.keyCode == e.RIGHT_ARROW) {
                            GAG.PostController.nextEntry();
                            return false
                        }
                    })
                }
            },
            _bindPostVoteUp: function (f) {
                e.bindAction(f, function () {
                    e._track("upvote");
                    var g = GAG.PostController;
                    var h = GAG.Page.isPostPage() ? b(g.selectors.ENTRY_CONTAINER) : GAG.ListController.findCurrentlyInFocusEntry();
                    g.upvoteEntry(h)
                })
            },
            _bindPostVoteDown: function (f) {
                e.bindAction(f, function () {
                    e._track("downvote");
                    var g = GAG.PostController;
                    var h = GAG.Page.isPostPage() ? b(g.selectors.ENTRY_CONTAINER) : GAG.ListController.findCurrentlyInFocusEntry();
                    g.downvoteEntry(h)
                })
            },
            _bindPostComment: function (f) {
                e.bindAction(f, function () {
                    e._track("comment");
                    GAG.PostController.commentEntry(GAG.ListController.findCurrentlyInFocusEntry())
                })
            },
            _bindScrollToTop: function (f) {
                e.bindAction(f, function () {
                    e._track("back-to-top");
                    e.scrollToTop()
                })
            },
            _bindRandomEntry: function (f) {
                e.bindAction(f, function () {
                    e._track("random");
                    e.randomEntry()
                })
            },
            _bindPostPlay: function (f) {
                e.bindAction(f, function () {
                    e._track("play");
                    var g = GAG.Page.isPostPage() ? b(GAG.PostController.selectors.ENTRY_CONTAINER) : GAG.ListController.findCurrentlyInFocusEntry();
                    GAG.PostController.playEntry(g)
                })
            },
            _bindElements: function () {
                e._bindScrollToTop("b");
                e._bindJumpPrev("k");
                e._bindJumpNext("j");
                e._bindRandomEntry("r");
                e._bindPostVoteUp("l");
                e._bindPostVoteDown("h");
                e._bindPostComment("c");
                e._bindPostPlay("p");
                e._bindHomeEnd()
            },
            _getKeyOptions: function () {
                return {
                    type: "keypress",
                    propagate: false,
                    target: document,
                    disable_in_input: true
                }
            },
            bindAction: function (f, g) {
                shortcut.add(f, g, e._getKeyOptions())
            },
            jump: function (f) {
                if (f == e.JUMP_PREV) {
                    GAG.ListController.scrollToPrevEntry()
                } else {
                    GAG.ListController.scrollToNextEntry()
                }
            },
            scrollToTop: function () {
                GAG.PageController.scrollToTop()
            },
            randomEntry: function () {
                GAG.Page.load("http://" + GAG.Page.getDomain() + "/random")
            }
        };
        return {
            init: function () {
                e._bindElements()
            },
            jump: e.jump,
            bindAction: e.bindAction,
            scrollToTop: e.scrollToTop,
            randomEntry: e.randomEntry
        }
    })());
    GAG.AccountController = b.extend({}, new GAG.Controller(), {
        init: function () {
            this.bindElements()
        },
        selectors: {
            HEADER_LOGIN_BUTTON: ".badge-login-button",
            HEADER_SIGNUP_BUTTON: ".badge-signup-button",
            LOGIN_FORM_NEXT_URL: "#jsid-login-form-next-url",
            LOGIN_FACEBOOK_CONNECT_BUTTON: ".badge-facebook-connect",
            LOGIN_GPLUS_CONNECT_BUTTON: ".badge-gplus-connect",
            SIGNUP_FB: "#signup-fb",
            SIGNUP_EMAIL: "#signup-email",
            SIGNUP_EMAIL_LINK: ".badge-signup-email-link",
            SIGNUP_LOGIN_LINK: ".badge-signup-login-link",
            SIGNUP_FORM_NEXT_URL: ".badge-signup-form-next-url",
            DELETE_CONFIRM_FORM: ".badge-delete-confirm-form",
            SHOW_DELETE_FORM_BTN: "#jsid-show-form-btn",
            RESET_SUBMIT_BTN: ".badge-reset-submit",
            RESET_SUBMIT_FROM: "#jsid-form-reset",
            RESET_NEW_PWD: "#jsid-reset-new-pwd",
            RESET_RETYPE_NEW_PWD: "#jsid-reset-retype-new-pwd"
        },
        bindElements: function () {
            this.bindSignupElements();
            this.bindLoginElements();
            this.bindDeleteConfirmElements();

            this.bindGplusConnectElements();
            this.bindResetForm();
            this.bindSignupPageElements()
        },
        bindSignupPageElements: function () {
            if (GAG.Page.isSignupPage()) {
                this._showCaptcha()
            }
        },
        bindSignupElements: function () {
            var e = this;
            b(this.selectors.HEADER_SIGNUP_BUTTON).on("click", b.proxy(function (f) {
                f.preventDefault();
                this.presentSignupForm()
            }, this));
            b(this.selectors.SIGNUP_EMAIL_LINK).click(b.proxy(function (f) {
                f.preventDefault();
                this.switchToEmailSignup()
            }, this));
            b(this.selectors.SIGNUP_LOGIN_LINK).each(function () {
                if (GAG.OverlayController.isInsideOverlay(b(this))) {
                    b(this).click(b.proxy(function (f) {
                        f.preventDefault();
                        this.presentLoginForm(b(this.selectors.SIGNUP_FORM_NEXT_URL).val())
                    }, e))
                }
            });
            b(this.selectors.SIGNUP_EMAIL).on("submit", b.proxy(function (h) {
                b(".badge-input-tzo").val(this._getTimezoneOffset());
                var j = true;
                try {
                    if (Recaptcha) {
                        var g = Recaptcha.get_challenge();
                        var f = Recaptcha.get_response();
                        b("#recaptcha_challenge").val(g);
                        b("#recaptcha_response").val(f)
                    }
                } catch (i) {}
                if (!j) {
                    h.preventDefault();
                    return false
                }
            }, this))
        },
        bindLoginElements: function () {
            b(this.selectors.HEADER_LOGIN_BUTTON).on("click", b.proxy(function (f) {
                f.preventDefault();
                this.presentLoginForm()
            }, this))
        },
        bindDeleteConfirmElements: function () {
            b(this.selectors.SHOW_DELETE_FORM_BTN).on("click", b.proxy(function () {
                b(this.selectors.DELETE_CONFIRM_FORM).removeClass("hide")
            }, this))
        },
        bindGplusConnectElements: function () {},
        bindResetForm: function () {
            b(this.selectors.RESET_SUBMIT_FROM).submit(b.proxy(function (f) {
                if (this.validateReset()) {
                    return true
                }
                return false
            }, this))
        },
        validateReset: function () {
            var f = b(this.selectors.RESET_NEW_PWD).val();
            var g = b(this.selectors.RESET_RETYPE_NEW_PWD).val();
            if (f != g) {
                b(".badge-error-message").text("Your new password doesn't seem to be matching.").removeClass("hide");
                return false
            }
            var e = GAG.Validator.isValidPassword(f, 6, 30);
            if (e) {
                b(".badge-error-message").text("").addClass("hide")
            } else {
                b(".badge-error-message").text("Invalid password.").removeClass("hide")
            }
            return e
        },
        _getTimezoneOffset: function () {
            return new Date().getTimezoneOffset() / -60
        },
        _captchaLoaded: false,
        _showCaptcha: function () {
            if (!this._captchaLoaded) {
                b("#captchawrapper").show();
                var g = b("#captchadiv").attr("data-apiKey");
                try {
                    if (Recaptcha) {
                        Recaptcha.create(g, "captchadiv", {
                            tabindex: 1,
                            theme: "custom",
                            custom_theme_widget: "recaptcha_widget",
                            lang: "en",
                            custom_translations: {
                                instructions_visual: "Type the two words:"
                            },
                            callback: function () {
                                GAG.AccountController._captchaLoaded = true
                            }
                        })
                    }
                } catch (f) {}
            }
        },
        presentLoginForm: function (e) {
            GAG.GA.track("login-signup", "shown", "login-form");
            GAG.OverlayController.showOverlay(GAG.OverlayController.selectors.OVERLAY_COMPONENT_LOGIN);
            b("#jsid-login-email-name").focus();
            if (typeof e != "undefined") {
                b(this.selectors.LOGIN_FORM_NEXT_URL).val(e);
                b(this.selectors.SIGNUP_FORM_NEXT_URL).val(e)
            } else {
                b(this.selectors.LOGIN_FORM_NEXT_URL).val(location.href);
                b(this.selectors.SIGNUP_FORM_NEXT_URL).val(location.href)
            }
        },
        presentSignupForm: function (f) {
            var e = "//www.google.com/recaptcha/api/js/recaptcha_ajax.js";
            if (!GAG.Utils.scriptLoaded(e)) {
                GAG.Utils.loadScript(e, false)
            }
            GAG.GA.track("login-signup", "shown", "signup-form");
            GAG.OverlayController.showOverlay(GAG.OverlayController.selectors.OVERLAY_COMPONENT_SIGNUP_FB);
            if (typeof f != "undefined") {
                b(this.selectors.LOGIN_FORM_NEXT_URL).val(f);
                b(this.selectors.SIGNUP_FORM_NEXT_URL).val(f)
            } else {
                b(this.selectors.LOGIN_FORM_NEXT_URL).val(location.href);
                b(this.selectors.SIGNUP_FORM_NEXT_URL).val(location.href)
            }
            this.switchToFacebookSignup()
        },
        switchToEmailSignup: function () {
            GAG.GA.track("login-signup", "shown", "email-signup-form");
            this._showCaptcha();
            b(this.selectors.SIGNUP_FB).addClass("hide");
            b(this.selectors.SIGNUP_EMAIL).removeClass("hide")
        },
        switchToFacebookSignup: function () {
            b(this.selectors.SIGNUP_EMAIL).addClass("hide");
            b(this.selectors.SIGNUP_FB).removeClass("hide")
        },
        setSafeMode: function (f, g) {
            if (typeof g == "undefined") {
                g = ""
            }
            var e = "/profile/safe-browse?enable=" + f + "&url=" + encodeURIComponent(g);
            a.location = e
        }
    });
    GAG.UploadController = b.extend({}, new GAG.Controller(), {
        TITLE_LENGTH_WARNING_THRESHOLD: 20,
        _sectionsCountMax: 0,
        init: function () {
            this._bindElements();
            this._sectionsCountMax = b("#jsid-section-list").data("sections-count-max")
        },
        selectors: {
            UPLOAD_URL_BTN: "#jsid-upload-url-btn",
            UPLOAD_FILE_BTN: "#jsid-upload-file-btn",
            UPLOAD_URL_INPUT: "#jsid-upload-url-input",
            UPLOAD_FILE_INPUT: "#jsid-upload-file-input",
            UPLOAD_CHAR_COUNT: "#jsid-char-count",
            UPLOAD_TITLE_INPUT: "#jsid-upload-title",
            UPLOAD_SOURCE_CHECKBOX: "#jsid-source-checkbox",
            UPLOAD_SOURCE_CHECKBOX_LABEL: "#jsid-source-checkbox-label",
            UPLOAD_SOURCE_INPUT: "#jsid-source-input",
            UPLOAD_SUBMIT_BTN: "#jsid-submit-btn",
            UPLOAD_DISABLE_MASK: "#jsid-disable-mask",
            UPLOAD_CONTENT_ERROR_LABEL: "#jsid-upload-content-error",
            UPLOAD_TITLE_ERROR_LABEL: "#jsid-upload-title-error",
            UPLOAD_ERROR_LABEL: "#jsid-upload-error",
            UPLOAD_SECTION_ERROR_LABEL: "#jsid-upload-section-error",
            UPLOAD_SECTION: "badge-upload-section",
            SECTION_LIST: "#jsid-section-list"
        },
        css: {
            METHOD_SELECTED: "upload-selected",
            TITLE_WARNING: "warn"
        },
        _resetElement: function (e) {
            e.wrap("<form>").closest("form").get(0).reset();
            e.unwrap()
        },
        _resetStyle: function () {
            b("." + this.selectors.UPLOAD_SECTION).parent().removeClass("selected")
        },
        _selectFileInput: function () {
            b(this.selectors.UPLOAD_URL_INPUT).addClass("hide").val("");
            b(this.selectors.UPLOAD_FILE_INPUT).removeClass("hide");
            this._resetStyle();
            b(this.selectors.UPLOAD_URL_BTN).removeClass(this.css.METHOD_SELECTED);
            b(this.selectors.UPLOAD_FILE_BTN).addClass(this.css.METHOD_SELECTED)
        },
        _selectUrlInput: function () {
            var e = b(this.selectors.UPLOAD_FILE_INPUT).addClass("hide");
            this._resetElement(e);
            this._resetStyle();
            b(this.selectors.UPLOAD_URL_INPUT).removeClass("hide");
            b(this.selectors.UPLOAD_FILE_BTN).removeClass(this.css.METHOD_SELECTED);
            b(this.selectors.UPLOAD_URL_BTN).addClass(this.css.METHOD_SELECTED)
        },
        _setCharCount: function (j) {
            var i = b(j.currentTarget);
            var f = parseInt(i.data("maxlength"), 10);
            var g = i.val().length;
            var l = f - g;
            var h = b(this.selectors.UPLOAD_CHAR_COUNT).text(l);
            if (l <= this.TITLE_LENGTH_WARNING_THRESHOLD) {
                h.addClass(this.css.TITLE_WARNING)
            } else {
                h.removeClass(this.css.TITLE_WARNING)
            }
        },
        _updateSourceFields: function (h) {
            var g = b(this.selectors.UPLOAD_SOURCE_CHECKBOX);
            var f = b(this.selectors.UPLOAD_SOURCE_INPUT);
            if (g.is(":checked")) {
                f.removeClass("hide")
            } else {
                f.addClass("hide")
            }
        },
        _updateSections: function (h) {
            var i = GAG.UploadController;
            var f = jQuery(i.selectors.SECTION_LIST + " input:checked").length;
            if (f <= i._sectionsCountMax) {
                var g = b(this);
                if (g.is(":checked")) {
                    g.parent().addClass("selected")
                } else {
                    g.parent().removeClass("selected")
                }
            } else {
                h.preventDefault()
            }
        },
        _getContentError: function () {
            var e = b(this.selectors.UPLOAD_URL_INPUT).val();
            var f = b(this.selectors.UPLOAD_FILE_INPUT + " input").val();
            if (!e && !f) {
                return "Please select a file or paste an image URL."
            }
            if (false) {
                if (e) {
                    if (!this._isValidImageUrl(e)) {
                        return "Unsupported image type."
                    }
                }
                if ((e && !this._isValidImageExtension(e)) || (f && !this._isValidImageExtension(f))) {
                    return "Unsupported image type."
                }
            }
        },
        _getTitleError: function () {
            var g = b(this.selectors.UPLOAD_TITLE_INPUT).val();
            var f = 6;
            var e = b(this.selectors.UPLOAD_TITLE_INPUT).data("maxlength");
            if (!g || g.length < f) {
                return "Your title doesn't look funny enough. Be creative!"
            } else {
                if (g.length > e) {
                    return "Your title is a bit long. Be concise!"
                }
            }
        },
        _isValidImageUrl: function (e) {
            var f = /^http(s?):\/\//i;
            return e.toLowerCase().match(f)
        },
        _isValidImageExtension: function (f) {
            f += "";
            var g = f.split(".").pop();
            var e = /(jpeg|jpg|gif|png)/i;
            return g.match(e)
        },
        validateForm: function () {
            var m = this._getContentError();
            var i = this._getTitleError();
            var f = true;
            var l = b(this.selectors.UPLOAD_CONTENT_ERROR_LABEL);
            var h = b(this.selectors.UPLOAD_TITLE_ERROR_LABEL);
            if (m) {
                l.removeClass("hide").text(m);
                f = false
            } else {
                l.addClass("hide").text("")
            }
            if (i) {
                h.removeClass("hide").text(i);
                f = false
            } else {
                h.addClass("hide").text("")
            }
            b(this.selectors.UPLOAD_ERROR_LABEL).addClass("hide").text("");
            var j = b("." + this.selectors.UPLOAD_SECTION + ":checked:enabled");
            var g = b(this.selectors.UPLOAD_SECTION_ERROR_LABEL);
            if (f) {
                var e = {
                    className: "upload-spinner",
                    top: "200px",
                    left: "205px"
                };
                GAG.PageController.loadSpinner("spinner-here", e);
                b(this.selectors.UPLOAD_SUBMIT_BTN).val("Uploading...");
                b(this.selectors.UPLOAD_DISABLE_MASK).addClass("disabled");
                b(GAG.OverlayController.selectors.OVERLAY).unbind("click")
            }
            return f
        },
        _pad: function (f, e) {
            if (e == undefined) {
                e = "0"
            }
            return f < 10 ? e + "" + f : f
        },
        _convertTime: function (l) {
            var j = 0;
            var g = 0;
            var e = 0;
            var f = 0;
            if (l < 0) {
                l = 0
            }
            j = parseInt(l / 86400);
            l -= j * 86400;
            g = parseInt(l / 3600);
            l -= g * 3600;
            e = parseInt(l / 60);
            l -= e * 60;
            f = l;
            var i = "";
            if (j > 0) {
                i += this._pad(j) + ":"
            }
            i += this._pad(g) + ":";
            i += this._pad(e) + ":";
            i += this._pad(f);
            return i
        },
        _updateDisplay: function (g) {
            var h = g.data("timestamp");
            var f = Math.round((new Date()).getTime() / 1000);
            var i = g.data("start");
            if (i == null) {
                i = f;
                g.data("start", i)
            }
            var e = f - i;
            g.text(this._convertTime(h - e))
        },
        _updateAll: function () {
            b(".badge-countdown").each(function () {
                GAG.UploadController._updateDisplay(b(this))
            })
        },
        _bindElements: function () {
            var e = b(".badge-countdown");
            if (e.length > 0) {
                GAG.UploadController._updateAll();
                setInterval("GAG.UploadController._updateAll();", 1000)
            }
            b(this.selectors.UPLOAD_URL_BTN).on("click", b.proxy(function (f) {
                f.preventDefault();
                this._selectUrlInput()
            }, this));
            b(this.selectors.UPLOAD_FILE_BTN).on("click", b.proxy(function (f) {
                f.preventDefault();
                this._selectFileInput()
            }, this));
            b(this.selectors.UPLOAD_TITLE_INPUT).on("keydown", b.proxy(function (f) {
                setTimeout(b.proxy(this._setCharCount, this, f), 50)
            }, this));
            b(this.selectors.UPLOAD_SOURCE_CHECKBOX).on("change", b.proxy(this._updateSourceFields, this));
            b("." + this.selectors.UPLOAD_SECTION).on("click", this._updateSections)
        }
    });
    GAG.App = (function () {
        var e = {
            _data: {},
            _models: [],
            _controllers: [],
            init: function () {
                var f = e;
                b(document).ready(function () {
                    f._onDomReady()
                });
                b(a).on("load", function () {
                    f._onWindowLoad()
                });
                b(a).on("scroll", function (g) {
                    f._runOnControllers("onScroll")
                });
                b(a).on("resize", function (g) {
                    f._runOnControllers("onResize")
                })
            },
            _onDomReady: function () {
                e._runOnModels("init");
                e._runOnControllers("init")
            },
            _onWindowLoad: function () {
                e._runOnModels("onWindowLoad");
                e._runOnControllers("onWindowLoad")
            },
            _runOnObjects: function (g, h) {
                if (!g instanceof Array) {
                    return
                }
                for (var f = 0; f < g.length; f++) {
                    if (g[f][h] && typeof g[f][h] == "function") {
                        g[f][h]()
                    }
                }
            },
            _runOnModels: function (f) {
                e._runOnObjects(e._models, f)
            },
            _runOnControllers: function (f) {
                e._runOnObjects(e._controllers, f)
            },
            addModel: function (g) {
                if (g instanceof Array) {
                    for (var f = 0; f < g.length; f++) {
                        e._models.push(g[f])
                    }
                } else {
                    e._models.push(g)
                }
                return this
            },
            addController: function (g) {
                if (g instanceof Array) {
                    for (var f = 0; f < g.length; f++) {
                        e._controllers.push(g[f])
                    }
                } else {
                    e._controllers.push(g)
                }
                return this
            },
            setData: function (f, g) {
                e._data[f] = g
            },
            _scriptMap: {
                facebook: "//connect.facebook.net/en_US/all.js",
                twitter: "//platform.twitter.com/widgets.js",
                "client:plusone": "https://apis.google.com/js/client:plusone.js?onload=gplusRender",
                ga: ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js",
            },
            _loadAsyncScript: function (f) {
                (function () {
                    var h = document.createElement("script");
                    h.type = "text/javascript";
                    h.async = true;
                    h.src = f;
                    h.async = true;
                    var g = document.getElementsByTagName("script")[0];
                    g.parentNode.insertBefore(h, g)
                })()
            },
            loadAsynScripts: function (f) {
                for (var g = 0; g < f.length; g++) {
                    if (e._scriptMap[f[g]]) {
                        e._loadAsyncScript(e._scriptMap[f[g]])
                    }
                }
            },
            loadConfigs: function (f) {
                GAG.Configs.load(f);
                return this
            }
        };
        return {
            init: e.init,
            loadConfigs: e.loadConfigs,
            loadAsynScripts: e.loadAsynScripts,
            addModel: e.addModel,
            addController: e.addController
        }
    })();
    var d = [GAG.User, GAG.Vote, GAG.Configs, GAG.Page, GAG.Facebook, GAG.GPlus, GAG.Track];
    var c = [GAG.CacheController, GAG.AdsController, GAG.ProfileController, GAG.ListController, GAG.OverlayController, GAG.FacebookController, GAG.GPlusController, GAG.ShareController, GAG.PostController, GAG.PageController, GAG.KeyboardController, GAG.HeadbarController, GAG.AccountController, GAG.ListScrollingController, GAG.FeaturedController, GAG.UploadController, GAG.PushController];
    GAG.App.addModel(d).addController(c).init()
})(jQuery, window);
window.Modernizr = function (aw, av, au) {
    function T(b) {
        am.cssText = b
    }
    function S(d, c) {
        return T(ai.join(d + ";") + (c || ""))
    }
    function R(d, c) {
        return typeof d === c
    }
    function Q(d, c) {
        return !!~ ("" + d).indexOf(c)
    }
    function P(f, c) {
        for (var h in f) {
            var g = f[h];
            if (!Q(g, "-") && am[g] !== au) {
                return c == "pfx" ? g : !0
            }
        }
        return !1
    }
    function O(g, c, j) {
        for (var i in g) {
            var h = c[g[i]];
            if (h !== au) {
                return j === !1 ? g[i] : R(h, "function") ? h.bind(j || c) : h
            }
        }
        return !1
    }
    function N(g, f, j) {
        var i = g.charAt(0).toUpperCase() + g.slice(1),
            h = (g + " " + ag.join(i + " ") + i).split(" ");
        return R(f, "string") || R(f, "undefined") ? P(h, f) : (h = (g + " " + af.join(i + " ") + i).split(" "), O(h, f, j))
    }
    function M() {
        ar.input = function (f) {
            for (var b = 0, a = f.length; b < a; b++) {
                ab[f[b]] = f[b] in al
            }
            return ab.list && (ab.list = !! av.createElement("datalist") && !! aw.HTMLDataListElement), ab
        }("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")), ar.inputtypes = function (b) {
            for (var m = 0, l, j, g, c = b.length; m < c; m++) {
                al.setAttribute("type", j = b[m]), l = al.type !== "text", l && (al.value = ak, al.style.cssText = "position:absolute;visibility:hidden;", /^range$/.test(j) && al.style.WebkitAppearance !== au ? (ap.appendChild(al), g = av.defaultView, l = g.getComputedStyle && g.getComputedStyle(al, null).WebkitAppearance !== "textfield" && al.offsetHeight !== 0, ap.removeChild(al)) : /^(search|tel)$/.test(j) || (/^(url|email)$/.test(j) ? l = al.checkValidity && al.checkValidity() === !1 : l = al.value != ak)), ac[b[m]] = !! l
            }
            return ac
        }("search tel url email datetime date month week time datetime-local number range color".split(" "))
    }
    var at = "2.6.2",
        ar = {},
        aq = !0,
        ap = av.documentElement,
        ao = "modernizr",
        an = av.createElement(ao),
        am = an.style,
        al = av.createElement("input"),
        ak = ":)",
        aj = {}.toString,
        ai = " -webkit- -moz- -o- -ms- ".split(" "),
        ah = "Webkit Moz O ms",
        ag = ah.split(" "),
        af = ah.toLowerCase().split(" "),
        ae = {
            svg: "http://www.w3.org/2000/svg"
        },
        ad = {},
        ac = {},
        ab = {},
        aa = [],
        Z = aa.slice,
        Y, X = function (v, u, t, s) {
            var r, q, p, o, h = av.createElement("div"),
                g = av.body,
                b = g || av.createElement("body");
            if (parseInt(t, 10)) {
                while (t--) {
                    p = av.createElement("div"), p.id = s ? s[t] : ao + (t + 1), h.appendChild(p)
                }
            }
            return r = ["&#173;", '<style id="s', ao, '">', v, "</style>"].join(""), h.id = ao, (g ? h : b).innerHTML += r, b.appendChild(h), g || (b.style.background = "", b.style.overflow = "hidden", o = ap.style.overflow, ap.style.overflow = "hidden", ap.appendChild(b)), q = u(h, v), g ? h.parentNode.removeChild(h) : (b.parentNode.removeChild(b), ap.style.overflow = o), !! q
        },
        W = function () {
            function c(h, g) {
                g = g || av.createElement(b[h] || "div"), h = "on" + h;
                var a = h in g;
                return a || (g.setAttribute || (g = av.createElement("div")), g.setAttribute && g.removeAttribute && (g.setAttribute(h, ""), a = R(g[h], "function"), R(g[h], "undefined") || (g[h] = au), g.removeAttribute(h))), g = null, a
            }
            var b = {
                select: "input",
                change: "input",
                submit: "form",
                reset: "form",
                error: "img",
                load: "img",
                abort: "img"
            };
            return c
        }(),
        V = {}.hasOwnProperty,
        U;
    !R(V, "undefined") && !R(V.call, "undefined") ? U = function (d, c) {
        return V.call(d, c)
    } : U = function (d, c) {
        return c in d && R(d.constructor.prototype[c], "undefined")
    }, Function.prototype.bind || (Function.prototype.bind = function (a) {
        var h = this;
        if (typeof h != "function") {
            throw new TypeError
        }
        var g = Z.call(arguments, 1),
            f = function () {
                if (this instanceof f) {
                    var b = function () {};
                    b.prototype = h.prototype;
                    var d = new b,
                        c = h.apply(d, g.concat(Z.call(arguments)));
                    return Object(c) === c ? c : d
                }
                return h.apply(a, g.concat(Z.call(arguments)))
            };
        return f
    }), ad.flexbox = function () {
        return N("flexWrap")
    }, ad.canvas = function () {
        var b = av.createElement("canvas");
        return !!b.getContext && !! b.getContext("2d")
    }, ad.canvastext = function () {
        return !!ar.canvas && !! R(av.createElement("canvas").getContext("2d").fillText, "function")
    }, ad.webgl = function () {
        return !!aw.WebGLRenderingContext
    }, ad.touch = function () {
        var a;
        return "ontouchstart" in aw || aw.DocumentTouch && av instanceof DocumentTouch ? a = !0 : X(["@media (", ai.join("touch-enabled),("), ao, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (b) {
            a = b.offsetTop === 9
        }), a
    }, ad.geolocation = function () {
        return "geolocation" in navigator
    }, ad.postmessage = function () {
        return !!aw.postMessage
    }, ad.websqldatabase = function () {
        return !!aw.openDatabase
    }, ad.indexedDB = function () {
        return !!N("indexedDB", aw)
    }, ad.hashchange = function () {
        return W("hashchange", aw) && (av.documentMode === au || av.documentMode > 7)
    }, ad.history = function () {
        return !!aw.history && !! history.pushState
    }, ad.draganddrop = function () {
        var b = av.createElement("div");
        return "draggable" in b || "ondragstart" in b && "ondrop" in b
    }, ad.websockets = function () {
        return "WebSocket" in aw || "MozWebSocket" in aw
    }, ad.rgba = function () {
        return T("background-color:rgba(150,255,150,.5)"), Q(am.backgroundColor, "rgba")
    }, ad.hsla = function () {
        return T("background-color:hsla(120,40%,100%,.5)"), Q(am.backgroundColor, "rgba") || Q(am.backgroundColor, "hsla")
    }, ad.multiplebgs = function () {
        return T("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(am.background)
    }, ad.backgroundsize = function () {
        return N("backgroundSize")
    }, ad.borderimage = function () {
        return N("borderImage")
    }, ad.borderradius = function () {
        return N("borderRadius")
    }, ad.boxshadow = function () {
        return N("boxShadow")
    }, ad.textshadow = function () {
        return av.createElement("div").style.textShadow === ""
    }, ad.opacity = function () {
        return S("opacity:.55"), /^0.55$/.test(am.opacity)
    }, ad.cssanimations = function () {
        return N("animationName")
    }, ad.csscolumns = function () {
        return N("columnCount")
    }, ad.cssgradients = function () {
        var e = "background-image:",
            d = "gradient(linear,left top,right bottom,from(#9f9),to(white));",
            f = "linear-gradient(left top,#9f9, white);";
        return T((e + "-webkit- ".split(" ").join(d + e) + ai.join(f + e)).slice(0, -e.length)), Q(am.backgroundImage, "gradient")
    }, ad.cssreflections = function () {
        return N("boxReflect")
    }, ad.csstransforms = function () {
        return !!N("transform")
    }, ad.csstransforms3d = function () {
        var b = !! N("perspective");
        return b && "webkitPerspective" in ap.style && X("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (a, d) {
            b = a.offsetLeft === 9 && a.offsetHeight === 3
        }), b
    }, ad.csstransitions = function () {
        return N("transition")
    }, ad.fontface = function () {
        var b;
        return X('@font-face {font-family:"font";src:url("https://")}', function (l, j) {
            var i = av.getElementById("smodernizr"),
                h = i.sheet || i.styleSheet,
                a = h ? h.cssRules && h.cssRules[0] ? h.cssRules[0].cssText : h.cssText || "" : "";
            b = /src/i.test(a) && a.indexOf(j.split(" ")[0]) === 0
        }), b
    }, ad.generatedcontent = function () {
        var b;
        return X(["#", ao, "{font:0/0 a}#", ao, ':after{content:"', ak, '";visibility:hidden;font:3px/1 a}'].join(""), function (a) {
            b = a.offsetHeight >= 3
        }), b
    }, ad.video = function () {
        var b = av.createElement("video"),
            f = !1;
        try {
            if (f = !! b.canPlayType) {
                f = new Boolean(f), f.ogg = b.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), f.h264 = b.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), f.webm = b.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, "")
            }
        } catch (e) {}
        return f
    }, ad.audio = function () {
        var b = av.createElement("audio"),
            f = !1;
        try {
            if (f = !! b.canPlayType) {
                f = new Boolean(f), f.ogg = b.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), f.mp3 = b.canPlayType("audio/mpeg;").replace(/^no$/, ""), f.wav = b.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), f.m4a = (b.canPlayType("audio/x-m4a;") || b.canPlayType("audio/aac;")).replace(/^no$/, "")
            }
        } catch (e) {}
        return f
    }, ad.localstorage = function () {
        try {
            return localStorage.setItem(ao, ao), localStorage.removeItem(ao), !0
        } catch (b) {
            return !1
        }
    }, ad.sessionstorage = function () {
        try {
            return sessionStorage.setItem(ao, ao), sessionStorage.removeItem(ao), !0
        } catch (b) {
            return !1
        }
    }, ad.webworkers = function () {
        return !!aw.Worker
    }, ad.applicationcache = function () {
        return !!aw.applicationCache
    }, ad.svg = function () {
        return !!av.createElementNS && !! av.createElementNS(ae.svg, "svg").createSVGRect
    }, ad.inlinesvg = function () {
        var b = av.createElement("div");
        return b.innerHTML = "<svg/>", (b.firstChild && b.firstChild.namespaceURI) == ae.svg
    }, ad.smil = function () {
        return !!av.createElementNS && /SVGAnimate/.test(aj.call(av.createElementNS(ae.svg, "animate")))
    }, ad.svgclippaths = function () {
        return !!av.createElementNS && /SVGClipPath/.test(aj.call(av.createElementNS(ae.svg, "clipPath")))
    };
    for (var L in ad) {
        U(ad, L) && (Y = L.toLowerCase(), ar[Y] = ad[L](), aa.push((ar[Y] ? "" : "no-") + Y))
    }
    return ar.input || M(), ar.addTest = function (e, c) {
        if (typeof e == "object") {
            for (var f in e) {
                U(e, f) && ar.addTest(f, e[f])
            }
        } else {
            e = e.toLowerCase();
            if (ar[e] !== au) {
                return ar
            }
            c = typeof c == "function" ? c() : c, typeof aq != "undefined" && aq && (ap.className += " " + (c ? "" : "no-") + e), ar[e] = c
        }
        return ar
    }, T(""), an = al = null, function (J, I) {
        function z(f, e) {
            var h = f.createElement("p"),
                g = f.getElementsByTagName("head")[0] || f.documentElement;
            return h.innerHTML = "x<style>" + e + "</style>", g.insertBefore(h.lastChild, g.firstChild)
        }
        function y() {
            var b = s.elements;
            return typeof b == "string" ? b.split(" ") : b
        }
        function x(d) {
            var c = B[d[D]];
            return c || (c = {}, C++, d[D] = C, B[C] = c), c
        }
        function w(b, h, e) {
            h || (h = I);
            if (A) {
                return h.createElement(b)
            }
            e || (e = x(h));
            var d;
            return e.cache[b] ? d = e.cache[b].cloneNode() : F.test(b) ? d = (e.cache[b] = e.createElem(b)).cloneNode() : d = e.createElem(b), d.canHaveChildren && !G.test(b) ? e.frag.appendChild(d) : d
        }
        function v(b, m) {
            b || (b = I);
            if (A) {
                return b.createDocumentFragment()
            }
            m = m || x(b);
            var l = m.frag.cloneNode(),
                j = 0,
                i = y(),
                h = i.length;
            for (; j < h; j++) {
                l.createElement(i[j])
            }
            return l
        }
        function u(d, c) {
            c.cache || (c.cache = {}, c.createElem = d.createElement, c.createFrag = d.createDocumentFragment, c.frag = c.createFrag()), d.createElement = function (a) {
                return s.shivMethods ? w(a, d, c) : c.createElem(a)
            }, d.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + y().join().replace(/\w+/g, function (b) {
                return c.createElem(b), c.frag.createElement(b), 'c("' + b + '")'
            }) + ");return n}")(s, c.frag)
        }
        function t(b) {
            b || (b = I);
            var d = x(b);
            return s.shivCSS && !E && !d.hasCSS && (d.hasCSS = !! z(b, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), A || u(b, d), b
        }
        var H = J.html5 || {},
            G = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
            F = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
            E, D = "_html5shiv",
            C = 0,
            B = {},
            A;
        (function () {
            try {
                var b = I.createElement("a");
                b.innerHTML = "<xyz></xyz>", E = "hidden" in b, A = b.childNodes.length == 1 ||
                function () {
                    I.createElement("a");
                    var c = I.createDocumentFragment();
                    return typeof c.cloneNode == "undefined" || typeof c.createDocumentFragment == "undefined" || typeof c.createElement == "undefined"
                }()
            } catch (d) {
                E = !0, A = !0
            }
        })();
        var s = {
            elements: H.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",
            shivCSS: H.shivCSS !== !1,
            supportsUnknownElements: A,
            shivMethods: H.shivMethods !== !1,
            type: "default",
            shivDocument: t,
            createElement: w,
            createDocumentFragment: v
        };
        J.html5 = s, t(I)
    }(this, av), ar._version = at, ar._prefixes = ai, ar._domPrefixes = af, ar._cssomPrefixes = ag, ar.hasEvent = W, ar.testProp = function (b) {
        return P([b])
    }, ar.testAllProps = N, ar.testStyles = X, ar.prefixed = function (e, d, f) {
        return d ? N(e, d, f) : N(e, "pfx")
    }, ap.className = ap.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (aq ? " js " + aa.join(" ") : ""), ar
}(this, this.document), function (ad, ac, ab) {
    function aa(b) {
        return "[object Function]" == P.call(b)
    }
    function Z(b) {
        return "string" == typeof b
    }
    function Y() {}
    function X(b) {
        return !b || "loaded" == b || "complete" == b || "uninitialized" == b
    }
    function W() {
        var b = O.shift();
        M = 1, b ? b.t ? R(function () {
            ("c" == b.t ? L.injectCss : L.injectJs)(b.s, 0, b.a, b.x, b.e, 1)
        }, 0) : (b(), W()) : M = 0
    }
    function V(w, v, t, s, q, p, n) {
        function m(a) {
            if (!g && X(h.readyState) && (x.r = g = 1, !M && W(), h.onload = h.onreadystatechange = null, a)) {
                "img" != w && R(function () {
                    I.removeChild(h)
                }, 50);
                for (var c in D[v]) {
                    D[v].hasOwnProperty(c) && D[v][c].onload()
                }
            }
        }
        var n = n || L.errorTimeout,
            h = ac.createElement(w),
            g = 0,
            b = 0,
            x = {
                t: t,
                s: v,
                e: q,
                a: p,
                x: n
            };
        1 === D[v] && (b = 1, D[v] = []), "object" == w ? h.data = v : (h.src = v, h.type = w), h.width = h.height = "0", h.onerror = h.onload = h.onreadystatechange = function () {
            m.call(this, b)
        }, O.splice(s, 0, x), "img" != w && (b || 2 === D[v] ? (I.insertBefore(h, J ? null : Q), R(m, n)) : D[v].push(h))
    }
    function U(g, e, j, i, h) {
        return M = 0, e = e || "j", Z(g) ? V("c" == e ? G : H, g, e, this.i++, j, i, h) : (O.splice(this.i++, 0, g), 1 == O.length && W()), this
    }
    function T() {
        var b = L;
        return b.loader = {
            load: U,
            i: 0
        }, b
    }
    var S = ac.documentElement,
        R = ad.setTimeout,
        Q = ac.getElementsByTagName("script")[0],
        P = {}.toString,
        O = [],
        M = 0,
        K = "MozAppearance" in S.style,
        J = K && !! ac.createRange().compareNode,
        I = J ? S : Q.parentNode,
        S = ad.opera && "[object Opera]" == P.call(ad.opera),
        S = !! ac.attachEvent && !S,
        H = K ? "object" : S ? "script" : "img",
        G = S ? "script" : H,
        F = Array.isArray ||
    function (b) {
        return "[object Array]" == P.call(b)
    }, E = [], D = {}, C = {
        timeout: function (d, c) {
            return c.length && (d.timeout = c[0]), d
        }
    }, N, L;
    L = function (e) {
        function c(i) {
            var i = i.split("!"),
                h = E.length,
                r = i.pop(),
                q = i.length,
                r = {
                    url: r,
                    origUrl: r,
                    prefixes: i
                },
                p, l, j;
            for (l = 0; l < q; l++) {
                j = i[l].split("="), (p = C[j.shift()]) && (r = p(r, j))
            }
            for (l = 0; l < h; l++) {
                r = E[l](r)
            }
            return r
        }
        function o(b, t, s, r, q) {
            var p = c(b),
                l = p.autoCallback;
            p.url.split(".").pop().split("?").shift(), p.bypass || (t && (t = aa(t) ? t : t[b] || t[r] || t[b.split("/").pop().split("?")[0]]), p.instead ? p.instead(b, t, s, r, q) : (D[p.url] ? p.noexec = !0 : D[p.url] = 1, s.load(p.url, p.forceCSS || !p.forceJS && "css" == p.url.split(".").pop().split("?").shift() ? "c" : ab, p.noexec, p.attrs, p.timeout), (aa(t) || aa(l)) && s.load(function () {
                T(), t && t(p.origUrl, q, r), l && l(p.origUrl, q, r), D[p.url] = 2
            })))
        }
        function n(x, w) {
            function v(b, h) {
                if (b) {
                    if (Z(b)) {
                        h || (s = function () {
                            var i = [].slice.call(arguments);
                            r.apply(this, i), q()
                        }), o(b, s, w, 0, u)
                    } else {
                        if (Object(b) === b) {
                            for (g in p = function () {
                                var a = 0,
                                    i;
                                for (i in b) {
                                    b.hasOwnProperty(i) && a++
                                }
                                return a
                            }(), b) {
                                b.hasOwnProperty(g) && (!h && !--p && (aa(s) ? s = function () {
                                    var i = [].slice.call(arguments);
                                    r.apply(this, i), q()
                                } : s[g] = function (i) {
                                    return function () {
                                        var a = [].slice.call(arguments);
                                        i && i.apply(this, a), q()
                                    }
                                }(r[g])), o(b[g], s, w, g, u))
                            }
                        }
                    }
                } else {
                    !h && q()
                }
            }
            var u = !! x.test,
                t = x.load || x.both,
                s = x.callback || Y,
                r = s,
                q = x.complete || Y,
                p, g;
            v(u ? x.yep : x.nope, !! t), t && v(t)
        }
        var m, f, d = this.yepnope.loader;
        if (Z(e)) {
            o(e, 0, d, 0)
        } else {
            if (F(e)) {
                for (m = 0; m < e.length; m++) {
                    f = e[m], Z(f) ? o(f, 0, d, 0) : F(f) ? L(f) : Object(f) === f && n(f, d)
                }
            } else {
                Object(e) === e && n(e, d)
            }
        }
    }, L.addPrefix = function (d, c) {
        C[d] = c
    }, L.addFilter = function (b) {
        E.push(b)
    }, L.errorTimeout = 10000, null == ac.readyState && ac.addEventListener && (ac.readyState = "loading", ac.addEventListener("DOMContentLoaded", N = function () {
        ac.removeEventListener("DOMContentLoaded", N, 0), ac.readyState = "complete"
    }, 0)), ad.yepnope = T(), ad.yepnope.executeStack = W, ad.yepnope.injectJs = function (r, q, p, n, m, h) {
        var g = ac.createElement("script"),
            f, b, n = n || L.errorTimeout;
        g.src = r;
        for (b in p) {
            g.setAttribute(b, p[b])
        }
        q = h ? W : q || Y, g.onreadystatechange = g.onload = function () {
            !f && X(g.readyState) && (f = 1, q(), g.onload = g.onreadystatechange = null)
        }, R(function () {
            f || (f = 1, q(1))
        }, n), m ? g.onload() : Q.parentNode.insertBefore(g, Q)
    }, ad.yepnope.injectCss = function (b, o, n, m, l, h) {
        var m = ac.createElement("link"),
            f, o = h ? W : o || Y;
        m.href = b, m.rel = "stylesheet", m.type = "text/css";
        for (f in n) {
            m.setAttribute(f, n[f])
        }
        l || (Q.parentNode.insertBefore(m, Q), R(o, 0))
    }
}(this, document), Modernizr.load = function () {
    yepnope.apply(window, [].slice.call(arguments, 0))
};
(function (a, b) {
    if (typeof exports == "object") {
        module.exports = b()
    } else {
        if (typeof define == "function" && define.amd) {
            define(b)
        } else {
            a.Spinner = b()
        }
    }
})(this, function () {
    var D = ["webkit", "Moz", "ms", "O"],
        y = {},
        v;

    function j(c, d) {
        var a = document.createElement(c || "div"),
            f;
        for (f in d) {
            a[f] = d[f]
        }
        return a
    }
    function m(c) {
        for (var d = 1, a = arguments.length; d < a; d++) {
            c.appendChild(arguments[d])
        }
        return c
    }
    var b = function () {
            var a = j("style", {
                type: "text/css"
            });
            m(document.getElementsByTagName("head")[0], a);
            return a.sheet || a.styleSheet
        }();

    function E(G, c, e, H) {
        var r = ["opacity", c, ~~ (G * 100), e, H].join("-"),
            i = 0.01 + e / H * 100,
            h = Math.max(1 - (1 - G) / c * (100 - i), G),
            p = v.substring(0, v.indexOf("Animation")).toLowerCase(),
            F = p && "-" + p + "-" || "";
        if (!y[r]) {
            b.insertRule("@" + F + "keyframes " + r + "{0%{opacity:" + h + "}" + i + "%{opacity:" + G + "}" + (i + 0.01) + "%{opacity:1}" + (i + c) % 100 + "%{opacity:" + G + "}100%{opacity:" + h + "}}", b.cssRules.length);
            y[r] = 1
        }
        return r
    }
    function B(d, a) {
        var f = d.style,
            h, c;
        if (f[a] !== undefined) {
            return a
        }
        a = a.charAt(0).toUpperCase() + a.slice(1);
        for (c = 0; c < D.length; c++) {
            h = D[c] + a;
            if (f[h] !== undefined) {
                return h
            }
        }
    }
    function x(c, d) {
        for (var a in d) {
            c.style[B(c, a) || a] = d[a]
        }
        return c
    }
    function q(c) {
        for (var d = 1; d < arguments.length; d++) {
            var a = arguments[d];
            for (var f in a) {
                if (c[f] === undefined) {
                    c[f] = a[f]
                }
            }
        }
        return c
    }
    function z(a) {
        var c = {
            x: a.offsetLeft,
            y: a.offsetTop
        };
        while (a = a.offsetParent) {
            c.x += a.offsetLeft, c.y += a.offsetTop
        }
        return c
    }
    var C = {
        lines: 12,
        length: 7,
        width: 5,
        radius: 10,
        rotate: 0,
        corners: 1,
        color: "#000",
        direction: 1,
        speed: 1,
        trail: 100,
        opacity: 1 / 4,
        fps: 20,
        zIndex: 2000000000,
        className: "spinner",
        top: "auto",
        left: "auto",
        position: "relative"
    };

    function g(a) {
        if (typeof this == "undefined") {
            return new g(a)
        }
        this.opts = q(a || {}, g.defaults, C)
    }
    g.defaults = {};
    q(g.prototype, {
        spin: function (O) {
            this.stop();
            var I = this,
                i = I.opts,
                d = I.el = x(j(0, {
                    className: i.className
                }), {
                    position: i.position,
                    width: 0,
                    zIndex: i.zIndex
                }),
                P = i.radius + i.length + i.width,
                L, F;
            if (O) {
                O.insertBefore(d, O.firstChild || null);
                F = z(O);
                L = z(d);
                x(d, {
                    left: (i.left == "auto" ? F.x - L.x + (O.offsetWidth >> 1) : parseInt(i.left, 10) + P) + "px",
                    top: (i.top == "auto" ? F.y - L.y + (O.offsetHeight >> 1) : parseInt(i.top, 10) + P) + "px"
                })
            }
            d.setAttribute("role", "progressbar");
            I.lines(d, I.opts);
            if (!v) {
                var N = 0,
                    f = (i.lines - 1) * (1 - i.direction) / 2,
                    J, G = i.fps,
                    o = G / i.speed,
                    K = (1 - i.opacity) / (o * i.trail / 100),
                    H = o / i.lines;
                (function M() {
                    N++;
                    for (var a = 0; a < i.lines; a++) {
                        J = Math.max(1 - (N + (i.lines - a) * H) % o * K, i.opacity);
                        I.opacity(d, a * i.direction + f, J, i)
                    }
                    I.timeout = I.el && setTimeout(M, ~~ (1000 / G))
                })()
            }
            return I
        },
        stop: function () {
            var a = this.el;
            if (a) {
                clearTimeout(this.timeout);
                if (a.parentNode) {
                    a.parentNode.removeChild(a)
                }
                this.el = undefined
            }
            return this
        },
        lines: function (h, n) {
            var i = 0,
                f = (n.lines - 1) * (1 - n.direction) / 2,
                c;

            function o(d, a) {
                return x(j(), {
                    position: "absolute",
                    width: n.length + n.width + "px",
                    height: n.width + "px",
                    background: d,
                    boxShadow: a,
                    transformOrigin: "left",
                    transform: "rotate(" + ~~ (360 / n.lines * i + n.rotate) + "deg) translate(" + n.radius + "px,0)",
                    borderRadius: (n.corners * n.width >> 1) + "px"
                })
            }
            for (; i < n.lines; i++) {
                c = x(j(), {
                    position: "absolute",
                    top: 1 + ~ (n.width / 2) + "px",
                    transform: n.hwaccel ? "translate3d(0,0,0)" : "",
                    opacity: n.opacity,
                    animation: v && E(n.opacity, n.trail, f + i * n.direction, n.lines) + " " + 1 / n.speed + "s linear infinite"
                });
                if (n.shadow) {
                    m(c, x(o("#000", "0 0 4px #000"), {
                        top: 2 + "px"
                    }))
                }
                m(h, m(c, o(n.color, "0 0 1px rgba(0,0,0,.1)")))
            }
            return h
        },
        opacity: function (c, d, a) {
            if (d < c.childNodes.length) {
                c.childNodes[d].style.opacity = a
            }
        }
    });

    function A() {
        function a(c, d) {
            return j("<" + c + ' xmlns="urn:schemas-microsoft.com:vml" class="spin-vml">', d)
        }
        b.addRule(".spin-vml", "behavior:url(#default#VML)");
        g.prototype.lines = function (p, n) {
            var f = n.length + n.width,
                c = 2 * f;

            function H() {
                return x(a("group", {
                    coordsize: c + " " + c,
                    coordorigin: -f + " " + -f
                }), {
                    width: c,
                    height: c
                })
            }
            var F = -(n.width + n.length) * 2 + "px",
                h = x(H(), {
                    position: "absolute",
                    top: F,
                    left: F
                }),
                t;

            function G(l, i, d) {
                m(h, m(x(H(), {
                    rotation: 360 / n.lines * l + "deg",
                    left: ~~i
                }), m(x(a("roundrect", {
                    arcsize: n.corners
                }), {
                    width: f,
                    height: n.width,
                    left: n.radius,
                    top: -n.width >> 1,
                    filter: d
                }), a("fill", {
                    color: n.color,
                    opacity: n.opacity
                }), a("stroke", {
                    opacity: 0
                }))))
            }
            if (n.shadow) {
                for (t = 1; t <= n.lines; t++) {
                    G(t, -2, "progid:DXImageTransform.Microsoft.Blur(pixelradius=2,makeshadow=1,shadowopacity=.3)")
                }
            }
            for (t = 1; t <= n.lines; t++) {
                G(t)
            }
            return m(p, h)
        };
        g.prototype.opacity = function (d, f, c, h) {
            var l = d.firstChild;
            h = h.shadow && h.lines || 0;
            if (l && f + h < l.childNodes.length) {
                l = l.childNodes[f + h];
                l = l && l.firstChild;
                l = l && l.firstChild;
                if (l) {
                    l.opacity = c
                }
            }
        }
    }
    var w = x(j("group"), {
        behavior: "url(#default#VML)"
    });
    if (!B(w, "transform") && w.adj) {
        A()
    } else {
        v = B(w, "animation")
    }
    return g
});
(function (d) {
    d.tiny = d.tiny || {};
    d.tiny.scrollbar = {
        options: {
            axis: "y",
            wheel: 40,
            scroll: true,
            lockscroll: true,
            size: "auto",
            sizethumb: "auto",
            invertscroll: false
        }
    };
    d.fn.tinyscrollbar = function (a) {
        var b = d.extend({}, d.tiny.scrollbar.options, a);
        this.each(function () {
            d(this).data("tsb", new c(d(this), b))
        });
        return this
    };
    d.fn.tinyscrollbar_update = function (a) {
        return d(this).data("tsb").update(a)
    };

    function c(F, P) {
        var L = this,
            C = F,
            M = {
                obj: d(".viewport", F)
            },
            O = {
                obj: d(".overview", F)
            },
            S = {
                obj: d(".scrollbar", F)
            },
            J = {
                obj: d(".track", S.obj)
            },
            G = {
                obj: d(".thumb", S.obj)
            },
            K = P.axis === "x",
            I = K ? "left" : "top",
            A = K ? "Width" : "Height",
            E = 0,
            a = {
                start: 0,
                now: 0
            },
            H = {},
            R = "ontouchstart" in document.documentElement;

        function T() {
            L.update();
            D();
            return L
        }
        this.update = function (e) {
            M[P.axis] = M.obj[0]["offset" + A];
            O[P.axis] = O.obj[0]["scroll" + A];
            O.ratio = M[P.axis] / O[P.axis];
            S.obj.toggleClass("disable", O.ratio >= 1);
            J[P.axis] = P.size === "auto" ? M[P.axis] : P.size;
            G[P.axis] = Math.min(J[P.axis], Math.max(0, (P.sizethumb === "auto" ? (J[P.axis] * O.ratio) : P.sizethumb)));
            S.ratio = P.sizethumb === "auto" ? (O[P.axis] / J[P.axis]) : (O[P.axis] - M[P.axis]) / (J[P.axis] - G[P.axis]);
            E = (e === "relative" && O.ratio <= 1) ? Math.min((O[P.axis] - M[P.axis]), Math.max(0, E)) : 0;
            E = (e === "bottom" && O.ratio <= 1) ? (O[P.axis] - M[P.axis]) : isNaN(parseInt(e, 10)) ? E : parseInt(e, 10);
            z()
        };

        function z() {
            var e = A.toLowerCase();
            G.obj.css(I, E / S.ratio);
            O.obj.css(I, -E);
            H.start = G.obj.offset()[I];
            S.obj.css(e, J[P.axis]);
            J.obj.css(e, J[P.axis]);
            G.obj.css(e, G[P.axis])
        }
        function D() {
            if (!R) {
                G.obj.bind("mousedown", N);
                J.obj.bind("mouseup", B)
            } else {
                M.obj[0].ontouchstart = function (e) {
                    if (1 === e.touches.length) {
                        N(e.touches[0]);
                        e.stopPropagation()
                    }
                }
            }
            if (P.scroll && window.addEventListener) {
                C[0].addEventListener("DOMMouseScroll", b, false);
                C[0].addEventListener("mousewheel", b, false);
                C[0].addEventListener("MozMousePixelScroll", function (e) {
                    e.preventDefault()
                }, false)
            } else {
                if (P.scroll) {
                    C[0].onmousewheel = b
                }
            }
        }
        function N(e) {
            d("body").addClass("noSelect");
            var f = parseInt(G.obj.css(I), 10);
            H.start = K ? e.pageX : e.pageY;
            a.start = f == "auto" ? 0 : f;
            if (!R) {
                d(document).bind("mousemove", B);
                d(document).bind("mouseup", Q);
                G.obj.bind("mouseup", Q)
            } else {
                document.ontouchmove = function (g) {
                    g.preventDefault();
                    B(g.touches[0])
                };
                document.ontouchend = Q
            }
        }
        function b(g) {
            if (O.ratio < 1) {
                var e = g || window.event,
                    f = e.wheelDelta ? e.wheelDelta / 120 : -e.detail / 3;
                E -= f * P.wheel;
                E = Math.min((O[P.axis] - M[P.axis]), Math.max(0, E));
                G.obj.css(I, E / S.ratio);
                O.obj.css(I, -E);
                if (P.lockscroll || (E !== (O[P.axis] - M[P.axis]) && E !== 0)) {
                    e = d.event.fix(e);
                    e.preventDefault()
                }
            }
        }
        function B(e) {
            if (O.ratio < 1) {
                if (P.invertscroll && R) {
                    a.now = Math.min((J[P.axis] - G[P.axis]), Math.max(0, (a.start + (H.start - (K ? e.pageX : e.pageY)))))
                } else {
                    a.now = Math.min((J[P.axis] - G[P.axis]), Math.max(0, (a.start + ((K ? e.pageX : e.pageY) - H.start))))
                }
                E = a.now * S.ratio;
                O.obj.css(I, -E);
                G.obj.css(I, a.now)
            }
        }
        function Q() {
            d("body").removeClass("noSelect");
            d(document).unbind("mousemove", B);
            d(document).unbind("mouseup", Q);
            G.obj.unbind("mouseup", Q);
            document.ontouchmove = document.ontouchend = null
        }
        return T()
    }
}(jQuery));