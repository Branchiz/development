<?php
/* $Id: french-iso-8859-15.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'iso-8859-15';
$text_dir = 'ltr';
$number_thousands_separator = '�';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('o', 'Kio', 'Mio', 'Gio', 'Tio', 'Pio', 'Eio');

$mysql_5_0_doc_lang = 'fr';

$day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$month = array('Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre');
// Voir http://www.php.net/manual/en/function.strftime.php pour la variable
// ci-dessous
$datefmt = '%A %d %B %Y � %H:%M';

$timespanfmt = '%s jours, %s heures, %s minutes et %s secondes';

$strAbortedClients = 'Arr�ts pr�matur�s';
$strAccessDenied = 'Acc�s refus�';
$strAccessDeniedCreateConfig = 'La raison probable est que vous n\'avez pas cr�� de fichier de configuration. Vous pouvez utiliser le %1$sscript de configuration%2$s dans ce but.';
$strAccessDeniedExplanation = 'phpMyAdmin a tent� de se connecter au serveur MySQL, et le serveur a rejet� la connexion. Veuillez v�rifier les valeurs de "host", "username" et "password" dans votre configuration et vous assurer qu\'elles correspondent aux informations fournies par l\'administrateur du serveur MySQL.';
$strAction = 'Action';
$strAddAutoIncrement = 'Inclure la valeur courante de l\'AUTO_INCREMENT';
$strAddClause = 'Ajouter %s';
$strAddConstraints = 'Inclure les contraintes de cl�s �trang�res';
$strAddDeleteColumn = 'Ajouter/effacer x colonne(s)';
$strAddDeleteRow = 'Ajouter/effacer x ligne(s)';
$strAddFields = 'Ajouter %s champ(s)';
$strAddHeaderComment = 'Commentaires mis en en-t�te (\\n s�pare les lignes)';
$strAddIntoComments = 'Inclure sous forme de commentaires';
$strAddNewField = 'Ajouter un champ';
$strAddPrivilegesOnDb = 'Ajouter des privil�ges sur cette base de donn�es';
$strAddPrivilegesOnTbl = 'Ajouter des privil�ges sur cette table';
$strAddSearchConditions = 'Crit�res de recherche (pour l\'�nonc� "where"):';
$strAddToIndex = 'Ajouter � l\'index&nbsp;%s&nbsp;colonne(s)';
$strAddUser = 'Ajouter un utilisateur';
$strAddUserMessage = 'Vous avez ajout� un utilisateur';
$strAdministration = 'Administration';
$strAffectedRows = 'Nombre d\'enregistrements affect�s :';
$strAfter = 'Apr�s %s';
$strAfterInsertBack = 'Retourner � la page pr�c�dente';
$strAfterInsertNewInsert = 'Ins�rer un nouvel enregistrement';
$strAfterInsertNext = 'Modifier l\'enregistrement suivant';
$strAfterInsertSame = 'Demeurer sur cette page';
$strAllowInterrupt = 'Permettre l\'interruption de l\'importation si la limite de temps est sur le point d\'�tre atteinte. Ceci pourrait aider � importer des fichiers volumineux, au d�triment du respect des transactions.';
$strAllTableSameWidth = 'Afficher toutes les tables avec une largeur identique';
$strAll = 'Tout';
$strAlterOrderBy = '<b>Ordonner</b> la table par';
$strAnalyzeTable = 'Analyser la table';
$strAnd = 'et';
$strAndThen = 'et ensuite';
$strAngularLinks = 'Liens angulaires';
$strAnIndex = 'Un index a �t� ajout� sur %s';
$strAnyHost = 'Tout serveur';
$strAny = 'N\'importe quel';
$strAnyUser = 'Tout utilisateur';
$strApproximateCount = 'Peut �tre approximatif. Voir FAQ 3.11';
$strAPrimaryKey = 'Une cl� primaire a �t� ajout�e sur %s';
$strArabic = 'arabe';
$strArmenian = 'arm�nien';
$strAscending = 'Croissant';
$strAtBeginningOfTable = 'En d�but de table';
$strAtEndOfTable = 'En fin de table';
$strAttr = 'Attributs';
$strAutomaticLayout = 'Mise en page automatique';

$strBack = 'Retour';
$strBaltic = 'baltique';
$strBeginCut = 'D�but de la section � couper';
$strBeginRaw = 'D�but des informations sur l\'anomalie';
$strBinary = 'Binaire';
$strBinaryDoNotEdit = 'Binaire - ne pas �diter';
$strBinaryLog = 'Log binaire';
$strBinLogEventType = 'Type d\'�v�nement';
$strBinLogInfo = 'Information';
$strBinLogName = 'Nom du log binaire';
$strBinLogOriginalPosition = 'Position d\'origine';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'ID du serveur';
$strBookmarkAllUsers = 'Signet visible pour les autres utilisateurs';
$strBookmarkCreated = 'Signet %s cr��';
$strBookmarkDeleted = 'Le signet a �t� effac�.';
$strBookmarkLabel = 'Intitul�';
$strBookmarkQuery = 'Requ�tes en signets';
$strBookmarkReplace = 'Remplacer un signet existant du m�me nom';
$strBookmarkThis = 'Conserver cette requ�te dans les signets';
$strBookmarkView = 'Voir uniquement';
$strBrowse = 'Afficher';
$strBrowseDistinctValues = 'Affiche les valeurs distinctes';
$strBrowseForeignValues = 'Afficher les valeurs de la table li�e';
$strBufferPoolActivity = 'Activit� de la m�moire-tampon';
$strBufferPool = 'M�moire-tampon';
$strBufferPoolUsage = 'Utilisation de la m�moire-tampon';
$strBufferReadMissesInPercent = 'Lectures non-satisfaites en %';
$strBufferReadMisses = 'Lectures non-satisfaites';
$strBufferWriteWaitsInPercent = 'Nombre d\'attentes d\'�criture en %';
$strBufferWriteWaits = 'Nombre d\'attentes d\'�criture';
$strBulgarian = 'bulgare';
$strBusyPages = 'Pages occup�es';
$strBzError = 'phpMyAdmin n\'a pu compresser le fichier export� en raison d\'une composante Bz2 d�faillante dans cette version de PHP. Il est recommand� de donner � <code>$cfg[\'BZipDump\']</code> dans votre fichier de configuration phpMyAdmin la valeur <code>FALSE</code>. Si vous voulez utiliser la compression en mode Bz2, veuillez mettre � niveau votre version de PHP. Ce rapport d\'anomalies PHP donne les d�tails: %s.';
$strBzip = '"bzipp�"';

$strCalendar = 'Calendrier';
$strCancel = 'Annuler';
$strCanNotLoadExportPlugins = 'Erreur lors du chargement des modules d\'exportation!';
$strCanNotLoadImportPlugins = 'Chargement impossible des greffons d\'importation, veuillez v�rifier votre installation!';
$strCannotLogin = 'Connexion au serveur MySQL non permise';
$strCantLoad = 'PHP ne peut charger l\'extension %s, [br]veuillez v�rifier votre configuration de PHP';
$strCantLoadRecodeIconv = 'Erreur lors du chargement de l\'extension iconv ou recode, utilis�e pour convertir le jeu de caract�res; veuillez activer l\'une de ces extensions dans PHP, ou d�sactiver la conversion des jeux de caract�res dans phpMyAdmin';
$strCantRenameIdxToPrimary = 'L\'index ne peut �tre renomm� PRIMARY!';
$strCantUseRecodeIconv = 'Erreur lors de l\'utilisation de iconv, libiconv et recode_string, alors que ces extensions semblent charg�es. Veuillez v�rifier votre configuration de PHP.';
$strCardinality = 'Cardinalit�';
$strCaseInsensitive = 'insensible � la casse';
$strCaseSensitive = 'sensible � la casse';
$strCentralEuropean = 'Europe centrale';
$strChangeCopyModeCopy = '... conserver intact l\'ancien utilisateur.';
$strChangeCopyMode = 'Cr�er un nouvel utilisateur avec les m�mes privil�ges et ...';
$strChangeCopyModeDeleteAndReload = ' ... supprimer l\'ancien utilisateur, puis recharger les privil�ges au serveur.';
$strChangeCopyModeJustDelete = ' ... supprimer l\'ancien utilisateur.';
$strChangeCopyModeRevoke = ' ... effacer tous les privil�ges de l\'ancien utilisateur, puis l\'effacer.';
$strChangeCopyUser = 'Changement des informations de connexion / Copie d\'utilisateur';
$strChangeDisplay = 'Champ � afficher';
$strChange = 'Modifier';
$strChangePassword = 'Modifier le mot de passe';
$strCharset = 'Jeu de caract�res';
$strCharsetOfFile = 'Jeu de caract�res du fichier:';
$strCharsetsAndCollations = 'Jeux de caract�res et interclassement';
$strCharsets = 'Jeux de caract�res';
$strCheckAll = 'Tout cocher';
$strCheckOverhead = 'Cocher tables avec pertes';
$strCheckPrivsLong = 'V�rifier les privil�ges pour la base de donn�es &quot;%s&quot;.';
$strCheckPrivs = 'V�rifier les privil�ges';
$strCheckTable = 'V�rifier la table';
$strChoosePage = 'Page � �diter';
$strColComFeat = 'Commentaires de colonnes';
$strCollation = 'Interclassement';
$strColumnNames = 'Nom des colonnes';
$strColumnPrivileges = 'Privil�ges de colonnes';
$strCommand = 'Commande';
$strComments = 'Commentaires';
$strCommentsForTable = 'COMMENTAIRES POUR LA TABLE';
$strCompatibleHashing = 'compatible MySQL&nbsp;4.0';
$strCompleteInserts = 'Insertions compl�tes';
$strCompression = 'Compression';
$strCompressionWillBeDetected = 'Ces modes de compression seront d�tect�s automatiquement : %s';
$strConfigDefaultFileError = 'Chargement de la configuration par d�faut impossible depuis "%1$s"';
$strConfigFileError = 'phpMyAdmin n\'a pu lire votre fichier de configuration!<br />Il est possible qu\'il contienne une erreur de syntaxe, ou que PHP soit incapable de le trouver<br />� l\'aide du lien suivant, vous pouvez v�rifier le message d\'erreur g�n�r� par PHP;<br />la plupart du temps, un apostrophe ou un point-virgule sont manquants.<br />Si vous recevez une page blanche, aucune erreur n\'a �t� d�tect�e.';
$strConfigureTableCoord = 'Les coordonn�es de la table %s n\'ont pas �t� configur�es';
$strConnectionError = 'Connexion impossible: r�glages incorrects.';
$strConnections = 'Connexions';
$strConstraintsForDumped = 'Contraintes pour les tables export�es';
$strConstraintsForTable = 'Contraintes pour la table';
$strControluserFailed = 'La connexion au "controluser" tel que d�fini dans votre configuration a �chou�.';
$strCookiesRequired = 'Vous devez accepter les cookies pour poursuivre.';
$strCopy = 'Copier';
$strCopyDatabaseOK = 'La base de donn�es %s a �t� copi�e sur %s';
$strCopyTable = '<b>Copier</b> la table vers (base<b>.</b>table)&nbsp;:';
$strCopyTableOK = 'La table %s a �t� copi�e vers %s.';
$strCopyTableSameNames = 'On ne peut copier la table sur elle-m�me!';
$strCouldNotKill = 'phpMyAdmin n\'a pu �liminer le processus %s. Il �tait probablement d�j� ferm�.';
$strCreate = 'Cr�er';
$strCreateDatabaseBeforeCopying = 'Faire CREATE DATABASE avant la copie';
$strCreateIndex = 'Cr�er un index sur&nbsp;%s&nbsp;colonne(s)';
$strCreateIndexTopic = 'Cr�er un nouvel index';
$strCreateNewDatabase = 'Cr�er une base de donn�es';
$strCreateNewTable = '<b>Cr�er une nouvelle table</b> sur la base %s';
$strCreatePage = 'Cr�er une page';
$strCreatePdfFeat = 'G�n�ration de sch�mas en PDF';
$strCreateRelation = 'Nouvelle relation';
$strCreateTable  = 'Nouvelle table';
$strCreateUserDatabase = 'Base de donn�es pour cet utilisateur';
$strCreateUserDatabaseName = 'Cr�er une base portant son nom et donner � cet utilisateur tous les privil�ges sur cette base';
$strCreateUserDatabaseNone = 'Aucune';
$strCreateUserDatabaseWildcard = 'Donner les privil�ges passepartout ("%")';
$strCreationDates = 'Dates de cr�ation/modification/v�rification';
$strCriteria = 'Crit�re';
$strCroatian = 'croate';
$strCSV = 'CSV';
$strCyrillic = 'cyrillique';
$strCzechSlovak = 'tch�que-slovaque';
$strCzech = 'tch�que';

$strDanish = 'danois';
$strDatabase = 'Base de donn�es';
$strDatabaseEmpty = 'Le nom de la base de donn�es est vide!';
$strDatabaseExportOptions = 'Options d\'exportation';
$strDatabaseHasBeenDropped = 'La base de donn�es %s a �t� effac�e.';
$strDatabases = 'Bases de donn�es';
$strDatabasesDropped = '%s bases de donn�es ont �t� supprim�es.';
$strDatabasesStatsDisable = 'D�sactiver les statistiques';
$strDatabasesStatsEnable = 'Activer les statistiques';
$strDatabasesStatsHeavyTraffic = 'Note: L\'activation des statistiques peut causer un trafic important entre le serveur web et le serveur MySQL.';
$strDatabasesStats = 'Statistiques sur les bases de donn�es';
$strDataDict = 'Dictionnaire de donn�es';
$strData = 'Donn�es';
$strDataOnly = 'Donn�es seulement';
$strDataPages = 'Pages contenant des donn�es';
$strDBComment = '<b>Commentaire</b> sur la base de donn�es: ';
$strDBCopy = 'Copier la base de donn�es vers';
$strDbIsEmpty = 'La base de donn�es semble vide!';
$strDbPrivileges = 'Privil�ges sp�cifiques � une base de donn�es';
$strDBRename = '<b>Changer le nom</b> de la base de donn�es pour';
$strDbSpecific = 'sp�cifique � cette base de donn�es';
$strDefault = 'D�faut';
$strDefaultEngine = 'Sur ce serveur MySQL, le moteur de stockage par d�faut est %s.';
$strDefaultValueHelp = 'Pour les valeurs par d�faut, veuillez n\'entrer qu\'une seule valeur, sans caract�re d\'�chappement ou apostrophes, sous la forme: a';
$strDefragment = 'D�fragmenter la table';
$strDelayedInserts = 'Insertions avec d�lais (DELAYED)';
$strDeleteAndFlushDescr = 'Ceci est la m�thode la plus directe, mais le fait de recharger les privil�ges pourrait prendre du temps.';
$strDeleteAndFlush = 'Effacer les utilisateurs, puis recharger les privil�ges.';
$strDeleted = 'L\'enregistrement a �t� effac�';
$strDeletedRows = 'Nombre d\'enregistrements effac�s :';
$strDelete = 'Effacer';
$strDeleteNoUsersSelected = 'Aucun utilisateur n\'a �t� choisi en vue de le d�truire!';
$strDeleteRelation = 'Effacer la relation';
$strDeleting = 'Destruction de %s';
$strDelimiter = 'D�limiteur';
$strDelOld = 'Cette page fait r�f�rence � des tables qui n\'existent plus. Voulez-vous effacer ces r�f�rences?';
$strDescending = 'D�croissant';
$strDescription = 'Description';
$strDesigner = 'Concepteur';
$strDesignerHelpDisplayField = 'Le champ � afficher est montr� en rose. Pour indiquer qu\'un champ est ou n\'est plus le champ � afficher, cliquer l\'ic�ne "Champ � afficher", puis cliquer sur le nom de champ appropri�.';
$strDictionary = 'dictionnaire';
$strDirectLinks = 'Liens directs';
$strDirtyPages = 'Pages modifi�es';
$strDisabled = 'd�sactiv�';
$strDisableForeignChecks = 'D�sactiver la v�rification des cl�s �trang�res';
$strDisplayFeat = 'Affichage infobulle';
$strDisplayOrder = 'Ordre d\'affichage :';
$strDisplayPDF = '<b>Afficher le sch�ma</b> en PDF';
$strDoAQuery = 'Recherche par valeur (passepartout: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentation';
$strDoYouReally = 'Voulez-vous vraiment effectuer ';
$strDropDatabaseStrongWarning = 'Vous �tes sur le point de D�TRUIRE une base de donn�es!';
$strDrop = 'Supprimer';
$strDropUsersDb = 'Supprimer les bases de donn�es portant le m�me nom que les utilisateurs';
$strDumpingData = 'Contenu de la table';
$strDumpSaved = 'Le fichier d\'exportation a �t� sauvegard� sous %s.';
$strDumpXRows = 'Exporte %s enregistrement(s) � partir du rang n� %s.';
$strDynamic = 'dynamique';

$strEdit = 'Modifier';
$strEditPDFPages = 'Pr�parer le sch�ma en PDF';
$strEditPrivileges = 'Changer les privil�ges';
$strEffective = 'effectif';
$strEmptyResultSet = 'MySQL n\'a retourn� aucun enregistrement.';
$strEmpty = 'Vider';
$strEnabled = 'activ�';
$strEncloseInTransaction = 'Utiliser le mode transactionnel';
$strEndCut = 'Fin de la section � couper';
$strEnd = 'Fin';
$strEndRaw = 'Fin des informations sur l\'anomalie';
$strEngineAvailable = '%s est disponible sur ce serveur MySQL.';
$strEngineDisabled = '%s a �t� d�sactiv� sur ce serveur MySQL.';
$strEngines = 'Moteurs';
$strEngineUnsupported = 'Ce serveur MySQL ne supporte pas le moteur de stockage %s.';
$strEnglish = 'anglais';
$strEnglishPrivileges = ' Veuillez noter que les noms de privil�ges sont exprim�s en anglais';
$strError = 'Erreur';
$strErrorInZipFile = 'Erreur rencontr�e dans l\'archive ZIP :';
$strErrorRelationAdded = 'Erreur: relation non ajout�e.';
$strErrorRelationExists = 'Erreur: relation d�j� existante.';
$strErrorRenamingTable = 'Erreur lors du renommage de %1$s en %2$s';
$strErrorSaveTable = 'Erreur lors de la sauvegarde des coordonn�es Concepteur.';
$strEscapeWildcards = 'Pr�fixer avec \ les passepartouts _ et % pour un usage litt�ral';
$strEsperanto = 'Esp�ranto';
$strEstonian = 'estonien';
$strEvent = '�v�nement';
$strExcelEdition = 'Excel en version';
$strExecuteBookmarked = 'Ex�cuter la requ�te en signets';
$strExplain = 'Expliquer SQL';
$strExport = 'Exporter';
$strExportImportToScale = 'Exporter/Importer � l\'�chelle';
$strExportMustBeFile = 'Ce choix d\'exportation doit �tre sauvegard� dans un fichier!';
$strExtendedInserts = 'Insertions �tendues';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentatives �chou�es';
$strField = 'Champ';
$strFieldHasBeenDropped = 'Le champ %s a �t� effac�';
$strFieldInsertFromFileTempDirNotExists = 'Erreur lors du d�placement du fichier t�l�charg�, voir FAQ 1.11';
$strFields = 'Champs';
$strFieldsEnclosedBy = 'Champs entour�s par';
$strFieldsEscapedBy = 'Caract�re sp�cial';
$strFieldsTerminatedBy = 'Champs termin�s par';
$strFileAlreadyExists = 'Le fichier %s existe d�j� sur le serveur, veuillez changer le nom, ou cocher l\'option �craser';
$strFileCouldNotBeRead = 'Le fichier n\'a pu �tre lu';
$strFileNameTemplateDescription = 'Cette valeur est interpr�t�e avec %1$sstrftime%2$s, vous pouvez donc utiliser des cha�nes de format d\'heure. Ces transformations additionnelles vont se produire: %3$s. Tout autre texte sera conserv� tel quel.';
$strFileNameTemplateDescriptionDatabase = 'nom de base de donn�es';
$strFileNameTemplateDescriptionServer = 'nom de serveur';
$strFileNameTemplateDescriptionTable = 'nom de table';
$strFileNameTemplate = 'Mod�le de nom de fichier';
$strFileNameTemplateRemember = 'se souvenir du mod�le';
$strFiles = 'Fichiers';
$strFileToImport = 'Fichier � importer';
$strFixed = 'fixe';
$strFlushPrivilegesNote = 'Note: phpMyAdmin obtient la liste des privil�ges directement � partir des tables MySQL. Le contenu de ces tables peut �tre diff�rent des privil�ges effectifs, si des changements manuels ont �t� apport�s. Dans ce cas, vous devriez %srecharger les privil�ges%s avant de continuer.';
$strFlushQueryCache = 'Vider la cache des requ�tes';
$strFlushTable = 'Recharger la table ("FLUSH")';
$strFlushTables = 'Fermer toutes les tables';
$strFontSize = 'Taille du texte';
$strForeignKeyError = 'Erreur lors de la cr�ation de la cl� �trang�re (v�rifiez les types de donn�es';
$strFormat = 'format';
$strFormEmpty = 'Formulaire incomplet !';
$strFreePages = 'Pages libres';
$strFullText = 'Textes complets';
$strFunction = 'Fonction';
$strFunctions = 'Fonctions';

$strGenBy = 'G�n�r� par';
$strGeneralRelationFeat = 'Fonctions relationnelles';
$strGenerate = 'G�n�rer'; 
$strGeneratePassword = 'G�n�rer un mot de passe';
$strGenTime = 'G�n�r� le ';
$strGeorgian = 'g�orgien';
$strGerman = 'allemand';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privil�ges globaux';
$strGlobalValue = 'Valeur globale';
$strGo = 'Ex�cuter';
$strGrantOption = '"Grant"';
$strGreek = 'grec';
$strGzip = '"gzipp�"';

$strHandler = 'Gestionnaire';
$strHasBeenAltered = 'a �t� modifi�(e).';
$strHasBeenCreated = 'a �t� cr��(e).';
$strHaveToShow = 'Vous devez choisir au moins une colonne � afficher';
$strHebrew = 'h�breu';
$strHelp = 'Aide';
$strHexForBLOB = 'Utiliser l\'hexadecimal pour les BLOB';
$strHide         = 'Cacher';
$strHideShowAll = 'Cacher/montrer tout';
$strHideShowNoRelation = 'Cacher/montrer les tables sans liens';
$strHome = 'Accueil';
$strHomepageOfficial = 'Site officiel de phpMyAdmin';
$strHostEmpty = 'Le nom de serveur est vide';
$strHost = 'Serveur';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'hongrois';

$strIcelandic = 'islandais';
$strId = 'ID';
$strIdxFulltext = 'Texte entier';
$strIEUnsupported = 'Fonction non disponible sous Internet Explorer.';
$strIgnoreDuplicates = 'Ignorer les doublons';
$strIgnore = 'Ignorer';
$strIgnoreInserts = 'Ignorer les erreurs de doublons (INSERT IGNORE)';
$strImportExportCoords = 'Importer/Exporter les coordonn�es pour le sch�ma PDF';
$strImportFiles = 'Importe les fichiers';
$strImportFormat = 'Format du fichier d\'importation';
$strImport = 'Importer';
$strImportSuccessfullyFinished = 'L\'importation s\'est termin�e avec succ�s, %d requ�tes ex�cut�es.';
$strIndexes = 'Index';
$strIndexesSeemEqual = 'Les index suivants semblent �quivalents, vous devriez en �liminer un.';
$strIndexHasBeenDropped = 'L\'index %s a �t� effac�';
$strIndex = 'Index';
$strIndexName = 'Nom de l\'index&nbsp;:';
$strIndexType = 'Type d\'index&nbsp;:';
$strIndexWarningTable = 'Il y a des probl�mes avec les index de la table `%s`';
$strInnoDBAutoextendIncrement = 'Auto-croissant: Taille de l\'incr�ment';
$strInnoDBAutoextendIncrementDesc = 'La valeur de l\'incr�ment lors de l\'agrandissement du fichier auto-croissant lorsqu\'il devient plein.';
$strInnoDBBufferPoolSizeDesc = 'La taille de la m�moire-tampon utilis�e par InnoDB pour les op�rations d\'ant�moire sur les donn�es et les index.';
$strInnoDBBufferPoolSize = 'Taille de la m�moire-tampon';
$strInnoDBDataFilePath = 'Fichiers de donn�es';
$strInnoDBDataHomeDirDesc = 'Le chemin du r�pertoire pour tous les fichiers de donn�es InnoDB.';
$strInnoDBDataHomeDir = 'R�pertoire des donn�es';
$strInnoDBPages = 'pages';
$strInnoDBRelationAdded = 'Relation InnoDB ajout�e';
$strInnodbStat = '�tat InnoDB';
$strInsecureMySQL = 'Votre fichier de configuration fait r�f�rence � l\'utilisateur root sans mot de passe, ce qui correspond � la valeur par d�faut de MySQL.  Votre serveur MySQL est donc ouvert aux intrusions, et vous devriez corriger ce probl�me de s�curit�.';
$strInsertAsNewRow = 'Sauvegarder un nouvel enregistrement';
$strInsertedRowId = 'Identifiant de l\'enregistrement ins�r�:';
$strInsertedRows = 'Nombre d\'enregistrements ins�r�s :';
$strInsert = 'Ins�rer';
$strInternalNotNecessary = '* Si une relation existe dans InnoDB, il n\'est pas n�cessaire de la d�finir dans les relations internes.';
$strInternalRelationAdded = 'Relation interne ajout�e';
$strInternalRelations = 'Relations internes';
$strInUse = 'utilis�';
$strInvalidAuthMethod = 'Le fichier de configuration contient un type d\'authentification invalide :';
$strInvalidColumnCount = 'Le nombre de champs doit �tre plus grand que z�ro.';
$strInvalidColumn = 'La colonne %s est invalide!';
$strInvalidCSVFieldCount = 'Nombre de champs invalide dans les donn�es CSV � la ligne %d';
$strInvalidCSVFormat = 'Format invalide pour les donn�es CSV � la ligne %d.';
$strInvalidCSVParameter = 'Param�tres invalides pour l\'importation CSV: %s';
$strInvalidDatabase = 'Nom de base de donn�es invalide';
$strInvalidFieldAddCount = 'Vous devez ajouter au moins un champ';
$strInvalidFieldCount = 'La table doit comporter au moins un champ';
$strInvalidLDIImport = 'Ce greffon ne supporte pas les importations en format comprim�!';
$strInvalidRowNumber = '%d n\'est pas un num�ro d\'enregistrement valable.';
$strInvalidServerHostname = 'Nom d\'h�te (hostname) invalide pour le serveur %1$s. Veuillez v�rifier votre configuration.';
$strInvalidServerIndex = 'Indice de serveur invalide: "%s"';
$strInvalidTableName = 'Nom de table invalide';

$strJapanese = 'japonais';
$strJoins = 'Jointures';
$strJumpToDB = 'Aller � la base de donn�es &quot;%s&quot;.';
$strJustDeleteDescr = 'Les utilisateurs &quot;effac�s&quot; auront quand m�me acc�s au serveur, jusqu\'� ce que les privil�ges soient recharg�s.';
$strJustDelete = 'Seulement effacer les utilisateurs des tables de privil�ges.';

$strKeepPass = 'Conserver le mot de passe';
$strKeyCache = 'Cache des cl�s';
$strKeyname = 'Nom de l\'index';
$strKill = 'Supprimer';
$strKnownExternalBug = 'La fonctionnalit� %s est affect�e par une anomalie connue, voir %s';
$strKorean = 'cor�en';

$strLandscape = 'Paysage';
$strLanguage = 'Langue';
$strLanguageUnknown = 'Langue inconnue: %1$s.';
$strLatchedPages = 'Pages verrouill�es';
$strLatexCaption = 'Sous-titre de la table';
$strLatexContent = 'Contenu de la table __TABLE__';
$strLatexContinuedCaption = 'Sous-titre de la table (suite)';
$strLatexContinued = '(suite)';
$strLatexIncludeCaption = 'Inclure les sous-titres';
$strLatexLabel = 'Cl� de l\'�tiquette';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structure de la table __TABLE__';
$strLatvian = 'letton';
$strLDI = 'CSV via LOAD DATA';
$strLDILocal = 'Utiliser l\'option LOCAL';
$strLengthSet = 'Taille/Valeurs*';
$strLimitNumRows = 'Nombre d\'enregistrements par page';
$strLinesTerminatedBy = 'Lignes termin�es par';
$strLinkNotFound = 'Lien absent';
$strLinksTo = 'Reli� �';
$strLithuanian = 'lituanien';
$strLocalhost = 'Local';
$strLocationTextfile = 'Emplacement du fichier texte';
$strLogin = 'Connexion';
$strLoginInformation = 'Information pour la connexion';
$strLogout = 'Quitter';
$strLogPassword = 'Mot de passe&nbsp;:';
$strLogServer = 'Serveur';
$strLogUsername = 'Nom d\'utilisateur&nbsp;:';
$strLongOperation = 'Cette op�ration pourrait �tre longue. Proc�der quand m�me? ';

$strMaxConnects = 'max. de connexions simultan�es';
$strMaximalQueryLength = 'Taille maximum de la requ�te g�n�r�e';
$strMaximumSize = 'Taille maximum: %s%s';
$strMbExtensionMissing = 'L\'extension PHP mbstring n\'a pu �tre localis�e et il semble que vous utilisiez un jeu de caract�res multi-octets. Sans cette extension, phpMyAdmin est incapable de g�rer correctement les caract�res et il peut en r�sulter des probl�mes.'; 
$strMbOverloadWarning = 'Vous avez activ� mbstring.func_overload dans votre configuration PHP. Cette option est incompatible avec phpMyAdmin et peut nuire au traitement des donn�es!';
$strMIME_available_mime = 'Types MIME disponibles';
$strMIME_available_transform = 'Transformations disponibles';
$strMIME_description = 'Description';
$strMIME_MIMEtype = 'Type MIME';
$strMIME_nodescription = 'Aucune description n\'est disponible pour cette transformation.<br />Veuillez demander � son auteur, des d�tails sur %s.';
$strMIME_transformation_note = 'La %sdescription des transformations%s explique les transformations possibles en fonction des types MIME.';
$strMIME_transformation_options_note = 'Veuillez entrer les valeurs des options de transformation en suivant ce format: \'a\', 100, b,\'c\'...<br />Si vous devez entrer un caract�re ("\") ou une apostrophe ("\'") parmi ces valeurs, faites-le pr�c�der du caract�re d\'�chappement, par exemple  \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Options de transformation';
$strMIME_transformation = 'Transformation';
$strMIMETypesForTable = 'TYPES MIME POUR LA TABLE';
$strMIME_without = 'Les types MIME affich�es en italiques ne poss�dent pas de fonctions de transformation.';
$strModifications = 'Les modifications ont �t� sauvegard�es.';
$strModifyIndexTopic = 'Modifier un index';
$strModify = 'Modifier';
$strMoveMenu = 'D�placer le menu';
$strMoveTable = '<b>D�placer</b> la table vers (base<b>.</b>table)&nbsp;:';
$strMoveTableOK = 'La table %s a �t� d�plac�e vers %s.';
$strMoveTableSameNames = 'On ne peut d�placer la table sur elle-m�me!';
$strMultilingual = 'multilingue';
$strMyISAMDataPointerSizeDesc = 'La taille du pointeur (en octets) qui servira lors d\'un CREATE TABLE sur une table MyISAM si aucune option MAX_ROWS n\'est indiqu�e';
$strMyISAMDataPointerSize = 'Taille du pointeur de donn�es';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si le fichier temporaire utilis� pour la cr�ation rapide des index MyISAM devrait s\'av�rer plus volumineux que d\'employer la cache des cl�s (la diff�rence �tant sp�cifi�e ici), utiliser la m�thode de cache des cl�s';
$strMyISAMMaxExtraSortFileSize = 'La taille maximum pour les fichiers temporaires utilis�s lors de la cr�ation d\'index';
$strMyISAMMaxSortFileSizeDesc = 'La taille maximum du fichier temporaire qu\'il est permis � MySQL d\'allouer pour recr�er un index MyISAM (durant un REPAIR TABLE, ALTER TABLE ou LOAD DATA INFILE)';
$strMyISAMMaxSortFileSize = 'Taille maximum pour les fichiers de tri temporaires';
$strMyISAMRecoverOptionsDesc = 'Le mode de recouvrement automatique en cas de tables MyISAM en mauvais �tat, tel que r�gl� via l\'option --myisam-recover au d�part du serveur';
$strMyISAMRecoverOptions = 'Mode de recouvrement automatique';
$strMyISAMRepairThreadsDesc = 'Si cette valeur est plus grande que 1, les index de tables MyISAM sont cr��s en parall�le (chaque index dans son propre fil d\'ex�cution) lors d\'une r�paration.';
$strMyISAMRepairThreads = 'Nombre de fils d\'ex�cution pour la r�paration';
$strMyISAMSortBufferSizeDesc = 'La m�moire tampon qui est allou�e pour trier les index MyISAM durant une op�ration REPAIR TABLE ou pour cr�er les index lors d\'un CREATE INDEX ou ALTER TABLE';
$strMyISAMSortBufferSize = 'Taille de la m�moire tampon';
$strMySQLCharset = 'Jeu de caract�res pour MySQL';
$strMysqlClientVersion = 'Version du client MySQL';
$strMySQLConnectionCollation = 'Interclassement pour la connexion MySQL';
$strMysqlLibDiffersServerVersion = 'La version de votre biblioth�que MySQL (%s) diff�re de la version de votre serveur MySQL (%s). Ceci peut occasionner un comportement impr�visible.';
$strMySQLSaid = 'MySQL a r�pondu:';
$strMySQLShowProcess = 'Afficher les processus';
$strMySQLShowStatus = 'Afficher l\'�tat du serveur';
$strMySQLShowVars = 'Afficher les variables du serveur';

$strName = 'Nom';
$strNext = 'Suivant';
$strNoActivity = 'Aucune activit� depuis %s secondes ou plus, veuillez vous reconnecter';
$strNoDatabases = 'Aucune base de donn�es';
$strNoDatabasesSelected = 'Aucune base de donn�es n\'a �t� s�lectionn�e.';
$strNoDataReceived = 'Aucune donn�es n\'a �t� re�u en vue de l\'importation. Aucun nom de fichier n\'a �t� fourni, ou encore la taille du fichier a d�pass� la limite permise par votre configuration de PHP. Voir FAQ 1.16';
$strNoDescription = 'pas de description';
$strNoDetailsForEngine = 'Aucune information d�taill�e sur l\'�tat n\'est disponible pour ce moteur de stockage.';
$strNoDropDatabases = 'La commande "DROP DATABASE" est d�sactiv�e.';
$strNoExplain = 'Ne pas expliquer SQL';
$strNoFilesFoundInZip = 'Aucun fichier pr�sent dans l\'archive ZIP!';
$strNoFrames = 'L\'utilisation de phpMyAdmin est plus ais�e avec un navigateur <b>supportant les "frames"</b>.';
$strNoIndex = 'Aucun index n\'est d�fini&nbsp;!';
$strNoIndexPartsDefined = 'Aucune colonne n\'a �t� d�finie pour cet index&nbsp;!';
$strNoModification = 'Pas de modifications';
$strNone = 'aucune';
$strNo = 'Non';
$strNoOptions = 'Ce format ne comporte pas d\'options';
$strNoPassword = 'aucun mot de passe';
$strNoPermission = 'Le serveur web n\'a pas les permissions n�cessaires pour enregistrer le fichier %s.';
$strNoPhp = 'Sans source PHP';
$strNoPrivileges = 'aucun privil�ge';
$strNoRights = 'Vous n\'�tes pas autoris� � acc�der � cette page';
$strNoRowsSelected = 'Aucun enregistrement n\'a �t� s�lectionn�';
$strNoSpace = 'Espace-disque insuffisant pour enregistrer le fichier %s.';
$strNoTablesFound = 'Aucune table n\'a �t� trouv�e dans cette base.';
$strNoThemeSupport = 'Les th�mes ne sont pas support�s, veuillez v�rifier votre configuration et/ou vos th�mes dans le r�pertoire %s.';
$strNotNumber = 'Ce n\'est pas un nombre !';
$strNotOK = 'en erreur';
$strNotSet = 'La table <b>%s</b> est absente ou non d�finie dans %s';
$strNoUsersFound = 'Il n\'y a aucun utilisateur';
$strNoValidateSQL = 'Ne pas valider SQL';
$strNull = 'Null';
$strNumberOfFields = 'Nombre de champs';
$strNumberOfTables = 'Nombre de tables';
$strNumSearchResultsInTable = '%s occurence(s) dans la table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total :</b> <i>%s</i> occurence(s)';
$strNumTables = 'Tables';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Tableur "Open Document"';
$strOpenDocumentText = 'Texte "Open Document"';
$strOpenNewWindow = 'Ouvrir une nouvelle fen�tre phpMyAdmin';
$strOperations = 'Op�rations';
$strOperator = 'Op�rateur';
$strOptimizeTable = 'Optimiser la table';
$strOptions = 'Options';
$strOr = 'Ou';
$strOverhead = 'Perte';
$strOverwriteExisting = '�craser les fichiers existants';

$strPageNumber = 'Page n�:';
$strPagesToBeFlushed = 'Pages devant �tre vid�es';
$strPaperSize = 'Taille du papier';
$strPartialImport = 'Importation partielle';
$strPartialText = 'Textes r�duits';
$strPasswordChanged = 'Le mot de passe de %s a �t� chang�.';
$strPasswordEmpty = 'Le mot de passe est vide';
$strPasswordHashing = 'Hachage du mot de passe';
$strPassword = 'Mot de passe';
$strPasswordNotSame = 'Les mots de passe doivent �tre identiques';
$strPdfDbSchema = 'Schema de la base "%s" - Page %s';
$strPdfInvalidTblName = 'La table "%s" n\'existe pas !';
$strPdfNoTables = 'Pas de table !';
$strPDF = 'PDF';
$strPDFReportExplanation = '(G�n�re un rapport contenant les donn�es d\'une seule table)';
$strPDFReportTitle = 'Titre du rapport';
$strPerHour = 'par heure';
$strPerMinute = 'par minute';
$strPerSecond = 'par seconde';
$strPersian = 'perse';
$strPhoneBook = 'annuaire t�l�phonique';
$strPHP40203 = 'Vous utilisez PHP 4.2.3, et cette version a un s�rieux probl�me avec les caract�res multi-octets (mbstring), tel que d�crit sur le rapport d\'anomalies 19404 chez PHP.  Il n\'est pas recommand� d\'utiliser cette version de PHP avec phpMyAdmin.';
$strPhp = 'Cr�er source PHP';
$strPHPVersion = 'Version de PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Veuillez choisir la cl� primaire ou un index unique';
$strPmaDocumentation = 'Documentation de phpMyAdmin';
$strPmaUriError = 'Le param�tre <tt>$cfg[\'PmaAbsoluteUri\']</tt> DOIT �tre renseign� dans votre fichier de configuration !';
$strPmaWiki = 'Wiki phpMyAdmin';
$strPolish = 'polonais';
$strPortrait = 'Portrait';
$strPos1 = 'D�but';
$strPrevious = 'Pr�c�dent';
$strPrimaryKeyHasBeenDropped = 'La cl� primaire a �t� effac�e';
$strPrimaryKeyName = 'Le nom d\'une cl� primaire doit �tre PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>doit et ne peut �tre</b> que le nom d\'une cl� primaire&nbsp;!)';
$strPrimary = 'Primaire';
$strPrint = 'Imprimer';
$strPrintViewFull = 'Version imprimable (avec textes complets)';
$strPrintView = 'Version imprimable';
$strPrivDescAllPrivileges = 'Tous les privil�ges sauf GRANT.';
$strPrivDescAlter = 'Permission de modifier la structure des tables existantes.';
$strPrivDescAlterRoutine = 'Permission de modifier et de supprimer des proc�dures stock�es.';
$strPrivDescCreateDb = 'Permission de cr�er des bases de donn�es et des tables.';
$strPrivDescCreateRoutine = 'Permission de cr�er des proc�dures stock�es.';
$strPrivDescCreateTbl = 'Permission de cr�er des tables.';
$strPrivDescCreateTmpTable = 'Permission de cr�er des tables temporaires.';
$strPrivDescCreateUser = 'Permission de cr�er, supprimer et renommer des comptes utilisateurs';
$strPrivDescCreateView = 'Permission de cr�er des vues.';
$strPrivDescDelete = 'Permission de d�truire des donn�es';
$strPrivDescDropDb = 'Permission d\'effacer des bases de donn�es et des tables.';
$strPrivDescDropTbl = 'Permission d\'effacer des tables.';
$strPrivDescExecute5 = 'Permission d\'ex�cuter des proc�dures stock�es';
$strPrivDescExecute = 'Permission d\'ex�cuter des proc�dures. Non effectif dans cette version de MySQL.';
$strPrivDescFile = 'Permission d\'importer et d\'exporter des donn�es � partir de / dans des fichiers.';
$strPrivDescGrant = 'Permission d\'ajouter des utilisateurs et des privil�ges sans avoir besoin de recharger les privil�ges.';
$strPrivDescIndex = 'Permission de cr�er et d\'effacer des index.';
$strPrivDescInsert = 'Permission d\'ajouter et de remplacer des donn�es';
$strPrivDescLockTables = 'Permission de verrouiller des enregistrements dans le fil courant (unit� d\'ex�cution).';
$strPrivDescMaxConnections = 'Limite du nombre de nouvelles connexions qu\'un utilisateur peut d�marrer, par heure.';
$strPrivDescMaxQuestions = 'Limite du nombre de requ�tes qu\'un utilisateur peut envoyer au serveur, par heure.';
$strPrivDescMaxUpdates = 'Limite du nombre de commandes changeant une table ou base de donn�es, qu\'un utilisateur peut ex�cuter, par heure.';
$strPrivDescMaxUserConnections = 'Limite le nombre de connexions simultan�es autoris�es pour un utilisateur.';
$strPrivDescProcess3 = 'Permission de d�truire les processus de d\'autres utilisateurs.';
$strPrivDescProcess4 = 'Permission de voir le texte complet des requ�tes, dans la liste des processus.';
$strPrivDescReferences = 'Non effectif dans cette version de MySQL.';
$strPrivDescReload = 'Permission de recharger les r�glages du serveur, et de vidanger la m�moire cache.';
$strPrivDescReplClient = 'Permission de demander o� sont les ma�tres et les esclaves (syst�me de duplication).';
$strPrivDescReplSlave = 'N�cessaire pour les esclaves (syst�me de duplication).';
$strPrivDescSelect = 'Permission de lire des donn�es.';
$strPrivDescShowDb = 'Permission de voir la liste compl�te des noms de bases de donn�es.';
$strPrivDescShowView = 'Permission d\'ex�cuter SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permission d\'arr�ter le serveur MySQL.';
$strPrivDescSuper = 'Permission de se connecter, m�me si le nombre maximal de connexions permises a �t� atteint; ceci est requis pour la plupart des op�rations de type administratif, par exemple les changements de variables globales ou la destruction de processus.';
$strPrivDescUpdate = 'Permission de changer des donn�es.';
$strPrivDescUsage = 'Pas de privil�ges';
$strPrivileges = 'Privil�ges';
$strPrivilegesReloaded = 'Les privil�ges ont �t� recharg�s.';
$strProcedures = 'Proc�dures';
$strProcesses = 'Processus';
$strProcesslist = 'Liste des processus';
$strProfiling = 'Profilage';
$strProtocolVersion = 'Version du protocole';
$strPutColNames = 'Afficher les noms de champ en premi�re ligne';

$strQBEDel = 'Effacer';
$strQBEIns = 'Ajouter';
$strQBE = 'Requ�te';
$strQueryCache = 'Cache des requ�tes';
$strQueryFrame = 'Fen�tre SQL';
$strQueryOnDb = 'Requ�te SQL sur la base <b>%s</b>&nbsp;:';
$strQueryResultsOperations = 'Op�rations sur les r�sultats de la requ�te';
$strQuerySQLHistory = 'Historique SQL';
$strQueryStatistics = '<b>Statistiques sur les requ�tes</b>: Depuis son d�marrage, %s requ�tes ont �t� envoy�es au serveur.';
$strQueryTime = 'Traitement en %01.4f sec.';
$strQueryType = 'Type de requ�te';
$strQueryWindowLock = 'Ne pas �craser cette requ�te depuis une autre fen�tre';

$strReadRequests = 'Requ�tes de lecture';
$strReceived = 'Re�u';
$strRecommended = 'recommand�';
$strRecords = 'Enregistrements';
$strReferentialIntegrity = 'V�rifier l\'int�grit� r�f�rentielle';
$strRefresh = 'Actualiser';
$strRelationalSchema = 'Sch�ma relationnel';
$strRelationDeleted = 'Relation supprim�e';
$strRelationNotWorking = 'Certaines fonctionnalit�s ayant trait aux tables reli�es sont d�sactiv�es. Pour une analyse du probl�me, cliquez %sici%s.';
$strRelationsForTable = 'RELATIONS POUR LA TABLE';
$strRelations = 'Relations';
$strRelationView = 'Gestion des relations';
$strReloadingThePrivileges = 'Chargement des privil�ges en cours.';
$strReloadPrivileges = 'Recharger les privil�ges';
$strReload = 'Recharger';
$strRemoveSelectedUsers = 'Effacer les utilisateurs s�lectionn�s.';
$strRenameDatabaseOK = 'La base de donn�es %s a �t� renomm�e en %s';
$strRenameTable = '<b>Changer le nom</b> de la table pour';
$strRenameTableOK = 'La table %s se nomme maintenant %s';
$strRepairTable = 'R�parer la table';
$strReplaceNULLBy = 'Remplacer NULL par';
$strReplaceTable = 'Remplacer les donn�es de la table avec le fichier';
$strReplication = 'R�plication';
$strReset = 'R�initialiser les valeurs';
$strResourceLimits = 'Limites de ressources.';
$strRestartInsertion = 'Recommencer l\'insertion avec %s lignes';
$strReType = 'Entrer � nouveau';
$strRevokeAndDeleteDescr = 'Les utilisateurs auront le privilege "USAGE", jusqu\'� ce que les privil�ges soient recharg�s.';
$strRevokeAndDelete = 'Effacer tous les privil�ges de ces utilisateurs, puis les effacer.';
$strRevokeMessage = 'Vous avez r�voqu� les privil�ges pour %s';
$strRevoke = 'R�voquer';
$strRomanian = 'roumain';
$strRoutineReturnType = 'Type retourn�';
$strRoutines = 'Proc�dures stock�es';
$strRowLength = 'Longueur enr.';
$strRows = 'Enregistrements';
$strRowsFrom = 'enregistrement(s) � partir de l\'enregistrement n�';
$strRowSize = ' Taille enr. ';
$strRowsModeFlippedHorizontal = 'horizontal (en-t�tes pivot�s)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en mode %s et r�p�ter les en-t�tes � chaque groupe de %s';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Statistiques';
$strRunning = 'sur le serveur %s';
$strRunQuery = 'Ex�cuter la requ�te';
$strRunSQLQuery = 'Ex�cuter une ou des <b>requ�tes</b> sur la base %s';
$strRunSQLQueryOnServer = 'Ex�cuter une ou des requ�tes SQL sur le serveur %s';
$strRussian = 'russe';

$strSaveOnServer = 'Sauvegarder sur le serveur dans le r�pertoire %s';
$strSavePosition = 'Sauvegarder la position';
$strSave = 'Sauvegarder';
$strScaleFactorSmall = 'Veuillez augmenter l\'�chelle car le sch�ma d�borde la page';
$strSearchFormTitle = 'Effectuer une nouvelle recherche dans la base de donn�es';
$strSearchInTables = 'Dans la(les) table(s) :';
$strSearchNeedle = 'Mot(s) ou Valeur � rechercher (passe-partout: "%") :';
$strSearchOption1 = 'au moins un mot';
$strSearchOption2 = 'tous les mots';
$strSearchOption3 = 'phrase exacte';
$strSearchOption4 = 'expression r�guli�re';
$strSearch = 'Rechercher';
$strSearchResultsFor = 'R�sultats de la recherche de "<i>%s</i>" %s :';
$strSearchType = 'Type de recherche :';
$strSecretRequired = 'Vous devez ajouter dans le fichier de configuration une phrase de passe secr�te (blowfish_secret).';
$strSelectADb = 'Choisissez une base de donn�es';
$strSelectAll = 'Tout s�lectionner';
$strSelectBinaryLog = 'S�lectionnez le log binaire � consulter';
$strSelectFields = 'Choisir les champs � afficher (au moins un)';
$strSelectForeignKey = 'Choisissez la cl� �trang�re';
$strSelectNumRows = 'dans la requ�te';
$strSelectReferencedKey = 'S�lectionnez la cl� r�f�renc�e';
$strSelectTables = 'Choisissez les tables';
$strSend = 'Transmettre';
$strSent = 'Envoy�';
$strServerChoice = 'Choix du serveur';
$strServerNotResponding = 'Le serveur ne r�pond pas.';
$strServer = 'Serveur';
$strServers = 'Serveurs';
$strServerStatusDelayedInserts = 'Insertions avec d�lais';
$strServerStatus = 'Informations sur le serveur';
$strServerStatusUptime = 'Ce serveur MySQL fonctionne depuis %s. Il a d�marr� le %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Statistiques sur le trafic</b>: Ce tableau indique le trafic r�seau observ� sur ce serveur MySQL depuis son d�marrage.';
$strServerVars = 'Variables et r�glages du serveur';
$strServerVersion = 'Version du serveur';
$strSessionStartupErrorGeneral = 'Erreur lors du d�marrage de la session, veuillez v�rifier les erreurs indiqu�es par PHP ou dans le fichier t�moin du serveur web, et configurer PHP correctement.';
$strSessionValue = 'Valeur pour la session';
$strSetEnumVal = 'Les diff�rentes valeurs des champs de type enum/set sont � sp�cifier sous la forme \'a\',\'b\',\'c\'...<br />Pour utiliser un caract�re "\\" ou "\'" dans l\'une de ces valeurs, faites-le pr�c�der du caract�re d\'�chappement "\\" (par exemple \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Afficher';
$strShowAll = 'Tout afficher';
$strShowColor = 'Couleurs';
$strShowDatadictAs = 'Orientation du dictionnaire:';
$strShowFullQueries = 'Afficher les requ�tes compl�tes';
$strShowGrid = 'Grille';
$strShowHideLeftMenu = 'Montrer/cacher le menu de gauche';
$strShowingBookmark = 'Affichage du signet';
$strShowingPhp = 'Affichage du code PHP';
$strShowingRecords = 'Affichage des enregistrements';
$strShowingSQL = 'Affichage de la requ�te SQL';
$strShowOpenTables = 'Montrer les tables ouvertes';
$strShowPHPInfo = 'Afficher les informations relatives � PHP';
$strShowSlaveHosts = 'Montrer les serveurs esclaves';
$strShowSlaveStatus = 'Montrer l\'�tat des serveurs esclaves';
$strShowStatusBinlog_cache_disk_useDescr = 'Le nombre de transactions qui ont utilis� la cache temporaire du log binaire mais qui ont exc�d� la valeur de binlog_cache_size et ont utilis� un fichier temporaire pour stocker les �nonc�s de la transaction.';
$strShowStatusBinlog_cache_useDescr = 'Le nombre de transactions qui ont utilis� la cache temporaire du log binaire.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Le nombre de tables temporaires sur disque cr��es automatiquement par le serveur lors de l\'ex�cution d\'�nonc�s. Si la valeur du param�tre Created_tmp_disk_tables est trop grande, augmentez la valeur de tmp_table_size afin que les tables temporaires soient maintenues en m�moire au lieu d\'�tre sur disque.';
$strShowStatusCreated_tmp_filesDescr = 'Le nombre de fichiers temporaires cr��s par mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Le nombre de tables temporaires en m�moire cr��es automatiquement par le serveur lors de l\'ex�cution d\'�nonc�s.';
$strShowStatusDelayed_errorsDescr = 'Le nombre d\'enregistrements �crits avec INSERT DELAYED pour lesquels une erreur est survenue (probablement un doublon sur la cl�).';
$strShowStatusDelayed_insert_threadsDescr = 'Le nombre de fils d\'ex�cution utilis�s pour INSERT DELAYED. Un fil est utilis� pour chacune des tables sur lesquelles un INSERT DELAYED a lieu.';
$strShowStatusDelayed_writesDescr = 'Le nombre d\'enregistrements �crits via INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Le nombre de commandes FLUSH ex�cut�es.';
$strShowStatusHandler_commitDescr = 'Le nombre de commandes COMMIT internes.';
$strShowStatusHandler_deleteDescr = 'Le nombre de fois qu\'un enregistrement a �t� supprim� d\'une table.';
$strShowStatusHandler_discoverDescr = 'Le serveur MySQL peut demander au moteur de donn�es NDB Cluster s\'il conna�t une table portant un certain nom. Ceci est appel� &quot;d�couverte&quot;. Ce param�tre indique le nombre de fois que des tables ont �t� d�couvertes.';
$strShowStatusHandler_read_firstDescr = 'Le nombre de fois que la premi�re entr�e a �t� lue depuis un index. Si c\'est �lev�, ceci sugg�re que le serveur effectue beaucoup de parcours complets d\'un index; par exemple, SELECT coll FROM foo, en assumant que coll est une colonne index�e.';
$strShowStatusHandler_read_keyDescr = 'Le nombre de requ�tes pour lire un enregistrement via une cl�. Si �lev�, c\'est une bonne indication que vos tables sont correctement index�es.';
$strShowStatusHandler_read_nextDescr = 'Le nombre de requ�tes de lecture du prochain enregistrement, en ordre de cl�. Ceci est augment� si vous interrogez une colonne index�e avec un crit�re de fourchette ou si vous parcourez l\'index.';
$strShowStatusHandler_read_prevDescr = 'Le nombre de requ�tes de lecture de l\'enregistrement pr�c�dent, en ordre de cl�. Utilis� surtout pour optimiser ORDER BY ... DESC';
$strShowStatusHandler_read_rndDescr = 'Le nombre de requ�tes de lecture d\'un enregistrement bas�e sur une position fixe. Ce nombre est �lev� si vous faites de nombreuses requ�tes qui n�cessitent de trier les r�sultats. Vous avez probablement un grand nombre de requ�tes qui demandent � MySQL de parcourir des tables en entier, ou vous avez des jointures qui n\'utilisent pas correctement les cl�s.';
$strShowStatusHandler_read_rnd_nextDescr = 'Le nombre de requ�tes de lecture du prochaine enregistrement dans le fichier. �lev� si vous faites plusieurs parcours de tables. Ceci sugg�re que vos tables ne sont pas correctement index�es ou que vos requ�tes ne sont pas �crites de fa�on � tirer parti des index que vous avez d�finis.';
$strShowStatusHandler_rollbackDescr = 'Le nombre d\'�nonc�s ROLLBACK internes.';
$strShowStatusHandler_updateDescr = 'Le nombre de requ�tes de mise � jour d\'enregistrements.';
$strShowStatusHandler_writeDescr = 'Le nombre de requ�tes d\'insertion d\'enregistrements.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Le nombre de pages contenant des donn�es.';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Le nombre de pages contenant des donn�es "dirty"';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Le nombre de pages de m�moire-tampon qui ont �t� effac�es.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Le nombre de pages libres';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Le nombre de pages dans la r�serve InnoDB qui sont actuellement en train d\'�tre lues ou �crites, ou qui ne peuvent �tre supprim�es pour une autre raison.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Le nombre de pages occup�es car elles ont �t� d�allou�es en raison de verrous sur les enregistrements. Cette valeur peut �galement �tre calcul�e comme suit: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Taille totale de la r�serve, en pages.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Le nombre de lectures discontinues effectu�es par InnoDB. Ceci survient lorsqu\'une requ�te doit balayer une large portion de table en ordre discontinu.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Le nombre de lectures s�quentielles effectu�es par InnoDB. Ceci survient quand InnoDB fait un parcours s�quentiel int�gral de la table.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Le nombre de requ�tes de lectures "logiques" effectu�es par InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Le nombre de lectures que InnoDB n\'a pu faire � partir de la r�serve, menant � une lecture directe d\'une page.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalement, l\'�criture dans la r�serve InnoDB se passe en arri�re-plan. Cependant, s\'il est n�cessaire de lire ou de cr�er une page et qu\'aucune page n\'est disponible, InnoDB doit attendre que des pages soient lib�r�es. Ceci compte le nombre de fois qu\'une telle attente a �t� n�cessaire. Si la taille de la r�serve est ad�quate, cette valeur devrait �tre petite.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Le nombre d\'�critures faites dans la r�serve InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Le nombre d\'op�rations fsync() faites jusqu\'� pr�sent.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Le nombre d\'op�rations fsync() actuellement en attente.';
$strShowStatusInnodb_data_pending_readsDescr = 'Le nombre actuel de lectures en attente.';
$strShowStatusInnodb_data_pending_writesDescr = 'Le nombre actuel d\'�critures en attente.';
$strShowStatusInnodb_data_readDescr = 'La quantit� d\'octets lus jusqu\'� pr�sent.';
$strShowStatusInnodb_data_readsDescr = 'Le nombre total de lectures de donn�es.';
$strShowStatusInnodb_data_writesDescr = 'Le nombre total d\'�critures de donn�es.';
$strShowStatusInnodb_data_writtenDescr = 'La quantit� d\'octets �crits jusqu\'� pr�sent.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Le nombre de pages utilis�es pour des �critures "doublewrite".';
$strShowStatusInnodb_dblwr_writesDescr = 'Le nombre d\'�critures "doublewrite" effectu�es.';
$strShowStatusInnodb_log_waitsDescr = 'Le nombre d\'attentes en raison d\'un tampon du fichier t�moin trop petit; il fallait attendre qu\'il se lib�re avant de continuer.';
$strShowStatusInnodb_log_write_requestsDescr = 'Le nombre de requ�tes d\'�critures sur le fichier t�moin.';
$strShowStatusInnodb_log_writesDescr = 'Le nombre d\'�critures physiques au fichier t�moin.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Le nombre d\'�critures fsync() sur le fichier t�moin.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Le nombre de fsync() du fichier t�moin en attente.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Le nombre d\'�critures du fichier t�moin en attente.';
$strShowStatusInnodb_os_log_writtenDescr = 'Le nombre d\'octets �crits sur le fichier t�moin.';
$strShowStatusInnodb_pages_createdDescr = 'Le nombre de pages cr��es.';
$strShowStatusInnodb_page_sizeDescr = 'La taille de page InnoDB telle que compil�e (16 Ko par d�faut). Plusieurs valeurs sont compt�es par page; la taille de page leur permet d\'�tre facilement converties en octets.';
$strShowStatusInnodb_pages_readDescr = 'Le nombre de pages lues.';
$strShowStatusInnodb_pages_writtenDescr = 'Le nombre de pages �crites.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Le nombre de verrous d\'enregistrements actuellement en attente.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Le temps d\'attente moyen pour acqu�rir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_timeDescr = 'Le temps total utilis� pour acqu�rir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Le temps d\'attente maximum pour acqu�rir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Le nombre de fois qu\'on a d� attendre pour un verrou.';
$strShowStatusInnodb_rows_deletedDescr = 'Le nombre d\'enregistrements supprim�s des tables InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Le nombre d\'enregistrements ins�r�s dans des tables InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Le nombre d\'enregistrements lus dans des tables InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Le nombre d\'enregistrements mis � jour dans des tables InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Le nombre de blocs de cl�s dans la cache de cl�s qui ont �t� modifi�s mais pas encore transf�r�s sur disque.';
$strShowStatusKey_blocks_unusedDescr = 'Le nombre de blocs inutilis�s dans la cache de cl�s. Vous pouvez utiliser cette valeur pour d�terminer la proportion de la cache de cl�s qui est utilis�e.';
$strShowStatusKey_blocks_usedDescr = 'Le nombre maximum de blocs qui ont �t� utilis�s en m�me temps dans la cache de cl�s.';
$strShowStatusKey_read_requestsDescr = 'Le nombre de requ�tes de lecture d\'un bloc de cl�s depuis la cache.';
$strShowStatusKey_readsDescr = 'Le nombre de lectures physiques d\'un bloc de cl�s depuis le disque. Si cette valeur est �lev�e, la taille de votre m�moire tampon de cl�s est trop petite. Le taux d\'�chec de la cache peut �tre calcul� par "Key reads/Key read requests".';
$strShowStatusKey_write_requestsDescr = 'Le nombre de requ�tes en vue d\'�crire un bloc de cl� dans la cache.';
$strShowStatusKey_writesDescr = 'Le nombre d\'�critures physiques d\'un bloc de cl�s vers le disque.';
$strShowStatusLast_query_costDescr = 'Le co�t total de la derni�re requ�te compil�e, tel que calcul� par l\'optimiseur de requ�tes. Utile pour comparer le co�t de diverses strat�gies pour une m�me requ�te. La valeur de 0 indique qu\'aucune requ�te n\'a encore �t� compil�e.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Le nombre d\'enregistrements en attente d\'�criture (INSERT DELAYED).';
$strShowStatusOpened_tablesDescr = 'Le nombre tables qui ont �t� ouvertes. Si trop �lev�, votre cache de table est probablement trop petite.';
$strShowStatusOpen_filesDescr = 'Le nombre de fichiers qui sont ouverts.';
$strShowStatusOpen_streamsDescr = 'Le nombre de flux de donn�es qui sont ouverts.';
$strShowStatusOpen_tablesDescr = 'Le nombre de tables qui sont ouvertes.';
$strShowStatusQcache_free_blocksDescr = 'Le nombre de blocs de m�moire libre dans la cache de requ�tes.';
$strShowStatusQcache_free_memoryDescr = 'La quantit� de m�moire libre dans la cache de requ�tes.';
$strShowStatusQcache_hitsDescr = 'Le nombre de succ�s dans la cache.';
$strShowStatusQcache_insertsDescr = 'Le nombre de requ�tes ajout�es � la cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'Le nombre de requ�tes qui ont �t� retir�es de la cache pour lib�rer de la m�moire afin de mettre en cache de nouvelles requ�tes. Peut �tre utilis� afin de peaufiner la taille de la cache. La strat�gie utilis�e pour d�terminer quelles requ�tes seront retir�es est LRU (least recently used).';
$strShowStatusQcache_not_cachedDescr = 'Le nombre de requ�tes non en cache (impossible � placer en cache, ou non cach�e en raison du param�tre query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Le nombre de requ�tes enregistr�es dans la cache.';
$strShowStatusQcache_total_blocksDescr = 'Le nombre total de blocs dans la cache de requ�tes.';
$strShowStatusReset = 'R�initialiser';
$strShowStatusRpl_statusDescr = 'L\'�tat de la r�plication sans �chec (pas encore implant�e).';
$strShowStatusSelect_full_joinDescr = 'Le nombre de jointures qui n\'ont pas utilis� d\'index. Si cette valeur est sup�rieure � 0, v�rifiez soigneusement les indexes de vos tables.';
$strShowStatusSelect_full_range_joinDescr = 'Le nombre de jointures qui ont utilis� une recherche par plage sur une table de r�f�rence.';
$strShowStatusSelect_range_checkDescr = 'Le nombre de jointures sans cl�s qui v�rifient l\'utilisation de cl� � chaque enregistrement. (Si ceci est sup�rieur � 0, v�rifiez soigneusement les indexes de vos tables.)';
$strShowStatusSelect_rangeDescr = 'Le nombre de jointures qui ont utilis� des plages sur la premi�re table. (Normalement non critique m�me si cette valeur est �lev�e.)';
$strShowStatusSelect_scanDescr = 'Le nombre de jointures qui ont n�cessit� le parcours complet de la premi�re table.';
$strShowStatusSlave_open_temp_tablesDescr = 'Le nombre de tables temporaires actuellement ouvertes par le fil d\'ex�cution SQL de l\'esclave.';
$strShowStatusSlave_retried_transactionsDescr = 'Nombre de fois (depuis le d�marrage) que le fil d\'ex�cution SQL de l\'esclave a envoy� � nouveau des transactions.';
$strShowStatusSlave_runningDescr = 'Ceci est � ON si ce serveur est un esclave connect� � un ma�tre.';
$strShowStatusSlow_launch_threadsDescr = 'Le nombre de fils d\'ex�cution dont le temps de cr�ation a exc�d� slow_launch_time secondes.';
$strShowStatusSlow_queriesDescr = 'Le nombre de requ�tes dont le temps d\'ex�cution a exc�d� long_query_time secondes.';
$strShowStatusSort_merge_passesDescr = 'Le nombre d\'op�rations de fusion effectu�es par l\'algorithme de tri. Si ce nombre est �lev�, augmentez la valeur du param�tre sort_buffer_size.'; 
$strShowStatusSort_rangeDescr = 'Le nombre de tri effectu�s avec des plages.';
$strShowStatusSort_rowsDescr = 'Le nombre d\'enregistrements tri�s.';
$strShowStatusSort_scanDescr = 'Le nombre de tri effectu�s via un parcours de la table.';
$strShowStatusTable_locks_immediateDescr = 'Le nombre de fois qu\'un verrou de table a �t� acquis imm�diatement.';
$strShowStatusTable_locks_waitedDescr = 'Le nombre de fois qu\'un verrou de table n\'a pu �tre acquis imm�diatement, induisant un temps d\'attente. Si ce nombre est �lev� et que vous �prouvez des probl�mes de performance, commencez par optimiser vos requ�tes, puis subdivisez vos tables ou encore utiliser la r�plication.';
$strShowStatusThreads_cachedDescr = 'Le nombre de fils dans la cache des fils d\'ex�cution. Si cette valeur est en rouge, vous devriez augmenter la taille de cette cache.'; 
$strShowStatusThreads_connectedDescr = 'Le nombre de connexions ouvertes actuellement.';
$strShowStatusThreads_createdDescr = 'Le nombre de fils d\'ex�cution cr��s afin de g�rer les connexions. Si ce nombre est trop grand, vous pourriez augmenter la valeur du param�tre thread_cache_size. (Normalement, ceci ne procure pas une am�lioration perceptible de la performance si votre serveur g�re correctement les fils d\'ex�cution.';
$strShowStatusThreads_runningDescr = 'Le nombre de fils d\'ex�cution non suspendus.';
$strShowTableDimension = 'Dimension des tables';
$strShowTables = 'Afficher les tables';
$strShowThisQuery = 'R�afficher la requ�te apr�s ex�cution';
$strSimplifiedChinese = 'chinois simplifi�';
$strSingly = '(� refaire apr�s insertions/destructions)';
$strSize = 'Taille';
$strSkipQueries = 'Nombre d\'enregistrements (requ�tes) � ignorer � partir du d�but';
$strSlovak = 'slovaque';
$strSlovenian = 'slov�ne';
$strSmallBigAll = 'Agrandir/r�duire tout';
$strSnapToGrid = 'Accrocher � la grille';
$strSocketProblem = '(ou l\'interface de connexion ("socket") vers le serveur MySQL local n\'est pas correctement configur�e)';
$strSortByKey = 'Trier sur l\'index';
$strSorting = 'M�canisme de tri';
$strSort = 'Tri';
$strSpaceUsage = 'Espace utilis�';
$strSpanish = 'espagnol';
$strSplitWordsWithSpace = 'S�parer les mots par un espace (" ").';
$strSQLCompatibility = 'Mode de compatibilit� SQL';
$strSQLExportType = 'Type d\'exportation';
$strSQLParserBugMessage = 'Il semble que vous ayiez trouv� une anomalie dans l\'analyseur syntaxique SQL. Veuillez examiner votre requ�te attentivement, et v�rifier que vos apostrophes sont conformes. Il se pourrait aussi que vous ayiez charg� un fichier dont le contenu binaire n\'est pas entre apostrophes.  Si vous avez acc�s � MySQL via son interface de commande en mode ligne, vous pouvez y essayer votre requ�te. Le message d\'erreur pr�sent� plus bas pourrait vous indiquer la source du probl�me. En dernier recours, veuillez trouver la plus courte requ�te possible qui cause le probl�me, et soumettre un rapport d\'anomalie en incluant la section � couper:';
$strSQLParserUserError = 'Il semble qu\'il y ait une erreur dans votre requ�te SQL. Le message ci-bas peut vous aider � en trouver la cause.';
$strSQLQuery = 'requ�te SQL';
$strSQLResult = 'R�sultat de la requ�te SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificateur invalide';
$strSQPBugUnclosedQuote = 'Apostrophe non ferm�';
$strSQPBugUnknownPunctuation = 'Ponctuation invalide';
$strStandInStructureForView = 'Doublure de structure pour la vue';
$strStatCheckTime = 'Derni�re v�rification';
$strStatCreateTime = 'Cr�ation';
$strStatement = 'Information';
$strStatisticsOverrun = 'Sur un serveur surcharg�, la capacit� des compteurs d\'octets peut �tre d�pass�e, auquel cas les statistiques rapport�es par MySQL peuvent �tre inexactes.';
$strStatUpdateTime = 'Derni�re modification';
$strStatus = '�tat';
$strStorageEngine = 'Moteur de stockage';
$strStorageEngines = 'Moteurs de stockage';
$strStrucCSV = 'CSV';
$strStrucData = 'Structure et donn�es';
$strStrucExcelCSV = 'CSV pour MS Excel';
$strStrucNativeExcel = 'Donn�es MS Excel (format natif)';
$strStrucOnly = 'Structure seule';
$strStructPropose = 'Sugg�rer des optimisations quant � la structure de la table';
$strStructureForView = 'Structure de la vue';
$strStructure = 'Structure';
$strSubmit = 'Ex�cuter';
$strSuccess = 'Votre requ�te SQL a �t� ex�cut�e avec succ�s';
$strSum = 'Somme';
$strSwedish = 'su�dois';
$strSwitchToDatabase = 'Aller � la base de donn�es copi�e';
$strSwitchToTable = 'Aller � la table copi�e';

$strTableAlreadyExists = 'La table %s existe d�j�!';
$strTableComments = 'Commentaires sur la table';
$strTableEmpty = 'Le nom de la table est vide';
$strTableHasBeenDropped = 'La table %s a �t� effac�e';
$strTableHasBeenEmptied = 'La table %s a �t� vid�e';
$strTableHasBeenFlushed = 'La table %s a �t� recharg�e';
$strTableIsEmpty = 'La table semble vide!';
$strTableMaintenance = '<b>Maintenance</b> de la table';
$strTableName = 'Nom de la table';
$strTableOfContents = 'Table des mati�res';
$strTableOptions = '<b>Options</b> pour cette table';
$strTables = '%s table(s)';
$strTableStructure = 'Structure de la table';
$strTable = 'Table';
$strTakeIt = 'utiliser celui-ci';
$strTblPrivileges = 'Privil�ges sp�cifiques � une table';
$strTempData = 'Donn�es temporaires';
$strTextAreaLength = 'Il est possible que ce champ<br />ne soit pas �ditable<br />en raison de sa longueur';
$strThai = 'tha�';
$strThemeDefaultNotFound = 'Th�me par d�faut %s inexistant!';
$strThemeNoPreviewAvailable = 'Pr�visualisation non disponible.';
$strThemeNotFound = 'Th�me %s inexistant!';
$strThemeNoValidImgPath = 'Chemin des images inexistant pour le th�me %s!';
$strThemePathNotFound = 'Chemin non trouv� pour le th�me %s!';
$strTheme = 'Th�me / Style';
$strThisHost = 'Ce serveur';
$strThreads = 'Fils d\'ex�cution';
$strThreadSuccessfullyKilled = 'Le processus %s a �t� �limin�.';
$strTime = 'Dur�e';
$strTimeoutInfo = 'L\'importation pr�c�dente a �chou� en raison du temps; retransmettez et le traitement reprendra � la position %d.';
$strTimeoutNothingParsed = 'Cependant lors du dernier traitement, aucune section n\a �t� analys�e; ceci signifie que phpMyAdmin ne pourra terminer cette importation, � moins que la limite de temps de PHP ne soit augment�e';
$strTimeoutPassed = 'La limite de temps a �t� atteinte; si vous voulez terminer l\'importation, soumettez � nouveau le m�me fichier et l\'importation continuera.';
$strToFromPage = 'de/vers la page';
$strToggleScratchboard = '�diteur visuel';
$strToggleSmallBig = 'Bascule agrandir/r�duire';
$strToSelectRelation = 'Pour s�lectionner un lien, cliquez :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'chinois traditionnel';
$strTraditionalSpanish = 'espagnol traditionnel';
$strTraffic = 'Trafic';
$strTransactionCoordinator = 'Coordonnateur des transactions';
$strTransformation_application_octetstream__download = 'Affiche un lien pour t�l�charger le contenu binaire d\'une colonne. La premi�re option est le nom du fichier binaire. La seconde option est le nom de la colonne contenant le nom du fichier. Si vous utilisez la seconde option, veuillez laisser la premi�re option vide.';
$strTransformation_application_octetstream__hex = 'Affiche une repr�sentation hexad�cimale des donn�es. Le premier param�tre est optionnel et sp�cifie combien d\'espaces seront ajout�s.';
$strTransformation_image_jpeg__inline = 'Affiche une image timbre-poste cliquable; les options sont: largeur,hauteur en pixels (conserve le rapport original)';
$strTransformation_image_jpeg__link = 'Affiche un lien vers cette image';
$strTransformation_image_png__inline = 'Voir image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Affiche un champ TIME, TIMESTAMP, DATETIME ou un champ num�rique contenant une valeur TIMESTAMP UNIX en tant que date format�e. La premi�re option est le d�calage (en heures) � ajouter (par d�faut, 0). La seconde option sert � indiquer le format de date ou d\'heure. La troisi�me option d�termine si vous voulez la date locale ("local") ou UTC ("utc"). Pour le format "local", le second param�tre utilise le format de la fonction PHP strftime() et pour le format "utc", il utilise la fonction gmdate().';
$strTransformation_text_plain__external = '(Linux seulement) Ex�cute un programme externe et lui envoit le contenu du champ via l\'entr�e standard. Puis capture la sortie standard de ce programme externe. Le programme par d�faut est tidy, pour un affichage embelli du code HTML.  Pour des raisons de s�curit�, vous devez �diter le script libraries/transformations/text_plain__external.inc.php et y ins�rer les noms de programme externe possibles. La premi�re option est le num�ro du programme que vous voulez utiliser, la seconde option contient les param�tres pour ce programme. En troisi�me option, une valeur de 1 va convertir le r�sultat avec la fonction htmlspecialchars() (par d�faut, 1). En option 4, une valeur de 1 va ajouter NOWRAP � la cellule affich�e (par d�faut, 1).';
$strTransformation_text_plain__formatted = 'Pr�serve le contenu original du champ, sans ajout de caract�res d\'�chappement.';
$strTransformation_text_plain__imagelink = 'Affiche une image et un lien, le champ contient le nom du fichier; en premi�re option, un pr�fixe comme "http://domaine.com/", en seconde option, la largeur en pixels, en troisi�me option la hauteur en pixels.';
$strTransformation_text_plain__link = 'Affiche un lien, le champ contient le nom du fichier; en premi�re option, un pr�fixe comme "http://domaine.com/", en seconde option, un titre pour le lien.';
$strTransformation_text_plain__sql = 'Affiche le texte comme une requ�te SQL avec embellissement de la syntaxe.';
$strTransformation_text_plain__substr = 'N\'affiche qu\'une partie du champ. En premi�re option, la position de d�part (par d�faut, 0). En seconde option, le nombre de caract�res � afficher (par d�faut, le reste). En troisi�me option, des caract�res � afficher � la fin du texte (par d�faut: "...").';
$strTriggers = 'D�clencheurs';
$strTruncateQueries = 'Afficher les requ�tes tronqu�es';
$strTurkish = 'turc';
$strType = 'Type';

$strUkrainian = 'ukrainien';
$strUncheckAll = 'Tout d�cocher';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'inconnu';
$strUnselectAll = 'Tout d�s�lectionner';
$strUnsupportedCompressionDetected = 'Vous avez tent� d\'importer un fichier dont le mode de compression (%s) n\'est pas support� par votre configuration PHP ou est d�sactiv� dans celle-ci.';
$strUpdatePrivMessage = 'Vous avez modifi� les privil�ges pour %s.';
$strUpdateProfileMessage = 'Le profil a �t� modifi�.';
$strUpdateQuery = 'Mise-�-jour de la requ�te';
$strUpdComTab = 'La documentation indique comment mettre � jour votre table Column_comments';
$strUpgrade = 'Vous devriez utiliser %s en version %s ou plus r�cente.';
$strUploadErrorCantWrite = 'Erreur lors de l\'�criture du fichier sur disque.';
$strUploadErrorExtension = 'T�l�chargement arr�t� par l\'extension.';
$strUploadErrorFormSize = 'La taille du fichier t�l�charg� d�passe la limite permise par la directive MAX_FILE_SIZE pr�sente dans le formulaire HTML.';
$strUploadErrorIniSize = 'La taille du fichier t�l�charg� d�passe la limite permise par la directive upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'R�pertoire temporaire manquant.';
$strUploadErrorPartial = 'Le fichier n\'a �t� que partiellement t�l�charg�.';
$strUploadErrorUnknown = 'Erreur inconnue durant le t�l�chargement.';
$strUploadLimit = 'Vous avez probablement tent� de t�l�charger un fichier trop volumineux. Veuillez vous r�f�rer � la %sdocumentation%s pour des fa�ons de contourner cette limite.';
$strUploadsNotAllowed = 'Les t�l�chargements vers ce serveur ne sont pas permis.';
$strUsage = 'Espace';
$strUseBackquotes = 'Prot�ger les noms des tables et des champs par des&nbsp;"`"';
$strUsedPhpExtensions = 'Extensions PHP utilis�es';
$strUseHostTable = 'Utiliser la table Host';
$strUserAlreadyExists = 'L\'utilisateur %s existe d�j�!';
$strUserEmpty = 'Le nom d\'utilisateur est vide';
$strUserName = 'Nom d\'utilisateur';
$strUserNotFound = 'L\'utilisateur choisi n\'existe pas dans la table des privil�ges';
$strUserOverview = 'Vue d\'ensemble des utilisateurs';
$strUsersDeleted = 'Les utilisateurs s�lectionn�s ont �t� effac�s.';
$strUsersHavingAccessToDb = 'Utilisateurs ayant acc�s � &quot;%s&quot;';
$strUser = 'Utilisateur';
$strUseTabKey = 'Utilisez la tabulation pour aller d\'une valeur � l\'autre, ou CTRL+fl�ches pour aller n\'importe o�';
$strUseTables = 'Utiliser les tables';
$strUseTextField = 'Entrez une valeur';
$strUseThisValue = 'Utiliser cette valeur';

$strValidateSQL = 'Valider SQL';
$strValidatorError = 'Le validateur SQL n\'a pas pu �tre initialis�. V�rifiez que les extensions PHP n�cessaires ont bien �t� install�es (voir la %sdocumentation%s).';
$strValue = 'Valeur';
$strVar = 'Variable';
$strVersionInformation = 'Information de version';
$strViewDump = '<b>Afficher le sch�ma</b> de la table';
$strViewDumpDatabases = 'Sch�ma et/ou contenu des bases de donn�es';
$strViewDumpDB = 'Sch�ma et donn�es de la base ';
$strViewHasBeenDropped = 'La vue %s a �t� supprim�e';
$strViewMaxExactCount = 'Cette vue comporte plus de %d enregistrements. Veuillez vous r�f�rer � la %sdocumentation%s.';
$strViewName = 'Nom de la vue';
$strView = 'Vue';

$strWebServerUploadDirectoryError = 'Le r�pertoire de transfert est inaccessible';
$strWebServerUploadDirectory = 'r�pertoire de transfert du serveur Web';
$strWelcome = 'Bienvenue � %s ';
$strWestEuropean = 'Europe de l\'ouest';
$strWildcard = 'passepartout';
$strWindowNotFound = 'La fen�tre principale n\'a pu �tre mise � jour. Il est possible que vous l\'ayiez ferm�e, ou encore que votre navigateur bloque les mises � jour inter-fen�tres pour des raisons de s�curit�.';
$strWithChecked = 'Pour la s�lection :';
$strWriteRequests = 'Requ�tes d\'�criture';
$strWrongUser = 'Erreur d\'utilisateur/mot de passe. Acc�s refus�';

$strXML = 'XML';

$strYes = 'Oui';

$strZeroRemovesTheLimit = 'Note: Une valeur de 0 (zero) enl�ve la limite.';
$strZip = '"zipp�"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
