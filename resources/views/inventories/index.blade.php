@extends('layouts.dashboard')

@section('title')
    {{ trans('inventories.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('inventories')}}
@endsection

@section('content')
    <!-- section:content -->
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
            <div class="row">
                <div class="col-md-6 mt-1">
                   <form action="{{route('inventories.index')}}" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="{{request()->get('keyword')}}" type="search" class="form-control" placeholder="{{trans('inventories.form_control.input.search.placeholder')}}">
                         <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6 mt-1">
                    @can('role_create')
                        <a href="{{route('inventories.create')}}" class="btn btn-primary float-right" role="button">
                            {{ trans('inventories.button.create.value') }}
                            <i class="fas fa-plus-square"></i>
                        </a>    
                    @endcan
                </div>
             </div>
          </div>
          <div class="card-body">
               <!-- list role -->
               @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{trans('inventories.form_control.input.name.label')}}</th>
                <th>{{trans('inventories.form_control.input.stok.label')}}</th>
                <th>{{trans('inventories.form_control.input.suplier.label')}}</th>
                <th>{{trans('inventories.form_control.input.location.label')}}</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->nama }}</td>
                    <td>{{ $inventory->jumlah }}</td>
                    <td>{{ $inventory->suplier }}</td>
                    <td>{{ $inventory->lokasi }}</td>
                    <td>
                        <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-warning btn-sm">{{trans('inventories.button.edit.value')}}</a>
                        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">{{trans('inventories.button.delete.value')}}</button>
                        </form>
                    </td>
                </tr>
            @empty
            <p>
                <strong>
                    @if (request()->get('keyword'))
                        {{ trans('inventories.label.no_data.search', ['keyword' => request()->get('keyword')]) }}
                    @else
                        {{ trans('inventories.label.no_data.fetch')}}
                    @endif
                </strong>
            </p>
            @endforelse
        </tbody>
    </table>
                     <!-- list role -->
         </div>
         @if ($inventories->hasPages())
              <div class="card-footer">
                {{$inventories->links('vendor.pagination.bootstrap-4')}}
              </div>
          @endif
       </div>
    </div>
 </div>
 
@endsection