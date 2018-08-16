<?php

namespace App\Http\Controllers;
use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $retrieve=Todo::all();
        return view('todos')->with('remainder',$retrieve);
    }

    public function store(Request $request){
        $new_todo=new Todo;
       if(($request->todo)!=""){
        $new_todo->todo=$request->todo;
        $new_todo->save();
        Session::flash('success','New Todo Created.');
       }
        return redirect()->back();
    }

    public function delete($id){
       $del=Todo::find($id);
       $del->delete();
       Session::flash('success','Todo Deleted!.');
       return redirect()->back();
    }

    public function update($id){
        $up=Todo::find($id);
        return view('update')->with('curr',$up);
     }

     public function save(Request $request, $id){
        $sv=Todo::find($id);

        if(($request->todo)!=""){
            $sv->todo=$request->todo;
            $sv->save();
            
        Session::flash('success','Todo Updated.');
           }
        return redirect()->route('home');
     }

     public function completed($id){
        $com=Todo::find($id);
        $com->completed='1';
        $com->save();
        Session::flash('success','Todo marked as completed.');
        return redirect()->route('home');
     }
     public function notcompleted($id){
        $ncom=Todo::find($id);
        $ncom->completed='0';
        $ncom->save();
        Session::flash('success','Todo marked as not completed!.');
        return redirect()->route('home');
     }
     
}
