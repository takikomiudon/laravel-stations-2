<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	use HasFactory;
	protected $fillable = ['movie_id', 'start_time', 'end_time'];
	protected $casts = [
		'start_time' => 'datetime',
		'end_time' => 'datetime',
	];
}
