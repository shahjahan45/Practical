@extends('layouts.layout');

@section('content')

<div class="row mt-4 justify-content-center">
    <div class="col-sm-4">
        <h2 class="justify-content-center mb-4">Login page</h2>
        <div class="card">
            <form action="{{route('login.submit')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-2">
                        <label for="" class="form-label">User name</label>
                        <input name="username" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input name="useremail" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Password</label>
                        <input name="userpassword" type="password" class="form-control">
                    </div>
                    <div class="mb-2 mt-4">
                        <button type="submit" class="btn btn-primary ">sign Up</button>
                    </div>

                </div>
            </form>
        </div> 

    </div>
    
 </div>

@endsection