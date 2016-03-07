<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Dictionary</title>
	<style>
	h3:first-letter
	{
		text-transform: uppercase;
	}
	</style>
</head>
<body>
<h2>Select a term:</h2>
<select id='choice'>
  <option value='ajax'>Ajax</option>
  <option value='button'>Button</option>
  <option value='harry'>Harry</option>
  <option value='load'>Load</option>
  <option value='sesquipedalian'>Sesquipedalian</option>
  <option value='texas'>Texas</option>
  <option value='zaftig'>Zaftig</option>
  <option value='zenzizenzizenzic'>Zenzizenzizenzic</option>
</select>
  
<button id="define">Define</button><br /><br />
<h3><div id="word"></div></h3>
<p id="definition"></p>

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script>

  $('#define').click(function(){
    var word = $('#choice').val();
    $.post('ajax-script.php', {'word':word}, function(result){
		$('#word').html(word);
	    $('#definition').html(result);
    });


  });
</script>
</body>
</html>