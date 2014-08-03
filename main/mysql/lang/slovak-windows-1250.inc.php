<?php
/* $Id: slovak-windows-1250.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/* By: lubos klokner <erkac@vault-tec.sk> */
/* and Ivan Kuriscak <shylauda69@yahoo.com>
   and Tomas Tatransky <tomas.tatransky@centrum.sk> */

$charset = 'windows-1250';
$text_dir = 'ltr';
$number_thousands_separator = '�';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';
$timespanfmt = '%s dn�, %s hod�n, %s min�t a %s sek�nd';

$strAbortedClients = 'Preru�en�';
$strAccessDeniedCreateConfig = 'Pravdepodobn� pr��ina je, �e neexistuje konfigura�n� s�bor. Na jeho vytvorenie m��ete pou�i� %1$skonfigura�n� skript%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin sa pok�sil pripoji� k MySQL serveru ale ten spojenie odmietol. Skontrolujte pros�m meno serveru, pou��vate�sk� meno a heslo v s�bore config.inc.php a s t�m, ktor� ste dostali o administr�tora MySQL servera.';
$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddAutoIncrement = 'Prida� hodnotu AUTO_INCREMENT';
$strAddClause = 'Prida� %s';
$strAddConstraints = 'Prida� obmedzenia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddFields = 'Prida� %s polo�iek';
$strAddHeaderComment = 'Prida� vlastn� koment�r do hlavi�ky (\\n odde�uje riadky)';
$strAddIntoComments = 'Prida� do koment�rov';
$strAddNewField = 'Prida� nov� pole';
$strAddPrivilegesOnDb = 'Prida� opr�vnenia pre nasleduj�cu datab�zu';
$strAddPrivilegesOnTbl = 'Prida� opr�vnenia pre nasleduj�cu tabu�ku';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dopytu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAdministration = 'Administr�cia';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAfterInsertNext = 'Upravi� nasleduj�ci riadok';
$strAfterInsertSame = 'Sp� na t�to str�nku';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Povoli� preru�enie importu v pr�pade, �e sa bl�i �asov� limit behu skriptu. T�mto sp�sobom sa m��u importova� aj ve�k� s�bory, ale m��e to z�rove� sp�sobi� probl�my s transakciami.';
$strAllTableSameWidth = 'zobrazi� v�etky tabu�ky s rovnakou ��rkou?';
$strAll = 'V�etko';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAndThen = 'a potom';
$strAnIndex = 'Bol pridan� index pre %s';
$strAny = 'Ak�ko�vek';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyUser = 'Ak�ko�vek pou��vate�';
$strApproximateCount = 'M��e by� nepresn�. Pozri FAQ 3.11';
$strAPrimaryKey = 'Bol pridan� prim�rny k��� pre %s';
$strArabic = 'Arab�tina';
$strArmenian = 'Arm�n�tina';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';
$strAutomaticLayout = 'Automatick� rozvrhnutie';

$strBack = 'Sp�';
$strBaltic = 'Baltick�';
$strBeginCut = 'ZA�IATOK V�SEKU';
$strBeginRaw = 'ZA�IATOK TOKU';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBinaryLog = 'Bin�rny log';
$strBinLogEventType = 'Typ udalosti';
$strBinLogInfo = 'Inform�cia';
$strBinLogName = 'N�zov logu';
$strBinLogOriginalPosition = 'P�vodn� poz�cia';
$strBinLogPosition = 'Poz�cia';
$strBinLogServerId = 'ID servra';
$strBookmarkAllUsers = 'Dovoli� pou��va� t�to polo�ku v�etk�m pou��vate�om';
$strBookmarkCreated = 'Pr�kaz %s bol zaraden� medzi ob��ben�';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dopyt';
$strBookmarkReplace = 'Prep�sa� existuj�ci pr�kaz s rovnak�m menom';
$strBookmarkThis = 'Prida� tento SQL dopyt do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowseDistinctValues = 'Prech�dza� in� hodnoty';
$strBrowseForeignValues = 'Prejs� hodnoty cudz�ch k���ov';
$strBrowse = 'Prech�dza�';
$strBufferPoolActivity = 'Aktivita Vyrovn�vacej Pam�te';
$strBufferPoolUsage = 'Vyu�itie Vyrovn�vacej Pam�te';
$strBufferPool = 'Vyrovn�vacia Pam�';
$strBufferReadMissesInPercent = 'V�padkov pri ��tan� v %';
$strBufferReadMisses = 'V�padkov pri ��tan�';
$strBufferWriteWaits = '�akan� na z�pis';
$strBufferWriteWaitsInPercent = '�akan� na z�pis v %';
$strBulgarian = 'Bulharsky';
$strBusyPages = 'Spracov�van�ch str�nok';
$strBzError = 'nepodarilo sa skomprimova� v�stup z d�vodu chybn�ho roz��renia pre kompresiu Bz2 v tejto verzii php. Doporu�uje sa nastavi� <code>$cfg[\'BZipDump\']</code> v konfigur�cii phpMyAdmin na <code>FALSE</code>. Ak si �el�te pou��va� kompresiu Bz2 mali by ste nain�talova� nov�iu verziu php. Viac inform�ci� z�skate z popisu chyby: %s.';
$strBzip = '"bzipped"';

$strCalendar = 'Kalend�r';
$strCanNotLoadExportPlugins = 'Nepodarilo sa na��ta� exportn� pluginy, skontrolujte pros�m va�u in�tal�ciu!';
$strCanNotLoadImportPlugins = 'Nebolo mo�n� na��ta� importovacie pluginy, skontrolujte pros�m va�u in�tal�ciu!';
$strCannotLogin = 'Ned� sa prihl�si� k MySQL serveru';
$strCantLoad = 'ned� sa nahra� roz��renie %s,<br />pros�m skontrolujte konfigur�ciu PHP';
$strCantLoadRecodeIconv = 'Nie je mo�n� nahra� roz��renie iconv alebo recode potrebn� pre prevod znakov�ch sad. Upravte nastavenie php tak aby umo��ovalo pou�i� tieto roz��renia alebo vypnite t�to vlastnos� v konfigur�cii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je mo�n� premenova� index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je mo�n� pou�i� funkcie iconv, libiconv a recode_string aj napriek tomu, �e roz��renia s� nahran�. Skontrolujte pros�m nastavenie PHP.';
$strCardinality = 'Mohutnos�';
$strCaseInsensitive = 'nerozli�ova� ve�k� a mal� p�smen�';
$strCaseSensitive = 'rozli�ova� ve�k� a mal� p�smen�';
$strCentralEuropean = 'Stredn� Eur�pa';
$strChangeCopyModeCopy = '... zachova� p�vodn�ho pou��vate�a.';
$strChangeCopyModeDeleteAndReload = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov a potom znovuna��ta� opr�vnenia.';
$strChangeCopyModeJustDelete = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov.';
$strChangeCopyModeRevoke = ' ... odobra� v�etky opr�vnenia p�vodn�mu pou��vate�ovi a n�sledne ho zmaza�.';
$strChangeCopyMode = 'Vytvori� pou��vate�a s rovnak�mi pr�vami a...';
$strChangeCopyUser = 'Zmeni� inform�cie o pou��vate�ovi / Kop�rova� pou��vate�a';
$strChangeDisplay = 'Zvolte, ktor� pole zobrazi�';
$strChangePassword = 'Zmeni� heslo';
$strChange = 'Zmeni�';
$strCharsetOfFile = 'Znakov� sada s�boru:';
$strCharsetsAndCollations = 'Znakov� sady a Zotriedenia';
$strCharsets = 'Znakov� sady';
$strCharset = 'Znakov� sada';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckOverhead = 'Zvoli� neoptim�lne';
$strCheckPrivsLong = 'Skontrolova� opr�vnenia pre datab�zu &quot;%s&quot;.';
$strCheckPrivs = 'Skontrolova� opr�vnenia';
$strCheckTable = 'Skontrolova� tabu�ku';
$strChoosePage = 'Pros�m zvolte si Str�nku, ktor� chcete upravi�';
$strColComFeat = 'Zobrazova� koment�re st�pcov';
$strCollation = 'Zotriedenie';
$strColumnNames = 'N�zvy st�pcov';
$strColumnPrivileges = 'Opr�vnenia pre jednotliv� st�pce';
$strCommand = 'Pr�kaz';
$strCommentsForTable = 'KOMENT�RE PRE TABU�KU';
$strComments = 'Koment�re';
$strCompatibleHashing = 'Kompatibiln� s&nbsp;MySQL&nbsp;4.0';
$strCompleteInserts = '�pln� vlo�enie';
$strCompression = 'Kompresia';
$strCompressionWillBeDetected = 'Kompresia importovan�ho s�boru bude rozpoznan� automaticky. Podporovan�: %s';
$strConfigDefaultFileError = 'Nepodarilo sa na��ta� prednastaven� konfigur�ciu zo s�boru: "%1$s"';
$strConfigFileError = 'phpMyAdmin nebol schopn� na��ta� konfigura�n� s�bor!<br />Tento probl�m sa zvy�ajne vyskytne ak s�bor obsahuje chybu alebo ho php nemohlo n�js�.<br />Zavolajte browserom tento s�bor priamo pou�it�m nasleduj�ceho odkazu na z�skanie chybov�ch hl�ok, ktor� s� n�m sp�soben�. V��inou sa jedn� o ch�baj�cu �vodzovku alebo bodko�iarku.<br />Ak dostanete iba pr�zdnu str�nku, v�etko je v poriadku.';
$strConfigureTableCoord = 'Pros�m skonfigurujte koordin�ty pre tabu�ku %s';
$strConnectionError = 'Nepodarilo sa pripoji�: chybn� nastavenia.';
$strConnections = 'Spojenia';
$strConstraintsForDumped = 'Obmedzenie pre exportovan� tabu�ky';
$strConstraintsForTable = 'Obmedzenie pre tabu�ku';
$strCookiesRequired = 'Cookies musia by� povolen�, pokia� chcete pokra�ova�.';
$strCopyDatabaseOK = 'Datab�za %s bola skop�rovan� na %s';
$strCopy = 'Kop�rova�';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCopyTableSameNames = 'Ned� sa skop�rova� tabu�ka sama do seba!';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCouldNotKill = 'Neporadilo za zabi� vl�kno %s. Jeho beh bol pravdepodobne u� ukon�en�.';
$strCreateDatabaseBeforeCopying = 'Vytvori� datab�zu (CREATE DATABASE) pred kop�rovan�m';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze %s';
$strCreatePage = 'Vytvori� nov� Str�nku';
$strCreatePdfFeat = 'Vytv�ranie PDF';
$strCreateUserDatabase = 'Datab�za pre pou��vate�a';
$strCreateUserDatabaseName = 'Vytvori� datab�zu s rovnak�m menom a prideli� v�etky opr�vnenia';
$strCreateUserDatabaseNone = '�iadna';
$strCreateUserDatabaseWildcard = 'Prideli� v�etky opr�vnenia pomocou masky (pou��vate�_%)';
$strCreate = 'Vytvori�';
$strCreationDates = 'D�tum vytvorenia, poslednej zmeny a kontroly';
$strCriteria = 'Krit�ria';
$strCroatian = 'Chorv�tsky';
$strCSV = 'CSV';
$strCyrillic = 'Cyrilika';
$strCzech = '�esky';
$strCzechSlovak = '�e�tina/Sloven�ina';

