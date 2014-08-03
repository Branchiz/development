<?php
/* $Id: latvian-windows-1257.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Latvian language file by Sandis J�rics <sandisj at parks.lv>
 */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '�';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'P', 'O', 'T', 'C', 'Pk', 'S');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y %H:%M';

$timespanfmt = '%s dienas, %s stundas, %s min�tes un %s sekundes';

$strAbortedClients = 'P�rtraukts';
$strAccessDeniedExplanation = 'phpMyAdmin m��in�ja piesl�gties MySQL serverim, un serveris noraid�ja piesl�gumu. L�dzu p�rbaudiet hostu, lietot�jv�rdu un paroli config.inc.php fail�, un p�rliecinieties, ka tie atbilst inform�cijai, ko Jums deva MySQL servera administrators.';
$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darb�ba';
$strAddAutoIncrement = 'Pievienot AUTO_INCREMENT v�rt�bu';
$strAddConstraints = 'Pievienot ierobe�ojumus';
$strAddDeleteColumn = 'Pievienot/Dz�st laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dz�st ierakstu';
$strAddFields = 'Pievienot %s lauku(s)';
$strAddHeaderComment = 'Ievietot virsrakst� koment�ru (\\n atdala rindas)';
$strAddIntoComments = 'Pievienot koment�ros';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPrivilegesOnDb = 'Pievienot privil��ijas uz sekojo�o  datub�zi';
$strAddPrivilegesOnTbl = 'Pievienot privil��ijas uz sekojo�o tabulu';
$strAddSearchConditions = 'Pievienot mekl��anas nosac�jumus ("where" izteiksmes �ermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUserMessage = 'J�s pievienoj�t jaunu lietot�ju.';
$strAddUser = 'Pievienot jaunu lietot�ju';
$strAdministration = 'Administr�cija';
$strAffectedRows = 'Ietekm�to rindu skaits:';
$strAfterInsertBack = 'Atgriezties atpaka� iepriek��j� lap�';
$strAfterInsertNewInsert = 'Ievietot v�l vienu rindu';
$strAfterInsertSame = 'Atgriezties �aj� lap�';
$strAfter = 'P�c %s';
$strAllTableSameWidth = 'r�d�t visas tabulas vienad� platum�?';
$strAll = 'Visi';
$strAlterOrderBy = 'Main�t datu k�rto�anas laukus';
$strAnalyzeTable = 'Analiz�t tabulu';
$strAnd = 'Un';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnyHost = 'Jebkur� hosts';
$strAny = 'Jebkur�';
$strAnyUser = 'Jebkur� lietot�js';
$strApproximateCount = 'Var b�t aptuvens skaits. Skat�t FAQ 3.11';
$strAPrimaryKey = 'Prim�r� atsl�ga pievienota uz lauka %s';
$strArabic = 'Ar�bu';
$strArmenian = 'Arm��u';
$strAscending = 'Augo�� sec�b�';
$strAtBeginningOfTable = 'Tabulas s�kum�';
$strAtEndOfTable = 'Tabulas beig�s';
$strAttr = 'Atrib�ti';
$strAutomaticLayout = 'Autom�tiskais izvietojums';

$strBack = 'Atpaka�';
$strBaltic = 'Baltijas';
$strBeginCut = 'IZGRIEZT NO ��S VIETAS';
$strBeginRaw = 'RINDAS S�KUMS';
$strBinary = 'Bin�rais';
$strBinaryDoNotEdit = 'Bin�rais - netiek labots';
$strBinaryLog = 'Bin�rais log-fails';
$strBinLogEventType = 'Notikuma tips';
$strBinLogInfo = 'Inform�cija';
$strBinLogName = 'Log-faila nosaukums';
$strBinLogOriginalPosition = 'Ori�in�l� poz�cija';
$strBinLogPosition = 'Poz�cija';
$strBinLogServerId = 'Servera ID';
$strBookmarkAllUsers = 'Dot ikvienam lietot�jam pieeju �ai gr�matz�mei';
$strBookmarkDeleted = 'Ieraksts tika dz�sts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglab�tie SQL vaic�jumi';
$strBookmarkThis = 'Saglab�t �o SQL vaic�jumu';
$strBookmarkView = 'Tikai apskat�t';
$strBrowse = 'Apskat�t';
$strBrowseForeignValues = 'P�rl�kot �r�j�s v�rt�bas';
$strBulgarian = 'Bulg�ru';
$strBzError = 'phpMyAdmin nevar�ja saarhiv�t failu d�� boj�ta Bz2 papla�in�juma �aj� php versij�. Stingri rekomend�jam uzst�d�t <code>$cfg[\'BZipDump\']</code> direkt�vu phpMyAdmin konfigur�cijas fail� uz <code>FALSE</code>. Ja v�laties lietot Bz2 kompresijas iesp�jas, Jums j�uzliek jaun�ka php versija. Skat�t php bug report %s s�k�kai inform�cijai.';
$strBzip = 'Arhiv�ts ar bzip';

$strCalendar = 'Kalend�rs';
$strCannotLogin = 'Nevar piesl�gties MySQL serverim';
$strCantLoad = 'nevar iel�d�t papla�in�jumu %s,<br />l�dzu p�rbaudiet PHP konfigur�ciju';
$strCantLoadRecodeIconv = 'Nevar iel�d�t iconv vai recode papla�in�jumu, kas ir nepiecie�ams rakstz�mju konvert�cijai, l�dzu nokonfigur�jiet php, lai var�tu lietot �os papla�in�jumus, vai ar� atsl�dziet rakstz�mju konvert�ciju phpMyAdmin konfigur�cij�.';
$strCantRenameIdxToPrimary = 'Nevar p�rsaukt indeksu par PRIMARY!';
$strCantUseRecodeIconv = 'Nevar lietot iconv, libiconv vai recode_string funkciju, bet php saka, ka papla�in�jums ir iel�d�ts. P�rbaudiet php konfigur�ciju.';
$strCardinality = 'Kardinalit�te';
$strCaseInsensitive = 're�istrnej�t�gs';
$strCaseSensitive = 're�istrj�t�gs';
$strCentralEuropean = 'Centr�leiropas';
$strChangeCopyModeCopy = '... patur�t veco lietot�ju.';
$strChangeCopyModeDeleteAndReload = ' ... dz�st veco lietot�ju no lietot�ju tabulas, un p�c tam p�rl�d�t privil��ijas.';
$strChangeCopyMode = 'Izveidot jaunu lietot�ju ar t�d�m pa��m privil��ij�m un ...';
$strChangeCopyModeJustDelete = ' ... dz�st veco lietot�ju no lietot�ju tabulas.';
$strChangeCopyModeRevoke = ' ... at�emt vecajam lietot�jam visas akt�v�s privil��ijas, un p�c tam dz�st vi�u.';
$strChangeCopyUser = 'Main�t piek�uves inform�ciju / Klon�t lietot�ju';
$strChangeDisplay = 'Izv�lieties, kuru lauku r�d�t';
$strChange = 'Labot';
$strChangePassword = 'Main�t paroli';
$strCharset = 'Kod�jums';
$strCharsetOfFile = 'Tabulas kod�jums:';
$strCharsetsAndCollations = 'Rakstz�mju kod�jumi un izk�rtojumi';
$strCharsets = 'Rakstz�mju kod�jumi';
$strCheckAll = 'Iez�m�t visu';
$strCheckOverhead = 'Iez�m�t tabulas ar p�rt�ri�u';
$strCheckPrivsLong = 'P�rbaud�t privil��ijas uz datub�zi &quot;%s&quot;.';
$strCheckPrivs = 'P�rbaud�t privil��ijas';
$strCheckTable = 'P�rbaud�t tabulu';
$strChoosePage = 'Izv�lieties lapu redig��anai';
$strColComFeat = 'R�du kolonnu koment�rus';
$strCollation = 'Izk�rtojumi';
$strColumnNames = 'Kolonnu nosaukumi';
$strColumnPrivileges = 'Kolonnu specifisk�s privil��ijas';
$strCommand = 'Komanda';
$strCommentsForTable = 'KOMENT�RI TABULAI';
$strComments = 'Koment�ri';
$strCompatibleHashing = 'MySQL&nbsp;4.0 savietojams';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nevar nolas�t konfigur�cijas failu!<br />Tas var notikt, ja PHP atrod taj� k��du, vai ar� nevar atrast so failu.<br />M�giniet izsaukt konfigur�cijas failu tie�i, klik�kinot linku zem�k un lasiet PHP pazinojumu par k��d�m. Vair�kum� gad�jumu kaut kur pietrukst p�di�a vai semikols.<br />Ja redzat tuk�u lapu, viss ir k�rt�b�.';
$strConfigureTableCoord = 'L�dzu konfigur�jiet koordin�tes tabulai %s';
$strConnectionError = 'Nevar piesl�gties: k��da konfigur�cij�.';
$strConnections = 'Konekcijas';
$strConstraintsForDumped = 'Ierobe�ojumi izmest�m tabul�m';
$strConstraintsForTable = 'Ierobe�ojumi tabulai';
$strCookiesRequired = '"Cookies" ir j�b�t at�autiem aiz �� punkta.';
$strCopyDatabaseOK = 'Datub�ze %s tika p�rkop�ta uz %s';
$strCopyTable = 'Kop�t tabulu uz (datub�ze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika p�rkop�ta uz %s.';
$strCopyTableSameNames = 'Nevar nokop�t tabulu uz vi�u pa�u!';
$strCouldNotKill = 'phpMyAdmin nevar�ja nogalin�t procesu %s. Iesp�jams, ka tas jau agr�k tika izbeigts.';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreate = 'Izveidot';
$strCreateNewDatabase = 'Izveidot jaunu datub�zi';
$strCreateNewTable = 'Izveidot jaunu tabulu datub�z� %s';
$strCreatePage = 'Izveidot jaunu lapu';
$strCreatePdfFeat = 'PDF failu izveide';
$strCreationDates = 'Izveido�anas/Atjauno�anas/Piek�uves datumi';
$strCriteria = 'Krit�rijs';
$strCroatian = 'Horv�tu';
$strCyrillic = 'Kirilisks';
$strCzech = '�ehu';
$strCzechSlovak = '�ehu-Slov�ku';

