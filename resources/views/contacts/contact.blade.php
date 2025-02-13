@extends('layouts.app')
@section('pageTitle', 'Contact | Single View')
@section('content')
@parent
<div class="col-sm">
    <div style="">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <h3>{{ $item->first_name }} {{ $item->last_name }}</h3>
                        <h4>{{ $item->email }} {{ $item->phone_number }}</h4>
                        <h4>{{ $item->birthday }}</h4>
                    </div>
                    <a class="btn btn-secondary" href="{{ route('contacts.edit', ['contact' => $item->id]) }}" role="button">edit</a>
                    <hr>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection