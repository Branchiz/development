<?php
/* $Id: indonesian-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
$month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y jam %H:%M';
$timespanfmt = '%s hari, %s jam, %s menit dan %s detik';

$strAbortedClients = 'Pembatalan';
$strAccessDenied = 'Akses ditolak';
$strAccessDeniedExplanation = 'phpMyAdmin telah berusaha untuk membuka koneksi ke server MySQL tetapi koneksi ditolak oleh server. Silakan periksa kembali nama host, nama pengguna dan kata sandi pada file config.inc.php untuk memastikan kecocokannya dengan informasi yang telah diberikan oleh administrator server MySQL.';
$strAction = 'Aksi';
$strAddAutoIncrement = 'Menambahkan nilai AUTO_INCREMENT';
$strAddConstraints = 'Menambahkan pembatas';
$strAddDeleteColumn = 'Menambahkan/Hapus kolom';
$strAddDeleteRow = 'Menambahkan/Hapus baris';
$strAddFields = 'Menambahkan %s field(s)';
$strAddHeaderComment = 'Menambahkan komentar individual pada Header (\\n membelahkan garis)';
$strAddIntoComments = 'Penambahkan pada komentar:';
$strAddNewField = 'Menambahkan field baru';
$strAddPrivilegesOnDb = 'Menambahkan hak (privileges) pada database berikut';
$strAddPrivilegesOnTbl = 'Menambahkan hak (privileges) pada tabel berikut';
$strAddSearchConditions = 'Menambahkan kriteria pencarian (Argumen untuk WHERE-Statement):';
$strAddToIndex = 'Menambahkan ke indeks &nbsp;%s&nbsp;kolom';
$strAddUser = 'Menambahkan pengguna baru';
$strAddUserMessage = 'Pengguna baru telah ditambahkan.';
$strAdministration = 'Administrasi';
$strAffectedRows = 'Baris yang terlibat:';
$strAfterInsertBack = 'kembali';
$strAfterInsertNewInsert = 'sisipkan baris baru berikutnya';
$strAfterInsertNext = 'Edit baris berikut';
$strAfterInsertSame = 'Kembali ke halaman ini';
$strAfter = 'sisipkan setelah %s';
$strAll = 'Semua';
$strAllTableSameWidth = 'Tampilkan seluruh tabel dengan lebar yang sama?';
$strAlterOrderBy = 'Urutkan tabel berdasarkan';
$strAnalyzeTable = 'Analisa tabel';
$strAnd = 'dan';
$strAndThen = 'selanjutnya';
$strAnIndex = 'Indeks telah ditambahkan pada %s';
$strAnyHost = 'Setiap host';
$strAny = 'Setiap';
$strAnyUser = 'Setiap pengguna';
$strApproximateCount = 'Kemungkinan hanya perkiraan saja. Lihat FAQ 3.11';
$strAPrimaryKey = 'Primary key telah ditambahkan pada %s';
$strArabic = 'Bahasa Arab';
$strArmenian = 'Bahasa Armenia';
$strAscending = 'Urutan menaik';
$strAtBeginningOfTable = 'pada awal tabel';
$strAtEndOfTable = 'pada akhir tabel';
$strAttr = 'Atribut';
$strAutomaticLayout = 'Layout otomatis';

$strBack = 'Kembali';
$strBaltic = 'Bahasa Baltik';
$strBeginCut = 'Mulai potong (CUT)';
$strBeginRaw = 'MULAI mentah (RAW)';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - jangan di-edit';
$strBinaryLog = 'Log binari';
$strBinLogEventType = 'Tipe Kejadian';
$strBinLogInfo = 'Informasi';
$strBinLogName = 'Catat nama';
$strBinLogOriginalPosition = 'Posisi aslinya';
$strBinLogPosition = 'Posisi';
$strBinLogServerId = 'ID Server';
$strBookmarkAllUsers = 'Izinkan semua pengguna untuk mengakses simpanan ini';
$strBookmarkDeleted = 'Penyimpanan telah dihapus.';
$strBookmarkLabel = 'Judul';
$strBookmarkQuery = 'Ingat pada pencarian SQL ';
$strBookmarkThis = 'Simpan pencarian SQL ini';
$strBookmarkView = 'Hanya melihat';
$strBrowse = 'Browse';
$strBrowseForeignValues = 'Menjelajahi nilai luar';
$strBufferPoolActivity = 'Aktifitas penampungan Buffer';
$strBufferPool = 'Penampungan Buffer';
$strBufferPoolUsage = 'Penggunaan penampungan Buffer';
$strBufferReadMissesInPercent = 'Pembacaan yang kelewat dalam %';
$strBufferReadMisses = 'Pembacaan yang kelewat';
$strBufferWriteWaitsInPercent = 'Penundaan penulisan dalam %';
$strBufferWriteWaits = 'Penundaan penulisan';
$strBulgarian = 'Bahasa Bulgaria';
$strBusyPages = 'Halaman yang sibuk';
$strBzError = 'phpMyAdmin gagal mengkompres Dump (Skema) disebabkan ekstensi Bz2 dalam versi PHP yang digunakan. Disarankan untuk merubah direktif <code>$cfg[\'BZipDump\']</code> dalam file konfigurasi phpMyAdmin Anda ke <code>FALSE</code>. Bila Anda ingin menggunakan fasilitas kompresi Bz2 disarankan untuk meng-upgrade versi PHP yang lebih tinggi. Perhatikan PHP Bug Report %s untuk informasi yang lebih detail.';
$strBzip = '"Dikompress dengan BZip"';

$strCalendar = 'Kalender';
$strCannotLogin = 'Gagal login ke MySQL server';
$strCantLoad = 'gagal loading ekstensi %s,<br />mohon periksa kembali konfigurasi PHP.';
$strCantLoadRecodeIconv = 'Gagal loading iconv atau perubahan kode extension untuk konversi charset diperlukan. Silakan konfigurasikan php untuk menggunakan extensions yang diperlukan atau matikan fasilitas konversi Charset pada phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Gagal ubah nama Indeks ke PRIMARY!';
$strCantUseRecodeIconv = 'Gagal menggunakan iconv, libiconv atau fungsi recode_string selama ekstensi masih dalam keadaan di-load. Periksa kembali konfigurasi PHP.';
$strCardinality = 'Bilangan Pokok';
$strCaseInsensitive = 'peka terhadap huruf besar/kecil';
$strCaseSensitive = 'tidak peka terhadap huruf besar/kecil';
$strCentralEuropean = 'Eropa Tengah';
$strChangeCopyMode = 'Ciptakan pengguna baru dengan hak-hak yang sama dan ...';
$strChangeCopyModeCopy = '... mempertahankan yang lama.';
$strChangeCopyModeDeleteAndReload = ' ... hapuskan yang lama dari User Table, kemudian reload hak-hak.';
$strChangeCopyModeJustDelete = ' ... hapus yang lama dari User Table.';
$strChangeCopyModeRevoke = ' ... cabut seluruh hak yang aktif, kemudian hapuskan yang lama.';
$strChangeCopyUser = 'Ubah informasi Login / Salip pengguna';
$strChangeDisplay = 'Pilih Field untuk ditampilkan';
$strChangePassword = 'Ubah Kata Sandi';
$strChange = 'Ubah';
$strCharsetOfFile = 'Penyusunan karakter dalam file:';
$strCharset = 'Perangkat karakter (Charset)';
$strCharsetsAndCollations = 'Penyusunan karakter dan tabel urutan';
$strCharsets = 'Penyusunan Karakter';
$strCheckAll = 'Pilih semua';
$strCheckOverhead = 'Periksa Overheaded';
$strCheckPrivsLong = 'Periksa hak-hak untuk database &quot;%s&quot;.';
$strCheckPrivs = 'Periksa hak-hak';
$strCheckTable = 'Periksa tabel';
$strChoosePage = 'Silakan pilih halaman untuk diubah';
$strColComFeat = 'Tampilkan komentar kolom';
$strCollation = 'Penyortiran';
$strColumnNames = 'Nama kolom';
$strColumnPrivileges = 'Hak (privileges) khusus terhadap kolum';
$strCommand = 'Perintah';
$strCommentsForTable = 'KOMENTAR UNTUK TABEL';
$strComments = 'Komentar';
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';
$strCompleteInserts = 'INSERT lengkap';
$strCompression = 'Kompresi';
$strConfigFileError = 'phpMyAdmin gagal membaca file konfigurasi!<br />Hal ini diakibatkan oleh Parse Error atau file tidak ditemukan.<br />Silakan bukakan file konfigurasi dengan cara mengunakan link dibawah ini. Mohon perhatikan PHP Error Message(s) yang akan ditampilkan. Seringkali sebuah tanda kutip atau titik-koma ketinggalan.<br />Jika muncul sebuah halaman kosong, artinya tidak ada masalah.';
$strConfigureTableCoord = 'Silakan konfigurasikan koordinasi bagi tabel %s';
$strConnectionError = 'Koneksi gagal: Stelan tidak berlaku.';
$strConnections = 'Koneksi';
$strConstraintsForDumped = 'Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)';
$strConstraintsForTable = 'Ketidakleluasaan untuk tabel';
$strCookiesRequired = 'Mulai dari sini Cookies harus diaktifkan.';
$strCopyDatabaseOK = 'Database %s telah disalin ke %s';
$strCopy = 'Salin';
$strCopyTableOK = 'Tabel %s telah disalin ke %s.';
$strCopyTable = 'Salin tabel ke (database<b>.</b>nama tabel):';
$strCopyTableSameNames = 'Penyalinan tabel pada diri-sendiri tidak bisa dilakukan!';
$strCouldNotKill = 'phpMyAdmin gagal menutup Thread %s. Kemungkinan Thread tersebut sudah ditutup terlebih dahulu';
$strCreate = 'Ciptakan';
$strCreateDatabaseBeforeCopying = 'CIPTAKAN DATABASE sebelum menyalin';
$strCreateIndex = 'Ciptakan indeks pada kolom &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Ciptakan indeks baru';
$strCreateNewDatabase = 'Ciptakan database baru';
$strCreateNewTable = 'Ciptakan tabel baru pada database %s';
$strCreatePage = 'Ciptakan halaman baru';
$strCreatePdfFeat = 'Penciptaan PDF';
$strCreationDates = 'Tanggal Penciptaan/Update/Pemeriksaan';
$strCriteria = 'Kriteria';
$strCroatian = 'Bahasa Kroatia';
$strCyrillic = 'Bahasa Kirilia';
$strCzech = 'Bahasa Ceko';
$strCzechSlovak = 'Cecko-Slovakia';

$strDanish = 'Bahasa Denmark';
$strDatabase = 'Database';
$strDatabaseEmpty = 'Nama database kosong!';
$strDatabaseExportOptions = 'Pilihan cara untuk mengekspor Database';
$strDatabaseHasBeenDropped = 'Database %s telah dihapus.';
$strDatabases = 'Database';
$strDatabasesDropped = 'Sukses menghapus database %s.';
$strDatabasesStatsDisable = 'Mencacatkan Statistik';
$strDatabasesStatsEnable = 'Menggiatkan Statistik';
$strDatabasesStatsHeavyTraffic = 'Perhatian: Menggiatkan statistik database dengan kemungkinan besar mengakibatkan traffic yang cukup tinggi antara webserver dan server MySQL.';
$strDatabasesStats = 'Statistik Database';
$strData = 'Data';
$strDataDict = 'Kamus Data';
$strDataOnly = 'Data saja';
$strDataPages = 'Halaman yang berisi data';
$strDBComment = 'Komentar Database: ';
$strDBCopy = 'Salin database ke';
$strDbPrivileges = 'Hak (privileges) khusus terhadap Database';
$strDBRename = 'Ubah nama database menjadi';
$strDbSpecific = 'database-spesifik';
$strDefault = 'Default';
$strDefaultEngine = '%s adalah mesin penyimpan utama pada server MySQL ini.';
$strDefaultValueHelp = 'Untuk nilai (value) default cukup diisi single value saja tanpa menggunakan backslash, escaping atau quotes dan dengan menggunakan format sbb.: a';
$strDefragment = 'Defragmentasikan tabel';
$strDelayedInserts = 'Gunakan perintah INSERT memperlambat';
$strDeleteAndFlushDescr = 'Ini cara yang terbaik tetapi akan memakan waktu cukup lama.';
$strDeleteAndFlush = 'Hapus pengguna, lantas Reload hak-hak (Privileges).';
$strDeleted = 'Baris telah dihapus';
$strDeletedRows = 'Baris yang dihapus:';
$strDelete = 'Hapus';
$strDeleting = 'Menghapus %s';
$strDelOld = 'Halaman ini berisi referensi tentang tabel yang sudah tidak ada. Apakah Anda ingin hapus referensi yang bersangkutan?';
$strDescending = 'Urutan menurun';
$strDescription = 'Deskripsi';
$strDictionary = 'kamus';
$strDirtyPages = 'Halaman yang kotor';
$strDisabled = 'Tidak aktif';
$strDisableForeignChecks = 'Tanpa pemeriksaan kunci asing';
$strDisplayFeat = 'Tampilkan ciri-ciri';
$strDisplayOrder = 'Urut tampilan berdasarkan:';
$strDisplayPDF = 'Tampilkan skema PDF';
$strDoAQuery = 'cari berdasarkan data contoh ("query by example") (wildcard: "%")';
$strDocu = 'Dokumentasi';
$strDoYouReally = 'Apakah anda ingin ';
$strDropDatabaseStrongWarning = 'Anda akan MENGHAPUS SELURUH database!';
$strDrop = 'Hapus';
$strDropUsersDb = 'Hapus database yang memiliki nama yang sama dengan pengguna.';
$strDumpingData = 'Dumping data untuk tabel';
$strDumpSaved = 'Dump (Skema) disimpan pada file %s.';
$strDumpXRows = 'Dump %s baris bermula pada baris %s.';
$strDynamic = 'dinamis';

$strEditPDFPages = 'Ubah halaman PDF';
$strEditPrivileges = 'Ubah hak akses (privilege)';
$strEdit = 'Ubah';
$strEffective = 'Efektif';
$strEmpty = 'Mengosongkan';
$strEmptyResultSet = 'MySQL balikkan hasil kosong (a.k. baris yang kosong).';
$strEnabled = 'Aktif';
$strEncloseInTransaction = 'Menyertakan ekspor dalam transaksi';
$strEndCut = 'Akhiri potong (CUT)';
$strEndRaw = 'AKHIRI mentah (RAW)';
$strEnd = 'Terakhir';
$strEngineAvailable = '%s siap untuk digunakan pada server MySQL ini.';
$strEngineDisabled = '%s dimatikan untuk server MySQL ini.';
$strEngines = 'Mesin';
$strEngineUnsupported = 'Server MySQL ini tidak mendukung mesin penyimpan %s.';
$strEnglish = 'Bahasa Ingris';
$strEnglishPrivileges = ' Catatan: Nama privilege MySQL dalam bahasa Ingris ';
$strError = 'Error';
$strEscapeWildcards = 'Wildcard _ dan % sebaiknya diakhiri dengan tanda \ untuk mengunakannya secara harfiah';
$strEstonian = 'Bahasa Estonia';
$strExcelEdition = 'Edisi Excel';
$strExecuteBookmarked = 'Eksekusikan pencarian dengan mengikuti penunjuk halaman';
$strExplain = 'Terangkan SQL';
$strExport = 'Ekspor';
$strExtendedInserts = 'INSERT memperluas';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Gagal';
$strField = 'Field';
$strFieldHasBeenDropped = 'Field %s telah dihapus';
$strFieldsEnclosedBy = 'Field ditutup dengan';
$strFieldsEscapedBy = 'Field dikembalikan oleh';
$strFields = 'Field';
$strFieldsTerminatedBy = 'Fields diputus oleh';
$strFileAlreadyExists = 'File %s sudah ada pada server. Gantikan nama file atau periksa pilihan Overwrite.';
$strFileCouldNotBeRead = 'Gagal membaca File';
$strFileNameTemplate = 'Konvensi nama file';
$strFileNameTemplateRemember = 'ingat konvensi';
$strFixed = 'telah diperbaiki';
$strFlushPrivilegesNote = 'Perhatian: phpMyAdmin membaca data tentang pengguna secara langsung dari tabel profil pengguna MySQL. Isi dari tabel bisa saja berbeda dengan profil pengguna yang digunakan oleh Server pada saat ini bila tabel tsb. pernah diubah secara manual. Disarankan untuk %sme-reload profil pengguna%s sebelum melanjut.';
$strFlushTable = 'Tutup tabel ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Data dalam form kurang !';
$strFreePages = 'Halaman yang bebas';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Diciptakan oleh';
$strGeneralRelationFeat = 'Ciri-ciri dari General Relation';
$strGenerate = 'Menghasilkan';
$strGeneratePassword = 'Menghasilkan kata sandi';
$strGenTime = 'Waktu pembuatan';
$strGeorgian = 'Georgia';
$strGerman = 'Bahasa Jerman';
$strGlobal = 'global';
$strGlobalPrivileges = 'Hak Istimewa (Privileges) Global';
$strGlobalValue = 'Nilai Global';
$strGo = 'Go';
$strGrantOption = 'Izin';
$strGreek = 'Bahasa Yunani';
$strGzip = 'Dikompress dengan GZip';

$strHasBeenAltered = 'telah diubah.';
$strHasBeenCreated = 'telah diciptakan.';
$strHaveToShow = 'Sekurang-kurangnya satu kolom harus dipilih untuk ditampilkan';
$strHebrew = 'Bahasa Yahudi';
$strHome = 'Home';
$strHomepageOfficial = 'Homepage resmi phpMyAdmin';
$strHostEmpty = 'Nama Host harus diisi!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Bahasa Hongaria';

$strIcelandic = 'Islandia';
$strId = 'ID';
$strIdxFulltext = 'Teks penuh';
$strIgnore = 'Abaikan';
$strIgnoreInserts = 'Gunakan perintah INSERT dengan mengabaikan kesalahan';
$strImportFiles = 'Impor file';
$strIndexes = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah dihapus';
$strIndex = 'Indeks';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Tipe indeks&nbsp;:';
$strIndexWarningTable = 'Ditemukan masalah dengan indeks dalam tabel `%s`';
$strInnoDBAutoextendIncrementDesc = ' Ukuran bertahap dari pembesaran ruang tabel otomatis bila ia mempenuh.';
$strInnoDBAutoextendIncrement = 'Pembesaran otomatis';
$strInnoDBBufferPoolSizeDesc = 'Ukuran Memory Buffer yang digunakan oleh InnoDB untuk meng-cache data dan indeks dari tabelnya.';
$strInnoDBBufferPoolSize = 'Ukuran penampungan buffer';
$strInnoDBDataFilePath = 'File data';
$strInnoDBDataHomeDirDesc = 'Bagian lazim dari Directory Path untuk seluruh file data milik InnoDB.';
$strInnoDBDataHomeDir = 'Home direktori data';
$strInnoDBPages = 'halaman';
$strInnodbStat = 'Status dari InnoDB';
$strInsecureMySQL = 'File konfigurasi Anda ditentukan dengan pengguna Root dan tanpa adanya Kata Sandi (sama dengan Default MySQL Privileged Account). Jika MySQL-Server dijalankan dengan sedemikian, server Anda terbuka lebar untuk suatu penyerangan. Disarankan untuk memperbaiki kelemahan keamanan (security hole) ini.';
$strInsertAsNewRow = 'Sisipkan sebagai baris baru';
$strInsertedRowId = 'Menyisip baris id:';
$strInsertedRows = 'Baris yang disisipkan:';
$strInsert = 'Sisipkan';
$strInternalNotNecessary = '* Relasi internal tidak dibutuhkan bila ia telah berada dalam InnoDB.';
$strInternalRelations = 'Relasi internal';
$strInUse = 'sedang digunakan';
$strInvalidColumnCount = 'Perhitungan kolom wajib lebih besar dari nol.';
$strInvalidFieldAddCount = 'Anda perlu menambahkan sedikitnya satu Field.';
$strInvalidFieldCount = 'Tabel wajib mengandung sesedikitnya satu Field.';
$strInvalidRowNumber = '%d bukanlah nomor baris yang berlaku.';

$strJapanese = 'Bahasa Jepang';
$strJumpToDB = 'Lompat langsung ke database &quot;%s&quot;.';
$strJustDeleteDescr = 'Pengguna yang &quot;dihapus&quot; tetap berhak untuk mengakses Server seperti biasa sampai Hak Istimewa (Privileges) di-reload.';
$strJustDelete = 'Hapus pengguna dari dari tabel daftar pengguna.';

$strKeepPass = 'Jangan ubah Kata Sandi';
$strKeyname = 'Nama Kunci';
$strKill = 'Tutup';
$strKorean = 'Bahasa Korea';

$strLandscape = 'Landscape';
$strLatchedPages = 'Halaman yang dipalang';
$strLatexCaption = 'Judul halaman';
$strLatexContent = 'Isi dari tabel __TABLE__';
$strLatexContinuedCaption = 'Lanjutan dari judul halaman tabel';
$strLatexContinued = '(dilanjutkan)';
$strLatexIncludeCaption = 'Masukkan judul halaman tabel';
$strLatexLabel = 'Kunci nama';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktur dari tabel __TABLE__';
$strLatvian = 'Latvia';
$strLengthSet = 'Ukuran Panjang/Nilai*';
$strLimitNumRows = 'Jumlah baris per halaman';
$strLinesTerminatedBy = 'Garis diputuskan oleh';
$strLinkNotFound = 'Link tidak ditemukan';
$strLinksTo = 'Link ke';
$strLithuanian = 'Bahasa Lithuania';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'dari File';
$strLoginInformation = 'Informasi Login';
$strLogin = 'Login';
$strLogout = 'Logout';
$strLogPassword = 'Kata Sandi:';
$strLogServer = 'Server';
$strLogUsername = 'Nama Pengguna:';
$strLongOperation = 'Aktifitas ini membutuhkan waktu yang lama. Tetap melanjutkan?';

$strMaximumSize = 'Batas ukuran: %s%s';
$strMbExtensionMissing = 'Ekstensi PHP mbstring tidak ditemukan dan rupanya Anda menggunakan Charset Multibyte. Tanpa ekstensi mbstring phpMyAdmin tidak sanggup untuk membagikan baris-baris dengan cara yang benar. Hal ini mampu mengakibatkan hasil yang tidak diinginkan.';
$strMbOverloadWarning = 'Fungsi mbstring.func_overload aktif pada konfigurasi PHP Anda. Pilihan ini tidak cocok dengan phpMyAdmin dan mampu merusak sebagian data!';
$strMIME_available_mime = 'Tipe MIME yang tersedia';
$strMIME_available_transform = 'Transformasi yang tersedia';
$strMIME_description = 'Deskripsi';
$strMIME_MIMEtype = 'Tipe MIME';
$strMIME_nodescription = 'Tidak ada deskripsi untuk transformasi ini.<br />Mohon ditanyakan kepada penulis tentang artinya %s.';
$strMIME_transformation_note = 'Untuk tampilan daftar tentang pilihan transformasi dan transformasi jenis MIME-nya, silakan klik pada %sDeskripsi Transformasi%s';
$strMIME_transformation_options_note = 'Mohon masukkan nilai untuk pilihan transformasi dengan menggunakan format sbb.: \'a\', 100, b,\'c\'...<br />Bila sebuah Backslash ("\") atau Single Quote ("\'") diperlukan di antara nilai tersebut, mohon gunakan tanda Backslash (contoh: \'\\\\xyz\' atau \'a\\\'b\').';
$strMIME_transformation_options = 'Pilihan transformasi';
$strMIME_transformation = 'Transformasi Browser';
$strMIMETypesForTable = 'TIPE MIME UNTUK TABEL';
$strMIME_without = 'Jenis MIME yang dicetak dalam huruf miring tidak memiliki fungsi transformasi';
$strModifications = 'Modifikasi telah disimpan';
$strModifyIndexTopic = 'Ubah indeks';
$strModify = 'Ubah';
$strMoveTableOK = 'Tabel %s telah dipindahkan ke %s.';
$strMoveTable = 'Pindahkan tabel ke (database<b>.</b>tabel):';
$strMoveTableSameNames = 'Memindahkan tabel ke diri-sendiri tidak bisa dilakukan!';
$strMultilingual = 'berbagai bahasa';
$strMyISAMDataPointerSizeDesc = 'Ukuran standar dari petunjuk (Pointer) dalam Byte untuk digunakan oleh CREATE TABLE untuk tabel jenis MyISAM bila pilihan MAX_ROWS tidak ditentukan.';
$strMyISAMDataPointerSize = 'Ukuran petunjuk data (Data Pointer)';
$strMyISAMMaxExtraSortFileSizeDesc = 'Jika ukuran file sementara untuk pembuatan Indeks MyISAM Cepat lebih besar dibandingkan dengan ukuran Key Cache yang disebut disini, disarankan untuk menggunakan metode Key Cache.';
$strMyISAMMaxExtraSortFileSize = 'Ukuran maksimal untuk file sementara pada pembuatan indeks';
$strMyISAMMaxSortFileSizeDesc = 'Ukuran maksimal untuk file sementara yang diperbolehkan untuk digunakan oleh MySQL pada saat pembuatan ulang sebuah indeks MyISAM (sewaktu menjalankan REPAIR TABLE, ALTER TABLE, atau LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Ukuran maksimal untuk penyortiran file sementara';
$strMyISAMRecoverOptionsDesc = 'Modus untuk restorasi secara otomatis sebuah tabel MyISAM yang telah runtuh sesuai dengan pengaturan melalui pilihan --myisam-recover pada startup server.';
$strMyISAMRecoverOptions = 'Modus restorasi otomatis';
$strMyISAMRepairThreadsDesc = 'Jika nilai ini lebih besar dari 1, pembuatan indeks MyISAM akan dijalankan dalam modus paralel (setiap indeks memiliki proses tersendiri) selama perbaikan dijalankan oleh proses penyortiran.';
$strMyISAMRepairThreads = 'Perbaiki proses';
$strMyISAMSortBufferSizeDesc = 'Buffer yang dialokasikan bila menyortir indeks MyISAM pada saat REPAIR TABLE atau pada saat membuat indeks dengan cara CREATE INDEX atau cara ALTER TABLE.';
$strMyISAMSortBufferSize = 'Urutkan ukuran Buffer';
$strMySQLCharset = 'Charset MySQL';
$strMySQLConnectionCollation = 'Penyortiran koneksi MySQL';
$strMySQLSaid = 'MySQL menyatakan: ';
$strMySQLShowProcess = 'Tampilkan Proses';
$strMySQLShowStatus = 'Tampilkan informasi runtime MySQL';
$strMySQLShowVars = 'Tampilkan variabel sistem MySQL';

$strName = 'Nama';
$strNext = 'Berikutnya';
$strNoActivity = 'Tidak ada aktifitas selama %s detik atau lebih. Silakan login kembali';
$strNoDatabases = 'Database tidak ditemukan';
$strNoDatabasesSelected = 'Database belum dipilih.';
$strNoDescription = 'tanpa keterangan';
$strNoDetailsForEngine = 'Informasi secara rinci tentang keadaan mesin penyimpan ini tidak ditemukan.';
$strNoDropDatabases = 'Perintah "HAPUS DATABASE" dimatikan.';
$strNoExplain = 'Melewati keterangan SQL';
$strNoFrames = 'Lebih mudah untuk menggunakan phpMyAdmin dengan browser yang <b>mendukung frame</b>.';
$strNoIndex = 'Indeks belum ditentukan!';
$strNoIndexPartsDefined = 'Bagian indeks belum diberi definisin!';
$strNoModification = 'Tidak ada perubahan';
$strNone = 'tanpa';
$strNoOptions = 'Format ini tidak ada pilihannya';
$strNoPassword = 'Kata Sandi belum ditetapkan';
$strNoPermission = 'Webserver tidak memilik hak (permission) untuk menyimpan file %s.';
$strNoPhp = 'Kode PHP tidak ditemukan';
$strNoPrivileges = 'Tidak ada Hak Akses (privilege)';
$strNoRights = 'Hak Akses Anda untuk melanjut tidak cukup!';
$strNoRowsSelected = 'Tidak ada baris yang dipilih';
$strNoSpace = 'Tidak cukup ruang untuk menyimpan %s.';
$strNoTablesFound = 'Tidak ada tabel dalam database.';
$strNoThemeSupport = 'Tidak ada dukungan untuk desain penampilan. Mohon periksa kembali konfigurasi dan/atau desain penampilan dalam direktori %s.';
$strNo = 'Tidak';
$strNotNumber = 'Ini bukan angka!';
$strNotOK = 'tidak oke';
$strNotSet = '<b>%s</b> tabel tidak ditemukan atau tidak diset di %s';
$strNoUsersFound = 'Pengguna tidak ditemukan.';
$strNoValidateSQL = 'Melewati pengesahan (validation) SQL';
$strNull = 'Kosong';
$strNumSearchResultsInTable = '%s catatan dalam tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah:</b> <i>%s</i> rekord';
$strNumTables = 'Tabel';

$strOK = 'Oke';
$strOperations = 'Operasi';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimasikan tabel';
$strOr = 'Atau';
$strOverhead = 'Kelebihan (Overhead)';
$strOverwriteExisting = 'Timpahkan (Overwrite) file(s) yang ada';

$strPageNumber = 'Halaman no.:';
$strPagesToBeFlushed = 'Halaman yang akan di-flush';
$strPaperSize = 'Ukuran kertas';
$strPartialText = 'Teks yang disingkat';
$strPasswordChanged = 'Sukses mengubah Kata Sandi untuk %s .';
$strPasswordEmpty = 'Kata Sandi kosong!';
$strPasswordHashing = 'Pengernaian Kata Sandi (Password Hashing)';
$strPassword = 'Kata Sandi';
$strPasswordNotSame = 'Kata Sandi tidak sama!';
$strPdfDbSchema = 'Skema dari database "%s"  - Halaman %s';
$strPdfInvalidTblName = 'Tabel "%s" tidak ditemukan!';
$strPdfNoTables = 'Tabel tidak ditemukan';
$strPerHour = 'dalam sejam';
$strPerMinute = 'per menit';
$strPerSecond = 'per detik';
$strPersian = 'Persia';
$strPhoneBook = 'buku telpon';
$strPHP40203 = 'Anda menggunakan PHP versi 4.2.3 yang diketahui mengandung Bug yang serius pada multi-byte strings (mbstring). Perhatikan PHP Bug Report nomor 19404. Versi PHP ini tidak disarankan untuk digunakan dengan program phpMyAdmin.';
$strPhp = 'Ciptakan kode PHP';
$strPHPVersion = 'Versi PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = 'Directif <tt>$cfg[\'PmaAbsoluteUri\']</tt> WAJIB diset dalam file konfigurasi!';
$strPolish = 'Polandia';
$strPortrait = 'Gambaran';
$strPos1 = 'Awal';
$strPrevious = 'Sebelumnya';
$strPrimaryKeyHasBeenDropped = 'Kunci utama telah dihapus';
$strPrimaryKeyName = 'Nama Kunci utama diwajibkan... PRIMARY!';
$strPrimaryKeyWarning = '(Tanda nama "PRIMARY" <b>wajib</b> sebagai satu-satunya nama dan <b>hanya</b> sebagai Kunci utama saja!)';
$strPrimary = 'Kunci Utama';
$strPrint = 'Cetak';
$strPrintViewFull = 'Pandangan cetak (dengan teks lengkap)';
$strPrintView = 'Pandangan cetak';
$strPrivDescAllPrivileges = 'Menggunakan seluruh Hak Istimewa (Privileges) selain GRANT.';
$strPrivDescAlter = 'Mengizinkan untuk merubah struktur dari tabel yang ada.';
$strPrivDescAlterRoutine = 'Mengizinkan perubahan dan penghapusan dari Routines yang tersimpan.';
$strPrivDescCreateDb = 'Mengizinkan untuk menciptakan database dan tabel baru.';
$strPrivDescCreateRoutine = 'Mengizinkan penciptaan Routines yang akan disimpan.';
$strPrivDescCreateTbl = 'Mengizinkan untuk menciptakan tabel baru.';
$strPrivDescCreateTmpTable = 'Mengizinkan untuk menciptakan tabel yang bersifat temporer.';
$strPrivDescCreateUser = 'Mengizinkan penciptaan, penghapusan dan perubahan account pengguna.';
$strPrivDescCreateView = 'Mengizinkan untuk menciptakan pandangan baru.';
$strPrivDescDelete = 'Mengizinkan untuk hapus data.';
$strPrivDescDropDb = 'Mengizinkan untuk hapus database dan tabel.';
$strPrivDescDropTbl = 'Mengizinkan untuk hapus tabel.';
$strPrivDescExecute5 = 'Mengizinkan eksekusi Routines yang tersimpan.';
$strPrivDescExecute = 'Mengizinkan untuk berjalan dengan prosedur yang tersimpan; tidak ada efek dalam versi MySQL ini.';
$strPrivDescFile = 'Mengizinkan untuk impor data dari file dan ekspor data kedalam file.';
$strPrivDescGrant = 'Mengizinkan untuk menambah pengguna dan Hak Istimewa (Privileges) tanpa harus me-reload ulang tabel Hak Istimewa.';
$strPrivDescIndex = 'Mengizinkan untuk menciptakan dan hapus Indeks.';
$strPrivDescInsert = 'Mengizinkan untuk tambah dan ganti data.';
$strPrivDescLockTables = 'Mengizinkan untuk mengunci tabel dalam Thread yang lagi berjalan.';
$strPrivDescMaxConnections = 'Membatasi jumlah koneksi baru yang diperbolehkan untuk setiap pengguna dalam batas waktu satu jam.';
$strPrivDescMaxQuestions = 'Membatasi jumlah pencarian (Queries) yang diperbolehkan untuk setiap pengguna dalam batas waktu satu jam.';
$strPrivDescMaxUpdates = 'Membatasi jumlah perintah untuk merubah sebuah tabel atau database untuk setiap pengguna dalam batas waktu satu jam.';
$strPrivDescProcess3 = 'Mengizinkan untuk hentikan proses yang dimiliki pengguna lain.';
$strPrivDescProcess4 = 'Mengizinkan untuk tampilkan seluruh pencarian dalam daftar proses.';
$strPrivDescReferences = 'Tidak ada efek dalam versi MySQL yang digunakan.';
$strPrivDescReload = 'Mengizinkan untuk reload stelan dari server dan untuk flush cache dari server.';
$strPrivDescReplClient = 'Memberi hak kepada pengguna untuk menanyakan lokasi dari slaves / masters.';
$strPrivDescReplSlave = 'Digunakan untuk replikasi dari slaves.';
$strPrivDescSelect = 'Mengizinkan untuk baca data.';
$strPrivDescShowDb = 'Memberi akses ke seluruh daftar database.';
$strPrivDescShowView = 'Mengizinkan pencarian dengan cara SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Mengizinkan untuk shut-down server.';
$strPrivDescSuper = 'Mengizinkan untuk tetap konek meskipun jumlah batas koneksi telah tercapai; diperlukan untuk hampir semua operasi administratif seperti stelan variabel global atau untuk mematikan sebuah Thread yang dimiliki oleh pengguna lain.';
$strPrivDescUpdate = 'Mengizinkan untuk ubah data.';
$strPrivDescUsage = 'Tanpa Hak Istimewa (Privileges).';
$strPrivileges = 'Hak Akses';
$strPrivilegesReloaded = 'Sukses reload Hak Istimewa (Privileges).';
$strProcesses = 'Proses Aktif';
$strProcesslist = 'Daftar proses';
$strPutColNames = 'Letakkan nama Fields pada baris pertama';

$strQBE = 'Cari berdasarkan data contoh';
$strQBEDel = 'Hapus';
$strQBEIns = 'Sisipkan';
$strQueryFrame = 'Jendela Pencarian';
$strQueryOnDb = 'Pencarian SQL dalam database <b>%s</b>:';
$strQuerySQLHistory = 'Sejarah SQL';
$strQueryStatistics = '<b>Informasi statistik</b>: Sejak dihidupkan, %s pencarian telah dikirim kepada server.';
$strQueryTime = 'pencarian membutuhkan waktu %01.4f detik';
$strQueryType = 'Tipe Pencarian';
$strQueryWindowLock = 'Jangan timpahkan pencarian ini dari jendela luar';

$strReadRequests = 'Permintaan pembacaan';
$strReceived = 'Penerimaan';
$strRecords = 'Catatan';
$strReferentialIntegrity = 'Cek integriti referensial:';
$strRefresh = 'Menyegarkan';
$strRelationalSchema = 'Skema Relational';
$strRelationNotWorking = 'Fasilitas penambahan untuk bekerja dengan tabel yang di-link di nonaktifkan. Untuk mengetahui sebabnya silakan klik %sdisini%s.';
$strRelationsForTable = 'RELASI UNTUK TABEL';
$strRelations = 'Tabel Relasi';
$strRelationView = 'Tampilan relasi';
$strReloadingThePrivileges = 'Reload Hak Istimewa (Privileges)';
$strRemoveSelectedUsers = 'Hapus pengguna yang dipilih';
$strRenameDatabaseOK = 'Nama database %s telah diubah menjadi %s';
$strRenameTableOK = 'Nama tabel %s telah diubah menjadi %s';
$strRenameTable = 'Ubah nama tabel menjadi ';
$strRepairTable = 'Perbaiki tabel';
$strReplaceNULLBy = 'Menggantikan NULL dengan';
$strReplaceTable = 'Ganti data tabel dengan file';
$strReset = 'Reset';
$strResourceLimits = 'Batas dari sumber';
$strReType = 'Ketik ulang';
$strRevokeAndDelete = 'Cabut seluruh Hak Istimewa (Privileges) dari pengguna, lantas hapus pengguna tsb. dari daftar tabel pengguna.';
$strRevokeAndDeleteDescr = 'Pengguna yang bersangkutan tetap memiliki hak untuk USAGE sampai seluruh Hak Istimewa (Privileges) di-reload kembali.';
$strRevoke = 'Cabut';
$strRevokeMessage = 'Hak akses untuk %s telah dicabut';
$strRomanian = 'Romania';
$strRowLength = 'Panjangnya baris';
$strRows = 'Baris';
$strRowsFrom = 'baris dimulai dari rekord #';
$strRowSize = ' Besarnya baris ';
$strRowsModeFlippedHorizontal = 'horisontal (rotated headers)';
$strRowsModeHorizontal = 'horisontal';
$strRowsModeOptions = 'diatur dengan urutan %s dan mengulang header setelah %s sel.';
$strRowsModeVertical = 'vertikal';
$strRowsStatistic = 'Statistik Baris';
$strRunning = 'dijalankan pada %s';
$strRunQuery = 'Jalankan pencarian SQL';
$strRunSQLQuery = 'Melaksanakan perintah SQL pada database %s';
$strRussian = 'Bahasa Rusia';

$strSaveOnServer = 'Simpan pada server dalam direktori %s';
$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala yang dipilih terlalu kecil untuk dimuat dalam skema satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari dalam database';
$strSearchInTables = 'Cari dalam tabel:';
$strSearchNeedle = 'Kata atau nilai untuk dicari (wildcard: "%"):';
$strSearchOption1 = 'sekurang-kurangnya salah satu kata';
$strSearchOption2 = 'seluruh kata';
$strSearchOption3 = 'kata-kata tepat';
$strSearchOption4 = 'sebagai regular expression';
$strSearchResultsFor = 'Hasil pencarian untuk "<i>%s</i>" %s:';
$strSearchType = 'Cari:';
$strSecretRequired = 'File konfigurasi membutuhkan susunan kata-kata rahasia (blowfish_secret).';
$strSelectADb = 'Silakan pilih database';
$strSelectAll = 'Pilih semua';
$strSelectBinaryLog = 'Pilih Log binari untuk ditinjau';
$strSelectFields = 'Pilihan field (min. satu):';
$strSelectNumRows = 'dalam susunan pemeriksaan';
$strSelectTables = 'Pilih tabel';
$strSend = 'Kirimkan ke';
$strSent = 'Pengiriman';
$strServerChoice = 'Pilihan Server';
$strServerNotResponding = 'Server tidak menjawab';
$strServer = 'Server';
$strServerStatus = 'Informasi Runtime';
$strServerStatusUptime = 'MySQL server ini telah berjalan secara berturut-turut selama %s. Server dijalankan pada tanggal %s.';
$strServerTabVariables = 'Variabel';
$strServerTrafficNotes = '<b>Server traffic</b>: Tabel ini menampilkan statistik jaringan lalu-lintas server MySQL sejak dihidupkan.';
$strServerVars = 'Variabel dan penyetelan server';
$strServerVersion = 'Versi Server';
$strSessionValue = 'Nilai dari Session';
$strSetEnumVal = 'Jika tipe field sama dengan "enum" atau "set", silakan masukkan nilai dengan format: \'a\',\'b\',\'c\'...<br />Jika sebuah backslash ("\") atau suatu tanda kutip ("\'") diperlukan, tanda tersebut perlu ditutupi dengan tanda backslash (seb. contoh \'\\\\xyz\' atau \'a\\\'b\').';
$strShowAll = 'Tampilkan semua';
$strShowColor = 'Tampilkan warna';
$strShowDatadictAs = 'Format dari kamus data';
$strShowFullQueries = 'Tampilkan pencarian yang lengkap';
$strShowGrid = 'Tampilkan garis';
$strShowingRecords = 'Tampilan baris';
$strShowPHPInfo = 'Tampilkan informasi PHP';
$strShowTableDimension = 'Tampilkan ukuran dari tabel';
$strShowTables = 'Tampilkan tabel';
$strShow = 'Tampilkan';
$strShowThisQuery = ' Tampilkan ulang perintah SQL ';
$strSimplifiedChinese = 'Bahasa Cina sederhana';
$strSingly = '(unik)';
$strSize = 'Ukuran';
$strSlovak = 'Slovakia';
$strSlovenian = 'Slovenia';
$strSocketProblem = '(atau konfigurasi socket dari server MySQL tidak benar)';
$strSortByKey = 'Urut berdasarkan kunci';
$strSort = 'Urutkan';
$strSpaceUsage = 'Penggunaan tempat';
$strSpanish = 'Bahasa Spanyol';
$strSplitWordsWithSpace = 'Kata dipisahkan oleh karakter spasi (" ").';
$strSQLExportType = 'Jenis Ekspor';
$strSQLParserBugMessage = 'Mungkin Anda telah temukan sebuah Bug dalam parser SQL. Mohon periksa ulang pencarian SQL dengan teliti dan perhatikan apakah seluruh tanda kutip benar dan seimbang. Penyebab kegagalan bisa terjadi bila Anda meng-upload sebuah file binari diluar teks kutipan. Silakan menjalankan ulang pencarian tersebut dengan menggunakan command line interface. Hasil dari MySQL server error, jika tertampil, akan menolong Anda untuk mengetahui penyebab dari masalah ini. Bila masalah ini tetap muncul atau Parser dari kami masih juga gagal meskipun pencarian melalui command line interface berhasil mohon kurangi input pada SQL query sampai pencarian yang menyebabkan masalah ini ditemukan. Mohon kirimkan sebuah Bug Report dengan cara menyisipkan data di bagian bawah ini kepada kami:';
$strSQLParserUserError = 'Rupanya ada Error pada Query SQL. Hasil dari MySQL server error dibawa ini, jika tertampil, akan menolong Anda untuk mengetahui penyebab dari problem tersebut.';
$strSQLQuery = 'Pencarian SQL';
$strSQLResult = 'Hasil SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identifer tidak valid';
$strSQPBugUnclosedQuote = 'Tanda kutip tidak ditutup';
$strSQPBugUnknownPunctuation = 'Punctation String tidak dikenali';
$strStatCheckTime = 'Pemeriksaan terakhir';
$strStatCreateTime = 'Pembuatan';
$strStatement = 'Keterangan';
$strStatUpdateTime = 'Update terakhir';
$strStatus = 'Status';
$strStorageEngine = 'Mesin Penyimpan';
$strStorageEngines = 'Mesin Penyimpan';
$strStrucCSV = 'Data CSV';
$strStrucData = 'Struktur dan data';
$strStrucExcelCSV = 'CSV untuk data MS Excel';
$strStrucNativeExcel = 'Data asli MS Excel';
$strStrucOnly = 'Struktur saja';
$strStructPropose = 'Menganalisa struktur tabel';
$strStructure = 'Struktur';
$strSubmit = 'Kirim';
$strSuccess = 'Sukses menjalankan perintah SQL';
$strSum = 'Jumlah';
$strSwedish = 'Bahasa Swedia';
$strSwitchToDatabase = 'Pindah ke database yang disalin';
$strSwitchToTable = 'Pindah ke tabel salinan';

$strTableComments = 'Komentar tabel';
$strTableEmpty = 'Nama tabel kosong!';
$strTableHasBeenDropped = 'Tabel %s telah dihapus';
$strTableHasBeenEmptied = 'Tabel %s telah dikosongkan';
$strTableHasBeenFlushed = 'Tabel %s telah dibuang';
$strTableMaintenance = 'Pemeliharaan tabel';
$strTableOfContents = 'Daftar Isi';
$strTableOptions = 'Pilihan untuk tabel';
$strTables = 'tabel %s';
$strTableStructure = 'Struktur dari tabel';
$strTable = 'Tabel';
$strTakeIt = 'ambil';
$strTblPrivileges = 'Hak (privileges) khusus terhadap tabel';
$strTextAreaLength = ' Disebabkan ukuran panjangnya,<br /> field ini tidak dapat di-edit ulang. ';
$strThai = 'Bahasa Thailand';
$strTheme = 'Desain Penampilan';
$strThisHost = 'Host yang ini';
$strThreadSuccessfullyKilled = 'Sukses hentikan Thread %s.';
$strTime = 'Jangka Waktu';
$strToggleScratchboard = 'pindah buku catatan (Scratchboard)';
$strTotal = 'jumlah';
$strTotalUC = 'Jumlah';
$strTraditionalChinese = 'Bahasa Cina tradisional';
$strTraditionalSpanish = 'Spanyol tradisional';
$strTraffic = 'Lalu-Lintas';
$strTransformation_application_octetstream__download = 'Tampilkan Link untuk men-download data binari dari Field. Pilihan pertama adalah nama dari file binari tersebut. Pilihan kedua adalah nama Field dari sebuah baris tabel yang memiliki nama file. Bila Anda menetapkan pilihan kedua, pilihan pertama harus ditepatkan ke sebuah string yang kosong';
$strTransformation_application_octetstream__hex = 'Menampilkan representasi data heksadesimal. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_image_jpeg__inline = 'Tampilkan Thumbnail yang bisa diklik; pilihan: lebar, tinggi dalam piksel (rasio asli dipertahankan)';
$strTransformation_image_jpeg__link = 'Tampilkan link ke gambar ini (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'Lihat image/jpeg: inline';
$strTransformation_text_plain__external = 'HANYA UNTUK LINUX: Luncurkan aplikasi eksternal dan mengisi data Field dengan cara standar. Menghasilkan output standar dari aplikasi yang bersangkutan. Default-nya adalah Tidy untuk mempercantik kode HTML cetakan. Dengan alasan pengamanan sistem, Anda perlu meng-edit file libraries/transformations/text_plain__external.inc.php dan menambahkan Tools yang akan diizinkan secara manual. Pilihan pertama adalah jumlah dari program yang ingin digunakan dan pilihan kedua adalah parameter untuk program-program tersebut. Parameter ketiga, bila diset ke 1 akan mengubah output dengan menggunakan htmlspecialchars() (Default adalah 1). Parameter keempat, bila diset ke 1 akan menambahkan sebuah NOWRAP pada Content Cell dengan hasil output yang akan ditampilkan tanpa keperluan untuk me-format ulang (Default 1)';
$strTransformation_text_plain__formatted = 'Menyimpan format asli dari field. Escaping tidak dilakukan.';
$strTransformation_text_plain__imagelink = 'Tampilkan sebuah gambar dan sebuah Link, nama file berada dalam field; pilihan utama adalah awalan seperti "http://domain.com/", pilihan kedua adalah lebar dalam piksel, pilihan ketiga adalah tingginya.';
$strTransformation_text_plain__link = 'Tampilkan sebuah Link, nama file berada dalam field; pilihan utama adalah awalan seperti  "http://domain.com/", pilihan kedua adalah judul untuk Link tersebut.';
$strTransformation_text_plain__substr = 'Hanya menampilkan sebagian dari sebuah String. Pilihan pertama adalah sebuah Offset untuk menentukan tempat dari permulaan teks Anda (Default 0). Pilihan kedua adalah sebuah Offset untuk menentukan jumlah teks yang akan dikembalikan. Bila ditinggal kosong, seluruh teks yang tersisa akan dibalikkan. Pilihan ketiga mendefinisikan Chars yang akan ditambahkan pada Output bila sebuah Substring dibalikkan (Default: ...) .';
$strTruncateQueries = 'Potongkan pencarian yang ditampilkan';
$strTurkish = 'Bahasa Turki';
$strType = 'Jenis';

$strUkrainian = 'Bahasa Ukrainia';
$strUncheckAll = 'Balik pilihan';
$strUnicode = 'Unikode';
$strUnique = 'Unik';
$strUnknown = 'tidak diketahui';
$strUnselectAll = 'Unselect semua';
$strUpdatePrivMessage = 'Hak Akses (privilege) untuk %s telah di-update.';
$strUpdateProfileMessage = 'Profil pengguna telah di-update.';
$strUpdateQuery = 'Update proses pencarian';
$strUpdComTab = 'Mohon belajari dokumentasi untuk mengetahui cara meng-update tabel Column_comments Anda';
$strUpgrade = 'Disarankan untuk meng-update ke %s versi %s atau lebih baru.';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Nama tabel dan nama field dalam tanda kutip biasa';
$strUseHostTable = 'Gunakan Host Table';
$strUserAlreadyExists = 'Pengguna %s telah terdaftar!';
$strUserEmpty = 'Nama pengguna masih kosong!';
$strUserName = 'Nama pengguna';
$strUserNotFound = 'Pengguna yang dipilih tidak ditemukan pada tabel hak (privilege table).';
$strUserOverview = 'Pandangan Umum Pengguna';
$strUser = 'Pengguna';
$strUsersDeleted = 'Sukses menghapus Pengguna yang dipilih.';
$strUsersHavingAccessToDb = 'Pengguna memiliki akses ke &quot;%s&quot;';
$strUseTabKey = 'Gunakan tombol TAB untuk maju dari angka ke angka atau gunakan CTRL+panah untuk maju kemana saja';
$strUseTables = 'Gunakan tabel';
$strUseTextField = 'Gunakan text field';
$strUseThisValue = 'gunakan nilai ini';

$strValidateSQL = 'Mengesahkan (validate) SQL';
$strValidatorError = 'Pengesahan SQL tidak dapat disahkan. Mohon periksa kembali ekstension PHP yang diperlukan seperti yang tercatat dalam %sdokumentasi%s.';
$strValue = 'Nilai';
$strVar = 'Variabel';
$strVersionInformation = 'Informasi tentang versi';
$strViewDumpDatabases = 'Tampilkan Dump (skema) dari database';
$strViewDumpDB = 'Tampilkan Dump (Skema) dari database';
$strViewDump = 'Tampilkan Dump (Skema) dari tabel';
$strView = 'Gambarkan';
$strViewHasBeenDropped = 'Pandangan %s telah dibubarkan';

$strWebServerUploadDirectory = 'direktori upload pada web-server';
$strWebServerUploadDirectoryError = 'Direktori yang telah ditetapkan untuk meng-upload tidak dapat dihubungi';
$strWelcome = 'Selamat Datang di %s';
$strWestEuropean = 'Eropa Barat';
$strWildcard = 'wildcard';
$strWindowNotFound = 'Mengupdate jendela browser gagal. Ada kemungkinan Anda telah menutup jendela induknya atau pilihan keamanan pada browser Anda melarang untuk mengupdate dengan cara Cross-Window';
$strWithChecked = 'yang ditandai:';
$strWriteRequests = 'Permintaan penulisan';
$strWrongUser = 'Nama Pengguna/Kata Sandi salah. Akses ditolak.';

$strXML = 'XML';

$strYes = 'Ya';

$strZeroRemovesTheLimit = 'Perhatian: Perubahan pilihan ini ke posisi 0 (zero) akan menghapus batas yang telah ditentukan.';
$strZip = 'Dikompress dengan Zip';

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
