<h2>Qual o meu IP?</h2>

<?php
    
    $ip = new Trabalho();
    $ip = $ip->get_client_ip();

    echo "<p>".$ip."</p>";

?>