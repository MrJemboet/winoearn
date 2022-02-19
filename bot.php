?><?php
error_reporting(0);
$n = "\n";$n2 = "\n\n";$t = "\t";
$r= "\r                                                              \r";
/* START COLOR */
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
include("cfg.php");
system("clear");
echo "\n";
bn2();

function n(){echo"\n";}function n2(){n().n();}function r(){echo"\r                                      \r";}function wr($A){echo col($A,5);}function sr(){sleep(2);r();}function c(){system('clear');}function res($A,$B){echo an(col($A,$B));}function an($input){$A=str_split($input); foreach ($A as $B){echo $B; usleep(1500);}}function col($str,$color){if($color==5){$color=['rw','ry','rt','rg','rr','rp1','rp2'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>" \033[107m\033[1;31m",'rt'=>" \033[106m\033[1;31m",'ht'=>" \033[0;30m",'p3'=>"\033[1;37m",'p'=>" \033[1;37m",'a'=>" \033[1;30m",'m'=>" \033[1;31m",'h'=>" \033[1;32m",'k'=>" \033[1;33m",'b'=>" \033[1;34m",'u'=>" \033[1;35m",'c'=>" \033[1;36m",'rr'=>" \033[101m\033[1;37m",'rg'=>" \033[102m\033[1;34m",'ry'=>" \033[103m\033[1;30m",'rp1'=>" \033[104m\033[1;37m",'rp2'=>" \033[105m\033[1;37m");return $war[$color].$str."\033[0m";}function tmr($tmr){$timr=time()+$tmr;while(true):r();$res=$timr-time(); if($res < 1){break;}echo col(date(' i:s ',$res),5);sleep(1);endwhile;}function web($url){$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);return curl_exec($ch);}

function line(){echo str_repeat(col('─','p3'),50);n();}function bn(){res("╔═╗┬ ┬┌┐┌┌─┐┌┬┐┬┌─┐┌┐┌   ╔═╗┌─┐┌┬┐┬┬ ┬ ┬   ╦╔╦╗","m").n().res("╠╣ │ │││││   │ ││ ││││───╠╣ ├─┤│││││ └┬┘───║ ║║","b").n().res("╚  └─┘┘└┘└─┘ ┴ ┴└─┘┘└┘   ╚  ┴ ┴┴ ┴┴┴─┘┴    ╩═╩╝","p").n().line();}function bn2(){date_default_timezone_set('Asia/Jakarta').c().res('ᴅᴀʏ : '.date('l'),'p').res('  ᴅᴀᴛᴇ : '.date('d M Y'),'p').res('  ᴛɪᴍᴇ : '.date('H:i'),'p').n().line().bn().res('ꜱᴄʀɪᴘᴛ ꜰᴏʀ  : ᴡɪɴᴏᴇᴀʀɴ-ᴄᴏᴍ','p').n2().res('『』ᴄʀᴇᴀᴛᴏʀ : ᴍᴏʜ. ʜᴏᴍᴀɪᴅɪ ᴛᴏʜɪʀ','p').n().res('『』ʏᴏᴜᴛᴜʙᴇ : ᴍᴀɪʙɪᴇ ᴄʜᴀɴɴᴇʟ','p').n().res('『』ꜱᴜᴘᴏʀᴛ  : ᴀʟʟ-ᴛᴇᴀᴍ-ꜰᴜɴᴄᴛɪᴏɴ & ᴀʟʟ ᴍᴇᴍʙᴇʀ','p').n().res('『』ᴅ_ᴛʀx   : TPtWNAn1BeoBpSVnYnEw5otnJRVB65xvaN','p').n().res('『』NOTE    : ᴛʜɪꜱ ꜱᴄʀɪᴘᴛ ꜰʀᴇᴇ ɴᴏᴛ ꜰᴏʀ ꜱᴀʟᴇ','m').n().line().sr();}
echo "\n";
sleep(2);

function curl($url, $ua, $data = null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_HTTPHEADER => $ua
        ));
        if($data){
            curl_setopt_array($curl, array(
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_POST => 1
            ));
       }
        $result = curl_exec($curl);
        curl_close($curl);
	return $result;
}


