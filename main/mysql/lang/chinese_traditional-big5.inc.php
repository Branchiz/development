<?php
/* $Id: chinese_traditional-big5.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Last translation by: Siu Sun <siusun@best-view.net>
 * Follow by the original translation of Taiyen Hung 洪泰元<yen789@pchome.com.tw>
 */

$charset = 'big5';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$mysql_5_1_doc_lang = 'zh';

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y, %I:%M %p';

$timespanfmt = '%s 日, %s 小時, %s 分鐘 %s 秒';

$strAbortedClients = '取消';
$strAccessDenied = '拒絕存取';
$strAccessDeniedCreateConfig = '有可能你未建立設定檔. 你可利用此 %1$s安裝程序%2$s 建立設定檔.';
$strAccessDeniedExplanation = 'phpMyAdmin 嘗試連線到 MySQL 伺服器, 但伺服器拒絕了連線. 您應於 config.inc.php 內檢查主機名稱, 登入名稱及密碼及確保這些資料是與系統管理人員所提供的 MySQL 伺服器資料相同';
$strAction = '執行';
$strAddAutoIncrement = "新增 AUTO_INCREMENT 數值";
$strAddConstraints = '加入限制';
$strAddDeleteColumn = '新增/減少 選擇欄';
$strAddDeleteRow = '新增/減少 篩選列';
$strAddFields = '新增 %s 個欄位';
$strAddHeaderComment = '於標題加入個人註解 (\\n 開新行)';
$strAddIntoComments = '加入註解文字';
$strAddNewField = '增加新欄位';
$strAddPrivilegesOnDb = '於以下資料庫加入權限';
$strAddPrivilegesOnTbl = '於以下資料表加入權限';
$strAddSearchConditions = '增加檢索條件 ("where" 子句的主體)';
$strAddToIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strAddUser = '新增使用者';
$strAddUserMessage = '您已新增了一個新使用者.';
$strAdministration = '系統管理';
$strAffectedRows = '影響列數: ';
$strAfter = '在 %s 之後';
$strAfterInsertBack = '返回';
$strAfterInsertNewInsert = '新增一筆記錄';
$strAfterInsertNext = '編輯新一列';
$strAfterInsertSame = '返回這頁';
$strAll = '全部';
$strAllTableSameWidth = '以相同寬度顯示所有資料表?';
$strAlterOrderBy = '根據欄位內容排序記錄';
$strAnalyzeTable = '分析資料表';
$strAnd = '與';
$strAndThen = '然後';
$strAnIndex = '索引已經新增到 %s';
$strAny = '任何';
$strAnyHost = '任何主機';
$strAnyUser = '任何使用者';
$strApproximateCount = '可能接近. 請參看 FAQ 3.11';
$strAPrimaryKey = '主鍵已經新增到 %s';
$strArabic = '阿拉伯語';
$strArmenian = '美式英語';
$strAscending = '遞增';
$strAtBeginningOfTable = '於資料表開頭';
$strAtEndOfTable = '於資料表尾端';
$strAttr = '屬性';
$strAutomaticLayout = '自動格式';

$strBack = '回上一頁';
$strBaltic = '波羅的海語';
$strBeginCut = '開始 剪取';
$strBeginRaw = '開始 原始資料';
$strBinary = '二進制碼';
$strBinaryDoNotEdit = '二進制碼 - 不能編輯';
$strBinaryLog = '二進制記錄';
$strBinLogEventType = '事件方式';
$strBinLogInfo = '資料';
$strBinLogName = '記錄檔案稱';
$strBinLogOriginalPosition = '原有位置';
$strBinLogPosition = '位置';
$strBinLogServerId = '伺服器 ID';
$strBookmarkAllUsers = '所有用者可讀取此書籤';
$strBookmarkCreated = '書籤 %s 已建立';
$strBookmarkDeleted = '書籤已經刪除.';
$strBookmarkLabel = '書籤名稱';
$strBookmarkQuery = 'SQL 語法書籤';
$strBookmarkReplace = '取代相同名稱之書籤';
$strBookmarkThis = '將此 SQL 語法加入書籤';
$strBookmarkView = '查看';
$strBrowse = '瀏覽';
$strBrowseDistinctValues = '瀏覽不同數值';
$strBrowseForeignValues = '瀏覽外來值';
$strBufferPool = '緩衝區';
$strBufferPoolActivity = '緩衝區活動率';
$strBufferPoolUsage = '緩衝區使用空間';
$strBufferReadMisses = '讀取遺漏';
$strBufferReadMissesInPercent = '讀取遺漏 %';
$strBufferWriteWaits = '寫入等候';
$strBufferWriteWaitsInPercent = '寫入等候 %';
$strBulgarian = '保加利亞語';
$strBusyPages = '繁忙頁';
$strBzError = 'phpMyAdmin 無法壓縮因於這個 php 版本的 Bz2 模組錯誤. 強列要求於 phpMyAdmin 設定檔設定 <code>$cfg[\'BZipDump\']</code> 為<code>FALSE</code>. 如果想使用 Bz2 壓縮功能,請更新 php 到最新版本. 詳情請參看 php 錯誤報報 %s .';
$strBzip = '"bzipped"';

