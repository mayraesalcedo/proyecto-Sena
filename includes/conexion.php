<?php
class conexion{
	public static function mysql(){
		$x = new PDO("mysql:host=localhost:3306;dbname=matriz;charset=utf8","root","");
		$x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $x;
	}

	public static function mysql2(){
        $x = new PDO("mysql:host=localhost:3306;dbname=sli;charset=utf8","root","");
        $x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $x;
    }
}
?>