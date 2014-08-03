<?php
/* $Id: macedonian_cyrillic-windows-1251.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by:
 *     Dimce Grozdanoski <dimce.grozdanoski@ridarec.com>
 */

$charset = 'windows-1251';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';

// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('����', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '��', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. �� %H:%M';
$timespanfmt = '%s ������, %s ������, %s ������ � %s �������';

$strAPrimaryKey = '���������� ���� %s � �������';
$strAbortedClients = '���������';
$strAccessDenied = '��������� �� � ��������';
$strAccessDeniedExplanation = 'phpMyAdmin �� ����� �� �� ������ �� MySQL ������, �� �������� ��� �� �� �������. ��������� �� ������� �� host-��, ������������ ������ � ������� �� config.inc.php � ������� �� ���� ���������� ��  ���������� ��� ��� �� ������ �� ��������������� �� MySQL ��������.';
$strAction = '�����';
$strAddAutoIncrement = '������ AUTO_INCREMENT ��������';
$strAddConstraints = '������ ������������';
$strAddDeleteColumn = '������/������� ������';
$strAddDeleteRow = '������/������� ���� �� ���������';
$strAddFields = '������ %s �����';
$strAddHeaderComment = '������ �������� �� �������� (������� \\n �� ��� ���)';
$strAddIntoComments = '������ �� �����������';
$strAddNewField = '������ ���� ����';
$strAddPrivilegesOnDb = '������ ���������� �� �������� ����';
$strAddPrivilegesOnTbl = '������ ���������� �� �������� ������';
$strAddSearchConditions = '������ ������ �� ����������� (����� "WHERE" �� ������):';
$strAddToIndex = '������ �� ������ &nbsp;%s&nbsp;������(�)';
$strAddUser = '������ ��� ��������';
$strAddUserMessage = '��������� ��� ��������.';
$strAdministration = '�������������';
$strAffectedRows = '�������� ������:';
$strAfter = '����� ������ %s';
$strAfterInsertBack = '����� �� ����������� ��������';
$strAfterInsertNewInsert = '������ ���� ���� ��� �����';
$strAfterInsertNext = '��������� �� �������� �����';
$strAfterInsertSame = '����� �� �� ���� ��������';
$strAll = '��';
$strAllTableSameWidth = '������ �� ���� ������ �� ���� ������?';
$strAlterOrderBy = '������� �� ���������� �� ��������';
$strAnIndex = '������ � ������� %s';
$strAnalyzeTable = '������� �� ��������';
$strAnd = '�';
$strAny = '���� ��';
$strAnyHost = '���� �� host';
$strAnyUser = '���� �� ��������';
$strApproximateCount = '����� �� ������ ���� �� ���� ���������. �� ��������� ���������� ���� FAQ 3.11';
$strArabic = '�������';
$strArmenian = '��������';
$strAscending = '�������� ��������';
$strAtBeginningOfTable = '�� ��������� �� ��������';
$strAtEndOfTable = '�� ����� �� ��������';
$strAttr = '��������';
$strAutomaticLayout = '���������� ��������';

$strBack = '�����';
$strBaltic = '��������';
$strBeginCut = '������� ������';
$strBeginRaw = '������� ������';
$strBinLogEventType = '��� �� ������';
$strBinLogInfo = '����������';
$strBinLogName = '����� �� ���������';
$strBinLogOriginalPosition = '��������� �������';
$strBinLogPosition = '�������';
$strBinLogServerId = 'ID �� ��������';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - �� ������';
$strBinaryLog = '������� �������';
$strBookmarkAllUsers = '���� ������� �� ���� �������� �� ���������� �� ��� ����.';
$strBookmarkDeleted = '�������� � ��������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '�������� SQL ����';
$strBookmarkThis = '������� SQL ����';
$strBookmarkView = '���� ����';
$strBrowse = '�������';
$strBrowseForeignValues = '��������� �� ������������ ���������';
$strBufferPool = '�����';
$strBufferPoolActivity = '��������� �� �������';
$strBufferPoolUsage = '������������� �� �������';
$strBufferReadMisses = '����������� ��� ������';
$strBufferReadMissesInPercent = '����������� ��� ������ �� %';
$strBufferWriteWaits = '������ �� ����';
$strBufferWriteWaitsInPercent = '������ �� ���� �� %';
$strBulgarian = '��������';
$strBusyPages = '�������� ��������';
$strBzError = 'phpMyAdmin �� ������ �� �� ���������� ���������� �� ������ ������ ���������� BZ2 ��������� �� ���� ������ �� PHP. ������������� �� �������� ���������� �� <code>$cfg[\'BZipDump\']</code> ����������� �� ������ phpMyAdmin �������������� ���������� �� <code>FALSE</code>. ��� ������ �� �� ��������� ���������� �� BZ2 �����������, ����� �� ��������� �� ������ ������ �� PHP. ���������� �� PHP ��������� �� ������ %s �� ����� ������.';
$strBzip = '"bzip"';

