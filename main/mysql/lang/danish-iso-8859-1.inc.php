<?php
/* $Id: danish-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */ /* danish - Dansk v 2.20 (based on english rev. 10226) 2007/04/03 01:23:45 - overs�tter AlleyKat kan kontaktes p� < phpmyadmin (at) phpbb2.dk > */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// forkortelser for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits  =  array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

// MySQL manual sprogdefinition, ikke p�kr�vet, en bruges hvis
// ikke defineret - da findes endnu ikke
$mysql_4_1_doc_lang = 'en';
$mysql_5_0_doc_lang = 'en';
$mysql_5_1_doc_lang = 'en';

$day_of_week  =  array('s�n', 'man', 'tir', 'ons', 'tor', 'fre', 'l�r');
$month  =  array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
// Se http://www.php.net/manual/en/function.strftime.php
// for at definere variablen herunder
$datefmt = '%d. %m %Y kl. %H:%M:%S';
$timespanfmt = '%s dage, %s timer, %s minutter og %s sekunder';

$strAbortedClients = 'Afbrudt';
$strAccessDenied = 'Adgang N�gtet';
$strAccessDeniedCreateConfig = 'Sandsynlig �rsag til dette er at du ikke har oprettet en konfigurationsfil. Du kan bruge %1$sops�tningsscriptet%2$s til at oprette en.';
$strAccessDeniedExplanation = 'phpMyAdmin fors�gte at forbinde til MySQL-serveren, og serveren afviste forbindelsen. Du b�r tjekke host, brugernavn og kodeord i config.inc.php og sikre dig at de svarer til den information du har f�et af administratoren af MySQL-serveren.';
$strAction = 'Handling';
$strAddAutoIncrement = 'Tilf�j AUTO_INCREMENT v�rdi';
$strAddClause = 'Tilf�j %s';
$strAddConstraints = 'Tilf�j begr�nsninger';
$strAddDeleteColumn = 'Tilf�j/Slet felt-kolonne';
$strAddDeleteRow = 'Tilf�j/Slet kriterie-r�kke';
$strAddFields = 'Tilf�j %s felt(er)';
$strAddHeaderComment = 'Tilf�j tilpassede kommentarer i headeren (\\n deler linjer)';
$strAddIntoComments = 'Tilf�j til kommentarer';
$strAddNewField = 'Tilf�j nyt felt';
$strAddPrivilegesOnDb = 'Tilf�j privilegier p� f�lgende database';
$strAddPrivilegesOnTbl = 'Tilf�j privileges p� f�lgende tabel';
$strAddSearchConditions = 'Tilf�j s�gekriterier (kroppen af "WHERE" s�tningen):';
$strAddToIndex = 'F�j til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUserMessage = 'Du har tilf�jet en ny bruger.';
$strAddUser = 'Tilf�j en ny bruger';
$strAdministration = 'Administration';
$strAffectedRows = 'Ber�rte r�kker:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Tilbage til foreg�ende side';
$strAfterInsertNewInsert = 'Inds�t endnu en ny r�kke';
$strAfterInsertNext = 'Redig�r n�ste r�kke';
$strAfterInsertSame = 'G� tilbage til denne side';
$strAll = 'Alle';
$strAllowInterrupt = 'Tillad afbrydelse af import hvis scriptet er t�t p� tidsgr�nsen. Dette kan v�re en god metode til at importere st�rre filer, men kan kn�kke transaktioner.';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Arrang�r tabelr�kkef�lge efter';
$strAnalyzeTable = 'Analys�r tabel';
$strAnd = 'Og';
$strAndThen = 'og derefter';
$strAngularLinks = 'Angul�re links';
$strAnIndex = 'Der er tilf�jet et indeks til %s';
$strAny = 'Enhver';
$strAnyHost = 'Enhver v�rt';
$strAnyUser = 'Enhver bruger';
$strApproximateCount = 'Kan v�re ansl�et. Se FAQ 3.11';
$strAPrimaryKey = 'En prim�r n�gle er blevet tilf�jet til %s';
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
$strBeginRaw = 'BEGYND R�';
$strBinary = ' Bin�rt ';
$strBinaryDoNotEdit = ' Bin�rt - m� ikke �ndres ';
$strBinaryLog = 'Bin�r log';
$strBinLogEventType = 'H�ndelsestype';
$strBinLogInfo = 'Information';
$strBinLogName = 'Lognavn';
$strBinLogOriginalPosition = 'Original position';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Lad alle brugere bruge dette bogm�rke';
$strBookmarkCreated = 'Bogm�rke %s oprettet';
$strBookmarkDeleted = 'Bogm�rket er fjernet.';
$strBookmarkLabel = 'M�rke';
$strBookmarkQuery = 'SQL-foresp�rgsel med bogm�rke';
$strBookmarkReplace = 'Erstat eksisterende bogm�rke af samme navn';
$strBookmarkThis = 'Lav bogm�rke til denne SQL-foresp�rgsel';
$strBookmarkView = 'Kun oversigt';
$strBrowseDistinctValues = 'Gennemse bestemte v�rdier';
$strBrowseForeignValues = 'Bladre i fremmedv�rdier';
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
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpet p� grund af en �delagt Bz2 extension i denne PHP-version. Det anbefales kraftigt at s�tte <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurationsfil til <code>FALSE</code>. Hvis du vil bruge Bz2 komprimeringsfeatures, b�r du opdatere til en nyere PHP-version. Se PHP bug report %s for detaljer.';
$strBzip = '"bzipped"';

