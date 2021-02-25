<?php

namespace App\Http\Controllers;


use App\City;
use App\Street;
use App\Car;
use App\People;
use Illuminate\Http\Request;
use DB;

class WpyApiController extends Controller
{
    // function to check input has only character from a to z
    public function only_character($name){
    	if(!preg_match("/^[a-zA-Z ]+$/", $name))
    		return false;
    	else
    		return true;
    	
    }

    // function to check input has only character and number
    public function only_character_number($name){
    	if(!preg_match("/^[a-zA-Z0-9 ]+$/", $name))
    		return false;
    	else
    		return true;
    	
    }

    //API 1:  get people list based on city name
    function findAllPeoples($city){
    	// validation for only alpha chacater allowed
    	if($this->only_character($city)){
	    	$city = City::whereRaw('lower(city_name) like (?)',["%{$city}%"])->first();

	    	// Validation for city exist or not
	    	if($city  === null){
	    		return response()->json(["error"=>"Given city dose not exist"],404);
	    	}

	    	$users = DB::table('cities')
	            ->join('streets', 'cities.id', '=', 'streets.city_id')
	            ->join('houses', 'houses.street_id', '=', 'streets.id')
	            ->join('peoples', 'peoples.house_id', '=', 'houses.id')
	            ->select('peoples.*')
	            ->where('cities.id','=',$city->id)
	            ->get();
	    	return response()->json($users,200);
	    }else{
	    	return response()->json(["error"=>"only alphabetic character allowed in input."],400);
	    }
    }

    //API 2:  get car list based on street name
    function findAllCarsOnStreet($street){
    	// validation for only alpha chacater allowed
    	if($this->only_character($street)){
	    	$street = Street::whereRaw('lower(street_name) like (?)',["%{$street}%"])->first();

	  		// Validation for street_name exist or not
	    	if($street  === null){
	    		return response()->json(["error"=>"Given street dose not exist"],404);
	    	}

	    	$users = DB::table('streets')
	            ->join('houses', 'streets.id', '=', 'houses.street_id')
	            ->join('cars', 'cars.house_id', '=', 'houses.id')
	            ->select('cars.*')
	            ->where('streets.id','=',$street->id)
	            ->get();
	    	return response()->json($users,200);
	    }else{
	    	return response()->json(["error"=>"only alphabetic character allowed in input."],400);
	    }
    }

    //API 3:  get owner by licence
    function findCarOwnerByPlate($plate){
    	// validation for only alpha chacater allowed
    	if($this->only_character_number($plate)){
	    	$car = Car::whereRaw('lower(licence_plate) like (?)',["%{$plate}%"])->first();
	  		
	  		// Validation for licence exist or not
	    	if($car  === null){
	    		return response()->json(["error"=>"Given licence plate dose not exist "],404);
	    	}

	    	$users = DB::table('peoples')
	            ->join('cars', 'cars.people_id', '=', 'peoples.id')
	            ->select('peoples.*')
	            ->where('cars.id','=',$car->id)
	            ->get();
	    	return response()->json($users,200);
	    }else{
	    	return response()->json(["error"=>"only alphanumeric character allowed in input."],400);
	    }
    }

    //API 4:  get Full address by person name
    function findFullAddressByPerson($person){
    	// validation for only chacater allowed
    	if($this->only_character($person)){
	    	$People = People::whereRaw('lower(full_name) like (?)',["%{$person}%"])->first();
	  		
	  		// Validation for Person exist or not
	    	if($People  === null){
	    		return response()->json(["error"=>"Given Person name dose not exist"],404);
	    	}

	    	$users = DB::table('peoples')
	            ->join('houses', 'peoples.house_id', '=', 'houses.id')
	            ->join('streets', 'houses.street_id', '=', 'streets.id')
	            ->join('cities', 'streets.city_id', '=', 'cities.id')
	            ->select('houses.house_num','streets.street_name','cities.city_name','houses.pincode')
	            ->where('peoples.id','=',$People->id)
	            ->get();
	    	return response()->json($users,200);
	    }else{
	    	return response()->json(["error"=>"only character allowed in input."],400);
	    }
    }
}
