<?php
/* $Id: polish-iso-8859-2.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$number_thousands_separator = '�';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajt�w', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', '�ro', 'Czw', 'Pi�', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa�', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAbortedClients = 'Przerwane';
$strAccessDenied = 'Brak dost�pu';
$strAccessDeniedCreateConfig = 'Prawdopodobnie powodem jest brak utworzonego pliku konfiguracyjnego. Do jego stworzenia mo�na u�y� %1$sskryptu instalacyjnego%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin pr�bowa� po��czy� si� z serwerem MySQL, a serwer odrzuci� po��czenie. Powiniene� sprawdzi� nazw� hosta, nazw� u�ytkownika i has�o w pliku config.inc.php i upewni� si�, �e odpowiadaj� one informacjom danym przez administratora serwera MySQL.';
$strAction = 'Dzia�anie';
$strAddAutoIncrement = 'Dodaj warto�ci AUTO_INCREMENT';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj ograniczenia';
$strAddDeleteColumn = 'Dodaj/usu� pola';
$strAddDeleteRow = 'Dodaj/usu� wiersz kryteri�w';
$strAddFields = 'Dodaj %s p�l';
$strAddHeaderComment = 'Dodaj do nag��wka w�asny komentarz (\\n oddziela linie)';
$strAddIntoComments = 'Dodaj w komentarzach:';
$strAddNewField = 'Dodaj nowego pole';
$strAddPrivilegesOnDb = 'Dodaj uprawnienia dla nast�puj�cej bazy danych';
$strAddPrivilegesOnTbl = 'Dodaj uprawnienia dla nast�puj�cej tabeli';
$strAddSearchConditions = 'Dodaj warunki przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodaj &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodaj nowego u�ytkownika';
$strAddUserMessage = 'Nowy u�ytkownik zosta� dodany.';
$strAdministration = 'Administracja';
$strAffectedRows = 'Zmodyfikowanych rekord�w:';
$strAfterInsertBack = 'Wr��';
$strAfterInsertNewInsert = 'Dodaj nowy rekord';
$strAfterInsertNext = 'Edytuj nast�pny rekord';
$strAfterInsertSame = 'Powr�t do tej strony';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Zezw�l na przerwanie importu w przypadku, gdy skrypt wykryje zbli�aj�cy si� koniec limitu czasu. Mo�e to by� dobry spos�b importu du�ych plik�w, jednak�e mo�e on popsu� transakcje.';
$strAllTableSameWidth = 'wy�wietli� wszystkie tabele z tak� sam� szeroko�ci�?';
$strAll = 'Wszystko';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnalyzeTable = 'Analizuj tabel�';
$strAnd = 'oraz';
$strAndThen = 'a nast�pnie';
$strAnIndex = 'Do %s dodany zosta� indeks';
$strAny = 'Dowolny';
$strAnyHost = 'Dowolny host';
$strAnyUser = 'Dowolny u�ytkownik';
$strApproximateCount = 'By� mo�e w przybli�eniu. Zobacz FAQ 3.11';
$strAPrimaryKey = 'Do %s dodany zosta� klucz podstawowy';
$strArabic = 'Arabski';
$strArmenian = 'Ormia�ski';
$strAscending = 'Rosn�co';
$strAtBeginningOfTable = 'Na pocz�tku tabeli';
$strAtEndOfTable = 'Na ko�cu tabeli';
$strAttr = 'Atrybuty';
$strAutomaticLayout = 'Uk�ad automatyczny';

$strBack = 'Powr�t';
$strBaltic = 'Ba�tycki';
$strBeginCut = 'TNIJ ST�D';
$strBeginRaw = 'SUROWE DANE ST�D';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBinaryLog = 'Dziennik binarny';
$strBinLogEventType = 'Typ zdarzenia';
$strBinLogInfo = 'Informacje';
$strBinLogName = 'Nazwa dziennika';
$strBinLogOriginalPosition = 'Oryginalna pozycja';
$strBinLogPosition = 'Pozycja';
$strBinLogServerId = 'ID serwera';
$strBookmarkAllUsers = 'Pozw�l na dost�p wszystkim u�ytkownikom';
$strBookmarkCreated = 'Zapytanie %s zosta�o zapami�tane';
$strBookmarkDeleted = 'Zapami�tane zapytanie SQL zosta�o usuni�te.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapami�tane zapytanie SQL';
$strBookmarkReplace = 'Zamie� istniej�ce zapami�tane zapytanie o tej samej nazwie';
$strBookmarkThis = 'Pami�taj zapytanie SQL';
$strBookmarkView = 'Tylko poka�';
$strBrowseDistinctValues = 'Przegl�daj r�ne warto�ci';
$strBrowseForeignValues = 'Przegl�daj zewn�trzne warto�ci';
$strBrowse = 'Przegl�daj';
$strBufferPoolActivity = 'Aktywno�� rezerw buforowych';
$strBufferPool = 'Rezerwy buforowe';
$strBufferPoolUsage = 'U�ycie rezerw buforowych';
$strBufferReadMisses = 'Chybienia odczytu';
$strBufferReadMissesInPercent = 'Chybienia odczytu w %';
$strBufferWriteWaitsInPercent = 'Oczekiwania zapisu w %';
$strBufferWriteWaits = 'Oczekiwania na zapis';
$strBulgarian = 'Bu�garski';
$strBusyPages = 'Strony u�ywane';
$strBzError = 'phpMyAdminowi nie uda�o si� skompresowa� zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji PHP. Jest bardzo zalecane by ustawi� dyrektyw� <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Je�li chcesz u�y� funkcji kompresji Bz2, PHP powinien zosta� zaktualizowany do najnowszej wersji. Szczeg�y mo�na zobaczy� w raporcie na temat b��d�w PHP %s.';
$strBzip = '".bz2"';

$strCalendar = 'Kalendarz';
$strCanNotLoadExportPlugins = 'Nie uda�o si� za�adowa� modu��w eksportu, prosz� sprawdzi� instalacj�!';
$strCanNotLoadImportPlugins = 'Nie uda�o si� za�adowa� modu��w importu, prosz� sprawdzi� instalacj�!';
$strCannotLogin = 'Nie uda�o si� zalogowa� na serwer MySQL';
$strCantLoad = 'nie uda�o si� za�adowa� modu�u %s,<br />prosz� sprawdzi� konfiguracj� PHP';
$strCantLoadRecodeIconv = 'Nie uda�o si� za�adowa� rozszerze� iconv lub recode, kt�re s� niezb�dne do konwersji kodowania znak�w, skonfiguruj PHP tak, by m�g� u�ywa� tych rozszerze� albo zablokuj konwersj� kodowania znak�w w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie mo�na zmieni� nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie uda�o si� u�y� ani funkcji iconv, ani libiconv, mimo �e rozszerzenia zg�aszaj� si� jako za�adowane. Prosz� sprawdzi� swoj� konfiguracj� PHP.';
$strCardinality = 'Moc';
$strCaseInsensitive = 'bez rozr�niania wielko�ci liter';
$strCaseSensitive = 'z rozr�nianiem wielko�ci liter';
$strCentralEuropean = '�rodkowoeuropejski';
$strChangeCopyModeCopy = '... pozostaw starego.';
$strChangeCopyModeDeleteAndReload = ' ... usu� starego z tabel u�ytkownik�w, a nast�pnie prze�aduj uprawnienia.';
$strChangeCopyModeJustDelete = ' ... usu� starego z tabel u�ytkownik�w.';
$strChangeCopyModeRevoke = ' ... odbierz wszystkie aktywne uprawnienia staremu, a nast�pnie go usu�.';
$strChangeCopyMode = 'Utw�rz nowego u�ytkownika z takimi samymi uprawnieniami i ...';
$strChangeCopyUser = 'Zmie� dane u�ytkownika / Skopiuj u�ytkownika';
$strChangeDisplay = 'Wybierz wy�wietlane pole';
$strChangePassword = 'Zmie� has�o';
$strChange = 'Zmie�';
$strCharsetOfFile = 'Zestaw znak�w dla pliku:';
$strCharsetsAndCollations = 'Zestawy znak�w i metody por�wnywania napis�w';
$strCharsets = 'Zestawy znak�w';
$strCharset = 'Zestaw znak�w';
$strCheckAll = 'Zaznacz wszystkie';
$strCheckOverhead = 'Zaznacz nieoptymalne';
$strCheckPrivsLong = 'Sprawd� uprawnienia bazy danych &quot;%s&quot;.';
$strCheckPrivs = 'Sprawd� uprawnienia';
$strCheckTable = 'Sprawd� tabel�';
$strChoosePage = 'Prosz� wybra� stron� do edycji';
$strColComFeat = 'Wy�wietl komentarze dla kolumn';
$strCollation = 'Metoda por�wnywania napis�w';
$strColumnNames = 'Nazwy kolumn';
$strColumnPrivileges = 'Uprawnienia specyficzne dla kolumn';
$strCommand = 'Polecenie';
$strCommentsForTable = 'KOMENTARZE TABELI';
$strComments = 'Komentarze';
$strCompatibleHashing = 'Kompatybilny z MySQL-em&nbsp;4.0';
$strCompleteInserts = 'Pe�ne dodania';
$strCompression = 'Typ kompresji';
$strCompressionWillBeDetected = 'Rodzaj kompresji importowanych plik�w zostanie automatycznie rozpoznany jako jeden z: %s';
$strConfigDefaultFileError = 'Nie uda�o si� za�adowa� domy�lnej konfiguracji z pliku: "%1$s"';
$strConfigFileError = 'phpMyAdmin nie zdo�a� odczyta� Twojego pliku konfiguracji!<br />Mo�e si� to zdarzy�, je�li PHP znajdzie w nim b��d sk�adniowy lub nie mo�e znale�� tego pliku.<br />Prosz� wywo�a� bezpo�rednio plik konfiguracyjny u�ywaj�c poni�szego linku i odczyta� otrzymane komunikat(y) o b��dach. W wi�kszo�ci przypadk�w brakuje gdzie� cudzys�owu lub �rednika.<br />Je�eli otrzymasz pust� stron�, wszystko jest w porz�dku.';
$strConfigureTableCoord = 'Prosz� skonfigurowa� wsp�rz�dnie dla tabeli %s';
$strConnectionError = 'Nie uda�o si� nawi�za� po��czenia: b��dne ustawienia.';
$strConnections = 'Po��czenia';
$strConstraintsForDumped = 'Ograniczenia dla zrzut�w tabel';
$strConstraintsForTable = 'Ograniczenia dla tabeli';
$strCookiesRequired = 'Odt�d musi by� w��czona obs�uga ciasteczek [<i>cookies</i>].';
$strCopyDatabaseOK = 'Baza danych %s zosta�a skopiowana do %s';
$strCopy = 'Kopiuj';
$strCopyTableOK = 'Tabela %s zosta�a skopiowana do %s.';
$strCopyTableSameNames = 'Nie mo�na skopiowa� tabeli do niej samej!';
$strCopyTable = 'Skopiuj tabel� do (bazadanych<b>.</b>tabela):';
$strCouldNotKill = 'phpMyAdminowi nie uda�o si� unicestwi� w�tku %s. Prawdopodobnie zosta� on ju� zamkni�ty.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE przed skopiowaniem';
$strCreateIndexTopic = 'Utw�rz nowy indeksu';
$strCreateIndex = 'Utw�rz indeks dla %s kolumn';
$strCreateNewDatabase = 'Utw�rz now� baz� danych';
$strCreateNewTable = 'Utw�rz now� tabel� w bazie danych %s';
$strCreatePage = 'Utw�rz now� stron�';
$strCreatePdfFeat = 'Tworzenie PDF-�w';
$strCreateUserDatabase = 'Baza danych dla u�ytkownika';
$strCreateUserDatabaseName = 'Utw�rz baz� danych z tak� sam� nazw� i przyznaj wszystkie uprawnienia';
$strCreateUserDatabaseNone = 'Brak';
$strCreateUserDatabaseWildcard = 'Przyznaj wszystkie uprawienia do baz danych o nazwach pasuj�cych do maski (nazwau�ytkownika_%)';
$strCreate = 'Utw�rz';
$strCreationDates = 'Daty utworzenia/aktualizacji/sprawdzenia';
$strCriteria = 'Kryteria';
$strCroatian = 'Chorwacki';
$strCSV = 'CSV';
$strCyrillic = 'Cyrylica';
$strCzech = 'Czeski';
$strCzechSlovak = 'Czesko-s�owacki';

$strDanish = 'Du�ski';
$strDatabase = 'Baza danych';
$strDatabaseEmpty = 'Nazwa bazy danych jest pusta!';
$strDatabaseExportOptions = 'Opcje eksportu bazy danych';
$strDatabaseHasBeenDropped = 'Baza danych %s zosta�a usuni�ta.';
$strDatabases = 'Bazy danych';
$strDatabasesDropped = '%s baz danych zosta�o pomy�lnie usuni�tych.';
$strDatabasesStatsDisable = 'Wy��cz statystyki';
$strDatabasesStatsEnable = 'W��cz statystyki';
$strDatabasesStatsHeavyTraffic = 'Uwaga: W��czenie statystyk baz danych mo�e spowodowa� du�y ruch pomi�dzy serwerem WWW a serwerem MySQL.';
$strDatabasesStats = 'Statystyki baz danych';
$strData = 'Dane';
$strDataDict = 'S�ownik danych';
$strDataOnly = 'Tylko dane';
$strDataPages = 'Strony zawieraj�ce dane';
$strDBComment = 'Komentarz bazy danych: ';
$strDBCopy = 'Kopiuj baz� danych do';
$strDbPrivileges = 'Uprawnienia specyficzne dla baz danych';
$strDBRename = 'Zmie� nazw� bazy danych na';
$strDbSpecific = 'specyficzne dla bazy danych';
$strDefault = 'Domy�lnie';
$strDefaultEngine = '%s to domy�lny mechanizm sk�adowania tego serwera MySQL.';
$strDefaultValueHelp = 'Dla warto�ci domy�lnych, prosz� wprowadzi� po prostu pojedyncz� warto��, bez cytowania odwrotnym uko�nikiem czy ujmowania w cudzys�owy, u�ywaj�c takiego formatu: a';
$strDefragment = 'Tablica defragmentacji';
$strDelayedInserts = 'U�yj op�nionych doda�';
$strDeleteAndFlushDescr = 'Jest to najzgrabniejszy spos�b, ale prze�adowanie uprawnie� mo�e potrwa� jaki� czas.';
$strDeleteAndFlush = 'Usu� u�ytkownik�w, a nast�pnie prze�aduj uprawnienia.';
$strDeleted = 'Rekord zosta� skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleteNoUsersSelected = '�aden u�ytkownik ze zosta� zaznaczony do skasowania!';
$strDelete = 'Usu�';
$strDeleting = 'Usuwanie %s';
$strDelimiter = 'Separator';
$strDelOld = 'Aktualna strona ma powi�zania z tabel�, kt�ra ju� nie istnieje. Czy chcesz usun�� te powi�zania?';
$strDescending = 'Malej�co';
$strDescription = 'Opis';
$strDictionary = 's�ownik';
$strDirtyPages = 'Strony brudne';
$strDisabled = 'wy��czone';
$strDisableForeignChecks = 'Wy��cz sprawdzanie kluczy zewn�trznych';
$strDisplayFeat = 'Funkcje wy�wietlania';
$strDisplayOrder = 'Kolejno�� wy�wietlania:';
$strDisplayPDF = 'Wy�wietl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przyk�ad" (znak globalny: "%")';
$strDocu = 'Dokumentacja';
$strDoYouReally = 'Czy na pewno wykona� ';
$strDropDatabaseStrongWarning = 'Masz zamiar ZNISZCZY� ca�� baz� danych!';
$strDropUsersDb = 'Usu� bazy danych o takich samych nazwach jak u�ytkownicy.';
$strDrop = 'Usu�';
$strDumpingData = 'Zrzut danych tabeli';
$strDumpSaved = 'Zrzut zosta� zapisany do pliku %s.';
$strDumpXRows = 'Zrzu� %s rekord�w zaczynaj�c od rekordu %s.';
$strDynamic = 'zmienny';

$strEdit = 'Edytuj';
$strEditPDFPages = 'Edytuj strony PDF';
$strEditPrivileges = 'Edytuj uprawnienia';
$strEffective = 'Efektywne';
$strEmptyResultSet = 'MySQL zwr�ci� pusty wynik (zero rekord�w).';
$strEmpty = 'Wyczy��';
$strEnabled = 'w��czone';
$strEncloseInTransaction = 'Obejmij eksport transakcj�';
$strEndCut = 'TNIJ DOT�D';
$strEnd = 'Koniec';
$strEndRaw = 'SUROWE DANE DOT�D';
$strEngineAvailable = '%s jest dost�pny na tym serwerze MySQL.';
$strEngineDisabled = 'Mechanizm %s zosta� wy��czony w tym serwerze MySQL.';
$strEngines = 'Mechanizmy';
$strEngineUnsupported = 'Ten serwer MySQL nie obs�uguje mechanizmu sk�adowania %s.';
$strEnglish = 'Angielski';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL s� oznaczone w j�zyku angielskim ';
$strError = 'B��d';
$strErrorInZipFile = 'B��d w archiwum ZIP:';
$strErrorRenamingTable = 'B��d podczas zmiany nazwy tabeli z %1$s na %2$s';
$strEscapeWildcards = 'Aby u�y� symboli wieloznacznych _ i % w znaczeniu dos�ownym, nale�y je poprzedzi� znakiem \ ';
$strEsperanto = 'Esperanto';
$strEstonian = 'Esto�ski';
$strExcelEdition = 'Wydanie Excela';
$strExecuteBookmarked = 'Wykonaj zapami�tanego zapytania';
$strExplain = 'Wyja�nij SQL';
$strExport = 'Eksport';
$strExportMustBeFile = 'Wybrany typ eksportu musi by� zapisany do pliku';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowo';

$strFailedAttempts = 'Nieudane pr�by';
$strFieldHasBeenDropped = 'Pole %s zosta�o usuni�te';
$strField = 'Pole';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFields = 'Pola';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFileAlreadyExists = 'Plik %s ju� istnieje na serwerze, zmie� nazw� pliku lub zaznacz opcj� nadpisywania plik�w.';
$strFileCouldNotBeRead = 'Nie mo�na odczyta� pliku';
$strFileNameTemplateDescriptionDatabase = 'nazwa bazy danych';
$strFileNameTemplateDescription = 'Interpretacja tej warto�ci nale�y do funkcji %1$sstrftime%2$s i mo�na u�y� jej napis�w formatuj�cych. Dodatkowo zostan� zastosowane nast�puj�ce przekszta�cenia: %3$s. Pozosta�y tekst b�dzie niezmieniony.';
$strFileNameTemplateDescriptionServer = 'nazwa serwera';
$strFileNameTemplateDescriptionTable = 'nazwa tabeli';
$strFileNameTemplateRemember = 'pami�taj szablon';
$strFileNameTemplate = 'Szablon nazwy';
$strFileToImport = 'Plik do importu';
$strFixed = 'sta�y';
$strFlushPrivilegesNote = 'Uwaga: phpMyAdmin pobiera uprawnienia u�ytkownik�w wprost z tabeli uprawnie� MySQL-a. Zawarto�� tej tabeli, je�li zosta�y w niej dokonane r�czne zmiany, mo�e si� r�ni� od uprawnie� jakich faktycznie u�ywa serwer. W takim przypadku powiniene� przed dalsz� prac� %sprze�adowa� uprawnienia%s.';
$strFlushQueryCache = 'Opr�nij bufor podr�czny zapyta�';
$strFlushTable = 'Prze�aduj tabel� ("FLUSH")';
$strFlushTables = 'Prze�aduj (zamknij) wszystkie tabele';
$strFontSize = 'Rozmiar pisma';
$strFormat = 'Format';
$strFormEmpty = 'Brakuj�ca warto�� w formularzu!';
$strFreePages = 'Strony puste';
$strFullText = 'Pe�ny tekst';
$strFunction = 'Funkcja';
$strFunctions = 'Funkcje';

$strGenBy = 'Wygenerowany przez';
$strGeneralRelationFeat = 'Og�lne funkcje relacyjne';
$strGenerate = 'Generuj';
$strGeneratePassword = 'Generuj has�o';
$strGenTime = 'Czas wygenerowania';
$strGeorgian = 'Gruzi�ski';
$strGerman = 'Niemiecki';
$strGlobal = 'globalnie';
$strGlobalPrivileges = 'Globalne uprawnienia';
$strGlobalValue = 'Warto�� globalna';
$strGo = 'Wykonaj';
$strGrantOption = 'Nadawanie';
$strGreek = 'Grecki';
$strGzip = '".gz"';

$strHandler = 'Obs�uga';
$strHasBeenAltered = 'zosta�o zamienione.';
$strHasBeenCreated = 'zosta�o utworzone.';
$strHaveToShow = 'Nale�y wybra� przynajmniej jedn� kolumn� do wy�wietlenia';
$strHebrew = 'Hebrajski';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHome = 'Wej�cie';
$strHostEmpty = 'Brak nazwy hosta!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'W�gierski';

$strIcelandic = 'Islandzki';
$strId = 'ID';
$strIdxFulltext = 'Pe�ny tekst';
$strIgnoreDuplicates = 'Ignoruj zdublowane rekordy';
$strIgnore = 'Ignoruj';
$strIgnoreInserts = 'U�yj ignorowanych doda�';
$strImportFiles = 'Import plik�w';
$strImportFormat = 'Format importowanych plik�w';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import zako�czony sukcesem, wykonano %d zapyta�.';
$strIndexes = 'Indeksy';
$strIndexHasBeenDropped = 'Klucz %s zosta� usuni�ty';
$strIndex = 'Indeks';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexWarningTable = 'Problemy z indeksami tabeli `%s`';
$strInnoDBAutoextendIncrementDesc = 'Rozmiar o jaki automatycznie powi�kszy si� tabela, kiedy zostanie zape�niona.';
$strInnoDBAutoextendIncrement = 'Przyrost autoextend';
$strInnoDBBufferPoolSizeDesc = 'Ilo�� pami�ci, kt�rej InnoDB u�ywa do buforowania danych i indeks�w swoich tabel.';
$strInnoDBBufferPoolSize = 'Rozmiar rezerw buforowych';
$strInnoDBDataFilePath = 'Pliki danych';
$strInnoDBDataHomeDirDesc = 'Wsp�lna cz�� �cie�ki do wszystkich plik�w danych InnoDB.';
$strInnoDBDataHomeDir = 'Katalog domowy danych';
$strInnoDBPages = 'stron';
$strInnodbStat = 'Status InnoDB';
$strInsecureMySQL = 'Tw�j plik konfiguracyjny zawiera ustawienia (konto roota bez has�a), kt�re odpowiadaj� domy�lnemu uprzywilejowanemu kontu MySQL. Tw�j serwer MySQL dzia�a z takim ustawieniem, jest otwarty dla w�amywaczy. Ta luka w bezpiecze�stwie naprawd� powinna zosta� naprawiona.';
$strInsertAsNewRow = 'Dodaj jako nowy rekord';
$strInsert = 'Dodaj';
$strInsertedRowId = 'Identyfikator dodanego rekordu:';
$strInsertedRows = 'Dodane rekordy:';
$strInternalNotNecessary = '* Wewn�trzna relacja nie jest konieczna gdy istnieje r�wnie� w InnoDB.';
$strInternalRelations = 'Wewn�trzne relacje';
$strInUse = 'w u�yciu';
$strInvalidAuthMethod = 'W konfiguracji ustawiono b��dn� metod� uwierzytelniania:';
$strInvalidColumnCount = 'Liczba kolumn musi by� wi�ksza ni� zero.';
$strInvalidColumn = 'Podano b��dn� kolumn� (%s)!';
$strInvalidCSVFieldCount = 'Niew�a�ciwa liczba p�l w linii %d danych wej�ciowych CSV.';
$strInvalidCSVFormat = 'Niew�a�ciwy format w linii %d danych wej�ciowych CSV.';
$strInvalidCSVParameter = 'Niew�a�ciwy parametr importu CSV: %s';
$strInvalidDatabase = 'Niew�a�ciwa baza danych';
$strInvalidFieldAddCount = 'Nale�y doda� przynajmniej jedno pole.';
$strInvalidFieldCount = 'Tabela musi mie� przynajmniej jedno pole.';
$strInvalidLDIImport = 'Ten modu� nie obs�uguje skompresowanych import�w!';
$strInvalidRowNumber = '%d nie jest prawid�owym numerem rekordu.';
$strInvalidServerHostname = 'Niew�a�ciwa nazwa hosta serwera %1$s. Prosz� przyjrze� si� konfiguracji.';
$strInvalidServerIndex = 'Niew�a�ciwy numer serwera: "%s"';
$strInvalidTableName = 'Niew�a�ciwa nazwa tabeli';

$strJapanese = 'Japo�ski';
$strJoins = 'Z��czenia';
$strJumpToDB = 'Skok do bazy danych &quot;%s&quot;.';
$strJustDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, &quot;usuni�ci&quot; u�ytkownicy nadal b�d� mieli dotychczasowy dost�p do serwera.';
$strJustDelete = 'Po prostu usu� u�ytkownik�w z tabeli uprawnie�.';

$strKeepPass = 'Nie zmieniaj has�a';
$strKeyCache = 'Bufor podr�czny indeks�w';
$strKeyname = 'Nazwa klucza';
$strKill = 'Unicestwij';
$strKorean = 'Korea�ski';

$strLandscape = 'Orientacja pozioma';
$strLanguage = 'J�zyk';
$strLanguageUnknown = 'Nieznany j�zyk: %1$s.';
$strLatchedPages = 'Stron zatrza�ni�tych';
$strLatexCaption = 'Nag��wek tabeli';
$strLatexContent = 'Zawarto�� tabeli __TABLE__';
$strLatexContinuedCaption = 'Kontynuacja nag��wka tabeli';
$strLatexContinued = '(kontynuacja)';
$strLatexIncludeCaption = 'Za��cz nag��wek tabeli';
$strLatexLabel = 'Etykieta klucza';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabeli __TABLE__';
$strLatvian = '�otewski';
$strLDI = 'CSV przy u�yciu LOAD DATA';
$strLDILocal = 'U�yj s�owa kluczowego LOCAL';
$strLengthSet = 'D�ugo��/Warto�ci*';
$strLimitNumRows = 'rekord�w na stronie';
$strLinesTerminatedBy = 'Linie zako�czone przez';
$strLinkNotFound = '��cze nie znalezione';
$strLinksTo = '��cze';
$strLithuanian = 'Litewski';
$strLocalhost = 'Host lokalny';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLoginInformation = 'Dane u�ytkownika';
$strLogin = 'Login';
$strLogout = 'Wyj�cie';
$strLogPassword = 'Has�o:';
$strLogServer = 'Serwer';
$strLogUsername = 'U�ytkownik:';
$strLongOperation = 'Ta operacja mo�e trwa� d�ugo. Czy mimo to kontynuowa�?';

$strMaxConnects = 'Maks. jednoczesnych po��cze�';
$strMaximalQueryLength = 'Maksymalna d�ugo�� utworzonego zapytania';
$strMaximumSize = 'Maksymalny rozmiar: %s%s';
$strMbExtensionMissing = 'Rozszerzenie PHP o nazwie mbstring nie zosta�o znalezione, a wygl�da na to, �e u�ywasz wielobajtowego zestawu znak�w. Bez rozszerzenia mbstring phpMyAdmin nie ma mo�liwo�ci poprawnego rozbijania napis�w, co mo�e skutkowa� niespodziewanymi rezultatami.';
$strMbOverloadWarning = 'Opcja mbstring.func_overload jest w��czona w pliku konfiguracyjnym PHP. Jest ona niezgodna z phpMyAdminem i mo�e powodowa� utrat� niekt�rych danych!';
$strMIME_available_mime = 'Dost�pne typy MIME';
$strMIME_available_transform = 'Dost�pne transformacje';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'Typ MIME';
$strMIME_nodescription = 'Transformacja ta nie ma opisu.<br />Prosz� zapyta� autora, co robi %s.';
$strMIME_transformation_note = 'Aby uzyska� list� dost�pnych opcji transformacji i ich typ�w MIME, kliknij %sopisy transformacji%s';
$strMIME_transformation_options_note = 'Prosz� wprowadzi� warto�ci dla transformacji w nast�puj�cym formacie: \'a\', 100, b,\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strMIME_transformation_options = 'Opcje transformacji';
$strMIME_transformation = 'Spos�b prezentacji danych';
$strMIMETypesForTable = 'TYPY MIME TABELI';
$strMIME_without = 'Typy MIME pisane czcionk� pochylon� nie maj� oddzielnej funkcji transformacji';
$strModifications = 'Modyfikacje zosta�y zapami�tane';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strModify = 'Modyfikacja';
$strMoveTableOK = 'Tabela %s zosta�a przeniesiona do %s.';
$strMoveTable = 'Przenie� tabel� do (bazadanych<b>.</b>tabela):';
$strMoveTableSameNames = 'Nie mo�na przenie�� tabeli do niej samej!';
$strMultilingual = 'wiele j�zyk�w';
$strMyISAMDataPointerSizeDesc = 'Domy�lny rozmiar wska�nika w bajtach, kt�ry jest u�ywany przez CREATE TABLE dla tabel MyISAM, gdy nie okre�lono opcji MAX_ROWS.';
$strMyISAMDataPointerSize = 'Rozmiar wska�nika danych';
$strMyISAMMaxExtraSortFileSizeDesc = 'Je�eli plik tymczasowy u�yty przy szybkim tworzeniu indeksu MyISAM by�by wi�kszy o warto�� tu okre�lon�, ni� w wypadku zastosowania metody pami�ci podr�cznej kluczy, preferuj t� drug� metod�.';
$strMyISAMMaxExtraSortFileSize = 'Maksymalny rozmiar pliku tymczasowego dla tworzenia indeksu';
$strMyISAMMaxSortFileSizeDesc = 'Maksymalny rozmiar pliku tymczasowego, kt�rego mo�e zosta� u�yty przy ponownym tworzeniu indeksu MyISAM (podczas operacji REPAIR TABLE, ALTER TABLE lub LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksymalny rozmiar pliku tymczasowego dla sortowania';
$strMyISAMRecoverOptionsDesc = 'Tryb w kt�rym po awarii tabele MyISAM s� automatycznie naprawiane; w��czany przez opcj� startow� serwera --myisam-recover.';
$strMyISAMRecoverOptions = 'Tryb automatycznej naprawy';
$strMyISAMRepairThreadsDesc = 'Warto�� wi�ksza ni� 1 oznacza, �e indeksy tabel MyISAM s� tworzone wsp�bie�nie (ka�dy indeks ma sw�j w�tek) podczas naprawy przez proces sortuj�cy.';
$strMyISAMRepairThreads = 'Liczba w�tk�w naprawiaj�cych';
$strMyISAMSortBufferSizeDesc = 'Bufor, kt�ry jest alokowany w czasie sortowania indeks�w MyISAM podczas operacji REPAIR TABLE albo gdy indeksy s� tworzone przez polecenia CREATE INDEX lub ALTER TABLE.';
$strMyISAMSortBufferSize = 'Rozmiar bufora dla sortowania';
$strMySQLCharset = 'System kodowania znak�w dla MySQL';
$strMysqlClientVersion = 'Wersja klienta MySQL';
$strMySQLConnectionCollation = 'System por�wna� dla po��czenia MySQL';
$strMySQLSaid = 'MySQL zwr�ci� komunikat: ';
$strMySQLShowProcess = 'Poka� procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Nast�pne';
$strNoActivity = 'Brak aktywno�ci przez co najmniej %s sekund, prosz� zalogowa� si� jeszcze raz';
$strNoDatabases = 'Brak baz danych';
$strNoDatabasesSelected = '�adna baza danych nie zosta� wybrana.';
$strNoDataReceived = 'Nie otrzymano �adnych danych do importu. Albo nie zosta�a wys�ana nazwa pliku, albo plik by� zbyt du�y (maksymalny dopuszczalny rozmiar pliku okre�la si� w konfiguracji PHP). Zobacz FAQ 1.16.';
$strNoDescription = 'brak opisu';
$strNoDetailsForEngine = 'Brak szczeg�owych informacji o tym mechanizmie sk�adowania';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomi� wyja�nienie SQL';
$strNoFilesFoundInZip = 'Archiwum ZIP jest puste!';
$strNoFrames = 'phpMyAdmin jest bardziej przyjazny w przegl�darkach <b>obs�uguj�cych ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych cz�ci indeksu!';
$strNoModification = 'Bez zmian';
$strNone = 'Brak';
$strNo = 'Nie';
$strNoOptions = 'Ten format nie ma �adnych opcji';
$strNoPassword = 'Brak has�a';
$strNoPermission = 'Serwer WWW nie ma praw do zapisu pliku %s.';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnie�';
$strNoRights = 'Brak wystarczaj�cych uprawnie�!';
$strNoRowsSelected = '�aden rekord nie zosta� zaznaczony';
$strNoSpace = 'Brak miejsca na zapis pliku %s.';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoThemeSupport = 'Brak obs�ugi motyw�w graficznych, prosz� sprawdzi� konfiguracj� i/lub motywy graficzne w katalogu %s.';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'b��d';
$strNotSet = 'Tabela <b>%s</b> nie zosta�a znaleziona lub nie jest ustawiona w %s';
$strNoUsersFound = 'Nie znaleziono u�ytkownika(�w).';
$strNoValidateSQL = 'Pomi� sprawdzanie poprawno�ci SQL';
$strNull = 'Null';
$strNumberOfFields = 'Liczba p�l';
$strNumSearchResultsInTable = '%s trafie� wewn�trz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafie�';
$strNumTables = 'Tabele';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'arkusz kalkulacyjny w formacie Open Document';
$strOpenDocumentText = 'Tekst w formacie Open Document';
$strOpenNewWindow = 'Otw�rz nowe okno phpMyAdmina';
$strOperations = 'Operacje';
$strOperator = 'Operator';
$strOptimizeTable = 'Optymalizuj tabel�';
$strOr = 'lub';
$strOverhead = 'Nadmiar';
$strOverwriteExisting = 'Nadpisuj istniej�ce pliki';

$strPageNumber = 'Numer strony:';
$strPagesToBeFlushed = 'Strony do wymiecenia';
$strPaperSize = 'Rozmiar papieru';
$strPartialImport = 'Import cz�ciowy';
$strPartialText = 'Skr�cony tekst';
$strPasswordChanged = 'Has�o dla %s zosta�o pomy�lnie zmienione.';
$strPasswordEmpty = 'Puste has�o!';
$strPassword = 'Has�o';
$strPasswordHashing = 'Spos�b kodowania hase�';
$strPasswordNotSame = 'Has�a nie s� identyczne!';
$strPdfDbSchema = 'Schemat bazy danych "%s" - strona %s';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generuje raport zawieraj�cy danej pojedynczej tabeli.)';
$strPDFReportTitle = 'Tytu� raportu';
$strPerHour = 'na godzin�';
$strPerMinute = 'na minut�';
$strPerSecond = 'na sekund�';
$strPersian = 'Perski';
$strPhoneBook = 'ksi��ka telefoniczna';
$strPHP40203 = 'U�ywasz PHP w wersji 4.2.3, kt�ra ma powa�ny b��d w obs�udze napis�w wielobajtowych (mbstring). Zobacz raport na temat b��d�w PHP nr 19404. Nie zaleca si� u�ywania tej wersji PHP z phpMyAdminem.';
$strPhp = 'Utw�rz kod PHP';
$strPHPVersion = 'Wersja PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi by� ustawiona w pliku konfiguracyjnym!';
$strPolish = 'Polski';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Pocz�tek';
$strPrevious = 'Poprzednie';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy zosta� usuni�ty';
$strPrimaryKeyName = 'Nazw� podstawowego klucza musi by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> by� nazw� <b>jedynie</b> klucza podstawowego!)';
$strPrimary = 'Podstawowy';
$strPrint = 'Drukuj';
$strPrintViewFull = 'Widok do druku (z pe�nymi tekstami)';
$strPrintView = 'Widok do druku';
$strPrivDescAllPrivileges = 'Wszystkie uprawnienia, opr�cz GRANT.';
$strPrivDescAlter = 'Pozw�l zmienia� struktur� istniej�cych tabel.';
$strPrivDescAlterRoutine = 'Pozw�l modyfikowa� i usuwa� procedury sk�adowane.';
$strPrivDescCreateDb = 'Pozw�l tworzy� nowe bazy danych i tabele.';
$strPrivDescCreateRoutine = 'Pozw�l tworzy� procedury sk�adowane.';
$strPrivDescCreateTbl = 'Pozw�l tworzy� nowe tabele.';
$strPrivDescCreateTmpTable = 'Pozwala tworzy� tabele tymczasowe.';
$strPrivDescCreateUser = 'Pozw�l tworzy�, usuwa� i zmienia� nazwy kont u�ytkownik�w.';
$strPrivDescCreateView = 'Pozw�l tworzy� perspektywy.';
$strPrivDescDelete = 'Pozw�l usuwa� dane.';
$strPrivDescDropDb = 'Pozw�l usuwa� bazy danych i tabele.';
$strPrivDescDropTbl = 'Pozw�l usuwa� tabele.';
$strPrivDescExecute5 = 'Pozw�l wykonywa� procedury sk�adowane.';
$strPrivDescExecute = 'Pozw�l uruchamia� zapami�tane procedury; Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescFile = 'Pozw�l importowa� i eksportowa� dane z/do plik�w.';
$strPrivDescGrant = 'Pozw�l dodawa� u�ytkownik�w i nadawa� uprawnienia bez prze�adowywania tabeli uprawnie�.';
$strPrivDescIndex = 'Pozw�l tworzy� i usuwa� indeksy.';
$strPrivDescInsert = 'Pozw�l dodawa� i zamienia� dane.';
$strPrivDescLockTables = 'Pozw�l blokowa� tabele dla aktualnego w�tku.';
$strPrivDescMaxConnections = 'Ogranicz liczb� nowych po��cze�, kt�re mo�e otworzy� u�ytkownik w ci�gu godziny.';
$strPrivDescMaxQuestions = 'Ogranicz liczb� zapyta�, kt�re mo�e wys�a� u�ytkownik w ci�gu godziny.';
$strPrivDescMaxUpdates = 'Ogranicz liczb� polece� zmieniaj�cych jak�kolwiek tabel� lub baz� danych, kt�re mo�e wykona� u�ytkownik w ci�gu godziny.';
$strPrivDescMaxUserConnections = 'Ogranicz liczb� jednoczesnych po��cze�, kt�re mo�e u�ytkownik.';
$strPrivDescProcess3 = 'Pozw�l unicestwia� procesy innych u�ytkownik�w.';
$strPrivDescProcess4 = 'Pozw�l zobaczy� pe�n� list� zapyta� na li�cie proces�w.';
$strPrivDescReferences = 'Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescReload = 'Pozw�l prze�adowywa� ustawienia serwera i opr�nia� pami�� podr�czn� serwera.';
$strPrivDescReplClient = 'Nadaj u�ytkownikowi prawo, by zapyta� gdzie s� serwery podrz�dne / nadrz�dne.';
$strPrivDescReplSlave = 'Potrzebne dla replikacji serwera podrz�dnego.';
$strPrivDescSelect = 'Pozw�l czyta� dane.';
$strPrivDescShowDb = 'Daj dost�p do pe�nej listy baz danych.';
$strPrivDescShowView = 'Pozw�l wykonywa� zapytania SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Pozw�l zamkn�� serwer.';
$strPrivDescSuper = 'Pozw�l na po��czenie, nawet je�li osi�gni�ta zosta�a maksymalna ilo�� po��cze�; Wymagane dla wi�kszo�� operacji administracyjnych, takich jak ustawianie zmiennych globalnych czy unicestwianie w�tk�w innych u�ytkownik�w.';
$strPrivDescUpdate = 'Pozw�l zmienia� dane.';
$strPrivDescUsage = 'Brak uprawnie�.';
$strPrivilegesReloaded = 'Uprawnienia zosta�y pomy�lnie prze�adowane.';
$strPrivileges = 'Uprawnienia';
$strProcedures = 'Procedury';
$strProcesses = 'Procesy';
$strProcesslist = 'Lista proces�w';
$strProtocolVersion = 'Wersja protoko�u';
$strPutColNames = 'Umie�� nazwy p�l w pierwszym rekordzie';

$strQBEDel = 'Usu�';
$strQBEIns = 'Dodaj';
$strQBE = 'Zapytanie przez przyk�ad';
$strQueryCache = 'Pami�� podr�czna zapyta�';
$strQueryFrame = 'Okienko zapytania';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQueryResultsOperations = 'Operacja na wynikach zapytania';
$strQuerySQLHistory = 'Historia SQL';
$strQueryStatistics = '<b>Statystyki zapyta�</b>: Od rozpocz�cia jego pracy, do serwera zosta�o wys�anych %s zapyta�.';
$strQueryTime = 'Wykonanie zapytania trwa�o %01.4f sekund(y)';
$strQueryType = 'Rodzaj zapytania';
$strQueryWindowLock = 'Nie nadpisuj tego zapytania spoza okna';

$strReadRequests = '��da� odczytu';
$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawd� sp�jno�� powi�za�:';
$strRefresh = 'Od�wie�';
$strRelationalSchema = 'Schemat relacyjny';
$strRelationNotWorking = 'Dodatkowe mo�liwo�ci pracy z po��czonymi tabelami zosta�y wy��czone. Aby dowiedzie� si�, dlaczego - kliknij %stutaj%s.';
$strRelationsForTable = 'RELACJE TABELI';
$strRelations = 'Relacje';
$strRelationView = 'Widok relacyjny';
$strReloadingThePrivileges = 'Prze�aduj uprawnienia';
$strReloadPrivileges = 'Prze�aduj uprawnienia';
$strRemoveSelectedUsers = 'Usu� zaznaczonych u�ytkownik�w';
$strRenameDatabaseOK = 'Baza danych %s ma nazw� zmienion� na %s';
$strRenameTableOK = 'Tabela %s ma nazw� zmienion� na %s';
$strRenameTable = 'Zmie� nazw� tabeli na';
$strRepairTable = 'Napraw tabel�';
$strReplaceNULLBy = 'Zamiana NULL na';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReplication = 'Replikacja';
$strReset = 'Reset';
$strResourceLimits = 'Ograniczenia zasob�w';
$strReType = 'Ponownie';
$strRevokeAndDelete = 'Cofnij wszystkie aktywne uprawnienia u�ytkownikom, a nast�pnie usu� ich.';
$strRevokeAndDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, u�ytkownicy nadal b�d� mieli uprawnienie USAGE.';
$strRevoke = 'Cofnij';
$strRevokeMessage = 'Uprawnienia dla %s zosta�y cofni�te';
$strRomanian = 'Rumu�ski';
$strRowLength = 'D�ugo�� rekordu';
$strRowsFrom = 'rekord�w pocz�wszy od';
$strRowSize = ' Rozmiar rekordu ';
$strRowsModeFlippedHorizontal = 'poziomo (obr�cone nag��wki)';
$strRowsModeHorizontal = 'poziomo';
$strRowsModeOptions = 'w trybie %s powt�rz nag��wki po %s kom�rkach';
$strRowsModeVertical = 'pionowo';
$strRows = 'Rekord�w';
$strRowsStatistic = 'Statystyka rekord�w';
$strRunning = 'uruchomiony na %s';
$strRunQuery = 'Wykonaj zapytania';
$strRunSQLQueryOnServer = 'Uruchom zapytanie/zapytania SQL na serwerze %s';
$strRunSQLQuery = 'Wykonanie zapytania/zapyta� SQL do bazy danych %s';
$strRussian = 'Rosyjski';

$strSaveOnServer = 'Zapisz na serwerze w katalogu %s';
$strSave = 'Zachowaj';
$strScaleFactorSmall = 'Wsp�czynnik skali jest za ma�y, by schemat zmie�ci� si� na jednej stronie';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewn�trz tabel(i):';
$strSearchNeedle = 'Szukane s�owa lub warto�ci (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze s��w';
$strSearchOption2 = 'wszystkie s�owa';
$strSearchOption3 = 'ca�a fraza';
$strSearchOption4 = 'wyra�enie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearch = 'Szukaj';
$strSearchType = 'Znajd�:';
$strSecretRequired = 'Plik konfiguracyjny wymaga teraz tajnej frazy koduj�cej (blowfish_secret).';
$strSelectADb = 'Prosz� wybra� baz� danych';
$strSelectAll = 'Zaznacz wszystkie';
$strSelectBinaryLog = 'Wybierz dziennik binarny do podgl�du';
$strSelectFields = 'Wyb�r p�l (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'Zapisz jako plik';
$strSent = 'Wys�ane';
$strServerChoice = 'Wyb�r serwera';
$strServerNotResponding = 'Serwer nie odpowiada';
$strServer = 'Serwer';
$strServers = 'Serwery';
$strServerStatusDelayedInserts = 'Op�nione dodania';
$strServerStatus = 'Informacje o dzia�aniu serwera';
$strServerStatusUptime = 'Serwer MySQL dzia�a przez %s. Pocz�tek pracy: %s.';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poni�sze tabele pokazuj� statystyki ruchu na tym serwerze MySQL od rozpocz�cia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Warto�� sesji';
$strSetEnumVal = 'Je�eli pole jest typu "ENUM" lub "SET", warto�ci wprowadza si� w formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShowAll = 'Poka� wszystko';
$strShowColor = 'Poka� kolor';
$strShowDatadictAs = 'Format s�ownika danych';
$strShowFullQueries = 'Poka� pe�ne zapytania';
$strShowGrid = 'Poka� siatk�';
$strShowingBookmark = 'Pokaz zapami�tanego zapytania';
$strShowingRecords = 'Poka� rekordy ';
$strShowOpenTables = 'Poka� otwarte tabele';
$strShowPHPInfo = 'Informacje o PHP';
$strShow = 'Poka�';
$strShowSlaveHosts = 'Poka� podrz�dne hosty';
$strShowSlaveStatus = 'Status serwera podrz�dnego';
$strShowStatusBinlog_cache_disk_useDescr = 'Liczba transakcji, kt�re u�ywa�y pami�ci podr�cznej tymczasowego dziennika binarnego, ale kt�ry przekroczy�y warto�� binlog_cache_size i do zapisania instrukcji transakcji zosta� u�yty plik tymczasowy.';
$strShowStatusBinlog_cache_useDescr = 'Liczba transakcji, kt�re u�ywa�y pami�ci podr�cznej tymczasowego dziennika binarnego.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Liczba tabel tymczasowych na dysku utworzonych automatycznie przez serwer podczas wykonywanie instrukcji. Przy du�ej warto�ci Created_tmp_disk_tables, zwi�kszenie warto�ci tmp_table_size spowoduje tworzenie tymczasowych tabel w pami�ci, a nie na dysku.';
$strShowStatusCreated_tmp_filesDescr = 'Ile plik�w tymczasowych utworzy� mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Liczba tabel tymczasowych w pami�ci, utworzonych automatycznie przez serwer podczas wykonywania instrukcji.';
$strShowStatusDelayed_errorsDescr = 'Liczba rekord�w zapisanych przy pomocy INSERT DELAYED, dla kt�rych wyst�pi� jaki� b��d (prawdopodobnie zdublowany klucz).';
$strShowStatusDelayed_insert_threadsDescr = 'Liczba u�ytych w�tk�w obs�uguj�cych INSERT DELAYED. Ka�da osobna tabela, na kt�rej wykonuje si� INSERT DELAYED dostaje w�asny w�tek.';
$strShowStatusDelayed_writesDescr = 'Liczba rekord�w zapisanych poprzez INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Liczba wykonanych instrukcji FLUSH.';
$strShowStatusHandler_commitDescr = 'Liczba wewn�trznych intrukcji COMMIT.';
$strShowStatusHandler_deleteDescr = 'Ile razy rekord zosta� usuni�ty z tabeli.';
$strShowStatusHandler_discoverDescr = 'Serwer MySQL mo�e zapyta� mechanizm sk�adowania Cluster NDB, czy ma informacje o tabeli o zadanej nazwie. Nazywamy to odkryciem (<i>discovery</i>). Handler_discover wskazuje, ile razy tabela zosta�a odkryta.';
$strShowStatusHandler_read_firstDescr = 'Ile razy z indeksu zosta�a odczytana pierwsza pozycja. Du�a warto�� sugeruje, �e serwer wykonuje pe�nych przeszuka� indeks�w; na przyk�ad SELECT col1 FROM foo, przy za�o�eniu, �e col1 jest zindeksowane.';
$strShowStatusHandler_read_keyDescr = 'Liczba ��da� odczytu rekordu na podstawie indeksu. Du�a warto�� to dobra oznaka tego, �e zapytania i tabele s� w�a�ciwie zindeksowane.';
$strShowStatusHandler_read_nextDescr = 'Liczba ��da� odczytu nast�pnego rekordu w porz�dku indeksowym. Ta warto�� jest zwi�kszana przy odpytywaniu o zindeksowan� kolumn� na ograniczonym przedziale lub przy przeszukiwaniu indeksu.';
$strShowStatusHandler_read_prevDescr = 'Liczba ��da� odczytu poprzedniego rekordu w porz�dku indeksowym. Metoda u�ywana g��wnie do optymalizacji ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Liczba ��da� odczytu nast�pnego rekordu na podstawie sta�ego po�o�enia. Warto�� jest du�a przy wykonywaniu du�ej ilo�ci zapyta� wymagaj�cych sortowania rezultatu. Prawdopodobnie wykonano wiele zapyta� wymagaj�cych przeszukania ca�ej tabeli lub z��cze�, kt�re nie u�ywaj� poprawnie indeks�w.';
$strShowStatusHandler_read_rnd_nextDescr = 'Liczba ��da� odczytu nast�pnego rekord w pliku z danymi. Warto�� jest du�a przy wykonywania wielu przeszukiwa� tabeli. Og�lnie sugeruje to, �e tabele nie s� poprawnie zindeksowane lub �e zapytania nie s� napisane w spos�b pozwalaj�cy skorzysta� z istniej�cych indeks�w.';
$strShowStatusHandler_rollbackDescr = 'Liczba wewn�trznych instrukcji ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Liczba ��da� zmiany rekordu w tabeli.';
$strShowStatusHandler_writeDescr = 'Liczba ��da� dodania rekordu do tabeli.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Liczba stron zawieraj�cych dane (brudnych lub czystych).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Liczba aktualnie brudnych stron.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Liczba stron w puli bufora, kt�rych wymiecienia za��dano.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Liczba wolnych stron.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Liczba stron zatrza�ni�tych w puli bufora InnoDB. S� to strony aktualnie odczytywane lub zapisywane lub takie, kt�re nie mog� zosta� wymiecione lub usuni�te z jakiego� innego powodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Liczba strony stron zaj�tych z powodu ich alokacji dla cel�w administracyjnych takich jak blokady rekordu lub adaptacyjny indeks haszuj�cy. Warto�� ta mo�e te� zosta� policzona jako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = '��czny rozmiar puli bufora, w stronach.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Liczba "losowych" odczyt�w z wyprzedzeniem zainicjowanych przez InnoDB. Wyst�puje gdy zapytane przeszukiwa�oby du�e fragmenty tabeli, ale w dowolnej kolejno�ci.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Liczba sekwencyjnych odczyt�w z wyprzedzeniem zainicjowanych przez InnoDB. Wyst�puje gdy InnoDB wykonuje sekwencyjne pe�ne przeszukiwanie tabeli.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Liczba ��da� logicznych odczyt�w kt�re wykona� InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Liczba logicznych odczyt�w, kt�rych InnoDB nie m�g� zaspokoi� pul� bufora i musia� wykona� odczyt pojedynczej strony.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Zwykle zapis do puli bufora InnoDB obywa si� w tle. Jednak�e, je�li niezb�dny jest odczyt lub utworzenie strony a brak jest czystych stron, konieczne jest najpierw oczekiwanie na wymiecienie stron. Ten licznik wskazuje liczb� wyst�pie� takich oczekiwa�. Je�eli rozmiar puli bufora by� ustawiony w�a�ciwie, warto�� ta powinna by� ma�a.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Liczba wykonanych zapis�w do puli bufora InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Liczba dot�d wykonanych operacji fsync().';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Aktualna liczba operacji fsync() w toku.';
$strShowStatusInnodb_data_pending_readsDescr = 'Aktualna liczba odczyt�w w toku.';
$strShowStatusInnodb_data_pending_writesDescr = 'Aktualna liczba zapis�w w toku.';
$strShowStatusInnodb_data_readDescr = 'Ilo�� dot�d odczytanych danych, w bajtach.';
$strShowStatusInnodb_data_readsDescr = '��czna liczba odczyt�w danych.';
$strShowStatusInnodb_data_writesDescr = '��czna liczba zapis�w danych.';
$strShowStatusInnodb_data_writtenDescr = 'Ilo�� dot�d zapisanych danych, w bajtach.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Liczba przeprowadzonych zapis�w typu <i>doublewrite</i>.';
$strShowStatusInnodb_dblwr_writesDescr = 'Liczba stron zapisanych przy zapisie typu <i>doublewrite</i>.';
$strShowStatusInnodb_log_waitsDescr = 'Ile razy czekano, bo bufor dziennika by� zbyt ma�y i przed wznowieniem pracy oczekiwano na jego opr�nienie.';
$strShowStatusInnodb_log_write_requestsDescr = 'Liczba ��da� zapis�w do dziennika.';
$strShowStatusInnodb_log_writesDescr = 'Liczba fizycznych zapis�w do pliku dziennika.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Liczba synchronicznych zapis�w do pliku dziennika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Liczba wywo�a� fsync dla pliku dziennika w toku.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Liczba zapis�w do pliku dziennika w toku.';
$strShowStatusInnodb_os_log_writtenDescr = 'Liczba bajt�w zapisanych do pliku dziennika.';
$strShowStatusInnodb_pages_createdDescr = 'Liczba utworzonych stron.';
$strShowStatusInnodb_page_sizeDescr = 'Wkompilowana wielko�� strony InnoDB (domy�lnie 16KB). Wiele warto�ci jest mierzonych w stronach; znajomo�� wielko�ci strony pozwala na ich �atw� konwersj� na bajty.';
$strShowStatusInnodb_pages_readDescr = 'Liczba odczytanych stron.';
$strShowStatusInnodb_pages_writtenDescr = 'Liczba zapisanych stron.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Liczba blokad rekord�w na kt�re aktualnie si� czeka.';
$strShowStatusInnodb_row_lock_time_avgDescr = '�redni czas uzyskania blokady rekordu, w milisekundach.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ca�kowity czas zu�yty na uzyskiwanie blokad rekord�w, w milisekundach.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksymalny czas uzyskania blokady rekordu, w milisekundach.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Ile razy czekano na blokad� rekordu.';
$strShowStatusInnodb_rows_deletedDescr = 'Liczba rekord�w usuni�tych z tabel InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Liczba rekord�w dodanych do tabel InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Liczba rekord�w odczytanych z tabel InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Liczba rekord�w zmienionych w tabelach InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Liczba blok�w w buforze podr�cznym indeks�w, kt�re zosta�y zmodyfikowane ale jeszcze nie wymiecione na dysk. Wcze�niej zmienna mia�a nazw� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Liczba nieu�ywanych blok�w w buforze podr�cznym indeks�w. Mo�na u�y� tej warto�ci do okre�lenia jaka cz�� bufora indeks�w jest w u�yciu.';
$strShowStatusKey_blocks_usedDescr = 'Liczba u�ytych blok�w w buforze podr�cznym indeks�w. Ta warto�� to pr�g, kt�ry wskazuje maksymaln� liczb� kiedykolwiek jednocze�nie u�ytych blok�w.';
$strShowStatusKey_read_requestsDescr = 'Liczba ��da� odczytu bloku z bufora podr�cznego indeks�w.';
$strShowStatusKey_readsDescr = 'Liczba fizycznych odczyt�w blok�w indeks�w z dysku. Du�a warto�� key_reads oznacza, �e prawdopodobnie warto�� key_buffer_size jest zbyt ma�a. Wsp�czynnik chybie� bufora podr�cznego mo�na policzy� ze wzoru Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Liczba ��da� zapis�w blok�w indeks�w to bufora podr�cznego.';
$strShowStatusKey_writesDescr = 'Liczba fizycznych zapis�w blok�w indeks�w na dysk.';
$strShowStatusLast_query_costDescr = 'Ca�kowity koszta ostatnio skompilowanego zapytania, wyliczony przez optymalizator zapyta�. Przydatny do por�wna� koszt�w r�nych plan�w wykonania tego samego zapytania. Domy�lna warto�� 0 oznacza, �e jeszcze �adne zapytanie nie zosta�o skompilowane.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Liczba rekord�w oczekuj�cych na zapisanie w kolejkach INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Liczba kiedykolwiek otwartych tabel. Je�li ta warto�� jest du�a, prawdopodobnie wielko�� pami�ci podr�cznej tabel jest zbyt ma�a.';
$strShowStatusOpen_filesDescr = 'Liczba otwartych plik�w.';
$strShowStatusOpen_streamsDescr = 'Liczba otwartych strumieni (u�ywanych g�ownie do rejestracji w dzienniku).';
$strShowStatusOpen_tablesDescr = 'Liczba otwartych tabel.';
$strShowStatusQcache_free_blocksDescr = 'Liczba wolnych blok�w pami�ci w podr�cznym buforze zapyta�.';
$strShowStatusQcache_free_memoryDescr = 'Ilo�� dost�pnej pami�ci w podr�cznym buforze zapyta�.';
$strShowStatusQcache_hitsDescr = 'Liczba trafie� pami�ci podr�cznej.';
$strShowStatusQcache_insertsDescr = 'Liczba zapyta� dodanych do pami�ci podr�cznej.';
$strShowStatusQcache_lowmem_prunesDescr = 'Liczba zapyta�, kt�re zosta�y usuni�te z pami�ci podr�cznej, by zwolnic pami�� do buforowania nowych zapyta�. Ta informacje mo�e pom�c dostroi� wielko�� bufora podr�cznego. Do decydowania o tym, kt�re zapytania usun�� z bufora podr�cznego u�ywana jest strategia "najpierw najd�u�ej nieu�ywany" (<i>least recently used</i> - LRU).';
$strShowStatusQcache_not_cachedDescr = 'Liczba niezbuforowanych zapyta� (nie daj�cych si� zbuforowa� lub niezbuforowanych z powodu ustawienia query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Liczba zapyta� zarejestrowanych w buforze podr�cznym.';
$strShowStatusQcache_total_blocksDescr = 'Ca�kowita liczba blok�w w buforze podr�cznym zapyta�.';
$strShowStatusReset = 'Zresetuj';
$strShowStatusRpl_statusDescr = 'Stan replikacji zabezpieczaj�cej (jeszcze nie zaimplementowane).';
$strShowStatusSelect_full_joinDescr = 'Liczba z��cze� nie u�ywaj�cych indeks�w. Warto�� r�na od 0 sugeruje staranne przyjrzenie si� indeksom tabel.';
$strShowStatusSelect_full_range_joinDescr = 'Liczba z��cze� w kt�rych u�yto wyszukiwania zakresowego na pierwszej z��czanej tabeli.';
$strShowStatusSelect_range_checkDescr = 'Liczba z��cze� bez u�ycia indeks�w gdy mo�liwo�� ich u�ycia by�a sprawdzana dla ka�dego rekordu. (Warto�� r�na od 0 sugeruje staranne przyjrzenie si� indeksom tabel.)';
$strShowStatusSelect_rangeDescr = 'Liczba z��cze� w kt�rych u�yto zakres�w w stosunku do pierwszej tabeli. (Nawet du�a warto�� nie ma kluczowego znaczenia.)';
$strShowStatusSelect_scanDescr = 'Liczba z��cze�, kt�re przeszuka�y w pe�ni pierwsz� tabel�.';
$strShowStatusSlave_open_temp_tablesDescr = 'Liczba tymczasowych tabel aktualnie otwartych przez podrz�dny w�tek SQL.';
$strShowStatusSlave_retried_transactionsDescr = 'Ile raz ��cznie (od startu) podrz�dny w�tek SQL replikacji ponawia� transakcje.';
$strShowStatusSlave_runningDescr = 'ON oznacza, �e ten serwer jest podrz�dny i jest pod��czony go serwera g��wnego.';
$strShowStatusSlow_launch_threadsDescr = 'Liczba w�tk�w, kt�rych utworzenie trwa�o d�u�ej ni� slow_launch_time sekund.';
$strShowStatusSlow_queriesDescr = 'Liczba zapyta�, kt�rych wykonanie zaj�o wi�cej ni� long_query_time sekund.';
$strShowStatusSort_merge_passesDescr = 'Liczba przebieg�w scalania, kt�re musia� wykona� algorytm sortuj�cy. Przy du�ej warto�ci, warto wzi�� pod uwag� zwi�kszenie warto�ci zmiennej systemowej sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Liczba sortowa� wykonanych przy u�yciu zakres�w.';
$strShowStatusSort_rowsDescr = 'Liczba posortowanych rekord�w.';
$strShowStatusSort_scanDescr = 'Liczba sortowa� wykonanych poprzez przeszukiwanie tabeli.';
$strShowStatusTable_locks_immediateDescr = 'Ile razy blokada tabeli zosta�a uzyskana natychmiastowo.';
$strShowStatusTable_locks_waitedDescr = 'Ile razy blokada tabeli nie mog�a zosta� uzyskana natychmiastowo i niezb�dne by�o oczekiwanie. Przy wysoka warto�� oraz problemach z wydajno�ci� powinno si� najpierw zoptymalizowa� zapytania, a nast�pnie podzieli� tabel� (tabele) lub u�y� replikacji.';
$strShowStatusThreads_cachedDescr = 'Liczba w�tk�w w buforze podr�cznym w�tk�w. Wsp�czynnik trafienia w bufor mo�e by� wyliczony ze wzoru Threads_created/Connections. Kolor czerwony oznacza, �e powinno si� zwi�kszy� thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Liczba aktualnie otwartych po��cze�.';
$strShowStatusThreads_createdDescr = 'Liczba w�tk�w utworzonych by obs�u�y� po��czenia. Je�eli warto�� Threads_created jest du�a, mo�na chcie� zwi�kszy� warto�� thread_cache_size. (W przypadku dobrej implementacja w�tk�w zwykle nie daje to zauwa�alnego polepszenia wydajno�ci.)';
$strShowStatusThreads_runningDescr = 'Liczba nieu�pionych w�tk�w.';
$strShowTableDimension = 'Poka� wymiary tabel';
$strShowTables = 'Poka� tabele';
$strShowThisQuery = ' Wywo�aj ponownie zapytanie ';
$strSimplifiedChinese = 'Chi�ski uproszczony';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSkipQueries = 'Liczba rekord�w (zapyta�), kt�re nale�y z pocz�tku pomin��';
$strSlovak = 'S�owacki';
$strSlovenian = 'S�owe�ski';
$strSocketProblem = '(lub gniazdo lokalnego serwera MySQL nie jest skonfigurowane poprawnie)';
$strSortByKey = 'Sortuj wg klucza';
$strSorting = 'Sortowanie';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSpanish = 'Hiszpa�ski';
$strSplitWordsWithSpace = 'S�owa s� rozdzielane znakiem spacji (" ").';
$strSQLCompatibility = 'Tryb zgodno�ci SQL';
$strSQLExportType = 'Rodzaj eksportu';
$strSQLParserBugMessage = 'Istnieje szansa, �e w�a�nie znaleziono b��d w analizatorze sk�adni SQL. Prosz� zbada� bli�ej swoje zapytanie i sprawdzi�, czy cudzys�owy s� poprawne i dobrze sparowane. Inn� mo�liw� przyczyn� niepowodzenia mo�e by� wysy�anie pliku ze znakami binarnymi poza obszarem tekstu uj�tego w cudzys�owy. Mo�na r�wnie� sprawdzi� zapytanie SQL poprzez lini� polece� MySQL-a. W znalezieniu przyczyny problemu mo�e pom�c tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL. Je�li nadal wyst�puj� z problemy lub analizator sk�adni zg�asza usterk� a linia polece� - nie, ogranicz sekwencj� zapyta� SQL do pojedynczego, kt�re powoduje problemy i zg�o� b��d, do��czaj�c fragment danych zawarty w poni�szej sekcji TNIJ:';
$strSQLParserUserError = 'Wygl�da na to, �e w twoim zapytaniu SQL jest b��d. W znalezieniu przyczyny problemu mo�e pom�c tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Nieprawid�owy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamkni�ty cudzys��w';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strStatCheckTime = 'Ostatnie sprawdzenie';
$strStatCreateTime = 'Utworzenie';
$strStatement = 'Cecha';
$strStatisticsOverrun = 'Na aktywnym serwerze liczniki bajt�w mog� si� przekr�ci�, wi�c statystyki jakich dostarcza serwer MySQL nie s� wiarygodne.';
$strStatUpdateTime = 'Ostatnia aktualizacja';
$strStatus = 'Status';
$strStorageEngine = 'Mechanizm sk�adowania';
$strStorageEngines = 'Mechanizmy sk�adowania';
$strStrucCSV = 'Dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucNativeExcel = 'Dane w formacie macierzystym MS Excela';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Analiza zawarto�ci';
$strStructure = 'Struktura';
$strSubmit = 'Wy�lij';
$strSuccess = 'Zapytanie SQL zosta�o wykonane pomy�lnie';
$strSum = 'Suma';
$strSwedish = 'Szwedzki';
$strSwitchToDatabase = 'Prze��cz do skopiowanej bazy danych';
$strSwitchToTable = 'Prze��cz na skopiowan� tabel�';

$strTableAlreadyExists = 'Tabela %s ju� istnieje!';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s zosta�a usuni�ta';
$strTableHasBeenEmptied = 'Tabela %s zosta�a opr�niona';
$strTableHasBeenFlushed = 'Tabela %s zosta�a prze�adowana';
$strTableMaintenance = 'Zarz�dzanie tabel�';
$strTableOfContents = 'Spis tre�ci';
$strTableOptions = 'Opcje tabeli';
$strTables = '%s tabel(a)';
$strTableStructure = 'Struktura tabeli dla ';
$strTable = 'Tabela';
$strTakeIt = 'u�yj';
$strTblPrivileges = 'Uprawnienia specyficzne dla tabel';
$strTempData = 'Dane tymczasowe';
$strTextAreaLength = ' To pole mo�e nie da� si� edytowa�<br /> z powodu swojej d�ugo�ci ';
$strThai = 'Tajski';
$strThemeDefaultNotFound = 'Nie znaleziono domy�lnego motywu graficznego %s!';
$strTheme = 'Motyw graficzny / styl';
$strThemeNoPreviewAvailable = 'Podgl�d niedost�pny.';
$strThemeNotFound = 'Nie znaleziono motywu graficznego %s!';
$strThemeNoValidImgPath = 'Nie znaleziono prawid�owej �cie�ki do obrazka dla motywu graficznego %s!';
$strThemePathNotFound = 'Nie znaleziono �cie�ki do motywu %s!';
$strThisHost = 'Ten host';
$strThreadSuccessfullyKilled = 'W�tek %s zosta� pomy�lnie unicestwiony.';
$strThreads = 'W�tki';
$strTime = 'Czas';
$strTimeoutInfo = 'Poprzedni import przekroczy� limit czasu, ponowne przed�o�enie tego pliku  spowoduje kontynuacje od miejsca %d.';
$strTimeoutNothingParsed = 'Jednak�e, podczas ostatniego uruchomienia nie zosta�y przetworzone �adne dane, co zwykle oznacza, �e phpMyAdmin nie b�dzie w stanie uko�czy� tego importu bez zwi�kszenia limit�w czasowych PHP.';
$strTimeoutPassed = 'Limit czasu wykonania skryptu min��; aby uko�czy� import, prosz� przed�o�y� ten sam plik a import zostanie wznowiony.';
$strToggleScratchboard = 'w��cz / wy��cz scratchboard';
$strTotalUC = 'Sumarycznie';
$strTotal = 'wszystkich';
$strTraditionalChinese = 'Chi�ski tradycyjny';
$strTraditionalSpanish = 'Tradycyjny hiszpa�ski';
$strTraffic = 'Ruch';
$strTransactionCoordinator = 'Koordynator transakcji';
$strTransformation_application_octetstream__download = 'Wy�wietla link do �ci�gni�cia binarnych danych z tego pola. Pierwsza opcja to nazwa pliku binarnego. Drug� opcj� jest mo�liwa nazwa pola zawieraj�cego nazw� pliku. Je�eli dana jest druga opcja, pierwsza musi by� pustym napisem';
$strTransformation_application_octetstream__hex = 'Wy�wietla szesnastkow� reprezentacj� danych. Opcjonalny pierwszy parametr okre�la jak cz�sto dodawane b�d� spacje (domy�lnie: co 2 p�bajty).';
$strTransformation_image_jpeg__inline = 'Wy�wietla klikaln� miniaturk�; opcje: szeroko��,wysoko�� w pikselach (oryginalne proporcje zostan� zachowane)';
$strTransformation_image_jpeg__link = 'Wy�wietla link do tego obrazu (bezpo�rednie �ci�gni�cie bloba).';
$strTransformation_image_png__inline = 'Zobacz image/jpeg: inline';
$strTransformation_text_plain__external = 'TYLKO LINUX: Uruchamia zewn�trzn� aplikacj� i przekazuje dane p�l na standardowe wej�cie. Zwraca standardowe wyj�cie tej aplikacji. Domy�lnie jest to Tidy, kt�rzy porz�dkuje kod HTML. Ze wzgl�du na bezpiecze�stwo, nale�y r�cznie zmodyfikowa� plik libraries/transformations/text_plain__external.inc.php i doda� narz�dzie, na kt�rego uruchamianie pozwalasz. Pierwsz� opcj� jest liczba program�w, kt�rych chcesz u�y�, a drug� s� parametry programu. Je�eli trzeci parametr jest ustawiony na 1, zostanie dokonana konwersja wyj�cia poprzez u�ycie htmlspecialchars() (Domy�ln� warto�ci� jest 1). Je�eli czwarty parametr zosta� ustawiony na 1, zawarto�� kom�rki nie b�dzie zawijana, tak �e ca�e wyj�cie zostanie pokazane bez zmian formatu (domy�ln� warto�ci� jest 1)';
$strTransformation_text_plain__formatted = 'Zachowuje oryginalne formatowanie pola. Neutralizowanie znak�w niespecjalnych nie jest dokonywane.';
$strTransformation_text_plain__imagelink = 'Wy�wietla obrazek i link, pole zawiera nazw� pliku; pierwsz� opcj� jest prefiks, taki jak "http://domena.com/", drug� opcj� jest szeroko�� w pikselach, trzeci� opcj� jest wysoko��.';
$strTransformation_text_plain__link = 'Wy�wietla link, pole zawiera nazw� pliku; pierwsza opcja to prefiks, taki jak "http://domena.com/", druga opcja to tytu� linku.';
$strTransformation_text_plain__sql = 'Formatuj tekst traktuj�c jako zapytanie SQL z pod�wietlaniem sk�adni.';
$strTransformation_text_plain__substr = 'Pokazuje jedynie cz�� napisu. Pierwsza opcja to offset, od kt�rego ma zacz�� si� wy�wietlanie tekstu (domy�lnie 0). Druga opcja to ilo�� zwracanego tekstu. Je�eli jest pusta, zwracany jest ca�y pozosta�y tekst. Trzecia opcja okre�la jakie znaki zostan� dodane do wyj�cia, je�eli zwracany jest cz�� napisu (domy�lnie: ...) .';
$strTruncateQueries = 'Ucinaj wy�wietlane zapytania';
$strTurkish = 'Turecki';
$strType = 'Typ';

$strUkrainian = 'Ukrai�ski';
$strUncheckAll = 'Odznacz wszystkie';
$strUnicode = 'Unikod';
$strUnique = 'Jednoznaczny';
$strUnknown = 'nieznany';
$strUnselectAll = 'Odznacz wszystkie';
$strUnsupportedCompressionDetected = 'Pr�bowano wczyta� plik z nieobs�ugiwanym typem kompresji (%s). Albo jego obs�uga nie zosta�a zaimplementowana albo zosta�a konfiguracyjnie wy��czona.';
$strUpdatePrivMessage = 'Uaktualni�e� uprawnienia dla %s.';
$strUpdateProfileMessage = 'Profil zosta� uaktualniony.';
$strUpdateQuery = 'Zmie� zapytanie';
$strUpdComTab = 'Informacje o tym, jak zaktualizowa� tabel� Column_comments znajduj� si� w dokumentacji';
$strUpgrade = 'Poleca si� aktualizacj� do %s w wersji %s lub p�niejszej.';
$strUploadLimit = 'Prawdopodobnie pr�bowano wrzuci� du�y plik. Aby pozna� sposoby obej�cia tego limitu, prosz� zapozna� si� z %sdokumenacj�%s.';
$strUploadsNotAllowed = 'Serwer nie pozwala na upload plik�w.';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'U�yj cudzys�ow�w z nazwami tabel i p�l';
$strUsedPhpExtensions = 'U�ywane rozszerzenia PHP';
$strUseHostTable = 'U�yj tabeli host�w';
$strUserAlreadyExists = 'U�ytkownik %s ju� istnieje!';
$strUserEmpty = 'Brak nazwy u�ytkownika!';
$strUserName = 'Nazwa u�ytkownika';
$strUserNotFound = 'Wybrany u�ytkownik nie zosta� znaleziony w tabeli uprawnie�.';
$strUserOverview = 'Opis u�ytkownika';
$strUsersDeleted = 'Wybrani u�ytkownicy zostali pomy�lnie usuni�ci.';
$strUsersHavingAccessToDb = 'U�ytkownicy maj�cy dost�p do &quot;%s&quot;';
$strUser = 'U�ytkownik';
$strUseTabKey = 'Klawisz TAB przemieszcza pomi�dzy warto�ciami, CTRL+strza�ka przenosi w dowolne miejsce';
$strUseTables = 'U�yj tabel';
$strUseTextField = 'U�yj pola tekstowego';
$strUseThisValue = 'U�yj tej warto�ci';

$strValidateSQL = 'Sprawd� poprawno�� SQL';
$strValidatorError = 'Analizator sk�adni SQL nie m�g� zosta� zainicjowany. Sprawd�, czy zainstalowane s� niezb�dne rozszerzenia PHP, tak jak zosta�o to opisane w %sdokumentacji%s.';
$strValue = 'Warto��';
$strVar = 'Zmienna';
$strVersionInformation = 'Informacja o wersji';
$strViewDumpDatabases = 'Zrzut baz danych';
$strViewDumpDB = 'Zrzut bazy danych';
$strViewDump = 'Zrzut tabeli';
$strViewHasBeenDropped = 'Perspektywa %s zosta�a usuni�ta';
$strViewMaxExactCount = 'Perspektywa ma ponad %d rekord�w. Prosz� zajrze� do %sdokumentacji%s.';
$strView = 'Perspektywa';

$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosi�galny';
$strWebServerUploadDirectory = 'katalog serwera WWW dla uploadu';
$strWelcome = 'Witamy w %s';
$strWestEuropean = 'Zachodnioeuropejski';
$strWildcard = 'znak wieloznaczny';
$strWindowNotFound = 'Docelowe okno przegl�darki nie mog�o by� zaktualizowane. By� mo�e okno-rodzic zosta�o zamkni�te lub przegl�darka, uwzgl�dniaj�c ustawienia bezpiecze�stwa, blokuje aktualizacje pomi�dzy oknami';
$strWithChecked = 'Zaznaczone:';
$strWriteRequests = '��da� zapisu';
$strWrongUser = 'B��dne pola u�ytkownik/has�o. Brak dost�pu.';

$strXML = 'XML';

$strYes = 'Tak';

$strZeroRemovesTheLimit = 'Uwaga: Ustawienie tych opcji na 0 (zero) usuwa ograniczenie.';
$strZip = '".zip"';

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
