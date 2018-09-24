<?php
class Employee_Model extends CI_Model 
{
	function saverecords($name,$email,$pass,$mobile)
	{
	$query="insert into user values('','$name','$email','$pass','$mobile')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from user");
	return $query->result();
	}
}