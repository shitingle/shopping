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
public	function connect(){
		$this->pdo=new PDO($this->dsn,$this->name,$this->pwd);
		$this->pdo->query("set names utf8");
	}
public	function query($sql){
		$this->connect();
		$this->result=$this->pdo->prepare($sql);
		$this->result->execute();
	}

public	function fetch($sql){                //查询单条数据结果
		$this->query($sql); 
		$res=$this->result->fetch(PDO::FETCH_ASSOC); 
		return $res;
	}
public	function fetch_all($sql){           //查询多条数据结果
		$this->query($sql);
		$res=$this->result->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
public	function exec($sql){               //增删改查，并返回受影响的行数;
		$this->connect();                
		$res=$this->pdo->exec($sql);
		return $res;
	}
public 	function select($sql){
	    $this->query($sql);
	    $rowcount=$this->result->rowCount();
	    return $rowcount;
} 
}
$db=new db('localhost','root',"",'db_business','mysql');
?>