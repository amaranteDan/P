<?php

if(resolve('/')){
   render('site/home', 'site');

}elseif (resolve('/contato')) {
    render('site/contato', 'site');
}else {
    http_response_code(404);//Codigo para caso de erro mostrar
    echo 'Pagina não encontrada';}