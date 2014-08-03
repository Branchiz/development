<?php
/* $Id: danish-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */ /* danish - Dansk v 2.20 (based on english rev. 10226) 2007/04/03 01:23:45 - oversætter AlleyKat kan kontaktes på < phpmyadmin (at) phpbb2.dk > */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// forkortelser for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits  =  array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

// MySQL manual sprogdefinition, ikke påkrævet, en bruges hvis
// ikke defineret - da findes endnu ikke
$mysql_4_1_doc_lang = 'en';
$mysql_5_0_doc_lang = 'en';
$mysql_5_1_doc_lang = 'en';

$day_of_week  =  array('søn', 'man', 'tir', 'ons', 'tor', 'fre', 'lør');
$month  =  array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
// Se http://www.php.net/manual/en/function.strftime.php
// for at definere variablen herunder
$datefmt = '%d. %m %Y kl. %H:%M:%S';
$timespanfmt = '%s dage, %s timer, %s minutter og %s sekunder';

$strAbortedClients = 'Afbrudt';
$strAccessDenied = 'Adgang Nægtet';
$strAccessDeniedCreateConfig = 'Sandsynlig årsag til dette er at du ikke har oprettet en konfigurationsfil. Du kan bruge %1$sopsætningsscriptet%2$s til at oprette en.';
$strAccessDeniedExplanation = 'phpMyAdmin forsøgte at forbinde til MySQL-serveren, og serveren afviste forbindelsen. Du bør tjekke host, brugernavn og kodeord i config.inc.php og sikre dig at de svarer til den information du har fået af administratoren af MySQL-serveren.';
$strAction = 'Handling';
$strAddAutoIncrement = 'Tilføj AUTO_INCREMENT værdi';
$strAddClause = 'Tilføj %s';
$strAddConstraints = 'Tilføj begrænsninger';
$strAddDeleteColumn = 'Tilføj/Slet felt-kolonne';
$strAddDeleteRow = 'Tilføj/Slet kriterie-række';
$strAddFields = 'Tilføj %s felt(er)';
$strAddHeaderComment = 'Tilføj tilpassede kommentarer i headeren (\\n deler linjer)';
$strAddIntoComments = 'Tilføj til kommentarer';
$strAddNewField = 'Tilføj nyt felt';
$strAddPrivilegesOnDb = 'Tilføj privilegier på følgende database';
$strAddPrivilegesOnTbl = 'Tilføj privileges på følgende tabel';
$strAddSearchConditions = 'Tilføj søgekriterier (kroppen af "WHERE" sætningen):';
$strAddToIndex = 'Føj til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUserMessage = 'Du har tilføjet en ny bruger.';
$strAddUser = 'Tilføj en ny bruger';
$strAdministration = 'Administration';
$strAffectedRows = 'Berørte rækker:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Tilbage til foregående side';
$strAfterInsertNewInsert = 'Indsæt endnu en ny række';
$strAfterInsertNext = 'Redigér næste række';
$strAfterInsertSame = 'Gå tilbage til denne side';
$strAll = 'Alle';
$strAllowInterrupt = 'Tillad afbrydelse af import hvis scriptet er tæt på tidsgrænsen. Dette kan være en god metode til at importere større filer, men kan knække transaktioner.';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Arrangér tabelrækkefølge efter';
$strAnalyzeTable = 'Analysér tabel';
$strAnd = 'Og';
$strAndThen = 'og derefter';
$strAngularLinks = 'Angulære links';
$strAnIndex = 'Der er tilføjet et indeks til %s';
$strAny = 'Enhver';
$strAnyHost = 'Enhver vært';
$strAnyUser = 'Enhver bruger';
$strApproximateCount = 'Kan være anslået. Se FAQ 3.11';
$strAPrimaryKey = 'En primær nøgle er blevet tilføjet til %s';
$strArabic = 'Arabisk';
$strArmenian = 'Armensk';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'I begyndelsen af tabel';
$strAtEndOfTable = 'I slutningen af tabel';
$strAttr = 'Attributter';
$strAutomaticLayout = 'Automatisk layout';

$strBack = 'Tilbage';
$strBaltic = 'Baltisk';
$strBeginCut = 'BEGYND KLIP';
$strBeginRaw = 'BEGYND RÅ';
$strBinary = ' Binært ';
$strBinaryDoNotEdit = ' Binært - må ikke ændres ';
$strBinaryLog = 'Binær log';
$strBinLogEventType = 'Hændelsestype';
$strBinLogInfo = 'Information';
$strBinLogName = 'Lognavn';
$strBinLogOriginalPosition = 'Original position';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Lad alle brugere bruge dette bogmærke';
$strBookmarkCreated = 'Bogmærke %s oprettet';
$strBookmarkDeleted = 'Bogmærket er fjernet.';
$strBookmarkLabel = 'Mærke';
$strBookmarkQuery = 'SQL-forespørgsel med bogmærke';
$strBookmarkReplace = 'Erstat eksisterende bogmærke af samme navn';
$strBookmarkThis = 'Lav bogmærke til denne SQL-forespørgsel';
$strBookmarkView = 'Kun oversigt';
$strBrowseDistinctValues = 'Gennemse bestemte værdier';
$strBrowseForeignValues = 'Bladre i fremmedværdier';
$strBrowse = 'Vis';
$strBufferPoolActivity = 'Buffer Pool Aktivitet';
$strBufferPool = 'Buffer Pool';
$strBufferPoolUsage = 'Buffer Pool Forbrug';
$strBufferReadMissesInPercent = 'Read misses i %';
$strBufferReadMisses = 'Read misses';
$strBufferWriteWaitsInPercent = 'Write waits i %';
$strBufferWriteWaits = 'Write waits';
$strBulgarian = 'Bulgarsk';
$strBusyPages = 'Travle sider';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpet på grund af en ødelagt Bz2 extension i denne PHP-version. Det anbefales kraftigt at sætte <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurationsfil til <code>FALSE</code>. Hvis du vil bruge Bz2 komprimeringsfeatures, bør du opdatere til en nyere PHP-version. Se PHP bug report %s for detaljer.';
$strBzip = '"bzipped"';

$strCalendar = 'Kalender';
$strCancel = 'Annuller';
$strCanNotLoadExportPlugins = 'Kunne ikke indlæse eksportplugins, check venligst din installation!';
$strCanNotLoadImportPlugins = 'Kunne ikke indlæse importplugins, check venligst din installation!';
$strCannotLogin = 'Kan ikke logge ind på MySQL-serveren';
$strCantLoad = 'Kan ikke indlæse [a@http://php.net/%1$s@Dokumentation][em]%1$s[/em][/a] udvidelsen. Tjek venligst din PHP-konfiguration.';
$strCantLoadRecodeIconv = 'Kan ikke indlæse iconv eller omkode nødvendig udvidelse til tegnsæt-konvertering, konfigurer PHP til at tillade brug af disse udvidelser eller slå tegnsæt-konvertering fra i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke omdøbe indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruge iconv ejheller libiconv eller recode_string funktionen omend udvidelsen ser ud til at være indlæst. Check din PHP-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCaseInsensitive = 'ingen forskel på store/små bogstaver';
$strCaseSensitive = 'forskel på store/små bogstaver';
$strCentralEuropean = 'Centraleuropæisk';
$strChange = 'Ændre';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slet den gamle fra brugertabellerne og genindlæs privilegierne efterfølgende.';
$strChangeCopyModeJustDelete = ' ... slet den gamle fra brugertabellerne.';
$strChangeCopyMode = 'Opret en bruger med samme privilegier og ...';
$strChangeCopyModeRevoke = ' ... tilbagekald alle aktive privilegier fra den gamle og slet den efterfølgende.';
$strChangeCopyUser = 'Ret Login-information / Kopiér bruger';
$strChangeDisplay = 'Vælg felt der skal vises';
$strChangePassword = 'Ændre kodeord';
$strCharsetOfFile = 'Tegnsæt for filen:';
$strCharsetsAndCollations = 'Tegnsæt og kollationer (Collations)';
$strCharsets = 'Tegnsæt';
$strCharset = 'Tegnsæt';
$strCheckAll = 'Afmærk alt';
$strCheckOverhead = 'Check tabeller der har overhead';
$strCheckPrivs = 'Check Privilegier';
$strCheckPrivsLong = 'Check privilegier for database &quot;%s&quot;.';
$strCheckTable = 'Tjek tabel';
$strChoosePage = 'Vælg en side der skal redigeres';
$strColComFeat = 'Viser kolonne-kommentarer';
$strCollation = 'Kollation (Collation)';
$strColumnNames = 'Kolonnenavne';
$strColumnPrivileges = 'Kolonne-specifikke privilegier';
$strCommand = 'Kommando';
$strCommentsForTable = 'COMMENTS FOR TABLE (tabel-kommentarer)';
$strComments = 'Kommentarer';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibel';
$strCompleteInserts = 'Komplette inserts';
$strCompression = 'Komprimering';
$strCompressionWillBeDetected = 'Importeret fil-komprimering vil blive automatisk registreret fra: %s';
$strConfigDefaultFileError = 'Kunne ikke indlæse standardkonfiguration fra: "%1$s"';
$strConfigFileError = 'phpMyAdmin kunne ikke læse din konfigurationsfil!<br />Dette kan ske hvis PHP finder en parser-fejl i den, eller PHP ikke kan finde filen.<br />Kald konfigurationsfilen direkte fra nedenstående link og læs de(n) PHP-fejlmeddelelse(r) du får. I de fleste tilfælde mangler der et anførselstegn eller et semikolon et sted.<br />Hvis du får en blank side, er alt i orden.';
$strConfigureTableCoord = 'Konfigurér venligst koordinaterne for tabel %s';
$strConnectionError = 'Kan ikke forbinde: ugyldige indstillinger.';
$strConnections = 'Forbindelser';
$strConstraintsForDumped = 'Begrænsninger for dumpede tabeller';
$strConstraintsForTable = 'Begrænsninger for tabel';
$strControluserFailed = 'Forbindelse for kontrolbruger som defineret i din konfiguration slog fejl.';
$strCookiesRequired = 'Herefter skal cookies være slået til.';
$strCopy = 'Kopi';
$strCopyDatabaseOK = 'Database %s er blevet kopieret til %s';
$strCopyTable = 'Kopier tabel til (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabellen %s er nu kopieret til: %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til den samme!';
$strCouldNotKill = 'phpMyAdmin kunne ikke dræbe tråden %s. Den er sandsynligvis allerede lukket.';
$strCreate = 'Opret';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE før kopiering';
$strCreateIndex = 'Dan et indeks på&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lav et nyt indeks';
$strCreateNewDatabase = 'Opret ny database';
$strCreateNewTable = 'Opret ny tabel i database %s';
$strCreatePage = 'Opret en ny side';
$strCreatePdfFeat = 'Oprettelse af PDFer';
$strCreateRelation = 'Opret relation';
$strCreateTable  = 'Opret tabel';
$strCreateUserDatabase = 'Database for bruger';
$strCreateUserDatabaseName = 'Opret database med samme navn og tildel alle privilegier';
$strCreateUserDatabaseNone = 'Ingen';
$strCreateUserDatabaseWildcard = 'Tildel alle privilegier til jokertegn-navn (brugernavn_%)';
$strCreationDates = 'Oprettet/Opdateret/Check datoer';
$strCriteria = 'Kriterier';
$strCroatian = 'Kroatisk';
$strCSV = 'CSV (kommasepareret)';
$strCyrillic = 'Kyrillisk';
$strCzech = 'Tjekkisk';
$strCzechSlovak = 'Tjekkisk-Slovakisk';

