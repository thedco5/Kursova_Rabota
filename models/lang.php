<?php 
	$lang_file = file_get_contents("../models/languages.json");
	$dict = @json_decode($lang_file, true)[$_GET["lang"]][0];
	if ($dict == null) $dict = @json_decode($lang_file, true)["bg"][0];
?>