$strCalendar = '��������';
$strCannotLogin = '�� ����� �� �� ������� �� MySQL ��������';
$strCantLoad = '�� ����� �� �� ������ ����������� %s,<br />����� ��������� �� PHP ��������������';
$strCantLoadRecodeIconv = '�� ����� �� �� ������ iconv ��� recode ����������� �������� �� ��������� �� ������� ��������, �������� �� PHP �� ������� �������� �� ���� ��������� ��� ������������ �� ����������� �� ����� �������� �� phpMyAdmin-�.';
$strCantRenameIdxToPrimary = '�� ����� �� �� �������� ������ �� PRIMARY (��������) !';
$strCantUseRecodeIconv = '�� ����� �� �� �������� iconv ��� libiconv ��� recode_string ��������� ���� ����������� �������� ���� � �������. ��������� �� ������ PHP ������������.';
$strCardinality = '������������';
$strCaseInsensitive = '�� ��������� ���� � ������ �����';
$strCaseSensitive = '��������� ���� � ������ �����';
$strCentralEuropean = '�����������������';
$strChange = '�������';
$strChangeCopyMode = '������� ��� �������� �� ���� ���������� � ...';
$strChangeCopyModeCopy = '... ������ �� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� �� ������� �������� �� �������� �� ��������� � ����� �������� ����� �� ������������.';
$strChangeCopyModeJustDelete = ' ... ������� �� ������� �� �������� �� ���������.';
$strChangeCopyModeRevoke = ' ... ���� ������ �� ���� ���������� �� ����������� � ����� ������� ��.';
$strChangeCopyUser = '������� �� ������������ �� ����������� / ������ �� ����������';
$strChangeDisplay = '������ ����� �� �����������';
$strChangePassword = '������� �� �������';
$strCharset = '����� ������';
$strCharsetOfFile = '����� ������ �� ������������:';
$strCharsets = '����� ��������';
$strCharsetsAndCollations = '����� �������� � �����������';
$strCheckAll = '������� �� ����';
$strCheckOverhead = '������ ��� ����� �������������';
$strCheckPrivs = '������� ����������';
$strCheckPrivsLong = '������� ���������� �� ������ �� �������� &quot;%s&quot;.';
$strCheckTable = '�������� �� ��������';
$strChoosePage = '�������� �������� ��� ��������';
$strColComFeat = '���������� ��������� �� ��������';
$strCollation = '�����������';
$strColumnNames = '���� �� ������';
$strColumnPrivileges = '���������� ������ �� ��������';
$strCommand = '�������';
$strComments = '���������';
$strCommentsForTable = '�������� �� ��������';
$strCompatibleHashing = 'MySQL&nbsp;4.0 ������������';
$strCompleteInserts = '��������� INSERT (�� ���� �� �������)';
$strCompression = '���������';
$strConfigFileError = 'phpMyAdmin �� ������ �� �� ������� ������ �������������� ����������!<br />��� ���� �� �� ����� ��� PHP ���� ������ �� ������������� ��� �� ���� �� �� ������� ������������.<br />�������� �� ���������������� ���������� �������� �� �������� �� ������ ���� � ��������� �� �������� �� ������ ��� �� ��������. �� ���������� ��� �� ������, ������� ����������� �������� ��� ����� �������.<br />��� ������� ������ ��������, �� � �� ���.';
$strConfigureTableCoord = '�������� �� ������������ �� �������� %s';
$strConnectionError = '�� ���� �� �� �������: ���� ����������.';
$strConnections = '��������';
$strConstraintsForDumped = '������������ �� ���������� ������';
$strConstraintsForTable = '������������ �� ��������';
$strCookiesRequired = '������ ��� ����������� ����� �� ������� cookies';
$strCopyDatabaseOK = '������ �� �������� %s � ���������� �� %s';
$strCopyTable = '������ �� �������� �� (����<b>.</b>������):';
$strCopyTableOK = '�������� %s � �������� �� %s.';
$strCopyTableSameNames = '�� ����� �� �� ������� �������� �� ������ ����!';
$strCouldNotKill = 'phpMyAdmin �� ������ �� �� ������� �������� %s. �������� ��� � ��������.';
$strCreate = '������';
$strCreateIndex = '������� ���� ��&nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������ ��� ����';
$strCreateNewDatabase = '������ ���� ���� �� ��������';
$strCreateNewTable = '������ ���� ������ �� ������ �� �������� %s';
$strCreatePage = '������� ���� ��������';
$strCreatePdfFeat = '�������� �� PDF';
$strCreationDates = '������ �� ��������/���������/��������';
$strCriteria = '���������';
$strCroatian = '��������';
$strCyrillic = '���������';
$strCzech = '�����';
$strCzechSlovak = '������������';

$strDBComment = '�������� �� ������ �� ��������:';
$strDBCopy = '������ �� ������ �� �������� ��';
$strDBRename = '���������� �� ������ �� �������� ��';
$strDanish = '������';
$strData = '��������';
$strDataDict = '������ �� ��������';
$strDataOnly = '���� ��������';
$strDataPages = '�������� �� ��������';
$strDatabase = '���� �� ��������';
$strDatabaseEmpty = '����� �� ������ �� �������� �� � ��������!';
$strDatabaseExportOptions = '����� �� ����� �� ���� �� ��������';
$strDatabaseHasBeenDropped = '������ �� �������� %s �� � ���������';
$strDatabases = '���� �� ��������';
$strDatabasesDropped = '%s ������ �� �������� ������� � ���������.';
$strDatabasesStats = '���������� �� ������ �� ��������';
$strDatabasesStatsDisable = '������� ����������';
$strDatabasesStatsEnable = '������ ����������';
$strDatabasesStatsHeavyTraffic = '��������: ������������ �� ������������ ���� �� ������ �� ����������� �� ���������� ����� ��� �������� � MySQL ��������.';
$strDbPrivileges = '���������� �� ����� �� ������ �� ��������';
$strDbSpecific = '���������� �� ������ �� ��������';
$strDefault = 'Default';
$strDefaultEngine = '%s � ������� ��������� �� ��� MySQL ������.';
$strDefaultValueHelp = '�� default ��������, ������� ���� ���� ��������, ��� ���� ���� ��� ��������� �� �������� �����: �';
$strDefragment = '������������� �� ��������';
$strDelOld = '���������� �������� ��� ��������� ��� ������ ��� �� �������. ������ �� �� �� ��������� ��� ���������?';
$strDelayedInserts = '������� ������� ����';
$strDelete = '�������';
$strDeleteAndFlush = '������� �� ����������� � �������� ����� �� ������������.';
$strDeleteAndFlushDescr = '��� � ������ �����, �� ���������� ��������� �� ����������� ���� �� ������.';
$strDeleted = '������� � ��������';
$strDeletedRows = '��������� ������:';
$strDeleting = '������ %s';
$strDescending = '�������� ��������';
$strDescription = '����';
$strDictionary = '������';
$strDirtyPages = '������� ��������';
$strDisableForeignChecks = '������� �������� �� ���������� �������';
$strDisabled = '������������';
$strDisplayFeat = '������� �������';
$strDisplayOrder = '�������� �� ������:';
$strDisplayPDF = '������� PDF ����';
$strDoAQuery = '������� "���� �� ������" (����� ����: "%")';
$strDoYouReally = '���� ��������� ������ �� ';
$strDocu = '������������';
$strDrop = '�����';
$strDropDatabaseStrongWarning = '�� ��� �� ������� ����������� ���� �� ��������!';
$strDropUsersDb = '������� �� ������ �� �������� ��� �� ��������� ���� ���� � �����������.';
$strDumpSaved = '���������� �� ������ �� �������� � �������� �� ������������ %s.';
$strDumpXRows = '������� %s ������ ������༝� �� ����� %s.';
$strDumpingData = '������ �� �������� �� ��������';
$strDynamic = '���������';

