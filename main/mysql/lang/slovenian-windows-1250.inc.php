<?php
/* $Id: slovenian-windows-1250.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/* By: urska.colner, agenda d.o.o. <urska.colner@agenda.si>, uros kositer, agenda d.o.o. <urosh@agenda.si> */

$charset = 'windows-1250';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', '�et', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';
$timespanfmt = '%s dni, %s ur, %s minut in %s sekund';

$strAbortedClients = 'Prekinjeno';
$strAccessDenied = 'Dostop zavrnjen';
$strAccessDeniedExplanation = 'phpMyAdmin se je posku�al povezati na MySQL stre�nik, ki je zavrnil povezavo. Preverite, ali gostitelj, uporabni�ko ime in geslo v datoteki config.inc.php ustrezajo podatkom administratorja MySQL stre�nika.';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrednost';
$strAddConstraints = 'Dodaj omejitve';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddHeaderComment = 'Dodaj prilagojen komentar v glavo (\\n prelomi vrstice)';
$strAddIntoComments = 'Dodaj med komentarje';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na naslednji podatkovni bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na naslednji tabeli';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfterInsertBack = 'Nazaj na prej�njo stran';
$strAfterInsertNewInsert = 'Vstavi �e eno novo vrstico';
$strAfterInsertSame = 'Pojdi nazaj na stran';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'prika�em vse tabele enake �irine?';
$strAll = 'Vse/Vsi';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAnIndex = 'Na %s je dodan indeks';
$strAnyHost = 'Katerikoli gostitelj';
$strAny = 'Katerikoli';
$strAnyUser = 'Katerikoli uporabnik';
$strAPrimaryKey = 'Na %s je dodan primarni klju�';
$strArabic = 'Arabsko';
$strArmenian = 'Armensko';
$strAscending = 'Nara��ajo�e';
$strAtBeginningOfTable = 'Na za�etku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Samodejna postavitev';

$strBack = 'Nazaj';
$strBaltic = 'Baltsko';
$strBeginCut = 'ZA�ETEK IZREZA';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkAllUsers = 'Dovoli dostop do zaznamka vsem uporabnikom';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Ozna�ena SQL-poizvedba';
$strBookmarkThis = 'Ozna�i to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowseForeignValues = 'Prebrskaj tuje vrednosti';
$strBrowse = 'Prebrskaj';
$strBulgarian = 'Bolgarsko';
$strBzError = 'phpMyAdmin ni uspel stisniti odlo�enih podatkov zaradi neuporabne kon�nice Bz2 v tej razli�ici php. Zelo dobro bi bilo, da v konfiguracijski datoteki za phpMyAdmin spremenite ukaz <code>$cfg[\'BZipDump\']</code> v <code>FALSE</code>. �e �elite izvajati stiskanje s pomo�jo Bz2, boste morali posodobiti php v novej�o razli�ico. Za podrobnosti si oglejte php poro�ilo o napaki %s.';
$strBzip = '"bzipano"';