$strDanish = 'Dansk';
$strDatabase = 'Database';
$strDatabaseEmpty = 'Databasenavnet er tomt!';
$strDatabaseExportOptions = 'Database eksportindstillinger';
$strDatabaseHasBeenDropped = 'Database %s er slettet.';
$strDatabases = 'Databaser';
$strDatabasesDropped = '%s databaser er blevet droppet korrekt.';
$strDatabasesStats = 'Databasestatistik';
$strDatabasesStatsDisable = 'Slå Statistikker fra';
$strDatabasesStatsEnable = 'Slå Statistikker til';
$strDatabasesStatsHeavyTraffic = 'Bemærk: Aktivering af databasestatistikkerne hér kan forårsage tung trafik mellem webserveren og MySQL-serveren.';
$strData = 'Data';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Kun data';
$strDataPages = 'Sider der indeholder data';
$strDBComment = 'Databasekommentar: ';
$strDBCopy = 'Kopiér database til';
$strDbIsEmpty = 'Database ser ud til at være tom!';
$strDbPrivileges = 'Database-specifikke privilegier';
$strDBRename = 'Omdøb database til';
$strDbSpecific = 'database-specifik';
$strDefault = 'Standardværdi';
$strDefaultEngine = '%s er standard datalageret på denne MySQL-server.';
$strDefaultValueHelp = 'For standardværdier, indtast venligst kun en enkelt værdi, uden backslash escaping eller quotes, ud fra følgende format: a';
$strDefragment = 'Defragmentér tabel';
$strDelayedInserts = 'Brug forsinkede indsættelser';
$strDeleteAndFlushDescr = 'Dette er den sikreste metode, men genindlæsning af privilegierne kan tage noget tid.';
$strDeleteAndFlush = 'Slet brugerne og genindlæs privilegier bagefter.';
$strDelete = 'Slet';
$strDeletedRows = 'Slettede rækker:';
$strDeleted = 'Rækken er slettet!';
$strDeleteNoUsersSelected = 'Ingen brugere valgt til sletning!';
$strDeleteRelation = 'Slet relation';
$strDeleting = 'Sletter %s';
$strDelimiter = 'Adskiller';
$strDelOld = 'Nuværende side har referencer til tabeller der ikke længere eksisterer. Vil du slette disse referencer?';
$strDescending = 'Faldende';
$strDescription = 'Beskrivelse';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Visningsfeltet er vist som pink. For at sætte/fjerne et felt som visningsfelt, klik på "Vælg felt der skal vises" ikonet, og klik derefter på det pågældende feltnavn.';
$strDictionary = 'ordbog';
$strDirectLinks = 'Direkte links';
$strDirtyPages = 'Beskidte sider';
$strDisabled = 'Slået fra';
$strDisableForeignChecks = 'Slå fremmednøgle-checks fra';
$strDisplayFeat = 'Vis muligheder';
$strDisplayOrder = 'Rækkefølge af visning:';
$strDisplayPDF = 'Vis PDF-skematik';
$strDoAQuery = 'Kør en forespørgsel på felter (jokertegn: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Er du sikker på at du vil ';
$strDropDatabaseStrongWarning = 'Du er ved at DESTRUERE en komplet database!';
$strDrop = 'Slet';
$strDropUsersDb = 'Drop databaser der har samme navne som brugernes.';
$strDumpingData = 'Data dump for tabellen';
$strDumpSaved = 'Dump er blevet gemt i filen %s.';
$strDumpXRows = 'Dump %s rækker startende med række %s.';
$strDynamic = 'dynamisk';

$strEditPDFPages = 'Redigér PDF-sider';
$strEditPrivileges = 'Ret privilegier';
$strEdit = 'Ret';
$strEffective = 'Effektiv';
$strEmptyResultSet = 'MySQL returnerede ingen data (fx ingen rækker).';
$strEmpty = 'Tøm';
$strEnabled = 'Slået til';
$strEncloseInTransaction = 'Inkludér eksport i en transaktion';
$strEndCut = 'SLUT KLIP';
$strEndRaw = 'SLUT RÅ';
$strEnd = 'Slut';
$strEngineAvailable = '%s er tilgængelig på denne MySQL-server.';
$strEngineDisabled = '%s er slået fra på denne MySQL-server.';
$strEngines = 'Lagre';
$strEngineUnsupported = 'Denne MySQL-server understøtter ikke %s datalager.';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' NB: Navne på MySQL privilegier er på engelsk ';
$strError = 'Fejl';
$strErrorInZipFile = 'Fejl i ZIP arkiv:';
$strErrorRelationAdded = 'Fejl: Relation ikke tilføjet.';
$strErrorRelationExists = 'Fejl: Relation findes allerede.';
$strErrorSaveTable = 'Fejl ved lagring af koordinater for Designer.';
$strErrorRenamingTable = 'Fejl ved omdøbning af tabel  %1$s til %2$s';
$strEscapeWildcards = 'Jokertegn _ og % skal være escaped med en \ foran for at bruge dem bogstaveligt';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estisk';
$strExcelEdition = 'Excel-udgave';
$strExecuteBookmarked = 'Udfør forespørgsel iflg. bogmærke';
$strExplain = 'Forklar SQL';
$strExport = 'Eksport';
$strExportImportToScale = 'Eksporter/Importer til skala';
$strExportMustBeFile = 'Valgte eksporttype skal gemmes som fil!';
$strExtendedInserts = 'Udvidede inserts';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Mislykkede forsøg';
$strField = 'Feltnavn';
$strFieldHasBeenDropped = 'Felt %s er slettet';
$strFieldInsertFromFileTempDirNotExists = 'Fejl ved flytning af den uploadede fil, se FAQ 1.11';
$strFieldsEnclosedBy = 'Felter indrammet med';
$strFieldsEscapedBy = 'Felter escaped med';
$strFields = 'Felter';
$strFieldsTerminatedBy = 'Felter afsluttet med';
$strFileAlreadyExists = 'Filen %s findes allerede på serveren, lav filnavnet om eller tillad at der overskrives.';
$strFileCouldNotBeRead = 'Filen kunne ikke læses';
$strFileNameTemplateDescriptionDatabase = 'databasenavn';
$strFileNameTemplateDescription = 'Denne værdi fortolkes via %1$sstrftime%2$s, så du kan bruge tidsformatterede strenge. Ydermere vil følgende transformationer foregå: %3$s. Anden tekst vil blive bevaret som det er.';
$strFileNameTemplateDescriptionServer = 'servernavn';
$strFileNameTemplateDescriptionTable = 'tabelnavn';
$strFileNameTemplateRemember = 'husk skabelonen';
$strFileNameTemplate = 'Skabelon for filnavn';
$strFiles = 'Filer';
$strFileToImport = 'Fil til import';
$strFixed = 'ordnet';
$strFlushPrivilegesNote = 'Bemærk: phpMyAdmin henter brugernes privilegier direkte fra MySQLs privilegietabeller. Indholdet af disse tabeller kan være forskelligt fra privilegierne serveren i øjeblikket bruger hvis der er lavet manuelle ændringer i den. Hvis dette er tilfældet, bør du %sgenindlæse privilegierne%s før du fortsætter.';
$strFlushQueryCache = 'Flush forespørgsel-mellemlager (query cache)';
$strFlushTable = 'Flush tabellen ("FLUSH")';
$strFlushTables = 'Flush (luk) alle tabeller';
$strFontSize = 'Skriftstørrelse';
$strForeignKeyError = 'Fejl ved oprettelse af fremmednøgle (check datatyper)';
$strFormat = 'Format';
$strFormEmpty = 'Ingen værdi i formularen !';
$strFreePages = 'Frie sider';
$strFullText = 'Komplette tekster';
$strFunction = 'Funktion';
$strFunctions = 'Funktioner';

