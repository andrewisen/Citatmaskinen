# Citatmaskinen 3.0
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)

Citatmaskinen är ett dryckeslek för dig som är född i början av 90-talet.<br/>
Hemsida genererar slumpmässiga citat från populära internetvideos, filmer, TV-serier och mycket annat.<br/><br/>
Din uppgift är att ta reda på källan till citatet!

## Komma igång
Det är bara att klona projektet och ladda upp på ditt egna webhotell :)
Alternativt kan du använda min version (som finns länkad nedanför).

## Demo
Live-demo finns på:<br/>
[https://github.andrewisen.se/citatmaskinen/](https://github.andrewisen.se/citatmaskinen/)

## Skrämdump
![Alt text](/screenshots/screenshot-01.jpg?raw=true "Skärmdump")

## Förutsättningar
Grundläggande förståelser inom HTML, CSS, Javascript och PHP rekommenderas.<br/>
Även grundläggande kunskaper om hur webbhotell fungerar.<br/><br/>

Så, för att köra sidan behöver du:

```
Ett webbhotell att ladda upp innehållet till
```

T.ex. [Loopia](https://www.loopia.se), [Binero](https://www.binero.se) eller [One.com](https://www.one.com/sv/).

## Installera - Webbhotell
Börja med att klona projektet.
Är du osäker? [Läs hur man klonar projekt här!](https://help.github.com/articles/cloning-a-repository/)

```console
git clone https://github.com/andrewisen/citatmaskinen.git
```

Ladda sedan upp innehållet till ditt webbhotell med valfri FTP-klient.
T.ex. [Filezilla](https://filezilla-project.org).<br/><br/>

[Här](https://webdesignskolan.se/html/ftp-program/ftp-program.php) kan du läsa mer om hur man använder Filezilla.


## Installera - Lokalt
Det går även att köra sidan lokalt. För detta behövs en lokal PHP-server.

```console
php -S localhost:9000 -t app/
```

Jag har en `makefile` som gör livet lite enklare.
(Du får själv Googla på vad en sk. makefile är för nåt).

## Redigera
Gör dina egna redigeringar i ett valfritt text-redigeringsprogram.<br/><br/>
Öppna data-filen.

```
"./files/data.txt".
```

Den är uppbyggd som en CSV-fil enligt följande konvektion:

```
CITAT ;  KÄLLA ; LÄNK TILL CITAT 
```

Exempelvis:

```
Vem vare som kasta?;Skogsturken;https://youtu.be/bzUiA9tjn6E?t=30s
Ha det så kult på restaurangen!;Pistolhota unge;https://youtu.be/qCSfy670df4?t=27s
...
...
...
```

Detta ger således:

| Citat                           | Källa           | Länk till citat                    |
|---------------------------------|-----------------|------------------------------------|
| Vem vare som kasta?             | Skogsturken     | https://youtu.be/bzUiA9tjn6E?t=30s |
| Ha det så kult på restaurangen! | Pistolhota unge | https://youtu.be/qCSfy670df4?t=27s |

## Skapad med

* [jQuery](https://jquery.com) - Framework
* [Javascript](https://sv.wikipedia.org/wiki/Javascript) - Script
* [Bootstrap](https://getbootstrap.com) - Design

## Bidra
Du kan bidra med nya citat genom att använda denna länk:<br/>
[https://forms.gle/8JeM1H9GHnLDq41t5](https://forms.gle/8JeM1H9GHnLDq41t5)
<br/>
<br/>
Dessutom går det utmärkt att mejla:
<br/>
<br/>
[citatmaskinen "at" andrewisen.se](mailto:citatmaskinen@andrewisen.se)
<br/>
<br/>
Såklart går det att bidra genom att "pulla" i repot :)<br/><br/>
## Kontakt
Mejla:
<br/>
[citatmaskinen "at" andrewisen.se](mailto:citatmaskinen@andrewisen.se)

## Upphovsman

* [André "MG" Wisén](https://github.com/andrewisen)

## Tack till

* [Arvid Viderberg](https://github.com/Aweponken) - Inspiration till hemsidan samt bidragit med citat
* William Miles - Bidragit med citat
* Louise Sjölund - Bidragit med citat

## Licens

[GNU General Public License v3.0](https://github.com/andrewisen/citatmaskinen/blob/master/LICENSE)