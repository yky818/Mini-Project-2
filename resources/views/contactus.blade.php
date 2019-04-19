@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact us</div>

                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <form method="post" action="{{ route('contactusSave') }}">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" name="name" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Message</label>
                            <textarea name="message"  class="form-control" required ></textarea>
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
