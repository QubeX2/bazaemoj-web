@extends('layouts.app')

@section('siteheader')
    <a class="btn btn-primary" href="{{ route('tags.index') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
@endsection

@section('content')
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header h5 font-weight-bold">{{ __('messages.add_tag') }}</div>
            <div class="card-body">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="id-name">{{ __('messages.tag_name') }}</label>
                        <input id="id-name" type="text" name="name" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="id-type">{{ __('messages.tag_type') }}</label>
                        <select id="id-type" class="form-control" name="type">
                            <option value="1">{{ __('messages.emotion') }}</option>
                            <option value="2">{{ __('messages.event') }}</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="id-sign">{{ __('messages.tag_sign') }}</label>
                        <select id="id-sign" class="form-control">
                            <option value="0">{{ __('messages.neutral') }}</option>
                            <option value="1">{{ __('messages.positive') }}</option>
                            <option value="-1">{{ __('messages.negative') }}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> Lägg till</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
