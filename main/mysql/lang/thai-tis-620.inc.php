<?php
/* $Id: thai-tis-620.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2004/08/22 Arthit Suriyawongkul

$charset = 'tis-620';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('亵�', '����亵�', '�����亵�', '�ԡ�亵�', '����亵�', 'ྵ��亵�', '�͡��亵�');

$day_of_week = array('��.', '�.', '�.', '�.', '��.', '�.', '�.');
$month = array('�.�.', '�.�.', '��.�.', '��.�.', '�.�.', '��.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y  %R�.';

$timespanfmt = '%s �ѹ, %s �������, %s �ҷ�, %s �Թҷ�';

$strAbortedClients = '¡��ԡ';
$strAccessDenied = '���͹حҵ�����ҹ';
$strAction = '��зӡ��';
$strAddAutoIncrement = '������� AUTO_INCREMENT';
$strAddDeleteColumn = '����/ź ������� (��Ŵ�)';
$strAddDeleteRow = '����/ź ��';
$strAddNewField = '������Ŵ�����';
$strAddPrivilegesOnDb = '�����Է�Ԣͧ�ҹ�����ŵ��仹��';
$strAddPrivilegesOnTbl = '�����Է�Ԣͧ���ҧ���仹��';
$strAddSearchConditions = '�������͹�㹡�ä���:';
$strAddToIndex = '�����Ѫ�դ������ %s';
$strAddUser = '�������������';
$strAddUserMessage = '����������������º��������';
$strAdministration = '��ô����к�';
$strAffectedRows = '�Ƿ���ռ�:';
$strAfterInsertBack = '�觡�Ѻ';
$strAfterInsertNewInsert = '�á����¹����';
$strAfter = '��ѧ %s';
$strAll = '������';
$strAllTableSameWidth = '����ʴ����ҧ�ء�ѹ ���¤������ҧ��ҡѹ�������?';
$strAlterOrderBy = '���§���㹵��ҧ���';
$strAnalyzeTable = '����������ҧ';
$strAnd = '���';
$strAnIndex = '�������Ѫ������� %s';
$strAny = '��';
$strAnyHost = '��ʵ���';
$strAnyUser = '�������';
$strAPrimaryKey = '�����������դ�������� %s';
$strArabic = '��úԤ'; 
$strArmenian = '���������';
$strAscending = '������ҡ';
$strAtBeginningOfTable = '���ش������鹢ͧ���ҧ';
$strAtEndOfTable = '���ش�ش���¢ͧ���ҧ';
$strAttr = '�͵��Ժ�ǵ�';
$strAutomaticLayout = '�Ѵ���˹��ѵ��ѵ�';

$strBack = '��͹��Ѻ';
$strBaltic = '��ŵԡ';
$strBeginCut = '������ش�Ѵ';
$strBeginRaw = '����������ŴԺ';
$strBinary = ' ������亹��� ';
$strBinaryDoNotEdit = ' ������亹��� - ������� ';
$strBookmarkDeleted = 'ź�Ӥ鹷�訴������º��������';
$strBookmarkLabel = '���ª���';
$strBookmarkQuery = '�Ӥ鹹��١���������';
$strBookmarkThis = '���Ӥ鹹�����';
$strBookmarkView = '�����ҧ����';
$strBrowse = '�Դ��';
$strBulgarian = '��������';
$strBzError = 'phpMyAdmin �������ö�պ�Ѵ������ dump �� ���ͧ�ҡ��ǹ���� Bz2 � php ��蹹��������. ���й������ҧ����������á�տ <code>$cfg[\'BZipDump\']</code> ����͹�ԡ�ͧ phpMyAdmin �� <code>FALSE</code>. ��Ҥس��ͧ��÷������������ö�ͧ��ǹ���¡�úպ�Ѵ Bz2, �س��è��Ѿ�ô php ����蹶Ѵ�. ��������´������ php bug report %s.';
$strBzip = '"bzipped"';

$strCalendar = '��ԷԹ';
$strCannotLogin = '�������ö��͡�Թ������������ MySQL ��';
$strCantLoadRecodeIconv = '�������ö���¡���Ǫ��� iconv ���� recode �����ŧ�ش����ѡ��, �ҧ���͡: 1) ��駤����� PHP ����ö���Ǫ�������ҹ���� ���� 2) ��駤����� phpMyAdmin ����ͧ�ŧ�ش����ѡ��';
$strCantLoad = '�������ö���¡��ǹ���� %s,<br />��سҵ�Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCantRenameIdxToPrimary = '����¹���ʹѪ���� PRIMARY �����!';
$strCantUseRecodeIconv = '�������ö��ѧ���� iconv ���� libiconv ���� recode_string ���� �������ö���¡��Ǫ��� ����Ѻ�ѧ��������ҹ�鹢����������. �ͧ��Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCardinality = 'Cardinality';
$strCaseInsensitive = '���ʹ㨵����硵���˭�';
$strCaseSensitive = 'ʹ㨵����硵���˭�';
$strCentralEuropean = '���û��ҧ';
$strChange = '����¹';
$strChangeCopyMode = '���ҧ��������� ������Է������͹�ѹ ��� ...';
$strChangeCopyModeCopy = '... �红ͧ������.';
$strChangeCopyModeDeleteAndReload = ' ... ź�ͧ��Ҩҡ���ҧ����� �������¡����¡���Է���������ѧ�ҡ���.';
$strChangeCopyModeJustDelete = ' ... ź�ͧ��ҷ��仨ҡ���ҧ�����.';
$strChangeCopyModeRevoke = ' ... ���¡�׹�Է���������ҡ��� ����ź�ѹ��ѧ�ҡ���.';
$strChangeCopyUser = '����¹��������͡�Թ / �����Ҽ����';
$strChangeDisplay = '���͡��Ŵ����ͧ����ʴ�';
$strChangePassword = '����¹���ʼ�ҹ';
$strCharset = '�ش����ѡ��';
$strCharsetOfFile = '�ش�ѡ��Тͧ��� (character set):';
$strCharsets = '�ش����ѡ��';
$strCharsetsAndCollations = '�ش����ѡ�� ��С�����§�ӴѺ';
$strCheckAll = '���͡������';
$strCheckPrivs = '��Ǩ�ͺ�Է��';
$strCheckPrivsLong = '��Ǩ�ͺ�Է������Ѻ�ҹ������ &quot;%s&quot;.';
$strCheckTable = '��Ǩ�ͺ���ҧ';
$strChoosePage = '���͡˹�ҷ���ͧ������';
$strColComFeat = '�ʴ������˵آͧ�������';
$strCollation = '������§�ӴѺ';
$strColumnNames = '���ͤ������';
$strColumnPrivileges = '�Է��੾�Ф������';
$strCommand = '�����';
$strComments = '�����˵�';
$strCompleteInserts = '����� INSERT ����ٻẺ';
$strCompression = '�պ�Ѵ������';
$strConfigFileError = 'phpMyAdmin �������ö��ҹ����͹�ԡ��ê�蹢ͧ�س��<br />�»��� �Ҩ�������е�� PHP ���������� �����������ö�����ż� (parse) �����<br />�ͧ���¡���͹�ԡ��ê�蹢�����µç (���ԧ���ҹ��ҧ) ��д������ error message �����������  �ͧ��Ǩ�ͺ������ͧ���� quote ���� semicolon ������ú��������<br />��Ҥس���˹����ҧ� �ʴ���ҷء���ҧ�繻��Դ�';
$strConfigureTableCoord = '��سҵ�駤��������๵�ͧ���ҧ %s';
$strConnections = '�����������';
$strCookiesRequired = '��ͧ͹حҵ���� \'��ꡡ��\' (cookie) ���¡�͹ �֧�м�ҹ�ش������';
$strCopyTable = '�Ѵ�͡���ҧ��ѧ (�ҹ������<b>.</b>���ҧ):';
$strCopyTableOK =  '�Ѵ�͡���ҧ %s ���㹪��� %s ���º��������.';
$strCopyTableSameNames = '�Ѵ�͡���ҧ价����������';
$strCouldNotKill = 'phpMyAdmin �������ö����ô %s. �ҧ���ѹ�Ҩ�ж١�Դ����ǡ���.';
$strCreate = '���ҧ';
$strCreateIndex = '���ҧ�Ѫ���¤������ %s';
$strCreateIndexTopic = '���ҧ�Ѫ������';
$strCreateNewDatabase = '���ҧ�ҹ����������';
$strCreateNewTable = '���ҧ���ҧ㹰ҹ�����Ź�� %s';
$strCreatePage = '�����˹������';
$strCreatePdfFeat = '������ҧ�͡��� PDF';
$strCriteria = '���͹�';
$strCroatian = '�������';
$strCyrillic = '�����Ԥ';
$strCzech = '��';
$strCzechSlovak = '��-����ѡ';

$strDanish = 'ഹ����';
$strData = '������';
$strDatabase = '�ҹ������';
$strDatabaseHasBeenDropped = '�¹�ҹ������ %s �������º��������';
$strDatabases = '�ҹ������';
$strDatabasesDropped = '%s �ҹ��������١�������º��������.';
$strDatabasesStats = 'ʶԵ԰ҹ������';
$strDatabasesStatsDisable = '¡��ԡ�����ʶԵ�';
$strDatabasesStatsEnable = '����ա����ʶԵ�';
$strDatabasesStatsHeavyTraffic = '�ô��Һ: ����Դ������ʶԵԢͧ�ҹ������ �Ҩ�з�����ջ���ҳ��ö����͹�����Ũӹǹ�ҡ �����ҧ������������ ������������ MySQL.';
$strDataDict = '���ҹء��������';
$strDataOnly = '੾�Т�����';
$strDBComment = '�����˵آͧ�ҹ������: ';
$strDbPrivileges = '�Է����Ш�੾�аҹ������';
$strDBRename = '����¹���Ͱҹ��������';
$strDbSpecific = '੾�аҹ������';
$strDefault = '��һ�����';
$strDefragment = '�Ѵ����º���ҧ';
$strDelete = 'ź';
$strDeleteAndFlush = 'ź����� ������¡����¡���Է���������ѧ�ҡ���.';
$strDeleteAndFlushDescr = '������Ըշ�����������ش ������Ŵ�Է����ҹ���� �е�ͧ�������ѡ����.';
$strDeleted = 'ź���º��������';
$strDeletedRows = '�Ƿ��١ź:';
$strDeleting = '���ѧź %s';
$strDescending = '�ҡ仹���';
$strDescription = '��������´';
$strDictionary = '���ҹء��';
$strDisabled = '�ЧѺ���������';
$strDisplayFeat = '��������ö��ҹ����ʴ���';
$strDisplayOrder = '�ӴѺ����ʴ�:';
$strDisplayPDF = '�ʴ�ʡ��Ңͧ PDF';
$strDoAQuery = '�� "�Ӥ鹨ҡ������ҧ" (wildcard: "%")';
$strDocu = '�͡�����ҧ�ԧ';
$strDoYouReally = '��ͧ��è� ';
$strDrop = '�¹���';
$strDropUsersDb = '�¹�ҹ�����ŷ���ժ������ǡѺ�������.';
$strDumpingData = 'dump ���ҧ';
$strDumpXRows = '������� %s �� ���������� %s';
$strDynamic = '��褧���';

$strEdit = '���';
$strEditPDFPages = '���˹�� PDF';
$strEditPrivileges = '����Է��';
$strEffective = '�ռ�';
$strEmpty = 'ź������';
$strEmptyResultSet = 'MySQL �׹���Ѿ����ҧ���ҡ�Ѻ�� (null / 0 ��).';
$strEnabled = '�Դ������';
$strEnd = '�����ش';
$strEndCut = '����ش�ش�Ѵ';
$strEndRaw = '����ش�����ŴԺ';
$strEnglish = '�ѧ���';
$strEnglishPrivileges = ' �ô��Һ: ���ͧ͢�Է��� MySQL ���ʴ��������ѧ��� ';
$strError = '�Դ��Ҵ';
$strEstonian = '�������';
$strExplain = '͸Ժ�� SQL';
$strExport = '���͡';
$strExtendedInserts = '�á��������¹㹤�������';
$strExtra = '�������';

$strFailedAttempts = '�����������������';
$strField = '��Ŵ�';
$strFieldHasBeenDropped = '�¹��Ŵ� %s �������º��������';
$strFields = '�ӹǹ��Ŵ�';
$strFieldsEnclosedBy = '�������Ŵ����';
$strFieldsEscapedBy = '����ͧ��������Ѻ escape char';
$strFieldsTerminatedBy = '����Ŵ����';
$strFileCouldNotBeRead = '��ҹ��������';
$strFileNameTemplate = '�ٻẺ�ͧ�������';
$strFileNameTemplateRemember = '���ٻẺ';
$strFixed = '�����';
$strFlushTable = '��ҧ���ҧ (flush)';
$strFormat = '�ٻẺ';
$strFormEmpty = '����Ẻ��������� !';
$strFullText = '��駢�ͤ���';
$strFunction = '�ѧ����';

$strGenBy = '���ҧ��';
$strGeneralRelationFeat = '��������ö��ҹ���Ūѹ�����';
$strGenTime = '����㹡�����ҧ';
$strGeorgian = '�������';
$strGerman = '�����ѹ';
$strGlobal = '�ź��';
$strGlobalPrivileges = '�Է��Ẻ�ź��';
$strGlobalValue = '���Ẻ�ź��';
$strGo = 'ŧ���';
$strGrantOption = '�ͺ�Է��';
$strGreek = '��ա';
$strGzip = '"gzipped"';

$strHasBeenAltered = '����¹��������';
$strHasBeenCreated = '���ҧ��������';
$strHaveToShow = '��ͧ���͡����ʴ����ҧ����˹�觤������';
$strHebrew = '�Ժ��';
$strHome = '˹�Һ�ҹ';
$strHomepageOfficial = '���ྨ���ҧ�繷ҧ��âͧ phpMyAdmin';
$strHost = '��ʵ�';
$strHostEmpty = '������ʵ��ѧ��ҧ����!';
$strHungarian = '�ѧ����';

$strIcelandic = '�ͫ��Ź��';
$strId = 'ID';
$strIdxFulltext = '��ͤ������ (fulltext)';
$strIgnore = '���ʹ�';
$strImportFiles = '��������';
$strIndex = '�Ѫ��';
$strIndexes = '�Ѫ��';
$strIndexHasBeenDropped = '�¹�Ѫ�� %s �������º��������';
$strIndexName = '���ʹѪ�� :';
$strIndexType = '��Դ�ͧ�Ѫ�� :';
$strInnodbStat = 'ʶҹТͧ InnoDB';
$strInsecureMySQL = '�ҡ����纤�ҡ�˹��ͧ�س �س����������ʼ�ҹ����Ѻ root ��觨ж١���繪��ͻ����«�����Է�Ծ����.  ��������� MySQL ���ӧҹ���¤�һ����¹�� �Ҩ�١�ء�ء�� �س��è�����������ѹ���ѹ�� ���ͤ�����ʹ���';
$strInsert = '�á';
$strInsertAsNewRow = '�á��������';
$strInsertedRowId = '�á�Ţ��Ш���:';
$strInsertedRows = '�Ƿ��١�á:';
$strInternalRelations = '���Ūѹ����';
$strInUse = '������';

$strJapanese = '�����';
$strJumpToDB = '���ⴴ价��ҹ������ &quot;%s&quot;.';
$strJustDelete = '��ź������͡�ҡ���ҧ�ʴ��Է����Ҷ֧';

$strKeepPass = '��س���������¹���ʼ�ҹ';
$strKeyname = '���ͤ���';
$strKill = '��ҷ��';
$strKorean = '�����';

$strLandscape = '�ǹ͹';
$strLatexCaption = '��͸Ժ�µ��ҧ';
$strLatexContinued = '(���)';
$strLaTeX = 'LaTeX';
$strLatvian = '�ѵ����';
$strLengthSet = '�������/૵*';
$strLimitNumRows = '����¹���˹��';
$strLinesTerminatedBy = '���Ǵ���';
$strLinkNotFound = '��辺�ԧ��';
$strLinksTo = '�������ѧ';
$strLithuanian = '�Ը�����';
$strLocalhost = '�Ť��';
$strLocationTextfile = '���͡����ͤ����ҡ';
$strLogin = '�������к�';
$strLoginInformation = '��������͡�Թ';
$strLogout = '�͡�ҡ�к�';
$strLogPassword = '���ʼ�ҹ:';
$strLogServer = '���������';
$strLogUsername = '���ͼ����:';

$strMaximumSize = '��Ҵ�˭��ش: %s%s';
$strMIME_available_mime = 'MIME-types ���������';
$strMIME_available_transform = '����ŧ������¡����';
$strMIME_description = '��������´';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = '����ҡ���������´����Ѻ����ŧ���.<br />��س��ͺ��������¹���,  %s ������.';
$strMIME_transformation_options = '������͡����ŧ';
$strModifications = '�ѹ�֡���������º��������';
$strModify = '���';
$strModifyIndexTopic = '��䢴Ѫ��';
$strMoveTable = '���µ��ҧ� (database<b>.</b>table):';
$strMoveTableOK = '���ҧ %s �١����� %s ����';
$strMoveTableSameNames = '���µ��ҧ价����������';
$strMultilingual = '��������';
$strMySQLCharset = '�ش����ѡ�� (charset) �ͧ MySQL';
$strMySQLSaid = 'MySQL �ʴ�: ';
$strMySQLShowProcess = '�ʴ��ҹ��������ͧ MySQL';
$strMySQLShowStatus = '�ʴ�ʶҹТͧ MySQL';
$strMySQLShowVars = '�ʴ�������к��ͧ MySQL';

$strName = '����';
$strNext = '����';
$strNo = '���';
$strNoDatabases = '����հҹ������';
$strNoDatabasesSelected = '�ѧ��������͡�ҹ������.';
$strNoDescription = '�������������´';
$strNoDropDatabases = '����� "DROP DATABASE" �١�Դ���';
$strNoExplain = '����ͧ͸Ժ�� SQL';
$strNoFrames = '���������<b>�������</b> �Ъ�������� phpMyAdmin ����¢��';
$strNoIndex = '�ѧ������˹��Ѫ����!';
$strNoIndexPartsDefined = '������˹���ǹ�� �ͧ�Ѫ��!';
$strNoModification = '����ա������¹�ŧ';
$strNone = '�����';
$strNoOptions = '�ٻẺ�������յ�����͡';
$strNoPassword = '��������ʼ�ҹ';
$strNoPhp = '�������� PHP';
$strNoPrivileges = '������Է��';
$strNoRights = '�س������Է�Է�������ҵç���!';
$strNoRowsSelected = '�ѧ��������͡��';
$strNoTablesFound = '��辺���ҧ� � 㹰ҹ������';
$strNotNumber = '��ҹ����������Ţ!';
$strNotOK = '��赡ŧ';
$strNotSet = '��辺���ҧ <b>%s</b> � %s';
$strNoUsersFound = '��辺�������.';
$strNoValidateSQL = '����ͧ��Ǩ�ͺ SQL';
$strNull = '��ҧ���� (null)';
$strNumSearchResultsInTable = '�� %s ���Ѿ����ç㹵��ҧ <i>%s</i>';
$strNumSearchResultsTotal = '<b>���:</b> <i>%s</i> ���Ѿ����ç';
$strNumTables = '���ҧ';

$strOK = '��ŧ';
$strOperations = '��кǹ���';
$strOptimizeTable = '��Ѻ�觵��ҧ';
$strOr = '����';
$strOverhead = '�Թ��������';
$strOverwriteExisting = '��¹�Ѻ����������������';

$strPageNumber = '�����Ţ˹��:';
$strPaperSize = '��Ҵ��д��';
$strPartialText = '��ͤ����ҧ��ǹ';
$strPassword = '���ʼ�ҹ';
$strPasswordChanged = '����¹���ʼ�ҹ�ͧ %s ���º��������';
$strPasswordEmpty = '���ʼ�ҹ�ѧ��ҧ����!';
$strPasswordNotSame = '���ʼ�ҹ���ç�ѹ!';
$strPdfDbSchema = 'schema �ͧ�ҹ������ "%s" - ˹�� %s';
$strPdfInvalidTblName = '����յ��ҧ "%s"!';
$strPdfNoTables = '����յ��ҧ';
$strPerHour = '��ͪ������';
$strPerMinute = '��͹ҷ�';
$strPerSecond = '����Թҷ�';
$strPhoneBook = '��ش���Ѿ��';
$strPHP40203 = '�س���ѧ�� PHP ��� 4.2.3, ����պ�������ç����ǡѺ multi-byte strings (mbstring). ��سҴ���§ҹ��� PHP �����Ţ 19404. �������й����س�� PHP ��蹹��Ѻ phpMyAdmin.';
$strPhp = '���ҧ�� PHP';
$strPHPVersion = '��蹢ͧ PHP';
$strPmaDocumentation = '�͡��á���� phpMyAdmin';
$strPmaUriError = '<b>��ͧ</b>��˹���� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ����͹�ԡ��ê�����¡�͹';
$strPolish = '��Ź��';
$strPortrait = '�ǵ��';
$strPos1 = '�ش�������';
$strPrevious = '��͹˹��';
$strPrimary = '������';
$strPrimaryKeyHasBeenDropped = '�¹�����դ���������º��������';
$strPrimaryKeyName = '���ͧ͢�����դ��� �е�ͧ�� PRIMARY ��ҹ��';
$strPrimaryKeyWarning = '(���ͧ͢�����դ���<b>�е�ͧ��</b> "PRIMARY" ��ҹ��!)';
$strPrint = '�����';
$strPrintView = '�ʴ�';
$strPrivDescAllPrivileges = '����Է�Էء���ҧ ¡��鹡������Է��������� (GRANT).';
$strPrivDescAlter = '͹حҵ�������¹�ç���ҧ�ͧ���ҧ������������.';
$strPrivDescCreateDb = '͹حҵ������ҧ�ҹ������ ��е��ҧ����.';
$strPrivDescCreateTbl = '͹حҵ������ҧ���ҧ����.';
$strPrivDescCreateTmpTable = '͹حҵ������ҧ���ҧ���Ǥ���.';
$strPrivDescDelete = '͹حҵ���ź������';
$strPrivDescDropDb = '͹حҵ����駰ҹ������ ��е��ҧ';
$strPrivDescDropTbl = '͹حҵ����駵��ҧ';
$strPrivDescExecute = '͹حҵ����ѹ stored procedure (����ռ�� MySQL ��蹹��)';
$strPrivDescFile = '͹حҵ������Ң����� ������͡������ 价�����';
$strPrivDescGrant = '͹حҵ������������ ����Է����Ҷ֧ ������ͧ���¡����ҧ�Է������';
$strPrivDescIndex = '͹حҵ������ҧ ��з�� �Ѫ��';
$strPrivDescInsert = '͹حҵ������� ���᷹��� ������';
$strPrivDescLockTables = '͹حҵ�����͡���ҧ����Ѻ�ô�Ѩ�غѹ';
$strPrivDescMaxConnections = '�ӡѴ�ӹǹ��������������� ������������ö�Դ�� ��ͪ������';
$strPrivDescMaxQuestions = '�ӡѴ�ӹǹ�ͧ�Ӥ� ������������ö���ҷ������������� ��ͪ������';
$strPrivDescMaxUpdates = '�ӡѴ�ӹǹ�ͧ����� ��������¹�ŧ���ҧ ���Ͱҹ�������� ������������ö����� ��ͪ������';
$strPrivDescProcess3 = '͹حҵ����������ʢͧ��������';
$strPrivDescProcess4 = '͹حҵ���٤Ӥ鹷��������¡������';
$strPrivDescReferences = '����ռ�� MySQL ��蹹��';
$strPrivDescReload = '͹حҵ������¡���ҡ�˹��ͧ������������� �����ҧᤪ�ͧ���������';
$strPrivDescReplClient = '�ͺ�Է��������� 㹡�ö����� slaves ���� masters �������˹.';
$strPrivDescSelect = '͹حҵ�����ҹ��������.';
$strPrivDescShowDb = '����ö���¡����¡�ðҹ�����ŷ�������';
$strPrivDescShutdown = '͹حҵ���Դ�����������';
$strPrivDescUpdate = '͹حҵ�������¹��������.';
$strPrivDescUsage = '������Է����.';
$strPrivileges = '�Է��';
$strPrivilegesReloaded = '�Է����١���¡���������º��������';
$strProcesses = '����';
$strProcesslist = '��¡������';
$strPutColNames = '�����Ϳ�Ŵ������á';

$strQBE = '�Ӥ鹨ҡ������ҧ';
$strQBEDel = 'ź';
$strQBEIns = '����';
$strQueryFrame = '˹�ҵ�ҧ�Ӥ�';
$strQueryOnDb = '�Ӥ鹺��ҹ������ <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>ʶԵԤӤ�</b>: �� %s �Ӥ� �١��价����������� �Ѻ�����������к�.';
$strQueryTime = '�Ӥ������� %01.4f �Թҷ�';
$strQueryType = '��Դ�Ӥ�';

$strReceived = '���Ѻ';
$strRecords = '����¹';
$strReferentialIntegrity = '��Ǩ�ͺ��������ó�ͧ�����ҧ�֧:';
$strRefresh = '���¡����';
$strRelationalSchema = '���Ūѹ�� ʡ���';
$strRelationNotWorking = '��������ö�����������Ѻ linked Tables ��١�ЧѺ������ ����˵ؼŷ�������� %shere%s';
$strRelations = '���Ūѹ';
$strRelationView = '����ͧ���Ūѹ';
$strReloadingThePrivileges = '��Ѻ��ا�Է����Ҷ֧�����ա�ͺ';
$strRemoveSelectedUsers = '�͹����������͡';
$strRenameTable = '����¹���͵��ҧ��';
$strRenameTableOK = '���ҧ %s ��١����¹������ %s';
$strRepairTable = '���������ҧ';
$strReplaceNULLBy = '᷹��� NULL ��';
$strReplaceTable = '��¹�Ѻ���¢����Ũҡ���';
$strReset = '���������';
$strResourceLimits = '�մ�ӡѴ�ͧ��Ѿ�ҡ�';
$strReType = '���������';
$strRevoke = '�ԡ�͹';
$strRevokeAndDelete = '�ԡ�͹ active privileges �������ҡ����� ���ź���������ѧ�ҡ���.';
$strRevokeAndDeleteDescr = '������ҧ� �ѧ�����Է�� USAGE ������ �������Է�� �ж١���¡�������ա��.';
$strRevokeMessage = '�س���ԡ�͹�Է�Ԣͧ %s';
$strRomanian = '�������';
$strRowLength = '���������';
$strRows = '��';
$strRowsFrom = '�� ������ҡ�Ƿ��';
$strRowSize = ' ��Ҵ�� ';
$strRowsModeFlippedHorizontal = '�ǹ͹ (��ع�������ͧ)';
$strRowsModeHorizontal = '�ǹ͹';
$strRowsModeOptions = '����� %s ��Ы������Ƿء� %s ����';
$strRowsModeVertical = '�ǵ��';
$strRowsStatistic = 'ʶԵԢͧ��';
$strRunning = '�ӧҹ���躹 %s';
$strRunQuery = '�����żŤӤ�';
$strRunSQLQuery = '�����żŤӤ鹺��ҹ������ %s';
$strRussian = '������';

$strSave = '�ѹ�֡';
$strScaleFactorSmall = '�ѵ����͹����Թ� ���ШѴ���ʡ��������˹������';
$strSearch = '����';
$strSearchFormTitle = '����㹰ҹ������';
$strSearchInTables = '㹵��ҧ:';
$strSearchNeedle = '�� ���� ��ҷ���ͧ��ä��� (wildcard: "%"):';
$strSearchOption1 = '���ҧ����˹�觤�';
$strSearchOption2 = '�ء��';
$strSearchOption3 = '����͹������';
$strSearchOption4 = '�ٻẺ�Ӿ�ͧ (regular expression)';
$strSearchResultsFor = '�š�ä��� "<i>%s</i>" %s:';
$strSearchType = '��:';
$strSelectADb = '�ô���͡�ҹ������';
$strSelectAll = '���͡������';
$strSelectFields = '���͡��Ŵ� (���ҧ����˹�觿�Ŵ�):';
$strSelectNumRows = '㹤Ӥ�';
$strSelectTables = '���͡���ҧ';
$strSend = '���������';
$strSent = '�١��';
$strServer = '���������';
$strServerChoice = '������͡���������';
$strServerNotResponding = '���������ѧ��������ͺʹͧ';
$strServerStatus = '�������ѹ���';
$strServerStatusUptime = '��������� MySQL ����ѹ�������� %s. ������͹ %s.';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>��è�Ҩâͧ���������</b>: ���ҧ����ʴ�ʶԵԢͧ��è�Ҩú����͢��� ����Ѻ��������� MySQL ��� ������ѹ������ӧҹ.';
$strServerVars = '����� ��Ф�ҡ�˹� �ͧ���������';
$strServerVersion = '��蹢ͧ���������';
$strSessionValue = '����ʪ��';
$strSetEnumVal = '��Ҫ�Դ�ͧ��Ŵ��� "enum" ���� "set" �ô����ҵ���ٻẺ: \'a\',\'b\',\'c\'...<br />��ҵ�ͧ����������ͧ���� backslash ("\\") ���� �ѭ��С������� ("\'") ����㹤������ҹ�� ����������ͧ���� ����Ū ��˹�� (������ҧ: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = '�ʴ�';
$strShowAll = '�ʴ�������';
$strShowColor = '�ʴ���';
$strShowDatadictAs = '�ٻẺ���ҹء��������';
$strShowFullQueries = '�ʴ��Ӥ�Ẻ���';
$strShowGrid = '�ʴ���Դ';
$strShowingRecords = '�ʴ�����¹��� ';
$strShowPHPInfo = '�ʴ������Ţͧ PHP';
$strShowTableDimension = '�ʴ��ԵԢͧ���ҧ';
$strShowTables = '�ʴ����ҧ';
$strShowThisQuery = ' �ʴ��Ӥ鹹���ա�� ';
$strSimplifiedChinese = '�չ (�蹴Թ�˭�)';
$strSingly = '(�����)';
$strSize = '��Ҵ';
$strSlovak = '����ѡ';
$strSlovenian = '��������';
$strSort = '���§';
$strSortByKey = '���§�¤���';
$strSpaceUsage = '���ͷ������';
$strSpanish = '�໹';
$strSplitWordsWithSpace = '�Ӷ١�觴��ª�ͧ��ҧ (" ").';
$strSQLParserBugMessage = '�Ҩ���ա������¹�ŧ�ҧ���ҧ ���س������ѹ�繢�ͼԴ��Ҵ�ͧ�����ҹ����� SQL. ��سҵ�Ǩ�ͺ�Ӥ鹢ͧ�س������ǹ ��੾�С���Դ/�Դ����ͧ���¤Ӿٴ (quotes) ���١��ͧ. �ա���˵�˹�觷��������� �س�Ҩ���Ѿ��Ŵ���亹��բ�ҧ�͡��ǧ�ͧ����ͧ���¤Ӿٴ. �س����ö�����ͧ�Ӥ鹢ͧ�س������ҹ���Ź�ͧ MySQL ��觤س�Ҩ�о���ͼԴ��Ҵ�ҧ���ҧ㹹��. �ҡ��������� MySQL �駢�ͼԴ��Ҵ��, ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��. ��Ҥس�ѧ���ѭ�ҡѺ parser � phpMyAdmin ���� ����辺�ѭ�ҡѺ parser 㹤���ҹ���Ź�, ����ͧŴ������Ǣͧ�Ӥ� SQL ŧ ����з������ͤӤ� SQL ������ ����ѧ������Դ�ѭ�������ա, �����駢�ͼԴ��Ҵ�ѧ������ҷ�����, ���ѹ�Ҿ�����Ѻ��Ǣ����ŷ��س�� �����ҡ��ǹ�ͧ CUT ��ҹ��ҧ.';
$strSQLParserUserError = '�Ҩ���բ�ͼԴ��Ҵ�ҧ���ҧ㹤Ӥ� SQL �ͧ�س. �ҡ MySQL server ���駢�ͼԴ��Ҵ�Ҵ�ҹ��ҧ��� ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��';
$strSQLQuery = '�Ӥ� SQL';
$strSQLResult = '���Ѿ�� SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '���͵�������١��ͧ';
$strSQPBugUnclosedQuote = '�����Դ����ͧ���¤Ӿٴ';
$strSQPBugUnknownPunctuation = '������ͧ������ä�͹���������ѡ';
$strStatCheckTime = '��Ǩ�ͺ�����ش���������';
$strStatCreateTime = '���ҧ�����';
$strStatement = '�����';
$strStatUpdateTime = '��Ѻ��ا�����ش���������';
$strStatus = 'ʶҹ�';
$strStrucCSV = '������ CSV (��蹴�������ͧ�����١��� ",")';
$strStrucData = '����ç���ҧ��Т�����';
$strStrucExcelCSV = '������ CSV ����Ѻ���ëͿ�������';
$strStrucOnly = '੾���ç���ҧ';
$strStructPropose = '�ʹ��ç���ҧ���ҧ';
$strStructure = '�ç���ҧ';
$strSubmit = '��';
$strSuccess = '�ӤӤ��������º��������';
$strSum = '�����';
$strSwedish = '���ഹ';
$strSwitchToTable = '��Ѻ价����ҧ���١���������';

$strTable = '���ҧ ';
$strTableComments = '�����˵آͧ���ҧ';
$strTableEmpty = '���͵��ҧ�ѧ��ҧ����!';
$strTableHasBeenDropped = '�¹���ҧ %s �������º��������';
$strTableHasBeenEmptied = 'ź������㹵��ҧ %s ���º��������';
$strTableHasBeenFlushed = '��ҧ���ҧ %s ���º��������';
$strTableMaintenance = '��ô����ѡ�ҵ��ҧ';
$strTableOfContents = '��úѭ';
$strTableOptions = '������͡���ҧ';
$strTables = '%s ���ҧ';
$strTableStructure = '�ç���ҧ���ҧ';
$strTblPrivileges = '�Է����Ш�੾�е��ҧ';
$strTextAreaLength = '���ͧ�ҡ������Ǣͧ�ѹ <br />��Ŵ��� ����Ҩ�����';
$strThai = '��';
$strTheme = '˹�ҵ�';
$strThisHost = '��ʵ���';
$strThreadSuccessfullyKilled = '�ô %s �١��������º��������.';
$strTime = '����';
$strTotal = '������';
$strTotalUC = '���';
$strTraditionalChinese = '�չ (����ѹ)';
$strTraditionalSpanish = '�໹ (������)';
$strTraffic = '��è�Ҩ�';
$strTransformation_image_jpeg__inline = '�ʴ��ٻ��Ҵ��硷�衴���仴��Ҿ�˭���; ������͡: �������ҧ, �����٧ ˹����繾ԡ�� (���Ѵ��ǹ���)';
$strTransformation_image_jpeg__link = '�ʴ��ԧ����ѧ�ٻ (��ǹ���Ŵ������亹����µç/blob).';
$strTransformation_image_png__inline = '���ٻ��Դ image/jpeg �ѹ��';
$strTransformation_text_plain__formatted = 'ʧǹ��èѴ�ٻẺ���㹿�Ŵ���� -- ����á escape character.';
$strTruncateQueries = '�Ѵ�͹�Ӥ鹷���ʴ�';
$strTurkish = '��á�';
$strType = '��Դ';

$strUkrainian = '���ù';
$strUncheckAll = '������͡���';
$strUnicode = '�ٹ���';
$strUnique = '�͡�ѡɳ�';
$strUnknown = '����к�';
$strUnselectAll = '������͡���';
$strUpdatePrivMessage = '�س���Ѻ��ا�Է������Ѻ %s ����';
$strUpdateProfileMessage = '��Ѻ��ا��������º��������';
$strUpdateQuery = '��Ѻ��ا�Ӥ�';
$strUpdComTab = '�ô��ҹ�͡�������ǡѺ �Ըա�û�Ѻ��ا���ҧ Column_comments (�������˵آͧ�������) �ͧ�س';
$strUsage = '��ҹ';
$strUseBackquotes = '��� \'backqoute\' ���Ѻ���͵��ҧ��п�Ŵ�';
$strUser = '�����';
$strUserAlreadyExists = '�ռ���� %s ��������!';
$strUserEmpty = '���ͼ�����ѧ��ҧ����!';
$strUserName = '���ͼ����';
$strUserNotFound = '��辺����������͡㹵��ҧ�ʴ��Է��';
$strUserOverview = '�����ŷ���仢ͧ�����';
$strUsersDeleted = 'ź����������͡������º��������.';
$strUsersHavingAccessToDb = '��������Է����Ҷ֧�ҹ������ &quot;%s&quot;';
$strUseTables = '����ҧ';
$strUseTextField = '���ͧ����ͤ��� (text field)';
$strUseThisValue = '���ҹ��';

$strValidateSQL = '��Ǩ�ͺ SQL';
$strValidatorError = '�������ö�������ǵ�Ǩ�ͺ SQL ��. ��سҵ�Ǩ�ͺ��� �س��Դ��� php extensions ������ �ѧ���͸Ժ������ %sdocumentation%s ���º��������';
$strValue = '���';
$strVar = '�����';
$strViewDump = '���ç���ҧ�ͧ���ҧ';
$strViewDumpDB = '���ç���ҧ�ͧ�ҹ������';

$strWebServerUploadDirectory = '��á��������Ѻ�Ѿ��Ŵ ���������������';
$strWebServerUploadDirectoryError = '�������ö��ҹ ��á���շ�����������Ѻ�Ѿ��Ŵ��';
$strWelcome = '%s �Թ�յ�͹�Ѻ';
$strWestEuropean = '���û���ѹ��';
$strWildcard = '�������';
$strWithChecked = '�ӡѺ������͡:';
$strWrongUser = '͹حҵ������������� ���ͼ�����������ʼ�ҹ�Դ';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '�ô��Һ: �������¹�������ҹ���� 0 (�ٹ��) �����¶֧ ����բմ�ӡѴ.';
$strZip = '"�١�պ�Ѵ���� (zip)"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
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

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDelayedInserts = '�� delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushPrivilegesNote = '�ô��Һ: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

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
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
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
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
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
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strPrivDescSuper = '͹حҵ�����������, �����Ҩӹǹ����������ͨж֧�дѺ�٧�ش����; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
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
$strSQLExportType = 'Export type';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = '������ Native MS Excel';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTakeIt = 'take it';  //to translate
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
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__external = '����Ѻ �չء�� ��ҹ��: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTransformation_text_plain__substr = '�ʴ���ͤ����ҧ��ǹ��ҹ��. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseHostTable = '�� Host Table';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
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
