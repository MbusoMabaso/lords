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
            <a href="/" class="logo">LLOYDS</a>
            <ul class="nav-links">
                <li><a href="/vehicles">Collection</a></li>
                <li><a href="/about">Heritage</a></li>
                <li><a href="/contact">Inquire</a></li>
            </ul>
        </div>
    </nav>

    <main class="vehicle-details">
        <section class="gallery-hero">
            <div class="main-image" style="background-image: url('<?php echo $vehicle['image']; ?>');"></div>
        </section>

        <div class="container py-5">
            <div class="grid-layout">
                <div class="main-content">
                    <h1 class="vehicle-title"><?php echo $vehicle['title']; ?></h1>
                    <p class="vehicle-location-large"><?php echo $vehicle['spec']; ?></p>
                    
                    <div class="vehicle-meta mt-3">
                        <span class="price-tag"><?php echo $vehicle['price']; ?></span>
                    </div>

                    <div class="description mt-5">
                        <h2>Engineering Philosophy</h2>
                        <p><?php echo $vehicle['description']; ?></p>
                    </div>

                    <div class="specs-grid mt-5">
                        <?php foreach ($vehicle['specs'] as $label => $value): ?>
                            <div class="spec-item">
                                <span class="spec-label"><?php echo $label; ?></span>
                                <span class="spec-value"><?php echo $value; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="map-placeholder mt-5">
                        <h2>Provenance & Logistics</h2>
                        <div class="map-box">
                            <p>Secure Logistics Integration Placeholder</p>
                            <small>Global Shipping API would be initialized here</small>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="agent-card">
                        <h3>Acquire This Masterpiece</h3>
                        <div class="contact-actions mt-3">
                            <a href="https://wa.me/272784491" class="btn btn-success w-100 mb-2" target="_blank">WhatsApp Us</a>
                            <a href="tel:+272784491" class="btn btn-secondary w-100 mb-2">Call Us</a>
                        </div>
                        <form action="mailto:mabaso@writeme.com" method="post" enctype="text/plain" class="inquiry-form mt-3">
                            <input type="text" name="name" placeholder="Your Name" class="form-input">
                            <input type="email" name="email" placeholder="Your Email" class="form-input">
                            <textarea name="message" placeholder="Your Message" class="form-input" rows="5"></textarea>
                            <button type="submit" class="btn btn-primary w-100">Send Email</button>
                        </form>
                    </div>
                </aside>
            </div>

            <section class="immersive-gallery mt-5">
                <h2 class="mb-4">Immersive Gallery</h2>
                <div class="gallery-grid">
                    <?php foreach ($vehicle['gallery'] as $img): ?>
                        <div class="gallery-item">
                            <img src="<?php echo $img; ?>" alt="Vehicle Image" class="img-fluid">
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Lloyds. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
