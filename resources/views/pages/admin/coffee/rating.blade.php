@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            List Rating Movie {{ $movie->title }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                        <tr>
                            <th style="width:5px"></th>
                            <th>User</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movie->ratings as $rating)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $rating->user->name ?? '' }}
                                </td>
                                <td>
                                    {{ $rating->rating ?? '' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
