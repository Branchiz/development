<?php
/* $Id: swedish-iso-8859-1.inc.php 11124 2008-02-13 17:32:43Z lem9 $ */

/*
 * Translated by Bj�rn T. Hallberg <bjornth at users.sourceforge.net>
 */

$charset = 'iso-8859-1';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('S�n', 'M�n', 'Tis', 'Ons', 'Tors', 'Fre', 'L�r');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y kl %H:%M';
$timespanfmt = '%s dagar, %s timmar, %s minuter och %s sekunder';

$strAbortedClients = 'Avbrutna';
$strAccessDeniedCreateConfig = 'Trolig orsak till detta �r att du inte skapade en konfigurationsfil. Du vill kanske anv�nda %1$supps�ttningsskript%2$s f�r att skapa en.';
$strAccessDeniedExplanation = 'phpMyAdmin f�rs�kte skapa en f�rbindelse till MySQL-servern, men servern nekade uppkopplingen. Kontrollera v�rd, anv�ndarnamn och l�senord i config.inc.php och f�rvissa dig om att de st�mmer �verens med informationen fr�n administrat�ren av MySQL-servern.';
$strAccessDenied = '�tkomst nekad';
$strAction = '�tg�rd';
$strAddAutoIncrement = 'L�gg till AUTO_INCREMENT-v�rde';
$strAddClause = 'L�gg till %s';
$strAddConstraints = 'L�gg till restriktioner';
$strAddDeleteColumn = 'L�gg till/ta bort f�ltkolumner';
$strAddDeleteRow = 'L�gg till/ta bort villkorsrader';
$strAddFields = 'L�gg till %s f�lt';
$strAddHeaderComment = 'L�gg till egen kommentar i huvud (\\n delar rader)';
$strAddIntoComments = 'L�gg till i kommentarer';
$strAddNewField = 'L�gg till f�lt';
$strAddPrivilegesOnDb = 'L�gg till privilegier till f�ljande databas';
$strAddPrivilegesOnTbl = 'L�gg till privilegier till f�ljande tabell';
$strAddSearchConditions = 'L�gg till s�kvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'L�gg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAdministration = 'Administration';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'G� tillbaka till f�reg�ende sida';
$strAfterInsertNewInsert = 'L�gg till ytterligare en ny rad';
$strAfterInsertNext = '�ndra n�sta rad';
$strAfterInsertSame = 'G� tillbaka till denna sida';
$strAll = 'Alla';
$strAllowInterrupt = 'Till�t avbrott av import ifall skriptet uppt�cker att det �r n�ra tidsbegr�nsningen. Detta kan vara ett bra s�tt att importera stora filer, men det kan bryta transaktioner.';
$strAllTableSameWidth = 'Visa alla tabeller med samma bredd';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAndThen = 'och sedan';
$strAngularLinks = 'Vinklade l�nkar';
$strAnIndex = 'Ett index har lagts till f�r %s';
$strAnyHost = 'Vilken v�rd som helst';
$strAnyUser = 'Vilken anv�ndare som helst';
$strAny = 'Vem som helst';
$strApproximateCount = 'Kan vara ungef�rligt. Se FAQ 3.11';
$strAPrimaryKey = 'En prim�r nyckel har lagts till f�r %s';
$strArabic = 'Arabisk';
$strArmenian = 'Armenisk';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';
$strAutomaticLayout = 'Automatisk layout';

$strBack = 'Bak�t';
$strBaltic = 'Baltisk';
$strBeginCut = 'START URKLIPP';
$strBeginRaw = 'START R�TEXT';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - �ndra inte';
$strBinaryLog = 'Bin�r logg';
$strBinLogEventType = 'Typ av h�ndelse';
$strBinLogInfo = 'Information';
$strBinLogName = 'Loggnamn';
$strBinLogOriginalPosition = 'Ursprunglig position';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server-ID';
$strBookmarkAllUsers = 'L�t varje anv�ndare f� tillg�ng till detta bokm�rke';
$strBookmarkCreated = 'Bokm�rket %s har skapats';
$strBookmarkDeleted = 'Bokm�rket har tagits bort.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkReplace = 'Ers�tt befintligt bokm�rke med samma namn';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'Visa endast';
$strBrowseDistinctValues = 'Visa distinkta v�rden';
$strBrowseForeignValues = 'Visa fr�mmande v�rden';
$strBrowse = 'Visa';
$strBufferPoolActivity = 'Buffertaktivitet';
$strBufferPool = 'Buffertutrymme';
$strBufferPoolUsage = 'Buffertanv�ndning';
$strBufferReadMissesInPercent = 'L�smissar i %';
$strBufferReadMisses = 'L�smissar';
$strBufferWriteWaitsInPercent = 'Skrivv�ntanden i %';
$strBufferWriteWaits = 'Skrivv�ntanden';
$strBulgarian = 'Bulgarisk';
$strBusyPages = 'Upptagna sidor';
$strBzError = 'phpMyAdmin kunde inte komprimera SQL-satserna p� grund av ett trasigt Bz2-till�gg i denna PHP-version. Det rekommenderas starkt att s�tta direktivet <code>$cfg[\'BZipDump\']</code> i din phpMyAdmin-konfigurationsfil till <code>FALSE</code>. Om du vill anv�nda Bz2-komprimering, b�r du uppgradera till en senare PHP-version. Se PHP:s buggrapport %s f�r detaljer.';
$strBzip = '"bzippad"';

$strCalendar = 'Kalender';
$strCancel = 'Avbryt';
$strCanNotLoadExportPlugins = 'Kunde inte ladda export-till�gg. Kontrollera din installation.';
$strCanNotLoadImportPlugins = 'Kunde inte ladda till�gg f�r import. Kontrollera din installation!';
$strCannotLogin = 'Kan ej logga in p� MySQL-server';
$strCantLoad = 'kan inte ladda %s-till�gg,<br />var god kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda till�ggen iconv eller recode som beh�vs f�r teckenupps�ttningsomvandling. Antingen konfigurera PHP f�r att till�ta dessa till�gg eller inaktivera teckenupps�ttningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn p� index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte anv�nda varken funktionen iconv, libiconv eller recode_string, fast�n de n�dv�ndiga till�ggen verkar vara laddade. Kontrollera din PHP-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCaseInsensitive = 'skiftl�gesok�nsligt';
$strCaseSensitive = 'skiftl�gesk�nsligt';
$strCentralEuropean = 'Centraleuropeisk';
$strChangeCopyModeCopy = '... beh�ll den gamla.';
$strChangeCopyModeDeleteAndReload = ' ... ta bort den gamla fr�n anv�ndartabellerna och ladda om privilegierna efter�t.';
$strChangeCopyModeJustDelete = ' ... ta bort den gamla fr�n anv�ndartabellerna.';
$strChangeCopyModeRevoke = ' ... upph�v alla aktiva privilegier fr�n dan gamla och ta bort den efter�t.';
$strChangeCopyMode = 'Skapa en ny anv�ndare med samma privilegier och ...';
$strChangeCopyUser = '�ndra inloggningsinformation / Kopiera anv�ndare';
$strChangeDisplay = 'V�lj f�lt som ska visas';
$strChange = '�ndra';
$strChangePassword = 'Byt l�senord';
$strCharsetOfFile = 'Filens teckenupps�ttning:';
$strCharsetsAndCollations = 'Teckenupps�ttningar och kollationeringar';
$strCharsets = 'Teckenupps�ttningar';
$strCharset = 'Teckenupps�ttning';
$strCheckAll = 'Markera alla';
$strCheckOverhead = 'Markera ooptimerade';
$strCheckPrivs = 'Kontrollera privilegier';
$strCheckPrivsLong = 'Kontrollera privilegier f�r databas &quot;%s&quot;.';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'V�lj en sida att redigera';
$strColComFeat = 'Visning av kolumnkommentarer';
$strCollation = 'Kollationering';
$strColumnNames = 'Kolumn-namn';
$strColumnPrivileges = 'Kolumnspecifika privilegier';
$strCommand = 'Kommando';
$strCommentsForTable = 'KOMMENTARER F�R TABELL';
$strComments = 'Kommentarer';
$strCompatibleHashing = 'Kompatibel med MySQL&nbsp;4.0';
$strCompleteInserts = 'Kompletta infogningar';
$strCompression = 'Komprimering';
$strCompressionWillBeDetected = 'Importerad fils komprimering kommer automatiskt detekteras fr�n: %s';
$strConfigDefaultFileError = 'Kunde inte ladda standardkonfiguration fr�n: "%1$s"';
$strConfigFileError = 'phpMyAdmin kunde inte l�sa din konfigurationsfil!<br />Detta kan intr�ffa om PHP hittar ett fel i den eller om PHP inte hittar filen.<br />Anropa konfigurationsfilen direkt mha l�nken nedan och l�s PHP:s felmeddelande(n) som du erh�ller. I de flesta fall saknas ett citationstecken eller ett semikolon n�gonstans.<br />Om du erh�ller en tom sida �r allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna f�r tabellen %s';
$strConnectionError = 'Kan ej skapa f�rbindelse: ogiltiga inst�llningar.';
$strConnections = 'Uppkopplingar';
$strConstraintsForDumped = 'Restriktioner f�r dumpade tabeller';
$strConstraintsForTable = 'Restriktioner f�r tabell';
$strControluserFailed = 'Uppkoppling f�r controluser enligt din konfiguration misslyckades.';
$strCookiesRequired = 'Kakor (cookies) m�ste till�tas f�r att g� vidare.';
$strCopyDatabaseOK = 'Databas %s har kopierats till %s';
$strCopy = 'Kopiera';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCopyTableSameNames = 'Kan inte kopiera tabell till samma namn!';
$strCouldNotKill = 'phpMyAdmin kunde inte d�da tr�d %s. Troligtvis har den redan avslutats.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE f�re kopiering';
$strCreateIndex = 'Skapa ett index f�r&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCreatePdfFeat = 'Skapande av PDF-sidor';
$strCreateRelation = 'Skapa relation';
$strCreate = 'Skapa';
$strCreateTable  = 'Skapa tabell';
$strCreateUserDatabase = 'Databas f�r anv�ndare';
$strCreateUserDatabaseName = 'Skapa databas med samma namn och ge alla privilegier';
$strCreateUserDatabaseNone = 'Ingen';
$strCreateUserDatabaseWildcard = 'Ge alla privilegier till namn med jokertecken (username\_%)';
$strCreationDates = 'Skapad/Uppdaterad/Kontrollerad datum';
$strCriteria = 'Villkor';
$strCroatian = 'Kroatisk';
$strCSV = 'CSV';
$strCyrillic = 'Kyrillisk';
$strCzechSlovak = 'Tjeckisk-Slovakisk';
$strCzech = 'Tjeckisk';

$strDanish = 'Dansk';
$strDatabase = 'Databas';
$strDatabaseEmpty = 'Databasens namn �r tomt!';
$strDatabaseExportOptions = 'Exportalternativ f�r databas';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabases = 'Databaser';
$strDatabasesDropped = '%s databaser har tagits bort.';
$strDatabasesStats = 'Databas-statistik';
$strDatabasesStatsDisable = 'St�ng av statistik';
$strDatabasesStatsEnable = 'Sl� p� statistik';
$strDatabasesStatsHeavyTraffic = 'Anm: Att sl� p� databasstatistik h�r kan orsaka tung trafik mellan webb- och MySQL-servern.';
$strData = 'Data';
$strDataDict = 'Datalexikon';
$strDataOnly = 'Enbart data';
$strDataPages = 'Sidor inneh�llande data';
$strDBComment = 'Databaskommentar: ';
$strDBCopy = 'Kopiera databas till';
$strDbIsEmpty = 'Databasen verkar vara tom!';
$strDbPrivileges = 'Databasspecifika privilegier';
$strDBRename = 'D�p om databasen till';
$strDbSpecific = 'databasspecifik';
$strDefaultEngine = '%s �r standardlagringsmotorn p� denna MySQL-server.';
$strDefault = 'Standard';
$strDefaultValueHelp = 'F�r standardv�rden, ange endast ett enstaka v�rde, utan bak�tstreck eller citattecken, enligt formatet: a';
$strDefragment = 'Defragmentera tabell';
$strDelayedInserts = 'Anv�nd f�rdr�jda infogningar';
$strDeleteAndFlushDescr = 'Detta �r det renaste s�ttet, men omladdning av privilegierna kan ta en stund.';
$strDeleteAndFlush = 'Ta bort anv�ndarna och ladda om privilegierna efter�t.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleteNoUsersSelected = 'Inga anv�ndare valda f�r borttagning!';
$strDelete = 'Radera';
$strDeleteRelation = 'Ta bort relation';
$strDeleting = 'Tar bort %s';
$strDelimiter = 'Avgr�nsare';
$strDelOld = 'Nuvarande sida har referenser till tabeller som inte l�ngre existerar. Vill du ta bort dessa referenser?';
$strDescending = 'Fallande';
$strDescription = 'Beskrivning';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Visningsf�ltet visas i rosa. F�r att ange ett f�lt som visningsf�lt, klicka p� ikonen "V�lj f�lt som ska visas" och klicka sedan p� l�mpligt f�ltnamn.';
$strDictionary = 'lexikon';
$strDirectLinks = 'Direkta l�nkar';
$strDirtyPages = 'Orena sidor';
$strDisabled = 'Inaktiverat';
$strDisableForeignChecks = 'St�ng av kontroll av fr�mmande nycklar';
$strDisplayFeat = 'Visningsfunktionaliteter';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utf�r en "Query By Example" (jokertecken: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Vill du verkligen ';
$strDropDatabaseStrongWarning = 'Du h�ller p� att F�RG�RA en hel databas!';
$strDrop = 'Radera';
$strDropUsersDb = 'Ta bort databaserna med samma namn som anv�ndarna.';
$strDumpingData = 'Data i tabell';
$strDumpSaved = 'SQL-satserna har sparats till filen %s.';
$strDumpXRows = 'Visa %s rader med b�rjan p� rad %s.';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = '�ndra privilegier';
$strEffective = 'Effektivt';
$strEmptyResultSet = 'MySQL returnerade ett tomt resultat (dvs inga rader).';
$strEmpty = 'T�m';
$strEnabled = 'Aktiverat';
$strEncloseInTransaction = 'Inneslut export i en transaktion';
$strEndCut = 'SLUT URKLIPP';
$strEndRaw = 'SLUT R�TEXT';
$strEnd = 'Slutet';
$strEngineAvailable = '%s �r tillg�nglig p� denna MySQL-server.';
$strEngineDisabled = '%s har inaktiverats p� denna MySQL-server.';
$strEngines = 'Motorer';
$strEngineUnsupported = 'Denna MySQL-server har inte st�d f�r lagringsmotorn %s.';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' Obs! MySQL privilegiumnamn anges p� engelska ';
$strError = 'Fel';
$strErrorInZipFile = 'Fel i ZIP-arkiv:';
$strErrorRelationAdded = 'Fel: Relation inte tillagd.';
$strErrorRelationExists = 'Fel: Relation finns redan.';
$strErrorRenamingTable = 'Fel vid namnbyte p� tabell %1$s till %2$s';
$strErrorSaveTable = 'Fel vid sparande av koordinater f�r Designer.';
$strEscapeWildcards = 'Jokerteknen _ och % m�ste f�reg�s av ett \ f�r att anv�ndas i egentlig betydelse';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estnisk';
$strEvent = 'H�ndelse';
$strExcelEdition = 'Excel-version';
$strExecuteBookmarked = 'Utf�r bokm�rkt fr�ga';
$strExplain = 'F�rklara SQL-kod';
$strExport = 'Exportera';
$strExportImportToScale = 'Exportera/importera till skala';
$strExportMustBeFile = 'Vald export-typ m�ste sparas i fil!';
$strExtendedInserts = 'Ut�kade infogningar';
$strExtra = 'Extra';

$strFailedAttempts = 'Misslyckade f�rs�k';
$strField = 'F�lt';
$strFieldHasBeenDropped = 'F�ltet %s har tagits bort';
$strFieldInsertFromFileTempDirNotExists = 'Fel vid flytt av uppladdad fil, se FAQ 1.11';
$strFieldsEnclosedBy = 'F�lten omges av';
$strFieldsEscapedBy = 'Specialtecken i f�lt f�reg�s av';
$strFields = 'F�lt';
$strFieldsTerminatedBy = 'F�lten avslutas med';
$strFileAlreadyExists = 'Filen %s finns redan p� servern. �ndra filnamnet eller kryssa i skriv �ver-alternativet.';
$strFileCouldNotBeRead = 'Filen kunde inte l�sas';
$strFileNameTemplateDescriptionDatabase = 'databasnamn';
$strFileNameTemplateDescription = 'Detta v�rde tolkas mha %1$sstrftime%2$s, s� du kan anv�nda str�ngar med tidsformatering. Dessutom kommer f�ljande omvandlingar att ske: %3$s. �vrig text beh�lls som den �r.';
$strFileNameTemplateDescriptionServer = 'servernamn';
$strFileNameTemplateDescriptionTable = 'tabellnamn';
$strFileNameTemplate = 'Mall f�r filnamn';
$strFileNameTemplateRemember = 'kom ih�g mall';
$strFiles = 'Filer';
$strFileToImport = 'Fil att importera';
$strFixed = 'fast';
$strFlushPrivilegesNote = 'Anm: phpMyAdmin h�mtar anv�ndarnas privilegier direkt fr�n MySQL:s privilegiumtabeller. Inneh�llet i dessa tabeller kan skilja sig fr�n privilegierna som servern anv�nder ifall manuella �ndringar har gjorts. I detta fall b�r du %sladda om privilegierna%s innan du forts�tter.';
$strFlushQueryCache = 'Rensa fr�gecache';
$strFlushTable = 'Rensa tabell';
$strFlushTables = 'St�ng alla tabeller';
$strFontSize = 'Teckenstorlek';
$strForeignKeyError = 'Fel vid skapande av fr�mmande nyckel (kontrollera datatyper)';
$strFormat = 'Format';
$strFormEmpty = 'V�rde saknas i formul�ret!';
$strFreePages = 'Fria sidor';
$strFullText = 'Fullst�ndiga texter';
$strFunction = 'Funktion';
$strFunctions = 'Funktioner';

$strGenBy = 'Genererad av';
$strGeneralRelationFeat = 'Allm�nna relationsfunktionaliteter';
$strGenerate = 'Generera';
$strGeneratePassword = 'Generera l�senord';
$strGenTime = 'Skapad';
$strGeorgian = 'Georgisk';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globala privilegier';
$strGlobalValue = 'Globalt v�rde';
$strGo = 'K�r';
$strGrantOption = 'Grant';
$strGreek = 'Grekisk';
$strGzip = '"gzippad"';

$strHandler = 'Hanterare';
$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du m�ste v�lja minst en kolumn som ska visas';
$strHebrew = 'Hebreisk';
$strHelp = 'Hj�lp';
$strHexForBLOB = 'Anv�nd hexadecimal f�r BLOB';
$strHide = 'D�lj';
$strHideShowAll = 'D�lj/visa alla';
$strHideShowNoRelation = 'D�lj/visa tabeller utan relationer';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHostEmpty = 'V�rdnamnet �r tomt!';
$strHost = 'V�rd';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungersk';

$strIcelandic = 'Isl�ndska';
$strId = 'ID';
$strIdxFulltext = 'Heltext';
$strIEUnsupported = 'Internet Explorer saknar st�d f�r denna funktion.';
$strIgnoreDuplicates = 'Ignorera dubblerade rader';
$strIgnore = 'Ignorera';
$strIgnoreInserts = 'Anv�nd IGNORE i infogningar';
$strImportExportCoords = 'Importera/exportera koordinater f�r PDF-schema';
$strImportFiles = 'Importera filer';
$strImportFormat = 'Format p� importerad fil';
$strImport = 'Importera';
$strImportSuccessfullyFinished = 'Importen har avslutats korrekt, %d fr�gor utf�rda.';
$strIndexes = 'Index';
$strIndexesSeemEqual = 'F�ljande index verkar vara lika och ett av dem b�r tas bort:';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndex = 'Index';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexWarningTable = 'Problem med index f�r tabell `%s`';
$strInnoDBAutoextendIncrement = 'Automatisk ut�kningsstorlek';
$strInnoDBAutoextendIncrementDesc = 'Till�kningsstorleken vid automatisk ut�kning av tabellutrymme n�r det blir fullt.';
$strInnoDBBufferPoolSize = 'Buffertstorlek';
$strInnoDBBufferPoolSizeDesc = 'Storleken p� minnesbufferten som InnoDB anv�nder f�r cache av data och index till sina tabeller.';
$strInnoDBDataFilePath = 'Datafiler';
$strInnoDBDataHomeDirDesc = 'Den gemensamma delen av s�kv�gen f�r alla InnoDB-datafiler.';
$strInnoDBDataHomeDir = 'Hemkatalog f�r data';
$strInnoDBPages = 'sidor';
$strInnoDBRelationAdded = 'InnoDB relation tillagd';
$strInnodbStat = 'InnoDB-status';
$strInsecureMySQL = 'Din konfigurationsfil inneh�ller inst�llningar (root-konto utan l�senord) som motsvarar MySQL:s privilegierade standardkonto. Din MySQL-server k�rs med denna standardinst�llning och �r �ppen f�r intr�ng, s� du b�r verkligen t�ppa till detta s�kerhetsh�l.';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertedRowId = 'Tillagd rads id:';
$strInsertedRows = 'Tillagda rader:';
$strInsert = 'L�gg till';
$strInternalNotNecessary = '* En intern relation �r inte n�dv�ndig n�r den �ven finns i InnoDB.';
$strInternalRelationAdded = 'Intern relation tillagd';
$strInternalRelations = 'Interna relationer';
$strInUse = 'anv�nds';
$strInvalidAuthMethod = 'Ogiltig metod f�r autentisering angiven i konfiguration:';
$strInvalidColumnCount = 'Antalet kolumner m�ste vara st�rre �n noll.';
$strInvalidColumn = 'Ogiltig kolumn (%s) angiven!';
$strInvalidCSVFieldCount = 'Ogiltigt antal f�lt i CSV-indata p� rad %d.';
$strInvalidCSVFormat = 'Ogiltigt format i CSV-indata p� rad %d.';
$strInvalidCSVParameter = 'Ogiltig parameter f�r CSV-import: %s';
$strInvalidDatabase = 'Ogiltig databas';
$strInvalidFieldAddCount = 'Du m�ste l�gga till �tminstone ett f�lt.';
$strInvalidFieldCount = 'Tabell m�ste ha �tminstone ett f�lt.';
$strInvalidLDIImport = 'Detta till�gg st�der inte komprimerade importer!';
$strInvalidRowNumber = '%d �r inte ett giltigt radnummer.';
$strInvalidServerHostname = 'Ogiltigt v�rdnamn f�r server %1$s. Var god granska din konfiguration.';
$strInvalidServerIndex = 'Ogiltigt serverindex: "%s"';
$strInvalidTableName = 'Ogiltigt tabellnamn';

$strJapanese = 'Japansk';
$strJoins = 'F�reningar';
$strJumpToDB = 'Hoppa till databas &quot;%s&quot;.';
$strJustDeleteDescr = 'De &quot;borttagna&quot; anv�ndarna kommer fortfarande kunna komma �t servern som vanligt tills privilegierna laddas om.';
$strJustDelete = 'Ta endast bort anv�ndarna fr�n privilegiumtabellerna.';

$strKeepPass = '�ndra inte l�senordet';
$strKeyCache = 'Nyckelcache';
$strKeyname = 'Nyckel';;
$strKill = 'D�da';
$strKnownExternalBug = 'Funktionaliteten f�r %s p�verkas av en k�nd bugg, se %s';
$strKorean = 'Koreansk';

$strLandscape = 'Liggande';
$strLanguage = 'Spr�k';
$strLanguageUnknown = 'Ok�nt spr�k: %1$s.';
$strLatchedPages = 'L�sta sidor';
$strLatexCaption = 'Tabellrubrik';
$strLatexContent = 'Inneh�ll i tabell __TABLE__';
$strLatexContinuedCaption = 'Fortsatt tabellrubrik';
$strLatexContinued = '(forts�ttning)';
$strLatexIncludeCaption = 'Inkludera tabellrubrik';
$strLatexLabel = 'Etikett';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktur f�r tabell __TABLE__';
$strLatvian = 'Lettiska';
$strLDI = 'CSV mha LOAD DATA';
$strLDILocal = 'Anv�nd nyckelordet LOCAL';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'Rader per sida';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'L�nk ej funnen';
$strLinksTo = 'L�nkar till';
$strLithuanian = 'Litauisk';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Textfilens plats';
$strLoginInformation = 'Inloggningsinformation';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';
$strLogPassword = 'L�senord:';
$strLogServer = 'Server';
$strLogUsername = 'Anv�ndarnamn:';
$strLongOperation = 'Denna operation kan ta l�ng tid. F�rs�tt �nd�?';

$strMaxConnects = 'Max. samtidiga f�rbindelser';
$strMaximalQueryLength = 'Maximal l�ngd p� skapad fr�ga';
$strMaximumSize = 'Maximal storlek: %s%s';
$strMbExtensionMissing = 'PHP-till�gget mbstring kunde inte hittas och det verkar som om du anv�nder flerbitars teckenupps�ttning. phpMyAdmin kan inte dela upp str�ngar korrekt utan till�gget mbstring, vilket kan leda till ov�ntade resultat.';
$strMbOverloadWarning = 'Du har aktiverat mbstring.func_overload i din PHP-konfiguration. Detta alternativ �r inkompatibelt med phpMyAdmin och kan orsaka att en del data f�rst�rs!';
$strMIME_available_mime = 'Tillg�ngliga MIME-typer';
$strMIME_available_transform = 'Tillg�ngliga omvandlingar';
$strMIME_description = 'Beskrivning';
$strMIME_MIMEtype = 'MIME-typ';
$strMIME_nodescription = 'Ingen beskrivning f�r denna omvandling finns tillg�nglig.<br />V�nligen fr�ga upphovsmannen vad %s g�r.';
$strMIME_transformation_note = 'F�r en lista med tillg�ngliga omvandlingsparametrar och deras MIME-typomvandlingar, klicka p� %somvandlingsbeskrivningar%s';
$strMIME_transformation_options_note = 'Ange v�rdena f�r omvandlingsparametrar enligt f�ljande format: \'a\', 100, b,\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_transformation_options = 'Omvandlingsparametrar';
$strMIME_transformation = 'Webbl�saromvandling';
$strMIMETypesForTable = 'MIME-TYPER F�R TABELL';
$strMIME_without = 'Kursiverade MIME-typer har inte n�gon separat omvandlingsfunktion';
$strModifications = '�ndringarna har sparats';
$strModifyIndexTopic = '�ndra ett index';
$strModify = '�ndra';
$strMoveMenu = 'Flytta meny';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMoveTableSameNames = 'Kan inte flytta tabell till samma namn!';
$strMultilingual = 'flerspr�kig';
$strMyISAMDataPointerSizeDesc = 'Standardpekarens storlek i bytes, vilken anv�nds av CREATE TABLE f�r MyISAM-tabeller n�r inget MAX_ROWS-alternativ �r specificerat.';
$strMyISAMDataPointerSize = 'Storlek f�r datapekare';
$strMyISAMMaxExtraSortFileSizeDesc = 'Om den tempor�ra filen som anv�nds f�r snabbt skapande av MyISAM-index skulle vara st�rre �n att anv�nda nyckelcachen vars storlek specificeras h�r, s� f�redras metoden med nyckelcachen.';
$strMyISAMMaxExtraSortFileSize = 'Maximal storlek f�r tempor�ra filer vid skapande av index';
$strMyISAMMaxSortFileSizeDesc = 'Denna maximala storleken f�r den tempor�ra filen som MySQL �r till�ten att anv�nda under �terskapande av MyISAM-index (vid REPAIR TABLE, ALTER TABLE, eller LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maximal storlek f�r tempor�ra sorteringsfiler';
$strMyISAMRecoverOptions = 'Automatisk �terst�llning';
$strMyISAMRecoverOptionsDesc = 'Inst�llningen f�r automatisk �terst�llning av kraschade MyISAM-tabeller, som satts via serverns startparameter --myisam-recover.';
$strMyISAMRepairThreadsDesc = 'Om detta v�rde �r st�rre �n 1 skapas MyISAM-tabellindex parallellt (varje index i sin egen tr�d) under reparationen vid sorteringsprocess.';
$strMyISAMRepairThreads = 'Reparera tr�dar';
$strMyISAMSortBufferSizeDesc = 'Bufferten som allokeras vid sortering av MyISAM-index under REPAIR TABLE eller vid skapande av index med CREATE INDEX eller ALTER TABLE.';
$strMyISAMSortBufferSize = 'Storlek f�r sorteringsbuffert';
$strMySQLCharset = 'MySQL teckenupps�ttning';
$strMysqlClientVersion = 'MySQL klientversion';
$strMySQLConnectionCollation = 'Kollation f�r MySQL-uppkoppling';
$strMysqlLibDiffersServerVersion = 'Din PHP MySQL bibliotekversion %s skiljer sig fr�n din MySQL serverversion %s. Detta kan orsaka of�ruts�gbara beteenden.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL systemvariabler';

$strName = 'Namn';
$strNext = 'N�sta';
$strNoActivity = 'Ingen aktivitet sedan %s sekunder eller mer. Var god logga in igen';
$strNoDatabases = 'Inga databaser';
$strNoDatabasesSelected = 'Inga databaser markerade.';
$strNoDataReceived = 'Inga data att importera mottogs. Antingen skickades inget filnamn eller s� �versteg filens storlek den maximala som till�ts av din PHP-konfiguration.. Se FAQ 1.16.';
$strNoDescription = 'Ingen beskrivning';
$strNoDetailsForEngine = 'Det finns ingen tillg�nglig detaljerad statusinformation f�r denna lagringsmotor.';
$strNoDropDatabases = '"DROP DATABASE"-satser �r inaktiverade.';
$strNoExplain = 'Utan SQL-f�rklaring';
$strNoFilesFoundInZip = 'Inga filer hittades i ZIP-arkivet!';
$strNoFrames = 'phpMyAdmin fungerar tyv�rr endast med webbl�sare som hanterar ramar.';
$strNoIndex = 'Inga index �r definierade!';
$strNoIndexPartsDefined = 'Inga delar av index �r definierade!';
$strNoModification = 'Ingen f�r�ndring';
$strNone = 'Inget';
$strNo = 'Nej';
$strNoOptions = 'Detta format har inga alternativ';
$strNoPassword = 'Inget l�senord';
$strNoPermission = 'Webbservern har inte till�telse att spara filen %s.';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoRights = 'Du har inte tillr�cklig beh�righet f�r att vara h�r nu!';
$strNoRowsSelected = 'Inga rader valda';
$strNoSpace = 'Otillr�ckligt utrymme f�r att spara filen %s.';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoThemeSupport = 'St�d f�r teman saknas. Kontrollera din konfiguration och/eller dina teman i katalog %s.';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotOK = 'Inte OK';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNoUsersFound = 'Hittade ingen anv�ndare.';
$strNoValidateSQL = 'Utan SQL-validering';
$strNull = 'Null';
$strNumberOfFields = 'Antal f�lt';
$strNumberOfTables = 'Antal tabeller';
$strNumSearchResultsInTable = '%s tr�ff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> tr�ff(ar)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'OpenDocument-kalkylblad';
$strOpenDocumentText = 'OpenDocument-text';
$strOpenNewWindow = '�ppna nytt phpMyAdmin-f�nster';
$strOperations = 'Operationer';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimera tabell';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';
$strOverwriteExisting = 'Skriv �ver befintlig fil(er)';

$strPageNumber = 'Sida:';
$strPagesToBeFlushed = 'Sidor att rensa';
$strPaperSize = 'Pappersstorlek';
$strPartialImport = 'Partiell import';
$strPartialText = 'Avkortade texter';
$strPasswordChanged = 'L�senordet f�r %s har �ndrats.';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordHashing = 'Hashning av l�senord';
$strPassword = 'L�senord';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPdfDbSchema = 'Schema f�r databasen "%s" - Sidan %s';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPdfNoTables = 'Inga tabeller';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Skapar en rapport som inneh�ller data fr�n en enstaka tabell)';
$strPDFReportTitle = 'Rapportrubrik';
$strPerHour = 'per timme';
$strPerMinute = 'per minut';
$strPerSecond = 'per sekund';
$strPersian = 'Persiska';
$strPhoneBook = 'telefonbok';
$strPHP40203 = 'Du anv�nder PHP 4.2.3, vilken har en allvarlig bugg med multi-byte-str�ngar (mbstring). Se PHP:s buggrapport 19404. Denna version av PHP �r inte rekommenderad f�r anv�ndning tillsammans med phpMyAdmin.';
$strPhp = 'Skapa PHP-kod';
$strPHPVersion = 'PHP-version';
$strPleaseSelectPrimaryOrUniqueKey = 'V�lj den prim�ra nyckeln eller en unik nyckel';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> M�STE anges i din konfigurationsfil!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polska';
$strPortrait = 'St�ende';
$strPos1 = 'B�rjan';
$strPrevious = 'F�reg�ende';
$strPrimaryKeyHasBeenDropped = 'Den prim�ra nyckeln har tagits bort';
$strPrimaryKeyName = 'Prim�rnyckelns namn m�ste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�ste</b> vara namnet p� och <b>endast p�</b> en prim�rnyckel!)';
$strPrimary = 'Prim�r';
$strPrint = 'Skriv ut';
$strPrintViewFull = 'Utskriftsv�nlig visning (med fullst�ndiga texter)';
$strPrintView = 'Utskriftsv�nlig visning';
$strPrivDescAllPrivileges = 'Inkluderar alla privilegier utom GRANT.';
$strPrivDescAlterRoutine = 'Till�ter �ndring och borttagning av lagrade rutiner.';
$strPrivDescAlter = 'Till�ter �ndring av befintliga tabellers struktur.';
$strPrivDescCreateDb = 'Till�ter skapande av nya databaser och tabeller.';
$strPrivDescCreateRoutine = 'Till�ter skapande av lagrade rutiner.';
$strPrivDescCreateTbl = 'Till�ter skapande av nya tabeller.';
$strPrivDescCreateTmpTable = 'Till�ter skapande av tempor�ra tabeller.';
$strPrivDescCreateUser = 'Till�ter skapande, borttagning och omd�pning av anv�ndarkonton.';
$strPrivDescCreateView = 'Till�ter skapande av nya vyer.';
$strPrivDescDelete = 'Till�ter borttagning av data.';
$strPrivDescDropDb = 'Till�ter borttagning av databaser och tabeller.';
$strPrivDescDropTbl = 'Till�ter borttagning av tabeller.';
$strPrivDescExecute5 = 'Till�ter utf�rande av lagrade rutiner.';
$strPrivDescExecute = 'Till�ter k�rning av lagrade procedurer; Har ingen verkan i denna MySQL-version.';
$strPrivDescFile = 'Till�ter import av data fr�n och export av data till filer.';
$strPrivDescGrant = 'Till�ter till�gg av anv�ndare och privilegier utan omladdning av privilegiumtabellerna.';
$strPrivDescIndex = 'Till�ter skapande och borttagning av index.';
$strPrivDescInsert = 'Till�ter infogning och ers�ttning av data.';
$strPrivDescLockTables = 'Till�ter l�sning av tabeller f�r g�llande tr�d.';
$strPrivDescMaxConnections = 'Begr�nsar antalet nya f�rbindelser anv�ndaren kan �ppna per timme.';
$strPrivDescMaxQuestions = 'Begr�nsar antalet fr�gor anv�ndaren kan skicka till servern per timme.';
$strPrivDescMaxUpdates = 'Begr�nsar antalet kommandon, vilka �ndrar n�gon tabell eller databas, som anv�ndaren kan utf�ra per timme.';
$strPrivDescMaxUserConnections = 'Begr�nsar antalet samtidiga f�rbindelser som anv�ndaren kan ha.';
$strPrivDescProcess3 = 'Till�ter d�dande av andra anv�ndares processer.';
$strPrivDescProcess4 = 'Till�ter visning av fullst�ndiga fr�gor i processlistan.';
$strPrivDescReferences = 'Har ingen verkan i denna MySQL-version.';
$strPrivDescReload = 'Till�ter omladdning av serverinst�llningar och rensning av serverns cache.';
$strPrivDescReplClient = 'Ger anv�ndaren r�tt att fr�ga var slav- / huvudservrarna �r.';
$strPrivDescReplSlave = 'N�dv�ndigt f�r replikeringsslavar.';
$strPrivDescSelect = 'Till�ter l�sning av data.';
$strPrivDescShowDb = 'Ger tillg�ng till den fullst�ndiga databaslistan.';
$strPrivDescShowView = 'Till�ter utf�rande av SHOW CREATE VIEW-fr�gor.';
$strPrivDescShutdown = 'Till�ter avst�ngning av servern.';
$strPrivDescSuper = 'Till�ter uppkoppling, �ven om maximala antalet f�rbindelser �r n�dd. N�dv�ndig f�r de flesta administrativa funktioner, som att s�tta globala variabler eller d�da andra anv�ndares tr�dar.';
$strPrivDescUpdate = 'Till�ter �ndring av data.';
$strPrivDescUsage = 'Inga privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierna har laddats om.';
$strProcedures = 'Procedurer';
$strProcesses = 'Processer';
$strProcesslist = 'Processlista';
$strProfiling = 'Under produktion';
$strProtocolVersion = 'Protokollversion';
$strPutColNames = 'Ange f�ltnamn p� f�rsta raden';

