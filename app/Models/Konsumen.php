<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    protected $table = 'tbl_konsumen';
    protected $primaryKey = "id_konsumen" ;
    protected $fillable = [
        'id_konsumen', 'nama_konsumen', 'alamat', 'no_hp'];

    public $timestamps = false;
    public $incrementing = false;
}
