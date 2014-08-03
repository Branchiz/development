<?php
/* $Id: bosnian-windows-1250.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 *     Translated by:
 *     Samir Kobiljak <kobiljak@aon.at>
 *     http://www.kobiljak.com
 */

$charset = 'windows-1250';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajta', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', '�et', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAbortedClients = 'Prekinuto';
$strAccessDeniedExplanation = 'phpMyAdmin je poku�ao da se pove�e na MySQL server, ali je server odbio povezivanje. Provjerite naziv hosta, korisni�ko ime i lozinku u config.inc.php i uvjerite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAccessDenied = 'Ulaz nije dozvoljen';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrijednost';
$strAddDeleteColumn = 'Dodaj/obri�i kolonu';
$strAddDeleteRow = 'Dodaj/obri�i polje za kriterij';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na slijede�oj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na slijede�oj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretra�ivanja (dio "WHERE" upita):';
$strAddToIndex = 'Dodaj u klju� &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhva�eno redova:';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj jo� jedan novi red';
$strAfter = 'Poslije %s';
$strAll = 'Sve';
$strAllTableSameWidth = 'prikaz svih tabela iste �irine?';
$strAlterOrderBy = 'Promijeni redoslijed u tabeli';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAnIndex = 'Klju� je upravo dodan %s';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji host';
$strAnyUser = 'Bilo koji korisnik';
$strAPrimaryKey = 'Osnovni klju� je upravo dodan %s';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastu�i';
$strAtBeginningOfTable = 'Na po�etku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Balti�ki';
$strBeginCut = 'PO�ETAK REZ';
$strBeginRaw = 'PO�ETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne mijenjaj';
$strBookmarkDeleted = 'Obilje�iva� je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Obilje�en SQL-upit';
$strBookmarkThis = 'Obilje�i SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowseForeignValues = 'Pregledaj strane vrijednosti';
$strBrowse = 'Pregled';
$strBulgarian = 'Bugarski';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadr�aj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporu�uje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u va�em phpMyAdmin konfiguracionom fajlu na <code>FALSE</code>. Ako �elite da koristite mogu�nosti BZ2 kompresije, trebalo bi da pre�ete na noviju verziju PHP-a. Vidite PHP izve�taj o gre�kama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da u�itam ekstenziju %s,<br />molim provjerite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da u�itam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli kori��enje ovih ekstenzija ili onemogu�ite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim klju� u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je u�itana. Proverite va�u PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChangeCopyModeCopy = '... sa�uvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obri�i starog iz tabele korisnika i zatim ponovo u�itaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obri�i stare iz tabela korisnika.';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obri�i.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strChange = 'Promijeni';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCharsets = 'Kodne strane';
$strCheckAll = 'Ozna�i sve';
$strCheckPrivsLong = 'Provjeri privilegije za bazu &quot;%s&quot;.';
$strCheckPrivs = 'Provjeri privilegije';
$strCheckTable = 'Provjeri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strComments = 'Komentari';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nije mogao da pro�ita va� konfiguracioni fajl!<br />Ovo se mo�e destiti ako PHP na�e gre�ku u procesiranju ili ne mo�e da prona�e fajl.<br />Pozovite konfiguracioni fajl direktno koriste�i donji link u pro�itajte poruke o gre�ci koje dobijate. U ve�ini slu�ajeve negde nedostaje navodnik ili ta�ka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnections = 'Konekcije';
$strCookiesRequired = 'Kola�i�i (Cookies) moraju u ovom slu�aju biti aktivirani.';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Vjerovatno je ve� zatvoren.';
$strCreateIndex = 'Napravi klju� na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi klju�';
$strCreate = 'Napravi';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCyrillic = '�irili�ni';
$strCzech = '�e�ki';

