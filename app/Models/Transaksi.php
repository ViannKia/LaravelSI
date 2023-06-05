<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_transaksi', 'id_pembelian', 'id_admin','tanggal_transaksi', 'jenis_transaksi', 'total_transaksi', 'poin_transaksi'];

    public $timestamps = false;
    public $incrementing = false;
}
