<?= $this->extend('layout/mainlayout') ?>

<?= $this->section('content') ?>

<?php $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/dist/css/about.css') ?>">
<?php $this->endSection() ?>

<div class="about-page-wrapper">
    <div class="container">
        
        <!-- HEADER -->
        <div class="about-header" data-aos="fade-up">
            <h1 class="about-title">About Care32</h1>
            <p class="about-header-text">A modern dental clinic built on care, trust, and patient-first principles</p>
        </div>

        <!-- DIRECTOR CARD -->
        <div class="director-card" data-aos="fade-up" data-aos-delay="100">
            <div class="director-msg">
                <h2>A Message from Our Clinical Director</h2>
                <p>We believe a healthy smile is more than just a sign of good oral hygiene—it's a reflection of confidence and well-being. Since day one, our mission has been to offer accessible, personalized dental care that blends clinical expertise with a human touch.</p>
                <p>We aim to make every visit comfortable, every treatment effective, and every patient feel like family.</p>
                <p>Thank you for trusting us with your smile.</p>
                <div class="director-signoff">
                    <strong>Dr. Ethan Marquez, DDS</strong>
                    <span>Clinical Director & Restorative Dentistry Expert</span>
                </div>
            </div>
            <div class="director-img-wrapper">
                <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Ethan Marquez">
            </div>
        </div>

        <!-- VISION & MISSION -->
        <div class="vision-mission-section" data-aos="fade-up">
            <div class="vm-title">
                <h3>Our Vision &<br>Mission</h3>
                <p class="text-muted">Guided by purpose, driven by care—our goals go beyond just great dental results</p>
            </div>
            <div class="vm-content">
                <h4 class="mb-2">Vision</h4>
                <p class="mb-4">To become a leading dental care provider known for innovation, empathy, and exceptional patient experiences.</p>
                
                <h4 class="mb-2">Mission</h4>
                <ul class="mission-list">
                    <li><i class="fa-solid fa-circle-check"></i> Deliver high-quality, personalized dental care with integrity and compassion.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Foster a stress-free, welcoming clinic environment for all ages.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Embrace modern technology and best practices to ensure optimal outcomes.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Educate and empower patients to take charge of their oral health.</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- CORE VALUES -->
    <div class="core-values-section" data-aos="fade-up">
        <div class="container">
            <div class="values-header">
                <h2>What We Stand For</h2>
                <p class="text-muted">Our core values guide every smile we restore and every relationship we build</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <div class="value-text">
                        <h4>Patient-Centered Care</h4>
                        <p>Every treatment begins with listening to your needs and goals.</p>
                    </div>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fa-solid fa-award"></i></div>
                    <div class="value-text">
                        <h4>Excellence</h4>
                        <p>We uphold the highest clinical standards and pursue continuous learning.</p>
                    </div>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fa-solid fa-eye"></i></div>
                    <div class="value-text">
                        <h4>Transparency</h4>
                        <p>We communicate clearly, honestly, and openly—no surprises.</p>
                    </div>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fa-solid fa-couch"></i></div>
                    <div class="value-text">
                        <h4>Comfort</h4>
                        <p>We prioritize gentle care and calming spaces for anxiety-free visits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- MEET THE TEAM -->
        <div class="team-section" data-aos="fade-up">
            <div class="team-header">
                <div>
                    <h2>Meet the Team<br>Behind the Smiles</h2>
                </div>
                <div>
                    <p class="text-muted text-end mb-0" style="max-width: 250px; font-size: 14px;">Passionate professionals dedicated to exceptional dental care</p>
                </div>
            </div>
            
            <div class="team-grid">
                <!-- Placeholder Doctors -->
                <div class="team-member">
                    <div class="team-photo"><i class="fa-solid fa-user-md"></i></div>
                    <h5>Dr. Ethan Marquez</h5>
                    <p>Restorative Dentistry</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"><i class="fa-solid fa-user-nurse"></i></div>
                    <h5>Dr. Liana Kim</h5>
                    <p>Cosmetic Dentistry</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"><i class="fa-solid fa-user-md"></i></div>
                    <h5>Dr. Marco Diaz</h5>
                    <p>Orthodontics</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"><i class="fa-solid fa-user-nurse"></i></div>
                    <h5>Dr. Naya Ellis</h5>
                    <p>Pediatric Dentistry</p>
                </div>
            </div>
        </div>

        <!-- CLINIC HOURS -->
        <div class="hours-section" data-aos="fade-up">
            <div class="hours-table">
                <h3>Clinic Hours</h3>
                <p class="text-muted mb-4">Find a time that works for you—our doors are open throughout the week</p>
                
                <div class="hours-row"><span>Monday</span> <span>09:00 AM - 08:00 PM</span></div>
                <div class="hours-row"><span>Tuesday</span> <span>09:00 AM - 08:00 PM</span></div>
                <div class="hours-row"><span>Wednesday</span> <span>09:00 AM - 08:00 PM</span></div>
                <div class="hours-row"><span>Thursday</span> <span>09:00 AM - 08:00 PM</span></div>
                <div class="hours-row"><span>Friday</span> <span>09:00 AM - 08:00 PM</span></div>
                <div class="hours-row"><span>Saturday</span> <span>09:00 AM - 03:00 PM</span></div>
                <div class="hours-row"><span>Sunday</span> <span style="color: #ef4444;">Closed</span></div>
            </div>
            <div class="hours-img">
                <img src="<?= base_url('assets/images/about/clinic_interior.png') ?>" alt="Care32 Clinic Interior">
            </div>
        </div>

        <!-- CTA BANNER -->
        <div class="about-cta" data-aos="fade-up">
            <div class="cta-content">
                <h2>Ready to Experience Better Dental Care?</h2>
                <p>Schedule your visit today and take the first step toward a healthier, brighter smile.</p>
                <a href="<?= base_url('contact') ?>" class="btn-white">Book Your Appointment</a>
            </div>
            <div class="cta-img">
                <img src="<?= base_url('assets/images/about/cta_patient_dentist.png') ?>" alt="Happy Patient">
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
