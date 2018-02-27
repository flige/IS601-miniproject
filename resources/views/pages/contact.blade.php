@extends('layouts.default')

@section('content')
    <div class="card mt-3">

        <div class="container">
            <h1>Contact Information</h1>
            <p class="lead">Thanks for contacting me.</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="Email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection