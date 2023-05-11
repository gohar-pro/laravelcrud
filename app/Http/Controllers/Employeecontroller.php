<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class Employeecontroller extends Controller
{
    public function index()
    {
        

       return view('products.index',['products'=>Employee::get()]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
       // 
       $request->validate([
'email'=>'required',
'pass'=>'required',
'image'=>'required | mimes:jpeg,png,jpg,gif',


       ]);
     $imageName = time().'.'.$request->image->extension();
     $request->image->move(public_path('products'),$imageName);
     $product = new Employee;
     $product->image = $imageName;
     $product->email = $request->email;
     $product->pass = $request->pass;
     $product->save();
     return back()->withSuccess('INSERTED');
     
    
    }
    public function edit($id)
    {
$product = Employee::where('id',$id)->first();
        return view('products.edit',['products'=>$product]);

    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'email'=>'required',
            'pass'=>'required',
            'image'=>'nullable | mimes:jpeg,png,jpg,gif',
            
            
                   ]);
                   $product = Employee::where('id',$id)->first();
            if(isset($request->image))
                   {
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('products'),$imageName);
                    $product->image = $imageName;
                }
                
               
                
                 
                 $product->email = $request->email;
                 $product->pass = $request->pass;
                 $product->save();
                 return back()->withSuccess('UPDATED');
    }
    public function destroy($id){

       $product = Employee::where('id',$id)->first();

      $product->delete();
      return back()->withSuccess('UPDATED');
    }
}