$strCalendar = 'Kalender';
$strCancel = 'Annuller';
$strCanNotLoadExportPlugins = 'Kunne ikke indl�se eksportplugins, check venligst din installation!';
$strCanNotLoadImportPlugins = 'Kunne ikke indl�se importplugins, check venligst din installation!';
$strCannotLogin = 'Kan ikke logge ind p� MySQL-serveren';
$strCantLoad = 'Kan ikke indl�se [a@http://php.net/%1$s@Dokumentation][em]%1$s[/em][/a] udvidelsen. Tjek venligst din PHP-konfiguration.';
$strCantLoadRecodeIconv = 'Kan ikke indl�se iconv eller omkode n�dvendig udvidelse til tegns�t-konvertering, konfigurer PHP til at tillade brug af disse udvidelser eller sl� tegns�t-konvertering fra i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke omd�be indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruge iconv ejheller libiconv eller recode_string funktionen omend udvidelsen ser ud til at v�re indl�st. Check din PHP-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCaseInsensitive = 'ingen forskel p� store/sm� bogstaver';
$strCaseSensitive = 'forskel p� store/sm� bogstaver';
$strCentralEuropean = 'Centraleurop�isk';
$strChange = '�ndre';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slet den gamle fra brugertabellerne og genindl�s privilegierne efterf�lgende.';
$strChangeCopyModeJustDelete = ' ... slet den gamle fra brugertabellerne.';
$strChangeCopyMode = 'Opret en bruger med samme privilegier og ...';
$strChangeCopyModeRevoke = ' ... tilbagekald alle aktive privilegier fra den gamle og slet den efterf�lgende.';
$strChangeCopyUser = 'Ret Login-information / Kopi�r bruger';
$strChangeDisplay = 'V�lg felt der skal vises';
$strChangePassword = '�ndre kodeord';
$strCharsetOfFile = 'Tegns�t for filen:';
$strCharsetsAndCollations = 'Tegns�t og kollationer (Collations)';
$strCharsets = 'Tegns�t';
$strCharset = 'Tegns�t';
$strCheckAll = 'Afm�rk alt';
$strCheckOverhead = 'Check tabeller der har overhead';
$strCheckPrivs = 'Check Privilegier';
$strCheckPrivsLong = 'Check privilegier for database &quot;%s&quot;.';
$strCheckTable = 'Tjek tabel';
$strChoosePage = 'V�lg en side der skal redigeres';
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
$strConfigDefaultFileError = 'Kunne ikke indl�se standardkonfiguration fra: "%1$s"';
$strConfigFileError = 'phpMyAdmin kunne ikke l�se din konfigurationsfil!<br />Dette kan ske hvis PHP finder en parser-fejl i den, eller PHP ikke kan finde filen.<br />Kald konfigurationsfilen direkte fra nedenst�ende link og l�s de(n) PHP-fejlmeddelelse(r) du f�r. I de fleste tilf�lde mangler der et anf�rselstegn eller et semikolon et sted.<br />Hvis du f�r en blank side, er alt i orden.';
$strConfigureTableCoord = 'Konfigur�r venligst koordinaterne for tabel %s';
$strConnectionError = 'Kan ikke forbinde: ugyldige indstillinger.';
$strConnections = 'Forbindelser';
$strConstraintsForDumped = 'Begr�nsninger for dumpede tabeller';
$strConstraintsForTable = 'Begr�nsninger for tabel';
$strControluserFailed = 'Forbindelse for kontrolbruger som defineret i din konfiguration slog fejl.';
$strCookiesRequired = 'Herefter skal cookies v�re sl�et til.';
$strCopy = 'Kopi';
$strCopyDatabaseOK = 'Database %s er blevet kopieret til %s';
$strCopyTable = 'Kopier tabel til (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabellen %s er nu kopieret til: %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til den samme!';
$strCouldNotKill = 'phpMyAdmin kunne ikke dr�be tr�den %s. Den er sandsynligvis allerede lukket.';
$strCreate = 'Opret';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE f�r kopiering';
$strCreateIndex = 'Dan et indeks p�&nbsp;%s&nbsp;kolonner';
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
$strDatabasesStatsDisable = 'Sl� Statistikker fra';
$strDatabasesStatsEnable = 'Sl� Statistikker til';
$strDatabasesStatsHeavyTraffic = 'Bem�rk: Aktivering af databasestatistikkerne h�r kan for�rsage tung trafik mellem webserveren og MySQL-serveren.';
$strData = 'Data';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Kun data';
$strDataPages = 'Sider der indeholder data';
$strDBComment = 'Databasekommentar: ';
$strDBCopy = 'Kopi�r database til';
$strDbIsEmpty = 'Database ser ud til at v�re tom!';
$strDbPrivileges = 'Database-specifikke privilegier';
$strDBRename = 'Omd�b database til';
$strDbSpecific = 'database-specifik';
$strDefault = 'Standardv�rdi';
$strDefaultEngine = '%s er standard datalageret p� denne MySQL-server.';
$strDefaultValueHelp = 'For standardv�rdier, indtast venligst kun en enkelt v�rdi, uden backslash escaping eller quotes, ud fra f�lgende format: a';
$strDefragment = 'Defragment�r tabel';
$strDelayedInserts = 'Brug forsinkede inds�ttelser';
$strDeleteAndFlushDescr = 'Dette er den sikreste metode, men genindl�sning af privilegierne kan tage noget tid.';
$strDeleteAndFlush = 'Slet brugerne og genindl�s privilegier bagefter.';
$strDelete = 'Slet';
$strDeletedRows = 'Slettede r�kker:';
$strDeleted = 'R�kken er slettet!';
$strDeleteNoUsersSelected = 'Ingen brugere valgt til sletning!';
$strDeleteRelation = 'Slet relation';
$strDeleting = 'Sletter %s';
$strDelimiter = 'Adskiller';
$strDelOld = 'Nuv�rende side har referencer til tabeller der ikke l�ngere eksisterer. Vil du slette disse referencer?';
$strDescending = 'Faldende';
$strDescription = 'Beskrivelse';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Visningsfeltet er vist som pink. For at s�tte/fjerne et felt som visningsfelt, klik p� "V�lg felt der skal vises" ikonet, og klik derefter p� det p�g�ldende feltnavn.';
$strDictionary = 'ordbog';
$strDirectLinks = 'Direkte links';
$strDirtyPages = 'Beskidte sider';
$strDisabled = 'Sl�et fra';
$strDisableForeignChecks = 'Sl� fremmedn�gle-checks fra';
$strDisplayFeat = 'Vis muligheder';
$strDisplayOrder = 'R�kkef�lge af visning:';
$strDisplayPDF = 'Vis PDF-skematik';
$strDoAQuery = 'K�r en foresp�rgsel p� felter (jokertegn: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Er du sikker p� at du vil ';
$strDropDatabaseStrongWarning = 'Du er ved at DESTRUERE en komplet database!';
$strDrop = 'Slet';
$strDropUsersDb = 'Drop databaser der har samme navne som brugernes.';
$strDumpingData = 'Data dump for tabellen';
$strDumpSaved = 'Dump er blevet gemt i filen %s.';
$strDumpXRows = 'Dump %s r�kker startende med r�kke %s.';
$strDynamic = 'dynamisk';

$strEditPDFPages = 'Redig�r PDF-sider';
$strEditPrivileges = 'Ret privilegier';
$strEdit = 'Ret';
$strEffective = 'Effektiv';
$strEmptyResultSet = 'MySQL returnerede ingen data (fx ingen r�kker).';
$strEmpty = 'T�m';
$strEnabled = 'Sl�et til';
$strEncloseInTransaction = 'Inklud�r eksport i en transaktion';
$strEndCut = 'SLUT KLIP';
$strEndRaw = 'SLUT R�';
$strEnd = 'Slut';
$strEngineAvailable = '%s er tilg�ngelig p� denne MySQL-server.';
$strEngineDisabled = '%s er sl�et fra p� denne MySQL-server.';
$strEngines = 'Lagre';
$strEngineUnsupported = 'Denne MySQL-server underst�tter ikke %s datalager.';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' NB: Navne p� MySQL privilegier er p� engelsk ';
$strError = 'Fejl';
$strErrorInZipFile = 'Fejl i ZIP arkiv:';
$strErrorRelationAdded = 'Fejl: Relation ikke tilf�jet.';
$strErrorRelationExists = 'Fejl: Relation findes allerede.';
$strErrorSaveTable = 'Fejl ved lagring af koordinater for Designer.';
$strErrorRenamingTable = 'Fejl ved omd�bning af tabel  %1$s til %2$s';
$strEscapeWildcards = 'Jokertegn _ og % skal v�re escaped med en \ foran for at bruge dem bogstaveligt';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estisk';
$strExcelEdition = 'Excel-udgave';
$strExecuteBookmarked = 'Udf�r foresp�rgsel iflg. bogm�rke';
$strExplain = 'Forklar SQL';
$strExport = 'Eksport';
$strExportImportToScale = 'Eksporter/Importer til skala';
$strExportMustBeFile = 'Valgte eksporttype skal gemmes som fil!';
$strExtendedInserts = 'Udvidede inserts';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Mislykkede fors�g';
$strField = 'Feltnavn';
$strFieldHasBeenDropped = 'Felt %s er slettet';
$strFieldInsertFromFileTempDirNotExists = 'Fejl ved flytning af den uploadede fil, se FAQ 1.11';
$strFieldsEnclosedBy = 'Felter indrammet med';
$strFieldsEscapedBy = 'Felter escaped med';
$strFields = 'Felter';
$strFieldsTerminatedBy = 'Felter afsluttet med';
$strFileAlreadyExists = 'Filen %s findes allerede p� serveren, lav filnavnet om eller tillad at der overskrives.';
$strFileCouldNotBeRead = 'Filen kunne ikke l�ses';
$strFileNameTemplateDescriptionDatabase = 'databasenavn';
$strFileNameTemplateDescription = 'Denne v�rdi fortolkes via %1$sstrftime%2$s, s� du kan bruge tidsformatterede strenge. Ydermere vil f�lgende transformationer foreg�: %3$s. Anden tekst vil blive bevaret som det er.';
$strFileNameTemplateDescriptionServer = 'servernavn';
$strFileNameTemplateDescriptionTable = 'tabelnavn';
$strFileNameTemplateRemember = 'husk skabelonen';
$strFileNameTemplate = 'Skabelon for filnavn';
$strFiles = 'Filer';
$strFileToImport = 'Fil til import';
$strFixed = 'ordnet';
$strFlushPrivilegesNote = 'Bem�rk: phpMyAdmin henter brugernes privilegier direkte fra MySQLs privilegietabeller. Indholdet af disse tabeller kan v�re forskelligt fra privilegierne serveren i �jeblikket bruger hvis der er lavet manuelle �ndringer i den. Hvis dette er tilf�ldet, b�r du %sgenindl�se privilegierne%s f�r du forts�tter.';
$strFlushQueryCache = 'Flush foresp�rgsel-mellemlager (query cache)';
$strFlushTable = 'Flush tabellen ("FLUSH")';
$strFlushTables = 'Flush (luk) alle tabeller';
$strFontSize = 'Skriftst�rrelse';
$strForeignKeyError = 'Fejl ved oprettelse af fremmedn�gle (check datatyper)';
$strFormat = 'Format';
$strFormEmpty = 'Ingen v�rdi i formularen !';
$strFreePages = 'Frie sider';
$strFullText = 'Komplette tekster';
$strFunction = 'Funktion';
$strFunctions = 'Funktioner';

$strGenBy = 'Genereret af';
$strGeneralRelationFeat = 'Generelle relationsmuligheder';
$strGenerate = 'Gener�r';
$strGeneratePassword = 'Gener�r Kodeord';
$strGenTime = 'Genereringstid';
$strGeorgian = 'Georgisk';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global v�rdi';
$strGo = 'Udf�r';
$strGrantOption = 'Tildel';
$strGreek = 'Gr�sk';
$strGzip = '"gzipped"';

$strHandler = 'Handler';
$strHasBeenAltered = 'er �ndret.';
$strHasBeenCreated = 'er oprettet.';
$strHaveToShow = 'Du skal v�lge mindst en kolonne der skal vises';
$strHebrew = 'Hebr�isk';
$strHelp = 'Hj�lp';
$strHexForBLOB = 'Brug heksadecimal for BLOB';
$strHide         = 'Skjul';
$strHideShowAll = 'Skjul/Vis alle';
$strHideShowNoRelation = 'Skjul/Vis tabeller uden relation';
$strHome = 'Hjem';
$strHomepageOfficial = 'Officiel phpMyAdmin hjemmeside ';
$strHostEmpty = 'Der er intet v�rtsnavn!';
$strHost = 'V�rt';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungarsk';

