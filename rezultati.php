<?php
// Ова е sparql query-то што ќе се достави до endpoint-от
// Кратко Објаснување:
// Се селектираат по својството што е избрано како состојка од формите (?hrana dbp:$Sostojka ?kolicina)
// Потоа го добивам името, слика и линк кон wikipedia на храната што го ја има таа состојка.
// Бидејќи во прикажаните резултати имав и резултати што не се храна 
// Како на пример имав болести кои како својство ја имаат состојката по која пребарувам 
// И состојката беше наведена во болеста како пречинител за појава на болеста
// Затоа ја воведов оваа торка ?hrana dbp:kj  ?energija која во суштина ќе ја прикаже само храна, бидјќи само храната има енергетска вредност
// Пробав со користење на својството food но не секоја храна го имаше

$query = "
PREFIX foaf: <http://xmlns.com/foaf/0.1/>
PREFIX dbp: <http://dbpedia.org/property/>
PREFIX dbo: <http://dbpedia.org/ontology/>

SELECT DISTINCT  ?kolicina ?ime ?readMore ?slika ?energija
WHERE {        
  ?hrana dbp:$Sostojka ?kolicina.
  ?hrana foaf:name ?ime.
  ?hrana dbo:thumbnail ?slika.
  ?hrana foaf:isPrimaryTopicOf ?readMore .
  ?hrana dbp:kj  ?energija

}ORDER BY DESC(xsd:double(?kolicina)) LIMIT $LIMIT
";

// Извражување на query-то
$rows = $store->query($query, 'rows');

// Доколку има проблем со query-то
if ($errs = $store->getErrors()) {
 echo "Query errors" ;
 print_r($errs);
}


// Прикажување на резултатите во табела
//loop за секој вратен ред
foreach( $rows as $row ) {  
  print "<tr><td  style=\"vertical-align:middle\" class=\"text-center\">"
  .$row['kolicina']. 
  " mg</td><td style=\"vertical-align:middle\" class=\"text-center\">"
  .$row['energija'].
  " kJ</td><td style=\"vertical-align:middle\" class=\"text-center\">"      
  .$row['ime'].
  "</td><td style=\"vertical-align:middle\" class=\"text-center\"><img class=\"img-circle \" height=\"150px\" width=\"150px\" src=\""
  .$row['slika'].
  "\"/></td><td style=\"vertical-align:middle\" class=\"text-center\"><a href=\""
  .$row['readMore'].
  "\">Read More</a></td></tr>";


}


?>