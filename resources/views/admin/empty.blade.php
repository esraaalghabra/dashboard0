@extends('layouts.admin')

@section('CSS')

@endsection

@section('title')

@stop

@section('page-header')

@endsection

@section('content')

@endsection

@section('js')

@endsection

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
       aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{asset('utilities-color.html')}}">Colors</a>
            <a class="collapse-item" href="{{asset('utilities-border.html')}}">Borders</a>
            <a class="collapse-item" href="{{asset('utilities-animation.html')}}">Animations</a>
            <a class="collapse-item" href="{{asset('utilities-other.html')}}">Other</a>
        </div>
    </div>
</li>
