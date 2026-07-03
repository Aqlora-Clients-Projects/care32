<style>
    /* =======================================
       NEW LIGHT THEME FOOTER (DENTORA STYLE)
    ======================================= */
    footer {
        background: #f8f9fa; /* Light grey/white background */
        color: #111;
        padding: 80px 40px 30px;
        position: relative;
        overflow: hidden;
        border-top: 1px solid #eaeaea;
        margin-top: 50px;
        font-family: 'Inter', sans-serif;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* TOP SECTION: Headline & Newsletter */
    .footer-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 80px;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 50px;
    }

    .footer-headline h2 {
        font-size: 48px;
        font-weight: 600;
        line-height: 1.1;
        color: #111;
        margin: 0;
        max-width: 500px;
    }

    .footer-newsletter {
        display: flex;
        flex-direction: column;
        max-width: 400px;
    }
    
    .footer-newsletter p {
        color: #666;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .newsletter-form {
        display: flex;
        background: #f0f0f0;
        border-radius: 50px;
        padding: 5px;
        align-items: center;
    }

    .newsletter-form input {
        border: none;
        background: transparent;
        padding: 10px 20px;
        flex-grow: 1;
        outline: none;
        font-size: 14px;
        color: #333;
    }

    .newsletter-form button {
        background: #ff5f1f; /* Teal button like image */
        color: white;
        border: none;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
    }

    .newsletter-form button:hover {
        background: #ff4f0aff;
    }

    /* BOTTOM GRID */
    .footer-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 2fr;
        gap: 40px;
        margin-bottom: 80px;
    }

    .footer-col h5 {
        font-size: 14px;
        font-weight: 600;
        color: #888;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 15px;
    }

    .footer-col ul li a {
        color: #111;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ff5f1f; /* Neon orange or teal */
    }

    .footer-contact h5 {
        font-size: 14px;
        font-weight: 600;
        color: #888;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .footer-contact h3 {
        font-size: 24px;
        font-weight: 600;
        color: #111;
        margin-bottom: 30px;
    }
    
    .social-icons {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    .social-icons span {
        font-size: 14px;
        font-weight: 600;
        color: #111;
        margin-right: 10px;
    }
    
    .social-icons a {
        color: #111;
        font-size: 18px;
        transition: 0.3s;
        background: #f0f0f0;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
    }
    .social-icons a:hover {
        background-color:#ff5f1f;
        color: white;
    }

    /* MASSIVE VERTICAL WATERMARK */
    .footer-watermark {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        font-size: 250px;
        font-weight: 900;
        color: #efefef; /* Light gray to stand out slightly against #f8f9fa */
        writing-mode: vertical-rl;
        text-orientation: mixed;
        z-index: 1;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding-right: 20px;
        overflow: hidden;
    }

    /* BOTTOM BAR */
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: #888;
        border-top: 1px solid #e0e0e0;
        padding-top: 25px;
        z-index: 2;
        position: relative;
    }
    .footer-bottom-links a {
        color: #888;
        text-decoration: none;
        margin-left: 20px;
    }
    .footer-bottom-links a:hover {
        color: #111;
    }

    /* BOTTOM WATERMARK */
    .footer-bottom-watermark {
        position: absolute;
        bottom: -20px;
        left: 0;
        width: 100%;
        text-align: center;
        font-size: 130px;
        font-weight: 900;
        
        /* Gradient from neon orange at top to gray at bottom */
        background: linear-gradient(to bottom, #ff5f1f 0%, #cccccc 50%, #f8f9fa 90%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        
        /* Bottom smoke effect using text-shadow */
        /* text-shadow: 0px 30px 40px rgba(245, 74, 6, 0.86); */
        
        z-index: 0;
        pointer-events: none;
        line-height: 1;
        text-transform: uppercase;
    }
.footer-bottom-watermark2{
      
  
        width: 100%;
        text-align: center;
        font-size: 250px;
        font-weight: 900;
        
        /* Gradient from neon orange at top to gray at bottom */
        background: linear-gradient(to bottom, #ff5f1f 0%, #cccccc 50%, #f8f9fa 90%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        
        /* Bottom smoke effect using text-shadow */
        /* text-shadow: 0px 30px 40px rgba(245, 74, 6, 0.86); */
        
        z-index: 0;
        pointer-events: none;
        line-height: 1;
        text-transform: uppercase;
}
    /* RESPONSIVE */
    @media (max-width: 991px) {
        footer {
            padding: 60px 30px 20px;
        }
        .footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }
        .footer-top {
            flex-direction: column;
            align-items: stretch;
            gap: 30px;
            margin-bottom: 50px;
            padding-bottom: 30px;
        }
        .footer-headline h2 { 
            font-size: 36px;
            max-width: 100%;
        }
        .footer-newsletter {
            max-width: 100%;
        }
        .newsletter-form {
            flex-wrap: wrap;
        }
        .newsletter-form button {
            padding: 10px 20px;
        }
        .footer-watermark { display: none; } /* Hide on tablet to avoid overflow issues */
        .footer-bottom-watermark { font-size: 120px; bottom: -10px; }
        .footer-bottom-watermark2 { font-size: 120px; }
    }
    @media (max-width: 767px) {
        footer {
            padding: 50px 20px 15px;
        }
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 25px;
            margin-bottom: 40px;
        }
        .footer-top {
            margin-bottom: 40px;
            padding-bottom: 25px;
        }
        .footer-headline h2 { 
            font-size: 28px;
            line-height: 1.2;
        }
        .footer-newsletter p {
            font-size: 13px;
        }
        .newsletter-form {
            flex-direction: column;
            gap: 10px;
        }
        .newsletter-form input {
            padding: 12px 15px;
            font-size: 14px;
            width: 100%;
            border-radius: 8px;
        }
        .newsletter-form button {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
        }
        .newsletter-form i {
            display: none;
        }
        .footer-col h5,
        .footer-contact h5 {
            font-size: 12px;
            margin-bottom: 15px;
        }
        .footer-col ul li {
            margin-bottom: 12px;
        }
        .footer-col ul li a {
            font-size: 14px;
        }
        .footer-contact h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .social-icons {
            gap: 10px;
        }
        .social-icons span {
            font-size: 12px;
        }
        .social-icons a {
            width: 32px;
            height: 32px;
            font-size: 16px;
        }
        .footer-bottom {
            flex-direction: column;
            gap: 15px;
            text-align: center;
            font-size: 12px;
            padding-top: 20px;
        }
        .footer-bottom-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .footer-bottom-links a { 
            margin: 0;
            font-size: 12px;
        }
        .footer-bottom-watermark { font-size: 60px; bottom: -5px; }
        .footer-bottom-watermark2 { font-size: 80px; }
    }
    @media (max-width: 480px) {
        footer {
            padding: 40px 15px 10px;
        }
        .footer-container {
            padding: 0 5px;
        }
        .footer-top {
            margin-bottom: 30px;
            padding-bottom: 20px;
            gap: 20px;
        }
        .footer-headline h2 { 
            font-size: 22px;
        }
        .footer-grid {
            gap: 20px;
            margin-bottom: 30px;
        }
        .footer-col h5,
        .footer-contact h5 {
            font-size: 11px;
            margin-bottom: 12px;
        }
        .footer-col ul li {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            font-size: 13px;
        }
        .footer-contact h3 {
            font-size: 16px;
            margin-bottom: 12px;
        }
        .social-icons {
            gap: 8px;
        }
        .social-icons a {
            width: 30px;
            height: 30px;
            font-size: 14px;
        }
        .footer-bottom {
            padding-top: 15px;
            gap: 12px;
        }
        .footer-bottom-links a {
            font-size: 11px;
        }
        .footer-bottom-watermark { font-size: 40px; }
        .footer-bottom-watermark2 { font-size: 60px; }
    }
