<?php 
$blog_content=[
    "date"=>"27.9.2021-1.10.2021",
    "title"=>"Beleske u petoj nedelji",
    "content"=>"<p> <strong>VHOSTS</strong>
    Pravljenje vhosta:

/var/www/ mkdir korisnik
	Touch index.html ili index.php
/etc/apache2/sites-available cp 000-default.conf korisnik.conf
	ServerName korisnik.marqnet.solutions
	virtualhost *:80 (ako stavimo neku odredjenu adresu
     ona ce da bude specificna i gazice sve ostale)
	ServerAlias moze i ne mora 
	DocumentRoot /var/www/korisnik
/etc/hosts da se prevari adresa
46.101.245.20 korisnik.marqnet.solutions
	OBAVEZNO STAVITI DA JE U LOCALHOST /ETC/HOSTS!!!!!!!!
a2ensite korisnik - da napravimo shortcut u sites-enabled

Pravljenje novog foldera u kojem cemo da povezemo sftp
Povlacimo fajlove sa servera na nas racunar
command+shift+p i onda bitamo sftp
pa menjamo json kako nama odgovara

Pravljenje baze:
create database base;
create table layout(...);
show databases; 
use database;
show tables;
select * from layout npr;
insert into layout values(...);
Layout(key keyvalue)
Filter 
Articles

Pravljenje usera:
Treba dati permisije userima da bi pristupili bazi!!!!!!!!!
Grant all ili tako nesto

Konekcija na bazu
db_connect.php
deo koda se nalazi u notes
importujemo je tamo gde nam treba- include '../db_connect.php';
PAZITI NA SCOPE, PHP NE VIDI IZVAN FUNKCIJE, 
MORA SE NAGLASITI DA JE GLOBAL SCOPE

Pravljenje funkcije:
Obratiti paznju na scope, jer php ne vidi ono sto je 
izvan funkcije, mora se naglasiti da je global scope

tail -f da prati u access ili error logu sta se desava
*:80(zvezda protiv IP adrese)
* za sve IP adrese
a ako navedemo neku drugu IP adresu onda ce ona biti 
specificna i gazice sve 

1)http://dom.com/home
2)http:1.2.3.4/home

kada idemo preko domena onda on na serveru otp ide kroz
if else petlju i trazi taj domen i onda ga usmerava
A ako bismo hteli preko IP adrese onda ce on uzeti neki
koji nije predodredjen za domen nego ce uzeti neku van
foldera odnosno neki nezavisan

access.log da pratimo logove i da vidimo ko je dosao
na nas server i odakle je povukao informacije(podatke)

cacheing je opasan!!!
cd - vraca nas tamo gde smo bili prosli put(direktorijum)


</p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<pre><?php echo( $blog_content["content"])?></pre>
</html>