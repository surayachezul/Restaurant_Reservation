<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.dashboard_index',
        
        ['menus'=>$menus,

        
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminAddMenu');
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
            'category_code' => 'required',
            'menu_image' => 'required',
            'menu_title' => 'required',
            'menu_price' => 'required'
          ]);
        
          $input = $request->all();
        
          Menu::create($input);
        
          Session::flash('flash_message', 'Menu successfully added!');
        
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $menu = Menu::find($id);

    $this->validate($request, [
        'category_code' => 'required',
        'menu_image' => 'required',
        'menu_title' => 'required',
        'menu_price' => 'required'
    ]);

    $input = $request->all();

    $menu->fill($input)->save();

    Session::flash('flash_message', 'Menu successfully updated!');

    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);

        $menu->delete();
    
        Session::flash('flash_message', 'Menu successfully deleted!');
    
        return redirect()->route('menu.index');
    }
}
