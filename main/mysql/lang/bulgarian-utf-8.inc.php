<?php
/* $Id: bulgarian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by Stanislav Yordanov <stanprog at stanprog.com>
 * Based on translation made by Georgi Georgiev <chutz at chubaka.homeip.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('байта', 'КБ', 'МБ', 'ГБ', 'ТБ', 'ПБ', 'ЕБ');

$day_of_week = array('нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб');
$month = array('януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'октомври', 'ноември', 'декември');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y в %H:%M';

$timespanfmt = '%s дена, %s часа, %s минути и %s секунди';

$strAbortedClients = 'Прекъснати';
$strAccessDeniedExplanation = 'phpMyAdmin направи опит да се свърже към MySQL сървъра, но сървъра отхвърли конекцията. Трябва да проверите хоста, потребителското име и паролата в config.inc.php файла и да се уверите, че те отговарят на информацията предоставена от администратора на MySQL сървъра.';
$strAccessDenied = 'Отказан достъп';
$strAction = 'Действие';
$strAddAutoIncrement = 'Добавяне на AUTO_INCREMENT';
$strAddClause = 'Добавяне на %s';
$strAddConstraints = 'Добавяне на ограничение';
$strAddDeleteColumn = 'Добави/изтрий колона по критерий';
$strAddDeleteRow = 'Добави/изтрий ред по критерий';
$strAddFields = 'Добавяне на  %s поле(та)';
$strAddHeaderComment = 'Добавяне на коментар в хедъра (\\n нов ред)';
$strAddIntoComments = 'Добавяне в коментарите';
$strAddNewField = 'Добавяне на ново поле';
$strAddPrivilegesOnDb = 'Добавяне на привилегии към следната база от данни';
$strAddPrivilegesOnTbl = 'Добавяне на привилегии към следната таблица';
$strAddSearchConditions = 'Добавяне на условие за търсене (съдържание на "where" клаузата):';
$strAddToIndex = ' &nbsp;%s&nbsp;колона(и) беше(яха)добавени към индекса ';
$strAddUserMessage = 'Вие добавихте нов потребител.';
$strAddUser = 'Добавяне на нов потребител.';
$strAdministration = 'Администрация';
$strAffectedRows = 'Засегнати редове:';
$strAfterInsertBack = 'връщане обратно';
$strAfterInsertNewInsert = 'вмъкване на нов запис';
$strAfterInsertNext = 'редактиране на следващия ред';
$strAfterInsertSame = 'връщане към тази страница';
$strAfter = 'след %s';
$strAll = 'всички';
$strAllTableSameWidth = 'показване на всички Таблици с една и съща ширина?';
$strAlterOrderBy = 'Подреждане на таблицата по';
$strAnalyzeTable = 'Анализиране на таблицата';
$strAndThen = 'и след това';
$strAnd = 'и';
$strAnIndex = 'Беше добавен индекс на %s';
$strAny = 'всеки';
$strAnyHost = 'Всеки хост';
$strAnyUser = 'Всеки потребител';
$strApproximateCount = 'Може да има приблизителна стойност. Виж FAQ 3.11';
$strAPrimaryKey = 'Беше добавен първичен ключ към ';
$strArabic = 'Арабски';
$strArmenian = 'Арменски';
$strAscending = 'Възходящо';
$strAtBeginningOfTable = 'в началото на таблицата';
$strAtEndOfTable = 'в края на таблицата';
$strAttr = 'Атрибути';
$strAutomaticLayout = 'Автоматичен лейаут';

$strBack = 'Назад';
$strBaltic = 'Балтийски';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двоично ';
$strBinaryDoNotEdit = ' Двоично - не се редактира ';
$strBinLogEventType = 'Тип на събитието';
$strBinLogInfo = 'Информация';
$strBookmarkAllUsers = 'Нека всеки потребител има достъп до този показалец';
$strBookmarkCreated = 'Показалец %s беше създаден успешно';
$strBookmarkDeleted = 'Показалецът беше изтрит.';
$strBookmarkLabel = 'Етикет';
$strBookmarkQuery = 'Запазване на SQL заявка';
$strBookmarkReplace = 'Препокриване не съществуващия показалец със същото име';
$strBookmarkThis = 'Запази тази SQL заявка';
$strBookmarkView = 'Само показване';
$strBrowseForeignValues = 'Преглеждане на външните(foreign) стойности';
$strBrowse = 'Прелистване';
$strBulgarian = 'Български';
$strBzError = 'phpMyAdmin не може да компресира схемата(dump) заради грешка в Bz2 разширението в тази версия на PHP. Горещо се препоръчва да установите стойността на <code>$cfg[\'BZipDump\']</code> директивата в конфигурационния файл на вашия phpMyAdmin на <code>FALSE</code>. Ако искате да се използвате възможностите на Bz2 компресията, ще трябва да ъпгрейднете до по-нова версия на PHP. Вижте съобщение %s за повече информация.';
$strBzip = '"bzip-нато"';

$strCalendar = 'Календар';
$strCanNotLoadExportPlugins = 'Приставките за експортиране не могат да бъдат заредени, моля проверете инсталацията!';
$strCanNotLoadImportPlugins = 'Plugin-ите за импортиране не могат да бъдат заредени, моля проверете инсталацията на phpMyAdmin!';
$strCannotLogin = 'Не мога да се логна към MySQL сървъра';
$strCantLoad = 'не мога да заредя разширението %s,<br />моля проверете конфигурацията на PHP';
$strCantLoadRecodeIconv = 'Не може да се заредят iconv или recode разширенията необходими за конвертиране на набора от знаци, конфигурирайте PHP така, че да позволява използване на тези разширения или отменете конвертирането на набора от знаци в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Не мога да преименувам индекса на PRIMARY!';
$strCantUseRecodeIconv = 'Не може да се използва нито iconv нито libiconv нито recode_string функцията докато протоколите за разширенията са заредени. Проверете конфигурацията на PHP.';
$strCardinality = 'Кардиналност';
$strCaseInsensitive = 'нечувствително към регистъра';
$strCaseSensitive = 'чувствително към регистъра';
$strCentralEuropean = 'Централно европейски';
$strChangeCopyModeCopy = '... запазване на стария.';
$strChangeCopyModeDeleteAndReload = ' ... изтриване на стария от таблицата на потребителите и след това презареждане на привилегиите.';
$strChangeCopyModeJustDelete = ' ... изтриване на стария от таблицата на потребителите.';
$strChangeCopyMode = 'Създаване нов потребител със същите привилегии и ...';
$strChangeCopyModeRevoke = ' ... отменяне на всички активни привилегии от стария и след това изтриване.';
$strChangeCopyUser = 'Промяна на логин информацията / Копиране на потребител';
$strChangeDisplay = 'Изберете Полета за показване';
$strChange = 'Променяне';
$strChangePassword = 'Смяна на паролата';
$strCharsetOfFile = 'Набор от знаци на файла:';
$strCharsetsAndCollations = 'Набори от знаци и колации';
$strCharsets = 'Набори от знации';
$strCharset = 'Набор от знаци';
$strCheckAll = 'Маркиране на всичко';
$strCheckOverhead = 'Маркиране на таблиците със загубено място';
$strCheckPrivsLong = 'Провери привилегиите за база от данни &quot;%s&quot;.';
$strCheckPrivs = 'Проверка на привилегиите';
$strCheckTable = 'Проверка на таблицата';
$strChoosePage = 'Моля изберете страница за редактиране';
$strColComFeat = 'Показване на коментари към Колоните';
$strCollation = 'Колация';
$strColumnNames = 'Име на колона';
$strColumnPrivileges = 'Привилегии специфични за колоната';
$strCommand = 'Команда';
$strCommentsForTable = 'КОМЕНТАРИ ЗА ТАБЛИЦА';
$strComments = 'Коментари';
$strCompatibleHashing = 'MySQL&nbsp;4.0 съвместимо';
$strCompleteInserts = 'Пълни INSERT-и';
$strCompressionWillBeDetected = 'Компресията на файла за импортиране ще бъде автоматично избрана от: %s';
$strCompression = 'Компресия';
$strConfigDefaultFileError = 'Конфигурацията по подразбиране не може да бъде заредена от: "%1$s"';
$strConfigFileError = 'phpMyAdmin не може да прочете конфигурационният Ви файл!<br />Това може да се случи ако PHP открие синтактична грешка в него или не може да открие файла.<br />Моля извикайте конфигурационния файл директно като използвате линка по-долу и прочетете съобщението за грешка което PHP връща. В по-голяма част от случаите, някъде липсват кавички или точка и запетая.<br />Ако се изведе празна страница, всички е наред.';
$strConfigureTableCoord = 'Моля конфигурирайте координатите за таблица %s';
$strConnectionError = 'Връзката не може да бъде осъществена: невалидни настройки.';
$strConnections = 'Конекции';
$strConstraintsForDumped = 'Ограничения за дъмпнати таблици';
$strConstraintsForTable = 'Ограничения за таблица';
$strCookiesRequired = 'Оттук нататък са необходими "Cookies".';
$strCopyDatabaseOK = 'База от данни %s беше копирана като %s';
$strCopyTableOK = 'Таблица %s беше копирана в %s.';
$strCopyTableSameNames = 'Не може да се копира таблицата към себе си!';
$strCopyTable = 'Копиране на таблица (база от данни<b>.</b>таблица):';
$strCopy = 'Копиране';
$strCouldNotKill = 'phpMyAdmin не можа да спре нишка %s. Вероятно вече е била затворена.';
$strCreateDatabaseBeforeCopying = 'Изпълняване на CREATE DATABASE преди копирането';
$strCreateIndex = 'Създаване на индекс върху &nbsp;%s&nbsp;колони';
$strCreateIndexTopic = 'Създай нов индекс';
$strCreateNewDatabase = 'Създаване на нова БД';
$strCreateNewTable = 'Създаване на нова таблица в БД %s';
$strCreate = 'Създай';
$strCreatePage = 'Създай нова Страница';
$strCreatePdfFeat = 'Създаване на PDF-и';
$strCreationDates = 'Създаване/Обновяване/Проверка на дати';
$strCriteria = 'Критерий';
$strCroatian = 'Хърватски';
$strCyrillic = 'Кирилица';
$strCzech = 'Чешки';
$strCzechSlovak = 'Чехословашки';

$strDanish = 'Датски';
$strDatabase = 'БД';
$strDatabaseEmpty = 'Името на базата от данни е празно!';
$strDatabaseExportOptions = 'Опции за експортиране на база от данни';
$strDatabaseHasBeenDropped = 'Базата данни %s беше изтрита.';
$strDatabasesDropped = '%s бази от данни бяха изтрити успешно.';
$strDatabasesStatsDisable = 'Забрани статистика';
$strDatabasesStatsEnable = 'Разрешаване на статистика';
$strDatabasesStatsHeavyTraffic = 'Забележка: Разрешаването на статистика на базата от данни може да коства много голям трафик между уеб сървъра и MySQL сървъра.';
$strDatabasesStats = ' Статистика за базите данни';
$strDatabases = 'Бази от данни';
$strDataDict = 'Речник на данните';
$strData = 'Данни';
$strDataOnly = 'Само данните';
$strDataPages = 'Страници съдържащи данни';
$strDBComment = 'Коментар към базата от данни: ';
$strDBCopy = 'Копиране на базата от данни в';
$strDbPrivileges = 'Привилегии специфични за базата от данни';
$strDBRename = 'Преименуване на базата от данни на';
$strDbSpecific = 'специфични за базата от данни';
$strDefaultEngine = '%s е хранилището на данни по подразбиране на този MySQL сървър.';
$strDefaultValueHelp = 'За стойностите по подразбиране, моля въведете само една стойност, без обратни черти или апостроф, използвайки следния формат: a';
$strDefault = 'По подразбиране';
$strDefragment = 'Дефрагментиране на таблица';
$strDelayedInserts = 'Използване на отложени вмъквания';
$strDeleteAndFlushDescr = 'Това е най-чистия начин, но презареждането на привилегиите може да отнеме известно време.';
$strDeleteAndFlush = 'Изтриване на потребителите и след това презареждане на привилегиите.';
$strDeleted = 'Редът беше изтрит';
$strDeletedRows = 'Изтрити редове:';
$strDelete = 'Изтриване';
$strDeleteNoUsersSelected = 'Не за избрани потребители за изтриване!';
$strDeleting = 'Изтриване на %s';
$strDelimiter = 'Разделител';
$strDelOld = 'Текущата Страница има Референции към Таблици които вече не съществуват. Желаете ли да изтриете тези Референции?';
$strDescending = 'Низходящо';
$strDescription = 'Описание';
$strDictionary = 'речник';
$strDisabled = 'Забранено';
$strDisableForeignChecks = 'Забраняване на проверките за външен ключ';
$strDisplayFeat = 'Покажи възможностите';
$strDisplayOrder = 'Подреждане по:';
$strDisplayPDF = 'Покажи PDF схема';
$strDoAQuery = 'Изпълняване на "заявка по шаблон" (знак за  заместване: "%")';
$strDocu = 'Документация';
$strDoYouReally = 'Действително ли желаете да изпълните заявката';
$strDropDatabaseStrongWarning = 'Вие ще УНИЩОЖИТЕ цялата база от данни!';
$strDrop = 'Унищожаване';
$strDropUsersDb = 'Изтриване на базите от данни които имат имена като тези на потребителите.';
$strDumpingData = 'Дъмп (схема) на данните в таблицата';
$strDumpSaved = 'Схемата(дъмп) беше записана във файл %s.';
$strDumpXRows = 'Дъмп-ни %s реда като започнеш от %s.';
$strDynamic = 'динамичен';

$strEdit = 'Редактиране';
$strEditPDFPages = 'Редактиране на PDF Страници';
$strEditPrivileges = 'Редактиране на привилегиите';
$strEffective = 'Ефективни';
$strEmpty = 'Изчистване';
$strEmptyResultSet = 'MySQL върна празен резултат (т.е. нула редове).';
$strEnabled = 'Позволено';
$strEncloseInTransaction = 'Изолиране на експорта в транзакция';
$strEndCut = 'END CUT';
$strEnd = 'Край';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s е разрешен на този MySQL сървър.';
$strEngineDisabled = '%s е изключен за този MySQL сървър.';
$strEngines = 'Хранилища';
$strEngineUnsupported = 'Този MySQL сървър не поддържа хранилището на данни %s.';
$strEnglish = 'Английски';
$strEnglishPrivileges = ' Забележка: Имената на привилегиите на MySQL са показани на английски. ';
$strErrorInZipFile = 'Грешка в ZIP архива:';
$strError = 'Грешка';
$strErrorRenamingTable = 'Грешка при преименуване на таблица %1$s в %2$s';
$strEsperanto = 'Есперанто';
$strEstonian = 'Естонски';
$strExcelEdition = 'Версия на Excel';
$strExecuteBookmarked = 'Стартиране на запазена SQL-заявка';
$strExplain = 'Explain SQL';
$strExport = 'Експортиране';
$strExtendedInserts = 'Разширени INSERT-и';
$strExtra = 'Допълнително';

$strFailedAttempts = 'Провалили се опити';
$strFieldHasBeenDropped = 'Полето %s беше изтрито';
$strFieldsEnclosedBy = 'Полетата са оградени с';
$strFieldsEscapedBy = 'Представка на специалните знаци';
$strFieldsTerminatedBy = 'Полетата завършват с';
$strFields = 'Полета';
$strField = 'Поле';
$strFileAlreadyExists = 'Файлът %s вече съществува на сървъра, сменете името на файла или включете опцията за препокриване.';
$strFileCouldNotBeRead = 'Файлът не може да бъде прочетен';
$strFileNameTemplateDescriptionDatabase = 'име на базата от данни';
$strFileNameTemplateDescriptionServer = 'име на сървъра';
$strFileNameTemplateDescriptionTable = 'име на таблицата';
$strFileNameTemplateRemember = 'запомняне на шаблона';
$strFileNameTemplate = 'Шаблон на файловото име';
$strFileToImport = 'Файл за импортиране';
$strFixed = 'Фиксиран';
$strFlushPrivilegesNote = 'Забележка: phpMyAdmin взема потребителските привилегии директно от таблицата на привилегиите на MySQL. Съдържанието на тази таблица може да се различава от привилегиите които използва сървъра ако към него са направени промени на ръка. В този случай, трябва да %sпрезаредите привилегиите%s преди да продължите.';
$strFlushTable = 'Изчистване на кеша на таблицата ("FLUSH")';
$strFontSize = 'Размер на шрифта';
$strFormat = 'Формат';
$strFormEmpty = 'Липсва стойност във полето на формата!';
$strFullText = 'Пълни текстове';
$strFunction = 'Функция';
$strFunctions = 'Функции';

$strGenBy = 'Генерирано от';
$strGeneralRelationFeat = 'Общи възможности на релациите';
$strGenerate = 'Генериране';
$strGeneratePassword = 'Генериране на парола';
$strGenTime = 'Време на генериране';
$strGeorgian = 'Грузински';
$strGerman = 'Немски';
$strGlobal = 'глобален';
$strGlobalPrivileges = 'Глобални привилегии';
$strGlobalValue = 'Глобална стойност';
$strGo = 'Изпълнение';
$strGrantOption = 'Дадени';
$strGreek = 'Гръцки';
$strGzip = '"gzip-нато"';

$strHasBeenAltered = 'беше променена.';
$strHasBeenCreated = 'беше създадена.';
$strHaveToShow = 'Трябва да изберете поне една Колона за показване';
$strHebrew = 'Иврит';
$strHome = 'Начало';
$strHomepageOfficial = 'Официалната уеб страница на phpMyAdmin ';
$strHostEmpty = 'Името на хоста е празно!';
$strHost = 'Хост';
$strHungarian = 'Унгарски';

$strIcelandic = 'Исландски';
$strId = 'ID';
$strIdxFulltext = 'Пълнотекстово';
$strIgnore = 'Игнориране';
$strIgnoreDuplicates = 'Игнориране на дублиращите се редове';
$strIgnoreInserts = 'Използване на INSERT IGNORE';
$strImportFiles = 'Импортиране на файлове';
$strImportFormat = 'Формат на импортирания файл';
$strImport = 'Импортиране';
$strImportSuccessfullyFinished = 'Импортирането приключи успещно. Бяха изпълнени %d заявки.';
$strIndexes = 'Индекси';
$strIndexHasBeenDropped = 'Индекса %s беше изтрит';
$strIndexName = 'Име на индекса&nbsp;:';
$strIndex = 'Индекс';
$strIndexType = 'Тип на индекса&nbsp;:';
$strIndexWarningTable = 'Проблем с индексите на таблица `%s`';
$strInnoDBPages = 'страници';
$strInnodbStat = 'InnoDB Състояние';
$strInsecureMySQL = 'Вашият конфигурационен файл съдържа настройки (root без парола), които съответстват на привилегирования акаунт на MySQL по подразбиране. Вашият MySQL сървър е стартиран с това по подразбиране и може да бъде лесно хакнат. Трябва да оправите тази дупка в сигурността.';
$strInsertAsNewRow = 'Вмъкване като нов ред';
$strInsertedRowId = 'Вмъкнато ID на реда:';
$strInsertedRows = 'Вмъкнати реда:';
$strInsert = 'Вмъкване';
$strInternalNotNecessary = '* Вътрешната релация не е необходима когато съществува също в InnoDB.';
$strInternalRelations = 'Вътрешни релации';
$strInUse = 'Заето';
$strInvalidColumn = 'Невалидна колона (%s)!';
$strInvalidColumnCount = 'Броя на колоните трябва да е по-голям от нула.';
$strInvalidDatabase = 'Невалидна база от данни';
$strInvalidFieldAddCount = 'Трябва да добавите поне едно поле.';
$strInvalidFieldCount = 'Таблицата трябва да има поне едно поле.';
$strInvalidRowNumber = '%d не е валиден номер на ред.';
$strInvalidTableName = 'Невалидно име на таблица';

$strJapanese = 'Японски';
$strJumpToDB = 'Скочи към база от данни &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Изтритите&quot; потребители ще имат достъп до сървъра както обикновено, докато не се презаредят привилегиите.';
$strJustDelete = 'Изтриване на потребителите от таблицата с привилегиите.';

$strKeepPass = 'Да не се сменя паролата';
$strKeyname = 'Име на ключа';
$strKill = 'СТОП';
$strKorean = 'Корейски';

$strLandscape = 'Пейзажно';
$strLanguage = 'Език';
$strLatexCaption = 'Заглавие на таблицата';
$strLatexContent = 'Съдържание на таблица __TABLE__';
$strLatexContinuedCaption = 'Продължение на заглавието на таблицата';
$strLatexContinued = '(продължение)';
$strLatexIncludeCaption = 'Включване на заглавие на таблицата';
$strLatexLabel = 'Етикет на ключа';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Структура на таблица __TABLE__';
$strLatvian = 'Латвийски';
$strLDI = 'CSV с LOAD DATA';
$strLDILocal = 'Използване на ключовата дума LOCAL ';
$strLengthSet = 'Дължина/Стойност*';
$strLimitNumRows = 'редове на страница';
$strLinesTerminatedBy = 'Редовете завършват с';
$strLinkNotFound = 'Връзките не са намерени';
$strLinksTo = 'Сочи към';
$strLithuanian = 'Литовски';
$strLocalhost = 'Локален';
$strLocationTextfile = 'Местоположение на текстовия файл';
$strLoginInformation = 'Информация за логване';
$strLogin = 'Вход';
$strLogout = 'Изход от системата';
$strLogPassword = 'Парола:';
$strLogServer = 'Сървър';
$strLogUsername = 'Име:';
$strLongOperation = 'Операцията може да продължи дълго. Да продължи ли въпреки това?';

$strMaxConnects = 'Максимален брой на едновременните конекции';
$strMaximalQueryLength = 'Максимална дължина на създадената заявка';
$strMaximumSize = 'Максимален размер: %s%s';
$strMIME_available_mime = 'Достъпни MIME-типове';
$strMIME_available_transform = 'Достъпни трансформации';
$strMIME_description = 'Описание';
$strMIME_MIMEtype = 'MIME-тип';
$strMIME_nodescription = 'Няма Описание за тази трансформация.<br />Моля обърнете се към автора относно това какво прави %s.';
$strMIME_transformation = 'Браузърна трансформация';
$strMIME_transformation_note = 'За списъка на достъпните опции на трансформацията и техните MIME-type трансформации кликнете на %sописания на трансформацията%s';
$strMIME_transformation_options_note = 'Моля въведете стойностите за опциите на трансформацията като използвате следния формат: \'a\', 100, b,\'c\'...<br />Ако трябва да поставите обратно наклонена черта ("\") или единична кавичка ("\'") между тези стойности, поставете пред тях допълнителна обратно наклонена черта (например \'\\\\xyz\' или \'a\\\'b\').';
$strMIME_transformation_options = 'Опции на трансформацията';
$strMIMETypesForTable = 'MIME ТИПОВЕ ЗА ТАБЛИЦА';
$strMIME_without = 'MIME-types показани в наклонен шрифт не притежават отделна функция за трансформация';
$strModifications = 'Промените бяха съхранени';
$strModifyIndexTopic = 'Промяна на индекс';
$strModify = 'Промени';
$strMoveTable = 'Преместване на таблица към (база от данни<b>.</b>таблица):';
$strMoveTableOK = 'Таблицата %s беше преместена към %s.';
$strMoveTableSameNames = 'Не може да се премести таблицата към себе си!';
$strMultilingual = 'многоезичен';
$strMyISAMMaxExtraSortFileSize = 'Максимален размер на временните файлове при създаване на индекс';
$strMyISAMRecoverOptions = 'Режим на автоматично възстановяване';
$strMyISAMRepairThreads = 'Поправка на нишките';
$strMyISAMSortBufferSize = 'Размер на буфера за сортиране';
$strMySQLCharset = 'Набор от знаци на MySQL';
$strMysqlClientVersion = 'Версия на клиента за MySQL';
$strMySQLConnectionCollation = 'Колация на MySQL';
$strMySQLSaid = 'MySQL отговори: ';
$strMySQLShowProcess = 'MySQL процеси';
$strMySQLShowStatus = 'Информация за състоянието на MySQL сървъра';
$strMySQLShowVars = 'Системни променливи на MySQL';

$strName = 'Име';
$strNext = 'Следващ';
$strNoDatabases = 'Няма бази от данни';
$strNoDatabasesSelected = 'Няма избрани бази от данни.';
$strNoDescription = 'няма Описание';
$strNoDetailsForEngine = 'Няма детайлна информация за състоянието на това хранилище на данни.';
$strNoDropDatabases = '"DROP DATABASE" заявката е забранена.';
$strNoExplain = 'Пропусни Explain SQL';
$strNoFilesFoundInZip = 'Не са открити файлове в ZIP архива!';
$strNoFrames = 'phpMyAdmin е по дружелюбен ако използвате браузър, който поддържа <b>frames</b>.';
$strNoIndexPartsDefined = 'Не са дефинирани части на индекс!';
$strNoIndex = 'Не е дефиниран индекс!';
$strNoModification = 'Няма промяна';
$strNone = 'Няма';
$strNo = 'не';
$strNoOptions = 'Този формат няма опции';
$strNoPassword = 'Няма парола';
$strNoPermission = 'Уеб сървъра няма права за запис на файла %s.';
$strNoPhp = 'без PHP код';
$strNoPrivileges = 'Няма привилегии';
$strNoRights = 'В момента не разполагате с достатъчно права за да се намирате тук!';
$strNoRowsSelected = 'Няма върнати редове';
$strNoSpace = 'Недостатъчно свободно пространство за записване на файла %s.';
$strNoTablesFound = 'В базата от данни няма таблици.';
$strNotNumber = 'Това не е число!';
$strNotOK = 'не е OK';
$strNotSet = 'таблица  <b>%s</b> не е намерена или не е установена в %s';
$strNoUsersFound = 'Няма потребител(и).';
$strNoValidateSQL = 'Пропусни Validate SQL';
$strNull = 'Празно';
$strNumberOfFields = 'Брой полета';
$strNumSearchResultsInTable = '%s съвпадение(я) в таблица <i>%s</i>';
$strNumSearchResultsTotal = '<b>Общо:</b> <i>%s</i> съвпадение(я)';
$strNumTables = 'Таблици';

$strOK = 'OK';
$strOpenNewWindow = 'Отваряне на нов прозорец с phpMyAdmin';
$strOperations = 'Операции';
$strOperator = 'Оператор';
$strOptimizeTable = 'Оптимизация на таблицата';
$strOr = 'или';
$strOverhead = 'Загубено място';
$strOverwriteExisting = 'Препокриване на съществуващите файлове';

$strPageNumber = 'Номер на страницата:';
$strPaperSize = 'Размер на хартията';
$strPartialImport = 'Частично импортиране';
$strPartialText = 'Частични текстове';
$strPasswordChanged = 'Паролата на %s беше променена успешно.';
$strPasswordEmpty = 'Паролата е празна!';
$strPasswordNotSame = 'Паролата не е същата!';
$strPassword = 'Парола';
$strPdfDbSchema = 'Схемата на база от данни "%s" - Страница %s';
$strPdfInvalidTblName = 'Таблица "%s" не съществува!';
$strPdfNoTables = 'Няма таблици';
$strPDFReportExplanation = '(Генерира доклад съдържащ данните в определена таблица)';
$strPDFReportTitle = 'Файл на доклада';
$strPerHour = 'на час';
$strPerMinute = 'на минута';
$strPerSecond = 'на секунда';
$strPersian = 'Персийски';
$strPhoneBook = 'Телефонен бележник';
$strPHP40203 = 'Вие използвате PHP 4.2.3, който има сериозен бъг с много-байтови стрингове (mbstring). Вижте сведението за PHP бъга 19404. Не е препоръчително да използвате тази версия на PHP с phpMyAdmin.';
$strPhp = 'Създаване на PHP код';
$strPHPVersion = 'Версия на PHP';
$strPmaDocumentation = 'phpMyAdmin документация';
$strPmaUriError = 'На <tt>$cfg[\'PmaAbsoluteUri\']</tt> ТРЯБВА да се зададе стойност в конфигурационния файл!';
$strPolish = 'Полски';
$strPortrait = 'Портретно';
$strPos1 = 'Начало';
$strPrevious = 'Предишен';
$strPrimaryKeyHasBeenDropped = ' Главния ключ беше изтрит.';
$strPrimaryKeyName = 'Името на главния ключ трябва да е... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>трябва</b> да е името на <b>и единствено на</b> главния ключ!)';
$strPrimary = 'PRIMARY';
$strPrint = 'Печат';
$strPrintViewFull = 'Преглед за печат (с пълните текстове)';
$strPrintView = 'Преглед за печат';
$strPrivDescAllPrivileges = 'Включва всички привилегии освен GRANT.';
$strPrivDescAlterRoutine = 'Позволяване на променяне и издриване на Съхранени Процедури.';
$strPrivDescAlter = 'Позволява променяне на структурата на съществуващи таблици.';
$strPrivDescCreateDb = 'Позволява създаване на нови бази от данни и таблици.';
$strPrivDescCreateRoutine = 'Позволяване на създаването на Съхранени Процедури.';
$strPrivDescCreateTbl = 'Позволява създаване на нови таблици.';
$strPrivDescCreateTmpTable = 'Позволява създаването на временни таблици.';
$strPrivDescCreateUser = 'Позволяване на създаването, изтриването и преименуването на потребителски акаунти.';
$strPrivDescCreateView = 'Позволяване на създаването на нови Изгледи.';
$strPrivDescDelete = 'Позволява изтриване на данни.';
$strPrivDescDropDb = 'Позволява изтриване на бази от данни и таблици.';
$strPrivDescDropTbl = 'Позволява изтриване на таблици.';
$strPrivDescExecute5 = 'Позволяване на стартирането на Съхранени Процедури.';
$strPrivDescExecute = 'Позволява стартирането на съхранени процедури; Няма ефект в тази версия на MySQL.';
$strPrivDescFile = 'Позволява импортиране на данни от и експортиране на данни във файлове.';
$strPrivDescGrant = 'Позволява добавяне на потребители и привилегии без презареждане на таблицата с привилегиите.';
$strPrivDescIndex = 'Позволява създаване и премахване на индекси.';
$strPrivDescInsert = 'Позволява вмъкване и заменяне на данни.';
$strPrivDescLockTables = 'Позволява заключване на таблици за текущата нишка.';
$strPrivDescMaxConnections = 'Ограничава броя на новите конекции, които потребителя може да отвори на час.';
$strPrivDescMaxQuestions = 'Ограничава броя на заявките, които потребителя може да изпрати към сървъра на час.';
$strPrivDescMaxUpdates = 'Ограничава броя на командите, които променят някоя таблица или база от данни, които даден потребител може да стартира за час.';
$strPrivDescProcess3 = 'Позволява спирането на процеси на други потребители.';
$strPrivDescProcess4 = 'Позволява преглед на целите заявки в списъка с процесите.';
$strPrivDescReferences = 'Няма ефект в тази версия на MySQL.';
$strPrivDescReload = 'Позволява презареждане на сървърните настройки и изчистване(flashing) на кеша на сървъра.';
$strPrivDescReplClient = 'Дава правото на потребител да знае къде са slaves / masters.';
$strPrivDescReplSlave = 'Нужно за replication slaves.';
$strPrivDescSelect = 'Позволява четене на данни.';
$strPrivDescShowDb = 'Дава достъп до пълния списък на базите данни.';
$strPrivDescShowView = 'Позволяване на изпълнението на SHOW CREATE VIEW заявки.';
$strPrivDescShutdown = 'Позволява спиране на сървъра.';
$strPrivDescSuper = 'Позволява конектвне, дори ако е достигнат максималния брой на конекциите; Изисква се за повечето административни операции, като установяване на глобални променливи или спиране на нишка на други потребители.';
$strPrivDescUpdate = 'Позволява промяна на данни.';
$strPrivDescUsage = 'Няма привилегии.';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегиите бяха презаредени успешно.';
$strProcedures = 'Процедури';
$strProcesses = 'Процеси';
$strProcesslist = 'Списък на процесите';
$strProtocolVersion = 'Версия на протокола';
$strPutColNames = 'Поставяне имената на полетата на първия ред';

$strQBEDel = 'Изтрий';
$strQBEIns = 'Вмъкни';
$strQBE = 'Запитване по пример';
$strQueryCache = 'Кеш на заявките';
$strQueryFrame = 'Прозорец за заявки';
$strQueryOnDb = 'SQL-заявка към базата от данни <b>%s</b>:';
$strQueryResultsOperations = 'Операции с резулатата от заявката';
$strQuerySQLHistory = 'SQL-хронология';
$strQueryStatistics = '<b>Статистика на заявките</b>: От както е стартиран %s заявки са изпратени към сървъра.';
$strQueryTime = 'Заявката отне %01.4f секунди';
$strQueryType = 'Тип на заявката';
$strQueryWindowLock = 'Не препокривайте тази заявка извън този прозорец';

$strReceived = 'Получени';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверка на интегритета на връзките';
$strRefresh = 'Презареждане';
$strRelationalSchema = 'Релационна схема';
$strRelationNotWorking = 'Допълнителните възможности за работа със свързани (linked) таблици са деактивирани. За да разберете защо кликнете %sтук%s.';
$strRelations = 'Релации';
$strRelationsForTable = 'РЕЛАЦИИ ЗА ТАБЛИЦА';
$strRelationView = 'Преглед на релациите';
$strReloadingThePrivileges = 'Презареждане на привилегиите';
$strReloadPrivileges = 'Презареждане на привилегиите';
$strRemoveSelectedUsers = 'Отстраняване на избраните потребители';
$strRenameDatabaseOK = 'Базата данни %s беше преименувана на %s';
$strRenameTable = 'Преименуване на таблицата на';
$strRenameTableOK = 'Таблица %s беше преименувана на %s';
$strRepairTable = 'Поправяне на таблицата';
$strReplaceNULLBy = 'Заменяй NULL с';
$strReplaceTable = 'Заместване на данните от таблицата с данните от файла';
$strReplication = 'Репликация';
$strReset = 'Изчистване';
$strResourceLimits = 'Ресурсни ограничения';
$strReType = 'Отново';
$strRevokeAndDeleteDescr = 'Потребителите все още ще имат USAGE привилегия докато не се презаредят привилегиите.';
$strRevokeAndDelete = 'Отмяна на всички активни привилегии от потребителите и след това изтриване.';
$strRevokeMessage = 'Вие отменихте привилегиите за %s';
$strRevoke = 'Отменяне';
$strRomanian = 'Румънски';
$strRowLength = 'Дължина на реда';
$strRows = 'Редове';
$strRowsFrom = 'реда започвайки от';
$strRowSize = ' Размер на ред ';
$strRowsModeFlippedHorizontal = 'хоризонтален (обърнати хедъри)';
$strRowsModeHorizontal = 'хоризонтален';
$strRowsModeOptions = 'в %s вид и повтаряне на имената на колоните през всеки %s<br />';
$strRowsModeVertical = 'вертикален';
$strRowsStatistic = 'Статистика за редовете';
$strRunning = 'работи на %s';
$strRunQuery = 'Изпълни заявката';
$strRunSQLQuery = 'Изпълнение на SQL заявка/заявки към база от данни %s';
$strRunSQLQueryOnServer = 'Изпълняване на SQL заявка/заявки на сървър %s';
$strRussian = 'Руски';

$strSaveOnServer = 'Записване на сървъра в директория %s';
$strSave = 'Записване';
$strScaleFactorSmall = 'Мащаба е твърде малък за да се събере схемата на една страница';
$strSearchFormTitle = 'Търсене в базата от данни';
$strSearchInTables = 'В таблиците:';
$strSearchNeedle = 'Думи или стойности за търсене (знак за заместване: "%"):';
$strSearch = 'Търсене';
$strSearchOption1 = 'поне една от думите';
$strSearchOption2 = 'всички думи';
$strSearchOption3 = 'точната фраза';
$strSearchOption4 = 'като регулярен израз';
$strSearchResultsFor = 'Резултати от търсенето на "<i>%s</i>" %s:';
$strSearchType = 'Намери:';
$strSecretRequired = 'Конфигурационния файл има нужда от тайна парола (blowfish_secret).';
$strSelectADb = 'Моля изберете база от данни';
$strSelectAll = 'Селектиране на всичко';
$strSelectBinaryLog = 'Изберете двоичен журнал за преглед';
$strSelectFields = 'Избор на поле (поне едно):';
$strSelectNumRows = 'в запитването';
$strSelectTables = 'Избери таблици';
$strSend = 'Изпращане';
$strSent = 'Изпратени';
$strServerChoice = 'Избор на сървър';
$strServer = 'Сървър';
$strServerNotResponding = 'Няма отговор от сървъра';
$strServers = 'Сървъри';
$strServerStatus = 'Информация за състоянието на MySQL сървъра';
$strServerStatusUptime = 'Този MySQL сървър работи от %s. Стартиран е на %s.';
$strServerTabVariables = 'Променливи';
$strServerTrafficNotes = '<b>Трафик на сървъра</b>: Тези таблици показват статистика за мрежовия трафик на MySQL сървъра от както е стартиран.';
$strServerVars = 'Сървърни променливи и настройки';
$strServerVersion = 'Версия на сървъра';
$strSessionValue = 'Сесийна стойност';
$strSetEnumVal = 'Ако типа на полето е "enum" или "set", моля въведете стойностите използвайки този формат: \'a\',\'b\',\'c\'...<br />Ако е необходимо да сложите обратна черта ("\") или апостроф ("\'") между тези стойности, сложите обратна черта пред тях (например:  \'\\\\xyz\' или \'a\\\'b\').';
$strShowAll = 'Покажи всички';
$strShowColor = 'Покажи цвят';
$strShowDatadictAs = 'Формат на речника на данните';
$strShowFullQueries = 'Показване на пълните заявки';
$strShowGrid = 'Покажи мрежа';
$strShowingRecords = 'Показване на записи ';
$strShowOpenTables = 'Показване на отворените теблици';
$strShowPHPInfo = 'Информация за PHP ';
$strShowStatusCreated_tmp_filesDescr = 'Брой на създадените от mysqld временни файлове.';
$strShowStatusDelayed_writesDescr = 'Брой на вмъкнатите посредством INSERT DELAYED редове.';
$strShowStatusHandler_updateDescr = 'Брой заявки за обновяване на ред в таблица.';
$strShowStatusHandler_writeDescr = 'Брой заявки за вмъкване на ред в таблица.';
$strShowStatusOpen_filesDescr = 'Брой на отворените файлове.';
$strShowStatusOpen_streamsDescr = 'Брой на отворените потоци (използва се главно за логове).';
$strShowStatusOpen_tablesDescr = 'Брой на отвотените таблици.';
$strShowStatusSort_rowsDescr = 'Брой на сортираните редове.';
$strShowTableDimension = 'Покажи размерността на таблиците';
$strShowTables = 'Покажи таблиците';
$strShowThisQuery = ' Показване на заявката отново';
$strShow = 'Показване';
$strSimplifiedChinese = 'Опростен китайски';
$strSingly = '(еднократно)';
$strSize = 'Размер';
$strSkipQueries = 'Брой записи(завки), които да бъдат пропуснати от началото';
$strSlovak = 'Словашки';
$strSlovenian = 'Словенски';
$strSortByKey = 'Сортиране по ключ';
$strSorting = 'Сортиране';
$strSort = 'Сортиране';
$strSpaceUsage = 'Използвано място';
$strSpanish = 'Испански';
$strSplitWordsWithSpace = 'Думите трябва да се разделят с интервал (" ").';
$strSQLCompatibility = 'Режим на съвместимост на SQL';
$strSQLExportType = 'Тип на експортирането';
$strSQLParserBugMessage = 'Има известна вероятност да сте намерили бъг в SQL парсера. Моля проучете по-добре, и проверете коректността на кавичките. Друга вероятна причина за грешката може да бъде, че ъплоудвате файл с изпълним код извън областта заградена с кавички. Можете също така да се опитате да изпълните заявката чрез интерфейса за команден ред на MySQL. Грешката генерирана от MySQL сървъра по-долу, ако има такава, може също да ви помогне при откриването на проблема. Ако все още имате проблеми или парсера дава грешка там където интерфейса на командния ред не връща такава, моля ограничете вашите SQL заявки само до проблемната заявка, и изпратете съобщение за бъг с парчето от данните в CUT секцията по-долу:';
$strSQLParserUserError = 'Изглежда, че има грешка в SQL заявката ви. Грешката върната от MySQL сървъра по долу, ако има такава, би могла да ви помогне в определянето на проблема';
$strSQLQuery = 'SQL заявка';
$strSQLResult = 'SQL резултат';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Невалиден идентификатор';
$strSQPBugUnclosedQuote = 'Незатворени кавички';
$strSQPBugUnknownPunctuation = 'Непозната пунктуация на стринг';
$strStatCheckTime = 'Последна проверка';
$strStatCreateTime = 'Дата на създаване';
$strStatement = 'Заявление';
$strStatUpdateTime = 'Последно обновление';
$strStatus = 'Състояние';
$strStorageEngine = 'Хранилище на данни';
$strStorageEngines = 'Хранилища на данни';
$strStrucCSV = 'CSV данни';
$strStrucData = 'Структурата и данните';
$strStrucExcelCSV = 'CSV за MS Excel данни';
$strStrucOnly = 'Само структурата';
$strStructPropose = 'Анализ на таблицата';
$strStructure = 'Структура';
$strSubmit = 'Изпълнение';
$strSuccess = 'SQL заявката беше изпълнена успешно';
$strSum = 'Сума';
$strSwedish = 'Шведски';
$strSwitchToDatabase = 'Прехвърляна към копираната база от данни';
$strSwitchToTable = 'Превключване към копираната таблица';

$strTableAlreadyExists = 'Таблица %s вече съществува!';
$strTableComments = 'Коментари към таблицата';
$strTableEmpty = 'Името на таблицата е празно!';
$strTableHasBeenDropped = 'Таблицата %s беше изтрита';
$strTableHasBeenEmptied = 'Таблицата %s беше изчистена';
$strTableHasBeenFlushed = 'Кеша на таблица %s беше изчистен';
$strTableMaintenance = 'Поддръжка на таблицата';
$strTableOfContents = 'Съдържание';
$strTableOptions = 'Опции на таблицата';
$strTables = '%s таблица(и)';
$strTableStructure = 'Структура на таблица';
$strTable = 'Таблица ';
$strTblPrivileges = 'Привилегии специфични за таблицата';
$strTempData = 'Временни данни';
$strTextAreaLength = ' Поради дължината си,<br /> това поле може да не е редактируемо ';
$strThai = 'Тайландски';
$strThemeDefaultNotFound = 'Темата по подразбиране %s не е намерена!';
$strThemeNotFound = 'Тема %s не е намерена!';
$strThemeNoValidImgPath = 'Не е открит валиден път на тема %s!';
$strTheme = 'Тема / Стил';
$strThemePathNotFound = 'Не е открит пътя на тема %s!';
$strThisHost = 'Този Хост';
$strThreadSuccessfullyKilled = 'Нишка %s беше успешно отстранена.';
$strThreads = 'Нишки';
$strTime = 'Време';
$strTotal = 'Общо';
$strTotalUC = 'Общо';
$strTraditionalChinese = 'Традиционен китайски';
$strTraditionalSpanish = 'Традиционен Испански';
$strTraffic = 'Трафик';
$strTransactionCoordinator = 'Координатор на транзакциите';
$strTransformation_application_octetstream__download = 'Показва връзка за сваляне на двоичните данни нa полето. Първата опция е файловото име на двоичния файл. Втората опция е вероятното име на полето на реда на таблицата съдържащо файловото име. Ако напишете втора опция, трябва първата ви опция да е установена на празен низ.';
$strTransformation_image_jpeg__inline = 'Показва thumbnail; опции: ширина, височина в пиксели (запазва оригиналната пропорция)';
$strTransformation_image_jpeg__link = 'Показва връзката на това изображение (за директно сваляне, i.e.).';
$strTransformation_image_png__inline = 'Виж image/jpeg: inline';
$strTransformation_text_plain__external = 'САМО ЗА ЛИНУКС: Стартира външното приложение и попълва данните в полетата чрез стандартния вход. Връща стандартния изход на приложението. По подразбиране е Tidy, за да покаже HTML кода. От съображения за сигурност, трябва ръчно да редактирате файла libraries/transformations/text_plain__external.inc.php и да вмъкнете програмите на които вие позволявате да бъдат стартирани. Първата опция тогава е номера на програмата която бихте искали да използвате а втората опция са параметрите за програмата. Ако третият параметър е установен в 1, ще конвертира изхода използвайки htmlspecialchars() (По подразбиране е 1). Ако четвъртият параметър е установен в 1, ще постави NOWRAP на клетката на съдържанието, така че целия изход ще бъде показан без преформатиране (По подразбиране е 1)';
$strTransformation_text_plain__formatted = 'Запазва оригиналното форматиране на полето.';
$strTransformation_text_plain__imagelink = 'Показва изображение и връзка на полето съдържащо файлово име; първата опция е префикс като "http://domain.com/", втората опция е ширината в пиксели, третата е височината.';
$strTransformation_text_plain__link = 'Показва връзката на полето съдържащо файлово име; първата опция е префикс като "http://domain.com/", втората опция е заглавието на връзката.';
$strTransformation_text_plain__substr = 'Показва част от низ. Първата опция е отместването от което ще се извежда вашият текст (По подразбиране е 0). Втората опция указва колко текст ще се изведе. Ако е празна, се връща целия оставащ текст. Третата опция указва кои зкаци ще бъдат изведени (По подразбиране: ...) .';
$strTruncateQueries = 'Съкращаване на показаните заявки';
$strTurkish = 'Турски';
$strType = 'Тип';

$strUkrainian = 'Украински';
$strUncheckAll = 'Размаркиране на всичко';
$strUnicode = 'Unicode';
$strUnique = 'Уникално';
$strUnknown = 'непознат';
$strUnselectAll = 'Деселектиране на всичко';
$strUpdatePrivMessage = 'Вие променихте привилегиите за %s.';
$strUpdateProfileMessage = 'Профила беше обновен.';
$strUpdateQuery = 'Допълни Запитването';
$strUpdComTab = 'Моля прегледайте информацията в Документацията относно това как да обновите вашата Column_comments таблица';
$strUpgrade = 'Трябва да ъпгрейднете към %s %s или по-късно.';
$strUploadLimit = 'Вероятно сте направили опит да качите твърде голям файл. Моля, обърнете се към %sdдокументацията%s за да намерите начин да избегнете това ограничение.';
$strUploadsNotAllowed = 'На този сървър не е позволени качване на файлове.';
$strUsage = 'Използвани';
$strUseBackquotes = 'Използване на обратни кавички около имена на таблици и полета';
$strUsedPhpExtensions = 'Използвани PHP разширения';
$strUseHostTable = 'Използвай таблица Host';
$strUserAlreadyExists = 'Потребител %s вече съществува!';
$strUserEmpty = 'Потребителското име е празно!';
$strUserName = 'Потребителско име';
$strUserNotFound = 'Избрания потребител не беше открит в таблицата с привилегиите.';
$strUserOverview = 'Преглед на потребителите';
$strUsersDeleted = 'Избраните потребители бяха изтрити успешно.';
$strUsersHavingAccessToDb = 'Потребители които имат достъп до &quot;%s&quot;';
$strUser = 'Потребител';
$strUseTabKey = 'Използвайте клавиша TAB за да премествате крурсора от стойност на стойност или CTRL+стрелка за да премествате курсора в съответната посока';
$strUseTables = 'Използвай таблицата';
$strUseTextField = 'Използвай текстовото поле';
$strUseThisValue = 'Използвахте тази стойност';

$strValidateSQL = 'Валидирай SQL-а';
$strValidatorError = 'SQL валидатора не може да бъде инициализиран. Моля проверете дали сте инсталирали необходимите PHP разширения, така както е описано в %sдокументацията%s.';
$strValue = 'Стойност';
$strVar = 'Променлива';
$strVersionInformation = 'Информация за весията';
$strView = 'Изглед';
$strViewDumpDatabases = 'Преглед на схемата на базата от данни';
$strViewDumpDB = 'Схема на БД';
$strViewDump = 'Схема на таблицата';
$strViewHasBeenDropped = 'Изглед %s беше изтрит';
$strViewMaxExactCount = 'Този изглед има повече от %s реда. Моля, обърнете се към %sдокументацията%s.';

$strWebServerUploadDirectoryError = 'Директорията която сте указали за upload не може да бъде достигната';
$strWebServerUploadDirectory = 'директорията за upload на уеб сървъра';
$strWelcome = 'Добре дошли в %s';
$strWestEuropean = 'Западно-европейски';
$strWildcard = 'знак за заместване';
$strWindowNotFound = 'Прозореца на браузъра не може да бъде обновен. Може би сте затворили отварящият го прозорец или браузърът Ви е блокирал обновяване на данни от един прозорец в друг от съображения за сигурност';
$strWithChecked = 'Когато има отметка:';
$strWrongUser = 'Грешно име/парола. Достъп отказан.';

$strXML = 'XML';

$strYes = 'да';

$strZeroRemovesTheLimit = 'Забележка: Установяването на тези опции с 0 (нула) премахва ограничението.';
$strZip = '"zip-нато"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate

$strBinaryLog = 'Binary log';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseNone = 'Няма';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strCSV = 'CSV';  //to translate

$strDirtyPages = 'Dirty pages';  //to translate

$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate

$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Неразпознат език: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate

$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate

$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate

$strReadRequests = 'Read requests';  //to translate

$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowSlaveHosts = 'Show slave hosts';  //to translate
$strShowSlaveStatus = 'Show slave status';  //to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';  //to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';  //to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';  //to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';  //to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';  //to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';  //to translate
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
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate

$strTakeIt = 'take it';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTransformation_application_octetstream__hex = 'Показва шестнадесетично представяне на данните. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate

$strWriteRequests = 'Write requests';  //to translate

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
