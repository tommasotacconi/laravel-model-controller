@extends('layouts.app')

@section('page-title', 'Movie db')

@section('main-content')
    <h1>
      <a href="{{ route('movies.index') }}">Movie homepage</a>
    </h1>
@endsection

{{-- final commit --}}