$strIcelandic = 'Islandsk';
$strId = 'ID';
$strIdxFulltext = 'Fuldtekst';
$strIEUnsupported = 'Internet Explorer underst�tter ikke denne funktion.';
$strIgnoreDuplicates = 'Ignor�r gentagne r�kker';
$strIgnore = 'Ignorer';
$strIgnoreInserts = 'Brug ignor�r inserts';
$strImportFiles = 'Import�r filer';
$strImportExportCoords = 'Importer/Eksporter koordinater for PDF-opstilling';
$strImportFormat = 'Format p� importeret fil';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Importen er korrekt gennemf�rt, %d foresp�rgsler udf�rt.';
$strIndexes = 'Indeks';
$strIndexesSeemEqual = 'F�lgende indeks ser ud til at v�re ens og et af dem burde fjernes:';
$strIndexHasBeenDropped = 'Indeks %s er blevet slettet';
$strIndex = 'Indeks';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strIndexWarningTable = 'Problemer med indeksene p� tabel `%s`';
$strInnoDBAutoextendIncrement = 'Autoextend for�gelse';
$strInnoDBAutoextendIncrementDesc = ' St�rrelsen p� den udvidelse der vil forekomme, n�r pladsen i en autoudvidende tabel udvides fordi den l�ber fuld.';
$strInnoDBBufferPoolSize = 'Buffer pool st�rrelse';
$strInnoDBBufferPoolSizeDesc = 'St�rrelse p� memorybufferen InnoDB bruger til at mellemlagre data og indeks p� dens tabeller.';
$strInnoDBDataFilePath = 'Datafiler';
$strInnoDBDataHomeDir = 'Data hovedmappe';
$strInnoDBDataHomeDirDesc = 'Den f�lles del af stien til mappen med alle InnoDB datafiler.';
$strInnoDBPages = 'sider';
$strInnoDBRelationAdded = 'InnoDB-relation tilf�jet';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Din konfigurationsfil indeholder indstillinger (root og intet kodeord) som svarer til en standard MySQL-priviligeret brugerkonto. Din MySQL server k�rer med denne standardindstilling, <u>er �ben for indtr�ngen</u>, og du opfordres st�rkt til at g�re noget ved dette sikkerhedshul.';
$strInsertAsNewRow = 'Inds�t som ny r�kke';
$strInsertedRowId = 'Indsat r�kke-id:';
$strInsertedRows = 'Indsatte r�kker:';
$strInsert = 'Inds�t';
$strInternalNotNecessary = '* En intern relation er ikke n�dvendig n�r den ogs� eksisterer i InnoDB.';
$strInternalRelationAdded = 'Intern relation tilf�jet';
$strInternalRelations = 'Interne relationer';
$strInUse = 'i brug';
$strInvalidAuthMethod = 'Ugyldig autorisationsmetode sat i konfiguration:';
$strInvalidColumnCount = 'Kolonneantal skal v�re st�rre end nul.';
$strInvalidColumn = 'Ugyldig kolonne (%s) angivet!';
$strInvalidCSVFieldCount = 'Ugyldigt feltantal i CSV-input p� linie %d.';
$strInvalidCSVFormat = 'Ugyldigt format for CSV-input p� linie %d.';
$strInvalidCSVParameter = 'Ugyldigt parameter for CSV-import: %s';
$strInvalidDatabase = 'Ugyldig database';
$strInvalidFieldAddCount = 'Du skal tilf�je mindst �t felt.';
$strInvalidFieldCount = 'Tabellen skal indeholde mindst �t felt.';
$strInvalidLDIImport = 'Denne plugin underst�tter ikke komprimeret import!';
$strInvalidRowNumber = '%d er ikke et gyldigt r�kkenummer.';
$strInvalidServerHostname = 'Ugyldigt hostnavn for server %1$s. Gennemg� venligst din konfiguration.';
$strInvalidServerIndex = 'Ugyldigt server indeks: "%s"';
$strInvalidTableName = 'Ugyldigt tabelnavn';

$strJapanese = 'Japansk';
$strJoins = 'Joins';
$strJumpToDB = 'Hop til database &quot;%s&quot;.';
$strJustDelete = 'Bare slet brugerne fra privilegietabellerne.';
$strJustDeleteDescr = 'De &quot;slettede&quot; brugere kan stadig tilg� serveren som de plejer indtil privilegierne genindl�ses.';

$strKeepPass = 'Kodeord m� ikke �ndres';
$strKeyCache = 'N�glemellemlager (key cache)';
$strKeyname = 'N�glenavn';
$strKill = 'Dr�b (Kill)';
$strKnownExternalBug = 'Funktionaliteten af %s er p�virket af en kendt fejl, se %s';
$strKorean = 'Koreansk';

$strLandscape = 'Liggende';
$strLanguage = 'Sprog';
$strLanguageUnknown = 'Ukendt sprog: %1$s.';
$strLatchedPages = 'Eksklusivt l�ste (latched) sider';
$strLatexCaption = 'Tabeloverskrift';
$strLatexContent = 'Indhold af tabel __TABLE__';
$strLatexContinuedCaption = 'Fortsat tabeloverskrift';
$strLatexContinued = '(forts�ttes)';
$strLatexIncludeCaption = 'Inkluder tabeloverskrift';
$strLatexLabel = 'M�rke n�gle';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktur for tabel __TABLE__';
$strLatvian = 'Lettisk';
$strLDI = 'CSV vha. LOAD DATA';
$strLDILocal = 'Brug LOCAL n�gleord';
$strLengthSet = 'L�ngde/V�rdi*';
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
$strLongOperation = 'Denne operation kan tage lang tid. Forts�t alligevel?';

