<?php

/**
 * @property CI_DB_query_builder $db
 */
class Provider_model extends CI_Model
{
	public function getWithoutCruises(): array
	{
		return $this->db
			->select('providers.*')
			->from('providers')
			->join('cruis', 'cruis.provider_id = providers.id', 'left')
			->where('cruis.provider_id IS NULL', null, false)
			->get()
			->result_array();
	}
}
