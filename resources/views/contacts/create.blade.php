@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
                <form action="{{route('contact.store')}}" method="POST" class="card">@csrf
                    <div class="card-header">Contacts</div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name"
                            class="form-control">
                        </div>

                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="address"
                             class="form-control">
                        </div>

                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone"
                             class="form-control">
                        </div>

                        <div class="form-group">
                            <a href="{{route('contact.index')}}">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
