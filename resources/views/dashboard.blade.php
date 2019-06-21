@extends('adminlte::page')

@section('title', 'Dashboard Peserta Beasiswa')

@section('content_header')
    <h1>Dashboard Peserta Beasiswa</h1>
@stop

    @section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Hasil Penerima Beasiswa</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <input class="form-control" id="srcData" type="text" placeholder="Search.."> <br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="text-center">Peringkat</th>
                    <th class="text-center">Nomor Id Peserta</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Institusi</th>
                    <th class="text-center">Nomor induk Mahasiswa</th>
                    <th class="text-center">Score </th>
                    <th class="text-center">Keterangan</th>
                </tr>
                </thead>
                <tbody id = "pesertaTable">
                @foreach($hasil as $key =>$datas)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $datas->id_peserta }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->institusi}}</td>
                        <td>{{ $datas->ni_mhs }}</td>
                        <td>{{ $datas->nilai_topsis }}</td>
                        <td>{{ $datas->Keterangan }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
