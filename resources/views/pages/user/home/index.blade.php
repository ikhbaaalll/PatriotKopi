@extends('layouts.user')

@section('content')
    <div class="row pb-3 bg-white" id="home">
        <div class="col-6 align-self-center px-5">
            <div class="row px-5">
                <h1 class="text-dark font-weight-bold">WELCOME to PATRIOT KOPI.</h1>
            </div>
            <div class="row px-5">
                <h6 class="text-dark">Website untuk para pecinta kopi di Kota Bekasi. Tentukan pilihanmu untuk
                    hangout bersama kerabatmu di Coffee Shop. ENJOY :).</h6>
            </div>
            <div class="row px-5">
                <span class="badge badge-secondary p-3 m-3">
                    <a href="{{ route('user.coffeeshop.index') }}" class="text-light text-decoration-none">Coffeshop</a>
                </span>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <img class="mx-auto"src="{{ asset('assets/image/bg.png') }}" alt="" height="500">
            </div>
        </div>
    </div>
    <div class="row" id="coffeeshop">
        <h2 class="text-center text-light ml-4 mt-2">COFFEE SHOP</h2>
    </div>
    <div class="row justify-content-around my-2 pb-5">
        <a href="{{ route('user.coffeeshop.recommend') }}" class="mx-auto">
            <img class=""src="{{ asset('assets/image/recommend.png') }}" alt="" height="400">
        </a>
        <a href="{{ route('user.coffeeshop.index') }}" class="mx-auto">
            <img src="{{ asset('assets/image/gallery.png') }}" alt="" height="400">
        </a>
    </div>
    <div class="row bg-white">
        <h2 class="ml-auto mr-4 mt-2 text-uppercase d-block">About</h2>
    </div>
    <div class="row pb-3 bg-white" id="aboutus">
        <div class="col-md-3 col-sm-12 align-self-center">
            <div class="row">
                <img class="mx-auto"src="{{ asset('assets/image/symbol.png') }}" alt="" height="200">
            </div>
        </div>
        <div class="col-md-9 col-sm-12 align-self-center my-4">
            <div class="row mt-3">
                <h3 class="text-center mx-auto">WHAT IS PATRIOT KOPI ?
                </h3>
            </div>
            <div class="row mt-2">
                <h6 class="mx-auto w-75" style="line-height: 2;">PATRIOT KOPI is a recommender system website by using
                    content-based method. Patriot Kopi provides information of Coffee Shop in Bekasi City (West Bekasi,
                    South Bekasi, North Bekasi and East Bekasi). This website was created so that users can choose a coffee
                    shop that fits the user's criteria.
                </h6>
            </div>
            <div class="row mt-4">
                <h3 class="text-center mx-auto mt-4">THE INTENTIONS
                </h3>
            </div>
            <div class="row mt-2 mb-5">
                <h6 class="mx-auto w-75" style="line-height: 2;">Users can get results from this recommendation system if
                    the input that the user
                    provides is in accordance with the coffee shop data contained in this website. Coffee shop data on this
                    website is still limited due to survey limitations.
                </h6>
            </div>
        </div>
    </div>
    <div class="row pt-3" style="background: rgb(102, 88, 70); back" id="contact">
        <h2 class="text-center mx-auto" style="color: #4F391C;">CONTACT</h2>
    </div>
    <div class="row justify-content-around py-5" style="background: rgb(102, 88, 70);">
        <a href="https://www.google.co.id/maps/@-6.2733712,106.9130459,12z"
            class="d-flex my-3 align-items-center flex-column text-decoration-none">
            <img class="text-center"src="{{ asset('assets/image/home.png') }}" alt="" height="40">
            <h5 class="mt-4 text-center" style="color: #000;">Kota Bekasi, Jawa Barat, Indonesia</h5>
        </a>
        <a href="https://api.whatsapp.com/send?phone=6285692349901"
            class="d-flex my-3 align-items-center flex-column text-decoration-none">
            <img src="{{ asset('assets/image/phone.png') }}" alt="" height="40">
            <h5 class="mt-4 text-center" style="color: #000;">(+62) 85692349901</h5>
        </a>
        <a href="mailto:Rizkamillens@gmail.com" class="d-flex my-3 align-items-center flex-column text-decoration-none">
            <img src="{{ asset('assets/image/mail.png') }}" alt="" height="40">
            <h5 class="mt-4 text-center" style="color: #000;">Rizkamillens@gmail.com</h5>
        </a>
    </div>
@endsection
