<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;
use Validator;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Help::all();
        return view('pages.home.home')->with('cases',$cases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Validator::make($request->all(),
        [
           'name' => 'required' ,
           'Phone'=> 'required' ,
           'address' => 'required',
           'case_image'=> 'required' ,
           'identity_image'=> 'required' ,
           'social_security'=> 'required' ,
           'description'=> 'required'

           ]
        )->validate();
        $request->all();
           if($request->file('case_image')){
               $file= $request->file('case_image');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('public/images'), $filename);
               $input['case_image'] = "$filename";

           }
           if($request->file('identity_image')){
               $file= $request->file('identity_image');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('public/images'), $filename);
               $input['identity_image'] = "$filename";

           }
           Help::create($input);

           return redirect('/')->with('massage' , " create successfully") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        $cases = Help::find($id);
        return view('admin.cases.edit',['item'=>$cases]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        $cases = Help::find($id);
        return view('admin.cases.edit',['item'=>$cases]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        $cases = Help::find($id);
        $cases->name = $request->input('name');
        $cases->Phone = $request->input('Phone');
        $cases->address = $request->input('address');
        $cases->case_image = $request->input('case_image');
        $cases->identity_image = $request->input('identity_image');
        $cases->social_security = $request->input('social_security');
        $cases->description = $request->input('description');
;
        $cases->save();
        return redirect('/users');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help, $id)
    {
        $cases = Help::find($id);
        $cases->delete();
        return redirect('/cases');    }
}
