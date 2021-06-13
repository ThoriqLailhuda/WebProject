@extends('layouts.app')

@section('content')
<div class="antialiased">
    <div class="d-sm-block d-lg-flex align-items-center justify-content-center">
        <div class="p-5">
            <div class="text-center">
                <div class="mt-2 text-dark text-sm h1">
                    Selamat datang di Klinik Amanda <br> Jakarta Selatan
                </div>
                <div class="mt-2 text-secondary text-sm">
                    Di website ini, pasien dapat melakukan reservasi pemeriksaan secara online.
                </div>
            </div>
        </div>

        <div class="p-5">
            <img src="{{ URL::to('/assets/hospital.jpg') }}" class="shadow img-fluid mx-auto" alt="Gambar Klinik" id="hospital">
        </div>
    </div>
</div>
@endsection