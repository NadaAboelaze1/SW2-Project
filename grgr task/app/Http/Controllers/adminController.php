<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;
use App\users_model;
class adminController extends Controller
{
    public function index()
    {
    	$users = users_model::all();
    	$username = users_model::find('1');

        return view('home',compact('users'));

    }
    public function deleteEmployeeById($id)
    {
        $user=users_model::find($id);
        $user->delete();
        return "done";
    }

public function add_item(Request $request)
{
     if ($request->isMethod('post')) {
       $newItem=new item();
       $newItem->name=$request->input('name');
       $newItem->price=$request->input('price');
      $newItem->save();


}
return view('item.add'); //momkn n return list items lma n3mlha

//return redirect('/admin/panel/')->with('succes', 'Data has been successfully sent!');
}














}