$strGenBy = 'Genereret af';
$strGeneralRelationFeat = 'Generelle relationsmuligheder';
$strGenerate = 'Generér';
$strGeneratePassword = 'Generér Kodeord';
$strGenTime = 'Genereringstid';
$strGeorgian = 'Georgisk';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global værdi';
$strGo = 'Udfør';
$strGrantOption = 'Tildel';
$strGreek = 'Græsk';
$strGzip = '"gzipped"';

$strHandler = 'Handler';
$strHasBeenAltered = 'er ændret.';
$strHasBeenCreated = 'er oprettet.';
$strHaveToShow = 'Du skal vælge mindst en kolonne der skal vises';
$strHebrew = 'Hebræisk';
$strHelp = 'Hjælp';
$strHexForBLOB = 'Brug heksadecimal for BLOB';
$strHide         = 'Skjul';
$strHideShowAll = 'Skjul/Vis alle';
$strHideShowNoRelation = 'Skjul/Vis tabeller uden relation';
$strHome = 'Hjem';
$strHomepageOfficial = 'Officiel phpMyAdmin hjemmeside ';
$strHostEmpty = 'Der er intet værtsnavn!';
$strHost = 'Vært';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungarsk';

$strIcelandic = 'Islandsk';
$strId = 'ID';
$strIdxFulltext = 'Fuldtekst';
$strIEUnsupported = 'Internet Explorer understøtter ikke denne funktion.';
$strIgnoreDuplicates = 'Ignorér gentagne rækker';
$strIgnore = 'Ignorer';
$strIgnoreInserts = 'Brug ignorér inserts';
$strImportFiles = 'Importér filer';
$strImportExportCoords = 'Importer/Eksporter koordinater for PDF-opstilling';
$strImportFormat = 'Format på importeret fil';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Importen er korrekt gennemført, %d forespørgsler udført.';
$strIndexes = 'Indeks';
$strIndexesSeemEqual = 'Følgende indeks ser ud til at være ens og et af dem burde fjernes:';
$strIndexHasBeenDropped = 'Indeks %s er blevet slettet';
$strIndex = 'Indeks';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strIndexWarningTable = 'Problemer med indeksene på tabel `%s`';
$strInnoDBAutoextendIncrement = 'Autoextend forøgelse';
$strInnoDBAutoextendIncrementDesc = ' Størrelsen på den udvidelse der vil forekomme, når pladsen i en autoudvidende tabel udvides fordi den løber fuld.';
$strInnoDBBufferPoolSize = 'Buffer pool størrelse';
$strInnoDBBufferPoolSizeDesc = 'Størrelse på memorybufferen InnoDB bruger til at mellemlagre data og indeks på dens tabeller.';
$strInnoDBDataFilePath = 'Datafiler';
$strInnoDBDataHomeDir = 'Data hovedmappe';
$strInnoDBDataHomeDirDesc = 'Den fælles del af stien til mappen med alle InnoDB datafiler.';
$strInnoDBPages = 'sider';
$strInnoDBRelationAdded = 'InnoDB-relation tilføjet';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Din konfigurationsfil indeholder indstillinger (root og intet kodeord) som svarer til en standard MySQL-priviligeret brugerkonto. Din MySQL server kører med denne standardindstilling, <u>er åben for indtrængen</u>, og du opfordres stærkt til at gøre noget ved dette sikkerhedshul.';
$strInsertAsNewRow = 'Indsæt som ny række';
$strInsertedRowId = 'Indsat række-id:';
$strInsertedRows = 'Indsatte rækker:';
$strInsert = 'Indsæt';
$strInternalNotNecessary = '* En intern relation er ikke nødvendig når den også eksisterer i InnoDB.';
$strInternalRelationAdded = 'Intern relation tilføjet';
$strInternalRelations = 'Interne relationer';
$strInUse = 'i brug';
$strInvalidAuthMethod = 'Ugyldig autorisationsmetode sat i konfiguration:';
$strInvalidColumnCount = 'Kolonneantal skal være større end nul.';
$strInvalidColumn = 'Ugyldig kolonne (%s) angivet!';
$strInvalidCSVFieldCount = 'Ugyldigt feltantal i CSV-input på linie %d.';
$strInvalidCSVFormat = 'Ugyldigt format for CSV-input på linie %d.';
$strInvalidCSVParameter = 'Ugyldigt parameter for CSV-import: %s';
$strInvalidDatabase = 'Ugyldig database';
$strInvalidFieldAddCount = 'Du skal tilføje mindst ét felt.';
$strInvalidFieldCount = 'Tabellen skal indeholde mindst ét felt.';
$strInvalidLDIImport = 'Denne plugin understøtter ikke komprimeret import!';
$strInvalidRowNumber = '%d er ikke et gyldigt rækkenummer.';
$strInvalidServerHostname = 'Ugyldigt hostnavn for server %1$s. Gennemgå venligst din konfiguration.';
$strInvalidServerIndex = 'Ugyldigt server indeks: "%s"';
$strInvalidTableName = 'Ugyldigt tabelnavn';

$strJapanese = 'Japansk';
$strJoins = 'Joins';
$strJumpToDB = 'Hop til database &quot;%s&quot;.';
$strJustDelete = 'Bare slet brugerne fra privilegietabellerne.';
$strJustDeleteDescr = 'De &quot;slettede&quot; brugere kan stadig tilgå serveren som de plejer indtil privilegierne genindlæses.';

$strKeepPass = 'Kodeord må ikke ændres';
$strKeyCache = 'Nøglemellemlager (key cache)';
$strKeyname = 'Nøglenavn';
$strKill = 'Dræb (Kill)';
$strKnownExternalBug = 'Funktionaliteten af %s er påvirket af en kendt fejl, se %s';
$strKorean = 'Koreansk';

$strLandscape = 'Liggende';
$strLanguage = 'Sprog';
$strLanguageUnknown = 'Ukendt sprog: %1$s.';
$strLatchedPages = 'Eksklusivt låste (latched) sider';
$strLatexCaption = 'Tabeloverskrift';
$strLatexContent = 'Indhold af tabel __TABLE__';
$strLatexContinuedCaption = 'Fortsat tabeloverskrift';
$strLatexContinued = '(fortsættes)';
$strLatexIncludeCaption = 'Inkluder tabeloverskrift';
$strLatexLabel = 'Mærke nøgle';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktur for tabel __TABLE__';
$strLatvian = 'Lettisk';
$strLDI = 'CSV vha. LOAD DATA';
$strLDILocal = 'Brug LOCAL nøgleord';
$strLengthSet = 'Længde/Værdi*';
$strLimitNumRows = 'poster pr. side';
$strLinesTerminatedBy = 'Linjer afsluttet med';
$strLinkNotFound = 'Link ikke fundet';
$strLinksTo = 'Linker til';
$strLithuanian = 'Litauisk';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Tekstfilens placering';
$strLoginInformation = 'Login-information';
$strLogin = 'Login';
$strLogout = 'Log af';
$strLogPassword = 'Kodeord:';
$strLogServer = 'Server';
$strLogUsername = 'Brugernavn:';
$strLongOperation = 'Denne operation kan tage lang tid. Fortsæt alligevel?';

