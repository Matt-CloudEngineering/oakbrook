<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Apartment;
use Carbon\Carbon;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        if (Auth::check()) {
            $apartments = Apartment::all();
            $unit = null;
            $message = null;
            return view('/apartn', compact('apartments', 'unit','message'));         
            // The user is logged in...
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $apartments = Apartment::all();
    /*        $unit = json(['apt_id'=> '','bldg' => "BLDG",'unit' =>'unit','layout' =>'layout','description' =>'Enter Description','date_avail' =>'YYYY-MM-DD']);*/
            $unit = null;
            $message = null;
            return view('/apartn', compact('apartments', 'unit','message'));
            // The user is logged in...
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create initial apartment
        /*Add New Apt*/
        $this->validate($request, [
            'bldg' => 'required',
            'unit' => 'required',
            'description' => 'required|max:255',
            'layout' => 'required'
        ]);
        /*$validator = Validator::make($request->all(), [
            'description' => 'required|max:255'
            ]);

        if ($validator->fails()) {
            return redirect('/apartn')
                ->withInput()
                ->withErrors($validator);
        }*/

        $apartment = new Apartment; 
        $apartment ->bldg = $request->bldg;
        $apartment ->unit = $request->unit;
        $apartment ->layout = $request->layout;
        $apartment ->description = $request->description;
        $apartment ->date_avail = $request->date;
        $apartment ->special = $request->special;
        $apartment ->save();

        $apartments = Apartment::all();        
        $unit = null;
        $message = "Apartment Created";
        return view('/apartn', compact('apartments', 'unit','message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartments = Apartment::all();        
        $unit = Apartment::findOrFail($id);
        $message = null;
        return view('/apartn', compact('apartments', 'unit','message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        /*Add New Apt*/
        $this->validate($request, [
            'bldg' => 'required',
            'unit' => 'required',
            'description' => 'required|max:255',
            'layout' => 'required'
        ]);
        /*$validator = Validator::make($request->all(), [
            'description' => 'required|max:255'
            ]);

        if ($validator->fails()) {
            return redirect('/apartn')
                ->withInput()
                ->withErrors($validator);
        }*/

        $apartment = Apartment::find($id); 
        $apartment ->bldg = $request->bldg;
        $apartment ->unit = $request->unit;
        $apartment ->layout = $request->layout;
        $apartment ->description = $request->description;
        $apartment ->date_avail = $request->date;
        $apartment ->special = $request->special;
        $apartment ->save();

        $unit = null;
        $apartments = Apartment::All();
        $message = "Apartment id:$id Edited";
        return view('/apartn', compact('apartments','unit','message')); 
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
        $apartment = Apartment::find($id);
        $message = "Apartment id:$id DELETED";
        Apartment::destroy($id);
        $unit = null;
        $apartments = Apartment::All();
        return view('/apartn', compact('apartments','unit','message')); 
    }
}
