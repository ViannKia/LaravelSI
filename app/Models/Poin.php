<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;  protected $table = 'tbl_poin';
    protected $primaryKey = 'id_poin';
    protected $fillable = [
        'id_poin', 'id_transaksi', 'poin_transaksi', 'total_poin'];

    public $timestamps = false;
    public $incrementing = false;
}
