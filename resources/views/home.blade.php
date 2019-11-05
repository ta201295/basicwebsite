@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo molestias qui ut? Atque ullam consequatur, odit repudiandae architecto tempora impedit quibusdam saepe quas dolorem nostrum praesentium aperiam corrupti vero provident!</p>
@endsection

@section('sidebar')
    @parent
    <p>this is appended is the sidebar</p>
@endsection