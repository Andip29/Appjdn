@extends('layouts.dashboard')

@section('title')
    {{ trans('inventories.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('add_inventory')}}
@endsection

@section('content')
<div class="container">
    <h2>{{trans('inventories.alert.create.title')}}</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inventories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">{{trans('inventories.form_control.input.name.label')}}:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah">{{trans('inventories.form_control.input.stok.label')}}:</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="suplier">{{trans('inventories.form_control.input.suplier.label')}}:</label>
            <input type="text" name="suplier" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lokasi">{{trans('inventories.form_control.input.location.label')}}:</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <!-- Tambahkan input lainnya sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">{{trans('inventories.alert.create.title')}}</button>
    </form>
</div>
@endsection
