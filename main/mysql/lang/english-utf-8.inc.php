<?php
/* $Id: english-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

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

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds';

$strAbortedClients = 'Aborted';
$strAccessDenied = 'Access denied';
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';
$strAction = 'Action';
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';
$strAddClause = 'Add %s';
$strAddConstraints = 'Add constraints';
$strAddDeleteColumn = 'Add/Delete Field Columns';
$strAddDeleteRow = 'Add/Delete Criteria Row';
$strAddFields = 'Add %s field(s)';
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';
$strAddIntoComments = 'Add into comments';
$strAddNewField = 'Add new field';
$strAddPrivilegesOnDb = 'Add privileges on the following database';
$strAddPrivilegesOnTbl = 'Add privileges on the following table';
$strAddSearchConditions = 'Add search conditions (body of the "where" clause):';
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)';
$strAddUser = 'Add a new User';
$strAddUserMessage = 'You have added a new user.';
$strAdministration = 'Administration';
$strAffectedRows = 'Affected rows:';
$strAfter = 'After %s';
$strAfterInsertBack = 'Go back to previous page';
$strAfterInsertNewInsert = 'Insert another new row';
$strAfterInsertNext = 'Edit next row';
$strAfterInsertSame = 'Go back to this page';
$strAll = 'All';
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';
$strAllTableSameWidth = 'Display all tables with the same width';
$strAlterOrderBy = 'Alter table order by';
$strAnalyzeTable = 'Analyze table';
$strAnd = 'And';
$strAndThen = 'and then';
$strAngularLinks = 'Angular links';
$strAnIndex = 'An index has been added on %s';
$strAny = 'Any';
$strAnyHost = 'Any host';
$strAnyUser = 'Any user';
$strApproximateCount = 'May be approximate. See FAQ 3.11';
$strAPrimaryKey = 'A primary key has been added on %s';
$strArabic = 'Arabic';
$strArmenian = 'Armenian';
$strAscending = 'Ascending';
$strAtBeginningOfTable = 'At Beginning of Table';
$strAtEndOfTable = 'At End of Table';
$strAttr = 'Attributes';
$strAutomaticLayout = 'Automatic layout';

$strBack = 'Back';
$strBaltic = 'Baltic';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - do not edit';
$strBinaryLog = 'Binary log';
$strBinLogEventType = 'Event type';
$strBinLogInfo = 'Information';
$strBinLogName = 'Log name';
$strBinLogOriginalPosition = 'Original position';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Let every user access this bookmark';
$strBookmarkCreated = 'Bookmark %s created';
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Bookmarked SQL query';
$strBookmarkReplace = 'Replace existing bookmark of same name';
$strBookmarkThis = 'Bookmark this SQL query';
$strBookmarkView = 'View only';
$strBrowse = 'Browse';
$strBrowseDistinctValues = 'Browse distinct values';
$strBrowseForeignValues = 'Browse foreign values';
$strBufferPoolActivity = 'Buffer Pool Activity';
$strBufferPool = 'Buffer Pool';
$strBufferPoolUsage = 'Buffer Pool Usage';
$strBufferReadMissesInPercent = 'Read misses in %';
$strBufferReadMisses = 'Read misses';
$strBufferWriteWaitsInPercent = 'Write waits in %';
$strBufferWriteWaits = 'Write waits';
$strBulgarian = 'Bulgarian';
$strBusyPages = 'Busy pages';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this PHP version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a newer PHP version. See PHP bug report %s for details.';
$strBzip = '"bzipped"';

$strCalendar = 'Calendar';
$strCancel = 'Cancel';
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';
$strCannotLogin = 'Cannot log in to the MySQL server';
$strCantLoad = 'Cannot load [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] extension. Please check your PHP configuration.';
$strCantLoadRecodeIconv = 'Couldn\'t load the iconv or recode extension needed for charset conversion. Either configure PHP to enable these extensions or disable charset conversion in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!';
$strCantUseRecodeIconv = 'Couldn\'t use either the iconv, libiconv or recode_string functions, although the necessary extensions appear to be loaded. Check your PHP configuration.';
$strCardinality = 'Cardinality';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Central European';
$strChange = 'Change';
$strChangeCopyModeCopy = '... keep the old one.';
$strChangeCopyMode = 'Create a new user with the same privileges and ...';
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';
$strChangeCopyUser = 'Change Login Information / Copy User';
$strChangeDisplay = 'Choose field to display';
$strChangePassword = 'Change password';
$strCharset = 'Charset';
$strCharsetOfFile = 'Character set of the file:';
$strCharsetsAndCollations = 'Character Sets and Collations';
$strCharsets = 'Charsets';
$strCheckAll = 'Check All';
$strCheckOverhead = 'Check tables having overhead';
$strCheckPrivs = 'Check Privileges';
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';
$strCheckTable = 'Check table';
$strChoosePage = 'Please choose a page to edit';
$strColComFeat = 'Displaying Column Comments';
$strCollation = 'Collation';
$strColumnNames = 'Column names';
$strColumnPrivileges = 'Column-specific privileges';
$strCommand = 'Command';
$strComments = 'Comments';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';
$strCompleteInserts = 'Complete inserts';
$strCompression = 'Compression';
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if PHP finds a parse error in it or PHP cannot find the file.<br />Please call the configuration file directly using the link below and read the PHP error message(s) that you receive. In most cases a quote or a semicolon is missing somewhere.<br />If you receive a blank page, everything is fine.';
$strConfigureTableCoord = 'Please configure the coordinates for table %s';
$strConnectionError = 'Cannot connect: invalid settings.';
$strConnections = 'Connections';
$strConstraintsForDumped = 'Constraints for dumped tables';
$strConstraintsForTable = 'Constraints for table';
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopy = 'Copy';
$strCopyDatabaseOK = 'Database %s has been copied to %s';
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strCopyTableOK = 'Table %s has been copied to %s.';
$strCopyTableSameNames = 'Can\'t copy table to same one!';
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.';
$strCreate = 'Create';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Create a new index';
$strCreateNewDatabase = 'Create new database';
$strCreateNewTable = 'Create new table on database %s';
$strCreatePage = 'Create a new page';
$strCreatePdfFeat = 'Creation of PDFs';
$strCreateRelation = 'Create relation';
$strCreateTable  = 'Create table';
$strCreateUserDatabase = 'Database for user';
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';
$strCreateUserDatabaseNone = 'None';
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';
$strCreationDates = 'Creation/Update/Check dates';
$strCriteria = 'Criteria';
$strCroatian = 'Croatian';
$strCSV = 'CSV';
$strCyrillic = 'Cyrillic';
$strCzech = 'Czech';
$strCzechSlovak = 'Czech-Slovak';

$strDanish = 'Danish';
$strDatabase = 'Database';
$strDatabaseEmpty = 'The database name is empty!';
$strDatabaseExportOptions = 'Database export options';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';
$strDatabases = 'Databases';
$strDatabasesDropped = '%s databases have been dropped successfully.';
$strDatabasesStats = 'Databases statistics';
$strDatabasesStatsDisable = 'Disable Statistics';
$strDatabasesStatsEnable = 'Enable Statistics';
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.';
$strData = 'Data';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Data only';
$strDataPages = 'Pages containing data';
$strDBComment = 'Database comment: ';
$strDBCopy = 'Copy database to';
$strDbIsEmpty = 'Database seems to be empty!';
$strDbPrivileges = 'Database-specific privileges';
$strDBRename = 'Rename database to';
$strDbSpecific = 'database-specific';
$strDefault = 'Default';
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';
$strDefragment = 'Defragment table';
$strDelayedInserts = 'Use delayed inserts';
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.';
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.';
$strDelete = 'Delete';
$strDeletedRows = 'Deleted rows:';
$strDeleted = 'The row has been deleted';
$strDeleteNoUsersSelected = 'No users selected for deleting!';
$strDeleteRelation = 'Delete relation';
$strDeleting = 'Deleting %s';
$strDelimiter = 'Delimiter';
$strDelOld = 'The current page has references to tables that no longer exist. Would you like to delete those references?';
$strDescending = 'Descending';
$strDescription = 'Description';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';
$strDictionary = 'dictionary';
$strDirectLinks = 'Direct links';
$strDirtyPages = 'Dirty pages';
$strDisabled = 'Disabled';
$strDisableForeignChecks = 'Disable foreign key checks';
$strDisplayFeat = 'Display Features';
$strDisplayOrder = 'Display order:';
$strDisplayPDF = 'Display PDF schema';
$strDoAQuery = 'Do a "query by example" (wildcard: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentation';
$strDoYouReally = 'Do you really want to ';
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';
$strDrop = 'Drop';
$strDropUsersDb = 'Drop the databases that have the same names as the users.';
$strDumpingData = 'Dumping data for table';
$strDumpSaved = 'Dump has been saved to file %s.';
$strDumpXRows = 'Dump %s row(s) starting at record # %s.';
$strDynamic = 'dynamic';

$strEdit = 'Edit';
$strEditPDFPages = 'Edit PDF Pages';
$strEditPrivileges = 'Edit Privileges';
$strEffective = 'Effective';
$strEmpty = 'Empty';
$strEmptyResultSet = 'MySQL returned an empty result set (i.e. zero rows).';
$strEnabled = 'Enabled';
$strEncloseInTransaction = 'Enclose export in a transaction';
$strEndCut = 'END CUT';
$strEnd = 'End';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s is available on this MySQL server.';
$strEngineDisabled = '%s has been disabled for this MySQL server.';
$strEngines = 'Engines';
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';
$strEnglish = 'English';
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';
$strError = 'Error';
$strErrorInZipFile = 'Error in ZIP archive:';
$strErrorRelationAdded = 'Error: Relation not added.';
$strErrorRelationExists = 'Error: relation already exists.';
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';
$strErrorSaveTable = 'Error saving coordinates for Designer.';
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonian';
$strEvent = 'Event';
$strExcelEdition = 'Excel edition';
$strExecuteBookmarked = 'Execute bookmarked query';
$strExplain = 'Explain SQL';
$strExport = 'Export';
$strExportImportToScale = 'Export/Import to scale';
$strExportMustBeFile = 'Selected export type has to be saved in file!';
$strExtendedInserts = 'Extended inserts';
$strExtra = 'Extra';

$strFailedAttempts = 'Failed attempts';
$strField = 'Field';
$strFieldHasBeenDropped = 'Field %s has been dropped';
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';
$strFieldsEnclosedBy = 'Fields enclosed by';
$strFieldsEscapedBy = 'Fields escaped by';
$strFields = 'Fields';
$strFieldsTerminatedBy = 'Fields terminated by';
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';
$strFileCouldNotBeRead = 'File could not be read';
$strFileNameTemplateDescriptionDatabase = 'database name';
$strFileNameTemplateDescriptionServer = 'server name';
$strFileNameTemplateDescriptionTable = 'table name';
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';
$strFileNameTemplate = 'File name template';
$strFileNameTemplateRemember = 'remember template';
$strFiles = 'Files';
$strFileToImport = 'File to import';
$strFixed = 'fixed';
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of these tables may differ from the privileges the server uses, if they have been changed manually. In this case, you should %sreload the privileges%s before you continue.';
$strFlushQueryCache = 'Flush query cache';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFlushTables = 'Flush (close) all tables';
$strFontSize = 'Font size';
$strForeignKeyError = 'Error creating foreign key (check data types)';
$strFormat = 'Format';
$strFormEmpty = 'Missing value in the form!';
$strFreePages = 'Free pages';
$strFullText = 'Full Texts';
$strFunction = 'Function';
$strFunctions = 'Functions';

$strGenBy = 'Generated by';
$strGeneralRelationFeat = 'General relation features';
$strGenerate = 'Generate';
$strGeneratePassword = 'Generate Password';
$strGenTime = 'Generation Time';
$strGeorgian = 'Georgian';
$strGerman = 'German';
$strGlobal = 'global';
$strGlobalPrivileges = 'Global privileges';
$strGlobalValue = 'Global value';
$strGo = 'Go';
$strGrantOption = 'Grant';
$strGreek = 'Greek';
$strGzip = '"gzipped"';

$strHandler = 'Handler';
$strHasBeenAltered = 'has been altered.';
$strHasBeenCreated = 'has been created.';
$strHaveToShow = 'You have to choose at least one column to display';
$strHebrew = 'Hebrew';
$strHelp = 'Help';
$strHexForBLOB = 'Use hexadecimal for BLOB';
$strHide         = 'Hide';
$strHideShowAll = 'Hide/Show all';
$strHideShowNoRelation = 'Hide/Show Tables with no relation';
$strHome = 'Home';
$strHomepageOfficial = 'Official phpMyAdmin Homepage';
$strHostEmpty = 'The host name is empty!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Hungarian';

$strIcelandic = 'Icelandic';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIEUnsupported = 'Internet Explorer does not support this function.';
$strIgnoreDuplicates = 'Ignore duplicate rows';
$strIgnore = 'Ignore';
$strIgnoreInserts = 'Use ignore inserts';
$strImportExportCoords = 'Import/Export coordinates for PDF schema';
$strImportFiles = 'Import files';
$strImportFormat = 'Format of imported file';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';
$strIndexes = 'Indexes';
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';
$strIndexHasBeenDropped = 'Index %s has been dropped';
$strIndex = 'Index';
$strIndexName = 'Index name:';
$strIndexType = 'Index type:';
$strIndexWarningTable = 'Problems with indexes of table `%s`';
$strInnoDBAutoextendIncrement = 'Autoextend increment';
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';
$strInnoDBBufferPoolSize = 'Buffer pool size';
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';
$strInnoDBDataFilePath = 'Data files';
$strInnoDBDataHomeDir = 'Data home directory';
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';
$strInnoDBPages = 'pages';
$strInnoDBRelationAdded = 'InnoDB relation added';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';
$strInsertAsNewRow = 'Insert as new row';
$strInsertedRowId = 'Inserted row id:';
$strInsertedRows = 'Inserted rows:';
$strInsert = 'Insert';
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';
$strInternalRelationAdded = 'Internal relation added';
$strInternalRelations = 'Internal relations';
$strInUse = 'in use';
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';
$strInvalidColumnCount = 'Column count has to be larger than zero.';
$strInvalidColumn = 'Invalid column (%s) specified!';
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';
$strInvalidDatabase = 'Invalid database';
$strInvalidFieldAddCount = 'You have to add at least one field.';
$strInvalidFieldCount = 'Table must have at least one field.';
$strInvalidLDIImport = 'This plugin does not support compressed imports!';
$strInvalidRowNumber = '%d is not valid row number.';
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';
$strInvalidServerIndex = 'Invalid server index: "%s"';
$strInvalidTableName = 'Invalid table name';

$strJapanese = 'Japanese';
$strJoins = 'Joins';
$strJumpToDB = 'Jump to database &quot;%s&quot;.';
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.';
$strJustDelete = 'Just delete the users from the privilege tables.';

$strKeepPass = 'Do not change the password';
$strKeyCache = 'Key cache';
$strKeyname = 'Keyname';
$strKill = 'Kill';
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';
$strKorean = 'Korean';

$strLandscape = 'Landscape';
$strLanguage = 'Language';
$strLanguageUnknown = 'Unknown language: %1$s.';
$strLatchedPages = 'Latched pages';
$strLatexCaption = 'Table caption';
$strLatexContent = 'Content of table __TABLE__';
$strLatexContinuedCaption = 'Continued table caption';
$strLatexContinued = '(continued)';
$strLatexIncludeCaption = 'Include table caption';
$strLatexLabel = 'Label key';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structure of table __TABLE__';
$strLatvian = 'Latvian';
$strLDI = 'CSV using LOAD DATA';
$strLDILocal = 'Use LOCAL keyword';
$strLengthSet = 'Length/Values';
$strLimitNumRows = 'Number of rows per page';
$strLinesTerminatedBy = 'Lines terminated by';
$strLinkNotFound = 'Link not found';
$strLinksTo = 'Links to';
$strLithuanian = 'Lithuanian';
$strLocalhost = 'Local';
$strLocationTextfile = 'Location of the text file';
$strLoginInformation = 'Login Information';
$strLogin = 'Log in';
$strLogout = 'Log out';
$strLogPassword = 'Password:';
$strLogServer = 'Server';
$strLogUsername = 'Username:';
$strLongOperation = 'This operation could take a long time. Proceed anyway?';

$strMaxConnects = 'max. concurrent connections';
$strMaximalQueryLength = 'Maximal length of created query';
$strMaximumSize = 'Max: %s%s';
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using a multibyte charset. Without the mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause some data to be corrupted!';
$strMIME_available_mime = 'Available MIME types';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Description';
$strMIME_MIMEtype = 'MIME type';
$strMIME_nodescription = 'No description is available for this transformation.<br />Please ask the author what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformation options';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_without = 'MIME types printed in italics do not have a separate transformation function';
$strModifications = 'Modifications have been saved';
$strModifyIndexTopic = 'Modify an index';
$strModify = 'Modify';
$strMoveMenu = 'Move Menu';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
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
$strMySQLCharset = 'MySQL charset';
$strMysqlClientVersion = 'MySQL client version';
$strMySQLConnectionCollation = 'MySQL connection collation';
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';
$strMySQLSaid = 'MySQL said: ';
$strMySQLShowProcess = 'Show processes';
$strMySQLShowStatus = 'Show MySQL runtime information';
$strMySQLShowVars = 'Show MySQL system variables';

$strName = 'Name';
$strNext = 'Next';
$strNoActivity = 'No activity within %s seconds; please log in again';
$strNoDatabases = 'No databases';
$strNoDatabasesSelected = 'No databases selected.';
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';
$strNoDescription = 'no description';
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoExplain = 'Skip Explain SQL';
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoIndex = 'No index defined!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoModification = 'No change';
$strNone = 'None';
$strNo = 'No';
$strNoOptions = 'This format has no options';
$strNoPassword = 'No Password';
$strNoPermission = 'The web server does not have permission to save the file %s.';
$strNoPhp = 'Without PHP Code';
$strNoPrivileges = 'No Privileges';
$strNoRights = 'You don\'t have sufficient privileges to be here right now!';
$strNoRowsSelected = 'No rows selected';
$strNoSpace = 'Insufficient space to save the file %s.';
$strNoTablesFound = 'No tables found in database.';
$strNoThemeSupport = 'No themes support; please check your configuration and/or your themes in directory %s.';
$strNotNumber = 'This is not a number!';
$strNotOK = 'not OK';
$strNotSet = '<b>%s</b> table not found or not set in %s';
$strNoUsersFound = 'No user(s) found.';
$strNoValidateSQL = 'Skip Validate SQL';
$strNull = 'Null';
$strNumberOfFields = 'Number of fields';
$strNumberOfTables = 'Number of tables';
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';
$strNumTables = 'Tables';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Open new phpMyAdmin window';
$strOperations = 'Operations';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimize table';
$strOptions = 'Options';
$strOr = 'Or';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overwrite existing file(s)';

$strPageNumber = 'Page number:';
$strPagesToBeFlushed = 'Pages to be flushed';
$strPaperSize = 'Paper size';
$strPartialImport = 'Partial import';
$strPartialText = 'Partial Texts';
$strPasswordChanged = 'The password for %s was changed successfully.';
$strPasswordEmpty = 'The password is empty!';
$strPasswordHashing = 'Password Hashing';
$strPasswordNotSame = 'The passwords aren\'t the same!';
$strPassword = 'Password';
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';
$strPdfInvalidTblName = 'The "%s" table doesn\'t exist!';
$strPdfNoTables = 'No tables';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';
$strPDFReportTitle = 'Report title';
$strPerHour = 'per hour';
$strPerMinute = 'per minute';
$strPerSecond = 'per second';
$strPersian = 'Persian';
$strPhoneBook = 'phone book';
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPhp = 'Create PHP Code';
$strPHPVersion = 'PHP Version';
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';
$strPmaDocumentation = 'phpMyAdmin documentation';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polish';
$strPortrait = 'Portrait';
$strPos1 = 'Begin';
$strPrevious = 'Previous';
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';
$strPrimaryKeyName = 'The name of the primary key must be "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)';
$strPrimary = 'Primary';
$strPrint = 'Print';
$strPrintViewFull = 'Print view (with full texts)';
$strPrintView = 'Print view';
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
$strPrivDescUsage = 'No privileges.';
$strPrivileges = 'Privileges';
$strPrivilegesReloaded = 'The privileges were reloaded successfully.';
$strProcedures = 'Procedures';
$strProcesses = 'Processes';
$strProcesslist = 'Process list';
$strProfiling = 'Profiling';
$strProtocolVersion = 'Protocol version';
$strPutColNames = 'Put fields names in the first row';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Query';
$strQueryCache = 'Query cache';
$strQueryFrame = 'Query window';
$strQueryOnDb = 'SQL query on database <b>%s</b>:';
$strQueryResultsOperations = 'Query results operations';
$strQuerySQLHistory = 'SQL history';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'Query took %01.4f sec';
$strQueryType = 'Query type';
$strQueryWindowLock = 'Do not overwrite this query from outside the window';

$strReadRequests = 'Read requests';
$strReceived = 'Received';
$strRecommended = 'recommended';
$strRecords = 'Records';
$strReferentialIntegrity = 'Check referential integrity:';
$strRefresh = 'Refresh';
$strRelationalSchema = 'Relational schema';
$strRelationDeleted = 'Relation deleted';
$strRelationNotWorking = 'The additional features for working with linked tables have been deactivated. To find out why click %shere%s.';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelations = 'Relations';
$strRelationView = 'Relation view';
$strReloadingThePrivileges = 'Reloading the privileges';
$strReloadPrivileges = 'Reload privileges';
$strReload = 'Reload';
$strRemoveSelectedUsers = 'Remove selected users';
$strRenameDatabaseOK = 'Database %s has been renamed to %s';
$strRenameTableOK = 'Table %s has been renamed to %s';
$strRenameTable = 'Rename table to';
$strRepairTable = 'Repair table';
$strReplaceNULLBy = 'Replace NULL by';
$strReplaceTable = 'Replace table data with file';
$strReplication = 'Replication';
$strReset = 'Reset';
$strResourceLimits = 'Resource limits';
$strRestartInsertion = 'Restart insertion with %s rows';
$strReType = 'Re-type';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'Revoke';
$strRomanian = 'Romanian';
$strRoutineReturnType = 'Return type';
$strRoutines = 'Routines';
$strRowLength = 'Row length';
$strRowsFrom = 'row(s) starting from record #';
$strRowSize = ' Row size ';
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'in %s mode and repeat headers after %s cells';
$strRowsModeVertical = 'vertical';
$strRows = 'Rows';
$strRowsStatistic = 'Row Statistics';
$strRunning = 'running on %s';
$strRunQuery = 'Submit Query';
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';
$strRunSQLQuery = 'Run SQL query/queries on database %s';
$strRussian = 'Russian';

$strSaveOnServer = 'Save on server in %s directory';
$strSavePosition = 'Save position';
$strSave = 'Save';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearchFormTitle = 'Search in database';
$strSearchInTables = 'Inside table(s):';
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';
$strSearchOption1 = 'at least one of the words';
$strSearchOption2 = 'all words';
$strSearchOption3 = 'the exact phrase';
$strSearchOption4 = 'as regular expression';
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';
$strSearch = 'Search';
$strSearchType = 'Find:';
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';
$strSelectADb = 'Please select a database';
$strSelectAll = 'Select All';
$strSelectBinaryLog = 'Select binary log to view';
$strSelectFields = 'Select fields (at least one):';
$strSelectForeignKey = 'Select Foreign Key';
$strSelectNumRows = 'in query';
$strSelectReferencedKey = 'Select referenced key';
$strSelectTables = 'Select Tables';
$strSend = 'Save as file';
$strSent = 'Sent';
$strServerChoice = 'Server Choice';
$strServerNotResponding = 'The server is not responding';
$strServer = 'Server';
$strServers = 'Servers';
$strServerStatusDelayedInserts = 'Delayed inserts';
$strServerStatus = 'Runtime Information';
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings';
$strServerVersion = 'Server version';
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';
$strSessionValue = 'Session value';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all';
$strShowColor = 'Show color';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowFullQueries = 'Show Full Queries';
$strShowGrid = 'Show grid';
$strShowHideLeftMenu = 'Show/Hide left menu';
$strShowingBookmark = 'Showing bookmark';
$strShowingPhp = 'Showing as PHP code';
$strShowingRecords = 'Showing rows';
$strShowingSQL = 'Showing SQL query';
$strShowOpenTables = 'Show open tables';
$strShowPHPInfo = 'Show PHP information';
$strShow = 'Show';
$strShowSlaveHosts = 'Show slave hosts';
$strShowSlaveStatus = 'Show slave status';
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
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'The number of free pages.';
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
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';
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
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';
$strSimplifiedChinese = 'Simplified Chinese';
$strSingly = '(singly)';
$strSize = 'Size';
$strSkipQueries = 'Number of records(queries) to skip from start';
$strSlovak = 'Slovak';
$strSlovenian = 'Slovenian';
$strSmallBigAll = 'Small/Big All';
$strSnapToGrid = 'Snap to grid';
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';
$strSortByKey = 'Sort by key';
$strSorting = 'Sorting';
$strSort = 'Sort';
$strSpaceUsage = 'Space usage';
$strSpanish = 'Spanish';
$strSplitWordsWithSpace = 'Words are separated by a space character (" ").';
$strSQLCompatibility = 'SQL compatibility mode';
$strSQLExportType = 'Export type';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL query';
$strSQLResult = 'SQL result';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Invalid Identifer';
$strSQPBugUnclosedQuote = 'Unclosed quote';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strStandInStructureForView = 'Stand-in structure for view';
$strStatCheckTime = 'Last check';
$strStatCreateTime = 'Creation';
$strStatement = 'Statements';
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';
$strStatUpdateTime = 'Last update';
$strStatus = 'Status';
$strStorageEngines = 'Storage Engines';
$strStorageEngine = 'Storage Engine';
$strStrucCSV = 'CSV';
$strStrucData = 'Structure and data';
$strStrucExcelCSV = 'CSV for MS Excel';
$strStrucNativeExcel = 'Native MS Excel format';
$strStrucOnly = 'Structure only';
$strStructPropose = 'Propose table structure';
$strStructureForView = 'Structure for view';
$strStructure = 'Structure';
$strSubmit = 'Submit';
$strSuccess = 'Your SQL query has been executed successfully';
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';
$strSum = 'Sum';
$strSwedish = 'Swedish';
$strSwitchToDatabase = 'Switch to copied database';
$strSwitchToTable = 'Switch to copied table';

$strTableAlreadyExists = 'Table %s already exists!';
$strTableComments = 'Table comments';
$strTableEmpty = 'The table name is empty!';
$strTableHasBeenDropped = 'Table %s has been dropped';
$strTableHasBeenEmptied = 'Table %s has been emptied';
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTableIsEmpty = 'Table seems to be empty!';
$strTableMaintenance = 'Table maintenance';
$strTableName = 'Table name';
$strTableOfContents = 'Table of contents';
$strTableOptions = 'Table options';
$strTables = '%s table(s)';
$strTableStructure = 'Table structure for table';
$strTable = 'Table';
$strTakeIt = 'take it';
$strTblPrivileges = 'Table-specific privileges';
$strTempData = 'Temporary data';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Default theme %s not found!';
$strThemeNoPreviewAvailable = 'No preview available.';
$strThemeNotFound = 'Theme %s not found!';
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';
$strThemePathNotFound = 'Theme path not found for theme %s!';
$strTheme = 'Theme / Style';
$strThisHost = 'This Host';
$strThreads = 'Threads';
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.';
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';
$strTime = 'Time';
$strToFromPage = 'to/from page';
$strToggleScratchboard = 'Toggle scratchboard';
$strToggleSmallBig = 'Toggle small/big';
$strToSelectRelation = 'To select relation, click :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Traditional Chinese';
$strTraditionalSpanish = 'Traditional Spanish';
$strTraffic = 'Traffic';
$strTransactionCoordinator = 'Transaction coordinator';
$strTransformation_application_octetstream__download = 'Displays a link to download the binary data of the field. You can use the first option to specify the filename, or use the second option as the name of a field which contains the filename. If you use the second option, you need to set the first option to the empty string.';
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail. The options are the maximum width and height in pixels. The original aspect ratio is preserved.';
$strTransformation_image_jpeg__link = 'Displays a link to download this image.';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds it the field data via standard input. Returns the standard output of the application. The default is Tidy, to pretty-print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and list the tools you want to make available. The first option is then the number of the program you want to use and the second option is the parameters for the program. The third option, if set to 1, will convert the output using htmlspecialchars() (Default 1). The fourth option, if set to 1, will prevent wrapping and ensure that the output appears all on one line (Default 1).';
$strTransformation_text_plain__formatted = 'Displays the contents of the field as-is, without running it through htmlspecialchars(). That is, the field is assumed to contain valid HTML.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link; the field contains the filename. The first option is a URL prefix like "http://www.example.com/". The second and third options are the width and the height in pixels.';
$strTransformation_text_plain__link = 'Displays a link; the field contains the filename. The first option is a URL prefix like "http://www.example.com/". The second option is a title for the link.';
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';
$strTransformation_text_plain__substr = 'Displays a part of a string. The first option is the number of characters to skip from the beginning of the string (Default 0). The second option is the number of characters to return (Default: until end of string). The third option is the string to append and/or prepend when truncation occurs (Default: "...").';
$strTriggers = 'Triggers';
$strTruncateQueries = 'Truncate Shown Queries';
$strTurkish = 'Turkish';
$strType = 'Type';

$strUkrainian = 'Ukrainian';
$strUncheckAll = 'Uncheck All';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'unknown';
$strUnselectAll = 'Unselect All';
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Update Query';
$strUpdComTab = 'Please see the documentation on how to update your column_comments table';
$strUpgrade = 'You should upgrade to %s %s or later.';
$strUploadErrorCantWrite = 'Failed to write file to disk.';
$strUploadErrorExtension = 'File upload stopped by extension.';
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
$strUploadErrorNoTempDir = 'Missing a temporary folder.';
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';
$strUploadErrorUnknown = 'Unknown error in file upload.';
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';
$strUsage = 'Usage';
$strUseBackquotes = 'Enclose table and field names with backquotes';
$strUsedPhpExtensions = 'Used PHP extensions';
$strUseHostTable = 'Use Host Table';
$strUserAlreadyExists = 'The user %s already exists!';
$strUserEmpty = 'The user name is empty!';
$strUserName = 'User name';
$strUserNotFound = 'The selected user was not found in the privilege table.';
$strUserOverview = 'User overview';
$strUsersDeleted = 'The selected users have been deleted successfully.';
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';
$strUser = 'User';
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
$strViewName = 'VIEW name';
$strView = 'View';

$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';
$strWebServerUploadDirectory = 'web server upload directory';
$strWelcome = 'Welcome to %s';
$strWestEuropean = 'West European';
$strWildcard = 'wildcard';
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window, or your browser\'s security settings are configured to block cross-window updates.';
$strWithChecked = 'With selected:';
$strWriteRequests = 'Write requests';
$strWrongUser = 'Wrong username/password. Access denied.';

$strXML = 'XML';

$strYes = 'Yes';

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.';
$strZip = '"zipped"';

?>
