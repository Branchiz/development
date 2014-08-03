<?php
/* $Id: turkish-iso-8859-9.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// phpMyAdmin T�rk�e 01.09.2006 itibariyle �nceki �eviriye g�re �ok daha 
// iyi bir �eviriyle yeniden yap�lm��t�r. 
// Birim ayarlar� T�rk�e standartlar�na g�re tam ve do�ru olarak ayarlanm��t�r.
// �eviren Burak Yavuz (BouRock@live.com)
// �eviri s�r�m� phpMyAdmin 2.10.1.0

$charset = 'iso-8859-9';
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

$day_of_week = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
$month = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y saat %H:%M:%S';
$timespanfmt = '%s g�n, %s saat, %s dakika ve %s saniye';

$strAbortedClients = '�ptal edilen';
$strAccessDenied = 'Eri�im engellendi';
$strAccessDeniedCreateConfig = 'Muhtemelen bunun sebebi yap�land�rma dosyas�n� olu�turmad���n�z i�indir. Bir tane olu�turmak i�in %1$skurulum programc���%2$s kullanmak isteyebilirsiniz.';
$strAccessDeniedExplanation = 'phpMyAdmin MySQL sunucusuna ba�lanmay� denedi ama sunucu ba�lant�y� reddetti. config.inc i�indeki anamakine (host) adresini, kullan�c� ad�n� ve parolay� kontrol edin ve MySQL sunucusunun y�neticisi taraf�ndan verilen bilgiyle uyu�tu�undan emin olun.';
$strAction = 'Eylem';
$strAddAutoIncrement = 'AUTO_INCREMENT de�eri ekle';
$strAddClause = '%s komutu ekle';
$strAddConstraints = 'K�s�tlamalar� ekle';
$strAddDeleteColumn = 'Alan S�tunlar� Ekle/Sil';
$strAddDeleteRow = 'Kriter Sat�r� Ekle/Sil';
$strAddFields = '%s alan ekle';
$strAddHeaderComment = 'Ba�l�k i�ine �zel yorum ekle (\\n sat�rlar� b�ler)';
$strAddIntoComments = 'Yorumlar�n i�ine ekle';
$strAddNewField = 'Yeni alan ekle';
$strAddPrivilegesOnDb = 'A�a��daki veritaban�na yetkileri ekle';
$strAddPrivilegesOnTbl = 'A�a��daki tabloya yetkileri ekle';
$strAddSearchConditions = 'Arama ko�ulu ekle ("where" ko�ulu g�vdesi):';
$strAddToIndex = '�ndekse&nbsp;%s&nbsp;s�tun ekle';
$strAddUserMessage = 'Yeni bir kullan�c� eklediniz.';
$strAddUser = 'Yeni Kullan�c� ekle';
$strAdministration = 'Y�netim';
$strAffectedRows = 'Etkilenen sat�rlar:';
$strAfterInsertBack = '�nceki sayfaya geri d�n';
$strAfterInsertNewInsert = 'Yeni ba�ka bir sat�r ekle';
$strAfterInsertNext = 'Sonraki sat�r� d�zenle';
$strAfterInsertSame = 'Bu sayfaya geri d�n';
$strAfter = '%s tablosundan sonra';
$strAllowInterrupt = 'K���k programc���n zaman s�n�r�na yakla��ld���n� alg�lamas� durumunda i�eri aktar�m� kesmeye izin ver. Bu b�y�k dosyalar�n i�eri aktar�m� i�in iyi bir yol olabilir, ancak hareketleri kesebilir.';
$strAllTableSameWidth = 'B�t�n tablolar ayn� geni�likte g�sterilsin?';
$strAll = 'T�m�';
$strAlterOrderBy = 'Tablo s�ralamas�n� �una g�re de�i�tir';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAndThen = 've';
$strAnd = 'Ve';
$strAngularLinks = 'Y�nlendirmeli ba�lant�lar';
$strAnIndex = '%s �zerinde bir indeks eklendi';
$strAny = 'Herhangi';
$strAnyHost = 'Herhangi anamakine';
$strAnyUser = 'Herhangi kullan�c�';
$strApproximateCount = 'Yakla��k olabilir. SSS 3.11\'e bak�n';
$strAPrimaryKey = '%s �zerinde birincil anahtar eklendi';
$strArabic = 'Arap�a';
$strArmenian = 'Ermenice';
$strAscending = 'K���kten B�y��e';
$strAtBeginningOfTable = 'Tablonun Ba��nda';
$strAtEndOfTable = 'Tablonun Sonunda';
$strAttr = '�znitelikler';
$strAutomaticLayout = 'Otomatik yerle�im';

$strBack = 'Geri';
$strBaltic = 'Balt�k';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - d�zenlemeyiniz';
$strBinaryLog = 'Binari g�nl���';  
$strBinLogEventType = 'Olay t�r�';  
$strBinLogInfo = 'Bilgi';  
$strBinLogName = 'G�nl�k ismi';
$strBinLogOriginalPosition = 'Orijinal konum';
$strBinLogPosition = 'Konum';  
$strBinLogServerId = 'Sunucu ID'; 
$strBookmarkAllUsers = 'B�t�n kullan�c�lar�n bu i�aretlemeye eri�imlerine izin ver';
$strBookmarkCreated = '��aretleme %s olu�turuldu';
$strBookmarkDeleted = '��aretleme silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = 'SQL sorgusu i�aretlendi';
$strBookmarkReplace = 'Mevcut ayn� ismin i�aretlemesini de�i�tir';
$strBookmarkThis = 'Bu SQL sorgusunu i�aretle';
$strBookmarkView = 'Sadece g�ster';
$strBrowseDistinctValues = 'Farkl� de�erlere g�zat';
$strBrowseForeignValues = 'Yabanc� de�erlere g�zat';
$strBrowse = 'G�zat';
$strBufferPoolActivity = 'Ara Bellek Havuzu Etkinli�i';
$strBufferPool = 'Ara Bellek Havuzu';
$strBufferPoolUsage = 'Ara Bellek Havuzu Kullan�m�';
$strBufferReadMissesInPercent = 'Okuma ka��rmas� %';
$strBufferReadMisses = 'Okuma ka��r�yor';
$strBufferWriteWaitsInPercent = 'Yazma beklemesi %';
$strBufferWriteWaits = 'Yazma bekliyor';
$strBulgarian = 'Bulgarca';
$strBusyPages = 'Me�gul sayfalar';   
$strBzError = 'phpMyAdmin, bu PHP s�r�m�ndeki bozuk bir Bz2 uzant�s�ndan dolay� d�k�m� s�k��t�ramad�. phpMyAdmin dizinindeki yap�land�rma dosyan�z�n i�indeki <code>$cfg[\'BZipDump\']</code> y�nergesini <code>FALSE</code> \'a ayarlaman�z kesinlikle �nerilir. E�er Bz2 s�k��t�rma �zelliklerini kullanmak istiyorsan�z, daha yeni PHP s�r�m�ne g�ncelleme yapmal�s�n�z. Ayr�nt�lar i�in PHP hata raporu %s\'e bak�n.';
$strBzip = '"bzip olarak"';

$strCalendar = 'Takvim';
$strCancel = '�ptal';
$strCanNotLoadExportPlugins = 'D��ar� aktarma eklentileri y�klenemedi, l�tfen kurulumunuzu kontrol edin!';
$strCanNotLoadImportPlugins = '��eri aktarma eklentileri y�klenemedi, l�tfen kurulumunuzu kontrol edin!';
$strCannotLogin = 'MySQL sunucusuna oturum a��lam�yor';
$strCantLoad = '[a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] uzant�s� y�klenemiyor. L�tfen PHP yap�land�rman�z� kontrol edin.';
$strCantLoadRecodeIconv = 'Karakter grubu d�n���m� i�in gerekli olan iconv veya recode uzant�lar� y�klenemedi. Ya PHP\'yi bu uzant�lar� etkinle�tirmek i�in yap�land�r�n ya da phpMyAdmin i�inde karakter grubu d�n���m�n� etkisizle�tirin...';
$strCantRenameIdxToPrimary = '�ndeks\'i PRIMARY olarak yeniden adland�ramazs�n�z!';
$strCantUseRecodeIconv = 'Gerekli uzant�lar y�klenmi� g�r�nmesine ra�men, ne iconv, ne libinconv, ne de recode_string i�levi kullan�lamad�. PHP yap�land�rman�z� kontrol edin.';
$strCardinality = '�nemlilik';
$strCaseInsensitive = 'b�y�k k���k harfe duyars�z';
$strCaseSensitive = 'b�y�k k���k harfe duyarl�';
$strCentralEuropean = 'Orta Avrupa';
$strChangeCopyMode = 'Ayn� yetkilerle yeni bir kullan�c� olu�tur ve ...';
$strChangeCopyModeCopy = '... eski olan� sakla.';
$strChangeCopyModeDeleteAndReload = '... eski olan� kullan�c� tablolar�ndan sil ve sonra da yetkileri yeniden y�kle.';
$strChangeCopyModeJustDelete = '... eski olan� kullan�c� tablolar�ndan sil.';
$strChangeCopyModeRevoke = '... eski olandan b�t�n aktif yetkileri iptal et ve sonra da sil.';
$strChangeCopyUser = 'Otutum A�ma Bilgisini de�i�tir / Kullan�c�y� kopyala';
$strChange = 'De�i�tir';
$strChangeDisplay = 'G�stermek i�in alan se�in';
$strChangePassword = 'Parola de�i�tir';
$strCharset = 'Karakter grubu';
$strCharsetOfFile = 'Dosyan�n karakter grubu:';
$strCharsetsAndCollations = 'Karakter Gruplar� ve Kar��la�t�rmalar';
$strCharsets = 'Karakter gruplar�';
$strCheckAll = 'T�m�n� ��aretle';
$strCheckOverhead = 'Ek y�k� olan tablolar� kontrol et';
$strCheckPrivsLong = '&quot;%s&quot; veritaban� i�in yetkileri kontrol et.';
$strCheckPrivs = 'Yetkileri kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'L�tfen d�zenlemek i�in sayfa se�in';
$strColComFeat = 'S�tun Yorumlar� g�steriliyor';
$strCollation = 'Kar��la�t�rma';
$strColumnNames = 'S�tun adlar�';
$strColumnPrivileges = 'S�tuna �zg� yetkiler';
$strCommand = 'Komut';
$strCommentsForTable = 'TABLO YORUMLARI';
$strComments = 'Yorumlar';
$strCompatibleHashing = 'MySQL&nbsp;4.0 uyumlu'; 
$strCompleteInserts = 'B�t�n eklemeler';
$strCompression = 'S�k��t�rma';
$strCompressionWillBeDetected = '��eri aktar�lm�� dosya s�k��t�rmas� otomatik olarak bu dosya t�rlerinden alg�lanacak: %s';
$strConfigDefaultFileError = 'Varsay�lan yap�land�rma bundan y�klenemedi: "%1$s"';
$strConfigFileError ='phpMyAdmin yap�land�rma dosyan�z� okuyamad�!<br />Bu, e�er PHP, i�inde ayr��t�rma hatas� bulursa ya da dosyay� bulamazsa meydana gelebilir.<br />L�tfen a�a��daki ba�lant�y� kullanarak yap�land�rma dosyas�n� do�rudan �a��r�n ve ald���n�z PHP hata mesaj(lar�n�)� okuyun. �o�u durumda herhangi bir yerde t�rnak veya noktal� virg�l eksiktir.<br />E�er bo� bir sayfa kar��n�za ��k�yorsa, her �ey yolunda demektir.';
$strConfigureTableCoord = 'L�tfen %s tablosu i�in koordinatlar� yap�land�r�n';
$strConnectionError = 'Ba�lanam�yor: ge�ersiz ayarlar.';
$strConnections = 'Ba�lant�lar';
$strConstraintsForDumped = 'D�k�m� yap�lm�� tablolar i�in k�s�tlamalar';
$strConstraintsForTable = 'Tablo k�s�tlamalar�';
$strControluserFailed = 'Yap�land�rman�z i�inde tan�mlanm�� denetim kullan�c�lar� i�in ba�lant� ba�ar�s�z.';
$strCookiesRequired = 'Bu k�sm� ge�mek i�in tan�mlama bilgileri (Cookies) a��k olmal�.';
$strCopyDatabaseOK = '%s veritaban� %s\'e kopyaland�.';
$strCopy = 'Kopyala';
$strCopyTableOK = '%s tablosu %s �zerine kopyaland�.';
$strCopyTableSameNames = 'Tablo ayn�s�na kopyalanam�yor!';
$strCopyTable = 'Tabloyu �una (veritaban�<b>.</b>tablo) kopyala:';
$strCouldNotKill = 'phpMyAdmin %s i�lemini sonland�ramad�. Muhtemelen zaten kapat�lm��.';
$strCreateDatabaseBeforeCopying = 'Kopyalamadan �nce CREATE DATABASE (Veritaban� Olu�tur)';
$strCreateIndex = '&nbsp;%s&nbsp;s�tunda indeks olu�tur.';
$strCreateIndexTopic = 'Yeni bir indeks olu�tur';
$strCreateNewDatabase = 'Yeni veritaban� olu�tur';
$strCreateNewTable = '%s veritaban�nda yeni tablo olu�tur';
$strCreate = 'Olu�tur';
$strCreatePage = 'Yeni bir sayfa olu�tur';
$strCreatePdfFeat = 'PDF\'lerin olu�turulmas�';
$strCreateRelation = '�li�ki olu�tur';
$strCreateTable  = 'Tablo olu�tur';
$strCreateUserDatabase = 'Kullan�c� i�in veritaban�';
$strCreateUserDatabaseName = 'Ayn� isimle veritaban� olu�tur ve t�m yetkileri ver';
$strCreateUserDatabaseNone = 'Yok';
$strCreateUserDatabaseWildcard = 'Joker isimlere t�m yetkileri ver (kullan�c�ad�_%)';
$strCreationDates = 'Olu�turma/G�ncelleme/Kontrol tarihleri';
$strCriteria = 'Kriter';
$strCroatian = 'H�rvat�a';
$strCSV = 'CSV';
$strCyrillic = 'Kiril';
$strCzech = '�ek�e';
$strCzechSlovak = '�ek�e-Slovak�a';

$strDanish = 'Danca';
$strDatabaseEmpty = 'Veritaban� ad� bo�!';
$strDatabaseExportOptions = 'Veritaban� d��ar� aktarma se�enekleri';
$strDatabaseHasBeenDropped = '%s veritaban� kald�r�ld�.';
$strDatabasesDropped = '%s veritabanlar� ba�ar�l� olarak kald�r�ld�.';
$strDatabasesStatsDisable = '�statistikler etkisiz';
$strDatabasesStatsEnable = '�statistikler etkin';
$strDatabasesStatsHeavyTraffic = 'Not: Buradaki veritaban� istatistiklerini etkinle�tirmek web sunucusu ile MySQL sunucusu aras�nda y�ksek trafi�e yol a�abilir.';
$strDatabasesStats = 'Veritaban� istatistikleri';
$strDatabases = 'Veritabanlar�';
$strDatabase = 'Veritaban�';
$strDataDict = 'Veri s�zl���';
$strDataOnly = 'Sadece veri';
$strDataPages = 'Veri i�eren sayfalar';
$strData = 'Veri';
$strDBComment = 'Veritaban� yorumu:';
$strDBCopy = 'Veritaban�n� �uraya kopyala:';
$strDbIsEmpty = 'Veritaban� bo� olarak g�r�n�yor!';
$strDbPrivileges = 'Veritaban�na �zg� yetkiler';
$strDBRename = 'Veritaban�n� �una yeniden adland�r';
$strDbSpecific = 'Veritaban�na �zg�';
$strDefaultEngine = '%s bu MySQL sunucusundaki varsay�lan depolama motorudur.';   
$strDefaultValueHelp = 'Varsay�lan de�erler i�in l�tfen sola e�ik �izgisiz veya al�nt�s�z sadece tek de�er girin. Bu bi�imi kullan�n: a';
$strDefault = 'Varsay�lan';
$strDefragment = 'Tabloyu birle�tir';
$strDelayedInserts = 'Gecikmi� eklemeleri kullan';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur fakat yetkileri yeniden y�klemek zaman alabilir.';
$strDeleteAndFlush = 'Kullan�c�lar� sil ve sonra da yetkileri yeniden y�kle.';
$strDeletedRows = 'Silinen sat�rlar:';
$strDeleted = 'Sat�r silindi';
$strDeleteNoUsersSelected = 'Silmek i�in kullan�c� se�ilmedi!';
$strDeleteRelation = '�li�kiyi sil';
$strDelete = 'Sil';
$strDeleting = '%s siliniyor';
$strDelimiter = 'S�n�rlay�c�';
$strDelOld = '�u anki sayfa, daha fazla bulunmas� gereksiz tablolara verilmi� referanslara sahip. Bu referanslar� silmek ister misiniz?';
$strDescending = 'B�y�kten K����e';
$strDescription = 'A��klama';
$strDesigner = 'Tasar�mc�';
$strDesignerHelpDisplayField = 'G�r�nt� alan� pembe ile g�sterilir. Alan�, g�r�nt� alan� olarak ayarlamak/ayar� kald�rmak i�in "G�r�nt�lemek i�in alan se�" simgesine t�klay�n, sonrada uygun alan ad� �zerine t�klay�n.';
$strDictionary = 's�zl�k';
$strDirectLinks = 'Do�rudan ba�lant�lar';
$strDirtyPages = 'Bozuk sayfalar';
$strDisabled = 'Etkisiz';
$strDisableForeignChecks = 'Yabanc� anahtar i�aretlerini etkisizle�tir';
$strDisplayFeat = '�zellikleri G�ster';
$strDisplayOrder = 'G�r�n�m d�zeni:';
$strDisplayPDF = 'PDF �emas�n� g�ster';
$strDoAQuery = '"�rnek sorgu" yap. (joker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Belgeler';
$strDoYouReally = 'A�a��daki komutu uygulamak istedi�inize emin misiniz? ';
$strDropDatabaseStrongWarning = 'B�t�n bir veritaban�n� YOK ETMEK �zeresiniz!';
$strDrop = 'Kald�r';
$strDropUsersDb = 'Kullan�c�larla ayn� isimlerde olan veritabanlar�n� kald�r.';
$strDumpingData = 'Tablo d�k�m verisi';
$strDumpSaved = 'D�k�m dosyas� %s dosyas�na kaydedildi';
$strDumpXRows = '%s sat�r d�k�m�, %s. kay�ttan ba�l�yor.';
$strDynamic = 'de�i�ken';

$strEdit = 'D�zenle';
$strEditPDFPages = ' PDF Sayfalar�n� d�zenle';
$strEditPrivileges = 'Yetkileri d�zenle';
$strEffective = 'Etkili';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� bir sonu� k�mesi d�nd�rd� (�rn. s�f�r sat�r).';
$strEnabled = 'Etkin';
$strEncloseInTransaction = '��lem i�inde d��ar� aktarmay� kapsa';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Son';
$strEngineAvailable = '%s bu MySQL sunucusunda var.';
$strEngineDisabled = '%s bu MySQL sunucusu i�in etkisizle�tirildi.';
$strEngines = 'Motorlar';
$strEngineUnsupported = 'Bu MySQL sunucusu %s depolama motorunu desteklemez.';
$strEnglishPrivileges = ' Not: MySQL yetki adlar� �ngilizce olarak belirtilir ';
$strEnglish = '�ngilizce';
$strError = 'Hata';
$strErrorInZipFile = 'ZIP ar�ivinde hata:';
$strErrorRelationAdded = 'Hata: �li�ki eklenmedi.';
$strErrorRelationExists = 'Hata: �li�ki zaten var.';
$strErrorRenamingTable = '%1$s tablo ad�n� %2$s tablo ad�na de�i�tirme hatas�';
$strErrorSaveTable = 'Tasar�mc� d�zenlemelerini kaydetme hatas�.';
$strEscapeWildcards = '_ ve % jokerleri harfi harfine kullan�lmak i�in \ ile doldurun.';
$strEsperanto = 'Esperanto';
$strEstonian = 'Est�e';
$strEvent = 'Olay';
$strExcelEdition = 'Excel yap�s�';
$strExecuteBookmarked = '��aretlenmi� sorguyu �al��t�r';
$strExplain = 'SQL\'i a��kla';
$strExport = 'D��ar� Aktar';
$strExportImportToScale = '�l�eklemek i�in ��eri/D��ar� Aktar';
$strExportMustBeFile = 'Se�ili d��ar� aktarma t�r� dosyaya kaydedilmelidir!';
$strExtendedInserts = 'Geni�letilmi� eklemeler';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Ba�ar�s�z deneme';
$strField = 'Alan';
$strFieldHasBeenDropped = '%s alan� kald�r�ld�';
$strFieldInsertFromFileTempDirNotExists = 'G�nderilen dosyay� ta��ma hatas�, SSS 1.11\'e bak�n';
$strFieldsEnclosedBy = 'Alanlar� kapsayan:';
$strFieldsEscapedBy = 'Alanlar� dolduran:';
$strFields = 'Alanlar';
$strFieldsTerminatedBy = 'Alanlar� sonland�ran:';
$strFileAlreadyExists = '%s dosyas� zaten sunucuda var, dosya ad�n� de�i�tirin veya �zerine yazma se�ene�ini i�aretleyin.';
$strFileCouldNotBeRead = 'Dosya okunamad�';
$strFileNameTemplateDescription = 'Bu de�er %1$sstrftime%2$s kullan�larak yorumlan�r, bu y�zden zaman bi�imlendirme dizgisi kullanabilirsiniz. �lave olarak yandaki d�n���mler meydana gelecek: %3$s. Di�er metin oldu�u gibi tutulacak.';
$strFileNameTemplateDescriptionDatabase = 'veritaban� ad�';
$strFileNameTemplateDescriptionServer = 'sunucu ad�';
$strFileNameTemplateDescriptionTable = 'tablo ad�';
$strFileNameTemplate = 'Dosya ad� �ablonu';
$strFileNameTemplateRemember = '�ablonu hat�rla';
$strFiles = 'Dosyalar';
$strFileToImport = '��eri aktarmak i�in dosya';
$strFixed = 'Sabit';
$strFlushPrivilegesNote = 'Not: phpMyAdmin kullan�c�lar�n yetkilerini do�rudan MySQL\'in yetki tablolar�ndan al�r. Bu tablolar�n i�erikleri, e�er elle de�i�tirildiyse sunucunun kulland��� yetkilerden farkl� olabilir. Bu durumda devam etmeden �nce %syetkileri yeniden y�klemeniz%s gerekir.';
$strFlushQueryCache = 'Sorgu �nbelle�ini temizle';
$strFlushTables = 'T�m tablolar� temizle (kapat)';
$strFlushTable = 'Tabloyu temizle ("FLUSH")';
$strFontSize = 'Yaz� Tipi boyutu';
$strForeignKeyError = 'D�� anahtar olu�turma hatas� (veri t�rlerini kontrol edin)';
$strFormat = 'Bi�im';
$strFormEmpty = 'Formda eksik de�er!';
$strFreePages = 'Serbest sayfalar';   
$strFullText = 'Tam Metinler';
$strFunctions = '��levler';
$strFunction = '��lev';

$strGenBy = '�reten:';
$strGeneralRelationFeat = 'Genel ili�ki �zellikleri';
$strGeneratePassword = 'Parola �ret';
$strGenerate = '�ret';
$strGenTime = '�retim Zaman�';
$strGeorgian = 'G�rc�ce';
$strGerman = 'Almanca';
$strGlobal = 'genel';
$strGlobalPrivileges = 'Genel yetkiler';
$strGlobalValue = 'Genel de�er';
$strGo = 'Git';
$strGrantOption = 'Onayla';
$strGreek = 'Yunanca';
$strGzip = '"gzip olarak"';

$strHandler = 'Denetimci';
$strHasBeenAltered = 'de�i�tirildi.';
$strHasBeenCreated = 'olu�turuldu.';
$strHaveToShow = 'G�r�nt�lemek i�in en az bir s�tun se�melisiniz';
$strHebrew = '�branice';
$strHelp = 'Yard�m';
$strHexForBLOB = 'BLOB i�in onalt�l�k sistem kullan';
$strHide         = 'Gizle';
$strHideShowAll = 'T�m�n� Gizle/G�ster';
$strHideShowNoRelation = '�li�kisi olmayan Tablolar� Gizle/G�ster';
$strHome = 'Giri�';
$strHomepageOfficial = 'Resm� phpMyAdmin Anasayfas�';
$strHost = 'Anamakine';
$strHostEmpty = 'Anamakine ad� bo�!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macarca';

$strIcelandic = '�zlandaca';
$strId = 'ID';
$strIdxFulltext = 'Tam metin';
$strIEUnsupported = 'Internet Explorer bu i�levi desteklemiyor.';
$strIgnoreDuplicates = 'Kopya sat�rlar� yoksay';
$strIgnoreInserts = 'Yoksay�lan eklemeleri kullan';
$strIgnore = 'Yoksay';
$strImportExportCoords = 'PDF �emas� i�in d�zenlemeleri ��eri/D��ar� Aktar';
$strImportFiles = 'Dosyalar� i�eri aktar';
$strImportFormat = '��eri aktar�lm�� dosyan�n bi�imi';
$strImportSuccessfullyFinished = '��eri aktarma ba�ar�l� olarak bitti, %d sorgu �al��t�r�ld�.';
$strImport = '��eri Aktar';
$strIndexes = '�ndeksler';
$strIndexesSeemEqual = 'A�a��daki indeksler e�it olarak g�r�n�yor ve bunlardan biri kald�r�lmal�d�r:';
$strIndexHasBeenDropped = '%s indeksi kald�r�ld�';
$strIndexName = '�ndeks ismi:';
$strIndexType = '�ndeks t�r� :';
$strIndexWarningTable = '`%s` tablosunun indeksleri ile ilgili sorunlar';
$strIndex = '�ndeks';
$strInnoDBAutoextendIncrement = 'Art�� miktar�n� otomatik geni�let';
$strInnoDBAutoextendIncrementDesc = 'Tablo doldu�unda otomatik geni�leyen tablo alan�n�n geni�lemesi i�in art�� miktar� boyutu.';
$strInnoDBBufferPoolSize = 'Ara bellek havuzu boyutu';
$strInnoDBBufferPoolSizeDesc = 'Haf�za ara belle�i boyutu InnoDB, veriyi �nbelleklemek ve tablolar�n� indekslemek i�in kullan�r.';
$strInnoDBDataFilePath = 'Veri dosyalar�';
$strInnoDBDataHomeDirDesc = 'T�m InnoDB veri dosyalar� i�in dizin yolunun ortak k�sm�.';
$strInnoDBDataHomeDir = 'Veri ana dizini';
$strInnoDBPages = 'sayfa';
$strInnoDBRelationAdded = 'InnoDB ili�kisi eklendi';
$strInnodbStat = 'InnoDB Durumu';
$strInsecureMySQL = 'Yap�land�rma dosyan�z varsay�lan MySQL yetkili hesapla uyu�an ayarlar (parolas�z root) i�eriyor. MySQL sunucunuz bu varsay�lan, d��ardan giri�e a��k ayarlarla �al���yor ve bu g�venlik a����n� ger�ekten d�zeltmeniz gerekmektedir.';
$strInsertAsNewRow = 'Yeni sat�r olarak ekle';
$strInsertedRowId = 'Sat�r id\'si eklendi:';
$strInsertedRows = 'Eklenen sat�rlar:';
$strInsert = 'Ekle';
$strInternalNotNecessary = '* InnoDb\'de zaten bir i� ili�ki oldu�unda bu gerekli de�ildir.';
$strInternalRelationAdded = 'Dahili ili�ki eklendi';
$strInternalRelations = 'Dahili ili�kiler';
$strInUse = 'kullan�mda';
$strInvalidAuthMethod = 'Yap�land�rma i�inde ge�ersiz kimlik denetimi y�ntemi ayar�:';
$strInvalidColumnCount = 'S�tun say�s� s�f�rdan b�y�k olmal�.';
$strInvalidColumn = 'Ge�ersiz s�tun (%s) belirlenmi�!';
$strInvalidCSVFieldCount = 'CSV giri�inde %d. sat�rda ge�ersiz alan say�s�.';
$strInvalidCSVFormat = 'CSV giri�inin %d. sat�r�nda ge�ersiz bi�im.';
$strInvalidCSVParameter = 'CSV giri�i i�in ge�ersiz parametre: %s';
$strInvalidDatabase = 'Ge�ersiz veritaban�';
$strInvalidFieldAddCount = 'En az bir alan eklemek zorundas�n�z.';
$strInvalidFieldCount = 'Tablonun en az bir alan� olmal�.';
$strInvalidLDIImport = 'Bu eklenti s�k��t�r�lm�� i�eri aktar�m dosyalar�n� desteklemez!';
$strInvalidRowNumber = '%d ge�erli bir sat�r say�s� de�il.';
$strInvalidServerHostname = '%1$s sunucusu i�in ge�ersiz anamakine. L�tfen yap�land�rman�z� g�zden ge�irin.';
$strInvalidServerIndex = 'Ge�ersiz sunucu indeksi: "%s"';
$strInvalidTableName = 'Ge�ersiz tablo ad�';

$strJapanese = 'Japonca';
$strJoins = 'Birle�tirmeler';
$strJumpToDB = '&quot;%s&quot; veritaban�na git.';
$strJustDeleteDescr = '&quot;Silinmi�&quot; kullan�c�lar, yetkiler yeniden y�klenene kadar her zaman oldu�u gibi sunucuya hala eri�ilebileceklerdir.';
$strJustDelete = 'Sadece kullan�c�lar� yetki tablolar�ndan sil.';

$strKeepPass = 'Parolay� de�i�tirme';
$strKeyCache = 'Anahtar �nbelle�i';
$strKeyname = 'Anahtar ismi';
$strKill = 'Sonland�r';
$strKnownExternalBug = '%s i�levselli�i bilinen bir hata taraf�ndan zarar g�rm��, bak�n�z %s';
$strKorean = 'Korece';

$strLandscape = 'Peyzaj';
$strLanguage = 'Dil';
$strLanguageUnknown = 'Bilinmeyen dil: %1$s.';
$strLatchedPages = 'Sabitlenmi� sayfalar';
$strLatexCaption = 'Tablo ba�l���';
$strLatexContent = '__TABLE__ tablosunun i�eri�i';
$strLatexContinuedCaption = 'Devam eden tablo ba�l���';
$strLatexContinued = '(devam eden)';
$strLatexIncludeCaption = 'Tablo ba�l���n� dahil et';
$strLatexLabel = 'Etiket anahtar�';
$strLaTeX = 'LaTeX';
$strLatexStructure = '__TABLE__ tablosunun yap�s�';
$strLatvian = 'Litvanyaca';
$strLDILocal = 'YEREL anahtar kelime kullan';
$strLDI = 'VER� Y�KLE kullanarak CSV';
$strLengthSet = 'Uzunluk/De�erler';
$strLimitNumRows = 'Sayfa ba��na sat�r say�s�';
$strLinesTerminatedBy = 'Sat�r� sonland�ran:';
$strLinkNotFound = 'Ba�lant� bulunamad�';
$strLinksTo = '�una ba�lant� ver ->';
$strLithuanian = 'Litvanyaca';
$strLocalhost = 'Yerel';
$strLocationTextfile = 'Metin dosyas�n�n yeri';
$strLoginInformation = 'Oturum A�ma Bilgisi';
$strLogin = 'Oturum A�';
$strLogout = 'Oturumu Kapat';
$strLogPassword = 'Parola:';
$strLogServer = 'Sunucu';
$strLogUsername = 'Kullan�c� Ad�:';
$strLongOperation = 'Bu i�lem uzun zaman alabilir. Yine de ilerlensin mi?';

$strMaxConnects = 'En fazla e�zamanl� ba�lant�';
$strMaximalQueryLength = 'Olu�turulan sorgunun azami uzunlu�u';
$strMaximumSize = 'En fazla: %s%s';
$strMbExtensionMissing = 'mbstring PHP uzant�s� bulunamad� ve �oklu bayt karakter grubu kulland���n�z g�r�n�yor. Mbstring uzant�s� olmadan phpMyAdmin karakter dizgilerini do�ru olarak b�lemez ve bu beklenmedik sonu�lar do�urabilir.';
$strMbOverloadWarning = 'PHP yap�land�rman�zda mbstring.func_overload i�levini etkinle�tirmi�siniz. Bu se�enek phpMyAdmin ile uyumlusuzdur ve baz� veri bozulmalar�na sebep olabilir!';
$strMIME_available_mime = 'Mevcut MIME t�rleri';
$strMIME_available_transform = 'Mevcut d�n���mler';
$strMIME_description = 'A��klama';
$strMIME_MIMEtype = 'MIME t�r�';
$strMIME_nodescription = 'Bu d�n���m i�in mevcut a��klama yok.<br />L�tfen yazara %s ne yapar diye sorun.';
$strMIME_transformation_note = 'Mevcut d�n���m se�eneklerinin listesi ve bunlar�n MIME t�r� d�n���mleri i�in %sd�n���m tan�mlamar�%s\'na t�klay�n';
$strMIME_transformation_options = 'D�n���m se�enekleri';
$strMIME_transformation_options_note = 'L�tfen d�n���m se�enekleri i�in de�erleri bu bi�imi kullanarak giriniz: \'a\', 100, b,\'c\'...<br />E�er bu de�erler aras�na hep ters e�ik �izgi ("\") veya tek t�rnak ("\'") koyman�z gerekirse, �nlerine ters e�ik �izgi koyun (�rne�in \'\\\\xyz\' veya \'a\\\'b\').';
$strMIME_transformation = 'Taray�c� d�n���m�';
$strMIMETypesForTable = 'TABLO MIME T�RLER�';
$strMIME_without = '�talik olarak yaz�lm�� MIME t�rleri ayr� bir d�n���m i�levine sahip de�ildir.';
$strModifications = 'De�i�iklikler kaydedildi';
$strModify = 'De�i�tir';
$strModifyIndexTopic = 'Indeksi de�i�tir';
$strMoveMenu = 'Men�y� ta��';
$strMoveTableOK = '%s tablosu %s �zerine ta��nd�.';
$strMoveTableSameNames = 'Tablo ayn�s�na ta��nam�yor!';
$strMoveTable = 'Tabloyu �una (veritaban�<b>.</b>tablo) ta��:';
$strMultilingual = '�okdilli';
$strMyISAMDataPointerSizeDesc = 'MAX_ROWS se�ene�i belirlenmedi�inde MyISAM tablolar� i�in CREATE TABLE komutuyla kullan�lacak olan bayt cinsinden varsay�lan imle� boyutu.';
$strMyISAMDataPointerSize = 'Veri imleci boyutu';
$strMyISAMMaxExtraSortFileSizeDesc = 'E�er h�zl� MyISAM indeksi olu�turulmas� i�in kullan�lan ge�ici dosya, burada belirlenmi� miktar taraf�ndan kullan�lan anahtar �nbelle�inden b�y�kse, anahtar �nbellek y�ntemi tercih edilir.';
$strMyISAMMaxExtraSortFileSize = '�ndeks olu�turmada kullan�lan ge�ici dosyalar i�in en fazla boyut';
$strMyISAMMaxSortFileSizeDesc = 'MySQL\'in, bir MyISAM indeksi yeniden olu�turulurken kullanmaya izin verdi�i ge�ici dosyan�n en fazla boyutu (REPAIR TABLE, ALTER TABLE, ya da LOAD DATA INFILE s�ras�nda).';
$strMyISAMMaxSortFileSize = 'Ge�ici s�ralama dosyalar� i�in en fazla boyut.';
$strMyISAMRecoverOptionsDesc = '-myisam-recover sunucusu ba�lat se�ene�i yoluyla ayarlanan, ��km�� MyISAM tablolar�n� otomatik kurtarmak i�in kip.';
$strMyISAMRecoverOptions = 'Otomatik kurtarma kipi';
$strMyISAMRepairThreadsDesc = 'E�er bu de�er 1\'den b�y�kse, s�ralama i�lemi taraf�ndan yap�lan onarma s�ras�nda, MyISAM tablosu indeksleri (her bir indeks kendi i�lemi i�inde) paralel olarak olu�turulur.';
$strMyISAMRepairThreads = '��lemleri onar';
$strMyISAMSortBufferSize = 'Ara bellek boyutunu s�rala';   
$strMyISAMSortBufferSizeDesc = 'Bir REPAIR TABLE komutu s�ras�nda MyISAM indeksleri s�ralan�rken ya da CREATE INDEX veya ALTER TABLE komutuyla indeksler olu�turuldu�unda ayr�lan ara bellek miktar�.';  
$strMySQLCharset = 'MySQL karakter grubu';
$strMysqlClientVersion = 'MySQL istemci s�r�m�';
$strMySQLConnectionCollation = 'MySQL ba�lant� kar��la�t�rmas�';
$strMysqlLibDiffersServerVersion = 'PHP MySQL k�t�phanenizin %s s�r�m� MySQL sunucunuzun %s s�r�m�nden farkl�. Bu tarafs�z davran��a sebep olabilir.';
$strMySQLSaid = 'MySQL ��kt�s�: ';
$strMySQLShowProcess = '��lemleri g�ster';
$strMySQLShowStatus = 'MySQL �al��ma s�resi bilgisini g�ster';
$strMySQLShowVars = 'MySQL sistem de�i�kenlerini g�ster';

$strName = '�sim';
$strNext = 'Sonraki';
$strNoActivity = '%s saniye i�inde hi�bir i�lem yap�lmad�, l�tfen yeniden oturum a��n';
$strNoDatabasesSelected = 'Veritaban� se�ilmedi.';
$strNoDatabases = 'Veritaban� yok';
$strNoDataReceived = '��eri aktarmak i�in veri al�nmad�. Ya dosya ad� g�nderilmedi ya da PHP yap�land�rman�z taraf�ndan izin verilen en fazla boyut a��ld�. SSS 1.16\'ya bak�n.';
$strNoDescription = 'A��klama yok';
$strNoDetailsForEngine = 'Bu depolama motoru i�in ayr�nt�l� durum bilgisi mevcut de�il.';   
$strNoDropDatabases = '"DROP DATABASE" ifadesi etkisiz.';
$strNoExplain = 'SQL A��klamas�n� atla';
$strNoFilesFoundInZip = 'ZIP ar�ivi i�inde hi� dosya bulunamad�!';
$strNoFrames = 'phpMyAdmin, <b>�er�eve-kabiliyeti</b> olan taray�c� ile daha kullan��l�d�r.';
$strNo = 'Hay�r';
$strNoIndexPartsDefined = '�ndeks k�s�mlar� tan�mlanmad�!';
$strNoIndex = '�ndeks tan�mlanmad�!';
$strNoModification = 'De�i�iklik yok';
$strNone = 'Hi�biri';
$strNoOptions = 'Bu bi�imin se�enekleri yok';
$strNoPassword = 'Parola yok';
$strNoPermission = 'Web sunucusu %s dosyas�n� kaydetmek i�in izne sahip de�il.';
$strNoPhp = 'PHP Kodsuz';
$strNoPrivileges = 'Yetkiler yok';
$strNoRights = 'Burada bulunmak i�in yeterli izinlere sahip de�ilsiniz!';
$strNoRowsSelected = 'Sat�r se�ilmedi';
$strNoSpace = '%s dosyas�n� kaydetmek i�in yetersiz alan.';
$strNoTablesFound = 'Veritaban�nda tablo bulunamad�.';
$strNoThemeSupport = 'Tema deste�i yok, l�tfen yap�land�rman�z� ve/veya %s dizinindeki temalar�n�z� kontrol edin.';
$strNotNumber = 'Bu bir say� de�il!';
$strNotOK = 'TAMAM de�il';
$strNotSet = '<b>%s</b> tablosu bulunamad� veya %s i�inde ayarlanmad�';
$strNoUsersFound = 'Kullan�c�(lar) bulunamad�.';
$strNoValidateSQL = 'SQL Do�rulamas�n� atla';
$strNull = 'Bo�';
$strNumberOfFields = 'Alan say�s�';
$strNumberOfTables = 'Tablo say�s�';
$strNumSearchResultsInTable = '%s e�le�me, <i>%s</i> tablosu i�inde';
$strNumSearchResultsTotal = '<b>Toplam:</b> <i>%s</i> e�le�me';
$strNumTables = 'Tablolar';

$strOK = 'TAMAM';
$strOpenDocumentSpreadsheet = 'A��k Belge Hesap �izelgesi';
$strOpenDocumentText = 'A��k Belge Metini';
$strOpenNewWindow = 'Yeni phpMyAdmin penceresi a�';
$strOperations = '��lemler';
$strOperator = '��letici';
$strOptimizeTable = 'Tabloyu uyarla';
$strOptions = 'Se�enekler';
$strOr = 'Veya';
$strOverhead = 'Ek Y�k';
$strOverwriteExisting = 'Mevcut dosya(lar�n)n�n �zerine yaz';

$strPageNumber = 'Sayfa numaras�:';
$strPagesToBeFlushed = 'Temizlenen sayfalar';
$strPaperSize = 'Ka��t boyutu';
$strPartialImport = 'K�smi i�eri aktarma';
$strPartialText = 'K�smi Metinler';
$strPasswordChanged = '%s i�in parola ba�ar�l� olarak de�i�tirildi.';
$strPasswordEmpty = 'Parola bo�!';
$strPasswordHashing = 'Parola Hesaplan�yor';  
$strPasswordNotSame = 'Parolalar birbiriyle ayn� de�il!';
$strPassword = 'Parola';
$strPdfDbSchema = ' "%s" veritaban�n�n �emas� - Sayfa %s';
$strPdfInvalidTblName = ' "%s" tablosu yok!';
$strPdfNoTables = 'Tablolar yok';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Tek tablonun verisini i�eren bir rapor �retir)';
$strPDFReportTitle = 'Rapor ba�l���';
$strPerHour = 'saat ba��na';
$strPerMinute = 'dakika ba��na';
$strPerSecond = 'saniye ba��na';
$strPersian = 'Fars�a';
$strPhoneBook = 'telefon defteri';
$strPHP40203 = 'Ciddi bir �oklu-bayt karakter dizgisi (mbstring) hatas�na sahip olan PHP 4.2.3 kullan�yorsunuz. PHP hata raporu 19404\' e bak�n�z. PHP\'nin bu s�r�m�n�n phpMyAdmin\'le kullan�lmas� �nerilmez.';
$strPhp = 'PHP Kodu olu�tur';
$strPHPVersion = 'PHP S�r�m�';
$strPleaseSelectPrimaryOrUniqueKey = 'L�tfen birincil anaktar� veya benzersiz anahtar� se�in';
$strPmaDocumentation = 'phpMyAdmin belgeleri';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> talimat� yap�land�rma dosyan�z i�inde AYARLANMAK zorundad�r!';
$strPmaWiki = 'phpMyAdmin viki';
$strPolish = 'Polonyaca';
$strPortrait = 'Portre';
$strPos1 = 'Yukar�';
$strPrevious = '�nceki';
$strPrimary = 'Birincil';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar kald�r�ld�';
$strPrimaryKeyName = 'Birincil anahtar�n ismi "PRIMARY" olmal�d�r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece ve sadece</b> bir birincil anahtar�n ismi <b>olmal�d�r!</b>';
$strPrintView = 'Bask� g�r�n�m�';
$strPrintViewFull = 'Bask� g�r�n�m� (t�m metinler ile)';
$strPrint = 'Yazd�r';
$strPrivDescAllPrivileges = 'GRANT hari� t�m yetkileri i�erir.';
$strPrivDescAlterRoutine = 'Depolanan yordamlar�n de�i�tirilmesine ve kald�r�lmas�na izin verir.';
$strPrivDescAlter = 'Varolan tablolar�n yap�s�n�n de�i�tirilmesine izin verir.';
$strPrivDescCreateDb = 'Yeni veritabanlar� ve tablolar�n olu�turulmas�na izin verir.';
$strPrivDescCreateRoutine = 'Depolanan yordamlar�n olu�turulmas�na izin verir.';
$strPrivDescCreateTbl = 'Yeni tablolar�n olu�turulmas�na izin verir.';
$strPrivDescCreateTmpTable = 'Ge�ici tablolara olu�turulmas�na izin verir.';
$strPrivDescCreateUser = 'Kullan�c� hesaplar�n�n olu�turulmas�na, kald�r�lmas�na ve yeniden adland�r�lmas�na izin verir.';
$strPrivDescCreateView = 'Yeni g�r�n�mlerin olu�turulmas�na izin verir.';
$strPrivDescDelete = 'Veri silinmesine izin verir.';
$strPrivDescDropDb = 'Veritabanlar� ve tablolar�n kald�r�lmas�na izin verir.';
$strPrivDescDropTbl = 'Tablolar�n kald�r�lmas�na izin verir.';
$strPrivDescExecute5 = 'Depolanan yordamlar�n y�r�t�lmesine izin verir.';
$strPrivDescExecute = 'Depolanm�� i�lemlerin �al��t�r�lmas�na izin verir; bu MySQL s�r�m�nde etkisi yoktur.';
$strPrivDescFile = 'Verinin i�eri ve d��ar� aktar�lmas�na izin verir.';
$strPrivDescGrant = 'Yetki tablolar�n� yeniden y�klemeden yeni kullan�c�lar�n ve yetkilerin eklenmesine izin verir.';
$strPrivDescIndex = '�ndekslerin olu�turulmas�na ve kald�r�lmas�na izin verir.';
$strPrivDescInsert = 'Verinin eklenmesine ve yerinin de�i�tirilmesine izin verir.';
$strPrivDescLockTables = '�u anki i�lem i�in tablolar�n kilitlenmesine izin verir.';
$strPrivDescMaxConnections = 'Kullan�c�n�n saat ba��na a�abilece�i yeni ba�lant� say�s�n� s�n�rlar.';
$strPrivDescMaxQuestions = 'Kullan�c�n�n saat ba��na sunucuya g�nderebilece�i sorgu say�s�n� s�n�rlar.';
$strPrivDescMaxUpdates = 'Kullan�c�n�n saat ba��na �al��t�rabilece�i herhangi bir tabloyu veya veritaban�n� de�i�tiren komut say�s�n� s�n�rlar.';
$strPrivDescMaxUserConnections = 'Kullan�c�n�n e�zamanl� ba�lant� say�s�n� s�n�rlar.';
$strPrivDescProcess3 = 'Di�er kullan�c�lar�n i�lemlerinin sonland�r�lmas�na izin verir.';
$strPrivDescProcess4 = '��lem listesindeki b�t�n sorgular�n g�r�nt�lenmesine izin verir.';
$strPrivDescReferences = 'Bu MySQL s�r�m�nde etkisi yoktur.';
$strPrivDescReload = 'Sunucu ayarlar�n�n yeniden y�klenmesine ve sunucunun �nbelle�inin temizlenmesine izin verir';
$strPrivDescReplClient = 'Kullan�c�lara Slave ve Master\'lar�n nerede oldu�unu sormas�na izin verir.';
$strPrivDescReplSlave = '�o�alt�lan slave\'ler i�in gereklidir.';
$strPrivDescSelect = 'Veri okunmas�na izin verir.';
$strPrivDescShowDb = 'B�t�n veritaban� listesine eri�im verir.';
$strPrivDescShowView = 'SHOW CREATE VIEW sorgular�n�n yap�lmas�na izin verir.';
$strPrivDescShutdown = 'Sunucunun kapat�lmas�na izin ver.';
$strPrivDescSuper = 'En fazla ba�lant� say�s� a��lsa bile ba�lanmas�na izin verir; genel de�i�kenleri ayarlamak veya di�er kullan�c�lar�n i�lemlerini sonland�rmak gibi pek �ok y�netimsel i�lemler i�in gereklidir.';
$strPrivDescUpdate = 'Veri de�i�tirilmesine izin ver.';
$strPrivDescUsage = 'Yetkiler yok.';
$strPrivilegesReloaded = 'Yetkiler ba�ar�l� olarak y�klendi.';
$strPrivileges = 'Yetkiler';
$strProcedures = 'Yordamlar';
$strProcesses = '��lemler';
$strProcesslist = '��lem listesi';
$strProtocolVersion = 'Protokol s�r�m�';
$strPutColNames = '�lk sat�r i�ine alan adlar�n� koy';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Sorgu';
$strQueryCache = 'Sorgu �nbelle�i';
$strQueryFrame = 'Sorgu penceresi';
$strQueryOnDb = '<b>%s</b> veritaban�nda SQL sorgusu:';
$strQueryResultsOperations = 'Sorgu sonu�lar� i�lemleri';
$strQuerySQLHistory = 'SQL ge�mi�i';
$strQueryStatistics = '<b>Sorgu istatistikleri</b>: Ba�lang��tan beri sunucuya %s sorgu g�nderildi.';
$strQueryTime = 'Sorgu %01.4f san s�rd�';
$strQueryType = 'Sorgu t�r�';
$strQueryWindowLock = 'Pencere d���ndan bu sorgunun �zerine yazma';

$strReadRequests = '�stekleri oku';
$strReceived = 'Al�nan';
$strRecommended = '�nerilir';
$strRecords = 'Kay�tlar';
$strReferentialIntegrity = '�lgili b�t�nl�k kontrol�:';
$strRefresh = 'Yenile';
$strRelationalSchema = '�li�kisel �ema';
$strRelationDeleted = '�li�ki silindi';
$strRelationNotWorking = 'Ba�l� tablolar ile �al��an ilave �zellikler etkisizle�tirildi. Nedenini ��renmek i�in %sburaya%s t�klay�n.';
$strRelationsForTable = 'TABLO �L��K�LER�';
$strRelations = '�li�kiler';
$strRelationView = '�li�ki g�r�n�m�';
$strReloadingThePrivileges = 'Yetkiler yeniden y�kleniyor';
$strReloadPrivileges = 'Yetkileri yeniden y�kle';
$strReload = 'Yeniden Y�kle';
$strRemoveSelectedUsers = 'Se�ili kullan�c�lar� kald�r';
$strRenameDatabaseOK = '%s veritaban� %s olarak yeniden adland�r�ld�';
$strRenameTableOK = '%s tablosu %s olarak yeniden adland�r�ld�';
$strRenameTable = 'Tabloyu yeniden �una adland�r';
$strRepairTable = 'Tabloyu onar';
$strReplaceNULLBy = 'NULL\'u bunla de�i�tir:';
$strReplaceTable = 'Tablo verisini dosya ile de�i�tir';
$strReplication = '�o�altma';
$strReset = 'S�f�rla';
$strResourceLimits = 'Kaynak s�n�rlar�';
$strRestartInsertion = '%s sat�rl� eklemeyi yeniden ba�lat';
$strReType = 'Yeniden gir';
$strRevokeAndDeleteDescr = 'Kullan�c�lar, yetkiler yeniden y�klenene kadar hala USAGE yetkisine sahip olacaklar.';
$strRevokeAndDelete = 'Kullan�c�lardan t�m aktif yetkileri geri al ve sonra da sil.';
$strRevoke = 'Geri al';
$strRevokeMessage = '%s i�in yetkileri geri ald�n�z';
$strRomanian = 'Romence';
$strRoutines = 'Yordamlar';
$strRoutineReturnType = 'D�n�� t�r�';
$strRowLength = 'Sat�r uzunlu�u';
$strRowsFrom = 'sat�r, ba�layaca�� kay�t numaras�:';
$strRowSize = ' Sat�r boyutu ';
$strRowsModeFlippedHorizontal = 'yatay (d�nd�r�lm�� ba�l�klar)';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s kipinde ve %s h�cre sonra ba�l��� tekrarla.';
$strRowsModeVertical = 'dikey';
$strRows = 'Sat�rlar';
$strRowsStatistic = 'Sat�r �statistikleri';
$strRunning = '%s �zerinde �al���yor';
$strRunQuery = 'Sorguyu G�nder';
$strRunSQLQueryOnServer = '%s sunucusu �zerinde SQL sorgusunu/sorgular�n� �al��t�r';
$strRunSQLQuery = '%s veritaban� �zerinde SQL sorgusunu/sorgular�n� �al��t�r';
$strRussian = 'Rus�a';

$strSave = 'Kaydet';
$strSaveOnServer = 'Sunucuda %s dizinine kaydet';
$strSavePosition = 'Konumu kaydet';
$strScaleFactorSmall = '�l�ek, �emay� bir sayfaya s��d�rmak i�in �ok k���k';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritaban�nda ara';
$strSearchInTables = 'Tablo i�indeki(ler):';
$strSearchNeedle = 'Aranacak kelime(ler) veya de�er(ler) ( joker: "%" ):';
$strSearchOption1 = 'kelimelerin en az�ndan biri';
$strSearchOption2 = 't�m kelimeler';
$strSearchOption3 = 'kesin ifade';
$strSearchOption4 = 'kurall� ifade olarak';
$strSearchResultsFor = '"<i>%s</i>" %s i�in arama sonu�lar�:';
$strSearchType = 'Bul:';
$strSecretRequired = 'Yap�land�rma dosyas� i�in gizli bir parola ifadesi gerekiyor (blowfish_secret).';
$strSelectADb = ' L�tfen bir veritaban� se�in';
$strSelectAll = 'T�m�n� Se�';
$strSelectBinaryLog = 'G�r�nt�lemek i�in binari g�nl���n� se�in';
$strSelectFields = 'Alanlar� se� (en az bir):';
$strSelectForeignKey = 'D�� Anahtar� se�';
$strSelectNumRows = 'sorgu i�erisinde';
$strSelectReferencedKey = 'Kaynak g�sterilen anahtar� se�';
$strSelectTables = 'Tablolar� se�';
$strSend = 'Dosya olarak kaydet';
$strSent = 'G�nderilen';
$strServerChoice = 'Sunucu Se�imi';
$strServerNotResponding = 'Sunucu yan�t vermiyor';
$strServers = 'Sunucular';
$strServerStatus = '�al��ma S�resi Bilgisi';
$strServerStatusDelayedInserts = 'Gecikmi� eklemeler';
$strServerStatusUptime = 'Bu MySQL sunucusunun �al��ma s�resi: %s. Ba�lat�ld��� zaman: %s.';
$strServer = 'Sunucu';
$strServerTabVariables = 'De�i�kenler';
$strServerTrafficNotes = '<b>Sunucu trafi�i</b>: Bu tablolar sunucunun ba�lat�ld��� andan itibaren MySQL sunucusunun a� trafi�i istatistiklerini g�sterir.';
$strServerVars = 'Sunucu de�i�kenleri ve ayarlar�';
$strServerVersion = 'Sunucu s�r�m�';
$strSessionStartupErrorGeneral = 'Oturum hatas�z olarak ba�lat�lam�yor, l�tfen PHP ve/veya web sunucusu g�nl��� dosyan�zda verilen hatalar� kontrol edin ve PHP kurulumunuzu d�zg�n olarak yap�land�r�n.';
$strSessionValue = 'Oturum de�eri';
$strSetEnumVal = 'E�er alan t�r� "enum" veya "set" ise l�tfen de�erleri bu bi�imi kullanarak girin: \'a\',\'b\',\'c\'...<br />E�er bu de�erler aras�na hep ters e�ik �izgi ("\") veya tek t�rnak ("\'") koyman�z gerekirse, �nlerine ters e�ik �izgi koyun (�rne�in \'\\\\xyz\' veya \'a\\\'b\').';
$strShowAll = 'T�m�n� g�ster';
$strShowColor = 'Rengi g�ster';
$strShowDatadictAs = 'Veri S�zl��� Bi�imi';
$strShowFullQueries = 'T�m Sorgular� G�ster';
$strShow = 'G�ster';
$strShowGrid = 'Izgara g�ster';
$strShowHideLeftMenu = 'Sol men�y� G�ster/Gizle';
$strShowingBookmark = '��aret g�steriliyor';
$strShowingPhp = 'PHP kodu olarak g�steriliyor';
$strShowingRecords = 'Sat�rlar g�steriliyor';
$strShowingSQL = 'SQL sorgusu g�steriliyor';
$strShowOpenTables = 'A��k tablolar� g�ster';
$strShowPHPInfo = 'PHP bilgisini g�ster';
$strShowSlaveHosts = 'Slave anamakineleri g�ster';
$strShowSlaveStatus = 'Slave durumunu g�ster';
$strShowStatusBinlog_cache_disk_useDescr = 'Ge�ici binari g�nl��� �nbelle�inde kullan�lan i�lemlerin say�s�d�r ama binlog_cache_size de�erini a�t� ve i�lemdeki ifadeleri depolamak i�in ge�ici dosya kulland�.';
$strShowStatusBinlog_cache_useDescr = 'Ge�ici binari g�nl��� �nbelle�inde kullan�lan i�lemlerin say�s�.';
$strShowStatusCreated_tmp_disk_tablesDescr = '�fadeler �al��t�r�l�rken sunucu taraf�ndan disk �zerindeki ge�ici tablo say�lar� otomatik olarak olu�turuldu. E�er Created_tmp_disk_tables de�eri b�y�k ise, ge�ici tablolar�n disk tabanl� yerine bellek tabanl� olamas�na sebep olmak i�in tmp_table_size de�erini artt�rmak isteyebilirsiniz.';
$strShowStatusCreated_tmp_filesDescr = 'mysqld\'nin ka� tane ge�ici dosya olu�turdu�udur.';
$strShowStatusCreated_tmp_tablesDescr = '�fadeler �al��t�r�l�rken sunucu taraf�ndan bellek i�indeki ge�ici tablolar�n say�s� otomatik olarak olu�turuldu.';
$strShowStatusDelayed_errorsDescr = 'INSERT DELAYED komutu ile yaz�lm��, baz� hatalar�n meydana geldi�i sat�r say�s� (muhtemelen kopya anahtar).';
$strShowStatusDelayed_insert_threadsDescr = 'Kullan�mda olan INSERT DELAYED i�leticisi i�lem say�s�. INSERT DELAYED komutunu kullanan her farkl� tablodan biri kendi i�lemini al�r.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED sat�r yaz�m� say�s�d�r.';
$strShowStatusFlush_commandsDescr  = '�al��t�r�lm�� FLUSH ifadesi say�s�d�r.';
$strShowStatusHandler_commitDescr = 'Dahili COMMIT ifadesi say�s�d�r.';
$strShowStatusHandler_deleteDescr = 'Tablodan sat�r�n ka� kez silindi�i say�s�d�r.';
$strShowStatusHandler_discoverDescr = 'E�er MySQL sunucusu verilen isimdeki tabloyu biliyorsa, NDB Y���n� depolama motorunu sorabilir. Buna ke�fetme denir. Handler_discover tablolar�n ke� kez ke�fedildi�ini g�sterir.';
$strShowStatusHandler_read_firstDescr = '�ndeks\'ten ilk giri�in ka� kez okundu�u say�s�d�r. E�er bu de�er y�ksekse, sunucunun �ok fazla indeks taramas� yap�yor oldu�unu g�sterir; �rne�in, SELECT col1 FROM foo, anla��l�yor ki col1 indekslenmi�.';
$strShowStatusHandler_read_keyDescr = 'Anahtarda sat�r tabanl� okumak i�in istek say�s�d�r. E�er bu de�er y�ksekse, sorgular�n�z�n ve tablolar�n�z�n d�zg�n bir �ekilde indekslenmesinin iyi oldu�u belirtisidir.';
$strShowStatusHandler_read_nextDescr = 'Anahtar s�ras�nda sonraki sat�r� okumak i�in istek say�s�d�r. E�er k�s�tl� aral�k ile indeks s�tununu sorguluyorsan�z ya da indeks taramas� yap�yorsan�z, bu artt�r�lan miktard�r.';
$strShowStatusHandler_read_prevDescr = 'Anahtar s�ras�nda �nceki sat�r� okumak i�in istek say�s�d�r. Bu okuma y�ntemi ba�l�ca ORDER BY ... DESC komutunu uyarlamak i�in kullan�l�r.';
$strShowStatusHandler_read_rndDescr = 'Sabitlenmi� konumda sat�r tabanl� okumak i�in istek say�s�d�r. E�er sonu�lar� s�ralamay� gerektiren �ok fazla sorgu yap�yorsan�z, bu de�er y�ksek olur. Muhtemelen b�t�n tablolar� taramak i�in MySQL gerektiren �ok fazla sorgulaman�z vard�r veya d�zg�n bir �ekilde anahtarlar� kullanmamaktas�n�z.';
$strShowStatusHandler_read_rnd_nextDescr = 'Veri dosyas�nda sonraki sat�r� okumak i�in istek say�s�d�r. E�er �ok fazla tablo taramas� yap�yorsan�z, bu de�er y�ksek olur. Genellikle tablolar�n�z d�zg�n bir �ekilde indekslenmedi�inde ya da sorgular�n�z, sahip oldu�unuz indeksleri ��kar�na kullanmak i�in yazmad���nda �nerilir.';
$strShowStatusHandler_rollbackDescr = 'Dahili ROLLBACK ifadesi say�s�d�r.';
$strShowStatusHandler_updateDescr = 'Tablo i�inde sat�r g�ncellemek i�in istek say�s�d�r.';
$strShowStatusHandler_writeDescr = 'Tablo i�inde sat�r eklemek i�in istek say�s�d�r.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Veri i�eren sayfa say�s�d�r (dolu veya temiz).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '�u anki dolu sayfa say�s�d�r.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Temizlenmesi i�in istenmi� ara bellek havuz sayfa say�s�d�r.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Bo� sayfa say�s�d�r.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'InnoDB ara bellek havuzunda sabitlenmi� sayfa say�s�d�r. Bunlar �u anki okunan veya yaz�lm�� ya da baz� di�er sebepler y�z�nden temizlenemeyen veya ta��namayan sayfalard�r.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Me�gul sayfa say�s�d�r ��nk� bunlar sat�r kilitleri veya uyarlamal� adresleme indeksi gibi y�netimsel ek y�k i�in ayr�lm��t�r. Bu de�er ayn� zamanda Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data de�erleri gibi hesaplanabilir.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Sayfalardaki ara bellek havuzunun toplam boyutudur.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'InnoDB "rastgele" �nden okuma ba�lat�m� say�s�d�r. Sorgu tablonun b�y�k bir k�sm�n� tarad��� zaman bu olur ama rastgele d�zende.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'InnoDB s�ral� �nden okuma ba�lat�m� say�s�d�r. InnoDB s�ral� tam tablo taramas� yapt��� zaman bu olur.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'InnoDB\'nin bitirdi�i veya yapt��� mant�ksal okuma iste�i say�s�d�r.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'InnoDB\'nin ara bellek havuzundan tatmin olamad��� ve tek-sayfa okumas� yapmak zorunda oldu�u mant�ksal okuma say�s�d�r.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normal olarak arkaplanda olan InnoDB ara bellek havuzuna yaz�l�r. Ancak, e�er sayfa olu�turma veya okuma gerekliyse ve temiz sayfalar yoksa �nce sayfalar�n temizlenmesi i�in beklenmesi gereklidir. Bu saya� bu bekleme durumlar�n� sayar. E�er ara bellek havuzu boyutu d�zg�n bir �ekilde ayarland�ysa, bu de�er k���k olmal�d�r.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'InnoDB ara bellek havuzuna bitti yazma say�s�d�r.';
$strShowStatusInnodb_data_fsyncsDescr = '�imdiye kadarki fsync() i�lem say�s�d�r.';
$strShowStatusInnodb_data_pending_fsyncsDescr = '�u anki bekleyen fsync() i�lem say�s�d�r.';
$strShowStatusInnodb_data_pending_readsDescr = '�u anki bekleyen okuma say�s�d�r.';
$strShowStatusInnodb_data_pending_writesDescr = '�u anki bekleyen yazma say�s�d�r.';
$strShowStatusInnodb_data_readDescr = 'Bayt cinsinden �imdiye kadarki veri okuma miktar�d�r.';
$strShowStatusInnodb_data_readsDescr = 'Toplam veri okuma say�s�d�r.';
$strShowStatusInnodb_data_writesDescr = 'Toplam veri yazma say�s�d�r.';
$strShowStatusInnodb_data_writtenDescr = 'Bayt cinsinden �imdiye kadarki yaz�lm�� veri miktar�d�r.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Bu ama� i�in yaz�lm�� sayfa say�s� ve ger�ekle�tirilmi� �ifte-yaz�m yazma say�s�d�r.';
$strShowStatusInnodb_dblwr_writesDescr = 'Bu ama� i�in yaz�lm�� sayfa say�s� ve ger�ekle�tirilmi� �ifte-yaz�m yazma say�s�d�r.';
$strShowStatusInnodb_log_waitsDescr = 'Sahip olunan bekleme say�s�d�r ��nk� g�nl�k ara belle�i �ok k���k ve devam etmeden �nce temizlenmesi i�in beklemek zorunday�z.';
$strShowStatusInnodb_log_write_requestsDescr = 'G�nl�k yazma iste�i say�s�d�r.';
$strShowStatusInnodb_log_writesDescr = 'G�nl�k dosyas�na fiziksel yazma say�s�d�r.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'G�nl�k dosyas�na bitmi� fsyncs yazma say�s�d�r.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Bekleyen g�nl�k dosyas� fsyncs say�s�d�r.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Bekleyen g�nl�k dosyas� yazma say�s�d�r.';
$strShowStatusInnodb_os_log_writtenDescr = 'G�nl�k dosyas�na yaz�l� bayt say�s�d�r.';
$strShowStatusInnodb_pages_createdDescr = 'Olu�turulmu� sayfa say�s�d�r.';
$strShowStatusInnodb_page_sizeDescr = 'Derlenen InnoDB sayfa boyutu (varsay�lan 16KB). Bir�ok de�er sayfalarda say�l�r; sayfa boyutu bunlar�n kolayl�kla bayt\'a d�n��t�r�lmesine izin verir.';
$strShowStatusInnodb_pages_readDescr = 'Okunan sayfa say�s�d�r.';
$strShowStatusInnodb_pages_writtenDescr = 'Yaz�lm�� sayfa say�s�d�r.';
$strShowStatusInnodb_row_lock_current_waitsDescr = '�u anki beklenen sat�r kilidi say�s�d�r.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Milisaniye cinsinden sat�r kilidi elde etmek i�in ortalama s�redir.';
$strShowStatusInnodb_row_lock_timeDescr = 'Milisaniye cinsinden sat�r kilidi elde ederken harcanm�� toplam s�redir.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Milisaniye cinsinden sat�r kilidi elde etmek i�in en fazla s�redir.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Sat�r kilidinin beklemek zorunda kald��� s�re say�s�d�r.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB tablolar�ndan silinen sat�r say�s�d�r.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB tablolar�na eklenen sat�r say�s�d�r.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB tablolar�ndan okunan sat�r say�s�d�r.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB tablolar�nda g�ncellenen sat�r say�s�d�r.';
$strShowStatusKey_blocks_not_flushedDescr = 'Anahtar �nbelle�indeki de�i�tirilmi� ama diskte hen�z temizlenmemi� anahtar blo�u say�s�d�r. Not_flushed_key_blocks olarak bilinip kullan�l�r.';
$strShowStatusKey_blocks_unusedDescr = 'Anahtar �nbelle�inde kullan�lmayan blok say�s�d�r. Bu de�eri anahtar �nbelle�inin ne kadar�n�n kullan�mda olmas�n� belirlemek i�in kullanabilirsiniz.';
$strShowStatusKey_blocks_usedDescr = 'Anahtar �nbelle�inde kullan�lan blok say�s�d�r. Bu de�erin en u� noktada olmas� bir kerede en fazla blok say�s�n�n kullan�mda olmamas�n� g�sterir.';
$strShowStatusKey_read_requestsDescr = '�nbellekten anahtar blo�unun okunmas� i�in istek say�s�d�r.';
$strShowStatusKey_readsDescr = 'Diskten anahtar blo�unun fiziksel okunma say�s�d�r. E�er Key_reads de�eri b�y�kse, key_buffer_size de�eriniz muhtemelen �ok k���kt�r. Eksik �nbellek oran� Key_reads/Key_read_requests olarak hesaplanabilir.';
$strShowStatusKey_write_requestsDescr = '�nbelle�e anahtar blo�u yazmak i�in istek say�s�d�r.';
$strShowStatusKey_writesDescr = 'Diske anahtar blo�unu fiziksel yazma say�s�d�r.';
$strShowStatusLast_query_costDescr = 'Sorgu en iyileyicisi taraf�ndan hesaplanm�� gibi son derlenen sorgunun toplam maliyetidir. Ayn� sorgu i�in farkl� sorgu planlar�n�n maliyetini kar��la�t�rmak i�in yararl�d�r. Varsay�lan de�er 0, hen�z derlenmi� sorgu olmad��� anlam�na gelir.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'INSERT DELAYED s�ralar�nda yaz�lmak i�in bekleyen sat�r say�s�d�r.';
$strShowStatusOpened_tablesDescr = 'A��k olan tablo say�s�d�r. E�er a��k tablolar b�y�kse, tablo �nbellek de�eriniz muhtemelen �ok k���kt�r.';
$strShowStatusOpen_filesDescr = 'A��k olan dosya say�s�d�r.';
$strShowStatusOpen_streamsDescr = 'A��k olan ak�� say�s�d�r (ba�l�ca g�nl�kleme i�in kullan�l�r).';
$strShowStatusOpen_tablesDescr = 'A��k olan tablo say�s�d�r.';
$strShowStatusQcache_free_blocksDescr = 'Sorgu �nbelle�indeki bo� bellek blo�u say�s�d�r.';
$strShowStatusQcache_free_memoryDescr = 'Sorgu �nbelle�i i�in bo� bellek miktar�d�r.';
$strShowStatusQcache_hitsDescr = '�nbelle�e ula�ma say�s�d�r.';
$strShowStatusQcache_insertsDescr = '�nbelle�e eklenen sorgu say�s�d�r.';
$strShowStatusQcache_lowmem_prunesDescr = 'Yeni sorgular� �nbelleklemek i�in belle�i bo�altmaya y�nelik �nbellekten kald�r�lm�� sorgu say�s�d�r. Bu bilgi sorgu �nbellek boyutunu ayarlam�n�za yard�mc� olabilir. �nbellekten hangi sorgular�n kald�r�laca��na karar vermek i�in sorgu �nbelle�i en az son kullan�lm�� (LRU) stratejisini kullan�r.';
$strShowStatusQcache_not_cachedDescr = '�nbelleklenmemi� sorgu say�s�d�r (�nbelleklenemez, ya da query_cache_type ayar�ndan dolay� �nbelleklenmedi).';
$strShowStatusQcache_queries_in_cacheDescr = '�nbellekte kay�tl� sorgu say�s�d�r.';
$strShowStatusQcache_total_blocksDescr = 'Sorgu �nbelle�i i�indeki toplam blok say�s�d�r.';
$strShowStatusReset = 'S�f�rla';
$strShowStatusRpl_statusDescr = 'Ar�za-g�venli �o�alt�m� durumu (hen�z tamamlanmad�).';
$strShowStatusSelect_full_joinDescr = '�ndeksler kullanmayan birle�tirme say�s�d�r. E�er bu de�er 0 de�ilse, tablolar�n�z�n indekslerini dikkatli olarak kontrol etmelisiniz.';
$strShowStatusSelect_full_range_joinDescr = 'Referans tablosunda aral�k aramas� kullanan birle�tirme say�s�d�r.';
$strShowStatusSelect_range_checkDescr = 'Her bir sat�rdan sonra anahtar kullan�m�n� kontrol eden anahtars�z birle�tirme say�s�d�r. (E�er bu de�er 0 de�ilse, tablolar�n�z�n indekslerini dikkatli olarak kontrol etmelisiniz.)';
$strShowStatusSelect_rangeDescr = '�lk tabloda aral�klar� kullanan birle�tirme say�s�d�r. (Normal olarak kusurlu de�ildir, e�er b�y�kse bile.)';
$strShowStatusSelect_scanDescr = '�lk tablonun tam taramas�n�n yap�ld��� birle�tirme say�s�d�r.';
$strShowStatusSlave_open_temp_tablesDescr = 'Slave SQL i�lemi taraf�ndan �u anki a��k ge�ici tablo say�s�d�r.';
$strShowStatusSlave_retried_transactionsDescr = '�o�alt�lan slave SQL i�leminin yeniden denedi�i i�lerin toplam (ba�lang��tan beri) s�re say�s�d�r.';
$strShowStatusSlave_runningDescr = 'E�er sunucu master\'a ba�l� slave ise, bu A�IKTIR.';
$strShowStatusSlow_launch_threadsDescr = 'Olu�turmak i�in slow_launch_time saniyeden daha uzun zaman alm�� i�lem say�s�d�r.';
$strShowStatusSlow_queriesDescr = 'long_query_time saniyeden daha uzun zaman alm�� sorgu say�s�d�r.';
$strShowStatusSort_merge_passesDescr = 'Yap�lmas� zorunlu s�ralama algoritmas� birle�tirme ge�i�i say�s�d�r. E�er bu de�er b�y�kse, sort_buffer_size sistem de�i�keninin de�erini artt�rmay� dikkate almal�s�n�z.';
$strShowStatusSort_rangeDescr = 'Aral�klarla yap�lm�� s�ralama say�s�d�r.';
$strShowStatusSort_rowsDescr = 'S�ralanm�� sat�r say�s�d�r.';
$strShowStatusSort_scanDescr = 'Taranan tablo taraf�ndan yap�lm�� s�ralama say�s�d�r.';
$strShowStatusTable_locks_immediateDescr = 'Tablo kilidinin hemen tan�nd��� s�re say�s�d�r.';
$strShowStatusTable_locks_waitedDescr = 'Tablo kilidinin hemen tan�namad��� ve beklemenin gerekti�i s�re say�s�d�r. E�er bu de�er y�ksekse ve performans sorununuz varsa, �nce sorgular�n�z� uyarlamal�s�n�z ve sonra ya tablonuzu ya da tablolar�n�z� b�l�n veya �o�altma kullan�n.';
$strShowStatusThreads_cachedDescr = '��lem �nbelle�i i�inde i�lem say�s�d�r. �nbelle�e ula�ma h�z� Threads_created/Ba�lant�lar olarak hesaplanabilir. E�er bu de�er k�rm�z� ise, thread_cache_size boyutunuzu y�kseltmelisiniz.';
$strShowStatusThreads_connectedDescr = '�u anki a��k ba�lant� say�s�d�r.';
$strShowStatusThreads_createdDescr = 'Ba�lant�lar� i�lemek i�in olu�turulmu� i�lem say�s�d�r. E�er Threads_created de�eri b�y�k ise, thread_cache_size de�erini artt�rmak isteyebilirsiniz. (e�er iyi bir i�lem uygulamas�na sahipseniz, normal olarak bu, dikkate de�er bir performans art��� vermez.)';
$strShowStatusThreads_runningDescr = 'Hala faaliyette olan i�lemler say�s�d�r.';
$strShowTableDimension = 'Tablolar�n boyutlar�n� g�ster';
$strShowTables = 'Tablolar� g�ster';
$strShowThisQuery = 'Bu sorguyu burada tekrar g�ster';
$strSimplifiedChinese = 'Basitle�tirilmi� �ince';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSkipQueries = 'Ba�lang��tan atlamak i�in kay�t(sorgu) say�s�:';
$strSlovak = 'Slovak�a';
$strSlovenian = 'Slovence';
$strSmallBigAll = 'T�m� K���k/B�y�k';
$strSnapToGrid = 'K�lavuza ayarla';
$strSocketProblem = '(ya da yerel MySQL sunucusunun soketi do�ru olarak yap�land�r�lmad�)';
$strSortByKey = 'Anahtara g�re s�rala';
$strSorting = 'S�ralama';
$strSort = 'S�rala';
$strSpaceUsage = 'Alan kullan�m�';
$strSpanish = '�spanyolca';
$strSplitWordsWithSpace = 'Kelimeler bo�lukla ayr�l�r (" ").';
$strSQLCompatibility = 'SQL uyumluluk kipi';
$strSQLExportType = 'D��ar� aktarma t�r�';
$strSQLParserBugMessage = 'SQL ayr��t�r�c�s�nda bir hata bulabilme ihtimaliniz var. L�tfen sorgunuzu yak�ndan dikkatli bir �ekilde g�zden ge�irin ve t�rnaklar�n do�ru ve uyumsuz olmad���n� kontrol edin. Di�er muhtemel hata nedenleri t�rnakl� metin alan�n�n d���nda binari ile dosya g�nderiyor olman�z olabilir. Ayn� zamanda sorgunuzu MySQL komut sat�r� arabiriminde deneyebilirsiniz. E�er hata varsa, a�a��daki MySQL sunucu hata ��kt�s�, sorunu te�his etmenizde ayr�ca size yard�mc� olabilir. E�er hala sorunlar�n�z varsa ya da komut sat�r� arabirimi ba�ar�l� oldu�unda ayr��t�r�c� ba�ar�s�zsa, l�tfen sorunlara neden olan SQL sorgu giri�inizi tek bir sorguya indirgeyin ve a�a��daki CUT b�l�m� i�indeki veri y���n� ile birlikte hata raporunu g�nderin:';
$strSQLParserUserError = 'SQL sorgunuzda bir hata oldu�u g�r�n�yor. E�er varsa, a�a��daki MySQL sunucu hata ��kt�s�, sorunu te�his etmenizde ayr�ca size yard�mc� olabilir.';
$strSQLQuery = 'SQL sorgusu';
$strSQLResult = 'SQL sonucu';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ge�ersiz Tan�mlay�c�';
$strSQPBugUnclosedQuote = 'Kapat�lmam�� t�rnak';
$strSQPBugUnknownPunctuation = 'Bilinmeyen Noktalama ��areti Dizgisi';
$strStandInStructureForView = 'G�r�n�m yap�s� durumu';
$strStatCheckTime = 'Son kontrol';
$strStatCreateTime = 'Yaratma';
$strStatement = '�fadeler';
$strStatisticsOverrun = 'Me�gul sunucu �zerinde, bayt saya�lar� a��r� i�leyebilir, bu y�zden MySQL sunucusu taraf�ndan raporlanan istatistikler do�ru olmayabilir.';
$strStatUpdateTime = 'Son g�ncellenme';
$strStatus = 'Durum';
$strStorageEngine = 'Depolama Motoru';
$strStorageEngines = 'Depolama Motorlar�';
$strStrucCSV = 'CSV';
$strStrucData = 'Yap� ve Veri';
$strStrucExcelCSV = 'MS Excel i�in CSV';
$strStrucNativeExcel = 'Ba��ms�z MS Excel bi�imi';
$strStrucOnly = 'Sadece yap�';
$strStructPropose = 'Tablo yap�s� �ner';
$strStructureForView = 'G�r�n�m yap�s�';
$strStructure = 'Yap�';
$strSubmit = 'G�nder';
$strSuccess = 'SQL sorgunuz ba�ar�l� olarak �al��t�r�ld�';
$strSum = 'Toplam';
$strSwedish = '�sve��e';
$strSwitchToDatabase = 'Kopyalanm�� veritaban�na ge�.';  
$strSwitchToTable = 'Kopyalanm�� tabloya ge�';

$strTableAlreadyExists = '%s tablosu zaten var!';
$strTableComments = 'Tablo yorumlar�';
$strTableEmpty = 'Tablo ad� bo�!';
$strTableHasBeenDropped = '%s tablosu kald�r�ld�';
$strTableHasBeenEmptied = '%s tablosu bo�alt�ld�';
$strTableHasBeenFlushed = '%s tablosu temizlendi';
$strTableIsEmpty = 'Tablo bo� olarak g�r�n�yor!';
$strTableMaintenance = 'Tablo bak�m�';
$strTableName = 'Tablo ad�';
$strTableOfContents = '��erik tablosu';
$strTableOptions = 'Tablo se�enekleri';
$strTables = '%s tablo';
$strTableStructure = 'Tablo yap�s�:';
$strTable = 'Tablo:';
$strTakeIt = 'Al';
$strTblPrivileges = 'Tabloya �zg� yetkiler';
$strTempData = 'Ge�ici veri';
$strTextAreaLength = 'Uzunlu�u nedeniyle,<br /> bu alan d�zenlenebilir olmayabilir ';
$strThai = 'Tayca';
$strThemeDefaultNotFound = 'Varsay�lan tema %s bulunamad�!';
$strThemeNoPreviewAvailable = '�nizleme mevcut de�il.';
$strThemeNotFound = '%s temas� bulunamad�!';
$strThemeNoValidImgPath = '%s temas� i�in ge�erli resim yolu bulunamad�!';
$strThemePathNotFound = '%s temas� i�in tema yolu bulunamad�!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Bu Anamakine';
$strThreadSuccessfullyKilled = '%s i�lemi ba�ar�l� olarak sonland�r�ld�.';
$strThreads = '��lemler';
$strTimeoutInfo = '�nceki i�eri aktarma zaman a��m�na u�rad�, sonradan yeniden g�nderim %d konumundan devam edecek.';
$strTimeoutNothingParsed = 'Ancak son �al��t�rmada hi� veri ayr��t�r�lmad�, bu genellikle, php zaman s�n�rlar�n� artt�rmad���n�z s�rece phpMyAdmin\'in bu i�eri aktarmay� biteremeyece�i anlam�na gelir.';
$strTimeoutPassed = 'K���k program zaman a��m� ge�ti, e�er i�eri aktarmay� bitirmek istiyorsan�z, l�tfen ayn� dosyay� yeniden g�nderin ve i�eri aktarma devam edecektir.';
$strTime = 'Zaman';
$strToFromPage = 'sayfadan/sayfaya';
$strToggleScratchboard = 'Karalama panosunu de�i�tir';
$strToggleSmallBig = 'K�����/b�y��� de�i�tir';
$strToSelectRelation = '�li�kiyi se�mek i�in buraya t�klay�n :';
$strTotal = 'toplam';
$strTotalUC = 'Toplam';
$strTraditionalChinese = 'Geleneksel �ince';
$strTraditionalSpanish = 'Geleneksel �spanyolca';
$strTraffic = 'Trafik';
$strTransactionCoordinator = '��lem koordinat�r�';
$strTransformation_application_octetstream__download = 'Alan�n binari verisini indirmek i�in ba�lant� g�r�nt�ler. Dosya ad�n� belirlemek i�in ilk se�ene�i kullanabilirsiniz ya da dosya ad�n� i�eren alan�n ad� olarak ikinci se�ene�i kullanabilirsiniz. E�er ikinci se�ene�i kullan�rsan�z birinci se�ene�i bo� karakter dizgisi olarak ayarlaman�z gerekir.';
$strTransformation_application_octetstream__hex = 'Verinin onalt�l�k g�sterimini g�r�nt�ler. �ste�e ba�l� ilk parametre, ne s�kl�kta bo�luk eklenece�ini belirler (varsay�lan� 2 yar�m baytt�r).';
$strTransformation_image_jpeg__inline = 'T�klanabilir k���k resim g�r�nt�ler. Se�enekler piksel cinsinden en fazla geni�lik ve y�ksekliktir. Orijinal en-boy oran� korunur.';
$strTransformation_image_jpeg__link = 'Bu resmi indirme i�in ba�lant� g�r�nt�ler.';
$strTransformation_image_png__inline = 'Resme/jpeg\'e bak�n: sat�ri�i';
$strTransformation_text_plain__dateformat = 'Bi�imlendirilmi� tarih olarak ZAMAN, ZAMAN B�LG�S�, TAR�H veya say�sal  unix zaman bilgisi alan�n� g�r�nt�ler. �lk se�enek zaman bilgisine (Varsay�lan: 0) eklenecek olan kar��l�k (saat cinsinden). �kinci se�ene�i farkl� tarih/zaman bi�imi dizgisini belirtmek i�in kullan�n. ���nc� se�enek yerel tarihi veya bunun i�in UTC olan� ("local" veya "utc" dizgisi kullan�n) g�rmek istedi�inizi belirler. Buna g�re tarih bi�imi farkl� de�ere sahiptir - "local" i�in PHP\'nin strftime() i�levine belgelerden bak�n ve "utc" ise gmdate() i�levi kullan�larak olur.';
$strTransformation_text_plain__external = 'SADECE LINUX: Harici bir uygulama �al��t�r�r ve alan verisini standart giri� yoluyla besler. Uygulaman�n standart ��kt�s� d�ner. D�zg�n HTML kodu bask�s� i�in varsay�lan d�zenlidir. G�venlik nedeniyle libraries/transformations/text_plain__external.inc.php dosyas�n� elle d�zenlemeli ve olmas�n� istedi�iniz ara�lar� listelemelisiniz. �lk se�enek kullanmak istedi�iniz program say�s� ve ikinci se�enek program i�in parametrelerdir. ���nc� se�enek, e�er 1\'e ayarlan�rsa, htmlspecialchars() i�levi kullan�larak ��kt�y� d�n��t�recektir (Varsay�lan 1). D�rd�nc� se�enek, e�er 1\'e ayarlan�rsa, s�zc�k kayd�rma korunacak ve t�m ��kt� tek bir sat�rda g�r�necektir (Varsay�lan 1).';
$strTransformation_text_plain__formatted = 'Alan�n i�eri�ini, htmlspecialchars() i�levini �al��t�rmadan oldu�u gibi g�r�nt�ler. Bu, ge�erli HTML i�erdi�i var say�lan aland�r.';
$strTransformation_text_plain__imagelink = 'Bir resim ve bir ba�lant� g�r�nt�ler; alan dosya ad�n� i�erir. �lk se�enek "http://www.adresim.com/" gibi bir URL �n ekidir. �kinci ve ���nc� se�enekler piksel cinsinden geni�lik ve y�ksekliktir.';
$strTransformation_text_plain__link = 'Bir ba�lant� g�r�nt�ler; alan dosya ad�n� i�erir. �lk se�enek "http://www.adresim.com/" gibi bir URL �n ekidir. �kinci se�enek ba�lant� i�in ba�l�kt�r.';
$strTransformation_text_plain__sql = 'S�zdizimi vurgulamal� SQL sorgusu gibi metni bi�imlendirir.';
$strTransformation_text_plain__substr = 'Karakter dizisinin bir k�sm�n� g�r�nt�ler. �lk se�enek dizginin ba�lang�c�ndan atlamak i�in karakter say�s�d�r (Varsay�lan 0). �kinci se�enek d�nd�r�lecek karakter say�s�d�r (Varsay�lan: dizginin sonuna kadar). ���nc� se�enek k�saltma meydana geldi�inde eklemek ve/veya ba�a eklemek i�in dizgidir (Varsay�lan: "...").';
$strTriggers = 'Tetiklemeler';
$strTruncateQueries = 'G�sterilen Sorgular� K�salt';
$strTurkish = 'T�rk�e';
$strType = 'T�r�';

$strUkrainian = 'Ukraynaca';
$strUncheckAll = 'Hi�birini Se�me';
$strUnicode = 'Unicode';
$strUnique = 'E�siz';
$strUnknown = 'bilinmeyen';
$strUnselectAll = 'T�m Se�imi Kald�r';
$strUnsupportedCompressionDetected = 'Desteklenmeyen s�k��t�rmayla (%s) dosya y�klemeyi denediniz. Ya bunun i�in destek hen�z tamamlanmad� ya da yap�land�rman�z taraf�ndan etkisizle�tirildi.';
$strUpdatePrivMessage = '%s i�in yetkileri g�ncellediniz.';
$strUpdateProfileMessage = 'Profil g�ncellendi.';
$strUpdateQuery = 'Sorguyu G�ncelle';
$strUpdComTab = 'S�tun_Yorumlar� tablonuzun nas�l g�ncellenece�ini ��renmek i�in l�tfen belgelere bak�n.';
$strUpgrade = '%s %s veya sonras�na y�kseltmelisiniz.';
$strUploadErrorCantWrite = 'Dosyay� diske yazma ba�ar�s�z.';
$strUploadErrorExtension = 'Dosya g�nderme uzant�s�ndan dolay� durduruldu.';
$strUploadErrorFormSize = 'G�nderilen dosya, HTML formu i�inde belirlenmi� MAX_FILE_SIZE y�nergesini a��yor.';
$strUploadErrorIniSize = 'G�nderilen dosya, php.ini i�indeki upload_max_filesize y�nergesini a��yor.';
$strUploadErrorNoTempDir = 'Eksik ge�ici klas�r.';
$strUploadErrorPartial = 'G�nderilen dosya sadece k�smen g�nderildi.';
$strUploadErrorUnknown = 'Dosya g�ndermede bilinmeyen hata oldu.';
$strUploadLimit = 'Muhtemelen �ok b�y�k dosya g�ndermeyi denediniz. L�tfen bu s�n�ra ��z�m yolu bulmak i�in %sbelgelere%s ba�vurun.';
$strUploadsNotAllowed = 'Bu sunucuda dosya g�nderimlerine izin verilmez.';
$strUsage = 'Kullan�m';
$strUseBackquotes = 'Tablo ve alan adlar�n� ters t�rnak ile kapsa';
$strUsedPhpExtensions = 'Kullan�lan PHP uzant�lar�';
$strUseHostTable = 'Anamakine Tablosu kullan';
$strUserAlreadyExists = '%s kullan�c�s� zaten var!';
$strUserEmpty = 'Kullan�c� ad� bo�!';
$strUser = 'Kullan�c�';
$strUserName = 'Kullan�c� Ad�';
$strUserNotFound = 'Se�ili kullan�c� yetki tablosunda bulunamad�.';
$strUserOverview = 'Kullan�c� g�zden ge�irme';
$strUsersDeleted = 'Se�ili kullan�c�lar ba�ar�l� olarak silindi.';
$strUsersHavingAccessToDb = '&quot;%s&quot; veritaban�na eri�imi olan kullan�c�lar';
$strUseTabKey = 'De�erden de�ere ge�mek i�in TAB tu�unu veya herhangi bir yere gitmek i�in CTRL+OK TU�LARI\'n� kullan�n.';
$strUseTables = 'Tablolar� kullan';
$strUseTextField = 'Metin alan�n� kullan';
$strUseThisValue = 'Bu de�eri kullan';

$strValidateSQL = 'SQL\'i do�rula';
$strValidatorError = 'SQL onaylay�c�s� ba�lat�lamad�. %sBelgelerde%s anlat�ld��� gibi l�tfen gerekli php uzant�lar�n�n kurulu oldu�unu kontrol edin.';
$strValue = 'De�er';
$strVar = 'De�i�ken';
$strVersionInformation = 'S�r�m bilgisi';
$strViewDumpDatabases = 'Veritabanlar�n�n d�k�m�n� (�emas�n�) g�ster';
$strViewDumpDB = 'Veritaban�n�n d�k�m�n� (�emas�n�) g�ster';
$strViewDump = 'Tablonun d�k�m�n� (�emas�n�) g�ster';
$strViewHasBeenDropped = '%s g�r�n�m� kald�r�ld�';
$strViewMaxExactCount = 'Bu g�r�n�m %s sat�rdan daha fazla. L�tfen %sbelgelere%s ba�vurun.';
$strViewName = 'G�R�N�M ad�';
$strView = 'G�r�n�m';

$strWebServerUploadDirectoryError = 'G�nderme i�i i�in ayarlad���n�z dizine ula��lam�yor';
$strWebServerUploadDirectory = 'web sunucusu g�nderme dizini';
$strWelcome = '%s s�r�m�ne Ho� Geldiniz';
$strWestEuropean = 'Bat� Avrupa';
$strWildcard = 'joker';
$strWindowNotFound = 'Hedef taray�c� penceresi g�ncellenemiyor. Belki ana pencereyi kapatm�� olabilirsiniz ya da taray�c�n�z�n g�venlik ayarlar� �apraz-pencere g�ncellemelerini engellemek i�in yap�land�r�lm��t�r.';
$strWithChecked = 'Se�ilileri:';
$strWriteRequests = 'Yazma istekleri';
$strWrongUser = 'Yanl�� kullan�c� ad�/parola. Eri�im engellendi.';

$strXML = 'XML';

$strYes = 'Evet';

$strZeroRemovesTheLimit = 'Not: Bu se�eneklerin 0 (s�f�r)\'a ayarlanmas� s�n�r� kald�r�r.';
$strZip = '"zip olarak"';

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
