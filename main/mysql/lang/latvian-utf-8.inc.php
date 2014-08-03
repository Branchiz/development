<?php
/* $Id: latvian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Latvian language file by Sandis Jērics <sandisj at parks.lv>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'P', 'O', 'T', 'C', 'Pk', 'S');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y %H:%M';

$timespanfmt = '%s dienas, %s stundas, %s minūtes un %s sekundes';

$strAbortedClients = 'Pārtraukts';
$strAccessDeniedExplanation = 'phpMyAdmin mēģināja pieslēgties MySQL serverim, un serveris noraidīja pieslēgumu. Lūdzu pārbaudiet hostu, lietotājvārdu un paroli config.inc.php failā, un pārliecinieties, ka tie atbilst informācijai, ko Jums deva MySQL servera administrators.';
$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darbība';
$strAddAutoIncrement = 'Pievienot AUTO_INCREMENT vērtību';
$strAddConstraints = 'Pievienot ierobežojumus';
$strAddDeleteColumn = 'Pievienot/Dzēst laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dzēst ierakstu';
$strAddFields = 'Pievienot %s lauku(s)';
$strAddHeaderComment = 'Ievietot virsrakstā komentāru (\\n atdala rindas)';
$strAddIntoComments = 'Pievienot komentāros';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPrivilegesOnDb = 'Pievienot privilēģijas uz sekojošo  datubāzi';
$strAddPrivilegesOnTbl = 'Pievienot privilēģijas uz sekojošo tabulu';
$strAddSearchConditions = 'Pievienot meklēšanas nosacījumus ("where" izteiksmes ķermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUserMessage = 'Jūs pievienojāt jaunu lietotāju.';
$strAddUser = 'Pievienot jaunu lietotāju';
$strAdministration = 'Administrācija';
$strAffectedRows = 'Ietekmēto rindu skaits:';
$strAfterInsertBack = 'Atgriezties atpakaļ iepriekšējā lapā';
$strAfterInsertNewInsert = 'Ievietot vēl vienu rindu';
$strAfterInsertSame = 'Atgriezties šajā lapā';
$strAfter = 'Pēc %s';
$strAllTableSameWidth = 'rādīt visas tabulas vienadā platumā?';
$strAll = 'Visi';
$strAlterOrderBy = 'Mainīt datu kārtošanas laukus';
$strAnalyzeTable = 'Analizēt tabulu';
$strAnd = 'Un';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnyHost = 'Jebkurš hosts';
$strAny = 'Jebkurš';
$strAnyUser = 'Jebkurš lietotājs';
$strApproximateCount = 'Var būt aptuvens skaits. Skatīt FAQ 3.11';
$strAPrimaryKey = 'Primārā atslēga pievienota uz lauka %s';
$strArabic = 'Arābu';
$strArmenian = 'Armēņu';
$strAscending = 'Augošā secībā';
$strAtBeginningOfTable = 'Tabulas sākumā';
$strAtEndOfTable = 'Tabulas beigās';
$strAttr = 'Atribūti';
$strAutomaticLayout = 'Automātiskais izvietojums';

$strBack = 'Atpakaļ';
$strBaltic = 'Baltijas';
$strBeginCut = 'IZGRIEZT NO ŠĪS VIETAS';
$strBeginRaw = 'RINDAS SĀKUMS';
$strBinary = 'Binārais';
$strBinaryDoNotEdit = 'Binārais - netiek labots';
$strBinaryLog = 'Binārais log-fails';
$strBinLogEventType = 'Notikuma tips';
$strBinLogInfo = 'Informācija';
$strBinLogName = 'Log-faila nosaukums';
$strBinLogOriginalPosition = 'Oriģinālā pozīcija';
$strBinLogPosition = 'Pozīcija';
$strBinLogServerId = 'Servera ID';
$strBookmarkAllUsers = 'Dot ikvienam lietotājam pieeju šai grāmatzīmei';
$strBookmarkDeleted = 'Ieraksts tika dzēsts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglabātie SQL vaicājumi';
$strBookmarkThis = 'Saglabāt šo SQL vaicājumu';
$strBookmarkView = 'Tikai apskatīt';
$strBrowse = 'Apskatīt';
$strBrowseForeignValues = 'Pārlūkot ārējās vērtības';
$strBulgarian = 'Bulgāru';
$strBzError = 'phpMyAdmin nevarēja saarhivēt failu dēļ bojāta Bz2 paplašinājuma šajā php versijā. Stingri rekomendējam uzstādīt <code>$cfg[\'BZipDump\']</code> direktīvu phpMyAdmin konfigurācijas failā uz <code>FALSE</code>. Ja vēlaties lietot Bz2 kompresijas iespējas, Jums jāuzliek jaunāka php versija. Skatīt php bug report %s sīkākai informācijai.';
$strBzip = 'Arhivēts ar bzip';

$strCalendar = 'Kalendārs';
$strCannotLogin = 'Nevar pieslēgties MySQL serverim';
$strCantLoad = 'nevar ielādēt paplašinājumu %s,<br />lūdzu pārbaudiet PHP konfigurāciju';
$strCantLoadRecodeIconv = 'Nevar ielādēt iconv vai recode paplašinājumu, kas ir nepieciešams rakstzīmju konvertācijai, lūdzu nokonfigurējiet php, lai varētu lietot šos paplašinājumus, vai arī atslēdziet rakstzīmju konvertāciju phpMyAdmin konfigurācijā.';
$strCantRenameIdxToPrimary = 'Nevar pārsaukt indeksu par PRIMARY!';
$strCantUseRecodeIconv = 'Nevar lietot iconv, libiconv vai recode_string funkciju, bet php saka, ka paplašinājums ir ielādēts. Pārbaudiet php konfigurāciju.';
$strCardinality = 'Kardinalitāte';
$strCaseInsensitive = 'reģistrnejūtīgs';
$strCaseSensitive = 'reģistrjūtīgs';
$strCentralEuropean = 'Centrāleiropas';
$strChangeCopyModeCopy = '... paturēt veco lietotāju.';
$strChangeCopyModeDeleteAndReload = ' ... dzēst veco lietotāju no lietotāju tabulas, un pēc tam pārlādēt privilēģijas.';
$strChangeCopyMode = 'Izveidot jaunu lietotāju ar tādām pašām privilēģijām un ...';
$strChangeCopyModeJustDelete = ' ... dzēst veco lietotāju no lietotāju tabulas.';
$strChangeCopyModeRevoke = ' ... atņemt vecajam lietotājam visas aktīvās privilēģijas, un pēc tam dzēst viņu.';
$strChangeCopyUser = 'Mainīt piekļuves informāciju / Klonēt lietotāju';
$strChangeDisplay = 'Izvēlieties, kuru lauku rādīt';
$strChange = 'Labot';
$strChangePassword = 'Mainīt paroli';
$strCharset = 'Kodējums';
$strCharsetOfFile = 'Tabulas kodējums:';
$strCharsetsAndCollations = 'Rakstzīmju kodējumi un izkārtojumi';
$strCharsets = 'Rakstzīmju kodējumi';
$strCheckAll = 'Iezīmēt visu';
$strCheckOverhead = 'Iezīmēt tabulas ar pārtēriņu';
$strCheckPrivsLong = 'Pārbaudīt privilēģijas uz datubāzi &quot;%s&quot;.';
$strCheckPrivs = 'Pārbaudīt privilēģijas';
$strCheckTable = 'Pārbaudīt tabulu';
$strChoosePage = 'Izvēlieties lapu redigēšanai';
$strColComFeat = 'Rādu kolonnu komentārus';
$strCollation = 'Izkārtojumi';
$strColumnNames = 'Kolonnu nosaukumi';
$strColumnPrivileges = 'Kolonnu specifiskās privilēģijas';
$strCommand = 'Komanda';
$strCommentsForTable = 'KOMENTĀRI TABULAI';
$strComments = 'Komentāri';
$strCompatibleHashing = 'MySQL&nbsp;4.0 savietojams';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nevar nolasīt konfigurācijas failu!<br />Tas var notikt, ja PHP atrod tajā kļūdu, vai arī nevar atrast so failu.<br />Mēginiet izsaukt konfigurācijas failu tieši, klikškinot linku zemāk un lasiet PHP pazinojumu par kļūdām. Vairākumā gadījumu kaut kur pietrukst pēdiņa vai semikols.<br />Ja redzat tukšu lapu, viss ir kārtībā.';
$strConfigureTableCoord = 'Lūdzu konfigurējiet koordinātes tabulai %s';
$strConnectionError = 'Nevar pieslēgties: kļūda konfigurācijā.';
$strConnections = 'Konekcijas';
$strConstraintsForDumped = 'Ierobežojumi izmestām tabulām';
$strConstraintsForTable = 'Ierobežojumi tabulai';
$strCookiesRequired = '"Cookies" ir jābūt atļautiem aiz šī punkta.';
$strCopyDatabaseOK = 'Datubāze %s tika pārkopēta uz %s';
$strCopyTable = 'Kopēt tabulu uz (datubāze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika pārkopēta uz %s.';
$strCopyTableSameNames = 'Nevar nokopēt tabulu uz viņu pašu!';
$strCouldNotKill = 'phpMyAdmin nevarēja nogalināt procesu %s. Iespējams, ka tas jau agrāk tika izbeigts.';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreate = 'Izveidot';
$strCreateNewDatabase = 'Izveidot jaunu datubāzi';
$strCreateNewTable = 'Izveidot jaunu tabulu datubāzē %s';
$strCreatePage = 'Izveidot jaunu lapu';
$strCreatePdfFeat = 'PDF failu izveide';
$strCreationDates = 'Izveidošanas/Atjaunošanas/Piekļuves datumi';
$strCriteria = 'Kritērijs';
$strCroatian = 'Horvātu';
$strCyrillic = 'Kirilisks';
$strCzech = 'Čehu';
$strCzechSlovak = 'Čehu-Slovāku';

$strDanish = 'Dāņu';
$strDatabase = 'Datubāze';
$strDatabaseEmpty = 'Datubāzes nosaukums ir tukšs!';
$strDatabaseExportOptions = 'Datubāzu eksporta opcijas';
$strDatabaseHasBeenDropped = 'Datubāze %s tika izdzēsta.';
$strDatabases = 'Datubāzes';
$strDatabasesDropped = '%s datubāzes tika veiksmīgi dzēstas.';
$strDatabasesStats = 'Datubāzu statistika';
$strDatabasesStatsDisable = 'Izslēgt statistiku';
$strDatabasesStatsEnable = 'Ieslēgt statistiku';
$strDatabasesStatsHeavyTraffic = 'Piezīme: Datubāzes statistikas ieslēgšana šeit var izsaukt palielināto datu apmaiņu starp webserveri un MySQL serveri.';
$strData = 'Dati';
$strDataDict = 'Datu vārdnīca';
$strDataOnly = 'Tikai dati';
$strDBComment = 'Datubāzes komentārs: ';
$strDBCopy = 'Kopēt datubāzi uz';
$strDbPrivileges = 'Datubāžu specifiskās privilēģijas';
$strDBRename = 'Pārsaukt datubāzi par';
$strDbSpecific = 'datubāzei specifisks';
$strDefault = 'Noklusēts';
$strDefaultValueHelp = 'Noklusētajām vērtībām, lūdzu ievadiet tikai pašu vertību, bez izsargāšanās ar atpakaļējo slīpsvītru vai pēdiņām, lietojot šo formatu: a';
$strDefragment = 'Defragmentēt tabulu';
$strDelayedInserts = 'Lietot aizturētos INSERT';
$strDeleteAndFlushDescr = 'Tas ir labākais veids, bet privilēģiju pārlādēšana var paņemt zināmu laiku.';
$strDeleteAndFlush = 'Dzēst lietotājus, un pēc tam pārlādēt privilēģijas.';
$strDeleted = 'Ieraksts tika dzēsts';
$strDeletedRows = 'Ieraksti dzēsti:';
$strDelete = 'Dzēst';
$strDeleting = 'Dzēšam %s';
$strDelOld = 'Tekošajā lapā ir atsauces uz tabulām, kas vairs neeksistē. Vai Jūs gribat dzēst šīs atsauces?';
$strDescending = 'Dilstošā secībā';
$strDescription = 'Apraksts';
$strDictionary = 'vārdnīca';
$strDisabled = 'Izslēgts';
$strDisableForeignChecks = 'Nepārbaudīt ārējās atslēgas';
$strDisplayFeat = 'Rādīt iespējas';
$strDisplayOrder = 'Attēlošanas secība:';
$strDisplayPDF = 'Rādīt PDF shēmu';
$strDoAQuery = 'Izpildīt "vaicājumu pēc parauga" (aizstājējzīme: "%")';
$strDocu = 'Dokumentācija';
$strDoYouReally = 'Vai Jūs tiešām gribat ';
$strDropDatabaseStrongWarning = 'Jūs taisaties LIKVIDĒT veselu datubāzi!';
$strDrop = 'Likvidēt';
$strDropUsersDb = 'Dzēst datubāzes, kurām ir tādi paši vārdi, kā lietotājiem.';
$strDumpingData = 'Dati tabulai';
$strDumpSaved = 'Damps tika saglabāts failā %s.';
$strDumpXRows = 'Saglabāt %s rindas, sākot ar %s.';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPDFPages = 'Labot PDF lapas';
$strEditPrivileges = 'Mainīt privilēģijas';
$strEffective = 'Efektīvs';
$strEmpty = 'Iztukšot';
$strEmptyResultSet = 'MySQL atgrieza tukšo rezultātu (0 rindas).';
$strEnabled = 'Ieslēgts';
$strEncloseInTransaction = 'Iekļaut eksportu transakcijā';
$strEnd = 'Beigas';
$strEndCut = 'IZGRIEZT LĪDZ ŠAI VIETAI';
$strEndRaw = 'RINDAS BEIGAS';
$strEnglish = 'Angļu';
$strEnglishPrivileges = ' Piezīme: MySQL privilēģiju apzīmējumi tiek rakstīti angļu valodā ';
$strError = 'Kļūda';
$strEscapeWildcards = 'Aizstājējzīmes _ un % jāaizsargā ar \ priekšā, lai izmantotu tās burtiski';
$strEstonian = 'Igauņu';
$strExcelEdition = 'Excel redakcija';
$strExecuteBookmarked = 'Izpildīt iegrāmatoto vaicājumu';
$strExplain = 'Izskaidrot SQL';
$strExport = 'Eksports';
$strExtendedInserts = 'Paplašinātas INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFailedAttempts = 'Neveiksmīgi mēģinājumi';
$strFieldHasBeenDropped = 'Lauks %s tika izdzēsts';
$strField = 'Lauks';
$strFieldsEnclosedBy = 'Lauki iekļauti iekš';
$strFieldsEscapedBy = 'Glābjoša (escape) rakstzīme ir';
$strFields = 'Lauki';
$strFieldsTerminatedBy = 'Lauki atdalīti ar';
$strFileAlreadyExists = 'Fails %s jau eksistē uz servera. Lūdzu nomainiet faila nosaukumu vai atzīmējiet failu pārrakstīšanas opciju.';
$strFileCouldNotBeRead = 'Nevar nolasīt failu';
$strFileNameTemplate = 'Faila nosaukuma šablons';
$strFileNameTemplateRemember = 'atcerēties šablonu';
$strFixed = 'fiksēts';
$strFlushPrivilegesNote = 'Piezīme: phpMyAdmin saņem lietotāju privilēģijas pa taisno no MySQL privilēģiju tabilām. Šo tabulu saturs var atšķirties no privilēģijām, ko lieto serveris, ja tur tika veikti labojumi. Šajā gadījumā ir nepieciešams %spārlādēt privilēģijas%s pirms Jūs turpināt.';
$strFlushTable = 'Atsvaidzināt tabulu ("FLUSH")';
$strFormat = 'Formats';
$strFormEmpty = 'Formā trūkst vērtību!';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenBy = 'Uzģenerēja';
$strGeneralRelationFeat = 'Galvenās relāciju īpašības';
$strGenTime = 'Izveidošanas laiks';
$strGeorgian = 'Gruzīnu';
$strGerman = 'Vācu';
$strGlobal = 'globāls';
$strGlobalPrivileges = 'Globālās privilēģijas';
$strGlobalValue = 'Globālā vērtība';
$strGo = 'Aiziet!';
$strGrantOption = 'Piešķirt';
$strGreek = 'Grieķu';
$strGzip = 'Arhivēts ar gzip';

$strHasBeenAltered = 'tika modificēta.';
$strHasBeenCreated = 'tika izveidota.';
$strHaveToShow = 'Izvēlieties vismaz vienu kolonnu attēlošanai';
$strHebrew = 'Ebreju';
$strHomepageOfficial = 'Oficiālā phpMyAdmin mājaslapa';
$strHome = 'Sākumlapa';
$strHostEmpty = 'Hosts nav norādīts!';
$strHost = 'Hosts';
$strHungarian = 'Ungāru';

$strIcelandic = 'Islandiešu';
$strId = 'ID';
$strIdxFulltext = 'Pilni teksti';
$strIgnore = 'Ignorēt';
$strIgnoreInserts = 'Lietot IGNORE INSERTS';
$strImportFiles = 'Importēt failus';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indekss %s tika izdzēsts';
$strIndex = 'Indekss';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strIndexWarningTable = 'Problēmas ar indeksiem tabulā `%s`';
$strInnodbStat = 'InnoDB statuss';
$strInsecureMySQL = 'Jūsu konfigurācijas fails satur iestādījumus (lietotājs "root" bez paroles), kas atbilst noklusētajam MySQL priviliģētajam lietotājam. Jūsu MySQL serveris strādā ar šo noklusēto variantu, ir atvērts uzbrukumiem, un Jums tiešām jāaiztaisa šis drošības caurums.';
$strInsertAsNewRow = 'Ievietot kā jaunu rindu';
$strInsertedRowId = 'Ievietotās rindas id:';
$strInsertedRows = 'Rindas pievienotas:';
$strInsert = 'Pievienot';
$strInternalNotNecessary = '* Iekšējā relācija nav nepieciešama, kad tā eksistē arī iekš InnoDB.';
$strInternalRelations = 'Iekšējās relācijas';
$strInUse = 'lietošanā';

$strJapanese = 'Japāņu';
$strJumpToDB = 'pāriet pie datubāzes &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Dzēstie&quot; lietotāji saglabā spēju piekļūt serverim kā parasti, līdz privilēģijas tiek pārlādētas.';
$strJustDelete = 'Dzēst lietotājus no privilēģiju tabulām.';

$strKeepPass = 'Nemainīt paroli';
$strKeyname = 'Atslēgas nosaukums';
$strKill = 'Nogalināt';
$strKorean = 'Korejiešu';

$strLandscape = 'Ainava';
$strLatexCaption = 'Tabulas virsraksts';
$strLatexContent = 'Tabulas __TABLE__ saturs';
$strLatexContinuedCaption = 'Tabulas virsraksta turpinājums';
$strLatexContinued = '(turpinājums)';
$strLatexIncludeCaption = 'Iekļaut tabulas virsrakstu';
$strLatexLabel = 'Etiķetes atslēga';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Tabulas __TABLE__ struktūra';
$strLatvian = 'Latviešu';
$strLengthSet = 'Garums/Vērtības*';
$strLimitNumRows = 'Rindu skaits vienā lapā';
$strLinesTerminatedBy = 'Rindas atdalītas ar';
$strLinkNotFound = 'Links nav atrasts';
$strLinksTo = 'Linki uz';
$strLithuanian = 'Lietuviešu';
$strLocalhost = 'Lokāls';
$strLocationTextfile = 'Teksta faila atrašanās vieta';
$strLogin = 'Ieiet';
$strLoginInformation = 'Piekļuves informācija';
$strLogout = 'Iziet';
$strLogPassword = 'Parole:';
$strLogServer = 'Serveris';
$strLogUsername = 'Lietotājvārds:';

$strMaximumSize = 'Maksimālais izmērs: %s%s';
$strMIME_available_mime = 'Pieejamie MIME tipi';
$strMIME_available_transform = 'Pieejamās transformācijas';
$strMIME_description = 'Apraksts';
$strMIME_MIMEtype = 'MIME tips';
$strMIME_nodescription = 'Šai transformācijai nav apraksta.<br />Jautājiet autoram, ko %s dara.';
$strMIME_transformation_note = 'Lai iegūtu pieejamo transformāciju opcijas un to MIME tipu transformācijas, uzklikšķiniet uz %stransformāciju apraksti%s';
$strMIME_transformation_options_note = 'Lūdzu ievadiet transformāciju opciju vērtības, lietojot šo formatu: \'a\', 100, b,\'c\'...<br />Ja Jums jālieto atpakaļējā slīpsvītra ("\") vai vienkāršā pēdiņa ("\'") starp šīm vērtībām, lieciet tās priekšā vēl vienu atpakaļējo slīpsvītru (piemēram \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformācijas opcijas';
$strMIME_transformation = 'Pārlūkprogrammas transformācija';
$strMIMETypesForTable = 'MIME TIPI TABULAI';
$strMIME_without = 'MIME tipiem, kas parādīti slīprakstā, nav atsevišķas transformācijas funkcijas';
$strModifications = 'Labojumi tika saglabāti';
$strModifyIndexTopic = 'Labot indeksu';
$strModify = 'Labot';
$strMoveTableOK = 'Tabula %s tika pārvietota uz %s.';
$strMoveTable = 'Pārvietot tabulu uz (datubāze<b>.</b>tabula):';
$strMoveTableSameNames = 'Nevar pārvietot tabulu uz viņu pašu!';
$strMultilingual = 'daudzvalodu';
$strMySQLCharset = 'MySQL kodējums';
$strMySQLConnectionCollation = 'MySQL konekcijas kārtošana';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLShowProcess = 'Parādīt procesus';
$strMySQLShowStatus = 'Parādīt MySQL izpildes laika informāciju';
$strMySQLShowVars = 'Parādīt MySQL sistēmas mainīgos';

$strName = 'Nosaukums';
$strNext = 'Nākamie';
$strNoActivity = 'Nebija aktivitātes vairāk kā %s sekunžu laikā, lūdzu autorizējieties vēlreiz';
$strNoDatabases = 'Nav datubāzu';
$strNoDatabasesSelected = 'Datubāze nav izvēlēta.';
$strNoDescription = 'Bez apraksta';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoExplain = 'Neizskaidrot SQL';
$strNoFrames = 'phpMyAdmin ir vairāk draudzīgs <b>freimu atbalstošām</b> pārlūkprogrammām.';
$strNoIndex = 'Nav definēti indeksi!';
$strNoIndexPartsDefined = 'Nav definēto indeksa daļu!';
$strNoModification = 'Netika labots';
$strNo = 'Nē';
$strNone = 'Nav';
$strNoOptions = 'Šim formātam nav opciju';
$strNoPassword = 'Nav paroles';
$strNoPermission = 'Web serverim nav tiesību rakstīt failā %s.';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Nav privilēģiju';
$strNoRights = 'Jums nav pietiekoši tiesību, lai atrastos šeit tagad!';
$strNoRowsSelected = 'Rindas nav iezīmētas';
$strNoSpace = 'Nepietiek vietas, lai saglabātu failu %s.';
$strNoTablesFound = 'Tabulas nav atrastas šajā datubāzē.';
$strNoThemeSupport = 'Nav tēmu atbalsta, lūdzu pārbaudiet jūsu konfigurāciju un/vai Jūsu tēmas direktorijā %s.';
$strNotNumber = 'Tas nav numurs!';
$strNotOK = 'nav OK';
$strNotSet = 'Tabula <b>%s</b> nav atrasta vai nav atzīmeta iekš %s';
$strNoUsersFound = 'Lietotāji netika atrasti.';
$strNoValidateSQL = 'Nepārbaudīt SQL';
$strNull = 'Nulle';
$strNumSearchResultsInTable = '%s rezultāti tabulā <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kopumā:</b> <i>%s</i> rezultāti';
$strNumTables = 'Tabulas';

$strOK = 'Labi';
$strOperations = 'Darbības';
$strOperator = 'Operators';
$strOptimizeTable = 'Optimizēt tabulu';
$strOr = 'Vai';
$strOverhead = 'Pārtēriņš';
$strOverwriteExisting = 'Pārrakstīt eksistējošos failus';

$strPageNumber = 'Lapas numurs:';
$strPaperSize = 'Papīra izmērs';
$strPartialText = 'Daļēji teksti';
$strPasswordChanged = 'Lietotāja %s parole tika veiksmīgi mainīta.';
$strPasswordEmpty = 'Parole nav norādīta!';
$strPasswordHashing = 'Paroles jaukšana';
$strPasswordNotSame = 'Paroles nesakrīt!';
$strPassword = 'Parole';
$strPdfDbSchema = 'Datubāzes "%s" shēma, %s. lapa';
$strPdfInvalidTblName = 'Tabula "%s" neeksistē!';
$strPdfNoTables = 'Nav tabulu';
$strPerHour = 'stundā';
$strPerMinute = 'minūtē';
$strPerSecond = 'sekundē';
$strPersian = 'Persiešu';
$strPhoneBook = 'telefonu grāmata';
$strPHP40203 = 'Jūs lietojat PHP versiju 4.2.3, kurai ir nopietna kļūda daudzbaitu rindiņu funkcijās (mbstring). Skatīt PHP bug report 19404. Sī PHP versija nav rekomendējama lietošanai ar phpMyAdmin.';
$strPhp = 'Izveidot PHP kodu';
$strPHPVersion = 'PHP Versija';
$strPmaDocumentation = 'phpMyAdmin dokumentācija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktīvai ir JĀBŪT nodefinētai Jūsu konfigurācijas failā!';
$strPolish = 'Poļu';
$strPortrait = 'Portrets';
$strPos1 = 'Sākums';
$strPrevious = 'Iepriekšējie';
$strPrimaryKeyHasBeenDropped = 'Primārā atslēga tika izdzēsta';
$strPrimaryKeyName = 'Primārās atslēgas nosaukumam jābūt... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>jābūt</b> tikai un <b>vienīgi</b> primārās atslēgas indeksa nosaukumam!)';
$strPrimary = 'Primārā';
$strPrint = 'Drukāt';
$strPrintViewFull = 'Drukas skats (ar pilniem tekstiem)';
$strPrintView = 'Izdrukas versija';
$strPrivDescAllPrivileges = 'Iekļauj visas privilēģijas, izņemot GRANT.';
$strPrivDescAlter = 'Ļauj mainīt esošo tabulu struktūru.';
$strPrivDescCreateDb = 'Ļauj veidot jaunas datubāzes un tabulas.';
$strPrivDescCreateTbl = 'Ļauj veidot jaunas tabulas.';
$strPrivDescCreateTmpTable = 'Ļauj veidot pagaidu tabulas.';
$strPrivDescDelete = 'Ļauj dzēst datus.';
$strPrivDescDropDb = 'Ļauj dzēst datubāzes un tabulas.';
$strPrivDescDropTbl = 'Ļauj dzēst tabulas.';
$strPrivDescExecute = 'Ļauj palaist saglabātās procedūras; vēl nestrādā šajā MySQL versijā.';
$strPrivDescFile = 'Ļauj importēt/eksportēt datus no/uz failiem.';
$strPrivDescGrant = 'Ļauj pievienot lietotājus un privilēģijas bez privilēģiju tabulu pārlādēšanas.';
$strPrivDescIndex = 'Ļauj veidot un dzēst indeksus.';
$strPrivDescInsert = 'Ļauj ievietot un mainīt datus.';
$strPrivDescLockTables = 'Ļauj bloķēt tabulas tekošajai darbībai.';
$strPrivDescMaxConnections = 'Ierobežo jauno konekciju skaitu, ko lietotājs var atvērt stundas laikā.';
$strPrivDescMaxQuestions = 'Ierobežo vaicājumu skaitu, ko lietotājs var mosūtīt uz serveri stundas laikā.';
$strPrivDescMaxUpdates = 'Ierobežo komandu skaitu, kas maina kas maina tabulas vai datubāzes, ko lietotājs var izpildīt stundas laikā.';
$strPrivDescProcess3 = 'Ļauj nogalināt citu lietotāju procesus.';
$strPrivDescProcess4 = 'Ļauj apskatīt pieprasījumu un procesu sarakstus.';
$strPrivDescReferences = 'Nedarbojas šajā MySQL versijā.';
$strPrivDescReload = 'Ļauj prlādēt servera iestādījumus un iztukšot servera kešu.';
$strPrivDescReplClient = 'Dod lietotājam tiesības jautāt, kur ir replikācijas oriģināli / kopijas.';
$strPrivDescReplSlave = 'Nepieciešams replikāciju kopijām.';
$strPrivDescSelect = 'Ļauj lasīt datus.';
$strPrivDescShowDb = 'Dod pieeju pilnam datubāzu sarakstam.';
$strPrivDescShutdown = 'Ļauj apstādināt serveri.';
$strPrivDescSuper = 'Ļauj pieslēgties pat tad, ja ir sasniegts maksimālais konekciju skaits; Nepieciešams vairumam administratīvo operāciju, kā globālo mainīgo maiņa vai citu lietotāju procesu nogalināšana.';
$strPrivDescUpdate = 'Ļauj mainīt datus.';
$strPrivDescUsage = 'Nav privilēģiju.';
$strPrivileges = 'Privilēģijas';
$strPrivilegesReloaded = 'Privilēģijas tika veiksmīgi pārlādētas.';
$strProcesses = 'Procesi';
$strProcesslist = 'Procesu saraksts';
$strPutColNames = 'Likt kolonnu nosaukumus pirmajā rindā';

$strQBEDel = 'Dzēst';
$strQBEIns = 'Ielikt';
$strQBE = 'Vaicājums pēc parauga';
$strQueryFrame = 'Vaicājuma logs';
$strQueryOnDb = 'SQL vaicājums uz datubāzes <b>%s</b>:';
$strQuerySQLHistory = 'SQL vēsture';
$strQueryStatistics = '<b>Pieprasījumu statistika</b>: %s pieprasījumi tika nosūtīti uz serveri kopš tā palaišanās brīža.';
$strQueryTime = 'Vaicājums ilga %01.4f s';
$strQueryType = 'Vaicājuma tips';
$strQueryWindowLock = 'Nepārrakstīt šo vaicājumu ārpus šī loga';

$strReceived = 'Saņemts';
$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'Pārbaudīt referenciālo integritāti:';
$strRefresh = 'Atjaunot';
$strRelationalSchema = 'Relāciju shēma';
$strRelationNotWorking = 'Papildiespējas darbam ar saistītām tabulām tika izslēgtas. Lai uzzinātu kāpēc, klikškiniet %sšeit%s.';
$strRelationsForTable = 'RELĀCIJAS TABULAI';
$strRelations = 'Relācijas';
$strRelationView = 'Relāciju pārskats';
$strReloadingThePrivileges = 'Pārlādējam privilēģijas';
$strRemoveSelectedUsers = 'Dzēst izvēlētos lietotājus';
$strRenameDatabaseOK = 'Datubāze %s tika pārsaukta par %s';
$strRenameTableOK = 'Tabula %s tika pārsaukta par %s';
$strRenameTable = 'Pārsaukt tabulu uz';
$strRepairTable = 'Restaurēt tabulu';
$strReplaceNULLBy = 'Aizvietot NULL ar';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strResourceLimits = 'Resursu ierobežojumi';
$strReType = 'Atkārtojiet';
$strRevokeAndDelete = 'Atņemt visas aktīvās privilēģijas lietotājiem, un pēc tam dzēst tos.';
$strRevokeAndDeleteDescr = 'Lietotāji saglabā iespeju lietot datubāzes, līdz privilēģijas tiek pārlādētas.';
$strRevoke = 'Atsaukt';
$strRevokeMessage = 'Jūs atņēmāt privilēgijas lietotājam %s';
$strRomanian = 'Rumāņu';
$strRowLength = 'Rindas garums';
$strRowsFrom = 'rindas sākot no';
$strRowSize = ' Rindas izmērs ';
$strRowsModeFlippedHorizontal = 'horizontālā (pagriezti virsraksti)';
$strRowsModeHorizontal = 'horizontālā';
$strRowsModeOptions = '%s skatā un atkārtot virsrakstus ik pēc %s rindām';
$strRowsModeVertical = 'vertikālā';
$strRows = 'Rindas';
$strRowsStatistic = 'Rindas statistika';
$strRunning = 'atrodas uz %s';
$strRunQuery = 'Izpildīt vaicājumu';
$strRunSQLQuery = 'Izpildīt SQL vaicājumu(s) uz datubāzes %s';
$strRussian = 'Krievu';

$strSaveOnServer = 'Saglabāt uz servera direktorijā %s';
$strSave = 'Saglabāt';
$strScaleFactorSmall = 'Mērogošanas faktors ir pārāk mazs, lai shēma ietilptu vienā lapā';
$strSearchFormTitle = 'Meklēt datubāzē';
$strSearchInTables = 'Tabulā(s):';
$strSearch = 'Meklēt';
$strSearchNeedle = 'Vārdi vai vērtības meklēšanai (aizstājējzīme: "%"):';
$strSearchOption1 = 'kaut viens no vārdiem';
$strSearchOption2 = 'visi vārdi';
$strSearchOption3 = 'precīza frāze';
$strSearchOption4 = 'kā regulārā izteiksme';
$strSearchResultsFor = 'Meklēšanas rezultāti "<i>%s</i>" %s:';
$strSearchType = 'Atrast:';
$strSecretRequired = 'Konfigurācijas fails tagad prasa slepeno paroli (blowfish_secret).';
$strSelectADb = 'Lūdzu izvēlieties datubāzi';
$strSelectAll = 'Iezīmēt visu';
$strSelectBinaryLog = 'Izvēlieties bināro log-failu apskatei';
$strSelectFields = 'Izvēlieties laukus (kaut vienu):';
$strSelectNumRows = 'vaicājumā';
$strSelectTables = 'Izvēlieties tabulas';
$strSend = 'Saglabāt kā failu';
$strSent = 'Nosūtīts';
$strServerChoice = 'Servera izvēle';
$strServerNotResponding = 'Serveris neatbild';
$strServer = 'Serveris';
$strServerStatus = 'Izpildes laika informācija';
$strServerStatusUptime = 'Šis MySQL serveris strādā %s. Tas tika palaists %s.';
$strServerTabVariables = 'Mainīgie';
$strServerTrafficNotes = '<b>Servera trafiks</b>: Šīs tabulas parāda šī MySQL servera tīkla trafika statistiku kopš tā palaišanas.';
$strServerVars = 'Servera mainīgie un konfigurācija';
$strServerVersion = 'Servera versija';
$strSessionValue = 'Sesijas vērtība';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", lūdzu ievadiet vērtības atbilstoši šim formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpakaļējo slīpsvītru (\) vai vienkāršo pēdiņu (\') kādā no šīm vērtībām, lieciet tās priekšā atpakaļējo slīpsvītru (piemēram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShowAll = 'Rādīt visu';
$strShowColor = 'Rādīt krāsas';
$strShowDatadictAs = 'Datu vārdnīcas formats';
$strShowFullQueries = 'Rādīt pilnos vaicājumus';
$strShowGrid = 'Rādīt režģi';
$strShowingRecords = 'Parādu rindas';
$strShowPHPInfo = 'Parādīt PHP informāciju';
$strShow = 'Rādīt';
$strShowTableDimension = 'Rādit tabulu izmērus';
$strShowTables = 'Rādīt tabulas';
$strShowThisQuery = ' Rādīt šo vaicājumu šeit atkal ';
$strSimplifiedChinese = 'Vienkāršota ķīniešu';
$strSingly = '(atsevišķi)';
$strSize = 'Izmērs';
$strSlovak = 'Slovāku';
$strSlovenian = 'Slovēņu';
$strSortByKey = 'Kārtot pēc atslēgas';
$strSort = 'Kārtošana';
$strSpaceUsage = 'Diska vietas lietošana';
$strSpanish = 'Spāņu';
$strSplitWordsWithSpace = 'Vārdi ir atdalīti ar tukšumu (" ").';
$strSQLExportType = 'Eksporta veids';
$strSQLParserBugMessage = 'Iespējams, ka Jūs esat atraduši kļūdu SQL interpretatorā. Lūdzu apskatiet Jūsu vaicājumu citīgāk, un pārbaudiet, ka pēdiņas ir pareizas un nav sajauktas. Cits kļūdas iemesls var būt tas, ka Jūs atsūtījāt failu ar bināro vērtību ārpus pēdiņās iekļautā teksta lauka. Jūs varat arī izmēģināt savu vaicājumu MySQL komandrindas interfeisā. MySQL servera kļūdas paziņojums zemāk, ja tāds ir, var arī palīdzēt Jums diagnosticēt problēmu. Ja problēma paliek, vai arī iekš phpMyAdmin kļūda ir, bet komandrindā nav, lūdzu samaziniet Jūsu SQL vaicājumu līdz vienkāršam vaicājumam kas izsauc problēmas, un atsūtiet mums ziņojumu par kļūdu, iekļaujot tajā datus no IZGRIEZT sekcijas zemāk:';
$strSQLParserUserError = 'Izkatās, ka Jūsu SQL vaicajumā ir kļūda. MySQL servera kļūdas pazinojums zemāk, ja tāds ir, var arī palīdzet Jums diagnosticēt problēmu.';
$strSQLQuery = 'SQL vaicājums';
$strSQLResult = 'SQL rezultāts';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Nederīgs identifikators';
$strSQPBugUnclosedQuote = 'Neaizvērtas pēdiņas';
$strSQPBugUnknownPunctuation = 'Nezināmā punktuācijas zīme';
$strStatCheckTime = 'Pēdējā pārbaude';
$strStatCreateTime = 'Izveidošana';
$strStatement = 'Parametrs';
$strStatUpdateTime = 'Pēdējā atjaunošana';
$strStatus = 'Statuss';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Struktūra un dati';
$strStrucExcelCSV = 'CSV dati MS Excel formātā';
$strStrucNativeExcel = 'Dati MS Excel formatā';
$strStrucOnly = 'Tikai struktūra';
$strStructPropose = 'Ieteikt tabulas sruktūru';
$strStructure = 'Struktūra';
$strSubmit = 'Nosūtīt';
$strSuccess = 'Jūsu SQL vaicājums tika veiksmīgi izpildīts';
$strSum = 'Kopumā';
$strSwedish = 'Zviedru';
$strSwitchToDatabase = 'Pārslēgties uz nokopēto datubāzi';
$strSwitchToTable = 'Pārslēgties uz nokopēto tabulu';

$strTableComments = 'Komentārs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav norādīts!';
$strTableHasBeenDropped = 'Tabula %s tika izdzēsta';
$strTableHasBeenEmptied = 'Tabula %s tika iztukšota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzināta';
$strTableMaintenance = 'Tabulas apkalpošana';
$strTableOfContents = 'Satura rādītājs';
$strTableOptions = 'Tabulas opcijas';
$strTables = '%s tabula(s)';
$strTableStructure = 'Tabulas struktūra tabulai';
$strTable = 'Tabula';
$strTakeIt = 'izmantot šo stilu';
$strTblPrivileges = 'Tabulu specifiskās privilēģijas';
$strTextAreaLength = ' Sava garuma dēļ,<br /> šis lauks var būt nerediģējams ';
$strThai = 'Taizemiešu';
$strTheme = 'Tēma / Stils';
$strThisHost = 'Šis hosts';
$strThreadSuccessfullyKilled = 'Process %s tika veiksmīgi nogalināts.';
$strTime = 'Laiks';
$strToggleScratchboard = 'parādīt/noslēpt piezīmju tafeli';
$strTotal = 'kopā';
$strTotalUC = 'Kopā';
$strTraditionalChinese = 'Tradicionāla ķīniešu';
$strTraditionalSpanish = 'Tradicionālā spāņu';
$strTraffic = 'Datu apmaiņa';
$strTransformation_application_octetstream__download = 'Rādīt saiti uz lauka bināro datu lejuplādi. Pirmā opcija ir binārā faila nosaukums. Otrā opcija ir iespējamais lauka nosaukums tabulas rindā, kas satur faula nosaukumu. Ja izmantojat otro opciju, pirmo atstājiet tukšo.';
$strTransformation_image_jpeg__inline = 'Parāda klikšķināmo sīktēlu; opcijas: platums, augstums pikseļos (saglabājot oriģinālās proporcijas)';
$strTransformation_image_jpeg__link = 'Parāda linku uz šo attēlu (tieša blob lauka lajuplāde).';
$strTransformation_image_png__inline = 'Skatīties image/jpeg: kā ierindotu attēlu';
$strTransformation_text_plain__external = 'Tikai LINUX: Palaiž ārējo aplikāciju un padod lauka datus tās standartievadā. Atgriež aplikācijas standartizvadi. Noklusējums ir Tidy, kas izskaistina HTML kodu. Drošības apsvērumu dēļ, nepieciešams manuāli rediģēt failu libraries/transformations/text_plain__external.inc.php un ielikt rīkus, kurus Jūs atļaujat palaist. Pirmā opcija ir programmas numurs, ko Jūs vēlaties lietot, otrā opcija ir parametri šai programmai. Trešā opcija, ja ir vienāda ar 1, konvertē izvadi, izmantojot htmlspecialchars() (noklusējums ir 1). Ceturtais parametrs, ja vienāds ar 1, liek NOWRAP parametru satura šūnai, tā kā izvade tiks attēlota bez pārformatēšanas. (noklusējums ir 1)';
$strTransformation_text_plain__formatted = 'Saglabā lauka oriģinālo formatējumu. Speciālo rakstzīmju pasargāšana netiek veikta.';
$strTransformation_text_plain__imagelink = 'Parāda attēlu un linku, lauks satur faila nosauumu; pirmā opcija ir prefikss, piemēram, "http://domens.lv/", otrā opcija ir platums pikseļos, trešā ir augstums.';
$strTransformation_text_plain__link = 'Parāda attēlu un linku, lauks satur faila nosauumu; pirmā opcija ir prefikss, piemēram, "http://domens.lv/", otrā opcija ir linka nosaukums.';
$strTransformation_text_plain__substr = 'Parāda tikai virknes daļu. Pirmā opcija ir nobīde, kas nosaka, kur Jūsu teksts sākas (noklusējums 0). Otrā opcija ir atgriežamā teksta garums. Ja tukša, atgriež visu atlikušo tekstu. Trešā opcija nosaka rakstzīmes, kas tiks pievienotas apgrieztās virknes galā (noklusējums: ...) .';
$strTruncateQueries = 'Ierobežot parādīto vaicājumu garumu';
$strTurkish = 'Turku';
$strType = 'Tips';

$strUkrainian = 'Ukraiņu';
$strUncheckAll = 'Neiezīmēt neko';
$strUnicode = 'Unikods';
$strUnique = 'Unikālais';
$strUnknown = 'nazināma';
$strUnselectAll = 'Neiezīmēt neko';
$strUpdatePrivMessage = 'Jūs modificējāt privilēģijas objektam %s.';
$strUpdateProfileMessage = 'Profils tika modificēts.';
$strUpdateQuery = 'Atjaunot vaicājumu';
$strUpdComTab = 'Lūdzu skatieties dokumentāciju par to, kā atjaunot \'Column_comments\' tabulu';
$strUpgrade = 'Jums ir jāuzliek %s %s vai jaunāks.';
$strUsage = 'Aizņem';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUseHostTable = 'Lietot hostu tabulu';
$strUserAlreadyExists = 'Lietotājs %s jau eksistē!';
$strUserEmpty = 'Lietotāja vārds nav norādīts!';
$strUser = 'Lietotājs';
$strUserName = 'Lietotājvārds';
$strUserNotFound = 'Izvēlētais lietotājs nav atrasts privilēģiju tabulā.';
$strUserOverview = 'Lietotāju pārskats';
$strUsersDeleted = 'Izvēlētie lietotāji tika veiksmīgi dzēsti.';
$strUsersHavingAccessToDb = 'Lietotāji, kam ir pieja datubāzei &quot;%s&quot;';
$strUseTabKey = 'Lietojiet TAB taustiņu, lai pārvietotos no vērtības līdz vērtībai, vai CTRL+bultiņas, lai pārvietotos jebkurā vietā';
$strUseTables = 'Lietot tabulas';
$strUseTextField = 'Lietot teksta lauku';
$strUseThisValue = 'Lietot šo vērtību';

$strValidateSQL = 'Pārbaudīt SQL';
$strValidatorError = 'Nevar inicializēt SQL pārbaudītāju. Lūdzu pārbaudiet, vai esat uzinstalējuši nepieciešamos PHP paplašinājumus, kā aprakstīts %sdokumentācijā%s.';
$strValue = 'Vērtība';
$strVar = 'Mainīgais';
$strViewDump = 'Apskatīt tabulas dampu (shēmu)';
$strViewDumpDatabases = 'Apskatīt datubāzu dampu (shēmu)';
$strViewDumpDB = 'Apskatīt datubāzes dampu (shēmu)';

$strWebServerUploadDirectoryError = 'Direktoija, kuru norādijāt augšupielādei, nav pieejama';
$strWebServerUploadDirectory = 'web servera augšupielādes direktorija';
$strWelcome = 'Laipni lūgti %s';
$strWestEuropean = 'Rietumeiropas';
$strWildcard = 'aizstājējzīme';
$strWindowNotFound = 'Neizdevās atjaunot galveno pārlūkprogramas logu. Varbūt esat viņu aizvēruši, vai arī Jūsu pārlūkprogramma bloķe starplogu saskarsmi Jūsu drošības iestādījumu dēļ.';
$strWithChecked = 'Ar iezīmēto:';
$strWrongUser = 'Kļūdains lietotājvārds/parole. Pieeja aizliegta.';

$strXML = 'XML';

$strYes = 'Jā';

$strZeroRemovesTheLimit = 'Piezīme: Šo opciju uzstādīšana uz 0 (nulli) atceļ ierobežojumus.';
$strZip = 'Arhivēts ar zip';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate

$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCopy = 'Copy';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate

$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEsperanto = 'Esperanto';  //to translate

$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInnoDBPages = 'pages';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMRecoverOptions = 'Automatic recovery mode';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMyISAMSortBufferSize = 'Sort buffer size';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate

$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowOpenTables = 'Show open tables';  //to translate
$strShowSlaveHosts = 'Show slave hosts';  //to translate
$strShowSlaveStatus = 'Show slave status';  //to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';  //to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';  //to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';  //to translate
$strShowStatusCreated_tmp_filesDescr = 'How many temporary files mysqld has created.';  //to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';  //to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';  //to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';  //to translate
$strShowStatusDelayed_writesDescr = 'The number of INSERT DELAYED rows written.';  //to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';  //to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';  //to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';  //to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';  //to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';  //to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';  //to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';  //to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';  //to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';  //to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';  //to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';  //to translate
$strShowStatusHandler_updateDescr = 'The number of requests to update a row in a table.';  //to translate
$strShowStatusHandler_writeDescr = 'The number of requests to insert a row in a table.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'The number of pages containing data (dirty or clean).';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'The number of pages currently dirty.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'The number of free pages.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total size of buffer pool, in pages.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';  //to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';  //to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';  //to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';  //to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';  //to translate
$strShowStatusInnodb_data_fsyncsDescr = 'The number of fsync() operations so far.';  //to translate
$strShowStatusInnodb_data_pending_fsyncsDescr = 'The current number of pending fsync() operations.';  //to translate
$strShowStatusInnodb_data_pending_readsDescr = 'The current number of pending reads.';  //to translate
$strShowStatusInnodb_data_pending_writesDescr = 'The current number of pending writes.';  //to translate
$strShowStatusInnodb_data_readDescr = 'The amount of data read so far, in bytes.';  //to translate
$strShowStatusInnodb_data_readsDescr = 'The total number of data reads.';  //to translate
$strShowStatusInnodb_data_writesDescr = 'The total number of data writes.';  //to translate
$strShowStatusInnodb_data_writtenDescr = 'The amount of data written so far, in bytes.';  //to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_log_waitsDescr = 'The number of waits we had because log buffer was too small and we had to wait for it to be flushed before continuing.';  //to translate
$strShowStatusInnodb_log_write_requestsDescr = 'The number of log write requests.';  //to translate
$strShowStatusInnodb_log_writesDescr = 'The number of physical writes to the log file.';  //to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';  //to translate
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'The number of pending log file fsyncs.';  //to translate
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pending log file writes.';  //to translate
$strShowStatusInnodb_os_log_writtenDescr = 'The number of bytes written to the log file.';  //to translate
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';  //to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';  //to translate
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';  //to translate
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';  //to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';  //to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';  //to translate
$strShowStatusInnodb_rows_deletedDescr = 'The number of rows deleted from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_insertedDescr = 'The number of rows inserted in InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_readDescr = 'The number of rows read from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_updatedDescr = 'The number of rows updated in InnoDB tables.';  //to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';  //to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';  //to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';  //to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';  //to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';  //to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';  //to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';  //to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';  //to translate
$strShowStatusNot_flushed_delayed_rowsDescr = 'The number of rows waiting to be written in INSERT DELAYED queues.';  //to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';  //to translate
$strShowStatusOpen_filesDescr = 'The number of files that are open.';  //to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
$strShowStatusReset = 'Reset';  //to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';  //to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';  //to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';  //to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';  //to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';  //to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';  //to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';  //to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';  //to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';  //to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';  //to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';  //to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';  //to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';  //to translate
$strShowStatusSort_rowsDescr = 'The number of sorted rows.';  //to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWriteRequests = 'Write requests';  //to translate

$strQueryResultsOperations = 'Query results operations';  //to translate
$strAddClause = 'Add %s';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strServers = 'Servers';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strFunctions = 'Functions';  //to translate
$strProcedures = 'Procedures';  //to translate
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