$strMaxConnects = 'maks. samtidige forbindelser';
$strMaximalQueryLength = 'Maksimal længde på oprettet forespørgsel';
$strMaximumSize = 'Maksimum størrelse: %s%s';
$strMbExtensionMissing = 'PHP-udvidelsen mbstring blev ikke fundet og du ser ud til at bruge et multibyte tegnsæt. Uden mbstring-udvidelsen er phpMyAdmin ude af stand til at opdele strenge korrekt og dette kan forårsage uventede resultater';
$strMbOverloadWarning = 'Du har mbstring.func_overload slået til i din PHP-konfiguration. Denne indstilling er ikke kompatibel med phpMyAdmin og kan forårsage ødelæggelse af nogle data!';
$strMIME_available_mime = 'Tilgængelige MIME-typer';
$strMIME_available_transform = 'Tilgængelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'Der er ingen beskrivelse af denne transformation.<br />Spørg venligst forfatteren, hvad %s gør.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For en liste over mulige transformationsindstillinger og deres MIME-type transformationer, klik på %stransformationsbeskrivelser%s';
$strMIME_transformation_options_note = 'Indtast værdier for transformationsindstillinger ud fra følgende format: \'a\', 100, b,\'c\'...<br />Skulle du få brug for at indsætte en backslash ("\") eller en apostrof ("\'") i værdierne, backslash det (for eksempel \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_transformation_options = 'Transformationsindstillinger';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE (MIME-typer for tabellen)';
$strMIME_without = 'MIME-typer skrevet med kursiv har ikke en separat transformationsfunktion';
$strModifications = 'Rettelserne er gemt!';
$strModifyIndexTopic = 'Ændring af et indeks';
$strModify = 'Ret';
$strMoveMenu = 'Flyt Menu';
$strMoveTable = 'Flyt tabel til (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s er flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til den samme!';
$strMultilingual = 'flersproget';
$strMyISAMDataPointerSize = 'Data pointer størrelse';
$strMyISAMDataPointerSizeDesc = 'Standard pointerstørrelse i bytes, til brug ved CREATE TABLE for MyISAM tabeller når der ikke er specificeret nogen MAX_ROWS indstilling.';
$strMyISAMMaxExtraSortFileSizeDesc = 'Hvis den midlertidige fil der bruges til hurtig MyISAM indeks-oprettelse ville være større end ved brug af key cache med størrelsen angivet her, foretræk key cache-metoden.';
$strMyISAMMaxExtraSortFileSize = 'Maksimal størrelse for midlertidige filer ved oprettelse af indeks';
$strMyISAMMaxSortFileSizeDesc = 'Maksimal størrelse for den midlertidige fil MySQL har lov til at bruge under genetablering af et MyISAM indeks (under REPAIR TABLE, ALTER TABLE, eller LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimal størrelse for midlertidige sorteringsfiler';
$strMyISAMRecoverOptions = 'Automatisk genopretnings-modus';
$strMyISAMRecoverOptionsDesc = 'Modus for automatisk genetablering af crashede MyISAM tabeller, som sat via --myisam-recover server opstartsindstillingen.';
$strMyISAMRepairThreadsDesc = 'Hvis denne værdi er større end 1, oprettes MyISAM tabel-indeks parallelt (hvert indeks i dets egen tråd) under Reparation ved sortering-processen.';
$strMyISAMRepairThreads = 'Reparér tråde';
$strMyISAMSortBufferSizeDesc = 'Bufferen der allokeres ved sortering af MyISAM indeks under en REPAIR TABLE eller når indeks oprettes med CREATE INDEX eller ALTER TABLE.';
$strMyISAMSortBufferSize = 'Sorterings-bufferstørrelse';
$strMySQLCharset = 'MySQL Tegnsæt';
$strMysqlClientVersion = 'MySQL klientversion';
$strMySQLConnectionCollation = 'MySQL forbindelses-sammenkøring';
$strMysqlLibDiffersServerVersion = 'Din PHP MySQL-biblioteks version %s afviger fra din MySQL server version %s. Dette kan forårsage uforudsigelige resultater.';
$strMySQLSaid = 'MySQL returnerede: ';
$strMySQLShowProcess = 'Vis tråde';
$strMySQLShowStatus = 'Vis MySQL runtime-information';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Næste';
$strNoActivity = 'Ingen aktivitet i de seneste %s sekunder eller mere, log venligst ind igen';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser valgt.';
$strNoDataReceived = 'Der blev ikke modtaget nogen data til import. Enten blev der ikke indsendt et filnavn, eller filstørrelsen kan have overskredet maksimalstørrelsen tilladt af din PHP-konfiguration. Se FAQ 1.16.';
$strNoDescription = 'ingen beskrivelse';
$strNoDetailsForEngine = 'Der er ingen detaljerede statusinformationer tilgængelige for dette datalager.';
$strNoDropDatabases = '"DROP DATABASE" erklæringer kan ikke bruges.';
$strNoExplain = 'Spring over Forklar SQL';
$strNoFilesFoundInZip = 'Ingen filer fundet i ZIP arkivet!';
$strNoFrames = 'phpMyAdmin er mere brugervenlig med en browser, der kan klare <b>frames</b>.';
$strNoIndex = 'Intet indeks defineret!';
$strNoIndexPartsDefined = 'Ingen dele af indeks er defineret!';
$strNoModification = 'Ingen ændring';
$strNone = 'Intet';
$strNo = 'Nej';
$strNoOptions = 'Dette format har ingen indstillinger';
$strNoPassword = 'Intet kodeord';
$strNoPermission = 'Webserveren har ikke tilladelse til at gemme filen %s.';
$strNoPhp = 'uden PHP-kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoRights = 'Du har ikke tilstrækkelige rettigheder til at være her!';
$strNoRowsSelected = 'Ingen rækker valgt';
$strNoSpace = 'Utilstrækkeligt plads til at gemme filen %s.';
$strNoTablesFound = 'Ingen tabeller fundet i databasen.';
$strNoThemeSupport = 'Ingen tema/layout-understøttelse, tjek venligst din konfiguration og/eller dine temaer i mappen %s.';
$strNotNumber = 'Dette er ikke et tal!';
$strNotOK = 'ikke OK';
$strNotSet = 'Tabel <b>%s</b> findes ikke eller er ikke sat i %s';
$strNoUsersFound = 'Ingen bruger(e) fundet.';
$strNoValidateSQL = 'Spring over Validér SQL';
$strNull = 'Nulværdi';
$strNumberOfFields = 'Antal felter';
$strNumberOfTables = 'Antal tabeller';
$strNumSearchResultsInTable = '%s hit(s) i tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> hit(s)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document regneark';
$strOpenDocumentText = 'Open Document tekst';
$strOpenNewWindow = 'Åbn nyt phpMyAdmin vindue';
$strOperations = 'Operationer';
$strOperator = 'Operatør';
$strOptimizeTable = 'Optimer tabel';
$strOptions = 'Indstillinger';
$strOr = 'Eller';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overskriv eksisterende fil(er)';

$strPageNumber = 'Side nummer:';
$strPagesToBeFlushed = 'Sider der står til at blive tømt';
$strPaperSize = 'Papirstørrelse';
$strPartialImport = 'Delvis import';
$strPartialText = 'Delvise tekster';
$strPasswordChanged = 'Kodeordet for %s blev korrekt udskiftet.';
$strPasswordEmpty = 'Der er ikke angivet noget kodeord!';
$strPasswordHashing = 'Kodeord Hashing';
$strPassword = 'Kodeord';
$strPasswordNotSame = 'De to kodeord er ikke ens!';
$strPdfDbSchema = 'Skematik for databasen "%s" - Side %s';
$strPdfInvalidTblName = 'Tabellen "%s" findes ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genererer en rapport indeholdende dataene fra en enkelt tabel)';
$strPDFReportTitle = 'Rapporttitel';
$strPerHour = 'pr. time';
$strPerMinute = 'pr. minut';
$strPerSecond = 'pr. sekund';
$strPersian = 'Persisk';
$strPhoneBook = 'telefonbog';
$strPHP40203 = 'Du bruger PHP 4.2.3, som har en alvorlig fejl med multi-byte strenge (mbstring). Se PHP bug report 19404. Denne version af PHP kan ikke anbefales at bruge med phpMyAdmin.';
$strPhp = 'Fremstil PHP-kode';
$strPHPVersion = 'PHP-version';
$strPleaseSelectPrimaryOrUniqueKey = 'Vælg venligst den primære nøgle eller en unik nøgle';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktivet SKAL være sat i din konfigurationsfil!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polsk';
$strPortrait = 'Stående';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimaryKeyHasBeenDropped = 'Primærnøglen er slettet';
$strPrimaryKeyName = 'Navnet på primærnøglen skal være... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>skal</b> være navnet på og <b>kun på</b> en primær nøgle!)';
$strPrimary = 'Primær';
$strPrint = 'Print';
$strPrintViewFull = 'Udskrift-visning (med fulde tekster)';
$strPrintView = 'Vis (udskriftvenlig)';
$strPrivDescAllPrivileges = 'Inkluderer alle privilegier pånær GRANT.';
$strPrivDescAlterRoutine = 'Tillader ændring og sletning af gemte rutiner.';
$strPrivDescAlter = 'Tillader ændring af strukturen på eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillader oprettelse af nye databaser og tabeller.';
$strPrivDescCreateRoutine = 'Tillader oprettelse af gemte rutiner.';
$strPrivDescCreateTbl = 'Tillader oprettelse af nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillader oprettelse af midlertidige tabeller.';
$strPrivDescCreateUser = 'Tillader oprettelse, sletning og omdøbning af brugerkonti.';
$strPrivDescCreateView = 'Tillader oprettelse af nye Allows creating new views.';
$strPrivDescDelete = 'Tillader sletning af data.';
$strPrivDescDropDb = 'Tillader at droppe databaser og tabeller.';
$strPrivDescDropTbl = 'Tillader at droppe tabeller.';
$strPrivDescExecute5 = 'Tillader udførelse af gemte rutiner.';
$strPrivDescExecute = 'Tillader kørsel af gemte procedurer; Har ingen effekt i denne MySQL-version.';
$strPrivDescFile = 'Tillader import af data fra og eksport af data til filer.';
$strPrivDescGrant = 'Tillader oprettelse af brugere og privilegier uden at genindlæse privilegie-tabellerne.';
$strPrivDescIndex = 'Tillader at skabe og droppe indeks.';
$strPrivDescInsert = 'Tillader indsættelse og erstatning af data.';
$strPrivDescLockTables = 'Tillader låsning af tabeller for nuværende tråd.';
$strPrivDescMaxConnections = 'Begrænser antallet af nye forbindelser brugeren må åbne pr. time.';
$strPrivDescMaxQuestions = 'Begrænser antallet af forespørgsler brugeren må sende til serveren pr. time.';
$strPrivDescMaxUpdates = 'Begrænser antallet af kommandoer som ændrer enhver tabel eller database brugeren må udføre pr. time.';
$strPrivDescMaxUserConnections = 'Begrænser antallet af samtidige forbindelser brugere må have.';
$strPrivDescProcess3 = 'Tillader at dræbe andre brugeres processer.';
$strPrivDescProcess4 = 'Tillader at se komplette forespørgsler i proceslisten.';
$strPrivDescReferences = 'Har ingen effekt i denne MySQL version.';
$strPrivDescReload = 'Tillader genindlæsning af serverindstillinger og tømning af caches.';
$strPrivDescReplClient = 'Giver brugeren rettigheder til at spørge hvor Slaves / Masters er.';
$strPrivDescReplSlave = 'Nødvendigt for replikationsslaverne.';
$strPrivDescSelect = 'Tillader læsning af data.';
$strPrivDescShowDb = 'Giver adgang til den fuldstændige liste over databaser.';
$strPrivDescShowView = 'Tillader udførelse af SHOW CREATE VIEW forespørgsler.';
$strPrivDescShutdown = 'Tillader nedlukning af serveren.';
$strPrivDescSuper = 'Tillader forbindelse, selv hvis maksimalt antal forbindelser er nået; Nødvendigt for de fleste administrative operationer som indstilling af globale variabler eller for at dræbe andre brugeres tråde.';
$strPrivDescUpdate = 'Tillader ændring af data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierne blev korrekt genindlæst.';
$strProcedures = 'Procedurer';
$strProcesses = 'Processer';
$strProcesslist = 'Procesliste';
$strProtocolVersion = 'Protokolversion';
$strPutColNames = 'Indsæt feltnavne i første række';

