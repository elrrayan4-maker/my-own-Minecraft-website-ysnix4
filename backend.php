<?php

// --- Theme Configuration Section ---
include 'theme.php'; // Include the theme definitions file

// Set the desired theme name here.
// Available themes:
// [1]'Winter Wonderland'
// [2]'Halloween Theme'
// [3]'Botanical/Nature Theme',
// [4]'Dark Mode Minimalist'
// [5]'Sunset Gradient'
// [6]'Retro/Vaporwave',
// [7]'Candy Pop / Pastel Sweet'
// [8]'Cyberpunk Theme'
// [9]'Japanese Zen'
// [10]'Dreamy Galaxy'
$current_theme_name = "Winter Wonderland"; // <--- CHANGE THIS TO SELECT YOUR THEME

// --- General Information Section ---
// Variables used in <title> and general page content
$site_title = "MC-MoonNight";
$welcome_title = "Welcome to MoonNightCraft!";
$welcome_tagline = "Dive into an epic Minecraft adventure.";
$explore_button_text = "Explore Server";

// --- Navbar Section ---
// Variables related to the navigation bar and server status display
$announcement_ticker_text = "Join our Discord for updates! New events coming soon!";
$server_status_loading = "Loading...";
$server_status_offline_error = "Offline (Error)";

// --- Server Info Section ---
// Variables for the server status display and action buttons
$server_info_title = "Server Info";
$server_status_loading_message = "Loading server status...";
$server_status_offline_message = "Server is currently offline.";
$copy_ip_button_text = "Copy IP: moonnight.mineplay.pro"; // Updated IP for consistency
$discord_button_text = "Join Discord";
$rules_button_text = "View Server Rules";
$store_button_text = "Visit Store";
// IP Address for the server (used in API calls and copy functionality)
$server_ip = "moonnight.mineplay.pro"; // Crucial for the API to work with your server
$discord_invite_link = "https://discord.gg/moonnight"; // Link Discord
$store_link = "https://yassine.qzz.io/"; // Store

// --- Events & News Section ---
// Variables for the events and news cards
$events_news_title = "Events & News";
$event1_title = "Weekly Build Competition!";
$event1_description = "Show off your creativity and win amazing prizes. Theme: Underwater Base. Submissions open until next Sunday!";
$event1_date = "May 20, 2026";
$event2_title = "New Survival World Launched!";
$event2_description = "Explore vast new lands, gather resources, and build your empire in our fresh survival map. Join now!";
$event2_date = "May 15, 2026";
$view_all_news_button = "View All News";
$view_all_news_link = "https://yassine.qzz.io/"; // View All News

// --- Server Rules Section ---
// Variables for the server rules list
$server_rules_title = "Server Rules";
$rule1_text = "<strong>No griefing or raiding.</strong> Respect other players' builds.";
$rule2_text = "<strong>Be respectful in chat.</strong> No excessive swearing, spamming, or hate speech.";
$rule3_text = "<strong>No cheating, exploiting bugs, or using unauthorized modifications.</strong>";
$rule4_text = "<strong>Do not impersonate staff or other players.</strong>";
$rule5_text = "<strong>Report any rule breakers to staff.</strong> Do not take matters into your own hands.";

// --- How to Join Section ---
// Variables for the accordion steps to join the server
$how_to_join_title = "How to Join";
$step1_title = "Step 1: Launch Minecraft";
$step1_description = "First, open your Minecraft game client. Make sure you are running a compatible version (e.g., Java Edition 1.21+).";
$step2_title = "Step 2: Add Server";
$step2_description = "From the main menu, click on 'Multiplayer'. Then, click 'Add Server'. Enter \"MoonNightCraft\" as the Server Name and \"moonnight.mineplay.pro\" as the Server Address. Click 'Done'."; // Updated IP
$step3_title = "Step 3: Join and Play!";
$step3_description = "The MoonNightCraft server should now appear in your server list. Select it and click 'Join Server' to start your adventure!";

// --- Call to Action (CTA) Section ---
// Variables for the final call to action section
$cta_title = "Ready to Dive In?";
$cta_button_text = "Join Now!";

// --- SweetAlert2 Configuration ---
// Variables for SweetAlert2 pop-up messages (used for copy IP)
$swal_copied_title = "Copied!";
$swal_copied_icon = "success";
$swal_copy_failed_title = "Copy Failed!";
$swal_copy_failed_text = "Please manually copy the IP: ";
$swal_copy_failed_icon = "error";
$swal_confirm_button_text = "OK";

// --- Footer Section ---
// Variables for the website footer
$footer_copyright = "&copy; 2026 MoonNight Server. All rights reserved.";
$footer_made_with = "Made with <i class='fas fa-heart text-danger'></i> and Bootstrap.";



// Get the theme variables. Default to Halloween Theme if the selected theme is not found.
$current_theme = isset($themes[$current_theme_name]) ? $themes[$current_theme_name] : $themes['Halloween Theme'];

// Map theme variables to CSS variables for easier use in <style> block
// You can also directly use $current_theme['--variable-name'] in index.php
$primary_background = $current_theme['--primary-background'];
$secondary_background = $current_theme['--secondary-background'];
$tertiary_background = $current_theme['--tertiary-background'];
$accent_color_1 = $current_theme['--accent-color-1'];
$accent_color_2 = $current_theme['--accent-color-2'];
$text_light = $current_theme['--text-light'];
$text_dark = $current_theme['--text-dark'];
$button_shadow_color = $current_theme['--button-shadow-color'];
$button_hover_shadow_color = $current_theme['--button-hover-shadow-color'];
$navbar_shadow_color = $current_theme['--navbar-shadow-color'];
$section_shadow_color = $current_theme['--section-shadow-color'];
$cta_shadow_color = $current_theme['--cta-shadow-color'];
$cta_hover_shadow_color = $current_theme['--cta-hover-shadow-color'];
$back_to_top_shadow_color = $current_theme['--back-to-top-shadow-color'];
$card_background = $current_theme['--card-background'];
$card_text_color = $current_theme['--card-text-color'];
$card_accent_color = $current_theme['--card-accent-color'];
$hr_color = $current_theme['--hr-color'];
$swal_popup_bg = $current_theme['--swal-popup-bg'];
$swal_border_color = $current_theme['--swal-border-color'];
$swal_title_color = $current_theme['--swal-title-color'];
$swal_text_color = $current_theme['--swal-text-color'];
$swal_button_bg = $current_theme['--swal-button-bg'];
$swal_button_hover_bg = $current_theme['--swal-button-hover-bg'];

// Particles.js specific colors (not CSS variables, directly used in JS)
$particle_color = $current_theme['particle-color'];
$particle_line_color = $current_theme['particle-line-color'];
?>