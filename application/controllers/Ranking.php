<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("champion_model", "champion");
		$this->load->model("user_model", "user");
	}

	public function index()
	{
		$data = ['page' => 'ranking/home'];

		$champion = $this->champion->getAll('desc');
		
		if ($champion)
		{
			foreach($champion as $ch)
			{
				$user = $this->user->getById($ch->user_id);
				$week = $this->get_inicio_fim_semana($ch->date);
				
				$res = (Object)[
					'name' => $user[0]->name,
					'date' => date('d/m/Y', strtotime($week[0])).' - '.date('d/m/Y', strtotime($week[1]))
				];
				
				$data['ranking'][] = $res;
			}
		}
		$this->load->view('layout', $data);
	}

	public function get_inicio_fim_semana($date, $numero_semana = "", $ano = "")
	{
		/* soma o número de semanas em cima do início do ano 01/01/2013 */
		$data = strtotime($date);

		/*
		pega o número do dia da semana
		0 - Domingo
		...
		6 - Sábado
		*/
		$dia_semana = date('w', $data);
		
		/*
		diminui o dia da semana sobre o dia da semana atual
		ex.: $semana_atual: 10/09/2013 terça-feira
		$dia_semana: 2 (terça-feira)
		$data_inicio_semana: 08/09/2013
		*/
		$data_inicio_semana = strtotime('-'.$dia_semana.' days', $data);
		
		/* Data início semana */
		$primeiro_dia_semana = date('Y-m-d', $data_inicio_semana);
		
		/* Soma 6 dias */
		$ultimo_dia_semana = date('Y-m-d', strtotime('+6 days', strtotime($primeiro_dia_semana)));

		/* retorna */
		return array($primeiro_dia_semana, $ultimo_dia_semana);
	}
}
