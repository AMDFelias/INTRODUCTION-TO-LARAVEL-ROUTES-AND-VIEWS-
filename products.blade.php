
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Radiant Glow Beauty & Wellness</title>
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
            <a href="{{ route('products') }}" class="active">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="section-title">Our Beauty & Wellness Products</h2>

        <div class="grid">

            <div class="card">
                <h3>Vitamin C Glow Serum</h3>
                <p>
                    Brightens dull skin and hydrates deeply
                    for a fresh, radiant complexion.
                </p>
                <p class="price">₱349.00</p>
            </div>

            <div class="card">
                <h3>Aloe & Rosewater Facial Mist</h3>
                <p>
                    Soothing daily hydrating spray that
                    refreshes tired skin anytime.
                </p>
                <p class="price">₱220.00</p>
            </div>

            <div class="card">
                <h3>Lavender Essential Wellness Oil</h3>
                <p>
                    Pure calming aroma oil designed for
                    stress relief and restful sleep.
                </p>
                <p class="price">₱280.00</p>
            </div>

            <div class="card">
                <h3>Shea & Honey Body Scrub</h3>
                <p>
                    Gentle exfoliating scrub that leaves
                    skin soft, smooth, and nourished.
                </p>
                <p class="price">₱310.00</p>
            </div>

            <div class="card">
                <h3>Collagen Night Repair Cream</h3>
                <p>
                    Overnight moisturizing cream to support
                    elasticity and smooth texture.
                </p>
                <p class="price">₱420.00</p>
            </div>

            <div class="card">
                <h3>Herbal Relaxing Bath Salts</h3>
                <p>
                    Mineral-rich bath soak infused with
                    chamomile and eucalyptus.
                </p>
                <p class="price">₱260.00</p>
            </div>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Radiant Glow Beauty & Wellness Shop |
        Nasipit, Agusan del Norte</p>
    </footer>

</body>
</html>
