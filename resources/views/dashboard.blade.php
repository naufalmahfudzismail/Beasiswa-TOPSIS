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
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif

            <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3>{{DB::table('peserta')->count()}}</h3>

                        <p>Jumlah Peserta</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                    </div>

                  </div>

                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>{{DB::table('result')->max('nilai_topsis')}}</h3>

                        <p>Score Tertinggi</p>
                      </div>
                      <div class="icon">
                            <i class="ion ion-podium"></i>
                          </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3>{{DB::table('result')->min('nilai_topsis')}}</h3>

                        <p>Score terendah</p>
                      </div>
                      <div class="icon">
                            <i class="ion ion-podium"></i>
                          </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><?php echo floatval(DB::table('result')->avg('nilai_topsis')); ?></h3>

                        <p>Score Rata - rata</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-podium"></i>
                      </div>
                    </div>
                  </div>
            <hr>

            <input class="form-control" id="srcData" type="text" placeholder="Search.."> <br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id ="table">
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

            @section('js')
            <script>
              $(function () {
                $('#table').DataTable({
                  'paging'      : true,
                  'lengthChange': false,
                  'searching'   : true,
                  'ordering'    : true,
                  'info'        : true,
                  'autoWidth'   : false
                })
              })
            </script>
            @stop

        </div>
        <!-- /.content -->
    </section>

    <!-- /.main-section -->
@endsection
