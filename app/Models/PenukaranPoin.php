<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenukaranPoin extends Model
{
    use HasFactory;
    protected $table = 'tbl_penukaran_poin';
    protected $primaryKey = 'id_penukaranpoin';
    protected $fillable = [
        'id_penukaranpoin', 'id_poin'];

    public $timestamps = false;
    public $incrementing = false;
}
