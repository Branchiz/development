<?php
/* $Id: tatarish-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bayt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ykş', 'Dşm', 'Sşm', 'Çrş', 'Pnc', 'Cmğ', 'Şmb');
$month = array('Ğın', 'Feb', 'Mar', 'Äpr', 'May', 'Yün', 'Yül', 'Aug', 'Sen', 'Ökt', 'Nöy', 'Dek');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y.%m.%d, %H:%M';
$timespanfmt = '%s kön, %s säğät, %s minut ta %s sekund';

$strAbortedClients = 'Özderelde';
$strAccessDeniedExplanation = 'phpMyAdmin bu MySQL servergä totaşılıp qarağaç, server bu totaşıluın özep quydı. Xäzer, "config.inc.php" biremendä kertelgän sanaqisem/ireşisem/sersüzlär tikäserep, alarnı MySQL idäräçese birgän mäğlümät belän çağıştırıp qarísı qala.';
$strAccessDenied = 'İreşep Bulmadı';
$strAction = 'Eş';
$strAddAutoIncrement = '"AUTO_INCREMENT" bäyäsen östise';
$strAddClause = '%s östäw';
$strAddConstraints = 'Çikläwlär östise';
$strAddDeleteColumn = 'Add/Delete Field Columns';
$strAddDeleteRow = 'Add/Delete Criteria Row';
$strAddFields = '%s alan östäw';
$strAddHeaderComment = 'Başlıqqa östämä açıqlama östäw (yullar \\n belän ayırıla)';
$strAddIntoComments = 'Açıqlama eçenä östise';
$strAddNewField = 'Yaña alan östäw';
$strAddPrivilegesOnDb = 'Kiläse biremlek öçen xoquqlar östäw';
$strAddPrivilegesOnTbl = 'Kiläse tüşämä öçen xoquqlar östäw';
$strAddSearchConditions = 'Ezläw şartın östäw ("WHERE" eçtälege):';
$strAddToIndex = 'Açqıçqa tağın &nbsp;%s&nbsp;alan östise';
$strAddUserMessage = 'Yana qullanuçı östälände.';
$strAddUser = 'Yaña qullanuçı östäw';
$strAdministration = 'İdärä';
$strAffectedRows = 'Eşkärtelgän yazma:';
$strAfterInsertBack = 'Aldağı bitkä qaytu';
$strAfterInsertNewInsert = 'Tağın ber yazma östäw';
$strAfterInsertNext = 'Kiläse yazma üzgärtü';
$strAfterInsertSame = 'Bu bitkä kire qaytası';
$strAfter = '%s artınnan';
$strAll = 'Barısı';
$strAllTableSameWidth = 'display all Tables with same width?';
$strAlterOrderBy = 'Tüşämä eçtälegen bolay tezäse';
$strAnalyzeTable = 'Tüşämä centekläw';
$strAndThen = ', şunnan soñ';
$strAnd = 'Wä';
$strAnIndex = '"%s" öçen ber açqıç qorıldı';
$strAnyHost = 'Bar bulğan host';
$strAny = 'Törle';
$strAnyUser = 'Törle qullanuçı';
$strApproximateCount = 'Törle buluı bar. YBS 3.11 qarísı';
$strAPrimaryKey = '"%s" öçen töp açqıç qorıldı';
$strArabic = 'Çäräpçä';
$strArmenian = 'Ärmänçä';
$strAscending = 'Artıp';
$strAtBeginningOfTable = 'Tüşämä Başına';
$strAtEndOfTable = 'Tüşämä azağına';
$strAttr = 'Üzençälek';
$strAutomaticLayout = 'Zihenle urnaştıru';

$strBack = 'Kire';
$strBaltic = 'Baltiq';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Binar - üzgärtmäslek';
$strBinaryLog = 'Binar köndälek';
$strBinLogEventType = 'Buldıq töre';
$strBinLogInfo = 'Beleşmä';
$strBinLogName = 'Köndälek adı';
$strBinLogOriginalPosition = 'Tärtip buyınça urın';
$strBinLogPosition = 'Urın';
$strBinLogServerId = 'Server ID\'e';
$strBookmarkAllUsers = 'Bu tamğanı bar qullanuçığa da ireşüle itäse';
$strBookmarkCreated = '%s digän bitbilge yaratıldı';
$strBookmarkDeleted = 'Tamğa beterelde.';
$strBookmarkLabel = 'Yarlıq';
$strBookmarkQuery = 'Tamğalanğan SQL-soraw';
$strBookmarkReplace = 'Şulay uq atalğan bitbilgelärne almaştırası';
$strBookmarkThis = 'Bu SQL-sorawğa tamğa quy';
$strBookmarkView = 'Kürep kenä';
$strBrowseForeignValues = 'Browse foreign values';
$strBrowse = 'Küzätü';
$strBufferPoolActivity = 'Bufer Pul Terelege';
$strBufferPool = 'Bufer Pulı';
$strBufferPoolUsage = 'Bufer Pul Totılğanlığı';
$strBufferReadMissesInPercent = 'Uñışsız uqu, % öçen';
$strBufferReadMisses = 'Uñışsız uqu';
$strBufferWriteWaitsInPercent = 'Yazğanda kötterü, % öçen';
$strBufferWriteWaits = 'Yazğanda kötterü';
$strBulgarian = 'Balgarça';
$strBusyPages = 'Eştä bit';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.';
$strBzip = '"bziple"';

$strCalendar = 'Täqwim';
$strCanNotLoadImportPlugins = 'Totaşmalar yökläp bulmadı, quyılışın tikşerep alası!';
$strCannotLogin = 'MySQL servergä totaşılıp bulmadı';
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';
$strCantLoad = '"%s" yöklämäsen cibärep bulmadı,<br />PHP Caylawın tikşerçe';
$strCantRenameIdxToPrimary = 'Açqıçnı "PRIMARY" itep atap bulmí!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Qabatlanu sanı';
$strCaseInsensitive = 'keşe/olı sizmiçä';
$strCaseSensitive = 'keşe/olı sizep';
$strCentralEuropean = 'Üzäk Awrupı';
$strChangeCopyModeCopy = '... keep the old one.';
$strChangeCopyMode = 'Create a new user with the same privileges and ...';
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';
$strChangeCopyUser = 'Change Login Information / Copy User';
$strChangeDisplay = 'Kürsätäse Alan saylaw';
$strChangePassword = 'Sersüz üzgärtü';
$strChange = 'Üzgärt';
$strCharset = 'Bilgelämä';
$strCharsetOfFile = 'Şul biremneñ bilgelämäse:';
$strCharsetsAndCollations = 'Bilgelämä &amp; Tezü cayı';
$strCharsets = 'Bilgelämä';
$strCheckAll = 'Saylap Beter';
$strCheckOverhead = 'Check overheaded';
$strCheckPrivsLong = '"%s" biremlege öçen xoquqlar tikşerü.';
$strCheckPrivs = 'Xoquqlar tikşerü';
$strCheckTable = 'Tüşämä tikşerü';
$strChoosePage = 'Tözätü öçen berär bit sayla';
$strColComFeat = 'Buy Açıqlamasın Kürsätäse';
$strCollation = 'Tezü cayı';
$strColumnNames = 'Alan iseme';
$strColumnPrivileges = 'Berär bağana öçen xoquqlar';
$strCommand = 'Ämer';
$strComments = 'Açıqlama';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 öçen yaraqlı';
$strCompleteInserts = 'Tulayım östise';
$strCompression = 'Qısu';
$strConfigDefaultFileError = 'Töp köyläneşen yökläp bulmadı: "%1$s"';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you receive. In most cases a quote or a semicolon is missing somewhere.<br />If you receive a blank page, everything is fine.';
$strConfigureTableCoord = 'Please configure the coordinates for table %s';
$strConnectionError = 'Totaşa almím: yaraqsız köyläwlär.';
$strConnections = 'Totaşular';
$strConstraintsForDumped = 'Constraints for dumped tables';
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyDatabaseOK = 'Database %s has been copied to %s';
$strCopy = 'Kübäyt';
$strCopyTable = 'Boña kübäyt (biremlek<b>.</b>tüşämä):';
$strCopyTableOK = 'Table %s has been copied to %s.';
$strCopyTableSameNames = 'Can\'t copy table to same one!';
$strCouldNotKill = 'phpMyAdmin %s ceben üterä almadı. Bälki ul yabılğan bulğan da inde.';
$strCreateDatabaseBeforeCopying = 'Kübäytü aldınnan CREATE DATABASE östise';
$strCreateIndex = '%s alannan tezeş yaratu';
$strCreateIndexTopic = 'Yaña tezeş yaratu';
$strCreateNewDatabase = 'Yaña biremlek yaratu';
$strCreateNewTable = '%s biremlegendä yaña tüşämä yaratu';
$strCreatePage = 'Yaña Bit yaratu';
$strCreatePdfFeat = 'PDF yaratu';
$strCreateUserDatabaseNone = 'Yuq';
$strCreateUserDatabase = 'Qullanuçı biremlege';
$strCreate = 'Yarat';
$strCreationDates = 'Yaratılu/Üzgärelü/Tikşerü çaqları';
$strCriteria = 'Şart';
$strCroatian = 'Kroatça';
$strCSV = 'CSV';
$strCyrillic = 'Urısälif';
$strCzech = 'Çexçä';
$strCzechSlovak = 'Çex-Slovak';

$strDanish = 'Dança';
$strDatabase = 'Biremlek';
$strDatabaseEmpty = 'Biremlek iseme buş!';
$strDatabaseExportOptions = 'Biremlek saqlaw köyläneşe';
$strDatabaseHasBeenDropped = '%s biremlege beterelde.';
$strDatabases = 'Biremleklär';
$strDatabasesDropped = '"%s" biremlegen beterü uñışlı uzdı.';
$strDatabasesStats = 'Biremlek nöfüsläre';
$strDatabasesStatsDisable = 'Nöfüse Sünderü';
$strDatabasesStatsEnable = 'Nöfüsne Cibärü';
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';
$strDataDict = 'Eçtälek Süzlege';
$strData = 'Eçtälek';
$strDataOnly = 'Eçtälegen genä';
$strDataPages = 'Eçtälekle bitlär';
$strDBComment = 'Biremlek açıqlaması:';
$strDBCopy = 'Biremlekne boña kübäyt';
$strDbPrivileges = 'Berär biremlekkä qağılışlı xoquqlar';
$strDBRename = 'Biremlekne bolay atap quy';
$strDbSpecific = 'berär biremlekkä qağılışlı';
$strDefaultEngine = 'Bu MySQL-serverdä %s digän saqlaw ısulı töp bularaq saylanğan.';
$strDefault = 'Töpcay';
$strDefaultValueHelp = 'Töpcay bäyäsen kertkändä, kireawışlar qullanmasqa, cäyä eçenä da salmasqa. Bolayraq kertäse: a';
$strDefragment = 'Tüşämä kisäklären berläşterü';
$strDelayedInserts = 'Kötterep östise';
$strDeleteAndFlush = 'Betergäç, xoquqlarnı yañadan yöklise.';
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.';
$strDeleted = 'Bu yazma salınğan buldı';
$strDeletedRows = 'Salınğan yul:';
$strDeleteNoUsersSelected = 'Beteräse qullanuçılar saylanmağan!';
$strDelete = 'Sal';
$strDeleting = '"%s" Beterü';
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';
$strDescending = 'Kimep';
$strDescription = 'Açıqlama';
$strDictionary = 'süzlek';
$strDirtyPages = 'Üzgärtelgän bit';
$strDisabled = 'Sünek';
$strDisableForeignChecks = 'Yat tezeş tikşerüen sünderep';
$strDisplayFeat = 'Mömkinleklär Kürsätü';
$strDisplayOrder = 'Kürsätü tärtibe:';
$strDisplayPDF = 'PDF schema kürsätü';
$strDoAQuery = '"Ürnäk buyınça soraw" eşkärtü (almaştırma: "%")';
$strDocu = 'Qullanma';
$strDoYouReally = 'Sin çınlap ta bonı eşlärgä teliseñme: ';
$strDrop = 'Beter';
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';
$strDropUsersDb = 'Bu qullanuçılar kebek atalğan biremleklärne beteräse.';
$strDumpingData = 'Tüşämä eçtälegen çığaru';
$strDumpSaved = 'Eçtälege "%s" biremenä saqlandı.';
$strDumpXRows = 'Eçtälek: %s kerem, #%s keremnän başlap.';
$strDynamic = 'üzgärüçän';

$strEditPDFPages = 'PDF-Bitlär Üzgärtü';
$strEditPrivileges = 'Xoquqlar Üzgärtü';
$strEdit = 'Tözätü';
$strEffective = 'Uñışlı';
$strEmpty = 'Buşat';
$strEmptyResultSet = 'MySQL sorawğa buş cawap, yäğni nül kertem qaytarttı.';
$strEnabled = 'Açıq';
$strEncloseInTransaction = 'Transaksi eçendä ütkärep';
$strEnd = 'Azaq';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEngineAvailable = 'Bu MySQL serverdä %s bar.';
$strEngineDisabled = 'Bu MySQL serverdä %s sünderelgän bulğan.';
$strEngines = 'Engine';
$strEngineUnsupported = 'Bu MySQL server %s saqlaw enginen totmí.';
$strEnglishPrivileges = ' Beläse: MySQL\'da xoquq adı İnglizçä kertelä!';
$strEnglish = 'İnglizçä';
$strErrorInZipFile = 'ZIP-tuplama eçendä xata:';
$strErrorRenamingTable = '%1$s atlı tüşämä adın %2$s itep üzgärtep bulmadı';
$strError = 'Xata';
$strEscapeWildcards = '_ belän % bilgelären şul kileş kenä qullanu öçen \ belän ütkärergä kiräk';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonça';
$strExcelEdition = 'Excel söreme';
$strExecuteBookmarked = 'Tamğalanğan soraw cibärü';
$strExplain = 'SQL Centekläw';
$strExport = 'Export';
$strExtendedInserts = 'Kiñäytep östise';
$strExtra = 'Östämä';

$strFailedAttempts = 'Failed attempts';
$strField = 'Alan';
$strFieldHasBeenDropped = '%s isemle alan beterelde';
$strFields = 'Alan';
$strFieldsEnclosedBy = 'Alan yaptıruçı bilge';
$strFieldsEscapedBy = 'Alan uzdıru bilgese';
$strFieldsTerminatedBy = 'Alan arasında bilge';
$strFileAlreadyExists = 'Serverdä %s digän birem bar inde, adın almaştırası, yä inde östän yazu tamğasın açası qala.';
$strFileCouldNotBeRead = 'Birem uqıp bulmadı';
$strFileNameTemplate = 'Birem adınıñ tözeleşe';
$strFileNameTemplateDescriptionDatabase = 'biremlek adı';
$strFileNameTemplateDescriptionServer = 'server adı';
$strFileNameTemplateDescriptionTable = 'tüşämä adı';
$strFileNameTemplateRemember = 'tözeleşen yatla';
$strFileToImport = 'Yöklise birem';
$strFixed = 'berketelgän';
$strFlushPrivilegesNote = 'Beläse: MySQL-serverneñ eçke tüşämä eçennän alınğan xoquqlar bu. Server qullana torğan xoquqlar qul aşa üzgärtelgän bulsa, bu tüşämä eçtälege alardan ayırıla ala. Andí çaqlarda, dawam itü aldınnan, %sxoquqlarnı qabat yökläp alası%s.';
$strFlushQueryCache = 'Soraw alxäteren awdar';
$strFlushTables = 'Tüşämälärne yabıp beteräse';
$strFlushTable = 'Tüşäwne awdar ("FLUSH")';
$strFormat = 'Tözeleş';
$strFormEmpty = 'Bu formıda bäyä kertelmi qalğan!';
$strFreePages = 'Buş bit sanı';
$strFullText = 'Tulı Mätennär';
$strFunction = 'Funksí';

$strGenBy = 'Ürçätkeç:';
$strGeneralRelationFeat = 'Bäyläneşlär buyınça töp mömkinleklär';
$strGeneratePassword = 'Sersüz Ürçetü';
$strGenerate = 'Ürçet';
$strGenTime = 'Ürçäw Zamanı';
$strGeorgian = 'Görceçä';
$strGerman = 'Almança';
$strGlobal = 'ğömümi';
$strGlobalPrivileges = 'Töp xoquq';
$strGlobalValue = 'Töp bäyä';
$strGo = 'Äydä';
$strGrantOption = 'Xoquq';
$strGreek = 'Yunança';
$strGzip = '"gziple"';

$strHandler = 'Eşkärtkeç';
$strHasBeenAltered = 'üzgärtelde.';
$strHasBeenCreated = 'yaratıldı.';
$strHaveToShow = 'You have to choose at least one Column to display';
$strHebrew = 'Yähüdçä';
$strHome = 'Başbit';
$strHomepageOfficial = 'phpMyAdmin säxifäse';
$strHostEmpty = 'Host adı buş!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macarça';

$strIcelandic = 'İclandça';
$strId = 'ID';
$strIdxFulltext = 'Tulımäten';
$strIgnoreDuplicates = 'Qabatlanğan yazmalarnı ütäse';
$strIgnoreInserts = '"IGNORE" belän kertäse';
$strIgnore = 'Qarama';
$strImportFiles = 'Biremdän alu';
$strImportFormat = 'Yöklänğan birem tözeleşe';
$strImport = 'Yökläw';
$strIndexes = 'Tezeşlär';
$strIndexHasBeenDropped = '"%s" digän tezeş salındı';
$strIndexName = 'Tezeş adı&nbsp;:';
$strIndex = 'Tezeş';
$strIndexType = 'Tezeş töre&nbsp;:';
$strIndexWarningTable = '`%s` atlı tüşäw tezeşläre belän nidider tiskärlek bar';
$strInnoDBAutoextendIncrement = 'Biremlektä arttıru adımı';
$strInnoDBAutoextendIncrementDesc = 'Tüşämä alanı tulğaç, anı arttıruçı adımı bu.';
$strInnoDBBufferPoolSize = 'Bufer pul olılığı';
$strInnoDBBufferPoolSizeDesc = 'InnoDB üz tüşämä öçen alxäter belän açqıçlar urnaştırğanda bu olılıqta bulğan bufer qullana.';
$strInnoDBDataFilePath = 'Eçtälek bireme';
$strInnoDBDataHomeDir = 'Biremnär törgäge';
$strInnoDBDataHomeDirDesc = 'InnoDB biremnäre öçen törgäk yulınıñ töp öleşe bu.';
$strInnoDBPages = 'bit';
$strInnodbStat = 'InnoDB Torışı';
$strInsecureMySQL = 'MySQL-servergä ireşü öçen qullanası xisap bularaq, caylaw biremendä töp xisap saylanğan (sersüzsez "root"). MySQL-server şul töp xisap belän açılğan da, andıy xällär iminlekneñ citdi tişege tip sanala.';
$strInsertAsNewRow = 'Yaña yazma kert tä';
$strInsertedRowId = 'Kertelgän yazmanıñ id:';
$strInsertedRows = 'Kertelgän yazma:';
$strInsert = 'Östäw';
$strInternalNotNecessary = '* InnoDB eçendä bulğan eçke bäyläneşlär qabatlarğa kiräk tügel.';
$strInternalRelations = 'Eçke bäyläneş';
$strInUse = 'totıla';
$strInvalidCSVParameter = 'CSV yökläweneñ yaraqsız köyläneşe: %s';
$strInvalidDatabase = 'Yaraqsız biremlek';
$strInvalidFieldAddCount = 'Kimendä berär alan kertäse.';
$strInvalidFieldCount = 'Töşämä alannarı sanı kimendä 1 bulırğa teş.';
$strInvalidRowNumber = '%d digäne yazma sanı öçen kileşmi.';
$strInvalidServerIndex = 'Serverdäge "%s" digän tezeleş yaraqsız';
$strInvalidTableName = 'Tüşämä adı yaraqsız';

$strJapanese = 'Japança';
$strJoins = 'Bäylär';
$strJumpToDB = '&quot;%s&quot; biremlegenä küç.';
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.';
$strJustDelete = 'Xoquqlar tüşämäsennän genä beteräse.';

$strKeepPass = 'Sersüzen üzgärtäse tügel';
$strKeyCache = 'Tezeş alxätere';
$strKeyname = 'Tezeş adı';
$strKill = 'Üter';
$strKorean = 'Koreyçä';

$strLandscape = 'Yatqırıp';
$strLanguageUnknown = 'Belgesez tel: %1$s.';
$strLatchedPages = 'Berketelgän bit';
$strLatexCaption = 'Tüşämä başlığı';
$strLatexContent = '__TABLE__ atlı tüşämä eçtälege';
$strLatexContinuedCaption = 'Tüşämä dawamınıñ başlığı';
$strLatexContinued = '(dawamlı)';
$strLatexIncludeCaption = 'Tüşämä başlığın östise';
$strLatexLabel = 'Açqıç yazması';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ atlı tüşämä tözeleşe';
$strLatvian = 'Latça';
$strLDI = 'LOAD DATA qullanıp CSV';
$strLDILocal = 'LOCAL digän süz qullanıp';
$strLengthSet = 'Ozınlıq/Bäyä*';
$strLimitNumRows = 'Bit sayın Kertem sanı';
$strLinesTerminatedBy = 'Yul ara bilgese';
$strLinkNotFound = 'Bäyläneş tabılmadı';
$strLinksTo = 'Bonı belän bäyläneş:';
$strLithuanian = 'Litçä';
$strLocalhost = 'Cirle';
$strLocationTextfile = 'SQL-ämerlege belän birem yökläw';
$strLoginInformation = 'Kereş Turında';
$strLogin = 'Kereş';
$strLogout = 'Çığış';
$strLogPassword = 'Sersüz:';
$strLogServer = 'Server';
$strLogUsername = 'Atama:';
$strLongOperation = 'Bu eş ozaqqa suzıla ala. Barıber eşliseme?';

$strMaximalQueryLength = 'Kilgän soraw külämeneñ öske küläme';
$strMaximumSize = 'Max: %s%s';
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';
$strMIME_available_mime = 'Barlıq MIME-törlär';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Açıqlama';
$strMIME_MIMEtype = 'MIME-törläre';
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslash it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformation options';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strModifications = 'Üzgärtülär saqlandı';
$strModifyIndexTopic = 'Açqıç üzgärtü';
$strModify = 'Üzgärt';
$strMoveTable = 'Boña küçerü (biremlek<b>.</b>tüşämä):';
$strMoveTableOK = '"%s" atlı tüşämä "%s" kebek ataldı.';
$strMoveTableSameNames = 'Ber ük at belän tüşämä küçerep bulmí!';
$strMultilingual = 'küptelle';
$strMyISAMDataPointerSize = 'Data pointer olılığı';
$strMyISAMDataPointerSizeDesc = 'MAX_ROWS köylämäse bäyälängän oçraqta, CREATE TABLE aşa MyISAM tüşämä qorğanda qullanası pointerneñ baytlı olılığı.';
$strMyISAMMaxExtraSortFileSize = 'Açqıç yasaw öçen waqıtlı birem olılığın çıläw';
$strMyISAMMaxExtraSortFileSizeDesc = 'Bu waqıtlı birem tiz MyISAM açqıç qorğanda qullanıla ikän, ul monda bilgelängän açqıç alxäterennän olıraq bulırğa tieş, şul açqıç alxäterläw ısulına qarap.';
$strMyISAMMaxSortFileSizeDesc = 'MyISAM açqıçın yañadan qorğanda (REPAIR TABLE, ALTER TABLE, yä LOAD DATA INFILE aşa), MySQL qullanırlıq waqıtlı birem olılığın çikläw bu.';
$strMyISAMMaxSortFileSize = 'Tezü öçen waqıtlı birem olılığın çıläw';
$strMyISAMRecoverOptionsDesc = 'Cimerelgän MyISAM tüşämä üzennän tözälü ısulı, serverne --myisam-recover köylämäse belän cibärgän çaqta kebek.';
$strMyISAMRecoverOptions = 'Üzennän tözälü ısulı';
$strMyISAMRepairThreadsDesc = 'Bu bäyä 1dän dä olıraq ikän, MyISAM tüşämä tezüle Tözätü eşe belän bergä açqıçlar qoru eşe dä cibäreler (açqıç sayın ber ayırım cep).';
$strMyISAMRepairThreads = 'Tözätü cebe';
$strMyISAMSortBufferSizeDesc = 'REPAIR TABLE aşa MyISAM-açqıç tözätkändä dä, CREATE INDEX yä ALTER TABLE aşa açqıç östägändä dä yasala torğan bufer bu.';
$strMyISAMSortBufferSize = 'Tezü bufer küläme';
$strMySQLCharset = 'MySQL bilgelämäse';
$strMysqlClientVersion = 'MySQL belän totaştırğıç söreme';
$strMySQLConnectionCollation = 'MySQL-totaşunıñ tezü cayı';
$strMySQLSaid = 'MySQL qaytarışı:';
$strMySQLShowProcess = 'Proseslär tezmäse';
$strMySQLShowStatus = 'MySQL eşläw torışı';
$strMySQLShowVars = 'MySQL üzgärmäläre';

$strName = 'Adı';
$strNext = 'Kiläse';
$strNoActivity = 'Kimendä %s sekund eşlämi tordıq, şuña kürä yañadan keräse';
$strNoDatabases = 'Biremleklär yuq';
$strNoDatabasesSelected = 'Biremlek saylanmağan.';
$strNoDescription = 'Açıqlamasız';
$strNoDetailsForEngine = 'Bu saqlaw engine öçen xälät turında centekle belem yuq.';
$strNoDropDatabases = '"DROP DATABASE" cönläläre sünderelgän.';
$strNoExplain = 'SQL Centeklämäskä';
$strNoFilesFoundInZip = 'ZIP-tuplama eçendä biremnär tabılmadı!';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoIndex = 'Açqıç bilgelänmäde!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoModification = 'Üzgäreşsez';
$strNone = 'Buş';
$strNoOptions = 'Bu tözeleşeneñ köyläneşe yuq';
$strNoPassword = 'Sersüzsez';
$strNoPermission = 'The web server does not have permission to save the file %s.';
$strNoPhp = 'PHP Kodısız';
$strNoPrivileges = 'Xoquqsız';
$strNoRights = 'Bonda bulu öçen, xoquqlarıñ citmi!';
$strNoRowsSelected = 'Kertemnär sayladı';
$strNoSpace = '"%s" biremen saqlaw öçen buş ara citmi.';
$strNoTablesFound = 'Bu biremlektä ber genä dä tüşämä yuq.';
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';
$strNotNumber = 'San tügel bu!';
$strNotOK = 'OK tügel';
$strNotSet = '<b>%s</b> atlı tüşämä yuq, yä ki "%s" tezmäsenä kermi';
$strNoUsersFound = 'Qullanuçı yuq.';
$strNoValidateSQL = 'SQL Tikşermäskä';
$strNo = 'Yuq';
$strNull = 'Buş';
$strNumberOfFields = 'Alannar sanı';
$strNumSearchResultsInTable = '%s kileşü bar, <i>%s</i> atlı tüşämädä';
$strNumSearchResultsTotal = '<b>Tulayım:</b> <i>%s</i> kileşü';
$strNumTables = 'Tüşämä';

$strOK = 'OK';
$strOpenNewWindow = 'Yaña phpMyAdmin-täräzä açu';
$strOperations = 'Eşkärtü';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimize table';
$strOr = 'Yä';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Birem bar bulsa, östän yazdırası';

$strPageNumber = 'Bitneñ sanı:';
$strPagesToBeFlushed = 'Buşatası bit';
$strPaperSize = 'Qäğäz zuqlığı';
$strPartialImport = 'Öleşçä yökläw';
$strPartialText = 'Partial Texts';
$strPasswordChanged = '"%s" öçen sezsüz üzgärtü uñışlı uzdı.';
$strPasswordEmpty = 'Sersüzeñ buş!';
$strPasswordHashing = 'Sersüz Hash\'law';
$strPasswordNotSame = 'Sersüzlär berbersenä kileşmi!';
$strPassword = 'Sersüz';
$strPdfDbSchema = '"%s" biremlek tözeleşe - %s. bit';
$strPdfInvalidTblName = '"%s" atlı tüşämä yuq äle!';
$strPdfNoTables = 'Berär genä dä tüşämä yuq';
$strPDF = 'PDF';
$strPDFReportTitle = 'Yomğaq başlığı';
$strPerHour = 'säğät sayın';
$strPerMinute = 'minut sayın';
$strPerSecond = 'sekund sayın';
$strPersian = 'Farsíça';
$strPhoneBook = 'telefon däftäre';
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPhp = 'PHP-Kod yasa';
$strPHPVersion = 'PHP Söreme';
$strPmaDocumentation = 'phpMyAdmin qullanması';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPolish = 'Polça';
$strPortrait = 'Batırıp';
$strPos1 = 'Başlawğa';
$strPrevious = 'Uzğan';
$strPrimaryKeyHasBeenDropped = 'Töp açqıç beterelde';
$strPrimaryKeyName = 'Bu töp açqıçnıñ adı "PRIMARY" bulırğa tieş!';
$strPrimaryKeyWarning = '(Töp açqıçnıñ <b>ğına</b> adı "PRIMARY" bulırğa <b>tieş</b>!)';
$strPrimary = 'Töp';
$strPrint = 'Bastır';
$strPrintView = 'Bastıru küreneşe';
$strPrintViewFull = 'Bastıru küreneşe (bar mätennär belän)';
$strPrivDescAllPrivileges = 'GRANT\'tan basqa bar xoquqlar da bar.';
$strPrivDescAlter = 'Biredä bulğan tüşämä tözeleşen üzgärtü xoquqı.';
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';
$strPrivDescCreateDb = 'Yaña biremlek/tüşämä yasaw xoquqı.';
$strPrivDescCreateRoutine = 'Saqlanğan funksílar qorırğa birä.';
$strPrivDescCreateTbl = 'Yaña tüşämä yasaw xoquqı.';
$strPrivDescCreateTmpTable = 'Waqıtlı tüşämä yasaw xoquqı.';
$strPrivDescCreateUser = 'Qullanuçı xísabın qoru/salu/ataw eşen qılırğa birä.';
$strPrivDescCreateView = 'Yaña qaraş qorırğa birä.';
$strPrivDescDelete = 'Eçtälek beterü xoquqı.';
$strPrivDescDropDb = 'Biremlek/tüşämä beterü xoquqı.';
$strPrivDescDropTbl = 'Tüşämä beterü xoquqı.';
$strPrivDescExecute5 = 'Eçke funksílar eşlätterergä birä.';
$strPrivDescExecute = 'Eçke prosedur cibärü xoquqı; MySQL\'nıñ bu söremendä yuq äle ul.';
$strPrivDescFile = 'Allows importing data from and exporting data into files.';
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tüşämä.';
$strPrivDescIndex = 'Açqıçlarnı qoru/beterü xoquqı.';
$strPrivDescInsert = 'Eçtälek östäw/almaştıru xoquqı.';
$strPrivDescLockTables = 'Allows locking tables for the current thread.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.';
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.';
$strPrivDescReferences = 'Has no effect in this MySQL version.';
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.';
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.';
$strPrivDescReplSlave = 'Needed for the replication slaves.';
$strPrivDescSelect = 'Eçtälekne uqu xoquqı.';
$strPrivDescShowDb = 'Gives access to the complete list of databases.';
$strPrivDescShowView = 'SHOW CREATE VIEW sorawların eşläterlek itä.';
$strPrivDescShutdown = 'Serverne tuqtatu xoquqı.';
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.';
$strPrivDescUpdate = 'Eçtälek üzgärtü xoquqı.';
$strPrivDescUsage = 'Xoquqlar yuq.';
$strPrivilegesReloaded = 'Bu xoquqlarnı yökläw uñışlı uzdı.';
$strPrivileges = 'Xoquqlar';
$strProcesses = 'Proseslar';
$strProcesslist = 'Proses isemlege';
$strProtocolVersion = 'Protokol söreme';
$strPutColNames = 'Berençe yulda alannarnıñ iseme çığarası';

$strQBEDel = 'Sal';
$strQBEIns = 'Tıq';
$strQBE = 'Soraw';
$strQueryCache = 'Soraw alxätere';
$strQueryFrame = 'Soraw täräzäse';
$strQueryOnDb = '<b>%s</b> biremlegenä SQL-soraw:';
$strQueryResultsOperations = 'Soraw qaytarmasın eşkärtü';
$strQuerySQLHistory = 'SQL-taríxı';
$strQueryStatistics = '<b>Soraw nöfüse</b>: Bu server yöklännän birle, aña taba %s soraw kilgän.';
$strQueryTime = 'Soraw eşkärtü %01.4f sek aldı';
$strQueryType = 'Soraw töre';
$strQueryWindowLock = 'Bu sorawnı, täräzä tışında bulğanı belän almaştırası tügel';

$strReadRequests = 'Uquğa soraw';
$strReceived = 'Alındı';
$strRecords = 'Yazma';
$strReferentialIntegrity = 'Bäyläneşlärne döreslekkä tikşerü:';
$strRefresh = 'Yañart';
$strRelationalSchema = 'Bäyläneşlär sxeme';
$strRelationNotWorking = 'Bäyläneştä torğan tüşämä belän eşläp bulmas, östämä eşli-alu sünek tora. Anı qabızu öçen, %sbonda çirtäse%s.';
$strRelations = 'Bäyläneşlär';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelationView = 'Bäyläneşkä küzätü';
$strReloadingThePrivileges = 'Bu xoquqlarnı yöklä';
$strReloadPrivileges = 'Xoquqlarnı qabat yökläw';
$strRemoveSelectedUsers = 'Saylanğan qullanuçı beterü';
$strRenameDatabaseOK = '"%s" biremlege "%s" itep ataldı';
$strRenameTableOK = '"%s" tüşämäse "%s" itep ataldı';
$strRenameTable = 'Tüşämä adın üzgärtü';
$strRepairTable = 'Tüşämä tözätü';
$strReplaceNULLBy = 'NULL\'nı almaştırası:';
$strReplaceTable = 'Tüşämä eçtälegen bu biremlektäge belän alamştırası';
$strReset = 'Awdar';
$strResourceLimits = 'Resurs çikläwläre';
$strReType = 'Qabatla';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Qullanuçı xoquqların awdarıp beteräse.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'Töşer';
$strRomanian = 'Romança';
$strRowLength = 'Kerem ozınlığı';
$strRowsFrom = 'kerem; berençese #';
$strRowSize = ' Kerem olılığı';
$strRows = 'Kerem';
$strRowsModeFlippedHorizontal = 'yatqırıp (başlıqlar almaşıp)';
$strRowsModeHorizontal = 'yatqırıp';
$strRowsModeOptions = '%s ısulı belän; başlıqnı %s yul sayın qabatlísı';
$strRowsModeVertical = 'bastırıp';
$strRowsStatistic = 'Kerem Nöfüse';
$strRunning = 'Sanaq: %s';
$strRunQuery = 'Sorawnı Yulla';
$strRunSQLQueryOnServer = '%s digän serverdä SQL-soraw eşlätü';
$strRunSQLQuery = '%s biremlegendä eşlätäse SQL-soraw';
$strRussian = 'Urısça';

$strSaveOnServer = 'Serverneñ "%s" törgägendä saqla';
$strSave = 'Saqla';
$strScaleFactorSmall = 'Bu sxemnı ber bittä urnaştıru öçen, olılıq sanı bik keçe';
$strSearch = 'Ezläw';
$strSearchFormTitle = 'Biremlektä ezläw: ';
$strSearchInTables = 'Kiläse tüşämä eçendä:';
$strSearchNeedle = 'Tabası süz/bäyä tezmäse (almaşbilgese: "%"):';
$strSearchOption1 = 'berärse bulsa';
$strSearchOption2 = 'barısı da bulsa';
$strSearchOption3 = 'tulı tezmä, tögäl kileş';
$strSearchOption4 = 'regexp kileş';
$strSearchResultsFor = '"<i>%s</i>" ezläw näticäse %s:';
$strSearchType = 'Ezläw:';
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';
$strSelectADb = 'Berär biremlek saylísı';
$strSelectAll = 'Saylap Beter';
$strSelectBinaryLog = 'Qaraw öçen binar köndälek saylaw';
$strSelectFields = 'Alannar saylísı (iñ kimendä ber):';
$strSelectNumRows = 'sorawda';
$strSelectTables = 'Tüşämä Saylaw';
$strSend = 'Biremgä saqlıysı';
$strSent = 'Cibärelde';
$strServerChoice = 'Server Saylaw';
$strServerNotResponding = 'Bu server endäşmi';
$strServer = 'Server';
$strServers = 'Serverlär';
$strServerStatusDelayedInserts = 'Kiçerelgän östäw';
$strServerStatus = 'Eşläw Torışı';
$strServerStatusUptime = 'Bu MySQL-server %s eşli. %s çorında cibärelgän ide ul.';
$strServerTabVariables = 'Üzgärmälär';
$strServerTrafficNotes = '<b>Server taşımı</b>: MySQL-server cibärelgännän birle, anıñ belän çeltär arasında bulğan taşım turında belem bondağı tüşämä eçendä birelä.';
$strServerVars = 'Server üzgärmäläre &amp; köyläneşe';
$strServerVersion = 'Server söreme';
$strSessionValue = 'Sessi bäyäse';
$strSetEnumVal = 'Alan töre "enum/set" bulsa, bäyäsen bolayraq kertäse: \'a\',\'b\',\'c\'...<br />Bäyä eçenä kireawış ("\") yä sıñarquote ("\'") kertäse bulsa, anı kireawıştırası bula (ürnäk: \'\\\\xyz\' yä ki \'a\\\'b\').';
$strShowAll = 'Barısın kürsät';
$strShowColor = 'Tösle kürsät';
$strShowDatadictAs = 'Eçtälek Süzlegeneñ Tözeleşe';
$strShowFullQueries = 'Tulı Sorawlar Kürsät';
$strShowGrid = 'Sırlı kürsät';
$strShowingBookmark = 'Bitbilge kürsätü';
$strShowingRecords = 'Yazma sanı:';
$strShow = 'Kürsät';
$strShowOpenTables = 'Açıq tüşämä tezmäse';
$strShowPHPInfo = 'PHP turında';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Buş bitlär sanı.';
$strShowStatusInnodb_os_log_writtenDescr = 'Köndälek biremenä yazılğan bayt sanı bu.';
$strShowStatusInnodb_pages_createdDescr = 'Yaratılğan bit sanı bu.';
$strShowStatusInnodb_page_sizeDescr = 'InnoDB yasağanda bit öçen berketelgän küläme (töcay bäyäse 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';
$strShowStatusInnodb_pages_readDescr = 'Uqılğan bit sanı bu.';
$strShowStatusInnodb_pages_writtenDescr = 'Yazılğan bit sanı bu.';
$strShowStatusOpen_filesDescr = 'Açıq toruçı birem sanı.';
$strShowStatusOpen_tablesDescr = 'Açıq toruçı tüşämä sanı.';
$strShowStatusQcache_hitsDescr = 'Alxätergä turı kilü sanı bu.';
$strShowStatusReset = 'Awdar';
$strShowStatusSort_rowsDescr = 'Tezelgän yazma sanı bu.';
$strShowStatusThreads_connectedDescr = 'Biredä açıq bulğan totaşu sanı.';
$strShowTableDimension = 'Tüşämä ülçämen kürsätü';
$strShowTables = 'Tüşämälär kürsätäse';
$strShowThisQuery = ' Bu sorawnı qabat kürsätäse';
$strSimplifiedChinese = 'Ciñel Çinçä';
$strSingly = '(sıñar)';
$strSize = 'Küläme';
$strSkipQueries = 'Baştan ütep kitäse yazma sanı';
$strSlovak = 'Slovakça';
$strSlovenian = 'Slovença';
$strSocketProblem = '(yä cirle MySQL-server soketı döres köylänmägän ide)';
$strSortByKey = 'Qullanası tezeş';
$strSorting = 'Tezü';
$strSort = 'Tezü';
$strSpaceUsage = 'Totılğan Alan';
$strSpanish = 'İspança';
$strSplitWordsWithSpace = 'Süzlärne buşlıq bilgese belän ayırası (" ").';
$strSQLCompatibility = 'SQL, kileşterü ısulı';
$strSQLExportType = 'Çığaru ısulı';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL-soraw';
$strSQLResult = 'SQL qaytarışı';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Tanıtması Yaraqsız';
$strSQPBugUnclosedQuote = 'Yabılmağan cäyä';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strStatCheckTime = 'Soñğı tikşerü';
$strStatCreateTime = 'Yasalışı';
$strStatement = 'Cömlä';
$strStatUpdateTime = 'Soñğı yañartılu';
$strStatus = 'Torış';
$strStorageEngine = 'Saqlaw Isulı';
$strStorageEngines = 'Saqlaw Isulı';
$strStrucCSV = 'CSV bireme';
$strStrucData = 'Tözeleşen dä, eçtälegen dä';
$strStrucExcelCSV = 'CSV bireme, MS Excel öçen';
$strStrucNativeExcel = 'MS Excel tözeleşendä';
$strStrucOnly = 'Tözeleşen genä';
$strStructPropose = 'Tüşämä tözeleşenä küzätü';
$strStructure = 'Tözeleş';
$strSubmit = 'Künder';
$strSuccess = 'SQL-sorawıñ uñışlı eşkärtelde';
$strSum = 'Sum';
$strSwedish = 'İswäcçä';
$strSwitchToDatabase = 'Kübäytelgän biremlekkä küçäse';
$strSwitchToTable = 'Kübäytelgän tüşämägä küçäse';

$strTableAlreadyExists = '%s atlı tüşämä bar inde!';
$strTableComments = 'Tüşämä açıqlaması';
$strTableEmpty = 'Tüşämä adı kertelmi qaldı!';
$strTableHasBeenDropped = '"%s" atlı tüşämä beterelde';
$strTableHasBeenEmptied = '"%s" atlı tüşämä buşatıldı';
$strTableHasBeenFlushed = '"%s" atlı tüşämä awdarıldı';
$strTableMaintenance = 'Tüşämä eşkärtü';
$strTableOfContents = 'Eçtälek isemlege';
$strTableOptions = 'Tüşämä köyläneşe';
$strTables = '%s tüşämä';
$strTableStructure = 'Tüşämä tözeleşe';
$strTable = 'Tüşämä';
$strTakeIt = 'bonı sayla';
$strTblPrivileges = 'Berär tüşämä öçen xoquqlar';
$strTempData = 'Çaqlı birem';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable';
$strThai = 'Tayça';
$strThemeDefaultNotFound = '%s digän töp tışlaw tabılmadı!';
$strThemeNotFound = '%s digän tışlaw tabılmadı!';
$strThemeNoValidImgPath = '%s digän tışlaw sürätläre urınlaşqan yul tabılmadı!';
$strThemePathNotFound = '%s digän tışlaw urınlaşqan yul tabılmadı!';
$strTheme = 'Tışlaw / Bizäleş';
$strThisHost = 'Bu Sanaq';
$strThreads = 'Ceplär';
$strThreadSuccessfullyKilled = '%s cebe uñışlı üterelgän buldı.';
$strTime = 'Waqıt';
$strToggleScratchboard = 'Toggle scratchboard';
$strTotal = 'tulayım';
$strTotalUC = 'Tulayım';
$strTraditionalChinese = 'Ğädäti Çinçä';
$strTraditionalSpanish = 'Ğädäti İspança';
$strTraffic = 'Taşım';
$strTransactionCoordinator = 'Eş-ara idäräçese';
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX ĞIÑA: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';
$strTruncateQueries = 'Sorawnı Qısqartıp Kürsätäse';
$strTurkish = 'Törekçä';
$strType = 'Töre';

$strUkrainian = 'Ukrainça';
$strUncheckAll = 'Saylanunı Töşer';
$strUnicode = 'Unicode';
$strUnique = 'Qabatsız';
$strUnknown = 'belgesez';
$strUnselectAll = 'Saylanunı Töşer';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Sorawnı Yañart';
$strUpdComTab = 'Sineñ Column_comments Tüşämä yañartu eşe turında Qullanmada qarísı';
$strUpgrade = 'You should upgrade to %s %s or later.';
$strUsage = 'Totılu';
$strUseBackquotes = 'Tüşämä/alan isemnären kirequote eçenä salası';
$strUsedPhpExtensions = 'PHP östämäse qullanıla';
$strUseHostTable = 'Host Tüşämä eçennän';
$strUserAlreadyExists = '"%s" atlı qullanuçı bar inde!';
$strUserEmpty = 'Atama buş!';
$strUserName = 'İreşü iseme';
$strUserNotFound = 'Bu qullanuçı xoquqlar tüşämä eçendä tabılmadı.';
$strUserOverview = 'Qullanuçılar tezmäse';
$strUser = 'Qullanuçı';
$strUsersDeleted = 'Saylanğan qullanuçını beterü uñışlı uzdı.';
$strUsersHavingAccessToDb = '"%s" belän eşläw xoquqı bulğan qullanuçılar';
$strUseTabKey = 'Ber bäyädän ikençegä küçü öçen TAB töymäsen qullanası, başqa cirgä küçü öçen, CTRL+uq töymäläre bar';
$strUseTables = 'Tüşämä qullanıp';
$strUseTextField = 'Bu mätennän';
$strUseThisValue = 'Bu bäyä belän';

$strValidateSQL = 'SQL\'nı Tikşer';
$strValidatorError = 'SQL-tikşerüçe köylänmägän. Bu kiräk bulğan php-yöklämäne köyläw turında %squllanmada%s uqıp bula.';
$strValue = 'Bäyä';
$strVar = 'Üzgärmä';
$strVersionInformation = 'Söreme turında';
$strViewDumpDatabases = 'Biremleklärneñ eçtälegen (tözeleşen) çığaru';
$strViewDumpDB = 'Biremlek eçtälegen (tözeleşen) çığaru';
$strViewDump = 'Tüşämä eçtälegen (tözeleşen) çığaru';
$strViewHasBeenDropped = '"%s" atlı Qaraş beterelgän buldı';
$strView = 'Qaraş';

$strWebServerUploadDirectoryError = 'Yökläw öçen bigelängän törgäkne uqıp bulmí';
$strWebServerUploadDirectory = 'web-server\'neñ yökläw törgäge';
$strWelcome = '%s siña İsäñme di';
$strWestEuropean = 'Batış Awrupı';
$strWildcard = 'almaşbilge';
$strWindowNotFound = 'Browsernıñ maqsat täräzäse yañartılmí qaldı. Ana-täräzä yabılğan bulğan bälki, yä browserneñ iminlek caylawında täräzä-ara yañartu tıyılğan bulıp tora.';
$strWithChecked = 'Saylanğannı:';
$strWriteRequests = 'Yazuğa soraw';
$strWrongUser = 'Atama/sersüzeñ yalğış buluına kürä ireşep bulmadı.';

$strXML = 'XML';

$strYes = 'Äye';

$strZeroRemovesTheLimit = 'Beläse: 0 (nül) kertelgän çaqta çikläwe beterelä.';
$strZip = '"ziple"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate

$strBrowseDistinctValues = 'Browse distinct values';  //to translate

$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate

$strDelimiter = 'Delimiter';  //to translate

$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate

$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate

$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate

$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate

$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate

$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate

$strReplication = 'Replication';  //to translate

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
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
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
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate

$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate

$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate

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
