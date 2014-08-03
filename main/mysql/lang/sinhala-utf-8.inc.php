<?php
/* $Id: sinhala-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */
// 
// by malindahs

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

// MySQL manual language definition, this is optional, en will be used 
// if not defined
$mysql_4_1_doc_lang = 'en';
$mysql_5_0_doc_lang = 'en';
$mysql_5_1_doc_lang = 'en';

$day_of_week = array('ඉරිදා', 'සදුදා', 'අගහරු‍වදා', 'බදාදා', 'බ්‍රහස්පතින්දා', 'සිකුරාදා:', 'සෙනසුරාදා');
$month = array('ජනවාරි', 'පෙබරවාරි', 'මාර්තු', 'අ‍ප්‍රේල්', 'මැයි', 'ජූනි', 'ජූලි', 'අගෝස්තු', 'සැප්තැම්බර්', 'ඔක්තෝම්බර්', 'නොවැම්බර්', 'දෙසැම්බර්');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';
$timespanfmt = 'දින %s, පැය %s, මිනිත්තු %s සහ තප්පර %s';

$strAbortedClients = 'අත්හැර දමන ලදි';
$strAccessDenied = 'පිවිසුම වලක්වා ඇත';
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';
$strAction = 'ක්‍රියාව';
$strAddAutoIncrement = 'AUTO_INCREMENT අගයක් එක් කරන්න';
$strAddClause = '%s එක් කරන්න';
$strAddConstraints = 'සීමා බාධවන් එක් කරන්න';
$strAddDeleteColumn = 'ක්ෂේත්‍ර තීර එක් කරන්න/ඉවත් කරන්න';
$strAddDeleteRow = 'නිර්ණායක පේළියක් එක් කරන්න/ඉවත් කරන්න';
$strAddFields = '%s ක්ෂේත්‍ර(යක්) එක් කරන්න';
$strAddHeaderComment = 'හෙඩිමට වෙනත් විස්තර එක් කරන්න (\\n පේළි වි‍භේදනය)';
$strAddIntoComments = 'විස්තර තුලට එක් කරන්න';
$strAddNewField = 'නව ක්ෂේත්‍රයක් එක් කරන්න';
$strAddPrivilegesOnDb = 'පහත දත්තගබඩාවට වරප්‍රසාද එක් කරන්න';
$strAddPrivilegesOnTbl = 'පහත වගුවට වරප්‍රසාද එක් කරන්න';
$strAddSearchConditions = 'සෙවීම් කොන්දේසි එක් කරන්න ("where" වාක්‍යාංශය යටතේ):';
$strAddToIndex = '&nbsp;%s&nbsp;තීර(ය) සූචියට එක් කරන්න';
$strAddUser = 'නව භාවිතා කරන්නේක් එක් කරන්න';
$strAddUserMessage = 'ඔබ නව භාවිතා කරන්නනෙක් එක් කරන ලදි.';
$strAdministration = 'පරිපාලනය';
$strAffectedRows = 'බලපෑමට ලක් වූ පේළි:';
$strAfter = '%s ට පසු';
$strAfterInsertBack = 'පෙර පිටුවට ආපසු යන්න';
$strAfterInsertNewInsert = 'නව පේළියක් එක් කරන්න';
$strAfterInsertNext = 'මීලඟ පේළිය එක් කරන්න';
$strAfterInsertSame = 'මෙම පිටුව වෙත ආපසු යන්න';
$strAll = 'සියලු';
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';
$strAllTableSameWidth = 'එකම ප්‍රමාණයේ සියලු වගු පෙන්වන්න?';
$strAlterOrderBy = 'අනුව වගු අනුපිළිවෙල වෙනස් කරන්න';
$strAnalyzeTable = 'වගුව විශ්ලේෂණය කරන්න';
$strAnd = 'සහ';
$strAndThen = 'සහ එවිට';
$strAnIndex = '%s සඳහා සූචියක් එක්කරන ලදි';
$strAny = 'ඕනෑම';
$strAnyHost = 'ඕනෑම දායකයෙක්';
$strAnyUser = 'ඕනෑම භාවිතා කරන්නෙක්';
$strApproximateCount = 'සමහර විට ආසන්න වශයෙන්. FAQ 3.11 බලන්න';
$strAPrimaryKey = '%s ට මූලික යතුරක් එක් කරන ලදි';
$strArabic = 'අරාබියානු';
$strArmenian = 'ඇමෙරිකානු';
$strAscending = 'ආරෝහන';
$strAtBeginningOfTable = 'වගුව මුලදී';
$strAtEndOfTable = 'වගුව අවසනදී';
$strAttr = 'ගුණාංග';
$strAutomaticLayout = 'ස්වයංක්‍රීය සැලැස්ම';

$strBack = 'ආපසු';
$strBaltic = 'බෝල්ටික';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'ද්වීමය';
$strBinaryDoNotEdit = 'ද්වීමය - සංස්කරණය නොකරන්න';
$strBinaryLog = 'ද්වීමය ලොගය';
$strBinLogEventType = 'සිදුවීමේ වර්ගය';
$strBinLogInfo = 'තොරතුරු';
$strBinLogName = 'ලොග් නම';
$strBinLogOriginalPosition = 'මුල් පිහිටුම';
$strBinLogPosition = 'පිහිටුම';
$strBinLogServerId = 'සර්වරයේ හැඳුනුම් අංකය';
$strBookmarkAllUsers = 'සියලු භාවිතා කරන්නනට මෙම පොත් සලකුණට පිවිසීමට ඉඩ දෙන්න';
$strBookmarkCreated = '%s පොත් සලකුණ සාදන ලදි';
$strBookmarkDeleted = 'පොත් සලකුණ ඉවත් කරන ලදි.';
$strBookmarkLabel = 'ලේබලය';
$strBookmarkQuery = 'පොත් සලකුණු කරන ලද SQL විමසුම';
$strBookmarkReplace = 'එකම නම ඇති පොත් සලකුණ ප්‍රතිස්ථාපනය කරන්න';
$strBookmarkThis = 'මෙම SQL විමසුම පොත් සලකුණුගත කරන්න';
$strBookmarkView = 'දර්ශනය කිරීම පමණි';
$strBrowse = 'බ්‍රවුස් කරන්න';
$strBrowseDistinctValues = 'එකිනෙකට වෙනස් අගයන් බ්‍රවුස් කරන්න';
$strBrowseForeignValues = 'අන්‍ය අගයන් බ්‍රවුස් කරන්න';
$strBufferPoolActivity = 'Buffer Pool Activity';
$strBufferPool = 'Buffer Pool';
$strBufferPoolUsage = 'Buffer Pool Usage';
$strBufferReadMissesInPercent = 'Read misses in %';
$strBufferReadMisses = 'Read misses';
$strBufferWriteWaitsInPercent = 'Write waits in %';
$strBufferWriteWaits = 'Write waits';
$strBulgarian = 'බල්ගේරියානු';
$strBusyPages = 'කාර්ය බහුල පිටු';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this PHP version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a newer PHP version. See PHP bug report %s for details.';
$strBzip = '"bzipp ගතකරන ලදි"';

