<?php
/* $Id: ukrainian-windows-1251.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('����', '��', '��', '��');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('ѳ�', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$timespanfmt = '%s ����, %s �����, %s ������ � %s ������';

$strAbortedClients = '���������';
$strAccessDenied = '������ ����������';
$strAccessDeniedExplanation = 'phpMyAdmin ��������� �\'�������� � MySQL ��������, ��� ������ �� �������� ��\'�������. ����� ��������� �������� host, username �� password � ���� config.inc.php �� ����������, �� ���� ���������� ����� ��������� ���� �� ������������� MySQL �������.';
$strAction = 'ĳ�';
$strAddDeleteColumn = '������/������� ������� �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddIntoComments = '������ ��������';
$strAddNewField = '������ ���� ����';
$strAddPrivilegesOnDb = '������ ����� ��� ���� ���� �����';
$strAddPrivilegesOnTbl = '������ ����� ��� ���� �������';
$strAddSearchConditions = '������ ����� ������ (��� ��� ����� "where"):';
$strAddToIndex = '������ �� �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '������ ������ �����������';
$strAddUserMessage = '���� ������ ������ �����������.';
$strAdministration = '������������';
$strAffectedRows = '������ �����:';
$strAfterInsertBack = '�����������';
$strAfterInsertNewInsert = '�������� ����� �����';
$strAfter = 'ϳ��� %s';
$strAll = '���';
$strAllTableSameWidth = '���������� �� ������� �������� ������?';
$strAlterOrderBy = '������ ������� �������';
$strAnalyzeTable = '����� �������';
$strAnd = '�';
$strAnIndex = '���� ������ ������ ��� %s';
$strAny = '��������';
$strAnyHost = '�������� ����';
$strAnyUser = '�������� ����������';
$strAPrimaryKey = '���� ������ ��������� ���� �� %s';
$strArabic = '��������';
$strArmenian = '³��������';
$strAscending = '����������';
$strAtBeginningOfTable = '�� ������� �������';
$strAtEndOfTable = '� ���� �������';
$strAttr = '��������';
$strAutomaticLayout = '������������ layout';

$strBack = '�����';
$strBaltic = '���������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' ������ ���� - �� ����������� ';
$strBookmarkDeleted = '�������� ���� ��������.';
$strBookmarkLabel = '̳���';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���� ��������';
$strBrowse = '�����������';
$strBulgarian = '����������';
$strBzError = 'phpMyAdmin �� ���� ������������� dump ����� ���������� Bz2 ���������� � ��� ���� PHP. ����������� ���������� ���������� � ���������������� ���� ������ phpMyAdmin ��������� <code>$cfg[\'BZipDump\']</code> �� <code>FALSE</code>. ���� �� ������ ��������������� ��������� Bz2 �������������, ��� ��������� �������� ����� PHP. ���. ���������� � ������������ ��� ������� %s.';
$strBzip = '���������� � "bzip"';

$strCannotLogin = '�� ���� �������������� �� MySQL ������';
$strCantLoadRecodeIconv = '�� ���� ����������� iconv �� recode extension ��������� ��� ���� charset-�, ������������� php ���, ��� ����� ���� ��������������� �� extensions, ��� ���������� ���� charset-� � phpMyAdmin.';
$strCantLoad = '�� ���� ����������� %s,<br />����� ��������� ������������ PHP.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ����  ����������� ��/��� iconv, ��/��� libiconv, ��/��� ������� recode_string ���� ���� ����������� extension reports. �������� ���� php ������������.';
$strCardinality = 'ʳ������ ��������';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = '����������������';
$strChange = '������';
$strChangeCopyMode = '�������� ������ ����������� � ������ � ������� � ...';
$strChangeCopyModeCopy = '... �������� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� ������� � ������� ������������ �� ������������� ����� ���� ����.';
$strChangeCopyModeJustDelete = ' ... ������� ������� � ������� ������������.';
$strChangeCopyModeRevoke = ' ... ��������� �� ������� ����� ������� �����������, �������� ���� ���� ����.';
$strChangeCopyUser = '������ ����������� ���� / �������� �����������';
$strChangeDisplay = '������� ���� ��� �����������';
$strChangePassword = '������ ������';
$strCharset = '���� �������';
$strCharsetOfFile = '��������� �����:';
$strCharsets = '���������';
$strCharsetsAndCollations = '������ ������� �� �����';
$strCheckAll = '³������ ���';
$strCheckPrivs = '��������� �����';
$strCheckPrivsLong = '��������� ����� ��� ���� ����� &quot;%s&quot;.';
$strCheckTable = '��������� �������';
$strChoosePage = '����� ������� ������� ��� �����������';
$strColComFeat = '���������� �������� ��������';
$strCollation = '���������';
$strColumnNames = '����� �������';
$strColumnPrivileges = '�����, �� ���������� ������� �������';
$strCommand = '�������';
$strComments = '��������';
$strCompleteInserts = '����� �������';
$strCompression = '���������';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� ��������������� ���� <br />�� ���� ������� � ���� �������, ���� php ��������� �� ����������� ������� (parse error) � �����, ��� �� ���� ������ ������ �����.<br />���������� ��������������� ���� ������������� �� ��������� ��������� �������� ����� � ���������� �������� ����������� ��� ������� (php error messages). ��������� ���� � ���� ������ ����� ����� �� ���������.  <br />���� �� �������� ������� �������, - ������� ��� � �������.';
$strConfigureTableCoord = '����� �������������� ���������� ������� %s';
$strConnections = '�\'������';
$strCookiesRequired = '� ����� ������� Cookies ������� ���� ���������.';
$strCopyTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ���������� � %s.';
$strCopyTableSameNames = '�� ���� ��������� ������� ���� � ����!';
$strCouldNotKill = 'phpMyAdmin �� ���� ��������� ������ %s. ³� ��� ������� ��� ���������.';
$strCreate = '��������';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '�������� ����� ������';
$strCreateNewDatabase = '�������� ���� ��';
$strCreateNewTable = '�������� ���� ������� � �� %s';
$strCreatePage = '�������� ���� �������';
$strCreatePdfFeat = '�������� PDF-����';
$strCriteria = '�������';
$strCroatian = '���������';
$strCyrillic = '���������';
$strCzech = '������';

$strDanish = '�������';
$strData = '����';
$strDatabase = '��';
$strDatabaseExportOptions = '������������ �������� ���� �����';
$strDatabaseHasBeenDropped = '���� ����� %s �������.';
$strDatabases = '���� �����';
$strDatabasesDropped = '%s ���(�\�) ����� ������ �������.';
$strDatabasesStats = '���������� ��� �����';
$strDatabasesStatsDisable = '���������� ����������';
$strDatabasesStatsEnable = '��������� ����������';
$strDatabasesStatsHeavyTraffic = '�������: ���������� ����� ���������� ���� ����� ���� ���������� ������� ������ �� ��� �������� �� ����� ����� MySQL.';
$strDataDict = '������� �����';
$strDataOnly = '���� ����';
$strDBComment = '�������� ���� �����: ';
$strDbPrivileges = '�����, �� ���������� ���� �����';
$strDbSpecific = '����������� ��� ���� �����';
$strDefault = '�� ������������';
$strDefaultValueHelp = '��� ������� �� �������������, ������ ���� ��������, ��� ������������ ��������� ������ �� �����, � ������ ������: a';
$strDelete = '��������';
$strDeleteAndFlush = '������� ������������ � ��������������� ����� ���� �����.';
$strDeleteAndFlushDescr = '�� ������ �����, ����� ���������������� ���� ���� ��������� ������ ���.';
$strDeleted = '����� ��������';
$strDeletedRows = '�������� �������� �����:';
$strDeleting = '������� %s';
$strDelOld = '�� ������� �� ��������� �� �������, ��� ��� ����. ������ �������� �� ���������?';
$strDescending = '���������';
$strDescription = '����';
$strDictionary = '�������';
$strDisabled = '�����������';
$strDisplayFeat = '�������� ���������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF �����';
$strDoAQuery = '�������� "����� ����� ��������" (������ �����������: "%")';
$strDocu = '������������';
$strDoYouReally = '�� �������� ������ ';
$strDrop = '�������';
$strDropUsersDb = '������� ���� �����, �� ����� ��� � ����� �� ����� ������������.';
$strDumpingData = '���� ����� �������';
$strDumpSaved = 'Dump ��������� � ���� %s.';
$strDumpXRows = 'Ǵ��������� ���� %s ����� ��������� � %s -��.';
$strDynamic = '���������';

$strEdit = '����������';
$strEditPDFPages = '���������� PDF �������';
$strEditPrivileges = '����������� �������';
$strEffective = '������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ��������� ������ ��������� (����� ���� �����).';
$strEnabled = '���������';
$strEnd = 'ʳ����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = '���������';
$strEnglishPrivileges = ' ����������: ������ MySQL ��������� ��-��������� ';
$strError = '�������';
$strEstonian = '���������';
$strExecuteBookmarked = '�������� ���������� �����';
$strExplain = '��������� SQL';
$strExport = '�������';
$strExtendedInserts = '��������� �������';
$strExtra = '���������';

$strFailedAttempts = '�������� �����';
$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� ��������';
$strFields = '����';
$strFieldsEnclosedBy = '���� ����� �';
$strFieldsEscapedBy = '���� �����������';
$strFieldsTerminatedBy = '���� ��������';
$strFileAlreadyExists = '���� %s ���� �� ������, ����� ������ ����� �����, ��� ������� ����� ����� �������� �����.';
$strFileCouldNotBeRead = '��������� ��������� ����';
$strFileNameTemplate = '������ ����� �����';
$strFileNameTemplateRemember = '�����\'����� ������';
$strFixed = '����������';
$strFlushPrivilegesNote = '�������: phpMyAdmin ������ ����� ������������ ������������� � ������� ���� MySQL. ���� ���� ������� ���� ���������� �� ����, �� ���������������� ��������, ���� � �� ������� ��������� ���� ������. � ����� ������� ��� ��������� %s��������������� �����%s ����� ������������.';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormat = '������';
$strFormEmpty = '�� ������ �������� ��� �����!';
$strFullText = '����� ������';
$strFunction = '�������';

$strGenBy = '�����������';
$strGeneralRelationFeat = '�������� ���������';
$strGenTime = '��� ���������';
$strGerman = 'ͳ������';
$strGlobal = '����������';
$strGlobalPrivileges = '��������� �����';
$strGlobalValue = '�������� ��������';
$strGo = '������';
$strGrantOption = 'Grant';
$strGreek = '�������';
$strGzip = '���������� � "gzip"';

$strHasBeenAltered = '���� ������.';
$strHasBeenCreated = '���� ��������.';
$strHaveToShow = '��������� ������� ������� ���� �������� ��� ������';
$strHebrew = '�����';
$strHome = '�� �������';
$strHomepageOfficial = '�������� ������� phpMyAdmin';
$strHost = '����';
$strHostEmpty = '������� ��\'� �����!';
$strHungarian = '���������';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIgnore = '������������';
$strImportFiles = '������ �����';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������ %s ���� �������';
$strIndexName = '����� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strInnodbStat = '������ InnoDB';
$strInsecureMySQL = '��� ���� ������������ ������ ��������� (root ��� ������) �� ���������� �������������� ����������� MySQL. ��� MySQL ������ � ����� ������� �������� ��� ���������� � ���� ��� ����\'������ ��� ��������� �� ��������� � �������.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ����� �����';
$strInsertedRowId = '��������� ����� id:';
$strInsertedRows = '������ �����:';
$strInUse = '���������������';

$strJapanese = '��������';
$strJumpToDB = '������� �� ���� ����� &quot;%s&quot;.';
$strJustDelete = '����� ������� ������������ � ������� ����.';
$strJustDeleteDescr = '&quot;������&quot; ����������� ��� �� �������� ������ �� ������� �� ��� ��, ���� �� ������ ��������������� �����.';

$strKeepPass = '�� �������� ������';
$strKeyname = '��\'� �����';
$strKill = '�����';
$strKorean = '���������';

$strLandscape = 'Landscape';
$strLaTeX = 'LaTeX';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '������ �� �������';
$strLinesTerminatedBy = '����� ��������';
$strLinkNotFound = '˳�� �� ��������';
$strLinksTo = '˳��� ��';
$strLithuanian = '���������';
$strLocalhost = '���������';
$strLocationTextfile = '������ ������������ ���������� �����';
$strLogin = '���� � �������';
$strLoginInformation = '������ ���������� (Login)';
$strLogout = '����� � �������';
$strLogPassword = '������:';
$strLogUsername = '��\'� �����������:';

$strMIME_available_mime = '�������� MIME-types';
$strMIME_available_transform = '�������� ������������';
$strMIME_description = '����';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = '���� ����� ��� ����� ������������.<br />����� �������� ������, �� ������ %s.';
$strMIME_transformation = '������������ ̲��-���� ���������';
$strMIME_transformation_note = '��� �������� ������ �������� ����� � �� MIME-type �����������, ��������� %s����� �����������%s';
$strMIME_transformation_options = '����� ������������';
$strMIME_transformation_options_note = '����� ������� �������� ����� ������������ � ������ ������: \'a\', 100, b,\'c\'...<br />���� ��������� ������ ��������� ���� ("\") �� �������� ����� ("\'") � ��� ���������, �������� ����� ���� ���������� ��������� ���� (��������� \'\\\\xyz\' �� \'a\\\'b\').';
$strMIME_without = 'MIME-types ������ �������� �� ����� ������� ������� ������������';
$strModifications = '����������� ���� ���������';
$strModify = '������';
$strModifyIndexTopic = '������ ������';
$strMoveTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMoveTableSameNames = '�� ���� ��������� ������� ���� � ����!';
$strMultilingual = '�����������';
$strMySQLCharset = 'MySQL Charset';
$strMySQLSaid = '³������ MySQL: ';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� �������� ����� MySQL';

$strName = '�����';
$strNext = '������';
$strNo = 'ͳ';
$strNoDatabases = '�� �������';
$strNoDatabasesSelected = '�� ������� ���� �����.';
$strNoDescription = '��� �����';
$strNoDropDatabases = '��������� "DROP DATABASE" ����������.';
$strNoExplain = '�� ��������� SQL';
$strNoFrames = '��� ������ phpMyAdmin ������� ������� � ��������� <b>������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '�� ��������� ������� �������!';
$strNoModification = '��� ����';
$strNone = '����';
$strNoOptions = '��� ������ �� �� �����';
$strNoPassword = '��� ������';
$strNoPermission = '���-������ �� �� ������� ��� ���������� ����� %s.';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '��� �������';
$strNoRights = '�� ��� ����� ���� ����������� ����!';
$strNoSpace = '����� ���� ��� ���������� ����� %s.';
$strNoTablesFound = '� �� �� �������� �������.';
$strNotNumber = '�� �� �����!';
$strNotOK = '�� OK';
$strNotSet = '������� <b>%s</b> �� �������� ��� �� ��������� � %s';
$strNoUsersFound = '�� �������� �����������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNull = '����';
$strNumSearchResultsInTable = '%s ��������� � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������';
$strNumTables = '�������';

$strOK = 'OK';
$strOperations = '��������';
$strOptimizeTable = '����������� �������';
$strOr = '���';
$strOverhead = '������� �������';
$strOverwriteExisting = '������� ������� �����';

$strPageNumber = '����� �������:';
$strPaperSize = '������ ������';
$strPartialText = '������� ������';
$strPassword = '������';
$strPasswordChanged = '������ ��� %s ������ ������.';
$strPasswordEmpty = '�������� ������!';
$strPasswordNotSame = '����� �� �������!';
$strPdfDbSchema = '����� ���� ����� "%s" - ������� %s';
$strPdfInvalidTblName = '������� "%s" �� ����!';
$strPdfNoTables = '������� ����';
$strPerHour = '�� ������';
$strPerMinute = '�� �������';
$strPerSecond = '�� �������';
$strPhoneBook = '��������� �����';
$strPHP40203 = '�� ������������� ����� PHP 4.2.3, ��� �� �������� ������� ��� ����� � multi-byte strings (mbstring). ��� PHP bug report 19404. �� ����� PHP �� ������������� ��������������� � phpMyAdmin.';
$strPhp = '�������� PHP ���';
$strPHPVersion = '����� PHP';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '����� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������� ���� ����������� � ������ ���������������� ����!';
$strPortrait = 'Portrait';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKeyHasBeenDropped = '��������� ���� ���� �������';
$strPrimaryKeyName = '��\'� ���������� ����� ������� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�������</b> ���� ������ <b>����</b> ���������� �����!)';
$strPrint = '����';
$strPrintView = '����� ��� �����';
$strPrivDescAllPrivileges = '��������� �� ����� �� �������� GRANT.';
$strPrivDescAlter = '��������� �������� ��������� ������� �������.';
$strPrivDescCreateDb = '��������� ���������� ��� ���� ����� �� �������.';
$strPrivDescCreateTbl = '��������� ���������� ��� �������.';
$strPrivDescCreateTmpTable = '��������� ���������� �������� �������.';
$strPrivDescDelete = '��������� ��������� ���� � �������.';
$strPrivDescDropDb = '��������� ��������� ���� ����� �� �������.';
$strPrivDescDropTbl = '��������� ��������� �������.';
$strPrivDescExecute = '��������� ��������� ���������� ��������; ����������� ��� ���� ���� MySQL.';
$strPrivDescFile = '��������� ������ ����� � �����, �� ������� � �����.';
$strPrivDescGrant = '��������� ��������� ������������ �� ���� ��� ���������������� ������� ����.';
$strPrivDescIndex = '��������� ��������� �� �������� �������.';
$strPrivDescInsert = '��������� ������� �� ����� �����.';
$strPrivDescLockTables = '��������� ���������� ������� ��� ������ ������.';
$strPrivDescMaxConnections = '�������� ������� ����� ��\'������, �� ���������� ���� ���������� �������� ������.';
$strPrivDescMaxQuestions = '�������� ������� ������, �� ���������� ���� �������� ������� �������� ������.';
$strPrivDescMaxUpdates = '�������� ������� ������, �� ������� ���� �� ����-��� ������� �� ���� �����, �� ���������� ���� �������� �������� ������.';
$strPrivDescProcess3 = '��������� ��������� ������� ����� ������������.';
$strPrivDescProcess4 = '��������� �������� ������ ������ � ������ �������.';
$strPrivDescReferences = '����������� ��� ���� ���� MySQL.';
$strPrivDescReload = '��������� ���������������� ��������� �� �������� ���� �������.';
$strPrivDescReplClient = '������ ����������� ����� ���������� �� � slaves / masters.';
$strPrivDescReplSlave = '��������� ��� ��������� slaves.';
$strPrivDescSelect = '��������� ������� �����.';
$strPrivDescShowDb = '������ ������ �� ������� ������ ��� �����.';
$strPrivDescShutdown = '��������� ��������� �������.';
$strPrivDescSuper = '��������� ��\'�������, ����� ���� ��������� ����������� ������� ��\'������; ����\'������ ��� ������� ��������������� �������� ����� �� ������������ ���������� ������ �� ���������� ������� ����� ������������.';
$strPrivDescUpdate = '��������� ���� �����.';
$strPrivDescUsage = '���� ����.';
$strPrivileges = '������';
$strPrivilegesReloaded = '����� ������ ���������������.';
$strProcesses = '�������';
$strProcesslist = '������ �������';
$strPutColNames = '���� ����� ���� � ������� �����';

$strQBE = '����� ����� ��������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryFrame = '³��� ������';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>���������� ������</b>: � ������� �������, �� ������� ���� �������� %s ������.';
$strQueryTime = '����� ����������� %01.4f ���';
$strQueryType = '��� ������';
$strQueryWindowLock = '�� ����������� ��� ����� � ����� �����';

$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '������ ��������� ����� �� ���� ��������:';
$strRelationalSchema = '����� ��\'����';
$strRelationNotWorking = '��������� ��������� ������ �� ������������ ��������� ������������. ��� ����, ��� ��������� ����, ��������� %s���%s.';
$strRelations = '��\'����';
$strRelationView = '�������� �����������';
$strReloadingThePrivileges = '���������������� ����';
$strRemoveSelectedUsers = '������� �������� ������������';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '����������� �������';
$strReplaceNULLBy = '������� NULL ��';
$strReplaceTable = '������� ���� ������� ������ � �����';
$strReset = '��������������';
$strResourceLimits = '��������� �������';
$strReType = 'ϳ�����������';
$strRevoke = '³������';
$strRevokeAndDelete = '³������ �� ������� ����� ������������ �� ������� �� ���� �����.';
$strRevokeAndDeleteDescr = '����������� ��� �� ������ ���� ����� ������������ (USAGE) �� ��� ��, ���� �� ������ ��������������� �����.';
$strRevokeMessage = '�� ������ ������ ��� %s';
$strRowLength = '������� �����';
$strRows = '�����';
$strRowsFrom = '����� �';
$strRowSize = ' ����� ����� ';
$strRowsModeFlippedHorizontal = '������������� (rotated headers)';
$strRowsModeHorizontal = ' ������������� ';
$strRowsModeOptions = '-�� %s � ��������� ��������� ����� ����� %s ����� ';
$strRowsModeVertical = ' ����������� ';
$strRowsStatistic = '���������� �����';
$strRunning = '�� %s';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL �����(�) �� �� %�';
$strRussian = '��������';

$strSave = '��������';
$strSaveOnServer = '�������� �� ������ � �������� %s ';
$strScaleFactorSmall = '������� ����� ������� ��� ����� ������� ���� �������';
$strSearch = '������';
$strSearchFormTitle = '������ � ��� �����';
$strSearchInTables = '��������� �������:';
$strSearchNeedle = '����� �� ��������, �� ������� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � ���';
$strSearchOption2 = '�� �����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���������� �����';
$strSearchResultsFor = '���������� ������ "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSecretRequired = '��������������� ���� ������� �������� ����� (������).';
$strSelectADb = '����� ������� ��';
$strSelectAll = '³������ ���';
$strSelectFields = '������� ���� (���������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '������� �������';
$strSend = '³������';
$strSent = '³���������';
$strServer = '������';
$strServerChoice = '���� �������';
$strServerStatus = '���������� ��� ������ �������';
$strServerStatusUptime = '��� MySQL ������ ������ %s. ��������� %s.';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>������ �������</b>: ������� ��������� ���������� ������������ ����� ��� MySQL �������� � ������� ���� �������.';
$strServerVars = '����� ������� �� ������������';
$strServerVersion = '����� �������';
$strSessionValue = '�������� ���';
$strSetEnumVal = '��� ���� ���� "enum" �� "set", ������ �������� ����� ������ �������: \'a\',\'b\',\'c\'...<br />���� ��� ���� ������� ������ �������� ���� ����� ("\"") ��� �������� ����� ("\'") ������� ��� �������, �������� ����� ���� �������� ���� ����� (���������, \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowDatadictAs = '������ ��������';
$strShowFullQueries = '�������� ����� ������';
$strShowGrid = '�������� ����';
$strShowingRecords = '�������� ������ ';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowTableDimension = '�������� ������ �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ����� ����� ����� ';
$strSimplifiedChinese = '��������� ��������';
$strSingly = '(������)';
$strSize = '�����';
$strSort = '�����������';
$strSpaceUsage = '������, �� ���������������';
$strSplitWordsWithSpace = '����� �������� ������� (" ").';
$strSQLParserBugMessage = '������� �� ������� ������� � ������ SQL. ����� ���������� ��������� �� �������� ���� � �� ��������� ����� � ������ �����. ����� �������� �������� ������� ���� ���� �� �� �� ����������� ���� � ��������� ������ ���������� ���� ������ � ����� �������. ��������� �������� ��� ����� �� ��������� �������� MySQL � �������� ������. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������. ���� � ��� ��� �� ��������� �������� �� ������ ���� �������, � � �������� ������ ������ �����������, ����� ��������� ��� ������ SQL ����� �� ������ ������, ���� ������ � ������� ��������, � ������ ����������� ��� ������� � ������� ����� � ����� CUT �����:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������.';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL result';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '����������� �������������';
$strSQPBugUnclosedQuote = '�� ������ �����';
$strSQPBugUnknownPunctuation = '�������� ������ ����������';
$strStatCheckTime = '���������';
$strStatCreateTime = '��������';
$strStatement = '��������';
$strStatUpdateTime = '���������';
$strStatus = '������';
$strStrucCSV = 'CSV ����';
$strStrucData = '��������� � ����';
$strStrucExcelCSV = 'CSV ��� ����� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '������������� ��������� �������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ���� ������ ��������';
$strSum = '������';
$strSwedish = '��������';
$strSwitchToTable = '������� �� ���������� �������';

$strTable = '������� ';
$strTableComments = '�������� �� �������';
$strTableEmpty = '������� ����� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '���� ������� ��� ������� %s';
$strTableMaintenance = '������������� �������';
$strTableOfContents = '����';
$strTableOptions = '������������ �������';
$strTables = '%s ������(�)';
$strTableStructure = '��������� �������';
$strTblPrivileges = '�����, �� ���������� �������';
$strTextAreaLength = ' ����� ������ �������,<br /> �� ���� �� ���� ���� ������������ ';
$strThai = '�������';
$strThisHost = '��� ����';
$strThreadSuccessfullyKilled = '������ %s ���������.';
$strTime = '���';
$strToggleScratchboard = '�������� �������� (scratchboard)';
$strTotal = '������';
$strTotalUC = '�����';
$strTraditionalChinese = '��������� ����������';
$strTraffic = '������';
$strTransformation_image_jpeg__inline = '³������� clickable thumbnail; �����: ������, ������ � ������� (������ �������� ���������)';
$strTransformation_image_jpeg__link = '³������� ��� �� ����� ������� (direct blob download, i.e.).';
$strTransformation_image_png__inline = '���. image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX ONLY: ������� �������� �������� � ���� ���� ����� ����������� ���. ������� ����������� ���� ��������. �� ������������� ��������� � Tidy, ��� ����� ����� HTML ���. � �������� �������, ��� ������� ��������� ������������ ���� libraries/transformations/text_plain__external.inc.php �� ������� �������� ��������� ��� �������. � ������ �������, ����� ����� - ������� �������, �� �� ������ ��������������� � ����� - ��������� ��� �������. ����� �����, ����������� � 1, ���� ����������� ���� �������������� htmlspecialchars() (�� �������������: 1). �������� �����, ����������� � 1, ���� �������� NOWRAP �� ����� ������ ��������, ��� �� ���� ���� ���� �������� ��� ���������������� (�� �������������: 1)';
$strTransformation_text_plain__formatted = '������ ��������� ������������ ����. �� ��������� �����������.';
$strTransformation_text_plain__imagelink = '������ ������� � ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� - ������ � �������, ����� - ������.';
$strTransformation_text_plain__link = '������ ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� ����� - title ��� ����.';
$strTransformation_text_plain__substr = '������ ���� ������� ������. ����� ����� - �� ������ ���� ������� � ����� ���� ������� �������� ���� ������ (�� �������������: 0). ����� ����� - ������� ������ ������ ���� ��������. ���� ���� ������� - ���������� ����� ������ ������. ����� ����� - ������� �� ������� ���� ������ ���� ���������� ���������� �������� (�� �������������: ...) .';
$strTruncateQueries = '������� �������� ������';
$strTurkish = '��������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '����� �� ������';
$strUnicode = '������';
$strUnique = '���������';
$strUnknown = '�������';
$strUnselectAll = '����� �� ������';
$strUpdatePrivMessage = '���� ������ ������ ���';
$strUpdateProfileMessage = '������� ���� ���������.';
$strUpdateQuery = '��������� �����';
$strUpdComTab = '�� ����������� �� �������� ���� ������� Column_comments ����� �������� � ������������';
$strUsage = '������������';
$strUseBackquotes = '�������� ����� � ������ ������� � ����';
$strUseHostTable = '��������������� ������� �����';
$strUser = '����������';
$strUserAlreadyExists = '���������� %s ��� ����!';
$strUserEmpty = '������� �\'�� �����������!';
$strUserName = '��\'� �����������';
$strUserNotFound = '��������� ����������� �� �������� � ������� ����.';
$strUserOverview = '����� ������������';
$strUsersDeleted = '³������� ������������ ������ �������.';
$strUsersHavingAccessToDb = '�����������, ���� ����� ������ �� &quot;%s&quot;';
$strUseTables = '��������������� �������';
$strUseTextField = '��������������� �������� ����';

$strValidateSQL = '��������� SQL';
$strValidatorError = '�� ���� ��������� �������� SQL. ����� ��������������� �� ������������� ��������� php extensions �� ������� � %s������������%s.';
$strValue = '��������';
$strVar = '�����';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDatabases = '����������� dump (�����) ��� �����';
$strViewDumpDB = '����������� ���� (�����) ��';

$strWebServerUploadDirectoryError = '������������ ���� ������� ��� ������������ ����� �����������';
$strWebServerUploadDirectory = '������� ���-������� ��� ������������ ����� (upload directory)';
$strWelcome = '������� ������� �� %s';
$strWestEuropean = '������� �����������';
$strWildcard = '������';
$strWithChecked = '� ���������:';
$strWrongUser = '������� ����/������. ������ �� ���������.';

$strXML = 'XML';

$strYes = '���';

$strZeroRemovesTheLimit = '�������: ������������ ���� ����� � 0 (����) ����� ���������.';
$strZip = '���������� � "zip"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
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
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
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
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCSV = 'CSV';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
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
$strExcelEdition = 'Excel edition';  //to translate

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
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
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
$strLatexCaption = 'Table caption';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLogServer = 'Server';  //to translate
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
$strPrintViewFull = 'Print view (with full texts)';  //to translate
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
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
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
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strUseThisValue = 'Use this value';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
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
