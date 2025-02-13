@extends('layouts.app')
@section('pageTitle', 'Contact | Edit')
@section('content')
@parent
<div class="col-sm">
    <div style="">
        <div class="row">
            <div class="col-6">
                @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <h1>Contacts</h1>
                <hr>
                <form method="POST" action="{{ route('contacts.update', ['contact' => $item->id]) }}" >
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <label for="first_name" class="form-label">Firstname:</label><br>
                                <input type="text" id="first_name" name="first_name" value="{{ $item['first_name'] }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <label for="last_name" class="form-label">LastName:</label><br>
                                <input type="text" id="last_name" name="last_name" value="{{ $item['last_name'] }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <label for="phone_number" class="form-label">Phone Number:</label><br>
                                <input type="text" id="phone_number" name="phone_number" value="{{ $item['phone_number'] }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <label for="email" class="form-label">Email:</label><br>
                                <input type="text" id="email" name="email" value="{{ $item->email }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <label for="birthday" class="form-label">Birthday:</label><br>
                                <input type="text" id="birthday" name="birthday" value="{{ $item->birthday }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-outline-secondary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection