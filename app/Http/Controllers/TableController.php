<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        
        return view('table.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Table::create([
            'number' => $request->number,
            'amount_people' => $request->amount_people,
        ])->save();
        
        Alert::success('Success', 'Table added successfully');
        return redirect()->route('tables.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        $table = Table::firstWhere('id', $table->id);
        
        return view('table.show',compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        $table = Table::firstWhere('id', $table->id);
        
        return view('table.edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        $table = Table::firstWhere('id', $table->id);
        $table->update([
            'number' => $request->number,
            'amount_people' => $request->amount_people,
        ]);
        
        Alert::success('Success', 'Table adited successfully');
        $table = Table::firstWhere('id', $table->id);
        return redirect()->route('tables.show', 'table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        $table = Table::firstWhere('id', $table->id);
        $table->delete();
        
        Alert::success('Success', ' deleted successfully');
        return redirect()->route('tables.index');
    }
}
