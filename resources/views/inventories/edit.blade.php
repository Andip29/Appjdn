@extends('layouts.dashboard')

@section('title')
    {{ trans('inventories.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('edit_inventory', $inventory)}}
@endsection

@section('content')
<div class="container">
    <h2>Edit Inventaris</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inventories.update', $inventory->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $inventory->nama }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $inventory->jumlah }}" required>
        </div>
        <div class="form-group">
            <label for="suplier">Suplier:</label>
            <input type="text" name="suplier" class="form-control" value="{{ $inventory->suplier }}" required>
        </div>
        <div class="form-group">
            <label for="suplier">Lokasi:</label>
            <input type="text" name="suplier" class="form-control" value="{{ $inventory->lokasi }}" required>
        </div>
        <!-- Tambahkan input lainnya sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Perbarui Inventaris</button>
    </form>
</div>
@endsection