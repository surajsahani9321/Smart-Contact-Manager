<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=Auth::user();
        $data = $user->contacts;
        return view('list', compact('user', 'data'));
        // $data=Contact::latest()->paginate(5);
        // return view('list',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:Contacts',
            'mobile'=>'required',
            'type'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|
            dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
        ]);

        $file_name=time() .'.'. request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'),$file_name);

        $user = Auth::user();

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->mobile=$request->mobile;
        $contact->type=$request->type;
        $contact->image=$file_name;
        $contact->user_id=$user->id;
        $contact->save();

        return redirect()->route('contact.list.get')->with('success','Contact data added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|exists:Contacts',
            'mobile'=>'required',
            'type'=>'required'
        ]);

        $contact_image=$request->hidden_contact_image;

        if($request->image!=''){
            $contact_image=time() .'.'. request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'),$contact_image);
        }

        $contact=Contact::find($request->hidden_id);
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->mobile=$request->mobile;
        $contact->type=$request->type;
        $contact->image=$contact_image;
        $contact->save();


        return redirect()->route('contact.list.get')->with('success','Contact data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.list.get')->with('success','Contact data deleted successfully.');
    }

    public function showUploadForm()
    {
        return view('csv.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt,xlsx',
        ]);

        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));

        // Remove header row
        $header = array_shift($data);

        foreach ($data as $row) {
            $record = array_combine($header, $row);
            DB::table('Contacts')->insert($record);
        }

        return redirect()->back()->with('success', 'CSV data has been uploaded successfully.');
    }
}