$strDanish = 'D��u';
$strDatabase = 'Datub�ze';
$strDatabaseEmpty = 'Datub�zes nosaukums ir tuk�s!';
$strDatabaseExportOptions = 'Datub�zu eksporta opcijas';
$strDatabaseHasBeenDropped = 'Datub�ze %s tika izdz�sta.';
$strDatabases = 'Datub�zes';
$strDatabasesDropped = '%s datub�zes tika veiksm�gi dz�stas.';
$strDatabasesStats = 'Datub�zu statistika';
$strDatabasesStatsDisable = 'Izsl�gt statistiku';
$strDatabasesStatsEnable = 'Iesl�gt statistiku';
$strDatabasesStatsHeavyTraffic = 'Piez�me: Datub�zes statistikas iesl�g�ana �eit var izsaukt palielin�to datu apmai�u starp webserveri un MySQL serveri.';
$strData = 'Dati';
$strDataDict = 'Datu v�rdn�ca';
$strDataOnly = 'Tikai dati';
$strDBComment = 'Datub�zes koment�rs: ';
$strDBCopy = 'Kop�t datub�zi uz';
$strDbPrivileges = 'Datub��u specifisk�s privil��ijas';
$strDBRename = 'P�rsaukt datub�zi par';
$strDbSpecific = 'datub�zei specifisks';
$strDefault = 'Noklus�ts';
$strDefaultValueHelp = 'Noklus�taj�m v�rt�b�m, l�dzu ievadiet tikai pa�u vert�bu, bez izsarg��an�s ar atpaka��jo sl�psv�tru vai p�di��m, lietojot �o formatu: a';
$strDefragment = 'Defragment�t tabulu';
$strDelayedInserts = 'Lietot aiztur�tos INSERT';
$strDeleteAndFlushDescr = 'Tas ir lab�kais veids, bet privil��iju p�rl�d��ana var pa�emt zin�mu laiku.';
$strDeleteAndFlush = 'Dz�st lietot�jus, un p�c tam p�rl�d�t privil��ijas.';
$strDeleted = 'Ieraksts tika dz�sts';
$strDeletedRows = 'Ieraksti dz�sti:';
$strDelete = 'Dz�st';
$strDeleting = 'Dz��am %s';
$strDelOld = 'Teko�aj� lap� ir atsauces uz tabul�m, kas vairs neeksist�. Vai J�s gribat dz�st ��s atsauces?';
$strDescending = 'Dilsto�� sec�b�';
$strDescription = 'Apraksts';
$strDictionary = 'v�rdn�ca';
$strDisabled = 'Izsl�gts';
$strDisableForeignChecks = 'Nep�rbaud�t �r�j�s atsl�gas';
$strDisplayFeat = 'R�d�t iesp�jas';
$strDisplayOrder = 'Att�lo�anas sec�ba:';
$strDisplayPDF = 'R�d�t PDF sh�mu';
$strDoAQuery = 'Izpild�t "vaic�jumu p�c parauga" (aizst�j�jz�me: "%")';
$strDocu = 'Dokument�cija';
$strDoYouReally = 'Vai J�s tie��m gribat ';
$strDropDatabaseStrongWarning = 'J�s taisaties LIKVID�T veselu datub�zi!';
$strDrop = 'Likvid�t';
$strDropUsersDb = 'Dz�st datub�zes, kur�m ir t�di pa�i v�rdi, k� lietot�jiem.';
$strDumpingData = 'Dati tabulai';
$strDumpSaved = 'Damps tika saglab�ts fail� %s.';
$strDumpXRows = 'Saglab�t %s rindas, s�kot ar %s.';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPDFPages = 'Labot PDF lapas';
$strEditPrivileges = 'Main�t privil��ijas';
$strEffective = 'Efekt�vs';
$strEmpty = 'Iztuk�ot';
$strEmptyResultSet = 'MySQL atgrieza tuk�o rezult�tu (0 rindas).';
$strEnabled = 'Iesl�gts';
$strEncloseInTransaction = 'Iek�aut eksportu transakcij�';
$strEnd = 'Beigas';
$strEndCut = 'IZGRIEZT L�DZ �AI VIETAI';
$strEndRaw = 'RINDAS BEIGAS';
$strEnglish = 'Ang�u';
$strEnglishPrivileges = ' Piez�me: MySQL privil��iju apz�m�jumi tiek rakst�ti ang�u valod� ';
$strError = 'K��da';
$strEscapeWildcards = 'Aizst�j�jz�mes _ un % j�aizsarg� ar \ priek��, lai izmantotu t�s burtiski';
$strEstonian = 'Igau�u';
$strExcelEdition = 'Excel redakcija';
$strExecuteBookmarked = 'Izpild�t iegr�matoto vaic�jumu';
$strExplain = 'Izskaidrot SQL';
$strExport = 'Eksports';
$strExtendedInserts = 'Papla�in�tas INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFailedAttempts = 'Neveiksm�gi m��in�jumi';
$strFieldHasBeenDropped = 'Lauks %s tika izdz�sts';
$strField = 'Lauks';
$strFieldsEnclosedBy = 'Lauki iek�auti iek�';
$strFieldsEscapedBy = 'Gl�bjo�a (escape) rakstz�me ir';
$strFields = 'Lauki';
$strFieldsTerminatedBy = 'Lauki atdal�ti ar';
$strFileAlreadyExists = 'Fails %s jau eksist� uz servera. L�dzu nomainiet faila nosaukumu vai atz�m�jiet failu p�rrakst��anas opciju.';
$strFileCouldNotBeRead = 'Nevar nolas�t failu';
$strFileNameTemplate = 'Faila nosaukuma �ablons';
$strFileNameTemplateRemember = 'atcer�ties �ablonu';
$strFixed = 'fiks�ts';
$strFlushPrivilegesNote = 'Piez�me: phpMyAdmin sa�em lietot�ju privil��ijas pa taisno no MySQL privil��iju tabil�m. �o tabulu saturs var at��irties no privil��ij�m, ko lieto serveris, ja tur tika veikti labojumi. �aj� gad�jum� ir nepiecie�ams %sp�rl�d�t privil��ijas%s pirms J�s turpin�t.';
$strFlushTable = 'Atsvaidzin�t tabulu ("FLUSH")';
$strFormat = 'Formats';
$strFormEmpty = 'Form� tr�kst v�rt�bu!';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenBy = 'Uz�ener�ja';
$strGeneralRelationFeat = 'Galven�s rel�ciju �pa��bas';
$strGenTime = 'Izveido�anas laiks';
$strGeorgian = 'Gruz�nu';
$strGerman = 'V�cu';
$strGlobal = 'glob�ls';
$strGlobalPrivileges = 'Glob�l�s privil��ijas';
$strGlobalValue = 'Glob�l� v�rt�ba';
$strGo = 'Aiziet!';
$strGrantOption = 'Pie��irt';
$strGreek = 'Grie�u';
$strGzip = 'Arhiv�ts ar gzip';

$strHasBeenAltered = 'tika modific�ta.';
$strHasBeenCreated = 'tika izveidota.';
$strHaveToShow = 'Izv�lieties vismaz vienu kolonnu att�lo�anai';
$strHebrew = 'Ebreju';
$strHomepageOfficial = 'Ofici�l� phpMyAdmin m�jaslapa';
$strHome = 'S�kumlapa';
$strHostEmpty = 'Hosts nav nor�d�ts!';
$strHost = 'Hosts';
$strHungarian = 'Ung�ru';

