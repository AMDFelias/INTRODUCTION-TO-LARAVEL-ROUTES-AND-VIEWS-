
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Radiant Glow Beauty & Wellness</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <a href="{{ route('index') }}" class="brand">
            <img src="{{ asset('images/logo.jfif') }}" alt="Shop Logo">
            <span>Radiant Glow Beauty & Wellness</span>
        </a>

        <nav>
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}" class="active">Contact</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="section-title">Contact Us</h2>

        <div class="contact-box">

            <p><strong>Location:</strong> Nasipit, Agusan del Norte</p>
            <p><strong>Email:</strong> radiantglow.wellness@example.com</p>
            <p><strong>Phone:</strong> 0912-345-6789</p>

            <br>

            <form action="{{ route('contact') }}" method="get">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name"
                        placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email"
                        placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message / Product Inquiry</label>
                    <textarea id="message" name="message" rows="4"
                        placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="btn">Send Message</button>

            </form>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Radiant Glow Beauty & Wellness Shop |
        Nasipit, Agusan del Norte</p>
    </footer>

</body>
</html>