$strDanish = 'D�nsky';
$strDatabase = 'Datab�za';
$strDatabaseEmpty = 'Meno datab�zy je pr�zdne!';
$strDatabaseExportOptions = 'Nastavenia exportu datab�z';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabases = 'Datab�zy';
$strDatabasesDropped = '�spe�ne zru�en�ch datab�z: %s.';
$strDatabasesStatsDisable = 'Skry� �tatistiky';
$strDatabasesStatsEnable = 'Zobrazi� �tatistiky';
$strDatabasesStatsHeavyTraffic = 'Pozn�mka: Aktivovanie �tatist�k datab�zy m��e sp�sobi� zna�n� zv��enie sie�ovej prev�dzky medzi datab�zou a web serverom.';
$strDatabasesStats = '�tatistiky datab�zy';
$strData = 'D�ta';
$strDataDict = 'D�tov� slovn�k';
$strDataOnly = 'Iba d�ta';
$strDataPages = 'Str�nky obsahuj�ce d�ta';
$strDBComment = 'Koment�r k datab�ze: ';
$strDBCopy = 'Skop�rova� datab�zu na';
$strDbPrivileges = 'Opr�vnenia pre jednotliv� datab�zy';
$strDBRename = 'Premenova� datab�zu na';
$strDbSpecific = 'z�visl� na datab�ze';
$strDefaultEngine = 'Na tomto MySQL servri je prednastaven�m �lo�n�m syst�mom %s.';
$strDefault = 'Predvolen�';
$strDefaultValueHelp = 'Pre predvolen� hodnoty, pros�m zadajte iba jednu hodnotu bez �vodzoviek alebo uv�dzac�ch znakov, napr.: a';
$strDefragment = 'Defragmentova� tabu�ku';
$strDelayedInserts = 'Pou�i� oneskoren� vlo�enia';
$strDeleteAndFlushDescr = 'Toto je naj�istej�ie rie�enie, ale znovuna��tanie pr�v m��e chv��u trva�.';
$strDeleteAndFlush = 'Odstr�ni� pou��vate�ov a znovuna��ta� pr�va.';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDeleteNoUsersSelected = 'Na odstr�nenie neboli vybran� �iadni pou��vatelia!';
$strDelete = 'Zmaza�';
$strDeleting = 'Odstra�uje sa %s';
$strDelimiter = 'Odde�ova�';
$strDelOld = 'Aktu�lna str�nka sa odkazuje na tabu�ky, ktor� u� neexistuj�, �el�te si odstr�ni� tieto odkazy?';
$strDescending = 'Zostupne';
$strDescription = 'Popis';
$strDictionary = 'slovn�k';
$strDirtyPages = 'Zmenen�ch str�nok';
$strDisabled = 'Vypnut�';
$strDisableForeignChecks = 'Vypn�� kontrolu cudz�ch k���ov';
$strDisplayFeat = 'Zobrazi� vlastnosti';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDisplayPDF = 'Zobrazi� sch�mu PDF';
$strDoAQuery = 'Vykona� "dopyt pod�a pr�kladu" (nahradzuj�ci znak: "%")';
$strDocu = 'Dokument�cia';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDropDatabaseStrongWarning = 'Chyst�te sa ZRU�I� cel� datab�zu!';
$strDrop = 'Odstr�ni�';
$strDropUsersDb = 'Odstr�ni� datab�zy s rovnak�m menom ako maj� pou��vatelia.';
$strDumpingData = 'S�ahujem d�ta pre tabu�ku';
$strDumpSaved = 'Dump (sch�ma) bol ulo�en� do s�boru %s.';
$strDumpXRows = 'Zobrazi� %s riadkov od riadku %s.';
$strDynamic = 'dynamick�';

$strEditPDFPages = 'Upravi� PDF Str�nky';
$strEditPrivileges = 'Upravi� opr�vnenia';
$strEdit = 'Upravi�';
$strEffective = 'Efekt�vny';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEmpty = 'Vypr�zdni�';
$strEnabled = 'Zapnut�';
$strEncloseInTransaction = 'Uzatvori� pr�kazy v transakcii';
$strEndCut = 'KONIEC V�SEKU';
$strEnd = 'Koniec';
$strEndRaw = 'KONIEC TOKU';
$strEngineAvailable = '�lo�n� syst�m %s je na tomto MySQL servri dostupn�.';
$strEngineDisabled = '�lo�n� syst�m %s bol na tomto MySQL servri deaktivovan�.';
$strEngines = 'Syst�my';
$strEngineUnsupported = 'Tento MySQL server nepodporuje �lo�n� syst�m %s.';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL opr�vnen� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strErrorInZipFile = 'Chyba v ZIP arch�ve:';
$strErrorRenamingTable = 'Chyba pri premenovan� tabu�ky %1$s na %2$s';
$strEscapeWildcards = 'N�hradzuj�cim znakom _ a % by mal predch�dza� znak \, pokia� ich nechcete pou�i� doslovne';
$strEsperanto = 'Esperanto';
$strEstonian = 'Est�nsky';
$strExcelEdition = 'Verzia Excelu';
$strExecuteBookmarked = 'Spusti� ob��ben� dopyt';
$strExplain = 'Vysvetli� SQL';
$strExport = 'Exportova�';
$strExportMustBeFile = 'Vybran� typ exportu mus� by� ulo�en� do s�boru!';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepodaren�ch pokusov';
$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strField = 'Pole';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFields = 'Polia';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFileAlreadyExists = 'S�bor %s u� existuje na servery, zmente n�zov s�boru alebo zvolte prep�sanie s�boru.';
$strFileCouldNotBeRead = 'S�bor sa ned� pre��ta�';
$strFileNameTemplateDescriptionDatabase = 'meno datab�zy';
$strFileNameTemplateDescriptionServer = 'meno servera';
$strFileNameTemplateDescriptionTable = 'meno tabu�ky';
$strFileNameTemplateDescription = 'T�to hodnota je interpretovan� pomocou %1$sstrftime%2$s, tak�e m��ete pou�i� re�azec pre form�tovanie d�tumu a �asu. Naviac bud� vykonan� tieto nahradenia: %3$s. Ostatn� text bude zachovan�.';
$strFileNameTemplateRemember = 'zapam�ta� si vzor';
$strFileNameTemplate = 'Vzor pre n�zov s�boru';
$strFileToImport = 'S�bor na importovanie';
$strFixed = 'pevn�';
$strFlushPrivilegesNote = 'Pozn�mka: phpMyAdmin z�skava pr�va pou��vate�ov priamo z tabuliek MySQL. Obsah t�chto tabuliek sa m��e l�i� od pr�v, ktor� pou��va server, ak boli tieto tabu�ky ru�ne upraven�. V tomto pr�pade sa odpor��a vykona� %sznovuna��tanie pr�v%s predt�m ako budete pokra�ova�.';
$strFlushQueryCache = 'Vypr�zdni� vyrovn�vaciu pam� pr�kazov';
$strFlushTables = 'Vypr�zdni� (uzavrie�) v�etky tabu�ky';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormat = 'Form�t';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFreePages = 'Pr�zdnych str�nok';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';
$strFunctions = 'Funkcie';

