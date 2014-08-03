<?php
/* $Id: belarusian_cyrillic-windows-1251.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 *     Translated by:
 *     Jaska Zedlik <jz53 at zedlik.com>
 *     http://www.zedlik.com
 */

$charset = 'windows-1251';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('�', '�i�', '̳�', 'ó�', 'ҳ�', 'ϳ�', 'ݳ�');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '���', '���', '˳�', '���', '���', '���', '˳�', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s ���, %s ������, %s ����� � %s �������';

$strAbortedClients = '�������';
$strAccessDeniedCreateConfig = '��������, ������� ������ � ���, ��� �� �������� �������������� ����. ��� ��� ��������, ����� ����������� %1$s��������� ������%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin ���������� ���������� �� ������� MySQL, ��� ������ ����볢 ���������. �������� ��� �����, ������������� � ������ � config.inc.php � ����������, ��� ��� ����������� ����������, ���� �� ������������ MySQL-�������.';
$strAccessDenied = '� ������� ��������';
$strAction = '��������';
$strAddAutoIncrement = '������ ��������� AUTO_INCREMENT';
$strAddClause = '������ %s';
$strAddConstraints = '������ ������������';
$strAddDeleteColumn = '������/������� ������ �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddFields = '������ %s ����� ���';
$strAddHeaderComment = '������ �������� �������� � ��������� (\\n �������� ����)';
$strAddIntoComments = '������ � ���������';
$strAddNewField = '������ ����� ����';
$strAddPrivilegesOnDb = '������ ������ �� ��������� ����';
$strAddPrivilegesOnTbl = '������ ������ �� ��������� ������';
$strAddSearchConditions = '������ ����� ������ (���� ��� ����� "where"):';
$strAddToIndex = '������ �� ������� &nbsp;%s&nbsp;������(�)';
$strAddUser = '������ ������ �������������';
$strAddUserMessage = '��� ��������� ���� ������������.';
$strAdministration = '���������������';
$strAffectedRows = '���������� ����:';
$strAfter = '������ %s';
$strAfterInsertBack = '��������� �� ���������� �������';
$strAfterInsertNewInsert = '������ ���� ���� �����';
$strAfterInsertNext = '���������� �������� �����';
$strAfterInsertSame = '�������� �� ����� �������';
$strAll = '���';
$strAllowInterrupt = '�������� ��������� ������������� � �������, ��� ������ ����������, ��� ����������� ��� ����������. ���� ���� ���� ������ �������� ������������� ����� �����, �����, ���� ���� ���������� ����������.';
$strAllTableSameWidth = '�������� ��� ������ ����������� ������?';
$strAlterOrderBy = '�������� ������� ������';
$strAnalyzeTable = '���������� ������';
$strAnd = '�';
$strAndThen = '� ������';
$strAnIndex = '��� ��������� ������ ��� %s';
$strAny = '����';
$strAnyHost = '���� ����';
$strAnyUser = '���� ������������';
$strApproximateCount = '���� ���� ���������. ��. FAQ 3.11';
$strAPrimaryKey = '�������� ���� ��� ��������� �� %s';
$strArabic = '��������';
$strArmenian = '���������';
$strAscending = '�����';
$strAtBeginningOfTable = '� ������� ������';
$strAtEndOfTable = '� ����� ������';
$strAttr = '��������';
$strAutomaticLayout = '������������ �������������';

$strBack = '�����';
$strBaltic = '����������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = '��������';
$strBinaryDoNotEdit = '��������� �������� � �� ����������';
$strBinaryLog = '�������� ���';
$strBinLogEventType = '��� �����';
$strBinLogInfo = '����������';
$strBinLogName = '��� ����';
$strBinLogOriginalPosition = '��������������� �������';
$strBinLogPosition = '�������';
$strBinLogServerId = 'ID �������';
$strBookmarkAllUsers = '���� ������� ������������� ������ �� ����� �������';
$strBookmarkCreated = '�������� %s ���������';
$strBookmarkDeleted = '�������� ���� ���������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '���������� SQL-�����';
$strBookmarkReplace = '�������� ����� �������� � ���� �� ����';
$strBookmarkThis = '������ ���� SQL-����� � �������';
$strBookmarkView = '����� �������';
$strBrowseDistinctValues = '������� ������ ����������';
$strBrowseForeignValues = '����������� �������� ���������';
$strBrowse = '�������';
$strBufferPoolActivity = '����������� ���� ������';
$strBufferPool = '��� ������';
$strBufferPoolUsage = '������������� ���� ������';
$strBufferReadMisses = '�������� ��������';
$strBufferReadMissesInPercent = '�������� �������� � %';
$strBufferWriteWaits = '�������� �����';
$strBufferWriteWaitsInPercent = '�������� ����� � %';
$strBulgarian = '���������';
$strBusyPages = '������� ��������';
$strBzError = 'phpMyAdmin �� ���� ��������� ���� �-�� �������� � ����������� Bz2 � ����� ���� PHP. ������ ������������� ��������� ��������� ��������� <code>$cfg[\'BZipDump\']</code> � ����� ��������������� ����� phpMyAdmin �� <code>FALSE</code>. ��� �� ������� ������������� Bz2-������, ��� ��������� ������� ����� PHP. ����������� �� PHP bug report %s ��� ����� ����������� ����������.';
$strBzip = '��������� � bzip';

$strCalendar = '��������';
$strCanNotLoadExportPlugins = '��������� �������� ������ ��������������, ��� �����, �������� ����������� �����!';
$strCanNotLoadImportPlugins = '��������� �������� ������ �������������, ��� �����, �������� ����븢��!';
$strCannotLogin = '��������� ����������� �� ������ MySQL';
$strCantLoad = '��������� �������� ���������� %s;<br />��� �����, �������� ������������ PHP';
$strCantLoadRecodeIconv = '��������� �������� ���������� iconv ��� ���������� recode, ���������� ��� �������������� ��������. ��������� PHP �� ������������� ����� ����������� ��� ������� ��������� �������������� �������� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '��������� ����������� �� ������� iconv, �� libiconvr, �� recode_string � ��� ���, �� ���������� ����������, ��� ��� ����������. �������� ����� ������������ PHP.';
$strCardinality = '���������� ��������';
$strCaseInsensitive = '��� ���� �������';
$strCaseSensitive = '� ����� �������';
$strCentralEuropean = '���������������������';
$strChangeCopyModeCopy = '... ������� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� ������� � ������ ������������� � ������ ������������ ������.';
$strChangeCopyModeJustDelete = ' ... ������� ������� � ������ �������������.';
$strChangeCopyMode = '�������� ������ ������������� � ���� � �������� � ...';
$strChangeCopyModeRevoke = ' ... ��������� ��� �������� ������ ������� � ������ ������� ���.';
$strChangeCopyUser = '�������� ������������� ���������� / �������� �������������';
$strChange = '��������';
$strChangeDisplay = '�������� ���� ��� ��������������';
$strChangePassword = '�������� ������';
$strCharset = '��������';
$strCharsetOfFile = '�������� �����:';
$strCharsetsAndCollations = '�������� � �������������';
$strCharsets = '�������';
$strCheckAll = '��������� ��';
$strCheckOverhead = '��������� ���, ��� ���������� ����������';
$strCheckPrivs = '��������� ������';
$strCheckPrivsLong = '��������� ������ ��� ���� &quot;%s&quot;.';
$strCheckTable = '��������� ������';
$strChoosePage = '��� �����, �������� �������� ��� ������������';
$strColComFeat = '��������� ��������� ������';
$strCollation = '�������������';
$strColumnNames = '����� ������';
$strColumnPrivileges = '����������� ������ ������';
$strCommand = '�������';
$strComments = '���������';
$strCommentsForTable = '��������� �� ������';
$strCompatibleHashing = '������������ � MySQL&nbsp;4.0';
$strCompleteInserts = '����� ������';
$strCompression = '������';
$strCompressionWillBeDetected = '����� ������� ������������� ����� ����� ���������� ���������� �: %s';
$strConfigDefaultFileError = '��������� �������� ������������ �� ��������� �: "%1$s"';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� �������������� ����!<br />���� ���� ������� � �������, ��� PHP ������� ������������ ������� � �� ��� ��� PHP �� ���� �������� ����.<br />��� �����, �������� �������������� ���� ����������, �������������� ��������, ����������� �����, � ���������� ������������� PHP ��� ������. � ���������� �������, ����� ���������� �������� ��� ������ � ������.<br />��� �� ��������� ������ ��������, �������, �� �����.';
$strConfigureTableCoord = '��� �����, ������������� ���������� ��� ������ %s';
$strConnectionError = '��������� ����������: ����������� ������.';
$strConnections = '�����������';
$strConstraintsForDumped = '������������ ��� ������������� �����';
$strConstraintsForTable = '������������ ��� ������';
$strCookiesRequired = 'Cookies ������ ���� ��������� ������ ������ �����.';
$strCopyDatabaseOK = '���� �������� %s ���� ���������� � %s';
$strCopy = '���������';
$strCopyTable = '��������� ������ � (���� ��������<b>.</b>������):';
$strCopyTableOK = '������ %s ���� ���������� � %s.';
$strCopyTableSameNames = '��������� ��������� ������ � ���� ����!';
$strCouldNotKill = 'phpMyAdmin �� ���� ������� ������ %s. �������, �� ��� �������.';
$strCreateDatabaseBeforeCopying = '�������� CREATE DATABASE ����� �����������';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;�������';
$strCreateIndexTopic = '�������� ���� ������';
$strCreateNewDatabase = '�������� ����� ���� ��������';
$strCreateNewTable = '�������� ����� ������ � �� %s';
$strCreate = '��������';
$strCreatePage = '�������� ����� ��������';
$strCreatePdfFeat = '���������� PDF-�����';
$strCreateUserDatabase = '���� �������� ��� �������������';
$strCreateUserDatabaseName = '�������� ���� �������� � ���� ����� ���� � �������� ��� ��������';
$strCreateUserDatabaseNone = 'ͳ����';
$strCreateUserDatabaseWildcard = '�������� ��� �������� ���� � ������ �� ����� (��� �������������_%)';
$strCreationDates = '����������/����������/�������� ���';
$strCriteria = '������';
$strCroatian = '���������';
$strCSV = 'CSV';
$strCyrillic = 'ʳ�������';
$strCzechSlovak = '�������������';
$strCzech = '������';

$strDanish = '������';
$strData = '��������';
$strDatabase = '���� ��������';
$strDatabaseEmpty = '��� ���� �������� �� ����������!';
$strDatabaseExportOptions = '������ �������� ���� ��������';
$strDatabaseHasBeenDropped = '���� �������� %s ���� ���������.';
$strDatabases = '���� ��������';
$strDatabasesDropped = '%s ���� �������� ��� ���������� ���������.';
$strDatabasesStatsDisable = '��������� ����������';
$strDatabasesStatsEnable = '�������� ����������';
$strDatabasesStatsHeavyTraffic = '������: ���������� ��������� ���� �������� ���� �������� ������ ���������� ������� ���� ���-�������� � �������� MySQL.';
$strDatabasesStats = '���������� ���� ��������';
$strDataDict = '������ ��������';
$strDataOnly = '����� ��������';
$strDataPages = '�������� � ��������';
$strDBComment = '�������� �� ���� ��������: ';
$strDBCopy = '�������� ���� �������� �';
$strDbPrivileges = '����������� ������ ���� ��������';
$strDBRename = '������������� ���� �������� �';
$strDbSpecific = '���������� ��� ���� ��������';
$strDefaultEngine = '%s ���������� ������� ���������� �������� �� ��������� �� ����� MySQL-�������.';
$strDefault = '�� ���������';
$strDefaultValueHelp = '��� ���������� �� ���������, ��� �����, ������� ������ ���������, ��� ������������� ��������� ����� � ���������, �������������� ������: a';
$strDefragment = '��������������� ������';
$strDelayedInserts = '������������� ����������� �����';
$strDeleteAndFlush = '������� ������������� � ������ ������������ ������.';
$strDeleteAndFlushDescr = '���� ����� ������, ��� ������������ �������� ���� ������ ����� ���.';
$strDelete = '�������';
$strDeleted = '����� ��� ��������';
$strDeletedRows = '��������� ����:';
$strDeleteNoUsersSelected = '�� �������� ������������ ��� ����������!';
$strDeleting = '���������� %s';
$strDelimiter = '��������������';
$strDelOld = '������� �������� ��������� ������� �� ������, ��� ����� �� �������. ֳ ������� �� ������� ����� �������?';
$strDescending = '���������';
$strDescription = '��������';
$strDictionary = '������';
$strDirtyPages = '������� ��������';
$strDisabled = '���������';
$strDisableForeignChecks = '��������� �������� �������� �����';
$strDisplayFeat = '��������� �����������';
$strDisplayOrder = '������� ��������:';
$strDisplayPDF = '�������� PDF-�����';
$strDoAQuery = '�������� "����� ������ ��������" (������� ���������: "%")';
$strDocu = '������������';
$strDoYouReally = 'ֳ ������� �� ������� ';
$strDrop = '�������';
$strDropDatabaseStrongWarning = '�� �������� ����˲�� ���� �������� ������!';
$strDropUsersDb = '������� ���� ��������, ��� ����� ���� � ���� �� � ������������.';
$strDumpingData = '���� �������� ������';
$strDumpSaved = '���� �������� � ���� %s.';
$strDumpXRows = '���� %s �����, ��������� � %s.';
$strDynamic = '��������';

$strEditPDFPages = '���������� PDF-�������';
$strEditPrivileges = '���������� ������';
$strEdit = '����������';
$strEffective = '�������������';
$strEmpty = '���������';
$strEmptyResultSet = 'MySQL ������� ����� ����� (�� ��� ���� �����).';
$strEnabled = '��������';
$strEncloseInTransaction = '������������ �� ���� ����������';
$strEndCut = 'END CUT';
$strEnd = '�����';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s ��������� �� ����� MySQL-�������.';
$strEngineDisabled = '%s ���� ���������� ��� ������ MySQL-�������.';
$strEngines = '������';
$strEngineUnsupported = '���� ������ MySQL �� ����������� ������ ���������� �������� %s.';
$strEnglish = '����������';
$strEnglishPrivileges = ' ������: ���� �������� MySQL �������� ��-��������� ';
$strError = '�������';
$strErrorInZipFile = '������� � ZIP-������:';
$strErrorRenamingTable = '������� ��������������� ������ %1$s � %2$s';
$strEscapeWildcards = '������ ��������� _ � % ������ ���� ����������� �������� \ ��� �� ����������� �������������';
$strEsperanto = '���������';
$strEstonian = '���������';
$strExcelEdition = '����� Excel';
$strExecuteBookmarked = '�������� ����� � ��������';
$strExplain = '��������� SQL';
$strExportMustBeFile = '�������� ��������� ���� �������������� ������ ���� ��������� � ����!';
$strExport = '�������';
$strExtendedInserts = '��������� �����';
$strExtra = '���������';

$strFailedAttempts = '�������� ������';
$strFieldHasBeenDropped = '���� %s ���� ���������';
$strField = '����';
$strFieldsEnclosedBy = '��� ������ �';
$strFieldsEscapedBy = '��� ����������';
$strFields = '���';
$strFieldsTerminatedBy = '��� ����������';
$strFileAlreadyExists = '���� %s ��� ����� �� �������, �������� ��� ����� ��� �������� ����� ���������.';
$strFileCouldNotBeRead = '��������� ��������� ����';
$strFileNameTemplateDescription = '����� ��������� �������������� � �������������� %1$sstrftime%2$s, ���� ����� ������������� ���� ������������� ����. ����� ������, ������ ����������� ��������� ������: %3$s. ������� ����� ���������� �� �����.';
$strFileNameTemplateDescriptionDatabase = '��� ���� ��������';
$strFileNameTemplateDescriptionServer = '��� �������';
$strFileNameTemplateDescriptionTable = '��� ������';
$strFileNameTemplate = '����� ����� �����';
$strFileNameTemplateRemember = '��������� �����';
$strFileToImport = '����������� ����';
$strFixed = '���������';
$strFlushPrivilegesNote = '������: phpMyAdmin ��������� ������ ������������� ���������� � ����� �������� MySQL. ���������� ����� ����� ���� ������������� �� ��������, ��� ������������ ������, ��� ��� ��� ��������� �������. � ����� ������� ��� ����� %s������������ ������%s �� ����, �� �� ����������.';
$strFlushQueryCache = '������ ��� ������';
$strFlushTable = '������ ��� ������ ("FLUSH")';
$strFlushTables = '������ (�������) ��� ������';
$strFontSize = '����� ������';
$strFormat = '������';
$strFormEmpty = '�� ���������� ��������� � �����!';
$strFreePages = '������� ��������';
$strFullText = '����� ������';
$strFunction = '�������';
$strFunctions = '�������';