$strMaxConnects = 'maks. samtidige forbindelser';
$strMaximalQueryLength = 'Maksimal l�ngde p� oprettet foresp�rgsel';
$strMaximumSize = 'Maksimum st�rrelse: %s%s';
$strMbExtensionMissing = 'PHP-udvidelsen mbstring blev ikke fundet og du ser ud til at bruge et multibyte tegns�t. Uden mbstring-udvidelsen er phpMyAdmin ude af stand til at opdele strenge korrekt og dette kan for�rsage uventede resultater';
$strMbOverloadWarning = 'Du har mbstring.func_overload sl�et til i din PHP-konfiguration. Denne indstilling er ikke kompatibel med phpMyAdmin og kan for�rsage �del�ggelse af nogle data!';
$strMIME_available_mime = 'Tilg�ngelige MIME-typer';
$strMIME_available_transform = 'Tilg�ngelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'Der er ingen beskrivelse af denne transformation.<br />Sp�rg venligst forfatteren, hvad %s g�r.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For en liste over mulige transformationsindstillinger og deres MIME-type transformationer, klik p� %stransformationsbeskrivelser%s';
$strMIME_transformation_options_note = 'Indtast v�rdier for transformationsindstillinger ud fra f�lgende format: \'a\', 100, b,\'c\'...<br />Skulle du f� brug for at inds�tte en backslash ("\") eller en apostrof ("\'") i v�rdierne, backslash det (for eksempel \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_transformation_options = 'Transformationsindstillinger';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE (MIME-typer for tabellen)';
$strMIME_without = 'MIME-typer skrevet med kursiv har ikke en separat transformationsfunktion';
$strModifications = 'Rettelserne er gemt!';
$strModifyIndexTopic = '�ndring af et indeks';
$strModify = 'Ret';
$strMoveMenu = 'Flyt Menu';
$strMoveTable = 'Flyt tabel til (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s er flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til den samme!';
$strMultilingual = 'flersproget';
$strMyISAMDataPointerSize = 'Data pointer st�rrelse';
$strMyISAMDataPointerSizeDesc = 'Standard pointerst�rrelse i bytes, til brug ved CREATE TABLE for MyISAM tabeller n�r der ikke er specificeret nogen MAX_ROWS indstilling.';
$strMyISAMMaxExtraSortFileSizeDesc = 'Hvis den midlertidige fil der bruges til hurtig MyISAM indeks-oprettelse ville v�re st�rre end ved brug af key cache med st�rrelsen angivet her, foretr�k key cache-metoden.';
$strMyISAMMaxExtraSortFileSize = 'Maksimal st�rrelse for midlertidige filer ved oprettelse af indeks';
$strMyISAMMaxSortFileSizeDesc = 'Maksimal st�rrelse for den midlertidige fil MySQL har lov til at bruge under genetablering af et MyISAM indeks (under REPAIR TABLE, ALTER TABLE, eller LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimal st�rrelse for midlertidige sorteringsfiler';
$strMyISAMRecoverOptions = 'Automatisk genopretnings-modus';
$strMyISAMRecoverOptionsDesc = 'Modus for automatisk genetablering af crashede MyISAM tabeller, som sat via --myisam-recover server opstartsindstillingen.';
$strMyISAMRepairThreadsDesc = 'Hvis denne v�rdi er st�rre end 1, oprettes MyISAM tabel-indeks parallelt (hvert indeks i dets egen tr�d) under Reparation ved sortering-processen.';
$strMyISAMRepairThreads = 'Repar�r tr�de';
$strMyISAMSortBufferSizeDesc = 'Bufferen der allokeres ved sortering af MyISAM indeks under en REPAIR TABLE eller n�r indeks oprettes med CREATE INDEX eller ALTER TABLE.';
$strMyISAMSortBufferSize = 'Sorterings-bufferst�rrelse';
$strMySQLCharset = 'MySQL Tegns�t';
$strMysqlClientVersion = 'MySQL klientversion';
$strMySQLConnectionCollation = 'MySQL forbindelses-sammenk�ring';
$strMysqlLibDiffersServerVersion = 'Din PHP MySQL-biblioteks version %s afviger fra din MySQL server version %s. Dette kan for�rsage uforudsigelige resultater.';
$strMySQLSaid = 'MySQL returnerede: ';
$strMySQLShowProcess = 'Vis tr�de';
$strMySQLShowStatus = 'Vis MySQL runtime-information';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'N�ste';
$strNoActivity = 'Ingen aktivitet i de seneste %s sekunder eller mere, log venligst ind igen';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser valgt.';
$strNoDataReceived = 'Der blev ikke modtaget nogen data til import. Enten blev der ikke indsendt et filnavn, eller filst�rrelsen kan have overskredet maksimalst�rrelsen tilladt af din PHP-konfiguration. Se FAQ 1.16.';
$strNoDescription = 'ingen beskrivelse';
$strNoDetailsForEngine = 'Der er ingen detaljerede statusinformationer tilg�ngelige for dette datalager.';
$strNoDropDatabases = '"DROP DATABASE" erkl�ringer kan ikke bruges.';
$strNoExplain = 'Spring over Forklar SQL';
$strNoFilesFoundInZip = 'Ingen filer fundet i ZIP arkivet!';
$strNoFrames = 'phpMyAdmin er mere brugervenlig med en browser, der kan klare <b>frames</b>.';
$strNoIndex = 'Intet indeks defineret!';
$strNoIndexPartsDefined = 'Ingen dele af indeks er defineret!';
$strNoModification = 'Ingen �ndring';
$strNone = 'Intet';
$strNo = 'Nej';
$strNoOptions = 'Dette format har ingen indstillinger';
$strNoPassword = 'Intet kodeord';
$strNoPermission = 'Webserveren har ikke tilladelse til at gemme filen %s.';
$strNoPhp = 'uden PHP-kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoRights = 'Du har ikke tilstr�kkelige rettigheder til at v�re her!';
$strNoRowsSelected = 'Ingen r�kker valgt';
$strNoSpace = 'Utilstr�kkeligt plads til at gemme filen %s.';
$strNoTablesFound = 'Ingen tabeller fundet i databasen.';
$strNoThemeSupport = 'Ingen tema/layout-underst�ttelse, tjek venligst din konfiguration og/eller dine temaer i mappen %s.';
$strNotNumber = 'Dette er ikke et tal!';
$strNotOK = 'ikke OK';
$strNotSet = 'Tabel <b>%s</b> findes ikke eller er ikke sat i %s';
$strNoUsersFound = 'Ingen bruger(e) fundet.';
$strNoValidateSQL = 'Spring over Valid�r SQL';
$strNull = 'Nulv�rdi';
$strNumberOfFields = 'Antal felter';
$strNumberOfTables = 'Antal tabeller';
$strNumSearchResultsInTable = '%s hit(s) i tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> hit(s)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document regneark';
$strOpenDocumentText = 'Open Document tekst';
$strOpenNewWindow = '�bn nyt phpMyAdmin vindue';
$strOperations = 'Operationer';
$strOperator = 'Operat�r';
$strOptimizeTable = 'Optimer tabel';
$strOptions = 'Indstillinger';
$strOr = 'Eller';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overskriv eksisterende fil(er)';

$strPageNumber = 'Side nummer:';
$strPagesToBeFlushed = 'Sider der st�r til at blive t�mt';
$strPaperSize = 'Papirst�rrelse';
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
$strPleaseSelectPrimaryOrUniqueKey = 'V�lg venligst den prim�re n�gle eller en unik n�gle';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktivet SKAL v�re sat i din konfigurationsfil!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polsk';
$strPortrait = 'St�ende';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimaryKeyHasBeenDropped = 'Prim�rn�glen er slettet';
$strPrimaryKeyName = 'Navnet p� prim�rn�glen skal v�re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>skal</b> v�re navnet p� og <b>kun p�</b> en prim�r n�gle!)';
$strPrimary = 'Prim�r';
$strPrint = 'Print';
$strPrintViewFull = 'Udskrift-visning (med fulde tekster)';
$strPrintView = 'Vis (udskriftvenlig)';
$strPrivDescAllPrivileges = 'Inkluderer alle privilegier p�n�r GRANT.';
$strPrivDescAlterRoutine = 'Tillader �ndring og sletning af gemte rutiner.';
$strPrivDescAlter = 'Tillader �ndring af strukturen p� eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillader oprettelse af nye databaser og tabeller.';
$strPrivDescCreateRoutine = 'Tillader oprettelse af gemte rutiner.';
$strPrivDescCreateTbl = 'Tillader oprettelse af nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillader oprettelse af midlertidige tabeller.';
$strPrivDescCreateUser = 'Tillader oprettelse, sletning og omd�bning af brugerkonti.';
$strPrivDescCreateView = 'Tillader oprettelse af nye Allows creating new views.';
$strPrivDescDelete = 'Tillader sletning af data.';
$strPrivDescDropDb = 'Tillader at droppe databaser og tabeller.';
$strPrivDescDropTbl = 'Tillader at droppe tabeller.';
$strPrivDescExecute5 = 'Tillader udf�relse af gemte rutiner.';
$strPrivDescExecute = 'Tillader k�rsel af gemte procedurer; Har ingen effekt i denne MySQL-version.';
$strPrivDescFile = 'Tillader import af data fra og eksport af data til filer.';
$strPrivDescGrant = 'Tillader oprettelse af brugere og privilegier uden at genindl�se privilegie-tabellerne.';
$strPrivDescIndex = 'Tillader at skabe og droppe indeks.';
$strPrivDescInsert = 'Tillader inds�ttelse og erstatning af data.';
$strPrivDescLockTables = 'Tillader l�sning af tabeller for nuv�rende tr�d.';
$strPrivDescMaxConnections = 'Begr�nser antallet af nye forbindelser brugeren m� �bne pr. time.';
$strPrivDescMaxQuestions = 'Begr�nser antallet af foresp�rgsler brugeren m� sende til serveren pr. time.';
$strPrivDescMaxUpdates = 'Begr�nser antallet af kommandoer som �ndrer enhver tabel eller database brugeren m� udf�re pr. time.';
$strPrivDescMaxUserConnections = 'Begr�nser antallet af samtidige forbindelser brugere m� have.';
$strPrivDescProcess3 = 'Tillader at dr�be andre brugeres processer.';
$strPrivDescProcess4 = 'Tillader at se komplette foresp�rgsler i proceslisten.';
$strPrivDescReferences = 'Har ingen effekt i denne MySQL version.';
$strPrivDescReload = 'Tillader genindl�sning af serverindstillinger og t�mning af caches.';
$strPrivDescReplClient = 'Giver brugeren rettigheder til at sp�rge hvor Slaves / Masters er.';
$strPrivDescReplSlave = 'N�dvendigt for replikationsslaverne.';
$strPrivDescSelect = 'Tillader l�sning af data.';
$strPrivDescShowDb = 'Giver adgang til den fuldst�ndige liste over databaser.';
$strPrivDescShowView = 'Tillader udf�relse af SHOW CREATE VIEW foresp�rgsler.';
$strPrivDescShutdown = 'Tillader nedlukning af serveren.';
$strPrivDescSuper = 'Tillader forbindelse, selv hvis maksimalt antal forbindelser er n�et; N�dvendigt for de fleste administrative operationer som indstilling af globale variabler eller for at dr�be andre brugeres tr�de.';
$strPrivDescUpdate = 'Tillader �ndring af data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierne blev korrekt genindl�st.';
$strProcedures = 'Procedurer';
$strProcesses = 'Processer';
$strProcesslist = 'Procesliste';
$strProtocolVersion = 'Protokolversion';
$strPutColNames = 'Inds�t feltnavne i f�rste r�kke';

