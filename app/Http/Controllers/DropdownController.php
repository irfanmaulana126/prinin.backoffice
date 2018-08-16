<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\City;
use App\Model\Provinces;
use App\Model\District;
use App\Model\Village;

class DropdownController extends Controller
{
    public function postDropdown($id1,$id2)
    {       
        switch ($id2) {
            case 'city':
                $kota=City::where('province_id',$id1)->get();
                return json_encode($kota);
                break;           
            case 'district':
                $kecamatan=District::where('city_id',$id1)->get();
                return json_encode($kecamatan);
            break;           
                case 'village':
                $kelurahan=Village::where('district_id',$id1)->get();
                return json_encode($kelurahan);
            break;     
        }
    }
}
