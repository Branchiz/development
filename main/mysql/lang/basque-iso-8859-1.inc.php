<?php
/* $Id: basque-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// Atajos para Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Iga', 'Astel', 'Astea', 'Astez', 'Oste', 'Osti', 'Lar');
$month = array('Urt', 'Ots', 'Mar', 'Api', 'Mai', 'Eka', 'Uzt', 'Abu', 'Ira', 'Urr', 'Aza', 'Abe');
// Ikus http://www.php.net/manual/es/function.strftime.php zehazteko
// hurrengo aldagaia
$datefmt = '%Y-%m-%d, %H:%M:%S';
$timespanfmt = '%s egun, %s ordu, %s minutu eta %s segundu';

$strAbortedClients = 'Deuseztatua';
$strAccessDeniedExplanation = 'phpMyAdmin MySQL zerbitzariarekin konektatzen saiatu zen, eta zerbitzariak konexioa ukatu zuen. Config.inc.php fitxategian host-a, erabiltzaile-izena eta pasahitza berpasatu beharko dituzu eta MySQL zerbitzariaren administratzaileak emaniko informazioarekin bat egiten dutela ziurtatu.';
$strAccessDenied = 'Sarbidea ukatua';
$strAction = 'Ekintza';
$strAddAutoIncrement = 'Gehitu AUTO_INCREMENT balioa';
$strAddConstraints = 'Murrizketak gehitu';
$strAddDeleteColumn = 'Gehitu/ezabatu irizpide-zutabea';
$strAddDeleteRow = 'Gehitu/ezabatu irizpide-errenkada';
$strAddIntoComments = 'Iruzkinetan gehitu';
$strAddNewField = 'Eremu berria gehitu';
$strAddPrivilegesOnDb = 'Pribilegioak gehitu datu-base honetan';
$strAddPrivilegesOnTbl = 'Pribilegioak gehitu taula honetan ';
$strAddSearchConditions = 'Bilatzeko baldintzak txertatu ("where" klausularen gorputza):';
$strAddToIndex = '&nbsp;%s&nbsp; zutabe indizean gehituta';
$strAddUser = 'Erabiltzaile berria gehitu';
$strAddUserMessage = 'Erabiltzaile berria gehitu duzu.';
$strAdministration = 'Kudeaketa';
$strAffectedRows = 'Eragindako errenkadak: ';
$strAfterInsertBack = 'Itzuli';
$strAfterInsertNewInsert = 'Erregistro berria gehitu';
$strAfter = '%s(a)ren ondoren';
$strAll = 'Guztiak';
$strAllTableSameWidth = 'Zabalera berdina duten taula guztiak erakutsi?';
$strAlterOrderBy = 'Taularen "Order By" aldatu';
$strAnalyzeTable = 'Taula aztertu';
$strAnd = 'eta';
$strAnIndex = 'Indize bat gehitu da hemen: %s';
$strAny = 'edozein';
$strAnyHost = 'Edozein zerbitzari';
$strAnyUser = 'Edozein erabiltzaile';
$strAPrimaryKey = 'Lehen mailako gakoa gehitu da hemen: %s';
$strArabic = 'Arabiera';
$strArmenian = 'Armeniera';
$strAscending = 'Goranzko';
$strAtBeginningOfTable = 'Taularen hasiera';
$strAtEndOfTable = 'Taularen amaiera';
$strAttr = 'Ezaugarriak';
$strAutomaticLayout = 'Diseinu automatikoa';

$strBack = 'Itzuli';
$strBaltic = 'Baltikera';
$strBeginCut = 'EBAKINAREN HASIERA';
$strBeginRaw = 'IRAULKETAREN HASIERA';
$strBinary = ' Binarioa ';
$strBinaryDoNotEdit = ' Binarioa - ez editatu! ';
$strBookmarkAllUsers = 'Gogokoen erregistro hau edozein erabiltzailearentzat erabilgarri ';
$strBookmarkDeleted = 'Gordetako kontsulta ezabatu da.';
$strBookmarkLabel = 'Etiketa';
$strBookmarkQuery = 'Kontsulta gogokoetan gordea';
$strBookmarkThis = 'Kontsulta hau gogokoetan gorde';
$strBookmarkView = 'Soilik ikusi';
$strBrowse = 'Arakatu';
$strBulgarian = 'Bulgariera';
$strBzError = 'phpMyAdmin-ek ezinezko izan du iraulketa trinkotzea php bertsio honen Bz2 luzapena hondatuta dagoelako. Zinez gomendatzen dizugu zure phpMyAdmin-en konfigurazio-fitxategian <code>$cfg[\'BZipDump\']</code> parametroa era honetan <code>FALSE</code> ezartzea.Bz2 trinkotzeko hobespenak erabili nahi badituzu, zure php-a bertsio berri batera gaurkotu beharko duzu. Detaileak ikusi nahi izanez gero begira erroreen txostena.';
$strBzip = '"Bzip-ez trinkotua"';

$strCannotLogin = 'Ezinezkoa MySql zerbitzarian saioa hastea';
$strCantLoad = 'ezinezkoa %s luzapena kargatzea ,<br />mesedez, berpasatu zure PHPren konfigurazioa.';
$strCantLoadRecodeIconv = 'Ezinezkoa iconv kargatzea edota karaktere-jokoaren bihurketarako beharrezkoa den luzapena berkodifikatzea, configure php para permitir el uso de estas extensiones o desactive la conversión de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Ezinezkoa indizearen izena ˇPRIMARY! berrizendatzea';
$strCantUseRecodeIconv = 'Ezin dira erabili ez iconv, ez libiconv ezta recode_string funtzioa luzapenen txostena kargatzen den bitartean. Berpasatu php-ren konfigurazioa.';
$strCardinality = 'Kardinalitatea';
$strCaseInsensitive = 'Maiuskulak ez ditu bereizten';
$strCaseSensitive = 'Maiuskulak bereizten ditu';
$strCentralEuropean = 'Erdialdeko europearra';
$strChange = 'Aldatu';
$strChangeCopyModeCopy = '... mantendu aurrekoa.';
$strChangeCopyModeDeleteAndReload = ' ... zaharra ezabatu erabiltzaileen tauletatik eta ondoren berkargatu pribilegioak.';
$strChangeCopyMode = 'Erabiltzaile berri bat sortu pribilegio berdinekin eta ...';
$strChangeCopyModeJustDelete = ' ... zaharra ezabatu erabiltzaileen tauletatik.';
$strChangeCopyModeRevoke = ' ... zaharraren pribilegio aktibo guztiak errebokatu eta ondoren ezabatu.';
$strChangeCopyUser = 'Aldatu saioa hasteko informazioa / Erabiltzailea kopiatu';
$strChangeDisplay = 'Aukeratu erakutsi beharreko eremua';
$strChangePassword = 'Pasahitza aldatu';
$strCharset = 'Karaktere-jokoa';
$strCharsetOfFile = 'Fitxategiaren karaktereen kodeketa:';
$strCharsetsAndCollations = 'Karaktere-multzoak eta ordenamenduak';
$strCharsets = 'Karaktere-multzoa';
$strCheckAll = 'Guztiak egiaztatu';
$strCheckOverhead = 'Arazteko hondakinak egiaztatu';
$strCheckPrivsLong = '&quot;%s&quot; datu-basearen pribilegioak egiaztatu.';
$strCheckPrivs = 'Pribilegioak egiaztatu';
$strCheckTable = 'Taula egiaztatu';
$strChoosePage = 'Aukeratu editatzeko orria mesedez';
$strColComFeat = 'Zutabearen iruzkinak erakusten';
$strCollation = 'Ordenamendua';
$strColumnNames = 'Zutabe izenak';
$strColumnPrivileges = 'Zutabearen pribilegio espezifikoak';
$strCommand = 'Komandoa';
$strComments = 'Iruzkinak';
$strCompleteInserts = '"Insert"ak osatu';
$strCompression = 'Trinkotzea';
$strConfigFileError = 'phpMyAdmin-ek ezin izan du zure konfigurazio fitxategia irakurri!<br />Hau gerta liteke php-k sintasi errore bat aurkitzen badio edota php-k fitxategia ezin izan duelako aurkitu.<br />Faborez, saiatu konfigurazio fitxategia zuzenean deitzen hurrengo esteka erabiliz eta irakurri jaso lite(z)keen php-ren errore mezua(k). Kasu gehienetan komatxo edo puntu eta komaren bat nonbait ez egoteak sortzen du arazoa.<br />Orria txuriz jasoz gero, dena ondo legoke.';
$strConfigureTableCoord = 'Mesedez, %s taularentzako koordinatuak konfiguratu';
$strConnections = 'Konexioak';
$strConstraintsForDumped = 'Iraulitako taulentzako murrizketak';
$strConstraintsForTable = 'Taularentzako murrizketak';
$strCookiesRequired = 'Puntu honetarako cookie-ek gaituta egon behar dute.';
$strCopyTableOK = '%s taula hona kopiatua izan da: %s.';
$strCopyTableSameNames = 'Ezinezkoa da taula berberera kopiatzea!';
$strCopyTable = 'Taula hona kopiatu: (datu-base<b>.</b>taula):';
$strCouldNotKill = 'phpMyAdmin-ek ezin izan du %s haria deuseztatu. Seguruena aurretik itxia izatea.';
$strCreateIndex = 'Indize bat sortu &nbsp;%s&nbsp; zutabetan';
$strCreateIndexTopic = 'Indize berri bat sortu';
$strCreateNewDatabase = 'Datu-base berri bat sortu';
$strCreateNewTable = 'Taula berri bat sortu %s datu-basean';
$strCreatePage = 'Orri berri bat sortu';
$strCreatePdfFeat = 'PDF-en sorrera';
$strCreate = 'Sortu';
$strCreationDates = 'Sortu/Eguneratu/Egiaztatu datak';
$strCriteria = 'Irizpidea';
$strCroatian = 'Croaziera';
$strCyrillic = 'Zirilikoa';
$strCzech = 'Txekiera';

$strDanish = 'Danesa';
$strDatabase = 'Datu-basea';
$strDatabaseExportOptions = 'Datu-basea esportatzeko aukerak';
$strDatabaseHasBeenDropped = '%s datu-basea ezabatua izan da.';
$strDatabases = 'Datu-baseak';
$strDatabasesDropped = '%s datu-base arrakastaz ezabatu dira.';
$strDatabasesStats = 'Datu-baseen estatistikak';
$strDatabasesStatsDisable = 'Estatistikak ezgaitu';
$strDatabasesStatsEnable = 'Estatistikak gaitu';
$strDatabasesStatsHeavyTraffic = 'Oharra: Datu-basearen estatistikak hemen gaituz gero web-zerbitzaria eta MySQL-arenaren arteko trafiko handia sor liteke.';
$strData = 'Datuak';
$strDataDict = 'Datu-hiztegia';
$strDataOnly = 'Datuak soilik';
$strDBComment = 'Datu-basearen iruzkina: ';
$strDbPrivileges = 'Datu-basearen pribilegio espezifikoak';
$strDbSpecific = 'Datubasearentzat espezifikoa';
$strDefault = 'Lehenetsia';
$strDefaultValueHelp = 'Lehenetsitako balioak erabiltzeko, mesedez sartu balio bakar bat, komatxo edota alderantzikaturiko barrarik gabe, formato hau erabiliz: a';
$strDelayedInserts = 'Use delayed inserts';
$strDeleteAndFlushDescr = 'Hau da biderik garbiena, baina pribilegioak berkargatzeak denbora behar du.';
$strDeleteAndFlush = 'Erabiltzaileak ezabatu eta ondoren pribilegioak berkargatu.';
$strDeleted = 'Errenkada ezabatua izan da';
$strDeletedRows = 'Ezabatutako errenkadak:';
$strDelete = 'Ezabatu';
$strDeleting = '%s ezabatzen';
$strDelOld = 'Orri honek existitzen ez diren taulekiko erreferentziak dauzka. Erreferentziok ezabatu nahi al dituzu?';
$strDescending = 'Beherantz';
$strDescription = 'Deskribapena';
$strDictionary = 'hiztegia';
$strDisabled = 'Ezgaituta';
$strDisplayFeat = 'Eginbideak erakutsi';
$strDisplayOrder = 'Ordena erakutsi:';
$strDisplayPDF = 'PDF eskema erakutsi';
$strDoAQuery = '"Adibide moduan" kontsulta bat egin (komodina: "%")';
$strDocu = 'Dokumentazioa';
$strDoYouReally = 'Benetan nahi al duzu ';
$strDrop = 'Ezabatu';
$strDropUsersDb = 'Erabiltzaileen izen berdina duten datu-baseak ezabatu.';
$strDumpingData = 'Taula honen datuak irauli';
$strDumpSaved = 'Iraulketa %s fitxategian gorde da.';
$strDumpXRows = '%s errenkada irauli, erregistro honetatik hasita: # %s.';
$strDynamic = 'dinamikoa';

$strEdit = 'Editatu';
$strEditPDFPages = 'Editatu PDF Orriak';
$strEditPrivileges = 'Editatu Pribilegioak';
$strEffective = 'Eraginkorra';
$strEmpty = 'Hutsik';
$strEmptyResultSet = 'MySQL-k emaitza hutsa itzuli du. (i.e. zero errenkada).';
$strEnabled = 'Gaituta';
$strEnd = 'Amaiera';
$strEndCut = 'EBAKINAREN AMAIERA';
$strEndRaw = 'IRAULKETAREN AMAIERA';
$strEnglish = 'Ingelesa';
$strEnglishPrivileges = ' Oharra: MySQL-ren pribilegioen izenak ingelesez adierazita daude';
$strError = 'Errorea';
$strEstonian = 'Estoniera';
$strExcelEdition = 'Excel edizioa';
$strExecuteBookmarked = 'Exekutatu aurretik aukeratutako kontsulta';
$strExplain = 'SQL-a azaldu';
$strExport = 'Esportatu';
$strExtendedInserts = '"insert" hedatuak';
$strExtra = 'Extra';

$strFailedAttempts = 'Erratutako saiakerak';
$strField = 'Eremua';
$strFieldHasBeenDropped = '%s eremua ezabatu da';
$strFieldsEnclosedBy = 'Eremuak honekin mugatuta:';
$strFields = 'Eremuak';
$strFieldsEscapedBy = 'Eremuak escaped by:';
$strFieldsTerminatedBy = 'Eremuak honekin bukatuak:';
$strFileAlreadyExists = '%s fitxategia aurretik bazegoen zerbitzarian, izena aldatu edo aukeratu gainean idazteko hobespena.';
$strFileCouldNotBeRead = 'Ezinezkoa fitxategia irakurtzea';
$strFileNameTemplateRemember = 'txantiloia gogoratu';
$strFileNameTemplate = 'Txantiloi-fitxategiaren izena';
$strFixed = 'finkoa';
$strFlushPrivilegesNote = 'Oharra: phpMyAdmin-ek erabiltzaileen pribilegioak\' zuzenean MySQL-ren pribilegioen taulatik\' eskuratzen ditu. Taula hauen edukiak, tartean eskuz aldaketarik egon bada, zerbitzariak erabiltzen dituenak ez bezelakoak izan daitezke. Kasu honetan, jarraitu aurretik %spribilegioak berkargatu%s beharko zenituzke.';
$strFlushTable = 'Taularen cachea hustu ("FLUSH")';
$strFormat = 'Formatoa';
$strFormEmpty = 'Balioa bat falta da formularioan!';
$strFullText = 'Testu osoak';
$strFunction = 'Funtzioak';

$strGenBy = 'Egilea:';
$strGeneralRelationFeat = 'Erlazioen ezaaugarri orokorrak';
$strGenTime = 'Sortzeko denbora';
$strGerman = 'Alemaniera';
$strGlobal = 'orokorra';
$strGlobalPrivileges = 'Pribilegio orokorrak';
$strGlobalValue = 'Balio orokorra';
$strGo = 'Joan';
$strGrantOption = 'Baimendu';
$strGreek = 'Grekiera';
$strGzip = '"gzip-ez trinkotuta"';

$strHasBeenAltered = 'aldatua izan da.';
$strHasBeenCreated = 'sortu da.';
$strHaveToShow = 'Gutxienez bistaratzeko Zutabe bat hautatu duzu.';
$strHebrew = 'Hebreera';
$strHome = 'Hasiera-orria';
$strHomepageOfficial = 'phpMyAdmin-en webgune ofiziala';
$strHostEmpty = 'Zerbitzariaren izena hutsik dago!';
$strHost = 'Zerbitzaria';
$strHungarian = 'Hungariera';

$strId = 'ID';
$strIdxFulltext = 'Testu osoa';
$strIgnore = 'Ezikusi';
$strImportFiles = 'Fitxategiak inportatu';
$strIndexes = 'Indizeak';
$strIndexHasBeenDropped = '%s indizea ezabatu da';
$strIndex = 'Indizea';
$strIndexName = 'Indizearen izena&nbsp;:';
$strIndexType = 'Indize mota&nbsp;:';
$strInnodbStat = 'InnoDB Egoera';
$strInsecureMySQL = 'Zure konfigurazio fitxategiak MySQL-ren kontu pribilegiatuari dagozkion ezarpenak (root pasahitzik gabe) dauzka . Zure MySQL zerbitzaria lehenetsitako balio hauekin ari da lanean; atzipen-saiakera arrotzei irekita beraz. Segurtasun-zulo hau konpondu beharko zenuke.';
$strInsertAsNewRow = 'Txertatu errenkada berri batean';
$strInsertedRowId = 'Txertatutako errenkararen id-a:';
$strInsertedRows = 'Txartatutako errenkadak:';
$strInsert = 'Txertatu';
$strInternalNotNecessary = '* Barne-erlaziorik ez da beharrezkoa InnoDB-en ere existitzen denean.';
$strInternalRelations = 'Barne-erlazioak';
$strInUse = 'lanean';

$strJapanese = 'Japoniera';
$strJumpToDB = '&quot;%s&quot; datu-basera joan.';
$strJustDeleteDescr = '&quot;Ezabatutako&quot; erabiltzaileak ohizko eran zerbitzarira sartzeko aukera izaten jarraituko dute harik eta pribilegioak berkargatu arte.';
$strJustDelete = 'Pribilegioen taulatik erabiltzaileak ezabatzea besterik ez duzu.';

$strKeepPass = 'Pasahitza ez aldatu';
$strKeyname = 'Klabearen hitza';
$strKill = 'Hil';
$strKorean = 'Koreera';

$strLatexCaption = 'Taularen epigrafea';
$strLatexContent = '__TABLE__ taularen edukina';
$strLatexIncludeCaption = 'Taularen epigrafea gehitu';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ taularen egitura';
$strLengthSet = 'Luzera/Balioak*';
$strLimitNumRows = 'Errenkada kopurua orriko';
$strLinesTerminatedBy = 'Honetan bukatutako lerroak: ';
$strLinkNotFound = 'Esteka aurkitugabea';
$strLinksTo = 'Estekak honi:';
$strLithuanian = 'Lithuaniera';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Testu-fitxategiaren kokapena';
$strLogin = 'Hasi saioa';
$strLoginInformation = 'Saioa hasteko informazioa';
$strLogout = 'Saioa bukatu';
$strLogPassword = 'Pasahitza:';
$strLogServer = 'Zerbitzaria';
$strLogUsername = 'Erabiltzaile-izena:';

$strMIME_available_mime = 'MIME-mota erabilgarriak';
$strMIME_available_transform = 'Eraldaketa erabilgarriak';
$strMIME_description = 'Deskribapena';
$strMIME_MIMEtype = 'MIME-mota';
$strMIME_nodescription = 'Eraldaketa honentzako deskribapenik ez dago erabilgarri.<br />Mesedez egileari galdetu, %s-(e)k zer egiten duen.';
$strMIME_transformation = 'Nabigatzailearen eraldaketa';
$strMIME_transformation_note = 'Eraldaketen hobespen eta haien MIME-mota eraldaketen zerrendarako, egizu klik hemen %stransformation descriptions%s';
$strMIME_transformation_options = 'Eraldaketen hobespenak';
$strMIME_transformation_options_note = 'Mesedez, formato honi jarraiki, sartu itzazu eraldaketen hobespenentzako balioak: \'a\', 100, b,\'c\'...<br />Noizbait alderantzikaturiko barra ("\") edo barra arrunta ("\'") erabili beharko bazenu, beti erabili alderantzikaturiko barra (adibidez \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'Etzanez inprimaturiko MIME-motek ez dute eraldaketa-funtzio berezirik';
$strModifications = 'Aldaketak gorde dira';
$strModify = 'Aldatu';
$strModifyIndexTopic = 'Indize bat aldatu';
$strMoveTableOK = '%s taula hona mugitu da: %s.';
$strMoveTableSameNames = 'Ezin taula berberara mugitu!';
$strMoveTable = 'Taula hona mugitu (datu-basea<b>.</b>taula):';
$strMultilingual = 'eleanitza';
$strMySQLCharset = 'MySQL karaktere-multzoa';
$strMySQLSaid = 'MySQL-ek zera dio: ';
$strMySQLShowProcess = 'Erakutsi prozesuak';
$strMySQLShowStatus = 'MySQL-ren funtzionamenduari buruzko informazioa erakutsi';
$strMySQLShowVars = 'MySQL-ren sistema-aldagaiak erakutsi';

$strName = 'Izena';
$strNext = 'Hurrengoa';
$strNoDatabases = 'Datu-baserik ez';
$strNoDatabasesSelected = 'Ez dago datu-baserik aukeratuta.';
$strNoDescription = 'Deskribapenik ez';
$strNoDropDatabases = '"DROP DATABASE" sententziak ezgaituta daude.';
$strNoExplain = 'SQL-ren azalpena saltatu';
$strNo = 'Ez';
$strNoFrames = 'phpMyAdmin askoz erabilerraza da <b>frame-ak onartzen duen</b> nabigatzaile batekin.';
$strNoIndex = 'Ez dago indizerik definituta!';
$strNoIndexPartsDefined = 'Ez da indiziaren zatiak definitu!';
$strNoModification = 'Aldaketarik ez';
$strNone = 'Batez';
$strNoOptions = 'Formato honek ez du aukerarik';
$strNoPassword = 'Pasahitzik ez';
$strNoPermission = 'Web-zerbitzariak dio %s fitxategia gordetzeko baimenik ez duzula.';
$strNoPhp = 'PHP Koderik gabe';
$strNoPrivileges = 'Pribilegiorik gabe';
$strNoRights = 'Ez daukazu baimen nahikorik hemen orain egoteko!';
$strNoSpace = 'Ez dago leku-disko nahikoa %s fitxategia gordetzeko.';
$strNoTablesFound = 'Ez da taularik aurkitu datu-basean.';
$strNotNumber = 'Hau ez da zenbaki bat!';
$strNotOK = 'Okerra';
$strNotSet = '<b>%s</b> taula ez da aurkitu edo ez da definitu hemen: %s';
$strNoUsersFound = 'Ez da erabiltzailerik aurkitu.';
$strNoValidateSQL = 'SQL-ren balidapena saltatu';
$strNull = 'Nulua';
$strNumSearchResultsInTable = '%s emaitza(k) <i>%s</i> taulan';
$strNumSearchResultsTotal = '<b>Guztira:</b> <i>%s</i> emaitza(k)';
$strNumTables = 'Taulak';

$strOK = 'Zuzena';
$strOperations = 'Eragiketak';
$strOptimizeTable = 'Taula optimizatu';
$strOr = 'Edo';
$strOverhead = 'Arazteko hondakina';
$strOverwriteExisting = 'Gainean idatzi aurretik badiren fitxategiak';

$strPageNumber = 'Orri zenbakia:';
$strPaperSize = 'Paperaren tamaina';
$strPartialText = 'Testu partzialak';
$strPasswordChanged = '%s-arentzako pasahitza arrakastaz aldatua izan da.';
$strPasswordEmpty = 'Pasahitza hutsik dago!';
$strPasswordNotSame = 'Pasahitzek ez dute bat egiten!';
$strPassword = 'Pasahitza';
$strPdfDbSchema = '"%s" datu-basearen eskema- Orria %s';
$strPdfInvalidTblName = '"%s" taula ez da existitzen!';
$strPdfNoTables = 'Taularik ez';
$strPerHour = 'orduko';
$strPerMinute = 'minutuko';
$strPerSecond = 'segunduko';
$strPhoneBook = 'Telefono-agenda';
$strPHP40203 = 'PHP 4.2.3 erabiltzen ari zara, zeinek multi-byte kateekin (mbstring) arazo handia duena. Ikus PHP-ren 19404 errore-txostena. PHPren bertsio hau ez dago gomendatuta phpMyAdmin-arekin batera erabiltzeko.';
$strPhp = 'PHP kodea sortu';
$strPHPVersion = 'PHP Bertsioa';
$strPmaDocumentation = 'phpMyAdmin dokumentazioa';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktibak zure konfigurazio fitxategian zehaztuta behar du egon!';
$strPortrait = 'Bertikal';
$strPos1 = 'Hasi';
$strPrevious = 'Aurrekoa';
$strPrimaryKeyHasBeenDropped = 'Lehen mailako gakoa ezabatu da';
$strPrimaryKeyName = 'Lehen mailako gakoaren izenak behar du izan... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY"-k, <b>soilik</b>, lehen mailako gako baten izena izan <b>behar</b> du!)';
$strPrimary = 'Lehen mailakoa';
$strPrint = 'Inprimatu';
$strPrintViewFull = 'Inprimatzeko ikuspena (testu osoak)';
$strPrintView = 'Inprimatzeko ikuspegia';
$strPrivDescAllPrivileges = 'Pribilegio guztiak, GRANT(baimendu) izanezik, dauzka.';
$strPrivDescAlter = 'Uneko taulen egiturak aldatzea baimentzen du.';
$strPrivDescCreateDb = 'Datu-base eta taula berriak sortzea baimentzen du.';
$strPrivDescCreateTbl = 'Taula berriak sortzea baimentzen du.';
$strPrivDescCreateTmpTable = 'Aldi baterako taulak sortzea baimentzen du.';
$strPrivDescDelete = 'Datuak ezabatzea baimentzen du.';
$strPrivDescDropDb = 'Datu-base eta taulak ezabatzea baimentzen du.';
$strPrivDescDropTbl = 'Taulak ezabatzea baimentzen du.';
$strPrivDescExecute = 'Gordetako prozedurak exekutatzea baimentzen du; Ez du eraginik MySQL bertsio honetan.';
$strPrivDescFile = 'Datuak fitxategietatik inportatzea eta fitxategietara esportatzea baimentzen du.';
$strPrivDescGrant = 'Erabiltzaileak eta pribilegioak gehitzea baimentzen du pribilegioen taula berkargatu gabe.';
$strPrivDescIndex = 'Indizeak sortu eta ezabatzea baimentzen du.';
$strPrivDescInsert = 'Datuak txertatu eta ordezkatzea baimentzen du.';
$strPrivDescLockTables = 'Momentuko harian taulak blokeatzea baimentzen du.';
$strPrivDescMaxConnections = 'Erabiltzaileak orduko ireki dezakeen konexio berrien kopurua mugatzen du.';
$strPrivDescMaxQuestions = 'Erabiltzaileak orduko zerbitzarira bidali dezakeen kontsulta kopurua mugatzen du.';
$strPrivDescMaxUpdates = 'Erabiltzaileak orduko exekuta dezakeen taula edo datu-baserik alda dezaketen komando kopurua mugatzen du.';
$strPrivDescProcess3 = 'Beste erabiltzaileen prosezuak hiltzen baimentzen du.';
$strPrivDescProcess4 = 'Kontsulta osoak prozesuen zerrendan ikustea baimentzen du.';
$strPrivDescReferences = 'Ez du eraginik MySQL bertsio honetan.';
$strPrivDescReload = 'Zerbitzariaren hobespenak berkargatu eta beraren cacheak hustea baimentzen du.';
$strPrivDescReplClient = 'Erabiltzailea baimentzen du morroiak / nagusiak non dauden galdetzeko.';
$strPrivDescReplSlave = 'Erreplikazio morroientzat beharrezkoa.';
$strPrivDescSelect = 'Datuak irakurtzea baimentzen du.';
$strPrivDescShowDb = 'Datu-base zenrrenda osorako sarrera ahalbidetzen du.';
$strPrivDescShutdown = 'Zerbitzaria amatatzea baimentzen du.';
$strPrivDescSuper = 'Konektatzea baimentzen du, baita konexio kopuru maximora ailegatuta ere; Aldagai orokorrak zehaztu edota beste erabiltzaileen hariak hiltzeko bezalako kudeaketa-eragiketa gehienentzat beharrezkoa da.';
$strPrivDescUpdate = 'Datuak aldatzea baimentzen du.';
$strPrivDescUsage = 'Pribilegiorik ez.';
$strPrivileges = 'Probilegioak';
$strPrivilegesReloaded = 'Pribilegioak arrakastaz berkargatu dira.';
$strProcesses = 'Prozesuak';
$strProcesslist = 'Prozesuen zerrenda';
$strPutColNames = 'Eremuen izenak lehenengo errenkadan jarri';

$strQBEDel = 'Ezabatu';
$strQBEIns = 'Txertatu';
$strQBE = 'Kontsulta';
$strQueryFrame = 'Kontsulta-leihoa';
$strQueryOnDb = 'SQL-kontsulta <b>%s</b> datu-basean:';
$strQuerySQLHistory = 'SQL-historia';
$strQueryStatistics = '<b>Kontsultaren estatistikak</b>: Bere hasieratik, %s kontsulta zerbitzarira bidali dira.';
$strQueryTime = 'Kontsulta exekutatzeko denbora %01.4f seg';
$strQueryType = 'Kontsulta mota';
$strQueryWindowLock = 'Kontsulta hau ez idatzi gainean leihotik kanpo';

$strReceived = 'Jasota';
$strRecords = 'Erregistroak';
$strReferentialIntegrity = 'Erreferentzien integritatea egiaztatu:';
$strRelationalSchema = 'Erlazio-eskema';
$strRelationNotWorking = 'Estekatutako taulekin lan egiteko hobespen gehigarriak ezgaitu dira . Zergatia jakiteko egizu klik %shemen%s.';
$strRelations = 'Erlazioak';
$strRelationView = 'Erlazioen ikuspegia';
$strReloadingThePrivileges = 'Pribilegioak berkargatzen';
$strRemoveSelectedUsers = 'Hautatutako erabiltzaileak baztertu';
$strRenameTableOK = '%s taula %s-(e)ra berrizendatua izan da';
$strRenameTable = 'Taula berrizendatu izen honetara: ';
$strRepairTable = 'Taula konpondu';
$strReplaceNULLBy = 'NULL ordezkatu honen ordez:';
$strReplaceTable = 'Taularen datuak fitxategiarekin ordezkatu ';
$strReset = 'Reset egin';
$strResourceLimits = 'Baliabideen mugak';
$strReType = 'Berridatzi';
$strRevokeAndDeleteDescr = 'Erabiltzaileak USAGE pribilegioa izaten jarraituko dute harik eta pribilegioak berkargatu arte.';
$strRevokeAndDelete = 'Erabiltzaileen pribilegio aktibo guztiak ezeztatu eta ondoren denak ezabatu.';
$strRevoke = 'Ezeztatu';
$strRevokeMessage = 'Zuk %s-(r)en pribilegioak ezeztatu dituzu';
$strRowLength = 'Errenkadaren luzera';
$strRows = 'Errenkadak';
$strRowsFrom = 'errenkada(k) # erregistrotik hasita';
$strRowSize = ' Errenkadaren tamaina ';
$strRowsModeFlippedHorizontal = 'horizontal (goiburukoak biratuta)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = '%s moduan eta goiburukoak errepikatu %s zeldaka';
$strRowsModeVertical = 'bertikal';
$strRowsStatistic = 'Errenkadaren estatistikak';
$strRunning = 'hemen ibiltzen: %s';
$strRunQuery = 'Kontsulta bidali';
$strRunSQLQuery = 'SQL kontsulta(k) exekutatu %s datu-basean';
$strRussian = 'Errusiera';

$strSave = 'Gorde';
$strSaveOnServer = 'Zerbitzariren %s direktorioan gorde';
$strScaleFactorSmall = 'Eskalaren faktorea txikiegia da eskema orri bakar batean azaltzeko';
$strSearch = 'Bilatu';
$strSearchFormTitle = 'Datu-basean bilatu';
$strSearchInTables = 'Taul(ar)en barnean:';
$strSearchNeedle = 'Bilaketa egiteko hitza(k) edo balioa(k) (komodina: "%"):';
$strSearchOption1 = 'hitz hauetariko bat gutxienez';
$strSearchOption2 = 'hitz guztiak';
$strSearchOption3 = 'esaldi zehatza';
$strSearchOption4 = 'adierazpen erregular moduan';
$strSearchResultsFor = 'Bilaketaren emaitzak: "<i>%s</i>" %s:';
$strSearchType = 'Aurkitu:';
$strSecretRequired = 'Konfigurazio-fitxategiak orain ezkutuko pasahitz bat behar du (blowfish_secret).';
$strSelectADb = 'Datu-base bat hautatu mesedez';
$strSelectAll = 'Dena hautatu';
$strSelectFields = 'Eremuak hautatu (bat gutxienez):';
$strSelectNumRows = 'kontsultan';
$strSelectTables = 'Taulak hautatu';
$strSend = 'Bidali';
$strSent = 'Bidalita';
$strServerChoice = 'Zerbitzariaren hautaketa';
$strServerStatusUptime = 'MySQL zerbitzari hau martxan egon da %s. %s abiaratu zelarik.';
$strServerTabVariables = 'Aldagaiak';
$strServerTrafficNotes = '<b>Zerbitzariaren trafikoa</b>: Taula hauek erakusten dituzte MySQL zerbitzari honen sare-trafikoaren estatistikak bere hasieratzetik.';
$strServerVars = 'Zerbitzariaren aldagai eta ezarpenak';
$strServerVersion = 'Zerbitzariaren bertsioa';
$strServer = 'Zerbitzaria';
$strSessionValue = 'Saioaren balioa';
$strSetEnumVal = 'Eremu-mota "enum" edo "set" bada, mesedez idatzi balioak formato hau erabiliz: \'a\',\'b\',\'c\'...<br />Noizbait balio horien artean alderantzikaturiko barra ("\") edo barra arrunta ("\'") erabili beharko bazenu, beti erabili alderantzikaturiko barra (adibidez \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Dena erakutsi';
$strShowColor = 'Kolorea erakutsi';
$strShowDatadictAs = 'Datuen hiztegiaren formateoa';
$strShow = 'Erakutsi';
$strShowFullQueries = 'Kontsulta osoak erakutsi';
$strShowGrid = 'Sareta erakutsi';
$strShowingRecords = 'Errenkadak erakusten';
$strShowPHPInfo = 'PHP informazioa erakutsi';
$strShowTableDimension = 'Taulen dimentsioak erakutsi';
$strShowTables = 'Taulak erakutsi';
$strShowThisQuery = ' Kontsulta hau hemen berriz erakutsi';
$strSimplifiedChinese = 'Txinera erraztua';
$strSingly = '(soilik)';
$strSize = 'Tamaina';
$strSortByKey = 'Gakoaren arabera ordenatu';
$strSort = 'Ordenatu';
$strSpaceUsage = 'Erabilitako lekua';
$strSplitWordsWithSpace = 'Hitzak "zuriune" karakterrarekin bereiztuta daude (" ").';
$strSQLExportType = 'Esportazio mota';
$strSQLParserBugMessage = 'Baliteke zuk SQL analizatzailean errore bat topatu izana. Mesedez arretaz aztertu zure kontsulta, eta egiaztatu komatxoak zuzen erabiliak eta bikoitiak direla. Akatsaren bestelako jatorri bat izan liteke zu datu binariodun fitxategi bat igotzen saiatzea mugatutako testu-eremutik at. Zure kontsulta MySQL-ren komando-interfazean ere exekutatzen saia zenezake. MySql zeritzariak itzulitako erroreak, baldin badago, arazoa diagnostikatzen lagundu zaitzake. Arazoak bere horretan badirau edota komando-interfazeak arrakasta duen lekuan analizatzaileak huts egiten badu, mesedez murriztu ezazu zure SQL kontsulta arazoa sortzen duen zatira, eta bidal ezazu errore-txosten bat behean seinalaturiko MOZKETA atalean datu-katea paratuz:';
$strSQLParserUserError = 'Ematen du zure SQL kontsultan errore bat dagoela. MySQL zerbitzariak itzulitako erroreak, baldin badago, arazoa diagnostikatzen lagundu zaitzake';
$strSQLQuery = 'SQL kontsulta';
$strSQLResult = 'SQL emaitza';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Indentifikatzaile okerra';
$strSQPBugUnclosedQuote = 'Itxi gabeko komatxoak';
$strSQPBugUnknownPunctuation = 'Puntuazio ikurra ezezaguna';
$strStatCheckTime = 'Azken egiaztapena';
$strStatCreateTime = 'Sortzea';
$strStatement = 'Sententziak';
$strStatUpdateTime = 'Azken eguneraketa';
$strStatus = 'Egoera';
$strStrucCSV = 'CSV datuak';
$strStrucData = 'Egitura eta datuak';
$strStrucExcelCSV = 'MS Excel datuentzako CSV';
$strStrucOnly = 'Egitura soilik';
$strStructPropose = 'Taularen egituraren proposamena ';
$strStructure = 'Egitura';
$strSubmit = 'Bidali';
$strSuccess = 'Zure SQL-kontsula arrakastaz burutu da';
$strSum = 'Gehiketa';
$strSwedish = 'Suediera';
$strSwitchToTable = 'Kopiatutako taulara aldatu';

$strTableComments = 'Taularen iruzkinak';
$strTableEmpty = 'Taularen izena hutsik dago!';
$strTableHasBeenDropped = '%s taula ezabatu egin da';
$strTableHasBeenEmptied = '%s taula hustu egin da';
$strTableHasBeenFlushed = '%s taularen cachea hustu egin da';
$strTableMaintenance = 'Taularen mantenua';
$strTableOfContents = 'Edukinen taula';
$strTableOptions = 'Taularen hobespenak';
$strTables = '%s taula(k)';
$strTableStructure = 'Taularen egitura taula honentzat: ';
$strTable = 'Taula';
$strTblPrivileges = 'Taularen pribilegio espezifikoak';
$strTextAreaLength = ' Bere luzeragatik,<br /> eremu hau ez da editagarria ';
$strThai = 'Thailandiarra';
$strThisHost = 'Host hau';
$strThreadSuccessfullyKilled = '%s haria arrakastaz ezabatu da.';
$strTime = 'Denbora';
$strToggleScratchboard = 'Aldatu "scratchboard"-a';
$strTotal = 'guztira';
$strTotalUC = 'Gutira';
$strTraditionalChinese = 'Txinera tradizionala';
$strTraffic = 'Trafikoa';
$strTransformation_image_jpeg__inline = 'Miniatura klikagarri bat erakusten du; aukerak: luzera,altuera pixeletan (jatorrizko erlazioa mantentzen du)';
$strTransformation_image_jpeg__link = 'Irudi honi zuzendutako esketa bat erakusten du(blob deskarga zuzena, i.e.).';
$strTransformation_image_png__inline = 'Ikusi image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX SOILIK: Kanpoko aplikazio bat abiaratzen du eta datu-eremua sarrera estandarraren bidez osatzen du. Aplikazioaren irteera estandarra itzultzen du. Lehenetsitakoa Tidy da, HTML kodea txukun pantailaratzeko. Segurtasun arrazoiengatik, libraries/transformations/text_plain__external.inc.php fitxategia eskuz editatu beharko duzu eta hor zehaztu zein tresna exekutatzea baimentzen duzun. Lehenengo aukera erabili nahi duzun programaren zenbakia da eta bigarren aukera programarentzako parametroak dira . Hirugarren parametroa, 1 izanez gero irteera bihurtuko du  htmlspecialchars() funtzioa erabiliz (Lehenetsia: 1). Laugarren parametroa, 1 izanez gero NOWRAP bat ezarriko dio edukin-gelaxkari, beraz irteera osoa berformateatu barik erakutsiko da(Lehenetsi 1)';
$strTransformation_text_plain__formatted = 'Eremuaren jatorrizko formateoa mantentzen du. Aldaketarik egin gabe.';
$strTransformation_text_plain__imagelink = 'Irudi eta esteka bana erakusten ditu, eremuak fitxategiaren izena dauka; lehenengo aukera "http://domain.com/" moduko aurrizki bat da, bigarren aukera pixeletan neurtutako zabalera da, hirugarrena altuera da.';
$strTransformation_text_plain__link = 'Esteka bat erakusten du, eremuak fitxategiaren izena dauka; lehenengo aukera "http://domain.com/" moduko aurrizki bat da , bigarren aukera estekaren izenburua da.';
$strTransformation_text_plain__substr = 'Soilik katearen zati bat erakutsi. Lehenengo aukerak zehazten du non hasten den zure testuaren desplazamendua (lehenetsi 0). Bigarren aukerak itzultzeko karaktere kopurua erakusten du. Hutsik badago, gainerako testu guztia bueltatuko du. Hirugarren aukerak zehazten du zeintzuk karaktere txertatuko diren irteerara azpikate bat itzultzen denean (Lehenetsia: ...) .';
$strTruncateQueries = 'Erakutsitako kontultak moztu';
$strTurkish = 'Turkiera';
$strType = 'Mota';

$strUkrainian = 'Ukraniera';
$strUncheckAll = 'Desautatu dena';
$strUnicode = 'Unicode';
$strUnique = 'Bakarra';
$strUnknown = 'ezezaguna';
$strUnselectAll = 'Desautatu dena';
$strUpdatePrivMessage = '%s-aren pribilegioak eguneratu dituzu.';
$strUpdateProfileMessage = 'Profila eguneratua izan da.';
$strUpdateQuery = 'Kontsulta eguneratu';
$strUpdComTab = 'Mesedez, Dokumentazioa begiratu zure zutabeen iruzkinen Taula nola eguneratzeko';
$strUpgrade = '%s %s bertsiora edo handiago batera eguneratu beharko zenuke.';
$strUsage = 'Erabilpena';
$strUseBackquotes = '"Backquotes" erabili taula eta eremuen izenekin ';
$strUseHostTable = 'Host taula erabili';
$strUserAlreadyExists = '%s erabiltzailea badago lehendik ere!';
$strUserEmpty = 'Erabiltzailearen izena hutsik dago!';
$strUser = 'Erabiltzailea';
$strUserName = 'Erabiltzaile-izena';
$strUserNotFound = 'Hautatutako erabiltzailea ez da pribilegioen taulan aurkitu.';
$strUserOverview = 'Erabiltzailearen info orokorra';
$strUsersDeleted = 'Hautatutako erabiltzaileak arrakastaz ezabatu dira.';
$strUsersHavingAccessToDb = '&quot;%s&quot;-(e)ra sarbidea duten erabiltzaileak';
$strUseTables = 'Taulak erabili';
$strUseTextField = 'Testu-eremua erabili';
$strUseThisValue = 'Erabili balio hau';

$strValidateSQL = 'SQL balidatu';
$strValidatorError = 'Ezin izan da SQl balidatzailea hasieratu. Mesedez egiazta ezazu ea beharrezkoak diren php luzapenak instalatu dituzun %sdokumentazioan%s azaltzen den moduan.';
$strValue = 'balioa';
$strVar = 'Aldagaia';
$strViewDumpDatabases = 'Ikusi datu-baseen iraulketa (eskema)';
$strViewDumpDB = 'Ikusi datu-basearen iraulketa (eskema)';
$strViewDump = 'Ikusi taularen iraulketa (eskema)';

$strWebServerUploadDirectoryError = 'Igoerentzat ezarri duzun direktorioa ez dago eskuragarri';
$strWebServerUploadDirectory = 'Fitxategiak igotzeko web-zerbitzariaren direktorioa';
$strWelcome = 'Ongietorriak %s(e)ra';
$strWestEuropean = 'Mendebaldeko europearra';
$strWildcard = 'komodina';
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';
$strWithChecked = 'Ikurdunak:';
$strWrongUser = 'Erabiltzaile-izena/pasahitza okerra. Atzipena ukatuta.';

$strXML = 'XML';

$strYes = 'Bai';

$strZeroRemovesTheLimit = 'Oharra: Aukera hauek zerora ezarriz gero muga kentzen da.';
$strZip = '"zipatuta"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
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
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
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
$strGeorgian = 'Georgian';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
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

$strLandscape = 'Horizontal';  //to translate
$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexContinuedCaption = 'Continued table caption';  //to translate
$strLatexContinued = '(continued)';  //to translate
$strLatexLabel = 'Label key';  //to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
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
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPolish = 'Polish';  //to translate
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
$strRefresh = 'Refresh';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRomanian = 'Romanian';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strServerStatus = 'Runtime Information';  //to translate
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
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
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
