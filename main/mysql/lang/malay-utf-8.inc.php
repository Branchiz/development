<?php
/* $Id: malay-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
Projek Penterjemahan (l10n) phpmyadmin.net boleh diakses di laman http://shapik.johordt.com/l10n
Projek ini diusahakan oleh saya - sicksand - Mohammad Shafiq Mohd Mustapa
Ditujukan untuk sayang saya Nur Khairiyah.
Antara yang menjayakan projek ini ialah (turutan bukan keutamaan)

Asrul Munir Bin Azizan - ntahsapentah@hotmail.com
Hasbullah - exs2me@hotmail.com
sot - sid80@yahoo.com
silla - roscla@yahoo.com
bagaksasa - bagaksasa@hotmail.com
Bustamam Harun - bustamam98@yahoo.com
Hasbullah Bin Pit - sebol@ikhlas.com, Merlimau
nina - nina@hotmail.com
muslim - sayamuslim@hotmail.com
ejoe - webmaster@ejoe.net
huhu - huhu@huh.net
redkod - r3dkod@yahoo.com
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s hari, %s jam, %s minit dan %s saat';

$day_of_week = array('Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum', 'Sab');
$month = array('Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sept', 'Okt', 'Nov', 'Dis');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAbortedClients = 'DiBatalkan';
$strAccessDenied = 'Akses dinafikan';
$strAction = 'Aksi';
$strAddDeleteColumn = 'Tambah/Padam Kolum Medan';
$strAddDeleteRow = 'Tambah/Padam Baris Kriteria';
$strAddNewField = 'Tambah medan baru';
$strAddSearchConditions = 'Tambah kriteria carian (badan bagi klausa "where"):';
$strAddToIndex = 'Tambah ke indeks &nbsp;%s&nbsp;kolum';
$strAddUserMessage = 'Anda telah menambah pengguna baru.';
$strAddUser = 'Tambah Pengguna Baru';
$strAffectedRows = 'Baris yang terlibat:';
$strAfterInsertBack = 'Kembali ke muka sebelumnya';
$strAfterInsertNewInsert = 'Tambah baris yang baru';
$strAfter = 'Selepas %s';
$strAll = 'Semua';
$strAllTableSameWidth = 'paparkan semua Jadual dengan kelebaran yang sama?';
$strAlterOrderBy = 'Alter table order by';
$strAnalyzeTable = 'Analyze table';
$strAnd = 'Dan';
$strAnIndex = 'Indeks telah ditambah pada %s';
$strAnyHost = 'Sebarang hos';
$strAny = 'Sebarang';
$strAnyUser = 'Sebarang pengguna';
$strAPrimaryKey = 'Kekunci utama telah ditambah pada %s';
$strAscending = 'Menaik';
$strAtBeginningOfTable = 'Pada Awalan Jadual';
$strAtEndOfTable = 'Pada Akhir Jadual';
$strAttr = 'Atribut';

$strBack = 'Undur';
$strBeginCut = 'MULA SALIN';
$strBeginRaw = 'MULA MENTAH';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - jgn diubah';
$strBookmarkDeleted = 'TandaBuku telah dipadam.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Tandabuku kueri-SQL';
$strBookmarkThis = 'andabuku kueri-SQL ini';
$strBookmarkView = 'Paparan sahaja';
$strBrowse = 'Lungsur';
$strBzError = 'phpMyAdmin tidak dapat memampatkan longgokan kerana terdapat masalah dalam sambungan Bz2 didalam php versi ini. Anda digalakkan untuk mengubah <code>$cfg[\'BZipDump\']</code> di fail konfigurasi phpMyAdmin kepada <code>FALSE</code>. Jika anda ingin menggunakan sambungan Bz2, anda digalakkan untuk meningkatkan versi php anda. Sila lihat laporan pepijat php %s untuk keterangan lanjut.';
$strBzip = 'bzipped';

$strCannotLogin = 'Tidak boleh log-masuk ke server MySQL';
$strCantLoadRecodeIconv = 'Tidak dapat memuat iconv atau kodsemula sambungan yang diperlukan untuk menukar set aksara, konfigur php utk membolehkan penggunaan sambungan ini atau abaikan pengubahan set aksara di phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Tidak boleh menukar indekx ke PRIMARY!';
$strCantUseRecodeIconv = 'Tidak boleh menggunakan fungsi iconv mahupun libiconv mahupun recode_string apabila sambungan lapuran dimuat. Periksa konfigurasi php anda.';
$strCardinality = 'Kardinaliti';
$strChangeDisplay = 'Pilih Medan untuk dipapar';
$strChangePassword = 'Ubah Katalaluan';
$strChange = 'Ubah';
$strCharsetOfFile = 'Fail bagi set Aksara:';
$strCheckAll = 'Tanda Semua';
$strCheckTable = 'Periksa Jadual';
$strChoosePage = 'Sila Pilih Laman untuk diubah';
$strColComFeat = 'Memaparkan Komen Kolum';
$strColumnNames = 'Nama Kolum';
$strCommand = 'Arahan';
$strComments = 'Komen';
$strCompleteInserts = 'Kemasukkan Selesai';
$strCompression = 'Mampatan';
$strConfigFileError = 'phpMyAdmin tidak dapat membaca fail konfigurasi!<br \\>Ini mungkin terjadi apabila ada kesalahan dalam php ataupun php tidak jumpa fail tersebut.<br />Sila panggil fail konfigurasi menggunakan pautan dibawah dan baca kesalahan php yang diterima. Dalam kebanyakan kes quote atau semicolon tertinggal.<br />Jika kamu terima laman kosong, semuanya berjalan lancar.';
$strConfigureTableCoord = 'Sila konfigurasikan kordinat bagi jadual %s';
$strConnections = 'Hubungan';
$strCookiesRequired = 'Cecikut mestilah dihidupkan ketika ini.';
$strCopyTableOK = 'Jadual %s telah disalin ke %s.';
$strCopyTable = 'Salin jadual ke (pangkalandata<b>.</b>jadual):';
$strCouldNotKill = 'phpMyAdmin tidak dapat mematikan bebenang %s. Ianya mungkin telah ditutup.';
$strCreate = 'Cipta';
$strCreateIndex = 'Cipta indeks pada &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Cipta indeks baru';
$strCreateNewDatabase = 'Cipta pangkalan data baru';
$strCreateNewTable = 'Cipta jadual baru pada pangkalan data %s';
$strCreatePage = 'Cipta Halaman baru';
$strCreatePdfFeat = 'Ciptaan bagi PDF';
$strCriteria = 'Kriteria';

$strDatabaseHasBeenDropped = 'angkalan data %s telah digugurkan.';
$strDatabase = 'Pangkalan Data';
$strDatabases = 'pangkalan data';
$strDatabasesStats = 'Statistik pangkalan data';
$strData = 'Data';
$strDataDict = 'Kamus Data';
$strDataOnly = 'Data sahaja';
$strDefault = 'Asal';
$strDeleted = 'Baris telah dipadam';
$strDeletedRows = 'Baris dipadam:';
$strDelete = 'Padam';
$strDescending = 'Menurun';
$strDisabled = 'Tidak Membenarkan';
$strDisplayFeat = 'Paparkan Ciri-ciri';
$strDisplayOrder = 'Turutan paparan:';
$strDisplayPDF = 'Papar Skema PDF';
$strDoAQuery = 'Lakukan "kueri melalui contoh" (wilidcard: "%")';
$strDocu = 'Dokumentasi';
$strDoYouReally = 'Adakah anda ingin ';
$strDrop = 'Gugur';
$strDumpingData = 'Melonggok data bagi jadual';
$strDumpXRows = 'Longgok %s baris bermula pada rekod # %s.';
$strDynamic = 'dinamik';

$strEditPDFPages = 'Ubah Halaman PDF';
$strEditPrivileges = 'Ubah Privilej';
$strEdit = 'Ubah';
$strEffective = 'Berkesan';
$strEmpty = 'Kosong';
$strEmptyResultSet = 'MySQL memulangkan set hasil kosong (i.e. sifar baris)';
$strEnabled = 'Membenarkan';
$strEndCut = 'TAMAT SALIN';
$strEndRaw = 'TAMAT MENTAH';
$strEnd = 'Tamat';
$strEnglishPrivileges = ' Nota: Nama privilej MySQL adalah dinyatakan dalam B.Inggeris ';
$strError = 'Ralat';
$strExplain = 'Terangkan Kod SQL';
$strExport = 'Eksport';
$strExtendedInserts = 'Penyelitan Lanjutan';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Percubaan Gagal';
$strFieldHasBeenDropped = 'Medan %s telah digugurkan';
$strField = 'Medan';
$strFieldsEnclosedBy = 'Medan disertai oleh';
$strFieldsEscapedBy = 'Medan dilarikan oleh';
$strFields = 'Medan';
$strFieldsTerminatedBy = 'Medan dihapuskan oleh';
$strFixed = 'tetap';
$strFlushTable = 'Buang jadual ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Kehilangan nilai pada borang! !';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Dijana oleh';
$strGeneralRelationFeat = 'Ciri-ciri hubungan am';
$strGenTime = 'Masa dijana';
$strGlobalValue = 'Nilai Global';
$strGo = 'Pergi';
$strGzip = '"digzip"';

$strHasBeenAltered = 'telah diubahsuai.';
$strHasBeenCreated = 'telah dicipta.';
$strHaveToShow = 'Anda mesti pilih sekurang-kurangnya satu Kolum untuk dipapar';
$strHomepageOfficial = 'Laman Rasmi phpMyAdmin';
$strHome = 'Rumah';
$strHostEmpty = 'Nama hos adalah kosong!';
$strHost = 'Hos';

$strId = 'ID';
$strIdxFulltext = 'Tekspenuh';
$strIgnore = 'Abai';
$strIndexes = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah digugurkan';
$strIndex = 'Indeks';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Jenis indeks&nbsp;:';
$strInsecureMySQL = 'Fail Konfigurasi anda mengandungi pelengkapan (root tidak berkata laluan) yang bersesuaian dengan privilej akaun MySQL. Pelayan MySQL anda dilaksanakan dengan pelengkapan asas, ianya terdedah kepada pencerobohan, dan anda hendaklah membetulkan lubang keselamatan ini.';
$strInsertAsNewRow = 'Selitkan baris baru';
$strInsertedRows = 'Baris diselit:';
$strInsert = 'Selit';
$strInUse = 'sedang digunakan';

$strKeepPass = 'Jangan tukar katalaluan';
$strKeyname = 'Nama Kekunci';
$strKill = 'Bunuh';

$strLandscape = 'Menegak';
$strLaTeX = 'LaTeX';
$strLengthSet = 'Panjang/Nilai*';
$strLimitNumRows = 'Bilangan baris per halaman';
$strLinesTerminatedBy = 'Baris ditamatkan oleh';
$strLinkNotFound = 'Pautan tidak dijumpai';
$strLinksTo = 'Pautan ke';
$strLocalhost = 'Local';
$strLocationTextfile = 'Lokasi bagi fail teks';
$strLogin = 'Logmasuk';
$strLogout = 'Log keluar';
$strLogPassword = 'Katalaluan:';
$strLogUsername = 'Namapengguna:';

$strModifications = 'Pengubahsuaian telah disimpan';
$strModifyIndexTopic = 'Ubahsuai indeks';
$strModify = 'Ubahsuai';
$strMoveTableOK = 'Jadual %s telah dipindahkan ke %s.';
$strMoveTable = 'Pindahkan jadual ke (pangkalandata<b>.</b>jadual):';
$strMySQLCharset = 'Set Aksara MySQL';
$strMySQLSaid = 'MySQL berkata: ';
$strMySQLShowProcess = 'Papar proses';
$strMySQLShowStatus = 'Papar maklumat masalaksana MySQL';
$strMySQLShowVars = 'Papar pembolehubah sistem MySQL';

$strName = 'Nama';
$strNext = 'Berikut';
$strNoDatabases = 'Tiada pangkalan data';
$strNoDescription = 'tiada keterangan';
$strNoDropDatabases = 'keterangan "DROP DATABASE" di tidak aktifkan .';
$strNoExplain = 'Skip Explain SQL';
$strNoFrames = 'phpMyAdmin lebih mesra dengan pelayar web <b>menyokong-kerangka</b> seperti mozilla.';
$strNoIndexPartsDefined = 'Tiada bahagian indeks ditakrifkan!';
$strNoIndex = 'Tiada indeks ditafrifkan!';
$strNoModification = 'Tiada perubahan';
$strNone = 'Tiada';
$strNoPassword = 'Tiada Katalaluan';
$strNoPhp = 'Tanpa Kod PHP';
$strNoPrivileges = 'Tiada Privilej';
$strNoRights = 'Anda tidak mempunyai hak mencukupi untuk berada disini sekarang!';
$strNoTablesFound = 'Tiada jadual dijumpai pada pangkalan data.';
$strNo = 'Tidak';
$strNotNumber = 'Ini adalah bukan nombor!!';
$strNotOK = 'tidak OK';
$strNotSet = 'Jadual <b>%s</b> tidak dijumpai atau ditetapkan pada %s';
$strNoUsersFound = 'Tiada pengguna dijumpai.';
$strNoValidateSQL = 'Melangkau Pengesahan SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s padanan di dalam jadual <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah</b>: <i>%s</i> padanan';
$strNumTables = 'Jadual-jadual';

$strOK = 'OK';
$strOperations = 'Operasi';
$strOptimizeTable = 'Optimakan jadual';
$strOr = 'Atau';
$strOverhead = 'Melebihi';

$strPageNumber = 'Muka Surat:';
$strPartialText = 'Sebahagian Teks';
$strPasswordEmpty = 'Katalaluan adalah kosong!';
$strPassword = 'Katalaluan';
$strPasswordNotSame = 'Katalaluan tidak sama!';
$strPdfDbSchema = 'Skema bagi pangkalan data "%s" database - Laman %s';
$strPdfInvalidTblName = 'Jadual "%s" tidak wujud!';
$strPdfNoTables = 'Tiada Jadual';
$strPerHour = 'per jam';
$strPHP40203 = 'Anda Menggunakan PHP 4.2.3, dimana terdapat pepijat serius didalam multi-byte strings (mbstring). Lihat Laporan Pepijat PHP 19404. PHP versi ini adalah tidak digalakkan dalam menggunakan phpMyAdmin.';
$strPhp = 'Cipta Kod PHP';
$strPHPVersion = 'Versi PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = '<tt>$cfg[PmaAbsoluteUri]</tt> MESTI disetkan di dalam fail konfigurasi.';
$strPortrait = 'Melintang';
$strPos1 = 'Mula';
$strPrevious = 'Terdahulu';
$strPrimaryKeyHasBeenDropped = 'Kekunci utama telah digugurkan';
$strPrimaryKeyName = 'Nama kekunci utama mestilah... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mesti</b> nama dan <b>semesti</b> dari kekunci utama!)';
$strPrimary = 'Utama';
$strPrint = 'Cetak';
$strPrintView = 'Paparan Cetak';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'Privilej';
$strProcesses = 'Proses-proses';
$strProcesslist = 'Senarai Proses';
$strPutColNames = 'Letakkan medan di baris pertama';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Kueri';
$strQueryOnDb = 'SQL- kueri pada pangkalan data <b>%s</b>:';
$strQueryStatistics = '<b>Kueri Statistik</b>: Sejak ia dijalankan, %s kueri telah dihantar kepada pelayan.';
$strQueryType = 'Jenis Kueri';

$strReceived = 'DiTerima';
$strRecords = 'Rekod';
$strReferentialIntegrity = 'Semak integriti rujukan:';
$strRelationalSchema = 'Skema Hubungan';
$strRelationNotWorking = 'Ciri-ciri tambahan ini adalah untuk bekerja dengan pautan jadual yang telah tidak diaktifkan. Untuk mengetahuinya klik %shere%s.';
$strRelationView = 'Paparan Hubungan';
$strRenameTableOK = 'Jadual %s telah ditukarnama ke %s';
$strRenameTable = 'Tukarnama jadual ke';
$strRepairTable = 'Baiki jadual';
$strReplaceTable = 'Ganti data jadual dengan fail';
$strReset = 'Ulangtetap';
$strReType = 'Ulang-taip';
$strRevokeMessage = 'Anda telah menarikbalik privilej Keistimewaan untuk %s';
$strRevoke = 'TarikBalik';
$strRowLength = 'Panjang baris';
$strRows = 'Baris';
$strRowsFrom = 'baris bermula dari rekod #';
$strRowSize = ' Saiz baris ';
$strRowsModeHorizontal = 'mengufuk';
$strRowsModeOptions = 'pada mod %s dan ulang pengepala selepas %s sel';
$strRowsModeVertical = 'menegak';
$strRowsStatistic = 'Statistik Baris';
$strRunning = 'dilaksana pada %s';
$strRunQuery = 'Hantar Kueri';
$strRunSQLQuery = 'Laksana kueri SQL pada pangkalan data %s';

$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala adalah terlalu kecil supaya muat dengan skema dalam satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari di pangkalan data';
$strSearchInTables = 'Di dalam jadual:';
$strSearchNeedle = 'Perkataan atau nilai untuk dicari (wildcard:  "%"):';
$strSearchOption1 = 'sekurang-kurangnya satu perkataan';
$strSearchOption2 = 'semua perkataan';
$strSearchOption3 = 'Frasa tepat';
$strSearchOption4 = 'sebagai penyataan regular (regexp)';
$strSearchResultsFor = 'Hasil carian bagi "<i>%s</i>" %s:';
$strSearchType = 'Cari:';
$strSelectADb = 'Sila pilih pangkalan data';
$strSelectAll = 'Sila pilih pangkalan data';
$strSelectFields = 'Pilih medan (sekurang-kurangnya satu):';
$strSelectNumRows = 'pada kueri';
$strSelectTables = 'Pilih Jadual';
$strSend = 'Simpan sebagai fail';
$strSent = 'Hantar';
$strServerChoice = 'Pilihan Pelayan';
$strServer = 'Pelayan';
$strServerStatus = 'Informasi MasaJana';
$strServerStatusUptime = 'Pelayan MySQL ini telah berjalan selama %s. Ia dihidupkan pada %s.';
$strServerTabVariables = 'Pemboleh-pembolehubah';
$strServerTrafficNotes = '<b>Kesibukan Pelayan</b>: Jadual menunjukkan statistik kesibukan rangkaian pada pelayan MySQL server semenjak ia dihidupkan.';
$strServerVars = 'Pembolehubah dan Penetapan Pelayan';
$strServerVersion = 'Versi Pelayan';
$strSessionValue = 'Nilai Sessi';
$strSetEnumVal = 'Jika jenis medan ialah "enum" atau "set", sila masukkan nilai menggunakan format: \'a\',\'b\',\'c\'...<br />Jika Anda ingin menggunakan backslash ("\") atau single quote ("\'") didalam nilai tersebut, backslashes kan ia (cth \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Papar semua';
$strShowColor = 'Papar warna';
$strShowDatadictAs = 'Format Kamus Data';
$strShowGrid = 'Papar grid';
$strShowingRecords = 'Papar baris';
$strShow = 'Papar';
$strShowPHPInfo = 'Papar maklumat PHP';
$strShowTableDimension = 'Papar dimensi jadual';
$strShowTables = 'Papar jadual';
$strShowThisQuery = ' Papar kueri ini di sini lagi ';
$strSingly = '(persatu)';
$strSize = 'Saiz';
$strSort = 'Isih';
$strSpaceUsage = 'Penggunaan ruang';
$strSplitWordsWithSpace = 'Perkataan dipisahkan oleh aksara ruang (" ").';
$strSQLParserBugMessage = 'Ada kemungkinan anda akan berjumpa dengan pepijat di penghuraian SQL. Sila semak kueri anda dengan teliti, dan periksa tanda quote adalah betul dan tidak tersalah letak. Antara kegagalan lain mungkin disebabkan fail yang dimuatnaik bersama binari oleh anda berada diluar kawasan quote. Anda juga boleh mencuba kueri MySQL anda di antaramuka aturan baris (cli). Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah. Jika masih terdapat pemasalahan atau masalah penghuraian dimana antaramuka aturan baris berjaya, sila kurangkan kemasukan kueri SQL kepada satu kueri yang bermasalah, dan lapurkan pepijat desertai oleh seruas data dan SALIN keratan rentas dibawah:';
$strSQLParserUserError = 'Ada kemungkin kueri SQL anda salah. Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah';
$strSQLQuery = 'kueri-SQL';
$strSQLResult = 'Hasil SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Pengenalan TidakSah';
$strSQPBugUnclosedQuote = 'Tanda quote tidak disertakan';
$strSQPBugUnknownPunctuation = 'TandaBaca tidak dikenali';
$strStatement = 'Penyataan';
$strStatus = 'Status';
$strStrucCSV = 'data CSV';
$strStrucData = 'Struktur dan data';
$strStrucExcelCSV = 'CSV untuk sata MS Excel';
$strStrucOnly = 'Struktur sahaja';
$strStructPropose = 'Cadangkan struktur jadual';
$strStructure = 'Struktur';
$strSubmit = 'Hantar';
$strSuccess = 'Kueri-SQL anda telah dilaksanakan dengan jaya';
$strSum = 'Jumlah';

$strTableComments = 'Komen jadual';
$strTableEmpty = 'Nama jadual  adalah kosong';
$strTableHasBeenDropped = 'Jadual %s telah digugurkan';
$strTableHasBeenEmptied = 'Jadual %s telah dikosongkan';
$strTableHasBeenFlushed = 'Jadual %s telah dibuangkan';
$strTable = 'Jadual';
$strTableMaintenance = 'Penyenggaraan Jadual';
$strTableOfContents = 'Kandungan';
$strTables = '%s jadual';
$strTableStructure = 'Struktur jadual bagi jadual';
$strTextAreaLength = ' Kerana kepanjangannya, <br />medan ini tidak boleh diedit ';
$strThreadSuccessfullyKilled = 'Bebenang %s telah berjaya dimatikan.';
$strTime = 'Masa';
$strTotal = 'jumlah';
$strTotalUC = 'Jumlah';
$strTraffic = 'Kesibukan';
$strType = 'Jenis';

$strUncheckAll = 'Nyahtanda Semua';
$strUnique = 'Unik';
$strUnselectAll = 'Nyahpilih Semua';
$strUpdatePrivMessage = 'Anda telah mengemaskini privilej bagi %s.';
$strUpdateProfileMessage = 'Profil telah dikemaskini.';
$strUpdateQuery = 'Kemaskini Kueri';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Sertakan nama jadual dan medan dengan backquotes';
$strUserEmpty = 'Kata Pengenalan kosong!';
$strUserName = 'Kata Pengenalan';
$strUser = 'Pengguna';
$strUseTables = 'Guna Jadual';

$strValidateSQL = 'Mengesahkan SQL';
$strValidatorError = 'Pengesahan SQL tidak dapat disahkan. Sila semak sama ada anda telah memasang sambungan php seperti yang tercatit di %sdocumentation%s.';
$strValue = 'Nilai';
$strVar = 'Pembolehubah';
$strViewDumpDB = 'Lihat longgokan (skema) pangkalan data';
$strViewDump = 'Lihat longgokan (skema) pangkalan data';

$strWebServerUploadDirectory = 'direktori muatnaik pelayan-web';
$strWebServerUploadDirectoryError = 'Direktori muatnaik yang telah ditetapkan tidak dapat dicapai';
$strWelcome = 'Selamat Datang ke %s';
$strWithChecked = 'Dengan pilihan:';
$strWrongUser = 'Salah kata pengenalan/kata laluan. Akses dilarang.';

$strYes = 'Ya';

$strZip = '"zipped"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strAdministration = 'Administration'; //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strArabic = 'Arabic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

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
$strBulgarian = 'Bulgarian';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strCharset = 'Charset';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCharsets = 'Charsets';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strCollation = 'Collation';  //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCroatian = 'Croatian';  //to translate
$strCSV = 'CSV';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strCzech = 'Czech';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDanish = 'Danish';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBComment = 'Database comment: ';//to translate
$strDBCopy = 'Copy database to';  //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
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
$strDescription = 'Description';  //to translate
$strDictionary = 'dictionary';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strEnglish = 'English';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strEstonian = 'Estonian';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileNameTemplate = 'File name template';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate
$strFileToImport = 'File to import';  //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strGerman = 'German';  //to translate
$strGlobal = 'global';  //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strGreek = 'Greek';  //to translate

$strHandler = 'Handler';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate
$strHungarian = 'Hungarian';  //to translate

$strIcelandic = 'Icelandic';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strImportFiles = 'Import files';  //to translate
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
$strInnodbStat = 'InnoDB Status';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
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
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate

$strKeyCache = 'Key cache';  //to translate
$strKorean = 'Korean';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
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
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoOptions = 'This format has no options';//to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strPersian = 'Persian';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strPolish = 'Polish';  //to translate
$strPrintViewFull = 'Print view (with full texts)';  //to translate
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
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate
$strQueryFrame = 'Query window';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strRelations = 'Relations';  //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strReplication = 'Replication';  //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRomanian = 'Romanian';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate
$strRussian = 'Russian';  //to translate

$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
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
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStatUpdateTime = 'Last update';//to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwedish = 'Swedish';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableOptions = 'Table options';  //to translate
$strTakeIt = 'take it';  //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strTempData = 'Temporary data';  //to translate
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
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
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
$strTurkish = 'Turkish';  //to translate

$strUkrainian = 'Ukrainian';  //to translate
$strUnicode = 'Unicode';  //to translate
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

$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWestEuropean = 'West European';  //to translate
$strWildcard = 'wildcard';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strWriteRequests = 'Write requests';  //to translate

$strXML = 'XML';//to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

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