</style>

<footer>
    <!-- HUGE WATERMARK TEXT -->
    <!-- <div class="footer-watermark">Care32</div> -->
    
    <!-- BOTTOM WATERMARK TEXT -->
    <!-- <div class="footer-bottom-watermark">Care32</div> -->

    <div class="footer-container">
        <!-- TOP SECTION -->
        <div class="footer-top">
            <div class="footer-headline">
                <h2>Your Smile Matters<br>Connect With Us Today</h2>
            </div>
            <div class="footer-newsletter">
                <p>Join our newsletter to receive the latest oral health tips, special offers and clinic updates.</p>
                <div class="newsletter-form">
                    <i class="fa-regular fa-envelope" style="margin-left: 15px; color:#888;"></i>
                    <input type="email" placeholder="Your Email Address">
                    <button type="button">Subscribe</button>
                </div>
            </div>
        </div>

        <!-- BOTTOM GRID -->
        <div class="footer-grid">
            <div class="footer-col">
                <h5>Company</h5>
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('services') ?>">Services</a></li>
                    <li><a href="<?= base_url('about') ?>">About Us</a></li>
                    <li><a href="<?= base_url('doctors') ?>">Dentist</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Resources</h5>
                <ul>
                    <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">404 Error</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Legal</h5>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">License</a></li>
                    <li><a href="#">Instruction</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h5>We'd love to help you with ease</h5>
                <h3>hello@care32.com</h3>
                <div class="social-icons">
                    <span>Follow Us</span>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- BOTTOM BAR -->
        <div class="footer-bottom">
        <div>©2026 All Rights Reserved</div>
            <div class="footer-bottom-links">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy & Policy</a>
            </div>
        </div>
         <div class="footer-bottom-watermark2">Care32</div>
    </div>
</footer>

<!-- Aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>