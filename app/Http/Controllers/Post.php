<?php

namespace App\Http\Controllers;
use App\ModelPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Post extends Controller
{
    public function user()
    {   if(!Session::get('login')){
        return redirect('login')->with('alert','Kamu harus login dulu');
    }else{
        $id_user = Session::get('id');
        $data = ModelPost::where('id_user',$id_user)->get();
        return view('pages.dashboard',compact('data'));
    }
    }
    public function view()
    {
        $data=ModelPost::all();
        return view('pages.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function write()
    {
        //
        return view('pages.write');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new ModelPost;
        $post->judul = $request->get('judul');
        $post->isi = $request->get('isi');
        $post->id_user = $request->get('id');
        $post->thumbnail = $request->get('thumbnail');
        $post->save();
        
        return redirect('/dashboard')->with('success', 'Berhasil Posting');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=ModelPost::find($id);
        return view('dashboard',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data=ModelPost::find($id);
        return view('pages.edit',compact('data'));
       }
       public function delete($id){
        $data=ModelPost::find($id);
           $data->delete();
           return redirect ('/dashboard')->with('alert-success','Data berhasil Dihapus');
       }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){     
        $data = ModelPost::findOrFail($id);
           $data->judul=$request->get('judul');
           $data->isi=$request->get('isi');
           $data->thumbnail=$request->get('thumbnail');
           $data->save();
        return redirect ('/dashboard')->with('alert-success','Data berhasil Diubah.');
       }
       public function read($id){
        $data=ModelPost::find($id);
        return view('pages.read',compact('data'));
       }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
