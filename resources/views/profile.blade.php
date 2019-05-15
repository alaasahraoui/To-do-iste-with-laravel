@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <img style="width:150px; height:150px;  border-radius: 50px; float:left; margin-right:25px ; "
                    src="/uploads/avatars/{{$user->avatar}}" alt="avatar">
                  <h1> {{$user->name}}'s profile</h1>





                  <form  enctype="multipart/form-data" action="/profile" method="post">


                  <label>update profile image </label>
                  <input type="file" name="avatar">
                  @csrf
                  <input   class="btn btn-md btn-primary"  type="submit" name="submit" value="submit">

                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
