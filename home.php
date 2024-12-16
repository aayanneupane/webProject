<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Marketplace</title>
    <link rel="stylesheet" href="homepage.css">
    <script src="script.js" defer></script>
</head>
<body>
    

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo"><a href="landing_page.html">ServicePro</a></div>
            <nav class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#categories">Services</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="user-options">
                <a href="login.html" class="btn">Login</a>
                <a href="signup.html" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Find Trusted Professionals Near You!</h1>
            <p>Quickly connect with skilled workers to solve your problems at your convenience.</p>
            <form action="search.php" method="GET" class="search-form">
                <input type="text" name="query" placeholder="Search for services or professionals...">
                <button type="submit" class="btn btn-primary">Search Now</button>
            </form>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
                <h3>1. Search</h3>
                <p>Enter your problem or service you need (e.g., plumbing, cooking, electrical) in the search bar.</p>
            </div>
            <div class="step">
                <h3>2. Match</h3>
                <p>Our system will find the nearest available professional for your job.</p>
            </div>
            <div class="step">
                <h3>3. Confirm & Pay</h3>
                <p>Confirm the job and payment is held in escrow until the work is completed.</p>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="services" class="featured-services">
        <h2>Featured Services</h2>
        <div class="service-list">
            <div class="service">
                <h3>Plumbing</h3>
                <p>Need your pipes fixed? Our professional plumbers are ready to help.</p>
            </div>
            <div class="service">
                <h3>Electrical</h3>
                <p>From rewiring to electrical repairs, our electricians are skilled and reliable.</p>
            </div>
            <div class="service">
                <h3>Home Cooking</h3>
                <p>Hire a professional home cook to prepare a meal for your family or event.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>What Our Users Are Saying</h2>
        <div class="testimonial-list">
            <div class="testimonial">
                <p>"I found a plumber within minutes and he fixed my leaking sink in no time! Highly recommend." - Sarah J.</p>
            </div>
            <div class="testimonial">
                <p>"Great service! The electrician was punctual and professional. My lights are working perfectly now." - John D.</p>
            </div>
            <div class="testimonial">
                <p>"I hired a home cook for a family event. The food was amazing, and the chef was so friendly!" - Emma W.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta" class="cta">
        <h2>Ready to Hire a Professional?</h2>
        <a href="#search" class="cta-button">Search for Services</a>
    </section>

    <!-- Footer Section -->
    <footer id="contact">
        <div class="footer-content">
            <p>&copy; 2024 ServicePro. All rights reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
