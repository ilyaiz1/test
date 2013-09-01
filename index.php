<?php
/*Show PHP Info*/
phpinfo();

/*
* Branch bb-1
* Make search
* @return boolean
*/
function search($input, $search,$case_sencetive=true){
	
	if($case_sencetive){
		return strstr($input,$search);
	}else{
		return stristr($input,$search);
	}

}
?>
