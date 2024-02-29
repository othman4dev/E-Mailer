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
        $newsletters = NewsLetter::with('categories')->get();
        return view('admin.newsletter', compact('newsletters'));
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

        $newsletter->categories()->attach($request->category);

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






}


