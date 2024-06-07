<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - SHstore</title>
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <h1>Shop</h1>
        <div class="image-container">
            <nav class="navigation">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
        <div class="filter">
            <a href="{{ url('/shop?category=nike') }}">Nike</a>
            <a href="{{ url('/shop?category=adidas') }}">Adidas</a>
            <a href="{{ url('/shop?category=new-balance') }}">New Balance</a>
            <a href="{{ url('/shop?category=converse') }}">Converse</a>
            <a href="{{ url('/shop?category=vans') }}">Vans</a>
        </div>
        <div class="products">
            @foreach($products as $product)
                <div class="product">
                    <img src="{{ asset('storage/'.$product->image_url) }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="price">${{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
