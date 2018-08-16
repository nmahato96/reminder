@extends('layout')
@section('content')

    <div>
        <form action="/create/todo" method="POST" class="enter_todo_form">
        {{csrf_field()}}
        <input type="text" name="todo" placeholder="Enter Todo" class="todo" autocomplete="off"><input class="todo_submit" type="submit" value="Add" name="submit">
        </form>
    </div> 

   <ul class="todo_list">
   @foreach($remainder as $r)



<li>
    {{$r->todo}}
</li>
<a href="{{route('todo.update',['id'=>$r->id])}}" class="edit"><i class="far fa-edit"></i></a>
<a href="{{route('todo.delete',['id'=>$r->id])}}" class="delete"><i class="far fa-trash-alt"></i></a>
   
    @if(!$r->completed)
        <a href="{{route('todo.completed',['id'=>$r->id])}}" style="color:#d8d8d8;font-size: 88%;"><i class="far fa-check-circle"></i></a>
    @else
        <a href="{{route('todo.notcompleted',['id'=>$r->id])}}" style="color:#1af08f;font-size: 88%;"><i class="far fa-check-circle"></i></a>
    @endif

@endforeach
   </ul>
@stop
