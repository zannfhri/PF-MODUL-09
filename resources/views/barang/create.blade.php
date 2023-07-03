<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container-sm mt-5">
            <form action="{{ route('barangs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">

                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4>Create Employee</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kodeBarang" class="form-label">Firstname</label>
                                <input class="form-control @error('kodeBarang') is-invalid @enderror" type="text"
                                    name="kodeBarang" id="kodeBarang" value="{{ old('kodeBarang') }}"
                                    placeholder="Enter Firstname">
                                @error('kodeBarang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="namaBarang" class="form-label">Lastname</label>
                                <input class="form-control @error('namaBarang') is-invalid @enderror" type="text"
                                    name="namaBarang" id="namaBarang" value="{{ old('namaBarang') }}"
                                    placeholder="Enter Lastname">
                                @error('namaBarang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="hargaBarang" class="form-label">Email Address</label>
                                <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text"
                                    name="hargaBarang" id="hargaBarang" value="{{ old('hargaBarang') }}"
                                    placeholder="Enter Email Address">
                                @error('hargaBarang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="deskripsiBarang" class="form-label">Age</label>
                                <input class="form-control @error('deskripsiBarang') is-invalid @enderror" type="text"
                                    name="deskripsiBarang" id="deskripsiBarang" value="{{ old('deskripsiBarang') }}"
                                    placeholder="Enter Age">
                                @error('deskripsiBarang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="form-label">Position</label>
                                <select name="satuan" id="satuan" class="form-select">
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                            {{ $satuan->name . ' - ' . $satuan->code }}</option>
                                    @endforeach
                                </select>
                                @error('position')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="cv" class="form-label">Curriculum Vitae (CV)</label>
                                <input type="file" class="form-control" name="cv" id="cv">
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