$strDanish = 'Danski';
$strDatabase = 'Baza podataka';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odba�ena.';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspje�no odba�ena.';
$strDatabasesStatsDisable = 'Isklju�i statistike';
$strDatabasesStatsEnable = 'Uklju�i statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uklju�ivanje statistika mo�e prouzrokovati veliki protok podataka izme�u web i MySQL servera.';
$strDatabasesStats = 'Statistika baze';
$strDataDict = 'Re�nik podataka';
$strDataOnly = 'Samo podaci';
$strData = 'Podaci';
$strDBComment = 'Komentar baze:';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDbSpecific = 'Specifi�no za bazu';
$strDefault = 'Podrazumjevano';
$strDefaultValueHelp = 'Za podrazumjevanu vrijednost, unesite samo jednu vrijednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDeleteAndFlushDescr = 'Ovo je naj�istiji na�in, ali ponovno u�itavanje privilegina mo�e da potraje.';
$strDeleteAndFlush = 'Obri�i korisnike i ponovo u�itaj privilegije.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDelete = 'Obri�i';
$strDeleting = 'Bri�em %s';
$strDelOld = 'Trenutna strana ima reference na tabele koje vi�e ne postoje. �elite li da obri�ete te reference?';
$strDescending = 'Opadaju�i';
$strDescription = 'Opis';
$strDictionary = 'rije�nik';
$strDisabled = 'Onemogu�eno';
$strDisplayFeat = 'Prika�i osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prika�i PDF shemu';
$strDoAQuery = 'Napravi "upit po primjeru" (d�oker: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Da li stvarno ho�ete da ';
$strDrop = 'Odbaci';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpingData = 'Prikaz podataka tabele';
$strDumpSaved = 'Sadr�aj baze je sa�uvan u fajl %s.';
$strDumpXRows = 'Prika�i %s redova po�ev�i od reda %s.';
$strDynamic = 'dinami�ki';

$strEditPDFPages = 'Izmena PDF strana';
$strEditPrivileges = 'Promijeni privilegije';
$strEdit = 'Promeni';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogu�eno';
$strEndCut = 'KRAJ REZ';
$strEnd = 'Kraj';
$strEndRaw = 'KRAJ SIROVO';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Gre�ka';
$strEstonian = 'Estonski';
$strExecuteBookmarked = 'Izvr�i upam�en upit';
$strExplain = 'Objasni SQL';
$strExport = 'Izvoz';
$strExtendedInserts = 'Pro�ireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih poku�aja';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja ograni�ena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s ve� postoji na serveru, promijenite ime datoteke ili uklju�ite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije mogu�e pro�itati';
$strFileNameTemplate = '�ablon imena datoteke';
$strFileNameTemplateRemember = 'zapamti �ablon';
$strFixed = 'ura�eno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadr�aj ove tabele mo�e se razlikovati od privilegija koje server koristi ako su izvr�ene ru�ne izmjene. U tom slu�aju %sponovo u�itajte privilegije%s pre nego �to nastavite.';
$strFlushTable = 'Osvje�i tabelu ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Nedostaje vrijednost u obrascu!';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenBy = 'Generirao';
$strGeneralRelationFeat = 'Op�te osobine relacija';
$strGenTime = 'Vrijeme kreiranja';
$strGerman = 'Njema�ki';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogu�i';
$strGreek = 'Gr�ki';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promijenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Jevrejski';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHome = 'Po�etna strana';
$strHostEmpty = 'Ime hosta je prazno!';
$strHost = 'Host';
$strHungarian = 'Ma�arski';

$strId = 'ID';
$strIdxFulltext = 'Tekst klju�';
$strIgnore = 'Ignori�i';
$strImportFiles = 'Uvoz fajlova';
$strIndexes = 'Klju�evi';
$strIndexHasBeenDropped = 'Klju� %s je obrisan';
$strIndex = 'Klju�';
$strIndexName = 'Ime klju�a :';
$strIndexType = 'Tip klju�a :';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Va� konfiguracioni fajl sadr�i pode�avanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Va� MySQL server radi sa ovim pode�avanjima, otvoren je za hakovanje, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInsert = 'Novi zapis';
$strInUse = 'se koristi';

$strJapanese = 'Japanski';
$strJumpToDB = 'Pre�i na bazu &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici �e i dalje imati pristup serveru dok privilegije ne budu ponovo u�itane.';
$strJustDelete = 'Samo obri�i korisnike iz tabele privilegija.';

