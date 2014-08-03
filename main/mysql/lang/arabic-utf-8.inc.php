<?php
/* $Id: arabic-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Original translation to Arabic by Fisal <fisal77 at hotmail.com>
 * Update by Tarik kallida <kallida at caramail.com>
 * Final Update on November 25, 2003 by Ossama Khayat <okhayat at yahoo.com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('بايت', 'كيلوبايت', 'ميجابايت', 'غيغابايت');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$month = array('يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y الساعة %H:%M';

$timespanfmt = '%s يوم، %s ساعة، %s دقيقة و%s ثانية';

$strAbortedClients = 'ألغي';
$strAccessDeniedExplanation = 'حاول phpMyAdmin الاتصال بخادم MySQL، ورفض الخادم الاتصال. عليك أن تتحقق من المستضيف، أو اسم المستخدم وكلمة المرور في ملف الإعداد config.inc.php وتتأكد أنها مطابقة للمعلومات المعطاة إليك من قبل المسؤول عن خادم MySQL.';
$strAccessDenied = 'غير مسموح';
$strAction = 'العملية';
$strAddAutoIncrement = 'أضف قيمة AUTO_INCREMENT';
$strAddConstraints = 'أضف قيوداً';
$strAddDeleteColumn = 'إضافه/حذف عمود حقل';
$strAddDeleteRow = 'إضافه/حذف صف سجل';
$strAddIntoComments = 'أضف إلى الملاحظات';
$strAddNewField = 'إضافة حقل جديد';
$strAddPrivilegesOnDb = 'إضافة الصلاحيات على قاعدة البيانات التالية';
$strAddPrivilegesOnTbl = 'إضافة الصلاحيات على الجدول التالي';
$strAddSearchConditions = 'أضف شروط البحث (جسم من الفقره "where" clause):';
$strAddToIndex = 'إضافه كفهرس &nbsp;%s&nbsp;صف(ـوف)';
$strAddUserMessage = 'لقد أضفت مستخدم جديد.';
$strAddUser = 'أضف مستخدم جديد';
$strAdministration = 'إدارة';
$strAffectedRows = 'صفوف مؤثره:';
$strAfterInsertBack = 'الرجوع إلى الصفحة السابقة';
$strAfterInsertNewInsert = 'إدخال تسجيل جديد';
$strAfter = 'بعد %s';
$strAllTableSameWidth = 'أظهر كل الجدوال بنفس العرض؟';
$strAll = 'الكل';
$strAlterOrderBy = 'تعديل ترتيب الجدول بـ';
$strAnalyzeTable = 'تحليل الجدول';
$strAnd = 'و';
$strAnIndex = 'لقد أُضيف الفهرس في %s';
$strAnyHost = 'أي مزود';
$strAnyUser = 'أي مستخدم';
$strAny = 'أي';
$strAPrimaryKey = 'لقد أُضيف المفتاح الأساسي في %s';
$strArabic = 'العربية';
$strArmenian = 'الأرمنية';
$strAscending = 'تصاعدياً';
$strAtBeginningOfTable = 'في بداية الجدول';
$strAtEndOfTable = 'في نهاية الجدول';
$strAttr = 'الخواص';
$strAutomaticLayout = 'مظهر تلقائي';

$strBack = 'رجوع';
$strBaltic = 'البلطيق';
$strBeginCut = 'بدء القصّ';
$strBeginRaw = 'بدء بيانات أصليّة';
$strBinaryDoNotEdit = 'ثنائي - لاتحرره';
$strBinary = 'ثنائي';
$strBookmarkAllUsers = 'اسمح لكل المستخدمين الوصول إلى هذه العلامة المرجعية';
$strBookmarkDeleted = 'لقد حُذفت العلامه المرجعيه.';
$strBookmarkLabel = 'علامه';
$strBookmarkQuery = 'علامه مرجعيه SQL-إستعلام';
$strBookmarkThis = 'إجعل علامه مرجعيه SQL-إستعلام';
$strBookmarkView = 'عرض فقط';
$strBrowseForeignValues = 'استعرض القيم الغريبة';
$strBrowse = 'إستعراض';
$strBulgarian = 'البلغارية';
$strBzError = 'لم يستطع phpMyAdmin ضغط كمّ البيانات بسبب عطل في امتداد Bz2 في إصدار PHP. يُفضّل أن تغيّر قيمة توجيه <code>$cfg[\'BZipDump\']</code> في ملف إعدادات phpMyAdmin إلى <code>FALSE</code>. إن كنت تريد استخدام مزايا ضغط Bz2، عليك بالتحديث إلى إصدار جديد من PHP. لمزيد من التفاصيل، أنظر في تقرير خلل PHP %s.';
$strBzip = '"bzipped"';

$strCannotLogin = 'لا يمكن الدخول إلى خادم MySQL';
$strCantLoadRecodeIconv = 'لم يمكن تحميل iconv أو إعادة تشفير الإمتداد المطلوب لتحويل شيفرة الأحرف، الرجاء إعداد PHP ليسمح باستخدام هذه الإمتدادات أو عطل عمل التحويل في phpMyAdmin.';
$strCantLoad = 'لا يمكن قراءة الامتداد %s،<br />رجاء تأكد من إعدادات PHP.';
$strCantRenameIdxToPrimary = 'لايمكن تغيير إسم الفهرس إلى الأساسي!';
$strCantUseRecodeIconv = 'لا يمكن استخدام iconv ولا libiconv ولا عملية recode_string في حين يحدد الامتداد أنه محمّل. تأكّد من إعدادات PHP.';
$strCardinality = 'Cardinality';
$strCaseInsensitive = 'غير حساس لحالة الأحرف';
$strCaseSensitive = 'حساس لحالة الأحرف';
$strCentralEuropean = 'أوروبا الوسطى';
$strChangeCopyModeCopy = ' ... أبق القديم.';
$strChangeCopyModeDeleteAndReload = ' ... إحذف القديمين من جداول المستخدمين وأعد قراءة الصلاحيات بعد ذلك.';
$strChangeCopyModeJustDelete = ' ... إحذف القديم من جداول المستخدمين.';
$strChangeCopyModeRevoke = ' ... استعد كل الصلاحيات الفعالة من القديمين واحذهم بعد ذلك.';
$strChangeCopyMode = 'أضف اسم مستخدم جديد بنفس الصلاحيات و...';
$strChangeCopyUser = 'غيّر معلومات الدخول / إنسخ اسم مستخدم';
$strChangeDisplay = 'اختر الحقل لإظهاره';
$strChangePassword = 'تغيير كلمة السر';
$strChange = 'تغيير';
$strCharsetOfFile = 'شيفرة أحرف الملف:';
$strCharsetsAndCollations = 'مجموعات المحارف وCollations';
$strCharsets = 'مجموعات المحارف';
$strCharset = 'مجموعة المحارف';
$strCheckAll = 'إختر الكل';
$strCheckOverhead = 'تحقق من overhead';
$strCheckPrivsLong = 'تحقق من الصلاحيات لقاعدة بيانات &quot;%s&quot;.';
$strCheckPrivs = 'تحقق من الصلاحيات';
$strCheckTable = 'التحقق من الجدول';
$strChoosePage = 'رجاءً اختر صفحة لتعديلها';
$strColComFeat = 'إظهار تعليقات العمود';
$strCollation = 'Collation';
$strColumnNames = 'إسم العمود';
$strColumnPrivileges = 'صلاحيات خاصة بالحقل';
$strCommand = 'أمْر';
$strComments = 'تعليقات';
$strCompleteInserts = 'الإدخال لقد إكتمل';
$strCompression = 'الضغط';
$strConfigFileError = 'لم يستطع phpMyAdmin أن يقرأ ملف إعداداتك!<br />قد يكون هذا بسبب أن PHP وجد خطأ في الإعراب فيه أو أنه لا يستطيع أن يجد الملف.<br />رجاءً اقرأ الملف بشكل مباشر باستخدام الوصلة أدناه واقرأ رسالة الخطأ الناتجة. في معظم الحالات قد تكون علامة التنصيص أو علامة الفاصلة المنقوطة ناقصة في مكان ما.<br />إن حصلت على صفحة فارغة، فكلّ شيء على ما يرام.';
$strConfigureTableCoord = 'رجاء إعداد الموقع للجدول %s';
$strConnections = 'اتصالات';
$strConstraintsForDumped = 'قيود الجداول المحفوظة';
$strConstraintsForTable = 'القيود للجدول';
$strCookiesRequired = 'يجب تفعيل دعم الكوكيز في هذه المرحلة.';
$strCopyTableOK = 'الجدول %s لقد تم نسخه إلى %s.';
$strCopyTableSameNames = 'لا يمكن نسخ الجدول إلى نفسه!';
$strCopyTable = 'نسخ الجدول إلى';
$strCouldNotKill = 'لم يستطع phpMyAdmin إيقاف العمليّة %s. يبدو أنها أوقفت مسبقاً.';
$strCreateIndexTopic = 'تصميم فهرسه جديده';
$strCreateIndex = 'تصميم فهرسه على&nbsp;%s&nbsp;عمود';
$strCreateNewDatabase = 'تكوين قاعدة بيانات جديدة';
$strCreateNewTable = 'تكوين جدول جديد في قاعدة البيانات %s';
$strCreatePage = 'أنشئ صفحة جديدة';
$strCreatePdfFeat = 'إنشاء ملفات PDF';
$strCreate = 'تكوين';
$strCreationDates = 'تواريخ الإنشاء/التحديث/التحقّق';
$strCriteria = 'المعايير';
$strCroatian = 'الكرواتية';
$strCyrillic = 'السيريلية';
$strCzech = 'التشيكية';

$strDanish = 'الدنمركية';
$strDatabaseExportOptions = 'خيارات تصدير قاعدة بيانات';
$strDatabaseHasBeenDropped = 'قاعدة بيانات %s محذوفه.';
$strDatabasesDropped = 'تم حذف قواعد البيانات %s بنجاح.';
$strDatabasesStatsDisable = 'أوقف الإحصائيات';
$strDatabasesStatsEnable = 'مكّن الإحصائيات';
$strDatabasesStatsHeavyTraffic = 'ملاحظة: تمكين إحصائيات قواعد البيانات هنا قد يسبب تدفق بيانات ثقيل بين خادم الوب وخادم MySQL.';
$strDatabasesStats = 'إحصائيات قواعد البيانات';
$strDatabases = 'قاعدة بيانات';
$strDatabase = 'قاعدة البيانات';
$strDataDict = 'قاموس البيانات';
$strDataOnly = 'بيانات فقط';
$strData = 'بيانات';
$strDBComment = 'ملاحظة قاعدة البيانات: ';
$strDbPrivileges = 'صلاحيات خاصة بقاعدة البيانات';
$strDbSpecific = 'خاص بقاعدة بيانات';
$strDefaultValueHelp = 'للقيم الافتراضية، الرجاء أدخل قيمة مفردة، دون علامات هروب أو تنصيص، باستخدام التنسيق: a';
$strDefault = 'إفتراضي';
$strDelayedInserts = 'استخدم الإضافات المتأخرة';
$strDeleteAndFlushDescr = 'هذه هي أنظف طريقة، لكن إعادة قراءة الصلاحيات قد يتطلّب بعض الوقت.';
$strDeleteAndFlush = 'احذف المستخدمين وقم بإعادة قراءة الصلاحيات بعد ذلك.';
$strDeletedRows = 'الصفوف المحذوفه:';
$strDeleted = 'لقد تم حذف الصف';
$strDelete = 'حذف';
$strDeleting = 'قيْد حذْف %s';
$strDelOld = 'تحتوي الصفحة الحالية مراجع لجداول لم تعد موجودة. هل تود حذف هذه المراجع؟';
$strDescending = 'تنازلياً';
$strDescription = 'الوصف';
$strDictionary = 'قاموس';
$strDisabled = 'معطّل';
$strDisplayFeat = 'إظهار المزايا';
$strDisplayOrder = 'ترتيب العرض:';
$strDisplayPDF = 'إظهار بناء ملف PDF';
$strDoAQuery = 'تجعل "إستعلام بواسطة المثال" (wildcard: "%")';
$strDocu = 'مستندات وثائقيه';
$strDoYouReally = 'هل تريد حقاً تنفيذ';
$strDropUsersDb = 'إحذف قواعد البيانات التي لها نفس إسماء المستخدمين.';
$strDrop = 'حذف';
$strDumpingData = 'إرجاع أو إستيراد بيانات الجدول';
$strDumpSaved = 'تم حفظ الـDump إلى الملف %s.';
$strDumpXRows = 'إحدف %s سطر بدءً من السطر %s.';
$strDynamic = 'ديناميكي';

$strEditPDFPages = 'عدّل صفحات PDF';
$strEditPrivileges = 'تحرير الإمتيازات';
$strEdit = 'تحرير';
$strEffective = 'فعال';
$strEmptyResultSet = 'MySQL قام بإرجاع نتيجة إعداد فارغه (مثلاً. صف صفري).';
$strEmpty = 'إفراغ محتوى';
$strEnabled = 'ممكّن';
$strEndCut = 'انتهاء القصّ';
$strEndRaw = 'انتهاء البيانات الأصلية';
$strEnd = 'نهايه';
$strEnglishPrivileges = ' ملاحظه: إسم الإمتياز لـMySQL يظهر ويُقرأ باللغه الإنجليزيه فقط ';
$strEnglish = 'الإنجليزية';
$strError = 'خطأ';
$strEstonian = 'الإستونية';
$strExcelEdition = 'إصدارة إكسل';
$strExecuteBookmarked = 'نفّذ استعلام محفوظ بعلامة مرجعية';
$strExplain = 'إشرح SQL';
$strExport = 'تصدير';
$strExtendedInserts = 'إدخال مُدد';
$strExtra = 'إضافي';

$strFailedAttempts = 'محاولات أخفقت';
$strFieldHasBeenDropped = 'حقل محذوف %s';
$strFieldsEnclosedBy = 'حقل مضمن بـ';
$strFieldsEscapedBy = 'حقل مُتجاهل بـ';
$strFieldsTerminatedBy = 'حقل مفصول بـ';
$strFields = ' عدد الحقول';
$strField = 'الحقل';
$strFileAlreadyExists = 'المف %s موجود اصلاً على الخادم. غير الاسم أو حدد خيار التسجيل على الملف الموجود.';
$strFileCouldNotBeRead = 'لم يمكن قراءة الملف';
$strFileNameTemplateRemember = 'تذكر القالب';
$strFileNameTemplate = 'قالب إسم الملف';
$strFixed = 'مثبت';
$strFlushPrivilegesNote = 'ملاحظة: يقرأ phpMyAdmin صلاحيات المستخدمين من جداول الصلاحيات من خادم MySQL مباشرةً. محتويات هذه الجداول قد تختلف عن الصلاحيات التي يستخدمها الخادم إذا ما تمّ التعديل عليها يدويّاً. في هذه الحالة، عليك %s بإعادة قراءة الصلاحيات %s قبل أن تكمل.';
$strFlushTable = 'إعادة تحميل الجدول ("FLUSH")';
$strFormat = 'صيغه';
$strFormEmpty = 'يوجد قيمه مفقوده بالنموذج !';
$strFullText = 'نصوص كامله';
$strFunction = 'دالة';

$strGenBy = 'أنشئ بواسطة';
$strGeneralRelationFeat = 'المزايا العامّة للرابط';
$strGenTime = 'أنشئ في';
$strGerman = 'الألمانية';
$strGlobalPrivileges = 'صلاحيّات عامّة';
$strGlobalValue = 'قيمة عامّة';
$strGlobal = 'عامّ';
$strGo = '&nbsp;تنفيــذ&nbsp;';
$strGrantOption = 'مَنْحْ';
$strGreek = 'اليونانية';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'لقد عُدِل.';
$strHasBeenCreated = 'لقد تكون.';
$strHaveToShow = 'عليك اختيار عمود واحد على الأقل للعرض';
$strHebrew = 'العبرية';
$strHomepageOfficial = 'الصفحة الرئيسية الرسمية لـ phpMyAdmin';
$strHome = 'الصفحة الرئيسية';
$strHostEmpty = 'إسم المستضيف فارغ!';
$strHost = 'المزود';
$strHungarian = 'الهنغارية';

$strIdxFulltext = 'النص كاملاً';
$strId = 'رقم';
$strIgnore = 'تجاهل';
$strImportFiles = 'استورد الملفات';
$strIndexes = 'فهارس';
$strIndexHasBeenDropped = 'فهرسه محذوفه %s';
$strIndexName = 'إسم الفهرس&nbsp;:';
$strIndexType = 'نوع الفهرس&nbsp;:';
$strIndex = 'فهرست';
$strInnodbStat = 'وضع InnoDB';
$strInsecureMySQL = 'يحتوي ملف الإعدادت الخاص بك تعيينات )المستخدم root دون كلمة مرور( والذي يشير إلى حساب المستخدم الرئيسي لـMySQL. خادم MySQL الذي يعمل بهذه الإعدادت الافتراضية معرض لخطر الاقتحام، وعليك أن تقوم بإصلاح ثغرة الأمان هذه في أقرب وقت ممكن.';
$strInsertAsNewRow = 'إدخال كتسجيل جديد';
$strInsertedRowId = 'رقم معرّف السّطر المضاف:';
$strInsertedRows = 'صفوف مدخله:';
$strInsert = 'إدخال';
$strInternalNotNecessary = '* العلاقة الداخلية غير ضرورية عندما تكون موجودة مسبقاً في InnoDB.';
$strInternalRelations = 'العلاقات الداخلية';
$strInUse = 'قيد الإستعمال';

$strJapanese = 'اليابانية';
$strJumpToDB = 'إذهب إلى قاعدة بيانات &quot;%s&quot;.';
$strJustDeleteDescr = 'سوف يبقى المستخدمون &quot;المحذوفون&quot; قادرون على الوصول للخادم كالعادة حتى يتم إعادة قراءة الصلاحيات.';
$strJustDelete = 'فقط قم بحذف المستخدمين من جدول الصلاحيات.';

$strKeepPass = 'لاتغير كلمة السر';
$strKeyname = 'إسم المفتاح';
$strKill = 'إبطال';
$strKorean = 'الكورية';

$strLandscape = 'عرض الصفحة';
$strLatexCaption = 'عنوان الجدول';
$strLatexContent = 'محتوييات الجدول __TABLE__';
$strLatexContinuedCaption = 'عنوان جدول تابع';
$strLatexContinued = '(تابع)';
$strLatexIncludeCaption = 'أضف عنواناً للجدول';
$strLatexLabel = 'Label key';
$strLatexStructure = 'بنية الجدول __TABLE__';
$strLaTeX = 'لاتِكْسْ';
$strLengthSet = 'الطول/القيمه*';
$strLimitNumRows = 'رقم السجلات لكل صفحه';
$strLinesTerminatedBy = 'خطوط مفصوله بـ';
$strLinkNotFound = 'لم يمكن إيجاد الوصلة';
$strLinksTo = 'مرتبط بـ';
$strLithuanian = 'الليتوانية';
$strLocalhost = 'محلي';
$strLocationTextfile = 'مكان ملف نصي';
$strLoginInformation = 'بيانات الدخول';
$strLogin = 'دخول';
$strLogout = 'تسجيل خروج';
$strLogPassword = 'كلمة السر:';
$strLogServer = 'خادم السجلّ';
$strLogUsername = 'إسم المُستخدم:';

$strMIME_available_mime = 'أنواع MIME المتوفرة';
$strMIME_available_transform = 'التحويلات المتوفرة';
$strMIME_description = 'الوصف';
$strMIME_MIMEtype = 'نوع MIME';
$strMIME_nodescription = 'ليس هناك وصف متوفر لهذا التحويل.<br />رجاء اسأل الناشر، ما يفعله %s.';
$strMIME_transformation_note = 'لعرض قائمة بخيارات التحويل المتوفرة وأنواع تحويلات MIME الخاصة بها، إضغط على %sخيارات التحويل%s';
$strMIME_transformation_options_note = 'رجاءً أدخل القيم لخيارات التحويل باستخدام هذا التنسيق: \'a\', 100, b,\'c\'...<br />إذا احتجت أن تضع شرْطة مائلة ("\") أو علامة تنصيص ("\'") بين هذه القيم، اسبقها بشرْطة مائلة )على سبيل المثال \'\\\\xyz\' أو \'a\\\'b\'(.';
$strMIME_transformation_options = 'خيارات التحويل';
$strMIME_transformation = 'تحويل المتصفح';
$strMIME_without = 'أنواع MIME التي تظهر بحروف مائلة ليس لها وظيفة تحويل منفصلة';
$strModifications = 'تمت التعديلات';
$strModifyIndexTopic = 'تعديل الفهرسه';
$strModify = 'تعديل';
$strMoveTableOK = '%s جدول تم نقله إلى %s.';
$strMoveTableSameNames = 'لايمكن نقل الجدول إلى نفسه!';
$strMoveTable = 'نقل جدول إلى (قاعدة بيانات<b>.</b>جدول):';
$strMultilingual = 'متعدد اللغات';
$strMySQLCharset = 'شيفرة أحرف MySQL';
$strMySQLSaid = 'MySQL قال: ';
$strMySQLShowProcess = 'عرض العمليات';
$strMySQLShowStatus = 'عرض حالة المزود MySQL';
$strMySQLShowVars ='عرض متغيرات المزود MySQL';

$strName = 'الإسم';
$strNext = 'التالي';
$strNoDatabasesSelected = 'لا قواعد بيانات محددة';
$strNoDatabases = 'لايوجد قواعد بيانات';
$strNoDescription = 'بدون وصف';
$strNoDropDatabases = 'معطل "حذف قاعدة بيانات"الأمر ';
$strNoExplain = 'تخطّي شرح SQL';
$strNoFrames = 'phpMyAdmin أكثر تفهماً مع مستعرض <b>الإطارات</b>.';
$strNoIndexPartsDefined = 'إجزاء الفهرسه غير معرفه!';
$strNoIndex = 'فهرس غير معرف!';
$strNoModification = 'لا تغييرات';
$strNone = 'لاشئ';
$strNoOptions = 'هذا التنسيق ليس له أي خيارات';
$strNoPassword = 'لا كلمة سر';
$strNoPermission = 'خادأ£ الوب ليس لديه صلاحية لحفظ الملف %s.';
$strNoPhp = 'بدون شيفرة PHP';
$strNoPrivileges = 'إمتياز غير موجود';
$strNoRights = 'ليس لديك الحقوق الكافيه بأن تكون هنا الآن!';
$strNoSpace = 'لا يوجد مساحة كافية لحفظ الملف %s.';
$strNoTablesFound = 'لايوجد جداول متوفره في قاعدة البيانات هذه!.';
$strNotNumber = 'هذا ليس رقم!';
$strNotOK = 'ليس صالحاً';
$strNotSet = 'الجدول <b>%s</b> غير موجود أو محدد في %s';
$strNoUsersFound = 'المستخدم(ـين) لم يتم إيجادهم.';
$strNoValidateSQL = 'تخطّي التأكّد من SQL';
$strNo = 'لا';
$strNull = 'خالي';
$strNumSearchResultsInTable = '%s مطابقة في الجدول <i>%s</i>';
$strNumSearchResultsTotal = '<b>المجموع:</b> <i>%s</i>مطابقة';
$strNumTables = 'جداول';

$strOK = 'موافق';
$strOperations = 'عمليّات';
$strOptimizeTable = 'ضغط الجدول';
$strOr = 'أو';
$strOverhead = 'الفوقي';
$strOverwriteExisting = 'خزن على الملفات الموجودة أصلاً';

$strPageNumber = 'صفحة رقم:';
$strPaperSize = 'حجم الورق';
$strPartialText = 'نصوص جزئيه';
$strPasswordChanged = 'تم تغيير كلمة المرور لـ %s بنجاح.';
$strPasswordEmpty = 'كلمة السر فارغة !';
$strPasswordNotSame = 'كلمتا السر غير متشابهتان !';
$strPassword = 'كلمة السر';
$strPdfDbSchema = 'بناء قاعدة البيانات "%s" - الصفحة %s';
$strPdfInvalidTblName = 'الجدول "%s" غير موجود!';
$strPdfNoTables = 'لا يوجد جداول';
$strPerHour = 'لكل ساعة';
$strPerMinute = 'لكل دقيقة';
$strPerSecond = 'لكل ثانية';
$strPhoneBook = 'دفتر الهاتف';
$strPHP40203 = 'أنت تستخدم الإصدار 4.2.3 من PHP والذي يحتوي على خلّل خطير في التعامل مع النصوص ثنائية البايت (mbstring). أنظر في تقرير خلل PHP رقم 19404. لا ينصح باستخدام هذه النسخة من PHP مع phpMyAdmin.';
$strPHPVersion = ' PHP إصدارة';
$strPhp = 'أنشئ شيفرة PHP';
$strPmaDocumentation = 'مستندات وثائقيه لـ phpMyAdmin (بالإنجليزية)';
$strPmaUriError = 'المتغير <span dir="ltr"><tt>$cfg[\'PmaAbsoluteUri\']</tt></span> يجب تعديله في ملف الكوفيك !';
$strPortrait = 'طول الصفحة';
$strPos1 = 'بداية';
$strPrevious = 'سابق';
$strPrimaryKeyHasBeenDropped = 'لقد تم حذف المفتاح الأساسي';
$strPrimaryKeyName = 'إسم المفتاح الأساسي يجب أن يكون أساسي... PRIMARY!';
$strPrimaryKeyWarning = '("الأساسي" <b>يجب</b> يجب أن يكون الأسم <b>وأيضاً فقط</b> المفتاح الأساسي!)';
$strPrimary = 'أساسي';
$strPrintViewFull = 'عرض الطباعة (مع النصوص الكاملة).';
$strPrintView = 'عرض نسخة للطباعة';
$strPrint = 'إطبع';
$strPrivDescAllPrivileges = 'يتضمّن كل الصلاحيّات عدا GRANT.';
$strPrivDescAlter = 'يسمح بتعديل بناء الجداول الموجودة مسبقاً.';
$strPrivDescCreateDb = 'يسمح بإنشاء قواعد بيانات وجداول جديدة.';
$strPrivDescCreateTbl = 'يسمح بإنشاء جداول جديدة.';
$strPrivDescCreateTmpTable = 'يسمح بإنشاء جداول مؤقّتة.';
$strPrivDescDelete = 'يسمح بحذف البيانات.';
$strPrivDescDropDb = 'يسمح بحذف قواعد البيانات.';
$strPrivDescDropTbl = 'يسمح بحذف الجداول.';
$strPrivDescExecute = 'يسمح بتشغيل الإجراءات المخزّنة )stored procedures(، ليس له أي تأثير في هذه النسخة من خادم MySQL.';
$strPrivDescFile = 'يسمح باستيراد وتصدير البيانات من وإلى الملفّات.';
$strPrivDescGrant = 'يسمح بإضافة المستخدمين والصلاحيات دون إعادة قراءة جداول الصلاحيات.';
$strPrivDescIndex = 'يسمح بإنشاء وحذف الفهارس.';
$strPrivDescInsert = 'يسمح بإضافة واستبدال البيانات.';
$strPrivDescLockTables = 'يسمح بقفل الجداول للعمليّة الحاليّة.';
$strPrivDescMaxConnections = 'يحدّ من عدد الاتصالات الجديدة التي يمكن للمستخدم فتحها بكل ساعة.';
$strPrivDescMaxQuestions = 'يحدّ عدد الاستعلامات التي يستطيع المستخدم إرسالها إلى الخادم بكل ساعة.';
$strPrivDescMaxUpdates = 'يحدّ عدد الأوامر التي ينفذها المستخدم بكل ساعة، والتي تغير أي جدول أو قاعدة بيانات.';
$strPrivDescProcess3 = 'يسمح بإيقاف عمليّات المستخدمين الأخرين.';
$strPrivDescProcess4 = 'يسمح بعرض الاستعلام بالكامل في سرد العمليات.';
$strPrivDescReferences = 'ليس له أي تأثير في نسخة MySQL الحاليّة.';
$strPrivDescReload = 'يسمح بإعادة تحميل إعدادات الخادم وتفريغ كاش الخادم.';
$strPrivDescReplClient = 'يعطي الحق للمستخدم بالسؤال عن مكان وجود slaves/masters.';
$strPrivDescReplSlave = 'مطلوب لتوابع لاستنساخ.';
$strPrivDescSelect = 'يسمح بقراءة البيانات.';
$strPrivDescShowDb = 'يسمح بالوصول لقائمة أسماء جميع قواعد البيانات.';
$strPrivDescShutdown = 'يسمح بإيقاف عمل الخادم.';
$strPrivDescSuper = 'يسمح بالاتصال، حتى لو وصل حدّ عدد الاتصالات للأقصى.، مطلوب للمهام الإدارية كضبط الإعدادات العامّة other users.';
$strPrivDescUpdate = 'يسمح بتعديل البيانات.';
$strPrivDescUsage = 'لا صلاحيات.';
$strPrivilegesReloaded = 'تم إعادة قراءة الصلاحيات بنجاح.';
$strPrivileges = 'الإمتيازات';
$strProcesses = 'معالَجات';
$strProcesslist = 'سرد العمليّات';
$strPutColNames = 'ضع أسماء الحقول في السطر الأول';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'إستعلام بواسطة مثال';
$strQueryFrame = 'نافذة الاستعلام';
$strQueryOnDb = 'في قاعدة البيانات SQL-إستعلام <b>%s</b>:';
$strQuerySQLHistory = 'نصوص SQL سابقة';
$strQueryStatistics = '<b>إحصائيات الاستعلام</b>: %s استعلام أرسل إلى الخادم منذ تشغيله.';
$strQueryTime = 'استغرف الاستعلام %01.4f ثانية';
$strQueryType = 'نوع الاستعلام';
$strQueryWindowLock = 'لا تخزن على هذا الاستعلام من خارج النافذة';

$strReceived = 'استُلِم';
$strRecords = 'التسجيلات';
$strReferentialIntegrity = 'تحديد التكامل المرجعي:';
$strRelationalSchema = 'بناء الإرتباطات';
$strRelationNotWorking = 'تمّ تعطيل المزايا الإضافية للعمل بالجداول المترابطة. لمعرفة السبب إضغط %sهنا%s.';
$strRelations = 'الروابط';
$strRelationView = 'عرض الروابط';
$strReloadingThePrivileges = 'قيد إعادة قراءة الصلاحيات.';
$strRemoveSelectedUsers = 'إحذف المستخدمين المحددين';
$strRenameTableOK = 'تم تغيير إسمهم إلى %s  جدول%s';
$strRenameTable = 'تغيير إسم جدول إلى';
$strRepairTable = 'إصلاح الجدول';
$strReplaceNULLBy = 'استبدل NULL بـ';
$strReplaceTable = 'إستبدال بيانات الجدول بالملف';
$strReset = 'إلغاء';
$strResourceLimits = 'حدود المصادر';
$strReType = 'أعد كتابه';
$strRevokeAndDeleteDescr = 'سوف تبقى الصلاحية USAGE لدى المستخدمين حتى يتم إعادة قراءة الصلاحيات.';
$strRevokeAndDelete = 'استرجع كل الصلاحيات الفعالة من المستخدمين ثم احذفهم بعد ذلك.';
$strRevokeMessage = 'لقد أبطلت الأمتيازات لـ %s';
$strRevoke = 'إبطال';
$strRowLength = 'طول الصف';
$strRowsFrom = 'صفوف تبدأ من';
$strRowSize = ' مقاس الصف ';
$strRowsModeFlippedHorizontal = ')عناوين ملتفّة( أفقياً';
$strRowsModeHorizontal = 'أفقي';
$strRowsModeOptions = ' %s و إعادة الرؤوس بعد %s حقل';
$strRowsModeVertical = 'عمودي';
$strRowsStatistic = 'إحصائيات';
$strRows = 'صفوف';
$strRunning = ' على المزود %s';
$strRunQuery = 'إرسال الإستعلام';
$strRunSQLQuery = 'تنفيذ إستعلام/إستعلامات SQL على قاعدة بيانات %s';
$strRussian = 'الروسية';

$strSaveOnServer = 'إحفظ على الخادم في الدليل %s';
$strSave = 'حفــظ';
$strScaleFactorSmall = 'نسبة الحجم المحددة صغيرة جدا لملائمة المخطط في صفحة واحدة.';
$strSearchFormTitle = 'إبحث في قاعدة البيانات';
$strSearchInTables = 'داخل الجدول)الجداول(:';
$strSearchNeedle = 'الكلمات أو القيم المطلوب البحث عنها (wildcard: "%"):';
$strSearchOption1 = 'على الأقل أحد الكلمات';
$strSearchOption2 = 'كل الكلمات';
$strSearchOption3 = 'الجملة بالضبط';
$strSearchOption4 = 'كصيغة مطابقة';
$strSearchResultsFor = 'إبحث في النتائج عن "<i>%s</i>" %s:';
$strSearchType = 'إبحث:';
$strSearch = 'إبحث';
$strSecretRequired = 'يحتاج ملف الإعداد الآن إلى كلمة المرور السريّة.';
$strSelectADb = 'إختر قاعدة بيانات من القائمة';
$strSelectAll = 'تحديد الكل';
$strSelectFields = 'إختيار حقول (على الأقل واحد):';
$strSelectNumRows = 'في الإستعلام';
$strSelectTables = 'إختر الجداول';
$strSend = 'حفظ كملف';
$strSent = 'أُرسِل';
$strServerChoice = 'إختيار الخادم';
$strServerStatusUptime = 'مضى على عمل خادم MySQL مدة %s. بدأ العمل في %s.';
$strServerStatus = 'بيانات التشغيل';
$strServerTabVariables = 'متغيّرات';
$strServerTrafficNotes = '<b>سيْر الخادم</b>: تظهر هذه الجداول إحصائيات سيْر بيانات الشبكة لهذا الخادم منذ تشغيله.';
$strServerVars = 'متغيّرات وأعدادات الخادم';
$strServerVersion = 'إصدارة المزود';
$strServer = 'خادم';
$strSessionValue = 'قيمة الجلسة';
$strSetEnumVal = 'إذا كان نوع الحقل هو "enum" أو "set", الرجاء إدخال القيم بإستخدام هذا التنسيق: \'a\',\'b\',\'c\'...<br />إذا كنت تحتاج بأن تضع علامة الشرطه المائله لليسار ("\") أو علامة الإقتباس الفرديه ("\'") فيما بين تلك القيم, إجعلها كشرطه مائله لليسار (مثلاً \'\\\\xyz\' أو \'a\\\'b\').';
$strShowAll = 'شاهد الكل';
$strShowColor = 'أظهر اللون';
$strShowDatadictAs = 'تنسيق قامون البيانات';
$strShowFullQueries = 'إعرض الاستعلامات كاملة';
$strShowGrid = 'أظهر تخطيط الجدول';
$strShowingRecords = 'مشاهدة السجلات ';
$strShowPHPInfo = 'عرض المعلومات المتعلقة ب  PHP';
$strShowTableDimension = 'إظهار أبعاد الجداول';
$strShowTables = 'شاهد الجدول';
$strShowThisQuery = ' عرض هذا الإستعلام هنا مرة أخرى ';
$strShow = 'عرض';
$strSimplifiedChinese = 'الصينية المبسطة';
$strSingly = '(فردي)';
$strSize = 'الحجم';
$strSortByKey = 'رتّب حسب المفتاح';
$strSort = 'تصنيف';
$strSpaceUsage = 'المساحة المستغلة';
$strSplitWordsWithSpace = 'الكلمات مفصولة بحرف مسافة (" ").';
$strSQLExportType = 'نوع التصدير';
$strSQLParserBugMessage = 'هناك احتمال أنك عثرت على خلل في مدققّ SQL. رجاءً اختبر استعلامك بدقّة، وتأكّد من أن علامات التنصيص صحيحة ومتطابقة. بعض أسباب الإخفاق الأخرى قد تكون أنك تحاول تحميل ملف يحتوي على بيانات غير نصّية خارج منطقة التنصيص. يمكنك أيضاً تجربة استعلامك بواسطة سطر أوامر MySQL. قد تساعدك رسالة خطأ خادم MySQL أدناه، إن كانت هناك واحدة، على تشخيص المشكلة. إن بقي هناك مشاكل أو إن أخفق المدقّق في حين نجح استخدام سطر الأوامر، رجاءً قلّص حجم استعلامك لاستعلام واحد يسبب المشكلة، وقم بإرسال تقرير خلل مع جزء البيانات في منطقة القصّ أدناه:';
$strSQLParserUserError = 'يبدو أن هناك خطأ في استعلام SQL. سوف تساعدك رسالة الخطأ من خادم MySQL أدناه في تشخيص المشكلة، إن كان هناك واحدة،.';
$strSQLQuery = 'إستعلام-SQL';
$strSQLResult = 'ناتج استعلام SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'معرّف غير صالح';
$strSQPBugUnclosedQuote = 'علامة تنصيص غير مغلقة';
$strSQPBugUnknownPunctuation = 'نص تنقيط غير معروف';
$strStatCheckTime = 'التحقق الأخير';
$strStatCreateTime = 'الإنشاء';
$strStatement = 'أوامر';
$strStatUpdateTime = 'التحديث الأخير';
$strStatus = 'وضْع';
$strStrucCSV = 'بيانات CSV';
$strStrucData = 'البنية والبيانات';
$strStrucExcelCSV = 'بيانات CSV لبرنامج ميكروسوفت إكسل';
$strStrucOnly = 'البنية فقط';
$strStructPropose = 'اقترح بناء الجدول';
$strStructure = 'بناء';
$strSubmit = 'إرسال';
$strSuccess = 'الخاص بك تم تنفيذه بنجاح SQL-إستعلام';
$strSum = 'المجموع';
$strSwedish = 'السويدية';
$strSwitchToTable = 'بدّل إلى الجدول المنسوخ';

$strTableComments = 'تعليقات على الجدول';
$strTableEmpty = 'إسم الجدول فارغ!';
$strTableHasBeenDropped = 'جدول %s حُذفت';
$strTableHasBeenEmptied = 'جدول %s أُفرغت محتوياتها';
$strTableHasBeenFlushed = 'لقد تم إعادة تحميل الجدول %s  بنجاح';
$strTableMaintenance = 'صيانة الجدول';
$strTableOfContents = 'جدول المحتويات';
$strTableOptions = 'خيارات الجدول';
$strTables = '%s  جدول (جداول)';
$strTableStructure = 'بنية الجدول';
$strTable = 'الجدول ';
$strTblPrivileges = 'صلاحيات خاصة بالجدول';
$strTextAreaLength = ' بسبب طوله,<br /> فمن المحتمل أن هذا الحقل غير قابل للتحرير ';
$strThai = 'التايلندية';
$strThisHost = 'هذا المضيف';
$strThreadSuccessfullyKilled = 'تم إيقاف العمليّة %s بنجاح.';
$strTime = 'وقت';
$strToggleScratchboard = 'toggle scratchboard';
$strTotalUC = 'مجموع كلّي';
$strTotal = 'المجموع';
$strTraditionalChinese = 'الصينية التقليدية';
$strTraffic = 'بيانات سير';
$strTransformation_image_jpeg__inline = 'يظهر صورة مصغرة للضغط عليها، الخيارات:  العرض، الارتفاع بالبكسل )ويبقي التناسب الأصلي للحجم(.';
$strTransformation_image_jpeg__link = 'يظهر رابطاً لهذه الصورة (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'إعرض صور/jpeg: بنفس السطر';
$strTransformation_text_plain__external = 'لينكس فقط: يشغّل تطبيقاً خارجياً و يقوم بتغذية بيانات الحقل عبر المدخل الافتراضي. يسترجع مخرجات التطبيق الافتراضية. القيمة الافتراضية هي Tidy، كي تطبع شيفرة نص HTML بشكل جميل. لأسباب أمنية، عليك أن تقوم بتعديل الملف libraries/transformations/text_plain__external.inc.php وإضافة الأدوات التي تريد أن تسمح لها بالعمل. الخيار الأول عند ذلك هو رقم البرنامج الذي تريد أن تستخدمه والخيار الثاني هو المتغيرات للبرنامج. سوف يقوم الخيار الثالث، إن حدد بقيمة 1، بتحويل المخرجات باستخدام htmlspecialchars() )القيمة الافتراضية 1(. متغير رابع، إن حدد بقيمة 1 سوف يضيف الصفة NOWRAP إلى الخلية الحاوية حتى يصبح المخرج بأكمله بدن إعادة تنسيق )القيمة الافتراضية 1(.';
$strTransformation_text_plain__formatted = 'يُبقي التنسيق الأصلي للحقل. لا يتم عمل أي Escaping.';
$strTransformation_text_plain__imagelink = 'تظهر صورة ورابط، يتحوي الحقل على إسم الملف، الخيار الأول هو سابقة مثل "http://domain.com/"، والخيار الثاني هو العرض بالبكسل، والثالث هو الارتفاع.';
$strTransformation_text_plain__link = 'تظهر رابطاً، الحقل يحتوي إسم الملف، والخيار الأول هو سابقة مثل "http://domain.com/"، والخيار الثاني هو العنوان للرابط.';
$strTransformation_text_plain__substr = 'يظهر فقط جزءً من النص. الخيار الأول يحدد مكان بدء ظهور النص )صفر بشكل افتراضي(. الخيار الثاني هو تعديل كمّ النص المسترجع. إن كان فارغاً، يسترجع كل النص الباقي. الخيار الثالث يعرف أي من الأحرف سوف تضاف إلى المخرجات عند استرجاع جزء من النص )... بشكل افتراضي(.';
$strTruncateQueries = 'إحذف الاستعلامات المعروضة';
$strTurkish = 'التركية';
$strType = 'النوع';

$strUkrainian = 'الأكرانية';
$strUncheckAll = 'إلغاء تحديد الكل';
$strUnicode = 'يونيكود';
$strUnique = 'مميز';
$strUnknown = 'غير معروفة';
$strUnselectAll = 'إلغاء تحديد الكل';
$strUpdatePrivMessage = 'لقد جددت وحدثت الإمتيازات لـ %s.';
$strUpdateProfileMessage = 'لقد تم تجديد العرض الجانبي.';
$strUpdateQuery = 'تجديد إستعلام';
$strUpdComTab = 'رجاء راجع التوثيق لكيفية تحديث جدول Column_comments.';
$strUpgrade = 'عليك التحديث إلى %s %s أو لاحقا.';
$strUsage = 'المساحة';
$strUseBackquotes = 'حماية أسماء الجداول و الحقول ب "`" ';
$strUseHostTable = 'استخدم الجدول المضيف';
$strUserAlreadyExists = 'إسم المستخدم %s موجود مسبقاً!';
$strUserEmpty = 'إسم المستخدم فارغ!';
$strUserName = 'إسم المستخدم';
$strUserNotFound = 'المستخدم المحدد غير موجود في جدول الصلاحيات.';
$strUserOverview = 'معلومات المستخدم';
$strUsersDeleted = 'تم حذف المستخدمين المحددين بنجاح.';
$strUsersHavingAccessToDb = 'المستخدمين ذوي صلاحية الوصول إلى &quot;%s&quot;';
$strUser = 'المستخدم';
$strUseTables = 'إستخدم الجدول';
$strUseTextField = 'استخدم حقل نصّ';
$strUseThisValue = 'استخدم هذه القيمة';

$strValidateSQL = 'التحقق من استعلام SQL';
$strValidatorError = 'لم يمكن تشغيل محقق SQL. الرجاء التأكد مما إذا كنت ثبّتْت إضافات PHP كما هو مشروح في %sالتوثيق%s.';
$strValue = 'القيمه';
$strVar = 'متغيّر';
$strViewDumpDatabases = 'إعرض أو إحفظ بناء قواعد البيانات.';
$strViewDumpDB = 'عرض بنية قاعدة البيانات';
$strViewDump = 'عرض بنية الجدول ';

$strWebServerUploadDirectoryError = 'الدليل الذي حددته لتحميل عملك لا يمكن الوصول إليه.';
$strWebServerUploadDirectory = 'دليل تحميل الملفات على خادم الشبكة';
$strWelcome = 'أهلاً بك في %s';
$strWestEuropean = 'أوروبا الغربية';
$strWildcard = 'حرف شامل';
$strWindowNotFound = 'لم يمكن تحديث نافذة المتصفح المستهدفة. يبدو أنك أغلقت الرئيسية أو أن مستعرضك يمنع التحديث عبر النوافذ بسبب إعدادات الأمان.';
$strWithChecked = ': على المحدد';
$strWrongUser = 'خطأ إسم المستخدم/كلمة السر. الدخول ممنوع.';

$strXML = 'XML';

$strYes = 'نعم';

$strZeroRemovesTheLimit = 'ملاحظة: تغيير هذه الخيارات للرقم 0 )صفر( يلغي الحدّ.';
$strZip = '"zipped" "مضغوط"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
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
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
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
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
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
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
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
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
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
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

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
