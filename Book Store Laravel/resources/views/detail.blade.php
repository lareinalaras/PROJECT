@extends('index')

@section('content')
    <div class="container" style="width: 40rem">
        <nav class="navbar d-flex justify-content-center" style="background-color: #6D747A">
            <div class="container-fluid">
                <span class="fw-normal mb-0 h2 text-white">Book Detail</span>
            </div>
        </nav>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 40rem">
                <img src={{ asset('img/' . $book->image) }} class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="text-start mb-2">Title : {{ $book->title }}</p>
                    <p class="text-start mb-2">Author : {{ $book->author }}</p>
                    <p class="text-start mb-2">Publisher : {{ $book->publisherName }}</p>
                    <p class="text-start mb-2">Year : {{ $book->year }}</p>
                    <p class="text-start mb-2">Synopsis : </p>
                    <p class="text-start fs-6">
                        {{ $book->synopsis }}
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection
