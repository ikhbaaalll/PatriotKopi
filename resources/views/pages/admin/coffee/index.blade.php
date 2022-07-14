@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            List Coffeeshop
        </div>

        <div class="card-body">
            <a href="{{ route('admin.coffees.create') }}" class="btn btn-primary ml-2 my-2">Add Coffeeshop</a>
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                        <tr>
                            <th style="width:5px"></th>
                            <th>Bagian</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jam Buka</th>
                            <th>Konsep</th>
                            <th>Lokasi</th>
                            <th>IG</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coffees as $coffee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $coffee->bekasi_section }}
                                </td>
                                <td>
                                    {{ $coffee->name }}
                                </td>
                                <td class="text-center">
                                    {{ number_format($coffee->price, 2) }}
                                </td>
                                <td>
                                    {{ $coffee->start }} - {{ $coffee->end }}
                                </td>
                                <td>
                                    {{ $coffee->concept }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ $coffee->place }}">Lokasi</a>
                                </td>
                                <td>
                                    <a href="{{ $coffee->instagram }}">Instagram</a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.coffees.edit', $coffee) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.coffees.destroy', $coffee) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                            class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
