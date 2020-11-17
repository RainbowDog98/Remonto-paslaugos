@extends('layouts.app')

@section('navigation-bar')
    <a href="{{ route('home')}}"><button type="button"class="navButtons" >Atgal</button></a>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Statistika</div>
                <div class="card-body">

                    <h3>Visi įtaisiai: {{ $allDevices }}</h3>
                    <h3>Nesutvarkyti įtaisiai: {{ $unrepairedDevices }}</h3>
                    <h3>Sutvarkyti įtaisiai: {{ $repairedDevices }}</h3>
                    <h3>Atsiimti įtaisiai: {{ $isWithdrawn }}</h3>
                    <h3>Neatsiimti įtaisiai: {{ $notWithdrawn }}</h3>
                    <br><br>

                    <h3><b>Remontininkų statistika</b></h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Remontinikas</th>
                                <th scope="col">Sutvarkytu įtaisų kiekis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($repairmen_data as $data)
                                <tr>
                                    <td>{{ $data[0]->id }}</td>
                                    <td>{{ $data[0]->name }}</td>
                                    <td>{{ $data[1] }}</td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
