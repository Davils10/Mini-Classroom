<?php

class GetInfoCreateAccountStudents
{
	private $defaultValue = null;
	private $firstname = null;
	private $lastname = null;
	private $sex = null;
	private $email = null;
    private $password = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $firstname, string $lastname, string $sex, string $email, string $password)
	{
		$this -> firstname = strip_tags(ucwords($firstname));
		$this -> lastname = strip_tags(ucwords($lastname));
		$this -> sex = strip_tags($sex);
		$this -> email = strip_tags(trim($email));
        $this -> password = $password;
	}

	public function getInfo()
	{
		$infos = array(
			'firstname' => $this -> firstname,
			'lastname' => $this -> lastname,
			'sex' => $this -> sex,
			'email' => $this -> email,
            'password' => $this -> password);
		return $infos;
	}
}

class GetInfoCreateAccountProfessors
{
	private $defaultValue = null;
	private $firstname = null;
	private $lastname = null;
	private $sex = null;
	private $email = null;
    private $password = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $firstname, string $lastname, string $sex, string $email, string $password)
	{
		$this -> firstname = strip_tags(ucwords($firstname));
		$this -> lastname = strip_tags(ucwords($lastname));
		$this -> sex = strip_tags($sex);
		$this -> email = strip_tags(trim($email));
        $this -> password = $password;
	}

	public function getInfo()
	{
		$infos = array(
			'firstname' => $this -> firstname,
			'lastname' => $this -> lastname,
			'sex' => $this -> sex,
			'email' => $this -> email,
            'password' => $this -> password);
		return $infos;
	}
}


class GetInfoLoginStudents
{
	private $defaultValue = null;
	private $email = null;
	private $password = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $email, string $password)
	{
		$this -> email = strip_tags(trim($email));
		$this -> password = strip_tags($password);
	}

	public function getInfo()
	{
		$infos = array(
			'email' => $this -> email,
			'password' => $this -> password);
		return $infos;
	}
}

class GetInfoLoginProfessors
{
	private $defaultValue = null;
	private $email = null;
	private $password = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $email, string $password)
	{
		$this -> email = strip_tags(trim($email));
		$this -> password = strip_tags($password);
	}

	public function getInfo()
	{
		$infos = array(
			'email' => $this -> email,
			'password' => $this -> password);
		return $infos;
	}
}

