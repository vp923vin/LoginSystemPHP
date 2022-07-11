<?php
namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        
    ];
    public function verifyEmail($email){
        $builder = $this->db->table('users');
        $builder->select("id,email,password");
        $builder->where('email', $email);
        
        $result = $builder->get();
        if(count($result->getResultArray()) == 1){
            return $result->getRowArray();
        }else{
            return false;
        }
    }
}
?>