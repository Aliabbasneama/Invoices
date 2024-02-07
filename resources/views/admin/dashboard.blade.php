@extends('layouts.admin')
@section('title')
    الرئيسيه 
@endsection
@section('contentheaderlink')
<a href="{{route('admin.dashboard')}}">الرئيسيه</a>
@endsection
@section('contentheaderactive')
    عرض
@endsection

@section('content')

<div class="row" style="background-image: url({{ asset('assets/admin/imgs/dash.jpg') }}) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
 
</div>

@endsection