$strGenBy = 'Vygenerovan�';
$strGeneralRelationFeat = 'Mo�nosti v�eobecn�ch vz�ahov';
$strGeneratePassword = 'Vytvori� Heslo';
$strGenerate = 'Vytvori�';
$strGenTime = 'Vygenerovan�:';
$strGeorgian = 'Gruz�n�ina';
$strGerman = 'Nemecky';
$strGlobal = 'glob�lny';
$strGlobalPrivileges = 'Glob�lne pr�va';
$strGlobalValue = 'Glob�lna hodnota';
$strGo = 'Vykonaj';
$strGrantOption = 'Prideli�';
$strGreek = 'Gr��tina';
$strGzip = '"gzip-ovan�"';

$strHandler = 'Manipula�n� Rutina';
$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHaveToShow = 'Zvolte pros�m aspo� jeden st�pec, ktor� chcete zobrazi�';
$strHebrew = 'Hebrejsky';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin';
$strHostEmpty = 'N�zov hostite�a je pr�zdny!';
$strHost = 'Hostite�';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ma�arsky';

$strIcelandic = 'Island�ina';
$strId = 'ID';
$strIdxFulltext = 'Cel� text';
$strIgnoreDuplicates = 'Ignorova� opakuj�ce sa riadky';
$strIgnore = 'Ignorova�';
$strIgnoreInserts = 'Pou�i� IGNORE';
$strImportFiles = 'Importova� s�bory';
$strImportFormat = 'Form�t importovan�ho s�boru';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import bol �spe�ne ukon�en�, bolo vykonan�ch %d dopytov.';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndex = 'Index';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexWarningTable = 'Probl�my s indexami v tabu�ke `%s`';
$strInnoDBAutoextendIncrementDesc = ' Ve�kos�, o ktor� je zv��en� automaticky sa zv��uj�ci priestor tabu�ky pri zaplnen�.';
$strInnoDBAutoextendIncrement = 'Nav��enie pri automatickom zv��ovan�';
$strInnoDBBufferPoolSizeDesc = 'Ve�kos� pam�te, ktor� InnoDB pou��va pre cachovanie d�t a indexov tabuliek.';
$strInnoDBBufferPoolSize = 'Ve�kos� vyrovn�vacej pam�te';
$strInnoDBDataFilePath = 'S�bory s d�tami';
$strInnoDBDataHomeDirDesc = 'Spolo�n� �as� cesty k adres�ru s InnoDB s�bormi s d�tami.';
$strInnoDBDataHomeDir = 'Domovsk� adres�r pre d�ta';
$strInnoDBPages = 'str�nok';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'Konfigura�n� s�bor obsahuje nastavenia (root bez hesla), ktor� zodpovedaj� predvolen�mu privilegovan�mu MySQL ��tu. Ak MySQL server be�� s t�mto nastaven�m, nie je zabezpe�en� proti napadnutiu, t�to bezpe�nostn� chyba by mala by� ur�chlene odstr�nen�.';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertedRowId = 'Id vlo�en�ho riadku:';
$strInsertedRows = 'Vlo�en� riadky:';
$strInsert = 'Vlo�i�';
$strInternalNotNecessary = '* Vn�torn� vz�ah nie je nutn� ak u� vz�ah existuje v InnoDB.';
$strInternalRelations = 'Intern� vz�ahy';
$strInUse = 'pr�ve sa pou��va';
$strInvalidAuthMethod = 'V konfigur�cii je nastaven� nespr�vna autentifika�n� met�da:';
$strInvalidColumn = 'Bol zadan� chybn� st�pec (%s)!';
$strInvalidColumnCount = 'Po�et st�pcov mus� by� v��� ako nula.';
$strInvalidCSVFieldCount = 'Chybn� po�et polo�iek v CSV vstupe na riadku %d.';
$strInvalidCSVFormat = 'Chybn� form�t v CSV vstupe na riadku %d.';
$strInvalidCSVParameter = 'Chybn� parameter pre CSV import: %s';
$strInvalidDatabase = 'Chybn� datab�za';
$strInvalidFieldAddCount = 'Mus�te prida� aspo� jeden st�pec.';
$strInvalidFieldCount = 'Tabu�ka mus� obsahova� aspo� jeden st�pec.';
$strInvalidLDIImport = 'Tento plug-in nepodporuje import komprimovan�ch s�borov!';
$strInvalidRowNumber = '%d nie je platn� ��slo riadku.';
$strInvalidServerHostname = 'Chybn� n�zov hostu pre server %1$s. Pros�m, skontrolujte konfigur�ciu.';
$strInvalidServerIndex = 'Chybn� index serveru: "%s"';
$strInvalidTableName = 'Chybn� meno tabu�ky';

$strJapanese = 'Japon�ina';
$strJoins = 'Zjednotenia';
$strJumpToDB = 'Na datab�zu &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Odstr�nen�&quot; pou��vatelia bud� ma� k serveru ako predt�m a� do znovuna��tania pr�v.';
$strJustDelete = 'Iba odstr�ni� pou��vate�lov z tabuliek pr�v.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyCache = 'Vyrovn�vacia pam� k���ov';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';
$strKorean = 'K�rej�ina';

$strLandscape = 'Na ��rku';
$strLanguageUnknown = 'Nezn�my jazyk: %1$s.';
$strLatchedPages = 'Uzavret�ch str�nok';
$strLatexCaption = 'Nadpis tabu�ky';
$strLatexContent = 'Obsah tabu�ky __TABLE__';
$strLatexContinuedCaption = 'Nadpis pokra�ovania tabu�ky';
$strLatexContinued = '(pokra�ovanie)';
$strLatexIncludeCaption = 'Zahrn�� nadpis tabu�ky';
$strLatexLabel = 'N�vestie';
$strLaTeX = 'LaTeX';
$strLatexStructure = '�trukt�ra tabu�ky __TABLE__';
$strLatvian = 'Loty�stina';
$strLDI = 'CSV pomocou LOAD DATA';
$strLDILocal = 'Pou�i� k���ov� slovo LOCAL';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLinkNotFound = 'Linka nebola n�jden�';
$strLinksTo = 'Linkova� na';
$strLithuanian = 'Litovsky';
$strLocalhost = 'Lok�lny';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLoginInformation = 'Prihl�senie';
$strLogin = 'Login';
$strLogout = 'Odhl�si� sa';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Pou��vate�:';
$strLongOperation = 'T�to oper�cia m��e trva� ve�mi dlho. Chcete ju aj napriek tomu vykona�?';

