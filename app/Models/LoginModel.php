<?php
 namespace App\Models;

 use CodeIgniter\Model;

 class LoginModel extends Model
 {
    protected $table = 'login';
    protected $useTimestamp = true;

    public function getLogin($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }


        return $this->where(['slug' => $slug])->first();
    }
 }
 