$strCalendar = '日曆';
$strCanNotLoadImportPlugins = '無法讀取載入的外掛程式, 請檢查安裝程序!';
$strCannotLogin = '無法登入 MySQL 伺服器';
$strCantLoad = '無法讀取 %s 模組,<br />請檢查 PHP 設定';
$strCantLoadRecodeIconv = '未能讀取 iconv 或重新編碼程式來作文字編碼轉換, 請設定 php 來啟動這些模組或取消 phpMyAdmin 使用文字編碼轉換功能.';
$strCantRenameIdxToPrimary = '無法將索引更名為 PRIMARY!';
$strCantUseRecodeIconv = '當文編碼模組讀取後,未能使用 iconv, libiconv 或 recode_string 功能. 請檢查您的 php 設定.';
$strCardinality = '組別';
$strCaseInsensitive = '大小寫不相符';
$strCaseSensitive = '大小寫相符';
$strCentralEuropean = '中歐語';
$strChange = '修改';
$strChangeCopyMode = '建立新使用者及使用相同之權限, 及 ...';
$strChangeCopyModeCopy = '... 保留舊使用者.';
$strChangeCopyModeDeleteAndReload = ' ... 刪除舊使用者及重新讀取權限資料表.';
$strChangeCopyModeJustDelete = ' ... 刪除舊使用者.';
$strChangeCopyModeRevoke = ' ... 廢除所有舊使用者有效之權限並刪除.';
$strChangeCopyUser = '更改登入資訊 / 複製使用者';
$strChangeDisplay = '選擇顯示之欄位';
$strChangePassword = '更改密碼';
$strCharset = '文字編碼 (Charset)';
$strCharsetOfFile = '文字編碼檔案:';
$strCharsets = '文字編碼';
$strCharsetsAndCollations = '文字編碼及校對';
$strCheckAll = '全選';
$strCheckOverhead = '檢查額外記錄 (overhead)'; // nor sure yet.
$strCheckPrivs = '查詢權限';
$strCheckPrivsLong = '查詢資料庫 &quot;%s&quot; 之權限.';
$strCheckTable = '檢查資料表';
$strChoosePage = '請選擇需要編輯的頁碼';
$strColComFeat = '顯示欄位註解';
$strCollation = '校對';
$strColumnNames = '欄位名稱';
$strColumnPrivileges = '指定欄位權限';
$strCommand = '指令';
$strComments = '註解';
$strCommentsForTable = 'COMMENTS FOR TABLE';  // keep in SQL statement
$strCompatibleHashing = 'MySQL&nbsp;4.0 相容';
$strCompleteInserts = '使用完整新增指令';
$strCompression = '壓縮';
$strCompressionWillBeDetected = '載入檔案壓縮會自動檢查: %s';
$strConfigDefaultFileError = '無法讀取預設設定: "%1$s"';
$strConfigFileError = 'phpMyAdmin 未能讀取您的設定檔! 這可能是因為 php 找到語法上的錯誤或 php 未能找到檔案而成.<br />請嘗試直接按下下方的連結開啟並查看 php 的錯誤信息. 通常的錯誤都來自某處漏了引號或分別.<br />如果按下連結後出現空白頁, 即代表沒有任何問題.';
$strConfigureTableCoord = '請設定表格 %s 內的坐標';
$strConnectionError = '無法連線: 錯誤設定.';
$strConnections = '連線';
$strConstraintsForDumped = '備份資料表限制';
$strConstraintsForTable = '資料表限制';
$strCookiesRequired = 'Cookies 必須啟動才能登入.';
$strCopy = '複製';
$strCopyDatabaseOK = '資料庫 %s 已複製到 %s';
$strCopyTable = '複製資料表到： (格式為 資料庫名稱<b>.</b>資料表名稱):';
$strCopyTableOK = '已經將資料表 %s 複製為 %s.';
$strCopyTableSameNames = '無法複製到相同資料表!';
$strCouldNotKill = 'phpMyAdmin 無法中斷指令 %s. 可能這指令已經結束.';
$strCreate = '建立';
$strCreateDatabaseBeforeCopying = '複製前建立資料庫 (CREATE DATABASE)';
$strCreateIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strCreateIndexTopic = '新增一組索引';
$strCreateNewDatabase = '建立新資料庫';
$strCreateNewTable = '建立新資料表於資料庫 %s';
$strCreatePage = '建立新一頁';
$strCreatePdfFeat = '建立 PDF';
$strCreationDates = '建立/更新/檢查 日期';
$strCriteria = '篩選';
$strCroatian = '克羅西亞語';
$strCSV = 'CSV';  //USE ENG
$strCyrillic = '西里爾語';
$strCzech = '捷克語';
$strCzechSlovak = '捷克語';

$strDanish = '丹麥語';
$strData = '資料';
$strDatabase = '資料庫';
$strDatabaseEmpty = '資料庫名稱並未輸入!!';
$strDatabaseExportOptions = '資料庫輸出選項';
$strDatabaseHasBeenDropped = '資料庫 %s 已被刪除';
$strDatabases = '資料庫';
$strDatabasesDropped = '%s 個資料庫已成功刪除.';
$strDatabasesStats = '資料庫統計';
$strDatabasesStatsDisable = '停止統計數據';
$strDatabasesStatsEnable = '啟動統計數據';
$strDatabasesStatsHeavyTraffic = '註: 啟動資料庫統計數據可能會產生大量由 Web 伺服器及 MySQL 之間的流量.';
$strDataDict = '數據字典';
$strDataOnly = '只有資料';
$strDataPages = '包含資料頁';
$strDBComment = '資料庫註解文字: ';
$strDBCopy = '複製資料庫到';
$strDbPrivileges = '指定資料庫權限';
$strDBRename = '更改資料庫名稱到';
$strDbSpecific = '指定資料庫';
$strDefault = '預設值';
$strDefaultEngine = '這 MySQL 伺服器的預設儲存引擎是 %s ';
$strDefaultValueHelp = '預設值: 請只輸入該預設值, 無需加上任何反斜線或引號';
$strDefragment = '整理資料表';
$strDelayedInserts = '使用延遲式新增';
$strDelete = '刪除';
$strDeleteAndFlush = '刪除使用者及重新讀取權限.';
$strDeleteAndFlushDescr = '這是一個最清潔的做法,但重新讀取權限需一段時間.';
$strDeleted = '記錄已被刪除';
$strDeletedRows = '已刪除欄數:';
$strDeleteNoUsersSelected = '並未選擇需要刪除之使用者!';
$strDeleting = '刪除 %s';
$strDelOld = '本頁的參考到資料表已不存在. 您希望刪除這些參考嗎?';
$strDescending = '遞減';
$strDescription = '說明';
$strDictionary = '字典';
$strDirtyPages = '問題頁';
$strDisabled = '未啟動';
$strDisableForeignChecks = '暫定外來鍵 (Foreign Key) 檢查';
$strDisplayFeat = '功能顯示';
$strDisplayOrder = '顯示次序';
$strDisplayPDF = '顯示 PDF 概要';
$strDoAQuery = '以範例查詢 (萬用字元 : "%")';
$strDocu = '說明文件';
$strDoYouReally = '您確定要 ';
$strDrop = '刪除';
$strDropDatabaseStrongWarning = '您將會刪除整個資料庫!';
$strDropUsersDb = '刪除與使用者相同名稱之資料庫.';
$strDumpingData = '列出以下資料庫的數據：';
$strDumpSaved = '備份已儲到檔案 %s.';
$strDumpXRows = '備份 %s 行, 由 %s 行開始.';
$strDynamic = '動態';

