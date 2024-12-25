<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">Lego.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" id="searchInput" onkeyup="searchFunction()" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    {{-- Container --}}
    <section id="produk" class="container mt-5">
        <div class="row" id="row">
            <div class="col-sm-6 col-md-4 col-lg-3" data-name="Susu Kedelai Organik">
                <div class="card">
                    <img src="{{ asset('img/produk1.png') }}" class="card-img-top img-card" alt="produk1">
                    <div class="card-body">
                        <h5 class="card-title">Susu Kedelai Organic</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-name="Greenfield Organik 16oz">
                <div class="card">
                    <img src="{{ asset('img/produk2.png') }}" class="card-img-top img-card" alt="produk2">
                    <div class="card-body">
                        <h5 class="card-title">Greendfield Organik</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-name="Botanico Skinlotion">
                <div class="card">
                    <img src="{{ asset('img/produk3.png') }}" class="card-img-top img-card" alt="Produk3">
                    <div class="card-body">
                        <h5 class="card-title">Botanico Skinlotion</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-name="Skin Revitalizer/Pelembab">
                <div class="card">
                    <img src="{{ asset('img/produk4.png') }}" class="card-img-top img-card" alt="Produk4">
                    <div class="card-body">
                        <h5 class="card-title">Skin Revitalizer</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('custom.js') }}"></script>
</body>

</html>