$strGenBy = '��������';
$strGeneralRelationFeat = '����������� ������� �������';
$strGenerate = '�����������';
$strGeneratePassword = '����������� ������';
$strGenTime = '��� ����������';
$strGeorgian = '���������';
$strGerman = '��������';
$strGlobal = '���������';
$strGlobalPrivileges = '���������� ������';
$strGlobalValue = '���������� ���������';
$strGo = '���������';
$strGrantOption = 'Grant';
$strGreek = '�������';
$strGzip = '���������� � gzip';

$strHandler = '���������';
$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHaveToShow = '��� ��������� ������� ������� ���� ������ ��� ��������������';
$strHebrew = '����������';
$strHome = '�� �������';
$strHomepageOfficial = '��������� �������� phpMyAdmin';
$strHostEmpty = '������ ��� �����!';
$strHost = '����';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = '���������';

$strIcelandic = '�����������';
$strId = 'ID';
$strIdxFulltext = '�����������������';
$strIgnore = '����������';
$strIgnoreDuplicates = '���������� ����, ��� ����������';
$strIgnoreInserts = '������������� ����� �������������';
$strImport = '������';
$strImportFiles = '����������� �����';
$strImportFormat = '������ ������������� �����';
$strImportSuccessfullyFinished = '�������������� ���������� ����������, �������� %d ������.';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������ %s ��� ��������';
$strIndexName = '��� �������:';
$strIndexType = '��� �������:';
$strIndexWarningTable = '�������� � �������� ��� ������ `%s`';
$strInnoDBAutoextendIncrement = '��������������� ������������';
$strInnoDBAutoextendIncrementDesc = ' ����� ������������ ��� ���������� ������ �������� �������������� ������, ��� ��� ���������.';
$strInnoDBBufferPoolSizeDesc = '����� ������ � ������, �� InnoDB ������������ ��� ���������� �������� � ������� �����.';
$strInnoDBBufferPoolSize = '����� ���� ������';
$strInnoDBDataFilePath = '����� ��������';
$strInnoDBDataHomeDirDesc = '�������� ������ ����� ���� �� ��� ����� �������� InnoDB.';
$strInnoDBDataHomeDir = '������ ����� ��������';
$strInnoDBPages = '��������';
$strInnodbStat = '���� InnoDB';
$strInsecureMySQL = '��� �������������� ���� ��������� ������ (������������ root ��� ������), ��� ����������� ������������� ������������� MySQL �� ���������. ��� ������ MySQL ������ � ����� ������� �� ��������� � ���������� �������� ��� ��������� ���������, � ���� ��� ���������� ����� �������� ����� ���� � ��������.';
$strInsertAsNewRow = '������� �� ���� �����';
$strInsertedRowId = 'Id ���������� �����:';
$strInsertedRows = '������� ����:';
$strInsert = '�������';
$strInternalNotNecessary = '* ��������� ������ �� ���������� �����������, ��� ��� ��� ����� � InnoDB.';
$strInternalRelations = '��������� �����';
$strInUse = '���������������';
$strInvalidAuthMethod = '� ������������ ��������� ���������� ����� �������������:';
$strInvalidColumn = '���������� ����������� ������ (%s)!';
$strInvalidColumnCount = '���������� ������ ����� ���� ������� �� ����.';
$strInvalidCSVFieldCount = '����������� ���������� ��븢 � CSV-�������� � ����� %d.';
$strInvalidCSVFormat = '���������� ������ CSV-�������� � ����� %d.';
$strInvalidCSVParameter = '������������� ��������� ��� ������� �������� � CSV: %s';
$strInvalidDatabase = '����������� ���� ��������';
$strInvalidFieldAddCount = '����� ������ ������� ���� ����.';
$strInvalidFieldCount = '������ ����� ���� ������� ���� ����.';
$strInvalidLDIImport = '���� ����� �� ����������� ���������� ��������!';
$strInvalidRowNumber = '%d �� ���������� ��������� ������� �����.';
$strInvalidServerHostname = '����������� ��� ����� ��� ������� %1$s. ��� �����, �������� ������������.';
$strInvalidServerIndex = '���������� ������ �������: "%s"';
$strInvalidTableName = '����������� ��� ������';

$strJapanese = '��������';
$strJoins = '��\'��������';
$strJumpToDB = '��������� �� ���� �������� &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;���������&quot; ������������ �� ���� ������� �������� ������ �� ������� �� ��������, ������ ������ �� ������ ��������������.';
$strJustDelete = '������ ������� ������������� � ����� ��������.';

$strKeepPass = '�� �������� ������';
$strKeyCache = '��� �����';
$strKeyname = '��� �����';
$strKill = '�������';
$strKorean = '���������';

$strLandscape = '������';
$strLanguage = '����';
$strLanguageUnknown = '��������� ����: %1$s.';
$strLatchedPages = 'Գ�������� �������';
$strLatexCaption = '��������� ������';
$strLatexContent = '���������� ������ __TABLE__';
$strLatexContinuedCaption = '���������� ��������� ������';
$strLatexContinued = '(������)';
$strLatexIncludeCaption = '�������� ��������� ������';
$strLatexLabel = '���� ����';
$strLaTeX = 'LaTeX';
$strLatexStructure = '��������� ������ __TABLE__';
$strLatvian = '���������';
$strLDI = 'CSV � �������������� LOAD DATA';
$strLDILocal = '������������� �������� ����� LOCAL';
$strLengthSet = '������/���������*';
$strLimitNumRows = '���������� ����� �� ��������';
$strLinesTerminatedBy = '���� ����������';
$strLinkNotFound = '������ �� ����������';
$strLinksTo = '��������� �';
$strLithuanian = '˳������';
$strLocalhost = '��������';
$strLocationTextfile = '����������������� ���������� �����';
$strLoginInformation = '���������� ��� ������';
$strLogin = '������ � �������';
$strLogout = '������� � �������';
$strLogPassword = '������:';
$strLogServer = '������';
$strLogUsername = '��� �������������:';
$strLongOperation = '����� �������� ���� ������ ���� ����. ����������?';

$strMaxConnects = '�������� ����������� ����������';
$strMaximalQueryLength = '������������ ������ ���������� ������';
$strMaximumSize = '����������� �����: %s%s';
$strMbExtensionMissing = '���������� PHP mbstring �� ����������, � ��, �������, �������������� ������������ ��������. ��� ���������� mbstring phpMyAdmin �� ���� ��������� ���� ��������, � ���� ���� ��������� �� ��������� ������.';
$strMbOverloadWarning = '�� ������� mbstring.func_overload � ����� ��������������� ����� PHP. ����� ����� �������������� � phpMyAdmin � ���� �������� ������������ ��������!';
$strMIME_available_mime = '��������� MIME-����';
$strMIME_available_transform = '��������� �������������';
$strMIME_description = '��������';
$strMIME_MIMEtype = 'MIME-���';
$strMIME_nodescription = '���� ��������� ��������� ��� ������ �������������.<br />��� �����, �������� �����, ��� ����� %s.';
$strMIME_transformation = '������������� MIME-���� ��������';
$strMIME_transformation_note = '��� ���������� ����� ��������� ������ ������������� � �������������� ����� MIME-����, ���������� �� %s�������� ��������������%s';
$strMIME_transformation_options = '����� �������������';
$strMIME_transformation_options_note = '��� �����, �������� ��������� ������ ������������� �������������� ���� ������: \'a\', 100, b,\'c\'...<br />��� ��� ����� ����� �������� ���� ("\") ��� �������� ("\'") � ����� ����������, ������ �������� ���� ����� �� (���������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strMIMETypesForTable = 'MIME-���� ������';
$strMIME_without = 'MIME-����, ��������� �������, �� ����� ������� ������� �������������';
$strModifications = '����������� ��� ���������';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveTable = '���������� ������ � (���� ��������<b>.</b>������):';
$strMoveTableOK = '������ %s ���� ����������� � %s.';
$strMoveTableSameNames = '��������� ���������� ������ � ���� ����!';
$strMultilingual = '���������';
$strMyISAMDataPointerSizeDesc = '��������� �� ��������� ������ ����������� � ������, ��� ������������� � CREATE TABLE ��� ����� MyISAM, ��� �� ���������� ����� MAX_ROWS.';
$strMyISAMDataPointerSize = '����� ����������� �� ��������';
$strMyISAMMaxExtraSortFileSizeDesc = '��� ����� �������� �����, �� ��������������� ��� ������� ���������� ������� MyISAM, ����� ������, ��� ������������� ��� ���� ����� ������, ����������� ���, �������� ����� ���������� �����.';
$strMyISAMMaxExtraSortFileSize = '����������� ����� ������� ����� ��� ���������� �������';
$strMyISAMMaxSortFileSizeDesc = '����������� ����� �������� ����� MySQL, �� ��������� ������������� ��� �������������� ������� MyISAM (������ REPAIR TABLE, ALTER TABLE, ��� LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = '����������� ����� ��� ������� ����� �����������';
$strMyISAMRecoverOptionsDesc = '����� ��� ������������ ���������� ����������� ����� MyISAM, �� ��������� ���� ����� --myisam-recover ������� �������.';
$strMyISAMRecoverOptions = '����� ������������ ����������';
$strMyISAMRepairThreadsDesc = '��� ����� ��������� ������� �� 1, ������� ����� MyISAM ������ ��������� ���������� (����� ������ � ���� ������� ������) ������ ���������� �������� �����������.';
$strMyISAMRepairThreads = '������ ����������';
$strMyISAMSortBufferSizeDesc = '�����, �� ����������� ��� ����������� ������� MyISAM ������ REPAIR TABLE ��� ������ ���������� �������, �������������� CREATE INDEX �� ALTER TABLE.';
$strMyISAMSortBufferSize = '����� ������ �����������';
$strMySQLCharset = '�������� MySQL';
$strMysqlClientVersion = '����� ������ MySQL';
$strMySQLConnectionCollation = '������������� ����������� �� MySQL';
$strMySQLSaid = '����� MySQL: ';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� ��������� �������� MySQL';

