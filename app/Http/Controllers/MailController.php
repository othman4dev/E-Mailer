<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mail;

class MailController extends Controller
{
    public function mailviews()

    {
        $mail = Mail::paginate(2);
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
            'email' => 'required|email|unique:mails,email'

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
public function searchMail($value)
{
    if($value == "all"){
        $mail = Mail::paginate(2); 
     } 
     else{
         $serch = "%$value%";
         $mail = Mail::where('email','like',$serch)->paginate(2);
     }
     
     return view('admin.searchMail',compact('mail'));
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
        'email' => 'required|email|unique:mails,email',
    ]);

    $mail = Mail::find($id);

    $mail->email = $request->input('email');

    $mail->save();

    return redirect("/mail");
}
}

