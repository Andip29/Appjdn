@extends('layouts.dashboard')

@section('title')
    {{ trans('message.title.index') }}    
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('send_message')}}
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @can('message_send')
                    <div class="card-header"> {{trans('message.title.send')}}</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('send-message') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="phone_number">{{trans('message.form_control.input.number.label')}}</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="{{ trans('message.form_control.input.number.placeholder')}}" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="message">{{trans('message.form_control.input.message.label')}}</label>
                                <textarea name="message" class="form-control" placeholder="{{ trans('message.form_control.input.message.placeholder')}}" required></textarea>
                            </div>
                        
                            <!-- Tambahan elemen lain jika diperlukan -->
                            <button type="submit" class="btn btn-primary">{{trans('message.button.send.value')}}</button>
                        </form>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection