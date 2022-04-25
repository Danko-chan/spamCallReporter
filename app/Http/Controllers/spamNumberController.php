<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Number;


class spamNumberController extends Controller
{


    public function __construct()
    {
      $this->middleware('auth', ['except' => ['numbers.index', 'numbers.show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $search = $request['search'] ?? "";
      if($search !=""){
        $numbers = Number::where('number','=' ,$search)->get(); 
      }else {
        $numbers = Number::all();
      }
      $data = compact('numbers');
      return view('numbers.index')->with($data);
      
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|min:10|max:10',
            
          ]);

        $number = new Number();
        $number->number = $request->number;
        $number->user()->associate(Auth::id());

        if ($number->save()) {
            return redirect()->route('numbers.show', $number->id);
          } else {
            return redirect()->route('numbers.create');
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $number = Number::findOrFail($id);
      
      return view('numbers.show')->with('number', $number);
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
