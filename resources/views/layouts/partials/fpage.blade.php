@extends('layouts.app-master')

@section('content')
<div class="wrapper">
<h2>WELCOME</h2>
        <div class="button">
          <a href="{{ route('login.show') }}" >Admin</a>
          <a href="{{ route('login.show') }}" >client</a>
        </div>
</div>
@endsection