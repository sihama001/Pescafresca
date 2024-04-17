<?php

// Page created by Shepard [Fabian Pijcke] <Shepard8@laposte.net>
// Arno Esterhuizen <arno.esterhuizen@gmail.com>
// and Romain Bourdon <romain@anaska.com>
//  
// icones by Mark James <http://www.famfamfam.com/lab/icons/silk/>
//
// Modified from WampServer project by Laurent Destailleur (NLTechno)
// for DoliWamp project.



//chemin jusqu'aux fichiers alias
$aliasDir = '../alias/';
$appDir = '../apps/';



// we set version of applications
$phpVersion = '7.4.26';
if ($phpVersion != phpversion()) $phpVersion .= ' ('.phpversion().')';
$apacheVersion = '2.4.51';
if ($apacheVersion != $_SERVER["SERVER_SOFTWARE"]) $apacheVersion .= ' ('.$_SERVER["SERVER_SOFTWARE"].')';
$mysqlVersion = '10.6.5';
$apachePort = '80';


// directories to ignore in project list
$projectsListIgnore = array ('.','..');


// texts
$langues = array(
	'en' => array(
		'langue' => 'English',
		'autreLangue1' => 'Español',
		'autreLangueLien1' => 'es',
		'autreLangue2' => 'Fran&ccedil;ais',
		'autreLangueLien2' => 'fr',
		'titreHtml' => 'DoliWamp Homepage',
		'titreConf' => 'Server Configuration',
		'versa' => 'Apache Version :',
		'versp' => 'PHP Version :',
		'versm' => 'MySQL Version :',
		'phpExt' => 'Loaded Extensions : ',
		'titrePage' => 'Tools',
		'txtAlias' => 'Your aliased softwares',
		'txtNoAlias' => 'No Alias found.',
		'txtProjet' => 'Your Softwares',
		'txtNoProjet' => 'No other softwares. To create a new one, just create a directory in \'www\'.',
		'txtApp' => 'Applications',
		'FromLocalNetwork' => 'URL for local access',
		'FromInternet' => 'URL for Intranet or Internet',
		'NotAvailable' => 'Not available',
		'faq' => 'http://www.en.wampserver.com/faq.php',
		'ipserver' => 'Name/IP Server:',
		'askhelp' => 'Dolibarr Help center'
	),
	'fr' => array(
		'langue' => 'Français',
		'autreLangue1' => 'Espa&ntilde;ol',
		'autreLangueLien1' => 'es',
		'autreLangue2' => 'English',
		'autreLangueLien2' => 'en',
		'titreHtml' => 'Accueil DoliWamp',
		'titreConf' => 'Configuration Serveur',
		'versa' => 'Version de Apache:',
		'versp' => 'Version de PHP:',
		'versm' => 'Version de MySQL:',
		'phpExt' => 'Extensions Charg&eacute;es: ',
		'titrePage' => 'Outils',
		'txtAlias' => 'Alias d\'applications',
		'txtNoAlias' => 'Aucun alias.',
		'txtProjet' => 'Autres applications (sans alias)',
		'txtNoProjet' => 'Pas d\'autre application. Pour en ajouter une nouvelle, cr&eacute;ez simplement un r&eacute;pertoire dans \'www\'.',
		'txtApp' => 'Applications',
		'FromLocalNetwork' => 'URL accès local',
		'FromInternet' => 'URL accès par Intranet ou Internet',
		'NotAvailable' => 'Non disponible',
		'faq' => 'http://www.wampserver.com/faq.php',
		'ipserver' => 'Name/IP Serveur:',
		'askhelp' => 'Centre d\'assistance Dolibarr'
	),
	'es' => array(
		'langue' => 'Español',
		'autreLangue1' => 'English',
		'autreLangueLien1' => 'en',
		'autreLangue2' => 'Fran&ccedil;ais',
		'autreLangueLien2' => 'fr',
		'titreHtml' => 'Inicio DoliWamp',
		'titreConf' => 'Configuraci&oacute;n Servidor',
		'versa' => 'Versi&oacute;n de Apache:',
		'versp' => 'Versi&oacute;n de PHP:',
		'versm' => 'Versi&oacute;n de MySQL:',
		'phpExt' => 'Extensiones Cargadas: ',
		'titrePage' => 'Utilidades',
		'txtAlias' => 'Alias de aplicaciones',
		'txtNoAlias' => 'Ning&uacute;n alias.',
		'txtProjet' => 'Otras aplicaciones (sin alias)',
		'txtNoProjet' => 'Ninguna otra aplicaci&oacute;n. Para a&ntilde;adir una nueva, simplemente cree una carpeta en \'www\'.',
		'txtApp' => 'Aplicaciones',
		'FromLocalNetwork' => 'URL para local access',
		'FromInternet' => 'URL para Intranet o Internet',
		'NotAvailable' => 'Not available',
		'faq' => 'http://www.wampserver.com/faq.php',
		'ipserver' => 'Nombre/IP Servidor',
		'askhelp' => 'Pedir ayuda o soporte'
	)
);



// images
$pngFolder = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABhlBMVEX//v7//v3///7//fr//fj+/v3//fb+/fT+/Pf//PX+/Pb+/PP+/PL+/PH+/PD+++/+++7++u/9+vL9+vH79+r79+n79uj89tj89Nf889D88sj78sz78sr58N3u7u7u7ev777j67bL67Kv46sHt6uP26cns6d356aP56aD56Jv45pT45pP45ZD45I324av344r344T14J734oT34YD13pD24Hv03af13pP233X025303JL23nX23nHz2pX23Gvn2a7122fz2I3122T12mLz14Xv1JPy1YD12Vz02Fvy1H7v04T011Py03j011b01k7v0n/x0nHz1Ejv0Hnuz3Xx0Gvz00buzofz00Pxz2juz3Hy0TrmznzmzoHy0Djqy2vtymnxzS3xzi/kyG3jyG7wyyXkwJjpwHLiw2Liw2HhwmDdvlXevVPduVThsX7btDrbsj/gq3DbsDzbrT7brDvaqzjapjrbpTraojnboTrbmzrbmjrbl0Tbljrakz3ajzzZjTfZijLZiTJdVmhqAAAAgnRSTlP///////////////////////////////////////8A////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9XzUpQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAB90RVh0U29mdHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgOLVo0ngAAACqSURBVBiVY5BDAwxECGRlpgNBtpoKCMjLM8jnsYKASFJycnJ0tD1QRT6HromhHj8YMOcABYqEzc3d4uO9vIKCIkULgQIlYq5haao8YMBUDBQoZWIBAnFtAwsHD4kyoEA5l5SCkqa+qZ27X7hkBVCgUkhRXcvI2sk3MCpRugooUCOooWNs4+wdGpuQIlMDFKiWNbO0dXTx9AwICVGuBQqkFtQ1wEB9LhGeAwDSdzMEmZfC0wAAAABJRU5ErkJggg==
EOFILE;
$pngFolderGo = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJISURBVDjLpZPLS5RhFIef93NmnMIRSynvgRF5KWhRlmWbbotwU9sWLupfCBeBEYhQm2iVq1oF0TKIILIkMgosxBaBkpFDmpo549y+772dFl5bBIG/5eGch9+5KRFhOwrYpmIAk8+OjScr29uV2soTotzXtLOZLiD6q0oBUDjY89nGAJQErU3dD+NKKZDVYpTChr9a5sdvpWUtClCWqBRxZiE/9+o68CQGgJUQr8ujn/dxugyCSpRKkaw/S33n7QQigAfxgKCCitqpp939mwCjAvEapxOIF3xpBlOYJ78wQjxZB2LAa0QsYEm19iUQv29jBihJeltCF0F0AZNbIdXaS7K6ba3hdQey6iBWBS6IbQJMQGzHHqrarm0kCh6vf2AzLxGX5eboc5ZLBe52dZBsvAGRsAUgIi7EFycQl0VcDrEZvFlGXBZshtCGNNa0cXVkjEdXIjBb1kiEiLd4s4jYLOKy9L1+DGLQ3qKtpW7XAdpqj5MLC/Q8uMi98oYtAC2icIj9jdgMYjNYrznf0YsTj/MOjzCbTXO48RR5XaJ35k2yMBCoGIBov2yLSztNPpHCpwKROKHVOPF8X5rCeIv1BuMMK1GOI02nyZsiH769DVcBYXRneuhSJ8I5FCmAsNomrbPsrWzGeocTz1x2ht0VtXxKj/Jl+v1y0dCg/vVMl4daXKg12mtCq9lf0xGcaLnA2Mw7hidfTGhL5+ygROp/v/HQQLB4tPlMzcjk8EftOTk7KHr1hP4T0NKvFp0vqyl5F18YFLse/wPLHlqRZqo3CAAAAABJRU5ErkJggg==
EOFILE;
$pngLogo = <<< EOFILE
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
EOFILE;
$pngPlugin = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsSAAALEgHS3X78AAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABmklEQVR42mL4//8/AyUYIIDAxK5du1BwXEb3/9D4FjBOzZ/wH10ehkF6AQIIw4B1G7b+D09o/h+X3gXG4YmteA0ACCCsLghPbPkfm9b5PzK5439Sdg9eAwACCEyANMBwaFwTGIMMAOEQIBuGA6Mb/qMbABBAEAOQnIyMo1M74Tgiqf2/b3gVhgEAAQQmQuKa/8ekdYMxyLCgmEYMHJXc9t87FNMAgACCGgBxIkgzyDaQU5FxQGQN2AUBUXX/vULKwdgjsOQ/SC9AAKEEYlB03f+oFJABdSjYP6L6P0guIqkVjt0DisEGAAQQigEgG0AhHxBVi4L9wqvBBiEHtqs/xACAAAIbEBBd/x+Eg2ObwH4FORmGfYCaQRikCUS7B5YBNReBMUgvQABBDADaAtIIwsEx9f/Dk9pQsH9kHTh8XANKMAIRIIDAhF9ELTiQQH4FaQAZCAsskPNhyRpkK7oBAAEEMSC8GsVGkEaYIlBghcU3gbGzL6YBAAEEJnzCgP6EYs/gcjCGKQI5G4Z9QiswDAAIIAZKszNAgAEAHgFgGSNMTwgAAAAASUVORK5CYII=
EOFILE;
$pngWrench = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABO1BMVEXu7u7n5+fk5OTi4uLg4ODd3d3X19fV1dXU1NTS0tLPz8+7z+/MzMy6zu65ze65zu7Kysq3zO62zO3IyMjHx8e1yOiyyO2yyOzFxcXExMSyxue0xuexxefDw8OtxeuwxOXCwsLBwcGuxOWsw+q/v7+qweqqwuqrwuq+vr6nv+qmv+m7u7ukvumkvemivOi5ubm4uLicuOebuOeat+e0tLSYtuabtuaatuaXteaZteaatN6Xs+aVs+WTsuaTsuWRsOSrq6uLreKoqKinp6elpaWLqNijo6OFpt2CpNyAo92BotyAo9+dnZ18oNqbm5t4nt57nth7ntp4nt15ndp3nd6ZmZmYmJhym956mtJzm96WlpaVlZVwmNyTk5Nvl9lultuSkpKNjY2Li4uKioqIiIiHh4eGhoZQgtVKfNFdha6iAAAAaXRSTlMA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////914ivwAAAACXBIWXMAAAsSAAALEgHS3X78AAAAH3RFWHRTb2Z0d2FyZQBNYWNyb21lZGlhIEZpcmV3b3JrcyA4tWjSeAAAAKFJREFUGJVjYIABASc/PwYkIODDxBCNLODEzGiQgCwQxsTlzJCYmAgXiGKVdHFxYEuB8dkTOIS1tRUVocaIWiWI8IiIKKikaoD50kYWrpwmKSkpsRC+lBk3t2NEMgtMu4wpr5aeuHcAjC9vzadjYyjn7w7lK9kK6tqZK4d4wBQECenZW6pHesEdFC9mbK0W7otwsqenqmpMILIn4tIzgpG4ADUpGMOpkOiuAAAAAElFTkSuQmCC
EOFILE;
$favicon = <<< EOFILE
AAABAAIAEBAAAAAAAABoBQAAJgAAACAgAAAAAAAAqAgAAI4FAAAoAAAAEAAAACAAAAABAAgAAAAA
AEABAAAAAAAAAAAAAAAAAAAAAAAAaFdRAKaPhACkgXkApIJ6AKiEfAB8bWUAYndqAKCJlACCkY8A
HicgAAAAAAB+hHkArIM5AHhuFgB8cBoAenAaAJRxGACseUUApJxUAKh9SAC1ubwAISImAICCeAB8
biwAgFwAAIBeAAB+XgAAfF0AAHxZAAB8Zh8AeWkhALm+qwAkJSsAgHAuAIBgAACCYgAAiGMAAIhi
AACEZgAAgF8AAIBeAwB8VQMAmJ6OAHxwLgB0TQAAL0IWAEBaKQA8UCwAZCMAAHBNAACCYwAAfl4Y
AKiBKgB6gngArG4qAHxeIgCEYicAW04AAFxbagAwNT8AbH9jAH5MCACAXyUAgGAkAIBhIwCEUwMA
WF9VAI6AeACihSoAeFgeAIBeIgBZTgUAWlpiANS3mgBybBMAfFogAHxbIACIcyUAHgsAAJ59eADM
iioAnIMeAKSKIACFRxwAVlpgAK+6vwDQhyMAooYgAJZzHQBMUkAAnJJ4AMSSKADEfh4AzIMgAHlq
GgBWV2AAn6GWAMWcVADEfRoAyIIgAKhyHABMUksAnI92AMScPgDAeRoAqXMaAFBWYACkracAbnFg
AMi1VADAdxgAsHkiAAQLAgCcjnQAxKFSAMCkLADEqjIApGwWAE06SABmdGwASkZLAKq2sAA7SUsA
zsWiAMCcQgDApC0AyqwzAH5nGABQUlIAnIxzAMS3TgDAnkAAxKREAJh1IADV5tIAk4N4AJeNdwC8
pJQA8duhAL2lRQDAnz0AwqFDALylOwBiUTcAnIl9AMTATADAmT4AxKBCAJhyHgDCxsYA18x5AMOw
SADBsEwAvaE0AMCaPgDAnUAA0K9GAIBkHgA5PT0AnJ6GAMTFVQDAxDsAxMpAAJiFHADExskAvb9f
AMDCNwDAwj4AwMVAAMTLQQDU0UUAek8YAFhfYgCen4UAysxuAMjKUQDMz1YAoJc0AM/R0ADWyXwA
xslQAMrNPgDMuD0AqpM1AFJKKQB0eXkAhYZzAIx5QAB2ZD0AfGlAAFRNKABCQ0QAoZhvAHZiOABi
WzwAdmtrAERdSwAsICgA////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAALq7vL2+CsDBwsPECgoKCgqtrq+wsbKztLW2t7icCgoKn6ChoqOk
paanqKmqq5wKCpCRkpOUlZaXmJmam5ydwAqBgoOEhQpubm6ai4yNjsAKcXJzdHUKCgoKbpp8fX5/
CmZnaFxpCgoKCgpubW5cbwpaW1xdXgoKCgoKbmFiY2QKT1BRUlMKCgoKCm5WUVdYCkNERUZHCgoK
CgpTSktMTQo1Njc4OQoKCgo8PT4/QEEKFisZIywtLi8wMTIiIjM0ChYhGSIjJCUkJiMiJygpCgoW
FxgZGRkZGRobHB0eHwoKCwwNDg4ODg8QERETFAoKCgICAgMDAwMEBAQUCgoKCgoEHwAAAAcAAAAD
AAAAAQAABAEAAAeBAAAHwQAAB8EAAAfBAAAHwQAAB4EAAAABAAAAAwAAAAMAAAAHAAAAHwAAKAAA
ACAAAABAAAAAAQAIAAAAAACABAAAAAAAAAAAAAAAAQAAAAAAAAAAAACAAIAAgAAAAICAAAAAgAAA
AICAAAAAgADAwMAAwNzAAPDKpgCAgIAA/wD/AP8AAAD//wAAAP8AAAD//wAAAP8A////APD7/wCk
oKAAACBAAAAgYAAAIIAAACCgAAAgwAAAIOAAAEAAAABAIAAAQEAAAEBgAABAgAAAQKAAAEDAAABA
4AAAYAAAAGAgAABgQAAAYGAAAGCAAABgoAAAYMAAAGDgAACAAAAAgCAAAIBAAACAYAAAgIAAAICg
AACAwAAAgOAAAKAAAACgIAAAoEAAAKBgAACggAAAoKAAAKDAAACg4AAAwAAAAMAgAADAQAAAwGAA
AMCAAADAoAAAwMAAAMDgAADgAAAA4CAAAOBAAADgYAAA4IAAAOCgAADgwAAA4OAAQAAAAEAAIABA
AEAAQABgAEAAgABAAKAAQADAAEAA4ABAIAAAQCAgAEAgQABAIGAAQCCAAEAgoABAIMAAQCDgAEBA
AABAQCAAQEBAAEBAYABAQIAAQECgAEBAwABAQOAAQGAAAEBgIABAYEAAQGBgAEBggABAYKAAQGDA
AEBg4ABAgAAAQIAgAECAQABAgGAAQICAAECAoABAgMAAQIDgAECgAABAoCAAQKBAAECgYABAoIAA
QKCgAECgwABAoOAAQMAAAEDAIABAwEAAQMBgAEDAgABAwKAAQMDAAEDA4ABA4AAAQOAgAEDgQABA
4GAAQOCAAEDgoABA4MAAQODgAIAAAACAACAAgABAAIAAYACAAIAAgACgAIAAwACAAOAAgCAAAIAg
IACAIEAAgCBgAIAggACAIKAAgCDAAIAg4ACAQAAAgEAgAIBAQACAQGAAgECAAIBAoACAQMAAgEDg
AIBgAACAYCAAgGBAAIBgYACAYIAAgGCgAIBgwACAYOAAgIAAAICAIACAgEAAgIBgAICAgACAgKAA
gIDAAICA4ACAoAAAgKAgAICgQACAoGAAgKCAAICgoACAoMAAgKDgAIDAAACAwCAAgMBAAIDAYACA
wIAAgMCgAIDAwACAwOAAgOAAAIDgIACA4EAAgOBgAIDggACA4KAAgODAAIDg4ADAAAAAwAAgAMAA
QADAAGAAwACAAMAAoADAAMAAwADgAMAgAADAICAAwCBAAMAgYADAIIAAwCCgAMAgwADAIOAAwEAA
AMBAIADAQEAAwEBgAMBAgADAQKAAwEDAAMBA4ADAYAAAwGAgAMBgQADAYGAAwGCAAMBgoADAYMAA
wGDgAMCAAADAgCAAwIBAAMCAYADAgIAAwICgAMCAwADAgOAAwKAAAMCgIADAoEAAwKBgAMCggADA
oKAAwKDAAMCg4ADAwAAAwMAgAMDAQADAwGAAwMCAAMDAoAAA/6RbW1tbW1tbEwCtXFtbW6WuEwgA
AAAAAAAAAAAAABP+/fX19fX1rKT/AAn99fWsrKRbW2T3AAAAAAAAAAAArv7+/f39/f38rP8HCf39
/fz89PSso1tcBwAAAAAAAACu/v39/Pz8/PSs/wf+/fz8/Pz8/Pz0rKNTtgAAAAAAAK7+/f38/Pz8
9Kv/B/79/Pz8/Pz8/Pz89KNTrgAAAAAArv79/Pz8/Pz0q/8H/f38/Pz8/Pz8/Pz89KNbrgAAAACu
9v389PT09PSj/wf9/fT09PT09PT09PT09KNbEwAAAK71/fT09PT09KP/Bwn+/f39/fz09PT09PT0
9KNbAAAArvX99PT09PT0o/8HCQkJCQkJ/v309PT09PT0q1utAACu9f309PT09PSj/whlXFxkpbYJ
Cf709PT09PT0o1MAAK719fT09PT066P3AAgHExOuXFy2Cf709PT09PSrWxMArvX19PPz8/Pro/cA
AAAAAAgHrlyu/vX08/Pz8+ujrQCu9fX06+vr6+ujEwAAAAAAAAAIrlz+/fTr6+vr66NbAK719Ovr
6+vr66MTAAAAAAAAAAAHrq319Ovr6+vro1sArvX06+vr6+uroxMAAAAAAAAAAAATrfX06+vr6+uj
WwCu9fTr6+vr66ubEwAAAAAAAAAAABOt9ezr6+vr66NbB67t9Ovr6+vro5sTAAAAAAAAAAAAB670
6+vr6+vro1sHru3s66urq6ujmxMAAAAAAAAAAAAHrezrq6urq6ujWgCu7eyro6Ojo6NaEwAAAAAA
AAAAAAfsq6ujo6Ojq6NaAK6t7Kujo6Ojo1oTAAAAAAAAAAAAB6Ojo6Ojo6Ojo5sArq3so6Ojo6Oj
WhMAAAAAAAAAAAijo6Ojo6Ojo6OirQCureyjo6Ojo6JaEwAAAAAAAAetWpqjo6Ojo6Ojo5r/AK6t
rKOioqKiolpbZGRkZFxSUlqaoqKioqKioqOiowAArq2so6KioqKimlpaWlpaWpqaoqKioqKioqKj
o6L2AACurayjoqKioqKioqKioqKioqKioqKioqKioqOipAgAAK6trKOioqKioqKioqKioqKioqKi
oqKioqKjo6P/AAAArq2so6KioqKioqKioqKioqKioqKioqKjo6OjEwcAAACurayjoqKioqKioqKi
oqKioqKioqKjo6ysrLYHAAAAAK6trKOioqKioqKioqKioqKioqOjrKzs7K2uBwAAAAAArq317Kys
rKysrKysrKysrKzs7fX19a2tEwcAAAAAAACu9v/29vb29vb29vb29vb29vatraWlrgcIAAAAAAAA
AAClpaWlpaWlpaWlpaWlpaVcXGWuEwcIAAAAAAAAAAAAgBAH/wAQAf8AAAB/AAAAPwAAAB8AAAAP
AAAABwAAAAcAAAADAAAAAwAQAAEAHwABAB/AAQAf4AEAH/ABAB/wAAAf8AAAH/ABAB/wAQAf8AEA
H+ABAB+AAQAAAAMAAAADAAAAAwAAAAcAAAAHAAAADwAAAB8AAAA/AAAAf4AAAf8=
EOFILE;