$strCalendar = 'දින දර්ශනය';
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';
$strCannotLogin = 'MySQL සර්වරයට ලොග් විය නොහැක';
$strCantLoad = 'Cannot load [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] extension. Please check your PHP configuration.';
$strCantLoadRecodeIconv = 'Couldn\'t load the iconv or recode extension needed for charset conversion. Either configure PHP to enable these extensions or disable charset conversion in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!';
$strCantUseRecodeIconv = 'Couldn\'t use either the iconv, libiconv or recode_string functions, although the necessary extensions appear to be loaded. Check your PHP configuration.';
$strCardinality = 'Cardinality';
$strCaseInsensitive = 'පුවරු සංවේදී නොවන';
$strCaseSensitive = 'පුවරු සංවේදී';
$strCentralEuropean = 'මධ්‍යම යුරෝපියානු';
$strChange = 'වෙනස් කරන්න';
$strChangeCopyModeCopy = '... පැරණි එක තබා ගන්න.';
$strChangeCopyMode = 'සහ එකම වරප්‍රසාද සහිතව නව භාවිතා කරන්නෙක් එක් කරන්න...';
$strChangeCopyModeDeleteAndReload = '.. භාවිතා කරන්නන්ගේ වගුවෙන් පැරණි එක ඉවත් කර වරප්‍රසාද නැවත අලුත් කරන්න.';
$strChangeCopyModeJustDelete = ' ... භාවිතා කරන්නන්ගේ වගුවෙන් පැරණි එක ඉවත් කරන්න.';
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';
$strChangeCopyUser = 'ලොගින් තොරතුරු වෙනස් කරන්න / භාවිතා කරන්නා පිටපත් කරන්න';
$strChangeDisplay = 'පෙන්වීම සඳහා ක්ෂේත්‍රයක් ‍තෝරාගන්න';
$strChangePassword = 'මුරපදය වෙනස් කරන්න';
$strCharset = 'අක්ෂර කට්ටලය';
$strCharsetOfFile = 'ගොනුවේ අක්ෂර කට්ටලය:';
$strCharsetsAndCollations = 'අක්ෂර කට්ටල සහ ‍Collations';
$strCharsets = 'අක්ෂර කට්ටලය';
$strCheckAll = 'සියල්ල කතිර කොටුගත කරන්න';
$strCheckOverhead = 'Check tables having overhead';
$strCheckPrivs = 'වරප්‍රසාද පරීක්ෂා කරන්න';
$strCheckPrivsLong = '&quot;%s&quot; දත්තගබඩාව සඳහා වරප්‍රසාද පරීක්ෂා කරන්න.';
$strCheckTable = 'වගුව පරීක්ෂා කරන්න';
$strChoosePage = 'සංස්කරණය සඳහා පිටුවක් තෝරාගන්න';
$strColComFeat = 'තීර විස්තර පෙන්වීම';
$strCollation = 'Collation';
$strColumnNames = 'තීර නම්';
$strColumnPrivileges = 'Column-specific privileges';
$strCommand = 'විධානය';
$strComments = 'විස්තරය';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';
$strCompleteInserts = 'Complete inserts';
$strCompression = 'Compression';
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if PHP finds a parse error in it or PHP cannot find the file.<br />Please call the configuration file directly using the link below and read the PHP error message(s) that you receive. In most cases a quote or a semicolon is missing somewhere.<br />If you receive a blank page, everything is fine.';
$strConfigureTableCoord = 'Please configure the coordinates for table %s';
$strConnectionError = 'සම්බන්ධ විය නොහැක : වලංගු නොවන සැකසුමකි.';
$strConnections = 'සම්බන්ධතා';
$strConstraintsForDumped = 'නික්ෂේපනය කරන ලද වගු සඳහා සීමා බාධක';
$strConstraintsForTable = 'වගුව සඳහා සීමා බාධක';
$strCookiesRequired = 'මෙම ස්ථානය පසු කිරීම සඳහා කුකීස් - Cookies සක්‍රිය කල යුතුයි.';
$strCopy = 'පිටපත් කරන්න';
$strCopyDatabaseOK = '%s දත්තගබඩාව %s වෙතට පිටපත් කරන ලදි';
$strCopyTable = 'වගුව (දත්තගබඩාව<b>.</b>වගුව) වෙතට පිටපත් කරන්න:';
$strCopyTableOK = '%s වගුව %s වෙතට පිටපත් කරන ලදි.';
$strCopyTableSameNames = 'එම වගුවටම පිටපත් කල නොහැක!';
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.';
$strCreate = 'සාදන්න';
$strCreateDatabaseBeforeCopying = 'පිටපත් කිරීමට ප්‍රථම දත්තගබඩාවක් සාදන්න';
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'නව සූචියක් සාදන්න';
$strCreateNewDatabase = 'නව දත්තගබඩාවක් සාදන්න';
$strCreateNewTable = '%s දත්තගබඩාවේ නව වගුවක් සාදන්න';
$strCreatePage = 'නව පිටුවක් සාදන්න';
$strCreatePdfFeat = 'PDF සෑදීම';
$strCreateUserDatabase = 'භාවිතා කරන්නා සඳහා දත්තගබඩාව';
$strCreateUserDatabaseName = 'එකම නමින් දත්තගබඩාවක සාදා සියලු වරප්‍රසාද එයට දෙන්න';
$strCreateUserDatabaseNone = 'කිසිවක් නැත';
$strCreateUserDatabaseWildcard = 'අභිමත ආදේශක නාමයන් සඳහා සියලු වරප්‍රසාද දෙන්න (භාවිත නාමය_%)';
$strCreationDates = 'සෑදීම/යාවත් කාලීන/පරීක්ෂා කිරීමේ දින';
$strCriteria = 'නිර්ණායක';
$strCroatian = 'ක්‍රොයේශියානු';
$strCSV = 'CSV';
$strCyrillic = 'සිරිලික්';
$strCzech = 'චෙකොස්ලෝවැකියානු';
$strCzechSlovak = 'චෙකොස්ලෝවැකියානු-ස්ලෝවැකියානු';

