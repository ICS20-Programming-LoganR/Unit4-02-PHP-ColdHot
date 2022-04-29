<?php
//maximum weather that is considered cold
define(MAX, 0);

	// get the the temperature from the textfield
	$temperature = $_POST['celsius'];

  if ($temperature > MAX){
    echo 'It is warm outside. Leave the jacket and embrace the light breeze.';
  }
  else{
    echo 'It is rather cold outside. Best to bring a jacket and enjoy the warmth that comes with it.';
  }
  ?>