<?php
/* $Id: polish-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtów', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAbortedClients = 'Przerwane';
$strAccessDenied = 'Brak dostępu';
$strAccessDeniedCreateConfig = 'Prawdopodobnie powodem jest brak utworzonego pliku konfiguracyjnego. Do jego stworzenia można użyć %1$sskryptu instalacyjnego%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin próbował połączyć się z serwerem MySQL, a serwer odrzucił połączenie. Powinieneś sprawdzić nazwę hosta, nazwę użytkownika i hasło w pliku config.inc.php i upewnić się, że odpowiadają one informacjom danym przez administratora serwera MySQL.';
$strAction = 'Działanie';
$strAddAutoIncrement = 'Dodaj wartości AUTO_INCREMENT';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj ograniczenia';
$strAddDeleteColumn = 'Dodaj/usuń pola';
$strAddDeleteRow = 'Dodaj/usuń wiersz kryteriów';
$strAddFields = 'Dodaj %s pól';
$strAddHeaderComment = 'Dodaj do nagłówka własny komentarz (\\n oddziela linie)';
$strAddIntoComments = 'Dodaj w komentarzach:';
$strAddNewField = 'Dodaj nowego pole';
$strAddPrivilegesOnDb = 'Dodaj uprawnienia dla następującej bazy danych';
$strAddPrivilegesOnTbl = 'Dodaj uprawnienia dla następującej tabeli';
$strAddSearchConditions = 'Dodaj warunki przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodaj &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodaj nowego użytkownika';
$strAddUserMessage = 'Nowy użytkownik został dodany.';
$strAdministration = 'Administracja';
$strAffectedRows = 'Zmodyfikowanych rekordów:';
$strAfterInsertBack = 'Wróć';
$strAfterInsertNewInsert = 'Dodaj nowy rekord';
$strAfterInsertNext = 'Edytuj następny rekord';
$strAfterInsertSame = 'Powrót do tej strony';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Zezwól na przerwanie importu w przypadku, gdy skrypt wykryje zbliżający się koniec limitu czasu. Może to być dobry sposób importu dużych plików, jednakże może on popsuć transakcje.';
$strAllTableSameWidth = 'wyświetlić wszystkie tabele z taką samą szerokością?';
$strAll = 'Wszystko';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnalyzeTable = 'Analizuj tabelę';
$strAnd = 'oraz';
$strAndThen = 'a następnie';
$strAnIndex = 'Do %s dodany został indeks';
$strAny = 'Dowolny';
$strAnyHost = 'Dowolny host';
$strAnyUser = 'Dowolny użytkownik';
$strApproximateCount = 'Być może w przybliżeniu. Zobacz FAQ 3.11';
$strAPrimaryKey = 'Do %s dodany został klucz podstawowy';
$strArabic = 'Arabski';
$strArmenian = 'Ormiański';
$strAscending = 'Rosnąco';
$strAtBeginningOfTable = 'Na początku tabeli';
$strAtEndOfTable = 'Na końcu tabeli';
$strAttr = 'Atrybuty';
$strAutomaticLayout = 'Układ automatyczny';

$strBack = 'Powrót';
$strBaltic = 'Bałtycki';
$strBeginCut = 'TNIJ STĄD';
$strBeginRaw = 'SUROWE DANE STĄD';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBinaryLog = 'Dziennik binarny';
$strBinLogEventType = 'Typ zdarzenia';
$strBinLogInfo = 'Informacje';
$strBinLogName = 'Nazwa dziennika';
$strBinLogOriginalPosition = 'Oryginalna pozycja';
$strBinLogPosition = 'Pozycja';
$strBinLogServerId = 'ID serwera';
$strBookmarkAllUsers = 'Pozwól na dostęp wszystkim użytkownikom';
$strBookmarkCreated = 'Zapytanie %s zostało zapamiętane';
$strBookmarkDeleted = 'Zapamiętane zapytanie SQL zostało usunięte.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapamiętane zapytanie SQL';
$strBookmarkReplace = 'Zamień istniejące zapamiętane zapytanie o tej samej nazwie';
$strBookmarkThis = 'Pamiętaj zapytanie SQL';
$strBookmarkView = 'Tylko pokaż';
$strBrowseDistinctValues = 'Przeglądaj różne wartości';
$strBrowseForeignValues = 'Przeglądaj zewnętrzne wartości';
$strBrowse = 'Przeglądaj';
$strBufferPoolActivity = 'Aktywność rezerw buforowych';
$strBufferPool = 'Rezerwy buforowe';
$strBufferPoolUsage = 'Użycie rezerw buforowych';
$strBufferReadMisses = 'Chybienia odczytu';
$strBufferReadMissesInPercent = 'Chybienia odczytu w %';
$strBufferWriteWaitsInPercent = 'Oczekiwania zapisu w %';
$strBufferWriteWaits = 'Oczekiwania na zapis';
$strBulgarian = 'Bułgarski';
$strBusyPages = 'Strony używane';
$strBzError = 'phpMyAdminowi nie udało się skompresować zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji PHP. Jest bardzo zalecane by ustawić dyrektywę <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Jeśli chcesz użyć funkcji kompresji Bz2, PHP powinien zostać zaktualizowany do najnowszej wersji. Szczegóły można zobaczyć w raporcie na temat błędów PHP %s.';
$strBzip = '".bz2"';

$strCalendar = 'Kalendarz';
$strCanNotLoadExportPlugins = 'Nie udało się załadować modułów eksportu, proszę sprawdzić instalację!';
$strCanNotLoadImportPlugins = 'Nie udało się załadować modułów importu, proszę sprawdzić instalację!';
$strCannotLogin = 'Nie udało się zalogować na serwer MySQL';
$strCantLoad = 'nie udało się załadować modułu %s,<br />proszę sprawdzić konfigurację PHP';
$strCantLoadRecodeIconv = 'Nie udało się załadować rozszerzeń iconv lub recode, które są niezbędne do konwersji kodowania znaków, skonfiguruj PHP tak, by mógł używać tych rozszerzeń albo zablokuj konwersję kodowania znaków w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie można zmienić nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie udało się użyć ani funkcji iconv, ani libiconv, mimo że rozszerzenia zgłaszają się jako załadowane. Proszę sprawdzić swoją konfigurację PHP.';
$strCardinality = 'Moc';
$strCaseInsensitive = 'bez rozróżniania wielkości liter';
$strCaseSensitive = 'z rozróżnianiem wielkości liter';
$strCentralEuropean = 'Środkowoeuropejski';
$strChangeCopyModeCopy = '... pozostaw starego.';
$strChangeCopyModeDeleteAndReload = ' ... usuń starego z tabel użytkowników, a następnie przeładuj uprawnienia.';
$strChangeCopyModeJustDelete = ' ... usuń starego z tabel użytkowników.';
$strChangeCopyModeRevoke = ' ... odbierz wszystkie aktywne uprawnienia staremu, a następnie go usuń.';
$strChangeCopyMode = 'Utwórz nowego użytkownika z takimi samymi uprawnieniami i ...';
$strChangeCopyUser = 'Zmień dane użytkownika / Skopiuj użytkownika';
$strChangeDisplay = 'Wybierz wyświetlane pole';
$strChangePassword = 'Zmień hasło';
$strChange = 'Zmień';
$strCharsetOfFile = 'Zestaw znaków dla pliku:';
$strCharsetsAndCollations = 'Zestawy znaków i metody porównywania napisów';
$strCharsets = 'Zestawy znaków';
$strCharset = 'Zestaw znaków';
$strCheckAll = 'Zaznacz wszystkie';
$strCheckOverhead = 'Zaznacz nieoptymalne';
$strCheckPrivsLong = 'Sprawdź uprawnienia bazy danych &quot;%s&quot;.';
$strCheckPrivs = 'Sprawdź uprawnienia';
$strCheckTable = 'Sprawdź tabelę';
$strChoosePage = 'Proszę wybrać stronę do edycji';
$strColComFeat = 'Wyświetl komentarze dla kolumn';
$strCollation = 'Metoda porównywania napisów';
$strColumnNames = 'Nazwy kolumn';
$strColumnPrivileges = 'Uprawnienia specyficzne dla kolumn';
$strCommand = 'Polecenie';
$strCommentsForTable = 'KOMENTARZE TABELI';
$strComments = 'Komentarze';
$strCompatibleHashing = 'Kompatybilny z MySQL-em&nbsp;4.0';
$strCompleteInserts = 'Pełne dodania';
$strCompression = 'Typ kompresji';
$strCompressionWillBeDetected = 'Rodzaj kompresji importowanych plików zostanie automatycznie rozpoznany jako jeden z: %s';
$strConfigDefaultFileError = 'Nie udało się załadować domyślnej konfiguracji z pliku: "%1$s"';
$strConfigFileError = 'phpMyAdmin nie zdołał odczytać Twojego pliku konfiguracji!<br />Może się to zdarzyć, jeśli PHP znajdzie w nim błąd składniowy lub nie może znaleźć tego pliku.<br />Proszę wywołać bezpośrednio plik konfiguracyjny używając poniższego linku i odczytać otrzymane komunikat(y) o błędach. W większości przypadków brakuje gdzieś cudzysłowu lub średnika.<br />Jeżeli otrzymasz pustą stronę, wszystko jest w porządku.';
$strConfigureTableCoord = 'Proszę skonfigurować współrzędnie dla tabeli %s';
$strConnectionError = 'Nie udało się nawiązać połączenia: błędne ustawienia.';
$strConnections = 'Połączenia';
$strConstraintsForDumped = 'Ograniczenia dla zrzutów tabel';
$strConstraintsForTable = 'Ograniczenia dla tabeli';
$strCookiesRequired = 'Odtąd musi być włączona obsługa ciasteczek [<i>cookies</i>].';
$strCopyDatabaseOK = 'Baza danych %s została skopiowana do %s';
$strCopy = 'Kopiuj';
$strCopyTableOK = 'Tabela %s została skopiowana do %s.';
$strCopyTableSameNames = 'Nie można skopiować tabeli do niej samej!';
$strCopyTable = 'Skopiuj tabelę do (bazadanych<b>.</b>tabela):';
$strCouldNotKill = 'phpMyAdminowi nie udało się unicestwić wątku %s. Prawdopodobnie został on już zamknięty.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE przed skopiowaniem';
$strCreateIndexTopic = 'Utwórz nowy indeksu';
$strCreateIndex = 'Utwórz indeks dla %s kolumn';
$strCreateNewDatabase = 'Utwórz nową bazę danych';
$strCreateNewTable = 'Utwórz nową tabelę w bazie danych %s';
$strCreatePage = 'Utwórz nową stronę';
$strCreatePdfFeat = 'Tworzenie PDF-ów';
$strCreateUserDatabase = 'Baza danych dla użytkownika';
$strCreateUserDatabaseName = 'Utwórz bazę danych z taką samą nazwą i przyznaj wszystkie uprawnienia';
$strCreateUserDatabaseNone = 'Brak';
$strCreateUserDatabaseWildcard = 'Przyznaj wszystkie uprawienia do baz danych o nazwach pasujących do maski (nazwaużytkownika_%)';
$strCreate = 'Utwórz';
$strCreationDates = 'Daty utworzenia/aktualizacji/sprawdzenia';
$strCriteria = 'Kryteria';
$strCroatian = 'Chorwacki';
$strCSV = 'CSV';
$strCyrillic = 'Cyrylica';
$strCzech = 'Czeski';
$strCzechSlovak = 'Czesko-słowacki';

$strDanish = 'Duński';
$strDatabase = 'Baza danych';
$strDatabaseEmpty = 'Nazwa bazy danych jest pusta!';
$strDatabaseExportOptions = 'Opcje eksportu bazy danych';
$strDatabaseHasBeenDropped = 'Baza danych %s została usunięta.';
$strDatabases = 'Bazy danych';
$strDatabasesDropped = '%s baz danych zostało pomyślnie usuniętych.';
$strDatabasesStatsDisable = 'Wyłącz statystyki';
$strDatabasesStatsEnable = 'Włącz statystyki';
$strDatabasesStatsHeavyTraffic = 'Uwaga: Włączenie statystyk baz danych może spowodować duży ruch pomiędzy serwerem WWW a serwerem MySQL.';
$strDatabasesStats = 'Statystyki baz danych';
$strData = 'Dane';
$strDataDict = 'Słownik danych';
$strDataOnly = 'Tylko dane';
$strDataPages = 'Strony zawierające dane';
$strDBComment = 'Komentarz bazy danych: ';
$strDBCopy = 'Kopiuj bazę danych do';
$strDbPrivileges = 'Uprawnienia specyficzne dla baz danych';
$strDBRename = 'Zmień nazwę bazy danych na';
$strDbSpecific = 'specyficzne dla bazy danych';
$strDefault = 'Domyślnie';
$strDefaultEngine = '%s to domyślny mechanizm składowania tego serwera MySQL.';
$strDefaultValueHelp = 'Dla wartości domyślnych, proszę wprowadzić po prostu pojedynczą wartość, bez cytowania odwrotnym ukośnikiem czy ujmowania w cudzysłowy, używając takiego formatu: a';
$strDefragment = 'Tablica defragmentacji';
$strDelayedInserts = 'Użyj opóźnionych dodań';
$strDeleteAndFlushDescr = 'Jest to najzgrabniejszy sposób, ale przeładowanie uprawnień może potrwać jakiś czas.';
$strDeleteAndFlush = 'Usuń użytkowników, a następnie przeładuj uprawnienia.';
$strDeleted = 'Rekord został skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleteNoUsersSelected = 'Żaden użytkownik ze został zaznaczony do skasowania!';
$strDelete = 'Usuń';
$strDeleting = 'Usuwanie %s';
$strDelimiter = 'Separator';
$strDelOld = 'Aktualna strona ma powiązania z tabelą, która już nie istnieje. Czy chcesz usunąć te powiązania?';
$strDescending = 'Malejąco';
$strDescription = 'Opis';
$strDictionary = 'słownik';
$strDirtyPages = 'Strony brudne';
$strDisabled = 'wyłączone';
$strDisableForeignChecks = 'Wyłącz sprawdzanie kluczy zewnętrznych';
$strDisplayFeat = 'Funkcje wyświetlania';
$strDisplayOrder = 'Kolejność wyświetlania:';
$strDisplayPDF = 'Wyświetl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przykład" (znak globalny: "%")';
$strDocu = 'Dokumentacja';
$strDoYouReally = 'Czy na pewno wykonać ';
$strDropDatabaseStrongWarning = 'Masz zamiar ZNISZCZYĆ całą bazę danych!';
$strDropUsersDb = 'Usuń bazy danych o takich samych nazwach jak użytkownicy.';
$strDrop = 'Usuń';
$strDumpingData = 'Zrzut danych tabeli';
$strDumpSaved = 'Zrzut został zapisany do pliku %s.';
$strDumpXRows = 'Zrzuć %s rekordów zaczynając od rekordu %s.';
$strDynamic = 'zmienny';

$strEdit = 'Edytuj';
$strEditPDFPages = 'Edytuj strony PDF';
$strEditPrivileges = 'Edytuj uprawnienia';
$strEffective = 'Efektywne';
$strEmptyResultSet = 'MySQL zwrócił pusty wynik (zero rekordów).';
$strEmpty = 'Wyczyść';
$strEnabled = 'włączone';
$strEncloseInTransaction = 'Obejmij eksport transakcją';
$strEndCut = 'TNIJ DOTĄD';
$strEnd = 'Koniec';
$strEndRaw = 'SUROWE DANE DOTĄD';
$strEngineAvailable = '%s jest dostępny na tym serwerze MySQL.';
$strEngineDisabled = 'Mechanizm %s został wyłączony w tym serwerze MySQL.';
$strEngines = 'Mechanizmy';
$strEngineUnsupported = 'Ten serwer MySQL nie obsługuje mechanizmu składowania %s.';
$strEnglish = 'Angielski';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL są oznaczone w języku angielskim ';
$strError = 'Błąd';
$strErrorInZipFile = 'Błąd w archiwum ZIP:';
$strErrorRenamingTable = 'Błąd podczas zmiany nazwy tabeli z %1$s na %2$s';
$strEscapeWildcards = 'Aby użyć symboli wieloznacznych _ i % w znaczeniu dosłownym, należy je poprzedzić znakiem \ ';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estoński';
$strExcelEdition = 'Wydanie Excela';
$strExecuteBookmarked = 'Wykonaj zapamiętanego zapytania';
$strExplain = 'Wyjaśnij SQL';
$strExport = 'Eksport';
$strExportMustBeFile = 'Wybrany typ eksportu musi być zapisany do pliku';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowo';

$strFailedAttempts = 'Nieudane próby';
$strFieldHasBeenDropped = 'Pole %s zostało usunięte';
$strField = 'Pole';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFields = 'Pola';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFileAlreadyExists = 'Plik %s już istnieje na serwerze, zmień nazwę pliku lub zaznacz opcję nadpisywania plików.';
$strFileCouldNotBeRead = 'Nie można odczytać pliku';
$strFileNameTemplateDescriptionDatabase = 'nazwa bazy danych';
$strFileNameTemplateDescription = 'Interpretacja tej wartości należy do funkcji %1$sstrftime%2$s i można użyć jej napisów formatujących. Dodatkowo zostaną zastosowane następujące przekształcenia: %3$s. Pozostały tekst będzie niezmieniony.';
$strFileNameTemplateDescriptionServer = 'nazwa serwera';
$strFileNameTemplateDescriptionTable = 'nazwa tabeli';
$strFileNameTemplateRemember = 'pamiętaj szablon';
$strFileNameTemplate = 'Szablon nazwy';
$strFileToImport = 'Plik do importu';
$strFixed = 'stały';
$strFlushPrivilegesNote = 'Uwaga: phpMyAdmin pobiera uprawnienia użytkowników wprost z tabeli uprawnień MySQL-a. Zawartość tej tabeli, jeśli zostały w niej dokonane ręczne zmiany, może się różnić od uprawnień jakich faktycznie używa serwer. W takim przypadku powinieneś przed dalszą pracą %sprzeładować uprawnienia%s.';
$strFlushQueryCache = 'Opróżnij bufor podręczny zapytań';
$strFlushTable = 'Przeładuj tabelę ("FLUSH")';
$strFlushTables = 'Przeładuj (zamknij) wszystkie tabele';
$strFontSize = 'Rozmiar pisma';
$strFormat = 'Format';
$strFormEmpty = 'Brakująca wartość w formularzu!';
$strFreePages = 'Strony puste';
$strFullText = 'Pełny tekst';
$strFunction = 'Funkcja';
$strFunctions = 'Funkcje';

$strGenBy = 'Wygenerowany przez';
$strGeneralRelationFeat = 'Ogólne funkcje relacyjne';
$strGenerate = 'Generuj';
$strGeneratePassword = 'Generuj hasło';
$strGenTime = 'Czas wygenerowania';
$strGeorgian = 'Gruziński';
$strGerman = 'Niemiecki';
$strGlobal = 'globalnie';
$strGlobalPrivileges = 'Globalne uprawnienia';
$strGlobalValue = 'Wartość globalna';
$strGo = 'Wykonaj';
$strGrantOption = 'Nadawanie';
$strGreek = 'Grecki';
$strGzip = '".gz"';

$strHandler = 'Obsługa';
$strHasBeenAltered = 'zostało zamienione.';
$strHasBeenCreated = 'zostało utworzone.';
$strHaveToShow = 'Należy wybrać przynajmniej jedną kolumnę do wyświetlenia';
$strHebrew = 'Hebrajski';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHome = 'Wejście';
$strHostEmpty = 'Brak nazwy hosta!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Węgierski';

$strIcelandic = 'Islandzki';
$strId = 'ID';
$strIdxFulltext = 'Pełny tekst';
$strIgnoreDuplicates = 'Ignoruj zdublowane rekordy';
$strIgnore = 'Ignoruj';
$strIgnoreInserts = 'Użyj ignorowanych dodań';
$strImportFiles = 'Import plików';
$strImportFormat = 'Format importowanych plików';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import zakończony sukcesem, wykonano %d zapytań.';
$strIndexes = 'Indeksy';
$strIndexHasBeenDropped = 'Klucz %s został usunięty';
$strIndex = 'Indeks';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexWarningTable = 'Problemy z indeksami tabeli `%s`';
$strInnoDBAutoextendIncrementDesc = 'Rozmiar o jaki automatycznie powiększy się tabela, kiedy zostanie zapełniona.';
$strInnoDBAutoextendIncrement = 'Przyrost autoextend';
$strInnoDBBufferPoolSizeDesc = 'Ilość pamięci, której InnoDB używa do buforowania danych i indeksów swoich tabel.';
$strInnoDBBufferPoolSize = 'Rozmiar rezerw buforowych';
$strInnoDBDataFilePath = 'Pliki danych';
$strInnoDBDataHomeDirDesc = 'Wspólna część ścieżki do wszystkich plików danych InnoDB.';
$strInnoDBDataHomeDir = 'Katalog domowy danych';
$strInnoDBPages = 'stron';
$strInnodbStat = 'Status InnoDB';
$strInsecureMySQL = 'Twój plik konfiguracyjny zawiera ustawienia (konto roota bez hasła), które odpowiadają domyślnemu uprzywilejowanemu kontu MySQL. Twój serwer MySQL działa z takim ustawieniem, jest otwarty dla włamywaczy. Ta luka w bezpieczeństwie naprawdę powinna zostać naprawiona.';
$strInsertAsNewRow = 'Dodaj jako nowy rekord';
$strInsert = 'Dodaj';
$strInsertedRowId = 'Identyfikator dodanego rekordu:';
$strInsertedRows = 'Dodane rekordy:';
$strInternalNotNecessary = '* Wewnętrzna relacja nie jest konieczna gdy istnieje również w InnoDB.';
$strInternalRelations = 'Wewnętrzne relacje';
$strInUse = 'w użyciu';
$strInvalidAuthMethod = 'W konfiguracji ustawiono błędną metodę uwierzytelniania:';
$strInvalidColumnCount = 'Liczba kolumn musi być większa niż zero.';
$strInvalidColumn = 'Podano błędną kolumnę (%s)!';
$strInvalidCSVFieldCount = 'Niewłaściwa liczba pól w linii %d danych wejściowych CSV.';
$strInvalidCSVFormat = 'Niewłaściwy format w linii %d danych wejściowych CSV.';
$strInvalidCSVParameter = 'Niewłaściwy parametr importu CSV: %s';
$strInvalidDatabase = 'Niewłaściwa baza danych';
$strInvalidFieldAddCount = 'Należy dodać przynajmniej jedno pole.';
$strInvalidFieldCount = 'Tabela musi mieć przynajmniej jedno pole.';
$strInvalidLDIImport = 'Ten moduł nie obsługuje skompresowanych importów!';
$strInvalidRowNumber = '%d nie jest prawidłowym numerem rekordu.';
$strInvalidServerHostname = 'Niewłaściwa nazwa hosta serwera %1$s. Proszę przyjrzeć się konfiguracji.';
$strInvalidServerIndex = 'Niewłaściwy numer serwera: "%s"';
$strInvalidTableName = 'Niewłaściwa nazwa tabeli';

$strJapanese = 'Japoński';
$strJoins = 'Złączenia';
$strJumpToDB = 'Skok do bazy danych &quot;%s&quot;.';
$strJustDeleteDescr = 'Nim uprawnienia zostaną przeładowane, &quot;usunięci&quot; użytkownicy nadal będą mieli dotychczasowy dostęp do serwera.';
$strJustDelete = 'Po prostu usuń użytkowników z tabeli uprawnień.';

$strKeepPass = 'Nie zmieniaj hasła';
$strKeyCache = 'Bufor podręczny indeksów';
$strKeyname = 'Nazwa klucza';
$strKill = 'Unicestwij';
$strKorean = 'Koreański';

$strLandscape = 'Orientacja pozioma';
$strLanguage = 'Język';
$strLanguageUnknown = 'Nieznany język: %1$s.';
$strLatchedPages = 'Stron zatrzaśniętych';
$strLatexCaption = 'Nagłówek tabeli';
$strLatexContent = 'Zawartość tabeli __TABLE__';
$strLatexContinuedCaption = 'Kontynuacja nagłówka tabeli';
$strLatexContinued = '(kontynuacja)';
$strLatexIncludeCaption = 'Załącz nagłówek tabeli';
$strLatexLabel = 'Etykieta klucza';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabeli __TABLE__';
$strLatvian = 'Łotewski';
$strLDI = 'CSV przy użyciu LOAD DATA';
$strLDILocal = 'Użyj słowa kluczowego LOCAL';
$strLengthSet = 'Długość/Wartości*';
$strLimitNumRows = 'rekordów na stronie';
$strLinesTerminatedBy = 'Linie zakończone przez';
$strLinkNotFound = 'Łącze nie znalezione';
$strLinksTo = 'Łącze';
$strLithuanian = 'Litewski';
$strLocalhost = 'Host lokalny';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLoginInformation = 'Dane użytkownika';
$strLogin = 'Login';
$strLogout = 'Wyjście';
$strLogPassword = 'Hasło:';
$strLogServer = 'Serwer';
$strLogUsername = 'Użytkownik:';
$strLongOperation = 'Ta operacja może trwać długo. Czy mimo to kontynuować?';

$strMaxConnects = 'Maks. jednoczesnych połączeń';
$strMaximalQueryLength = 'Maksymalna długość utworzonego zapytania';
$strMaximumSize = 'Maksymalny rozmiar: %s%s';
$strMbExtensionMissing = 'Rozszerzenie PHP o nazwie mbstring nie zostało znalezione, a wygląda na to, że używasz wielobajtowego zestawu znaków. Bez rozszerzenia mbstring phpMyAdmin nie ma możliwości poprawnego rozbijania napisów, co może skutkować niespodziewanymi rezultatami.';
$strMbOverloadWarning = 'Opcja mbstring.func_overload jest włączona w pliku konfiguracyjnym PHP. Jest ona niezgodna z phpMyAdminem i może powodować utratę niektórych danych!';
$strMIME_available_mime = 'Dostępne typy MIME';
$strMIME_available_transform = 'Dostępne transformacje';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'Typ MIME';
$strMIME_nodescription = 'Transformacja ta nie ma opisu.<br />Proszę zapytać autora, co robi %s.';
$strMIME_transformation_note = 'Aby uzyskać listę dostępnych opcji transformacji i ich typów MIME, kliknij %sopisy transformacji%s';
$strMIME_transformation_options_note = 'Proszę wprowadzić wartości dla transformacji w następującym formacie: \'a\', 100, b,\'c\'...<br />Jeżeli potrzeba wprowadzić odwrotny ukośnik ("\") lub apostrof ("\'"), należy je poprzedzić odwrotnym ukośnikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strMIME_transformation_options = 'Opcje transformacji';
$strMIME_transformation = 'Sposób prezentacji danych';
$strMIMETypesForTable = 'TYPY MIME TABELI';
$strMIME_without = 'Typy MIME pisane czcionką pochyloną nie mają oddzielnej funkcji transformacji';
$strModifications = 'Modyfikacje zostały zapamiętane';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strModify = 'Modyfikacja';
$strMoveTableOK = 'Tabela %s została przeniesiona do %s.';
$strMoveTable = 'Przenieś tabelę do (bazadanych<b>.</b>tabela):';
$strMoveTableSameNames = 'Nie można przenieść tabeli do niej samej!';
$strMultilingual = 'wiele języków';
$strMyISAMDataPointerSizeDesc = 'Domyślny rozmiar wskaźnika w bajtach, który jest używany przez CREATE TABLE dla tabel MyISAM, gdy nie określono opcji MAX_ROWS.';
$strMyISAMDataPointerSize = 'Rozmiar wskaźnika danych';
$strMyISAMMaxExtraSortFileSizeDesc = 'Jeżeli plik tymczasowy użyty przy szybkim tworzeniu indeksu MyISAM byłby większy o wartość tu określoną, niż w wypadku zastosowania metody pamięci podręcznej kluczy, preferuj tę drugą metodę.';
$strMyISAMMaxExtraSortFileSize = 'Maksymalny rozmiar pliku tymczasowego dla tworzenia indeksu';
$strMyISAMMaxSortFileSizeDesc = 'Maksymalny rozmiar pliku tymczasowego, którego może zostać użyty przy ponownym tworzeniu indeksu MyISAM (podczas operacji REPAIR TABLE, ALTER TABLE lub LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksymalny rozmiar pliku tymczasowego dla sortowania';
$strMyISAMRecoverOptionsDesc = 'Tryb w którym po awarii tabele MyISAM są automatycznie naprawiane; włączany przez opcję startową serwera --myisam-recover.';
$strMyISAMRecoverOptions = 'Tryb automatycznej naprawy';
$strMyISAMRepairThreadsDesc = 'Wartość większa niż 1 oznacza, że indeksy tabel MyISAM są tworzone współbieżnie (każdy indeks ma swój wątek) podczas naprawy przez proces sortujący.';
$strMyISAMRepairThreads = 'Liczba wątków naprawiających';
$strMyISAMSortBufferSizeDesc = 'Bufor, który jest alokowany w czasie sortowania indeksów MyISAM podczas operacji REPAIR TABLE albo gdy indeksy są tworzone przez polecenia CREATE INDEX lub ALTER TABLE.';
$strMyISAMSortBufferSize = 'Rozmiar bufora dla sortowania';
$strMySQLCharset = 'System kodowania znaków dla MySQL';
$strMysqlClientVersion = 'Wersja klienta MySQL';
$strMySQLConnectionCollation = 'System porównań dla połączenia MySQL';
$strMySQLSaid = 'MySQL zwrócił komunikat: ';
$strMySQLShowProcess = 'Pokaż procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Następne';
$strNoActivity = 'Brak aktywności przez co najmniej %s sekund, proszę zalogować się jeszcze raz';
$strNoDatabases = 'Brak baz danych';
$strNoDatabasesSelected = 'Żadna baza danych nie został wybrana.';
$strNoDataReceived = 'Nie otrzymano żadnych danych do importu. Albo nie została wysłana nazwa pliku, albo plik był zbyt duży (maksymalny dopuszczalny rozmiar pliku określa się w konfiguracji PHP). Zobacz FAQ 1.16.';
$strNoDescription = 'brak opisu';
$strNoDetailsForEngine = 'Brak szczegółowych informacji o tym mechanizmie składowania';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomiń wyjaśnienie SQL';
$strNoFilesFoundInZip = 'Archiwum ZIP jest puste!';
$strNoFrames = 'phpMyAdmin jest bardziej przyjazny w przeglądarkach <b>obsługujących ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych części indeksu!';
$strNoModification = 'Bez zmian';
$strNone = 'Brak';
$strNo = 'Nie';
$strNoOptions = 'Ten format nie ma żadnych opcji';
$strNoPassword = 'Brak hasła';
$strNoPermission = 'Serwer WWW nie ma praw do zapisu pliku %s.';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnień';
$strNoRights = 'Brak wystarczających uprawnień!';
$strNoRowsSelected = 'Żaden rekord nie został zaznaczony';
$strNoSpace = 'Brak miejsca na zapis pliku %s.';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoThemeSupport = 'Brak obsługi motywów graficznych, proszę sprawdzić konfigurację i/lub motywy graficzne w katalogu %s.';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'błąd';
$strNotSet = 'Tabela <b>%s</b> nie została znaleziona lub nie jest ustawiona w %s';
$strNoUsersFound = 'Nie znaleziono użytkownika(ów).';
$strNoValidateSQL = 'Pomiń sprawdzanie poprawności SQL';
$strNull = 'Null';
$strNumberOfFields = 'Liczba pól';
$strNumSearchResultsInTable = '%s trafień wewnątrz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafień';
$strNumTables = 'Tabele';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'arkusz kalkulacyjny w formacie Open Document';
$strOpenDocumentText = 'Tekst w formacie Open Document';
$strOpenNewWindow = 'Otwórz nowe okno phpMyAdmina';
$strOperations = 'Operacje';
$strOperator = 'Operator';
$strOptimizeTable = 'Optymalizuj tabelę';
$strOr = 'lub';
$strOverhead = 'Nadmiar';
$strOverwriteExisting = 'Nadpisuj istniejące pliki';

$strPageNumber = 'Numer strony:';
$strPagesToBeFlushed = 'Strony do wymiecenia';
$strPaperSize = 'Rozmiar papieru';
$strPartialImport = 'Import częściowy';
$strPartialText = 'Skrócony tekst';
$strPasswordChanged = 'Hasło dla %s zostało pomyślnie zmienione.';
$strPasswordEmpty = 'Puste hasło!';
$strPassword = 'Hasło';
$strPasswordHashing = 'Sposób kodowania haseł';
$strPasswordNotSame = 'Hasła nie są identyczne!';
$strPdfDbSchema = 'Schemat bazy danych "%s" - strona %s';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generuje raport zawierający danej pojedynczej tabeli.)';
$strPDFReportTitle = 'Tytuł raportu';
$strPerHour = 'na godzinę';
$strPerMinute = 'na minutę';
$strPerSecond = 'na sekundę';
$strPersian = 'Perski';
$strPhoneBook = 'książka telefoniczna';
$strPHP40203 = 'Używasz PHP w wersji 4.2.3, która ma poważny błąd w obsłudze napisów wielobajtowych (mbstring). Zobacz raport na temat błędów PHP nr 19404. Nie zaleca się używania tej wersji PHP z phpMyAdminem.';
$strPhp = 'Utwórz kod PHP';
$strPHPVersion = 'Wersja PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi być ustawiona w pliku konfiguracyjnym!';
$strPolish = 'Polski';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Początek';
$strPrevious = 'Poprzednie';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy został usunięty';
$strPrimaryKeyName = 'Nazwą podstawowego klucza musi być... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> być nazwą <b>jedynie</b> klucza podstawowego!)';
$strPrimary = 'Podstawowy';
$strPrint = 'Drukuj';
$strPrintViewFull = 'Widok do druku (z pełnymi tekstami)';
$strPrintView = 'Widok do druku';
$strPrivDescAllPrivileges = 'Wszystkie uprawnienia, oprócz GRANT.';
$strPrivDescAlter = 'Pozwól zmieniać strukturę istniejących tabel.';
$strPrivDescAlterRoutine = 'Pozwól modyfikować i usuwać procedury składowane.';
$strPrivDescCreateDb = 'Pozwól tworzyć nowe bazy danych i tabele.';
$strPrivDescCreateRoutine = 'Pozwól tworzyć procedury składowane.';
$strPrivDescCreateTbl = 'Pozwól tworzyć nowe tabele.';
$strPrivDescCreateTmpTable = 'Pozwala tworzyć tabele tymczasowe.';
$strPrivDescCreateUser = 'Pozwól tworzyć, usuwać i zmieniać nazwy kont użytkowników.';
$strPrivDescCreateView = 'Pozwól tworzyć perspektywy.';
$strPrivDescDelete = 'Pozwól usuwać dane.';
$strPrivDescDropDb = 'Pozwól usuwać bazy danych i tabele.';
$strPrivDescDropTbl = 'Pozwól usuwać tabele.';
$strPrivDescExecute5 = 'Pozwól wykonywać procedury składowane.';
$strPrivDescExecute = 'Pozwól uruchamiać zapamiętane procedury; Nie ma żadnych skutków w tej wersji MySQL.';
$strPrivDescFile = 'Pozwól importować i eksportować dane z/do plików.';
$strPrivDescGrant = 'Pozwól dodawać użytkowników i nadawać uprawnienia bez przeładowywania tabeli uprawnień.';
$strPrivDescIndex = 'Pozwól tworzyć i usuwać indeksy.';
$strPrivDescInsert = 'Pozwól dodawać i zamieniać dane.';
$strPrivDescLockTables = 'Pozwól blokować tabele dla aktualnego wątku.';
$strPrivDescMaxConnections = 'Ogranicz liczbę nowych połączeń, które może otworzyć użytkownik w ciągu godziny.';
$strPrivDescMaxQuestions = 'Ogranicz liczbę zapytań, które może wysłać użytkownik w ciągu godziny.';
$strPrivDescMaxUpdates = 'Ogranicz liczbę poleceń zmieniających jakąkolwiek tabelę lub bazę danych, które może wykonać użytkownik w ciągu godziny.';
$strPrivDescMaxUserConnections = 'Ogranicz liczbę jednoczesnych połączeń, które może użytkownik.';
$strPrivDescProcess3 = 'Pozwól unicestwiać procesy innych użytkowników.';
$strPrivDescProcess4 = 'Pozwól zobaczyć pełną listę zapytań na liście procesów.';
$strPrivDescReferences = 'Nie ma żadnych skutków w tej wersji MySQL.';
$strPrivDescReload = 'Pozwól przeładowywać ustawienia serwera i opróżniać pamięć podręczną serwera.';
$strPrivDescReplClient = 'Nadaj użytkownikowi prawo, by zapytać gdzie są serwery podrzędne / nadrzędne.';
$strPrivDescReplSlave = 'Potrzebne dla replikacji serwera podrzędnego.';
$strPrivDescSelect = 'Pozwól czytać dane.';
$strPrivDescShowDb = 'Daj dostęp do pełnej listy baz danych.';
$strPrivDescShowView = 'Pozwól wykonywać zapytania SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Pozwól zamknąć serwer.';
$strPrivDescSuper = 'Pozwól na połączenie, nawet jeśli osiągnięta została maksymalna ilość połączeń; Wymagane dla większość operacji administracyjnych, takich jak ustawianie zmiennych globalnych czy unicestwianie wątków innych użytkowników.';
$strPrivDescUpdate = 'Pozwól zmieniać dane.';
$strPrivDescUsage = 'Brak uprawnień.';
$strPrivilegesReloaded = 'Uprawnienia zostały pomyślnie przeładowane.';
$strPrivileges = 'Uprawnienia';
$strProcedures = 'Procedury';
$strProcesses = 'Procesy';
$strProcesslist = 'Lista procesów';
$strProtocolVersion = 'Wersja protokołu';
$strPutColNames = 'Umieść nazwy pól w pierwszym rekordzie';

$strQBEDel = 'Usuń';
$strQBEIns = 'Dodaj';
$strQBE = 'Zapytanie przez przykład';
$strQueryCache = 'Pamięć podręczna zapytań';
$strQueryFrame = 'Okienko zapytania';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQueryResultsOperations = 'Operacja na wynikach zapytania';
$strQuerySQLHistory = 'Historia SQL';
$strQueryStatistics = '<b>Statystyki zapytań</b>: Od rozpoczęcia jego pracy, do serwera zostało wysłanych %s zapytań.';
$strQueryTime = 'Wykonanie zapytania trwało %01.4f sekund(y)';
$strQueryType = 'Rodzaj zapytania';
$strQueryWindowLock = 'Nie nadpisuj tego zapytania spoza okna';

$strReadRequests = 'Żądań odczytu';
$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdź spójność powiązań:';
$strRefresh = 'Odśwież';
$strRelationalSchema = 'Schemat relacyjny';
$strRelationNotWorking = 'Dodatkowe możliwości pracy z połączonymi tabelami zostały wyłączone. Aby dowiedzieć się, dlaczego - kliknij %stutaj%s.';
$strRelationsForTable = 'RELACJE TABELI';
$strRelations = 'Relacje';
$strRelationView = 'Widok relacyjny';
$strReloadingThePrivileges = 'Przeładuj uprawnienia';
$strReloadPrivileges = 'Przeładuj uprawnienia';
$strRemoveSelectedUsers = 'Usuń zaznaczonych użytkowników';
$strRenameDatabaseOK = 'Baza danych %s ma nazwę zmienioną na %s';
$strRenameTableOK = 'Tabela %s ma nazwę zmienioną na %s';
$strRenameTable = 'Zmień nazwę tabeli na';
$strRepairTable = 'Napraw tabelę';
$strReplaceNULLBy = 'Zamiana NULL na';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReplication = 'Replikacja';
$strReset = 'Reset';
$strResourceLimits = 'Ograniczenia zasobów';
$strReType = 'Ponownie';
$strRevokeAndDelete = 'Cofnij wszystkie aktywne uprawnienia użytkownikom, a następnie usuń ich.';
$strRevokeAndDeleteDescr = 'Nim uprawnienia zostaną przeładowane, użytkownicy nadal będą mieli uprawnienie USAGE.';
$strRevoke = 'Cofnij';
$strRevokeMessage = 'Uprawnienia dla %s zostały cofnięte';
$strRomanian = 'Rumuński';
$strRowLength = 'Długość rekordu';
$strRowsFrom = 'rekordów począwszy od';
$strRowSize = ' Rozmiar rekordu ';
$strRowsModeFlippedHorizontal = 'poziomo (obrócone nagłówki)';
$strRowsModeHorizontal = 'poziomo';
$strRowsModeOptions = 'w trybie %s powtórz nagłówki po %s komórkach';
$strRowsModeVertical = 'pionowo';
$strRows = 'Rekordów';
$strRowsStatistic = 'Statystyka rekordów';
$strRunning = 'uruchomiony na %s';
$strRunQuery = 'Wykonaj zapytania';
$strRunSQLQueryOnServer = 'Uruchom zapytanie/zapytania SQL na serwerze %s';
$strRunSQLQuery = 'Wykonanie zapytania/zapytań SQL do bazy danych %s';
$strRussian = 'Rosyjski';

$strSaveOnServer = 'Zapisz na serwerze w katalogu %s';
$strSave = 'Zachowaj';
$strScaleFactorSmall = 'Współczynnik skali jest za mały, by schemat zmieścił się na jednej stronie';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewnątrz tabel(i):';
$strSearchNeedle = 'Szukane słowa lub wartości (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze słów';
$strSearchOption2 = 'wszystkie słowa';
$strSearchOption3 = 'cała fraza';
$strSearchOption4 = 'wyrażenie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearch = 'Szukaj';
$strSearchType = 'Znajdź:';
$strSecretRequired = 'Plik konfiguracyjny wymaga teraz tajnej frazy kodującej (blowfish_secret).';
$strSelectADb = 'Proszę wybrać bazę danych';
$strSelectAll = 'Zaznacz wszystkie';
$strSelectBinaryLog = 'Wybierz dziennik binarny do podglądu';
$strSelectFields = 'Wybór pól (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'Zapisz jako plik';
$strSent = 'Wysłane';
$strServerChoice = 'Wybór serwera';
$strServerNotResponding = 'Serwer nie odpowiada';
$strServer = 'Serwer';
$strServers = 'Serwery';
$strServerStatusDelayedInserts = 'Opóźnione dodania';
$strServerStatus = 'Informacje o działaniu serwera';
$strServerStatusUptime = 'Serwer MySQL działa przez %s. Początek pracy: %s.';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poniższe tabele pokazują statystyki ruchu na tym serwerze MySQL od rozpoczęcia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Wartość sesji';
$strSetEnumVal = 'Jeżeli pole jest typu "ENUM" lub "SET", wartości wprowadza się w formacie: \'a\',\'b\',\'c\'...<br />Jeżeli potrzeba wprowadzić odwrotny ukośnik ("\") lub apostrof ("\'"), należy je poprzedzić odwrotnym ukośnikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShowAll = 'Pokaż wszystko';
$strShowColor = 'Pokaż kolor';
$strShowDatadictAs = 'Format słownika danych';
$strShowFullQueries = 'Pokaż pełne zapytania';
$strShowGrid = 'Pokaż siatkę';
$strShowingBookmark = 'Pokaz zapamiętanego zapytania';
$strShowingRecords = 'Pokaż rekordy ';
$strShowOpenTables = 'Pokaż otwarte tabele';
$strShowPHPInfo = 'Informacje o PHP';
$strShow = 'Pokaż';
$strShowSlaveHosts = 'Pokaż podrzędne hosty';
$strShowSlaveStatus = 'Status serwera podrzędnego';
$strShowStatusBinlog_cache_disk_useDescr = 'Liczba transakcji, które używały pamięci podręcznej tymczasowego dziennika binarnego, ale który przekroczyły wartość binlog_cache_size i do zapisania instrukcji transakcji został użyty plik tymczasowy.';
$strShowStatusBinlog_cache_useDescr = 'Liczba transakcji, które używały pamięci podręcznej tymczasowego dziennika binarnego.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Liczba tabel tymczasowych na dysku utworzonych automatycznie przez serwer podczas wykonywanie instrukcji. Przy dużej wartości Created_tmp_disk_tables, zwiększenie wartości tmp_table_size spowoduje tworzenie tymczasowych tabel w pamięci, a nie na dysku.';
$strShowStatusCreated_tmp_filesDescr = 'Ile plików tymczasowych utworzył mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Liczba tabel tymczasowych w pamięci, utworzonych automatycznie przez serwer podczas wykonywania instrukcji.';
$strShowStatusDelayed_errorsDescr = 'Liczba rekordów zapisanych przy pomocy INSERT DELAYED, dla których wystąpił jakiś błąd (prawdopodobnie zdublowany klucz).';
$strShowStatusDelayed_insert_threadsDescr = 'Liczba użytych wątków obsługujących INSERT DELAYED. Każda osobna tabela, na której wykonuje się INSERT DELAYED dostaje własny wątek.';
$strShowStatusDelayed_writesDescr = 'Liczba rekordów zapisanych poprzez INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Liczba wykonanych instrukcji FLUSH.';
$strShowStatusHandler_commitDescr = 'Liczba wewnętrznych intrukcji COMMIT.';
$strShowStatusHandler_deleteDescr = 'Ile razy rekord został usunięty z tabeli.';
$strShowStatusHandler_discoverDescr = 'Serwer MySQL może zapytać mechanizm składowania Cluster NDB, czy ma informacje o tabeli o zadanej nazwie. Nazywamy to odkryciem (<i>discovery</i>). Handler_discover wskazuje, ile razy tabela została odkryta.';
$strShowStatusHandler_read_firstDescr = 'Ile razy z indeksu została odczytana pierwsza pozycja. Duża wartość sugeruje, że serwer wykonuje pełnych przeszukań indeksów; na przykład SELECT col1 FROM foo, przy założeniu, że col1 jest zindeksowane.';
$strShowStatusHandler_read_keyDescr = 'Liczba żądań odczytu rekordu na podstawie indeksu. Duża wartość to dobra oznaka tego, że zapytania i tabele są właściwie zindeksowane.';
$strShowStatusHandler_read_nextDescr = 'Liczba żądań odczytu następnego rekordu w porządku indeksowym. Ta wartość jest zwiększana przy odpytywaniu o zindeksowaną kolumnę na ograniczonym przedziale lub przy przeszukiwaniu indeksu.';
$strShowStatusHandler_read_prevDescr = 'Liczba żądań odczytu poprzedniego rekordu w porządku indeksowym. Metoda używana głównie do optymalizacji ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Liczba żądań odczytu następnego rekordu na podstawie stałego położenia. Wartość jest duża przy wykonywaniu dużej ilości zapytań wymagających sortowania rezultatu. Prawdopodobnie wykonano wiele zapytań wymagających przeszukania całej tabeli lub złączeń, które nie używają poprawnie indeksów.';
$strShowStatusHandler_read_rnd_nextDescr = 'Liczba żądań odczytu następnego rekord w pliku z danymi. Wartość jest duża przy wykonywania wielu przeszukiwań tabeli. Ogólnie sugeruje to, że tabele nie są poprawnie zindeksowane lub że zapytania nie są napisane w sposób pozwalający skorzystać z istniejących indeksów.';
$strShowStatusHandler_rollbackDescr = 'Liczba wewnętrznych instrukcji ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Liczba żądań zmiany rekordu w tabeli.';
$strShowStatusHandler_writeDescr = 'Liczba żądań dodania rekordu do tabeli.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Liczba stron zawierających dane (brudnych lub czystych).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Liczba aktualnie brudnych stron.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Liczba stron w puli bufora, których wymiecienia zażądano.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Liczba wolnych stron.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Liczba stron zatrzaśniętych w puli bufora InnoDB. Są to strony aktualnie odczytywane lub zapisywane lub takie, które nie mogą zostać wymiecione lub usunięte z jakiegoś innego powodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Liczba strony stron zajętych z powodu ich alokacji dla celów administracyjnych takich jak blokady rekordu lub adaptacyjny indeks haszujący. Wartość ta może też zostać policzona jako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Łączny rozmiar puli bufora, w stronach.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Liczba "losowych" odczytów z wyprzedzeniem zainicjowanych przez InnoDB. Występuje gdy zapytane przeszukiwałoby duże fragmenty tabeli, ale w dowolnej kolejności.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Liczba sekwencyjnych odczytów z wyprzedzeniem zainicjowanych przez InnoDB. Występuje gdy InnoDB wykonuje sekwencyjne pełne przeszukiwanie tabeli.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Liczba żądań logicznych odczytów które wykonał InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Liczba logicznych odczytów, których InnoDB nie mógł zaspokoić pulą bufora i musiał wykonać odczyt pojedynczej strony.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Zwykle zapis do puli bufora InnoDB obywa się w tle. Jednakże, jeśli niezbędny jest odczyt lub utworzenie strony a brak jest czystych stron, konieczne jest najpierw oczekiwanie na wymiecienie stron. Ten licznik wskazuje liczbę wystąpień takich oczekiwań. Jeżeli rozmiar puli bufora był ustawiony właściwie, wartość ta powinna być mała.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Liczba wykonanych zapisów do puli bufora InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Liczba dotąd wykonanych operacji fsync().';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Aktualna liczba operacji fsync() w toku.';
$strShowStatusInnodb_data_pending_readsDescr = 'Aktualna liczba odczytów w toku.';
$strShowStatusInnodb_data_pending_writesDescr = 'Aktualna liczba zapisów w toku.';
$strShowStatusInnodb_data_readDescr = 'Ilość dotąd odczytanych danych, w bajtach.';
$strShowStatusInnodb_data_readsDescr = 'Łączna liczba odczytów danych.';
$strShowStatusInnodb_data_writesDescr = 'Łączna liczba zapisów danych.';
$strShowStatusInnodb_data_writtenDescr = 'Ilość dotąd zapisanych danych, w bajtach.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Liczba przeprowadzonych zapisów typu <i>doublewrite</i>.';
$strShowStatusInnodb_dblwr_writesDescr = 'Liczba stron zapisanych przy zapisie typu <i>doublewrite</i>.';
$strShowStatusInnodb_log_waitsDescr = 'Ile razy czekano, bo bufor dziennika był zbyt mały i przed wznowieniem pracy oczekiwano na jego opróżnienie.';
$strShowStatusInnodb_log_write_requestsDescr = 'Liczba żądań zapisów do dziennika.';
$strShowStatusInnodb_log_writesDescr = 'Liczba fizycznych zapisów do pliku dziennika.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Liczba synchronicznych zapisów do pliku dziennika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Liczba wywołań fsync dla pliku dziennika w toku.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Liczba zapisów do pliku dziennika w toku.';
$strShowStatusInnodb_os_log_writtenDescr = 'Liczba bajtów zapisanych do pliku dziennika.';
$strShowStatusInnodb_pages_createdDescr = 'Liczba utworzonych stron.';
$strShowStatusInnodb_page_sizeDescr = 'Wkompilowana wielkość strony InnoDB (domyślnie 16KB). Wiele wartości jest mierzonych w stronach; znajomość wielkości strony pozwala na ich łatwą konwersję na bajty.';
$strShowStatusInnodb_pages_readDescr = 'Liczba odczytanych stron.';
$strShowStatusInnodb_pages_writtenDescr = 'Liczba zapisanych stron.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Liczba blokad rekordów na które aktualnie się czeka.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Średni czas uzyskania blokady rekordu, w milisekundach.';
$strShowStatusInnodb_row_lock_timeDescr = 'Całkowity czas zużyty na uzyskiwanie blokad rekordów, w milisekundach.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maksymalny czas uzyskania blokady rekordu, w milisekundach.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Ile razy czekano na blokadę rekordu.';
$strShowStatusInnodb_rows_deletedDescr = 'Liczba rekordów usuniętych z tabel InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Liczba rekordów dodanych do tabel InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Liczba rekordów odczytanych z tabel InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Liczba rekordów zmienionych w tabelach InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Liczba bloków w buforze podręcznym indeksów, które zostały zmodyfikowane ale jeszcze nie wymiecione na dysk. Wcześniej zmienna miała nazwę Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Liczba nieużywanych bloków w buforze podręcznym indeksów. Można użyć tej wartości do określenia jaka część bufora indeksów jest w użyciu.';
$strShowStatusKey_blocks_usedDescr = 'Liczba użytych bloków w buforze podręcznym indeksów. Ta wartość to próg, który wskazuje maksymalną liczbę kiedykolwiek jednocześnie użytych bloków.';
$strShowStatusKey_read_requestsDescr = 'Liczba żądań odczytu bloku z bufora podręcznego indeksów.';
$strShowStatusKey_readsDescr = 'Liczba fizycznych odczytów bloków indeksów z dysku. Duża wartość key_reads oznacza, że prawdopodobnie wartość key_buffer_size jest zbyt mała. Współczynnik chybień bufora podręcznego można policzyć ze wzoru Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Liczba żądań zapisów bloków indeksów to bufora podręcznego.';
$strShowStatusKey_writesDescr = 'Liczba fizycznych zapisów bloków indeksów na dysk.';
$strShowStatusLast_query_costDescr = 'Całkowity koszta ostatnio skompilowanego zapytania, wyliczony przez optymalizator zapytań. Przydatny do porównań kosztów różnych planów wykonania tego samego zapytania. Domyślna wartość 0 oznacza, że jeszcze żadne zapytanie nie zostało skompilowane.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Liczba rekordów oczekujących na zapisanie w kolejkach INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Liczba kiedykolwiek otwartych tabel. Jeśli ta wartość jest duża, prawdopodobnie wielkość pamięci podręcznej tabel jest zbyt mała.';
$strShowStatusOpen_filesDescr = 'Liczba otwartych plików.';
$strShowStatusOpen_streamsDescr = 'Liczba otwartych strumieni (używanych głownie do rejestracji w dzienniku).';
$strShowStatusOpen_tablesDescr = 'Liczba otwartych tabel.';
$strShowStatusQcache_free_blocksDescr = 'Liczba wolnych bloków pamięci w podręcznym buforze zapytań.';
$strShowStatusQcache_free_memoryDescr = 'Ilość dostępnej pamięci w podręcznym buforze zapytań.';
$strShowStatusQcache_hitsDescr = 'Liczba trafień pamięci podręcznej.';
$strShowStatusQcache_insertsDescr = 'Liczba zapytań dodanych do pamięci podręcznej.';
$strShowStatusQcache_lowmem_prunesDescr = 'Liczba zapytań, które zostały usunięte z pamięci podręcznej, by zwolnic pamięć do buforowania nowych zapytań. Ta informacje może pomóc dostroić wielkość bufora podręcznego. Do decydowania o tym, które zapytania usunąć z bufora podręcznego używana jest strategia "najpierw najdłużej nieużywany" (<i>least recently used</i> - LRU).';
$strShowStatusQcache_not_cachedDescr = 'Liczba niezbuforowanych zapytań (nie dających się zbuforować lub niezbuforowanych z powodu ustawienia query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Liczba zapytań zarejestrowanych w buforze podręcznym.';
$strShowStatusQcache_total_blocksDescr = 'Całkowita liczba bloków w buforze podręcznym zapytań.';
$strShowStatusReset = 'Zresetuj';
$strShowStatusRpl_statusDescr = 'Stan replikacji zabezpieczającej (jeszcze nie zaimplementowane).';
$strShowStatusSelect_full_joinDescr = 'Liczba złączeń nie używających indeksów. Wartość różna od 0 sugeruje staranne przyjrzenie się indeksom tabel.';
$strShowStatusSelect_full_range_joinDescr = 'Liczba złączeń w których użyto wyszukiwania zakresowego na pierwszej złączanej tabeli.';
$strShowStatusSelect_range_checkDescr = 'Liczba złączeń bez użycia indeksów gdy możliwość ich użycia była sprawdzana dla każdego rekordu. (Wartość różna od 0 sugeruje staranne przyjrzenie się indeksom tabel.)';
$strShowStatusSelect_rangeDescr = 'Liczba złączeń w których użyto zakresów w stosunku do pierwszej tabeli. (Nawet duża wartość nie ma kluczowego znaczenia.)';
$strShowStatusSelect_scanDescr = 'Liczba złączeń, które przeszukały w pełni pierwszą tabelę.';
$strShowStatusSlave_open_temp_tablesDescr = 'Liczba tymczasowych tabel aktualnie otwartych przez podrzędny wątek SQL.';
$strShowStatusSlave_retried_transactionsDescr = 'Ile raz łącznie (od startu) podrzędny wątek SQL replikacji ponawiał transakcje.';
$strShowStatusSlave_runningDescr = 'ON oznacza, że ten serwer jest podrzędny i jest podłączony go serwera głównego.';
$strShowStatusSlow_launch_threadsDescr = 'Liczba wątków, których utworzenie trwało dłużej niż slow_launch_time sekund.';
$strShowStatusSlow_queriesDescr = 'Liczba zapytań, których wykonanie zajęło więcej niż long_query_time sekund.';
$strShowStatusSort_merge_passesDescr = 'Liczba przebiegów scalania, które musiał wykonać algorytm sortujący. Przy dużej wartości, warto wziąć pod uwagę zwiększenie wartości zmiennej systemowej sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Liczba sortować wykonanych przy użyciu zakresów.';
$strShowStatusSort_rowsDescr = 'Liczba posortowanych rekordów.';
$strShowStatusSort_scanDescr = 'Liczba sortowań wykonanych poprzez przeszukiwanie tabeli.';
$strShowStatusTable_locks_immediateDescr = 'Ile razy blokada tabeli została uzyskana natychmiastowo.';
$strShowStatusTable_locks_waitedDescr = 'Ile razy blokada tabeli nie mogła zostać uzyskana natychmiastowo i niezbędne było oczekiwanie. Przy wysoka wartość oraz problemach z wydajnością powinno się najpierw zoptymalizować zapytania, a następnie podzielić tabelę (tabele) lub użyć replikacji.';
$strShowStatusThreads_cachedDescr = 'Liczba wątków w buforze podręcznym wątków. Współczynnik trafienia w bufor może być wyliczony ze wzoru Threads_created/Connections. Kolor czerwony oznacza, że powinno się zwiększyć thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Liczba aktualnie otwartych połączeń.';
$strShowStatusThreads_createdDescr = 'Liczba wątków utworzonych by obsłużyć połączenia. Jeżeli wartość Threads_created jest duża, można chcieć zwiększyć wartość thread_cache_size. (W przypadku dobrej implementacja wątków zwykle nie daje to zauważalnego polepszenia wydajności.)';
$strShowStatusThreads_runningDescr = 'Liczba nieuśpionych wątków.';
$strShowTableDimension = 'Pokaż wymiary tabel';
$strShowTables = 'Pokaż tabele';
$strShowThisQuery = ' Wywołaj ponownie zapytanie ';
$strSimplifiedChinese = 'Chiński uproszczony';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSkipQueries = 'Liczba rekordów (zapytań), które należy z początku pominąć';
$strSlovak = 'Słowacki';
$strSlovenian = 'Słoweński';
$strSocketProblem = '(lub gniazdo lokalnego serwera MySQL nie jest skonfigurowane poprawnie)';
$strSortByKey = 'Sortuj wg klucza';
$strSorting = 'Sortowanie';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSpanish = 'Hiszpański';
$strSplitWordsWithSpace = 'Słowa są rozdzielane znakiem spacji (" ").';
$strSQLCompatibility = 'Tryb zgodności SQL';
$strSQLExportType = 'Rodzaj eksportu';
$strSQLParserBugMessage = 'Istnieje szansa, że właśnie znaleziono błąd w analizatorze składni SQL. Proszę zbadać bliżej swoje zapytanie i sprawdzić, czy cudzysłowy są poprawne i dobrze sparowane. Inną możliwą przyczyną niepowodzenia może być wysyłanie pliku ze znakami binarnymi poza obszarem tekstu ujętego w cudzysłowy. Można również sprawdzić zapytanie SQL poprzez linię poleceń MySQL-a. W znalezieniu przyczyny problemu może pomóc także - jeśli się pojawi - poniższy opis błędu serwera MySQL. Jeśli nadal występują z problemy lub analizator składni zgłasza usterkę a linia poleceń - nie, ogranicz sekwencję zapytań SQL do pojedynczego, które powoduje problemy i zgłoś błąd, dołączając fragment danych zawarty w poniższej sekcji TNIJ:';
$strSQLParserUserError = 'Wygląda na to, że w twoim zapytaniu SQL jest błąd. W znalezieniu przyczyny problemu może pomóc także - jeśli się pojawi - poniższy opis błędu serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Nieprawidłowy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamknięty cudzysłów';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strStatCheckTime = 'Ostatnie sprawdzenie';
$strStatCreateTime = 'Utworzenie';
$strStatement = 'Cecha';
$strStatisticsOverrun = 'Na aktywnym serwerze liczniki bajtów mogą się przekręcić, więc statystyki jakich dostarcza serwer MySQL nie są wiarygodne.';
$strStatUpdateTime = 'Ostatnia aktualizacja';
$strStatus = 'Status';
$strStorageEngine = 'Mechanizm składowania';
$strStorageEngines = 'Mechanizmy składowania';
$strStrucCSV = 'Dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucNativeExcel = 'Dane w formacie macierzystym MS Excela';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Analiza zawartości';
$strStructure = 'Struktura';
$strSubmit = 'Wyślij';
$strSuccess = 'Zapytanie SQL zostało wykonane pomyślnie';
$strSum = 'Suma';
$strSwedish = 'Szwedzki';
$strSwitchToDatabase = 'Przełącz do skopiowanej bazy danych';
$strSwitchToTable = 'Przełącz na skopiowaną tabelę';

$strTableAlreadyExists = 'Tabela %s już istnieje!';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s została usunięta';
$strTableHasBeenEmptied = 'Tabela %s została opróżniona';
$strTableHasBeenFlushed = 'Tabela %s została przeładowana';
$strTableMaintenance = 'Zarządzanie tabelą';
$strTableOfContents = 'Spis treści';
$strTableOptions = 'Opcje tabeli';
$strTables = '%s tabel(a)';
$strTableStructure = 'Struktura tabeli dla ';
$strTable = 'Tabela';
$strTakeIt = 'użyj';
$strTblPrivileges = 'Uprawnienia specyficzne dla tabel';
$strTempData = 'Dane tymczasowe';
$strTextAreaLength = ' To pole może nie dać się edytować<br /> z powodu swojej długości ';
$strThai = 'Tajski';
$strThemeDefaultNotFound = 'Nie znaleziono domyślnego motywu graficznego %s!';
$strTheme = 'Motyw graficzny / styl';
$strThemeNoPreviewAvailable = 'Podgląd niedostępny.';
$strThemeNotFound = 'Nie znaleziono motywu graficznego %s!';
$strThemeNoValidImgPath = 'Nie znaleziono prawidłowej ścieżki do obrazka dla motywu graficznego %s!';
$strThemePathNotFound = 'Nie znaleziono ścieżki do motywu %s!';
$strThisHost = 'Ten host';
$strThreadSuccessfullyKilled = 'Wątek %s został pomyślnie unicestwiony.';
$strThreads = 'Wątki';
$strTime = 'Czas';
$strTimeoutInfo = 'Poprzedni import przekroczył limit czasu, ponowne przedłożenie tego pliku  spowoduje kontynuacje od miejsca %d.';
$strTimeoutNothingParsed = 'Jednakże, podczas ostatniego uruchomienia nie zostały przetworzone żadne dane, co zwykle oznacza, że phpMyAdmin nie będzie w stanie ukończyć tego importu bez zwiększenia limitów czasowych PHP.';
$strTimeoutPassed = 'Limit czasu wykonania skryptu minął; aby ukończyć import, proszę przedłożyć ten sam plik a import zostanie wznowiony.';
$strToggleScratchboard = 'włącz / wyłącz scratchboard';
$strTotalUC = 'Sumarycznie';
$strTotal = 'wszystkich';
$strTraditionalChinese = 'Chiński tradycyjny';
$strTraditionalSpanish = 'Tradycyjny hiszpański';
$strTraffic = 'Ruch';
$strTransactionCoordinator = 'Koordynator transakcji';
$strTransformation_application_octetstream__download = 'Wyświetla link do ściągnięcia binarnych danych z tego pola. Pierwsza opcja to nazwa pliku binarnego. Drugą opcją jest możliwa nazwa pola zawierającego nazwę pliku. Jeżeli dana jest druga opcja, pierwsza musi być pustym napisem';
$strTransformation_application_octetstream__hex = 'Wyświetla szesnastkową reprezentację danych. Opcjonalny pierwszy parametr określa jak często dodawane będą spacje (domyślnie: co 2 półbajty).';
$strTransformation_image_jpeg__inline = 'Wyświetla klikalną miniaturkę; opcje: szerokość,wysokość w pikselach (oryginalne proporcje zostaną zachowane)';
$strTransformation_image_jpeg__link = 'Wyświetla link do tego obrazu (bezpośrednie ściągnięcie bloba).';
$strTransformation_image_png__inline = 'Zobacz image/jpeg: inline';
$strTransformation_text_plain__external = 'TYLKO LINUX: Uruchamia zewnętrzną aplikację i przekazuje dane pól na standardowe wejście. Zwraca standardowe wyjście tej aplikacji. Domyślnie jest to Tidy, którzy porządkuje kod HTML. Ze względu na bezpieczeństwo, należy ręcznie zmodyfikować plik libraries/transformations/text_plain__external.inc.php i dodać narzędzie, na którego uruchamianie pozwalasz. Pierwszą opcją jest liczba programów, których chcesz użyć, a drugą są parametry programu. Jeżeli trzeci parametr jest ustawiony na 1, zostanie dokonana konwersja wyjścia poprzez użycie htmlspecialchars() (Domyślną wartością jest 1). Jeżeli czwarty parametr został ustawiony na 1, zawartość komórki nie będzie zawijana, tak że całe wyjście zostanie pokazane bez zmian formatu (domyślną wartością jest 1)';
$strTransformation_text_plain__formatted = 'Zachowuje oryginalne formatowanie pola. Neutralizowanie znaków niespecjalnych nie jest dokonywane.';
$strTransformation_text_plain__imagelink = 'Wyświetla obrazek i link, pole zawiera nazwę pliku; pierwszą opcję jest prefiks, taki jak "http://domena.com/", drugą opcją jest szerokość w pikselach, trzecią opcją jest wysokość.';
$strTransformation_text_plain__link = 'Wyświetla link, pole zawiera nazwę pliku; pierwsza opcja to prefiks, taki jak "http://domena.com/", druga opcja to tytuł linku.';
$strTransformation_text_plain__sql = 'Formatuj tekst traktując jako zapytanie SQL z podświetlaniem składni.';
$strTransformation_text_plain__substr = 'Pokazuje jedynie część napisu. Pierwsza opcja to offset, od którego ma zacząć się wyświetlanie tekstu (domyślnie 0). Druga opcja to ilość zwracanego tekstu. Jeżeli jest pusta, zwracany jest cały pozostały tekst. Trzecia opcja określa jakie znaki zostaną dodane do wyjścia, jeżeli zwracany jest część napisu (domyślnie: ...) .';
$strTruncateQueries = 'Ucinaj wyświetlane zapytania';
$strTurkish = 'Turecki';
$strType = 'Typ';

$strUkrainian = 'Ukraiński';
$strUncheckAll = 'Odznacz wszystkie';
$strUnicode = 'Unikod';
$strUnique = 'Jednoznaczny';
$strUnknown = 'nieznany';
$strUnselectAll = 'Odznacz wszystkie';
$strUnsupportedCompressionDetected = 'Próbowano wczytać plik z nieobsługiwanym typem kompresji (%s). Albo jego obsługa nie została zaimplementowana albo została konfiguracyjnie wyłączona.';
$strUpdatePrivMessage = 'Uaktualniłeś uprawnienia dla %s.';
$strUpdateProfileMessage = 'Profil został uaktualniony.';
$strUpdateQuery = 'Zmień zapytanie';
$strUpdComTab = 'Informacje o tym, jak zaktualizować tabelę Column_comments znajdują się w dokumentacji';
$strUpgrade = 'Poleca się aktualizację do %s w wersji %s lub późniejszej.';
$strUploadLimit = 'Prawdopodobnie próbowano wrzucić duży plik. Aby poznać sposoby obejścia tego limitu, proszę zapoznać się z %sdokumenacją%s.';
$strUploadsNotAllowed = 'Serwer nie pozwala na upload plików.';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'Użyj cudzysłowów z nazwami tabel i pól';
$strUsedPhpExtensions = 'Używane rozszerzenia PHP';
$strUseHostTable = 'Użyj tabeli hostów';
$strUserAlreadyExists = 'Użytkownik %s już istnieje!';
$strUserEmpty = 'Brak nazwy użytkownika!';
$strUserName = 'Nazwa użytkownika';
$strUserNotFound = 'Wybrany użytkownik nie został znaleziony w tabeli uprawnień.';
$strUserOverview = 'Opis użytkownika';
$strUsersDeleted = 'Wybrani użytkownicy zostali pomyślnie usunięci.';
$strUsersHavingAccessToDb = 'Użytkownicy mający dostęp do &quot;%s&quot;';
$strUser = 'Użytkownik';
$strUseTabKey = 'Klawisz TAB przemieszcza pomiędzy wartościami, CTRL+strzałka przenosi w dowolne miejsce';
$strUseTables = 'Użyj tabel';
$strUseTextField = 'Użyj pola tekstowego';
$strUseThisValue = 'Użyj tej wartości';

$strValidateSQL = 'Sprawdź poprawność SQL';
$strValidatorError = 'Analizator składni SQL nie mógł zostać zainicjowany. Sprawdź, czy zainstalowane są niezbędne rozszerzenia PHP, tak jak zostało to opisane w %sdokumentacji%s.';
$strValue = 'Wartość';
$strVar = 'Zmienna';
$strVersionInformation = 'Informacja o wersji';
$strViewDumpDatabases = 'Zrzut baz danych';
$strViewDumpDB = 'Zrzut bazy danych';
$strViewDump = 'Zrzut tabeli';
$strViewHasBeenDropped = 'Perspektywa %s została usunięta';
$strViewMaxExactCount = 'Perspektywa ma ponad %d rekordów. Proszę zajrzeć do %sdokumentacji%s.';
$strView = 'Perspektywa';

$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosiągalny';
$strWebServerUploadDirectory = 'katalog serwera WWW dla uploadu';
$strWelcome = 'Witamy w %s';
$strWestEuropean = 'Zachodnioeuropejski';
$strWildcard = 'znak wieloznaczny';
$strWindowNotFound = 'Docelowe okno przeglądarki nie mogło być zaktualizowane. Być może okno-rodzic zostało zamknięte lub przeglądarka, uwzględniając ustawienia bezpieczeństwa, blokuje aktualizacje pomiędzy oknami';
$strWithChecked = 'Zaznaczone:';
$strWriteRequests = 'Żądań zapisu';
$strWrongUser = 'Błędne pola użytkownik/hasło. Brak dostępu.';

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
