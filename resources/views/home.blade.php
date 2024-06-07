<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHstore</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('resource/images/Subtract.png') }}" alt="Subtract Image">
            <nav class="navigation">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
        <div class="logo">
            <img src="{{ asset('resource/images/nike.png') }}" alt="nike" class="nike">
            <img src="{{ asset('resource/images/air.png') }}" alt="air" class="jordan">
            <img src="{{ asset('resource/images/modelnike.png') }}" alt=" Image" class="mdl-nike">
            <button class="button"href="/shop">Collection</button>
        </div>
        
        <div class="product">
            <a href="#">Air Jordan Retro 1 High</a>
            <img src="{{ asset('resource/images/Rectangle 10.png') }}" alt="rectangle Image" class="item-bg">
        </div>
        <div class="field">
            <img src="{{ asset('resource/images/Subtract_2.png') }}" alt=" Image" class="item-field">
            <img src="{{ asset('resource/images/shoes.png') }}" alt=" shoes" class="shoes">
            <div class="status-shoes">
                <h3>Available</h3>
                <p>Stocks</p>
                <h1>200</h1>
            </div>
            <button href="#" class="button2">
                <img src="{{ asset('resource/images/Vector.png') }}" alt="img2" class="vector">
            </button>
        </div>

        <div class="pict-container">
            <img src="{{ asset('resource/images/img2.jpg') }}" alt="img2" class="imgnike">
            <img src="{{ asset('resource/images/img1.jpg') }}" alt="img1" class="imgnike">
        </div>
        
 
    </div>

</body>
</html>
