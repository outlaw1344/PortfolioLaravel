@extends('components.template')

@section('main')
@include('components.partikel')
<link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
<div class="isi" id="isi" style="height: 100vh;">
    <div class="row h-100 d-flex align-items-center">
        <div class="col-md-6 text-light d-flex flex-column gap-2" style="z-index: 999">
            <h1 id="isi-h1" style="font-weight: 700;">
                Halo! Saya Galang. <br>
                Seorang <span class="frontend-text" style="background: #F38C16;
                        background: linear-gradient(to right, #F38C16 22%, #F0513B 59%, #EF4444 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        "></span><br>
                <!-- <span  class="frontend-text2"  style="background: #F38C16;
                        background: linear-gradient(to right, #9152d3 22%, #c64fbc 59%, #eb4798 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        ">Web Developer</span> -->
            </h1>
            <p id="isi-p" style="line-height: 150%;">Passionate di bidang Frontend Dev dan UI/UX Design. Suka
                membangun
                antarmuka website yang fast-performace dan well-design menggunakan
                teknologi-teknologi terbaru.</p>
            <div>
                <a class="button-white text-decoration-none text-light" id="button-white" href="{{route('portofolio')}}">Lihat Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </a>
            </div>
        </div>
        <div class="col-md-6 kanan d-flex align-items-center justify-content-center">
            <img class="image1" src="{{asset('Saly-13.svg')}}" alt="wong mabur">
        </div>
@endsection
