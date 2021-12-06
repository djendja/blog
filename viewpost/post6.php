<?php 
$blog_content=[
    "date"=>"4.10.2021-8.10.2021",
    "title"=>"Beleske u petoj nedelji",
    "content"=>"<p> nslookup- da vidimo koji je dns
    moze i preko browsera(whats my dns ili tako nesto)
     a-record: to je najjednostavniji record (root)
     cname je alijas: pravimo domen, ne razresavamo
     na IP adresu nego ga usmeravamo na drugi domen
     i odatle povlacimo podatke

    Domen moze da razresava na vise IP adresa
    cdn gleda koja je IP adresa najbliza pa ce na tu 
    da razresi

    proxy-posrednik(odemo na neki drugi server i 
    pitamo za zahtev i onda nam on salje i mi prosledjujemo
        - sluzi za opsluzivanje podataka
    
    httpd.conf tamo pisemo format za logove
    inace su logovi u /var/www/default

    BAZA PODATAKA:
    RAM memorija se koristi stalno
    na hard disku se podaci cuvaju a u RAMU bi se 
    obrisali i zato nam treba baza podataka
    read permisije(select,show,describe)
    write permisije(insert into,drop,delete,alter,truncate)
    podaci su enkriptovani i vide se samo kroz mysql
    nije plain text kada bismo otvorili
    nece pisati sirove podatke
    da vidimo to koristimo select @@datadir
    /var/lib/mysql
    konekcija sa bazom traje dok se php izvrsava
    i kad se izvrsi gasi se sve, tako da konekciju
    treba vise puta pozivati
    vid optimizacije je da zatvaramo konekciju na nekim mestima
    

</p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<pre><?php echo( $blog_content["content"])?></pre>
</html>