// Ask help
if (isset($_GET['askhelp']))
{
	print "Sorry, feature not yet available";
	exit();
}


// Show PHPInfo
if (isset($_GET['phpinfo']))
{
	phpinfo();
	exit();
}


//affichage des images
if (isset($_GET['img']))
{
    switch ($_GET['img'])
    {
        case 'pngFolder' :
        header("Content-type: image/png");
        echo base64_decode($pngFolder);
        exit();
        
        case 'pngFolderGo' :
        header("Content-type: image/png");
        echo base64_decode($pngFolderGo);
        exit();
        
        case 'pngLogo' :
        header("Content-type: image/png");
        echo base64_decode($pngLogo);
        exit();
        
        case 'pngPlugin' :
        header("Content-type: image/png");
        echo base64_decode($pngPlugin);
        exit();
        
        case 'pngWrench' :
        header("Content-type: image/png");
        echo base64_decode($pngWrench);
        exit();
        
        case 'favicon' :
        header("Content-type: image/x-icon");
        echo base64_decode($favicon);
        exit();
    }
}



// Definition of language and texts

if (isset ($_GET['lang'])) {
	$langue = preg_replace('/[^a-z_]/i', '', $_GET['lang']);
} elseif (preg_match("/^fr/", $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
	$langue = 'fr';
} elseif (preg_match("/^es/", $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
	$langue = 'es';
} else {
	$langue = 'en';
}


// Read PHP extensions
$loaded_extensions = get_loaded_extensions();
$phpExtContents='';
foreach ($loaded_extensions as $extension) {
	$phpExtContents .= "<li>${extension}</li>";
}

	
// Read alias directory
$listoffile=array();
$aliasarray=array();
$aliasContents='';
if (is_dir($aliasDir)) {
    $handle=opendir($aliasDir);
    if (is_resource($handle)) {
        while ($file = readdir($handle)) {
    		$listoffiles[]=$file;
    	}
    }
	sort($listoffiles);
	
	foreach($listoffiles as $file) {
	    if (is_file($aliasDir.$file) && preg_match('/\.conf/',$file))
	    {		
		    $msg = '';

			$aliasContents.='<tr><td><ul class="aliases">';

		    $aliasContents .= '<li><a target="_blank" href="'.preg_replace('/\.conf/','',$file).'/">';
			$file = preg_replace('/\.conf/','',$file);
			if (preg_match('/dolibarr/i',$file)) $aliasContents .= $file.'</a></li></ul></td><td>http://localhost'.($apachePort != 80?':'.$apachePort:'').'/'.$file.'/</td><td>http://<i>ipofyourserver</i>'.($apachePort != 80?':'.$apachePort:'').'/'.$file.'/</td></tr>';
			elseif (preg_match('/phpmyadmin/i',$file)) $aliasContents .= $file.'</a></li></ul></td><td>http://localhost'.($apachePort != 80?':'.$apachePort:'').'/'.$file.'/</td><td>'.$langues[$langue]['NotAvailable'].'</td></tr>';
			else $aliasContents .= $file.'</a></li></ul></td> <td> </td><td>'.$langues[$langue]['NotAvailable'].'</td></tr>';
			
			$aliasarray[]=$file;
	    }
    }
    closedir($handle);
}
if (!isset($aliasContents))
	$aliasContents = '<tr><td colspan="3">'.$langues[$langue]['txtNoAlias'].'</td></tr>';
	

// Read projects in www dir
$listoffiles=array();
$handle=opendir(".");
if (is_resource($handle)) {
    while ($file = readdir($handle)) 
    {
    	$listoffiles[]=$file;
    }
    closedir($handle);
}

foreach($listoffiles as $file) {
	if (is_dir($file) && !in_array($file,$projectsListIgnore) && !in_array($file,$aliasarray)) 
	{		
		$projectContents .= '<tr><td><ul class="projects">';
		
		$projectContents .= '<li><a href="'.$file.'/">';
		$projectContents .= $file.'</a>';
		$projectContents .= '</li>';
		
		$projectContents .= '</ul></td><td>http://localhost'.($apachePort != 80?':'.$apachePort:'').'/'.$file.'/)'.'</td><td>'.$langues[$langue]['NotAvailable'].'</td></tr>';
	}
}

if (!isset($projectContents)) {
	$projectContents = '<tr><td colspan="3">'.$langues[$langue]['txtNoProjet'].'</td></tr>';
}


$nameServer=getenv("COMPUTERNAME");
$ipServer=$nameServer;



$pageContents = <<< EOPAGE
<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="$langue" xml:lang="$langue">
<head>
	<title>{$langues[$langue]['titreHtml']}</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

	<style type="text/css">
* {
	margin: 0;
	padding: 0;
}

html {
	background: #ddd;
}
body {
	margin: 1em 10%;
	padding: 1em 3em;
	font: 80%/1.4 tahoma, arial, helvetica, lucida sans, sans-serif;
	border: 1px solid #999;
	background: #eee;
	position: relative;
}
#head {
	margin-bottom: 1.8em;
	margin-top: 1.8em;
	padding-bottom: 0em;
	border-bottom: 1px solid #999;
	letter-spacing: -500em;
	text-indent: -500em;
	height: 0px;
}
.utility {
	right: 4em;
	top: 20px;
	font-size: 0.85em;
}
.utility li {
	display: inline;
}

h2 {
	margin: 18px 0 4px 0;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
#head ul li, dl ul li {
	list-style: none;
	display: inline;
	margin: 0;
	padding: 0 0.2em;
}
ul.aliases, ul.projects, ul.tools {
	list-style: none;
	line-height: 24px;
}
ul.aliases a, ul.projects a, ul.tools a {
	padding-left: 22px;
	background: url(index.php?img=pngFolder) 0 100% no-repeat;
}
ul.tools a {
	background: url(index.php?img=pngWrench) 0 100% no-repeat;
}
ul.aliases a {
	background: url(index.php?img=pngFolderGo) 0 100% no-repeat;
}
dl {
	margin: 0;
	padding: 0;
}
dt {
	font-weight: bold;
	text-align: right;
	width: 11em;
	clear: both;
}
dd {
	margin: -1.35em 0 0 12em;
	padding-bottom: 0.4em;
	overflow: auto;
}
dd ul li {
	float: left;
	display: block;
	width: 16.5%;
	margin: 0;
	padding: 0 0 0 20px;
	background: url(index.php?img=pngPlugin) 2px 50% no-repeat;
	line-height: 1.6;
}
a {
	color: #024378;
	font-weight: bold;
	text-decoration: none;
}
a:hover {
	color: #04569A;
	text-decoration: underline;
}
#foot {
	text-align: center;
	margin-top: 1.8em;
	border-top: 1px solid #999;
	padding-top: 1em;
	font-size: 0.85em;
}
</style>
    
	<link rel="shortcut icon" href="index.php?img=favicon" type="image/ico" />