$strCalendar = 'Koledar';
$strCannotLogin = 'Ne morem se prijaviti v MySQL stre�nik';
$strCantLoad = 'ne morem nalo�iti podalj�ka %s,<br />prosim preverite PHP konfiguracijo';
$strCantLoadRecodeIconv = 'Ni mogo�e nalo�iti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogo�al uporabo teh ekstenzij ali onemogo�ite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogo�e preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogo�e uporabljati iconv, libiconv ali recode_string funkcij, �eprav so ekstenzije normalno nalo�ene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCaseInsensitive = 'ne razlikuj velikih in malih �rk';
$strCaseSensitive = 'razlikuj velike in male �rke';
$strCentralEuropean = 'Centralno evropsko';
$strChangeCopyModeCopy = '... obdr�i starega.';
$strChangeCopyModeDeleteAndReload = ' ... izbri�i starega uporabnika s seznama uporabnikov ter ponovno nalo�i njegove pravice.';
$strChangeCopyModeJustDelete = ' ... izbri�i starega s seznama uporabnikov.';
$strChangeCopyModeRevoke = ' ... prekli�i vse aktivne pravice starega uporabnika ter jih izbri�i.';
$strChangeCopyMode = 'Ustvari novega uporabnika z enakimi pravicami in ...';
$strChangeCopyUser = 'Spremeni prijavne informacije / Kopiraj uporabnika';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strChange = 'Spremeni';
$strCharset = 'Nabor znakov';
$strCharsetOfFile = 'Nabor znakov datoteke:';
$strCharsetsAndCollations = 'Nabori znakov in pravila za razvr��anje znakov';
$strCharsets = 'Nabori znakov';
$strCheckAll = 'Ozna�i vse';
$strCheckOverhead = 'Preveri prekora�ene';
$strCheckPrivsLong = 'Preveri privilegije za podatkovno bazo &quot;%s&quot;.';
$strCheckPrivs = 'Preveri privilegije';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strCollation = 'Pravilo za razvr��anje znakov';
$strColumnNames = 'Imena stolpcev';
$strColumnPrivileges = 'Privilegiji tipi�ni za stolpec';
$strCommand = 'Ukaz';
$strCommentsForTable = 'KOMENTARJI ZA TABELO';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strCompression = 'Stiskanje';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, �e php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporo�ilo o napaki. V ve�ini primerov gre za manjkajo�i narekovaj ali podpi�je.<br />�e dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConnectionError = 'Povezava ni mogo�a: neveljavne nastavitve.';
$strConnections = 'Povezave';
$strConstraintsForDumped = 'Omejitve tabel za povzetek stanja';
$strConstraintsForTable = 'Omejitve za tabelo';
$strCookiesRequired = '�e �elite �e dalje uporabljati program, morate omogo�iti pi�kotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCopyTableSameNames = 'Tabele ni mogo�e kopirati same vase!';
$strCouldNotKill = 'phpMyAdmin ni uspel prekiniti teme %s. Verjetno je �e prekinjena.';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCreate = 'Ustvari';
$strCreationDates = 'Datumi za ustvarjeno/posodobljeno/preverjeno';
$strCriteria = 'Kriteriji';
$strCroatian = 'Hrva�ko';
$strCyrillic = 'Cirilica';
$strCzech = '�e�ko';
$strCzechSlovak = '�e�koslova�ko';

$strDanish = 'Dansko';
$strDatabaseEmpty = 'Ime podatkovne baze je prazno!';
$strDatabaseExportOptions = 'Mo�nosti za izvoz baze podatkov';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavr�ena.';
$strDatabase = 'Podatkovna baza';
$strDatabasesDropped = '%s podatkovne baze so uspe�no zavr�ene.';
$strDatabases = 'podatkovne baze';
$strDatabasesStatsDisable = 'Onemogo�i statistiko';
$strDatabasesStatsEnable = 'Omogo�i statistiko';
$strDatabasesStatsHeavyTraffic = 'Obvestilo: Omogo�itev statistike podatkovne baze lahko povzro�i mo�no pove�an promet med spletnim in podatkovnim stre�nikom.';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDataDict = 'Podatkovni slovar';
$strDataOnly = 'Samo podatki';
$strData = 'Podatki';
$strDBComment = 'Komentar zbirke podatkov: ';
$strDbPrivileges = 'Privilegiji tipi�ni za podatkovno bazo';
$strDBRename = 'Preimenuj podatkovno bazo v';
$strDbSpecific = 'glede na zbirko podatkov';
$strDefault = 'Privzeto';
$strDefaultValueHelp = 'Za privzete vrednosti vnesite samo vrednosti, brez po�evnice nazaj ali narekovaja, npr.: a';
$strDelayedInserts = 'Uporabi zakasnjeno vstavljanje';
$strDeleteAndFlushDescr = 'To je najbolj�i na�in, vendar lahko osve�evanje privilegijev traja nekaj �asa.';
$strDeleteAndFlush = 'Izbri�i uporabnike in potem osve�i privilegije.';
$strDeletedRows = 'Izbrisane vrstice:';
$strDeleted = 'Vrstica je izbrisana';
$strDelete = 'Izbri�i';
$strDeleting = 'Bri�em %s';
$strDelOld = 'Trenutna stran vsebuje sklice na tabele, ki ne obstajajo ve�. Ali �elite izbrisati te sklice?';
$strDescending = 'Padajo�e';
$strDescription = 'Opis';
$strDictionary = 'slovar';
$strDisabled = 'Onemogo�eno';
$strDisplayFeat = 'Prika�i lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prika�i PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Ali res �elite ';
$strDropDatabaseStrongWarning = 'S tem dejanjem boste UNI�ILI celotno bazo podatkov!';
$strDropUsersDb = 'Izbri�i podatkovne baze, ki imajo enako ime kot uporabniki.';
$strDrop = 'Zavr�i';
$strDumpingData = 'Odlo�i podatke za tabelo';
$strDumpSaved = 'Dump je shranjen v datoteko %s.';
$strDumpXRows = 'Odlo�i %s vrstic, za�ni z zapisom # %s.';
$strDynamic = 'dinami�no';

