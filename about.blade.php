
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Radiant Glow Beauty & Wellness</title>
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
            <a href="{{ route('about') }}" class="active">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="section-title">About Our Shop & Founders</h2>

        <div class="card">
            <h3>Our Story</h3>

            <p>
                Radiant Glow Beauty & Wellness Shop was created to make
                safe, effective skincare and self-care products accessible
                to everyone. We believe true beauty starts with healthy
                habits and confidence.
            </p>

            <br>

            <h3>Meet the Founders</h3>

            <p>
                Hello! We are <strong>Angel Michael Dave Felias</strong>
                and <strong>Rodelyn Domino</strong>, currently taking a
                Bachelor of Science in Information Technology at
                <strong>Saint Michael College of Caraga</strong>.
            </p>

            <p>
                Felias lives in Kinabjangan, Nasipit, Agusan del Norte,
                and Domino lives in Brgy. 5, Nasipit, Agusan del Norte.
            </p>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Radiant Glow Beauty & Wellness Shop |
        Nasipit, Agusan del Norte</p>
    </footer>

</body>
</html>
