<?php
/* $Id: serbian_cyrillic-windows-1251.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by:
 *     Mihailo Stefanovic <mikis@users.sourceforge.net>, Branislav Jovanovic <fangorn@eunet.yu>
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 */

$charset = 'windows-1251';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('������', '��', '��', '��', '��', '��', '��');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '��', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. � %H:%M';
$timespanfmt = '%s ����, %s ����, %s ������ � %s �������';

$strAbortedClients = '���������';
$strAccessDeniedCreateConfig = '��������� ������ �� ��� �� �� ����� ��������� �������������� ��������. ������ ��������� %1$s������ �� ����������%2$s �� ����� �� ���������.';
$strAccessDeniedExplanation = 'phpMyAdmin �� ������� �� �� ������ �� MySQL ������, ��� �� ������ ����� ����������. ��������� ����� ��������, ���������� ��� � ������� � config.inc.php � ������� �� �� ��������� �������� ��� ��� ������ �� �������������� MySQL �������.';
$strAccessDenied = '������� ������';
$strAction = '�����';
$strAddAutoIncrement = '���� AUTO_INCREMENT ��������';
$strAddClause = '���� %s';
$strAddConstraints = '���� ���������';
$strAddDeleteColumn = '����/������ ������';
$strAddDeleteRow = '����/������ ��� �� ���������';
$strAddFields = '���� %s ���';
$strAddHeaderComment = '���� �������� � ������� (\\n ������� �����)';
$strAddIntoComments = '���� � ���������';
$strAddNewField = '���� ���� ���';
$strAddPrivilegesOnDb = '���� ���������� �� ������ ����';
$strAddPrivilegesOnTbl = '���� ���������� �� ������ ������';
$strAddSearchConditions = '���� ������ ������������ (��� "WHERE" �����):';
$strAddToIndex = '���� � ��� &nbsp;%s&nbsp;������(�)';
$strAddUser = '���� ����� ���������';
$strAddUserMessage = '������ ��� ����� ���������.';
$strAdministration = '�������������';
$strAffectedRows = '���������� ������:';
$strAfter = '����� %s';
$strAfterInsertBack = '����� �� ��������� ������';
$strAfterInsertNewInsert = '���� ��� ����� ���� ���';
$strAfterInsertNext = '����� ������ ���';
$strAfterInsertSame = '����� �� �� ��� ������';
$strAll = '���';
$strAllowInterrupt = '�������� ������ ����� � ������ �� ������ ������ �� �� ����� ���������� ���������. ��� ���� ���� ����� ����� ����� ������� ��������, ��� �� ����� ������ ���� ��������� ����������.';
$strAllTableSameWidth = '������ ���� ������ ���� ������?';
$strAlterOrderBy = '������� �������� � ������';
$strAnalyzeTable = '��������� ������';
$strAnd = '�';
$strAndThen = '� ����';
$strAngularLinks = '������� ����';
$strAnIndex = 'ʚ�� �� ������ ����� %s';
$strAny = '���� ���';
$strAnyHost = '���� ��� �������';
$strAnyUser = '���� ��� ��������';
$strApproximateCount = '���� ���� ���������. ������ FAQ 3.11';
$strAPrimaryKey = '�������� ��� �� ������ ����� %s';
$strArabic = '�������';
$strArmenian = '���������';
$strAscending = '������';
$strAtBeginningOfTable = '�� ������� ������';
$strAtEndOfTable = '�� ���� ������';
$strAttr = '��������';
$strAutomaticLayout = '���������� ��������';

$strBack = '�����';
$strBaltic = '��������';
$strBeginCut = '������� ���';
$strBeginRaw = '������� ������';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - �� ���';
$strBinaryLog = '������� �������';
$strBinLogEventType = '����� �������';
$strBinLogInfo = '����������';
$strBinLogName = '����� ��������';
$strBinLogOriginalPosition = '���������� �������';
$strBinLogPosition = '�������';
$strBinLogServerId = '�� �������';
$strBookmarkAllUsers = '������� ������ ��������� �� �������� ���� �������� �����';
$strBookmarkCreated = '�������� ������ %s';
$strBookmarkDeleted = '���������� �� ������ �������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '������� SQL-����';
$strBookmarkReplace = '������ ������� �������� ����� ����� �����';
$strBookmarkThis = '������� SQL-����';
$strBookmarkView = '���� ����';
$strBrowseDistinctValues = '�������� ��������� ���������';
$strBrowseForeignValues = '�������� ������ ���������';
$strBrowse = '�������';
$strBufferPoolActivity = '��������� ����� �����������';
$strBufferPool = '���� �����������';
$strBufferPoolUsage = '�������� ����� �����������';
$strBufferReadMisses = '�������� ��� ������';
$strBufferReadMissesInPercent = '�������� ������ � %';
$strBufferWriteWaits = '������ �� ����';
$strBufferWriteWaitsInPercent = '������ �� ���� � %';
$strBulgarian = '��������';
$strBusyPages = '������� ������';
$strBzError = 'phpMyAdmin ��� ����� �� ��������� ������ ���� ���� ���������� BZ2 ��������� � ��� ������ PHP-�. ���������� �� �� �������� <code>$cfg[\'BZipDump\']</code> ��������� � ���oj phpMyAdmin ��������������j �������� �� <code>FALSE</code>. ��� ������ �� ��������� ��������� BZ2 ���������, ������� �� �� ������ �� ����� ������ PHP-�. ������ PHP ������� � �������� %s �� ������.';
$strBzip = '"����-�����"';

$strCalendar = '��������';
$strCancel = '������';
$strCanNotLoadExportPlugins = '��� ����� ������� ������� �� �����, ������ ��������� ���� ����������!';
$strCanNotLoadImportPlugins = '�� ���� �� ������ ������� �� ����, ����� ��������� ���� ����������!';
$strCannotLogin = '�� ���� �� �� ������� �� MySQL ������';
$strCantLoad = '�� ���� �� ������ ��������� %s,<br />����� ��������� PHP ������������';
$strCantLoadRecodeIconv = '�� ���� �� ������ iconv ��� recode ��������� �������� �� ��������� ������� �������, �������� PHP �� ������� �������� ���� ��������� ��� ���������� ��������� ������� ������� � phpMyAdmin-�.';
$strCantRenameIdxToPrimary = '�� ���� �� �������� ��� � PRIMARY (��������) !';
$strCantUseRecodeIconv = '�� ���� �� �������� iconv ��� libiconv ��� recode_string ������� ���� ��������� ������� �� �� �������. ��������� ���� PHP ������������.';
$strCardinality = '������������';
$strCaseInsensitive = '�� �������� ���� � ������ �����';
$strCaseSensitive = '�������� ���� � ������ �����';
$strCentralEuropean = '�����������������';
$strChangeCopyModeCopy = '... ������ �����.';
$strChangeCopyModeDeleteAndReload = ' ... ������ ������ �� ������ ��������� � ����� ������ ����� ����������.';
$strChangeCopyMode = '������� ����� ��������� �� ����� ������������ � ...';
$strChangeCopyModeJustDelete = ' ... ������ ����� �� ������ ���������.';
$strChangeCopyModeRevoke = ' ... �������� ��� ���������� ������ ��������� � ����� �� ������.';
$strChangeCopyUser = '������� ���������� � ������ / ������ ���������';
$strChangeDisplay = '������� ��� �� ������';
$strChange = '�������';
$strChangePassword = '������� �������';
$strCharset = '�������� ���';
$strCharsetOfFile = '�������� ��� ��������:';
$strCharsetsAndCollations = '�������� ������ � ���������';
$strCharsets = '����� ������';
$strCheckAll = '������ ���';
$strCheckOverhead = '������� ������ ��� ���� ����������';
$strCheckPrivs = '������� ����������';
$strCheckPrivsLong = '������� ���������� �� ���� &quot;%s&quot;.';
$strCheckTable = '������� ������';
$strChoosePage = '��������� ������ ��� �����';
$strColComFeat = '��������� ��������� ������';
$strCollation = '���������';
$strColumnNames = '����� ������';
$strColumnPrivileges = '���������� ������ �� ������';
$strCommand = '�������';
$strComments = '���������';
$strCommentsForTable = '��������� ������';
$strCompatibleHashing = 'MySQL&nbsp;4.0 ������������';
$strCompleteInserts = '��������� INSERT (�� ������� ���)';
$strCompression = '���������';
$strCompressionWillBeDetected = '����� ��������� �������� �������� �� ���� ���������� ��������: %s';
$strConfigDefaultFileError = '�� ���� �� ������ ������������� ������������ ��: "%1$s"';
$strConfigFileError = 'phpMyAdmin ��� ����� �� ������� ���� �������������� ��������!<br />��� �� ���� ������ ��� PHP ���� ������ � ����������� ��� �� ���� �� ������� ��������.<br />�������� �������������� �������� �������� �������� ��� ���� � ��������� ������ � ������ ��� �������. � ����� �������� ����� �������� �������� ��� �����-�����.<br />��� ������� ������ ������, ��� �� � ����.';
$strConfigureTableCoord = '�������� ���������� �� ������ %s';
$strConnectionError = '�� ���� �� �� �������: ���������� ����������.';
$strConnections = '��������';
$strConstraintsForDumped = '��������� �� �������� ������';
$strConstraintsForTable = '��������� �� ������';
$strControluserFailed = '�������� �� controluser-�, ����� ���� �� ���������� � ���� ������������, ��� ������.';
$strCookiesRequired = '������� (Cookies) ����� � ���� ������ ���� �������.';
$strCopyDatabaseOK = '���� %s �� ����������� � %s';
$strCopy = '������';
$strCopyTable = '������ ������ � (����<b>.</b>������):';
$strCopyTableOK = '������ %s �� �������� � %s.';
$strCopyTableSameNames = '�� ���� �� ������� ������ � ���� ����!';
$strCouldNotKill = 'phpMyAdmin ��� ����� �� ������� ������ %s. ��������� �� �� ��������.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE ��� ��������';
$strCreate = '�������';
$strCreateIndex = '������� ��� ��&nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������� ���� ���';
$strCreateNewDatabase = '������� ���� ���� ��������';
$strCreateNewTable = '������� ���� ������ � ���� %s';
$strCreatePage = '������� ���� ������';
$strCreatePdfFeat = '������ PDF-ova';
$strCreateRelation = '������� �������';
$strCreateTable  = '������� ������';
$strCreateUserDatabase = '���� �� ���������';
$strCreateUserDatabaseName = '������� ���� �� ����� ������ � ���� ��� ����������';
$strCreateUserDatabaseNone = '����';
$strCreateUserDatabaseWildcard = '�� ��� ���������� �� ����� �� �������� (����������_���\_%)';
$strCreationDates = '������ ��������/���������/�������';
$strCriteria = '���������';
$strCroatian = '��������';
$strCSV = 'CSV';
$strCyrillic = '���������';
$strCzech = '�����';
$strCzechSlovak = '�����-��������';

