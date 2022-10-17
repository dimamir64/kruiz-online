<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Provider_model $provider_model
 */
class Provider extends CI_Controller
{
	public function getWithoutCruises(): void
	{
		$this->load->model('provider_model');

		$data['providers'] = $this->provider_model->getWithoutCruises();

		$this->load->view('providers', $data);
	}
}
