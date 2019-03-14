<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddMenuRequest;
use App\Category;
use Session;

class CategoryController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] .= 'cms.category';
        return view('cms.showCategories', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'] .= 'Add Category';
        return view('cms.addCategory', self::$data);
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
        self::$data['title'] = 'category delete';
        self::$data['post_id'] = $id;
        return view('cms/deleteCategory', self::$data);
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
        Categorie::destroy($id);
        Session::flash('ms', "category deleted!!");
        return redirect('cms/category');
    }
}
