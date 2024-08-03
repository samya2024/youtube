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
    $category = new category();

    $image = $request->image;
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('categoryimages' , $imagename);
    $category->image = $imagename;

    $category->name = $request->name;
    $category->description = $request->description;
    $category->status = $request->has('is_active')?'active':'inactive';

    $category->save();
    return redirect()->back();
}
public function edit(int $id)
{
    $category=category::findOrFail($id);
    return view('category.edit',compact('category'));

}
}
