<?php

include './configuracao.php';

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$DadosArray["email"]=EMAIL_PAGSEGURO;
$DadosArray["token"]=TOKEN_PAGSEGURO;

$DadosArray['paymentMode'] = 'default';
$DadosArray['paymentMethod'] = $Dados['paymentMethod'];
//$DadosArray['receiverEmail'] = $Dados['receiverEmail'];
$DadosArray['receiverEmail'] = EMAIL_LOJA;
$DadosArray['currency'] = $Dados['currency'];
$DadosArray['extraAmount'] = $Dados['extraAmount'];
$DadosArray['itemId1'] = $Dados['itemId1'];
$DadosArray['itemDescription1'] = $Dados['itemDescription1'];
$DadosArray['itemAmount1'] = $Dados['itemAmount1'];
$DadosArray['itemQuantity1'] = $Dados['itemQuantity1'];
$DadosArray['notificationURL'] = URL_NOTIFICACAO;
$DadosArray['reference'] = $Dados['reference'];
$DadosArray['senderName'] = $Dados['senderName'];
$DadosArray['senderCPF'] = $Dados['senderCPF'];
$DadosArray['senderAreaCode'] = $Dados['senderAreaCode'];
$DadosArray['senderPhone'] = $Dados['senderPhone'];
$DadosArray['senderEmail'] = $Dados['senderEmail'];
$DadosArray['senderHash'] = $Dados['hashCartao'];
$DadosArray['shippingAddressRequired'] = $Dados['shippingAddressRequired'];
$DadosArray['shippingAddressStreet'] = $Dados['shippingAddressStreet'];
$DadosArray['shippingAddressNumber'] = $Dados['shippingAddressNumber'];
$DadosArray['shippingAddressComplement'] = $Dados['shippingAddressComplement'];
$DadosArray['shippingAddressDistrict'] = $Dados['shippingAddressDistrict'];
$DadosArray['shippingAddressPostalCode'] = $Dados['shippingAddressPostalCode'];
$DadosArray['shippingAddressCity'] = $Dados['shippingAddressCity'];
$DadosArray['shippingAddressState'] = $Dados['shippingAddressState'];
$DadosArray['shippingAddressCountry'] = $Dados['shippingAddressCountry'];
$DadosArray['shippingType'] = $Dados['shippingType'];
$DadosArray['shippingCost'] = $Dados['shippingCost'];
$DadosArray['creditCardToken'] = $Dados['tokenCartao'];
$DadosArray['installmentQuantity'] = $Dados['qntParcelas'];
$DadosArray['installmentValue'] = $Dados['valorParcelas'];
$DadosArray['noInterestInstallmentQuantity'] = $Dados['noIntInstalQuantity'];
$DadosArray['creditCardHolderName'] = $Dados['creditCardHolderName'];
$DadosArray['creditCardHolderCPF'] = $Dados['creditCardHolderCPF'];
$DadosArray['creditCardHolderBirthDate'] = $Dados['creditCardHolderBirthDate'];
$DadosArray['creditCardHolderAreaCode'] = $Dados['senderAreaCode'];
$DadosArray['creditCardHolderPhone'] = $Dados['senderPhone'];
$DadosArray['billingAddressStreet'] = $Dados['billingAddressStreet'];
$DadosArray['billingAddressNumber'] = $Dados['billingAddressNumber'];
$DadosArray['billingAddressComplement'] = $Dados['billingAddressComplement'];
$DadosArray['billingAddressDistrict'] = $Dados['billingAddressDistrict'];
$DadosArray['billingAddressPostalCode'] = $Dados['billingAddressPostalCode'];
$DadosArray['billingAddressCity'] = $Dados['billingAddressCity'];
$DadosArray['billingAddressState'] = $Dados['billingAddressState'];
$DadosArray['billingAddressCountry'] = $Dados['billingAddressCountry'];

$buildQuery = http_build_query($DadosArray);
$url = URL_PAGSEGURO . "transactions";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $buildQuery);
$retorno = curl_exec($curl);
curl_close($curl);
$xml = simplexml_load_string($retorno);


$retorna = ['erro' => true, 'dados' => $xml];
header('Content-Type: application/json');
echo json_encode($retorna);
