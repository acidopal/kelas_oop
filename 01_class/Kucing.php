<?php

/**
* 
*/
class Kucing extends IbuKucing
{
	
	private $istriKucing;

	private $namaKucing;

	function __construct($nama, $istri)
	{
		$this->namaKucing = $nama;
		$this->istriKucing = $istri;
	}

	public function makan()
	{
		return 'makan';
	}

	public function getAyahKucing()
	{
		return $this->ayah;
	}

	public function getIstriKucing()
	{
		return $this->istriKucing;
	}

	public function getNamaKucing()
	{
		return $this->namaKucing;
	}
}