$strEdit = '�������';
$strEditPDFPages = '��������� �� PDF ��������';
$strEditPrivileges = '������� �� ����������';
$strEffective = '���������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (���� ������).';
$strEnabled = '����������';
$strEncloseInTransaction = '������ ����� �� ����������';
$strEnd = '���';
$strEndCut = '���� ������';
$strEndRaw = '���� ������';
$strEngineAvailable = '%s � �������� �� ��� MySQL ������.';
$strEngineDisabled = '%s � ����������� �� ��� MySQL ������.';
$strEngineUnsupported = '��� MySQL ������ �� �������� %s ��� �� ���������.';
$strEngines = '���������';
$strEnglish = '��������';
$strEnglishPrivileges = ' ��������: MySQL ������ �� ����������� ���� �� ����� �� ��������� ����� ';
$strError = '������';
$strEscapeWildcards = '���� ����� ������� _ � % ����� �� ���� ������ \ ��� �� ��������� ���������';
$strEstonian = '��������';
$strExcelEdition = 'Excel �������';
$strExecuteBookmarked = '������ �������� ����';
$strExplain = '������ SQL';
$strExport = '�����';
$strExtendedInserts = '�������� INSERT';
$strExtra = '������������';

$strFailedAttempts = '��������� �����';
$strField = '����';
$strFieldHasBeenDropped = '������ %s � ���������';
$strFields = '�����';
$strFieldsEnclosedBy = '������� �� ��������� ��';
$strFieldsEscapedBy = 'Escape �������� &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = '������� �� ���������� ��';
$strFileAlreadyExists = '���������� %s ������ �� ��������, ��������� �� ����� �� ������������ ��� �������� ����� �� �������� ��� ���.';
$strFileCouldNotBeRead = '������������ �� � ����� �� �� �������';
$strFileNameTemplate = '������ �� ��� �� ����������';
$strFileNameTemplateRemember = '������� �� ��������';
$strFixed = '�������';
$strFlushPrivilegesNote = '��������: phpMyAdmin �� ���� ������������ �� ���������� �������� �� MySQL �������� �� ����������. ���������� �� ���� ������ ������ ���� �� �� ��������� �� ������������ ��� �������� �� ������� ��� �� ������ �������� ������. �� �� ����� %s�������� ������� �� ������������%s ���� �� ���������� �� ������.';
$strFlushTable = '���������� �� �������� ("FLUSH")';
$strFormEmpty = '����������� �������� �� ���������!';
$strFormat = '������';
$strFreePages = '�������� ��������';
$strFullText = '���� �����';
$strFunction = '�������';

$strGenBy = '���������';
$strGenTime = '����� �� ��������';
$strGeneralRelationFeat = '����� ������� �� ���������';
$strGeorgian = '��������';
$strGerman = '���������';
$strGlobal = '��������';
$strGlobalPrivileges = '�������� ����������';
$strGlobalValue = '�������� ��������';
$strGo = 'OK';
$strGrantOption = '��������';
$strGreek = '�����';
$strGzip = '"gzip"';

$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHasBeenAltered = '� ��������(�).';
$strHasBeenCreated = '� �������(�).';
$strHaveToShow = '������ �� �������� ����� ���� ������ �� ������';
$strHebrew = '��������';
$strHome = '������� ��������';
$strHomepageOfficial = '��������� ��� ��� �� phpMyAdmin';
$strHost = 'Host';
$strHostEmpty = '����� �� host-�� � ������!';
$strHungarian = '��������';

$strIcelandic = '���������';
$strId = 'ID';
$strIdxFulltext = '����� ����';
$strIgnore = '��������';
$strIgnoreInserts = '�������� ��������� ��� ���������';
$strImportFiles = '���� �� ����������';
$strInUse = '�� �������';
$strIndex = '����';
$strIndexHasBeenDropped = '������ %s � ��������';
$strIndexName = '��� �� ���� :';
$strIndexType = '��� �� ���� :';
$strIndexWarningTable = '������� ��� ����������� �� �������� `%s`';
$strIndexes = '�������';
$strInnoDBAutoextendIncrement = '����� �� ���������� �����������';
$strInnoDBAutoextendIncrementDesc = ' �������� �� ������� �� ����������� �� ���������� �� �������� ��� ���������� �� ����������� ���� �� �� ��������.';
$strInnoDBBufferPoolSize = '�������� �� �������';
$strInnoDBBufferPoolSizeDesc = '�������� �� ����������� ����� �� �� ������� InnoDB �� �������� �� �������� � �� ��������� �� ������ ������.';
$strInnoDBDataFilePath = '���������� �� ��������';
$strInnoDBDataHomeDir = '������� ����������� �� ����������';
$strInnoDBDataHomeDirDesc = '��������� ��� �� �������� �� ������������� �� ���� InnoDB �������� �� ��������.';
$strInnoDBPages = '��������';
$strInnodbStat = 'InnoDB ������';
$strInsecureMySQL = '������ �������������� ���������� ������ ���������� (root ��� �������) ��� ���������� �� ������������ MySQL ������������ �����. ������ MySQL ������ ������ �� ���� ����������, ������� � �� ����, � ��������� ����� �� �� ��������� ��� ���������� �����.';
$strInsert = '��� �����';
$strInsertAsNewRow = '����� ���� ��� �����';
$strInsertedRowId = 'ID �� �������� ������:';
$strInsertedRows = '������� ������:';
$strInternalNotNecessary = '* ����������� ������� �� � ��������� ���� ������ � �� InnoDB.';
$strInternalRelations = '��������� �������';

$strJapanese = '��������';
$strJumpToDB = '������ �� ������ &quot;%s&quot;.';
$strJustDelete = '���� ������� �� ����������� �� �������� �� ����������.';
$strJustDeleteDescr = '&quot;�����������&quot; ��������� � �������� �� ����� ������� �� �������� �� ������ ������������ �� �� ������� ��������.';

$strKeepPass = '���� �� �� ������� ���������';
$strKeyname = '��� �� ����';
$strKill = '�������';
$strKorean = '�������';