$strName = '�����';
$strNext = '��������';
$strNoActivity = '�� ���� ������� ����������� �� ������� %s �������. ��� �����, �������� ���';
$strNoDatabases = '���� �������� ������������';
$strNoDatabasesSelected = '�� �������� ���� ��������.';
$strNoDataReceived = '�������� ��� ������������� �� ���������. ����� ������� ���� �� ��� ���������, ����� ����� ����� ������� ����������� �����, ��������� ������������� PHP. ��. FAQ 1.16.';
$strNoDescription = '���� ��������';
$strNoDetailsForEngine = '��� ����� ������ ���������� �������� ��������� ���������� �� ���������.';
$strNoDropDatabases = '������� "DROP DATABASE" ����������.';
$strNoExplain = '�� ��������� SQL';
$strNoFilesFoundInZip = '����� � ZIP-������ �� ����������!';
$strNoFrames = '��� ������ phpMyAdmin �������� ������ � ���������� <b>������</b>.';
$strNo = '��';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '����� ������� �� ����������!';
$strNoModification = '���� ������';
$strNone = '����';
$strNoOptions = '���� ������ �� ��� ������';
$strNoPassword = '��� ������';
$strNoPermission = '���-������ �� ��� ������� ��� ���������� � ���� %s.';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� ��������';
$strNoRights = '�� �� ����� ����������� �������� ���� � ����� ����� � ���� ���!';
$strNoRowsSelected = 'ͳ����� ����� �� �������';
$strNoSpace = '������������ ����� ��� ���������� � ���� %s.';
$strNoTablesFound = '� ���� �������� ����� �� ��������.';
$strNoThemeSupport = '���� �� ��������������; ��� �����, �������� ����� ������������ �/��� ����� ���� � ����� %s.';
$strNotNumber = '���� �� ��!';
$strNotOK = '�� OK';
$strNotSet = '������ <b>%s</b> �� ���������� ��� �� ���������� � %s';
$strNoUsersFound = '�� ��������� ������������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNull = '����';
$strNumberOfFields = '���������� ��븢';
$strNumSearchResultsInTable = '%s ������������ � ������ <i>%s</i>';
$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> ������������';
$strNumTables = '�����';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = '������������ Open Document';
$strOpenDocumentText = '����� Open Document';
$strOpenNewWindow = '������� ����� ���� phpMyAdmin';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '����������� ������';
$strOr = '���';
$strOverhead = '������������� �������';
$strOverwriteExisting = '������������ �������(�) ����(�)';

$strPageNumber = '��������:';
$strPagesToBeFlushed = '������ ��� ��������';
$strPaperSize = '����� ������';
$strPartialImport = '�������� ������';
$strPartialText = '��������� ������';
$strPasswordChanged = '������ ��� %s ���������� ��������.';
$strPasswordEmpty = '����� ������!';
$strPasswordHashing = '���������� ������';
$strPassword = '������';
$strPasswordNotSame = '����� �� ���������!';
$strPdfDbSchema = '��������� ���� "%s" � �������� %s';
$strPdfInvalidTblName = '������ "%s" �� �����!';
$strPdfNoTables = '���� �����';
$strPDF = 'PDF';
$strPDFReportExplanation = '(������� ����������� � �������� ������� ������)';
$strPDFReportTitle = '��������� �����������';
$strPerHour = '� ������';
$strPerMinute = '� �����';
$strPerSecond = '� �������';
$strPersian = '����������';
$strPhoneBook = '���������� �����';
$strPHP40203 = '�� �������������� PHP 4.2.3, ���� ��� ���\'����� ������ ��� ������ � ������������ ������ (mbstring). ������� ������������� ��� ������� PHP 19404. ���� ����� PHP �� ������������� ��� ������������� � phpMyAdmin.';
$strPhp = '�������� PHP-���';
$strPHPVersion = '����� PHP';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '��������� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ��²��� ���� ���������� � ����� ��������������� �����!';
$strPolish = '��������';
$strPortrait = '�������';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '��������';
$strPrimaryKeyHasBeenDropped = '�������� ���� ��� ��������';
$strPrimaryKeyName = '��� ���������� ����� ����� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�����</b> ���� ���� ���������� ����� � <b>�����</b> ���!)';
$strPrint = '����';
$strPrintView = '����� ��� �����';
$strPrintViewFull = '����� ��� ����� (� ��� �������)';
$strPrivDescAllPrivileges = '������� ��� ������, ����� GRANT.';
$strPrivDescAlter = '�������� �������� ��������� ����� �����.';
$strPrivDescAlterRoutine = '�������� �������� � �������� ��������, ��� ����������.';
$strPrivDescCreateDb = '�������� �������� ����� ���� �������� � ������.';
$strPrivDescCreateRoutine = '�������� �������� ��������, ��� ����������.';
$strPrivDescCreateTbl = '�������� �������� ����� ������.';
$strPrivDescCreateTmpTable = '�������� �������� ������� ������.';
$strPrivDescCreateUser = '�������� ��������, �������� � ������������� ������� ����� �������������';
$strPrivDescCreateView = '�������� �������� ����� ��������.';
$strPrivDescDelete = '�������� �������� ��������.';
$strPrivDescDropDb = '�������� �������� ���� �������� � ������.';
$strPrivDescDropTbl = '�������� �������� ������.';
$strPrivDescExecute5 = '�������� ���������� ��������, ��� ����������.';
$strPrivDescExecute = '�������� ���������� ��������� ��������; �� ������ � ����� ���� MySQL.';
$strPrivDescFile = '�������� ����������� �������� � ����� � ������������ �������� � �����.';
$strPrivDescGrant = '�������� �������� ������������� � ������ ��� ����������� ����� ��������.';
$strPrivDescIndex = '�������� �������� � �������� �������.';
$strPrivDescInsert = '�������� �������� � �������� ��������.';
$strPrivDescLockTables = '�������� ��������� ������ ��� �������� ������.';
$strPrivDescMaxConnections = '��������� ���������� ����� ����������, ��� ������������ ���� ������� �� ������� ������.';
$strPrivDescMaxQuestions = '��������� ���������� ������, ��� ������������ ���� �������� �� ������ �� ������� ������.';
$strPrivDescMaxUpdates = '��������� ���������� �������, ���������� ����� ������ ��� ���� ��������, ��� ������������ ���� �������� �� ������� ������.';
$strPrivDescMaxUserConnections = '��������� ���������� ����������� ����������, ��� ���� ���� ������������.';
$strPrivDescProcess3 = '�������� ������� ������� ����� �������������.';
$strPrivDescProcess4 = '�������� ���������� ����� ������ � ����� �������.';
$strPrivDescReferences = '�� ������ � ����� ���� MySQL.';
$strPrivDescReload = '�������� ������������� ������ ������� � �������� ��� �������.';
$strPrivDescReplClient = '�������� ������������� �������, ��� ����������� slaves / masters.';
$strPrivDescReplSlave = '��������� ��� ��������� slaves.';
$strPrivDescSelect = '�������� ������ ��������.';
$strPrivDescShowDb = '��� ������ �� ������ ����� ���� ��������.';
$strPrivDescShowView = '�������� ���������� ������ SHOW CREATE VIEW.';
$strPrivDescShutdown = '�������� ������� ������.';
$strPrivDescSuper = '�������� �����������, ����� ��� ��������� ����������� �� ������������; ����������� ��� ���������� ��������������� ���������, ���� �� ����������� ���������� �������� ��� ��������� ������ ����� �������������.';
$strPrivDescUpdate = '�������� �������� ��������.';
$strPrivDescUsage = '��� ��������.';
$strPrivileges = '������';
$strPrivilegesReloaded = '������ ��� ���������� ��������������.';
$strProcedures = '���������';
$strProcesses = '�������';
$strProcesslist = '���� �������';
$strProtocolVersion = '����� ���������';
$strPutColNames = '��������� ����� ��븢 � ������ �����';

