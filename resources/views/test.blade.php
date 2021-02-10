<?php




if(count($portadas) > 0 )
{
	for ( $p=0; count($portadas) > $p ; $p++ ) 
	{

		echo $portadas[$p]->titulo ."<br>";


	}	

}

?>