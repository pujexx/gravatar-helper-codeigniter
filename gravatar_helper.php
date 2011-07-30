<?php 

if(!function_exists('gravatar_img')){
	function gravatar_img($email,$width=""){
		$src= trim($email);
		$src = md5(strtolower($src));
		if($width==""){
			$img = "<img src='http://www.gravatar.com/avatar/".$src."' />";
		}
		else {
			$img =  "<img src='http://www.gravatar.com/avatar/".$src."?s=".$width."'/>";
		}
		return $img;
		
	}
}
?>