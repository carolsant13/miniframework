<h1>index</h1>
<hr />

<?php

//print_r($this->view->dados);
foreach($this->view->dados as $indice => $produto ){
    //echo $valor. '<br />';
    echo $produto['id'] .'-'.$produto['descricao'].'-'. $produto['preco'];
    echo '<br />';
}

?>