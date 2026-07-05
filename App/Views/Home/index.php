<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo">LORDS VEHICLES</a>
            <ul class="nav-links">
                <li><a href="/vehicles">Collection</a></li>
                <li><a href="/about">Heritage</a></li>
                <li><a href="/contact">Inquire</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1 class="display-1">Engineered Perfection.</h1>
            <p class="lead">A curated selection of the world's most prestigious automobiles.</p>
            <a href="/vehicles" class="btn btn-primary">Explore Collection</a>
        </div>
    </header>

    <main class="container py-5">
        <section class="featured">
            <h2 class="section-title">Featured Masterpieces</h2>
            <div class="vehicle-grid">
                <!-- Vehicle Card -->
                <div class="vehicle-card">
                    <a href="/vehicle/porsche-911-turbo-s-2014" class="carousel-link">
                        <div class="vehicle-image-carousel">
                            <div class="carousel-slides">
                                <div class="carousel-slide" style="background-image: url('/assets/images/2014 Porsche 911 Turbo S Cabriolet/718867897_28251145214475798_7614942564880116612_n.jpg');"></div>
                                <div class="carousel-slide" style="background-image: url('/assets/images/2014 Porsche 911 Turbo S Cabriolet/718033576_28251144591142527_3433814087900508986_n.jpg');"></div>
                                <div class="carousel-slide" style="background-image: url('/assets/images/2014 Porsche 911 Turbo S Cabriolet/719351013_28251144927809160_2260112861515726302_n.jpg');"></div>
                            </div>
                            <button class="carousel-prev" aria-label="Previous slide">&larr;</button>
                            <button class="carousel-next" aria-label="Next slide">&rarr;</button>
                        </div>
                    </a>
                    <div class="vehicle-info">
                        <h3>2014 Porsche 911 Turbo S Cabriolet</h3>
                        <p class="price">Price on Request</p>
                        <p class="location">Twin-Turbo Flat-6 | AWD Performance</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Lords Vehicles. All rights reserved.</p>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carousels = document.querySelectorAll('.vehicle-image-carousel');
            carousels.forEach(carousel => {
                const slidesContainer = carousel.querySelector('.carousel-slides');
                const slides = carousel.querySelectorAll('.carousel-slide');
                const prevBtn = carousel.querySelector('.carousel-prev');
                const nextBtn = carousel.querySelector('.carousel-next');
                const numSlides = slides.length;
                let currentIndex = 0;
                if (numSlides <= 1) {
                    carousel.classList.add('has-one-slide');
                    return;
                }
                const updateCarousel = () => {
                    const offset = currentIndex * -100;
                    slidesContainer.style.transform = `translateX(${offset}%)`;
                };
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    currentIndex = (currentIndex === 0) ? numSlides - 1 : currentIndex - 1;
                    updateCarousel();
                });
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    currentIndex = (currentIndex === numSlides - 1) ? 0 : currentIndex + 1;
                    updateCarousel();
                });
                let autoPlayInterval = setInterval(() => { nextBtn.click(); }, 4000);
                carousel.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
                carousel.addEventListener('mouseleave', () => {
                    autoPlayInterval = setInterval(() => { nextBtn.click(); }, 4000);
                });
            });
        });
    </script>
</body>
</html>
