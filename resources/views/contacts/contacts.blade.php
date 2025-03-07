@extends('layouts.app')
@section('pageTitle', 'Contact | List View')
@section('content')
@parent
<div class="col-sm">
    <div style="">
        <div class="row">
            <div class="col-6">
                <h1>Contacts</h1>
                @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <hr>
                @foreach ($dbContent as $item)
                <div class="row">
                    <div class="col">
                        <h3>{{ $item->first_name }} {{ $item->last_name }}</h3>
                        <h4>{{ $item->email }} {{ $item->phone_number }}</h4>
                        <h4>{{ $item->birthday }}</h4>
                        <p>
                            <a class="btn btn-secondary" href="{{ route('contacts.show', ['contact' => $item->id]) }}" role="button">show</a>
                            <a class="btn btn-secondary" href="{{ route('contacts.edit', ['contact' => $item->id]) }}" role="button">edit</a>
                        </p>
                    </div>
                    <hr>
                </div>
                @endforeach
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection