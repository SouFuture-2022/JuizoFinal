<?php

//Necessário testar em dominio com SSL

define("URL", "http://localhost/proc/");


$sandbox = false;
if ($sandbox) {
    //Credenciais do SandBox
    define("EMAIL_PAGSEGURO", "aniel.lenno2@gmail.como");
    define("TOKEN_PAGSEGURO", "B766E0E3EC7F432A8CA97DBAD368F258");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "empresatestpjse@gmail.com");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://sualoja.com.br/notifica.html");
} else {
    //Credenciais do PagSeguro
    define("EMAIL_PAGSEGURO", "aniel.lenno2@gmail.com");
    define("TOKEN_PAGSEGURO", "a5244684-4bb8-43d4-8ce3-2128725688eb55a2c49d4a698174958f75aed4f0c051f043-cad8-402c-b59b-6cf7d2d2d84b");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "empresatestpjse@gmail.com");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://sualoja.com.br/notifica.html");
}




