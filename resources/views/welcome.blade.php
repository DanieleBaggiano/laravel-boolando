<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-boolando</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>

    <nav class="d-flex justify-content-center">
        <div class="width d-flex flex-wrap">
            @foreach($products['products'] as $product)
            <div class="image-wrapper">
                <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="Image {{ $product['id'] }}">
                <div class="image-overlay d-flex justify-content-center align-items-center">
                    <img src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="Back Image {{ $product['id'] }}">
                </div>
                <div class="">
                    @foreach($product['badges'] as $badge)
                        <span class="color-value">{{ $badge['value'] }}</span>
                    @endforeach
                </div>
                <span>{{ $product['brand'] }}</span>
                <h4>{{ $product['name'] }}</h4>
                <span class="color-price">{{ $product['price'] }} €</span>
            </div>
            @endforeach
        </div>
    </nav>

    @include('partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>