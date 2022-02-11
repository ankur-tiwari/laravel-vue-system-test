@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.stock.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.stocks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="car_name">{{ trans('cruds.stock.fields.car_name') }}</label>
                <input class="form-control {{ $errors->has('car_name') ? 'is-invalid' : '' }}" type="text" name="car_name" id="car_name" value="{{ old('car_name', '') }}" required>
                @if($errors->has('car_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.stock.fields.car_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="stock">{{ trans('cruds.stock.fields.stock') }}</label>
                <input class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" type="text" name="stock" id="stock" value="{{ old('stock', '') }}" required>
                @if($errors->has('stock'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stock') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.stock.fields.stock_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection