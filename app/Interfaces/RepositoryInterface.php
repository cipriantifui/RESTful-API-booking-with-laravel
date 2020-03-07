<?php

namespace App\Interfaces;

interface RepositoryInterface
{

	public function get($type, $value);

	public function getAll($order = null, $limit = null);

}