$strDanish = 'ඩෙන්මාර්කියානු';
$strDatabase = 'දත්තගබඩාව';
$strDatabaseEmpty = 'දත්තගබඩා නම හිස්ව පවතී!';
$strDatabaseExportOptions = 'දත්තගබඩා අපනයන විකල්ප';
$strDatabaseHasBeenDropped = '%s දත්තගබඩාව හලන ලදි.';
$strDatabases = 'දත්තගබඩා';
$strDatabasesDropped = '%s දත්තගබඩාව සාර්ථකව හලන ලදි.';
$strDatabasesStats = 'දත්තගබඩා සංඛ්‍යා ලේඛන';
$strDatabasesStatsDisable = 'සංඛ්‍යා ලේඛන අක්‍රිය කරන්න';
$strDatabasesStatsEnable = 'සංඛ්‍යා ලේඛන සක්‍රිය කරන්න';
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.';
$strData = 'දත්ත';
$strDataDict = 'දත්ත කෝෂය';
$strDataOnly = 'දත්ත පමණයි';
$strDataPages = 'දත්ත අඩංගු පිටු';
$strDBComment = 'දත්තගබඩා විස්තර: ';
$strDBCopy = 'වෙත දත්තගබඩාව පිටවත් කරන්න';
$strDbPrivileges = 'දත්තගබඩා විශේෂිත වරප්‍රසාද';
$strDBRename = 'බවට දත්තගබඩාවේ නම වෙනස් කරන්න';
$strDbSpecific = 'දත්තගබඩා විශේෂිත';
$strDefault = 'සාමාන්‍යයෙන් පවතින';
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';
$strDefragment = 'Defragment table';
$strDelayedInserts = 'ප්‍රමාද කරන ලද ඇතුල් කිරීම භාවිතා කරන්න';
$strDeleteAndFlush = 'භාවිතා කරන්නා ඉවත් කර ඉන්පසු වරප්‍රසාද නැවත අලුත් කරන්න.';
$strDeleteAndFlushDescr = 'වඩාත්ම නිවැරදි ක්‍රමයයි. නමුත් වරප්‍රසාද නැවත අලුත් කිරීම සඳහා කාලයක් ගතවේ.';
$strDelete = 'ඉවත් කරන්න';
$strDeletedRows = 'ඉවත් කරන ලද පේළි:';
$strDeleted = 'පෙළ ඉවත් කරන ලදි';
$strDeleteNoUsersSelected = 'ඉවත් කිරීම සඳහා භාවිතා කරන්නන් කිසිවෙක් තෝරාගෙන නොමැත!';
$strDeleting = '%s ඉවත් කරමින් පවතී';
$strDelimiter = 'පරිසීමකය';
$strDelOld = 'The current page has references to tables that no longer exist. Would you like to delete those references?';
$strDescending = 'අවරෝහන';
$strDescription = 'විස්තරය';
$strDictionary = 'කෝෂය';
$strDirtyPages = 'අපවිත්‍ර පිටු';
$strDisabled = 'අක්‍රිය කරන ලද';
$strDisableForeignChecks = 'අන්‍ය යතුරු පරීක්ෂා අක්‍රිය කරන්න';
$strDisplayFeat = 'දර්ශන ලක්ෂණ';
$strDisplayOrder = 'දර්ශනය කිරීමේ අනුපිළිවෙල:';
$strDisplayPDF = 'PDF නිරූපනය පෙන්වන්න';
$strDoAQuery = 'Do a "query by example" (wildcard: "%")';
$strDocu = 'ලියකියවිලි';
$strDoYouReally = 'ඔබට ඇත්තෙන්ම අවශ්‍යද';
$strDropDatabaseStrongWarning = 'ඔබ සූදානම් වන්නේ සම්පූර්ණ දත්තගබඩාවක් විනාශකර දැමීමටයි!';
$strDrop = 'හලන්න';
$strDropUsersDb = 'භාවිතා කරන්නන් හා සමාන නම් ඇති දත්තගබඩා හලන්න.';
$strDumpingData = 'වගු සඳහා නික්ෂේප දත්ත';
$strDumpSaved = '%s ගොනුවට නික්ෂේප දත්ත සේව් කරන ලදි.';
$strDumpXRows = 'Dump %s row(s) starting at record # %s.';
$strDynamic = 'ගතික';

$strEdit = 'සංස්කරණය කරන්න';
$strEditPDFPages = 'PDF පිටු සංස්කරණය කරන්න';
$strEditPrivileges = 'වරප්‍රසාද සංස්කරණය කරන්න';
$strEffective = 'Effective';
$strEmpty = 'හිස්';
$strEmptyResultSet = 'MySQL returned an empty result set (i.e. zero rows).';
$strEnabled = 'සක්‍රිය කරන් ලද';
$strEncloseInTransaction = 'Enclose export in a transaction';
$strEndCut = 'END CUT';
$strEnd = 'අවසානය‍';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s is available on this MySQL server.';
$strEngineDisabled = '%s has been disabled for this MySQL server.';
$strEngines = 'යන්ත්‍රයන්';
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';
$strEnglish = 'ඉංග්‍රීසි';
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';
$strError = 'දෝෂය';
$strErrorInZipFile = 'සිප් ආරක්ෂණයේ දෝෂයක් ඇත:';
$strErrorRenamingTable = '%1$s සිට %2$s දක්වා වගුවේ නම් වෙනස් කිරීමේ දෝෂයක් ඇත';
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';
$strEsperanto = 'Esperanto';
$strEstonian = 'එස්තෝනියානු';
$strExcelEdition = 'එක්සෙල් සංස්කරණය';
$strExecuteBookmarked = 'Execute bookmarked query';
$strExplain = 'SQL ය පහදන්න ';
$strExport = 'අපනයනය';
$strExportMustBeFile = 'Selected export type has to be saved in file!';
$strExtendedInserts = 'Extended inserts';
$strExtra = 'අතිරේක';

