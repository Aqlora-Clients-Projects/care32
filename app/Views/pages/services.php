<?= $this->extend('layout/mainlayout') ?>

<?= $this->section('content') ?>
<!-- SERVICES PAGE STYLES -->
<?php $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/dist/css/services.css') ?>">
<?php $this->endSection() ?>

<div class="container services-page-header">
    <h1 class="services-main-title">Comprehensive Dental Services</h1>
    <p class="services-subtitle">Explore our full range of 18 specialized dental treatments, designed to give you the perfect, healthy smile you deserve.</p>
    
    <div class="adv-services-grid text-start">
        
        <!-- Category 1 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="1000">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/general_dentistry.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-tooth"></i></div>
                <h4 class="adv-service-title">General Dentistry</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Teeth Cleaning</li>
                    <li><i class="fa-solid fa-check"></i> Dental Fillings</li>
                    <li><i class="fa-solid fa-check"></i> Tooth Extraction</li>
                    <li><i class="fa-solid fa-check"></i> Wisdom Tooth Removal</li>
                    <li><i class="fa-solid fa-check"></i> Root Canal Treatment</li>
                </ul>
            </div>
        </div>

        <!-- Category 2 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="1200">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <h4 class="adv-service-title">Cosmetic Dentistry</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Teeth Whitening</li>
                    <li><i class="fa-solid fa-check"></i> Smile Makeover</li>
                    <li><i class="fa-solid fa-check"></i> Veneers</li>
                    <li><i class="fa-solid fa-check"></i> Crowns</li>
                    <li><i class="fa-solid fa-check"></i> Bridges</li>
                </ul>
            </div>
        </div>

        <!-- Category 3 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="1400">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/orthodontics.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-face-smile-beam"></i></div>
                <h4 class="adv-service-title">Orthodontics</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Braces</li>
                    <li><i class="fa-solid fa-check"></i> Invisalign</li>
                </ul>
            </div>
        </div>

        <!-- Category 4 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="1600">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/pediatric_dentistry.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-child-reaching"></i></div>
                <h4 class="adv-service-title">Pediatric Dentistry</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Pediatric Dentistry</li>
                </ul>
            </div>
        </div>

        <!-- Category 5 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="1800">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/dental_implants.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-teeth-open"></i></div>
                <h4 class="adv-service-title">Restorative & Implants</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Dental Implants</li>
                    <li><i class="fa-solid fa-check"></i> Dentures</li>
                    <li><i class="fa-solid fa-check"></i> Gum Treatment</li>
                    <li><i class="fa-solid fa-check"></i> Full Mouth Rehabilitation</li>
                </ul>
            </div>
        </div>

        <!-- Category 6 -->
        <div class="adv-service-card" data-aos="fade-up" data-aos-duration="2000">
            <div class="adv-service-bg" style="background-image: url('<?= base_url('assets/images/services/emergency_dentistry.png') ?>');"></div>
            <div class="adv-service-content">
                <div class="adv-service-icon"><i class="fa-solid fa-kit-medical"></i></div>
                <h4 class="adv-service-title">Emergency Care</h4>
                <ul class="service-list-items">
                    <li><i class="fa-solid fa-check"></i> Emergency Dentistry</li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>
