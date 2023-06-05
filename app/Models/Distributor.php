<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $table = 'tbl_distributor';
    protected $primaryKey = "id_distributor" ;
    protected $fillable = [
        'id_distributor', 'nama_distributor', 'no_hp', 'jumlah_barang'];

    public $timestamps = false;
    public $incrementing = false;
}
