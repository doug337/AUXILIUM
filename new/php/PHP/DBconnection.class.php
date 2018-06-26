<?php


class DBconnection {
	
	var $conn;
	
		function DBconnection()
		{
			$this->conn = pg_connect("host='localhost' port='5432' dbname='Axe' user='postgres' password='123123' ")
			or die ("unable to connect database");
			
		}
}
?>