<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\User;
use App\Model\Bank;
use App\Model\Provinces;
use App\Model\UserBankAccount;

class UserController extends Controller
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
    public function index()
    {
        $data = User::orderBy('name','asc')->paginate(5);
        return view('user/home',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinces::all();
        $bank = Bank::all();
        return view('user/create',compact('provinsi','bank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required|string|max:255',
            'village_id'=>'required|',
            'username'=>'required|string|max:255|unique:users',
            'email'=>'required|max:255',
            'phone'=>'required|max:255',
            'ktp'=>'required|max:255',
            'password'=>'required|string|min:6|confirmed',
            'address'=>'required|string|max:255',
            'mother_name'=>'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/user/create')->withInput()->withErrors($validator);
        }
        $user = new User;
        $user->village_id = $request->village_id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->ktp = $request->ktp;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->mother_name = $request->mother_name;
        $user->save();
        if($request->nope != 'on'){
            $bank = new UserBankAccount;
            $bank->user_id = $user->id;
            $bank->bank_id = $request->bank_id;
            $bank->account_name = $request->account_name;
            $bank->account_number = $request->account_number;
            $bank->save();
        }
        
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
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