$strQBEDel = 'Del (Slet)';
$strQBE = 'Foresp. via eks.';
$strQBEIns = 'Ins (Inds�t)';
$strQueryCache = 'Foresp�rgsel-mellemlager';
$strQueryFrame = 'Foresp. vindue';
$strQueryOnDb = 'SQL-foresp�rgsel til database <b>%s</b>:';
$strQueryResultsOperations = 'Foresp�rgselsresultat operationer';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Foresp�rgselsstatistikker</b>: Siden opstarten er der blevet sendt %s foresp�rgsler til serveren.';
$strQueryTime = 'Forep�rgsel tog %01.4f sek';
$strQueryType = 'Foresp�rgselstype';
$strQueryWindowLock = 'Overskriv ikke denne foresp�rgsel fra udenfor vinduet';

$strReadRequests = 'Read-anmodninger';
$strReceived = 'Modtaget';
$strRecommended = 'anbefalet';
$strRecords = 'Poster';
$strReferentialIntegrity = 'Check reference-integriteten';
$strRefresh = 'Opdat�r';
$strRelationalSchema = 'Relationel skematik';
$strRelationNotWorking = 'De ekstra features for at arbejde med linkede tabeller er deaktiveret. For at se hvorfor, klik %sher%s.';
$strRelationDeleted = 'Relation slettet';
$strRelationsForTable = 'RELATIONS FOR TABLE (Relationer for tabellen)';
$strRelations = 'Relationer';
$strRelationView = 'Se Relationer';
$strReloadingThePrivileges = 'Genindl�s privilegierne';
$strReloadPrivileges = 'Genindl�s privilegier';
$strReload = 'Genindl�s';
$strRemoveSelectedUsers = 'Fjern valgte brugere';
$strRenameDatabaseOK = 'Database %s er blevet omd�bt til %s';
$strRenameTableOK = 'Tabellen %s er nu omd�bt til %s';
$strRenameTable = 'Omd�b tabel til';
$strRepairTable = 'Reparer tabel';
$strReplaceNULLBy = 'Erstat NULL med';
$strReplaceTable = 'Erstat data i tabellen med filens data';
$strReplication = 'Replikering';
$strReset = 'Nulstil';
$strResourceLimits = 'Ressourcebegr�nsninger';
$strReType = 'Skriv igen';
$strRevokeAndDeleteDescr = 'Bruger(e) vil fortsat have USAGE-privilegiet indtil privilegierne genindl�ses.';
$strRevokeAndDelete = 'Tilbagekald alle aktive privilegier fra brugerne og slet dem efterf�lgende.';
$strRevokeMessage = 'Du har tilbagekaldt privilegierne for %s';
$strRevoke = 'Tilbagekald';
$strRomanian = 'Rum�nsk';
$strRoutineReturnType = 'Retur type';
$strRoutines = 'Rutiner';
$strRowLength = 'R�kkel�ngde';
$strRowsFrom = 'r�kker startende fra post #';
$strRowSize = ' R�kkest�rrelse ';
$strRowsModeFlippedHorizontal = 'horisontalt (roterede overskrifter)';
$strRowsModeHorizontal = 'vandret';
$strRowsModeOptions = '%s og gentag overskrifter efter %s celler';
$strRowsModeVertical = 'lodret';
$strRows = 'R�kker';
$strRowsStatistic = 'R�kke-statistik';
$strRunning = 'k�rer p� %s';
$strRunQuery = 'Send foresp�rgsel';
$strRunSQLQuery = 'K�r SQL-forsp�rgsel(er) p� database %s';
$strRunSQLQueryOnServer = 'K�r SQL-foresp�rgsel/foresp�rgsler p� server %s';
$strRussian = 'Russisk';

