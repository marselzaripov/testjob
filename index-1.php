<?

$a = 'Роскомнадзор 2 сентября заблокировал шесть VPN-сервисов — Hola!VPN, ExpressVPN, KeepSolid VPN Unlimited, Nord VPN, Speedify VPN, IPVanish VPN, сообщается на сайте ведомства. Все они нарушают законодательство страны, пояснил регулятор. 

«Использование сервисов обхода блокировок приводит к сохранению доступа к запрещённой информации и ресурсам, создаёт условия для незаконной деятельности, в том числе связанной с распространением наркотиков, детской порнографии, экстремизма и склонением к суициду», — говорится в сообщении Роскомнадзора.

В агентстве напомнили, что компании, которым VPN необходим для бесперебойной работы программного обеспечения и приложений, занесены в «белые списки». Так, 27 из 64 отраслевых организаций, от которых ведомство получило сообщения, применяют заблокированные сервисы для обеспечения 33 технологических процессов. В итоге компании представили свыше 100 IP-адресов для их исключения из политик ограничения доступа.';
 
$link = 'https://www.vedomosti.ru/media/news/2021/09/03/885074-roskomnadzor-zablokiroval-shest-vpn-servisov?utm_source=yxnews&utm_medium=desktop';
 
$begin  = mb_substr($a, 0, 180).'... ';

$pieces = explode(" ", $begin);

$piecesWithoutLast = array_pop($pieces);

$last = count($pieces)-1;
$prelast = count($pieces)-2;

$prelastWord=$pieces[$prelast];
$lastWord=$pieces[$last];

$pieces[$prelast]="";
$pieces[$last]="";

$impieces=implode($pieces, ' ');

echo $impieces .'<a href="' . $link . '">' . $prelastWord.' '.$lastWord . '</a>';;
 
?>