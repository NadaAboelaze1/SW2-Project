@extends('admin.layouts.branch_admin_app')
@section('content')
<!DOCTYPE html>
<html>

<h4>Add Item<h4>

   <body>
     <br><br><br>
<form action="additem" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
   Item :<br>
    <input type="text" name="name">
    <br>
    Price:<br>
    <input type="number" name="price" >
    <br><br>
    <input  type="submit" value="Add">

  </form>





   </body>



   @endsection







</html>
