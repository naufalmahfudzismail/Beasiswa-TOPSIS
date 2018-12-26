<?php

namespace App\Library;
use App\Peserta;
use DateTime;

class ConvertBobot
{

    public $peserta;


    public function __construct($peserta)
    {

        $this->peserta = $peserta;

    }

    public function make()
    {
        $i = 0;

        foreach ($this->peserta as $key => $peserta) {

            $ipk = [ $peserta->ip_1, $peserta->ip_2,
                    $peserta->ip_3, $peserta->ip_4,
                    $peserta->ip_5, $peserta->ip_6,
                    $peserta->ip_7, $peserta->ip_8 ];

            $data[$i][0] = $this->ipk($ipk);
            $data[$i][1] = $this->pengalaman($peserta->keaktifan);
            $data[$i][2] = $this->penghargaan($peserta->penghargaan);
            $data[$i][3] = $this->toeflItp($peserta->toefel_itp);
            $data[$i][4] = $this->toeflIbt($peserta->toefel_ibt);
            $data[$i][5] = $this->ielts($peserta->ielts);
            $data[$i][6] = $this->toeic($peserta->toeic);

            $i++;

        }

        return $data;
    }


    public function gradientIPK($ipk)
    {

        $gagal = false;

        for( $i = 0; $i < sizeof($ipk); $i++){

            if($ipk[$i] < 3){
                $gagal  = true;
            }
        }

        $gradientTahun1 = $ipk[1] - $ipk[0];
        $gradientTahun2 = $ipk[3] - $ipk[2];
        $gradientTahun3 = $ipk[5] - $ipk[4];
        $gradientTahun4 = $ipk[7] - $ipk[6];
        $totalGradient = ($gradientTahun1 + $gradientTahun2 + $gradientTahun3 + $gradientTahun4) / 4;

        if($gagal == false) return $totalGradient * 100;
        else return null;
    }

    public function ipk($ipk)
    {

        $gradIPK = $this->gradientIPK($ipk);
        $v = 0;

        $point = [
            0=> ['bawah' => null,'atas'=> null],
            1=> ['bawah' => -100,'atas'=> -51],
            2=> ['bawah' => -50,'atas'=>-1],
            3=> ['bawah' => 0,'atas'=>0],
            4=> ['bawah' => 1,'atas'=>50],
            5=> ['bawah' => 51,'atas'=>100],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($gradIPK>=$value['bawah'] and $gradIPK<= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

    public function pengalaman($pengalaman)
    {
        $v = 0;

        $point = [
            0=> ['bawah' => 0,'atas'=> 0],
            1=> ['bawah' => 1,'atas'=> 2],
            2=> ['bawah' => 3,'atas'=> 3],
            3=> ['bawah' => 4,'atas'=> 5],
            4=> ['bawah' => 6,'atas'=> 6],
            5=> ['bawah' => 7,'atas'=>100],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($pengalaman >= $value['bawah'] and $pengalaman <= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;
    }

    public function penghargaan($penghargaan)
    {
        $v = 0;

        $point = [
            0=> ['bawah' => 0,'atas'=> 0],
            1=> ['bawah' => 1,'atas'=> 1],
            2=> ['bawah' => 2,'atas'=> 2],
            3=> ['bawah' => 3,'atas'=> 3],
            4=> ['bawah' => 4,'atas'=> 4],
            5=> ['bawah' => 5,'atas'=>100],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($penghargaan>=$value['bawah'] and $penghargaan<= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

    public function toeflItp($toefl_itp){

        $v = 0;

        $point = [
            0=> ['bawah' => 0,'atas'=> 499],
            1=> ['bawah' => 500,'atas'=> 505],
            2=> ['bawah' => 506,'atas'=> 510],
            3=> ['bawah' => 511,'atas'=> 515],
            4=> ['bawah' => 516,'atas'=> 524],
            5=> ['bawah' => 525,'atas'=> 1000],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($toefl_itp>=$value['bawah'] and $toefl_itp<= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

    public function toeflIbt($toefl_ibt){

        $v = 0;

        $point = [
            0=> ['bawah' => 0,'atas'=> 60],
            1=> ['bawah' => 61,'atas'=> 79],
            2=> ['bawah' => 80,'atas'=> 89],
            3=> ['bawah' => 90,'atas'=> 94],
            4=> ['bawah' => 95,'atas'=> 110],
            5=> ['bawah' => 111,'atas'=> 1000],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($toefl_ibt>=$value['bawah'] and $toefl_ibt<= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

    public function ielts($ielts){

        $v = 0;

        $point = [
            0=> ['bawah' => 1,'atas'=> 2],
            1=> ['bawah' => 3,'atas'=> 4],
            2=> ['bawah' => 5,'atas'=> 6],
            4=> ['bawah' => 7,'atas'=> 7],
            5=> ['bawah' => 8,'atas'=> 9],
           ];

           $v = 1;
           foreach ($point as $key => $value) {

               if($ielts>=$value['bawah'] and $ielts<= $value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

    public function toeic($toeic){

        $v = 0;

        $point = [
            0=> ['bawah' => 0,'atas'=> 649],
            1=> ['bawah' => 650 ,'atas'=> 675],
            2=> ['bawah' => 676,'atas'=> 700],
            3=> ['bawah' => 701,'atas'=> 725],
            4=> ['bawah' => 726,'atas'=> 800],
            5=> ['bawah' => 801,'atas'=> 1000],
           ];

           $v = 1;
           foreach ($point as $key => $value) {
               if($toeic>=$value['bawah'] and $toeic<=$value['atas']){
                   $v = $key;
               }
           }

           return $v ;

    }

}