</head>

<body>
<table width="100%"><tr><td class="left">
	<img src="index.php?img=pngLogo">
</td>
<td class="right">
	<ul class="utility">
		<li><a href="?lang={$langues[$langue]['autreLangueLien1']}">{$langues[$langue]['autreLangue1']}</a>
		- <a href="?lang={$langues[$langue]['autreLangueLien2']}">{$langues[$langue]['autreLangue2']}</a></li>
		<br><br>
		<li>Provided by <a href="https://www.nltechno.com" targer="_blank">NLTechno</a></li>
	</ul>
</td></tr></table>
<hr>
	<h2> {$langues[$langue]['titreConf']} </h2>

	<dl class="content">
		<dt>{$langues[$langue]['versa']}</dt>
		<dd>${apacheVersion} &nbsp;</dd>
		<dt>{$langues[$langue]['versp']}</dt>
		<dd>${phpVersion} &nbsp;</dd>
		<dt>{$langues[$langue]['phpExt']}</dt> 
		<dd>
			<ul>
			${phpExtContents}
			</ul>
		</dd>
		<dt>{$langues[$langue]['versm']}</dt>
		<dd>${mysqlVersion} &nbsp;</dd>
		<dt>{$langues[$langue]['ipserver']}</dt>
		<dd>${ipServer} &nbsp;</dd>
	</dl>

	<h2>{$langues[$langue]['txtApp']}</h2>
	<table width="100%" style="padding: 0px 0px 0px 0px;">
	<tr valign="middle"><td>
	{$langues[$langue]['txtApp']}
	</td><td valign="middle">
	{$langues[$langue]['FromLocalNetwork']}
	</td><td valign="middle">
	{$langues[$langue]['FromInternet']}
	</td></tr>
	${aliasContents}			
	${projectContents}			
	</table>

	<h2>{$langues[$langue]['titrePage']}</h2>
	<ul class="tools">
		<li><a target="_blank" href="index.php?phpinfo=1">Phpinfo</a></li>
		<li><a target="_blank" href="server-status">Server-status</a></li>
		<li><a target="_blank" href="/dolibarr/support/index.php">{$langues[$langue]['askhelp']}</a></li>
	</ul>


	<ul id="foot">
		<li><a href="https://www.nltechno.com/pages/dolibarrwinbin.php">DoliWamp project</a> was built from modified sources of <a href="http://www.wampserver.com">WampServer project</a> from Anaska</li>
	</ul>
</body>
</html>
EOPAGE;

echo $pageContents;
?>