$strLaTeX = 'LaTeX';
$strLandscape = '�������';
$strLatchedPages = '��������� ��������';
$strLatexCaption = '�������� �� ������';
$strLatexContent = '�������� �� �������� __TABLE__';
$strLatexContinued = '(����������)';
$strLatexContinuedCaption = '��������� �������� �� ��������';
$strLatexIncludeCaption = '������ � �������� �� ��������';
$strLatexLabel = '������ �� ������';
$strLatexStructure = '��������� �� �������� __TABLE__';
$strLatvian = '��������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '��� �� ������ �� ��������';
$strLinesTerminatedBy = '������� �� ���������� ��';
$strLinkNotFound = '������� �� � ���������';
$strLinksTo = '����� ���';
$strLithuanian = '���������';
$strLocalhost = '�������';
$strLocationTextfile = '������� �� ������������ ����������';
$strLogPassword = '�������:';
$strLogServer = '������';
$strLogUsername = '���������� ���:';
$strLogin = '����� ��';
$strLoginInformation = '�������� �� �����������';
$strLogout = '���������';
$strLongOperation = '���� �������� ���� �� ������. �� �� �� ����������?';

$strMIMETypesForTable = 'MIME ������ �� ������';
$strMIME_MIMEtype = 'MIME-������';
$strMIME_available_mime = '�������� MIME-������';
$strMIME_available_transform = '�������� �������������';
$strMIME_description = '����';
$strMIME_nodescription = '���� ���� �� ���� �������������.<br />�� ������ ������� �� ������� ��� �� �������� %s.';
$strMIME_transformation = '������������ �� ��� �������������';
$strMIME_transformation_note = '�� ����� �� �������� ����� �� �������������� � ������� MIME-��� �������������, �������� �� %s���� �� ���������������%s';
$strMIME_transformation_options = '����� �� ���������������';
$strMIME_transformation_options_note = '�� ������ ������� ��������� �� ������� �� ��������������� �� �������� ������: \'a\',\'b\',\'c\'...<br /> ��� ����� �� ������� ������� ���� ���� ("\\") ��� �������� ("\'") �� ��� ���������, ������� ������� ���� ���� ���� ��� (������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strMIME_without = 'MIME-�������� ��������� �� ������ ������ ������� ������� �� �������������.';
$strMaximumSize = '���������� ��������: %s%s';
$strMbExtensionMissing = 'mbstring ��� ����������� �� � ���������, � ������� ���� ��� ��������� �������� ������� ���. ��� mbstring ����������� phpMyAdmin �� ���� �������� �� �� ��������� ����������� � ��� ���� �� ������ �� ����������� ���������.';
$strMbOverloadWarning = '����� �������� mbstring.func_overload ����� �� ������ PHP ����������. ���� ����� �� � ������������ �� phpMyAdmin � ���� �� ������ �� ������ �� ����� ��������!';
$strModifications = '�������� �� ��������';
$strModify = '�������';
$strModifyIndexTopic = '������� �� ������';
$strMoveTable = '�������� �� �������� �� (����<b>.</b>������):';
$strMoveTableOK = '�������� %s � ���������� �� %s.';
$strMoveTableSameNames = '�� ���� �� �� ��������� �������� �� ������ ����!';
$strMultilingual = '�����������';
$strMyISAMDataPointerSize = '�������� �� ������������ �� ��������';
$strMyISAMDataPointerSizeDesc = 'Default �������� �� ������������ �� ����, �� ������� ��� CREATE TABLE �� MyISAM �������� ���� �� � �������� ������� MAX_ROWS';
$strMyISAMMaxExtraSortFileSize = '���������� ������ �� ���������� ���������� ��� �������� �� �������';
$strMyISAMMaxExtraSortFileSizeDesc = '��� ������������ ���������� ��� �� ������� �� ���� �������� �� MyISAM ������� ���� �������� ������� ��� �������� �� ����� �� ���� ���������� ��������, ������� �� ������� �� �������� �� ���������';
$strMyISAMMaxSortFileSize = '���������� �������� �� ������������ ���������� �� �����������';
$strMyISAMMaxSortFileSizeDesc = '���������� �������� �� ������������ ���������� ��� MySQL ���� �� �� ������� ��� �������� �������� �� MyISAM ������� (�� ��� REPAIR TABLE, ALTER TABLE, ��� LOAD DATA INFILE ��������).';
$strMyISAMRecoverOptions = '����� �� ���������� �����������';
$strMyISAMRecoverOptionsDesc = '����� �� ���������� ����������� �� �������� MyISAM ������, ������� ��� ���������� �� �������� �� ������� --myisam-recover.';
$strMyISAMRepairThreads = '����� �� ��������';
$strMyISAMRepairThreadsDesc = '��� ��������� � �������� �� 1, ��������� �� MyISAM �������� ��������� �� �������� (���� ������ �� ��������� �����) �� ����� �� �������� �� �������� �� �����������.';
$strMyISAMSortBufferSize = '�������� �� ������������ �� �����������';
$strMyISAMSortBufferSizeDesc = '������������ �� �� ������� ��� ����������� �� MyISAM ��������� �� ����� �� ���������� REPAIR TABLE ��� ��� �������� �� ������� �� CREATE INDEX ��� ALTER TABLE.';
$strMySQLCharset = 'MySQL ��������� �� �����';
$strMySQLConnectionCollation = '������� �� MySQL �����';
$strMySQLSaid = 'MySQL ������: ';
$strMySQLShowProcess = '������� ����� �� �������';
$strMySQLShowStatus = '������� MySQL ���������� �� ����� �� ��������';
$strMySQLShowVars = '������� ��������� ���������� �� MySQL';

