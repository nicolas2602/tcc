<?php

include 'select2.php';

function logMsg( $msg, $level = 'info', $file = 'main.log' )
{
    // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    $levelStr = '';
 
    // verifica o nível do log
    switch ( $level )
    {
        case 'info':
            // nível de informação
            $levelStr = 'INFO';
            break;
 
        case 'warning':
            // nível de aviso
            $levelStr = 'WARNING';
            break;
 
        case 'error':
            // nível de erro
            $levelStr = 'ERROR';
            break;
    }

    date_default_timezone_set('America/Sao_Paulo');
 
    // data atual
    $date = date( 'Y-m-d H:i:s' );
 
    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $msg = sprintf( "[%s] [%s]: %s%s", $date, $levelStr, $msg, PHP_EOL );
 
    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
    
    include 'conexao.php';

    $idReg = $_SESSION['IdRegistro'];

    $sqlInsertLogging=" insert into logging (dateLogging, level, msg, fk_registro) VALUES ('$date', '$levelStr', '$msg', '$idReg');";
    // $sqlInsertLogging="  insert into logging (dateLogging, level, msg, fk_reg) VALUES (now(), 'INFO', 'Testev1', 1);";
    mysqli_query($con, $sqlInsertLogging);

}


?>