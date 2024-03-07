<?php

$EncryptKey = '';
$EncryptIV = '';


//get method code 
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http://localhost:51186/api/values/abc',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
// ));

// $response = curl_exec($curl);

// curl_close($curl);
 


// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http://localhost:51186/api/GetParameterNew/'.$response,
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;




$EncyKey = '@pn@IGR@m@h@0nl!ne@30444';
$DeptCode = 'IGRDept';

$xml_data = "<?xml version='1.0' encoding='utf-8'?>
<soap:Envelope xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' xmlns:soap='http://schemas.xmlsoap.org/soap/envelope/'>
  <soap:Body>
    <GetParameter xmlns='http://tempuri.org/'>
      <EncyKey>'.$EncyKey.'</EncyKey>
      <DeptCode>'.$DeptCode.'</DeptCode>
    </GetParameter>
  </soap:Body>
</soap:Envelope>";
$URL = "https://testcitizenservices.mahaitgov.in/Dept_Authentication.asmx?op=GetParameter";

$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);


print_r($output);




//Post method 

 // $SoapClient = new SoapClient("https://testcitizenservices.mahaitgov.in/Dept_Authentication.asmx?");
//  $SoapClient = new SoapClient("https://testcitizenservices.mahaitgov.in/Dept_Authentication.asmx?WSDL");

 
//  $params = array(
//    "EncyKey" => '63458359jmfkklfllf8499090',
//     "DeptCode" => "IGRDept", 
//     );
// $xmlResponse = $SoapClient->GetParameter($params); 
// print_r($xmlResponse);
// die;


// $ResponseXML = SimpleTripleDesDecrypt($xmlResponse, $EncryptKey, $EncryptIV);
// function SimpleTripleDesDecrypt(){
//         $key = Encoding.UTF8.GetBytes(strKey);
//         $iv = Encoding.UTF8.GetBytes(striv);
// }

// function StringToByteArray($hex)
// {
//     $NumberChars = $hex.Length;
//     byte[] bytes = new byte[NumberChars / 2];
//     for (int i = 0; i < NumberChars; i += 2)
//     bytes[i / 2] = Convert.ToByte(hex.Substring(i, 2),
//     16); return bytes;
// }

// function ByteArrayToString($ba)
// {
//     $hex = BitConverter.ToString(ba);
//     return hex.Replace("-", "" );
// }


?>