@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="text-center">
                <h1>Laravel Vue SPA</h1>
                <p>CRUD Application Laravel and Vue</p>
            </div>
            <router-view></router-view>
        </div>
    </div>
</div>
@endsection
