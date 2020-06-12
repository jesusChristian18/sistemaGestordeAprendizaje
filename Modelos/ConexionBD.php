<?php

class ConexionBD{
	public function cBD(){
		$bd = new PDO("mysql:host=localhost;dbname=sistemagestion", "root", "123456789");

		$bd ->exec("set names utf8");

		return $bd;
	}
}