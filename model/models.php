<?php
class ConnectToDb
{
    protected function connect_database()
    {
        try
        {
            $database = new PDO('mysql:host=localhost;dbname=miniclassroom; charset=utf8', 'root', 'ratodisoa',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $database;
        }
        catch (PDOException $e)
        {
            die('ERROR : '. $e->getMessage());
        }
    }
}

class CreateAccountStudents extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function remplir_formulaire(array $donnees)
	{
		try
		{
			$database = $this -> connect_database();
			$requete = $database -> prepare('INSERT INTO students(firstname, lastname,  sex, email, password)
				VALUES(:firstname, :lastname, :sex, :email, :password)'); 

            $requete -> execute($donnees);
			
		}
		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}

class CreateAccountProfessors extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function remplir_formulaire(array $donnees)
	{
		try
		{
			$database = $this -> connect_database();
			$requete = $database -> prepare('INSERT INTO professors(firstname, lastname,  sex, email, password)
				VALUES(:firstname, :lastname, :sex, :email, :password)'); 

            $requete -> execute($donnees);
			
		}
		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}

class LoginStudents extends ConnectToDb
{
    private $defaultValue;
    private $email;

    public function __construct(int $nombre)
    {
        $this -> defaultValue = $nombre;
    }

    public function getAllEmail()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> query("SELECT email FROM students");
            return $requete;
        }
        catch(PDOException $e)
        {
            die('ERROR : '.$e -> getMessage());
        }
    }

    public function getKey()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> prepare("SELECT password FROM students WHERE email = :email");
            return $requete;
        }
        catch (PDOException $e)
        {
            die('Erreur : '.$e -> getMessage());
        }
    }
}

class LoginProfessors extends ConnectToDb
{
    private $defaultValue;
    private $email;

    public function __construct(int $nombre)
    {
        $this -> defaultValue = $nombre;
    }

    public function getAllEmail()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> query("SELECT email FROM professors");
            return $requete;
        }
        catch(PDOException $e)
        {
            die('ERROR : '.$e -> getMessage());
        }
    }

    public function getKey()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> prepare("SELECT password FROM professors WHERE email = :email");
            return $requete;
        }
        catch (PDOException $e)
        {
            die('Erreur : '.$e -> getMessage());
        }
    }
}