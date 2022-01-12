<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class BarkasModel extends Model
{
    protected $table = 'barkas';
    protected $primaryKey = 'barkas_id';
    protected $createdField = 'barkas_created';
    protected $updatedField = 'barkas_updated';
    protected $useTimestamps = true;
    protected $allowedFields = ['barkas_nama', 'barkas_gambar', 'barkas_harga', 'barkas_desc', 'barkas_pemilik', 'barkas_status', 'barkas_kontak', 'barkas_wa'];
   
}