$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQBE = 'Skapa fr�ga';
$strQueryCache = 'Fr�gecache';
$strQueryFrame = 'Fr�gef�nster';
$strQueryOnDb = 'SQL-fr�ga i databas <b>%s</b>:';
$strQueryResultsOperations = 'Operationer f�r fr�geresultat';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Fr�gestatistik</b>: %s fr�gor har skickats till servern sedan den startade.';
$strQueryTime = 'Fr�gan tog %01.4f sek';
$strQueryType = 'Typ av fr�ga';
$strQueryWindowLock = 'Skriv inte �ver denna fr�ga utifr�n detta f�nster';

$strReadRequests = 'L�sefterfr�gningar';
$strReceived = 'Mottagna';
$strRecommended = 'rekommenderad';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRefresh = 'Uppdatera';
$strRelationalSchema = 'Relationsschema';
$strRelationDeleted = 'Relation borttagen';
$strRelationNotWorking = 'Den extra funktionaliteten f�r att hantera l�nkade tabeller har inaktiverats. %sVisa orsaken%s.';
$strRelationsForTable = 'RELATIONER F�R TABELL';
$strRelations = 'Relationer';
$strRelationView = 'Visa relationer';
$strReloadingThePrivileges = 'Laddar om privilegierna';
$strReloadPrivileges = 'Ladda om privilegier';
$strReload = 'Uppdatera';
$strRemoveSelectedUsers = 'Ta bort markerade anv�ndare';
$strRenameDatabaseOK = 'Databas %s har d�pts om till %s';
$strRenameTable = 'D�p om tabellen till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplaceNULLBy = 'Ers�tt NULL med';
$strReplaceTable = 'Ers�tt data i tabell';
$strReplication = 'Replikering';
$strReset = 'Nollst�ll';
$strResourceLimits = 'Resursbegr�nsningar';
$strRestartInsertion = 'B�rja om infogning med %s rader';
$strReType = 'Skriv igen';
$strRevokeAndDeleteDescr = 'Anv�ndarna kommer fortfarande ha kvar privilegiet USAGE tills privilegierna laddas om.';
$strRevokeAndDelete = 'Upph�v anv�ndarnas alla aktiva privilegier och ta bort anv�ndarna efter�t.';
$strRevokeMessage = 'Du har upph�vt privilegierna f�r %s';
$strRevoke = 'Upph�v';
$strRomanian = 'Rum�nska';
$strRoutineReturnType = 'Returtyp';
$strRoutines = 'Rutiner';
$strRowLength = 'Radl�ngd';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowSize = 'Radstorlek';
$strRowsModeFlippedHorizontal = 'v�gr�tt (roterade rubriker)';
$strRowsModeHorizontal = 'v�gr�tt';
$strRowsModeOptions = 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical = 'lodr�tt';
$strRows = 'Rader';
$strRowsStatistic = 'Radstatistik';
$strRunning = 'k�rs p� %s';
$strRunQuery = 'K�r fr�ga';
$strRunSQLQuery = 'K�r SQL-fr�ga/fr�gor i databasen %s';
$strRunSQLQueryOnServer = 'K�r SQL-fr�ga/fr�gor p� server %s';
$strRussian = 'Rysk';