$strEdit = '編輯';
$strEditPDFPages = '編輯 PDF 頁碼';
$strEditPrivileges = '編輯權限';
$strEffective = '實際';
$strEmpty = '清空';
$strEmptyResultSet = 'MySQL 傳回的查詢結果為空 (原因可能為：沒有找到符合條件的記錄)';
$strEnabled = '啟動';
$strEncloseInTransaction = '使用事務塊 (Transaction) 方式';
$strEnd = '最後一頁';
$strEndCut = '結束 剪取';
$strEndRaw = '結束 原始資料';
$strEngineAvailable = '%s 已支援這 MySQL 伺服器.';
$strEngineDisabled = '%s 己於這個 MySQL 伺服器中停用.';
$strEngines = '引擎'; 
$strEngineUnsupported = '這 MySQL 版本並不接受 %s 儲存引擎.';
$strEnglish = '英語';
$strEnglishPrivileges = '注意: MySQL 權限名稱會以英語顯示';
$strError = '錯誤';
$strErrorInZipFile = 'ZIP 檔案錯誤:';
$strEscapeWildcards = '萬用符號 _ 及 % 應正確地加入 \ ';
$strEsperanto = '世界語';
$strEstonian = '愛沙尼亞語';
$strExcelEdition = 'Excel 版本';
$strExecuteBookmarked = '執行書籤查詢';
$strExplain = '說明 SQL';
$strExport = '輸出';
$strExtendedInserts = '伸延新增模式';
$strExtra = '附加';

$strFailedAttempts = '嘗試失敗';
$strField = '欄位';
$strFieldHasBeenDropped = '資料表 %s 已被刪除';
$strFields = '欄位';
$strFieldsEnclosedBy = '「欄位」使用字元：';
$strFieldsEscapedBy = '「ESCAPE」使用字元：';
$strFieldsTerminatedBy = '「欄位分隔」使用字元：';
$strFileAlreadyExists = '檔案 %s 已存在,請更改檔案名稱或選擇「覆寫己存在檔案」選項.';
$strFileCouldNotBeRead = '讀案無法讀取';
$strFileNameTemplate = '檔案名稱樣式';
$strFileNameTemplateDescriptionDatabase = '資料庫名稱';
$strFileNameTemplateDescriptionServer = '伺服器名稱';
$strFileNameTemplateDescriptionTable = '資料表名稱';
$strFileNameTemplateRemember = '保留樣式名稱';
$strFileToImport = '載入檔案';
$strFixed = '固定';
$strFlushPrivilegesNote = '註: phpMyAdmin 直接由 MySQL 權限資料表取得使用者權限. 如果使用者自行更改資料表, 資料表內容將可能與實際使用者情況有異. 在這情況下, 您應在繼續前 %s重新載入%s 權限資料表.';
$strFlushQueryCache = '強迫更新語法快取';
$strFlushTable = '強迫更新資料表 ("FLUSH")';
$strFlushTables = '強迫更新 (關閉) 所有資料表';
$strFormat = '格式';
$strFormEmpty = '表格內漏填一些資料!';
$strFreePages = '閒置頁';
$strFullText = '顯示完整文字';
$strFunction = '函數';

$strGenBy = '建立';
$strGeneralRelationFeat = '一般關聯功能';
$strGenerate = '產生';
$strGeneratePassword = '產生密碼';
$strGenTime = '建立日期';
$strGeorgian = '格魯吉亞語';
$strGerman = '德語';
$strGlobal = '整體';
$strGlobalPrivileges = '整體權限';
$strGlobalValue = '整體值';
$strGo = '執行';
$strGrantOption = '授權';
$strGreek = '希臘語';
$strGzip = '"gzipped"';

$strHandler = '操作者';
$strHasBeenAltered = '已經修改';
$strHasBeenCreated = '已經建立';
$strHaveToShow = '您需要選擇最少顯示一行欄位';
$strHebrew = '希伯來語';
$strHome = '主目錄';
$strHomepageOfficial = 'phpMyAdmin 官方網站';
$strHost = '主機';
$strHostEmpty = '請輸入主機名稱!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = '匈牙利語';

$strIcelandic = '冰島語'; 
$strId = 'ID'; // use eng
$strIdxFulltext = '全文檢索';
$strIgnore = '忽略';
$strIgnoreDuplicates = '略過重覆列';
$strIgnoreInserts = '使用忽略加入 (insert)'; 
$strImport = '載入';
$strImportFiles = '輸入檔案';
$strImportFormat = '載入檔案格式';
$strImportSuccessfullyFinished = '載入成功, 共 %d 句語法已執行.';
$strIndex = '索引鍵 INDEX';
$strIndexes = '索引';
$strIndexHasBeenDropped = '索引 %s 已被刪除';
$strIndexName = '索引名稱&nbsp;:';
$strIndexType = '索引類型&nbsp;:';
$strIndexWarningTable = '於資料表 `%s` 中有索引問題';
$strInnoDBAutoextendIncrement = '自動伸延大小';
$strInnoDBAutoextendIncrementDesc = '當資料表容量接近滿時, 自動增大容量的大小.';
$strInnoDBBufferPoolSize = '緩衝區大小';
$strInnoDBBufferPoolSizeDesc = 'InnoDB 資料表用於快取資料及索引時使用的記憶體綬緩衝大小.';
$strInnoDBDataFilePath = '資料檔案';
$strInnoDBDataHomeDir = '資料主目錄';
$strInnoDBDataHomeDirDesc = '所有 InnoDB 資料檔案的主資料目錄位置.';
$strInnoDBPages = '頁';
$strInnodbStat = 'InnoDB 狀態';
$strInsecureMySQL = '設定檔內有關設定 (root登入及沒有密碼) 與預設的 MySQL 權限戶口相同。 MySQL 伺服器在這預設的設定運行的話會很容易被入侵，您應更改有關設定去防止安全漏洞。';
$strInsert = '新增';
$strInsertAsNewRow = '儲存為新記錄';
$strInsertedRowId = '新增資料列 id:';
$strInsertedRows = '新增列數:';
$strInternalNotNecessary = '* 當內部關聯在 InnoDB 已存在時是無需要的.';
$strInternalRelations = '內部關聯';
$strInUse = '使用中';
$strInvalidAuthMethod = '於設定內設定錯誤認證方式:';
$strInvalidColumn = '欄 (%s) 區分錯誤.!';
$strInvalidColumnCount = '欄位數目需要大於零.';
$strInvalidCSVFieldCount = 'CSV 檔案第 %d 行中之欄位總數錯誤.';
$strInvalidCSVFormat = 'Invalid format of CSV 檔案第 %d 行中之格式錯誤.';
$strInvalidCSVParameter = 'CSV 載入時參數錯誤: %s';
$strInvalidFieldAddCount = '你最少要加入一個欄位.';
$strInvalidFieldCount = '資料表最少需要有一個欄位.';
$strInvalidLDIImport = '這外掛程式不支援壓縮輸入!';
$strInvalidRowNumber = '%d 不是一個有效的列數數目.';
$strInvalidServerHostname = '伺服器 %1$s 主機名稱錯誤, 請翻查設定值.';
$strInvalidServerIndex = '伺服器索引錯誤: "%s"';

