<!-- PRELOADER -->
<div id="preloader">
    <div class="preloader-content">
        <img src="<?= base_url('assets/images/logos/care32logo.png') ?>" alt="Logo" class="preloader-logo">
        <div class="spinner"></div>
    </div>
</div>

<script>
    // Preloader script
    function hidePreloader() {
        var preloader = document.getElementById('preloader');
        if(preloader && preloader.style.display !== 'none') {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }
    }
    
    // Hide when window fully loads
    window.addEventListener('load', hidePreloader);
    
    // Fallback: Force hide after 1.5 seconds to prevent endless loading on slow proxies!
    setTimeout(hidePreloader, 1500);
</script>
<div id="mobile-menu"></div>
<script type="module">
import { MorphedMenu } from "https://framerusercontent.com/modules/HC2sodFFn0OtjQWE1RN6/m6RuhIluMBA6ZXKW6jOo/MorphedMenu.js";
new MorphedMenu({
  container: document.getElementById('mobile-menu'),
  links: [
    { label: "Home", href: "<?= base_url('/') ?>" },
    { label: "Services", href: "<?= base_url('services') ?>" },
    { label: "Team", href: "<?= base_url('team') ?>" },
    { label: "Contact", href: "<?= base_url('contact') ?>" }
  ]
});
</script>

<!-- NEW FLOATING NAVBAR COMPONENT -->
<style>
/* GLOBAL NAVBAR BASE (SUBPAGE STYLE - LIGHT PILL) */
.global-nav-wrapper {
    position: fixed;
    top: 40px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    z-index: 9999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    border-radius: 50px;
    padding: 10px 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 1);
    transition: all 0.3s ease;
}

/* HOME PAGE NAVBAR OVERRIDE */
.global-nav-wrapper.navbar-home {
    background: transparent;
    border: none;
    box-shadow: none;
    padding: 0;
    backdrop-filter: none;
}

.global-nav-brand {
    color: #111;
    font-size: 24px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255);
    border: 1px solid rgba(255, 255, 255);
    padding: 3px 16px;
    border-radius: 50px;
}


.global-nav-brand img {
    height: 40px;
    transition: filter 0.3s;
}

.global-nav-links {
    display: flex;
    gap: 5px;
    background: rgba(0, 0, 0, 0.05); /* Light gray pill for subpages */
    backdrop-filter: blur(10px);
    padding: 5px;
    border-radius: 50px;
}
.global-nav-wrapper.navbar-home .global-nav-links {
    background: rgba(255, 255, 255, 0.15); /* Translucent white pill for home */
}

@media (min-width: 992px) {
    .global-nav-links {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
}

.global-nav-links a {
    color: #444;
    text-decoration: none;
    padding: 10px 25px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 500;
    transition: 0.3s;
}
.global-nav-wrapper.navbar-home .global-nav-links a {
    color: white;
}
.global-nav-links a.active {
    background: #ff5e00; /* Neon Orange */
    color: white;
    box-shadow: 0 2px 10px rgba(255, 94, 0, 0.3);
}
.global-nav-links a:hover:not(.active) {
    background: rgba(0,0,0,0.08);
}
.global-nav-btn {
    background: #ff5e00;
    color: white;
    padding: 12px 25px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}
.global-nav-wrapper.navbar-home .global-nav-btn {
    background: #ff5e00;
    color: white;
    transition: all 0.3s;
}
.global-nav-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(255, 94, 0, 0.4);
    color: white;
}
.global-nav-wrapper.navbar-home .global-nav-btn:hover {
    box-shadow: 0 4px 15px rgba(255, 94, 0, 0.4);
    color: white;
}
.global-nav-wrapper.navbar-home .navbar-toggler {
    color: white !important;
}
.navbar-toggler {
    color: #111;
}

/* MOBILE MENU FRAMER STYLE */
@media (min-width: 992px) {
    .global-nav-menu {
        display: flex;
        align-items: center;
        gap: 20px;
    }
}
@media (max-width: 991px) {
    .global-nav-menu {
        position: absolute;
        top: calc(100% + 15px);
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        display: flex;
        flex-direction: column;
        gap: 10px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-15px) scale(0.98);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        border: 1px solid rgba(0,0,0,0.05);
    }
    .global-nav-wrapper.navbar-home .global-nav-menu {
        background: rgba(255, 255, 255, 0.98);
    }
    .global-nav-wrapper.menu-open .global-nav-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
    }
    .global-nav-links {
        flex-direction: column;
        background: transparent !important;
        padding: 0;
        gap: 8px;
    }
    .global-nav-links a {
        text-align: left;
        padding: 12px 20px;
        width: 100%;
        background: rgba(0,0,0,0.03);
        border-radius: 12px;
        color: #111 !important;
    }
    .global-nav-links a.active {
        background: #ff5e00;
        color: white !important;
    }
    .global-nav-links a:hover {
        background: rgba(0,0,0,0.06);
    }
    .global-nav-links a.active:hover {
        background: #ff5e00;
    }
    .global-nav-btn {
        text-align: center;
        width: 100%;
        margin-top: 5px;
    }
}

</style>

<?php 
    $uri = service('uri');
    $segment = $uri->getSegment(1); 
    $is_home = ($segment == '' || $segment == 'home');
?>

<div class="global-nav-wrapper <?= $is_home ? 'navbar-home' : '' ?>" id="mainNavWrapper">
    <div class="global-nav-brand">
         <img src="<?= base_url("assets/images/logos/care32logo.png") ?>" alt="logo">
    </div>

    <!-- Toggle Button for Mobile -->
    <button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle" style="background:transparent; border:none; font-size:28px;">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Navigation Links & Booking Button (Shared Desktop/Mobile) -->
    <div class="global-nav-menu" id="globalNavMenu">
        <div class="global-nav-links">
            <a href="<?= base_url('/') ?>" class="<?= ($segment == '' || $segment == 'home') ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('services') ?>" class="<?= ($segment == 'services') ? 'active' : '' ?>">Services</a>
            <a href="<?= base_url('about') ?>" class="<?= ($segment == 'about') ? 'active' : '' ?>">About Us</a>
            <a href="<?= base_url('doctors') ?>" class="<?= ($segment == 'doctors') ? 'active' : '' ?>">Doctors</a>
            <a href="<?= base_url('contact') ?>" class="<?= ($segment == 'contact') ? 'active' : '' ?>">Contact</a>
        </div>
        <a href="<?= base_url('contact') ?>" class="global-nav-btn">Book Appointment</a>
    </div>
</div>

<script>
    document.getElementById('mobileMenuToggle').addEventListener('click', function() {
        document.getElementById('mainNavWrapper').classList.toggle('menu-open');
        var icon = this.querySelector('i');
        if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
</script>