$strQBE = '����� ������ ��������';
$strQBEDel = '�������';
$strQBEIns = '�������';
$strQueryCache = '��� ������';
$strQueryFrame = '���� ������';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';
$strQueryResultsOperations = '�������� � ������� ������';
$strQuerySQLHistory = 'ó������ SQL';
$strQueryStatistics = '<b>���������� ������</b>: � ������� ������� %s ������ ���� ��������� �� ������.';
$strQueryTime = '����� ��������� %01.4f ���';
$strQueryType = '��� ������';
$strQueryWindowLock = '�� ������������� ���� ����� � ����� ������';

$strReadRequests = '������ ��������';
$strReceived = '��������';
$strRecords = '�����';
$strReferentialIntegrity = '��������� ����������� ��������:';
$strRefresh = '�������';
$strRelationalSchema = '���������� �����';
$strRelationNotWorking = '���������� ����������� ������ � ��������� ������� ��� ����������. ��� ���������� ����, ���������� %s���%s.';
$strRelationsForTable = '����� � ������';
$strRelations = '�����';
$strRelationView = '������� ������������';
$strReloadingThePrivileges = '������������ ������';
$strReloadPrivileges = '������������ ������';
$strRemoveSelectedUsers = '������� �������� �������������';
$strRenameDatabaseOK = '���� �������� %s ���� �������������� � %s';
$strRenameTable = '������������� ������ �';
$strRenameTableOK = '������ %s ���� �������������� � %s';
$strRepairTable = '����������� ������';
$strReplaceNULLBy = '�������� NULL ��';
$strReplaceTable = '�������� �������� ������ �������� � �����';
$strReplication = '���������';
$strReset = '������';
$strResourceLimits = '������������ �������';
$strReType = '��������������';
$strRevoke = '���������';
$strRevokeAndDelete = '��������� ��� �������� ������ ������������� � ������ ������� ��.';
$strRevokeAndDeleteDescr = '������������ �� ���� ������ ���� ������ ����������� (USAGE), ������ ������ �� ������ ��������������.';
$strRevokeMessage = '�� �������� ������ ��� %s';
$strRomanian = '���������';
$strRowLength = '������ �����';
$strRows = '����';
$strRowsFrom = '�����, ��������� � ����� #';
$strRowSize = ' ����� ����� ';
$strRowsModeFlippedHorizontal = '������������� (���������� �������)';
$strRowsModeHorizontal = '�������������';
$strRowsModeOptions = '� ������ %s � �������� ������� ���� ������ %s �����';
$strRowsModeVertical = '�����������';
$strRowsStatistic = '���������� �����';
$strRunning = '�� %s';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL-�����(�) �� ���� �������� %s';
$strRunSQLQueryOnServer = '�������� SQL-�����(�) �� ������� %s';
$strRussian = '���������';

