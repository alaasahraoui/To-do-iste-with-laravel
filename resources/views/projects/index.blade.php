@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                   <div class="text-center">


 <h1>My projects         </h1>

 <ul >

<a href="/project/create"> <i style="float:right; margin-bottom:10px; margin-right:10px;" class="fas fa-plus-circle  fa-3x	"></i></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <td>    </td>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td> <a href="/project/{{$project->id}}/"> <i class="far fa-eye"> </a></i></td>
      <td><a href="/project/{{$project->id}}/edit"><button class="btn btn-sm" type="button" name="button"><i class="far fa-edit"></i></button> </a></td>

      <td> <form  style="Display:inline !important;" class="" action="/project/{{$project->id}}" method="POST">
        {{method_field('DELETE')}}
        @csrf
        <div  style="Display:inline !important;">

      <button type="submit"  class="btn btn-sm"   name="button"><i class="fas fa-minus-square"></i></button>
             </div>
      </form>
    </td>
    </tr>

 @endforeach
  </tbody>
</table>



</div>
   </ul>
 </div>
   </div>
     </div>
       </div>
        </div>


 @endsection('content')