$strJapanese = '日語';
$strJoins = '結合';
$strJumpToDB = '跳到資料庫 &quot;%s&quot;.';
$strJustDelete = '只從權限資料庫刪除使用者.';
$strJustDeleteDescr = ' &quot;刪除&quot; 的使用者仍然能夠登入資料庫直至重新載入資料庫為止.';

$strKeepPass = '請不要更改密碼';
$strKeyCache = '鍵快取';
$strKeyname = '鍵名';
$strKill = 'Kill'; //should expressed in English
$strKorean = '韓語';

$strLandscape = '橫向';
$strLanguageUnknown = '不知名語言: %1$s.';
$strLatchedPages = '鎖上頁';
$strLaTeX = 'LaTeX';  // use eng
$strLatexCaption = '資料表標題';
$strLatexContent = '資料表 __TABLE__ 內容';
$strLatexContinued = '(連續)';
$strLatexContinuedCaption = '連續資料表標題';
$strLatexIncludeCaption = '包括資料表標題';
$strLatexLabel = '標記鍵名';
$strLatexStructure = '資料表 __TABLE__ 結構';
$strLatvian = '拉脫維亞語';
$strLDI = 'CSV 使用 LOAD DATA';
$strLDILocal = '使用 LOCAL 關鍵字';
$strLengthSet = '長度/集合*';
$strLimitNumRows = '筆記錄/每頁';
$strLinesTerminatedBy = '「下一行」使用字元：';
$strLinkNotFound = '找不到連結';
$strLinksTo = '連結到';
$strLithuanian = '立陶宛語';
$strLocalhost = '本地';
$strLocationTextfile = '文字檔案的位置';
$strLogin = '登入';
$strLoginInformation = '登入資訊';
$strLogout = '登出系統';
$strLogPassword = '密碼:';
$strLogServer = '伺服器';
$strLogUsername = '登入名稱:';
$strLongOperation = '這個作業所用時間會較長, 繼續?';

$strMaxConnects = '最大連線數目';
$strMaximalQueryLength = '建立之查詢最大長度';
$strMaximumSize = '最大容量: %s%s'; 
$strMbExtensionMissing = '找不到 PHP 內的 mbstring 編碼模組, 沒有這個模組, phpMyAdmin 無法準確地分割雙字元文字, 而可能產生問題.';
$strMbOverloadWarning = '你在 PHP 設定內啟動了 mbstring.func_overload 選項, 這個選項暫時不兼容 phpMyAdmin , 你可能會損失部份資料!';
$strMIME_available_mime = '可使用 MIME 類型';
$strMIME_available_transform = '可使用轉換方式';
$strMIME_description = '說明';
$strMIME_MIMEtype = 'MIME 類型';
$strMIME_nodescription = '這個轉換方式沒有說明.<br />請向作者查詢 %s 是甚麼用途.';
$strMIME_transformation = '瀏覽器轉換方式';
$strMIME_transformation_note = '有關可使用之轉換方式選項及 MINE 類型轉換選項, 請查看 %s轉換方式說明%s';
$strMIME_transformation_options = '轉換方式選項';
$strMIME_transformation_options_note = '請用以下的格式輸入轉換選項值: \'a\', 100, b,\'c\'...<br />如您需要輸入反斜線 ("\") 或單引號 ("\'") 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME 類型以斜體顯示是沒有分隔轉換功能';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  // keep in SQL statement
$strModifications = '修改已儲存';
$strModify = '修改';
$strModifyIndexTopic = '修改索引';
$strMoveTable = '移動資料表到：(格式為 資料庫名稱<b>.</b>資料表名稱)';
$strMoveTableOK = '資料表 %s 已經移動到 %s.';
$strMoveTableSameNames = '無法移動到相同資料表!';
$strMultilingual = '多語言';
$strMyISAMDataPointerSize = '資料指標大小';
$strMyISAMDataPointerSizeDesc = '預設的資料指標大小時當以 CREATE TABLE 建立 MyISAM 資料表, 而並無設定最大列數 (MAX_ROWS) 時, 將會以位完組為設定大小';
$strMyISAMMaxExtraSortFileSize = '臨時檔案建立索引時最大的容量';
$strMyISAMMaxExtraSortFileSizeDesc = '如臨時檔案用作快速 MyISAM 索引時大於這個設定的容量, 建議使用鍵名快取方式.';
$strMyISAMMaxSortFileSize = '臨時排序檔案最大容量';
$strMyISAMMaxSortFileSizeDesc = 'MySQL 用於重建 MyISAM 索引 (REPAIR TABLE, ALTER TABLE, 或 LOAD DATA INFILE) 時的臨時檔案大小.';
$strMyISAMRecoverOptions = '自動修復模式';
$strMyISAMRecoverOptionsDesc = '這個模式將會自動修復損壞之 MyISAM 資料表, 如同於伺服器啟動設定加入 --myisam-recover 選項.';
$strMyISAMRepairThreads = '修復工作';
$strMyISAMRepairThreadsDesc = '如數值大於 1 , MyISAM 資料表於修復時之索引將會以同步建立.';
$strMyISAMSortBufferSize = '排序緩衝大小';
$strMyISAMSortBufferSizeDesc = '這個緩衝大小是分配給在執行修復資料表指令 (REPAIR TABLE) 、執行 CREATE INDEX 或 ALTER TABLE 指令時, 用於排序 MyISAM 索引之用';
$strMySQLCharset = 'MySQL 文字編碼';
$strMysqlClientVersion = 'MySQL 客戶端版本';
$strMySQLConnectionCollation = 'MySQL 連線校對';
$strMySQLSaid = 'MySQL 傳回： ';
$strMySQLShowProcess = '顯示程序 (Process)';
$strMySQLShowStatus = '顯示 MySQL 執行狀態';
$strMySQLShowVars = '顯示 MySQL 系統變數';

