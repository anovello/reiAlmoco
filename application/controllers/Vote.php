<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // $this->load->model("user_model", "user");
        $this->load->model("vote_model", "vote");
	}

	public function insert()
	{        
        if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
            $hourMin = strtotime("10:00:00");
            $hourMax = strtotime("12:00:00");
            $hourCurrent = strtotime("now");
            $date = new DateTime();
            
            if ( ($hourMin <= $hourCurrent) && ($hourMax >= $hourCurrent) )
            {
                $data = [
                    'user_id' => $this->input->post('id'),
                    'date' => $date->format('Y-m-d H:i:s'),
                    'week' => $date->format("W"),
                    'status' => '0'
                ];
                
                if ($this->vote->insert($data))
                {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Voto inserido com sucesso!'
                    ]);
                }else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Falha ao tentar salvar o voto!'
                    ]);
                }
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Fora do horário de votação!'
                ]);
            }
        }
    }

}
