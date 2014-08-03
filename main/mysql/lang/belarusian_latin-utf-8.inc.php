<?php
/* $Id: belarusian_latin-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
* Translated by:
* Jaska Zedlik <jz53 at zedlik.com>
* http://www.zedlik.com
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'HiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Ndz', 'Pan', 'Aŭt', 'Sier', 'Cač', 'Piat', 'Sub');
$month = array('Stu', 'Lut', 'Sak', 'Kra', 'Tra', 'Čer', 'Lip', 'Žni', 'Vier', 'Kas', 'Lis', 'Śn');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dzion, %s hadzinaŭ, %s chvilinaŭ i %s sekundaŭ';

$strAbortedClients = 'Spyniena';
$strAccessDeniedCreateConfig = 'Imavierna, pryčyna hetaha ŭ tym, što nia stvorany kanfihuracyjny fajł. Kab jaho stvaryć, možna vykarystać %1$snaładačny skrypt%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin pasprabavaŭ padłučycca da servera MySQL, ale server adchiliŭ złučeńnie. Praviercie imia chostu, karystalnika i parol u config.inc.php i ŭpeŭniciesia, što jany adpaviadajuć infarmacyi, jakuju daŭ administratar MySQL-servera.';
$strAccessDenied = 'U dostupie admoŭlena';
$strAction = 'Dziejańnie';
$strAddAutoIncrement = 'Dadać značeńnie AUTO_INCREMENT';
$strAddClause = 'Dadać %s';
$strAddConstraints = 'Dadać abmiežavańni';
$strAddDeleteColumn = 'Dadać/vydalić kalonku kryteru';
$strAddDeleteRow = 'Dadać/vydalić radok kryteru';
$strAddFields = 'Dadać novyja %s pali';
$strAddHeaderComment = 'Dadać pryvatny kamentar u zahałovak (\\n padzialaje radki)';
$strAddIntoComments = 'Dadać u kamentary';
$strAddNewField = 'Dadać novaje pole';
$strAddPrivilegesOnDb = 'Dadać pryvilei na nastupnuju bazu';
$strAddPrivilegesOnTbl = 'Dadać pryvilei na nastupnuju tablicu';
$strAddSearchConditions = 'Dadać umovy pošuku (cieła dla ŭmovy "where"):';
$strAddToIndex = 'Dadać da indeksa  %s kalonku(i)';
$strAddUser = 'Dadać novaha karystalnika';
$strAddUserMessage = 'Byŭ dadadzieny novy karystalnik.';
$strAdministration = 'Administravańnie';
$strAffectedRows = 'Zakranutyja radki:';
$strAfterInsertBack = 'Pierajści da papiaredniaj staronki';
$strAfterInsertNewInsert = 'Dadać jašče adzin radok';
$strAfterInsertNext = 'Redahavać nastupny radok';
$strAfterInsertSame = 'Viarnucca da hetaj staronki';
$strAfter = 'Paśla %s';
$strAllowInterrupt = 'Dazvolić spynieńnie impartavańnia ŭ vypadku, kali skrypt vyśvietlić, što skončvajecca čas vykanańnia. Heta moža być dobrym sposabam impartavańnia vialikich fajłaŭ, adnak, heta moža pierapynić tranzakcyi.';
$strAllTableSameWidth = 'Pakazać usie tablicy adnolkavaj šyryni?';
$strAll = 'Usie';
$strAlterOrderBy = 'Źmianić paradak tablicy';
$strAnalyzeTable = 'Analizavać tablicu';
$strAnd = 'I';
$strAndThen = 'i paśla';
$strAnIndex = 'Byŭ dadadzieny indeks dla %s';
$strAnyHost = 'Luby chost';
$strAny = 'Luby';
$strAnyUser = 'Luby karystalnik';
$strApproximateCount = 'Moža być prybliznym. Hł. FAQ 3.11';
$strAPrimaryKey = 'Pieršasny kluč byŭ dadadzieny da %s';
$strArabic = 'Arabskaja';
$strArmenian = 'Armianskaja';
$strAscending = 'pramy';
$strAtBeginningOfTable = 'U pačatku tablicy';
$strAtEndOfTable = 'U kancy tablicy';
$strAttr = 'Atrybuty';
$strAutomaticLayout = 'Aŭtamatyčnaje raźmiaščeńnie';

$strBack = 'Nazad';
$strBaltic = 'Bałtyjskaja';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinaryDoNotEdit = 'Dvojkavyja dadzienyja — nie redahujucca';
$strBinary = 'Dvojkavy';
$strBinaryLog = 'Dvojkavy łoh';
$strBinLogEventType = 'Typ padziei';
$strBinLogInfo = 'Infarmacyja';
$strBinLogName = 'Imia łohu';
$strBinLogOriginalPosition = 'Pieršapačatkovaja pazycyja';
$strBinLogPosition = 'Pazycyja';
$strBinLogServerId = 'ID servera';
$strBookmarkAllUsers = 'Dać kožnamu karystalniku dostup da hetaj zakładki';
$strBookmarkCreated = 'Zakładka %s stvoranaja';
$strBookmarkDeleted = 'Zakładka była vydalenaja.';
$strBookmarkLabel = 'Mietka';
$strBookmarkQuery = 'Zakładzieny SQL-zapyt';
$strBookmarkReplace = 'Zamianić isnuju zakładku z takim ža imiem';
$strBookmarkThis = 'Dadać hety SQL-zapyt u zakładki';
$strBookmarkView = 'Tolki prahlad';
$strBrowseDistinctValues = 'Prahlad roznych značeńniaŭ';
$strBrowseForeignValues = 'Prahladzieć źniešnija značeńni';
$strBrowse = 'Prahlad';
$strBufferPoolActivity = 'Aktyŭnaść pułu buferu';
$strBufferPool = 'Puł buferu';
$strBufferPoolUsage = 'Vykarystańnie pułu buferu';
$strBufferReadMissesInPercent = 'Propuskaŭ čytańnia ŭ %';
$strBufferReadMisses = 'Propuskaŭ čytańnia';
$strBufferWriteWaitsInPercent = 'Zatrymak zapisu ŭ %';
$strBufferWriteWaits = 'Zatrymak zapisu';
$strBulgarian = 'Baŭharskaja';
$strBusyPages = 'Zaniatych staronak';
$strBzError = 'phpMyAdmin nia moža ścisnuć damp z-za prablemaŭ z pašyreńniem Bz2 u hetaj versii PHP. Stroha rekamendujecca vyznačyć značeńnie dyrektyvy <code>$cfg[\'BZipDump\']</code> u vašym kanfihuracyjnym fajle phpMyAdmin jak <code>FALSE</code>. Kali vy žadajecie vykarystoŭvać Bz2-ścisk, vam nieabchodna abnavić versiju PHP. Źvarniciesia da PHP bug report %s dla bolš padrabiaznaj infarmacyi.';
$strBzip = 'ściskać u bzip';

$strCalendar = 'Kalandar';
$strCanNotLoadExportPlugins = 'Niemahčyma zahruzić płaginy ekspartavańnia, kali łaska, praviercie ŭstalavanyja fajły!';
$strCanNotLoadImportPlugins = 'Niemahčyma zahruzić płahiny impartavańnia, kali łaska, praviercie ŭstaloŭku!';
$strCannotLogin = 'Niemahčyma załahavacca na server MySQL';
$strCantLoad = 'niemahčyma zahruzić pašyreńnie %s;<br />kali łaska, praviercie kanfihuracyju PHP';
$strCantLoadRecodeIconv = 'Niemahčyma zahruzić pašyreńnie iconv abo pašyreńnie recode, nieabchodnyja dla pierakadavańnia symbalaŭ. Naładźcie PHP na vykarystańnie hetych pašyreńniaŭ abo ŭvohule adklučycie pierakadavańnie symbalaŭ u phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Niemahčyma pierajmienavać indeks u PRIMARY!';
$strCantUseRecodeIconv = 'Niemahčyma vykarystać ni funkcyju iconv, ni libiconvr, ni recode_string u toj čas, jak pašyreńnie paviedamlaje, što jano zahružanaje. Praviercie vašuju kanfihuracyju PHP.';
$strCardinality = 'Kolkaść elementaŭ';
$strCaseInsensitive = 'biez uliku rehistru';
$strCaseSensitive = 'z ulikam rehistru';
$strCentralEuropean = 'Centralnaeŭrapiejskaja';
$strChange = 'Źmianić';
$strChangeCopyModeCopy = '... pakinuć staroha.';
$strChangeCopyModeDeleteAndReload = ' ... vydalić staroha z tablicy karystalnikaŭ i paśla pierazahruzić pryvilei.';
$strChangeCopyModeJustDelete = ' ... vydalić staroha z tablicy karystalnikaŭ.';
$strChangeCopyModeRevoke = ' ... anulavać usie aktyŭnyja pryvilei staroha i paśla vydalić jaho.';
$strChangeCopyMode = 'Stvaryć novaha karystalnika z takimi ž pryvilejami i ...';
$strChangeCopyUser = 'Źmianić rehistracyjnuju infarmacyju / Kapijavać karystalnika';
$strChangeDisplay = 'Vybierycie pole dla adlustravańnia';
$strChangePassword = 'Źmianić parol';
$strCharset = 'Kadyroŭka';
$strCharsetOfFile = 'Kadyroŭka fajła:';
$strCharsetsAndCollations = 'Raskładki i supastaŭleńni';
$strCharsets = 'Kadyroŭki';
$strCheckAll = 'Adznačyć usio';
$strCheckOverhead = 'Adznačyć tyja, što patrabujuć aptymizacyi';
$strCheckPrivsLong = 'Pravieryć pryvilei dla bazy "%s".';
$strCheckPrivs = 'Pravieryć pryvilei';
$strCheckTable = 'Pravieryć tablicu';
$strChoosePage = 'Kali łaska, vybierycie staronku dla redahavańnia';
$strColComFeat = 'Pakazvać kamentary kalonak';
$strCollation = 'Supastaŭleńnie';
$strColumnNames = 'Nazvy kalonak';
$strColumnPrivileges = 'Specyfičnyja pryvilei kalonak';
$strCommand = 'Kamanda';
$strCommentsForTable = 'Kamentary da tablicy';
$strComments = 'Kamentary';
$strCompatibleHashing = 'Sumiaščalnaje z MySQL 4.0';
$strCompleteInserts = 'Poŭnaja ŭstaŭka';
$strCompression = 'Ścisk';
$strCompressionWillBeDetected = 'Metad ścisku impartavanaha fajła budzie vyznačanaja aŭtamatyčna z: %s';
$strConfigDefaultFileError = 'Niemahčyma zahruzić kanfihuracyju pa zmoŭčańni z: "%1$s"';
$strConfigFileError = 'phpMyAdmin nia moža pračytać kanfihuracyjny fajł!<br />Heta moža adbycca ŭ vypadku, kali PHP znojdzie syntaksyčnuju pamyłku ŭ im abo kali PHP nia moža znajści fajł.<br />Kali łaska, zahruzicie kanfihuracyjny fajł niepasredna, vykarystoŭvajučy spasyłku, pryviedzienuju nižej, i pračytajcie paviedamleńni PHP pra pamyłki. U bolšaści vypadkaŭ, niedzie prapuščany apostraf abo kropka z koskaj.<br />Kali vy atrymajecie čystuju staronku, značyć, usio dobra.';
$strConfigureTableCoord = 'Kali łaska, skanfihurujcie kaardynaty dla tablicy %s';
$strConnectionError = 'Niemahčyma padłučycca: niapravilnyja nałady.';
$strConnections = 'Padłučeńni';
$strConstraintsForDumped = 'Abmiežavańni dla ekspartavanych tablic';
$strConstraintsForTable = 'Abmiežavańni dla tablicy';
$strCookiesRequired = 'Cookies musiać być uklučanymi paśla hetaha miesca.';
$strCopyDatabaseOK = 'Baza dadzienych %s była skapijavanaja ŭ %s';
$strCopy = 'Skapijavać';
$strCopyTableOK = 'Tablica %s była skapijavanaja ŭ %s.';
$strCopyTableSameNames = 'Niemahčyma skapijavać tablicu ŭ samu siabie!';
$strCopyTable = 'Skapijavać tablicu ŭ (baza dadzienych<b>.</b>tablica):';
$strCouldNotKill = 'phpMyAdmin nia moža spynić praces %s. Napeŭna, jon užo spynieny.';
$strCreateDatabaseBeforeCopying = 'vykanać CREATE DATABASE pierad kapijavańniem';
$strCreateIndex = 'Stvaryć indeks na %s kalonkach';
$strCreateIndexTopic = 'Stvaryć novy indeks';
$strCreateNewDatabase = 'Stvaryć novuju bazu dadzienych';
$strCreateNewTable = 'Stvaryć novuju tablicu ŭ BD %s';
$strCreatePage = 'Stvaryć novuju staronku';
$strCreatePdfFeat = 'Stvareńnie PDF-fajłaŭ';
$strCreate = 'Stvaryć';
$strCreateUserDatabase = 'Baza dadzienych dla karystalnika';
$strCreateUserDatabaseName = 'Stvaryć bazu dadzienych z takim samym imiem i nadzialić usimi pryvilejami';
$strCreateUserDatabaseNone = 'Nijakaja';
$strCreateUserDatabaseWildcard = 'Nadzialić usimi pryvilejami bazy z imienami pa mascy (imia karystalnika_%)';
$strCreationDates = 'Stvareńnie/Abnaŭleńnie/Pravierka dat';
$strCriteria = 'Kryter';
$strCroatian = 'Charvackaja';
$strCSV = 'CSV';
$strCyrillic = 'Kiryličnaja';
$strCzech = 'Českaja';
$strCzechSlovak = 'Čechasłavackaja';

$strDanish = 'Dackaja';
$strDatabase = 'Baza dadzienych';
$strDatabaseEmpty = 'Imia bazy dadzienych nie paznačanaje!';
$strDatabaseExportOptions = 'Nałady ekspartu bazy dadzienych';
$strDatabaseHasBeenDropped = 'Baza dadzienych %s była vydalenaja.';
$strDatabases = 'Bazy dadzienych';
$strDatabasesDropped = '%s bazaŭ dadzienych byli paśpiachova vydalenyja.';
$strDatabasesStatsDisable = 'Adklučyć statystyku';
$strDatabasesStatsEnable = 'Uklučyć statystyku';
$strDatabasesStatsHeavyTraffic = 'Zaŭvaha: Uklučeńnie statystyki bazy dadzienych moža vyklikać vialikuju kolkaść trafiku pamiž veb-serveram i serveram MySQL.';
$strDatabasesStats = 'Statystyka bazaŭ dadzienych';
$strData = 'Dadzienyja';
$strDataDict = 'Słoŭnik dadzienych';
$strDataOnly = 'Tolki dadzienyja';
$strDataPages = 'Staronak z dadzienymi';
$strDBComment = 'Kamentar da bazy dadzienych: ';
$strDBCopy = 'Kapijavać bazu dadzienych u';
$strDbPrivileges = 'Specyfičnyja pryvilei bazy dadzienych';
$strDBRename = 'Pierajmienavać bazu dadzienych u';
$strDbSpecific = 'specyfičny dla bazy dadzienych';
$strDefaultEngine = '%s źjaŭlajecca mašynaj zachavańnia dadzienych pa zmoŭčańni na hetym MySQL-servery.';
$strDefault = 'Pa zmoŭčańni';
$strDefaultValueHelp = 'Dla značeńniaŭ pa zmoŭčańni, kali łaska, uviadzicie prosta značeńnie, biez vykarystańnia zvarotnych słešaŭ i dvukośsia, vykarystoŭvajučy farmat: a';
$strDefragment = 'Defrahmentavać tablicu';
$strDelayedInserts = 'Vykarystoŭvać adkładzienyja ŭstaŭki';
$strDeleteAndFlushDescr = 'Heta lepšy sposab, ale pierazahruzka pryvilejaŭ moža zaniać peŭny čas.';
$strDeleteAndFlush = 'Vydalić karystalnikaŭ i paśla pierazahruzić pryvilei.';
$strDeleted = 'Radok byŭ vydaleny';
$strDeletedRows = 'Vydalenyja radki:';
$strDeleteNoUsersSelected = 'Na vybranyja karystalniki dla vydaleńnia!';
$strDelete = 'Vydalić';
$strDeleting = 'Vydaleńnie %s';
$strDelimiter = 'Raździalalnik';
$strDelOld = 'Biahučaja staronka ŭtrymlivaje spasyłki na tablicy, jakija bolš nie isnujuć. Ci žadajecie vy vydalić hetyja spasyłki?';
$strDescending = 'advarotny';
$strDescription = 'Apisańnie';
$strDictionary = 'słoŭnik';
$strDirtyPages = 'Brudnych staronak';
$strDisabled = 'Adklučana';
$strDisableForeignChecks = 'Adklučyć pravierku źniešnich klučoŭ';
$strDisplayFeat = 'Pakazvać mahčymaści';
$strDisplayOrder = 'Paradak prahladu:';
$strDisplayPDF = 'Pakazać PDF-schiemu';
$strDoAQuery = 'Vykanać "zapyt zhodna prykłada" (symbal padstanoŭki: "%")';
$strDocu = 'Dakumentacyja';
$strDoYouReally = 'Ci sapraŭdy vy žadajecie ';
$strDropDatabaseStrongWarning = 'Vy źbirajecie VYDALIĆ bazu dadzienych całkam!';
$strDropUsersDb = 'Vydalić bazy dadzienych, jakija majuć takija ž imiony jak i karystalniki.';
$strDrop = 'Vydalić';
$strDumpingData = 'Damp dadzienych tablicy';
$strDumpSaved = 'Damp zachavany ŭ fajł %s.';
$strDumpXRows = 'Damp %s radkoŭ, pačynajučy z %s.';
$strDynamic = 'dynamičny';

$strEditPDFPages = 'Redahavać PDF-staronki';
$strEditPrivileges = 'Redahavać pryvilei';
$strEdit = 'Redahavać';
$strEffective = 'Efektyŭnaść';
$strEmpty = 'Ačyścić';
$strEmptyResultSet = 'MySQL viarnuła pusty vynik (to bok nul radkoŭ).';
$strEnabled = 'Uklučana';
$strEncloseInTransaction = 'Ekspartavać za adnu tranzakcyju';
$strEndCut = 'END CUT';
$strEnd = 'Kaniec';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s dastupnaja na hetym MySQL-servery.';
$strEngineDisabled = '%s była adklučanaja dla retaha MySQL-servera.';
$strEngines = 'Mašyny';
$strEngineUnsupported = 'Hety server MySQL nie padtrymlivaje mašynu zachavańnia dadzienych %s.';
$strEnglish = 'Anhielskaja';
$strEnglishPrivileges = ' Zaŭvaha: imiony pryvilejaŭ MySQL zadajucca pa-anhielsku ';
$strErrorInZipFile = 'Pamyłka ŭ ZIP-archivie:';
$strError = 'Pamyłka';
$strErrorRenamingTable = 'Pamyłka pierajmienavańnia tablicy %1$s u %2$s';
$strEscapeWildcards = 'Symbali padstanoŭki _ i % musiać być ekranavanymi symbalem \ dla ich litaralnaha vykarystańnia';
$strEsperanto = 'Esperanta';
$strEstonian = 'Estonskaja';
$strExcelEdition = 'Versija Excel';
$strExecuteBookmarked = 'Vykanać zapyt z zakładak';
$strExplain = 'Tłumačyć SQL';
$strExport = 'Ekspart';
$strExportMustBeFile = 'Dadzienyja vybranaha typu ekspartavańnia musiać być zazavanymi ŭ fajł!';
$strExtendedInserts = 'Pašyranyja ŭstaŭki';
$strExtra = 'Dadatkova';

$strFailedAttempts = 'Niaŭdałych sprobaŭ';
$strFieldHasBeenDropped = 'Pole %s było vydalenaje';
$strField = 'Pole';
$strFieldsEnclosedBy = 'Pali ŭziatyja ŭ';
$strFieldsEscapedBy = 'Pali ekranujucca';
$strFields = 'Pali';
$strFieldsTerminatedBy = 'Pali padzielenyja';
$strFileAlreadyExists = 'Fajł %s užo isnuje na servery, źmianicie imia fajła abo praviercie opcyju pierazapisu.';
$strFileCouldNotBeRead = 'Niemahčyma pračytać fajł';
$strFileNameTemplate = 'Šablon nazvy fajła';
$strFileNameTemplateDescriptionDatabase = 'imia bazy dadzienych';
$strFileNameTemplateDescription = 'Hetaje značeńnie interpretujecca z vykarystańniem %1$sstrftime%2$s, tamu možna vykarystoŭvać radki farmatavańnia času. Aproč hetaha, buduć praviedzienyja nastupnyja źmieny: %3$s. Astatni tekst zastaniecca jak jość.';
$strFileNameTemplateDescriptionServer = 'imia servera';
$strFileNameTemplateDescriptionTable = 'imia tablicy';
$strFileNameTemplateRemember = 'zapomnić šablon';
$strFileToImport = 'Impartavać fajł';
$strFixed = 'fiksavany';
$strFlushPrivilegesNote = 'Zaŭvaha: phpMyAdmin atrymlivaje pryvilei karystalnikaŭ naŭprostava z tablic pryvilejaŭ MySQL. Źmieściva hetych tablic moža adroźnivacca ad pryvilejaŭ, jakija vykarystoŭvaje server, kali jany byli źmienienyja ŭručnuju. U hetym vypadku vam treba %spierazahruzić pryvilei%s da taho, jak vy praciahniecie.';
$strFlushQueryCache = 'Skinuć keš zapytaŭ';
$strFlushTable = 'Skinuć keš tablicy ("FLUSH")';
$strFlushTables = 'Skinuć (zakryć) usie tablicy';
$strFontSize = 'Pamier šryfta';
$strFormat = 'Farmat';
$strFormEmpty = 'Nie zadadzienaje značeńnie ŭ formie!';
$strFreePages = 'Volnych staronak';
$strFullText = 'Poŭnyja teksty';
$strFunction = 'Funkcyja';
$strFunctions = 'Funkcyi';

$strGenBy = 'Stvorany';
$strGeneralRelationFeat = 'Mahčymaści asnoŭnych suviaziaŭ';
$strGeneratePassword = 'Zheneravać parol';
$strGenerate = 'Zheneravać';
$strGenTime = 'Čas stvareńnia';
$strGeorgian = 'Hruzinskaja';
$strGerman = 'Niamieckaja';
$strGlobal = 'hlabalny';
$strGlobalPrivileges = 'Hlabalnyja pryvilei';
$strGlobalValue = 'Hlabalnaje značeńnie';
$strGo = 'Paniesłasia';
$strGrantOption = 'Grant';
$strGreek = 'Hreckaja';
$strGzip = 'archivavany ŭ gzip';

$strHandler = 'Apracoŭnik';
$strHasBeenAltered = 'była źmienienaja.';
$strHasBeenCreated = 'była stvoranaja.';
$strHaveToShow = 'Vam nieabchodna vybrać prynamsi adnu kalonku dla adlustravańnia';
$strHebrew = 'Habrejskaja';
$strHome = 'Da pačatku';
$strHomepageOfficial = 'Aficyjnaja staronka phpMyAdmin';
$strHost = 'Chost';
$strHostEmpty = 'Pustoje imia chostu!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Vuhorskaja';

$strIcelandic = 'Iślandzkaja';
$strId = 'ID';
$strIdxFulltext = 'Poŭnatekstekstavaje';
$strIgnoreDuplicates = 'Ihnaravać radki, jakija paŭtarajucca';
$strIgnore = 'Ihnaravać';
$strIgnoreInserts = 'Vykarystoŭvać ustaŭki ihnaravańniaŭ';
$strImportFiles = 'Impartavać fajły';
$strImportFormat = 'Farmat impartavanaha fajła';
$strImport = 'Imrart';
$strImportSuccessfullyFinished = 'Impartravańnie paśpiachova zavieršanaje, vykanana %d zapytaŭ.';
$strIndexes = 'Indeksy';
$strIndexHasBeenDropped = 'Indeks %s byŭ vydaleny';
$strIndex = 'Indeks';
$strIndexName = 'Imia indeksa:';
$strIndexType = 'Typ indeksa:';
$strIndexWarningTable = 'Prablemy z indeksami dla tablicy `%s`';
$strInnoDBAutoextendIncrement = 'Aŭtapašyralnaje pryraščeńnie';
$strInnoDBAutoextendIncrementDesc = ' Pamier pryraščeńnia dla pašyreńnia pamieru prastory aŭtapašyralnaj tablicy, kali jana zapoŭnicca.';
$strInnoDBBufferPoolSizeDesc = 'Pamier buferu ŭ pamiaci, jaki InnoDB vykarystoŭvaje dla kešavańnia dadzienych i indeksaŭ tablic.';
$strInnoDBBufferPoolSize = 'Pamier pułu buferu';
$strInnoDBDataFilePath = 'Fajły dadzienych';
$strInnoDBDataHomeDir = 'Chatniaja tečka dadzienych';
$strInnoDBDataHomeDirDesc = 'Ahulnaja častka šlachu tečki da ŭsich fajłaŭ dadzienych InnoDB.';
$strInnoDBPages = 'staronak';
$strInnodbStat = 'Stan InnoDB';
$strInsecureMySQL = 'Vaš kanfihuracyjny fajł utrymlivaje nałady (karystalnik root biez parolu), jakija adpaviadajuć pryvilejavanamu karystalniku MySQL pa zmoŭčańni. Vaš server MySQL pracuje z hetaj naładaj pa zmoŭčańni i źjaŭlajecca adkrytym dla źniešniaha ŭryvańnia, i tamu vam abaviazkova treba vypravić hetuju chibu ŭ biaśpiecy.';
$strInsertAsNewRow = 'Ustavić jak novy radok';
$strInsertedRowId = 'Id ustaŭlenaha radka:';
$strInsertedRows = 'Dadanyja radki:';
$strInsert = 'Ustavić';
$strInternalNotNecessary = '* Unutranaja suviaź nie źjaŭlajecca abaviazkovaj, kali jana ŭžo isnuje ŭ InnoDB.';
$strInternalRelations = 'Unutranyja suviazi';
$strInUse = 'vykarystoŭvajecca';
$strInvalidAuthMethod = 'U kanfihuracyi vyznačany niekarektny metad aŭtentyfikacyi:';
$strInvalidColumnCount = 'Kolkaść kalonak musić być bolšaj za nul.';
$strInvalidColumn = 'Vyznačanaja niekarektnaja kalonka (%s)!';
$strInvalidCSVFieldCount = 'Niapravilnaja kolkaść paloŭ u CSV-dadzienych u radku %d.';
$strInvalidCSVFormat = 'Niekarektny farmat CSV-dadzienych u radku %d.';
$strInvalidCSVParameter = 'Niedapuščalny paremetar dla impartu dadzienych u CSV: %s';
$strInvalidDatabase = 'Niapravilnaja baza dadzienych';
$strInvalidFieldAddCount = 'Treba dadać prynamsi adno pole.';
$strInvalidFieldCount = 'Tablica musić mieć prynamsi adno pole.';
$strInvalidLDIImport = 'Hety płahin nie padtrymlivaje ścisnutyja dadzienyja!';
$strInvalidRowNumber = '%d nie źjaŭlajecca karektnym numaram radka.';
$strInvalidServerHostname = 'Niapravilnaje imia chostu dla servera %1$s. Kali łaska, praviercie kanfihurycyju.';
$strInvalidServerIndex = 'Niekarektny indeks servera: "%s"';
$strInvalidTableName = 'Niekarektnaje imia tablicy';

$strJapanese = 'Japonskaja';
$strJoins = 'Ab\'jadnańni';
$strJumpToDB = 'Pierajści da bazy dadzienych "%s".';
$strJustDeleteDescr = '"Vydalenyja" karystalniki ŭsio jašče zmohuć atrymać dostup da servera jak zvyčajna, pakul pryvilei nia buduć pierazahružanyja.';
$strJustDelete = 'Prosta vydalić karystalnikaŭ z tablic pryvilejaŭ.';

$strKeepPass = 'Nie źmianiać parol';
$strKeyCache = 'Keš klučoŭ';
$strKeyname = 'Imia kluča';
$strKill = 'Spynić';
$strKorean = 'Karejskaja';

$strLandscape = 'Krajavid';
$strLanguage = 'Mova';
$strLanguageUnknown = 'Nieviadomaja mova: %1$s.';
$strLatchedPages = 'Fiksavanyja staronki';
$strLatexCaption = 'Zahałovak tablicy';
$strLatexContent = 'Źmieściva tablicy __TABLE__';
$strLatexContinuedCaption = 'Praciahnuty zahałovak tablicy';
$strLatexContinued = '(praciah)';
$strLatexIncludeCaption = 'Uklučyć zahałovak tablicy';
$strLatexLabel = 'Kluč mietki';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tablicy __TABLE__';
$strLatvian = 'Łatvijskaja';
$strLDI = 'CSV z vykarystańniem LOAD DATA';
$strLDILocal = 'Vykarystoŭvać klučavoje słova LOCAL';
$strLengthSet = 'Daŭžynia/Značeńni*';
$strLimitNumRows = 'Kolkaść radkoŭ na staronku';
$strLinesTerminatedBy = 'Radki padzielenyja';
$strLinkNotFound = 'Suviaź nia znojdzienaja';
$strLinksTo = 'Źviazanaja z';
$strLithuanian = 'Litoŭskaja';
$strLocalhost = 'Lakalny';
$strLocationTextfile = 'Miescaznachodžańnie tekstavaha fajła';
$strLoginInformation = 'Infarmacyja pra ŭvachod';
$strLogin = 'Uvachod u systemu';
$strLogout = 'Vyjści z systemy';
$strLogPassword = 'Parol:';
$strLogServer = 'Server';
$strLogUsername = 'Imia karystalnika:';
$strLongOperation = 'Hetaja aperacyja moža zaniać šmat času. Praciahvać?';

$strMaxConnects = 'maksymum adnačasovych złučeńniaŭ';
$strMaximalQueryLength = 'Maksymalnaja daŭžynia stvoranaha zapytu';
$strMaximumSize = 'Maksymalny pamier: %s%s';
$strMbExtensionMissing = 'Pašyreńnie PHP mbstring nia znojdzienaje, a vy, zdajecca, vykarystoŭvajecie šmatbajtavuju kadyroŭku. Biez pašyreńnia mbstring phpMyAdmin nia moža padzialać radki karektna, i heta moža pryvieści da niečakanych vynikaŭ.';
$strMbOverloadWarning = 'Vy ŭklučyli mbstring.func_overload u vašym kanfihuracyjnym fajle PHP. Hetaja opcyja niesumiaščalnaja z phpMyAdmin i moža vyklikać paškodžańnie dadzienych!';
$strMIME_available_mime = 'Dastupnyja MIME-typy';
$strMIME_available_transform = 'Dastupnyja pieraŭtvareńni';
$strMIME_description = 'Apisańnie';
$strMIME_MIMEtype = 'MIME-typ';
$strMIME_nodescription = 'Niama dastupnych apisańniaŭ dla hetaha pieraŭtvareńnia.<br />Kali łaska, spytajcie aŭtara, što robić %s.';
$strMIME_transformation_note = 'Dla atrymańnia śpisu dastupnych opcyjaŭ transfarmacyi i pieraŭtvareńniaŭ ichnych MIME-typaŭ, naciśnicie na %sapisańni pieraŭtvareńniaŭ%s';
$strMIME_transformation_options_note = 'Kali łaska, uvodźcie značeńni opcyjaŭ pieraŭtvareńnia vykarystoŭvajučy hety farmat: \'a\', 100, b,\'c\'...<br />Kali vam treba ŭžyć zvarotny słeš ("\") abo apostraf ("\'") u hetych značeńniach, ustaŭcie zvarotny słeš pierad imi (naprykład, \'\\\\xyz\' abo \'a\\\'b\').';
$strMIME_transformation_options = 'Opcyi pieraŭtvareńnia';
$strMIME_transformation = 'Pieraŭtvareńnie MIME-typu braŭzeram';
$strMIMETypesForTable = 'MIME-typy tablicy';
$strMIME_without = 'MIME-typy, vyłučanyja kursivam, nia majuć asobnaj funkcyi pieraŭtvareńnia';
$strModifications = 'Madyfikacyi byli zachavanyja';
$strModify = 'Źmianić';
$strModifyIndexTopic = 'Źmianić indeks';
$strMoveTableOK = 'Tablica %s była pieraniesienaja ŭ %s.';
$strMoveTable = 'Pieranieści tablicu ŭ (baza dadzienych<b>.</b>tablica):';
$strMoveTableSameNames = 'Niemahčyma pieranieści tablicu ŭ samu siabie!';
$strMultilingual = 'šmatmoŭnaja';
$strMyISAMDataPointerSizeDesc = 'Značeńnie pa zmoŭčańni pamieru ŭkazalnika ŭ bajtach, dla vykarystańnia ŭ CREATE TABLE dla tablic MyISAM, kali nia vyznačanaja opcyja MAX_ROWS.';
$strMyISAMDataPointerSize = 'Pamier ukazalnika na dadzienyja';
$strMyISAMMaxExtraSortFileSizeDesc = 'Kali pamier časovaha fajła, jaki vykarystoŭvajecca dla chutkaha stvareńnia indeksu MyISAM, budzie bolšy, čym vykarystańnie dla kešu klučoŭ pamieru, paznačanaha tut, vybierycie metad kešavańnia klučoŭ.';
$strMyISAMMaxExtraSortFileSize = 'Maksymalny pamier časovych fajłaŭ dla stvareńnia indeksu';
$strMyISAMMaxSortFileSizeDesc = 'Maksymalny pamier časovaha fajła MySQL, jaki dazvolena vykarystoŭvać dla pierastvareńnia indeksu MyISAM (padčas REPAIR TABLE, ALTER TABLE, abo LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksymalny pamier dla časovych fajłaŭ sartavańnia';
$strMyISAMRecoverOptionsDesc = 'Režym dla aŭtamatyčnaha ŭznaŭleńnia paškodžanych tablic MyISAM, jak vyznačany praz opcyju --myisam-recover zahruzki servera.';
$strMyISAMRecoverOptions = 'Režym aŭtamatyčnaha ŭznaŭleńnia';
$strMyISAMRepairThreadsDesc = 'Kali hetaje značeńnie bolšaje za 1, indeksy tablic MyISAM buduć stvaracca paralelna (kožny indeks u svaim ułasnym patoku) padčas uznaŭleńnia pracesam sartavańnia.';
$strMyISAMRepairThreads = 'Patokaŭ uznaŭleńnia';
$strMyISAMSortBufferSizeDesc = 'Bufer, jaki vydzialajecca dla sartavańnia indeksaŭ MyISAM padčas REPAIR TABLE abo padčas stvareńnia indeksaŭ, vykarystoŭvajučy CREATE INDEX ci ALTER TABLE.';
$strMyISAMSortBufferSize = 'Pamier buferu sartavańnia';
$strMySQLCharset = 'Kadyroŭka MySQL';
$strMysqlClientVersion = 'Versija klijenta MySQL';
$strMySQLConnectionCollation = 'Supastaŭleńnie padłučeńnia da MySQL';
$strMySQLSaid = 'Adkaz MySQL: ';
$strMySQLShowProcess = 'Pakazać pracesy';
$strMySQLShowStatus = 'Pakazać stan MySQL';
$strMySQLShowVars = 'Pakazać systemnyja źmiennyja MySQL';

$strName = 'Nazva';
$strNext = 'Nastupny';
$strNoActivity = 'Nie było anijakaj aktyŭnaści na praciahu %s sekundaŭ. Kali łaska, uvajdzicie znoŭ';
$strNoDatabases = 'Bazy dadzienych adsutničajuć';
$strNoDatabasesSelected = 'Nia vybranaja baza dadzienych.';
$strNoDataReceived = 'Dadzienyja dla impartavańnia nie atrymanyja. Albo nivodny fajł nia byŭ zahružany, albo pamier fajła pieravysiŭ maksymalny pamier, vyznačany kanfihuracyjaj PHP. Hł. FAQ 1.16.';
$strNoDescription = 'niama apisańnia';
$strNoDetailsForEngine = 'Dla hetaj mašyny zachavańnia dadzienych detalnaja infarmacyja nie dastupnaja.';
$strNoDropDatabases = 'Kamandy "DROP DATABASE" adklučanyja.';
$strNoExplain = 'Nie tłumačyć SQL';
$strNoFilesFoundInZip = 'Fajły ŭ ZIP-archivie nia znojdzienyja!';
$strNoFrames = 'Dla raboty phpMyAdmin patrebny braŭzer z padtrymkaj <b>frejmaŭ</b>.';
$strNoIndex = 'Indeks nia vyznačany!';
$strNoIndexPartsDefined = 'Častki indeksu nia vyznačanyja!';
$strNoModification = 'Niama źmienaŭ';
$strNone = 'Niama';
$strNo = 'Nie';
$strNoOptions = 'Hety farmat nia maje opcyjaŭ';
$strNoPassword = 'Biez parola';
$strNoPermission = 'Veb-server nia maje dazvołu dla zachavańnia ŭ fajł %s.';
$strNoPhp = 'Biez PHP-kodu';
$strNoPrivileges = 'Biez pryvilejaŭ';
$strNoRights = 'Vy nia majecie dastatkovych pryvilejaŭ być u hetym miescy ŭ hety čas!';
$strNoRowsSelected = 'Nivodny radok nia vybrany';
$strNoSpace = 'Niedastatkova miesca dla zachavańnia ŭ fajł %s.';
$strNoTablesFound = 'U bazie dadzienych tablic nia vyjaŭlena.';
$strNoThemeSupport = 'Temy nie padtrymlivajucca; kali łaska, praviercie vašuju kanfihuracyju i/abo vašyja temy ŭ tečcy %s.';
$strNotNumber = 'Heta nia lik!';
$strNotOK = 'nie OK';
$strNotSet = 'Tablica <b>%s</b> nia znojdzienaja abo nia vyznačanaja ŭ %s';
$strNoUsersFound = 'Nie znojdzieny karystalnik.';
$strNoValidateSQL = 'Nie praviarać SQL';
$strNull = 'Nul';
$strNumberOfFields = 'Kolkaść paloŭ';
$strNumSearchResultsInTable = '%s supadzieńniaŭ u tablicy <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ahułam:</b> <i>%s</i> supadzieńniaŭ';
$strNumTables = 'Tablic';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Specyfikacyja Open Document';
$strOpenDocumentText = 'Tekst Open Document';
$strOpenNewWindow = 'Adkryć novaje akno phpMyAdmin';
$strOperations = 'Aperacyi';
$strOperator = 'Aperatar';
$strOptimizeTable = 'Aptymizavać tablicu';
$strOr = 'Abo';
$strOverhead = 'Vykarystańnie resursaŭ';
$strOverwriteExisting = 'Pierazapisvać isnujučy(ja) fajł(y)';

$strPageNumber = 'Staronka:';
$strPagesToBeFlushed = 'Skinuć keš staronak';
$strPaperSize = 'Pamier papiery';
$strPartialImport = 'Častkovy impart';
$strPartialText = 'Častkovyja teksty';
$strPasswordChanged = 'Parol dla %s paśpiachova źmienieny.';
$strPasswordEmpty = 'Pusty parol!';
$strPasswordHashing = 'Chešavańnie parolu';
$strPasswordNotSame = 'Paroli nie supadajuć!';
$strPassword = 'Parol';
$strPdfDbSchema = 'Struktura bazy "%s" — staronka %s';
$strPdfInvalidTblName = 'Tablicy "%s" nie isnuje!';
$strPdfNoTables = 'Niama tablic';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Gieneruje spravazdaču z dadzienymi asobnaj tablicy)';
$strPDFReportTitle = 'Zahałovak spravazdačy';
$strPerHour = 'u hadzinu';
$strPerMinute = 'u chvilinu';
$strPerSecond = 'u sekundu';
$strPersian = 'Persydzkaja';
$strPhoneBook = 'telefonnaja kniha';
$strPHP40203 = 'Vy vykarystoŭvajecie PHP 4.2.3, jakaja maje sur\'joznyja pamyłki pry rabocie z šmatbajtavymi radkami (mbstring). Hladzicie paviedamleńnie pra pamyłku PHP 19404. Heta versija PHP nie rekamendujecca dla vykarystańnia z phpMyAdmin.';
$strPhp = 'Stvaryć PHP-kod';
$strPHPVersion = 'Versija PHP';
$strPmaDocumentation = 'Dakumentacyja pa phpMyAdmin';
$strPmaUriError = 'Dyrektyva <tt>$cfg[\'PmaAbsoluteUri\']</tt> PAVINNA być vyznačanaja ŭ vašym kanfihuracyjnym fajle!';
$strPolish = 'Polskaja';
$strPortrait = 'Partret';
$strPos1 = 'Pačatak';
$strPrevious = 'Nazad';
$strPrimaryKeyHasBeenDropped = 'Pieršasny kluč byŭ vydaleny';
$strPrimaryKeyName = 'Imia pieršasnaha kluča musić być PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musić</b> być imiem pieršasnaha kluča i <b>tolki</b> jaho!)';
$strPrimary = 'Pieršasny';
$strPrint = 'Druk';
$strPrintViewFull = 'Versija dla druku (z usim tekstam)';
$strPrintView = 'Versija dla druku';
$strPrivDescAllPrivileges = 'Uklučaje ŭsie pryvilei, aproč GRANT.';
$strPrivDescAlter = 'Dazvalaje źmianiać strukturu isnych tablic.';
$strPrivDescAlterRoutine = 'Dazvalaje źmianiać i vydalać prahramy, jakija zachoŭvajucca.';
$strPrivDescCreateDb = 'Dazvalaje stvarać novyja bazy dadzienych i tablicy.';
$strPrivDescCreateRoutine = 'Dazvalaje stvarać prahramy, jakija zachoŭvajucca.';
$strPrivDescCreateTbl = 'Dazvalaje stvarać novyja tablicy.';
$strPrivDescCreateTmpTable = 'Dazvalaje stvarać časovyja tablicy.';
$strPrivDescCreateUser = 'Dazvalaje stvarać, vydalać i pierajmianoŭvać ulikovyja zapisy karystalnikaŭ';
$strPrivDescCreateView = 'Dazvalaje stvarać novyja prahlady.';
$strPrivDescDelete = 'Dazvalaje vydalać dadzienyja.';
$strPrivDescDropDb = 'Dazvalaje vydalać bazy dadzienych i tablicy.';
$strPrivDescDropTbl = 'Dazvalaje vydalać tablicy.';
$strPrivDescExecute5 = 'Dazvalaje vykanańnie prahramaŭ, jakija zachoŭvajucca.';
$strPrivDescExecute = 'Dazvalaje vykanańnie zachavanych pracedur; Nie pracuje ŭ hetaj versii MySQL.';
$strPrivDescFile = 'Dazvalaje impartavać dadzienyja z fajłaŭ i ekspartavać dadzienyja ŭ fajły.';
$strPrivDescGrant = 'Dazvalaje dadavać karystalnikaŭ i pryvilei biez pierazahruzki tablic pryvilejaŭ.';
$strPrivDescIndex = 'Dazvalaje stvarać i vydalać indeksy.';
$strPrivDescInsert = 'Dazvalaje ŭstaŭlać i zamianiać dadzienyja.';
$strPrivDescLockTables = 'Dazvalaje blakavać tablicy dla biahučaha patoku.';
$strPrivDescMaxConnections = 'Abmiažoŭvaje kolkaść novych złučeńniaŭ, jakija karystalnik moža adkryć na praciahu hadziny.';
$strPrivDescMaxQuestions = 'Abmiažoŭvaje kolkaść zapytaŭ, jakija karystalnik moža adpravić na server na praciahu hadziny.';
$strPrivDescMaxUpdates = 'Abmiažoŭvaje kolkaść kamandaŭ, źmianiajučych lubuju tablicu abo bazu dadzienych, jakija karystalnik moža vykanać na praciahu hadziny.';
$strPrivDescMaxUserConnections = 'Abmiažoŭvaje kolkaść adnačasovych złučeńniaŭ, jakija moža mieć karystalnik.';
$strPrivDescProcess3 = 'Dazvalaje spyniać pracesy inšych karystalnikaŭ.';
$strPrivDescProcess4 = 'Dazvalaje prahladać poŭnyja zapyty ŭ śpisie pracesaŭ.';
$strPrivDescReferences = 'Nie pracuje ŭ hetaj versii MySQL.';
$strPrivDescReload = 'Dazvalaje pierazahružać nałady servera i ačyščać keš servera.';
$strPrivDescReplClient = 'Dazvalaje karystalniku pytacca, dzie znachodziacca slaves / masters.';
$strPrivDescReplSlave = 'Nieabchodna dla replikacyi slaves.';
$strPrivDescSelect = 'Dazvalaje čytać dadzienyja.';
$strPrivDescShowDb = 'Daje dostup da poŭnaha śpisu bazaŭ dadzienych.';
$strPrivDescShowView = 'Dazvalaje vykanańnie zapytaŭ SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Dazvalaje spyniać server.';
$strPrivDescSuper = 'Dazvalaje padłučeńnie, navat kali dasiahnuty maksymalny lik padłučeńniaŭ; Patrabujecca dla bolšaści administratyŭnych aperacyjaŭ, takich jak vyznačeńnie hlabalnych źmiennych abo spynieńnie patokaŭ inšych karystalnikaŭ.';
$strPrivDescUpdate = 'Dazvalaje źmianiać dadzienyja.';
$strPrivDescUsage = 'Biez pryvilejaŭ.';
$strPrivileges = 'Pryvilei';
$strPrivilegesReloaded = 'Pryvilei byli paśpiachova pierazahružanyja.';
$strProcedures = 'Pracedury';
$strProcesses = 'Pracesy';
$strProcesslist = 'Śpis pracesaŭ';
$strProtocolVersion = 'Versija pratakołu';
$strPutColNames = 'Paznačyć nazvy paloŭ u pieršym radku';

$strQBEDel = 'Vydalić';
$strQBEIns = 'Ustavić';
$strQBE = 'Zapyt zhodna prykładu';
$strQueryCache = 'Keš zapytaŭ';
$strQueryFrame = 'Akno zapytu';
$strQueryOnDb = 'SQL-zapyt da BD <b>%s</b>:';
$strQueryResultsOperations = 'Dziejańni z vynikami zapytaŭ';
$strQuerySQLHistory = 'Historyja SQL';
$strQueryStatistics = '<b>Statystyka zapytaŭ</b>: Z momantu zapusku %s zapytaŭ było adpraŭlena na server.';
$strQueryTime = 'Zapyt vykonvaŭsia %01.4f sek';
$strQueryType = 'Typ zapytu';
$strQueryWindowLock = 'Nie pierazapisvajcie hety zapyt u inšych voknach';

$strReadRequests = 'Zapyty čytańnia';
$strReceived = 'Atrymana';
$strRecords = 'Zapisy';
$strReferentialIntegrity = 'Pravieryć cełasnaść dadzienych:';
$strRefresh = 'Abnavić';
$strRelationalSchema = 'Relacyjnaja schiema';
$strRelationNotWorking = 'Dadatkovyja mahčymaści raboty z źviazanymi tablicami byli adklučanyja. Kab vyśvietlić čamu, naciśnicie %stut%s.';
$strRelationsForTable = 'Suviazi ŭ tablicy';
$strRelations = 'Suviazi';
$strRelationView = 'Prahlad zaležnaściaŭ';
$strReloadingThePrivileges = 'Pierazahruzić pryvilei';
$strReloadPrivileges = 'Pierazahruzić pryvilei';
$strRemoveSelectedUsers = 'Vydalić vybranych karystalnikaŭ';
$strRenameDatabaseOK = 'Baza dadzienych %s była pierajmienavanaja ŭ %s';
$strRenameTableOK = 'Tablica %s była pierajmienavanaja ŭ %s';
$strRenameTable = 'Pierajmienavać tablicu ŭ';
$strRepairTable = 'Ramantavać tablicu';
$strReplaceNULLBy = 'Zamianiać NULL na';
$strReplaceTable = 'Zamianić dadzienyja tablicy dadzienymi z fajła';
$strReplication = 'Replikacyja';
$strReset = 'Skinuć';
$strResourceLimits = 'Abmiežavańni resursaŭ';
$strReType = 'Paćvierdžańnie';
$strRevokeAndDelete = 'Anulavać usie aktyŭnyja pryvilei karystalnikaŭ i paśla vydalić ich.';
$strRevokeAndDeleteDescr = 'Karystalniki ŭsio jašče buduć mieć pryvilei karystańnia (USAGE), pakul pryvilei nia buduć pierazahružanyja.';
$strRevoke = 'Anulavać';
$strRevokeMessage = 'Vy anulavali pryvilei dla %s';
$strRomanian = 'Rumynskaja';
$strRowLength = 'Daŭžynia radka';
$strRowsFrom = 'radkoŭ, pačynajučy z zapisu #';
$strRowSize = ' Pamier radka ';
$strRowsModeFlippedHorizontal = 'haryzantalna (paviernutyja zahałoŭki)';
$strRowsModeHorizontal = 'haryzantalna';
$strRowsModeOptions = 'u režymie %s i paŭtarać zahałoŭki praz kožnyja %s radkoŭ';
$strRowsModeVertical = 'vertykalna';
$strRows = 'Radki';
$strRowsStatistic = 'Statystyka radku';
$strRunning = 'na %s';
$strRunQuery = 'Adpravić zapyt';
$strRunSQLQueryOnServer = 'Vykanać SQL-zapyt(y) na servery %s';
$strRunSQLQuery = 'Vykanać SQL-zapyt(y) na bazie dadzienych %s';
$strRussian = 'Rasiejskaja';

$strSaveOnServer = 'Zachavać na servery ŭ tečcy %s';
$strSave = 'Zachavać';
$strScaleFactorSmall = 'Maštab zamały dla taho, kab schiema zajmała ŭsiu staronku';
$strSearchFormTitle = 'Pošuk u bazie dadzienych';
$strSearchInTables = 'U tablicy(ach):';
$strSearchNeedle = 'Słova(y) abo značeńnie(i) dla pošuku (maska: "%"):';
$strSearchOption1 = 'prynamsi adno z słovaŭ';
$strSearchOption2 = 'usie słovy';
$strSearchOption3 = 'dakładnuju frazu';
$strSearchOption4 = 'rehularny vyraz';
$strSearch = 'Pošuk';
$strSearchResultsFor = 'Vyniki pošuku "<i>%s</i>" %s:';
$strSearchType = 'Znajści:';
$strSecretRequired = 'Kanfihuracyjnamu fajłu zaraz patrebnaja sakretnaja fraza (blowfish_secret).';
$strSelectADb = 'Kali łaska, vybierycie bazu dadzienych';
$strSelectAll = 'Vybrać usio';
$strSelectBinaryLog = 'Vyłučycie dvojkavy łoh dla prahladu';
$strSelectFields = 'Vybrać pali (prynamsi adno):';
$strSelectNumRows = 'pa zapytu';
$strSelectTables = 'Vybierycie tablicu(y)';
$strSend = 'Zachavać jak fajł';
$strSent = 'Adpraŭlena';
$strServerChoice = 'Vybar servera';
$strServerNotResponding = 'Server nie adkazvaje';
$strServer = 'Server';
$strServers = 'Servery';
$strServerStatus = 'Biahučaja infarmacyja';
$strServerStatusDelayedInserts = 'Adkładzienyja ŭstaŭki';
$strServerStatusUptime = 'Hety server MySQL pracuje %s. Jon byŭ zapuščany %s.';
$strServerTabVariables = 'Źmiennyja';
$strServerTrafficNotes = '<b>Trafik servera</b>: Hetyja tablicy pakazvajuć statystyku sietkavaha trafiku hetaha servera MySQL ad momantu jahonaha zapusku.';
$strServerVars = 'Nałady i źmiennyja servera';
$strServerVersion = 'Versija servera';
$strSessionValue = 'Značeńnie sesii';
$strSetEnumVal = 'Kali typ pola "enum" abo "set", kali łaska, uvodźcie značeńni vykarystoŭvajučy hety farmat: \'a\',\'b\',\'c\'...<br />Kali vam patrebna ŭžyć zvarotny słeš ("\") abo apostraf ("\'") siarod hetych značeńniaŭ, pastaŭcie pierad imi zvarotny słeš (naprykład, \'\\\\xyz\' abo \'a\\\'b\').';
$strShowAll = 'Pakazać usie';
$strShowColor = 'Pakazać koler';
$strShowDatadictAs = 'Farmat słoŭnika dadzienych';
$strShowFullQueries = 'Pakazać poŭnyja zapyty';
$strShowGrid = 'Pakazać sietku';
$strShowingBookmark = 'Pakazvajučy zakładku';
$strShowingRecords = 'Pakazanyja zapisy';
$strShowOpenTables = 'Pakazać adkrytyja tablicy';
$strShow = 'Pakazać';
$strShowPHPInfo = 'Pakazać infarmacyju pra PHP';
$strShowSlaveHosts = 'Pakazać zaležnyja servery';
$strShowSlaveStatus = 'Pakazać stan zaležnych serveraŭ';
$strShowStatusBinlog_cache_disk_useDescr = 'Kolkaść tranzakcyjaŭ, jakija vykarystoŭvali časovy dvojkavy keš zapytaŭ, ale jakija pieravysili značeńnie binlog_cache_size i vykarystoŭvali časovy fajł dla zachoŭvańnia vyrazaŭ tranzakcyi.';
$strShowStatusBinlog_cache_useDescr = 'Kolkaść tranzakcyjaŭ, jakija vykarystoŭvali časovy dvojkavy keš zapytaŭ.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Kolkaść časovych tablic na dysku, stvoranych aŭtamatyčna serveram padčas vykanańnia vyrazaŭ. Kali lik Created_tmp_disk_tables vialiki, vy možacie pavialičyć značeńnie tmp_table_size, kab časovyja tablicy zachoŭvalisia ŭ pamiaci, a nie na dysku.';
$strShowStatusCreated_tmp_filesDescr = 'Kolkaść časovych fajłaŭ, stvoranych mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Kolkaść časovych tablic, raźmieščanych u pamiaci, jakija byli aŭtamatyčna stvoranyja serveram padčas vykanańnia vyrazaŭ.';
$strShowStatusDelayed_errorsDescr = 'Kolkaść radkoŭ, zapisanych z INSERT DELAYED, z-za jakich adbylisia peŭnyja pamyłki (peŭna, dublavanyja klučy).';
$strShowStatusDelayed_insert_threadsDescr = 'Kolkaść apracoŭnikaŭ patokaŭ INSERT DELAYED, jakija vykarystoŭvajucca. Kožnaja tablica, na jakoj vykonvajecca INSERT DELAYED atrymlivaje svoj ułasny patok.';
$strShowStatusDelayed_writesDescr = 'Kolkaść zapisanych INSERT DELAYED radkoŭ.';
$strShowStatusFlush_commandsDescr = 'Kolkaść vykananych FLUSH-vyrazaŭ.';
$strShowStatusHandler_commitDescr = 'Kolkaść unutranych COMMIT-vyrazaŭ.';
$strShowStatusHandler_deleteDescr = 'Kolkaść razoŭ vydaleńnia radka z tablicy.';
$strShowStatusHandler_discoverDescr = 'Server MySQL moža zapytacca mašynu zachavańnia dadzienych NDB Cluster, ci viedaje jana tablicu z dadzienym imiem. Heta nazyvajecca vyśviatleńniem. Handler_discover pakazvaje kolkaść vyśviatleńniaŭ tablic.';
$strShowStatusHandler_read_firstDescr = 'Kolkaść razoŭ pieršy zapis byŭ pračytany z indeksu. Kali hetaje značeńnie vialikaje, serveru rekamendujecca rabić vialikuju kolkaść paŭnaindeksavych skanavańniaŭ; naprykład, SELECT col1 FROM foo, uličvajučy, što col1 indeksavanaja.';
$strShowStatusHandler_read_keyDescr = 'Kolkaść zapytaŭ na čytańnie radka z vykarystańniem kluča. Kali jana vialikaja, heta dobraja prykmieta taho, što zapyty i tablicy dobra indeksavanyja.';
$strShowStatusHandler_read_nextDescr = 'Kolkaść zapytaŭ čytańnia nastupny radok u klučavym paradku. Jana pavialičvajecca, kali vykonvajecca zapyt na indeksavanuju kalonku z šeraham abmiežavańniaŭ abo kali adbyvajecca skanavańnie indeksaŭ.';
$strShowStatusHandler_read_prevDescr = 'Kolkaść zapytaŭ čytańnia papiaredni radok u klučavym paradku. Hety metad čytańnia vykarystoŭvajecca pieravažna dla aptymizacyi ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Kolkaść zapytaŭ čytańnia radka fiksavanaj pazycyi. Jana vialikaja, kali vykonvajecca šmat zapytaŭ, jakija patrabujuć sartavańnie vynikaŭ. Mahčyma, prysutničaje šmat zapytaŭ, jakija patrabujuć ad MySQL pierahlad tablicy całkam abo vykonvajucca ab\'jadnańni, jakija niapravilna vykarystoŭvajuć klučy.';
$strShowStatusHandler_read_rnd_nextDescr = 'Kolkaść zapytaŭ čytańnia nastupnaha radka ŭ fajle dadzienych. Jana vialikaja, kali vykonvajecca šmat prahladaŭ tablicy. U ahulnym vypadku heta aznačaje, što tablicy indeksavanyja niapravilna abo zapyty nie napisanyja tak, kab vykarystoŭvać pieravahi indeksaŭ.';
$strShowStatusHandler_rollbackDescr = 'Kolkaść unutranych vyrazaŭ ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Kolkaść zapytaŭ abnaŭleńnia radka ŭ tablicy.';
$strShowStatusHandler_writeDescr = 'Kolkaść zapytaŭ ustaŭki radka ŭ tablicu.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Kolkaść staronak, jakija ŭtrymlivajuć dadzienyja (źmienienych abo niaźmienienych).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Kolkaść źmienienych staronak.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Kolkaść staronak bufernaha pułu, na jakija byŭ atrymany zapyt na skid.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Kolkaść volnych staronak.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Kolkaść staronak, jakija ŭtrymlivajucca ŭ bufernym pule InnoDB. Heta staronki, jakija ŭ biahučy momant čytajucca ci zapisvajucca abo jakija nia mohuć być skinutyja ci vydalenyja z-za peŭnaj pryčyny.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Kolkaść zaniatych staronak tamu, što jany byli vyznačanyja jak administrycyjnyja dadzienyja takija, jak blakavańnie radkoŭ abo adaptyŭny chešavany indeks. Hetaje značeńnie taksama moža być vyličanaje jak Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Ahulny pamier bufernaha pułu, u staronkach.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Kolkaść «vypadkovych» papiarednich čytańniaŭ, zroblenych InnoDB. Heta adbyvajecca, kali zapyt prahladaje značnuju častku tablicy, ale ŭ vypadkovym paradku.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Kolkaść paśladoŭnych papiarednich čytańniaŭ, zroblenych InnoDB. Heta adbyvajecca, kali InnoDB vykonvaje paśladoŭny poŭny prahlad tablicy.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Kolkaść lahičnych zapytaŭ čytańnia, zroblenych InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Kolkaść lahičnych čytańniaŭ, jakija InnoDB nie zmahła adnavić z bufernaha pułu, a tamu zrabiła adnastaronkavaje čytańnie.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Zvyčajna, zapisy ŭ buferny puł InnoDB, zroblenyja ŭ fonie. Adnak, kali nieabchodna pračytać abo stvaryć staronku i čystyja staronki adsutničajuć, nieabchočna pačakać, pakul peŭnyja staronki nia buduć skinutyja. Hety kamputar padličvaje kolkaść takich čakańniaŭ. Kali pamier buferu byŭ vyznačany pravilna, hetaje značeńnie musić być maleńkim.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Kolkaść zapisaŭ, zroblenych u buferny puł InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Kolkaść aperacyjaŭ fsync() na biahučy momant.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Biahučaja kolkaść aperacyjaŭ fsync(), jakija čakajuć vykanańnia.';
$strShowStatusInnodb_data_pending_readsDescr = 'Biahučaja kolkaść čytańniaŭ, jakija čakajuć vykanańnia.';
$strShowStatusInnodb_data_pending_writesDescr = 'Biahučaja kolkaść zapisaŭ, jakija čakajuć vykanańnia.';
$strShowStatusInnodb_data_readDescr = 'Kolkaść pračytanych na biahučy momant dadzienych, u bajtach.';
$strShowStatusInnodb_data_readsDescr = 'Ahulnaja kolkaść čytańniaŭ dadzienych.';
$strShowStatusInnodb_data_writesDescr = 'Ahulnaja kolkaść zapisaŭ dadzienych.';
$strShowStatusInnodb_data_writtenDescr = 'Kolkaść zapisanych na biahučy momant dadzienych, u bajtach.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Kolkaść padvojnych zapisaŭ, jakija byli vykananyja, i kolkaść staronak, jakija byli zapisanyja dla hetaj mety.';
$strShowStatusInnodb_dblwr_writesDescr = 'Kolkaść padvojnych zapisaŭ, jakija byli vykananyja, i kolkaść staronak, jakija byli zapisanyja dla hetaj mety.';
$strShowStatusInnodb_log_waitsDescr = 'Kolkaść vypadkaŭ čakańnia z-za taho, što bufer łohu byŭ zanadta mały, i tamu daviałosia čakać, pakul jon nie ačyścicca.';
$strShowStatusInnodb_log_write_requestsDescr = 'Kolkaść zapisaŭ u łoh.';
$strShowStatusInnodb_log_writesDescr = 'Kolkaść fizyčna vykananych zapisaŭ u łoh-fajł.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Kolkaść synchranizavynych zapisaŭ, zroblenych u łoh-fajł.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Kolkaść synchranizavańniaŭ łoh-fajła, jakija čakajuć vykanańnia.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Kolkaść zapisaŭ u łoh-fajł, jakija čakajuć vykanańnia.';
$strShowStatusInnodb_os_log_writtenDescr = 'Kolkaść bajtaŭ, zapisanych u łoh-fajł.';
$strShowStatusInnodb_pages_createdDescr = 'Kolkaść stvoranych staronak.';
$strShowStatusInnodb_page_sizeDescr = 'Pamier zakampilavanaj staronki InnoDB (pa zmoŭčańni 16KB). Peŭnyja vieličyni vymiarajucca ŭ staronkach; pamier staronki dazvalaje chutka pieravieści jaho ŭ bajty.';
$strShowStatusInnodb_pages_readDescr = 'Kolkaść pračytanych staronak.';
$strShowStatusInnodb_pages_writtenDescr = 'Kolkaść zapisanych staronak.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Kolkaść blakavańniaŭ radkoŭ, čakańnie jakich adbyvajecca na biahučy momant.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Siaredni čas atrymańnia mahčymaści blakavańnia radku, u milisekundach.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ahulny čas čakańnia atrymańnia mahčymaści blakavańnia radku, u milisekundach.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksymalny čas atramańnia mahčymaści blakavańnia radku, u milisekundach.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Kolkaść razoŭ, kali davodziłasia čakać blakavańnie radku.';
$strShowStatusInnodb_rows_deletedDescr = 'Kolkaść radkoŭ, vydalenych z tablic InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Kolkaść radkoŭ, ustaŭlenych u tablicy InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Kolkaś radkoŭ, pračytanych z tablic InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Kolkaść radkoŭ, abnoŭlenych u tablicach InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Kolkaść blokaŭ u kešy klučoŭ, jakija byli źmienienyja, ale jašče nie byli skinutyja na dysk. Vykarystoŭvajecca jak značeńnie Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Kolkaść niavykarystanych blokaŭ u kešy klučoŭ. Hetaje značeńnie možna vykarystoŭvać dla vyznačeńnia stupieni vykarystańnia kešu klučoŭ.';
$strShowStatusKey_blocks_usedDescr = 'Kolkaść vykarystanych blokaŭ u kešy klučoŭ. Hetaje značeńnie z dastatkovaj stupieńniu peŭnaści śviedčyć pra maksymalnuju za ŭvieś čas kolkaść blokaŭ, jakija vykarastoŭvalisia adnačasova.';
$strShowStatusKey_read_requestsDescr = 'Kolkaść zapytaŭ na čytańnie bloku klučoŭ z kešu.';
$strShowStatusKey_readsDescr = 'Kolkaść fizyčnych čytańniaŭ bloku klučoŭ z dyska. Kali značeńnie Key_reads vialikaje, značeńnie key_buffer_size, vidać, vielmi małoje. Kolkaść promachaŭ u keš možna vyličyć jak Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Kolkaść zapytaŭ na zapis bloku klučoŭ u keš.';
$strShowStatusKey_writesDescr = 'Kolkaść fizyčnych zapisaŭ bloku klučoŭ na dysk.';
$strShowStatusLast_query_costDescr = 'Ahulny košt apošniaha zkampilavanaha zapytu, padličanaha aptymizataram zapytaŭ. Karysna dla paraŭnańnia roznych sposabaŭ realizacyi adnaho zapytu. Značeńnie pa zmoŭčańni 0 aznačaje, što nivodny zapyt jašče nia byŭ zkampilavany.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Kolkaść radkoŭ dla zapisu, adkładzienych zapytami INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Kolkaść tablic, jakija byli adkrytyja. Kali adkrytyja tablicy vialikija, značeńnie kešu tablic imavierna vielmi małoje.';
$strShowStatusOpen_filesDescr = 'Kolkaść adkrytych fajłaŭ.';
$strShowStatusOpen_streamsDescr = 'Kolkaść adkrytych patokaŭ (vykarystoŭvajucca pieravažna dla łahavańnia).';
$strShowStatusOpen_tablesDescr = 'Kolkaść adkrytych tablic.';
$strShowStatusQcache_free_blocksDescr = 'Kolkaść volnych blokaŭ pamiaci ŭ kešy zapytaŭ.';
$strShowStatusQcache_free_memoryDescr = 'Kolkaść volnaj pamiaci dla kešu zapytaŭ.';
$strShowStatusQcache_hitsDescr = 'Kolkaść zvarotaŭ da kešu.';
$strShowStatusQcache_insertsDescr = 'Kolkaść zapytaŭ, jakija byli dadanyja ŭ keš.';
$strShowStatusQcache_lowmem_prunesDescr = 'Kołkaść zapytaŭ, jakija byli vydalenyja z kešu, kab vyzvalić pamiać dla kešavańnia novych zapytaŭ. Hetyja źviestki mohuć dapamahčy vyznačyć pamier kešu zapytaŭ. Keš zapytaŭ vykarystoŭvaje statehiju elementa, jaki vykarystoŭvaŭsia najmienš (LRU) dla vyznačeńnia, jakija zapyty treba vydalać z kešu.';
$strShowStatusQcache_not_cachedDescr = 'Kolkaść niekešavalnych zapytaŭ (niekešavalnych abo niekešavanych z-za značeńnia dyrektyvy query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Kolkaść zapytaŭ, jakija prysutničajuć u kešy.';
$strShowStatusQcache_total_blocksDescr = 'Ahulnaja kolkaść blokaŭ u kešy zapytyŭ.';
$strShowStatusReset = 'Skinuć statystyku';
$strShowStatusRpl_statusDescr = 'Stan abaronienaj ad pamyłak replikacyi (jašče nie realizavanaja).';
$strShowStatusSelect_full_joinDescr = 'Kolkaść ab\'jadnańniaŭ, jakija nie vykarystoŭviajuć indeksy. Kali hetaje značeńnie nia roŭnaje 0, varta pravieryć indeksy ŭ tablicach.';
$strShowStatusSelect_full_range_joinDescr = 'Kolkaść ab\'jadnańniaŭ, jakija vykarystoŭvali pošuk pa mascy ŭ metavaj tablicy.';
$strShowStatusSelect_range_checkDescr = 'Kolkaść ab\'jadnańniaŭ biez vykarystańnia klučoŭ, jakija praviarali najaŭnaść kluča paśla kožnaha radka. (Kali hetaje značeńnie nia roŭnaje 0, varta pravieryć indeksy ŭ tablicach.)';
$strShowStatusSelect_rangeDescr = 'Kolkaść ab\'jadnańniaŭ, jakija vykarystoŭvali spałučeńni paloŭ u pieršaj tablicy. (Zvyčajna nie krytyčna, navat kali hetaje značeńnie vialikaje.)';
$strShowStatusSelect_scanDescr = 'Kolkaść ab\'jadnańniaŭ, jakija praviali poŭny prahlad pieršaj tablicy.';
$strShowStatusSlave_open_temp_tablesDescr = 'Kolkaść časovych tablic, jakija ŭ biahučy momant adkrytyja zaležnym SQL-patokam.';
$strShowStatusSlave_retried_transactionsDescr = 'Ahulnaja (ad zahruzki) kolkaść razoŭ, kali zaležny SQL-patok replikacyi paŭtaraŭ tranzakcyi.';
$strShowStatusSlave_runningDescr = 'Hetaje značeńnie roŭnaje "ON", kali server źjaŭlajecca zaležnym i padłučanym da servera, jaki jaho kantraluje.';
$strShowStatusSlow_launch_threadsDescr = 'Kolkaść patokaŭ, jakim spatrebiłasia bolš za slow_launch_time sekundaŭ dla stvareńnia.';
$strShowStatusSlow_queriesDescr = 'Kolkaść zapytaŭ, na vykanantnie jakich spatrebiłasia bolš, čym long_query_time sekundaŭ.';
$strShowStatusSort_merge_passesDescr = 'Kolkaść prachodaŭ, jakija byli zroblenyja alharytmam sartavańnia. Kali hetaje značeńnie vialikaje, varta razhledzić pavieličeńnie značeńnia systemnaj źmiennaj sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Kolkaść sartavańniaŭ, jakija byli zroblenyja z vykarystańniem niekalkich słupkoŭ.';
$strShowStatusSort_rowsDescr = 'Kolkaść adsartavanych radkoŭ.';
$strShowStatusSort_scanDescr = 'Kolkaść sartavańniaŭ, jakija byli zroblenyja padčas prahladu tablicy.';
$strShowStatusTable_locks_immediateDescr = 'Kolkaść razoŭ, kali blakavańnie tablicy było zroblenaje imhnienna.';
$strShowStatusTable_locks_waitedDescr = 'Kolkaść razoŭ, kali blakavańnie tablicy niemahčyma było ažyćciavić imhnienna i peŭny čas pajšoŭ na čakańnie. Kali hetaje značeńnie vialikaje, i isnujuć prablemy z pradukcyjnaściu, varta spačatku aptymizavać zapyty, a paśla abo padzialić tablicu abo tablicy, abo vykarystoŭvać replikacyju.';
$strShowStatusThreads_cachedDescr = 'Kolkaść patokaŭ u kešy patokaŭ. Stupień traplańnia ŭ keš moža być vyličanaja jak Threads_created/Connections. Kali hetaje značeńnie pafarbavanaje ŭ čyrvony koler, varta pavialičyć značeńnie thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Kolkaść adkrytych na biahučy momant złučeńniaŭ.';
$strShowStatusThreads_createdDescr = 'Kolkaść patokaŭ, stvoranych dla kiravańnia złučeńniami. Kali značeńnie Threads_created vialikaje, mahčyma, varta pavialičyć značeńnie thread_cache_size. (Zvyčajna, heta nie daje jakoha-niebudź zaŭvažnaha pavieličeńnia pradukcyjnaści, kali prysutničaje dobraja realizacyja patokaŭ.)';
$strShowStatusThreads_runningDescr = 'Kolkaść patokaŭ, jakija nie źjaŭlajucca śpiačymi.';
$strShowTableDimension = 'Pakazać raźmiernaść tablic';
$strShowTables = 'Pakazać tablicy';
$strShowThisQuery = ' Pakazać hety zapyt znoŭ ';
$strSimplifiedChinese = 'Kitajskaja sproščanaja';
$strSingly = '(asobna)';
$strSize = 'Pamier';
$strSkipQueries = 'Kolkaść (zapytaŭ), jakija treba prapuścić ad pačatku';
$strSlovak = 'Słavackaja';
$strSlovenian = 'Słavienskaja';
$strSocketProblem = '(abo sokiet lakalnaha servera MySQL nie skanfihuravany pravilna)';
$strSortByKey = 'Sartavać pa kluču';
$strSorting = 'Sartavańnie';
$strSort = 'Paradak';
$strSpaceUsage = 'Vykarystańnie prastory';
$strSpanish = 'Hišpanskaja';
$strSplitWordsWithSpace = 'Słovy padzielenyja prahałam (" ").';
$strSQLCompatibility = 'Režym sumiaščalnaści SQL';
$strSQLExportType = 'Typ ekspartu';
$strSQLParserBugMessage = 'Mahčyma, vy znajšli pamyłku ŭ SQL-parsery. Kali łaska, uvažliva praviercie vyš zapyt i adpaviednaść dvukośsiaŭ u im. Inšaj mahčymaj pryčynaj pamyłki moža być toje, što vy zahruzili fajł z dvojkavymi dadzienymi pa-za miežami tekstu, vyłučanaha dvukośsiami. Vy taksama možacie pasprabavać adpravić vaš zapyt z kamandnaha radka MySQL. Paviedamleńnie pra pamyłku servera MySQL pryviedzienaje nižej, moža taksama dapamahčy vam vyśvietlić pryčynu prablemu. Kali vy ŭsio jašče majecie prablemy abo parser paviedamlaje pra pamyłku, a z kamandnaha radku zapyt vykonvajecca, kali łaska, skaracicie vaš uviedzieny SQL-zapyt da adnaho zapytu, jaki vyklikaje pamyłku, i adpraŭcie paviedamleńnie pra pamyłku z blokam dadzienych, padadzienych u sekyci CUT nižej:';
$strSQLParserUserError = 'Zdajecca, vaš SQL-zapyt utrymlivaje pamyłku. Paviedamleńnie pra pamyłku servera MySQL pryviedzienaje nižej, mahčyma, taksama dapamoža vam vyśvietlić pryčynu pamyłki';
$strSQLQuery = 'SQL-zapyt';
$strSQLResult = 'SQL-vynik';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Niapravilny identyfikatar';
$strSQPBugUnclosedQuote = 'Niezakrytaje dvukośsie';
$strSQPBugUnknownPunctuation = 'Nieviadomy symbal punktuacyi';
$strStatCheckTime = 'Apošniaja pravierka';
$strStatCreateTime = 'Stvoranaja';
$strStatement = 'Vyrazy';
$strStatisticsOverrun = 'Na zahružanym servery bajtavyja ličylniki mohuć pieraskokvać koła, tamu statystyka, jakuju pakazvaje MySQL-server, moža być niapravilnaj.';
$strStatUpdateTime = 'Apošniaje abnaŭleńnie';
$strStatus = 'Stan';
$strStorageEngine = 'Mašyna zachavańnia dadzienych';
$strStorageEngines = 'Mašyny zachavańnia dadzienych';
$strStrucCSV = 'CSV';
$strStrucData = 'Strukturu i dadzienyja';
$strStrucExcelCSV = 'CSV dla dadzienych MS Excel';
$strStrucNativeExcel = 'Rodny farmat MS Excel';
$strStrucOnly = 'Tolki strukturu';
$strStructPropose = 'Prapanavanaja struktura tablicy';
$strStructure = 'Struktura';
$strSubmit = 'Adpravić';
$strSuccess = 'Vaš SQL-zapyt byŭ paśpiachova vykanany';
$strSum = 'Usiaho';
$strSwedish = 'Švedzkaja';
$strSwitchToDatabase = 'Pierajści da skapijavanaj bazy dadzienych';
$strSwitchToTable = 'Pierajści da skapijavanaj tablicy';

$strTableAlreadyExists = 'Tablica %s užo isnuje!';
$strTableComments = 'Kamentar da tablicy';
$strTableEmpty = 'Pustaja nazva tablicy!';
$strTableHasBeenDropped = 'Tablica %s była vydalenaja';
$strTableHasBeenEmptied = 'Tablica %s była ačyščanaja';
$strTableHasBeenFlushed = 'Keš tablicy %s byŭ ačyščany';
$strTableMaintenance = 'Absłuhoŭvańnie tablicy';
$strTableOfContents = 'Źmiest';
$strTableOptions = 'Opcyi tablicy';
$strTables = '%s tablic(y)';
$strTableStructure = 'Struktura tablicy';
$strTable = 'Tablica';
$strTakeIt = 'hetaja';
$strTblPrivileges = 'Pryvilei, specyfičnyja dla tablicy';
$strTempData = 'Časovyja dadzienyja';
$strTextAreaLength = ' Z-za vialikaj daŭžyni,<br /> hetaje pole nia moža być adredahavanaje ';
$strThai = 'Tajlandzkaja';
$strThemeDefaultNotFound = 'Tema pa zmoŭčańni %s nia znojdzienaja!';
$strThemeNoPreviewAvailable = 'Papiaredni prahlad niedastupny.';
$strThemeNotFound = 'Tema %s nia znojdzienaja!';
$strThemeNoValidImgPath = 'Dapuščalny šlach da malunkaŭ temy %s nia znojdzieny!';
$strThemePathNotFound = 'Nia znojdzieny šlach da temy %s!';
$strTheme = 'Tema / Styl';
$strThisHost = 'Hety chost';
$strThreads = 'Patoki';
$strThreadSuccessfullyKilled = 'Patok %s byŭ paśpiachova spynieny.';
$strTime = 'Čas';
$strTimeoutInfo = 'Papiaredniaje impartavańnie spyniłasia z-za niedachopu času. Paśla novaj zahruzki impartavańnie budzie praciahnutaje z pazycyi %d.';
$strTimeoutNothingParsed = 'Adnak, padčas apošniaha vykanańnia nijakija dadzienyja byli apracavanyja. Heta zvyčajna značyć, što phpMyAdmin nia zmoža skončyć hetaje impartavańnia, kali vy nie pavialičycie limity vykanańnia php-skryptoŭ.';
$strTimeoutPassed = 'Vyjšaŭ dazvoleny čas vykanańnia skrypta. Kali vy chočacie zavieršyć impartavańnie, kali łaska, zahruzicie fajł znoŭ i impartavańnie ŭznavicca.';
$strToggleScratchboard = 'Pakazać papiaredni prahlad';
$strTotalUC = 'Ahułam';
$strTotal = 'usiaho';
$strTraditionalChinese = 'Tradycyjnaja kitajskaja';
$strTraditionalSpanish = 'Tradycyjnaja hišpanskaja';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'Kaardynatar pierakładu';
$strTransformation_application_octetstream__download = 'Pakazvaje spasyłku dla zahruzki dvojkavych dadzienych pola. Vy možacie vykarystoŭvać pieršuju opcyju dla vyznačeńnia imia fajła abo vykarystoŭvajcie druhuju opcyju jak imia pola, jakoje ŭtrymlivaje imia fajła. Kali vy vykarystoŭvajecie druhuju opcyju, vam treba pakinuć pieršaje pole pustym';
$strTransformation_application_octetstream__hex = 'Pakazvaje dadzienyja ŭ šasnaccatkavym vyhladzie. Apcyjanalny pieršy parametar vyznačaje častatu dadavańnia prahała (pa-zmoŭčańni — praz kožnyja 8 bitaŭ).';
$strTransformation_image_jpeg__inline = 'Pakazvaje naciskalny eskiz; Opcyi — maksymalnaja šyrynia i vyšynia ŭ piksełach. Zachoŭvajucca pačatkovyja praporcyi.';
$strTransformation_image_jpeg__link = 'Pakazvaje spasyłku dla zahruzki hetaha malunku.';
$strTransformation_image_png__inline = 'Prahladzieć malunak image/jpeg: ubudavany';
$strTransformation_text_plain__external = 'TOLKI DLA LINUX: Zapuskaje źniešniuju prahramu i pieradaje joj dadzienyja pola praz standartny ŭvod. Viartaje standartny vyvad prahramy. Prahrama pa zmoŭčańni — Tidy, jakaja drukuje čysty HTML-kod. Ź mierkavańniaŭ biaśpieki, vam treba ŭručnuju adredahavać fajł libraries/transformations/text_plain__external.inc.php i paznačyć śpis prahramaŭ, jakija vy chočacie zrabić dastupnymi. Pieršaja opcyja — tady numar prahramy, jakuju vy chočacie vykarystoŭvać, druhaja opcyja — parametry dla prahramy. Treciaja opcyja, kali vyznačanaja jak 1, skanvertuje dadzienyja z standartnaha vyvadu vykarystoŭvajučy htmlspecialchars() (Pa zmoŭčańni 1). Čaćviertaja opcyja, kali vyznačanaja jak 1, praduchilić pieranos pa słovach, kab pierakanacca, što ŭvieś vychadny patok budzie vyviedzieny ŭ adzin radok (Pa zmoŭčańni 1).';
$strTransformation_text_plain__formatted = 'Pakazvaje źmieściva pola jak-jość, biez apracoŭki jaho funkcyjaj htmlspecialchars(). Tamu razumiejecca, što pole ŭtrymlivaje karektny HTML-kod.';
$strTransformation_text_plain__imagelink = 'Pakazvaje malunak i spasyłku, pole źmiaščaje nazvu fajła. Pieršaja opcyja — prefiks adrasu kštałtu "http://www.example.com/". Druhaja i treciaja opcyi — šyrynia i vyšynia ŭ piksełach.';
$strTransformation_text_plain__link = 'Pakazvaje spasyłku; pole źmiaščaje nazvu fajła. Pieršaja opcyja — prefiks adrasu kštałtu "http://www.example.com/". Druhaja opcyja — nazva spasyłki.';
$strTransformation_text_plain__sql = 'Farmatuje tekst jak SQL-zapyt z padśviečanym syntaksisam.';
$strTransformation_text_plain__substr = 'Pakazvaje tolki častku radka. Pieršaja opcyja — kolkaść symbalaŭ ad pačatku radka, jakija treba prapuścić (Pa zmoŭčańni 0). Druhaja opcyja — kolkaść symbalaŭ, jakija treba viarnuć (Pa zmoŭčańni: da kanca radka). Treciaja opcyja — radok, jaki treba dałučyć da kanca i/abo z pačatku radka, kali adbudziecca ŭsiačeńnie (Pa zmoŭčańni: "...") .';
$strTruncateQueries = 'Abrazać pakazanyja zapyty';
$strTurkish = 'Tureckaja';
$strType = 'Typ';

$strUkrainian = 'Ukrainskaja';
$strUncheckAll = 'Źniać usie adznaki';
$strUnicode = 'Junikod';
$strUnique = 'Unikalnaje';
$strUnknown = 'nieviadoma';
$strUnselectAll = 'Źniać usie adznaki';
$strUnsupportedCompressionDetected = 'Vy pasprabavali zahruzić fajł z metadam ścisku, jaki niepadtrymlivajecca (%s). Jahonaja padtrymka abo nie realizavanaja, abo adklučanaja ŭ vašaj kanfihuracyi.';
$strUpdatePrivMessage = 'Vy źmianili pryvilei dla %s.';
$strUpdateProfileMessage = 'Profil byŭ adnoŭleny.';
$strUpdateQuery = 'Abnavić zapyt';
$strUpdComTab = 'Za infarmacyjaj jak abnavić tablicu column_comments źviarniciesia, kali łaska, da dakumentacyi';
$strUpgrade = 'Vam treba abnavić %s da versii %s ci paźniejšaj.';
$strUploadLimit = 'Vy, musić, pasprabavali zahruzić vielmi vialiki fajł. Kali łaska, źviarniciesia da %sdakumentacyi%s dla vyśviatleńnia sposabaŭ abyjści hetaje abmiežavańnie.';
$strUploadsNotAllowed = 'Zahruzki fajłaŭ nie dazvolenyja na hetym servery.';
$strUsage = 'Vykarystańnie';
$strUseBackquotes = 'Zvarotnaje dvukośsie ŭ imionach tablic i paloŭ';
$strUsedPhpExtensions = 'Vykarystoŭvajucca pašyreńni PHP';
$strUseHostTable = 'Vykarystoŭvać tablicu chostaŭ';
$strUserAlreadyExists = 'Karystalnik %s užo isnuje!';
$strUserEmpty = 'Pustoje imia karystalnika!';
$strUser = 'Karystalnik';
$strUserName = 'Imia karystalnika';
$strUserNotFound = 'Vyłučany karystalnik nia znojdzieny ŭ tablicy pryvilejaŭ.';
$strUserOverview = 'Karystalniki';
$strUsersDeleted = 'Vybranyja karystalniki byli paśpiachova vydalenyja.';
$strUsersHavingAccessToDb = 'Karystalniki z pravami dostupu da "%s"';
$strUseTabKey = 'Vykarystoŭvajcie klavišu TAB dla pieramiaščeńnia ad značeńnia da značeńnia abo CTRL+strełki dla pieramiaščeńnia ŭ luboje inšaje miesca';
$strUseTables = 'Vykarystoŭvać tablicy';
$strUseTextField = 'Vykarystoŭvać tekstavaje pole';
$strUseThisValue = 'Vykarystoŭvać heta značeńnie';

$strValidateSQL = 'Pravieryć SQL';
$strValidatorError = 'Niemahčyma prainicyjalizavać pravierku SQL. Kali łaska, praviercie, ci ŭstalavanyja ŭ vas nieabchodnyja pašyreńni PHP, jak heta apisana ŭ %sdakumentacyi%s.';
$strValue = 'Značeńnie';
$strVar = 'Źmiennaja';
$strVersionInformation = 'Infarmacyja pra versiju';
$strViewDumpDatabases = 'Prahladzieć damp (schiemu) bazaŭ dadzienych';
$strViewDumpDB = 'Prahladzieć damp (schumu) bazy dadzienych';
$strViewDump = 'Prahladzieć damp (schiemu) tablicy';
$strViewHasBeenDropped = 'Vyhlad %s byŭ vydaleny';
$strViewMaxExactCount = 'U hetym prahladzie bolš za %d radkoŭ. Kali łaska, źviarniciesia da %sdakumentacyi%s.';
$strView = 'Vyhlad';

$strWebServerUploadDirectoryError = 'Niemahčyma adkryć paznačanuju vami tečku dla zahruzki fajłaŭ';
$strWebServerUploadDirectory = 'tečka veb-servera dla zahruzki fajłaŭ';
$strWelcome = 'Zaprašajem u %s';
$strWestEuropean = 'Zachodnieeŭrapiejskaja';
$strWildcard = 'šablon';
$strWindowNotFound = 'Niemahčyma abnavić metavaje akno braŭzera. Mahčyma, vy zakryli baćkoŭskaje akno abo nałady biaśpieki vašaha braŭzera skanfihuranyja na blakavańnie mižvakonnych ŭzajemadziejańniaŭ';
$strWithChecked = 'Z adznačanymi:';
$strWriteRequests = 'Zapytaŭ zapisu';
$strWrongUser = 'Niapravilny łahin/parol. U dostupie admoŭlena.';

$strXML = 'XML';

$strYes = 'Tak';

$strZeroRemovesTheLimit = 'Zaŭvaha: Paznačeńnie hetych opcyjaŭ jak 0 (nul) zdymaje abmiežavańnie.';
$strZip = 'archivavany ŭ zip';

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
