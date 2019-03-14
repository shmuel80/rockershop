<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddMenuRequest;
use App\Content;
use Session;

class ContentController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    self::$data['contents'] = Content::all()->toArray();
        self::$data['title'] .= 'cms content';
        return view('cms.showContent', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'] .= 'Add Content';
        return view('cms.addContent', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Content::addContent($request)){
            Session::flash('ms', "New Content Added");
            return redirect("cms/content");
        }else{
            return redirect("cms/content")->withErrors('an error occured');
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['title'] = 'content delete';
        self::$data['post_id'] = $id;
        return view('cms/deleteContent', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     self::$data['contentS'] = $Menu::find($id)->toArray();
     self::$data['title'] = 'update content';
     return view('cms/updatecontent', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Content::updateMenu($request, $id)){
            Session::flash('ms', "Content has been updated");
            return redirect("cms/content");
        }else{
            return redirect("cms/content")->withErrors('an error occured');
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('ms', "content deleted!!");
        return redirect('cms/content ');
    }
}
