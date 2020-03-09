@extends('layouts.app')

@section('siteheader')
    <a class="btn btn-primary" href="{{ route('tags.create') }}"><i class="fa fa-plus"></i> {{ __('messages.create_tag') }}</a>
@endsection

@section('content')
    @foreach(\Illuminate\Support\Facades\Lang::get('emotions.positive') as $key => $emotion)
        <div class="alert" style="background-color: {{ \App\BzTag::EMOTION_COLORS[$key] }}">{{ $key }}</div>
        {{-- __('emotions.positive.'.$key) }}<br /> --}}
    @endforeach
    @foreach(\Illuminate\Support\Facades\Lang::get('emotions.negative') as $key => $emotion)
        <div class="alert" style="background-color: {{ \App\BzTag::EMOTION_COLORS[$key] }}">{{ $key }}</div>
    @endforeach
    @foreach(\Illuminate\Support\Facades\Lang::get('emotions.neutral') as $key => $emotion)
        <div class="alert" style="background-color: {{ \App\BzTag::EMOTION_COLORS[$key] }}">{{ $key }}</div>
    @endforeach
@endsection
