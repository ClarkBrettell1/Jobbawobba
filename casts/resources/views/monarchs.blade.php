@extends('layout')

@section('intro')

@endsection

@section('content')

    @foreach($monarchs as $monarch)
    <div class="card mx-auto p-2 " style="max-width: 1040px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/images/monarch/{{ $monarch->id }}/card.png"  class="card-img" alt="{{ $monarch->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $monarch->name }}</h3>
                    <p class="card-text">{{ $monarch->intro }}. Search the links below to find credible resources about {{ $monarch->name }} </p>
                    <a href="monarchs/{{ $monarch->id }}" class="btn-lg btn-info">Resources</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <style>
        .content-container{
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            padding: 15px;
        }

        .content-container h1 {
            font-size: 2.5rem;
            line-height: 2.6rem;
            margin: 5px;
            padding: 0;
        }
    </style>
@endsection
