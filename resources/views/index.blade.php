@extends('layouts.layout')
<h1>Pizza's List</h1>
    @foreach($pizza as $p)
    <p>{{$p->name}} -- {{$p->type}} -- {{$p->base}}</p>
    @endforeach
   