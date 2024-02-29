<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mail;

class MailController extends Controller
{
    public function mailviews()

    {
        $mail = Mail::all();
        // dd($category);
        return view('admin.mail' ,compact('mail'));
    }

    public function addmail()
    {
        return view('admin.addmail');
    }
    public function insertmail( Request $request)
    {
        $request->validate([
            'email' => 'required'

        ]);
        // dd($request);
        $newMail = new Mail();
        $newMail->email=$request->email;
       $newMail->save();
        return redirect('/mail');

    }

    public function deleteMail($id)
{
    $Mail = new Mail();
    $Mail->find($id)->delete();
    return redirect('/mail');

}
public function editview($id)
{
   $data = Mail::find($id);
        // dd($data);
    return view ('admin.editemail',compact('data'));
}

public function updatemail(Request $request, $id)
{
    $request->validate([
        'email' => 'required',

    ]);

    $mail = Mail::find($id);

    $mail->email = $request->input('email');

    $mail->save();

    return redirect("/mail");
}
}

