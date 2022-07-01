<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class taskController extends Controller
{
   public function create(){
         return view('Task.create');
     }

     ###############################

     public function store(Request $request){

        $data =    $this->validate($request, [
            'title'     => 'required|min:3',
            'content'    => 'required|min:20',
            'image'    => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'start-date' => 'required|date',
            'end-date' => 'required|date'


        ]);
        $imageName= time() .uniqid().'.'.$request->image->extension();
          $request->image->move(public_path('images/tasks'), $imageName);

        $data['image'] = $imageName;

        $data['start-date'] = strtotime($data['start-date']);
       $data['end-date'] = strtotime($data['end-date']);


     $op = tasks ::create($data);
       //  dd($op);
         if($op){
            $message ="task created success";
            session()->flash('message-success' ,$message);
         }else {
            $message = "task not create ";
             session()->flash('message-error' ,$message);
         }


         return redirect(url('Task/Create'));

     }
     ###########################

         public function index(){
        $tasks = tasks :: get();
        return view('Task.index' , ['data' => $tasks]);
     }

      public function edit($id)
    {

        $tasks  = tasks ::find($id);

        return view('Task.edit', ['data' => $tasks]);
    }
############

  public function update(Request $request, $id)
    {

        $data =  $this->validate($request, [
              'title'     => 'required|min:3',
            'content'    => 'required|min:20',
            'image'    => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'start-date' => 'required|date',
            'end-date' => 'required|date'
        ]);

        if ($request->has('changeTitle')) {

        } else {
            unset($data['title']);
        }
        $op = tasks::where('id', $id)->update($data);

        if ($op) {
            $message = "tasks Updated Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "tasks Not Updated";
            session()->flash('Message-error', $message);
        }

        return redirect(url('Task'));
    }

     public function remove(Request $request){

      $op =  tasks :: where('id' ,$id)->delete();
      $op =   tasks ::where('id', $request->id)->delete();

      if($op){
            $message ="tasks removed success";
            session()->flash('message-success' ,$message);
         }else {
            $message = "tasks not removed ";
             session()->flash('message-error' ,$message);
         }

         return redirect(url('Task/create'));

     }


}

