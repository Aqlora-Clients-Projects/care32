<?= $this->extend('layout/mainlayout') ?>

<?= $this->section('content') ?>
<!-- DOCTORS PAGE STYLES -->
<style>
.doctors-header {
    padding: 120px 0 60px;
    text-align: center;
}
.doctors-main-title {
    color: var(--ui-text);
    font-weight: 700;
    font-size: 48px;
    margin-bottom: 20px;
}
.doctors-subtitle {
    color: var(--ui-text-muted);
    font-size: 20px;
    max-width: 600px;
    margin: 0 auto;
}

/* Category Filter */
.category-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 50px;
}
.filter-btn {
    background: transparent;
    color: var(--ui-text-muted);
    border: 1px solid #ddd;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 15px;
    transition: all 0.3s ease;
}
.filter-btn:hover, .filter-btn.active {
    background: var(--ui-blue);
    color: #ffffff;
    border-color: var(--ui-blue);
}

/* Doctors Grid */
.doctors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
    padding-bottom: 100px;
}
.doctor-card {
    background: var(--ui-card-bg);
    border-radius: 20px;
    padding: 20px;
    border: 1px solid #eaeaea;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}
.doctor-card:hover {
    transform: translateY(-8px);
    border-color: var(--ui-blue);
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.doctor-photo {
    width: 100%;
    aspect-ratio: 1 / 1;
    background: #f1f5f9;
    border-radius: 12px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.doctor-photo i {
    font-size: 60px;
    color: #cbd5e1;
}
.doctor-info {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.doctor-info h4 {
    color: var(--ui-text);
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.doctor-category {
    color: var(--ui-blue);
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(13, 148, 136, 0.1);
    padding: 6px 12px;
    border-radius: 5px;
    width: fit-content;
}
.social-links {
    display: flex;
    gap: 10px;
    margin-top: auto;
}
.social-links a {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #f1f5f9;
    color: var(--ui-text);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    text-decoration: none;
}
.social-links a:hover {
    background: var(--ui-blue);
    color: white;
}
</style>

<div class="container doctors-header">
    <h1 class="doctors-main-title">Meet the Team Behind the Smiles</h1>
    <p class="doctors-subtitle">Passionate professionals dedicated to exceptional dental care.</p>
</div>

<div class="container">
    <!-- Filters -->
    <div class="category-filters" id="doctorFilters">
        <button class="filter-btn active" data-filter="all">All Specialists</button>
        <button class="filter-btn" data-filter="restorative">Restorative</button>
        <button class="filter-btn" data-filter="cosmetic">Cosmetic</button>
        <button class="filter-btn" data-filter="orthodontics">Orthodontics</button>
        <button class="filter-btn" data-filter="pediatric">Pediatric</button>
        <button class="filter-btn" data-filter="surgery">Oral Surgery</button>
        <button class="filter-btn" data-filter="general">General</button>
    </div>

    <!-- Grid -->
    <div class="doctors-grid" id="doctorsGrid">
        <!-- Dr 1 -->
        <div class="doctor-card" data-category="restorative" data-aos="fade-up">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-md"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Ethan Marquez</h4>
                <div class="doctor-category">Restorative Dentistry</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 2 -->
        <div class="doctor-card" data-category="cosmetic" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-nurse"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Liana Kim</h4>
                <div class="doctor-category">Cosmetic Dentistry</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 3 -->
        <div class="doctor-card" data-category="orthodontics" data-aos="fade-up" data-aos-delay="200">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-md"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Marco Diaz</h4>
                <div class="doctor-category">Orthodontics</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 4 -->
        <div class="doctor-card" data-category="pediatric" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-nurse"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Naya Ellis</h4>
                <div class="doctor-category">Pediatric Dentistry</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 5 -->
        <div class="doctor-card" data-category="surgery" data-aos="fade-up">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-nurse"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Elise Tanaka</h4>
                <div class="doctor-category">Oral Surgery</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 6 -->
        <div class="doctor-card" data-category="periodontics" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-md"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Jamal Noor</h4>
                <div class="doctor-category">Periodontics</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 7 -->
        <div class="doctor-card" data-category="general" data-aos="fade-up" data-aos-delay="200">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-nurse"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Vivian Arce</h4>
                <div class="doctor-category">General Dentistry</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Dr 8 -->
        <div class="doctor-card" data-category="endodontics" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-photo">
                <i class="fa-solid fa-user-md"></i>
            </div>
            <div class="doctor-info">
                <h4>Dr. Owen Blake</h4>
                <div class="doctor-category">Endodontics</div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const doctorCards = document.querySelectorAll('.doctor-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            doctorCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                    // Re-trigger animation if needed
                    card.classList.remove('aos-animate');
                    setTimeout(() => card.classList.add('aos-animate'), 50);
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>
<?= $this->endSection() ?>
