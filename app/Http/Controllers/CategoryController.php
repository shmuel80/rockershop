<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Categorie;
use Session;

class CategoryController extends MainController
{
    /**
     * Display Categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['category'] = Categorie::all()->toArray();
        self::$data['title'].= 'CMS Category';
        return view('cms.showCategory', self::$data);
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'].= 'Add category';
        return view('cms.addCategory', self::$data);
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        if(Categorie::addCategory($request)){
            Session::flash('ms', "new category added successfully!");
            return redirect("cms/category");
        }else{
            return redirect('cms/category')->withErrors('Something went wrong');
        }
    }

    /**
     * Display the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Delete
        self::$data['title'] .= 'Category delete';
        self::$data['post_id'] = $id;
        self::$data['category_data'] = Categorie::find($id)->toArray();
        return view('cms/deleteCategory', self::$data);
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['category_data'] = Categorie::find($id)->toArray();
        self::$data['title'] .= 'Category update';
        return view('cms/updateCategory', self::$data);
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        if(Categorie::updateCategory($request, $id)){
            Session::flash('ms', "Category updated!");
            return redirect("cms/category");
        }else{
            return redirect("cms/category")->withErrors('Something went wrong');
        }
        
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::destroy($id);
        Session::flash('ms', 'Category deleted');
        return redirect('cms/category'); 
    }
}