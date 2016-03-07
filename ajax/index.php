<body>

<h2>Select a term:</h2>
  <select id='choice'>
  <option value='ajax'>Ajax</option>
  <option value='button'>Button</option>
  <option value='load'>Load</option>
  <option value='texas'>Texas</option>
  <option value='zenzizenzizenzic'>Zenzizenzizenzic</option>
  <option value='harry'>Harry</option>
  <option value='zaftig'>Zaftig</option>
  <option value='sesquipedalian'>Sesquipedalian</option>
</select>
  
<button>Define</button><br /><br />
<h3><div id="word"></div></h3>
</body>
</html>

<p id="definition"></p>

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script>

  $(button).click(function(){
    var word = $('select').val();
    $.post('ajax-script.php', {'word':word}, function(result){
		$('#word').html(word);
	    $('#definition').html(result);
    });


  });
</script>