function head($user, $cookie){
$ua = [
    'Host: winoearn.com',
    'User-Agent: '.$user,
    'Cookie: '.$cookie,
];
return $ua;
}
function timer($tmr){$timr=time()+$tmr; while(true): echo "\r                         \r"; $res=$timr-time(); if($res < 1){break;} 
echo "\033[1;30mWaiting For \033[1;37m".date('i:s',$res)."\033[1;30m Second";sleep(1); endwhile;}
$url = "https://winoearn.com/dashboard";
$dashboard = curl($url, head($user, $cookie));
	$balance = explode('</span>',explode('<span>',$dashboard)[2])[0];
	$btc = explode('</h3>',explode('<h3 class="boldy mb-5" id="balance">',$dashboard)[1])[0];
	echo $green2.$balance.$putih2." ~> ".$yellow2.$btc."\n\n";
echo $lblue2."[".$green2."1".$lblue2."] ".$green2."CLAIM TICKET\n";
echo $lblue2."[".$red2."2".$lblue2."] ".$red2."DICE GAME\n";
echo $green2."Enter The Number You Want ".$putih2."~> ".$yellow2;
$menu=trim(fgets(STDIN));
echo "\n";
if($menu==1){
while(1){
$url = "https://winoearn.com/dashboard/free";
$ticket = curl($url, head($user, $cookie));
	$token = explode('"',explode('<input type="hidden" name="_token" value="',$ticket)[1])[0];
$url = "https://winoearn.com/dashboard/free";
$data = "_token=$token";
$claim = curl($url, head($user, $cookie), $data);
	$succes = explode('</p>',explode('<p class="alert alert-success">',$claim)[1])[0];
	echo $lblue2."[".$green2."✓".$lblue2."] ".$green2.$succes."\n";
$url = "https://winoearn.com/dashboard";
$update = curl($url, head($user, $cookie));
	$ut = explode('</h3>',explode('<h3 class="boldy mb-5" id="tR">',$update)[1])[0];
	echo $lblue2."[".$yellow2."+".$lblue2."] ".$green2."Update Ticket".$putih2." ~> ".$yellow2.$ut."\n";
	echo $purple2."─────────────────────────────────────────────────\n";
timer(3600);
}
}elseif($menu==2){
while(2){
$url = "https://winoearn.com/dashboard";
$dice = curl($url, head($user, $cookie));
	$ut = explode('</h3>',explode('<h3 class="boldy mb-5" id="tR">',$dice)[1])[0];
if($ut <= 0){
	echo $red2."ꜱᴏʀʀʏ !!! ʏᴏᴜʀ ᴛɪᴄᴋᴇᴛꜱ ᴀʀᴇ ᴏᴜᴛ\n";
exit;
}
	$token = explode('"',explode('<input type="hidden" name="_token" value="',$dice)[1])[0];
	$seed = explode('"',explode('Vue.client_seed = "',$dice)[1])[0];
$url = "https://winoearn.com/dashboard/game";
$data = "_token=$token&leverage=$bet&client_seed=$seed";
$claim = curl($url, head($user, $cookie), $data);
	$succes = explode('</p>',explode('<p class="alert alert-success">congratulations. ',$claim)[1])[0];
	$failed = explode('</p>',explode('<p class="alert alert-danger">',$claim)[1])[0];
if($succes){
  echo $lblue2."[".$green2."✓".$lblue2."] ".$green2.$succes."\n";
$url = "https://winoearn.com/dashboard";
$update = curl($url, head($user, $cookie));
	$balance = explode('</span>',explode('<span>',$update)[2])[0];
	$btc = explode('</h3>',explode('<h3 class="boldy mb-5" id="balance">',$update)[1])[0];
	echo $lblue2."[".$yellow2."+".$lblue2."] ".$green2.$balance.$putih2." ~> ".$yellow2.$btc."\n";
	$ut = explode('</h3>',explode('<h3 class="boldy mb-5" id="tR">',$update)[1])[0];
	echo $lblue2."[".$red2."-".$lblue2."] ".$green2."Ticket Left ".$putih2."  ~> ".$red2.$ut."\n";
	echo $purple2."─────────────────────────────────────────────────\n";
  timer(30);
}else{
  echo $lblue2."[".$red2."!".$lblue2."] ".$red2.$failed;
  sleep(3);
  echo "\r                                    \r";
}
}
}