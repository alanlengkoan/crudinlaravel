@extends('atribut.atribut')

@section('title', $title)

@section('content')
    
    <h2>Data</h2>

    <a href="/add">Add</a>

    <br /><br />

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Link</th>
                <th>Text</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $artikel)
                <tr>
                    <td>{{ $artikel->id_data }}</td>
                    <td>{{ $artikel->judul }}</td>
                    <td>{{ $artikel->link }}</td>
                    <td>{{ $artikel->text }}</td>
                    <td>
                        <a href="">Ubah</a>
                        <a href="">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection