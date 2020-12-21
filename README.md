
########################################################################################################

SmartyPlugins zur Anzeige von Content-Titel und Content-Text für modified eCommerce Shopsoftware
(c) Copyright 2016 by Hetfield (MerZ IT-SerVice)

Author: 	Hetfield (https://www.merz-it-service.de)
Version: 	modified eCommerce Shopsoftware ab der Version 2.x

########################################################################################################


Anleitung
========================================================================================================
1. Installation
--------------------------------------------------------------------------------------------------------
Systemvoraussetzung: Funktionsfähige modified eCommerce Shopsoftware ab der Version 2.x

Vor der Installation des Moduls sichern sie bitte komplett ihre aktuelle Shopinstallation (Dateien und Datenbank)!
Für eventuelle Schäden übernehmen wir keine Haftung!
Die Installation und Nutzung des Moduls  erfolgt auf eigene Gefahr!

Die Installation des Moduls ist in der aktuellen Shopversion 2.x ziemlich einfach.

1. Kopieren Sie  einfach alle Dateien in dem Verzeichnis shoproot aus dem Modulpaket
   in das Hauptverzeichnis ihrer bestehenden modified eCommerce Shopsoftware 2.x Installation.
   Es werden dabei keine Dateien überschrieben!

2. Fertig!

  
========================================================================================================

2. Nutzung im Template
--------------------------------------------------------------------------------------------------------

Zur Anzeige eines Content-Titels ist an beliebiger Stelle im Template folgender Eintrag nötig:

{getContentTitle coID='1'}
Dieser Eintrag im Template zeigt unformatiert den Titel der Versandkosten (coID=1) an:
Liefer- und Versandkosten

{getContentTitle coID='1' heading='2' class='classname'}
Zeigt formatiert den Titel der Versandkosten (coID=1) an:
<h2 class="classname">Liefer- und Versandkosten</h2>

- Die Ziffer im Parameter coID ist gegen die gewünschte coID des anzuzeigenden Contents zu ersetzen.
- Der Parameter heading ist optional. Erlaubt ist hier eine Ziffer von 1-6.
  Hiermit gibt man an, ob der Titel als h-Überschrift formatiert werden soll
  und welche h-Überschrift verwendet werden soll. (h1-h6)
- Der Parameter class ist optional und man kann damit eine gewünschte CSS-Klasse übergeben.
  Hinweis: Der Parameter class ist nur in Kombination mit Parameter heading möglich.

--------------------------------------------------------------------------------------------------------

Zur Anzeige eines Content-Headings ist an beliebiger Stelle im Template folgender Eintrag nötig:

{getContentHeading coID='1'}
Dieser Eintrag im Template zeigt unformatiert den Titel der Versandkosten (coID=1) an:
Liefer- und Versandkosten

{getContentHeading coID='1' heading='2' class='classname'}
Zeigt formatiert den Titel der Versandkosten (coID=1) an:
<h2 class="classname">Liefer- und Versandkosten</h2>

- Die Ziffer im Parameter coID ist gegen die gewünschte coID des anzuzeigenden Contents zu ersetzen.
- Der Parameter heading ist optional. Erlaubt ist hier eine Ziffer von 1-6.
  Hiermit gibt man an, ob der Titel als h-Überschrift formatiert werden soll
  und welche h-Überschrift verwendet werden soll. (h1-h6)
- Der Parameter class ist optional und man kann damit eine gewünschte CSS-Klasse übergeben.
  Hinweis: Der Parameter class ist nur in Kombination mit Parameter heading möglich.

Wird diese Funktion verwendet und es ist allerdings keine Überschrift hinterlegt,
dann wird der Content-Title als Fallback verwendet.

--------------------------------------------------------------------------------------------------------

Zur Anzeige eines Content-Text ist an beliebiger Stelle im Template folgender Eintrag nötig:

{getContentText coID='1'}
Dieser Eintrag im Template zeigt den Text der Versandkosten (coID=1) in einem normalen div-Container:
<div>Text</div>

{getContentText coID='1' class='classname'}
Dieser Eintrag im Template zeigt den Text der Versandkosten (coID=1) in einem div-Container
mit der CSS-Klasse classname:
<div class="classname">Text</div>

- Die Ziffer im Parameter coID ist gegen die gewünschte coID des anzuzeigenden Contents zu ersetzen.
- Der Parameter class ist optional und man kann damit eine gewünschte CSS-Klasse übergeben.

--------------------------------------------------------------------------------------------------------

Benötigen sie Unterstützung bei der indivduellen Anpassung des Moduls
oder haben sie eventuell doch Probleme beim Einbau?
Gerne können sie unseren kostenpflichtigen Support in Anspruch nehmen.
Kontaktieren sie uns einfach unter info@merz-it-service.de


########################################################################################################

MerZ IT-SerVice
Nicole Grewe - Am Berndebach 35a - D-57439 Attendorn
Telefon: 0 27 22 - 63 13 63 - Telefax: 0 27 22 - 63 14 00
E-Mail: Info(at)MerZ-IT-SerVice.de - Internet: www.MerZ-IT-SerVice.de

########################################################################################################