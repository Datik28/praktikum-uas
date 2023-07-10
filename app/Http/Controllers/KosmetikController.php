<?php

namespace App\Http\Controllers;
use App\Kosmetik;
use Illuminate\Http\Request;

class KosmetikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kosmetik::all();
        return view('kosmetik.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kosmetik.add');
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
            'kosmetik_kode' => 'bail|required|unique:tb_kosmetik','kosmetik_nama' => 'required'],
            [
            'kosmetik_kode.required' => 'KODE wajib diisi',
            'kosmetik_kode.unique' => 'Kode Kosmetik sudah ada',
            'kosmetik_nama.required' => 'Nama wajib diisi'
            ]);
            
            Kosmetik::create([
            'kosmetik_kode' => $request->kosmetik_kode,
            'kosmetik_nama' => $request->kosmetik_nama,
            'kosmetik_merk' => $request->kosmetik_merk,
            'kosmetik_harga' => $request->kosmetik_harga]);
            
            return redirect('kosmetik');
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
        $row = Kosmetik::findOrFail($id);
        return view('kosmetik.edit', compact('row'));

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
            'kosmetik_kode' => 'bail|required|unique:tb_kosmetik',
            'kosmetik_nama' => 'required'
            ],
            [
            'kosmetik_kode.required' => 'KODE wajib diisi',
            'kosmetik_kode.unique' => 'Kode Kosmetik sudah ada',
            'kosmetik_nama.required' => 'Nama wajib diisi'
            ]);
            
            $row = Kosmetik::findOrFail($id);
            $row->update([
            'kosmetik_kode' => $request->kosmetik_kode,
            'kosmetik_nama' => $request->kosmetik_nama,
            'kosmetik_merk' => $request->kosmetik_merk,
            'kosmetik_harga' => $request->kosmetik_harga ]);
        
            return redirect('kosmetik');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kosmetik::findOrFail($id);
        $row->delete();

        return redirect('kosmetik');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        
        $rows = Kosmetik::where('kosmetik_nama','like',"%".$keyword."%" )->paginate(5);
        return view('kosmetik.index', compact('rows'))->with('i',(request()->input('page',1)-1)*5);
    }
}
