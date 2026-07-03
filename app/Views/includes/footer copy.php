<style>
    /* =======================================
       MEGA TYPOGRAPHY FOOTER STYLES
    ======================================= */
    footer {
        background: #111111; /* Dark theme card background */
        color: #ffffff;
        border-radius: 40px;
        margin: 40px 20px 20px; /* Outer margin */
        padding: 60px 40px 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden; /* For mega text */
        position: relative;
    }

    .footer-top-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 20px;
        z-index: 2;
    }

    .footer-col h5 {
        font-size: 16px;
        font-weight: 500;
        color: #888888;
        margin-bottom: 20px;
    }

    .footer-col p {
        font-size: 18px;
        line-height: 1.5;
        color: #cccccc;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        color: #ffffff;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer-col ul li a i {
        color: #ff3c00;
    }

    .footer-col ul li a:hover {
        color: #ff3c00;
    }

    .footer-cta {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .cta-link {
        font-size: 20px;
        color: #ff3c00;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s;
    }
    
    .cta-link i {
        background: #ff3c00;
        color: #000;
        border-radius: 50%;
        padding: 6px;
        font-size: 14px;
        transition: transform 0.3s;
    }

    .cta-link:hover i {
        transform: translate(5px, -5px);
    }

    /* MEGA TYPOGRAPHY */
    .mega-text-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        margin-bottom: -15px; /* Pull bottom bar up slightly */
        z-index: 1;
    }

    .mega-text {
        font-size: 22vw; /* Scales with screen width */
        font-weight: 900;
        line-height: 0.8;
        letter-spacing: -0.05em;
        color: #ffffff;
        text-transform: lowercase;
        margin: 0;
        padding: 0;
    }

    /* BOTTOM BAR */
    .footer-bottom-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 20px;
        font-size: 14px;
        color: #888888;
        z-index: 2;
    }

    .footer-bottom-bar a {
        color: #888888;
        text-decoration: none;
        margin-left: 20px;
    }
    .footer-bottom-bar a:hover {
        color: #ffffff;
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
        .footer-top-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 575px) {
        footer {
            margin: 20px 10px 10px;
            padding: 40px 20px 20px;
        }
        .footer-top-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        .mega-text {
            font-size: 25vw;
        }
        .footer-bottom-bar {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        .footer-bottom-bar a {
            margin: 0 10px;
        }
    }
</style>

<footer>
    <!-- TOP GRID -->
    <div class="footer-top-grid">
        <div class="footer-col">
            <h5 style="color: #fff; font-size: 20px;">Care32</h5>
            <p>Care32 is an independent and advanced dental clinic providing comprehensive treatments and top-tier patient care.</p>
        </div>

        <div class="footer-col">
            <h5>Explore</h5>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About Us</a></li>
                <li><a href="<?= base_url('services') ?>">Services</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h5>Follow us</h5>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i> @care32dental</a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i> @care32dental</a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i> @care32dental</a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i> @care32dental</a></li>
            </ul>
        </div>

        <div class="footer-col footer-cta">
            <div>
                <a href="tel:+917075675629" class="cta-link">
                    Call Care32 <i class="fa-solid fa-arrow-right"></i>
                </a>
                <p style="font-size: 14px; margin-top: 5px; color: #888;">Let's discuss your health</p>
            </div>

            <div style="margin-top: 10px;">
                <a href="<?= base_url('contact') ?>" class="cta-link" style="color: #ffffff;">
                    Book Appointment <i class="fa-solid fa-arrow-right" style="background: #ffffff; color: #000;"></i>
                </a>
                <p style="font-size: 14px; margin-top: 5px; color: #888;">Schedule your visit</p>
            </div>
        </div>
    </div>

    <!-- MEGA TYPOGRAPHY -->
    <div class="mega-text-container">
        <h1 class="mega-text">care32</h1>
    </div>

    <!-- BOTTOM BAR -->
    <div class="footer-bottom-bar">
        <div>
            Care32 &copy; 2024
            <a href="#">Privacy Policy</a>
        </div>
        <div>
            India &nbsp;&nbsp;|&nbsp;&nbsp; Mon-Sat, 9AM-8PM &nbsp;&nbsp;<i class="fa-solid fa-tooth"></i>
        </div>
    </div>
</footer>

<!-- Aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>