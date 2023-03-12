@extends('students.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">student page</div>
        <div class="card-body">
            <h5 class="card-title">Name : {{$students->name}}</h5>
            <p class="card-text">Adress : {{$students->address}}</p>
            <p class="card-text">mobile : {{$students->mobile}}</p>
        </div>
    </div>