$strDanish = '������';
$strDatabase = '���� ��������';
$strDatabaseEmpty = '��� ���� ��� ������!';
$strDatabaseExportOptions = '����� �� ����� ����';
$strDatabaseHasBeenDropped = '���� %s �� ��������.';
$strDatabases = '����';
$strDatabasesDropped = '%s ���� �� ������� ��������.';
$strDatabasesStatsDisable = '������ ����������';
$strDatabasesStatsEnable = '����� ����������';
$strDatabasesStatsHeavyTraffic = '��������: ��������� ���������� ���� ������������� ������ �������� ����� ��� � MySQL �������.';
$strDatabasesStats = '���������� ����';
$strDataDict = '������ ��������';
$strData = '������';
$strDataOnly = '���� ������';
$strDataPages = '������ �� ��������';
$strDBComment = '�������� ����:';
$strDBCopy = '������ ���� �';
$strDbIsEmpty = '���� �� ������� ������!';
$strDbPrivileges = '���������� ������ �� ����';
$strDBRename = '�������� ���� �';
$strDbSpecific = '���������� �� ����';
$strDefaultEngine = '%s �� ������������� ����� ���������� �� ���� MySQL �������.';
$strDefault = '�������������';
$strDefaultValueHelp = '�� ������������� ��������, ������� ���� ����� ��������, ��� ����� ���� ��� ��������� � ���� ������: �';
$strDefragment = '������������� ������';
$strDelayedInserts = '������� �������� �������';
$strDeleteAndFlushDescr = '��� �� �������� �����, ��� ������� ��������� ����������� ���� �� ������.';
$strDeleteAndFlush = '������ ��������� � ������ ����� ����������.';
$strDeleted = '��� �� �������';
$strDeletedRows = '�������� ������:';
$strDelete = '������';
$strDeleteNoUsersSelected = '������ �������� ��� ������� �� �������!';
$strDeleteRelation = '������ �������';
$strDeleting = '������ %s';
$strDelimiter = '���������';
$strDelOld = '�������� ������ ��� ��������� �� ������ ��� ���� �� ������. ������ �� �� �������� �� ���������?';
$strDescending = '�������';
$strDescription = '����';
$strDesigner = '�������';
$strDesignerHelpDisplayField = '��� �� ������ �� ������ � ���������. �� �� ���������/�������� ��� ��� ��� �� ������, �������� �� ����� �������� ��� �� ������, � ����� �� ����� ����������� ���.';
$strDictionary = '������';
$strDirectLinks = '�������� ����';
$strDirtyPages = '����� ������';
$strDisabled = '����������';
$strDisableForeignChecks = '������ ������� ������� ������';
$strDisplayFeat = '������� �������';
$strDisplayOrder = '�������� �������:';
$strDisplayPDF = '������� PDF �����';
$strDoAQuery = '������� "���� �� �������" (�����: "%")';
$strDocSQL = 'DocSQL';
$strDocu = '������������';
$strDoYouReally = '�� �� ������� ����� �� ';
$strDropDatabaseStrongWarning = '���� ���� �������� ��������� ���� ��������!';
$strDrop = '������';
$strDropUsersDb = '������ ���� ��� �� ���� ���� ��� ���������.';
$strDumpingData = '������ �������� ������';
$strDumpSaved = '������ ���� �� ������� � �������� %s.';
$strDumpXRows = '������� %s ������ ������� �� ���� %s.';
$strDynamic = '���������';

$strEdit = '�������';
$strEditPDFPages = '�������� PDF ������';
$strEditPrivileges = '������� ����������';
$strEffective = '���������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL �� ������ ������ �������� (���� ������).';
$strEnabled = '��������';
$strEncloseInTransaction = '����� ����� � ����������';
$strEndCut = '���� ���';
$strEnd = '���';
$strEndRaw = '���� ������';
$strEngineAvailable = '%s �� �������� �� ���� MySQL �������.';
$strEngineDisabled = '%s �� ��������� �� ���� MySQL �������.';
$strEngines = '����������';
$strEngineUnsupported = '��� MySQL ������ �� �������� %s ����� ����������.';
$strEnglish = '��������';
$strEnglishPrivileges = ' ��������: MySQL ����� ���������� ����� �� ���� �� ��������� ';
$strError = '������';
$strErrorInZipFile = '������ � ZIP ������:';
$strErrorRelationAdded = '������: ������� ��� ������.';
$strErrorRelationExists = '������: ������� �� ������.';
$strErrorRenamingTable = '������ ��� ������������ ������ %1$s � %2$s';
$strErrorSaveTable = '������ ��� ������� ���������� �� �������.';
$strEscapeWildcards = '��� ������ _ � % ����� ������� ���� \ ��� �� ��������� ����������';
$strEsperanto = '���������';
$strEstonian = '��������';
$strEvent = '�������';
$strExcelEdition = 'Excel ������';
$strExecuteBookmarked = '������ ������ ����';
$strExplain = '������ SQL';
$strExport = '�����';
$strExportImportToScale = '�����/���� � �������';
$strExportMustBeFile = '�������� ��� ������ ���� ���� ������� � ��������!';
$strExtendedInserts = '��������� INSERT';
$strExtra = '�������';

$strFailedAttempts = '��������� �������';
$strFieldHasBeenDropped = '��� %s �� ��������';
$strField = '���';
$strFieldInsertFromFileTempDirNotExists = '������ � ���������� ������� ��������, ��������� FAQ 1.11';
$strFieldsEnclosedBy = '��� ���������� ��';
$strFieldsEscapedBy = '����� �������� &nbsp; &nbsp; &nbsp;';
$strFields = '���';
$strFieldsTerminatedBy = '��� ��������� ��';
$strFileAlreadyExists = '�������� %s �� ������ �� �������, ��������� ��� �������� ��� ������� ����� �����������.';
$strFileCouldNotBeRead = '�������� ��� ����� ���������';
$strFileNameTemplateDescriptionDatabase = '����� ����';
$strFileNameTemplateDescription = '��� �������� �� ������ ��������� %1$sstrftime%2$s, ���� �� ������ �� ��������� ��������� �� ����������� �������. ����� �� �� ������ � ������ �������������: %3$s. ��������� ����� �� ������ ���� �����.';
$strFileNameTemplateDescriptionServer = '����� �������';
$strFileNameTemplateDescriptionTable = '����� ������';
$strFileNameTemplate = '������ ����� ��������';
$strFileNameTemplateRemember = '������� ������';
$strFiles = '��������';
$strFileToImport = '�������� �� ����';
$strFixed = '������';
$strFlushPrivilegesNote = '��������: phpMyAdmin ����� ���������� ��������� �������� �� MySQL ������ ����������. ������ ��� ������ ���� �� ����������� �� ���������� ��� ������ ������� ��� �� ������ ����� ������. � ��� ������ %s������ ������� ����������%s ��� ���� ��� ���������.';
$strFlushQueryCache = '������ ��� �����';
$strFlushTable = '������ ������ ("FLUSH")';
$strFlushTables = '������ (�������) ��� ������';
$strFontSize = '�������� �����';
$strForeignKeyError = '������ � �������� ������� ���� (��������� ������ ��������)';
$strFormat = '������';
$strFormEmpty = '�������� �������� � �������!';
$strFreePages = '�������� ������';
$strFullText = '��� �����';
$strFunction = '�������';
$strFunctions = '�������';