$strFailedAttempts = 'අසාර්ථක උත්සාහයන්';
$strField = 'ක්ෂේත්‍රය';
$strFieldHasBeenDropped = '%s ක්ෂේත්‍රය ඉවත් කරන ලදි';
$strFieldsEnclosedBy = 'Fields enclosed by';
$strFieldsEscapedBy = 'Fields escaped by';
$strFields = 'ක්ෂේත්‍ර';
$strFieldsTerminatedBy = 'Fields terminated by';
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';
$strFileCouldNotBeRead = 'ගොනුව කියවිය නොහැක';
$strFileNameTemplateDescriptionDatabase = 'දත්තගබඩාවේ නම';
$strFileNameTemplateDescriptionServer = 'සර්වරයේ නම';
$strFileNameTemplateDescriptionTable = 'වගුවේ නම';
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';
$strFileNameTemplate = 'ෆයිල් නම් ටෙම්ප්ලේටය';
$strFileNameTemplateRemember = 'ටෙම්ප්ලේටය මතක තබා ගන්න';
$strFileToImport = 'ආනයනය සඳහා වූ ගොනුව';
$strFixed = 'ස්ථිර';
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of these tables may differ from the privileges the server uses, if they have been changed manually. In this case, you should %sreload the privileges%s before you continue.';
$strFlushQueryCache = 'Flush query cache';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFlushTables = 'Flush (close) all tables';
$strFontSize = 'ෆොන්ට් එකෙහි ප්‍රමාණය';
$strFormat = 'ආකෘතිය';
$strFormEmpty = 'පෝරම‍යේ අස්ථනගත වූ අගයන් ඇත!';
$strFreePages = 'නිදහස් පිටු';
$strFullText = 'සම්පූර්ණ පාඨ';
$strFunction = 'ශ්‍රිතය';
$strFunctions = 'ශ්‍රිත';

$strGenBy = 'උත්පාදනය කරන ලද්දේ';
$strGeneralRelationFeat = 'General relation features';
$strGenerate = 'උත්පාදනය කරන්න';
$strGeneratePassword = 'මුරපදය උත්පාදනය කරන්න';
$strGenTime = 'උත්පාදන වේලාව';
$strGeorgian = 'ජෝජියානු‍';
$strGerman = 'ජර්මානු';
$strGlobal = 'ගෝලීම';
$strGlobalPrivileges = 'ගෝලීය වරප්‍රසාද';
$strGlobalValue = 'ගෝලීය අගය';
$strGo = 'යන්න';
$strGrantOption = 'ප්‍රදානය කරන්න';
$strGreek = 'ග්‍රීක්';
$strGzip = '"gzipp ගත කරන ලදි"';

$strHandler = 'Handler';
$strHasBeenAltered = 'වෙනස් කරන ලදි.';
$strHasBeenCreated = 'සාදන ලදි.';
$strHaveToShow = 'පෙන්වීම සඳහා අවම වශයෙන් එක් තීරයක්වත් තෝරාගත යුතුයි';
$strHebrew = 'හීබෲ';
$strHome = 'මුල් පිටුව';
$strHomepageOfficial = 'නිල phpMyAdmin මුල් පිටුව';
$strHostEmpty = 'දාරක නම හිස්ව පවතී!';
$strHost = 'දායකයා';
$strHTMLExcel = 'මෛ‍ක්‍රොසොෆ්ට් එක්සෙල් 2000';
$strHTMLWord = 'මෛක්‍රොසොෆ්ට් වර්ඩ් 2000';
$strHungarian = 'හංගේරියානු';

$strIcelandic = 'අයිස්ලන්තියානු';
$strId = 'හැඳුනුම් අංකය (ID)';
$strIdxFulltext = 'සම්පූර්ණ පාඨය';
$strIgnoreDuplicates = 'Ignore duplicate rows';
$strIgnore = 'අත්හැර දමන්න';
$strIgnoreInserts = 'Use ignore inserts';
$strImportFiles = 'ගොනු ආනයනය';
$strImportFormat = 'ආනයනය කරන ලද ගොනුවේ ආකෘතිය';
$strImport = 'ආනයනය';
$strImportSuccessfullyFinished = 'ආනයනය සාර්ථකව අවසන් කරන ලදි, විමසුම්%d ක්‍රියාත්මක කරන ලදි.';
$strIndexes = 'සූචියන්';
$strIndexHasBeenDropped = '%s සූචිය හලන ලදි';
$strIndex = 'සූචිය';
$strIndexName = 'සූචියේ නම:';
$strIndexType = 'සූචි වර්ගය:';
$strIndexWarningTable = 'Problems with indexes of table `%s`';
$strInnoDBAutoextendIncrement = 'Autoextend increment';
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';
$strInnoDBBufferPoolSize = 'Buffer pool size';
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';
$strInnoDBDataFilePath = 'දත්ත ගොනු';
$strInnoDBDataHomeDir = 'දත්ත මුල් පිටුව';
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';
$strInnoDBPages = 'පිටු';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';
$strInsertAsNewRow = 'Insert as new row';
$strInsertedRowId = 'ඇතුලත් කරන ලද පේළි අංකය:';
$strInsertedRows = 'ඇතුලත් කරන ලද පේළි:';
$strInsert = 'ඇතුල් කරන්න';
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';
$strInternalRelations = 'Internal relations';
$strInUse = 'භාවිතා වෙමින් පවතී';
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';
$strInvalidColumnCount = 'Column count has to be larger than zero.';
$strInvalidColumn = 'Invalid column (%s) specified!';
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';
$strInvalidDatabase = 'වලංගු නොවන දත්තගබඩාව';
$strInvalidFieldAddCount = 'ඔබ අවම වශයෙන් එක් ක්ෂේත්‍රයක්වත් එක් කල යුතුයි.';
$strInvalidFieldCount = 'වගුවේ අවම වශයෙන් එක් ක්ෂේත්‍රයක්වත් තිබිය යුතුයි.';
$strInvalidLDIImport = 'This plugin does not support compressed imports!';
$strInvalidRowNumber = '%d is not valid row number.';
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';
$strInvalidServerIndex = 'Invalid server index: "%s"';
$strInvalidTableName = 'වලංගු නොවන වගු නම';

$strJapanese = 'ජපන්';
$strJoins = 'Joins';
$strJumpToDB = '&quot;%s&quot; දත්තගබඩාව වෙත යන්න .';
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.';
$strJustDelete = 'වරප්‍රසාද වගුවෙන් භාවිතා කරන්නන් ඉවත් කරන්න.';

$strKeepPass = 'මුරපදය වෙනස් නොකරන්න';
$strKeyCache = 'යතුරු කෑෂ් කිරීම';
$strKeyname = 'යතුරු නම';
$strKill = 'Kill';
$strKorean = 'කොරියානු';

