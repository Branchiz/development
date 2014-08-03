<?php
/* $Id: tatarish-iso-8859-9.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'iso-8859-9';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bayt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Yk�', 'D�m', 'S�m', '�r�', 'Pnc', 'Cm�', '�mb');
$month = array('��n', 'Feb', 'Mar', '�pr', 'May', 'Y�n', 'Y�l', 'Aug', 'Sen', '�kt', 'N�y', 'Dek');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y.%m.%d, %H:%M';
$timespanfmt = '%s k�n, %s s���t, %s minut ta %s sekund';

$strAbortedClients = '�zderelde';
$strAccessDeniedExplanation = 'phpMyAdmin bu MySQL serverg� tota��l�p qara�a�, server bu tota��lu�n �zep quyd�. X�zer, "config.inc.php" biremend� kertelg�n sanaqisem/ire�isem/sers�zl�r tik�serep, alarn� MySQL id�r��ese birg�n m��l�m�t bel�n �a���t�r�p qar�s� qala.';
$strAccessDenied = '�re�ep Bulmad�';
$strAction = 'E�';
$strAddAutoIncrement = '"AUTO_INCREMENT" b�y�sen �stise';
$strAddClause = '%s �st�w';
$strAddConstraints = '�ikl�wl�r �stise';
$strAddDeleteColumn = 'Add/Delete Field Columns';
$strAddDeleteRow = 'Add/Delete Criteria Row';
$strAddFields = '%s alan �st�w';
$strAddHeaderComment = 'Ba�l�qqa �st�m� a��qlama �st�w (yullar \\n bel�n ay�r�la)';
$strAddIntoComments = 'A��qlama e�en� �stise';
$strAddNewField = 'Ya�a alan �st�w';
$strAddPrivilegesOnDb = 'Kil�se biremlek ��en xoquqlar �st�w';
$strAddPrivilegesOnTbl = 'Kil�se t���m� ��en xoquqlar �st�w';
$strAddSearchConditions = 'Ezl�w �art�n �st�w ("WHERE" e�t�lege):';
$strAddToIndex = 'A�q��qa ta��n &nbsp;%s&nbsp;alan �stise';
$strAddUserMessage = 'Yana qullanu�� �st�l�nde.';
$strAddUser = 'Ya�a qullanu�� �st�w';
$strAdministration = '�d�r�';
$strAffectedRows = 'E�k�rtelg�n yazma:';
$strAfterInsertBack = 'Alda�� bitk� qaytu';
$strAfterInsertNewInsert = 'Ta��n ber yazma �st�w';
$strAfterInsertNext = 'Kil�se yazma �zg�rt�';
$strAfterInsertSame = 'Bu bitk� kire qaytas�';
$strAfter = '%s art�nnan';
$strAll = 'Bar�s�';
$strAllTableSameWidth = 'display all Tables with same width?';
$strAlterOrderBy = 'T���m� e�t�legen bolay tez�se';
$strAnalyzeTable = 'T���m� centekl�w';
$strAndThen = ', �unnan so�';
$strAnd = 'W�';
$strAnIndex = '"%s" ��en ber a�q�� qor�ld�';
$strAnyHost = 'Bar bul�an host';
$strAny = 'T�rle';
$strAnyUser = 'T�rle qullanu��';
$strApproximateCount = 'T�rle bulu� bar. YBS 3.11 qar�s�';
$strAPrimaryKey = '"%s" ��en t�p a�q�� qor�ld�';
$strArabic = '��r�p��';
$strArmenian = '�rm�n��';
$strAscending = 'Art�p';
$strAtBeginningOfTable = 'T���m� Ba��na';
$strAtEndOfTable = 'T���m� aza��na';
$strAttr = '�zen��lek';
$strAutomaticLayout = 'Zihenle urna�t�ru';

$strBack = 'Kire';
$strBaltic = 'Baltiq';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Binar - �zg�rtm�slek';
$strBinaryLog = 'Binar k�nd�lek';
$strBinLogEventType = 'Buld�q t�re';
$strBinLogInfo = 'Bele�m�';
$strBinLogName = 'K�nd�lek ad�';
$strBinLogOriginalPosition = 'T�rtip buy�n�a ur�n';
$strBinLogPosition = 'Ur�n';
$strBinLogServerId = 'Server ID\'e';
$strBookmarkAllUsers = 'Bu tam�an� bar qullanu���a da ire��le it�se';
$strBookmarkCreated = '%s dig�n bitbilge yarat�ld�';
$strBookmarkDeleted = 'Tam�a beterelde.';
$strBookmarkLabel = 'Yarl�q';
$strBookmarkQuery = 'Tam�alan�an SQL-soraw';
$strBookmarkReplace = '�ulay uq atal�an bitbilgel�rne alma�t�ras�';
$strBookmarkThis = 'Bu SQL-soraw�a tam�a quy';
$strBookmarkView = 'K�rep ken�';
$strBrowseForeignValues = 'Browse foreign values';
$strBrowse = 'K�z�t�';
$strBufferPoolActivity = 'Bufer Pul Terelege';
$strBufferPool = 'Bufer Pul�';
$strBufferPoolUsage = 'Bufer Pul Tot�l�anl���';
$strBufferReadMissesInPercent = 'U���s�z uqu, % ��en';
$strBufferReadMisses = 'U���s�z uqu';
$strBufferWriteWaitsInPercent = 'Yaz�anda k�tter�, % ��en';
$strBufferWriteWaits = 'Yaz�anda k�tter�';
$strBulgarian = 'Balgar�a';
$strBusyPages = 'E�t� bit';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.';
$strBzip = '"bziple"';

$strCalendar = 'T�qwim';
$strCanNotLoadImportPlugins = 'Tota�malar y�kl�p bulmad�, quy�l���n tik�erep alas�!';
$strCannotLogin = 'MySQL serverg� tota��l�p bulmad�';
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';
$strCantLoad = '"%s" y�kl�m�sen cib�rep bulmad�,<br />PHP Caylaw�n tik�er�e';
$strCantRenameIdxToPrimary = 'A�q��n� "PRIMARY" itep atap bulm�!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Qabatlanu san�';
$strCaseInsensitive = 'ke�e/ol� sizmi��';
$strCaseSensitive = 'ke�e/ol� sizep';
$strCentralEuropean = '�z�k Awrup�';
$strChangeCopyModeCopy = '... keep the old one.';
$strChangeCopyMode = 'Create a new user with the same privileges and ...';
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';
$strChangeCopyUser = 'Change Login Information / Copy User';
$strChangeDisplay = 'K�rs�t�se Alan saylaw';
$strChangePassword = 'Sers�z �zg�rt�';
$strChange = '�zg�rt';
$strCharset = 'Bilgel�m�';
$strCharsetOfFile = '�ul biremne� bilgel�m�se:';
$strCharsetsAndCollations = 'Bilgel�m� &amp; Tez� cay�';
$strCharsets = 'Bilgel�m�';
$strCheckAll = 'Saylap Beter';
$strCheckOverhead = 'Check overheaded';
$strCheckPrivsLong = '"%s" biremlege ��en xoquqlar tik�er�.';
$strCheckPrivs = 'Xoquqlar tik�er�';
$strCheckTable = 'T���m� tik�er�';
$strChoosePage = 'T�z�t� ��en ber�r bit sayla';
$strColComFeat = 'Buy A��qlamas�n K�rs�t�se';
$strCollation = 'Tez� cay�';
$strColumnNames = 'Alan iseme';
$strColumnPrivileges = 'Ber�r ba�ana ��en xoquqlar';
$strCommand = '�mer';
$strComments = 'A��qlama';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 ��en yaraql�';
$strCompleteInserts = 'Tulay�m �stise';
$strCompression = 'Q�su';
$strConfigDefaultFileError = 'T�p k�yl�ne�en y�kl�p bulmad�: "%1$s"';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you receive. In most cases a quote or a semicolon is missing somewhere.<br />If you receive a blank page, everything is fine.';
$strConfigureTableCoord = 'Please configure the coordinates for table %s';
$strConnectionError = 'Tota�a alm�m: yaraqs�z k�yl�wl�r.';
$strConnections = 'Tota�ular';
$strConstraintsForDumped = 'Constraints for dumped tables';
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyDatabaseOK = 'Database %s has been copied to %s';
$strCopy = 'K�b�yt';
$strCopyTable = 'Bo�a k�b�yt (biremlek<b>.</b>t���m�):';
$strCopyTableOK = 'Table %s has been copied to %s.';
$strCopyTableSameNames = 'Can\'t copy table to same one!';
$strCouldNotKill = 'phpMyAdmin %s ceben �ter� almad�. B�lki ul yab�l�an bul�an da inde.';
$strCreateDatabaseBeforeCopying = 'K�b�yt� ald�nnan CREATE DATABASE �stise';
$strCreateIndex = '%s alannan teze� yaratu';
$strCreateIndexTopic = 'Ya�a teze� yaratu';
$strCreateNewDatabase = 'Ya�a biremlek yaratu';
$strCreateNewTable = '%s biremlegend� ya�a t���m� yaratu';
$strCreatePage = 'Ya�a Bit yaratu';
$strCreatePdfFeat = 'PDF yaratu';
$strCreateUserDatabaseNone = 'Yuq';
$strCreateUserDatabase = 'Qullanu�� biremlege';
$strCreate = 'Yarat';
$strCreationDates = 'Yarat�lu/�zg�rel�/Tik�er� �aqlar�';
$strCriteria = '�art';
$strCroatian = 'Kroat�a';
$strCSV = 'CSV';
$strCyrillic = 'Ur�s�lif';
$strCzech = '�ex��';
$strCzechSlovak = '�ex-Slovak';

$strDanish = 'Dan�a';
$strDatabase = 'Biremlek';
$strDatabaseEmpty = 'Biremlek iseme bu�!';
$strDatabaseExportOptions = 'Biremlek saqlaw k�yl�ne�e';
$strDatabaseHasBeenDropped = '%s biremlege beterelde.';
$strDatabases = 'Biremlekl�r';
$strDatabasesDropped = '"%s" biremlegen beter� u���l� uzd�.';
$strDatabasesStats = 'Biremlek n�f�sl�re';
$strDatabasesStatsDisable = 'N�f�se S�nder�';
$strDatabasesStatsEnable = 'N�f�sne Cib�r�';
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';
$strDataDict = 'E�t�lek S�zlege';
$strData = 'E�t�lek';
$strDataOnly = 'E�t�legen gen�';
$strDataPages = 'E�t�lekle bitl�r';
$strDBComment = 'Biremlek a��qlamas�:';
$strDBCopy = 'Biremlekne bo�a k�b�yt';
$strDbPrivileges = 'Ber�r biremlekk� qa��l��l� xoquqlar';
$strDBRename = 'Biremlekne bolay atap quy';
$strDbSpecific = 'ber�r biremlekk� qa��l��l�';
$strDefaultEngine = 'Bu MySQL-serverd� %s dig�n saqlaw �sul� t�p bularaq saylan�an.';
$strDefault = 'T�pcay';
$strDefaultValueHelp = 'T�pcay b�y�sen kertk�nd�, kireaw��lar qullanmasqa, c�y� e�en� da salmasqa. Bolayraq kert�se: a';
$strDefragment = 'T���m� kis�kl�ren berl��ter�';
$strDelayedInserts = 'K�tterep �stise';
$strDeleteAndFlush = 'Beterg��, xoquqlarn� ya�adan y�klise.';
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.';
$strDeleted = 'Bu yazma sal�n�an buld�';
$strDeletedRows = 'Sal�n�an yul:';
$strDeleteNoUsersSelected = 'Beter�se qullanu��lar saylanma�an!';
$strDelete = 'Sal';
$strDeleting = '"%s" Beter�';
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';
$strDescending = 'Kimep';
$strDescription = 'A��qlama';
$strDictionary = 's�zlek';
$strDirtyPages = '�zg�rtelg�n bit';
$strDisabled = 'S�nek';
$strDisableForeignChecks = 'Yat teze� tik�er�en s�nderep';
$strDisplayFeat = 'M�mkinlekl�r K�rs�t�';
$strDisplayOrder = 'K�rs�t� t�rtibe:';
$strDisplayPDF = 'PDF schema k�rs�t�';
$strDoAQuery = '"�rn�k buy�n�a soraw" e�k�rt� (alma�t�rma: "%")';
$strDocu = 'Qullanma';
$strDoYouReally = 'Sin ��nlap ta bon� e�l�rg� telise�me: ';
$strDrop = 'Beter';
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';
$strDropUsersDb = 'Bu qullanu��lar kebek atal�an biremlekl�rne beter�se.';
$strDumpingData = 'T���m� e�t�legen ���aru';
$strDumpSaved = 'E�t�lege "%s" biremen� saqland�.';
$strDumpXRows = 'E�t�lek: %s kerem, #%s keremn�n ba�lap.';
$strDynamic = '�zg�r���n';

$strEditPDFPages = 'PDF-Bitl�r �zg�rt�';
$strEditPrivileges = 'Xoquqlar �zg�rt�';
$strEdit = 'T�z�t�';
$strEffective = 'U���l�';
$strEmpty = 'Bu�at';
$strEmptyResultSet = 'MySQL soraw�a bu� cawap, y��ni n�l kertem qaytartt�.';
$strEnabled = 'A��q';
$strEncloseInTransaction = 'Transaksi e�end� �tk�rep';
$strEnd = 'Azaq';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEngineAvailable = 'Bu MySQL serverd� %s bar.';
$strEngineDisabled = 'Bu MySQL serverd� %s s�nderelg�n bul�an.';
$strEngines = 'Engine';
$strEngineUnsupported = 'Bu MySQL server %s saqlaw enginen totm�.';
$strEnglishPrivileges = ' Bel�se: MySQL\'da xoquq ad� �ngliz�� kertel�!';
$strEnglish = '�ngliz��';
$strErrorInZipFile = 'ZIP-tuplama e�end� xata:';
$strErrorRenamingTable = '%1$s atl� t���m� ad�n %2$s itep �zg�rtep bulmad�';
$strError = 'Xata';
$strEscapeWildcards = '_ bel�n % bilgel�ren �ul kile� ken� qullanu ��en \ bel�n �tk�rerg� kir�k';
$strEsperanto = 'Esperanto';
$strEstonian = 'Eston�a';
$strExcelEdition = 'Excel s�reme';
$strExecuteBookmarked = 'Tam�alan�an soraw cib�r�';
$strExplain = 'SQL Centekl�w';
$strExport = 'Export';
$strExtendedInserts = 'Ki��ytep �stise';
$strExtra = '�st�m�';

$strFailedAttempts = 'Failed attempts';
$strField = 'Alan';
$strFieldHasBeenDropped = '%s isemle alan beterelde';
$strFields = 'Alan';
$strFieldsEnclosedBy = 'Alan yapt�ru�� bilge';
$strFieldsEscapedBy = 'Alan uzd�ru bilgese';
$strFieldsTerminatedBy = 'Alan aras�nda bilge';
$strFileAlreadyExists = 'Serverd� %s dig�n birem bar inde, ad�n alma�t�ras�, y� inde �st�n yazu tam�as�n a�as� qala.';
$strFileCouldNotBeRead = 'Birem uq�p bulmad�';
$strFileNameTemplate = 'Birem ad�n�� t�zele�e';
$strFileNameTemplateDescriptionDatabase = 'biremlek ad�';
$strFileNameTemplateDescriptionServer = 'server ad�';
$strFileNameTemplateDescriptionTable = 't���m� ad�';
$strFileNameTemplateRemember = 't�zele�en yatla';
$strFileToImport = 'Y�klise birem';
$strFixed = 'berketelg�n';
$strFlushPrivilegesNote = 'Bel�se: MySQL-serverne� e�ke t���m� e�enn�n al�n�an xoquqlar bu. Server qullana tor�an xoquqlar qul a�a �zg�rtelg�n bulsa, bu t���m� e�t�lege alardan ay�r�la ala. And� �aqlarda, dawam it� ald�nnan, %sxoquqlarn� qabat y�kl�p alas�%s.';
$strFlushQueryCache = 'Soraw alx�teren awdar';
$strFlushTables = 'T���m�l�rne yab�p beter�se';
$strFlushTable = 'T���wne awdar ("FLUSH")';
$strFormat = 'T�zele�';
$strFormEmpty = 'Bu form�da b�y� kertelmi qal�an!';
$strFreePages = 'Bu� bit san�';
$strFullText = 'Tul� M�tenn�r';
$strFunction = 'Funks�';

$strGenBy = '�r��tke�:';
$strGeneralRelationFeat = 'B�yl�ne�l�r buy�n�a t�p m�mkinlekl�r';
$strGeneratePassword = 'Sers�z �r�et�';
$strGenerate = '�r�et';
$strGenTime = '�r��w Zaman�';
$strGeorgian = 'G�rce��';
$strGerman = 'Alman�a';
$strGlobal = '��m�mi';
$strGlobalPrivileges = 'T�p xoquq';
$strGlobalValue = 'T�p b�y�';
$strGo = '�yd�';
$strGrantOption = 'Xoquq';
$strGreek = 'Yunan�a';
$strGzip = '"gziple"';

$strHandler = 'E�k�rtke�';
$strHasBeenAltered = '�zg�rtelde.';
$strHasBeenCreated = 'yarat�ld�.';
$strHaveToShow = 'You have to choose at least one Column to display';
$strHebrew = 'Y�h�d��';
$strHome = 'Ba�bit';
$strHomepageOfficial = 'phpMyAdmin s�xif�se';
$strHostEmpty = 'Host ad� bu�!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macar�a';

$strIcelandic = '�cland�a';
$strId = 'ID';
$strIdxFulltext = 'Tul�m�ten';
$strIgnoreDuplicates = 'Qabatlan�an yazmalarn� �t�se';
$strIgnoreInserts = '"IGNORE" bel�n kert�se';
$strIgnore = 'Qarama';
$strImportFiles = 'Biremd�n alu';
$strImportFormat = 'Y�kl�n�an birem t�zele�e';
$strImport = 'Y�kl�w';
$strIndexes = 'Teze�l�r';
$strIndexHasBeenDropped = '"%s" dig�n teze� sal�nd�';
$strIndexName = 'Teze� ad�&nbsp;:';
$strIndex = 'Teze�';
$strIndexType = 'Teze� t�re&nbsp;:';
$strIndexWarningTable = '`%s` atl� t���w teze�l�re bel�n nidider tisk�rlek bar';
$strInnoDBAutoextendIncrement = 'Biremlekt� artt�ru ad�m�';
$strInnoDBAutoextendIncrementDesc = 'T���m� alan� tul�a�, an� artt�ru�� ad�m� bu.';
$strInnoDBBufferPoolSize = 'Bufer pul ol�l���';
$strInnoDBBufferPoolSizeDesc = 'InnoDB �z t���m� ��en alx�ter bel�n a�q��lar urna�t�r�anda bu ol�l�qta bul�an bufer qullana.';
$strInnoDBDataFilePath = 'E�t�lek bireme';
$strInnoDBDataHomeDir = 'Biremn�r t�rg�ge';
$strInnoDBDataHomeDirDesc = 'InnoDB biremn�re ��en t�rg�k yul�n�� t�p �le�e bu.';
$strInnoDBPages = 'bit';
$strInnodbStat = 'InnoDB Tor���';
$strInsecureMySQL = 'MySQL-serverg� ire�� ��en qullanas� xisap bularaq, caylaw biremend� t�p xisap saylan�an (sers�zsez "root"). MySQL-server �ul t�p xisap bel�n a��l�an da, and�y x�ll�r iminlekne� citdi ti�ege tip sanala.';
$strInsertAsNewRow = 'Ya�a yazma kert t�';
$strInsertedRowId = 'Kertelg�n yazman�� id:';
$strInsertedRows = 'Kertelg�n yazma:';
$strInsert = '�st�w';
$strInternalNotNecessary = '* InnoDB e�end� bul�an e�ke b�yl�ne�l�r qabatlar�a kir�k t�gel.';
$strInternalRelations = 'E�ke b�yl�ne�';
$strInUse = 'tot�la';
$strInvalidCSVParameter = 'CSV y�kl�wene� yaraqs�z k�yl�ne�e: %s';
$strInvalidDatabase = 'Yaraqs�z biremlek';
$strInvalidFieldAddCount = 'Kimend� ber�r alan kert�se.';
$strInvalidFieldCount = 'T���m� alannar� san� kimend� 1 bul�r�a te�.';
$strInvalidRowNumber = '%d dig�ne yazma san� ��en kile�mi.';
$strInvalidServerIndex = 'Serverd�ge "%s" dig�n tezele� yaraqs�z';
$strInvalidTableName = 'T���m� ad� yaraqs�z';

$strJapanese = 'Japan�a';
$strJoins = 'B�yl�r';
$strJumpToDB = '&quot;%s&quot; biremlegen� k��.';
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.';
$strJustDelete = 'Xoquqlar t���m�senn�n gen� beter�se.';

$strKeepPass = 'Sers�zen �zg�rt�se t�gel';
$strKeyCache = 'Teze� alx�tere';
$strKeyname = 'Teze� ad�';
$strKill = '�ter';
$strKorean = 'Korey��';

$strLandscape = 'Yatq�r�p';
$strLanguageUnknown = 'Belgesez tel: %1$s.';
$strLatchedPages = 'Berketelg�n bit';
$strLatexCaption = 'T���m� ba�l���';
$strLatexContent = '__TABLE__ atl� t���m� e�t�lege';
$strLatexContinuedCaption = 'T���m� dawam�n�� ba�l���';
$strLatexContinued = '(dawaml�)';
$strLatexIncludeCaption = 'T���m� ba�l���n �stise';
$strLatexLabel = 'A�q�� yazmas�';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ atl� t���m� t�zele�e';
$strLatvian = 'Lat�a';
$strLDI = 'LOAD DATA qullan�p CSV';
$strLDILocal = 'LOCAL dig�n s�z qullan�p';
$strLengthSet = 'Oz�nl�q/B�y�*';
$strLimitNumRows = 'Bit say�n Kertem san�';
$strLinesTerminatedBy = 'Yul ara bilgese';
$strLinkNotFound = 'B�yl�ne� tab�lmad�';
$strLinksTo = 'Bon� bel�n b�yl�ne�:';
$strLithuanian = 'Lit��';
$strLocalhost = 'Cirle';
$strLocationTextfile = 'SQL-�merlege bel�n birem y�kl�w';
$strLoginInformation = 'Kere� Tur�nda';
$strLogin = 'Kere�';
$strLogout = '�����';
$strLogPassword = 'Sers�z:';
$strLogServer = 'Server';
$strLogUsername = 'Atama:';
$strLongOperation = 'Bu e� ozaqqa suz�la ala. Bar�ber e�liseme?';

$strMaximalQueryLength = 'Kilg�n soraw k�l�mene� �ske k�l�me';
$strMaximumSize = 'Max: %s%s';
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';
$strMIME_available_mime = 'Barl�q MIME-t�rl�r';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'A��qlama';
$strMIME_MIMEtype = 'MIME-t�rl�re';
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslash it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformation options';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strModifications = '�zg�rt�l�r saqland�';
$strModifyIndexTopic = 'A�q�� �zg�rt�';
$strModify = '�zg�rt';
$strMoveTable = 'Bo�a k��er� (biremlek<b>.</b>t���m�):';
$strMoveTableOK = '"%s" atl� t���m� "%s" kebek atald�.';
$strMoveTableSameNames = 'Ber �k at bel�n t���m� k��erep bulm�!';
$strMultilingual = 'k�ptelle';
$strMyISAMDataPointerSize = 'Data pointer ol�l���';
$strMyISAMDataPointerSizeDesc = 'MAX_ROWS k�yl�m�se b�y�l�ng�n o�raqta, CREATE TABLE a�a MyISAM t���m� qor�anda qullanas� pointerne� baytl� ol�l���.';
$strMyISAMMaxExtraSortFileSize = 'A�q�� yasaw ��en waq�tl� birem ol�l���n ��l�w';
$strMyISAMMaxExtraSortFileSizeDesc = 'Bu waq�tl� birem tiz MyISAM a�q�� qor�anda qullan�la ik�n, ul monda bilgel�ng�n a�q�� alx�terenn�n ol�raq bul�r�a tie�, �ul a�q�� alx�terl�w �sul�na qarap.';
$strMyISAMMaxSortFileSizeDesc = 'MyISAM a�q���n ya�adan qor�anda (REPAIR TABLE, ALTER TABLE, y� LOAD DATA INFILE a�a), MySQL qullan�rl�q waq�tl� birem ol�l���n �ikl�w bu.';
$strMyISAMMaxSortFileSize = 'Tez� ��en waq�tl� birem ol�l���n ��l�w';
$strMyISAMRecoverOptionsDesc = 'Cimerelg�n MyISAM t���m� �zenn�n t�z�l� �sul�, serverne --myisam-recover k�yl�m�se bel�n cib�rg�n �aqta kebek.';
$strMyISAMRecoverOptions = '�zenn�n t�z�l� �sul�';
$strMyISAMRepairThreadsDesc = 'Bu b�y� 1d�n d� ol�raq ik�n, MyISAM t���m� tez�le T�z�t� e�e bel�n berg� a�q��lar qoru e�e d� cib�reler (a�q�� say�n ber ay�r�m cep).';
$strMyISAMRepairThreads = 'T�z�t� cebe';
$strMyISAMSortBufferSizeDesc = 'REPAIR TABLE a�a MyISAM-a�q�� t�z�tk�nd� d�, CREATE INDEX y� ALTER TABLE a�a a�q�� �st�g�nd� d� yasala tor�an bufer bu.';
$strMyISAMSortBufferSize = 'Tez� bufer k�l�me';
$strMySQLCharset = 'MySQL bilgel�m�se';
$strMysqlClientVersion = 'MySQL bel�n tota�t�r��� s�reme';
$strMySQLConnectionCollation = 'MySQL-tota�un�� tez� cay�';
$strMySQLSaid = 'MySQL qaytar���:';
$strMySQLShowProcess = 'Prosesl�r tezm�se';
$strMySQLShowStatus = 'MySQL e�l�w tor���';
$strMySQLShowVars = 'MySQL �zg�rm�l�re';

$strName = 'Ad�';
$strNext = 'Kil�se';
$strNoActivity = 'Kimend� %s sekund e�l�mi tord�q, �u�a k�r� ya�adan ker�se';
$strNoDatabases = 'Biremlekl�r yuq';
$strNoDatabasesSelected = 'Biremlek saylanma�an.';
$strNoDescription = 'A��qlamas�z';
$strNoDetailsForEngine = 'Bu saqlaw engine ��en x�l�t tur�nda centekle belem yuq.';
$strNoDropDatabases = '"DROP DATABASE" c�nl�l�re s�nderelg�n.';
$strNoExplain = 'SQL Centekl�m�sk�';
$strNoFilesFoundInZip = 'ZIP-tuplama e�end� biremn�r tab�lmad�!';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoIndex = 'A�q�� bilgel�nm�de!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoModification = '�zg�re�sez';
$strNone = 'Bu�';
$strNoOptions = 'Bu t�zele�ene� k�yl�ne�e yuq';
$strNoPassword = 'Sers�zsez';
$strNoPermission = 'The web server does not have permission to save the file %s.';
$strNoPhp = 'PHP Kod�s�z';
$strNoPrivileges = 'Xoquqs�z';
$strNoRights = 'Bonda bulu ��en, xoquqlar�� citmi!';
$strNoRowsSelected = 'Kertemn�r saylad�';
$strNoSpace = '"%s" biremen saqlaw ��en bu� ara citmi.';
$strNoTablesFound = 'Bu biremlekt� ber gen� d� t���m� yuq.';
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';
$strNotNumber = 'San t�gel bu!';
$strNotOK = 'OK t�gel';
$strNotSet = '<b>%s</b> atl� t���m� yuq, y� ki "%s" tezm�sen� kermi';
$strNoUsersFound = 'Qullanu�� yuq.';
$strNoValidateSQL = 'SQL Tik�erm�sk�';
$strNo = 'Yuq';
$strNull = 'Bu�';
$strNumberOfFields = 'Alannar san�';
$strNumSearchResultsInTable = '%s kile�� bar, <i>%s</i> atl� t���m�d�';
$strNumSearchResultsTotal = '<b>Tulay�m:</b> <i>%s</i> kile��';
$strNumTables = 'T���m�';

$strOK = 'OK';
$strOpenNewWindow = 'Ya�a phpMyAdmin-t�r�z� a�u';
$strOperations = 'E�k�rt�';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimize table';
$strOr = 'Y�';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Birem bar bulsa, �st�n yazd�ras�';

$strPageNumber = 'Bitne� san�:';
$strPagesToBeFlushed = 'Bu�atas� bit';
$strPaperSize = 'Q���z zuql���';
$strPartialImport = '�le��� y�kl�w';
$strPartialText = 'Partial Texts';
$strPasswordChanged = '"%s" ��en sezs�z �zg�rt� u���l� uzd�.';
$strPasswordEmpty = 'Sers�ze� bu�!';
$strPasswordHashing = 'Sers�z Hash\'law';
$strPasswordNotSame = 'Sers�zl�r berbersen� kile�mi!';
$strPassword = 'Sers�z';
$strPdfDbSchema = '"%s" biremlek t�zele�e - %s. bit';
$strPdfInvalidTblName = '"%s" atl� t���m� yuq �le!';
$strPdfNoTables = 'Ber�r gen� d� t���m� yuq';
$strPDF = 'PDF';
$strPDFReportTitle = 'Yom�aq ba�l���';
$strPerHour = 's���t say�n';
$strPerMinute = 'minut say�n';
$strPerSecond = 'sekund say�n';
$strPersian = 'Fars��a';
$strPhoneBook = 'telefon d�ft�re';
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPhp = 'PHP-Kod yasa';
$strPHPVersion = 'PHP S�reme';
$strPmaDocumentation = 'phpMyAdmin qullanmas�';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPolish = 'Pol�a';
$strPortrait = 'Bat�r�p';
$strPos1 = 'Ba�law�a';
$strPrevious = 'Uz�an';
$strPrimaryKeyHasBeenDropped = 'T�p a�q�� beterelde';
$strPrimaryKeyName = 'Bu t�p a�q��n�� ad� "PRIMARY" bul�r�a tie�!';
$strPrimaryKeyWarning = '(T�p a�q��n�� <b>��na</b> ad� "PRIMARY" bul�r�a <b>tie�</b>!)';
$strPrimary = 'T�p';
$strPrint = 'Bast�r';
$strPrintView = 'Bast�ru k�rene�e';
$strPrintViewFull = 'Bast�ru k�rene�e (bar m�tenn�r bel�n)';
$strPrivDescAllPrivileges = 'GRANT\'tan basqa bar xoquqlar da bar.';
$strPrivDescAlter = 'Bired� bul�an t���m� t�zele�en �zg�rt� xoquq�.';
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';
$strPrivDescCreateDb = 'Ya�a biremlek/t���m� yasaw xoquq�.';
$strPrivDescCreateRoutine = 'Saqlan�an funks�lar qor�r�a bir�.';
$strPrivDescCreateTbl = 'Ya�a t���m� yasaw xoquq�.';
$strPrivDescCreateTmpTable = 'Waq�tl� t���m� yasaw xoquq�.';
$strPrivDescCreateUser = 'Qullanu�� x�sab�n qoru/salu/ataw e�en q�l�r�a bir�.';
$strPrivDescCreateView = 'Ya�a qara� qor�r�a bir�.';
$strPrivDescDelete = 'E�t�lek beter� xoquq�.';
$strPrivDescDropDb = 'Biremlek/t���m� beter� xoquq�.';
$strPrivDescDropTbl = 'T���m� beter� xoquq�.';
$strPrivDescExecute5 = 'E�ke funks�lar e�l�ttererg� bir�.';
$strPrivDescExecute = 'E�ke prosedur cib�r� xoquq�; MySQL\'n�� bu s�remend� yuq �le ul.';
$strPrivDescFile = 'Allows importing data from and exporting data into files.';
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege t���m�.';
$strPrivDescIndex = 'A�q��larn� qoru/beter� xoquq�.';
$strPrivDescInsert = 'E�t�lek �st�w/alma�t�ru xoquq�.';
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
$strPrivDescSelect = 'E�t�lekne uqu xoquq�.';
$strPrivDescShowDb = 'Gives access to the complete list of databases.';
$strPrivDescShowView = 'SHOW CREATE VIEW sorawlar�n e�l�terlek it�.';
$strPrivDescShutdown = 'Serverne tuqtatu xoquq�.';
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.';
$strPrivDescUpdate = 'E�t�lek �zg�rt� xoquq�.';
$strPrivDescUsage = 'Xoquqlar yuq.';
$strPrivilegesReloaded = 'Bu xoquqlarn� y�kl�w u���l� uzd�.';
$strPrivileges = 'Xoquqlar';
$strProcesses = 'Proseslar';
$strProcesslist = 'Proses isemlege';
$strProtocolVersion = 'Protokol s�reme';
$strPutColNames = 'Beren�e yulda alannarn�� iseme ���aras�';

$strQBEDel = 'Sal';
$strQBEIns = 'T�q';
$strQBE = 'Soraw';
$strQueryCache = 'Soraw alx�tere';
$strQueryFrame = 'Soraw t�r�z�se';
$strQueryOnDb = '<b>%s</b> biremlegen� SQL-soraw:';
$strQueryResultsOperations = 'Soraw qaytarmas�n e�k�rt�';
$strQuerySQLHistory = 'SQL-tar�x�';
$strQueryStatistics = '<b>Soraw n�f�se</b>: Bu server y�kl�nn�n birle, a�a taba %s soraw kilg�n.';
$strQueryTime = 'Soraw e�k�rt� %01.4f sek ald�';
$strQueryType = 'Soraw t�re';
$strQueryWindowLock = 'Bu sorawn�, t�r�z� t���nda bul�an� bel�n alma�t�ras� t�gel';

$strReadRequests = 'Uqu�a soraw';
$strReceived = 'Al�nd�';
$strRecords = 'Yazma';
$strReferentialIntegrity = 'B�yl�ne�l�rne d�reslekk� tik�er�:';
$strRefresh = 'Ya�art';
$strRelationalSchema = 'B�yl�ne�l�r sxeme';
$strRelationNotWorking = 'B�yl�ne�t� tor�an t���m� bel�n e�l�p bulmas, �st�m� e�li-alu s�nek tora. An� qab�zu ��en, %sbonda �irt�se%s.';
$strRelations = 'B�yl�ne�l�r';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelationView = 'B�yl�ne�k� k�z�t�';
$strReloadingThePrivileges = 'Bu xoquqlarn� y�kl�';
$strReloadPrivileges = 'Xoquqlarn� qabat y�kl�w';
$strRemoveSelectedUsers = 'Saylan�an qullanu�� beter�';
$strRenameDatabaseOK = '"%s" biremlege "%s" itep atald�';
$strRenameTableOK = '"%s" t���m�se "%s" itep atald�';
$strRenameTable = 'T���m� ad�n �zg�rt�';
$strRepairTable = 'T���m� t�z�t�';
$strReplaceNULLBy = 'NULL\'n� alma�t�ras�:';
$strReplaceTable = 'T���m� e�t�legen bu biremlekt�ge bel�n alam�t�ras�';
$strReset = 'Awdar';
$strResourceLimits = 'Resurs �ikl�wl�re';
$strReType = 'Qabatla';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Qullanu�� xoquqlar�n awdar�p beter�se.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'T��er';
$strRomanian = 'Roman�a';
$strRowLength = 'Kerem oz�nl���';
$strRowsFrom = 'kerem; beren�ese #';
$strRowSize = ' Kerem ol�l���';
$strRows = 'Kerem';
$strRowsModeFlippedHorizontal = 'yatq�r�p (ba�l�qlar alma��p)';
$strRowsModeHorizontal = 'yatq�r�p';
$strRowsModeOptions = '%s �sul� bel�n; ba�l�qn� %s yul say�n qabatl�s�';
$strRowsModeVertical = 'bast�r�p';
$strRowsStatistic = 'Kerem N�f�se';
$strRunning = 'Sanaq: %s';
$strRunQuery = 'Sorawn� Yulla';
$strRunSQLQueryOnServer = '%s dig�n serverd� SQL-soraw e�l�t�';
$strRunSQLQuery = '%s biremlegend� e�l�t�se SQL-soraw';
$strRussian = 'Ur�s�a';

$strSaveOnServer = 'Serverne� "%s" t�rg�gend� saqla';
$strSave = 'Saqla';
$strScaleFactorSmall = 'Bu sxemn� ber bitt� urna�t�ru ��en, ol�l�q san� bik ke�e';
$strSearch = 'Ezl�w';
$strSearchFormTitle = 'Biremlekt� ezl�w: ';
$strSearchInTables = 'Kil�se t���m� e�end�:';
$strSearchNeedle = 'Tabas� s�z/b�y� tezm�se (alma�bilgese: "%"):';
$strSearchOption1 = 'ber�rse bulsa';
$strSearchOption2 = 'bar�s� da bulsa';
$strSearchOption3 = 'tul� tezm�, t�g�l kile�';
$strSearchOption4 = 'regexp kile�';
$strSearchResultsFor = '"<i>%s</i>" ezl�w n�tic�se %s:';
$strSearchType = 'Ezl�w:';
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';
$strSelectADb = 'Ber�r biremlek sayl�s�';
$strSelectAll = 'Saylap Beter';
$strSelectBinaryLog = 'Qaraw ��en binar k�nd�lek saylaw';
$strSelectFields = 'Alannar sayl�s� (i� kimend� ber):';
$strSelectNumRows = 'sorawda';
$strSelectTables = 'T���m� Saylaw';
$strSend = 'Biremg� saql�ys�';
$strSent = 'Cib�relde';
$strServerChoice = 'Server Saylaw';
$strServerNotResponding = 'Bu server end��mi';
$strServer = 'Server';
$strServers = 'Serverl�r';
$strServerStatusDelayedInserts = 'Ki�erelg�n �st�w';
$strServerStatus = 'E�l�w Tor���';
$strServerStatusUptime = 'Bu MySQL-server %s e�li. %s �or�nda cib�relg�n ide ul.';
$strServerTabVariables = '�zg�rm�l�r';
$strServerTrafficNotes = '<b>Server ta��m�</b>: MySQL-server cib�relg�nn�n birle, an�� bel�n �elt�r aras�nda bul�an ta��m tur�nda belem bonda�� t���m� e�end� birel�.';
$strServerVars = 'Server �zg�rm�l�re &amp; k�yl�ne�e';
$strServerVersion = 'Server s�reme';
$strSessionValue = 'Sessi b�y�se';
$strSetEnumVal = 'Alan t�re "enum/set" bulsa, b�y�sen bolayraq kert�se: \'a\',\'b\',\'c\'...<br />B�y� e�en� kireaw�� ("\") y� s��arquote ("\'") kert�se bulsa, an� kireaw��t�ras� bula (�rn�k: \'\\\\xyz\' y� ki \'a\\\'b\').';
$strShowAll = 'Bar�s�n k�rs�t';
$strShowColor = 'T�sle k�rs�t';
$strShowDatadictAs = 'E�t�lek S�zlegene� T�zele�e';
$strShowFullQueries = 'Tul� Sorawlar K�rs�t';
$strShowGrid = 'S�rl� k�rs�t';
$strShowingBookmark = 'Bitbilge k�rs�t�';
$strShowingRecords = 'Yazma san�:';
$strShow = 'K�rs�t';
$strShowOpenTables = 'A��q t���m� tezm�se';
$strShowPHPInfo = 'PHP tur�nda';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Bu� bitl�r san�.';
$strShowStatusInnodb_os_log_writtenDescr = 'K�nd�lek biremen� yaz�l�an bayt san� bu.';
$strShowStatusInnodb_pages_createdDescr = 'Yarat�l�an bit san� bu.';
$strShowStatusInnodb_page_sizeDescr = 'InnoDB yasa�anda bit ��en berketelg�n k�l�me (t�cay b�y�se 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';
$strShowStatusInnodb_pages_readDescr = 'Uq�l�an bit san� bu.';
$strShowStatusInnodb_pages_writtenDescr = 'Yaz�l�an bit san� bu.';
$strShowStatusOpen_filesDescr = 'A��q toru�� birem san�.';
$strShowStatusOpen_tablesDescr = 'A��q toru�� t���m� san�.';
$strShowStatusQcache_hitsDescr = 'Alx�terg� tur� kil� san� bu.';
$strShowStatusReset = 'Awdar';
$strShowStatusSort_rowsDescr = 'Tezelg�n yazma san� bu.';
$strShowStatusThreads_connectedDescr = 'Bired� a��q bul�an tota�u san�.';
$strShowTableDimension = 'T���m� �l��men k�rs�t�';
$strShowTables = 'T���m�l�r k�rs�t�se';
$strShowThisQuery = ' Bu sorawn� qabat k�rs�t�se';
$strSimplifiedChinese = 'Ci�el �in��';
$strSingly = '(s��ar)';
$strSize = 'K�l�me';
$strSkipQueries = 'Ba�tan �tep kit�se yazma san�';
$strSlovak = 'Slovak�a';
$strSlovenian = 'Sloven�a';
$strSocketProblem = '(y� cirle MySQL-server soket� d�res k�yl�nm�g�n ide)';
$strSortByKey = 'Qullanas� teze�';
$strSorting = 'Tez�';
$strSort = 'Tez�';
$strSpaceUsage = 'Tot�l�an Alan';
$strSpanish = '�span�a';
$strSplitWordsWithSpace = 'S�zl�rne bu�l�q bilgese bel�n ay�ras� (" ").';
$strSQLCompatibility = 'SQL, kile�ter� �sul�';
$strSQLExportType = '���aru �sul�';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL-soraw';
$strSQLResult = 'SQL qaytar���';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Tan�tmas� Yaraqs�z';
$strSQPBugUnclosedQuote = 'Yab�lma�an c�y�';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strStatCheckTime = 'So��� tik�er�';
$strStatCreateTime = 'Yasal���';
$strStatement = 'C�ml�';
$strStatUpdateTime = 'So��� ya�art�lu';
$strStatus = 'Tor��';
$strStorageEngine = 'Saqlaw Isul�';
$strStorageEngines = 'Saqlaw Isul�';
$strStrucCSV = 'CSV bireme';
$strStrucData = 'T�zele�en d�, e�t�legen d�';
$strStrucExcelCSV = 'CSV bireme, MS Excel ��en';
$strStrucNativeExcel = 'MS Excel t�zele�end�';
$strStrucOnly = 'T�zele�en gen�';
$strStructPropose = 'T���m� t�zele�en� k�z�t�';
$strStructure = 'T�zele�';
$strSubmit = 'K�nder';
$strSuccess = 'SQL-soraw�� u���l� e�k�rtelde';
$strSum = 'Sum';
$strSwedish = '�sw�c��';
$strSwitchToDatabase = 'K�b�ytelg�n biremlekk� k���se';
$strSwitchToTable = 'K�b�ytelg�n t���m�g� k���se';

$strTableAlreadyExists = '%s atl� t���m� bar inde!';
$strTableComments = 'T���m� a��qlamas�';
$strTableEmpty = 'T���m� ad� kertelmi qald�!';
$strTableHasBeenDropped = '"%s" atl� t���m� beterelde';
$strTableHasBeenEmptied = '"%s" atl� t���m� bu�at�ld�';
$strTableHasBeenFlushed = '"%s" atl� t���m� awdar�ld�';
$strTableMaintenance = 'T���m� e�k�rt�';
$strTableOfContents = 'E�t�lek isemlege';
$strTableOptions = 'T���m� k�yl�ne�e';
$strTables = '%s t���m�';
$strTableStructure = 'T���m� t�zele�e';
$strTable = 'T���m�';
$strTakeIt = 'bon� sayla';
$strTblPrivileges = 'Ber�r t���m� ��en xoquqlar';
$strTempData = '�aql� birem';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable';
$strThai = 'Tay�a';
$strThemeDefaultNotFound = '%s dig�n t�p t��law tab�lmad�!';
$strThemeNotFound = '%s dig�n t��law tab�lmad�!';
$strThemeNoValidImgPath = '%s dig�n t��law s�r�tl�re ur�nla�qan yul tab�lmad�!';
$strThemePathNotFound = '%s dig�n t��law ur�nla�qan yul tab�lmad�!';
$strTheme = 'T��law / Biz�le�';
$strThisHost = 'Bu Sanaq';
$strThreads = 'Cepl�r';
$strThreadSuccessfullyKilled = '%s cebe u���l� �terelg�n buld�.';
$strTime = 'Waq�t';
$strToggleScratchboard = 'Toggle scratchboard';
$strTotal = 'tulay�m';
$strTotalUC = 'Tulay�m';
$strTraditionalChinese = '��d�ti �in��';
$strTraditionalSpanish = '��d�ti �span�a';
$strTraffic = 'Ta��m';
$strTransactionCoordinator = 'E�-ara id�r��ese';
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX �I�A: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';
$strTruncateQueries = 'Sorawn� Q�sqart�p K�rs�t�se';
$strTurkish = 'T�rek��';
$strType = 'T�re';

$strUkrainian = 'Ukrain�a';
$strUncheckAll = 'Saylanun� T��er';
$strUnicode = 'Unicode';
$strUnique = 'Qabats�z';
$strUnknown = 'belgesez';
$strUnselectAll = 'Saylanun� T��er';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Sorawn� Ya�art';
$strUpdComTab = 'Sine� Column_comments T���m� ya�artu e�e tur�nda Qullanmada qar�s�';
$strUpgrade = 'You should upgrade to %s %s or later.';
$strUsage = 'Tot�lu';
$strUseBackquotes = 'T���m�/alan isemn�ren kirequote e�en� salas�';
$strUsedPhpExtensions = 'PHP �st�m�se qullan�la';
$strUseHostTable = 'Host T���m� e�enn�n';
$strUserAlreadyExists = '"%s" atl� qullanu�� bar inde!';
$strUserEmpty = 'Atama bu�!';
$strUserName = '�re�� iseme';
$strUserNotFound = 'Bu qullanu�� xoquqlar t���m� e�end� tab�lmad�.';
$strUserOverview = 'Qullanu��lar tezm�se';
$strUser = 'Qullanu��';
$strUsersDeleted = 'Saylan�an qullanu��n� beter� u���l� uzd�.';
$strUsersHavingAccessToDb = '"%s" bel�n e�l�w xoquq� bul�an qullanu��lar';
$strUseTabKey = 'Ber b�y�d�n iken�eg� k��� ��en TAB t�ym�sen qullanas�, ba�qa cirg� k��� ��en, CTRL+uq t�ym�l�re bar';
$strUseTables = 'T���m� qullan�p';
$strUseTextField = 'Bu m�tenn�n';
$strUseThisValue = 'Bu b�y� bel�n';

$strValidateSQL = 'SQL\'n� Tik�er';
$strValidatorError = 'SQL-tik�er��e k�yl�nm�g�n. Bu kir�k bul�an php-y�kl�m�ne k�yl�w tur�nda %squllanmada%s uq�p bula.';
$strValue = 'B�y�';
$strVar = '�zg�rm�';
$strVersionInformation = 'S�reme tur�nda';
$strViewDumpDatabases = 'Biremlekl�rne� e�t�legen (t�zele�en) ���aru';
$strViewDumpDB = 'Biremlek e�t�legen (t�zele�en) ���aru';
$strViewDump = 'T���m� e�t�legen (t�zele�en) ���aru';
$strViewHasBeenDropped = '"%s" atl� Qara� beterelg�n buld�';
$strView = 'Qara�';

$strWebServerUploadDirectoryError = 'Y�kl�w ��en bigel�ng�n t�rg�kne uq�p bulm�';
$strWebServerUploadDirectory = 'web-server\'ne� y�kl�w t�rg�ge';
$strWelcome = '%s si�a �s��me di';
$strWestEuropean = 'Bat�� Awrup�';
$strWildcard = 'alma�bilge';
$strWindowNotFound = 'Browsern�� maqsat t�r�z�se ya�art�lm� qald�. Ana-t�r�z� yab�l�an bul�an b�lki, y� browserne� iminlek caylaw�nda t�r�z�-ara ya�artu t�y�l�an bul�p tora.';
$strWithChecked = 'Saylan�ann�:';
$strWriteRequests = 'Yazu�a soraw';
$strWrongUser = 'Atama/sers�ze� yal��� bulu�na k�r� ire�ep bulmad�.';

$strXML = 'XML';

$strYes = '�ye';

$strZeroRemovesTheLimit = 'Bel�se: 0 (n�l) kertelg�n �aqta �ikl�we beterel�.';
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