$strName = '���';
$strNext = '������';
$strNo = '��';
$strNoActivity = '������ ������� ��������� %s ��� ����� �������, �� ������ ������� �� ��������';
$strNoDatabases = '������ �� �������� �� ������';
$strNoDatabasesSelected = '�� � ������� �� ���� ���� �� ��������.';
$strNoDescription = '���� ����';
$strNoDetailsForEngine = '���� ������� ���������� �� �������� �� ��� ��� �� ���������.';
$strNoDropDatabases = '"DROP DATABASE" ��������� � ������������.';
$strNoExplain = '��������� �� ������������ �� SQL-��';
$strNoFrames = 'phpMyAdmin ��������� ��� ������������ ��� ���������� �����.';
$strNoIndex = '������ �� � ���������!';
$strNoIndexPartsDefined = '������ �� ������ �� �� ����������!';
$strNoModification = '���� ������';
$strNoOptions = '�� ������� ����� �� ��� ������';
$strNoPassword = '���� �������';
$strNoPermission = '�� ��� �������� �� �� � ��������� �� �� ������  ������������ %s.';
$strNoPhp = '��� PHP ���';
$strNoPrivileges = '���� ����������';
$strNoRights = '������ ����� �� ������� ����!';
$strNoRowsSelected = '���� ����������� ������';
$strNoSpace = '���� ������� ������� �� ������� �� ������������ %s.';
$strNoTablesFound = '�������� �� �� ��������� �� ������ �� ��������.';
$strNoThemeSupport = '���� ������� �� ����, �� ������ ��������� �� �������������� �/��� ������ �� ������������� %s.';
$strNoUsersFound = '���������� �� � ��������.';
$strNoValidateSQL = '��������� �� ���������� �� SQL';
$strNone = '����';
$strNotNumber = '��� �� � ���!';
$strNotOK = '�� � ���� ��� �����';
$strNotSet = '<b>%s</b> �������� �� � ��������� ��� �� � ��������� �� %s';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s �������� �� �������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> ��������';
$strNumTables = '������';

$strOK = '��';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '����������� �� ��������';
$strOr = '���';
$strOverhead = '�������������';
$strOverwriteExisting = '������� �� ����������� ����������';

$strPHP40203 = '��� ��������� PHP 4.2.3, �� ��� �������� ��� �� ������������ ���� (mbstring). ���������� �� ��������� �� ������ ��. 19404. ��� ������ �� PHP �� �� ����������� �� �������� �� phpMyAdmin.';
$strPHPVersion = 'PHP ������';
$strPageNumber = '��� �� ��������:';
$strPagesToBeFlushed = '�������� ��� ����� �� ����� ���������';
$strPaperSize = '�������� �� ��������';
$strPartialText = '��� �� �������';
$strPassword = '�������';
$strPasswordChanged = '��������� �� %s ������� � ���������.';
$strPasswordEmpty = '������� � ������!';
$strPasswordHashing = '�������� �� ���������';
$strPasswordNotSame = '��������� �� �� ���������!';
$strPdfDbSchema = '���� �� ������ "%s" - �������� %s';
$strPdfInvalidTblName = '�������� "%s" �� ������!';
$strPdfNoTables = '���� ������';
$strPerHour = '�� ���';
$strPerMinute = '�� ������';
$strPerSecond = '�� �������';
$strPersian = '��������';
$strPhoneBook = '���������� ������';
$strPhp = '������� PHP ���';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> ����������� ���� �� ���� �������� �� ���������������� ����������!';
$strPolish = '������';
$strPortrait = '����������';
$strPos1 = '�������';
$strPrevious = '���������';
$strPrimary = '��������';
$strPrimaryKeyHasBeenDropped = '���������� ���� � ��������';
$strPrimaryKeyName = '����� �� ���������� ���� ���� �� ����... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>����</b> �� ���� ��� <b>����</b> �� ���������� ����!)';
$strPrint = '������';
$strPrintView = '������� �� �������';
$strPrintViewFull = '������� �� ������� (������� �����)';
$strPrivDescAllPrivileges = '�� �������� ���� ���������� ����� GRANT.';
$strPrivDescAlter = '��������� ������� �� ����������� �� ����������� ������.';
$strPrivDescCreateDb = '��������� �������� �� ���� ���� �� �������� � ������.';
$strPrivDescCreateTbl = '��������� �������� �� ���� ������.';
$strPrivDescCreateTmpTable = '��������� �������� �� ���������� ������...';
$strPrivDescDelete = '��������� ������ �� ��������.';
$strPrivDescDropDb = '��������� ������ �� ���� �� �������� � ������.';
$strPrivDescDropTbl = '��������� ������ �� ������.';
$strPrivDescExecute = '��������� ���������� �� ������� ���������. ���� ����� �� ������ ������ �� MySQL.';
$strPrivDescFile = '��������� ���� �� �������� � ����� ����� �� ����������.';
$strPrivDescGrant = '��������� �������� �� ��������� � ���������� ��� �������� ��������� �� �������� �� ����������.';
$strPrivDescIndex = '��������� �������� � ������ �� �������.';
$strPrivDescInsert = '��������� ���������� � ������ �� ��������.';
$strPrivDescLockTables = '��������� ����������� �� ������ �� ��������� �������.';
$strPrivDescMaxConnections = '�� ���������� ����� �� ���� �������� ��� ���������� ���� �� �� ������ �� ���� ���.';
$strPrivDescMaxQuestions = '�� ���������� ����� �� ����� ��� ���������� ���� �� �� ������� �� �������� �� ���� ���.';
$strPrivDescMaxUpdates = '�� ���������� ����� �� ������� ��� �� �������� �������� ��� ������ �� �������� ��� ���������� ���� �� �� ������ �� ���� ���.';
$strPrivDescProcess3 = '��������� ����������� �� ��������� �� ������� ���������.';
$strPrivDescProcess4 = '��������� ������� �� ����������� ����� �� ������� �� �������.';
$strPrivDescReferences = '���� ����� �� ���� ������ �� MySQL.';
$strPrivDescReload = '��������� ������� ��������� �� ������������ �� �������� � ������� �� ����� �� ��������.';
$strPrivDescReplClient = '���� ����� �� ��������� �� ����� ���� �� ��������/������� �������.';
$strPrivDescReplSlave = '�������� ������ ��������� ������� �� ����������.';
$strPrivDescSelect = '��������� ������ �� ��������.';
$strPrivDescShowDb = '���� ������� �� ����������� ����� �� ������ �� ��������.';
$strPrivDescShutdown = '��������� ����� �� ��������.';
$strPrivDescSuper = ' ��������� ���������� ���� � ��������� ������������� ��� �� �����; ��������� �� ������� ��������������� ����� ���� ��� � ���������� �� �������� ���������� ��� ������ �� ������� ������������ ���������.';
$strPrivDescUpdate = '��������� ������ �� ��������.';
$strPrivDescUsage = '���� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '������������ �� ������� �������.';
$strProcesslist = '����� �� �������';
$strPutColNames = '����� �� ������ �� ������� �� ������ ������';