$strKeepPass = 'Nemoj da mijenja� lozinku';
$strKeyname = 'Ime klju�a';
$strKill = 'Obustavi';
$strKorean = 'Korejski';

$strLandscape = 'Polo�eno';
$strLaTeX = 'LaTeX';
$strLengthSet = 'Du�ina/Vrijednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLinesTerminatedBy = 'Linije se zavr�avaju sa';
$strLinkNotFound = 'Veza nije prona�ena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLoginInformation = 'Podatci o prijavi';
$strLogin = 'Prijavljivanje';
$strLogout = 'Odjavljivanje';
$strLogPassword = 'Lozinka:';
$strLogUsername = 'Korisni�ko ime:';

$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora �ta %s radi.';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options_note = 'Molimo unesite vrijednosti za opcije transformacije koriste�i ovaj oblik: \'a\', 100, b,\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrijednosti, stavite obrnutu kosu crtu ispred njih (na primjer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation = 'Tranformacije �ita�a';
$strMIME_without = 'MIME-tipovi prikazani u kursivu nemaju odvojene funkcije transformacije.';
$strModifications = 'Izmjene su sa�uvane';
$strModifyIndexTopic = 'Izmijeni klju�';
$strModify = 'Promijeni';
$strMoveTableOK = 'Tabela %s je pomjerena u %s.';
$strMoveTable = 'Pomjeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableSameNames = 'Ne mogu da premjestim tabelu u samu sebe!';
$strMultilingual = 'vi�ejezi�ki';
$strMySQLCharset = 'MySQL set karaktera';
$strMySQLSaid = 'MySQL ka�e: ';
$strMySQLShowProcess = 'Prika�i listu procesa';
$strMySQLShowStatus = 'Prika�i MySQL informacije o toku rada';
$strMySQLShowVars = 'Prika�i MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Slijede�i';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDescription = 'nema opisa';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogu�ena.';
$strNoExplain = 'Presko�i obja�njavanje SQL-a';
$strNoFrames = 'phpMyAdmin preferira �ita�e koji podr�avaju okvire.';
$strNoIndex = 'Klju� nije definisan!';
$strNoIndexPartsDefined = 'Dijelovi klju�a nisu definisani!';
$strNoModification = 'Nema izmjena';
$strNo = 'Ne';
$strNone = 'nema';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sa�uva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoRights = 'Nije Vam dozvoljeno da budete ovdje!';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu prona�ene u bazi.';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije prona�ena ili nije postavljena u %s';
$strNoUsersFound = 'Korisnik nije na�en.';
$strNoValidateSQL = 'Presko�i provjeru SQL-a';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiziraj tabelu';
$strOr = 'ili';
$strOverhead = 'Prekora�enje';
$strOverwriteExisting = 'Prepi�i postoje�e fajlove';

