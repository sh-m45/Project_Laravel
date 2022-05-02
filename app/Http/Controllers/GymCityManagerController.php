<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage ;
use App\Models\Gym;
use Illuminate\Http\Request;

class GymCityManagerController extends Controller
{
    public function index()
    {
        $Gyms = Gym::all();
        
        return view('CityManager/index', [
            'Gyms' => $Gyms,
        ]);
        
    }

    public function create()
    {
        $Gyms = Gym::all();
        return view('/CityManager/create',[
            'Gyms' => $Gyms ,
        ]);
    } 
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required',
            'img' => 'required|image|max:1024|mimes:jpg,jpeg,png',
            'national_id' => 'required|min:14' , 
        ]);
        $imgPath = Storage::putFile("avater", $request->img);
        Gym::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'img' => $imgPath,
            'national_id' => $request->national_id,
        ]);
        return redirect(url('/CityManager/index'));
    }

    public function show($id)
    {
        $gym = Gym::findOrFail($id);
        return view('/Citymanager/show', [
            'gym' => $gym ,
        ]);
    }

    public function edit($id)
    {
        $gym = Gym::findOrFail($id);
        return view('/CityManager/edit', [
            'gym' => $gym ,
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required',
            'img' => 'required|image|max:1024|mimes:jpg,jpeg,png',
            'national_id' => 'required|min:14' , 
        ]);
        $gym = Gym::findOrFail($id);
        $imgPath = $gym->img ;
        if($request->hasFile('img'))
        {
            Storage::delete($imgPath);
            $imgPath = Storage::putFile("avater", $request->img);
        } 
        $gym->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'img' => $imgPath,
            'national_id' => $request->national_id,
        ]);
        return redirect(url('/CityManager/index'));
    }

    public function delete($id)
    {
        $gym = Gym::findOrFail($id);
        Storage::delete($gym->id);
        $gym->delete();
        return redirect(url('/CityManager/create'));
    }


}
