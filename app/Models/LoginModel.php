<?php
 namespace App\Models;

 use CodeIgniter\Model;

 class LoginModel extends Model
 {
    
    private $_table = "tb_user";
    const SESSION_KEY = 'id' ;

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[255]'  
            ]
            ];
    }

    public function login($username, $password)
	{
		$this->tb_user->where($username)->or_where('username', $username);
		$query = $this->->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah password-nya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->$_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}


 }
 ?>
 