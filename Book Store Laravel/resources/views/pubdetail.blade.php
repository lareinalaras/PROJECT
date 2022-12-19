@extends('index')

@section('content')

<div class="row ">
    @foreach ($detail as $b)

    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 18rem">
            <img src={{asset("./img/".$b->img)}} class="card-img-top" alt="..." />
            <div class="card-body">
                <h4 class="text-start card-title">{{$b->title}}</h4>
                <p class="text-start mb-0">by</p>
                <p class="card-text text-start fs-5">
                    {{$b->author}}
                </p>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
