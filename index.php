<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'backend.php'; ?>
    <title><?php echo $site_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="icon" href="./logo.png" type="image/x-icon">

	<meta property="og:image" content="./logo.png">
	<meta property="og:title" content="<?php echo $site_title; ?>">
	<meta property="og:description" content="<?php echo $site_title; ?>">


<script>
    // สคริปต์นี้จะลบ hash ใน URL เมื่อโหลดหน้าเว็บครั้งแรกเพื่อป้องกันปัญหาการเลื่อน
    window.addEventListener('load', function () {
        if (window.location.hash) {
            // สร้าง URL ใหม่โดยการลบ hash
            const cleanUrl = window.location.origin + window.location.pathname + window.location.search;
            history.replaceState(null, '', cleanUrl); // ใช้ history.replaceState เพื่อเปลี่ยน URL โดยไม่โหลดหน้าซ้ำ
        }
    });
</script>

    <style>
        /* Custom CSS - Dynamic Theme */
        :root {
            --primary-background: <?php echo $primary_background; ?>;
            --secondary-background: <?php echo $secondary_background; ?>;
            --tertiary-background: <?php echo $tertiary_background; ?>;
            --accent-color-1: <?php echo $accent_color_1; ?>;
            --accent-color-2: <?php echo $accent_color_2; ?>;
            --text-light: <?php echo $text_light; ?>;
            --text-dark: <?php echo $text_dark; ?>;
            --button-shadow-color: <?php echo $button_shadow_color; ?>;
            --button-hover-shadow-color: <?php echo $button_hover_shadow_color; ?>;
            --navbar-shadow-color: <?php echo $navbar_shadow_color; ?>;
            --section-shadow-color: <?php echo $section_shadow_color; ?>;
            --cta-shadow-color: <?php echo $cta_shadow_color; ?>;
            --cta-hover-shadow-color: <?php echo $cta_hover_shadow_color; ?>;
            --back-to-top-shadow-color: <?php echo $back_to_top_shadow_color; ?>;
            --card-background: <?php echo $card_background; ?>;
            --card-text-color: <?php echo $card_text_color; ?>;
            --card-accent-color: <?php echo $card_accent_color; ?>;
            --hr-color: <?php echo $hr_color; ?>;
            --swal-popup-bg: <?php echo $swal_popup_bg; ?>;
            --swal-border-color: <?php echo $swal_border_color; ?>;
            --swal-title-color: <?php echo $swal_title_color; ?>;
            --swal-text-color: <?php echo $swal_text_color; ?>;
            --swal-button-bg: <?php echo $swal_button_bg; ?>;
            --swal-button-hover-bg: <?php echo $swal_button_hover_bg; ?>;
        }

        body {
            font-family: 'Press Start 2P', cursive;
            color: var(--text-light);
            background-color: var(--primary-background);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Press Start 2P', cursive;
            color: var(--accent-color-1);
        }

        /* Responsive Font Sizes */
        @media (max-width: 576px) {
            body { font-size: 0.8rem; }
            h1 { font-size: 1.8rem; }
            h2 { font-size: 1.5rem; }
            h3 { font-size: 1.2rem; }
        }

        @media (min-width: 577px) and (max-width: 992px) {
            body { font-size: 0.9rem; }
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            h3 { font-size: 1.5rem; }
        }

        @media (min-width: 993px) {
            body { font-size: 1rem; }
            h1 { font-size: 3rem; }
            h2 { font-size: 2.5rem; }
            h3 { font-size: 2rem; }
        }

        /* === Responsive Font Sizes for Header Section H1 only === */
        @media (max-width: 767.98px) {
            #header h1.display-3 {
                font-size: 1.8rem;
            }
        }
        /* ==================================================== */


        /* Video Background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            z-index: -2;
        }

        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        /* Overlay for video to improve text readability */
        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.7); /* Darker overlay for spooky feel */
            z-index: -1;
        }

        /* Particle Background */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        /* Navbar Styling */
        .navbar {
            background-color: var(--primary-background);
            border-bottom: 2px solid var(--accent-color-1);
            padding-top: 15px;
            padding-bottom: 15px;
            box-shadow: 0 4px 8px var(--navbar-shadow-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 50px;
        }

        .server-status-nav {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
            margin-left: 20px;
        }

        .server-status-nav .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
            display: inline-block;
        }

        .server-status-nav .status-indicator.online {
            background-color: #00FF00; /* Bright Green */
        }

        .server-status-nav .status-indicator.offline {
            background-color: #FF0000; /* Bright Red */
        }

        /* Announcement Ticker Styling */
        .announcement-ticker-container {
            overflow: hidden;
            white-space: nowrap;
            flex-grow: 1;
            text-align: center;
            position: relative;
            font-size: 0.9rem;
            color: var(--accent-color-1);
            background-color: var(--tertiary-background);
            border-radius: 5px;
            padding: 8px 15px;
            box-shadow: inset 0 0 5px rgba(var(--accent-color-1-rgb), 0.4); /* Requires JS to convert hex to RGB for this to work dynamically. Using direct hex for now. */
        }

        @media (min-width: 768px) {
            .announcement-ticker-container {
                margin-left: auto;
                margin-right: auto;
                max-width: 50%;
                font-size: 1rem;
            }
        }

        @media (max-width: 767.98px) {
            .announcement-ticker-container {
                margin: 0;
                flex-basis: 100%;
            }
        }

        .announcement-ticker {
            display: inline-block;
            animation: scroll-left 20s linear infinite;
            padding-left: 100%;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Navbar general spacing and alignment */
        .navbar .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 768px) {
            .navbar .container-fluid {
                justify-content: space-between;
            }
        }

        /* Section Styling */
        section {
            padding: 80px 0;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: var(--primary-background); /* Using primary-background with opacity */
            box-shadow: 0 4px 8px var(--section-shadow-color);
            position: relative;
            z-index: 0;
        }

        #header {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: none;
            box-shadow: none;
        }

        #header .container {
            background-color: var(--primary-background);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px var(--section-shadow-color);
        }

        .section-alt {
            background-color: var(--secondary-background); /* Using secondary-background with opacity */
        }

        /* Server Stats Styling */
        #server-stats .motd-display {
            background-color: var(--tertiary-background);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #server-stats .motd-line {
            white-space: pre-wrap;
            word-break: break-word;
            font-size: 1.1rem;
            line-height: 1.5;
            color: var(--text-light);
        }

        #server-stats .loading-spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid var(--accent-color-1);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Buttons Styling */
        .btn-custom {
            background-color: var(--tertiary-background);
            border: 2px solid var(--accent-color-1);
            color: var(--accent-color-1);
            padding: 15px 30px;
            margin: 10px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px var(--button-shadow-color);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .btn-custom:hover {
            background-color: var(--accent-color-1);
            color: var(--primary-background);
            transform: translateY(-5px);
            box-shadow: 0 8px 20px var(--button-hover-shadow-color);
        }

        .btn-store {
            background: linear-gradient(45deg, var(--card-accent-color), var(--accent-color-1)); /* Gold to Orange */
            border: none;
            color: var(--primary-background);
            font-weight: bold;
            font-size: 1.3rem;
            padding: 20px 40px;
            border-radius: 60px;
            box-shadow: 0 8px 25px var(--button-shadow-color); /* Adjusted for store button */
            animation: pulse 2s infinite;
        }

        .btn-store:hover {
            background: linear-gradient(45deg, var(--accent-color-1), var(--card-accent-color));
            transform: scale(1.05);
            box-shadow: 0 10px 30px var(--button-hover-shadow-color); /* Adjusted for store button */
            animation: none;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        /* New effect for Explore Server button: Spooky Glow */
        .btn-galactic-pulse { /* Renamed for general use, but customize for Halloween */
            position: relative;
            overflow: hidden;
            perspective: 1000px;
            transform-style: preserve-3d;
            animation: pulse-border-custom 2s infinite alternate, float-subtle 4s infinite ease-in-out;
            box-shadow: 0 0 20px var(--button-shadow-color), 0 0 40px var(--button-hover-shadow-color), 0 0 60px var(--button-shadow-color);
            border: 3px solid var(--accent-color-1);
            background: linear-gradient(145deg, var(--tertiary-background) 0%, var(--primary-background) 100%);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .btn-galactic-pulse:hover {
            transform: scale(1.08);
            box-shadow: 0 0 30px var(--button-hover-shadow-color), 0 0 60px var(--button-hover-shadow-color), 0 0 90px var(--button-shadow-color);
            border-color: var(--accent-color-2); /* Use a secondary accent color on hover */
            background: linear-gradient(145deg, var(--accent-color-1) 0%, var(--tertiary-background) 100%);
            color: var(--primary-background) !important;
            animation: none;
        }

        /* Shiny glare effect */
        .btn-galactic-pulse::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 0%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1); /* Subtle white glare */
            transform: rotate(45deg);
            transition: all 0.7s cubic-bezier(0.25, 0.8, 0.25, 1);
            z-index: 1;
        }

        .btn-galactic-pulse:hover::before {
            width: 200%;
        }

        /* Keyframes for border pulse - Custom */
        @keyframes pulse-border-custom {
            0% {
                border-color: var(--accent-color-1);
            }
            50% {
                border-color: var(--accent-color-2);
            }
            100% {
                border-color: var(--accent-color-1);
            }
        }

        /* Keyframes for subtle floating */
        @keyframes float-subtle {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-5px) translateX(5px);
            }
            50% {
                transform: translateY(0) translateX(0);
            }
            75% {
                transform: translateY(5px) translateX(-5px);
            }
        }


        /* Server Rules Styling */
        #server-rules .rule-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background-color: var(--tertiary-background);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #server-rules .rule-item i {
            font-size: 1.8rem;
            color: var(--accent-color-1);
            margin-right: 15px;
            flex-shrink: 0;
        }

        #server-rules hr {
            border-color: var(--hr-color);
            opacity: 0.5;
            margin: 30px 0;
        }

        /* Join Steps Styling */
        #join-steps .accordion-button {
            background-color: var(--tertiary-background) !important;
            color: var(--accent-color-1) !important;
            font-family: 'Press Start 2P', cursive;
            border: 1px solid var(--accent-color-1);
            border-radius: 5px;
            padding: 15px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        #join-steps .accordion-button:not(.collapsed) {
            background-color: var(--accent-color-1) !important;
            color: var(--primary-background) !important;
        }

        #join-steps .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem var(--button-shadow-color);
        }

        #join-steps .accordion-body {
            background-color: var(--secondary-background);
            color: var(--text-light);
            padding: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        /* CTA Section */
        #cta {
            text-align: center;
            padding: 100px 0;
            background-color: var(--primary-background);
        }

        .cta-button {
            background-color: var(--accent-color-1);
            color: var(--primary-background);
            font-size: 2rem;
            padding: 25px 50px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px var(--cta-shadow-color);
            animation: bounce 2s infinite;
        }

        .cta-button:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px var(--cta-hover-shadow-color);
            animation: none;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-15px); }
            60% { transform: translateY(-7px); }
        }

        /* Footer Styling */
        footer {
            background-color: var(--primary-background);
            color: var(--text-dark);
            padding: 40px 0;
            text-align: center;
            border-top: 1px solid var(--secondary-background);
        }

        /* Back to Top Button */
        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            border: 2px solid var(--accent-color-1);
            background-color: var(--tertiary-background);
            color: var(--accent-color-1);
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 1.5rem;
            transition: background-color 0.3s, color 0.3s, opacity 0.3s, transform 0.3s;
            box-shadow: 0 4px 12px var(--back-to-top-shadow-color);
            line-height: 1;
        }

        #backToTopBtn:hover {
            background-color: var(--accent-color-1);
            color: var(--primary-background);
            transform: translateY(-3px);
        }

        /* Responsive adjustments for back to top button */
        @media (max-width: 576px) {
            #backToTopBtn {
                bottom: 20px;
                right: 20px;
                padding: 8px 12px;
                font-size: 1.2rem;
            }
        }

        /* SweetAlert2 Custom Styling */
        .swal-custom-popup {
            background-color: var(--swal-popup-bg) !important;
            border: 2px solid var(--swal-border-color) !important;
            border-radius: 10px !important;
            font-family: 'Press Start 2P', cursive !important;
        }

        .swal-custom-title {
            color: var(--swal-title-color) !important;
            font-size: 1.5rem !important;
        }

        .swal-custom-content {
            color: var(--swal-text-color) !important;
            font-size: 1rem !important;
        }

        .swal-custom-button {
            background-color: var(--swal-button-bg) !important;
            color: var(--primary-background) !important; /* Use primary background for button text */
            font-family: 'Press Start 2P', cursive !important;
            border: none !important;
            border-radius: 5px !important;
            padding: 10px 20px !important;
            transition: background-color 0.3s, color 0.3s !important;
        }

        .swal-custom-button:hover {
            background-color: var(--swal-button-hover-bg) !important;
        }

        /* Specific card styling to use theme variables */
        #events-news .card {
            background-color: var(--card-background) !important;
            color: var(--card-text-color) !important;
        }
        #events-news .card-title {
            color: var(--card-accent-color) !important;
        }
        #events-news .card-text, #events-news small {
            color: var(--card-text-color) !important;
        }

    </style>
</head>
<body>
    <div id="particles-js"></div>

    <div class="video-background">
        <video autoplay muted loop playsinline>
            <source src="./bg.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-overlay"></div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-md-block" href="#">
                <img src="./logo.png" alt="SeaCraft Logo" class="me-2"> </a>

            <div class="announcement-ticker-container flex-fill">
                <div class="announcement-ticker" id="announcement-ticker">
                    <?php echo $announcement_ticker_text; ?>
                </div>
            </div>

            <div class="server-status-nav ms-lg-3 d-none d-lg-block" id="navbar-server-status">
                <span class="status-indicator"></span>
                <span class="status-text"><?php echo $server_status_loading; ?></span>
            </div>
        </div>
    </nav>

    <section id="header" class="d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="display-3 mb-4"><?php echo $welcome_title; ?></h1>
            <p class="lead mb-5"><?php echo $welcome_tagline; ?></p>
            <a href="#server-stats" class="btn btn-custom btn-galactic-pulse">
                <i class="fas fa-compass me-2"></i> <?php echo $explore_button_text; ?>
            </a>
        </div>
    </section>

    <main class="container mt-5">
        <section id="server-stats" class="text-center">
        <br>
            <h2 class="mb-4"><?php echo $server_info_title; ?></h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="motd-display" id="motd-display">
                        <div class="loading-spinner"></div>
                        <p class="mt-3"><?php echo $server_status_loading_message; ?></p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center mt-4">
                        <button class="btn btn-custom" id="copyIpBtn">
                            <i class="fas fa-copy me-2"></i> <?php echo $copy_ip_button_text; ?>
                        </button>
                        <a href="<?php echo $discord_invite_link; ?>" target="_blank" class="btn btn-custom">
                            <i class="fab fa-discord me-2"></i> <?php echo $discord_button_text; ?>
                        </a>
                        <a href="#server-rules" class="btn btn-custom">
                            <i class="fas fa-book me-2"></i> <?php echo $rules_button_text; ?>
                        </a>
                        <a href="<?php echo $store_link; ?>" target="_blank" class="btn btn-custom btn-store">
                            <i class="fas fa-shopping-cart me-2"></i> <?php echo $store_button_text; ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="events-news" class="section-alt">
            <h2 class="text-center mb-5"><?php echo $events_news_title; ?></h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-light border-0 rounded-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-accent-orange"><?php echo $event1_title; ?></h5>
                            <p class="card-text"><?php echo $event1_description; ?></p>
                            <small>Posted: <?php echo $event1_date; ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-light border-0 rounded-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-accent-orange"><?php echo $event2_title; ?></h5>
                            <p class="card-text"><?php echo $event2_description; ?></p>
                            <small>Posted: <?php echo $event2_date; ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo $view_all_news_link; ?>" class="btn btn-custom" target="_blank"><?php echo $view_all_news_button; ?></a>
            </div>
        </section>

        <section id="server-rules">
		<br>
		<br>
            <h2 class="text-center mb-5"><?php echo $server_rules_title; ?></h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rule-item">
                        <i class="fas fa-hand-paper"></i>
                        <p><?php echo $rule1_text; ?></p>
                    </div>
                    <hr>
                    <div class="rule-item">
                        <i class="fas fa-comments"></i>
                        <p><?php echo $rule2_text; ?></p>
                    </div>
                    <hr>
                    <div class="rule-item">
                        <i class="fas fa-ban"></i>
                        <p><?php echo $rule3_text; ?></p>
                    </div>
                    <hr>
                    <div class="rule-item">
                        <i class="fas fa-mask"></i>
                        <p><?php echo $rule4_text; ?></p>
                    </div>
                    <hr>
                    <div class="rule-item">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p><?php echo $rule5_text; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="join-steps" class="section-alt">
            <h2 class="text-center mb-5"><?php echo $how_to_join_title; ?></h2>
            <div class="accordion" id="joinAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $step1_title; ?>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#joinAccordion">
                        <div class="accordion-body">
                            <?php echo $step1_description; ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo $step2_title; ?>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#joinAccordion">
                        <div class="accordion-body">
                            <?php echo $step2_description; ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php echo $step3_title; ?>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#joinAccordion">
                        <div class="accordion-body">
                            <?php echo $step3_description; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="text-center">
            <h2 class="mb-5"><?php echo $cta_title; ?></h2>
            <a href="#server-stats" class="cta-button"><?php echo $cta_button_text; ?></a>
        </section>
    </main>

    <a href="#" id="backToTopBtn" class="btn btn-custom" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <footer>
        <div class="container">
            <p><?php echo $footer_copyright; ?></p>
            <p><?php echo $footer_made_with; ?></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Server Stats API Call for main display
            const motdDisplay = document.getElementById('motd-display');
            // ใช้ตัวแปร PHP ที่ถูกต้อง
            const serverIp = '<?php echo $server_ip; ?>';

            async function fetchServerStatusMain() {
                try {
                    const response = await fetch(`https://api.mcsrvstat.us/3/${serverIp}`);
                    const data = await response.json();

                    if (data.online) {
                        let motdHtml = '';
                        // ตรวจสอบว่ามี motd.html หรือไม่ ถ้าไม่มีให้ใช้ motd.clean
                        if (data.motd && data.motd.html) {
                            motdHtml = data.motd.html.join('<br>');
                        } else if (data.motd && data.motd.clean) {
                            motdHtml = data.motd.clean.join('<br>');
                        } else {
                            motdHtml = `<p>Server is online!</p>`; // ข้อความเริ่มต้นหากไม่มี MOTD
                        }
                        motdDisplay.innerHTML = `<div class="motd-line">${motdHtml}</div>`;
                    } else {
                        motdDisplay.innerHTML = '<p class="text-danger"><?php echo $server_status_offline_message; ?></p>';
                    }
                } catch (error) {
                    console.error('Error fetching server status:', error);
                    motdDisplay.innerHTML = '<p class="text-danger">Could not fetch server status. Please try again later.</p>';
                }
            }

            fetchServerStatusMain(); // Initial fetch for main display

            // Server Status API Call for Navbar
            const navbarServerStatus = document.getElementById('navbar-server-status');
            const statusIndicator = navbarServerStatus.querySelector('.status-indicator');
            const statusText = navbarServerStatus.querySelector('.status-text');

            async function fetchServerStatusNavbar() {
                try {
                    const response = await fetch(`https://api.mcsrvstat.us/3/${serverIp}`);
                    const data = await response.json();

                    if (data.online) {
                        statusIndicator.classList.remove('offline');
                        statusIndicator.classList.add('online');
                        statusText.textContent = `Online (${data.players.online}/${data.players.max})`;
                    } else {
                        statusIndicator.classList.remove('online');
                        statusIndicator.classList.add('offline');
                        statusText.textContent = 'Offline';
                    }
                } catch (error) {
                    console.error('Error fetching navbar server status:', error);
                    statusIndicator.classList.remove('online');
                    statusIndicator.classList.add('offline');
                    statusText.textContent = '<?php echo $server_status_offline_error; ?>';
                }
            }

            fetchServerStatusNavbar(); // Initial fetch for navbar
            // คุณอาจต้องการรีเฟรชข้อมูลนี้เป็นระยะๆ เพื่อสถานะแบบเรียลไทม์ใน navbar
            // setInterval(fetchServerStatusNavbar, 30000); // รีเฟรชทุก 30 วินาที

            // Copy IP to Clipboard with SweetAlert2
            const copyIpBtn = document.getElementById('copyIpBtn');
            if (copyIpBtn) {
                copyIpBtn.addEventListener('click', async () => {
                    // ใช้ตัวแปร PHP ที่ถูกต้อง
                    const ipToCopy = '<?php echo $server_ip; ?>';

                    try {
                        await navigator.clipboard.writeText(ipToCopy);
                        Swal.fire({
                            title: '<?php echo $swal_copied_title; ?>',
                            icon: '<?php echo $swal_copied_icon; ?>',
                            confirmButtonText: '<?php echo $swal_confirm_button_text; ?>',
                            customClass: {
                                popup: 'swal-custom-popup',
                                title: 'swal-custom-title',
                                htmlContainer: 'swal-custom-content',
                                confirmButton: 'swal-custom-button'
                            },
                            buttonsStyling: false
                        });
                    }
                    catch (err) {
                        console.error('Failed to copy IP:', err);
                        Swal.fire({
                            title: '<?php echo $swal_copy_failed_title; ?>',
                            text: '<?php echo $swal_copy_failed_text; ?>' + ipToCopy,
                            icon: '<?php echo $swal_copy_failed_icon; ?>',
                            confirmButtonText: '<?php echo $swal_confirm_button_text; ?>',
                            customClass: {
                                popup: 'swal-custom-popup',
                                title: 'swal-custom-title',
                                htmlContainer: 'swal-custom-content',
                                confirmButton: 'swal-custom-button'
                            },
                            buttonsStyling: false
                        });
                    }
                });
            }

            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Back to Top Button functionality
            const backToTopBtn = document.getElementById('backToTopBtn');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopBtn.style.display = 'block';
                } else {
                    backToTopBtn.style.display = 'none';
                }
            });

            backToTopBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Initialize particles.js with dynamic colors
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "<?php echo $particle_color; ?>"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.6, /* Slightly more opaque */
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "<?php echo $particle_line_color; ?>",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        });
    </script>
</body>
</html>