$strMaxConnects = 'max. s��asn�ch pripojen�';
$strMaximalQueryLength = 'Maxim�lna ve�kos� vytvoren�ho pr�kazu';
$strMaximumSize = 'Maxim�lna ve�kos�: %s%s';
$strMbExtensionMissing = 'Mbstring roz��renie pre PHP nebolo n�jden� a zjavne pou��vate viacbajtov� znakov� sadu. Bez tohto roz��renia nie je phpMyAdmin schopn� korektne rozde�ova� re�azce k�dovan� v t�chto znakov�ch sad�ch a m��e to vies� k ne�akan�m v�sledkom.';
$strMbOverloadWarning = 'V nastaven� PHP je akt�vna funkcia mbstring.func_overload, ktor� nie je kompatibiln� s phpMyAdmin-om a m��e sp�sobi� stratu d�t!';
$strMIME_available_mime = 'Dostupn� MIME typy';
$strMIME_available_transform = 'Dostupn� transform�cie';
$strMIME_description = 'Popis';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_nodescription = 'Nie je dostupn� �iadny popis pre t�to transform�ciu.<br />Kontaktujte autora, ktor� %s vyt�ra.';
$strMIME_transformation_note = 'Pre zoznam dostupn�ch parametrov a ich MIME typov kliknite na %spopisy transform�ci�';
$strMIME_transformation_options_note = 'Pros�m zadajte hodnoty pre parametre transform�cie v nasleduj�com tvare: \'a\', 100, b,\'c\'...<br />Ak potrebujete pou�i� sp�tn� lom�tko ("\") alebo jednoduch� �vodzovky ("\'") medzi t�mito hodnotami, vlo�te pred nich sp�tn� lom�tko (napr. \'\\\\xyz\' alebo \'a\\\'b\').';
$strMIME_transformation_options = 'Parametre transform�cie';
$strMIME_transformation = 'Transform�cia pri prehliadan�';
$strMIMETypesForTable = 'MIME TYPY PRE TABU�KU';
$strMIME_without = 'MIME typy zobrazen� kurz�vou nemaj� vlastn� transforma�n� funkciu';
$strModifications = 'Zmeny boli ulo�en�';
$strModifyIndexTopic = 'Modifikova� index';
$strModify = 'Zmeni�';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMoveTableSameNames = 'Ned� sa presun�� tabu�ka sama do seba!';
$strMultilingual = 'mnohojazy�n�';
$strMyISAMDataPointerSizeDesc = 'Prednastaven� ve�kos� smern�ka na d�ta v bajtoch, pou��van� pri vytv�ran� MyISAM tabuliek pr�kazom CREATE TABLE, v pr�pade ke� nie je zadan� hodnota MAX_ROWS.';
$strMyISAMDataPointerSize = 'Ve�kos� smern�ka na d�ta';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ak je ve�kos� do�asn�ho s�boru, pou�it�ho pre r�chlej�ie vytv�ranie MyISAM indexov, v��ia ako pri pou�it� cache, pou�ije sa met�da cachovania indexu.';
$strMyISAMMaxExtraSortFileSize = 'Maxim�lna ve�kos� do�asn�ch s�borov pre vytvorenie indexu';
$strMyISAMMaxSortFileSizeDesc = 'Maxim�lna ve�kos� do�asn�ho s�boru, ktor� m��e MySQL pou�i� pri obnove MyISAM indexu (po�as vykon�vania pr�kazov REPAIR TABLE, ALTER TABLE alebo LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maxim�lna ve�kos� do�asn�ch zora�ovac�ch s�borov';
$strMyISAMRecoverOptionsDesc = 'Re�im automatickej obnovy po�koden�ch MyISAM tabuliek, ktor� sa d� nastavi� parametrom --myisam-recover pri sp���an� servra.';
$strMyISAMRecoverOptions = 'Re�im automatickej obnovy';
$strMyISAMRepairThreadsDesc = 'Ak je t�to hodnota vy��ia ako 1, po�as procesu Opravy Zoraden�m s� indexy MyISAM tabu�ky vytv�ran� paralelne (ka�d� index vo svojom vl�kne).';
$strMyISAMRepairThreads = 'Opravn� vl�kna';
$strMyISAMSortBufferSizeDesc = 'Pam�, ktor� je alokovan� pri zora�ovan� MyISAM indexov po�as vykon�vania pr�kazu REPAIR TABLE, alebo pri vytv�ran� indexov pr�kazmi CREATE INDEX alebo ALTER TABLE.';
$strMyISAMSortBufferSize = 'Ve�kos� zora�ovacej pam�te';
$strMySQLCharset = 'Znakov� sada v MySQL';
$strMysqlClientVersion = 'Verzia MySQL klienta';
$strMySQLConnectionCollation = 'Overenie MySQL spojenia';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNext = '�al��';
$strNoActivity = 'Boli ste neakt�vni viac ako %s sek�nd, prihl�ste sa pros�m znovu';
$strNoDatabasesSelected = 'Neboli vybran� �iadne datab�zy.';
$strNoDatabases = '�iadne datab�zy';
$strNoDataReceived = 'Neboli prijat� �iadne d�ta na import. Bu� nebol na��tan� �iadny s�bor alebo jeho ve�kos� prekro�ila maxim�lnu ve�kos� povolen� v PHP. Pozri FAQ 1.16.';
$strNoDescription = 'bez Popisu';
$strNoDetailsForEngine = 'Pre tento �lo�n� syst�m nie s� dostupn� �iadne podrobnej�ie inform�cie.';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoExplain = 'Presko�i� vysvetlenie SQL';
$strNoFilesFoundInZip = 'V ZIP arch�ve neboli n�jden� �iadne s�bory!';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNone = '�iadny';
$strNo = 'Nie';
$strNoOptions = 'Tento form�t nem� �iadne nastavenia';
$strNoPassword = '�iadne heslo';
$strNoPermission = 'Web server nem� opr�venia na ulo�enie do s�boru %s.';
$strNoPhp = 'bez PHP k�du';
$strNoPrivileges = '�iadne opr�vnenia';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoRowsSelected = 'Nebol vybran� �iadny riadok';
$strNoSpace = 'Nedostatok miesta pre ulo�enie s�boru %s.';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNoThemeSupport = 'Zmena vzh�adu nie je podporovan�, skontrolujte si nastavenia a vzh�ady v adres�ri %s.';
$strNotNumber = 'Toto nie je ��slo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabu�ka <b>%s</b> nebola n�jden� alebo nie je nastaven� v %s';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNoValidateSQL = 'Presko�i� potvrdenie platnosti SQL';
$strNull = 'Nulov�';
$strNumberOfFields = 'Po�et pol�';
$strNumSearchResultsInTable = '%s v�skyt(ov)v tabu�ke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> v�skyt(ov)';
$strNumTables = 'Tabu�ky';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Tabu�kov� procesor Open Document';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Otvori� nov� okno phpMyAdmina';
$strOperations = 'Oper�cie';
$strOperator = 'Oper�tor';
$strOptimizeTable = 'Optimalizova� tabu�ku';
$strOr = 'alebo';
$strOverhead = 'Naviac';
$strOverwriteExisting = 'Prep�sa� existuj�ci s�bor(y)';

$strPageNumber = '��slo str�nky:';
$strPagesToBeFlushed = 'Str�nok ur�en�ch k uvo�neniu';
$strPaperSize = 'Ve�kos� str�nky';
$strPartialImport = '�iasto�n� import';
$strPartialText = '�iasto�n� texty';
$strPasswordChanged = 'Heslo pre %s bolo �spe�ne zmenen�.';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordHashing = 'Hashovanie hesla';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPdfDbSchema = 'Sch�ma datab�zy "%s"  - Strana %s';
$strPdfInvalidTblName = 'Tabu�ka "%s" neexistuje!';
$strPdfNoTables = '�iadne tabu�ky';
$strPDF = 'PDF';
$strPDFReportTitle = 'Titulok v�pisu';
$strPerHour = 'za hodinu';
$strPerMinute = 'za min�tu';
$strPerSecond = 'za sekundu';
$strPersian = 'Per�tina';
$strPhoneBook = 'adres�r';
$strPHP40203 = 'Pou��vate PHP 4.2.3, ktor� ma v�nu chybu pri pr�ci s viac bajtov�mi znakmi (mbstring). V PHP je t�to chyba zdokumentovan� pod ��slom 19404. Nedoporu�uje sa pou��va� t�to verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPhp = 'Vytvori� PHP k�d';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPmaUriError = 'Direkt�va <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfigura�nom s�bore MUS� by� nastaven�!';
$strPolish = 'Po��tina';
$strPortrait = 'Na v��ku';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k���a mus� by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrimary = 'Prim�rny';
$strPrintViewFull = 'N�h�ad tla�e (s kompletn�mi textami)';
$strPrintView = 'N�h�ad k tla�i';
$strPrint = 'Vytla�i�';
$strPrivDescAllPrivileges = 'V�etky opr�vnenia okrem GRANT.';
$strPrivDescAlter = 'Povol� meni� �trukt�ru existuj�cich tabuliek.';
$strPrivDescAlterRoutine = 'Umo��uje upravova� a odstra�ova� ulo�en� proced�ry.';
$strPrivDescCreateDb = 'Povol� vytv�ranie nov�ch datab�z a tabuliek.';
$strPrivDescCreateRoutine = 'Umo��uje vytv�ra� ulo�en� proced�ry.';
$strPrivDescCreateTbl = 'Povol� vytv�ranie nov�ch tabuliek.';
$strPrivDescCreateTmpTable = 'Povol� vytv�ranie do�asn�ch tabuliek.';
$strPrivDescCreateUser = 'Umo��uje vytv�ra�, odstra�ova� a premenov�va� pou��vate�sk� kont�.';
$strPrivDescCreateView = 'Umo��uje vytv�ra� nov� poh�ady.';
$strPrivDescDelete = 'Povol� mazanie d�t.';
$strPrivDescDropDb = 'Povol� odstra�ovanie datab�z a tabuliek.';
$strPrivDescDropTbl = 'Povol� odstra�ovanie tabuliek.';
$strPrivDescExecute5 = 'Umo��uje sp���a� ulo�en� proced�ry.';
$strPrivDescExecute = 'Povol� sp���anie ulo�en�ch proced�r. Nefunguje v tejto verzii MySQL.';
$strPrivDescFile = 'Povol� importovanie a exportovanie d�t zo/do s�borov na serveri.';
$strPrivDescGrant = 'Povol� prid�vanie u�ivatelov a pr�v bez znovuna��tania tabuliek pr�v.';
$strPrivDescIndex = 'Povol� vytv�ranie a mazanie indexov.';
$strPrivDescInsert = 'Povol� vkladanie a nahradzovanie d�t.';
$strPrivDescLockTables = 'Povol� zmaknutie tabuliek pre aktu�lne vl�kno.';
$strPrivDescMaxConnections = 'Obmedz� po�et nov�ch spojen�, ktor� m��e pou��vate� vytvori� za hodinu.';
$strPrivDescMaxQuestions = 'Obmedz� po�et dopytov, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescMaxUpdates = 'Obmedz� po�et pr�kazov meniacich tabu�ku alebo datab�zu, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescMaxUserConnections = 'Obmedzuje po�et simult�nnych pripojen� pou��vate�a.';
$strPrivDescProcess3 = 'Povol� zab�janie procesov in�m pou��vate�lom.';
$strPrivDescProcess4 = 'Povol� prezeranie kompletn�ch dopytov v zozname procesov.';
$strPrivDescReferences = 'Nefunguje v tejto verzii MySQL.';
$strPrivDescReload = 'Povol� znovuna��tanie nastaven� a vypr�zd�ovanie vyrovn�vac�ch pam�t� serveru.';
$strPrivDescReplClient = 'Povol� pou��vate�ovi zisti� kde je hlavn� / pomocn� server.';
$strPrivDescReplSlave = 'Potrebn� pre replik�ciu pomocn�ch serverov.';
$strPrivDescSelect = 'Povol� ��tanie d�t.';
$strPrivDescShowDb = 'Povol� pr�stup ku kompletn�mu zoznamu datab�z.';
$strPrivDescShowView = 'Umo��uje sp���a� pr�kazy so SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Povol� vypnutie serveru.';
$strPrivDescSuper = 'Povol� spojenie aj v pr�pade, �e bol dosiahnut� maxim�lny po�et spojen�. Potrebn� pre v��inu oper�ci� pri spr�ve serveru ako nastavovanie glob�lny premenn�ch alebo zab�janie procesov in�ch pou��vate�ov.';
$strPrivDescUpdate = 'Povol� menenie d�t.';
$strPrivDescUsage = '�iadne pr�va.';
$strPrivileges = 'Opr�vnenia';
$strPrivilegesReloaded = 'Pr�va boli �spe�ne znovuna��tan�.';
$strProcedures = 'Proced�ry';
$strProcesses = 'Procesy';
$strProcesslist = 'Zoznam procesov';
$strProtocolVersion = 'Verzia protokolu';
$strPutColNames = 'Prida� n�zvy pol� na prv� riadok';

