<?php 
namespace App\Models;
use CodeIgniter\Model;

class Album_model extends Model{
    protected $table      = 'cd';
    protected $primaryKey = 'id';


    protected $allowedFields = ['artista', 'titulo'];
}
