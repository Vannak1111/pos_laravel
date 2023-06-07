<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
class UserController extends Controller
{
  public function index():View
  {
    $user = User::all();

    return view('user.index',compact('user'));
  }
  public function create(){
    return view('user.create');
  }
  public function store(Request $request)
  {
    $input = $request->all();
    User::create($input);
    return redirect('user/create');
  }

  public function destroy($id)
  {
     $user3 = User::find($id);
     $user3->delete();
      return redirect('user');
  }
  public function edit($id)
  {
       $user =User::find($id);
       return view('user.edit',compact('user'));
  }
  public function update(Request $request ,$id)
  {
     $input = $request->all();
     $user = User::find($id);
     $user->update($input);  
    return redirect('user');
  }
}
