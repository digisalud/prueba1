<?php

	$version=$_GET["version"];
	$observacion=$_GET["observacion"];
	
	$objeto_versiones->nueva_version($version,$observacion);

?>
