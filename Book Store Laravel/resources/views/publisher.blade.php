@extends('index')

@section('content')
    <div class="container-xl">

        <nav class="navbar d-flex justify-content-center" style="background-color: #6D747A">
            <div class="container">
                <span class="fw-normal mb-0 h2 text-white w-100">Publish List</span>
            </div>
        </nav>

        <div class="row ">
            @foreach ($publish as $p)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem">
                        <img src={{ asset('image/' . $p->image) }} class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="text-start card-title">{{ $p->name }}</h4>
                            <div class="text-start">
                                <a href={{ '/pubdetail' . $p->id }} class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