$strSaveOnServer = 'Gem p� serveren i mappen %s ';
$strSavePosition = 'Gem position';
$strSave = 'Gem';
$strScaleFactorSmall = 'Skaleringsfaktoren er for lille til at tilpasse skematikken til en side';
$strSearchFormTitle = 'S�g i databasen';
$strSearchInTables = 'Indeni tabel(ler):';
$strSearchNeedle = 'Ord eller v�rdi(er) (jokertegn: "%"):';
$strSearchOption1 = 'mindst et af ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'den n�jagtige s�tning';
$strSearchOption4 = 'som regul�rt udtryk';
$strSearchResultsFor = 'S�geresultater for "<i>%s</i>" %s:';
$strSearch = 'S�g';
$strSearchType = 'Find:';
$strSecretRequired = 'Konfigurationsfilen skal nu bruge et hemmeligt kodeord (blowfish_secret).';
$strSelectADb = 'V�lg en database';
$strSelectAll = 'V�lg alle';
$strSelectBinaryLog = 'V�lg bin�rlog til gennemsyn';
$strSelectFields = 'V�lg mindst eet felt:';
$strSelectForeignKey = 'V�lg fremmedn�gle';
$strSelectNumRows = 'i foresp�rgsel';
$strSelectReferencedKey = 'V�lg refereret n�gle';
$strSelectTables = 'V�lg Tabeller';
$strSend = 'Send (download)';
$strSent = 'Sendt';
$strServerChoice = 'Server valg';
$strServerNotResponding = 'Serveren svarer ikke';
$strServer = 'Server';
$strServers = 'Servere';
$strServerStatusDelayedInserts = 'Forsinkede inserts';
$strServerStatus = 'Runtime-information';
$strServerStatusUptime = 'Denne MySQL-server har k�rt i %s. Den startede op den %s.';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertrafik</b>: Disse tabeller viser netv�rkstrafik-statistikkerne for denne MySQL-server siden dens opstart.';
$strServerVars = 'Server-variabler og indstillinger';
$strServerVersion = 'Serverversion';
$strSessionStartupErrorGeneral = 'Kan ikke starte session uden fejl, tjek venligst fejl i din PHP og/eller webserver log fil og konfigurer din PHP installation ordentligt.';
$strSessionValue = 'Sessionsv�rdi';
$strSetEnumVal = 'Hvis et felt er af typen "enum" eller "set", skal v�rdierne angives p� formen: \'a\',\'b\',\'c\'...<br />Skulle du f� brug for en backslash ("\") eller et enkelt anf�rselstegn ("\'") blandt disse v�rdier, s� tilf�j en ekstra backslash (fx \'\\\\xyz\' eller \'a\\\'b\').';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farve';
$strShowDatadictAs = 'Data Dictionary-format';
$strShowFullQueries = 'Vis fuldst�ndige foresp�rgsler';
$strShowGrid = 'Vis gitter';
$strShowHideLeftMenu = 'Vis/skjul venstre menu';
$strShowingBookmark = 'Viser bogm�rke';
$strShowingPhp = 'Viser som PHP-kode';
$strShowingRecords = 'Viser poster ';
$strShowingSQL = 'Viser SQL-foresp�rgsel';
$strShowOpenTables = 'Vis �bne tabeller';
$strShowPHPInfo = 'Vis PHP-information';
$strShow = 'Vis';
$strShowSlaveHosts = 'Vis slavev�rter';
$strShowSlaveStatus = 'Vis slavestatus';
$strShowStatusBinlog_cache_disk_useDescr = 'Antal transaktioner der brugte det midlertidige bin�re log mellemlager, men overskred v�rdien for binlog_cache_size og brugte en midlertidig fil til at gemme statements fra transaktionen.';
$strShowStatusBinlog_cache_useDescr = 'Antal transaktioner der brugte det midlertidige bin�re log mellemlager.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Antal midlertidige tabeller p� disken oprettet automatisk af serveren under udf�relse af statements. Hvis Created_tmp_disk_tables er stor, skal du overveje at for�ge tmp_table_size v�rdien for at g�re midlertidige tabeller hukommelses-baserede i stedet for disk-baserede.';
$strShowStatusCreated_tmp_filesDescr = 'Hvor mange midlertidige filer mysqld har oprettet.';
$strShowStatusCreated_tmp_tablesDescr = 'Antal i-hukommelsen midlertidige tabeller oprettet automatisk af serveren under udf�relse af statements.';
$strShowStatusDelayed_errorsDescr = 'Antal r�kker skrevet med INSERT DELAYED (forsinket inds�ttelse) under hvilke der opstod fejl (sandsynligvis dublerede n�gler).';
$strShowStatusDelayed_insert_threadsDescr = 'Antallet af INSERT DELAYED handler-tr�de i brug. Hver forskellig tabel hvorp� en bruger INSERT DELAYED f�r sin egen tr�d.';
$strShowStatusDelayed_writesDescr = 'Antallet af INSERT DELAYED r�kker skrevet.';
$strShowStatusFlush_commandsDescr = 'Antallet af udf�rte FLUSH statements.';
$strShowStatusHandler_commitDescr = 'Antallet af interne COMMIT statements.';
$strShowStatusHandler_deleteDescr = 'Antallet af gange en r�kke blev slettet fra en tabel.';
$strShowStatusHandler_discoverDescr = 'MySQL serveren kan sp�rge en NDB Cluster storage engine om den kender til en tabel med et givent navn. Dette kaldes opdagelse. Handler_discover indikerer antallet af gange tabeller er blevet opdaget.';
$strShowStatusHandler_read_firstDescr = 'Antallet af gange f�rste indl�g blev l�st fra et indeks. Hvis denne er h�j, antyder det at serveren laver mange fulde indeks scans; for eksempel, SELECT col1 FROM foo, antagende at col1 er indekseret.';
$strShowStatusHandler_read_keyDescr = 'Antallet af anmodninger om at l�se en r�kke baseret p� en n�gle. Hvis denne er h�j, er det en god indikation af at dine foresp�rgsler og tabeller er ordentligt indekserede.';
$strShowStatusHandler_read_nextDescr = 'Antallet af anmodninger om at l�se n�ste r�kke i n�gleorden. Denne for�ges hvis du foresp�rger p� en indekskolonne med en range-begr�nsning eller hvis du udf�rer et indeks scan.';
$strShowStatusHandler_read_prevDescr = 'Antallet af anmodninger om at l�se foreg�ende r�kke i n�gleorden. Denne l�semetode bruges hovedsageligt til at optimere ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Antallet af anmodninger om at l�se en r�kke baseret p� en fast position. Denne er h�j hvis du laver mange foresp�rgsler der kr�ver sortering af resultatet. Du har sandsynligvis mange foresp�rgsler der forlanger at MySQL scanner hele tabeller eller du har joins der ikke bruger n�gler ordentligt.';
$strShowStatusHandler_read_rnd_nextDescr = 'Antallet af anmodninger om l�sning af n�ste r�kke i datafilen. Denne er h�j hvis du laver mange tabelscanninger. Generelt antyder dette at dine tabeller enten ikke er ordentligt indekserede eller at dine foresp�rgsler ikke er skrevet til at drage fordel af de indeks du har.';
$strShowStatusHandler_rollbackDescr = 'Antallet af interne ROLLBACK statements.';
$strShowStatusHandler_updateDescr = 'Antallet af anmodninger om at opdatere en r�kke i en tabel.';
$strShowStatusHandler_writeDescr = 'Antallet af anmodninger om at inds�tte en r�kke i en tabel.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Antallet af sider der indeholder data (beskidte eller rene).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Antallet af s�kaldt beskidte sider.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Antallet af buffer pool sider der er anmodet om at skulle flushes.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Antallet af frie sider.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Antallet af eksklusivt l�ste (latched) sider i InnoDB buffer pool. Dette er sider der i �jeblikket l�ses eller skrives eller som ikke kan flushes eller fjernes af andre �rsager.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Antallet af travle sider fordi de er blevet allokeret til administrativ overhead s� som r�kkel�se eller det adaptive hash indeks. Denne v�rdi kan ogs� beregnes som  Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total st�rrelse p� buffer pool, i sider.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Antallet af "tilf�ldige" read-aheads InnoDB initierede. Dette sker n�r en foresp�rgsel skal scanne en st�rre del af en tabel men i tilf�ldig r�kkef�lge.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Antallet af sekventielle read-aheads InnoDB initierede. Dette sker n�r InnoDB laver en sekventiel fuld tabelscanning.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Antallet af logiske read anmodninger InnoDB har lavet.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Antallet af logiske reads som InnoDB ikke kunne tilfredsstille fra buffer pool og m�tte lave en enkelt-side read.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalt sker skrivninger til InnoDB buffer poolen i baggrunden. Men, hvis der er brug for at l�se eller oprette en side og der ikke er nogen rene sider tilg�ngelige, er det n�dvendigt at vente p� at der bliver flushet sider f�rst. Denne t�ller t�ller hvor mange gange det er sket. Hvis buffer pool st�rrelsen er sat ordentligt, skulle denne v�rdi v�re lille.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Antallet af skrivninger til InnoDB buffer poolen.';
$strShowStatusInnodb_data_fsyncsDescr = 'Antallet af fsync() operationer indtil nu.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Nuv�rende antal ventende fsync() operationer.';
$strShowStatusInnodb_data_pending_readsDescr = 'Nuv�rende antal af ventende reads.';
$strShowStatusInnodb_data_pending_writesDescr = 'Nuv�rende antal af ventende writes.';
$strShowStatusInnodb_data_readDescr = 'M�ngden af data l�st indtil nu, i bytes.';
$strShowStatusInnodb_data_readsDescr = 'Det totale antal af data reads.';
$strShowStatusInnodb_data_writesDescr = 'Det totale antal af data writes.';
$strShowStatusInnodb_data_writtenDescr = 'M�ngden af data skrevet indtil nu, i bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Antallet af doublewrite skrivninger der er udf�rt og antallet af sider der er blevet skrevet til dette form�l.';
$strShowStatusInnodb_dblwr_writesDescr = 'Antallet af doublewrite skrivninger der er udf�rt og antallet af sider der er blevet skrevet til dette form�l.';
$strShowStatusInnodb_log_waitsDescr = 'Antallet af waits vi har haft fordi log buffer var for lille og vi skulle vente p� at den blev flushed f�r vi kunne forts�tte.';
$strShowStatusInnodb_log_write_requestsDescr = 'Antallet af log write anmodninger.';
$strShowStatusInnodb_log_writesDescr = 'Antallet af fysiske skrivninger til log filen.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Antallet af fsyncs skrivninger lavet til log filen.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Antallet af ventende log fil fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Ventende log fil skrivninger.';
$strShowStatusInnodb_os_log_writtenDescr = 'Antallet af bytes skrevet til log filen.';
$strShowStatusInnodb_pages_createdDescr = 'Antallet af sider oprettet.';
$strShowStatusInnodb_page_sizeDescr = 'Den indkompilerede InnoDB sidest�rrelse (standard 16KB). Mange v�rdier t�lles i sider; sidest�rrelsen g�r at man let kan omregne dem til bytes.';
$strShowStatusInnodb_pages_readDescr = 'Antallet af sider l�st.';
$strShowStatusInnodb_pages_writtenDescr = 'Antallet af sider skrevet.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Antallet af r�kkel�se der ventes p� i �jeblikket.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Gennemsnitstiden for at f� en r�kkel�s, i millisekunder.';
$strShowStatusInnodb_row_lock_timeDescr = 'Total tid brugt p� at hente r�kkel�se, i millisekunder.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksimale tid for at hente en r�kkel�s, i millisekunder.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Antallet af gange der skulle ventes p� en r�kkel�s.';
$strShowStatusInnodb_rows_deletedDescr = 'Antallet af r�kker slettet fra InnoDB tabeller.';
$strShowStatusInnodb_rows_insertedDescr = 'Antallet af r�kker indsat i InnoDB tabeller.';
$strShowStatusInnodb_rows_readDescr = 'Antallet af r�kker l�st fra InnoDB tables.';
$strShowStatusInnodb_rows_updatedDescr = 'Antallet af r�kker opdateret i InnoDB tabeller.';
$strShowStatusKey_blocks_not_flushedDescr = 'Antallet af n�gleblokeringer i n�glemellemlageret der har �ndret sig men endnu ikke er blevet flushet til disk. Det hed tidligere Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Antallet af ubrugte blokke i n�glemellemlageret. Du kan bruge denne v�rdi til at fastsl� hvor meget af n�glemellemlagere der er i brug.';
$strShowStatusKey_blocks_usedDescr = 'Antallet af brugte blokke i n�glemellemlageret. Denne v�rdi er et h�jvande-m�rke der indikerer det maksimale antal blokke der p� noget tidspunkt har v�ret i brug p� en gang.';
$strShowStatusKey_read_requestsDescr = 'Antallet af anmodninger om at l�se en n�gleblok fra mellemlageret.';
$strShowStatusKey_readsDescr = 'Antallet af fysiske l�sninger af en n�gleblok fra disk. Hvis Key_reads er stor, er din key_buffer_size v�rdi sandsynligvis for lille. Mellemlager miss raten kan beregnes som  Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Antallet af anmodninger om at skrive en n�gleblok til mellemlageret.';
$strShowStatusKey_writesDescr = 'Antallet af fysiske skrivninger af en n�gleblok til disk.';
$strShowStatusLast_query_costDescr = 'Totale omkostninger for den seneste kompilerede foresp�rgsel som beregnet af foresp�rgsels-optimeringsrutinen. Brugbart til at sammenligne omkostninger p� forskellige foresp�rgselsplaner for den samme foresp�rgsel. En standardv�rdi p� 0 betyder at der ikke er kompileret nogen foresp�rgsler endnu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Antallet af r�kker der venter p� at blive skrevet i INSERT DELAYED k�er.';
$strShowStatusOpened_tablesDescr = 'Antallet af tabeller der er blevet �bnet. Hvis �bnede tabeller er stor, er dit tabelmellemlager sandsynligvis for lille.';
$strShowStatusOpen_filesDescr = 'Antallet af filer der er �bne.';
$strShowStatusOpen_streamsDescr = 'Antallet af streams der er �bne (bruges hovedsageligt til logning).';
$strShowStatusOpen_tablesDescr = 'Antallet af tabeller der er �bne.';
$strShowStatusQcache_free_blocksDescr = 'Antallet af frie hukommelsesblokke i foresp�rgsels-mellemlageret.';
$strShowStatusQcache_free_memoryDescr = 'M�ngden af fri hukommelse til foresp�rgselsmellemlageret.';
$strShowStatusQcache_hitsDescr = 'Antallet af mellemlager hits.';
$strShowStatusQcache_insertsDescr = 'Antallet af foresp�rgsler tilf�jet til mellemlageret.';
$strShowStatusQcache_lowmem_prunesDescr = 'Antallet af foresp�rgsler der er blevet fjernet fra mellemlageret for at rydde hukommelse til mellemlagring af nye foresp�rgsler. Denne information kan hj�lpe dig med at tune foresp�rgselsmellemlagerets st�rrelse. Foresp�rgselsmellemlageret bruger en mindst nyligt brugt (LRU) strategi til at afg�re hvilke foresp�rgsler der skal fjernes fra mellemlageret.';
$strShowStatusQcache_not_cachedDescr = 'Antallet af ikke-mellemlagrede foresp�rgsler (ikke mulige at mellemlagre eller ikke mellemlagret grundet query_cache_type indstillingen).';
$strShowStatusQcache_queries_in_cacheDescr = 'Antallet af foresp�rgsler registreret i mellemlageret.';
$strShowStatusQcache_total_blocksDescr = 'Totalt antal blokke i foresp�rgsels-mellemlageret.';
$strShowStatusReset = 'Nulstil';
$strShowStatusRpl_statusDescr = 'Status p� failsafe replikering (endnu ikke implementeret).';
$strShowStatusSelect_full_joinDescr = 'Antallet af joins der ikke bruger indeks. Hvis denne v�rdi ikke er 0, b�r du n�je tjekke indeksene p� dine tabeller.';
$strShowStatusSelect_full_range_joinDescr = 'Antallet af joins der brugte en range s�gning p� en reference tabel.';
$strShowStatusSelect_range_checkDescr = 'Antallet af joins uden n�gler der tjekker for n�glebrug efter hver r�kke. (Hvis denne ikke er 0, b�r du n�je tjekke indeks p� dine tabeller.)';
$strShowStatusSelect_rangeDescr = 'Antallet af joins der brugte ranges p� den f�rste tabel. (Normalt ikke kritisk selvom tallet er stort.)';
$strShowStatusSelect_scanDescr = 'Antallet af joins som lavede en fuld scan af den f�rste tabel.';
$strShowStatusSlave_open_temp_tablesDescr = 'Antallet af midlertidige tabeller i �jeblikket �bne af SQL tr�den.';
$strShowStatusSlave_retried_transactionsDescr = 'Totalt (siden opstart) antal gange replikeringsslave SQL tr�den har gen-fors�gt transaktioner.';
$strShowStatusSlave_runningDescr = 'Dette er TIL hvis denne server er en slave der er forbundet til en master.';
$strShowStatusSlow_launch_threadsDescr = 'Antallet af tr�de der har taget mere end slow_launch_time sekunder at oprette.';
$strShowStatusSlow_queriesDescr = 'Antallet af foresp�rgsler der har taget mere end long_query_time sekunder.';
$strShowStatusSort_merge_passesDescr = 'Antallet af sammenl�gningsk�rsler sorteringsalgoritmen skulle lave. Hvis denne v�rdi er h�j, b�r du overveje at for�ge v�rdien af  sort_buffer_size systemvariablen.';
$strShowStatusSort_rangeDescr = 'Antallet af sorteringer lavet med ranges.';
$strShowStatusSort_rowsDescr = 'Antallet af sorterede r�kker.';
$strShowStatusSort_scanDescr = 'Antallet af sorteringer udf�rt ved scanning af tabellen.';
$strShowStatusTable_locks_immediateDescr = 'Antallet af gange en tabell�s blev givet �jeblikkeligt.';
$strShowStatusTable_locks_waitedDescr = 'Antallet af gange en tabell�s ikke kunne f�s �jeblikkeligt og en wait var n�dvendig. Hvis denne er h�j, og du har ydelsesproblemer, b�r du f�rst optimere dine foresp�rgsler, og derefter enten opdele din tabel eller tabeller, eller bruge replikering.';
$strShowStatusThreads_cachedDescr = 'Antallet af tr�de i tr�d-mellemlageret. Mellemlager-hitraten kan udregnes som Threads_created/Forbindelser. Hvis denne v�rdi er r�d b�r du for�ge din thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Antallet af i �jeblikket �bne forbindelser.';
$strShowStatusThreads_createdDescr = 'Antallet af tr�de oprettet til at h�ndtere forbindelser. Hvis Threads_created er stor, kan du v�lge at for�ge thread_cache_size v�rdien. (Normalt giver dette ingen n�vnev�rdig ydelsesforbedring hvis du har god tr�d-implementering.)';
$strShowStatusThreads_runningDescr = 'Antallet af tr�de der ikke sover.';
$strShowTableDimension = 'Vis tabellernes dimensioner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis foresp�rgslen her igen ';
$strSimplifiedChinese = 'Simplificeret Kinesisk';
$strSingly = '(enkeltvis)';
$strSize = 'St�rrelse';
$strSkipQueries = 'Antal poster (queries) der skal springes over fra start';
$strSlovak = 'Slovakisk';
$strSlovenian = 'Slovensk';
$strSmallBigAll = 'Sm�/store alle';
$strSnapToGrid = 'Snap til gitter';
$strSocketProblem = '(eller den lokale MySQL servers socket er ikke korrekt konfigureret)';
$strSortByKey = 'Sorteringsn�gle';
$strSorting = 'Sortering';
$strSort = 'Sorter';
$strSpaceUsage = 'Pladsforbrug';
$strSpanish = 'Spansk';
$strSplitWordsWithSpace = 'Ord adskilles af mellemrums-karakter (" ").';
$strSQLCompatibility = 'SQL-kompatibilitetsmodus';
$strSQLExportType = 'Eksporttype';
$strSQLParserBugMessage = 'Det er muligt at du har fundet en fejl i SQL-parseren. Unders�g venligst din foresp�rgsel n�je, og check at anf�rselstegn er rigtige og ikke giver konflikter. Andre fejl�rsager kan v�re at du uploader en fil med bin�r udenfor et lukket tekstomr�de. Du kan ogs� pr�ve din foresp�rgsel i MySQL kommandolinje-interfacet. MySQL-serverens fejlmelding der f�lger herunder, hvis der er nogen, kan ogs� hj�lpe dig med at finde problemet. Hvis du stadig har probemer eller hvis parseren fejler hvor kommandolinjeinterfacet lykkes, reducer din SQL-foresp�rgselsinput til den ene foresp�rgsel der for�rsager problemet, og indsend en fejlrapport med datablokken i KLIP-sektionen herunder:';
$strSQLParserUserError = 'Der ser ud til at v�re en fejl i din SQL-foresp�rgsel. MySQL-serverens fejlmelding der f�lger herunder, hvis der er nogen, kan ogs� hj�lpe dig med at finde problemet.';
$strSQLQuery = 'SQL-foresp�rgsel';
$strSQLResult = 'SQL-resultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Ikke-lukket quote';
$strSQPBugUnknownPunctuation = 'Ukendt tegns�tnings-streng';
$strStandInStructureForView = 'Stand-in-struktur for visning';
$strStatCheckTime = 'Sidste check';
$strStatCreateTime = 'Oprettelse';
$strStatement = 'Erkl�ringer';
$strStatisticsOverrun = 'P� en travl server er der risiko for at bytet�llerne l�ber over, s� disse statistikker som rapporteret af MySQL-serveren kan v�re forkerte.';
$strStatUpdateTime = 'Sidste opdatering';
$strStatus = 'Status';
$strStorageEngine = 'Datalager';
$strStorageEngines = 'Datalagre';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucExcelCSV = 'CSV til MS Excel-data';
$strStrucNativeExcel = 'F�dte MS Excel-data';
$strStrucOnly = 'Kun strukturen';
$strStructPropose = 'Foresl� tabelstruktur';
$strStructureForView = 'Struktur for visning';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Din SQL-foresp�rgsel blev udf�rt korrekt';
$strSum = 'Sum';
$strSwedish = 'Svensk';
$strSwitchToDatabase = 'Skift til den kopierede database';
$strSwitchToTable = 'Skift til den kopierede tabel';

