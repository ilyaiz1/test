<?php
/*Show PHP Info*/
phpinfo();

/*
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
