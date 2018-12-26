<?php

namespace App\Http\Controllers;

use App\Library\ConvertBobot;
use App\Library\Topsis\Topsis;
use App\Model\Bobot;
use App\Model\Peserta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('selection', compact('peserta'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function prosesSeleksi()
    {

        $peserta = DB::table('peserta')->select()->get();

        $b = Bobot::where('bobot_id', '=', 1)->first();

        $kriteria = ['ipk', 'aktif', 'penghargaan', 'toefl_itp', 'toefl_ibt', 'ielts', 'toeic'];

        if (count($peserta) > 2) {

            $convert = new ConvertBobot($peserta);

            $alt = $convert->make();

            foreach ($alt as $key => $v) {

                $alter[$key] = [
                    'id_peserta' => $key + 1,
                    'ipk' => $v[0],
                    'keaktifan' => $v[1],
                    'penghargaan' => $v[2],
                    'toefl_itp' => $v[3],
                    'toefl_ibt' => $v[4],
                    'ielts' => $v[5],
                    'toeic' => $v[6],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

            }
            DB::table('nilai_alternatif')->truncate();
            DB::table('nilai_alternatif')->insert($alter);

            $bobot = [$b->ipk, $b->keaktifan, $b->penghargaan,
                $b->toefel_itp, $b->toefel_ibt, $b->toefel_ielts, $b->toefel_toeic];

            $topsis = new Topsis($kriteria, $alt, $bobot);

            $nilai_topsis = $topsis->make(); // membuat nilai topsis

            foreach ($peserta as $key => $l) {

                $adm[$key] = [
                    'id_peserta' => $l->id,
                    'nilai_topsis' => $nilai_topsis[$key] * 100,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }

            DB::table('result')->truncate();
            DB::table('result')->insert($adm);
            return redirect()->back()->with('alert', 'Peserta sudah di seleksi, lihat di halam dashboard untuk hasil nya !');

        } else {

            return redirect()->back()->with('alert', 'Peserta tidak bisa kurang dari 2 peserta');
        }

    }
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