$strQBE = '���� �� ������';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = '�������� �� �����';
$strQueryOnDb = 'SQL ���� �� ������ �� �������� <b>%s</b>:';
$strQuerySQLHistory = 'SQL �������';
$strQueryStatistics = '<b>���������� �� �����</b>: %s ����� �� ��������� �� �������� �� ������� �� �������� ����������.';
$strQueryTime = '����� �� ���������� �� ������ %01.4f �������';
$strQueryType = '��� �� ����';
$strQueryWindowLock = '�� �� ��������� ��� ���� ������ �� ��� ��������';

$strReType = '������� ����';
$strReadRequests = '������ �� ������';
$strReceived = '�������';
$strRecords = '������';
$strReferentialIntegrity = '������� �� ��������������� ����������:';
$strRefresh = '������';
$strRelationNotWorking = '�������������� �������� �� ������ �� ���������� ������ �� ���������. �� �� �������� �����, �������� %s����%s.';
$strRelationView = '���������� ������';
$strRelationalSchema = '��������� ����';
$strRelations = '�������';
$strRelationsForTable = '������� �� ��������';
$strReloadingThePrivileges = '�������� �� �������� ������������';
$strRemoveSelectedUsers = '������� �� ������������� ���������';
$strRenameDatabaseOK = '������ �� �������� %s � ������������ �� %s';
$strRenameTable = '������� �� ����� �� �������� �� ';
$strRenameTableOK = '�������� %s � ������������ �� %s';
$strRepairTable = '�������� �� ��������';
$strReplaceNULLBy = '������ NULL ��';
$strReplaceTable = '������ �� ���������� �� �������� �� �������� �� ������������';
$strReset = '�������';
$strResourceLimits = '������������ �� �������';
$strRevoke = '�������';
$strRevokeAndDelete = '������ �� ���� ���������� �� ��������� ��������� � ����� ������� ��.';
$strRevokeAndDeleteDescr = '����������� � �������� �� ����� USAGE ���������� �� ������ �� �� ������� �������� ������������.';
$strRevokeMessage = '�� ���������� ������������ �� %s';
$strRomanian = '��������';
$strRowLength = '������� �� �����';
$strRowSize = '�������� �� �����';
$strRows = '������';
$strRowsFrom = ' ������ ������༝� �� �������';
$strRowsModeFlippedHorizontal = '������������ (�������� ��������)';
$strRowsModeHorizontal = '������������';
$strRowsModeOptions = '�� %s ��� � ��������� �������� ����� %s ������';
$strRowsModeVertical = '����������';
$strRowsStatistic = '���������� �� ��������';
$strRunQuery = '������ SQL';
$strRunSQLQuery = '������ SQL ����(�) �� ������ %s';
$strRunning = '�� �������� %s';
$strRussian = '�����';

$strSQL = 'SQL';
$strSQLExportType = '��� �� �����';
$strSQLParserBugMessage = '������ ������� ���� ��� ������� ������ �� SQL ��������. �� ������ ���������� ��������� �� ������ ����, ��������� ���� ����������� �� �������� ��������� ��� ���� ������ �������������. ����� ����� ������� ��: ������� ���������� ������ �� ������� �� ������ �����. ������ �� �� ������� ���� ���������� ����� �� MySQL. ������� ������ �� ������ �� MySQL ��������, ���� �� �� ������� �� �� �������� ���������. ��� � �������� ����� �������� ��� ��� �������� �� ������� ���� �� ��������� ����� �� � �� ���, ��������� �� ����� SQL ���� �� ��������� �� ������ � ����� �� ����� �� ������� ��� ������ �� ��� �� �� ������ �� ��������� �� ��� �� ������.';
$strSQLParserUserError = '������� ���� ��� ������ �� ������ SQL ����. ��� �� �������� �� �������� �� MySQL ��������, ��� ���� �� �� ������� �� ����������� �� ���������';
$strSQLQuery = 'SQL ����';
$strSQLResult = 'SQL ��������';
$strSQPBugInvalidIdentifer = '���������� �������������';
$strSQPBugUnclosedQuote = '���������� �� � ��������';
$strSQPBugUnknownPunctuation = '�������� ������ �� ������������';
$strSave = '������';
$strSaveOnServer = '������ �� �������� �� ������������� %s';
$strScaleFactorSmall = '�������� �� ���������� � ������ � ������ �� ���� �� �� ������ �� ���� ��������';
$strSearch = '�����������';
$strSearchFormTitle = '����������� ��� ������ �� ��������';
$strSearchInTables = '�� ������(�):';
$strSearchNeedle = '������� ��� ��������� ��� �� ������ (����� ���� "%"):';
$strSearchOption1 = '����� ���� �� ���������';
$strSearchOption2 = '���� �������';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���� ��������� �����';
$strSearchResultsFor = '��������� �� ������������� �� "<i>%s</i>" %s:';
$strSearchType = '����:';
$strSecretRequired = '���������������� ���������� ���� ������� (blowfish_secret).';
$strSelectADb = '�������� ���� �� ��������';
$strSelectAll = '������ ��';
$strSelectBinaryLog = '�������� ������� ������� �� �������';
$strSelectFields = '������ ����� (������� ����)';
$strSelectNumRows = '�� ������';
$strSelectTables = '������ ������';
$strSend = '������ ���� ����������';
$strSent = '�������';
$strServer = '������';
$strServerChoice = '����� �� ������';
$strServerNotResponding = '�������� �� ��������';
$strServerStatus = '���������� �� ��������';
$strServerStatusUptime = '��� MySQL ������ ������ %s. ��������� � �� %s.';
$strServerTabVariables = '����������';
$strServerTrafficNotes = '<b>�������� �� ��������</b>: �� �������� �������� � �������� �������� �� ��� MySQL ������ �� �������� �� �������� ����������.';
$strServerVars = '��������� ���������� � ����������';
$strServerVersion = '������ �� ��������';
$strSessionValue = '�������� �� �������';
$strSetEnumVal = '��� ����� �� ������ � "enum" ��� "set", ��������� �������� �� ������: \'a\',\'b\',\'c\'...<br />��� �� ����� ������� ���� ���� ("\\") ��� �������� ("\'") ��������� �� �� escap ����� (������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '�������';
$strShowAll = '������� �� ����';
$strShowColor = '������� ���';
$strShowDatadictAs = '������ �� �������� �� ��������';
$strShowFullQueries = '������� ��������� �����';
$strShowGrid = '������� �����';
$strShowPHPInfo = '������� ���������� �� PHP';
$strShowTableDimension = '������� �� ���������� �� ��������';
$strShowTables = '������� ������';
$strShowThisQuery = '������� �� �������� ��� ����';
$strShowingRecords = '������ �� ������ �� ';
$strSimplifiedChinese = '������������ �������';
$strSingly = '(�� ���� ����)';
$strSize = '��������';
$strSlovak = '��������';
$strSlovenian = '����������';
$strSocketProblem = '(��� ����������� �� ��������� MySQL ������ �� � �������� �������)';
$strSort = '������������';
$strSortByKey = '����������� �� ����';
$strSpaceUsage = '��������';
$strSpanish = '�������';
$strSplitWordsWithSpace = '��������� �� ��������� �� ������ ����� (" ").';
$strStatCheckTime = '�������� ��������';
$strStatCreateTime = '���������';
$strStatUpdateTime = '�������� ������';
$strStatement = '���';
$strStatus = '������';
$strStorageEngine = '��� �� ���������';
$strStorageEngines = '������ �� ���������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ��������';
$strStrucExcelCSV = 'CSV �� MS Excel';
$strStrucNativeExcel = '������� MS Excel ��������';
$strStrucOnly = '���� ���������';
$strStructPropose = '�������� ��������� �� ��������';
$strStructure = '���������';
$strSubmit = '�������';
$strSuccess = '������ SQL ���� ������� � �������';
$strSum = '������';
$strSwedish = '�������';
$strSwitchToDatabase = '������� �� �� ���������� ���� �� ��������';
$strSwitchToTable = '������� �� ���������� ������';

