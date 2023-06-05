<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $table = 'tbl_saran';
    protected $primaryKey = 'id_saran';
    protected $fillable = [
        'id_saran', 'saran'];

    public $timestamps = false;
    public $incrementing = false;
}
