<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("user_model", "user");
		$this->load->model("vote_model", "vote");
		$this->load->model("champion_model", "champion");
	}

	public function index()
	{
		$date = new DateTime();
		$week = intval($date->format("W"));
		$votes = $this->vote->getWeek($week);

		$data = ['page' => 'home/home'];

		//Processo os votos da semana, caso houver
		if ($votes)
		{
			$weeks = [];

			foreach ($votes as $vt)
			{
				if (!in_array($vt->week, $weeks))
				{
					$weeks[] = $vt->week;
					$champion = $this->vote->getChampionWeek($vt->week);
					
					$dt = [
						'user_id' => $champion[0]->user_id,
						'week' => $vt->week,
						'date' => $vt->date
					];

					$this->champion->insert($dt);
					$this->vote->updateVoteWeek($vt->week);
					
				}
			}
		}

		//Rei menos amado limit 5
		$lessLoved = $this->vote->lessLoved($week);

		if ($lessLoved)
		{
			foreach ($lessLoved as $less)
			{
				$userr = $this->user->getById($less->user_id);
				$data['lessLoved'][] = $userr[0];
			}
		}

		$hourMin = strtotime("12:01:00");
		$hourMax = strtotime("23:59:59");
		$hourCurrent = strtotime("now");
		
		if ( ($hourMin <= $hourCurrent) && ($hourMax >= $hourCurrent) )
		{
			$userDay = $this->vote->getChampionDay();

			if ($userDay)
			{
				$us = $this->user->getById($userDay[0]->user_id);
				$data['userDay'] = $us[0];
			}
		}
		
		$hourMin = strtotime("10:00:00");
		$hourMax = strtotime("12:00:00");

		if ( ($hourMin <= $hourCurrent) && ($hourMax >= $hourCurrent) )
		{

			$users = $this->user->getAll();
			$data['users'] = $users;
		}


		
		$this->load->view('layout', $data);
	}

}