$strQBEDel = 'Zmaza�';
$strQBE = 'Dopyt pod�a pr�kladu';
$strQBEIns = 'Vlo�i�';
$strQueryCache = 'Vyrovn�vacia pam� pr�kazov';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = ' SQL dopyt v datab�ze <b>%s</b>:';
$strQueryResultsOperations = 'Oper�cie s v�sledkami dopytu';
$strQuerySQLHistory = 'SQL hist�ria';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'Dopyt zabral %01.4f sek.';
$strQueryType = 'Typ dopytu';
$strQueryWindowLock = 'Neprepisova� tento dopyt z hlavn�ho okna';

$strReadRequests = 'Po�iadavkov na ��tanie';
$strReceived = 'Prijat�';
$strRecords = 'Z�znamov';
$strReferentialIntegrity = 'Skontrolova� referen�n� integritu:';
$strRefresh = 'Obnovi�';
$strRelationalSchema = 'Rela�n� sch�ma';
$strRelationNotWorking = 'Pr�davn� vlastnosti pre pr�cu s prepojen�mi tabu�kami boli deaktivovan�. Ak chcete zisti� pre�o, kliknite %ssem%s.';
$strRelationsForTable = 'PREPOJENIA PRE TABU�KU';
$strRelations = 'Prepojenia';
$strRelationView = 'Zobrazi� prepojenia';
$strReloadingThePrivileges = 'Znovuna��tanie pr�v';
$strReloadPrivileges = 'Znovuna��ta� pr�stupov� pr�va';
$strRemoveSelectedUsers = 'Odstr�ni� vybran�ch pou��vate�ov';
$strRenameDatabaseOK = 'Datab�za %s bola premenovan� na %s';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRenameTable = 'Premenova� tabu�ku na';
$strRepairTable = 'Opravi� tabu�ku';
$strReplaceNULLBy = 'Nahradi� NULL hodnoty';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReplication = 'Replik�cia';
$strReset = 'P�vodn� (Reset)';
$strResourceLimits = 'Obmedzenie zdrojov';
$strReType = 'Potvrdi�';
$strRevokeAndDeleteDescr = 'U��vatelia bud� ma� st�le pr�vo USAGE (pou��vanie) a� do znovuna��tania pr�v.';
$strRevokeAndDelete = 'Odobranie v�etk�ch akt�vnych pr�v pou��vate�om a ich n�sledn� odstr�nenie.';
$strRevokeMessage = 'Boli zru�en� opr�vnenia pre %s';
$strRevoke = 'Zru�i�';
$strRomanian = 'Rumun�tina';
$strRowLength = 'D�ka riadku';
$strRowsFrom = 'riadky za��naj� od';
$strRowSize = ' Ve�kos� riadku ';
$strRowsModeFlippedHorizontal = 'vodorovnom (oto�en� hlavi�ky)';
$strRowsModeHorizontal = 'horizont�lnom';
$strRowsModeOptions = 'v(o) %s m�de a opakova� hlavi�ky po ka�d�ch %s bunk�ch';
$strRowsModeVertical = 'vertik�lnom';
$strRows = 'Riadkov';
$strRowsStatistic = '�tatistika riadku';
$strRunning = 'be�� na %s';
$strRunQuery = 'Odo�li dopyt';
$strRunSQLQueryOnServer = 'Spusti� SQL pr�kaz(y) na servri %s';
$strRunSQLQuery = 'Spusti� SQL dopyt/dopyty na datab�zu %s';
$strRussian = 'Ru�tina';

