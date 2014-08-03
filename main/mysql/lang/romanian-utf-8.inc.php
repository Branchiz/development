<?php
/* $Id: romanian-utf-8.inc.php 11213 2008-04-23 17:13:43Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Octeți', 'KO', 'MO', 'GO', 'TO', 'PO', 'EO');

$day_of_week = array('Du', 'Lu', 'Ma', 'Mi', 'Jo', 'Vi', 'Sî');
$month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Noi', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s zile, %s ore, %s minute și %s secunde';

$strAbortedClients = 'Întrerupt';
$strAccessDenied = 'Acces interzis';
$strAccessDeniedExplanation = 'phpMyAdmin a încercat să se conecteze la serverul MySQL, dar acesta a respins conexiunea. Ar trebui verificat dacă datele din config.inc.php sînt corecte.';
$strAction = 'Acțiune';
$strAddAutoIncrement = 'Adaugă valoare pentru AUTO_INCREMENT';
$strAddClause = 'Adăugare %s';
$strAddConstraints = 'Adaugă constrîngere';
$strAddDeleteColumn = 'Adaugă/șterge coloane';
$strAddDeleteRow = 'Adaugă/șterge criteriu';
$strAddFields = 'Adaugă %s cîmp(uri)';
$strAddHeaderComment = 'Adăugare comentariu la antet (\\n înseamnă delimitare de rînd)';
$strAddIntoComments = 'Adăugare la comentarii';
$strAddNewField = 'Adaugă cîmp nou';
$strAddPrivilegesOnDb = 'Adaugă drepturi la baza de date următoare';
$strAddPrivilegesOnTbl = 'Adaugă drepturi la următorul tabel';
$strAddSearchConditions = 'Adaugă condiție de căutare (parte a comenzii "where"):';
$strAddToIndex = 'Adaugă la coloana(ele) index &nbsp;%s&nbsp;';
$strAddUser = 'Adaugă un utilizator nou';
$strAddUserMessage = 'Ați adăugat un nou utilizator.';
$strAdministration = 'Administrare';
$strAffectedRows = 'Linii afectate:';
$strAfter = 'După %s';
$strAfterInsertBack = 'Revenire';
$strAfterInsertNewInsert = 'Adaugă o nouă înregistrare';
$strAfterInsertNext = 'Editează rîndul următor';
$strAfterInsertSame = 'Înapoi la această pagină';
$strAllTableSameWidth = 'Arată toate tabelele cu aceeaăi mărime?';
$strAll = 'Toate';
$strAlterOrderBy = 'Alterare „ordonare tabel după”';
$strAnalyzeTable = 'Analizare tabel';
$strAnd = 'Şi';
$strAndThen = 'și apoi';  
$strAngularLinks = 'Legături unghiulare';
$strAnIndex = 'A fost adăugat un index la %s';
$strAnyHost = 'Oricare gazdă';
$strAny = 'Oricare';
$strAnyUser = 'Oricare utilizator';
$strApproximateCount = 'Poate fi aproximativ. Vezi FAQ 3.11';
$strAPrimaryKey = 'A fost adăugată o cheie primară la %s';
$strArabic = 'Arab';
$strArmenian = 'Armean';
$strAscending = 'Crescătoare';
$strAtBeginningOfTable = 'La începutul tabelului';
$strAtEndOfTable = 'La sfîrșitul tabelului';
$strAttr = 'Proprietăți';
$strAutomaticLayout = 'Așezare automată';

$strBack = 'Înapoi';
$strBaltic = 'Baltic';
$strBeginCut = 'DE TĂIAT - ÎNCEPUT';
$strBeginRaw = 'ÎNCEPUT RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Binar - a nu se edita';
$strBinaryLog = 'Binary log';
$strBinLogEventType = 'Tip eveniment';
$strBinLogInfo = 'Informație';
$strBinLogName = 'Denumire jurnal';
$strBinLogOriginalPosition = 'Pozitie originală';
$strBinLogPosition = 'Poziție';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Permite tuturor utilizatorilor să acceseze această filă de carte';
$strBookmarkDeleted = 'Eticheta a fost ștearsă.';
$strBookmarkLabel = 'Etichetă';
$strBookmarkQuery = 'Comandă SQL salvată';
$strBookmarkThis = 'Pune semn de carte la această comandă SQL';
$strBookmarkView = 'Numai vizualizare';
$strBrowseForeignValues = 'Caută printre valori necunoscute';
$strBrowse = 'Navigare';
$strBulgarian = 'Bulgar';
$strBzError = 'phpMyAdmin nu a reusit sa compreseze acest dump din cauza unei extensii Bz2 invalide in aceasta versiune php. Va recomandam sa setati directiva <code>$cfg[\'BZipDump\']</code> in in fisierul de configurare phpMyAdmin la <code>FALSE</code>. Daca doriti sa utilizati caracteristicile de compresie Bz2 va trebui sa upgradati la o versiune mai noua de php.  Pentru detalii revedeti raportul de erori php %s.';
$strBzip = '"bzipped"';

$strCalendar = 'Calendar';
$strCancel = 'Renunță';
$strCannotLogin = 'Nu pot face conexiunea catre serverul MySQL';
$strCantLoad = 'nu se poate incarca %s extensia,<br />va rugam verificati configuratia PHP.';
$strCantLoadRecodeIconv = 'Nu pot incarca extensia iconv sau recode necesar pentru conversia de caractere, configureaza PHP pentru a permite folosirea acestor extensii sau dezactiveaza conversia de caractere din phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Nu poti redenumi index-ul la un nume PRIMARY!';
$strCantUseRecodeIconv = 'Nu pot folosi funcțiile iconv nici libiconv nici recode_string în timp ce extensia este incarcata. Verifica configuratia PHP.';
$strCardinality = 'Cardinalitate';
$strCaseInsensitive = 'insensibil la registru';
$strCaseSensitive = 'sensibil la registru';
$strCentralEuropean = 'European de est';
$strChangeCopyModeCopy = '... menține cel vechi.';
$strChangeCopyMode = 'Creează un utilizator nou cu aceleași privilegii și...';
$strChangeCopyModeDeleteAndReload = ' ... șterge cel vechi din tabelul de utilizatori și reîncarcă privilegiile.';
$strChangeCopyModeJustDelete = ' ... șterge cel vechi din tabelul de utilizatori.';
$strChangeCopyModeRevoke = ' ...revocă toate privilegiile active de la utilizatorul vechi și șterge-l după aceea.';
$strChangeCopyUser = 'Schimbă informațiile de autentificare/Copiază utilizator';
$strChangeDisplay = 'Selectează un cîmp';
$strChangePassword = 'Schimbare parolă';
$strChange = 'Schimbare';
$strCharsetOfFile = 'Setul de caractere al fișierului:';
$strCharsetsAndCollations = 'Set de caractere și gestiunea acestora';
$strCharset = 'Set de caractere';
$strCharsets = 'Seturi de caractere';
$strCheckAll = 'Marchează toate';
$strCheckOverhead = 'Verificare depășit';
$strCheckPrivsLong = 'Verifică privilegiile pentru baza de date &quot;%s&quot;.';
$strCheckPrivs = 'Verifică privilegiile';
$strCheckTable = 'Verificare tabel';
$strChoosePage = 'Selectează o pagină pentru a fi editată';
$strColComFeat = 'Arată comentariile coloanei';
$strCollation = 'Gestionare';
$strColumnNames = 'Numele coloanelor';
$strColumnPrivileges = 'Drepturi specifice coloanei';
$strCommand = 'Comanda';
$strComments = 'Comentarii';
$strCommentsForTable = 'COMENTARII PENTRU TABEL';
$strCompatibleHashing = 'Compatibil MySQL&nbsp;4.0';
$strCompleteInserts = 'Rezolvă inserarea';
$strCompression = 'Compresie';
$strConfigFileError = 'phpMyAdmin nu poate citi corect fisierul de configuratie!  <br />Acesta se poate intampla in cazul in care PHP nu poate gasi fisierul sau nu o poate parsa corect.  <br />Vezi configuratia fisierului apasand pe linkul de mai jos și citeste cu atentie erorile aparute ...  In cele mai multe cazuri lipsesc apostroful sau ghilimele.<br />Daca primesti o pagina goala, totul pare sa fie bine.';
$strConfigureTableCoord = 'Configureaza coordonatelepentru tabelul %s';
$strConnectionError = 'Conexiune esuata: setari invalide.';
$strConnections = 'Conexiuni';
$strConstraintsForDumped = 'Restrictii pentru tabele sterse';
$strConstraintsForTable = 'Restrictii pentru tabele';
$strCookiesRequired = 'Trebuie sa aveti activat "cookies".';
$strCopy = 'Copere';
$strCopyDatabaseOK = 'Baza de date %s a fost copiata la %s';
$strCopyTable = 'Copiază tabelul la (bază_de_date<b>.</b>tabel):';
$strCopyTableOK = 'Tabelul %s a fost copiat la %s.';
$strCopyTableSameNames = 'Nu se poate copia tabelul pe cel existent pentru ca este acelasi';
$strCouldNotKill = 'phpMyAdmin n-a reusit sa opreasca firul de executie %s.  Probabil a fost deja oprit.';
$strCreate = 'Creează';
$strCreateIndex = 'Creează un index pe&nbsp;%s&nbsp;coloană';
$strCreateIndexTopic = 'Creează un nou index';
$strCreateNewDatabase = 'Creează bază de date nouă';
$strCreateNewTable = 'Creează tabel nou în baza de date %s';
$strCreatePage = 'Creează o nouă pagină';
$strCreatePdfFeat = 'Creare PDF';
$strCreateRelation = 'Creare relație';
$strCreateTable  = 'Creare tabel';
$strCreateUserDatabase = 'Bază de date pentru utilizatorul';
$strCreateUserDatabaseNone = 'Nici una';
$strCreationDates = 'Creare/reînnoire/verificare date';
$strCriteria = 'Criteriu';
$strCroatian = 'Croat';
$strCSV = 'CSV';
$strCyrillic = 'Chirilic';
$strCzech = 'Ceh';
$strCzechSlovak = 'Cehoslovac';

$strDanish = 'Danez';
$strDatabase = 'Baza de date';
$strDatabaseEmpty = 'Cîmpul de denumire al bazei de date este gol!';
$strDatabaseExportOptions = 'Opțiuni de exportare a bazei de date';
$strDatabaseHasBeenDropped = 'Baza de date %s a fost aruncată.';
$strDatabases = 'Baze de date';
$strDatabasesDropped = '%s baza(ele) de data(e) au fost aruncate.';
$strDatabasesStatsDisable = 'Dezactivează statisticile';
$strDatabasesStatsEnable = 'Activează statisticile';
$strDatabasesStatsHeavyTraffic = 'Notă: Activarea statisticilor pentru baza de date poate cauza creșterea traficului între MySQL și serverul Web.';
$strDatabasesStats = 'Statisticile bazelor de date';
$strData = 'Date';
$strDataDict = 'Dicționar de date';
$strDataOnly = 'Numai date';
$strDataPages = 'Pagini ce conțin date';
$strDBComment = 'Comentarii referitoare la baza de date: ';
$strDBCopy = 'Copiază baza de date';
$strDbIsEmpty = 'Baza de date pare a fi goală!';
$strDbPrivileges = 'Drepturi specifice bazei de date';
$strDBRename = 'Redenumire bază de date în';
$strDbSpecific = 'specific bazei de date';
$strDefaultEngine = '%s este motorul de stocare stabilit implicit pe acest server MySQL.';
$strDefault = 'Setare de bază';
$strDefaultValueHelp = 'Pentru valorile implicite, vă rugăm să introduceți o singură valoare, fără backslash, escape sau ghilimele, folosind formatul: a';
$strDefragment = 'Defragmentare tabel';
$strDelayedInserts = 'Folosește inserări întîrziate';
$strDeleteAndFlushDescr = 'Este cea mai simplă metodă, dar reîncărcarea drepturilor s-ar putea să dureze.';
$strDeleteAndFlush = 'Șterge utilizatorii și reîncarcă drepturile pe urmă.';
$strDeleted = 'Linia a fost ștearsă';
$strDeletedRows = 'Rînduri șterse:';
$strDeleteNoUsersSelected = 'Nici un utilizator ales pentru ștergere!';
$strDeleteRelation = 'Șterge relația';
$strDelete = 'Șterge';
$strDeleting = 'Șterge %s';
$strDelimiter = 'Delimitator';
$strDelOld = 'Pagina curentă se leagă de tabele care nu mai există. Doriți ștergerea acestor legături?';
$strDescending = 'Descrescător';
$strDescription = 'Descriere';
$strDictionary = 'dicționar';
$strDirectLinks = 'Legături directe';
$strDirtyPages = 'Pagini murdare';
$strDisabled = 'Dezactivat';
$strDisableForeignChecks = 'Dezactivare verificări de cheie străine';
$strDisplayFeat = 'Arată facilitățile';
$strDisplayOrder = 'Ordine de afișare:';
$strDisplayPDF = 'Arată schema PDF';
$strDoAQuery = 'Execută o interogare prin exemplu (metacaracter: "%")';
$strDocSQL = 'DocSQL'; 
$strDocu = 'Documentație';
$strDoYouReally = 'Sigur doriți să ';
$strDrop = 'Aruncă';
$strDropDatabaseStrongWarning = 'Sînteți pe cale să DISTRUGEȚI o întreagă bază de date!';
$strDropUsersDb = 'Aruncă baza de date care are același nume ca utilizatorul.';
$strDumpingData = 'Salvarea datelor din tabel';
$strDumpSaved = 'Copia a fost salvată în fișierul %s.';
$strDumpXRows = 'Aruncă %s rînduri, începînd de la rîndul %s.';
$strDynamic = 'dinamic';

$strEdit = 'Editare';
$strEditPDFPages = 'Editează paginile PDF';
$strEditPrivileges = 'Editează drepturile de acces';
$strEffective = 'Efectiv';
$strEmpty = 'Golește';
$strEmptyResultSet = 'MySQL a dat un set de rezultate gol (zero linii).';
$strEnabled = 'Activat';
$strEncloseInTransaction = 'Cuprinde exportarea într-o tranzacție';
$strEndCut = 'DE TĂIAT - SFÎRȘIT';
$strEndRaw = 'SFÎRȘIT BRUT';
$strEnd = 'Sfîrșit';
$strEngineAvailable = '%s este disponibil pentru acest server MySQL.';
$strEngineDisabled = '%s a fost dezactivat pentru acest server MySQL.';
$strEngines = 'Motoare';
$strEngineUnsupported = 'Acest server MySQL nu susține motorul de stocare %s.';
$strEnglish = 'Englez';
$strEnglishPrivileges = ' Important: numele drepturilor de acces MySQL apar în engleză';
$strError = 'Eroare';
$strErrorInZipFile = 'Eroare în arhiva ZIP:';
$strErrorRenamingTable = 'Eroare la redenumirea tabelului %1$s în %2$s';
$strEscapeWildcards = 'Metacaracterele _ și % trebuiesc însoțite de \ pentru a le aplica';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonian';
$strEvent = 'Eveniment';
$strExcelEdition = 'Ediția Excel';
$strExecuteBookmarked = 'Executare comandă marcată';
$strExplain = 'Explică SQL';
$strExport = 'Export';
$strExtendedInserts = 'Inserări extinse';
$strExtra = 'Extra';

$strFailedAttempts = 'Încercări nereușite';
$strField = 'Cîmp';
$strFieldHasBeenDropped = 'Cîmpul %s a fost aruncat';
$strFields = 'Cîmpuri';
$strFieldsEnclosedBy = 'Cîmpuri încadrate de';
$strFieldsEscapedBy = 'Cîmpuri realizate de';
$strFieldsTerminatedBy = 'Cîmpuri terminate de';
$strFileAlreadyExists = 'Fișierul %s există deja pe server. Schimbați denumirea fișierului sau bifați opțiunea de suprascriere.';
$strFileCouldNotBeRead = 'Fișierul nu poate fi citit';
$strFileNameTemplateDescriptionDatabase = 'nume bază de date';
$strFileNameTemplateDescriptionServer = 'nume server';
$strFileNameTemplateDescriptionTable = 'nume tabel';
$strFileNameTemplateRemember = 'ține minte șablonul';
$strFileNameTemplate = 'Șablon nume fișier';
$strFiles = 'Fișiere';
$strFileToImport = 'Fișier de importat';
$strFixed = 'fixat';
$strFlushPrivilegesNote = 'Notă: phpMyAdmin folosește privilegiile utilizatorilor direct din tabelul de privilegii din MySQL. Conținutul acestui tabel poate diferi de cel original. În acest caz, reîncărcați de aici înainte de a continua %sreîncărcarea drepturilor%s.';
$strFlushQueryCache = 'Reinițializare cache interogare';
$strFlushTable = 'Curățarea tabelului ("FLUSH")';
$strFontSize = 'Dimensiune font';
$strFormat = 'Format';
$strFormEmpty = 'Valoarea lipsește în formular !';
$strFreePages = 'Pagini libere';
$strFullText = 'Texte întregi';
$strFunction = 'Funcție';
$strFunctions = 'Funcții';

$strGenBy = 'Generat de';
$strGeneralRelationFeat = 'Facilități generale';
$strGenerate = 'Generează';
$strGeneratePassword = 'Generează parolă';
$strGenTime = 'Timp de generare';
$strGeorgian = 'Georgian';
$strGerman = 'German';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegii globale';
$strGlobalValue = 'Valoare globală';
$strGo = 'Execută';
$strGrantOption = 'Permite';
$strGreek = 'Grec';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'a fost alterat.';
$strHasBeenCreated = 'a fost creat.';
$strHaveToShow = 'Trebuie să alegeți cel puțin o coloană pentru a putea afișa';
$strHebrew = 'Ebraică';
$strHelp = 'Ajutor'; 
$strHide         = 'Ascunde';
$strHideShowAll = 'Arată/ascunde toate';
$strHideShowNoRelation = 'Arată/ascunde tabele fără realție';
$strHomepageOfficial = 'Pagina oficială phpMyAdmin';
$strHome = 'Pagina de pornire';
$strHostEmpty = 'Numele gazdei este gol!';
$strHost = 'Gazda';
$strHTMLExcel = 'Microsoft Excel 2000'; 
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Maghiar';

$strIcelandic = 'Islandez';
$strId = 'ID';
$strIdxFulltext = 'Tot textul';
$strIgnoreDuplicates = 'Ignoră rînduri duplicate';
$strIgnore = 'Ignoră';
$strIgnoreInserts = 'Utilizați ignorare inserări';
$strImportFiles = 'Import fișiere';
$strImportFormat = 'Formatul fișierului importat';
$strImport = 'Import';
$strIndexes = 'Indexuri';
$strIndexHasBeenDropped = 'Indexul %s a fost aruncat';
$strIndex = 'Index';
$strIndexName = 'Nume index&nbsp;:';
$strIndexType = 'Tip index&nbsp;:';
$strIndexWarningTable = 'Probleme cu indexul tabelului `%s`';
$strInnoDBPages = 'pagini';
$strInnoDBRelationAdded = 'Relație InnoDB adăugată';
$strInnodbStat = 'Stare InnoDB';
$strInsecureMySQL = 'Configurarea conține setările de bază (utilizator root fără parolă). Serverul MySQL poate fi astfel vulnerabil. Reparați neapărat această greșeală.';
$strInsertAsNewRow = 'Inserează ca o nouă linie';
$strInsertedRowId = 'ID rînd inserat:';
$strInsertedRows = 'rînduri inserate:';
$strInsert = 'Inserare';
$strInternalNotNecessary = '* Nu se cere o relație internă în cazul în care există și în InnoDB.';
$strInternalRelationAdded = 'Relație internă adăugată';
$strInternalRelations = 'Relații interne';
$strInUse = 'în folosință';
$strInvalidDatabase = 'Bază de date nevalidă';
$strInvalidTableName = 'Denumire de tabel nevalidă';

$strJapanese = 'Japonez';
$strJoins = 'Joncțiuni';
$strJumpToDB = 'Sari la baza de date &quot;%s&quot;.';
$strJustDeleteDescr = 'Utilizatorii &quot;stersi&quot; vor avea acces la server la fel ca pînă acum, pînă cînd drepturile sînt reîncărcate.';
$strJustDelete = 'Șterge utilizatorii din tabelele de drepturi.';

$strKeepPass = 'Nu schimbați parola';
$strKeyname = 'Nume cheie';
$strKill = 'Oprește';
$strKorean = 'Coreean';

$strLandscape = 'Portret';
$strLanguage = 'Limbă';
$strLatexCaption = 'Captură tabel';
$strLatexContent = 'Conținutul tabelului __TABLE__';
$strLatexContinuedCaption = 'Continuare captură tabel';
$strLatexContinued = '(continuare)';
$strLatexIncludeCaption = 'Include captură tabel';
$strLatexLabel = 'Tasta label';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structura tabelului __TABLE__';
$strLatvian = 'Leton';
$strLengthSet = 'Lungime/Setare';
$strLimitNumRows = 'Numărul de înregistrări pe pagină';
$strLinesTerminatedBy = 'Linii terminate de';
$strLinkNotFound = 'Legatură nevalidă';
$strLinksTo = 'Trimitere la';
$strLithuanian = 'Lituanian';
$strLocalhost = 'Local';
$strLocationTextfile = 'Locația fișierului textual';
$strLogin = 'Autentificare';
$strLoginInformation = 'Informații de autentificare';
$strLogout = 'Deconectare';
$strLogPassword = 'Parolă:';
$strLogServer = 'Server';
$strLogUsername = 'Nume utilizator:';
$strLongOperation = 'Această operație poate dura. Doriți totuși să fie executată?';

$strMaximumSize = 'Mărime maximă: %s%s';
$strMbExtensionMissing = 'Nu s-a găsit extensia PHP mbstring și se pare ca folosiți un set de charactere multi-octet. Fără extensia mbstring, phpMyAdmin nu poate diviza șirurile corect și aceasta poate duce la rezultate neașteptate.';
$strMbOverloadWarning = 'Ați activat mbstring.func_overload în configurația PHP. Această opțiune nu este compatibilă cu phpMyAdmin și poate duce la pierderea unor date!';
$strMIME_available_mime = 'Tipuri MIME disponibile';
$strMIME_available_transform = 'Informații disponibile';
$strMIME_description = 'Descriere';
$strMIME_MIMEtype = 'Tip MIME';
$strMIME_nodescription = 'Nu este disponibilă nici o descriere pentru această transformare.<br />Întrebați autorul de funcțiile îndeplinite de %s.';
$strMIME_transformation_note = 'Pentru lista opțiunilor de transformare disponibile și transformările MIME-type, apăsați pe %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Introduceți valorile pentru opțiunile de transformare utilizînd acest format: \'a\', 100, b,\'c\'...<br />Dacă trebuie să folosiți backslash ("\") sau apostrof  ("\'") in aceste valori, introduceți backslash-uri (ex. \'\\\\xyz\' sau \'a\\\'b\').';
$strMIME_transformation_options = 'Opțiuni de transformare';
$strMIME_transformation = 'Transformare navigator';
$strMIMETypesForTable = 'TIPURI MIME PENTRU TABEL';
$strMIME_without = 'Tipurile MIME enumerate cursiv nu au o funcție de transformare separată';
$strModifications = 'Modificările au fost salvate';
$strModifyIndexTopic = 'Modifică un index';
$strModify = 'Modificare';
$strMoveMenu = 'Mutare meniu';
$strMoveTable = 'Muta tabelul la (bază_de_date<b>.</b>tabel):';
$strMoveTableOK = 'Tabelul %s a fost mutat la %s.';
$strMoveTableSameNames = 'Nu se poate copia tabelul peste cel existent pentru că este același!';
$strMultilingual = 'Poliglot';
$strMyISAMDataPointerSizeDesc = 'Marimea pointerului implicit (in octeți), care este folosit de CREATE TABLE pentru tabelele MyISAM atunci cînd nu este specificată nici o opțiune MAX_ROWS.';
$strMyISAMDataPointerSize = 'Mărime pointer date';
$strMyISAMMaxExtraSortFileSizeDesc = 'Dacă fișierul temporar utilizat pentru crearea rapidă a indexului MyISAM ar fi mai mare decît dacă s-ar utiliza cache-ul de chei. Se preferă utilizarea metodei „cache chei”.';
$strMyISAMMaxExtraSortFileSize = 'Marimea maximă pentru fișierele temporare la crearea indexului';
$strMyISAMMaxSortFileSizeDesc = 'Marimea maximă pentru fișierul temporar, permisa în MySQL în timpul recreării unui index MyISAM (în timpul operațiunilor REPAIR TABLE, ALTER TABLE, sau LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Marimea maximă pentru fișierele de sortare temporare';
$strMyISAMRecoverOptionsDesc = 'Regimul de recuperare automată a tabelelor MyISAM deteriorate, stabilit prin opțiunea startup --myisam-recover server.';
$strMyISAMRecoverOptions = 'Regim de recuperare automată';
$strMyISAMRepairThreadsDesc = 'Dacă această valoare este mai mare decît 1, indexurile de tabel MyISAM sînt create în paralel (fiecare index în firul de execuție propriu) în tipul operațiunii de reparare prin procesul de sortare.';
$strMyISAMRepairThreads = 'Repară firele de execuție';
$strMyISAMSortBufferSizeDesc = 'Tamponul alocat la sortarea indexurilor MyISAM în timpul unei operațiuni REPAIR TABLE sau la crearea indexurilor cu CREATE INDEX sau ALTER TABLE.';
$strMyISAMSortBufferSize = 'Sortare Mărime tampon';
$strMySQLCharset = 'Setul de caractere MySQL';
$strMySQLSaid = 'MySQL zice: ';
$strMySQLShowProcess = 'Afișează procesele';
$strMySQLShowStatus = 'Afișează informațiile de execuție MySQL';
$strMySQLShowVars = 'Afișează variabilele de sistem MySQL';

$strName = 'Nume';
$strNext = 'Următorul';
$strNoActivity = 'Nu ați avut activitate de mai mult de %s secunde, vă rugăm să vă autentificați din nou';
$strNoDatabases = 'Nu sînt baze de date';
$strNoDatabasesSelected = 'Nu este selectată nici o bază de date.';
$strNoDescription = 'Nu există descriere';
$strNoDetailsForEngine = 'Nu există informații detaliate de stare disponibile pentru motorul de stocare.';
$strNoDropDatabases = 'Comenzile "DROP DATABASE" sînt dezactivate.';
$strNoExplain = 'Sari peste explicarea SQL';
$strNoFrames = 'phpMyAdmin are o interfață mai prietenoasă cu un navigator ce lucreaza cu <b>cadre</b>.';
$strNoIndex = 'Index nu este definit!';
$strNoIndexPartsDefined = 'Nu sînt definite părți din index!';
$strNoModification = 'Nici o schimbare';
$strNone = 'Nici unul(a)';
$strNo = 'Nu';
$strNoOptions = 'Acest format nu are opțiuni';
$strNoPassword = 'Nu există parolă';
$strNoPermission = 'Serverul web nu poate salva fișierul %s.';
$strNoPhp = 'fără cod PHP';
$strNoPrivileges = 'Nu există drepturi de acces';
$strNoRights = 'Nu dețineți drepturi de acces pentru a vă afla aici!';
$strNoRowsSelected = 'Nu e nici un rînd selectat';
$strNoSpace = 'Spațiu insuficient pentru salvarea fișierului %s.';
$strNoTablesFound = 'Nu s-a găsit nici un tabel în baza de date.';
$strNoThemeSupport = 'Nu există suport pentru tematici, vă rugăm să verificați configurația și/sau designurile în directorul %s.';
$strNotNumber = 'Acesta nu este un număr!';
$strNotOK = 'Nu este bine';
$strNotSet = '<b>%s</b> tabelul nu a fost găsit sau nu este stabilit în %s';
$strNoUsersFound = 'Nu s-a găsit nici un utilizator.';
$strNoValidateSQL = 'Sari peste validarea SQL';
$strNull = 'Nul';
$strNumberOfFields = 'Număr de cîmpuri';
$strNumberOfTables = 'Număr de tabele';
$strNumSearchResultsInTable = '%s rezultat(e) în interiorul tabelului <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> rezultat(e)';
$strNumTables = 'Tabele';

$strOK = 'E bine';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Deschide fereastră phpMyAdmin nouă';
$strOperations = 'Operații';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimizare tabel';
$strOptions = 'Opțiuni';
$strOr = 'Sau';
$strOverhead = 'Asupra';
$strOverwriteExisting = 'Suprascrie fișier(e) existent(e)';

$strPageNumber = 'Numărul paginii:';
$strPaperSize = 'Mărime hîrtie';
$strPartialImport = 'Importare parțială';
$strPartialText = 'Texte parțiale';
$strPasswordChanged = 'Parola pentru %s a fost schimbată cu succes.';
$strPasswordEmpty = 'Parola este goală!';
$strPasswordNotSame = 'Parolele nu corespund!';
$strPassword = 'Parola';
$strPdfDbSchema = 'Schema bazei de date "%s" - Pagina %s';
$strPdfInvalidTblName = 'Tabelul „%s” nu există!';
$strPdfNoTables = 'Nu există tabele';
$strPDF = 'PDF';
$strPDFReportTitle = 'Titlu raport';
$strPerHour = 'pe oră';
$strPerMinute = 'pe minut';
$strPerSecond = 'pe secundă';
$strPersian = 'Persian';
$strPhoneBook = 'carte de telefoane';
$strPHP40203 = 'Folosiți PHP 4.2.3, server care are un defect major la șiruri multioctet (mbstring). Vezi PHP raportul de eroare la 19404. Această versiune de PHP nu este recomandat de folosit cu phpMyAdmin.';
$strPhp = 'Creează cod PHP';
$strPHPVersion = 'Versiune PHP';
$strPmaDocumentation = 'Documentație phpMyAdmin';
$strPmaUriError = 'Directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> TREBUIE să fie stabilită în fișierul de configurare!';
$strPmaWiki = 'Wiki phpMyAdmin';
$strPolish = 'Polononez';
$strPortrait = 'Portrait';
$strPos1 = 'Începe';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'Cheia primară a fost aruncată';
$strPrimaryKeyName = 'Numele cheii primare trebuie să fie... PRIMARY!';
$strPrimaryKeyWarning = '(Numele „PRIMARY” <b>trebuie</b> să fie <b>numai</b> la cheia primară!)';
$strPrimary = 'Primar';
$strPrint = 'Listare';
$strPrintViewFull = 'Vizualizare listare (împreună cu text)';
$strPrintView = 'Viziualizare imprimare';
$strPrivDescAllPrivileges = 'Include toate privilegiile, excluzand GRANT.';
$strPrivDescAlter = 'Permite alterarea structurii la tabelele deja existente.';
$strPrivDescCreateDb = 'Permite crearea de noi baze de date și tabele.';
$strPrivDescCreateTbl = 'Permite crearea de noi tabele.';
$strPrivDescCreateTmpTable = 'Permite crearea de tabele temporare.';
$strPrivDescDelete = 'Permite stergere de date.';
$strPrivDescDropDb = 'Permite stergerea unei baze de date sau a unor tabele.';
$strPrivDescDropTbl = 'Permite aruncarea a unei baze de date.';
$strPrivDescExecute = 'Permite rularea procedurilor stocate; Nu are efect in aceasta versiune MySQL.';
$strPrivDescFile = 'Permite importarea datelor in fisiere și exportarea acestora din fisiere.';
$strPrivDescGrant = 'Permite adaugarea utilizatorilor și drepturilor fara reincarcarea tabelelor de drepturi.';
$strPrivDescIndex = 'Permite crearea și stergerea indexurilor.';
$strPrivDescInsert = 'Permite inserarea și înlocuirea datelor.';
$strPrivDescLockTables = 'Permite blocarea tabelelor din firul curent de execuție.';
$strPrivDescMaxConnections = 'Limitează numărul de noi conexiuni care pot fi deschise de utilizator într-o oră.';
$strPrivDescMaxQuestions = 'Limiteaza numarul de comenzi care pot fi trimise de utilizator către server într-o oră.';
$strPrivDescMaxUpdates = 'Limitează numărul de comenzi pentru schimbarea vreunui tabel sau vreunei baze de date executabile de utilizator într-o oră.';
$strPrivDescProcess3 = 'Permite oprirea proceselor altor utilizatori.';
$strPrivDescProcess4 = 'Permite vizualizarea comenzilor procesate în listă.';
$strPrivDescReferences = 'Nu are efect în această versiune MySQL.';
$strPrivDescReload = 'Permite reîncărcarea setărilor de server și golirea memoriei cache a serverului.';
$strPrivDescReplClient = 'Permite utilizatorului de a interoga locația slave/master.';
$strPrivDescReplSlave = 'Necesară pentru „slave replication”.';
$strPrivDescSelect = 'Permite citirea datelor.';
$strPrivDescShowDb = 'Permite accesul la lista completă a bazelor de date.';
$strPrivDescShutdown = 'Permite oprirea serverului.';
$strPrivDescSuper = 'Permite conexiuni, chiar dacă s-a atins numărul maxim de conexiuni; Necesară pentru majoritatea operațiunilor administrative, cum ar fi setarea variabilelor globale sau oprirea firelor de execuție a altor utilizatori.';
$strPrivDescUpdate = 'Permite schimbarea datelor.';
$strPrivDescUsage = 'Fără drepturi.';
$strPrivileges = 'Drepturi de acces';
$strPrivilegesReloaded = 'Drepturile au fost reîncarcate cu succes.';
$strProcedures = 'Proceduri';
$strProcesses = 'Procese';
$strProcesslist = 'Listă procese';
$strProtocolVersion = 'Versiune protocol';
$strPutColNames = 'Pune numele cîmpului în primul rînd';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Interogare prin exemplu';
$strQueryCache = 'Cache interogări';
$strQueryFrame = 'Fereastra de comandă';
$strQueryOnDb = 'Comandă SQL pe baza de date <b>%s</b>:';
$strQuerySQLHistory = 'Istoric SQL';
$strQueryStatistics = '<b>Statistică interogări</b>: De la început, s-au trimis %s interogări la server.';
$strQueryTime = 'comanda a durat %01.4f sec';
$strQueryType = 'Tip interogare';
$strQueryWindowLock = 'A nu se suprascrie peste această interogare din cealaltă fereastră';

$strReceived = 'Recepționat';
$strRecommended = 'recomandat';
$strRecords = 'Înregistrări';
$strReferentialIntegrity = 'Verificarea integrității referinței:';
$strRefresh = 'Reîncarcă';
$strRelationalSchema = 'Schema relațională';
$strRelationDeleted = 'Relație ștearsă';
$strRelationNotWorking = 'Opțiunile adiționale pentru folosirea tabelelor intercalate au fost dezactivate. Pentru a afla de ce ...  %shere%s.';
$strRelationsForTable = 'RELAȚII PENTRU TABEL';
$strRelations = 'Legături';
$strRelationView = 'Vizualizare relațională';
$strReloadingThePrivileges = 'Reîncărcarea drepturilor';
$strReloadPrivileges = 'Reîncărcare privilegii';
$strReload = 'Reîncarcă';
$strRemoveSelectedUsers = 'Eliminarea utilizatorilor selectați';
$strRenameDatabaseOK = 'Baza de date %s a fost redenumită în %s';
$strRenameTableOK = 'Tabelului %s i s-a dat un numele de %s';
$strRenameTable = 'Redenumire tabel la';
$strRepairTable = 'Reparare tabel';
$strReplaceNULLBy = 'Înlocuire NULL cu';
$strReplaceTable = 'Înlocuiește datele tabelului cu fișier';
$strReset = 'Resetare';
$strResourceLimits = 'Limitare de resurse';
$strReType = 'Re-type';
$strRevokeAndDeleteDescr = 'Utilizatorii vor avea în continuare drepturi de UTILIZARE pînă la reîncărcarea drepturilor.';
$strRevokeAndDelete = 'Revocarea tuturor drepturilor active ale utilizatorilor și stergerea acestora.';
$strRevokeMessage = 'Drepturile tale au fost revocate pentru %s';
$strRevoke = 'Revocare';
$strRomanian = 'Român';
$strRoutines = 'Rutine';
$strRowLength = 'Lungime linie';
$strRowsFrom = 'linii începînd cu';
$strRowSize = ' Mărime linie ';
$strRows = 'Linie';
$strRowsModeFlippedHorizontal = 'orizontal (colontitlu rotativ)';
$strRowsModeHorizontal = 'orizontal';
$strRowsModeOptions = 'în mod %s și repetare colontitlu după %s celule';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Statisticile rîndului';
$strRunning = 'rulînd pe %s';
$strRunQuery = 'Trimite comanda';
$strRunSQLQuery = 'Execută interogare SQL asupra bazei de date %s';
$strRussian = 'Rus';

$strSaveOnServer = 'Salveaza pe server în directorul %s';
$strSavePosition = 'Salvează poziție';
$strSave = 'Salveaza';
$strScaleFactorSmall = 'Factorul de scalare este prea mica pentru a inchepe in pagina';
$strSearch = 'Caută';
$strSearchFormTitle = 'Caută în baza de date';
$strSearchInTables = 'În interiorul tabelei(lor):';
$strSearchNeedle = 'Cuvînt/valoare de căutat (metacaracter: "%"):';
$strSearchOption1 = 'cel puțin unul dintre cuvinte';
$strSearchOption2 = 'toate cuvintele';
$strSearchOption3 = 'fraza exactă';
$strSearchOption4 = 'ca o expresie';
$strSearchResultsFor = 'Caută rezultate pentru "<i>%s</i>" %s:';
$strSearchType = 'Găsește:';
$strSecretRequired = 'Fișierul de configurare necesită o expresie de protecție secretă (blowfish_secret).';
$strSelectADb = 'Selectați baza de date';
$strSelectAll = 'Selectează tot';
$strSelectBinaryLog = 'Selectați jurnalul binar pentru vizualizare';
$strSelectFields = 'Selectează cîmpurile (cel puțin unul):';
$strSelectForeignKey = 'Alegeți cheia străină';
$strSelectNumRows = 'în interogarea';
$strSelectTables = 'Selectează tabele';
$strSend = 'Trimite';
$strSent = 'Trimis';
$strServerChoice = 'Alegerea serverului';
$strServerNotResponding = 'Serverul nu răspunde';
$strServer = 'Server';
$strServers = 'Servere';
$strServerStatus = 'Informații rulare';
$strServerStatusUptime = 'Acest server MySQL rulează de %s. S-a lansat la %s.';
$strServerTabVariables = 'Variabile';
$strServerTrafficNotes = '<b>Trafic server</b>: Aceste tabele arată statistica de trafic în retea a acestui server MySQL de la lansare.';
$strServerVars = 'Variabile și configurări de server';
$strServerVersion = 'Versiune server';
$strSessionValue = 'Valoare sesiune';
$strSetEnumVal = 'Dacă cîmpul este „enum” sau „set”, vă rugăm să adăugați valori folosind formatul: \'a\',\'b\',\'c\'...<br />Daca aveti nevoie sa puneti bara intoarsa (backslash) ("\") sau semnul ("\'") la aceste valori, folosiți exemplul ( \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Afișează';
$strShowAll = 'Arată toate';
$strShowColor = 'Arată culoarea';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowFullQueries = 'Afișare comandă întreagă';
$strShowGrid = 'Arată grila';
$strShowHideLeftMenu = 'Arată/ascunde meniul stîng';
$strShowingPhp = 'Afișare ca și cod PHP';
$strShowingRecords = 'Afișează înregistrări';
$strShowingSQL = 'Afișare interogare SQL';
$strShowPHPInfo = 'Arată informația PHP';
$strShowTableDimension = 'Arată dimensiunile tabelei';
$strShowTables = 'Arată tabelele';
$strShowThisQuery = ' Afișează această comandă din nou aici ';
$strSimplifiedChinese = 'Chineză simplificată';
$strSingly = '(singly)';
$strSize = 'Mărime';
$strSlovak = 'Slovacă';
$strSlovenian = 'Slovenă';
$strSnapToGrid = 'Aliniere la grilă0';
$strSortByKey = 'Sortare după cheie';
$strSorting = 'Sortare';
$strSort = 'Sortare';
$strSpaceUsage = 'Utilizare spațiu';
$strSpanish = 'Spaniolă';
$strSplitWordsWithSpace = 'Cuvinte despărțite de un spațiu (" ").';
$strSQLExportType = 'Modul de export';
$strSQLParserBugMessage = 'Exista o posibilitate de a fi gasit un BUG in parserul SQL. Verifica atent inca o data comanda și verifica daca semnele specifice sunt corecte. O alta posibilitate ar putea fi punerea unui fisier binar in afara zonei de text. Poti incerca aceasta comanda și printr-o linie de comanda MySQL. Eroarea MySQL de mai jos, daca e vreuna, poate sa te ajute la diagnosticarea problemei. Daca in continuare ai probleme cu executarea comenzii, redu o parte din comanda la aceea parte care cauzeaza problema și raporteaza acesta ca un BUG in sectiunea DE TAIAT';
$strSQLParserUserError = 'Pare sa fie o eroare in comanda SQL. Eroarea MySQL de mai jos, daca e vreuna, poate sa te ajute la diagnosticarea problemei';
$strSQLQuery = 'Comanda SQL';
$strSQLResult = 'Rezultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificator nevalid';
$strSQPBugUnclosedQuote = 'Citare neînchisă';
$strSQPBugUnknownPunctuation = 'Înșiruire de punctuație necunoscută';
$strStatCheckTime = 'Ultima verficare';
$strStatCreateTime = 'Creare';
$strStatement = 'Comenzi';
$strStatUpdateTime = 'Ultima actualizare';
$strStatus = 'Stare';
$strStorageEngine = 'Motor de stocare';
$strStorageEngines = 'Motoare de stocare';
$strStrucCSV = 'Date CSV';
$strStrucData = 'Structura și date';
$strStrucExcelCSV = 'Date CSV pentru MS Excel';
$strStrucNativeExcel = 'Date native MS Excel';
$strStrucOnly = 'Numai structura';
$strStructPropose = 'Propune structura de tabele';
$strStructureForView = 'Structură pentru vizualizare';
$strStructure = 'Structură';
$strSubmit = 'Trimite';
$strSuccess = 'Comanda dumneavoastră SQL a fost executată cu succes';
$strSum = 'Sumă';
$strSwedish = 'Suedez';
$strSwitchToDatabase = 'Schimbă la tabela copiată';
$strSwitchToTable = 'Schimbă la tabela copiată';

$strTableAlreadyExists = 'Tabelul %s există deja!';
$strTableComments = 'Comentarii tabel';
$strTableEmpty = 'Numele de tabel este gol!';
$strTableHasBeenDropped = 'Tabelul %s a fost aruncat';
$strTableHasBeenEmptied = 'Tabelul %s a fost golit';
$strTableHasBeenFlushed = 'Tabelul %s a fost curățat';
$strTableIsEmpty = 'Tabelul pare a fi gol!';
$strTableMaintenance = 'Administrare tabel';
$strTableName = 'Denumire tabel';
$strTableOfContents = 'Sumar';
$strTableOptions = 'Opțiuni tabel';
$strTables = '%s tabele';
$strTableStructure = 'Structura de tabel pentru tabelul';
$strTable = 'Tabel';
$strTakeIt = 'alege';
$strTblPrivileges = 'Drepturi specifice de tabele';
$strTempData = 'Date temporare';
$strTextAreaLength = 'Datorită lungimii sale, <br /> acest cîmp s-ar putea să nu fie editabil';
$strThai = 'Tailandez';
$strThemeNoPreviewAvailable = 'Nici o previzualizare disponibilă.';
$strThemeNotFound = 'Tema %s nu a fost găsită!';
$strTheme = 'Șablon/stil';
$strThisHost = 'Această gazdă';
$strThreads = 'Fire';
$strThreadSuccessfullyKilled = 'Firul de execuție %s a fost oprit cu succes.';
$strTime = 'Timp';
$strToFromPage = 'în/din pagină';
$strToggleScratchboard = 'dezactivare scratchboard';
$strToggleSmallBig = 'Comutare mare/mică';
$strToSelectRelation = 'Pentru a alege relația, faceți clic:';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Chineza Traditionala';
$strTraditionalSpanish = 'Spaniola traditionala';
$strTraffic = 'Trafic';
$strTransformation_application_octetstream__download = 'Afișează un link pentru descarcarea datelor binare a unui camp. Prima optiune este denumirea fisierului binar. A doua optiune este o denumire posibila pentru un rand de tabel care contine denumirea de fisier. Daca setati și o a doua optiune, trebuie sa aveti prima optiune setata ca și empty string';
$strTransformation_image_jpeg__inline = 'Afișează o imagine mica clicabila ; optiuni: latime, inaltime in pixeli (metine dimensiunile originale)';
$strTransformation_image_jpeg__link = 'Afișează un link la imagine (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'Vezi imagine/jpeg: inline';
$strTransformation_text_plain__external = 'NUMAI LINUX: Lanseaza o aplicatie externa și trimite datele prin input standard. Returneaza standard output a aplicatiei. Default este Tidy, pentru listarea codului HTML. Din motive de securitate, va trebui sa editati manual fisierul libraries/transformations/text_plain__external.inc.php și sa inserati uneltele permise sa ruleze. Prima optiune este apoi numarul de programe care vor fi utilizate și a doua optiune sunt  parametri pentru program. Al treilea parametru, daca este setat la 1 va transforma outputul folosind htmlspecialchars() (Default este 1). Un al patrulea parametru, daca este setat la 1 va aplica NOWRAP la continut, astfel incat intregul output va fi afisat fara reformatare (Default 1)';
$strTransformation_text_plain__formatted = 'Mentine formatarea originala a campului.';
$strTransformation_text_plain__imagelink = 'Afișează o imagine și un link, campul contine denumirea fisierului; prima optiune este un prefix cum ar fi "http://domain.com/", a doua optiune este latimea in pixeli, iar a treia este inaltimea.';
$strTransformation_text_plain__link = 'Afișează un link, campul contine denumirea fisierului,  prima optiune este un prefix cum ar fi "http://domain.com/", a doua optiune este un titlu pentru link.';
$strTransformation_text_plain__substr = 'Afișează doar o parte a firului de executie. Prima optiune este un offset pentru definirea punctului de început a outputului de text (Default 0). A doua optiune este un offset de text returnat. Daca este gol, returneaza textul ramas. A treia optiune defineste caracterele care vor fi atasate la output la returnarea unui substring  (Default: ...) .';
$strTriggers = 'Declanșatori';
$strTruncateQueries = 'Truncare comenzi afișate';
$strTurkish = 'Turc';
$strType = 'Tip';

$strUkrainian = 'Ucrainean';
$strUncheckAll = 'Deselectează toate';
$strUnicode = 'Unicod';
$strUnique = 'Unic';
$strUnknown = 'necunoscut';
$strUnselectAll = 'Deselectează tot';
$strUpdatePrivMessage = 'Ați actualizat privilegiile pentru %s.';
$strUpdateProfileMessage = 'Profilul a fost actualizat.';
$strUpdateQuery = 'Reînnoire comandă';
$strUpdComTab = 'Parcurgeti documentatia pentru modul de updatare a Column_comments Table';
$strUpgrade = 'Ar trebui sa reactualizati serverul %s %s la o versiune mai noua.';
$strUploadErrorCantWrite = 'Eșec la scrierea fișierului pe disc.';
$strUploadErrorExtension = 'Încărcarea fișierului a fost împiedicată de extensie.';
$strUploadErrorNoTempDir = 'Lipsește un dosar temporar.';
$strUploadErrorPartial = 'Fișierul a fost încărcat numai parțial.';
$strUploadErrorUnknown = 'Eroare necunoscută la încărcarea fișierului.';
$strUsage = 'Utilizare';
$strUseBackquotes = 'Utilizati apostroful pentru numele tabelelor și a campurilor';
$strUsedPhpExtensions = 'Extensii PHP utilizate';
$strUseHostTable = 'Utilizare tabel gazde';
$strUserAlreadyExists = 'Utilizatorul %s există deja!';
$strUserEmpty = 'Numele de utilizator este gol!';
$strUserName = 'Nume utilizator';
$strUserNotFound = 'Utilizatorul selectat nu a fost găsit în tabelul de drepturi.';
$strUserOverview = 'Descriere utilizator';
$strUsersDeleted = 'Utilizatorii selectați au fost eliminați.';
$strUsersHavingAccessToDb = 'Utilizatorul are acces la &quot;%s&quot;';
$strUser = 'Utilizator';
$strUseTabKey = 'Folosiți tasta TAB pentru a trece de la o valoare la alta sau CTRL+săgeți pentru a merge în oricare direcție';
$strUseTables = 'Utilizare tabele';
$strUseTextField = 'Utilizare cîmp text';
$strUseThisValue = 'Folosește această valoare';

$strValidateSQL = 'Validează SQL';
$strValidatorError = 'Validatorul SQL nu poate fi inițializat. Verificați dacă e instalată extesnsia necesară PHP, așa cum e descris în %sdocumentation%s.';
$strValue = 'Valoare';
$strVar = 'Variabil';
$strVersionInformation = 'Informații despre versiune';
$strViewDumpDatabases = 'Vizualizarea schemei bazei de date';
$strViewDumpDB = 'Vizualizarea schemei bazei de date';
$strViewDump = 'Vizualizarea schemei tabelului';
$strViewHasBeenDropped = 'Vizualizarea %s a fost eliminată';
$strView = 'Vizualizare';

$strWebServerUploadDirectory = 'director de încărcare al serverului Web';
$strWebServerUploadDirectoryError = 'Directorul stabilit pentru încărcare nu poate fi găsit';
$strWelcome = 'Bine ați venit la %s';
$strWestEuropean = 'European de vest';
$strWildcard = 'wildcard';
$strWindowNotFound = 'Fereastra de navigare nu a putut fi reincarcat.  Poate aceasta nu a fost inchis, sau fereastra parinte blocheaza ferestrele din cauza securitatii sistemului.';
$strWithChecked = 'Verificat cu:';
$strWriteRequests = 'Cereri de scriere';
$strWrongUser = 'Nume de utilizator/Parola incorecta. Accesul interzis.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Observație: Prin stabilirea acestor opțiuni la 0 (zero) se elimină restricția.';
$strZip = '„arhivat”';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate

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

$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate

$strDesigner = 'Designer';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate

$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate

$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate

$strHandler = 'Handler';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate

$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
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

$strKeyCache = 'Key cache';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation'; //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate

$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strProfiling = 'Profiling';  //to translate

$strQueryResultsOperations = 'Query results operations';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strReplication = 'Replication';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSelectReferencedKey = 'Select referenced key';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
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
$strSmallBigAll = 'Small/Big All';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate

$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate

$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strViewName = 'VIEW name';  //to translate

?>
