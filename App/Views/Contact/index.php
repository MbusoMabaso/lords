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
        <section class="contact-section">
            <h1 class="section-title">Private Inquiry</h1>
            <p class="text-center text-gray mb-4">We invite you to contact us regarding our collection. All inquiries are handled with the utmost discretion.</p>
            
            <div class="contact-container">
                <form action="/contact/send" method="POST" class="inquiry-form">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Enter your name" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter your email" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Interested Vehicle</label>
                        <select name="vehicle" class="form-input">
                            <option value="general">General Inquiry</option>
                            <option value="silver-spectre">The Silver Spectre</option>
                            <option value="mercedes-amg-a45-2016">Mercedes AMG A45 2016</option>
                            <option value="jaguar-f-type-r-2017">Jaguar F Type R 2017</option>
                            <option value="porsche-911-turbo-s-2014">Porsche 911 Turbo S 2014</option>
                            <option value="bmw-m4-competition-2018">BMW M4 Competition 2018</option>
                            <option value="porsche-911-carrera-4s-2014">Porsche 911 Carrera 4S 2014</option>
                            <option value="corvette-stingray-77">1977 Corvette Stingray</option>
                            <option value="nissan-gtr-2014">2014 Nissan GTR</option>
                            <option value="mercedes-sl-500-81">1981 Mercedes SL 500</option>
                            <option value="mercedes-w123-200e">Mercedes W123 200e</option>
                            <option value="cortina-mk3">1976 Cortina Mk3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" placeholder="Describe your requirements..." class="form-input" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Private Inquiry</button>
                </form>
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
