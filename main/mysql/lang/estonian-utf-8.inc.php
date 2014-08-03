<?php
/* $Id: estonian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
 * Translated by Marko Ellermaa, <marko.ellermaa@nlkp.net>
 * Previous translations by Alvar Soome <finsoft@users.sourceforge.net>
 *
 * March 2006: Several changes and fixes done (by Marko Ellermaa)
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Püh', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';
$timespanfmt = '%s päeva, %s tundi, %s minutit ja %s sekundit';

$strAbortedClients = 'Katkestatud';
$strAccessDeniedCreateConfig = 'Arvatav põhjus on te pole veel loonud seadete faili. Soovitavalt võid kasutada %1$ssetup script%2$s et seadistada.';
$strAccessDeniedExplanation = 'phpMyAdmin proovis ühenduda MySQL serveriga ja server lükkas ühenduse tagasi. Te peaksite kontrollima serverit, kasutajanime ja parooli config.inc.php failis ning kontrollima, et need vastaks infole mis te saite oma MySQL serveri administraatori käest.';
$strAccessDenied = 'Ligipääs keelatud';
$strAction = 'Tegevus';
$strAddAutoIncrement = 'Lisa AUTO_INCREMENT väärtus';
$strAddClause = 'Lisa %s';  
$strAddConstraints = 'Lisa piirangud';
$strAddDeleteColumn = 'Lisa/Kustuta välja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddFields = 'Lisa %s väli(jad)';
$strAddHeaderComment = 'Lisa vaba kommentaar päisesse (\\n eraldab read)';
$strAddIntoComments = 'Lisa kommentaaridesse';
$strAddNewField = 'Lisa uus väli';
$strAddPrivilegesOnDb = 'Lisa privileegid antud andmebaasile';
$strAddPrivilegesOnTbl = 'Lisa privileegid antud tabelile';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("WHERE" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida/read';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAdministration = 'Administreerimine';
$strAffectedRows = 'Mõjutatud read:';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa järgmine uus rida';
$strAfterInsertNext = 'Muuda järgmist rida';
$strAfterInsertSame = 'Mine tagasi sellele lehele';
$strAfter = 'Peale %s';
$strAll = 'Kõik';
$strAllowInterrupt = 'Luba katkestada Import juhul kui skript leiab et ajalimiit on ületamisel. See võib olla hea viis suurte failide importimisel, kuigi võib katkestada ülekanded.';
$strAllTableSameWidth = 'kuva kõik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnalyzeTable = 'Analüüsi tabelit';
$strAnd = 'ja';
$strAndThen = 'ja siis';
$strAngularLinks = 'Nurgelised lingid'; 
$strAnIndex = 'Indeks lisati %s';
$strAnyHost = 'Kõik masinad';
$strAny = 'kõik';
$strAnyUser = 'Kõik kasutajad';
$strApproximateCount = 'Võib olla umbkaudne. Vaadake FAQ 3.11';
$strAPrimaryKey = 'Primaarne võti lisati %s';
$strArabic = 'Araabia';
$strArmenian = 'Armeenia';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli lõppu';
$strAttr = 'Parameetrid';
$strAutomaticLayout = 'Automaatne väljund';

$strBack = 'Tagasi';
$strBaltic = 'Balti';
$strBeginCut = 'ALUSTA LÕIGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - ärge muutke';
$strBinaryLog = 'Binaarne logi';
$strBinLogEventType = 'Sündmuse tüüp';
$strBinLogInfo = 'Informatsioon';
$strBinLogName = 'Logi nimi';
$strBinLogOriginalPosition = 'Originaal positioon';
$strBinLogPosition = 'Positsioon';
$strBinLogServerId = 'Serveri ID';
$strBookmarkAllUsers = 'Anna kõikidele kasutajatele juurdepääs sellele järjehodjale';
$strBookmarkCreated = 'Järjehoidja %s loodud';
$strBookmarkDeleted = 'Järjehodja kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'Järjehodjaga SQL päring';
$strBookmarkReplace = 'Kirjuta samanimeline järjehoidja üle';
$strBookmarkThis = 'Lisa see SQL päring järjehoidjasse';
$strBookmarkView = 'Vaata ainult';
$strBrowseDistinctValues = 'Sirvi erinevaid väärtusi';
$strBrowseForeignValues = 'Vaata väliseid väärtuseid';
$strBrowse = 'Vaata';
$strBufferPoolActivity = 'Puhverdusala aktiivsus';
$strBufferPool = 'Puhverdusala';
$strBufferPoolUsage = 'Puhverdusala kasutamine';
$strBufferReadMissesInPercent = 'Lugemis vigasid %';
$strBufferReadMisses = 'Lugemis vigasid';
$strBufferWriteWaitsInPercent = 'Kirjutamine ootab %';
$strBufferWriteWaits = 'Kirjutamine ootab';
$strBulgarian = 'Bulgaaria';
$strBusyPages = 'Hõivatud lehed';
$strBzError = 'phpMyAdmin ei suutnud pakkida seda andmebaasiväljundit kuna Bz2 moodul on vigane selles PHP versioonis. Me soovitame tungivalt oma phpMyAdmini konfiguratsioonifailis panna lipu <code>$cfg[\'BZipDump\']</code> väärtuseks <code>FALSE</code>. Kui te soovite kasutada Bz2 pakkimist peaksite te oma PHP versiooni uuendama viimasele versioonile. Lugege PHP vea %s raportit täpsemaks infoks.';
$strBzip = '"bzipitud"';

$strCalendar = 'Kalender';
$strCancel = 'Katkesta'; 
$strCanNotLoadExportPlugins = 'Viga eksportimis moodulite laadimisel, palun kontrolli seadeid!';
$strCanNotLoadImportPlugins = 'Pole võimalik Importida mooduleid (plugins), palun kontrolli seadeid!';
$strCannotLogin = 'Ei suuda MySQL serverisse logida';
$strCantLoad = 'ei suutnud lugeda moodulit %s,<br />palun kontrollige PHP konfiguratsiooni';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv või recode moodulit mida on vaja tähetabeli konvertimiseks, konfigureerige PHP-d nii, et see sisaldaks antud mooduleid või keelake tähetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d või libiconvi või recode_string funktsiooni kuigi moodul on installitud Kontrollige oma PHP konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCaseInsensitive = 'tõstutundetu';
$strCaseSensitive = 'tõstutundlik';
$strCentralEuropean = 'Kesk-Euroopa';
$strChangeCopyModeCopy = '... hoia vana alles.';
$strChangeCopyModeDeleteAndReload = ' ... kustuta vana kasutajate tabelist ja taaslae privileegid pärast seda.';
$strChangeCopyModeJustDelete = ' ... kustuta vana kasutajate tabelist.';
$strChangeCopyMode = 'Loo uus kasutaja samade privileegidega ja ...';
$strChangeCopyModeRevoke = ' ... kanna kõik aktiivsed privileegid üle vanast ja kustuta see pärast.';
$strChangeCopyUser = 'Vaheta logimisinformatsiooni / Kopeeri kasutaja';
$strChangeDisplay = 'Vali väli mida kuvada';
$strChange = 'Muuda';
$strChangePassword = 'Muuda parooli';
$strCharsetOfFile = 'Faili tähetabel:';
$strCharsetsAndCollations = 'Tähetabelid ja määrangud';
$strCharsets = 'Tähetabelid';
$strCharset = 'Tähetabel';
$strCheckAll = 'Märgista kõik';
$strCheckOverhead = 'Kontrolli ülekulusid';
$strCheckPrivs = 'Kontrollige privileege';
$strCheckPrivsLong = 'Kontrolli privileege andmebaasile &quot;%s&quot;.';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'Näitan veeru kommentaare';
$strCollation = 'Määrang';
$strColumnNames = 'Väljade nimed';
$strColumnPrivileges = 'Väli-spetsiifilised privileegid';
$strCommand = 'Käsk';
$strCommentsForTable = 'KOMMENTAARID TABELILE';
$strComments = 'Kommentaarid';
$strCompatibleHashing = 'MySQL&nbsp;4.0-iga ühilduv';
$strCompleteInserts = 'Täispikk INSERT';
$strCompression = 'Pakkimine';
$strCompressionWillBeDetected = 'Imporditava faili pakkimise meetod leitakse automaatselt: %s';
$strConfigDefaultFileError = 'Pole võimalik laadida vaikimisi seadete faili: "%1$s"';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See võib juhtuda kui PHP leiab vea selles või PHP ei leia antud faili üles.<br />Palun kutsuge konfiguratsioonifail välja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile öeldakse. Enamustel juhtudel on kuskilt puudu ülakoma või semikoolon.<br />Kui Teile kuvatakse tühi leht on kõik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConnectionError = 'Ei saa ühendust: vigased seaded.';
$strConnections = 'Ühendused';
$strConstraintsForDumped = 'Piirangud salvestatud tabelitele';
$strConstraintsForTable = 'Piirangud tabelile';
$strCookiesRequired = 'Küpsised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyDatabaseOK = 'Andmebaas %s on kopeeritud %s';
$strCopy = 'Kopeeri';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCopyTableSameNames = 'Ei saa tabelit iseendasse kopeerida!';
$strCouldNotKill = 'phpMyAdmin ei suutnud katkestada protsessi %s. Tõenäoliselt on see juba suletud.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE enne kopeerimist';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;väljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreate = 'Loo';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCreateRelation = 'Suhte loomine (relation)';  
$strCreateTable  = 'Loo tabel';
$strCreateUserDatabase = 'Andmebaas kasutajale';  
$strCreateUserDatabaseName = 'Loo sama nimega andmebaas ja anna kõik õigused'; 
$strCreateUserDatabaseNone = 'Puudub';  
$strCreateUserDatabaseWildcard = 'Anna kõik õigused Metanimele (username\_%)';
$strCreationDates = 'Loo/muuda/kontrolli kuupäevi';
$strCriteria = 'Kriteerium';
$strCroatian = 'Horvaatia';
$strCSV = 'CSV';
$strCyrillic = 'Kirillitsa';
$strCzechSlovak = 'Tsehhi-Slovaki';
$strCzech = 'Tsehhi';

$strDanish = 'Taani';
$strData = 'Andmed';
$strDatabase = 'Andmebaas';
$strDatabaseEmpty = 'Andmebaasi nimi on tühi!';
$strDatabaseExportOptions = 'Andmebaasi eksportimise seaded';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabases = 'Andmebaasid';
$strDatabasesDropped = 'andmebaasid %s kustutati õnnestunult.';
$strDatabasesStats = 'Andmebaaside statistika';
$strDatabasesStatsDisable = 'Keelake statistika';
$strDatabasesStatsEnable = 'Lubage statistika';
$strDatabasesStatsHeavyTraffic = 'Märkus: Lubades siin andmebaasi statistika võite tekitada väga koormava liikuse webiserveri ja MySQL-i vahel.';
$strDataDict = 'Andmesõnastik';
$strDataOnly = 'Ainult andmed';
$strDataPages = 'Lehed andmetega';
$strDBComment = 'Andmebaasi kommentaar: ';
$strDBCopy = 'Kopeeri andmebaas';
$strDbIsEmpty = 'Andmebaas tundub olevat tühi!'; 
$strDbPrivileges = 'Andmebaas-spetsiifilised privileegid';
$strDBRename = 'Nimeta andmebaas ümber';
$strDbSpecific = 'andmebaasipõhine';
$strDefaultEngine = '%s on vaikimisi varundusmootor sellele MySQL serverile.';
$strDefault = 'Vaikimisi';
$strDefaultValueHelp = 'Vaikimisi väärtuse jaoks sisestage lihtsalt üksik väärtus, ilma kaldkriipsudega varjestamata ning jutumärkideta, kasutades järgmist kirjakuju: a';
$strDefragment = 'Defrgamenteeri tabel';
$strDelayedInserts = 'Kasuta ajastatud lisamisi';
$strDeleteAndFlushDescr = 'See on parim tee, kuid privileegide taaslaadimine võib võtta aega.';
$strDeleteAndFlush = 'Kustutage kasutajad ja taaslaadige privileegid pärast seda.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDelete = 'Kustuta';
$strDeleteNoUsersSelected = 'Ühtegi kasutajat pole valitud kustutamiseks!';
$strDeleteRelation = 'Kustuta suhe';  
$strDeleting = 'Kustutan %s';
$strDelimiter = 'Eraldaja'; 
$strDelOld = 'Antud lehel on viiteid tabelitele mida enam ei ole. Kas te soovite kustutada need viited?';
$strDescending = 'Kahanev';
$strDescription = 'Kirjeldus';
$strDesigner = 'Kujundaja';
$strDictionary = 'sõnaraamat';
$strDirectLinks = 'Otselingid';  
$strDirtyPages = 'Mustad lehed';
$strDisabled = 'Keelatud';
$strDisableForeignChecks = 'Keela võõrvõtmete (foreign key) kontroll';
$strDisplayFeat = 'Kuva võimalused';
$strDisplayOrder = 'Näitamise järjekord:';
$strDisplayPDF = 'Näita PDF skeemi';
$strDoAQuery = 'Tee "päring näite järgi" (lühend: "%")';
$strDocSQL = 'DocSQL';  
$strDocu = 'Dokumentatsioon';
$strDoYouReally = 'Kas te tõesti tahate ';
$strDropDatabaseStrongWarning = 'Tähelepanu! Te HÄVITATE kogu andmebaasi!';
$strDrop = 'Kustuta';
$strDropUsersDb = 'Kustuta andmebaasid millel on samad nimed nagu kasutajatel.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDumpSaved = 'Väljavõte salvestati faili %s.';
$strDumpXRows = 'Päri %s rida alustades reast %s.';
$strDynamic = 'dünaamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmptyResultSet = 'MySQL tagastas tühja tulemuse (s.t. null rida).';
$strEmpty = 'Tühjenda';
$strEnabled = 'Lubatud';
$strEncloseInTransaction = 'Lisa eksport ülekandesse';
$strEndCut = 'LÕPETA LÕIGE';
$strEnd = 'Lõpp';
$strEndRaw = 'LÕPETA PUHAS';
$strEngineAvailable = '%s on saadaval selles MySQL serveris.';
$strEngineDisabled = '%s on keelatud selles MySQL serveris.';
$strEngines = 'Mootor';
$strEngineUnsupported = 'See MySQL server ei toeta %s varundusmootorit.';
$strEnglish = 'Inglise';
$strEnglishPrivileges = ' Märkus: MySQL privileegide nimed on ingliskeelsed ';
$strErrorInZipFile = 'Viga ZIP arhiivis:';
$strErrorRenamingTable = 'Viga tabeli nime %1$s muutimsel %2$s';  
$strError = 'Viga';
$strEscapeWildcards = 'Metamärgid _ ja % peaksid olema varjestatud märgiga \, kui soovite neid sisestada';
$strEsperanto = 'Esperanto';
$strEstonian = 'Eesti';
$strExcelEdition = 'Exceli versioon';
$strExecuteBookmarked = 'Käivita salvestatud päring';
$strExplain = 'Seleta SQL-i';
$strExport = 'Ekspordi';
$strExportImportToScale = 'Ekspordi/Impordi skaala';
$strExportMustBeFile = 'Valitud eksportimise tüüp tuleb salvestada faili!';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Ebaõnnestunud üritused';
$strFieldHasBeenDropped = 'Väli %s kustutatud';
$strFieldsEnclosedBy = 'Väljad ümbritsetud';
$strFieldsEscapedBy = 'Väljad varjatud';
$strFieldsTerminatedBy = 'Väljad eraldatud';
$strFields = 'Väljade arv';
$strField = 'Väli';
$strFileAlreadyExists = 'Fail %s on juba serveris olemas, muutke faili nime või kontrollige ülekirjutamise seadeid.';
$strFileCouldNotBeRead = 'Faili ei suudetud lugeda';
$strFileNameTemplateDescriptionDatabase = 'andmebaasi nimi';
$strFileNameTemplateDescription = 'Seda väärtust on tõlgendatud kasutades %1$sstrftime%2$s, sa võid kasutada sama aja(time) formaati. Lisaks tulevad ka järgnevad muudatused: %3$s. Ülejäänud teks jääb nii nagu ta on.';
$strFileNameTemplateDescriptionServer = 'serveri nimi';
$strFileNameTemplateDescriptionTable = 'tabeli nimi';
$strFileNameTemplate = 'Faili nime template';
$strFileNameTemplateRemember = 'jäta template meelde';
$strFileToImport = 'Imporditav Fail';
$strFixed = 'parandatud';
$strFlushPrivilegesNote = 'Märkus: phpMyAdmin võtab kasutajate privileegid otse MySQL privileges tabelist. Tabeli sisu võib erineda sellest, mida server hetkel kasutab, seda juhul kui olete käsitsi muudatusi teinud. Sellisel juhul peaksite te privileegid %staaslaadima%s enne jätkamist.';
$strFlushQueryCache = 'Tühjenda päringute vahemälu';
$strFlushTables = 'Tühjenda (sulge) kõik tabelid';
$strFlushTable = 'Ühtlusta tabelid ("FLUSH")';
$strFontSize = 'Fondi suurus';
$strForeignKeyError = 'Viga luues võõrvõtit (foreign key) (kontrolli admetüüpe)';
$strFormat = 'Formaat';
$strFormEmpty = 'Puuduv väärtus vormis !';
$strFreePages = 'Vabad lehed';
$strFullText = 'Täistekstid';
$strFunction = 'Funktsioon';
$strFunctions = 'Funktsioonid';  

$strGenBy = 'Genereerija ';
$strGeneralRelationFeat = 'Peamised seoste võimalused';
$strGenerate = 'Genereeri';
$strGeneratePassword = 'Genereeri parool';
$strGenTime = 'Tegemisaeg';
$strGeorgian = 'Gruusia';
$strGerman = 'Saksa';
$strGlobal = 'globaalne';
$strGlobalPrivileges = 'Globaalsed privileegid';
$strGlobalValue = 'Üldine väärtus';
$strGo = 'Mine';
$strGrantOption = 'Õigused';
$strGreek = 'Kreeka';
$strGzip = '"gzipitud"';

$strHandler = 'Töötleja';
$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima vähemalt ühe veeru kuvamiseks';
$strHebrew = 'Heebrea';
$strHelp = 'Abi';  
$strHide         = 'Peida';
$strHideShowAll = 'Peida/Näita kõik';
$strHideShowNoRelation = 'Peida/Näita tabelid millel puudub suhe'; 
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHostEmpty = 'Masin on tühi!';
$strHost = 'Masin';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungari';

$strIcelandic = 'Islandi';
$strId = 'ID';
$strIdxFulltext = 'Täistekst';
$strIgnoreDuplicates = 'Ignoreeri korduvaid ridasid';
$strIgnore = 'Ignoreeri';
$strIgnoreInserts = 'Kasutaja ignoreeritavaid lisamisi';
$strImportExportCoords = 'Impordi/Ekspordi kordinaadid PDF skeemile';
$strImportFiles = 'Importige failid';
$strImportFormat = 'Imporditud faili formaat';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import lõppetati edukalt, %d päringut käivitatud.';
$strIndexes = 'Indeksid';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndex = 'Indeks';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi tüüp&nbsp;:';
$strIndexWarningTable = 'Probleemid tabeli `%s` indeksitega';
$strInnoDBAutoextendIncrement = 'Automaatne suurenduse laiendus';
$strInnoDBAutoextendIncrementDesc = ' Automaatselt suurenev suurus mis lisatakse automaatselt suurenevale tabeliruumile kui see täitub.';
$strInnoDBBufferPoolSizeDesc = 'Mälupuhvri suurus mida InnoDB kasutab oma andmete ja indeksite puhverdamiseks.';
$strInnoDBBufferPoolSize = 'Puhverdusala suurus';
$strInnoDBDataFilePath = 'Andmefailid';
$strInnoDBDataHomeDir = 'Andmete kodukataloog';
$strInnoDBDataHomeDirDesc = 'Ühine kataloogi nimeosa kõigi InnoDB andmefailide jaoks.';
$strInnoDBPages = 'lehti';
$strInnoDBRelationAdded = 'InnoDB suhe lisatud';
$strInnodbStat = 'InnoDB staatus';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud rünnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertedRowId = 'Lisatud rea id:';
$strInsertedRows = 'Lisatud read:';
$strInsert = 'Lisa';
$strInternalNotNecessary = '* Sisene seos ei ole vajalik kui ta eksisteerib ka InnoDB-s.';
$strInternalRelationAdded = 'Sisemine suhe loodud'; 
$strInternalRelations = 'Sisesed seosed';
$strInUse = 'kasutusel';
$strInvalidAuthMethod = 'Vigane autoriseerimise meetod konfiguratsioonifailis:';
$strInvalidColumnCount = 'Veergude arv peab olema nullist suurem.';
$strInvalidColumn = 'Vigased välja veerud (%s) valitud!';
$strInvalidCSVFieldCount = 'Vigane väljade arv CSV sisendis real %d.';
$strInvalidCSVFormat = 'Vigane formaat CSV sisendis real %d.';
$strInvalidCSVParameter = 'Vigane parameeter CSV importimisel: %s';
$strInvalidDatabase = 'Vigane andmebaas';  
$strInvalidFieldAddCount = 'Peate lisama vähemalt ühe välja.';
$strInvalidFieldCount = 'Tabelil peab olema vähemalt üks väli.';
$strInvalidLDIImport = 'See plugin ei toeta pakitud importe!';
$strInvalidRowNumber = '%d ei ole õige reanumber.';
$strInvalidServerHostname = 'Vigane hostname serverile %1$s. Palun kontrolli seadeid.';
$strInvalidServerIndex = 'Vigane serveri indeks: "%s"';
$strInvalidTableName = 'Vigane tabeli nimi'; 

$strJapanese = 'Jaapani';
$strJoins = 'Liited';
$strJumpToDB = 'Hüppa andmebaasile &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Kustutatud&quot; kasutajad võivad ikka veel ligi pääseda serverile, kuni privileegid pole uuesti sisse loetud.';
$strJustDelete = 'Lihtsalt kustutage kasutajad privilege tabelist.';

$strKeepPass = 'Ärge muutke parooli';
$strKeyCache = 'Võtme vahemälu';
$strKeyname = 'Võtme nimi';
$strKill = 'Tapa';
$strKnownExternalBug = 'See %s funktionaalsus on mõjutatud tuntud viga, vaata %s';
$strKorean = 'Korea';

$strLandscape = 'Laipilt';
$strLanguage = 'Keel';  
$strLanguageUnknown = 'Tundmatu keel: %1$s.';
$strLatchedPages = 'Lukustatud lehed';
$strLatexCaption = 'Tabeli seletus';
$strLatexContent = 'Tabeli __TABLE__ sisu';
$strLatexContinuedCaption = 'Jätkuva tabeli seletus';
$strLatexContinued = '(jätkub)';
$strLatexIncludeCaption = 'Lisa tabeli seletus';
$strLatexLabel = 'Nimetuse võti';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Tabeli __TABLE__ struktuur';
$strLatvian = 'Läti';
$strLDI = 'CSV kasutades LOAD DATA';
$strLDILocal = 'kasuta LOCAL võtmesõna';
$strLengthSet = 'Pikkus/Väärtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLinesTerminatedBy = 'Read lõpetatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLithuanian = 'Leedu';
$strLocalhost = 'Lokaalne';
$strLocationTextfile = 'tekstifaili asukoht';
$strLoginInformation = 'Logimise informatsioon';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi välja';
$strLogPassword = 'Parool:';
$strLogServer = 'Server';
$strLogUsername = 'Kasutajanimi:';
$strLongOperation = 'See tegevus võib võtta kaua aega. Jätkan?';

$strMaxConnects = 'maks. parallel ühendusi';
$strMaximalQueryLength = 'Loodud päringu maksimaalne pikkus';
$strMaximumSize = 'Maksimaalne suurus: %s%s';
$strMbExtensionMissing = 'Ei leitud mbstring PHP lisa ja tundub, et te kasutate mitmebaidilist tähetabelit. Ilma mbstring lisata ei suuda phpMyAdmin poolitada teksti korrektselt ja tulemus võib olla ootustele mittevastav.';
$strMbOverloadWarning = 'Te olete lubanud mbstring.func_overload oma PHP konfiguratsioonis. See seade ei ühildu phpMyAdminiga ja võib osade andmete kadumist põhjustada!';
$strMIME_available_mime = 'Olemasolevad MIME-tüübid';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Kirjeldus';
$strMIME_MIMEtype = 'MIME-tüüp';
$strMIME_nodescription = 'Selle transformatsiooni jaoks ei ole kirjeldust.<br />Palun küsige autorilt, mida %s teeb.';
$strMIME_transformation = 'Browseri transformatsioon';
$strMIME_transformation_note = 'Transformatsiooni võimaluste ja tema MIME-tüübi transformatsiooni nimekirjaks vajutage %stransformatsiooni kirjeldusele%s';
$strMIME_transformation_options_note = 'Palun sisestage transformatsiooniks vajalikud väärtused, kasutades järgmist formaati: \'a\', 100, b,\'c\'...<br />Kui teil on vaja edastada kaldkriips ("\") või ülakoma ("\'") nende väärtuste seas, varjestage see tagurpidi kaldkriipsuga (näiteks \'\\\\xyz\' või \'a\\\'b\').';
$strMIME_transformation_options = 'Transformeerimise seaded';
$strMIMETypesForTable = 'MIME TÜÜBID TABELILE';
$strMIME_without = 'MIME-tüübid kursiivis ei oma eraldi transofrmatsiooni funktsiooni';
$strModifications = 'Muutused salvestatud';
$strModifyIndexTopic = 'Muuda indeksit';
$strModify = 'Muuda';
$strMoveMenu = 'Liiguta menüü';  
$strMoveTableOK = 'Tabel %s viidu üle andmebaasi %s.';
$strMoveTableSameNames = 'Ei saa tabelit iseendasse liigutada!';
$strMoveTable = 'Vii tabel üle (andmebaas<b>.</b>tabel):';
$strMultilingual = 'mitmekeelne';
$strMyISAMDataPointerSize = 'Andmeviida suurus';
$strMyISAMDataPointerSizeDesc = 'Vaikimisi viida suurus baitides, mida kasutatakse CREATE TABLE käsuga MyISAM tabelite jaoks kui MAX_ROWS seade on määramata.';
$strMyISAMMaxExtraSortFileSizeDesc = 'Kui ajutine fail mida kasutatakse kiire MyISAM indeksi loomiseks on suurem kui kasutada siin määratud võtmecache suurust, siis eelistage võtmecache meetodit.';
$strMyISAMMaxExtraSortFileSize = 'Maksimaalne failisuurus ajutiste failide jaoks indeksi genereerimisel';
$strMyISAMMaxSortFileSizeDesc = 'Maksimaalne failisuurus MySQL-i ajutise faili jaoks mida kasutatakse MyISAM indeksi uuesti genereerimiseks (REPAIR TABLE, ALTER TABLE või LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimaalne suurus ajutiste sorteeringufailide jaoks';
$strMyISAMRecoverOptions = 'Automaatne taastamine';
$strMyISAMRecoverOptionsDesc = 'Automaatne taastamine purunenud MyISAM tabelitele, aktiveeritakse võtmega --myisam-recover serveri käivitamisel.';
$strMyISAMRepairThreadsDesc = 'Kui see väärtus on suurem kui 1 siis MyISAM tabeli indeksid luuakse paralleelselt (iga indeks oma lõimus) sorteerimise teel parandamise ajal.';
$strMyISAMRepairThreads = 'Paranda lõimud';
$strMyISAMSortBufferSizeDesc = 'Puhver mis hõivatakse kui sorteeritakse MyISAM indekseid REPAIR TABLE ajal või kui luuakse indekseid CREATE INDEX või ALTER TABLE käskudega.';
$strMyISAMSortBufferSize = 'Sordi puhvri suurus';
$strMySQLCharset = 'MySQLi tähetabel';
$strMysqlClientVersion = 'MySQL kliendi versioon';
$strMySQLConnectionCollation = 'MySQL ühenduse kollatsioon';
$strMySQLSaid = 'MySQL ütles: ';
$strMySQLShowProcess = 'Näita protsesse';
$strMySQLShowStatus = 'Näita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'Näita MySQL süsteemseid muutujaid';

$strName = 'Nimi';
$strNext = 'Järgmine';
$strNoActivity = 'Ebaaktiivne %s sekundit või rohkem, palun sisenege uuesti';
$strNoDatabases = 'Pole andmebaase';
$strNoDatabasesSelected = 'Ühtegi andmebaasi ei ole valitud.';
$strNoDataReceived = 'Andmeid ei saadud importimisel. Võimalik et faili nime ei saadetud, või faili suurus ületab maksimaalset suurust lubatud PHP seadetes. Vaata FAQ 1.16.';
$strNoDescription = 'pole kirjeldust';
$strNoDetailsForEngine = 'Detailne seisuinformatsioon antud varundusmootori kohta puudub.';
$strNoDropDatabases = '"DROP DATABASE" käsud keelatud.';
$strNo = 'Ei';
$strNoExplain = 'Jäta SQL-i seletamine vahele';
$strNoFilesFoundInZip = 'Ei leidnud ühtegi faili ZIP arhiivist!';
$strNoFrames = 'phpMyAdmin on sõbralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNone = 'Pole';
$strNoOptions = 'Sellel formaadil pole seadeid';
$strNoPassword = 'Ilma paroolita';
$strNoPermission = 'Webiserver ei oma õigusi , et salvestada fail %s.';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma ühtegi privileegi';
$strNoRights = 'Teil pole piisavalt õigusi, et hetkel siin olla!';
$strNoRowsSelected = 'Ridu pole valitud';
$strNoSpace = 'Liiga vähe kettaruumi, et salvestada fail %s.';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoThemeSupport = 'Teemade tugi puudub, palun kontrollige oma seadeid ja/või oma teemade kataloogi %s.';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud või ei eksisteeri %s';
$strNoUsersFound = 'Ei leitud ühtegi kasutajat.';
$strNoValidateSQL = 'Jäta SQL-i kontroll vahele';
$strNull = 'Null';
$strNumberOfFields = 'Väljade arv';
$strNumberOfTables = 'Tabelite arv';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';
$strNumTables = 'Tabelid';

$strOK = 'Korras';
$strOpenDocumentSpreadsheet = 'Ava dokumendi arvutustabel';
$strOpenDocumentText = 'Ava dokumendi tekst';  
$strOpenNewWindow = 'Ava uus phpMyAdmin aken';
$strOperations = 'Tegevused';
$strOperator = 'Operaator';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOr = 'või';
$strOverhead = 'Ülejääv';
$strOverwriteExisting = 'Kirjuta olemasolev(ad) fail(id) üle';

$strPageNumber = 'Lehenumber:';
$strPagesToBeFlushed = 'Lehed ühtlustamiseks';
$strPaperSize = 'Paberi suurus';
$strPartialImport = 'Osaline import';
$strPartialText = 'Lühendatud tekstid';
$strPasswordChanged = 'Kasutaja %s parool vahetati õnnestunult.';
$strPasswordEmpty = 'Parool on tühi!';
$strPasswordHashing = 'Parooli tärkimine';
$strPasswordNotSame = 'Paroolid ei ühti!';
$strPassword = 'Parool';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehekülg %s';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genereerib aruande sisaldades andmeid üksikust tabelist)';
$strPDFReportTitle = 'Raporti pealkiri';
$strPerHour = 'tunni kohta';
$strPerMinute = 'minutis';
$strPerSecond = 'sekundis';
$strPersian = 'Pärsia';
$strPhoneBook = 'telefoniraamat';
$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on tõsine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPhp = 'Loo PHP kood';
$strPHPVersion = 'PHP versioon';
$strPleaseSelectPrimaryOrUniqueKey = 'Palun vali primaarne või unkaalne võti'; 
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis määratud olema!';
$strPmaWiki = 'phpMyAdmin wiki';  
$strPolish = 'Poola';
$strPortrait = 'Portreepilt';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimaryKeyHasBeenDropped = 'Primaarne võti kustutatud';
$strPrimaryKeyName = 'Primaarse võtme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse võtme nimi!)';
$strPrimary = 'Primaarne';
$strPrint = 'Prindi';
$strPrintViewFull = 'Trükivaade (täispikkade tekstidega)';
$strPrintView = 'Trükivaade';
$strPrivDescAllPrivileges = 'Sisaldab kõiki privileege peale GRANT.';
$strPrivDescAlter = 'Lubab muuta olemasolevate tabelite struktuure.';
$strPrivDescAlterRoutine = 'Lubabu salvestatud rutiinide muutmise ja kustutamise.';
$strPrivDescCreateDb = 'Lubab luua uusi andmebaase ja tabeleid.';
$strPrivDescCreateRoutine = 'Lubab salvestatud rutiinide loomise.';
$strPrivDescCreateTbl = 'Lubab luua uusi tabeleid.';
$strPrivDescCreateTmpTable = 'Lubab luua ajutisi tabeleid.';
$strPrivDescCreateUser = 'Lubab kasutajakontode loomise, kustutamise ja muutmise.';
$strPrivDescCreateView = 'Lubab uute vaadete loomist.';
$strPrivDescDelete = 'Lubab kustutada infot.';
$strPrivDescDropDb = 'Lubab kustuada andmebaase ja tabeleid.';
$strPrivDescDropTbl = 'Lubab kustutada tabeleid..';
$strPrivDescExecute5 = 'Lubab salvestatud rutiinide käivituse.';
$strPrivDescExecute = 'Lubab käivitada salvestatud protseduure; Ei oma mingit effekti antud MySQL versioonis.';
$strPrivDescFile = 'Lubab andmete eksportimist faili ja andmete importimist failidest.';
$strPrivDescGrant = 'Lubab lisada kasutajaid ja privileege ilma privileges tabelit taaskäivitamata.';
$strPrivDescIndex = 'Lubab luua ja kustutada indekseid.';
$strPrivDescInsert = 'Lubab lisada ja muuta infot.';
$strPrivDescLockTables = 'Lubab lukustada tabeleid aktiivse päringu tarbeks.';
$strPrivDescMaxConnections = 'Limiteerib ühenduste arvu tunnis kasutaja jaoks.';
$strPrivDescMaxQuestions = 'Limiteerib päringute arvu tunnis kasutaja jaoks.';
$strPrivDescMaxUpdates = 'Limiteerib käskude, mis muudavad suvalist tabelit või andmebaasi, arvu tunnis kasutaja jaoks';
$strPrivDescMaxUserConnections = 'Piirab ühenduste arvu mida kasutajal võib korraga olla.';
$strPrivDescProcess3 = 'Lubab tappa kasutajate protsesse.';
$strPrivDescProcess4 = 'Lubab vaadata täielikult päringuid protsessitabelis.';
$strPrivDescReferences = 'Ei oma antud MySQL versioonis mingit effekti.';
$strPrivDescReload = 'Lubab taaslaadida serveri seadmeid ja puhastada serveri cachet.';
$strPrivDescReplClient = 'Lubab kasutajal küsida kus on slaved/masterid.';
$strPrivDescReplSlave = 'Vajalik slavede paljundamiseks.';
$strPrivDescSelect = 'Lubab lugeda infot.';
$strPrivDescShowDb = 'Annab ligipääsu kogu andmebaasilistingule.';
$strPrivDescShowView = 'Lubab SHOW CREATE VIEW päringute käivitamise.';
$strPrivDescShutdown = 'Lubab serverit maha lasta.';
$strPrivDescSuper = 'Lubab ühenduda, isegi kui maksimaalne ühenduste arv on saavutatud; Vajalik enamike administratiivsete operatsioonide jaoks, nagu globaalsete muutujate seadmine või teiste kasutajate ühenduste tapmine.';
$strPrivDescUpdate = 'Lubab muuta infot.';
$strPrivDescUsage = 'Mitte ühtegi privileegi.';
$strPrivileges = 'Privileegid';
$strPrivilegesReloaded = 'Privileegid taaslaeti edukalt.';
$strProcedures = 'Toimingud';
$strProcesses = 'Protsessid';
$strProcesslist = 'Protsessinimekiri';
$strProtocolVersion = 'Protokolli versioon';
$strPutColNames = 'Pange väljade nimed esimesse ritta';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Päring näite järgi';
$strQueryCache = 'Päringute vahemälu';
$strQueryFrame = 'Päringuaken';
$strQueryOnDb = 'SQL-päring andmebaasist <b>%s</b>:';
$strQueryResultsOperations = 'Päringu tulemuste tegevused';
$strQuerySQLHistory = 'SQL-ajalugu';
$strQueryStatistics = '<b>Päringu statistika</b>: Alates stardist, %s päringut on saadetud serverile.';
$strQueryTime = 'Päring kestis %01.4f sek';
$strQueryType = 'Päringu tüüp';
$strQueryWindowLock = 'Antud päringut mitte muuta väljaspool akent.';

$strReadRequests = 'Pöördumised lugemiseks';
$strReceived = 'Saadud';
$strRecommended = 'soovituslik';  
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli pärinevust:';
$strRefresh = 'Uuenda';
$strRelationalSchema = 'Seoseskeem';
$strRelationDeleted = 'Suhe kustutatud'; 
$strRelationNotWorking = 'Lisavõimalused töötamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationsForTable = 'SEOSED TABELILE';
$strRelations = 'Suhted';
$strRelationView = 'Pärinevuse vaade';
$strReloadingThePrivileges = 'Taaslaen privileege';
$strReload = 'Lae uuesti';  
$strReloadPrivileges = 'Lae privileegid uuesti';
$strRemoveSelectedUsers = 'Eemalda valitud kasutajad';
$strRenameDatabaseOK = 'Andmebaas %s on ümber nimetatud %s';
$strRenameTable = 'Nimeta tabel ümber';
$strRenameTableOK = 'Tabel %s on ümber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplaceNULLBy = 'Asenda NULL ';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReplication = 'Tiraeerimine';
$strReset = 'Tühista';
$strResourceLimits = 'Ressursilimiidid';
$strReType = 'Sisesta uuesti';
$strRevokeAndDeleteDescr = 'Kasutajatel on ikka veel USAGE privileeg, kuni privileegid pole taaslaetud.';
$strRevokeAndDelete = 'Eemalda kõik aktiivsed privileegid kasutajatelt ning kustuta nad pärast seda.';
$strRevokeMessage = 'Te võtsite tagasi privileegid %s-lt';
$strRevoke = 'Võta tagasi';
$strRomanian = 'Rumeenia';
$strRowLength = 'Rea pikkus';
$strRowsFrom = 'read alates';
$strRowSize = ' rea suurus ';
$strRowsModeFlippedHorizontal = 'horisontaalne (pööratud päis)';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'näita %s and korda pealkirju iga %s järel';
$strRowsModeVertical = 'vertikaalselt';
$strRows = 'Ridu';
$strRowsStatistic = 'Rea statistika';
$strRunning = 'jookseb masinas %s';
$strRunQuery = 'Lae päring';
$strRunSQLQueryOnServer = 'Käivita SQL käsk/käsud Masinas %s';
$strRunSQLQuery = 'Päri SQL päring(uid) andmebaasist %s';
$strRussian = 'Vene';

$strSaveOnServer = 'Salvestage serverisse kataloogi %s';
$strSavePosition = 'Salvesta positsioon';  
$strSave = 'Salvesta';
$strScaleFactorSmall = 'Skalaarfaktor on liiga väike, et skeem mahuks ühele lehele.';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'Sõna(d) või väärtus(ed) otsinguks (lühend: "%"):';
$strSearchOption1 = 'vähemalt üks sõnadest';
$strSearchOption2 = 'kõik sõnadest';
$strSearchOption3 = 'täpne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearch = 'Otsi';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSecretRequired = 'Konfiguratsioonifail nõuab nüüd salajast võtmesõna (blowfish_secret).';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'Märgista kõik';
$strSelectBinaryLog = 'Valige binaarne logi vaatamiseks';
$strSelectFields = 'Vali väljad (vähemalt üks):';
$strSelectForeignKey = 'Vali võõrvõti(Foreign Key)';  
$strSelectNumRows = 'päringus';
$strSelectReferencedKey = 'Vali eelistus võti (referenced key)';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strSent = 'Saadetud';
$strServerChoice = 'Serveri valik';
$strServerNotResponding = 'Server ei vasta';
$strServer = 'Server';
$strServers = 'Serverid';  
$strServerStatusDelayedInserts = 'Ajastatud lisamised';
$strServerStatus = 'Jooksev informatsioon';
$strServerStatusUptime = 'See MySQL server on käinud %s. Käivitusaeg %s.';
$strServerTabVariables = 'Muutujad';
$strServerTrafficNotes = '<b>Serveri liiklus</b>: Need tabelid näitavad võrguliikluse statistikat selle MySQL serveri jaoks alates tema käivitamisest.';
$strServerVars = 'Serveri muutujad ja seaded.';
$strServerVersion = 'Serveri versioon';
$strSessionValue = 'Sessiooni väärtus';
$strSetEnumVal = 'Kui välja tüüp on "enum" või "set", palun sisestage väärtused kasutades järgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") või ülakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (näiteks \'\\\\xyz\' või \'a\\\'b\').';
$strShowAll = 'Näita kõiki';
$strShowColor = 'Näita värvi';
$strShowDatadictAs = 'Andmesõnastiku formaat';
$strShowFullQueries = 'Näita täispikkasid päringuid';
$strShowGrid = 'Näita võrgustiku';
$strShowHideLeftMenu = 'Näita/Peida vasak menüü';
$strShowingBookmark = 'Näitan järjehoidjat';
$strShowingPhp = 'Näitan PHP koodina'; 
$strShowingRecords = 'Näita ridu';
$strShowingSQL = 'Näitan SQL päringut';  
$strShow = 'Näita';
$strShowOpenTables = 'Näita avatud tabeleid';
$strShowPHPInfo = 'Näita PHP informatsiooni';
$strShowSlaveHosts = 'Näita alluvaid(slave)';
$strShowSlaveStatus = 'Näita alluvate(slave) staatust';
$strShowStatusBinlog_cache_disk_useDescr = 'Ülekannete number mida kasutab ajutise binaar logi vahemälu kuid ületab binlog_cache_size suurust ja kasutatakse ajutist faili et salvestada ülekande Käske (päringuid).';
$strShowStatusBinlog_cache_useDescr = 'Ülekannete number mis kasutasid ajutist binaar logi vahemälu.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Ajutiste tabelite arv, loodud automaatselt serveri poolt, päringuid käivitades. Kui Created_tmp_disk_tables on suur, sa võid tahta suurendada tmp_table_size väärtust et olla mälul baseeruv mitte kettal.';
$strShowStatusCreated_tmp_filesDescr = 'Mitu ajutist faili mysqld on loonud.';
$strShowStatusCreated_tmp_tablesDescr = 'Ajutiste mälul baseeruvate tabelite arv, loodud automaatselt serveri poolt, päringuid käivitades.';
$strShowStatusDelayed_errorsDescr = 'Mitu rida on loodud käsuga INSERT DELAYED milles toimus viga (arvatavasti korduv võti).';
$strShowStatusDelayed_insert_threadsDescr = 'Mitu INSERT DELAYED töötleja (handler) lõimu on kasutuses. Iga erinev tabel mis kasutab INSERT DELAYED saab oma lõimu.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED ridasid loodud.';
$strShowStatusFlush_commandsDescr  = 'FLUSH käskude arv.';
$strShowStatusHandler_commitDescr = 'Sisemiste COMMIT käskude arv.';
$strShowStatusHandler_deleteDescr = 'Mitu korda rida kustutati tabelist.';
$strShowStatusHandler_discoverDescr = 'MySQLi server võib küsida "NDB Cluster storage engine" (klaster salvestus mootor)  kas ta teab tabelit etteantud nimega. Seda kutsutakse avastus(discovery). Handler_discover annab mitu korda on tabel leitud.';
$strShowStatusHandler_read_firstDescr = 'Mitu korda loeti esimene tulemus indeksist. Kui see on suur, see soovitab et server teeb palju täis indeksi skaneerimist; näitkes, SELECT col1 FROM foo, arvates et col1 indekseeritud.';
$strShowStatusHandler_read_keyDescr = 'Mitu korda loeti rida võtme järgi. Kui see on suur, see on hea näitaja et sinu päringud ja tabelid on korralikult indekseeritud.';
$strShowStatusHandler_read_nextDescr = 'Mitu korda saadi käsk lugeda võtme järgi järgmine rida. See on suurenev kui sa pärid indekseeritud piiratud välja või sa teed indeksi skaneerimist.';
$strShowStatusHandler_read_prevDescr = 'Mitu korda saadi käsk lugeda võtme järgi eelnev rida. See lugemise meetod on peamiselt kasutatud optimiseerimiseks ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Mitu korda saadi käsk lugeda kindel rida. See on suur kui sa teed palju päringuid mis vajavad tulemuse sorteerimist. Sa kasutad kindlasti päringuid mis vajavad MySQLi et skaneerida kogu tabelit või liited(joins) mis ei kasuta võtmeid korralikult.';
$strShowStatusHandler_read_rnd_nextDescr = 'Mitu korda saadi käsk lugeda järgmine rida andmefailist. See on suur kui sa teed palju tabeli skaneerimisi. Enamasti see soovitab et sinu tabelid pole korralikult indekseeritud või sinu päringud pole kirjutatud nii et võtta eeliseid sinu loodud indeksitest.';
$strShowStatusHandler_rollbackDescr = 'Mitu korda käivitati sisemine ROLLBACK lausung.';
$strShowStatusHandler_updateDescr = 'Mitu korda uuendati tabeli rida.';
$strShowStatusHandler_writeDescr = 'Mitu korda lisati uus rida tabelisse.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Mitu lehekülge sisaldab andmeid (puhast või musta).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Mitu lehekülge on mustad.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Mitu puhvri lehekülge on määratud puhastamisele.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Mitu puu lehekülge.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Mitu lukus lehte on InnoDB puhvris. Need lehed on hetkel lugemisel või kirjutamisel ja pole võimalik puhastada või kustutada mingil põhjusel.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Mitu lehte on hetkel kasutuses kuna nad reserveeritud nagu rea lukustus või kohanemisvõimeline indeks. Seda summat saab ka arvutada nii Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Kogu puhvris suurus, lehtedes.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Mitu InnoDB juhuslikku(random) ette-lugemisi on töös. See juhtub kui päring on skaneerida suur osa tabelist kuid juhuslikus järjekorras.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Mitu InnoDB järjestikku ette-lugemisi on töös. See juhtub kui InnoDB teeb järjestikulist kogu tabeli skaneerimist.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Mitu loogilist lugemist InnoDB on teinud.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Mitu loogilist lugemist InnoDB polnud võimalik puhvris poolt rahuldada ja tegi üksiku lehe lugemise.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Tavaliselt, kirjutab InnoDB puhvri taustal. Kuid, kui vajalik kirjutada leht ja ühtegi puhast lehte pole saadaval, on vajalik oodata et lehed oleksid enne ühtlustatud. See This loendur loeb kõiki neid ootamisi. Kui puhvri suurus on seatud korralikult, se number peaks olema väike.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Mitu korda kirjutas InnoDB puhvrisse.';
$strShowStatusInnodb_data_fsyncsDescr = 'Mitu fsync() operatsiooni siiani.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Mitu hetkel ootel fsync() operatsiooni.';
$strShowStatusInnodb_data_pending_readsDescr = 'Mitu ootel lugemist.';
$strShowStatusInnodb_data_pending_writesDescr = 'Mitu ootel kirjutamist.';
$strShowStatusInnodb_data_readDescr = 'Suurus kui palju andmeid on loetud siiani, baitides.';
$strShowStatusInnodb_data_readsDescr = 'Mitu korda loetud.';
$strShowStatusInnodb_data_writesDescr = 'Mitu korda andmeid kirjutati.';
$strShowStatusInnodb_data_writtenDescr = 'Suurus palju andmeid on kirjutatud, baitides.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Mitu korda tehti topeltkirjutamist ja mitu lehte on kirjutatud just sellel põhjusel.';
$strShowStatusInnodb_dblwr_writesDescr = 'Mitu korda tehti topeltkirjutamise kirjutamist ja mitu lehte on kirjutatud just sellel põhjusel.';
$strShowStatusInnodb_log_waitsDescr = 'Mitu ootamist on olnud sellepärast et logi puhver oli liiga väike ja pidi ootama enne ühtlustamist et jätkata.';
$strShowStatusInnodb_log_write_requestsDescr = 'Mitu logi kirjutamise soovi.';
$strShowStatusInnodb_log_writesDescr = 'Mitu füüsilist kirjutamist logi faili.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Mitu fsyncs kirjutamist tehtud logi faili.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Mitu ootel logi faili fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'ootel logifaili kirjutamisi.';
$strShowStatusInnodb_os_log_writtenDescr = 'Mitu baiti on kirjutatud logi faili.';
$strShowStatusInnodb_pages_createdDescr = 'Lehti loodud.';
$strShowStatusInnodb_page_sizeDescr = 'Sisse-kompileeritud InnoDB lehe suurus (vaikimisi 16KB). Paljud väärtused on loetud lehtedes; lehe suurus lubab neid lihtsalt arvutada baitidesse.';
$strShowStatusInnodb_pages_readDescr = 'Lehti loetud.';
$strShowStatusInnodb_pages_writtenDescr = 'Lehti kirjutatud.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Mitu rea lukustamist on hetkel ootel.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Keskimne aeg pärides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_timeDescr = 'Aeg mis on raisatud pärides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksimaalne aeg pärides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Mitu korda pidi rea lukustus ootama.';
$strShowStatusInnodb_rows_deletedDescr = 'Mitu rida kustutatud InnoDB tabelitest.';
$strShowStatusInnodb_rows_insertedDescr = 'Mitu rida lisati InnoDB tabelitesse.';
$strShowStatusInnodb_rows_readDescr = 'Mitu rida loetud InnoDB tabelitest.';
$strShowStatusInnodb_rows_updatedDescr = 'Mitu rida uuendati InnoDB tabelites.';
$strShowStatusKey_blocks_not_flushedDescr = 'Mitu võtme plokki on võtme vahemälus muutunud kui pole veel kettale kirjutatud. Tuntud nagu Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Mitu kasutamatta võtme plokki on võtme vahemälus. Sa saad kasutatda seda väärtust et teada saada kui palju võtme vahemälust on kasutuses.';
$strShowStatusKey_blocks_usedDescr = 'Mitu kasutatud plokki on võtme vahemälus. See väärtus näitab maksimaalse plokkide arvu mis on kunagi olnud kasutuses.';
$strShowStatusKey_read_requestsDescr = 'Mitu päringut et lugeda võtme plokk vahemälust.';
$strShowStatusKey_readsDescr = 'Mitu füüsilist lugemist lugeda võtme plokk kettalt. kui Key_reads on suur, siis sinu key_buffer_size näitaja on kindlasti väike. Vahemälus möödaminek on võimalik arvutada nii Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Mitu päringut et kirjutada võtme plokk vahemällu.';
$strShowStatusKey_writesDescr = 'Mitu füüsilist kirjutamist kirjutada võtme plokk kettale.';
$strShowStatusLast_query_costDescr = 'Viimase kompileeritud päringu arvuatud tulemus päringu optimiseerija vastu. Kasulik võrdlemaks erinevaid päringu plaane ühelt ja samalt päringult. Vaikimisi väärtus 0 tähendab et päring pole veel töödeldud.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Mitu rida on ootel INSERT DELAYED päringutes.';
$strShowStatusOpened_tablesDescr = 'Mitu tabelit on avatud. Avatud tabeleid on palju siis sinu tabeli vahemälus kindlasti liiga väike.';
$strShowStatusOpen_filesDescr = 'Mitu faili on avatud.';
$strShowStatusOpen_streamsDescr = 'Mitu voogu on hetkel avatud (enamasti logimiseks).';
$strShowStatusOpen_tablesDescr = 'Mitu tabelit on hetkel avatud.';
$strShowStatusQcache_free_blocksDescr = 'Vabad mälu plokid päringute vahemälus.';
$strShowStatusQcache_free_memoryDescr = 'Vaba mälu päringute vahemälus.';
$strShowStatusQcache_hitsDescr = 'Leitud Puhvrist.';
$strShowStatusQcache_insertsDescr = 'Mitu päringut on lisatud vahemällu.';
$strShowStatusQcache_lowmem_prunesDescr = 'Mitu päringut kustutati puhvrist et vabastada mälu uutele päringutele. See informatsioon aitab sind päringute-puhvri suuruse seadistamisel. Päringute vahemälu kasutab viimati kasutatud strateegiat(LRU) et otsustada millised päringud eemaldada puhvrist.';
$strShowStatusQcache_not_cachedDescr = 'Mitu mitte-puhverdatud päringut (pole salvestatud vahemällu, või sõltuvalt query_cache_type sätetest mitte puhverdatud).';
$strShowStatusQcache_queries_in_cacheDescr = 'Mitu päringut on registreeritud vahemälus.';
$strShowStatusQcache_total_blocksDescr = 'Plokkide koguarv päringute vahemälus.';
$strShowStatusReset = 'Nulli';
$strShowStatusRpl_statusDescr = 'See staatus on tõrkekindel tiraþeerimine (failsafe replication) (pole veel kasutuses).';
$strShowStatusSelect_full_joinDescr = 'Liited(joins) mis ei kasuta indekseid. Kui see näitaja on 0, peaksid ettevaatlikult kontrollima oma tabelites indekseid.';
$strShowStatusSelect_full_range_joinDescr = 'Liidete arv mida kasutati piirkonna otsimisel eelistatud tabelist.';
$strShowStatusSelect_range_checkDescr = 'Ilma võtmeta liidete(joins) arv mis konrollivad peale igat rida võtme kasutamist. (Kui see pole 0 siis peaksid ettevaatlikult kontrollima oma tabelite indekseid.)';
$strShowStatusSelect_rangeDescr = 'Liidete arv mida kasutati esimese tabeli piirides. (Pole eriti kriitiline kui see on väga suur.)';
$strShowStatusSelect_scanDescr = 'Liidete arv mis tegid täielikku skaneerimist esimesest tabelist.';
$strShowStatusSlave_open_temp_tablesDescr = 'Ajutiste tabelite arv mis on hetkel avatud alam-lõimu(replication slave) poolt.';
$strShowStatusSlave_retried_transactionsDescr = 'Kogusumma (alates käivitamisest) mitu korda tiraþeerimise(replication) SQL alam-lõim(replication slave) proovis ülekandeid.';
$strShowStatusSlave_runningDescr = 'Kui see on ON kui serveril on alam server(masin) mis on ühenduses masteriga.';
$strShowStatusSlow_launch_threadsDescr = 'Lõimude arv mis võtsid rohkem aega käivitamiseks kui slow_launch_time.';
$strShowStatusSlow_queriesDescr = 'Päringute arv mis võtsid rohkem aega kui long_query_time sekundites.';
$strShowStatusSort_merge_passesDescr = 'Edukate ühinemiste(merge) arv millega lühike algoritm on tegelenud. Kui see väärtuse on suur, sa peaksid mõtlema sort_buffer_size väärtuse suurendamist.';
$strShowStatusSort_rangeDescr = 'Sorteerimiste arv mis on tehtud piirkonna ulatuses.';
$strShowStatusSort_rowsDescr = 'Sorteritud ridade arv.';
$strShowStatusSort_scanDescr = 'Sorteerimiste arv mis on tehtud tabeli skaneerimist kasutades.';
$strShowStatusTable_locks_immediateDescr = 'Mitu korda tabeli lukustus jõustus koheselt.';
$strShowStatusTable_locks_waitedDescr = 'Mitu korda tabeli lukustus ei jõustunud koheselt ja pandi ootele. Kui see on suur ja jõudlusega on probleeme, sa peaksid optimiseerima oma päringuid või poolitama oma tabelid või kasutama tiraþeerimist(replication).';
$strShowStatusThreads_cachedDescr = 'Lõimude arv Lõimude vahemälus. Vahemälu kasutamist(hit) on võimalik arvutada nii Threads_created/Connections. Kui see on punane paksid suurendama thread_cache_size suurust.';
$strShowStatusThreads_connectedDescr = 'Hetkel avatud ühendusi.';
$strShowStatusThreads_createdDescr = 'Lõimude arv mis on loodud ühenduste haldamiseks. Kui Threads_created on suur siis suurenda thread_cache_size väärtust. (Tavaliselt see ei anna märgatavat kiiruse tõusu kui Lõimude teostus on korralik.)';
$strShowStatusThreads_runningDescr = 'Lõimude arv mis mis hetkel ei maga.';
$strShowTableDimension = 'Näita tabelite dimensiooni';
$strShowTables = 'Näita tabeleid';
$strShowThisQuery = ' Näita päringut siin uuesti ';
$strSimplifiedChinese = 'Lihtsustatud Hiina';
$strSingly = '(üksikult)';
$strSize = 'Suurus';
$strSkipQueries = 'Käske (päringuid) mida algusest vahele jätta';
$strSlovak = 'Slovaki';
$strSlovenian = 'Sloveenia';
$strSmallBigAll = 'Kõik Väikeseks/Suureks';  
$strSocketProblem = '(või kohaliku MySQL serveri soketid ei ole korrektselt seadistatud)';
$strSortByKey = 'Sorteeri võtme järgi';
$strSorting = 'Järjestamine';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumivõtt';
$strSpanish = 'Hispaania';
$strSplitWordsWithSpace = 'Sõnad on eraldatud tühikuga (" ").';
$strSQLCompatibility = 'SQL ühilduvus viis';
$strSQLExportType = 'Ekspordi tüüp';
$strSQLParserBugMessage = 'On võimalus, et te leidsite vea SQL parseris. Palun kontrollige oma päringut täpsemalt ja kontrollige, et jutumärgid/ülakomad oleks korrektselt lõpetatud. Veel on võimalik, et te loete sisse faili kus on binaarne info väljaspool varjestatud tekstiala. Samuti võiksite te proovida oma päringut MySQLi käsureal. MySQLi viga väljastatakse päringu all, kui seal tõesti on mõni viga, siis see võib aidata teil leida vea algpõhjuseid. Kui teil on peale seda ikka veel probleeme või kui mu parser keeldub töötamast ning MySQL käsurida töötab, siis palun vähendage oma päringuid üksiku päringuni, mis põhjustab probleeme ja sisestage vea raport koos viga põhjustanud päringuga LÕIGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL päringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea põhjust.';
$strSQLQuery = 'SQL-päring';
$strSQLResult = 'SQL tulemus';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutumärk/ülakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strStandInStructureForView = 'Sise-vaate struktuur';
$strStatCheckTime = 'Viimane vaatamine';
$strStatCreateTime = 'Loodud';
$strStatement = 'Parameerid';
$strStatisticsOverrun = 'Koormusega serveris, baitide lugeja võib lugeda vigadega (overrun), st. see statistika mida näitab MySQL server ei pruugi olla täpne.';
$strStatUpdateTime = 'Viimane muudatus';
$strStatus = 'Staatus';
$strStorageEngines = 'Varundusmootorid';
$strStorageEngine = 'Varundusmootor';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucExcelCSV = 'CSV MS Exceli jaoks';
$strStrucNativeExcel = 'Loomulikud MS Exceli andmed';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructureForView = 'Vaate (view) struktuur';  
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL päring täideti edukalt';
$strSum = 'Summa';
$strSwedish = 'Rootsi';
$strSwitchToDatabase = 'Mine kopeeritud andmebaasile';
$strSwitchToTable = 'Mine üle kopeeritud tabelile';

$strTableAlreadyExists = 'tabel %s on juba olemas!';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on tühi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s tühjendatud';
$strTableHasBeenFlushed = 'Tabel %s ühtlustatud';
$strTableIsEmpty = 'Tabel tundub olevat tühi!';  
$strTableMaintenance = 'Tabeli hooldus';
$strTableName = 'Tabeli nimi';  
$strTableOfContents = 'Sisukord';
$strTableOptions = 'Tabeli seaded';
$strTables = '%s tabel(it)';
$strTableStructure = 'Struktuur tabelile';
$strTable = 'Tabel';
$strTakeIt = 'võta see';
$strTblPrivileges = 'Tabel-spetsiifilised privileegid';
$strTempData = 'Ajutised andmed ';
$strTextAreaLength = ' Oma suuruse tõttu<br /> võib see väli olla mittemuudetav ';
$strThai = 'Tai';
$strThemeDefaultNotFound = 'Ei leia vaikimisi teemat %s!';
$strThemeNoPreviewAvailable = 'Eelvaade pole saadaval.';
$strThemeNotFound = 'Ei leia teemat %s!';
$strThemeNoValidImgPath = 'Ei leia pildi kataloogi teemale %s!';
$strThemePathNotFound = 'Ei leia kataloogi teemale %s!';
$strTheme = 'Teema / Stiil';
$strThisHost = 'Antud host';
$strThreads = 'Lõimud';
$strThreadSuccessfullyKilled = 'Protsess %s katkestati edukalt.';
$strTime = 'Aeg';
$strTimeoutInfo = 'Eelmine Import aegus, peale uuesti postitamist jätkub asukohast %d.';
$strTimeoutNothingParsed = 'Kuigi viimasel laadimisel andmeid ei töödeldud, see tähendab enamasti et phpMyAdmin pole võimeline Importi lõpetama, kui sa php skripti aega ei pikenda.';
$strTimeoutPassed = 'Skripti ajalimiit on ületatud, kui soovid importimist jätkata, palun lae sama fail uuesti ja import jätkub.';
$strToFromPage = 'Kuhu/Kust leht';  
$strToggleScratchboard = 'vaheta märkmetahvlit';
$strToSelectRelation = 'Et valida suhe, kliki :';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strTraditionalChinese = 'Traditsionaalne Hiina';
$strTraditionalSpanish = 'Traditsionaalne Hispaania';
$strTraffic = 'Liiklus';
$strTransactionCoordinator = 'Ülekande kordinaator';
$strTransformation_application_octetstream__download = 'Näita linki millega laadida alla välja binaarne info. Esimene seade on binaarse faili nimi. Teine seade on võimalik väljanimi tabelis mis sisaldab failinime. Kui te määrate teise seade siis peab esimene seade olema tühi tekst';
$strTransformation_application_octetstream__hex = 'Kuvab andmed kuueteistkümnend süsteemis. Valikuline Esimene parameeter seab kui tihti ruumi tehakse (vaikimisi 2 näkkamist).';
$strTransformation_image_jpeg__inline = 'Kuvab lingitud väikepildi; seaded: laius,kõrgus pikslites (hoiab alles originaalpildi laiuse-kõrguse suhte)';
$strTransformation_image_jpeg__link = 'Kuvab lingi sellele pildile (otsene binaarne allalaadimine, jne.).';
$strTransformation_image_png__inline = 'Vaata image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Näitab TIME, TIMESTAMP, DATETIME või numbrilist unix´i ajatempli välja formaaditud kuupäevana. Esimene valik on ajanihe (tundides) mis lisatakse ajatemplile (Vaikimisi: 0). Kasuta teist valikut et täpsustada kuupäeva formaat. Kolmas valik annab valida kas kuupäev kasutab kohalikku aega või UTC oma (kasuta "local" (kohalik) või "utc" stringe). Sellest tulenevalt, kuupäeva formaadil on teine väärtus - "local" väärtuse täpsustamiseks vaata dokumentatsiooni PHP strftime() funktsiooni kasutamise kohta ja  kasutades "utc" vaata gmdate() funtsiooni kasutamist.'; 
$strTransformation_text_plain__external = 'AINULT LINUXILE: Käivitab välise aplikatsiooni ja annab talle standard sisendisse ette välja sisu. Tagastab aplikatsiooni standard väljundi. Vaikimisi on selleks Tidy, et kuvada ilusti formaaditud HTML koodi. Turvariskide maandamiseks peate te käsitsi muutma faili libraries/transformations/text_plain__external.inc.php ja lisama sinna programmid mida te lasete käivitada. Esimene seade on siis kasutatava programmi number, teine seade on programmi parameetrid. Kui kolmas seade on 1 siis töödeldakse väljund funktsiooniga htmlspecialchars() (vaikimisi 1). Kui neljas seade on  1 pannakse NOWRAP sisu lahtrile nii, et kogu väljund kuvatakse ilma formaati muutmata(vaikimisi 1)';
$strTransformation_text_plain__formatted = 'Hoiab alles originaalset välja formaati. Ei varjestata.';
$strTransformation_text_plain__imagelink = 'Kuvab pildi ja lingi, väli sisaldab failinime; esimene seade on eelnev tekst nagu "http://domain.com/", teine seade on laius pikslites, kolmas on kõrgus.';
$strTransformation_text_plain__link = 'Kuvab lingi, väli sisaldab failinime; esimene seade on eelnev tekst näiteks "http://domain.com/", teine seade on nimi lingile.';
$strTransformation_text_plain__sql = 'Vormib SQL päringu tekstiks esile tõstetuna.';
$strTransformation_text_plain__substr = 'Näitab ainult osa tekstist. Esimene seade on määrang kust positsioonilt teie teksti kuva hakkab.(vaikimisi 0). Teine seade on kuipalju teksti tagastatakse, kui see tühjaks jätta, tagastatakse kogu allesjäänud tekst. Kolmas seade defineerib mis tekst lisatakse väljundi lõppu kui saadud tekst tagastatakse. (vaikimisi: ...) .';
$strTruncateQueries = 'Lühenda näidatavad päringud';
$strTurkish = 'Türgi';
$strType = 'Tüüp';

$strUkrainian = 'Ukraina';
$strUncheckAll = 'Puhasta kõik';
$strUnicode = 'Unikaalne';
$strUnique = 'Unikaalne';
$strUnknown = 'tundmatu';
$strUnselectAll = 'Puhasta kõik';
$strUnsupportedCompressionDetected = 'Proovisid laadida faili tundmatu pakkimisega (%s). Võimalik et toetus ei ole veel lisatud või on sinu seadetes keelatud.';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda päringut';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUpgrade = 'Te peaksite uuendama %s -i versioonini %s või uuemaks.';
$strUploadLimit = 'Te kindlasti proovisite laadida liiga suurt faili. Palun uuri dokumentatsiooni %sdocumentation%s selle limiidi seadmiseks.';
$strUploadsNotAllowed = 'Faile pole lubatud laadida sellesse serverisse.';  
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites või tabelinimedes';
$strUsedPhpExtensions = 'Kasutatud PHP laiendid';
$strUseHostTable = 'Kasuta host tabelit';
$strUserAlreadyExists = 'Kasutaja %s on juba olemas!';
$strUserEmpty = 'Kasutajanimi on tühi!';
$strUser = 'Kasutaja';
$strUserName = 'Kasutajanimi';
$strUserNotFound = 'Valitud kasutajat ei leitud privileegide tabelist.';
$strUserOverview = 'Kasutaja ülevaade';
$strUsersDeleted = 'Valitud kasutajad on õnnestunult kustutatud.';
$strUsersHavingAccessToDb = 'Kasutajad kellel on ligipääs &quot;%s&quot;';
$strUseTabKey = 'Kasutage TAB klahvi, et liikuda ühelt väärtuselt teisele või CTRL+nool, et liikuda noole suunas';
$strUseTables = 'Kasuta tabeleid';
$strUseTextField = 'Kasutage tekstivälja';
$strUseThisValue = 'Kasuta seda väärtust';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'Väärtus';
$strVar = 'Muutuja';
$strVersionInformation = 'Versiooni info';
$strViewDumpDatabases = 'Näita andmebaaside sisu (skeemi)';
$strViewDumpDB = 'Vaata andmebaasi väljundit (skeemi)';
$strViewDump = 'Vaata tabeli väljundit (skeemi)';
$strViewHasBeenDropped = 'Vaade %s on kustutatud';
$strViewMaxExactCount = 'Sellel vaatel on rohkem kui %s rida. Palun vaata %sdocumentation%s.';
$strView = 'Vaade';

$strWebServerUploadDirectoryError = 'Kataloog mille Te üleslaadimiseks sättisite ei ole ligipääsetav';
$strWebServerUploadDirectory = 'webiserveri üleslaadimiskataloogi';
$strWelcome = 'Tere tulemast %s';
$strWestEuropean = 'Lääne-Euroopa';
$strWildcard = 'metamärk';
$strWindowNotFound = 'Vajaliku sirvija akent ei suudetud uuendada. Võibolla Te olete peaakna sulgenud või Teie sirvija ei luba akendevahelist suhtlist tänu turvaseadetele.';
$strWithChecked = 'Valitud:';
$strWriteRequests = 'Pöördumised kirjutamiseks';
$strWrongUser = 'Vale kasutajanimi/parool. Ligipääs keelatud.';

$strXML = 'XML';

$strYes = 'Jah';

$strZeroRemovesTheLimit = 'Märkus: Märkides antud seaded 0 (null), eemaldate limiidi.';
$strZip = '"zipitud"';

// To translate:

$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate

$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate

$strToggleSmallBig = 'Toggle small/big';  //to translate

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
