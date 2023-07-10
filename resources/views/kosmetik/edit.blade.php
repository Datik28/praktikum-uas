@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Kosmetik</h3>
        <form action="{{ url('/kosmetik/' . $row->kosmetik_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <table class="table">
            <tr>
                <td>KODE</td>
                <td><input type="text" name="kosmetik_kode" class="form-control" value="{{ $row->kosmetik_kode }}"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>    
                    <select name="kosmetik_nama" class="form-control">
                    <option value="">-- Pilih Nama Barang --</option>
                    <option value="Cream Pemutih">Cream Pemutih</option>
                    <option value="Maskara">Maskara</option>
                    <option value="Lipstik">Lipstik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>MERK</td>
                <td><input type="text" name="kosmetik_merk" class="form-control" value="{{ $row->kosmetik_merk }}"></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td><input type="text" name="kosmetik_harga" class="form-control" value="{{ $row->kosmetik_harga }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="UPDATE" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>

@endsection