$strGenBy = '���������';
$strGeneralRelationFeat = '����� ������� �������';
$strGenerate = '�������';
$strGeneratePassword = '������� �������';
$strGenTime = '����� ��������';
$strGeorgian = '��������';
$strGerman = '�������';
$strGlobal = '��������';
$strGlobalPrivileges = '�������� ����������';
$strGlobalValue = '�������� ��������';
$strGo = '�����';
$strGrantOption = '������';
$strGreek = '�����';
$strGzip = '"����-�����"';

$strHandler = '���������';
$strHasBeenAltered = '�� �������(�).';
$strHasBeenCreated = '�� �������(�).';
$strHaveToShow = '������ �������� ��� ����� ������ �� ������';
$strHebrew = '��������';
$strHelp = '����';
$strHexForBLOB = '������� �������������� �� BLOB';
$strHide         = '�����';
$strHideShowAll = '�����/������� ���';
$strHideShowNoRelation = '�����/������� ������ ��� �������';
$strHome = '������� ������';
$strHomepageOfficial = 'phpMyAdmin ��� ���';
$strHost = '�������';
$strHostEmpty = '��� �������� �� ������!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = '��������';

$strIcelandic = '���������';
$strId = 'ID';
$strIdxFulltext = '����� ���';
$strIEUnsupported = 'Internet Explorer �� �������� ��� �������.';
$strIgnoreDuplicates = '�������� ����������� ������';
$strIgnore = '��������';
$strIgnoreInserts = '�������� ��������� ��� �������';
$strImportExportCoords = '�����/���� ���������� �� PDF �����';
$strImportFiles = '���� ��������';
$strImportFormat = '������ �������� �� ����';
$strImport = '����';
$strImportSuccessfullyFinished = '���� �� ������� �������, �������� �� %d �����.';
$strIndex = 'ʚ��';
$strIndexes = 'ʚ�����';
$strIndexesSeemEqual = '������ ������� �� ��������� �������, � ����� �� ��� ����� ��������:';
$strIndexHasBeenDropped = 'ʚ�� %s �� �������';
$strIndexName = '��� ���� :';
$strIndexType = '��� ���� :';
$strIndexWarningTable = '������� ��� ����������� ������ `%s`';
$strInnoDBAutoextendIncrementDesc = ' �������� ������ �������� �������� ������ ��� �� ���������� �������� ���� �� ������.';
$strInnoDBAutoextendIncrement = '����� ����������� ��������';
$strInnoDBBufferPoolSize = '�������� �����������';
$strInnoDBBufferPoolSizeDesc = '�������� ���������� ����������� ��� InnoDB ������� �� �������� �������� � ������� ����� ������.';
$strInnoDBDataFilePath = '�������� �� ��������';
$strInnoDBDataHomeDirDesc = '��������� ��� ������ ������������ �� ��� InnoDB �������� �� ��������.';
$strInnoDBDataHomeDir = '������� ����������� ��������';
$strInnoDBPages = '������';
$strInnoDBRelationAdded = '������ InnoDB �������';
$strInnodbStat = 'InnoDB ������';
$strInsecureMySQL = '���� �������������� �������� ������ ���������� (root ��� �������) ��� ��������� ����������� MySQL �������������� ������. ��� MySQL ������ ���� �� ���� ������������, ������� �� �� �����, � ������ ����� �� ��������� ��� ���������� �����.';
$strInsertAsNewRow = '����� ��� ���� ���';
$strInsertedRowId = 'ID ��������� ������:';
$strInsertedRows = '������� ������:';
$strInsert = '���� �����';
$strInternalNotNecessary = '* ��������� ������� ��� ��������� ���� ������ � � InnoDB.';
$strInternalRelationAdded = '������ ������� �������';
$strInternalRelations = '��������� �������';
$strInUse = '�� �������';
$strInvalidAuthMethod = '���������� ����� ������������ �� ����� � ������������:';
$strInvalidColumn = '������ �� ���������� ������ (%s)!';
$strInvalidColumnCount = '��� ������ ���� ���� ��� �� ����.';
$strInvalidCSVFieldCount = '���������� ��� ��� � CSV ����� �� �����  %d.';
$strInvalidCSVFormat = '���������� ������ CSV ����� �� ����� %d.';
$strInvalidCSVParameter = '���������� ��������� �� CSV ����: %s';
$strInvalidDatabase = '���������� ���� ��������';
$strInvalidFieldAddCount = '������ ������ ����� ����� ���.';
$strInvalidFieldCount = '������ ���� ����� ����� ����� ���.';
$strInvalidLDIImport = '��� ������� �� �������� ������������ �����!';
$strInvalidRowNumber = '%d ��� �������� ��� ����.';
$strInvalidServerHostname = '���������� ����� ������� %1$s. ������ ��������� ���� ������������.';
$strInvalidServerIndex = '���������� ������ �������: "%s"';
$strInvalidTableName = '���������� ����� ������';

$strJapanese = '��������';
$strJoins = '������';
$strJumpToDB = '���� �� ���� &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;��������&quot; ��������� �� � ���� ����� ������� ������� ��� ���������� �� ���� ������ �������.';
$strJustDelete = '���� ������ ��������� �� ������ ����������.';

$strKeepPass = '���� �� ���� �������';
$strKeyCache = '��� ������';
$strKeyname = '��� ����';
$strKill = '��������';
$strKnownExternalBug = '��� �������������� %s �� ������� �������� �������, ������ %s';
$strKorean = '�������';

$strLandscape = '��������';
$strLanguage = '�����';
$strLanguageUnknown = '�������� �����: %1$s.';
$strLatchedPages = '��������� ������';
$strLatexCaption = '�������� ������';
$strLatexContent = '������ ������ __TABLE__';
$strLatexContinuedCaption = '�������� �������� ������';
$strLatexContinued = '(���������)';
$strLatexIncludeCaption = '����� �������� ������';
$strLatexLabel = '������ ����';
$strLaTeX = 'LaTeX';
$strLatexStructure = '��������� ������ __TABLE__';
$strLatvian = '��������';
$strLDI = 'CSV �������� LOAD DATA';
$strLDILocal = '������� ����� ��� LOCAL';
$strLengthSet = '������/��������*';
$strLimitNumRows = '��� ������ �� ������';
$strLinesTerminatedBy = '����� �� ��������� ��';
$strLinkNotFound = '���� ��� ���������';
$strLinksTo = '���� ��';
$strLithuanian = '���������';
$strLocalhost = '�������';
$strLocationTextfile = '������� ���������� ��������';
$strLogin = '����������';
$strLoginInformation = '������ � ������';
$strLogout = '���������';
$strLogPassword = '�������:';
$strLogServer = '������';
$strLogUsername = '���������� ���:';
$strLongOperation = '��� �������� ���� �� ������. �� �� �� ���������?';