$strIcelandic = 'Islandie�u';
$strId = 'ID';
$strIdxFulltext = 'Pilni teksti';
$strIgnore = 'Ignor�t';
$strIgnoreInserts = 'Lietot IGNORE INSERTS';
$strImportFiles = 'Import�t failus';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indekss %s tika izdz�sts';
$strIndex = 'Indekss';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strIndexWarningTable = 'Probl�mas ar indeksiem tabul� `%s`';
$strInnodbStat = 'InnoDB statuss';
$strInsecureMySQL = 'J�su konfigur�cijas fails satur iest�d�jumus (lietot�js "root" bez paroles), kas atbilst noklus�tajam MySQL privili��tajam lietot�jam. J�su MySQL serveris str�d� ar �o noklus�to variantu, ir atv�rts uzbrukumiem, un Jums tie��m j�aiztaisa �is dro��bas caurums.';
$strInsertAsNewRow = 'Ievietot k� jaunu rindu';
$strInsertedRowId = 'Ievietot�s rindas id:';
$strInsertedRows = 'Rindas pievienotas:';
$strInsert = 'Pievienot';
$strInternalNotNecessary = '* Iek��j� rel�cija nav nepiecie�ama, kad t� eksist� ar� iek� InnoDB.';
$strInternalRelations = 'Iek��j�s rel�cijas';
$strInUse = 'lieto�an�';

$strJapanese = 'Jap��u';
$strJumpToDB = 'p�riet pie datub�zes &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Dz�stie&quot; lietot�ji saglab� sp�ju piek��t serverim k� parasti, l�dz privil��ijas tiek p�rl�d�tas.';
$strJustDelete = 'Dz�st lietot�jus no privil��iju tabul�m.';

$strKeepPass = 'Nemain�t paroli';
$strKeyname = 'Atsl�gas nosaukums';
$strKill = 'Nogalin�t';
$strKorean = 'Korejie�u';

$strLandscape = 'Ainava';
$strLatexCaption = 'Tabulas virsraksts';
$strLatexContent = 'Tabulas __TABLE__ saturs';
$strLatexContinuedCaption = 'Tabulas virsraksta turpin�jums';
$strLatexContinued = '(turpin�jums)';
$strLatexIncludeCaption = 'Iek�aut tabulas virsrakstu';
$strLatexLabel = 'Eti�etes atsl�ga';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Tabulas __TABLE__ strukt�ra';
$strLatvian = 'Latvie�u';
$strLengthSet = 'Garums/V�rt�bas*';
$strLimitNumRows = 'Rindu skaits vien� lap�';
$strLinesTerminatedBy = 'Rindas atdal�tas ar';
$strLinkNotFound = 'Links nav atrasts';
$strLinksTo = 'Linki uz';
$strLithuanian = 'Lietuvie�u';
$strLocalhost = 'Lok�ls';
$strLocationTextfile = 'Teksta faila atra�an�s vieta';
$strLogin = 'Ieiet';
$strLoginInformation = 'Piek�uves inform�cija';
$strLogout = 'Iziet';
$strLogPassword = 'Parole:';
$strLogServer = 'Serveris';
$strLogUsername = 'Lietot�jv�rds:';

$strMaximumSize = 'Maksim�lais izm�rs: %s%s';
$strMIME_available_mime = 'Pieejamie MIME tipi';
$strMIME_available_transform = 'Pieejam�s transform�cijas';
$strMIME_description = 'Apraksts';
$strMIME_MIMEtype = 'MIME tips';
$strMIME_nodescription = '�ai transform�cijai nav apraksta.<br />Jaut�jiet autoram, ko %s dara.';
$strMIME_transformation_note = 'Lai ieg�tu pieejamo transform�ciju opcijas un to MIME tipu transform�cijas, uzklik��iniet uz %stransform�ciju apraksti%s';
$strMIME_transformation_options_note = 'L�dzu ievadiet transform�ciju opciju v�rt�bas, lietojot �o formatu: \'a\', 100, b,\'c\'...<br />Ja Jums j�lieto atpaka��j� sl�psv�tra ("\") vai vienk�r�� p�di�a ("\'") starp ��m v�rt�b�m, lieciet t�s priek�� v�l vienu atpaka��jo sl�psv�tru (piem�ram \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transform�cijas opcijas';
$strMIME_transformation = 'P�rl�kprogrammas transform�cija';
$strMIMETypesForTable = 'MIME TIPI TABULAI';
$strMIME_without = 'MIME tipiem, kas par�d�ti sl�prakst�, nav atsevi��as transform�cijas funkcijas';
$strModifications = 'Labojumi tika saglab�ti';
$strModifyIndexTopic = 'Labot indeksu';
$strModify = 'Labot';
$strMoveTableOK = 'Tabula %s tika p�rvietota uz %s.';
$strMoveTable = 'P�rvietot tabulu uz (datub�ze<b>.</b>tabula):';
$strMoveTableSameNames = 'Nevar p�rvietot tabulu uz vi�u pa�u!';
$strMultilingual = 'daudzvalodu';
$strMySQLCharset = 'MySQL kod�jums';
$strMySQLConnectionCollation = 'MySQL konekcijas k�rto�ana';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLShowProcess = 'Par�d�t procesus';
$strMySQLShowStatus = 'Par�d�t MySQL izpildes laika inform�ciju';
$strMySQLShowVars = 'Par�d�t MySQL sist�mas main�gos';

$strName = 'Nosaukums';
$strNext = 'N�kamie';
$strNoActivity = 'Nebija aktivit�tes vair�k k� %s sekun�u laik�, l�dzu autoriz�jieties v�lreiz';
$strNoDatabases = 'Nav datub�zu';
$strNoDatabasesSelected = 'Datub�ze nav izv�l�ta.';
$strNoDescription = 'Bez apraksta';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoExplain = 'Neizskaidrot SQL';
$strNoFrames = 'phpMyAdmin ir vair�k draudz�gs <b>freimu atbalsto��m</b> p�rl�kprogramm�m.';
$strNoIndex = 'Nav defin�ti indeksi!';
$strNoIndexPartsDefined = 'Nav defin�to indeksa da�u!';
$strNoModification = 'Netika labots';
$strNo = 'N�';
$strNone = 'Nav';
$strNoOptions = '�im form�tam nav opciju';
$strNoPassword = 'Nav paroles';
$strNoPermission = 'Web serverim nav ties�bu rakst�t fail� %s.';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Nav privil��iju';
$strNoRights = 'Jums nav pietieko�i ties�bu, lai atrastos �eit tagad!';
$strNoRowsSelected = 'Rindas nav iez�m�tas';
$strNoSpace = 'Nepietiek vietas, lai saglab�tu failu %s.';
$strNoTablesFound = 'Tabulas nav atrastas �aj� datub�z�.';
$strNoThemeSupport = 'Nav t�mu atbalsta, l�dzu p�rbaudiet j�su konfigur�ciju un/vai J�su t�mas direktorij� %s.';
$strNotNumber = 'Tas nav numurs!';
$strNotOK = 'nav OK';
$strNotSet = 'Tabula <b>%s</b> nav atrasta vai nav atz�meta iek� %s';
$strNoUsersFound = 'Lietot�ji netika atrasti.';
$strNoValidateSQL = 'Nep�rbaud�t SQL';
$strNull = 'Nulle';
$strNumSearchResultsInTable = '%s rezult�ti tabul� <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kopum�:</b> <i>%s</i> rezult�ti';
$strNumTables = 'Tabulas';

$strOK = 'Labi';
$strOperations = 'Darb�bas';
$strOperator = 'Operators';
$strOptimizeTable = 'Optimiz�t tabulu';
$strOr = 'Vai';
$strOverhead = 'P�rt�ri��';
$strOverwriteExisting = 'P�rrakst�t eksist�jo�os failus';

$strPageNumber = 'Lapas numurs:';
$strPaperSize = 'Pap�ra izm�rs';
$strPartialText = 'Da��ji teksti';
$strPasswordChanged = 'Lietot�ja %s parole tika veiksm�gi main�ta.';
$strPasswordEmpty = 'Parole nav nor�d�ta!';
$strPasswordHashing = 'Paroles jauk�ana';
$strPasswordNotSame = 'Paroles nesakr�t!';
$strPassword = 'Parole';
$strPdfDbSchema = 'Datub�zes "%s" sh�ma, %s. lapa';
$strPdfInvalidTblName = 'Tabula "%s" neeksist�!';
$strPdfNoTables = 'Nav tabulu';
$strPerHour = 'stund�';
$strPerMinute = 'min�t�';
$strPerSecond = 'sekund�';
$strPersian = 'Persie�u';
$strPhoneBook = 'telefonu gr�mata';
$strPHP40203 = 'J�s lietojat PHP versiju 4.2.3, kurai ir nopietna k��da daudzbaitu rindi�u funkcij�s (mbstring). Skat�t PHP bug report 19404. S� PHP versija nav rekomend�jama lieto�anai ar phpMyAdmin.';
$strPhp = 'Izveidot PHP kodu';
$strPHPVersion = 'PHP Versija';
$strPmaDocumentation = 'phpMyAdmin dokument�cija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direkt�vai ir J�B�T nodefin�tai J�su konfigur�cijas fail�!';
$strPolish = 'Po�u';
$strPortrait = 'Portrets';
$strPos1 = 'S�kums';
$strPrevious = 'Iepriek��jie';
$strPrimaryKeyHasBeenDropped = 'Prim�r� atsl�ga tika izdz�sta';
$strPrimaryKeyName = 'Prim�r�s atsl�gas nosaukumam j�b�t... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>j�b�t</b> tikai un <b>vien�gi</b> prim�r�s atsl�gas indeksa nosaukumam!)';
$strPrimary = 'Prim�r�';
$strPrint = 'Druk�t';
$strPrintViewFull = 'Drukas skats (ar pilniem tekstiem)';
$strPrintView = 'Izdrukas versija';
$strPrivDescAllPrivileges = 'Iek�auj visas privil��ijas, iz�emot GRANT.';
$strPrivDescAlter = '�auj main�t eso�o tabulu strukt�ru.';
$strPrivDescCreateDb = '�auj veidot jaunas datub�zes un tabulas.';
$strPrivDescCreateTbl = '�auj veidot jaunas tabulas.';
$strPrivDescCreateTmpTable = '�auj veidot pagaidu tabulas.';
$strPrivDescDelete = '�auj dz�st datus.';
$strPrivDescDropDb = '�auj dz�st datub�zes un tabulas.';
$strPrivDescDropTbl = '�auj dz�st tabulas.';
$strPrivDescExecute = '�auj palaist saglab�t�s proced�ras; v�l nestr�d� �aj� MySQL versij�.';
$strPrivDescFile = '�auj import�t/eksport�t datus no/uz failiem.';
$strPrivDescGrant = '�auj pievienot lietot�jus un privil��ijas bez privil��iju tabulu p�rl�d��anas.';
$strPrivDescIndex = '�auj veidot un dz�st indeksus.';
$strPrivDescInsert = '�auj ievietot un main�t datus.';
$strPrivDescLockTables = '�auj blo��t tabulas teko�ajai darb�bai.';
$strPrivDescMaxConnections = 'Ierobe�o jauno konekciju skaitu, ko lietot�js var atv�rt stundas laik�.';
$strPrivDescMaxQuestions = 'Ierobe�o vaic�jumu skaitu, ko lietot�js var mos�t�t uz serveri stundas laik�.';
$strPrivDescMaxUpdates = 'Ierobe�o komandu skaitu, kas maina kas maina tabulas vai datub�zes, ko lietot�js var izpild�t stundas laik�.';
$strPrivDescProcess3 = '�auj nogalin�t citu lietot�ju procesus.';
$strPrivDescProcess4 = '�auj apskat�t piepras�jumu un procesu sarakstus.';
$strPrivDescReferences = 'Nedarbojas �aj� MySQL versij�.';
$strPrivDescReload = '�auj prl�d�t servera iest�d�jumus un iztuk�ot servera ke�u.';
$strPrivDescReplClient = 'Dod lietot�jam ties�bas jaut�t, kur ir replik�cijas ori�in�li / kopijas.';
$strPrivDescReplSlave = 'Nepiecie�ams replik�ciju kopij�m.';
$strPrivDescSelect = '�auj las�t datus.';
$strPrivDescShowDb = 'Dod pieeju pilnam datub�zu sarakstam.';
$strPrivDescShutdown = '�auj apst�din�t serveri.';
$strPrivDescSuper = '�auj piesl�gties pat tad, ja ir sasniegts maksim�lais konekciju skaits; Nepiecie�ams vairumam administrat�vo oper�ciju, k� glob�lo main�go mai�a vai citu lietot�ju procesu nogalin��ana.';
$strPrivDescUpdate = '�auj main�t datus.';
$strPrivDescUsage = 'Nav privil��iju.';
$strPrivileges = 'Privil��ijas';
$strPrivilegesReloaded = 'Privil��ijas tika veiksm�gi p�rl�d�tas.';
$strProcesses = 'Procesi';
$strProcesslist = 'Procesu saraksts';
$strPutColNames = 'Likt kolonnu nosaukumus pirmaj� rind�';