$strSave = '��������';
$strSaveOnServer = '�������� �� ������� � ����� %s';
$strScaleFactorSmall = '������ ������ ��� ����, ��� ����� ������� ��� ��������';
$strSearchFormTitle = '����� � ���� ��������';
$strSearch = '�����';
$strSearchInTables = '� ������(��):';
$strSearchNeedle = '�����(�) ��� ���������(�) ��� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � �����';
$strSearchOption2 = '��� �����';
$strSearchOption3 = '��������� �����';
$strSearchOption4 = '��������� �����';
$strSearchResultsFor = '����� ������ "<i>%s</i>" %s:';
$strSearchType = '��������:';
$strSecretRequired = '���������������� ����� ����� ��������� ��������� ����� (blowfish_secret).';
$strSelectADb = '��� �����, �������� ���� ��������';
$strSelectAll = '������� ��';
$strSelectBinaryLog = '�������� �������� ��� ��� ��������';
$strSelectFields = '������� ��� (������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '�������� ������(�)';
$strSend = '�������� �� ����';
$strSent = '���������';
$strServerChoice = '����� �������';
$strServerNotResponding = '������ �� ��������';
$strServer = '������';
$strServers = '�������';
$strServerStatus = '������� ����������';
$strServerStatusDelayedInserts = '����������� �����';
$strServerStatusUptime = '���� ������ MySQL ������ %s. �� ��� ��������� %s.';
$strServerTabVariables = '��������';
$strServerTrafficNotes = '<b>������ �������</b>: ����� ������ ���������� ���������� ��������� ������� ������ ������� MySQL �� ������� ������� �������.';
$strServerVars = '������ � �������� �������';
$strServerVersion = '����� �������';
$strSessionValue = '��������� ���';
$strSetEnumVal = '��� ��� ���� "enum" ��� "set", ��� �����, �������� ��������� �������������� ���� ������: \'a\',\'b\',\'c\'...<br />��� ��� �������� ����� �������� ���� ("\") ��� �������� ("\'") ����� ����� ����������, ������� ����� �� �������� ���� (���������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShowAll = '�������� ���';
$strShowColor = '�������� �����';
$strShowDatadictAs = '������ ������� ��������';
$strShowFullQueries = '�������� ����� ������';
$strShowGrid = '�������� �����';
$strShow = '��������';
$strShowingBookmark = '���������� ��������';
$strShowingRecords = '��������� �����';
$strShowOpenTables = '�������� �������� ������';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowSlaveHosts = '�������� �������� �������';
$strShowSlaveStatus = '�������� ���� �������� �������';
$strShowStatusBinlog_cache_disk_useDescr = '���������� �����������, ��� ������������ ������ �������� ��� ������, ��� ��� �������� ��������� binlog_cache_size � ������������ ������ ���� ��� ���������� ������ ����������.';
$strShowStatusBinlog_cache_useDescr = '���������� �����������, ��� ������������ ������ �������� ��� ������.';
$strShowStatusCreated_tmp_disk_tablesDescr = '���������� ������� ����� �� �����, ��������� ���������� �������� ������ ���������� ������. ��� �� Created_tmp_disk_tables ����, �� ������ ��������� ��������� tmp_table_size, ��� ������� ������ ��������� � ������, � �� �� �����.';
$strShowStatusCreated_tmp_filesDescr = '���������� ������� �����, ��������� mysqld.';
$strShowStatusCreated_tmp_tablesDescr = '���������� ������� �����, ������������ � ������, ��� ��� ���������� ��������� �������� ������ ���������� ������.';
$strShowStatusDelayed_errorsDescr = '���������� �����, �������� � INSERT DELAYED, �-�� ��� ������� ������ ������ (�����, ���������� �����).';
$strShowStatusDelayed_insert_threadsDescr = '���������� ���������� ������ INSERT DELAYED, ��� ���������������. ������ ������, �� ���� ����������� INSERT DELAYED ��������� ���� ������ �����.';
$strShowStatusDelayed_writesDescr = '���������� �������� INSERT DELAYED �����.';
$strShowStatusFlush_commandsDescr  = '���������� ��������� FLUSH-������.';
$strShowStatusHandler_commitDescr = '���������� ��������� COMMIT-������.';
$strShowStatusHandler_deleteDescr = '���������� ���� ���������� ����� � ������.';
$strShowStatusHandler_discoverDescr = '������ MySQL ���� ��������� ������ ���������� �������� NDB Cluster, �� ����� ��� ������ � �������� ����. ���� ���������� ��������������. Handler_discover �������� ���������� �������������� �����.';
$strShowStatusHandler_read_firstDescr = '���������� ���� ����� ���� ��� ��������� � �������. ��� ����� ��������� ������, ������� ������������� ����� ������ ���������� ������������� ������������; ���������, SELECT col1 FROM foo, ��������, ��� col1 ������������.';
$strShowStatusHandler_read_keyDescr = '���������� ������ �� �������� ����� � �������������� �����. ��� ��� ������, ���� ������ �������� ����, ��� ������ � ������ ����� ������������.';
$strShowStatusHandler_read_nextDescr = '���������� ������ �������� �������� ����� � �������� �������. ��� ������������, ��� ����������� ����� �� ������������ ������ � ������� ������������� ��� ��� ���������� ����������� �������.';
$strShowStatusHandler_read_prevDescr = '���������� ������ �������� ��������� ����� � �������� �������. ���� ����� �������� ��������������� ��������� ��� ���������� ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = '���������� ������ �������� ����� ���������� �������. ��� ������, ��� ����������� ���� ������, ��� ���������� ����������� ������. �������, ����������� ���� ������, ��� ���������� �� MySQL �������� ������ ������ ��� ����������� ��\'��������, ��� ���������� �������������� �����.';
$strShowStatusHandler_read_rnd_nextDescr = '���������� ������ �������� ���������� ����� � ����� ��������. ��� ������, ��� ����������� ���� �������� ������. � �������� ������� ���� �������, ��� ������ ������������ ���������� ��� ������ �� �������� ���, ��� ������������� ������� �������.';
$strShowStatusHandler_rollbackDescr = '���������� ��������� ������ ROLLBACK.';
$strShowStatusHandler_updateDescr = '���������� ������ ���������� ����� � ������.';
$strShowStatusHandler_writeDescr = '���������� ������ ����� ����� � ������.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = '���������� ��������, ��� ����������� �������� (��������� ��� �����������).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '���������� ��������� ��������.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = '���������� �������� ��������� ����, �� ��� ��� �������� ����� �� ���.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = '���������� ������� ��������.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = '���������� ��������, ��� ������������ � �������� ���� InnoDB. ���� �������, ��� � ������ ������ �������� �� ���������� ��� ��� �� ������ ���� ������� �� ��������� �-�� ������ �������.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = '���������� ������� �������� ����, ��� ��� ��� ���������� �� ��������������� �������� ����, �� ����������� ����� ��� ��������� �������� ������. ����� ��������� ������� ���� ���� �������� �� Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = '������� ����� ��������� ����, � ���������.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = '���������� ������������ ���������� ���������, ��������� InnoDB. ���� ����������, ��� ����� ��������� ������� ������ ������, ��� � ���������� �������.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = '���������� ����������� ���������� ���������, ��������� InnoDB. ���� ����������, ��� InnoDB �������� ���������� ���� ������� ������.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = '���������� ������� ������ ��������, ��������� InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = '���������� ������� ���������, ��� InnoDB �� ������ ������� � ��������� ����, � ���� ������ ��������������� ��������.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = '��������, ����� � ������� ��� InnoDB, ��������� � ����. �����, ���  ��������� ��������� ��� ��������� �������� � ������ ������� ������������, ��������� ��������, ������ ������ ������� �� ������ �������. ���� �������� �������� ���������� ���� ���������. ��� ����� ������ ��� ��������� ��������, ����� ��������� ����� ���� ��������.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = '���������� �����, ��������� � ������� ��� InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = '���������� ��������� fsync() �� ������ ������.';
$strShowStatusInnodb_data_pending_fsyncsDescr = '������� ���������� ��������� fsync(), ��� ������� ����������.';
$strShowStatusInnodb_data_pending_readsDescr = '������� ���������� ���������, ��� ������� ����������.';
$strShowStatusInnodb_data_pending_writesDescr = '������� ���������� �����, ��� ������� ����������.';
$strShowStatusInnodb_data_readDescr = '���������� ���������� �� ������ ������ ��������, � ������.';
$strShowStatusInnodb_data_readsDescr = '�������� ���������� ��������� ��������.';
$strShowStatusInnodb_data_writesDescr = '�������� ���������� ����� ��������.';
$strShowStatusInnodb_data_writtenDescr = '���������� �������� �� ������ ������ ��������, � ������.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = '���������� ��������� �����, ��� ��� ���������, � ���������� ��������, ��� ��� �������� ��� ����� ����.';
$strShowStatusInnodb_dblwr_writesDescr = '���������� ��������� �����, ��� ��� ���������, � ���������� ��������, ��� ��� �������� ��� ����� ����.';
$strShowStatusInnodb_log_waitsDescr = '���������� ������� �������� �-�� ����, ��� ����� ���� ��� ������� ����, � ���� �������� ������, ������ �� �� ����������.';
$strShowStatusInnodb_log_write_requestsDescr = '���������� ����� � ���.';
$strShowStatusInnodb_log_writesDescr = '���������� ������� ��������� ����� � ���-����.';
$strShowStatusInnodb_os_log_fsyncsDescr = '���������� ��������������� �����, ��������� � ���-����.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = '���������� ����������������� ���-�����, ��� ������� ����������.';
$strShowStatusInnodb_os_log_pending_writesDescr = '���������� ����� � ���-����, ��� ������� ����������.';
$strShowStatusInnodb_os_log_writtenDescr = '���������� �����, �������� � ���-����.';
$strShowStatusInnodb_pages_createdDescr = '���������� ��������� ��������.';
$strShowStatusInnodb_page_sizeDescr = '����� ������������� ������� InnoDB (�� ��������� 16��). ������ ������� ���������� � ���������; ����� ������� �������� ����� ���������� ��� � �����.';
$strShowStatusInnodb_pages_readDescr = '���������� ���������� ��������.';
$strShowStatusInnodb_pages_writtenDescr = '���������� �������� ��������.';
$strShowStatusInnodb_row_lock_current_waitsDescr = '���������� ������������ �����, �������� ��� ���������� �� ������ ������.';
$strShowStatusInnodb_row_lock_time_avgDescr = '������� ��� ���������� ����������� ����������� �����, � ����������.';
$strShowStatusInnodb_row_lock_timeDescr = '������� ��� �������� ���������� ����������� ����������� �����, � ����������.';
$strShowStatusInnodb_row_lock_time_maxDescr = '����������� ��� ���������� ����������� ����������� �����, � ����������.';
$strShowStatusInnodb_row_lock_waitsDescr = '���������� ����, ��� ���������� ������ ����������� �����.';
$strShowStatusInnodb_rows_deletedDescr = '���������� �����, ��������� � ����� InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = '���������� �����, ��������� � ������ InnoDB.';
$strShowStatusInnodb_rows_readDescr = '�������� �����, ���������� � ����� InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = '���������� �����, ��������� � ������� InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = '���������� ���� � ���� �����, ��� ��� ���������, ��� ���� �� ��� ������� �� ����. ��������������� �� ��������� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = '���������� �������������� ���� � ���� �����. ����� ��������� ����� ������������� ��� ����������� ������� ������������� ���� �����.';
$strShowStatusKey_blocks_usedDescr = '���������� ������������ ���� � ���� �����. ����� ��������� � ����������� ��������� ��������� ��������� ��� ������������ �� ����� ��� ���������� ����, ��� �������������� ����������.';
$strShowStatusKey_read_requestsDescr = '���������� ������ �� �������� ���� ����� � ����.';
$strShowStatusKey_readsDescr = '���������� �������� ��������� ���� ����� � �����. ��� ��������� Key_reads ������, ��������� key_buffer_size, �����, ����� �����. ���������� ������� � ��� ����� ������� �� Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = '���������� ������ �� ���� ���� ����� � ���.';
$strShowStatusKey_writesDescr = '���������� �������� ����� ���� ����� �� ����.';
$strShowStatusLast_query_costDescr = '������� ���� �������� ������������� ������, ���������� ������������ ������. ������� ��� ���������� ������ ������� ��������� ������ ������. ��������� �� ��������� 0 �������, ��� ������� ����� ���� �� ��� �����������.';
$strShowStatusNot_flushed_delayed_rowsDescr = '���������� ����� ��� �����, ����������� ������� INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = '���������� �����, ��� ��� ��������. ��� �������� ������ �����, ��������� ���� ����� �������� ����� �����.';
$strShowStatusOpen_filesDescr = '���������� �������� �����.';
$strShowStatusOpen_streamsDescr = '���������� �������� ������ (��������������� ��������� ��� ����������).';
$strShowStatusOpen_tablesDescr = '���������� �������� �����.';
$strShowStatusQcache_free_blocksDescr = '���������� ������� ���� ������ � ���� ������.';
$strShowStatusQcache_free_memoryDescr = '���������� ������� ������ ��� ���� ������.';
$strShowStatusQcache_hitsDescr = '���������� ������� �� ����.';
$strShowStatusQcache_insertsDescr = '���������� ������, ��� ��� ������� � ���.';
$strShowStatusQcache_lowmem_prunesDescr = '��������� ������, ��� ��� ��������� � ����, ��� �������� ������ ��� ���������� ����� ������. ����� ������� ������ ��������� ��������� ����� ���� ������. ��� ������ ������������ ������� ��������, �� ������������� ������� (LRU) ��� �����������, ��� ������ ����� �������� � ����.';
$strShowStatusQcache_not_cachedDescr = '���������� ������������� ������ (������������� ��� ����������� �-�� ��������� ��������� query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = '���������� ������, ��� ������������� � ����.';
$strShowStatusQcache_total_blocksDescr = '�������� ���������� ���� � ���� �������.';
$strShowStatusReset = '������ ����������';
$strShowStatusRpl_statusDescr = '���� ���������� �� ������� ��������� (���� �� �����������).';
$strShowStatusSelect_full_joinDescr = '���������� ��\'���������, ��� �� �������������� �������. ��� ����� ��������� �� ����� 0, ����� ��������� ������� � �������.';
$strShowStatusSelect_full_range_joinDescr = '���������� ��\'���������, ��� ������������ ����� �� ����� � ������� ������.';
$strShowStatusSelect_range_checkDescr = '���������� ��\'��������� ��� ������������� �����, ��� �������� ���������� ����� ������ ������� �����. (��� ����� ��������� �� ����� 0, ����� ��������� ������� � �������.)';
$strShowStatusSelect_rangeDescr = '���������� ��\'���������, ��� ������������ ����������� ��븢 � ������ ������. (�������� �� ��������, ����� ��� ����� ��������� ������.)';
$strShowStatusSelect_scanDescr = '���������� ��\'���������, ��� ������ ���� ������� ������ ������.';
$strShowStatusSlave_open_temp_tablesDescr = '���������� ������� �����, ��� � ������ ������ �������� �������� SQL-�������.';
$strShowStatusSlave_retried_transactionsDescr = '�������� (�� �������) ���������� ����, ��� ������� SQL-����� ��������� ������ ����������.';
$strShowStatusSlave_runningDescr = '����� ��������� ����� "ON", ��� ������ ���������� �������� � ���������� �� �������, �� ��� ���������.';
$strShowStatusSlow_launch_threadsDescr = '���������� ������, ��� ����������� ����� �� slow_launch_time ������� ��� ����������.';
$strShowStatusSlow_queriesDescr = '���������� ������, �� ���������� ��� ����������� �����, ��� long_query_time �������.';
$strShowStatusSort_merge_passesDescr = '���������� �������, ��� ��� ��������� ����������� �����������. ��� ����� ��������� ������, ����� ���������� ����������� ��������� ��������� �������� sort_buffer_size.';
$strShowStatusSort_rangeDescr = '���������� ������������, ��� ��� ��������� � �������������� �������� ������.';
$strShowStatusSort_rowsDescr = '���������� ������������ �����.';
$strShowStatusSort_scanDescr = '���������� ������������, ��� ��� ��������� ������ �������� ������.';
$strShowStatusTable_locks_immediateDescr = '���������� ����, ��� ����������� ������ ���� ��������� ��������.';
$strShowStatusTable_locks_waitedDescr = '���������� ����, ��� ����������� ������ ��������� ���� ���������� �������� � ����� ��� ����� �� ��������. ��� ����� ��������� ������, � ������� �������� � ���������������, ����� �������� ����������� ������, � ������ ��� �������� ������ ��� ������, ��� ������������� ���������.';
$strShowStatusThreads_cachedDescr = '���������� ������ � ���� ������. ������� ���������� � ��� ���� ���� �������� �� Threads_created/Connections. ��� ����� ��������� ������������ � ������� �����, ����� ��������� ��������� thread_cache_size.';
$strShowStatusThreads_connectedDescr = '���������� �������� �� ������ ������ ����������.';
$strShowStatusThreads_createdDescr = '���������� ������, ��������� ��� ��������� ����������. ��� ��������� Threads_created ������, �������, ����� ��������� ��������� thread_cache_size. (��������, ���� �� ��� �����-������� ��������� ����������� ���������������, ��� ����������� ������ ��������� ������.)';
$strShowStatusThreads_runningDescr = '���������� ������, ��� �� ���������� �������.';
$strShowTableDimension = '�������� ������������� �����';
$strShowTables = '�������� ������';
$strShowThisQuery = ' �������� ���� ����� ��� ';
$strSimplifiedChinese = 'ʳ������� ����������';
$strSingly = '(������)';
$strSize = '�����';
$strSkipQueries = '���������� (������), ��� ����� ����������� �� �������';
$strSlovak = '���������';
$strSlovenian = '����������';
$strSocketProblem = '(��� ����� ���������� ������� MySQL �� �������������� ��������)';
$strSortByKey = '��������� �� �����';
$strSort = '�������';
$strSorting = '�����������';
$strSpaceUsage = '������������� ��������';
$strSpanish = 'ó��������';
$strSplitWordsWithSpace = '����� ���������� �������� (" ").';
$strSQLCompatibility = '����� ��������������� SQL';
$strSQLExportType = '��� ��������';
$strSQLParserBugMessage = '�������, �� ������ ������� � SQL-�������. ��� �����, ������� �������� ��� ����� � ������������� ���������� � ��. ����� �������� �������� ������ ���� ���� ���, ��� �� ������� ���� � ��������� �������� ��-�� ����� ������, ���������� ����������. �� ������� ������ ������������ �������� ��� ����� � ���������� ����� MySQL. ������������� ��� ������� ������� MySQL ����������� �����, ���� ������� ��������� ��� ���������� ������� ��������. ��� �� �� ���� ����� �������� ��� ������ ���������� ��� �������, � � ���������� ����� ����� �����������, ��� �����, ��������� ��� �������� SQL-����� �� ������ ������, �� ������� �������, � ������� ������������� ��� ������� � ����� ��������, ���������� � ������ CUT �����:';
$strSQLParserUserError = '�������, ��� SQL-����� ��������� �������. ������������� ��� ������� ������� MySQL ����������� �����, �������, ������� �������� ��� ���������� ������� ������';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL-�����';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '���������� �������������';
$strSQPBugUnclosedQuote = '���������� ���������';
$strSQPBugUnknownPunctuation = '�������� ������� ����������';
$strStatCheckTime = '������� ��������';
$strStatCreateTime = '���������';
$strStatement = '������';
$strStatisticsOverrun = '�� ���������� ������� �������� �������� ������ ������������ ����, ���� ����������, ���� �������� MySQL-������, ���� ���� �����������.';
$strStatUpdateTime = '������� ����������';
$strStatus = '����';
$strStorageEngine = '������ ���������� ��������';
$strStorageEngines = '������ ���������� ��������';
$strStrucCSV = 'CSV';
$strStrucData = '��������� � ��������';
$strStrucExcelCSV = 'CSV ��� �������� MS Excel';
$strStrucNativeExcel = '����� ������ MS Excel';
$strStrucOnly = '����� ���������';
$strStructPropose = '������������ ��������� ������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ��� ���������� ��������';
$strSum = '�����';
$strSwedish = '��������';
$strSwitchToDatabase = '��������� �� ���������� ���� ��������';
$strSwitchToTable = '��������� �� ���������� ������';

