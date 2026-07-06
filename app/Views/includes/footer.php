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

    /* Floating WhatsApp Button */
    .whatsapp-float {
        position: fixed;
        width: 45px;
        height: 45px;
        bottom: 25px;
        right: 25px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 24px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 9998; /* Just below modal/backdrop, above standard elements */
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #128c7e;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    }

    .whatsapp-float i {
        line-height: 1;
    }

    @media (max-width: 767px) {
        .whatsapp-float {
            width: 38px;
            height: 38px;
            bottom: 15px;
            right: 15px;
            font-size: 20px;
        }
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

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/1234567890" class="whatsapp-float" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Premium Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column align-items-start position-relative">
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close" style="top: 25px; right: 30px;"></button>
                <h5 class="modal-title" id="bookingModalLabel">Book Appointment</h5>
                <div class="sub-title">Select your preferred slot and service. Our team will verify it.</div>
            </div>
            <div class="modal-body">
                <!-- Error Message Alert -->
                <div id="bookingErrorMessage" class="alert alert-danger" style="display: none; border-radius: 12px; margin-bottom: 20px;"></div>

                <!-- Success View -->
                <div id="bookingSuccessMessage" style="display: none;" class="text-center py-4">
                    <div class="success-icon-wrapper mb-3">
                        <i class="fa-solid fa-circle-check text-success" style="font-size: 60px;"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Appointment Requested!</h4>
                    <p class="text-muted px-3">Thank you for choosing Care32. Our representative will contact you shortly to confirm your selected time slot.</p>
                </div>

                <!-- Form Fields Wrapper -->
                <div id="bookingFormFields">
                    <form id="bookingModalForm" action="<?= base_url('contactsubmit') ?>" method="POST">
                        <input type="hidden" name="message" value="">
                        
                        <!-- Name -->
                        <div class="input-group-wrapper">
                            <label class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control" name="name" required placeholder="John Doe">
                            </div>
                        </div>
                        
                        <div class="row">
                            <!-- Phone -->
                            <div class="col-md-6 input-group-wrapper">
                                <label class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input type="tel" class="form-control" name="mobile" required placeholder="98765 43210">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 input-group-wrapper">
                                <label class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" required placeholder="john@example.com">
                                </div>
                            </div>
                        </div>

                        <!-- Service -->
                        <div class="input-group-wrapper">
                            <label class="form-label">Select Service</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-tooth"></i></span>
                                <select class="form-select" name="service" required>
                                    <option value="" selected disabled>Choose a service</option>
                                    <option value="General Dentistry">General Dentistry</option>
                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                    <option value="Dental Implants">Dental Implants</option>
                                    <option value="Pediatric Dentistry">Pediatric Dentistry</option>
                                    <option value="Emergency Dentistry">Emergency Dentistry</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date -->
                            <div class="col-md-6 input-group-wrapper">
                                <label class="form-label">Preferred Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                                    <input type="date" class="form-control" name="date" required id="bookingDateInput">
                                </div>
                            </div>
                            <!-- Time Slot -->
                            <div class="col-md-6 input-group-wrapper">
                                <label class="form-label">Time Slot</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
                                    <select class="form-select" name="time_slot" required>
                                        <option value="" selected disabled>Choose slot</option>
                                        <option value="Morning (09:00 AM - 12:00 PM)">Morning Slot</option>
                                        <option value="Afternoon (12:00 PM - 04:00 PM)">Afternoon Slot</option>
                                        <option value="Evening (04:00 PM - 08:00 PM)">Evening Slot</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Notes -->
                        <div class="input-group-wrapper text-start">
                            <label class="form-label">Additional Notes</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-comment"></i></span>
                                <textarea class="form-control" name="user_note" rows="2" placeholder="Any specific concerns..."></textarea>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="submit-booking-btn mt-3">
                            <span class="d-inline-flex align-items-center gap-2">Confirm Booking <i class="fa-solid fa-check"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Booking Modal Premium Styling & Height Reduction */
#bookingModal {
    z-index: 100000 !important; /* Higher than navbar z-index */
}

.modal-backdrop {
    z-index: 99999 !important; /* Covers the navbar and page under modal */
}

#bookingModal .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    background: #ffffff;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
}

#bookingModal .modal-header {
    border-bottom: 1px solid #eaeaea;
    padding: 15px 20px;
    background: #ffffff;
}

#bookingModal .modal-title {
    font-weight: 700;
    color: #111;
    font-size: 20px;
    line-height: 1.2;
}

#bookingModal .modal-header .sub-title {
    font-size: 12px;
    color: #666;
    margin-top: 3px;
    font-weight: 400;
    text-align: left;
}

#bookingModal .modal-body {
    padding: 15px 20px 20px;
}

#bookingModal .input-group-text {
    background: #f8f9fa;
    border-right: none;
    color: #888;
    border-radius: 10px 0 0 10px;
    padding: 8px 12px;
}