$strLandscape = 'භූමි දර්ශනය';
$strLanguage = 'භාෂාව';
$strLanguageUnknown = '%1$s නොදන්නා භාෂාවකි.';
$strLatchedPages = 'Latched pages';
$strLatexCaption = 'වගු සිරස් තලය';
$strLatexContent = 'Content of table __TABLE__';
$strLatexContinuedCaption = 'Continued table caption';
$strLatexContinued = '(ඉදිරියට)';
$strLatexIncludeCaption = 'වගු ශිර්ෂ පාඨ ඇතුලත් කරන්න';
$strLatexLabel = 'ලේබල යතුර';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structure of table __TABLE__';
$strLatvian = 'ලැට්වියානු';
$strLDI = 'CSV using LOAD DATA';
$strLDILocal = 'Use LOCAL keyword';
$strLengthSet = 'දිග/අගයන්';
$strLimitNumRows = 'පිටුවකට පේළි ගණන';
$strLinesTerminatedBy = 'Lines terminated by';
$strLinkNotFound = 'Link not found';
$strLinksTo = 'Links to';
$strLithuanian = 'ලිතුවේනියානු';
$strLocalhost = 'ස්වදේශී';
$strLocationTextfile = 'පාඨ ගොනුවෙහි පිහිටුම';
$strLoginInformation = 'ලොගින තොරතුරු';
$strLogin = 'ලොගින් වන්න';
$strLogout = 'ලොග්අවුට් වන්න';
$strLogPassword = 'මුරපදය:';
$strLogServer = 'සර්වරය';
$strLogUsername = 'භාවිත නාමය:';
$strLongOperation = 'This operation could take a long time. Proceed anyway?';

$strMaxConnects = 'max. concurrent connections';
$strMaximalQueryLength = 'Maximal length of created query';
$strMaximumSize = 'Max: %s%s';
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using a multibyte charset. Without the mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause some data to be corrupted!';
$strMIME_available_mime = 'Available MIME types';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'විස්තරය';
$strMIME_MIMEtype = 'MIME වර්ගය';
$strMIME_nodescription = 'No description is available for this transformation.<br />Please ask the author what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformation options';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_without = 'MIME types printed in italics do not have a separate transformation function';
$strModifications = 'වෙනස් කිරීම් සේව් කරන ලදි';
$strModifyIndexTopic = 'සූචිය වෙනස් කරන්න';
$strModify = 'වෙනස් කිරීම';
$strMoveTable = 'වගුව (දත්තගබඩාව<b>.</b>වගුව) වෙතට ගෙන යන්න:';
$strMoveTableOK = '%s වගුව %s වෙතට ගෙනයන ලදි.';
$strMoveTableSameNames = 'Can\'t move table to same one!';
$strMultilingual = 'multilingual';
$strMyISAMDataPointerSize = 'Data pointer size';
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';
$strMyISAMRecoverOptions = 'Automatic recovery mode';
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the repair by sorting process.';
$strMyISAMRepairThreads = 'Repair threads';
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';
$strMyISAMSortBufferSize = 'Sort buffer size';
$strMySQLCharset = 'MySQL අක්ෂර කට්ටලය';
$strMysqlClientVersion = 'MySQL සේවාදායකයාගේ සංස්කරණය';
$strMySQLConnectionCollation = 'MySQL සම්බන්ධතා collation';
$strMySQLSaid = 'MySQL said: ';
$strMySQLShowProcess = 'ක්‍රියාවලිය පෙන්වන්න';
$strMySQLShowStatus = 'MySQL ධාවන තොරතු‍රු පෙන්වන්න';
$strMySQLShowVars = 'MySQL පද්ධති විචල්‍යයන් පෙන්වන්න';

$strName = 'නම';
$strNext = 'මීලඟ';
$strNoActivity = 'No activity within %s seconds; please log in again';
$strNoDatabases = 'දත්තගබඩා නොමැත';
$strNoDatabasesSelected = 'දත්තගබඩාවක් තෝරාගෙන නොමැත.';
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';
$strNoDescription = 'no description';
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoExplain = 'Skip Explain SQL';
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoIndex = 'No index defined!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoModification = 'වෙනස්කම් නැත';
$strNone = 'කිසිවක් නැත';
$strNo = 'නැත';
$strNoOptions = 'මෙම ආකෘතියේ විකල්ප කිසිවක් නැත';
$strNoPassword = 'මුරපදයක් නැත';
$strNoPermission = 'The web server does not have permission to save the file %s.';
$strNoPhp = 'PHP කේත නොමැතිව';
$strNoPrivileges = 'වරප්‍රසාද නොමැත';
$strNoRights = 'You don\'t have sufficient privileges to be here right now!';
$strNoRowsSelected = 'පේළි කිසිවක් තෝරගෙන නැත';
$strNoSpace = 'Insufficient space to save the file %s ගොනුව සේව් කිරීමට ප්‍රමාණවත් .';
$strNoTablesFound = 'දත්තගබඩාවේ වගු කිසිවක් සොයා ගැනීමට නොමැත.';
$strNoThemeSupport = 'No themes support; please check your configuration and/or your themes in directory %s.';
$strNotNumber = 'මෙය අංකයක් නොවේ!';
$strNotOK = 'OK නැත';
$strNotSet = '<b>%s</b> table not found or not set in %s';
$strNoUsersFound = 'No user(s) found.';
$strNoValidateSQL = 'Skip Validate SQL';
$strNull = 'Null';
$strNumberOfFields = 'ක්ෂේත්‍ර ගණන';
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';
$strNumTables = 'වගු';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Open new phpMyAdmin window';
$strOperations = 'මෙහෙයුම්';
$strOperator = 'මෙහෙයවනය';
$strOptimizeTable = 'ප්‍රශස්තගත වගුව';
$strOr = 'හෝ';
$strOverhead = 'පිරිවැය';
$strOverwriteExisting = 'Overwrite existing file(s)';