$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEdit = 'Uredi';
$strEffective = 'U�inkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno mno�ico (npr. ni� vrstic).';
$strEnabled = 'Omogo�eno';
$strEncloseInTransaction = 'Vklju�i izvoz v transakcijo';
$strEndCut = 'KONEC IZREZA';
$strEnd = 'Konec';
$strEndRaw = 'END RAW';
$strEnglish = 'Angle�ko';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angle��ini ';
$strError = 'Napaka';
$strEstonian = 'Estonsko';
$strExcelEdition = 'Izdaja za Excel';
$strExecuteBookmarked = 'Izvedi izbrano poizvedbo';
$strExplain = 'Razlo�i SQL stavek';
$strExport = 'Izvozi';
$strExtendedInserts = 'Raz�irjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspeli poizkusi';
$strFieldHasBeenDropped = 'Polje %s je zavr�eno';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja zaklju�ena z';
$strFileAlreadyExists = 'Datoteka %s �e obstaja na stre�niku, spremenite ime novi ali prepi�ite obstoje�o datoteko.';
$strFileCouldNotBeRead = 'Ne morem prebrati datoteke';
$strFileNameTemplate = 'Predloga datoteke';
$strFileNameTemplateRemember = 'Shrani predlogo';
$strFixed = 'fiksno';
$strFlushPrivilegesNote = 'Obvestilo: phpMyAdmin dobi podatke o uporabnikovih privilegijih iz MySQL tabel privilegijev. Vsebina teh tabel se lahko razlikuje od privilegijev, ki jih uporablja stre�nik, �e so bile tabele ro�no spremenjene. V tem primeru morate, preden nadaljujete, osve�iti privilegije.';
$strFlushTable = 'Po�isti tabelo ("FLUSH")';
$strFormat = 'Oblika';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGeneralRelationFeat = 'Splo�ne lastnosti relacij';
$strGenTime = '�as nastanka';
$strGeorgian = 'Gruzijsko';
$strGerman = 'Nem�ko';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalni privilegiji';
$strGlobalValue = 'Skupna vrednost';
$strGo = 'Izvedi';
$strGrantOption = 'Dovoli';
$strGreek = 'Gr�ko';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHebrew = 'Hebrejsko';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna doma�a stran phpMyAdmin';
$strHostEmpty = 'Ime gostitelja je prazno!';
$strHost = 'Gostitelj';
$strHungarian = 'Mad�arsko';

$strId = 'ID';
$strIdxFulltext = 'Polno besedilo';
$strIgnoreInserts = 'Uporabi mo�nost prezri vstavke';
$strIgnore = 'Prezri';
$strImportFiles = 'Uvozi datoteke';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indeks %s je zavr�en';
$strIndex = 'Indeks';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strInnodbStat = 'InnoDB stanje';
$strInsecureMySQL = 'Konfiguracijska datoteka vsebuje nastavitve (uporabnik root brez gesla), ki odgovarjajo privzetemu privlegiranemu ra�unu MySQLa. MySQL stre�nik te�e s privzetimi nastavitvami, zato je izpostavljen vdorom. �imprej odpravite ti dve varnostni luknji.';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertedRowId = 'Vstavljen id vrstice:';
$strInsertedRows = 'Vstavljene vrstice:';
$strInsert = 'Vstavi';
$strInternalNotNecessary = '* Notranja relacija je nepotrebna, �e obstaja tudi v InnoDB.';
$strInternalRelations = 'Notranje relacije';
$strInUse = 'v uporabi';

