<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmain extends Model
{
protected $table="productmains"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
 public $timestamps= false; 
 protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
 /**
 * The attributes that are mass assignable. *
 * @var array
 */
 protected $fillable = [
    'tittle',
    'content',
    'image'
 ];
}
