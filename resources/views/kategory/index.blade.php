@extends('layouts.app')
@section('content_title', 'Data Kategory')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Kategory</h4>
        </div>
        <div class="card-body">
            <table class="table table-sm-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategory</th>
                        <th>Deskripsi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($kategory as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_kategory }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
