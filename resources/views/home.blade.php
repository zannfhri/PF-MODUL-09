<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')

    {{-- @section('content') --}}

        {{-- <section>

            <!-- .container start -->
            <div class="container py-5">

                <!-- .row start -->
                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-4">

                        <div class="card text-center p-5">

                            <div class="card-body">

                                <img src="{{ Vite::asset('resources/images/PHOTO.jpeg') }}" alt="Profil Picture"
                                    class="img img-thumbnail square-circle w-75">

                                <h2>Fauzan</h2>

                                <p class="card-text text-muted">
                                    Sistem Informasi - 2021
                                </p>

                                <button class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-pencil me-1"></i> Ubah Profil
                                </button>

                            </div>

                        </div>

                    </div>
                    <!-- .col end -->
                    <!-- .col start -->
                    <div class="col-lg-8">

                        <div class="shadow border rounded p-5 mb-5">
                            <h2 style="pos">PERSONAL DETAILS</h2>

                            <hr>

                            <!-- .row start -->
                            <div class="row">

                                <!-- .col start -->
                                <div class="col-lg-6">

                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Name :</span>
                                        <i class="bi-solid bi-person-fill me-2 text-secondary"></i>Muhammad Fauzan Fakhri
                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">NIM :</span>
                                        <i class="bi-solid bi-person-badge-fill me-2 text-secondary"></i>1204210151
                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Email :</span>
                                        <i class="bi-solid bi-envelope-fill me-2 text-secondary"></i>ffakhri254@gmail.com
                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Domicile :</span>
                                        <i class="bi-solid bi-geo-alt-fill me-2 text-secondary"></i>Surabaya
                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Place and DOB :</span>
                                        <i class="bi-solid bi-geo-alt-fill me-2 text-secondary"></i>Bandung, April 11th,
                                        2003
                                    <p class="card-text">
                                    @endsection --}}
                                    @vite('resources/js/app.js')
</body>

</html>
