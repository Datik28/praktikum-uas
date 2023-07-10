@extends('layouts.app')

@section('content')

    <div class="container">

    <h3>Tambah Data Kosmetik</h3>
        <form action="{{ url('/kosmetik') }}"method="post">
@csrf
            <table class="table">
                <tr>
                    <td>KODE</td>
                    <td><input type="text" name="kosmetik_kode" class="form-control"></td>
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
                    <td><input type="text" name="kosmetik_merk" class="form-control"></td>
                </tr>
                <tr>
                    <td>HARGA</td>
                    <td><input type="text" name="kosmetik_harga" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>

@endsection