$strSaveOnServer = 'Ulo�i� na server do adres�ra %s';
$strSave = 'Ulo�i�';
$strScaleFactorSmall = 'Mierka je pr�li� mala na roztiahnutie sch�my na str�nku';
$strSearchFormTitle = 'H�ada� v datab�ze';
$strSearch = 'H�ada�';
$strSearchInTables = 'V tabu�ke(�ch):';
$strSearchNeedle = 'Slovo(�) alebo hodnotu(y), ktor� chcete vyh�ada� (nahradzuj�ci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'v�etky slov�';
$strSearchOption3 = 'presn� v�raz';
$strSearchOption4 = 'ako regul�rny v�raz';
$strSearchResultsFor = 'Preh�ada� v�sledky na "<i>%s</i>" %s:';
$strSearchType = 'N�jdi:';
$strSecretRequired = 'Nastavte pros�m k��� pre �ifrovanie cookies v konfigura�nom s�bore (blowfish_secret).';
$strSelectADb = 'Pros�m vyberte si datab�zu';
$strSelectAll = 'Ozna�i� v�etko';
$strSelectBinaryLog = 'Vyberte bin�rny log na zobrazenie';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dopyte';
$strSelectTables = 'Vybra� Tabu�ky';
$strSend = 'Po�li';
$strSent = 'Odoslan�';
$strServerChoice = 'Vo�ba serveru';
$strServerNotResponding = 'Server neodpoved�';
$strServer = 'Server';
$strServers = 'Servery';
$strServerStatusDelayedInserts = 'Odlo�en� vlo�enia';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento server be�� %s. Bol spusten� %s.';
$strServerTabVariables = 'Premenn�';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Premenn� a nastavenia serveru';
$strServerVersion = 'Verzia serveru';
$strSessionValue = 'Hodnota sedenia';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShowAll = 'Zobrazi� v�etko';
$strShowColor = 'Zobrazi� farbu';
$strShowDatadictAs = 'Form�t d�tov�ho slovn�ka';
$strShowFullQueries = 'Zobrazi� kompletn� dopyty';
$strShowGrid = 'Zobrazi� mrie�ku';
$strShowingBookmark = 'Zobrazujem ob��ben� pr�kaz';
$strShowingRecords = 'Uk�za� z�znamy ';
$strShowOpenTables = 'Zobrazi� otvoren� tabu�ky';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowSlaveHosts = 'Zobrazi� podriaden� hosty';
$strShowSlaveStatus = 'Zobrazi� stav podriaden�ch hostov';
$strShowStatusBinlog_cache_disk_useDescr = 'Po�et transakci�, ktor� vyu�ili do�asn� vyrovn�vaciu pam� bin�rneho logu, ale z�rove� prekro�ili hodnotu binlog_cache_size a museli tak pou�i� do�asn� s�bor na ulo�enie pr�kazov transakcie.';
$strShowStatusBinlog_cache_useDescr = 'Po�et transakci�, ktor� vyu�ili vyrovn�vaciu pam� bin�rneho logu.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Po�et do�asn�ch tabuliek automaticky vytvoren�ch servrom pri vykon�van� pr�kazov. Ak je hodnota Created_tmp_disk_tables pr�li� vysok�, m��te zv��i� hodnotu tmp_table_size, aby boli do�asn� tabu�ky ukladan� do pam�te a nie na disk.';
$strShowStatusCreated_tmp_filesDescr = 'Po�et do�asn�ch s�borov vytvoren�ch servrom mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Po�et do�asn�ch, v pam�ti ulo�en�ch tabuliek, vytvoren�ch servrom pri vykon�van� pr�kazov.';
$strShowStatusDelayed_errorsDescr = 'Po�et riadkov pridan�ch pr�kazom INSERT DELAYED, pri ktor�ch sa vyskytla chyba (pravdepodobne opakuj�ci sa k���).';
$strShowStatusDelayed_insert_threadsDescr = 'Po�et vl�kien pou��van�ch pr�kazmi INSERT DELAYED. Ka�d� samostatn� tabu�ka, na ktor� je pou�it� pr�kaz INSERT DELAYED, ma svoje vlastn� vl�kno.';
$strShowStatusDelayed_writesDescr = 'Po�et riadkov vlo�en�ch pr�kazom INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Po�et vykonan�ch pr�kazov FLUSH.';
$strShowStatusHandler_commitDescr = 'Po�et intern�ch pr�kazov COMMIT.';
$strShowStatusHandler_deleteDescr = 'Ko�kokr�t bol z tabu�ky odstr�nen� riadok.';
$strShowStatusHandler_discoverDescr = 'MySQL server m��e zasla� po�iadavku NDB Clustru, �i nevie o existencii tabu�ky s dan�m menom. Tento proces sa naz�va objavovanie. Handler_discover zobrazuje po�et doposia� objaven�ch tabuliek.';
$strShowStatusHandler_read_firstDescr = 'Po�et pre��tan� prvej polo�ky indexu. Ak je t�to hodnota pr�li� vysok�, znamen� to �e server vykon�va pr�li� ve�a kompletn�ch prech�dzan� indexov; napr�klad, SELECT col1 FROM foo, za predpokladu �e col1 je indexovan�.';
$strShowStatusHandler_read_keyDescr = 'Po�et po�iadavkov na na��tanie riadku pod�a k���a. Ak je t�to hodnota vysok�, je to dobr�m znamen�m �e s� pr�kazy a tabu�ky spr�vne indexovan�.';
$strShowStatusHandler_read_nextDescr = 'Po�et po�iadavkov na na��tanie nasleduj�ceho riadku v porad� pod�a k���a. T�to hodnota sa zvy�uje ak sa na��tava indexovan� st�pec v danom rozsahu alebo ak sa vykon�va preh�ad�vanie indexu.';
$strShowStatusHandler_read_prevDescr = 'Po�et po�iadavkov na na��tanie predch�dzaj�ceho riadku pod�a k���a. T�to ��tacia met�da sa pou�iva hlavne na optimaliz�ciu pr�kazov typu ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Po�et po�iadavkov na na��tanie riadku na z�klade ur�itej poz�cie. T�to hodnota je vysok�, ak sa vykon�va ve�a pr�kazov, ktor� si vy�aduj� zoradenie v�sledku. Pravdepodobne sa pou�iva ve�a pr�kazov, kv�li ktor�m mus� MySQL kompletne preh�ad�va� tabu�ky, alebo sa pou��vaj� zjednotenia, ktor� spr�vne nevyu��vaj� k���e.';
$strShowStatusHandler_read_rnd_nextDescr = 'Po�et po�iadavkov na na��tanie nasleduj�ceho riadku. T�to hodnota je vysok�, ak sa vykon�va ve�a kompletn�ch preh�ad�van� tabuliek. Znamen� to �e bu� tabu�ky nie s� spr�vne indexovan� alebo pr�kazy nedostato�ne vyu��vaj� dostupn� indexy.';
$strShowStatusHandler_rollbackDescr = 'Po�et intern�ch pr�kazov ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Po�et po�iadavkov na zmenu z�znamu (riadku) v tabu�ke.';
$strShowStatusHandler_writeDescr = 'Po�et po�iadavkov na vlo�enie nov�ho z�znamu (riadku) do tabu�ky.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Po�et str�nok obsahuj�cich d�ta (ne�ist�ch aj �ist�ch).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Po�et ne�ist�ch str�nok.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Po�et str�nok, na ktor� je po�iadavka na vypr�zdnenie.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Po�et vo�n�ch str�nok.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Po�et uzamknut�ch str�nok v InnoDB vyrovn�vacej pam�ti. Z t�chto str�nok sa moment�lne ��ta alebo zapisuje, pr�padne nem��u by� vypr�zdnen� ani odstr�nen� z nejak�ho in�ho d�vodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Po�et moment�lne nepr�stupn�ch str�nok z d�vodu ��asti na administrat�vnych ��eloch ako napr. uzamk�nanie riadkov alebo adapt�vny hash index. T�to hodnota sa tie� m��e vypo��ta� ako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Celkov� po�et str�nok vo vyrovn�vacej pam�ti InnoDB.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Po�et "n�hodn�ch" pred��tan� vykonan�ch InnoDB. T�to situ�cia nast�va pri pr�kazoch, ktor� preh�ad�vaj� ve�k� �as� tabu�ky, ale v n�hodnom porad�.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Po�et sekven�n�ch pred��tan� vykonan�ch InnoDB. T�to situ�cia nast�va pri vykon�van� sekven�n�ho preh�ad�vania celej tabu�ky.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Po�et po�iadavkov na logick� na��tavanie.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Po�et logick�ch na��tan�, ktor� sa nemohli vykona� z vyrovn�vacej pam�te a namiesto toho bolo vykonan� na��tanie celej jednej str�nky.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Norm�lne sa z�pis do vyrovn�vacej pam�te InnoDB vykon�va v pozad�. Ak v�ak nie s� pri po�iadavke na na��tanie alebo vytvorenie str�nky dostupn� �iadne �ist� str�nky, je potrebn� po�ka� na ich vy�istenie. T�to hodnota zobrazuje po�et t�chto �akan� a ak bola spr�vne nastaven� ve�kos� vyrovn�vacej pam�te, mala by by� n�zka.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Po�et z�pisov do vyrovn�vacej pam�te InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Po�et vykonan�ch fsync() oper�ci�.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Aktu�lny po�et prebiehaj�cich fsync() oper�ci�.';
$strShowStatusInnodb_data_pending_readsDescr = 'Po�et aktu�lne prebiehaj�cich na��tavan�.';
$strShowStatusInnodb_data_pending_writesDescr = 'Po�et aktu�lne prebiehaj�cich z�pisov.';
$strShowStatusInnodb_data_readDescr = 'Mno�stvo u� na��tan�ch d�t, v bajtoch.';
$strShowStatusInnodb_data_readsDescr = 'Celkov� po�et na��tan� d�t.';
$strShowStatusInnodb_data_writesDescr = 'Celkov� po�et z�pisov d�t.';
$strShowStatusInnodb_data_writtenDescr = 'Mno�stvo u� zap�san�ch d�t, v bajtoch.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Po�et vykonan�ch dvojit�ch z�pisov a po�et str�nok zap�san�ch pre tento ��el.';
$strShowStatusInnodb_dblwr_writesDescr = 'Po�et vykonan�ch dvojit�ch z�pisov a po�et str�nok zap�san�ch pre tento ��el.';
$strShowStatusInnodb_log_waitsDescr = 'Po�et �akan� na vypr�zdnenie vyrovn�vacej pam�te logu z d�vodu jej zaplnenia.';
$strShowStatusInnodb_log_write_requestsDescr = 'Po�et po�iadaviek na z�pis do logovacieho s�boru.';
$strShowStatusInnodb_log_writesDescr = 'Po�et fyzick�ch z�pisov do logovacieho s�boru.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Po�et fsync z�pisov vykonan�ch na logovacom s�bore.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Po�et prebiehaj�cich synchroniz�ci� logovacieho s�boru.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Po�et prebiehaj�cich z�pisov do logovacieho s�boru.';
$strShowStatusInnodb_os_log_writtenDescr = 'Mno�stvo bajtov zap�san�ch do logovacieho s�boru.';
$strShowStatusInnodb_pages_createdDescr = 'Po�et vytvoren�ch str�nok.';
$strShowStatusInnodb_page_sizeDescr = 'Ve�kos� nakompilovanej InnoDB str�nky (prednastaven�ch je 16KB). Viacero hodn�t sa ud�va v str�nkach; pomocou ve�kosti str�nky je mo�n� ich premeni� na bajty.';
$strShowStatusInnodb_pages_readDescr = 'Po�et na��tan�ch str�nok.';
$strShowStatusInnodb_pages_writtenDescr = 'Po�et zap�san�ch str�nok.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Po�et z�mkov na riadky, na ktor� sa �ak�.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Priemern� �as potrebn� na z�skanie z�mku na riadok, v milisekund�ch.';
$strShowStatusInnodb_row_lock_timeDescr = 'Celkov� �as potrebn� na z�skanie z�mku na riadok, v milisekund�ch.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maxim�lny �as potrebn� na z�skanie z�mku na riadok, v milisekund�ch.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Ko�kokr�t sa muselo �aka� na z�mok na riadok.';
$strShowStatusInnodb_rows_deletedDescr = 'Po�et z�znamov (riadkov) odstr�nen�ch z InnoDB tabuliek.';
$strShowStatusInnodb_rows_insertedDescr = 'Po�et z�znamov (riadkov) vlo�en�ch do InnoDB tabuliek.';
$strShowStatusInnodb_rows_readDescr = 'Po�et na��tan�ch z�znamov (riadkov) z InnoDB tabuliek.';
$strShowStatusInnodb_rows_updatedDescr = 'Po�et upraven�ch z�znamov (riadkov) v InnoDB tabu�k�ch.';
$strShowStatusKey_blocks_not_flushedDescr = 'Po�et zmenen�ch k���ov�ch blokov vo vyrovn�vacej pam�ti k���ov, ktor� e�te neboli zap�san� na disk. Predt�m sa t�to hodnota naz�vala Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Po�et nevyu�it�ch blokov vo vyrovn�vacej pam�ti k���ov. Z tejto hodnoty m��ete zisti� ko�ko vyrovn�vacej pam�te sa pr�ve pou��va.';
$strShowStatusKey_blocks_usedDescr = 'Po�et vyu�it�ch blokov vo vyrovn�vacej pam�ti k���ov. T�to hodnota ur�uje najv��ie mno�stvo blokov, ktor� kedy naraz pou�it�.';
$strShowStatusKey_read_requestsDescr = 'Po�et po�iadavkov na na��tanie k���ov�ho bloku z vyrovn�vacej pam�ti.';
$strShowStatusKey_readsDescr = 'Po�et na��tan� k���ov�ho bloku priamo z disku. Ak je t�to hodnota pr�li� ve�k�, v��inou to znamen�, �e ve�kos� vyrovn�vacej pam�ti (key_buffer_size) je pr�li� mal�. �spe�nos� vyrovn�vacej pam�te si m��te vypo��ta� zo vz�ahu Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Po�et po�iadavkov na z�pis k���ov�ho bloku do vyrovn�vacej pam�ti.';
$strShowStatusKey_writesDescr = 'Po�et fyzick�ch z�pisov k���ov�ho bloku na disk.';
$strShowStatusLast_query_costDescr = 'Celkov� n�klady na posledn� kompilovan� pr�kaz, vypo��tan� optimiz�rom pr�kazov. U�ito�n� na porovn�vanie n�kladov na r�zne pr�kazy pre t� ist� po�iadavku. Prednastaven� hodnota 0 znamen�, �e doposia� neboli skompilovan� �iadne pr�kazy.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Po�et riadkov �akaj�cich na z�pis cez INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Po�et doposia� otvoren�ch tabuliek. Ak je t�to hodnota pr�li� vysok�, pravdepodobne je vyrovn�vacia pam� pre tabu�ky pr�li� mal�.';
$strShowStatusOpen_filesDescr = 'Po�et otvoren�ch s�borov.';
$strShowStatusOpen_streamsDescr = 'Po�et otvoren�ch streamov (v��inou vyu��van� na logovanie).';
$strShowStatusOpen_tablesDescr = 'Po�et pr�ve otvoren�ch tabuliek.';
$strShowStatusQcache_free_blocksDescr = 'Mno�stvo vo�n�ch pam�ov�ch blokov vo vyrovn�vacej pam�ti pr�kazov.';
$strShowStatusQcache_free_memoryDescr = 'Ve�kos� vo�nej pam�ti pre vyrovn�vaciu pam� pr�kazov.';
$strShowStatusQcache_hitsDescr = 'Po�et z�sahov vyrovn�vacej pam�ti.';
$strShowStatusQcache_insertsDescr = 'Po�et pr�kazov pridan�ch do vyrovn�vacej pam�ti.';
$strShowStatusQcache_lowmem_prunesDescr = 'Po�et pr�kazov, ktor� boli odstr�nen� z vyrovn�cej pam�ti na uvo�nenie pam�ti pre nov� pr�kazy. T�to hodnota v�m m��e pom�c� pri upravovan� ve�kosti vyrovn�vacej pam�ti pr�kazov. Na v�ber pr�kazov na odstr�nenie z vyrovn�vacej pam�ti sa pou��va strat�gia LRU (tzn. najdlh�ie nepou�it� pr�kazy bud� odstr�nen� ako prv�).';
$strShowStatusQcache_not_cachedDescr = 'Po�et pr�kazov neumiestnen�ch do vyrovn�vacej pam�ti (nie s� cachovate�n� alebo nevyhovuj� nastaveniu query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Po�et pr�kazov registrovan�ch vo vyrovn�vacej pam�ti.';
$strShowStatusQcache_total_blocksDescr = 'Celkov� mno�stvo blokov vo vyrovn�vacej pam�ti pr�kazov.';
$strShowStatusReset = 'Vynulova�';
$strShowStatusRpl_statusDescr = 'Stav failsafe replik�cie (zatia� neimplementovan�).';
$strShowStatusSelect_full_joinDescr = 'Po�et spojen�, ktor� nevyu��vaj� indexy. Ak sa t�to hodnota nerovn� 0, mali by ste starostlivo skontrolova� indexy va�ich tabuliek.';
$strShowStatusSelect_full_range_joinDescr = 'Po�et spojen�, ktor� na referen�nej tabu�ke vyu�ili intervalov� vyh�ad�vanie.';
$strShowStatusSelect_range_checkDescr = 'Po�et spojen� bez k���ov, ktor� kontrolovali pou�itie k���a na ka�dom riadku (ak t�to hodnota nie je 0, mali by ste starostlivo skontrolova� indexy va�ich tabuliek).';
$strShowStatusSelect_rangeDescr = 'Po�et spojen�, ktor� na prvej tabu�ke vyu�ili intervalov� vyh�ad�vanie (t�to hodnota nie je kritick� ani v pr�pade, �e je vysok�).';
$strShowStatusSelect_scanDescr = 'Po�et spojen�, ktor� vykonali kompletn� preh�adanie prvej tabu�ky.';
$strShowStatusSlave_open_temp_tablesDescr = 'Po�et do�asn�ch tabuliek, otvoren�ch podriaden�m SQL vl�knom.';
$strShowStatusSlave_retried_transactionsDescr = 'Celkov� po�et (od spustenia) pokusov replika�n�ho podriaden�ho SQL vl�kna o znovuobnovenie transakcie.';
$strShowStatusSlave_runningDescr = 'T�to polo�ka obsahuje hodnotu ON ak je tento server podriaden�m a je pripojen� k prisl�chaj�cemu nadriaden�mu servru.';
$strShowStatusSlow_launch_threadsDescr = 'Po�et vl�kien, ktor�ch vytvorenie zabralo viac ako je hodnota slow_launch_time.';
$strShowStatusSlow_queriesDescr = 'Po�et pr�kazov, ktor�ch vykonanie zabralo viac ako je hodnota long_query_time.';
$strShowStatusSort_merge_passesDescr = 'Po�et zlu�ovac�ch prechodov, ktor� musel vykona� zora�ovac� algoritmus. Ak je t�to hodnota pr�lis ve�k�, mali by ste pouva�ova� nad zv��en�m hodnoty syst�mov�ho nastavania sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Po�et rozsahom obmedzen�ch zora�ovan�.';
$strShowStatusSort_rowsDescr = 'Po�et zoraden�ch riadkov.';
$strShowStatusSort_scanDescr = 'Po�et zoraden� uskuto�nen�ch preh�ad�van�m tabu�ky.';
$strShowStatusTable_locks_immediateDescr = 'Po�et z�mkov tabuliek, ktor� boli z�skan� okam�ite.';
$strShowStatusTable_locks_waitedDescr = 'Po�et pr�padov ke� sa z�mok tabu�ky nedal z�ska� okam�ite a bolo nutn� vy�ka�. Ak je t�to hodnota vysok� a m�te probl�my s v�konom, mali by ste najprv optimalizova� va�e pr�kazy a potom bu� rozdeli� tabu�ku/tabu�ky alebo pou�i� replik�ciu.';
$strShowStatusThreads_cachedDescr = 'Po�et vl�kien vo vyrovn�vacej pam�ti. �spe�nos� tejto vyrovn�vacej pam�ti sa d� vypo��ta� zo vz�ahu Threads_created/Connections. Ak je t�to hodnota v �ervenom, mali by ste zv��i� hodnotu thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Po�et moment�lne otvoren�ch spojen�.';
$strShowStatusThreads_createdDescr = 'Po�et vl�kien vytvoren�ch na zaobch�dzanie so spojeniami. Ak je hodnota Threads_created vysok�, mohli by ste zv��i� hodnotu thread_cache_size (to v�ak nesp�sob� �iadnu cite�n� zmenu ak m�te vl�kna dobre implementovan�).';
$strShowStatusThreads_runningDescr = 'Po�et akt�vnych (nespiacich) vl�kien.';
$strShowTableDimension = 'Zobrazi� rozmery tabuliek';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dopyt znovu ';
$strShow = 'Uk�za�';
$strSimplifiedChinese = 'Zjednodu�en� ��n�tina';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSkipQueries = 'Po�et z�znamov (pr�kazov), ktor� sa maj� zo za�iatku presko�i�';
$strSlovak = 'Sloven�ina';
$strSlovenian = 'Slovin�ina';
$strSocketProblem = '(alebo soket lok�lneho MySQL servra nie je spr�vne nastaven�)';
$strSortByKey = 'Zoradi� pod�a k���a';
$strSorting = 'Zora�ovanie';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSpanish = '�panielsky';
$strSplitWordsWithSpace = 'Slov� s� rozdelen� medzerou (" ").';
$strSQLCompatibility = 'Re�im kompatibility SQL';
$strSQLExportType = 'Typ vytvoren�ch dopytov';
$strSQLParserBugMessage = 'Je mo�n�, �e ste na�li chybu v SQL syntaktickom analyz�tore. Presk�majte podrobne SQL dopyt, predov�etk�m spr�vnos� umiestnenia �vodzoviek. �al�ia mo�nos� je, �e nahr�vate s�bor s bin�rnymi d�tami nezap�san�mi v �vodzovk�ch. M��ete tie� vysk��a� pou�i� pr�kazov� riadok MySQL na odstr�nenie probl�mu. Pokial st�le m�te probl�my alebo syntaktick� analyz�tor SQL st�le hl�si chybu v dopyte, ktor� v pr�kazovom riadku funguje, pros�m pok�ste sa zredukova� dopyt na �o najmen��, v ktorom sa probl�m e�te vyskytuje a ohl�ste chybu na str�nke phpMyAdmina spolu so sekciou V�PIS uveden� ni��ie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dopyte. Ni��ie uveden� MySQL v�stup (ak je nejak�) V�m m��e pom�c� odstr�ni� probl�m';
$strSQLQuery = 'SQL dopyt';
$strSQLResult = 'v�sledok SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neplatn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzatvoren� �vodzovky';
$strSQPBugUnknownPunctuation = 'Nezn�my interpunk�n� re�azec';
$strStatCheckTime = 'Posledn� kontrola';
$strStatCreateTime = 'Vytvorenie';
$strStatement = '�daj';
$strStatisticsOverrun = 'Na vy�a�enom serveri m��e d�js� k prete�eniu po��tadiel, tak�e �tatistiky servera m��u by� nepresn�.';
$strStatUpdateTime = 'Posledn� zmena';
$strStatus = 'Stav';
$strStorageEngines = '�lo�n� Syst�my';
$strStorageEngine = '�lo�n� Syst�m';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucExcelCSV = 'CSV pre MS Excel d�ta';
$strStrucNativeExcel = 'Nat�vne d�ta MS Excel';
$strStrucOnly = 'Iba �trukt�ru';
$strStructPropose = 'Navrhn�� �trukt�ru tabu�ky';
$strStructure = '�trukt�ra';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dopyt bol �spe�ne vykonan�';
$strSum = 'Celkom';
$strSwedish = '�v�dsky';
$strSwitchToDatabase = 'Prepn�� na skop�rovan� datab�zu';
$strSwitchToTable = 'Prepn�� na skop�rovan� tabu�ku';

