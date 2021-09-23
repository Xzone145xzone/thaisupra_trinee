@extends('layouts.app2')    
@section('content')

<div class="container">
    <div class="row" style="height: 1000px;">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fw-light fs-5">
                        Sign In
                    </h1>
             <form action="{{url('authentication')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                        <div class="form-floating mb-3">
                            <label >Email address</label> <br><br>
                            <input type="email" class="form-control"  id="email" name="email" placeholder="email">
                        </div>
                        <div class="form-floating mb-3">
                            <label >Password</label>
                            <br><br>
                            <input type="password"  class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit" style="height: 50px;font-size: 14pt;">Login</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection