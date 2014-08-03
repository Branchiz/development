<?php
/* $Id: norwegian-utf-8.inc.php 11508 2008-08-26 16:33:00Z lem9 $ */

/**
 * Translated by Sven-Erik Andersen <sven DOT erik DOT andersen AT gmail DOT com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';
$timespanfmt = '%s dager, %s timer, %s minutter og %s sekunder';

$strAbortedClients = 'Avbrutt';
$strAccessDenied = 'Ingen tilgang';
$strAccessDeniedCreateConfig = 'En mulig årsak for dette er at du ikke opprettet konfigurasjonsfila. Du bør kanskje bruke %1$ssetup script%2$s for å opprette en.';
$strAccessDeniedExplanation = 'phpMyAdmin forsøkte å koble til MySQL-serveren, og serveren avviste tilkoblingen. Du må kontrollere vert (host), brukernavn (username) og passord (password) i config.inc.php og sjekke at de tilsvarer den informasjonen du fikk fra MySQL-server administratoren.';
$strAction = 'Handling';
$strAddAutoIncrement = 'Legg til AUTO_INCREMENT verdi';
$strAddClause = 'Legg til %s';
$strAddConstraints = 'Legg til begrensninger';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterierad';
$strAddFields = 'Legg til %s felt(er)';
$strAddHeaderComment = 'Legg til egen kommentar i hodet (\\n lager linjeskift)';
$strAddIntoComments = 'Legg til i kommentarer';
$strAddNewField = 'Legg til felt';
$strAddPrivilegesOnDb = 'Legg til privilegier til følgende database';
$strAddPrivilegesOnTbl = 'Legg til privilegier til følgende tabell';
$strAddSearchConditions = 'Legg til søkekriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks&nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAdministration = 'Administrasjon';
$strAffectedRows = 'Berørte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAfterInsertNext = 'Rediger neste rad';
$strAfterInsertSame = 'Tilbake til denne siden';
$strAll = 'Alle';
$strAllowInterrupt = 'Tillat avbrudd av importering i tilfelle skriptet oppdager at det er rett før det når tidsavbrudd. Dette kan være en god måte å importere store filer på, men det kan knekke transaksjoner.';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabellrekkefølge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'og';
$strAndThen = 'og så';
$strAngularLinks = 'Vinklede linker';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyHost = 'Alle verter';
$strAnyUser = 'Alle brukere';
$strApproximateCount = 'Kan være unøyaktig. Se FAQ 3.11';
$strAPrimaryKey = 'En primærnøkkel har blitt lagt til %s';
$strArabic = 'arabisk';
$strArmenian = 'armensk';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';
$strAutomaticLayout = 'Automatisk disposisjon';

$strBack = 'Tilbake';
$strBaltic = 'baltisk';
$strBeginCut = 'START KUTT';
$strBeginRaw = 'START UFORMATERT';
$strBinary = ' Binær ';
$strBinaryDoNotEdit = ' Binær - må ikke redigeres ';
$strBinaryLog = 'Binærlogg';
$strBinLogEventType = 'Hendelsestype';
$strBinLogInfo = 'Informasjon';
$strBinLogName = 'Loggnavn';
$strBinLogOriginalPosition = 'Original posisjon';
$strBinLogPosition = 'Posisjon';
$strBinLogServerId = 'Tjener ID';
$strBookmarkAllUsers = 'La alle brukere ha adgang til dette bokmerket';
$strBookmarkCreated = 'Bokmerke %s opprettet';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-spørring';
$strBookmarkReplace = 'Erstatt eksisterende bokmerke med samme navn';
$strBookmarkThis = 'Lagre denne SQL-spørringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se på';
$strBrowseDistinctValues = 'Se gjennom distinkte verdier';
$strBrowseForeignValues = 'Se de eksterne verdiene';
$strBufferPool = 'Mellomlager';
$strBufferPoolActivity = 'Mellomlageraktivitet';
$strBufferPoolUsage = 'Mellomlagerbruk';
$strBufferReadMisses = 'Lesebommer';
$strBufferReadMissesInPercent = 'Lesebommer i %';
$strBufferWriteWaits = 'Skriveforsinkelser';
$strBufferWriteWaitsInPercent = 'Skriveforsinkelser i %';
$strBulgarian = 'bulgarsk';
$strBusyPages = 'Opptatte sider';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpede data fordi Bz2 tillegget til denne php versjonen er ødelagt. Vi anbefaler på det sterkeste at du setter <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurasjonsfil til <code>FALSE</code>. Hvis du ønsker å bruke Bz2 komprimerings funksjonene, så bør du oppgradere til en nyere php versjon. Se php bug rapport %s for detaljer.';
$strBzip = 'Komprimert (bz2)';

$strCalendar = 'Kalender';
$strCancel = 'Avbryt';
$strCanNotLoadExportPlugins = 'Kunne ikke laste eksporttillegg, kontroller din innstallasjon!';
$strCanNotLoadImportPlugins = 'Kan ikke starte importeringsprogramtilleggene, kontroller din installasjon!';
$strCannotLogin = 'Kan ikke logge inn til MySQL tjeneren';
$strCantLoad = 'Kan ikke starte %s tillegget,<br />vennligst kontroller PHP-konfigurasjonen';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv- eller recode-modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller slå av tegnsettkonvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv eller recode_string funksjonene selv om modulene sier de er lastet. Sjekk din php-konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCaseInsensitive = 'uavhengig av bokstavstørrelse';
$strCaseSensitive = 'avhengig av bokstavstørrelse';
$strCentralEuropean = 'sentraleuropeisk';
$strChange = 'Endre';
$strChangeCopyMode = 'Opprett ny bruker med de samme privilegier og ...';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slett den gamle fra brukertabellene og deretter oppfrisk privilegiene.';
$strChangeCopyModeJustDelete = ' ... slett den gamle fra brukertabellene.';
$strChangeCopyModeRevoke = ' ... tilbakekall alle aktive privilegier fra den gamle og slett den etterpå.';
$strChangeCopyUser = 'Endre innloggingsinformasjon / kopiere bruker';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCharset = 'Tegnsett';
$strCharsetOfFile = 'Filens tegnsett:';
$strCharsets = 'Tegnsett';
$strCharsetsAndCollations = 'Tegnsett og sammenligninger';
$strCheckAll = 'Merk alle';
$strCheckOverhead = 'Kontroller overheng';
$strCheckPrivs = 'Kontroller privilegier';
$strCheckPrivsLong = 'Kontroller privilegier for databasen &quot;%s&quot;.';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColComFeat = 'Vis kolonnekommentarer';
$strCollation = 'Sammenligning';
$strColumnNames = 'Kolonnenavn';
$strColumnPrivileges = 'Kolonne-spesifikke privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCommentsForTable = 'TABELLKOMMENTARER';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibel';
$strCompleteInserts = 'Komplette innlegg';
$strCompression = 'Kompresjon';
$strCompressionWillBeDetected = 'Komprimering av importerte filer vil bli automatisk oppdaget fra: %s';
$strConfigDefaultFileError = 'Kunne ikke laste standard konfigurasjonsfil fra: "%1$s"';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil få. I de fleste tilfeller så mangler det et anførselstegn eller et semikolon et sted.<br />Hvis du får en blank side så er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConnectionError = 'Kan ikke koble til: ugyldige innstillinger.';
$strConnections = 'tilkoblinger';
$strConstraintsForDumped = 'Begrensninger for dumpede tabeller';
$strConstraintsForTable = 'Begrensninger for tabell';
$strControluserFailed = 'Tilkoblingen for kontrollbrukeren som definert i din konfigurasjon feilet.';
$strCookiesRequired = 'Cookies må være slått på forbi dette punkt.';
$strCopy = 'Kopier';
$strCopyDatabaseOK = 'Databasen %s har blitt kopiert til %s';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til samme navn!';
$strCouldNotKill = 'phpMyAdmin kunne ikke avslutte tråd %s. Den er sansynligvis alt avsluttet.';
$strCreate = 'Opprett';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE før kopiering';
$strCreateIndex = 'Lag en indeks på&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCreatePdfFeat = 'Lag PDF-dokumenter';
$strCreateRelation = 'Opprett relasjon';
$strCreateTable  = 'Opprett tabell';
$strCreateUserDatabase = 'Brukerdatabase';
$strCreateUserDatabaseName = 'Opprett database med samme navn og gi alle rettigheter';
$strCreateUserDatabaseNone = 'Ingen';
$strCreateUserDatabaseWildcard = 'Gi alle rettigheter på jokertegnavn (username\_%)';
$strCreationDates = 'Opprettelse/Oppdaterings/Kontrolldato';
$strCriteria = 'Kriterier';
$strCroatian = 'kroatisk';
$strCSV = 'CSV';
$strCyrillic = 'kyrillisk';
$strCzech = 'tjekkisk';
$strCzechSlovak = 'Tjekkoslovakisk';

$strDanish = 'dansk';
$strData = 'Data';
$strDatabase = 'Database';
$strDatabaseEmpty = 'Databasen er uten navn!';
$strDatabaseExportOptions = 'Databaseeksportinnstillinger';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesDropped = '%s databasene har blitt slettet.';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabasesStatsDisable = 'Slå av statistikk';
$strDatabasesStatsEnable = 'Slå på statistikk';
$strDatabasesStatsHeavyTraffic = 'OBS: Når du slår på databasestatistikk så kan det medføre stor traffik mellom webtjeneren og MySQL-tjeneren.';
$strDataDict = 'Dataordbok';
$strDataOnly = 'Bare data';
$strDataPages = 'Sider som inneholder data';
$strDBComment = 'Database kommentar: ';
$strDBCopy = 'Kopier databasen til';
$strDbIsEmpty = 'Databasen ser ut til å være tom!';
$strDbPrivileges = 'Databasespesifikke privilegier';
$strDBRename = 'Endre databasens navn til';
$strDbSpecific = 'databasespesifikk';
$strDefault = 'Standard';
$strDefaultEngine = '%s er standard lagringsmotor for denne MySQL tjeneren.';
$strDefaultValueHelp = 'Sett inn en enkelt verdi for standard verdier uten skråstrek, anførselstegn eller annen &quot;escaping&quot; med dette formatet: a';
$strDefragment = 'Defragmenter tabell';
$strDelayedInserts = 'Bruk forsinkede innsettinger';
$strDelete = 'Slett';
$strDeleteAndFlush = 'Slett brukeren og oppfrisk privilegiene etterpå.';
$strDeleteAndFlushDescr = 'Dette er den beste måten, men oppfrisking av privilegiene kan ta litt tid.';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteNoUsersSelected = 'Ingen brukere merket for sletting!';
$strDeleteRelation = 'Slett relasjon';
$strDeleting = 'Sletter %s';
$strDelimiter = 'Skilletegn';
$strDelOld = 'Den nåværende siden har referanser til tabeller som ikke lenger eksisterer. Vil du slette disse referansene?';
$strDescending = 'Synkende';
$strDescription = 'Beskrivelse';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Visningsfeltet er markert i rosa. For å slå på/av et felt som visningsfelt, klikk på "Velg felt for visning" ikonet, klikk så på det aktuelle feltnavnet.';
$strDictionary = 'ordbok';
$strDirectLinks = 'Direkte linker';
$strDirtyPages = 'Endrede sider';
$strDisabled = 'Avslått';
$strDisableForeignChecks = 'Slå av kontroll av fremmednøkler';
$strDisplayFeat = 'Vis egenskaper';
$strDisplayOrder = 'Visningsrekkefølge:';
$strDisplayPDF = 'Vis PDF-skjema';
$strDoAQuery = 'Utfør en "spørring ved eksempel" (jokertegn: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDatabaseStrongWarning = 'Du er i ferd med å SLETTE en komplett database!';
$strDropUsersDb = 'Slett databasene som har det samme navnet som brukerne.';
$strDumpingData = 'Dataark for tabell';
$strDumpSaved = 'Dump har blitt lagret til fila %s.';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF-sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'Tøm';
$strEmptyResultSet = 'MySQL returnerte ett tomt resultat (m.a.o. ingen rader).';
$strEnabled = 'Påslått';
$strEncloseInTransaction = 'Inneslutt eksport i en transaksjon';
$strEnd = 'Slutt';
$strEndCut = 'STOPP KUTT';
$strEndRaw = 'STOPP UFORMATERT';
$strEngineAvailable = '%s er tilgjengelig på denne MySQL theneren.';
$strEngineDisabled = '%s har blitt dekativert for denne MySQL tjeneren.';
$strEngines = 'Motorer';
$strEngineUnsupported = 'Denne MySQL tjeneren har ikke støtte for %s lagringsmotoren.';
$strEnglish = 'engelsk';
$strEnglishPrivileges = 'OBS: MySQL privilegiumnavn er på engelsk';
$strError = 'Feil';
$strErrorInZipFile = 'Feil i ZIP arkivet:';
$strErrorRelationAdded = 'Feil: Relasjon ikke opprettet.';
$strErrorRelationExists = 'Feil: relasjoner eksisterer allerede.';
$strErrorRenamingTable = 'Feil oppstond med endring av tabellnavn fra %1$s til %2$s';
$strErrorSaveTable = 'Feil oppstod under lagring av Designerkoordinater.';
$strEscapeWildcards = 'Jokertegnene _ og % må beskyttes med en \ for å bruke dem direkte';
$strEsperanto = 'Esperanto';
$strEstonian = 'estisk';
$strEvent = 'Hendelse';
$strExcelEdition = 'Excel-versjon';
$strExecuteBookmarked = 'Utfør lagret spørring';
$strExplain = 'Forklar SQL';
$strExport = 'Eksporter';
$strExportImportToScale = 'Eksporter/Importer til skala';
$strExportMustBeFile = 'Valgte eksporteringstype krever lagring til ei fil!';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Feilede forsøk';
$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFieldInsertFromFileTempDirNotExists = 'Feil oppstod under forsøk på flytting av den opplastede fila, se FAQ 1.11';
$strFields = 'Felter';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter beskyttet med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFileAlreadyExists = 'Fila %s eksisterer alt på serveren, endre navnet eller merk av for overskriving av fil.';
$strFileCouldNotBeRead = 'Fila kunne ikke leses';
$strFileNameTemplate = 'Filnavnsmal';
$strFileNameTemplateDescription = 'Denne verdien blir tolket slik som %1$sstrftime%2$s, så du kan bruke tidformateringsstrenger. I tillegg vil følgende transformasjoner skje: %3$s. All annen tekst beholdes som den er.';
$strFileNameTemplateDescriptionDatabase = 'databasenavn';
$strFileNameTemplateDescriptionServer = 'tjenernavn';
$strFileNameTemplateDescriptionTable = 'tabellnavn';
$strFileNameTemplateRemember = 'husk malen';
$strFiles = 'Filer';
$strFileToImport = 'Fil for importering';
$strFixed = 'statisk';
$strFlushPrivilegesNote = 'Merk: phpMyAdmin får brukerprivilegiene direkte fra MySQL privilegietabeller. Innholdet i disse tabellene kan være forskjellig fra de privilegiene tjeneren bruker hvis det er utført manuelle endringer på den. I så fall bør du %soppfriske privilegiene%s før du fortsetter.';
$strFlushQueryCache = 'Flush query cache';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFlushTables = 'Flush (close) all tables';
$strFontSize = 'Fontstørrelse';
$strForeignKeyError = 'Feil under opprettelse av fremmednøkkel (kontroller datatyper)';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFreePages = 'Ledige sider';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';
$strFunctions = 'Funsjoner';

$strGenBy = 'Generert av';
$strGeneralRelationFeat = 'Generelle relasjonsegenskaper';
$strGenerate = 'Generer';
$strGeneratePassword = 'Generer passord';
$strGenTime = 'Generert den';
$strGeorgian = 'Georgisk';
$strGerman = 'tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global verdi';
$strGo = 'Utfør';
$strGrantOption = 'Rettighet';
$strGreek = 'gresk';
$strGzip = 'Komprimert (gz)';

$strHandler = 'Handler';
$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du må velge minst en kolonne for visning';
$strHebrew = 'hebraisk';
$strHelp = 'Hjelp';
$strHexForBLOB = 'Bruk heksadesimal for BLOB';
$strHide         = 'Skjul';
$strHideShowAll = 'Skjul/Vis alle';
$strHideShowNoRelation = 'Skjul/Vis tabeller uten relasjoner';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin-hjemmeside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'ungarsk';

$strIcelandic = 'Islandsk';
$strId = 'ID';
$strIdxFulltext = 'Fulltekst';
$strIEUnsupported = 'Internet Explorer støtter ikke denne funksjonen.';
$strIgnore = 'Ignorer';
$strIgnoreDuplicates = 'Ignorer dupliserte rader';
$strIgnoreInserts = 'Bruk ignore inserts';
$strImport = 'Importer';
$strImportExportCoords = 'Importer/Eksporter koordinater for PDF skjema';
$strImportFiles = 'Importer filer';
$strImportFormat = 'Formatet til importert fil';
$strImportSuccessfullyFinished = 'Importen er fullført, %d spørringer utført.';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strIndexesSeemEqual = 'De følgende indeksene ser ut til å være lik og en av dem bør fjernes:';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strIndexWarningTable = 'Problemer med indeksene i tabellen `%s`';
$strInnoDBAutoextendIncrement = 'Autoforstørrende økning';
$strInnoDBAutoextendIncrementDesc = 'Økningen som brukes for å forstørre et autoforstørrende tabellager når den blir full.';
$strInnoDBBufferPoolSize = 'Mellomlagerstørrelse';
$strInnoDBBufferPoolSizeDesc = 'størrelsen på datalageret InnoDB bruker for å mellomlagre data og indekser for sine tabeller.';
$strInnoDBDataFilePath = 'Datafiler';
$strInnoDBDataHomeDir = 'Datalagringsmappe';
$strInnoDBDataHomeDirDesc = 'Felles del av filsti for alle InnoDB datafiler.';
$strInnoDBPages = 'sider';
$strInnoDBRelationAdded = 'InnoDB relasjon lagt til';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Din konfigurasjonsfil inneholder innstillinger (root uten passord) som korrensponderer med MySQLs standard priviligerte brukerkonto. Din MySQL-tjener kjører med denne standardinnstillingen, er åpen for misbruk, og du burde fikse dette sikkerhetshullet snarest.';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRowId = 'Satt inn rad id:';
$strInsertedRows = 'Innsatte rader:';
$strInternalNotNecessary = '* En intern relasjon er ikke nødvendig når den også eksisterer i InnoDB.';
$strInternalRelationAdded = 'Intern relasjon lagt til';
$strInternalRelations = 'Interne relasjoner';
$strInUse = 'i bruk';
$strInvalidAuthMethod = 'Ugyldig autentiseringsmetode satt opp i konfigureringen:';
$strInvalidColumn = 'Ugyldig kollonne (%s) angitt!';
$strInvalidColumnCount = 'Antall kolonner må være større enn null.';
$strInvalidCSVFieldCount = 'Ugyldig antall felt i CSV importen i linje %d.';
$strInvalidCSVFormat = 'Ugyldig format i CSV importen i linje %d.';
$strInvalidCSVParameter = 'Ugyldig parameter for CSV import: %s';
$strInvalidDatabase = 'Ugylding database';
$strInvalidFieldAddCount = 'Du må sette inn minst ett felt.';
$strInvalidFieldCount = 'Tabellen må ha minst ett felt.';
$strInvalidLDIImport = 'Dette tillegget støtter ikke komprimerte importeringer!';
$strInvalidRowNumber = '%d er ikke et gyldig radnummer.';
$strInvalidServerHostname = 'Ugyldig tjenernavn for tjener %1$s. Kontroller din konfigurasjon.';
$strInvalidServerIndex = 'Ugyldig tjenerindeks: "%s"';
$strInvalidTableName = 'Ugylding tabellnavn';

$strJapanese = 'japansk';
$strJoins = 'Sammenføyninger';
$strJumpToDB = 'Hopp til databasen &quot;%s&quot;.';
$strJustDelete = 'Bare slett brukerne fra privilegium tabellene.';
$strJustDeleteDescr = 'Den &quot;slettede&quot; brukeren vil fortsatt kunne bruke tjeneren som normalt inntill privilegiene er oppfrisket.';

$strKeepPass = 'Ikke endre passordet';
$strKeyCache = 'Nøkkelmellomlager';
$strKeyname = 'Nøkkel';
$strKill = 'Avslutt';
$strKnownExternalBug = 'Funksjonaliteten %s er påvirket av en kjent feil, se %s';
$strKorean = 'koreansk';

$strLandscape = 'Landskapsformat';
$strLanguage = 'Språk';
$strLanguageUnknown = 'Ukjent språk: %1$s.';
$strLatchedPages = 'Tilknyttede sider';
$strLaTeX = 'LaTeX';
$strLatexCaption = 'Tabelloverskrift';
$strLatexContent = 'Innhold i tabell __TABLE__';
$strLatexContinued = '(fortsettet)';
$strLatexContinuedCaption = 'Fortsettet tabelloverskrift';
$strLatexIncludeCaption = 'Inkluder tabelloverskrift';
$strLatexLabel = 'Merkelappnøkkel';
$strLatexStructure = 'Struktur i tabell __TABLE__';
$strLatvian = 'Latvisk';
$strLDI = 'CSV med LOAD DATA';
$strLDILocal = 'Bruk LOCAL nøkkelord';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLithuanian = 'lithauisk';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLoginInformation = 'Innlogingsinformasjon';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogServer = 'Tjener';
$strLogUsername = 'Brukernavn:';
$strLongOperation = 'Denne operasjonen kan ta lang tid. Ønsker du å fortsette?';

$strMaxConnects = 'maks. samtidige tilkoblinger';
$strMaximalQueryLength = 'Maksimum lengde av opprettet spørring';
$strMaximumSize = 'Maksimum størrelse: %s%s';
$strMbExtensionMissing = 'PHP tillegget mbstring ble ikke funnet og det ser ut til at du bruker et flerbyte tegnsett. Uten mbstring-tillegget så kan ikke phpMyAdmin splitte strenger korrekt og dette kan medføre uønskede resultater.';
$strMbOverloadWarning = 'Du har slått på mbstring.func_overload i din PHP konfigurasjon. Denne opsjonen er ikke kompatibel med phpMyAdmin og kan medføre skader på data!';
$strMIME_available_mime = 'Tilgjengelige MIME-typer';
$strMIME_available_transform = 'Tilgjengelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'Ingen beskrivelse er tilgjengelig for denne transformasjonen.<br />Spør forfatteren hva %s gjør.';
$strMIME_transformation = 'Nettvisertransformasjon';
$strMIME_transformation_note = 'For en liste over tilgjengelige transformasjonsvalg, klikk på %stransformasjonsbeskrivelser%s';
$strMIME_transformation_options = 'Transformasjonsvalg';
$strMIME_transformation_options_note = 'Skriv inn verdiene for transformasjon med dette formatet: \'a\', 100, b,\'c\'...<br />Hvis du trenger å bruke en skråstrek ("\") eller en enkel apostrof ("\'") blant disse verdiene så sett en skråstrek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_without = 'MIME-typer skrevet i kursiv har ikke en separat transformasjonsfunksjon';
$strMIMETypesForTable = 'MIME TYPER FOR TABELLEN';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoveMenu = 'Flytt meny';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til samme navn!';
$strMultilingual = 'flerspråkelig';
$strMyISAMDataPointerSize = 'Datapekerstørrelse';
$strMyISAMDataPointerSizeDesc = 'Standard pekerstørrelse i bytes, som brukes av CREATE TABLE for MyISAM tabeller når ingen MAX_ROWS innstillinger er spesifisert.';
$strMyISAMMaxExtraSortFileSize = 'Maksimum størrelse for midlertidige filer under indeksopprettelse';
$strMyISAMMaxExtraSortFileSizeDesc = 'Hvis den midlertidige fila brukt for hurtig MyISAM indeksopprettelse ville bli større enn å bruke nøkkelmellomlager med størrelsen spesifisert her, så bruk nøkkellagermetoden.';
$strMyISAMMaxSortFileSize = 'Maksimum størrelse for midlertidige sorteringsfiler';
$strMyISAMMaxSortFileSizeDesc = 'Maksimum størrelse for den midlertidige fila MySQL har lov til å bruke når den gjennoppretter en MyISAM indeks (med spørringene REPAIR TABLE, ALTER TABLE, eller LOAD DATA INFILE).';
$strMyISAMRecoverOptions = 'Automatisk gjennopprettignsmodus';
$strMyISAMRecoverOptionsDesc = 'Modusen for automatisk gjennoppretting av MyISAM tabeller som har kræsjet, konfigurert via --myisam-recover tjeneroppstartsinnstillingen.';
$strMyISAMRepairThreads = 'Reparer tråder';
$strMyISAMRepairThreadsDesc = 'Hvis denne verdien er større enn 1 så blir MyISAM tabellindekser opprettet parallelt (hver indeks i sin egen tråd) under REPAIR av sorteringsprosessen.';
$strMyISAMSortBufferSize = 'Sorteringsbufferstørrelse';
$strMyISAMSortBufferSizeDesc = 'Bufferet som brukes ved sortering av MyISAM indekser under en REPAIR TABLE eller når indekser blir opprettet med CREATE INDEX eller ALTER TABLE.';
$strMySQLCharset = 'MySQL-tegnsett';
$strMysqlClientVersion = 'MySQL klientversjon';
$strMySQLConnectionCollation = 'Kollasjon av MySQL-oppkobling';
$strMysqlLibDiffersServerVersion = 'Din PHP MySQL bibliotekfilversjon %s er forskjellig fra din MySQL tjenerversjon %s. Dette kan forårsake uforutsett oppførsel.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL driftsstatus';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoActivity = 'Ingen aktivitet på %s sekunder eller mer, du må logge inn på nytt';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser er valgt.';
$strNoDataReceived = 'Ingen data ble mottatt for importering. Enten ble ingen filnavn gitt, eller filstørrelsen oversteg maksimum størrelse tillatt i din PHP konfigurasjon. Se FAQ 1.16';
$strNoDescription = 'ingen beskrivelse';
$strNoDetailsForEngine = 'Det er ikke noen detaljert statusinformasjon for denne lagringsmotoren.';
$strNoDropDatabases = '"DROP DATABASE"-uttrykk er avslått.';
$strNoExplain = 'Ikke forklar SQL';
$strNoFilesFoundInZip = 'Ingen filer funnet inne i ZIP arkivet!';
$strNoFrames = 'phpMyAdmin er mer brukervennlig med en <b>rammekapabel</b> nettleser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeksdeler definert!';
$strNoModification = 'Ingen endring';
$strNone = 'Ingen';
$strNoOptions = 'Dette formatet har ingen valg';
$strNoPassword = 'Intet passord';
$strNoPermission = 'Webserveren har ikke tillatelse til å lagre fila %s.';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoRights = 'Du har ikke nok rettigheter til å være her nå!';
$strNoRowsSelected = 'Ingen rader valgt';
$strNoSpace = 'Ikke nok plass til å lagre fila %s.';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNoThemeSupport = 'Ikke støtte for maler, kontroller konfigureringen og/eller dine maler i katalogen %s.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotOK = 'ikke OK';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNoValidateSQL = 'Ikke teste SQL';
$strNull = 'Null';
$strNumberOfFields = 'Antall felter';
$strNumberOfTables = 'Antall tabeller';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document regneark';
$strOpenDocumentText = 'Open Document tekst';
$strOpenNewWindow = 'Åpne nytt phpMyAdmin vindu';
$strOperations = 'Operasjoner';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiser tabell';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';
$strOverwriteExisting = 'Overskriv eksisterende fil(-er)';

$strPageNumber = 'Sidenummer:';
$strPagesToBeFlushed = 'Sider som skal tømmes';
$strPaperSize = 'Papirstørrelse';
$strPartialImport = 'Delvis importering';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordChanged = 'Passordet til %s er endret.';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordHashing = 'Passordnøkling';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPDF = 'PDF';
$strPdfDbSchema = 'Skjema for "%s"-databasen - Side %s';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPDFReportExplanation = '(Oppretter en rapport som inneholder dataene fra en enkel tabell)';
$strPDFReportTitle = 'Rapporttittel';
$strPerHour = 'per time';
$strPerMinute = 'per minutt';
$strPerSecond = 'per sekund';
$strPersian = 'Persisk';
$strPhoneBook = 'telefonkatalog';
$strPhp = 'Lag PHP kode';
$strPHP40203 = 'Du bruker PHP 4.2.3, som har en alvorlig feil med flerbyte-strenger (mbstring). Se PHP-feilrapport 19404. Denne versjonen av PHP er ikke anbefalt for bruk med phpMyAdmin.';
$strPHPVersion = 'PHP-Versjon';
$strPleaseSelectPrimaryOrUniqueKey = 'Velg primærnøkkelen eller en unik nøkkel';
$strPmaDocumentation = 'phpMyAdmin-Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen MÅ være innstilt i din konfigurasjonsfil!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polsk';
$strPortrait = 'Portrettformat';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Primær';
$strPrimaryKeyHasBeenDropped = 'Primærnøkkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  primærnøkkelen må være... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>må</b> være navnet til og <b>bare til</b> en primærnøkkel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvennlig forhåndsvisning';
$strPrintViewFull = 'Forhåndsvisning (med all tekst)';
$strPrivDescAllPrivileges = 'Inkluder alle privilegier unntatt GRANT.';
$strPrivDescAlter = 'Tillater endring av struktur på eksisterende tabeller.';
$strPrivDescAlterRoutine = 'Tillater endring og sletting av lagrede rutiner.';
$strPrivDescCreateDb = 'Tillater oppretting av nye databaser og tabeller.';
$strPrivDescCreateRoutine = 'Tillater oppreting av lagrede rutiner.';
$strPrivDescCreateTbl = 'Tillater oppretting av nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillater oppretting av midlertidige tabeller.';
$strPrivDescCreateUser = 'Tillater oppretting, sletting og navneendring av brukerkontoer.';
$strPrivDescCreateView = 'Tillater oppretting av nye visninger.';
$strPrivDescDelete = 'Tillater sletting av data.';
$strPrivDescDropDb = 'Tillater sletting av databaser og tabeller.';
$strPrivDescDropTbl = 'Tillater sletting av tabeller.';
$strPrivDescExecute = 'Tillater kjøring av lagrede prosedyrer; har ingen effekt på denne versjonen av MySQL.';
$strPrivDescExecute5 = 'Tillater utføring av lagrede rutiner.';
$strPrivDescFile = 'Tillater import og eksport av data til og fra filer.';
$strPrivDescGrant = 'Tillater å legge til brukere og privilegier uten å oppfriske privilegietabellene.';
$strPrivDescIndex = 'Tillater oppretting og sletting av indekser.';
$strPrivDescInsert = 'Tillater å legge til og erstatte data.';
$strPrivDescLockTables = 'Tillater låsing av tabeller for den kjørende tråden.';
$strPrivDescMaxConnections = 'Begrenser antall nye tilkoblinger brukeren kan åpne per time.';
$strPrivDescMaxQuestions = 'Begrenser antall spørringer brukeren kan sende til tjeneren per time.';
$strPrivDescMaxUpdates = 'Begrenser antall kommandoer som kan endre tabeller eller databaser brukeren kan utføre per time.';
$strPrivDescMaxUserConnections = 'Begrens antall samtidige tilkoblinger brukeren kan ha.';
$strPrivDescProcess3 = 'Tillater avslutting av prosesser som tilhører andre brukere.';
$strPrivDescProcess4 = 'Tillater visning av komplette spørringer i prosesslisten.';
$strPrivDescReferences = 'har ingen effekt i denne versjonen av MySQL.';
$strPrivDescReload = 'Tillater oppfrisking av tjenerinnstillinger og oppfrisking av mellomlager.';
$strPrivDescReplClient = 'Gir tillatelse til brukeren til å spørre hvor replikasjonsslaver eller -tjenere er.';
$strPrivDescReplSlave = 'Trenges av replikasjonsslavene.';
$strPrivDescSelect = 'Tillater lesing av data.';
$strPrivDescShowDb = 'Gir adgang til komplett liste over databaser.';
$strPrivDescShowView = 'Tillater utføring av SHOW CREATE VIEW spørringer.';
$strPrivDescShutdown = 'Tillater avslutting av tjener.';
$strPrivDescSuper = 'Tillater tilkobling, selv om maksimum tilkoblinger er nådd. Behøves for de fleste administrative operasjoner som å sette globale variabler eller avslutting av andre brukeres tråder.';
$strPrivDescUpdate = 'Tillater endring av data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Oppfriskingen av privilegiene lyktes.';
$strProcedures = 'Prosedyrer';
$strProcesses = 'Prosesser';
$strProcesslist = 'Prosess liste';
$strProfiling = 'Profilering';
$strProtocolVersion = 'Protokollversjon';
$strPutColNames = 'Sett inn feltnavn i første rad';

$strQBE = 'Spørring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryCache = 'Spørringsmellomlager';
$strQueryFrame = 'Spørringsvindu';
$strQueryOnDb = 'SQL-spørring i database <b>%s</b>:';
$strQueryResultsOperations = 'Spørringsresultatshandlinger';
$strQuerySQLHistory = 'SQL-historie';
$strQueryStatistics = '<b>Spørrings statistikk</b>: Siden oppstart, har %s spørringer blitt sendt til tjeneren.';
$strQueryTime = 'Spørring tok %01.4f sek';
$strQueryType = 'Spørringstype';
$strQueryWindowLock = 'Ikke overskriv denne spørringen fra andre vinduer';

$strReadRequests = 'Leseforespørsler';
$strReceived = 'Mottatt';
$strRecommended = 'anbefalt';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanseintegritet:';
$strRefresh = 'Oppdater';
$strRelationalSchema = 'Relasjonsskjema';
$strRelationDeleted = 'Relasjon slettet';
$strRelationNotWorking = 'Tilleggsfunksjonene for å kunne jobbe med koblede tabeller er deaktivert. For å finne ut hvorfor, klikk %sher%s.';
$strRelations = 'Relasjoner';
$strRelationsForTable = 'RELASJONER FOR TABELLEN';
$strRelationView = 'Relasjonsvisning';
$strReload = 'Oppdater';
$strReloadingThePrivileges = 'Oppfrisker privilegiene';
$strReloadPrivileges = 'Oppfrisk privilegier';
$strRemoveSelectedUsers = 'Fjern valgte brukere';
$strRenameDatabaseOK = 'Databasen %s har endret navn til %s';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har fått nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplaceNULLBy = 'Erstatt NULL med';
$strReplaceTable = 'Erstatt tabell med filen';
$strReplication = 'Replikering';
$strReset = 'Tøm skjema';
$strResourceLimits = 'Ressursbegrensninger';
$strRestartInsertion = 'Restarte innsettinga med %s rader';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeAndDelete = 'Tilbakekall alle aktive privilegier fra brukerne og slett dem etterpå.';
$strRevokeAndDeleteDescr = 'Inntill privilegiene er oppfrisket vil brukerne fortsatt ha USAGE privilegiet.';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRomanian = 'Rumensk';
$strRoutineReturnType = 'Returtype';
$strRoutines = 'Rutiner';
$strRowLength = 'Radlengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' Radstørrelse ';
$strRowsModeFlippedHorizontal = 'horisontal (roterte overskrifter)';
$strRowsModeHorizontal = 'vannrett';
$strRowsModeOptions = 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical = 'loddrett';
$strRowsStatistic = 'Radstatistikk';
$strRunning = 'som kjører på %s';
$strRunQuery = 'Kjør spørring';
$strRunSQLQuery = 'Kjør SQL spørring/spørringer mot databasen %s';
$strRunSQLQueryOnServer = 'Kjør SQL spørring/spørringer på tjener %s';
$strRussian = 'russisk';

$strSave = 'Lagre';
$strSaveOnServer = 'Lagre på server i %s katalogen';
$strSavePosition = 'Lagre posisjon';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til å romme alt på en side';
$strSearch = 'Søk';
$strSearchFormTitle = 'Søk i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) å søke etter (jokertegn: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den nøyaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'Søkeresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSecretRequired = 'Konfigurasjonsfila trenger nå et hemmelig passordfrase (blowfish_secret).';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectBinaryLog = 'Velg binærlogg for visning';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectForeignKey = 'Velg fremmednøkkel';
$strSelectNumRows = 'i spørring';
$strSelectReferencedKey = 'Velg referert nøkkel';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strSent = 'Sendt';
$strServer = 'Tjener';
$strServerChoice = 'Tjenervalg';
$strServerNotResponding = 'Tjeneren svarer ikke';
$strServers = 'Tjenere';
$strServerStatus = 'Kjøringsinformasjon';
$strServerStatusDelayedInserts = 'Forsinkede innsettinger';
$strServerStatusUptime = 'Denne MySQL tjeneren har kjørt i %s. Den startet opp den %s.';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Tjenertraffikk</b>: Disse tabellene viser statistikk over nettverkstrafikken for denne MySQL-tjeneren siden dens oppstart.';
$strServerVars = 'Tjenervariabler og -innstillinger';
$strServerVersion = 'Tjenerversjon';
$strSessionStartupErrorGeneral = 'Kan ikke starte sessjonen uten feil, kontroller feilmeldinger i din PHP og/eller webtjenerloggfil og konfigurer din PHP innstallasjon korrekt.';
$strSessionValue = 'Økts verdi';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge å ha en skråstrek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skråstrek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowDatadictAs = 'Data Ordbok Format';
$strShowFullQueries = 'Vis hele spørringen';
$strShowGrid = 'Vis rutenett';
$strShowHideLeftMenu = 'Skjul/Vis venstre meny';
$strShowingBookmark = 'Vis bokmerke';
$strShowingPhp = 'Viser som PHP kode';
$strShowingRecords = 'Viser rader ';
$strShowingSQL = 'Viser SQL spørring';
$strShowOpenTables = 'Vis åpne tabeller';
$strShowPHPInfo = 'Vis PHP-informasjon';
$strShowSlaveHosts = 'Vis slaveverter';
$strShowSlaveStatus = 'Vis slavestatus';
$strShowStatusBinlog_cache_disk_useDescr = 'Antall transaksjoner som brukte den midlertidige binærloggmellomlageret men som overskred verdien av binlog_size og brukte en midlertidig fil for å lagre spørringer fra transaksjonen.';
$strShowStatusBinlog_cache_useDescr = 'Antall transaksjoner som brukte den midlertidige binærloggmellomlageret.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Antall midlertidige tabeller lagret på harddisken automatisk opprettet av tjeneren mens den utførte spørringer. Hvis Created_tmp_disk_tables er stor bør du vurdere å øke tmp_table_size verdien slik at midlertidige tabeller blir lagret i minnet og ikke på harddisken.';
$strShowStatusCreated_tmp_filesDescr = 'Antall midlertidige filer mysqld har opprettet.';
$strShowStatusCreated_tmp_tablesDescr = 'Antall midlertidige tabeller i minnet automatisk opprettet av tjeneren under utføriing av spørringer.';
$strShowStatusDelayed_errorsDescr = 'Antall rader skrevet med INSERT DELAYED hvor en eller annen form for feil oppstod (mest sannsynlig duplisert nøkkel).';
$strShowStatusDelayed_insert_threadsDescr = 'Antall INSERT DELAYED håndterertråder i bruk. Hver eneste tabell hvor det blir brukt INSERT DELAYE får sin egen tråd.';
$strShowStatusDelayed_writesDescr = 'Antall INSERT DELAYED rader skrevet.';
$strShowStatusFlush_commandsDescr  = 'Antall utførte FLUSH uttrykk.';
$strShowStatusHandler_commitDescr = 'Antall interne COMMIT uttrykk.';
$strShowStatusHandler_deleteDescr = 'Antall ganger en rad ble slettet fra en tabell.';
$strShowStatusHandler_discoverDescr = 'MySQL tjeneren kan spørre NDB Cluster lagringsmotoren om den kjenner til en tabell med et gitt navn. Dette blir kalt oppdaging (discovery). Handler_discover indikerer antall ganger tabeller har blitt oppdaget.';
$strShowStatusHandler_read_firstDescr = 'Antall ganger det første innlegget ble lest fra en index. Hvis dette tallet er høyt tyder det på at tjeneren utfører en god del fullindekssøk; for eksempel, SELECT col1 FROM foo, da forutsatt at col1 er indeksert.';
$strShowStatusHandler_read_keyDescr = 'Antall forespørsler for å lese en rad basert på en nøkkel. Hvis dette tallet er høyt gir dette en god indikasjon på at dine spørringer og tabeller er riktig indeksert.';
$strShowStatusHandler_read_nextDescr = 'Antall forespørsler for å lese en rad basert på en fast posisjon. Denne er høy hvis du utører mange spørringer som behøver sortering av resultatet. Du har sansynligvis mange spørringer som krever at MySQL leser hele tabeller eller du har joins som ikke bruker nøkler korrekt.';
$strShowStatusHandler_read_prevDescr = 'Antall forespørsler for å lese den forrige raden i nøkkelrekkefølge. Denne lesemetoden er hovedsakelig brukt for å optimalisere ORDER BY ... DESC.';
$strShowStatusHandler_read_rnd_nextDescr = 'Antall forespørsler for å lese neste rad i datafila. Dette tallet er høyt hvis du utfører mange tabellskanninger. Vanligvis betyr dette at dine tabeller ikke er rett indeksert eller at dine spørringer ikke er skrevet for å utnytte de indeksene du har.';
$strShowStatusHandler_read_rndDescr = 'Antall forespørsler for å lese en rad basert på en fast posisjon. Denne er høy om du utfører mange spørringer som behøver sorteringer av resultatet. Du har mest sansynlig mange spørringer som krever at MySQL leser hele tabeller eller du har joins som som ikke bruker nøkler korrekt.';
$strShowStatusHandler_rollbackDescr = 'Antall interne ROLLBACK kommandoer.';
$strShowStatusHandler_updateDescr = 'Antall forespørsler for å oppdatere en rad i en tabell.';
$strShowStatusHandler_writeDescr = 'Antall forespørsler for å sette inn en rad i en tabell.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Antall sider som inneholder data (endret eller uendret).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Antall sider for tiden endret.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Antall midlertidige mellomlagersider som det har vært oppfriskningsforespørsler på.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Antall tomme sider.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Antallet låste sider i InnoDBs mellomlager. Dette er sider som er under lesing eller skriving eller ikke kan tømmes eller fjernes av en annen grunn.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Antall sider som er opptatt fordi de har blitt allokert for administrative oppgaver slik som radlåsing eller adaptiv nøkkelindeksering. Denne verdien kan også regnes ut som Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total størrelse på midlertidig mellomlager i sider.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Antall "tilfeldige" "read-aheads" InnoDB startet. Dette skjer når en spørring skanner en stor andel av en tabell men i en tilfeldig rekkefølge.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Antall sekvensielle "read-aheads" InnoDB startet. Denne skjer når InnoDB utfører en sekvensiell full tabellskanning.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Antall logiske leseforespørsler InnoDB har utført.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Antall logiske lesninger som InnoDN ikke kunne tilfredsstille fra mellomlageret og måtte utføre en enkelsidelesnining.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalt vil skrivinger til InnoDBs mellomlager skje i bakgrunnen. Men, hvis det er behov for å lese eller opprette en side og ingen rene/tomme sider er tilgjengelig så er det nødvendig å vente på at sider blir tømt først. Denne telleren viser antall slike ventinger. Hvis mellomlagerstørrelsen er godt innstilt så vil denne verdien være liten.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Antall skrivinger til InnoDBs midlertidig mellomlager.';
$strShowStatusInnodb_data_fsyncsDescr = 'Antall fsync() operasjoner så langt.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Antall ventende fsync() operasjoner.';
$strShowStatusInnodb_data_pending_readsDescr = 'Antall ventende lesinger.';
$strShowStatusInnodb_data_pending_writesDescr = 'Antall ventende skrivinger.';
$strShowStatusInnodb_data_readDescr = 'Mengden data lest så langt, i bytes.';
$strShowStatusInnodb_data_readsDescr = 'Antall utførte lesninger.';
$strShowStatusInnodb_data_writesDescr = 'Antall utførte skrivinger.';
$strShowStatusInnodb_data_writtenDescr = 'Mengden data skrevet så langt, i bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Antallet dobbeltskrivinger som har blitt utført og antall sider som har blitt skrevet på grunn av dette.';
$strShowStatusInnodb_dblwr_writesDescr = 'Antallet dobbeltskrivinger som har blitt utført og antall sider som har blitt skrevet på grunn av dette.';
$strShowStatusInnodb_log_waitsDescr = 'Antall ganger ventinger vi hadde fordi loggmellomlageret var for lite og vi måtte vente for at det skulle bli tømt før vi kunne fortsette.';
$strShowStatusInnodb_log_write_requestsDescr = 'Antall loggskrivingsforespørsler.';
$strShowStatusInnodb_log_writesDescr = 'Antall fysiske skrivinger til loggfila.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Antall fsync-skrivinger utført på loggfila.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Antall ventende loggfil-fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Ventende loggfilskrivinger.';
$strShowStatusInnodb_os_log_writtenDescr = 'Antall bytes skrevet til loggfila.';
$strShowStatusInnodb_page_sizeDescr = 'Den innkompilerte InnoDB sidestørrelsen (standard 16KB). Mange verdier måles i sider; sidestørrelsen gjør at det er lett å konvertere dem til bytes.';
$strShowStatusInnodb_pages_createdDescr = 'Antall sider opprettet.';
$strShowStatusInnodb_pages_readDescr = 'Antall sidelesninger.';
$strShowStatusInnodb_pages_writtenDescr = 'Antall sideskrivinger.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Antall ventende radlåsinger.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Gjennomsnittlig tid for å oppnå radlåsing, i millisekunder.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksimum tid brukt for å oppnå en radlåsing, i millisekunder.';
$strShowStatusInnodb_row_lock_timeDescr = 'Total tid brukt for å få radlåsinger, i millisekunder.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Antall ganger en radlås måtte ventes på.';
$strShowStatusInnodb_rows_deletedDescr = 'Antall rader slettet fra InnoDB tabeller.';
$strShowStatusInnodb_rows_insertedDescr = 'Antall rader satt inn i InnoDB tabeller.';
$strShowStatusInnodb_rows_readDescr = 'Antall rader lest fra InnoDB tabeller.';
$strShowStatusInnodb_rows_updatedDescr = 'Antall rader oppdatert i InnoDB tabeller.';
$strShowStatusKey_blocks_not_flushedDescr = 'Antall nøkkelblokker i nøkkelmellomlageret som har blitt endret men som ikke ennå har blitt skrevet til harddisken. Dette var tidligere kjent som Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Antall ubrukte blokker i nøkkelmellomlageret. Du kan bruke denne verdien til å bestemme hvor mye av nøkkelmellomlageret som er i bruk.';
$strShowStatusKey_blocks_usedDescr = 'Antall brukte blokker i nøkkelmellomlageret. Denne verdien er et høyvannsmål som viser maksimum antall blokker som har vært brukt på en gang.';
$strShowStatusKey_read_requestsDescr = 'Antall forespørsler for å lese en nøkkelblokk fra mellomlageret.';
$strShowStatusKey_readsDescr = 'Antall fysiske lesninger av en nøkkelblokk fra harddisk. Hvis Key_reads er stor er nok din key_buffer_size verdi for liten. Mellomlagertreffraten kan kalkuleres med Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Antall forespørsler for å skrive en nøkkelblokk til mellomlageret.';
$strShowStatusKey_writesDescr = 'Antall fysiske skrivinger av en nøkkelblokk til disk.';
$strShowStatusLast_query_costDescr = 'Den totale kostnad ved siste kompilerte spørring slik den ble utregnet av spørringsoptimisereren. Nyttig for å kunne sammenligne kostnader ved forskjellige spørringsplaner for den samme spørringen. Standardverdien på 0 betyr at ingen spørring har blitt kompilert ennå.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Antall rader som venter på å bli skrevet i INSERT DELAYED køer.';
$strShowStatusOpen_filesDescr = 'Antall åpne filer.';
$strShowStatusOpen_streamsDescr = 'Antall åpne dataflyter (hovedsaklig brukt til logging).';
$strShowStatusOpen_tablesDescr = 'Antall åpne tabeller.';
$strShowStatusOpened_tablesDescr = 'Antall tabeller som har blitt åpnet. Hvis denne er stor er nok din tabellmellomlagerverdi for liten.';
$strShowStatusQcache_free_blocksDescr = 'Antall ledige minneblokker i spørringsmellomlager.';
$strShowStatusQcache_free_memoryDescr = 'Mengden ledig minne i spørringsmellomlager.';
$strShowStatusQcache_hitsDescr = 'Antall mellomlagertreff.';
$strShowStatusQcache_insertsDescr = 'Antall spørringer lagt til i mellomlageret.';
$strShowStatusQcache_lowmem_prunesDescr = 'Antall spørringer som har blitt fjernet fra mellomlageret for å frigjøre minne for nye spørringer. Denne informasjonen kan hjelpe deg å fininnstille størrelsen på spørringsmellomlageret. Spørringsmellomlageret bruker en minst og sist brukt (least recently used (LRU)) strategi for å finne hvilke spørringer som skal fjernes fra mellomlageret.';
$strShowStatusQcache_not_cachedDescr = 'Antallet ikkelagrede spørringer (kan ikke lagres, eller ikke lagret p.g.a. query_cache_type innstillingen).';
$strShowStatusQcache_queries_in_cacheDescr = 'Antall spørringer registrert i mellomlageret.';
$strShowStatusQcache_total_blocksDescr = 'Totale antall blokker i spørringsmellomlageret.';
$strShowStatusReset = 'Tilbakestill';
$strShowStatusRpl_statusDescr = 'Failsafe replikasjonsstatus (ikke implementert ennå).';
$strShowStatusSelect_full_joinDescr = 'Antall joins som ikke bruker indekser. Hvis denne verdien ikke er 0 bør du nøye sjekke indeksene til dine tabeller.';
$strShowStatusSelect_full_range_joinDescr = 'Antall joins som trenger en rekkefølgesøk i en referansetabell.';
$strShowStatusSelect_range_checkDescr = 'Antall joins uten nøkler som kontrollerer for nøkkelbruk etter hver rad (Hvis denne ikke er 0 bør du nøye kontrollere dine tabellindekser.)';
$strShowStatusSelect_rangeDescr = 'Antall joins som brukte rekkefølger på den første tabellen. (Det er normalt ikke kritisk selv om denne verdien er stor.)';
$strShowStatusSelect_scanDescr = 'Antall joins som utførte en full skann av den første tabellen.';
$strShowStatusSlave_open_temp_tablesDescr = 'Antall midlertidige tabeller for tiden åpnet av slave SQL tråden.';
$strShowStatusSlave_retried_transactionsDescr = 'Det totale antall ganger (siden oppstart) replikasjonsslave-SQL-tråden har gjentatt transaksjoner.';
$strShowStatusSlave_runningDescr = 'Denne er ON hvis denne tjeneren er en slave som er koblet til en master.';
$strShowStatusSlow_launch_threadsDescr = 'Antall tråder som har brukt mer enn slow_launch_time sekunder under opprettelse.';
$strShowStatusSlow_queriesDescr = 'Antall spørringer som har brukt mer enn long_query_time sekunder.';
$strShowStatusSort_merge_passesDescr = 'Antall sammenslåingspasseringer sorteringsalgoritmen har måttet utføre. Hvis denne verdien er stor bør du vurdere å øke verdien av sort_buffer_size systemvariabelen.';
$strShowStatusSort_rangeDescr = 'Antall sorteringer som ble utført med rekkefølger.';
$strShowStatusSort_rowsDescr = 'Antall sorterte rader.';
$strShowStatusSort_scanDescr = 'Antall sorteringer som har vært utført ved hjelp av skanning av tabellen.';
$strShowStatusTable_locks_immediateDescr = 'Antall ganger en tabellåsing ble utført umiddelbart.';
$strShowStatusTable_locks_waitedDescr = 'Antall ganger en tabellås ikke har kunnet blitt opprettet umiddelbart og en venting ble nødvendig. Hvis denne er høy og du har ytelsesproblemer bør du først optimalisere dine spørringer, og deretter enten splitte din tabell eller tabeller eller bruke replikasjon.';
$strShowStatusThreads_cachedDescr = 'Antall tråder i trådmellomlageret. Mellomlagertreffraten kan regnes ut som Threads_created/Connections. Hvis denne verdien er rød bør du øke din thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Antall åpne tilkoblinger.';
$strShowStatusThreads_createdDescr = 'Antall tråder opprettet for å handtere tilkoblinger. Hvis Threads_created er stor bør du vurdere å øke thread_cache_size størrelsen. (Normalt vil dette ikke gi noen merkbar forbedring hvis du har en god trådimplementering.)';
$strShowStatusThreads_runningDescr = 'Antall tråder som ikke sover.';
$strShowTableDimension = 'Vis tabelldimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne spørring her igjen ';
$strSimplifiedChinese = 'forenklet kinesisk';
$strSingly = '(enkeltvis)';
$strSize = 'Størrelse';
$strSkipQueries = 'Antall poster(spørringer) å hoppe over fra start';
$strSlovak = 'Slovakisk';
$strSlovenian = 'Slovensk';
$strSmallBigAll = 'Liten/Stor alle';
$strSnapToGrid = 'Lås til ruter';
$strSocketProblem = '(eller den lokale MySQL tjenerens sokkel er ikke korrekt konfigurert)';
$strSort = 'Sorter';
$strSortByKey = 'Sorter etter nøkkel';
$strSorting = 'Sortering';
$strSpaceUsage = 'Plassbruk';
$strSpanish = 'Spansk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strSQL = 'SQL';
$strSQLCompatibility = 'SQL kompatibilitetsmodus';
$strSQLExportType = 'Eksporttype';
$strSQLParserBugMessage = 'Det er en mulighet for at du har funnet en feil i SQL-parseren. Vennligst kontroller din spørring nøye og kontroller at anførselstegn er korrekte og matsjer hverandre. En annen mulig feilårsak kan være at du overfører en fil med binærkode som ikke ligger innenfor anførselstegn. Du kan også teste din spørring i MYSQLs kommandolinjegrensesnitt. Feilmeldingen fra MySQL-tjeneren nedenfor, hvis det var en, kan også hjelpe deg med å analysere problemet. Hvis du fortsatt har problemer eller parseren feiler hvor kommandolinjegrensesnittet lyktes, vennligst reduser din SQL-spørring til den spørringen som forårsaker problemet og send en feilrapport med datastykket i CUT-seksjonen nedenfor:';
$strSQLParserUserError = 'Det ser ut til å være en feil i din SQL-spørring. En eventuell feilmelding fra MySQL-tjeneren er skrevet ut nedenfor, kan kanskje hjelpe deg med å finne feilen.';
$strSQLQuery = 'SQL-spørring';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Anførselstegnet er ikke lukket';
$strSQPBugUnknownPunctuation = 'Ukjent tegnsettingsstreng';
$strStandInStructureForView = 'Erstatningsstruktur for visning';
$strStatCheckTime = 'Sist kontrollert';
$strStatCreateTime = 'Opprettet';
$strStatement = 'Oversikt';
$strStatisticsOverrun = 'På en travel tjener så kan byte-tellerene overflyte, så denne statistikken som rapportert av MySQL tjeneren kan være unøyaktig.';
$strStatUpdateTime = 'Sist oppdatert';
$strStatus = 'Status';
$strStorageEngine = 'Lagringsmotor';
$strStorageEngines = 'Lagringsmotorer';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucExcelCSV = 'CSV for MS Excel data';
$strStrucNativeExcel = 'Originale MS Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foreslå tabellstruktur';
$strStructure = 'Struktur';
$strStructureForView = 'Visningsstruktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/spørringen er utført';
$strSuhosin = 'Tjeneren kjører med Suhosin. Sjekk %sdokumentasjonen%s for potensielle problemer.';
$strSum = 'Sum';
$strSwedish = 'svensk';
$strSwitchToDatabase = 'Bytt til kopiert database';
$strSwitchToTable = 'Bytt til kopiert tabell';

$strTable = 'Tabell';
$strTableAlreadyExists = 'Tabel %s eksisterer allerede!';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt tømt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableIsEmpty = 'Tabellen ser ut til å være tom!';
$strTableMaintenance = 'Tabellvedlikehold';
$strTableName = 'Tabellnavn';
$strTableOfContents = 'Innholdsfortegnelse';
$strTableOptions = 'Tabellinnstillinger';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabellstruktur for tabell';
$strTakeIt = 'velg';
$strTblPrivileges = 'Tabell-spesifikke privilegier';
$strTempData = 'Midlertidige data';
$strTextAreaLength = ' På grunn av sin lengde,<br /> så vil muligens dette feltet ikke være redigerbart ';
$strThai = 'thai';
$strTheme = 'Tema / Stil';
$strThemeDefaultNotFound = 'Standard stil %s ble ikke funnet!';
$strThemeNoPreviewAvailable = 'Ingen forhandsvisning tilgjengelig.';
$strThemeNotFound = 'Stilen %s ble ikke funnet!';
$strThemeNoValidImgPath = 'Ingen gyldig bildesti for stilen %s ble funnet!';
$strThemePathNotFound = 'Stilsti ble ikke funnet for stilen %s!';
$strThisHost = 'Denne vert';
$strThreads = 'Tråder';
$strThreadSuccessfullyKilled = 'Tråd %s ble avsluttet med suksess.';
$strTime = 'Tid';
$strTimeoutInfo = 'Forrige import ble tidsavbrutt, vil fortsette fra posisjon %d etter gjenninnsending.';
$strTimeoutNothingParsed = 'Men under den siste kjøringen så ble ingen data lest, dette betyr vanligvis at phpMyAdmin ikke vil være istand til å fullføre importeringen uten at du øker php tidsgrensen.';
$strTimeoutPassed = 'Skripttidsabrudd passert, hvis du ønsker å fortsette importen kan du gjennopplaste fila og importeringen vil fortsette.';
$strToFromPage = 'til/fra side';
$strToggleScratchboard = 'slå av/på kladdevindu';
$strToggleSmallBig = 'Veksle mellom liten/stor';
$strToSelectRelation = 'For å velge relasjon, klikk :';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraditionalChinese = 'Tradisjonell kinesisk';
$strTraditionalSpanish = 'Tradisjonell spansk';
$strTraffic = 'Trafikk';
$strTransactionCoordinator = 'Transaksjonskoordinator';
$strTransformation_application_octetstream__download = 'Vis en link for å kunne laste ned de binære dataene til et felt. Den første opsjonen er filnavnet til den binære fila. Den andre opsjonen er et potensielt feltnavn i en tabell som inneholder filnavnet. Hvis du velger den andre opsjonen så må den første være satt til en tom strengverdi';
$strTransformation_application_octetstream__hex ='Vis dataene i heksadesimal. Den valgfrie første parameteren tilkjennegir hvor ofte mellomrom vil bli lagt til (standard hvert andre tegn).';
$strTransformation_image_jpeg__inline = 'Viser et klikkbart tommelfingerbilde; valg: bredde, høyde i piksler (bevarer originale forhold)';
$strTransformation_image_jpeg__link = 'Viser en link til dette bildet (m.a.o. direkte blob-nedlasting).';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Vi en TIME, TIMESTAMP, DATETIME eller et numerisk Unix tidsmerke som en formatert dato. Den første innstillingen er differansen (i timer) som vil bli lagt til tidsmerket (Standard: 0). Bruk den andre innstillingen til å spesifiser en alternativ datoformatstreng. Den tredje innstillingen avgjør om du ønsker visning som en lokal dato eller som UTC (bruk "local" eller "utc" strenger). Avhengig av dette, vil datoformatstrengen ha forskjellig verdi - for "local" se dokumentasjonen for PHPs strftime() funksjon og for "utc" se gmdate() funksjonen.';
$strTransformation_text_plain__external = 'BARE LINUX: Starter et eksternt program og gir den feltdataene via standard input. Returnerer standart output fra programmet. Standard er Tidy, for å skrive ut pen HTML kode. Av sikkerhetsgrunner så må du redigere fila libraries/transformations/text_plain__external.inc.php og skrive inn de verktøyene du tillater å kjøres. Den første verdien er antall programmer du ønsker å bruke og den andre verdien er parameterene for programmet. Den tredje verdien, hvis den er satt til 1 vil konvertere utskriften med htmlspecialchars() (Standard er 1). En fjerde verdi vil, viss satt til 1 sette en NOWRAP i innholdscellen slik at hele resultatet blir vist uten reformatering (Standard er 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formatering av feltet. Ingen \'escaping\' blir utført.';
$strTransformation_text_plain__imagelink = 'Viser et bilde og en link, feltet inneholder filnavnet; første verdi er et prefiks slik som "http://domain.com/", andre verdien er bredden i piksler, tredje er høyden.';
$strTransformation_text_plain__link = 'Viser en link, feltet inneholder filnavnet, ; første verdi er et prefiks slik som "http://domain.com/", andre verdien er en tittel for linken.';
$strTransformation_text_plain__sql = 'Formaterer tekst som en SQL spørring med syntaksutheving.';
$strTransformation_text_plain__substr = 'Viser bare en delstreng. Første verdien er antall tegn fra starten hvor din tekst begynner (Standard: 0). Andre verdien er hvor mange tegn som skal returneres. Hvis den er tom så returneres resten av teksten. Den tredje verdien definerer hvilke tegn som vil bli lagt til resultatet når en delstreng blir returnert (Standard: ...).';
$strTriggers = 'Triggere';
$strTruncateQueries = 'Forkort vist spørring';
$strTurkish = 'tyrkisk';
$strType = 'Type';

$strUkrainian = 'ukrainsk';
$strUncheckAll = 'Fjern merking';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ukjent';
$strUnselectAll = 'Fjern alle valgte';
$strUnsupportedCompressionDetected = 'Du forsøkte å laste en komprimert fil som det ikke er støtte for (%s). Enten så er ikke støtte implementert eller den er slått av i din konfigurasjon.';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater spørring';
$strUpdComTab = 'Les i dokumentasjonen hvordan du oppdaterer din Column_comments tabell';
$strUpgrade = 'Du burde oppgradere til %s %s eller nyere.';
$strUploadErrorCantWrite = 'Klarte ikke å skrive fila til harddisken.';
$strUploadErrorExtension = 'Filopplasting stoppet av utvidelse.';
$strUploadErrorFormSize = 'Opplastingsfila er større enn MAX_FILE_SIZE direktivet som ble spesifisert i HTML-skjemaet.';
$strUploadErrorIniSize = 'Opplastingsfila er større enn upload_max_filesize direktivet definert i php.ini.';
$strUploadErrorNoTempDir = 'Mangler en midlertidig mappe.';
$strUploadErrorPartial = 'Opplastingsfila ble bare delvis opplastet.';
$strUploadErrorUnknown = 'Ukjent feil oppstod under filopplastingen.';
$strUploadLimit = 'Du forsøkte sansynligvis å laste opp en for stor fil. Sjekk %sdokumentasjonen%s for måter å omgå denne begrensningen.';
$strUploadsNotAllowed = 'Filopplastinger er ikke tillatt på denne tjeneren.';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anførselstegn med tabell og feltnavn';
$strUsedPhpExtensions = 'Brukte PHP-tillegg';
$strUseHostTable = 'Vis vert tabell';
$strUser = 'Bruker';
$strUserAlreadyExists = 'Brukeren %s finnes fra før!';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUserNotFound = 'Den valgte brukeren ble ikke funnet i privilegietabellen.';
$strUserOverview = 'Brukeroversikt';
$strUsersDeleted = 'De valgte brukerne har blitt slettet.';
$strUsersHavingAccessToDb = 'Brukere som har adgang til &quot;%s&quot;';
$strUseTabKey = 'Bruk TAB tasten for å flytte fra verdi til verdi, eller CTRL+piltastene for å bevege deg hvor som helst';
$strUseTables = 'Bruk tabeller';
$strUseTextField = 'Bruk tekstfelt';
$strUseThisValue = 'Bruk denne verdien';

$strValidateSQL = 'Test SQL';
$strValidatorError = 'SQL-kontrolleren kunne ikke startes. Vennligst sjekk at du har installert de nødvendige php-tilleggene som beskrevet i %sdokumentasjonen%s.';
$strValue = 'Verdi';
$strVar = 'Variabler';
$strVersionInformation = 'Versionsinformasjon';
$strView = 'Vis';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDatabases = 'Vis dumpet skjema av databaser';
$strViewDumpDB = 'Vis dump (skjema) av database';
$strViewHasBeenDropped = 'Visningen %s har blitt slettet';
$strViewMaxExactCount = 'Denne visningen har mer enn %d rader. Les i %sdocumentation%s.';
$strViewName = 'VIEW navn';

$strWebServerUploadDirectory = 'webtjener opplastingskatalog';
$strWebServerUploadDirectoryError = 'Katalogen du anga for opplasting kan ikke nåes';
$strWelcome = 'Velkommen til %s';
$strWestEuropean = 'vesteuropeisk';
$strWildcard = 'jokertegn';
$strWindowNotFound = 'Målvinduet kunne ikke oppdateres. Muligens du har lukket modervinduet eller din nettleser blokkerer vindu-til-vindu oppdateringer av sikkerhetsårsaker.';
$strWithChecked = 'Med avkrysset:';
$strWriteRequests = 'Skriveforespørsler';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Merk: Ved å sette disse til 0 (null) fjernes begrensningen.';
$strZip = 'Komprimert (zip)';

?>
