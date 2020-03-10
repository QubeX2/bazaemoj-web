@extends('layouts.app')

@section('siteheader')
    <a class="btn btn-primary" href="{{ route('tags.create') }}"><i class="fa fa-plus"></i> {{ __('messages.create_tag') }}</a>
@endsection

@section('content')
    @php
        //\App\BzTag::createSystemDefaults();
        //\App\BzTag::createUserDefaults(\App\User::find(2));
    @endphp
@endsection
