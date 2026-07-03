<?= view('includes/header_links'); ?>
    <?= $this->renderSection('styles') ?>

<!-- HERO SECTION -->

<section class="dentora-hero">
    <div class="hero-massive-card">
  <?= view('includes/navbar'); ?>
        <div class="hero-content-inner">
            <h1 id="hero-title" class="hero-anim">Perfect Your<br>Dream Smile</h1>
            <p id="hero-desc" class="hero-anim">Advanced cosmetic treatments including whitening, veneers, and smile makeovers tailored for you.</p>
            
<a href="<?= base_url('contact') ?>" class="hero-cta hero-anim medilink-btn">
                Book a Appointment <i class="fa-solid fa-tooth" aria-hidden="true"></i>
            </a>

            <div class="hero-mini-card hero-anim">
                <img id="hero-mini-img" src="<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>" class="mini-img hero-image" alt="Dental Care">
                <div id="hero-mini-text" class="mini-text">Experience a flawless, bright, and confident smile.</div>
                <div class="mini-rating">
                    <div><i class="fa-solid fa-star"></i><span id="hero-mini-rating">5.0 Rating</span></div>
                    <i class="fa-solid fa-arrow-trend-up text-white"></i>
                </div>
            </div>
        </div>

        <div id="hero-tags-wrapper" class="hero-tags-container hero-anim">
            <span class="hero-tag">Teeth Whitening</span>
            <span class="hero-tag">Veneers</span>
            <span class="hero-tag">Smile Makeovers</span>
            <span class="hero-tag">Clear Aligners</span>
        </div>

        <div class="hero-bottom-tabs">
            <span>Your Teeth Our Science</span>
            <span>
                <a href="#" id="hero-prev" style="color: white; text-decoration: none; transition: 0.3s; font-weight: 600;">Preview</a> 
                &nbsp; <span id="hero-counter">01 / 06</span> &nbsp; 
                <a href="#" id="hero-next" style="color: white; text-decoration: none; transition: 0.3s; font-weight: 600;">Next</a>
            </span>
            <span>Scroll for More</span>
        </div>
    </div>
</section>

