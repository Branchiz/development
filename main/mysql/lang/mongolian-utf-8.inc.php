<?php
/* $Id: mongolian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by Bayarsaikhan Enkhtaivan
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ня', 'Да', 'Мя', 'Лх', 'Пү', 'Ба', 'Бя');
$month = array('1-р', '2-р', '3-р', '4-р', '5-р', '6-р', '7-р', '8-р', '9-р', '10р', '11р', '12р');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y оны %B сарын %d., %H:%M';
$timespanfmt = '%s өдөр, %s цаг, %s минут, %s секунд';

$strAbortedClients = 'Таслагдсан';
$strAccessDeniedExplanation = 'phpMyAdmin нь MySQL сервэр лүү холбогдох гэсэн ч, сервэр хүлээн авсангүй. config.inc.php дэх сервэр, хэрэглэгчийн нэр болон нууц үгээ шалга.';
$strAccessDenied = 'Хандах эрхгүй';
$strAction = 'Үйлдэл';
$strAddAutoIncrement = 'AUTO_INCREMENT утга нэмэх';
$strAddConstraints = 'Тогтмол нэмэх';
$strAddDeleteColumn = 'Багана нэмэх/устгах';
$strAddDeleteRow = 'Мөр Нэмэх/устгах';
$strAddFields = '%s талбар(ууд) нэмэх';
$strAddHeaderComment = 'header-т тусгай тайлбар нэмэх (\\n –мөр шилжүүлнэ)';
$strAddIntoComments = 'Тайлбар нэмэх';
$strAddNewField = 'Шинэ талбар нэмэх';
$strAddPrivilegesOnDb = 'Дараах өгөгдлийн санд онцгой эрх нэмэх';
$strAddPrivilegesOnTbl = 'Дараах хүснэгтэд онцгой эрх нэмэх';
$strAddSearchConditions = 'Хайлтын нөхцөл нэмэх("where" хэсгийн бие):';
$strAddToIndex = 'Индекст нэмэх&nbsp;%s&nbsp;багана(ууд)';
$strAddUserMessage = 'Шинэ хэрэглэгч нэмэгдлээ.';
$strAddUser = 'Шинэ хэрэглэгч нэмэх';
$strAdministration = 'Зохион байгуулалт';
$strAffectedRows = 'Хийгдсэн мөрүүд:';
$strAfterInsertBack = 'Буцах';
$strAfterInsertNewInsert = 'Өөр шинэ мөр оруулах';
$strAfterInsertNext = 'Дараагийн мөрийг засах';
$strAfterInsertSame = 'Энэ хуудас руу буцах';
$strAfter = '%s-ы дараа';
$strAllTableSameWidth = 'бүх хүснэгтийг ижил өргөнөөр харуулах уу?';
$strAll = 'Бүх';
$strAlterOrderBy = 'Хүснэгтийг эрэмбэлэлтээр өөрчлөх';
$strAnalyzeTable = 'Хүснэгтийг задлах';
$strAndThen = 'ба тэгээд';
$strAnd = 'БА';
$strAnIndex = '%s-д индекс нэмэгдсэн байна';
$strAnyHost = 'Дурын хост';
$strAnyUser = 'Дурын хэрэглэгч';
$strAny = 'Дурын';
$strApproximateCount = 'May be approximate. See FAQ 3.11';
$strAPrimaryKey = '%s-д үндсэн түлхүүр нэмэгдлээ';
$strArabic = 'Араб';
$strArmenian = 'Армян';
$strAscending = 'Өсөхөөр';
$strAtBeginningOfTable = 'Хүснэгтийн эхэнд';
$strAtEndOfTable = 'Хүснэгтийн төгсгөлд';
$strAttr = 'Атрибутууд';
$strAutomaticLayout = 'Автомат байрлал';

$strBack = 'Өмнөх';
$strBaltic = 'Балти';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinaryDoNotEdit = ' Хоёртын өгөгдөл - засагдахгүй ';
$strBinaryLog = 'Хоёртын log';
$strBinary = ' Хоёртын ';
$strBinLogEventType = 'Хэрэг явдлын төрөл';
$strBinLogInfo = 'Мэдээлэл';
$strBinLogName = 'Log нэр';
$strBinLogOriginalPosition = 'Жинхэнэ байрлал';
$strBinLogPosition = 'Байрлал';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Энэ тэмдэглэгээг бүх хэрэглэгчид хандахыг зөвшөөрөх';
$strBookmarkDeleted = 'Тэмдэглэгээ устгагдсан.';
$strBookmarkLabel = 'Хаяг';
$strBookmarkQuery = 'Тэмдэглэгдсэн SQL-асуулт';
$strBookmarkThis = 'Энэ SQL-асуулт-ыг тэмдэглэх';
$strBookmarkView = 'Зөвхөн харах';
$strBrowseForeignValues = 'Browse foreign values';
$strBrowse = 'Хөтлөх';
$strBufferPoolActivity = 'Буффер Pool Идэвхжил';  
$strBufferPoolUsage = 'Буффер Pool Хэрэглээ';  
$strBufferPool = 'Буффер Pool';  
$strBufferReadMissesInPercent = 'Уншилт алдсан нь %';  
$strBufferReadMisses = 'Уншилт алдагдсан';  
$strBufferWriteWaitsInPercent = 'Бичихээр хүлээгдэх нь %';  
$strBufferWriteWaits = 'Бичихээр хүлээх';  
$strBulgarian = 'Болгар';
$strBusyPages = 'Завгүй хуудсууд';  
$strBzError = 'phpMyAdmin нь шахаж чадсангүй, учир нь уг PHP хувилбарын Bz2 extension гэмтсэн байна. phpMyAdmin-ы тохиргооны файл дахь <code>$cfg[\'BZipDump\']</code> -ыг <code>FALSE</code> болго. Хэрэв та үүнийг ашигламаар байвал PHP-ийн сүүлийн хувилбарыг татаж үзээрэй. PHP bug report %s-аас дэлгэрэнгүй хар.';
$strBzip = 'bzip-ээр шахагдсан';

$strCalendar = 'Цагалбар';
$strCannotLogin = 'MySQL руу нэвтэрч чадсангүй';
$strCantLoadRecodeIconv = 'Тэмдэгт хөрвүүлэлтийн iconv, recode өргөтгөлийг дуудаж чадсангүй. Php тохиргоо дахь эдгээр өргөтгөлийг нээ эсвэл phpMyAdmin-ы тэмдэгт хөрвүүлэлтийг хаа.';
$strCantLoad = '%s өргөтгөлийг дуудаж чадсангүй,<br />PHP-ийн тохиргоог үз';
$strCantRenameIdxToPrimary = 'Индексийг PRIMARY болгож чадсангүй!';
$strCantUseRecodeIconv = 'iconv, libiconv, recode_string өргөтгөлүүдийн алийг ч хэрэглэж чадсангүй (extension reports-д дуудагдах). Php тохиргоогоо шалга.';
$strCardinality = 'Ерөнхий';
$strCaseInsensitive = 'Том жижиг хамаагүй';
$strCaseSensitive = 'Том жижиг хамаатай ';
$strCentralEuropean = 'Төв-Европ';
$strChangeCopyModeCopy = '... хуучныг үлдээх.';
$strChangeCopyModeDeleteAndReload = ' ... хэрэглэгчийн хүснэгтүүдээс нэгийг устгаад дараа нь онцгой эрхийг дахин дууд.';
$strChangeCopyModeJustDelete = ' ... хэрэглэгчийн хүснэгтүүдээс устгах.';
$strChangeCopyModeRevoke = ' ... хуучнаас бүх онцгой эрхийг хүчингүй болгоод дараа нь устга.';
$strChangeCopyMode = 'Адил онцгой эрхтэй хэрэглэгч үүсгэх ба ...';
$strChangeCopyUser = 'Нэвтрэх мэдээллийг солих/ Хэрэглэгч хуулах';
$strChangeDisplay = 'Харуулах талбарыг соль';
$strChangePassword = 'Нууц үг солих';
$strChange = 'Солих';
$strCharsetOfFile = 'Файлын кодлол:';
$strCharsetsAndCollations = 'Кодлол ба жишилт';
$strCharsets = 'Кодлолууд';
$strCharset = 'Кодлол';
$strCheckAll = 'Бүгдийг чагтлах';
$strCheckOverhead = 'Дээдхийг шалгах';
$strCheckPrivsLong = '&quot;%s&quot; өгөгдлийн сангийн онцгой эрх шалгах.';
$strCheckPrivs = 'Онцгой эрх шалгах';
$strCheckTable = 'Хүснэгт шалгах';
$strChoosePage = 'Засах Хуудсаа сонго';
$strColComFeat = 'Баганын тайлбарыг харуулж байна';
$strCollation = 'Жишилт';
$strColumnNames = 'Баганын нэрс';
$strColumnPrivileges = 'Онцгой эрх, баганын эрх';
$strCommand = 'Команд';
$strCommentsForTable = 'Хүснэгтийн тайлбар';
$strComments = 'Тайлбар';
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';
$strCompleteInserts = 'Оруулалтыг дуусгах';
$strCompression = 'Шахалт';
$strConfigFileError = 'phpMyAdmin нь таны тохиргооны файлыг уншиж чадахгүй нь!<br />Задлан ялгалын алдаа эсвэл уг файл олдохгүй байна.<br />Тохиргооны (config.inc.php) файл дуудах холбоосыг зөв оруулж php-ийн танд ирсэн алдааны мэдээллийг унш. Энэ нь ихэвчлэн цэгтэй таслалын （;） алдаа байдаг. Хэрэв хоосон хуудас ирвэл – энэ нь зүгээр байна';
$strConfigureTableCoord = '%s хүснэгтийн координатыг тохируулна уу';
$strConnectionError = 'Холбогдсонгүй: тохируулга буруу.';
$strConnections = 'Холболт';
$strConstraintsForDumped = 'Асгарсан хүснэгтийг хүчлэх';
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Энэ газарт Cookies нээлттэй байх ёстой.';
$strCopyDatabaseOK = 'ӨС %s нь %s руу хуулагдлаа';
$strCopyTableOK = '%s хүснэгт %s руу хуулагдлаа.';
$strCopyTableSameNames = ' Адил нэртэй хүснэгт рүү хуулж чадсангүй!';
$strCopyTable = 'Хүснэгт хуулах(өгөгдлийн сан<b>.</b>хүснэгт):';
$strCopy = 'Хуулах';
$strCouldNotKill = 'phpMyAdmin нь thread %s-ийг хааж чадсангүй. Энэ аль хэдийн хаагдсан байна.';
$strCreateDatabaseBeforeCopying = 'хуулахын өмнө CREATE DATABASE';  
$strCreateIndex = '&nbsp;%s&nbsp;багануудад индекс үүсгэх';
$strCreateIndexTopic = 'Шинэ индекс үүсгэх';
$strCreateNewDatabase = 'Шинэ ӨС үүсгэх';
$strCreateNewTable = '%s ӨС-д шинэ хүснэгт үүсгэх';
$strCreatePage = 'Шинэ хуудас үүсгэх';
$strCreatePdfFeat = 'PDF-схемийн үүсгэлт';
$strCreate = 'Үүсгэх';
$strCreationDates = 'Үүсгэлт/Шинэчлэлт/Огноо шалгах';
$strCriteria = 'Хэмжүүр';
$strCroatian = 'Хорват';
$strCyrillic = 'Кирилл';
$strCzechSlovak = 'Чехословак';
$strCzech = 'Чех';

$strDanish = 'Дани';
$strDatabaseEmpty = 'Өгөгдлийн сангийн нэр хоосон!';
$strDatabaseExportOptions = 'ӨС гаргах сонголтууд';
$strDatabaseHasBeenDropped = '%s өгөгдлийн сан устгагдсан.';
$strDatabasesDropped = '%s ӨС амжилттай устгагдлаа.';
$strDatabasesStatsDisable = 'Хаалттай статистик';
$strDatabasesStatsEnable = 'Нээлттэй статистик';
$strDatabasesStatsHeavyTraffic = 'Тэмдэглэл: Вэб сервэр, MySQL-ийн хоорондох өгөгдөл дамжуулах статистик.';
$strDatabasesStats = 'Өгөгдлийн сангийн статистик';
$strDatabases = 'Өгөгдлийн сангууд';
$strDatabase = 'ӨС';
$strDataDict = 'Өгөгдлийн толь';
$strDataOnly = 'Зөвхөн өгөгдөл';
$strDataPages = 'Хуудсуудын агуулсан өгөгдөл';  
$strData = 'Өгөгдөл';
$strDBComment = 'ӨС-ийн тайлбар: ';
$strDBCopy = 'Өгөгдлийн сан хуулах нь';
$strDbPrivileges = ' Онцгой эрх, өгөгдлийн сангийн эрх';
$strDBRename = 'Өгөгдлийн санг д.нэрлэх нь';
$strDbSpecific = 'Өгөгдлийн сангийн эрх';
$strDefaultEngine = '%s нь уг MySQL сервэрийн анхдагч агуулах хөдөлгүүр байна.';  
$strDefaultValueHelp = 'Анхдагч утгаар энэ тогтнолыг ашиглан ташуу зураас, хашилтгүй ганц утга оруулна уу: a';
$strDefault = 'Анхдагч';
$strDefragment = 'Хүснэгт янзлах';
$strDelayedInserts = 'Давталттай оруулалт хэрэглэх';
$strDeleteAndFlushDescr = 'Энэ бол цэвэрхэн зам, гэхдээ онцгой эрхийг дахиж дуудна.';
$strDeleteAndFlush = 'Хэрэглэгчдийг устгаад дараа нь онцгой эрхийг дахин дууд.';
$strDeletedRows = 'Устгагдсан мөрүүд:';
$strDeleted = 'Мөр устгагдсан';
$strDelete = 'Устгах';
$strDeleting = '%s-г устгаж байна';
$strDelOld = 'Хүснэгтийн лавлахтай хуудас нь удаан оршихгүй, Та эдгээр лавлахуудыг устгах уу?';
$strDescending = 'Буурахаар';
$strDescription = 'Тайлбар';
$strDictionary = 'толь';
$strDirtyPages = 'Бохир хуудсууд';  
$strDisabled = 'Хаагдсан';
$strDisableForeignChecks = 'Гадаад түлхүүр шалгалтыг хаах';
$strDisplayFeat = 'Онцлог харуулах';
$strDisplayOrder = 'Харуулах эрэмбэ:';
$strDisplayPDF = 'PDF-схем харуулах';
$strDoAQuery = '"жишээ асуулт" хийх (тэмдэгт: "%")';
$strDocu = 'Баримт';
$strDoYouReally = 'Та үнэхээр ';
$strDropDatabaseStrongWarning = 'Дүүрэн өгөгдлийн сан УСТГАХ тухай?';
$strDropUsersDb = 'Хэрэглэгчтэй адил нэртэй өгөгдлийн санг устгах.';
$strDrop = 'Устгах';
$strDumpingData = 'Хүснэгтийн өгөгдлийг устгах';
$strDumpSaved = 'Асгалт %s файлд хадгалагдсан.';
$strDumpXRows = '%s мөрүүдийг, %s-аас эхлэн устгах.';
$strDynamic = 'динамик';

$strEditPDFPages = 'PDF-хуудаснуудыг засах';
$strEditPrivileges = 'Онцгой эрхүүдийг засах';
$strEdit = 'Засах';
$strEffective = 'Эффекттэй';
$strEmptyResultSet = 'MySQL хоосон үр дүн буцаалаа (тэг мөрүүд г.м.).';
$strEmpty = 'Хоосон';
$strEnabled = 'Нээлттэй';
$strEncloseInTransaction = 'Хэлэлцээр дэх гаргалтыг хаах';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Төгс';
$strEngineAvailable = '%s нь уг MySQL сервэрт идэвхтэй байна.';  
$strEngineDisabled = '%s нь уг MySQL сервэр дээр хаалттай байна.';  
$strEngines = 'Хөдөлгүүрүүд';  
$strEngineUnsupported = 'Энэ MySQL сервэр нь %s агуулах хөдөлгүүрийг дэмжихгүй.';  
$strEnglishPrivileges = ' Тэмдэглэл: MySQL онцгой эрхийн нэр нь англиар илэрхийлэгдсэн ';
$strEnglish = 'Англи';
$strError = 'Алдаа';
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';
$strEstonian = 'Эстони';
$strExcelEdition = 'Excel-засвар';
$strExecuteBookmarked = 'Тэмдэглэгдсэн асуулт ажиллуулах';
$strExplain = 'SQL тайлбар';
$strExport = 'Гаргах';
$strExtendedInserts = 'Өргөтгөсөн оруулалт';
$strExtra = 'Нэмэлт';

$strFailedAttempts = 'Бүтэлгүйтсэн оролдлого';
$strFieldHasBeenDropped = 'Талбар %s устгагдсан';
$strFieldsEnclosedBy = 'Талбарыг хаасан';
$strFieldsEscapedBy = 'Талбарыг нээсэн';
$strFieldsTerminatedBy = 'Талбарыг төгсгөсөн';
$strFields = 'Талбарууд';
$strField = 'Талбар';
$strFileAlreadyExists = 'Файл %s нь сервэр дээр байна, нэрээ соль эсвэл давхарлах сонголтыг шалга.';
$strFileCouldNotBeRead = 'Файл уншигдахгүй байна';
$strFileNameTemplateRemember = 'загварыг санах';
$strFileNameTemplate = 'Файлын нэрийн загвар';
$strFixed = 'Засагдсан';
$strFlushPrivilegesNote = 'Тэмдэглэл: phpMyAdmin нь MySQL-ийн онцгой эрхийн хүснэгтээс хэрэглэгчдийн онцгой эрхийг авна. Хэрэв тэд гараар өөрчлөгдсөн бол эдгээр хүснэгтийн агуулга нь сервэрт хэрэглэгдэж буйгаас өөр байна. Энэ тохиолдолд %sдахин дуудаж үргэлжлүүлнэ үү.';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFormat = 'Тогтнол';
$strFormEmpty = 'Форм дахь утгыг орхисон!';
$strFreePages = 'Чөлөөт хуудсууд';  
$strFullText = 'Бүтэн бичвэр';
$strFunction = 'Функц';

$strGenBy = 'Үүсгэгч';
$strGeneralRelationFeat = 'Ерөнхий хамаатай онцлог';
$strGeneratePassword = 'Нууц үг бий болгох';
$strGenerate = 'Бий болгох'; 
$strGenTime = 'Үүссэн цаг';
$strGeorgian = 'Гүрж';
$strGerman = 'Немец';
$strGlobal = 'global';
$strGlobalPrivileges = 'Глобал онцгой эрх';
$strGlobalValue = 'Глобал утга';
$strGo = 'Яв';
$strGrantOption = 'Хандив';
$strGreek = 'Грек';
$strGzip = 'gzip-ээр шахах';

$strHasBeenAltered = 'өөрчлөгдсөн байна.';
$strHasBeenCreated = 'үүссэн байна.';
$strHaveToShow = 'Харуулахын тулд ядаж нэг багана сонго';
$strHebrew = 'Иврей';
$strHomepageOfficial = 'phpMyAdmin-ын албан ёсны вэб сайт';
$strHome = 'Гэр';
$strHostEmpty = 'Хостын нэр хоосон!';
$strHost = 'Хост';
$strHTMLExcel = 'Microsoft Excel 2000';  
$strHTMLWord = 'Microsoft Word 2000';  
$strHungarian = 'Унгар';

$strIcelandic = 'Исланд';
$strId = 'ID';
$strIdxFulltext = 'Бүтэнбичвэр';
$strIgnoreInserts = 'Оруулалтыг үл тоох';
$strIgnore = 'Үл тоох';
$strImportFiles = 'Файл оруулах';
$strIndexes = 'Индексүүд';
$strIndexHasBeenDropped = 'Индекс %s нь устгагдсан';
$strIndexName = 'Индексийн нэр&nbsp;:';
$strIndexType = 'Индексийн төрөл&nbsp;:';
$strIndexWarningTable = 'Хүснэгт `%s`-ийн индекс асуудалтай';
$strIndex = 'Индекс';
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  
$strInnoDBAutoextendIncrement = 'Авто нэмэгдэлт';  
$strInnoDBBufferPoolSizeDesc = 'Энэ хүснэгтийн кэш өгөгдөл, индекст хэрэглэх InnoDB санах ойн буфферийн хэмжээ.';  
$strInnoDBBufferPoolSize = 'Буффер pool хэмжээ';  
$strInnoDBDataFilePath = 'Өгөгдлийн файлууд';  
$strInnoDBDataHomeDirDesc = 'Бүх InnoDB өгөгдлийн файлын хавтсын замын үндсэн хэсэг.';  
$strInnoDBDataHomeDir = 'Өгөгдлийн үндсэн хавтас';  
$strInnoDBPages = 'хуудсууд';  
$strInnodbStat = 'InnoDB байдал';
$strInsecureMySQL = 'Таны тохиргооны файл нь MySQL-ын анхдагч онцгой эрхийг (нэвтрэгч root нь нууц үггүй) агуулжээ. Таны MySQL сервэр энэ анхдагчаар ажиллаж байгаа нь хэн ч урилгагүй орох боломжийг өгнө. Та хамгаалалтын асуудлаа засах хэрэгтэй';
$strInsertAsNewRow = 'Шинэ мөр оруулаад';
$strInsertedRowId = 'Орсон мөрийн id:';
$strInsertedRows = 'Орсон мөрүүд:';
$strInsert = 'Оруулах';
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';
$strInternalRelations = 'Дотоод хамаарал';
$strInUse = 'хэрэглэгдэж байна';
$strInvalidColumnCount = 'Баганы тоо тэгээс их байна.';
$strInvalidFieldAddCount = 'Та багадаа нэг талбар нэм.';
$strInvalidFieldCount = 'Хүснэгт нь багадаа нэг талбартай байх хэрэгтэй.';
$strInvalidRowNumber = '%d нь мөрийн буруу дугаар байна.';

$strJapanese = 'Япон';
$strJumpToDB = '&quot;%s&quot; өгөгдлийн сан руу үсрэх.';
$strJustDeleteDescr = '&quot;Устгагдсан&quot; хэрэглэгчид үргэлжлүүлэн сервэр лүү хандахын тулд онцгой эрхийг дахин дуудах хүртэл хүлээнэ.';
$strJustDelete = 'Онцгой эрхийн хүснэгтээс хэрэглэгчид устгах.';

$strKeepPass = 'Нууц үгийг солихгүй';
$strKeyname = 'Түлхүүрийн нэр';
$strKill = 'Алах';
$strKorean = 'Солонгос';

$strLandscape = 'Ландшафт';
$strLatchedPages = 'Latched хуудсууд';  
$strLatexCaption = 'Хүснэгтийн гарчиг';
$strLatexContent = '__TABLE__ хүснэгтийн агуулга';
$strLatexContinuedCaption = 'Үргэлжилсэн хүснэгтийн гарчиг';
$strLatexContinued = '(үргэлжилнэ)';
$strLatexIncludeCaption = 'Хүснэгтийн гарчиг холбогдсон';
$strLatexLabel = 'Label key';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ хүснэгтийн бүтэц';
$strLatvian = 'Латви';
$strLengthSet = 'Урт/Утгууд*';
$strLimitNumRows = 'Хуудас дахь мөрийн тоо';
$strLinesTerminatedBy = 'Шугамыг төгсгөгч';
$strLinkNotFound = 'Холбоос олдсонгүй';
$strLinksTo = 'Холбоос';
$strLithuanian = 'Латви';
$strLocalhost = 'Local';
$strLocationTextfile = 'Бичвэрфайлын байрлал';
$strLoginInformation = 'Нэвтрэх мэдээлэл';
$strLogin = 'Нэвтрэх';
$strLogout = 'Гарах';
$strLogPassword = 'Нууц үг:';
$strLogServer = 'Сервэр';
$strLogUsername = 'Нэвтрэгч:';
$strLongOperation = 'Энэ үйлдэл удах янзтай. Юутай ч үргэлжлүүлэх үү?';  

$strMaximumSize = 'ХИ хэмжээ: %s%s';
$strMbExtensionMissing = 'mbstring PHP extension олдсонгүй ба та multibyte charset ашиглаж байна. mbstring extension үгүйгээр phpMyAdmin нь тэмдэгт мөрийг зөв хувааж чадахгүй буюу буруу үр дүн гарч магадгүй.';
$strMbOverloadWarning = 'Таны PHP тохируулгад mbstring.func_overload нээлттэй байна. Энэ сонголт phpMyAdmin -д бүрэн боломжгүй бөгөөд зарим өгөгдөл алдагдаж болзошгүй!';
$strMIME_available_mime = 'Идэвхтэй MIME-төрлүүд';
$strMIME_available_transform = 'Идэвхтэй өөрчлөлт';
$strMIME_description = 'Тайлбар';
$strMIME_MIMEtype = 'MIME-төрөл';
$strMIME_nodescription = 'Энэ өөрчлөлтөд Тайлбаргүй нь идэвхтэй.<br />%s-ын зохиогчийг асууна уу.';
$strMIME_transformation_note = 'Боломжтой өөрчлөлийн сонголтуудын жагсаалт ба тэдгээр MIME-төрлийн өөрчлөлүүдийн тулд, %sөөрчлөлийн тайлбар%s -д дарах';
$strMIME_transformation_options_note = 'Өөрчлөлийн сонголтыг оруулах утгын тогтнол нь: \'a\', 100, b,\'c\'...<br />Хэрэв та буруу ташуу зургаас эсвэл дан хашилт тавихыг хүсвэл буруу ташуу зураасыг өмнө нь тавина уу. (Ж: \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Өөрчлөлийн сонголтууд';
$strMIME_transformation = 'Хөтчийн өөрчлөл';
$strMIMETypesForTable = 'Хүснэгтийн MIME-төрлүүд';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strModifications = 'Өөрчлөлт хадгалагдав';
$strModifyIndexTopic = 'Өөрчлөх индекс';
$strModify = 'Өөрчлөх';
$strMoveTableOK = 'Хүснэгт %s нь %s руу зөөгдөв.';
$strMoveTableSameNames = 'Адил нэр байсан тул хүснэгтийг зөөсөнгүй!';
$strMoveTable = 'Хүснэгтийг зөөх (өгөгдлийн сан<b>.</b>хүснэгт):';
$strMultilingual = 'олонхэлийн';
$strMyISAMDataPointerSizeDesc = 'Анхдагч заагчийн хэмжээ байтаар илэрхийлэгдэх ба, CREATE TABLE -ээр MyISAM хүснэгтийг MAX_ROWS сонголт тодорхойлогдоогүй үед хэрэглэгдэнэ.';  
$strMyISAMDataPointerSize = 'Өгөгдөл заагчийн хэмжээ';  
$strMyISAMMaxExtraSortFileSizeDesc = 'Хэрэв завсрын файл MyISAM индекс үүсгэлтэд хэрэглэгдсэн бол үүнээс их энд тодорхойлогдсон хэмжээгээр key cache хэрэглэх хэрэгтэй, key cache аргыг илүүд үзвэл.';  
$strMyISAMMaxExtraSortFileSize = 'Индекс үүсгэлт дэх завсрын файлын ХИ хэмжээ';	 
$strMyISAMMaxSortFileSizeDesc = 'Завсрын MySQL файлын ХИ хэмжээ нь MyISAM индексийг да-үүсгэхэд (REPAIR TABLE, ALTER TABLE, болон LOAD DATA INFILE -ын үед) хэрэглэгдэнэ.'; 
$strMyISAMMaxSortFileSize = 'Завсрын эрэмбэлэх файлын ХИ хэмжээ';  
$strMyISAMRecoverOptionsDesc = 'Горим нь эвдэрсэн MyISAM хүснэгтийг автоматаар засна, серверийн эхлэлийн --myisam-recover сонголтоор.';  
$strMyISAMRecoverOptions = 'Авто сэргээх горим';  
$strMyISAMRepairThreadsDesc = 'Хэрэв энэ утга нь 1 -ээс их байвал, эрэмбэлэх процессоор Засах үед MyISAM хүснэгтийн индексүүд нь зэрэгцээгээр (индекс бүрт өөрийн процесс) үүсгэгдсэн.';  
$strMyISAMRepairThreads = 'Thread засах';  
$strMyISAMSortBufferSizeDesc = 'REPAIR TABLE -ийн үед MyISAM индексийг эрэмбэлэх эсвэл CREATE INDEX болон ALTER TABLE -ээр индекс үүсгэх үед буффер хуваарилагдсан.';  
$strMyISAMSortBufferSize = 'Буфферийн хэмжээг эрэмбэлэх';  
$strMySQLCharset = 'MySQL-кодлол';
$strMySQLConnectionCollation = 'MySQL холболтын кодлол';
$strMySQLSaid = 'MySQL хэлэх нь: ';
$strMySQLShowProcess = 'Процесууд харах';
$strMySQLShowStatus = 'MySQL-ийн ажиллах үеийн мэдээлэл харах';
$strMySQLShowVars = 'MySQL-ийн системийн утгыг харах';

$strName = 'Нэр';
$strNext = 'Цааш';
$strNoActivity = '%s секунд ба түүнээс их идэвхгүй байжээ, дахин нэвтэрнэ үү';
$strNoDatabasesSelected = 'ӨС сонгогдоогүй.';
$strNoDatabases = 'ӨС байхгүй';
$strNoDescription = 'тайлбаргүй';
$strNoDetailsForEngine = 'Энд уг агуулах хөдөлгүүрийн дэлгэрэнгүй төлвийн мэдээлэл алга.';  
$strNoDropDatabases = '"ӨС устгах" нь хаалттай.';
$strNoExplain = 'SQL тайлбарлахыг орхих';
$strNoFrames = 'phpMyAdmin нь ямар ч хөтөч дээр <b>фрейм</b> гаргах чадвартай.';
$strNoIndexPartsDefined = 'Тодорхойлогдсон индексийн хэсэггүй!';
$strNoIndex = 'Индекс тодорхойлогдоогүй!';
$strNoModification = 'Солигдохгүй';
$strNone = 'Үгүй';
$strNoOptions = 'Энэ тогтнол сонголтгүй';
$strNoPassword = 'Нууц үггүй';
$strNoPermission = 'Вэб-сервэр файл %s-г хадгалахад зөвшөөрөлгүй байна.';
$strNoPhp = 'PHP-кодгүй';
$strNoPrivileges = 'Онцгой эрхгүй';
$strNoRights = 'Танд хангалттай эрх байхгүй!';
$strNoRowsSelected = 'Сонгогдсон мөргүй';
$strNoSpace = 'Файл %s-г хадгалах зай хүрэлцэхгүй байна.';
$strNoTablesFound = 'ӨС-д хүснэгт олдсонгүй.';
$strNoThemeSupport = 'Арьс боломжгүй, өөрийн тохиргоогоо шалга ба/эсвэл %s-т арьс байгаа эсэхийг хар.';
$strNotNumber = 'Энэ тоо биш!';
$strNotOK = 'Бэлэн биш';
$strNotSet = '<b>%s</b> хүснэгт олдсонгүй эсвэл %s-д сонгогдоогүй';
$strNoUsersFound = 'Хэрэглэгч олдсонгүй.';
$strNoValidateSQL = 'SQL шалгалтыг алгасах';
$strNo = 'Үгүй';
$strNull = 'Хоосон';
$strNumSearchResultsInTable = '%s олдоц(ууд) хүснэгт <i>%s</i>-д';
$strNumSearchResultsTotal = '<b>Нийт:</b> <i>%s</i> олдоц(ууд)';
$strNumTables = 'Хүснэгт';

$strOK = 'Бэлэн';
$strOperations = 'Үйлдлүүд';
$strOperator = 'Оператор';
$strOptimizeTable = 'Хүснэгтийг зүгшрүүлэх';
$strOr = 'Эсвэл';
$strOverhead = 'Толгой дээр';
$strOverwriteExisting = 'Файл(ууд)-г дарж бичих';

$strPageNumber = 'Хуудасны дугаар:';
$strPagesToBeFlushed = 'Хуудсууд зайлагдсан';  
$strPaperSize = 'Цаасны хэмжээ';
$strPartialText = 'Бичвэрийн зарим хэсэг';
$strPasswordChanged = '%s-ы нууц үг солигдлоо.';
$strPasswordEmpty = 'Нууц үг хоосон байна!';
$strPasswordHashing = 'Нууц үг хувиргах';
$strPasswordNotSame = 'Нууц їгнїїд ялгаатай байна!';
$strPassword = 'Нууц үг';
$strPdfDbSchema = '"%s" өгөгдлийн сангийн схем - Хуудас %s';
$strPdfInvalidTblName = 'Хүснэгт "%s" байхгүй байна!';
$strPdfNoTables = 'Хүснэгт алга';
$strPerHour = 'цагт';
$strPerMinute = 'минутад';
$strPerSecond = 'секундэд';
$strPersian = 'Перс';
$strPhoneBook = 'Утасны лавлах';
$strPHP40203 = 'Та PHP 4.2.3 хувилбарыг ашиглаж байна, энэ нь олон-байттай тэмдэгт мөр (mbstring) дээр томоохон нүхтэй юм. PHP нүхний 19404 тайланг харна уу. PHP-ийн энэ хувилбар дээр phpMyAdmin-г ашиглахгүй байхыг зөвлөх байна .';
$strPhp = 'PHP-код үүсгэх';
$strPHPVersion = 'PHP хувилбар';
$strPmaDocumentation = 'phpMyAdmin баримтжилт';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> -ыг тохиргооны файлд тохируулах хэрэгтэй!';
$strPolish = 'Польш';
$strPortrait = 'Дүрслэл';
$strPos1 = 'Эхлэл';
$strPrevious = 'Өмнөх';
$strPrimaryKeyHasBeenDropped = 'Үндсэн түлхүүр устгагдлаа';
$strPrimaryKeyName = 'Үндсэн түлхүүрийн нэр нь PRIMARY байх ёстой!';
$strPrimaryKeyWarning = '("PRIMARY" нь үндсэн түлхүүрийн нэр ба <b>зөвхөн</b> байх <b>хэрэгтэй</b>!)';
$strPrimary = 'Үндсэн';
$strPrintViewFull = 'Хэвлэхээр харах (бүх бичвэртэй нь)';
$strPrintView = 'Хэвлэхээр харах';
$strPrint = 'Хэвлэх';
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.';
$strPrivDescAlterRoutine = 'Хадгалагдсан заншил устгах, өөрчлөхийг зөвшөөрөх.';  
$strPrivDescAlter = 'Байгаа хүснэгтийн бүтцийг өөрчлөхийг зөвшөөрөх.';
$strPrivDescCreateDb = 'Шинэ өгөгдлийн сан, хүснэгт үүсгэхийг зөвшөөрөх.';
$strPrivDescCreateRoutine = 'Хадгалагдсан заншил үүсгэхийг зөвшөөрөх.';  
$strPrivDescCreateTbl = 'Шинэ хүснэгт үүсгэхийг зөвшөөрөх.';
$strPrivDescCreateTmpTable = 'Завсрын хүснэгт үүсгэхийг зөвшөөрөх.';
$strPrivDescCreateUser = 'Хэрэглэгчийн эрхийг үүсгэх, устгах, да.нэрлэхийг зөвшөөрөх.';  
$strPrivDescCreateView = 'Шинэ харц үүсгэхийг зөвшөөрөх.';  
$strPrivDescDelete = 'Өгөгдөл устгахыг зөвшөөрөх.';
$strPrivDescDropDb = 'ӨС, хүснэгт устгахыг зөвшөөрөх ';
$strPrivDescDropTbl = 'Хүснэгт устгахыг зөвшөөрөх.';
$strPrivDescExecute5 = 'Хадгалагдсан заншлыг ажиллуулахыг зөвшөөрөх.';  
$strPrivDescExecute = 'Агуулагдсан (stored) процедурыг ажиллуулахыг зөвшөөрөх; MySQL-ын энэ хувилбарт үйлчлэлгүй.';
$strPrivDescFile = 'Өгөгдөл оруулах, файл руу гаргахыг зөвшөөрөх.';
$strPrivDescGrant = 'Хэрэглэгч болон онцгой эрхийг онцгой эрхийн хүснэгтийг дуудалгүй нэмэхийг зөвшөөрөх.';
$strPrivDescIndex = 'Индекс үүсгэх, устгахыг зөвшөөрөх.';
$strPrivDescInsert = 'Өгөгдөл нэмэх, солихыг зөвшөөрөх.';
$strPrivDescLockTables = 'Тухайн процесст хүснэгт түгжихийг зөвшөөрөх.';
$strPrivDescMaxConnections = 'Цаг тутамд шинээр холбогдох хэрэглэгчийн тоог хязгаарлах.';
$strPrivDescMaxQuestions = 'Цаг тутамд хэрэглэгчийн асуулт (query) илгээхийг хязгаарлах.';
$strPrivDescMaxUpdates = 'Цаг тутамд хэрэглэгчийн хүснэгт эсвэл өгөгдлийн сан солих командыг хязгаарлах.';
$strPrivDescProcess3 = 'Бусад хэрэглэгчийн процессыг үгүй хийхийг зөвшөөрөх.';
$strPrivDescProcess4 = 'Процессын жагсаалт дахь дууссан асуултыг харахыг зөвшөөрөх.';
$strPrivDescReferences = 'MySQL-ын энэ хувилбарт үйлчлэлгүй.';
$strPrivDescReload = 'Сервэрийн тохиргоог дахин дуудахыг зөвшөөрөх.';
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.';
$strPrivDescReplSlave = 'Needed for the replication slaves.';
$strPrivDescSelect = 'Өгөгдөл уншихыг зөвшөөрөх.';
$strPrivDescShowDb = 'Өгөгдлийн сангийн бүрэн жагсаалт руу хандахыг өгөх.';
$strPrivDescShowView = 'SHOW CREATE VIEW асуултыг хийхийг зөвшөөрөх.';  
$strPrivDescShutdown = 'Сервэрийг унтраахыг зөвшөөрөх.';
$strPrivDescSuper = 'Хэрэв ХИ холболтын тоо гүйцсэн ч холбогдохыг зөвшөөрөх. Бусад хэрэглэгчийн процессыг үгүй хийх эсвэл глобал утгыг өөрчлөх шаардлагатай болно.';
$strPrivDescUpdate = 'Өгөгдөл солихыг зөвшөөрөх.';
$strPrivDescUsage = 'Онцгой эрхгүй.';
$strPrivilegesReloaded = 'Онцгой эрхүүд дахин дуудагдлаа.';
$strPrivileges = 'Онцгой эрхүүд';
$strProcesses = 'Процессууд';
$strProcesslist = 'Процессын жагсаалт';
$strPutColNames = 'Эхний мөрт талбаруудын нэрийг тавих';

$strQBEDel = 'Устгах';
$strQBEIns = 'Оруулах';
$strQBE = 'Асуулт (Query)';
$strQueryFrame = 'Асуултын цонх';
$strQueryOnDb = 'ӨС <b>%s</b> дахь SQL-асуулт:';
$strQuerySQLHistory = 'SQL түүх';
$strQueryStatistics = '<b>Асуултын статистик</b>: Эхэлснээс хойш, %s асуулт сервэр рүү илгээгдсэн.';
$strQueryTime = 'Асуулт нь %01.4f сек авлаа';
$strQueryType = 'Асуултын төрөл';
$strQueryWindowLock = 'Цонхны гаднаас энэ асуултыг давхарлахгүй байх';

$strReadRequests = 'Унших гуйлт';  
$strReceived = 'Ирсэн';
$strRecords = 'Бичлэгүүд';
$strReferentialIntegrity = 'Үнэн зөв өгөгдлийг шалгах:';
$strRefresh = 'Да.дуудах';
$strRelationalSchema = 'Хамааралтай схем';
$strRelationNotWorking = 'Холбогдсон хүснэгтүүдтэй ажиллах нэмэлт онцлогууд идэвхгүй болжээ. %sЭнд%s дарж шалгах.';
$strRelationsForTable = 'Хүснэгтийн хамаарал';
$strRelations = 'Хамаарал';
$strRelationView = 'Хамаарал харах';
$strReloadingThePrivileges = 'Онцгой эрхийг дахин дуудаж байна';
$strRemoveSelectedUsers = 'Сонгогдсон хэрэглэгчдийг хасах';
$strRenameDatabaseOK = 'ӨС %s-н нэр нь %s-ээр солигджээ';
$strRenameTableOK = 'Хүснэгт %s-ын нэр %s болж өөрчлөгдлөө';
$strRenameTable = 'Хүснэгтийг да.нэрлэх';
$strRepairTable = 'Хүснэгт засах';
$strReplaceNULLBy = 'NULL-ыг орлуулах нь';
$strReplaceTable = 'Хүснэгтийн өгөгдлийг орлуулах файл';
$strReset = 'Да.эхлэх';
$strResourceLimits = 'Нөөцийн хязгаар';
$strReType = 'Дахин бич';
$strRevokeAndDeleteDescr = 'Онцгой эрхийг да.дуудтал хэрэглэгчид онцгой эрх USAGE -тэй байх болно.';
$strRevokeAndDelete = 'Устгахын төгсгөлд нь хэрэглэгчдээс идэвхтэй бүх онцгой эрхийг хүчингүй болгох.';
$strRevokeMessage = 'Онцгой эрх %s -ыг хүчингүй болголоо';
$strRevoke = 'Хүчингүй';
$strRomanian = 'Румын';
$strRowLength = 'Мөрийн урт';
$strRowsFrom = 'мөрийн эхлэх буй дугаар';
$strRowSize = ' Мөрийн хэмжээ ';
$strRowsModeFlippedHorizontal = 'хөндлөн (эргүүлэгдсэн толгойнууд)';
$strRowsModeHorizontal = 'хөндлөн';
$strRowsModeOptions = 'Төлөв %s-д ба %s нїдний дараа толгойнуудыг давтах';
$strRowsModeVertical = 'босоо';
$strRowsStatistic = 'Мөрийн статистик';
$strRows = 'Мөрүүд';
$strRunning = '%s дээр';
$strRunQuery = 'Асуултыг илгээх';
$strRunSQLQuery = 'Өгөгдлийн сан %s дээрх SQL асуултыг ажиллуулах';
$strRussian = 'Орос';

$strSaveOnServer = 'Сервэр дээрх хадгалах хавтас %s';
$strSave = 'Хадгалах';
$strScaleFactorSmall = 'Хэт жижиг схемийг нэг хуудсанд дүүргэх';
$strSearchFormTitle = 'Өгөгдлийн санд хайх';
$strSearchInTables = 'Хүснэгт(үүд) дотор:';
$strSearchNeedle = 'Үг(үүд) ба утга(ууд) -ыг хайх (түлхүүр "%"):';
$strSearchOption1 = 'Үгүүдийн ядаж нэгээр';
$strSearchOption2 = 'бүх үг';
$strSearchOption3 = 'яг цав өгүүлбэр';
$strSearchOption4 = 'as regular expression';
$strSearchResultsFor = 'Хайлтын үр дүн "<i>%s</i>" %s:';
$strSearchType = 'Хайх:';
$strSearch = 'Хайх';
$strSecretRequired = 'Тохиргооны файл одоо нууцлал шаардаж байна (blowfish_secret).';
$strSelectADb = 'Өгөгдлийн сан сонго';
$strSelectAll = 'Бүгдийг сонгох';
$strSelectBinaryLog = 'Харах хоёртын log сонго';
$strSelectFields = 'Талбар сонгох (ядаж нэгийг):';
$strSelectNumRows = 'асуултад';
$strSelectTables = 'Хүснэгтүүд сонго';
$strSend = 'Илгээх';
$strSent = 'Илгээгдэв';
$strServerChoice = 'Сервэр сонго';
$strServerNotResponding = 'Сервэрээс хариу алга';
$strServerStatusUptime = 'Энэ MySQL сервэр %s-д ажиллаж байна. Эхэлсэн нь %s.';
$strServerStatus = 'Ажиллах үеийн мэдээлэл';
$strServerTabVariables = 'Утгууд';
$strServerTrafficNotes = '<b>Гуйвуулга</b>: Эдгээр хүснэгтүүд нь MySQL сервэр эхэлсэн үеэс сүлжээний гуйвуулгыг харуулна.';
$strServerVars = 'Сервэрийн утгууд болон тохиргоонууд';
$strServerVersion = 'Сервэрийн хувилбар';
$strServer = 'Сервэр';
$strSessionValue = 'Сессон утга';
$strSetEnumVal = 'Хэрэв талбарын төрөл нь "enum" ба "set", бол оруулах өгөгдлийн тогтнол нь: \'a\',\'b\',\'c\'...<br />Хэрэв буруу ташуу зураас ("\"") эсвэл дан хашилт ("\'") тавих шаардлагатай бол буруу ташуу зураасыг давхар хэрэглэ. (Ж: \'\\\\xyz\' эсвэл \'a\\\'b\').';
$strShowAll = 'Бүгдийг харах';
$strShowColor = 'Өнгө харах';
$strShowDatadictAs = 'Өгөгдлийн толийн тогтнол';
$strShowFullQueries = 'Бүтэн асуулт харуулах';
$strShowGrid = 'Тор харуулах';
$strShowingRecords = 'Мөрүүдийг харуулж байна ';
$strShowPHPInfo = 'PHP -ийн мэдээлэл харах';
$strShowTableDimension = 'Хүснэгтийн харьцаа харуулах';
$strShowTables = 'Хүснэгтүүдийг харуулах';
$strShowThisQuery = ' Уг асуултыг энд дахин харуулах ';
$strShow = 'Харах';
$strSimplifiedChinese = 'Энгийн хятад';
$strSingly = '(дан)';
$strSize = 'Хэмжээ';
$strSlovak = 'Словак';
$strSlovenian = 'Словени';
$strSocketProblem = '(эсвэл дотоод MySQL сервэрийн socket нь зөв тохируулагдаагүй)';  
$strSortByKey = 'Түлхүүрээр эрэмбэлэх';
$strSort = 'Эрэмбэлэх';
$strSpaceUsage = 'Ашиглалтын зай';
$strSpanish = 'Испани';
$strSplitWordsWithSpace = 'Їгнїїд хоосон зайгаар (" ") хуваагдана.';
$strSQLExportType = 'Гаргах төрөл';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL-асуулт';
$strSQLResult = 'SQL-үр дүн';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Буруу тодорхойлогч';
$strSQPBugUnclosedQuote = 'Хаагдаагүй хашилт';
$strSQPBugUnknownPunctuation = 'Тэмдэгт мөрийн үл мэдэх цэг тэмдэглэл';
$strStatCheckTime = 'Сүүлийн шалгалт';
$strStatCreateTime = 'Үүсгэлт';
$strStatement = 'Баримтжуулал';
$strStatUpdateTime = 'Сүүлийн шинэчлэл';
$strStatus = 'Статус';
$strStorageEngines = 'Агуулах хөдөлгүүрүүд';  
$strStorageEngine = 'Агуулах хөдөлгүүр';  
$strStrucCSV = 'CSV өгөгдөл';
$strStrucData = 'Бүтэц ба өгөгдөл';
$strStrucExcelCSV = 'CSV өгөгдлийг MS Excel-ээр';
$strStrucNativeExcel = 'Өгөгдөл MS Excel-ээс';
$strStrucOnly = 'Зөвхөн бүтэц';
$strStructPropose = 'Хүснэгтийн бүтцийг таниулах';
$strStructure = 'Бүтэц';
$strSubmit = 'Илгээ';
$strSuccess = 'Таны SQL-асуулт амжилттай ажиллав';
$strSum = 'Нийт';
$strSwedish = 'Швед';
$strSwitchToDatabase = 'Хуулагдсан ӨС руу шилжих';
$strSwitchToTable = 'Хуулагдсан хүснэгт рүү шилжих';

$strTableComments = 'Хүснэгтийн тайлбар';
$strTableEmpty = 'Хүснэгтийн нэр хоосон байна!';
$strTableHasBeenDropped = 'Хүснэгт %s нь устгагдлаа';
$strTableHasBeenEmptied = 'Хүснэгт %s нь хоослогдлоо';
$strTableHasBeenFlushed = 'Хүснэгт %s нь flushed боллоо';
$strTableMaintenance = 'Хүснэгтийн ашиглалт';
$strTableOfContents = 'Агуулгын хүснэгт';
$strTableOptions = 'Хүснэгтийн сонголтууд';
$strTables = '%s хүснэгт(үүд)';
$strTableStructure = 'Хүснэгтийн бүтэц';
$strTable = 'Хүснэгт ';
$strTakeIt = 'авах';
$strTblPrivileges = ' Хүснэгтийн тусгай онцгой эрхүүд';
$strTextAreaLength = ' Яагаад гэвэл урт нь их,<br /> энэ талбар засагдахгүй ';
$strThai = 'Таи';
$strTheme = 'Арьс / Загвар';
$strThisHost = 'Энэ хост';
$strThreadSuccessfullyKilled = 'Thread %s нь устгагдав.';
$strTime = 'Цаг';
$strToggleScratchboard = 'toggle scratchboard';
$strTotalUC = 'Нийт';
$strTotal = 'Нийт';
$strTraditionalChinese = 'Уламжлалт хятд';
$strTraditionalSpanish = 'Уламжлалт Испани';
$strTraffic = 'Гуйвуулга';
$strTransformation_application_octetstream__download = 'Талбарын өгөгдлийг хоёртын горимоор татах холбоос харуулж байна. Эхний сонголт: Хоёртын файлын нэр. Хоёр дахь сонголт: Талбарын нэр. Хэрэв хоёр дахь сонголтод утга өгвөл эхний сонголтыг хоосон орхих хэрэгтэй';
$strTransformation_application_octetstream__hex = 'Өгөгдлийн дүрслэлийг арван зургаатаар харуулах. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_image_jpeg__inline = 'Дарагдхуйц эрхийхумс-ыг харуулж байна. сонголт: өргөн,өндөр цэгээр (эх хэмжээ нь хадгалагдана)';
$strTransformation_image_jpeg__link = 'Уг зургийн холбоосыг харуулж байна (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';
$strTransformation_text_plain__formatted = 'Талбарын жинхэнэ тогтнолыг хамгаалах. Өөр дуусна.';
$strTransformation_text_plain__imagelink = 'Зураг болон холбоосыг харуулж байна, талбар нь файлнэр агуулна; эхний сонголт - энэ нь өмнө нь тавигдах "http://domain.com/", хоёр дахь сонголт - өргөн цэгээр, гурав дахь - өндөр.';
$strTransformation_text_plain__link = 'Холбоос харуулж байна, талбар нь файлнэр агуулна; эхний сонголт - энэ нь өмнө нь тавигдах "http://domain.com/", хоёр дахь - холбоосын гарчгийг авна.';
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...).';
$strTruncateQueries = 'Truncate Shown Queries';
$strTurkish = 'Турк';
$strType = 'Төрөл';

$strUkrainian = 'Украин';
$strUncheckAll = 'Бүх чагтыг болих';
$strUnicode = 'Юникод';
$strUnique = 'Үл давтагдах';
$strUnknown = 'үлмэдэх';
$strUnselectAll = 'Бүх сонгосныг болих';
$strUpdatePrivMessage = 'Онцгой эрх шинэчлэгдлээ';
$strUpdateProfileMessage = 'Профиль шинэчлэгдлээ.';
$strUpdateQuery = 'Update асуулт';
$strUpdComTab = 'Column_comments Хүснэгтийн хэрхэн шинэчлэх талаар баримтжууллаас харна уу';
$strUpgrade = 'Та хувилбар %s -г %s -ээр сайжруулах хэрэгтэй эсвэл дараа.';
$strUsage = 'Ашиглалт';
$strUseBackquotes = 'Хүснэгт ба талбарын нэрийг буруу хашилтаар хаах';
$strUseHostTable = 'Хост хүснэгт хэрэглэх';
$strUserAlreadyExists = 'Хэрэглэгч %s оршин байна!';
$strUserEmpty = 'Хэрэглэгчийн нэр хоосон!';
$strUserName = 'Хэрэглэгчийн нэр';
$strUserNotFound = 'Сонгогдсон хэрэглэгч онцгой эрхийн хүснэгтэд алга байна.';
$strUserOverview = 'User overview';
$strUsersDeleted = 'Сонгогдсон хэрэглэгч устгагдлаа.';
$strUsersHavingAccessToDb = 'Хэрэглэгчдийн хандсан нь &quot;%s&quot;';
$strUser = 'Хэрэглэгч';
$strUseTabKey = 'TAB товчийг хэрэглэн утгаас утгын хооронд шилжинэ, эсвэл CTRL+сумууд-аар зөөгдөнө';
$strUseTables = 'Хүснэгт хэрэглэх';
$strUseTextField = 'Бичвэр талбар хэрэглэх';
$strUseThisValue = 'Уг утгыг хэрэглэх';

$strValidateSQL = 'SQL-ийг батлах';
$strValidatorError = 'SQL баталгаажуулагч эхлэгдсэнгүй. Хэрэв PHP өргөтгөл суугдсан бол шалгана уу, %sбаримтжуулалд%s тодорхойлогдсон.';
$strValue = 'Утга';
$strVar = 'Хувьсагч';
$strVersionInformation = 'Хувилбарын мэдээлэл';  
$strViewDumpDatabases = 'ӨС-ийн схем харах';
$strViewDumpDB = 'ӨС-ийн схем харах';
$strViewDump = 'Хүснэгтийн схем харах';
$strViewHasBeenDropped = 'Харц %s нь устгагдсан';  
$strView = 'Харц';  

$strWebServerUploadDirectoryError = 'Таны сонгосон хавтас "upload" хийгдэхгүй байна';
$strWebServerUploadDirectory = 'web-сервэр түлхэх хавтас';
$strWelcome = '%s-д тавтай морилно уу';
$strWestEuropean = 'Баруун-Европ';
$strWildcard = 'загвар';
$strWindowNotFound = 'Зорилтот хөтчийн цонх шинэчлэгдсэнгүй. Магадгүй та эх цонхыг хаасан эсвэл таны хөтөч хамгаалалтын тохиргооны улмаас шинэчлэлтийг хориглогдсон';
$strWithChecked = 'Сонгогдсонтой:';
$strWriteRequests = 'Бичих гуйлт';  
$strWrongUser = 'Нэвтрэгч/нууц үг буруу. Хандах боломжгүй';

$strXML = 'XML';

$strYes = 'Тийм';

$strZeroRemovesTheLimit = 'Тэмдэглэл: Тохируулгын сонголтыг  0 (тэг) болговол хязгаарыг хасна.';
$strZip = 'zip-ээр шахах';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate

$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCSV = 'CSV';  //to translate

$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate

$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEsperanto = 'Esperanto';  //to translate

$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate

$strHandler = 'Handler';  //to translate

$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate

$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate

$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReloadPrivileges = 'Reload privileges';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

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
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
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
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate

$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate

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
