<?php
/* $Id: azerbaijani-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// tercümedeki eksiklerimi ve ya sehv olduğunu düşündüyünüz yerleri shehriyari@trcomm.net adresine göndere bilersiniz...
// Şehriyar İmanov 30 Avqust 2003... Shehi

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bayt', 'KB', 'MB', 'QB', 'TB', 'PB', 'EB');

$day_of_week = array('Baz', 'Baz Ert', 'Çerş Axş', 'Çerş', 'Cüme Axş', 'Cüme', 'Şen');
$month = array('Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyun', 'İyul', 'Avq', 'Sent', 'Okt', 'Noy', 'Dek');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y saat %H:%M';
$timespanfmt = '%s gün, %s saat, %s deqiqe ve %s saniye';

$strAbortedClients = 'Dayandırılmış Elaqeler';
$strAccessDenied = 'Giriş Tesdiq Edilmedi';
$strAction = 'Fealiyyetler';
$strAddAutoIncrement = 'AUTO_INCREMENT deyeri elave et';
$strAddDeleteColumn = 'Sahe Sütunlarını Elave Et/Sil';
$strAddDeleteRow = 'Kriteria Setirlerini Elave Et/Sil';
$strAddHeaderComment = 'Başlığa xülase me\'lumatı elave et (\\n yeni setire keçir)';
$strAddIntoComments = 'Xülaseye elave et';
$strAddNewField = 'Yeni sahe elave et';
$strAddPrivilegesOnDb = 'Aşağıdakı me\'lumat bazası üçün selahiyyet müeyyen et';
$strAddPrivilegesOnTbl = 'Aşağıdakı cedvel üçün selahiyyetler müeyyen et';
$strAddSearchConditions = 'Axtarış şertlerini gir ("where" ifadesinin esas metni):';
$strAddToIndex = 'İndekse &nbsp;%s&nbsp;sütun elave et';
$strAddUserMessage = 'Yeni istifadeçi elave etdiniz.';
$strAddUser = 'Yeni İstifadeçi elave Et';
$strAdministration = 'Administrasiya';
$strAffectedRows = 'Deyişen setir sayı:';
$strAfterInsertBack = 'Evvelki sehifeye qayıt';
$strAfterInsertNewInsert = 'Teze bir setir daha gir';
$strAfterInsertNext = 'Bir sonrakı setre keç';
$strAfterInsertSame = 'Bu sehifeye geri dön';
$strAfter = 'Sonra: %s';
$strAll = 'All';
$strAllTableSameWidth = 'eyni enli bütün cedveller gösterilsinmi?';
$strAlterOrderBy = 'Cedvel sırasına buna göre yeniden qur';
$strAnalyzeTable = 'Cedveli analiz et';
$strAnd = 'Ve';
$strAnIndex = '%s üzerine indeks elave edildi';
$strAny = 'Her hansı';
$strAnyHost = 'Her hansı host';
$strAnyUser = 'Her hansı istifadeçi';
$strAPrimaryKey = '%s üzerine Birinci Dereceli Açar elave edildi.';
$strArabic = 'Ereb';
$strArmenian = 'Ermeni';
$strAscending = 'Artan sırada';
$strAtBeginningOfTable = 'Cedvelin başına';
$strAtEndOfTable = 'Cedvelin sonuna';
$strAttr = 'Xüsusiyyetler';
$strAutomaticLayout = 'Automatik şablon';

$strBack = 'Geri';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - deyişiklik etme';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = 'Bookmark-lanmış SQL sorğusu';
$strBookmarkThis = 'Bu SQL sorğusunu bookmark-la';
$strBookmarkView = 'Sadece göster';
$strBrowse = 'İçindekiler';
$strBulgarian = 'Bolqar Dili';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.';
$strBzip = '"bzip"lenmiş';

$strCannotLogin = 'MySQL server-e gire bilmirem';
$strCantLoadRecodeIconv = 'Charset çevirmeleri üçün lazım olan iconv ve ya recode uzantılarını yükleye bilmirem; ya php-ni bu uzantıları istifade ede bilmesi üçün yeniden quraşdırın ya da phpMyAdmin-de charset çevirme xüsusiyyetini söndürün.';
$strCantLoad = '%s uzantısını (extension) yükleye bilmirem,<br />xahiş edirem PHP Konfiqurasiyanı gözden keçir.';
$strCantRenameIdxToPrimary = 'İndeksi Birinci Dereceli (PRIMARY) olaraq yeniden adlandıra bilmirem!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Cardinality';
$strCentralEuropean = 'Merkezi Avropa';
$strChangeCopyModeCopy = '... köhnesini saxla.';
$strChangeCopyModeDeleteAndReload = ' ... istifadeçi cedvellerinden köhnesini sil ve ardından selahiyyetleri yeniden yükle.';
$strChangeCopyMode = 'Eyni selahiyyetlere sahib yeni istifadeçi qur ve ...';
$strChangeCopyModeJustDelete = ' ... istifadeçi cedvellerinden köhnesini sil.';
$strChangeCopyModeRevoke = ' ... köhne istifadeçinin selahiyyetlerini elinden alaraq onu sil.';
$strChangeCopyUser = 'Sistem Giriş Me\'lumatını Deyişdir / İstifadeçini Kopyala';
$strChange = 'Deyişdir';
$strChangeDisplay = 'Gösterilecek Saheni Seç';
$strChangePassword = 'Parolu Deyişdir';
$strCharset = 'Charset';
$strCharsetOfFile = 'Faylın Charset-i:';
$strCheckAll = 'Hamısını Seç';
$strCheckPrivsLong = '&quot;%s&quot; bazası üçün selahiyyetleri gözden keçir.';
$strCheckPrivs = 'Selahiyyetleri Gözden Keçir';
$strCheckTable = 'Cedveli yoxla';
$strChoosePage = 'Xahiş edirem, deyişdirilecek Sehifeni seç';
$strColComFeat = 'Sütun Qısa İzahatını Deyişdir';
$strColumnNames = 'Sütun adları';
$strColumnPrivileges = 'Sütunaxas Selahiyyetler';
$strCommand = 'Komanda Tipi';
$strComments = 'Qısa İzahatlar';
$strCompleteInserts = 'Tam girişli';
$strCompression = 'Sıxışdırma';
$strConfigFileError = 'phpMyAdmin konfiqurasiya faylınızı oxuya bilmedi!<br />Bunun sebebi fayldakı parse error ya da faylın mövcud olmaması ola biler.<br />Xahiş edirem aşağıdakı link-i istifade ederek konfiqurasiya faylını çağırın ve aldığınız php xeta mesaj(lar)ını oxuyun. Bir çox halda ya tek dırnaq ya da nöqteli vergül eksikliyi vardır.<br />Eger boş sehife ile qarşılaşsanız, demek ki, her şey qaydasındadır.';
$strConfigureTableCoord = 'Xahiş edirem, %s cedveli üçün koordinatları yeniden müeyyen et.';
$strConnectionError = 'Elaqe qura bilmirem: yalnış quruluş.';
$strConnections = 'Elaqeler';
$strCookiesRequired = 'Sisteme girebilmeniz üçün çerez faylları (cookie-ler) aktiv olmalıdır.';
$strCopyTable = 'Cedveli kopyala (me\'lumat bazası<b>.</b>cedvel):';
$strCopyTableOK = '%s cedveli %s - e kopyalandı.';
$strCopyTableSameNames = 'Cedveli eynisinin üzerine kopyalaya bilmerem!';
$strCouldNotKill = 'phpMyAdmin %s emeliyyat thread-ini söndüre (kill) bilmedi. Böyük ehtimal artıq söndürülmüşdür.';
$strCreateIndex = '&nbsp;%s&nbsp;sütunda indeks yarat';
$strCreateIndexTopic = 'Yeni indeks qur';
$strCreateNewDatabase = 'Yeni me\'lumat bazası qur';
$strCreateNewTable = '%s bazasında yeni cedvel qur';
$strCreatePage = 'Yeni Sehife qur';
$strCreatePdfFeat = 'PDF-lerin qurulması';
$strCreate = 'Qur';
$strCreationDates = 'Quruluş/Deyişdirilme/Yoxlama tarixleri';
$strCriteria = 'Kriteriyalar';
$strCroatian = 'Xorvat Dili';
$strCyrillic = 'Kiril';
$strCzechSlovak = 'Çex-Slovak';

$strDatabaseExportOptions = 'Me\'lumat bazası eksport variantları';
$strDatabaseHasBeenDropped = '%s bazası leğv edildi.';
$strDatabase = 'Me\'lumat Bazası';
$strDatabasesDropped = '%s bazası müveffeqiyyetle leğv edildi.';
$strDatabases = 'Me\'lumat Bazaları';
$strDatabasesStatsDisable = 'Statistikaları Söndür';
$strDatabasesStatsEnable = 'Statistikaları Aktivleşdir';
$strDatabasesStatsHeavyTraffic = 'Qeyd: Me\'lumat Bazası statistikalarını burada aktivleşdirmekle webserver-le MySQL server arasında ağır neqliyyata sebeb ola bilersiniz.';
$strDatabasesStats = 'Me\'lumat Bazası Statistikaları';
$strDataDict = 'Me\'lumat lüğeti';
$strData = 'Me\'lumat';
$strDataOnly = 'Sadece me\'lumat';
$strDBComment = 'Baza qısa izahatı: ';
$strDbPrivileges = 'Me\'lumat Bazasına Mexsus Selahiyyetler';
$strDbSpecific = 'bazayaxas';
$strDefault = 'Başlanğıc deyeri';
$strDefaultEngine = '%s bu MySQL serverinde esas depolama motoru olaraq qurulmuşdur.';
$strDefaultValueHelp = 'Başlanğıc deyer girerken, sadece deyeri girin, ters kesr escape-leme ya da dırnaqdan istifade etmeyin, bu formatı te\'qib edin: a';
$strDeleteAndFlush = 'Bütün istifadeçileri sil ve ardından selahiyyetleri yeniden yükle.';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur, amma selahiyyetlerin yeniden yüklenmesi zaman teleb ede biler.';
$strDeletedRows = 'Silinen setir sayı:';
$strDeleted = 'Setir silindi';
$strDelete = 'Sil';
$strDeleting = '%s silinir';
$strDelOld = 'Hal-hazırki sehifen artıq mövcud olmayan Cedvellere bağlıdır. Bu elaqelerin silinmesini istermisiniz?';
$strDescending = 'Azalan sırada';
$strDisabled = 'Söndürülüb';
$strDisplayFeat = 'Xüsusiyyetleri Göster';
$strDisplayOrder = 'Sıralama şekli:';
$strDisplayPDF = 'PDF sxemini göster';
$strDoAQuery = '"nümuneye göre sorğu" gönderin (xüsusi işare: "%")';
$strDocu = 'Dokumentasiya';
$strDoYouReally = 'Aşağıdakı sorğunu icra etdirmekten eminsiniz ';
$strDropDatabaseStrongWarning = 'Bütün bazanı YOX ETMEK üzeresiniz!';
$strDrop = 'Leğv et';
$strDropUsersDb = 'İstifadeçilerle eyni adlı me\'lumat bazalarını leğv et.';
$strDumpingData = 'Sxemi çıxarılan cedvel';
$strDumpSaved = 'Sxem %s faylına qeyd edildi.';
$strDumpXRows = '%s setri %s nömreli qeydden başlayaraq göster.';
$strDynamic = 'dinamik';

$strEdit = 'Deyişdir';
$strEditPDFPages = 'PDF Sehifelerini Deyişdir';
$strEditPrivileges = 'Selahiyyetleri Deyişdir';
$strEffective = 'Effektiv';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş netice çoxluğu gönderdi (ye\'ni sıfır setir).';
$strEnabled = 'Enabled';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Son';
$strEngineDisabled = '%s motoru bu serverde söndürülmüşdür.';
$strEngines = 'Motorlar';
$strEngineUnsupported = 'Bu MySQL server %s depolama motorunu desteklememektedir.';
$strEnglish = 'İngilis Dili';
$strEnglishPrivileges = ' Qeyd: MySQL selahiyyet adları ingilis dilinde ifade edilmişdir ';
$strError = 'Xeta';
$strEstonian = 'Eston Dili';
$strExcelEdition = 'Excel versiyası';
$strExplain = 'SQL-i İzah Et';
$strExport = 'Eksport';
$strExtendedInserts = 'Genişletilmiş girişli';
$strExtra = 'Elave Xüs.';

$strFailedAttempts = 'Uğursuz Cehdler';
$strFieldHasBeenDropped = '%s sahesi leğv edildi';
$strField = 'Sahe';
$strFieldsEnclosedBy = 'Saheler ehate edildiyi işare';
$strFieldsEscapedBy = 'Sahelerin escape edildiyi işare';
$strFields = 'Sahe sayı';
$strFieldsTerminatedBy = 'Sahelerin yox edildiyi (terminate) işare';
$strFileAlreadyExists = '%s faylı serverda onsuz da mövcuddur, ya faylın adını deyişdir ya da üzerine yazma variantlarını.';
$strFileCouldNotBeRead = 'Fayl oxuna bilmir';
$strFileNameTemplate = 'Fayl adı nomenklaturası';
$strFileNameTemplateRemember = 'nomenklaturanı unutma';
$strFixed = 'fixed';
$strFlushPrivilegesNote = 'Qeyd: phpMyAdmin istifadeçi selahiyyetlerini birbaşa MySQL-in selahiyyetler cedvellerinden almaqdadır. Eger elle nizamlamalar edilmişse, bu cedvellerin içerisindekiler webserver-in istifade etdiklerinden ferqli ola biler. Bu halda, davam etmeden evvel, selahiyyetleri yeniden yüklemelisiniz.';
$strFlushTable = 'Cedveli flush-la ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Formda eksik girilmiş deyer var!';
$strFullText = 'Tam Metnler (Full Text)';
$strFunction = 'Funksiya';

$strGenBy = 'Qurucu';
$strGeneralRelationFeat = 'Ümumi elaqe variantları';
$strGenTime = 'Hazırlanma Vaxtı';
$strGeorgian = 'Gürcü';
$strGlobalPrivileges = 'Qlobal selahiyyetler';
$strGlobal = 'qlobal';
$strGlobalValue = 'Qlobal deyer';
$strGo = 'Davam';
$strGrantOption = 'İcaze ver';
$strGzip = '"gzip"lenmiş';

$strHasBeenAltered = 'deyişdirildi.';
$strHasBeenCreated = 'quruldu.';
$strHaveToShow = 'Gösterilmesi üçün en az bir sütun seçmelisiniz';
$strHebrew = 'İbrani Dili';
$strHome = 'Başlanğıc';
$strHomepageOfficial = 'phpMyAdmin Resmi İnternet Sehifesi';
$strHostEmpty = 'Host adı boşdur!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macar Dili';

$strId = 'Nömre';
$strIdxFulltext = 'Tam metn (Fulltext)';
$strIgnore = 'Diqqete Alma';
$strImportFiles = 'Faylları import et';
$strIndexes = 'Indeksler';
$strIndexHasBeenDropped = '%s indeksi leğv edildi';
$strIndexName = 'İndex adı&nbsp;:';
$strIndex = 'İndeks';
$strIndexType = 'İndex tipi&nbsp;:';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Konfiqurasiya faylınızda MySQL başlanğıc deyerleri (parolsuz root istifadeçisi) mövcuddur ki, bu da tehlükesizlik nöqteyi nezerinden e\'tibarlı deyildir.';
$strInsertAsNewRow = 'Yeni setir olaraq elave et';
$strInsertedRowId = 'Elave edilen setir nömresi (id):';
$strInsertedRows = 'Elave edilen setir sayı:';
$strInsert = 'Elave et';
$strInUse = 'istifadede';

$strJumpToDB = '&quot;%s&quot; me\'lumat bazasına keç.';
$strJustDeleteDescr = '&quot;Silinmiş&quot; istifadeçiler selahiyyetler yeniden yüklenene qeder server-e gire bilecekler.';
$strJustDelete = 'Sadece olaraq selahiyyet cedvellerindeki istifadeçileri sil.';

$strKeepPass = 'Parolu deyişdirme';
$strKeyname = 'Açar söz';
$strKill = 'Söndür';

$strLandscape = 'Landşaft';
$strLatexCaption = 'Cedvel başlığı';
$strLatexContinuedCaption = 'Cedvel başlığının davamı';
$strLatexContinued = '(davamı)';
$strLatexIncludeCaption = 'Cedvel başlığını daxil et';
$strLatexLabel = 'Etiket açarı';
$strLaTeX = 'LaTeX';
$strLengthSet = 'Uzunluq/Deyerler*';
$strLimitNumRows = 'Sehife başına düşen setir sayı';
$strLinesTerminatedBy = 'Setir leğvedicisi (Lines terminated by)';
$strLinkNotFound = 'Link tapılmadı';
$strLinksTo = 'Links to';
$strLithuanian = 'Litva Dili';
$strLocalhost = 'Yerli';
$strLocationTextfile = 'tekst faylından yükleyerek';
$strLoginInformation = 'Sisteme Giriş Me\'lumatı';
$strLogin = 'Sisteme Giriş';
$strLogout = 'Sistemden Çıxış';
$strLogPassword = 'Parol:';
$strLogUsername = 'İstifadeçi Adı:';

$strMaximumSize = 'En çox: %s%s';
$strMIME_available_mime = 'Mövcud olan MIME-tipleri';
$strMIME_available_transform = 'Mövcud transformasiyalar';
$strMIME_description = 'Haqqında';
$strMIME_MIMEtype = 'MIME-tipi';
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformasiya variantları';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strModifications = 'Modifications have been saved';
$strModifyIndexTopic = 'Modify an index';
$strModify = 'Modify';
$strMoveTable = 'Cedveli daşı (me\'lumat bazası<b>.</b>cedvel):';
$strMoveTableOK = '%s cedveli %s - e daşınmışdır.';
$strMoveTableSameNames = 'Can\'t move table to same one!';
$strMyISAMMaxExtraSortFileSize = 'İndeks yaradılarken istifade olunan keçici faylların maksimum boyu';
$strMyISAMMaxSortFileSize = 'Keçici sıralama fayllarının maksimum boyu';
$strMyISAMRecoverOptions = 'Avtomatik qurtarma rejimi';
$strMyISAMSortBufferSize = 'Sıralama buferinin (keçici yaddaşının) boyu';
$strMySQLCharset = 'MySQL charset';
$strMySQLSaid = 'MySQL deyir: ';
$strMySQLShowProcess = 'Prosesleri göster';
$strMySQLShowStatus = 'MySQL runtime me\'lumatını göster';
$strMySQLShowVars = 'MySQL sistem deyişenlerini göster';

$strName = 'Adı';
$strNext = 'Sonrakı';
$strNoDatabases = 'Baza seçilmemişdir ve ya mövcud deyildir.';
$strNoDatabasesSelected = 'Heç bir baza seçilmemişdir.';
$strNoDescription = 'Haqqında me\'lumat (description) mövcud deyildir';
$strNoDetailsForEngine = 'Bu depolama motoru haqqında etrafli status me\'lumatı mövcud deyildir.';
$strNoDropDatabases = '"DROP DATABASE" ifadeleri söndürülmüşdür (disabled).';
$strNoExplain = 'SQL İzah Et-i Keç';
$strNoFrames = 'phpMyAdmin <b>frame-destekli</b> görüntüleyicilerle (browser) daha yaxşı işleyir.';
$strNoIndex = 'İndeks te\'yin edilmedi!';
$strNoIndexPartsDefined = 'İndeks qisimleri te\'yin edilmedi!';
$strNoModification = 'Deyişiklik Yoxdur';
$strNone = 'Heç biri';
$strNoOptions = 'Bu formatın variantları yoxdur';
$strNoPassword = 'Parol Yoxdur';
$strNoPermission = 'Webserver-in %s faylını saxlama izni yoxdur.';
$strNoPhp = 'PHP Kodunu Gösterme';
$strNoPrivileges = 'Selahiyyet çatışmazlığı';
$strNoRights = 'Burada olma haqqınız yoxdur!';
$strNoSpace = '%s faylını saxlamaq üçün lazım olan yer çatışmır.';
$strNoTablesFound = 'Me\'lumat bazasında cedvel yoxdur.';
$strNotNumber = 'Bu reqem deyildir!';
$strNotOK = 'Müveffeqiyyetsiz';
$strNotSet = '<b>%s</b> cedveli %s içerisinde ya <b>tapılmadı</b> ya da qurulmamışdır';
$strNoUsersFound = 'İstifadeçi(ler) tapılmadı.';
$strNoValidateSQL = 'SQL İfadesini Yoxlama';
$strNo = 'Xeyir';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s uyğunluq tapıldı (<i>%s</i> cedvelinde)';
$strNumSearchResultsTotal = '<b>Cemi:</b> <i>%s</i> uyğunluq';
$strNumTables = 'Cedveller';

$strOK = 'Müveffeqiyyetle';
$strOperations = 'Emeliyyatlar';
$strOptimizeTable = 'Cedveli optimallaşdır';
$strOr = 'ya da';
$strOverhead = 'Aşma deyeri';
$strOverwriteExisting = 'Mövcud fayl(lar)ın üzerine yaz';

$strPageNumber = 'Sehife Nömresi:';
$strPartialText = 'Qismi Metnler';
$strPasswordChanged = '%s üçün parol müveffeqiyyetle deyişdirilmişdir.';
$strPasswordEmpty = 'Parol boşdur!';
$strPasswordNotSame = 'Girdiyiniz parollar eyni deyil!';
$strPassword = 'Parol';
$strPdfDbSchema = '"%s" bazanın sxemi - Sehife %s';
$strPdfInvalidTblName = '"%s" cedveli mövcud deyil!';
$strPdfNoTables = 'Cedvel yoxdur';
$strPerHour = 'saatda';
$strPerMinute = 'deqiqede';
$strPerSecond = 'saniyede';
$strPHP40203 = 'Siz içerisinde ciddi multi-bayt strinqleri (mbstring) ile elaqedar xetalar olan PHP 4.2.3 versiyasını istifade edirsiniz. Etraflı melumat üçün PHP xeta raportu 19404-e baxın. PHP-nin bu versiyası PhpMyAdmin ile istifade üçün tövsiye edilmir.';
$strPhp = 'PHP Kodunu Hazırla';
$strPHPVersion = 'PHP Versiyası';
$strPmaDocumentation = 'phpMyAdmin dokumentasiyası (etraflı me\'lumat üçün)';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktivi PMA konfiqurasiya faylınızda QURULMAMIŞDIR!';
$strPortrait = 'Portret';
$strPos1 = 'Başla';
$strPrevious = 'Evvelki';
$strPrimary = 'Birinci Dereceli';
$strPrimaryKeyHasBeenDropped = 'Birinci dereceli açar leğv edildi';
$strPrimaryKeyName = 'Birinci dereceli açarın adı... BİRİNCİ DERECELİ (PRIMARY) olmalıdır!';
$strPrimaryKeyWarning = '("PRIMARY" sadece birinci dereceli açarın adı <b>olmalıdır</b>!)';
$strPrint = 'Çap et';
$strPrintView = 'Çap görüntüsü';
$strPrivDescAllPrivileges = 'GRANT-dan başqa bütün selahiyyetler daxildir.';
$strPrivDescAlter = 'Mövcud olan cedvellerin strukturunu deyişdirmeye icaze verir.';
$strPrivDescCreateDb = 'Yeni bazalar ve cedveller qurmağa icaze verir.';
$strPrivDescCreateTbl = 'Yeni cedveller qurmağa icaze verir.';
$strPrivDescCreateTmpTable = 'Keçici cedveller qurmağa icaze verir.';
$strPrivDescDelete = 'Me\'lumat silmeye icaze verir.';
$strPrivDescDropDb = 'Baza ve cedvel leğv etmeye icaze verir.';
$strPrivDescDropTbl = 'Cedvelleri leğv etmeye icaze verir.';
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.';
$strPrivDescFile = 'Allows importing data from and exporting data into files.';
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.';
$strPrivDescIndex = 'Allows creating and dropping indexes.';
$strPrivDescInsert = 'Allows inserting and replacing data.';
$strPrivDescLockTables = 'Allows locking tables for the current thread.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.';
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.';
$strPrivDescReferences = 'Has no effect in this MySQL version.';
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.';
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.';
$strPrivDescReplSlave = 'Needed for the replication slaves.';
$strPrivDescSelect = 'Allows reading data.';
$strPrivDescShowDb = 'Gives access to the complete list of databases.';
$strPrivDescShutdown = 'Allows shutting down the server.';
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.';
$strPrivDescUpdate = 'Allows changing data.';
$strPrivDescUsage = 'Selahiyyet te\'yin edilmedi.';
$strPrivilegesReloaded = 'The privileges were reloaded successfully.';
$strPrivileges = 'Selahiyyetler';
$strProcesses = 'Prosesler';
$strProcesslist = 'Proses Siyahısı';
$strPutColNames = 'Sahe adlarını birinci setre yerleşdir';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Sorğu';
$strQueryFrame = 'Sorğu penceresi';
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-tarixçesi';
$strQueryStatistics = '<b>Sorğu Statistikası</b>: Açıldıqdan bu yana, bu servere %s sorğu gönderilmişdir.';
$strQueryTime = 'sorğu %01.4f saniyede icra edildi';
$strQueryType = 'Sorğu tipi';

$strReceived = 'Alındı';
$strRecords = 'Setr sayı';
$strReferentialIntegrity = 'Check referential integrity:';
$strRelationalSchema = 'Relational schema';
$strRelationNotWorking = 'Elaqelendirilmiş cedveller üçün nezerde tutulmuş be\'zi xüsusiyyetler passivleşdirilmişdir. Sebebini aydınlaşdırmaq üçün %sbax%s.';
$strRelations = 'Relations';
$strRelationView = 'Relation view';
$strReloadingThePrivileges = 'Reloading the privileges';
$strRemoveSelectedUsers = 'Remove selected users';
$strRenameTable = 'Cedveli yeniden adlandır';
$strRenameTableOK = '%s cedveli %s olaraq yeniden adlandırılmışdır';
$strRepairTable = 'Cedveli te\'mir et';
$strReplaceNULLBy = 'NULL-u bununla deyişdir';
$strReplaceTable = 'Replace table data with file';
$strReset = 'Yenile';
$strResourceLimits = 'Resource limits';
$strReType = 'Re-type';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'Revoke';
$strRowLength = 'Sıra uzunluğu';
$strRowsFrom = 'setri göster; başlangıç qeydiyyat nömresi';
$strRowSize = ' Sıra boyu ';
$strRowsModeFlippedHorizontal = 'üfüqi (tekrarlanan başlıqlar)';
$strRowsModeHorizontal = 'üfüqi';
$strRowsModeOptions = '%s rejimde, başlıqlar %s blokdan bir tekrar ederek';
$strRowsModeVertical = 'şaquli';
$strRows = 'Sıra sayı';
$strRowsStatistic = 'Sıra Statistikası';
$strRunning = '%s üzerinde işlemektedir';
$strRunQuery = 'Emri İcra Et';
$strRunSQLQuery = '%s me\'lumat bazasına SQL sorğusu(-ları) gönder';

$strSaveOnServer = 'Serverdeki %s direktoriyasına qeyd et';
$strSave = 'Qeyd Et';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearch = 'Axtarış';
$strSearchFormTitle = 'Search in database';
$strSearchInTables = 'Inside table(s):';
$strSearchNeedle = 'Axtarmaq üçün söz(ler) ve ya deyer(ler) (wildcard: "%"):';
$strSearchOption1 = 'sözlerin en azından birini';
$strSearchOption2 = 'bütün sözleri';
$strSearchOption3 = 'tamamile eyni sözü';
$strSearchOption4 = 'requlyar ifade (regular expression) olaraq';
$strSearchResultsFor = '"<i>%s</i>" üçün axtarış neticeleri %s:';
$strSearchType = 'Tap:';
$strSelectADb = 'Me\'lumat bazası seç';
$strSelectAll = 'Hamısını Seç';
$strSelectFields = 'Sahe seçin (en az birini):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Select Tables';
$strSend = 'Fayl olaraq qeyd et';
$strSent = 'Gönderildi';
$strServerChoice = 'Quraşdırılmış Serverler';
$strServer = 'Server';
$strServerStatus = 'Runtime Me\'lumatı';
$strServerStatusUptime = 'Bu MySQL server %sdir işlemektedir. Server %s-de açılmışdır.';
$strServerTabVariables = 'Deyişenler';
$strServerTrafficNotes = '<b>Server Neqliyyatı</b>: Bu cedveller serverin açılışından beri elde edilen me\'lumat axışı miqdarını göstermektedir.';
$strServerVars = 'Server Deyişenleri Ve Variantları';
$strServerVersion = 'Server versiyası';
$strSessionValue = 'Sessiya deyeri';
$strSetEnumVal = 'Sahe tipi "enum" ve ya "set" ise, deyerleri bu formatda girin: \'a\',\'b\',\'c\'...<br />Eger bu deyerlerde ters-kesr ("\") ve ya tek dırnaq ("\'") istifade etmek isteyirsinizse, onları ters-kesrle escape-leyin (meselen \'\\\\xyz\' ve ya \'a\\\'b\').';
$strShowAll = 'Hamısını göster';
$strShowColor = 'Rengini göster';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowFullQueries = 'Emrleri Tam Olaraq Göster';
$strShowGrid = 'Show grid';
$strShow = 'Göster';
$strShowingRecords = 'Gösterilen setirler';
$strShowPHPInfo = 'PHPInfo() me\'lumatını göster';
$strShowTableDimension = 'Cedvellerin ölçülerini göster';
$strShowTables = 'Cedvelleri göster';
$strShowThisQuery = ' Bu sorğunu burada yene göster ';
$strSingly = '(tek-tek)';
$strSize = 'Boy';
$strSort = 'Sırala';
$strSpaceUsage = 'Yer istifadesi';
$strSplitWordsWithSpace = 'Sözler boşluq ifadesi (" ") ile ayrılmışdır.';
$strSQLExportType = 'Eksport şekli';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL sorğusu';
$strSQLResult = 'SQL result';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Invalid Identifer';
$strSQPBugUnclosedQuote = 'Unclosed quote';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strStatCheckTime = 'En son yoxlama';
$strStatCreateTime = 'Quruluş';
$strStatement = 'Variantlar';
$strStatUpdateTime = 'En son yenilenme';
$strStatus = 'Status';
$strStorageEngine = 'Depolama Motorları';
$strStorageEngines = 'MySQL Depolama Motorları';
$strStrucCSV = 'CSV verilenleri';
$strStrucData = 'Quruluş ve me\'lumat';
$strStrucExcelCSV = 'MS Excel verilenleri üçün CSV';
$strStrucOnly = 'Sadece quruluş';
$strStructPropose = 'Alternativ cedvel strukturu';
$strStructure = 'Quruluş';
$strSubmit = 'Submit';
$strSuccess = 'SQL sorğunuz müveffeqiyyetle icra edilmişdir';
$strSum = 'Cemi';
$strSwitchToTable = 'Kopyalanmış cedvele keç';

$strTable = 'Cedvel';
$strTableComments = 'Cedvel haqqında qısa izahat';
$strTableEmpty = 'Cedveli adı boşdur!';
$strTableHasBeenDropped = '%s cedveli leğv edildi';
$strTableHasBeenEmptied = '%s cedveli boşaldıldı';
$strTableHasBeenFlushed = '%s cedveli flush-landı';
$strTableMaintenance = 'Cedvel temizliyi';
$strTableOfContents = 'İçindekiler Cedveli';
$strTables = '%s cedvel';
$strTableStructure = 'Table structure for table';
$strTblPrivileges = 'Cedvelexas selahiyyetler';
$strTextAreaLength = ' Uzun olduğuna göre,<br /> bu sahedeki me\'lumatlar deyişdirilmeye biler ';
$strThisHost = 'Bu Host';
$strThreadSuccessfullyKilled = 'Thread %s uğurla söndürüldü (killed).';
$strTime = 'Müddet';
$strTotal = 'cemi';
$strTotalUC = 'Cemi';
$strTraditionalChinese = 'Enenevi Çin Dili';
$strTraffic = 'Neqliyyat';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';
$strTruncateQueries = 'Truncate Shown Queries';
$strTurkish = 'Türk Dili';
$strType = 'Tip';

$strUkrainian = 'Ukrayna Dili';
$strUncheckAll = 'Heç Birini Seçme';
$strUnique = 'Unikal';
$strUnselectAll = 'Heç birini seçme';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'Profil yenilendi.';
$strUpdateQuery = 'Sorğunu Yenile';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUsage = 'Miqdar';
$strUseBackquotes = 'Cedvel ve sahe adlarını tek dırnaq arasına al';
$strUseHostTable = 'Use Host Table';
$strUserAlreadyExists = '%s istifadeçisi mövcuddur!';
$strUserEmpty = 'İstifadeçi adı boş qaldı!';
$strUserName = 'İstifadeçi adı';
$strUserNotFound = 'The selected user was not found in the privilege table.';
$strUserOverview = 'User overview';
$strUsersDeleted = 'The selected users have been deleted successfully.';
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';
$strUser = 'İstifadeçi';
$strUseTables = 'Use Tables';
$strUseTextField = 'Use text field';

$strValidateSQL = 'SQL Tesdiqle';
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.';
$strValue = 'Deyer';
$strVar = 'Deyişen';
$strViewDump = 'Cedvelin sxemini göster';
$strViewDumpDatabases = 'Me\'lumat bazalarının sxemini göster';
$strViewDumpDB = 'Me\'lumat bazasının sxemini göster';

$strWebServerUploadDirectoryError = 'Upload işleri üçün te\'yin etdiyiniz direktoriya tapılmadı';
$strWebServerUploadDirectory = 'web-server upload direktoriyası';
$strWelcome = '%s - e Xoş Gelmişsiniz!';
$strWestEuropean = 'Qerbi Avropa';
$strWildcard = 'xüsusi işare';
$strWithChecked = 'Seçilenleri:';
$strWrongUser = 'Yanlış istifadeçi adı ve ya parol. Giriş tesdiq edilmedi.';

$strXML = 'XML';

$strYes = 'Beli';

$strZeroRemovesTheLimit = 'Qeyd: Bu variantları 0 (sıfır)-a çevirmek hüdudu (limiti) qaldıracaq.';
$strZip = '"zip"lenmiş';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBaltic = 'Baltic';  //to translate
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

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCharsets = 'Charsets';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCollation = 'Collation';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate
$strCzech = 'Czech';  //to translate

$strDanish = 'Danish';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDescription = 'Description';  //to translate
$strDictionary = 'dictionary';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEngineAvailable = '%s bu MySQL serverde quruludur.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

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
$strGerman = 'German';  //to translate
$strGreek = 'Greek';  //to translate

$strHandler = 'Handler';  //to translate

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
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
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

$strJapanese = 'Japanese';  //to translate
$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate
$strKorean = 'Korean';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLogServer = 'Server';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strPolish = 'Polish';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRomanian = 'Romanian';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate
$strRussian = 'Russian';  //to translate

$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
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
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwedish = 'Swedish';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableOptions = 'Table options';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThai = 'Thai';  //to translate
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
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnicode = 'Unicode';  //to translate
$strUnknown = 'unknown';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strUseThisValue = 'Use this value';  //to translate

$strVersionInformation = 'Version information';  //to translate
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
