<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Category;
class CategoryController extends Controller
{
    public function categoryviews()

    {
        $category = Category::all();
        // dd($category);
        return view('admin.category' ,compact('category'));
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }
    public function insert( Request $request)
    {
        $request->validate([
            'name' => 'required'

        ]);
        // dd($request);
        $newCategory = new Category();
        $newCategory->name=$request->name;
        $newCategory->save();
        return redirect('/category');

    }

    public function delete($id)
{
    $category = new Category();
    $category->find($id)->delete();
    return redirect("/category");

}
public function editview($id)
{
   $data = Category::find($id);
        // dd($data);
    return view ('admin.updatecategory',compact('data'));
}

public function updatecategory(Request $request, $id)
{
    $request->validate([
        'name' => 'required',

    ]);

    $category = Category::find($id);

    $category->name = $request->input('name');
    // $category->description = $request->input('description');

    $category->save();

    return redirect("/category");
}

}
