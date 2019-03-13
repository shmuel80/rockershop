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
        self::$data['title'] .= 'Add Menu';
        return view('cms.addMenu', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddMenuRequest $request)
    {
        if(Menu::addMenu($request)){
            Session::flash('ms', "New Menu Added");
            return redirect("cms/menu");
        }else{
            return redirect("cms/menu")->withErrors('an error occured');
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['title'] = 'menu delete';
        self::$data['post_id'] = $id;
        return view('cms/deleteMenu', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     self::$data['menu_data'] = $Menu::find($id)->toArray();
     self::$data['title'] = 'update menu';
     return view('cms/updateMenu', self::$data);
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
        if(Menu::updateMenu($request, $id)){
            Session::flash('ms', "Menu has been updated");
            return redirect("cms/menu");
        }else{
            return redirect("cms/menu")->withErrors('an error occured');
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('ms', "menu deleted!!");
        return redirect('cms/menu');
    }
}
