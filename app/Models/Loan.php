<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'amount', 'interest_rate', 'term', 'issued_at', 'status',
];
}