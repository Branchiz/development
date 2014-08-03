<?php
/* $Id: azerbaijani-iso-8859-9.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

// terc�medeki eksiklerimi ve ya sehv oldu�unu d���nd�y�n�z yerleri shehriyari@trcomm.net adresine g�ndere bilersiniz...
// �ehriyar �manov 30 Avqust 2003... Shehi

$charset = 'iso-8859-9';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bayt', 'KB', 'MB', 'QB', 'TB', 'PB', 'EB');

$day_of_week = array('Baz', 'Baz Ert', '�er� Ax�', '�er�', 'C�me Ax�', 'C�me', '�en');
$month = array('Yan', 'Fev', 'Mar', 'Apr', 'May', '�yun', '�yul', 'Avq', 'Sent', 'Okt', 'Noy', 'Dek');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y saat %H:%M';
$timespanfmt = '%s g�n, %s saat, %s deqiqe ve %s saniye';

$strAbortedClients = 'Dayand�r�lm�� Elaqeler';
$strAccessDenied = 'Giri� Tesdiq Edilmedi';
$strAction = 'Fealiyyetler';
$strAddAutoIncrement = 'AUTO_INCREMENT deyeri elave et';
$strAddDeleteColumn = 'Sahe S�tunlar�n� Elave Et/Sil';
$strAddDeleteRow = 'Kriteria Setirlerini Elave Et/Sil';
$strAddHeaderComment = 'Ba�l��a x�lase me\'lumat� elave et (\\n yeni setire ke�ir)';
$strAddIntoComments = 'X�laseye elave et';
$strAddNewField = 'Yeni sahe elave et';
$strAddPrivilegesOnDb = 'A�a��dak� me\'lumat bazas� ���n selahiyyet m�eyyen et';
$strAddPrivilegesOnTbl = 'A�a��dak� cedvel ���n selahiyyetler m�eyyen et';
$strAddSearchConditions = 'Axtar�� �ertlerini gir ("where" ifadesinin esas metni):';
$strAddToIndex = '�ndekse &nbsp;%s&nbsp;s�tun elave et';
$strAddUserMessage = 'Yeni istifade�i elave etdiniz.';
$strAddUser = 'Yeni �stifade�i elave Et';
$strAdministration = 'Administrasiya';
$strAffectedRows = 'Deyi�en setir say�:';
$strAfterInsertBack = 'Evvelki sehifeye qay�t';
$strAfterInsertNewInsert = 'Teze bir setir daha gir';
$strAfterInsertNext = 'Bir sonrak� setre ke�';
$strAfterInsertSame = 'Bu sehifeye geri d�n';
$strAfter = 'Sonra: %s';
$strAll = 'All';
$strAllTableSameWidth = 'eyni enli b�t�n cedveller g�sterilsinmi?';
$strAlterOrderBy = 'Cedvel s�ras�na buna g�re yeniden qur';
$strAnalyzeTable = 'Cedveli analiz et';
$strAnd = 'Ve';
$strAnIndex = '%s �zerine indeks elave edildi';
$strAny = 'Her hans�';
$strAnyHost = 'Her hans� host';
$strAnyUser = 'Her hans� istifade�i';
$strAPrimaryKey = '%s �zerine Birinci Dereceli A�ar elave edildi.';
$strArabic = 'Ereb';
$strArmenian = 'Ermeni';
$strAscending = 'Artan s�rada';
$strAtBeginningOfTable = 'Cedvelin ba��na';
$strAtEndOfTable = 'Cedvelin sonuna';
$strAttr = 'X�susiyyetler';
$strAutomaticLayout = 'Automatik �ablon';

$strBack = 'Geri';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - deyi�iklik etme';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = 'Bookmark-lanm�� SQL sor�usu';
$strBookmarkThis = 'Bu SQL sor�usunu bookmark-la';
$strBookmarkView = 'Sadece g�ster';
$strBrowse = '��indekiler';
$strBulgarian = 'Bolqar Dili';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.';
$strBzip = '"bzip"lenmi�';

$strCannotLogin = 'MySQL server-e gire bilmirem';
$strCantLoadRecodeIconv = 'Charset �evirmeleri ���n laz�m olan iconv ve ya recode uzant�lar�n� y�kleye bilmirem; ya php-ni bu uzant�lar� istifade ede bilmesi ���n yeniden qura�d�r�n ya da phpMyAdmin-de charset �evirme x�susiyyetini s�nd�r�n.';
$strCantLoad = '%s uzant�s�n� (extension) y�kleye bilmirem,<br />xahi� edirem PHP Konfiqurasiyan� g�zden ke�ir.';
$strCantRenameIdxToPrimary = '�ndeksi Birinci Dereceli (PRIMARY) olaraq yeniden adland�ra bilmirem!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Cardinality';
$strCentralEuropean = 'Merkezi Avropa';
$strChangeCopyModeCopy = '... k�hnesini saxla.';
$strChangeCopyModeDeleteAndReload = ' ... istifade�i cedvellerinden k�hnesini sil ve ard�ndan selahiyyetleri yeniden y�kle.';
$strChangeCopyMode = 'Eyni selahiyyetlere sahib yeni istifade�i qur ve ...';
$strChangeCopyModeJustDelete = ' ... istifade�i cedvellerinden k�hnesini sil.';
$strChangeCopyModeRevoke = ' ... k�hne istifade�inin selahiyyetlerini elinden alaraq onu sil.';
$strChangeCopyUser = 'Sistem Giri� Me\'lumat�n� Deyi�dir / �stifade�ini Kopyala';
$strChange = 'Deyi�dir';
$strChangeDisplay = 'G�sterilecek Saheni Se�';
$strChangePassword = 'Parolu Deyi�dir';
$strCharset = 'Charset';
$strCharsetOfFile = 'Fayl�n Charset-i:';
$strCheckAll = 'Ham�s�n� Se�';
$strCheckPrivsLong = '&quot;%s&quot; bazas� ���n selahiyyetleri g�zden ke�ir.';
$strCheckPrivs = 'Selahiyyetleri G�zden Ke�ir';
$strCheckTable = 'Cedveli yoxla';
$strChoosePage = 'Xahi� edirem, deyi�dirilecek Sehifeni se�';
$strColComFeat = 'S�tun Q�sa �zahat�n� Deyi�dir';
$strColumnNames = 'S�tun adlar�';
$strColumnPrivileges = 'S�tunaxas Selahiyyetler';
$strCommand = 'Komanda Tipi';
$strComments = 'Q�sa �zahatlar';
$strCompleteInserts = 'Tam giri�li';
$strCompression = 'S�x��d�rma';
$strConfigFileError = 'phpMyAdmin konfiqurasiya fayl�n�z� oxuya bilmedi!<br />Bunun sebebi fayldak� parse error ya da fayl�n m�vcud olmamas� ola biler.<br />Xahi� edirem a�a��dak� link-i istifade ederek konfiqurasiya fayl�n� �a��r�n ve ald���n�z php xeta mesaj(lar)�n� oxuyun. Bir �ox halda ya tek d�rnaq ya da n�qteli verg�l eksikliyi vard�r.<br />Eger bo� sehife ile qar��la�san�z, demek ki, her �ey qaydas�ndad�r.';
$strConfigureTableCoord = 'Xahi� edirem, %s cedveli ���n koordinatlar� yeniden m�eyyen et.';
$strConnectionError = 'Elaqe qura bilmirem: yaln�� qurulu�.';
$strConnections = 'Elaqeler';
$strCookiesRequired = 'Sisteme girebilmeniz ���n �erez fayllar� (cookie-ler) aktiv olmal�d�r.';
$strCopyTable = 'Cedveli kopyala (me\'lumat bazas�<b>.</b>cedvel):';
$strCopyTableOK = '%s cedveli %s - e kopyaland�.';
$strCopyTableSameNames = 'Cedveli eynisinin �zerine kopyalaya bilmerem!';
$strCouldNotKill = 'phpMyAdmin %s emeliyyat thread-ini s�nd�re (kill) bilmedi. B�y�k ehtimal art�q s�nd�r�lm��d�r.';
$strCreateIndex = '&nbsp;%s&nbsp;s�tunda indeks yarat';
$strCreateIndexTopic = 'Yeni indeks qur';
$strCreateNewDatabase = 'Yeni me\'lumat bazas� qur';
$strCreateNewTable = '%s bazas�nda yeni cedvel qur';
$strCreatePage = 'Yeni Sehife qur';
$strCreatePdfFeat = 'PDF-lerin qurulmas�';
$strCreate = 'Qur';
$strCreationDates = 'Qurulu�/Deyi�dirilme/Yoxlama tarixleri';
$strCriteria = 'Kriteriyalar';
$strCroatian = 'Xorvat Dili';
$strCyrillic = 'Kiril';
$strCzechSlovak = '�ex-Slovak';

$strDatabaseExportOptions = 'Me\'lumat bazas� eksport variantlar�';
$strDatabaseHasBeenDropped = '%s bazas� le�v edildi.';
$strDatabase = 'Me\'lumat Bazas�';
$strDatabasesDropped = '%s bazas� m�veffeqiyyetle le�v edildi.';
$strDatabases = 'Me\'lumat Bazalar�';
$strDatabasesStatsDisable = 'Statistikalar� S�nd�r';
$strDatabasesStatsEnable = 'Statistikalar� Aktivle�dir';
$strDatabasesStatsHeavyTraffic = 'Qeyd: Me\'lumat Bazas� statistikalar�n� burada aktivle�dirmekle webserver-le MySQL server aras�nda a��r neqliyyata sebeb ola bilersiniz.';
$strDatabasesStats = 'Me\'lumat Bazas� Statistikalar�';
$strDataDict = 'Me\'lumat l��eti';
$strData = 'Me\'lumat';
$strDataOnly = 'Sadece me\'lumat';
$strDBComment = 'Baza q�sa izahat�: ';
$strDbPrivileges = 'Me\'lumat Bazas�na Mexsus Selahiyyetler';
$strDbSpecific = 'bazayaxas';
$strDefault = 'Ba�lan��c deyeri';
$strDefaultEngine = '%s bu MySQL serverinde esas depolama motoru olaraq qurulmu�dur.';
$strDefaultValueHelp = 'Ba�lan��c deyer girerken, sadece deyeri girin, ters kesr escape-leme ya da d�rnaqdan istifade etmeyin, bu format� te\'qib edin: a';
$strDeleteAndFlush = 'B�t�n istifade�ileri sil ve ard�ndan selahiyyetleri yeniden y�kle.';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur, amma selahiyyetlerin yeniden y�klenmesi zaman teleb ede biler.';
$strDeletedRows = 'Silinen setir say�:';
$strDeleted = 'Setir silindi';
$strDelete = 'Sil';
$strDeleting = '%s silinir';
$strDelOld = 'Hal-haz�rki sehifen art�q m�vcud olmayan Cedvellere ba�l�d�r. Bu elaqelerin silinmesini istermisiniz?';
$strDescending = 'Azalan s�rada';
$strDisabled = 'S�nd�r�l�b';
$strDisplayFeat = 'X�susiyyetleri G�ster';
$strDisplayOrder = 'S�ralama �ekli:';
$strDisplayPDF = 'PDF sxemini g�ster';
$strDoAQuery = '"n�muneye g�re sor�u" g�nderin (x�susi i�are: "%")';
$strDocu = 'Dokumentasiya';
$strDoYouReally = 'A�a��dak� sor�unu icra etdirmekten eminsiniz ';
$strDropDatabaseStrongWarning = 'B�t�n bazan� YOX ETMEK �zeresiniz!';
$strDrop = 'Le�v et';
$strDropUsersDb = '�stifade�ilerle eyni adl� me\'lumat bazalar�n� le�v et.';
$strDumpingData = 'Sxemi ��xar�lan cedvel';
$strDumpSaved = 'Sxem %s fayl�na qeyd edildi.';
$strDumpXRows = '%s setri %s n�mreli qeydden ba�layaraq g�ster.';
$strDynamic = 'dinamik';

$strEdit = 'Deyi�dir';
$strEditPDFPages = 'PDF Sehifelerini Deyi�dir';
$strEditPrivileges = 'Selahiyyetleri Deyi�dir';
$strEffective = 'Effektiv';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� netice �oxlu�u g�nderdi (ye\'ni s�f�r setir).';
$strEnabled = 'Enabled';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Son';
$strEngineDisabled = '%s motoru bu serverde s�nd�r�lm��d�r.';
$strEngines = 'Motorlar';
$strEngineUnsupported = 'Bu MySQL server %s depolama motorunu desteklememektedir.';
$strEnglish = '�ngilis Dili';
$strEnglishPrivileges = ' Qeyd: MySQL selahiyyet adlar� ingilis dilinde ifade edilmi�dir ';
$strError = 'Xeta';
$strEstonian = 'Eston Dili';
$strExcelEdition = 'Excel versiyas�';
$strExplain = 'SQL-i �zah Et';
$strExport = 'Eksport';
$strExtendedInserts = 'Geni�letilmi� giri�li';
$strExtra = 'Elave X�s.';

$strFailedAttempts = 'U�ursuz Cehdler';
$strFieldHasBeenDropped = '%s sahesi le�v edildi';
$strField = 'Sahe';
$strFieldsEnclosedBy = 'Saheler ehate edildiyi i�are';
$strFieldsEscapedBy = 'Sahelerin escape edildiyi i�are';
$strFields = 'Sahe say�';
$strFieldsTerminatedBy = 'Sahelerin yox edildiyi (terminate) i�are';
$strFileAlreadyExists = '%s fayl� serverda onsuz da m�vcuddur, ya fayl�n ad�n� deyi�dir ya da �zerine yazma variantlar�n�.';
$strFileCouldNotBeRead = 'Fayl oxuna bilmir';
$strFileNameTemplate = 'Fayl ad� nomenklaturas�';
$strFileNameTemplateRemember = 'nomenklaturan� unutma';
$strFixed = 'fixed';
$strFlushPrivilegesNote = 'Qeyd: phpMyAdmin istifade�i selahiyyetlerini birba�a MySQL-in selahiyyetler cedvellerinden almaqdad�r. Eger elle nizamlamalar edilmi�se, bu cedvellerin i�erisindekiler webserver-in istifade etdiklerinden ferqli ola biler. Bu halda, davam etmeden evvel, selahiyyetleri yeniden y�klemelisiniz.';
$strFlushTable = 'Cedveli flush-la ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Formda eksik girilmi� deyer var!';
$strFullText = 'Tam Metnler (Full Text)';
$strFunction = 'Funksiya';

$strGenBy = 'Qurucu';
$strGeneralRelationFeat = '�mumi elaqe variantlar�';
$strGenTime = 'Haz�rlanma Vaxt�';
$strGeorgian = 'G�rc�';
$strGlobalPrivileges = 'Qlobal selahiyyetler';
$strGlobal = 'qlobal';
$strGlobalValue = 'Qlobal deyer';
$strGo = 'Davam';
$strGrantOption = '�caze ver';
$strGzip = '"gzip"lenmi�';

$strHasBeenAltered = 'deyi�dirildi.';
$strHasBeenCreated = 'quruldu.';
$strHaveToShow = 'G�sterilmesi ���n en az bir s�tun se�melisiniz';
$strHebrew = '�brani Dili';
$strHome = 'Ba�lan��c';
$strHomepageOfficial = 'phpMyAdmin Resmi �nternet Sehifesi';
$strHostEmpty = 'Host ad� bo�dur!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Macar Dili';

$strId = 'N�mre';
$strIdxFulltext = 'Tam metn (Fulltext)';
$strIgnore = 'Diqqete Alma';
$strImportFiles = 'Fayllar� import et';
$strIndexes = 'Indeksler';
$strIndexHasBeenDropped = '%s indeksi le�v edildi';
$strIndexName = '�ndex ad�&nbsp;:';
$strIndex = '�ndeks';
$strIndexType = '�ndex tipi&nbsp;:';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Konfiqurasiya fayl�n�zda MySQL ba�lan��c deyerleri (parolsuz root istifade�isi) m�vcuddur ki, bu da tehl�kesizlik n�qteyi nezerinden e\'tibarl� deyildir.';
$strInsertAsNewRow = 'Yeni setir olaraq elave et';
$strInsertedRowId = 'Elave edilen setir n�mresi (id):';
$strInsertedRows = 'Elave edilen setir say�:';
$strInsert = 'Elave et';
$strInUse = 'istifadede';

$strJumpToDB = '&quot;%s&quot; me\'lumat bazas�na ke�.';
$strJustDeleteDescr = '&quot;Silinmi�&quot; istifade�iler selahiyyetler yeniden y�klenene qeder server-e gire bilecekler.';
$strJustDelete = 'Sadece olaraq selahiyyet cedvellerindeki istifade�ileri sil.';

$strKeepPass = 'Parolu deyi�dirme';
$strKeyname = 'A�ar s�z';
$strKill = 'S�nd�r';

$strLandscape = 'Land�aft';
$strLatexCaption = 'Cedvel ba�l���';
$strLatexContinuedCaption = 'Cedvel ba�l���n�n davam�';
$strLatexContinued = '(davam�)';
$strLatexIncludeCaption = 'Cedvel ba�l���n� daxil et';
$strLatexLabel = 'Etiket a�ar�';
$strLaTeX = 'LaTeX';
$strLengthSet = 'Uzunluq/Deyerler*';
$strLimitNumRows = 'Sehife ba��na d��en setir say�';
$strLinesTerminatedBy = 'Setir le�vedicisi (Lines terminated by)';
$strLinkNotFound = 'Link tap�lmad�';
$strLinksTo = 'Links to';
$strLithuanian = 'Litva Dili';
$strLocalhost = 'Yerli';
$strLocationTextfile = 'tekst fayl�ndan y�kleyerek';
$strLoginInformation = 'Sisteme Giri� Me\'lumat�';
$strLogin = 'Sisteme Giri�';
$strLogout = 'Sistemden ��x��';
$strLogPassword = 'Parol:';
$strLogUsername = '�stifade�i Ad�:';

$strMaximumSize = 'En �ox: %s%s';
$strMIME_available_mime = 'M�vcud olan MIME-tipleri';
$strMIME_available_transform = 'M�vcud transformasiyalar';
$strMIME_description = 'Haqq�nda';
$strMIME_MIMEtype = 'MIME-tipi';
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\', 100, b,\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Transformasiya variantlar�';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strModifications = 'Modifications have been saved';
$strModifyIndexTopic = 'Modify an index';
$strModify = 'Modify';
$strMoveTable = 'Cedveli da�� (me\'lumat bazas�<b>.</b>cedvel):';
$strMoveTableOK = '%s cedveli %s - e da��nm��d�r.';
$strMoveTableSameNames = 'Can\'t move table to same one!';
$strMyISAMMaxExtraSortFileSize = '�ndeks yarad�larken istifade olunan ke�ici fayllar�n maksimum boyu';
$strMyISAMMaxSortFileSize = 'Ke�ici s�ralama fayllar�n�n maksimum boyu';
$strMyISAMRecoverOptions = 'Avtomatik qurtarma rejimi';
$strMyISAMSortBufferSize = 'S�ralama buferinin (ke�ici yadda��n�n) boyu';
$strMySQLCharset = 'MySQL charset';
$strMySQLSaid = 'MySQL deyir: ';
$strMySQLShowProcess = 'Prosesleri g�ster';
$strMySQLShowStatus = 'MySQL runtime me\'lumat�n� g�ster';
$strMySQLShowVars = 'MySQL sistem deyi�enlerini g�ster';

$strName = 'Ad�';
$strNext = 'Sonrak�';
$strNoDatabases = 'Baza se�ilmemi�dir ve ya m�vcud deyildir.';
$strNoDatabasesSelected = 'He� bir baza se�ilmemi�dir.';
$strNoDescription = 'Haqq�nda me\'lumat (description) m�vcud deyildir';
$strNoDetailsForEngine = 'Bu depolama motoru haqq�nda etrafli status me\'lumat� m�vcud deyildir.';
$strNoDropDatabases = '"DROP DATABASE" ifadeleri s�nd�r�lm��d�r (disabled).';
$strNoExplain = 'SQL �zah Et-i Ke�';
$strNoFrames = 'phpMyAdmin <b>frame-destekli</b> g�r�nt�leyicilerle (browser) daha yax�� i�leyir.';
$strNoIndex = '�ndeks te\'yin edilmedi!';
$strNoIndexPartsDefined = '�ndeks qisimleri te\'yin edilmedi!';
$strNoModification = 'Deyi�iklik Yoxdur';
$strNone = 'He� biri';
$strNoOptions = 'Bu format�n variantlar� yoxdur';
$strNoPassword = 'Parol Yoxdur';
$strNoPermission = 'Webserver-in %s fayl�n� saxlama izni yoxdur.';
$strNoPhp = 'PHP Kodunu G�sterme';
$strNoPrivileges = 'Selahiyyet �at��mazl���';
$strNoRights = 'Burada olma haqq�n�z yoxdur!';
$strNoSpace = '%s fayl�n� saxlamaq ���n laz�m olan yer �at��m�r.';
$strNoTablesFound = 'Me\'lumat bazas�nda cedvel yoxdur.';
$strNotNumber = 'Bu reqem deyildir!';
$strNotOK = 'M�veffeqiyyetsiz';
$strNotSet = '<b>%s</b> cedveli %s i�erisinde ya <b>tap�lmad�</b> ya da qurulmam��d�r';
$strNoUsersFound = '�stifade�i(ler) tap�lmad�.';
$strNoValidateSQL = 'SQL �fadesini Yoxlama';
$strNo = 'Xeyir';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s uy�unluq tap�ld� (<i>%s</i> cedvelinde)';
$strNumSearchResultsTotal = '<b>Cemi:</b> <i>%s</i> uy�unluq';
$strNumTables = 'Cedveller';

$strOK = 'M�veffeqiyyetle';
$strOperations = 'Emeliyyatlar';
$strOptimizeTable = 'Cedveli optimalla�d�r';
$strOr = 'ya da';
$strOverhead = 'A�ma deyeri';
$strOverwriteExisting = 'M�vcud fayl(lar)�n �zerine yaz';

$strPageNumber = 'Sehife N�mresi:';
$strPartialText = 'Qismi Metnler';
$strPasswordChanged = '%s ���n parol m�veffeqiyyetle deyi�dirilmi�dir.';
$strPasswordEmpty = 'Parol bo�dur!';
$strPasswordNotSame = 'Girdiyiniz parollar eyni deyil!';
$strPassword = 'Parol';
$strPdfDbSchema = '"%s" bazan�n sxemi - Sehife %s';
$strPdfInvalidTblName = '"%s" cedveli m�vcud deyil!';
$strPdfNoTables = 'Cedvel yoxdur';
$strPerHour = 'saatda';
$strPerMinute = 'deqiqede';
$strPerSecond = 'saniyede';
$strPHP40203 = 'Siz i�erisinde ciddi multi-bayt strinqleri (mbstring) ile elaqedar xetalar olan PHP 4.2.3 versiyas�n� istifade edirsiniz. Etrafl� melumat ���n PHP xeta raportu 19404-e bax�n. PHP-nin bu versiyas� PhpMyAdmin ile istifade ���n t�vsiye edilmir.';
$strPhp = 'PHP Kodunu Haz�rla';
$strPHPVersion = 'PHP Versiyas�';
$strPmaDocumentation = 'phpMyAdmin dokumentasiyas� (etrafl� me\'lumat ���n)';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktivi PMA konfiqurasiya fayl�n�zda QURULMAMI�DIR!';
$strPortrait = 'Portret';
$strPos1 = 'Ba�la';
$strPrevious = 'Evvelki';
$strPrimary = 'Birinci Dereceli';
$strPrimaryKeyHasBeenDropped = 'Birinci dereceli a�ar le�v edildi';
$strPrimaryKeyName = 'Birinci dereceli a�ar�n ad�... B�R�NC� DERECEL� (PRIMARY) olmal�d�r!';
$strPrimaryKeyWarning = '("PRIMARY" sadece birinci dereceli a�ar�n ad� <b>olmal�d�r</b>!)';
$strPrint = '�ap et';
$strPrintView = '�ap g�r�nt�s�';
$strPrivDescAllPrivileges = 'GRANT-dan ba�qa b�t�n selahiyyetler daxildir.';
$strPrivDescAlter = 'M�vcud olan cedvellerin strukturunu deyi�dirmeye icaze verir.';
$strPrivDescCreateDb = 'Yeni bazalar ve cedveller qurma�a icaze verir.';
$strPrivDescCreateTbl = 'Yeni cedveller qurma�a icaze verir.';
$strPrivDescCreateTmpTable = 'Ke�ici cedveller qurma�a icaze verir.';
$strPrivDescDelete = 'Me\'lumat silmeye icaze verir.';
$strPrivDescDropDb = 'Baza ve cedvel le�v etmeye icaze verir.';
$strPrivDescDropTbl = 'Cedvelleri le�v etmeye icaze verir.';
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
$strProcesslist = 'Proses Siyah�s�';
$strPutColNames = 'Sahe adlar�n� birinci setre yerle�dir';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Sor�u';
$strQueryFrame = 'Sor�u penceresi';
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-tarix�esi';
$strQueryStatistics = '<b>Sor�u Statistikas�</b>: A��ld�qdan bu yana, bu servere %s sor�u g�nderilmi�dir.';
$strQueryTime = 'sor�u %01.4f saniyede icra edildi';
$strQueryType = 'Sor�u tipi';

$strReceived = 'Al�nd�';
$strRecords = 'Setr say�';
$strReferentialIntegrity = 'Check referential integrity:';
$strRelationalSchema = 'Relational schema';
$strRelationNotWorking = 'Elaqelendirilmi� cedveller ���n nezerde tutulmu� be\'zi x�susiyyetler passivle�dirilmi�dir. Sebebini ayd�nla�d�rmaq ���n %sbax%s.';
$strRelations = 'Relations';
$strRelationView = 'Relation view';
$strReloadingThePrivileges = 'Reloading the privileges';
$strRemoveSelectedUsers = 'Remove selected users';
$strRenameTable = 'Cedveli yeniden adland�r';
$strRenameTableOK = '%s cedveli %s olaraq yeniden adland�r�lm��d�r';
$strRepairTable = 'Cedveli te\'mir et';
$strReplaceNULLBy = 'NULL-u bununla deyi�dir';
$strReplaceTable = 'Replace table data with file';
$strReset = 'Yenile';
$strResourceLimits = 'Resource limits';
$strReType = 'Re-type';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevoke = 'Revoke';
$strRowLength = 'S�ra uzunlu�u';
$strRowsFrom = 'setri g�ster; ba�lang�� qeydiyyat n�mresi';
$strRowSize = ' S�ra boyu ';
$strRowsModeFlippedHorizontal = '�f�qi (tekrarlanan ba�l�qlar)';
$strRowsModeHorizontal = '�f�qi';
$strRowsModeOptions = '%s rejimde, ba�l�qlar %s blokdan bir tekrar ederek';
$strRowsModeVertical = '�aquli';
$strRows = 'S�ra say�';
$strRowsStatistic = 'S�ra Statistikas�';
$strRunning = '%s �zerinde i�lemektedir';
$strRunQuery = 'Emri �cra Et';
$strRunSQLQuery = '%s me\'lumat bazas�na SQL sor�usu(-lar�) g�nder';

$strSaveOnServer = 'Serverdeki %s direktoriyas�na qeyd et';
$strSave = 'Qeyd Et';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearch = 'Axtar��';
$strSearchFormTitle = 'Search in database';
$strSearchInTables = 'Inside table(s):';
$strSearchNeedle = 'Axtarmaq ���n s�z(ler) ve ya deyer(ler) (wildcard: "%"):';
$strSearchOption1 = 's�zlerin en az�ndan birini';
$strSearchOption2 = 'b�t�n s�zleri';
$strSearchOption3 = 'tamamile eyni s�z�';
$strSearchOption4 = 'requlyar ifade (regular expression) olaraq';
$strSearchResultsFor = '"<i>%s</i>" ���n axtar�� neticeleri %s:';
$strSearchType = 'Tap:';
$strSelectADb = 'Me\'lumat bazas� se�';
$strSelectAll = 'Ham�s�n� Se�';
$strSelectFields = 'Sahe se�in (en az birini):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Select Tables';
$strSend = 'Fayl olaraq qeyd et';
$strSent = 'G�nderildi';
$strServerChoice = 'Qura�d�r�lm�� Serverler';
$strServer = 'Server';
$strServerStatus = 'Runtime Me\'lumat�';
$strServerStatusUptime = 'Bu MySQL server %sdir i�lemektedir. Server %s-de a��lm��d�r.';
$strServerTabVariables = 'Deyi�enler';
$strServerTrafficNotes = '<b>Server Neqliyyat�</b>: Bu cedveller serverin a��l���ndan beri elde edilen me\'lumat ax��� miqdar�n� g�stermektedir.';
$strServerVars = 'Server Deyi�enleri Ve Variantlar�';
$strServerVersion = 'Server versiyas�';
$strSessionValue = 'Sessiya deyeri';
$strSetEnumVal = 'Sahe tipi "enum" ve ya "set" ise, deyerleri bu formatda girin: \'a\',\'b\',\'c\'...<br />Eger bu deyerlerde ters-kesr ("\") ve ya tek d�rnaq ("\'") istifade etmek isteyirsinizse, onlar� ters-kesrle escape-leyin (meselen \'\\\\xyz\' ve ya \'a\\\'b\').';
$strShowAll = 'Ham�s�n� g�ster';
$strShowColor = 'Rengini g�ster';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowFullQueries = 'Emrleri Tam Olaraq G�ster';
$strShowGrid = 'Show grid';
$strShow = 'G�ster';
$strShowingRecords = 'G�sterilen setirler';
$strShowPHPInfo = 'PHPInfo() me\'lumat�n� g�ster';
$strShowTableDimension = 'Cedvellerin �l��lerini g�ster';
$strShowTables = 'Cedvelleri g�ster';
$strShowThisQuery = ' Bu sor�unu burada yene g�ster ';
$strSingly = '(tek-tek)';
$strSize = 'Boy';
$strSort = 'S�rala';
$strSpaceUsage = 'Yer istifadesi';
$strSplitWordsWithSpace = 'S�zler bo�luq ifadesi (" ") ile ayr�lm��d�r.';
$strSQLExportType = 'Eksport �ekli';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL sor�usu';
$strSQLResult = 'SQL result';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Invalid Identifer';
$strSQPBugUnclosedQuote = 'Unclosed quote';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strStatCheckTime = 'En son yoxlama';
$strStatCreateTime = 'Qurulu�';
$strStatement = 'Variantlar';
$strStatUpdateTime = 'En son yenilenme';
$strStatus = 'Status';
$strStorageEngine = 'Depolama Motorlar�';
$strStorageEngines = 'MySQL Depolama Motorlar�';
$strStrucCSV = 'CSV verilenleri';
$strStrucData = 'Qurulu� ve me\'lumat';
$strStrucExcelCSV = 'MS Excel verilenleri ���n CSV';
$strStrucOnly = 'Sadece qurulu�';
$strStructPropose = 'Alternativ cedvel strukturu';
$strStructure = 'Qurulu�';
$strSubmit = 'Submit';
$strSuccess = 'SQL sor�unuz m�veffeqiyyetle icra edilmi�dir';
$strSum = 'Cemi';
$strSwitchToTable = 'Kopyalanm�� cedvele ke�';

$strTable = 'Cedvel';
$strTableComments = 'Cedvel haqq�nda q�sa izahat';
$strTableEmpty = 'Cedveli ad� bo�dur!';
$strTableHasBeenDropped = '%s cedveli le�v edildi';
$strTableHasBeenEmptied = '%s cedveli bo�ald�ld�';
$strTableHasBeenFlushed = '%s cedveli flush-land�';
$strTableMaintenance = 'Cedvel temizliyi';
$strTableOfContents = '��indekiler Cedveli';
$strTables = '%s cedvel';
$strTableStructure = 'Table structure for table';
$strTblPrivileges = 'Cedvelexas selahiyyetler';
$strTextAreaLength = ' Uzun oldu�una g�re,<br /> bu sahedeki me\'lumatlar deyi�dirilmeye biler ';
$strThisHost = 'Bu Host';
$strThreadSuccessfullyKilled = 'Thread %s u�urla s�nd�r�ld� (killed).';
$strTime = 'M�ddet';
$strTotal = 'cemi';
$strTotalUC = 'Cemi';
$strTraditionalChinese = 'Enenevi �in Dili';
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
$strTurkish = 'T�rk Dili';
$strType = 'Tip';

$strUkrainian = 'Ukrayna Dili';
$strUncheckAll = 'He� Birini Se�me';
$strUnique = 'Unikal';
$strUnselectAll = 'He� birini se�me';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfileMessage = 'Profil yenilendi.';
$strUpdateQuery = 'Sor�unu Yenile';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUsage = 'Miqdar';
$strUseBackquotes = 'Cedvel ve sahe adlar�n� tek d�rnaq aras�na al';
$strUseHostTable = 'Use Host Table';
$strUserAlreadyExists = '%s istifade�isi m�vcuddur!';
$strUserEmpty = '�stifade�i ad� bo� qald�!';
$strUserName = '�stifade�i ad�';
$strUserNotFound = 'The selected user was not found in the privilege table.';
$strUserOverview = 'User overview';
$strUsersDeleted = 'The selected users have been deleted successfully.';
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';
$strUser = '�stifade�i';
$strUseTables = 'Use Tables';
$strUseTextField = 'Use text field';

$strValidateSQL = 'SQL Tesdiqle';
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.';
$strValue = 'Deyer';
$strVar = 'Deyi�en';
$strViewDump = 'Cedvelin sxemini g�ster';
$strViewDumpDatabases = 'Me\'lumat bazalar�n�n sxemini g�ster';
$strViewDumpDB = 'Me\'lumat bazas�n�n sxemini g�ster';

$strWebServerUploadDirectoryError = 'Upload i�leri ���n te\'yin etdiyiniz direktoriya tap�lmad�';
$strWebServerUploadDirectory = 'web-server upload direktoriyas�';
$strWelcome = '%s - e Xo� Gelmi�siniz!';
$strWestEuropean = 'Qerbi Avropa';
$strWildcard = 'x�susi i�are';
$strWithChecked = 'Se�ilenleri:';
$strWrongUser = 'Yanl�� istifade�i ad� ve ya parol. Giri� tesdiq edilmedi.';

$strXML = 'XML';

$strYes = 'Beli';

$strZeroRemovesTheLimit = 'Qeyd: Bu variantlar� 0 (s�f�r)-a �evirmek h�dudu (limiti) qald�racaq.';
$strZip = '"zip"lenmi�';

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
