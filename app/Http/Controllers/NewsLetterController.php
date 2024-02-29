<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\Category;

class NewsLetterController extends Controller
{
    // Display a listing of the newsletters.
    public function index()
    {
        $categories = Category::all();
        $newsletters = NewsLetter::with('categories')->paginate(2);
        return view('admin.newsletter', compact('newsletters', 'categories'));
    }
    public function addnewsletter()
    {
        $categories = Category::all();
        return view('admin.Addnewsletter', compact('categories'));
    }

    public function insernewsletter(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'message' => 'nullable|string',
            'category' => 'required|exists:categories,id'
        ]);

        $newsletter = new NewsLetter();
        $newsletter->name = $request->name;
        $newsletter->message = $request->message;
        $newsletter->save();
        // $lastInsertId = $newsletter->id;
        foreach ($request->category as $category) {
            $newsletter->categories()->attach($category);
        }
        // $newsletter->categories()->attach($request->category);

        return redirect('/newsletter');
    }
    public function deleteNewsletter($id)
{
    $newsletter = NewsLetter::find($id)->delete();
    return redirect('/newsletter');
}

public function newsview($id)
{
    $data = NewsLetter::find($id);
    $categories = Category::all();
    return view('admin.updateletter', compact('data', 'categories'));
}

public function searchNewsletter($value)
{
    
    if ($value == "all") {
        $newsletters = NewsLetter::with('categories')->paginate(2);
    } else {
        $search = "%$value%";
        $newsletters = NewsLetter::where('name', 'like', $search)->with('categories')->paginate(2);
    }
    return view('admin.searchLetter', compact('newsletters'));
}
public function FilterNewsletter($idCat){
    if($idCat == "all") {
        $newsletters = NewsLetter::with('categories')->paginate(2);
    } else {
        $newsletters = NewsLetter::whereHas('categories', function ($query) use ($idCat) {
            $query->where('categories.id', $idCat);
        })->with('categories')->paginate(2);
    }
    return view('admin.searchLetter', compact('newsletters'));
}


}


