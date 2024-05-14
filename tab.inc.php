<?php
/*const langs =  ["html","Javascript","PHP"];

for ($i = 0; $i < count(langs) ; $i++) {
    print"<li>".($i+1)." : ".langs[$i]."</li>";
}*/
?>

<?php
       /*const product = [
        "Marque"=>"Samsung S20",
        "Type"=> "Smartphone",
        "Année"=>2021,
        "Etat"=>"Reconditionné",
        "Prix"=>290,
        "Image"=>"https://m.media-amazon.com/images/I/71EzBaGwVVL._AC_UF1000,1000_QL80_.jpg"

];

foreach (product as $key => $value) {
    if($key !== "Image"){
        print "<li>$key : $value<li>";
    }
    else{
        print "<li><img src=".$value." alt=\"cover\"></li>";
    }
}*/

?>
<?php
/*const phptext = [
    "PHP"=>: "Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, mais pouvant également fonctionner comme n importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. Wikipédia"
    "Conçu Par"=> : "Rasmus Lerdorf",
    "Dernière version"=> : 8.3.6 (11 avril 2024),
    "Développeurs"=> : "The PHP Group",
    "Écrit en"=> : "C",
    "Extension de fichier" =>: "php et phar",
    "Licence"=> : "Licence libre: Licence PHP",
    "Paradigmes"=>: "Impératif, orienté objet, fonctionnel, procédural, réflexif et interprété",

]; 
print_r(phptext);*/

?>

<?php
    foreach($articles as $article):?>
        <ul>
            <li>
                <h2><?= $article["title"]?></h2>
            </li>
            <li>
                <?= $article["content"]?>
            </li>
            <li>
            <a href="<?= $article["url"]?>" target="blank">
                    <?= $article["link"]?>&raquo;
                </a>
            </li>
        </ul>
    <?endforeach?>
    ?>