$strSaveOnServer = 'Spara p� servern i katalogen %s';
$strSavePosition = 'Spara position';
$strSave = 'Spara';
$strScaleFactorSmall = 'Skalfaktorn �r f�r liten f�r att schemat ska f� plats p� en sida';
$strSearchFormTitle = 'S�k i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller v�rde(n) att s�ka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som regulj�rt uttryck';
$strSearchResultsFor = 'Resultat av s�kning efter "<i>%s</i>" %s:';
$strSearch = 'S�k';
$strSearchType = 'Hitta:';
$strSecretRequired = 'Konfigurationsfilen beh�ver nu ett hemligt l�senord (blowfish_secret).';
$strSelectADb = 'V�lj en databas';
$strSelectAll = 'Markera alla';
$strSelectBinaryLog = 'V�lj bin�r logg att visa';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectForeignKey = 'V�lj fr�mmande nyckel';
$strSelectNumRows = 'i fr�ga';
$strSelectReferencedKey = 'V�lj refererad nyckel';
$strSelectTables = 'V�lj tabeller';
$strSend = 'Spara som fil';
$strSent = 'Skickade';
$strServerChoice = 'Serverval';
$strServerNotResponding = 'Servern svarar inte';
$strServer = 'Server';
$strServers = 'Servrar';
$strServerStatusDelayedInserts = 'F�rdr�jda infogningar';
$strServerStatus = 'K�rningsinformation';
$strServerStatusUptime = 'Denna MySQL-server har k�rts i %s. Den startade den %s.';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertrafik</b>: Dessa tabeller visar statistik f�r n�tverkstrafiken hos denna MySQL-server sedan den startade.';
$strServerVars = 'Servervariabler och inst�llningar';
$strServerVersion = 'Serverversion';
$strSessionStartupErrorGeneral = 'Kan inte starta session utan fel. Kontrollera felmeddelanden i din PHP:s och/eller webbservers loggfil och konfigurera din PHP-installation korrekt.';
$strSessionValue = 'Sessionsv�rde';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa f�rger';
$strShowDatadictAs = 'Format f�r datalexikon';
$strShowFullQueries = 'Visa fullst�ndiga fr�gor';
$strShowGrid = 'Visa rutn�t';
$strShowHideLeftMenu = 'Visa/D�lj v�nster meny';
$strShowingBookmark = 'Visar bokm�rke';
$strShowingPhp = 'Visar som PHP-kod';
$strShowingRecords = 'Visar rader ';
$strShowingSQL = 'Visar SQL-fr�ga';
$strShowOpenTables = 'Visa �ppna tabeller';
$strShowPHPInfo = 'Visa PHP-information';
$strShowSlaveHosts = 'Visa slav-v�rdar';
$strShowSlaveStatus = 'Visa slav-status';
$strShowStatusBinlog_cache_disk_useDescr = 'Antalet transaktioner som anv�nde den tempor�ra bin�ra loggcachen, men som �verskred v�rdet binlog_cache_size och anv�nde en tempor�r fil f�r att lagra satser fr�n transaktionen.';
$strShowStatusBinlog_cache_useDescr = 'Antalet transaktioner som anv�nde den tempor�ra bin�ra loggcachen.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Antalet tempor�ra tabeller p� disk skapade automatiskt av servern under utf�rande av satser. Om v�rdet Created_tmp_disk_tables �r stort vill du kanske �ka v�rdet tmp_table_size f�r att �stadkomma att tempor�ra tabeller lagras i minne ist�llet f�r p� disk.';
$strShowStatusCreated_tmp_filesDescr = 'Antalet tempor�ra filer som mysqld har skapat.';
$strShowStatusCreated_tmp_tablesDescr = 'Antalet tempor�ra tabeller i minne skapade automatiskt av servern under utf�rande av satser.';
$strShowStatusDelayed_errorsDescr = 'Antalet rader skrivna med INSERT DELAYED f�r vilka n�got fel uppstod (f�rmodligen dubblerad nyckel).';
$strShowStatusDelayed_insert_threadsDescr = 'Antalet INSERT DELAYED-hanteringstr�dar i bruk. Varje tabell p� vilken man anv�nder INSERT DELAYED f�r sin egen tr�d.';
$strShowStatusDelayed_writesDescr = 'Antalet skrivna rader med INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Antalet utf�rda FLUSH-satser.';
$strShowStatusHandler_commitDescr = 'Antalet interna COMMIT-satser.';
$strShowStatusHandler_deleteDescr = 'Antalet g�nger en rad togs bort fr�n en tabell.';
$strShowStatusHandler_discoverDescr = 'MySQL-servern kan fr�ga lagringsmotorn NDB Cluster om den k�nner till en tabell med ett givet namn. Detta kallas uppt�ckt. Handler_discover indikerar antalet g�nger tabeller har uppt�ckts.';
$strShowStatusHandler_read_firstDescr = 'Antalet g�nger f�rsta posten l�stes fr�n ett index. Om detta v�rde �r h�gt tyder det p� att servern g�r m�nga helindex-avs�kningar; t.ex. SELECT col1 FROM foo, under f�ruts�ttning att col1 �r indexerad.';
$strShowStatusHandler_read_keyDescr = 'Antalet efterfr�gningar att l�sa en rad baserat p� en nyckel. Om detta v�rde �r h�gt �r det en bra indikation p� att dina fr�gor och tabeller �r riktigt indexerade.';
$strShowStatusHandler_read_nextDescr = 'Antalet efterfr�gningar att l�sa den f�ljande raden i nyckelordning. Detta v�rde �kas om du fr�gar en indexkolumn med en urvalsbegr�nsning eller om du g�r en indexavs�kning.';
$strShowStatusHandler_read_prevDescr = 'Antalet efterfr�gningar att l�sa den f�reg�ende raden i nyckelordning. Denna l�smetod anv�nds huvudsakligen f�r att optimera ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Antalet efterfr�gningar att l�sa en rad baserat p� en fix position. Detta v�rde �r h�gt om du st�ller m�nga fr�gor som kr�ver sortering av resultatet. Du har f�rmodligen m�nga fr�gor som kr�ver att MySQL avs�ker hela tabeller eller du har f�reningar som inte anv�nder nycklar p� r�tt s�tt.';
$strShowStatusHandler_read_rnd_nextDescr = 'Antalet efterfr�gningar att l�sa den f�ljande raden i datafilen. Detta v�rde �r h�gt om du g�r m�nga tabellavs�kningar. I allm�nhet antyder detta att dina tabeller inte �r riktigt indexerade eller att dina fr�gor inte �r skrivna f�r att dra nytta av de index du har.';
$strShowStatusHandler_rollbackDescr = 'Antalet interna ROLLBACK-satser.';
$strShowStatusHandler_updateDescr = 'Antalet efterfr�gningar att uppdatera en rad i en tabell.';
$strShowStatusHandler_writeDescr = 'Antalet efterfr�gningar att l�gga till en rad i en tabell.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Antalet sidor inneh�llande data (orena eller rena).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Antalet sidor f�r n�rvarande orena.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Antalet buffert-sidor som har efterfr�gats om att bli rensade.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Antalet fria sidor.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Antalet l�sta sidor i InnoDB-buffert. Dessa �r sidor som f�r n�rvarande l�ses eller skrivs eller som inte kan rensas eller tas bort av n�gon annan anledning.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Antalet upptagna sidor pga att de har blivit allokerade som administrativt extrautrymme f�r bl.a. radl�s eller adaptivt hashindex. Detta v�rde kan ocks� ber�knas som Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total storlek p� buffert, i sidor.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Antalet "slumpm�ssiga" l�sningar i f�rv�g som InnoDB initierat. Detta sker n�r en fr�ga ska avs�ka en stor del av en tabell men i slumpm�ssig ordning.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Antalet sekventiella l�sningar i f�rv�g som InnoDB initierat. Detta sker n�r InnoDB g�r en sekventiell avs�kning av en hel tabell.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Antalet logiska l�sefterfr�gningar som InnoDB har gjort.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Antalet logiska l�sningar som InnoDB inte kunde uppfylla fr�n buffert och fick g�ra en enkelsidig l�sning.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalt sker skrivningar till InnoDB-bufferten i bakgrunden. Dock om det beh�vs l�sas eller skapas en sida och inga rena sidor finns tillg�ngliga, s� �r det n�dv�ndigt att v�nta p� att sidor rensas f�rst. Denna r�knare r�knar fall med dessa v�ntanden. Om buffertstorleken var riktigt satt ska detta v�rde vara litet.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Antalet skrivningar gjorda till InnoDB-bufferten.';
$strShowStatusInnodb_data_fsyncsDescr = 'Antalet fsync()-operationer hittills.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Nuvarande antal p�g�ende fsync()-operationer.';
$strShowStatusInnodb_data_pending_readsDescr = 'Nuvarande antal p�g�ende l�sningar.';
$strShowStatusInnodb_data_pending_writesDescr = 'Nuvarande antal p�g�ende skrivningar.';
$strShowStatusInnodb_data_readDescr = 'M�ngden data l�st hittills, i bytes.';
$strShowStatusInnodb_data_readsDescr = 'Totalt antal l�sningar av data.';
$strShowStatusInnodb_data_writesDescr = 'Totalt antal skrivningar av data.';
$strShowStatusInnodb_data_writtenDescr = 'M�ngden data skriven hittills, i bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Antalet dubbelskrivningar som har utf�rts och antalet sidor som har skrivits f�r detta �ndam�l.';
$strShowStatusInnodb_dblwr_writesDescr = 'Antalet dubbelskrivningar som har utf�rts och antalet sidor som har skrivits f�r detta �ndam�l.';
$strShowStatusInnodb_log_waitsDescr = 'Antalet v�ntanden pga loggbufferten var f�r liten och vi beh�vde v�nta p� att den skulle rensas innan kunde forts�tta.';
$strShowStatusInnodb_log_write_requestsDescr = 'Antalet efterfr�gningar att skriva till logg.';
$strShowStatusInnodb_log_writesDescr = 'Antalet fysiska skrivningar till loggfilen.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Antalet fsync()-skrivningar gjorda till loggfilen.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Antalet p�g�ende fsync() av loggfil.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'P�g�ende skrivningar till loggfil.';
$strShowStatusInnodb_os_log_writtenDescr = 'Antalet bytes skrivna till loggfilen.';
$strShowStatusInnodb_pages_createdDescr = 'Antalet skapade sidor.';
$strShowStatusInnodb_page_sizeDescr = 'Den inkompilerade InnoDB-sidstorleken (standard 16kB). M�nga v�rden r�knas i sidor; sidstorleken till�ter dem att enkelt omvandlas till bytes.';
$strShowStatusInnodb_pages_readDescr = 'Antalet l�sta sidor.';
$strShowStatusInnodb_pages_writtenDescr = 'Antalet skrivna sidor.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Antalet radl�s som f�r n�rvarande v�ntas p�.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Genomsnittlig tid f�r att skaffa ett radl�s, i millisekunder.';
$strShowStatusInnodb_row_lock_timeDescr = 'Total tid spenderad p� att skaffa radl�s, i millisekunder.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maximal tid f�r att skaffa ett radl�s, i millisekunder.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Antalet g�nger ett radl�s beh�vde v�ntas p�.';
$strShowStatusInnodb_rows_deletedDescr = 'Antalet rader borttagna fr�n InnoDB-tabeller.';
$strShowStatusInnodb_rows_insertedDescr = 'Antalet rader tillagda i InnoDB-tabeller.';
$strShowStatusInnodb_rows_readDescr = 'Antalet rader l�sta fr�n InnoDB-tabeller.';
$strShowStatusInnodb_rows_updatedDescr = 'Antalet rader uppdaterade i InnoDB-tabeller.';
$strShowStatusKey_blocks_not_flushedDescr = 'Antalet nyckelblock i nyckelcachen som har �ndrats men inte �nnu �verf�rts till disk. Det brukade vara k�nt som Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Antalet oanv�nda block i nyckelcachen. Du kan anv�nda detta v�rde f�r att avg�ra hur stor del av nyckelcachen som anv�nds.';
$strShowStatusKey_blocks_usedDescr = 'Antalet anv�nda block i nyckelcachen. Detta v�rde �r ett h�gvattenm�rke som indikerar maximala antalet block som n�gonsin anv�nts vid ett tillf�lle.';
$strShowStatusKey_read_requestsDescr = 'Antalet efterfr�gningar att l�sa ett nyckelblock fr�n cachen.';
$strShowStatusKey_readsDescr = 'Antalet fysiska l�sningar av ett nyckelblock fr�n disk. Om v�rdet Key_reads �r stort, d� �r f�rmodligen ditt v�rde key_buffer_size f�r litet. Cachens missfrekvens kan ber�knas som Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Antalet efterfr�gningar att skriva ett nyckelblock till cachen.';
$strShowStatusKey_writesDescr = 'Antalet fysiska skrivningar av ett nyckelblock till disk.';
$strShowStatusLast_query_costDescr = 'Den totala kostnaden f�r den senaste kompilerade fr�gan enligt ber�kning av fr�geoptimeraren. Anv�ndbart vid j�mf�relse av kostnad f�r olika fr�ges�tt av samma fr�ga. Standardv�rdet 0 inneb�r att ingen fr�ga har kompilerats �nnu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Antalet rader som v�ntar p� att skrivas i INSERT DELAYED-k�er.';
$strShowStatusOpened_tablesDescr = 'Antalet tabeller som har �ppnats. Om antalet �ppnade tabeller �r stort �r f�rmodligen ditt tabellcache-v�rde f�r litet.';
$strShowStatusOpen_filesDescr = 'Antalet filer som �r �ppna.';
$strShowStatusOpen_streamsDescr = 'Antalet str�mmar som �r �ppna (anv�nds huvudsakligen f�r loggning).';
$strShowStatusOpen_tablesDescr = 'Antalet tabeller som �r �ppna.';
$strShowStatusQcache_free_blocksDescr = 'Antalet fria minnesblock i fr�gecachen.';
$strShowStatusQcache_free_memoryDescr = 'M�ngden fritt minne f�r fr�gecache.';
$strShowStatusQcache_hitsDescr = 'Antalet cache-tr�ffar.';
$strShowStatusQcache_insertsDescr = 'Antalet fr�gor tillagda i cachen.';
$strShowStatusQcache_lowmem_prunesDescr = 'Antalet fr�gor som har tagits bort fr�n cachen f�r att frig�ra minne f�r cachning av nya fr�gor. Denna information kan hj�lpa dig att st�lla in storleken p� fr�gecachen. Fr�gecachen anv�nder strategin minst nyligen anv�nd (LRU) f�r att best�mma vilka fr�gor som ska tas bort fr�n cachen.';
$strShowStatusQcache_not_cachedDescr = 'Antalet icke-cachade fr�gor (inte m�jliga att cacha eller inte cachade pga inst�llningen query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Antalet fr�gor registrerade i cachen.';
$strShowStatusQcache_total_blocksDescr = 'Totala antalet block i fr�gecachen.';
$strShowStatusReset = '�terst�ll';
$strShowStatusRpl_statusDescr = 'Status f�r fels�ker replikering (�nnu inte implementerat).';
$strShowStatusSelect_full_joinDescr = 'Antalet f�reningar som inte anv�nder index. Om detta v�rde inte �r 0, b�r du noggrant kontrollera index f�r dina tabeller.';
$strShowStatusSelect_full_range_joinDescr = 'Antalet f�reningar som anv�nde en urvalss�kning p� en referenstabell.';
$strShowStatusSelect_range_checkDescr = 'Antalet f�reningar utan nycklar som kontrollerar nyckelanv�ndning efter varje rad. (Om detta v�rde inte �r 0, b�r du noggrant kontrollera index f�r dina tabeller.)';
$strShowStatusSelect_rangeDescr = 'Antalet f�reningar som anv�nde urval p� den f�rsta tabellen. (Det �r normalt inte kritiskt �ven om detta �r stort.)';
$strShowStatusSelect_scanDescr = 'Antalet f�reningar som gjorde en fullst�ndig avs�kning av f�rsta tabellen.';
$strShowStatusSlave_open_temp_tablesDescr = 'Antalet tempor�ra tabeller f�r n�rvarande �ppna av slavens SQL-tr�d.';
$strShowStatusSlave_retried_transactionsDescr = 'Totalt (sedan start) antal g�nger som replikeringsslavens SQL-tr�d har ompr�vat transaktioner.';
$strShowStatusSlave_runningDescr = 'Denna �r ON ifall denna server �r en slav som �r f�rbunden till en huvudserver.';
$strShowStatusSlow_launch_threadsDescr = 'Antalet fr�gor som har tagit mer �n slow_launch_time sekunder att skapa.';
$strShowStatusSlow_queriesDescr = 'Antalet fr�gor som har tagit mer �n long_query_time sekunder.';
$strShowStatusSort_merge_passesDescr = 'Antalet sammanslagningar som sorteringsalgoritmen har beh�vt utf�ra. Om detta v�rde �r stort b�r du �verv�ga att �ka v�rdet i systemvariabeln sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Antalet sorteringar som gjordes med urval.';
$strShowStatusSort_rowsDescr = 'Antalet sorterade rader.';
$strShowStatusSort_scanDescr = 'Antalet sorteringar som har gjorts genom avs�kning av tabellen.';
$strShowStatusTable_locks_immediateDescr = 'Antalet g�nger som ett tabell�s f�rv�rvades omedelbart.';
$strShowStatusTable_locks_waitedDescr = 'Antalet g�nger som ett tabell�s inte kunde f�rv�rvas omedelbart och en v�ntan var n�dv�ndig. Om detta v�rde �r h�gt och du har prestandaproblem b�r du f�rst optimera dina fr�gor och antingen dela upp din tabell eller tabeller eller anv�nda replikering.';
$strShowStatusThreads_cachedDescr = 'Antalet tr�dar i tr�dcachen. Cachens tr�ffrekvens kan ber�knas som Threads_created/Connections. Om detta v�rde �r r�tt b�r du �ka v�rdet thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Antalet f�r n�rvarande �ppna f�rbindelser.';
$strShowStatusThreads_createdDescr = 'Antalet tr�dar skapade f�r att hantera f�rbindelser. Om v�rdet Threads_created �r stort, vill du kanske �ka v�rdet thread_cache_size. (Normalt ger detta inte n�gon m�rkbar prestandaf�rb�ttring om du har en bra tr�dimplementering.)';
$strShowStatusThreads_runningDescr = 'Antalet tr�dar som inte �r vilande.';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa fr�gan h�r igen ';
$strShow = 'Visa';
$strSimplifiedChinese = 'F�renklad kinesiska';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSkipQueries = 'Antal poster (rader) att hoppa �ver fr�n b�rjan';
$strSlovak = 'Slovakiska';
$strSlovenian = 'Slovenska';
$strSmallBigAll = 'Sm�/stora alla';
$strSnapToGrid = 'F�st vid rutn�t';
$strSocketProblem = '(eller den lokala MySQL-serverns socket �r inte korrekt konfigurerad)';
$strSortByKey = 'Sortera efter nyckel';
$strSorting = 'Sortering';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSpanish = 'Spanska';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strSQLCompatibility = 'SQL-kompatibilitet';
$strSQLExportType = 'Export-typ';
$strSQLParserBugMessage = 'Det �r m�jligt att du har hittat en bugg i SQL-analysatorn. Var god granska din fr�ga noga och kontrollera att citationstecknen �r korrekta och matchar varandra. En annan m�jlig felorsak kan vara att du �verf�r en fil med bin�rkod som inte ligger inom citationstecken. Du kan �ven testa din fr�ga i MySQL:s kommandoradsgr�nssnitt. Felmeddelandet fr�n MySQL-servern nedan, om det finns n�got, kan ocks� hj�lpa dig att analysera problemet. Om du fortfarande har problem eller om SQL-analysatorn misslyckas n�r kommandoradsgr�nssnittet lyckas, var v�nlig reducera din inmatning av SQL-fr�gor till den enda fr�ga som orsakar problem och skicka en buggrapport med datastycket i URKLIPP-sektionen nedan:';
$strSQLParserUserError = 'Det verkar vara ett fel i din SQL-fr�ga. Felmeddelandet fr�n MySQL-servern nedan, om det finns n�got, kan ocks� hj�lpa dig att analysera problemet.';
$strSQLQuery = 'SQL-fr�ga';
$strSQLResult = 'SQL-resultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ogiltig identifierare';
$strSQPBugUnclosedQuote = 'Oavslutat citat';
$strSQPBugUnknownPunctuation = 'Ok�nd interpunktion i str�ng';
$strStandInStructureForView = 'Ers�ttningsstruktur f�r visning';
$strStatCheckTime = 'Senaste kontroll';
$strStatCreateTime = 'Skapades';
$strStatement = 'Uppgift';
$strStatisticsOverrun = 'P� en upptagen server kan byte-r�knare sp�ra ur, varf�r denna statistik som rapporterats fr�n MySQL-servern kan vara felaktig.';
$strStatUpdateTime = 'Senaste uppdatering';
$strStatus = 'Status';
$strStorageEngine = 'Lagringsmotor';
$strStorageEngines = 'Lagringsmotorer';
$strStrucCSV = 'CSV';
$strStrucData = 'Struktur och data';
$strStrucExcelCSV = 'CSV f�r MS Excel';
$strStrucNativeExcel = 'Naturlig MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'F�resl� tabellstruktur';
$strStructureForView = 'Struktur f�r visning';
$strStructure = 'Struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSuhosin = 'Server k�rs med Suhosin. Se %sdokumentation%s f�r m�jliga fr�gor.';
$strSum = 'Summa';
$strSwedish = 'Svensk';
$strSwitchToDatabase = 'Byt till kopierad databas';
$strSwitchToTable = 'Byt till kopierad tabell';