$strMaxConnects = '����. ������������ ����';
$strMaximalQueryLength = '���������� ������ ���������� �����';
$strMaximumSize = '���������� ��������: %s%s';
$strMbExtensionMissing = 'PHP ��������� mbstring ��� ���������, � ���� �� �� �� ��������� ��������� ���� �������. ��� ��������� mbstring phpMyAdmin �� ���� �������� �� ������� ��������� � �� ���� ������� �� ������������ ���������.';
$strMbOverloadWarning = '� PHP ������������ ��� �� ������� mbstring.func_overload �����. ��� ����� �� �������������� �� phpMyAdmin � ���� ������� �� ������� � ����� ��������!';
$strMIME_available_mime = '�������� MIME-������';
$strMIME_available_transform = '�������� �������������';
$strMIME_description = '����';
$strMIME_MIMEtype = 'MIME-������';
$strMIME_nodescription = '���� ����� �� ��� �������������.<br />������ ������ ������ ��� %s ����.';
$strMIME_transformation_note = '�� ����� ��������� ����� ������������� � ������ ������������� MIME-������, �������� �� %s����� �������������%s';
$strMIME_transformation = '������������ ������';
$strMIME_transformation_options = '����� �������������';
$strMIME_transformation_options_note = '������ ������� ��������� �� ����� ������������� �������� ��� �����: \'a\', 100, b,\'c\'...<br />��� ����� �� ������� ������� ���� ���� ("\\") ��� �������� ("\'") � �� ���������, ������� ������� ���� ���� ������ ��� (�� ������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strMIMETypesForTable = 'MIME ������ �� ������';
$strMIME_without = 'MIME-������ ��������� � ������� ����� ������� ������� �������������.';
$strModifications = '������ �� ��������';
$strModify = '�������';
$strModifyIndexTopic = '������ ���';
$strMoveMenu = '�������� ����';
$strMoveTable = '������ ������ � (����<b>.</b>������):';
$strMoveTableOK = '������ %s �� �������� � %s.';
$strMoveTableSameNames = '�� ���� �� ��������� ������ � ���� ����!';
$strMultilingual = '����������';
$strMyISAMDataPointerSize = '�������� ���������� ��������';
$strMyISAMDataPointerSizeDesc = '������������� �������� ���������� � ��������, ������� �� ��� CREATE TABLE �� MyISAM ������ ���� ��� ������ ����� MAX_ROWS';
$strMyISAMMaxExtraSortFileSizeDesc = '��� �� ���������� �������� ��� �� ������� �� ���� �������� MyISAM ������� ���� ��� ���� ��� �������� ���� ������ �� ���� ������ ��������, ������� ����� �������� ������';
$strMyISAMMaxExtraSortFileSize = '���������� �������� ����������� �������� ��� �������� �������';
$strMyISAMMaxSortFileSizeDesc = '���������� �������� ����������� �������� ��� MySQL ��� �� ������� ��� ��-�������� MyISAM ������� (� ���� REPAIR TABLE, ALTER TABLE, ��� LOAD DATA INFILE ��������).';
$strMyISAMMaxSortFileSize = '���������� �������� ����������� �������� �� ���������';
$strMyISAMRecoverOptions = '����� ����������� ��������';
$strMyISAMRecoverOptionsDesc = '����� ����������� �������� �������� MyISAM ������, ������� ��� ���������� ������� ������ --myisam-recover.';
$strMyISAMRepairThreadsDesc = '��� �� �������� ��� �� 1, ������� MyISAM ������ �� ��������� ������� (����� ������ � ��������� ����) �� ����� ������� �������� ����������.';
$strMyISAMRepairThreads = '���� ��������';
$strMyISAMSortBufferSize = '�������� ����������� �� ���������';
$strMyISAMSortBufferSizeDesc = '���������� ��� �� ������� ��� ��������� MyISAM ������� �� ����� �������� REPAIR TABLE ��� ��� �������� ������� �� CREATE INDEX ��� ALTER TABLE.';
$strMySQLCharset = 'MySQL ��� ���������';
$strMysqlClientVersion = '������ MySQL �������';
$strMySQLConnectionCollation = '��������� �� MySQL ����';
$strMysqlLibDiffersServerVersion = '������ ���� PHP MySQL ���������� %s �� �������� �� ������ ����� MySQL ������� %s. ��� ���� ������� �� ������������� ��������.';
$strMySQLSaid = 'MySQL ����: ';
$strMySQLShowProcess = '������� ����� �������';
$strMySQLShowStatus = '������� MySQL ���������� � ���� ����';
$strMySQLShowVars = '������� MySQL ��������� ���������';

$strName = '���';
$strNext = '������';
$strNoActivity = '��� ���� ���������� %s ��� ���� �������, ������ �������� �� ������';
$strNoDatabases = '���� �� ������';
$strNoDatabasesSelected = '��� �������� �� ����� ����.';
$strNoDataReceived = '���� ������� ������ ������ �� ����. ��� ��� ��� ������� ����� ��������, ��� �������� �������� ����������� ���������� �������� �������� � ���� ������������ PHP-�. ���������. See FAQ 1.16.';
$strNoDescription = '���� �����';
$strNoDetailsForEngine = '���� ��������� ���������� � ������� �� ��� ����� ����������.';
$strNoDropDatabases = '"DROP DATABASE" ������� �� ����������.';
$strNoExplain = '�������� ���������� SQL-a';
$strNoFilesFoundInZip = '� ZIP ������ ���� ��������!';
$strNoFrames = 'phpMyAdmin ��������� ������ ��� ��������� ������.';
$strNo = '��';
$strNoIndex = 'ʚ�� ��� ���������!';
$strNoIndexPartsDefined = '������ ���� ���� ����������!';
$strNoModification = '���� ������';
$strNone = '����';
$strNoOptions = '�� ������ ����� �� ��� ������';
$strNoPassword = '���� �������';
$strNoPermission = '��� ������� ��� �������� �� ������ �������� %s.';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '���� ����������';
$strNoRights = '��� ��� �������� �� ������ ����!';
$strNoRowsSelected = '���� ��������� ������';
$strNoSpace = '�������� �������� �� ������� �������� %s.';
$strNoTablesFound = '������ ���� ��������� � ����.';
$strNoThemeSupport = '���� ������� �� ����, ������ ��������� ������������ �/��� ���� � ������������ %s.';
$strNotNumber = '��� ��� ���!';
$strNotOK = '��� � ����';
$strNotSet = '<b>%s</b> ������ ��� ��������� ��� ��� ��������� � %s';
$strNoUsersFound = '�������� ��� �����.';
$strNoValidateSQL = '�������� ������� SQL-a';
$strNull = 'Null';
$strNumberOfFields = '��� ���';
$strNumberOfTables = '��� ������';
$strNumSearchResultsInTable = '%s �������� ������ ������ <i>%s</i>';
$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> ��������';
$strNumTables = '������';

$strOK = '� ����';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = '������ ���� phpMyAdmin ������';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '�������� ������';
$strOptions = '�����';
$strOr = '���';
$strOverhead = '����������';
$strOverwriteExisting = '������� ������� ��������';

$strPageNumber = '��� ������:';
$strPagesToBeFlushed = '������ ��� ����� �� ���� ���������';
$strPaperSize = '�������� ������';
$strPartialImport = '��������� ����';
$strPartialText = '��� ������';
$strPasswordChanged = '������� �� %s �� ������� ��������.';
$strPassword = '�������';
$strPasswordEmpty = '������� �� ������!';
$strPasswordHashing = '�������� �������';
$strPasswordNotSame = '������� ���� ���������!';
$strPdfDbSchema = '����� ���� "%s" - ������ %s';
$strPdfInvalidTblName = '������ "%s" �� ������!';
$strPdfNoTables = '���� ������';
$strPDF = 'PDF';
$strPDFReportExplanation = '(����� ������� ��� ������ ������� ����� ������)';
$strPDFReportTitle = '������ ��������';
$strPerHour = '�� ���';
$strPerMinute = '� ������';
$strPerSecond = '� �������';
$strPersian = '��������';
$strPhoneBook = '���������� ������';
$strPHP40203 = '��������� PHP 4.2.3, ��� ��� ������ ��� �� ���������� ����������� (mbstring). ��������� ������� � ������ ��. 19404. ��� ������������ �������� ��� ������ PHP-a �� phpMyAdmin.';
$strPhp = '������� PHP ���';
$strPHPVersion = '������ PHP-a';
$strPleaseSelectPrimaryOrUniqueKey = '������ ��������� �������� ��� ����������� ���';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> ��������� ���� ���� �������� � �������������� ��������!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = '�����';
$strPortrait = '��������';
$strPos1 = '�������';
$strPrevious = '���������';
$strPrimary = '��������';
$strPrimaryKeyHasBeenDropped = '�������� ��� �� �������';
$strPrimaryKeyName = '��� ��������� ���� ���� �� ����... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>����</b> ���� ��� <b>����</b> ��������� ����!)';
$strPrint = '������';
$strPrintView = '�� ������';
$strPrintViewFull = '������ �� ������ (�� ����� �������)';
$strPrivDescAllPrivileges = '������ ��� ���������� ���� GRANT.';
$strPrivDescAlter = '�������� ������ ��������� �������� ������.';
$strPrivDescAlterRoutine = '�������� ������ � ���������� ��������� ������.';
$strPrivDescCreateDb = '�������� �������� ����� ���� � ������.';
$strPrivDescCreateRoutine = '�������� ������ ��������� ������.';
$strPrivDescCreateTbl = '�������� �������� ����� ������.';
$strPrivDescCreateTmpTable = '�������� �������� ����������� ������..';
$strPrivDescCreateUser = '�������� ������, ���������� � ������������ ����������� ������.';
$strPrivDescCreateView = '������� �������� ����� �������.';
$strPrivDescDelete = '�������� ������� ��������.';
$strPrivDescDropDb = '�������� ���������� ���� � ������.';
$strPrivDescDropTbl = '�������� ���������� ������.';
$strPrivDescExecute5 = '�������� ���������� ��������� ������.';
$strPrivDescExecute = '�������� ��������� ��������� ���������. ���� ������ � ��� ������ MySQL-a.';
$strPrivDescFile = '�������� ���� �������� � ����� ����� � ��������.';
$strPrivDescGrant = '�������� �������� ��������� � ���������� ��� �������� ��������� ������ ����������.';
$strPrivDescIndex = '�������� �������� � ������� ������.';
$strPrivDescInsert = '�������� ������� � ������ ��������.';
$strPrivDescLockTables = '�������� ���������� ������ ������ ���������.';
$strPrivDescMaxConnections = '���������� ��� ����� �������� ��� �������� ���� �� ������ �� ���.';
$strPrivDescMaxQuestions = '���������� ��� ����� ��� �������� ���� �� ����� ������� �� ���.';
$strPrivDescMaxUpdates = '���������� ��� ������� ��� ���� ������ ��� ���� ��� �������� ���� �� ������ �� ���.';
$strPrivDescMaxUserConnections = '���������� ��� ������������ �������� ��� �������� ���� �� ���.';
$strPrivDescProcess3 = '�������� ��������� ������� ������ ���������.';
$strPrivDescProcess4 = '�������� ������� ���������� ����� � ����� �������.';
$strPrivDescReferences = '���� ������ � ��� ������ MySQL-a.';
$strPrivDescReload = '�������� ������� ��������� ���������� ������� � ������ ���� �������.';
$strPrivDescReplClient = '��� ����� ��������� �� ���� ��� �� ������/������ �������.';
$strPrivDescReplSlave = '�������� ���� ������� ������� �� ����������.';
$strPrivDescSelect = '�������� ������ ��������.';
$strPrivDescShowDb = '��� ������� ��������� ����� ����.';
$strPrivDescShowView = '�������� ���������� SHOW CREATE VIEW �����.';
$strPrivDescShutdown = '�������� ����� �������.';
$strPrivDescSuper = ' �������� ���������� ���� �� ��������� ���������� ��� ��������� ����; ��������� �� ����� ���������������� ����� ��� ��� �� ���������� ��������� ���������� ��� ��������� ������� ������� ���������.';
$strPrivDescUpdate = '�������� ������ ��������.';
$strPrivDescUsage = '���� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '���������� �� ������� ������ �������.';
$strProcedures = '���������';
$strProcesses = '�������';
$strProcesslist = '����� �������';
$strProfiling = '�����������';
$strProtocolVersion = '������ ���������';
$strPutColNames = '����� ����� ��� � ���� ���';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = '���� �� �������';
$strQueryCache = '��� �����';
$strQueryFrame = '������ �� �����';
$strQueryOnDb = 'SQL ���� �� ���� <b>%s</b>:';
$strQueryResultsOperations = '�������� �� ����������� �����';
$strQuerySQLHistory = 'SQL ��������';
$strQueryStatistics = '<b>���������� �����</b>: %s ����� �� ��������� ������� �� ������� ���������.';
$strQueryTime = '���� �� ����� %01.4f �������';
$strQueryType = '����� �����';
$strQueryWindowLock = '�� ������� ��� ���� ����� �������';

