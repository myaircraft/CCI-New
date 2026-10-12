/* Competitive Choice — vanilla port of the original React header, slideshow and FAQ behaviour. */
(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  var ICONS = {
    menu: '<path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path>',
    x: '<path d="M18 6 6 18"></path><path d="m6 6 12 12"></path>',
    plus: '<path d="M5 12h14"></path><path d="M12 5v14"></path>',
    minus: '<path d="M5 12h14"></path>'
  };
  function swapIcon(button, name) {
    var svg = button.querySelector('svg');
    if (!svg) return;
    svg.setAttribute('class', 'lucide lucide-' + name);
    svg.innerHTML = ICONS[name];
  }

  /* ---------- Header ---------- */
  function initHeader() {
    var header = document.querySelector('.site-header');
    if (!header) return;
    var main = header.querySelector('.main-header');
    var controls = Array.prototype.slice.call(header.querySelectorAll('.nav-control'));
    var panels = Array.prototype.slice.call(header.querySelectorAll('.mega-menu'));
    var quote = header.querySelector('.desktop-quote');
    var toggle = header.querySelector('.mobile-toggle');
    var mobileNav = header.querySelector('.mobile-navigation');
    var active = null;
    var scrolled = false;

    function setActive(id) {
      active = id;
      controls.forEach(function (c) {
        var on = !!id && c.getAttribute('data-menu') === id;
        c.setAttribute('data-active', on ? 'true' : 'false');
        c.setAttribute('aria-expanded', on ? 'true' : 'false');
      });
      panels.forEach(function (p) { p.hidden = p.getAttribute('data-menu-panel') !== id; });
    }

    controls.forEach(function (c) {
      var id = c.getAttribute('data-menu');
      c.addEventListener('mouseenter', function () { setActive(id); });
      c.addEventListener('focus', function () { setActive(id); });
      c.addEventListener('click', function () { setActive(active === id ? null : id); });
    });
    panels.forEach(function (p) { p.addEventListener('mouseleave', function () { setActive(null); }); });
    if (quote) quote.addEventListener('mouseenter', function () { setActive(null); });
    main.addEventListener('mouseleave', function () { setActive(null); });

    function setMobile(open) {
      mobileNav.hidden = !open;
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
      swapIcon(toggle, open ? 'x' : 'menu');
    }
    toggle.addEventListener('click', function () { setMobile(mobileNav.hidden); });

    var categoryToggles = Array.prototype.slice.call(mobileNav.querySelectorAll('.mobile-category-toggle'));
    categoryToggles.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var opening = btn.getAttribute('aria-expanded') !== 'true';
        categoryToggles.forEach(function (other) {
          var on = opening && other === btn;
          other.setAttribute('aria-expanded', on ? 'true' : 'false');
          document.getElementById(other.getAttribute('aria-controls')).hidden = !on;
          swapIcon(other, on ? 'minus' : 'plus');
        });
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') { setActive(null); setMobile(false); }
    });
    document.addEventListener('click', function (e) {
      if (!header.contains(e.target)) setActive(null);
    });

    // Hysteresis avoids flicker as the shrinking header shifts the scroll position.
    function onScroll() {
      scrolled = window.scrollY > (scrolled ? 16 : 80);
      main.setAttribute('data-scrolled', scrolled ? 'true' : 'false');
    }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Product slideshow ---------- */
  function initSlideshow() {
    var root = document.querySelector('[data-slideshow]');
    if (!root) return;
    var slides = JSON.parse(root.getAttribute('data-slides'));
    var photos = root.querySelectorAll('.slideshow-photo');
    var dots = root.querySelectorAll('.slide-dot');
    var explore = root.querySelector('[data-slide-explore]');
    var index = 0;
    var playing = !reducedMotion.matches;
    var hovered = false;
    var focused = false;
    var timer = null;
    var typeTimer = null;

    function typewriter(target, text) {
      window.clearInterval(typeTimer);
      var caret = '<span class="type-caret"></span>';
      var count = reducedMotion.matches ? text.length : 0;
      function paint() { target.textContent = text.slice(0, count); target.insertAdjacentHTML('beforeend', caret); }
      paint();
      if (count >= text.length) return;
      typeTimer = window.setInterval(function () {
        if (count >= text.length) { window.clearInterval(typeTimer); return; }
        count += 1;
        paint();
      }, 60);
    }

    function render() {
      var slide = slides[index];
      photos.forEach(function (p, i) { p.setAttribute('data-active', i === index ? 'true' : 'false'); });
      dots.forEach(function (d, i) { if (i === index) d.setAttribute('aria-current', 'true'); else d.removeAttribute('aria-current'); });
      // Replace the slide block so it remounts, as the keyed React element did.
      var old = root.querySelector('.slide-category');
      var block = document.createElement('div');
      block.className = 'slide-category';
      block.setAttribute('role', 'group');
      block.setAttribute('aria-roledescription', 'slide');
      block.setAttribute('aria-label', (index + 1) + ' of ' + slides.length);
      var h2 = document.createElement('h2');
      h2.setAttribute('aria-label', slide.name);
      var typed = document.createElement('span');
      typed.setAttribute('aria-hidden', 'true');
      h2.appendChild(typed);
      var p = document.createElement('p');
      p.textContent = slide.heroLine;
      block.appendChild(h2);
      block.appendChild(p);
      old.parentNode.replaceChild(block, old);
      typewriter(typed, slide.name);
      if (explore) explore.setAttribute('href', slide.url);
    }

    function goTo(position) {
      index = ((position % slides.length) + slides.length) % slides.length;
      render();
    }

    // Mouse over the banner (or keyboard focus inside it) freezes the slideshow.
    function schedule() {
      window.clearInterval(timer);
      timer = null;
      if (!playing || hovered || focused || slides.length < 2) return;
      timer = window.setInterval(function () { if (!document.hidden) goTo(index + 1); }, 3500);
    }

    root.querySelector('[data-slide-prev]').addEventListener('click', function () { goTo(index - 1); });
    root.querySelector('[data-slide-next]').addEventListener('click', function () { goTo(index + 1); });
    dots.forEach(function (d) { d.addEventListener('click', function () { goTo(parseInt(d.getAttribute('data-slide-to'), 10)); }); });
    root.addEventListener('mouseenter', function () { hovered = true; schedule(); });
    root.addEventListener('mouseleave', function () { hovered = false; schedule(); });
    root.addEventListener('focusin', function (e) {
      var t = e.target;
      try { if (t instanceof HTMLElement && t.matches(':focus-visible')) { focused = true; schedule(); } } catch (err) { /* :focus-visible unsupported */ }
    });
    root.addEventListener('focusout', function (e) {
      if (!root.contains(e.relatedTarget)) { focused = false; schedule(); }
    });
    var onMotionChange = function () { if (reducedMotion.matches) { playing = false; schedule(); } };
    if (reducedMotion.addEventListener) reducedMotion.addEventListener('change', onMotionChange);

    render();
    schedule();
  }

  /* ---------- FAQ accordion (multiple open, Radix-compatible state attributes) ---------- */
  function initAccordions() {
    document.querySelectorAll('[data-accordion] > [data-state]').forEach(function (item) {
      var heading = item.querySelector('h3');
      var trigger = heading.querySelector('button');
      var panel = document.getElementById(trigger.getAttribute('aria-controls'));

      function setState(state) {
        [item, heading, trigger, panel].forEach(function (el) { el.setAttribute('data-state', state); });
        trigger.setAttribute('aria-expanded', state === 'open' ? 'true' : 'false');
      }

      panel.addEventListener('animationend', function () {
        if (panel.getAttribute('data-state') === 'closed') panel.hidden = true;
      });

      trigger.addEventListener('click', function () {
        if (panel.getAttribute('data-state') === 'open') {
          panel.style.setProperty('--radix-accordion-content-height', panel.scrollHeight + 'px');
          setState('closed');
          if (reducedMotion.matches) panel.hidden = true;
        } else {
          panel.hidden = false;
          panel.style.setProperty('--radix-accordion-content-height', panel.scrollHeight + 'px');
          setState('open');
        }
      });
    });
  }

  function initTypewriter() {
    var el = document.querySelector('[data-typewriter]');
    if (!el || reducedMotion.matches) return;
    var lines = el.innerHTML.split(/<br\s*\/?>/i).map(function (l) {
      var d = document.createElement('div'); d.innerHTML = l; return d.textContent.trim();
    });
    var speed = parseInt(el.getAttribute('data-speed'), 10) || 72;
    el.style.minHeight = el.offsetHeight + 'px';
    el.textContent = '';
    var caret = document.createElement('span');
    caret.className = 'type-caret';
    caret.setAttribute('aria-hidden', 'true');
    var node = document.createElement('span');
    el.appendChild(node);
    el.appendChild(caret);
    var line = 0, char = 0;
    function tick() {
      if (line >= lines.length) { setTimeout(function () { caret.classList.add('is-done'); }, 1400); return; }
      if (char < lines[line].length) {
        node.textContent += lines[line].charAt(char++);
        setTimeout(tick, speed);
      } else {
        line++; char = 0;
        if (line < lines.length) {
          el.insertBefore(document.createElement('br'), caret);
          node = document.createElement('span');
          el.insertBefore(node, caret);
        }
        setTimeout(tick, 380);
      }
    }
    setTimeout(tick, 600);
  }

  function initUnderlines() {
    var marks = document.querySelectorAll('.hl-draw');
    if (!marks.length || reducedMotion.matches || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        setTimeout(function () { entry.target.classList.add('is-drawn'); }, 500);
        io.unobserve(entry.target);
      });
    }, { threshold: 0.6 });
    Array.prototype.forEach.call(marks, function (m) { m.classList.add('is-armed'); io.observe(m); });
  }

  function initVideos() {
    var videos = document.querySelectorAll('video[data-lazy-play]');
    if (!videos.length || reducedMotion.matches || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var v = entry.target;
        if (entry.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function () {}); } else { v.pause(); }
      });
    }, { threshold: 0.4 });
    Array.prototype.forEach.call(videos, function (v) { io.observe(v); });
  }

  function initDemos() {
    Array.prototype.forEach.call(document.querySelectorAll('.demo-play'), function (btn) {
      btn.addEventListener('click', function () {
        var img = btn.querySelector('img');
        var label = btn.querySelector('.demo-play-label');
        img.src = btn.getAttribute('data-gif');
        if (label) label.remove();
        btn.disabled = true;
        btn.style.cursor = 'default';
      }, { once: true });
    });
  }

  initDemos();
  initVideos();
  initTypewriter();
  initUnderlines();
  initHeader();
  initSlideshow();
  initAccordions();
})();
