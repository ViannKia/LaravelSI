<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tbl_barang';
    protected $primaryKey = "id_barang" ;
    protected $fillable = [
        'id_barang', 'merek_barang', 'jumlah_barang', 'kualitas_barang', 'id_distributor'];

    public $timestamps = false;
    public $incrementing = false;
}