$strPageNumber = 'පිටු අංකය:';
$strPagesToBeFlushed = 'Pages to be flushed';
$strPaperSize = 'පිටුවේ ප්‍රමාණය';
$strPartialImport = 'Partial import';
$strPartialText = 'Partial Texts';
$strPasswordChanged = 'The password for %s was changed successfully.';
$strPasswordEmpty = 'The password is empty!';
$strPasswordHashing = 'Password Hashing';
$strPasswordNotSame = 'The passwords aren\'t the same!';
$strPassword = 'මුරපදය';
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';
$strPdfInvalidTblName = 'The "%s" table doesn\'t exist!';
$strPdfNoTables = 'වගු නොමැත';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';
$strPDFReportTitle = 'වාර්තා මාතෘකාව';
$strPerHour = 'පැයකට';
$strPerMinute = 'මිනිත්තුවකට';
$strPerSecond = 'තප්පරයකට';
$strPersian = 'පර්සියානු';
$strPhoneBook = 'දුරකථන පොත';
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPhp = 'PHP කේත සාදන්න';
$strPHPVersion = 'PHP සංස්කරණය';
$strPmaDocumentation = 'phpMyAdmin ලියකියවිලි';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPolish = 'පෝලන්ත';
$strPortrait = 'Portrait';
$strPos1 = 'Begin';
$strPrevious = 'පෙර';
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';
$strPrimaryKeyName = 'The name of the primary key must be "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)';
$strPrimary = 'මූලික';
$strPrint = 'මුද්‍රණය කරන්න';
$strPrintViewFull = 'Print view (with full texts)';
$strPrintView = 'මුද්‍රණ දර්ශනය';
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.';
$strPrivDescAlter = 'Allows altering the structure of existing tables.';
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';
$strPrivDescCreateDb = 'Allows creating new databases and tables.';
$strPrivDescCreateRoutine = 'Allows creating stored routines.';
$strPrivDescCreateTbl = 'Allows creating new tables.';
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.';
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';
$strPrivDescCreateView = 'Allows creating new views.';
$strPrivDescDelete = 'Allows deleting data.';
$strPrivDescDropDb = 'Allows dropping databases and tables.';
$strPrivDescDropTbl = 'Allows dropping tables.';
$strPrivDescExecute5 = 'Allows executing stored routines.';
$strPrivDescExecute = 'Allows running stored procedures; has no effect in this MySQL version.';
$strPrivDescFile = 'Allows importing data from and exporting data into files.';
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.';
$strPrivDescIndex = 'Allows creating and dropping indexes.';
$strPrivDescInsert = 'Allows inserting and replacing data.';
$strPrivDescLockTables = 'Allows locking tables for the current thread.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';
$strPrivDescProcess3 = 'Allows killing processes of other users.';
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.';
$strPrivDescReferences = 'Has no effect in this MySQL version.';
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.';
$strPrivDescReplClient = 'Allows the user to ask where the slaves / masters are.';
$strPrivDescReplSlave = 'Needed for the replication slaves.';
$strPrivDescSelect = 'Allows reading data.';
$strPrivDescShowDb = 'Gives access to the complete list of databases.';
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';
$strPrivDescShutdown = 'Allows shutting down the server.';
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.';
$strPrivDescUpdate = 'Allows changing data.';
$strPrivDescUsage = 'වරප්‍රසාද නොමැත.';
$strPrivileges = 'වරප්‍රසාද';
$strPrivilegesReloaded = 'The privileges were reloaded successfully.';
$strProcedures = 'ක්‍රියාපටිපාටිය';
$strProcesses = 'ක්‍රියාවලිය';
$strProcesslist = 'ක්‍රියාවලි ලයිස්තුව';
$strProtocolVersion = 'ප්‍රෝටකෝල සංස්කරණය';
$strPutColNames = 'Put fields names in the first row';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'විමසුම';
$strQueryCache = 'Query cache';
$strQueryFrame = 'Query window';
$strQueryOnDb = 'SQL query on database <b>%s</b>:';
$strQueryResultsOperations = 'Query results operations';
$strQuerySQLHistory = 'SQL ඉතිහාසය';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'Query took %01.4f sec';
$strQueryType = 'විමසුම් වර්ගය';
$strQueryWindowLock = 'Do not overwrite this query from outside the window';

$strReadRequests = 'Read requests';
$strReceived = 'ලබන ලද';
$strRecords = 'වාර්තා';
$strReferentialIntegrity = 'Check referential integrity:';
$strRefresh = 'අලුත් කරන්න';
$strRelationalSchema = 'Relational schema';
$strRelationNotWorking = 'The additional features for working with linked tables have been deactivated. To find out why click %shere%s.';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelations = 'Relations';
$strRelationView = 'Relation view';
$strReloadingThePrivileges = 'Reloading the privileges';
$strReloadPrivileges = 'වරප්‍රසාද ප්‍රතිප්‍රවේශනය කරන්න';
$strRemoveSelectedUsers = 'තෝරාගත් භාවිතා කරන්නන් ඉවත් කරන්න';
$strRenameDatabaseOK = '%s දත්තගබඩාව %s බවට නම වෙනස් කරන ලදි';
$strRenameTableOK = '%s වගුව %s බවට නම වෙනස් කරන ලදි';
$strRenameTable = 'වගුව බවට නම වෙනස් කරන්න';
$strRepairTable = 'වගුව ප්‍රතිසංස්කරණය කරන්න';
$strReplaceNULLBy = 'Replace NULL by';
$strReplaceTable = 'Replace table data with file';
$strReplication = 'Replication';
$strReset = 'ප්‍රතිසකසන්න';
$strResourceLimits = 'සම්පත් සීමා';
$strReType = 'නැවත ටයිප් කරන්න';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'Revoke';
$strRomanian = 'රුමේනියානු';
$strRowLength = 'පේළියේ දිග';
$strRowsFrom = 'row(s) starting from record #';
$strRowSize = 'පේළියේ ප්‍රමාණය';
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'in %s mode and repeat headers after %s cells';
$strRowsModeVertical = 'vertical';
$strRows = 'පේළි';
$strRowsStatistic = 'පේළි සංඛ්‍ය ලේඛන';
$strRunning = '%s මත ධාවනය වේ';
$strRunQuery = 'විමසුම ඉදිරිපත් කරන්න';
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';
$strRunSQLQuery = 'Run SQL query/queries on database %s';
$strRussian = 'රුසියානු';

