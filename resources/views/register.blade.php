@extends('base')
@section('content')

<section class="main-section">
    <div class="container">
            <h2>Daftar Beasiswa </h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registrasiPeserta') }}"  method="POST">
                {{ csrf_field() }}
                <br>
                <h3>Biodata </h3>
                <br>
                <div class="form-group">
                    <label for="name">Nama   :</label>
                    <input type="text" class="form-control" id="nama" name = "nama">
                </div>
                <div class="form-group">
                    <label for="pins">Institusi :</label>
                    <input type="text" class="form-control" id="institusi" name= "institusi">
                </div>
                <div class="form-group">
                    <label for="pins">Nomor Kartu tanda Mahasiswa</label>
                    <input type="text" class="form-control" id="ktm" name = "ktm">
                </div>
                <br>
                <h3>Score Index Prestasi per semester </h3>
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label for="ex1">IP Semester 1</label>
                        <input class="form-control" id="ip1" name ="ip1" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex2">IP Semester 3</label>
                        <input class="form-control" id="ip3" name ="ip3" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex3">IP Semester 5</label>
                        <input class="form-control" id="ip5" name ="ip5" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                            <label for="ex3">IP Semester 7</label>
                            <input class="form-control" id="ip7" name ="ip7" type="number" step="0.001">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label for="ex1">IP Semester 2</label>
                        <input class="form-control" id="ip2" name ="ip2" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex2">IP Semester 4</label>
                        <input class="form-control" id="ip4" name ="ip4" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex3">IP Semester 6</label>
                        <input class="form-control" id="ip6" name ="ip6" type="number" step="0.001">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex3">IP Semester 8</label>
                        <input class="form-control" id="ip8" name ="ip8" type="number" step="0.001">
                    </div>
                </div>
                <br>
                <h3>Keaktifan </h3>
                <br>
                <div class="form-group">
                    <label for="pins">Jumlah pengalaman  :</label>
                    <input class="form-control" type="number" id="pengalaman" name ="pengalaman">
                    <!--<div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 col-11 input-image">
                            <h2 class="text-center text-danger">Upload Setifikat pengalaman</h2><br>

                                <div class="form-group">
                                    <div class="file-loading">
                                        <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="form-group">
                    <label for="pins">Jumlah Penghargaan :</label>
                    <input  class="form-control" type="number" id="penghargaan" name ="penghargaan" >
                    <!--<div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 col-11 input-image">
                            <h2 class="text-center text-danger">Upload Setifikat Organisasi</h2><br>

                                <div class="form-group">
                                    <div class="file-loading">
                                        <input id="file-2" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <br>
                <h3>Score Bahasa Asing</h3>
                <br>
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label for="ex1">Score TOEFL ITP</label>
                        <input class="form-control"  id="teofl_itp" name ="toefl_itp" type="number">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex2">Score IELTS</label>
                        <input class="form-control" id="ielts" name ="ielts" type="number">
                    </div>
                    <div class="col-xs-3">
                        <label for="ex3">Score TOEFL Ibt</label>
                        <input class="form-control" id="teofl_ibt" name ="toefl_ibt" type="number">
                    </div>
                    <div class="col-xs-3">
                            <label for="ex3">Score TOEIC</label>
                            <input class="form-control" id="toeic" name = "toeic" type="number">
                    </div>
                </div>
                <br>
                <br>
                <div class="container text-center">
                        <button type="submit" class="btn-lg btn-md btn-primary">Daftar</button>
                        <button type="reset" class="btn-lg btn-md btn-danger">Reset</button>
                </div>
            </form>
            <br>
            <br>
    </div>
</section>
@endsection
