<?php
/* $Id: russian-utf-8.inc.php 11161 2008-03-09 14:12:30Z lem9 $ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 *               (nobody) 2004-09-18
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
// по ГОСТ 8.417-2002
$byteUnits = array('Байт', 'КБ', 'МБ', 'ГБ', 'ТБ', 'ПБ', 'ЭБ');

$day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y г., %H:%M';
$timespanfmt = '%s дней, %s часов, %s минут и %s секунд';

$strAbortedClients = 'Прерваны';
$strAccessDenied = 'В доступе отказано';
$strAccessDeniedCreateConfig = 'Возможная причина - отсутствие файла конфигурации. Для его создания вы можете воспользоваться %1$sсценарием установки%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin не смог установить соединение с сервером MySQL. Проверьте хост, имя пользователя и пароль установленные в конфигурационном файле config.inc.php и удостоверьтесь, что они соответствуют данным полученным от администратора сервера MySQL.';
$strAction = 'Действие';
$strAddAutoIncrement = 'Добавить AUTO_INCREMENT';
$strAddClause = 'Добавить %s';
$strAddConstraints = 'Добавить ограничения';
$strAddDeleteColumn = 'Добавить/удалить столбец критерия';
$strAddDeleteRow = 'Добавить/удалить ряд критерия';
$strAddFields = 'Добавить %s поле(я)';
$strAddHeaderComment = 'Добавить собственный комментарий в заголовок (перевод строки: \\n)';
$strAddIntoComments = 'Добавить в комментарии';
$strAddNewField = 'Добавить новое поле';
$strAddPrivilegesOnDb = 'Добавить привилегии на следующую базу';
$strAddPrivilegesOnTbl = ' Добавить привилегии на следующую таблицу';
$strAddSearchConditions = 'Добавить условия поиска (тело для условия "WHERE"):';
$strAddToIndex = 'Добавить к индексу&nbsp;%s&nbsp;столбец(ы)';
$strAddUser = 'Добавить нового пользователя';
$strAddUserMessage = 'Был добавлен новый пользователь.';
$strAdministration = 'Администрирование';
$strAffectedRows = 'Затронуто строк:';
$strAfter = 'После %s';
$strAfterInsertBack = 'Вернуться на предыдущую страницу';
$strAfterInsertNewInsert = 'Добавить новую запись';
$strAfterInsertNext = 'Редактировать следующую строку';
$strAfterInsertSame = 'Вернуться к данной странице';
$strAll = 'Все';
$strAllowInterrupt = 'Разрешить скрипту разбивать процесс импорта при приближении временного лимита. Может быть использовано при импорте файлов большого размера.';
$strAllTableSameWidth = 'Показать все таблицы одинаковой ширины';
$strAlterOrderBy = 'Изменить сортировку таблицы';
$strAnalyzeTable = 'Анализ таблицы';
$strAnd = 'И';
$strAndThen = 'и затем';
$strAngularLinks = 'Угловые линии связей';
$strAnIndex = 'Был добавлен индекс для %s';
$strAny = 'Любой';
$strAnyHost = 'Любой хост';
$strAnyUser = 'Любой пользователь';
$strApproximateCount = 'Может быть приблизительно. См. FAQ 3.11';
$strAPrimaryKey = 'Был добавлен первичный ключ к %s';
$strArabic = 'Арабский';
$strArmenian = 'Армянский';
$strAscending = 'По возрастанию';
$strAtBeginningOfTable = 'В начало таблицы';
$strAtEndOfTable = 'В конец таблицы';
$strAttr = 'Атрибуты';
$strAutomaticLayout = 'Автоматическая раскладка';

$strBack = 'Назад';
$strBaltic = 'Балтийский';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Двоичный';
$strBinaryDoNotEdit = 'Двоичные данные - не редактируются';
$strBinaryLog = 'Бинарный журнал';
$strBinLogEventType = 'Тип события';
$strBinLogInfo = 'Информация';
$strBinLogName = 'Файл журнала';
$strBinLogOriginalPosition = 'Исходная позиция';
$strBinLogPosition = 'Позиция';
$strBinLogServerId = 'ID сервера';
$strBookmarkAllUsers = 'Доступна для всех пользователей';
$strBookmarkCreated = 'Закладка &quot;%s&quot; создана';
$strBookmarkDeleted = 'Закладка удалена.';
$strBookmarkLabel = 'Метка';
$strBookmarkQuery = 'Созданные закладки';
$strBookmarkReplace = 'Заменить существующую с таким же именем';
$strBookmarkThis = 'Создание закладки';
$strBookmarkView = 'Просмотр';
$strBrowse = 'Обзор';
$strBrowseDistinctValues = 'Обзор уникальных значений';
$strBrowseForeignValues = 'Обзор внешних значений';
$strBufferPoolActivity = 'Активность';
$strBufferPool = 'Буферный пул';
$strBufferPoolUsage = 'Использование';
$strBufferReadMissesInPercent = 'Пропуски при чтении, в %';
$strBufferReadMisses = 'Пропуски при чтении';
$strBufferWriteWaitsInPercent = 'Ожидание очистки, в %';
$strBufferWriteWaits = 'Ожидание очистки';
$strBulgarian = 'Болгарский';
$strBusyPages = 'Занятых страниц';
$strBzError = 'phpMyAdmin не может сжать дамп из-за проблем с раcширением Bz2 в текущей версии PHP. Строго рекомендуется установить переменной <code>$cfg[\'BZipDump\']</code> в вашем конфигурационном файле phpMyAdmin значение <code>FALSE</code>. Если вы хотите использовать сжатие Bz2, необходимо обновить PHP. Смотрите отчет об ошибках PHP %s для более подробной информации.';
$strBzip = 'bzip';

$strCalendar = 'Календарь';
$strCancel = 'Отмена';
$strCanNotLoadExportPlugins = 'Модули экспорта, отсутствуют! Проверьте содержимое каталога libraries/export установленной копии phpMyAdmin.';
$strCanNotLoadImportPlugins = 'Модули импорта - отсутствуют! Проверьте содержимое каталога libraries/import установленной копии phpMyAdmin.';
$strCannotLogin = 'Невозможно подключиться к серверу MySQL';
$strCantLoad = 'Невозможно загрузить расширение [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a]! Проверьте настройки PHP.';
$strCantLoadRecodeIconv = 'Не подключены расширения iconv или recode, необходимые для конвертации кодировок. Необходимо настроить PHP, включив данные расширения, или отключить возможность конвертации кодировок в настройках phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Невозможно переименовать индекс в PRIMARY!';
$strCantUseRecodeIconv = 'Несмотря на то что необходимые расширения загружены, использование функций iconv, libiconv или recode_string - невозможно. Проверьте настройки PHP.';
$strCardinality = 'Уникальных элементов';
$strCaseInsensitive = 'регистронезависимый';
$strCaseSensitive = 'регистрозависымый';
$strCentralEuropean = 'Центрально-Европейский';
$strChange = 'Изменить';
$strChangeCopyMode = 'Создать нового пользователя с такими же привилегиями...';
$strChangeCopyModeCopy = 'и сохранить старого.';
$strChangeCopyModeDeleteAndReload = ', удалить старого из таблиц пользователей и перезагрузить привилегии.';
$strChangeCopyModeJustDelete = 'и удалить старого из таблиц пользователей.';
$strChangeCopyModeRevoke = ', отменить все активные привилегии старого и затем удалить его.';
$strChangeCopyUser = 'Изменить/Копировать учетную запись';
$strChangeDisplay = 'Выбор отображаемого столбца';
$strChangePassword = 'Изменить пароль';
$strCharset = 'Кодировка';
$strCharsetOfFile = 'Кодировка файла:';
$strCharsets = 'Кодировки';
$strCharsetsAndCollations = 'Кодировки и сравнения';
$strCheckAll = 'Отметить все';
$strCheckOverhead = 'Отметить требующие оптимизации';
$strCheckPrivs = 'Проверить привилегии';
$strCheckPrivsLong = 'Проверить привилегии для базы данных &quot;%s&quot;';
$strCheckTable = 'Проверить таблицу';
$strChoosePage = 'Выбор страницы для редактирования';
$strColComFeat = 'Отображать комментарии столбцов';
$strCollation = 'Сравнение';
$strColumnNames = 'Названия столбцов';
$strColumnPrivileges = 'Привилегии уровня столбца';
$strCommand = 'Команда';
$strComments = 'Комментарии';
$strCommentsForTable = 'Комментарии к таблице';
$strCompatibleHashing = 'MySQL&nbsp;4.0 совместимо';
$strCompleteInserts = 'Полная вставка';
$strCompression = 'Упаковать';
$strCompressionWillBeDetected = 'Автоматическое определение типа сжатия, варианты: %s';
$strConfigDefaultFileError = 'Невозможно загрузить изначальную конфигурацию из: &quot;%1$s&quot;';
$strConfigFileError = 'phpMyAdmin не смог прочесть конфигурационный файл!<br />Это может случиться если PHP нашел в нем ошибку, или файл не найден.<br />Вызовите конфигурационный файл напрямую, используя ссылку данную ниже, и просмотрите сообщения об ошибках выдаваемые PHP. В большинстве случаев, возможна синтаксическая ошибка, например, где-то пропущена кавычка или точка с запятой.<br />Если отобразится пустая страница - все в порядке.';
$strConfigureTableCoord = 'Измените координаты таблицы %s';
$strConnectionError = 'Соединение невозможно! Неверные настройки.';
$strConnections = 'Соединения';
$strConstraintsForDumped = 'Ограничения внешнего ключа сохраненных таблиц';
$strConstraintsForTable = 'Ограничения внешнего ключа таблицы';
$strControluserFailed = 'Не удалось установить подключение для пользователя указанного в директиве controluser, с помощью параметров определенных в конфигурационном файле config.inc.php.';
$strCookiesRequired = 'Для полноценной работы необходима поддержка cookies браузером.';
$strCopy = 'Использовать';
$strCopyDatabaseOK = 'База данных %s была скопирована в %s';
$strCopyTable = 'Скопировать таблицу в (база данных<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s была скопирована в %s.';
$strCopyTableSameNames = 'Невозможно скопировать таблицу саму в себя!';
$strCouldNotKill = 'phpMyAdmin не смог завершить работу потока с ID %s. Вероятно, он уже был закрыт.';
$strCreate = 'Создать';
$strCreateDatabaseBeforeCopying = 'Перед копированием создать базу данных (CREATE DATABASE)';
$strCreateIndex = 'Создать индекс для &nbsp;%s&nbsp; столбца/ов';
$strCreateIndexTopic = 'Создать новый индекс';
$strCreateNewDatabase = 'Новая база данных';
$strCreateNewTable = 'Создать новую таблицу в базе данных %s';
$strCreatePage = 'Создать новую страницу';
$strCreatePdfFeat = 'Создание PDF-схемы';
$strCreateRelation = 'Создать связь';
$strCreateTable  = 'Создать таблицу';
$strCreateUserDatabase = 'База данных для пользователя';
$strCreateUserDatabaseName = 'Создать базу данных с именем пользователя в названии и предоставить на нее полные привилегии';
$strCreateUserDatabaseNone = 'Не создавать';
$strCreateUserDatabaseWildcard = 'Предоставить полные привилегии на базы данных подпадающие под шаблон (имя пользователя\_%)';
$strCreationDates = 'Даты создания, обновления и проверки';
$strCriteria = 'Критерий';
$strCroatian = 'Хорватский';
$strCSV = 'CSV';
$strCyrillic = 'Кириллический';
$strCzech = 'Чешский';
$strCzechSlovak = 'Чехословацкий';

$strDanish = 'Датский';
$strData = 'Данные';
$strDatabase = 'База данных';
$strDatabaseEmpty = 'Не указано имя базы данных!';
$strDatabaseExportOptions = 'Параметры экспорта базы данных';
$strDatabaseHasBeenDropped = 'База данных %s была удалена.';
$strDatabases = 'Базы данных';
$strDatabasesDropped = 'Удалено баз данных: %s';
$strDatabasesStats = 'Статистика баз данных';
$strDatabasesStatsDisable = 'Отключить статистику';
$strDatabasesStatsEnable = 'Включить статистику';
$strDatabasesStatsHeavyTraffic = 'Примечание: Включение статистики баз данных может спровоцировать большой трафик между веб-сервером и сервером MySQL.';
$strDataDict = 'Словарь данных';
$strDataOnly = 'Только данные';
$strDataPages = 'Страниц с данными';
$strDBComment = 'Комментарий к базе данных:';
$strDBCopy = 'Скопировать базу данных в';
$strDbIsEmpty = 'База данных - пуста!';
$strDbPrivileges = 'Привилегии уровня базы данных';
$strDBRename = 'Переименовать базу данных в';
$strDbSpecific = 'Уровень базы данных';
$strDefault = 'По умолчанию';
$strDefaultEngine = '%s - тип таблиц данного MySQL сервера устанавливаемый по умолчанию.';
$strDefaultValueHelp = 'Для значений поля "По умолчанию" не используйте символы экранирования и кавычек.';
$strDefragment = 'Дефрагментировать таблицу';
$strDelayedInserts = 'Использовать отложенные вставки (DELAYED)';
$strDelete = 'Удалить';
$strDeleteAndFlush = 'Удалить всех пользователей и перезагрузить привилегии.';
$strDeleteAndFlushDescr = 'Это лучший способ, хотя перезагрузка привилегий может занять какое-то время.';
$strDeleted = 'Запись была удалена';
$strDeletedRows = 'Удалено строк:';
$strDeleteNoUsersSelected = 'Не выбраны пользователи подлежащие удалению!';
$strDeleteRelation = 'Удалить связь';
$strDeleting = 'Удаление %s';
$strDelimiter = 'Разделитель';
$strDelOld = 'На текущей странице присутствуют ссылки на таблицы, которые больше не существуют. Удалить эти ссылки?';
$strDescending = 'По убыванию';
$strDescription = 'Описание';
$strDesigner = 'Дизайнер';
$strDesignerHelpDisplayField = 'Для того чтобы сделать столбец отображаемым, нажмите кнопку "Выбор отображаемого столбца" и выберите необходимый столбец. Отображаемые столбцы подсвечиваются розовым цветом.';
$strDictionary = 'словарь';
$strDirectLinks = 'Прямые линии связей';
$strDirtyPages = 'Грязных страниц';
$strDisabled = 'Недоступно';
$strDisableForeignChecks = 'Отключить проверку внешних ключей';
$strDisplayFeat = 'Показать возможности';
$strDisplayOrder = 'Сортировка:';
$strDisplayPDF = 'Показать PDF-схему';
$strDoAQuery = 'Выполнить "запрос по образцу" (групповой символ: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Документация';
$strDoYouReally = 'Вы действительно хотите выполнить запрос';
$strDrop = 'Удалить';
$strDropDatabaseStrongWarning = 'База данных будет полностью удалена!';
$strDropUsersDb = 'Удалить базы данных, имена которых совпадают с именами пользователей.';
$strDumpingData = 'Дамп данных таблицы';
$strDumpSaved = 'Дамп был сохранен в файл %s.';
$strDumpXRows = 'Дамп из %s строк, начиная с записи # %s.';
$strDynamic = 'динамический';

$strEdit = 'Изменить';
$strEditPDFPages = 'Редактирование PDF-страниц';
$strEditPrivileges = 'Редактирование привилегий';
$strEffective = 'Эффективность';
$strEmpty = 'Очистить';
$strEmptyResultSet = 'MySQL вернула пустой результат (т.е. ноль строк).';
$strEnabled = 'Доступно';
$strEncloseInTransaction = 'Заключить экспорт в транзакцию';
$strEnd = 'Конец';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEngineAvailable = 'Данный MySQL-сервер поддерживает таблицы типа %s.';
$strEngineDisabled = 'Тип таблиц %s был отключен на данном MySQL сервере.';
$strEngines = 'Типы таблиц';
$strEngineUnsupported = 'Данный сервер MySQL не поддерживает тип таблиц %s.';
$strEnglish = 'Английский';
$strEnglishPrivileges = 'Примечание: типы привилегий MySQL отображаются по-английски.';
$strError = 'Ошибка';
$strErrorInZipFile = 'Ошибка в ZIP-архиве:';
$strErrorRelationAdded = 'Ошибка: Связь не добавлена.';
$strErrorRelationExists = 'Ошибка: Связь уже существует.';
$strErrorRenamingTable = 'Ошибка при переименовании таблицы %1$s в %2$s';
$strErrorSaveTable = 'Ошибка сохранения координат.';
$strEscapeWildcards = 'При использовании в имени базы данных символов нижнего подчеркивания (_) и процента (%), необходимо экранировать их символом обратной косой черты (\), в противном случае они будут интерпретированы как групповые символы';
$strEsperanto = 'Эсперанто';
$strEstonian = 'Эстонский';
$strEvent = 'Событие';
$strExcelEdition = 'Excel-версия';
$strExecuteBookmarked = 'Выполнить отмеченный запрос';
$strExplain = 'Анализ запроса';
$strExport = 'Экспорт';
$strExportImportToScale = 'Масштаб';
$strExportMustBeFile = 'Выбранный тип экспорта возможен только в файл!';
$strExtendedInserts = 'Расширенные вставки';
$strExtra = 'Дополнительно';

$strFailedAttempts = 'Неудачных попыток';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле &quot;%s&quot; было удалено';
$strFields = 'Поля';
$strFieldInsertFromFileTempDirNotExists = 'Ошибка при перемещении загруженного файла, см. FAQ 1.11';
$strFieldsEnclosedBy = 'Значения полей обрамлены';
$strFieldsEscapedBy = 'Символ экранирования';
$strFieldsTerminatedBy = 'Разделитель полей';
$strFileAlreadyExists = 'Файл %s уже существует на сервере, измените имя или включите параметр перезаписи.';
$strFileCouldNotBeRead = 'Ошибка при чтении файла';
$strFileNameTemplate = 'Шаблон имени файла';
$strFileNameTemplateDescriptionDatabase = 'имя базы данных';
$strFileNameTemplateDescriptionServer = 'имя сервера';
$strFileNameTemplateDescriptionTable = 'имя таблицы';
$strFileNameTemplateDescription = 'Значение обрабатывается функцией %1$sstrftime%2$s, благодаря чему возможна вставка текущей даты и времени. Дополнительно могут быть использованы следующие подстановки: %3$s. Остальной текст останется без изменений.';
$strFileNameTemplateRemember = 'запомнить шаблон';
$strFiles = 'Файлов';
$strFileToImport = 'Импортируемый файл';
$strFixed = 'фиксированный';
$strFlushPrivilegesNote = 'Примечание: phpMyAdmin получает информацию о пользовательских привилегиях непосредственно из таблиц привилегий MySQL. Содержимое этих таблиц может отличаться от привилегий, используемых сервером, если они были изменены вручную. В таком случае необходимо %sперезагрузить привилегии%s.';
$strFlushQueryCache = 'Дефрагментировать кеш запросов';
$strFlushTable = 'Обновить кеш таблицы (&quot;FLUSH&quot;)';
$strFlushTables = 'Закрыть все таблицы';
$strFontSize = 'Размер шрифта';
$strForeignKeyError = 'Ошибка при создании внешнего ключа (проверьте типы данных)';
$strFormat = 'Формат';
$strFormEmpty = 'Не заполнены необходимые поля формы!';
$strFreePages = 'Чистых страниц';
$strFullText = 'Развернутое отображение данных';
$strFunction = 'Функция';
$strFunctions = 'Функции';

$strGenBy = 'Создан';
$strGeneralRelationFeat = 'Основные возможности связей';
$strGenerate = 'Генерировать';
$strGeneratePassword = 'Создать пароль';
$strGenTime = 'Время создания';
$strGeorgian = 'Грузинский';
$strGerman = 'Немецкий';
$strGlobal = 'Глобальный уровень';
$strGlobalPrivileges = 'Глобальные привилегии';
$strGlobalValue = 'Глобальное значение';
$strGo = 'OK';
$strGrantOption = 'GRANT';
$strGreek = 'Греческий';
$strGzip = 'gzip';

$strHandler = 'Обработчик';
$strHasBeenAltered = 'была изменена.';
$strHasBeenCreated = 'была создана.';
$strHaveToShow = 'Для выполнения запроса, должен быть выбран отображаемый столбец/столбцы.';
$strHebrew = 'Иврит';
$strHelp = 'Помощь';
$strHexForBLOB = 'Использовать шестнадцатеричное отображение для полей типа BLOB';
$strHide = 'Скрыть';
$strHideShowAll = 'Скрыть/отобразить все таблицы';
$strHideShowNoRelation = 'Скрыть/отобразить таблицы не имеющие связей';
$strHome = 'К началу';
$strHomepageOfficial = 'Официальная страница phpMyAdmin';
$strHost = 'Хост';
$strHostEmpty = 'Пустое имя хоста!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Венгерский';

$strIcelandic = 'Исландский';
$strId = 'ID';
$strIdxFulltext = 'Полнотекстовый';
$strIEUnsupported = 'Internet Explorer не поддерживает данную функцию.';
$strIgnore = 'Игнорировать';
$strIgnoreDuplicates = 'Игнорировать повторяющиеся строки';
$strIgnoreInserts = 'Использовать игнорирующие вставки (IGNORE)';
$strImport = 'Импорт';
$strImportExportCoords = 'Импорт/экспорт координат таблиц в/из PDF-схемы';
$strImportFiles = 'Импорт файлов';
$strImportFormat = 'Формат импортируемого файла';
$strImportSuccessfullyFinished = 'Импорт успешно завершен, запросов выполнено: %d.';
$strIndex = 'Индекс';
$strIndexes = 'Индексы';
$strIndexesSeemEqual = 'Следующие индексы определены как идентичные, и один из них должен быть удален:';
$strIndexHasBeenDropped = 'Индекс %s был удален';
$strIndexName = 'Имя индекса&nbsp;:';
$strIndexType = 'Тип индекса&nbsp;:';
$strIndexWarningTable = 'Проблемы с индексами таблицы `%s`';
$strInnoDBAutoextendIncrement = 'Автоматическое увеличение';
$strInnoDBAutoextendIncrementDesc = 'Размер (в мегабайтах) автоматического увеличения файла данных при переполнении табличной области';
$strInnoDBBufferPoolSize = 'Размер буферного пула';
$strInnoDBBufferPoolSizeDesc = 'Размер буфера памяти, который InnoDB использует для кеширования данных и индексов своих таблиц';
$strInnoDBDataFilePath = 'Файлы данных';
$strInnoDBDataHomeDir = 'Домашний каталог для данных';
$strInnoDBDataHomeDirDesc = 'Общая часть пути к каталогу для всех файлов данных InnoDB';
$strInnoDBPages = 'страниц';
$strInnoDBRelationAdded = 'Создана связь таблиц типа InnoDB';
$strInnodbStat = 'Состояние InnoDB';
$strInsecureMySQL = 'Конфигурационный файл phpMyAdmin содержит настройки MySQL по-умолчанию, согласно которым для привилегированного пользователя &quot;root&quot; не задан пароль. Такие настройки делают MySQL-сервер уязвимым  для несанкционированного доступа, поэтому настоятельно рекомендуется установить пароль для пользователя &quot;root&quot;.';
$strInsert = 'Вставить';
$strInsertAsNewRow = 'Вставить запись';
$strInsertedRowId = 'Идентификатор вставляемой строки:';
$strInsertedRows = 'Добавлены строки:';
$strInternalNotNecessary = '* При наличии внутренней связи в таблице типа InnoDB, ее установка не обязательна.';
$strInternalRelationAdded = 'Добавлена внутренняя связь';
$strInternalRelations = 'Внутренние связи';
$strInUse = 'используется';
$strInvalidAuthMethod = 'В конфигурационном файле phpMyAdmin установлен неверный метод аутентификации:';
$strInvalidColumn = 'Выбран неверный столбец (%s)!';
$strInvalidColumnCount = 'Количество столбцов должно быть больше нуля.';
$strInvalidCSVFieldCount = 'Неправильное количество полей во входных CSV-данных в строке %d.';
$strInvalidCSVFormat = 'Неправильный формат входных CSV-данных в строке %d.';
$strInvalidCSVParameter = 'Неправильный параметр импорта CSV: %s';
$strInvalidDatabase = 'Некорректная база данных'; 
$strInvalidFieldAddCount = 'Необходимо добавить хотя бы одно поле.';
$strInvalidFieldCount = 'У таблицы должно быть, как минимум, одно поле.';
$strInvalidLDIImport = 'Этот модуль не поддерживает импорт сжатых данных!';
$strInvalidRowNumber = 'Число %d не является правильным номером строки.';
$strInvalidServerHostname = 'Для сервера %1$s указано неверное имя хоста. Исправьте настройки заданные в конфигурационном файле phpMyAdmin.';
$strInvalidServerIndex = 'Неправильный номер сервера: &quot;%s&quot;';
$strInvalidTableName = 'Неправильное имя таблицы';

$strJapanese = 'Японский';
$strJoins = 'Объединения';
$strJumpToDB = 'Перейти к базе данных &quot;%s&quot;';
$strJustDelete = 'Просто удалить пользователей из таблиц привилегий.';
$strJustDeleteDescr = '&quot;Удаленные&quot; пользователи будут иметь доступ к серверу, пока таблицы привилегий не будут перезагружены.';

$strKeepPass = 'Не менять пароль';
$strKeyCache = 'Кеш индекса';
$strKeyname = 'Имя индекса';
$strKill = 'Завершить';
$strKnownExternalBug = 'Работа параметра &quot;%s&quot; подвержена ошибке, описание смотрите на %s';
$strKorean = 'Корейский';

$strLandscape = 'Альбомная';
$strLanguage = 'Язык';
$strLanguageUnknown = 'Неизвестный язык: %1$s.';
$strLatchedPages = 'Блокированных страниц';
$strLaTeX = 'LaTeX';
$strLatexCaption = 'Заголовок таблицы';
$strLatexContent = 'Содержимое таблицы __TABLE__';
$strLatexContinued = '(продолжение)';
$strLatexContinuedCaption = 'Заголовок таблицы (продолжение)';
$strLatexIncludeCaption = 'Добавить заголовок таблицы';
$strLatexLabel = 'Идентификатор метки';
$strLatexStructure = 'Структура таблицы __TABLE__';
$strLatvian = 'Латвийский';
$strLDI = 'CSV, используя LOAD DATA';
$strLDILocal = 'Использовать ключевое слово LOCAL';
$strLengthSet = 'Длина/значения';
$strLimitNumRows = 'Количество строк на странице';
$strLinesTerminatedBy = 'Разделитель строк';
$strLinkNotFound = 'Связь не найдена';
$strLinksTo = 'Связи';
$strLithuanian = 'Литовский';
$strLocalhost = 'Локальный';
$strLocationTextfile = 'Выбор файла';
$strLogin = 'Авторизация';
$strLoginInformation = 'Информация учетной записи';
$strLogout = 'Выход';
$strLogPassword = 'Пароль:';
$strLogServer = 'Сервер';
$strLogUsername = 'Пользователь:';
$strLongOperation = 'Выполнение данной операции может занять длительное время. Продолжить?';

$strMaxConnects = 'Максимально одновременных';
$strMaximalQueryLength = 'Максимальная длина создаваемого запроса';
$strMaximumSize = 'Максимальный размер: %s%s';
$strMbExtensionMissing = 'При работе с многобайтными кодировками без установленного расширения PHP &quot;mbstring&quot;, phpMyAdmin не в состоянии производить корректное разбиение строк, что может привести к непредсказуемым результатам. Установите расширение PHP &quot;mbstring&quot;.';
$strMbOverloadWarning = 'В конфигурации PHP включен, несовместимый с phpMyAdmin, параметр mbstring.func_overload. Для предотвращения возможной потери данных, данный параметр должен быть выключен!';
$strMIME_available_mime = 'Доступные MIME-типы';
$strMIME_available_transform = 'Доступные преобразования';
$strMIME_description = 'Описание';
$strMIME_MIMEtype = 'MIME-тип';
$strMIME_nodescription = 'На данный момент описание отсутствует.<br />Работа  используемой функции отображения преобразования %s, будет в скором времени описана.';
$strMIME_transformation = 'Преобразование';
$strMIME_transformation_note = 'Для просмотра доступных MIME-типов и параметров преобразований воспользуйтесь данной ссылкой - %sописание преобразований%s';
$strMIME_transformation_options = 'Параметры преобразований';
$strMIME_transformation_options_note = 'Значения параметров преобразований должны иметь формат: \'a\', 100, \'b\', \'c\'...<br />Символы обратной косой черты (\\) и одинарной кавычки (\') необходимо экранировать (предварять) символом обратной косой черты, например: \'\\\\xyz\' или \'a\\\'b\'.';
$strMIME_without = 'MIME-типы, выделенные курсивом, не имеют отдельной функции трансформации';
$strMIMETypesForTable = 'MIME-ТИПЫ ТАБЛИЦЫ';
$strModifications = 'Изменения сохранены';
$strModify = 'Изменить';
$strModifyIndexTopic = 'Изменить индекс';
$strMoveMenu = 'Переместить меню';
$strMoveTable = 'Переместить таблицы в (база данных<b>.</b>таблица):';
$strMoveTableOK = 'Таблица %s была перемещена в %s.';
$strMoveTableSameNames = 'Не возможно переместить таблицу саму в себя!';
$strMultilingual = 'многоязычный';
$strMyISAMDataPointerSize = 'Размер указателя в файле данных';
$strMyISAMDataPointerSizeDesc = 'Изначальный размер указателя в файле данных, при создании таблиц (CREATE TABLE) типа MyISAM, с неустановленным параметром максимального числа строк (MAX_ROWS).';
$strMyISAMMaxExtraSortFileSize = 'Максимальный размер временного файла при создании индекса';
$strMyISAMMaxExtraSortFileSizeDesc = 'Если размер временного файла, используемого для быстрого создания индексов таблиц типа MyISAM, превышает на указанный здесь объем используемый кеш индекса, то предпочтение отдается менее быстрому, но более надежному методу кеширования индекса.';
$strMyISAMMaxSortFileSize = 'Максимальный размер временных индексных файлов';
$strMyISAMMaxSortFileSizeDesc = 'Максимальный размер временного файла, который MySQL может использовать для восстановления индекса (при выполнении команд REPAIR TABLE, ALTER TABLE, или LOAD DATA INFILE). Для файлов, размер которых превышает указанное значение, индекс будет создаваться при помощи кеша индексов (такой алгоритм работает несколько медленнее, но более надежно).';
$strMyISAMRecoverOptions = 'Режим автоматического восстановления';
$strMyISAMRecoverOptionsDesc = 'Режим автоматического восстановления таблиц после сбоя. Устанавливается параметром --myisam-recover, при запуске сервера.';
$strMyISAMRepairThreads = 'Потоков восстановления';
$strMyISAMRepairThreadsDesc = 'Если значение больше единицы, индексы таблиц типа MyISAM созданы параллельно (каждый индекс в своем потоке) во время процесса восстановления с помощью сортировки (Repair by sorting).';
$strMyISAMSortBufferSize = 'Размер буфера сортировки';
$strMyISAMSortBufferSizeDesc = 'Буфер, который выделяется для сортировки индексов при выполнении команды REPAIR TABLE или для создания индексов при помощи команд CREATE INDEX или ALTER TABLE.';
$strMySQLCharset = 'MySQL-кодировка';
$strMysqlClientVersion = 'Версия MySQL-клиента';
$strMySQLConnectionCollation = 'Сопоставление соединения с MySQL';
$strMysqlLibDiffersServerVersion = 'Версия клиентской библиотеки MySQL (%s) отличается от версии установленного MySQL-сервера (%s). Это может привести к некорректной работе.';
$strMySQLSaid = 'Ответ MySQL: ';
$strMySQLShowProcess = 'Список процессов';
$strMySQLShowStatus = 'Текущее состояние MySQL';
$strMySQLShowVars = 'Системные переменные MySQL';

$strName = 'Имя';
$strNext = 'Следующий';
$strNo = 'Нет';
$strNoActivity = 'Отсутствие активности более %s секунд, пожалуйста, авторизуйтесь заново';
$strNoDatabases = 'Базы данных отсутствуют';
$strNoDatabasesSelected = 'Ни одна база данных не выбрана.';
$strNoDataReceived = 'Операция импорта невозможна. Причины: не выбран импортируемый файл; размер импортируемого файла превышает максимально допустимый, заданный в настройках PHP. См. FAQ 1.16';
$strNoDescription = 'нет описания';
$strNoDetailsForEngine = 'Дополнительная информация о состоянии данного типа таблиц - отсутствует.';
$strNoDropDatabases = 'Команда "DROP DATABASE" (удалить базу данных) - отключена.';
$strNoExplain = 'Убрать анализ';
$strNoFilesFoundInZip = 'Файлов внутри ZIP-архива не найдено!';
$strNoFrames = 'Для работы phpMyAdmin нужен браузер с поддержкой <b>фреймов</b>.';
$strNoIndex = 'Индекс не определен!';
$strNoIndexPartsDefined = 'Части индекса не определены!';
$strNoModification = 'Нет изменений';
$strNone = 'Нет';
$strNoOptions = 'Для этого формата нет настраиваемых параметров';
$strNoPassword = 'Без пароля';
$strNoPermission = 'Не достаточно прав для сохранения файла %s на веб-сервере.';
$strNoPhp = 'Убрать PHP-код';
$strNoPrivileges = 'Нет привилегий';
$strNoRights = 'Для доступа к данной странице у вас недостаточно прав!';
$strNoRowsSelected = 'Для совершения действия необходимо выбрать одну или несколько строк';
$strNoSpace = 'Для сохранения файла %s недостаточно дискового пространства.';
$strNoTablesFound = 'Таблиц в базе данных не обнаружено.';
$strNoThemeSupport = 'Поддержка тем не работает, проверьте конфигурацию и наличие тем в каталоге %s.';
$strNotNumber = 'Введите число!';
$strNotOK = 'Не готово';
$strNotSet = 'Таблица <b>%s</b> не найдена или не установлена в %s';
$strNoUsersFound = 'Пользователей не найдено.';
$strNoValidateSQL = 'Убрать проверку синтаксиса SQL';
$strNull = 'Null';
$strNumberOfFields = 'Количество полей';
$strNumberOfTables = 'Количество таблиц';
$strNumSearchResultsInTable = '%s вхождения(ий) в таблице <i>%s</i>';
$strNumSearchResultsTotal = '<b>Итого:</b> <i>%s</i> вхождения(ий)';
$strNumTables = 'Таблицы';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'OpenDocument таблица';
$strOpenDocumentText = 'OpenDocument текст';
$strOpenNewWindow = 'Открыть phpMyAdmin в новом окне';
$strOperations = 'Операции';
$strOperator = 'Оператор';
$strOptimizeTable = 'Оптимизировать таблицу';
$strOptions = 'Параметры';
$strOr = 'Или';
$strOverhead = 'Фрагментировано';
$strOverwriteExisting = 'Перезаписать существующий(е) файл(ы)';

$strPageNumber = 'Номер страницы:';
$strPagesToBeFlushed = 'Страниц к очистке';
$strPaperSize = 'Размер бумаги';
$strPartialImport = 'Частичный импорт';
$strPartialText = 'Сокращенное отображение данных';
$strPassword = 'Пароль';
$strPasswordChanged = 'Пароль для %s был успешно изменен.';
$strPasswordEmpty = 'Пароль не задан!';
$strPasswordHashing = 'Хеширование пароля';
$strPasswordNotSame = 'Некорректное подтверждение пароля!';
$strPDF = 'PDF';
$strPdfDbSchema = 'Структура базы данных "%s" - Страница %s';
$strPdfInvalidTblName = 'Таблица "%s" не существует!';
$strPdfNoTables = 'Нет таблиц';
$strPDFReportExplanation = '(Создание отчета содержащего данные одной таблицы)';
$strPDFReportTitle = 'Заголовок отчета';
$strPerHour = 'в час';
$strPerMinute = 'в минуту';
$strPerSecond = 'в секунду';
$strPersian = 'Персидский';
$strPhoneBook = 'телефонная книга';
$strPhp = 'PHP-код';
$strPHP40203 = 'Используемая версия PHP 4.2.3, содержит серьезные ошибки при работе с многобайтными кодировками (mbstring). Смотрите детальный отчет об ошибке: PHP bug report 19404. Данная версия PHP не рекомендуется для использования с phpMyAdmin.';
$strPHPVersion = 'Версия PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Выберите поле являющееся первичным (PRIMARY), или уникальным (UNIQUE) индексом!';
$strPmaDocumentation = 'Документация phpMyAdmin';
$strPmaUriError = 'Директива <tt>$cfg[\'PmaAbsoluteUri\']</tt> ДОЛЖНА быть установлена в конфигурационном файле!';
$strPmaWiki = 'phpMyAdmin вики';
$strPolish = 'Польский';
$strPortrait = 'Книжная';
$strPos1 = 'Начало';
$strPrevious = 'Назад';
$strPrimary = 'Первичный';
$strPrimaryKeyHasBeenDropped = 'Первичный ключ был удален';
$strPrimaryKeyName = 'Имя первичного индекса должно быть PRIMARY!';
$strPrimaryKeyWarning = '(Имя &quot;PRIMARY&quot; должен иметь <b>только</b> первичный индекс!)';
$strPrint = 'Печать';
$strPrintView = 'Версия для печати';
$strPrintViewFull = 'Версия для печати (полностью)';
$strPrivDescAllPrivileges = 'Содержит все привилегии, за исключением GRANT';
$strPrivDescAlter = 'Разрешает изменение структуры существующих таблиц';
$strPrivDescAlterRoutine = 'Разрешает изменение и удаление хранимых процедур';
$strPrivDescCreateDb = 'Разрешает создание новых баз данных и таблиц';
$strPrivDescCreateRoutine = 'Разрешает создание хранимых процедур';
$strPrivDescCreateTbl = 'Разрешает создание новых таблиц';
$strPrivDescCreateTmpTable = 'Разрешает создание временных таблиц';
$strPrivDescCreateUser = 'Разрешает создание, удаление и переименование учетных записей пользователей';
$strPrivDescCreateView = 'Разрешает создание новых представлений (CREATE VIEW)';
$strPrivDescDelete = 'Разрешает удаление данных';
$strPrivDescDropDb = 'Разрешает удаление баз данных и таблиц';
$strPrivDescDropTbl = 'Разрешает удаление таблиц';
$strPrivDescExecute = 'Разрешает выполнение хранимых процедур (не поддерживается данной версией MySQL)';
$strPrivDescExecute5 = 'Разрешает выполнение хранимых процедур';
$strPrivDescFile = 'Разрешает импорт и экспорт данных в файлы';
$strPrivDescGrant = 'Разрешает добавление пользователей и привилегий без перезагрузки таблиц привилегий';
$strPrivDescIndex = 'Разрешает создание и удаление индексов';
$strPrivDescInsert = 'Разрешает вставку и замену данных';
$strPrivDescLockTables = 'Разрешает блокировку таблиц для текущего потока';
$strPrivDescMaxConnections = 'Максимальное количество новых подключений, которые пользователь может установить в течение часа';
$strPrivDescMaxQuestions = 'Максимальное количество запросов, которые пользователь может отправить в течение часа';
$strPrivDescMaxUpdates = 'Максимальное количество команд изменяющих какую-либо таблицу или базу данных, которые пользователь может выполнить в течение часа';
$strPrivDescMaxUserConnections = 'Максимальное количество одновременных подключений одного пользователя';
$strPrivDescProcess3 = 'Разрешает завершение процессов других пользователей';
$strPrivDescProcess4 = 'Разрешает просмотр полных запросов в списке процессов';
$strPrivDescReferences = 'Не доступно в данной версии MySQL!';
$strPrivDescReload = 'Разрешает перезагрузку настроек сервера и очистку его кешей';
$strPrivDescReplClient = 'Разрешает запрашивать местонахождение головного и подчиненных серверов';
$strPrivDescReplSlave = 'Необходимо для подчиненных серверов при репликации';
$strPrivDescSelect = 'Разрешает выборку данных';
$strPrivDescShowDb = 'Разрешает доступ к полному списку баз данных';
$strPrivDescShowView = 'Разрешает вывод запроса создающего представление (SHOW CREATE VIEW)';
$strPrivDescShutdown = 'Разрешает остановку сервера';
$strPrivDescSuper = 'Разрешает установку соединения, даже при достижении максимального количества соединений. (Требуется для большинства административных задач, таких как установка глобальных переменных или завершение процессов других пользователей)';
$strPrivDescUpdate = 'Разрешает изменение данных';
$strPrivDescUsage = 'Нет привилегий';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегии были успешно перезагружены.';
$strProcedures = 'Процедуры';
$strProcesses = 'Процессы';
$strProcesslist = 'Список процессов';
$strProfiling = 'Профилирование';
$strProtocolVersion = 'Версия протокола';
$strPutColNames = 'Поместить названия полей в первой строке';

$strQBE = 'Запрос&nbsp;по&nbsp;шаблону';
$strQBEDel = 'Удалить';
$strQBEIns = 'Вставить';
$strQueryCache = 'Кеш запросов';
$strQueryFrame = 'Окно запроса';
$strQueryOnDb = 'SQL-запрос к базе данных <b>%s</b>:';
$strQueryResultsOperations = 'Использование результатов запроса';
$strQuerySQLHistory = 'История SQL-запросов';
$strQueryStatistics = 'Статистика запросов: со времени запуска, на сервер было отослано запросов - %s.';
$strQueryTime = 'запрос занял %01.4f сек.';
$strQueryType = 'Тип запроса';
$strQueryWindowLock = 'Заблокировать содержимое окна запросов';

$strReadRequests = 'Запросы на чтение';
$strReceived = 'Принято';
$strRecommended = 'рекомендуемый';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверить целостность данных:';
$strRefresh = 'Обновить';
$strRelationalSchema = 'Cхема связей';
$strRelationDeleted = 'Связь удалена';
$strRelationNotWorking = 'Дополнительные возможности для работы со связанными таблицами недоступны. Для определения причины нажмите %sздесь%s.';
$strRelations = 'Связи';
$strRelationsForTable = 'Связи таблицы';
$strRelationView = 'Связи';
$strReloadingThePrivileges = 'Перезагрузка привилегий';
$strReloadPrivileges = 'Перезагрузить привилегии';
$strReload = 'Обновить';
$strRemoveSelectedUsers = 'Удалить выделенных пользователей';
$strRenameDatabaseOK = 'База данных `%s` переименована в `%s`.';
$strRenameTable = 'Переименовать таблицу в';
$strRenameTableOK = 'Таблица `%s` была переименована в `%s`.';
$strRepairTable = 'Восстановить таблицу';
$strReplaceNULLBy = 'Заменить NULL на';
$strReplaceTable = 'Заместить данные таблицы данными из файла';
$strReplication = 'Репликация';
$strReset = 'Сбросить';
$strResourceLimits = 'Ограничение на использование ресурсов';
$strRestartInsertion = 'Количество вставляемых строк: %s';
$strReType = 'Подтверждение';
$strRevoke = 'Отменить';
$strRevokeAndDelete = 'Отменить все активные привилегии пользователей и затем удалить их.';
$strRevokeAndDeleteDescr = 'Вплоть до перезагрузки привилегий, пользователи все еще будут сохранять глобальные привилегии типа USAGE.';
$strRevokeMessage = 'Отменены привилегии для %s.';
$strRomanian = 'Румынский';
$strRoutineReturnType = 'Возвращаемый тип';
$strRoutines = 'Процедуры';
$strRowLength = 'Длина строки';
$strRows = 'Строки';
$strRowsFrom = 'строк начиная с';
$strRowSize = 'Размер строки';
$strRowsModeFlippedHorizontal = 'горизонтальном (повернутые заголовки)';
$strRowsModeHorizontal = 'горизонтальном';
$strRowsModeOptions = 'в %s режиме, заголовки после каждых %s ячеек';
$strRowsModeVertical = 'вертикальном';
$strRowsStatistic = 'Статистика строк';
$strRunning = 'на %s';
$strRunQuery = 'Выполнить запрос';
$strRunSQLQuery = 'Выполнить SQL-запрос(ы) к базе данных %s';
$strRunSQLQueryOnServer = 'Выполнить SQL-запрос(ы) на сервере %s';
$strRussian = 'Русский';

$strSave = 'Сохранить';
$strSaveOnServer = 'Сохранить на сервере в каталоге %s';
$strSavePosition = 'Сохранить расположение таблиц';
$strScaleFactorSmall = 'Схема не помещается на одной странице. Необходимо уменьшить масштаб.';
$strSearch = 'Поиск';
$strSearchFormTitle = 'Поиск в базе данных';
$strSearchInTables = 'В таблице/таблицах:';
$strSearchNeedle = 'Слово(а) или значение(я) для поиска (групповой символ: &quot;%&quot;):';
$strSearchOption1 = 'любое из слов';
$strSearchOption2 = 'все слова';
$strSearchOption3 = 'точное соответствие';
$strSearchOption4 = 'регулярное выражение';
$strSearchResultsFor = 'Результаты поиска по &quot;<i>%s</i>&quot; %s:';
$strSearchType = 'Искать:';
$strSecretRequired = 'При cookie-аутентификации, в конфигурационном файле необходимо задать парольную фразу установив значение директивы $cfg[\'blowfish_secret\'].';
$strSelectADb = 'Выберите базу данных';
$strSelectAll = 'Выделить все';
$strSelectBinaryLog = 'Выберите бинарный журнал для просмотра';
$strSelectFields = 'Выберите поля (не менее одного):';
$strSelectForeignKey = 'Выберите внешний ключ';
$strSelectNumRows = 'по запросу';
$strSelectReferencedKey = 'Выберите ссылочный ключ';
$strSelectTables = 'Выберите таблицы';
$strSend = 'Сохранить как файл';
$strSent = 'Отправлено';
$strServer = 'Сервер';
$strServerChoice = 'Выбор сервера';
$strServerNotResponding = 'Сервер не отвечает';
$strServers = 'Сервера';
$strServerStatus = 'Текущее состояние MySQL';
$strServerStatusDelayedInserts = 'Отложенные вставки';
$strServerStatusUptime = 'MySQL сервер работает %s. Время запуска: %s.';
$strServerTabVariables = 'Переменные';
$strServerTrafficNotes = 'Трафик: статистика по сетевому трафику MySQL-сервера со времени его запуска.';
$strServerVars = 'Серверные переменные и настройки';
$strServerVersion = 'Версия сервера';
$strSessionStartupErrorGeneral = 'Произошла ошибка в работе механизма сессии. Проверьте файлы журналов PHP и/или Веб-сервера на наличие ошибок, и произведите их корректное конфигурирование.';
$strSessionValue = 'Значение сессии';
$strSetEnumVal = 'При создании полей типа &quot;enum&quot; и &quot;set&quot;, данные значения должны иметь формат: \'a\',\'b\',\'c\'...<br />Символы обратной косой черты (\\) и одинарной кавычки (\') необходимо экранировать (предварять) символом обратной косой черты, например: \'\\\\xyz\' или \'a\\\'b\'.';
$strShow = 'Показать';
$strShowAll = 'Показать все';
$strShowColor = 'Отображать в цвете';
$strShowDatadictAs = 'Ориентация страниц словаря данных';
$strShowFullQueries = 'Развернутое отображение запросов';
$strShowGrid = 'Отображать сетку';
$strShowHideLeftMenu = 'Показать/скрыть левое меню';
$strShowingBookmark = 'Отображение закладки';
$strShowingPhp = 'Отображает как PHP-код';
$strShowingRecords = 'Отображает строки';
$strShowingSQL = 'Отображает SQL-запрос';
$strShowOpenTables = 'Список открытых таблиц';
$strShowPHPInfo = 'Показать информацию PHP';
$strShowSlaveHosts = 'Информация о подчиненных серверах';
$strShowSlaveStatus = 'Информация о состоянии сервера репликации';
$strShowStatusBinlog_cache_disk_useDescr = 'Количество транзакций, использовавших кеш бинарного журнала и превысивших значение binlog_cache_size, вследствие чего содержащиеся в них SQL-выражения были сохранены во временном файле.';
$strShowStatusBinlog_cache_useDescr = 'Количество транзакций, использовавших кеш бинарного журнала.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Количество временных таблиц, автоматически созданных сервером на диске, во время выполнения SQL-выражений. Если значение Created_tmp_disk_tables велико, следует увеличить значение переменной tmp_table_size, чтобы временные таблицы располагались в памяти, а не на жестком диске.';
$strShowStatusCreated_tmp_filesDescr = 'Количество временных файлов, созданных MySQL-сервером (mysqld).';
$strShowStatusCreated_tmp_tablesDescr = 'Количество временных таблиц в памяти, созданных сервером автоматически в процессе выполнения SQL-выражений.';
$strShowStatusDelayed_errorsDescr = 'Количество ошибок, возникших в процессе обработки запросов INSERT DELAYED, например, из-за дублирования ключей.';
$strShowStatusDelayed_insert_threadsDescr = 'Количество обрабатываемых запросов INSERT DELAYED.';
$strShowStatusDelayed_writesDescr = 'Количество строк записанных в режиме отложенной вставки данных (INSERT DELAYED).';
$strShowStatusFlush_commandsDescr  = 'Количество выполненных команд FLUSH.';
$strShowStatusHandler_commitDescr = 'Количество внутренних команд COMMIT.';
$strShowStatusHandler_deleteDescr = 'Количество запросов на удаление строк из таблицы.';
$strShowStatusHandler_discoverDescr = 'MySQL-сервер может запрашивать NDB Cluster о существовании таблиц с определенным именем. Этот процесс называется обнаружением. Handler_discover - число обнаружений таблиц.';
$strShowStatusHandler_read_firstDescr = 'Количество запросов на чтение первой записи из индекса. При большом значении переменной, скорее всего, сервер многократно выполняет полное сканирование индекса. Например, SELECT col1 FROM foo, при условии, что col1 проиндексирован.';
$strShowStatusHandler_read_keyDescr = 'Количество запросов на чтение строк, построенных на значении ключа. Большое значение переменной говорит о том, что запросы и таблицы проиндексированы надлежащим образом.';
$strShowStatusHandler_read_nextDescr = 'Количество запросов на чтение следующей строки в порядке расположения индексов. Значение увеличивается при запросе индексного столбца с ограничением по размеру или при сканировании индекса.';
$strShowStatusHandler_read_prevDescr = 'Количество запросов на чтение предыдущей строки при ниспадающей сортировке индекса. Обычно используется при оптимизации: ORDER BY ... DESC.';
$strShowStatusHandler_read_rnd_nextDescr = 'Количество запросов на чтение следующей строки из файла данных. Данное значение будет высоким, при частом сканировании таблиц. Обычно это означает, что таблицы не проиндексированы надлежащим образом или запросы не используют преимущества индексов.';
$strShowStatusHandler_read_rndDescr = 'Количество запросов, на чтение строки, основанных на ее позиции. Большое значение переменной может быть обусловлено частым выполнением запросов использующих сортировку результата, выполнением большого числа запросов требующих полного сканирования таблиц, наличием объединений не использующих индексы надлежащим образом.';
$strShowStatusHandler_rollbackDescr = 'Количество внутренних команд ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Количество запросов на обновление строк в таблице.';
$strShowStatusHandler_writeDescr = 'Количество запросов на вставку строк в таблицу.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Количество страниц содержащих данные (&quot;грязные&quot; или &quot;чистые&quot;).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Текущее количество &quot;грязных&quot; страниц.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Количество страниц буферного пула, над которыми был осуществлен процесс очистки (FLUSH).';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Количество свободных страниц.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Количество станиц заблокированных в буферном пуле InnoDB. Над этими страницами осуществляется процесс чтения или записи, либо они не могут быть очищены или удалены по какой-либо другой причине.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Количество страниц занятых вследствие выделения под административные процессы, такие как: блокировка строки или адаптивное хеширование индекса. Значение можно рассчитать по формуле: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Общий размер буферного пула (в страницах).';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Количество &quot;случайных&quot; опережающих чтений, инициированных InnoDB. Это происходит, когда запрос сканирует большую часть таблицы в случайном порядке.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Количество последовательных опережающих чтений, инициированных InnoDB. Это происходит, когда InnoDB выполняет полное последовательное сканирование таблицы.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Количество последовательных запросов на чтение, выполненных InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Количество последовательных запросов на чтение, которые InnoDB не смог выполнить из буферного пула и использовал постраничное чтение.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Обычно, записи в буферный пул InnoDB выполняются в фоновом режиме. Однако, если необходимо чтение или создание страницы при отсутствии чистых таковых, сперва требуется ожидание их очистки. Данный счетчик показывает число таких ожиданий. Если размер буферного пула был установлен должным образом, значение будет небольшим.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Количество записей, выполненных в буферный пул InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Количество операций fsync(), выполненных на данный момент.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Текущее количество незавершенных операций fsync().';
$strShowStatusInnodb_data_pending_readsDescr = 'Текущее количество незавершенных операций чтения.';
$strShowStatusInnodb_data_pending_writesDescr = 'Текущее количество незавершенных операций записи.';
$strShowStatusInnodb_data_readDescr = 'Сумма данных (в байтах), прочитанных на данный момент.';
$strShowStatusInnodb_data_readsDescr = 'Общее количество операций чтения данных.';
$strShowStatusInnodb_data_writesDescr = 'Общее количество операций записи данных.';
$strShowStatusInnodb_data_writtenDescr = 'Сумма данных (в байтах), записанных на данный момент.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Количество записей в буфер doublewrite, и количество созданных для этого страниц.';
$strShowStatusInnodb_dblwr_writesDescr = 'Количество записей в буфер doublewrite, и количество созданных для этого страниц.';
$strShowStatusInnodb_log_waitsDescr = 'Количество ожиданий очистки журнального буфера, вследствие малого его размера.';
$strShowStatusInnodb_log_write_requestsDescr = 'Количество запросов на запись в журнал.';
$strShowStatusInnodb_log_writesDescr = 'Количество физических записей в файл журнала.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Количество записей с помощью fsync(), сделанных в файл журнала.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Количество незавершенных попыток синхронизации с помощью операции fsync().';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Количество незавершенных запросов на запись в журнал.';
$strShowStatusInnodb_os_log_writtenDescr = 'Объем данных в байтах, записанных в файл журнала.';
$strShowStatusInnodb_page_sizeDescr = 'Размер страницы, компилируемой в InnoDB (по умолчанию 16Кб). Многие значения приводятся в страницах, но зная объем страницы, можно перевести эти значения в байты.';
$strShowStatusInnodb_pages_createdDescr = 'Количество созданных страниц.';
$strShowStatusInnodb_pages_readDescr = 'Количество прочитанных страниц.';
$strShowStatusInnodb_pages_writtenDescr = 'Количество записанных страниц.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Текущее количество ожиданий блокировок строк.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Среднее время ожидания блокировки строк (в миллисекундах).';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Максимальное время ожидания блокировки строк (в миллисекундах).';
$strShowStatusInnodb_row_lock_timeDescr = 'Общее время, ожидания блокировок строк (в миллисекундах).';
$strShowStatusInnodb_row_lock_waitsDescr = 'Общее количество ожиданий блокировки строк.';
$strShowStatusInnodb_rows_deletedDescr = 'Количество строк, удаленных из таблиц InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Количество строк, добавленных в таблицы InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Количество строк, прочитанных из таблиц InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Количество строк, обновленных в таблицах InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Количество блоков в кеше индекса, которые были изменены, но еще не записаны на диск. Данный параметр также известен как Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Количество неиспользуемых блоков в кеше индекса. Данный параметр позволяет определить как полно используется кеш индекса.';
$strShowStatusKey_blocks_usedDescr = 'Количество используемых блоков в кеше индекса. Данное значение - максимальное количество блоков, использованных одновременно.';
$strShowStatusKey_read_requestsDescr = 'Количество запросов на чтение блока из кеша индексов.';
$strShowStatusKey_readsDescr = 'Количество физических операций чтения блока индексов с диска. Если значение велико - скорее всего, задано слишком маленькое значение переменной key_buffer_size. Коэффициент неудачных обращений к кешу может быть рассчитан как: Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Количество запросов на запись блока в кеш индекса.';
$strShowStatusKey_writesDescr = 'Количество физических операций записи блока индексов на диск.';
$strShowStatusLast_query_costDescr = 'Общие затраты последнего компилированного запроса, рассчитанные оптимизатором запросов. Полезно при сравнении эффективности различных схем одного запроса. Изначальное нулевое значение, означает, что процесса компиляции запроса еще не было.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Количество строк, ожидающих вставки в запросах INSERT DELAYED.';
$strShowStatusOpen_filesDescr = 'Количество открытых файлов.';
$strShowStatusOpen_streamsDescr = 'Количество открытых потоков (применяется к файлам журналов). Потоком называется файл, открытый с помощью функции fopen().';
$strShowStatusOpen_tablesDescr = 'Количество открытых таблиц.';
$strShowStatusOpened_tablesDescr = 'Общее количество открывавшихся таблиц. При большом значении переменной рекомендуется увеличить размер кеша таблиц (table_cache).';
$strShowStatusQcache_free_blocksDescr = 'Количество свободных блоков памяти в кеше запросов.';
$strShowStatusQcache_free_memoryDescr = 'Объем свободной памяти для кеша запросов.';
$strShowStatusQcache_hitsDescr = 'Количество &quot;попаданий&quot; в кеш запросов, т.е. сколько запросов было удовлетворено запросами, находящимися в кеше.';
$strShowStatusQcache_insertsDescr = 'Количество запросов, добавленных в кеш запросов.';
$strShowStatusQcache_lowmem_prunesDescr = 'Количество запросов, удаленных из кеша для освобождения памяти под кеширование новых запросов. Эта информация может помочь при настройке размера кеша запросов. Кеш запросов использует стратегию LRU (дольше всего не использующиеся страницы заменяются новыми) при принятии решения об удаления запроса из кеша.';
$strShowStatusQcache_not_cachedDescr = 'Количество запросов, которые оказались некешируемыми или для которых кеширование было подавлено с помощью ключевого слова SQL_NO_CACHE.';
$strShowStatusQcache_queries_in_cacheDescr = 'Количество запросов, зарегистрированных в кеше.';
$strShowStatusQcache_total_blocksDescr = 'Суммарное количество блоков памяти, отведенных под кеш запросов.';
$strShowStatusReset = 'Сбросить';
$strShowStatusRpl_statusDescr = 'Состояние отказоустойчивой репликации (пока не реализовано).';
$strShowStatusSelect_full_joinDescr = 'Количество запросов-объединений, выполненных без использования индексов. Если значение переменной не равно 0, рекомендуется проверить индексы таблиц.';
$strShowStatusSelect_full_range_joinDescr = 'Количество запросов-объединений, выполненных с использованием поиска по диапазону в таблице, на которую делается ссылка.';
$strShowStatusSelect_range_checkDescr = 'Количество запросов-объединений, выполненных с использованием поиска по диапазону для выборки строк из вторичной таблицы. Если значение переменной не равно 0, рекомендуется проверить индексы таблиц.';
$strShowStatusSelect_rangeDescr = 'Количество запросов-объединений, выполненных с использованием поиска по диапазону в первой таблице. Обычно значение этой переменной не критично, даже если оно велико.';
$strShowStatusSelect_scanDescr = 'Количество запросов-объединений, выполненных с использованием полного поиска по первой таблице.';
$strShowStatusSlave_open_temp_tablesDescr = 'Количество временных таблиц, открытых в настоящий момент подчиненным потоком.';
$strShowStatusSlave_retried_transactionsDescr = 'Общее количество повторов транзакций подчиненным потоком репликации с момента запуска.';
$strShowStatusSlave_runningDescr = 'Присваивается значение ON, если данный сервер функционирует как подчиненный, подключенный к главному.';
$strShowStatusSlow_launch_threadsDescr = 'Количество потоков, на создание которых потребовалось более чем slow_launch_time секунд.';
$strShowStatusSlow_queriesDescr = 'Количество запросов, выполнявшихся более long_query_time секунд.';
$strShowStatusSort_merge_passesDescr = 'Количество проходов, сделанных алгоритмом сортировки. При большом значении следует увеличить значение переменной sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Количество операций сортировки, выполненных с использованием диапазона.';
$strShowStatusSort_rowsDescr = 'Количество отсортированных строк.';
$strShowStatusSort_scanDescr = 'Количество операций сортировки, выполненных с использованием полного сканирования таблицы.';
$strShowStatusTable_locks_immediateDescr = 'Количество запросов на блокировку таблицы, которые были удовлетворены немедленно.';
$strShowStatusTable_locks_waitedDescr = 'Количество запросов на блокировку таблицы, которые были удовлетворены только после определенного периода ожидания. Если значение велико и есть проблемы с производительностью, необходимо сначала оптимизировать свои запросы, а затем разбить свою таблицу (или таблицы) или использовать репликацию.';
$strShowStatusThreads_cachedDescr = 'Количество потоков в потоковом кеше. Частоту успешных обращений к кешу можно вычислить по формуле Threads_created/Connections. Если это значение окрашено в красный цвет - вам следует увеличить thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Количество открытых текущих соединений.';
$strShowStatusThreads_createdDescr = 'Полное количество потоков, созданных для поддержания соединений с клиентом. При большом значении переменной, можно увеличить значение переменной thread_cache_size (это не даст существенного выигрыша в производительности, при хорошей реализации потоков).';
$strShowStatusThreads_runningDescr = 'Количество процессов, находящихся в активном состоянии.';
$strShowTableDimension = 'Отображать размерность таблиц';
$strShowTables = 'Отображение таблиц';
$strShowThisQuery = 'Показать данный запрос снова';
$strSimplifiedChinese = 'Китайский упрощенный';
$strSingly = '(столбец)';
$strSize = 'Размер';
$strSkipQueries = 'Количество запросов, пропущенных от начала';
$strSlovak = 'Словацкий';
$strSlovenian = 'Словенский';
$strSmallBigAll = 'Свернуть/развернуть отображение всех таблиц';
$strSnapToGrid = 'Привязать к сетке';
$strSocketProblem = '(либо сокет локального MySQL-сервера некорректно настроен)';
$strSort = 'Отсортировать';
$strSortByKey = 'Сортировать по индексу';
$strSorting = 'Сортировка';
$strSpaceUsage = 'Используемое пространство';
$strSpanish = 'Испанский';
$strSplitWordsWithSpace = 'Слова разделяются пробелом (" ").';
$strSQL = 'SQL';
$strSQLCompatibility = 'Режим совместимости SQL';
$strSQLExportType = 'Тип экспорта';
$strSQLParserBugMessage = 'В работе SQL-парсера произошла ошибка. Убедитесь в корректности запроса, отсутствии в нем опечаток и незакрытых кавычек. Возможной причиной ошибки может быть загрузка файла, содержащего двоичные данные вне кавычек в тексте запроса. Попробуйте выполнить запрос через командную строку MySQL. При наличии таковой, ниже будет выведена ошибка MySQL-сервера, облегчающая диагностику проблемы. Если проблема не решается, хотя через интерфейс командной строки запрос отрабатывает корректно, выявите ту часть запроса, которая вызывает ошибку и отправьте разработчикам описание ошибки, снабдив его данными из секции CUT выведенной ниже:';
$strSQLParserUserError = 'Вероятно, SQL-запрос содержит ошибку. При наличии таковой, ниже будет выведена ошибка MySQL-сервера, облегчающая диагностику проблемы.';
$strSQLQuery = 'SQL-запрос';
$strSQLResult = 'Результат SQL-запроса';
$strSQPBugInvalidIdentifer = 'Неправильный идентификатор';
$strSQPBugUnclosedQuote = 'Незакрытая кавычка';
$strSQPBugUnknownPunctuation = 'Неизвестная пунктуация';
$strStandInStructureForView = 'Дублирующая структура для представления';
$strStatCheckTime = 'Последняя проверка';
$strStatCreateTime = 'Создание';
$strStatement = 'Характеристика';
$strStatisticsOverrun = 'На загруженном сервере, побайтовые счетчики могут переполняться, таким образом, статистика, передаваемая MySQL-сервером, может быть некорректной.';
$strStatUpdateTime = 'Последнее обновление';
$strStatus = 'Состояние';
$strStorageEngines = 'Типы таблиц';
$strStorageEngine = 'Тип таблиц';
$strStrucCSV = 'CSV';
$strStrucData = 'Структура и данные';
$strStrucExcelCSV = 'CSV для MS Excel';
$strStrucNativeExcel = 'Формат MS Excel';
$strStrucOnly = 'Только структура';
$strStructPropose = 'Анализ структуры таблицы';
$strStructureForView = 'Структура для представления';
$strStructure = 'Структура';
$strSubmit = 'Выполнить';
$strSuccess = 'SQL-запрос был успешно выполнен';
$strSuhosin = 'Сервер использует защитную систему Suhosin. Для решения возможных проблем обратитесь к %sдокументации%s.';
$strSum = 'Всего';
$strSwedish = 'Шведский';
$strSwitchToDatabase = 'Переключиться на скопированную базу данных';
$strSwitchToTable = 'Переключиться на скопированную таблицу';

$strTable = 'Таблица ';
$strTableAlreadyExists = 'Таблица %s уже существует!';
$strTableComments = 'Комментарий к таблице';
$strTableEmpty = 'Не задано имя таблицы!';
$strTableHasBeenDropped = 'Таблица %s была удалена';
$strTableHasBeenEmptied = 'Таблица %s была очищена';
$strTableHasBeenFlushed = 'Обновлен кеш таблицы %s';
$strTableIsEmpty = 'Таблица - пуста!';
$strTableMaintenance = 'Обслуживание таблицы';
$strTableName = 'Имя таблицы';
$strTableOfContents = 'Содержание';
$strTableOptions = 'Параметры таблицы';
$strTables = 'Таблиц: %s';
$strTableStructure = 'Структура таблицы';
$strTakeIt = 'Применить';
$strTblPrivileges = ' Привилегии уровня таблицы';
$strTempData = 'Временные данные';
$strTextAreaLength = 'Из-за большого количества данных<br />изменение может быть затруднено';
$strThai = 'Таи';
$strTheme = 'Тема / Стиль';
$strThemeDefaultNotFound = 'Тема по-умолчанию %s не найдена!';
$strThemeNoPreviewAvailable = 'Предпросмотр не доступен.';
$strThemeNotFound = 'Тема %s не найдена!';
$strThemeNoValidImgPath = 'Не найден правильный путь к изображениям для темы %s!';
$strThemePathNotFound = 'Путь к файлам темы %s не найден!';
$strThisHost = 'Этот хост';
$strThreads = 'Потоки';
$strThreadSuccessfullyKilled = 'Процесс %s был успешно завершен.';
$strTime = 'Время';
$strTimeoutInfo = 'Процесс импорта был прерван из-за приближения временного лимита, после перезапуска импорт будет продолжен с позиции %d.';
$strTimeoutNothingParsed = 'Несмотря на последний запуск, данные не были обработаны. Как правило это означает, что phpMyAdmin не сможет завершить процесс импорта до тех пор, пока не будет увеличено ограничение времени выполнения php-сценариев.';
$strTimeoutPassed = 'Достигнут временной лимит. Если вы хотите завершить импорт, перезапустите его выбрав тот же файл, и процесс продолжится с того места на котором остановился.';
$strToFromPage = 'Страница';
$strToggleScratchboard = 'Отображение';
$strToggleSmallBig = 'Обратное отображение';
$strToSelectRelation = 'Для выбора связи нажмите на точке соединения, как показано на картинке:';
$strTotal = 'всего';
$strTotalUC = 'Всего';
$strTraditionalChinese = 'Китайский традиционный';
$strTraditionalSpanish = 'Испанский традиционный';
$strTraffic = 'Трафик';
$strTransactionCoordinator = 'Координатор транзакций';
$strTransformation_application_octetstream__download = 'Отображает ссылку для загрузки бинарных данных поля. Возможно использование первого параметра для выбора имени файла, или использование второго параметра, как имени поля, которое содержит имя файла. В случае использования второго параметра, первый необходимо установить в виде пустой строки.';
$strTransformation_application_octetstream__hex = 'Отображает данные в шестнадцатеричном представлении. Необязательный первый параметр может быть использован для указания на то, через какие промежутки будет добавляться пробел (по умолчанию после двух полубайтов).';
$strTransformation_image_jpeg__inline = 'Отображает уменьшенную иконку изображения, на которую можно нажать для увеличения. Параметрами задается максимальная ширина и высота картинки в пикселях. Изначальное соотношение сторон, сохраняется.';
$strTransformation_image_jpeg__link = 'Отображает ссылку для загрузки изображения';
$strTransformation_image_png__inline = 'Отображает уменьшенную иконку изображения, на которую можно нажать для увеличения. Параметрами задается максимальная ширина и высота картинки в пикселях. Изначальное соотношение сторон, сохраняется.';
$strTransformation_text_plain__dateformat = 'Отображает поля типа TIME, TIMESTAMP, DATETIME или время в формате Unix, в виде форматированного вывода. Первый параметр прибавляет смещение, в часах (по умолчанию: 0). Второй параметр задает иное форматирование строки даты/времени. Третий параметр определяет установку локального (строка "local") или всемирного (строка "utc") времени. В соответствии с установленным третьим параметром формат даты должен иметь различные значения - для "local" смотрите описание функции PHP strftime(), для "utc" - gmdate().';
$strTransformation_text_plain__external = 'ТОЛЬКО LINUX: Запускает внешнее приложение и подает ему на ввод данные поля. Возвращает обычный вывод приложения. По умолчанию используется Tidy (форматирование HTML-кода). По соображениям безопасности, необходимо вручную отредактировать файл libraries/transformations/text_plain__external.inc.php вписав доступные программы. Первый параметр задает номер используемой программы, во втором параметре передаются параметры собственно программы. При установке третьего параметра в 1, данные вывода будут преобразованы функцией PHP htmlspecialchars() (по умолчанию: 1). Установка червертого параметра в 1, предотвратит переносы строки и выведет данные в одну строку (по умолчанию: 1).';
$strTransformation_text_plain__formatted = 'Отображает содержимое поля как есть, без преобразования данных функцией PHP htmlspecialchars(). Таким образом поле может содержать рабочий HTML-код.';
$strTransformation_text_plain__imagelink = 'Показывает изображение и ссылку; поле содержит имя файла. Первый параметр является URL-префиксом, например "http://domain.com/". Второй и третий параметр - ширина и высота изображения в пикселях.';
$strTransformation_text_plain__link = 'Отображает ссылку; поле содержит имя файла. Первый параметр - URL-префикс, например "http://www.example.com/". Второй параметр - заголовок ссылки.';
$strTransformation_text_plain__sql = 'Форматирует текст в виде SQL запроса с подсветкой синтаксиса';
$strTransformation_text_plain__substr = 'Показывает только часть строки. Первый параметр - сдвиг, определяющий начало выводимого текста (по умолчанию: 0). Второй параметр - количество возвращаемых символов (по умолчанию: до конца строки). Третий параметр определяет строку добавляемую вначале и/или в конце существующего отрывка (по умолчанию: "...").';
$strTriggers = 'Триггеры';
$strTruncateQueries = 'Сокращенное отображение запросов';
$strTurkish = 'Турецкий';
$strType = 'Тип';

$strUkrainian = 'Украинский';
$strUncheckAll = 'Снять выделение';
$strUnicode = 'Юникод';
$strUnique = 'Уникальный';
$strUnknown = 'неизвестно';
$strUnselectAll = 'Снять выделение';
$strUnsupportedCompressionDetected = 'Загружаемый файл сжат методом (%s), который не поддерживается, и поэтому не может быть импортирован. Поддержка данного метода еще не реализована, либо отключена при конфигурировании.';
$strUpdatePrivMessage = 'Были изменены привилегии для %s.';
$strUpdateProfileMessage = 'Профиль был обновлен.';
$strUpdateQuery = 'Дополнить запрос';
$strUpdComTab = 'Необходимо обновить таблицу column_comments. Детали смотрите в документации.';
$strUpgrade = 'Необходимо обновить %s до версии %s или выше.';
$strUploadErrorCantWrite = 'Ошибка при попытке записи файла на диск.';
$strUploadErrorExtension = 'Загрузка файла остановлена из-за расширения.';
$strUploadErrorFormSize = 'Размер загружаемого файла превышает значение директивы MAX_FILE_SIZE, определенной в HTML форме.';
$strUploadErrorIniSize = 'Размер загружаемого файла превышает значение директивы upload_max_filesize установленное в конфигурационном файле PHP (php.ini).';
$strUploadErrorNoTempDir = 'Не найден каталог для хранения временных файлов.';
$strUploadErrorPartial = 'Загруженный файл был загружен только частично.';
$strUploadErrorUnknown = 'При время загрузке файла произошла неизвестная ошибка.';
$strUploadLimit = 'Вероятно, размер загружаемого файла слишком велик. Способы обхода данного ограничения описаны в %sдокументации%s.';
$strUploadsNotAllowed = 'Загрузка файлов на сервер, невозможна.';
$strUsage = 'Использование';
$strUseBackquotes = 'Заключить названия таблиц и полей в косые кавычки';
$strUsedPhpExtensions = 'Используется расширение PHP';
$strUseHostTable = 'Использовать таблицу хостов';
$strUser = 'Пользователь';
$strUserAlreadyExists = 'Пользователь %s уже существует!';
$strUserEmpty = 'Не задано имя пользователя!';
$strUserName = 'Имя пользователя';
$strUserNotFound = 'Выделенный пользователь не был найден в таблице привилегий.';
$strUserOverview = 'Обзор учетных записей';
$strUsersDeleted = 'Выбранные пользователи были успешно удалены.';
$strUsersHavingAccessToDb = 'Пользователи с правами доступа к &quot;%s&quot;';
$strUseTabKey = 'Для перемещения между полями значения, используйте клавишу TAB, либо CTRL+клавиши со стрелками - для свободного перемещения';
$strUseTables = 'Использовать таблицы';
$strUseTextField = 'Использовать текстовое поле';
$strUseThisValue = 'Использовать это значение';

$strValidateSQL = 'Проверка синтаксиса SQL';
$strValidatorError = 'Проверка синтаксиса SQL не осуществима. Проверьте, установлены ли необходимые модули расширений для PHP, описанные в %sдокументации%s.';
$strValue = 'Значение';
$strVar = 'Переменная';
$strVersionInformation = 'Информация о версии';
$strView = 'Представление';
$strViewDump = 'Отобразить дамп (схему) таблицы';
$strViewDumpDatabases = 'Отобразить дамп (схему) баз данных';
$strViewDumpDB = 'Отобразить дамп (схему) базы данных';
$strViewHasBeenDropped = 'Представление %s было удалено';
$strViewMaxExactCount = 'Это представление содержит больше %s строк. За разъяснениями, обратитесь к %sдокументации%s.';
$strViewName = 'VIEW название';

$strWebServerUploadDirectory = 'Из каталога загрузки';
$strWebServerUploadDirectoryError = 'Установленный каталог загрузки не доступен';
$strWelcome = 'Добро пожаловать в %s';
$strWestEuropean = 'Западно-Европейский';
$strWildcard = 'Групповой символ';
$strWindowNotFound = 'Целевое окно браузера не может быть обновлено. Возможно, вы закрыли родительское окно или ваш браузер блокирует межоконные обновления из-за настроек безопасности';
$strWithChecked = 'С отмеченными:';
$strWriteRequests = 'Запросы на запись';
$strWrongUser = 'Данные для входа не верны. В доступе отказано.';

$strXML = 'XML';

$strYes = 'Да';

$strZeroRemovesTheLimit = 'Замечание: Установка значения параметров в 0 (ноль), снимает ограничения.';
$strZip = 'zip';
?>