$strReadRequests = '������� �� ������';
$strReceived = '�������';
$strRecommended = '�����������';
$strRecords = '������';
$strReferentialIntegrity = '������� ������������� ����������:';
$strRefresh = '������';
$strRelationalSchema = '��������� �����';
$strRelationDeleted = '������� ��������';
$strRelationNotWorking = '������� ��������� �� ��� �� ��������� �������� �� ��������. �� ����� ������� �����, �������� %s����%s.';
$strRelations = '�������';
$strRelationsForTable = '�����ȣ� ������';
$strRelationView = '��������� ������';
$strReload = '������ �����';
$strReloadingThePrivileges = '������ �������� ����������';
$strReloadPrivileges = '������ ����� ����������';
$strRemoveSelectedUsers = '������ �������� ���������';
$strRenameDatabaseOK = '���� %s �� ������������ � %s';
$strRenameTable = '������� ��� ������ � ';
$strRenameTableOK = '������ %s �������� ��� � %s';
$strRepairTable = '������� ������';
$strReplaceNULLBy = '������ NULL ��';
$strReplaceTable = '������ ������� � ������ �� �������� �� ��������';
$strReplication = '����������';
$strReset = '�������';
$strResourceLimits = '��������� �������';
$strRestartInsertion = '������ ������� ������ �� %s ������';
$strReType = '�������� ����';
$strRevokeAndDeleteDescr = '��������� �� � ���� ����� USAGE ���������� ��� �� ���������� ������ �� ������.';
$strRevokeAndDelete = '�������� ��� ������� ���������� ��������� � ����� �� ������.';
$strRevoke = '�������';
$strRevokeMessage = '��������� ��� ���������� �� %s';
$strRomanian = '��������';
$strRoutineReturnType = '�������� ���';
$strRoutines = '������';
$strRowLength = '������ ����';
$strRows = '������';
$strRowsFrom = ' ������ ����� �� ����';
$strRowSize = '�������� ����';
$strRowsModeFlippedHorizontal = '������������� (�������� �������)';
$strRowsModeHorizontal = '�������������';
$strRowsModeOptions = '� %s ���� � ������ ������� ����� ������ %s ����';
$strRowsModeVertical = '�����������';
$strRowsStatistic = '���������� ����';
$strRunning = '�� ������� %s';
$strRunQuery = '������ SQL ����';
$strRunSQLQuery = '������ SQL ����(�) �� ���� %s';
$strRunSQLQueryOnServer = '������ SQL ����(�) �� ������� %s';
$strRussian = '�����';

$strSave = '������';
$strSaveOnServer = '������ �� ������ � ����������� %s';
$strSavePosition = '������ �������';
$strScaleFactorSmall = '������ ������ �� ������� �� �� ����� ����� �� ����� ������';
$strSearchFormTitle = '������������ ����';
$strSearch = '������������';
$strSearchInTables = '������ ������:';
$strSearchNeedle = '���� ��� ��������� ��� �� ����� (�����: "%"):';
$strSearchOption1 = '��� ����� �� ����';
$strSearchOption2 = '��� ����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '��� ��������� �����';
$strSearchResultsFor = '��������� �������� �� "<i>%s</i>" %s:';
$strSearchType = '�����:';
$strSecretRequired = '�������������� �������� ������� ���� ������� (blowfish_secret).';
$strSelectADb = '��������� ����';
$strSelectAll = '������� ���';
$strSelectBinaryLog = '��������� ������� ������� �� �������';
$strSelectFields = '������� ��� (������ �����)';
$strSelectForeignKey = '������� ������ ���';
$strSelectNumRows = '� �����';
$strSelectReferencedKey = '��������� ������������� ���';
$strSelectTables = '������� ������';
$strSend = '������ ��� ��������';
$strSent = '�������';
$strServerChoice = '����� �������';
$strServer = '������';
$strServerNotResponding = '������ �� ��������';
$strServers = '�������';
$strServerStatusDelayedInserts = '�������� �������';
$strServerStatus = '���������� � ���� ����';
$strServerStatusUptime = '��� MySQL ������ ���� �� %s. �������� �� %s.';
$strServerTabVariables = '���������';
$strServerTrafficNotes = '<b>�������� �������</b>: ������ ������� ���������� ������� ��������� �� ���� MySQL ������� �� ������� ���������.';
$strServerVars = '��������� ��������� � ����������';
$strServerVersion = '������ �������';
$strSessionStartupErrorGeneral = '�� ���� �� �������� ����� ��� �������, ����� ��������� ������ � PHP �/��� �������� ��� ������� � �������� �������� ���� PHP ����������.';
$strSessionValue = '�������� �����';
$strSetEnumVal = '��� �� ��� "enum" ��� "set", ������� ��������� � �������: \'a\',\'b\',\'c\'...<br />��� ��� ����� ������� ���� ���� ("\\") ��� �������� ("\'") ��������� �� � "����������" (escaped) ������ (�� ������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strShowAll = '������� ���';
$strShowColor = '������� ���';
$strShowDatadictAs = '������ ������� ��������';
$strShowFullQueries = '������� ��������� �����';
$strShowGrid = '������� �����';
$strShowHideLeftMenu = '�������/����� ���� � ���� ������';
$strShow = '�������';
$strShowingBookmark = '����������� �������';
$strShowingPhp = '������ ��� PHP ���';
$strShowingRecords = '������ ������';
$strShowingSQL = '������ ��� SQL ����';
$strShowOpenTables = '������� �������� ������';
$strShowPHPInfo = '������� ���������� � PHP-�';
$strShowSlaveHosts = '������� �������� ������';
$strShowSlaveStatus = '������� ������ ��������� �������';
$strShowStatusBinlog_cache_disk_useDescr = '��� ����������� ��� �� ��������� ��� ����������� �������� �������� ��� �� ���������� �������� � binlog_cache_size � ��������� ���������� �������� �� ������ ������ �� ����������.';
$strShowStatusBinlog_cache_useDescr = '��� ���������� ��� �� ��������� ��� ����������� �������� ��������.';
$strShowStatusCreated_tmp_disk_tablesDescr = '��� ����������� ������ ��� �� ������ ���������� ������� �� ����� ��� �� ��������� ������. ��� �� Created_tmp_disk_tables ������, ����� ����� �� ������� �������� tmp_table_size ���� �� ������� �� ���������� ������ ���� �������� � ������� ������ �� �����.';
$strShowStatusCreated_tmp_filesDescr = '������ ����������� �������� �� mysqld ��������.';
$strShowStatusCreated_tmp_tablesDescr = '��� ����������� ������ ��� �� ������ ���������� ������� � ������� ��� �� ��������� ������.';
$strShowStatusDelayed_errorsDescr = '��� ������ �������� �� INSERT DELAYED �� ��� �� ������ ���� ������ (��������� ��������� ���).';
$strShowStatusDelayed_insert_threadsDescr = '��� INSERT DELAYED ������������ ���� � ��������. ����� ������� ������ ��� ���� �� ������� INSERT DELAYED ����� ���� ���.';
$strShowStatusDelayed_writesDescr = '��� �������� INSERT DELAYED ������.';
$strShowStatusFlush_commandsDescr  = '��� ��������� FLUSH ������.';
$strShowStatusHandler_commitDescr = '��� �������� COMMIT ������.';
$strShowStatusHandler_deleteDescr = '��� ������� ����� ���� ������.';
$strShowStatusHandler_discoverDescr = 'MySQL ������ ���� �� ����� ����� ���������� NDB Cluster �� �� ��� �� ������ �������� �����. �� �� ������ ���������� (discovery). Handler_discover �������� ��� ���� ���� �� ��������� ������.';
$strShowStatusHandler_read_firstDescr = '��� ���� ���� �� ���� ������ ��������� �� �������. ��� �� ��� ������, �� ���� ������� �� ������ ���� ���� ����� ��������� �������; �� ������ SELECT ���1 FROM �����, ��� ������������� �� �� ���1 �����������.';
$strShowStatusHandler_read_keyDescr = '��� ������� �� ������ ���� ���������� �� ����. ��� �� ��� ��� �����, �� �� ����� �������� �� �� ���� ����� � ������ �������� �����������.';
$strShowStatusHandler_read_nextDescr = '��� ������� �� ������� ������� ���� � ������� ������. ��� �� ������� ���� ������ ���� �� ������ ������� �� ���������� ������ ��� ��� ������ ��������� �������.';
$strShowStatusHandler_read_prevDescr = '��� ������� �� ������� ���������� ���� � ������� ������. ��� ������ ������ �� �������� ������� �� ����������� ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = '��� ������� �� ������ ���� ���������� �� ������ �������. ��� �� ������ ��� ������ ����� ����� ��� �������� ��������� ���������. ��������� ����� ����� ����� ��� �������� �� MySQL ������� ���� ������ ��� ����� ������ ��� �� ������� ������ ��������.';
$strShowStatusHandler_read_rnd_nextDescr = '��� ������� �� ������� ������� ���� �� �������� ��������. ��� �� ������ ��� ������ ���� ��������� ������. ��� ������ ����������� �� ���� ������ ���� �������� ����������� ��� �� ���� ����� ���� �������� �� ��������� �� ������� �������.';
$strShowStatusHandler_rollbackDescr = '��� �������� ROLLBACK ������.';
$strShowStatusHandler_updateDescr = '��� ������� �� ��������� ���� � ������.';
$strShowStatusHandler_writeDescr = '��� ������� �� ��������� ���� � ������.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = '��� ������ ��� ������ ������� (������ ��� ������).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '��� ������ ��� �� �������� �����.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = '��� ������ � ������ ������ �� ��� �� ������� �� ���� ��������.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = '��� ��������� ������.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = '��� ���������� ������ � InnoDB ������ ������. �� ���� ������ �� �������� ���� ��� �� � ��� ������ ��� �� ����� ������ ������� �� ���� ���� �������� ���� �������.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = '��� ������ ��� �� ������� ���� ��� �� ������� �� ��������������� �������, ��� ��� �� ���������� ������ ��� ������ ������������ ����. ��� �������� �� ����� ���� ���������� � �� ������ ����� Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = '���� �������� ������ ������, � ��������.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = '��� ������������ ����-������ ��� �� InnoDB ��������. ��� �� ������ ���� ���� ����� �� ������� ������ ��� ������ ��� ���������� ����������.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = '��� ������������� ����-������ ��� �� InnoDB ��������. ��� �� ������ ���� InnoDB ���� ������������ ��������� ���� ������.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = '��� �������� ������� �� ������ ��� �� InnoDB ������.';
$strShowStatusInnodb_buffer_pool_readsDescr = '��� �������� ������ ��� InnoDB ��� ����� �� ������� �� ������ ������ �� �� ����� �� ���� ������ ���������� ������.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = '�������� �� ����� � InnoDB ������ ������ ������� � ��������. ������, ��� �� ��������� ��������� ��� ��������� ������ � ���� ��������� ������ ������, ��������� �� �������� �� �� ������ ��������� ������. ��� ����� ���� �������� ���� ������. ��� �� �������� ������ ������ ��������� ���� �����, ��� �������� �� ������� �� �� �����.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = '��� ����� ������� � InnoDB ������ ������.';
$strShowStatusInnodb_data_fsyncsDescr = '��� fsync() �������� �� ����.';
$strShowStatusInnodb_data_pending_fsyncsDescr = '�������� ��� fsync() �������� �� ������.';
$strShowStatusInnodb_data_pending_readsDescr = '�������� ��� ������ �� ������.';
$strShowStatusInnodb_data_pending_writesDescr = '�������� ��� ����� �� ������.';
$strShowStatusInnodb_data_readDescr = '�������� �������� ���������� �� ����, � ��������.';
$strShowStatusInnodb_data_readsDescr = '������ ��� ������ ��������.';
$strShowStatusInnodb_data_writesDescr = '������ ��� ����� ��������.';
$strShowStatusInnodb_data_writtenDescr = '�������� �������� �������� �� ����, � ��������';
$strShowStatusInnodb_dblwr_pages_writtenDescr = '��� ��������� ���������� (doublewrite) ����� � ��� ������ ��� �� ������� � ��� �����.';
$strShowStatusInnodb_dblwr_writesDescr = '��� ��������� ���������� (doublewrite) ����� � ��� ������ ��� �� ������� � ��� �����.';
$strShowStatusInnodb_log_waitsDescr = '��� ������ ��� ��� ����� ���� ��� �� ����� �������� ��� ������� �� ��� ������ �� �������� �� ���� ������� ��� ��������.';
$strShowStatusInnodb_log_write_requestsDescr = '��� ������� �� ���� � �������.';
$strShowStatusInnodb_log_writesDescr = '��� �������� ����� � �������� ��������.';
$strShowStatusInnodb_os_log_fsyncsDescr = '��� fsyncs ����� �������� � �������� ��������.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = '��� fsync-��� �� �������� �������� �� ������.';
$strShowStatusInnodb_os_log_pending_writesDescr = '��� ����� � �������� �������� �� ������.';
$strShowStatusInnodb_os_log_writtenDescr = '��� ������ �������� � �������� ��������.';
$strShowStatusInnodb_pages_createdDescr = '��� ���������� ������.';
$strShowStatusInnodb_page_sizeDescr = '������������ �������� ������ �� InnoDB (������������� 16��). ����� ��������� �� ������� � ��������; �������� ������ �������� �� �� ��� ���� ��������� � ������.';
$strShowStatusInnodb_pages_readDescr = '��� ���������� ������.';
$strShowStatusInnodb_pages_writtenDescr = '��� ��������� ������.';
$strShowStatusInnodb_row_lock_current_waitsDescr = '��� ����� �� ������ ��� �� �������� �����.';
$strShowStatusInnodb_row_lock_time_avgDescr = '�������� ����� �� �������� ����� �� ���, � �������������.';
$strShowStatusInnodb_row_lock_timeDescr = '������ ������� ��������� � �������� ����� �� ������, � �������������.';
$strShowStatusInnodb_row_lock_time_maxDescr = '������ ����� �� �������� ����� �� ���, � �������������.';
$strShowStatusInnodb_row_lock_waitsDescr = '��� ���� ���� �� ������ ������ ����� �� ���.';
$strShowStatusInnodb_rows_deletedDescr = '��� ������ ��������� �� InnoDB ������.';
$strShowStatusInnodb_rows_insertedDescr = '��� ������ ��������� � InnoDB ������.';
$strShowStatusInnodb_rows_readDescr = '��� ������ ���������� �� InnoDB ������.';
$strShowStatusInnodb_rows_updatedDescr = '��� ������ ���������� � InnoDB ��������.';
$strShowStatusKey_blocks_not_flushedDescr = '��� ������� ������ � ���� ������ ��� �� ������� ��� ��� ���� ������� �� ����. ��� �� ����� ���� ������� ��� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = '��� �������������� ������� � ���� ������. ��� �������� ������ �� ��������� �� �������� ������ ��� ���� ������ �� � ��������.';
$strShowStatusKey_blocks_usedDescr = '��� ������������ ������� � ���� ������. ��� �������� �� ������ �������� ��������� ��� ������� ����� ����� ��� ������� ��� �� ��� � �������� � ���� �����.';
$strShowStatusKey_read_requestsDescr = '��� ������� �� ������ ����� ������ �� ����.';
$strShowStatusKey_readsDescr = '��� �������� ������ ����� ������ �� �����. ��� �� Key_reads ������, ���� �� ���� �������� �� key_buffer_size ��������� �������. ������ �������� ���� �� ���� ���������� ��� Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = '��� ������� �� ��������� ����� ������ � ���.';
$strShowStatusKey_writesDescr = '��� �������� ����� ����� ������ �� ����.';
$strShowStatusLast_query_costDescr = '������ ���� �������� ������������ ����� ���� �� �� ��������� ����������� �����. ������� �� ���������� ���� ���������� ������� ����� �� ���� ����. ������������� �������� 0 ����� �� ��� ��� ��� ���������� ������ ����.';
$strShowStatusNot_flushed_delayed_rowsDescr = '��� ������ � INSERT DELAYED �������� ������ ��� ����� ���������.';
$strShowStatusOpened_tablesDescr = '��� ������ ��� �� ���� ��������. ��� �� ��� ������, ��� ��� ������ �� ��������� �������.';
$strShowStatusOpen_filesDescr = '��� ��������� ��������.';
$strShowStatusOpen_streamsDescr = '��� ��������� ������ (������� �� ����������� �� ���� �������� (logging)).';
$strShowStatusOpen_tablesDescr = '��� ��������� ������.';
$strShowStatusQcache_free_blocksDescr = '��� ��������� ���������� ������� � � ���� �����.';
$strShowStatusQcache_free_memoryDescr = '�������� �������� ������� �� ��� �����.';
$strShowStatusQcache_hitsDescr = '��� �������� �� ����.';
$strShowStatusQcache_insertsDescr = '��� ����� ������� � ���.';
$strShowStatusQcache_lowmem_prunesDescr = '��� ����� ��� �� ������� �� ���� �� �� �� ���������� ������� �� �������� ����� �����. ��� ������� ��� ���� ����� �� �������� �������� ���� �� �����. ��� �� ����� ������� ��������� ������ ������������ (en: least recently used , LRU) �� �� ������� ��� ����� �� ������ �� ����.';
$strShowStatusQcache_not_cachedDescr = '��� ����������� ����� (��� �� �� ���� �������� ��� ���� �������� ���� ���������� query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = '��� ����� ������������� � ����.';
$strShowStatusQcache_total_blocksDescr = '������ ��� ������� � ���� �� �����.';
$strShowStatusReset = '�����';
$strShowStatusRpl_statusDescr = '������ ���������� ������� �� ������ (��� ��� ��������������).';
$strShowStatusSelect_full_joinDescr = '��� ������ ��� �� ������� ��������. ��� ��� �������� ��� 0, ������� �� ������ �� ��������� ������� ����� ������.';
$strShowStatusSelect_full_range_joinDescr = '��� ������ ��� �� ��������� �������� ������ �� ���������� ������.';
$strShowStatusSelect_range_checkDescr = '��� ������ ��� ������ ��� ���������� �������� ���� ����� ������ ����. (��� ��� ��� 0, ������� �� ������ �� ��������� ������� ����� ������.)';
$strShowStatusSelect_rangeDescr = '��� ������ ��� �� ��������� ������ �� ���� ������. (������ ��� �������� ��� �� ���� �� ��� ������)';
$strShowStatusSelect_scanDescr = '��� ������ ��� �� ������� ���� ��������� ���� ������.';
$strShowStatusSlave_open_temp_tablesDescr = '��� ����������� ������ �������� ��������� �� ������ ������ SQL ����.';
$strShowStatusSlave_retried_transactionsDescr = '������ ��� ���� (�� ���������) ���� �� ������ SQL ��� �� ���������� �������� ����������.';
$strShowStatusSlave_runningDescr = '��� �� ON ��� �� ��� ������ ������ ��� �� ������� �� ������.';
$strShowStatusSlow_launch_threadsDescr = '��� ���� �� ��� �� ������� ���� �� slow_launch_time ������� �� �� ���� ���������.';
$strShowStatusSlow_queriesDescr = '��� ����� �� ��� �� ������� ���� �� long_query_time �������.';
$strShowStatusSort_merge_passesDescr = '��� ������� �� ������ ��� �� ��������� �� ��������� ����� �� ������. ��� �� ��� �������� ������, ������� �� �� ���������� � ������� ��������� ��������� ��������� sort_buffer_size.';
$strShowStatusSort_rangeDescr = '��� ��������� ��� �� ������� �� �������.';
$strShowStatusSort_rowsDescr = '��� ���������� ������.';
$strShowStatusSort_scanDescr = '��� ��������� �� ���� �� ����� ���������� ������.';
$strShowStatusTable_locks_immediateDescr = '��� ���� ���� �� ����� �� ������ ����� ��������.';
$strShowStatusTable_locks_waitedDescr = '��� ���� ���� ����� �� ������ ��� ����� ���� ����� �������� � ���� �� �������� ������. ��� �� ��� ������ � ����� �������� �� �������������, ���� �� ������� �� ����������� ���� ����� � ����� �� ��� �������� ������ ��� ������ ��� �� ��������� ����������.';
$strShowStatusThreads_cachedDescr = '��� ���� � ���� �� ����. ������ �������� ���� �� ���� ���������� ��� Threads_created/��������. ��� �� ��� �������� ������ ������� �� �� ������� ��� thread_cache_size.';
$strShowStatusThreads_connectedDescr = '��� �������� ��������� ����.';
$strShowStatusThreads_createdDescr = '��� ���� ��������� �� �������� ����������. ��� �� Threads_created ������, ����� �� ������� �� ������� �������� thread_cache_size. (��� ����� ����� ������������� ����, ��� ������ �� ������ �������� �������� � �������������.)';
$strShowStatusThreads_runningDescr = '��� ���� ��� ���� ��������.';
$strShowTableDimension = '������� �������� ������';
$strShowTables = '������� ������';
$strShowThisQuery = '������� ������ ��� ����';
$strSimplifiedChinese = '������������� �������';
$strSingly = '(�� ������ ���)';
$strSize = '��������';
$strSkipQueries = '��� ������ (�����) ��� ����� ����������:';
$strSlovak = '��������';
$strSlovenian = '���������';
$strSmallBigAll = '��� ����/������';
$strSnapToGrid = '���� �� �����';
$strSocketProblem = '(��� �������� �������� MySQL ������� ��� �������� �������)';
$strSortByKey = '������� �� ����';
$strSorting = '���������';
$strSort = '���������';
$strSpaceUsage = '������';
$strSpanish = '�������';
$strSplitWordsWithSpace = '���� �� ������ �������� (" ").';
$strSQLCompatibility = '��� SQL ���������������';
$strSQLExportType = '��� ������';
$strSQLParserBugMessage = '������ �������� �� ��� �������� ��� � SQL �������. ������ �������� ��� ���� ������, � ��������� �� �� ��������� �������� � �� �� ��������. ������ ����� ������� ������ ���� ���� �� ��� ������� ������� �������� ��� ������� �� ������ �����. ������ ������� ��� ���� � MySQL ����� �������� �����. ��� ������ � ������ MySQL �������, ��� �� ���, ���� ��� ����� � ��������� ��������. ��� � ���� ����� �������� ��� ��� ������ �� ������ ���� ��� ������ ����� �������� �����, ������� ��� SQL ���� �� ����� ������ ���� ��� ������ �������� � �������� ��� ������� � ������ �� ����� ���� � ��� ��� ������:';
$strSQLParserUserError = '������� �� ������ ������ � ����� SQL �����. ���� �� ������ � ������ MySQL �������, ��� ��� ���� ����� � ��������� ��������';
$strSQLQuery = 'SQL ����';
$strSQLResult = 'SQL ��������';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '���������� �ä�����������';
$strSQPBugUnclosedQuote = '�������� ��� ��������';
$strSQPBugUnknownPunctuation = '�������� ������ ������������';
$strStandInStructureForView = '��������� ��� ������ ������';
$strStatCheckTime = '������� �������';
$strStatCreateTime = '���������';
$strStatement = '���';
$strStatisticsOverrun = '�� ���������� ������� ������ ������ ���� �� �� ������ (overrun), ���� �� �� ����������, ����� ���� �� ������� MySQL ������, ���� ���� �������.';
$strStatUpdateTime = '������� ������';
$strStatus = '������';
$strStorageEngine = '����� ����������';
$strStorageEngines = '������ ����������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucExcelCSV = 'CSV �� MS Excel';
$strStrucNativeExcel = '������� MS Excel ������';
$strStrucOnly = '���� ���������';
$strStructPropose = '�������� ��������� ������';
$strStructureForView = '��������� �� ������ (view)';
$strStructure = '���������';
$strSubmit = '������';
$strSuccess = '��� SQL ���� �� ������� �������';
$strSum = '������';
$strSwedish = '�������';
$strSwitchToDatabase = '������� �� �� �������� ����';
$strSwitchToTable = '���� �� �������� ������';

