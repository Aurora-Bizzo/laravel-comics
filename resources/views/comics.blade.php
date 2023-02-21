@extends('layouts\layout')

@section('content')
    <div>
        <div class="jumbotron"></div>
        <div class="comics">
            <div class="container-xl">
                <div class="title">
                    <h2>CURRENT SERIES</h2>
                </div>
                <div class="content">
                    @foreach($comics as $comic)
                        <div class="comic">
                            <div class="thumb">
                                <img srs="{{$comic['thumb']}}">
                            </div>
                            <div class="series text-white">
                                {{$comic['title']}}
                            </div>
                        </div>
                    @endforeach
                    <div class="load-btn">
                        <button><strong>LOAD MORE</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection