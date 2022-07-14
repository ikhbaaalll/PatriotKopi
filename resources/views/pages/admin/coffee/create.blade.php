@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Coffeeshop
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mx-3 mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('admin.coffees.store') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="bekasi_section">Bagian Bekasi</label>
                    <select name="bekasi_section" id="bekasi_section" class="form-control" required>
                        <option value="" selected disabled>Pilih bagian bekasi</option>
                        <option value="Bekasi Utara" {{ old('bekasi_section') == 'Bekasi Utara' ? 'selected' : '' }}>
                            Bekasi
                            Utara</option>
                        <option value="Bekasi Timur" {{ old('bekasi_section') == 'Bekasi Timur' ? 'selected' : '' }}>
                            Bekasi
                            Timur</option>
                        <option value="Bekasi Barat" {{ old('bekasi_section') == 'Bekasi Barat' ? 'selected' : '' }}>
                            Bekasi
                            Barat</option>
                        <option value="Bekasi Selatan" {{ old('bekasi_section') == 'Bekasi Selatan' ? 'selected' : '' }}>
                            Bekasi Selatan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="concept">Konsep</label>
                    <select name="concept" id="concept" class="form-control" required>
                        <option value="" selected disabled>Pilih konsep</option>
                        <option value="Full Outdoor" {{ old('concept') == 'Full Outdoor' ? 'selected' : '' }}>
                            Full Outdoor</option>
                        <option value="Full Indoor" {{ old('concept') == 'Full Indoor' ? 'selected' : '' }}>
                            Full Indoor</option>
                        <option value="Indoor Outdoor" {{ old('concept') == 'Indoor Outdoor' ? 'selected' : '' }}>
                            Indoor Outdoor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name"
                        class="form-control @error('name') is-invalid @enderror" required autofocus
                        placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Harga</label>
                    <input type="number" name="price" value="{{ old('price') }}" id="price"
                        class="form-control @error('price') is-invalid @enderror" required placeholder="Masukkan Harga">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label class="form-label" for="start">Jam Buka</label>
                            <input type="time" name="start" value="{{ old('start') }}" id="start"
                                class="form-control @error('start') is-invalid @enderror" required
                                placeholder="Masukkan Jam Buka">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="form-label" for="end">Jam Tutup</label>
                            <input type="time" name="end" value="{{ old('end') }}" id="end"
                                class="form-control @error('end') is-invalid @enderror" required
                                placeholder="Masukkan Jam Tutup">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="place">Link Maps</label>
                    <input type="text" name="place" value="{{ old('place') }}" id="place"
                        class="form-control @error('place') is-invalid @enderror" required placeholder="Masukkan Link Maps">
                </div>
                <div class="form-group">
                    <label class="form-label" for="image">Link Gambar</label>
                    <input type="text" name="image" value="{{ old('image') }}" id="image"
                        class="form-control @error('image') is-invalid @enderror" required
                        placeholder="Masukkan Link Gambar">
                </div>
                <div class="form-group">
                    <label class="form-label" for="instagram">Link Instagram</label>
                    <input type="text" name="instagram" value="{{ old('instagram') }}" id="instagram"
                        class="form-control @error('instagram') is-invalid @enderror" required
                        placeholder="Masukkan Link Instagram">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
