@extends('master')
@section('content')
        <div class="container custom-login" >
            <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
            <form>
                <div class="form-group">
                <label for="exampleinputemail">Email address</label>
                <input type="email" class="form-control" id="exampleinputemail" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleinputpassword">Password</label>
                <input type="password" class="form-control" id="exampleinputpassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
            </div>
        </div>
@endsection
