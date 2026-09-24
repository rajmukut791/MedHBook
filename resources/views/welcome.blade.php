```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MedHBook | Smart Digital Healthcare</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* ============================================================
           MEDHBOOK — ULTRA PREMIUM 3D WELCOME PAGE
           Existing Laravel routes/functionality remain unchanged.
        ============================================================ */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            background:
                radial-gradient(circle at 20% 20%, rgba(16,185,129,.12), transparent 35%),
                radial-gradient(circle at 85% 30%, rgba(6,182,212,.08), transparent 32%),
                radial-gradient(circle at 80% 80%, rgba(239,68,68,.09), transparent 35%),
                #020606;
        }

        ::selection {
            background: #34d399;
            color: #020606;
        }

        /* ============================================================
           CUSTOM VARIABLES
        ============================================================ */

        :root {
            --green: #34d399;
            --green2: #10b981;
            --teal: #14b8a6;
            --cyan: #22d3ee;
            --red: #ef4444;
            --dark: #020606;
        }

        /* ============================================================
           GLOBAL BACKGROUND
        ============================================================ */

        .universe {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: -10;
        }

        .aurora {
            position: absolute;
            border-radius: 9999px;
            filter: blur(120px);
            opacity: .28;
            animation: auroraMove 16s ease-in-out infinite alternate;
        }

        .aurora.one {
            width: 520px;
            height: 520px;
            background: rgba(16,185,129,.35);
            left: -180px;
            top: -120px;
        }

        .aurora.two {
            width: 500px;
            height: 500px;
            background: rgba(239,68,68,.22);
            right: -160px;
            bottom: -140px;
            animation-delay: -5s;
        }

        .aurora.three {
            width: 420px;
            height: 420px;
            background: rgba(34,211,238,.14);
            left: 45%;
            top: 35%;
            animation-delay: -8s;
        }

        @keyframes auroraMove {
            0% {
                transform: translate3d(-30px,-30px,0) scale(.9);
            }

            50% {
                transform: translate3d(70px,40px,0) scale(1.12);
            }

            100% {
                transform: translate3d(-20px,100px,0) scale(.95);
            }
        }

        /* ============================================================
           GRID
        ============================================================ */

        .cyber-grid {
            position: absolute;
            inset: 0;
            opacity: .13;

            background-image:
                linear-gradient(rgba(52,211,153,.16) 1px, transparent 1px),
                linear-gradient(90deg, rgba(52,211,153,.16) 1px, transparent 1px);

            background-size: 60px 60px;

            mask-image:
                linear-gradient(to bottom, transparent, black 25%, black 70%, transparent);
        }

        /* ============================================================
           STARS / PARTICLES
        ============================================================ */

        #particle-container {
            position: absolute;
            inset: 0;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(110,231,183,.8);
            box-shadow: 0 0 15px rgba(52,211,153,.8);
            animation: particleFloat linear infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(110vh) scale(.3);
                opacity: 0;
            }

            10% {
                opacity: .8;
            }

            90% {
                opacity: .5;
            }

            100% {
                transform: translateY(-20vh) scale(1.3);
                opacity: 0;
            }
        }

        /* ============================================================
           NAVBAR
        ============================================================ */

        .premium-nav {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(2,6,6,.58);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            border-bottom: 1px solid rgba(255,255,255,.08);

            box-shadow:
                0 20px 70px rgba(0,0,0,.4),
                0 1px 0 rgba(52,211,153,.05);
        }

        .logo-box {
            position: relative;
            width: 52px;
            height: 52px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 18px;

            background:
                linear-gradient(145deg, #34d399, #059669);

            box-shadow:
                0 0 30px rgba(16,185,129,.45),
                inset 0 1px 1px rgba(255,255,255,.5);

            transform-style: preserve-3d;
            animation: logoFloat 5s ease-in-out infinite;
        }

        .logo-box::before {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 22px;
            border: 1px solid rgba(52,211,153,.3);
            animation: logoPulse 2.8s ease-in-out infinite;
        }

        @keyframes logoFloat {
            0%,100% {
                transform: translateY(0) rotateY(0deg);
            }

            50% {
                transform: translateY(-4px) rotateY(15deg);
            }
        }

        @keyframes logoPulse {
            0%,100% {
                transform: scale(.95);
                opacity: .3;
            }

            50% {
                transform: scale(1.12);
                opacity: .8;
            }
        }

        /* ============================================================
           HERO WRAPPER
        ============================================================ */

        .hero-shell {
            position: relative;
            overflow: hidden;

            border-radius: 42px;

            border: 1px solid rgba(255,255,255,.10);

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.065),
                    rgba(255,255,255,.018)
                );

            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);

            box-shadow:
                0 60px 140px rgba(0,0,0,.55),
                0 0 80px rgba(16,185,129,.10),
                inset 0 1px 0 rgba(255,255,255,.12);
        }

        .hero-shell::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            left: -160px;
            top: -170px;

            border-radius: 50%;

            background: rgba(16,185,129,.20);

            filter: blur(120px);
        }

        .hero-shell::after {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            right: -160px;
            bottom: -180px;

            border-radius: 50%;

            background: rgba(239,68,68,.16);

            filter: blur(120px);
        }

        /* ============================================================
           ANIMATED BORDER
        ============================================================ */

        .hero-border-light {
            position: absolute;
            inset: 0;
            pointer-events: none;
            border-radius: inherit;
            overflow: hidden;
        }

        .hero-border-light::before {
            content: "";
            position: absolute;

            width: 250px;
            height: 250px;

            top: -120px;
            left: -120px;

            background: #34d399;

            filter: blur(80px);

            animation: borderTravel 10s linear infinite;
        }

        @keyframes borderTravel {
            0% {
                transform: translate(0,0);
            }

            25% {
                transform: translate(1100px,0);
            }

            50% {
                transform: translate(1100px,650px);
            }

            75% {
                transform: translate(0,650px);
            }

            100% {
                transform: translate(0,0);
            }
        }

        /* ============================================================
           STATUS BADGE
        ============================================================ */

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 10px 18px;

            border-radius: 999px;

            color: #a7f3d0;
            font-size: 13px;
            font-weight: 800;

            background: rgba(16,185,129,.08);

            border: 1px solid rgba(52,211,153,.22);

            box-shadow:
                0 0 30px rgba(16,185,129,.08),
                inset 0 1px rgba(255,255,255,.05);
        }

        .status-dot {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #34d399;

            box-shadow: 0 0 16px #34d399;
        }

        .status-dot::after {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 50%;
            border: 1px solid #34d399;
            animation: pingCustom 1.8s ease-out infinite;
        }

        @keyframes pingCustom {
            from {
                transform: scale(.4);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }

        /* ============================================================
           HEADING
        ============================================================ */

        .premium-title {
            font-weight: 950;
            letter-spacing: -.055em;
            line-height: .98;
        }

        .gradient-word {
            background:
                linear-gradient(
                    90deg,
                    #a7f3d0,
                    #34d399,
                    #22d3ee,
                    #34d399,
                    #a7f3d0
                );

            background-size: 250% auto;

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;

            animation: titleGradient 5s linear infinite;

            filter: drop-shadow(0 0 25px rgba(52,211,153,.25));
        }

        @keyframes titleGradient {
            to {
                background-position: 250% center;
            }
        }

        /* ============================================================
           BUTTONS
        ============================================================ */

        .premium-button {
            position: relative;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-height: 56px;
            padding: 0 27px;

            border-radius: 18px;

            font-weight: 900;
            letter-spacing: -.01em;

            overflow: hidden;

            transition:
                transform .35s ease,
                box-shadow .35s ease,
                border-color .35s ease;
        }

        .premium-button:hover {
            transform: translateY(-5px) scale(1.025);
        }

        .premium-button::after {
            content: "";

            position: absolute;
            width: 80px;
            height: 180px;

            top: -70px;
            left: -130px;

            transform: rotate(25deg);

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,.45),
                    transparent
                );

            transition: .7s;
        }

        .premium-button:hover::after {
            left: 120%;
        }

        .btn-login {
            color: #020606;
            background: white;

            box-shadow:
                0 18px 50px rgba(255,255,255,.12);
        }

        .btn-login:hover {
            box-shadow:
                0 25px 70px rgba(255,255,255,.22);
        }

        .btn-patient {
            color: white;

            background:
                linear-gradient(135deg,#10b981,#0d9488);

            box-shadow:
                0 18px 55px rgba(16,185,129,.28);
        }

        .btn-patient:hover {
            box-shadow:
                0 25px 80px rgba(16,185,129,.42);
        }

        .btn-doctor {
            color: white;

            background: rgba(255,255,255,.05);

            border: 1px solid rgba(255,255,255,.14);

            box-shadow:
                inset 0 1px rgba(255,255,255,.08);
        }

        .btn-doctor:hover {
            border-color: rgba(52,211,153,.5);

            box-shadow:
                0 20px 60px rgba(16,185,129,.15);
        }

        /* ============================================================
           MINI STAT CARDS
        ============================================================ */

        .mini-stat {
            position: relative;

            padding: 18px;

            border-radius: 22px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.075),
                    rgba(255,255,255,.025)
                );

            border: 1px solid rgba(255,255,255,.09);

            backdrop-filter: blur(18px);

            transition:
                transform .35s ease,
                border-color .35s ease,
                box-shadow .35s ease;
        }

        .mini-stat:hover {
            transform: translateY(-6px);

            border-color: rgba(52,211,153,.25);

            box-shadow:
                0 20px 50px rgba(0,0,0,.25);
        }

        /* ============================================================
           RIGHT 3D VISUAL
        ============================================================ */

        .visual-world {
            position: relative;
            min-height: 620px;

            display: flex;
            justify-content: center;
            align-items: center;

            overflow: hidden;

            perspective: 1100px;

            background:
                radial-gradient(circle at center, rgba(16,185,129,.10), transparent 35%),
                radial-gradient(circle at 80% 20%, rgba(239,68,68,.14), transparent 30%),
                linear-gradient(145deg,#06110f,#050909 55%,#160505);
        }

        .visual-grid {
            position: absolute;
            width: 130%;
            height: 130%;

            bottom: -70%;

            transform:
                rotateX(70deg)
                translateZ(-100px);

            transform-origin: center;

            background-image:
                linear-gradient(rgba(52,211,153,.20) 1px,transparent 1px),
                linear-gradient(90deg,rgba(52,211,153,.20) 1px,transparent 1px);

            background-size: 45px 45px;

            opacity: .35;

            animation: gridMove 7s linear infinite;
        }

        @keyframes gridMove {
            to {
                background-position: 0 45px;
            }
        }

        /* ============================================================
           3D SCENE
        ============================================================ */

        #scene3d {
            position: relative;

            width: 500px;
            height: 500px;

            transform-style: preserve-3d;

            transition: transform .12s linear;
        }

        /* ============================================================
           CORE
        ============================================================ */

        .health-core {
            position: absolute;

            width: 230px;
            height: 230px;

            left: 50%;
            top: 50%;

            transform:
                translate(-50%,-50%)
                translateZ(60px);

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                radial-gradient(
                    circle at 35% 30%,
                    rgba(255,255,255,.20),
                    rgba(16,185,129,.12) 25%,
                    rgba(2,6,6,.82) 70%
                );

            border: 1px solid rgba(110,231,183,.24);

            box-shadow:
                0 0 50px rgba(16,185,129,.25),
                0 0 120px rgba(16,185,129,.18),
                inset 0 0 50px rgba(52,211,153,.08);

            transform-style: preserve-3d;

            animation: coreFloat 5s ease-in-out infinite;
        }

        .health-core::before {
            content: "";

            position: absolute;
            inset: 18px;

            border-radius: 50%;

            border:
                1px solid rgba(255,255,255,.10);

            box-shadow:
                inset 0 0 35px rgba(52,211,153,.10);
        }

        .health-core::after {
            content: "";

            position: absolute;
            inset: -18px;

            border-radius: 50%;

            border:
                1px dashed rgba(52,211,153,.20);

            animation: spinRing 18s linear infinite;
        }

        @keyframes coreFloat {
            0%,100% {
                transform:
                    translate(-50%,-50%)
                    translateZ(60px)
                    translateY(0)
                    rotateY(-5deg);
            }

            50% {
                transform:
                    translate(-50%,-50%)
                    translateZ(90px)
                    translateY(-15px)
                    rotateY(8deg);
            }
        }

        /* ============================================================
           MEDICAL CROSS
        ============================================================ */

        .medical-symbol {
            position: relative;

            width: 94px;
            height: 94px;

            filter:
                drop-shadow(0 0 20px rgba(239,68,68,.7));

            animation: heartPulse 2.5s ease-in-out infinite;
        }

        .medical-symbol::before,
        .medical-symbol::after {
            content: "";
            position: absolute;

            left: 50%;
            top: 50%;

            transform: translate(-50%,-50%);

            border-radius: 13px;

            background:
                linear-gradient(145deg,#ff6b6b,#dc2626);

            box-shadow:
                inset 0 1px rgba(255,255,255,.35);
        }

        .medical-symbol::before {
            width: 34px;
            height: 94px;
        }

        .medical-symbol::after {
            width: 94px;
            height: 34px;
        }

        @keyframes heartPulse {
            0%,100% {
                transform: scale(.96);
            }

            50% {
                transform: scale(1.08);
            }
        }

        /* ============================================================
           ORBITAL RINGS
        ============================================================ */

        .orbit {
            position: absolute;

            left: 50%;
            top: 50%;

            border-radius: 50%;

            transform-style: preserve-3d;
        }

        .orbit-one {
            width: 360px;
            height: 360px;

            margin-left: -180px;
            margin-top: -180px;

            border: 1px solid rgba(52,211,153,.30);

            transform: rotateX(68deg) rotateZ(10deg);

            animation: orbitOne 12s linear infinite;
        }

        .orbit-two {
            width: 410px;
            height: 410px;

            margin-left: -205px;
            margin-top: -205px;

            border: 1px solid rgba(34,211,238,.18);

            transform:
                rotateY(68deg)
                rotateX(25deg);

            animation: orbitTwo 16s linear infinite reverse;
        }

        .orbit-three {
            width: 465px;
            height: 465px;

            margin-left: -232.5px;
            margin-top: -232.5px;

            border:
                1px dashed rgba(239,68,68,.18);

            transform:
                rotateX(52deg)
                rotateY(35deg);

            animation: orbitThree 25s linear infinite;
        }

        @keyframes orbitOne {
            to {
                transform:
                    rotateX(68deg)
                    rotateZ(370deg);
            }
        }

        @keyframes orbitTwo {
            to {
                transform:
                    rotateY(428deg)
                    rotateX(25deg);
            }
        }

        @keyframes orbitThree {
            to {
                transform:
                    rotateX(412deg)
                    rotateY(35deg);
            }
        }

        @keyframes spinRing {
            to {
                transform: rotate(360deg);
            }
        }

        /* ============================================================
           ORBIT DOTS
        ============================================================ */

        .orbit-dot {
            position: absolute;

            width: 14px;
            height: 14px;

            border-radius: 50%;

            background: #34d399;

            box-shadow:
                0 0 12px #34d399,
                0 0 30px rgba(52,211,153,.8);
        }

        .orbit-one .orbit-dot {
            left: 50%;
            top: -7px;
        }

        .orbit-two .orbit-dot {
            right: 8%;
            top: 14%;
            background: #22d3ee;

            box-shadow:
                0 0 12px #22d3ee,
                0 0 30px rgba(34,211,238,.8);
        }

        .orbit-three .orbit-dot {
            bottom: 4%;
            left: 22%;
            background: #ef4444;

            box-shadow:
                0 0 12px #ef4444,
                0 0 30px rgba(239,68,68,.8);
        }

        /* ============================================================
           SCANNER
        ============================================================ */

        .scanner {
            position: absolute;

            width: 290px;
            height: 290px;

            left: 50%;
            top: 50%;

            transform:
                translate(-50%,-50%)
                translateZ(40px);

            border-radius: 50%;

            overflow: hidden;

            pointer-events: none;
        }

        .scanner::before {
            content: "";

            position: absolute;

            width: 100%;
            height: 3px;

            top: 0;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    #34d399,
                    transparent
                );

            box-shadow:
                0 0 25px #34d399;

            animation: scan 3.5s ease-in-out infinite;
        }

        @keyframes scan {
            0%,100% {
                top: 5%;
                opacity: 0;
            }

            15% {
                opacity: 1;
            }

            50% {
                top: 90%;
                opacity: 1;
            }

            85% {
                opacity: 1;
            }
        }

        /* ============================================================
           FLOATING DATA CARDS
        ============================================================ */

        .data-card {
            position: absolute;

            padding: 13px 17px;

            border-radius: 17px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.10),
                    rgba(255,255,255,.035)
                );

            border:
                1px solid rgba(255,255,255,.12);

            backdrop-filter: blur(20px);

            box-shadow:
                0 20px 50px rgba(0,0,0,.25);

            font-size: 12px;
            font-weight: 800;

            white-space: nowrap;

            transform-style: preserve-3d;
        }

        .card-security {
            left: -20px;
            top: 90px;

            color: #a7f3d0;

            animation:
                cardFloat1 5s ease-in-out infinite;
        }

        .card-doctor {
            right: -35px;
            top: 145px;

            color: #fecaca;

            animation:
                cardFloat2 5.5s ease-in-out infinite;
        }

        .card-report {
            left: 40px;
            bottom: 70px;

            color: #a5f3fc;

            animation:
                cardFloat3 6s ease-in-out infinite;
        }

        .card-appointment {
            right: 15px;
            bottom: 85px;

            color: #fde68a;

            animation:
                cardFloat4 5.8s ease-in-out infinite;
        }

        @keyframes cardFloat1 {
            0%,100% {
                transform:
                    translateY(0)
                    rotateY(10deg)
                    translateZ(70px);
            }

            50% {
                transform:
                    translateY(-18px)
                    rotateY(-5deg)
                    translateZ(100px);
            }
        }

        @keyframes cardFloat2 {
            0%,100% {
                transform:
                    translateY(0)
                    rotateY(-10deg)
                    translateZ(70px);
            }

            50% {
                transform:
                    translateY(18px)
                    rotateY(5deg)
                    translateZ(110px);
            }
        }

        @keyframes cardFloat3 {
            0%,100% {
                transform:
                    translateY(0)
                    translateZ(80px);
            }

            50% {
                transform:
                    translateY(-15px)
                    translateZ(115px);
            }
        }

        @keyframes cardFloat4 {
            0%,100% {
                transform:
                    translateY(0)
                    translateZ(75px);
            }

            50% {
                transform:
                    translateY(15px)
                    translateZ(100px);
            }
        }

        /* ============================================================
           ECG
        ============================================================ */

        .ecg-container {
            position: absolute;

            width: 320px;
            height: 80px;

            left: 50%;
            bottom: 20px;

            transform: translateX(-50%);

            opacity: .45;

            overflow: hidden;
        }

        .ecg-line {
            width: 640px;
            height: 100%;

            animation: ecgMove 5s linear infinite;
        }

        @keyframes ecgMove {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-320px);
            }
        }

        /* ============================================================
           FEATURE CARDS
        ============================================================ */

        .feature-card {
            position: relative;

            min-height: 235px;

            overflow: hidden;

            border-radius: 30px;

            padding: 28px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.06),
                    rgba(255,255,255,.018)
                );

            border: 1px solid rgba(255,255,255,.09);

            backdrop-filter: blur(20px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);

            transition:
                transform .45s cubic-bezier(.2,.8,.2,1),
                border-color .45s ease,
                box-shadow .45s ease;
        }

        .feature-card::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            right: -90px;
            top: -90px;

            border-radius: 50%;

            background: rgba(52,211,153,.10);

            filter: blur(40px);

            transition: .5s;
        }

        .feature-card:hover {
            transform:
                translateY(-10px)
                perspective(800px)
                rotateX(3deg);

            border-color:
                rgba(52,211,153,.25);

            box-shadow:
                0 35px 100px rgba(0,0,0,.4),
                0 0 50px rgba(16,185,129,.08);
        }

        .feature-card:hover::before {
            transform: scale(1.5);
        }

        .feature-icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 19px;

            background:
                linear-gradient(
                    145deg,
                    rgba(52,211,153,.20),
                    rgba(52,211,153,.06)
                );

            border:
                1px solid rgba(52,211,153,.18);

            box-shadow:
                0 15px 40px rgba(16,185,129,.10);

            transition: transform .5s ease;
        }

        .feature-card:hover .feature-icon {
            transform:
                translateY(-5px)
                rotateY(20deg)
                scale(1.08);
        }

        /* ============================================================
           MOUSE GLOW
        ============================================================ */

        #mouse-glow {
            position: fixed;

            width: 450px;
            height: 450px;

            left: 0;
            top: 0;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(52,211,153,.07),
                    transparent 65%
                );

            pointer-events: none;

            z-index: -5;

            transform:
                translate(-50%,-50%);

            transition:
                left .1s linear,
                top .1s linear;
        }

        /* ============================================================
           REVEAL ANIMATION
        ============================================================ */

        .reveal {
            opacity: 0;

            transform:
                translateY(35px);

            transition:
                opacity .9s ease,
                transform .9s ease;
        }

        .reveal.visible {
            opacity: 1;

            transform:
                translateY(0);
        }

        /* ============================================================
           RESPONSIVE
        ============================================================ */

        @media (max-width: 1024px) {

            .visual-world {
                min-height: 570px;
            }

            #scene3d {
                transform: scale(.88);
            }
        }

        @media (max-width: 640px) {

            .hero-shell {
                border-radius: 28px;
            }

            .visual-world {
                min-height: 470px;
            }

            #scene3d {
                width: 420px;
                height: 420px;
                transform: scale(.72);
            }

            .premium-button {
                width: 100%;
            }

            .data-card {
                font-size: 11px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .001ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
            }
        }

    </style>
</head>


<body class="min-h-screen text-white antialiased">


<!-- ================================================================
     GLOBAL LIVE BACKGROUND
================================================================ -->

<div class="universe">

    <div class="aurora one"></div>
    <div class="aurora two"></div>
    <div class="aurora three"></div>

    <div class="cyber-grid"></div>

    <div id="particle-container"></div>

</div>

<div id="mouse-glow"></div>


<!-- ================================================================
     NAVBAR
================================================================ -->

<nav class="premium-nav">

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-4">

        <div class="flex items-center justify-between">

            <!-- Brand -->
            <a href="/" class="flex items-center gap-4 group">

                <div class="logo-box">

                    <span class="relative z-10 text-2xl">
                        ❤
                    </span>

                </div>

                <div>

                    <div class="text-[24px] sm:text-[27px] leading-none font-black tracking-[-0.04em]">
                        MedHBook
                    </div>

                    <div class="mt-1.5 text-[9px] sm:text-[10px] uppercase tracking-[0.30em] text-emerald-300/70 font-bold">
                        Digital Health Ecosystem
                    </div>

                </div>

            </a>


            <!-- System Status -->
            <div class="hidden sm:flex items-center gap-3">

                <div class="status-badge">

                    <span class="status-dot"></span>

                    Secure System

                </div>

            </div>

        </div>

    </div>

</nav>


<!-- ================================================================
     HERO
================================================================ -->

<main>

<section class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 lg:pt-14">

    <div class="hero-shell">

        <div class="hero-border-light"></div>


        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2">


            <!-- ====================================================
                 LEFT CONTENT
            ===================================================== -->

            <div class="flex items-center px-7 sm:px-10 lg:px-14 xl:px-16 py-14 lg:py-20">

                <div class="max-w-2xl">


                    <!-- Badge -->

                    <div class="status-badge reveal">

                        <span class="status-dot"></span>

                        Smart Digital Healthcare Platform

                    </div>


                    <!-- Main Title -->

                    <h1 class="premium-title reveal mt-8 text-[42px] sm:text-[55px] lg:text-[62px] xl:text-[69px]">

                        Healthcare

                        <span class="gradient-word block mt-2">
                            Reimagined.
                        </span>

                        <span class="block mt-2 text-white/90">
                            Connected.
                        </span>

                    </h1>


                    <!-- Description -->

                    <p class="reveal mt-7 max-w-xl text-[15px] sm:text-[17px] leading-8 text-slate-300/80">

                        A secure digital healthcare ecosystem where patients,
                        doctors, appointments, prescriptions and medical reports
                        come together through one seamless experience.

                    </p>


                    <!-- ====================================================
                         ROUTES — EXISTING FUNCTIONALITY PRESERVED
                    ===================================================== -->

                    <div class="reveal mt-10 flex flex-wrap gap-3">


                        <!-- LOGIN -->

                        <a
                            href="{{ route('login') }}"
                            class="premium-button btn-login"
                        >

                            <span class="relative z-10 flex items-center gap-2">

                                Login

                                <span class="text-lg">
                                    →
                                </span>

                            </span>

                        </a>


                        <!-- PATIENT REGISTER -->

                        <a
                            href="{{ route('register', ['role' => 'patient']) }}"
                            class="premium-button btn-patient"
                        >

                            <span class="relative z-10">

                                Patient Register

                            </span>

                        </a>


                        <!-- DOCTOR REGISTER -->

                        <a
                            href="{{ route('register', ['role' => 'doctor']) }}"
                            class="premium-button btn-doctor"
                        >

                            <span class="relative z-10">

                                Doctor Register

                            </span>

                        </a>


                    </div>


                    <!-- ====================================================
                         STATS
                    ===================================================== -->

                    <div class="reveal mt-12 grid grid-cols-3 gap-3 sm:gap-4 max-w-xl">


                        <div class="mini-stat">

                            <div class="text-[23px] sm:text-[27px] font-black text-emerald-300">
                                24/7
                            </div>

                            <div class="mt-1 text-[10px] sm:text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Access
                            </div>

                        </div>


                        <div class="mini-stat">

                            <div class="text-[23px] sm:text-[27px] font-black text-red-300">
                                100%
                            </div>

                            <div class="mt-1 text-[10px] sm:text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Private
                            </div>

                        </div>


                        <div class="mini-stat">

                            <div class="text-[23px] sm:text-[27px] font-black text-cyan-300">
                                Smart
                            </div>

                            <div class="mt-1 text-[10px] sm:text-xs font-bold text-slate-500 uppercase tracking-wider">
                                System
                            </div>

                        </div>


                    </div>


                    <!-- Trust row -->

                    <div class="reveal mt-9 flex flex-wrap items-center gap-x-6 gap-y-3 text-xs font-semibold text-slate-500">

                        <span class="flex items-center gap-2">
                            <span class="text-emerald-400">●</span>
                            Secure Records
                        </span>

                        <span class="flex items-center gap-2">
                            <span class="text-cyan-400">●</span>
                            Smart Appointments
                        </span>

                        <span class="flex items-center gap-2">
                            <span class="text-red-400">●</span>
                            Doctor Access
                        </span>

                    </div>


                </div>

            </div>


            <!-- ====================================================
                 RIGHT 3D VISUAL
            ===================================================== -->

            <div
                id="visualWorld"
                class="visual-world"
            >

                <!-- Perspective floor -->
                <div class="visual-grid"></div>


                <!-- Ambient lights -->

                <div
                    class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-red-500/10 blur-[100px]"
                ></div>

                <div
                    class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-emerald-500/10 blur-[100px]"
                ></div>


                <!-- 3D Scene -->

                <div id="scene3d">


                    <!-- Orbit 1 -->

                    <div class="orbit orbit-one">

                        <span class="orbit-dot"></span>

                    </div>


                    <!-- Orbit 2 -->

                    <div class="orbit orbit-two">

                        <span class="orbit-dot"></span>

                    </div>


                    <!-- Orbit 3 -->

                    <div class="orbit orbit-three">

                        <span class="orbit-dot"></span>

                    </div>


                    <!-- Scanner -->

                    <div class="scanner"></div>


                    <!-- Central Healthcare Core -->

                    <div class="health-core">

                        <div class="medical-symbol"></div>

                    </div>


                    <!-- Floating information cards -->

                    <div class="data-card card-security">

                        <span class="mr-2 text-emerald-400">
                            ●
                        </span>

                        Encrypted Files

                    </div>


                    <div class="data-card card-doctor">

                        <span class="mr-2 text-red-400">
                            ●
                        </span>

                        Smart Doctors

                    </div>


                    <div class="data-card card-report">

                        <span class="mr-2 text-cyan-400">
                            ●
                        </span>

                        Secure Reports

                    </div>


                    <div class="data-card card-appointment">

                        <span class="mr-2 text-yellow-300">
                            ●
                        </span>

                        Appointments

                    </div>


                </div>


                <!-- ====================================================
                     ECG LIVE LINE
                ===================================================== -->

                <div class="ecg-container">

                    <svg
                        class="ecg-line"
                        viewBox="0 0 640 80"
                        preserveAspectRatio="none"
                    >

                        <defs>

                            <linearGradient
                                id="ecgGradient"
                                x1="0%"
                                y1="0%"
                                x2="100%"
                                y2="0%"
                            >

                                <stop
                                    offset="0%"
                                    stop-color="#10b981"
                                    stop-opacity="0"
                                />

                                <stop
                                    offset="45%"
                                    stop-color="#34d399"
                                />

                                <stop
                                    offset="70%"
                                    stop-color="#22d3ee"
                                />

                                <stop
                                    offset="100%"
                                    stop-color="#10b981"
                                    stop-opacity="0"
                                />

                            </linearGradient>

                        </defs>


                        <path
                            d="
                                M0 42
                                L50 42
                                L65 42
                                L74 28
                                L84 58
                                L96 8
                                L110 67
                                L125 42
                                L175 42
                                L225 42
                                L240 42
                                L249 28
                                L259 58
                                L271 8
                                L285 67
                                L300 42
                                L350 42
                                L400 42
                                L415 42
                                L424 28
                                L434 58
                                L446 8
                                L460 67
                                L475 42
                                L525 42
                                L575 42
                                L590 42
                                L599 28
                                L609 58
                                L621 8
                                L635 67
                                L640 42
                            "
                            fill="none"
                            stroke="url(#ecgGradient)"
                            stroke-width="2"
                        />

                    </svg>

                </div>


                <!-- Visual Label -->

                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-center">

                    <p class="text-[9px] tracking-[.45em] uppercase font-black text-emerald-300/50">
                        MedHBook Core
                    </p>

                </div>


            </div>


        </div>

    </div>

</section>


<!-- ================================================================
     FEATURE SECTION
================================================================ -->

<section class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-14">


    <!-- Section Heading -->

    <div class="reveal text-center mb-9">

        <div class="text-[10px] uppercase tracking-[.45em] text-emerald-400/70 font-black">
            Connected Healthcare
        </div>

        <h2 class="mt-4 text-3xl sm:text-4xl font-black tracking-[-.04em]">

            Everything in

            <span class="gradient-word">
                One Secure Platform
            </span>

        </h2>

    </div>


    <!-- Cards -->

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">


        <!-- ========================================================
             SECURE DOCUMENTS
        ========================================================= -->

        <article class="feature-card reveal">

            <div class="feature-icon">

                <svg
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#6ee7b7"
                    stroke-width="1.7"
                >

                    <rect
                        x="5"
                        y="10"
                        width="14"
                        height="10"
                        rx="2"
                    />

                    <path
                        d="M8 10V7a4 4 0 0 1 8 0v3"
                    />

                    <path
                        d="M12 14v2"
                    />

                </svg>

            </div>


            <h3 class="mt-6 text-xl font-black">
                Secure Documents
            </h3>


            <p class="mt-3 text-sm leading-7 text-slate-400">

                Patient reports and medical documents remain protected
                through secure private access control.

            </p>


            <div class="mt-6 flex items-center gap-2 text-xs font-black text-emerald-300">

                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>

                Protected Medical Records

            </div>

        </article>


        <!-- ========================================================
             DOCTOR WORKFLOW
        ========================================================= -->

        <article class="feature-card reveal">

            <div
                class="feature-icon"
                style="
                    background:
                    linear-gradient(
                        145deg,
                        rgba(239,68,68,.18),
                        rgba(239,68,68,.05)
                    );

                    border-color:
                    rgba(239,68,68,.15);
                "
            >

                <svg
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#fca5a5"
                    stroke-width="1.7"
                >

                    <circle
                        cx="12"
                        cy="7"
                        r="4"
                    />

                    <path
                        d="M5 21a7 7 0 0 1 14 0"
                    />

                    <path
                        d="M19 8v4"
                    />

                    <path
                        d="M17 10h4"
                    />

                </svg>

            </div>


            <h3 class="mt-6 text-xl font-black">
                Doctor Workflow
            </h3>


            <p class="mt-3 text-sm leading-7 text-slate-400">

                Doctors can manage patients, appointments and digital
                prescriptions through a streamlined workflow.

            </p>


            <div class="mt-6 flex items-center gap-2 text-xs font-black text-red-300">

                <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>

                Connected Doctor Experience

            </div>

        </article>


        <!-- ========================================================
             APPOINTMENTS
        ========================================================= -->

        <article class="feature-card reveal">

            <div
                class="feature-icon"
                style="
                    background:
                    linear-gradient(
                        145deg,
                        rgba(34,211,238,.18),
                        rgba(34,211,238,.05)
                    );

                    border-color:
                    rgba(34,211,238,.15);
                "
            >

                <svg
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#67e8f9"
                    stroke-width="1.7"
                >

                    <rect
                        x="3"
                        y="5"
                        width="18"
                        height="16"
                        rx="2"
                    />

                    <path
                        d="M16 3v4M8 3v4M3 10h18"
                    />

                    <path
                        d="m9 15 2 2 4-4"
                    />

                </svg>

            </div>


            <h3 class="mt-6 text-xl font-black">
                Smart Appointments
            </h3>


            <p class="mt-3 text-sm leading-7 text-slate-400">

                Patients can discover doctors and continue their
                appointment booking process through the existing system.

            </p>


            <div class="mt-6 flex items-center gap-2 text-xs font-black text-cyan-300">

                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>

                Seamless Booking Flow

            </div>

        </article>


    </div>

</section>


<!-- ================================================================
     BOTTOM SYSTEM BAR
================================================================ -->

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">

    <div
        class="
            reveal
            rounded-[25px]
            border border-white/[.07]
            bg-white/[.025]
            backdrop-blur-xl
            px-6 py-5
            flex
            flex-col sm:flex-row
            items-center
            justify-between
            gap-4
        "
    >

        <div class="flex items-center gap-3">

            <span class="status-dot"></span>

            <div>

                <div class="text-sm font-black">
                    MedHBook System
                </div>

                <div class="text-[10px] text-slate-500 mt-1 uppercase tracking-widest">
                    Secure Healthcare Platform
                </div>

            </div>

        </div>


        <div class="text-[11px] text-slate-500 text-center sm:text-right">

            Patients

            <span class="mx-2 text-slate-700">•</span>

            Doctors

            <span class="mx-2 text-slate-700">•</span>

            Appointments

            <span class="mx-2 text-slate-700">•</span>

            Medical Records

        </div>

    </div>

</section>

</main>


<!-- ================================================================
     JAVASCRIPT — LIVE EFFECTS
================================================================ -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    /* ============================================================
       1. BACKGROUND PARTICLES
    ============================================================ */

    const particleContainer =
        document.getElementById('particle-container');

    if (particleContainer) {

        const particleCount =
            window.innerWidth < 768 ? 20 : 42;

        for (
            let i = 0;
            i < particleCount;
            i++
        ) {

            const particle =
                document.createElement('span');

            particle.className =
                'particle';

            const size =
                Math.random() * 2.5 + 1;

            particle.style.width =
                size + 'px';

            particle.style.height =
                size + 'px';

            particle.style.left =
                Math.random() * 100 + '%';

            particle.style.animationDuration =
                (Math.random() * 15 + 12) + 's';

            particle.style.animationDelay =
                (Math.random() * -20) + 's';

            particle.style.opacity =
                Math.random() * .7;

            particleContainer.appendChild(
                particle
            );

        }

    }


    /* ============================================================
       2. MOUSE FOLLOW GLOW
    ============================================================ */

    const mouseGlow =
        document.getElementById('mouse-glow');

    if (mouseGlow) {

        document.addEventListener(
            'mousemove',
            function (event) {

                mouseGlow.style.left =
                    event.clientX + 'px';

                mouseGlow.style.top =
                    event.clientY + 'px';

            }
        );

    }


    /* ============================================================
       3. 3D MOUSE PARALLAX
    ============================================================ */

    const visualWorld =
        document.getElementById('visualWorld');

    const scene =
        document.getElementById('scene3d');

    if (
        visualWorld &&
        scene &&
        window.matchMedia('(pointer:fine)').matches
    ) {

        visualWorld.addEventListener(
            'mousemove',
            function (event) {

                const rect =
                    visualWorld.getBoundingClientRect();

                const mouseX =
                    event.clientX -
                    rect.left;

                const mouseY =
                    event.clientY -
                    rect.top;

                const centerX =
                    rect.width / 2;

                const centerY =
                    rect.height / 2;

                const rotateY =
                    (
                        (mouseX - centerX) /
                        centerX
                    ) * 9;

                const rotateX =
                    (
                        (centerY - mouseY) /
                        centerY
                    ) * 8;

                scene.style.transform =
                    `
                        rotateX(${rotateX}deg)
                        rotateY(${rotateY}deg)
                    `;

            }
        );


        visualWorld.addEventListener(
            'mouseleave',
            function () {

                scene.style.transform =
                    'rotateX(0deg) rotateY(0deg)';

            }
        );

    }


    /* ============================================================
       4. SCROLL REVEAL
    ============================================================ */

    const revealItems =
        document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {

        const revealObserver =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add('visible');

                                revealObserver
                                    .unobserve(
                                        entry.target
                                    );

                            }

                        }
                    );

                },

                {
                    threshold: .10
                }

            );


        revealItems.forEach(
            function (item, index) {

                item.style.transitionDelay =
                    Math.min(
                        index * 70,
                        350
                    ) + 'ms';

                revealObserver.observe(
                    item
                );

            }
        );

    }

    else {

        revealItems.forEach(
            function (item) {

                item.classList.add(
                    'visible'
                );

            }
        );

    }


    /* ============================================================
       5. FEATURE CARD 3D TILT
    ============================================================ */

    const featureCards =
        document.querySelectorAll(
            '.feature-card'
        );


    if (
        window.matchMedia(
            '(pointer:fine)'
        ).matches
    ) {

        featureCards.forEach(
            function (card) {

                card.addEventListener(
                    'mousemove',
                    function (event) {

                        const rect =
                            card.getBoundingClientRect();

                        const x =
                            event.clientX -
                            rect.left;

                        const y =
                            event.clientY -
                            rect.top;

                        const rotateY =
                            (
                                (x / rect.width) -
                                .5
                            ) * 6;

                        const rotateX =
                            (
                                .5 -
                                (y / rect.height)
                            ) * 6;

                        card.style.transform =
                            `
                                translateY(-10px)
                                perspective(900px)
                                rotateX(${rotateX}deg)
                                rotateY(${rotateY}deg)
                            `;

                    }
                );


                card.addEventListener(
                    'mouseleave',
                    function () {

                        card.style.transform =
                            '';

                    }
                );

            }
        );

    }

});

</script>


</body>
</html>
```
