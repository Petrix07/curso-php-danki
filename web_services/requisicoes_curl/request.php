<?php
if (isset($_POST['request']) && $_POST['request'] == 'name_return') {
    //die(json_encode(array('resultado' => 'Luiz')));
    die(json_encode(['resultado' => ['nome' => 'Luiz', 'idade' => '20']]));
}
