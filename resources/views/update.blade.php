@extends('layout')
@section('content')

    <div>
        <form action="{{route('todos.save',['id'=>$curr->id])}}" method="POST">
            {{csrf_field()}}
            <input type="text" name="todo" class="todo" value="{{$curr->todo}}" autocomplete="off">
            <input type="submit" class="todo_submit" value="Update" name="update">
        </form>
    </div> 
@stop
