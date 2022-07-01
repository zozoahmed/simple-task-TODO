<?php
namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;


class userController extends Controller
{
     public function create(){
         return view('users.create');
     }
#################################################

public function store(Request $request){

        $data =    $this->validate($request, [
            'name'     => 'required|min:3|max:15',
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

  $data['password'] = bcrypt($data['password']);


     $op = users ::create($data);
       //  dd($op);
         if($op){
            $message ="user created success";
            session()->flash('message-success' ,$message);
         }else {
            $message = "user not create ";
             session()->flash('message-error' ,$message);
         }


         return redirect(url('Users/Create'));
        // dd($op);

     }
########################################
     public function index(){
        $users = users :: get();
        return view('users.index' , ['data' => $users]);
     }
#######################################
     public function remove($id){

      $op =  users :: where('id' ,$id)->delete();

      if($op){
            $message ="user removed success";
            session()->flash('message-success' ,$message);
         }else {
            $message = "user not removed ";
             session()->flash('message-error' ,$message);
         }

         return redirect(url('Users/Create'));

     }
############################################

public function edit($id){
    // $users = users ::where('id' ,$id)->get();
    $users = users ::find($id);
    return view('users.edit');

}
#####################

  public function update(Request $request, $id)
    {

        $data =  $this->validate($request, [
            'name'     => "required",
            'email'    => "required|email",
            'password' => 'nullable|min:6',
        ]);

        if ($request->has('changePassword')) {

            $data['password']  = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        $op = users::where('id', $id)->update($data);

        if ($op) {
            $message = "users Updated Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "users Not Updated";
            session()->flash('Message-error', $message);
        }

        return redirect(url('Users'));
    }

}