$strJapanese = 'Japonsko';
$strJumpToDB = 'Presko�i na podatkovno bazo &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Izbrisani&quot; uporabniki lahko �e vedno normalno dostopajo do stre�nika, dokler ne osve�ite privilegijev';
$strJustDelete = 'Samo izbri�i uporabnike iz tabel privilegijev.';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime klju�a';
$strKill = 'Prekini proces';
$strKorean = 'Korejsko';

$strLandscape = 'Le�e�e';
$strLatexCaption = 'Ime tabele';
$strLatexContent = 'Vsebina tabele __TABLE__';
$strLatexContinuedCaption = 'Nadaljevanje imena tabele';
$strLatexContinued = '(nadaljevanje)';
$strLatexIncludeCaption = 'Vklju�i ime tabele';
$strLatexLabel = 'Ozna�i klju�';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabele __TABLE__';
$strLengthSet = 'Dol�ina/Vrednosti*';
$strLimitNumRows = '�tevilo vrstic na stran';
$strLinesTerminatedBy = 'Vrstice zaklju�ene z';
$strLinkNotFound = 'Povezave ni mogo�e najti';
$strLinksTo = 'Povezave z';
$strLithuanian = 'Litvansko';
$strLocalhost = 'Lokalno';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLoginInformation = 'Podatki o prijavi';
$strLogin = 'Prijava';
$strLogout = 'Odjava';
$strLogPassword = 'Geslo:';
$strLogServer = 'Stre�nik';
$strLogUsername = 'Uporabni�ko ime:';

$strMaximumSize = 'Najve�ja velikost: %s%s';
$strMIME_available_mime = 'Razpolo�ljive MIME-vrste';
$strMIME_available_transform = 'Razpolo�ljive pretvorbe';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME-vrsta';
$strMIME_nodescription = 'Za to pretvorbo ni na voljo opisa.<br />Za funkcije %s se pozanimajte pri avtorju.';
$strMIME_transformation_note = 'Seznam razpolo�ljivih mo�nosti pretvorbe in pretvorbe MIME-vrst boste videli, �e kliknete na %sopise transformacij%s';
$strMIME_transformation_options = 'Mo�nosti pretvorbe';
$strMIME_transformation_options_note = 'Vrednosti za mo�nosti pretvorbe vnesite v naslednji obliki: \'a\', 100, b,\'c\'...<br />�e �elite med vrednosti vnesti po�evnico nazaj ("\") ali enojni narekovaj ("\'"), morate pred ta znak postaviti (�e eno) po�evnico nazaj (npr. \'\\\\xyz\' ali \'a\\\'b\').';
$strMIME_transformation = 'Pretvorba z brskalnikom';
$strMIMETypesForTable = 'VRSTE MIME ZA TABELO';
$strMIME_without = 'MIME-vrste, ki so napisano le�e�e, nimajo lastne pretvorbene funkcije';
$strModifications = 'Spremembe so shranjene';
$strModifyIndexTopic = 'Spremeni indeks';
$strModify = 'Spremeni';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableSameNames = 'Tabele ni mogo�e premakniti same vase!';
$strMultilingual = 've�jezi�no';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLShowProcess = 'Poka�i procese';
$strMySQLShowStatus = 'Poka�i teko�e informacije o MySQL';
$strMySQLShowVars = 'Poka�i sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDatabasesSelected = 'Ni izbranih podatkovnih baz.';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izklju�ene.';
$strNoExplain = 'Presko�i razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznej�i z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNo = 'Ne';
$strNone = 'Brez';
$strNoOptions = 'Za to obliko ni mo�nosti';
$strNoPassword = 'Brez gesla';
$strNoPermission = 'Spletni stre�nik nima dovoljenja za shranjevanje datoteke %s';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoSpace = 'Ni dovolj prostora za shranjevanje datoteke %s.';
$strNoTablesFound = 'V podatkovni bazi ni mogo�e najti tabel.';
$strNotNumber = 'To ni �tevilo!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogo�e najti ali pa ni v %s';
$strNoUsersFound = 'Ni mogo�e najti uporabnika(ov).';
$strNoValidateSQL = 'Presko�i preverjanje pravilnosti SQL stavka';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';
$strNumTables = 'Ttabel';

$strOK = 'V redu';
$strOperations = 'Operacije';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiraj tabelo';
$strOr = 'Ali';
$strOverhead = 'Prese�ek';
$strOverwriteExisting = 'Prepi�i obstoje�o(e) datoteko(e)';