$strTableAlreadyExists = 'Table %s already exists!';
$strTableComments = 'Tabel kommentarer';
$strTableEmpty = 'Intet tabelnavn!';
$strTableHasBeenDropped = 'Tabel %s er slettet';
$strTableHasBeenEmptied = 'Tabel %s er t�mt';
$strTableHasBeenFlushed = 'Tabel %s er blevet flushet';
$strTableIsEmpty = 'Tabel ser ud til at v�re tom';
$strTableMaintenance = 'Tabelvedligeholdelse';
$strTableName = 'Tabelnavn';
$strTableOfContents = 'Indholdsfortegnelse';
$strTableOptions = 'Tabel-indstillinger';
$strTables = '%s tabel(ler)';
$strTableStructure = 'Struktur-dump for tabellen';
$strTable = 'Tabel';
$strTakeIt = 'V�lg dette';
$strTblPrivileges = 'Tabel-specifikke privilegier';
$strTempData = 'Midlertidige data';
$strTextAreaLength = ' P� grund af feltets l�ngde,<br /> kan det muligvis ikke �ndres ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Standardtema %s ikke fundet!';
$strThemeNoPreviewAvailable = 'Intet billede til r�dighed.';
$strThemeNotFound = 'Tema %s ikke fundet!';
$strThemeNoValidImgPath = 'Ingen gyldig billedsti for tema %s fundet!';
$strThemePathNotFound = 'Sti til tema ikke fundet for tema %s!';
$strTheme = 'Tema / Layout';
$strThisHost = 'Denne Host';
$strThreads = 'Tr�de';
$strThreadSuccessfullyKilled = 'Tr�d %s blev stoppet.';
$strTimeoutInfo = 'Foreg�ende import timede ud, efter genindsendelse vil forts�tte fra position %d.';
$strTimeoutNothingParsed = 'Desv�rre blev der ikke parset nogen data ved sidste k�rsel, dette betyder normalt at phpMyAdmin ikke vil v�re i stand til at gennemf�re importen med mindre du for�ger PHP-tidsbegr�nsningerne.';
$strTimeoutPassed = 'Script timeout n�et, hvis du vil afslutte importen, indsend venligst samme fil igen og importen vil forts�tte hvor den slap.';
$strTime = 'Tid';
$strToFromPage = 'til/fra side';
$strToggleScratchboard = 'tegnebr�t til/fra';
$strToggleSmallBig = 'Skift mellem sm�/store';
$strToSelectRelation = 'For at v�lge relation, klik :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Traditionelt Kinesisk';
$strTraditionalSpanish = 'Traditionelt Spansk';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'Transaktionskoordinator';
$strTransformation_application_octetstream__download = 'Viser et link til at downloade et felts bin�re data. F�rste indstilling er filnavnet p� den bin�re fil. Anden indstilling er et muligt feltnavn fra en tabelr�kke indeholdende filnavnet. Hvis du bruger anden indstilling, skal feltet i den f�rste indstilling v�re sat til en tom streng.';
$strTransformation_application_octetstream__hex = 'Viser hexadecimal udgave af data. Valgfrit f�rsteparameter angiver hvor meget plads der tilf�jes (standard er 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Viser et klikbart minibillede; indstillinger: bredde,h�jde i pixel. Det originale perspektiv bevares.';
$strTransformation_image_jpeg__link = 'Viser et link til dette billede (f.eks. direkte blob-download).';
$strTransformation_image_png__inline = 'Se under image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Viser et TIME, TIMESTAMP, DATETIME eller numerisk unix tidsstempel-felt som formatteret dato. Den f�rste indstilling er offset (i timer) som vil blive lagt til tidsstemplet (Standard: 0). Brug anden indstilling til at angive en anderledes dato-/tidsformatstreng. Tredje indstilling fasts�tter om du vil se lokal dato eller UTC (brug "local" eller "utc" strenge) til dette. Ud fra dette har datoformatet forskellig v�rdi - for "local" se dokumentationen for PHP\'s strftime() funktion og for "utc" sker det ved brug af gmdate() funktionen.';
$strTransformation_text_plain__external = 'KUN LINUX: Starter en ekstern applikation og f�der feltdata via standard input. Returnerer standardoutputtet for applikationen. Standard er Tidy, for korrekt udskrivning af HTML-kode. Af sikkerheds�rsager er du n�dt til manuelt at redigere filen libraries/transformations/text_plain__external.inc.php og inds�tte de v�rkt�jer du vil tillade k�rsel af. F�rste indstilling er s� nummeret p� det program du vil bruge og den anden indstilling er parametrene for dette program. Tredie parameter vil, hvis sat til 1, konvertere outputtet vha. htmlspecialchars() (Standard er 1). Et fjerde parameter vil, hvis sat til 1, s�tte et NOWRAP om cellens indhold s� hele outputtet bliver vist uden omformattering (Standard 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formattering af feltet. Der laves ikke nogen Escaping.';
$strTransformation_text_plain__imagelink = 'Viser et billede og et link, feltet indeholder filnavnet; f�rste indstilling er et pr�fiks som "http://domain.com/", anden indstilling er bredde i pixel, tredie er h�jden.';
$strTransformation_text_plain__link = 'Viser et link, feltet indeholder filnavnet; f�rste indstilling er et pr�fiks som "http://domain.com/", anden indstilling er en titel p� linket.';
$strTransformation_text_plain__sql = 'Formatterer tekst som SQL-foresp�rgsel med syntaks farvemarkering.';
$strTransformation_text_plain__substr = 'Viser en del af en streng. F�rste parameter er antal tegn der skal springes over fra begyndelsen af en streng (Standard 0). Andet parameter er antal tegn der returneres (Standard indtil enden af strengen). Det tredie parameter definerer hvilke tegn der skal f�jes til foran eller efter outputtet n�r en substring (understreng) returneres (Standard: "...") .';
$strTruncateQueries = 'Trunk�r viste foresp�rgsler';
$strTurkish = 'Tyrkisk';
$strType = 'Datatype';

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Fjern alle m�rker';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ukendt';
$strUnselectAll = 'Frav�lg alle';
$strUnsupportedCompressionDetected = 'Du fors�gte at indl�se en fil med u-underst�ttet komprimering (%s). Underst�ttelse af denne funktion er ikke implementeret eller ikke sl�et til for din konfiguration.';
$strUpdatePrivMessage = 'Du har opdateret privilegierne for %s.';
$strUpdateProfileMessage = 'Profilen er blevet opdateret.';
$strUpdateQuery = 'Opdater foresp�rgsel';
$strUpdComTab = 'Se venligst Dokumentationen for oplysninger om hvordan du opdaterer din Column_comments (kolonne-kommentarer) tabel';
$strUpgrade = 'Du burde opdatere til %s %s eller senere.';
$strUploadErrorCantWrite = 'Kunne ikke skrive fil til disk.';
$strUploadErrorExtension = 'Filupload stoppet af udvidelse.';
$strUploadErrorFormSize = 'Den uploadede fil overstiger MAX_FILE_SIZE direktivet som angivet i HTML-formularen.';
$strUploadErrorIniSize = 'Den uploadede fil overstiger upload_max_filesize direktivet i php.ini.';
$strUploadErrorNoTempDir = 'Mangler en midlertidig mappe.';
$strUploadErrorPartial = 'Den uploadede fil blev kun delvist uploaded.';
$strUploadErrorUnknown = 'Ukendt fejl i filupload.';
$strUploadLimit = 'Du har sandsynligvis fors�gt at uploade en for stor fil. Se venligst %sdokumentationen%s for m�der hvorp� du kan arbejde dig uden om denne begr�nsning.';
$strUploadsNotAllowed = 'Fil-uploads er ikke tilladte p� denne server.';
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
$strUseTabKey = 'Brug TAB-tasten for at flytte dig fra v�rdi til v�rdi, eller CTRL+piletasterne til at flytte frit omkring';
$strUseTables = 'Benyt tabeller';
$strUseTextField = 'Brug tekstfelt';
$strUseThisValue = 'Brug denne v�rdi';

