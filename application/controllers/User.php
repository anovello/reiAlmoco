<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model("user_model", "user");
	}

	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$error['status'] = true;

			$config = [
				'upload_path' => './public/files/',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'encrypt_name' => TRUE
			];

			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload('file'))
			{
				$error['message'] = $this->upload->display_errors();
				$error['status'] = false;
			} else {

				$data = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'photo' => 'public/files/'.$this->upload->data('file_name')
				];

				if ( $this->user->insert($data) )
				{
					$error['message'] = 'Participante cadastrado com sucesso.';
					$error['status'] = true;
				}else {
					$error['message'] = 'Erro ao inserir no banco, tente novamente.';
					$error['status'] = false;
				}
			}
				
			echo json_encode($error);
			
		} else {
			$data = ['page' => 'user/create'];
			$this->load->view('layout', $data);
		}
		
	}

	public function getMail()
	{
		$mail = $this->input->get('email');
	
		if ($mail !== NULL && trim($mail) !== '' )
		{
			$user = $this->user->getMail(trim($mail));

			if ($user)
			{
				echo 1;
			} else {
				echo 0;
			}
		}
	}
}