$strPageNumber = 'Broj strane:';
$strPaperSize = 'Dimenzije papira';
$strPartialText = 'Dio teksta';
$strPasswordChanged = 'Lozinka za %s je uspje�no promjenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPassword = 'Lozinka';
$strPasswordNotSame = 'Lozinke nisu identi�ne!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPerHour = 'na sat';
$strPerMinute = 'u minuti';
$strPerSecond = 'u sekundi';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljnu gresku sa vi�ebajtnim stringovima (mbstring). Pogledajte izvje�taj o gre�ci br. 19404. Ova verzija PHP-a se ne preporu�uje za kori��enje sa phpMyAdmin.';
$strPhp = 'Napravi PHP kod';
$strPHPVersion = 'verzija PHP-a';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti podje�ena u konfiguracionoj datoteci!';
$strPortrait = 'Uspravno';
$strPos1 = 'Po�etak';
$strPrevious = 'Prethodna';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je obrisan';
$strPrimaryKeyName = 'Ime primarnog klju�a mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog klju�a!)';
$strPrimary = 'Primarni';
$strPrint = '�tampaj';
$strPrintView = 'Za �tampu';
$strPrivDescAllPrivileges = 'Uklju�uje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmjenu struktura postoje�ih tabela.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute = 'Dozvoljava pokretanje sa�uvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog u�itavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje klju�eva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamjenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaklju�avanje tabela teku�im procesima.';
$strPrivDescMaxConnections = 'Ograni�ava broj novih konekcija koje korisnik mo�e ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograni�ava broj upita koje korisnik mo�e da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograni�ava broj komandi koje menjaju tabele ili baze koje korisnik mo�e da izvr�i na sat.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno u�itavanje pode�avanja servera i pra�njenje ke�a servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomo�ni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomo�nih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava �itanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShutdown = 'Dozvoljava ga�enje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za ve�inu administrativnih opcija kao �to su pode�avanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspe�no ponovo u�itane.';
$strProcesses = 'Procesi';
$strProcesslist = 'Lista procesa';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Upit po primeru';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReceived = 'Primljeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRelationalSchema = 'Relaciona shema';
$strRelationNotWorking = 'Dodatne mogu�nosti za rad sa povezanim tabelama su isklju�ene. Da biste saznali za�to, kliknite %sovde%s.';
$strRelations = 'Relacije';
$strRelationView = 'Relacioni pogled';
$strReloadingThePrivileges = 'Ponovo u�itavam privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameTableOK = 'Tabeli %s promjenjeno ime u %s';
$strRenameTable = 'Promjeni ime tabele u ';
$strRepairTable = 'Popravi tabelu';
$strReplaceNULLBy = 'Zamijeni NULL sa';
$strReplaceTable = 'Zamijeni podatke u tabeli sa podatcima iz datoteke';
$strReset = 'Resetuj';
$strResourceLimits = 'Ograni�enja resursa';
$strReType = 'Ponovite unos';
$strRevokeAndDeleteDescr = 'Korisnici �e i dalje imati USAGE privilegije dok se privilegije ponovo ne u�itaju.';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obri�i.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRevoke = 'Zabrani';
$strRowLength = 'Du�ina reda';
$strRowsFrom = ' redova po�ev od reda';
$strRowSize = 'Veli�ina reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRows = 'Redova';
$strRowsStatistic = 'Statistike reda';
$strRunning = 'na serveru %s';
$strRunQuery = 'Izvr�i SQL upit';
$strRunSQLQuery = 'Izvr�i SQL upit(e) na bazi %s';
$strRussian = 'Ruski';

$strSaveOnServer = 'Sa�uvaj na server u direktorijum %s';
$strSave = 'Sa�uvaj';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearchFormTitle = 'Pretra�ivanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Rije�i ili vrednosti koje se tra�e (d�oker: "%"):';
$strSearchOption1 = 'bar jednu od rije�i';
$strSearchOption2 = 'sve rije�i';
$strSearchOption3 = 'ta�an izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearch = 'Pretra�ivanje';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Tra�i:';
$strSecretRequired = 'Konfiguraciona datoteka zahtjeva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sa�uvaj kao datoteku';
$strSent = 'Poslato';
$strServerChoice = 'Izbor servera';
$strServer = 'Server';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi ve� %s. Pokrenut je %s.';
$strServerTabVariables = 'Promjenljive';
$strServerTrafficNotes = '<b>Saobra�aj servera</b>: Tabele pokazuju statistike mre�nog saobra�aja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i pode�avanja';
$strServerVersion = 'Verzija servera';
$strSessionValue = 'Vrijednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrijednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbjegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShowAll = 'Prika�i sve';
$strShowColor = 'Prika�i boju';
$strShowDatadictAs = 'Format rije�nika podataka';
$strShowFullQueries = 'Prika�i kompletne upite';
$strShowGrid = 'Prika�i mre�u';
$strShowingRecords = 'Prikaz zapisa';
$strShowPHPInfo = 'Prika�i informacije o PHP-u';
$strShow = 'Prika�i';
$strShowTableDimension = 'Prika�i dimenzije tabele';
$strShowTables = 'Prika�i tabele';
$strShowThisQuery = 'Prika�i ponovo ovaj upit';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veli�ina';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauze�e';
$strSplitWordsWithSpace = 'Rije�i se odvajaju razmakom (" ").';
$strSQLParserBugMessage = 'Postoji mogu�nost da ste prona�li gresku u SQL parseru. Molimo ispitajte svoj upit pa�ljivo, i provjerite da su navodnici ispravni i da ne nedostaju. Ostali mogu�i razlozi gre�ke mogu biti da ste poslali binarni fajl van oblasti za obi�an tekst. Mo�ete probati svoj upit u MySQL interfejsu komandne linije. Donja poruka o gre�ci MySQL servera, ako je ima, mo�e vam pomo�i u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspjeva tamo gde uspeva interfejs komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i po�aljite nam izvje�taj o gre�ci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji gre�ka u va�em SQL upitu. Ovde je poruka o gre�ki MySQL servera, koja vam mo�e pomo�i u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neispravan identifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strStatCheckTime = 'Posljednja provjera';
$strStatCreateTime = 'Napravljeno';
$strStatement = 'Ime';
$strStatUpdateTime = 'Posljednja izmjena';
$strStatus = 'Status';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podatci';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlo�i strukturu tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�alji';
$strSuccess = 'Va� SQL upit je uspe�no izvr�en';
$strSum = 'Ukupno';
$strSwedish = '�vedski';
$strSwitchToTable = 'Pre�i na kopiranu tabelu';

$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odba�ena';
$strTableHasBeenEmptied = 'Tabela %s je ispra�njena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Radnje na tabeli';
$strTableOfContents = 'Sadr�aj';
$strTableOptions = 'Opcije tabele';
$strTables = '%s tabela';
$strTableStructure = 'Struktura tabele';
$strTable = 'Tabela';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTextAreaLength = 'Zbog njehove veli�ine, polje<br />mo�da ne�ete mo�i da izmenite';
$strThai = 'Tajlandski ';
$strThisHost = 'Ovaj server';
$strThreadSuccessfullyKilled = 'Proces %s je uspje�no prekinut.';
$strTime = 'Vrijeme';
$strToggleScratchboard = 'Uklju�uje/isklju�uje scratchboard';
$strTotalUC = 'Ukupno';
$strTotal = 'ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraffic = 'Saobra�aj';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je mogu�e kliknuti; opcije: �irina, visina u pikselima (�uva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj slici (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prika�i JPEG slike na strani';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokre�e eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vra�a standardni izlaz aplikacije. Podrazumevano je Tidy, za lep�i prikaz HTML koda. Zbog sigurnosnih razloga, morate ru�no izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje �elite da koristite. Prva opcija je broj programa koje �elite da koristite, a druga su parametri programa. Ako se tre�i parametar postavi na 1 izlaz �e biti konvertovan koriste�i htmlspecialchars() (podrazumevano je 1). Ako je �etvrti parametar postavljen na 1, NOWRAP �e biti dodato �eliji sa sadr�ajem tako da �e izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = '�uva originalno formatiranje polja. Escaping se ne vr�i.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je �irina u pikselima, tre�a je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__substr = 'Pokazuje samo deo stringa. Prva opcija je ofset koji defini�e gde po�inje izlaz va�eg teksta (podrazumevano 0). Druga opcija je ofset koji pokazuje koliko �e teksta biti prikazano. Ako je nema, sav preostali tekst �e biti prikazan. Tre�a opcija odre�uje koji �e znaci biti dodati izlazu kada se prika�e podstring (podrazumevano: ...) .';
$strTruncateQueries = 'Prika�i skra�ene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ni�ta';
$strUpdatePrivMessage = 'A�urirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promjenjen.';
$strUpdateQuery = 'A�uriraj upit';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se a�urira tabela Column_comments';
$strUsage = 'Zauze�e';
$strUseBackquotes = 'Koristi \' za ograni�avanje imena polja';
$strUseHostTable = 'Koristi tabelu hosta';
$strUserAlreadyExists = 'Korisnik %s ve� postoji!';
$strUserEmpty = 'Ime korisnika nije unijeto!';
$strUser = 'Korisnik';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije prona�en u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspje�no obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrijednost';

$strValidateSQL = 'Provjeri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrijednost';
$strVar = 'Promjenljiva';
$strViewDumpDatabases = 'Prika�i sadr�aj (shemu) baze';
$strViewDumpDB = 'Prika�i sadr�aj (shemu) baze';
$strViewDump = 'Prika�i sadr�aj (shemu) tabele';

$strWebServerUploadDirectory = 'direkcija za slanje web servera ';
$strWebServerUploadDirectoryError = 'Direkcija koju ste izabrali za slanje nije dostupna';
$strWelcome = 'Dobrodo�li na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'D�oker';
$strWindowNotFound = 'Odredi�nji prozor pretra�iva�a nije mogao da bude a�uriran. Mo�da ste zatvorili mati�ni prozor, ili va� prera�iva� onemogu�ava a�uriranje me�u prozorima zbog sigurnosnih pode�avanja';
$strWithChecked = 'Ozna�eno:';
$strWrongUser = 'Pogre�no korisni�ko ime/lozinka. Ulaz nije dozvoljen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja limite.';
$strZip = '"zipovano"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCSV = 'CSV';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strExcelEdition = 'Excel edition';  //to translate

$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate
$strGeorgian = 'Georgian';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInnoDBPages = 'pages';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexCaption = 'Table caption';  //to translate
$strLatexContent = 'Content of table __TABLE__';  //to translate
$strLatexContinuedCaption = 'Continued table caption';  //to translate
$strLatexContinued = '(continued)';  //to translate
$strLatexIncludeCaption = 'Include table caption';  //to translate
$strLatexLabel = 'Label key';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';  //to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLogServer = 'Server';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMRecoverOptions = 'Automatic recovery mode';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMyISAMSortBufferSize = 'Sort buffer size';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPolish = 'Polish';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRomanian = 'Romanian';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowOpenTables = 'Show open tables';  //to translate
$strShowSlaveHosts = 'Show slave hosts';  //to translate
$strShowSlaveStatus = 'Show slave status';  //to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';  //to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';  //to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';  //to translate
$strShowStatusCreated_tmp_filesDescr = 'How many temporary files mysqld has created.';  //to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';  //to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';  //to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';  //to translate
$strShowStatusDelayed_writesDescr = 'The number of INSERT DELAYED rows written.';  //to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';  //to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';  //to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';  //to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';  //to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';  //to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';  //to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';  //to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';  //to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';  //to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';  //to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';  //to translate
$strShowStatusHandler_updateDescr = 'The number of requests to update a row in a table.';  //to translate
$strShowStatusHandler_writeDescr = 'The number of requests to insert a row in a table.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'The number of pages containing data (dirty or clean).';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'The number of pages currently dirty.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'The number of free pages.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total size of buffer pool, in pages.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';  //to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';  //to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';  //to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';  //to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';  //to translate
$strShowStatusInnodb_data_fsyncsDescr = 'The number of fsync() operations so far.';  //to translate
$strShowStatusInnodb_data_pending_fsyncsDescr = 'The current number of pending fsync() operations.';  //to translate
$strShowStatusInnodb_data_pending_readsDescr = 'The current number of pending reads.';  //to translate
$strShowStatusInnodb_data_pending_writesDescr = 'The current number of pending writes.';  //to translate
$strShowStatusInnodb_data_readDescr = 'The amount of data read so far, in bytes.';  //to translate
$strShowStatusInnodb_data_readsDescr = 'The total number of data reads.';  //to translate
$strShowStatusInnodb_data_writesDescr = 'The total number of data writes.';  //to translate
$strShowStatusInnodb_data_writtenDescr = 'The amount of data written so far, in bytes.';  //to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_log_waitsDescr = 'The number of waits we had because log buffer was too small and we had to wait for it to be flushed before continuing.';  //to translate
$strShowStatusInnodb_log_write_requestsDescr = 'The number of log write requests.';  //to translate
$strShowStatusInnodb_log_writesDescr = 'The number of physical writes to the log file.';  //to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';  //to translate
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'The number of pending log file fsyncs.';  //to translate
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pending log file writes.';  //to translate
$strShowStatusInnodb_os_log_writtenDescr = 'The number of bytes written to the log file.';  //to translate
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';  //to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';  //to translate
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';  //to translate
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';  //to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';  //to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';  //to translate
$strShowStatusInnodb_rows_deletedDescr = 'The number of rows deleted from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_insertedDescr = 'The number of rows inserted in InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_readDescr = 'The number of rows read from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_updatedDescr = 'The number of rows updated in InnoDB tables.';  //to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';  //to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';  //to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';  //to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';  //to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';  //to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';  //to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';  //to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';  //to translate
$strShowStatusNot_flushed_delayed_rowsDescr = 'The number of rows waiting to be written in INSERT DELAYED queues.';  //to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';  //to translate
$strShowStatusOpen_filesDescr = 'The number of files that are open.';  //to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
$strShowStatusReset = 'Reset';  //to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';  //to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';  //to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';  //to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';  //to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';  //to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';  //to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';  //to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';  //to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';  //to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';  //to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';  //to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';  //to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';  //to translate
$strShowStatusSort_rowsDescr = 'The number of sorted rows.';  //to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWriteRequests = 'Write requests';  //to translate