$strQBEDel = 'Del (Slet)';
$strQBE = 'Foresp. via eks.';
$strQBEIns = 'Ins (Indsæt)';
$strQueryCache = 'Forespørgsel-mellemlager';
$strQueryFrame = 'Foresp. vindue';
$strQueryOnDb = 'SQL-forespørgsel til database <b>%s</b>:';
$strQueryResultsOperations = 'Forespørgselsresultat operationer';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Forespørgselsstatistikker</b>: Siden opstarten er der blevet sendt %s forespørgsler til serveren.';
$strQueryTime = 'Forepørgsel tog %01.4f sek';
$strQueryType = 'Forespørgselstype';
$strQueryWindowLock = 'Overskriv ikke denne forespørgsel fra udenfor vinduet';

$strReadRequests = 'Read-anmodninger';
$strReceived = 'Modtaget';
$strRecommended = 'anbefalet';
$strRecords = 'Poster';
$strReferentialIntegrity = 'Check reference-integriteten';
$strRefresh = 'Opdatér';
$strRelationalSchema = 'Relationel skematik';
$strRelationNotWorking = 'De ekstra features for at arbejde med linkede tabeller er deaktiveret. For at se hvorfor, klik %sher%s.';
$strRelationDeleted = 'Relation slettet';
$strRelationsForTable = 'RELATIONS FOR TABLE (Relationer for tabellen)';
$strRelations = 'Relationer';
$strRelationView = 'Se Relationer';
$strReloadingThePrivileges = 'Genindlæs privilegierne';
$strReloadPrivileges = 'Genindlæs privilegier';
$strReload = 'Genindlæs';
$strRemoveSelectedUsers = 'Fjern valgte brugere';
$strRenameDatabaseOK = 'Database %s er blevet omdøbt til %s';
$strRenameTableOK = 'Tabellen %s er nu omdøbt til %s';
$strRenameTable = 'Omdøb tabel til';
$strRepairTable = 'Reparer tabel';
$strReplaceNULLBy = 'Erstat NULL med';
$strReplaceTable = 'Erstat data i tabellen med filens data';
$strReplication = 'Replikering';
$strReset = 'Nulstil';
$strResourceLimits = 'Ressourcebegrænsninger';
$strReType = 'Skriv igen';
$strRevokeAndDeleteDescr = 'Bruger(e) vil fortsat have USAGE-privilegiet indtil privilegierne genindlæses.';
$strRevokeAndDelete = 'Tilbagekald alle aktive privilegier fra brugerne og slet dem efterfølgende.';
$strRevokeMessage = 'Du har tilbagekaldt privilegierne for %s';
$strRevoke = 'Tilbagekald';
$strRomanian = 'Rumænsk';
$strRoutineReturnType = 'Retur type';
$strRoutines = 'Rutiner';
$strRowLength = 'Rækkelængde';
$strRowsFrom = 'rækker startende fra post #';
$strRowSize = ' Rækkestørrelse ';
$strRowsModeFlippedHorizontal = 'horisontalt (roterede overskrifter)';
$strRowsModeHorizontal = 'vandret';
$strRowsModeOptions = '%s og gentag overskrifter efter %s celler';
$strRowsModeVertical = 'lodret';
$strRows = 'Rækker';
$strRowsStatistic = 'Række-statistik';
$strRunning = 'kører på %s';
$strRunQuery = 'Send forespørgsel';
$strRunSQLQuery = 'Kør SQL-forspørgsel(er) på database %s';
$strRunSQLQueryOnServer = 'Kør SQL-forespørgsel/forespørgsler på server %s';
$strRussian = 'Russisk';