$strValidateSQL = 'Valid�r SQL';
$strValidatorError = 'SQL-validatoren kunne ikke initialiseres. Check venligst at du har de n�dvendige PHP-udvidelser installeret som beskrevet i %sdokumentationen%s.';
$strValue = 'V�rdi';
$strVar = 'Variabel';
$strVersionInformation = 'Versionsinformation';
$strViewDumpDatabases = 'Vis dump (skema) for databaser';
$strViewDumpDB = 'Vis dump (skema) af database';
$strViewDump = 'Vis dump (skema) over tabel';
$strViewHasBeenDropped = 'Visning %s er blevet droppet';
$strViewMaxExactCount = 'Denne visning har mere end %d r�kker. Se venligst %sdokumentationen%s.';
$strViewName = 'VIEW navn';
$strView = 'Visning';

$strWebServerUploadDirectoryError = 'Mappen du har sat til upload-arbejde kan ikke findes';
$strWebServerUploadDirectory = 'webserver upload-mappe';
$strWelcome = 'Velkommen til %s';
$strWestEuropean = 'Vesteurop�isk';
$strWildcard = 'jokertegn';
$strWindowNotFound = 'Det angivne browservindue kunne ikke opdateres. M�ske har du lukket det overliggende vindue eller din browser blokerer for tv�r-vindue opdateringer i sikkerhedsindstillingerne';
$strWithChecked = 'Med det markerede:';
$strWriteRequests = 'Write-anmodninger';
$strWrongUser = 'Forkert brugernavn/kodeord. Adgang n�gtet.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Bem�rk: Indstilling af disse v�rdier til 0 (nul) fjerner begr�nsningen.';
$strZip = '"zippet"';

$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strTriggers = 'Triggers';  //to translate
$strEvent = 'Event';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
