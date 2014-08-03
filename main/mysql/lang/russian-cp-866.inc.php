<?php
/* $Id: russian-cp-866.inc.php 11161 2008-03-09 14:12:30Z lem9 $ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 */

$charset = 'cp-866';
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';

// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
// �� ���� 8.417-2002
$byteUnits = array('����', '��', '��', '��', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '��', '��', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';
$timespanfmt = '%s ����, %s �ᮢ, %s ����� � %s ᥪ㭤';

$strAbortedClients = '��ࢠ��';
$strAccessDenied = '� ����㯥 �⪠����';
$strAccessDeniedCreateConfig = '��������� ��稭� - ������⢨� 䠩�� ���䨣��樨. ��� ��� ᮧ����� �� ����� ��ᯮ�짮������ %1$s�業�ਥ� ��⠭����%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin �� ᬮ� ��⠭����� ᮥ������� � �ࢥ஬ MySQL. �஢���� ���, ��� ���짮��⥫� � ��஫� ��⠭������� � ���䨣��樮���� 䠩�� config.inc.php � 㤮�⮢������, �� ��� ᮮ⢥������ ����� ����祭�� �� ����������� �ࢥ� MySQL.';
$strAction = '����⢨�';
$strAddAutoIncrement = '�������� AUTO_INCREMENT';
$strAddClause = '�������� %s';
$strAddConstraints = '�������� ��࠭�祭��';
$strAddDeleteColumn = '��������/㤠���� �⮫��� �����';
$strAddDeleteRow = '��������/㤠���� �� �����';
$strAddFields = '�������� %s ����(�)';
$strAddHeaderComment = '�������� ᮡ�⢥��� �������਩ � ��������� (��ॢ�� ��ப�: \\n)';
$strAddIntoComments = '�������� � �������ਨ';
$strAddNewField = '�������� ����� ����';
$strAddPrivilegesOnDb = '�������� �ਢ������ �� ᫥������ ����';
$strAddPrivilegesOnTbl = ' �������� �ਢ������ �� ᫥������ ⠡����';
$strAddSearchConditions = '�������� �᫮��� ���᪠ (⥫� ��� �᫮��� "WHERE"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;�⮫���(�)';
$strAddUser = '�������� ������ ���짮��⥫�';
$strAddUserMessage = '�� �������� ���� ���짮��⥫�.';
$strAdministration = '���������஢����';
$strAffectedRows = '���஭�� ��ப:';
$strAfter = '��᫥ %s';
$strAfterInsertBack = '�������� �� �।����� ��࠭���';
$strAfterInsertNewInsert = '�������� ����� ������';
$strAfterInsertNext = '������஢��� ᫥������ ��ப�';
$strAfterInsertSame = '�������� � ������ ��࠭��';
$strAll = '��';
$strAllowInterrupt = '������� �ਯ�� ࠧ������ ����� ������ �� �ਡ������� �६������ �����. ����� ���� �ᯮ�짮���� �� ������ 䠩��� ����讣� ࠧ���.';
$strAllTableSameWidth = '�������� �� ⠡���� ���������� �ਭ�';
$strAlterOrderBy = '�������� ���஢�� ⠡����';
$strAnalyzeTable = '������ ⠡����';
$strAnd = '�';
$strAndThen = '� ��⥬';
$strAngularLinks = '������ ����� �痢�';
$strAnIndex = '�� �������� ������ ��� %s';
$strAny = '��';
$strAnyHost = '�� ���';
$strAnyUser = '�� ���짮��⥫�';
$strApproximateCount = '����� ���� �ਡ����⥫쭮. ��. FAQ 3.11';
$strAPrimaryKey = '�� �������� ��ࢨ�� ���� � %s';
$strArabic = '�ࠡ᪨�';
$strArmenian = '���᪨�';
$strAscending = '�� �����⠭��';
$strAtBeginningOfTable = '� ��砫� ⠡����';
$strAtEndOfTable = '� ����� ⠡����';
$strAttr = '��ਡ���';
$strAutomaticLayout = '��⮬���᪠� �᪫����';

$strBack = '�����';
$strBaltic = '���⨩᪨�';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = '������';
$strBinaryDoNotEdit = '������ ����� - �� ।���������';
$strBinaryLog = '������ ��ୠ�';
$strBinLogEventType = '��� ᮡ���';
$strBinLogInfo = '���ଠ��';
$strBinLogName = '���� ��ୠ��';
$strBinLogOriginalPosition = '��室��� ������';
$strBinLogPosition = '������';
$strBinLogServerId = 'ID �ࢥ�';
$strBookmarkAllUsers = '����㯭� ��� ��� ���짮��⥫��';
$strBookmarkCreated = '�������� &quot;%s&quot; ᮧ����';
$strBookmarkDeleted = '�������� 㤠����.';
$strBookmarkLabel = '��⪠';
$strBookmarkQuery = '�������� ��������';
$strBookmarkReplace = '�������� ���������� � ⠪�� �� ������';
$strBookmarkThis = '�������� ��������';
$strBookmarkView = '��ᬮ��';
$strBrowse = '�����';
$strBrowseDistinctValues = '����� 㭨������ ���祭��';
$strBrowseForeignValues = '����� ���譨� ���祭��';
$strBufferPoolActivity = '��⨢�����';
$strBufferPool = '����� ��';
$strBufferPoolUsage = '�ᯮ�짮�����';
$strBufferReadMissesInPercent = '�ய�᪨ �� �⥭��, � %';
$strBufferReadMisses = '�ய�᪨ �� �⥭��';
$strBufferWriteWaitsInPercent = '�������� ���⪨, � %';
$strBufferWriteWaits = '�������� ���⪨';
$strBulgarian = '������᪨�';
$strBusyPages = '������� ��࠭��';
$strBzError = 'phpMyAdmin �� ����� ᦠ�� ���� ��-�� �஡��� � �c�७��� Bz2 � ⥪�饩 ���ᨨ PHP. ��ண� ४��������� ��⠭����� ��६����� <code>$cfg[\'BZipDump\']</code> � ��襬 ���䨣��樮���� 䠩�� phpMyAdmin ���祭�� <code>FALSE</code>. �᫨ �� ��� �ᯮ�짮���� ᦠ⨥ Bz2, ����室��� �������� PHP. ������ ���� �� �訡��� PHP %s ��� ����� ���஡��� ���ଠ樨.';
$strBzip = 'bzip';

$strCalendar = '���������';
$strCancel = '�⬥��';
$strCanNotLoadExportPlugins = '���㫨 ��ᯮ��, ����������! �஢���� ᮤ�ন��� ��⠫��� libraries/export ��⠭�������� ����� phpMyAdmin.';
$strCanNotLoadImportPlugins = '���㫨 ������ - ����������! �஢���� ᮤ�ন��� ��⠫��� libraries/import ��⠭�������� ����� phpMyAdmin.';
$strCannotLogin = '���������� ����������� � �ࢥ�� MySQL';
$strCantLoad = '���������� ����㧨�� ���७�� [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a]! �஢���� ����ன�� PHP.';
$strCantLoadRecodeIconv = '�� ������祭� ���७�� iconv ��� recode, ����室��� ��� �������樨 ����஢��. ����室��� ����ந�� PHP, ����稢 ����� ���७��, ��� �⪫���� ����������� �������樨 ����஢�� � ����ன��� phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ��२�������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '��ᬮ��� �� � �� ����室��� ���७�� ����㦥��, �ᯮ�짮����� �㭪権 iconv, libiconv ��� recode_string - ����������. �஢���� ����ன�� PHP.';
$strCardinality = '��������� ������⮢';
$strCaseInsensitive = 'ॣ���஭�����ᨬ�';
$strCaseSensitive = 'ॣ���஧������';
$strCentralEuropean = '����ࠫ쭮-��ய��᪨�';
$strChange = '��������';
$strChangeCopyMode = '������� ������ ���짮��⥫� � ⠪��� �� �ਢ�����ﬨ...';
$strChangeCopyModeCopy = '� ��࠭��� ��ண�.';
$strChangeCopyModeDeleteAndReload = ', 㤠���� ��ண� �� ⠡��� ���짮��⥫�� � ��१���㧨�� �ਢ������.';
$strChangeCopyModeJustDelete = '� 㤠���� ��ண� �� ⠡��� ���짮��⥫��.';
$strChangeCopyModeRevoke = ', �⬥���� �� ��⨢�� �ਢ������ ��ண� � ��⥬ 㤠���� ���.';
$strChangeCopyUser = '��������/����஢��� ����� ������';
$strChangeDisplay = '�롮� �⮡ࠦ������ �⮫��';
$strChangePassword = '�������� ��஫�';
$strCharset = '����஢��';
$strCharsetOfFile = '����஢�� 䠩��:';
$strCharsets = '����஢��';
$strCharsetsAndCollations = '����஢�� � �ࠢ�����';
$strCheckAll = '�⬥��� ��';
$strCheckOverhead = '�⬥��� �ॡ��騥 ��⨬���樨';
$strCheckPrivs = '�஢���� �ਢ������';
$strCheckPrivsLong = '�஢���� �ਢ������ ��� ���� ������ &quot;%s&quot;';
$strCheckTable = '�஢���� ⠡����';
$strChoosePage = '�롮� ��࠭��� ��� ।���஢����';
$strColComFeat = '�⮡ࠦ��� �������ਨ �⮫�殢';
$strCollation = '�ࠢ�����';
$strColumnNames = '�������� �⮫�殢';
$strColumnPrivileges = '�ਢ������ �஢�� �⮫��';
$strCommand = '�������';
$strComments = '�������ਨ';
$strCommentsForTable = '�������ਨ � ⠡���';
$strCompatibleHashing = 'MySQL&nbsp;4.0 ᮢ���⨬�';
$strCompleteInserts = '������ ��⠢��';
$strCompression = '���������';
$strCompressionWillBeDetected = '��⮬���᪮� ��।������ ⨯� ᦠ��, ��ਠ���: %s';
$strConfigDefaultFileError = '���������� ����㧨�� ����砫��� ���䨣���� ��: &quot;%1$s&quot;';
$strConfigFileError = 'phpMyAdmin �� ᬮ� ������ ���䨣��樮��� 䠩�!<br />�� ����� ������� �᫨ PHP ��襫 � ��� �訡��, ��� 䠩� �� ������.<br />�맮��� ���䨣��樮��� 䠩� �������, �ᯮ���� ��뫪� ������ ����, � ��ᬮ��� ᮮ�饭�� �� �訡��� �뤠����� PHP. � ����設�⢥ ��砥�, �������� ᨭ⠪��᪠� �訡��, ���ਬ��, ���-� �ய�饭� ����窠 ��� �窠 � ����⮩.<br />�᫨ �⮡ࠧ���� ����� ��࠭�� - �� � ���浪�.';
$strConfigureTableCoord = '������� ���न���� ⠡���� %s';
$strConnectionError = '���������� ����������! ������ ����ன��.';
$strConnections = '����������';
$strConstraintsForDumped = '��࠭�祭�� ���譥�� ���� ��࠭����� ⠡���';
$strConstraintsForTable = '��࠭�祭�� ���譥�� ���� ⠡����';
$strControluserFailed = '�� 㤠���� ��⠭����� ������祭�� ��� ���짮��⥫� 㪠������� � ��४⨢� controluser, � ������� ��ࠬ��஢ ��।������� � ���䨣��樮���� 䠩�� config.inc.php.';
$strCookiesRequired = '��� �����業��� ࠡ��� ����室��� �����প� cookies ��㧥஬.';
$strCopy = '�ᯮ�짮����';
$strCopyDatabaseOK = '���� ������ %s �뫠 ᪮��஢��� � %s';
$strCopyTable = '�����஢��� ⠡���� � (���� ������<b>.</b>⠡���):';
$strCopyTableOK = '������ %s �뫠 ᪮��஢��� � %s.';
$strCopyTableSameNames = '���������� ᪮��஢��� ⠡���� ᠬ� � ᥡ�!';
$strCouldNotKill = 'phpMyAdmin �� ᬮ� �������� ࠡ��� ��⮪� � ID %s. ����⭮, �� 㦥 �� ������.';
$strCreate = '�������';
$strCreateDatabaseBeforeCopying = '��। ����஢����� ᮧ���� ���� ������ (CREATE DATABASE)';
$strCreateIndex = '������� ������ ��� &nbsp;%s&nbsp; �⮫��/��';
$strCreateIndexTopic = '������� ���� ������';
$strCreateNewDatabase = '����� ���� ������';
$strCreateNewTable = '������� ����� ⠡���� � ���� ������ %s';
$strCreatePage = '������� ����� ��࠭���';
$strCreatePdfFeat = '�������� PDF-�奬�';
$strCreateRelation = '������� ���';
$strCreateTable  = '������� ⠡����';
$strCreateUserDatabase = '���� ������ ��� ���짮��⥫�';
$strCreateUserDatabaseName = '������� ���� ������ � ������ ���짮��⥫� � �������� � �।��⠢��� �� ��� ����� �ਢ������';
$strCreateUserDatabaseNone = '�� ᮧ������';
$strCreateUserDatabaseWildcard = '�।��⠢��� ����� �ਢ������ �� ���� ������ ��������騥 ��� 蠡��� (��� ���짮��⥫�\_%)';
$strCreationDates = '���� ᮧ�����, ���������� � �஢�ન';
$strCriteria = '���਩';
$strCroatian = '��ࢠ�᪨�';
$strCSV = 'CSV';
$strCyrillic = '��ਫ���᪨�';
$strCzech = '���᪨�';
$strCzechSlovak = '���᫮��檨�';

$strDanish = '���᪨�';
$strData = '�����';
$strDatabase = '���� ������';
$strDatabaseEmpty = '�� 㪠���� ��� ���� ������!';
$strDatabaseExportOptions = '��ࠬ���� ��ᯮ�� ���� ������';
$strDatabaseHasBeenDropped = '���� ������ %s �뫠 㤠����.';
$strDatabases = '���� ������';
$strDatabasesDropped = '������� ��� ������: %s';
$strDatabasesStats = '����⨪� ��� ������';
$strDatabasesStatsDisable = '�⪫���� ����⨪�';
$strDatabasesStatsEnable = '������� ����⨪�';
$strDatabasesStatsHeavyTraffic = '�ਬ�砭��: ����祭�� ����⨪� ��� ������ ����� �஢��஢��� ����让 ��䨪 ����� ���-�ࢥ஬ � �ࢥ஬ MySQL.';
$strDataDict = '������� ������';
$strDataOnly = '���쪮 �����';
$strDataPages = '��࠭�� � ����묨';
$strDBComment = '�������਩ � ���� ������:';
$strDBCopy = '�����஢��� ���� ������ �';
$strDbIsEmpty = '���� ������ - ����!';
$strDbPrivileges = '�ਢ������ �஢�� ���� ������';
$strDBRename = '��२�������� ���� ������ �';
$strDbSpecific = '�஢��� ���� ������';
$strDefault = '�� 㬮�砭��';
$strDefaultEngine = '%s - ⨯ ⠡��� ������� MySQL �ࢥ� ��⠭��������� �� 㬮�砭��.';
$strDefaultValueHelp = '��� ���祭�� ���� "�� 㬮�砭��" �� �ᯮ���� ᨬ���� ��࠭�஢���� � ����祪.';
$strDefragment = '���ࠣ����஢��� ⠡����';
$strDelayedInserts = '�ᯮ�짮���� �⫮����� ��⠢�� (DELAYED)';
$strDelete = '�������';
$strDeleteAndFlush = '������� ��� ���짮��⥫�� � ��१���㧨�� �ਢ������.';
$strDeleteAndFlushDescr = '�� ���訩 ᯮᮡ, ��� ��१���㧪� �ਢ������ ����� ������ �����-� �६�.';
$strDeleted = '������ �뫠 㤠����';
$strDeletedRows = '������� ��ப:';
$strDeleteNoUsersSelected = '�� ��࠭� ���짮��⥫� �������騥 㤠�����!';
$strDeleteRelation = '������� ���';
$strDeleting = '�������� %s';
$strDelimiter = '�������⥫�';
$strDelOld = '�� ⥪�饩 ��࠭�� ���������� ��뫪� �� ⠡����, ����� ����� �� ��������. ������� �� ��뫪�?';
$strDescending = '�� �뢠���';
$strDescription = '���ᠭ��';
$strDesigner = '��������';
$strDesignerHelpDisplayField = '��� ⮣� �⮡� ᤥ���� �⮫��� �⮡ࠦ����, ������ ������ "�롮� �⮡ࠦ������ �⮫��" � �롥�� ����室��� �⮫���. �⮡ࠦ���� �⮫��� ���ᢥ稢����� ஧��� 梥⮬.';
$strDictionary = '᫮����';
$strDirectLinks = '���� ����� �痢�';
$strDirtyPages = '��吝�� ��࠭��';
$strDisabled = '������㯭�';
$strDisableForeignChecks = '�⪫���� �஢��� ���譨� ���祩';
$strDisplayFeat = '�������� ����������';
$strDisplayOrder = '����஢��:';
$strDisplayPDF = '�������� PDF-�奬�';
$strDoAQuery = '�믮����� "����� �� ��ࠧ��" (��㯯���� ᨬ���: "%")';
$strDocSQL = 'DocSQL';
$strDocu = '���㬥����';
$strDoYouReally = '�� ����⢨⥫쭮 ��� �믮����� �����';
$strDrop = '�������';
$strDropDatabaseStrongWarning = '���� ������ �㤥� ��������� 㤠����!';
$strDropUsersDb = '������� ���� ������, ����� ������ ᮢ������ � ������� ���짮��⥫��.';
$strDumpingData = '���� ������ ⠡����';
$strDumpSaved = '���� �� ��࠭�� � 䠩� %s.';
$strDumpXRows = '���� �� %s ��ப, ��稭�� � ����� # %s.';
$strDynamic = '�������᪨�';

$strEdit = '��������';
$strEditPDFPages = '������஢���� PDF-��࠭��';
$strEditPrivileges = '������஢���� �ਢ������';
$strEffective = '��䥪⨢�����';
$strEmpty = '������';
$strEmptyResultSet = 'MySQL ���㫠 ���⮩ १���� (�.�. ���� ��ப).';
$strEnabled = '����㯭�';
$strEncloseInTransaction = '�������� ��ᯮ�� � �࠭�����';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEngineAvailable = '����� MySQL-�ࢥ� �����ন���� ⠡���� ⨯� %s.';
$strEngineDisabled = '��� ⠡��� %s �� �⪫�祭 �� ������ MySQL �ࢥ�.';
$strEngines = '���� ⠡���';
$strEngineUnsupported = '����� �ࢥ� MySQL �� �����ন���� ⨯ ⠡��� %s.';
$strEnglish = '������᪨�';
$strEnglishPrivileges = '�ਬ�砭��: ⨯� �ਢ������ MySQL �⮡ࠦ����� ��-������᪨.';
$strError = '�訡��';
$strErrorInZipFile = '�訡�� � ZIP-��娢�:';
$strErrorRelationAdded = '�訡��: ���� �� ���������.';
$strErrorRelationExists = '�訡��: ���� 㦥 �������.';
$strErrorRenamingTable = '�訡�� �� ��२��������� ⠡���� %1$s � %2$s';
$strErrorSaveTable = '�訡�� ��࠭���� ���न���.';
$strEscapeWildcards = '�� �ᯮ�짮����� � ����� ���� ������ ᨬ����� ������� ����ન����� (_) � ��業� (%), ����室��� ��࠭�஢��� �� ᨬ����� ���⭮� ��ᮩ ���� (\), � ��⨢��� ��砥 ��� ���� ������஢��� ��� ��㯯��� ᨬ����';
$strEsperanto = '�ᯥ࠭�';
$strEstonian = '��⮭᪨�';
$strEvent = '����⨥';
$strExcelEdition = 'Excel-�����';
$strExecuteBookmarked = '�믮����� �⬥祭�� �����';
$strExplain = '������ �����';
$strExport = '��ᯮ��';
$strExportImportToScale = '����⠡';
$strExportMustBeFile = '��࠭�� ⨯ ��ᯮ�� �������� ⮫쪮 � 䠩�!';
$strExtendedInserts = '����७�� ��⠢��';
$strExtra = '�������⥫쭮';

$strFailedAttempts = '��㤠��� ����⮪';
$strField = '����';
$strFieldHasBeenDropped = '���� &quot;%s&quot; �뫮 㤠����';
$strFields = '����';
$strFieldInsertFromFileTempDirNotExists = '�訡�� �� ��६�饭�� ����㦥����� 䠩��, �. FAQ 1.11';
$strFieldsEnclosedBy = '���祭�� ����� ��ࠬ����';
$strFieldsEscapedBy = '������ ��࠭�஢����';
$strFieldsTerminatedBy = '�������⥫� �����';
$strFileAlreadyExists = '���� %s 㦥 ������� �� �ࢥ�, ������� ��� ��� ������ ��ࠬ��� ��१����.';
$strFileCouldNotBeRead = '�訡�� �� �⥭�� 䠩��';
$strFileNameTemplate = '������ ����� 䠩��';
$strFileNameTemplateDescriptionDatabase = '��� ���� ������';
$strFileNameTemplateDescriptionServer = '��� �ࢥ�';
$strFileNameTemplateDescriptionTable = '��� ⠡����';
$strFileNameTemplateDescription = '���祭�� ��ࠡ��뢠���� �㭪樥� %1$sstrftime%2$s, ��������� 祬� �������� ��⠢�� ⥪�饩 ���� � �६���. �������⥫쭮 ����� ���� �ᯮ�짮���� ᫥���騥 ����⠭����: %3$s. ��⠫쭮� ⥪�� ��⠭���� ��� ���������.';
$strFileNameTemplateRemember = '��������� 蠡���';
$strFiles = '������';
$strFileToImport = '�������㥬� 䠩�';
$strFixed = '䨪�஢����';
$strFlushPrivilegesNote = '�ਬ�砭��: phpMyAdmin ����砥� ���ଠ�� � ���짮��⥫�᪨� �ਢ������� �����।�⢥��� �� ⠡��� �ਢ������ MySQL. ����ন��� ��� ⠡��� ����� �⫨����� �� �ਢ������, �ᯮ��㥬�� �ࢥ஬, �᫨ ��� �뫨 �������� ������. � ⠪�� ��砥 ����室��� %s��१���㧨�� �ਢ������%s.';
$strFlushQueryCache = '���ࠣ����஢��� ��� ����ᮢ';
$strFlushTable = '�������� ��� ⠡���� (&quot;FLUSH&quot;)';
$strFlushTables = '������� �� ⠡����';
$strFontSize = '������ ����';
$strForeignKeyError = '�訡�� �� ᮧ����� ���譥�� ���� (�஢���� ⨯� ������)';
$strFormat = '��ଠ�';
$strFormEmpty = '�� ��������� ����室��� ���� ���!';
$strFreePages = '������ ��࠭��';
$strFullText = '�������⮥ �⮡ࠦ���� ������';
$strFunction = '�㭪��';
$strFunctions = '�㭪樨';

$strGenBy = '������';
$strGeneralRelationFeat = '�᭮��� ���������� �痢�';
$strGenerate = '�����஢���';
$strGeneratePassword = '������� ��஫�';
$strGenTime = '�६� ᮧ�����';
$strGeorgian = '��㧨�᪨�';
$strGerman = '����檨�';
$strGlobal = '�������� �஢���';
$strGlobalPrivileges = '�������� �ਢ������';
$strGlobalValue = '������쭮� ���祭��';
$strGo = 'OK';
$strGrantOption = 'GRANT';
$strGreek = '���᪨�';
$strGzip = 'gzip';

$strHandler = '��ࠡ��稪';
$strHasBeenAltered = '�뫠 ��������.';
$strHasBeenCreated = '�뫠 ᮧ����.';
$strHaveToShow = '��� �믮������ �����, ������ ���� ��࠭ �⮡ࠦ���� �⮫���/�⮫���.';
$strHebrew = '����';
$strHelp = '������';
$strHexForBLOB = '�ᯮ�짮���� ��⭠����筮� �⮡ࠦ���� ��� ����� ⨯� BLOB';
$strHide = '������';
$strHideShowAll = '������/�⮡ࠧ��� �� ⠡����';
$strHideShowNoRelation = '������/�⮡ࠧ��� ⠡���� �� ����騥 �痢�';
$strHome = '� ��砫�';
$strHomepageOfficial = '��樠�쭠� ��࠭�� phpMyAdmin';
$strHost = '����';
$strHostEmpty = '���⮥ ��� ���!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = '������᪨�';

$strIcelandic = '�᫠��᪨�';
$strId = 'ID';
$strIdxFulltext = '�����⥪�⮢�';
$strIEUnsupported = 'Internet Explorer �� �����ন���� ������ �㭪��.';
$strIgnore = '�����஢���';
$strIgnoreDuplicates = '�����஢��� �������騥�� ��ப�';
$strIgnoreInserts = '�ᯮ�짮���� ��������騥 ��⠢�� (IGNORE)';
$strImport = '������';
$strImportExportCoords = '������/��ᯮ�� ���न��� ⠡��� �/�� PDF-�奬�';
$strImportFiles = '������ 䠩���';
$strImportFormat = '��ଠ� �������㥬��� 䠩��';
$strImportSuccessfullyFinished = '������ �ᯥ譮 �����襭, ����ᮢ �믮�����: %d.';
$strIndex = '������';
$strIndexes = '�������';
$strIndexesSeemEqual = '������騥 ������� ��।����� ��� �������, � ���� �� ��� ������ ���� 㤠���:';
$strIndexHasBeenDropped = '������ %s �� 㤠���';
$strIndexName = '��� ������&nbsp;:';
$strIndexType = '��� ������&nbsp;:';
$strIndexWarningTable = '�஡���� � �����ᠬ� ⠡���� `%s`';
$strInnoDBAutoextendIncrement = '��⮬���᪮� 㢥��祭��';
$strInnoDBAutoextendIncrementDesc = '������ (� ���������) ��⮬���᪮�� 㢥��祭�� 䠩�� ������ �� ��९������� ⠡��筮� ������';
$strInnoDBBufferPoolSize = '������ ���୮�� �㫠';
$strInnoDBBufferPoolSizeDesc = '������ ���� �����, ����� InnoDB �ᯮ���� ��� ���஢���� ������ � �����ᮢ ᢮�� ⠡���';
$strInnoDBDataFilePath = '����� ������';
$strInnoDBDataHomeDir = '����譨� ��⠫�� ��� ������';
$strInnoDBDataHomeDirDesc = '���� ���� ��� � ��⠫��� ��� ��� 䠩��� ������ InnoDB';
$strInnoDBPages = '��࠭��';
$strInnoDBRelationAdded = '������� ��� ⠡��� ⨯� InnoDB';
$strInnodbStat = '����ﭨ� InnoDB';
$strInsecureMySQL = '���䨣��樮��� 䠩� phpMyAdmin ᮤ�ন� ����ன�� MySQL ��-㬮�砭��, ᮣ��᭮ ����� ��� �ਢ�����஢������ ���짮��⥫� &quot;root&quot; �� ����� ��஫�. ����� ����ன�� ������ MySQL-�ࢥ� �梨���  ��� ��ᠭ�樮��஢������ ����㯠, ���⮬� �����⥫쭮 ४��������� ��⠭����� ��஫� ��� ���짮��⥫� &quot;root&quot;.';
$strInsert = '��⠢���';
$strInsertAsNewRow = '��⠢��� ������';
$strInsertedRowId = '�����䨪��� ��⠢�塞�� ��ப�:';
$strInsertedRows = '��������� ��ப�:';
$strInternalNotNecessary = '* �� ����稨 ����७��� �裡 � ⠡��� ⨯� InnoDB, �� ��⠭���� �� ��易⥫쭠.';
$strInternalRelationAdded = '��������� ����७��� ���';
$strInternalRelations = '����७��� �裡';
$strInUse = '�ᯮ������';
$strInvalidAuthMethod = '� ���䨣��樮���� 䠩�� phpMyAdmin ��⠭����� ������ ��⮤ ��⥭�䨪�樨:';
$strInvalidColumn = '��࠭ ������ �⮫��� (%s)!';
$strInvalidColumnCount = '������⢮ �⮫�殢 ������ ���� ����� ���.';
$strInvalidCSVFieldCount = '���ࠢ��쭮� ������⢮ ����� �� �室��� CSV-������ � ��ப� %d.';
$strInvalidCSVFormat = '���ࠢ���� �ଠ� �室��� CSV-������ � ��ப� %d.';
$strInvalidCSVParameter = '���ࠢ���� ��ࠬ��� ������ CSV: %s';
$strInvalidDatabase = '�����४⭠� ���� ������'; 
$strInvalidFieldAddCount = '����室��� �������� ��� �� ���� ����.';
$strInvalidFieldCount = '� ⠡���� ������ ����, ��� ������, ���� ����.';
$strInvalidLDIImport = '��� ����� �� �����ন���� ������ ᦠ��� ������!';
$strInvalidRowNumber = '��᫮ %d �� ���� �ࠢ���� ����஬ ��ப�.';
$strInvalidServerHostname = '��� �ࢥ� %1$s 㪠���� ����୮� ��� ���. ��ࠢ�� ����ன�� ������� � ���䨣��樮���� 䠩�� phpMyAdmin.';
$strInvalidServerIndex = '���ࠢ���� ����� �ࢥ�: &quot;%s&quot;';
$strInvalidTableName = '���ࠢ��쭮� ��� ⠡����';

$strJapanese = '����᪨�';
$strJoins = '��ꥤ������';
$strJumpToDB = '��३� � ���� ������ &quot;%s&quot;';
$strJustDelete = '���� 㤠���� ���짮��⥫�� �� ⠡��� �ਢ������.';
$strJustDeleteDescr = '&quot;��������&quot; ���짮��⥫� ���� ����� ����� � �ࢥ��, ���� ⠡���� �ਢ������ �� ���� ��१���㦥��.';

$strKeepPass = '�� ������ ��஫�';
$strKeyCache = '��� ������';
$strKeyname = '��� ������';
$strKill = '��������';
$strKnownExternalBug = '����� ��ࠬ��� &quot;%s&quot; �����থ�� �訡��, ���ᠭ�� ᬮ��� �� %s';
$strKorean = '��३᪨�';

$strLandscape = '��졮����';
$strLanguage = '���';
$strLanguageUnknown = '��������� ��: %1$s.';
$strLatchedPages = '�����஢����� ��࠭��';
$strLaTeX = 'LaTeX';
$strLatexCaption = '��������� ⠡����';
$strLatexContent = '����ন��� ⠡���� __TABLE__';
$strLatexContinued = '(�த�������)';
$strLatexContinuedCaption = '��������� ⠡���� (�த�������)';
$strLatexIncludeCaption = '�������� ��������� ⠡����';
$strLatexLabel = '�����䨪��� ��⪨';
$strLatexStructure = '������� ⠡���� __TABLE__';
$strLatvian = '��⢨�᪨�';
$strLDI = 'CSV, �ᯮ���� LOAD DATA';
$strLDILocal = '�ᯮ�짮���� ���祢�� ᫮�� LOCAL';
$strLengthSet = '�����/���祭��';
$strLimitNumRows = '������⢮ ��ப �� ��࠭��';
$strLinesTerminatedBy = '�������⥫� ��ப';
$strLinkNotFound = '���� �� �������';
$strLinksTo = '��裡';
$strLithuanian = '��⮢᪨�';
$strLocalhost = '�������';
$strLocationTextfile = '�롮� 䠩��';
$strLogin = '���ਧ���';
$strLoginInformation = '���ଠ�� ��⭮� �����';
$strLogout = '��室';
$strLogPassword = '��஫�:';
$strLogServer = '��ࢥ�';
$strLogUsername = '���짮��⥫�:';
$strLongOperation = '�믮������ ������ ����樨 ����� ������ ���⥫쭮� �६�. �த������?';

$strMaxConnects = '���ᨬ��쭮 �����६�����';
$strMaximalQueryLength = '���ᨬ��쭠� ����� ᮧ��������� �����';
$strMaximumSize = '���ᨬ���� ࠧ���: %s%s';
$strMbExtensionMissing = '�� ࠡ�� � ���������묨 ����஢���� ��� ��⠭��������� ���७�� PHP &quot;mbstring&quot;, phpMyAdmin �� � ���ﭨ� �ந������� ���४⭮� ࠧ������ ��ப, �� ����� �ਢ��� � ���।᪠�㥬� १���⠬. ��⠭���� ���७�� PHP &quot;mbstring&quot;.';
$strMbOverloadWarning = '� ���䨣��樨 PHP ����祭, ��ᮢ���⨬� � phpMyAdmin, ��ࠬ��� mbstring.func_overload. ��� �।���饭�� ��������� ���� ������, ����� ��ࠬ��� ������ ���� �몫�祭!';
$strMIME_available_mime = '����㯭� MIME-⨯�';
$strMIME_available_transform = '����㯭� �८�ࠧ������';
$strMIME_description = '���ᠭ��';
$strMIME_MIMEtype = 'MIME-⨯';
$strMIME_nodescription = '�� ����� ������ ���ᠭ�� ���������.<br />�����  �ᯮ��㥬�� �㭪樨 �⮡ࠦ���� �८�ࠧ������ %s, �㤥� � ᪮஬ �६��� ���ᠭ�.';
$strMIME_transformation = '�८�ࠧ������';
$strMIME_transformation_note = '��� ��ᬮ�� ����㯭�� MIME-⨯�� � ��ࠬ��஢ �८�ࠧ������ ��ᯮ������ ������ ��뫪�� - %s���ᠭ�� �८�ࠧ������%s';
$strMIME_transformation_options = '��ࠬ���� �८�ࠧ������';
$strMIME_transformation_options_note = '���祭�� ��ࠬ��஢ �८�ࠧ������ ������ ����� �ଠ�: \'a\', 100, \'b\', \'c\'...<br />������� ���⭮� ��ᮩ ���� (\\) � �����୮� ����窨 (\') ����室��� ��࠭�஢��� (�।������) ᨬ����� ���⭮� ��ᮩ ����, ���ਬ��: \'\\\\xyz\' ��� \'a\\\'b\'.';
$strMIME_without = 'MIME-⨯�, �뤥����� ���ᨢ��, �� ����� �⤥�쭮� �㭪樨 �࠭��ଠ樨';
$strMIMETypesForTable = 'MIME-���� �������';
$strModifications = '��������� ��࠭���';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveMenu = '��६����� ����';
$strMoveTable = '��६����� ⠡���� � (���� ������<b>.</b>⠡���):';
$strMoveTableOK = '������ %s �뫠 ��६�饭� � %s.';
$strMoveTableSameNames = '�� �������� ��६����� ⠡���� ᠬ� � ᥡ�!';
$strMultilingual = '���������';
$strMyISAMDataPointerSize = '������ 㪠��⥫� � 䠩�� ������';
$strMyISAMDataPointerSizeDesc = '����砫�� ࠧ��� 㪠��⥫� � 䠩�� ������, �� ᮧ����� ⠡��� (CREATE TABLE) ⨯� MyISAM, � ����⠭������� ��ࠬ��஬ ���ᨬ��쭮�� �᫠ ��ப (MAX_ROWS).';
$strMyISAMMaxExtraSortFileSize = '���ᨬ���� ࠧ��� �६������ 䠩�� �� ᮧ����� ������';
$strMyISAMMaxExtraSortFileSizeDesc = '�᫨ ࠧ��� �६������ 䠩��, �ᯮ��㥬��� ��� ����ண� ᮧ����� �����ᮢ ⠡��� ⨯� MyISAM, �ॢ�蠥� �� 㪠����� ����� ��ꥬ �ᯮ��㥬� ��� ������, � �।���⥭�� �⤠���� ����� ����஬�, �� ����� ��������� ��⮤� ���஢���� ������.';
$strMyISAMMaxSortFileSize = '���ᨬ���� ࠧ��� �६����� �������� 䠩���';
$strMyISAMMaxSortFileSizeDesc = '���ᨬ���� ࠧ��� �६������ 䠩��, ����� MySQL ����� �ᯮ�짮���� ��� ����⠭������� ������ (�� �믮������ ������ REPAIR TABLE, ALTER TABLE, ��� LOAD DATA INFILE). ��� 䠩���, ࠧ��� ������ �ॢ�蠥� 㪠������ ���祭��, ������ �㤥� ᮧ�������� �� ����� ��� �����ᮢ (⠪�� ������ ࠡ�⠥� ��᪮�쪮 ���������, �� ����� �������).';
$strMyISAMRecoverOptions = '����� ��⮬���᪮�� ����⠭�������';
$strMyISAMRecoverOptionsDesc = '����� ��⮬���᪮�� ����⠭������� ⠡��� ��᫥ ᡮ�. ��⠭���������� ��ࠬ��஬ --myisam-recover, �� ����᪥ �ࢥ�.';
$strMyISAMRepairThreads = '��⮪�� ����⠭�������';
$strMyISAMRepairThreadsDesc = '�᫨ ���祭�� ����� �������, ������� ⠡��� ⨯� MyISAM ᮧ���� ��ࠫ���쭮 (����� ������ � ᢮�� ��⮪�) �� �६� ����� ����⠭������� � ������� ���஢�� (Repair by sorting).';
$strMyISAMSortBufferSize = '������ ���� ���஢��';
$strMyISAMSortBufferSizeDesc = '����, ����� �뤥����� ��� ���஢�� �����ᮢ �� �믮������ ������� REPAIR TABLE ��� ��� ᮧ����� �����ᮢ �� ����� ������ CREATE INDEX ��� ALTER TABLE.';
$strMySQLCharset = 'MySQL-����஢��';
$strMysqlClientVersion = '����� MySQL-������';
$strMySQLConnectionCollation = '�����⠢����� ᮥ������� � MySQL';
$strMysqlLibDiffersServerVersion = '����� ������᪮� ������⥪� MySQL (%s) �⫨砥��� �� ���ᨨ ��⠭��������� MySQL-�ࢥ� (%s). �� ����� �ਢ��� � �����४⭮� ࠡ��.';
$strMySQLSaid = '�⢥� MySQL: ';
$strMySQLShowProcess = '���᮪ ����ᮢ';
$strMySQLShowStatus = '����饥 ���ﭨ� MySQL';
$strMySQLShowVars = '���⥬�� ��६���� MySQL';

$strName = '���';
$strNext = '������騩';
$strNo = '���';
$strNoActivity = '������⢨� ��⨢���� ����� %s ᥪ㭤, ��������, ���ਧ���� ������';
$strNoDatabases = '���� ������ ����������';
$strNoDatabasesSelected = '�� ���� ���� ������ �� ��࠭�.';
$strNoDataReceived = '������ ������ ����������. ��稭�: �� ��࠭ �������㥬� 䠩�; ࠧ��� �������㥬��� 䠩�� �ॢ�蠥� ���ᨬ��쭮 �����⨬�, ������� � ����ன��� PHP. ��. FAQ 1.16';
$strNoDescription = '��� ���ᠭ��';
$strNoDetailsForEngine = '�������⥫쭠� ���ଠ�� � ���ﭨ� ������� ⨯� ⠡��� - ���������.';
$strNoDropDatabases = '������� "DROP DATABASE" (㤠���� ���� ������) - �⪫�祭�.';
$strNoExplain = '����� ������';
$strNoFilesFoundInZip = '������ ����� ZIP-��娢� �� �������!';
$strNoFrames = '��� ࠡ��� phpMyAdmin �㦥� ��㧥� � �����প�� <b>�३���</b>.';
$strNoIndex = '������ �� ��।����!';
$strNoIndexPartsDefined = '���� ������ �� ��।�����!';
$strNoModification = '��� ���������';
$strNone = '���';
$strNoOptions = '��� �⮣� �ଠ� ��� ����ࠨ������ ��ࠬ��஢';
$strNoPassword = '��� ��஫�';
$strNoPermission = '�� �����筮 �ࠢ ��� ��࠭���� 䠩�� %s �� ���-�ࢥ�.';
$strNoPhp = '����� PHP-���';
$strNoPrivileges = '��� �ਢ������';
$strNoRights = '��� ����㯠 � ������ ��࠭�� � ��� �������筮 �ࠢ!';
$strNoRowsSelected = '��� ᮢ��襭�� ����⢨� ����室��� ����� ���� ��� ��᪮�쪮 ��ப';
$strNoSpace = '��� ��࠭���� 䠩�� %s �������筮 ��᪮���� ����࠭�⢠.';
$strNoTablesFound = '������ � ���� ������ �� �����㦥��.';
$strNoThemeSupport = '�����প� ⥬ �� ࠡ�⠥�, �஢���� ���䨣���� � ����稥 ⥬ � ��⠫��� %s.';
$strNotNumber = '������ �᫮!';
$strNotOK = '�� ��⮢�';
$strNotSet = '������ <b>%s</b> �� ������� ��� �� ��⠭������ � %s';
$strNoUsersFound = '���짮��⥫�� �� �������.';
$strNoValidateSQL = '����� �஢��� ᨭ⠪�� SQL';
$strNull = 'Null';
$strNumberOfFields = '������⢮ �����';
$strNumberOfTables = '������⢮ ⠡���';
$strNumSearchResultsInTable = '%s �宦�����(��) � ⠡��� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�⮣�:</b> <i>%s</i> �宦�����(��)';
$strNumTables = '�������';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'OpenDocument ⠡���';
$strOpenDocumentText = 'OpenDocument ⥪��';
$strOpenNewWindow = '������ phpMyAdmin � ����� ����';
$strOperations = '����樨';
$strOperator = '������';
$strOptimizeTable = '��⨬���஢��� ⠡����';
$strOptions = '��ࠬ����';
$strOr = '���';
$strOverhead = '�ࠣ����஢���';
$strOverwriteExisting = '��१������ �������騩(�) 䠩�(�)';

$strPageNumber = '����� ��࠭���:';
$strPagesToBeFlushed = '��࠭�� � ���⪥';
$strPaperSize = '������ �㬠��';
$strPartialImport = '������ ������';
$strPartialText = '����饭��� �⮡ࠦ���� ������';
$strPassword = '��஫�';
$strPasswordChanged = '��஫� ��� %s �� �ᯥ譮 �������.';
$strPasswordEmpty = '��஫� �� �����!';
$strPasswordHashing = '���஢���� ��஫�';
$strPasswordNotSame = '�����४⭮� ���⢥ত���� ��஫�!';
$strPDF = 'PDF';
$strPdfDbSchema = '������� ���� ������ "%s" - ��࠭�� %s';
$strPdfInvalidTblName = '������ "%s" �� �������!';
$strPdfNoTables = '��� ⠡���';
$strPDFReportExplanation = '(�������� ���� ᮤ�ঠ饣� ����� ����� ⠡����)';
$strPDFReportTitle = '��������� ����';
$strPerHour = '� ��';
$strPerMinute = '� ������';
$strPerSecond = '� ᥪ㭤�';
$strPersian = '���ᨤ᪨�';
$strPhoneBook = '⥫�䮭��� �����';
$strPhp = 'PHP-���';
$strPHP40203 = '�ᯮ��㥬�� ����� PHP 4.2.3, ᮤ�ন� ��쥧�� �訡�� �� ࠡ�� � ���������묨 ����஢���� (mbstring). ������ ��⠫�� ���� �� �訡��: PHP bug report 19404. ������ ����� PHP �� ४��������� ��� �ᯮ�짮����� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPleaseSelectPrimaryOrUniqueKey = '�롥�� ���� ��饥�� ��ࢨ�� (PRIMARY), ��� 㭨����� (UNIQUE) �����ᮬ!';
$strPmaDocumentation = '���㬥���� phpMyAdmin';
$strPmaUriError = '��४⨢� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ��⠭������ � ���䨣��樮���� 䠩��!';
$strPmaWiki = 'phpMyAdmin ����';
$strPolish = '����᪨�';
$strPortrait = '�������';
$strPos1 = '��砫�';
$strPrevious = '�����';
$strPrimary = '��ࢨ��';
$strPrimaryKeyHasBeenDropped = '��ࢨ�� ���� �� 㤠���';
$strPrimaryKeyName = '��� ��ࢨ筮�� ������ ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '(��� &quot;PRIMARY&quot; ������ ����� <b>⮫쪮</b> ��ࢨ�� ������!)';
$strPrint = '�����';
$strPrintView = '����� ��� ����';
$strPrintViewFull = '����� ��� ���� (���������)';
$strPrivDescAllPrivileges = '����ন� �� �ਢ������, �� �᪫�祭��� GRANT';
$strPrivDescAlter = '����蠥� ��������� �������� ��������� ⠡���';
$strPrivDescAlterRoutine = '����蠥� ��������� � 㤠����� �࠭���� ��楤��';
$strPrivDescCreateDb = '����蠥� ᮧ����� ����� ��� ������ � ⠡���';
$strPrivDescCreateRoutine = '����蠥� ᮧ����� �࠭���� ��楤��';
$strPrivDescCreateTbl = '����蠥� ᮧ����� ����� ⠡���';
$strPrivDescCreateTmpTable = '����蠥� ᮧ����� �६����� ⠡���';
$strPrivDescCreateUser = '����蠥� ᮧ�����, 㤠����� � ��२��������� ����� ����ᥩ ���짮��⥫��';
$strPrivDescCreateView = '����蠥� ᮧ����� ����� �।�⠢����� (CREATE VIEW)';
$strPrivDescDelete = '����蠥� 㤠����� ������';
$strPrivDescDropDb = '����蠥� 㤠����� ��� ������ � ⠡���';
$strPrivDescDropTbl = '����蠥� 㤠����� ⠡���';
$strPrivDescExecute = '����蠥� �믮������ �࠭���� ��楤�� (�� �����ন������ ������ ���ᨥ� MySQL)';
$strPrivDescExecute5 = '����蠥� �믮������ �࠭���� ��楤��';
$strPrivDescFile = '����蠥� ������ � ��ᯮ�� ������ � 䠩��';
$strPrivDescGrant = '����蠥� ���������� ���짮��⥫�� � �ਢ������ ��� ��१���㧪� ⠡��� �ਢ������';
$strPrivDescIndex = '����蠥� ᮧ����� � 㤠����� �����ᮢ';
$strPrivDescInsert = '����蠥� ��⠢�� � ������ ������';
$strPrivDescLockTables = '����蠥� �����஢�� ⠡��� ��� ⥪�饣� ��⮪�';
$strPrivDescMaxConnections = '���ᨬ��쭮� ������⢮ ����� ������祭��, ����� ���짮��⥫� ����� ��⠭����� � �祭�� ��';
$strPrivDescMaxQuestions = '���ᨬ��쭮� ������⢮ ����ᮢ, ����� ���짮��⥫� ����� ��ࠢ��� � �祭�� ��';
$strPrivDescMaxUpdates = '���ᨬ��쭮� ������⢮ ������ ��������� �����-���� ⠡���� ��� ���� ������, ����� ���짮��⥫� ����� �믮����� � �祭�� ��';
$strPrivDescMaxUserConnections = '���ᨬ��쭮� ������⢮ �����६����� ������祭�� ������ ���짮��⥫�';
$strPrivDescProcess3 = '����蠥� �����襭�� ����ᮢ ��㣨� ���짮��⥫��';
$strPrivDescProcess4 = '����蠥� ��ᬮ�� ������ ����ᮢ � ᯨ᪥ ����ᮢ';
$strPrivDescReferences = '�� ����㯭� � ������ ���ᨨ MySQL!';
$strPrivDescReload = '����蠥� ��१���㧪� ����஥� �ࢥ� � ����� ��� ��襩';
$strPrivDescReplClient = '����蠥� ����訢��� ���⮭�宦����� ��������� � ���稭����� �ࢥ஢';
$strPrivDescReplSlave = '����室��� ��� ���稭����� �ࢥ஢ �� ९����樨';
$strPrivDescSelect = '����蠥� �롮�� ������';
$strPrivDescShowDb = '����蠥� ����� � ������� ᯨ�� ��� ������';
$strPrivDescShowView = '����蠥� �뢮� ����� ᮧ���饣� �।�⠢����� (SHOW CREATE VIEW)';
$strPrivDescShutdown = '����蠥� ��⠭���� �ࢥ�';
$strPrivDescSuper = '����蠥� ��⠭���� ᮥ�������, ���� �� ���⨦���� ���ᨬ��쭮�� ������⢠ ᮥ�������. (�ॡ���� ��� ����設�⢠ ���������⨢��� �����, ⠪�� ��� ��⠭���� ��������� ��६����� ��� �����襭�� ����ᮢ ��㣨� ���짮��⥫��)';
$strPrivDescUpdate = '����蠥� ��������� ������';
$strPrivDescUsage = '��� �ਢ������';
$strPrivileges = '�ਢ������';
$strPrivilegesReloaded = '�ਢ������ �뫨 �ᯥ譮 ��१���㦥��.';
$strProcedures = '��楤���';
$strProcesses = '������';
$strProcesslist = '���᮪ ����ᮢ';
$strProfiling = '��䨫�஢����';
$strProtocolVersion = '����� ��⮪���';
$strPutColNames = '�������� �������� ����� � ��ࢮ� ��ப�';

$strQBE = '�����&nbsp;��&nbsp;蠡����';
$strQBEDel = '�������';
$strQBEIns = '��⠢���';
$strQueryCache = '��� ����ᮢ';
$strQueryFrame = '���� �����';
$strQueryOnDb = 'SQL-����� � ���� ������ <b>%s</b>:';
$strQueryResultsOperations = '�ᯮ�짮����� १���⮢ �����';
$strQuerySQLHistory = '����� SQL-����ᮢ';
$strQueryStatistics = '����⨪� ����ᮢ: � �६��� ����᪠, �� �ࢥ� �뫮 ��᫠�� ����ᮢ - %s.';
$strQueryTime = '����� ���� %01.4f ᥪ.';
$strQueryType = '��� �����';
$strQueryWindowLock = '�������஢��� ᮤ�ন��� ���� ����ᮢ';

$strReadRequests = '������ �� �⥭��';
$strReceived = '�ਭ��';
$strRecommended = '४�����㥬�';
$strRecords = '�����';
$strReferentialIntegrity = '�஢���� 楫��⭮��� ������:';
$strRefresh = '��������';
$strRelationalSchema = 'C奬� �痢�';
$strRelationDeleted = '���� 㤠����';
$strRelationNotWorking = '�������⥫�� ���������� ��� ࠡ��� � �易��묨 ⠡��栬� ������㯭�. ��� ��।������ ��稭� ������ %s�����%s.';
$strRelations = '��裡';
$strRelationsForTable = '��裡 ⠡����';
$strRelationView = '��裡';
$strReloadingThePrivileges = '��१���㧪� �ਢ������';
$strReloadPrivileges = '��१���㧨�� �ਢ������';
$strReload = '��������';
$strRemoveSelectedUsers = '������� �뤥������ ���짮��⥫��';
$strRenameDatabaseOK = '���� ������ `%s` ��२�������� � `%s`.';
$strRenameTable = '��२�������� ⠡���� �';
$strRenameTableOK = '������ `%s` �뫠 ��२�������� � `%s`.';
$strRepairTable = '����⠭����� ⠡����';
$strReplaceNULLBy = '�������� NULL ��';
$strReplaceTable = '�������� ����� ⠡���� ����묨 �� 䠩��';
$strReplication = '���������';
$strReset = '������';
$strResourceLimits = '��࠭�祭�� �� �ᯮ�짮����� ����ᮢ';
$strRestartInsertion = '������⢮ ��⠢�塞�� ��ப: %s';
$strReType = '���⢥ত����';
$strRevoke = '�⬥����';
$strRevokeAndDelete = '�⬥���� �� ��⨢�� �ਢ������ ���짮��⥫�� � ��⥬ 㤠���� ��.';
$strRevokeAndDeleteDescr = '������ �� ��१���㧪� �ਢ������, ���짮��⥫� �� �� ���� ��࠭��� �������� �ਢ������ ⨯� USAGE.';
$strRevokeMessage = '�⬥���� �ਢ������ ��� %s.';
$strRomanian = '���᪨�';
$strRoutineReturnType = '�����頥�� ⨯';
$strRoutines = '��楤���';
$strRowLength = '����� ��ப�';
$strRows = '��ப�';
$strRowsFrom = '��ப ��稭�� �';
$strRowSize = '������ ��ப�';
$strRowsModeFlippedHorizontal = '��ਧ��⠫쭮� (�������� ���������)';
$strRowsModeHorizontal = '��ਧ��⠫쭮�';
$strRowsModeOptions = '� %s ०���, ��������� ��᫥ ������ %s �祥�';
$strRowsModeVertical = '���⨪��쭮�';
$strRowsStatistic = '����⨪� ��ப';
$strRunning = '�� %s';
$strRunQuery = '�믮����� �����';
$strRunSQLQuery = '�믮����� SQL-�����(�) � ���� ������ %s';
$strRunSQLQueryOnServer = '�믮����� SQL-�����(�) �� �ࢥ� %s';
$strRussian = '���᪨�';

$strSave = '���࠭���';
$strSaveOnServer = '���࠭��� �� �ࢥ� � ��⠫��� %s';
$strSavePosition = '���࠭��� �ᯮ������� ⠡���';
$strScaleFactorSmall = '�奬� �� ����頥��� �� ����� ��࠭��. ����室��� 㬥����� ����⠡.';
$strSearch = '����';
$strSearchFormTitle = '���� � ���� ������';
$strSearchInTables = '� ⠡���/⠡����:';
$strSearchNeedle = '�����(�) ��� ���祭��(�) ��� ���᪠ (��㯯���� ᨬ���: &quot;%&quot;):';
$strSearchOption1 = '�� �� ᫮�';
$strSearchOption2 = '�� ᫮��';
$strSearchOption3 = '�筮� ᮮ⢥��⢨�';
$strSearchOption4 = 'ॣ��୮� ��ࠦ����';
$strSearchResultsFor = '�������� ���᪠ �� &quot;<i>%s</i>&quot; %s:';
$strSearchType = '�᪠��:';
$strSecretRequired = '�� cookie-��⥭�䨪�樨, � ���䨣��樮���� 䠩�� ����室��� ������ ��஫��� �ࠧ� ��⠭���� ���祭�� ��४⨢� $cfg[\'blowfish_secret\'].';
$strSelectADb = '�롥�� ���� ������';
$strSelectAll = '�뤥���� ��';
$strSelectBinaryLog = '�롥�� ������ ��ୠ� ��� ��ᬮ��';
$strSelectFields = '�롥�� ���� (�� ����� ������):';
$strSelectForeignKey = '�롥�� ���譨� ����';
$strSelectNumRows = '�� ������';
$strSelectReferencedKey = '�롥�� ��뫮�� ����';
$strSelectTables = '�롥�� ⠡����';
$strSend = '���࠭��� ��� 䠩�';
$strSent = '��ࠢ����';
$strServer = '��ࢥ�';
$strServerChoice = '�롮� �ࢥ�';
$strServerNotResponding = '��ࢥ� �� �⢥砥�';
$strServers = '��ࢥ�';
$strServerStatus = '����饥 ���ﭨ� MySQL';
$strServerStatusDelayedInserts = '�⫮����� ��⠢��';
$strServerStatusUptime = 'MySQL �ࢥ� ࠡ�⠥� %s. �६� ����᪠: %s.';
$strServerTabVariables = '��६����';
$strServerTrafficNotes = '��䨪: ����⨪� �� �⥢��� ��䨪� MySQL-�ࢥ� � �६��� ��� ����᪠.';
$strServerVars = '��ࢥ�� ��६���� � ����ன��';
$strServerVersion = '����� �ࢥ�';
$strSessionStartupErrorGeneral = '�ந��諠 �訡�� � ࠡ�� ��堭���� ��ᨨ. �஢���� 䠩�� ��ୠ��� PHP �/��� ���-�ࢥ� �� ����稥 �訡��, � �ந������ �� ���४⭮� ���䨣��஢����.';
$strSessionValue = '���祭�� ��ᨨ';
$strSetEnumVal = '�� ᮧ����� ����� ⨯� &quot;enum&quot; � &quot;set&quot;, ����� ���祭�� ������ ����� �ଠ�: \'a\',\'b\',\'c\'...<br />������� ���⭮� ��ᮩ ���� (\\) � �����୮� ����窨 (\') ����室��� ��࠭�஢��� (�।������) ᨬ����� ���⭮� ��ᮩ ����, ���ਬ��: \'\\\\xyz\' ��� \'a\\\'b\'.';
$strShow = '��������';
$strShowAll = '�������� ��';
$strShowColor = '�⮡ࠦ��� � 梥�';
$strShowDatadictAs = '�ਥ���� ��࠭�� ᫮���� ������';
$strShowFullQueries = '�������⮥ �⮡ࠦ���� ����ᮢ';
$strShowGrid = '�⮡ࠦ��� ���';
$strShowHideLeftMenu = '��������/����� ����� ����';
$strShowingBookmark = '�⮡ࠦ���� ��������';
$strShowingPhp = '�⮡ࠦ��� ��� PHP-���';
$strShowingRecords = '�⮡ࠦ��� ��ப�';
$strShowingSQL = '�⮡ࠦ��� SQL-�����';
$strShowOpenTables = '���᮪ ������� ⠡���';
$strShowPHPInfo = '�������� ���ଠ�� PHP';
$strShowSlaveHosts = '���ଠ�� � ���稭����� �ࢥ��';
$strShowSlaveStatus = '���ଠ�� � ���ﭨ� �ࢥ� ९����樨';
$strShowStatusBinlog_cache_disk_useDescr = '������⢮ �࠭���権, �ᯮ�짮����� ��� ����୮�� ��ୠ�� � �ॢ�ᨢ�� ���祭�� binlog_cache_size, �᫥��⢨� 祣� ᮤ�ঠ騥�� � ��� SQL-��ࠦ���� �뫨 ��࠭��� �� �६����� 䠩��.';
$strShowStatusBinlog_cache_useDescr = '������⢮ �࠭���権, �ᯮ�짮����� ��� ����୮�� ��ୠ��.';
$strShowStatusCreated_tmp_disk_tablesDescr = '������⢮ �६����� ⠡���, ��⮬���᪨ ᮧ������ �ࢥ஬ �� ��᪥, �� �६� �믮������ SQL-��ࠦ����. �᫨ ���祭�� Created_tmp_disk_tables ������, ᫥��� 㢥����� ���祭�� ��६����� tmp_table_size, �⮡� �६���� ⠡���� �ᯮ�������� � �����, � �� �� ���⪮� ��᪥.';
$strShowStatusCreated_tmp_filesDescr = '������⢮ �६����� 䠩���, ᮧ������ MySQL-�ࢥ஬ (mysqld).';
$strShowStatusCreated_tmp_tablesDescr = '������⢮ �६����� ⠡��� � �����, ᮧ������ �ࢥ஬ ��⮬���᪨ � ����� �믮������ SQL-��ࠦ����.';
$strShowStatusDelayed_errorsDescr = '������⢮ �訡��, �������� � ����� ��ࠡ�⪨ ����ᮢ INSERT DELAYED, ���ਬ��, ��-�� �㡫�஢���� ���祩.';
$strShowStatusDelayed_insert_threadsDescr = '������⢮ ��ࠡ��뢠���� ����ᮢ INSERT DELAYED.';
$strShowStatusDelayed_writesDescr = '������⢮ ��ப ����ᠭ��� � ०��� �⫮������ ��⠢�� ������ (INSERT DELAYED).';
$strShowStatusFlush_commandsDescr  = '������⢮ �믮������� ������ FLUSH.';
$strShowStatusHandler_commitDescr = '������⢮ ����७��� ������ COMMIT.';
$strShowStatusHandler_deleteDescr = '������⢮ ����ᮢ �� 㤠����� ��ப �� ⠡����.';
$strShowStatusHandler_discoverDescr = 'MySQL-�ࢥ� ����� ����訢��� NDB Cluster � ����⢮����� ⠡��� � ��।������ ������. ��� ����� ���뢠���� �����㦥����. Handler_discover - �᫮ �����㦥��� ⠡���.';
$strShowStatusHandler_read_firstDescr = '������⢮ ����ᮢ �� �⥭�� ��ࢮ� ����� �� ������. �� ����讬 ���祭�� ��६�����, ᪮॥ �ᥣ�, �ࢥ� �������⭮ �믮���� ������ ᪠��஢���� ������. ���ਬ��, SELECT col1 FROM foo, �� �᫮���, �� col1 �ந�����஢��.';
$strShowStatusHandler_read_keyDescr = '������⢮ ����ᮢ �� �⥭�� ��ப, ����஥���� �� ���祭�� ����. ����讥 ���祭�� ��६����� ������ � ⮬, �� ������ � ⠡���� �ந�����஢��� �������騬 ��ࠧ��.';
$strShowStatusHandler_read_nextDescr = '������⢮ ����ᮢ �� �⥭�� ᫥���饩 ��ப� � ���浪� �ᯮ������� �����ᮢ. ���祭�� 㢥��稢����� �� ����� �����᭮�� �⮫�� � ��࠭�祭��� �� ࠧ���� ��� �� ᪠��஢���� ������.';
$strShowStatusHandler_read_prevDescr = '������⢮ ����ᮢ �� �⥭�� �।��饩 ��ப� �� ��ᯠ���饩 ���஢�� ������. ���筮 �ᯮ������ �� ��⨬���樨: ORDER BY ... DESC.';
$strShowStatusHandler_read_rnd_nextDescr = '������⢮ ����ᮢ �� �⥭�� ᫥���饩 ��ப� �� 䠩�� ������. ������ ���祭�� �㤥� ��᮪��, �� ��⮬ ᪠��஢���� ⠡���. ���筮 �� ����砥�, �� ⠡���� �� �ந�����஢��� �������騬 ��ࠧ�� ��� ������ �� �ᯮ����� �२����⢠ �����ᮢ.';
$strShowStatusHandler_read_rndDescr = '������⢮ ����ᮢ, �� �⥭�� ��ப�, �᭮������ �� �� ����樨. ����讥 ���祭�� ��६����� ����� ���� ���᫮����� ���� �믮������� ����ᮢ �ᯮ������ ���஢�� १����, �믮������� ����讣� �᫠ ����ᮢ �ॡ���� ������� ᪠��஢���� ⠡���, ����稥� ��ꥤ������ �� �ᯮ������ ������� �������騬 ��ࠧ��.';
$strShowStatusHandler_rollbackDescr = '������⢮ ����७��� ������ ROLLBACK.';
$strShowStatusHandler_updateDescr = '������⢮ ����ᮢ �� ���������� ��ப � ⠡���.';
$strShowStatusHandler_writeDescr = '������⢮ ����ᮢ �� ��⠢�� ��ப � ⠡����.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = '������⢮ ��࠭�� ᮤ�ঠ�� ����� (&quot;��吝�&quot; ��� &quot;����&quot;).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '����饥 ������⢮ &quot;��吝��&quot; ��࠭��.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = '������⢮ ��࠭�� ���୮�� �㫠, ��� ����묨 �� �����⢫�� ����� ���⪨ (FLUSH).';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = '������⢮ ᢮������ ��࠭��.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = '������⢮ �⠭�� �������஢����� � ���୮� �㫥 InnoDB. ��� �⨬� ��࠭�栬� �����⢫���� ����� �⥭�� ��� �����, ���� ��� �� ����� ���� ��饭� ��� 㤠���� �� �����-���� ��㣮� ��稭�.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = '������⢮ ��࠭�� ������� �᫥��⢨� �뤥����� ��� ���������⨢�� ������, ⠪�� ���: �����஢�� ��ப� ��� ����⨢��� ��஢���� ������. ���祭�� ����� ������� �� ��㫥: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = '��騩 ࠧ��� ���୮�� �㫠 (� ��࠭���).';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = '������⢮ &quot;��砩���&quot; ���०���� �⥭��, ���樨஢����� InnoDB. �� �ந�室��, ����� ����� ᪠����� ������� ���� ⠡���� � ��砩��� ���浪�.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = '������⢮ ��᫥����⥫��� ���०���� �⥭��, ���樨஢����� InnoDB. �� �ந�室��, ����� InnoDB �믮���� ������ ��᫥����⥫쭮� ᪠��஢���� ⠡����.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = '������⢮ ��᫥����⥫��� ����ᮢ �� �⥭��, �믮������� InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = '������⢮ ��᫥����⥫��� ����ᮢ �� �⥭��, ����� InnoDB �� ᬮ� �믮����� �� ���୮�� �㫠 � �ᯮ�짮��� ����࠭�筮� �⥭��.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = '���筮, ����� � ����� �� InnoDB �믮������� � 䮭���� ०���. ������, �᫨ ����室��� �⥭�� ��� ᮧ����� ��࠭��� �� ������⢨� ����� ⠪����, ᯥࢠ �ॡ���� �������� �� ���⪨. ����� ���稪 �����뢠�� �᫮ ⠪�� ��������. �᫨ ࠧ��� ���୮�� �㫠 �� ��⠭����� ������ ��ࠧ��, ���祭�� �㤥� ������訬.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = '������⢮ ����ᥩ, �믮������� � ����� �� InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = '������⢮ ����権 fsync(), �믮������� �� ����� ������.';
$strShowStatusInnodb_data_pending_fsyncsDescr = '����饥 ������⢮ �������襭��� ����権 fsync().';
$strShowStatusInnodb_data_pending_readsDescr = '����饥 ������⢮ �������襭��� ����権 �⥭��.';
$strShowStatusInnodb_data_pending_writesDescr = '����饥 ������⢮ �������襭��� ����権 �����.';
$strShowStatusInnodb_data_readDescr = '�㬬� ������ (� �����), ���⠭��� �� ����� ������.';
$strShowStatusInnodb_data_readsDescr = '��饥 ������⢮ ����権 �⥭�� ������.';
$strShowStatusInnodb_data_writesDescr = '��饥 ������⢮ ����権 ����� ������.';
$strShowStatusInnodb_data_writtenDescr = '�㬬� ������ (� �����), ����ᠭ��� �� ����� ������.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = '������⢮ ����ᥩ � ���� doublewrite, � ������⢮ ᮧ������ ��� �⮣� ��࠭��.';
$strShowStatusInnodb_dblwr_writesDescr = '������⢮ ����ᥩ � ���� doublewrite, � ������⢮ ᮧ������ ��� �⮣� ��࠭��.';
$strShowStatusInnodb_log_waitsDescr = '������⢮ �������� ���⪨ ��ୠ�쭮�� ����, �᫥��⢨� ������ ��� ࠧ���.';
$strShowStatusInnodb_log_write_requestsDescr = '������⢮ ����ᮢ �� ������ � ��ୠ�.';
$strShowStatusInnodb_log_writesDescr = '������⢮ 䨧��᪨� ����ᥩ � 䠩� ��ୠ��.';
$strShowStatusInnodb_os_log_fsyncsDescr = '������⢮ ����ᥩ � ������� fsync(), ᤥ������ � 䠩� ��ୠ��.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = '������⢮ �������襭��� ����⮪ ᨭ�஭���樨 � ������� ����樨 fsync().';
$strShowStatusInnodb_os_log_pending_writesDescr = '������⢮ �������襭��� ����ᮢ �� ������ � ��ୠ�.';
$strShowStatusInnodb_os_log_writtenDescr = '��ꥬ ������ � �����, ����ᠭ��� � 䠩� ��ୠ��.';
$strShowStatusInnodb_page_sizeDescr = '������ ��࠭���, ��������㥬�� � InnoDB (�� 㬮�砭�� 16��). ������ ���祭�� �ਢ������ � ��࠭���, �� ���� ��ꥬ ��࠭���, ����� ��ॢ��� �� ���祭�� � �����.';
$strShowStatusInnodb_pages_createdDescr = '������⢮ ᮧ������ ��࠭��.';
$strShowStatusInnodb_pages_readDescr = '������⢮ ���⠭��� ��࠭��.';
$strShowStatusInnodb_pages_writtenDescr = '������⢮ ����ᠭ��� ��࠭��.';
$strShowStatusInnodb_row_lock_current_waitsDescr = '����饥 ������⢮ �������� �����஢�� ��ப.';
$strShowStatusInnodb_row_lock_time_avgDescr = '�।��� �६� �������� �����஢�� ��ப (� �����ᥪ㭤��).';
$strShowStatusInnodb_row_lock_time_maxDescr = '���ᨬ��쭮� �६� �������� �����஢�� ��ப (� �����ᥪ㭤��).';
$strShowStatusInnodb_row_lock_timeDescr = '��饥 �६�, �������� �����஢�� ��ப (� �����ᥪ㭤��).';
$strShowStatusInnodb_row_lock_waitsDescr = '��饥 ������⢮ �������� �����஢�� ��ப.';
$strShowStatusInnodb_rows_deletedDescr = '������⢮ ��ப, 㤠������ �� ⠡��� InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = '������⢮ ��ப, ����������� � ⠡���� InnoDB.';
$strShowStatusInnodb_rows_readDescr = '������⢮ ��ப, ���⠭��� �� ⠡��� InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = '������⢮ ��ப, ����������� � ⠡���� InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = '������⢮ ������ � ��� ������, ����� �뫨 ��������, �� �� �� ����ᠭ� �� ���. ����� ��ࠬ��� ⠪�� �����⥭ ��� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = '������⢮ ���ᯮ��㥬�� ������ � ��� ������. ����� ��ࠬ��� �������� ��।����� ��� ����� �ᯮ������ ��� ������.';
$strShowStatusKey_blocks_usedDescr = '������⢮ �ᯮ��㥬�� ������ � ��� ������. ������ ���祭�� - ���ᨬ��쭮� ������⢮ ������, �ᯮ�짮������ �����६����.';
$strShowStatusKey_read_requestsDescr = '������⢮ ����ᮢ �� �⥭�� ����� �� ��� �����ᮢ.';
$strShowStatusKey_readsDescr = '������⢮ 䨧��᪨� ����権 �⥭�� ����� �����ᮢ � ��᪠. �᫨ ���祭�� ������ - ᪮॥ �ᥣ�, ������ ᫨誮� �����쪮� ���祭�� ��६����� key_buffer_size. �����樥�� ��㤠��� ���饭�� � ���� ����� ���� ����⠭ ���: Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = '������⢮ ����ᮢ �� ������ ����� � ��� ������.';
$strShowStatusKey_writesDescr = '������⢮ 䨧��᪨� ����権 ����� ����� �����ᮢ �� ���.';
$strShowStatusLast_query_costDescr = '��騥 ������ ��᫥����� �������஢������ �����, ����⠭�� ��⨬����஬ ����ᮢ. ������� �� �ࠢ����� ��䥪⨢���� ࠧ����� �奬 ������ �����. ����砫쭮� �㫥��� ���祭��, ����砥�, �� ����� �������樨 ����� �� �� �뫮.';
$strShowStatusNot_flushed_delayed_rowsDescr = '������⢮ ��ப, �������� ��⠢�� � ������ INSERT DELAYED.';
$strShowStatusOpen_filesDescr = '������⢮ ������� 䠩���.';
$strShowStatusOpen_streamsDescr = '������⢮ ������� ��⮪�� (�ਬ������ � 䠩��� ��ୠ���). ��⮪�� ���뢠���� 䠩�, ������ � ������� �㭪樨 fopen().';
$strShowStatusOpen_tablesDescr = '������⢮ ������� ⠡���.';
$strShowStatusOpened_tablesDescr = '��饥 ������⢮ ���뢠����� ⠡���. �� ����讬 ���祭�� ��६����� ४��������� 㢥����� ࠧ��� ��� ⠡��� (table_cache).';
$strShowStatusQcache_free_blocksDescr = '������⢮ ᢮������ ������ ����� � ��� ����ᮢ.';
$strShowStatusQcache_free_memoryDescr = '��ꥬ ᢮������ ����� ��� ��� ����ᮢ.';
$strShowStatusQcache_hitsDescr = '������⢮ &quot;���������&quot; � ��� ����ᮢ, �.�. ᪮�쪮 ����ᮢ �뫮 㤮���⢮७� ����ᠬ�, ��室�騬��� � ���.';
$strShowStatusQcache_insertsDescr = '������⢮ ����ᮢ, ����������� � ��� ����ᮢ.';
$strShowStatusQcache_lowmem_prunesDescr = '������⢮ ����ᮢ, 㤠������ �� ��� ��� �᢮�������� ����� ��� ���஢���� ����� ����ᮢ. �� ���ଠ�� ����� ������ �� ����ன�� ࠧ��� ��� ����ᮢ. ��� ����ᮢ �ᯮ���� ���⥣�� LRU (����� �ᥣ� �� �ᯮ����騥�� ��࠭��� ���������� ���묨) �� �ਭ�⨨ �襭�� �� 㤠����� ����� �� ���.';
$strShowStatusQcache_not_cachedDescr = '������⢮ ����ᮢ, ����� ��������� ������㥬묨 ��� ��� ������ ���஢���� �뫮 ��������� � ������� ���祢��� ᫮�� SQL_NO_CACHE.';
$strShowStatusQcache_queries_in_cacheDescr = '������⢮ ����ᮢ, ��ॣ����஢����� � ���.';
$strShowStatusQcache_total_blocksDescr = '�㬬�୮� ������⢮ ������ �����, �⢥������ ��� ��� ����ᮢ.';
$strShowStatusReset = '������';
$strShowStatusRpl_statusDescr = '����ﭨ� �⪠����⮩稢�� ९����樨 (���� �� ॠ��������).';
$strShowStatusSelect_full_joinDescr = '������⢮ ����ᮢ-��ꥤ������, �믮������� ��� �ᯮ�짮����� �����ᮢ. �᫨ ���祭�� ��६����� �� ࠢ�� 0, ४��������� �஢���� ������� ⠡���.';
$strShowStatusSelect_full_range_joinDescr = '������⢮ ����ᮢ-��ꥤ������, �믮������� � �ᯮ�짮������ ���᪠ �� ��������� � ⠡���, �� ������ �������� ��뫪�.';
$strShowStatusSelect_range_checkDescr = '������⢮ ����ᮢ-��ꥤ������, �믮������� � �ᯮ�짮������ ���᪠ �� ��������� ��� �롮ન ��ப �� ���筮� ⠡����. �᫨ ���祭�� ��६����� �� ࠢ�� 0, ४��������� �஢���� ������� ⠡���.';
$strShowStatusSelect_rangeDescr = '������⢮ ����ᮢ-��ꥤ������, �믮������� � �ᯮ�짮������ ���᪠ �� ��������� � ��ࢮ� ⠡���. ���筮 ���祭�� �⮩ ��६����� �� ���筮, ���� �᫨ ��� ������.';
$strShowStatusSelect_scanDescr = '������⢮ ����ᮢ-��ꥤ������, �믮������� � �ᯮ�짮������ ������� ���᪠ �� ��ࢮ� ⠡���.';
$strShowStatusSlave_open_temp_tablesDescr = '������⢮ �६����� ⠡���, ������� � �����騩 ������ ���稭���� ��⮪��.';
$strShowStatusSlave_retried_transactionsDescr = '��饥 ������⢮ ����஢ �࠭���権 ���稭���� ��⮪�� ९����樨 � ������ ����᪠.';
$strShowStatusSlave_runningDescr = '��ᢠ������� ���祭�� ON, �᫨ ����� �ࢥ� �㭪樮����� ��� ���稭����, ������祭�� � ��������.';
$strShowStatusSlow_launch_threadsDescr = '������⢮ ��⮪��, �� ᮧ����� ������ ���ॡ������� ����� 祬 slow_launch_time ᥪ㭤.';
$strShowStatusSlow_queriesDescr = '������⢮ ����ᮢ, �믮������� ����� long_query_time ᥪ㭤.';
$strShowStatusSort_merge_passesDescr = '������⢮ ��室��, ᤥ������ �����⬮� ���஢��. �� ����讬 ���祭�� ᫥��� 㢥����� ���祭�� ��६����� sort_buffer_size.';
$strShowStatusSort_rangeDescr = '������⢮ ����権 ���஢��, �믮������� � �ᯮ�짮������ ���������.';
$strShowStatusSort_rowsDescr = '������⢮ �����஢����� ��ப.';
$strShowStatusSort_scanDescr = '������⢮ ����権 ���஢��, �믮������� � �ᯮ�짮������ ������� ᪠��஢���� ⠡����.';
$strShowStatusTable_locks_immediateDescr = '������⢮ ����ᮢ �� �����஢�� ⠡����, ����� �뫨 㤮���⢮७� ����������.';
$strShowStatusTable_locks_waitedDescr = '������⢮ ����ᮢ �� �����஢�� ⠡����, ����� �뫨 㤮���⢮७� ⮫쪮 ��᫥ ��।�������� ��ਮ�� ��������. �᫨ ���祭�� ������ � ���� �஡���� � �ந�����⥫쭮����, ����室��� ᭠砫� ��⨬���஢��� ᢮� ������, � ��⥬ ࠧ���� ᢮� ⠡���� (��� ⠡����) ��� �ᯮ�짮���� ९������.';
$strShowStatusThreads_cachedDescr = '������⢮ ��⮪�� � ��⮪���� ���. ������ �ᯥ��� ���饭�� � ���� ����� ���᫨�� �� ��㫥 Threads_created/Connections. �᫨ �� ���祭�� ���襭� � ���� 梥� - ��� ᫥��� 㢥����� thread_cache_size.';
$strShowStatusThreads_connectedDescr = '������⢮ ������� ⥪��� ᮥ�������.';
$strShowStatusThreads_createdDescr = '������ ������⢮ ��⮪��, ᮧ������ ��� �����ঠ��� ᮥ������� � �����⮬. �� ����讬 ���祭�� ��६�����, ����� 㢥����� ���祭�� ��६����� thread_cache_size (�� �� ���� ����⢥����� �먣��� � �ந�����⥫쭮��, �� ��襩 ॠ����樨 ��⮪��).';
$strShowStatusThreads_runningDescr = '������⢮ ����ᮢ, ��室����� � ��⨢��� ���ﭨ�.';
$strShowTableDimension = '�⮡ࠦ��� ࠧ��୮��� ⠡���';
$strShowTables = '�⮡ࠦ���� ⠡���';
$strShowThisQuery = '�������� ����� ����� ᭮��';
$strSimplifiedChinese = '��⠩᪨� ��饭��';
$strSingly = '(�⮫���)';
$strSize = '������';
$strSkipQueries = '������⢮ ����ᮢ, �ய�饭��� �� ��砫�';
$strSlovak = '�����檨�';
$strSlovenian = '������᪨�';
$strSmallBigAll = '�������/ࠧ������ �⮡ࠦ���� ��� ⠡���';
$strSnapToGrid = '�ਢ易�� � �⪥';
$strSocketProblem = '(���� ᮪�� �����쭮�� MySQL-�ࢥ� �����४⭮ ����஥�)';
$strSort = '�����஢���';
$strSortByKey = '����஢��� �� �������';
$strSorting = '����஢��';
$strSpaceUsage = '�ᯮ��㥬�� ����࠭�⢮';
$strSpanish = '�ᯠ�᪨�';
$strSplitWordsWithSpace = '����� ࠧ�������� �஡���� (" ").';
$strSQL = 'SQL';
$strSQLCompatibility = '����� ᮢ���⨬��� SQL';
$strSQLExportType = '��� ��ᯮ��';
$strSQLParserBugMessage = '� ࠡ�� SQL-����� �ந��諠 �訡��. �������� � ���४⭮�� �����, ������⢨� � ��� ����⮪ � ���������� ����祪. ��������� ��稭�� �訡�� ����� ���� ����㧪� 䠩��, ᮤ�ঠ饣� ������ ����� ��� ����祪 � ⥪�� �����. ���஡�� �믮����� ����� �१ ��������� ��ப� MySQL. �� ����稨 ⠪����, ���� �㤥� �뢥���� �訡�� MySQL-�ࢥ�, ��������� �������⨪� �஡����. �᫨ �஡���� �� �蠥���, ��� �१ ����䥩� ��������� ��ப� ����� ��ࠡ��뢠�� ���४⭮, ��� �� ���� �����, ����� ��뢠�� �訡�� � ��ࠢ�� ࠧࠡ��稪�� ���ᠭ�� �訡��, ᭠���� ��� ����묨 �� ᥪ樨 CUT �뢥������ ����:';
$strSQLParserUserError = '����⭮, SQL-����� ᮤ�ন� �訡��. �� ����稨 ⠪����, ���� �㤥� �뢥���� �訡�� MySQL-�ࢥ�, ��������� �������⨪� �஡����.';
$strSQLQuery = 'SQL-�����';
$strSQLResult = '������� SQL-�����';
$strSQPBugInvalidIdentifer = '���ࠢ���� �����䨪���';
$strSQPBugUnclosedQuote = '��������� ����窠';
$strSQPBugUnknownPunctuation = '�������⭠� �㭪����';
$strStandInStructureForView = '�㡫������ ������� ��� �।�⠢�����';
$strStatCheckTime = '��᫥���� �஢�ઠ';
$strStatCreateTime = '��������';
$strStatement = '��ࠪ���⨪�';
$strStatisticsOverrun = '�� ����㦥���� �ࢥ�, �����⮢� ���稪� ����� ��९��������, ⠪�� ��ࠧ��, ����⨪�, ��।������� MySQL-�ࢥ஬, ����� ���� �����४⭮�.';
$strStatUpdateTime = '��᫥���� ����������';
$strStatus = '����ﭨ�';
$strStorageEngines = '���� ⠡���';
$strStorageEngine = '��� ⠡���';
$strStrucCSV = 'CSV';
$strStrucData = '������� � �����';
$strStrucExcelCSV = 'CSV ��� MS Excel';
$strStrucNativeExcel = '��ଠ� MS Excel';
$strStrucOnly = '���쪮 �������';
$strStructPropose = '������ �������� ⠡����';
$strStructureForView = '������� ��� �।�⠢�����';
$strStructure = '�������';
$strSubmit = '�믮�����';
$strSuccess = 'SQL-����� �� �ᯥ譮 �믮����';
$strSuhosin = '��ࢥ� �ᯮ���� ������ ��⥬� Suhosin. ��� �襭�� ��������� �஡��� ������� � %s���㬥��樨%s.';
$strSum = '�ᥣ�';
$strSwedish = '����᪨�';
$strSwitchToDatabase = '��४������� �� ᪮��஢����� ���� ������';
$strSwitchToTable = '��४������� �� ᪮��஢����� ⠡����';

$strTable = '������ ';
$strTableAlreadyExists = '������ %s 㦥 �������!';
$strTableComments = '�������਩ � ⠡���';
$strTableEmpty = '�� ������ ��� ⠡����!';
$strTableHasBeenDropped = '������ %s �뫠 㤠����';
$strTableHasBeenEmptied = '������ %s �뫠 ��饭�';
$strTableHasBeenFlushed = '�������� ��� ⠡���� %s';
$strTableIsEmpty = '������ - ����!';
$strTableMaintenance = '���㦨����� ⠡����';
$strTableName = '��� ⠡����';
$strTableOfContents = '����ঠ���';
$strTableOptions = '��ࠬ���� ⠡����';
$strTables = '������: %s';
$strTableStructure = '������� ⠡����';
$strTakeIt = '�ਬ�����';
$strTblPrivileges = ' �ਢ������ �஢�� ⠡����';
$strTempData = '�६���� �����';
$strTextAreaLength = '��-�� ����讣� ������⢠ ������<br />��������� ����� ���� ����㤭���';
$strThai = '���';
$strTheme = '���� / �⨫�';
$strThemeDefaultNotFound = '���� ��-㬮�砭�� %s �� �������!';
$strThemeNoPreviewAvailable = '�।��ᬮ�� �� ����㯥�.';
$strThemeNotFound = '���� %s �� �������!';
$strThemeNoValidImgPath = '�� ������ �ࠢ���� ���� � ����ࠦ���� ��� ⥬� %s!';
$strThemePathNotFound = '���� � 䠩��� ⥬� %s �� ������!';
$strThisHost = '��� ���';
$strThreads = '��⮪�';
$strThreadSuccessfullyKilled = '����� %s �� �ᯥ譮 �����襭.';
$strTime = '�६�';
$strTimeoutInfo = '����� ������ �� ��ࢠ� ��-�� �ਡ������� �६������ �����, ��᫥ ��१���᪠ ������ �㤥� �த����� � ����樨 %d.';
$strTimeoutNothingParsed = '��ᬮ��� �� ��᫥���� �����, ����� �� �뫨 ��ࠡ�⠭�. ��� �ࠢ��� �� ����砥�, �� phpMyAdmin �� ᬮ��� �������� ����� ������ �� �� ���, ���� �� �㤥� 㢥��祭� ��࠭�祭�� �६��� �믮������ php-�業�ਥ�.';
$strTimeoutPassed = '���⨣��� �६����� �����. �᫨ �� ��� �������� ������, ��१������ ��� ��ࠢ �� �� 䠩�, � ����� �த������� � ⮣� ���� �� ���஬ ��⠭������.';
$strToFromPage = '��࠭��';
$strToggleScratchboard = '�⮡ࠦ����';
$strToggleSmallBig = '���⭮� �⮡ࠦ����';
$strToSelectRelation = '��� �롮� �裡 ������ �� �窥 ᮥ�������, ��� �������� �� ���⨭��:';
$strTotal = '�ᥣ�';
$strTotalUC = '�ᥣ�';
$strTraditionalChinese = '��⠩᪨� �ࠤ�樮���';
$strTraditionalSpanish = '�ᯠ�᪨� �ࠤ�樮���';
$strTraffic = '��䨪';
$strTransactionCoordinator = '���न���� �࠭���権';
$strTransformation_application_octetstream__download = '�⮡ࠦ��� ��뫪� ��� ����㧪� ������� ������ ����. �������� �ᯮ�짮����� ��ࢮ�� ��ࠬ��� ��� �롮� ����� 䠩��, ��� �ᯮ�짮����� ��ண� ��ࠬ���, ��� ����� ����, ���஥ ᮤ�ন� ��� 䠩��. � ��砥 �ᯮ�짮����� ��ண� ��ࠬ���, ���� ����室��� ��⠭����� � ���� ���⮩ ��ப�.';
$strTransformation_application_octetstream__hex = '�⮡ࠦ��� ����� � ��⭠����筮� �।�⠢�����. ����易⥫�� ���� ��ࠬ��� ����� ���� �ᯮ�짮��� ��� 㪠����� �� �, �१ ����� �஬���⪨ �㤥� ����������� �஡�� (�� 㬮�砭�� ��᫥ ���� ���㡠�⮢).';
$strTransformation_image_jpeg__inline = '�⮡ࠦ��� 㬥��襭��� ������ ����ࠦ����, �� ������ ����� ������ ��� 㢥��祭��. ��ࠬ��ࠬ� �������� ���ᨬ��쭠� �ਭ� � ���� ���⨭�� � ���ᥫ��. ����砫쭮� ᮮ⭮襭�� ��஭, ��࠭����.';
$strTransformation_image_jpeg__link = '�⮡ࠦ��� ��뫪� ��� ����㧪� ����ࠦ����';
$strTransformation_image_png__inline = '�⮡ࠦ��� 㬥��襭��� ������ ����ࠦ����, �� ������ ����� ������ ��� 㢥��祭��. ��ࠬ��ࠬ� �������� ���ᨬ��쭠� �ਭ� � ���� ���⨭�� � ���ᥫ��. ����砫쭮� ᮮ⭮襭�� ��஭, ��࠭����.';
$strTransformation_text_plain__dateformat = '�⮡ࠦ��� ���� ⨯� TIME, TIMESTAMP, DATETIME ��� �६� � �ଠ� Unix, � ���� �ଠ�஢������ �뢮��. ���� ��ࠬ��� �ਡ����� ᬥ饭��, � ��� (�� 㬮�砭��: 0). ��ன ��ࠬ��� ������ ���� �ଠ�஢���� ��ப� ����/�६���. ��⨩ ��ࠬ��� ��।���� ��⠭���� �����쭮�� (��ப� "local") ��� �ᥬ�୮�� (��ப� "utc") �६���. � ᮮ⢥��⢨� � ��⠭������� ���쨬 ��ࠬ��஬ �ଠ� ���� ������ ����� ࠧ���� ���祭�� - ��� "local" ᬮ��� ���ᠭ�� �㭪樨 PHP strftime(), ��� "utc" - gmdate().';
$strTransformation_text_plain__external = '������ LINUX: ����᪠�� ���譥� �ਫ������ � ������ ��� �� ���� ����� ����. �����頥� ����� �뢮� �ਫ������. �� 㬮�砭�� �ᯮ������ Tidy (�ଠ�஢���� HTML-����). �� ᮮ�ࠦ���� ������᭮��, ����室��� ������ ��।���஢��� 䠩� libraries/transformations/text_plain__external.inc.php ���ᠢ ����㯭� �ணࠬ��. ���� ��ࠬ��� ������ ����� �ᯮ��㥬�� �ணࠬ��, �� ��஬ ��ࠬ��� ��।����� ��ࠬ���� ᮡ�⢥��� �ணࠬ��. �� ��⠭���� ���쥣� ��ࠬ��� � 1, ����� �뢮�� ���� �८�ࠧ����� �㭪樥� PHP htmlspecialchars() (�� 㬮�砭��: 1). ��⠭���� �ࢥ�⮣� ��ࠬ��� � 1, �।����� ��७��� ��ப� � �뢥��� ����� � ���� ��ப� (�� 㬮�砭��: 1).';
$strTransformation_text_plain__formatted = '�⮡ࠦ��� ᮤ�ন��� ���� ��� ����, ��� �८�ࠧ������ ������ �㭪樥� PHP htmlspecialchars(). ����� ��ࠧ�� ���� ����� ᮤ�ঠ�� ࠡ�稩 HTML-���.';
$strTransformation_text_plain__imagelink = '�����뢠�� ����ࠦ���� � ��뫪�; ���� ᮤ�ন� ��� 䠩��. ���� ��ࠬ��� ���� URL-��䨪ᮬ, ���ਬ�� "http://domain.com/". ��ன � ��⨩ ��ࠬ��� - �ਭ� � ���� ����ࠦ���� � ���ᥫ��.';
$strTransformation_text_plain__link = '�⮡ࠦ��� ��뫪�; ���� ᮤ�ন� ��� 䠩��. ���� ��ࠬ��� - URL-��䨪�, ���ਬ�� "http://www.example.com/". ��ன ��ࠬ��� - ��������� ��뫪�.';
$strTransformation_text_plain__sql = '��ଠ���� ⥪�� � ���� SQL ����� � ���ᢥ⪮� ᨭ⠪��';
$strTransformation_text_plain__substr = '�����뢠�� ⮫쪮 ���� ��ப�. ���� ��ࠬ��� - ᤢ��, ��।����騩 ��砫� �뢮������ ⥪�� (�� 㬮�砭��: 0). ��ன ��ࠬ��� - ������⢮ �����頥��� ᨬ����� (�� 㬮�砭��: �� ���� ��ப�). ��⨩ ��ࠬ��� ��।���� ��ப� ������塞�� ���砫� �/��� � ���� �������饣� ���뢪� (�� 㬮�砭��: "...").';
$strTriggers = '�ਣ����';
$strTruncateQueries = '����饭��� �⮡ࠦ���� ����ᮢ';
$strTurkish = '���檨�';
$strType = '���';

$strUkrainian = '��ࠨ�᪨�';
$strUncheckAll = '����� �뤥�����';
$strUnicode = '������';
$strUnique = '��������';
$strUnknown = '�������⭮';
$strUnselectAll = '����� �뤥�����';
$strUnsupportedCompressionDetected = '����㦠��� 䠩� ᦠ� ��⮤�� (%s), ����� �� �����ন������, � ���⮬� �� ����� ���� ������஢��. �����প� ������� ��⮤� �� �� ॠ��������, ���� �⪫�祭� �� ���䨣��஢����.';
$strUpdatePrivMessage = '�뫨 �������� �ਢ������ ��� %s.';
$strUpdateProfileMessage = '��䨫� �� ��������.';
$strUpdateQuery = '��������� �����';
$strUpdComTab = '����室��� �������� ⠡���� column_comments. ��⠫� ᬮ��� � ���㬥��樨.';
$strUpgrade = '����室��� �������� %s �� ���ᨨ %s ��� ���.';
$strUploadErrorCantWrite = '�訡�� �� ����⪥ ����� 䠩�� �� ���.';
$strUploadErrorExtension = '����㧪� 䠩�� ��⠭������ ��-�� ���७��.';
$strUploadErrorFormSize = '������ ����㦠����� 䠩�� �ॢ�蠥� ���祭�� ��४⨢� MAX_FILE_SIZE, ��।������� � HTML �ଥ.';
$strUploadErrorIniSize = '������ ����㦠����� 䠩�� �ॢ�蠥� ���祭�� ��४⨢� upload_max_filesize ��⠭�������� � ���䨣��樮���� 䠩�� PHP (php.ini).';
$strUploadErrorNoTempDir = '�� ������ ��⠫�� ��� �࠭���� �६����� 䠩���.';
$strUploadErrorPartial = '����㦥��� 䠩� �� ����㦥� ⮫쪮 ���筮.';
$strUploadErrorUnknown = '�� �६� ����㧪� 䠩�� �ந��諠 �������⭠� �訡��.';
$strUploadLimit = '����⭮, ࠧ��� ����㦠����� 䠩�� ᫨誮� �����. ���ᮡ� ��室� ������� ��࠭�祭�� ���ᠭ� � %s���㬥��樨%s.';
$strUploadsNotAllowed = '����㧪� 䠩��� �� �ࢥ�, ����������.';
$strUsage = '�ᯮ�짮�����';
$strUseBackquotes = '�������� �������� ⠡��� � ����� � ���� ����窨';
$strUsedPhpExtensions = '�ᯮ������ ���७�� PHP';
$strUseHostTable = '�ᯮ�짮���� ⠡���� ��⮢';
$strUser = '���짮��⥫�';
$strUserAlreadyExists = '���짮��⥫� %s 㦥 �������!';
$strUserEmpty = '�� ������ ��� ���짮��⥫�!';
$strUserName = '��� ���짮��⥫�';
$strUserNotFound = '�뤥����� ���짮��⥫� �� �� ������ � ⠡��� �ਢ������.';
$strUserOverview = '����� ����� ����ᥩ';
$strUsersDeleted = '��࠭�� ���짮��⥫� �뫨 �ᯥ譮 㤠����.';
$strUsersHavingAccessToDb = '���짮��⥫� � �ࠢ��� ����㯠 � &quot;%s&quot;';
$strUseTabKey = '��� ��६�饭�� ����� ���ﬨ ���祭��, �ᯮ���� ������� TAB, ���� CTRL+������ � ��५���� - ��� ᢮������� ��६�饭��';
$strUseTables = '�ᯮ�짮���� ⠡����';
$strUseTextField = '�ᯮ�짮���� ⥪�⮢�� ����';
$strUseThisValue = '�ᯮ�짮���� �� ���祭��';

$strValidateSQL = '�஢�ઠ ᨭ⠪�� SQL';
$strValidatorError = '�஢�ઠ ᨭ⠪�� SQL �� �����⢨��. �஢����, ��⠭������ �� ����室��� ���㫨 ���७�� ��� PHP, ���ᠭ�� � %s���㬥��樨%s.';
$strValue = '���祭��';
$strVar = '��६�����';
$strVersionInformation = '���ଠ�� � ���ᨨ';
$strView = '�।�⠢�����';
$strViewDump = '�⮡ࠧ��� ���� (�奬�) ⠡����';
$strViewDumpDatabases = '�⮡ࠧ��� ���� (�奬�) ��� ������';
$strViewDumpDB = '�⮡ࠧ��� ���� (�奬�) ���� ������';
$strViewHasBeenDropped = '�।�⠢����� %s �뫮 㤠����';
$strViewMaxExactCount = '�� �।�⠢����� ᮤ�ন� ����� %s ��ப. �� ࠧ��᭥��ﬨ, ������� � %s���㬥��樨%s.';
$strViewName = 'VIEW ��������';

$strWebServerUploadDirectory = '�� ��⠫��� ����㧪�';
$strWebServerUploadDirectoryError = '��⠭������� ��⠫�� ����㧪� �� ����㯥�';
$strWelcome = '���� ���������� � %s';
$strWestEuropean = '�������-��ய��᪨�';
$strWildcard = '��㯯���� ᨬ���';
$strWindowNotFound = '������� ���� ��㧥� �� ����� ���� ���������. ��������, �� ����뫨 த�⥫�᪮� ���� ��� ��� ��㧥� �������� ��������� ���������� ��-�� ����஥� ������᭮��';
$strWithChecked = '� �⬥祭�묨:';
$strWriteRequests = '������ �� ������';
$strWrongUser = '����� ��� �室� �� ����. � ����㯥 �⪠����.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '����砭��: ��⠭���� ���祭�� ��ࠬ��஢ � 0 (����), ᭨���� ��࠭�祭��.';
$strZip = 'zip';
?>
