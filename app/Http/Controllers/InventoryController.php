<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    private $perPage = 7;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $inventories = [];
        if ($request->has("keyword")) {
            $inventories = Inventory::where('nama', 'LIKE', "%{$request->keyword}%")->paginate($this->perPage);
        } else {
            $inventories = Inventory::paginate($this->perPage);
        }
        return view('inventories.index', [
            'inventories'=> $inventories->appends(['keyword'=> $request->keyword])
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('inventories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|integer',
            'suplier' => 'required',
            'lokasi' => 'required'
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventories.index')
            ->with('success', 'Inventaris berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('inventories.edit', compact('inventory'));
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
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|integer',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $inventory = Inventory::find($id);
        $inventory->update($request->all());

        return redirect()->route('inventories.index')
            ->with('success', 'Inventaris berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inventory::find($id)->delete();
        return redirect()->route('inventories.index')
            ->with('success', 'Inventaris berhasil dihapus!');
    }
}
