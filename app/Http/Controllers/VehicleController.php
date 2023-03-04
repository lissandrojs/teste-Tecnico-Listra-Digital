<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function create(Request $request)
    {

        $newVehicle = new Vehicle;

        $newVehicle->photograph = $request->photograph;
        $newVehicle->city = $request->city;
        $newVehicle->city = $request->city;
        $newVehicle->brand = $request->brand;
        $newVehicle->model = $request->model;
        $newVehicle->description = $request->description;
        $newVehicle->year = $request->year;
        $newVehicle->milege = $request->milege;
        $newVehicle->typeofexchange = $request->typeofexchange;
        $newVehicle->storephone = $request->storephone;
        $newVehicle->vehiclevalue = $request->vehiclevalue;
        $newVehicle->save();
        
        return response()->json(['success'=>'Veiculo armenzado']);
    }

    public function index()
    {
        $vehicles =  Vehicle::all(); 
        return response()->json($vehicles);       
    }

    public function findById($id)
    {
        $currentVehicle = Vehicle::find($id);

        if(!$currentVehicle){
            return response()->json(['messagem'=>'Veiculo não encontrado'],404);
        }

        return response()->json($currentVehicle);
    }

    public function findByModel($model)
    {
        $currentVehiclesModel = Vehicle::where('model',$model)->first();

        if(!$currentVehiclesModel){
            return response()->json(['message'=>'Modelo não encontrado'],404);
        }
        return response()->json($currentVehiclesModel);
    }

    public function findByYear($year)
    {
        $currentVehicleYear = Vehicle::where('year',$year)->first();
        
        if(!$currentVehicleYear){
            return response()->json(['message'=>'Modelo não encontrado'],404);
        }

        return response()->json($currentVehicleYear);
    }

}