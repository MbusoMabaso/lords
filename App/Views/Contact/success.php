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

    <main class="container py-5 mt-5 text-center">
        <div class="success-message">
            <h1 class="section-title">Inquiry Received</h1>
            <p class="lead">Your request has been transmitted securely.</p>
            <p class="text-gray">A private consultant will contact you shortly to discuss the acquisition.</p>
            <a href="/vehicles" class="btn btn-primary mt-5">Return to Collection</a>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Lloyds. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
