@extends('layout')

@section('intro')
    <div class="intro-container mx-auto" style="max-width: 1040px;">
        <h1>{{ $monarch->name }}</h1>
    </div>
    <style>

        .intro-container{
            display: flex;
            margin: 0;
            background: #a8c1a4;
            padding: 15px;
            justify-content: center;
        }

        .intro-container h1 {
            font-size: 2.1rem;
            padding: 0;
            margin: 1px;
            color: black;
        }

    </style>
@endsection

@section('content')
    <div class="card mx-auto p-2 " style="max-width: 1040px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/images/monarch/{{ $monarch->id }}/card.png"  class="card-img" alt="{{ $monarch->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $monarch->name }}</h3>
                    <p class="card-text">{{ $monarch->intro }}. Search the links below to find credible resources about {{ $monarch->name }} </p>
                </div>
            </div>
        </div>
    </div>

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
