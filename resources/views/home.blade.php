@extends('layouts.app')

@section('left-side')
    @include('layouts.leftside')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <post-editor button-text="{{ __('posts.save') }}"
                     header="{{ __('posts.create_post') }}"
                     placeholder="{{ __('posts.placeholder') }}">
        </post-editor>
    </div>
</div>
@endsection

@section('right-side')
    @include('layouts.rightside')
@endsection
