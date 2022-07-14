@extends('layouts.user')

@section('content')
    <div class="row justify-content-center d-flex bg-white">
        <div class="col-2">
            @for ($i = 0; $i < 4; $i++)
                <img class="mx-auto d-block mt-2"src="{{ asset('assets/image/symbol.png') }}" alt="" height="180">
            @endfor
        </div>
        <div class="card mx-auto mt-4 col-8">
            <div class="card-header">Coffee Shop Recommendation</div>
            <div class="card-body">
                <div class="col-6 mx-auto">
                    <form action="{{ route('user.coffeeshop.recommend.store') }}" method="GET">
                        @csrf
                        <div class="form-group row input-group input-group-lg">
                            <label for="bekasi_section" class="col-4 col-form-label">Bagian Bekasi</label>
                            <div class="col-md-8">
                                <select name="bekasi_section" id="bekasi_section" class="form-control select2-container"
                                    required>
                                    <option value="" disabled selected>Pilih Bagian Bekasi</option>
                                    @foreach ($bekasiSections as $section)
                                        <option value="{{ $section->bekasi_section }}">{{ $section->bekasi_section }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row input-group input-group-lg">
                            <label for="price" class="col-4 col-form-label">Range Harga</label>
                            <div class="col-md-8">
                                <select name="price" id="price" class="form-control select2-container" required>
                                    <option value="" disabled selected>Pilih Range Harga</option>
                                    <option value="15000">Mulai 15000</option>
                                    <option value="25000">Mulai 25000</option>
                                    <option value="30000">Mulai 30000</option>
                                    <option value="50000">Lebih dari 50000</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row input-group input-group-lg">
                            <label for="start" class="col-4 col-form-label">Waktu Buka</label>
                            <div class="col-md-8">
                                <select name="start" id="start" class="form-control select2-container" required>
                                    <option value="" disabled selected>Pilih Waktu Buka</option>
                                    <option value="06:00">Pagi (06:00 - 10:00)</option>
                                    <option value="10:00">Siang (10:00 - 14:00)</option>
                                    <option value="14:00">Sore (14:00 - 18:00)</option>
                                    <option value="18:00">Malam (diatas 18:00)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row input-group input-group-lg">
                            <label for="end" class="col-4 col-form-label">Waktu Tutup</label>
                            <div class="col-md-8">
                                <select name="end" id="end" class="form-control select2-container" required>
                                    <option value="" disabled selected>Pilih Waktu Tutup</option>
                                    <option value="1">Dibawah Jam 17.00</option>
                                    <option value="2">Diatas Jam 17.00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row input-group input-group-lg">
                            <label for="concept" class="col-4 col-form-label">Konsep</label>
                            <div class="col-md-8">
                                <select name="concept" id="concept" class="form-control select2-container" required>
                                    <option value="" disabled selected>Pilih Konsep</option>
                                    <option value="Full Indoor">Full Indoor</option>
                                    <option value="Full Outdoor">Full Outdoor</option>
                                    <option value="Indoor Outdoor">Indoor Outdoor</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success mx-auto text-center text-dark"
                                style="background-color: #D6CBBD">Temukan
                                Rekomendasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2">
            @for ($i = 0; $i < 4; $i++)
                <img class="mx-auto d-block mt-2"src="{{ asset('assets/image/symbol.png') }}" alt=""
                    height="180">
            @endfor
        </div>
    </div>
@endsection