$strSaveOnServer = 'සර්වරයේ %s ඩිරෙක්ටරියේ සේව් කරන්න';
$strSave = 'සේව් කරන්න';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearchFormTitle = 'දත්තගබඩාවේ සොයන්න';
$strSearchInTables = 'වගු(ව) තුල:';
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';
$strSearchOption1 = 'අවම වශයෙන් එක් වචනයක්වත්';
$strSearchOption2 = 'සියලු වචන';
$strSearchOption3 = 'හරියටම වාක්‍යාංශය';
$strSearchOption4 = 'as regular expression';
$strSearchResultsFor = '"<i>%s</i>" %s සඳහා සෙවීම් ප්‍රතිළුල:';
$strSearch = 'සෙවීම';
$strSearchType = 'සොයන්න:';
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';
$strSelectADb = 'කරුණාකර දත්තගබඩාවක් තෝරන්න';
$strSelectAll = 'සියල්ල තෝරන්න';
$strSelectBinaryLog = 'පෙන්වීම සඳහා ද්වීමය ලොගය තෝරන්න';
$strSelectFields = 'Select fields (at least one):';
$strSelectNumRows = 'in query';
$strSelectTables = 'වගු තෝරන්න';
$strSend = 'ගොනුවක් ලෙස තෝරන්න';
$strSent = 'යවන ලද';
$strServerChoice = 'සර්වරයේ තේරීම';
$strServerNotResponding = 'සර්වරය ප්‍රතිචාර නොදක්වයි';
$strServer = 'සර්වරය';
$strServers = 'සර්වරයන්';
$strServerStatusDelayedInserts = 'Delayed inserts';
$strServerStatus = 'ධාවන කාල තොරතුරු';
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.';
$strServerTabVariables = 'විචල්‍යනයන්';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings';
$strServerVersion = 'සර්වරයේ සංස්කරණය';
$strSessionValue = 'සැසි අගය';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'සියල්ල පෙන්වන්න';
$strShowColor = 'වර්ණය පෙන්වන්න';
$strShowDatadictAs = 'දත්ත‍ Format';
$strShowFullQueries = 'සම්පූර්ණ විමසුම් පෙන්වන්න';
$strShowGrid = 'කොටු සැලැස්ම පෙන්වන්න';
$strShowingBookmark = 'පොත් සලකුණ පෙන්වන්න';
$strShowingRecords = 'පේළි පෙන්වන්න';
$strShowOpenTables = 'විවෘත වගු පෙන්වන්න';
$strShowPHPInfo = 'PHP තොරතුරු පෙන්වන්න';
$strShow = 'පෙන්වන්න';
$strShowSlaveHosts = 'උපදායකයන් පෙන්වන්න';
$strShowSlaveStatus = 'උපතත්වයන් පෙන්වන්න';
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';
$strShowStatusCreated_tmp_filesDescr = 'How many temporary files mysqld has created.';
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';
$strShowStatusDelayed_writesDescr = 'The number of INSERT DELAYED rows written.';
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';
$strShowStatusHandler_updateDescr = 'The number of requests to update a row in a table.';
$strShowStatusHandler_writeDescr = 'The number of requests to insert a row in a table.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'The number of pages containing data (dirty or clean).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'The number of pages currently dirty.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'නිදහස් පිටු ගණන.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total size of buffer pool, in pages.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';
$strShowStatusInnodb_data_fsyncsDescr = 'The number of fsync() operations so far.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'The current number of pending fsync() operations.';
$strShowStatusInnodb_data_pending_readsDescr = 'The current number of pending reads.';
$strShowStatusInnodb_data_pending_writesDescr = 'The current number of pending writes.';
$strShowStatusInnodb_data_readDescr = 'The amount of data read so far, in bytes.';
$strShowStatusInnodb_data_readsDescr = 'The total number of data reads.';
$strShowStatusInnodb_data_writesDescr = 'The total number of data writes.';
$strShowStatusInnodb_data_writtenDescr = 'The amount of data written so far, in bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';
$strShowStatusInnodb_log_waitsDescr = 'The number of waits we had because log buffer was too small and we had to wait for it to be flushed before continuing.';
$strShowStatusInnodb_log_write_requestsDescr = 'The number of log write requests.';
$strShowStatusInnodb_log_writesDescr = 'The number of physical writes to the log file.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'The number of pending log file fsyncs.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pending log file writes.';
$strShowStatusInnodb_os_log_writtenDescr = 'The number of bytes written to the log file.';
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';
$strShowStatusInnodb_pages_readDescr = 'කියවන ලද පිටු ගණන.';
$strShowStatusInnodb_pages_writtenDescr = 'ලියන ලද පිටු ගණන.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';
$strShowStatusInnodb_rows_deletedDescr = 'The number of rows deleted from InnoDB tables.';
$strShowStatusInnodb_rows_insertedDescr = 'The number of rows inserted in InnoDB tables.';
$strShowStatusInnodb_rows_readDescr = 'The number of rows read from InnoDB tables.';
$strShowStatusInnodb_rows_updatedDescr = 'The number of rows updated in InnoDB tables.';
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'The number of rows waiting to be written in INSERT DELAYED queues.';
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';
$strShowStatusOpen_filesDescr = 'The number of files that are open.';
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';
$strShowStatusReset = 'Reset';
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';
$strShowStatusSort_rowsDescr = 'The number of sorted rows.';
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';
$strShowTableDimension = 'Show dimension of tables';
$strShowTables = 'වගු පෙන්වන්න';
$strShowThisQuery = 'මෙම විමසුම මෙහි නැවත පෙන්වන්න ';
$strSimplifiedChinese = 'සරලකරන ලද චීන';
$strSingly = '(singly)';
$strSize = 'ප්‍රමාණය';
$strSkipQueries = 'Number of records(queries) to skip from start';
$strSlovak = 'ස්ලෝවැකි';
$strSlovenian = 'ස්ලෝවේනියානු';
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';
$strSortByKey = 'යතුර අනුව තෝරන්න';
$strSorting = 'තේරීම';
$strSort = '‍තෝරනවා';
$strSpaceUsage = 'අවකාශ භාවිතය';
$strSpanish = 'ස්පාඤ්ඤ';
$strSplitWordsWithSpace = 'Words are separated by a space character (" ").';
$strSQLCompatibility = 'SQL compatibility mode';
$strSQLExportType = 'අපනයන වර්ගය';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL විමසුම';
$strSQLResult = 'SQL ප්‍රතිළුල';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'වලංගු නොවන හඳුන්වනය';
$strSQPBugUnclosedQuote = 'නොවසන ලද උද්ධරනය';
$strSQPBugUnknownPunctuation = 'නොදන්නා විරාම අකුරු වැල';
$strStatCheckTime = 'අවසන් පරීක්ෂාව';
$strStatCreateTime = 'සෑදීම';
$strStatement = 'ප්‍රකාශය';
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';
$strStatUpdateTime = 'අවසන් යාවත් කාලීන කිරීම';
$strStatus = 'තත්වය';
$strStorageEngines = 'ගබඩා යන්ත්‍ර';
$strStorageEngine = 'ගබඩා යන්ත්‍ර‍';
$strStrucCSV = 'CSV';
$strStrucData = 'සැකිල්ල සහ දත්ත';
$strStrucExcelCSV = 'MS එක්සෙල් සඳහා CSV ';
$strStrucNativeExcel = 'Native MS Excel format';
$strStrucOnly = 'Structure only';
$strStructPropose = 'Propose table structure';
$strStructure = 'සැකිල්ල';
$strSubmit = 'ඉදිරිපත් කරන්න';
$strSuccess = 'ඔබගේ SQL විමසුම සාර්ථකව ක්‍රියාවට නංවන ලදි';
$strSum = 'එකතුව';
$strSwedish = 'ස්වීඩීනියානු';
$strSwitchToDatabase = 'Switch to copied database';
$strSwitchToTable = 'Switch to copied table';

