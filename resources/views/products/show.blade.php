@extends('layouts.app')

@section('content')
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        {{-- Product name --}}
        <h1 class="display-4 fw-bold">{{$product->name}}</h1>

        <div class="overflow-hidden">
            <div class="container px-5">
                {{-- Product image --}}
                <img src="{{$product->image}}" class="img-fluid border rounded-3 shadow-lg mb-4"
                     alt="Не удалось загрузить изображение." loading="lazy" width="700" height="500">
            </div>
        </div>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
            {{-- Product description --}}
            <p>{{$product->description}}</p>
            {{-- Button back --}}
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="btn btn-outline-secondary btn-lg px-4" href="javascript:history.back()">Назад</a>
            </div>
        </div>
    </div>
@endsection
