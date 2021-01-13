@extends('base_record')

@section('alt_title')
    PAW DATABASE RECORDS
@endsection

@section('main')
    <div class="flex-center position-ref full-height">
        
        <div class="content">
            <div class="title m-b-md">
                PAW DATABASE RECORD
            </div>

            <div class="links">
                @foreach($links as $key => $value)
                    <a href="{{ $value['href'] }}"> {{ $value['text'] }} </a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
