@extends('layouts.app')

@section('content')
    <div class="container-fluid"
        style="background-repeat: no-repeat; background-position: top; background-size: cover; background-attachment: scroll; background: linear-gradient( rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.5)), url('{{ $movie->image }}') no-repeat top center / cover; height: 400px;">
        <div class="row p-5">
            <div class="col-5">
                <img class="img-thumbnail d-block mx-auto text-center h-50" src="{{ $movie->image }}" alt="Movie">
            </div>
            <div class="col-7">
                <h1 class="text-black">{{ $movie->title }}</h1>
                <h4 class="text-warning">{{ number_format($movie->ratings_avg_rating, 2) }} &#9733;</h4>
                <div class="card bg-white bg-opacity-50">
                    <div class="card-body d-flex">
                        <table class="table borderless">
                            <tr>
                                <td style="width: 150px;">Tanggal Tayang</td>
                                <th>{{ $movie->show_date }}</th>
                            </tr>
                            <tr>
                                <td style="width: 150px;">Durasi</td>
                                <th>{{ $movie->duration }}</th>
                            </tr>
                            <tr>
                                <td style="width: 150px;">Episode</td>
                                <th>{{ $movie->episode }}</th>
                            </tr>
                            <tr>
                                <td style="width: 150px;">Sutradara</td>
                                <th>{{ $movie->director }}</th>
                            </tr>
                            <tr>
                                <td style="width: 150px;">Artis</td>
                                <th>{{ $movie->artist }}</th>
                            </tr>
                            <tr>
                                <td style="width: 150px;">Status</td>
                                <th>Completed</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white pt-5">
        <div class="row text-center p-5 justify-content-center">
            <div class="col-10">
                <p class="text-black p-5"> {{ $movie->description }}</p>
                @auth
                    @if ($rating)
                        <span class="bg-warning p-2 rounded">Anda sudah memberi rating : {{ $rating->rating }} &#9733;</span>
                    @else
                        <button type="button" data-toggle="modal" data-target="#ratingModal"
                            class="btn btn-warning text-black">Beri Rating &#9733;</button>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning text-black">Beri Rating &#9733;</a>
                @endauth

                <span class="text-danger d-block mt-2">Hati-hati sebelum memberi rating!</span>
                <span class="text-danger d-block">Anda hanya dapat memberi rating satu kali setiap judul film.</span>
            </div>
        </div>
    </div>
    <div class="modal fade " id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rating film {{ $movie->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('movie.rating.store', $movie) }}" method="POST" id="ratingForm">
                        @csrf
                        <div class="star-rating__stars mx-auto">
                            <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
                            <label class="star-rating__label" for="rating-1" aria-label="One"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
                            <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
                            <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
                            <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
                            <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="6" id="rating-6" />
                            <label class="star-rating__label" for="rating-6" aria-label="Six"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="7"
                                id="rating-7" />
                            <label class="star-rating__label" for="rating-7" aria-label="Seven"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="8"
                                id="rating-8" />
                            <label class="star-rating__label" for="rating-8" aria-label="Eight"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="9"
                                id="rating-9" />
                            <label class="star-rating__label" for="rating-9" aria-label="Four"></label>
                            <input class="star-rating__input" type="radio" name="rating" value="10"
                                id="rating-10" />
                            <label class="star-rating__label" for="rating-10" aria-label="Five"></label>
                            <div class="star-rating__focus"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger" form="ratingForm">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let show = @json(request()->query('rating'));

            if (show == 1) {
                $("#ratingModal").modal('show');
            }
        });
    </script>
@endsection
