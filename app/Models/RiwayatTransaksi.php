<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksi extends Model
{
    use HasFactory;
    protected $table = 'tbl_riwayat_transaksi';
    protected $primaryKey = 'id_riwayat_transaksi';
    protected $fillable = [
        'id_riwayat_transaksi', 'id_transaksi'];

    public $timestamps = false;
    public $incrementing = false;
}