$strTable = '������';
$strTableComments = '�������� �� ��������';
$strTableEmpty = '����� �� �������� � ������!';
$strTableHasBeenDropped = '�������� %s � ���������';
$strTableHasBeenEmptied = '�������� %s � ����������';
$strTableHasBeenFlushed = '�������� %s � ��������';
$strTableMaintenance = '������ �� ��������:';
$strTableOfContents = '��������';
$strTableOptions = '����� �� ��������';
$strTableStructure = '��������� �� ��������';
$strTables = '%s ������';
$strTakeIt = '��������';
$strTblPrivileges = '���������� �������� �� ��������';
$strTextAreaLength = '������ �������� �� ������<br />������ ���� �� ���� �� �� �������� �������� ��������';
$strThai = '�����';
$strTheme = '���� / ����';
$strThisHost = '��� host';
$strThreadSuccessfullyKilled = '�������� %s � ������� ��������.';
$strTime = '�����';
$strToggleScratchboard = '������/������� ������� ������';
$strTotal = '������';
$strTotalUC = '������';
$strTraditionalChinese = '������������� �������';
$strTraditionalSpanish = '������������� �������';
$strTraffic = '��������';
$strTransformation_application_octetstream__download = '��������� ����� �� ���������� �� ������� �������� �� ������. ������ ����� � ��� �� ��������� ����������. ������� ����� � ����� ��� �� ���� �� �������� ��� �� ������ ����� �� ������������. ��� �� �������� ������� �����, ������ ���� �� ���� ��������� �� ������ ������';
$strTransformation_image_jpeg__inline = '��������� �������� ����� �� ��� � ����� �� �� ������; �����: ������, ������ �� ������� (������� � ���������� �����)';
$strTransformation_image_jpeg__link = '��������� ����� ��� ���� ����� (������ �������� ���������� �� BLOB).';
$strTransformation_image_png__inline = '������� JPEG ����� �� ������';
$strTransformation_text_plain__dateformat = '�� ���� TIME, TIMESTAMP ��� DATETIME ������ � �� ��������� ������弝� �� ��������� ������ �� ������ �� �����. ������ ����� � ����� (�� ������) ��� �� �������� �� ����������� ������ (default: 0). ������� ����� � �������� ������ �� ������� ������ ����������� ��� �� �������� �� PHP ��������� strftime().';
$strTransformation_text_plain__external = '���� LINUX: �������� ���������� ��������� � �� ��������� ���������� �� ������� ����� ���������� ����. ����� ���������� ����� �� ����������. �� ���������� Tidy, �� ������ ������ �� HTML �����. ������ ���������� �������, ���� �������� �� �� ������ ������������ libraries/transformations/text_plain__external.inc.php � �� �� ������� ������ ��� �� ����� ������ �� �� ���������. ������ ����� � ����� �� ��������� �� ������ �� �� ���������, � ������� ����� �� ����������� �� ���������. ��� ������� ��������� �� ������ �� 1, ������� �� ���� ����������� ������弝� �� ��������� htmlspecialchars() (default 1). ��� �������ot ��������� �� ������� �� 1, NOWRAP �� ���� �������� �� ������ �� �������� ���� �� ������� �� ���� �������� ��� ������. (default 1).';
$strTransformation_text_plain__formatted = '�� ���� ������������ ������ �� ������. Escaping �� �� ����.';
$strTransformation_text_plain__imagelink = '��������� ����� � ����, ������ �� ������ ������� �� ������������; ������ ����� � ������� ���� "http://domain.com/", ������� ����� � ������ �� �������, � ������� � ������.';
$strTransformation_text_plain__link = '��������� ����, ������ �� ������ ������� �� ������������; ������ ����� � ������� ���� "http://domain.com/", ������� ����� � ������ �� ������.';
$strTransformation_text_plain__substr = '�������� ��� �� ��������. ������ ����� � ��� �� ����� ��� ����� �� �� ���������� �� ��������� �� �������� (default 0). ������� ����� � ��� �� ������� ����� (default: �� ��� �� ��������). ������� ����� � ������ �� �� ������ ���� �� ���� �� ���������� (default: ...) .';
$strTruncateQueries = '������� �������� �����';
$strTurkish = '������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '������';
$strUnicode = '������';
$strUnique = '���������';
$strUnknown = '��������';
$strUnselectAll = '�����';
$strUpdComTab = '�� ������ ���������� �� �������������� �� ��� ���� �� ������� �������� Column_comments';
$strUpdatePrivMessage = '�� ���������� ������������ �� %s.';
$strUpdateProfileMessage = '�������� � ��������';
$strUpdateQuery = '�������';
$strUpgrade = '�� ������� �� �� ����������� ������ %s ������ �� ������ %s ��� ������.';
$strUsage = '��������';
$strUseBackquotes = '����� �� ������ ����� �� �� \'';
$strUseHostTable = '������� �� �������� �� host-��';
$strUseTabKey = '��������� �� TAB �������� �� ������ �� ���� �� ����, ��� CTRL+������� �� �������� ������';
$strUseTables = '������� ������';
$strUseTextField = '������� ����� ����';
$strUseThisValue = '������� �� ���� ��������';
$strUser = '��������';
$strUserAlreadyExists = '�������� %s ��� ������!';
$strUserEmpty = '�� � ������ ����� �� ��������!';
$strUserName = '����� �� ��������';
$strUserNotFound = '���������� �������� �� � �������� �� �������� �� ����������.';
$strUserOverview = '������� �� ���������';
$strUsersDeleted = '���������� ��������� ������� �� ���������.';
$strUsersHavingAccessToDb = '��������� ��� ����� ������� &quot;%s&quot;';