$strSaveOnServer = 'Gem på serveren i mappen %s ';
$strSavePosition = 'Gem position';
$strSave = 'Gem';
$strScaleFactorSmall = 'Skaleringsfaktoren er for lille til at tilpasse skematikken til en side';
$strSearchFormTitle = 'Søg i databasen';
$strSearchInTables = 'Indeni tabel(ler):';
$strSearchNeedle = 'Ord eller værdi(er) (jokertegn: "%"):';
$strSearchOption1 = 'mindst et af ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'den nøjagtige sætning';
$strSearchOption4 = 'som regulært udtryk';
$strSearchResultsFor = 'Søgeresultater for "<i>%s</i>" %s:';
$strSearch = 'Søg';
$strSearchType = 'Find:';
$strSecretRequired = 'Konfigurationsfilen skal nu bruge et hemmeligt kodeord (blowfish_secret).';
$strSelectADb = 'Vælg en database';
$strSelectAll = 'Vælg alle';
$strSelectBinaryLog = 'Vælg binærlog til gennemsyn';
$strSelectFields = 'Vælg mindst eet felt:';
$strSelectForeignKey = 'Vælg fremmednøgle';
$strSelectNumRows = 'i forespørgsel';
$strSelectReferencedKey = 'Vælg refereret nøgle';
$strSelectTables = 'Vælg Tabeller';
$strSend = 'Send (download)';
$strSent = 'Sendt';
$strServerChoice = 'Server valg';
$strServerNotResponding = 'Serveren svarer ikke';
$strServer = 'Server';
$strServers = 'Servere';
$strServerStatusDelayedInserts = 'Forsinkede inserts';
$strServerStatus = 'Runtime-information';
$strServerStatusUptime = 'Denne MySQL-server har kørt i %s. Den startede op den %s.';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertrafik</b>: Disse tabeller viser netværkstrafik-statistikkerne for denne MySQL-server siden dens opstart.';
$strServerVars = 'Server-variabler og indstillinger';
$strServerVersion = 'Serverversion';
$strSessionStartupErrorGeneral = 'Kan ikke starte session uden fejl, tjek venligst fejl i din PHP og/eller webserver log fil og konfigurer din PHP installation ordentligt.';
$strSessionValue = 'Sessionsværdi';
$strSetEnumVal = 'Hvis et felt er af typen "enum" eller "set", skal værdierne angives på formen: \'a\',\'b\',\'c\'...<br />Skulle du få brug for en backslash ("\") eller et enkelt anførselstegn ("\'") blandt disse værdier, så tilføj en ekstra backslash (fx \'\\\\xyz\' eller \'a\\\'b\').';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farve';
$strShowDatadictAs = 'Data Dictionary-format';
$strShowFullQueries = 'Vis fuldstændige forespørgsler';
$strShowGrid = 'Vis gitter';
$strShowHideLeftMenu = 'Vis/skjul venstre menu';
$strShowingBookmark = 'Viser bogmærke';
$strShowingPhp = 'Viser som PHP-kode';
$strShowingRecords = 'Viser poster ';
$strShowingSQL = 'Viser SQL-forespørgsel';
$strShowOpenTables = 'Vis åbne tabeller';
$strShowPHPInfo = 'Vis PHP-information';
$strShow = 'Vis';
$strShowSlaveHosts = 'Vis slaveværter';
$strShowSlaveStatus = 'Vis slavestatus';
$strShowStatusBinlog_cache_disk_useDescr = 'Antal transaktioner der brugte det midlertidige binære log mellemlager, men overskred værdien for binlog_cache_size og brugte en midlertidig fil til at gemme statements fra transaktionen.';
$strShowStatusBinlog_cache_useDescr = 'Antal transaktioner der brugte det midlertidige binære log mellemlager.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Antal midlertidige tabeller på disken oprettet automatisk af serveren under udførelse af statements. Hvis Created_tmp_disk_tables er stor, skal du overveje at forøge tmp_table_size værdien for at gøre midlertidige tabeller hukommelses-baserede i stedet for disk-baserede.';
$strShowStatusCreated_tmp_filesDescr = 'Hvor mange midlertidige filer mysqld har oprettet.';
$strShowStatusCreated_tmp_tablesDescr = 'Antal i-hukommelsen midlertidige tabeller oprettet automatisk af serveren under udførelse af statements.';
$strShowStatusDelayed_errorsDescr = 'Antal rækker skrevet med INSERT DELAYED (forsinket indsættelse) under hvilke der opstod fejl (sandsynligvis dublerede nøgler).';
$strShowStatusDelayed_insert_threadsDescr = 'Antallet af INSERT DELAYED handler-tråde i brug. Hver forskellig tabel hvorpå en bruger INSERT DELAYED får sin egen tråd.';
$strShowStatusDelayed_writesDescr = 'Antallet af INSERT DELAYED rækker skrevet.';
$strShowStatusFlush_commandsDescr = 'Antallet af udførte FLUSH statements.';
$strShowStatusHandler_commitDescr = 'Antallet af interne COMMIT statements.';
$strShowStatusHandler_deleteDescr = 'Antallet af gange en række blev slettet fra en tabel.';
$strShowStatusHandler_discoverDescr = 'MySQL serveren kan spørge en NDB Cluster storage engine om den kender til en tabel med et givent navn. Dette kaldes opdagelse. Handler_discover indikerer antallet af gange tabeller er blevet opdaget.';
$strShowStatusHandler_read_firstDescr = 'Antallet af gange første indlæg blev læst fra et indeks. Hvis denne er høj, antyder det at serveren laver mange fulde indeks scans; for eksempel, SELECT col1 FROM foo, antagende at col1 er indekseret.';
$strShowStatusHandler_read_keyDescr = 'Antallet af anmodninger om at læse en række baseret på en nøgle. Hvis denne er høj, er det en god indikation af at dine forespørgsler og tabeller er ordentligt indekserede.';
$strShowStatusHandler_read_nextDescr = 'Antallet af anmodninger om at læse næste række i nøgleorden. Denne forøges hvis du forespørger på en indekskolonne med en range-begrænsning eller hvis du udfører et indeks scan.';
$strShowStatusHandler_read_prevDescr = 'Antallet af anmodninger om at læse foregående række i nøgleorden. Denne læsemetode bruges hovedsageligt til at optimere ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Antallet af anmodninger om at læse en række baseret på en fast position. Denne er høj hvis du laver mange forespørgsler der kræver sortering af resultatet. Du har sandsynligvis mange forespørgsler der forlanger at MySQL scanner hele tabeller eller du har joins der ikke bruger nøgler ordentligt.';
$strShowStatusHandler_read_rnd_nextDescr = 'Antallet af anmodninger om læsning af næste række i datafilen. Denne er høj hvis du laver mange tabelscanninger. Generelt antyder dette at dine tabeller enten ikke er ordentligt indekserede eller at dine forespørgsler ikke er skrevet til at drage fordel af de indeks du har.';
$strShowStatusHandler_rollbackDescr = 'Antallet af interne ROLLBACK statements.';
$strShowStatusHandler_updateDescr = 'Antallet af anmodninger om at opdatere en række i en tabel.';
$strShowStatusHandler_writeDescr = 'Antallet af anmodninger om at indsætte en række i en tabel.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Antallet af sider der indeholder data (beskidte eller rene).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Antallet af såkaldt beskidte sider.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Antallet af buffer pool sider der er anmodet om at skulle flushes.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Antallet af frie sider.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Antallet af eksklusivt låste (latched) sider i InnoDB buffer pool. Dette er sider der i øjeblikket læses eller skrives eller som ikke kan flushes eller fjernes af andre årsager.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Antallet af travle sider fordi de er blevet allokeret til administrativ overhead så som rækkelåse eller det adaptive hash indeks. Denne værdi kan også beregnes som  Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total størrelse på buffer pool, i sider.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Antallet af "tilfældige" read-aheads InnoDB initierede. Dette sker når en forespørgsel skal scanne en større del af en tabel men i tilfældig rækkefølge.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Antallet af sekventielle read-aheads InnoDB initierede. Dette sker når InnoDB laver en sekventiel fuld tabelscanning.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Antallet af logiske read anmodninger InnoDB har lavet.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Antallet af logiske reads som InnoDB ikke kunne tilfredsstille fra buffer pool og måtte lave en enkelt-side read.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalt sker skrivninger til InnoDB buffer poolen i baggrunden. Men, hvis der er brug for at læse eller oprette en side og der ikke er nogen rene sider tilgængelige, er det nødvendigt at vente på at der bliver flushet sider først. Denne tæller tæller hvor mange gange det er sket. Hvis buffer pool størrelsen er sat ordentligt, skulle denne værdi være lille.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Antallet af skrivninger til InnoDB buffer poolen.';
$strShowStatusInnodb_data_fsyncsDescr = 'Antallet af fsync() operationer indtil nu.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Nuværende antal ventende fsync() operationer.';
$strShowStatusInnodb_data_pending_readsDescr = 'Nuværende antal af ventende reads.';
$strShowStatusInnodb_data_pending_writesDescr = 'Nuværende antal af ventende writes.';
$strShowStatusInnodb_data_readDescr = 'Mængden af data læst indtil nu, i bytes.';
$strShowStatusInnodb_data_readsDescr = 'Det totale antal af data reads.';
$strShowStatusInnodb_data_writesDescr = 'Det totale antal af data writes.';
$strShowStatusInnodb_data_writtenDescr = 'Mængden af data skrevet indtil nu, i bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Antallet af doublewrite skrivninger der er udført og antallet af sider der er blevet skrevet til dette formål.';
$strShowStatusInnodb_dblwr_writesDescr = 'Antallet af doublewrite skrivninger der er udført og antallet af sider der er blevet skrevet til dette formål.';
$strShowStatusInnodb_log_waitsDescr = 'Antallet af waits vi har haft fordi log buffer var for lille og vi skulle vente på at den blev flushed før vi kunne fortsætte.';
$strShowStatusInnodb_log_write_requestsDescr = 'Antallet af log write anmodninger.';
$strShowStatusInnodb_log_writesDescr = 'Antallet af fysiske skrivninger til log filen.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Antallet af fsyncs skrivninger lavet til log filen.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Antallet af ventende log fil fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Ventende log fil skrivninger.';
$strShowStatusInnodb_os_log_writtenDescr = 'Antallet af bytes skrevet til log filen.';
$strShowStatusInnodb_pages_createdDescr = 'Antallet af sider oprettet.';
$strShowStatusInnodb_page_sizeDescr = 'Den indkompilerede InnoDB sidestørrelse (standard 16KB). Mange værdier tælles i sider; sidestørrelsen gør at man let kan omregne dem til bytes.';
$strShowStatusInnodb_pages_readDescr = 'Antallet af sider læst.';
$strShowStatusInnodb_pages_writtenDescr = 'Antallet af sider skrevet.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Antallet af rækkelåse der ventes på i øjeblikket.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Gennemsnitstiden for at få en rækkelås, i millisekunder.';
$strShowStatusInnodb_row_lock_timeDescr = 'Total tid brugt på at hente rækkelåse, i millisekunder.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksimale tid for at hente en rækkelås, i millisekunder.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Antallet af gange der skulle ventes på en rækkelås.';
$strShowStatusInnodb_rows_deletedDescr = 'Antallet af rækker slettet fra InnoDB tabeller.';
$strShowStatusInnodb_rows_insertedDescr = 'Antallet af rækker indsat i InnoDB tabeller.';
$strShowStatusInnodb_rows_readDescr = 'Antallet af rækker læst fra InnoDB tables.';
$strShowStatusInnodb_rows_updatedDescr = 'Antallet af rækker opdateret i InnoDB tabeller.';
$strShowStatusKey_blocks_not_flushedDescr = 'Antallet af nøgleblokeringer i nøglemellemlageret der har ændret sig men endnu ikke er blevet flushet til disk. Det hed tidligere Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Antallet af ubrugte blokke i nøglemellemlageret. Du kan bruge denne værdi til at fastslå hvor meget af nøglemellemlagere der er i brug.';
$strShowStatusKey_blocks_usedDescr = 'Antallet af brugte blokke i nøglemellemlageret. Denne værdi er et højvande-mærke der indikerer det maksimale antal blokke der på noget tidspunkt har været i brug på en gang.';
$strShowStatusKey_read_requestsDescr = 'Antallet af anmodninger om at læse en nøgleblok fra mellemlageret.';
$strShowStatusKey_readsDescr = 'Antallet af fysiske læsninger af en nøgleblok fra disk. Hvis Key_reads er stor, er din key_buffer_size værdi sandsynligvis for lille. Mellemlager miss raten kan beregnes som  Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Antallet af anmodninger om at skrive en nøgleblok til mellemlageret.';
$strShowStatusKey_writesDescr = 'Antallet af fysiske skrivninger af en nøgleblok til disk.';
$strShowStatusLast_query_costDescr = 'Totale omkostninger for den seneste kompilerede forespørgsel som beregnet af forespørgsels-optimeringsrutinen. Brugbart til at sammenligne omkostninger på forskellige forespørgselsplaner for den samme forespørgsel. En standardværdi på 0 betyder at der ikke er kompileret nogen forespørgsler endnu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Antallet af rækker der venter på at blive skrevet i INSERT DELAYED køer.';
$strShowStatusOpened_tablesDescr = 'Antallet af tabeller der er blevet åbnet. Hvis åbnede tabeller er stor, er dit tabelmellemlager sandsynligvis for lille.';
$strShowStatusOpen_filesDescr = 'Antallet af filer der er åbne.';
$strShowStatusOpen_streamsDescr = 'Antallet af streams der er åbne (bruges hovedsageligt til logning).';
$strShowStatusOpen_tablesDescr = 'Antallet af tabeller der er åbne.';
$strShowStatusQcache_free_blocksDescr = 'Antallet af frie hukommelsesblokke i forespørgsels-mellemlageret.';
$strShowStatusQcache_free_memoryDescr = 'Mængden af fri hukommelse til forespørgselsmellemlageret.';
$strShowStatusQcache_hitsDescr = 'Antallet af mellemlager hits.';
$strShowStatusQcache_insertsDescr = 'Antallet af forespørgsler tilføjet til mellemlageret.';
$strShowStatusQcache_lowmem_prunesDescr = 'Antallet af forespørgsler der er blevet fjernet fra mellemlageret for at rydde hukommelse til mellemlagring af nye forespørgsler. Denne information kan hjælpe dig med at tune forespørgselsmellemlagerets størrelse. Forespørgselsmellemlageret bruger en mindst nyligt brugt (LRU) strategi til at afgøre hvilke forespørgsler der skal fjernes fra mellemlageret.';
$strShowStatusQcache_not_cachedDescr = 'Antallet af ikke-mellemlagrede forespørgsler (ikke mulige at mellemlagre eller ikke mellemlagret grundet query_cache_type indstillingen).';
$strShowStatusQcache_queries_in_cacheDescr = 'Antallet af forespørgsler registreret i mellemlageret.';
$strShowStatusQcache_total_blocksDescr = 'Totalt antal blokke i forespørgsels-mellemlageret.';
$strShowStatusReset = 'Nulstil';
$strShowStatusRpl_statusDescr = 'Status på failsafe replikering (endnu ikke implementeret).';
$strShowStatusSelect_full_joinDescr = 'Antallet af joins der ikke bruger indeks. Hvis denne værdi ikke er 0, bør du nøje tjekke indeksene på dine tabeller.';
$strShowStatusSelect_full_range_joinDescr = 'Antallet af joins der brugte en range søgning på en reference tabel.';
$strShowStatusSelect_range_checkDescr = 'Antallet af joins uden nøgler der tjekker for nøglebrug efter hver række. (Hvis denne ikke er 0, bør du nøje tjekke indeks på dine tabeller.)';
$strShowStatusSelect_rangeDescr = 'Antallet af joins der brugte ranges på den første tabel. (Normalt ikke kritisk selvom tallet er stort.)';
$strShowStatusSelect_scanDescr = 'Antallet af joins som lavede en fuld scan af den første tabel.';
$strShowStatusSlave_open_temp_tablesDescr = 'Antallet af midlertidige tabeller i øjeblikket åbne af SQL tråden.';
$strShowStatusSlave_retried_transactionsDescr = 'Totalt (siden opstart) antal gange replikeringsslave SQL tråden har gen-forsøgt transaktioner.';
$strShowStatusSlave_runningDescr = 'Dette er TIL hvis denne server er en slave der er forbundet til en master.';
$strShowStatusSlow_launch_threadsDescr = 'Antallet af tråde der har taget mere end slow_launch_time sekunder at oprette.';
$strShowStatusSlow_queriesDescr = 'Antallet af forespørgsler der har taget mere end long_query_time sekunder.';
$strShowStatusSort_merge_passesDescr = 'Antallet af sammenlægningskørsler sorteringsalgoritmen skulle lave. Hvis denne værdi er høj, bør du overveje at forøge værdien af  sort_buffer_size systemvariablen.';
$strShowStatusSort_rangeDescr = 'Antallet af sorteringer lavet med ranges.';
$strShowStatusSort_rowsDescr = 'Antallet af sorterede rækker.';
$strShowStatusSort_scanDescr = 'Antallet af sorteringer udført ved scanning af tabellen.';
$strShowStatusTable_locks_immediateDescr = 'Antallet af gange en tabellås blev givet øjeblikkeligt.';
$strShowStatusTable_locks_waitedDescr = 'Antallet af gange en tabellås ikke kunne fås øjeblikkeligt og en wait var nødvendig. Hvis denne er høj, og du har ydelsesproblemer, bør du først optimere dine forespørgsler, og derefter enten opdele din tabel eller tabeller, eller bruge replikering.';
$strShowStatusThreads_cachedDescr = 'Antallet af tråde i tråd-mellemlageret. Mellemlager-hitraten kan udregnes som Threads_created/Forbindelser. Hvis denne værdi er rød bør du forøge din thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Antallet af i øjeblikket åbne forbindelser.';
$strShowStatusThreads_createdDescr = 'Antallet af tråde oprettet til at håndtere forbindelser. Hvis Threads_created er stor, kan du vælge at forøge thread_cache_size værdien. (Normalt giver dette ingen nævneværdig ydelsesforbedring hvis du har god tråd-implementering.)';
$strShowStatusThreads_runningDescr = 'Antallet af tråde der ikke sover.';
$strShowTableDimension = 'Vis tabellernes dimensioner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis forespørgslen her igen ';
$strSimplifiedChinese = 'Simplificeret Kinesisk';
$strSingly = '(enkeltvis)';
$strSize = 'Størrelse';
$strSkipQueries = 'Antal poster (queries) der skal springes over fra start';
$strSlovak = 'Slovakisk';
$strSlovenian = 'Slovensk';
$strSmallBigAll = 'Små/store alle';
$strSnapToGrid = 'Snap til gitter';
$strSocketProblem = '(eller den lokale MySQL servers socket er ikke korrekt konfigureret)';
$strSortByKey = 'Sorteringsnøgle';
$strSorting = 'Sortering';
$strSort = 'Sorter';
$strSpaceUsage = 'Pladsforbrug';
$strSpanish = 'Spansk';
$strSplitWordsWithSpace = 'Ord adskilles af mellemrums-karakter (" ").';
$strSQLCompatibility = 'SQL-kompatibilitetsmodus';
$strSQLExportType = 'Eksporttype';
$strSQLParserBugMessage = 'Det er muligt at du har fundet en fejl i SQL-parseren. Undersøg venligst din forespørgsel nøje, og check at anførselstegn er rigtige og ikke giver konflikter. Andre fejlårsager kan være at du uploader en fil med binær udenfor et lukket tekstområde. Du kan også prøve din forespørgsel i MySQL kommandolinje-interfacet. MySQL-serverens fejlmelding der følger herunder, hvis der er nogen, kan også hjælpe dig med at finde problemet. Hvis du stadig har probemer eller hvis parseren fejler hvor kommandolinjeinterfacet lykkes, reducer din SQL-forespørgselsinput til den ene forespørgsel der forårsager problemet, og indsend en fejlrapport med datablokken i KLIP-sektionen herunder:';
$strSQLParserUserError = 'Der ser ud til at være en fejl i din SQL-forespørgsel. MySQL-serverens fejlmelding der følger herunder, hvis der er nogen, kan også hjælpe dig med at finde problemet.';
$strSQLQuery = 'SQL-forespørgsel';
$strSQLResult = 'SQL-resultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Ikke-lukket quote';
$strSQPBugUnknownPunctuation = 'Ukendt tegnsætnings-streng';
$strStandInStructureForView = 'Stand-in-struktur for visning';
$strStatCheckTime = 'Sidste check';
$strStatCreateTime = 'Oprettelse';
$strStatement = 'Erklæringer';
$strStatisticsOverrun = 'På en travl server er der risiko for at bytetællerne løber over, så disse statistikker som rapporteret af MySQL-serveren kan være forkerte.';
$strStatUpdateTime = 'Sidste opdatering';
$strStatus = 'Status';
$strStorageEngine = 'Datalager';
$strStorageEngines = 'Datalagre';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucExcelCSV = 'CSV til MS Excel-data';
$strStrucNativeExcel = 'Fødte MS Excel-data';
$strStrucOnly = 'Kun strukturen';
$strStructPropose = 'Foreslå tabelstruktur';
$strStructureForView = 'Struktur for visning';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Din SQL-forespørgsel blev udført korrekt';
$strSum = 'Sum';
$strSwedish = 'Svensk';
$strSwitchToDatabase = 'Skift til den kopierede database';
$strSwitchToTable = 'Skift til den kopierede tabel';

