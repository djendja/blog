<?php 
$blog_content=[
    "date"=>"6.9.2021-11.9.2021",
    "title"=>"Beleske u drugoj nedelji",
    "content"=>" <p>    Proxy: server aplikacija koja se ponasa kao 
    posrednik izmedju klijenta
    koji trazi neki izvor i servra koji omogucava taj 
    izvor(resurs)
    !!!treba da stavimo jedan h1 da bude unikatan, 
    jer bot nece znati
    koji je tacno naslov.

    Tagovi: main, aside, section, article, achor(a)

    !!!accessibility je jako bitan(da se prilagodi 
    ljudima koji slabo vide
    ili imaju neke smetnje.

    !!!aria tag se koristi da bi se prilagodio accessibility

    noindex-ne indeksira se 
    nofollow-idi na link ali nemoj dodeljivati vrednost
    lazy loading-da ucita kad nam je potrebno nesto 
    odnosno tek kad trazimo neku odredjenu sliku ili podatke

    alt je bitan za optimizaciju- da znamo sta ta slika
    zapravo predstavlja

    da se izbegava koriscenje id-a nego da se
    koriste klase pri stilizovanju (BEM)

    Relativna putanja: navodi se od foldera u kome
    se nalazi fajl iz koga se vrsi povezivanje
    Apsolutna putanja: navodi se od osnovnog 
    foldera sajta pa do konkretnog fajla

    BEM: block element modifier
    div.product 
    div.product__img
    div.product__add 
    div.product__text 

    CAKA: border 4px transparent;
    on zauzima prostor ali se ne vidi,
    to stavljamo da ne bi doslo do plesanja sajta

    * (paziti se globalnih pravila)
    ako ne moramo da stavljamo bolje da izbegnemo
    isto vazi i za height, izbegavati

    koristiti margin-bottom

    CMS: RICH TEXT!!
    da se gadjaju klot tagovi bez klasa

    CSS: cascading style sheet
    opisuje kako ce html elementi biti prikazani na ekranu,
    papiru ili u drugim medijima
    sintaksa: sastoji se od selektora i blok deklaracije
    selektor: selektuje se HTML element
    koji zelimo da stilizujemo
        kako dodati css: 2.eksterno(link)
            2.interno-koristi se ako jedna HTML strana ima 
            unikatni stil, stavlja se unutar style u 
            head tagu
            1.inline-dodajemo u okviru elementa
            3.browser default
    ako su se definisale vrednosti za isti selektor u razl
    style sheetovima, vrednost poslednje procitanog
    style sheeta ce biti primenjen
    background-color,background-image,color, border,margins,padding
    margin collapse!! kad se topi i bottom margine spajaju
    box-sizing: border-box;
    box model!!! (margin,border,padding,content)
    
    !!kada se stavlja sirina i visina elementa u CSSu
    podesava se samo za taj content area. Da bismo izracunali 
    punu velicinu elementa moramo dodati i padding, border i marg.

    display: za kontrolisanje layouta
    default je block ili inline
    blok uvek pocne u novom redu i zauzima celu sirinu
    inline ne pocinje u novom redu i uzima samo onoliko prostora
    koliko je potrebno

    SERVER SIDE RENDER-koriste se serverski resursi
    stranica nam je na backendu i server je renderuje
    CLIENT SIDE RENDER- javascript se izvrsava u browseru
    i trosi sopstvene resurse

    PHP: hypertext preprocessor

    php moze da sadrzi html,css,js i php kod
    kod se izvrsava na serveru i kao rezultat se vraca na
    broswer kao HTML
    OPSEG: lokalni, globalni, static
    ($)GLOBALS[index] bez prvih zagradica-cuva globalne 
    promenljive u nizu
    static se koristi kada ne zelimo da se lokalna varijabla
    obrise
    kada se funkcija izvrsi tada se varijable brisu
    constants-konstantna vrednost, jednom kad se definise
    ne moze da se menja ili oddefinise
    Kada se php izvrsi brise se sve, zato nam treba
    baza podataka
    -uvek krece od pocetka

    pwd-apsolutna putanja od roota
    ls-da izlistamo direktorijum
    ls-l hidden fajlovi; da vidimo koje su permisije
    ~home folder /root

   </p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<pre><?php echo $blog_content["content"] ?></pre>
</html>