<?php
/*Show PHP Info*/
phpinfo();

/*
* Make search
* @return boolean
*/
function search($input, $search){
	
	return strstr($input,$search);
}
?>
