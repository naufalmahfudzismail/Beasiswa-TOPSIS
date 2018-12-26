<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';
    protected $fillable = [
		'ipk',
		'keaktifan',
		'penghargaan',
		'toefl_itp',
        'toefl_ibt',
        'ielts',
        'toeic'
	];
}
