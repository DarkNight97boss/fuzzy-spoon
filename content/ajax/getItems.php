<?php


	/** 
	 *
	 * Get array from Database where parent_id is $_POST["items_by_id"] 
	 * This is an example array.
	 *
	 */ 

	$Items = [

	array(
		"id" => 1,
		"parent" => 2,
		"small_image" => "http://habbox.com/cache/rare_values/images/throne.gif"
	),

	array(
    	"id"=> 2,
    	"parent"=> 2,
   	 	"small_image"=> "http://habbox.com/cache/rare_values/images/hblooza_hotdog-small.png"
	),


	];


	echo json_encode($Items);