$strName = '名稱';
$strNext = '下一個';
$strNo = ' 否 ';
$strNoActivity = '由於已閒置了達 %s 秒, 請重新登入';
$strNoDatabases = '沒有資料庫';
$strNoDatabasesSelected = '沒有資料庫選擇.';
$strNoDescription = '沒有說明';
$strNoDetailsForEngine = '這儲存引擎並無詳細的狀態資料.';
$strNoDropDatabases = '"DROP DATABASE" 指令已經停用.';
$strNoExplain = '略過說明 SQL';
$strNoFilesFoundInZip = '於 ZIP 檔案內找不到任何檔案!';
$strNoFrames = 'phpMyAdmin 較為適合使用在支援<b>頁框</b>的瀏覽器.';
$strNoIndex = '沒有已定義的索引!';
$strNoIndexPartsDefined = '部份索引資料還未定義!';
$strNoModification = '沒有變更';
$strNone = '不適用';
$strNoOptions = '這種格式並無選項';
$strNoPassword = '不用密碼';
$strNoPermission = 'Web 伺服器沒有權限儲存檔案 %s.';
$strNoPhp = '移除 PHP 程式碼';
$strNoPrivileges = '沒有權限';
$strNoRights = '您現在沒有足夠的權限!';
$strNoRowsSelected = '並無資料列已選擇';
$strNoSpace = '空間不足儲存檔案 %s.';
$strNoTablesFound = '資料庫中沒有資料表';
$strNoThemeSupport = '不支援款式功能, 請查看設定案及儲存款式檔案的資料夾 %s.';
$strNotNumber = '這不是一個數字!';
$strNotOK = '未能確定';
$strNotSet = '<b>%s</b> 資料表找不到或還未在 %s 設定';
$strNoUsersFound = '找不到使用者';
$strNoValidateSQL = '略過檢查 SQL';
$strNull = 'Null'; //should expressed in English
$strNumberOfFields = '欄位數目';
$strNumSearchResultsInTable = '%s 項資料符合 - 於資料表 <i>%s</i>';
$strNumSearchResultsTotal = '<b>總計:</b> <i>%s</i> 項資料符合';
$strNumTables = '個資料表';

$strOK = '確定';
$strOpenNewWindow = '開啟新 phpMyAdmin 視窗';
$strOperations = '管理';
$strOperator = '操作員';
$strOptimizeTable = '最佳化資料表';
$strOr = '或';
$strOverhead = '多餘';
$strOverwriteExisting = '覆寫已存在檔案';