$strTableAlreadyExists = '������ %s ��� �����!';
$strTableComments = '�������� �� ������';
$strTableEmpty = '������ ����� ������!';
$strTableHasBeenDropped = '������ %s ���� ���������';
$strTableHasBeenEmptied = '������ %s ���� ���������';
$strTableHasBeenFlushed = '��� ������ %s ��� ��������';
$strTableMaintenance = '������������� ������';
$strTable = '������';
$strTableOfContents = '������';
$strTableOptions = '����� ������';
$strTables = '%s �����(�)';
$strTableStructure = '��������� ������';
$strTakeIt = '�����';
$strTblPrivileges = '������, ����������� ��� ������';
$strTempData = '������� ��������';
$strTextAreaLength = ' �-�� ������ ������,<br /> ����� ���� �� ���� ���� ������������� ';
$strThai = '�����������';
$strThemeDefaultNotFound = '���� �� ��������� %s �� ����������!';
$strThemeNoPreviewAvailable = '��������� ������� ����������.';
$strThemeNotFound = '���� %s �� ����������!';
$strThemeNoValidImgPath = '����������� ���� �� ������� ���� %s �� ���������!';
$strTheme = '���� / �����';
$strThemePathNotFound = '�� ��������� ���� �� ���� %s!';
$strThisHost = '���� ����';
$strThreads = '�����';
$strThreadSuccessfullyKilled = '����� %s ��� ���������� �������.';
$strTime = '���';
$strTimeoutInfo = '���������� ������������� ��������� �-�� �������� ����. ������ ����� ������� ������������� ����� ����������� � ������� %d.';
$strTimeoutNothingParsed = '�����, ������ �������� ���������� ����� �������� ��� �����������. ���� �������� �������, ��� phpMyAdmin �� ����� �������� ����� �������������, ��� �� �� ��������� ���� ���������� php-�������.';
$strTimeoutPassed = '����� ��������� ��� ���������� �������. ��� �� ������ ��������� �������������, ��� �����, �������� ���� ��� � ������������� ��������.';
$strToggleScratchboard = '�������� ��������� �������';
$strTotal = '�����';
$strTotalUC = '������';
$strTraditionalChinese = '����������� ��������';
$strTraditionalSpanish = '����������� ���������';
$strTraffic = '������';
$strTransactionCoordinator = '����������� ���������';
$strTransformation_application_octetstream__download = '�������� �������� ��� ������� ��������� �������� ����. �� ������ ������������� ������ ����� ��� ����������� ��� ����� ��� �������������� ������ ����� �� ��� ����, ���� ��������� ��� �����. ��� �� �������������� ������ �����, ��� ����� ������� ������ ���� ������';
$strTransformation_application_octetstream__hex = '�������� �������� � �������������� ��������. ����������� ����� ��������� �������� ������� ���������� ������� (��-��������� � ���� ������ 8 ���).';
$strTransformation_image_jpeg__inline = '�������� ����������� ����; ����� � ������������ ������ � ������ � �������. ���������� ���������� ���������.';
$strTransformation_image_jpeg__link = '�������� �������� ��� ������� ������ �������.';
$strTransformation_image_png__inline = '����������� ������� image/jpeg: ���������';
$strTransformation_text_plain__external = '����ʲ ��� LINUX: �������� �������� �������� � ������� �� �������� ���� ���� ���������� ����. ������ ���������� ����� ��������. �������� �� ��������� � Tidy, ���� ������ ����� HTML-���. �� ������������ �������, ��� ����� ������� ������������ ���� libraries/transformations/text_plain__external.inc.php � ��������� ���� ��������, ��� �� ������ ������ ���������. ������ ����� � ���� ����� ��������, ���� �� ������ �������������, ������ ����� � ��������� ��� ��������. ������ �����, ��� ���������� �� 1, ���������� �������� � ������������ ������ �������������� htmlspecialchars() (�� ��������� 1). ���������� �����, ��� ���������� �� 1, ���������� ������� �� ������, ��� �����������, ��� ����� ������� ����� ����� ��������� � ���� ����� (�� ��������� 1).';
$strTransformation_text_plain__formatted = '�������� ���������� ���� ��-�����, ��� ������� ��� �������� htmlspecialchars(). ���� ����������, ��� ���� ��������� �������� HTML-���.';
$strTransformation_text_plain__imagelink = '�������� ������� � ��������, ���� �������� ����� �����. ������ ����� � ������� ������ ������� "http://www.example.com/". ������ � ������ ����� � ������ � ������ � �������.';
$strTransformation_text_plain__link = '�������� ��������; ���� �������� ����� �����. ������ ����� � ������� ������ ������� "http://www.example.com/". ������ ����� � ����� �������.';
$strTransformation_text_plain__sql = '�������� ����� �� SQL-����� � ������������ ����������.';
$strTransformation_text_plain__substr = '�������� ����� ������ �����. ������ ����� � ���������� �������� �� ������� �����, ��� ����� ����������� (�� ��������� 0). ������ ����� � ���������� ��������, ��� ����� ������� (�� ���������: �� ����� �����). ������ ����� � �����, �� ����� �������� �� ����� �/��� � ������� �����, ��� ���������� ��������� (�� ���������: "...") .';
$strTruncateQueries = '�������� ��������� ������';
$strTurkish = '��������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '������ ��� ������';
$strUnicode = '������';
$strUnique = '����������';
$strUnknown = '��������';
$strUnselectAll = '������ ��� ������';
$strUnsupportedCompressionDetected = '�� ����������� �������� ���� � ������� �������, �� ���������������� (%s). ������ ��������� ��� �� �����������, ��� ���������� � ����� ������������.';
$strUpdatePrivMessage = '�� ������� ������ ���  %s.';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '������� �����';
$strUpdComTab = '�� ����������� �� ������� ������ column_comments �����������, ��� �����, �� ������������';
$strUpgrade = '��� ����� ������� %s �� ���� %s �� ����������.';
$strUploadLimit = '��, �����, ����������� �������� ����� ���� ����. ��� �����, ����������� �� %s������������%s ��� ������������� ������� �������� ����� ������������.';
$strUploadsNotAllowed = '������� ����� �� ���������� �� ����� �������.';
$strUsage = '�������������';
$strUseBackquotes = '��������� ��������� � ����� ����� � ��븢';
$strUsedPhpExtensions = '��������������� ���������� PHP';
$strUseHostTable = '������������� ������ �����';
$strUserAlreadyExists = '������������ %s ��� �����!';
$strUser = '������������';
$strUserEmpty = '������ ��� �������������!';
$strUserName = '��� �������������';
$strUserNotFound = '�������� ������������ �� ��������� � ������ ��������.';
$strUserOverview = '������������';
$strUsersDeleted = '�������� ������������ ��� ���������� ���������.';
$strUsersHavingAccessToDb = '������������ � ������ ������� �� &quot;%s&quot;';
$strUseTabKey = '�������������� ������ TAB ��� ������������� �� ��������� �� ��������� ��� CTRL+������ ��� ������������� � ����� ����� �����';
$strUseTables = '������������� ������';
$strUseTextField = '������������� ��������� ����';
$strUseThisValue = '������������� ���� ���������';

