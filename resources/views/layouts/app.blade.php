<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    <div id="cursor" class="custom-cursor" aria-hidden="true"></div>

    <style>
      /* Custom Cursor: only enable on precise pointers and when motion is allowed */
      @media (pointer: fine) and (hover: hover) {
        html:not([data-reduced-motion='1']) body,
        html:not([data-reduced-motion='1']) body * { cursor: none !important; }

        .custom-cursor {
          position: fixed;
          left: 0; top: 0;
          width: 18px; height: 18px;
          border-radius: 50%;
          pointer-events: none;
          z-index: 9999;
          opacity: 0;
          /* Modern gradient */
          background: linear-gradient(135deg, #a855f7 0%, #6366f1 50%, #22d3ee 100%);
          /* Glow & subtle blur */
          box-shadow: 0 0 12px rgba(99,102,241,.55), 0 0 24px rgba(34,211,238,.35);
          filter: saturate(1.2);
          mix-blend-mode: screen;
          will-change: transform, opacity;
          transition: opacity .2s ease-out;
          transform: translate3d(-100px, -100px, 0) scale(1);
        }
      }

      /* Reduced motion: disable custom cursor entirely */
      @media (prefers-reduced-motion: reduce) {
        #cursor.custom-cursor { display: none !important; }
        html { scroll-behavior: auto; }
      }

      /* Coarse pointers (mobile / touch): never show */
      @media (pointer: coarse) {
        #cursor.custom-cursor { display: none !important; }
      }
    </style>

    <script>
      (function () {
        const isCoarse = window.matchMedia('(pointer: coarse)').matches;
        const reduceMotionMql = window.matchMedia('(prefers-reduced-motion: reduce)');
        if (isCoarse || reduceMotionMql.matches) {
          document.documentElement.setAttribute('data-reduced-motion','1');
          return;
        }

        const cursor = document.getElementById('cursor');
        if (!cursor) return;

        const SIZE = 18; // Keep in sync with CSS
        const HALF = SIZE / 2;
        let targetX = -100, targetY = -100; // start off-screen
        let x = targetX, y = targetY;
        let scale = 1;
        const ease = 0.18; // smoothing factor (0..1)
        let rafId = null;
        let visible = false;

        function setVisible(v) {
          if (visible === v) return;
          visible = v;
          cursor.style.opacity = v ? '1' : '0';
        }

        function render() {
          cursor.style.transform = 'translate3d(' + x + 'px,' + y + 'px,0) scale(' + scale + ')';
        }

        function animate() {
          x += (targetX - x) * ease;
          y += (targetY - y) * ease;
          render();
          rafId = window.requestAnimationFrame(animate);
        }

        function onMove(e) {
          targetX = (e.clientX - HALF);
          targetY = (e.clientY - HALF);
          setVisible(true);
          if (rafId === null) rafId = window.requestAnimationFrame(animate);
        }

        function onLeave() {
          setVisible(false);
          if (rafId !== null) { cancelAnimationFrame(rafId); rafId = null; }
        }

        function onDown() { scale = 0.85; render(); }
        function onUp() { scale = 1; render(); }

        window.addEventListener('mousemove', onMove, { passive: true });
        window.addEventListener('mouseleave', onLeave, { passive: true });
        window.addEventListener('mousedown', onDown, { passive: true });
        window.addEventListener('mouseup', onUp, { passive: true });
        window.addEventListener('blur', onLeave, { passive: true });

        // React to runtime changes of reduced motion
        reduceMotionMql.addEventListener('change', function (e) {
          if (e.matches) {
            onLeave();
            document.documentElement.setAttribute('data-reduced-motion','1');
            cursor.style.display = 'none';
          } else {
            document.documentElement.removeAttribute('data-reduced-motion');
            cursor.style.display = '';
          }
        });
      })();
    </script>
    </body>
</html>
