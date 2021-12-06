<?php 
$blog_content=[
    "date"=>"20.9.2021-24.9.2021",
    "title"=>"Beleske u cetvrtoj nedelji",
    "content"=>"<p> USER permisije: read write execute
	d-directory
	s-special file
	- regular file
	drwxr-xr-x@
	prvo oznacava direktorijum
	prvo rwx je za ownera 
	drugo r-x je za grupu
	trece r-x je za ostale
	
	useradd za dodavanje novog usera
	
	sudo usermod -a -G groupname user
	da dodamo usera u grupu, moze i vise grupa odjednom
	-a -G to je da ostane u svim grupama u kojima je do sad

	sudo groupadd groupname da dodamo grupu 
	-g primary group
	-G secondary group
	samo root ili user sa sudo pristupom moze da doda
	usera u grupu

	a2enmod rewrite-da ukljucimo rewrite jer ubuntu
	valjda nema po defaultu ukljuceno

	8421 pravilo (binarni kod)
	7(znaci read write execute) zato sto je 1 1 1 
	i onda je to 4+2+1=7
	
	setfacl command(proveriti sta je to)
	sudo setfacl -m g:readers:rx-R /Data
	-R rekurzivno
	su <username> da se logujemo kao novi user
	userdel <username> da izbrisemo usera

	kad pise permission denied da znamo sta se desava

	MYSQL:
	show databases;
	create database ime;
	create table;
	describe baza (pokaze koje kolone ima baza)
	distinct-razlicite vrednosti
	TRUNCATE- koristi se za brisanje podataka u tabeli

	SQL-structural query language
	izvrsava upite,uzima podatke, ubacuje vrednosti,
	updatuje, brise, kreira novu bazu, nove tabele,views
	3 glavna tipa podatka: string, numeric, date and time
	String: char,varchar,binary,text,enum...
	Numeric: bit,int,integer,float, boolean, double
	TIMESTAMP
	NULL, IS NULL, IS NOT NULL

	Procesor je osnova, memorija(RAM)
	RAM pamti podatke kad ima struje, ima vecu frekvenc
	i radi brze
	 -podrzava instrukciju od 32b ili 64b
	Procesor ima aritmeticko logicku jedinicu
	 -moze da cita nesto iz RAMA i registara
	 Registri su jako brzi
	Kesiranje-mala memorija, cuvaju se podaci odredjeno vreme
	da se ne bi islo do RAMA svaki put
	2^32 a to je 4GB RAMA
	2^64 moze 16GB RAMA da iskoristi

	Operativni sistem: skup programa koji kontrolise sistem
	da mozemo da pokrenemo aplikativni program
	driver-veza izmedju operativnog sistema i hardvera??
	



</p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<pre><?php echo( $blog_content["content"])?></pre>
</html>