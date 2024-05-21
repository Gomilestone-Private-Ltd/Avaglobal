!(function (e) {
    var t,
        n,
        s,
        a,
        i = "mmenu";
    e[i] ||
        ((e[i] = function (e, t, n) {
            (this.$menu = e),
                (this._api = [
                    "bind",
                    "init",
                    "update",
                    "setSelected",
                    "getInstance",
                    "openPanel",
                    "closePanel",
                    "closeAllPanels",
                ]),
                (this.opts = t),
                (this.conf = n),
                (this.vars = {}),
                (this.cbck = {}),
                "function" == typeof this.___deprecated && this.___deprecated(),
                this._initMenu(),
                this._initAnchors();
            var s = this.$menu.children(this.conf.panelNodetype);
            return (
                this._initAddons(),
                this.init(s),
                "function" == typeof this.___debug && this.___debug(),
                this
            );
        }),
        (e[i].version = "5.3.1"),
        (e[i].addons = {}),
        (e[i].uniqueId = 0),
        (e[i].defaults = {
            extensions: [],
            navbar: {
                add: !0,
                title: "Menu",
                titleLink: "panel",
            },
            onClick: {
                setSelected: !0,
            },
            slidingSubmenus: !0,
        }),
        (e[i].configuration = {
            classNames: {
                divider: "Divider",
                inset: "Inset",
                panel: "Panel",
                selected: "Selected",
                spacer: "Spacer",
                vertical: "Vertical",
            },
            clone: !1,
            openingInterval: 25,
            panelNodetype: "ul, ol, div",
            transitionDuration: 400,
        }),
        (e[i].prototype = {
            init: function (e) {
                (e = e.not("." + t.nopanel)),
                    (e = this._initPanels(e)),
                    this.trigger("init", e),
                    this.trigger("update");
            },
            update: function () {
                this.trigger("update");
            },
            setSelected: function (e) {
                this.$menu
                    .find("." + t.listview)
                    .children()
                    .removeClass(t.selected),
                    e.addClass(t.selected),
                    this.trigger("setSelected", e);
            },
            openPanel: function (e) {
                var n = e.parent();
                if (n.hasClass(t.vertical)) {
                    var s = n.parents("." + t.subopened);
                    if (s.length) return this.openPanel(s.first());
                    n.addClass(t.opened);
                } else {
                    if (e.hasClass(t.current)) return;
                    var a = this.$menu.children("." + t.panel),
                        i = a.filter("." + t.current);
                    a
                        .removeClass(t.highest)
                        .removeClass(t.current)
                        .not(e)
                        .not(i)
                        .not("." + t.vertical)
                        .addClass(t.hidden),
                        e.hasClass(t.opened)
                            ? e
                                  .nextAll("." + t.opened)
                                  .addClass(t.highest)
                                  .removeClass(t.opened)
                                  .removeClass(t.subopened)
                            : (e.addClass(t.highest), i.addClass(t.subopened)),
                        e.removeClass(t.hidden).addClass(t.current),
                        setTimeout(function () {
                            e.removeClass(t.subopened).addClass(t.opened);
                        }, this.conf.openingInterval);
                }
                this.trigger("openPanel", e);
            },
            closePanel: function (e) {
                var n = e.parent();
                n.hasClass(t.vertical) &&
                    (n.removeClass(t.opened), this.trigger("closePanel", e));
            },
            closeAllPanels: function () {
                this.$menu
                    .find("." + t.listview)
                    .children()
                    .removeClass(t.selected)
                    .filter("." + t.vertical)
                    .removeClass(t.opened);
                var e = this.$menu.children("." + t.panel).first();
                this.$menu
                    .children("." + t.panel)
                    .not(e)
                    .removeClass(t.subopened)
                    .removeClass(t.opened)
                    .removeClass(t.current)
                    .removeClass(t.highest)
                    .addClass(t.hidden),
                    this.openPanel(e);
            },
            togglePanel: function (e) {
                var n = e.parent();
                n.hasClass(t.vertical) &&
                    this[n.hasClass(t.opened) ? "closePanel" : "openPanel"](e);
            },
            getInstance: function () {
                return this;
            },
            bind: function (e, t) {
                (this.cbck[e] = this.cbck[e] || []), this.cbck[e].push(t);
            },
            trigger: function () {
                var e = Array.prototype.slice.call(arguments),
                    t = e.shift();
                if (this.cbck[t])
                    for (var n = 0, s = this.cbck[t].length; s > n; n++)
                        this.cbck[t][n].apply(this, e);
            },
            _initMenu: function () {
                this.opts.offCanvas &&
                    this.conf.clone &&
                    ((this.$menu = this.$menu.clone(!0)),
                    this.$menu
                        .add(this.$menu.find("[id]"))
                        .filter("[id]")
                        .each(function () {
                            e(this).attr("id", t.mm(e(this).attr("id")));
                        })),
                    this.$menu.contents().each(function () {
                        3 == e(this)[0].nodeType && e(this).remove();
                    }),
                    this.$menu.parent().addClass(t.wrapper);
                var n = [t.menu];
                this.opts.slidingSubmenus || n.push(t.vertical),
                    (this.opts.extensions = this.opts.extensions.length
                        ? "mm-" + this.opts.extensions.join(" mm-")
                        : ""),
                    this.opts.extensions && n.push(this.opts.extensions),
                    this.$menu.addClass(n.join(" "));
            },
            _initPanels: function (s) {
                var a = this,
                    i = this.__findAddBack(s, "ul, ol");
                this.__refactorClass(
                    i,
                    this.conf.classNames.inset,
                    "inset"
                ).addClass(t.nolistview + " " + t.nopanel),
                    i.not("." + t.nolistview).addClass(t.listview);
                var o = this.__findAddBack(s, "." + t.listview).children();
                this.__refactorClass(
                    o,
                    this.conf.classNames.selected,
                    "selected"
                ),
                    this.__refactorClass(
                        o,
                        this.conf.classNames.divider,
                        "divider"
                    ),
                    this.__refactorClass(
                        o,
                        this.conf.classNames.spacer,
                        "spacer"
                    ),
                    this.__refactorClass(
                        this.__findAddBack(s, "." + this.conf.classNames.panel),
                        this.conf.classNames.panel,
                        "panel"
                    );
                var r = e(),
                    d = s
                        .add(s.find("." + t.panel))
                        .add(
                            this.__findAddBack(s, "." + t.listview)
                                .children()
                                .children(this.conf.panelNodetype)
                        )
                        .not("." + t.nopanel);
                this.__refactorClass(
                    d,
                    this.conf.classNames.vertical,
                    "vertical"
                ),
                    this.opts.slidingSubmenus || d.addClass(t.vertical),
                    d.each(function () {
                        var n = e(this),
                            s = n;
                        n.is("ul, ol")
                            ? (n.wrap('<div class="' + t.panel + '" />'),
                              (s = n.parent()))
                            : s.addClass(t.panel);
                        var i = n.attr("id");
                        n.removeAttr("id"),
                            s.attr("id", i || a.__getUniqueId()),
                            n.hasClass(t.vertical) &&
                                (n.removeClass(a.conf.classNames.vertical),
                                s.add(s.parent()).addClass(t.vertical)),
                            (r = r.add(s));
                    });
                var l = e("." + t.panel, this.$menu);
                r.each(function () {
                    var s = e(this),
                        i = (d = s.parent()).children("a, span").first();
                    if (
                        (d.is("." + t.menu) ||
                            (d.data(n.sub, s), s.data(n.parent, d)),
                        !d.children("." + t.next).length &&
                            d.parent().is("." + t.listview))
                    ) {
                        var o = s.attr("id"),
                            r = e(
                                '<a class="' +
                                    t.next +
                                    '" href="#' +
                                    o +
                                    '" data-target="#' +
                                    o +
                                    '" />'
                            ).insertBefore(i);
                        i.is("span") && r.addClass(t.fullsubopen);
                    }
                    if (
                        !s.children("." + t.navbar).length &&
                        !d.hasClass(t.vertical)
                    ) {
                        if (d.parent().is("." + t.listview))
                            var d = d.closest("." + t.panel);
                        else
                            d = (i = d
                                .closest("." + t.panel)
                                .find('a[href="#' + s.attr("id") + '"]')
                                .first()).closest("." + t.panel);
                        var l = e('<div class="' + t.navbar + '" />');
                        if (d.length) {
                            o = d.attr("id");
                            switch (a.opts.navbar.titleLink) {
                                case "anchor":
                                    _url = i.attr("href");
                                    break;
                                case "panel":
                                case "parent":
                                    _url = "#" + o;
                                    break;
                                case "none":
                                default:
                                    _url = !1;
                            }
                            l
                                .append(
                                    '<a class="' +
                                        t.btn +
                                        " " +
                                        t.prev +
                                        '" href="#' +
                                        o +
                                        '" data-target="#' +
                                        o +
                                        '"></a>'
                                )
                                .append(
                                    '<a class="' +
                                        t.title +
                                        '"' +
                                        (_url ? ' href="' + _url + '"' : "") +
                                        ">" +
                                        i.text() +
                                        "</a>"
                                )
                                .prependTo(s),
                                a.opts.navbar.add && s.addClass(t.hasnavbar);
                        } else
                            a.opts.navbar.title &&
                                (l
                                    .append(
                                        '<a class="' +
                                            t.title +
                                            '">' +
                                            a.opts.navbar.title +
                                            "</a>"
                                    )
                                    .prependTo(s),
                                a.opts.navbar.add && s.addClass(t.hasnavbar));
                    }
                });
                var c = this.__findAddBack(s, "." + t.listview)
                    .children("." + t.selected)
                    .removeClass(t.selected)
                    .last()
                    .addClass(t.selected);
                c
                    .add(c.parentsUntil("." + t.menu, "li"))
                    .filter("." + t.vertical)
                    .addClass(t.opened)
                    .end()
                    .not("." + t.vertical)
                    .each(function () {
                        e(this)
                            .parentsUntil("." + t.menu, "." + t.panel)
                            .not("." + t.vertical)
                            .first()
                            .addClass(t.opened)
                            .parentsUntil("." + t.menu, "." + t.panel)
                            .not("." + t.vertical)
                            .first()
                            .addClass(t.opened)
                            .addClass(t.subopened);
                    }),
                    c
                        .children("." + t.panel)
                        .not("." + t.vertical)
                        .addClass(t.opened)
                        .parentsUntil("." + t.menu, "." + t.panel)
                        .not("." + t.vertical)
                        .first()
                        .addClass(t.opened)
                        .addClass(t.subopened);
                var h = l.filter("." + t.opened);
                return (
                    h.length || (h = r.first()),
                    h.addClass(t.opened).last().addClass(t.current),
                    r
                        .not("." + t.vertical)
                        .not(h.last())
                        .addClass(t.hidden)
                        .end()
                        .appendTo(this.$menu),
                    r
                );
            },
            _initAnchors: function () {
                var n = this;
                a.$body.on(s.click + "-oncanvas", "a[href]", function (s) {
                    var o = e(this),
                        r = !1,
                        d = n.$menu.find(o).length;
                    for (var l in e[i].addons)
                        if ((r = e[i].addons[l].clickAnchor.call(n, o, d)))
                            break;
                    if (!r && d) {
                        var c = o.attr("href");
                        if (c.length > 1 && "#" == c.slice(0, 1))
                            try {
                                var h = e(c, n.$menu);
                                h.is("." + t.panel) &&
                                    ((r = !0),
                                    n[
                                        o.parent().hasClass(t.vertical)
                                            ? "togglePanel"
                                            : "openPanel"
                                    ](h));
                            } catch (e) {}
                    }
                    if (
                        (r && s.preventDefault(),
                        !r &&
                            d &&
                            o.is("." + t.listview + " > li > a") &&
                            !o.is('[rel="external"]') &&
                            !o.is('[target="_blank"]'))
                    ) {
                        n.__valueOrFn(n.opts.onClick.setSelected, o) &&
                            n.setSelected(e(s.target).parent());
                        var u = n.__valueOrFn(
                            n.opts.onClick.preventDefault,
                            o,
                            "#" == c.slice(0, 1)
                        );
                        u && s.preventDefault(),
                            n.__valueOrFn(n.opts.onClick.blockUI, o, !u) &&
                                a.$html.addClass(t.blocking),
                            n.__valueOrFn(n.opts.onClick.close, o, u) &&
                                n.close();
                    }
                });
            },
            _initAddons: function () {
                for (var t in e[i].addons)
                    e[i].addons[t].add.call(this),
                        (e[i].addons[t].add = function () {});
                for (var t in e[i].addons) e[i].addons[t].setup.call(this);
            },
            __api: function () {
                var t = this,
                    n = {};
                return (
                    e.each(this._api, function () {
                        var e = this;
                        n[e] = function () {
                            var s = t[e].apply(t, arguments);
                            return void 0 === s ? n : s;
                        };
                    }),
                    n
                );
            },
            __valueOrFn: function (e, t, n) {
                return "function" == typeof e
                    ? e.call(t[0])
                    : void 0 === e && void 0 !== n
                    ? n
                    : e;
            },
            __refactorClass: function (e, n, s) {
                return e
                    .filter("." + n)
                    .removeClass(n)
                    .addClass(t[s]);
            },
            __findAddBack: function (e, t) {
                return e.find(t).add(e.filter(t));
            },
            __filterListItems: function (e) {
                return e.not("." + t.divider).not("." + t.hidden);
            },
            __transitionend: function (e, t, n) {
                var a = !1,
                    i = function () {
                        a || t.call(e[0]), (a = !0);
                    };
                e.one(s.transitionend, i),
                    e.one(s.webkitTransitionEnd, i),
                    setTimeout(i, 1.1 * n);
            },
            __getUniqueId: function () {
                return t.mm(e[i].uniqueId++);
            },
        }),
        (e.fn[i] = function (o, r) {
            return (
                e[i].glbl ||
                    ((a = {
                        $wndw: e(window),
                        $html: e("html"),
                        $body: e("body"),
                    }),
                    (t = {}),
                    (n = {}),
                    (s = {}),
                    e.each([t, n, s], function (e, t) {
                        t.add = function (e) {
                            for (
                                var n = 0, s = (e = e.split(" ")).length;
                                s > n;
                                n++
                            )
                                t[e[n]] = t.mm(e[n]);
                        };
                    }),
                    (t.mm = function (e) {
                        return "mm-" + e;
                    }),
                    t.add(
                        "wrapper menu panel nopanel current highest opened subopened navbar hasnavbar title btn prev next listview nolistview inset vertical selected divider spacer hidden fullsubopen"
                    ),
                    (t.umm = function (e) {
                        return "mm-" == e.slice(0, 3) && (e = e.slice(3)), e;
                    }),
                    (n.mm = function (e) {
                        return "mm-" + e;
                    }),
                    n.add("parent sub"),
                    (s.mm = function (e) {
                        return e + ".mm";
                    }),
                    s.add(
                        "transitionend webkitTransitionEnd mousedown mouseup touchstart touchmove touchend click keydown"
                    ),
                    (e[i]._c = t),
                    (e[i]._d = n),
                    (e[i]._e = s),
                    (e[i].glbl = a)),
                (o = e.extend(!0, {}, e[i].defaults, o)),
                (r = e.extend(!0, {}, e[i].configuration, r)),
                this.each(function () {
                    var t = e(this);
                    if (!t.data(i)) {
                        var n = new e[i](t, o, r);
                        t.data(i, n.__api());
                    }
                })
            );
        }),
        (e[i].support = {
            touch: "ontouchstart" in window || navigator.msMaxTouchPoints,
        }));
})(jQuery),
    (function (e) {
        var t,
            n,
            s,
            a,
            i = "mmenu",
            o = "offCanvas";
        (e[i].addons[o] = {
            setup: function () {
                if (this.opts[o]) {
                    var n = this.opts[o],
                        s = this.conf[o];
                    (a = e[i].glbl),
                        (this._api = e.merge(this._api, [
                            "open",
                            "close",
                            "setPage",
                        ])),
                        ("top" == n.position || "bottom" == n.position) &&
                            (n.zposition = "front"),
                        "string" != typeof s.pageSelector &&
                            (s.pageSelector = "> " + s.pageNodetype),
                        (a.$allMenus = (a.$allMenus || e()).add(this.$menu)),
                        (this.vars.opened = !1);
                    var r = [t.offcanvas];
                    "left" != n.position && r.push(t.mm(n.position)),
                        "back" != n.zposition && r.push(t.mm(n.zposition)),
                        this.$menu
                            .addClass(r.join(" "))
                            .parent()
                            .removeClass(t.wrapper),
                        this.setPage(a.$page),
                        this._initBlocker(),
                        this["_initWindow_" + o](),
                        this.$menu[s.menuInjectMethod + "To"](
                            s.menuWrapperSelector
                        );
                }
            },
            add: function () {
                (t = e[i]._c),
                    (n = e[i]._d),
                    (s = e[i]._e),
                    t.add(
                        "offcanvas slideout modal background opening blocker page"
                    ),
                    n.add("style"),
                    s.add("resize");
            },
            clickAnchor: function (e) {
                return (
                    !!this.opts[o] &&
                    ((n = this.$menu.attr("id")) &&
                    n.length &&
                    (this.conf.clone && (n = t.umm(n)),
                    e.is('[href="#' + n + '"]'))
                        ? (this.open(), !0)
                        : a.$page
                        ? !!(
                              (n = a.$page.first().attr("id")) &&
                              n.length &&
                              e.is('[href="#' + n + '"]')
                          ) && (this.close(), !0)
                        : void 0)
                );
                var n;
            },
        }),
            (e[i].defaults[o] = {
                position: "left",
                zposition: "back",
                modal: !1,
                moveBackground: !0,
            }),
            (e[i].configuration[o] = {
                pageNodetype: "div",
                pageSelector: null,
                wrapPageIfNeeded: !0,
                menuWrapperSelector: "body",
                menuInjectMethod: "prepend",
            }),
            (e[i].prototype.open = function () {
                if (!this.vars.opened) {
                    var e = this;
                    this._openSetup(),
                        setTimeout(function () {
                            e._openFinish();
                        }, this.conf.openingInterval),
                        this.trigger("open");
                }
            }),
            (e[i].prototype._openSetup = function () {
                var i = this;
                this.closeAllOthers(),
                    a.$page.each(function () {
                        e(this).data(n.style, e(this).attr("style") || "");
                    }),
                    a.$wndw.trigger(s.resize + "-offcanvas", [!0]);
                var r = [t.opened];
                this.opts[o].modal && r.push(t.modal),
                    this.opts[o].moveBackground && r.push(t.background),
                    "left" != this.opts[o].position &&
                        r.push(t.mm(this.opts[o].position)),
                    "back" != this.opts[o].zposition &&
                        r.push(t.mm(this.opts[o].zposition)),
                    this.opts.extensions && r.push(this.opts.extensions),
                    a.$html.addClass(r.join(" ")),
                    setTimeout(function () {
                        i.vars.opened = !0;
                    }, this.conf.openingInterval),
                    this.$menu.addClass(t.current + " " + t.opened);
            }),
            (e[i].prototype._openFinish = function () {
                var e = this;
                this.__transitionend(
                    a.$page.first(),
                    function () {
                        e.trigger("opened");
                    },
                    this.conf.transitionDuration
                ),
                    a.$html.addClass(t.opening),
                    this.trigger("opening");
            }),
            (e[i].prototype.close = function () {
                return true;
                if (this.vars.opened) {
                    var s = this;
                    this.__transitionend(
                        a.$page.first(),
                        function () {
                            s.$menu
                                .removeClass(t.current)
                                .removeClass(t.opened),
                                a.$html
                                    .removeClass(t.opened)
                                    .removeClass(t.modal)
                                    .removeClass(t.background)
                                    .removeClass(t.mm(s.opts[o].position))
                                    .removeClass(t.mm(s.opts[o].zposition)),
                                s.opts.extensions &&
                                    a.$html.removeClass(s.opts.extensions),
                                a.$page.each(function () {
                                    e(this).attr(
                                        "style",
                                        e(this).data(n.style)
                                    );
                                }),
                                (s.vars.opened = !1),
                                s.trigger("closed");
                        },
                        this.conf.transitionDuration
                    ),
                        a.$html.removeClass(t.opening),
                        this.trigger("close"),
                        this.trigger("closing");
                }
            }),
            (e[i].prototype.closeAllOthers = function () {
                a.$allMenus.not(this.$menu).each(function () {
                    var t = e(this).data(i);
                    t && t.close && t.close();
                });
            }),
            (e[i].prototype.setPage = function (n) {
                var s = this,
                    i = this.conf[o];
                (n && n.length) ||
                    ((n = a.$body.find(i.pageSelector)).length > 1 &&
                        i.wrapPageIfNeeded &&
                        (n = n
                            .wrapAll("<" + this.conf[o].pageNodetype + " />")
                            .parent())),
                    n.each(function () {
                        e(this).attr(
                            "id",
                            e(this).attr("id") || s.__getUniqueId()
                        );
                    }),
                    n.addClass(t.page + " " + t.slideout),
                    (a.$page = n),
                    this.trigger("setPage", n);
            }),
            (e[i].prototype["_initWindow_" + o] = function () {
                a.$wndw
                    .off(s.keydown + "-offcanvas")
                    .on(s.keydown + "-offcanvas", function (e) {
                        return a.$html.hasClass(t.opened) && 9 == e.keyCode
                            ? (e.preventDefault(), !1)
                            : void 0;
                    });
                var e = 0;
                a.$wndw
                    .off(s.resize + "-offcanvas")
                    .on(s.resize + "-offcanvas", function (n, s) {
                        if (
                            1 == a.$page.length &&
                            (s || a.$html.hasClass(t.opened))
                        ) {
                            var i = a.$wndw.height();
                            (s || i != e) &&
                                ((e = i), a.$page.css("minHeight", i));
                        }
                    });
            }),
            (e[i].prototype._initBlocker = function () {
                var n = this;
                a.$blck ||
                    (a.$blck = e(
                        '<div id="' +
                            t.blocker +
                            '" class="' +
                            t.slideout +
                            '" />'
                    )),
                    a.$blck
                        .appendTo(a.$body)
                        .off(
                            s.touchstart +
                                "-offcanvas " +
                                s.touchmove +
                                "-offcanvas"
                        )
                        .on(
                            s.touchstart +
                                "-offcanvas " +
                                s.touchmove +
                                "-offcanvas",
                            function (e) {
                                e.preventDefault(),
                                    e.stopPropagation(),
                                    a.$blck.trigger(s.mousedown + "-offcanvas");
                            }
                        )
                        .off(s.mousedown + "-offcanvas")
                        .on(s.mousedown + "-offcanvas", function (e) {
                            e.preventDefault(),
                                a.$html.hasClass(t.modal) ||
                                    (n.closeAllOthers(), n.close());
                        });
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s,
            a = "mmenu",
            i = "autoHeight";
        (e[a].addons[i] = {
            setup: function () {
                if (this.opts.offCanvas) {
                    switch (this.opts.offCanvas.position) {
                        case "left":
                        case "right":
                            return;
                    }
                    var o = this,
                        r = this.opts[i];
                    if (
                        (this.conf[i],
                        (s = e[a].glbl),
                        "boolean" == typeof r &&
                            r &&
                            (r = {
                                height: "auto",
                            }),
                        "object" != typeof r && (r = {}),
                        "auto" ==
                            (r = this.opts[i] =
                                e.extend(!0, {}, e[a].defaults[i], r)).height)
                    ) {
                        this.$menu.addClass(t.autoheight);
                        var d = function (e) {
                            var n = this.$menu.children("." + t.current);
                            (_top = parseInt(n.css("top"), 10) || 0),
                                (_bot = parseInt(n.css("bottom"), 10) || 0),
                                this.$menu.addClass(t.measureheight),
                                (e =
                                    e ||
                                    this.$menu.children("." + t.current)).is(
                                    "." + t.vertical
                                ) &&
                                    (e = e
                                        .parents("." + t.panel)
                                        .not("." + t.vertical)
                                        .first()),
                                this.$menu
                                    .height(e.outerHeight() + _top + _bot)
                                    .removeClass(t.measureheight);
                        };
                        this.bind("update", d),
                            this.bind("openPanel", d),
                            this.bind("closePanel", d),
                            this.bind("open", d),
                            s.$wndw
                                .off(n.resize + "-autoheight")
                                .on(n.resize + "-autoheight", function () {
                                    d.call(o);
                                });
                    }
                }
            },
            add: function () {
                (t = e[a]._c),
                    e[a]._d,
                    (n = e[a]._e),
                    t.add("autoheight measureheight"),
                    n.add("resize");
            },
            clickAnchor: function () {},
        }),
            (e[a].defaults[i] = {
                height: "default",
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s = "mmenu",
            a = "backButton";
        (e[s].addons[a] = {
            setup: function () {
                if (this.opts.offCanvas) {
                    var i = this,
                        o = this.opts[a];
                    if (
                        (this.conf[a],
                        (n = e[s].glbl),
                        "boolean" == typeof o &&
                            (o = {
                                close: o,
                            }),
                        "object" != typeof o && (o = {}),
                        (o = e.extend(!0, {}, e[s].defaults[a], o)).close)
                    ) {
                        var r = "#" + i.$menu.attr("id");
                        this.bind("opened", function () {
                            location.hash != r &&
                                history.pushState(null, document.title, r);
                        }),
                            e(window).on("popstate", function (e) {
                                n.$html.hasClass(t.opened)
                                    ? (e.stopPropagation(), i.close())
                                    : location.hash == r &&
                                      (e.stopPropagation(), i.open());
                            });
                    }
                }
            },
            add: function () {
                return window.history && window.history.pushState
                    ? ((t = e[s]._c), e[s]._d, void e[s]._e)
                    : void (e[s].addons[a].setup = function () {});
            },
            clickAnchor: function () {},
        }),
            (e[s].defaults[a] = {
                close: !1,
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s = "mmenu",
            a = "counters";
        (e[s].addons[a] = {
            setup: function () {
                var i = this,
                    o = this.opts[a];
                this.conf[a],
                    e[s].glbl,
                    "boolean" == typeof o &&
                        (o = {
                            add: o,
                            update: o,
                        }),
                    "object" != typeof o && (o = {}),
                    (o = this.opts[a] = e.extend(!0, {}, e[s].defaults[a], o)),
                    this.bind("init", function (t) {
                        this.__refactorClass(
                            e("em", t),
                            this.conf.classNames[a].counter,
                            "counter"
                        );
                    }),
                    o.add &&
                        this.bind("init", function (s) {
                            s.each(function () {
                                var s = e(this).data(n.parent);
                                s &&
                                    (s.children("em." + t.counter).length ||
                                        s.prepend(
                                            e(
                                                '<em class="' +
                                                    t.counter +
                                                    '" />'
                                            )
                                        ));
                            });
                        }),
                    o.update &&
                        this.bind("update", function () {
                            this.$menu.find("." + t.panel).each(function () {
                                var s = e(this),
                                    a = s.data(n.parent);
                                if (a) {
                                    var o = a.children("em." + t.counter);
                                    o.length &&
                                        (s = s.children("." + t.listview))
                                            .length &&
                                        o.html(
                                            i.__filterListItems(s.children())
                                                .length
                                        );
                                }
                            });
                        });
            },
            add: function () {
                (t = e[s]._c),
                    (n = e[s]._d),
                    e[s]._e,
                    t.add("counter search noresultsmsg");
            },
            clickAnchor: function () {},
        }),
            (e[s].defaults[a] = {
                add: !1,
                update: !1,
            }),
            (e[s].configuration.classNames[a] = {
                counter: "Counter",
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s = "mmenu",
            a = "dividers";
        (e[s].addons[a] = {
            setup: function () {
                var i = this,
                    o = this.opts[a];
                if (
                    (this.conf[a],
                    e[s].glbl,
                    "boolean" == typeof o &&
                        (o = {
                            add: o,
                            fixed: o,
                        }),
                    "object" != typeof o && (o = {}),
                    (o = this.opts[a] = e.extend(!0, {}, e[s].defaults[a], o)),
                    this.bind("init", function () {
                        this.__refactorClass(
                            e("li", this.$menu),
                            this.conf.classNames[a].collapsed,
                            "collapsed"
                        );
                    }),
                    o.add &&
                        this.bind("init", function (n) {
                            switch (o.addTo) {
                                case "panels":
                                    var s = n;
                                    break;
                                default:
                                    s = e(o.addTo, this.$menu).filter(
                                        "." + t.panel
                                    );
                            }
                            e("." + t.divider, s).remove(),
                                s
                                    .find("." + t.listview)
                                    .not("." + t.vertical)
                                    .each(function () {
                                        var n = "";
                                        i.__filterListItems(
                                            e(this).children()
                                        ).each(function () {
                                            var s = e
                                                .trim(
                                                    e(this)
                                                        .children("a, span")
                                                        .text()
                                                )
                                                .slice(0, 1)
                                                .toLowerCase();
                                            s != n &&
                                                s.length &&
                                                ((n = s),
                                                e(
                                                    '<li class="' +
                                                        t.divider +
                                                        '">' +
                                                        s +
                                                        "</li>"
                                                ).insertBefore(this));
                                        });
                                    });
                        }),
                    o.collapse &&
                        this.bind("init", function (n) {
                            e("." + t.divider, n).each(function () {
                                var n = e(this);
                                n.nextUntil("." + t.divider, "." + t.collapsed)
                                    .length &&
                                    (n.children("." + t.subopen).length ||
                                        (n.wrapInner("<span />"),
                                        n.prepend(
                                            '<a href="#" class="' +
                                                t.subopen +
                                                " " +
                                                t.fullsubopen +
                                                '" />'
                                        )));
                            });
                        }),
                    o.fixed)
                ) {
                    var r = function (n) {
                        if (
                            (n = n || this.$menu.children("." + t.current))
                                .find("." + t.divider)
                                .not("." + t.hidden).length
                        ) {
                            this.$menu.addClass(t.hasdividers);
                            var s = n.scrollTop() || 0,
                                a = "";
                            n.is(":visible") &&
                                n
                                    .find("." + t.divider)
                                    .not("." + t.hidden)
                                    .each(function () {
                                        e(this).position().top + s < s + 1 &&
                                            (a = e(this).text());
                                    }),
                                this.$fixeddivider.text(a);
                        } else this.$menu.removeClass(t.hasdividers);
                    };
                    (this.$fixeddivider = e(
                        '<ul class="' +
                            t.listview +
                            " " +
                            t.fixeddivider +
                            '"><li class="' +
                            t.divider +
                            '"></li></ul>'
                    )
                        .prependTo(this.$menu)
                        .children()),
                        this.bind("openPanel", r),
                        this.bind("init", function (t) {
                            t.off(
                                n.scroll +
                                    "-dividers " +
                                    n.touchmove +
                                    "-dividers"
                            ).on(
                                n.scroll +
                                    "-dividers " +
                                    n.touchmove +
                                    "-dividers",
                                function () {
                                    r.call(i, e(this));
                                }
                            );
                        });
                }
            },
            add: function () {
                (t = e[s]._c),
                    e[s]._d,
                    (n = e[s]._e),
                    t.add("collapsed uncollapsed fixeddivider hasdividers"),
                    n.add("scroll");
            },
            clickAnchor: function (e, n) {
                if (this.opts[a].collapse && n) {
                    var s = e.parent();
                    if (s.is("." + t.divider)) {
                        var i = s.nextUntil("." + t.divider, "." + t.collapsed);
                        return (
                            s.toggleClass(t.opened),
                            i[
                                s.hasClass(t.opened)
                                    ? "addClass"
                                    : "removeClass"
                            ](t.uncollapsed),
                            !0
                        );
                    }
                }
                return !1;
            },
        }),
            (e[s].defaults[a] = {
                add: !1,
                addTo: "panels",
                fixed: !1,
                collapse: !1,
            }),
            (e[s].configuration.classNames[a] = {
                collapsed: "Collapsed",
            });
    })(jQuery),
    (function (e) {
        function t(e, t, n) {
            return t > e && (e = t), e > n && (e = n), e;
        }
        var n,
            s,
            a = "mmenu",
            i = "dragOpen";
        (e[a].addons[i] = {
            setup: function () {
                if (this.opts.offCanvas) {
                    var o = this,
                        r = this.opts[i],
                        d = this.conf[i];
                    if (
                        ((s = e[a].glbl),
                        "boolean" == typeof r &&
                            (r = {
                                open: r,
                            }),
                        "object" != typeof r && (r = {}),
                        (r = this.opts[i] =
                            e.extend(!0, {}, e[a].defaults[i], r)).open)
                    ) {
                        var l,
                            c,
                            h,
                            u,
                            f,
                            p = {},
                            v = 0,
                            m = !1,
                            g = !1,
                            b = 0,
                            _ = 0;
                        switch (this.opts.offCanvas.position) {
                            case "left":
                            case "right":
                                (p.events = "panleft panright"),
                                    (p.typeLower = "x"),
                                    (p.typeUpper = "X"),
                                    (g = "width");
                                break;
                            case "top":
                            case "bottom":
                                (p.events = "panup pandown"),
                                    (p.typeLower = "y"),
                                    (p.typeUpper = "Y"),
                                    (g = "height");
                        }
                        switch (this.opts.offCanvas.position) {
                            case "right":
                            case "bottom":
                                (p.negative = !0),
                                    (u = function (e) {
                                        e >= s.$wndw[g]() - r.maxStartPos &&
                                            (v = 1);
                                    });
                                break;
                            default:
                                (p.negative = !1),
                                    (u = function (e) {
                                        e <= r.maxStartPos && (v = 1);
                                    });
                        }
                        switch (this.opts.offCanvas.position) {
                            case "left":
                                (p.open_dir = "right"), (p.close_dir = "left");
                                break;
                            case "right":
                                (p.open_dir = "left"), (p.close_dir = "right");
                                break;
                            case "top":
                                (p.open_dir = "down"), (p.close_dir = "up");
                                break;
                            case "bottom":
                                (p.open_dir = "up"), (p.close_dir = "down");
                        }
                        switch (this.opts.offCanvas.zposition) {
                            case "front":
                                f = function () {
                                    return this.$menu;
                                };
                                break;
                            default:
                                f = function () {
                                    return e("." + n.slideout);
                                };
                        }
                        var C = this.__valueOrFn(
                            r.pageNode,
                            this.$menu,
                            s.$page
                        );
                        "string" == typeof C && (C = e(C)),
                            new Hammer(C[0], r.vendors.hammer)
                                .on("panstart", function (e) {
                                    u(e.center[p.typeLower]),
                                        (s.$slideOutNodes = f()),
                                        (m = p.open_dir);
                                })
                                .on(p.events + " panend", function (e) {
                                    v > 0 && e.preventDefault();
                                })
                                .on(p.events, function (e) {
                                    if (
                                        ((l = e["delta" + p.typeUpper]),
                                        p.negative && (l = -l),
                                        l != b &&
                                            (m =
                                                l >= b
                                                    ? p.open_dir
                                                    : p.close_dir),
                                        (b = l) > r.threshold && 1 == v)
                                    ) {
                                        if (s.$html.hasClass(n.opened)) return;
                                        (v = 2),
                                            o._openSetup(),
                                            o.trigger("opening"),
                                            s.$html.addClass(n.dragging),
                                            (_ = t(
                                                s.$wndw[g]() * d[g].perc,
                                                d[g].min,
                                                d[g].max
                                            ));
                                    }
                                    2 == v &&
                                        ((c =
                                            t(b, 10, _) -
                                            ("front" ==
                                            o.opts.offCanvas.zposition
                                                ? _
                                                : 0)),
                                        p.negative && (c = -c),
                                        (h =
                                            "translate" +
                                            p.typeUpper +
                                            "(" +
                                            c +
                                            "px )"),
                                        s.$slideOutNodes.css({
                                            "-webkit-transform": "-webkit-" + h,
                                            transform: h,
                                        }));
                                })
                                .on("panend", function () {
                                    2 == v &&
                                        (s.$html.removeClass(n.dragging),
                                        s.$slideOutNodes.css("transform", ""),
                                        o[
                                            m == p.open_dir
                                                ? "_openFinish"
                                                : "close"
                                        ]()),
                                        (v = 0);
                                });
                    }
                }
            },
            add: function () {
                return "function" != typeof Hammer || Hammer.VERSION < 2
                    ? void (e[a].addons[i].setup = function () {})
                    : ((n = e[a]._c), e[a]._d, e[a]._e, void n.add("dragging"));
            },
            clickAnchor: function () {},
        }),
            (e[a].defaults[i] = {
                open: !1,
                maxStartPos: 100,
                threshold: 50,
                vendors: {
                    hammer: {},
                },
            }),
            (e[a].configuration[i] = {
                width: {
                    perc: 0.8,
                    min: 140,
                    max: 440,
                },
                height: {
                    perc: 0.8,
                    min: 140,
                    max: 880,
                },
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s = "mmenu",
            a = "fixedElements";
        (e[s].addons[a] = {
            setup: function () {
                if (this.opts.offCanvas) {
                    this.opts[a], this.conf[a], (n = e[s].glbl);
                    var t = function (e) {
                        var t = this.conf.classNames[a].fixed;
                        this.__refactorClass(
                            e.find("." + t),
                            t,
                            "slideout"
                        ).appendTo(n.$body);
                    };
                    t.call(this, n.$page), this.bind("setPage", t);
                }
            },
            add: function () {
                (t = e[s]._c), e[s]._d, e[s]._e, t.add("fixed");
            },
            clickAnchor: function () {},
        }),
            (e[s].configuration.classNames[a] = {
                fixed: "Fixed",
            });
    })(jQuery),
    (function (e) {
        var t,
            n = "mmenu",
            s = "iconPanels";
        (e[n].addons[s] = {
            setup: function () {
                var a = this,
                    i = this.opts[s];
                if (
                    (this.conf[s],
                    e[n].glbl,
                    "boolean" == typeof i &&
                        (i = {
                            add: i,
                        }),
                    "number" == typeof i &&
                        (i = {
                            add: !0,
                            visible: i,
                        }),
                    "object" != typeof i && (i = {}),
                    (i = this.opts[s] = e.extend(!0, {}, e[n].defaults[s], i))
                        .visible++,
                    i.add)
                ) {
                    this.$menu.addClass(t.iconpanel);
                    for (var o = [], r = 0; r <= i.visible; r++)
                        o.push(t.iconpanel + "-" + r);
                    o = o.join(" ");
                    var d = function (n) {
                        a.$menu
                            .children("." + t.panel)
                            .removeClass(o)
                            .filter("." + t.subopened)
                            .removeClass(t.hidden)
                            .add(n)
                            .slice(-i.visible)
                            .each(function (n) {
                                e(this).addClass(t.iconpanel + "-" + n);
                            });
                    };
                    this.bind("openPanel", d),
                        this.bind("init", function (n) {
                            d.call(a, a.$menu.children("." + t.current)),
                                i.hideNavbars && n.removeClass(t.hasnavbar),
                                n.each(function () {
                                    e(this).children("." + t.subblocker)
                                        .length ||
                                        e(this).prepend(
                                            '<a href="#' +
                                                e(this)
                                                    .closest("." + t.panel)
                                                    .attr("id") +
                                                '" class="' +
                                                t.subblocker +
                                                '" />'
                                        );
                                });
                        });
                }
            },
            add: function () {
                (t = e[n]._c), e[n]._d, e[n]._e, t.add("iconpanel subblocker");
            },
            clickAnchor: function () {},
        }),
            (e[n].defaults[s] = {
                add: !1,
                visible: 3,
                hideNavbars: !1,
            });
    })(jQuery),
    (function (e) {
        var t,
            n = "mmenu",
            s = "navbars";
        (e[n].addons[s] = {
            setup: function () {
                var a = this,
                    i = this.opts[s],
                    o = this.conf[s];
                if ((e[n].glbl, void 0 !== i)) {
                    i instanceof Array || (i = [i]);
                    var r = {};
                    for (var d in (e.each(i, function (d) {
                        var l = i[d];
                        "boolean" == typeof l && l && (l = {}),
                            "object" != typeof l && (l = {}),
                            void 0 === l.content &&
                                (l.content = ["prev", "title"]),
                            l.content instanceof Array ||
                                (l.content = [l.content]);
                        var c = (l = e.extend(!0, {}, a.opts.navbar, l))
                                .position,
                            h = l.height;
                        "number" != typeof h && (h = 1),
                            (h = Math.min(4, Math.max(1, h))),
                            "bottom" != c && (c = "top"),
                            r[c] || (r[c] = 0),
                            r[c]++;
                        var u = e("<div />").addClass(
                            t.navbar +
                                " " +
                                t.navbar +
                                "-" +
                                c +
                                " " +
                                t.navbar +
                                "-" +
                                c +
                                "-" +
                                r[c] +
                                " " +
                                t.navbar +
                                "-size-" +
                                h
                        );
                        r[c] += h - 1;
                        for (var f = 0, p = l.content.length; p > f; f++) {
                            var v = e[n].addons[s][l.content[f]] || !1;
                            v
                                ? v.call(a, u, l, o)
                                : ((v = l.content[f]) instanceof e ||
                                      (v = e(l.content[f])),
                                  v.each(function () {
                                      u.append(e(this));
                                  }));
                        }
                        var m = Math.ceil(
                            u.children().not("." + t.btn).length / h
                        );
                        m > 1 && u.addClass(t.navbar + "-content-" + m),
                            u.children("." + t.btn).length &&
                                u.addClass(t.hasbtns),
                            u.prependTo(a.$menu);
                    }),
                    r))
                        a.$menu.addClass(t.hasnavbar + "-" + d + "-" + r[d]);
                }
            },
            add: function () {
                (t = e[n]._c), e[n]._d, e[n]._e, t.add("close hasbtns");
            },
            clickAnchor: function () {},
        }),
            (e[n].configuration[s] = {
                breadcrumbSeporator: "/",
            }),
            (e[n].configuration.classNames[s] = {
                panelTitle: "Title",
                panelNext: "Next",
                panelPrev: "Prev",
            });
    })(jQuery),
    (function (e) {
        var t = "mmenu";
        e[t].addons.navbars.breadcrumbs = function (n, s, a) {
            var i = e[t]._c,
                o = e[t]._d;
            i.add("breadcrumbs seporator"),
                n.append('<span class="' + i.breadcrumbs + '"></span>'),
                this.bind("init", function (t) {
                    t.removeClass(i.hasnavbar).each(function () {
                        for (
                            var t = [],
                                n = e(this),
                                s = e(
                                    '<span class="' +
                                        i.breadcrumbs +
                                        '"></span>'
                                ),
                                r = e(this).children().first(),
                                d = !0;
                            r && r.length;

                        ) {
                            r.is("." + i.panel) ||
                                (r = r.closest("." + i.panel));
                            var l = r
                                .children("." + i.navbar)
                                .children("." + i.title)
                                .text();
                            t.unshift(
                                d
                                    ? "<span>" + l + "</span>"
                                    : '<a href="#' +
                                          r.attr("id") +
                                          '">' +
                                          l +
                                          "</a>"
                            ),
                                (d = !1),
                                (r = r.data(o.parent));
                        }
                        s.append(
                            t.join(
                                '<span class="' +
                                    i.seporator +
                                    '">' +
                                    a.breadcrumbSeporator +
                                    "</span>"
                            )
                        ).appendTo(n.children("." + i.navbar));
                    });
                });
            var r = function () {
                var e = this.$menu.children("." + i.current),
                    t = n.find("." + i.breadcrumbs),
                    s = e
                        .children("." + i.navbar)
                        .children("." + i.breadcrumbs);
                t.html(s.html());
            };
            this.bind("openPanel", r), this.bind("init", r);
        };
    })(jQuery),
    (function (e) {
        var t = "mmenu";
        e[t].addons.navbars.close = function (n) {
            var s = e[t]._c,
                a = e[t].glbl;
            n.append('<a class="' + s.close + " " + s.btn + '" href="#"></a>');
            var i = function (e) {
                n.find("." + s.close).attr("href", "#" + e.attr("id"));
            };
            i.call(this, a.$page), this.bind("setPage", i);
        };
    })(jQuery),
    (function (e) {
        var t = "navbars";
        e.mmenu.addons[t].next = function (n) {
            var s = e.mmenu._c;
            n.append('<a class="' + s.next + " " + s.btn + '" href="#"></a>');
            var a = function (e) {
                e = e || this.$menu.children("." + s.current);
                var a = n.find("." + s.next),
                    i = e.find("." + this.conf.classNames[t].panelNext),
                    o = i.attr("href"),
                    r = i.html();
                a[o ? "attr" : "removeAttr"]("href", o),
                    a[o || r ? "removeClass" : "addClass"](s.hidden),
                    a.html(r);
            };
            this.bind("openPanel", a),
                this.bind("init", function () {
                    a.call(this);
                });
        };
    })(jQuery),
    (function (e) {
        var t = "navbars";
        e.mmenu.addons[t].prev = function (n) {
            var s = e.mmenu._c;
            n.append('<a class="' + s.prev + " " + s.btn + '" href="#"></a>'),
                this.bind("init", function (e) {
                    e.removeClass(s.hasnavbar);
                });
            var a = function () {
                var e = this.$menu.children("." + s.current),
                    a = n.find("." + s.prev),
                    i = e.find("." + this.conf.classNames[t].panelPrev);
                i.length ||
                    (i = e.children("." + s.navbar).children("." + s.prev));
                var o = i.attr("href"),
                    r = i.html();
                a[o ? "attr" : "removeAttr"]("href", o),
                    a[o || r ? "removeClass" : "addClass"](s.hidden),
                    a.html(r);
            };
            this.bind("openPanel", a), this.bind("init", a);
        };
    })(jQuery),
    (function (e) {
        e.mmenu.addons.navbars.searchfield = function (t) {
            var n = e.mmenu._c,
                s = e('<div class="' + n.search + '" />').appendTo(t);
            "object" != typeof this.opts.searchfield &&
                (this.opts.searchfield = {}),
                (this.opts.searchfield.add = !0),
                (this.opts.searchfield.addTo = s);
        };
    })(jQuery),
    (function (e) {
        var t = "navbars";
        e.mmenu.addons[t].title = function (n, s) {
            var a = e.mmenu._c;
            n.append('<a class="' + a.title + '"></a>');
            var i = function (e) {
                e = e || this.$menu.children("." + a.current);
                var i = n.find("." + a.title),
                    o = e.find("." + this.conf.classNames[t].panelTitle);
                o.length ||
                    (o = e.children("." + a.navbar).children("." + a.title));
                var r = o.attr("href"),
                    d = o.html() || s.title;
                i[r ? "attr" : "removeAttr"]("href", r),
                    i[r || d ? "removeClass" : "addClass"](a.hidden),
                    i.html(d);
            };
            this.bind("openPanel", i),
                this.bind("init", function () {
                    i.call(this);
                });
        };
    })(jQuery),
    (function (e) {
        var t,
            n,
            s,
            a = "mmenu",
            i = "searchfield";
        (e[a].addons[i] = {
            setup: function () {
                var o = this,
                    r = this.opts[i],
                    d = this.conf[i];
                e[a].glbl,
                    "boolean" == typeof r &&
                        (r = {
                            add: r,
                        }),
                    "object" != typeof r && (r = {}),
                    (r = this.opts[i] = e.extend(!0, {}, e[a].defaults[i], r)),
                    this.bind("close", function () {
                        this.$menu
                            .find("." + t.search)
                            .find("input")
                            .blur();
                    }),
                    this.bind("init", function (a) {
                        if (r.add) {
                            switch (r.addTo) {
                                case "panels":
                                    var i = a;
                                    break;
                                default:
                                    i = e(r.addTo, this.$menu);
                            }
                            i.each(function () {
                                var n = e(this);
                                if (
                                    !n.is("." + t.panel) ||
                                    !n.is("." + t.vertical)
                                ) {
                                    if (!n.children("." + t.search).length) {
                                        var s = d.form ? "form" : "div",
                                            a = e(
                                                "<" +
                                                    s +
                                                    ' class="' +
                                                    t.search +
                                                    '" />'
                                            );
                                        if (d.form && "object" == typeof d.form)
                                            for (var i in d.form)
                                                a.attr(i, d.form[i]);
                                        a.append(
                                            '<input placeholder="' +
                                                r.placeholder +
                                                '" type="text" autocomplete="off" />'
                                        ),
                                            n.hasClass(t.search)
                                                ? n.replaceWith(a)
                                                : n
                                                      .prepend(a)
                                                      .addClass(t.hassearch);
                                    }
                                    if (r.noResults)
                                        if (
                                            (n.closest("." + t.panel).length ||
                                                (n = o.$menu
                                                    .children("." + t.panel)
                                                    .first()),
                                            !n.children("." + t.noresultsmsg)
                                                .length)
                                        ) {
                                            var l = n
                                                .children("." + t.listview)
                                                .first();
                                            e(
                                                '<div class="' +
                                                    t.noresultsmsg +
                                                    '" />'
                                            )
                                                .append(r.noResults)
                                                [
                                                    l.length
                                                        ? "insertAfter"
                                                        : "prependTo"
                                                ](l.length ? l : n);
                                        }
                                }
                            }),
                                r.search &&
                                    e("." + t.search, this.$menu).each(
                                        function () {
                                            var a = e(this),
                                                i = a.closest(
                                                    "." + t.panel
                                                ).length;
                                            if (i)
                                                var d = (l = a.closest(
                                                    "." + t.panel
                                                ));
                                            else {
                                                var l = e(
                                                    "." + t.panel,
                                                    o.$menu
                                                );
                                                d = o.$menu;
                                            }
                                            var c = a.children("input"),
                                                h = o
                                                    .__findAddBack(
                                                        l,
                                                        "." + t.listview
                                                    )
                                                    .children("li"),
                                                u = h.filter("." + t.divider),
                                                f = o.__filterListItems(h),
                                                p = function () {
                                                    var s = c
                                                        .val()
                                                        .toLowerCase();
                                                    l.scrollTop(0),
                                                        f
                                                            .add(u)
                                                            .addClass(t.hidden)
                                                            .find(
                                                                "." +
                                                                    t.fullsubopensearch
                                                            )
                                                            .removeClass(
                                                                t.fullsubopen
                                                            )
                                                            .removeClass(
                                                                t.fullsubopensearch
                                                            ),
                                                        f.each(function () {
                                                            var n = e(this),
                                                                a = "> a";
                                                            (r.showTextItems ||
                                                                (r.showSubPanels &&
                                                                    n.find(
                                                                        "." +
                                                                            t.next
                                                                    ))) &&
                                                                (a =
                                                                    "> a, > span"),
                                                                e(a, n)
                                                                    .text()
                                                                    .toLowerCase()
                                                                    .indexOf(
                                                                        s
                                                                    ) > -1 &&
                                                                    n
                                                                        .add(
                                                                            n
                                                                                .prevAll(
                                                                                    "." +
                                                                                        t.divider
                                                                                )
                                                                                .first()
                                                                        )
                                                                        .removeClass(
                                                                            t.hidden
                                                                        );
                                                        }),
                                                        r.showSubPanels &&
                                                            l.each(function () {
                                                                var s = e(this);
                                                                o.__filterListItems(
                                                                    s
                                                                        .find(
                                                                            "." +
                                                                                t.listview
                                                                        )
                                                                        .children()
                                                                ).each(
                                                                    function () {
                                                                        var s =
                                                                                e(
                                                                                    this
                                                                                ),
                                                                            a =
                                                                                s.data(
                                                                                    n.sub
                                                                                );
                                                                        s.removeClass(
                                                                            t.nosubresults
                                                                        ),
                                                                            a &&
                                                                                a
                                                                                    .find(
                                                                                        "." +
                                                                                            t.listview
                                                                                    )
                                                                                    .children()
                                                                                    .removeClass(
                                                                                        t.hidden
                                                                                    );
                                                                    }
                                                                );
                                                            }),
                                                        e(
                                                            l.get().reverse()
                                                        ).each(function (s) {
                                                            var a = e(this),
                                                                r = a.data(
                                                                    n.parent
                                                                );
                                                            r &&
                                                                (o.__filterListItems(
                                                                    a
                                                                        .find(
                                                                            "." +
                                                                                t.listview
                                                                        )
                                                                        .children()
                                                                ).length
                                                                    ? (r.hasClass(
                                                                          t.hidden
                                                                      ) &&
                                                                          r
                                                                              .children(
                                                                                  "." +
                                                                                      t.next
                                                                              )
                                                                              .not(
                                                                                  "." +
                                                                                      t.fullsubopen
                                                                              )
                                                                              .addClass(
                                                                                  t.fullsubopen
                                                                              )
                                                                              .addClass(
                                                                                  t.fullsubopensearch
                                                                              ),
                                                                      r
                                                                          .removeClass(
                                                                              t.hidden
                                                                          )
                                                                          .removeClass(
                                                                              t.nosubresults
                                                                          )
                                                                          .prevAll(
                                                                              "." +
                                                                                  t.divider
                                                                          )
                                                                          .first()
                                                                          .removeClass(
                                                                              t.hidden
                                                                          ))
                                                                    : i ||
                                                                      (a.hasClass(
                                                                          t.opened
                                                                      ) &&
                                                                          setTimeout(
                                                                              function () {
                                                                                  o.openPanel(
                                                                                      r.closest(
                                                                                          "." +
                                                                                              t.panel
                                                                                      )
                                                                                  );
                                                                              },
                                                                              1.5 *
                                                                                  (s +
                                                                                      1) *
                                                                                  o
                                                                                      .conf
                                                                                      .openingInterval
                                                                          ),
                                                                      r.addClass(
                                                                          t.nosubresults
                                                                      )));
                                                        }),
                                                        d[
                                                            f.not(
                                                                "." + t.hidden
                                                            ).length
                                                                ? "removeClass"
                                                                : "addClass"
                                                        ](t.noresults),
                                                        this.update();
                                                };
                                            c.off(
                                                s.keyup +
                                                    "-searchfield " +
                                                    s.change +
                                                    "-searchfield"
                                            )
                                                .on(
                                                    s.keyup + "-searchfield",
                                                    function (e) {
                                                        (function (e) {
                                                            switch (e) {
                                                                case 9:
                                                                case 16:
                                                                case 17:
                                                                case 18:
                                                                case 37:
                                                                case 38:
                                                                case 39:
                                                                case 40:
                                                                    return !0;
                                                            }
                                                            return !1;
                                                        })(e.keyCode) ||
                                                            p.call(o);
                                                    }
                                                )
                                                .on(
                                                    s.change + "-searchfield",
                                                    function () {
                                                        p.call(o);
                                                    }
                                                );
                                        }
                                    );
                        }
                    });
            },
            add: function () {
                (t = e[a]._c),
                    (n = e[a]._d),
                    (s = e[a]._e),
                    t.add(
                        "search hassearch noresultsmsg noresults nosubresults fullsubopensearch"
                    ),
                    s.add("change keyup");
            },
            clickAnchor: function () {},
        }),
            (e[a].defaults[i] = {
                add: !1,
                addTo: "panels",
                search: !0,
                placeholder: "Search",
                noResults: "No results found.",
                showTextItems: !1,
                showSubPanels: !0,
            }),
            (e[a].configuration[i] = {
                form: !1,
            });
    })(jQuery),
    (function (e) {
        var t,
            n,
            s = "mmenu",
            a = "sectionIndexer";
        (e[s].addons[a] = {
            setup: function () {
                var i = this,
                    o = this.opts[a];
                this.conf[a],
                    e[s].glbl,
                    "boolean" == typeof o &&
                        (o = {
                            add: o,
                        }),
                    "object" != typeof o && (o = {}),
                    (o = this.opts[a] = e.extend(!0, {}, e[s].defaults[a], o)),
                    this.bind("init", function (s) {
                        if (o.add) {
                            switch (o.addTo) {
                                case "panels":
                                    var a = s;
                                    break;
                                default:
                                    a = e(o.addTo, this.$menu).filter(
                                        "." + t.panel
                                    );
                            }
                            a.find("." + t.divider)
                                .closest("." + t.panel)
                                .addClass(t.hasindexer);
                        }
                        if (
                            !this.$indexer &&
                            this.$menu.children("." + t.hasindexer).length
                        ) {
                            (this.$indexer = e(
                                '<div class="' + t.indexer + '" />'
                            )
                                .prependTo(this.$menu)
                                .append(
                                    '<a href="#a">a</a><a href="#b">b</a><a href="#c">c</a><a href="#d">d</a><a href="#e">e</a><a href="#f">f</a><a href="#g">g</a><a href="#h">h</a><a href="#i">i</a><a href="#j">j</a><a href="#k">k</a><a href="#l">l</a><a href="#m">m</a><a href="#n">n</a><a href="#o">o</a><a href="#p">p</a><a href="#q">q</a><a href="#r">r</a><a href="#s">s</a><a href="#t">t</a><a href="#u">u</a><a href="#v">v</a><a href="#w">w</a><a href="#x">x</a><a href="#y">y</a><a href="#z">z</a>'
                                )),
                                this.$indexer
                                    .children()
                                    .on(
                                        n.mouseover +
                                            "-sectionindexer " +
                                            t.touchstart +
                                            "-sectionindexer",
                                        function () {
                                            var n = e(this)
                                                    .attr("href")
                                                    .slice(1),
                                                s = i.$menu.children(
                                                    "." + t.current
                                                ),
                                                a = s.find("." + t.listview),
                                                o = !1,
                                                r = s.scrollTop(),
                                                d =
                                                    a.position().top +
                                                    parseInt(
                                                        a.css("margin-top"),
                                                        10
                                                    ) +
                                                    parseInt(
                                                        a.css("padding-top"),
                                                        10
                                                    ) +
                                                    r;
                                            s.scrollTop(0),
                                                a
                                                    .children("." + t.divider)
                                                    .not("." + t.hidden)
                                                    .each(function () {
                                                        !1 === o &&
                                                            n ==
                                                                e(this)
                                                                    .text()
                                                                    .slice(0, 1)
                                                                    .toLowerCase() &&
                                                            (o =
                                                                e(
                                                                    this
                                                                ).position()
                                                                    .top + d);
                                                    }),
                                                s.scrollTop(!1 !== o ? o : r);
                                        }
                                    );
                            var r = function (e) {
                                i.$menu[
                                    (e.hasClass(t.hasindexer)
                                        ? "add"
                                        : "remove") + "Class"
                                ](t.hasindexer);
                            };
                            this.bind("openPanel", r),
                                r.call(
                                    this,
                                    this.$menu.children("." + t.current)
                                );
                        }
                    });
            },
            add: function () {
                (t = e[s]._c),
                    e[s]._d,
                    (n = e[s]._e),
                    t.add("indexer hasindexer"),
                    n.add("mouseover touchstart");
            },
            clickAnchor: function (e) {
                return !!e.parent().is("." + t.indexer) || void 0;
            },
        }),
            (e[s].defaults[a] = {
                add: !1,
                addTo: "panels",
            });
    })(jQuery),
    (function (e) {
        var t,
            n = "mmenu",
            s = "toggles";
        (e[n].addons[s] = {
            setup: function () {
                var a = this;
                this.opts[s],
                    this.conf[s],
                    e[n].glbl,
                    this.bind("init", function (n) {
                        this.__refactorClass(
                            e("input", n),
                            this.conf.classNames[s].toggle,
                            "toggle"
                        ),
                            this.__refactorClass(
                                e("input", n),
                                this.conf.classNames[s].check,
                                "check"
                            ),
                            e(
                                "input." + t.toggle + ", input." + t.check,
                                n
                            ).each(function () {
                                var n = e(this),
                                    s = n.closest("li"),
                                    i = n.hasClass(t.toggle)
                                        ? "toggle"
                                        : "check",
                                    o = n.attr("id") || a.__getUniqueId();
                                s.children('label[for="' + o + '"]').length ||
                                    (n.attr("id", o),
                                    s.prepend(n),
                                    e(
                                        '<label for="' +
                                            o +
                                            '" class="' +
                                            t[i] +
                                            '"></label>'
                                    ).insertBefore(
                                        s.children("a, span").last()
                                    ));
                            });
                    });
            },
            add: function () {
                (t = e[n]._c), e[n]._d, e[n]._e, t.add("toggle check");
            },
            clickAnchor: function () {},
        }),
            (e[n].configuration.classNames[s] = {
                toggle: "Toggle",
                check: "Check",
            });
    })(jQuery);