$strQBEDel = 'Dz�st';
$strQBEIns = 'Ielikt';
$strQBE = 'Vaic�jums p�c parauga';
$strQueryFrame = 'Vaic�juma logs';
$strQueryOnDb = 'SQL vaic�jums uz datub�zes <b>%s</b>:';
$strQuerySQLHistory = 'SQL v�sture';
$strQueryStatistics = '<b>Piepras�jumu statistika</b>: %s piepras�jumi tika nos�t�ti uz serveri kop� t� palai�an�s br��a.';
$strQueryTime = 'Vaic�jums ilga %01.4f s';
$strQueryType = 'Vaic�juma tips';
$strQueryWindowLock = 'Nep�rrakst�t �o vaic�jumu �rpus �� loga';

$strReceived = 'Sa�emts';
$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'P�rbaud�t referenci�lo integrit�ti:';
$strRefresh = 'Atjaunot';
$strRelationalSchema = 'Rel�ciju sh�ma';
$strRelationNotWorking = 'Papildiesp�jas darbam ar saist�t�m tabul�m tika izsl�gtas. Lai uzzin�tu k�p�c, klik�kiniet %s�eit%s.';
$strRelationsForTable = 'REL�CIJAS TABULAI';
$strRelations = 'Rel�cijas';
$strRelationView = 'Rel�ciju p�rskats';
$strReloadingThePrivileges = 'P�rl�d�jam privil��ijas';
$strRemoveSelectedUsers = 'Dz�st izv�l�tos lietot�jus';
$strRenameDatabaseOK = 'Datub�ze %s tika p�rsaukta par %s';
$strRenameTableOK = 'Tabula %s tika p�rsaukta par %s';
$strRenameTable = 'P�rsaukt tabulu uz';
$strRepairTable = 'Restaur�t tabulu';
$strReplaceNULLBy = 'Aizvietot NULL ar';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strResourceLimits = 'Resursu ierobe�ojumi';
$strReType = 'Atk�rtojiet';
$strRevokeAndDelete = 'At�emt visas akt�v�s privil��ijas lietot�jiem, un p�c tam dz�st tos.';
$strRevokeAndDeleteDescr = 'Lietot�ji saglab� iespeju lietot datub�zes, l�dz privil��ijas tiek p�rl�d�tas.';
$strRevoke = 'Atsaukt';
$strRevokeMessage = 'J�s at��m�t privil�gijas lietot�jam %s';
$strRomanian = 'Rum��u';
$strRowLength = 'Rindas garums';
$strRowsFrom = 'rindas s�kot no';
$strRowSize = ' Rindas izm�rs ';
$strRowsModeFlippedHorizontal = 'horizont�l� (pagriezti virsraksti)';
$strRowsModeHorizontal = 'horizont�l�';
$strRowsModeOptions = '%s skat� un atk�rtot virsrakstus ik p�c %s rind�m';
$strRowsModeVertical = 'vertik�l�';
$strRows = 'Rindas';
$strRowsStatistic = 'Rindas statistika';
$strRunning = 'atrodas uz %s';
$strRunQuery = 'Izpild�t vaic�jumu';
$strRunSQLQuery = 'Izpild�t SQL vaic�jumu(s) uz datub�zes %s';
$strRussian = 'Krievu';

