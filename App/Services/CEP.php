<?php 
/*
 * Funçao feita para poder pegar as informaçoes e endereço do cliente;
 * Rua, Cidade, Estado etc;
 */
function get_infor_Cep ($cep){

    $endpoint  = "https://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($endpoint);
    $info = json_decode($json, true);
    return $info;
}
