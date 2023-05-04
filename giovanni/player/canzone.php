<?php $canzoni = file_get_contents('http://api.radionomy.com/currentsong.cfm?radiouid=1c230644-df8e-418a-a285-6feed7101a65&apikey=f68587f4-6229-4973-b087-086076ca75fa&callmeback=no&type=string&cover=no&previous=no',TRUE); 

echo $canzoni?>