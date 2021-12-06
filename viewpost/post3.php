<?php 
$blog_content=[
    "date"=>"13.9.2021-17.9.2021",
    "title"=>"Beleske u trecoj nedelji",
    "content"=>" <p>    Pokretanje Apache na 
    lokalnoj masini:brew services start httpd
    stop: brew services stop httpd
    u snippets se prave shortcuti
    DNS saobracaj(protokol) da se domen
    razresi kroz ip adresu
    dns je dostupan kroz internet
    ISP nema nista direktno sa DNSom tj 
    nije povezan
    ZA SERVER NAM JE BITNO DA ODREDIMO 
    PORT(na kojem ce da slusa) I DOCUMENT ROOT
    (putanja)
    .htaccess- apachov konfiguracioni fajl koji cita
    svaki request; na svaki request cita konfiguraciju
    nalazi se npr u /var/www/b92.net
    .htaccess je nadogradnja, prvo ide default apache konf
    pa se pozove neki vhost i onda se tek taj htaccess
    konfigurise i moze da pregazi default ako ima nekih
    razlika

    jedan softver jedan port
    jedan softver moze da ima vise portova ali
    na jednom portu ne moze vise softvera
    
    IP ADRESA NA DIGITALOCEANU: 46.101.245.20
    ssh-secure shell
        - da pristupimo nekoj drugoj masini
    
    sites-available tamo se nalaze vhosts fajlovi
    oni spavaju tamo tj postoje kao konfiguracije
    apache cita samo ono sto je u enabled znaci uzima
    samo enabled u obzir
    pravi se simbolicki link(shortcut) iz available
    u enabled
    service apache2 restart
    service apache2 reload(on samo rebilduje vhost)
    /var/log gamo server place, ili u nekom default folderu
    
    u etc se sve instalira
    /etc/apache2/sites-available
    /etc/apache2/sites-enabled
    tail -f da pratimo logove i koristimo za live debug
    cat access.log | grep 404 
    vratice liniju gde je greska i oznacice taj filter
    Regex: ^pocinje sa ($)zavrsava sa(bez zagrada)
    regex za email: 
    ^([a-z\d])*([a-z\d\.])*\@([a-z]*(\.[a-z]*)? 
    tako nekako nmp jel dobro iskreno
    u localhost /etc/hosts menjamo ono za adresu
    npr 46.101.245.20 korisnik.marqnet.solutions
    a2dissite da brisemo neki sajt ili konfig

    SFTP: secure file transfer protokol
    da mogu da se uploaduju fajlovi na udaljeni server

    

   </p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<pre><?php echo $blog_content["content"] ?></pre>
</html>