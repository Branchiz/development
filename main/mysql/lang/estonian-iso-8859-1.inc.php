<?php
/* $Id: estonian-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
 * Translated by Marko Ellermaa, <marko.ellermaa@nlkp.net>
 * Previous translations by Alvar Soome <finsoft@users.sourceforge.net>
 *
 * March 2006: Several changes and fixes done (by Marko Ellermaa)
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('P�h', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'M�r', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';
$timespanfmt = '%s p�eva, %s tundi, %s minutit ja %s sekundit';

$strAbortedClients = 'Katkestatud';
$strAccessDeniedCreateConfig = 'Arvatav p�hjus on te pole veel loonud seadete faili. Soovitavalt v�id kasutada %1$ssetup script%2$s et seadistada.';
$strAccessDeniedExplanation = 'phpMyAdmin proovis �henduda MySQL serveriga ja server l�kkas �henduse tagasi. Te peaksite kontrollima serverit, kasutajanime ja parooli config.inc.php failis ning kontrollima, et need vastaks infole mis te saite oma MySQL serveri administraatori k�est.';
$strAccessDenied = 'Ligip��s keelatud';
$strAction = 'Tegevus';
$strAddAutoIncrement = 'Lisa AUTO_INCREMENT v��rtus';
$strAddClause = 'Lisa %s';  
$strAddConstraints = 'Lisa piirangud';
$strAddDeleteColumn = 'Lisa/Kustuta v�lja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddFields = 'Lisa %s v�li(jad)';
$strAddHeaderComment = 'Lisa vaba kommentaar p�isesse (\\n eraldab read)';
$strAddIntoComments = 'Lisa kommentaaridesse';
$strAddNewField = 'Lisa uus v�li';
$strAddPrivilegesOnDb = 'Lisa privileegid antud andmebaasile';
$strAddPrivilegesOnTbl = 'Lisa privileegid antud tabelile';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("WHERE" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida/read';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAdministration = 'Administreerimine';
$strAffectedRows = 'M�jutatud read:';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa j�rgmine uus rida';
$strAfterInsertNext = 'Muuda j�rgmist rida';
$strAfterInsertSame = 'Mine tagasi sellele lehele';
$strAfter = 'Peale %s';
$strAll = 'K�ik';
$strAllowInterrupt = 'Luba katkestada Import juhul kui skript leiab et ajalimiit on �letamisel. See v�ib olla hea viis suurte failide importimisel, kuigi v�ib katkestada �lekanded.';
$strAllTableSameWidth = 'kuva k�ik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnalyzeTable = 'Anal��si tabelit';
$strAnd = 'ja';
$strAndThen = 'ja siis';
$strAngularLinks = 'Nurgelised lingid'; 
$strAnIndex = 'Indeks lisati %s';
$strAnyHost = 'K�ik masinad';
$strAny = 'k�ik';
$strAnyUser = 'K�ik kasutajad';
$strApproximateCount = 'V�ib olla umbkaudne. Vaadake FAQ 3.11';
$strAPrimaryKey = 'Primaarne v�ti lisati %s';
$strArabic = 'Araabia';
$strArmenian = 'Armeenia';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli l�ppu';
$strAttr = 'Parameetrid';
$strAutomaticLayout = 'Automaatne v�ljund';

$strBack = 'Tagasi';
$strBaltic = 'Balti';
$strBeginCut = 'ALUSTA L�IGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - �rge muutke';
$strBinaryLog = 'Binaarne logi';
$strBinLogEventType = 'S�ndmuse t��p';
$strBinLogInfo = 'Informatsioon';
$strBinLogName = 'Logi nimi';
$strBinLogOriginalPosition = 'Originaal positioon';
$strBinLogPosition = 'Positsioon';
$strBinLogServerId = 'Serveri ID';
$strBookmarkAllUsers = 'Anna k�ikidele kasutajatele juurdep��s sellele j�rjehodjale';
$strBookmarkCreated = 'J�rjehoidja %s loodud';
$strBookmarkDeleted = 'J�rjehodja kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'J�rjehodjaga SQL p�ring';
$strBookmarkReplace = 'Kirjuta samanimeline j�rjehoidja �le';
$strBookmarkThis = 'Lisa see SQL p�ring j�rjehoidjasse';
$strBookmarkView = 'Vaata ainult';
$strBrowseDistinctValues = 'Sirvi erinevaid v��rtusi';
$strBrowseForeignValues = 'Vaata v�liseid v��rtuseid';
$strBrowse = 'Vaata';
$strBufferPoolActivity = 'Puhverdusala aktiivsus';
$strBufferPool = 'Puhverdusala';
$strBufferPoolUsage = 'Puhverdusala kasutamine';
$strBufferReadMissesInPercent = 'Lugemis vigasid %';
$strBufferReadMisses = 'Lugemis vigasid';
$strBufferWriteWaitsInPercent = 'Kirjutamine ootab %';
$strBufferWriteWaits = 'Kirjutamine ootab';
$strBulgarian = 'Bulgaaria';
$strBusyPages = 'H�ivatud lehed';
$strBzError = 'phpMyAdmin ei suutnud pakkida seda andmebaasiv�ljundit kuna Bz2 moodul on vigane selles PHP versioonis. Me soovitame tungivalt oma phpMyAdmini konfiguratsioonifailis panna lipu <code>$cfg[\'BZipDump\']</code> v��rtuseks <code>FALSE</code>. Kui te soovite kasutada Bz2 pakkimist peaksite te oma PHP versiooni uuendama viimasele versioonile. Lugege PHP vea %s raportit t�psemaks infoks.';
$strBzip = '"bzipitud"';

$strCalendar = 'Kalender';
$strCancel = 'Katkesta'; 
$strCanNotLoadExportPlugins = 'Viga eksportimis moodulite laadimisel, palun kontrolli seadeid!';
$strCanNotLoadImportPlugins = 'Pole v�imalik Importida mooduleid (plugins), palun kontrolli seadeid!';
$strCannotLogin = 'Ei suuda MySQL serverisse logida';
$strCantLoad = 'ei suutnud lugeda moodulit %s,<br />palun kontrollige PHP konfiguratsiooni';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv v�i recode moodulit mida on vaja t�hetabeli konvertimiseks, konfigureerige PHP-d nii, et see sisaldaks antud mooduleid v�i keelake t�hetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d v�i libiconvi v�i recode_string funktsiooni kuigi moodul on installitud Kontrollige oma PHP konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCaseInsensitive = 't�stutundetu';
$strCaseSensitive = 't�stutundlik';
$strCentralEuropean = 'Kesk-Euroopa';
$strChangeCopyModeCopy = '... hoia vana alles.';
$strChangeCopyModeDeleteAndReload = ' ... kustuta vana kasutajate tabelist ja taaslae privileegid p�rast seda.';
$strChangeCopyModeJustDelete = ' ... kustuta vana kasutajate tabelist.';
$strChangeCopyMode = 'Loo uus kasutaja samade privileegidega ja ...';
$strChangeCopyModeRevoke = ' ... kanna k�ik aktiivsed privileegid �le vanast ja kustuta see p�rast.';
$strChangeCopyUser = 'Vaheta logimisinformatsiooni / Kopeeri kasutaja';
$strChangeDisplay = 'Vali v�li mida kuvada';
$strChange = 'Muuda';
$strChangePassword = 'Muuda parooli';
$strCharsetOfFile = 'Faili t�hetabel:';
$strCharsetsAndCollations = 'T�hetabelid ja m��rangud';
$strCharsets = 'T�hetabelid';
$strCharset = 'T�hetabel';
$strCheckAll = 'M�rgista k�ik';
$strCheckOverhead = 'Kontrolli �lekulusid';
$strCheckPrivs = 'Kontrollige privileege';
$strCheckPrivsLong = 'Kontrolli privileege andmebaasile &quot;%s&quot;.';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'N�itan veeru kommentaare';
$strCollation = 'M��rang';
$strColumnNames = 'V�ljade nimed';
$strColumnPrivileges = 'V�li-spetsiifilised privileegid';
$strCommand = 'K�sk';
$strCommentsForTable = 'KOMMENTAARID TABELILE';
$strComments = 'Kommentaarid';
$strCompatibleHashing = 'MySQL&nbsp;4.0-iga �hilduv';
$strCompleteInserts = 'T�ispikk INSERT';
$strCompression = 'Pakkimine';
$strCompressionWillBeDetected = 'Imporditava faili pakkimise meetod leitakse automaatselt: %s';
$strConfigDefaultFileError = 'Pole v�imalik laadida vaikimisi seadete faili: "%1$s"';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See v�ib juhtuda kui PHP leiab vea selles v�i PHP ei leia antud faili �les.<br />Palun kutsuge konfiguratsioonifail v�lja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile �eldakse. Enamustel juhtudel on kuskilt puudu �lakoma v�i semikoolon.<br />Kui Teile kuvatakse t�hi leht on k�ik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConnectionError = 'Ei saa �hendust: vigased seaded.';
$strConnections = '�hendused';
$strConstraintsForDumped = 'Piirangud salvestatud tabelitele';
$strConstraintsForTable = 'Piirangud tabelile';
$strCookiesRequired = 'K�psised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyDatabaseOK = 'Andmebaas %s on kopeeritud %s';
$strCopy = 'Kopeeri';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCopyTableSameNames = 'Ei saa tabelit iseendasse kopeerida!';
$strCouldNotKill = 'phpMyAdmin ei suutnud katkestada protsessi %s. T�en�oliselt on see juba suletud.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE enne kopeerimist';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;v�ljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreate = 'Loo';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCreateRelation = 'Suhte loomine (relation)';  
$strCreateTable  = 'Loo tabel';
$strCreateUserDatabase = 'Andmebaas kasutajale';  
$strCreateUserDatabaseName = 'Loo sama nimega andmebaas ja anna k�ik �igused'; 
$strCreateUserDatabaseNone = 'Puudub';  
$strCreateUserDatabaseWildcard = 'Anna k�ik �igused Metanimele (username\_%)';
$strCreationDates = 'Loo/muuda/kontrolli kuup�evi';
$strCriteria = 'Kriteerium';
$strCroatian = 'Horvaatia';
$strCSV = 'CSV';
$strCyrillic = 'Kirillitsa';
$strCzechSlovak = 'Tsehhi-Slovaki';
$strCzech = 'Tsehhi';

$strDanish = 'Taani';
$strData = 'Andmed';
$strDatabase = 'Andmebaas';
$strDatabaseEmpty = 'Andmebaasi nimi on t�hi!';
$strDatabaseExportOptions = 'Andmebaasi eksportimise seaded';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabases = 'Andmebaasid';
$strDatabasesDropped = 'andmebaasid %s kustutati �nnestunult.';
$strDatabasesStats = 'Andmebaaside statistika';
$strDatabasesStatsDisable = 'Keelake statistika';
$strDatabasesStatsEnable = 'Lubage statistika';
$strDatabasesStatsHeavyTraffic = 'M�rkus: Lubades siin andmebaasi statistika v�ite tekitada v�ga koormava liikuse webiserveri ja MySQL-i vahel.';
$strDataDict = 'Andmes�nastik';
$strDataOnly = 'Ainult andmed';
$strDataPages = 'Lehed andmetega';
$strDBComment = 'Andmebaasi kommentaar: ';
$strDBCopy = 'Kopeeri andmebaas';
$strDbIsEmpty = 'Andmebaas tundub olevat t�hi!'; 
$strDbPrivileges = 'Andmebaas-spetsiifilised privileegid';
$strDBRename = 'Nimeta andmebaas �mber';
$strDbSpecific = 'andmebaasip�hine';
$strDefaultEngine = '%s on vaikimisi varundusmootor sellele MySQL serverile.';
$strDefault = 'Vaikimisi';
$strDefaultValueHelp = 'Vaikimisi v��rtuse jaoks sisestage lihtsalt �ksik v��rtus, ilma kaldkriipsudega varjestamata ning jutum�rkideta, kasutades j�rgmist kirjakuju: a';
$strDefragment = 'Defrgamenteeri tabel';
$strDelayedInserts = 'Kasuta ajastatud lisamisi';
$strDeleteAndFlushDescr = 'See on parim tee, kuid privileegide taaslaadimine v�ib v�tta aega.';
$strDeleteAndFlush = 'Kustutage kasutajad ja taaslaadige privileegid p�rast seda.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDelete = 'Kustuta';
$strDeleteNoUsersSelected = '�htegi kasutajat pole valitud kustutamiseks!';
$strDeleteRelation = 'Kustuta suhe';  
$strDeleting = 'Kustutan %s';
$strDelimiter = 'Eraldaja'; 
$strDelOld = 'Antud lehel on viiteid tabelitele mida enam ei ole. Kas te soovite kustutada need viited?';
$strDescending = 'Kahanev';
$strDescription = 'Kirjeldus';
$strDesigner = 'Kujundaja';
$strDictionary = 's�naraamat';
$strDirectLinks = 'Otselingid';  
$strDirtyPages = 'Mustad lehed';
$strDisabled = 'Keelatud';
$strDisableForeignChecks = 'Keela v��rv�tmete (foreign key) kontroll';
$strDisplayFeat = 'Kuva v�imalused';
$strDisplayOrder = 'N�itamise j�rjekord:';
$strDisplayPDF = 'N�ita PDF skeemi';
$strDoAQuery = 'Tee "p�ring n�ite j�rgi" (l�hend: "%")';
$strDocSQL = 'DocSQL';  
$strDocu = 'Dokumentatsioon';
$strDoYouReally = 'Kas te t�esti tahate ';
$strDropDatabaseStrongWarning = 'T�helepanu! Te H�VITATE kogu andmebaasi!';
$strDrop = 'Kustuta';
$strDropUsersDb = 'Kustuta andmebaasid millel on samad nimed nagu kasutajatel.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDumpSaved = 'V�ljav�te salvestati faili %s.';
$strDumpXRows = 'P�ri %s rida alustades reast %s.';
$strDynamic = 'd�naamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmptyResultSet = 'MySQL tagastas t�hja tulemuse (s.t. null rida).';
$strEmpty = 'T�hjenda';
$strEnabled = 'Lubatud';
$strEncloseInTransaction = 'Lisa eksport �lekandesse';
$strEndCut = 'L�PETA L�IGE';
$strEnd = 'L�pp';
$strEndRaw = 'L�PETA PUHAS';
$strEngineAvailable = '%s on saadaval selles MySQL serveris.';
$strEngineDisabled = '%s on keelatud selles MySQL serveris.';
$strEngines = 'Mootor';
$strEngineUnsupported = 'See MySQL server ei toeta %s varundusmootorit.';
$strEnglish = 'Inglise';
$strEnglishPrivileges = ' M�rkus: MySQL privileegide nimed on ingliskeelsed ';
$strErrorInZipFile = 'Viga ZIP arhiivis:';
$strErrorRenamingTable = 'Viga tabeli nime %1$s muutimsel %2$s';  
$strError = 'Viga';
$strEscapeWildcards = 'Metam�rgid _ ja % peaksid olema varjestatud m�rgiga \, kui soovite neid sisestada';
$strEsperanto = 'Esperanto';
$strEstonian = 'Eesti';
$strExcelEdition = 'Exceli versioon';
$strExecuteBookmarked = 'K�ivita salvestatud p�ring';
$strExplain = 'Seleta SQL-i';
$strExport = 'Ekspordi';
$strExportImportToScale = 'Ekspordi/Impordi skaala';
$strExportMustBeFile = 'Valitud eksportimise t��p tuleb salvestada faili!';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Eba�nnestunud �ritused';
$strFieldHasBeenDropped = 'V�li %s kustutatud';
$strFieldsEnclosedBy = 'V�ljad �mbritsetud';
$strFieldsEscapedBy = 'V�ljad varjatud';
$strFieldsTerminatedBy = 'V�ljad eraldatud';
$strFields = 'V�ljade arv';
$strField = 'V�li';
$strFileAlreadyExists = 'Fail %s on juba serveris olemas, muutke faili nime v�i kontrollige �lekirjutamise seadeid.';
$strFileCouldNotBeRead = 'Faili ei suudetud lugeda';
$strFileNameTemplateDescriptionDatabase = 'andmebaasi nimi';
$strFileNameTemplateDescription = 'Seda v��rtust on t�lgendatud kasutades %1$sstrftime%2$s, sa v�id kasutada sama aja(time) formaati. Lisaks tulevad ka j�rgnevad muudatused: %3$s. �lej��nud teks j��b nii nagu ta on.';
$strFileNameTemplateDescriptionServer = 'serveri nimi';
$strFileNameTemplateDescriptionTable = 'tabeli nimi';
$strFileNameTemplate = 'Faili nime template';
$strFileNameTemplateRemember = 'j�ta template meelde';
$strFileToImport = 'Imporditav Fail';
$strFixed = 'parandatud';
$strFlushPrivilegesNote = 'M�rkus: phpMyAdmin v�tab kasutajate privileegid otse MySQL privileges tabelist. Tabeli sisu v�ib erineda sellest, mida server hetkel kasutab, seda juhul kui olete k�sitsi muudatusi teinud. Sellisel juhul peaksite te privileegid %staaslaadima%s enne j�tkamist.';
$strFlushQueryCache = 'T�hjenda p�ringute vahem�lu';
$strFlushTables = 'T�hjenda (sulge) k�ik tabelid';
$strFlushTable = '�htlusta tabelid ("FLUSH")';
$strFontSize = 'Fondi suurus';
$strForeignKeyError = 'Viga luues v��rv�tit (foreign key) (kontrolli admet��pe)';
$strFormat = 'Formaat';
$strFormEmpty = 'Puuduv v��rtus vormis !';
$strFreePages = 'Vabad lehed';
$strFullText = 'T�istekstid';
$strFunction = 'Funktsioon';
$strFunctions = 'Funktsioonid';  

$strGenBy = 'Genereerija ';
$strGeneralRelationFeat = 'Peamised seoste v�imalused';
$strGenerate = 'Genereeri';
$strGeneratePassword = 'Genereeri parool';
$strGenTime = 'Tegemisaeg';
$strGeorgian = 'Gruusia';
$strGerman = 'Saksa';
$strGlobal = 'globaalne';
$strGlobalPrivileges = 'Globaalsed privileegid';
$strGlobalValue = '�ldine v��rtus';
$strGo = 'Mine';
$strGrantOption = '�igused';
$strGreek = 'Kreeka';
$strGzip = '"gzipitud"';

$strHandler = 'T��tleja';
$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima v�hemalt �he veeru kuvamiseks';
$strHebrew = 'Heebrea';
$strHelp = 'Abi';  
$strHide         = 'Peida';
$strHideShowAll = 'Peida/N�ita k�ik';
$strHideShowNoRelation = 'Peida/N�ita tabelid millel puudub suhe'; 
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHostEmpty = 'Masin on t�hi!';
$strHost = 'Masin';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungari';

$strIcelandic = 'Islandi';
$strId = 'ID';
$strIdxFulltext = 'T�istekst';
$strIgnoreDuplicates = 'Ignoreeri korduvaid ridasid';
$strIgnore = 'Ignoreeri';
$strIgnoreInserts = 'Kasutaja ignoreeritavaid lisamisi';
$strImportExportCoords = 'Impordi/Ekspordi kordinaadid PDF skeemile';
$strImportFiles = 'Importige failid';
$strImportFormat = 'Imporditud faili formaat';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import l�ppetati edukalt, %d p�ringut k�ivitatud.';
$strIndexes = 'Indeksid';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndex = 'Indeks';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi t��p&nbsp;:';
$strIndexWarningTable = 'Probleemid tabeli `%s` indeksitega';
$strInnoDBAutoextendIncrement = 'Automaatne suurenduse laiendus';
$strInnoDBAutoextendIncrementDesc = ' Automaatselt suurenev suurus mis lisatakse automaatselt suurenevale tabeliruumile kui see t�itub.';
$strInnoDBBufferPoolSizeDesc = 'M�lupuhvri suurus mida InnoDB kasutab oma andmete ja indeksite puhverdamiseks.';
$strInnoDBBufferPoolSize = 'Puhverdusala suurus';
$strInnoDBDataFilePath = 'Andmefailid';
$strInnoDBDataHomeDir = 'Andmete kodukataloog';
$strInnoDBDataHomeDirDesc = '�hine kataloogi nimeosa k�igi InnoDB andmefailide jaoks.';
$strInnoDBPages = 'lehti';
$strInnoDBRelationAdded = 'InnoDB suhe lisatud';
$strInnodbStat = 'InnoDB staatus';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud r�nnakutele, soovitav on see turvaauk kiiresti parandada.';
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
$strInvalidColumn = 'Vigased v�lja veerud (%s) valitud!';
$strInvalidCSVFieldCount = 'Vigane v�ljade arv CSV sisendis real %d.';
$strInvalidCSVFormat = 'Vigane formaat CSV sisendis real %d.';
$strInvalidCSVParameter = 'Vigane parameeter CSV importimisel: %s';
$strInvalidDatabase = 'Vigane andmebaas';  
$strInvalidFieldAddCount = 'Peate lisama v�hemalt �he v�lja.';
$strInvalidFieldCount = 'Tabelil peab olema v�hemalt �ks v�li.';
$strInvalidLDIImport = 'See plugin ei toeta pakitud importe!';
$strInvalidRowNumber = '%d ei ole �ige reanumber.';
$strInvalidServerHostname = 'Vigane hostname serverile %1$s. Palun kontrolli seadeid.';
$strInvalidServerIndex = 'Vigane serveri indeks: "%s"';
$strInvalidTableName = 'Vigane tabeli nimi'; 

$strJapanese = 'Jaapani';
$strJoins = 'Liited';
$strJumpToDB = 'H�ppa andmebaasile &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Kustutatud&quot; kasutajad v�ivad ikka veel ligi p��seda serverile, kuni privileegid pole uuesti sisse loetud.';
$strJustDelete = 'Lihtsalt kustutage kasutajad privilege tabelist.';

$strKeepPass = '�rge muutke parooli';
$strKeyCache = 'V�tme vahem�lu';
$strKeyname = 'V�tme nimi';
$strKill = 'Tapa';
$strKnownExternalBug = 'See %s funktionaalsus on m�jutatud tuntud viga, vaata %s';
$strKorean = 'Korea';

$strLandscape = 'Laipilt';
$strLanguage = 'Keel';  
$strLanguageUnknown = 'Tundmatu keel: %1$s.';
$strLatchedPages = 'Lukustatud lehed';
$strLatexCaption = 'Tabeli seletus';
$strLatexContent = 'Tabeli __TABLE__ sisu';
$strLatexContinuedCaption = 'J�tkuva tabeli seletus';
$strLatexContinued = '(j�tkub)';
$strLatexIncludeCaption = 'Lisa tabeli seletus';
$strLatexLabel = 'Nimetuse v�ti';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Tabeli __TABLE__ struktuur';
$strLatvian = 'L�ti';
$strLDI = 'CSV kasutades LOAD DATA';
$strLDILocal = 'kasuta LOCAL v�tmes�na';
$strLengthSet = 'Pikkus/V��rtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLinesTerminatedBy = 'Read l�petatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLithuanian = 'Leedu';
$strLocalhost = 'Lokaalne';
$strLocationTextfile = 'tekstifaili asukoht';
$strLoginInformation = 'Logimise informatsioon';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi v�lja';
$strLogPassword = 'Parool:';
$strLogServer = 'Server';
$strLogUsername = 'Kasutajanimi:';
$strLongOperation = 'See tegevus v�ib v�tta kaua aega. J�tkan?';

$strMaxConnects = 'maks. parallel �hendusi';
$strMaximalQueryLength = 'Loodud p�ringu maksimaalne pikkus';
$strMaximumSize = 'Maksimaalne suurus: %s%s';
$strMbExtensionMissing = 'Ei leitud mbstring PHP lisa ja tundub, et te kasutate mitmebaidilist t�hetabelit. Ilma mbstring lisata ei suuda phpMyAdmin poolitada teksti korrektselt ja tulemus v�ib olla ootustele mittevastav.';
$strMbOverloadWarning = 'Te olete lubanud mbstring.func_overload oma PHP konfiguratsioonis. See seade ei �hildu phpMyAdminiga ja v�ib osade andmete kadumist p�hjustada!';
$strMIME_available_mime = 'Olemasolevad MIME-t��bid';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Kirjeldus';
$strMIME_MIMEtype = 'MIME-t��p';
$strMIME_nodescription = 'Selle transformatsiooni jaoks ei ole kirjeldust.<br />Palun k�sige autorilt, mida %s teeb.';
$strMIME_transformation = 'Browseri transformatsioon';
$strMIME_transformation_note = 'Transformatsiooni v�imaluste ja tema MIME-t��bi transformatsiooni nimekirjaks vajutage %stransformatsiooni kirjeldusele%s';
$strMIME_transformation_options_note = 'Palun sisestage transformatsiooniks vajalikud v��rtused, kasutades j�rgmist formaati: \'a\', 100, b,\'c\'...<br />Kui teil on vaja edastada kaldkriips ("\") v�i �lakoma ("\'") nende v��rtuste seas, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strMIME_transformation_options = 'Transformeerimise seaded';
$strMIMETypesForTable = 'MIME T��BID TABELILE';
$strMIME_without = 'MIME-t��bid kursiivis ei oma eraldi transofrmatsiooni funktsiooni';
$strModifications = 'Muutused salvestatud';
$strModifyIndexTopic = 'Muuda indeksit';
$strModify = 'Muuda';
$strMoveMenu = 'Liiguta men��';  
$strMoveTableOK = 'Tabel %s viidu �le andmebaasi %s.';
$strMoveTableSameNames = 'Ei saa tabelit iseendasse liigutada!';
$strMoveTable = 'Vii tabel �le (andmebaas<b>.</b>tabel):';
$strMultilingual = 'mitmekeelne';
$strMyISAMDataPointerSize = 'Andmeviida suurus';
$strMyISAMDataPointerSizeDesc = 'Vaikimisi viida suurus baitides, mida kasutatakse CREATE TABLE k�suga MyISAM tabelite jaoks kui MAX_ROWS seade on m��ramata.';
$strMyISAMMaxExtraSortFileSizeDesc = 'Kui ajutine fail mida kasutatakse kiire MyISAM indeksi loomiseks on suurem kui kasutada siin m��ratud v�tmecache suurust, siis eelistage v�tmecache meetodit.';
$strMyISAMMaxExtraSortFileSize = 'Maksimaalne failisuurus ajutiste failide jaoks indeksi genereerimisel';
$strMyISAMMaxSortFileSizeDesc = 'Maksimaalne failisuurus MySQL-i ajutise faili jaoks mida kasutatakse MyISAM indeksi uuesti genereerimiseks (REPAIR TABLE, ALTER TABLE v�i LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimaalne suurus ajutiste sorteeringufailide jaoks';
$strMyISAMRecoverOptions = 'Automaatne taastamine';
$strMyISAMRecoverOptionsDesc = 'Automaatne taastamine purunenud MyISAM tabelitele, aktiveeritakse v�tmega --myisam-recover serveri k�ivitamisel.';
$strMyISAMRepairThreadsDesc = 'Kui see v��rtus on suurem kui 1 siis MyISAM tabeli indeksid luuakse paralleelselt (iga indeks oma l�imus) sorteerimise teel parandamise ajal.';
$strMyISAMRepairThreads = 'Paranda l�imud';
$strMyISAMSortBufferSizeDesc = 'Puhver mis h�ivatakse kui sorteeritakse MyISAM indekseid REPAIR TABLE ajal v�i kui luuakse indekseid CREATE INDEX v�i ALTER TABLE k�skudega.';
$strMyISAMSortBufferSize = 'Sordi puhvri suurus';
$strMySQLCharset = 'MySQLi t�hetabel';
$strMysqlClientVersion = 'MySQL kliendi versioon';
$strMySQLConnectionCollation = 'MySQL �henduse kollatsioon';
$strMySQLSaid = 'MySQL �tles: ';
$strMySQLShowProcess = 'N�ita protsesse';
$strMySQLShowStatus = 'N�ita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'N�ita MySQL s�steemseid muutujaid';

$strName = 'Nimi';
$strNext = 'J�rgmine';
$strNoActivity = 'Ebaaktiivne %s sekundit v�i rohkem, palun sisenege uuesti';
$strNoDatabases = 'Pole andmebaase';
$strNoDatabasesSelected = '�htegi andmebaasi ei ole valitud.';
$strNoDataReceived = 'Andmeid ei saadud importimisel. V�imalik et faili nime ei saadetud, v�i faili suurus �letab maksimaalset suurust lubatud PHP seadetes. Vaata FAQ 1.16.';
$strNoDescription = 'pole kirjeldust';
$strNoDetailsForEngine = 'Detailne seisuinformatsioon antud varundusmootori kohta puudub.';
$strNoDropDatabases = '"DROP DATABASE" k�sud keelatud.';
$strNo = 'Ei';
$strNoExplain = 'J�ta SQL-i seletamine vahele';
$strNoFilesFoundInZip = 'Ei leidnud �htegi faili ZIP arhiivist!';
$strNoFrames = 'phpMyAdmin on s�bralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNone = 'Pole';
$strNoOptions = 'Sellel formaadil pole seadeid';
$strNoPassword = 'Ilma paroolita';
$strNoPermission = 'Webiserver ei oma �igusi , et salvestada fail %s.';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma �htegi privileegi';
$strNoRights = 'Teil pole piisavalt �igusi, et hetkel siin olla!';
$strNoRowsSelected = 'Ridu pole valitud';
$strNoSpace = 'Liiga v�he kettaruumi, et salvestada fail %s.';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoThemeSupport = 'Teemade tugi puudub, palun kontrollige oma seadeid ja/v�i oma teemade kataloogi %s.';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud v�i ei eksisteeri %s';
$strNoUsersFound = 'Ei leitud �htegi kasutajat.';
$strNoValidateSQL = 'J�ta SQL-i kontroll vahele';
$strNull = 'Null';
$strNumberOfFields = 'V�ljade arv';
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
$strOr = 'v�i';
$strOverhead = '�lej��v';
$strOverwriteExisting = 'Kirjuta olemasolev(ad) fail(id) �le';

$strPageNumber = 'Lehenumber:';
$strPagesToBeFlushed = 'Lehed �htlustamiseks';
$strPaperSize = 'Paberi suurus';
$strPartialImport = 'Osaline import';
$strPartialText = 'L�hendatud tekstid';
$strPasswordChanged = 'Kasutaja %s parool vahetati �nnestunult.';
$strPasswordEmpty = 'Parool on t�hi!';
$strPasswordHashing = 'Parooli t�rkimine';
$strPasswordNotSame = 'Paroolid ei �hti!';
$strPassword = 'Parool';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehek�lg %s';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genereerib aruande sisaldades andmeid �ksikust tabelist)';
$strPDFReportTitle = 'Raporti pealkiri';
$strPerHour = 'tunni kohta';
$strPerMinute = 'minutis';
$strPerSecond = 'sekundis';
$strPersian = 'P�rsia';
$strPhoneBook = 'telefoniraamat';
$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on t�sine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPhp = 'Loo PHP kood';
$strPHPVersion = 'PHP versioon';
$strPleaseSelectPrimaryOrUniqueKey = 'Palun vali primaarne v�i unkaalne v�ti'; 
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis m��ratud olema!';
$strPmaWiki = 'phpMyAdmin wiki';  
$strPolish = 'Poola';
$strPortrait = 'Portreepilt';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimaryKeyHasBeenDropped = 'Primaarne v�ti kustutatud';
$strPrimaryKeyName = 'Primaarse v�tme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse v�tme nimi!)';
$strPrimary = 'Primaarne';
$strPrint = 'Prindi';
$strPrintViewFull = 'Tr�kivaade (t�ispikkade tekstidega)';
$strPrintView = 'Tr�kivaade';
$strPrivDescAllPrivileges = 'Sisaldab k�iki privileege peale GRANT.';
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
$strPrivDescExecute5 = 'Lubab salvestatud rutiinide k�ivituse.';
$strPrivDescExecute = 'Lubab k�ivitada salvestatud protseduure; Ei oma mingit effekti antud MySQL versioonis.';
$strPrivDescFile = 'Lubab andmete eksportimist faili ja andmete importimist failidest.';
$strPrivDescGrant = 'Lubab lisada kasutajaid ja privileege ilma privileges tabelit taask�ivitamata.';
$strPrivDescIndex = 'Lubab luua ja kustutada indekseid.';
$strPrivDescInsert = 'Lubab lisada ja muuta infot.';
$strPrivDescLockTables = 'Lubab lukustada tabeleid aktiivse p�ringu tarbeks.';
$strPrivDescMaxConnections = 'Limiteerib �henduste arvu tunnis kasutaja jaoks.';
$strPrivDescMaxQuestions = 'Limiteerib p�ringute arvu tunnis kasutaja jaoks.';
$strPrivDescMaxUpdates = 'Limiteerib k�skude, mis muudavad suvalist tabelit v�i andmebaasi, arvu tunnis kasutaja jaoks';
$strPrivDescMaxUserConnections = 'Piirab �henduste arvu mida kasutajal v�ib korraga olla.';
$strPrivDescProcess3 = 'Lubab tappa kasutajate protsesse.';
$strPrivDescProcess4 = 'Lubab vaadata t�ielikult p�ringuid protsessitabelis.';
$strPrivDescReferences = 'Ei oma antud MySQL versioonis mingit effekti.';
$strPrivDescReload = 'Lubab taaslaadida serveri seadmeid ja puhastada serveri cachet.';
$strPrivDescReplClient = 'Lubab kasutajal k�sida kus on slaved/masterid.';
$strPrivDescReplSlave = 'Vajalik slavede paljundamiseks.';
$strPrivDescSelect = 'Lubab lugeda infot.';
$strPrivDescShowDb = 'Annab ligip��su kogu andmebaasilistingule.';
$strPrivDescShowView = 'Lubab SHOW CREATE VIEW p�ringute k�ivitamise.';
$strPrivDescShutdown = 'Lubab serverit maha lasta.';
$strPrivDescSuper = 'Lubab �henduda, isegi kui maksimaalne �henduste arv on saavutatud; Vajalik enamike administratiivsete operatsioonide jaoks, nagu globaalsete muutujate seadmine v�i teiste kasutajate �henduste tapmine.';
$strPrivDescUpdate = 'Lubab muuta infot.';
$strPrivDescUsage = 'Mitte �htegi privileegi.';
$strPrivileges = 'Privileegid';
$strPrivilegesReloaded = 'Privileegid taaslaeti edukalt.';
$strProcedures = 'Toimingud';
$strProcesses = 'Protsessid';
$strProcesslist = 'Protsessinimekiri';
$strProtocolVersion = 'Protokolli versioon';
$strPutColNames = 'Pange v�ljade nimed esimesse ritta';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'P�ring n�ite j�rgi';
$strQueryCache = 'P�ringute vahem�lu';
$strQueryFrame = 'P�ringuaken';
$strQueryOnDb = 'SQL-p�ring andmebaasist <b>%s</b>:';
$strQueryResultsOperations = 'P�ringu tulemuste tegevused';
$strQuerySQLHistory = 'SQL-ajalugu';
$strQueryStatistics = '<b>P�ringu statistika</b>: Alates stardist, %s p�ringut on saadetud serverile.';
$strQueryTime = 'P�ring kestis %01.4f sek';
$strQueryType = 'P�ringu t��p';
$strQueryWindowLock = 'Antud p�ringut mitte muuta v�ljaspool akent.';

$strReadRequests = 'P��rdumised lugemiseks';
$strReceived = 'Saadud';
$strRecommended = 'soovituslik';  
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli p�rinevust:';
$strRefresh = 'Uuenda';
$strRelationalSchema = 'Seoseskeem';
$strRelationDeleted = 'Suhe kustutatud'; 
$strRelationNotWorking = 'Lisav�imalused t��tamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationsForTable = 'SEOSED TABELILE';
$strRelations = 'Suhted';
$strRelationView = 'P�rinevuse vaade';
$strReloadingThePrivileges = 'Taaslaen privileege';
$strReload = 'Lae uuesti';  
$strReloadPrivileges = 'Lae privileegid uuesti';
$strRemoveSelectedUsers = 'Eemalda valitud kasutajad';
$strRenameDatabaseOK = 'Andmebaas %s on �mber nimetatud %s';
$strRenameTable = 'Nimeta tabel �mber';
$strRenameTableOK = 'Tabel %s on �mber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplaceNULLBy = 'Asenda NULL ';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReplication = 'Tira�eerimine';
$strReset = 'T�hista';
$strResourceLimits = 'Ressursilimiidid';
$strReType = 'Sisesta uuesti';
$strRevokeAndDeleteDescr = 'Kasutajatel on ikka veel USAGE privileeg, kuni privileegid pole taaslaetud.';
$strRevokeAndDelete = 'Eemalda k�ik aktiivsed privileegid kasutajatelt ning kustuta nad p�rast seda.';
$strRevokeMessage = 'Te v�tsite tagasi privileegid %s-lt';
$strRevoke = 'V�ta tagasi';
$strRomanian = 'Rumeenia';
$strRowLength = 'Rea pikkus';
$strRowsFrom = 'read alates';
$strRowSize = ' rea suurus ';
$strRowsModeFlippedHorizontal = 'horisontaalne (p��ratud p�is)';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'n�ita %s and korda pealkirju iga %s j�rel';
$strRowsModeVertical = 'vertikaalselt';
$strRows = 'Ridu';
$strRowsStatistic = 'Rea statistika';
$strRunning = 'jookseb masinas %s';
$strRunQuery = 'Lae p�ring';
$strRunSQLQueryOnServer = 'K�ivita SQL k�sk/k�sud Masinas %s';
$strRunSQLQuery = 'P�ri SQL p�ring(uid) andmebaasist %s';
$strRussian = 'Vene';

$strSaveOnServer = 'Salvestage serverisse kataloogi %s';
$strSavePosition = 'Salvesta positsioon';  
$strSave = 'Salvesta';
$strScaleFactorSmall = 'Skalaarfaktor on liiga v�ike, et skeem mahuks �hele lehele.';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'S�na(d) v�i v��rtus(ed) otsinguks (l�hend: "%"):';
$strSearchOption1 = 'v�hemalt �ks s�nadest';
$strSearchOption2 = 'k�ik s�nadest';
$strSearchOption3 = 't�pne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearch = 'Otsi';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSecretRequired = 'Konfiguratsioonifail n�uab n��d salajast v�tmes�na (blowfish_secret).';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'M�rgista k�ik';
$strSelectBinaryLog = 'Valige binaarne logi vaatamiseks';
$strSelectFields = 'Vali v�ljad (v�hemalt �ks):';
$strSelectForeignKey = 'Vali v��rv�ti(Foreign Key)';  
$strSelectNumRows = 'p�ringus';
$strSelectReferencedKey = 'Vali eelistus v�ti (referenced key)';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strSent = 'Saadetud';
$strServerChoice = 'Serveri valik';
$strServerNotResponding = 'Server ei vasta';
$strServer = 'Server';
$strServers = 'Serverid';  
$strServerStatusDelayedInserts = 'Ajastatud lisamised';
$strServerStatus = 'Jooksev informatsioon';
$strServerStatusUptime = 'See MySQL server on k�inud %s. K�ivitusaeg %s.';
$strServerTabVariables = 'Muutujad';
$strServerTrafficNotes = '<b>Serveri liiklus</b>: Need tabelid n�itavad v�rguliikluse statistikat selle MySQL serveri jaoks alates tema k�ivitamisest.';
$strServerVars = 'Serveri muutujad ja seaded.';
$strServerVersion = 'Serveri versioon';
$strSessionValue = 'Sessiooni v��rtus';
$strSetEnumVal = 'Kui v�lja t��p on "enum" v�i "set", palun sisestage v��rtused kasutades j�rgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") v�i �lakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strShowAll = 'N�ita k�iki';
$strShowColor = 'N�ita v�rvi';
$strShowDatadictAs = 'Andmes�nastiku formaat';
$strShowFullQueries = 'N�ita t�ispikkasid p�ringuid';
$strShowGrid = 'N�ita v�rgustiku';
$strShowHideLeftMenu = 'N�ita/Peida vasak men��';
$strShowingBookmark = 'N�itan j�rjehoidjat';
$strShowingPhp = 'N�itan PHP koodina'; 
$strShowingRecords = 'N�ita ridu';
$strShowingSQL = 'N�itan SQL p�ringut';  
$strShow = 'N�ita';
$strShowOpenTables = 'N�ita avatud tabeleid';
$strShowPHPInfo = 'N�ita PHP informatsiooni';
$strShowSlaveHosts = 'N�ita alluvaid(slave)';
$strShowSlaveStatus = 'N�ita alluvate(slave) staatust';
$strShowStatusBinlog_cache_disk_useDescr = '�lekannete number mida kasutab ajutise binaar logi vahem�lu kuid �letab binlog_cache_size suurust ja kasutatakse ajutist faili et salvestada �lekande K�ske (p�ringuid).';
$strShowStatusBinlog_cache_useDescr = '�lekannete number mis kasutasid ajutist binaar logi vahem�lu.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Ajutiste tabelite arv, loodud automaatselt serveri poolt, p�ringuid k�ivitades. Kui Created_tmp_disk_tables on suur, sa v�id tahta suurendada tmp_table_size v��rtust et olla m�lul baseeruv mitte kettal.';
$strShowStatusCreated_tmp_filesDescr = 'Mitu ajutist faili mysqld on loonud.';
$strShowStatusCreated_tmp_tablesDescr = 'Ajutiste m�lul baseeruvate tabelite arv, loodud automaatselt serveri poolt, p�ringuid k�ivitades.';
$strShowStatusDelayed_errorsDescr = 'Mitu rida on loodud k�suga INSERT DELAYED milles toimus viga (arvatavasti korduv v�ti).';
$strShowStatusDelayed_insert_threadsDescr = 'Mitu INSERT DELAYED t��tleja (handler) l�imu on kasutuses. Iga erinev tabel mis kasutab INSERT DELAYED saab oma l�imu.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED ridasid loodud.';
$strShowStatusFlush_commandsDescr  = 'FLUSH k�skude arv.';
$strShowStatusHandler_commitDescr = 'Sisemiste COMMIT k�skude arv.';
$strShowStatusHandler_deleteDescr = 'Mitu korda rida kustutati tabelist.';
$strShowStatusHandler_discoverDescr = 'MySQLi server v�ib k�sida "NDB Cluster storage engine" (klaster salvestus mootor)  kas ta teab tabelit etteantud nimega. Seda kutsutakse avastus(discovery). Handler_discover annab mitu korda on tabel leitud.';
$strShowStatusHandler_read_firstDescr = 'Mitu korda loeti esimene tulemus indeksist. Kui see on suur, see soovitab et server teeb palju t�is indeksi skaneerimist; n�itkes, SELECT col1 FROM foo, arvates et col1 indekseeritud.';
$strShowStatusHandler_read_keyDescr = 'Mitu korda loeti rida v�tme j�rgi. Kui see on suur, see on hea n�itaja et sinu p�ringud ja tabelid on korralikult indekseeritud.';
$strShowStatusHandler_read_nextDescr = 'Mitu korda saadi k�sk lugeda v�tme j�rgi j�rgmine rida. See on suurenev kui sa p�rid indekseeritud piiratud v�lja v�i sa teed indeksi skaneerimist.';
$strShowStatusHandler_read_prevDescr = 'Mitu korda saadi k�sk lugeda v�tme j�rgi eelnev rida. See lugemise meetod on peamiselt kasutatud optimiseerimiseks ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Mitu korda saadi k�sk lugeda kindel rida. See on suur kui sa teed palju p�ringuid mis vajavad tulemuse sorteerimist. Sa kasutad kindlasti p�ringuid mis vajavad MySQLi et skaneerida kogu tabelit v�i liited(joins) mis ei kasuta v�tmeid korralikult.';
$strShowStatusHandler_read_rnd_nextDescr = 'Mitu korda saadi k�sk lugeda j�rgmine rida andmefailist. See on suur kui sa teed palju tabeli skaneerimisi. Enamasti see soovitab et sinu tabelid pole korralikult indekseeritud v�i sinu p�ringud pole kirjutatud nii et v�tta eeliseid sinu loodud indeksitest.';
$strShowStatusHandler_rollbackDescr = 'Mitu korda k�ivitati sisemine ROLLBACK lausung.';
$strShowStatusHandler_updateDescr = 'Mitu korda uuendati tabeli rida.';
$strShowStatusHandler_writeDescr = 'Mitu korda lisati uus rida tabelisse.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Mitu lehek�lge sisaldab andmeid (puhast v�i musta).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Mitu lehek�lge on mustad.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Mitu puhvri lehek�lge on m��ratud puhastamisele.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Mitu puu lehek�lge.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Mitu lukus lehte on InnoDB puhvris. Need lehed on hetkel lugemisel v�i kirjutamisel ja pole v�imalik puhastada v�i kustutada mingil p�hjusel.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Mitu lehte on hetkel kasutuses kuna nad reserveeritud nagu rea lukustus v�i kohanemisv�imeline indeks. Seda summat saab ka arvutada nii Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Kogu puhvris suurus, lehtedes.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Mitu InnoDB juhuslikku(random) ette-lugemisi on t��s. See juhtub kui p�ring on skaneerida suur osa tabelist kuid juhuslikus j�rjekorras.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Mitu InnoDB j�rjestikku ette-lugemisi on t��s. See juhtub kui InnoDB teeb j�rjestikulist kogu tabeli skaneerimist.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Mitu loogilist lugemist InnoDB on teinud.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Mitu loogilist lugemist InnoDB polnud v�imalik puhvris poolt rahuldada ja tegi �ksiku lehe lugemise.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Tavaliselt, kirjutab InnoDB puhvri taustal. Kuid, kui vajalik kirjutada leht ja �htegi puhast lehte pole saadaval, on vajalik oodata et lehed oleksid enne �htlustatud. See This loendur loeb k�iki neid ootamisi. Kui puhvri suurus on seatud korralikult, se number peaks olema v�ike.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Mitu korda kirjutas InnoDB puhvrisse.';
$strShowStatusInnodb_data_fsyncsDescr = 'Mitu fsync() operatsiooni siiani.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Mitu hetkel ootel fsync() operatsiooni.';
$strShowStatusInnodb_data_pending_readsDescr = 'Mitu ootel lugemist.';
$strShowStatusInnodb_data_pending_writesDescr = 'Mitu ootel kirjutamist.';
$strShowStatusInnodb_data_readDescr = 'Suurus kui palju andmeid on loetud siiani, baitides.';
$strShowStatusInnodb_data_readsDescr = 'Mitu korda loetud.';
$strShowStatusInnodb_data_writesDescr = 'Mitu korda andmeid kirjutati.';
$strShowStatusInnodb_data_writtenDescr = 'Suurus palju andmeid on kirjutatud, baitides.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Mitu korda tehti topeltkirjutamist ja mitu lehte on kirjutatud just sellel p�hjusel.';
$strShowStatusInnodb_dblwr_writesDescr = 'Mitu korda tehti topeltkirjutamise kirjutamist ja mitu lehte on kirjutatud just sellel p�hjusel.';
$strShowStatusInnodb_log_waitsDescr = 'Mitu ootamist on olnud sellep�rast et logi puhver oli liiga v�ike ja pidi ootama enne �htlustamist et j�tkata.';
$strShowStatusInnodb_log_write_requestsDescr = 'Mitu logi kirjutamise soovi.';
$strShowStatusInnodb_log_writesDescr = 'Mitu f��silist kirjutamist logi faili.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Mitu fsyncs kirjutamist tehtud logi faili.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Mitu ootel logi faili fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'ootel logifaili kirjutamisi.';
$strShowStatusInnodb_os_log_writtenDescr = 'Mitu baiti on kirjutatud logi faili.';
$strShowStatusInnodb_pages_createdDescr = 'Lehti loodud.';
$strShowStatusInnodb_page_sizeDescr = 'Sisse-kompileeritud InnoDB lehe suurus (vaikimisi 16KB). Paljud v��rtused on loetud lehtedes; lehe suurus lubab neid lihtsalt arvutada baitidesse.';
$strShowStatusInnodb_pages_readDescr = 'Lehti loetud.';
$strShowStatusInnodb_pages_writtenDescr = 'Lehti kirjutatud.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Mitu rea lukustamist on hetkel ootel.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Keskimne aeg p�rides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_timeDescr = 'Aeg mis on raisatud p�rides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksimaalne aeg p�rides rea lukustust, millisekundites.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Mitu korda pidi rea lukustus ootama.';
$strShowStatusInnodb_rows_deletedDescr = 'Mitu rida kustutatud InnoDB tabelitest.';
$strShowStatusInnodb_rows_insertedDescr = 'Mitu rida lisati InnoDB tabelitesse.';
$strShowStatusInnodb_rows_readDescr = 'Mitu rida loetud InnoDB tabelitest.';
$strShowStatusInnodb_rows_updatedDescr = 'Mitu rida uuendati InnoDB tabelites.';
$strShowStatusKey_blocks_not_flushedDescr = 'Mitu v�tme plokki on v�tme vahem�lus muutunud kui pole veel kettale kirjutatud. Tuntud nagu Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Mitu kasutamatta v�tme plokki on v�tme vahem�lus. Sa saad kasutatda seda v��rtust et teada saada kui palju v�tme vahem�lust on kasutuses.';
$strShowStatusKey_blocks_usedDescr = 'Mitu kasutatud plokki on v�tme vahem�lus. See v��rtus n�itab maksimaalse plokkide arvu mis on kunagi olnud kasutuses.';
$strShowStatusKey_read_requestsDescr = 'Mitu p�ringut et lugeda v�tme plokk vahem�lust.';
$strShowStatusKey_readsDescr = 'Mitu f��silist lugemist lugeda v�tme plokk kettalt. kui Key_reads on suur, siis sinu key_buffer_size n�itaja on kindlasti v�ike. Vahem�lus m��daminek on v�imalik arvutada nii Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Mitu p�ringut et kirjutada v�tme plokk vahem�llu.';
$strShowStatusKey_writesDescr = 'Mitu f��silist kirjutamist kirjutada v�tme plokk kettale.';
$strShowStatusLast_query_costDescr = 'Viimase kompileeritud p�ringu arvuatud tulemus p�ringu optimiseerija vastu. Kasulik v�rdlemaks erinevaid p�ringu plaane �helt ja samalt p�ringult. Vaikimisi v��rtus 0 t�hendab et p�ring pole veel t��deldud.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Mitu rida on ootel INSERT DELAYED p�ringutes.';
$strShowStatusOpened_tablesDescr = 'Mitu tabelit on avatud. Avatud tabeleid on palju siis sinu tabeli vahem�lus kindlasti liiga v�ike.';
$strShowStatusOpen_filesDescr = 'Mitu faili on avatud.';
$strShowStatusOpen_streamsDescr = 'Mitu voogu on hetkel avatud (enamasti logimiseks).';
$strShowStatusOpen_tablesDescr = 'Mitu tabelit on hetkel avatud.';
$strShowStatusQcache_free_blocksDescr = 'Vabad m�lu plokid p�ringute vahem�lus.';
$strShowStatusQcache_free_memoryDescr = 'Vaba m�lu p�ringute vahem�lus.';
$strShowStatusQcache_hitsDescr = 'Leitud Puhvrist.';
$strShowStatusQcache_insertsDescr = 'Mitu p�ringut on lisatud vahem�llu.';
$strShowStatusQcache_lowmem_prunesDescr = 'Mitu p�ringut kustutati puhvrist et vabastada m�lu uutele p�ringutele. See informatsioon aitab sind p�ringute-puhvri suuruse seadistamisel. P�ringute vahem�lu kasutab viimati kasutatud strateegiat(LRU) et otsustada millised p�ringud eemaldada puhvrist.';
$strShowStatusQcache_not_cachedDescr = 'Mitu mitte-puhverdatud p�ringut (pole salvestatud vahem�llu, v�i s�ltuvalt query_cache_type s�tetest mitte puhverdatud).';
$strShowStatusQcache_queries_in_cacheDescr = 'Mitu p�ringut on registreeritud vahem�lus.';
$strShowStatusQcache_total_blocksDescr = 'Plokkide koguarv p�ringute vahem�lus.';
$strShowStatusReset = 'Nulli';
$strShowStatusRpl_statusDescr = 'See staatus on t�rkekindel tira�eerimine (failsafe replication) (pole veel kasutuses).';
$strShowStatusSelect_full_joinDescr = 'Liited(joins) mis ei kasuta indekseid. Kui see n�itaja on 0, peaksid ettevaatlikult kontrollima oma tabelites indekseid.';
$strShowStatusSelect_full_range_joinDescr = 'Liidete arv mida kasutati piirkonna otsimisel eelistatud tabelist.';
$strShowStatusSelect_range_checkDescr = 'Ilma v�tmeta liidete(joins) arv mis konrollivad peale igat rida v�tme kasutamist. (Kui see pole 0 siis peaksid ettevaatlikult kontrollima oma tabelite indekseid.)';
$strShowStatusSelect_rangeDescr = 'Liidete arv mida kasutati esimese tabeli piirides. (Pole eriti kriitiline kui see on v�ga suur.)';
$strShowStatusSelect_scanDescr = 'Liidete arv mis tegid t�ielikku skaneerimist esimesest tabelist.';
$strShowStatusSlave_open_temp_tablesDescr = 'Ajutiste tabelite arv mis on hetkel avatud alam-l�imu(replication slave) poolt.';
$strShowStatusSlave_retried_transactionsDescr = 'Kogusumma (alates k�ivitamisest) mitu korda tira�eerimise(replication) SQL alam-l�im(replication slave) proovis �lekandeid.';
$strShowStatusSlave_runningDescr = 'Kui see on ON kui serveril on alam server(masin) mis on �henduses masteriga.';
$strShowStatusSlow_launch_threadsDescr = 'L�imude arv mis v�tsid rohkem aega k�ivitamiseks kui slow_launch_time.';
$strShowStatusSlow_queriesDescr = 'P�ringute arv mis v�tsid rohkem aega kui long_query_time sekundites.';
$strShowStatusSort_merge_passesDescr = 'Edukate �hinemiste(merge) arv millega l�hike algoritm on tegelenud. Kui see v��rtuse on suur, sa peaksid m�tlema sort_buffer_size v��rtuse suurendamist.';
$strShowStatusSort_rangeDescr = 'Sorteerimiste arv mis on tehtud piirkonna ulatuses.';
$strShowStatusSort_rowsDescr = 'Sorteritud ridade arv.';
$strShowStatusSort_scanDescr = 'Sorteerimiste arv mis on tehtud tabeli skaneerimist kasutades.';
$strShowStatusTable_locks_immediateDescr = 'Mitu korda tabeli lukustus j�ustus koheselt.';
$strShowStatusTable_locks_waitedDescr = 'Mitu korda tabeli lukustus ei j�ustunud koheselt ja pandi ootele. Kui see on suur ja j�udlusega on probleeme, sa peaksid optimiseerima oma p�ringuid v�i poolitama oma tabelid v�i kasutama tira�eerimist(replication).';
$strShowStatusThreads_cachedDescr = 'L�imude arv L�imude vahem�lus. Vahem�lu kasutamist(hit) on v�imalik arvutada nii Threads_created/Connections. Kui see on punane paksid suurendama thread_cache_size suurust.';
$strShowStatusThreads_connectedDescr = 'Hetkel avatud �hendusi.';
$strShowStatusThreads_createdDescr = 'L�imude arv mis on loodud �henduste haldamiseks. Kui Threads_created on suur siis suurenda thread_cache_size v��rtust. (Tavaliselt see ei anna m�rgatavat kiiruse t�usu kui L�imude teostus on korralik.)';
$strShowStatusThreads_runningDescr = 'L�imude arv mis mis hetkel ei maga.';
$strShowTableDimension = 'N�ita tabelite dimensiooni';
$strShowTables = 'N�ita tabeleid';
$strShowThisQuery = ' N�ita p�ringut siin uuesti ';
$strSimplifiedChinese = 'Lihtsustatud Hiina';
$strSingly = '(�ksikult)';
$strSize = 'Suurus';
$strSkipQueries = 'K�ske (p�ringuid) mida algusest vahele j�tta';
$strSlovak = 'Slovaki';
$strSlovenian = 'Sloveenia';
$strSmallBigAll = 'K�ik V�ikeseks/Suureks';  
$strSocketProblem = '(v�i kohaliku MySQL serveri soketid ei ole korrektselt seadistatud)';
$strSortByKey = 'Sorteeri v�tme j�rgi';
$strSorting = 'J�rjestamine';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumiv�tt';
$strSpanish = 'Hispaania';
$strSplitWordsWithSpace = 'S�nad on eraldatud t�hikuga (" ").';
$strSQLCompatibility = 'SQL �hilduvus viis';
$strSQLExportType = 'Ekspordi t��p';
$strSQLParserBugMessage = 'On v�imalus, et te leidsite vea SQL parseris. Palun kontrollige oma p�ringut t�psemalt ja kontrollige, et jutum�rgid/�lakomad oleks korrektselt l�petatud. Veel on v�imalik, et te loete sisse faili kus on binaarne info v�ljaspool varjestatud tekstiala. Samuti v�iksite te proovida oma p�ringut MySQLi k�sureal. MySQLi viga v�ljastatakse p�ringu all, kui seal t�esti on m�ni viga, siis see v�ib aidata teil leida vea algp�hjuseid. Kui teil on peale seda ikka veel probleeme v�i kui mu parser keeldub t��tamast ning MySQL k�surida t��tab, siis palun v�hendage oma p�ringuid �ksiku p�ringuni, mis p�hjustab probleeme ja sisestage vea raport koos viga p�hjustanud p�ringuga L�IGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL p�ringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea p�hjust.';
$strSQLQuery = 'SQL-p�ring';
$strSQLResult = 'SQL tulemus';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutum�rk/�lakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strStandInStructureForView = 'Sise-vaate struktuur';
$strStatCheckTime = 'Viimane vaatamine';
$strStatCreateTime = 'Loodud';
$strStatement = 'Parameerid';
$strStatisticsOverrun = 'Koormusega serveris, baitide lugeja v�ib lugeda vigadega (overrun), st. see statistika mida n�itab MySQL server ei pruugi olla t�pne.';
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
$strSuccess = 'Teie SQL p�ring t�ideti edukalt';
$strSum = 'Summa';
$strSwedish = 'Rootsi';
$strSwitchToDatabase = 'Mine kopeeritud andmebaasile';
$strSwitchToTable = 'Mine �le kopeeritud tabelile';

$strTableAlreadyExists = 'tabel %s on juba olemas!';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on t�hi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s t�hjendatud';
$strTableHasBeenFlushed = 'Tabel %s �htlustatud';
$strTableIsEmpty = 'Tabel tundub olevat t�hi!';  
$strTableMaintenance = 'Tabeli hooldus';
$strTableName = 'Tabeli nimi';  
$strTableOfContents = 'Sisukord';
$strTableOptions = 'Tabeli seaded';
$strTables = '%s tabel(it)';
$strTableStructure = 'Struktuur tabelile';
$strTable = 'Tabel';
$strTakeIt = 'v�ta see';
$strTblPrivileges = 'Tabel-spetsiifilised privileegid';
$strTempData = 'Ajutised andmed ';
$strTextAreaLength = ' Oma suuruse t�ttu<br /> v�ib see v�li olla mittemuudetav ';
$strThai = 'Tai';
$strThemeDefaultNotFound = 'Ei leia vaikimisi teemat %s!';
$strThemeNoPreviewAvailable = 'Eelvaade pole saadaval.';
$strThemeNotFound = 'Ei leia teemat %s!';
$strThemeNoValidImgPath = 'Ei leia pildi kataloogi teemale %s!';
$strThemePathNotFound = 'Ei leia kataloogi teemale %s!';
$strTheme = 'Teema / Stiil';
$strThisHost = 'Antud host';
$strThreads = 'L�imud';
$strThreadSuccessfullyKilled = 'Protsess %s katkestati edukalt.';
$strTime = 'Aeg';
$strTimeoutInfo = 'Eelmine Import aegus, peale uuesti postitamist j�tkub asukohast %d.';
$strTimeoutNothingParsed = 'Kuigi viimasel laadimisel andmeid ei t��deldud, see t�hendab enamasti et phpMyAdmin pole v�imeline Importi l�petama, kui sa php skripti aega ei pikenda.';
$strTimeoutPassed = 'Skripti ajalimiit on �letatud, kui soovid importimist j�tkata, palun lae sama fail uuesti ja import j�tkub.';
$strToFromPage = 'Kuhu/Kust leht';  
$strToggleScratchboard = 'vaheta m�rkmetahvlit';
$strToSelectRelation = 'Et valida suhe, kliki :';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strTraditionalChinese = 'Traditsionaalne Hiina';
$strTraditionalSpanish = 'Traditsionaalne Hispaania';
$strTraffic = 'Liiklus';
$strTransactionCoordinator = '�lekande kordinaator';
$strTransformation_application_octetstream__download = 'N�ita linki millega laadida alla v�lja binaarne info. Esimene seade on binaarse faili nimi. Teine seade on v�imalik v�ljanimi tabelis mis sisaldab failinime. Kui te m��rate teise seade siis peab esimene seade olema t�hi tekst';
$strTransformation_application_octetstream__hex = 'Kuvab andmed kuueteistk�mnend s�steemis. Valikuline Esimene parameeter seab kui tihti ruumi tehakse (vaikimisi 2 n�kkamist).';
$strTransformation_image_jpeg__inline = 'Kuvab lingitud v�ikepildi; seaded: laius,k�rgus pikslites (hoiab alles originaalpildi laiuse-k�rguse suhte)';
$strTransformation_image_jpeg__link = 'Kuvab lingi sellele pildile (otsene binaarne allalaadimine, jne.).';
$strTransformation_image_png__inline = 'Vaata image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'N�itab TIME, TIMESTAMP, DATETIME v�i numbrilist unix�i ajatempli v�lja formaaditud kuup�evana. Esimene valik on ajanihe (tundides) mis lisatakse ajatemplile (Vaikimisi: 0). Kasuta teist valikut et t�psustada kuup�eva formaat. Kolmas valik annab valida kas kuup�ev kasutab kohalikku aega v�i UTC oma (kasuta "local" (kohalik) v�i "utc" stringe). Sellest tulenevalt, kuup�eva formaadil on teine v��rtus - "local" v��rtuse t�psustamiseks vaata dokumentatsiooni PHP strftime() funktsiooni kasutamise kohta ja  kasutades "utc" vaata gmdate() funtsiooni kasutamist.'; 
$strTransformation_text_plain__external = 'AINULT LINUXILE: K�ivitab v�lise aplikatsiooni ja annab talle standard sisendisse ette v�lja sisu. Tagastab aplikatsiooni standard v�ljundi. Vaikimisi on selleks Tidy, et kuvada ilusti formaaditud HTML koodi. Turvariskide maandamiseks peate te k�sitsi muutma faili libraries/transformations/text_plain__external.inc.php ja lisama sinna programmid mida te lasete k�ivitada. Esimene seade on siis kasutatava programmi number, teine seade on programmi parameetrid. Kui kolmas seade on 1 siis t��deldakse v�ljund funktsiooniga htmlspecialchars() (vaikimisi 1). Kui neljas seade on  1 pannakse NOWRAP sisu lahtrile nii, et kogu v�ljund kuvatakse ilma formaati muutmata(vaikimisi 1)';
$strTransformation_text_plain__formatted = 'Hoiab alles originaalset v�lja formaati. Ei varjestata.';
$strTransformation_text_plain__imagelink = 'Kuvab pildi ja lingi, v�li sisaldab failinime; esimene seade on eelnev tekst nagu "http://domain.com/", teine seade on laius pikslites, kolmas on k�rgus.';
$strTransformation_text_plain__link = 'Kuvab lingi, v�li sisaldab failinime; esimene seade on eelnev tekst n�iteks "http://domain.com/", teine seade on nimi lingile.';
$strTransformation_text_plain__sql = 'Vormib SQL p�ringu tekstiks esile t�stetuna.';
$strTransformation_text_plain__substr = 'N�itab ainult osa tekstist. Esimene seade on m��rang kust positsioonilt teie teksti kuva hakkab.(vaikimisi 0). Teine seade on kuipalju teksti tagastatakse, kui see t�hjaks j�tta, tagastatakse kogu allesj��nud tekst. Kolmas seade defineerib mis tekst lisatakse v�ljundi l�ppu kui saadud tekst tagastatakse. (vaikimisi: ...) .';
$strTruncateQueries = 'L�henda n�idatavad p�ringud';
$strTurkish = 'T�rgi';
$strType = 'T��p';

$strUkrainian = 'Ukraina';
$strUncheckAll = 'Puhasta k�ik';
$strUnicode = 'Unikaalne';
$strUnique = 'Unikaalne';
$strUnknown = 'tundmatu';
$strUnselectAll = 'Puhasta k�ik';
$strUnsupportedCompressionDetected = 'Proovisid laadida faili tundmatu pakkimisega (%s). V�imalik et toetus ei ole veel lisatud v�i on sinu seadetes keelatud.';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda p�ringut';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUpgrade = 'Te peaksite uuendama %s -i versioonini %s v�i uuemaks.';
$strUploadLimit = 'Te kindlasti proovisite laadida liiga suurt faili. Palun uuri dokumentatsiooni %sdocumentation%s selle limiidi seadmiseks.';
$strUploadsNotAllowed = 'Faile pole lubatud laadida sellesse serverisse.';  
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites v�i tabelinimedes';
$strUsedPhpExtensions = 'Kasutatud PHP laiendid';
$strUseHostTable = 'Kasuta host tabelit';
$strUserAlreadyExists = 'Kasutaja %s on juba olemas!';
$strUserEmpty = 'Kasutajanimi on t�hi!';
$strUser = 'Kasutaja';
$strUserName = 'Kasutajanimi';
$strUserNotFound = 'Valitud kasutajat ei leitud privileegide tabelist.';
$strUserOverview = 'Kasutaja �levaade';
$strUsersDeleted = 'Valitud kasutajad on �nnestunult kustutatud.';
$strUsersHavingAccessToDb = 'Kasutajad kellel on ligip��s &quot;%s&quot;';
$strUseTabKey = 'Kasutage TAB klahvi, et liikuda �helt v��rtuselt teisele v�i CTRL+nool, et liikuda noole suunas';
$strUseTables = 'Kasuta tabeleid';
$strUseTextField = 'Kasutage tekstiv�lja';
$strUseThisValue = 'Kasuta seda v��rtust';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'V��rtus';
$strVar = 'Muutuja';
$strVersionInformation = 'Versiooni info';
$strViewDumpDatabases = 'N�ita andmebaaside sisu (skeemi)';
$strViewDumpDB = 'Vaata andmebaasi v�ljundit (skeemi)';
$strViewDump = 'Vaata tabeli v�ljundit (skeemi)';
$strViewHasBeenDropped = 'Vaade %s on kustutatud';
$strViewMaxExactCount = 'Sellel vaatel on rohkem kui %s rida. Palun vaata %sdocumentation%s.';
$strView = 'Vaade';

$strWebServerUploadDirectoryError = 'Kataloog mille Te �leslaadimiseks s�ttisite ei ole ligip��setav';
$strWebServerUploadDirectory = 'webiserveri �leslaadimiskataloogi';
$strWelcome = 'Tere tulemast %s';
$strWestEuropean = 'L��ne-Euroopa';
$strWildcard = 'metam�rk';
$strWindowNotFound = 'Vajaliku sirvija akent ei suudetud uuendada. V�ibolla Te olete peaakna sulgenud v�i Teie sirvija ei luba akendevahelist suhtlist t�nu turvaseadetele.';
$strWithChecked = 'Valitud:';
$strWriteRequests = 'P��rdumised kirjutamiseks';
$strWrongUser = 'Vale kasutajanimi/parool. Ligip��s keelatud.';

$strXML = 'XML';

$strYes = 'Jah';

$strZeroRemovesTheLimit = 'M�rkus: M�rkides antud seaded 0 (null), eemaldate limiidi.';
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
