<?php
/*
Copyright (c) 2016 Chawit Wiriyakun
*/
Class GetPost{
public function ConvertALLKeyToLOWER(){
	$_GET = array_change_key_case($_GET, CASE_LOWER);
	$_POST = array_change_key_case($_POST, CASE_LOWER);
}
public function ConvertALLKeyToUPPER(){
	$_GET = array_change_key_case($_GET, CASE_UPPER);
	$_POST = array_change_key_case($_POST, CASE_UPPER);
}
public function ConvertManual($GETWant,$POSTWant){
	$GETWant=strtolower($GETWant);
	$POSTWant=strtolower($POSTWant);
	if($GETWant=="upper"){
	$_GET = array_change_key_case($_GET, CASE_UPPER);	
	}else{
	$_GET = array_change_key_case($_GET, CASE_LOWER);				
	}
	if($POSTWant=="lower"){
	$_POST = array_change_key_case($_POST, CASE_LOWER);	
	}else{
	$_POST = array_change_key_case($_POST, CASE_UPPER);				
	}
}
public static function SearchGET($key)
{
	$key=strtolower($key);
  	$GETVault=$_GET;
	$GETVault = array_change_key_case($GETVault, CASE_LOWER);	
    if(isset($GETVault[$key]))
        {
		return $GETVault[$key];
	}
	else
	{		
		return "";
	}		
}
public  static function SearchPOST($key)
{
	$key=strtolower($key);
  	$POSTVault=$_POST;
	$POSTVault = array_change_key_case($POSTVault, CASE_LOWER);	
    if(isset($POSTVault[$key])){
		return $POSTVault[$key];
	}
	else
	{		
		return "";
	}		
}
}
?>
