<?php
	$terms = array(
		"ajax"=>"a Greek hero in the Trojan War who rescued the body of Achilles and killed himself out of jealousy when Odysseus was awarded the armor of Achilles.",
		"button"=>"a small disk, knob, or the like for sewing or otherwise attaching to an article, as of clothing, serving as a fastening when passed through a buttonhole or loop.",
		"load"=>"anything put in or on something for conveyance or transportation; freight; cargo.", 
		"zenzizenzizenzic"=>"the eighth power of a number",
		"harry" => "to make a pillaging or destructive raid on : assault",
		"zaftig"=> "having a full rounded figure : pleasingly plump",
		"texas"=> "the uppermost deck of an inland or western river steamer for the accommodation of officers.",
		"sesquipedalian" => "given to using long words."
	);
	
	$word = $_POST['word'];
	$result = "<p>" . $terms[$word] . "</p>";
	echo $result;
?>