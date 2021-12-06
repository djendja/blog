<?php 
$blog_content=[
    "date"=>"1.9.2021-3.9.2021",
    "title"=>"Beleske u prvoj nedelji",
    "content"=>" <p>
    1.9.2021. <br>
    Pojmovi: IP adresa, DNS, server, domain, hosting, http

</p>
<p>
    2.9.2021.
    <ul>
        <li>
            HTTP je klijent server protokol; osnova razmene podataka na webu. Svaki individualni zahtev se šalje
            serveru, koji to prihvata i omogućava odgovor(response). Između servera i klijenta se nalazi
            posrednik koji se naziva proxy.
        </li>
        <li>
            Host header određuje hosta i broj porta od servera na kojem će zahtev biti poslat. Ako port nije
            određen, postavlja se defaultni port(HTTP 80, HTTPS 443). Svakom protokolu se dodeljuje broj porta.
            Ako se desi da ima više ili nema nijednog Host headera izbacuje statusni kod 400(Bad request).
        </li>
        <li>
            HTTP metode su GET, POST, PUT, DELETE, HEAD(isto kao GET, ali se ovde samo vraca head bez body),
            CONNECT, OPTIONS, TRACE...
        </li>
        <li> Statusni kodovi:
            <ol>
                <li>informativni(100-199)</li>
                <li>uspešni(200-299)</li>
                <li>preusmerenja(300-399)</li>
                <li>client errors(400-499)</li>
                <li>server errors(500-599)</li>
            </ol>
        </li>
        <li>Top level domain: nacionalni i genericki domeni (.com, .music)</li>
    </ul>
</p>
<p>
    3.9.2021. <br>
    Head tagovi: title, style, meta, base, script, link(href,rel) <br>
    Tagovi: footer, header, main, article, aside, section, <strong>ARIA</strong>, a, pictures
    socket=domen+port, URL(potpuna adresa,lokacija web stranice ili fajla na internetu)
    Schema-identifikator(http://), port(tehnicka vrata uz pomoc kog pristupamo serveru 
        da bismo dobili podatke)
    </p>"
]

?>

<html>
<div class="blog-page__date"><?php echo $blog_content["date"]?></div>
<h1><?php echo $blog_content["title"] ?></h1>
<div><?php echo $blog_content["content"] ?></div>
</html>