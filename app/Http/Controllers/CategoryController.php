<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    public function index()
    {
    $categories= 'category' ::get();
    return view('category.index', compact('categories'));
}
public function create()
{
    return view ('layout.create');
}
public function store(Request $request)
{
    $request->validate([
       'name' => 'Required[max:255] string',
       'description' => 'Required[ max:255] string',
       'image'=>'nullable|mimes:png,jpeg,jpg',
        'is_active' => 'sometime'
    ]);

    if($request->has('image')){
        $file=$request->file('image');
        $extension =$file->getClientOriginalExtension().'.'.'$extension';
        $path ='uploads/category/';
        $file->move('$path' , '$filename');

        
    }
    category::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'image'=> '$path.$filename',
        'is_active'=>$request->is_active ==true ? 1:0,

    ]);
    return redirect('categories/create')->with('status','category created');
}
public function edit(int $id)
{
    $category=category::findOrFail($id);
    return view('category.edit',compact('category'));

}
}