$strTableAlreadyExists = 'Table %s already exists!';
$strTableComments = 'Tabel kommentarer';
$strTableEmpty = 'Intet tabelnavn!';
$strTableHasBeenDropped = 'Tabel %s er slettet';
$strTableHasBeenEmptied = 'Tabel %s er tømt';
$strTableHasBeenFlushed = 'Tabel %s er blevet flushet';
$strTableIsEmpty = 'Tabel ser ud til at være tom';
$strTableMaintenance = 'Tabelvedligeholdelse';
$strTableName = 'Tabelnavn';
$strTableOfContents = 'Indholdsfortegnelse';
$strTableOptions = 'Tabel-indstillinger';
$strTables = '%s tabel(ler)';
$strTableStructure = 'Struktur-dump for tabellen';
$strTable = 'Tabel';
$strTakeIt = 'Vælg dette';
$strTblPrivileges = 'Tabel-specifikke privilegier';
$strTempData = 'Midlertidige data';
$strTextAreaLength = ' På grund af feltets længde,<br /> kan det muligvis ikke ændres ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Standardtema %s ikke fundet!';
$strThemeNoPreviewAvailable = 'Intet billede til rådighed.';
$strThemeNotFound = 'Tema %s ikke fundet!';
$strThemeNoValidImgPath = 'Ingen gyldig billedsti for tema %s fundet!';
$strThemePathNotFound = 'Sti til tema ikke fundet for tema %s!';
$strTheme = 'Tema / Layout';
$strThisHost = 'Denne Host';
$strThreads = 'Tråde';
$strThreadSuccessfullyKilled = 'Tråd %s blev stoppet.';
$strTimeoutInfo = 'Foregående import timede ud, efter genindsendelse vil fortsætte fra position %d.';
$strTimeoutNothingParsed = 'Desværre blev der ikke parset nogen data ved sidste kørsel, dette betyder normalt at phpMyAdmin ikke vil være i stand til at gennemføre importen med mindre du forøger PHP-tidsbegrænsningerne.';
$strTimeoutPassed = 'Script timeout nået, hvis du vil afslutte importen, indsend venligst samme fil igen og importen vil fortsætte hvor den slap.';
$strTime = 'Tid';
$strToFromPage = 'til/fra side';
$strToggleScratchboard = 'tegnebræt til/fra';
$strToggleSmallBig = 'Skift mellem små/store';
$strToSelectRelation = 'For at vælge relation, klik :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Traditionelt Kinesisk';
$strTraditionalSpanish = 'Traditionelt Spansk';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'Transaktionskoordinator';
$strTransformation_application_octetstream__download = 'Viser et link til at downloade et felts binære data. Første indstilling er filnavnet på den binære fil. Anden indstilling er et muligt feltnavn fra en tabelrække indeholdende filnavnet. Hvis du bruger anden indstilling, skal feltet i den første indstilling være sat til en tom streng.';
$strTransformation_application_octetstream__hex = 'Viser hexadecimal udgave af data. Valgfrit førsteparameter angiver hvor meget plads der tilføjes (standard er 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Viser et klikbart minibillede; indstillinger: bredde,højde i pixel. Det originale perspektiv bevares.';
$strTransformation_image_jpeg__link = 'Viser et link til dette billede (f.eks. direkte blob-download).';
$strTransformation_image_png__inline = 'Se under image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Viser et TIME, TIMESTAMP, DATETIME eller numerisk unix tidsstempel-felt som formatteret dato. Den første indstilling er offset (i timer) som vil blive lagt til tidsstemplet (Standard: 0). Brug anden indstilling til at angive en anderledes dato-/tidsformatstreng. Tredje indstilling fastsætter om du vil se lokal dato eller UTC (brug "local" eller "utc" strenge) til dette. Ud fra dette har datoformatet forskellig værdi - for "local" se dokumentationen for PHP\'s strftime() funktion og for "utc" sker det ved brug af gmdate() funktionen.';
$strTransformation_text_plain__external = 'KUN LINUX: Starter en ekstern applikation og føder feltdata via standard input. Returnerer standardoutputtet for applikationen. Standard er Tidy, for korrekt udskrivning af HTML-kode. Af sikkerhedsårsager er du nødt til manuelt at redigere filen libraries/transformations/text_plain__external.inc.php og indsætte de værktøjer du vil tillade kørsel af. Første indstilling er så nummeret på det program du vil bruge og den anden indstilling er parametrene for dette program. Tredie parameter vil, hvis sat til 1, konvertere outputtet vha. htmlspecialchars() (Standard er 1). Et fjerde parameter vil, hvis sat til 1, sætte et NOWRAP om cellens indhold så hele outputtet bliver vist uden omformattering (Standard 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formattering af feltet. Der laves ikke nogen Escaping.';
$strTransformation_text_plain__imagelink = 'Viser et billede og et link, feltet indeholder filnavnet; første indstilling er et præfiks som "http://domain.com/", anden indstilling er bredde i pixel, tredie er højden.';
$strTransformation_text_plain__link = 'Viser et link, feltet indeholder filnavnet; første indstilling er et præfiks som "http://domain.com/", anden indstilling er en titel på linket.';
$strTransformation_text_plain__sql = 'Formatterer tekst som SQL-forespørgsel med syntaks farvemarkering.';
$strTransformation_text_plain__substr = 'Viser en del af en streng. Første parameter er antal tegn der skal springes over fra begyndelsen af en streng (Standard 0). Andet parameter er antal tegn der returneres (Standard indtil enden af strengen). Det tredie parameter definerer hvilke tegn der skal føjes til foran eller efter outputtet når en substring (understreng) returneres (Standard: "...") .';
$strTruncateQueries = 'Trunkér viste forespørgsler';
$strTurkish = 'Tyrkisk';
$strType = 'Datatype';

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Fjern alle mærker';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ukendt';
$strUnselectAll = 'Fravælg alle';
$strUnsupportedCompressionDetected = 'Du forsøgte at indlæse en fil med u-understøttet komprimering (%s). Understøttelse af denne funktion er ikke implementeret eller ikke slået til for din konfiguration.';
$strUpdatePrivMessage = 'Du har opdateret privilegierne for %s.';
$strUpdateProfileMessage = 'Profilen er blevet opdateret.';
$strUpdateQuery = 'Opdater forespørgsel';
$strUpdComTab = 'Se venligst Dokumentationen for oplysninger om hvordan du opdaterer din Column_comments (kolonne-kommentarer) tabel';
$strUpgrade = 'Du burde opdatere til %s %s eller senere.';
$strUploadErrorCantWrite = 'Kunne ikke skrive fil til disk.';
$strUploadErrorExtension = 'Filupload stoppet af udvidelse.';
$strUploadErrorFormSize = 'Den uploadede fil overstiger MAX_FILE_SIZE direktivet som angivet i HTML-formularen.';
$strUploadErrorIniSize = 'Den uploadede fil overstiger upload_max_filesize direktivet i php.ini.';
$strUploadErrorNoTempDir = 'Mangler en midlertidig mappe.';
$strUploadErrorPartial = 'Den uploadede fil blev kun delvist uploaded.';
$strUploadErrorUnknown = 'Ukendt fejl i filupload.';
$strUploadLimit = 'Du har sandsynligvis forsøgt at uploade en for stor fil. Se venligst %sdokumentationen%s for måder hvorpå du kan arbejde dig uden om denne begrænsning.';
$strUploadsNotAllowed = 'Fil-uploads er ikke tilladte på denne server.';
$strUsage = 'Benyttelse';
$strUseBackquotes = 'Brug "backquotes" omkring tabeller og felters navne';
$strUsedPhpExtensions = 'Brugte PHP-udvidelser';
$strUseHostTable = 'Brug Host Tabel';
$strUserAlreadyExists = 'Brugeren %s findes i forvejen!';
$strUser = 'Bruger';
$strUserEmpty = 'Intet brugernavn!';
$strUserName = 'Brugernavn';
$strUserNotFound = 'Den valgte bruger blev ikke fundet i privilegietabellen.';
$strUserOverview = 'Brugeroversigt';
$strUsersDeleted = 'De valgte brugere er blevet korrekt slettet.';
$strUsersHavingAccessToDb = 'Brugere med adgang til &quot;%s&quot;';
$strUseTabKey = 'Brug TAB-tasten for at flytte dig fra værdi til værdi, eller CTRL+piletasterne til at flytte frit omkring';
$strUseTables = 'Benyt tabeller';
$strUseTextField = 'Brug tekstfelt';
$strUseThisValue = 'Brug denne værdi';