$strTableAlreadyExists = '������ %s �� ������!';
$strTableComments = '��������� ������';
$strTableEmpty = '��� ������ �� ������!';
$strTableHasBeenDropped = '������ %s �� ��������';
$strTableHasBeenEmptied = '������ %s �� ���������';
$strTableHasBeenFlushed = '������ %s �� ��������';
$strTableIsEmpty = '������ �� ������� ������!';
$strTableMaintenance = '���� �� ������';
$strTableName = '����� ������';
$strTable = '������';
$strTableOfContents = '������';
$strTableOptions = '����� ������';
$strTables = '%s ������';
$strTableStructure = '��������� ������';
$strTakeIt = '�������';
$strTblPrivileges = '���������� ������ �� ������';
$strTempData = '���������� ������';
$strTextAreaLength = '���� ������ ��������, ���<br />����� ����� ��� �� ��������';
$strThai = '�����';
$strThemeDefaultNotFound = '��� ��������� ������������� ���� %s!';
$strThemeNoPreviewAvailable = '������� �� ������.';
$strThemeNotFound = '��� ��������� ���� %s!';
$strThemeNoValidImgPath = '���� �������� ������ �� ����� �� ���� %s!';
$strTheme = '���� / ����';
$strThemePathNotFound = '��� ��������� ������ �� ���� �� ���� %s!';
$strThisHost = '��� ������';
$strThreads = '����';
$strThreadSuccessfullyKilled = '������ %s �� ������� ��������.';
$strTime = '�����';
$strTimeoutInfo = '���������� ����� �� ������� �����, ����� �������� ����� ��� �������� �� ������� %d.';
$strTimeoutNothingParsed = '������, ��� �������� ��������� ������ ���� ���� ��������, ��� ������ ����� �� phpMyAdmin ��� ���� � ��������� �� ������ ��� ���� ���� ��� �� ������� ��������� ��������� � PHP-�';
$strTimeoutPassed = '����� ������� ������� �� �������, ��� ������ �� �������� ����, ������ �������� ���� �������� � ���� �� �� ���������.';
$strToFromPage = '��/�� ��������';
$strToggleScratchboard = '�����/������ ����� �����';
$strToggleSmallBig = '������� ����/������';
$strToSelectRelation = '�� ��������� �������, �������� :';
$strTotal = '������';
$strTotalUC = '������';
$strTraditionalChinese = '������������� �������';
$strTraditionalSpanish = '������������� �������';
$strTraffic = '��������';
$strTransactionCoordinator = '����������� ����������';
$strTransformation_application_octetstream__download = '�������� ���� �� ���������� �������� �������� �� ���. ���� ����� �� ��� ������� ��������. ����� ����� �� ����� ��� ��� ���� ������ ��� ������ ��� ��������. ��� ���� ����� �����, ���� ���� ���� ��������� �� ������ ������';
$strTransformation_application_octetstream__hex = '�������� �������������� ������ ��������. ������� ���� ��������� ������ ������ ����� �� ����� ������ ����� (������������� ����� 2 �����).';
$strTransformation_image_jpeg__inline = '�������� ������� ����� �� ��� �� ����� ��������; �����: ������, ������ � ��������� (���� ���������� �����)';
$strTransformation_image_jpeg__link = '�������� ���� �� ��� ������ (���. �������� ���������� �� BLOB-�).';
$strTransformation_image_png__inline = '������� JPEG ����� �� ������';
$strTransformation_text_plain__dateformat = '�������� TIME, TIMESTAMP, DATETIME ��� ��� �� ���������� ������ ���������� ������� (timestamp) ��� ����������� �����. ���� ����� �� ������ (� ������) ��� �� ����� ��������� ������ (�������������: 0). ����� ����� ���������� �� �������� �������� ������ �� ����������� ������/�������. ���� ����� ������ �� �� ������ �� ������ ������� ��� UTC ����� (��������� ��������� "local" ��� "utc" �� ��). � ������ �� ���, ������ ������ ��� ��������� ��������� - �� "local" ��������� PHP-��� ������������ �� ������� strftime() ��� �� �� "utc" �� ������� ��������� ������ gmdate().';
$strTransformation_text_plain__external = '���� LINUX: ������ �������� ��������� � ������� ������� � ����� ����� ����������� �����. ����� ���������� ����� ���������. ������������� �� Tidy, �� ����� ������ HTML ����. ���� ����������� �������, ������ ����� �������� �������� libraries/transformations/text_plain__external.inc.php � ������ ����� ��� ������ �� ���������. ���� ����� �� ��� �������� ��� ������ �� ���������, � ����� �� ��������� ��������. ��� �� ���� ��������� ������� �� 1 ����� �� ���� ����������� �������� htmlspecialchars() (������������� �� 1). ��� �� ������� ��������� �������� �� 1, NOWRAP �� ���� ������ ����� �� �������� ���� �� �� ����� ���� �������� ��� ������. (������������� 1)';
$strTransformation_text_plain__formatted = '���� ���������� ����������� ���. Escaping �� �� ����.';
$strTransformation_text_plain__imagelink = '�������� ����� � ����, ��� ������ ����� ��������; ���� ����� �� ������� ��� "http://domain.com/", ����� ����� �� ������ � ���������, ���� �� ������.';
$strTransformation_text_plain__link = '�������� ����, ��� ������ ����� ��������; ���� ����� �� ������� ��� "http://domain.com/", ����� ����� �� ������ �� ����.';
$strTransformation_text_plain__sql = '��������� ����� ��� SQL ���� �� ������������ ��������.';
$strTransformation_text_plain__substr = '������� ��� �������. ���� ����� �� ��� ������� ��� ����� ���������� �� ������� ������� (������������� 0). ����� ����� �� ��� �������� ������� (�������������: �� ���� �������). ���� ����� �� ������ ��� �� ����� ���� ��� �� �������� (�������������: ...) .';
$strTriggers = '�������';
$strTruncateQueries = '������� �������� �����';
$strTurkish = '������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '������';
$strUnicode = '������';
$strUnique = '�����������';
$strUnknown = '��������';
$strUnselectAll = '�����';
$strUnsupportedCompressionDetected = '�������� ��� �� ������� �������� �� ���������� ��� ��� �������� (%s). ��� ������� �� �� ��� ��������������, ��� �� �������� � ���� ������������.';
$strUpdatePrivMessage = '��������� ��� ���������� �� %s.';
$strUpdateProfileMessage = '������ �� �������.';
$strUpdateQuery = '������� ����';
$strUpdComTab = '������ ��������� � ������������ ���� �� ������� ������ Column_comments';
$strUpgrade = '������� �� �� ���������� ��� %s ������ �� ������ %s ��� �����.';
$strUploadErrorCantWrite = '�������� ��������� �������� �� ����.';
$strUploadErrorExtension = '����� �������� ��������� ���� ���������.';
$strUploadErrorFormSize = '������� �������� ����������� �������� ��������� MAX_FILE_SIZE ��� �� �������� � HTML �����.';
$strUploadErrorIniSize = '������� �������� ����������� �������� ��������� upload_max_filesize � php.ini.';
$strUploadErrorNoTempDir = '�������� ���������� �����������.';
$strUploadErrorPartial = '������� �������� �� ���� ��������� �������.';
$strUploadErrorUnknown = '��������� ������ ��� ����� ��������.';
$strUploadLimit = '��������� ��� �������� �� ������� ��������� ��������. ������ ��������� %s������������%s �� ������ ������������ ���� ���������.';
$strUploadsNotAllowed = '����� �������� �� ��� ������ ��� ��������.';
$strUsage = '������';
$strUseBackquotes = '������� \' �� ������������ ����� ���';
$strUsedPhpExtensions = '��������� PHP ���������';
$strUseHostTable = '������� ������ ��������';
$strUserAlreadyExists = '�������� %s �� ������!';
$strUser = '��������';
$strUserEmpty = '��� ��������� ��� �����!';
$strUserName = '��� ���������';
$strUserNotFound = '�������� �������� ��� �������� � ������ ����������.';
$strUserOverview = '������� ���������';
$strUsersDeleted = '�������� ��������� �� ������� ��������.';
$strUsersHavingAccessToDb = '��������� ��� ���� ������� &quot;%s&quot;';
$strUseTabKey = '��������� TAB ������ �� �������� �� ��� �� ���, ��� CTRL+�������� �� �������� ��������';
$strUseTables = '������� ������';
$strUseTextField = '������� ����� ���';
$strUseThisValue = '������� ��� ��������';