#bookingModal .form-control, 
#bookingModal .form-select {
    border-left: none;
    background: #f8f9fa;
    border-radius: 0 10px 10px 0;
    padding: 8px 12px;
    font-size: 14px;
    border-color: #dee2e6;
    color: #333;
    transition: all 0.3s ease;
}

#bookingModal .form-control:focus, 
#bookingModal .form-select:focus {
    border-color: #dee2e6;
    background: #ffffff;
    box-shadow: none;
}

#bookingModal .input-group-wrapper {
    position: relative;
    margin-bottom: 12px; /* Reduced vertical spacing */
}

#bookingModal .input-group {
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid #dee2e6;
    transition: all 0.3s ease;
}

#bookingModal .input-group:focus-within {
    border-color: var(--orange);
    box-shadow: 0 0 0 3px rgba(255, 95, 31, 0.15);
}

#bookingModal .form-label {
    font-weight: 600;
    font-size: 13px;
    color: #444;
    margin-bottom: 4px; /* Reduced label spacing */
    display: block;
    text-align: left;
}

.submit-booking-btn {
    background: var(--orange);
    color: white;
    font-weight: 700;
    font-size: 15px;
    padding: 10px; /* Reduced padding */
    border-radius: 10px;
    border: none;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 95, 31, 0.3);
}

.submit-booking-btn:hover {
    background: #e04f14;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 95, 31, 0.4);
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Intercept clicks on links/buttons that represent Book Appointment
        function bindBookingButtons() {
            document.querySelectorAll("a, button").forEach(function(el) {
                const text = el.textContent.trim().toLowerCase();
                const href = el.getAttribute("href") || "";
                
                if (
                    text.includes("book appointment") || 
                    text.includes("book a appointment") || 
                    text.includes("book an appointment")
                ) {
                    // Turn it into a modal trigger
                    el.setAttribute("data-bs-toggle", "modal");
                    el.setAttribute("data-bs-target", "#bookingModal");
                    el.setAttribute("href", "javascript:void(0);");
                }
            });
        }
        
        bindBookingButtons();
        
        // Also run binding again in case elements are loaded dynamically later
        setTimeout(bindBookingButtons, 1000);
        
        // Set minimum date of booking form to today
        const dateInput = document.getElementById("bookingDateInput");
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }
        
        // AJAX Form Submission
        const bookingForm = document.getElementById("bookingModalForm");
        const successView = document.getElementById("bookingSuccessMessage");
        const errorView = document.getElementById("bookingErrorMessage");
        const submitBtn = bookingForm.querySelector(".submit-booking-btn");
        const formFieldsContainer = document.getElementById("bookingFormFields");
        
        bookingForm.addEventListener("submit", function(e) {
            e.preventDefault();
            
            // Hide previous errors
            errorView.style.display = "none";
            
            // Disable button & show loading state
            submitBtn.disabled = true;
            const originalBtnHTML = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Confirming...';
            
            // Extract fields
            const name = bookingForm.querySelector('[name="name"]').value;
            const email = bookingForm.querySelector('[name="email"]').value;
            const mobile = bookingForm.querySelector('[name="mobile"]').value;
            const service = bookingForm.querySelector('[name="service"]').value;
            const date = bookingForm.querySelector('[name="date"]').value;
            const timeSlot = bookingForm.querySelector('[name="time_slot"]').value;
            const note = bookingForm.querySelector('[name="user_note"]').value;
            
            const messageText = `Appointment Booking Details:\n- Service: ${service}\n- Preferred Date: ${date}\n- Preferred Time Slot: ${timeSlot}\n- Patient Note: ${note}`;
            
            bookingForm.querySelector('[name="message"]').value = messageText;
            
            // Send via AJAX
            const formData = new FormData(bookingForm);
            
            fetch("<?= base_url('contactsubmit') ?>", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    // Show success view, hide form fields
                    formFieldsContainer.style.display = "none";
                    successView.style.display = "block";
                    
                    // Reset form fields
                    bookingForm.reset();
                    
                    // Hide modal after 3 seconds
                    setTimeout(() => {
                        const modalEl = document.getElementById('bookingModal');
                        const modal = bootstrap.Modal.getInstance(modalEl);
                        if (modal) modal.hide();
                        
                        // Delay restoring form view slightly so transition finishes
                        setTimeout(() => {
                            formFieldsContainer.style.display = "block";
                            successView.style.display = "none";
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHTML;
                        }, 500);
                    }, 3000);
                } else {
                    // Show error message
                    errorView.textContent = data.message || "An error occurred. Please try again.";
                    errorView.style.display = "block";
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnHTML;
                }
            })
            .catch(err => {
                console.error(err);
                errorView.textContent = "Network error. Please check your connection and try again.";
                errorView.style.display = "block";
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHTML;
            });
        });
    });
</script>

<!-- Aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>