$strSaveOnServer = 'Saglab�t uz servera direktorij� %s';
$strSave = 'Saglab�t';
$strScaleFactorSmall = 'M�rogo�anas faktors ir p�r�k mazs, lai sh�ma ietilptu vien� lap�';
$strSearchFormTitle = 'Mekl�t datub�z�';
$strSearchInTables = 'Tabul�(s):';
$strSearch = 'Mekl�t';
$strSearchNeedle = 'V�rdi vai v�rt�bas mekl��anai (aizst�j�jz�me: "%"):';
$strSearchOption1 = 'kaut viens no v�rdiem';
$strSearchOption2 = 'visi v�rdi';
$strSearchOption3 = 'prec�za fr�ze';
$strSearchOption4 = 'k� regul�r� izteiksme';
$strSearchResultsFor = 'Mekl��anas rezult�ti "<i>%s</i>" %s:';
$strSearchType = 'Atrast:';
$strSecretRequired = 'Konfigur�cijas fails tagad prasa slepeno paroli (blowfish_secret).';
$strSelectADb = 'L�dzu izv�lieties datub�zi';
$strSelectAll = 'Iez�m�t visu';
$strSelectBinaryLog = 'Izv�lieties bin�ro log-failu apskatei';
$strSelectFields = 'Izv�lieties laukus (kaut vienu):';
$strSelectNumRows = 'vaic�jum�';
$strSelectTables = 'Izv�lieties tabulas';
$strSend = 'Saglab�t k� failu';
$strSent = 'Nos�t�ts';
$strServerChoice = 'Servera izv�le';
$strServerNotResponding = 'Serveris neatbild';
$strServer = 'Serveris';
$strServerStatus = 'Izpildes laika inform�cija';
$strServerStatusUptime = '�is MySQL serveris str�d� %s. Tas tika palaists %s.';
$strServerTabVariables = 'Main�gie';
$strServerTrafficNotes = '<b>Servera trafiks</b>: ��s tabulas par�da �� MySQL servera t�kla trafika statistiku kop� t� palai�anas.';
$strServerVars = 'Servera main�gie un konfigur�cija';
$strServerVersion = 'Servera versija';
$strSessionValue = 'Sesijas v�rt�ba';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", l�dzu ievadiet v�rt�bas atbilsto�i �im formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpaka��jo sl�psv�tru (\) vai vienk�r�o p�di�u (\') k�d� no ��m v�rt�b�m, lieciet t�s priek�� atpaka��jo sl�psv�tru (piem�ram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShowAll = 'R�d�t visu';
$strShowColor = 'R�d�t kr�sas';
$strShowDatadictAs = 'Datu v�rdn�cas formats';
$strShowFullQueries = 'R�d�t pilnos vaic�jumus';
$strShowGrid = 'R�d�t re��i';
$strShowingRecords = 'Par�du rindas';
$strShowPHPInfo = 'Par�d�t PHP inform�ciju';
$strShow = 'R�d�t';
$strShowTableDimension = 'R�dit tabulu izm�rus';
$strShowTables = 'R�d�t tabulas';
$strShowThisQuery = ' R�d�t �o vaic�jumu �eit atkal ';
$strSimplifiedChinese = 'Vienk�r�ota ��nie�u';
$strSingly = '(atsevi��i)';
$strSize = 'Izm�rs';
$strSlovak = 'Slov�ku';
$strSlovenian = 'Slov��u';
$strSortByKey = 'K�rtot p�c atsl�gas';
$strSort = 'K�rto�ana';
$strSpaceUsage = 'Diska vietas lieto�ana';
$strSpanish = 'Sp��u';
$strSplitWordsWithSpace = 'V�rdi ir atdal�ti ar tuk�umu (" ").';
$strSQLExportType = 'Eksporta veids';
$strSQLParserBugMessage = 'Iesp�jams, ka J�s esat atradu�i k��du SQL interpretator�. L�dzu apskatiet J�su vaic�jumu cit�g�k, un p�rbaudiet, ka p�di�as ir pareizas un nav sajauktas. Cits k��das iemesls var b�t tas, ka J�s ats�t�j�t failu ar bin�ro v�rt�bu �rpus p�di��s iek�aut� teksta lauka. J�s varat ar� izm��in�t savu vaic�jumu MySQL komandrindas interfeis�. MySQL servera k��das pazi�ojums zem�k, ja t�ds ir, var ar� pal�dz�t Jums diagnostic�t probl�mu. Ja probl�ma paliek, vai ar� iek� phpMyAdmin k��da ir, bet komandrind� nav, l�dzu samaziniet J�su SQL vaic�jumu l�dz vienk�r�am vaic�jumam kas izsauc probl�mas, un ats�tiet mums zi�ojumu par k��du, iek�aujot taj� datus no IZGRIEZT sekcijas zem�k:';
$strSQLParserUserError = 'Izkat�s, ka J�su SQL vaicajum� ir k��da. MySQL servera k��das pazinojums zem�k, ja t�ds ir, var ar� pal�dzet Jums diagnostic�t probl�mu.';
$strSQLQuery = 'SQL vaic�jums';
$strSQLResult = 'SQL rezult�ts';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neder�gs identifikators';
$strSQPBugUnclosedQuote = 'Neaizv�rtas p�di�as';
$strSQPBugUnknownPunctuation = 'Nezin�m� punktu�cijas z�me';
$strStatCheckTime = 'P�d�j� p�rbaude';
$strStatCreateTime = 'Izveido�ana';
$strStatement = 'Parametrs';
$strStatUpdateTime = 'P�d�j� atjauno�ana';
$strStatus = 'Statuss';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Strukt�ra un dati';
$strStrucExcelCSV = 'CSV dati MS Excel form�t�';
$strStrucNativeExcel = 'Dati MS Excel format�';
$strStrucOnly = 'Tikai strukt�ra';
$strStructPropose = 'Ieteikt tabulas srukt�ru';
$strStructure = 'Strukt�ra';
$strSubmit = 'Nos�t�t';
$strSuccess = 'J�su SQL vaic�jums tika veiksm�gi izpild�ts';
$strSum = 'Kopum�';
$strSwedish = 'Zviedru';
$strSwitchToDatabase = 'P�rsl�gties uz nokop�to datub�zi';
$strSwitchToTable = 'P�rsl�gties uz nokop�to tabulu';

