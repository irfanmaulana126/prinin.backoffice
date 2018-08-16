<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PrintCategorie;
use App\Model\PrintSubCategorie;
use Illuminate\Support\Facades\Validator;
class PrintCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexcategory()
    {
        $data = PrintCategorie::orderBy('name','asc')->paginate(5);
        return view('print_category/category/home',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcategory()
    {
        return view('print_category/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecategory(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255|unique:print_categories'
        ]);

        if ($validator->fails()) {
            return redirect('master/category/category/create')->withInput()->withErrors($validator);
        }
        PrintCategorie::create($input);
        return redirect('master/category/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcategory($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcategory($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecategory(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycategory($id)
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexsubcategory()
    {
        $data = PrintSubCategorie::orderBy('name','asc')->paginate(5);
        return view('print_category/sub_category/home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsubcategory()
    {
        $data = PrintCategorie::all();
        return view('print_category/sub_category/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storesubcategory(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/master/category/sub-category/create')->withInput()->withErrors($validator);
        }
        PrintSubCategorie::create($input);
        return redirect('/master/category/sub-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showsubcategory($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editsubcategory($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesubcategory(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroysubcategory($id)
    {
        //
    }
}
