@extends('layouts.user')

@section('content')
    <div class="row justify-content-center d-flex bg-white">
        <div class="col-2">
            @for ($i = 0; $i < 4; $i++)
                <img class="mx-auto d-block mt-2"src="{{ asset('assets/image/symbol.png') }}" alt="" height="180">
            @endfor
        </div>
        <div class="card p-5 card-shadow col-8">
            <div class="card-header">Coffee Shop</div>
            <div class="card-body">
                <div class="dropdown show mb-3">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bagian Bekasi
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item"
                            href="{{ route('user.coffeeshop.index', ['bekasi' => 'Bekasi Barat']) }}">Bekasi
                            Barat</a>
                        <a class="dropdown-item"
                            href="{{ route('user.coffeeshop.index', ['bekasi' => 'Bekasi Timur']) }}">Bekasi
                            Timur</a>
                        <a class="dropdown-item"
                            href="{{ route('user.coffeeshop.index', ['bekasi' => 'Bekasi Selatan']) }}">Bekasi
                            Selatan</a>
                        <a class="dropdown-item"
                            href="{{ route('user.coffeeshop.index', ['bekasi' => 'Bekasi Utara']) }}">Bekasi
                            Utara</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-light">
                            <th scope="col">Foto</th>
                            <th scope="col">Bagian</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Konsep</th>
                            <th scope="col">Jam Operasi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Instagram</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coffees as $coffee)
                            <tr class="table-light">
                                <th><img src="{{ $coffee->image }}" alt="Image" class="img-thumbnail"></th>
                                <th scope="row">{{ $coffee->bekasi_section }}</th>
                                <td>{{ $coffee->name }}</td>
                                <td>{{ $coffee->concept }}</td>
                                <td>{{ $coffee->start->format('H:i') }} - {{ $coffee->end->format('H:i') }}</td>
                                <td class="text-center">{{ number_format($coffee->price, 2) }}</td>
                                <td><a href="{{ $coffee->place }}" class="badge badge-secondary">Gmaps</a></td>
                                <td><a href="{{ $coffee->instagram }}" class="badge badge-light"><img
                                            src="{{ asset('assets/image/ig.png') }}" height="35" width="35"
                                            alt=""></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{ $coffees->withQueryString()->links() }}
                </table>
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