$strQueryResultsOperations = 'Query results operations';  //to translate
$strAddClause = 'Add %s';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strServers = 'Servers';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strFunctions = 'Functions';  //to translate
$strProcedures = 'Procedures';  //to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate
$strFontSize = 'Font size';  //to translate
$strLanguage = 'Language';  //to translate
$strPmaWiki = 'phpMyAdmin wiki';  //to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';  //to translate
$strDocSQL = 'DocSQL';  //to translate
$strTableName = 'Table name';  //to translate
$strTableIsEmpty = 'Table seems to be empty!';  //to translate
$strDbIsEmpty = 'Database seems to be empty!';  //to translate
$strShowingPhp = 'Showing as PHP code';  //to translate
$strShowingSQL = 'Showing SQL query';  //to translate
$strDesigner = 'Designer';  //to translate
$strNumberOfTables = 'Number of tables';  //to translate
$strCreateTable  = 'Create table';  //to translate
$strCreateRelation = 'Create relation';  //to translate
$strSavePosition = 'Save position';  //to translate
$strSelectForeignKey = 'Select Foreign Key';  //to translate
$strHide         = 'Hide';  //to translate
$strShowHideLeftMenu = 'Show/Hide left menu';  //to translate
$strReload = 'Reload';  //to translate
$strSmallBigAll = 'Small/Big All';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strMoveMenu = 'Move Menu';  //to translate
$strAngularLinks = 'Angular links';  //to translate
$strDirectLinks = 'Direct links';  //to translate
$strHideShowAll = 'Hide/Show all';  //to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';  //to translate
$strInternalRelationAdded = 'Internal relation added';  //to translate
$strInnoDBRelationAdded = 'InnoDB relation added';  //to translate
$strRelationDeleted = 'Relation deleted';  //to translate
$strToSelectRelation = 'To select relation, click :';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strRecommended = 'recommended';  //to translate
$strToFromPage = 'to/from page';  //to translate
$strSelectReferencedKey = 'Select referenced key';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate
$strHelp = 'Help';  //to translate
$strCancel = 'Cancel';  //to translate
$strDeleteRelation = 'Delete relation';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate
$strStructureForView = 'Structure for view';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strToggleSmallBig = 'Toggle small/big';  //to translate
$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strSnapToGrid = 'Snap to grid';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';  //to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';  //to translate
$strUploadErrorCantWrite = 'Failed to write file to disk.';  //to translate
$strUploadErrorExtension = 'File upload stopped by extension.';  //to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strViewName = 'VIEW name';  //to translate
$strOptions = 'Options';  //to translate
$strFiles = 'Files';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate
$strRoutines = 'Routines';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strTriggers = 'Triggers';  //to translate
$strEvent = 'Event';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
