@extends('layouts.app')
@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                   <div class="text-center">


 <h1>{{$project->description}}'s Project Tasks       </h1>

 <ul >

<a href="/project"> <i style="float:right; margin-bottom:10px; margin-right:10px;" class="fas fa-arrow-alt-circle-left  fa-4x	"></i></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>

      <th scope="col">edit</th>

    </tr>
  </thead>
  <tbody>
  @foreach($project->tasks as $task)
    <tr>

      <th scope="row">{{  $task->id }}</th>




      <td><form class="" action="/tasks/{{$task->id}}" method="POST">
      {{method_field('PATCH')}}
      @csrf

      <label for="completed" class="checkbox   {{ $task->completed ? 'completed' : ''  }}    ">


      {{  $task->description }}
      </label>
      </form></td>

<td>   <form class="" action="/tasks/{{$task->id}}" method="POST">
{{method_field('PATCH')}}
@csrf

<label for="completed" class="checkbox   {{ $task->completed ? 'completed' : ''  }}    ">   <input class="checkbox"   name="completed"   onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''  }}     type="checkbox"       >  </label></form>      </td>




    </tr>

 @endforeach
  </tbody>
</table>
 <form class="" action="/project/{{$project->id}}/tasks" method="post">

   @csrf



                       <div class="input-group">
  <input type="text" class="form-control" name="description"  placeholder="add new tasks here">
  <div class="input-group-append">

      <button    type="submit" name="button"> <i class="far fa-plus-square"></i></button>
  </div>
</div> </form>


</div>
   </ul>
 </div>
   </div>
     </div>
       </div>
        </div>




 @endsection('content')
