@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <p>Name:{{$contacts->name}}</p>
                        <p>Address:{{$contacts->address}}</p>
                        <p>Phone:{{$contacts->phone}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