$strPageNumber = '�tevilka strani:';
$strPaperSize = 'Velikost papirja';
$strPartialText = 'Delna besedila';
$strPasswordChanged = 'Geslo za %s je uspe�no spremenjeno.';
$strPasswordEmpty = 'Geslo je prazno!';
$strPassword = 'Geslo';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPerHour = 'na uro';
$strPerMinute = 'na minuto';
$strPerSecond = 'na sekundo';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Uporabljate PHP 4.2.3, ki ima resne te�ave z ve�bitnimi stavki (mbstring). Glej PHP poro�ilo o hro��u 19404. Ta verzija PHP ni priporo�ljiva za uporabo s phpMyAdmin.';
$strPhp = 'Ustvari PHP kodo';
$strPHPVersion = 'Razli�ica PHP';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPortrait = 'Pokon�no';
$strPos1 = 'Za�etek';
$strPrevious = 'Prej�nji';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je zavr�en';
$strPrimaryKeyName = 'Ime primarnega klju�a mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega klju�a!)';
$strPrimary = 'Primarni';
$strPrint = 'Natisni';
$strPrintViewFull = 'Pogled za tiskanje (s polnimi besedili)';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivDescAllPrivileges = 'Vsebuje vse privilegije razen GRANT.';
$strPrivDescAlter = 'Omogo�a spreminjanje strukture obstoje�ih tabel.';
$strPrivDescCreateDb = 'Omogo�a ustvarjanje novih podatkovnih baz in tabel.';
$strPrivDescCreateTbl = 'Omogo�a ustvarjanje novih tabel.';
$strPrivDescCreateTmpTable = 'Omogo�a ustvarjanje za�asnih tabel.';
$strPrivDescDelete = 'Omogo�a brisanje podatkov.';
$strPrivDescDropDb = 'Omogo�a brisanje podatkovnih baz in tabel.';
$strPrivDescDropTbl = 'Omogo�a brisanje tabel.';
$strPrivDescExecute = 'Omogo�a poganjanje shranjenih postopkov; V tej verziji MySQL nima pomena.';
$strPrivDescFile = 'Omogo�a uva�anje in izva�anje podatkov v datoteke.';
$strPrivDescGrant = 'Omogo�a dodajanje uporabnikov in privilegijev brez osve�evanja privilegijev.';
$strPrivDescIndex = 'Omogo�a ustvarjanje in brisanje indeksov.';
$strPrivDescInsert = 'Omogo�a vstavljanje in zamenjavo podatkov.';
$strPrivDescLockTables = 'Omogo�a zaklepanje tabel za trenutno temo.';
$strPrivDescMaxConnections = 'Omeji �tevilo povezav, ki jih uporabnik lahko odpre v eni uri.';
$strPrivDescMaxQuestions = 'Omeji �tevilo poizved, ki jih uporabnik lahko po�lje stre�niku v eni uri.';
$strPrivDescMaxUpdates = 'Omeji �tevilo ukazov za spremembo tabel ali podatkovne baze, ki jih uporabnik lahko izvr�i v eni uri.';
$strPrivDescProcess3 = 'Omogo�a ukinjanje procesov drugih uporabnikov.';
$strPrivDescProcess4 = 'Omogo�a pregled popolnih poizvedb v spisku procesov.';
$strPrivDescReferences = 'V tej verziji MySQL nima pomena.';
$strPrivDescReload = 'Omogo�a osve�evanje stre�nikovih nastavitev in praznjenje stre�nikovih predpomnilnikov.';
$strPrivDescReplClient = 'Da uporabniku pravico poizvedovati kje so njegovi nadrejeni / podrjeni stre�niki.';
$strPrivDescReplSlave = 'Potrebno za podrejene stre�nike pri replikaciji.';
$strPrivDescSelect = 'Omogo�a branje podatkov.';
$strPrivDescShowDb = 'Omogo�a dostop do popolnega spiska podatkovnih baz';
$strPrivDescShutdown = 'Omogo�a uga�anje stre�nika.';
$strPrivDescSuper = 'Omogo�a priklaplanje tudi �e je �e dose�eno najve�je dovoljeno �tevilo priklopov; Potrebno za ve�ino administrativnih nalog kot sta postavljanje globalnih spremenljivk in ukinjanje procesov drugih uporabnikov.';
$strPrivDescUpdate = 'Omogo�a spreminjanje podatkov.';
$strPrivDescUsage = 'Brez privilegijev.';
$strPrivileges = 'Privilegiji';
$strPrivilegesReloaded = 'Uspe�no sem osve�il privilegije.';
$strProcesses = 'Procesi';
$strProcesslist = 'Seznam procesov';
$strPutColNames = 'Postavi imena polj v prvo vrstico';