$strPageNumber = '頁碼:';
$strPagesToBeFlushed = '強迫更新頁';
$strPaperSize = '紙張大小';
$strPartialImport = '部份載入';
$strPartialText = '顯示部份文字';
$strPassword = '密碼';
$strPasswordChanged = '%s 的密碼已成功更改.';
$strPasswordEmpty = '請輸入密碼!';
$strPasswordHashing = '密碼雜湊';
$strPasswordNotSame = '第二次輸入的密碼不同!';
$strPDF = 'PDF';  // USE ENG
$strPdfDbSchema = '"%s" 資料庫概要 - 第 %s 頁';
$strPdfInvalidTblName = '資料表 "%s" 不存在!';
$strPdfNoTables = '沒有資料表';
$strPDFReportTitle = '報告標題';
$strPerHour = '每小時';
$strPerMinute = '每分鐘';
$strPerSecond = '每秒';
$strPersian = '波斯語';
$strPhoneBook = '電話簿';
$strPhp = '建立 PHP 程式碼';
$strPHP40203 = '您正使用 PHP 版本 4.2.3, 這版本有一個雙字節字元的嚴重錯誤(mbstring). 請參閱 PHP 臭蟲報告編號 19404. phpMyAdmin 並不建議使用這個版本的 PHP .';
$strPHPVersion = 'PHP 版本';
$strPmaDocumentation = 'phpMyAdmin 說明文件';
$strPmaUriError = ' 必須在設定檔內設定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> !';
$strPolish = '波蘭語';
$strPortrait = '直向';
$strPos1 = '第一頁';
$strPrevious = '前一頁';
$strPrimary = '主鍵 PRIMARY';
$strPrimaryKeyHasBeenDropped = '主鍵已被刪除';
$strPrimaryKeyName = '主鍵的名稱必須稱為 PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>必須</b>是主鍵的名稱以及是<b>唯一</b>一組主鍵!)';
$strPrint = '列印';
$strPrintView = '列印檢視';
$strPrintViewFull = '列印檢視 (顯示完整文字)';
$strPrivDescAllPrivileges = '包括所有權限除了授權 (GRNANT).';
$strPrivDescAlter = '容許修改現有資料表的結構.';
$strPrivDescAlterRoutine = '容許修改及刪除儲存程序.';
$strPrivDescCreateDb = '容許建立新資料庫及資料表.';
$strPrivDescCreateRoutine = '容許建立儲存程序';
$strPrivDescCreateTbl = '容許建立新資料表.';
$strPrivDescCreateTmpTable = '容許建立暫時性資料表.';
$strPrivDescCreateUser = '容許建立、刪除及重新命名使用者戶口.';
$strPrivDescCreateView = '容許建立新的檢視.';
$strPrivDescDelete = '容許刪除記錄.';
$strPrivDescDropDb = '容許刪除資料庫及資料表.';
$strPrivDescDropTbl = '容許刪除資料表.';
$strPrivDescExecute = '容許 執行預先儲存之程式. 於本 MySQL 版本無效.';
$strPrivDescExecute5 = '容許執行儲存程序.';
$strPrivDescFile = '容許輸入及輸出數據到檔案.';
$strPrivDescGrant = '容許新增使用者及權限而無需重新讀取權限資料表.';
$strPrivDescIndex = '容許建立及刪除索引.';
$strPrivDescInsert = '容許新增及取代數據.';
$strPrivDescLockTables = '容許鎖上現時連線之資料表.';
$strPrivDescMaxConnections = '限制每小時使用者開啟新連線的數目.';
$strPrivDescMaxQuestions = '限制每小時使用者查詢的數目.';
$strPrivDescMaxUpdates = '限制每小時使用者更改資料表及數據表之指令的數目.';
$strPrivDescMaxUserConnections = '限制每個使用者之同步連線.';
$strPrivDescProcess3 = '容許中止其他使用者之程序.';
$strPrivDescProcess4 = '容許檢視系統執行清單完整之查詢.';
$strPrivDescReferences = '於本 MySQL 版本無效.';
$strPrivDescReload = '容許重新讀取伺服器設定及強行更新伺服器快取記憶.';
$strPrivDescReplClient = '容許用戶查詢 slaves / masters 在何處.';
$strPrivDescReplSlave = '需要複製的 slaves.';
$strPrivDescSelect = '容許讀取數據.';
$strPrivDescShowDb = '可讀取整個資料庫清單.';
$strPrivDescShowView = '容許執行 SHOW CREATE VIEW 查詢.'; 
$strPrivDescShutdown = '容許停止伺服器.';
$strPrivDescSuper = '容許連線, 就算超過了最大連線限制; 用於最高系統管理如設定整體權限或中止其他使用者指令.';
$strPrivDescUpdate = '容許更新數據.';
$strPrivDescUsage = '沒有權限.';
$strPrivileges = '權限';
$strPrivilegesReloaded = '權限已成功重新讀取.';
$strProcesses = '處理';
$strProcesslist = '系統執行清單';
$strProtocolVersion = '通訊協定版本';
$strPutColNames = '將欄位名稱放在首行';

$strQBE = '依範例查詢 (QBE)';
$strQBEDel = '移除';
$strQBEIns = '新增';
$strQueryCache = '查詢快取';
$strQueryFrame = '查詢視窗';
$strQueryOnDb = '在資料庫 <b>%s</b> 執行 SQL 語法:';
$strQueryResultsOperations = '查詢結果操作';
$strQuerySQLHistory = 'SQL 歷程';
$strQueryStatistics = '<b>查詣統計</b>: 當統計啟動後, 共有 %s 個查詢傳送到此伺服器.';
$strQueryTime = '查詢需時 %01.4f 秒';
$strQueryType = '查詢方式';
$strQueryWindowLock = '不要將這語法覆蓋到本視窗外的SQL語法';

$strReadRequests = '讀取要求';
$strReceived = '接收';
$strRecords = '記錄';
$strReferentialIntegrity = '檢查指示完整性:';
$strRefresh = '更新';
$strRelationalSchema = '關聯概要';
$strRelationNotWorking = '關聯資料表的附加功能未能啟動, %s請按此%s 查出問題原因.';
$strRelations = '關聯';
$strRelationsForTable = 'RELATIONS FOR TABLE';  // keep in SQL statement
$strRelationView = '關聯檢視';
$strReloadingThePrivileges = '重新讀取權限';
$strReloadPrivileges = '重新讀取權限';  //to translate
$strRemoveSelectedUsers = '移除已選擇使用者';
$strRenameDatabaseOK = '資料庫 %s 已更改名稱為 %s';
$strRenameTable = '將資料表改名為';
$strRenameTableOK = '已經將資料表 %s 改名成 %s';
$strRepairTable = '修復資料表';
$strReplaceNULLBy = '將 NULL 取代為';
$strReplaceTable = '以檔案取代資料表資料';
$strReplication = '複製';
$strReset = '重置';
$strResourceLimits = '資源限制';
$strReType = '確認密碼';
$strRevoke = '移除';
$strRevokeAndDelete = '廢除使用者所有有效之權限並刪除.';
$strRevokeAndDeleteDescr = '使用者仍然有 USAGE 權限直至權限資料表更新讀取.';
$strRevokeMessage = '您已移除這位使用者的權限: %s';
$strRomanian = '羅馬尼亞語';
$strRowLength = '資料列長度';
$strRows = '資料列列數';
$strRowsFrom = '筆記錄，開始列數:';
$strRowSize = '資料列大小';
$strRowsModeFlippedHorizontal = '垂直 (旋轉標題)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '顯示為 %s 方式 及 每隔 %s 行顯示欄名';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '資料列統計數值';
$strRunning = '在 %s 執行';
$strRunQuery = '執行語法';
$strRunSQLQuery = '在資料庫 %s 執行以下指令';
$strRunSQLQueryOnServer = '於伺服器 %s 執行 SQL 語法';
$strRussian = '俄語';

