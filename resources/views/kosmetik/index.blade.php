@extends('layouts.app')

@section('content')

<div class="container">

<h3>Daftar Kosmetik</h3>
<a href="{{ url('kosmetik/create') }}">Tambah Data</a>
    <form class="form" method="get" action="{{ route('search')}}">
        <div class="form-group w-50 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan nama">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>KODE</td>
                <td>NAMA</td>
                <td>MERK</td>
                <td>HARGA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->kosmetik_kode }}</td>
                <td>{{ $row->kosmetik_nama }}</td>
                <td>{{ $row->kosmetik_merk }}</td>
                <td>{{ $row->kosmetik_harga }}</td>
                <td><a href="{{ url('kosmetik/' . $row->kosmetik_id . '/edit') }}" class="btn btn-primary">Edit</a></td>
                <td><form action="{{ url('kosmetik/' . $row->kosmetik_id) }}" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                @csrf
                <button class="btn btn-danger">Hapus</button>
                </form>
                </td>
            </tr>
@endforeach
        </table>
    </div>

@endsection