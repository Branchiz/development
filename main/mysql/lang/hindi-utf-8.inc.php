<?php
/* $Id: hindi-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// Hindi translation
// 1st release   :   by Girish Nair <girishn@nagpur.dot.net.in(outdated)> : 08-Aug-2002
// 2nd updates   :   by Girish Nair <girishn@nagpur.dot.net.in(outdated)> : 23-Aug-2002
// 3rd updates   :   by Girish Nair <girishn@nagpur.dot.net.in(outdated)> : 09-Sep-2002
// 4th updates   :   by Girish Nair <girishn@nagpur.dot.net.in(outdated)> : 15-Nov-2002
// 5th updates   :   by Girish Nair <girishn2003_@_yahoo_._co_._in(latest), www.girishn.com> : 25-Nov-2003

$charset = 'utf-8';
$allow_recoding = FALSE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$byteUnits = array(' बैट्स', ' केबी', ' एमबी', ' जीबी','टीबी','पीबी','ईबी');

$day_of_week = array('रवी', 'सोम', 'मन्गल', 'बुध', 'गुरु', 'शुक्र', 'शनि');
$month = array('जनवरी', 'फरवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', ' सितम्बर', 'अक्तूबर', 'नवम्बर', 'दिसमबर');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y को %I:%M %p';
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds';

$strAccessDenied = 'प्रवेश निषेध';
$strAction = ' कार्य';
$strAddNewField = 'नया फील्ड जोडो';
$strAddPrivilegesOnDb = 'इन डाटाबेसों के लिये प्रिविलेज  जोडिये'; 
$strAddPrivilegesOnTbl = 'इन टेबल  के लिये प्रिविलेज  जोडिये'; 
$strAddUser = 'नया यूसर बनाओ';
$strAddUserMessage = 'आपने नया यूसर बना लिया ।';
$strAfterInsertBack = 'पिछले पृष्ट पर वापस जाओ';
$strAfterInsertNewInsert = ' अगला नया रौ जोडे';
$strAfter = '%s के बाद में';
$strAll = 'सभी';
$strAlterOrderBy = ' टेबल ओरडर को बदलिये ';
$strAnalyzeTable = ' टेबल अनालैज करें';
$strAnd = 'और';
$strAnIndex = ' %s पर एक इन्डेक्स बनाया';
$strAny = 'कोई';
$strAnyHost = 'कोई भी  होस्ट';
$strAnyUser = 'कोई भी  यूसर';
$strAPrimaryKey = ' %s  पर एक प्राईमरी की बनाया';
$strArabic = 'पर्शियन';  
$strAtBeginningOfTable = ' टेबल के शुरू  में';
$strAtEndOfTable = ' टेबल के आखिर में';
$strAttr = ' विशेषता';

$strBack = 'वापस';
$strBinary = 'बइनरी';
$strBinaryDoNotEdit = 'बइनरी - एडिट मत करिये';
$strBookmarkDeleted = 'यह bookmark डिलीट कर दिया गया।'; 
$strBookmarkLabel = 'लेबल';
$strBookmarkQuery = 'Bookmark किया हुआ SQL-क्वरी'; 
$strBookmarkThis = 'इस SQL-क्वरी को bookmark कीजिये '; 
$strBookmarkView = 'केवल देखिये';
$strBrowse = ' ब्रौस';

$strCantRenameIdxToPrimary = 'इन्डेक्स को PRIMARY नाम मे नहीं बदल सकते!';
$strChange = 'बदलिये';
$strChangePassword = 'पासव्रड बदलिये';
$strCheckAll = 'सभी को चेक करें';
$strCheckPrivs = 'प्रिविलेज  चेक करें';  
$strCheckPrivsLong = 'डाटाबेस के  प्रिविलेज  चेक करें &quot;%s&quot;.';  
$strCheckTable = ' टेबल  को चेक करें';
$strChoosePage = ' एडिट करने के लिये पेज़ चुने';
$strColumnNames = 'कोलम के नाम';
$strColumnPrivileges = ' केवल कोलम के प्रिविलेज'; 
$strComments = ' टिप्पणी';
$strCompleteInserts = 'पूरा इनसर्टस';
$strCopyTable = ' (database<b>.</b>table) में टेबल को कापी करें:';
$strCopyTableOK = ' %s टेबल को %s में कापी कर दिया.';
$strCouldNotKill = 'thread %s को मारने में phpMyAdmin असफल हुआ। शायद वह खतम हो चुका है।'; 
$strCreate = 'बनाइये';
$strCreateIndex = ' &nbsp;%s&nbsp; कोलम पर इन्डेक्स बनाऐं ';
$strCreateIndexTopic = 'एक नया इन्डेक्स बनाऐं';
$strCreateNewDatabase = ' नया डाटाबेस बनाओ';
$strCreateNewTable = ' डाटाबेस मे नया टेबल बनाओ';
$strCreatePage = 'नया पेज़ बनाऐं';

$strData = ' डाटा';
$strDatabase = ' डाटाबेस';
$strDatabaseHasBeenDropped = 'डाटाबेस %s को ड्रोप कर दिया ।';
$strDatabases = ' डाटाबेस';
$strDatabasesDropped = '%s डाटाबेस को सफलता से डिलीट कर दिया गया।';  
$strDatabasesStats = ' डाटाबेसों के आँकडे';
$strDatabasesStatsDisable = 'आँकडे Disable करें';  
$strDatabasesStatsEnable = 'आँकडे Enable करें';  
$strDatabasesStatsHeavyTraffic = ' नोट: यहां डाटाबेस के आँकडे Enable करने से webserver और MySQL के बीच में ट्रेफिक बडने की संभावना है। ';  
$strDataOnly = 'केवल डाटा';
$strDBComment = 'डाटाबेस की टिप्पणि: '; 
$strDbPrivileges = ' केवल डाटाबेस के प्रिविलेज'; 
$strDefault = 'Default';
$strDelete = 'डिलीट';
$strDeleted = 'रौ को डिलीट कर दिया';
$strDeletedRows = 'रौ डिलीट किया:';
$strDescription = 'वर्णन';  
$strDictionary = 'शब्दकोश';  
$strDisplayFeat = 'फीचरस दिखाओ';
$strDisplayOrder = 'क्रम से दिखाओ:';
$strDisplayPDF = 'PDF schema दिखाओ';
$strDocu = 'डोक्युमेंटेशन';
$strDoYouReally = 'क्या आप सचमुच चाहते है की';
$strDrop = ' ड्रोप';
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; 

$strEdit = 'एडिट';
$strEditPDFPages = 'PDF पेज एडिट करें';
$strEditPrivileges = ' प्रिविलेज एडिट करें';
$strEffective = ' वास्तविक';
$strEmpty = 'खाली करें';
$strEnd = 'आखरी';
$strEnglish = 'अंग्रेजी';  
$strEnglishPrivileges = ' नोट: MySQL प्रिविलेज नामों को अंग्रेजी  मे लिखा गया है '; 
$strError = 'गल्ती';
$strExplain = 'SQL की   व्याख्या ';
$strExport = 'एक्सपोर्ट';
$strExtendedInserts = 'विस्तृत इनसर्टस';
$strExtra = ' अतिरिक्त';

$strField = ' फील्ड';
$strFieldHasBeenDropped = ' फील्ड %s ड्रोप कर दिया';
$strFields = ' फील्डस';
$strFlushTable = ' टेबल को Flush करें ("FLUSH")';

$strGenTime = 'समय पर बनाया'; 
$strGerman = 'जर्मन';  
$strGreek = ' ग्रीक';  

$strHasBeenAltered = 'को बदला गया। '; 
$strHome = 'होम';
$strHomepageOfficial = 'phpMyAdmin का आधिकारिक होमपेज';
$strHost = 'होस्ट';
$strHostEmpty = 'होस्ट का नाम (hostname) खाली है!'; 

$strInsert = 'इनसर्ट';
$strInsertAsNewRow = 'इसको नया रौ में जोडे '; 
$strInsertedRows = ' रौ जोडे गये:'; 

$strJapanese = 'जापानी';  

$strKeepPass = 'पासवर्ड मत बदलिये'; 
$strKorean = 'कोरियन';  

$strLengthSet = 'लंबाई/अर्थ*';
$strLimitNumRows = 'प्रति पृष्ट कितने रौ';
$strLinesTerminatedBy = 'लाईन समाप्त होता है';
$strLocalhost = 'Local';
$strLogin = 'लोगिन';
$strLogout = 'लोग औट';
$strLogPassword = 'पासव्रड:';
$strLogUsername = 'यूसरनेम:';

$strMoveTable = ' टेबल को (database<b>.</b>table) में  मूव करें:';
$strMoveTableOK = ' %s टेबल को %s में मूव कर दिया.';
$strMySQLShowProcess = 'प्रोसेस दिखाओ';
$strMySQLShowStatus = 'MySQL के runtime जानकारी  दिखाओ';
$strMySQLShowVars = 'MySQL के  system variables दिखाओ';

$strName = 'नाम';
$strNext = ' अगला';
$strNo = 'नहीं';
$strNoDatabases = 'कोइ डाटाबेस नहिं';
$strNoDatabasesSelected = ' कोइ डाटाबेस नहीं चुना गया है।';  
$strNoModification = 'कोइ बदलाव नहीं'; 
$strNoPassword = 'पासवर्ड नहीं है'; 
$strNoPrivileges = 'कोइ प्रिविलेज नहीं'; 
$strNoTablesFound = 'डाटाबेस में कोई टेबल नहीं।';
$strNotNumber = 'यह नंबर नहीं है!'; 
$strNoUsersFound = 'कोई यूसर नहीं।';

$strOperations = 'कार्रवाई';
$strOptimizeTable = ' टेबल को Optimize करें';
$strOr = 'अथवा';

$strPdfNoTables = ' कोई टेबल नहीं';
$strPhp = 'PHP Code बनाओ';
$strPmaDocumentation = 'phpMyAdmin डोक्युमेंटेशन';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = ' प्रिविलेज'; 

$strQBE = 'क्वरी';
$strQueryFrame = 'क्वरी पेज';
$strQuerySQLHistory = 'SQL- इतिहास';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'क्वरी को %01.4f सेकेंड का समय लगा';

$strRepairTable = ' टेबल को टीक करें';
$strRevoke = 'वापस लो';
$strRevokeMessage = 'आपने %s के privileges वापस ले लिया ';
$strRowLength = ' रौ की लंबाई';
$strRowsFrom = 'रौ,  इस  record  से #';
$strRowsModeHorizontal = 'समतल';
$strRowsModeOptions = ' %s रूप में और %s सेल के बाद शीर्षक को दोहराईये';
$strRowsModeVertical = 'खडा';
$strRunning = ' %s पर चल रहा है';
$strRunSQLQuery = 'डाटाबेस %s में SQL query/queries चलाइये ';
$strRussian = 'रशियन';  

$strSearch = 'सर्च';
$strSearchFormTitle = 'डाटाबेस में सर्च करें';
$strSearchInTables = ' टेबल में:';
$strSearchNeedle = 'शब्द अथवा वेल्यु जिसे सर्च करना है (wildcard: "%"):';
$strSearchOption1 = 'कोई भी एक शब्द';
$strSearchOption2 = 'सभी शब्द';
$strSearchOption3 = 'यथार्थ वाक्यांश';
$strSearchResultsFor = '"<i>%s</i>" %s के लिये सर्च के परिणाम :';
$strSearchType = 'खोजो:';
$strSelectADb = 'कृपया एक डाटाबेस चुनिये ';
$strSelectAll = ' सभी को सेल्कट करें';
$strSelectTables = ' टेबल चुनिये';
$strSend = 'फाईल मे सेव करें';
$strServerChoice = 'Server चुनिये';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strShow = 'दिखाओ';
$strShowAll = 'सभी दिखाओ';
$strShowColor = 'रंगीन दिखाओ';
$strShowGrid = 'grid दिखाओ';
$strShowingRecords = 'रौ देखिये';
$strShowPHPInfo = 'PHP कि जानकारी  दिखाओ';
$strShowTableDimension = ' टेबल के परिमाण दिखाओ';
$strShowTables = ' टेबल दिखाओ';
$strShowThisQuery = ' यह query वापस यहीं दिखायें ';
$strSplitWordsWithSpace = 'शब्दों में space (" ")  से अंतर करें.';
$strStrucData = 'संरचना और डाटा';
$strStrucOnly = 'केवल संरचना';
$strStructure = 'संरचना';
$strSuccess = 'आपकी SQL-query सफलता से पूरा किया';
$strSum = 'जोड';

$strTable = '  टेबल ';
$strTableComments = ' टेबल  की टिप्पणि';
$strTableEmpty = ' टेबल का नाम खाली है!';
$strTableHasBeenDropped = ' टेबल %s को ड्रोप किया';
$strTableHasBeenEmptied = ' टेबल %s को खाली किया';
$strTableHasBeenFlushed = ' टेबल %s को flush किया';
$strTableMaintenance = ' टेबल  रख-रखाव';
$strTables = ' %s  टेबल(s)';
$strTblPrivileges = '  केवल टेबल  के प्रिविलेज'; 
$strThreadSuccessfullyKilled = 'Thread %s को सफलता से मारा गया।'; 
$strTotal = ' कुल';
$strTurkish = 'तुर्क';  
$strType = ' प्रकार';

$strUncheckAll = ' सभी को अनचेक करें';
$strUnselectAll = ' सभी को अनसेल्कट करें';
$strUpdatePrivMessage = 'आपने %s के प्रिविलेज अपडेट कर दिया ।';
$strUpdateProfileMessage = 'प्रोफाइल अपडेट कर दिया ।';
$strUpdateQuery = ' क्वरी अपडेट करो';
$strUsage = 'उपयोग';
$strUseBackquotes = ' टेबल और फील्ड के नाम को backquotes से Enclose करें';
$strUser = 'यूसर';
$strUserEmpty = 'यूसरनेम खाली है!';
$strUserName = 'यूसर नेम';
$strUseTables = ' टेबल का उपयोग करो';

$strValue = 'मूल्य';

$strWelcome = ' %s मे स्वागत है';
$strWithChecked = 'चुने हुओं को:';
$strWrongUser = 'यूसरनेम/पासवर्ड गलत है।  Access denied.';

$strYes = 'हाँ ';

// To translate:
$strAbortedClients = 'Aborted'; //to translate
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
$strAddSearchConditions = 'Add search conditions (body of the "where" clause):'; //to translate
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)'; //to translate
$strAdministration = 'Administration'; //to translate
$strAffectedRows = 'Affected rows:'; //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?'; //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strArmenian = 'Armenian';  //to translate
$strAscending = 'Ascending'; //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strBaltic = 'Baltic';  //to translate
$strBeginCut = 'BEGIN CUT'; //to translate
$strBeginRaw = 'BEGIN RAW'; //to translate
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
$strBulgarian = 'Bulgarian';  //to translate
$strBusyPages = 'Busy pages';  //to translate
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strBzip = '"bzipped"'; //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.'; //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.'; //to translate
$strCardinality = 'Cardinality'; //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeDisplay = 'Choose Field to display'; //to translate
$strCharset = 'Charset';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCharsets = 'Charsets';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strColComFeat = 'Displaying Column Comments'; //to translate
$strCollation = 'Collation';  //to translate
$strCommand = 'Command'; //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompression = 'Compression'; //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s'; //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConnections = 'Connections'; //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCookiesRequired = 'Cookies must be enabled past this point.'; //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreatePdfFeat = 'Creation of PDFs'; //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCriteria = 'Criteria'; //to translate
$strCroatian = 'Croatian';  //to translate
$strCSV = 'CSV';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strCzech = 'Czech';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDanish = 'Danish';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDataDict = 'Data Dictionary';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDeleting = 'Deleting %s'; //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDescending = 'Descending'; //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisabled = 'Disabled'; //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDoAQuery = 'Do a "query by example" (wildcard: "%")'; //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDumpingData = 'Dumping data for table'; //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strDumpXRows = 'Dump %s row(s) starting at record # %s.'; //to translate
$strDynamic = 'dynamic'; //to translate

$strEmptyResultSet = 'MySQL returned an empty result set (i.e. zero rows).'; //to translate
$strEnabled = 'Enabled'; //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEndCut = 'END CUT'; //to translate
$strEndRaw = 'END RAW'; //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strEstonian = 'Estonian';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strFieldsEnclosedBy = 'Fields enclosed by'; //to translate
$strFieldsEscapedBy = 'Fields escaped by'; //to translate
$strFieldsTerminatedBy = 'Fields terminated by'; //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileNameTemplate = 'File name template';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate
$strFileToImport = 'File to import';  //to translate
$strFixed = 'fixed'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFormat = 'Format'; //to translate
$strFormEmpty = 'Missing value in the form !'; //to translate
$strFreePages = 'Free pages';  //to translate
$strFullText = 'Full Texts'; //to translate
$strFunction = 'Function'; //to translate

$strGenBy = 'Generated by'; //to translate
$strGeneralRelationFeat = 'General relation features'; //to translate
$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strGlobal = 'global';  //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGo = 'Go'; //to translate
$strGrantOption = 'Grant'; //to translate
$strGzip = '"gzipped"'; //to translate

$strHandler = 'Handler';  //to translate
$strHasBeenCreated = 'has been created.'; //to translate
$strHaveToShow = 'You have to choose at least one Column to display'; //to translate
$strHebrew = 'Hebrew';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate
$strHungarian = 'Hungarian';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strId = 'ID'; //to translate
$strIdxFulltext = 'Fulltext'; //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnore = 'Ignore'; //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strImportFiles = 'Import files';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexes = 'Indexes'; //to translate
$strIndexHasBeenDropped = 'Index %s has been dropped'; //to translate
$strIndex = 'Index'; //to translate
$strIndexName = 'Index name&nbsp;:'; //to translate
$strIndexType = 'Index type&nbsp;:'; //to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInnoDBPages = 'pages';  //to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInUse = 'in use'; //to translate
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
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate

$strKeyCache = 'Key cache';  //to translate
$strKeyname = 'Keyname'; //to translate
$strKill = 'Kill'; //to translate

$strLandscape = 'Landscape';  //to translate
$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLaTeX = 'LaTeX';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLinkNotFound = 'Link not found'; //to translate
$strLinksTo = 'Links to'; //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strLocationTextfile = 'Location of the textfile'; //to translate
$strLoginInformation = 'Login Information'; //to translate
$strLogServer = 'Server';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strModifications = 'Modifications have been saved'; //to translate
$strModifyIndexTopic = 'Modify an index'; //to translate
$strModify = 'Modify'; //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strMultilingual = 'multilingual';  //to translate
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
$strMySQLCharset = 'MySQL charset'; //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
$strMySQLSaid = 'MySQL said: '; //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDescription = 'no Description'; //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.'; //to translate
$strNoExplain = 'Skip Explain SQL'; //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.'; //to translate
$strNoIndex = 'No index defined!'; //to translate
$strNoIndexPartsDefined = 'No index parts defined!'; //to translate
$strNone = 'None'; //to translate
$strNoOptions = 'This format has no options';//to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoPhp = 'Without PHP Code'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNotOK = 'not OK'; //to translate
$strNotSet = '<b>%s</b> table not found or not set in %s'; //to translate
$strNoValidateSQL = 'Skip Validate SQL'; //to translate
$strNull = 'Null'; //to translate
$strNumberOfFields = 'Number of fields';  //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>'; //to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)'; //to translate
$strNumTables = 'Tables'; //to translate

$strOK = 'OK'; //to translate
$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate
$strOverhead = 'Overhead'; //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate

$strPageNumber = 'Page number:'; //to translate
$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPartialText = 'Partial Texts'; //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPassword = 'Password'; //to translate
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s'; //to translate
$strPdfInvalidTblName = 'The "%s" table doesn\'t exist!'; //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPerHour = 'per hour'; //to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strPersian = 'Persian';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!'; //to translate
$strPolish = 'Polish';  //to translate
$strPortrait = 'Portrait';  //to translate
$strPos1 = 'Begin'; //to translate
$strPrevious = 'Previous'; //to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped'; //to translate
$strPrimaryKeyName = 'The name of the primary key must be... PRIMARY!'; //to translate
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)'; //to translate
$strPrimary = 'Primary'; //to translate
$strPrint = 'Print';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrintView = 'Print view'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strProcesses = 'Processes'; //to translate
$strProcesslist = 'Process list'; //to translate
$strProtocolVersion = 'Protocol version';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate

$strQBEDel = 'Del'; //to translate
$strQBEIns = 'Ins'; //to translate
$strQueryCache = 'Query cache';  //to translate
$strQueryOnDb = 'SQL-query on database <b>%s</b>:'; //to translate
$strQueryType = 'Query type'; //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strReceived = 'Received'; //to translate
$strRecords = 'Records'; //to translate
$strReferentialIntegrity = 'Check referential integrity:'; //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.'; //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strRelations = 'Relations';  //to translate
$strRelationView = 'Relation view'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strRenameTableOK = 'Table %s has been renamed to %s'; //to translate
$strRenameTable = 'Rename table to'; //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strReplaceTable = 'Replace table data with file'; //to translate
$strReplication = 'Replication';  //to translate
$strReset = 'Reset'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strReType = 'Re-type'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRomanian = 'Romanian';  //to translate
$strRowSize = ' Row size '; //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strRows = 'Rows'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunQuery = 'Submit Query'; //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strSave = 'Save'; //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page'; //to translate
$strSearchOption4 = 'as regular expression'; //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strSelectFields = 'Select fields (at least one):'; //to translate
$strSelectNumRows = 'in query'; //to translate
$strSent = 'Sent'; //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strServer = 'Server';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strServerVersion = 'Server version'; //to translate
$strSessionValue = 'Session value'; //to translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').'; //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
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
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSort = 'Sort'; //to translate
$strSpaceUsage = 'Space usage'; //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:'; //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem'; //to translate
$strSQLQuery = 'SQL-query'; //to translate
$strSQLResult = 'SQL result'; //to translate
$strSQL = 'SQL'; //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer'; //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote'; //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String'; //to translate
$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatement = 'Statements'; //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatus = 'Status'; //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucCSV = 'CSV data'; //to translate
$strStrucExcelCSV = 'CSV for MS Excel data'; //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strStructPropose = 'Propose table structure'; //to translate
$strSubmit = 'Submit'; //to translate
$strSwedish = 'Swedish';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strTableOptions = 'Table options';  //to translate
$strTableStructure = 'Table structure for table'; //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strThai = 'Thai';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strThisHost = 'This Host'; //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTime = 'Time'; //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTotalUC = 'Total'; //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTraffic = 'Traffic'; //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate

$strUkrainian = 'Ukrainian';  //to translate
$strUnicode = 'Unicode';  //to translate
$strUnique = 'Unique';  //to translate
$strUnknown = 'unknown';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserOverview = 'User overview'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strUseTextField = 'Use text field'; //to translate
$strUseThisValue = 'Use this value';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strVar = 'Variable'; //to translate
$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strViewDumpDB = 'View dump (schema) of database';  //to translate
$strViewDump = 'View dump (schema) of table';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWestEuropean = 'West European';  //to translate
$strWildcard = 'wildcard';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strWriteRequests = 'Write requests';  //to translate

$strXML = 'XML';//to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
$strZip = '"zipped"' ;  //to translate

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
