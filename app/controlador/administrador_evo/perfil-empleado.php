<?php
if($peticion[1]!=''){
    $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(['return'=>1])."js/preferencias-empleado.js?d=".date('U')]);
    $url_marco="preferencias-empleado.php";
    $data=[
        "carga_centro"=>$carga_centro,
        "perfiles"=>$perfiles,
        "user_id"=>$idUsuario,
        "id_perfil"=>$peticion[1],
        "licencia_evolution"=>$licencia_evolution,
    ];
}