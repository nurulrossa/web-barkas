<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    /*protected $createdField = 'ad_created';
    protected $updatedField = 'ad_updated';
    protected $useTimestamps = true;*/
    protected $allowedFields = ['admin_nama', 'admin_username', 'admin_pass'];
   
}