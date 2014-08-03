<?php
/* $Id: turkish-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// phpMyAdmin Türkçe 01.09.2006 itibariyle önceki çeviriye göre çok daha 
// iyi bir çeviriyle yeniden yapılmıştır. 
// Birim ayarları Türkçe standartlarına göre tam ve doğru olarak ayarlanmıştır.
// Çeviren Burak Yavuz (BouRock@live.com)
// Çeviri sürümü phpMyAdmin 2.10.1.0

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

// MySQL manual language definition, this is optional, en will be used 
// if not defined
$mysql_4_1_doc_lang = 'tr';
$mysql_5_0_doc_lang = 'tr';
$mysql_5_1_doc_lang = 'tr';

$day_of_week = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$month = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y saat %H:%M:%S';
$timespanfmt = '%s gün, %s saat, %s dakika ve %s saniye';

$strAbortedClients = 'İptal edilen';
$strAccessDenied = 'Erişim engellendi';
$strAccessDeniedCreateConfig = 'Muhtemelen bunun sebebi yapılandırma dosyasını oluşturmadığınız içindir. Bir tane oluşturmak için %1$skurulum programcığı%2$s kullanmak isteyebilirsiniz.';
$strAccessDeniedExplanation = 'phpMyAdmin MySQL sunucusuna bağlanmayı denedi ama sunucu bağlantıyı reddetti. config.inc içindeki anamakine (host) adresini, kullanıcı adını ve parolayı kontrol edin ve MySQL sunucusunun yöneticisi tarafından verilen bilgiyle uyuştuğundan emin olun.';
$strAction = 'Eylem';
$strAddAutoIncrement = 'AUTO_INCREMENT değeri ekle';
$strAddClause = '%s komutu ekle';
$strAddConstraints = 'Kısıtlamaları ekle';
$strAddDeleteColumn = 'Alan Sütunları Ekle/Sil';
$strAddDeleteRow = 'Kriter Satırı Ekle/Sil';
$strAddFields = '%s alan ekle';
$strAddHeaderComment = 'Başlık içine özel yorum ekle (\\n satırları böler)';
$strAddIntoComments = 'Yorumların içine ekle';
$strAddNewField = 'Yeni alan ekle';
$strAddPrivilegesOnDb = 'Aşağıdaki veritabanına yetkileri ekle';
$strAddPrivilegesOnTbl = 'Aşağıdaki tabloya yetkileri ekle';
$strAddSearchConditions = 'Arama koşulu ekle ("where" koşulu gövdesi):';
$strAddToIndex = 'İndekse&nbsp;%s&nbsp;sütun ekle';
$strAddUserMessage = 'Yeni bir kullanıcı eklediniz.';
$strAddUser = 'Yeni Kullanıcı ekle';
$strAdministration = 'Yönetim';
$strAffectedRows = 'Etkilenen satırlar:';
$strAfterInsertBack = 'Önceki sayfaya geri dön';
$strAfterInsertNewInsert = 'Yeni başka bir satır ekle';
$strAfterInsertNext = 'Sonraki satırı düzenle';
$strAfterInsertSame = 'Bu sayfaya geri dön';
$strAfter = '%s tablosundan sonra';
$strAllowInterrupt = 'Küçük programcığın zaman sınırına yaklaşıldığını algılaması durumunda içeri aktarımı kesmeye izin ver. Bu büyük dosyaların içeri aktarımı için iyi bir yol olabilir, ancak hareketleri kesebilir.';
$strAllTableSameWidth = 'Bütün tablolar aynı genişlikte gösterilsin?';
$strAll = 'Tümü';
$strAlterOrderBy = 'Tablo sıralamasını şuna göre değiştir';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAndThen = 've';
$strAnd = 'Ve';
$strAngularLinks = 'Yönlendirmeli bağlantılar';
$strAnIndex = '%s üzerinde bir indeks eklendi';
$strAny = 'Herhangi';
$strAnyHost = 'Herhangi anamakine';
$strAnyUser = 'Herhangi kullanıcı';
$strApproximateCount = 'Yaklaşık olabilir. SSS 3.11\'e bakın';
$strAPrimaryKey = '%s üzerinde birincil anahtar eklendi';
$strArabic = 'Arapça';
$strArmenian = 'Ermenice';
$strAscending = 'Küçükten Büyüğe';
$strAtBeginningOfTable = 'Tablonun Başında';
$strAtEndOfTable = 'Tablonun Sonunda';
$strAttr = 'Öznitelikler';
$strAutomaticLayout = 'Otomatik yerleşim';

$strBack = 'Geri';
$strBaltic = 'Baltık';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - düzenlemeyiniz';
$strBinaryLog = 'Binari günlüğü';  
$strBinLogEventType = 'Olay türü';  
$strBinLogInfo = 'Bilgi';  
$strBinLogName = 'Günlük ismi';
$strBinLogOriginalPosition = 'Orijinal konum';
$strBinLogPosition = 'Konum';  
$strBinLogServerId = 'Sunucu ID'; 
$strBookmarkAllUsers = 'Bütün kullanıcıların bu işaretlemeye erişimlerine izin ver';
$strBookmarkCreated = 'İşaretleme %s oluşturuldu';
$strBookmarkDeleted = 'İşaretleme silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = 'SQL sorgusu işaretlendi';
$strBookmarkReplace = 'Mevcut aynı ismin işaretlemesini değiştir';
$strBookmarkThis = 'Bu SQL sorgusunu işaretle';
$strBookmarkView = 'Sadece göster';
$strBrowseDistinctValues = 'Farklı değerlere gözat';
$strBrowseForeignValues = 'Yabancı değerlere gözat';
$strBrowse = 'Gözat';
$strBufferPoolActivity = 'Ara Bellek Havuzu Etkinliği';
$strBufferPool = 'Ara Bellek Havuzu';
$strBufferPoolUsage = 'Ara Bellek Havuzu Kullanımı';
$strBufferReadMissesInPercent = 'Okuma kaçırması %';
$strBufferReadMisses = 'Okuma kaçırıyor';
$strBufferWriteWaitsInPercent = 'Yazma beklemesi %';
$strBufferWriteWaits = 'Yazma bekliyor';
$strBulgarian = 'Bulgarca';
$strBusyPages = 'Meşgul sayfalar';   
$strBzError = 'phpMyAdmin, bu PHP sürümündeki bozuk bir Bz2 uzantısından dolayı dökümü sıkıştıramadı. phpMyAdmin dizinindeki yapılandırma dosyanızın içindeki <code>$cfg[\'BZipDump\']</code> yönergesini <code>FALSE</code> \'a ayarlamanız kesinlikle önerilir. Eğer Bz2 sıkıştırma özelliklerini kullanmak istiyorsanız, daha yeni PHP sürümüne güncelleme yapmalısınız. Ayrıntılar için PHP hata raporu %s\'e bakın.';
$strBzip = '"bzip olarak"';

$strCalendar = 'Takvim';
$strCancel = 'İptal';
$strCanNotLoadExportPlugins = 'Dışarı aktarma eklentileri yüklenemedi, lütfen kurulumunuzu kontrol edin!';
$strCanNotLoadImportPlugins = 'İçeri aktarma eklentileri yüklenemedi, lütfen kurulumunuzu kontrol edin!';
$strCannotLogin = 'MySQL sunucusuna oturum açılamıyor';
$strCantLoad = '[a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] uzantısı yüklenemiyor. Lütfen PHP yapılandırmanızı kontrol edin.';
$strCantLoadRecodeIconv = 'Karakter grubu dönüşümü için gerekli olan iconv veya recode uzantıları yüklenemedi. Ya PHP\'yi bu uzantıları etkinleştirmek için yapılandırın ya da phpMyAdmin içinde karakter grubu dönüşümünü etkisizleştirin...';
$strCantRenameIdxToPrimary = 'İndeks\'i PRIMARY olarak yeniden adlandıramazsınız!';
$strCantUseRecodeIconv = 'Gerekli uzantılar yüklenmiş görünmesine rağmen, ne iconv, ne libinconv, ne de recode_string işlevi kullanılamadı. PHP yapılandırmanızı kontrol edin.';
$strCardinality = 'Önemlilik';
$strCaseInsensitive = 'büyük küçük harfe duyarsız';
$strCaseSensitive = 'büyük küçük harfe duyarlı';
$strCentralEuropean = 'Orta Avrupa';
$strChangeCopyMode = 'Aynı yetkilerle yeni bir kullanıcı oluştur ve ...';
$strChangeCopyModeCopy = '... eski olanı sakla.';
$strChangeCopyModeDeleteAndReload = '... eski olanı kullanıcı tablolarından sil ve sonra da yetkileri yeniden yükle.';
$strChangeCopyModeJustDelete = '... eski olanı kullanıcı tablolarından sil.';
$strChangeCopyModeRevoke = '... eski olandan bütün aktif yetkileri iptal et ve sonra da sil.';
$strChangeCopyUser = 'Otutum Açma Bilgisini değiştir / Kullanıcıyı kopyala';
$strChange = 'Değiştir';
$strChangeDisplay = 'Göstermek için alan seçin';
$strChangePassword = 'Parola değiştir';
$strCharset = 'Karakter grubu';
$strCharsetOfFile = 'Dosyanın karakter grubu:';
$strCharsetsAndCollations = 'Karakter Grupları ve Karşılaştırmalar';
$strCharsets = 'Karakter grupları';
$strCheckAll = 'Tümünü İşaretle';
$strCheckOverhead = 'Ek yükü olan tabloları kontrol et';
$strCheckPrivsLong = '&quot;%s&quot; veritabanı için yetkileri kontrol et.';
$strCheckPrivs = 'Yetkileri kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'Lütfen düzenlemek için sayfa seçin';
$strColComFeat = 'Sütun Yorumları gösteriliyor';
$strCollation = 'Karşılaştırma';
$strColumnNames = 'Sütun adları';
$strColumnPrivileges = 'Sütuna özgü yetkiler';
$strCommand = 'Komut';
$strCommentsForTable = 'TABLO YORUMLARI';
$strComments = 'Yorumlar';
$strCompatibleHashing = 'MySQL&nbsp;4.0 uyumlu'; 
$strCompleteInserts = 'Bütün eklemeler';
$strCompression = 'Sıkıştırma';
$strCompressionWillBeDetected = 'İçeri aktarılmış dosya sıkıştırması otomatik olarak bu dosya türlerinden algılanacak: %s';
$strConfigDefaultFileError = 'Varsayılan yapılandırma bundan yüklenemedi: "%1$s"';
$strConfigFileError ='phpMyAdmin yapılandırma dosyanızı okuyamadı!<br />Bu, eğer PHP, içinde ayrıştırma hatası bulursa ya da dosyayı bulamazsa meydana gelebilir.<br />Lütfen aşağıdaki bağlantıyı kullanarak yapılandırma dosyasını doğrudan çağırın ve aldığınız PHP hata mesaj(larını)ı okuyun. Çoğu durumda herhangi bir yerde tırnak veya noktalı virgül eksiktir.<br />Eğer boş bir sayfa karşınıza çıkıyorsa, her şey yolunda demektir.';
$strConfigureTableCoord = 'Lütfen %s tablosu için koordinatları yapılandırın';
$strConnectionError = 'Bağlanamıyor: geçersiz ayarlar.';
$strConnections = 'Bağlantılar';
$strConstraintsForDumped = 'Dökümü yapılmış tablolar için kısıtlamalar';
$strConstraintsForTable = 'Tablo kısıtlamaları';
$strControluserFailed = 'Yapılandırmanız içinde tanımlanmış denetim kullanıcıları için bağlantı başarısız.';
$strCookiesRequired = 'Bu kısmı geçmek için tanımlama bilgileri (Cookies) açık olmalı.';
$strCopyDatabaseOK = '%s veritabanı %s\'e kopyalandı.';
$strCopy = 'Kopyala';
$strCopyTableOK = '%s tablosu %s üzerine kopyalandı.';
$strCopyTableSameNames = 'Tablo aynısına kopyalanamıyor!';
$strCopyTable = 'Tabloyu şuna (veritabanı<b>.</b>tablo) kopyala:';
$strCouldNotKill = 'phpMyAdmin %s işlemini sonlandıramadı. Muhtemelen zaten kapatılmış.';
$strCreateDatabaseBeforeCopying = 'Kopyalamadan önce CREATE DATABASE (Veritabanı Oluştur)';
$strCreateIndex = '&nbsp;%s&nbsp;sütunda indeks oluştur.';
$strCreateIndexTopic = 'Yeni bir indeks oluştur';
$strCreateNewDatabase = 'Yeni veritabanı oluştur';
$strCreateNewTable = '%s veritabanında yeni tablo oluştur';
$strCreate = 'Oluştur';
$strCreatePage = 'Yeni bir sayfa oluştur';
$strCreatePdfFeat = 'PDF\'lerin oluşturulması';
$strCreateRelation = 'İlişki oluştur';
$strCreateTable  = 'Tablo oluştur';
$strCreateUserDatabase = 'Kullanıcı için veritabanı';
$strCreateUserDatabaseName = 'Aynı isimle veritabanı oluştur ve tüm yetkileri ver';
$strCreateUserDatabaseNone = 'Yok';
$strCreateUserDatabaseWildcard = 'Joker isimlere tüm yetkileri ver (kullanıcıadı_%)';
$strCreationDates = 'Oluşturma/Güncelleme/Kontrol tarihleri';
$strCriteria = 'Kriter';
$strCroatian = 'Hırvatça';
$strCSV = 'CSV';
$strCyrillic = 'Kiril';
$strCzech = 'Çekçe';
$strCzechSlovak = 'Çekçe-Slovakça';

$strDanish = 'Danca';
$strDatabaseEmpty = 'Veritabanı adı boş!';
$strDatabaseExportOptions = 'Veritabanı dışarı aktarma seçenekleri';
$strDatabaseHasBeenDropped = '%s veritabanı kaldırıldı.';
$strDatabasesDropped = '%s veritabanları başarılı olarak kaldırıldı.';
$strDatabasesStatsDisable = 'İstatistikler etkisiz';
$strDatabasesStatsEnable = 'İstatistikler etkin';
$strDatabasesStatsHeavyTraffic = 'Not: Buradaki veritabanı istatistiklerini etkinleştirmek web sunucusu ile MySQL sunucusu arasında yüksek trafiğe yol açabilir.';
$strDatabasesStats = 'Veritabanı istatistikleri';
$strDatabases = 'Veritabanları';
$strDatabase = 'Veritabanı';
$strDataDict = 'Veri sözlüğü';
$strDataOnly = 'Sadece veri';
$strDataPages = 'Veri içeren sayfalar';
$strData = 'Veri';
$strDBComment = 'Veritabanı yorumu:';
$strDBCopy = 'Veritabanını şuraya kopyala:';
$strDbIsEmpty = 'Veritabanı boş olarak görünüyor!';
$strDbPrivileges = 'Veritabanına özgü yetkiler';
$strDBRename = 'Veritabanını şuna yeniden adlandır';
$strDbSpecific = 'Veritabanına özgü';
$strDefaultEngine = '%s bu MySQL sunucusundaki varsayılan depolama motorudur.';   
$strDefaultValueHelp = 'Varsayılan değerler için lütfen sola eğik çizgisiz veya alıntısız sadece tek değer girin. Bu biçimi kullanın: a';
$strDefault = 'Varsayılan';
$strDefragment = 'Tabloyu birleştir';
$strDelayedInserts = 'Gecikmiş eklemeleri kullan';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur fakat yetkileri yeniden yüklemek zaman alabilir.';
$strDeleteAndFlush = 'Kullanıcıları sil ve sonra da yetkileri yeniden yükle.';
$strDeletedRows = 'Silinen satırlar:';
$strDeleted = 'Satır silindi';
$strDeleteNoUsersSelected = 'Silmek için kullanıcı seçilmedi!';
$strDeleteRelation = 'İlişkiyi sil';
$strDelete = 'Sil';
$strDeleting = '%s siliniyor';
$strDelimiter = 'Sınırlayıcı';
$strDelOld = 'Şu anki sayfa, daha fazla bulunması gereksiz tablolara verilmiş referanslara sahip. Bu referansları silmek ister misiniz?';
$strDescending = 'Büyükten Küçüğe';
$strDescription = 'Açıklama';
$strDesigner = 'Tasarımcı';
$strDesignerHelpDisplayField = 'Görüntü alanı pembe ile gösterilir. Alanı, görüntü alanı olarak ayarlamak/ayarı kaldırmak için "Görüntülemek için alan seç" simgesine tıklayın, sonrada uygun alan adı üzerine tıklayın.';
$strDictionary = 'sözlük';
$strDirectLinks = 'Doğrudan bağlantılar';
$strDirtyPages = 'Bozuk sayfalar';
$strDisabled = 'Etkisiz';
$strDisableForeignChecks = 'Yabancı anahtar işaretlerini etkisizleştir';
$strDisplayFeat = 'Özellikleri Göster';
$strDisplayOrder = 'Görünüm düzeni:';
$strDisplayPDF = 'PDF şemasını göster';
$strDoAQuery = '"Örnek sorgu" yap. (joker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Belgeler';
$strDoYouReally = 'Aşağıdaki komutu uygulamak istediğinize emin misiniz? ';
$strDropDatabaseStrongWarning = 'Bütün bir veritabanını YOK ETMEK üzeresiniz!';
$strDrop = 'Kaldır';
$strDropUsersDb = 'Kullanıcılarla aynı isimlerde olan veritabanlarını kaldır.';
$strDumpingData = 'Tablo döküm verisi';
$strDumpSaved = 'Döküm dosyası %s dosyasına kaydedildi';
$strDumpXRows = '%s satır dökümü, %s. kayıttan başlıyor.';
$strDynamic = 'değişken';

$strEdit = 'Düzenle';
$strEditPDFPages = ' PDF Sayfalarını düzenle';
$strEditPrivileges = 'Yetkileri düzenle';
$strEffective = 'Etkili';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş bir sonuç kümesi döndürdü (örn. sıfır satır).';
$strEnabled = 'Etkin';
$strEncloseInTransaction = 'İşlem içinde dışarı aktarmayı kapsa';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Son';
$strEngineAvailable = '%s bu MySQL sunucusunda var.';
$strEngineDisabled = '%s bu MySQL sunucusu için etkisizleştirildi.';
$strEngines = 'Motorlar';
$strEngineUnsupported = 'Bu MySQL sunucusu %s depolama motorunu desteklemez.';
$strEnglishPrivileges = ' Not: MySQL yetki adları İngilizce olarak belirtilir ';
$strEnglish = 'İngilizce';
$strError = 'Hata';
$strErrorInZipFile = 'ZIP arşivinde hata:';
$strErrorRelationAdded = 'Hata: İlişki eklenmedi.';
$strErrorRelationExists = 'Hata: İlişki zaten var.';
$strErrorRenamingTable = '%1$s tablo adını %2$s tablo adına değiştirme hatası';
$strErrorSaveTable = 'Tasarımcı düzenlemelerini kaydetme hatası.';
$strEscapeWildcards = '_ ve % jokerleri harfi harfine kullanılmak için \ ile doldurun.';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estçe';
$strEvent = 'Olay';
$strExcelEdition = 'Excel yapısı';
$strExecuteBookmarked = 'İşaretlenmiş sorguyu çalıştır';
$strExplain = 'SQL\'i açıkla';
$strExport = 'Dışarı Aktar';
$strExportImportToScale = 'Ölçeklemek için İçeri/Dışarı Aktar';
$strExportMustBeFile = 'Seçili dışarı aktarma türü dosyaya kaydedilmelidir!';
$strExtendedInserts = 'Genişletilmiş eklemeler';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Başarısız deneme';
$strField = 'Alan';
$strFieldHasBeenDropped = '%s alanı kaldırıldı';
$strFieldInsertFromFileTempDirNotExists = 'Gönderilen dosyayı taşıma hatası, SSS 1.11\'e bakın';
$strFieldsEnclosedBy = 'Alanları kapsayan:';
$strFieldsEscapedBy = 'Alanları dolduran:';
$strFields = 'Alanlar';
$strFieldsTerminatedBy = 'Alanları sonlandıran:';
$strFileAlreadyExists = '%s dosyası zaten sunucuda var, dosya adını değiştirin veya üzerine yazma seçeneğini işaretleyin.';
$strFileCouldNotBeRead = 'Dosya okunamadı';
$strFileNameTemplateDescription = 'Bu değer %1$sstrftime%2$s kullanılarak yorumlanır, bu yüzden zaman biçimlendirme dizgisi kullanabilirsiniz. İlave olarak yandaki dönüşümler meydana gelecek: %3$s. Diğer metin olduğu gibi tutulacak.';
$strFileNameTemplateDescriptionDatabase = 'veritabanı adı';
$strFileNameTemplateDescriptionServer = 'sunucu adı';
$strFileNameTemplateDescriptionTable = 'tablo adı';
$strFileNameTemplate = 'Dosya adı şablonu';
$strFileNameTemplateRemember = 'şablonu hatırla';
$strFiles = 'Dosyalar';
$strFileToImport = 'İçeri aktarmak için dosya';
$strFixed = 'Sabit';
$strFlushPrivilegesNote = 'Not: phpMyAdmin kullanıcıların yetkilerini doğrudan MySQL\'in yetki tablolarından alır. Bu tabloların içerikleri, eğer elle değiştirildiyse sunucunun kullandığı yetkilerden farklı olabilir. Bu durumda devam etmeden önce %syetkileri yeniden yüklemeniz%s gerekir.';
$strFlushQueryCache = 'Sorgu önbelleğini temizle';
$strFlushTables = 'Tüm tabloları temizle (kapat)';
$strFlushTable = 'Tabloyu temizle ("FLUSH")';
$strFontSize = 'Yazı Tipi boyutu';
$strForeignKeyError = 'Dış anahtar oluşturma hatası (veri türlerini kontrol edin)';
$strFormat = 'Biçim';
$strFormEmpty = 'Formda eksik değer!';
$strFreePages = 'Serbest sayfalar';   
$strFullText = 'Tam Metinler';
$strFunctions = 'İşlevler';
$strFunction = 'İşlev';

$strGenBy = 'Üreten:';
$strGeneralRelationFeat = 'Genel ilişki özellikleri';
$strGeneratePassword = 'Parola Üret';
$strGenerate = 'Üret';
$strGenTime = 'Üretim Zamanı';
$strGeorgian = 'Gürcüce';
$strGerman = 'Almanca';
$strGlobal = 'genel';
$strGlobalPrivileges = 'Genel yetkiler';
$strGlobalValue = 'Genel değer';
$strGo = 'Git';
$strGrantOption = 'Onayla';
$strGreek = 'Yunanca';
$strGzip = '"gzip olarak"';

$strHandler = 'Denetimci';
$strHasBeenAltered = 'değiştirildi.';
$strHasBeenCreated = 'oluşturuldu.';
$strHaveToShow = 'Görüntülemek için en az bir sütun seçmelisiniz';
$strHebrew = 'İbranice';
$strHelp = 'Yardım';
$strHexForBLOB = 'BLOB için onaltılık sistem kullan';
$strHide         = 'Gizle';
$strHideShowAll = 'Tümünü Gizle/Göster';
$strHideShowNoRelation = 'İlişkisi olmayan Tabloları Gizle/Göster';
$strHome = 'Giriş';
$strHomepageOfficial = 'Resmî phpMyAdmin Anasayfası';
$strHost = 'Anamakine';
$strHostEmpty = 'Anamakine adı boş!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macarca';

$strIcelandic = 'İzlandaca';
$strId = 'ID';
$strIdxFulltext = 'Tam metin';
$strIEUnsupported = 'Internet Explorer bu işlevi desteklemiyor.';
$strIgnoreDuplicates = 'Kopya satırları yoksay';
$strIgnoreInserts = 'Yoksayılan eklemeleri kullan';
$strIgnore = 'Yoksay';
$strImportExportCoords = 'PDF şeması için düzenlemeleri İçeri/Dışarı Aktar';
$strImportFiles = 'Dosyaları içeri aktar';
$strImportFormat = 'İçeri aktarılmış dosyanın biçimi';
$strImportSuccessfullyFinished = 'İçeri aktarma başarılı olarak bitti, %d sorgu çalıştırıldı.';
$strImport = 'İçeri Aktar';
$strIndexes = 'İndeksler';
$strIndexesSeemEqual = 'Aşağıdaki indeksler eşit olarak görünüyor ve bunlardan biri kaldırılmalıdır:';
$strIndexHasBeenDropped = '%s indeksi kaldırıldı';
$strIndexName = 'İndeks ismi:';
$strIndexType = 'İndeks türü :';
$strIndexWarningTable = '`%s` tablosunun indeksleri ile ilgili sorunlar';
$strIndex = 'İndeks';
$strInnoDBAutoextendIncrement = 'Artış miktarını otomatik genişlet';
$strInnoDBAutoextendIncrementDesc = 'Tablo dolduğunda otomatik genişleyen tablo alanının genişlemesi için artış miktarı boyutu.';
$strInnoDBBufferPoolSize = 'Ara bellek havuzu boyutu';
$strInnoDBBufferPoolSizeDesc = 'Hafıza ara belleği boyutu InnoDB, veriyi önbelleklemek ve tablolarını indekslemek için kullanır.';
$strInnoDBDataFilePath = 'Veri dosyaları';
$strInnoDBDataHomeDirDesc = 'Tüm InnoDB veri dosyaları için dizin yolunun ortak kısmı.';
$strInnoDBDataHomeDir = 'Veri ana dizini';
$strInnoDBPages = 'sayfa';
$strInnoDBRelationAdded = 'InnoDB ilişkisi eklendi';
$strInnodbStat = 'InnoDB Durumu';
$strInsecureMySQL = 'Yapılandırma dosyanız varsayılan MySQL yetkili hesapla uyuşan ayarlar (parolasız root) içeriyor. MySQL sunucunuz bu varsayılan, dışardan girişe açık ayarlarla çalışıyor ve bu güvenlik açığını gerçekten düzeltmeniz gerekmektedir.';
$strInsertAsNewRow = 'Yeni satır olarak ekle';
$strInsertedRowId = 'Satır id\'si eklendi:';
$strInsertedRows = 'Eklenen satırlar:';
$strInsert = 'Ekle';
$strInternalNotNecessary = '* InnoDb\'de zaten bir iç ilişki olduğunda bu gerekli değildir.';
$strInternalRelationAdded = 'Dahili ilişki eklendi';
$strInternalRelations = 'Dahili ilişkiler';
$strInUse = 'kullanımda';
$strInvalidAuthMethod = 'Yapılandırma içinde geçersiz kimlik denetimi yöntemi ayarı:';
$strInvalidColumnCount = 'Sütun sayısı sıfırdan büyük olmalı.';
$strInvalidColumn = 'Geçersiz sütun (%s) belirlenmiş!';
$strInvalidCSVFieldCount = 'CSV girişinde %d. satırda geçersiz alan sayısı.';
$strInvalidCSVFormat = 'CSV girişinin %d. satırında geçersiz biçim.';
$strInvalidCSVParameter = 'CSV girişi için geçersiz parametre: %s';
$strInvalidDatabase = 'Geçersiz veritabanı';
$strInvalidFieldAddCount = 'En az bir alan eklemek zorundasınız.';
$strInvalidFieldCount = 'Tablonun en az bir alanı olmalı.';
$strInvalidLDIImport = 'Bu eklenti sıkıştırılmış içeri aktarım dosyalarını desteklemez!';
$strInvalidRowNumber = '%d geçerli bir satır sayısı değil.';
$strInvalidServerHostname = '%1$s sunucusu için geçersiz anamakine. Lütfen yapılandırmanızı gözden geçirin.';
$strInvalidServerIndex = 'Geçersiz sunucu indeksi: "%s"';
$strInvalidTableName = 'Geçersiz tablo adı';

$strJapanese = 'Japonca';
$strJoins = 'Birleştirmeler';
$strJumpToDB = '&quot;%s&quot; veritabanına git.';
$strJustDeleteDescr = '&quot;Silinmiş&quot; kullanıcılar, yetkiler yeniden yüklenene kadar her zaman olduğu gibi sunucuya hala erişilebileceklerdir.';
$strJustDelete = 'Sadece kullanıcıları yetki tablolarından sil.';

$strKeepPass = 'Parolayı değiştirme';
$strKeyCache = 'Anahtar önbelleği';
$strKeyname = 'Anahtar ismi';
$strKill = 'Sonlandır';
$strKnownExternalBug = '%s işlevselliği bilinen bir hata tarafından zarar görmüş, bakınız %s';
$strKorean = 'Korece';

$strLandscape = 'Peyzaj';
$strLanguage = 'Dil';
$strLanguageUnknown = 'Bilinmeyen dil: %1$s.';
$strLatchedPages = 'Sabitlenmiş sayfalar';
$strLatexCaption = 'Tablo başlığı';
$strLatexContent = '__TABLE__ tablosunun içeriği';
$strLatexContinuedCaption = 'Devam eden tablo başlığı';
$strLatexContinued = '(devam eden)';
$strLatexIncludeCaption = 'Tablo başlığını dahil et';
$strLatexLabel = 'Etiket anahtarı';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ tablosunun yapısı';
$strLatvian = 'Litvanyaca';
$strLDILocal = 'YEREL anahtar kelime kullan';
$strLDI = 'VERİ YÜKLE kullanarak CSV';
$strLengthSet = 'Uzunluk/Değerler';
$strLimitNumRows = 'Sayfa başına satır sayısı';
$strLinesTerminatedBy = 'Satırı sonlandıran:';
$strLinkNotFound = 'Bağlantı bulunamadı';
$strLinksTo = 'Şuna bağlantı ver ->';
$strLithuanian = 'Litvanyaca';
$strLocalhost = 'Yerel';
$strLocationTextfile = 'Metin dosyasının yeri';
$strLoginInformation = 'Oturum Açma Bilgisi';
$strLogin = 'Oturum Aç';
$strLogout = 'Oturumu Kapat';
$strLogPassword = 'Parola:';
$strLogServer = 'Sunucu';
$strLogUsername = 'Kullanıcı Adı:';
$strLongOperation = 'Bu işlem uzun zaman alabilir. Yine de ilerlensin mi?';

$strMaxConnects = 'En fazla eşzamanlı bağlantı';
$strMaximalQueryLength = 'Oluşturulan sorgunun azami uzunluğu';
$strMaximumSize = 'En fazla: %s%s';
$strMbExtensionMissing = 'mbstring PHP uzantısı bulunamadı ve çoklu bayt karakter grubu kullandığınız görünüyor. Mbstring uzantısı olmadan phpMyAdmin karakter dizgilerini doğru olarak bölemez ve bu beklenmedik sonuçlar doğurabilir.';
$strMbOverloadWarning = 'PHP yapılandırmanızda mbstring.func_overload işlevini etkinleştirmişsiniz. Bu seçenek phpMyAdmin ile uyumlusuzdur ve bazı veri bozulmalarına sebep olabilir!';
$strMIME_available_mime = 'Mevcut MIME türleri';
$strMIME_available_transform = 'Mevcut dönüşümler';
$strMIME_description = 'Açıklama';
$strMIME_MIMEtype = 'MIME türü';
$strMIME_nodescription = 'Bu dönüşüm için mevcut açıklama yok.<br />Lütfen yazara %s ne yapar diye sorun.';
$strMIME_transformation_note = 'Mevcut dönüşüm seçeneklerinin listesi ve bunların MIME türü dönüşümleri için %sdönüşüm tanımlamarı%s\'na tıklayın';
$strMIME_transformation_options = 'Dönüşüm seçenekleri';
$strMIME_transformation_options_note = 'Lütfen dönüşüm seçenekleri için değerleri bu biçimi kullanarak giriniz: \'a\', 100, b,\'c\'...<br />Eğer bu değerler arasına hep ters eğik çizgi ("\") veya tek tırnak ("\'") koymanız gerekirse, önlerine ters eğik çizgi koyun (örneğin \'\\\\xyz\' veya \'a\\\'b\').';
$strMIME_transformation = 'Tarayıcı dönüşümü';
$strMIMETypesForTable = 'TABLO MIME TÜRLERİ';
$strMIME_without = 'İtalik olarak yazılmış MIME türleri ayrı bir dönüşüm işlevine sahip değildir.';
$strModifications = 'Değişiklikler kaydedildi';
$strModify = 'Değiştir';
$strModifyIndexTopic = 'Indeksi değiştir';
$strMoveMenu = 'Menüyü taşı';
$strMoveTableOK = '%s tablosu %s üzerine taşındı.';
$strMoveTableSameNames = 'Tablo aynısına taşınamıyor!';
$strMoveTable = 'Tabloyu şuna (veritabanı<b>.</b>tablo) taşı:';
$strMultilingual = 'çokdilli';
$strMyISAMDataPointerSizeDesc = 'MAX_ROWS seçeneği belirlenmediğinde MyISAM tabloları için CREATE TABLE komutuyla kullanılacak olan bayt cinsinden varsayılan imleç boyutu.';
$strMyISAMDataPointerSize = 'Veri imleci boyutu';
$strMyISAMMaxExtraSortFileSizeDesc = 'Eğer hızlı MyISAM indeksi oluşturulması için kullanılan geçici dosya, burada belirlenmiş miktar tarafından kullanılan anahtar önbelleğinden büyükse, anahtar önbellek yöntemi tercih edilir.';
$strMyISAMMaxExtraSortFileSize = 'İndeks oluşturmada kullanılan geçici dosyalar için en fazla boyut';
$strMyISAMMaxSortFileSizeDesc = 'MySQL\'in, bir MyISAM indeksi yeniden oluşturulurken kullanmaya izin verdiği geçici dosyanın en fazla boyutu (REPAIR TABLE, ALTER TABLE, ya da LOAD DATA INFILE sırasında).';
$strMyISAMMaxSortFileSize = 'Geçici sıralama dosyaları için en fazla boyut.';
$strMyISAMRecoverOptionsDesc = '-myisam-recover sunucusu başlat seçeneği yoluyla ayarlanan, çökmüş MyISAM tablolarını otomatik kurtarmak için kip.';
$strMyISAMRecoverOptions = 'Otomatik kurtarma kipi';
$strMyISAMRepairThreadsDesc = 'Eğer bu değer 1\'den büyükse, sıralama işlemi tarafından yapılan onarma sırasında, MyISAM tablosu indeksleri (her bir indeks kendi işlemi içinde) paralel olarak oluşturulur.';
$strMyISAMRepairThreads = 'İşlemleri onar';
$strMyISAMSortBufferSize = 'Ara bellek boyutunu sırala';   
$strMyISAMSortBufferSizeDesc = 'Bir REPAIR TABLE komutu sırasında MyISAM indeksleri sıralanırken ya da CREATE INDEX veya ALTER TABLE komutuyla indeksler oluşturulduğunda ayrılan ara bellek miktarı.';  
$strMySQLCharset = 'MySQL karakter grubu';
$strMysqlClientVersion = 'MySQL istemci sürümü';
$strMySQLConnectionCollation = 'MySQL bağlantı karşılaştırması';
$strMysqlLibDiffersServerVersion = 'PHP MySQL kütüphanenizin %s sürümü MySQL sunucunuzun %s sürümünden farklı. Bu tarafsız davranışa sebep olabilir.';
$strMySQLSaid = 'MySQL çıktısı: ';
$strMySQLShowProcess = 'İşlemleri göster';
$strMySQLShowStatus = 'MySQL çalışma süresi bilgisini göster';
$strMySQLShowVars = 'MySQL sistem değişkenlerini göster';

$strName = 'İsim';
$strNext = 'Sonraki';
$strNoActivity = '%s saniye içinde hiçbir işlem yapılmadı, lütfen yeniden oturum açın';
$strNoDatabasesSelected = 'Veritabanı seçilmedi.';
$strNoDatabases = 'Veritabanı yok';
$strNoDataReceived = 'İçeri aktarmak için veri alınmadı. Ya dosya adı gönderilmedi ya da PHP yapılandırmanız tarafından izin verilen en fazla boyut aşıldı. SSS 1.16\'ya bakın.';
$strNoDescription = 'Açıklama yok';
$strNoDetailsForEngine = 'Bu depolama motoru için ayrıntılı durum bilgisi mevcut değil.';   
$strNoDropDatabases = '"DROP DATABASE" ifadesi etkisiz.';
$strNoExplain = 'SQL Açıklamasını atla';
$strNoFilesFoundInZip = 'ZIP arşivi içinde hiç dosya bulunamadı!';
$strNoFrames = 'phpMyAdmin, <b>çerçeve-kabiliyeti</b> olan tarayıcı ile daha kullanışlıdır.';
$strNo = 'Hayır';
$strNoIndexPartsDefined = 'İndeks kısımları tanımlanmadı!';
$strNoIndex = 'İndeks tanımlanmadı!';
$strNoModification = 'Değişiklik yok';
$strNone = 'Hiçbiri';
$strNoOptions = 'Bu biçimin seçenekleri yok';
$strNoPassword = 'Parola yok';
$strNoPermission = 'Web sunucusu %s dosyasını kaydetmek için izne sahip değil.';
$strNoPhp = 'PHP Kodsuz';
$strNoPrivileges = 'Yetkiler yok';
$strNoRights = 'Burada bulunmak için yeterli izinlere sahip değilsiniz!';
$strNoRowsSelected = 'Satır seçilmedi';
$strNoSpace = '%s dosyasını kaydetmek için yetersiz alan.';
$strNoTablesFound = 'Veritabanında tablo bulunamadı.';
$strNoThemeSupport = 'Tema desteği yok, lütfen yapılandırmanızı ve/veya %s dizinindeki temalarınızı kontrol edin.';
$strNotNumber = 'Bu bir sayı değil!';
$strNotOK = 'TAMAM değil';
$strNotSet = '<b>%s</b> tablosu bulunamadı veya %s içinde ayarlanmadı';
$strNoUsersFound = 'Kullanıcı(lar) bulunamadı.';
$strNoValidateSQL = 'SQL Doğrulamasını atla';
$strNull = 'Boş';
$strNumberOfFields = 'Alan sayısı';
$strNumberOfTables = 'Tablo sayısı';
$strNumSearchResultsInTable = '%s eşleşme, <i>%s</i> tablosu içinde';
$strNumSearchResultsTotal = '<b>Toplam:</b> <i>%s</i> eşleşme';
$strNumTables = 'Tablolar';

$strOK = 'TAMAM';
$strOpenDocumentSpreadsheet = 'Açık Belge Hesap Çizelgesi';
$strOpenDocumentText = 'Açık Belge Metini';
$strOpenNewWindow = 'Yeni phpMyAdmin penceresi aç';
$strOperations = 'İşlemler';
$strOperator = 'İşletici';
$strOptimizeTable = 'Tabloyu uyarla';
$strOptions = 'Seçenekler';
$strOr = 'Veya';
$strOverhead = 'Ek Yük';
$strOverwriteExisting = 'Mevcut dosya(ların)nın üzerine yaz';

$strPageNumber = 'Sayfa numarası:';
$strPagesToBeFlushed = 'Temizlenen sayfalar';
$strPaperSize = 'Kağıt boyutu';
$strPartialImport = 'Kısmi içeri aktarma';
$strPartialText = 'Kısmi Metinler';
$strPasswordChanged = '%s için parola başarılı olarak değiştirildi.';
$strPasswordEmpty = 'Parola boş!';
$strPasswordHashing = 'Parola Hesaplanıyor';  
$strPasswordNotSame = 'Parolalar birbiriyle aynı değil!';
$strPassword = 'Parola';
$strPdfDbSchema = ' "%s" veritabanının şeması - Sayfa %s';
$strPdfInvalidTblName = ' "%s" tablosu yok!';
$strPdfNoTables = 'Tablolar yok';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Tek tablonun verisini içeren bir rapor üretir)';
$strPDFReportTitle = 'Rapor başlığı';
$strPerHour = 'saat başına';
$strPerMinute = 'dakika başına';
$strPerSecond = 'saniye başına';
$strPersian = 'Farsça';
$strPhoneBook = 'telefon defteri';
$strPHP40203 = 'Ciddi bir çoklu-bayt karakter dizgisi (mbstring) hatasına sahip olan PHP 4.2.3 kullanıyorsunuz. PHP hata raporu 19404\' e bakınız. PHP\'nin bu sürümünün phpMyAdmin\'le kullanılması önerilmez.';
$strPhp = 'PHP Kodu oluştur';
$strPHPVersion = 'PHP Sürümü';
$strPleaseSelectPrimaryOrUniqueKey = 'Lütfen birincil anaktarı veya benzersiz anahtarı seçin';
$strPmaDocumentation = 'phpMyAdmin belgeleri';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> talimatı yapılandırma dosyanız içinde AYARLANMAK zorundadır!';
$strPmaWiki = 'phpMyAdmin viki';
$strPolish = 'Polonyaca';
$strPortrait = 'Portre';
$strPos1 = 'Yukarı';
$strPrevious = 'Önceki';
$strPrimary = 'Birincil';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar kaldırıldı';
$strPrimaryKeyName = 'Birincil anahtarın ismi "PRIMARY" olmalıdır!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece ve sadece</b> bir birincil anahtarın ismi <b>olmalıdır!</b>';
$strPrintView = 'Baskı görünümü';
$strPrintViewFull = 'Baskı görünümü (tüm metinler ile)';
$strPrint = 'Yazdır';
$strPrivDescAllPrivileges = 'GRANT hariç tüm yetkileri içerir.';
$strPrivDescAlterRoutine = 'Depolanan yordamların değiştirilmesine ve kaldırılmasına izin verir.';
$strPrivDescAlter = 'Varolan tabloların yapısının değiştirilmesine izin verir.';
$strPrivDescCreateDb = 'Yeni veritabanları ve tabloların oluşturulmasına izin verir.';
$strPrivDescCreateRoutine = 'Depolanan yordamların oluşturulmasına izin verir.';
$strPrivDescCreateTbl = 'Yeni tabloların oluşturulmasına izin verir.';
$strPrivDescCreateTmpTable = 'Geçici tablolara oluşturulmasına izin verir.';
$strPrivDescCreateUser = 'Kullanıcı hesaplarının oluşturulmasına, kaldırılmasına ve yeniden adlandırılmasına izin verir.';
$strPrivDescCreateView = 'Yeni görünümlerin oluşturulmasına izin verir.';
$strPrivDescDelete = 'Veri silinmesine izin verir.';
$strPrivDescDropDb = 'Veritabanları ve tabloların kaldırılmasına izin verir.';
$strPrivDescDropTbl = 'Tabloların kaldırılmasına izin verir.';
$strPrivDescExecute5 = 'Depolanan yordamların yürütülmesine izin verir.';
$strPrivDescExecute = 'Depolanmış işlemlerin çalıştırılmasına izin verir; bu MySQL sürümünde etkisi yoktur.';
$strPrivDescFile = 'Verinin içeri ve dışarı aktarılmasına izin verir.';
$strPrivDescGrant = 'Yetki tablolarını yeniden yüklemeden yeni kullanıcıların ve yetkilerin eklenmesine izin verir.';
$strPrivDescIndex = 'İndekslerin oluşturulmasına ve kaldırılmasına izin verir.';
$strPrivDescInsert = 'Verinin eklenmesine ve yerinin değiştirilmesine izin verir.';
$strPrivDescLockTables = 'Şu anki işlem için tabloların kilitlenmesine izin verir.';
$strPrivDescMaxConnections = 'Kullanıcının saat başına açabileceği yeni bağlantı sayısını sınırlar.';
$strPrivDescMaxQuestions = 'Kullanıcının saat başına sunucuya gönderebileceği sorgu sayısını sınırlar.';
$strPrivDescMaxUpdates = 'Kullanıcının saat başına çalıştırabileceği herhangi bir tabloyu veya veritabanını değiştiren komut sayısını sınırlar.';
$strPrivDescMaxUserConnections = 'Kullanıcının eşzamanlı bağlantı sayısını sınırlar.';
$strPrivDescProcess3 = 'Diğer kullanıcıların işlemlerinin sonlandırılmasına izin verir.';
$strPrivDescProcess4 = 'İşlem listesindeki bütün sorguların görüntülenmesine izin verir.';
$strPrivDescReferences = 'Bu MySQL sürümünde etkisi yoktur.';
$strPrivDescReload = 'Sunucu ayarlarının yeniden yüklenmesine ve sunucunun önbelleğinin temizlenmesine izin verir';
$strPrivDescReplClient = 'Kullanıcılara Slave ve Master\'ların nerede olduğunu sormasına izin verir.';
$strPrivDescReplSlave = 'Çoğaltılan slave\'ler için gereklidir.';
$strPrivDescSelect = 'Veri okunmasına izin verir.';
$strPrivDescShowDb = 'Bütün veritabanı listesine erişim verir.';
$strPrivDescShowView = 'SHOW CREATE VIEW sorgularının yapılmasına izin verir.';
$strPrivDescShutdown = 'Sunucunun kapatılmasına izin ver.';
$strPrivDescSuper = 'En fazla bağlantı sayısı aşılsa bile bağlanmasına izin verir; genel değişkenleri ayarlamak veya diğer kullanıcıların işlemlerini sonlandırmak gibi pek çok yönetimsel işlemler için gereklidir.';
$strPrivDescUpdate = 'Veri değiştirilmesine izin ver.';
$strPrivDescUsage = 'Yetkiler yok.';
$strPrivilegesReloaded = 'Yetkiler başarılı olarak yüklendi.';
$strPrivileges = 'Yetkiler';
$strProcedures = 'Yordamlar';
$strProcesses = 'İşlemler';
$strProcesslist = 'İşlem listesi';
$strProtocolVersion = 'Protokol sürümü';
$strPutColNames = 'İlk satır içine alan adlarını koy';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Sorgu';
$strQueryCache = 'Sorgu önbelleği';
$strQueryFrame = 'Sorgu penceresi';
$strQueryOnDb = '<b>%s</b> veritabanında SQL sorgusu:';
$strQueryResultsOperations = 'Sorgu sonuçları işlemleri';
$strQuerySQLHistory = 'SQL geçmişi';
$strQueryStatistics = '<b>Sorgu istatistikleri</b>: Başlangıçtan beri sunucuya %s sorgu gönderildi.';
$strQueryTime = 'Sorgu %01.4f san sürdü';
$strQueryType = 'Sorgu türü';
$strQueryWindowLock = 'Pencere dışından bu sorgunun üzerine yazma';

$strReadRequests = 'İstekleri oku';
$strReceived = 'Alınan';
$strRecommended = 'önerilir';
$strRecords = 'Kayıtlar';
$strReferentialIntegrity = 'İlgili bütünlük kontrolü:';
$strRefresh = 'Yenile';
$strRelationalSchema = 'İlişkisel şema';
$strRelationDeleted = 'İlişki silindi';
$strRelationNotWorking = 'Bağlı tablolar ile çalışan ilave özellikler etkisizleştirildi. Nedenini öğrenmek için %sburaya%s tıklayın.';
$strRelationsForTable = 'TABLO İLİŞKİLERİ';
$strRelations = 'İlişkiler';
$strRelationView = 'İlişki görünümü';
$strReloadingThePrivileges = 'Yetkiler yeniden yükleniyor';
$strReloadPrivileges = 'Yetkileri yeniden yükle';
$strReload = 'Yeniden Yükle';
$strRemoveSelectedUsers = 'Seçili kullanıcıları kaldır';
$strRenameDatabaseOK = '%s veritabanı %s olarak yeniden adlandırıldı';
$strRenameTableOK = '%s tablosu %s olarak yeniden adlandırıldı';
$strRenameTable = 'Tabloyu yeniden şuna adlandır';
$strRepairTable = 'Tabloyu onar';
$strReplaceNULLBy = 'NULL\'u bunla değiştir:';
$strReplaceTable = 'Tablo verisini dosya ile değiştir';
$strReplication = 'Çoğaltma';
$strReset = 'Sıfırla';
$strResourceLimits = 'Kaynak sınırları';
$strRestartInsertion = '%s satırlı eklemeyi yeniden başlat';
$strReType = 'Yeniden gir';
$strRevokeAndDeleteDescr = 'Kullanıcılar, yetkiler yeniden yüklenene kadar hala USAGE yetkisine sahip olacaklar.';
$strRevokeAndDelete = 'Kullanıcılardan tüm aktif yetkileri geri al ve sonra da sil.';
$strRevoke = 'Geri al';
$strRevokeMessage = '%s için yetkileri geri aldınız';
$strRomanian = 'Romence';
$strRoutines = 'Yordamlar';
$strRoutineReturnType = 'Dönüş türü';
$strRowLength = 'Satır uzunluğu';
$strRowsFrom = 'satır, başlayacağı kayıt numarası:';
$strRowSize = ' Satır boyutu ';
$strRowsModeFlippedHorizontal = 'yatay (döndürülmüş başlıklar)';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s kipinde ve %s hücre sonra başlığı tekrarla.';
$strRowsModeVertical = 'dikey';
$strRows = 'Satırlar';
$strRowsStatistic = 'Satır İstatistikleri';
$strRunning = '%s üzerinde çalışıyor';
$strRunQuery = 'Sorguyu Gönder';
$strRunSQLQueryOnServer = '%s sunucusu üzerinde SQL sorgusunu/sorgularını çalıştır';
$strRunSQLQuery = '%s veritabanı üzerinde SQL sorgusunu/sorgularını çalıştır';
$strRussian = 'Rusça';

$strSave = 'Kaydet';
$strSaveOnServer = 'Sunucuda %s dizinine kaydet';
$strSavePosition = 'Konumu kaydet';
$strScaleFactorSmall = 'Ölçek, şemayı bir sayfaya sığdırmak için çok küçük';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritabanında ara';
$strSearchInTables = 'Tablo içindeki(ler):';
$strSearchNeedle = 'Aranacak kelime(ler) veya değer(ler) ( joker: "%" ):';
$strSearchOption1 = 'kelimelerin en azından biri';
$strSearchOption2 = 'tüm kelimeler';
$strSearchOption3 = 'kesin ifade';
$strSearchOption4 = 'kurallı ifade olarak';
$strSearchResultsFor = '"<i>%s</i>" %s için arama sonuçları:';
$strSearchType = 'Bul:';
$strSecretRequired = 'Yapılandırma dosyası için gizli bir parola ifadesi gerekiyor (blowfish_secret).';
$strSelectADb = ' Lütfen bir veritabanı seçin';
$strSelectAll = 'Tümünü Seç';
$strSelectBinaryLog = 'Görüntülemek için binari günlüğünü seçin';
$strSelectFields = 'Alanları seç (en az bir):';
$strSelectForeignKey = 'Dış Anahtarı seç';
$strSelectNumRows = 'sorgu içerisinde';
$strSelectReferencedKey = 'Kaynak gösterilen anahtarı seç';
$strSelectTables = 'Tabloları seç';
$strSend = 'Dosya olarak kaydet';
$strSent = 'Gönderilen';
$strServerChoice = 'Sunucu Seçimi';
$strServerNotResponding = 'Sunucu yanıt vermiyor';
$strServers = 'Sunucular';
$strServerStatus = 'Çalışma Süresi Bilgisi';
$strServerStatusDelayedInserts = 'Gecikmiş eklemeler';
$strServerStatusUptime = 'Bu MySQL sunucusunun çalışma süresi: %s. Başlatıldığı zaman: %s.';
$strServer = 'Sunucu';
$strServerTabVariables = 'Değişkenler';
$strServerTrafficNotes = '<b>Sunucu trafiği</b>: Bu tablolar sunucunun başlatıldığı andan itibaren MySQL sunucusunun ağ trafiği istatistiklerini gösterir.';
$strServerVars = 'Sunucu değişkenleri ve ayarları';
$strServerVersion = 'Sunucu sürümü';
$strSessionStartupErrorGeneral = 'Oturum hatasız olarak başlatılamıyor, lütfen PHP ve/veya web sunucusu günlüğü dosyanızda verilen hataları kontrol edin ve PHP kurulumunuzu düzgün olarak yapılandırın.';
$strSessionValue = 'Oturum değeri';
$strSetEnumVal = 'Eğer alan türü "enum" veya "set" ise lütfen değerleri bu biçimi kullanarak girin: \'a\',\'b\',\'c\'...<br />Eğer bu değerler arasına hep ters eğik çizgi ("\") veya tek tırnak ("\'") koymanız gerekirse, önlerine ters eğik çizgi koyun (örneğin \'\\\\xyz\' veya \'a\\\'b\').';
$strShowAll = 'Tümünü göster';
$strShowColor = 'Rengi göster';
$strShowDatadictAs = 'Veri Sözlüğü Biçimi';
$strShowFullQueries = 'Tüm Sorguları Göster';
$strShow = 'Göster';
$strShowGrid = 'Izgara göster';
$strShowHideLeftMenu = 'Sol menüyü Göster/Gizle';
$strShowingBookmark = 'İşaret gösteriliyor';
$strShowingPhp = 'PHP kodu olarak gösteriliyor';
$strShowingRecords = 'Satırlar gösteriliyor';
$strShowingSQL = 'SQL sorgusu gösteriliyor';
$strShowOpenTables = 'Açık tabloları göster';
$strShowPHPInfo = 'PHP bilgisini göster';
$strShowSlaveHosts = 'Slave anamakineleri göster';
$strShowSlaveStatus = 'Slave durumunu göster';
$strShowStatusBinlog_cache_disk_useDescr = 'Geçici binari günlüğü önbelleğinde kullanılan işlemlerin sayısıdır ama binlog_cache_size değerini aştı ve işlemdeki ifadeleri depolamak için geçici dosya kullandı.';
$strShowStatusBinlog_cache_useDescr = 'Geçici binari günlüğü önbelleğinde kullanılan işlemlerin sayısı.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'İfadeler çalıştırılırken sunucu tarafından disk üzerindeki geçici tablo sayıları otomatik olarak oluşturuldu. Eğer Created_tmp_disk_tables değeri büyük ise, geçici tabloların disk tabanlı yerine bellek tabanlı olamasına sebep olmak için tmp_table_size değerini arttırmak isteyebilirsiniz.';
$strShowStatusCreated_tmp_filesDescr = 'mysqld\'nin kaç tane geçici dosya oluşturduğudur.';
$strShowStatusCreated_tmp_tablesDescr = 'İfadeler çalıştırılırken sunucu tarafından bellek içindeki geçici tabloların sayısı otomatik olarak oluşturuldu.';
$strShowStatusDelayed_errorsDescr = 'INSERT DELAYED komutu ile yazılmış, bazı hataların meydana geldiği satır sayısı (muhtemelen kopya anahtar).';
$strShowStatusDelayed_insert_threadsDescr = 'Kullanımda olan INSERT DELAYED işleticisi işlem sayısı. INSERT DELAYED komutunu kullanan her farklı tablodan biri kendi işlemini alır.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED satır yazımı sayısıdır.';
$strShowStatusFlush_commandsDescr  = 'Çalıştırılmış FLUSH ifadesi sayısıdır.';
$strShowStatusHandler_commitDescr = 'Dahili COMMIT ifadesi sayısıdır.';
$strShowStatusHandler_deleteDescr = 'Tablodan satırın kaç kez silindiği sayısıdır.';
$strShowStatusHandler_discoverDescr = 'Eğer MySQL sunucusu verilen isimdeki tabloyu biliyorsa, NDB Yığını depolama motorunu sorabilir. Buna keşfetme denir. Handler_discover tabloların keç kez keşfedildiğini gösterir.';
$strShowStatusHandler_read_firstDescr = 'İndeks\'ten ilk girişin kaç kez okunduğu sayısıdır. Eğer bu değer yüksekse, sunucunun çok fazla indeks taraması yapıyor olduğunu gösterir; örneğin, SELECT col1 FROM foo, anlaşılıyor ki col1 indekslenmiş.';
$strShowStatusHandler_read_keyDescr = 'Anahtarda satır tabanlı okumak için istek sayısıdır. Eğer bu değer yüksekse, sorgularınızın ve tablolarınızın düzgün bir şekilde indekslenmesinin iyi olduğu belirtisidir.';
$strShowStatusHandler_read_nextDescr = 'Anahtar sırasında sonraki satırı okumak için istek sayısıdır. Eğer kısıtlı aralık ile indeks sütununu sorguluyorsanız ya da indeks taraması yapıyorsanız, bu arttırılan miktardır.';
$strShowStatusHandler_read_prevDescr = 'Anahtar sırasında önceki satırı okumak için istek sayısıdır. Bu okuma yöntemi başlıca ORDER BY ... DESC komutunu uyarlamak için kullanılır.';
$strShowStatusHandler_read_rndDescr = 'Sabitlenmiş konumda satır tabanlı okumak için istek sayısıdır. Eğer sonuçları sıralamayı gerektiren çok fazla sorgu yapıyorsanız, bu değer yüksek olur. Muhtemelen bütün tabloları taramak için MySQL gerektiren çok fazla sorgulamanız vardır veya düzgün bir şekilde anahtarları kullanmamaktasınız.';
$strShowStatusHandler_read_rnd_nextDescr = 'Veri dosyasında sonraki satırı okumak için istek sayısıdır. Eğer çok fazla tablo taraması yapıyorsanız, bu değer yüksek olur. Genellikle tablolarınız düzgün bir şekilde indekslenmediğinde ya da sorgularınız, sahip olduğunuz indeksleri çıkarına kullanmak için yazmadığında önerilir.';
$strShowStatusHandler_rollbackDescr = 'Dahili ROLLBACK ifadesi sayısıdır.';
$strShowStatusHandler_updateDescr = 'Tablo içinde satır güncellemek için istek sayısıdır.';
$strShowStatusHandler_writeDescr = 'Tablo içinde satır eklemek için istek sayısıdır.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Veri içeren sayfa sayısıdır (dolu veya temiz).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Şu anki dolu sayfa sayısıdır.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Temizlenmesi için istenmiş ara bellek havuz sayfa sayısıdır.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Boş sayfa sayısıdır.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'InnoDB ara bellek havuzunda sabitlenmiş sayfa sayısıdır. Bunlar şu anki okunan veya yazılmış ya da bazı diğer sebepler yüzünden temizlenemeyen veya taşınamayan sayfalardır.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Meşgul sayfa sayısıdır çünkü bunlar satır kilitleri veya uyarlamalı adresleme indeksi gibi yönetimsel ek yük için ayrılmıştır. Bu değer aynı zamanda Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data değerleri gibi hesaplanabilir.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Sayfalardaki ara bellek havuzunun toplam boyutudur.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'InnoDB "rastgele" önden okuma başlatımı sayısıdır. Sorgu tablonun büyük bir kısmını taradığı zaman bu olur ama rastgele düzende.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'InnoDB sıralı önden okuma başlatımı sayısıdır. InnoDB sıralı tam tablo taraması yaptığı zaman bu olur.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'InnoDB\'nin bitirdiği veya yaptığı mantıksal okuma isteği sayısıdır.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'InnoDB\'nin ara bellek havuzundan tatmin olamadığı ve tek-sayfa okuması yapmak zorunda olduğu mantıksal okuma sayısıdır.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normal olarak arkaplanda olan InnoDB ara bellek havuzuna yazılır. Ancak, eğer sayfa oluşturma veya okuma gerekliyse ve temiz sayfalar yoksa önce sayfaların temizlenmesi için beklenmesi gereklidir. Bu sayaç bu bekleme durumlarını sayar. Eğer ara bellek havuzu boyutu düzgün bir şekilde ayarlandıysa, bu değer küçük olmalıdır.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'InnoDB ara bellek havuzuna bitti yazma sayısıdır.';
$strShowStatusInnodb_data_fsyncsDescr = 'Şimdiye kadarki fsync() işlem sayısıdır.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Şu anki bekleyen fsync() işlem sayısıdır.';
$strShowStatusInnodb_data_pending_readsDescr = 'Şu anki bekleyen okuma sayısıdır.';
$strShowStatusInnodb_data_pending_writesDescr = 'Şu anki bekleyen yazma sayısıdır.';
$strShowStatusInnodb_data_readDescr = 'Bayt cinsinden şimdiye kadarki veri okuma miktarıdır.';
$strShowStatusInnodb_data_readsDescr = 'Toplam veri okuma sayısıdır.';
$strShowStatusInnodb_data_writesDescr = 'Toplam veri yazma sayısıdır.';
$strShowStatusInnodb_data_writtenDescr = 'Bayt cinsinden şimdiye kadarki yazılmış veri miktarıdır.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Bu amaç için yazılmış sayfa sayısı ve gerçekleştirilmiş çifte-yazım yazma sayısıdır.';
$strShowStatusInnodb_dblwr_writesDescr = 'Bu amaç için yazılmış sayfa sayısı ve gerçekleştirilmiş çifte-yazım yazma sayısıdır.';
$strShowStatusInnodb_log_waitsDescr = 'Sahip olunan bekleme sayısıdır çünkü günlük ara belleği çok küçük ve devam etmeden önce temizlenmesi için beklemek zorundayız.';
$strShowStatusInnodb_log_write_requestsDescr = 'Günlük yazma isteği sayısıdır.';
$strShowStatusInnodb_log_writesDescr = 'Günlük dosyasına fiziksel yazma sayısıdır.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Günlük dosyasına bitmiş fsyncs yazma sayısıdır.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Bekleyen günlük dosyası fsyncs sayısıdır.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Bekleyen günlük dosyası yazma sayısıdır.';
$strShowStatusInnodb_os_log_writtenDescr = 'Günlük dosyasına yazılı bayt sayısıdır.';
$strShowStatusInnodb_pages_createdDescr = 'Oluşturulmuş sayfa sayısıdır.';
$strShowStatusInnodb_page_sizeDescr = 'Derlenen InnoDB sayfa boyutu (varsayılan 16KB). Birçok değer sayfalarda sayılır; sayfa boyutu bunların kolaylıkla bayt\'a dönüştürülmesine izin verir.';
$strShowStatusInnodb_pages_readDescr = 'Okunan sayfa sayısıdır.';
$strShowStatusInnodb_pages_writtenDescr = 'Yazılmış sayfa sayısıdır.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Şu anki beklenen satır kilidi sayısıdır.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Milisaniye cinsinden satır kilidi elde etmek için ortalama süredir.';
$strShowStatusInnodb_row_lock_timeDescr = 'Milisaniye cinsinden satır kilidi elde ederken harcanmış toplam süredir.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Milisaniye cinsinden satır kilidi elde etmek için en fazla süredir.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Satır kilidinin beklemek zorunda kaldığı süre sayısıdır.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB tablolarından silinen satır sayısıdır.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB tablolarına eklenen satır sayısıdır.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB tablolarından okunan satır sayısıdır.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB tablolarında güncellenen satır sayısıdır.';
$strShowStatusKey_blocks_not_flushedDescr = 'Anahtar önbelleğindeki değiştirilmiş ama diskte henüz temizlenmemiş anahtar bloğu sayısıdır. Not_flushed_key_blocks olarak bilinip kullanılır.';
$strShowStatusKey_blocks_unusedDescr = 'Anahtar önbelleğinde kullanılmayan blok sayısıdır. Bu değeri anahtar önbelleğinin ne kadarının kullanımda olmasını belirlemek için kullanabilirsiniz.';
$strShowStatusKey_blocks_usedDescr = 'Anahtar önbelleğinde kullanılan blok sayısıdır. Bu değerin en uç noktada olması bir kerede en fazla blok sayısının kullanımda olmamasını gösterir.';
$strShowStatusKey_read_requestsDescr = 'Önbellekten anahtar bloğunun okunması için istek sayısıdır.';
$strShowStatusKey_readsDescr = 'Diskten anahtar bloğunun fiziksel okunma sayısıdır. Eğer Key_reads değeri büyükse, key_buffer_size değeriniz muhtemelen çok küçüktür. Eksik önbellek oranı Key_reads/Key_read_requests olarak hesaplanabilir.';
$strShowStatusKey_write_requestsDescr = 'Önbelleğe anahtar bloğu yazmak için istek sayısıdır.';
$strShowStatusKey_writesDescr = 'Diske anahtar bloğunu fiziksel yazma sayısıdır.';
$strShowStatusLast_query_costDescr = 'Sorgu en iyileyicisi tarafından hesaplanmış gibi son derlenen sorgunun toplam maliyetidir. Aynı sorgu için farklı sorgu planlarının maliyetini karşılaştırmak için yararlıdır. Varsayılan değer 0, henüz derlenmiş sorgu olmadığı anlamına gelir.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'INSERT DELAYED sıralarında yazılmak için bekleyen satır sayısıdır.';
$strShowStatusOpened_tablesDescr = 'Açık olan tablo sayısıdır. Eğer açık tablolar büyükse, tablo önbellek değeriniz muhtemelen çok küçüktür.';
$strShowStatusOpen_filesDescr = 'Açık olan dosya sayısıdır.';
$strShowStatusOpen_streamsDescr = 'Açık olan akış sayısıdır (başlıca günlükleme için kullanılır).';
$strShowStatusOpen_tablesDescr = 'Açık olan tablo sayısıdır.';
$strShowStatusQcache_free_blocksDescr = 'Sorgu önbelleğindeki boş bellek bloğu sayısıdır.';
$strShowStatusQcache_free_memoryDescr = 'Sorgu önbelleği için boş bellek miktarıdır.';
$strShowStatusQcache_hitsDescr = 'Önbelleğe ulaşma sayısıdır.';
$strShowStatusQcache_insertsDescr = 'Önbelleğe eklenen sorgu sayısıdır.';
$strShowStatusQcache_lowmem_prunesDescr = 'Yeni sorguları önbelleklemek için belleği boşaltmaya yönelik önbellekten kaldırılmış sorgu sayısıdır. Bu bilgi sorgu önbellek boyutunu ayarlamınıza yardımcı olabilir. Önbellekten hangi sorguların kaldırılacağına karar vermek için sorgu önbelleği en az son kullanılmış (LRU) stratejisini kullanır.';
$strShowStatusQcache_not_cachedDescr = 'Önbelleklenmemiş sorgu sayısıdır (önbelleklenemez, ya da query_cache_type ayarından dolayı önbelleklenmedi).';
$strShowStatusQcache_queries_in_cacheDescr = 'Önbellekte kayıtlı sorgu sayısıdır.';
$strShowStatusQcache_total_blocksDescr = 'Sorgu önbelleği içindeki toplam blok sayısıdır.';
$strShowStatusReset = 'Sıfırla';
$strShowStatusRpl_statusDescr = 'Arıza-güvenli çoğaltımı durumu (henüz tamamlanmadı).';
$strShowStatusSelect_full_joinDescr = 'İndeksler kullanmayan birleştirme sayısıdır. Eğer bu değer 0 değilse, tablolarınızın indekslerini dikkatli olarak kontrol etmelisiniz.';
$strShowStatusSelect_full_range_joinDescr = 'Referans tablosunda aralık araması kullanan birleştirme sayısıdır.';
$strShowStatusSelect_range_checkDescr = 'Her bir satırdan sonra anahtar kullanımını kontrol eden anahtarsız birleştirme sayısıdır. (Eğer bu değer 0 değilse, tablolarınızın indekslerini dikkatli olarak kontrol etmelisiniz.)';
$strShowStatusSelect_rangeDescr = 'İlk tabloda aralıkları kullanan birleştirme sayısıdır. (Normal olarak kusurlu değildir, eğer büyükse bile.)';
$strShowStatusSelect_scanDescr = 'İlk tablonun tam taramasının yapıldığı birleştirme sayısıdır.';
$strShowStatusSlave_open_temp_tablesDescr = 'Slave SQL işlemi tarafından şu anki açık geçici tablo sayısıdır.';
$strShowStatusSlave_retried_transactionsDescr = 'Çoğaltılan slave SQL işleminin yeniden denediği işlerin toplam (başlangıçtan beri) süre sayısıdır.';
$strShowStatusSlave_runningDescr = 'Eğer sunucu master\'a bağlı slave ise, bu AÇIKTIR.';
$strShowStatusSlow_launch_threadsDescr = 'Oluşturmak için slow_launch_time saniyeden daha uzun zaman almış işlem sayısıdır.';
$strShowStatusSlow_queriesDescr = 'long_query_time saniyeden daha uzun zaman almış sorgu sayısıdır.';
$strShowStatusSort_merge_passesDescr = 'Yapılması zorunlu sıralama algoritması birleştirme geçişi sayısıdır. Eğer bu değer büyükse, sort_buffer_size sistem değişkeninin değerini arttırmayı dikkate almalısınız.';
$strShowStatusSort_rangeDescr = 'Aralıklarla yapılmış sıralama sayısıdır.';
$strShowStatusSort_rowsDescr = 'Sıralanmış satır sayısıdır.';
$strShowStatusSort_scanDescr = 'Taranan tablo tarafından yapılmış sıralama sayısıdır.';
$strShowStatusTable_locks_immediateDescr = 'Tablo kilidinin hemen tanındığı süre sayısıdır.';
$strShowStatusTable_locks_waitedDescr = 'Tablo kilidinin hemen tanınamadığı ve beklemenin gerektiği süre sayısıdır. Eğer bu değer yüksekse ve performans sorununuz varsa, önce sorgularınızı uyarlamalısınız ve sonra ya tablonuzu ya da tablolarınızı bölün veya çoğaltma kullanın.';
$strShowStatusThreads_cachedDescr = 'İşlem önbelleği içinde işlem sayısıdır. Önbelleğe ulaşma hızı Threads_created/Bağlantılar olarak hesaplanabilir. Eğer bu değer kırmızı ise, thread_cache_size boyutunuzu yükseltmelisiniz.';
$strShowStatusThreads_connectedDescr = 'Şu anki açık bağlantı sayısıdır.';
$strShowStatusThreads_createdDescr = 'Bağlantıları işlemek için oluşturulmuş işlem sayısıdır. Eğer Threads_created değeri büyük ise, thread_cache_size değerini arttırmak isteyebilirsiniz. (eğer iyi bir işlem uygulamasına sahipseniz, normal olarak bu, dikkate değer bir performans artışı vermez.)';
$strShowStatusThreads_runningDescr = 'Hala faaliyette olan işlemler sayısıdır.';
$strShowTableDimension = 'Tabloların boyutlarını göster';
$strShowTables = 'Tabloları göster';
$strShowThisQuery = 'Bu sorguyu burada tekrar göster';
$strSimplifiedChinese = 'Basitleştirilmiş Çince';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSkipQueries = 'Başlangıçtan atlamak için kayıt(sorgu) sayısı:';
$strSlovak = 'Slovakça';
$strSlovenian = 'Slovence';
$strSmallBigAll = 'Tümü Küçük/Büyük';
$strSnapToGrid = 'Kılavuza ayarla';
$strSocketProblem = '(ya da yerel MySQL sunucusunun soketi doğru olarak yapılandırılmadı)';
$strSortByKey = 'Anahtara göre sırala';
$strSorting = 'Sıralama';
$strSort = 'Sırala';
$strSpaceUsage = 'Alan kullanımı';
$strSpanish = 'İspanyolca';
$strSplitWordsWithSpace = 'Kelimeler boşlukla ayrılır (" ").';
$strSQLCompatibility = 'SQL uyumluluk kipi';
$strSQLExportType = 'Dışarı aktarma türü';
$strSQLParserBugMessage = 'SQL ayrıştırıcısında bir hata bulabilme ihtimaliniz var. Lütfen sorgunuzu yakından dikkatli bir şekilde gözden geçirin ve tırnakların doğru ve uyumsuz olmadığını kontrol edin. Diğer muhtemel hata nedenleri tırnaklı metin alanının dışında binari ile dosya gönderiyor olmanız olabilir. Aynı zamanda sorgunuzu MySQL komut satırı arabiriminde deneyebilirsiniz. Eğer hata varsa, aşağıdaki MySQL sunucu hata çıktısı, sorunu teşhis etmenizde ayrıca size yardımcı olabilir. Eğer hala sorunlarınız varsa ya da komut satırı arabirimi başarılı olduğunda ayrıştırıcı başarısızsa, lütfen sorunlara neden olan SQL sorgu girişinizi tek bir sorguya indirgeyin ve aşağıdaki CUT bölümü içindeki veri yığını ile birlikte hata raporunu gönderin:';
$strSQLParserUserError = 'SQL sorgunuzda bir hata olduğu görünüyor. Eğer varsa, aşağıdaki MySQL sunucu hata çıktısı, sorunu teşhis etmenizde ayrıca size yardımcı olabilir.';
$strSQLQuery = 'SQL sorgusu';
$strSQLResult = 'SQL sonucu';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Geçersiz Tanımlayıcı';
$strSQPBugUnclosedQuote = 'Kapatılmamış tırnak';
$strSQPBugUnknownPunctuation = 'Bilinmeyen Noktalama İşareti Dizgisi';
$strStandInStructureForView = 'Görünüm yapısı durumu';
$strStatCheckTime = 'Son kontrol';
$strStatCreateTime = 'Yaratma';
$strStatement = 'İfadeler';
$strStatisticsOverrun = 'Meşgul sunucu üzerinde, bayt sayaçları aşırı işleyebilir, bu yüzden MySQL sunucusu tarafından raporlanan istatistikler doğru olmayabilir.';
$strStatUpdateTime = 'Son güncellenme';
$strStatus = 'Durum';
$strStorageEngine = 'Depolama Motoru';
$strStorageEngines = 'Depolama Motorları';
$strStrucCSV = 'CSV';
$strStrucData = 'Yapı ve Veri';
$strStrucExcelCSV = 'MS Excel için CSV';
$strStrucNativeExcel = 'Bağımsız MS Excel biçimi';
$strStrucOnly = 'Sadece yapı';
$strStructPropose = 'Tablo yapısı öner';
$strStructureForView = 'Görünüm yapısı';
$strStructure = 'Yapı';
$strSubmit = 'Gönder';
$strSuccess = 'SQL sorgunuz başarılı olarak çalıştırıldı';
$strSum = 'Toplam';
$strSwedish = 'İsveççe';
$strSwitchToDatabase = 'Kopyalanmış veritabanına geç.';  
$strSwitchToTable = 'Kopyalanmış tabloya geç';

$strTableAlreadyExists = '%s tablosu zaten var!';
$strTableComments = 'Tablo yorumları';
$strTableEmpty = 'Tablo adı boş!';
$strTableHasBeenDropped = '%s tablosu kaldırıldı';
$strTableHasBeenEmptied = '%s tablosu boşaltıldı';
$strTableHasBeenFlushed = '%s tablosu temizlendi';
$strTableIsEmpty = 'Tablo boş olarak görünüyor!';
$strTableMaintenance = 'Tablo bakımı';
$strTableName = 'Tablo adı';
$strTableOfContents = 'İçerik tablosu';
$strTableOptions = 'Tablo seçenekleri';
$strTables = '%s tablo';
$strTableStructure = 'Tablo yapısı:';
$strTable = 'Tablo:';
$strTakeIt = 'Al';
$strTblPrivileges = 'Tabloya özgü yetkiler';
$strTempData = 'Geçici veri';
$strTextAreaLength = 'Uzunluğu nedeniyle,<br /> bu alan düzenlenebilir olmayabilir ';
$strThai = 'Tayca';
$strThemeDefaultNotFound = 'Varsayılan tema %s bulunamadı!';
$strThemeNoPreviewAvailable = 'Önizleme mevcut değil.';
$strThemeNotFound = '%s teması bulunamadı!';
$strThemeNoValidImgPath = '%s teması için geçerli resim yolu bulunamadı!';
$strThemePathNotFound = '%s teması için tema yolu bulunamadı!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Bu Anamakine';
$strThreadSuccessfullyKilled = '%s işlemi başarılı olarak sonlandırıldı.';
$strThreads = 'İşlemler';
$strTimeoutInfo = 'Önceki içeri aktarma zaman aşımına uğradı, sonradan yeniden gönderim %d konumundan devam edecek.';
$strTimeoutNothingParsed = 'Ancak son çalıştırmada hiç veri ayrıştırılmadı, bu genellikle, php zaman sınırlarını arttırmadığınız sürece phpMyAdmin\'in bu içeri aktarmayı biteremeyeceği anlamına gelir.';
$strTimeoutPassed = 'Küçük program zaman aşımı geçti, eğer içeri aktarmayı bitirmek istiyorsanız, lütfen aynı dosyayı yeniden gönderin ve içeri aktarma devam edecektir.';
$strTime = 'Zaman';
$strToFromPage = 'sayfadan/sayfaya';
$strToggleScratchboard = 'Karalama panosunu değiştir';
$strToggleSmallBig = 'Küçüğü/büyüğü değiştir';
$strToSelectRelation = 'İlişkiyi seçmek için buraya tıklayın :';
$strTotal = 'toplam';
$strTotalUC = 'Toplam';
$strTraditionalChinese = 'Geleneksel Çince';
$strTraditionalSpanish = 'Geleneksel İspanyolca';
$strTraffic = 'Trafik';
$strTransactionCoordinator = 'İşlem koordinatörü';
$strTransformation_application_octetstream__download = 'Alanın binari verisini indirmek için bağlantı görüntüler. Dosya adını belirlemek için ilk seçeneği kullanabilirsiniz ya da dosya adını içeren alanın adı olarak ikinci seçeneği kullanabilirsiniz. Eğer ikinci seçeneği kullanırsanız birinci seçeneği boş karakter dizgisi olarak ayarlamanız gerekir.';
$strTransformation_application_octetstream__hex = 'Verinin onaltılık gösterimini görüntüler. İsteğe bağlı ilk parametre, ne sıklıkta boşluk ekleneceğini belirler (varsayılanı 2 yarım bayttır).';
$strTransformation_image_jpeg__inline = 'Tıklanabilir küçük resim görüntüler. Seçenekler piksel cinsinden en fazla genişlik ve yüksekliktir. Orijinal en-boy oranı korunur.';
$strTransformation_image_jpeg__link = 'Bu resmi indirme için bağlantı görüntüler.';
$strTransformation_image_png__inline = 'Resme/jpeg\'e bakın: satıriçi';
$strTransformation_text_plain__dateformat = 'Biçimlendirilmiş tarih olarak ZAMAN, ZAMAN BİLGİSİ, TARİH veya sayısal  unix zaman bilgisi alanını görüntüler. İlk seçenek zaman bilgisine (Varsayılan: 0) eklenecek olan karşılık (saat cinsinden). İkinci seçeneği farklı tarih/zaman biçimi dizgisini belirtmek için kullanın. Üçüncü seçenek yerel tarihi veya bunun için UTC olanı ("local" veya "utc" dizgisi kullanın) görmek istediğinizi belirler. Buna göre tarih biçimi farklı değere sahiptir - "local" için PHP\'nin strftime() işlevine belgelerden bakın ve "utc" ise gmdate() işlevi kullanılarak olur.';
$strTransformation_text_plain__external = 'SADECE LINUX: Harici bir uygulama çalıştırır ve alan verisini standart giriş yoluyla besler. Uygulamanın standart çıktısı döner. Düzgün HTML kodu baskısı için varsayılan düzenlidir. Güvenlik nedeniyle libraries/transformations/text_plain__external.inc.php dosyasını elle düzenlemeli ve olmasını istediğiniz araçları listelemelisiniz. İlk seçenek kullanmak istediğiniz program sayısı ve ikinci seçenek program için parametrelerdir. Üçüncü seçenek, eğer 1\'e ayarlanırsa, htmlspecialchars() işlevi kullanılarak çıktıyı dönüştürecektir (Varsayılan 1). Dördüncü seçenek, eğer 1\'e ayarlanırsa, sözcük kaydırma korunacak ve tüm çıktı tek bir satırda görünecektir (Varsayılan 1).';
$strTransformation_text_plain__formatted = 'Alanın içeriğini, htmlspecialchars() işlevini çalıştırmadan olduğu gibi görüntüler. Bu, geçerli HTML içerdiği var sayılan alandır.';
$strTransformation_text_plain__imagelink = 'Bir resim ve bir bağlantı görüntüler; alan dosya adını içerir. İlk seçenek "http://www.adresim.com/" gibi bir URL ön ekidir. İkinci ve üçüncü seçenekler piksel cinsinden genişlik ve yüksekliktir.';
$strTransformation_text_plain__link = 'Bir bağlantı görüntüler; alan dosya adını içerir. İlk seçenek "http://www.adresim.com/" gibi bir URL ön ekidir. İkinci seçenek bağlantı için başlıktır.';
$strTransformation_text_plain__sql = 'Sözdizimi vurgulamalı SQL sorgusu gibi metni biçimlendirir.';
$strTransformation_text_plain__substr = 'Karakter dizisinin bir kısmını görüntüler. İlk seçenek dizginin başlangıcından atlamak için karakter sayısıdır (Varsayılan 0). İkinci seçenek döndürülecek karakter sayısıdır (Varsayılan: dizginin sonuna kadar). Üçüncü seçenek kısaltma meydana geldiğinde eklemek ve/veya başa eklemek için dizgidir (Varsayılan: "...").';
$strTriggers = 'Tetiklemeler';
$strTruncateQueries = 'Gösterilen Sorguları Kısalt';
$strTurkish = 'Türkçe';
$strType = 'Türü';

$strUkrainian = 'Ukraynaca';
$strUncheckAll = 'Hiçbirini Seçme';
$strUnicode = 'Unicode';
$strUnique = 'Eşsiz';
$strUnknown = 'bilinmeyen';
$strUnselectAll = 'Tüm Seçimi Kaldır';
$strUnsupportedCompressionDetected = 'Desteklenmeyen sıkıştırmayla (%s) dosya yüklemeyi denediniz. Ya bunun için destek henüz tamamlanmadı ya da yapılandırmanız tarafından etkisizleştirildi.';
$strUpdatePrivMessage = '%s için yetkileri güncellediniz.';
$strUpdateProfileMessage = 'Profil güncellendi.';
$strUpdateQuery = 'Sorguyu Güncelle';
$strUpdComTab = 'Sütun_Yorumları tablonuzun nasıl güncelleneceğini öğrenmek için lütfen belgelere bakın.';
$strUpgrade = '%s %s veya sonrasına yükseltmelisiniz.';
$strUploadErrorCantWrite = 'Dosyayı diske yazma başarısız.';
$strUploadErrorExtension = 'Dosya gönderme uzantısından dolayı durduruldu.';
$strUploadErrorFormSize = 'Gönderilen dosya, HTML formu içinde belirlenmiş MAX_FILE_SIZE yönergesini aşıyor.';
$strUploadErrorIniSize = 'Gönderilen dosya, php.ini içindeki upload_max_filesize yönergesini aşıyor.';
$strUploadErrorNoTempDir = 'Eksik geçici klasör.';
$strUploadErrorPartial = 'Gönderilen dosya sadece kısmen gönderildi.';
$strUploadErrorUnknown = 'Dosya göndermede bilinmeyen hata oldu.';
$strUploadLimit = 'Muhtemelen çok büyük dosya göndermeyi denediniz. Lütfen bu sınıra çözüm yolu bulmak için %sbelgelere%s başvurun.';
$strUploadsNotAllowed = 'Bu sunucuda dosya gönderimlerine izin verilmez.';
$strUsage = 'Kullanım';
$strUseBackquotes = 'Tablo ve alan adlarını ters tırnak ile kapsa';
$strUsedPhpExtensions = 'Kullanılan PHP uzantıları';
$strUseHostTable = 'Anamakine Tablosu kullan';
$strUserAlreadyExists = '%s kullanıcısı zaten var!';
$strUserEmpty = 'Kullanıcı adı boş!';
$strUser = 'Kullanıcı';
$strUserName = 'Kullanıcı Adı';
$strUserNotFound = 'Seçili kullanıcı yetki tablosunda bulunamadı.';
$strUserOverview = 'Kullanıcı gözden geçirme';
$strUsersDeleted = 'Seçili kullanıcılar başarılı olarak silindi.';
$strUsersHavingAccessToDb = '&quot;%s&quot; veritabanına erişimi olan kullanıcılar';
$strUseTabKey = 'Değerden değere geçmek için TAB tuşunu veya herhangi bir yere gitmek için CTRL+OK TUŞLARI\'nı kullanın.';
$strUseTables = 'Tabloları kullan';
$strUseTextField = 'Metin alanını kullan';
$strUseThisValue = 'Bu değeri kullan';

$strValidateSQL = 'SQL\'i doğrula';
$strValidatorError = 'SQL onaylayıcısı başlatılamadı. %sBelgelerde%s anlatıldığı gibi lütfen gerekli php uzantılarının kurulu olduğunu kontrol edin.';
$strValue = 'Değer';
$strVar = 'Değişken';
$strVersionInformation = 'Sürüm bilgisi';
$strViewDumpDatabases = 'Veritabanlarının dökümünü (şemasını) göster';
$strViewDumpDB = 'Veritabanının dökümünü (şemasını) göster';
$strViewDump = 'Tablonun dökümünü (şemasını) göster';
$strViewHasBeenDropped = '%s görünümü kaldırıldı';
$strViewMaxExactCount = 'Bu görünüm %s satırdan daha fazla. Lütfen %sbelgelere%s başvurun.';
$strViewName = 'GÖRÜNÜM adı';
$strView = 'Görünüm';

$strWebServerUploadDirectoryError = 'Gönderme işi için ayarladığınız dizine ulaşılamıyor';
$strWebServerUploadDirectory = 'web sunucusu gönderme dizini';
$strWelcome = '%s sürümüne Hoş Geldiniz';
$strWestEuropean = 'Batı Avrupa';
$strWildcard = 'joker';
$strWindowNotFound = 'Hedef tarayıcı penceresi güncellenemiyor. Belki ana pencereyi kapatmış olabilirsiniz ya da tarayıcınızın güvenlik ayarları çapraz-pencere güncellemelerini engellemek için yapılandırılmıştır.';
$strWithChecked = 'Seçilileri:';
$strWriteRequests = 'Yazma istekleri';
$strWrongUser = 'Yanlış kullanıcı adı/parola. Erişim engellendi.';

$strXML = 'XML';

$strYes = 'Evet';

$strZeroRemovesTheLimit = 'Not: Bu seçeneklerin 0 (sıfır)\'a ayarlanması sınırı kaldırır.';
$strZip = '"zip olarak"';

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
