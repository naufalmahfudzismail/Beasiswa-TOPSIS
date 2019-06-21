@extends('adminlte::page')

@section('title', 'Proses Seleksi')

@section('content_header')
    <h1>Proses Seleksi</h1>
@stop

@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>List Peserta</h1>
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
                    <th class="text-center">Nomor Id</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Institusi</th>
                    <th class="text-center">Nomor induk Mahasiswa</th>
                    <th class="text-center">IP semester 1</th>
                    <th class="text-center">IP semester 2</th>
                    <th class="text-center">IP semester 3</th>
                    <th class="text-center">IP semester 4</th>
                    <th class="text-center">IP semester 5</th>
                    <th class="text-center">IP semester 6</th>
                    <th class="text-center">IP semester 7</th>
                    <th class="text-center">IP semester 8</th>
                    <th class="text-center">Jumlah Organisasi atau Pengalaman</th>
                    <th class="text-center">Jumlah Penghargaan</th>
                    <th class="text-center">TOEFL ITP</th>
                    <th class="text-center">TOEFL IBT</th>
                    <th class="text-center">IELTES</th>
                    <th class="text-center">TOEIC</th>
                </tr>
                </thead>
                <tbody id = "pesertaTable">
                @foreach($peserta as $datas)
                    <tr>
                        <td>{{ $datas->id }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->institusi }}</td>
                        <td>{{ $datas->ni_mhs}}</td>
                        <td>{{ $datas->ip_1 }}</td>
                        <td>{{ $datas->ip_2 }}</td>
                        <td>{{ $datas->ip_3 }}</td>
                        <td>{{ $datas->ip_4}}</td>
                        <td>{{ $datas->ip_5 }}</td>
                        <td>{{ $datas->ip_6 }}</td>
                        <td>{{ $datas->ip_7 }}</td>
                        <td>{{ $datas->ip_8}}</td>
                        <td>{{ $datas->keaktifan }}</td>
                        <td>{{ $datas->penghargaan}}</td>
                        <td>{{ $datas->toefel_itp}}</td>
                        <td>{{ $datas->toefel_ibt}}</td>
                        <td>{{ $datas->ielts}}</td>
                        <td>{{ $datas->toeic}}</td>
                        <td>
                            <form action="{{ route('peserta.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('peserta.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <br>
            <br>
            </div>
            <a  class="btn btn-primary btn-lg btn-block" href="{{action('SeleksiController@prosesSeleksi')}}" role = "button">Lakukan Proses Seleksi</a>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
