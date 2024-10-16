<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;
use App\Models\Employee;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stocks::where('created_by', '=', \Auth::user()->creatorId())->get();
        return view('stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=\Validator::make(
            $request->all(),[
                'stock_type'=>'required',
                'stock_name'=>'required',
                'stock_unit'=>'required',
                'stock_price'=>'required',
            ]
        );
        if($validator->fails())
        {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        $stocks = new Stocks();
        $stocks->stock_name=$request->stock_name;
        $stocks->stock_type=$request->stock_type;
        $stocks->stock_unit=$request->stock_unit;
        $stocks->stock_qty=$request->stock_qty;
        $stocks->stock_price=$request->stock_price;
        $stocks->created_by=\Auth::user()->creatorId();
        $stocks->save();
        return redirect()->route('stocks.index')->with('success', __('Stock successfully created.'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stock = Stocks::find($id);
        return view('stocks.edit',compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stock=Stocks::find($id);
        $validator=\Validator::make(
            $request->all(),[
                'stock_type'=>'required',
                'stock_name'=>'required',
                'stock_unit'=>'required',
                'stock_price'=>'required',
            ]
        );
        if($validator->fails())
        {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        $stock->stock_name=$request->stock_name;
        $stock->stock_type=$request->stock_type;
        $stock->stock_unit=$request->stock_unit;
        $stock->stock_qty=$request->stock_qty;
        $stock->stock_price=$request->stock_price;
        $stock->save();
        return redirect()->route('stocks.index')->with('success', __('Stock successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $stock=Stocks::find($id);
         $stock->delete();
         return redirect()->route('stocks.index')->with('success', __('Stock successfully deleted.'));
    }
}