$strValidateSQL = '������� SQL';
$strValidatorError = 'SQL ��������� ��� ����� �� ���� ��������. ��������� �� �� �� ����������� ��������� PHP ��������� ������� �  %s������������%s.';
$strValue = '��������';
$strVar = '���������';
$strVersionInformation = '���������� � ������';
$strViewDumpDatabases = '������� ������ (�����) ����';
$strViewDumpDB = '������� ������ (�����) ����';
$strViewDump = '������� ������ (�����) ������';
$strViewHasBeenDropped = '������ %s �� �������';
$strView = '������';
$strViewMaxExactCount = '��� ������ ��� ���� �� %d ������. ������ ��������� %s������������%s.';
$strViewName = '����� �� VIEW';

$strWebServerUploadDirectory = '����������� �� ����� ��� ������� ';
$strWebServerUploadDirectoryError = '����������� ��� ��� �������� �� ����� ��� ��������';
$strWelcome = '���������� �� %s';
$strWestEuropean = '���������������';
$strWildcard = '�����';
$strWindowNotFound = '��������� ������ ������������ ��� ����� �� ���� ��������. ����� ��� ��������� ������� ������, ��� ��� ����������� ���������� ��������� ��� ��������� ���� ����������� ����������';
$strWithChecked = '��������:';
$strWriteRequests = '������� �� ����';
$strWrongUser = '�������� ���������� ���/�������. ������� ������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '��������: ��������� ���� ����� �� 0 (����) ������ ���������.';
$strZip = '"��������"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
