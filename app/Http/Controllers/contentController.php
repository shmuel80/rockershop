<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Content;
use Session;

class ContentController extends MainController
{
    /**
     * Display Contents.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['contents'] = Content::all()->toArray();
        self::$data['title'].= 'Cms Contents';
        return view('cms.showContent', self::$data);
    }

    /**
     * Show the form for creating a new content.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'].= 'Add Content';
        return view('cms.addContent', self::$data);
    }

    /**
     * Store a newly created content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddContentRequest $request)
    {
        if(Content::addContent($request)){
            Session::flash('ms', "new content added successfully!");
            return redirect("cms/contents");
        }else{
            return redirect('cms.contents')->withErrors('Something went wrong');
        }
    }

    /**
     * Display the specified content.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Delete
        self::$data['title'] .= 'Content Delete';
        self::$data['post_id'] = $id;
        self::$data['Content_data'] = Content::find($id)->toArray();
        return view('cms/deleteContent', self::$data);
    }

    /**
     * Show the form for editing the specified content.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['content_data'] = Content::find($id)->toArray();
        self::$data['title'] .= 'Content update';
        return view('cms/updateContent', self::$data);
    }

    /**
     * Update the specified content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContentRequest $request, $id)
    {
        if(Content::updateContent($request, $id)){
            Session::flash('ms', "Content updated!");
            return redirect("cms/contents");
        }else{
            return redirect('cms.contents')->withErrors('Something went wrong');
        }
        
    }

    /**
     * Remove the specified content from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('ms', 'Content deleted');
        return redirect('cms/contents'); 
    }
}