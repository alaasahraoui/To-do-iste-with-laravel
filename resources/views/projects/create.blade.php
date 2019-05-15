@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
 <h1>create a new project here </h1>

  <form class="" action="/project" method="post">
    @csrf
 <div class="md-form form-group w-50">
           <input class="form-control"  type="text" placeholder="title" name="title" value="">
                        </div>



           <div class="md-form form-group  ">
              <textarea class="form-control"  name="description" placeholder="description" rows="8" cols="80"></textarea>
            </div>
            <div class="text-center">
<button type="submit"  class="btn btn-md btn-primary text-center"   name="button">create</button>
            </div>



</form>

</div>
</div>
</div>
</div>
</div>

 @endsection('content')