$strTableAlreadyExists = 'Tabu�ka %s u� existuje!';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametre tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTable = 'Tabu�ka';
$strTakeIt = 'zvoli�';
$strTblPrivileges = 'Opr�vnenia pre jednotliv� tabu�ky';
$strTempData = 'Do�asn� d�ta';
$strTextAreaLength = ' Toto mo�no nep�jde upravi�,<br /> kv�li svojej d�ke ';
$strThai = 'Thaj�ina';
$strThemeDefaultNotFound = 'Predvolen� vzh�ad %s nebol n�jden�!';
$strThemeNoPreviewAvailable = 'N�h�ad nie je dostupn�.';
$strThemeNotFound = 'Vzh�ad %s nebol n�jden�!';
$strThemeNoValidImgPath = 'Nebola n�jden� platn� cesta k obr�zkom pre vzh�ad %s!';
$strThemePathNotFound = 'Nebola n�jden� platn� cesta ku vzh�adu %s!';
$strTheme = 'Vzh�ad';
$strThisHost = 'Tento po��ta�';
$strThreads = 'Po�et vl�kien';
$strThreadSuccessfullyKilled = 'Vl�kno %s bol �spe�ne zabit�.';
$strTime = '�as';
$strTimeoutInfo = 'Predch�dzaj�cemu importu vypr�al �asov� limit. Po znovuodoslan� formul�ra sa bude pokra�ova� od poz�cie %d.';
$strTimeoutNothingParsed = 'Av�ak pri poslednom pokuse neboli prijat� �iadne d�ta, �o obvykle znamen�, �e phpMyAdmin nebude schopn� dokon�i� tento import, pokia� nebude zv��en� �asov� limit behu skriptu v php.';
$strTimeoutPassed = '�asov� limit behu skriptu vypr�al. Ak chcete import s�boru dokon�i�, odo�lite znova formul�r a import bude pokra�ova�.';
$strToggleScratchboard = 'zobrazi� grafick� n�vrh';
$strTotal = 'celkovo';
$strTotalUC = 'Celkom';
$strTraditionalChinese = 'Tradi�n� ��n�tina';
$strTraditionalSpanish = 'Tradi�n� �paniel�ina';
$strTraffic = 'Prev�dzka';
$strTransactionCoordinator = 'Koordin�tor transakci�';
$strTransformation_application_octetstream__download = 'Zobraz� odkaz na stiahnutie d�t. Prv� parameter je meno s�boru, druh� je meno st�pca v tabu�ke obsahuj�ci meno s�boru. Ak zad�te druh� parameter, prv� mus� by� pr�zdny.';
$strTransformation_application_octetstream__hex = 'Zobraz� d�ta v ich hexadecim�lnej forme. Nepovinn� parameter ur�uje po ko�ko znakoch je vkladan� medzera (�tandardne po dvoch).';
$strTransformation_image_jpeg__inline = 'Zobraz� n�h�ad obr�zku s odkazom na obr�zok; parametre ��rka a v��ka v bodoch (pomer str�n obr�zku zostane zachovan�)';
$strTransformation_image_jpeg__link = 'Zobraz� odkaz na obr�zok (napr. stiahnutie po�a blob).';
$strTransformation_image_png__inline = 'Zobraz� image/jpeg: inline';
$strTransformation_text_plain__external = 'PLAT� IBA PRE LINUX: Spust� extern� aplik�ciu, na jej �tandardn� vstup po�le pole a zobraz� v�stup programu. Predvolen� program je Tidy, ktor� pekne sform�tuje HTML. Z bezpe�nostn�ch d�vodov mus�te ru�ne upravi� obsah s�boru libraries/transformations/text_plain__external.inc.php a prida� do neho povolen� aplik�cie. Prv� parameter je ��slo aplik�cie, ktor� chcete pou�i� a druh� parametre s� parametre tejto aplik�cie. Ak je tret� parameter nastaven� na 1, v�stup bude skonvertovan� funkciou htmlspecialchars() (predvolen� je 1). �tvrt� parameter v pr�pade, �e je nastaven� na 1 prid� k v�stupn�mu textu parameter NOWRAP, ��m zabezpe�� zachovanie form�tovania (predvolen� je 1)';
$strTransformation_text_plain__formatted = 'Zachov� p�vodn� form�tovanie po�a tak ako je ulo�en� v datab�ze.';
$strTransformation_text_plain__imagelink = 'Zobraz� obr�zok a odkaz z po�a obsahuj�ceho odkaz na obr�zok. Prv� parameter je prefix URL (napr. "http://domena.sk/"), druh� a tret� parameter ur�uj� ��rku a v��ku obr�zku.';
$strTransformation_text_plain__link = 'Zobraz� odkaz z po�a obsahuj�ceho odkaz. Prv� parameter je prefix URL (napr. "http://domena.sk/"), druh� parameter je text odkazu.';
$strTransformation_text_plain__sql = 'Form�tuje text ako SQL pr�kaz pomocou syntaxov�ho zv�raz�ovania.';
$strTransformation_text_plain__substr = 'Zobraz� iba �as� re�azca. Prv� parameter je posun od za�iatku (predvolen� je 0) a druh� ur�uje d�ku textu, ktor� sa ma zobrazi�, ak nie je zadan� bude zobrazen� zvy�ok textu. Tret� parameter ur�uje znaky, ktor� bud� pridan� na koniec skr�ten�ho textu (predvolen� je ...).';
$strTruncateQueries = 'Zobrazi� skr�tene dopyty';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajinsky';
$strUncheckAll = 'Odzna�i� v�etko';
$strUnicode = 'Unicode';
$strUnique = 'Unik�tny';
$strUnknown = 'nezn�my';
$strUnselectAll = 'Odzna�i� v�etko';
$strUnsupportedCompressionDetected = 'Pok�sili ste sa na��ta� s�bor s nepodporovanou kompresiou (%s). Bu� nie je zahrnut� podpora tejto kompresie alebo bola deaktivovan� v konfigur�cii.';
$strUpdatePrivMessage = 'Boli aktualizovan� opr�vnenia pre %s.';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dopyt';
$strUpdComTab = 'Pros�m pre��tajte si dokument�ciu ako aktualizova� tabu�ku s inform�ciami o st�pcoch (Column_comments Table)';
$strUpgrade = 'Mali by ste aktualizova� %s na verziu %s alebo vy��iu.';
$strUploadLimit = 'Pravdepodobne ste sa pok�sili uploadnu� pr�li� ve�k� s�bor. Pre��tajte si pros�m %sdokument�ciu%s, ako sa d� toto obmedzenie ob�s�.';
$strUploadsNotAllowed = 'Ukladanie s�borov na server nie je povolen�.';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUsedPhpExtensions = 'Pou�it� roz��renia PHP';
$strUseHostTable = 'Pou�i� tabu�ku s hostite�mi';
$strUserAlreadyExists = 'Pou��vate� %s u� existuje!';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUserNotFound = 'Zvolen� pou��vate� nebol n�jden� v tabu�ke pr�v.';
$strUserOverview = 'Preh�ad pou��vatelov';
$strUser = 'Pou��vate�';
$strUsersDeleted = 'Vybran� pou��vatelia bol �spe�ne odstr�nen�.';
$strUsersHavingAccessToDb = 'Pou��vatelia maj�ci pr�stup k &quot;%s&quot;';
$strUseTabKey = 'Pre pohyb medzi hodnotami pou�ite kl�vesu TAB alebo pre pohyb v�etk�mi smermi kl�vesy CTRL+��pky';
$strUseTables = 'Pou�i� tabu�ky';
$strUseTextField = 'Po�i� textov� pole';
$strUseThisValue = 'Pou�i� t�to hodnotu';

