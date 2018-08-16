<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\City;
use App\Model\Provinces;
use App\Model\District;
use App\Model\Village;
class LokasiController extends Controller
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
    public function indexprovinsi()
    {
        $data = Provinces::orderBy('name','asc')->paginate(5);
        return view('lokasi/provinsi/home',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createprovinsi()
    {
        return view('lokasi/provinsi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeprovinsi(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255|unique:provinces'
        ]);

        if ($validator->fails()) {
            return redirect('master/lokasi/provinsi/create')->withInput()->withErrors($validator);
        }
        Provinces::create($input);
        return redirect('master/lokasi/provinsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showprovinsi($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editprovinsi($id)
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
    public function updateprovinsi(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyprovinsi($id)
    {
        //
    }
    public function indexkota()
    {
        $data= City::orderBy('name','asc')->paginate(5);
        return view('lokasi/kota/home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkota()
    {
        $data = Provinces::orderBy('name','asc')->get();
        return view('lokasi/kota/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekota(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255|unique:cities',
            'province_id'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('master/lokasi/kota/create')->withInput()->withErrors($validator);
        }
        City::create($input);
        return redirect('master/lokasi/kota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkota($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkota($id)
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
    public function updatekota(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroykota($id)
    {
        //
    }
    public function indexkelurahan()
    {
        $data= Village::orderBy('name','asc')->paginate(5);
        return view('lokasi/kelurahan/home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkelurahan()
    {
        $data = Provinces::orderBy('name','asc')->get();
        return view('lokasi/kelurahan/create',compact('data'));     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekelurahan(Request $request)
    {
        $input = $request->all();
        // print_r($input);die();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255|unique:villages',
            'district_id'=>'required','province_id'=>'required','city_id'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('master/lokasi/kelurahan/create')->withInput()->withErrors($validator);
        }
        Village::create($input);
        return redirect('master/lokasi/kelurahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkelurahan($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkelurahan($id)
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
    public function updatekelurahan(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroykelurahan($id)
    {
        //
    }
    public function indexkecamatan()
    {
        $data = District::orderBy('name','asc')->paginate(5);
        return view('lokasi/kecamatan/home',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkecamatan()
    {
        $data = Provinces::orderBy('name','asc')->get();
        return view('lokasi/kecamatan/create',compact('data'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekecamatan(Request $request)
    {
        $input = $request->all();
        // print_r($input);die();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255|unique:districts',
            'city_id'=>'required','province_id'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('master/lokasi/kecamatan/create')->withInput()->withErrors($validator);
        }
        District::create($input);
        return redirect('master/lokasi/kecamatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkecamatan($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkecamatan($id)
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
    public function updatekecamatan(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroykecamatan($id)
    {
        //
    }
}
