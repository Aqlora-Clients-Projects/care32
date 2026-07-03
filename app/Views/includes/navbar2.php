<!-- NEW FLOATING NAVBAR COMPONENT -->
<style>
/* GLOBAL NAVBAR (DENTORA STYLE) */
.global-nav-wrapper {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    max-width: 1200px;
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
}
.global-nav-brand {
    color: #111;
    font-size: 24px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}
.global-nav-brand img {
    height: 35px;
}
.global-nav-links {
    display: flex;
    gap: 5px;
    background: rgba(0,0,0,0.04);
    padding: 5px;
    border-radius: 50px;
}
.global-nav-links a {
    color: #444;
    text-decoration: none;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 500;
    transition: 0.3s;
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
    background: #ff5e00; /* Neon Orange */
    color: white;
    padding: 10px 25px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    box-shadow: 0 4px 15px rgba(255, 94, 0, 0.4);
}
.global-nav-btn:hover {
    background: #ff7300;
    transform: translateY(-2px);
    color: white;
}
</style>

<div class="global-nav-wrapper">
    <div class="global-nav-brand">
        <img src="<?= base_url('assets/images/logos/care32logo.png') ?>" alt="Care32 Logo">
    </div>
    
    <?php 
        $uri = service('uri');
        $segment = $uri->getSegment(1); 
    ?>
    <div class="global-nav-links d-none d-lg-flex">
        <a href="<?= base_url('/') ?>" class="<?= ($segment == '' || $segment == 'home') ? 'active' : '' ?>">Home</a>
        <a href="<?= base_url('services') ?>" class="<?= ($segment == 'services') ? 'active' : '' ?>">Services</a>
        <a href="<?= base_url('about') ?>" class="<?= ($segment == 'about') ? 'active' : '' ?>">About Us</a>
        <a href="<?= base_url('doctors') ?>" class="<?= ($segment == 'doctors') ? 'active' : '' ?>">Doctors</a>
        <a href="<?= base_url('contact') ?>" class="<?= ($segment == 'contact') ? 'active' : '' ?>">Contact</a>
    </div>

    <div class="d-flex align-items-center gap-3">
        <a href="<?= base_url('contact') ?>" class="global-nav-btn d-none d-lg-block">Book a Call</a>
        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" style="background:transparent; border:none; font-size:28px; color: #111;">
            <i class="bi bi-list"></i>
        </button>
    </div>
</div>

<!-- OFFCANVAS MOBILE MENU -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="mobile-nav-links">
            <li><a href="<?= base_url('/') ?>" class="active">Home</a></li>
            <li><a href="<?= base_url('about') ?>">About Us</a></li>
            <li><a href="<?= base_url('doctors') ?>">Doctors</a></li>
            <li><a href="<?= base_url('services') ?>">Services</a></li>
            <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
            <li><a href="<?= base_url('pricing') ?>">Pricing</a></li>
            <li><a href="<?= base_url('contact') ?>">Contact</a></li>
            <li><a href="<?= base_url('contact') ?>" class="nav-btn-primary mt-3 d-inline-block">BOOK APPOINTMENT</a></li>
        </ul>
    </div>
</div>
