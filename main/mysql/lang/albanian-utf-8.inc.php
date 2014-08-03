<?php
/* $Id: albanian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'Hën', 'Mar', 'Mër', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'Nën', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time
$timespanfmt = '%s ditë, %s orë, %s minuta dhe %s sekonda';

 

$strAbortedClients = 'Dështoi';
$strAccessDeniedExplanation = 'phpMyAdmin u përpoq të lidhet me server-in MySQL, dhe server-i refuzoi lidhjen. Kontrollo emrin e host, përdoruesin dhe fjalëkalimin tek file config.inc.php dhe sigurohu që korrispondojnë me informacionet që ju ka dhënë administratori i serverit MySQL.';
$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Veprimi';
$strAddAutoIncrement = 'Shto vlerë AUTO_INCREMENT';
$strAddConstraints = 'Shto kushte';  
$strAddDeleteColumn = 'Shto/Fshi fushën';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddHeaderComment = 'Shto një koment të personalizuar në header (\\n ndërpret rreshtin)';
$strAddIntoComments = 'Shto tek komentet';
$strAddNewField = 'Shto një fushë të re';
$strAddPrivilegesOnDb = 'Shto të drejta tek databaza në vazhdim';
$strAddPrivilegesOnTbl = 'Shto të drejta tek tabela në vazhdim';
$strAddSearchConditions = 'Shto kushte kërkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolonës(ave)';
$strAddUserMessage = 'Ke shtuar një përdorues të ri.';
$strAddUser = 'Shto një përdorues të ri';
$strAdministration = 'Administrimi';
$strAffectedRows = 'Rreshtat e ndikuar:';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto një regjistrim të ri';
$strAfterInsertSame = 'Kthehu mbrapa tek kjo faqe'; 
$strAfter = 'Mbas %s';
$strAllTableSameWidth = 'vizualizon të gjitha tabelat me të njëjtën gjërësi?';
$strAll = 'Të gjithë';
$strAlterOrderBy = 'Transformo tabelën e renditur sipas';
$strAnalyzeTable = 'Analizo tabelën';
$strAnd = 'Dhe';
$strAnIndex = 'Një tregues u shtua tek %s';
$strAny = 'Çfarëdo';
$strAnyHost = 'Çfarëdo host';
$strAnyUser = 'Çfarëdo përdorues';
$strAPrimaryKey = 'Një kyç primar u shtua tek %s';
$strArabic = 'Arabisht';
$strArmenian = 'Armene';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'Në fillim të tabelës';
$strAtEndOfTable = 'Në fund të tabelës';
$strAttr = 'Pronësi';
$strAutomaticLayout = 'Faqosje automatike';

$strBack = 'Mbrapa';
$strBaltic = 'Baltike';
$strBeginCut = 'FILLIMI I CUT';
$strBeginRaw = 'FILLIMI I RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Të dhëna të tipit binar - mos ndrysho';
$strBookmarkAllUsers = 'Lejo që çdo përdorues të ketë hyrje në këtë libërshënues';
$strBookmarkDeleted = 'Libërshënuesi u fshi.';
$strBookmarkLabel = 'Etiketë';
$strBookmarkQuery = 'Query SQL shtuar të preferuarve';
$strBookmarkThis = 'Shtoja të preferuarve këtë query SQL';
$strBookmarkView = 'Shfaq vetëm';
$strBrowseForeignValues = 'Shfleto opcionet e huaja';
$strBrowse = 'Shfaq';
$strBulgarian = 'Bullgarisht';
$strBzError = 'phpMyAdmin nuk është në gjendje të kompresojë dump-in për arsye të prapashtesës Bz2 të gabuar në këtë version të php. Ju rekomandojmë patjetër vendosjen e <code>$cfg[\'BZipDump\']</code> tek file juaj i konfigurimit të phpMyAdmin në <code>FALSE</code>. Nëqoftëse dëshironi të përdorni patjetër specifikat e kompresimit Bz2, duhet të rifreskoni php në versionin e fundit. Hidhini një sy php bug report %s për informacione të hollësishme.';
$strBzip = '"kompresuar me bzip2"';

$strCalendar = 'Kalendari';  
$strCannotLogin = 'E pamundur kryerja e login tek server-i MySQL';
$strCantLoad = 'I pamundur ngarkimi i prapashtesës %s,<br />kontrollo konfigurimin e PHP';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i prapashtesës iconv apo recode të nevoitshëm për konvertimin e karaktereve, konfiguroni php për të lejuar përdorimin e këtyre prapashtesave ose disaktivoni konvertimin e set të karaktereve në phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riemërtimi i treguesit në PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur përdorimi i funksioneve iconv apo libiconv apo recode_string për shkak se ekstensioni duhet të ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Europa qendrore';
$strChangeCopyModeCopy = '... mbaj të vjetrin.';
$strChangeCopyModeDeleteAndReload = ' ... elemino të vjetrin nga tabela e përdoruesve e pastaj rilexo të drejtat.';
$strChangeCopyModeJustDelete = ' ... elemino të vjetrin nga tabela e përdoruesve.';
$strChangeCopyMode = 'Krijo një përdorues të ri me të njëjta të drejta dhe ...';
$strChangeCopyModeRevoke = ' ... hiq të gjitha të drejtat nga i vjetri e pastaj eleminoje.';
$strChangeCopyUser = 'Ndrysho Informacionet e Login / Kopjo përdoruesin';
$strChangeDisplay = 'Zgjidh fushën që dëshiron të shohësh';
$strChange = 'Ndrysho';
$strChangePassword = 'Ndrysho fjalëkalimin';
$strCharset = 'Familje gërmash';
$strCharsetOfFile = 'Familja gërmave të file:';
$strCharsetsAndCollations = 'Familje gërmash dhe Collations';
$strCharsets = 'Familje gërmash';
$strCheckAll = 'Zgjidhi të gjithë';
$strCheckOverhead = 'Zgjidh të mbingarkuarit';
$strCheckPrivs = 'Kontrollo të drejtat';
$strCheckPrivsLong = 'Kontrollo të drejtat për databazën &quot;%s&quot;.';
$strCheckTable = 'Kontrollo tabelën';
$strChoosePage = 'Ju lutem zgjidhni faqen që dëshironi të modifikoni';
$strColComFeat = 'Vizualizimi i komenteve të kollonave';
$strCollation = 'Collation';
$strColumnNames = 'Emrat e kollonave';
$strColumnPrivileges = 'Të drejtat relative të kollonave';
$strCommand = 'Komanda';
$strCommentsForTable = 'KOMENTET PËR TABELËN';  
$strComments = 'Komente';
$strCompleteInserts = 'Të shtuarat komplet';
$strCompression = 'Kompresim';
$strConfigFileError = 'phpMyAdmin nuk arrin të lexojë file e konfigurimit!<br />Kjo mund të ndodhë kur php gjen një parse error në të apo kur php nuk arrin ta gjejë këtë file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke përdorur link-un e mëposhtëm dhe lexoni mesazhin(et) e gabimeve php që merrni. Në shumicën e rasteve mund t\'ju mungojë një apostrofë apo një presje.<br />Nëse faqja që do t\'ju hapet është bosh (e bardhë), atëhere gjithçka është në rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat për tabelën %s';
$strConnectionError = 'E pamundur lidhja: rregullime të pavlefshme.';  
$strConnections = 'Lidhje';
$strConstraintsForDumped = 'Kushtet për tabelat e nxjerra'; 
$strConstraintsForTable = 'Kushtet për tabelën';  
$strCookiesRequired = 'Nga kjo pikë e tutje, cookies duhet të jenë të aktivuara.';
$strCopyTable = 'Kopjo tabelën tek (databaza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCopyTableSameNames = 'I pamundur kopjimi i tabelës tek vetvetja!';
$strCouldNotKill = 'phpMyAdmin nuk është në gjendje të përfundojë thread %s. Ka mundësi të ketë përfunduar më parë.';
$strCreateIndex = 'Krijo një tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo një tregues të ri';
$strCreate = 'Krijo';
$strCreateNewDatabase = 'Krijo një databazë të re';
$strCreateNewTable = 'Krijo një tabelë të re tek databaza %s';
$strCreatePage = 'Krijo një faqe të re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCreationDates = 'Datat e Krijimit/Përditësimit/Kontrollit';
$strCriteria = 'Kriteri';
$strCroatian = 'Kroate';
$strCyrillic = 'Cyrillic';
$strCzech = 'Çekisht';
$strCzechSlovak = 'Çeko-Sllovak';  

$strDanish = 'Danisht';
$strDatabase = 'Databazat';
$strDatabaseEmpty = 'Emri i databazës mungon!'; 
$strDatabaseExportOptions = 'Opcione të eksportimit të databazës';
$strDatabaseHasBeenDropped = 'Databaza %s u eleminua.';
$strDatabases = 'Databazat';
$strDatabasesDropped = '%s databaza u eleminuan korrektësisht.';
$strDatabasesStatsDisable = 'Disaktivo Statistikat';
$strDatabasesStatsEnable = 'Aktivo Statistikat';
$strDatabasesStatsHeavyTraffic = 'Shënim: Aktivimi këtu i statistikave të Databazës mund të shkaktojë rritjen e trafikut midis server-it web dhe MySQL.';
$strDatabasesStats = 'Statistikat e databazave';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Vetëm të dhëna';
$strData = 'Të dhëna';
$strDBComment = 'Komenti për Databazën: ';
$strDbPrivileges = 'Të drejta specifike të databazës';
$strDBRename = 'Ndysho emrin e databazës në'; 
$strDbSpecific = 'specifik i databazës';
$strDefault = 'Prezgjedhur';
$strDefaultValueHelp = 'Për vlerat e prezgjedhura, ju lutem shtoni një vlerë të vetme, pa backslash escaping apo thonjëza, duke përdorur këtë format: a';
$strDefragment = 'Defragmento tabelën';  
$strDelayedInserts = 'Përdor shtimet me vonesë';  
$strDeleteAndFlushDescr = 'Kjo është rruga më e pastër, por ngarkimi i të drejtave mund të zgjasë disa çaste më shumë.';
$strDeleteAndFlush = 'Fshi përdoruesit dhe pastaj rifresko të drejtat.';
$strDeletedRows = 'rreshtat e fshirë:';
$strDeleted = 'rreshti u fshi';
$strDelete = 'Fshi';
$strDeleting = 'Në fshirje e sipër të %s';
$strDelOld = 'Faqja aktuale përmban riferime ndaj tabelash që nuk ekzistojnë më. Dëshironi t\'i eleminoni këto riferimente?';
$strDescending = 'Zbritës';
$strDescription = 'Përshkrimi';
$strDictionary = 'fjalor';
$strDisabled = 'Jo aktiv';
$strDisableForeignChecks = 'Ç\'aktivo kontrollin e kyçeve të jashtëm';  
$strDisplayFeat = 'Shfaq karakteristikat';
$strDisplayOrder = 'Mënyra e shfaqjes:';
$strDisplayPDF = 'Shfaq skemën e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDocu = 'Dokumentet';
$strDoYouReally = 'Konfermo: ';
$strDropDatabaseStrongWarning = 'Jeni duke SHKATËRRUAR një databazë komplete!';  
$strDrop = 'Elemino';
$strDropUsersDb = 'Elemino databazat që kanë emër të njëjtë me përdoruesit.';
$strDumpingData = 'Dump i të dhënave për tabelën';
$strDumpSaved = 'Dump u ruajt tek file %s.';
$strDumpXRows = 'Dump i %s rreshta duke filluar nga rreshti %s.';
$strDynamic = 'dinamik';

$strEdit = 'Ndrysho';
$strEditPDFPages = 'Ndrysho faqen PDF';
$strEditPrivileges = 'Ndrysho të drejtat';
$strEffective = 'Efektiv';
$strEmptyResultSet = 'MySQL ka kthyer një të përbashkët boshe (p.sh. zero rreshta).';
$strEmpty = 'Zbraz';
$strEnabled = 'Aktiv';
$strEncloseInTransaction = 'Përfshi eksportin në një transacion';  
$strEndCut = 'FUNDI I CUT';
$strEnd = 'Fund';
$strEndRaw = 'FUNDI I RAW';
$strEnglish = 'Anglisht';
$strEnglishPrivileges = 'Shënim: emrat e të drejtave të MySQL janë në Anglisht';
$strError = 'Gabim';
$strEstonian = 'Estoneze';
$strExcelEdition = 'Edicion i Excel';
$strExecuteBookmarked = 'Zbaton query nga libërshënuesi';
$strExplain = 'Shpjego SQL';
$strExport = 'Eksporto';
$strExtendedInserts = 'Të shtuara të zgjeruara';
$strExtra = 'Extra';

$strFailedAttempts = 'Përpjekje të dështuara';
$strField = 'Fusha';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFieldsEnclosedBy = 'Fushë e përbërë nga';
$strFieldsEscapedBy = 'Fushë e kufizuar nga';
$strFields = 'Fusha';
$strFieldsTerminatedBy = 'Fushë që mbaron me';
$strFileAlreadyExists = 'File %s ekziston në server: të lutem, ndrysho emrin e file ose zgjidh opcionin "Mbishkruaj".';
$strFileCouldNotBeRead = 'File nuk mund të lexohet';
$strFileNameTemplate = 'Emri i file template';
$strFileNameTemplateRemember = 'kujto template';
$strFixed = 'fiks';
$strFlushPrivilegesNote = 'Shënim: phpMyAdmin lexon të drejtat e përdoruesve direkt nga tabela e privilegjeve të MySQL. Përmbajtja e kësaj tabele mund të ndryshojë prej të drejtave të përdorura nga serveri nëse janë kryer ndryshime manuale. Në këtë rast, duhet të %srifreskoni të drejtat%s para se të vazhdoni.';
$strFlushTable = 'Rifillo ("FLUSH") tabelën';
$strFormat = 'Formati';
$strFormEmpty = 'Mungon një vlerë në formular!';
$strFullText = 'Teksti i plotë';
$strFunction = 'Funksioni';

$strGenBy = 'Gjeneruar nga';
$strGeneralRelationFeat = 'Karakteristikat e përgjithshme të relacionit';
$strGenTime = 'Gjeneruar më';
$strGeorgian = 'Gjeorgjisht';  
$strGerman = 'Gjermanisht';
$strGlobal = 'globale';
$strGlobalPrivileges = 'Të drejtat e përgjithshme';
$strGlobalValue = 'Vlerë Globale';
$strGo = 'Zbato';
$strGrantOption = 'Grant';
$strGreek = 'Greqisht';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u ndryshua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh të paktën një kolonë për të parë';
$strHebrew = 'Hebraike';
$strHomepageOfficial = 'Faqja zyrtare e phpMyAdmin';
$strHome = 'Shtëpia';
$strHostEmpty = 'Emri i host është bosh!';
$strHost = 'Host';
$strHungarian = 'Hungarisht';

$strIcelandic = 'Islandeze';  
$strId = 'ID';
$strIdxFulltext = 'Teksti komplet';
$strIgnoreInserts = 'Përdor shpërfill shtimet';  
$strIgnore = 'Shpërfill';
$strImportFiles = 'Importo files';
$strIndexes = 'Tregues';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndex = 'Treguesi';
$strIndexType = 'Lloji i treguesit&nbsp;:';
$strInnodbStat = 'Gjëndja InnoDB';
$strInsecureMySQL = 'File i konfigurimit në përdorim përmban zgjedhje (root pa asnjë password) që korrispondojnë me të drejtat e account MySQL të paracaktuar. Një server MySQL funksionues me këto zgjedhje është i pambrojtur ndaj sulmeve, dhe ju duhet patjetër të korrigjoni këtë vrimë në siguri.';
$strInsertAsNewRow = 'Shto një rresht të ri';
$strInsertedRowId = 'U shtua id e rreshtit:';
$strInsertedRows = 'Rreshtat e shtuar:';
$strInsert = 'Shto';
$strInternalNotNecessary = '* Nuk ka nevojë për një relacion të brendshëm kur ky relacion ekziston në InnoDB.';
$strInternalRelations = 'Relacione të brendshme';
$strInUse = 'në përdorim';

$strJapanese = 'Japonisht';
$strJumpToDB = 'Kalo tek databaza &quot;%s&quot;.';
$strJustDeleteDescr = 'Përdoruesit e &quot;fshirë&quot; do të kenë akoma mundësi të futen në server si zakonisht derisa të drejtat të ringarkohen përsëri.';
$strJustDelete = 'Vetëm fshi përdoruesit nga tabelat e të drejtave.';

$strKeepPass = 'Mos ndrysho fjalëkalim';
$strKeyname = 'Emri i kyçit';
$strKill = 'Hiq';
$strKorean = 'Koreane';

$strLandscape = 'Horizontale';
$strLatexCaption = 'Titulli i Tabelës caption';  
$strLatexContent = 'Përmbajtja e tabelës __TABLE__';
$strLatexContinuedCaption = 'Nëntitulli i tabelës vazhduese';
$strLatexContinued = '(vazhdon)';
$strLatexIncludeCaption = 'Përfshi nëntitullin e tabelës';
$strLatexLabel = 'Kyçi i etiketës';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura e tabelës __TABLE__';
$strLatvian = 'Letone';  
$strLengthSet = 'Gjatësia/Set*';
$strLimitNumRows = 'regjistrime për faqe';
$strLinesTerminatedBy = 'Rreshta që mbarojnë me';
$strLinkNotFound = 'Lidhja nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLithuanian = 'Lituane';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Pozicioni i file';
$strLogin = 'Hyrja';
$strLoginInformation = 'Informacione mbi Identifikimin';
$strLogout = 'Përfundo seancën';
$strLogPassword = 'Fjalëkalimi:';
$strLogServer = 'Serveri';
$strLogUsername = 'Emri i përdoruesit:';

$strMaximumSize = 'Madhësia maksimum: %s%s';  
$strMIME_available_mime = 'Lloje MIME në dispozicion';
$strMIME_available_transform = 'Transformacionet në dispozicion';
$strMIME_description = 'Përshkrimi';
$strMIME_MIMEtype = 'Lloji MIME';
$strMIME_nodescription = 'Asnjë përshkrim në dispozicion për këtë transformim.<br />Ju lutem pyet autorin, çfarë %s bën.';
$strMIME_transformation_note = 'Për listën e opcioneve të transformimeve në dispozicion dhe transformimet relativë të llojeve-MIME, kliko tek %spërshkrimet e transformimeve%s';
$strMIME_transformation_options_note = 'Ju lutem shkruani vlerat për opcionet e transformimit duke përdorur këtë format: \'a\', 100, b,\'c\'...<br />Nëse keni nevojë të shtoni një backslash ("\") apo një apostrofë ("\'") midis këtyre vlerave, duhet ti backslash-oni (për shembull \'\\\\xyz\' ose \'a\\\'b\').';
$strMIME_transformation_options = 'Opcione të transformimeve';
$strMIME_transformation = 'Transformimi i Shfletuesit';
$strMIMETypesForTable = 'LLOJET E MIME PËR TABELËN';  
$strMIME_without = 'Llojet-MIME të printuar në italics kanë një funksion transformacioni të veçantë';
$strModifications = 'Ndryshimet u ruajtën';
$strModifyIndexTopic = 'Ndrysho një tregues';
$strModify = 'Ndrysho';
$strMoveTableOK = 'Tabela %s u lëviz tek %s.';
$strMoveTableSameNames = 'E pamundur lëvizja e tabelës tek vetvetja!';
$strMoveTable = 'Sposto tabelën në (databaza<b>.</b>tabela):';
$strMultilingual = 'shumëgjuhësh';
$strMySQLCharset = 'Set simbolesh MySQL';
$strMySQLConnectionCollation = 'Vendosja e lidhjes MySQL'; 
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLShowProcess = 'Shfaq proceset në ekzekutim';
$strMySQLShowStatus = 'Shfaq informacionet e nisjes së MySQL';
$strMySQLShowVars = 'Shfaq të ndryshueshmet e sistemit të MySQL';

$strName = 'Emri';
$strNext = 'Në vazhdim';
$strNoDatabases = 'Asnjë databazë';
$strNoDatabasesSelected = 'Nuk është zgjedhur asnjë databazë.';
$strNoDescription = 'asnjë përshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" nuk janë aktive.';
$strNoExplain = 'Mos shpjego SQL';
$strNoFrames = 'phpMyAdmin funksionon më mirë me shfletues që suportojnë frames';
$strNoIndex = 'Asnjë tregues i përcaktuar!';
$strNoIndexPartsDefined = 'Asnjë pjesë e treguesit është përcaktuar!';
$strNo = ' Jo ';
$strNoModification = 'Asnjë ndryshim';
$strNone = 'Asnjë lloj';
$strNoOptions = 'Ky format nuk ka opcione';
$strNoPassword = 'Asnjë fjalëkalim';
$strNoPermission = 'Serveri web nuk ka të drejtat e duhura për të ruajtur file %s.';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnjë e drejtë';
$strNoRights = 'Nuk ke të drejta të mjaftueshme për të kryer këtë operacion!';
$strNoRowsSelected = 'Nuk ka rreshta të zgjedhur';  
$strNoSpace = 'Hapësirë e pamjaftueshme për të ruajtur file %s.';
$strNoTablesFound = 'Nuk gjenden tabela në databazë.';
$strNotNumber = 'Ky nuk është një numër!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk është përcaktuar tek %s';
$strNoUsersFound = 'Nuk u gjet asnjë përdorues.';
$strNoValidateSQL = 'Mos vleftëso SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jnë) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(ë)';
$strNumTables = 'Tabela';

$strOK = 'OK';
$strOperations = 'Operacione';
$strOperator = 'Operator';  
$strOptimizeTable = 'Optimizo tabelën';
$strOr = 'Ose';
$strOverhead = 'Mbi limit';
$strOverwriteExisting = 'Mbishkruaj file(s) ekzistues';

$strPageNumber = 'Numri i faqes:';
$strPaperSize = 'Përmasat e letrës';
$strPartialText = 'Tekst i pjesëshëm';
$strPasswordChanged = 'Fjalëkalimi për përdoruesin %s u ndryshua me sukses.';
$strPasswordEmpty = 'Fjalëkalimi është bosh!';
$strPassword = 'Fjalëkalimi';
$strPasswordNotSame = 'Fjalëkalimi nuk korrispondon!';
$strPdfDbSchema = 'Skema e databazës "%s" - Faqja %s';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnjë tabelë';
$strPerHour = 'në orë';
$strPerMinute = 'në minutë';
$strPerSecond = 'në sekondë';
$strPhoneBook = 'numratori';
$strPHP40203 = 'Është në përdorim PHP 4.2.3, që përmban një difekt serioz me stringat multi-byte strings (mbstring). Shiko raportin 19404 të bug PHP. Ky version i PHP nuk rekomandohet për t\'u përdorur me phpMyAdmin.';
$strPhp = 'Krijo kodin PHP';
$strPHPVersion = 'Versioni i PHP';
$strPmaDocumentation = 'Dokumente të phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET të përcaktohet tek file i konfigurimit!';
$strPolish = 'Polonisht'; 
$strPortrait = 'Vertikal';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardhësi';
$strPrimaryKeyHasBeenDropped = 'Kyçi primar u eleminua';
$strPrimaryKeyName = 'Emri i kyçit primar duhet të jetë... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> të jetë emri i, dhe <b>vetëm i</b>, një kyçi primar!)';
$strPrimary = 'Primar';
$strPrint = 'Printo';
$strPrintViewFull = 'Shfaq për printim (me full text)';
$strPrintView = 'Shfaq për printim';
$strPrivDescAllPrivileges = 'Përfshin të gjitha të drejtat me përjashtim të GRANT.';
$strPrivDescAlter = 'Lejon ndryshimin e strukturës së tabelave ekzistuese.';
$strPrivDescCreateDb = 'Lejon krijimin e tabelave të reja dhe databazave të reja.';
$strPrivDescCreateTbl = 'Lejon krijimin e tabelave të reja.';
$strPrivDescCreateTmpTable = 'Lejon krijimin e tabelave të përkohëshme.';
$strPrivDescDelete = 'Lejon fshirjen e të dhënave.';
$strPrivDescDropDb = 'Lejon eleminimin e databazave dhe tabelave.';
$strPrivDescDropTbl = 'Lejon eleminimin e tabelave.';
$strPrivDescExecute = 'Lejon ekzekutimin e procedurave të regjistruara; Nuk ka efekt në këtë version të MySQL.';
$strPrivDescFile = 'Lejon importimin e të dhënave nga dhe eksportimin e të dhënave në files.';
$strPrivDescGrant = 'Lejon të shtosh përdorues dhe të drejta pa ringarkuar tabelat e privilegjeve.';
$strPrivDescIndex = 'Lejon krijimin dhe eleminimin e treguesve.';
$strPrivDescInsert = 'Lejon futjen dhe mbishkrimin e të dhënave.';
$strPrivDescLockTables = 'Lejon bllokimin e tabelave për thread e momentit.';
$strPrivDescMaxConnections = 'Kufizon numrin e lidhjeve të reja që një përdorues mund të hapë në një orë.';
$strPrivDescMaxQuestions = 'Kufizon numrin e kërkesave që një përdorues mund ti dërgojë server-it në një orë.';
$strPrivDescMaxUpdates = 'Kufizon numrin e komandave që mund të ndryshojnë një tabelë apo databazë që një përdorues mund të zbatojë në një orë.';
$strPrivDescProcess3 = 'Lejon vrasjen e proçeseve të përdoruesve të tjerë.';
$strPrivDescProcess4 = 'Lejon shikimin e të gjitha kërkesave tek lista e proçeseve.';
$strPrivDescReferences = 'Nuk ka asnjë efekt tek ky version i MySQL.';
$strPrivDescReload = 'Lejon ringarkimin e parametrave të server-it dhe risetimin e cache të servërve.';
$strPrivDescReplClient = 'I jep të drejtën një përdoruesi të pyesë se ku gjenden slaves / masters.';
$strPrivDescReplSlave = 'Nevoitet për replikimin e slaves.';
$strPrivDescSelect = 'Lejon leximin e të dhënave.';
$strPrivDescShowDb = 'Mundëson hyrjen tek lista komplete e databazave.';
$strPrivDescShutdown = 'Lejon përfundimin e serverit.';
$strPrivDescSuper = 'Lejon lidhje të tjera, edhe po të jetë arritur numri maksimal i lidhjeve; I nevojshëm për shumë operacione administrimi si përcaktimi i të ndryshueshmeve globale apo fshirja e threads të përdoruesve të tjerë.';
$strPrivDescUpdate = 'Lejon ndryshimin e të dhënave.';
$strPrivDescUsage = 'Asnjë të drejtë.';
$strPrivilegesReloaded = 'Të drejtat u përditësuan me sukses.';
$strPrivileges = 'Të drejtat';
$strProcesses = 'Proceset';
$strProcesslist = 'Lista e Proçeseve';
$strPutColNames = 'Vendos emrat e kollonave tek rreshti i parë';

$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQBE = 'Query nga shembull';
$strQueryFrame = 'Dritarja e Query';
$strQueryOnDb = 'SQL-query tek databaza <b>%s</b>:';
$strQuerySQLHistory = 'Kronollogjia e SQL';
$strQueryStatistics = '<b>Statistikat e Query</b>: Që nga nisja e tij, serverit i janë dërguar %s queries.';
$strQueryTime = 'Query ka zgjatur %01.4f sec';
$strQueryType = 'Lloji i query';
$strQueryWindowLock = 'Mos e mbishkruaj këtë query nga jashtë dritares';

$strReceived = 'Marrë';
$strRecords = 'Regjistrime';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRefresh = 'Rifresko';  
$strRelationalSchema = 'Skema relacionale';
$strRelationNotWorking = 'Karakteristikat shtesë janë ç\'aktivuar për sa i takon funksionimit me tabelat e lidhura. Për të zbuluar përse, klikoni %skëtu%s.';
$strRelationsForTable = 'RELACIONET PËR TABELËN';  
$strRelations = 'Relacione';
$strRelationView = 'Shiko relacionet';
$strReloadingThePrivileges = 'Duke ringarkuar të drejtat';
$strRemoveSelectedUsers = 'Heq përdoruesit e zgjedhur';
$strRenameDatabaseOK = 'Databazës %s i është ndryshuar emri në %s';  
$strRenameTableOK = 'Tabela %s u riemërtua %s';
$strRenameTable = 'Riemërto tabelën në';
$strRepairTable = 'Riparo tabelën';
$strReplaceNULLBy = 'Zëvendëso NULL me';
$strReplaceTable = 'Zëvendëso të dhënat e tabelës me file';
$strReset = 'Rinis';
$strResourceLimits = 'Limitet e rezervave';
$strReType = 'Rifut';
$strRevokeAndDeleteDescr = 'Përdoruesit DO TË MUND TË PËRDORIN sidoqoftë të drejtën deri atëhere kur të drejtat të ringarkohen.';
$strRevokeAndDelete = 'Hiqja të gjitha të drejtat aktive përdoruesve dhe pastaj eleminoi.';
$strRevoke = 'Hiq';
$strRevokeMessage = 'Ke anulluar të drejtat për %s';
$strRomanian = 'Romanisht';  
$strRowLength = 'Gjatësia e rreshtit';
$strRowsFrom = 'rreshta duke filluar nga';
$strRowSize = 'Madhësia e rreshtit';
$strRowsModeFlippedHorizontal = 'horizontal (headers të rrotulluar)';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' në modalitetin %s dhe përsërit headers mbas %s qelish ';
$strRowsModeVertical = ' vertikal ';
$strRows = 'rreshta';
$strRowsStatistic = 'Statistikat e rreshtave';
$strRunning = 'në ekzekutim tek %s';
$strRunQuery = 'Dërgo Query';
$strRunSQLQuery = 'Zbato query SQL tek databaza %s';
$strRussian = 'Rusisht';

$strSaveOnServer = 'Ruaje në server tek directory %s';
$strSave = 'Ruaj';
$strScaleFactorSmall = 'Faktori i shkallës është shumë i vogël për të plotësuar skemën në faqe';
$strSearchFormTitle = 'Kërko në databazë';
$strSearchInTables = 'Tek tabela(at):';
$strSearch = 'Kërko';
$strSearchNeedle = 'Fjala(ë) apo vlera(at) për t\'u kërkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 'të paktën njërën nga fjalët';
$strSearchOption2 = 'të gjitha fjalët';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si shprehje e rregullt';
$strSearchResultsFor = 'Kërko rezultatet për "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSecretRequired = 'Tani nevoitet një fjalëkalim sekret për file e konfigurimit(blowfish_secret).';
$strSelectADb = 'Të lutem, zgjidh një databazë';
$strSelectAll = 'Zgjidh gjithçka';
$strSelectFields = 'Zgjidh fushat (të paktën një):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Zgjidh Tabelat';
$strSend = 'Ruaje me emër...';
$strSent = 'Dërguar';
$strServerChoice = 'Zgjedhja e serverit';
$strServerNotResponding = 'Serveri nuk përgjigjet'; 
$strServer = 'Serveri';
$strServerStatus = 'Informacione mbi Runtime';
$strServerStatusUptime = 'Ky server MySQL po punon që prej %s. U nis më %s.';
$strServerTabVariables = 'Të ndryshueshmet';
$strServerTrafficNotes = '<b>Trafiku i serverit</b>: Këto tabela do të shfaqin statistikat e trafikut të rrjetit për këtë server MySQL që nga momenti i nisjes së tij.';
$strServerVars = 'Të ndryshueshmet dhe parametrat e Serverit';
$strServerVersion = 'Versioni i MySQL';
$strSessionValue = 'Vlera seancës';
$strSetEnumVal = 'N.q.s. fusha është "enum" apo "set", shtoni të dhënat duke përdorur formatin: \'a\',\'b\',\'c\'...<br />Nëse megjithatë do t\'u duhet të vini backslashes ("\") apo single quote ("\'") para këtyre vlerave, backslash-ojini (për shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Shfaqi të gjithë';
$strShowColor = 'Shfaq ngjyrën';
$strShowDatadictAs = 'Formati i Data Dictionary';
$strShowFullQueries = 'Shfaq të gjitha kërkesat';
$strShowGrid = 'Shfaq rrjetën';
$strShowingRecords = 'Shfaqja e regjistrimeve ';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShow = 'Shfaq';
$strShowTableDimension = 'Trego madhësinë e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje përsëri këtë query';
$strSimplifiedChinese = 'Kineze e thjeshtëzuar';
$strSingly = '(një nga një)';
$strSize = 'Madhësia';
$strSlovak = 'Sllovakisht'; 
$strSlovenian = 'Sllovenisht';  
$strSortByKey = 'Rendit sipas kyçit';
$strSort = 'rreshtimi';
$strSpaceUsage = 'Hapësira e përdorur';
$strSpanish = 'Spanjisht';  
$strSplitWordsWithSpace = 'Fjalët janë të ndara me një hapsirë (" ").';
$strSQLExportType = 'Lloji i Eksportit';  
$strSQLParserBugMessage = 'Ka mundësi që ka një bug tek parser-i SQL. Ju lutem, kontrolloni query tuaj me kujdes, dhe kontrolloni që presjet të jenë ku duhet dhe jo të gabuara. Një shkak tjetër i mundshëm i gabimit mund të jetë që po mundoheni të uploadoni një file binar jashtë një zone teksti të kufizuar me presje. Mund edhe të provoni query tuaj MySQL nga interfaqja e shkruar e komandave. Gabimi i mëposhtëm i kthyer nga server-i MySQL, nëse ekziston një i tillë, mund tju ndihmojë në diagnostikimin e problemit. Nëse ka akoma probleme, apo n.q.s. parser-i SQL i phpMyAdmin gabon kur përkundrazi nga interfaqja e komandave të thjeshta nuk rezultojnë probleme, ju lutem zvogëloni query tuaj SQL në hyrje në query e vetme që shkakton probleme, dhe dërgoni një bug raportim me të dhënat rezultuese nga seksioni CUT i mëposhtëm:';
$strSQLParserUserError = 'Mesa duket ekziston një gabim tek query juaj SQL e futur. Gabimi i serverit MySQL i treguar më poshtë, nëse ekziston, mund t\'ju ndihmojë në diagnostikimin e problemit';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identifikues i pavlefshëm';
$strSQPBugUnclosedQuote = 'Thonjëza të pambyllura';
$strSQPBugUnknownPunctuation = 'Stringë Punctuation e panjohur';
$strStatCheckTime = 'Kontrolli i fundit';
$strStatCreateTime = 'Krijimi';
$strStatement = 'Instruksione';
$strStatUpdateTime = 'Ndryshimi i fundit';
$strStatus = 'Gjendja';
$strStrucCSV = 'të dhëna CSV';
$strStrucData = 'Struktura dhe të dhëna';
$strStrucExcelCSV = 'CSV për të dhëna MS Excel';
$strStrucNativeExcel = 'Të dhëna orgjinale MS Excel'; 
$strStrucOnly = 'Vetëm struktura';
$strStructPropose = 'Propozo strukturën e tabelës';
$strStructure = 'Struktura';
$strSubmit = 'Dërgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';
$strSwedish = 'Suedisht';
$strSwitchToTable = 'Kalo tek tabela e kopjuar';

$strTableComments = 'Komente mbi tabelën';
$strTableEmpty = 'Emri i tabelës është bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabelës';
$strTableOfContents = 'Tabela e përmbajtjes';
$strTableOptions = 'Opcione për tabelën';
$strTables = '%s tabela(at)';
$strTableStructure = 'Struktura e tabelës';
$strTable = 'Tabela';
$strTakeIt = 'merre';  
$strTblPrivileges = 'Të drejta relative me tabelat';
$strTextAreaLength = ' Për shkak të gjatësisë saj,<br /> kjo fushë nuk mund të ndryshohet ';
$strThai = 'Thai';
$strTheme = 'Tema / Stili';  
$strThisHost = 'Këtë Host';
$strThreadSuccessfullyKilled = 'Thread %s u përfundua me sukses.';
$strTime = 'Koha';
$strToggleScratchboard = '(ç\')aktivo scratchboard';
$strTotal = 'Gjithsej';
$strTotalUC = 'Gjithsej';
$strTraditionalChinese = 'Kineze tradicionale';
$strTraditionalSpanish = 'Spanjishte tradicionale';  
$strTraffic = 'Trafiku';
$strTransformation_application_octetstream__download = 'Shfaq një lidhje për të shkarkuar të dhënat binare të një fushe. Mundësia e parë është emri i file binar. Opcioni i dytë është emri i mundshëm i fushës së rreshtit të tabelës që përmban emrin e file. Nëse jepni opcionin e dytë, opcioni i parë duhet të jetë një stringë bosh'; 
$strTransformation_image_jpeg__inline = 'Shfaq një miniaturë të klikueshme; mundësitë: gjërësia, lartësia në pixels (ruan proporcionin origjinal)';
$strTransformation_image_jpeg__link = 'Shfaq një lidhje për tek kjo figurë (download blob direkt, p.sh.).';
$strTransformation_image_png__inline = 'Shiko figurën/jpeg: në linjë';
$strTransformation_text_plain__external = 'VETËM PËR LINUX: Lëshon një program të jashtëm dhe plotëson të dhënat e fushave me anë të standard input. Jep si rezultat standard output e programit. Vendosja default është Tidy, për të printuar si duhet kodin HTML. Për arsye sigurie, do t\'ju duhet të ndryshoni file libraries/transformations/text_plain__external.inc.php dhe të shkruani instrumentet që lejoni të përdoren. Mundësia e parë pra është numri i programit që dëshironi të përdorni dhe e dyta janë parametrat për programin. Parametri i tretë, n.q.s. i vendosur në 1 do të konvertojë output duke përdorur htmlspecialchars() (Prezgjedhur: 1). Një parametër i katërt, po të jetë vendosur në 1 do t\'i shtojë një NOWRAP përmbajtjes së qelisë kështu që output komplet do të shfaqet pa u riformatuar (Default: 1)';
$strTransformation_text_plain__formatted = 'Konservon formatimin origjinal të fushës. Nuk aplikohet asnjë Escaping.';
$strTransformation_text_plain__imagelink = 'Shfaq një figurë dhe një link, fusha përmban emrin e file; opcioni i parë është një prefiks si "http://domain.com/", opcioni i dytë është gjërësia në pixels, i treti është lartësia.';
$strTransformation_text_plain__link = 'Shfaq një link, fusha përmban emrin e file; opcioni i parë është një prefiks si "http://domain.com/", opcioni i dytë është një titull për lidhjen.';
$strTransformation_text_plain__substr = 'Shfaq vetëm një pjesë të string-ës. Opcioni i parë është offset-i që shërben për të përcaktuar ku fillon output i tekstit tuaj (Default 0). Opcioni i dytë është një offset që tregon se sa tekst kthehet. Po të jetë bosh, kthen të gjithë tekstin e mbetur. Opcioni i tretë përcakton çfarë karakteresh do të shtohen në fund të output kur kthehet një nën-string-ë (Default: ...) .';
$strTruncateQueries = 'Shkurton (ndërpret) Queries e Shfaqura';
$strTurkish = 'Turqisht';
$strType = 'Lloji';

$strUkrainian = 'Ukrainase';
$strUncheckAll = 'Ç\'zgjidhi të gjithë';
$strUnicode = 'Unicode';
$strUnique = 'I vetëm';
$strUnknown = 'e panjohur';
$strUnselectAll = 'Ç\'zgjidh gjithçka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet për %s.';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUpdComTab = 'Ju lutem lexoni dokumentet mbi rifreskimin e tabelës suaj Column_comments';
$strUpgrade = 'Duhet të instaloni %s %s ose superior.';
$strUsage = 'Përdorimi';
$strUseBackquotes = 'Përdor backquotes me emrat e tabelave dhe fushave';
$strUseHostTable = 'Përdor Tabelën e Host-it';
$strUserAlreadyExists = 'Përdoruesi %s ekziston!';
$strUserEmpty = 'Emri i përdoruesit është bosh!';
$strUserName = 'Emri i përdoruesit';
$strUserNotFound = 'Përdoruesi i zgjedhur nuk u gjet tek tabela e të drejtave.';
$strUserOverview = 'Paraqitja e përgjithshme e përdoruesve';
$strUser = 'Përdorues';
$strUsersDeleted = 'Përdoruesit e zgjedhur u hoqën me sukses.';
$strUsersHavingAccessToDb = 'Përdoruesit që kanë hyrje tek &quot;%s&quot;';
$strUseTables = 'Përdor tabelat';
$strUseTextField = 'Përdor fushë teksti';
$strUseThisValue = 'Përdor këtë vlerë';

$strValidateSQL = 'Vleftëso SQL';
$strValidatorError = 'Miratuesi SQL nuk arrin të niset. Ju lutem kontrolloni instalimin e prapashtesave të duhura php ashtu si përshkruhet tek %sdokumentimi%s.';
$strValue = 'Vlerë';
$strVar = 'E ndryshueshme';
$strViewDumpDatabases = 'Shfaq dump (skema) e databazave';
$strViewDumpDB = 'Shfaq dump (skema) e databazës';
$strViewDump = 'Shfaq dump (skema) e tabelës';

$strWebServerUploadDirectory = 'directory e upload të server-it web';
$strWebServerUploadDirectoryError = 'Directory që keni zgjedhur për upload nuk arrin të gjehet';
$strWelcome = 'Mirësevini tek %s';
$strWestEuropean = 'Europa Perëndimore';
$strWildcard = 'wildcard';
$strWindowNotFound = 'Dritarja e destinimit të browser nuk mund të rifreskohet. Ka mundësi të keni mbyllur dritaren nënë apo që browser-i juaj është duke bllokuar rifreskimet ndërmjet browser-ve për shkak të ndonjë mase sigurie';
$strWithChecked = 'N.q.s. të zgjedhur:';
$strWrongUser = 'Emër përdoruesi apo fjalëkalim i gabuar. Ndalohet hyrja.';

$strXML = 'XML';

$strYes = ' Po ';

$strZeroRemovesTheLimit = 'Shënim: Vendosja e këtyre opcioneve në 0 (zero) do të thotë asnjë limit.';
$strZip = '"kompresuar me zip"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
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
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate

$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
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
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
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

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
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

$strSelectBinaryLog = 'Select binary log to view';  //to translate
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
$strSwitchToDatabase = 'Switch to copied database';  //to translate

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
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

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
