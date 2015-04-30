# Newfish
Start pakket voor sage


## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |
| Sage >= 8.0     | `sage inst.` | `git clone https://github.com/roots/sage.git theme-name` |

## Installation

Run `bower install hphioolen/newfish --save` into the new theme folder. css, js en font mappen worden automatisch geintegreerd in het pakket.
Overige onderdelen in het pakket moeten worden versleept naar de respectievelijke mappen in de thema folders. 

## PHP Bestanden
In de lib. en template folder staan voorbeelden van standaard gebruikte codes om bepaalde problemen op te lossen.
Controleer voor dat je een Kopie overschrijft of je alleen onderdelen in het document moet plaatsen of dat het hele bestand kan worden toegevoegd.

In elk geval (alleen snippets):
- lib/extras.php
- init.php

Lees ook de README.md van Sage.

## Overige pakketten, Dependancies
Toegevoegd: de dependancy van dit pakket op 
fancybox
fontawesome


| pakket   | Overrides | 
|----------|-----------|-------------|
| fancybox | Yes       | kopieer alle image files uit de fancy box naar de asset folder
| owlcarousel | Yes       | Main override in project aanpassen:

Fancy box mist wel eens de bower.json, die moet dan met de hand worden toegeveoegd:
{
	"name": "fancybox",
	"version": "2.1.5",
	"main": [
		"source/jquery.fancybox.js",
		"source/jquery.fancybox.css"
	],
	"ignore": [
    	"**/.*",
    	"fancybox.jquery.json",
    	"demo"
	],
	"dependencies": {
		"jquery": ">=1.10"
	}
}

OWL
 "overrides": {
     "owl.carousel": {
      "main": [
        "./dist/owl.carousel.js",
        "./dist/assets/owl.carousel.css",
        "./dist/assets/owl.theme.default.css"
      ]
    },
    


# types 

settings.xml toegevoegd, nog niet definitief. De export is met waarschuwing zodat je de benodigde onderdelen kunt toevoegen, na aanvinken. 
TODO: toevoegen van de portfolio uit helene de bruin.

# less
In de Less folder allerlei css opgenomen om veelgebruikte aanpassingen gelijk door te voeren na installatie van het pakket.
Om de less uit te schakelen: comment out (of verwijder) de @imports in het newfish.less document.
Zoveel mogelijk zijn alle kleuren uit de variables overgenomen en worden dus direct ingevoerd bij activeren. 

## gravity forms
Gekopieerd van:


#Login Customization

Less toegevoegd aan assets (styles/login.less);
Manifest aangepast zodat er een login.css wordt toegevoegd aan de /dist/styles/
Image en logo toegevoegd aan images folder

manifest aanpassingen:
"login.css": {
      "files": [
        "styles/login.less"
      ]
    },
    
  

#Featured owl

Standaard, is er een slider beschikbaar (met types), die responsive werkt met owl. 
Hierin is de mogelijkheid opgenomen om met Mobile detection  



