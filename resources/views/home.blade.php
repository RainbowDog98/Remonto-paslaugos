@extends('layouts.app')

@section('navigation-bar')
    
    @can('user-recipient')
        <a href="{{ route('device.create')}}" ><button type="button" class="navButtons">Užregistruoti įtaisą</button></a>
        <a href="{{ route('device.search')}}" ><button type="button" class="navButtons">Atžymėti įtaisą</button></a>
    @endcan

    @can('user-manager')
        <a href="{{ route('device.index')}}" ><button type="button" class="navButtons">Peržiūreti įtaisus</button></a>
        <a href="{{ route('device.statistics')}}" ><button type="button" class="navButtons">Statistika</button></a>
    @endcan

    @can('user-repairman')
        <a href="{{ route('device.notRepaired')}}" ><button type="button" class="navButtons">Peržiūreti nesutaisytus įtaisus</button></a>
    @endcan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
