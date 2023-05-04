<?php


	/** 
	 *
	 * Get Item array from Database where id is $_POST["item_id"] 
	 * This is an example array.
	 *
	 */ 
    

	$i = [
	"name" => "HC Throne Sofa",
	"desc" => "Important Habbos Only",
	"big_image" => "http://4.bp.blogspot.com/_Y9nDv3F4uew/R4EgXNg4LjI/AAAAAAAAACc/vgJ8TN0bpYM/s320/hc_chair_2.gif"
	];


	echo json_encode($i);