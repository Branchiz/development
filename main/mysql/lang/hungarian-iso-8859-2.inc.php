<?php

// Peter Bakondy <bakondyp@freemail.hu>
// Mih�ly M�sz�ros <poizon at sth dot sze dot hu>

$charset = 'iso-8859-2';
$text_dir = 'ltr'; // ('ltr': balr�l jobbra, 'rtl': jobbr�l balra)
$number_thousands_separator = '�';
$number_decimal_separator = '.';
// Byte, Kilo, Mega, Giga, Tera, Peta, Exa r�vid�t�sei
$byteUnits = array('B�jt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'M�rc', '�pr', 'M�j', 'J�n', 'J�l', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Le�r�s a $datefmt v�ltoz� defini�l�s�hoz:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';

$timespanfmt = '%s nap, %s �ra, %s perc, %s m�sodperc';

$strAbortedClients = 'Megszak�tva';
$strAccessDeniedExplanation = 'A phpMyAdmin megpr�b�lt csatlakozni a MySQL szerverhez, de a szerver elutas�totta a kapcsolatot. Ellen&#337;rizze a host, username �s jelsz� mez&#337;ket a config.inc.php f�jlban, �s bizonyosodjon meg r�la, hogy ezek megfelelnek a MySQL szerver adminisztr�tor�t�l kapott inform�ci�knak.';
$strAccessDenied = 'Hozz�f�r�s megtagadva';
$strAction = 'Parancs';
$strAddAutoIncrement = 'AUTO_INCREMENT �rt�k hozz�ad�sa';
$strAddClause = '%s hozz�ad�sa';
$strAddConstraints = 'Megszor�t�s hozz�ad�sa';
$strAddDeleteColumn = 'Mez&#337; oszlopokat hozz�ad/t�r�l';
$strAddDeleteRow = 'Krit�rium sort hozz�ad/t�r�l';
$strAddFields = '%s mez&#337; hozz�ad�sa';
$strAddHeaderComment = 'Egyedi megjegyz�s hozz�ad�sa a fejl�chez (\\n t�ri a sorokat)';
$strAddIntoComments = 'Hozz�ad�s a megjegyz�shez';
$strAddNewField = '�j mez&#337; hozz�ad�sa';
$strAddPrivilegesOnDb = 'Privil�giumok hozz�ad�sa a k�vetkez&#337; adatb�zison';
$strAddPrivilegesOnTbl = 'Privil�giumok hozz�ad�sa a k�vetkez&#337; t�bl�n:';
$strAddSearchConditions = 'Keres�si felt�telek megad�sa (WHERE felt�telek):';
$strAddToIndex = 'adj az indexhez %s oszlopot';
$strAddUser = '�j felhaszn�l� hozz�ad�sa';
$strAddUserMessage = 'Az �j felhaszn�l�t felvettem.';
$strAdministration = 'Adminisztr�ci�';
$strAffectedRows = 'Keresett sorok:';
$strAfterInsertBack = 'vissza az el&#337;z&#337; oldalra';
$strAfterInsertNewInsert = '�j sor besz�r�sa';
$strAfterInsertNext = 'K�vetkez&#337; sor szerkeszt�se';
$strAfterInsertSame = 'Visszat�r�s az oldalra';
$strAfter = '%s ut�n';
$strAll = 'Mind';
$strAllowInterrupt = 'Enged�lyezi az import megszak�t�s�t, ha a script �szleli, hogy k�zel van az id&#337;limithez. J�l j�het nagy f�jlok importjakor, mivel meg tudja szak�tani a tranzakci�t.';
$strAllTableSameWidth = 'Minden t�bla ezzel a sz�less�ggel jelenjen meg?';
$strAlterOrderBy = 'T�bla megv�ltoz�sa rendezve e szerint:';
$strAnalyzeTable = 'T�bla vizsg�lat';
$strAnd = '�s';
$strAndThen = '�s ut�na';
$strAnIndex = 'Indexet hozz�adtam: %s';
$strAny = 'B�rmely';
$strAnyHost = 'B�rmely hoszt';
$strAnyUser = 'B�rmely felhaszn�l�';
$strApproximateCount = 'Becs�lt �rt�k lehet. L�sd: FAQ 3.11';
$strAPrimaryKey = 'Els&#337;dleges kulcsot hozz�adtam: %s';
$strArabic = 'Arab';
$strArmenian = '�rm�ny';
$strAscending = 'N�vekv&#337;';
$strAtBeginningOfTable = 'A t�bla elej�n�l';
$strAtEndOfTable = 'A t�bla v�g�n�l';
$strAttr = 'Tulajdons�gok';
$strAutomaticLayout = 'Automatikus elrendez�s';

$strBack = 'Vissza';
$strBaltic = 'Balti';
$strBeginCut = 'Kiv�g�s Kezdete';
$strBeginRaw = 'Feldolgozatlan Kezdete';
$strBinary = 'Bin�ris';
$strBinaryDoNotEdit = 'Bin�ris - nem szerkeszthet&#337;';
$strBinaryLog = 'Bin�ris napl�';
$strBinLogEventType = 'Esem�ny t�pusa';
$strBinLogInfo = 'Inform�ci�';
$strBinLogName = 'Napl� neve';
$strBinLogOriginalPosition = 'Eredeti poz�ci�';
$strBinLogPosition = 'Poz�ci�';
$strBinLogServerId = 'Szerver ID';
$strBookmarkAllUsers = 'Az �sszes felhaszn�l�nak enged�lyezi a hozz�f�r�st ehhez a k�nyvjelz&#337;h�z';
$strBookmarkCreated = '%s k�nyvjelz&#337; elk�sz�lt';
$strBookmarkDeleted = 'A k�nyvjelz&#337;t t�r�ltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkQuery = 'Feljegyzett SQL-k�r�s';
$strBookmarkReplace = 'Azonos nev&#369; k�nyvjelz&#337; fel�l�r�sa';
$strBookmarkThis = 'Jegyezd fel az SQL-k�r�st';
$strBookmarkView = 'Csak megn�zhet&#337;';
$strBrowseDistinctValues = 'K�l�nb�z&#337; �rt�kek b�ng�sz�se';
$strBrowseForeignValues = 'Idegen kulcsok b�ng�sz�se';
$strBrowse = 'Tartalom';
$strBufferPoolActivity = 'Puffer tev�kenys�g';
$strBufferPool = 'Puffer';
$strBufferPoolUsage = 'Puffer kihaszn�lts�ga';
$strBufferReadMisses = 'Olvas�si hib�k';
$strBufferWriteWaits = '�r�si v�rakoz�sok';
$strBulgarian = 'Bolg�r';
$strBzError = 'A phpMyAdmin nem tudta bet�m�r�teni a dump-ot, mert nem megfelel&#337; a Bz2 kiterjeszt�s ebben a php verzi�ban. Er&#337;sen aj�nlott a <code>$cfg[\'BZipDump\']</code> param�tert a phpMyAdmin konfigur�ci�s f�jlban <code>FALSE</code> �rt�kre be�ll�tani. Ha a Bz2 t�m�r�t�si elj�r�st haszn�lni szeretn�, friss�tse a php-t! Tekintse meg a %s php bug report-ot a r�szletek�rt.';
$strBzip = '"bzip-pel t�m�r�tve"';

$strCalendar = 'Napt�r';
$strCancel = 'M�gse';
$strCannotLogin = 'A bel�p�s a MySQL szerverre sikertelen volt';
$strCantLoad = 'nem tudtam bet�lteni a %s kiterjeszt�st, ellen&#337;rizd a PHP konfigur�ci�t';
$strCantLoadRecodeIconv = 'Nem tudom bet�lteni az iconv vagy recode kiterjeszt�st a karakterk�szlet-�talak�t�shoz, �ll�tsd be a php-t, hogy enged�lyezze ezeket a kiterjeszt�seket vagy tiltsd le a karakterk�szlet-�talak�t�st a phpMyAdmin-ban.';
$strCantRenameIdxToPrimary = 'Nem tudom �tnevezni az indexet PRIMARY-v�!';
$strCantUseRecodeIconv = 'Nem tudom haszn�lni az iconv, libiconv sem a recode_string funkci�kat mialatt a kiterjeszt�s-jelent�seket be kell t�lteni. Ellen&#337;rizd a php konfigur�ci�t.';
$strCardinality = 'Sz�moss�g';
$strCaseInsensitive = 'bet&#369;nagys�gra nem �rz�keny';
$strCaseSensitive = 'bet&#369;nagys�g-�rz�keny';
$strCentralEuropean = 'K�z�p-eur�pai';
$strChangeCopyModeCopy = '... a r�gi meg&#337;rz�se.';
$strChangeCopyModeDeleteAndReload = ' ... a r�gi t�rl�se a felhaszn�l�i t�bl�kb�l, �s ut�na a privil�giumok �jrat�lt�se.';
$strChangeCopyMode = '�j felhaszn�l� hozz�ad�sa ezekkel a privil�giumokkal ...';
$strChangeCopyModeJustDelete = ' ... a r�gi t�rl�se a felhaszn�l�i t�bl�kb�l.';
$strChangeCopyModeRevoke = ' ... az �sszes akt�v privil�gium vissza�ll�t�sa a r�gib&#337;l, �s ut�na t�rl�s�k.';
$strChangeCopyUser = 'Bel�p�si inform�ci� megv�ltoztat�sa / Felhaszn�l� m�sol�sa';
$strChangeDisplay = 'V�lassz mez&#337;t a megjelen�t�shez';
$strChangePassword = 'Jelsz� megv�ltoztat�sa';
$strChange = 'V�ltoztat';
$strCharset = 'Karakterk�szlet';
$strCharsetOfFile = 'A f�jl karakterk�szlete:';
$strCharsetsAndCollations = 'Karakterk�szletek �s egybevet�sek';
$strCharsets = 'Karakterk�szlet';
$strCheckAll = '�sszeset kijel�li';
$strCheckOverhead = 'Ellen&#337;rz�s felf�ggeszt�se';
$strCheckPrivsLong = 'Privil�giumok ellen&#337;rz�se &quot;%s&quot; adatb�zison.';
$strCheckPrivs = 'Privil�giumok ellen&#337;rz�se';
$strCheckTable = 'T�bla ellen&#337;rz�s';
$strChoosePage = 'V�lassz oldalt a szerkeszt�shez';
$strColComFeat = 'Oszlop megjegyz�sek megjelen�t�se';
$strCollation = 'Egybevet�s';
$strColumnNames = 'Oszlop nevek';
$strColumnPrivileges = 'Oszlop-specifikus privil�giumok';
$strCommand = 'Parancs';
$strCommentsForTable = 'T�bla-megjegyz�sek';
$strComments = 'Megjegyz�sek';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibilis';
$strCompleteInserts = 'Mez&#337;neveket is hozz�adja';
$strCompression = 'T�m�r�t�s';
$strConfigDefaultFileError = 'Nem lehet bet�lteni az alap konfigur�ci�t innen: "%1$s"';
$strConfigFileError = 'A phpMyAdmin nem tudja olvasni a konfigur�ci�s f�jlt! Lehet, hogy a php szintaktikai hib�t tal�lt benne, vagy nem tal�lja a f�jlt. Haszn�ld az als� linket a konfigur�ci�s f�jl helyre�ll�t�s�hoz, olvasd el a kapott php hiba�zeneteket. T�bbnyire egy id�z&#337;jel vagy egy pontosvessz&#337; hi�nyzik valahol. Ha �res oldalt kapsz, minden rendben.';
$strConfigureTableCoord = '�ll�tsd be a(z) $s t�bla koordin�t�it';
$strConnectionError = 'Nem siker�lt a csatlakoz�s: �rv�nytelen be�ll�t�sok.';
$strConnections = 'Kapcsolat';
$strConstraintsForDumped = 'Kik�t�sek a ki�rt t�bl�khoz';
$strConstraintsForTable = 'Kik�t�sek a t�bl�hoz';
$strCookiesRequired = 'A Cookie-kat most enged�lyezned kell.';
$strCopyDatabaseOK = '%s adatb�zis �tm�solva ide: %s';
$strCopy = 'M�sol�s';
$strCopyTableOK = '%s t�bl�t ide m�soltam: %s.';
$strCopyTableSameNames = 'Nem tudom a t�bl�t ugyanarra m�solni!';
$strCopyTable = 'T�bla m�sol�sa ide (adatb�zis<b>.</b>t�bla):';
$strCouldNotKill = 'phpMyAdmin nem tudta megsz�ntetni ez a sz�lat: %s. Meglehet, m�r v�get �rt.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE m�sol�s el&#337;tt';
$strCreateIndex = 'K�sz�ts egy indexet a(z) %s. oszlopon';
$strCreateIndexTopic = '�j index l�trehoz�sa';
$strCreate = 'L�trehoz';
$strCreateNewDatabase = '�j adatb�zis l�trehoz�sa';
$strCreateNewTable = '�j t�bla l�trehoz�sa a(z) %s adatb�zisban';
$strCreatePage = '�j oldal k�sz�t�se';
$strCreatePdfFeat = 'PDF k�sz�t�se';
$strCreateTable  = 'T�bla l�trehoz�sa';
$strCreationDates = 'D�tum K�sz�t�s/M�dos�t�s/Ellen&#337;rz�s';
$strCriteria = 'Krit�rium';
$strCroatian = 'Horv�t';
$strCSV = 'CSV';
$strCyrillic = 'Cirill';
$strCzech = 'Cseh';
$strCzechSlovak = 'Szlov�k';

$strDanish = 'D�n';
$strData = 'Adat';
$strDatabase = 'Adatb�zis';
$strDatabaseEmpty = 'Az adatb�zis n�z mez&#337; �res!';
$strDatabaseExportOptions = 'Adatb�zis export be�ll�t�sok';
$strDatabaseHasBeenDropped = '%s adatb�zist eldobtam.';
$strDatabases = 'Adatb�zisok';
$strDatabasesDropped = '%s adatb�zist sikeresen t�r�ltem.';
$strDatabasesStats = 'Adatb�zis statisztika';
$strDatabasesStatsDisable = 'Statisztika tilt�sa';
$strDatabasesStatsEnable = 'Statisztika enged�lyez�se';
$strDatabasesStatsHeavyTraffic = 'Megjegyz�s: az adatb�zis statisztika enged�lyez�se nagy adatforgalomhoz vezethet a webszerver �s a MySQL k�z�tt.';
$strDataDict = 'Adatk�nyvt�r';
$strDataOnly = 'Csak adatok';
$strDataPages = 'Adatokat tartalmaz� lapok';
$strDBComment = 'Adatb�zis megjegyz�s: ';
$strDBCopy = 'Adatb�zis m�sol�sa ide';
$strDbPrivileges = 'Adatb�zis-specifikus privil�giumok';
$strDBRename = 'Adatb�zis �tnevez�se';
$strDbSpecific = 'adatb�zis-specifikus';
$strDefault = 'Alap�rtelmezett';
$strDefaultEngine = '%s az alap�rtelmezett t�rol�motor ezen a MySQL szerveren.';
$strDefaultValueHelp = 'Az alap�rtelmezett �rt�kekhez �rjon be egy egyszer&#369; �rt�ket, escape karakter �s id�z&#337;jelek n�lk�l, ezt a form�tumot k�vetve: a';
$strDefragment = 'T�bla t�redezetts�gmentes�t�se';
$strDelayedInserts = 'Id&#337;z�tett besz�r�s haszn�lata';
$strDeleteAndFlushDescr = 'Ez a legtiszt�bb �t, de a privil�giumok �jrat�lt�se eltarthat egy ideig.';
$strDeleteAndFlush = 'T�r�lje a felhaszn�l�t, azut�n t�ltse be �jra a privil�giumokat.';
$strDeleted = 'A sort t�r�ltem';
$strDeletedRows = 'T�r�lt sorok:';
$strDeleteNoUsersSelected = 'Nincs t�rl�sre kijel�lt felhaszn�l�!';
$strDelete = 'T�r�l';
$strDeleting = '%s t�rl�se';
$strDelimiter = 'Elv�laszt�';
$strDelOld = 'A jelenlegi oldalon a t�blahivatkoz�sok m�r nem �lnek. Akarja ezeket t�r�lni?';
$strDescending = 'Cs�kken&#337;';
$strDescription = 'Le�r�s';
$strDesigner = 'Tervez&#337;';
$strDictionary = 'sz�t�r';
$strDirtyPages = 'Piszkos lapok';
$strDisabled = 'Tiltott';
$strDisableForeignChecks = 'Idegen kulcsok ellen&#337;rz�s�nek letilt�sa';
$strDisplayFeat = 'Megjelen�t�s tulajdons�gok';
$strDisplayOrder = 'Megjelen�t�s rendez�s:';
$strDisplayPDF = 'PDF s�ma kijelz�se';
$strDoAQuery = 'Csin�lj egy "lek�rdez�st" (helyettes�t&#337; karakter: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokument�ci�';
$strDoYouReally = 'Biztos ez akarod? ';
$strDropDatabaseStrongWarning = 'Ki akarod t�r�lni az EG�SZ adatb�zist?';
$strDrop = 'Eldob';
$strDropUsersDb = 'Azon adatb�zisok t�rl�se, amelyek neve egyezik a felhaszn�l�kkal.';
$strDumpingData = 'T�bla adatok:';
$strDumpSaved = 'A ki�r�st elmetettem ebbe a f�jlba: %s.';
$strDumpXRows = '%s sor ki�r�sa a %s. sorral kezd&#337;dik';
$strDynamic = 'dinamikus';

$strEditPDFPages = 'PDF oldalak szerkeszt�se';
$strEditPrivileges = 'Privil�giumok szerkeszt�se';
$strEdit = 'Szerkeszt';
$strEffective = 'Hat�lyos';
$strEmpty = 'Ki�r�t';
$strEmptyResultSet = 'A MySQL �reset adott vissza (nincsenek sorok).';
$strEnabled = 'Enged�lyezett';
$strEncloseInTransaction = 'Export lez�r�sa a tranzakci�ban';
$strEndCut = 'Kiv�g�s V�ge';
$strEndRaw = 'Feldolgozatlan V�ge';
$strEnd = 'V�ge';
$strEngineAvailable = '%s el�rhet&#337; ezen a MySQL szerveren.';
$strEngineDisabled = '%s le van tiltva ezen a MySQL szerveren.';
$strEngines = 'Motorok';
$strEngineUnsupported = 'Ez a MySQL szerver nem t�mogatja a(z) %s t�rol�motrot.';
$strEnglish = 'Angol';
$strEnglishPrivileges = ' Megjegyz�s: a MySQL privil�gium nevek az angolb�l sz�rmaznak.';
$strError = 'Hiba';
$strErrorInZipFile = 'Hiba a ZIP arch�vumban:';
$strEsperanto = 'Eszperanto';
$strEstonian = '�szt';
$strEvent = 'Esem�ny';
$strExcelEdition = 'Excel szerkeszt�s';
$strExecuteBookmarked = 'Elmentett elj�r�s futtat�sa';
$strExplain = 'SQL magyar�zat';
$strExport = 'Export';
$strExtendedInserts = 'Kiterjesztett besz�r�sok';
$strExtra = 'Extra';

$strFailedAttempts = 'Hib�s pr�b�lkoz�s';
$strFieldHasBeenDropped = '%s mez&#337;t eldobtam';
$strFieldInsertFromFileTempDirNotExists = 'Nem siker�lt a felt�lt�tt f�jl �thelyez�se, l�sd: FAQ 1.11';
$strField = 'Mez&#337;';
$strFieldsEnclosedBy = 'Mez&#337; lez�r�s';
$strFieldsEscapedBy = 'Mez&#337; escape karakter';
$strFields = 'Mez&#337;k sz�ma';
$strFieldsTerminatedBy = 'Mez&#337; v�ge';
$strFileAlreadyExists = '%s f�jl m�r l�tezik a szerveren, v�ltoztassa meg a f�jlnevet, vagy �ll�tsa be a fel�l�r�s opci�t!';
$strFileCouldNotBeRead = 'A f�jl nem olvashat�';
$strFileNameTemplateDescriptionDatabase = 'adatb�zis n�v';
$strFileNameTemplateDescriptionServer = 'szerver n�v';
$strFileNameTemplateDescriptionTable = 't�bla n�v';
$strFileNameTemplateRemember = 'eml�kezzen az �tmeneti n�vre';
$strFileNameTemplate = '�tmeneti f�jln�v';
$strFiles = 'F�jlok';
$strFileToImport = 'Import�land� f�jl';
$strFixed = 'r�gz�tett';
$strFlushPrivilegesNote = 'Megjegyz�s: a phpMyAdmin a felhaszn�l�i privil�giumokat k�zvetlen�l a MySQL privil�gium t�bl�kb�l veszi. Ezen t�bl�k tartalma elt�rhet a szerver privil�giumokt�l, ha ezt k�zzel be�ll�tottuk. Ebben az esetben �rdemes %s�jra bet�lteni a privil�giumokat%s a folytat�s el&#337;tt.';
$strFlushQueryCache = 'Lek�rdez�s cache ki�r�sa';
$strFlushTables = '�sszes t�bla kir�sa (bez�r�sa)';
$strFlushTable = 'T�bla ki�r�sa (FLUSH)';
$strFontSize = 'Bet&#369;m�ret';
$strForeignKeyError = 'Nem siker�lt az idegen kulcs l�trehoz�sa (ellen&#337;rizd az adatt�pusokat)';
$strFormat = 'Form�tum';
$strFormEmpty = 'Hi�nyz� adat a form-ban!';
$strFreePages = 'Szabad lapok';
$strFullText = 'Teljes Sz�vegek';
$strFunction = 'Funkci�';

$strGenBy = 'K�sz�tette';
$strGeneralRelationFeat = '�ltal�nos rel�ci�s jellemz&#337;k';
$strGenerate = 'Gener�l�s';
$strGeneratePassword = 'Jelsz� gener�l�s';
$strGenTime = 'L�trehoz�s ideje';
$strGeorgian = 'Gr�z';
$strGerman = 'N�met';
$strGlobal = 'glob�lis';
$strGlobalPrivileges = 'Glob�lis privil�giumok';
$strGlobalValue = 'Glob�lis v�ltoz�';
$strGo = 'V�grehajt';
$strGrantOption = 'Grant';
$strGreek = 'G�r�g';
$strGzip = '"gzip-pel t�m�r�tve"';

$strHasBeenAltered = 'megv�ltozott.';
$strHasBeenCreated = 'megsz�letett.';
$strHaveToShow = 'Legal�bb egy oszlopot v�lasztanod kell a megjelen�t�shez';
$strHebrew = 'H�ber';
$strHelp = 'Seg�ts�g';
$strHide         = 'Elrejt�s';
$strHome = 'Kezd&#337;lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin honlap';
$strHostEmpty = 'A hosztn�v �res!';
$strHost = 'Hoszt';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Magyar';

$strIcelandic = 'Izlandi';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIgnoreDuplicates = 'Egyez&#337; sorok figyelmen k�v�l hagy�sa';
$strIgnore = 'Elutas�t';
$strIgnoreInserts = 'Mell&#337;z&#337; besz�r�sok haszn�lata';
$strImportFiles = 'F�jlok importja';
$strImportFormat = 'Import�land� f�jl form�tuma';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Az import sikeresen befejez&#337;d�tt, %d lek�rdez�s v�grehajtva.';
$strIndexes = 'Indexek';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndex = 'Index';
$strIndexName = 'Index n�v:';
$strIndexType = 'Index t�pus:';
$strIndexWarningTable = 'Probl�ma a(z) `%s` t�bla indexeivel';
$strInnoDBDataFilePath = 'Adat f�jlok';
$strInnoDBPages = 'lapok';
$strInnodbStat = 'InnoDB �llapot';
$strInsecureMySQL = 'A konfigur�ci�s f�jl be�ll�t�sa (root hozz�f�r�s jelsz� n�lk�l) az alap�rtelmezett MySQL be�ll�t�s. A MySQL szerver most ezzel fut, ami alkalmat ad a bet�r�sre. S�rg&#337;sen jav�tani kell ezt a biztons�gi r�st.';
$strInsertAsNewRow = 'Besz�r�s �j sork�nt';
$strInsert = 'Besz�r';
$strInsertedRowId = 'A besz�rt rekord id-je:';
$strInsertedRows = 'Besz�rt sorok:';
$strInternalNotNecessary = '* Egy bels&#337; kapcsolat nem sz�ks�ges, ha az l�tezik az InnoDB-ben is.';
$strInternalRelations = 'Bels&#337; kapcsolatok';
$strInUse = 'haszn�latban';
$strInvalidAuthMethod = '�rv�nytelen hiteles�t�si m�d lett be�ll�tva a konfigur�ci�ban:';
$strInvalidColumnCount = 'A mez&#337;k sz�m�nak null�n�l nagyobbnak kell lennie.';
$strInvalidColumn = '�rv�nytelen mez&#337; (%s) lett megadva!';
$strInvalidCSVFieldCount = '�rv�nytelen mez&#337;sz�m a CSV f�jl %d. sor�ban.';
$strInvalidCSVFormat = 'Hib�s form�z�s a CSV %d. sor�ban.';
$strInvalidCSVParameter = '�rv�nytelen CSV import param�ter: %s';
$strInvalidFieldAddCount = 'Legal�bb egy mez&#337;t meg kell adni.';
$strInvalidFieldCount = 'A t�bl�zatnak legal�bb egy mez&#337;t kell tartalmaznia.';
$strInvalidLDIImport = 'Ez a plugin nem t�mogatja a t�m�r�tett bemenetet!';
$strInvalidRowNumber = '%d �rv�nytelen sorsz�m.';
$strInvalidServerHostname = '�rv�nytelen hosztn�v a(z) %1$s szerverhez. Ellen&#337;rizd a be�ll�t�sokat.';
$strInvalidServerIndex = '�rv�nytelen szerver index: "%s"';
$strInvalidTableName = '�rv�nytelen t�blan�v';

$strJapanese = 'Jap�n';
$strJumpToDB = 'Ugr�s a &quot;%s&quot; adatb�zishoz.';
$strJustDeleteDescr = 'A &quot;t�r�lt&quot; felhaszn�l�k m�g hozz�f�rhetnek a szerverhez, am�g a privil�giumok �jrat�lt�se nem t�rt�nik meg.';
$strJustDelete = 'Egyszer&#369;en t�r�lje a felhaszn�l�t a privil�gium-t�bl�kb�l.';

$strKeepPass = 'Ne v�ltoztasd meg a jelsz�t';
$strKeyname = 'Kulcsn�v';
$strKill = 'Le�ll�t';
$strKorean = 'Koreai';

$strLandscape = 'Fekv&#337;';
$strLanguage = 'Nyelv';
$strLanguageUnknown = 'Ismeretlen nyelv: %1$s.';
$strLatchedPages = 'Z�rolt lapok';
$strLatexCaption = 'T�blac�m';
$strLatexContent = 't�bla tartalom __TABLE__';
$strLatexContinuedCaption = 'T�bla c�m folytat�sa';
$strLatexContinued = '(folytat�s)';
$strLatexIncludeCaption = 'T�bla c�me tartalmazza';
$strLatexLabel = 'Felirat kulcs';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'T�blaszerkezet __TABLE__';
$strLatvian = 'Litv�n';
$strLDI = 'CSV (LOAD DATA haszn�lat�val)';
$strLDILocal = 'LOCAL kulcssz� haszn�lata';
$strLengthSet = 'Hossz/�rt�k*';
$strLimitNumRows = 'Sorok sz�ma oldalank�nt';
$strLinesTerminatedBy = 'Sorok v�ge';
$strLinkNotFound = 'Link nem tal�lhat�';
$strLinksTo = 'Linkek:';
$strLithuanian = 'Litv�n';
$strLocalhost = 'Helyi';
$strLocationTextfile = 'A sz�vegf�jl helye';
$strLogin = 'Bel�p�s';
$strLoginInformation = 'Bel�p�si inform�ci�';
$strLogout = 'Kil�p�s';
$strLogPassword = 'Jelsz�:';
$strLogServer = 'Szerver';
$strLogUsername = 'Felhaszn�l�i n�v:';
$strLongOperation = 'A m&#369;velet sok�ig eltarthat. Mindenk�pp folytatod?';

$strMaxConnects = 'Max. egyidej&#369; kapcsolatok sz�ma';
$strMaximalQueryLength = 'Lek�rdez�s maxim�lis hossza';
$strMaximumSize = 'Legnagyobb m�ret: %s%s';
$strMbOverloadWarning = 'Enged�lyezted a mbstring.func_overload funkci�t a PHP konfigur�ci�ban. Ez inkompatibilis a phpMyAdmin-nal �s adatveszt�ssel j�rhat!';
$strMIME_available_mime = 'El�rhet&#337; MIME-t�pusok';
$strMIME_available_transform = 'El�rhet&#337; �talak�t�sok';
$strMIME_description = 'Le�r�s';
$strMIME_MIMEtype = 'MIME-t�pus';
$strMIME_nodescription = 'Ehhez az �talak�t�shoz nem �rhet&#337; el le�r�s. K�rdezze a szerz&#337;t, aki k�sz�tette: %s.';
$strMIME_transformation = 'B�ng�sz&#337; �talak�t�s';
$strMIME_transformation_note = 'Az el�rhet&#337; �talak�t�si be�ll�t�sok list�j�hoz �s a hozz�juk tartoz� MIME-t�pusokhoz kattintson ide: %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Az �talak�t�s be�ll�t�sokhoz �rja be az �rt�keket a kovetkez&#337; form�tumban: \'a\', 100, b,\'c\'... Ha visszapert ("\") vagy id�z&#337;jelet ("\'") akar besz�rni, haszn�ljon visszapert (p�ld�ul: \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = '�talak�t�s be�ll�t�sok';
$strMIMETypesForTable = 'T�bla MIME-t�pusok';
$strMIME_without = 'A d&#337;lttel �rt MIME-t�pusok nem v�lasztj�k el az �talak�t�si funkci�kat';
$strModifications = 'A v�ltoz�sokat elmentettem';
$strModifyIndexTopic = 'Index v�ltoz�sa';
$strModify = 'V�ltoz�s';
$strMoveTableOK = '%s t�bl�t �thelyeztem ide: %s.';
$strMoveTableSameNames = 'Nem tudom a t�bl�t ugyanarra mozgatni!';
$strMoveTable = 'T�bla �thelyez�se ide (adatb�zis<b>.</b>t�bla):';
$strMultilingual = 'soknyelv&#369;';
$strMyISAMDataPointerSize = 'Adat mutat� m�rete';
$strMyISAMMaxExtraSortFileSize = 'Ideiglenes f�jlok maxim�lis m�rete index k�sz�t�sekor';
$strMyISAMMaxSortFileSize = 'Az ideiglenes rendez&#337;f�jlok maxim�lis m�rete';
$strMyISAMRecoverOptions = 'Automatikus helyre�ll�t�si m�d';
$strMyISAMSortBufferSize = 'Rendez&#337; buffer m�rete';
$strMySQLCharset = 'MySQL karakterk�szlet';
$strMysqlClientVersion = 'MySQL kliens verzi�';
$strMySQLConnectionCollation = 'MySQL kapcsolat egyeztet�s';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL fut�si inform�ci�kat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer v�ltoz�kat';

$strName = 'N�v';
$strNext = 'K�vetkez&#337;';
$strNoActivity = 'Nem volt semmi tev�kenys�g %s m�sodperce, jelentkezz be �jra';
$strNoDatabases = 'Nincs adatb�zis';
$strNoDatabasesSelected = 'Nincs adatb�zis kiv�lasztva.';
$strNoDescription = 'nincs le�r�s';
$strNoDetailsForEngine = 'Ehhez a t�rol�motorhoz nem �rhet&#337; el r�szletes �llapot inform�ci�.';
$strNoDropDatabases = '"DROP DATABASE" utas�t�s le van tiltva.';
$strNoExplain = 'SQL magyar�zat �tugr�sa';
$strNoFilesFoundInZip = 'Nincs f�jl a ZIP arch�vumban!';
$strNoFrames = 'A phpMyAdmin haszn�lhat�bb egy <b>frame-kezel&#337;</b> b�ng�sz&#337;ben.';
$strNoIndex = 'Nincs index meghat�rozva!';
$strNoIndexPartsDefined = 'Nincs index darab meghat�rozva!';
$strNoModification = 'Nincs v�ltoz�s';
$strNo = 'Nem';
$strNone = 'Nincs';
$strNoOptions = 'Ennek nincs be�ll�t�si lehet&#337;s�ge';
$strNoPassword = 'Nincs jelsz�';
$strNoPermission = 'A webszervernek nincs joga elmenteni a f�jlt: %s.';
$strNoPhp = 'PHP k�d n�lk�l';
$strNoPrivileges = 'Nincs privil�gium';
$strNoRights = 'Nincs el�g jogod ennek v�grehajt�s�ra!';
$strNoRowsSelected = 'Nincs sor kiv�lasztva';
$strNoSpace = 'Nincs el�g hely elmenteni a f�jlt: %s.';
$strNoTablesFound = 'Nincs t�bla az adatb�zisban.';
$strNoThemeSupport = 'Nincs t�ma t�mogat�s, ellen&#337;rizd a be�ll�t�sokat �s/vagy a t�m�kat a %s k�nyvt�rban.';
$strNotNumber = 'Ez nem egy sz�m!';
$strNotOK = 'Nincs rendben';
$strNotSet = '<b>%s</b> t�bl�t nem tal�ltam vagy nincs benne: %s';
$strNoUsersFound = 'Nem tal�ltam felhaszn�l�(ka)t.';
$strNoValidateSQL = 'SQL j�v�hagy�s �tugr�sa';
$strNull = 'Null';
$strNumberOfFields = 'Mez&#337;k sz�ma';
$strNumberOfTables = 'T�bl�k sz�ma';
$strNumSearchResultsInTable = '%s tal�lat <i>%s</i> t�bl�ban';
$strNumSearchResultsTotal = '<b>�sszes:</b> <i>%s</i> tal�lat';
$strNumTables = 'T�bla';

$strOK = 'Rendben';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = '�j phpMyAdmin ablak nyit�sa';
$strOperations = 'Tev�kenys�gek';
$strOperator = 'Kezel&#337;';
$strOptimizeTable = 'T�bla optimaliz�l�s';
$strOptions = 'Be�ll�t�sok';
$strOr = 'Vagy';
$strOverhead = 'Fel�l�r�s';
$strOverwriteExisting = 'L�tez&#337; f�jlok fel�l�r�sa';

$strPageNumber = 'Oldalsz�m:';
$strPagesToBeFlushed = 'Ki�rand� oldalak';
$strPaperSize = 'Pap�rm�ret';
$strPartialImport = 'R�szleges import�l�s';
$strPartialText = 'R�szleges Sz�vegek';
$strPasswordChanged = '%s jelszav�t sikeresen megv�ltoztattam.';
$strPasswordEmpty = 'A jelsz� mez&#337; �res!';
$strPassword = 'Jelsz�';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPdfDbSchema = '"%s" adatb�zis s�m�ja - %s oldal';
$strPdfInvalidTblName = '"%s" t�bla nem l�tezik!';
$strPdfNoTables = 'Nincs t�bla';
$strPDF = 'PDF';
$strPDFReportTitle = 'Jelent�s c�me';
$strPerHour = '�r�nk�nt';
$strPerMinute = 'percenk�nt';
$strPerSecond = 'm�sodpercenk�nt';
$strPersian = 'Perzsa';
$strPhoneBook = 'telefonk�nyv';
$strPHP40203 = 'A PHP 4.2.3-as verzi�ja fut, ami egy s�lyos hib�t tartalmaz a t�bb-b�jtos sztringek kezel�s�n�l (mbstring). N�zze meg a k�vetkez&#337;t: PHP bug report 19404. A PHP ezen verz�ja nem aj�nlott a phpMyAdminhoz.';
$strPhp = 'PHP k�d k�sz�t�se';
$strPHPVersion = 'PHP Verzi�';
$strPmaDocumentation = 'phpMyAdmin dokument�ci�';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> �rt�k�t a konfigur�ci�s f�jlban KELL be�ll�tani!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Lengyel';
$strPortrait = '�ll�';
$strPos1 = 'Kezdet';
$strPrevious = 'El&#337;z&#337;';
$strPrimary = 'Els&#337;dleges';
$strPrimaryKeyHasBeenDropped = 'Az els&#337;dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#337;dleges kulcs nev�nek "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, �s <b>csak annak</b> szabad lennie az els&#337;dleges kulcsnak!)';
$strPrint = 'Nyomtat�s';
$strPrintViewFull = 'Nyomtat�si n�zet (�sszes sz�veggel)';
$strPrintView = 'Nyomtat�si n�zet';
$strPrivDescAllPrivileges = 'Minden privil�giumot tartalmaz, kiv�ve a GRANT.';
$strPrivDescAlter = 'Enged�lyezi a l�tez&#337; t�bl�k szerkezet�nek megv�ltoztat�s�t.';
$strPrivDescAlterRoutine = 'Enged�lyezi t�rolt elj�r�sok m�dos�t�s�t �s eldob�s�t.';
$strPrivDescCreateDb = 'Enged�lyezi �j adatb�zisok �s t�bl�k k�sz�t�s�t.';
$strPrivDescCreateRoutine = 'Enged�lyezi t�rolt elj�r�sok l�trehoz�s�t.';
$strPrivDescCreateTbl = 'Enged�lyezi �j t�bl�k k�sz�t�s�t.';
$strPrivDescCreateTmpTable = 'Enged�lyezi �tmeneti t�bl�k k�sz�t�s�t.';
$strPrivDescCreateUser = 'Enged�lyezi felhaszn�l�i fi�kok l�trehoz�s�t, t�rl�s�t �s �tnevez�s�t.';
$strPrivDescCreateView = '�j n�zetek l�trehoz�s�nak enged�lyez�se.';
$strPrivDescDelete = 'Enged�lyezi az adatok t�rl�s�t.';
$strPrivDescDropDb = 'Enged�lyezi adatb�zisok �s t�bl�k t�rl�s�t.';
$strPrivDescDropTbl = 'Enged�lyezi t�bl�k t�rl�s�t.';
$strPrivDescExecute5 = 'Enged�lyezi t�rolt elj�r�sok v�grehajt�s�t.';
$strPrivDescExecute = 'Enged�lyezi t�rolt elj�r�sok futtat�s�t; m�g nem val�sult meg ebben a MySQL verzi�ban.';
$strPrivDescFile = 'Enged�lyezi adatok export/importj�t f�jlokba.';
$strPrivDescGrant = 'Enged�lyezi felhaszn�l�k �s privil�giumok hozz�ad�s�t a privil�giumi t�bl�k �jrat�lt�se n�lk�l.';
$strPrivDescIndex = 'Enged�lyezi indexek k�sz�t�s�t �s t�rl�s�t.';
$strPrivDescInsert = 'Enged�lyezi adatok be�r�s�t �s megv�ltoztat�s�t.';
$strPrivDescLockTables = 'Enged�lyezi t�bl�k blokkol�s�t erre a sz�lra.';
$strPrivDescMaxConnections = 'Korl�tozza az �j kapcsolatok sz�m�t, amit a felhaszn�l� �r�nk�nt megnyithat.';
$strPrivDescMaxQuestions = 'Korl�tozza a felhaszn�l�i lek�r�sek sz�m�t �r�nk�nt.';
$strPrivDescMaxUpdates = 'Korl�tozza azon utas�t�sok sz�m�t �r�nk�nt, amelyek megv�ltoztatnak egy t�bl�t vagy adatb�zist.';
$strPrivDescMaxUserConnections = 'Korl�tozza a felhaszn�l� egyidej&#369; kapcsolatainak sz�m�t.';
$strPrivDescProcess3 = 'Enged�lyezi m�s felhaszn�l�k folyamatainak megsz�ntet�s�t.';
$strPrivDescProcess4 = 'Enged�lyezi a teljes lek�r�sek megtekint�s�t a folyamatlist�ban.';
$strPrivDescReferences = 'Nem val�sult meg ebben a MySQL verzi�ban';
$strPrivDescReload = 'Enged�lyezi a szerver be�ll�t�sok �jrat�lt�s�t �s a szerver-cache t�rl�s�t.';
$strPrivDescReplClient = 'Jogokat ad a felhaszn�l�nak, hogy lek�rdezhess�k a slave/master helyeket.';
$strPrivDescReplSlave = 'Sz�ks�ges a slave-ek m�sol�s�hoz.';
$strPrivDescSelect = 'Enged�lyezi adatok olvas�s�t.';
$strPrivDescShowDb = 'Hozz�f�r�st ad az adatb�zisok teljes list�j�hoz.';
$strPrivDescShowView = 'Enged�lyezi SHOW CREATE VIEW lek�rdez�sek v�grehajt�s�t.';
$strPrivDescShutdown = 'Enged�lyezi a szerver le�ll�t�s�t.';
$strPrivDescSuper = 'Enged�lyezi a kapcsol�d�st akkor is, ha a kapcsolatok sz�ma a maximumot el�rte. Ez sz�ks�ges a legfontosabb adminisztr�ci�s m&#369;veletekhez, mint a glob�lis v�ltoz�k be�ll�t�sa vagy m�s felhaszn�l�k folyamatainak megsz�ntet�se.';
$strPrivDescUpdate = 'Enged�lyezi az adatok megv�ltoztat�s�t.';
$strPrivDescUsage = 'Nincsenek privil�giumok.';
$strPrivileges = 'Privil�giumok';
$strPrivilegesReloaded = 'A privil�giumok �jrat�lt�se sikeres volt.';
$strProcesses = 'Folyamatok';
$strProcesslist = 'Folyamatlista';
$strProtocolVersion = 'Protokoll verzi�';
$strPutColNames = 'Tegye a mez&#337;neveket az els&#337; sorhoz';

$strQBEDel = 'T�r�l';
$strQBEIns = 'Besz�r';
$strQBE = 'Lek�rdez�s';
$strQueryCache = 'Lek�rdez�s cache';
$strQueryFrame = 'Lek�r�si ablak';
$strQueryOnDb = 'SQL-k�r�s <b>%s</b> adatb�zison:';
$strQuerySQLHistory = 'SQL-el&#337;zm�nyek';
$strQueryStatistics = '<b>Lek�r�si statisztika</b>: Az indul�s �ta %s k�r�s ment el a szerverhez.';
$strQueryTime = 'A lek�r�s lefutott %01.4f m�sodperc alatt';
$strQueryType = 'Lek�r�s t�pusa';
$strQueryWindowLock = 'Ne �rja fel�l a lek�r�st az ablakon k�v�lr&#337;l';

$strReadRequests = 'Olvas�si k�relmek';
$strReceived = 'Fogadott';
$strRecommended = 'aj�nlott';
$strRecords = 'Sor';
$strReferentialIntegrity = 'Hivatkoz�si s�rtetlens�g ellen&#337;rz�se:';
$strRefresh = 'Friss�t�s';
$strRelationalSchema = 'Kapcsolati s�ma';
$strRelationNotWorking = 'A munka kieg�sz�t&#337; tulajdons�gai a vonatkoz� t�bl�kra meg lettek sz�ntetve. Az okok�rt kattints %side%s.';
$strRelationsForTable = 'T�bla-kapcsolatok';
$strRelations = 'Kapcsolatok';
$strRelationView = 'Rel�ci� n�zet';
$strReloadingThePrivileges = 'Privil�giumok �jrat�lt�se';
$strReload = '�jrat�lt�s';
$strReloadPrivileges = 'Privil�giumok �jrat�lt�se';
$strRemoveSelectedUsers = 'A kiv�lasztott felhaszn�l�k t�rl�se';
$strRenameDatabaseOK = '%s adatb�zis �tneveztem erre: %s';
$strRenameTableOK = '%s t�bl�t �tneveztem erre: %s';
$strRenameTable = 'T�bla �tnevez�se erre';
$strRepairTable = 'T�bla jav�t�s';
$strReplaceNULLBy = 'NULL cser�je ezzel:';
$strReplaceTable = 'T�bla adatok �s f�jl cser�je';
$strReset = 'T�r�l';
$strResourceLimits = 'Er&#337;forr�s hat�rok';
$strRestartInsertion = 'Besz�r�s �jrakezd�se %s sorral';
$strReType = '�jra�r�s';
$strRevokeAndDelete = 'A felhaszn�l�k �sszes privil�gium�nak visszavon�sa, azt�n t�rl�s�k.';
$strRevokeAndDeleteDescr = 'A felhaszn�l�knak m�g haszn�lhat� privil�giumuk van, am�g nem t�rt�nik meg a privil�giumok �jrat�lt�se.';
$strRevokeMessage = 'Visszavontam a %s privil�giumokat';
$strRevoke = 'Visszavon';
$strRomanian = 'Rom�n';
$strRowLength = 'Sorhossz';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowSize = ' Sorm�ret ';
$strRowsModeFlippedHorizontal = 'v�zszintes (elforgatott fejl�c)';
$strRowsModeHorizontal = 'v�zszintes';
$strRowsModeOptions = '%s m�don, a fejl�cet %s soronk�nt megism�telve';
$strRowsModeVertical = 'f�gg&#337;leges';
$strRows = 'Sorok';
$strRowsStatistic = 'Sor-statisztika';
$strRunning = ': %s';
$strRunQuery = 'K�r�s v�grehajt�sa';
$strRunSQLQueryOnServer = 'SQL lek�rdez�s(ek) futtat�sa %s szerveren';
$strRunSQLQuery = 'SQL parancs(ok) futtat�sa a(z) %s adatb�zison';
$strRussian = 'Orosz';

$strSave = 'Ment';
$strSaveOnServer = 'Ment�s a szerver %s k�nyvt�r�ba';
$strSavePosition = 'Poz�ci� ment�se';
$strScaleFactorSmall = 'A m�ret elem t�l kicsi, hogy megfelel&#337; legyen a s�m�hoz egy oldalon';
$strSearchFormTitle = 'Keres�s az adatb�zisban';
$strSearchInTables = 'T�bl�(k)ban:';
$strSearch = 'Keres�s';
$strSearchNeedle = 'Szavak vagy �rt�kek a keres�shez (helyettes�t&#337; karakter: "%"):';
$strSearchOption1 = 'legal�bb egy sz�';
$strSearchOption2 = '�sszes sz�';
$strSearchOption3 = 'a helyes mondat';
$strSearchOption4 = 'regul�ris kifejez�sk�nt';
$strSearchResultsFor = 'Keres�si eredm�nyek "<i>%s</i>" %s:';
$strSearchType = 'Keress:';
$strSecretRequired = 'A konfigur�ci�s f�jl egy titkos jelsz� kifejez�st v�r (blowfish_secret).';
$strSelectADb = 'V�lassz egy adatb�zist';
$strSelectAll = 'Mindet kijel�li';
$strSelectFields = 'Mez&#337;k kiv�laszt�sa (legal�bb egyet):';
$strSelectForeignKey = 'Idegen kulcs kiv�laszt�sa';
$strSelectNumRows = 'k�r�sben';
$strSelectTables = 'T�bl�k kiv�laszt�sa';
$strSend = 'F�jln�v megad�sa';
$strSent = 'K�ld�tt';
$strServerChoice = 'Szerver V�laszt�s';
$strServerNotResponding = 'A szerver nem v�laszol';
$strServers = 'Szerverek';
$strServerStatusDelayedInserts = 'K�sleltetett besz�r�sok';
$strServerStatus = 'Fut�si inform�ci�k';
$strServerStatusUptime = 'Ez a MySQL szerver fut: %s. Elind�tva: %s.';
$strServer = 'Szerver';
$strServerTabVariables = 'V�ltoz�k';
$strServerTrafficNotes = '<b>Szerver forgalom</b>: Ezek a t�bl�k mutatj�k a MySQL szerver h�l�zati forgalom-statisztik�it az indul�st�l kezdve.';
$strServerVars = 'Szerver v�ltoz�k �s be�ll�t�sok';
$strServerVersion = 'Szerver verzi�';
$strSessionValue = 'Session �rt�k';
$strSetEnumVal = 'Ha a mez&#337; t�pusa "enum" vagy "set", akkor az �rt�keket ilyen form�ban �rd be: \'a\',\'b\',\'c\'... Ha backslash-t ("\") vagy aposztr�fot ("\'") akarsz ezen �rt�kek k�z�tt haszn�lni, haszn�ld a backslash escape karaktert (pl.: \'\\\\xyz\' vagy \'a\\\'b\').';
$strShowAll = 'Mutasd mindet';
$strShowColor = 'Mutasd a sz�neket';
$strShowDatadictAs = 'Adatk�nyvt�r form�tum';
$strShowFullQueries = 'Teljes lek�r�sek mutat�sa';
$strShowGrid = 'Mutasd a r�csot';
$strShowHideLeftMenu = 'Baloldali men� mutat�sa/rejt�se';
$strShowingBookmark = 'K�nyvjelz&#337; megmutat�sa';
$strShowingPhp = 'Mutat�s PHP k�dk�nt';
$strShowingRecords = 'Sorok megjelen�t�se ';
$strShowingSQL = 'Mutat�s SQL lek�rdez�sk�nt';
$strShow = 'Mutat';
$strShowOpenTables = 'Nyitott t�bl�k mutat�sa';
$strShowPHPInfo = 'PHP inform�ci�';
$strShowStatusCreated_tmp_filesDescr = 'mysqld �ltal l�trehozott ideiglenes f�jlok sz�ma.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED sor �r�sok sz�ma.';
$strShowStatusHandler_updateDescr = 'Sor friss�t�si k�r�sek sz�ma.';
$strShowStatusHandler_writeDescr = 'Sor besz�r�si k�r�sek sz�ma.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Adatokat tartalmaz� lapok sz�ma (piszkos vagy tiszta).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Jelenleg piszkos lapok sz�ma.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Szabad lapok sz�ma.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puffer teljes m�rete lapokban.';
$strShowStatusInnodb_data_fsyncsDescr = '�sszes fsync() m&#369;velet sz�ma.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Folyamatban l�v&#337; fsync() m&#369;veletek sz�ma.';
$strShowStatusInnodb_data_pending_readsDescr = 'Folyamatban l�v&#337; olvas�sok sz�ma.';
$strShowStatusInnodb_data_pending_writesDescr = 'Folyamatban l�v&#337; �r�sok sz�ma.';
$strShowStatusInnodb_data_readDescr = '�sszes olvasott adat, b�jtban.';
$strShowStatusInnodb_data_readsDescr = '�sszes olvasott adat.';
$strShowStatusInnodb_data_writesDescr = '�sszes �rott adat.';
$strShowStatusInnodb_data_writtenDescr = '�sszes �rott adat, b�jtban.';
$strShowStatusInnodb_log_waitsDescr = 'V�rakoz�sok sz�ma, amiket a napl�puffer kis m�rete okozott �s folytat�s el&#337;tt meg kellett v�rni a ki�r�st.';
$strShowStatusInnodb_log_write_requestsDescr = 'Napl� �r�si k�r�sek sz�ma.';
$strShowStatusInnodb_log_writesDescr = 'Napl�f�jlba t�rt�nt fizikai �r�sok sz�ma.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Folyamatban l�v&#337; napl�f�jl fsync-ek sz�ma.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Folyamatban l�v&#337; napl�f�jl �r�sok sz�ma.';
$strShowStatusInnodb_os_log_writtenDescr = 'Napl�f�jlba �rt b�jtok sz�ma.';
$strShowStatusInnodb_pages_createdDescr = 'L�trehozott lapok sz�ma.';
$strShowStatusInnodb_pages_readDescr = 'Olvasott lapok sz�ma.';
$strShowStatusInnodb_pages_writtenDescr = '�rott lapok sz�ma.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB t�bl�kb�l t�r�lt sorok sz�ma.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB t�bl�kba besz�rt sorok sz�ma.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB t�bl�kb�l olvasott sorok sz�ma.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB t�bl�kban friss�tett sorok sz�ma.';
$strShowStatusNot_flushed_delayed_rowsDescr = '�r�sra v�rakoz� sorok az INSERT DELAYED sorokban.';
$strShowStatusOpen_filesDescr = 'Megnyitott f�jlok sz�ma.';
$strShowStatusOpen_tablesDescr = 'Megnyitott t�bl�k sz�ma.';
$strShowStatusQcache_free_blocksDescr = 'Szabad mem�riablokkok a lek�rdez�s cache-ben.';
$strShowStatusQcache_hitsDescr = 'Cache tal�latok sz�ma.';
$strShowStatusQcache_insertsDescr = 'Cache-hez adott lek�rdez�sek sz�ma.';
$strShowStatusReset = 'Vissza�ll�t�s';
$strShowStatusSort_rowsDescr = 'Rendezett sorok sz�ma.';
$strShowStatusThreads_connectedDescr = 'Pillanatnyilag megnyitott kapcsolatok sz�ma.';
$strShowStatusThreads_runningDescr = 'Nem alv� sz�lak sz�ma.';
$strShowTableDimension = 'Mutasd a t�bl�k m�ret�t';
$strShowTables = 'Mutasd a t�bl�kat';
$strShowThisQuery = ' Mutasd a parancsot itt �jra ';
$strSimplifiedChinese = 'Egyszer&#369;s�tett k�nai';
$strSingly = '(egyenk�nt)';
$strSize = 'M�ret';
$strSlovak = 'Szlov�k';
$strSlovenian = 'Szlov�n';
$strSocketProblem = '(vagy a helyi MySQL szerver socketje nincs rendesen be�ll�tva)';
$strSortByKey = 'Kulcs szerinti rendez�s';
$strSorting = 'Rendez�s';
$strSort = 'Sorrendez�s';
$strSpaceUsage = 'Helyfoglal�s';
$strSpanish = 'Spanyol';
$strSplitWordsWithSpace = 'A szavak fel vannak osztva sz�k�z karakter szerint (" ").';
$strSQLCompatibility = 'SQL kompatibilit�si m�d';
$strSQLExportType = 'Export t�pus';
$strSQLParserBugMessage = 'Es�ly van r�, hogy egy hib�t tal�lhatt�l az SQL szintaktikai elemz&#337;ben (parser). Vizsg�ld meg gondosan a lek�rdez�sedet, ellen&#337;rizd, hogy az id�z&#337;jelek j�k �s j�l illeszkednek. M�s lehets�ges hiba oka lehet, hogy bin�risan t�lt�tt�l fel egy f�jlt az id�zett sz�vegmez&#337;n k�v�l. Kipr�b�lhatod a lek�r�sedet a MySQL parancssoros fel�let�n.  A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t. Ha m�g mindig gondjaid vannak, vagy a szintaktiaki elemz&#337; (parser) hib�t jelez, ahol a parancssoros fel�leten v�grehajt�dik, reduk�ld a probl�m�t okoz� SQL lek�rdez�st egy egyszer&#369; lek�rdez�ss�, �s k�ldd el egy hibajelz�sben (bug report) az als� Kiv�g�s r�szben lev&#337; adatokkal egy�tt:';
$strSQLParserUserError = '�gy l�tszik az SQL lek�rdez�sedben van egy hiba. A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t';
$strSQLQuery = 'SQL-k�r�s';
$strSQLResult = 'SQL eredm�ny';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '�rv�nytelen azonos�t�';
$strSQPBugUnclosedQuote = 'Lez�ratlan lek�rdez�s';
$strSQPBugUnknownPunctuation = 'Ismeretlen k�zpontozott sztring';
$strStatCheckTime = 'Utols� ellen&#337;rz�s';
$strStatCreateTime = 'L�trehoz�s';
$strStatement = 'Adatok';
$strStatUpdateTime = 'Utols� m�dos�t�s';
$strStatus = '�llapot';
$strStorageEngines = 'T�rol�motorok';
$strStorageEngine = 'T�rol�motor';
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet �s adatok';
$strStrucExcelCSV = 'MS Excel CSV adat';
$strStrucNativeExcel = 'Nat�v MS Excel adat';
$strStrucOnly = 'Csak szerkezet';
$strStructPropose = 'T�bla strukt�ra aj�nlat';
$strStructure = 'Strukt�ra';
$strSubmit = 'V�grehajt';
$strSuccess = 'Az SQL-k�r�st sikeresen v�grehajtottam';
$strSum = '�sszesen';
$strSwedish = 'Sv�d';
$strSwitchToDatabase = 'V�lt�s a m�solt adatb�zisra';
$strSwitchToTable = 'V�lt�s a m�solt t�bl�ra';

$strTableAlreadyExists = '%s t�bla m�r l�tezik!';
$strTableComments = 'T�bla megjegyz�sek';
$strTableEmpty = 'A t�blan�v helye �res!';
$strTableHasBeenDropped = '%s t�bl�t eldobtam';
$strTableHasBeenEmptied = '%s t�bl�t ki�r�tettem';
$strTableHasBeenFlushed = '%s t�bl�t ki�rtam';
$strTableMaintenance = 'T�bla karbantart�s';
$strTableName = 'T�bla neve';
$strTableOfContents = 'Tartalomjegyz�k';
$strTableOptions = 'T�bla opci�k';
$strTables = '%s t�bla';
$strTableStructure = 'T�bla szerkezet:';
$strTable = 'T�bla';
$strTakeIt = 'csin�ld';
$strTblPrivileges = 'T�bla-specifikus privil�giumok';
$strTempData = 'Ideiglenes adatok';
$strTextAreaLength = 'Mivel ez a hossz, ez a mez&#337; nem szerkeszthet&#337; ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'A(z) %s alap�rtelmezett t�ma nem tal�lhat�!';
$strThemeNoPreviewAvailable = 'Nincs el&#337;n�zet.';
$strThemeNotFound = 'A(z) %s t�ma nem tal�lhat�!';
$strThemeNoValidImgPath = 'Nem tal�lhat� k�p �tvonal a(z) %s t�m�hoz!';
$strThemePathNotFound = 'Nem tal�lhat� t�ma �tvonal a(z) %s t�m�hoz!';
$strTheme = 'T�ma / St�lus';
$strThisHost = 'Ez a g�p';
$strThreads = 'Sz�lak';
$strThreadSuccessfullyKilled = 'A %s. sz�lat siker�lt megsz�ntetni.';
$strTime = 'Id&#337;';
$strTimeoutInfo = 'Az el&#337;z&#337; importn�l id&#337;t�ll�p�s k�vetkezett be, �jrak�ld�s ut�n a %d poz�ci�t�l folytat�dik.';
$strTimeoutPassed = 'Script id&#337;t�ll�p�s t�rt�nt, ha be akarod fejezni az importot, k�ldd �jra ugyanazt a f�jlt �s az import folytat�dni fog.';
$strToggleScratchboard = 'scratchboard kapcsol�sa';
$strTotal = '�sszesen';
$strTotalUC = '�sszes';
$strTraditionalChinese = 'Hagyom�nyos k�nai';
$strTraditionalSpanish = 'Hagyom�nyos spanyol';
$strTraffic = 'Forgalom';
$strTransformation_application_octetstream__download = 'Egy linket jelen�t meg a mez&#337; bin�ri ada�nak let�lt�s�hez. Els&#337; opci� a bin�ris f�jl neve. M�sodik a t�bla sor�nak egy lehets�ges mez&#337;neve f�jln�v gyan�nt. Ha be�ll�tja a m�sodik opci�t, akkor az els&#337;t �resen kell hagyni';
$strTransformation_image_jpeg__inline = 'Kattinthat� ikon mutat�sa; be�ll�t�sok: sz�less�g,magass�g pixelben (megtartja az eredeti k�par�nyt)';
$strTransformation_image_jpeg__link = 'Egy linket mutat a k�phez (k�zvetlen ablakos let�lt�s).';
$strTransformation_image_png__inline = 'image/jpeg megtekint�se: bent';
$strTransformation_text_plain__external = 'Csak LINUX: Elind�t egy k�ls&#337; programot, ami megkapja az adatokat a standard inputon. Visszat�r a program standard outputj�n. Alap�rtelmezett a Tidy, csinos HTML k�dot kap. Biztons�gi megfontol�sokb�l k�zzel kell szerkeszteni a libraries/transformations/text_plain__external.inc.php f�jlt, �s be�rni a program nev�t, amit futtatni akar. Az els&#337; opci� a program sz�ma, amit futtatni akar, a m�sodik a program param�terei. A harmadik opci� ha egyenl&#337; eggyel, akkor a kimenet konvert�lva lesz a htmlspecialchars() elj�r�ssal (alap�rtelmezett 1). A negyedik opci� ha egyre van be�ll�tva, egy NOWRAP form�z�st ad minden mez&#337;h�z, �gy a kimenet �jrat�rdel�s n�lk�l l�tszik (alap�rtelmezett 1)';
$strTransformation_text_plain__formatted = 'A mez&#337; eredeti form�z�s�nak meg&#337;rz�se. Nincs kiv�tel.';
$strTransformation_text_plain__imagelink = 'Egy k�pet es egy linket jelen�t meg, a mez&#337; tartalmazza a f�jlnevet; az els&#337; opc�� egy el&#337;tag, mint pl.: "http://domain.com/", a m�sodik a sz�less�g pixelben, a harmadik pedig a magass�g.';
$strTransformation_text_plain__link = 'Meg linket jelen�t meg, a megz&#337; tartalmazza a f�jlnevet; az els&#337; opc�� egy el&#337;tag, mint pl.: "http://domain.com/", a m�sodik a link neve.';
$strTransformation_text_plain__substr = 'A sz�veg egy r�sz�t mutatja. Els&#337; opci� egy offszet, ami a kezd&#337;poz�ci�t �ll�tja be (alap�rtelmezett: 0). A m�sodik azt adja meg, hogy mennyi sz�veg j�jj�n vissza. Ha �res, az �sszes visszamarad� sz�veg �tj�n. A harmadik opci�ban atokat a karaktereket lehet be�ll�tani, amik a sz�veg v�g�re ker�lnek, ha sz�vegr�szt kapunk vissza (alap�rtelmezett: ...) .';
$strTriggers = 'Triggerek';
$strTruncateQueries = 'A mutatott k�r�sek t�rl�se';
$strTurkish = 'T�r�k';
$strType = 'T�pus';

$strUkrainian = 'Ukr�n';
$strUncheckAll = '�sszeset t�rli';
$strUnicode = 'Unicode';
$strUnique = 'Egyedi';
$strUnknown = 'ismeretlen';
$strUnselectAll = 'Mindet t�rli';
$strUpdatePrivMessage = 'Friss�tettem a(z) %s privil�giumokat.';
$strUpdateProfileMessage = 'A profilt friss�tettem.';
$strUpdateQuery = 'K�r�s friss�t�se';
$strUpdComTab = 'Olvassa el a Dokument�ci�t, hogyan tudja m�dos�tani a Column_comments t�bl�t';
$strUpgrade = 'M�dos�t�s sz�ks�ges %s %s vagy k�s&#337;bb.';
$strUploadErrorCantWrite = 'Nem siker�lt a f�jlt lemezre �rni.';
$strUsage = 'M�ret';
$strUseBackquotes = 'Id�z&#337;jelek haszn�lata a t�bla- �s mez&#337;nevekn�l';
$strUsedPhpExtensions = 'Haszn�lt PHP kiterjeszt�sek';
$strUseHostTable = 'Hoszt-t�bla haszn�lata';
$strUserAlreadyExists = '%s felhaszn�l� m�r l�tezik!';
$strUserEmpty = 'A felhaszn�l�i n�v mez&#337;je �res!';
$strUser = 'Felhaszn�l�';
$strUserName = 'Felhaszn�l�i n�v';
$strUserNotFound = 'A kiv�lasztott felhaszn�l�t nem tal�ltam a privil�gium t�bl�ban.';
$strUserOverview = 'Felhaszn�l� �ttekint�s';
$strUsersDeleted = 'A kiv�lasztott felhaszn�l�k t�rl�se siker�lt.';
$strUsersHavingAccessToDb = 'A felhaszn�l�knak hozz�f�r�s�k van ehhez: &quot;%s&quot;';
$strUseTabKey = 'Haszn�ld a TAB billenty&#369;t, hogy �rt�kr&#337;l �rt�kre mozoghass, vagy CTRL+nyilakat, hogy b�rmerre mozoghass.';
$strUseTables = 'T�bl�k haszn�lata';
$strUseTextField = 'Sz�veges mez&#337; haszn�lata';
$strUseThisValue = 'Ezen �rt�k haszn�lata';

$strValidateSQL = 'SQL j�v�hagy�s';
$strValidatorError = 'Az SQL ellen&#337;rz&#337;t (SQL validator) nem siker�lt elind�tani. Ellen&#337;rizze a sz�ks�ges php kiterjeszt�st, ahogy itt le van �rva: %sdocumentation%.';
$strValue = '�rt�k';
$strVar = 'V�ltoz�';
$strVersionInformation = 'Verzi� inform�ci�k';
$strViewDumpDatabases = 'Adatb�zis ki�r�s (s�ma) megtekint�se';
$strViewDumpDB = 'Adatb�zis ki�r�s (v�zlat) megn�z�se';
$strViewDump = 'T�bla ki�r�s (v�zlat) megn�z�se';
$strViewHasBeenDropped = '%s n�zet eldobva';
$strViewMaxExactCount = 'Ez a n�zet t�bb, mint %s sort tartalmaz. N�zz ut�na a %sdokument�ci�ban%s.';
$strViewName = 'N�zet neve';
$strView = 'N�zet';

$strWebServerUploadDirectoryError = 'Az alk�nyvt�r, ami a felt�lt�sekhez be lett �ll�tva, nem el�rhet&#337;';
$strWebServerUploadDirectory = 'webszerver felt�lt�si k�nyvt�r';
$strWelcome = '�dv�z�l a %s';
$strWestEuropean = 'Nyugat-eur�pai';
$strWildcard = 'helyettes�t&#337; jel';
$strWindowNotFound = 'A c�l b�ng�sz&#337;ablakot nem tudtam �jrat�lteni. Tal�n a sz�l&#337;ablak be lett z�rva, vagy a b�ng�sz&#337; biztons�gi be�ll�t�sa tiltja az ablakok k�zti �jrat�lt�st';
$strWithChecked = 'A kijel�ltekkel v�gzend&#337; m&#369;velet:';
$strWriteRequests = '�r�si k�relmek';
$strWrongUser = 'Hib�s felhaszn�l�n�v/jelsz�. Hozz�f�r�s megtagadva.';

$strXML = 'XML';

$strYes = 'Igen';

$strZeroRemovesTheLimit = 'Megjegyz�s: A 0 (nulla) be�ll�t�sa t�rli a limitet.';
$strZip = '"zippel t�m�r�tve"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';//to translate
$strAngularLinks = 'Angular links';//to translate

$strBufferReadMissesInPercent = 'Read misses in %';//to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';//to translate
$strBusyPages = 'Busy pages';//to translate

$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';//to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';//to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';//to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';//to translate
$strCreateRelation = 'Create relation';//to translate
$strCreateUserDatabase = 'Database for user';//to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';//to translate
$strCreateUserDatabaseNone = 'None';//to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';//to translate

$strDbIsEmpty = 'Database seems to be empty!';//to translate
$strDeleteRelation = 'Delete relation';//to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';//to translate
$strDirectLinks = 'Direct links';//to translate

$strErrorRelationAdded = 'Error: Relation not added.';//to translate
$strErrorRelationExists = 'Error: relation already exists.';//to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';//to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';//to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';//to translate
$strExportImportToScale = 'Export/Import to scale';//to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';//to translate

$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';//to translate
$strFunctions = 'Functions';//to translate

$strHandler = 'Handler';//to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';//to translate
$strHideShowAll = 'Hide/Show all';//to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';//to translate

$strIEUnsupported = 'Internet Explorer does not support this function.';//to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';//to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';//to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';//to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';//to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';//to translate
$strInnoDBDataHomeDir = 'Data home directory';//to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';//to translate
$strInnoDBRelationAdded = 'InnoDB relation added';//to translate
$strInternalRelationAdded = 'Internal relation added';//to translate
$strInvalidDatabase = 'Invalid database';//to translate

$strJoins = 'Joins';//to translate

$strKeyCache = 'Key cache';//to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';//to translate

$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';//to translate
$strMoveMenu = 'Move Menu';//to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';//to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';//to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';//to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';//to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';//to translate
$strMyISAMRepairThreads = 'Repair threads';//to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';//to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';//to translate

$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';//to translate

$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';//to translate

$strPasswordHashing = 'Password Hashing';//to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';//to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';//to translate
$strProcedures = 'Procedures';//to translate
$strProfiling = 'Profiling';//to translate

$strQueryResultsOperations = 'Query results operations';//to translate

$strRelationDeleted = 'Relation deleted';//to translate
$strReplication = 'Replication';//to translate
$strRoutineReturnType = 'Return type';//to translate
$strRoutines = 'Routines';//to translate

$strSelectBinaryLog = 'V�laszd ki a megtekintend&#337; bin�ris napl�t';//to translate
$strSelectReferencedKey = 'Select referenced key';//to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';//to translate
$strShowSlaveHosts = 'Show slave hosts';//to translate
$strShowSlaveStatus = 'Show slave status';//to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';//to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';//to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';//to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';//to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';//to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';//to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';//to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';//to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';//to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';//to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';//to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';//to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';//to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';//to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';//to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';//to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';//to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';//to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';//to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';//to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';//to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';//to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';//to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';//to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';//to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';//to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';//to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';//to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';//to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';//to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';//to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';//to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';//to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';//to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';//to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';//to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';//to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';//to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';//to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';//to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';//to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';//to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';//to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';//to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';//to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';//to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';//to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';//to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';//to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';//to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';//to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';//to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';//to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';//to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';//to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';//to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';//to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';//to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';//to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';//to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';//to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';//to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';//to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';//to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';//to translate
$strSkipQueries = 'Number of records(queries) to skip from start';//to translate
$strSmallBigAll = 'Small/Big All';//to translate
$strSnapToGrid = 'Snap to grid';//to translate
$strStandInStructureForView = 'Stand-in structure for view';//to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';//to translate
$strStructureForView = 'Structure for view';//to translate

$strTableIsEmpty = 'Table seems to be empty!';//to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';//to translate
$strToFromPage = 'to/from page';//to translate
$strToggleSmallBig = 'Toggle small/big';//to translate
$strToSelectRelation = 'To select relation, click :';//to translate
$strTransactionCoordinator = 'Transaction coordinator';//to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';//to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';//to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';//to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';//to translate
$strUploadErrorExtension = 'File upload stopped by extension.';//to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';//to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';//to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';//to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';//to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';//to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';//to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';//to translate

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