$strSave = '儲存';
$strSaveOnServer = '儲存到伺服器於 %s 目錄';
$strScaleFactorSmall = '比例倍數太細, 無法將圖表放在一頁內';
$strSearch = '搜索';
$strSearchFormTitle = '搜索資料庫';
$strSearchInTables = '於以下資料表:';
$strSearchNeedle = '尋找之文字或數值 (萬用字元: "%"):';
$strSearchOption1 = '任何一組文字';
$strSearchOption2 = '所有文字';
$strSearchOption3 = '完整詞語';
$strSearchOption4 = '以規則表示法 (regular expression) 搜索';
$strSearchResultsFor = '搜索 "<i>%s</i>" 的結果 %s:';
$strSearchType = '尋找:';
$strSecretRequired = '設定檔案現在需要密碼 (passphrase) (blowfish_secret).';
$strSelectADb = '請選擇資料庫';
$strSelectAll = '全選';
$strSelectBinaryLog = '選擇檢視二進制記錄';
$strSelectFields = '選擇欄位 (至少一個)';
$strSelectNumRows = '查詢中';
$strSelectTables = '選擇資料表';
$strSend = '下載儲存';
$strSent = '送出';
$strServer = '伺服器';
$strServerChoice = '選擇伺服器';
$strServerNotResponding = '伺服器並無回應';
$strServerStatus = '運行資訊';
$strServerStatusDelayedInserts = '延遲插入';
$strServerStatusUptime = '這 MySQL 伺服器已啟動了 %s. 伺服器於 %s 啟動.';
$strServerTabVariables = '資訊';
$strServerTrafficNotes = '<b>伺服器流量</b>: 這些表顯示了此 MySQL 伺服器自啟動以來的網絡流量統計。';
$strServerVars = '伺服器資訊及設定';
$strServerVersion = '伺服器版本';
$strSessionValue = '程序數值';
$strSetEnumVal = '如欄位格式是 "enum" 或 "set", 請使用以下的格式輸入: \'a\',\'b\',\'c\'...<br />如在數值上需要輸入反斜線 (\) 或單引號 (\') , 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strShow = '顯示';
$strShowAll = '顯示全部';
$strShowColor = '顯示顏色';
$strShowDatadictAs = '數據字典格式';
$strShowFullQueries = '顯示完整查詢';
$strShowGrid = '顯示框格';
$strShowingBookmark = '顯示書籤';
$strShowingRecords = '顯示記錄';
$strShowOpenTables = '顯示開啟資料表';
$strShowPHPInfo = '顯示 PHP 資訊';
$strShowSlaveHosts = '顯示 slave 主機';
$strShowSlaveStatus = '顯示 slave 狀態';
$strShowStatusReset = '重設';
$strShowTableDimension = '顯示表格大小';
$strShowTables = '顯示資料表';
$strShowThisQuery = '重新顯示 SQL 語法 ';
$strSimplifiedChinese = '簡體中文';
$strSingly = '(只會排序現時的記錄)';
$strSize = '大小';
$strSkipQueries = '開始時略過多少行記錄 (語法)';
$strSlovak = '斯洛伐克語';
$strSlovenian = '斯洛文尼亞語';
$strSocketProblem = '( 或者本機 MySQL 伺服器之 socket 並未正確設定)';
$strSort = '排序';
$strSortByKey = '依鍵名排序';
$strSorting = '排序';
$strSpaceUsage = '已使用空間';
$strSpanish = '西班牙語';
$strSplitWordsWithSpace = '每組文字以空格 (" ") 分隔.';
$strSQL = 'SQL'; // should express in english
$strSQLCompatibility = 'SQL 兼容模式';
$strSQLExportType = '輸出方式';
$strSQLParserBugMessage = '這可能是您找到了 SQL 分析程式的一些程式錯誤，請細心查看您的語法，檢查一下引號是正確及沒有遺漏，其他可能出錯的原因可能來自您上載檔案時在引號外的地方使用了二進制碼。您可以嘗試在 MySQL 命令列介面執行該語法。如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。如您仍然未能解決問題，或在分析程式出現錯誤，但在命令列模式能正常執行，請將該句出現錯誤的 SQL 語法抽出，並將以下的"剪取"部份一同提交到臭虫區:';
$strSQLParserUserError = '可能是您的 SQL 語法出現錯誤，如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。';
$strSQLQuery = 'SQL 語法';
$strSQLResult = 'SQL 查詢結果';
$strSQPBugInvalidIdentifer = '無效的識別碼 (Invalid Identifer)';
$strSQPBugUnclosedQuote = '未完結的引號 (Unclosed quote)';
$strSQPBugUnknownPunctuation = '不知明的標點符號 (Unknown Punctuation String)';
$strStatCheckTime = '最後檢查';
$strStatCreateTime = '建立';
$strStatement = '敘述';
$strStatisticsOverrun = '於較繁忙的伺服器, 計算器可能會溢出, 令 MySQL 伺服器提供之統計有誤差.';
$strStatUpdateTime = '最後更新';
$strStatus = '狀態';
$strStorageEngine = '儲存引擎';
$strStorageEngines = '儲存引擎';
$strStrucCSV = 'CSV 資料';
$strStrucData = '結構與資料';
$strStrucExcelCSV = 'MS Excel 的 CSV 格式';
$strStrucNativeExcel = '原始 MS Excel 資料';
$strStrucOnly = '只有結構';
$strStructPropose = '分析資料表結構';
$strStructure = '結構';
$strSubmit = '送出';
$strSuccess = '您的SQL語法已順利執行';
$strSum = '總計';
$strSwedish = '瑞典語';
$strSwitchToDatabase = '轉移到複製之資料庫';
$strSwitchToTable = '跳到已複製之資料表';

