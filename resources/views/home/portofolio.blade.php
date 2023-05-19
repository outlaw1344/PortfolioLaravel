@extends('components.template')
@section('main')
@include('components.partikel')
@include('components.navbar')

<style>
    .cardCustom {
        background: #FFFFFF ;
        color: black;
        padding: 20px;
        transition: 0.5s ease-in-out;
    }

    /* .cardCustom:hover {
        transform: scale(1.3);
        transform: translateY(-10px);
        background : rgb(243, 243, 243);
    } */

    .cardCustom img {
        max-width: 100%;
        height: auto;
    }

    .row {
        position: relative;
    }

    .row svg {
        height: 50px;
        color: rgb(130, 207, 255)
    }

    .arrow-kiri {
        position: absolute;
        z-index: 999;
        left: -15px;
        bottom: 0;
        top: 0;
        transform: translateY(250%)
    }
    .arrow-kanan {
        position: absolute;
        right: -10px;
        bottom: 0;
        top: 0;
        transform: translateY(250%)
    }
</style>


<link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
<div class="isi" id="isi" style="height: 100vh;">
    <div class="row h-100 d-flex align-items-center">
        <div class="col-md-12 text-light d-flex flex-column gap-2" style="z-index: 999">
            <h1 id="isi-h1" style="font-weight: 700;">
                <span class="" style="background: #F38C16;
                        background: linear-gradient(to right, #F38C16 22%, #F0513B 59%, #EF4444 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        ">Projek</span><br>
            </h1>
            <div id="isi-p" style="line-height: 150%;">
                Beberapa Projek Yang saya kembangakan
                <div class="row">
                    {{-- Arrow --}}
                    <div class="right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-circle-fill arrow-kiri" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>
                    </div>
                    {{--  --}}
                    <div class="col-4">
                        <div class="cardCustom">
                            <img src="https://assets-global.website-files.com/5b5729421aca332c60585f78/63f5fa23da820b87c87958be_61ba503872080311dde1ea56_long-form-landing-page-examples.png" alt="" class="">
                            <h4 class="pt-3">Landing page #1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim vitae officia et?</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cardCustom">
                            <img src="{{asset('Screenshot (1).png')}}" alt="" class="">
                            <h4 class="pt-3"><a href="https://webtestportofolio.000webhostapp.com/pixelab/">Pixel LandingPage</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim vitae officia et?</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cardCustom">
                            <img src="https://assets-global.website-files.com/5b5729421aca332c60585f78/63f5fa23da820b87c87958be_61ba503872080311dde1ea56_long-form-landing-page-examples.png" alt="" class="">
                            <h4 class="pt-3">Landing page #1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim vitae officia et?</p>
                        </div>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-circle-fill arrow-kanan" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                          </svg>
                    </div>
                </div>
            </div>
        <div>
    </div>
</div>
@endsection