$strValidateSQL = '��������� SQL';
$strValidatorError = '��������� ��������������� �������� SQL. ��� �����, ��������, �� ����������� � ��� ���������� ���������� PHP, �� ���� ������ � %s������������%s.';
$strValue = '���������';
$strVar = '��������';
$strVersionInformation = '���������� ��� �����';
$strView = '������';
$strViewDumpDatabases = '����������� ���� (�����) ���� ��������';
$strViewDumpDB = '����������� ���� (�����) ���� ��������';
$strViewDump = '����������� ���� (�����) ������';
$strViewHasBeenDropped = '������ %s ��� ��������';
$strViewMaxExactCount = '� ����� ��������� ����� �� %d �����. ��� �����, ����������� �� %s������������%s.';

$strWebServerUploadDirectoryError = '��������� ������� ���������� ��� ����� ��� ������� �����';
$strWebServerUploadDirectory = '����� ���-������� ��� ������� �����';
$strWelcome = '��������� � %s';
$strWestEuropean = '������������������';
$strWildcard = '�����';
$strWindowNotFound = '��������� ������� ������� ���� �������. �������, �� ������ ���������� ���� ��� ������ ������� ������ ������� ������������� �� ����������� ���������� ���������������';
$strWithChecked = '� ����������:';
$strWriteRequests = '������ �����';
$strWrongUser = '���������� ����/������. � ������� ��������.';

$strXML = 'XML';

$strYes = '���';

$strZeroRemovesTheLimit = '������: ����������� ����� ������ �� 0 (����) ������ ������������.';
$strZip = '���������� � zip';

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
