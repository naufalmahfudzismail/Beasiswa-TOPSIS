<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Peserta;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function storeImage(Request $request)
    {
    	$imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
    	return response()->json(['uploaded' => '/upload/'.$imageName]);
    }

    public function registrasi(Request $request){

        $this->validate($request, [

            'nama' => 'required',
            'institusi' => 'required',
            'ktm' => 'required',
            'ip1' => 'required',
            'ip2' => 'required',
            'ip3' => 'required',
            'ip4' => 'required',
            'ip5' => 'required',
            'ip6' => 'required',
            'ip7' => 'required',
            'ip8' => 'required',
            'pengalaman' => 'required',
            'penghargaan' => 'required',
            'toefl_itp' => 'required',
            'toefl_ibt' => 'required',
            'ielts' => 'required',
            'toeic' => 'required'
        ]);

        if($request->ip1 > 4 ||$request->ip2 > 4 || $request->ip3 > 4 || $request->ip4 > 4 || $request->ip5 > 4|| $request->ip6 > 4 || $request->ip7 > 4|| $request->ip8 > 4){

            return redirect()->back()->with('alert', 'Nilai IP kamu tidak valid');
        }

        else{
                $data = new Peserta();
                $data->nama = $request->nama;
                $data->institusi = $request->institusi;
                $data->ni_mhs = $request->ktm;
                $data->ip_1 = $request->ip1;
                $data->ip_2 = $request->ip2;
                $data->ip_3 = $request->ip3;
                $data->ip_4 = $request->ip4;
                $data->ip_5 = $request->ip5;
                $data->ip_6 = $request->ip6;
                $data->ip_7 = $request->ip7;
                $data->ip_8 = $request->ip8;
                $data->keaktifan = $request->pengalaman;
                $data->penghargaan = $request->penghargaan;
                $data->toefel_itp = $request->toefl_itp;
                $data->toefel_ibt = $request->toefl_ibt;
                $data->ielts = $request->ielts;
                $data->toeic = $request->toeic;
                $data->save();

                return redirect('seleksi')->with('alert-success', 'Data kamu berhasil disimpan, Liat data kamu');
        }
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
