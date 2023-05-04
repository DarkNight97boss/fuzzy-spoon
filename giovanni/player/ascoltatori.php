<?php $ascoltatorion = file_get_contents('http://api.radionomy.com/currentaudience.cfm?radiouid=1c230644-df8e-418a-a285-6feed7101a65&apikey=f68587f4-6229-4973-b087-086076ca75fa&type=string',TRUE);

echo "$ascoltatorion ascoltatori"?>