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
    <nav class="navbar static">
        <div class="container">
            <a href="/" class="logo">LORDS VEHICLES</a>
            <ul class="nav-links">
                <li><a href="/vehicles">Collection</a></li>
                <li><a href="/about">Heritage</a></li>
                <li><a href="/contact">Inquire</a></li>
            </ul>
        </div>
    </nav>

    <main class="container py-5 mt-5">
        <header class="section-header">
            <h1 class="section-title">The Automotive Collection</h1>
            <p class="text-center text-gray">Curated masterpieces for the discerning collector.</p>
        </header>

        <section class="collection-section mt-5">
            <h2 class="collection-category-title">Modern Masterpieces</h2>
            <div class="vehicle-grid">
                <?php foreach ($vehicles as $vehicle): ?>
                    <?php if ($vehicle['category'] === 'Modern'): ?>
                        <div class="vehicle-card">
                            <a href="/vehicle/<?php echo $vehicle['slug']; ?>" class="carousel-link">
                                <div class="vehicle-image-carousel">
                                    <div class="carousel-slides">
                                        <?php 
                                            $images = isset($vehicle['gallery']) ? $vehicle['gallery'] : [$vehicle['image']];
                                            foreach ($images as $img): 
                                        ?>
                                            <div class="carousel-slide" style="background-image: url('<?php echo $img; ?>');"></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button class="carousel-prev" aria-label="Previous slide">&larr;</button>
                                    <button class="carousel-next" aria-label="Next slide">&rarr;</button>
                                </div>
                            </a>
                            <div class="vehicle-info">
                                <h3><?php echo $vehicle['title']; ?></h3>
                                <p class="price"><?php echo $vehicle['price']; ?></p>
                                <p class="location"><?php echo $vehicle['spec']; ?></p>
                                <div class="mt-3">
                                    <a href="/vehicle/<?php echo $vehicle['slug']; ?>" class="btn-link">View Details &rarr;</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="collection-section mt-5">
            <h2 class="collection-category-title">The Heritage Collection</h2>
            <div class="vehicle-grid">
                <?php foreach ($vehicles as $vehicle): ?>
                    <?php if ($vehicle['category'] === 'Heritage'): ?>
                        <div class="vehicle-card">
                            <a href="/vehicle/<?php echo $vehicle['slug']; ?>" class="carousel-link">
                                <div class="vehicle-image-carousel">
                                    <div class="carousel-slides">
                                        <?php 
                                            $images = isset($vehicle['gallery']) ? $vehicle['gallery'] : [$vehicle['image']];
                                            foreach ($images as $img): 
                                        ?>
                                            <div class="carousel-slide" style="background-image: url('<?php echo $img; ?>');"></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button class="carousel-prev" aria-label="Previous slide">&larr;</button>
                                    <button class="carousel-next" aria-label="Next slide">&rarr;</button>
                                </div>
                            </a>
                            <div class="vehicle-info">
                                <h3><?php echo $vehicle['title']; ?></h3>
                                <p class="price"><?php echo $vehicle['price']; ?></p>
                                <p class="location"><?php echo $vehicle['spec']; ?></p>
                                <div class="mt-3">
                                    <a href="/vehicle/<?php echo $vehicle['slug']; ?>" class="btn-link">View Details &rarr;</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
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

                // Auto-play functionality
                let autoPlayInterval = setInterval(() => {
                    nextBtn.click();
                }, 4000);

                // Pause on interaction
                carousel.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
                carousel.addEventListener('mouseleave', () => {
                    autoPlayInterval = setInterval(() => {
                        nextBtn.click();
                    }, 4000);
                });
            });
        });
    </script>
</body>
</html>
