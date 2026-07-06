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

    <header class="hero-carousel" style="position: relative; height: 100vh; overflow: hidden; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="carousel-slides" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; transition: transform 1s ease-in-out;">
            <div class="carousel-slide" style="min-width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/2017 Porsche 911 (991.2) Turbo S/716871548_1270707578385355_5970121644626082192_n.jpg'); background-size: cover; background-position: center;"></div>
            <div class="carousel-slide" style="min-width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/2017 Porsche 911 (991.2) Turbo S/716974506_1645136376551172_8742596011284347625_n.jpg'); background-size: cover; background-position: center;"></div>
            <div class="carousel-slide" style="min-width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/2017 Porsche 911 (991.2) Turbo S/717038069_936437986087322_6236742058352800887_n.jpg'); background-size: cover; background-position: center;"></div>
        </div>
        <div class="hero-content" style="position: relative; z-index: 1;">
            <h1 class="display-1">Engineered Perfection.</h1>
            <p class="lead">A curated selection of the world's most prestigious automobiles.</p>
            <a href="/vehicle/porsche-911-turbo-s-2017" class="btn btn-primary">Explore Collection</a>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('.hero-carousel');
            const slidesContainer = carousel.querySelector('.carousel-slides');
            const slides = carousel.querySelectorAll('.carousel-slide');
            let currentIndex = 0;
            const numSlides = slides.length;

            const updateCarousel = () => {
                const offset = currentIndex * -100;
                slidesContainer.style.transform = `translateX(${offset}%)`;
            };

            setInterval(() => {
                currentIndex = (currentIndex === numSlides - 1) ? 0 : currentIndex + 1;
                updateCarousel();
            }, 5000);
        });
    </script>

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
