@extends('layouts.app')

@section('siteheader')
    <a class="btn btn-primary" href="{{ route('tags.create') }}"><i class="fa fa-plus"></i> {{ __('messages.create_tag') }}</a>
@endsection