<!-- HERO SLIDER SCRIPT -->
<script>
    const slides = [
        {
            bg: "<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>",
            title: "Perfect Your<br>Dream Smile",
            desc: "Advanced cosmetic treatments including whitening, veneers, and smile makeovers tailored for you.",
            tags: ["Teeth Whitening", "Veneers", "Smile Makeovers", "Clear Aligners"],
            miniImg: "<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>",
            miniText: "Experience a flawless, bright, and confident smile.",
            rating: "5.0 Rating"
        },
        {
            bg: "<?= base_url('assets/images/services/general_dentistry.png') ?>",
            title: "Family-Friendly<br>Dental Care",
            desc: "Permanent natural-looking solutions to replace missing teeth and restore confident healthy smiles.",
            tags: ["Dental Checkup", "Teeth Cleaning", "Tooth Filling", "Gum Treatment", "Retainers"],
            miniImg: "<?= base_url('assets/images/services/pediatric_dentistry.png') ?>",
            miniText: "Restore natural healthy confident dental growth.",
            rating: "4.9 Rating"
        },
        {
            bg: "<?= base_url('assets/images/services/orthodontics.png') ?>",
            title: "Align & Straighten<br>With Precision",
            desc: "Modern orthodontic solutions including traditional braces and clear aligners like Invisalign.",
            tags: ["Invisalign", "Clear Braces", "Retainers", "Aligners"],
            miniImg: "<?= base_url('assets/images/services/orthodontics.png') ?>",
            miniText: "Comfortable aligners for the perfect bite.",
            rating: "4.8 Rating"
        },
        {
            bg: "<?= base_url('assets/images/services/dental_implants.png') ?>",
            title: "Restore & Rebuild<br>Your Confidence",
            desc: "State-of-the-art dental implants and full mouth rehabilitation for long-lasting results.",
            tags: ["Implants", "Crowns", "Bridges", "Dentures"],
            miniImg: "<?= base_url('assets/images/services/dental_implants.png') ?>",
            miniText: "Strong, permanent, and natural-feeling teeth replacement.",
            rating: "5.0 Rating"
        },
        {
            bg: "<?= base_url('assets/images/services/pediatric_dentistry.png') ?>",
            title: "Gentle Care For<br>Little Smiles",
            desc: "Compassionate pediatric dentistry ensuring a stress-free and fun experience for children.",
            tags: ["Kids Checkup", "Fluoride", "Sealants", "Fun Care"],
            miniImg: "<?= base_url('assets/images/services/pediatric_dentistry.png') ?>",
            miniText: "Building healthy dental habits early in life.",
            rating: "4.9 Rating"
        },
        {
            bg: "<?= base_url('assets/images/services/emergency_dentistry.png') ?>",
            title: "Fast Relief For<br>Dental Emergencies",
            desc: "Immediate, dependable care for toothaches, trauma, and urgent dental needs.",
            tags: ["Toothache", "Trauma", "Lost Filling", "Broken Tooth"],
            miniImg: "<?= base_url('assets/images/services/emergency_dentistry.png') ?>",
            miniText: "We are here for you when you need us most.",
            rating: "4.8 Rating"
        }
    ];

    let currentSlide = 0;
    const heroCard = document.querySelector('.hero-massive-card');
    const heroTitle = document.getElementById('hero-title');
    const heroDesc = document.getElementById('hero-desc');
    const heroTagsWrapper = document.getElementById('hero-tags-wrapper');
    const heroMiniImg = document.getElementById('hero-mini-img');
    const heroMiniText = document.getElementById('hero-mini-text');
    const heroMiniRating = document.getElementById('hero-mini-rating');
    const heroCounter = document.getElementById('hero-counter');
    const animElements = document.querySelectorAll('.hero-anim');

    let autoSlideInterval;
    
    // Check if screen is mobile (320px - 567px)
    function isMobileScreen() {
        return window.innerWidth >= 320 && window.innerWidth <= 567;
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlide();
        }, 10000); // 10 seconds
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Initialize with first slide on mobile
    if (isMobileScreen()) {
        currentSlide = 0;
        updateSlide();
        // Start auto-slide after 3 seconds on mobile
        setTimeout(() => {
            startAutoSlide();
        }, 3000);
    } else {
        // Start immediately on desktop
        startAutoSlide();
    }

    document.getElementById('hero-next').addEventListener('click', (e) => {
        e.preventDefault();
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide();
        resetAutoSlide();
    });

    document.getElementById('hero-prev').addEventListener('click', (e) => {
        e.preventDefault();
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlide();
        resetAutoSlide();
    });

    function updateSlide() {
        // Fade out
        animElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(15px)';
            el.style.transition = 'all 0.4s ease';
        });

        setTimeout(() => {
            const slide = slides[currentSlide];
            
            // Update Background
            heroCard.style.backgroundImage = `url('${slide.bg}')`;
            
            // Update Content
            heroTitle.innerHTML = slide.title;
            heroDesc.innerHTML = slide.desc;
            heroMiniImg.src = slide.miniImg;
            heroMiniText.innerHTML = slide.miniText;
            heroMiniRating.innerHTML = slide.rating;
            
            // Update Tags
            heroTagsWrapper.innerHTML = slide.tags.map(tag => `<span class="hero-tag">${tag}</span>`).join('');
            
            // Update Counter (Format: 01 / 06)
            let currentNum = (currentSlide + 1).toString().padStart(2, '0');
            let totalNum = slides.length.toString().padStart(2, '0');
            heroCounter.innerHTML = `${currentNum} / ${totalNum}`;
            
            // Fade in
            animElements.forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            });
        }, 400); // Wait for fade out
    }

    // Start auto slide initially
    startAutoSlide();
</script>

<!-- Scroll List -->
<div class="container services-scroll d-flex" id="stepper-container">
    <div class="scroll-item step-item active">Book Appointment</div>
    <div class="scroll-line step-line"></div>
    <div class="scroll-item step-item">Diagnosis & Test</div>
    <div class="scroll-line step-line"></div>
    <div class="scroll-item step-item">Consult A Doctor</div>
    <div class="scroll-line step-line"></div>
    <div class="scroll-item step-item">Treatment & Followup</div>
</div>

<script>
    // Simple static display without animation
    (function() {
        const items = document.querySelectorAll(".step-item");
        const lines = document.querySelectorAll(".step-line");
        
        // Add active class to all items to keep styling
        items.forEach(item => {
            item.classList.add("active");
        });
        
        // Add filled class to all lines to keep styling
        lines.forEach(line => {
            line.classList.add("filled");
        });
    })();
</script>
<!-- ABOUT US STATS SECTION -->
<section class="about-stats-section">
    <div class="container">
        <!-- Top Row -->
        <div class="about-top-row">
            <div class="about-text-content" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-badge">
                    <span class="badge-dot"></span> About Us
                </div>
                <h2 class="about-headline">Over a decade of guiding patients through complete smile transformations.</h2>
                <p class="about-description">Our team combines advanced dental methodologies with a patient-focused approach, turning complex dental problems into clear, actionable treatment steps.</p>
            </div>
            <div class="about-image-content" data-aos="fade-left" data-aos-duration="1000">
                <img src="<?= base_url('assets/images/about/aboutimg.jpg') ?>" alt="Dental Consultation">
            </div>
        </div>

        <!-- Bottom Row (Stats) -->
        <div class="about-stats-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                <h3>10k+</h3>
                <h4>Happy Patients</h4>
                <p>On average, our treatments bring back the confidence of thousands of patients with measurable results.</p>
            </div>
            <div class="stat-card mainactivecard" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h3>99%</h3>
                <h4>Treatment Success</h4>
                <p>Our patients achieve significant improvements in oral health across all major procedures.</p>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h3>15+</h3>
                <h4>Expert Dentists</h4>
                <p>We've partnered with over 15 specialists across various dental disciplines to provide complete care.</p>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <h3>20+ Years</h3>
                <h4>Clinical Experience</h4>
                <p>Two decades of proven expertise delivering state-of-the-art dentistry and measurable results.</p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->

<section class="custom-services-section">
    <div class="container">
        <!-- Section Header -->
        <div class="services-header-wrapper d-flex justify-content-between align-items-end mb-5">
            <div class="services-header-left text-start">
                <h2 class="services-main-title text-start mb-2" style="font-size: 42px; font-weight: 700; color: #111;">Our Services</h2>
                <p class="services-subtitle text-start mb-0" style="color: #666; max-width: 500px; line-height: 1.6;">
                    From routine checkups to full mouth rehabilitation, we provide comprehensive dental care tailored for you.
                </p>
            </div>
            <div class="services-header-right d-none d-md-block">
<a href="<?= base_url('contact') ?>" class="btn btn-primary px-4 py-2 medilink-btn" style="border-radius: 50px; font-weight: 700; background-color: #5c67f2; border: none;"> 
                    <span class="d-inline-flex align-items-center gap-2">Book an Appointment <i class="fa-solid fa-tooth" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
        
        <!-- Services Grid -->
        <div class="adv-services-grid" id="servicesGrid">
            
            <!-- Card 1 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-tooth"></i> -->
                    <!-- <i class="hgi hgi-stroke hgi-rounded hgi-dental-tooth"></i> -->
                    <img src="<?= base_url('assets/images/services/general_dentistry.png') ?>" alt="General Dentistry" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">General Dentistry</h4>
                    <p class="adv-service-desc">Preventive care, teeth cleaning, fillings, and tooth extraction.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-wand-magic-sparkles"></i> -->
                    <img src="<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>" alt="Cosmetic Dentistry" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Cosmetic Dentistry</h4>
                    <p class="adv-service-desc">Smile makeovers with teeth whitening and custom veneers.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-face-smile-beam"></i> -->
                    <img src="<?= base_url('assets/images/services/orthodontics.png') ?>" alt="Orthodontics" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Orthodontics</h4>
                    <p class="adv-service-desc">Perfect alignment with traditional braces and Invisalign.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-child-reaching"></i> -->
                    <img src="<?= base_url('assets/images/services/pediatric_dentistry.png') ?>" alt="Pediatric Dentistry" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Pediatric Dentistry</h4>
                    <p class="adv-service-desc">Gentle, friendly care tailored for children of all ages.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-teeth-open"></i> -->
                    <img src="<?= base_url('assets/images/services/dental_implants.png') ?>" alt="Restorative & Implants" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Restorative & Implants</h4>
                    <p class="adv-service-desc">Permanent tooth replacement and full mouth rehabilitation.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="adv-service-card service-card-item">
                <div class="adv-service-icon-wrapper p-0 overflow-hidden" style="height: 220px; background: none;">
                    <!-- <i class="fa-solid fa-kit-medical"></i> -->
                    <img src="<?= base_url('assets/images/services/emergency_dentistry.png') ?>" alt="Emergency Dental Care" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Emergency Dental Care</h4>
                    <p class="adv-service-desc">Fast, dependable relief and treatment when you need it most.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="adv-service-card service-card-item d-none">
                <div class="adv-service-icon-wrapper">
                    <i class="fa-solid fa-syringe"></i>
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Oral Surgery</h4>
                    <p class="adv-service-desc">Expert surgical procedures including wisdom teeth removal.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="adv-service-card service-card-item d-none">
                <div class="adv-service-icon-wrapper">
                    <i class="fa-solid fa-star-of-life"></i>
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Teeth Whitening</h4>
                    <p class="adv-service-desc">Professional whitening services for a brighter, bolder smile.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="adv-service-card service-card-item d-none">
                <div class="adv-service-icon-wrapper">
                    <i class="fa-solid fa-x-ray"></i>
                </div>
                <div class="adv-service-content">
                    <h4 class="adv-service-title">Dental Diagnostics</h4>
                    <p class="adv-service-desc">State-of-the-art X-rays and imaging for precise treatments.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i></a>
                </div>
            </div>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5" id="loadMoreContainer">
<button class="btn btncolor medilink-btn" id="loadMoreBtn" style="border-radius: 50px; font-weight: 600;"> <span class="d-inline-flex align-items-center gap-2">Load More <i class="fa-solid fa-tooth" aria-hidden="true"></i></span></button>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loadMoreBtn = document.getElementById("loadMoreBtn");
        const cards = document.querySelectorAll(".service-card-item.d-none");
        let currentlyHidden = cards.length;
        
        if (currentlyHidden === 0) {
            document.getElementById("loadMoreContainer").style.display = 'none';
        }

        loadMoreBtn.addEventListener("click", function() {
            let revealed = 0;
            const hiddenCards = document.querySelectorAll(".service-card-item.d-none");
            
            hiddenCards.forEach(card => {
                if (revealed < 3) {
                    card.classList.remove("d-none");
                    revealed++;
                }
            });
            
            // Check if any remain
            if (document.querySelectorAll(".service-card-item.d-none").length === 0) {
                document.getElementById("loadMoreContainer").style.display = 'none';
            }
        });
    });
</script>
<!-- OUR TEAM SECTION -->
<section class="team-section">
    <div class="container text-center">
        <!-- Section Header -->
        <div class="team-header-badge">
            <span>Our Team</span>
        </div>
        <h2 class="team-main-title">Meet Our Expert Medical Team of<br>Dedicated Specialists</h2>
        <p class="team-subtitle">Our team is a group of professionals who are experienced in all fields of dentistry.</p>
        
        <!-- Team Grid (Infinite Marquee) -->
        <div class="team-marquee-wrapper mt-5">
            <div class="team-marquee-track">
                
                <!-- SET 1 -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Nolan Subekti">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Nolan Subekti</h4>
                        <p class="team-specialty">General Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Pramono Sudhiro">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Pramono Sudhiro</h4>
                        <p class="team-specialty">Dental Specialist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Aishaa">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Aishaa</h4>
                        <p class="team-specialty">Orthodontist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Basuki">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Basuki</h4>
                        <p class="team-specialty">Cosmetic Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Sarah">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Sarah</h4>
                        <p class="team-specialty">Pediatric Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. John">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. John</h4>
                        <p class="team-specialty">Oral Surgeon</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <!-- SET 2 (DUPLICATE FOR SEAMLESS LOOP) -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Nolan Subekti">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Nolan Subekti</h4>
                        <p class="team-specialty">General Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Pramono Sudhiro">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Pramono Sudhiro</h4>
                        <p class="team-specialty">Dental Specialist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Aishaa">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Aishaa</h4>
                        <p class="team-specialty">Orthodontist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Basuki">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Basuki</h4>
                        <p class="team-specialty">Cosmetic Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. Sarah">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. Sarah</h4>
                        <p class="team-specialty">Pediatric Dentist</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="<?= base_url('assets/images/about/clinical_director.png') ?>" alt="Dr. John">
                    </div>
                    <div class="team-info">
                        <h4 class="team-name">Dr. John</h4>
                        <p class="team-specialty">Oral Surgeon</p>
                        <div class="team-arrow"><i class="hgi hgi-stroke hgi-rounded hgi-arrow-up-right-01"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- BOOKING APPOINTMENT SECTION -->
