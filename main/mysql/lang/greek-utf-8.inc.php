<?php
/* $Id: greek-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/* Translated by Kyriakos Xagoraris <theremon at users.sourceforge.net> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Κυρ', 'Δευ', 'Τρι', 'Τετ', 'Πεμ', 'Παρ', 'Σαβ');
$month = array('Ιαν', 'Φεβ', 'Μάρ', 'Απρ', 'Μάι', 'Ιούν', 'Ιούλ', 'Αυγ', 'Σεπ', 'Οκτ', 'Νοε', 'Δεκ');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, στις %I:%M %p';

// To Arrange

$timespanfmt = '%s μέρες, %s ώρες, %s λεπτά and %s δευτερόλεπτα'; 

$strAbortedClients = 'Ακυρωμένες συνδέσεις'; 
$strAccessDeniedExplanation = 'Το phpMyAdmin προσπάθησε να συνδεθεί με τον διακομιστή MySQL αλλά ο διακομιστής απέριψε τη σύνδεση. Θα πρέπει να ελέγξετε την διεύθυνση, το όνομα χρήστη και τον κωδικό πρόσβασης στο αρχείο ρυθμίσεων config.inc.php και να βεβαιωθείτε ότι αντιστοιχούν σε αυτά που σας έχει δώσει ο διαχειρηστής του διακομιστή MySQL.'; 
$strAccessDenied = '\'Αρνηση Πρόσβασης';
$strAction = 'Ενέργεια';
$strAddAutoIncrement = 'Προσθήκη τιμής AUTO_INCREMENT';  
$strAddDeleteColumn = 'Προσθήκη/Αφαίρεση Στήλης Πεδίου';
$strAddDeleteRow = 'Προσθήκη/Αφαίρεση Γραμμής Κριτηρίων';
$strAddIntoComments = 'Προσθήκη στα σχόλια';
$strAddNewField = 'Προσθήκη νέου Πεδίου';
$strAddPrivilegesOnDb = 'Προσθήκη προνομίων στην ακόλουθη βάση δεδομένων'; 
$strAddPrivilegesOnTbl = 'Προσθήκη δεδομένων στον ακόλουθο πίνακα'; 
$strAddSearchConditions = 'Προσθήκη νέου όρου (σώμα της "where" πρότασης):';
$strAddToIndex = 'Προσθήκη στο ευρετήριο &nbsp;%s&nbsp;κολώνας(ων)';
$strAddUserMessage = 'Προσθέσατε ένα νέο χρήστη.';
$strAddUser = 'Προσθήκη νέου Χρήστη';
$strAdministration = 'Διαχείριση'; 
$strAffectedRows = 'Επηρρεαζόμενες εγγραφές:';
$strAfterInsertBack = 'Επιστροφή';
$strAfterInsertNewInsert = 'Εισαγωγή νέας εγγραφής';
$strAfter = 'Μετά το %s';
$strAllTableSameWidth = 'εμφάνιση όλων των πινάκων με το ίδιο πλάτος;';
$strAll = 'Όλα';
$strAlterOrderBy = 'Αλλαγή ταξινόμησης Πίνακα κατά';
$strAnalyzeTable = 'Ανάλυση Πίνακα';
$strAnd = 'Και';
$strAnIndex = 'Ένα ευρετήριο προστέθηκε στο %s';
$strAnyHost = 'Οποιοδήποτε Σύστημα';
$strAnyUser = 'Οποιοσδήποτε Χρήστης';
$strAny = 'Οποιοδήποτε';
$strAPrimaryKey = 'Ένα πρωτεύον κλειδί προστέθηκε στο %s';
$strArabic = 'Αραβικά';  
$strArmenian = 'Αρμενικά';  
$strAscending = 'Αύξουσα';
$strAtBeginningOfTable = 'Στην αρχή του Πίνακα';
$strAtEndOfTable = 'Στο τέλος του Πίνακα';
$strAttr = 'Χαρακτηριστικά';
$strAutomaticLayout = 'Αυτόματη διάταξη';  

$strBack = 'Επιστροφή';
$strBaltic = 'Βαλτικής';  
$strBeginCut = 'BEGIN CUT';  
$strBeginRaw = 'BEGIN RAW';  
$strBinaryDoNotEdit = 'Δυαδικό - χωρίς δυνατότητα επεξεργασίας';
$strBinary = 'Δυαδικό';
$strBookmarkDeleted = 'Η ετικέτα διεγράφη.';
$strBookmarkLabel = 'Τίτλος';
$strBookmarkQuery = 'Αποθηκευμένο επερώτημα SQL';
$strBookmarkThis = 'Αποθήκευση αυτού του επερωτήματος SQL';
$strBookmarkView = 'Μόνο ανάγνωση';
$strBrowse = 'Περιήγηση';
$strBulgarian = 'Βουλγαρικά';  
$strBzError = 'Το phpMyAdmin δεν μπόρεσε να συμπιέσει το αρχείο εξόδου λόγω προβλήματος στην επέκταση Bz2 αυτής της έκδοσης php. Προτείνεται να ορίσετε την τιμή της μεταβλητής <code>$cfg[\'BZipDump\']</code> στο αρχείο ρυθμίσεων του phpMyAdmin σε <code>FALSE</code>. Εάν θέλετε να χρησιμοποιήσετε λειτουργίες συμπίεσης τύπου Bz2, θα πρέπει να αναβαθμίσετε την php σε μεταγενέστερη έκδοση. Δείτε την αναφορά προβλήματος php %s για περισσότερες λεπτομέρειες.'; 
$strBzip = 'συμπίεση «bzip»';

$strCannotLogin = 'Δεν ήταν δυνατή η σύνδεση με τον διακομιστή MySQL';  
$strCantLoadRecodeIconv = 'Δεν είναι δυνατή η φόρτωση της επέκτασης iconv ή recode που χρειάζεται για την μετατροπή του σετ χαρακτήρων. Ρυθμίστε την php να επιτρέπει την χρήση αυτών των επεκτάσεων ή απανεργοποιήστε την μετατροπή χαρακτήρων στο phpMyAdmin.'; 
$strCantLoad = 'δεν ήταν δυνατή η φόρτωση της επέκτασης %s ,<br />παρακαλώ ελέγξτε τις ρυθμίσεις της PHP';  
$strCantRenameIdxToPrimary = 'Η μετονομασία του ευρετηρίου σε PRIMARY σε είναι εφικτή!';
$strCantUseRecodeIconv = 'Δεν είναι δυνατή η χρήση της επέκτασης iconv ούτε της libiconv ούτε της ρουτίνας recode_string, ενώ η επέκταση έχει φορτωθεί. Ελέξτε τις ρυθμίσεις της php.'; 
$strCardinality = 'Μοναδικότητα';
$strCentralEuropean = 'Κεντρικής Ευρώπης';  
$strChangeCopyModeCopy = '... διατήρηση του παλιού χρήστη.';  
$strChangeCopyModeDeleteAndReload = ' ... διαγραφή του παλιού χρήστη από τους πίνακες χρηστών και επαναφόρτωση των προνομίων.';  
$strChangeCopyModeJustDelete = ' ... διαγραφή του παλιού χρήστη από τους πίνακες χρηστών.';  
$strChangeCopyModeRevoke = ' ... ανάκληση των προνομίων του παλιού χρήστη και διαγραφή του.';  
$strChangeCopyMode = 'Δημιουργία νέα χρήστη με τα ίδια προνόμια και ...';  
$strChangeCopyUser = 'Αλλαγή Στοιχείων Πρόσβασης / Αντιγραφή Χρήστη';  
$strChangeDisplay = 'Επιλέξτε πεδίο για εμφάνιση';
$strChangePassword = 'Αλλαγή κωδικού πρόσβασης';
$strChange = 'Αλλαγή';
$strCharsetOfFile = 'Σετ χαρακτήρων του αρχείου:'; 
$strCharsets = 'Σετ χαρακτήρων';  
$strCharset = 'Σετ χαρακτήρων';  
$strCheckAll = 'Επιλογή όλων';
$strCheckPrivsLong = 'Έλεγχος προνομίων για τη βάση &quot;%s&quot;.';  
$strCheckPrivs = 'Έλεγχος Προνομίων';  
$strCheckTable = 'Έλεγχος πίνακα';
$strChoosePage = 'Παρακαλώ επιλέξτε σελίδα για αλλαγή';  
$strColComFeat = 'Εμφάνιση σχολίων πεδίων';
$strColumnNames = 'Ονόματα στηλών';
$strColumnPrivileges = 'Προνόμια πεδίων'; 
$strCommand = 'Εντολή'; 
$strComments = 'Σχόλια';  
$strCompleteInserts = 'Ολοκληρωμένες εντολές «Insert»';
$strCompression = 'Συμπίεση'; 
$strConfigFileError = 'Το phpMyAdmin δεν μπόρεσε να διαβάσει το αρχείο ρυθμίσεων!<br />Αυτό μπορεί να συμβεί εάν η php βρει κάποιο λάθος στο αρχείο ή εάν η php δεν μπορεί να βρει το αρχείο.<br />Παρακαλώ καλέστε το αρχείο ρυθμίσεων απ\' ευθείας χρησιμοποιώντας το ακόλουθο link και διαβάστε τα μυνήματα λάθους που θα επιστρέψει η php. Στις περισσότερες περιπτώσεις κάπου λείπουν εισαγωγικά (") ή ερωτιματικά (;).<br />Εάν η php επιστρέψει μια λευκή σελίδα, όλα είναι σωστά.'; 
$strConfigureTableCoord = 'Παρακαλώ ορίστε τις συντεταγμένες για τον πίνακα %s';  
$strConnections = 'Συνδέσεις'; 
$strCookiesRequired = 'Από αυτό το σημείο πρέπει να έχετε ενεργοποιημένα cookies.';
$strCopyTableOK = 'Ο Πίνακας %s αντιγράφηκε στο %s.';
$strCopyTableSameNames = 'Δεν είναι δυνατή η αντιγραφή του πίνακα στον εαυτό του!';  
$strCopyTable = 'Αντιγραφή πίνακα σε (βάση<b>.</b>πίνακας):';
$strCouldNotKill = 'Το phpMyAdmin δεν μπόρεσε να διακόψει τη λειτουργία %s. Μπορεί να έχει ήδη σταματήσει.'; 
$strCreateIndexTopic = 'Δημιουργία νέου ευρετηρίου';
$strCreateIndex = 'Δημιουργία ευρετηρίου σε &nbsp;%s&nbsp;πεδία';
$strCreateNewDatabase = 'Δημιουργία νέας βάσης';
$strCreateNewTable = 'Δημιουργία νέου πίνακα στη βάση %s';
$strCreatePage = 'Δημιουργία νέας σελίδας';  
$strCreatePdfFeat = 'Δημιουργία αρχείων PDF';
$strCreate = 'Δημιουργία';
$strCriteria = 'Κριτήρια';
$strCroatian = 'Κροατικά';  
$strCyrillic = 'Κυριλλικά';  
$strCzech = 'Τσεχικά';  

$strDanish = 'Δανικά';  
$strDatabaseExportOptions = 'Επιλογές εξαγωγής βάσης δεδομένων';
$strDatabaseHasBeenDropped = 'Η βάση δεδομένων %s διεγράφη.';
$strDatabasesDropped = '%s βάσεις δεδομένων διεγράφησαν επιτυχώς.';  
$strDatabasesStatsDisable = 'Απενεργοποίηση Στατιστικών';  
$strDatabasesStatsEnable = 'Ενεργοποίηση Στατιστικών';  
$strDatabasesStatsHeavyTraffic = 'Σημείωση: Η ενεργοποίηση στατιστικών μπορεί να προκαλέσει μεγάλη μεταφορά δεδομένων μεταξύ του διακομιστή διαδικτύου και του διακομιστή MySQL.';  
$strDatabasesStats = 'Στατιστικά βάσης';
$strDatabases = 'Βάσεις Δεδομένων';
$strDatabase = 'Βάση';
$strDataDict = 'Λεξικό δεδομένων';  
$strDataOnly = 'Μόνο τα δεδομένα';
$strData = 'Δεδομένα';
$strDBComment = 'Σχόλιο βάσης: ';
$strDbPrivileges = 'Προνόμια βάσης δεδομένων'; 
$strDbSpecific = 'Χρήστης Βάσης';  
$strDefaultValueHelp = 'Για προκαθορισμένες τιμές, παρακαλώ εισάγετε μία τιμή, χωρίς χαρακτήρες διαφυγής ή εισαγωγικά, χρησιμοποιώντας τη μορφή: a';  
$strDefault = 'Προκαθορισμένο';
$strDeleteAndFlushDescr = 'Αυτός είναι ο πιο "καθαρός" τρόπος, αλλά η επαναφόρτωση των προνομίων μπορεί να καθυστερήσει.'; 
$strDeleteAndFlush = 'Διαγραφή των χρηστών και επαναφόρτωση των προνομίων.'; 
$strDeletedRows = 'Διαγραμμένες Εγγραφές:';
$strDeleted = 'Η Εγγραφή έχει διαγραφεί';
$strDelete = 'Διαγραφή';
$strDeleting = 'Διαγραφή %s'; 
$strDelOld = 'Η τρέχουσα σελίδα έχει αναφορές σε πίνακες που δεν υπάρχουν πια. Θέλετε να διαγραφές αυτές οι αναφορές;';  
$strDescending = 'Φθίνουσα';
$strDescription = 'Περιγραφή';  
$strDictionary = 'λεξικό';  
$strDisabled = 'Απενεργοποιημένο';
$strDisplayFeat = 'Λειτουργίες εμφάνισης';
$strDisplayOrder = 'Σειρά εμφάνισης:';
$strDisplayPDF = 'Εμφάνιση σχήματος PDF';  
$strDoAQuery = 'Εκτέλεσε ένα «επερώτημα κατά παράδειγμα» (χαρακτήρας μπαλαντέρ "%")';
$strDocu = 'Τεκμηρίωση';
$strDoYouReally = 'Θέλετε να εκτελέσετε την εντολή';
$strDropUsersDb = 'Διαγραφή βάσεων δεδομένων που έχουν ίδια ονόματα με χρήστες.'; 
$strDrop = 'Διαγραφή';
$strDumpingData = '\'Αδειασμα δεδομένων του πίνακα';
$strDumpSaved = 'Το αρχείο εξόδου αποθηκεύτηκε ως %s.';  
$strDumpXRows = 'Εμφάνιση %s εγγραφών ξεκινώντας από την εγγραφή %s.'; 
$strDynamic = 'δυναμικά';

$strEditPDFPages = 'Αλλαγή σελίδων PDF';  
$strEditPrivileges = 'Επεξεργασία Προνομίων';
$strEdit = 'Επεξεργασία';
$strEffective = 'Αποτελεσματικός';
$strEmptyResultSet = 'Η MySQL επέστρεψε ένα άδειο σύνολο αποτελεσμάτων (π.χ. καμμία εγγραφή).';
$strEmpty = '\'Αδειασμα';
$strEnabled = 'Ενεργοποιημένο';
$strEndCut = 'END CUT';  
$strEndRaw = 'END RAW';  
$strEnd = 'Τέλος';
$strEnglishPrivileges = ' Σημείωση: Τα ονόματα προνομίων της MySQL εκφράζονται στα Αγγλικά ';
$strEnglish = 'Αγγλικά';  
$strError = 'λάθος';
$strEstonian = 'Εσθονικά';  
$strExecuteBookmarked = 'Εκτέλεση αποθηκευμένου επερωτήματος';  
$strExplain = 'Ανάλυση SQL';  
$strExport = 'Εξαγωγή';  
$strExtendedInserts = 'Εκτεταμένες εντολές «Insert»';
$strExtra = 'Πρόσθετα';

$strFailedAttempts = 'Αποτυχημένες προσπάθειες'; 
$strFieldHasBeenDropped = 'Το πεδίο %s διεγράφη';
$strFieldsEnclosedBy = 'Πεδία που περικλείονται σε';
$strFieldsEscapedBy = 'Τα πεδία χρησιμοποιούν το χαρακτήρα διαφυγής ';
$strFieldsTerminatedBy = 'Πεδία που τελειώνουν σε';
$strFields = 'Πεδία';
$strField = 'Πεδίο';
$strFileAlreadyExists = 'Το αρχείο %s υπάρχει ήδη στον διακομιστή. Επιλέξτε διαφορετικό όνομα αρχείου ή ενεργοποιήστε την επιλογή αντικατάστασης.';  
$strFileCouldNotBeRead = 'Δεν ήταν δυνατή η ανάγνωση του αρχείου';  
$strFileNameTemplateRemember = 'αποθήκευση μορφής';
$strFileNameTemplate = 'Μορφή ονόματος αρχείου';
$strFixed = 'προκαθορισμένου μήκους';
$strFlushPrivilegesNote = 'Σημείωση: Το phpMyAdmin διαβάζει τα προνόμια των χρηστών απ\' ευθείεας από τους πίνακες προνομίων της MySQL. Το περιεχόμενο αυτών των πινάκων μπορεί να διαφέρει από τα προνόμια που χρησιμοποιεί ο διακομιστής εάν έχουν γίνει αλλαγές χειροκίνητα. Σε αυτήν την περίπτωση, θα πρέπει να %sεπαναφορτώσετε τα προνόμια%s πριν συνεχίσετε.'; 
$strFlushTable = 'Εκκαθάριση ("FLUSH") πίνακα';
$strFormat = 'Μορφοποίηση';
$strFormEmpty = 'Ελλειπής τιμή στο πεδίο !';
$strFullText = 'Πλήρη κείμενα';
$strFunction = 'Έλεγχος';

$strGenBy = 'Δημιουργήθηκε από:'; 
$strGeneralRelationFeat = 'Γενικές λειτουργίες συσχέτισης';
$strGenTime = 'Χρόνος δημιουργίας';
$strGerman = 'Γερμανικά';  
$strGlobalPrivileges = 'Γενικά προνόμια'; 
$strGlobalValue = 'Γενική τιμή'; 
$strGlobal = 'Γενικός';  
$strGo = 'Εκτέλεση';
$strGrantOption = 'Χορήγηση'; // Grant
$strGreek = 'Ελληνικά';  
$strGzip = 'συμπίεση «gzip»';

$strHasBeenAltered = 'έχει αλλαχθεί.';
$strHasBeenCreated = 'έχει δημιουργηθεί.';
$strHaveToShow = 'Πρέπει να επιλέξετε τουλάχιστον μία στήλη για εμφάνιση';  
$strHebrew = 'Εβραϊκά';  
$strHomepageOfficial = 'Επίσημη σελίδα του phpMyAdmin';
$strHome = 'Κεντρική σελίδα';
$strHostEmpty = 'Το όνομα του Συστήματος είναι κενό!';
$strHost = 'Σύστημα';
$strHungarian = 'Ουγγρικά';  

$strId = 'ID'; 
$strIdxFulltext = 'Πλήρες κείμενο';
$strIgnore = 'Παράληψη';
$strImportFiles = 'Εισαγωγή αρχείων';  
$strIndexes = 'Ευρετήρια';
$strIndexHasBeenDropped = 'Το ευρετήριο %s διεγράφη';
$strIndexName = 'Όνομα ευρετηρίου&nbsp;:';
$strIndexType = 'Τύπος ευρετηρίου&nbsp;:';
$strIndex = 'Ευρετήριο';
$strInnodbStat = 'Κατάσταση InnoDB';  
$strInsecureMySQL = 'Το αρχείο ρυθμίσεών σας περιέχει ρυθμίσεις (χρήστης root χωρίς κωδικό πρόσβασης) που αντιστοιχούν στον εξ\' ορισμού λογαριασμό χρήστη MySQL. Ο διακομιστής MySQL σας που τρέχει με αυτή τη ρύθμιση, είναι ανοιχτός σε επιθέσεις και θα πρέπει να διορθώσετε το πρόβλημα.';  
$strInsertAsNewRow = 'Εισαγωγή ως νέα εγγραφές';
$strInsertedRowId = 'id εισαγμένης εγγραφής:';  
$strInsertedRows = 'Εισαγόμενες εγγραφές:';
$strInsert = 'Εισαγωγή';
$strInUse = 'σε χρήση';

$strJapanese = 'Ιαπωνικά';  
$strJumpToDB = 'Μεταπήδηση στην βάση &quot;%s&quot;.';  
$strJustDeleteDescr = 'Οι &quot;διεγραμμένοι&quot; χρήστες θα συνεχίσουν να έχουν πρόσβαση στον διακομιστή μέχρις ότου να επαναφορτωθούν οι πίνακες προνομίων.'; 
$strJustDelete = 'Απλή διαγραφή των χρηστών από τους πίνακες προνομίων.'; 

$strKeepPass = 'Διατήρηση κωδικού πρόσβασης';
$strKeyname = 'Όνομα κλειδιού';
$strKill = 'Τερματισμός';
$strKorean = 'Κορεατικά';  

$strLandscape = 'Οριζόντια διάταξη';  
$strLaTeX = 'LaTeX';  
$strLengthSet = 'Μήκος/Τιμές*';
$strLimitNumRows = 'Εγγραφές ανά σελίδα';
$strLinesTerminatedBy = 'Γραμμές που τελειώνουν σε';
$strLinkNotFound = 'Δεν βρέθηκε η σύνδεση';  
$strLinksTo = 'Σύνδεση με';  
$strLithuanian = 'Λιθουανικά';  
$strLocalhost = 'Τοπικό';
$strLocationTextfile = 'Τοποθεσία του αρχείου κειμένου';
$strLoginInformation = 'Πληροφορίες Σύνδεσης'; 
$strLogin = 'Σύνδεση';
$strLogout = 'Αποσύνδεση';
$strLogPassword = 'Κωδικός πρόσβασης:';
$strLogUsername = 'Όνομα χρήστη:';

$strMIME_available_mime = 'Διαθέσιμοι τύποι MIME';
$strMIME_available_transform = 'Διαθέσιμες μετατροπές';
$strMIME_description = 'Περιγραφή';
$strMIME_MIMEtype = 'Τύπος MIME';
$strMIME_nodescription = 'Δεν υπάρχει διαθέσιμη περιγραφή για αυτή τη μετατροπή.<br />Παρακαλώ απευθηνθείτε στον δημιουργό της για να μάθετε, τι κάνει η μετατροπή %s.';
$strMIME_transformation_note = 'Για μία λίστα με τις διαθέσιμες μετατροπές και τις μετατροπές τύπου MIME, πατήστε %sπεριγραφές μετατροπών%s';
$strMIME_transformation_options_note = 'Παρακαλώ εισάγετε τις τιμές για τη μετατροπή χρησιμοποιώντας τη μορφή: \'a\', 100, b,\'c\'...<br />Εάν χρειαστείτε να χρησιμοποιήσετε καθέτους ("\") ή μονά εισαγωγικά ("\'") στις τιμές, χρησιμοποιείτε καθέτους (παράδειγμα \'\\\\xyz\' ή \'a\\\'b\').';
$strMIME_transformation_options = 'Επιλογές μετατροπής';
$strMIME_transformation = 'Μετατροπή περιηγητή';
$strMIME_without = 'Οι τύποι MIME που εμφανίζονται με πλάγια γράμματα δεν έχουν ξεχωριστή λειτουργία μετατροπής';
$strModifications = 'Οι αλλαγές αποθηκεύτηκαν';
$strModifyIndexTopic = 'Αλλαγή ενός ευρετηρίου';
$strModify = 'Τροποποίηση';
$strMoveTableOK = 'Ο πίνακας %s μεταφέρθηκε στο %s.';
$strMoveTableSameNames = 'Δεν είναι δυνατή η μεταφορά του πίνακα στον εαυτό του!';  
$strMoveTable = 'Μεταφορά πίνακα σε (βάση<b>.</b>πίνακας):';
$strMultilingual = 'πολυγλωσσικό';  
$strMySQLCharset = 'Σετ χαρακτήρων της MySQL';  
$strMySQLSaid = 'Η MySQL επέστρεψε το μύνημα: ';
$strMySQLShowProcess = 'Εμφάνιση διεργασιών';
$strMySQLShowStatus = 'Εμφάνιση πληροφορών εκτέλεσης της MySQL';
$strMySQLShowVars = 'Εμφάνιση μεταβλητών της MySQL';

$strName = 'Όνομα';
$strNext = 'Επόμενο';
$strNoDatabasesSelected = 'Δεν έχετε επιλέξει βάσεις.';  
$strNoDatabases = 'Δεν υπάρχουν βάσεις δεδομένων';
$strNoDescription = 'χωρίς περιγραφή';  
$strNoDropDatabases = 'Οι εντολές «DROP DATABASE» έχουν απενεργοποιηθεί.';
$strNoExplain = 'Χωρίς ανάλυση SQL';  
$strNoFrames = 'Το phpMyAdmin είναι πιο φιλικό με έναν browser <b>που υποστηρίζει frames</b>.';
$strNoIndexPartsDefined = 'Δεν ορίστηκαν τα στοιχεία του ευρετηρίου!';
$strNoIndex = 'Δεν ορίστηκε ευρετήριο!';
$strNoModification = 'Χωρίς αλλαγή';
$strNone = 'Κανένα';
$strNoOptions = 'Αυτή η μορφή δεν έχει επιλογές';
$strNoPassword = 'Χωρίς Κωδικό Πρόσβασης';
$strNoPermission = 'Ο διακομιστής δεν έχει δικαιώματα αποθήκευσης του αρχείου %s.';  
$strNoPhp = 'χωρίς κώδικα PHP';  
$strNoPrivileges = 'Χωρίς Προνόμια';
$strNoRights = 'Δεν έχετε αρκετά δικαιώματα να είσαστε εδώ τώρα!';
$strNoSpace = 'Δεν υπάρχει διαθέσιμος χώρος για την αποθήκευση του αρχείου %s.';  
$strNoTablesFound = 'Δεν βρέθηκαν Πίνακες στη βάση.';
$strNotNumber = 'Αυτό δεν είναι αριθμός!';
$strNotOK = 'ΛΑΘΟΣ';
$strNotSet = 'Ο πίνακας <b>%s</b> δεν βρέθηκε ή δεν ορίστηκε στη %s';  
$strNoUsersFound = 'Δεν βρέθηκαν χρήστες.';
$strNoValidateSQL = 'Skip Validate SQL';  
$strNo = 'Όχι';
$strNull = 'Κενό';
$strNumSearchResultsInTable = '%s αποτελέσματα στον πίνακα <i>%s</i>';
$strNumSearchResultsTotal = '<b>Σύνολο:</b> <i>%s</i> αποτελέσματα';
$strNumTables = 'Πίνακες'; 

$strOK = 'OK';
$strOperations = 'Λειτουργίες';  
$strOptimizeTable = 'Βελτιστοποίηση Πίνακα';
$strOr = 'Ή';
$strOverhead = 'Επιβάρυνση';
$strOverwriteExisting = 'Αντικατάσταση υπαρχόντων αρχείων';  

$strPageNumber = 'Σελίδα:';  
$strPaperSize = 'Μέγεθος χαρτιού';  
$strPartialText = 'Επιμέρους κείμενα';
$strPasswordChanged = 'Ο Κωδικός Πρόσβασης για τον χρήστη %s άλλαξε επιτυχώς.'; 
$strPasswordEmpty = 'Ο Κωδικός Πρόσβασης είναι κενός!';
$strPasswordNotSame = 'Οι κωδικοί πρόσβασης δεν είναι ίδιοι!';
$strPassword = 'Κωδικός Πρόσβασης';
$strPdfDbSchema = 'Σχήμα της βάσης "%s" - Σελίδα %s';  
$strPdfInvalidTblName = 'Ο πίνακας "%s" δεν υπάρχει!';  
$strPdfNoTables = 'Δεν υπάρχουν πίνακες';
$strPerHour = 'ανά ώρα'; 
$strPerMinute = 'ανά λεπτό';
$strPerSecond = 'ανά δευτερόλεπτο';
$strPhoneBook = 'τηλ. κατάλογος';  
$strPHP40203 = 'Χρησιμοποιείτε την PHP 4.2.3, η οποία είχε ένα σοβαρό πρόβλημα με αλφαριθμητικά τύπου multi-byte (mbstring). Δείτε το αναφορά προβλήματος PHP 19404. Αυτή η έκδοση της PHP δεν προτείνεται για χρήση με το phpMyAdmin.';  
$strPHPVersion = 'Έκδοση PHP';
$strPhp = 'Δημιουργία κώδικα PHP';  
$strPmaDocumentation = 'Τεκμηρίωση phpMyAdmin';
$strPmaUriError = 'Η εντολή <tt>$cfg[\'PmaAbsoluteUri\']</tt> ΠΡΕΠΕΙ να οριστεί στο αρχείο ρυθμίσεων!';
$strPortrait = 'Κάθετη διάταξη';  
$strPos1 = 'Αρχή';
$strPrevious = 'Προηγούμενο';
$strPrimaryKeyHasBeenDropped = 'Το πρωτεύον κλειδί διεγράφη';
$strPrimaryKeyName = 'Το όνομα του πρωτεύοντος κλειδιού πρέπει να είναι... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>πρέπει</b> να είναι το όνομα του πρωτεύοντος κλειδιού και <b>μόνο αυτού</b> !)';
$strPrimary = 'Πρωτεύον';
$strPrintView = 'Εμφάνιση για εκτύπωση';
$strPrint = 'Εκτύπωση';  
$strPrivDescAllPrivileges = 'Περιλαμβάνει όλα τα προνόμια εκτός από το GRANT.'; 
$strPrivDescAlter = 'Επιτρέπει την αλλαγή δομής των υπαρχόντων πινάκων.'; 
$strPrivDescCreateDb = 'Επιτρέπει τη δημιουργία νέων βάσεων και πινάκων.'; 
$strPrivDescCreateTbl = 'Επιτρέπει τη δημιουργία νέων πινάκων.'; 
$strPrivDescCreateTmpTable = 'Επιτρέπει τη δημιουργία προσωρινών πινάκων.'; 
$strPrivDescDelete = 'Επιτρέπει τη διαγραφή δεδομένων.'; 
$strPrivDescDropDb = 'Επιτρέπει τη διαγραφή βάσεων και πινάκων.'; 
$strPrivDescDropTbl = 'Επιτρέπει τη διαγραφή πινάκων.'; 
$strPrivDescExecute = 'Επιτρέπει την εκτέλεση αποθηκευμένων ρουτινών. Δεν έχει χρήση σε αυτήν την έκδοση MySQL version.'; 
$strPrivDescFile = 'Επιτρέπει την εισαγωγή και εξαγωγή δεδομένων από και σε αρχεία.'; 
$strPrivDescGrant = 'Επιτρέπει την προσθήκη χρηστών και προνομίων χωρίς να επαναφορτώσετε τους πίνακες προνομίων.'; 
$strPrivDescIndex = 'Επιτρέπει την δημιουργία και την διαγραφή ευρετηρίων.'; 
$strPrivDescInsert = 'Επιτρέπει την εισαγωγή και την αντικατάσταση δεδομένων.'; 
$strPrivDescLockTables = 'Επιτρέπει το κλείδωμα πινάκων για την τρέχουσα λειτουργία.'; 
$strPrivDescMaxConnections = 'Περιορίζει τον αριθμό των νέων συνδέσεων που ο χρήστης μπορεί να ξεκινήσει ανά ώρα.';
$strPrivDescMaxQuestions = 'Περιορίζει τον αριθμό των επερωτημάτων που ο χρήστης μπορεί να στείλει στον διακομιστή ανά ώρα.';
$strPrivDescMaxUpdates = 'Περιορίζει τον αριθμό των αλλαγής πινάκων ή βάσεων που ο χρήστης μπορεί να εκετελέσει ανά ώρα.';
$strPrivDescProcess3 = 'Επιτρέπει την διακοπή διεργασιών άλλων χρηστών.'; 
$strPrivDescProcess4 = 'Επιτρέπει την εμφάνιση ολοκληρωμένων επερωτημάτων στη λίστα διεργασιών.'; 
$strPrivDescReferences = 'Δεν έχει χρήση σε αυτήν την έκδοση MySQL.'; 
$strPrivDescReload = 'Επιτρέπει την επανεκκίνηση του διακομιστή και τον καθαρισμό των προσωρινών αρχείων του.'; 
$strPrivDescReplClient = 'Δίνει το δικαίωμα στον χρήστη να βρει που είναι οι κύριοι και δευτερεύοντες διακομιστές.'; 
$strPrivDescReplSlave = 'Απαιτείται για τους δευτερευόντες διακομιστές αναπαραγωγής.'; 
$strPrivDescSelect = 'Επιτρέπει την ανάγνωση δεδομένων.'; 
$strPrivDescShowDb = 'Δίνει πρόσβαση στην πλήρη λίστα των βάσεων δεδομένων.'; 
$strPrivDescShutdown = 'Επιτρέπει την διακοπή λειτουργίας του διακομιστή.'; 
$strPrivDescSuper = 'Επιτρέπει τη σύνδεση, ακόμα και όταν ο μέγιστος αριθμός συνδέσεων έχει καλυθφεί; Απαιτείται για τις περισσότερες λειτουργίες διαχείρισης όπως ο ορισμός γενικών μεταβλητών ή τη διακοπή λειτουργιών άλλων χρηστών.'; 
$strPrivDescUpdate = 'Επιτρέπει την αλλαγή δεδομένων.'; 
$strPrivDescUsage = 'Χωρίς προνόμια.'; 
$strPrivilegesReloaded = 'Τα προνόμια επαναφορτώθηκαν επιτυχώς.'; 
$strPrivileges = 'Προνόμια';
$strProcesses = 'Διεργασίες'; 
$strProcesslist = 'Λίστα διεργασιών'; 
$strPutColNames = 'Εμφάνιση ονομάτων πεδίων στην πρώτη γραμμή';  

$strQBEDel = 'Διαγραφή';
$strQBEIns = 'Εισαγωγή';
$strQBE = 'Επερώτημα κατά παράδειγμα';
$strQueryFrame = 'Παράθυρο επερωτήματος';
$strQueryOnDb = 'Εντολή SQL στη βάση <b>%s</b>:';
$strQuerySQLHistory = 'Ιστορικό SQL';
$strQueryStatistics = '<b>Στατιστικά επερωτημάτων</b>: Από την έναρξη λειτουργίας, %s επερωτήματα έχουν σταλεί στον διακομιστή.';
$strQueryTime = 'Το επερώτημα χρειάστηκε %01.4f δευτ/τα';
$strQueryType = 'Τύπος επερωτήματος'; 
$strQueryWindowLock = 'Να μην αλλάξει το επερώτημα από εξωτερική πηγή';  

$strReceived = 'Λήφθησαν'; 
$strRecords = 'Εγγραφές';
$strReferentialIntegrity = 'Έλεγχος ακεραιότητας σχέσεων:';
$strRelationalSchema = 'Σχεσιακό σχήμα';  
$strRelationNotWorking = 'Οι επιπρόσθετες λειτουργίες για εργασία με συσχετισμένους πίνακες έχουν απενεργοποιηθεί. Για να μάθετε γιατί, πατήστε %sεδώ%s.';
$strRelations = 'Σχέσεις';  
$strRelationView = 'Εμφάνιση σχέσεων';  
$strReloadingThePrivileges = 'Επαναφόρτωση προνομίων'; 
$strRemoveSelectedUsers = 'Διαγραφή των επιλεγμένων χρηστών'; 
$strRenameTableOK = 'Ο Πίνακας %s μετονομάσθηκε σε %s';
$strRenameTable = 'Μετονομασία πίνακα σε';
$strRepairTable = 'Επιδιόρθωση πίνακα';
$strReplaceNULLBy = 'Αντικατάσταση τιμής NULL με';  
$strReplaceTable = 'Αντικατάσταση δεδομένων Πίνακα με το αρχείο';
$strReset = 'Επαναφορά';
$strResourceLimits = 'Όρια πόρων'; 
$strReType = 'Επαναεισαγωγή';
$strRevokeAndDeleteDescr = 'Οι χρήστες θα συνεχίσουν να έχουν το προνόμιο USAGE μέχρις ότου επαναφορτωθούν τα προνόμια.'; 
$strRevokeAndDelete = 'Ανάκληση όλων των ενεργών προνομίων από τους χρήστες και διαγραφή τους.'; 
$strRevokeMessage = 'Ανακαλέσατε τα προνόμια για %s';
$strRevoke = 'Ανάκληση';
$strRowLength = 'Μέγεθος Γραμμής';
$strRowsFrom = 'Εγγραφές αρχίζοντας από την εγγραφή';
$strRowSize = ' Μέγεθος Εγγραφής ';
$strRowsModeFlippedHorizontal = 'οριζόντια (στραμμένες επικεφαλίδες)';
$strRowsModeHorizontal = 'οριζόντια';
$strRowsModeOptions = 'σε %s μορφή με επανάληψη επικεφαλίδων ανά %s κελιά';
$strRowsModeVertical = 'κάθετη';
$strRowsStatistic = 'Στατιστικά Εγγραφών';
$strRows = 'Εγγραφές';
$strRunning = 'που εκτελείται στο %s';
$strRunQuery = 'Υποβολή επερωτήματος';
$strRunSQLQuery = 'Εκτέλεση εντολής/εντολών SQL στη βάση δεδομένων %s';
$strRussian = 'Ρωσσικά';  

$strSaveOnServer = 'Αποθήκευση στον διακομιστή στον φάκελο %s';  
$strSave = 'Αποθήκευση';
$strScaleFactorSmall = 'Η κλίμακα είναι πολύ μικρή για να εμφανιστεί το σχήμα σε μία σελίδα';  
$strSearchFormTitle = 'Αναζήτηση στη βάση';
$strSearchInTables = 'Μέσα στους πίνακες:';
$strSearchNeedle = 'Όροι ή τιμές για αναζήτηση (μπαλαντέρ: "%"):';
$strSearchOption1 = 'τουλάχιστον έναν από τους όρους';
$strSearchOption2 = 'όλους τους όρους';
$strSearchOption3 = 'την ακριβή φράση';
$strSearchOption4 = 'ως regular expression';
$strSearchResultsFor = 'Αποτελέσματα αναζήτησης για "<i>%s</i>" %s:';
$strSearchType = 'Έυρεση:';
$strSearch = 'Αναζήτηση';
$strSecretRequired = 'Το αρχείο ρυθμίσεων χρειάζεται τώρα μία μυστική φράση-κλειδί (blowfish_secret).';  
$strSelectADb = 'Παρακαλώ επιλέξτε μία βάση δεδομένων';
$strSelectAll = 'Επιλογή όλων';
$strSelectFields = 'Επιλογή πεδίων (τουλάχιστον ένα)';
$strSelectNumRows = 'στην εντολή';
$strSelectTables = 'Επιλογή Πινάκων';  
$strSend = 'Αποστολή';
$strSent = 'Εστάλησαν'; 
$strServerChoice = 'Επιλογή Διακομιστή';
$strServerStatusUptime = 'Αυτός ο διακομιστής MySQL λειτουργεί για %s. Ξεκίνησε στις %s.'; 
$strServerStatus = 'Πληροφορίες εκτέλεσης'; 
$strServerTabVariables = 'Μεταβλητές'; 
$strServerTrafficNotes = '<b>Κίνηση Διακομιστή</b>: Αυτοί οι πίνακες δείχνουν στατιστικά χρήσης δικτύου αυτού του διακομιστή MySQL από την έναρξη της λειτουργίας του.';
$strServerVars = 'Ρυθμίσεις και μεταβλητές του διακομιστή'; 
$strServerVersion = 'Έκδοση Διακομιστή';
$strServer = 'Διακομιστής';  
$strSessionValue = 'Τιμή Session'; 
$strSetEnumVal = 'Αν ο τύπος του πεδίου είναι «enum» ή «set», παρακαλώ εισάγετε τις τιμές χρησιμοποιώντας την εξής μορφή: \'α\',\'β\',\'γ\'...<br /> Αν χρειάζεται να εισάγετε την ανάποδη κάθετο ("\") ή απλά εισαγωγικά ("\'"), προθέστε τα με ανάποδη κάθετο στην αρχή (για παράδειγμα \'\\\\χψω\' ή \'α\\\'β\').';
$strShowAll = 'Εμφάνιση όλων';
$strShowColor = 'Εμφάνιση χρωμάτων';  
$strShowDatadictAs = 'Μορφή λεξικού δεδομένων';  
$strShowFullQueries = 'Πλήρης εμφάνιση επερωτημάτων';  
$strShowGrid = 'Εμφάνιση πλέγματος';  
$strShowingRecords = 'Εμφάνιση εγγραφής ';
$strShowPHPInfo = 'Εμφάνιση πληροφοριών της PHP';
$strShowTableDimension = 'Εμφάνιση διαστάσεων πινάκων';  
$strShowTables = 'Εμφάνιση πινάκων';
$strShowThisQuery = ' Εμφάνισε εδώ ξανά αυτό το επερώτημα';
$strShow = 'Εμφάνιση';
$strSimplifiedChinese = 'Απλοποιημένα Κινεζικά';  
$strSingly = '(μοναδικά)';
$strSize = 'Μέγεθος';
$strSort = 'Ταξινόμηση';
$strSpaceUsage = 'Χρήση χώρου';
$strSplitWordsWithSpace = 'Οι λέξεις χωρίζονται από τον χαρακτήρα διαστήματος (" ").';
$strSQLParserBugMessage = 'Υπάρχει περίπτωση να εντοπίσατε ένα πρόβλημα στον SQL parser. Παρακαλώ εξετάστε το επερώτημά σας προσεκτικά και ελέγξτε ότι όλα τα εισαγωγικά ανοίγουν και κλείνουν σωστά. \'Αλλες πιθανές αιτίες μπορούν να είναι η αποστολή αρχείου με δυαδικό κώδικα εκτός εισαγωγικών. Μπορείτε επίσης να δοκιμάσετε το επερώτημά σας στη γραμμή εντολών της MySQL.  Εάν συνεχίζετε να έχετε πρόβλημα, ή εάν ο parser αποτυγχάνει όπου η γραμμή εντολών επιτυγχάνει, παρακαλώ απομονώστε το επερώτημα εκείνο που δημιουργεί το πρόβλημα και στείλτε αναφορά λάθους με τα δεδομένα που βρίσκονται στο τμήμα CUT που ακολουθεί:';  
$strSQLParserUserError = 'Φαίνεται να υπάρχει ένα λάθος στο επερώτημά σας. Το κάτωθι λάθος διακομιστή MySQL, εάν υπάρχει κάποιο, μπορεί επίσης να σας βοηθήσει να διαγνώσετε το πρόβλημα.';
$strSQLQuery = 'Εντολή SQL';
$strSQLResult = 'αποτέλεσμα SQL'; 
$strSQL = 'SQL'; 
$strSQPBugInvalidIdentifer = '\'Αγνωστο Αναγνωριστικό';  
$strSQPBugUnclosedQuote = 'Ανοιχτά εισαγωγικά';  
$strSQPBugUnknownPunctuation = '\'Αγνωστο σημείο στίξης';  
$strStatCheckTime = 'τελευταίος έλεγχος';
$strStatCreateTime = 'Δημιουργία';
$strStatement = 'Δηλώσεις';
$strStatUpdateTime = 'Τελευταία ενημέρωση';
$strStatus = 'Κατάσταση'; 
$strStrucCSV = 'Δεδομένα CSV';
$strStrucData = 'Δομή και δεδομένα';
$strStrucExcelCSV = 'Μορφή CSV για δεδομένα MS Excel';
$strStrucOnly = 'Μόνο η δομή';
$strStructPropose = 'Προτεινόμενη δομή πίνακα';  
$strStructure = 'Δομή';  
$strSubmit = 'Αποστολή';
$strSuccess = 'Η SQL εντολή σας εκτελέσθηκε επιτυχώς';
$strSum = 'Σύνολο';
$strSwedish = 'Σουηδικά';  
$strSwitchToTable = 'Μεταφορά στον αντεγραμμένο πίνακα';  

$strTableComments = 'Σχόλια Πίνακα';
$strTableEmpty = 'Το όνομα του Πίνακα είναι κενό!';
$strTableHasBeenDropped = 'Ο Πίνακας %s διεγράφη';
$strTableHasBeenEmptied = 'Ο Πίνακας %s άδειασε';
$strTableHasBeenFlushed = 'Ο Πίνακας %s εκκαθαρίστικε ("FLUSH")';
$strTableMaintenance = 'Συντήρηση Πίνακα';
$strTableOfContents = 'Πίνακας περιεχομένων';  
$strTableOptions = 'Επιλογές πίνακα';  
$strTables = '%s Πίνακας/Πίνακες';
$strTableStructure = 'Δομή Πίνακα για τον Πίνακα';
$strTable = 'Πίνακας ';
$strTblPrivileges = 'Προνόμια πινάκων'; 
$strTextAreaLength = ' Εξαιτίας του μεγέθος του,<br /> αυτό το πεδίο ίσως να μη μπορεί να διορθωθεί ';
$strThai = 'Ταϋλανδικά';  
$strThisHost = 'Αυτός ο διακομιστής'; 
$strThreadSuccessfullyKilled = 'Η λειτουργία %s διεκόπη.'; 
$strTime = 'Χρόνος'; 
$strToggleScratchboard = '(Απ)ενεργοποίηση πίνακα σχεδιασμού';  
$strTotalUC = 'Σύνολο'; 
$strTotal = 'συνολικά';
$strTraditionalChinese = 'Παραδοσιακά Κινεζικά';  
$strTraffic = 'Κίνηση'; 
$strTransformation_image_jpeg__inline = 'Εμφανίζει μια εικόνα προεπισκόπησης με σύνδεσμο; επιλογές: πλάτος, ύψος σε pixels (διατηρεί τις αρχικές αναλογίες)';
$strTransformation_image_jpeg__link = 'Εμφανίζει έναν σύνδεσμο για αυτήν την εικόνα.';
$strTransformation_image_png__inline = 'Δείτε image/jpeg: inline';  
$strTransformation_text_plain__external = 'ΜΟΝΟ ΓΙΑ LINUX: Εκτελεί μία εξωτερική εφαρμογή και στέλνει τα δεδομένα μέσω \'standard input\'. Επιστρέφει το αποτέλεσμα της εφαρμογής. Εξ\' ορισμού τιμή είναι το Tidy, που τυπώνει μορφοποιημένο κώδικα HTML. Για λόγους ασφαλείες, πρέπει χειροκίνητα να αλλάξετε το αρχείο libraries/transformations/text_plain__external.inc.php και να εισάγετε τις εφαρμογές που εσείς επιτρέπετε να εκτελούνται. Η πρώτη επιλογή είναι ο αριθμός της εφαρμογής που θέλετε να χρησιμοποιήσετε και η δεύτερη επιλογή είναι οι παράμετροι της. Η τρίτη επιλογή, αν τεθεί σε 1 θα μετατρέψει το αποτέλεσμα χρησιμοποιώντας την εντολή htmlspecialchars() (Εξ\' ορισμού τιμή: 1). Η τέταρτη επιλογή, αν τεθεί σε 1 θα εισάγει NOWRAP στο κελί περιεχομένου ούτως ώστε όλο το αποτέλεσμα να εμφανιστεί χωρίς αλλαγές στην διάταξη (Εξ\' ορισμού τιμή: 1)';
$strTransformation_text_plain__formatted = 'Διατηρεί την αρχική μορφοποίηση του πεδίου. Δεν χρησιμοποιούνται χαρακτήρες διαφυγής.';
$strTransformation_text_plain__imagelink = 'Εμφανίζει μία εικόνα και ένα σύνδεσμο, το πεδίο περιέχει το όνομα αρχείου. Η πρώτη επιλογή είναι ένα πρόθεμα όπως "http://domain.com/", η δεύτερη επιλογή είναι το πλάτος σε pixels, η τρίτη είναι το ύψος.';  
$strTransformation_text_plain__link = 'Εμφανίζει ένα σύνδεσμο, το πεδίο περιέχει το όνομα αρχείου. Η πρώτη επιλογή είναι ένα πρόθεμα όπως "http://domain.com/", η δεύτερη επιλογή είναι ένας τίτλος για τον σύνδεσμο.';  
$strTransformation_text_plain__substr = 'Εμφανίζει μόνο μέρος ενός αλφαριθμητικού. Η πρώτη επιλογή είναι η θέση στην οποία ξεκινά η εμφάνιση του κειμένου (Εξ\' ορισμού 0). Η δεύτερη επιλογή είναι το μήκος του κειμένου. Αν μείνει κενό θα επιστραφεί όλο το αλφαριθμητικό. Η τρίτη επιλογή καθορίζει ποιοι χαρακτήρες θα ακολουθούν το κείμενο όταν εμφανίζεται μέρος του (Εξ\' ορισμού: ...) .';
$strTruncateQueries = 'Αποκοπή εμφανιζόμενων επερωτημάτων';  
$strTurkish = 'Τουρκικά';  
$strType = 'Τύπος';

$strUkrainian = 'Ουκρανικά';  
$strUncheckAll = 'Απεπιλογή όλων';
$strUnicode = 'Unicode';  
$strUnique = 'Μοναδικό';
$strUnknown = 'άγνωστο';  
$strUnselectAll = 'Απεπιλογή όλων';
$strUpdatePrivMessage = 'Τα προνόμια του χρήστη %s ενημερώθηκαν.';
$strUpdateProfileMessage = 'Τα στοιχεία ανανεώθηκαν.';
$strUpdateQuery = 'Ενημέρωση της εντολής';
$strUpdComTab = 'Παρακαλώ διαβάστε στην τεκμηρίωση για το πως μπορείτε να ανανεώσετε τον πίνακα Column_comments';  
$strUsage = 'Χρήση';
$strUseBackquotes = 'Χρήση ανάποδων εισαγωγικών στα ονόματα των Πινάκων και των Πεδίων';
$strUseHostTable = 'Use Host Table';  
$strUserAlreadyExists = 'Ο χρήστης %s υπάρχει ήδη!'; 
$strUserEmpty = 'Το όνομα του χρήστη είναι κενό!';
$strUserName = 'Όνομα χρήστη';
$strUserNotFound = 'Ο επιλεγμένος χρήστης δεν βρέθηκε στον πίνακα προνομίων.'; 
$strUserOverview = 'Περίληψη χρηστών'; 
$strUsersDeleted = 'Οι επιλεγμένοι χρήστες διεγράφησαν επιτυχώς.'; 
$strUsersHavingAccessToDb = 'Χρήστες με πρόσβαση στη βάση &quot;%s&quot;';  
$strUser = 'Χρήστης';
$strUseTables = 'Χρήση Πινάκων';
$strUseTextField = 'Χρησιμοποιήστε το πεδίο κειμένου'; 
$strUseThisValue = 'Χρήση αυτής της τιμής';  

$strValidateSQL = 'Επικύρωση SQL';  
$strValidatorError = 'Ο επικυρωτής SQL δεν μπόρεσε να ενεργοποιηθεί. Παρακαλώ ελέγξτε ότι έχετε εγκαταστήσει της απαραίτητες επεκτάσεις της php όπως περιγράφεται στην %sdocumentation%s.'; 
$strValue = 'Τιμή';
$strVar = 'Μεταβλητή'; 
$strViewDumpDatabases = 'Εμφάνισης σχήματος βάσεων';
$strViewDumpDB = 'Εμφάνιση σχήματος της βάσης';
$strViewDump = 'Εμφάνιση σχήματος του πίνακα';

$strWebServerUploadDirectoryError = 'Ο υποκατάλογος που ορίσατε για την αποθήκευση αρχείων δεν μπόρεσε να βρεθεί';  
$strWebServerUploadDirectory = 'Υποκατάλογος αποθήκευσης αρχείων διακομιστή';  
$strWelcome = 'Καλωσήρθατε στο %s';
$strWestEuropean = 'Δυτικής Ευρώπης';  
$strWildcard = 'μπαλαντέρ';  
$strWindowNotFound = 'Δεν ήταν δυνατό να ανανεωθεί το target παράθυρο του περιηγητή. Ίσως κλείσατε το parent παράθυρο ή ο περιηγητής σας δεν επιτρέπει τις ανανεώσεις μεταξύ παραθύρων λόγω ρυθμίσεων ασφαλείας.';  
$strWithChecked = 'Με τους επιλεγμένους:';
$strWrongUser = 'Λανθασμένο όνομα χρήστη/κωδικός πρόσβασης. \'Αρνηση πρόσβασης.';

$strXML = 'XML';

$strYes = 'Ναι';

$strZeroRemovesTheLimit = 'Σημείωση: Αν ορίσετε αυτές τις επιλογές σε 0 (μηδέν) αφαιρείτε ο περιορισμός.'; 
$strZip = 'συμπίεση «zip»';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
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
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCollation = 'Collation';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCSV = 'CSV';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
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
$strExcelEdition = 'Excel edition';  //to translate

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

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

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
$strLogServer = 'Server';  //to translate
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
$strSortByKey = 'Sort by key';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strSQLExportType = 'Export type';  //to translate
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
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
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
