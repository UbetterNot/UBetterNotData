<?php

header('Content-Type: application/json');
$request = file_get_contents('https://discordapp.com/api/webhooks/454293701842436116/LpXNaXvEOprpewlFXOs2jnhBWqdWA98icCS8nv-j5EDduhkz8A1ClUrqPY-JKN9_b8Wd');
$req_dump = print_r( $request, true );
$fp = file_put_contents( '[fname]', $req_dump );
?
