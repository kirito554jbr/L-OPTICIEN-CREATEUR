<!DOCTYPE html>

<html>

<head>

    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <style>
        .thumbnail {

            position: relative;

            padding: 0px;

            margin-bottom: 20px;

        }

        .thumbnail img {

            width: 80%;

        }

        .thumbnail .caption {

            margin: 7px;

        }

        .main-section {

            background-color: #F8F8F8;

        }

        .dropdown {

            float: right;

            padding-right: 30px;

        }

        .btn {

            border: 0px;

            margin: 10px 0px;

            box-shadow: none !important;

        }

        .dropdown .dropdown-menu {

            padding: 20px;

            top: 30px !important;

            width: 350px !important;

            left: -110px !important;

            box-shadow: 0px 5px 30px black;

        }

        .total-header-section {

            border-bottom: 1px solid #d2d2d2;

        }

        .total-section p {

            margin-bottom: 20px;

        }

        .cart-detail {

            padding: 15px 0px;

        }

        .cart-detail-img img {

            width: 100%;

            height: 100%;

            padding-left: 15px;

        }

        .cart-detail-product p {

            margin: 0px;

            color: #000;

            font-weight: 500;

        }

        .cart-detail .price {

            font-size: 12px;

            margin-right: 10px;

            font-weight: 500;

        }

        .cart-detail .count {

            color: #C2C2DC;

        }

        .checkout {

            border-top: 1px solid #d2d2d2;

            padding-top: 15px;

        }

        .checkout .btn-primary {

            border-radius: 50px;

            height: 50px;

        }

        .dropdown-menu:before {

            content: " ";

            position: absolute;

            top: -20px;

            right: 50px;

            border: 10px solid transparent;

            border-bottom-color: #fff;

        }
    </style>



    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

</head>

<body>



    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-sm-12 col-12 main-section">

                <div class="dropdown">

                    <button type="button" class="btn btn-primary" data-toggle="dropdown">

                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                    </button>

                    <div class="dropdown-menu">

                        <div class="row total-header-section">

                            <div class="col-lg-6 col-sm-6 col-6">

                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                            </div>

                            @php $total = 0 @endphp

                            @foreach ((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach

                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">

                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>

                            </div>

                        </div>

                        @if (session('cart'))

                            @foreach (session('cart') as $id => $details)
                                <div class="row cart-detail">

                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">

                                        <img src="{{ $details['image'] }}" />

                                    </div>

                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">

                                        <p>{{ $details['name'] }}</p>

                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                            class="count"> Quantity:{{ $details['quantity'] }}</span>

                                    </div>

                                </div>
                            @endforeach

                        @endif

                        <div class="row">

                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">

                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <br />

    <div class="container">



        @if (session('success'))
            <div class="alert alert-success">

                {{ session('success') }}

            </div>
        @endif



        @yield('content')

    </div>



    @yield('scripts')



</body>

</html>
