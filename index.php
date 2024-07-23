<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cypher Network</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="cn.jpg" alt="Cypher Network Logo" class="logo-img">
                <h1>Cypher Network</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="/#home">Home</a></li>
                    <li><a href="/#about">About Us</a></li>
                    <li><a href="/#services">Services</a></li>
                    <li><a href="/billing">Billing</a></li>
                    <li><a href="/#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h2 class="hero-text">Welcome to Cypher Network</h2>
            <p class="hero-text">Your One-Stop Solution for Game Server Hosting, Discord Bots, and More</p>
            <a href="#services" class="cta-btn">Explore Our Services</a>
            <a href="#contact" class="cta-btn">Contact Us</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Cypher Network is dedicated to providing top-notch game server hosting, custom Discord bots, and other specialized services.</p>
            <div class="team">
                <div class="team-member">
                    <img src="team1.jpg" alt="Jimmxyy">
                    <h3>Jimmxyy</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img src="team2.jpg" alt="Neon">
                    <h3>Neon</h3>
                    <p>Founder</p>
                </div>
                <div class="team-member">
                    <img src="team4.jpg" alt="Shermaniac">
                    <h3>Shermaniac</h3>
                    <p>Owner & Developer</p>
                </div>
                <div class="team-member">
                    <img src="team3.jpg" alt="Cade">
                    <h3>Cade</h3>
                    <p>Co-Owner</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service">
                <h3>Game Server Hosting</h3>
                <p>High-performance game server hosting for a variety of games.</p>
            </div>
            <div class="service">
                <h3>Discord Bots</h3>
                <p>Custom bots to enhance your Discord server experience.</p>
            </div>
            <div class="service">
                <h3>Paid Bot Services</h3>
                <p>Access premium bots with advanced features.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="submit_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div class="contact-info">
                <p>Email: support@cyphernetwork.xyz</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Cypher Network. All rights reserved.</p>
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
