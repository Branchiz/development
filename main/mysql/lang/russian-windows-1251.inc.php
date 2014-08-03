<?php
/* $Id: russian-windows-1251.inc.php 11161 2008-03-09 14:12:30Z lem9 $ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 *               (nobody) 2004-09-18
 */

$charset = 'windows-1251';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
// �� ���� 8.417-2002
$byteUnits = array('����', '��', '��', '��', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';
$timespanfmt = '%s ����, %s �����, %s ����� � %s ������';

$strAbortedClients = '��������';
$strAccessDenied = '� ������� ��������';
$strAccessDeniedCreateConfig = '��������� ������� - ���������� ����� ������������. ��� ��� �������� �� ������ ��������������� %1$s��������� ���������%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin �� ���� ���������� ���������� � �������� MySQL. ��������� ����, ��� ������������ � ������ ������������� � ���������������� ����� config.inc.php � ��������������, ��� ��� ������������� ������ ���������� �� �������������� ������� MySQL.';
$strAction = '��������';
$strAddAutoIncrement = '�������� AUTO_INCREMENT';
$strAddClause = '�������� %s';
$strAddConstraints = '�������� �����������';
$strAddDeleteColumn = '��������/������� ������� ��������';
$strAddDeleteRow = '��������/������� ��� ��������';
$strAddFields = '�������� %s ����(�)';
$strAddHeaderComment = '�������� ����������� ����������� � ��������� (������� ������: \\n)';
$strAddIntoComments = '�������� � �����������';
$strAddNewField = '�������� ����� ����';
$strAddPrivilegesOnDb = '�������� ���������� �� ��������� ����';
$strAddPrivilegesOnTbl = ' �������� ���������� �� ��������� �������';
$strAddSearchConditions = '�������� ������� ������ (���� ��� ������� "WHERE"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;�������(�)';
$strAddUser = '�������� ������ ������������';
$strAddUserMessage = '��� �������� ����� ������������.';
$strAdministration = '�����������������';
$strAffectedRows = '��������� �����:';
$strAfter = '����� %s';
$strAfterInsertBack = '��������� �� ���������� ��������';
$strAfterInsertNewInsert = '�������� ����� ������';
$strAfterInsertNext = '������������� ��������� ������';
$strAfterInsertSame = '��������� � ������ ��������';
$strAll = '���';
$strAllowInterrupt = '��������� ������� ��������� ������� ������� ��� ����������� ���������� ������. ����� ���� ������������ ��� ������� ������ �������� �������.';
$strAllTableSameWidth = '�������� ��� ������� ���������� ������';
$strAlterOrderBy = '�������� ���������� �������';
$strAnalyzeTable = '������ �������';
$strAnd = '�';
$strAndThen = '� �����';
$strAngularLinks = '������� ����� ������';
$strAnIndex = '��� �������� ������ ��� %s';
$strAny = '�����';
$strAnyHost = '����� ����';
$strAnyUser = '����� ������������';
$strApproximateCount = '����� ���� ��������������. ��. FAQ 3.11';
$strAPrimaryKey = '��� �������� ��������� ���� � %s';
$strArabic = '��������';
$strArmenian = '���������';
$strAscending = '�� �����������';
$strAtBeginningOfTable = '� ������ �������';
$strAtEndOfTable = '� ����� �������';
$strAttr = '��������';
$strAutomaticLayout = '�������������� ���������';

$strBack = '�����';
$strBaltic = '����������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = '��������';
$strBinaryDoNotEdit = '�������� ������ - �� �������������';
$strBinaryLog = '�������� ������';
$strBinLogEventType = '��� �������';
$strBinLogInfo = '����������';
$strBinLogName = '���� �������';
$strBinLogOriginalPosition = '�������� �������';
$strBinLogPosition = '�������';
$strBinLogServerId = 'ID �������';
$strBookmarkAllUsers = '�������� ��� ���� �������������';
$strBookmarkCreated = '�������� &quot;%s&quot; �������';
$strBookmarkDeleted = '�������� �������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '��������� ��������';
$strBookmarkReplace = '�������� ������������ � ����� �� ������';
$strBookmarkThis = '�������� ��������';
$strBookmarkView = '��������';
$strBrowse = '�����';
$strBrowseDistinctValues = '����� ���������� ��������';
$strBrowseForeignValues = '����� ������� ��������';
$strBufferPoolActivity = '����������';
$strBufferPool = '�������� ���';
$strBufferPoolUsage = '�������������';
$strBufferReadMissesInPercent = '�������� ��� ������, � %';
$strBufferReadMisses = '�������� ��� ������';
$strBufferWriteWaitsInPercent = '�������� �������, � %';
$strBufferWriteWaits = '�������� �������';
$strBulgarian = '����������';
$strBusyPages = '������� �������';
$strBzError = 'phpMyAdmin �� ����� ����� ���� ��-�� ������� � ��c�������� Bz2 � ������� ������ PHP. ������ ������������� ���������� ���������� <code>$cfg[\'BZipDump\']</code> � ����� ���������������� ����� phpMyAdmin �������� <code>FALSE</code>. ���� �� ������ ������������ ������ Bz2, ���������� �������� PHP. �������� ����� �� ������� PHP %s ��� ����� ��������� ����������.';
$strBzip = 'bzip';

$strCalendar = '���������';
$strCancel = '������';
$strCanNotLoadExportPlugins = '������ ��������, �����������! ��������� ���������� �������� libraries/export ������������� ����� phpMyAdmin.';
$strCanNotLoadImportPlugins = '������ ������� - �����������! ��������� ���������� �������� libraries/import ������������� ����� phpMyAdmin.';
$strCannotLogin = '���������� ������������ � ������� MySQL';
$strCantLoad = '���������� ��������� ���������� [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a]! ��������� ��������� PHP.';
$strCantLoadRecodeIconv = '�� ���������� ���������� iconv ��� recode, ����������� ��� ����������� ���������. ���������� ��������� PHP, ������� ������ ����������, ��� ��������� ����������� ����������� ��������� � ���������� phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�������� �� �� ��� ����������� ���������� ���������, ������������� ������� iconv, libiconv ��� recode_string - ����������. ��������� ��������� PHP.';
$strCardinality = '���������� ���������';
$strCaseInsensitive = '�������������������';
$strCaseSensitive = '�����������������';
$strCentralEuropean = '����������-�����������';
$strChange = '��������';
$strChangeCopyMode = '������� ������ ������������ � ������ �� ������������...';
$strChangeCopyModeCopy = '� ��������� �������.';
$strChangeCopyModeDeleteAndReload = ', ������� ������� �� ������ ������������� � ������������� ����������.';
$strChangeCopyModeJustDelete = '� ������� ������� �� ������ �������������.';
$strChangeCopyModeRevoke = ', �������� ��� �������� ���������� ������� � ����� ������� ���.';
$strChangeCopyUser = '��������/���������� ������� ������';
$strChangeDisplay = '����� ������������� �������';
$strChangePassword = '�������� ������';
$strCharset = '���������';
$strCharsetOfFile = '��������� �����:';
$strCharsets = '���������';
$strCharsetsAndCollations = '��������� � ���������';
$strCheckAll = '�������� ���';
$strCheckOverhead = '�������� ��������� �����������';
$strCheckPrivs = '��������� ����������';
$strCheckPrivsLong = '��������� ���������� ��� ���� ������ &quot;%s&quot;';
$strCheckTable = '��������� �������';
$strChoosePage = '����� �������� ��� ��������������';
$strColComFeat = '���������� ����������� ��������';
$strCollation = '���������';
$strColumnNames = '�������� ��������';
$strColumnPrivileges = '���������� ������ �������';
$strCommand = '�������';
$strComments = '�����������';
$strCommentsForTable = '����������� � �������';
$strCompatibleHashing = 'MySQL&nbsp;4.0 ����������';
$strCompleteInserts = '������ �������';
$strCompression = '���������';
$strCompressionWillBeDetected = '�������������� ����������� ���� ������, ��������: %s';
$strConfigDefaultFileError = '���������� ��������� ����������� ������������ ��: &quot;%1$s&quot;';
$strConfigFileError = 'phpMyAdmin �� ���� �������� ���������������� ����!<br />��� ����� ��������� ���� PHP ����� � ��� ������, ��� ���� �� ������.<br />�������� ���������������� ���� ��������, ��������� ������ ������ ����, � ����������� ��������� �� ������� ���������� PHP. � ����������� �������, �������� �������������� ������, ��������, ���-�� ��������� ������� ��� ����� � �������.<br />���� ����������� ������ �������� - ��� � �������.';
$strConfigureTableCoord = '�������� ���������� ������� %s';
$strConnectionError = '���������� ����������! �������� ���������.';
$strConnections = '����������';
$strConstraintsForDumped = '����������� �������� ����� ����������� ������';
$strConstraintsForTable = '����������� �������� ����� �������';
$strControluserFailed = '�� ������� ���������� ����������� ��� ������������ ���������� � ��������� controluser, � ������� ���������� ������������ � ���������������� ����� config.inc.php.';
$strCookiesRequired = '��� ����������� ������ ���������� ��������� cookies ���������.';
$strCopy = '������������';
$strCopyDatabaseOK = '���� ������ %s ���� ����������� � %s';
$strCopyTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ����������� � %s.';
$strCopyTableSameNames = '���������� ����������� ������� ���� � ����!';
$strCouldNotKill = 'phpMyAdmin �� ���� ��������� ������ ������ � ID %s. ��������, �� ��� ��� ������.';
$strCreate = '�������';
$strCreateDatabaseBeforeCopying = '����� ������������ ������� ���� ������ (CREATE DATABASE)';
$strCreateIndex = '������� ������ ��� &nbsp;%s&nbsp; �������/��';
$strCreateIndexTopic = '������� ����� ������';
$strCreateNewDatabase = '����� ���� ������';
$strCreateNewTable = '������� ����� ������� � ���� ������ %s';
$strCreatePage = '������� ����� ��������';
$strCreatePdfFeat = '�������� PDF-�����';
$strCreateRelation = '������� �����';
$strCreateTable  = '������� �������';
$strCreateUserDatabase = '���� ������ ��� ������������';
$strCreateUserDatabaseName = '������� ���� ������ � ������ ������������ � �������� � ������������ �� ��� ������ ����������';
$strCreateUserDatabaseNone = '�� ���������';
$strCreateUserDatabaseWildcard = '������������ ������ ���������� �� ���� ������ ����������� ��� ������ (��� ������������\_%)';
$strCreationDates = '���� ��������, ���������� � ��������';
$strCriteria = '��������';
$strCroatian = '����������';
$strCSV = 'CSV';
$strCyrillic = '�������������';
$strCzech = '�������';
$strCzechSlovak = '�������������';

$strDanish = '�������';
$strData = '������';
$strDatabase = '���� ������';
$strDatabaseEmpty = '�� ������� ��� ���� ������!';
$strDatabaseExportOptions = '��������� �������� ���� ������';
$strDatabaseHasBeenDropped = '���� ������ %s ���� �������.';
$strDatabases = '���� ������';
$strDatabasesDropped = '������� ��� ������: %s';
$strDatabasesStats = '���������� ��� ������';
$strDatabasesStatsDisable = '��������� ����������';
$strDatabasesStatsEnable = '�������� ����������';
$strDatabasesStatsHeavyTraffic = '����������: ��������� ���������� ��� ������ ����� �������������� ������� ������ ����� ���-�������� � �������� MySQL.';
$strDataDict = '������� ������';
$strDataOnly = '������ ������';
$strDataPages = '������� � �������';
$strDBComment = '����������� � ���� ������:';
$strDBCopy = '����������� ���� ������ �';
$strDbIsEmpty = '���� ������ - �����!';
$strDbPrivileges = '���������� ������ ���� ������';
$strDBRename = '������������� ���� ������ �';
$strDbSpecific = '������� ���� ������';
$strDefault = '�� ���������';
$strDefaultEngine = '%s - ��� ������ ������� MySQL ������� ��������������� �� ���������.';
$strDefaultValueHelp = '��� �������� ���� "�� ���������" �� ����������� ������� ������������� � �������.';
$strDefragment = '����������������� �������';
$strDelayedInserts = '������������ ���������� ������� (DELAYED)';
$strDelete = '�������';
$strDeleteAndFlush = '������� ���� ������������� � ������������� ����������.';
$strDeleteAndFlushDescr = '��� ������ ������, ���� ������������ ���������� ����� ������ �����-�� �����.';
$strDeleted = '������ ���� �������';
$strDeletedRows = '������� �����:';
$strDeleteNoUsersSelected = '�� ������� ������������ ���������� ��������!';
$strDeleteRelation = '������� �����';
$strDeleting = '�������� %s';
$strDelimiter = '�����������';
$strDelOld = '�� ������� �������� ������������ ������ �� �������, ������� ������ �� ����������. ������� ��� ������?';
$strDescending = '�� ��������';
$strDescription = '��������';
$strDesigner = '��������';
$strDesignerHelpDisplayField = '��� ���� ����� ������� ������� ������������, ������� ������ "����� ������������� �������" � �������� ����������� �������. ������������ ������� �������������� ������� ������.';
$strDictionary = '�������';
$strDirectLinks = '������ ����� ������';
$strDirtyPages = '������� �������';
$strDisabled = '����������';
$strDisableForeignChecks = '��������� �������� ������� ������';
$strDisplayFeat = '�������� �����������';
$strDisplayOrder = '����������:';
$strDisplayPDF = '�������� PDF-�����';
$strDoAQuery = '��������� "������ �� �������" (��������� ������: "%")';
$strDocSQL = 'DocSQL';
$strDocu = '������������';
$strDoYouReally = '�� ������������� ������ ��������� ������';
$strDrop = '�������';
$strDropDatabaseStrongWarning = '���� ������ ����� ��������� �������!';
$strDropUsersDb = '������� ���� ������, ����� ������� ��������� � ������� �������������.';
$strDumpingData = '���� ������ �������';
$strDumpSaved = '���� ��� �������� � ���� %s.';
$strDumpXRows = '���� �� %s �����, ������� � ������ # %s.';
$strDynamic = '������������';

$strEdit = '��������';
$strEditPDFPages = '�������������� PDF-�������';
$strEditPrivileges = '�������������� ����������';
$strEffective = '�������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ������� ������ ��������� (�.�. ���� �����).';
$strEnabled = '��������';
$strEncloseInTransaction = '��������� ������� � ����������';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEngineAvailable = '������ MySQL-������ ������������ ������� ���� %s.';
$strEngineDisabled = '��� ������ %s ��� �������� �� ������ MySQL �������.';
$strEngines = '���� ������';
$strEngineUnsupported = '������ ������ MySQL �� ������������ ��� ������ %s.';
$strEnglish = '����������';
$strEnglishPrivileges = '����������: ���� ���������� MySQL ������������ ��-���������.';
$strError = '������';
$strErrorInZipFile = '������ � ZIP-������:';
$strErrorRelationAdded = '������: ����� �� ���������.';
$strErrorRelationExists = '������: ����� ��� ����������.';
$strErrorRenamingTable = '������ ��� �������������� ������� %1$s � %2$s';
$strErrorSaveTable = '������ ���������� ���������.';
$strEscapeWildcards = '��� ������������� � ����� ���� ������ �������� ������� ������������� (_) � �������� (%), ���������� ������������ �� �������� �������� ����� ����� (\), � ��������� ������ ��� ����� ���������������� ��� ��������� �������';
$strEsperanto = '���������';
$strEstonian = '���������';
$strEvent = '�������';
$strExcelEdition = 'Excel-������';
$strExecuteBookmarked = '��������� ���������� ������';
$strExplain = '������ �������';
$strExport = '�������';
$strExportImportToScale = '�������';
$strExportMustBeFile = '��������� ��� �������� �������� ������ � ����!';
$strExtendedInserts = '����������� �������';
$strExtra = '�������������';

$strFailedAttempts = '��������� �������';
$strField = '����';
$strFieldHasBeenDropped = '���� &quot;%s&quot; ���� �������';
$strFields = '����';
$strFieldInsertFromFileTempDirNotExists = '������ ��� ����������� ������������ �����, ��. FAQ 1.11';
$strFieldsEnclosedBy = '�������� ����� ���������';
$strFieldsEscapedBy = '������ �������������';
$strFieldsTerminatedBy = '����������� �����';
$strFileAlreadyExists = '���� %s ��� ���������� �� �������, �������� ��� ��� �������� �������� ����������.';
$strFileCouldNotBeRead = '������ ��� ������ �����';
$strFileNameTemplate = '������ ����� �����';
$strFileNameTemplateDescriptionDatabase = '��� ���� ������';
$strFileNameTemplateDescriptionServer = '��� �������';
$strFileNameTemplateDescriptionTable = '��� �������';
$strFileNameTemplateDescription = '�������� �������������� �������� %1$sstrftime%2$s, ��������� ���� �������� ������� ������� ���� � �������. ������������� ����� ���� ������������ ��������� �����������: %3$s. ��������� ����� ��������� ��� ���������.';
$strFileNameTemplateRemember = '��������� ������';
$strFiles = '������';
$strFileToImport = '������������� ����';
$strFixed = '�������������';
$strFlushPrivilegesNote = '����������: phpMyAdmin �������� ���������� � ���������������� ����������� ��������������� �� ������ ���������� MySQL. ���������� ���� ������ ����� ���������� �� ����������, ������������ ��������, ���� ��� ���� �������� �������. � ����� ������ ���������� %s������������� ����������%s.';
$strFlushQueryCache = '����������������� ��� ��������';
$strFlushTable = '�������� ��� ������� (&quot;FLUSH&quot;)';
$strFlushTables = '������� ��� �������';
$strFontSize = '������ ������';
$strForeignKeyError = '������ ��� �������� �������� ����� (��������� ���� ������)';
$strFormat = '������';
$strFormEmpty = '�� ��������� ����������� ���� �����!';
$strFreePages = '������ �������';
$strFullText = '����������� ����������� ������';
$strFunction = '�������';
$strFunctions = '�������';

$strGenBy = '������';
$strGeneralRelationFeat = '�������� ����������� ������';
$strGenerate = '������������';
$strGeneratePassword = '������� ������';
$strGenTime = '����� ��������';
$strGeorgian = '����������';
$strGerman = '��������';
$strGlobal = '���������� �������';
$strGlobalPrivileges = '���������� ����������';
$strGlobalValue = '���������� ��������';
$strGo = 'OK';
$strGrantOption = 'GRANT';
$strGreek = '���������';
$strGzip = 'gzip';

$strHandler = '����������';
$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� �������.';
$strHaveToShow = '��� ���������� �������, ������ ���� ������ ������������ �������/�������.';
$strHebrew = '�����';
$strHelp = '������';
$strHexForBLOB = '������������ ����������������� ����������� ��� ����� ���� BLOB';
$strHide = '������';
$strHideShowAll = '������/���������� ��� �������';
$strHideShowNoRelation = '������/���������� ������� �� ������� ������';
$strHome = '� ������';
$strHomepageOfficial = '����������� �������� phpMyAdmin';
$strHost = '����';
$strHostEmpty = '������ ��� �����!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = '����������';

$strIcelandic = '����������';
$strId = 'ID';
$strIdxFulltext = '��������������';
$strIEUnsupported = 'Internet Explorer �� ������������ ������ �������.';
$strIgnore = '������������';
$strIgnoreDuplicates = '������������ ������������� ������';
$strIgnoreInserts = '������������ ������������ ������� (IGNORE)';
$strImport = '������';
$strImportExportCoords = '������/������� ��������� ������ �/�� PDF-�����';
$strImportFiles = '������ ������';
$strImportFormat = '������ �������������� �����';
$strImportSuccessfullyFinished = '������ ������� ��������, �������� ���������: %d.';
$strIndex = '������';
$strIndexes = '�������';
$strIndexesSeemEqual = '��������� ������� ���������� ��� ����������, � ���� �� ��� ������ ���� ������:';
$strIndexHasBeenDropped = '������ %s ��� ������';
$strIndexName = '��� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexWarningTable = '�������� � ��������� ������� `%s`';
$strInnoDBAutoextendIncrement = '�������������� ����������';
$strInnoDBAutoextendIncrementDesc = '������ (� ����������) ��������������� ���������� ����� ������ ��� ������������ ��������� �������';
$strInnoDBBufferPoolSize = '������ ��������� ����';
$strInnoDBBufferPoolSizeDesc = '������ ������ ������, ������� InnoDB ���������� ��� ����������� ������ � �������� ����� ������';
$strInnoDBDataFilePath = '����� ������';
$strInnoDBDataHomeDir = '�������� ������� ��� ������';
$strInnoDBDataHomeDirDesc = '����� ����� ���� � �������� ��� ���� ������ ������ InnoDB';
$strInnoDBPages = '�������';
$strInnoDBRelationAdded = '������� ����� ������ ���� InnoDB';
$strInnodbStat = '��������� InnoDB';
$strInsecureMySQL = '���������������� ���� phpMyAdmin �������� ��������� MySQL ��-���������, �������� ������� ��� ������������������ ������������ &quot;root&quot; �� ����� ������. ����� ��������� ������ MySQL-������ ��������  ��� �������������������� �������, ������� ������������ ������������� ���������� ������ ��� ������������ &quot;root&quot;.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ������';
$strInsertedRowId = '������������� ����������� ������:';
$strInsertedRows = '��������� ������:';
$strInternalNotNecessary = '* ��� ������� ���������� ����� � ������� ���� InnoDB, �� ��������� �� �����������.';
$strInternalRelationAdded = '��������� ���������� �����';
$strInternalRelations = '���������� �����';
$strInUse = '������������';
$strInvalidAuthMethod = '� ���������������� ����� phpMyAdmin ���������� �������� ����� ��������������:';
$strInvalidColumn = '������ �������� ������� (%s)!';
$strInvalidColumnCount = '���������� �������� ������ ���� ������ ����.';
$strInvalidCSVFieldCount = '������������ ���������� ����� �� ������� CSV-������ � ������ %d.';
$strInvalidCSVFormat = '������������ ������ ������� CSV-������ � ������ %d.';
$strInvalidCSVParameter = '������������ �������� ������� CSV: %s';
$strInvalidDatabase = '������������ ���� ������'; 
$strInvalidFieldAddCount = '���������� �������� ���� �� ���� ����.';
$strInvalidFieldCount = '� ������� ������ ����, ��� �������, ���� ����.';
$strInvalidLDIImport = '���� ������ �� ������������ ������ ������ ������!';
$strInvalidRowNumber = '����� %d �� �������� ���������� ������� ������.';
$strInvalidServerHostname = '��� ������� %1$s ������� �������� ��� �����. ��������� ��������� �������� � ���������������� ����� phpMyAdmin.';
$strInvalidServerIndex = '������������ ����� �������: &quot;%s&quot;';
$strInvalidTableName = '������������ ��� �������';

$strJapanese = '��������';
$strJoins = '�����������';
$strJumpToDB = '������� � ���� ������ &quot;%s&quot;';
$strJustDelete = '������ ������� ������������� �� ������ ����������.';
$strJustDeleteDescr = '&quot;���������&quot; ������������ ����� ����� ������ � �������, ���� ������� ���������� �� ����� �������������.';

$strKeepPass = '�� ������ ������';
$strKeyCache = '��� �������';
$strKeyname = '��� �������';
$strKill = '���������';
$strKnownExternalBug = '������ ��������� &quot;%s&quot; ���������� ������, �������� �������� �� %s';
$strKorean = '���������';

$strLandscape = '���������';
$strLanguage = '����';
$strLanguageUnknown = '����������� ����: %1$s.';
$strLatchedPages = '������������� �������';
$strLaTeX = 'LaTeX';
$strLatexCaption = '��������� �������';
$strLatexContent = '���������� ������� __TABLE__';
$strLatexContinued = '(�����������)';
$strLatexContinuedCaption = '��������� ������� (�����������)';
$strLatexIncludeCaption = '�������� ��������� �������';
$strLatexLabel = '������������� �����';
$strLatexStructure = '��������� ������� __TABLE__';
$strLatvian = '����������';
$strLDI = 'CSV, ��������� LOAD DATA';
$strLDILocal = '������������ �������� ����� LOCAL';
$strLengthSet = '�����/��������';
$strLimitNumRows = '���������� ����� �� ��������';
$strLinesTerminatedBy = '����������� �����';
$strLinkNotFound = '����� �� �������';
$strLinksTo = '�����';
$strLithuanian = '���������';
$strLocalhost = '���������';
$strLocationTextfile = '����� �����';
$strLogin = '�����������';
$strLoginInformation = '���������� ������� ������';
$strLogout = '�����';
$strLogPassword = '������:';
$strLogServer = '������';
$strLogUsername = '������������:';
$strLongOperation = '���������� ������ �������� ����� ������ ���������� �����. ����������?';

$strMaxConnects = '����������� �������������';
$strMaximalQueryLength = '������������ ����� ������������ �������';
$strMaximumSize = '������������ ������: %s%s';
$strMbExtensionMissing = '��� ������ � ������������� ����������� ��� �������������� ���������� PHP &quot;mbstring&quot;, phpMyAdmin �� � ��������� ����������� ���������� ��������� �����, ��� ����� �������� � ��������������� �����������. ���������� ���������� PHP &quot;mbstring&quot;.';
$strMbOverloadWarning = '� ������������ PHP �������, ������������� � phpMyAdmin, �������� mbstring.func_overload. ��� �������������� ��������� ������ ������, ������ �������� ������ ���� ��������!';
$strMIME_available_mime = '��������� MIME-����';
$strMIME_available_transform = '��������� ��������������';
$strMIME_description = '��������';
$strMIME_MIMEtype = 'MIME-���';
$strMIME_nodescription = '�� ������ ������ �������� �����������.<br />������  ������������ ������� ����������� �������������� %s, ����� � ������ ������� �������.';
$strMIME_transformation = '��������������';
$strMIME_transformation_note = '��� ��������� ��������� MIME-����� � ���������� �������������� �������������� ������ ������� - %s�������� ��������������%s';
$strMIME_transformation_options = '��������� ��������������';
$strMIME_transformation_options_note = '�������� ���������� �������������� ������ ����� ������: \'a\', 100, \'b\', \'c\'...<br />������� �������� ����� ����� (\\) � ��������� ������� (\') ���������� ������������ (����������) �������� �������� ����� �����, ��������: \'\\\\xyz\' ��� \'a\\\'b\'.';
$strMIME_without = 'MIME-����, ���������� ��������, �� ����� ��������� ������� �������������';
$strMIMETypesForTable = 'MIME-���� �������';
$strModifications = '��������� ���������';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveMenu = '����������� ����';
$strMoveTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMoveTableSameNames = '�� �������� ����������� ������� ���� � ����!';
$strMultilingual = '������������';
$strMyISAMDataPointerSize = '������ ��������� � ����� ������';
$strMyISAMDataPointerSizeDesc = '����������� ������ ��������� � ����� ������, ��� �������� ������ (CREATE TABLE) ���� MyISAM, � ��������������� ���������� ������������� ����� ����� (MAX_ROWS).';
$strMyISAMMaxExtraSortFileSize = '������������ ������ ���������� ����� ��� �������� �������';
$strMyISAMMaxExtraSortFileSizeDesc = '���� ������ ���������� �����, ������������� ��� �������� �������� �������� ������ ���� MyISAM, ��������� �� ��������� ����� ����� ������������ ��� �������, �� ������������ �������� ����� ��������, �� ����� ��������� ������ ����������� �������.';
$strMyISAMMaxSortFileSize = '������������ ������ ��������� ��������� ������';
$strMyISAMMaxSortFileSizeDesc = '������������ ������ ���������� �����, ������� MySQL ����� ������������ ��� �������������� ������� (��� ���������� ������ REPAIR TABLE, ALTER TABLE, ��� LOAD DATA INFILE). ��� ������, ������ ������� ��������� ��������� ��������, ������ ����� ����������� ��� ������ ���� �������� (����� �������� �������� ��������� ���������, �� ����� �������).';
$strMyISAMRecoverOptions = '����� ��������������� ��������������';
$strMyISAMRecoverOptionsDesc = '����� ��������������� �������������� ������ ����� ����. ��������������� ���������� --myisam-recover, ��� ������� �������.';
$strMyISAMRepairThreads = '������� ��������������';
$strMyISAMRepairThreadsDesc = '���� �������� ������ �������, ������� ������ ���� MyISAM ������� ����������� (������ ������ � ����� ������) �� ����� �������� �������������� � ������� ���������� (Repair by sorting).';
$strMyISAMSortBufferSize = '������ ������ ����������';
$strMyISAMSortBufferSizeDesc = '�����, ������� ���������� ��� ���������� �������� ��� ���������� ������� REPAIR TABLE ��� ��� �������� �������� ��� ������ ������ CREATE INDEX ��� ALTER TABLE.';
$strMySQLCharset = 'MySQL-���������';
$strMysqlClientVersion = '������ MySQL-�������';
$strMySQLConnectionCollation = '������������� ���������� � MySQL';
$strMysqlLibDiffersServerVersion = '������ ���������� ���������� MySQL (%s) ���������� �� ������ �������������� MySQL-������� (%s). ��� ����� �������� � ������������ ������.';
$strMySQLSaid = '����� MySQL: ';
$strMySQLShowProcess = '������ ���������';
$strMySQLShowStatus = '������� ��������� MySQL';
$strMySQLShowVars = '��������� ���������� MySQL';

$strName = '���';
$strNext = '���������';
$strNo = '���';
$strNoActivity = '���������� ���������� ����� %s ������, ����������, ������������� ������';
$strNoDatabases = '���� ������ �����������';
$strNoDatabasesSelected = '�� ���� ���� ������ �� �������.';
$strNoDataReceived = '�������� ������� ����������. �������: �� ������ ������������� ����; ������ �������������� ����� ��������� ����������� ����������, �������� � ���������� PHP. ��. FAQ 1.16';
$strNoDescription = '��� ��������';
$strNoDetailsForEngine = '�������������� ���������� � ��������� ������� ���� ������ - �����������.';
$strNoDropDatabases = '������� "DROP DATABASE" (������� ���� ������) - ���������.';
$strNoExplain = '������ ������';
$strNoFilesFoundInZip = '������ ������ ZIP-������ �� �������!';
$strNoFrames = '��� ������ phpMyAdmin ����� ������� � ���������� <b>�������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '����� ������� �� ����������!';
$strNoModification = '��� ���������';
$strNone = '���';
$strNoOptions = '��� ����� ������� ��� ������������� ����������';
$strNoPassword = '��� ������';
$strNoPermission = '�� ���������� ���� ��� ���������� ����� %s �� ���-�������.';
$strNoPhp = '������ PHP-���';
$strNoPrivileges = '��� ����������';
$strNoRights = '��� ������� � ������ �������� � ��� ������������ ����!';
$strNoRowsSelected = '��� ���������� �������� ���������� ������� ���� ��� ��������� �����';
$strNoSpace = '��� ���������� ����� %s ������������ ��������� ������������.';
$strNoTablesFound = '������ � ���� ������ �� ����������.';
$strNoThemeSupport = '��������� ��� �� ��������, ��������� ������������ � ������� ��� � �������� %s.';
$strNotNumber = '������� �����!';
$strNotOK = '�� ������';
$strNotSet = '������� <b>%s</b> �� ������� ��� �� ����������� � %s';
$strNoUsersFound = '������������� �� �������.';
$strNoValidateSQL = '������ �������� ���������� SQL';
$strNull = 'Null';
$strNumberOfFields = '���������� �����';
$strNumberOfTables = '���������� ������';
$strNumSearchResultsInTable = '%s ���������(��) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������(��)';
$strNumTables = '�������';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'OpenDocument �������';
$strOpenDocumentText = 'OpenDocument �����';
$strOpenNewWindow = '������� phpMyAdmin � ����� ����';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '�������������� �������';
$strOptions = '���������';
$strOr = '���';
$strOverhead = '���������������';
$strOverwriteExisting = '������������ ������������(�) ����(�)';

$strPageNumber = '����� ��������:';
$strPagesToBeFlushed = '������� � �������';
$strPaperSize = '������ ������';
$strPartialImport = '��������� ������';
$strPartialText = '����������� ����������� ������';
$strPassword = '������';
$strPasswordChanged = '������ ��� %s ��� ������� �������.';
$strPasswordEmpty = '������ �� �����!';
$strPasswordHashing = '����������� ������';
$strPasswordNotSame = '������������ ������������� ������!';
$strPDF = 'PDF';
$strPdfDbSchema = '��������� ���� ������ "%s" - �������� %s';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPdfNoTables = '��� ������';
$strPDFReportExplanation = '(�������� ������ ����������� ������ ����� �������)';
$strPDFReportTitle = '��������� ������';
$strPerHour = '� ���';
$strPerMinute = '� ������';
$strPerSecond = '� �������';
$strPersian = '����������';
$strPhoneBook = '���������� �����';
$strPhp = 'PHP-���';
$strPHP40203 = '������������ ������ PHP 4.2.3, �������� ��������� ������ ��� ������ � ������������� ����������� (mbstring). �������� ��������� ����� �� ������: PHP bug report 19404. ������ ������ PHP �� ������������� ��� ������������� � phpMyAdmin.';
$strPHPVersion = '������ PHP';
$strPleaseSelectPrimaryOrUniqueKey = '�������� ���� ���������� ��������� (PRIMARY), ��� ���������� (UNIQUE) ��������!';
$strPmaDocumentation = '������������ phpMyAdmin';
$strPmaUriError = '��������� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ����������� � ���������������� �����!';
$strPmaWiki = 'phpMyAdmin ����';
$strPolish = '��������';
$strPortrait = '�������';
$strPos1 = '������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKeyHasBeenDropped = '��������� ���� ��� ������';
$strPrimaryKeyName = '��� ���������� ������� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '(��� &quot;PRIMARY&quot; ������ ����� <b>������</b> ��������� ������!)';
$strPrint = '������';
$strPrintView = '������ ��� ������';
$strPrintViewFull = '������ ��� ������ (���������)';
$strPrivDescAllPrivileges = '�������� ��� ����������, �� ����������� GRANT';
$strPrivDescAlter = '��������� ��������� ��������� ������������ ������';
$strPrivDescAlterRoutine = '��������� ��������� � �������� �������� ��������';
$strPrivDescCreateDb = '��������� �������� ����� ��� ������ � ������';
$strPrivDescCreateRoutine = '��������� �������� �������� ��������';
$strPrivDescCreateTbl = '��������� �������� ����� ������';
$strPrivDescCreateTmpTable = '��������� �������� ��������� ������';
$strPrivDescCreateUser = '��������� ��������, �������� � �������������� ������� ������� �������������';
$strPrivDescCreateView = '��������� �������� ����� ������������� (CREATE VIEW)';
$strPrivDescDelete = '��������� �������� ������';
$strPrivDescDropDb = '��������� �������� ��� ������ � ������';
$strPrivDescDropTbl = '��������� �������� ������';
$strPrivDescExecute = '��������� ���������� �������� �������� (�� �������������� ������ ������� MySQL)';
$strPrivDescExecute5 = '��������� ���������� �������� ��������';
$strPrivDescFile = '��������� ������ � ������� ������ � �����';
$strPrivDescGrant = '��������� ���������� ������������� � ���������� ��� ������������ ������ ����������';
$strPrivDescIndex = '��������� �������� � �������� ��������';
$strPrivDescInsert = '��������� ������� � ������ ������';
$strPrivDescLockTables = '��������� ���������� ������ ��� �������� ������';
$strPrivDescMaxConnections = '������������ ���������� ����� �����������, ������� ������������ ����� ���������� � ������� ����';
$strPrivDescMaxQuestions = '������������ ���������� ��������, ������� ������������ ����� ��������� � ������� ����';
$strPrivDescMaxUpdates = '������������ ���������� ������ ���������� �����-���� ������� ��� ���� ������, ������� ������������ ����� ��������� � ������� ����';
$strPrivDescMaxUserConnections = '������������ ���������� ������������� ����������� ������ ������������';
$strPrivDescProcess3 = '��������� ���������� ��������� ������ �������������';
$strPrivDescProcess4 = '��������� �������� ������ �������� � ������ ���������';
$strPrivDescReferences = '�� �������� � ������ ������ MySQL!';
$strPrivDescReload = '��������� ������������ �������� ������� � ������� ��� �����';
$strPrivDescReplClient = '��������� ����������� ��������������� ��������� � ����������� ��������';
$strPrivDescReplSlave = '���������� ��� ����������� �������� ��� ����������';
$strPrivDescSelect = '��������� ������� ������';
$strPrivDescShowDb = '��������� ������ � ������� ������ ��� ������';
$strPrivDescShowView = '��������� ����� ������� ���������� ������������� (SHOW CREATE VIEW)';
$strPrivDescShutdown = '��������� ��������� �������';
$strPrivDescSuper = '��������� ��������� ����������, ���� ��� ���������� ������������� ���������� ����������. (��������� ��� ����������� ���������������� �����, ����� ��� ��������� ���������� ���������� ��� ���������� ��������� ������ �������������)';
$strPrivDescUpdate = '��������� ��������� ������';
$strPrivDescUsage = '��� ����������';
$strPrivileges = '����������';
$strPrivilegesReloaded = '���������� ���� ������� �������������.';
$strProcedures = '���������';
$strProcesses = '��������';
$strProcesslist = '������ ���������';
$strProfiling = '��������������';
$strProtocolVersion = '������ ���������';
$strPutColNames = '��������� �������� ����� � ������ ������';

$strQBE = '������&nbsp;��&nbsp;�������';
$strQBEDel = '�������';
$strQBEIns = '��������';
$strQueryCache = '��� ��������';
$strQueryFrame = '���� �������';
$strQueryOnDb = 'SQL-������ � ���� ������ <b>%s</b>:';
$strQueryResultsOperations = '������������� ����������� �������';
$strQuerySQLHistory = '������� SQL-��������';
$strQueryStatistics = '���������� ��������: �� ������� �������, �� ������ ���� �������� �������� - %s.';
$strQueryTime = '������ ����� %01.4f ���.';
$strQueryType = '��� �������';
$strQueryWindowLock = '������������� ���������� ���� ��������';

$strReadRequests = '������� �� ������';
$strReceived = '�������';
$strRecommended = '�������������';
$strRecords = '������';
$strReferentialIntegrity = '��������� ����������� ������:';
$strRefresh = '��������';
$strRelationalSchema = 'C���� ������';
$strRelationDeleted = '����� �������';
$strRelationNotWorking = '�������������� ����������� ��� ������ �� ���������� ��������� ����������. ��� ����������� ������� ������� %s�����%s.';
$strRelations = '�����';
$strRelationsForTable = '����� �������';
$strRelationView = '�����';
$strReloadingThePrivileges = '������������ ����������';
$strReloadPrivileges = '������������� ����������';
$strReload = '��������';
$strRemoveSelectedUsers = '������� ���������� �������������';
$strRenameDatabaseOK = '���� ������ `%s` ������������� � `%s`.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� `%s` ���� ������������� � `%s`.';
$strRepairTable = '������������ �������';
$strReplaceNULLBy = '�������� NULL ��';
$strReplaceTable = '��������� ������ ������� ������� �� �����';
$strReplication = '����������';
$strReset = '��������';
$strResourceLimits = '����������� �� ������������� ��������';
$strRestartInsertion = '���������� ����������� �����: %s';
$strReType = '�������������';
$strRevoke = '��������';
$strRevokeAndDelete = '�������� ��� �������� ���������� ������������� � ����� ������� ��.';
$strRevokeAndDeleteDescr = '������ �� ������������ ����������, ������������ ��� ��� ����� ��������� ���������� ���������� ���� USAGE.';
$strRevokeMessage = '�������� ���������� ��� %s.';
$strRomanian = '���������';
$strRoutineReturnType = '������������ ���';
$strRoutines = '���������';
$strRowLength = '����� ������';
$strRows = '������';
$strRowsFrom = '����� ������� �';
$strRowSize = '������ ������';
$strRowsModeFlippedHorizontal = '�������������� (���������� ���������)';
$strRowsModeHorizontal = '��������������';
$strRowsModeOptions = '� %s ������, ��������� ����� ������ %s �����';
$strRowsModeVertical = '������������';
$strRowsStatistic = '���������� �����';
$strRunning = '�� %s';
$strRunQuery = '��������� ������';
$strRunSQLQuery = '��������� SQL-������(�) � ���� ������ %s';
$strRunSQLQueryOnServer = '��������� SQL-������(�) �� ������� %s';
$strRussian = '�������';

$strSave = '���������';
$strSaveOnServer = '��������� �� ������� � �������� %s';
$strSavePosition = '��������� ������������ ������';
$strScaleFactorSmall = '����� �� ���������� �� ����� ��������. ���������� ��������� �������.';
$strSearch = '�����';
$strSearchFormTitle = '����� � ���� ������';
$strSearchInTables = '� �������/��������:';
$strSearchNeedle = '�����(�) ��� ��������(�) ��� ������ (��������� ������: &quot;%&quot;):';
$strSearchOption1 = '����� �� ����';
$strSearchOption2 = '��� �����';
$strSearchOption3 = '������ ������������';
$strSearchOption4 = '���������� ���������';
$strSearchResultsFor = '���������� ������ �� &quot;<i>%s</i>&quot; %s:';
$strSearchType = '������:';
$strSecretRequired = '��� cookie-��������������, � ���������������� ����� ���������� ������ ��������� ����� ��������� �������� ��������� $cfg[\'blowfish_secret\'].';
$strSelectADb = '�������� ���� ������';
$strSelectAll = '�������� ���';
$strSelectBinaryLog = '�������� �������� ������ ��� ���������';
$strSelectFields = '�������� ���� (�� ����� ������):';
$strSelectForeignKey = '�������� ������� ����';
$strSelectNumRows = '�� �������';
$strSelectReferencedKey = '�������� ��������� ����';
$strSelectTables = '�������� �������';
$strSend = '��������� ��� ����';
$strSent = '����������';
$strServer = '������';
$strServerChoice = '����� �������';
$strServerNotResponding = '������ �� ��������';
$strServers = '�������';
$strServerStatus = '������� ��������� MySQL';
$strServerStatusDelayedInserts = '���������� �������';
$strServerStatusUptime = 'MySQL ������ �������� %s. ����� �������: %s.';
$strServerTabVariables = '����������';
$strServerTrafficNotes = '������: ���������� �� �������� ������� MySQL-������� �� ������� ��� �������.';
$strServerVars = '��������� ���������� � ���������';
$strServerVersion = '������ �������';
$strSessionStartupErrorGeneral = '��������� ������ � ������ ��������� ������. ��������� ����� �������� PHP �/��� ���-������� �� ������� ������, � ����������� �� ���������� ����������������.';
$strSessionValue = '�������� ������';
$strSetEnumVal = '��� �������� ����� ���� &quot;enum&quot; � &quot;set&quot;, ������ �������� ������ ����� ������: \'a\',\'b\',\'c\'...<br />������� �������� ����� ����� (\\) � ��������� ������� (\') ���������� ������������ (����������) �������� �������� ����� �����, ��������: \'\\\\xyz\' ��� \'a\\\'b\'.';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '���������� � �����';
$strShowDatadictAs = '���������� ������� ������� ������';
$strShowFullQueries = '����������� ����������� ��������';
$strShowGrid = '���������� �����';
$strShowHideLeftMenu = '��������/������ ����� ����';
$strShowingBookmark = '����������� ��������';
$strShowingPhp = '���������� ��� PHP-���';
$strShowingRecords = '���������� ������';
$strShowingSQL = '���������� SQL-������';
$strShowOpenTables = '������ �������� ������';
$strShowPHPInfo = '�������� ���������� PHP';
$strShowSlaveHosts = '���������� � ����������� ��������';
$strShowSlaveStatus = '���������� � ��������� ������� ����������';
$strShowStatusBinlog_cache_disk_useDescr = '���������� ����������, �������������� ��� ��������� ������� � ����������� �������� binlog_cache_size, ���������� ���� ������������ � ��� SQL-��������� ���� ��������� �� ��������� �����.';
$strShowStatusBinlog_cache_useDescr = '���������� ����������, �������������� ��� ��������� �������.';
$strShowStatusCreated_tmp_disk_tablesDescr = '���������� ��������� ������, ������������� ��������� �������� �� �����, �� ����� ���������� SQL-���������. ���� �������� Created_tmp_disk_tables ������, ������� ��������� �������� ���������� tmp_table_size, ����� ��������� ������� ������������� � ������, � �� �� ������� �����.';
$strShowStatusCreated_tmp_filesDescr = '���������� ��������� ������, ��������� MySQL-�������� (mysqld).';
$strShowStatusCreated_tmp_tablesDescr = '���������� ��������� ������ � ������, ��������� �������� ������������� � �������� ���������� SQL-���������.';
$strShowStatusDelayed_errorsDescr = '���������� ������, ��������� � �������� ��������� �������� INSERT DELAYED, ��������, ��-�� ������������ ������.';
$strShowStatusDelayed_insert_threadsDescr = '���������� �������������� �������� INSERT DELAYED.';
$strShowStatusDelayed_writesDescr = '���������� ����� ���������� � ������ ���������� ������� ������ (INSERT DELAYED).';
$strShowStatusFlush_commandsDescr  = '���������� ����������� ������ FLUSH.';
$strShowStatusHandler_commitDescr = '���������� ���������� ������ COMMIT.';
$strShowStatusHandler_deleteDescr = '���������� �������� �� �������� ����� �� �������.';
$strShowStatusHandler_discoverDescr = 'MySQL-������ ����� ����������� NDB Cluster � ������������� ������ � ������������ ������. ���� ������� ���������� ������������. Handler_discover - ����� ����������� ������.';
$strShowStatusHandler_read_firstDescr = '���������� �������� �� ������ ������ ������ �� �������. ��� ������� �������� ����������, ������ �����, ������ ����������� ��������� ������ ������������ �������. ��������, SELECT col1 FROM foo, ��� �������, ��� col1 ���������������.';
$strShowStatusHandler_read_keyDescr = '���������� �������� �� ������ �����, ����������� �� �������� �����. ������� �������� ���������� ������� � ���, ��� ������� � ������� ���������������� ���������� �������.';
$strShowStatusHandler_read_nextDescr = '���������� �������� �� ������ ��������� ������ � ������� ������������ ��������. �������� ������������� ��� ������� ���������� ������� � ������������ �� ������� ��� ��� ������������ �������.';
$strShowStatusHandler_read_prevDescr = '���������� �������� �� ������ ���������� ������ ��� ����������� ���������� �������. ������ ������������ ��� �����������: ORDER BY ... DESC.';
$strShowStatusHandler_read_rnd_nextDescr = '���������� �������� �� ������ ��������� ������ �� ����� ������. ������ �������� ����� �������, ��� ������ ������������ ������. ������ ��� ��������, ��� ������� �� ���������������� ���������� ������� ��� ������� �� ���������� ������������ ��������.';
$strShowStatusHandler_read_rndDescr = '���������� ��������, �� ������ ������, ���������� �� �� �������. ������� �������� ���������� ����� ���� ����������� ������ ����������� �������� ������������ ���������� ����������, ����������� �������� ����� �������� ��������� ������� ������������ ������, �������� ����������� �� ������������ ������� ���������� �������.';
$strShowStatusHandler_rollbackDescr = '���������� ���������� ������ ROLLBACK.';
$strShowStatusHandler_updateDescr = '���������� �������� �� ���������� ����� � �������.';
$strShowStatusHandler_writeDescr = '���������� �������� �� ������� ����� � �������.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = '���������� ������� ���������� ������ (&quot;�������&quot; ��� &quot;������&quot;).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '������� ���������� &quot;�������&quot; �������.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = '���������� ������� ��������� ����, ��� �������� ��� ����������� ������� ������� (FLUSH).';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = '���������� ��������� �������.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = '���������� ������ ��������������� � �������� ���� InnoDB. ��� ����� ���������� �������������� ������� ������ ��� ������, ���� ��� �� ����� ���� ������� ��� ������� �� �����-���� ������ �������.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = '���������� ������� ������� ���������� ��������� ��� ���������������� ��������, ����� ���: ���������� ������ ��� ���������� ����������� �������. �������� ����� ���������� �� �������: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = '����� ������ ��������� ���� (� ���������).';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = '���������� &quot;���������&quot; ����������� ������, �������������� InnoDB. ��� ����������, ����� ������ ��������� ������� ����� ������� � ��������� �������.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = '���������� ���������������� ����������� ������, �������������� InnoDB. ��� ����������, ����� InnoDB ��������� ������ ���������������� ������������ �������.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = '���������� ���������������� �������� �� ������, ����������� InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = '���������� ���������������� �������� �� ������, ������� InnoDB �� ���� ��������� �� ��������� ���� � ����������� ������������ ������.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = '������, ������ � �������� ��� InnoDB ����������� � ������� ������. ������, ���� ���������� ������ ��� �������� �������� ��� ���������� ������ �������, ������ ��������� �������� �� �������. ������ ������� ���������� ����� ����� ��������. ���� ������ ��������� ���� ��� ���������� ������� �������, �������� ����� ���������.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = '���������� �������, ����������� � �������� ��� InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = '���������� �������� fsync(), ����������� �� ������ ������.';
$strShowStatusInnodb_data_pending_fsyncsDescr = '������� ���������� ������������� �������� fsync().';
$strShowStatusInnodb_data_pending_readsDescr = '������� ���������� ������������� �������� ������.';
$strShowStatusInnodb_data_pending_writesDescr = '������� ���������� ������������� �������� ������.';
$strShowStatusInnodb_data_readDescr = '����� ������ (� ������), ����������� �� ������ ������.';
$strShowStatusInnodb_data_readsDescr = '����� ���������� �������� ������ ������.';
$strShowStatusInnodb_data_writesDescr = '����� ���������� �������� ������ ������.';
$strShowStatusInnodb_data_writtenDescr = '����� ������ (� ������), ���������� �� ������ ������.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = '���������� ������� � ����� doublewrite, � ���������� ��������� ��� ����� �������.';
$strShowStatusInnodb_dblwr_writesDescr = '���������� ������� � ����� doublewrite, � ���������� ��������� ��� ����� �������.';
$strShowStatusInnodb_log_waitsDescr = '���������� �������� ������� ����������� ������, ���������� ������ ��� �������.';
$strShowStatusInnodb_log_write_requestsDescr = '���������� �������� �� ������ � ������.';
$strShowStatusInnodb_log_writesDescr = '���������� ���������� ������� � ���� �������.';
$strShowStatusInnodb_os_log_fsyncsDescr = '���������� ������� � ������� fsync(), ��������� � ���� �������.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = '���������� ������������� ������� ������������� � ������� �������� fsync().';
$strShowStatusInnodb_os_log_pending_writesDescr = '���������� ������������� �������� �� ������ � ������.';
$strShowStatusInnodb_os_log_writtenDescr = '����� ������ � ������, ���������� � ���� �������.';
$strShowStatusInnodb_page_sizeDescr = '������ ��������, ������������� � InnoDB (�� ��������� 16��). ������ �������� ���������� � ���������, �� ���� ����� ��������, ����� ��������� ��� �������� � �����.';
$strShowStatusInnodb_pages_createdDescr = '���������� ��������� �������.';
$strShowStatusInnodb_pages_readDescr = '���������� ����������� �������.';
$strShowStatusInnodb_pages_writtenDescr = '���������� ���������� �������.';
$strShowStatusInnodb_row_lock_current_waitsDescr = '������� ���������� �������� ���������� �����.';
$strShowStatusInnodb_row_lock_time_avgDescr = '������� ����� �������� ���������� ����� (� �������������).';
$strShowStatusInnodb_row_lock_time_maxDescr = '������������ ����� �������� ���������� ����� (� �������������).';
$strShowStatusInnodb_row_lock_timeDescr = '����� �����, �������� ���������� ����� (� �������������).';
$strShowStatusInnodb_row_lock_waitsDescr = '����� ���������� �������� ���������� �����.';
$strShowStatusInnodb_rows_deletedDescr = '���������� �����, ��������� �� ������ InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = '���������� �����, ����������� � ������� InnoDB.';
$strShowStatusInnodb_rows_readDescr = '���������� �����, ����������� �� ������ InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = '���������� �����, ����������� � �������� InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = '���������� ������ � ���� �������, ������� ���� ��������, �� ��� �� �������� �� ����. ������ �������� ����� �������� ��� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = '���������� �������������� ������ � ���� �������. ������ �������� ��������� ���������� ��� ����� ������������ ��� �������.';
$strShowStatusKey_blocks_usedDescr = '���������� ������������ ������ � ���� �������. ������ �������� - ������������ ���������� ������, �������������� ������������.';
$strShowStatusKey_read_requestsDescr = '���������� �������� �� ������ ����� �� ���� ��������.';
$strShowStatusKey_readsDescr = '���������� ���������� �������� ������ ����� �������� � �����. ���� �������� ������ - ������ �����, ������ ������� ��������� �������� ���������� key_buffer_size. ����������� ��������� ��������� � ���� ����� ���� ��������� ���: Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = '���������� �������� �� ������ ����� � ��� �������.';
$strShowStatusKey_writesDescr = '���������� ���������� �������� ������ ����� �������� �� ����.';
$strShowStatusLast_query_costDescr = '����� ������� ���������� ���������������� �������, ������������ ������������� ��������. ������� ��� ��������� ������������� ��������� ���� ������ �������. ����������� ������� ��������, ��������, ��� �������� ���������� ������� ��� �� ����.';
$strShowStatusNot_flushed_delayed_rowsDescr = '���������� �����, ��������� ������� � �������� INSERT DELAYED.';
$strShowStatusOpen_filesDescr = '���������� �������� ������.';
$strShowStatusOpen_streamsDescr = '���������� �������� ������� (����������� � ������ ��������). ������� ���������� ����, �������� � ������� ������� fopen().';
$strShowStatusOpen_tablesDescr = '���������� �������� ������.';
$strShowStatusOpened_tablesDescr = '����� ���������� ������������� ������. ��� ������� �������� ���������� ������������� ��������� ������ ���� ������ (table_cache).';
$strShowStatusQcache_free_blocksDescr = '���������� ��������� ������ ������ � ���� ��������.';
$strShowStatusQcache_free_memoryDescr = '����� ��������� ������ ��� ���� ��������.';
$strShowStatusQcache_hitsDescr = '���������� &quot;���������&quot; � ��� ��������, �.�. ������� �������� ���� ������������� ���������, ������������ � ����.';
$strShowStatusQcache_insertsDescr = '���������� ��������, ����������� � ��� ��������.';
$strShowStatusQcache_lowmem_prunesDescr = '���������� ��������, ��������� �� ���� ��� ������������ ������ ��� ����������� ����� ��������. ��� ���������� ����� ������ ��� ��������� ������� ���� ��������. ��� �������� ���������� ��������� LRU (������ ����� �� �������������� �������� ���������� ������) ��� �������� ������� �� �������� ������� �� ����.';
$strShowStatusQcache_not_cachedDescr = '���������� ��������, ������� ��������� ������������� ��� ��� ������� ����������� ���� ��������� � ������� ��������� ����� SQL_NO_CACHE.';
$strShowStatusQcache_queries_in_cacheDescr = '���������� ��������, ������������������ � ����.';
$strShowStatusQcache_total_blocksDescr = '��������� ���������� ������ ������, ���������� ��� ��� ��������.';
$strShowStatusReset = '��������';
$strShowStatusRpl_statusDescr = '��������� ���������������� ���������� (���� �� �����������).';
$strShowStatusSelect_full_joinDescr = '���������� ��������-�����������, ����������� ��� ������������� ��������. ���� �������� ���������� �� ����� 0, ������������� ��������� ������� ������.';
$strShowStatusSelect_full_range_joinDescr = '���������� ��������-�����������, ����������� � �������������� ������ �� ��������� � �������, �� ������� �������� ������.';
$strShowStatusSelect_range_checkDescr = '���������� ��������-�����������, ����������� � �������������� ������ �� ��������� ��� ������� ����� �� ��������� �������. ���� �������� ���������� �� ����� 0, ������������� ��������� ������� ������.';
$strShowStatusSelect_rangeDescr = '���������� ��������-�����������, ����������� � �������������� ������ �� ��������� � ������ �������. ������ �������� ���� ���������� �� ��������, ���� ���� ��� ������.';
$strShowStatusSelect_scanDescr = '���������� ��������-�����������, ����������� � �������������� ������� ������ �� ������ �������.';
$strShowStatusSlave_open_temp_tablesDescr = '���������� ��������� ������, �������� � ��������� ������ ����������� �������.';
$strShowStatusSlave_retried_transactionsDescr = '����� ���������� �������� ���������� ����������� ������� ���������� � ������� �������.';
$strShowStatusSlave_runningDescr = '������������� �������� ON, ���� ������ ������ ������������� ��� �����������, ������������ � ��������.';
$strShowStatusSlow_launch_threadsDescr = '���������� �������, �� �������� ������� ������������� ����� ��� slow_launch_time ������.';
$strShowStatusSlow_queriesDescr = '���������� ��������, ������������� ����� long_query_time ������.';
$strShowStatusSort_merge_passesDescr = '���������� ��������, ��������� ���������� ����������. ��� ������� �������� ������� ��������� �������� ���������� sort_buffer_size.';
$strShowStatusSort_rangeDescr = '���������� �������� ����������, ����������� � �������������� ���������.';
$strShowStatusSort_rowsDescr = '���������� ��������������� �����.';
$strShowStatusSort_scanDescr = '���������� �������� ����������, ����������� � �������������� ������� ������������ �������.';
$strShowStatusTable_locks_immediateDescr = '���������� �������� �� ���������� �������, ������� ���� ������������� ����������.';
$strShowStatusTable_locks_waitedDescr = '���������� �������� �� ���������� �������, ������� ���� ������������� ������ ����� ������������� ������� ��������. ���� �������� ������ � ���� �������� � �������������������, ���������� ������� �������������� ���� �������, � ����� ������� ���� ������� (��� �������) ��� ������������ ����������.';
$strShowStatusThreads_cachedDescr = '���������� ������� � ��������� ����. ������� �������� ��������� � ���� ����� ��������� �� ������� Threads_created/Connections. ���� ��� �������� �������� � ������� ���� - ��� ������� ��������� thread_cache_size.';
$strShowStatusThreads_connectedDescr = '���������� �������� ������� ����������.';
$strShowStatusThreads_createdDescr = '������ ���������� �������, ��������� ��� ����������� ���������� � ��������. ��� ������� �������� ����������, ����� ��������� �������� ���������� thread_cache_size (��� �� ���� ������������� �������� � ������������������, ��� ������� ���������� �������).';
$strShowStatusThreads_runningDescr = '���������� ���������, ����������� � �������� ���������.';
$strShowTableDimension = '���������� ����������� ������';
$strShowTables = '����������� ������';
$strShowThisQuery = '�������� ������ ������ �����';
$strSimplifiedChinese = '��������� ����������';
$strSingly = '(�������)';
$strSize = '������';
$strSkipQueries = '���������� ��������, ����������� �� ������';
$strSlovak = '���������';
$strSlovenian = '����������';
$strSmallBigAll = '��������/���������� ����������� ���� ������';
$strSnapToGrid = '��������� � �����';
$strSocketProblem = '(���� ����� ���������� MySQL-������� ����������� ��������)';
$strSort = '�������������';
$strSortByKey = '����������� �� �������';
$strSorting = '����������';
$strSpaceUsage = '������������ ������������';
$strSpanish = '���������';
$strSplitWordsWithSpace = '����� ����������� �������� (" ").';
$strSQL = 'SQL';
$strSQLCompatibility = '����� ������������� SQL';
$strSQLExportType = '��� ��������';
$strSQLParserBugMessage = '� ������ SQL-������� ��������� ������. ��������� � ������������ �������, ���������� � ��� �������� � ���������� �������. ��������� �������� ������ ����� ���� �������� �����, ����������� �������� ������ ��� ������� � ������ �������. ���������� ��������� ������ ����� ��������� ������ MySQL. ��� ������� �������, ���� ����� �������� ������ MySQL-�������, ����������� ����������� ��������. ���� �������� �� ��������, ���� ����� ��������� ��������� ������ ������ ������������ ���������, ������� �� ����� �������, ������� �������� ������ � ��������� ������������� �������� ������, ������� ��� ������� �� ������ CUT ���������� ����:';
$strSQLParserUserError = '��������, SQL-������ �������� ������. ��� ������� �������, ���� ����� �������� ������ MySQL-�������, ����������� ����������� ��������.';
$strSQLQuery = 'SQL-������';
$strSQLResult = '��������� SQL-�������';
$strSQPBugInvalidIdentifer = '������������ �������������';
$strSQPBugUnclosedQuote = '���������� �������';
$strSQPBugUnknownPunctuation = '����������� ����������';
$strStandInStructureForView = '����������� ��������� ��� �������������';
$strStatCheckTime = '��������� ��������';
$strStatCreateTime = '��������';
$strStatement = '��������������';
$strStatisticsOverrun = '�� ����������� �������, ���������� �������� ����� �������������, ����� �������, ����������, ������������ MySQL-��������, ����� ���� ������������.';
$strStatUpdateTime = '��������� ����������';
$strStatus = '���������';
$strStorageEngines = '���� ������';
$strStorageEngine = '��� ������';
$strStrucCSV = 'CSV';
$strStrucData = '��������� � ������';
$strStrucExcelCSV = 'CSV ��� MS Excel';
$strStrucNativeExcel = '������ MS Excel';
$strStrucOnly = '������ ���������';
$strStructPropose = '������ ��������� �������';
$strStructureForView = '��������� ��� �������������';
$strStructure = '���������';
$strSubmit = '���������';
$strSuccess = 'SQL-������ ��� ������� ��������';
$strSuhosin = '������ ���������� �������� ������� Suhosin. ��� ������� ��������� ������� ���������� � %s������������%s.';
$strSum = '�����';
$strSwedish = '��������';
$strSwitchToDatabase = '������������� �� ������������� ���� ������';
$strSwitchToTable = '������������� �� ������������� �������';

$strTable = '������� ';
$strTableAlreadyExists = '������� %s ��� ����������!';
$strTableComments = '����������� � �������';
$strTableEmpty = '�� ������ ��� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '�������� ��� ������� %s';
$strTableIsEmpty = '������� - �����!';
$strTableMaintenance = '������������ �������';
$strTableName = '��� �������';
$strTableOfContents = '����������';
$strTableOptions = '��������� �������';
$strTables = '������: %s';
$strTableStructure = '��������� �������';
$strTakeIt = '���������';
$strTblPrivileges = ' ���������� ������ �������';
$strTempData = '��������� ������';
$strTextAreaLength = '��-�� �������� ���������� ������<br />��������� ����� ���� ����������';
$strThai = '���';
$strTheme = '���� / �����';
$strThemeDefaultNotFound = '���� ��-��������� %s �� �������!';
$strThemeNoPreviewAvailable = '������������ �� ��������.';
$strThemeNotFound = '���� %s �� �������!';
$strThemeNoValidImgPath = '�� ������ ���������� ���� � ������������ ��� ���� %s!';
$strThemePathNotFound = '���� � ������ ���� %s �� ������!';
$strThisHost = '���� ����';
$strThreads = '������';
$strThreadSuccessfullyKilled = '������� %s ��� ������� ��������.';
$strTime = '�����';
$strTimeoutInfo = '������� ������� ��� ������� ��-�� ����������� ���������� ������, ����� ����������� ������ ����� ��������� � ������� %d.';
$strTimeoutNothingParsed = '�������� �� ��������� ������, ������ �� ���� ����������. ��� ������� ��� ��������, ��� phpMyAdmin �� ������ ��������� ������� ������� �� ��� ���, ���� �� ����� ��������� ����������� ������� ���������� php-���������.';
$strTimeoutPassed = '��������� ��������� �����. ���� �� ������ ��������� ������, ������������� ��� ������ ��� �� ����, � ������� ����������� � ���� ����� �� ������� �����������.';
$strToFromPage = '��������';
$strToggleScratchboard = '�����������';
$strToggleSmallBig = '�������� �����������';
$strToSelectRelation = '��� ������ ����� ������� �� ����� ����������, ��� �������� �� ��������:';
$strTotal = '�����';
$strTotalUC = '�����';
$strTraditionalChinese = '��������� ������������';
$strTraditionalSpanish = '��������� ������������';
$strTraffic = '������';
$strTransactionCoordinator = '����������� ����������';
$strTransformation_application_octetstream__download = '���������� ������ ��� �������� �������� ������ ����. �������� ������������� ������� ��������� ��� ������ ����� �����, ��� ������������� ������� ���������, ��� ����� ����, ������� �������� ��� �����. � ������ ������������� ������� ���������, ������ ���������� ���������� � ���� ������ ������.';
$strTransformation_application_octetstream__hex = '���������� ������ � ����������������� �������������. �������������� ������ �������� ����� ���� ����������� ��� �������� �� ��, ����� ����� ���������� ����� ����������� ������ (�� ��������� ����� ���� ����������).';
$strTransformation_image_jpeg__inline = '���������� ����������� ������ �����������, �� ������� ����� ������ ��� ����������. ����������� �������� ������������ ������ � ������ �������� � ��������. ����������� ����������� ������, �����������.';
$strTransformation_image_jpeg__link = '���������� ������ ��� �������� �����������';
$strTransformation_image_png__inline = '���������� ����������� ������ �����������, �� ������� ����� ������ ��� ����������. ����������� �������� ������������ ������ � ������ �������� � ��������. ����������� ����������� ������, �����������.';
$strTransformation_text_plain__dateformat = '���������� ���� ���� TIME, TIMESTAMP, DATETIME ��� ����� � ������� Unix, � ���� ���������������� ������. ������ �������� ���������� ��������, � ����� (�� ���������: 0). ������ �������� ������ ���� �������������� ������ ����/�������. ������ �������� ���������� ��������� ���������� (������ "local") ��� ���������� (������ "utc") �������. � ������������ � ������������� ������� ���������� ������ ���� ������ ����� ��������� �������� - ��� "local" �������� �������� ������� PHP strftime(), ��� "utc" - gmdate().';
$strTransformation_text_plain__external = '������ LINUX: ��������� ������� ���������� � ������ ��� �� ���� ������ ����. ���������� ������� ����� ����������. �� ��������� ������������ Tidy (�������������� HTML-����). �� ������������ ������������, ���������� ������� ��������������� ���� libraries/transformations/text_plain__external.inc.php ������ ��������� ���������. ������ �������� ������ ����� ������������ ���������, �� ������ ��������� ���������� ��������� ���������� ���������. ��� ��������� �������� ��������� � 1, ������ ������ ����� ������������� �������� PHP htmlspecialchars() (�� ���������: 1). ��������� ���������� ��������� � 1, ������������ �������� ������ � ������� ������ � ���� ������ (�� ���������: 1).';
$strTransformation_text_plain__formatted = '���������� ���������� ���� ��� ����, ��� �������������� ������ �������� PHP htmlspecialchars(). ����� ������� ���� ����� ��������� ������� HTML-���.';
$strTransformation_text_plain__imagelink = '���������� ����������� � ������; ���� �������� ��� �����. ������ �������� �������� URL-���������, �������� "http://domain.com/". ������ � ������ �������� - ������ � ������ ����������� � ��������.';
$strTransformation_text_plain__link = '���������� ������; ���� �������� ��� �����. ������ �������� - URL-�������, �������� "http://www.example.com/". ������ �������� - ��������� ������.';
$strTransformation_text_plain__sql = '����������� ����� � ���� SQL ������� � ���������� ����������';
$strTransformation_text_plain__substr = '���������� ������ ����� ������. ������ �������� - �����, ������������ ������ ���������� ������ (�� ���������: 0). ������ �������� - ���������� ������������ �������� (�� ���������: �� ����� ������). ������ �������� ���������� ������ ����������� ������� �/��� � ����� ������������� ������� (�� ���������: "...").';
$strTriggers = '��������';
$strTruncateQueries = '����������� ����������� ��������';
$strTurkish = '��������';
$strType = '���';

$strUkrainian = '����������';
$strUncheckAll = '����� ���������';
$strUnicode = '������';
$strUnique = '����������';
$strUnknown = '����������';
$strUnselectAll = '����� ���������';
$strUnsupportedCompressionDetected = '����������� ���� ���� ������� (%s), ������� �� ��������������, � ������� �� ����� ���� ������������. ��������� ������� ������ ��� �� �����������, ���� ��������� ��� ����������������.';
$strUpdatePrivMessage = '���� �������� ���������� ��� %s.';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '��������� ������';
$strUpdComTab = '���������� �������� ������� column_comments. ������ �������� � ������������.';
$strUpgrade = '���������� �������� %s �� ������ %s ��� ����.';
$strUploadErrorCantWrite = '������ ��� ������� ������ ����� �� ����.';
$strUploadErrorExtension = '�������� ����� ����������� ��-�� ����������.';
$strUploadErrorFormSize = '������ ������������ ����� ��������� �������� ��������� MAX_FILE_SIZE, ������������ � HTML �����.';
$strUploadErrorIniSize = '������ ������������ ����� ��������� �������� ��������� upload_max_filesize ������������� � ���������������� ����� PHP (php.ini).';
$strUploadErrorNoTempDir = '�� ������ ������� ��� �������� ��������� ������.';
$strUploadErrorPartial = '����������� ���� ��� �������� ������ ��������.';
$strUploadErrorUnknown = '��� ����� �������� ����� ��������� ����������� ������.';
$strUploadLimit = '��������, ������ ������������ ����� ������� �����. ������� ������ ������� ����������� ������� � %s������������%s.';
$strUploadsNotAllowed = '�������� ������ �� ������, ����������.';
$strUsage = '�������������';
$strUseBackquotes = '��������� �������� ������ � ����� � ����� �������';
$strUsedPhpExtensions = '������������ ���������� PHP';
$strUseHostTable = '������������ ������� ������';
$strUser = '������������';
$strUserAlreadyExists = '������������ %s ��� ����������!';
$strUserEmpty = '�� ������ ��� ������������!';
$strUserName = '��� ������������';
$strUserNotFound = '���������� ������������ �� ��� ������ � ������� ����������.';
$strUserOverview = '����� ������� �������';
$strUsersDeleted = '��������� ������������ ���� ������� �������.';
$strUsersHavingAccessToDb = '������������ � ������� ������� � &quot;%s&quot;';
$strUseTabKey = '��� ����������� ����� ������ ��������, ����������� ������� TAB, ���� CTRL+������� �� ��������� - ��� ���������� �����������';
$strUseTables = '������������ �������';
$strUseTextField = '������������ ��������� ����';
$strUseThisValue = '������������ ��� ��������';

$strValidateSQL = '�������� ���������� SQL';
$strValidatorError = '�������� ���������� SQL �� �����������. ���������, ����������� �� ����������� ������ ���������� ��� PHP, ��������� � %s������������%s.';
$strValue = '��������';
$strVar = '����������';
$strVersionInformation = '���������� � ������';
$strView = '�������������';
$strViewDump = '���������� ���� (�����) �������';
$strViewDumpDatabases = '���������� ���� (�����) ��� ������';
$strViewDumpDB = '���������� ���� (�����) ���� ������';
$strViewHasBeenDropped = '������������� %s ���� �������';
$strViewMaxExactCount = '��� ������������� �������� ������ %s �����. �� �������������, ���������� � %s������������%s.';
$strViewName = 'VIEW ��������';

$strWebServerUploadDirectory = '�� �������� ��������';
$strWebServerUploadDirectoryError = '������������� ������� �������� �� ��������';
$strWelcome = '����� ���������� � %s';
$strWestEuropean = '�������-�����������';
$strWildcard = '��������� ������';
$strWindowNotFound = '������� ���� �������� �� ����� ���� ���������. ��������, �� ������� ������������ ���� ��� ��� ������� ��������� ���������� ���������� ��-�� �������� ������������';
$strWithChecked = '� �����������:';
$strWriteRequests = '������� �� ������';
$strWrongUser = '������ ��� ����� �� �����. � ������� ��������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '���������: ��������� �������� ���������� � 0 (����), ������� �����������.';
$strZip = 'zip';
?>
