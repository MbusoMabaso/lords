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
                <!-- Vehicle Card Placeholder -->
                <div class="vehicle-card">
                    <a href="/vehicle/porsche-911-turbo-s-2014">
                        <div class="vehicle-image" style="background-image: url('/assets/images/2014 Porsche 911 Turbo S Cabriolet/718033576_28251144591142527_3433814087900508986_n.jpg');"></div>
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
</body>
</html>
