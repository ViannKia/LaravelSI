<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'tbl_pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'id_pembelian', 'id_pembeli', 'id_barang','id_admin', 'jumlah_barang'];

    public $timestamps = false;
    public $incrementing = false;
}