$strTableComments = 'Koment�rs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav nor�d�ts!';
$strTableHasBeenDropped = 'Tabula %s tika izdz�sta';
$strTableHasBeenEmptied = 'Tabula %s tika iztuk�ota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzin�ta';
$strTableMaintenance = 'Tabulas apkalpo�ana';
$strTableOfContents = 'Satura r�d�t�js';
$strTableOptions = 'Tabulas opcijas';
$strTables = '%s tabula(s)';
$strTableStructure = 'Tabulas strukt�ra tabulai';
$strTable = 'Tabula';
$strTakeIt = 'izmantot �o stilu';
$strTblPrivileges = 'Tabulu specifisk�s privil��ijas';
$strTextAreaLength = ' Sava garuma d��,<br /> �is lauks var b�t neredi��jams ';
$strThai = 'Taizemie�u';
$strTheme = 'T�ma / Stils';
$strThisHost = '�is hosts';
$strThreadSuccessfullyKilled = 'Process %s tika veiksm�gi nogalin�ts.';
$strTime = 'Laiks';
$strToggleScratchboard = 'par�d�t/nosl�pt piez�mju tafeli';
$strTotal = 'kop�';
$strTotalUC = 'Kop�';
$strTraditionalChinese = 'Tradicion�la ��nie�u';
$strTraditionalSpanish = 'Tradicion�l� sp��u';
$strTraffic = 'Datu apmai�a';
$strTransformation_application_octetstream__download = 'R�d�t saiti uz lauka bin�ro datu lejupl�di. Pirm� opcija ir bin�r� faila nosaukums. Otr� opcija ir iesp�jamais lauka nosaukums tabulas rind�, kas satur faula nosaukumu. Ja izmantojat otro opciju, pirmo atst�jiet tuk�o.';
$strTransformation_image_jpeg__inline = 'Par�da klik��in�mo s�kt�lu; opcijas: platums, augstums pikse�os (saglab�jot ori�in�l�s proporcijas)';
$strTransformation_image_jpeg__link = 'Par�da linku uz �o att�lu (tie�a blob lauka lajupl�de).';
$strTransformation_image_png__inline = 'Skat�ties image/jpeg: k� ierindotu att�lu';
$strTransformation_text_plain__external = 'Tikai LINUX: Palai� �r�jo aplik�ciju un padod lauka datus t�s standartievad�. Atgrie� aplik�cijas standartizvadi. Noklus�jums ir Tidy, kas izskaistina HTML kodu. Dro��bas apsv�rumu d��, nepiecie�ams manu�li redi��t failu libraries/transformations/text_plain__external.inc.php un ielikt r�kus, kurus J�s at�aujat palaist. Pirm� opcija ir programmas numurs, ko J�s v�laties lietot, otr� opcija ir parametri �ai programmai. Tre�� opcija, ja ir vien�da ar 1, konvert� izvadi, izmantojot htmlspecialchars() (noklus�jums ir 1). Ceturtais parametrs, ja vien�ds ar 1, liek NOWRAP parametru satura ��nai, t� k� izvade tiks att�lota bez p�rformat��anas. (noklus�jums ir 1)';
$strTransformation_text_plain__formatted = 'Saglab� lauka ori�in�lo format�jumu. Speci�lo rakstz�mju pasarg��ana netiek veikta.';
$strTransformation_text_plain__imagelink = 'Par�da att�lu un linku, lauks satur faila nosauumu; pirm� opcija ir prefikss, piem�ram, "http://domens.lv/", otr� opcija ir platums pikse�os, tre�� ir augstums.';
$strTransformation_text_plain__link = 'Par�da att�lu un linku, lauks satur faila nosauumu; pirm� opcija ir prefikss, piem�ram, "http://domens.lv/", otr� opcija ir linka nosaukums.';
$strTransformation_text_plain__substr = 'Par�da tikai virknes da�u. Pirm� opcija ir nob�de, kas nosaka, kur J�su teksts s�kas (noklus�jums 0). Otr� opcija ir atgrie�am� teksta garums. Ja tuk�a, atgrie� visu atliku�o tekstu. Tre�� opcija nosaka rakstz�mes, kas tiks pievienotas apgriezt�s virknes gal� (noklus�jums: ...) .';
$strTruncateQueries = 'Ierobe�ot par�d�to vaic�jumu garumu';
$strTurkish = 'Turku';
$strType = 'Tips';

$strUkrainian = 'Ukrai�u';
$strUncheckAll = 'Neiez�m�t neko';
$strUnicode = 'Unikods';
$strUnique = 'Unik�lais';
$strUnknown = 'nazin�ma';
$strUnselectAll = 'Neiez�m�t neko';
$strUpdatePrivMessage = 'J�s modific�j�t privil��ijas objektam %s.';
$strUpdateProfileMessage = 'Profils tika modific�ts.';
$strUpdateQuery = 'Atjaunot vaic�jumu';
$strUpdComTab = 'L�dzu skatieties dokument�ciju par to, k� atjaunot \'Column_comments\' tabulu';
$strUpgrade = 'Jums ir j�uzliek %s %s vai jaun�ks.';
$strUsage = 'Aiz�em';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUseHostTable = 'Lietot hostu tabulu';
$strUserAlreadyExists = 'Lietot�js %s jau eksist�!';
$strUserEmpty = 'Lietot�ja v�rds nav nor�d�ts!';
$strUser = 'Lietot�js';
$strUserName = 'Lietot�jv�rds';
$strUserNotFound = 'Izv�l�tais lietot�js nav atrasts privil��iju tabul�.';
$strUserOverview = 'Lietot�ju p�rskats';
$strUsersDeleted = 'Izv�l�tie lietot�ji tika veiksm�gi dz�sti.';
$strUsersHavingAccessToDb = 'Lietot�ji, kam ir pieja datub�zei &quot;%s&quot;';
$strUseTabKey = 'Lietojiet TAB tausti�u, lai p�rvietotos no v�rt�bas l�dz v�rt�bai, vai CTRL+bulti�as, lai p�rvietotos jebkur� viet�';
$strUseTables = 'Lietot tabulas';
$strUseTextField = 'Lietot teksta lauku';
$strUseThisValue = 'Lietot �o v�rt�bu';

$strValidateSQL = 'P�rbaud�t SQL';
$strValidatorError = 'Nevar inicializ�t SQL p�rbaud�t�ju. L�dzu p�rbaudiet, vai esat uzinstal�ju�i nepiecie�amos PHP papla�in�jumus, k� aprakst�ts %sdokument�cij�%s.';
$strValue = 'V�rt�ba';
$strVar = 'Main�gais';
$strViewDump = 'Apskat�t tabulas dampu (sh�mu)';
$strViewDumpDatabases = 'Apskat�t datub�zu dampu (sh�mu)';
$strViewDumpDB = 'Apskat�t datub�zes dampu (sh�mu)';

$strWebServerUploadDirectoryError = 'Direktoija, kuru nor�dij�t aug�upiel�dei, nav pieejama';
$strWebServerUploadDirectory = 'web servera aug�upiel�des direktorija';
$strWelcome = 'Laipni l�gti %s';
$strWestEuropean = 'Rietumeiropas';
$strWildcard = 'aizst�j�jz�me';
$strWindowNotFound = 'Neizdev�s atjaunot galveno p�rl�kprogramas logu. Varb�t esat vi�u aizv�ru�i, vai ar� J�su p�rl�kprogramma blo�e starplogu saskarsmi J�su dro��bas iest�d�jumu d��.';
$strWithChecked = 'Ar iez�m�to:';
$strWrongUser = 'K��dains lietot�jv�rds/parole. Pieeja aizliegta.';

$strXML = 'XML';

$strYes = 'J�';

$strZeroRemovesTheLimit = 'Piez�me: �o opciju uzst�d��ana uz 0 (nulli) atce� ierobe�ojumus.';
$strZip = 'Arhiv�ts ar zip';

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
