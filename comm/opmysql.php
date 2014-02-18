<?php 
class db{
	private $host;
	private $name;
	private $pwd;
	private $dbName;
	private $dbms;
	private $dsn;
	private $pdo;
	function __construct($host,$name,$pwd,$dbName,$dbms){
		$this->host=$host;
		$this->name=$name;
		$this->pwd=$pwd;
		$this->dbName=$dbName;
		$this->dbms=$dbms;
		$this->dsn="$dbms:host=$this->host;dbname=$this->dbName";
		$this->connect();
	}
	function connect(){
		$this->pdo=new PDO($this->dsn,$this->name,$this->pwd);
	}
	function query($sql){
		$this->connect();
		$this->result=$this->pdo->prepare($sql);
		$this->result->execute();
	}

	function fetch($sql){                //查询单条数据结果
		$this->query($sql); 
		$res=$this->result->fetch(PDO::FETCH_ASSOC); 
		return $res;
	}
	function fetch_all($sql){           //查询多条数据结果
		$this->query($sql);
		$res=$this->result->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
	function exec($sql){
		$this->connect();
		$res=$this->pdo->exec($sql);
		return $res;
	}
}
$db=new db('localhost','root',"",'db_business','mysql');
?>