<?php
/* $Id: swedish-utf-8.inc.php 11186 2008-04-05 14:39:19Z lem9 $ */

/*
 * Translated by Björn T. Hallberg <bjornth at users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y kl %H:%M';
$timespanfmt = '%s dagar, %s timmar, %s minuter och %s sekunder';

$strAbortedClients = 'Avbrutna';
$strAccessDeniedCreateConfig = 'Trolig orsak till detta är att du inte skapade en konfigurationsfil. Du vill kanske använda %1$suppsättningsskript%2$s för att skapa en.';
$strAccessDeniedExplanation = 'phpMyAdmin försökte skapa en förbindelse till MySQL-servern, men servern nekade uppkopplingen. Kontrollera värd, användarnamn och lösenord i config.inc.php och förvissa dig om att de stämmer överens med informationen från administratören av MySQL-servern.';
$strAccessDenied = 'Åtkomst nekad';
$strAction = 'Åtgärd';
$strAddAutoIncrement = 'Lägg till AUTO_INCREMENT-värde';
$strAddClause = 'Lägg till %s';
$strAddConstraints = 'Lägg till restriktioner';
$strAddDeleteColumn = 'Lägg till/ta bort fältkolumner';
$strAddDeleteRow = 'Lägg till/ta bort villkorsrader';
$strAddFields = 'Lägg till %s fält';
$strAddHeaderComment = 'Lägg till egen kommentar i huvud (\\n delar rader)';
$strAddIntoComments = 'Lägg till i kommentarer';
$strAddNewField = 'Lägg till fält';
$strAddPrivilegesOnDb = 'Lägg till privilegier till följande databas';
$strAddPrivilegesOnTbl = 'Lägg till privilegier till följande tabell';
$strAddSearchConditions = 'Lägg till sökvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'Lägg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'Lägg till ny användare';
$strAddUserMessage = 'Du har lagt till en ny användare.';
$strAdministration = 'Administration';
$strAffectedRows = 'Påverkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Gå tillbaka till föregående sida';
$strAfterInsertNewInsert = 'Lägg till ytterligare en ny rad';
$strAfterInsertNext = 'Ändra nästa rad';
$strAfterInsertSame = 'Gå tillbaka till denna sida';
$strAll = 'Alla';
$strAllowInterrupt = 'Tillåt avbrott av import ifall skriptet upptäcker att det är nära tidsbegränsningen. Detta kan vara ett bra sätt att importera stora filer, men det kan bryta transaktioner.';
$strAllTableSameWidth = 'Visa alla tabeller med samma bredd';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAndThen = 'och sedan';
$strAngularLinks = 'Vinklade länkar';
$strAnIndex = 'Ett index har lagts till för %s';
$strAnyHost = 'Vilken värd som helst';
$strAnyUser = 'Vilken användare som helst';
$strAny = 'Vem som helst';
$strApproximateCount = 'Kan vara ungefärligt. Se FAQ 3.11';
$strAPrimaryKey = 'En primär nyckel har lagts till för %s';
$strArabic = 'Arabisk';
$strArmenian = 'Armenisk';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I början av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';
$strAutomaticLayout = 'Automatisk layout';

$strBack = 'Bakåt';
$strBaltic = 'Baltisk';
$strBeginCut = 'START URKLIPP';
$strBeginRaw = 'START RÅTEXT';
$strBinary = 'Binär';
$strBinaryDoNotEdit = 'Binär - ändra inte';
$strBinaryLog = 'Binär logg';
$strBinLogEventType = 'Typ av händelse';
$strBinLogInfo = 'Information';
$strBinLogName = 'Loggnamn';
$strBinLogOriginalPosition = 'Ursprunglig position';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server-ID';
$strBookmarkAllUsers = 'Låt varje användare få tillgång till detta bokmärke';
$strBookmarkCreated = 'Bokmärket %s har skapats';
$strBookmarkDeleted = 'Bokmärket har tagits bort.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokmärkt SQL-fråga';
$strBookmarkReplace = 'Ersätt befintligt bokmärke med samma namn';
$strBookmarkThis = 'Skapa bokmärke för den här SQL-frågan';
$strBookmarkView = 'Visa endast';
$strBrowseDistinctValues = 'Visa distinkta värden';
$strBrowseForeignValues = 'Visa främmande värden';
$strBrowse = 'Visa';
$strBufferPoolActivity = 'Buffertaktivitet';
$strBufferPool = 'Buffertutrymme';
$strBufferPoolUsage = 'Buffertanvändning';
$strBufferReadMissesInPercent = 'Läsmissar i %';
$strBufferReadMisses = 'Läsmissar';
$strBufferWriteWaitsInPercent = 'Skrivväntanden i %';
$strBufferWriteWaits = 'Skrivväntanden';
$strBulgarian = 'Bulgarisk';
$strBusyPages = 'Upptagna sidor';
$strBzError = 'phpMyAdmin kunde inte komprimera SQL-satserna på grund av ett trasigt Bz2-tillägg i denna PHP-version. Det rekommenderas starkt att sätta direktivet <code>$cfg[\'BZipDump\']</code> i din phpMyAdmin-konfigurationsfil till <code>FALSE</code>. Om du vill använda Bz2-komprimering, bör du uppgradera till en senare PHP-version. Se PHP:s buggrapport %s för detaljer.';
$strBzip = '"bzippad"';

$strCalendar = 'Kalender';
$strCancel = 'Avbryt';
$strCanNotLoadExportPlugins = 'Kunde inte ladda export-tillägg. Kontrollera din installation.';
$strCanNotLoadImportPlugins = 'Kunde inte ladda tillägg för import. Kontrollera din installation!';
$strCannotLogin = 'Kan ej logga in på MySQL-server';
$strCantLoad = 'kan inte ladda %s-tillägg,<br />var god kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda tilläggen iconv eller recode som behövs för teckenuppsättningsomvandling. Antingen konfigurera PHP för att tillåta dessa tillägg eller inaktivera teckenuppsättningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn på index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte använda varken funktionen iconv, libiconv eller recode_string, fastän de nödvändiga tilläggen verkar vara laddade. Kontrollera din PHP-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCaseInsensitive = 'skiftlägesokänsligt';
$strCaseSensitive = 'skiftlägeskänsligt';
$strCentralEuropean = 'Centraleuropeisk';
$strChangeCopyModeCopy = '... behåll den gamla.';
$strChangeCopyModeDeleteAndReload = ' ... ta bort den gamla från användartabellerna och ladda om privilegierna efteråt.';
$strChangeCopyModeJustDelete = ' ... ta bort den gamla från användartabellerna.';
$strChangeCopyModeRevoke = ' ... upphäv alla aktiva privilegier från dan gamla och ta bort den efteråt.';
$strChangeCopyMode = 'Skapa en ny användare med samma privilegier och ...';
$strChangeCopyUser = 'Ändra inloggningsinformation / Kopiera användare';
$strChangeDisplay = 'Välj fält som ska visas';
$strChange = 'Ändra';
$strChangePassword = 'Byt lösenord';
$strCharsetOfFile = 'Filens teckenuppsättning:';
$strCharsetsAndCollations = 'Teckenuppsättningar och kollationeringar';
$strCharsets = 'Teckenuppsättningar';
$strCharset = 'Teckenuppsättning';
$strCheckAll = 'Markera alla';
$strCheckOverhead = 'Markera ooptimerade';
$strCheckPrivs = 'Kontrollera privilegier';
$strCheckPrivsLong = 'Kontrollera privilegier för databas &quot;%s&quot;.';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'Välj en sida att redigera';
$strColComFeat = 'Visning av kolumnkommentarer';
$strCollation = 'Kollationering';
$strColumnNames = 'Kolumn-namn';
$strColumnPrivileges = 'Kolumnspecifika privilegier';
$strCommand = 'Kommando';
$strCommentsForTable = 'KOMMENTARER FÖR TABELL';
$strComments = 'Kommentarer';
$strCompatibleHashing = 'Kompatibel med MySQL&nbsp;4.0';
$strCompleteInserts = 'Kompletta infogningar';
$strCompression = 'Komprimering';
$strCompressionWillBeDetected = 'Importerad fils komprimering kommer automatiskt detekteras från: %s';
$strConfigDefaultFileError = 'Kunde inte ladda standardkonfiguration från: "%1$s"';
$strConfigFileError = 'phpMyAdmin kunde inte läsa din konfigurationsfil!<br />Detta kan inträffa om PHP hittar ett fel i den eller om PHP inte hittar filen.<br />Anropa konfigurationsfilen direkt mha länken nedan och läs PHP:s felmeddelande(n) som du erhåller. I de flesta fall saknas ett citationstecken eller ett semikolon någonstans.<br />Om du erhåller en tom sida är allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna för tabellen %s';
$strConnectionError = 'Kan ej skapa förbindelse: ogiltiga inställningar.';
$strConnections = 'Uppkopplingar';
$strConstraintsForDumped = 'Restriktioner för dumpade tabeller';
$strConstraintsForTable = 'Restriktioner för tabell';
$strControluserFailed = 'Uppkoppling för controluser enligt din konfiguration misslyckades.';
$strCookiesRequired = 'Kakor (cookies) måste tillåtas för att gå vidare.';
$strCopyDatabaseOK = 'Databas %s har kopierats till %s';
$strCopy = 'Kopiera';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCopyTableSameNames = 'Kan inte kopiera tabell till samma namn!';
$strCouldNotKill = 'phpMyAdmin kunde inte döda tråd %s. Troligtvis har den redan avslutats.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE före kopiering';
$strCreateIndex = 'Skapa ett index för&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCreatePdfFeat = 'Skapande av PDF-sidor';
$strCreateRelation = 'Skapa relation';
$strCreate = 'Skapa';
$strCreateTable  = 'Skapa tabell';
$strCreateUserDatabase = 'Databas för användare';
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
$strDatabaseEmpty = 'Databasens namn är tomt!';
$strDatabaseExportOptions = 'Exportalternativ för databas';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabases = 'Databaser';
$strDatabasesDropped = '%s databaser har tagits bort.';
$strDatabasesStats = 'Databas-statistik';
$strDatabasesStatsDisable = 'Stäng av statistik';
$strDatabasesStatsEnable = 'Slå på statistik';
$strDatabasesStatsHeavyTraffic = 'Anm: Att slå på databasstatistik här kan orsaka tung trafik mellan webb- och MySQL-servern.';
$strData = 'Data';
$strDataDict = 'Datalexikon';
$strDataOnly = 'Enbart data';
$strDataPages = 'Sidor innehållande data';
$strDBComment = 'Databaskommentar: ';
$strDBCopy = 'Kopiera databas till';
$strDbIsEmpty = 'Databasen verkar vara tom!';
$strDbPrivileges = 'Databasspecifika privilegier';
$strDBRename = 'Döp om databasen till';
$strDbSpecific = 'databasspecifik';
$strDefaultEngine = '%s är standardlagringsmotorn på denna MySQL-server.';
$strDefault = 'Standard';
$strDefaultValueHelp = 'För standardvärden, ange endast ett enstaka värde, utan bakåtstreck eller citattecken, enligt formatet: a';
$strDefragment = 'Defragmentera tabell';
$strDelayedInserts = 'Använd fördröjda infogningar';
$strDeleteAndFlushDescr = 'Detta är det renaste sättet, men omladdning av privilegierna kan ta en stund.';
$strDeleteAndFlush = 'Ta bort användarna och ladda om privilegierna efteråt.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleteNoUsersSelected = 'Inga användare valda för borttagning!';
$strDelete = 'Radera';
$strDeleteRelation = 'Ta bort relation';
$strDeleting = 'Tar bort %s';
$strDelimiter = 'Avgränsare';
$strDelOld = 'Nuvarande sida har referenser till tabeller som inte längre existerar. Vill du ta bort dessa referenser?';
$strDescending = 'Fallande';
$strDescription = 'Beskrivning';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Visningsfältet visas i rosa. För att ange ett fält som visningsfält, klicka på ikonen "Välj fält som ska visas" och klicka sedan på lämpligt fältnamn.';
$strDictionary = 'lexikon';
$strDirectLinks = 'Direkta länkar';
$strDirtyPages = 'Orena sidor';
$strDisabled = 'Inaktiverat';
$strDisableForeignChecks = 'Stäng av kontroll av främmande nycklar';
$strDisplayFeat = 'Visningsfunktionaliteter';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utför en "Query By Example" (jokertecken: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Vill du verkligen ';
$strDropDatabaseStrongWarning = 'Du håller på att FÖRGÖRA en hel databas!';
$strDrop = 'Radera';
$strDropUsersDb = 'Ta bort databaserna med samma namn som användarna.';
$strDumpingData = 'Data i tabell';
$strDumpSaved = 'SQL-satserna har sparats till filen %s.';
$strDumpXRows = 'Visa %s rader med början på rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Ändra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = 'Ändra privilegier';
$strEffective = 'Effektivt';
$strEmptyResultSet = 'MySQL returnerade ett tomt resultat (dvs inga rader).';
$strEmpty = 'Töm';
$strEnabled = 'Aktiverat';
$strEncloseInTransaction = 'Inneslut export i en transaktion';
$strEndCut = 'SLUT URKLIPP';
$strEndRaw = 'SLUT RÅTEXT';
$strEnd = 'Slutet';
$strEngineAvailable = '%s är tillgänglig på denna MySQL-server.';
$strEngineDisabled = '%s har inaktiverats på denna MySQL-server.';
$strEngines = 'Motorer';
$strEngineUnsupported = 'Denna MySQL-server har inte stöd för lagringsmotorn %s.';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' Obs! MySQL privilegiumnamn anges på engelska ';
$strError = 'Fel';
$strErrorInZipFile = 'Fel i ZIP-arkiv:';
$strErrorRelationAdded = 'Fel: Relation inte tillagd.';
$strErrorRelationExists = 'Fel: Relation finns redan.';
$strErrorRenamingTable = 'Fel vid namnbyte på tabell %1$s till %2$s';
$strErrorSaveTable = 'Fel vid sparande av koordinater för Designer.';
$strEscapeWildcards = 'Jokerteknen _ och % måste föregås av ett \ för att användas i egentlig betydelse';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estnisk';
$strEvent = 'Händelse';
$strExcelEdition = 'Excel-version';
$strExecuteBookmarked = 'Utför bokmärkt fråga';
$strExplain = 'Förklara SQL-kod';
$strExport = 'Exportera';
$strExportImportToScale = 'Exportera/importera till skala';
$strExportMustBeFile = 'Vald export-typ måste sparas i fil!';
$strExtendedInserts = 'Utökade infogningar';
$strExtra = 'Extra';

$strFailedAttempts = 'Misslyckade försök';
$strField = 'Fält';
$strFieldHasBeenDropped = 'Fältet %s har tagits bort';
$strFieldInsertFromFileTempDirNotExists = 'Fel vid flytt av uppladdad fil, se FAQ 1.11';
$strFieldsEnclosedBy = 'Fälten omges av';
$strFieldsEscapedBy = 'Specialtecken i fält föregås av';
$strFields = 'Fält';
$strFieldsTerminatedBy = 'Fälten avslutas med';
$strFileAlreadyExists = 'Filen %s finns redan på servern. Ändra filnamnet eller kryssa i skriv över-alternativet.';
$strFileCouldNotBeRead = 'Filen kunde inte läsas';
$strFileNameTemplateDescriptionDatabase = 'databasnamn';
$strFileNameTemplateDescription = 'Detta värde tolkas mha %1$sstrftime%2$s, så du kan använda strängar med tidsformatering. Dessutom kommer följande omvandlingar att ske: %3$s. Övrig text behålls som den är.';
$strFileNameTemplateDescriptionServer = 'servernamn';
$strFileNameTemplateDescriptionTable = 'tabellnamn';
$strFileNameTemplate = 'Mall för filnamn';
$strFileNameTemplateRemember = 'kom ihåg mall';
$strFiles = 'Filer';
$strFileToImport = 'Fil att importera';
$strFixed = 'fast';
$strFlushPrivilegesNote = 'Anm: phpMyAdmin hämtar användarnas privilegier direkt från MySQL:s privilegiumtabeller. Innehållet i dessa tabeller kan skilja sig från privilegierna som servern använder ifall manuella ändringar har gjorts. I detta fall bör du %sladda om privilegierna%s innan du fortsätter.';
$strFlushQueryCache = 'Rensa frågecache';
$strFlushTable = 'Rensa tabell';
$strFlushTables = 'Stäng alla tabeller';
$strFontSize = 'Teckenstorlek';
$strForeignKeyError = 'Fel vid skapande av främmande nyckel (kontrollera datatyper)';
$strFormat = 'Format';
$strFormEmpty = 'Värde saknas i formuläret!';
$strFreePages = 'Fria sidor';
$strFullText = 'Fullständiga texter';
$strFunction = 'Funktion';
$strFunctions = 'Funktioner';

$strGenBy = 'Genererad av';
$strGeneralRelationFeat = 'Allmänna relationsfunktionaliteter';
$strGenerate = 'Generera';
$strGeneratePassword = 'Generera lösenord';
$strGenTime = 'Skapad';
$strGeorgian = 'Georgisk';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globala privilegier';
$strGlobalValue = 'Globalt värde';
$strGo = 'Kör';
$strGrantOption = 'Grant';
$strGreek = 'Grekisk';
$strGzip = '"gzippad"';

$strHandler = 'Hanterare';
$strHasBeenAltered = 'har ändrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du måste välja minst en kolumn som ska visas';
$strHebrew = 'Hebreisk';
$strHelp = 'Hjälp';
$strHexForBLOB = 'Använd hexadecimal för BLOB';
$strHide = 'Dölj';
$strHideShowAll = 'Dölj/visa alla';
$strHideShowNoRelation = 'Dölj/visa tabeller utan relationer';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHostEmpty = 'Värdnamnet är tomt!';
$strHost = 'Värd';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungersk';

$strIcelandic = 'Isländska';
$strId = 'ID';
$strIdxFulltext = 'Heltext';
$strIEUnsupported = 'Internet Explorer saknar stöd för denna funktion.';
$strIgnoreDuplicates = 'Ignorera dubblerade rader';
$strIgnore = 'Ignorera';
$strIgnoreInserts = 'Använd IGNORE i infogningar';
$strImportExportCoords = 'Importera/exportera koordinater för PDF-schema';
$strImportFiles = 'Importera filer';
$strImportFormat = 'Format på importerad fil';
$strImport = 'Importera';
$strImportSuccessfullyFinished = 'Importen har avslutats korrekt, %d frågor utförda.';
$strIndexes = 'Index';
$strIndexesSeemEqual = 'Följande index verkar vara lika och ett av dem bör tas bort:';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndex = 'Index';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexWarningTable = 'Problem med index för tabell `%s`';
$strInnoDBAutoextendIncrement = 'Automatisk utökningsstorlek';
$strInnoDBAutoextendIncrementDesc = 'Tillökningsstorleken vid automatisk utökning av tabellutrymme när det blir fullt.';
$strInnoDBBufferPoolSize = 'Buffertstorlek';
$strInnoDBBufferPoolSizeDesc = 'Storleken på minnesbufferten som InnoDB använder för cache av data och index till sina tabeller.';
$strInnoDBDataFilePath = 'Datafiler';
$strInnoDBDataHomeDirDesc = 'Den gemensamma delen av sökvägen för alla InnoDB-datafiler.';
$strInnoDBDataHomeDir = 'Hemkatalog för data';
$strInnoDBPages = 'sidor';
$strInnoDBRelationAdded = 'InnoDB relation tillagd';
$strInnodbStat = 'InnoDB-status';
$strInsecureMySQL = 'Din konfigurationsfil innehåller inställningar (root-konto utan lösenord) som motsvarar MySQL:s privilegierade standardkonto. Din MySQL-server körs med denna standardinställning och är öppen för intrång, så du bör verkligen täppa till detta säkerhetshål.';
$strInsertAsNewRow = 'Lägg till som ny rad';
$strInsertedRowId = 'Tillagd rads id:';
$strInsertedRows = 'Tillagda rader:';
$strInsert = 'Lägg till';
$strInternalNotNecessary = '* En intern relation är inte nödvändig när den även finns i InnoDB.';
$strInternalRelationAdded = 'Intern relation tillagd';
$strInternalRelations = 'Interna relationer';
$strInUse = 'används';
$strInvalidAuthMethod = 'Ogiltig metod för autentisering angiven i konfiguration:';
$strInvalidColumnCount = 'Antalet kolumner måste vara större än noll.';
$strInvalidColumn = 'Ogiltig kolumn (%s) angiven!';
$strInvalidCSVFieldCount = 'Ogiltigt antal fält i CSV-indata på rad %d.';
$strInvalidCSVFormat = 'Ogiltigt format i CSV-indata på rad %d.';
$strInvalidCSVParameter = 'Ogiltig parameter för CSV-import: %s';
$strInvalidDatabase = 'Ogiltig databas';
$strInvalidFieldAddCount = 'Du måste lägga till åtminstone ett fält.';
$strInvalidFieldCount = 'Tabell måste ha åtminstone ett fält.';
$strInvalidLDIImport = 'Detta tillägg stöder inte komprimerade importer!';
$strInvalidRowNumber = '%d är inte ett giltigt radnummer.';
$strInvalidServerHostname = 'Ogiltigt värdnamn för server %1$s. Var god granska din konfiguration.';
$strInvalidServerIndex = 'Ogiltigt serverindex: "%s"';
$strInvalidTableName = 'Ogiltigt tabellnamn';

$strJapanese = 'Japansk';
$strJoins = 'Föreningar';
$strJumpToDB = 'Hoppa till databas &quot;%s&quot;.';
$strJustDeleteDescr = 'De &quot;borttagna&quot; användarna kommer fortfarande kunna komma åt servern som vanligt tills privilegierna laddas om.';
$strJustDelete = 'Ta endast bort användarna från privilegiumtabellerna.';

$strKeepPass = 'Ändra inte lösenordet';
$strKeyCache = 'Nyckelcache';
$strKeyname = 'Nyckel';;
$strKill = 'Döda';
$strKnownExternalBug = 'Funktionaliteten för %s påverkas av en känd bugg, se %s';
$strKorean = 'Koreansk';

$strLandscape = 'Liggande';
$strLanguage = 'Språk';
$strLanguageUnknown = 'Okänt språk: %1$s.';
$strLatchedPages = 'Låsta sidor';
$strLatexCaption = 'Tabellrubrik';
$strLatexContent = 'Innehåll i tabell __TABLE__';
$strLatexContinuedCaption = 'Fortsatt tabellrubrik';
$strLatexContinued = '(fortsättning)';
$strLatexIncludeCaption = 'Inkludera tabellrubrik';
$strLatexLabel = 'Etikett';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktur för tabell __TABLE__';
$strLatvian = 'Lettiska';
$strLDI = 'CSV mha LOAD DATA';
$strLDILocal = 'Använd nyckelordet LOCAL';
$strLengthSet = 'Längd/Värden*';
$strLimitNumRows = 'Rader per sida';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'Länk ej funnen';
$strLinksTo = 'Länkar till';
$strLithuanian = 'Litauisk';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Textfilens plats';
$strLoginInformation = 'Inloggningsinformation';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';
$strLogPassword = 'Lösenord:';
$strLogServer = 'Server';
$strLogUsername = 'Användarnamn:';
$strLongOperation = 'Denna operation kan ta lång tid. Försätt ändå?';

$strMaxConnects = 'Max. samtidiga förbindelser';
$strMaximalQueryLength = 'Maximal längd på skapad fråga';
$strMaximumSize = 'Maximal storlek: %s%s';
$strMbExtensionMissing = 'PHP-tillägget mbstring kunde inte hittas och det verkar som om du använder flerbitars teckenuppsättning. phpMyAdmin kan inte dela upp strängar korrekt utan tillägget mbstring, vilket kan leda till oväntade resultat.';
$strMbOverloadWarning = 'Du har aktiverat mbstring.func_overload i din PHP-konfiguration. Detta alternativ är inkompatibelt med phpMyAdmin och kan orsaka att en del data förstörs!';
$strMIME_available_mime = 'Tillgängliga MIME-typer';
$strMIME_available_transform = 'Tillgängliga omvandlingar';
$strMIME_description = 'Beskrivning';
$strMIME_MIMEtype = 'MIME-typ';
$strMIME_nodescription = 'Ingen beskrivning för denna omvandling finns tillgänglig.<br />Vänligen fråga upphovsmannen vad %s gör.';
$strMIME_transformation_note = 'För en lista med tillgängliga omvandlingsparametrar och deras MIME-typomvandlingar, klicka på %somvandlingsbeskrivningar%s';
$strMIME_transformation_options_note = 'Ange värdena för omvandlingsparametrar enligt följande format: \'a\', 100, b,\'c\'...<br />Om du behöver lägga till ett bakåtstreck ("\") eller ett enkelcitat ("\'") i värdena, skriv ett bakåtstreck före tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_transformation_options = 'Omvandlingsparametrar';
$strMIME_transformation = 'Webbläsaromvandling';
$strMIMETypesForTable = 'MIME-TYPER FÖR TABELL';
$strMIME_without = 'Kursiverade MIME-typer har inte någon separat omvandlingsfunktion';
$strModifications = 'Ändringarna har sparats';
$strModifyIndexTopic = 'Ändra ett index';
$strModify = 'Ändra';
$strMoveMenu = 'Flytta meny';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMoveTableSameNames = 'Kan inte flytta tabell till samma namn!';
$strMultilingual = 'flerspråkig';
$strMyISAMDataPointerSizeDesc = 'Standardpekarens storlek i bytes, vilken används av CREATE TABLE för MyISAM-tabeller när inget MAX_ROWS-alternativ är specificerat.';
$strMyISAMDataPointerSize = 'Storlek för datapekare';
$strMyISAMMaxExtraSortFileSizeDesc = 'Om den temporära filen som används för snabbt skapande av MyISAM-index skulle vara större än att använda nyckelcachen vars storlek specificeras här, så föredras metoden med nyckelcachen.';
$strMyISAMMaxExtraSortFileSize = 'Maximal storlek för temporära filer vid skapande av index';
$strMyISAMMaxSortFileSizeDesc = 'Denna maximala storleken för den temporära filen som MySQL är tillåten att använda under återskapande av MyISAM-index (vid REPAIR TABLE, ALTER TABLE, eller LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maximal storlek för temporära sorteringsfiler';
$strMyISAMRecoverOptions = 'Automatisk återställning';
$strMyISAMRecoverOptionsDesc = 'Inställningen för automatisk återställning av kraschade MyISAM-tabeller, som satts via serverns startparameter --myisam-recover.';
$strMyISAMRepairThreadsDesc = 'Om detta värde är större än 1 skapas MyISAM-tabellindex parallellt (varje index i sin egen tråd) under reparationen vid sorteringsprocess.';
$strMyISAMRepairThreads = 'Reparera trådar';
$strMyISAMSortBufferSizeDesc = 'Bufferten som allokeras vid sortering av MyISAM-index under REPAIR TABLE eller vid skapande av index med CREATE INDEX eller ALTER TABLE.';
$strMyISAMSortBufferSize = 'Storlek för sorteringsbuffert';
$strMySQLCharset = 'MySQL teckenuppsättning';
$strMysqlClientVersion = 'MySQL klientversion';
$strMySQLConnectionCollation = 'Kollation för MySQL-uppkoppling';
$strMysqlLibDiffersServerVersion = 'Din PHP MySQL bibliotekversion %s skiljer sig från din MySQL serverversion %s. Detta kan orsaka oförutsägbara beteenden.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL körningsinformation';
$strMySQLShowVars = 'Visa MySQL systemvariabler';

$strName = 'Namn';
$strNext = 'Nästa';
$strNoActivity = 'Ingen aktivitet sedan %s sekunder eller mer. Var god logga in igen';
$strNoDatabases = 'Inga databaser';
$strNoDatabasesSelected = 'Inga databaser markerade.';
$strNoDataReceived = 'Inga data att importera mottogs. Antingen skickades inget filnamn eller så översteg filens storlek den maximala som tillåts av din PHP-konfiguration.. Se FAQ 1.16.';
$strNoDescription = 'Ingen beskrivning';
$strNoDetailsForEngine = 'Det finns ingen tillgänglig detaljerad statusinformation för denna lagringsmotor.';
$strNoDropDatabases = '"DROP DATABASE"-satser är inaktiverade.';
$strNoExplain = 'Utan SQL-förklaring';
$strNoFilesFoundInZip = 'Inga filer hittades i ZIP-arkivet!';
$strNoFrames = 'phpMyAdmin fungerar tyvärr endast med webbläsare som hanterar ramar.';
$strNoIndex = 'Inga index är definierade!';
$strNoIndexPartsDefined = 'Inga delar av index är definierade!';
$strNoModification = 'Ingen förändring';
$strNone = 'Inget';
$strNo = 'Nej';
$strNoOptions = 'Detta format har inga alternativ';
$strNoPassword = 'Inget lösenord';
$strNoPermission = 'Webbservern har inte tillåtelse att spara filen %s.';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoRights = 'Du har inte tillräcklig behörighet för att vara här nu!';
$strNoRowsSelected = 'Inga rader valda';
$strNoSpace = 'Otillräckligt utrymme för att spara filen %s.';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoThemeSupport = 'Stöd för teman saknas. Kontrollera din konfiguration och/eller dina teman i katalog %s.';
$strNotNumber = 'Det är inte ett nummer!';
$strNotOK = 'Inte OK';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNoUsersFound = 'Hittade ingen användare.';
$strNoValidateSQL = 'Utan SQL-validering';
$strNull = 'Null';
$strNumberOfFields = 'Antal fält';
$strNumberOfTables = 'Antal tabeller';
$strNumSearchResultsInTable = '%s träff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> träff(ar)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'OpenDocument-kalkylblad';
$strOpenDocumentText = 'OpenDocument-text';
$strOpenNewWindow = 'Öppna nytt phpMyAdmin-fönster';
$strOperations = 'Operationer';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimera tabell';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';
$strOverwriteExisting = 'Skriv över befintlig fil(er)';

$strPageNumber = 'Sida:';
$strPagesToBeFlushed = 'Sidor att rensa';
$strPaperSize = 'Pappersstorlek';
$strPartialImport = 'Partiell import';
$strPartialText = 'Avkortade texter';
$strPasswordChanged = 'Lösenordet för %s har ändrats.';
$strPasswordEmpty = 'Lösenordet är tomt!';
$strPasswordHashing = 'Hashning av lösenord';
$strPassword = 'Lösenord';
$strPasswordNotSame = 'Lösenorden är inte lika!';
$strPdfDbSchema = 'Schema för databasen "%s" - Sidan %s';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPdfNoTables = 'Inga tabeller';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Skapar en rapport som innehåller data från en enstaka tabell)';
$strPDFReportTitle = 'Rapportrubrik';
$strPerHour = 'per timme';
$strPerMinute = 'per minut';
$strPerSecond = 'per sekund';
$strPersian = 'Persiska';
$strPhoneBook = 'telefonbok';
$strPHP40203 = 'Du använder PHP 4.2.3, vilken har en allvarlig bugg med multi-byte-strängar (mbstring). Se PHP:s buggrapport 19404. Denna version av PHP är inte rekommenderad för användning tillsammans med phpMyAdmin.';
$strPhp = 'Skapa PHP-kod';
$strPHPVersion = 'PHP-version';
$strPleaseSelectPrimaryOrUniqueKey = 'Välj den primära nyckeln eller en unik nyckel';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> MÅSTE anges i din konfigurationsfil!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polska';
$strPortrait = 'Stående';
$strPos1 = 'Början';
$strPrevious = 'Föregående';
$strPrimaryKeyHasBeenDropped = 'Den primära nyckeln har tagits bort';
$strPrimaryKeyName = 'Primärnyckelns namn måste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>måste</b> vara namnet på och <b>endast på</b> en primärnyckel!)';
$strPrimary = 'Primär';
$strPrint = 'Skriv ut';
$strPrintViewFull = 'Utskriftsvänlig visning (med fullständiga texter)';
$strPrintView = 'Utskriftsvänlig visning';
$strPrivDescAllPrivileges = 'Inkluderar alla privilegier utom GRANT.';
$strPrivDescAlterRoutine = 'Tillåter ändring och borttagning av lagrade rutiner.';
$strPrivDescAlter = 'Tillåter ändring av befintliga tabellers struktur.';
$strPrivDescCreateDb = 'Tillåter skapande av nya databaser och tabeller.';
$strPrivDescCreateRoutine = 'Tillåter skapande av lagrade rutiner.';
$strPrivDescCreateTbl = 'Tillåter skapande av nya tabeller.';
$strPrivDescCreateTmpTable = 'Tillåter skapande av temporära tabeller.';
$strPrivDescCreateUser = 'Tillåter skapande, borttagning och omdöpning av användarkonton.';
$strPrivDescCreateView = 'Tillåter skapande av nya vyer.';
$strPrivDescDelete = 'Tillåter borttagning av data.';
$strPrivDescDropDb = 'Tillåter borttagning av databaser och tabeller.';
$strPrivDescDropTbl = 'Tillåter borttagning av tabeller.';
$strPrivDescExecute5 = 'Tillåter utförande av lagrade rutiner.';
$strPrivDescExecute = 'Tillåter körning av lagrade procedurer; Har ingen verkan i denna MySQL-version.';
$strPrivDescFile = 'Tillåter import av data från och export av data till filer.';
$strPrivDescGrant = 'Tillåter tillägg av användare och privilegier utan omladdning av privilegiumtabellerna.';
$strPrivDescIndex = 'Tillåter skapande och borttagning av index.';
$strPrivDescInsert = 'Tillåter infogning och ersättning av data.';
$strPrivDescLockTables = 'Tillåter låsning av tabeller för gällande tråd.';
$strPrivDescMaxConnections = 'Begränsar antalet nya förbindelser användaren kan öppna per timme.';
$strPrivDescMaxQuestions = 'Begränsar antalet frågor användaren kan skicka till servern per timme.';
$strPrivDescMaxUpdates = 'Begränsar antalet kommandon, vilka ändrar någon tabell eller databas, som användaren kan utföra per timme.';
$strPrivDescMaxUserConnections = 'Begränsar antalet samtidiga förbindelser som användaren kan ha.';
$strPrivDescProcess3 = 'Tillåter dödande av andra användares processer.';
$strPrivDescProcess4 = 'Tillåter visning av fullständiga frågor i processlistan.';
$strPrivDescReferences = 'Har ingen verkan i denna MySQL-version.';
$strPrivDescReload = 'Tillåter omladdning av serverinställningar och rensning av serverns cache.';
$strPrivDescReplClient = 'Ger användaren rätt att fråga var slav- / huvudservrarna är.';
$strPrivDescReplSlave = 'Nödvändigt för replikeringsslavar.';
$strPrivDescSelect = 'Tillåter läsning av data.';
$strPrivDescShowDb = 'Ger tillgång till den fullständiga databaslistan.';
$strPrivDescShowView = 'Tillåter utförande av SHOW CREATE VIEW-frågor.';
$strPrivDescShutdown = 'Tillåter avstängning av servern.';
$strPrivDescSuper = 'Tillåter uppkoppling, även om maximala antalet förbindelser är nådd. Nödvändig för de flesta administrativa funktioner, som att sätta globala variabler eller döda andra användares trådar.';
$strPrivDescUpdate = 'Tillåter ändring av data.';
$strPrivDescUsage = 'Inga privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierna har laddats om.';
$strProcedures = 'Procedurer';
$strProcesses = 'Processer';
$strProcesslist = 'Processlista';
$strProfiling = 'Under produktion';
$strProtocolVersion = 'Protokollversion';
$strPutColNames = 'Ange fältnamn på första raden';

$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQBE = 'Skapa fråga';
$strQueryCache = 'Frågecache';
$strQueryFrame = 'Frågefönster';
$strQueryOnDb = 'SQL-fråga i databas <b>%s</b>:';
$strQueryResultsOperations = 'Operationer för frågeresultat';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Frågestatistik</b>: %s frågor har skickats till servern sedan den startade.';
$strQueryTime = 'Frågan tog %01.4f sek';
$strQueryType = 'Typ av fråga';
$strQueryWindowLock = 'Skriv inte över denna fråga utifrån detta fönster';

$strReadRequests = 'Läsefterfrågningar';
$strReceived = 'Mottagna';
$strRecommended = 'rekommenderad';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRefresh = 'Uppdatera';
$strRelationalSchema = 'Relationsschema';
$strRelationDeleted = 'Relation borttagen';
$strRelationNotWorking = 'Den extra funktionaliteten för att hantera länkade tabeller har inaktiverats. %sVisa orsaken%s.';
$strRelationsForTable = 'RELATIONER FÖR TABELL';
$strRelations = 'Relationer';
$strRelationView = 'Visa relationer';
$strReloadingThePrivileges = 'Laddar om privilegierna';
$strReloadPrivileges = 'Ladda om privilegier';
$strReload = 'Uppdatera';
$strRemoveSelectedUsers = 'Ta bort markerade användare';
$strRenameDatabaseOK = 'Databas %s har döpts om till %s';
$strRenameTable = 'Döp om tabellen till';
$strRenameTableOK = 'Tabell %s har döpts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplaceNULLBy = 'Ersätt NULL med';
$strReplaceTable = 'Ersätt data i tabell';
$strReplication = 'Replikering';
$strReset = 'Nollställ';
$strResourceLimits = 'Resursbegränsningar';
$strRestartInsertion = 'Börja om infogning med %s rader';
$strReType = 'Skriv igen';
$strRevokeAndDeleteDescr = 'Användarna kommer fortfarande ha kvar privilegiet USAGE tills privilegierna laddas om.';
$strRevokeAndDelete = 'Upphäv användarnas alla aktiva privilegier och ta bort användarna efteråt.';
$strRevokeMessage = 'Du har upphävt privilegierna för %s';
$strRevoke = 'Upphäv';
$strRomanian = 'Rumänska';
$strRoutineReturnType = 'Returtyp';
$strRoutines = 'Rutiner';
$strRowLength = 'Radlängd';
$strRowsFrom = 'rader med början från';
$strRowSize = 'Radstorlek';
$strRowsModeFlippedHorizontal = 'vågrätt (roterade rubriker)';
$strRowsModeHorizontal = 'vågrätt';
$strRowsModeOptions = 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical = 'lodrätt';
$strRows = 'Rader';
$strRowsStatistic = 'Radstatistik';
$strRunning = 'körs på %s';
$strRunQuery = 'Kör fråga';
$strRunSQLQuery = 'Kör SQL-fråga/frågor i databasen %s';
$strRunSQLQueryOnServer = 'Kör SQL-fråga/frågor på server %s';
$strRussian = 'Rysk';

$strSaveOnServer = 'Spara på servern i katalogen %s';
$strSavePosition = 'Spara position';
$strSave = 'Spara';
$strScaleFactorSmall = 'Skalfaktorn är för liten för att schemat ska få plats på en sida';
$strSearchFormTitle = 'Sök i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller värde(n) att söka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som reguljärt uttryck';
$strSearchResultsFor = 'Resultat av sökning efter "<i>%s</i>" %s:';
$strSearch = 'Sök';
$strSearchType = 'Hitta:';
$strSecretRequired = 'Konfigurationsfilen behöver nu ett hemligt lösenord (blowfish_secret).';
$strSelectADb = 'Välj en databas';
$strSelectAll = 'Markera alla';
$strSelectBinaryLog = 'Välj binär logg att visa';
$strSelectFields = 'Välj fält (minst ett):';
$strSelectForeignKey = 'Välj främmande nyckel';
$strSelectNumRows = 'i fråga';
$strSelectReferencedKey = 'Välj refererad nyckel';
$strSelectTables = 'Välj tabeller';
$strSend = 'Spara som fil';
$strSent = 'Skickade';
$strServerChoice = 'Serverval';
$strServerNotResponding = 'Servern svarar inte';
$strServer = 'Server';
$strServers = 'Servrar';
$strServerStatusDelayedInserts = 'Fördröjda infogningar';
$strServerStatus = 'Körningsinformation';
$strServerStatusUptime = 'Denna MySQL-server har körts i %s. Den startade den %s.';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertrafik</b>: Dessa tabeller visar statistik för nätverkstrafiken hos denna MySQL-server sedan den startade.';
$strServerVars = 'Servervariabler och inställningar';
$strServerVersion = 'Serverversion';
$strSessionStartupErrorGeneral = 'Kan inte starta session utan fel. Kontrollera felmeddelanden i din PHP:s och/eller webbservers loggfil och konfigurera din PHP-installation korrekt.';
$strSessionValue = 'Sessionsvärde';
$strSetEnumVal = 'Om en fälttyp är "enum" eller "set", ange värden enligt följande format: \'a\',\'b\',\'c\'...<br />Om du behöver lägga till ett bakåtstreck ("\") eller ett enkelcitat ("\'") i värdena, skriv ett bakåtstreck före tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa färger';
$strShowDatadictAs = 'Format för datalexikon';
$strShowFullQueries = 'Visa fullständiga frågor';
$strShowGrid = 'Visa rutnät';
$strShowHideLeftMenu = 'Visa/Dölj vänster meny';
$strShowingBookmark = 'Visar bokmärke';
$strShowingPhp = 'Visar som PHP-kod';
$strShowingRecords = 'Visar rader ';
$strShowingSQL = 'Visar SQL-fråga';
$strShowOpenTables = 'Visa öppna tabeller';
$strShowPHPInfo = 'Visa PHP-information';
$strShowSlaveHosts = 'Visa slav-värdar';
$strShowSlaveStatus = 'Visa slav-status';
$strShowStatusBinlog_cache_disk_useDescr = 'Antalet transaktioner som använde den temporära binära loggcachen, men som överskred värdet binlog_cache_size och använde en temporär fil för att lagra satser från transaktionen.';
$strShowStatusBinlog_cache_useDescr = 'Antalet transaktioner som använde den temporära binära loggcachen.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Antalet temporära tabeller på disk skapade automatiskt av servern under utförande av satser. Om värdet Created_tmp_disk_tables är stort vill du kanske öka värdet tmp_table_size för att åstadkomma att temporära tabeller lagras i minne istället för på disk.';
$strShowStatusCreated_tmp_filesDescr = 'Antalet temporära filer som mysqld har skapat.';
$strShowStatusCreated_tmp_tablesDescr = 'Antalet temporära tabeller i minne skapade automatiskt av servern under utförande av satser.';
$strShowStatusDelayed_errorsDescr = 'Antalet rader skrivna med INSERT DELAYED för vilka något fel uppstod (förmodligen dubblerad nyckel).';
$strShowStatusDelayed_insert_threadsDescr = 'Antalet INSERT DELAYED-hanteringstrådar i bruk. Varje tabell på vilken man använder INSERT DELAYED får sin egen tråd.';
$strShowStatusDelayed_writesDescr = 'Antalet skrivna rader med INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Antalet utförda FLUSH-satser.';
$strShowStatusHandler_commitDescr = 'Antalet interna COMMIT-satser.';
$strShowStatusHandler_deleteDescr = 'Antalet gånger en rad togs bort från en tabell.';
$strShowStatusHandler_discoverDescr = 'MySQL-servern kan fråga lagringsmotorn NDB Cluster om den känner till en tabell med ett givet namn. Detta kallas upptäckt. Handler_discover indikerar antalet gånger tabeller har upptäckts.';
$strShowStatusHandler_read_firstDescr = 'Antalet gånger första posten lästes från ett index. Om detta värde är högt tyder det på att servern gör många helindex-avsökningar; t.ex. SELECT col1 FROM foo, under förutsättning att col1 är indexerad.';
$strShowStatusHandler_read_keyDescr = 'Antalet efterfrågningar att läsa en rad baserat på en nyckel. Om detta värde är högt är det en bra indikation på att dina frågor och tabeller är riktigt indexerade.';
$strShowStatusHandler_read_nextDescr = 'Antalet efterfrågningar att läsa den följande raden i nyckelordning. Detta värde ökas om du frågar en indexkolumn med en urvalsbegränsning eller om du gör en indexavsökning.';
$strShowStatusHandler_read_prevDescr = 'Antalet efterfrågningar att läsa den föregående raden i nyckelordning. Denna läsmetod används huvudsakligen för att optimera ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Antalet efterfrågningar att läsa en rad baserat på en fix position. Detta värde är högt om du ställer många frågor som kräver sortering av resultatet. Du har förmodligen många frågor som kräver att MySQL avsöker hela tabeller eller du har föreningar som inte använder nycklar på rätt sätt.';
$strShowStatusHandler_read_rnd_nextDescr = 'Antalet efterfrågningar att läsa den följande raden i datafilen. Detta värde är högt om du gör många tabellavsökningar. I allmänhet antyder detta att dina tabeller inte är riktigt indexerade eller att dina frågor inte är skrivna för att dra nytta av de index du har.';
$strShowStatusHandler_rollbackDescr = 'Antalet interna ROLLBACK-satser.';
$strShowStatusHandler_updateDescr = 'Antalet efterfrågningar att uppdatera en rad i en tabell.';
$strShowStatusHandler_writeDescr = 'Antalet efterfrågningar att lägga till en rad i en tabell.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Antalet sidor innehållande data (orena eller rena).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Antalet sidor för närvarande orena.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Antalet buffert-sidor som har efterfrågats om att bli rensade.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Antalet fria sidor.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Antalet låsta sidor i InnoDB-buffert. Dessa är sidor som för närvarande läses eller skrivs eller som inte kan rensas eller tas bort av någon annan anledning.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Antalet upptagna sidor pga att de har blivit allokerade som administrativt extrautrymme för bl.a. radlås eller adaptivt hashindex. Detta värde kan också beräknas som Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total storlek på buffert, i sidor.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Antalet "slumpmässiga" läsningar i förväg som InnoDB initierat. Detta sker när en fråga ska avsöka en stor del av en tabell men i slumpmässig ordning.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Antalet sekventiella läsningar i förväg som InnoDB initierat. Detta sker när InnoDB gör en sekventiell avsökning av en hel tabell.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Antalet logiska läsefterfrågningar som InnoDB har gjort.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Antalet logiska läsningar som InnoDB inte kunde uppfylla från buffert och fick göra en enkelsidig läsning.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalt sker skrivningar till InnoDB-bufferten i bakgrunden. Dock om det behövs läsas eller skapas en sida och inga rena sidor finns tillgängliga, så är det nödvändigt att vänta på att sidor rensas först. Denna räknare räknar fall med dessa väntanden. Om buffertstorleken var riktigt satt ska detta värde vara litet.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Antalet skrivningar gjorda till InnoDB-bufferten.';
$strShowStatusInnodb_data_fsyncsDescr = 'Antalet fsync()-operationer hittills.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Nuvarande antal pågående fsync()-operationer.';
$strShowStatusInnodb_data_pending_readsDescr = 'Nuvarande antal pågående läsningar.';
$strShowStatusInnodb_data_pending_writesDescr = 'Nuvarande antal pågående skrivningar.';
$strShowStatusInnodb_data_readDescr = 'Mängden data läst hittills, i bytes.';
$strShowStatusInnodb_data_readsDescr = 'Totalt antal läsningar av data.';
$strShowStatusInnodb_data_writesDescr = 'Totalt antal skrivningar av data.';
$strShowStatusInnodb_data_writtenDescr = 'Mängden data skriven hittills, i bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Antalet dubbelskrivningar som har utförts och antalet sidor som har skrivits för detta ändamål.';
$strShowStatusInnodb_dblwr_writesDescr = 'Antalet dubbelskrivningar som har utförts och antalet sidor som har skrivits för detta ändamål.';
$strShowStatusInnodb_log_waitsDescr = 'Antalet väntanden pga loggbufferten var för liten och vi behövde vänta på att den skulle rensas innan kunde fortsätta.';
$strShowStatusInnodb_log_write_requestsDescr = 'Antalet efterfrågningar att skriva till logg.';
$strShowStatusInnodb_log_writesDescr = 'Antalet fysiska skrivningar till loggfilen.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Antalet fsync()-skrivningar gjorda till loggfilen.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Antalet pågående fsync() av loggfil.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pågående skrivningar till loggfil.';
$strShowStatusInnodb_os_log_writtenDescr = 'Antalet bytes skrivna till loggfilen.';
$strShowStatusInnodb_pages_createdDescr = 'Antalet skapade sidor.';
$strShowStatusInnodb_page_sizeDescr = 'Den inkompilerade InnoDB-sidstorleken (standard 16kB). Många värden räknas i sidor; sidstorleken tillåter dem att enkelt omvandlas till bytes.';
$strShowStatusInnodb_pages_readDescr = 'Antalet lästa sidor.';
$strShowStatusInnodb_pages_writtenDescr = 'Antalet skrivna sidor.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Antalet radlås som för närvarande väntas på.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Genomsnittlig tid för att skaffa ett radlås, i millisekunder.';
$strShowStatusInnodb_row_lock_timeDescr = 'Total tid spenderad på att skaffa radlås, i millisekunder.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maximal tid för att skaffa ett radlås, i millisekunder.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Antalet gånger ett radlås behövde väntas på.';
$strShowStatusInnodb_rows_deletedDescr = 'Antalet rader borttagna från InnoDB-tabeller.';
$strShowStatusInnodb_rows_insertedDescr = 'Antalet rader tillagda i InnoDB-tabeller.';
$strShowStatusInnodb_rows_readDescr = 'Antalet rader lästa från InnoDB-tabeller.';
$strShowStatusInnodb_rows_updatedDescr = 'Antalet rader uppdaterade i InnoDB-tabeller.';
$strShowStatusKey_blocks_not_flushedDescr = 'Antalet nyckelblock i nyckelcachen som har ändrats men inte ännu överförts till disk. Det brukade vara känt som Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Antalet oanvända block i nyckelcachen. Du kan använda detta värde för att avgöra hur stor del av nyckelcachen som används.';
$strShowStatusKey_blocks_usedDescr = 'Antalet använda block i nyckelcachen. Detta värde är ett högvattenmärke som indikerar maximala antalet block som någonsin använts vid ett tillfälle.';
$strShowStatusKey_read_requestsDescr = 'Antalet efterfrågningar att läsa ett nyckelblock från cachen.';
$strShowStatusKey_readsDescr = 'Antalet fysiska läsningar av ett nyckelblock från disk. Om värdet Key_reads är stort, då är förmodligen ditt värde key_buffer_size för litet. Cachens missfrekvens kan beräknas som Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Antalet efterfrågningar att skriva ett nyckelblock till cachen.';
$strShowStatusKey_writesDescr = 'Antalet fysiska skrivningar av ett nyckelblock till disk.';
$strShowStatusLast_query_costDescr = 'Den totala kostnaden för den senaste kompilerade frågan enligt beräkning av frågeoptimeraren. Användbart vid jämförelse av kostnad för olika frågesätt av samma fråga. Standardvärdet 0 innebär att ingen fråga har kompilerats ännu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Antalet rader som väntar på att skrivas i INSERT DELAYED-köer.';
$strShowStatusOpened_tablesDescr = 'Antalet tabeller som har öppnats. Om antalet öppnade tabeller är stort är förmodligen ditt tabellcache-värde för litet.';
$strShowStatusOpen_filesDescr = 'Antalet filer som är öppna.';
$strShowStatusOpen_streamsDescr = 'Antalet strömmar som är öppna (används huvudsakligen för loggning).';
$strShowStatusOpen_tablesDescr = 'Antalet tabeller som är öppna.';
$strShowStatusQcache_free_blocksDescr = 'Antalet fria minnesblock i frågecachen.';
$strShowStatusQcache_free_memoryDescr = 'Mängden fritt minne för frågecache.';
$strShowStatusQcache_hitsDescr = 'Antalet cache-träffar.';
$strShowStatusQcache_insertsDescr = 'Antalet frågor tillagda i cachen.';
$strShowStatusQcache_lowmem_prunesDescr = 'Antalet frågor som har tagits bort från cachen för att frigöra minne för cachning av nya frågor. Denna information kan hjälpa dig att ställa in storleken på frågecachen. Frågecachen använder strategin minst nyligen använd (LRU) för att bestämma vilka frågor som ska tas bort från cachen.';
$strShowStatusQcache_not_cachedDescr = 'Antalet icke-cachade frågor (inte möjliga att cacha eller inte cachade pga inställningen query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Antalet frågor registrerade i cachen.';
$strShowStatusQcache_total_blocksDescr = 'Totala antalet block i frågecachen.';
$strShowStatusReset = 'Återställ';
$strShowStatusRpl_statusDescr = 'Status för felsäker replikering (ännu inte implementerat).';
$strShowStatusSelect_full_joinDescr = 'Antalet föreningar som inte använder index. Om detta värde inte är 0, bör du noggrant kontrollera index för dina tabeller.';
$strShowStatusSelect_full_range_joinDescr = 'Antalet föreningar som använde en urvalssökning på en referenstabell.';
$strShowStatusSelect_range_checkDescr = 'Antalet föreningar utan nycklar som kontrollerar nyckelanvändning efter varje rad. (Om detta värde inte är 0, bör du noggrant kontrollera index för dina tabeller.)';
$strShowStatusSelect_rangeDescr = 'Antalet föreningar som använde urval på den första tabellen. (Det är normalt inte kritiskt även om detta är stort.)';
$strShowStatusSelect_scanDescr = 'Antalet föreningar som gjorde en fullständig avsökning av första tabellen.';
$strShowStatusSlave_open_temp_tablesDescr = 'Antalet temporära tabeller för närvarande öppna av slavens SQL-tråd.';
$strShowStatusSlave_retried_transactionsDescr = 'Totalt (sedan start) antal gånger som replikeringsslavens SQL-tråd har omprövat transaktioner.';
$strShowStatusSlave_runningDescr = 'Denna är ON ifall denna server är en slav som är förbunden till en huvudserver.';
$strShowStatusSlow_launch_threadsDescr = 'Antalet frågor som har tagit mer än slow_launch_time sekunder att skapa.';
$strShowStatusSlow_queriesDescr = 'Antalet frågor som har tagit mer än long_query_time sekunder.';
$strShowStatusSort_merge_passesDescr = 'Antalet sammanslagningar som sorteringsalgoritmen har behövt utföra. Om detta värde är stort bör du överväga att öka värdet i systemvariabeln sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Antalet sorteringar som gjordes med urval.';
$strShowStatusSort_rowsDescr = 'Antalet sorterade rader.';
$strShowStatusSort_scanDescr = 'Antalet sorteringar som har gjorts genom avsökning av tabellen.';
$strShowStatusTable_locks_immediateDescr = 'Antalet gånger som ett tabellås förvärvades omedelbart.';
$strShowStatusTable_locks_waitedDescr = 'Antalet gånger som ett tabellås inte kunde förvärvas omedelbart och en väntan var nödvändig. Om detta värde är högt och du har prestandaproblem bör du först optimera dina frågor och antingen dela upp din tabell eller tabeller eller använda replikering.';
$strShowStatusThreads_cachedDescr = 'Antalet trådar i trådcachen. Cachens träffrekvens kan beräknas som Threads_created/Connections. Om detta värde är rött bör du öka värdet thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Antalet för närvarande öppna förbindelser.';
$strShowStatusThreads_createdDescr = 'Antalet trådar skapade för att hantera förbindelser. Om värdet Threads_created är stort, vill du kanske öka värdet thread_cache_size. (Normalt ger detta inte någon märkbar prestandaförbättring om du har en bra trådimplementering.)';
$strShowStatusThreads_runningDescr = 'Antalet trådar som inte är vilande.';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa frågan här igen ';
$strShow = 'Visa';
$strSimplifiedChinese = 'Förenklad kinesiska';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSkipQueries = 'Antal poster (rader) att hoppa över från början';
$strSlovak = 'Slovakiska';
$strSlovenian = 'Slovenska';
$strSmallBigAll = 'Små/stora alla';
$strSnapToGrid = 'Fäst vid rutnät';
$strSocketProblem = '(eller den lokala MySQL-serverns socket är inte korrekt konfigurerad)';
$strSortByKey = 'Sortera efter nyckel';
$strSorting = 'Sortering';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanvändning';
$strSpanish = 'Spanska';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strSQLCompatibility = 'SQL-kompatibilitet';
$strSQLExportType = 'Export-typ';
$strSQLParserBugMessage = 'Det är möjligt att du har hittat en bugg i SQL-analysatorn. Var god granska din fråga noga och kontrollera att citationstecknen är korrekta och matchar varandra. En annan möjlig felorsak kan vara att du överför en fil med binärkod som inte ligger inom citationstecken. Du kan även testa din fråga i MySQL:s kommandoradsgränssnitt. Felmeddelandet från MySQL-servern nedan, om det finns något, kan också hjälpa dig att analysera problemet. Om du fortfarande har problem eller om SQL-analysatorn misslyckas när kommandoradsgränssnittet lyckas, var vänlig reducera din inmatning av SQL-frågor till den enda fråga som orsakar problem och skicka en buggrapport med datastycket i URKLIPP-sektionen nedan:';
$strSQLParserUserError = 'Det verkar vara ett fel i din SQL-fråga. Felmeddelandet från MySQL-servern nedan, om det finns något, kan också hjälpa dig att analysera problemet.';
$strSQLQuery = 'SQL-fråga';
$strSQLResult = 'SQL-resultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ogiltig identifierare';
$strSQPBugUnclosedQuote = 'Oavslutat citat';
$strSQPBugUnknownPunctuation = 'Okänd interpunktion i sträng';
$strStandInStructureForView = 'Ersättningsstruktur för visning';
$strStatCheckTime = 'Senaste kontroll';
$strStatCreateTime = 'Skapades';
$strStatement = 'Uppgift';
$strStatisticsOverrun = 'På en upptagen server kan byte-räknare spåra ur, varför denna statistik som rapporterats från MySQL-servern kan vara felaktig.';
$strStatUpdateTime = 'Senaste uppdatering';
$strStatus = 'Status';
$strStorageEngine = 'Lagringsmotor';
$strStorageEngines = 'Lagringsmotorer';
$strStrucCSV = 'CSV';
$strStrucData = 'Struktur och data';
$strStrucExcelCSV = 'CSV för MS Excel';
$strStrucNativeExcel = 'Naturlig MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'Föreslå tabellstruktur';
$strStructureForView = 'Struktur för visning';
$strStructure = 'Struktur';
$strSubmit = 'Sänd';
$strSuccess = 'Din SQL-fråga utfördes korrekt';
$strSuhosin = 'Server körs med Suhosin. Se %sdokumentation%s för möjliga frågor.';
$strSum = 'Summa';
$strSwedish = 'Svensk';
$strSwitchToDatabase = 'Byt till kopierad databas';
$strSwitchToTable = 'Byt till kopierad tabell';

$strTableAlreadyExists = 'Tabell %s finns redan!';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet är tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har tömts';
$strTableHasBeenFlushed = 'Tabellen %s har rensats';
$strTableIsEmpty = 'Tabellen verkar vara tom!';
$strTableMaintenance = 'Tabellunderhåll';
$strTableName = 'Tabellnamn';
$strTableOfContents = 'Innehållsförteckning';
$strTableOptions = 'Tabellalternativ';
$strTables = '%s tabell(er)';
$strTableStructure = 'Struktur för tabell';
$strTable = 'Tabell';
$strTakeIt = 'använd detta';
$strTblPrivileges = 'Tabellspecifika privilegier';
$strTempData = 'Temporära data';
$strTextAreaLength = ' På grund av dess längd,<br /> kanske detta fält inte kan redigeras ';
$strThai = 'Thailändsk';
$strThemeDefaultNotFound = 'Standardtema %s hittades inte!';
$strThemeNoPreviewAvailable = 'Ingen förhandsgranskning tillgänglig.';
$strThemeNotFound = 'Tema %s hittades inte!';
$strThemeNoValidImgPath = 'Ingen giltig sökväg till bilder för tema %s hittades!';
$strThemePathNotFound = 'Temats sökväg för tema %s hittades inte!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Denna värd';
$strThreads = 'Trådar';
$strThreadSuccessfullyKilled = 'Tråd %s dödades med framgång.';
$strTimeoutInfo = 'Tidsbegränsningen överskreds vid föregående import. Efter återupptagning av importen kommer den fortsätta från position %d.';
$strTimeoutNothingParsed = 'Dock blev inga data bearbetade i senaste körningen. Detta betyder vanligtvis att phpMyAdmin inte kan slutföra denna import såvida du inte ökar PHP:s tidsbegränsningar.';
$strTimeoutPassed = 'Skriptets tidsbegränsning har överskridits. Om du vill slutföra importen, importera samma fil igen så kommer importen att återupptas.';
$strTime = 'Tid';
$strToFromPage = 'till/från sida';
$strToggleScratchboard = 'Visa/dölj skisstavla';
$strToggleSmallBig = 'Växla liten/stor';
$strToSelectRelation = 'För att välja relation, klicka :';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraditionalChinese = 'Traditionell kinesiska';
$strTraditionalSpanish = 'Traditionell Spanska';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'Transaktionssamordnare';
$strTransformation_application_octetstream__download = 'Visar en länk för att ladda ner fältets binära data. Du kan använda första parametern för att ange filnamnet eller använda den andra parametern för att ange fältnamnet för en tabellkolumn som innehåller filnamn. Om du anger andra parametern så måste första parametern sättas till en tom sträng.';
$strTransformation_application_octetstream__hex = 'Visar hexadecimal representation av data. Valfri första parameter anger hur ofta mellanslag läggs till (standardvärde: 2 tecken).';
$strTransformation_image_jpeg__inline = 'Visar en klickbar tumnagelbild. Parametrarna är maximal bredd och höjd i pixlar. Bildens ursprungliga proportioner bibehålls.';
$strTransformation_image_jpeg__link = 'Visar en länk för att ladda ner denna bild.';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Visar en TIME, TIMESTAMP, DATETIME eller numerisk unix tidsstämpel som ett formaterat datum. Första parametern är förskjutning (i timmar) som kommer adderas till tidsstämpeln (standardvärde: 0). Använd andra parametern för att ange ett annorlunda datum/tid-format. Tredje parametern avgör ifall du vill se lokalt datum eller UTC (ange "local" eller "utc"). Enligt detta har datumformatet olika värden - för "local" se dokumentationen för PHP:s funktion strftime() och för "utc" se funktionen gmdate().';
$strTransformation_text_plain__external = 'ENDAST LINUX: Startar en extern applikation och skickar fältdata till den via standard-indata. Returnerar applikationens standard-utdata. Standard är Tidy, för att snygga till HTML-kod. Av säkerhetsskäl måste du manuellt redigera filen libraries/transformations/text_plain__external.inc.php och infoga verktygen du vill tillåta ska få köras. Den första parametern är då numret för det program som du vill använda och den andra parametern är parametrarna för programmet. Om den tredje parametern sätts till 1 kommer utdata konverteras mha htmlspecialchars() (standardvärde: 1). Om den fjärde parametern sätts till 1 kommer radbrytning att undvikas så att all utdata kommer att visas på en rad (standardvärde: 1).';
$strTransformation_text_plain__formatted = 'Visar innehållet i fältet som det är, utan att köra det genom htmlspecialchars(). Det innebär att fältet antas innehålla korrekt HTML-kod.';
$strTransformation_text_plain__imagelink = 'Visar en bild och en länk; fältet innehåller filnamnet. Första parametern är ett URL-prefix såsom "http://www.example.com/". Andra och tredje parametern är bredden och höjden i pixlar.';
$strTransformation_text_plain__link = 'Visar en länk; fältet innehåller filnamnet. Första parametern är ett URL-prefix såsom "http://www.example.com/". Andra parametern är en titel för länken.';
$strTransformation_text_plain__sql = 'Formaterar text som en SQL-fråga med markerade satser.';
$strTransformation_text_plain__substr = 'Visar del av en sträng. Första parametern är antalet tecken att hoppa över från början på strängen (standardvärde: 0). Andra parametern är antalet tecken som ska returneras (standardvärde: till slutet på strängen). Den tredje parametern är en sträng som läggs till i slutet och/eller början när trunkering utförs (standardvärde: "...").';
$strTriggers = 'Utlösare';
$strTruncateQueries = 'Korta av visade frågor';
$strTurkish = 'Turkisk';
$strType = 'Typ';

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Avmarkera alla';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'okänd';
$strUnselectAll = 'Avmarkera alla';
$strUnsupportedCompressionDetected = 'Du försökta ladda en fil med komprimering (%s) som inte stöds. Antingen är stöd för det inte implementerat eller inaktiverat i din konfiguration.';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna för %s.';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fråga';
$strUpdComTab = 'Se dokumentationen för uppdatering av din tabell column_comments';
$strUpgrade = 'Du bör uppgradera till %s %s eller senare.';
$strUploadErrorCantWrite = 'Misslyckades att skriva fil till disk.';
$strUploadErrorExtension = 'Filuppladdning stoppades av tillägg.';
$strUploadErrorFormSize = 'Den uppladdade filen överskrider direktivet MAX_FILE_SIZE som specificerades i HTML-formuläret.';
$strUploadErrorIniSize = 'Den uppladdade filen överskrider direktivet upload_max_filesize i php.ini.';
$strUploadErrorNoTempDir = 'Saknar en temporär katalog.';
$strUploadErrorPartial = 'Den uppladdade filen var endast delvis uplladdad.';
$strUploadErrorUnknown = 'Okänt fel i filuppladdning.';
$strUploadLimit = 'Du försökte förmodligen ladda upp en för stor fil. Se %sdokumentationen%s för metoder att gå runt denna begränsning.';
$strUploadsNotAllowed = 'Filuppladdningar är inte tillåtna på denna server.';
$strUsage = 'Användning';
$strUseBackquotes = 'Använd bakåtcitat runt tabell- och fältnamn';
$strUsedPhpExtensions = 'Använda PHP-tillägg';
$strUseHostTable = 'Använd värdtabell';
$strUserAlreadyExists = 'Användaren %s finns redan!';
$strUser = 'Användare';
$strUserEmpty = 'Användarnamnet är tomt!';
$strUserName = 'Användarnamn';
$strUserNotFound = 'Den markerade användaren kunde inte hittas i privilegiumtabellen.';
$strUserOverview = 'Användaröversikt';
$strUsersDeleted = 'De markerade användarna har tagits bort.';
$strUsersHavingAccessToDb = 'Användare som har tillgång till &quot;%s&quot;';
$strUseTabKey = 'Använd TAB-tangenten för att flytta från värde till värde, eller CTRL+pil för att flytta vart som helst';
$strUseTables = 'Använd tabeller';
$strUseTextField = 'Använd textfältet';
$strUseThisValue = 'Använd detta värde';

$strValidateSQL = 'Validera SQL-kod';
$strValidatorError = 'SQL-validatorn kunde inte initieras. Kontrollera om du har installerat de nödvändiga PHP-tilläggen enligt %sdokumentationen%s.';
$strValue = 'Värde';
$strVar = 'Variabel';
$strVersionInformation = 'Versionsinformation';
$strViewDumpDatabases = 'Visa SQL-satser för databaser';
$strViewDumpDB = 'Visa SQL-satser för databasen';
$strViewDump = 'Visa SQL-satser för tabellen';
$strViewHasBeenDropped = 'Vyn %s har tagits bort';
$strViewMaxExactCount = 'Denna vy har mer än %s rader. Var god se %sdokumentationen%s.';
$strViewName = 'Namn på vy';
$strView = 'Vy';

$strWebServerUploadDirectoryError = 'Katalogen som du konfigurerat för uppladdning kan inte nås';
$strWebServerUploadDirectory = 'Uppladdningskatalog på webbserver';
$strWelcome = 'Välkommen till %s';
$strWestEuropean = 'Västeuropeisk';
$strWildcard = 'jokertecken';
$strWindowNotFound = 'Målfönstret kunde inte uppdateras. Orsaken kan vara att du stängt föräldrafönstret eller att din webbläsares säkerhetsinställningar blockerar uppdateringar mellan fönster.';
$strWithChecked = 'Med markerade:';
$strWriteRequests = 'Skrivefterfrågningar';
$strWrongUser = 'Fel användarnamn/lösenord. Åtkomst nekad.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Anm: Genom att sätta dessa alternativ till 0 (noll) tas begränsningarna bort.';
$strZip = '"zippad"';
?>
