<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Glow | Beauty & Wellness Shop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('images/images.jfif') }}" alt="Shop Logo">
            <span>Radiant Glow Beauty & Wellness</span>
        </a>
        <nav>
            <a href="{{ route('home') }}" class="active">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Natural Beauty & Everyday Wellness</h1>
        <p>Discover gentle skincare, nourishing body care, and relaxing wellness essentials crafted to help you look and feel your best.</p>
        <a href="{{ route('products') }}" class="btn">Explore Our Products</a>
    </section>

    <div class="container">
        <h2 class="section-title">Why Shop With Us</h2>
        <div class="grid">
            <div class="card">
                <h3>Gentle Ingredients</h3>
                <p>Formulated with skin-loving botanical extracts suitable for daily routines.</p>
            </div>
            <div class="card">
                <h3>Wellness Focused</h3>
                <p>From calming aromatherapy oils to hydrating serums, everything supports self-care.</p>
            </div>
            <div class="card">
                <h3>Local & Trusted</h3>
                <p>Proudly serving our community in Nasipit, Agusan del Norte with quality beauty care.</p>
            </div>
        </div>
    </div>
</body>
</html>