$strValidateSQL = 'Potvrdi� platnos� SQL';
$strValidatorError = 'SQL validator nemohol by� inicializovan�. Pros�m skontrolujte, �i s� nain�talovan� v�etky potrebn� roz��renia php, tak ako s� pop�san� v %sdocumentation%s.';
$strValue = 'Hodnota';
$strVar = 'Premenn�';
$strVersionInformation = 'Inform�cie o verzii';
$strViewDumpDatabases = 'Export datab�z';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewHasBeenDropped = 'Poh�ad %s bol odstr�nen�';
$strViewMaxExactCount = 'Tento poh�ad obsahuje viac ako %s riadkov. Vi� %sdokument�cia%s.';
$strView = 'Poh�ad';

$strWebServerUploadDirectoryError = 'Adres�r ur�en� pre upload s�borov sa ned� otvori�';
$strWebServerUploadDirectory = 'upload adres�r web serveru';
$strWelcome = 'Vitajte v %s';
$strWestEuropean = 'Z�padn� Eur�pa';
$strWildcard = 'nahradzuj�ci znak';
$strWindowNotFound = 'Cie�ov� okno prehliada�a nemohlo by� aktualizovan�. Mo�no ste zatvorili rodi�ovsk� okno, alebo prehliada� blokuje oper�cie medzi oknami z d�vodu bezpe�nostn�ch nastaven�';
$strWithChecked = 'V�ber:';
$strWriteRequests = 'Po�iadavkov na z�pis';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strXML = 'XML';

$strYes = '�no';

$strZeroRemovesTheLimit = 'Pozn�mka: Nastavenie t�chto parametrov na 0 (nulu) odstr�ni obmedzenia.';
$strZip = '"zozipovan�"';

// To translate:

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