$strValidateSQL = '������� SQL';
$strValidatorError = 'SQL ����������� �� ������ �� ���� ���������. ��������� �� �� �� ����������� ����������� PHP ��������� ������� ��  %s��������������%s.';
$strValue = '��������';
$strVar = '����������';
$strVersionInformation = '���������� �� ��������';
$strView = '������';
$strViewDump = '������� �������� (����) �� ��������';
$strViewDumpDB = '������� �������� (����) �� ������';
$strViewDumpDatabases = '������� �������� (����) �� ������';
$strViewHasBeenDropped = '��������� %s � ��������';

$strWebServerUploadDirectory = '����������� �� ������� �� ��� �������� ';
$strWebServerUploadDirectoryError = '������������� �� �� �������� �� ������� �� � ��������';
$strWelcome = '%s ������������';
$strWestEuropean = '���������������';
$strWildcard = '�����';
$strWindowNotFound = '��������� ������ ������������ ��� ����� �� ���� ��������. ����� ��� ��������� ������� ������, ��� ��� ����������� ���������� ��������� ��� ��������� ���� ����������� ����������';
$strWithChecked = '�����������:';
$strWriteRequests = '������ �� ����';
$strWrongUser = '�������� ���������� ���/�������. ��������� �� � ��������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '��������: ������������� �� ���� ����� �� 0 (����) �� ���������� ��������������.';
$strZip = '"zip"';

$strPrivDescCreateView = '��������� �������� �� ���� �������.';
$strPrivDescCreateUser = '��������� ��������, ������ � ������������ �� ������������ ����.';
$strPrivDescCreateRoutine = '��������� �������� �� stored ������.';
$strPrivDescAlterRoutine = '��������� ������� � ������ �� stored ������.';
$strRoutines = '������';
$strPrivDescShowView = '��������� ���������� �� SHOW CREATE VIEW �����.';
$strPrivDescExecute5 = '��������� ���������� �� stored ������.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE ���� ��������';
$strGeneratePassword = '���������� �� �������';
$strGenerate = '��������';
$strCopy = '������';

$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddClause = 'Add %s';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strAngularLinks = 'Angular links';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strCancel = 'Cancel';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strCreateRelation = 'Create relation';  //to translate
$strCreateTable  = 'Create table';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strCSV = 'CSV';  //to translate
$strDbIsEmpty = 'Database seems to be empty!';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDeleteRelation = 'Delete relation';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strDesigner = 'Designer';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate
$strDirectLinks = 'Direct links';  //to translate
$strDocSQL = 'DocSQL';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strEvent = 'Event';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFiles = 'Files';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFontSize = 'Font size';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate
$strFunctions = 'Functions';  //to translate
$strHandler = 'Handler';  //to translate
$strHelp = 'Help';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate
$strHide         = 'Hide';  //to translate
$strHideShowAll = 'Hide/Show all';  //to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';  //to translate
$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strInnoDBRelationAdded = 'InnoDB relation added';  //to translate
$strInternalRelationAdded = 'Internal relation added';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strJoins = 'Joins';  //to translate
$strKeyCache = 'Key cache';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate
$strLanguage = 'Language';  //to translate
$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMoveMenu = 'Move Menu';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate
$strNumberOfTables = 'Number of tables';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOptions = 'Options';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strPmaWiki = 'phpMyAdmin wiki';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strProcedures = 'Procedures';  //to translate
$strProcesses = 'Processes';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate
$strQueryCache = 'Query cache';  //to translate
$strQueryResultsOperations = 'Query results operations';  //to translate
$strRecommended = 'recommended';  //to translate
$strRelationDeleted = 'Relation deleted';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strReload = 'Reload';  //to translate
$strReplication = 'Replication';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate
$strSavePosition = 'Save position';  //to translate
$strSelectForeignKey = 'Select Foreign Key';  //to translate
$strSelectReferencedKey = 'Select referenced key';  //to translate
$strServers = 'Servers';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
$strShowHideLeftMenu = 'Show/Hide left menu';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowingPhp = 'Showing as PHP code';  //to translate
$strShowingSQL = 'Showing SQL query';  //to translate
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
$strSmallBigAll = 'Small/Big All';  //to translate
$strSnapToGrid = 'Snap to grid';  //to translate
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStructureForView = 'Structure for view';  //to translate
$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableIsEmpty = 'Table seems to be empty!';  //to translate
$strTableName = 'Table name';  //to translate
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
$strToFromPage = 'to/from page';  //to translate
$strToggleSmallBig = 'Toggle small/big';  //to translate
$strToSelectRelation = 'To select relation, click :';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTriggers = 'Triggers';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadErrorCantWrite = 'Failed to write file to disk.';  //to translate
$strUploadErrorExtension = 'File upload stopped by extension.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';  //to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';  //to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strViewName = 'VIEW name';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