$strTableAlreadyExists = 'Tabell %s finns redan!';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har t�mts';
$strTableHasBeenFlushed = 'Tabellen %s har rensats';
$strTableIsEmpty = 'Tabellen verkar vara tom!';
$strTableMaintenance = 'Tabellunderh�ll';
$strTableName = 'Tabellnamn';
$strTableOfContents = 'Inneh�llsf�rteckning';
$strTableOptions = 'Tabellalternativ';
$strTables = '%s tabell(er)';
$strTableStructure = 'Struktur f�r tabell';
$strTable = 'Tabell';
$strTakeIt = 'anv�nd detta';
$strTblPrivileges = 'Tabellspecifika privilegier';
$strTempData = 'Tempor�ra data';
$strTextAreaLength = ' P� grund av dess l�ngd,<br /> kanske detta f�lt inte kan redigeras ';
$strThai = 'Thail�ndsk';
$strThemeDefaultNotFound = 'Standardtema %s hittades inte!';
$strThemeNoPreviewAvailable = 'Ingen f�rhandsgranskning tillg�nglig.';
$strThemeNotFound = 'Tema %s hittades inte!';
$strThemeNoValidImgPath = 'Ingen giltig s�kv�g till bilder f�r tema %s hittades!';
$strThemePathNotFound = 'Temats s�kv�g f�r tema %s hittades inte!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Denna v�rd';
$strThreads = 'Tr�dar';
$strThreadSuccessfullyKilled = 'Tr�d %s d�dades med framg�ng.';
$strTimeoutInfo = 'Tidsbegr�nsningen �verskreds vid f�reg�ende import. Efter �terupptagning av importen kommer den forts�tta fr�n position %d.';
$strTimeoutNothingParsed = 'Dock blev inga data bearbetade i senaste k�rningen. Detta betyder vanligtvis att phpMyAdmin inte kan slutf�ra denna import s�vida du inte �kar PHP:s tidsbegr�nsningar.';
$strTimeoutPassed = 'Skriptets tidsbegr�nsning har �verskridits. Om du vill slutf�ra importen, importera samma fil igen s� kommer importen att �terupptas.';
$strTime = 'Tid';
$strToFromPage = 'till/fr�n sida';
$strToggleScratchboard = 'Visa/d�lj skisstavla';
$strToggleSmallBig = 'V�xla liten/stor';
$strToSelectRelation = 'F�r att v�lja relation, klicka :';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraditionalChinese = 'Traditionell kinesiska';
$strTraditionalSpanish = 'Traditionell Spanska';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'Transaktionssamordnare';
$strTransformation_application_octetstream__download = 'Visar en l�nk f�r att ladda ner f�ltets bin�ra data. Du kan anv�nda f�rsta parametern f�r att ange filnamnet eller anv�nda den andra parametern f�r att ange f�ltnamnet f�r en tabellkolumn som inneh�ller filnamn. Om du anger andra parametern s� m�ste f�rsta parametern s�ttas till en tom str�ng.';
$strTransformation_application_octetstream__hex = 'Visar hexadecimal representation av data. Valfri f�rsta parameter anger hur ofta mellanslag l�ggs till (standardv�rde: 2 tecken).';
$strTransformation_image_jpeg__inline = 'Visar en klickbar tumnagelbild. Parametrarna �r maximal bredd och h�jd i pixlar. Bildens ursprungliga proportioner bibeh�lls.';
$strTransformation_image_jpeg__link = 'Visar en l�nk f�r att ladda ner denna bild.';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Visar en TIME, TIMESTAMP, DATETIME eller numerisk unix tidsst�mpel som ett formaterat datum. F�rsta parametern �r f�rskjutning (i timmar) som kommer adderas till tidsst�mpeln (standardv�rde: 0). Anv�nd andra parametern f�r att ange ett annorlunda datum/tid-format. Tredje parametern avg�r ifall du vill se lokalt datum eller UTC (ange "local" eller "utc"). Enligt detta har datumformatet olika v�rden - f�r "local" se dokumentationen f�r PHP:s funktion strftime() och f�r "utc" se funktionen gmdate().';
$strTransformation_text_plain__external = 'ENDAST LINUX: Startar en extern applikation och skickar f�ltdata till den via standard-indata. Returnerar applikationens standard-utdata. Standard �r Tidy, f�r att snygga till HTML-kod. Av s�kerhetssk�l m�ste du manuellt redigera filen libraries/transformations/text_plain__external.inc.php och infoga verktygen du vill till�ta ska f� k�ras. Den f�rsta parametern �r d� numret f�r det program som du vill anv�nda och den andra parametern �r parametrarna f�r programmet. Om den tredje parametern s�tts till 1 kommer utdata konverteras mha htmlspecialchars() (standardv�rde: 1). Om den fj�rde parametern s�tts till 1 kommer radbrytning att undvikas s� att all utdata kommer att visas p� en rad (standardv�rde: 1).';
$strTransformation_text_plain__formatted = 'Visar inneh�llet i f�ltet som det �r, utan att k�ra det genom htmlspecialchars(). Det inneb�r att f�ltet antas inneh�lla korrekt HTML-kod.';
$strTransformation_text_plain__imagelink = 'Visar en bild och en l�nk; f�ltet inneh�ller filnamnet. F�rsta parametern �r ett URL-prefix s�som "http://www.example.com/". Andra och tredje parametern �r bredden och h�jden i pixlar.';
$strTransformation_text_plain__link = 'Visar en l�nk; f�ltet inneh�ller filnamnet. F�rsta parametern �r ett URL-prefix s�som "http://www.example.com/". Andra parametern �r en titel f�r l�nken.';
$strTransformation_text_plain__sql = 'Formaterar text som en SQL-fr�ga med markerade satser.';
$strTransformation_text_plain__substr = 'Visar del av en str�ng. F�rsta parametern �r antalet tecken att hoppa �ver fr�n b�rjan p� str�ngen (standardv�rde: 0). Andra parametern �r antalet tecken som ska returneras (standardv�rde: till slutet p� str�ngen). Den tredje parametern �r en str�ng som l�ggs till i slutet och/eller b�rjan n�r trunkering utf�rs (standardv�rde: "...").';
$strTriggers = 'Utl�sare';
$strTruncateQueries = 'Korta av visade fr�gor';
$strTurkish = 'Turkisk';
$strType = 'Typ';

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Avmarkera alla';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ok�nd';
$strUnselectAll = 'Avmarkera alla';
$strUnsupportedCompressionDetected = 'Du f�rs�kta ladda en fil med komprimering (%s) som inte st�ds. Antingen �r st�d f�r det inte implementerat eller inaktiverat i din konfiguration.';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna f�r %s.';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUpdComTab = 'Se dokumentationen f�r uppdatering av din tabell column_comments';
$strUpgrade = 'Du b�r uppgradera till %s %s eller senare.';
$strUploadErrorCantWrite = 'Misslyckades att skriva fil till disk.';
$strUploadErrorExtension = 'Filuppladdning stoppades av till�gg.';
$strUploadErrorFormSize = 'Den uppladdade filen �verskrider direktivet MAX_FILE_SIZE som specificerades i HTML-formul�ret.';
$strUploadErrorIniSize = 'Den uppladdade filen �verskrider direktivet upload_max_filesize i php.ini.';
$strUploadErrorNoTempDir = 'Saknar en tempor�r katalog.';
$strUploadErrorPartial = 'Den uppladdade filen var endast delvis uplladdad.';
$strUploadErrorUnknown = 'Ok�nt fel i filuppladdning.';
$strUploadLimit = 'Du f�rs�kte f�rmodligen ladda upp en f�r stor fil. Se %sdokumentationen%s f�r metoder att g� runt denna begr�nsning.';
$strUploadsNotAllowed = 'Filuppladdningar �r inte till�tna p� denna server.';
$strUsage = 'Anv�ndning';
$strUseBackquotes = 'Anv�nd bak�tcitat runt tabell- och f�ltnamn';
$strUsedPhpExtensions = 'Anv�nda PHP-till�gg';
$strUseHostTable = 'Anv�nd v�rdtabell';
$strUserAlreadyExists = 'Anv�ndaren %s finns redan!';
$strUser = 'Anv�ndare';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUserNotFound = 'Den markerade anv�ndaren kunde inte hittas i privilegiumtabellen.';
$strUserOverview = 'Anv�ndar�versikt';
$strUsersDeleted = 'De markerade anv�ndarna har tagits bort.';
$strUsersHavingAccessToDb = 'Anv�ndare som har tillg�ng till &quot;%s&quot;';
$strUseTabKey = 'Anv�nd TAB-tangenten f�r att flytta fr�n v�rde till v�rde, eller CTRL+pil f�r att flytta vart som helst';
$strUseTables = 'Anv�nd tabeller';
$strUseTextField = 'Anv�nd textf�ltet';
$strUseThisValue = 'Anv�nd detta v�rde';

