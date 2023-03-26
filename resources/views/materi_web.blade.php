@extends('app')
@section('content')

<table class="table table-striped">
        <h2 style="text-align: center;">Materi Web</h2>
        <br>
        <tr>
            <th>ID</th>
            <th>Nama Materi</th>
        </tr>
        @foreach($materi_web as $p)
        <tr>
            <td>{{$p['id']}}</td>
            <td>{{$p['nama_Materi']}}</td>
        </tr>
        @endforeach
    </table>

@endsection