$strValidateSQL = 'Validér SQL';
$strValidatorError = 'SQL-validatoren kunne ikke initialiseres. Check venligst at du har de nødvendige PHP-udvidelser installeret som beskrevet i %sdokumentationen%s.';
$strValue = 'Værdi';
$strVar = 'Variabel';
$strVersionInformation = 'Versionsinformation';
$strViewDumpDatabases = 'Vis dump (skema) for databaser';
$strViewDumpDB = 'Vis dump (skema) af database';
$strViewDump = 'Vis dump (skema) over tabel';
$strViewHasBeenDropped = 'Visning %s er blevet droppet';
$strViewMaxExactCount = 'Denne visning har mere end %d rækker. Se venligst %sdokumentationen%s.';
$strViewName = 'VIEW navn';
$strView = 'Visning';

$strWebServerUploadDirectoryError = 'Mappen du har sat til upload-arbejde kan ikke findes';
$strWebServerUploadDirectory = 'webserver upload-mappe';
$strWelcome = 'Velkommen til %s';
$strWestEuropean = 'Vesteuropæisk';
$strWildcard = 'jokertegn';
$strWindowNotFound = 'Det angivne browservindue kunne ikke opdateres. Måske har du lukket det overliggende vindue eller din browser blokerer for tvær-vindue opdateringer i sikkerhedsindstillingerne';
$strWithChecked = 'Med det markerede:';
$strWriteRequests = 'Write-anmodninger';
$strWrongUser = 'Forkert brugernavn/kodeord. Adgang nægtet.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Bemærk: Indstilling af disse værdier til 0 (nul) fjerner begrænsningen.';
$strZip = '"zippet"';

$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strTriggers = 'Triggers';  //to translate
$strEvent = 'Event';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