$strTableAlreadyExists = ' %s වගුව දැනටමත් පවතී!';
$strTableComments = 'වගු විස්තර';
$strTableEmpty = 'වගුවෙහි නම හිස්ව ඇත!';
$strTableHasBeenDropped = '%s වගුව හලන ලදි';
$strTableHasBeenEmptied = '%s වගුව හිස් කරන ලදි';
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTableMaintenance = 'වගු නඩත්තුව';
$strTableOfContents = 'පටුන';
$strTableOptions = 'වගු විකල්ප';
$strTables = '%s table(s)';
$strTableStructure = 'වගුවක් සඳහා වගු සැකිල්ල';
$strTable = 'වගුව';
$strTakeIt = 'take it';
$strTblPrivileges = 'Table-specific privileges';
$strTempData = 'තාවකාලික දත්ත';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable ';
$strThai = 'තායි';
$strThemeDefaultNotFound = '‍%s සාමාන්‍යයෙන් පවතින තේමාව සොයාගැනීමට නොමැත!';
$strThemeNoPreviewAvailable = 'No preview available.';
$strThemeNotFound = 'Theme %s not found!';
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';
$strThemePathNotFound = 'Theme path not found for theme %s!';
$strTheme = 'තේමාව / ශෛලිය';
$strThisHost = 'this host';
$strThreads = 'ත්‍රෙඩයන්';
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.';
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';
$strTime = 'වේලාව';
$strToggleScratchboard = 'Toggle scratchboard';
$strTotal = 'මුළු එකතුව';
$strTotalUC = 'මුළු එකතුව';
$strTraditionalChinese = 'සාම්ප්‍රධායික චීන';
$strTraditionalSpanish = 'සාම්ප්‍රධායික ස්පාඤ්ඤ';
$strTraffic = 'තදබදය';
$strTransactionCoordinator = 'Transaction coordinator';
$strTransformation_application_octetstream__download = 'Displays a link to download the binary data of the field. You can use the first option to specify the filename, or use the second option as the name of a field which contains the filename. If you use the second option, you need to set the first option to the empty string.';
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail. The options are the maximum width and height in pixels. The original aspect ratio is preserved.';
$strTransformation_image_jpeg__link = 'Displays a link to download this image.';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds it the field data via standard input. Returns the standard output of the application. The default is Tidy, to pretty-print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and list the tools you want to make available. The first option is then the number of the program you want to use and the second option is the parameters for the program. The third option, if set to 1, will convert the output using htmlspecialchars() (Default 1). The fourth option, if set to 1, will prevent wrapping and ensure that the output appears all on one line (Default 1).';
$strTransformation_text_plain__formatted = 'Displays the contents of the field as-is, without running it through htmlspecialchars(). That is, the field is assumed to contain valid HTML.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link; the field contains the filename. The first option is a URL prefix like "http://www.example.com/". The second and third options are the width and the height in pixels.';
$strTransformation_text_plain__link = 'Displays a link; the field contains the filename. The first option is a URL prefix like "http://www.example.com/". The second option is a title for the link.';
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';
$strTransformation_text_plain__substr = 'Displays a part of a string. The first option is the number of characters to skip from the beginning of the string (Default 0). The second option is the number of characters to return (Default: until end of string). The third option is the string to append and/or prepend when truncation occurs (Default: "...").';
$strTruncateQueries = 'Truncate Shown Queries';
$strTurkish = 'තුර්කියානු';
$strType = 'වර්ගය';

$strUkrainian = 'යුක්රේනියානු';
$strUncheckAll = 'කතිර කොටුගත කිරීම ඉවත් කරන්න';
$strUnicode = 'යුනිකෝඩ්';
$strUnique = 'අනන්‍ය';
$strUnknown = 'නොදන්නා';
$strUnselectAll = 'සියල්ලේ තෝරාගැනීම ඉවත් කරන්න‍';
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Update Query';
$strUpdComTab = 'Please see the documentation on how to update your column_comments table';
$strUpgrade = 'You should upgrade to %s %s or later.';
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';
$strUsage = 'භාවිතය';
$strUseBackquotes = 'Enclose table and field names with backquotes';
$strUsedPhpExtensions = 'භාවිත PHP දිගුවන්';
$strUseHostTable = 'දායක වගුව භාවිතා කරන්න';
$strUserAlreadyExists = '%s භාවිතා කරන්නා දැනටමත් පවතී!';
$strUserEmpty = 'භාවිත නාමය හිස්ව පවතී!';
$strUserName = 'භාවිත නාමය';
$strUserNotFound = 'The selected user was not found in the privilege table.';
$strUserOverview = 'User overview';
$strUsersDeleted = 'The selected users have been deleted successfully.';
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';
$strUser = 'භාවිතා කරන්නා';
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';
$strUseTables = 'Use Tables';
$strUseTextField = 'Use text field';
$strUseThisValue = 'Use this value';

$strValidateSQL = 'Validate SQL';
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary PHP extensions as described in the %sdocumentation%s.';
$strValue = 'Value';
$strVar = 'Variable';
$strVersionInformation = 'Version information';
$strViewDumpDatabases = 'View dump (schema) of databases';
$strViewDumpDB = 'View dump (schema) of database';
$strViewDump = 'View dump (schema) of table';
$strViewHasBeenDropped = 'View %s has been dropped';
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';
$strView = 'දර්ශනය කරන්න';

$strWebServerUploadDirectoryError = 'අප්ලෝඩ් කිරීම් සඳහා සැකසූ ඩිරෙක්ටරිය වෙත පිවිසිය නොහැක';
$strWebServerUploadDirectory = 'අන්තර්ජාල සර්වරයේ අප්ලෝඩ් ඩිරෙක්ටරිය';
$strWelcome = '%s වෙත ආයුබෝවන්';
$strWestEuropean = 'බටහිර යුරෝපියානු';
$strWildcard = 'wildcard';
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window, or your browser\'s security settings are configured to block cross-window updates.';
$strWithChecked = 'තෝරාගත්:';
$strWriteRequests = 'ලිවීම සඳහා වූ  ඉල්ලීම්';
$strWrongUser = 'වැරදි භාවිත නාමය/මුරපදය. පිවිසුම වලක්වා ඇත.';

$strXML = 'XML';

$strYes = 'ඔව්';

$strZeroRemovesTheLimit = 'සටහන: මෙම විකල්පය 0 (බිංදුවට) පත් කිරීම මගින්සීමා ඉවත් වනු ලැ‍‍බේ.';
$strZip = '"සිප්ගත කරන ලද"';


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