$strTable = '資料表';
$strTableAlreadyExists = '資料表 %s 已存在!';
$strTableComments = '資料表註解文字';
$strTableEmpty = '請輸入資料表名稱!';
$strTableHasBeenDropped = '資料表 %s 已被刪除';
$strTableHasBeenEmptied = '資料表 %s 已被清空';
$strTableHasBeenFlushed = '資料表 %s 已被強迫更新';
$strTableMaintenance = '資料表維護';
$strTableOfContents = '目錄';
$strTableOptions = '資料表選項';
$strTables = '%s 資料表';
$strTableStructure = '資料表格式：';
$strTakeIt = '選用';
$strTblPrivileges = '指定資料表權限';
$strTempData = '暫存資料';
$strTextAreaLength = ' 由於長度限制<br /> 此欄位不能編輯 ';
$strThai = '泰語';
$strTheme = '款式';
$strThemeDefaultNotFound = '找不到預設佈景主題 %s !';
$strThemeNoPreviewAvailable = '並無預覽.';
$strThemeNotFound = '找不到佈景主題 %s !';
$strThemeNoValidImgPath = '找不到佈景主題 %s 設定圖像之路徑!';
$strThemePathNotFound = '找不到佈景主題 %s 之設定路徑!';
$strThisHost = '指定主機';
$strThreads = '線程';
$strThreadSuccessfullyKilled = '指令 %s 已成功中止.';
$strTime = '時間';
$strToggleScratchboard = '轉換便條';
$strTotal = '總計';
$strTotalUC = '總共';
$strTraditionalChinese = '繁體中文';
$strTraditionalSpanish = '傳統西班牙語';
$strTraffic = '流量';
$strTransactionCoordinator = '交易協調器';
$strTransformation_application_octetstream__download = '於欄位顯示連線來下載二進制資料. 第一個選項是二進制的檔案名稱. 第二個選項可設定可用的欄位名稱用作檔案名稱. 如您設定了第二個選項, 第一個選項無需設定';
$strTransformation_application_octetstream__hex = '以十六進制方式顯示.';
$strTransformation_image_jpeg__inline = '顯示可按式圖像; 選項; 寬度,高度[以像素為單位] (保時原有比例)';
$strTransformation_image_jpeg__link = '顯示圖像的連線 (直接下載).';
$strTransformation_image_png__inline = '參看 image/jpeg: 內建';
$strTransformation_text_plain__external = '只限於 LINUX : 執行外部程式及將內容以標準輸入模式輸入. 輸出程式之標準輸出. 預設是整齊的, 方便顯示 HTML 碼. 由於保安理由, 您需要自行編輯 libraries/transformations/text_plain__external.inc.php 及加入需要使用工具作為執行. 第一個選項為有多少個程式需要使用, 第二個選項為這式程式的參數, 第三個選項, 如設定為 1 將會使用 htmlspecialchars() 轉換輸出 (預設: 1). 第四個選項, 如設定為 1 將會加入 NOWRAP 於內容的表格內, 令輸出之所有內容都不會重新排位 (預設: 1)';
$strTransformation_text_plain__formatted = '保存原本內容之格式. 不進行任何 Escaping 處理.';
$strTransformation_text_plain__imagelink = '顯示圖像及連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二個選項是寬度的像素,第三個選項是高度的像素.';
$strTransformation_text_plain__link = '顯示連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二選項是連結的標題.';
$strTransformation_text_plain__sql = '格式化文字為 SQL 查詢及特出語法.';
$strTransformation_text_plain__substr = '只顯示部份的字串. 第一個選項為字串開始輸出的位置 (offset)  (預設: 0). 第二個選項為多少個字串輸出. 留空為輸出餘下所有字串. 第三個選項為當部份字串取回後顯示什麼字串於結尾 (預設: ...) .';
$strTruncateQueries = '刪除已顯示查詢';
$strTurkish = '土耳其語';
$strType = '型態';

$strUkrainian = '烏克蘭語';
$strUncheckAll = '全部取消';
$strUnicode = '統一碼 (Unicode)';
$strUnique = '唯一鍵 UNIQUE';
$strUnknown = '不詳';
$strUnselectAll = '全部取消';
$strUpdatePrivMessage = '您已經更新了 %s 的權限.';
$strUpdateProfileMessage = '資料己經更新.';
$strUpdateQuery = '更新語法';
$strUpdComTab = '請參看說明文件查詢如何更新 Column_comments 資料表';
$strUpgrade = '您應該更新到 %s %s 或之後.';
$strUploadLimit = '你正嘗試上載大容量檔案，請查看此 %s文件%s 如何略過此限制.';
$strUsage = '使用';
$strUseBackquotes = '在資料表及欄位使用引號';
$strUsedPhpExtensions = '己使用 PHP 擴充附件';
$strUseHostTable = '使用主機資料表';
$strUser = '使用者';
$strUserAlreadyExists = '使用者 %s 己存在!';
$strUserEmpty = '請輸入使用者名稱!';
$strUserName = '使用者名稱';
$strUserNotFound = '選擇的使用者在權限資料表內找不到.';
$strUserOverview = '使用者一覽';
$strUsersDeleted = '選擇的使用者已成功刪除.';
$strUsersHavingAccessToDb = '可讀取 &quot;%s&quot; 之使用者';
$strUseTabKey = '按 TAB 鍵跳到下一個數值, 或 CTRL+方向鍵 作隨意移動';
$strUseTables = '使用資料表';
$strUseTextField = '文字輸入';
$strUseThisValue = '使用此值';

$strValidateSQL = '檢查 SQL';
$strValidatorError = 'SQL 分析程式未能啟動，請檢查是否已將 %s文件%s 內的 PHP 檔案安裝。';
$strValue = '值';
$strVar = '資訊';
$strVersionInformation = '版本資訊';
$strView = '檢視';
$strViewDump = '檢視資料表的備份概要 (dump schema)';
$strViewDumpDatabases = '顯示資料庫概要 (schema)';
$strViewDumpDB = '檢視資料庫的備份概要 (dump schema)';
$strViewHasBeenDropped = '檢視 %s 己被刪除.';
$strViewMaxExactCount = '這個檢查已超過 %s 列, 詳情請參看此%s文件%s.';

$strWebServerUploadDirectory = 'Web 伺服器上載目錄';
$strWebServerUploadDirectoryError = '設定之上載目錄錯誤，未能使用';
$strWelcome = '歡迎使用 %s';
$strWestEuropean = '西歐語文';
$strWildcard = '萬用字元';
$strWindowNotFound = '目地的視窗無法更新. 可能你已關閉此視窗或你的瀏覽器於安全設定內啟動了無法跨視窗更新';
$strWithChecked = '選擇的資料表：';
$strWriteRequests = '寫入要求';
$strWrongUser = '錯誤的使用者名稱或密碼，拒絕存取';

$strXML = 'XML'; //USE ENG
	
$strYes = ' 是 ';

$strZeroRemovesTheLimit = '註: 設定這些選項為 0 (零) 可解除限制.';
$strZip = '"zipped"';


// To translate:
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
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
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';  //to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';  //to translate
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
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';  //to translate
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';  //to translate
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';  //to translate
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';  //to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';  //to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';  //to translate
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
$strShowStatusOpen_filesDescr = 'The number of files that are open.';  //to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';  //to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
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
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate

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