$strValidateSQL = 'Validera SQL-kod';
$strValidatorError = 'SQL-validatorn kunde inte initieras. Kontrollera om du har installerat de n�dv�ndiga PHP-till�ggen enligt %sdokumentationen%s.';
$strValue = 'V�rde';
$strVar = 'Variabel';
$strVersionInformation = 'Versionsinformation';
$strViewDumpDatabases = 'Visa SQL-satser f�r databaser';
$strViewDumpDB = 'Visa SQL-satser f�r databasen';
$strViewDump = 'Visa SQL-satser f�r tabellen';
$strViewHasBeenDropped = 'Vyn %s har tagits bort';
$strViewMaxExactCount = 'Denna vy har mer �n %s rader. Var god se %sdokumentationen%s.';
$strViewName = 'Namn p� vy';
$strView = 'Vy';

$strWebServerUploadDirectoryError = 'Katalogen som du konfigurerat f�r uppladdning kan inte n�s';
$strWebServerUploadDirectory = 'Uppladdningskatalog p� webbserver';
$strWelcome = 'V�lkommen till %s';
$strWestEuropean = 'V�steuropeisk';
$strWildcard = 'jokertecken';
$strWindowNotFound = 'M�lf�nstret kunde inte uppdateras. Orsaken kan vara att du st�ngt f�r�ldraf�nstret eller att din webbl�sares s�kerhetsinst�llningar blockerar uppdateringar mellan f�nster.';
$strWithChecked = 'Med markerade:';
$strWriteRequests = 'Skrivefterfr�gningar';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Anm: Genom att s�tta dessa alternativ till 0 (noll) tas begr�nsningarna bort.';
$strZip = '"zippad"';

?>
