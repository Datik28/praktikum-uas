<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kosmetik extends Model
{
 protected $table = "tb_kosmetik";

 protected $primaryKey = 'kosmetik_id';

 protected $fillable = ['kosmetik_kode', 'kosmetik_nama',
 'kosmetik_merk', 'kosmetik_harga'];

}