$strQBEDel = 'Bri�i';
$strQBEIns = 'Vstavi';
$strQBE = 'Poizvedba';
$strQueryFrame = 'Okno za iskanje';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL-zgodovina';
$strQueryStatistics = '<b>Statistika poizvedbe</b>: Od zagona je bilo stre�niku poslanih %s poizvedb.';
$strQueryTime = 'Poizvedba je potrebovala %01.4f s';
$strQueryType = 'Vrsta poizvedbe';
$strQueryWindowLock = 'Ne prepi�i te poizvedbe od zunaj';

$strReceived = 'Prejeto';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referen�no integriteto:';
$strRelationalSchema = 'Relacijska shema';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkju�ene. �e �elite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationsForTable = 'RELACIJE ZA TABELO';
$strRelations = 'Relacije';
$strRelationView = 'Pogled relacij';
$strReloadingThePrivileges = 'Osve�ujem privilegije';
$strRemoveSelectedUsers = 'Izbri�i izbrane uporabnike';
$strRenameDatabaseOK = 'Baza podatkov %s je preimenovana v %s';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRenameTable = 'Preimenuj tabelo v';
$strRepairTable = 'Popravi tabelo';
$strReplaceNULLBy = 'Zamenjaj NULL z';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strResourceLimits = 'Omejitve virov';
$strReType = 'Ponovno vnesi';
$strRevokeAndDeleteDescr = 'Uporabniki bodo �e vedno imeli USAGE privilegije, dokler ne osve�ite privilegijev.';
$strRevokeAndDelete = 'Odvzemi uporabnikom aktivne privilegije in jih potem izbri�i.';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevoke = 'Odvzemi';
$strRowLength = 'Dol�ina vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowSize = ' Velikost vrstice ';
$strRowsModeFlippedHorizontal = 'vodoravno (zasukani naslovi)';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s na�inu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpi�nem';
$strRowsStatistic = 'Statistika vrstic';
$strRows = 'Vrstice';
$strRunning = 'te�e na %s';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';
$strRussian = 'Rusko';

$strSaveOnServer = 'Shrani na stre�nik, v imenik %s';
$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor pove�ava je premajhen, da bi spravili shemo na eno stran';
$strSearchFormTitle = 'I��i v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearch = 'Iskanje';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'to�no dolo�eno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSecretRequired = 'Konfiguracijski datoteki morate sedaj dolo�iti skrivno geslo (blowfish_secret).';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strSent = 'Poslano';
$strServerChoice = 'Izbira stre�nika';
$strServerStatus = 'Podatki o izvajanju';
$strServerStatusUptime = 'MySQL stre�nik deluje �e %s. Zagnal se je %s.';
$strServer = 'Stre�nik';
$strServerTabVariables = 'Spremenljivke';
$strServerTrafficNotes = '<b>Promet na stre�niku</b>: V teh tabelah je prikazana statistika obremenitve omre�ja za ta MySQL stre�nik, odkar je bil zagnan.';
$strServerVars = 'Spremenljivke in nastavitve stre�nika';
$strServerVersion = 'Razli�ica stre�nika';
$strSessionValue = 'Vrednost seje';
$strSetEnumVal = '�e je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> �e �elite med vrednostmi uporabiti po�evnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite po�evnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShowAll = 'Poka�i vse';
$strShowColor = 'Poka�i barvo';
$strShowDatadictAs = 'Oblika podatkovnega slovarja';
$strShowFullQueries = 'Poka�i celotne poizvedbe';
$strShowGrid = 'Poka�i mre�o';
$strShowingRecords = 'Prikazujem vrstice';
$strShowPHPInfo = 'Poka�i podatke o PHP';
$strShow = 'Poka�i';
$strShowTableDimension = 'Poka�i dimenzije tabel';
$strShowTables = 'Poka�i tabele';
$strShowThisQuery = ' Ponovno poka�i poizvedbo v tem oknu ';
$strSimplifiedChinese = 'Poenostavljeno kitajsko';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSortByKey = 'Uredi po klju�u';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so lo�ene s presledkom (" ").';
$strSQLExportType = 'Vrsta izvoza';
$strSQLParserBugMessage = 'Obstaja mo�nost, da ste v SQL raz�lenjevalniku naleteli na hro��a. Temeljito preglejte poizvedbo in preverite, �e so citati pravilni in �e se ujemajo. Mo�no je tudi, da prena�ate binarno datoteko, ki je izven podro�ja besedila citata. Poizvedbo lahko preizkusite tudi na vmesniku ukazne vrstice MySQL. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av. �e se bodo te�ave nadaljevale, ali �e raz�lenjevalniku ne uspe tam, kjer vmesniku ukazne vrstice uspe, potem zmanj�ajte vne�eno SQL poizvedbo na tisto poizvedbo, ki povzro�a te�ave in po�ljite poro�ilo o napaki skupaj s podatki iz spodnjega odseka IZREZA.';
$strSQLParserUserError = 'Izgleda, da je v SQL poizvedbi pri�lo do napake. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av.';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neveljavni identifikator';
$strSQPBugUnclosedQuote = 'Odprt citat';
$strSQPBugUnknownPunctuation = 'Neznan niz lo�il';
$strStatCheckTime = 'Zadnji� pregledano';
$strStatCreateTime = 'Ustvarjeno';
$strStatement = 'Izjave';
$strStatUpdateTime = 'Zadnji� posodobljeno';
$strStatus = 'Stanje';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucExcelCSV = 'CSV podatki za MS Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�lji';
$strSuccess = 'SQL-poizvedba je bila uspe�no izvedena';
$strSum = 'Vsota';
$strSwedish = '�vedsko';
$strSwitchToTable = 'Preklopi na kopirano tabelo';

$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavr�ena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Vzdr�evanje tabele';
$strTableOfContents = 'Vsebina';
$strTableOptions = 'Mo�nosti tabele';
$strTables = '%s tabel';
$strTableStructure = 'Struktura tabele';
$strTable = 'Tabela';
$strTblPrivileges = 'Privilegiji tipi�ni za tabelo';
$strTextAreaLength = ' Zaradi njegove dol�ine<br /> polja ne bo mogo�e urejati ';
$strThai = 'Tajsko';
$strThisHost = 'Ta stre�nik';
$strThreadSuccessfullyKilled = 'Tema %s je bila prekinjena.';
$strTime = '�as';
$strToggleScratchboard = 'preklopi odlo�i��e (scratchboard)';
$strTotal = 'skupaj';
$strTotalUC = 'Skupaj';
$strTraditionalChinese = 'Tradicionalno kitajsko';
$strTraffic = 'Promet';
$strTransformation_application_octetstream__download = 'Prika�i povezavo za prenos binarnih podatkov polja. Prva mo�nost je ime binarne datoteke. Druga mo�nost je mo�no ime polja v vrstici tabele, ki vsebuje to ime datoteke. �e vnesete drugo mo�nost, mora biti prva mo�nost prazna';
$strTransformation_image_jpeg__inline = 'Prika�e sli�ico, na katero lahko kliknete; mo�nosti: �irina, vi�ina v slikovnih pikah (obdr�i prvotna razmerja)';
$strTransformation_image_jpeg__link = 'Poka�e povezavo na grafiko (neposredni BLOB prenos, ipd.).';
$strTransformation_image_png__inline = 'Poka�i sliko/jpeg: vklju�eno';
$strTransformation_text_plain__external = 'SAMO ZA LINUX: Za�ene zunanjo aplikacijo in podaja podatke za fielddata preko standardnega vhoda. Vrne standardni izhod aplikacije. Privzeto je Tidy, za tiskanje HTML-kode. Zaradi varnostnih razlogov morate ro�no urediti datoteko libraries/transformations/text_plain__external.inc.php in vstaviti orodja za zaganjanje. Prva mo�nost je �tevilka programa, ki ga �elite uporabiti, druga mo�nost pa so parametri za program. �e tretji parameter nastavite na 1, bo s pomo�jo htmlspecialchars() pretvoril izhod (Privzeto: 1). �e nastavite �etrti parameter na 1, bo v celico z vsebino (content cell) vnesel NOWRAP in tako prikazal celoten izhod brez preoblikovanja (Privzeto: 1)';
$strTransformation_text_plain__formatted = 'Ohrani izvirno oblikovanje polja, brez izgubljanja vsebine.';
$strTransformation_text_plain__imagelink = 'Prika�e sliko in povezavo, polje vsebuje ime datoteke; najprej je predpona, npr. "http://domena.com/", druga mo�nost je �irina v slikovnih pikah, tretja pa vi�ina.';
$strTransformation_text_plain__link = 'Prika�e povezavo, polje vsebuje ime datoteke; prva mo�nost je predpona, npr. "http://domena.com/", druga pa ime povezave.';
$strTransformation_text_plain__substr = 'Vrne le del niza. Prva mo�nost je odmik, ki dolo�a, kje se bo za�elo prikazano besedilo (Privzeto: 0). Druga mo�nost je odmik, ki pove, koliko besedila bo prikazanega. �e ni dolo�en, bo izpisano vse preostalo besedilo. Tretja mo�nost pa dolo�a, kateri znaki bodo pripeti vrnjenemu podnizu (Privzeto: ...) .';
$strTruncateQueries = 'Skr�i prikazane poizvedbe';
$strTurkish = 'Tur�ko';
$strType = 'Vrsta';

