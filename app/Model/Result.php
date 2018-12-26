<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'result';
    protected $guarded =['id'];
    protected $fillable = [
		'id_peserta',
		'nilai_topsis',
	];
}
