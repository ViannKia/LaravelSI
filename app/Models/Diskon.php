<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;
    protected $table = 'tbl_diskon';
    protected $primaryKey = "id_diskon" ;
    protected $fillable = [
        'id_diskon', 'id_penukaranpoin', 'total_diskon'];

    public $timestamps = false;
    public $incrementing = false;
}
