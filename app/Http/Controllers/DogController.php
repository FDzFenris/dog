<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dog = new Dog();
        $showdog=$dog->all();

       // $show_all = $this->show(2);

        return view('dog_all',["dog_info"=>$showdog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dog = new Dog();

        $dog->name = $request->name;
        $dog->age = $request->age;


        $dog->save();
        return redirect()->route('dog_all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function sleep()
    {
        return view('dog_all',["title"=>"my app"]);

    }


    public function show($id="")
    {
        $dog = new Dog();
        $show_dog = dog::find($id);

      // return view('dog_all',["dog_info_one"=>$show_dog]);

       return dog::find($id);

    }

    public function show_all()
    {
        $dog = new Dog();
        $show_dog = dog::all();  
        foreach($show_dog as $value){
            echo $value->name;
            echo $value->age;
            echo $value->created_at;
        }
        //return view('dog_all',["show_all"=>$show_dog]);
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
