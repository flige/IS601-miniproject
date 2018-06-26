@extends('layouts.default')

@section('content')
    <div class="card" style="width:40rem; left: 35%;">

        <div class="container">
            <h1>Contact Message</h1>
           </div>

        <div class="card-body">
            <form role="form" id="contact-form" class="contact-form" method="post" action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input name="name" type="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="message" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection