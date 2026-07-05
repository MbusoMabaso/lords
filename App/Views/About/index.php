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
        <section class="heritage-content">
            <h1 class="section-title">The Legacy of Lords Vehicles</h1>
            <div class="heritage-grid">
                <div class="heritage-text">
                    <p class="lead">Preserving the pinnacle of automotive artistry.</p>
                    <p>For decades, Lords Vehicles has been the silent guardian of the world's most extraordinary machines. We do not simply sell cars; we curate legacies. From the visceral roar of a classic V8 to the silent precision of modern hyper-engineering, our collection is a testament to human ambition and mechanical perfection.</p>
                    <p class="mt-5">Our philosophy is simple: only the extraordinary. Every vehicle in our care undergoes a rigorous selection process, ensuring that only those with a profound story and impeccable provenance enter our stables.</p>
                </div>
                <div class="heritage-image">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80" alt="Classic Car Detail" class="img-fluid">
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
