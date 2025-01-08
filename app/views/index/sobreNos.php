<h1>sobre nós</h1>
<hr />

<?php

//print_r($this->view->dados);
foreach($this->view->dados as $indice => $info ){
    //echo $valor. '<br />';
    echo '<h1>'.$info['titulo'] .'</h1> - '.$info['descricao'];
    echo '<br />';
}

?>