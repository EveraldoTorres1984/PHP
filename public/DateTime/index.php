<?php


/* $date = new DateTime('2022-01-01 12:00:00');
$date->add(DateInterval::createFromDateString('2 years 2 days 5 minutes'));//adicionando o que eu quiser na data(dia,ano,etc...)

//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $date->format('d/m/Y H:i:s'); */

/* $date1 = new DateTime('2022-01-01');
$date2 = new DateTime('2022-02-15');

//Analisando qual a data maior
if($date1 > $date2){
    echo "DATE 1 é maior que DATE 2";
}else{
    echo "DATE 2 é maior que DATE 1";
} 
 */

//Diferença total entre as datas
$today = new DateTime('2022-07-29');
$end = new DateTime('2022-12-31');

$date1 = new DateTime('2022-01-01');
$date2 = new DateTime('2022-02-15');

$diff = $today->diff($end);
echo "Faltam " . $diff->format('%m meses e %d dias') . " para o Réveillon";