$strUkrainian = 'Ukrajinsko';
$strUncheckAll = 'Odzna�i vse';
$strUnicode = 'Unicode';
$strUnique = 'Unikaten';
$strUnknown = 'neznano';
$strUnselectAll = 'Prekli�i izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osve�i poizvedbo';
$strUpdComTab = 'Navodila za posodobitev tabele Column_comments\' najdete v dokumentaciji';
$strUpgrade = '%s bi morali nadgraditi v verzijo %s ali novej�o.';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi po�evnimi narekovaji';
$strUseHostTable = 'Uporabi tabelo gostiteljev';
$strUserAlreadyExists = 'Uporabnik %s �e obstaja!';
$strUserEmpty = 'Uporabni�ko ime je prazno!';
$strUserName = 'Uporabni�ko ime';
$strUserNotFound = 'Izbranega uporabnika v tabelah privilegijev nisem na�el.';
$strUserOverview = 'Pregled uporabnikov';
$strUsersDeleted = 'Uspe�no sem izbrisal izbrane uporabnike.';
$strUsersHavingAccessToDb = 'Uporabni�ki dostop do &quot;%s&quot;';
$strUser = 'Uporabnik';
$strUseTables = 'Uporabi tabele';
$strUseTextField = 'Uporabi tekstovno polje';
$strUseThisValue = 'Uporabi to vrednost';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValidatorError = 'Ne morem inicializirati SQL validatorja. Prosim preverite, �e so name��eni vsi php raz�iritve, kot je navedeno v %dokumenaciji%.';
$strValue = 'Vrednost';
$strVar = 'Spremenljivka';
$strViewDumpDatabases = 'Poka�i povzetek stanja podatkovnih baz';
$strViewDumpDB = 'Preglej povzetek stanja podatkovne baze';
$strViewDump = 'Preglej povzetek stanja tabele';

$strWebServerUploadDirectoryError = 'Imenik, ki ste ga dolo�ili za nalaganje, je nedosegljiv';
$strWebServerUploadDirectory = 'imenik za nalaganje datotek';
$strWelcome = 'Dobrodo�li v %s';
$strWestEuropean = 'Zahodno evropsko';
$strWildcard = 'nadomestni znak';
$strWindowNotFound = 'Ciljnega okna ni bilo mogo�e osve�iti. Morda ste zaprli nadrejeno okno ali pa va� brskalnik blokira osve�evanje varnostnih parametrov med okni.';
$strWithChecked = 'Z ozna�enim:';
$strWrongUser = 'Napa�no uporabni�ko ime/geslo. Dostop zavrnjen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Obvestilo: �e postavite vrednost na 0 (ni�), boste odstranili omejitev.';
$strZip = '"zipano"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
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

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate

$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate

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

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
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
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
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

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPolish = 'Polish';  //to translate
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
$strReloadPrivileges = 'Reload privileges';  //to translate
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
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
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
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
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