<section class="booking-section">
    <div class="container">
        <div class="booking-container-card">
            <div class="row rowcard align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <div class="booking-content-left pe-lg-4">
                    <span class="booking-badge"><span class="badge-dot"></span> Book Now</span>
                    <h2 class="booking-title mt-3">Request an Appointment Easily</h2>
                    <p class="booking-desc">Take the first step towards a healthy, beautiful smile. Fill out the form, and our team will get back to you to confirm your appointment.</p>
                    <ul class="booking-features list-unstyled mt-4">
                        <li class="mb-3"><i class="hgi hgi-stroke hgi-tick-02 me-2"></i> Professional and Experienced Staff</li>
                        <li class="mb-3"><i class="hgi hgi-stroke hgi-tick-02 me-2"></i> Comprehensive Dental Services</li>
                        <li class="mb-3"><i class="hgi hgi-stroke hgi-tick-02 me-2"></i> State-of-the-art Equipment</li>
                    </ul>

                    <!-- Advanced Image Block -->
                    <div class="booking-advanced-img mt-5 mb-5 position-relative">
                        <div class="row g-3">
                            <div class="col-7">
                                <img src="<?= base_url('assets/images/about/aboutimg.jpg') ?>" alt="Patient Smiling" class="img-fluid rounded-4 shadow w-100" style="height: 220px; object-fit: cover;">
                            </div>
                            <div class="col-5">
                                <img src="<?= base_url('assets/images/services/cosmetic_dentistry.png') ?>" alt="Dental Team" class="img-fluid rounded-4 shadow mb-3 w-100" style="height: 100px; object-fit: cover;">
                                <div class="text-white rounded-4 shadow p-3 d-flex flex-column justify-content-center align-items-center w-100" style="background: var(--orange); height: 104px;">
                                    <h3 class="mb-0 fw-bold fs-2">20+</h3>
                                    <span style="font-size: 13px; font-weight: 500;">Years Experience</span>
                                </div>
                            </div>
                        </div>
                        <!-- Floating Avatar Element -->
                        <div class="position-absolute top-50 start-0 translate-middle bg-white rounded-circle shadow-lg p-2 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; z-index: 2;">
                             <i class="hgi hgi-stroke hgi-dental-tooth fs-2" style="color: var(--orange);"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="booking-form-wrapper p-4 p-md-5">
                    <h3 class="mb-4 text-center" style="font-weight: 700; color: #ff5f1f;">Book Appointment</h3>
                    <form action="<?= base_url('contact/submit') ?>" method="POST" class="booking-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" required placeholder="+1 234 567 890">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" required placeholder="john@example.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select Service</label>
                                <select class="form-select" name="service" required>
                                    <option value="" selected disabled>Choose a service</option>
                                    <option value="General Dentistry">General Dentistry</option>
                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                    <option value="Pediatric Dentistry">Pediatric Dentistry</option>
                                      <option value="Pediatric Dentistry">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Preferred Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Preferred Time</label>
                                <input type="time" class="form-control" name="time" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Additional Notes</label>
                            <textarea class="form-control" name="message" rows="3" placeholder="Any specific concerns..."></textarea>
                        </div>
<button type="submit" class="btn btncolor w-100 py-3 medilink-btn" style="font-size: 18px; border-radius: 50px; font-weight: 600;"> <span class="d-inline-flex align-items-center gap-2">Confirm Appointment <i class="fa-solid fa-tooth" aria-hidden="true"></i></span></button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

    <?= view('includes/footer'); ?>
