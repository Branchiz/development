<?php
/* $Id: french-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('o', 'Kio', 'Mio', 'Gio', 'Tio', 'Pio', 'Eio');

$mysql_5_0_doc_lang = 'fr';

$day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
// Voir http://www.php.net/manual/en/function.strftime.php pour la variable
// ci-dessous
$datefmt = '%A %d %B %Y à %H:%M';

$timespanfmt = '%s jours, %s heures, %s minutes et %s secondes';

$strAbortedClients = 'Arrêts prématurés';
$strAccessDenied = 'Accès refusé';
$strAccessDeniedCreateConfig = 'La raison probable est que vous n\'avez pas créé de fichier de configuration. Vous pouvez utiliser le %1$sscript de configuration%2$s dans ce but.';
$strAccessDeniedExplanation = 'phpMyAdmin a tenté de se connecter au serveur MySQL, et le serveur a rejeté la connexion. Veuillez vérifier les valeurs de "host", "username" et "password" dans votre configuration et vous assurer qu\'elles correspondent aux informations fournies par l\'administrateur du serveur MySQL.';
$strAction = 'Action';
$strAddAutoIncrement = 'Inclure la valeur courante de l\'AUTO_INCREMENT';
$strAddClause = 'Ajouter %s';
$strAddConstraints = 'Inclure les contraintes de clés étrangères';
$strAddDeleteColumn = 'Ajouter/effacer x colonne(s)';
$strAddDeleteRow = 'Ajouter/effacer x ligne(s)';
$strAddFields = 'Ajouter %s champ(s)';
$strAddHeaderComment = 'Commentaires mis en en-tête (\\n sépare les lignes)';
$strAddIntoComments = 'Inclure sous forme de commentaires';
$strAddNewField = 'Ajouter un champ';
$strAddPrivilegesOnDb = 'Ajouter des privilèges sur cette base de données';
$strAddPrivilegesOnTbl = 'Ajouter des privilèges sur cette table';
$strAddSearchConditions = 'Critères de recherche (pour l\'énoncé "where"):';
$strAddToIndex = 'Ajouter à l\'index&nbsp;%s&nbsp;colonne(s)';
$strAddUser = 'Ajouter un utilisateur';
$strAddUserMessage = 'Vous avez ajouté un utilisateur';
$strAdministration = 'Administration';
$strAffectedRows = 'Nombre d\'enregistrements affectés :';
$strAfter = 'Après %s';
$strAfterInsertBack = 'Retourner à la page précédente';
$strAfterInsertNewInsert = 'Insérer un nouvel enregistrement';
$strAfterInsertNext = 'Modifier l\'enregistrement suivant';
$strAfterInsertSame = 'Demeurer sur cette page';
$strAllowInterrupt = 'Permettre l\'interruption de l\'importation si la limite de temps est sur le point d\'être atteinte. Ceci pourrait aider à importer des fichiers volumineux, au détriment du respect des transactions.';
$strAllTableSameWidth = 'Afficher toutes les tables avec une largeur identique';
$strAll = 'Tout';
$strAlterOrderBy = '<b>Ordonner</b> la table par';
$strAnalyzeTable = 'Analyser la table';
$strAnd = 'et';
$strAndThen = 'et ensuite';
$strAngularLinks = 'Liens angulaires';
$strAnIndex = 'Un index a été ajouté sur %s';
$strAnyHost = 'Tout serveur';
$strAny = 'N\'importe quel';
$strAnyUser = 'Tout utilisateur';
$strApproximateCount = 'Peut être approximatif. Voir FAQ 3.11';
$strAPrimaryKey = 'Une clé primaire a été ajoutée sur %s';
$strArabic = 'arabe';
$strArmenian = 'arménien';
$strAscending = 'Croissant';
$strAtBeginningOfTable = 'En début de table';
$strAtEndOfTable = 'En fin de table';
$strAttr = 'Attributs';
$strAutomaticLayout = 'Mise en page automatique';

$strBack = 'Retour';
$strBaltic = 'baltique';
$strBeginCut = 'Début de la section à couper';
$strBeginRaw = 'Début des informations sur l\'anomalie';
$strBinary = 'Binaire';
$strBinaryDoNotEdit = 'Binaire - ne pas éditer';
$strBinaryLog = 'Log binaire';
$strBinLogEventType = 'Type d\'évènement';
$strBinLogInfo = 'Information';
$strBinLogName = 'Nom du log binaire';
$strBinLogOriginalPosition = 'Position d\'origine';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'ID du serveur';
$strBookmarkAllUsers = 'Signet visible pour les autres utilisateurs';
$strBookmarkCreated = 'Signet %s créé';
$strBookmarkDeleted = 'Le signet a été effacé.';
$strBookmarkLabel = 'Intitulé';
$strBookmarkQuery = 'Requêtes en signets';
$strBookmarkReplace = 'Remplacer un signet existant du même nom';
$strBookmarkThis = 'Conserver cette requête dans les signets';
$strBookmarkView = 'Voir uniquement';
$strBrowse = 'Afficher';
$strBrowseDistinctValues = 'Affiche les valeurs distinctes';
$strBrowseForeignValues = 'Afficher les valeurs de la table liée';
$strBufferPoolActivity = 'Activité de la mémoire-tampon';
$strBufferPool = 'Mémoire-tampon';
$strBufferPoolUsage = 'Utilisation de la mémoire-tampon';
$strBufferReadMissesInPercent = 'Lectures non-satisfaites en %';
$strBufferReadMisses = 'Lectures non-satisfaites';
$strBufferWriteWaitsInPercent = 'Nombre d\'attentes d\'écriture en %';
$strBufferWriteWaits = 'Nombre d\'attentes d\'écriture';
$strBulgarian = 'bulgare';
$strBusyPages = 'Pages occupées';
$strBzError = 'phpMyAdmin n\'a pu compresser le fichier exporté en raison d\'une composante Bz2 défaillante dans cette version de PHP. Il est recommandé de donner à <code>$cfg[\'BZipDump\']</code> dans votre fichier de configuration phpMyAdmin la valeur <code>FALSE</code>. Si vous voulez utiliser la compression en mode Bz2, veuillez mettre à niveau votre version de PHP. Ce rapport d\'anomalies PHP donne les détails: %s.';
$strBzip = '"bzippé"';

$strCalendar = 'Calendrier';
$strCancel = 'Annuler';
$strCanNotLoadExportPlugins = 'Erreur lors du chargement des modules d\'exportation!';
$strCanNotLoadImportPlugins = 'Chargement impossible des greffons d\'importation, veuillez vérifier votre installation!';
$strCannotLogin = 'Connexion au serveur MySQL non permise';
$strCantLoad = 'PHP ne peut charger l\'extension %s, [br]veuillez vérifier votre configuration de PHP';
$strCantLoadRecodeIconv = 'Erreur lors du chargement de l\'extension iconv ou recode, utilisée pour convertir le jeu de caractères; veuillez activer l\'une de ces extensions dans PHP, ou désactiver la conversion des jeux de caractères dans phpMyAdmin';
$strCantRenameIdxToPrimary = 'L\'index ne peut être renommé PRIMARY!';
$strCantUseRecodeIconv = 'Erreur lors de l\'utilisation de iconv, libiconv et recode_string, alors que ces extensions semblent chargées. Veuillez vérifier votre configuration de PHP.';
$strCardinality = 'Cardinalité';
$strCaseInsensitive = 'insensible à la casse';
$strCaseSensitive = 'sensible à la casse';
$strCentralEuropean = 'Europe centrale';
$strChangeCopyModeCopy = '... conserver intact l\'ancien utilisateur.';
$strChangeCopyMode = 'Créer un nouvel utilisateur avec les mêmes privilèges et ...';
$strChangeCopyModeDeleteAndReload = ' ... supprimer l\'ancien utilisateur, puis recharger les privilèges au serveur.';
$strChangeCopyModeJustDelete = ' ... supprimer l\'ancien utilisateur.';
$strChangeCopyModeRevoke = ' ... effacer tous les privilèges de l\'ancien utilisateur, puis l\'effacer.';
$strChangeCopyUser = 'Changement des informations de connexion / Copie d\'utilisateur';
$strChangeDisplay = 'Champ à afficher';
$strChange = 'Modifier';
$strChangePassword = 'Modifier le mot de passe';
$strCharset = 'Jeu de caractères';
$strCharsetOfFile = 'Jeu de caractères du fichier:';
$strCharsetsAndCollations = 'Jeux de caractères et interclassement';
$strCharsets = 'Jeux de caractères';
$strCheckAll = 'Tout cocher';
$strCheckOverhead = 'Cocher tables avec pertes';
$strCheckPrivsLong = 'Vérifier les privilèges pour la base de données &quot;%s&quot;.';
$strCheckPrivs = 'Vérifier les privilèges';
$strCheckTable = 'Vérifier la table';
$strChoosePage = 'Page à éditer';
$strColComFeat = 'Commentaires de colonnes';
$strCollation = 'Interclassement';
$strColumnNames = 'Nom des colonnes';
$strColumnPrivileges = 'Privilèges de colonnes';
$strCommand = 'Commande';
$strComments = 'Commentaires';
$strCommentsForTable = 'COMMENTAIRES POUR LA TABLE';
$strCompatibleHashing = 'compatible MySQL&nbsp;4.0';
$strCompleteInserts = 'Insertions complètes';
$strCompression = 'Compression';
$strCompressionWillBeDetected = 'Ces modes de compression seront détectés automatiquement : %s';
$strConfigDefaultFileError = 'Chargement de la configuration par défaut impossible depuis "%1$s"';
$strConfigFileError = 'phpMyAdmin n\'a pu lire votre fichier de configuration!<br />Il est possible qu\'il contienne une erreur de syntaxe, ou que PHP soit incapable de le trouver<br />À l\'aide du lien suivant, vous pouvez vérifier le message d\'erreur généré par PHP;<br />la plupart du temps, un apostrophe ou un point-virgule sont manquants.<br />Si vous recevez une page blanche, aucune erreur n\'a été détectée.';
$strConfigureTableCoord = 'Les coordonnées de la table %s n\'ont pas été configurées';
$strConnectionError = 'Connexion impossible: réglages incorrects.';
$strConnections = 'Connexions';
$strConstraintsForDumped = 'Contraintes pour les tables exportées';
$strConstraintsForTable = 'Contraintes pour la table';
$strControluserFailed = 'La connexion au "controluser" tel que défini dans votre configuration a échoué.';
$strCookiesRequired = 'Vous devez accepter les cookies pour poursuivre.';
$strCopy = 'Copier';
$strCopyDatabaseOK = 'La base de données %s a été copiée sur %s';
$strCopyTable = '<b>Copier</b> la table vers (base<b>.</b>table)&nbsp;:';
$strCopyTableOK = 'La table %s a été copiée vers %s.';
$strCopyTableSameNames = 'On ne peut copier la table sur elle-même!';
$strCouldNotKill = 'phpMyAdmin n\'a pu éliminer le processus %s. Il était probablement déjà fermé.';
$strCreate = 'Créer';
$strCreateDatabaseBeforeCopying = 'Faire CREATE DATABASE avant la copie';
$strCreateIndex = 'Créer un index sur&nbsp;%s&nbsp;colonne(s)';
$strCreateIndexTopic = 'Créer un nouvel index';
$strCreateNewDatabase = 'Créer une base de données';
$strCreateNewTable = '<b>Créer une nouvelle table</b> sur la base %s';
$strCreatePage = 'Créer une page';
$strCreatePdfFeat = 'Génération de schémas en PDF';
$strCreateRelation = 'Nouvelle relation';
$strCreateTable  = 'Nouvelle table';
$strCreateUserDatabase = 'Base de données pour cet utilisateur';
$strCreateUserDatabaseName = 'Créer une base portant son nom et donner à cet utilisateur tous les privilèges sur cette base';
$strCreateUserDatabaseNone = 'Aucune';
$strCreateUserDatabaseWildcard = 'Donner les privilèges passepartout ("%")';
$strCreationDates = 'Dates de création/modification/vérification';
$strCriteria = 'Critère';
$strCroatian = 'croate';
$strCSV = 'CSV';
$strCyrillic = 'cyrillique';
$strCzechSlovak = 'tchèque-slovaque';
$strCzech = 'tchèque';

$strDanish = 'danois';
$strDatabase = 'Base de données';
$strDatabaseEmpty = 'Le nom de la base de données est vide!';
$strDatabaseExportOptions = 'Options d\'exportation';
$strDatabaseHasBeenDropped = 'La base de données %s a été effacée.';
$strDatabases = 'Bases de données';
$strDatabasesDropped = '%s bases de données ont été supprimées.';
$strDatabasesStatsDisable = 'Désactiver les statistiques';
$strDatabasesStatsEnable = 'Activer les statistiques';
$strDatabasesStatsHeavyTraffic = 'Note: L\'activation des statistiques peut causer un trafic important entre le serveur web et le serveur MySQL.';
$strDatabasesStats = 'Statistiques sur les bases de données';
$strDataDict = 'Dictionnaire de données';
$strData = 'Données';
$strDataOnly = 'Données seulement';
$strDataPages = 'Pages contenant des données';
$strDBComment = '<b>Commentaire</b> sur la base de données: ';
$strDBCopy = 'Copier la base de données vers';
$strDbIsEmpty = 'La base de données semble vide!';
$strDbPrivileges = 'Privilèges spécifiques à une base de données';
$strDBRename = '<b>Changer le nom</b> de la base de données pour';
$strDbSpecific = 'spécifique à cette base de données';
$strDefault = 'Défaut';
$strDefaultEngine = 'Sur ce serveur MySQL, le moteur de stockage par défaut est %s.';
$strDefaultValueHelp = 'Pour les valeurs par défaut, veuillez n\'entrer qu\'une seule valeur, sans caractère d\'échappement ou apostrophes, sous la forme: a';
$strDefragment = 'Défragmenter la table';
$strDelayedInserts = 'Insertions avec délais (DELAYED)';
$strDeleteAndFlushDescr = 'Ceci est la méthode la plus directe, mais le fait de recharger les privilèges pourrait prendre du temps.';
$strDeleteAndFlush = 'Effacer les utilisateurs, puis recharger les privilèges.';
$strDeleted = 'L\'enregistrement a été effacé';
$strDeletedRows = 'Nombre d\'enregistrements effacés :';
$strDelete = 'Effacer';
$strDeleteNoUsersSelected = 'Aucun utilisateur n\'a été choisi en vue de le détruire!';
$strDeleteRelation = 'Effacer la relation';
$strDeleting = 'Destruction de %s';
$strDelimiter = 'Délimiteur';
$strDelOld = 'Cette page fait référence à des tables qui n\'existent plus. Voulez-vous effacer ces références?';
$strDescending = 'Décroissant';
$strDescription = 'Description';
$strDesigner = 'Concepteur';
$strDesignerHelpDisplayField = 'Le champ à afficher est montré en rose. Pour indiquer qu\'un champ est ou n\'est plus le champ à afficher, cliquer l\'icône "Champ à afficher", puis cliquer sur le nom de champ approprié.';
$strDictionary = 'dictionnaire';
$strDirectLinks = 'Liens directs';
$strDirtyPages = 'Pages modifiées';
$strDisabled = 'désactivé';
$strDisableForeignChecks = 'Désactiver la vérification des clés étrangères';
$strDisplayFeat = 'Affichage infobulle';
$strDisplayOrder = 'Ordre d\'affichage :';
$strDisplayPDF = '<b>Afficher le schéma</b> en PDF';
$strDoAQuery = 'Recherche par valeur (passepartout: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentation';
$strDoYouReally = 'Voulez-vous vraiment effectuer ';
$strDropDatabaseStrongWarning = 'Vous êtes sur le point de DÉTRUIRE une base de données!';
$strDrop = 'Supprimer';
$strDropUsersDb = 'Supprimer les bases de données portant le même nom que les utilisateurs';
$strDumpingData = 'Contenu de la table';
$strDumpSaved = 'Le fichier d\'exportation a été sauvegardé sous %s.';
$strDumpXRows = 'Exporte %s enregistrement(s) à partir du rang n° %s.';
$strDynamic = 'dynamique';

$strEdit = 'Modifier';
$strEditPDFPages = 'Préparer le schéma en PDF';
$strEditPrivileges = 'Changer les privilèges';
$strEffective = 'effectif';
$strEmptyResultSet = 'MySQL n\'a retourné aucun enregistrement.';
$strEmpty = 'Vider';
$strEnabled = 'activé';
$strEncloseInTransaction = 'Utiliser le mode transactionnel';
$strEndCut = 'Fin de la section à couper';
$strEnd = 'Fin';
$strEndRaw = 'Fin des informations sur l\'anomalie';
$strEngineAvailable = '%s est disponible sur ce serveur MySQL.';
$strEngineDisabled = '%s a été désactivé sur ce serveur MySQL.';
$strEngines = 'Moteurs';
$strEngineUnsupported = 'Ce serveur MySQL ne supporte pas le moteur de stockage %s.';
$strEnglish = 'anglais';
$strEnglishPrivileges = ' Veuillez noter que les noms de privilèges sont exprimés en anglais';
$strError = 'Erreur';
$strErrorInZipFile = 'Erreur rencontrée dans l\'archive ZIP :';
$strErrorRelationAdded = 'Erreur: relation non ajoutée.';
$strErrorRelationExists = 'Erreur: relation déjà existante.';
$strErrorRenamingTable = 'Erreur lors du renommage de %1$s en %2$s';
$strErrorSaveTable = 'Erreur lors de la sauvegarde des coordonnées Concepteur.';
$strEscapeWildcards = 'Préfixer avec \ les passepartouts _ et % pour un usage littéral';
$strEsperanto = 'Espéranto';
$strEstonian = 'estonien';
$strEvent = 'Événement';
$strExcelEdition = 'Excel en version';
$strExecuteBookmarked = 'Exécuter la requête en signets';
$strExplain = 'Expliquer SQL';
$strExport = 'Exporter';
$strExportImportToScale = 'Exporter/Importer à l\'échelle';
$strExportMustBeFile = 'Ce choix d\'exportation doit être sauvegardé dans un fichier!';
$strExtendedInserts = 'Insertions étendues';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentatives échouées';
$strField = 'Champ';
$strFieldHasBeenDropped = 'Le champ %s a été effacé';
$strFieldInsertFromFileTempDirNotExists = 'Erreur lors du déplacement du fichier téléchargé, voir FAQ 1.11';
$strFields = 'Champs';
$strFieldsEnclosedBy = 'Champs entourés par';
$strFieldsEscapedBy = 'Caractère spécial';
$strFieldsTerminatedBy = 'Champs terminés par';
$strFileAlreadyExists = 'Le fichier %s existe déjà sur le serveur, veuillez changer le nom, ou cocher l\'option Écraser';
$strFileCouldNotBeRead = 'Le fichier n\'a pu être lu';
$strFileNameTemplateDescription = 'Cette valeur est interprétée avec %1$sstrftime%2$s, vous pouvez donc utiliser des chaînes de format d\'heure. Ces transformations additionnelles vont se produire: %3$s. Tout autre texte sera conservé tel quel.';
$strFileNameTemplateDescriptionDatabase = 'nom de base de données';
$strFileNameTemplateDescriptionServer = 'nom de serveur';
$strFileNameTemplateDescriptionTable = 'nom de table';
$strFileNameTemplate = 'Modèle de nom de fichier';
$strFileNameTemplateRemember = 'se souvenir du modèle';
$strFiles = 'Fichiers';
$strFileToImport = 'Fichier à importer';
$strFixed = 'fixe';
$strFlushPrivilegesNote = 'Note: phpMyAdmin obtient la liste des privilèges directement à partir des tables MySQL. Le contenu de ces tables peut être différent des privilèges effectifs, si des changements manuels ont été apportés. Dans ce cas, vous devriez %srecharger les privilèges%s avant de continuer.';
$strFlushQueryCache = 'Vider la cache des requêtes';
$strFlushTable = 'Recharger la table ("FLUSH")';
$strFlushTables = 'Fermer toutes les tables';
$strFontSize = 'Taille du texte';
$strForeignKeyError = 'Erreur lors de la création de la clé étrangère (vérifiez les types de données';
$strFormat = 'format';
$strFormEmpty = 'Formulaire incomplet !';
$strFreePages = 'Pages libres';
$strFullText = 'Textes complets';
$strFunction = 'Fonction';
$strFunctions = 'Fonctions';

$strGenBy = 'Généré par';
$strGeneralRelationFeat = 'Fonctions relationnelles';
$strGenerate = 'Générer'; 
$strGeneratePassword = 'Générer un mot de passe';
$strGenTime = 'Généré le ';
$strGeorgian = 'géorgien';
$strGerman = 'allemand';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilèges globaux';
$strGlobalValue = 'Valeur globale';
$strGo = 'Exécuter';
$strGrantOption = '"Grant"';
$strGreek = 'grec';
$strGzip = '"gzippé"';

$strHandler = 'Gestionnaire';
$strHasBeenAltered = 'a été modifié(e).';
$strHasBeenCreated = 'a été créé(e).';
$strHaveToShow = 'Vous devez choisir au moins une colonne à afficher';
$strHebrew = 'hébreu';
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
$strImportExportCoords = 'Importer/Exporter les coordonnées pour le schéma PDF';
$strImportFiles = 'Importe les fichiers';
$strImportFormat = 'Format du fichier d\'importation';
$strImport = 'Importer';
$strImportSuccessfullyFinished = 'L\'importation s\'est terminée avec succès, %d requêtes exécutées.';
$strIndexes = 'Index';
$strIndexesSeemEqual = 'Les index suivants semblent équivalents, vous devriez en éliminer un.';
$strIndexHasBeenDropped = 'L\'index %s a été effacé';
$strIndex = 'Index';
$strIndexName = 'Nom de l\'index&nbsp;:';
$strIndexType = 'Type d\'index&nbsp;:';
$strIndexWarningTable = 'Il y a des problèmes avec les index de la table `%s`';
$strInnoDBAutoextendIncrement = 'Auto-croissant: Taille de l\'incrément';
$strInnoDBAutoextendIncrementDesc = 'La valeur de l\'incrément lors de l\'agrandissement du fichier auto-croissant lorsqu\'il devient plein.';
$strInnoDBBufferPoolSizeDesc = 'La taille de la mémoire-tampon utilisée par InnoDB pour les opérations d\'antémoire sur les données et les index.';
$strInnoDBBufferPoolSize = 'Taille de la mémoire-tampon';
$strInnoDBDataFilePath = 'Fichiers de données';
$strInnoDBDataHomeDirDesc = 'Le chemin du répertoire pour tous les fichiers de données InnoDB.';
$strInnoDBDataHomeDir = 'Répertoire des données';
$strInnoDBPages = 'pages';
$strInnoDBRelationAdded = 'Relation InnoDB ajoutée';
$strInnodbStat = 'État InnoDB';
$strInsecureMySQL = 'Votre fichier de configuration fait référence à l\'utilisateur root sans mot de passe, ce qui correspond à la valeur par défaut de MySQL.  Votre serveur MySQL est donc ouvert aux intrusions, et vous devriez corriger ce problème de sécurité.';
$strInsertAsNewRow = 'Sauvegarder un nouvel enregistrement';
$strInsertedRowId = 'Identifiant de l\'enregistrement inséré:';
$strInsertedRows = 'Nombre d\'enregistrements insérés :';
$strInsert = 'Insérer';
$strInternalNotNecessary = '* Si une relation existe dans InnoDB, il n\'est pas nécessaire de la définir dans les relations internes.';
$strInternalRelationAdded = 'Relation interne ajoutée';
$strInternalRelations = 'Relations internes';
$strInUse = 'utilisé';
$strInvalidAuthMethod = 'Le fichier de configuration contient un type d\'authentification invalide :';
$strInvalidColumnCount = 'Le nombre de champs doit être plus grand que zéro.';
$strInvalidColumn = 'La colonne %s est invalide!';
$strInvalidCSVFieldCount = 'Nombre de champs invalide dans les données CSV à la ligne %d';
$strInvalidCSVFormat = 'Format invalide pour les données CSV à la ligne %d.';
$strInvalidCSVParameter = 'Paramètres invalides pour l\'importation CSV: %s';
$strInvalidDatabase = 'Nom de base de données invalide';
$strInvalidFieldAddCount = 'Vous devez ajouter au moins un champ';
$strInvalidFieldCount = 'La table doit comporter au moins un champ';
$strInvalidLDIImport = 'Ce greffon ne supporte pas les importations en format comprimé!';
$strInvalidRowNumber = '%d n\'est pas un numéro d\'enregistrement valable.';
$strInvalidServerHostname = 'Nom d\'hôte (hostname) invalide pour le serveur %1$s. Veuillez vérifier votre configuration.';
$strInvalidServerIndex = 'Indice de serveur invalide: "%s"';
$strInvalidTableName = 'Nom de table invalide';

$strJapanese = 'japonais';
$strJoins = 'Jointures';
$strJumpToDB = 'Aller à la base de données &quot;%s&quot;.';
$strJustDeleteDescr = 'Les utilisateurs &quot;effacés&quot; auront quand même accès au serveur, jusqu\'à ce que les privilèges soient rechargés.';
$strJustDelete = 'Seulement effacer les utilisateurs des tables de privilèges.';

$strKeepPass = 'Conserver le mot de passe';
$strKeyCache = 'Cache des clés';
$strKeyname = 'Nom de l\'index';
$strKill = 'Supprimer';
$strKnownExternalBug = 'La fonctionnalité %s est affectée par une anomalie connue, voir %s';
$strKorean = 'coréen';

$strLandscape = 'Paysage';
$strLanguage = 'Langue';
$strLanguageUnknown = 'Langue inconnue: %1$s.';
$strLatchedPages = 'Pages verrouillées';
$strLatexCaption = 'Sous-titre de la table';
$strLatexContent = 'Contenu de la table __TABLE__';
$strLatexContinuedCaption = 'Sous-titre de la table (suite)';
$strLatexContinued = '(suite)';
$strLatexIncludeCaption = 'Inclure les sous-titres';
$strLatexLabel = 'Clé de l\'étiquette';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structure de la table __TABLE__';
$strLatvian = 'letton';
$strLDI = 'CSV via LOAD DATA';
$strLDILocal = 'Utiliser l\'option LOCAL';
$strLengthSet = 'Taille/Valeurs*';
$strLimitNumRows = 'Nombre d\'enregistrements par page';
$strLinesTerminatedBy = 'Lignes terminées par';
$strLinkNotFound = 'Lien absent';
$strLinksTo = 'Relié à';
$strLithuanian = 'lituanien';
$strLocalhost = 'Local';
$strLocationTextfile = 'Emplacement du fichier texte';
$strLogin = 'Connexion';
$strLoginInformation = 'Information pour la connexion';
$strLogout = 'Quitter';
$strLogPassword = 'Mot de passe&nbsp;:';
$strLogServer = 'Serveur';
$strLogUsername = 'Nom d\'utilisateur&nbsp;:';
$strLongOperation = 'Cette opération pourrait être longue. Procéder quand même? ';

$strMaxConnects = 'max. de connexions simultanées';
$strMaximalQueryLength = 'Taille maximum de la requête générée';
$strMaximumSize = 'Taille maximum: %s%s';
$strMbExtensionMissing = 'L\'extension PHP mbstring n\'a pu être localisée et il semble que vous utilisiez un jeu de caractères multi-octets. Sans cette extension, phpMyAdmin est incapable de gérer correctement les caractères et il peut en résulter des problèmes.'; 
$strMbOverloadWarning = 'Vous avez activé mbstring.func_overload dans votre configuration PHP. Cette option est incompatible avec phpMyAdmin et peut nuire au traitement des données!';
$strMIME_available_mime = 'Types MIME disponibles';
$strMIME_available_transform = 'Transformations disponibles';
$strMIME_description = 'Description';
$strMIME_MIMEtype = 'Type MIME';
$strMIME_nodescription = 'Aucune description n\'est disponible pour cette transformation.<br />Veuillez demander à son auteur, des détails sur %s.';
$strMIME_transformation_note = 'La %sdescription des transformations%s explique les transformations possibles en fonction des types MIME.';
$strMIME_transformation_options_note = 'Veuillez entrer les valeurs des options de transformation en suivant ce format: \'a\', 100, b,\'c\'...<br />Si vous devez entrer un caractère ("\") ou une apostrophe ("\'") parmi ces valeurs, faites-le précéder du caractère d\'échappement, par exemple  \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Options de transformation';
$strMIME_transformation = 'Transformation';
$strMIMETypesForTable = 'TYPES MIME POUR LA TABLE';
$strMIME_without = 'Les types MIME affichées en italiques ne possèdent pas de fonctions de transformation.';
$strModifications = 'Les modifications ont été sauvegardées.';
$strModifyIndexTopic = 'Modifier un index';
$strModify = 'Modifier';
$strMoveMenu = 'Déplacer le menu';
$strMoveTable = '<b>Déplacer</b> la table vers (base<b>.</b>table)&nbsp;:';
$strMoveTableOK = 'La table %s a été déplacée vers %s.';
$strMoveTableSameNames = 'On ne peut déplacer la table sur elle-même!';
$strMultilingual = 'multilingue';
$strMyISAMDataPointerSizeDesc = 'La taille du pointeur (en octets) qui servira lors d\'un CREATE TABLE sur une table MyISAM si aucune option MAX_ROWS n\'est indiquée';
$strMyISAMDataPointerSize = 'Taille du pointeur de données';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si le fichier temporaire utilisé pour la création rapide des index MyISAM devrait s\'avérer plus volumineux que d\'employer la cache des clés (la différence étant spécifiée ici), utiliser la méthode de cache des clés';
$strMyISAMMaxExtraSortFileSize = 'La taille maximum pour les fichiers temporaires utilisés lors de la création d\'index';
$strMyISAMMaxSortFileSizeDesc = 'La taille maximum du fichier temporaire qu\'il est permis à MySQL d\'allouer pour recréer un index MyISAM (durant un REPAIR TABLE, ALTER TABLE ou LOAD DATA INFILE)';
$strMyISAMMaxSortFileSize = 'Taille maximum pour les fichiers de tri temporaires';
$strMyISAMRecoverOptionsDesc = 'Le mode de recouvrement automatique en cas de tables MyISAM en mauvais état, tel que réglé via l\'option --myisam-recover au départ du serveur';
$strMyISAMRecoverOptions = 'Mode de recouvrement automatique';
$strMyISAMRepairThreadsDesc = 'Si cette valeur est plus grande que 1, les index de tables MyISAM sont créés en parallèle (chaque index dans son propre fil d\'exécution) lors d\'une réparation.';
$strMyISAMRepairThreads = 'Nombre de fils d\'exécution pour la réparation';
$strMyISAMSortBufferSizeDesc = 'La mémoire tampon qui est allouée pour trier les index MyISAM durant une opération REPAIR TABLE ou pour créer les index lors d\'un CREATE INDEX ou ALTER TABLE';
$strMyISAMSortBufferSize = 'Taille de la mémoire tampon';
$strMySQLCharset = 'Jeu de caractères pour MySQL';
$strMysqlClientVersion = 'Version du client MySQL';
$strMySQLConnectionCollation = 'Interclassement pour la connexion MySQL';
$strMysqlLibDiffersServerVersion = 'La version de votre bibliothèque MySQL (%s) diffère de la version de votre serveur MySQL (%s). Ceci peut occasionner un comportement imprévisible.';
$strMySQLSaid = 'MySQL a répondu:';
$strMySQLShowProcess = 'Afficher les processus';
$strMySQLShowStatus = 'Afficher l\'état du serveur';
$strMySQLShowVars = 'Afficher les variables du serveur';

$strName = 'Nom';
$strNext = 'Suivant';
$strNoActivity = 'Aucune activité depuis %s secondes ou plus, veuillez vous reconnecter';
$strNoDatabases = 'Aucune base de données';
$strNoDatabasesSelected = 'Aucune base de données n\'a été sélectionnée.';
$strNoDataReceived = 'Aucune données n\'a été reçu en vue de l\'importation. Aucun nom de fichier n\'a été fourni, ou encore la taille du fichier a dépassé la limite permise par votre configuration de PHP. Voir FAQ 1.16';
$strNoDescription = 'pas de description';
$strNoDetailsForEngine = 'Aucune information détaillée sur l\'état n\'est disponible pour ce moteur de stockage.';
$strNoDropDatabases = 'La commande "DROP DATABASE" est désactivée.';
$strNoExplain = 'Ne pas expliquer SQL';
$strNoFilesFoundInZip = 'Aucun fichier présent dans l\'archive ZIP!';
$strNoFrames = 'L\'utilisation de phpMyAdmin est plus aisée avec un navigateur <b>supportant les "frames"</b>.';
$strNoIndex = 'Aucun index n\'est défini&nbsp;!';
$strNoIndexPartsDefined = 'Aucune colonne n\'a été définie pour cet index&nbsp;!';
$strNoModification = 'Pas de modifications';
$strNone = 'aucune';
$strNo = 'Non';
$strNoOptions = 'Ce format ne comporte pas d\'options';
$strNoPassword = 'aucun mot de passe';
$strNoPermission = 'Le serveur web n\'a pas les permissions nécessaires pour enregistrer le fichier %s.';
$strNoPhp = 'Sans source PHP';
$strNoPrivileges = 'aucun privilège';
$strNoRights = 'Vous n\'êtes pas autorisé à accéder à cette page';
$strNoRowsSelected = 'Aucun enregistrement n\'a été sélectionné';
$strNoSpace = 'Espace-disque insuffisant pour enregistrer le fichier %s.';
$strNoTablesFound = 'Aucune table n\'a été trouvée dans cette base.';
$strNoThemeSupport = 'Les thèmes ne sont pas supportés, veuillez vérifier votre configuration et/ou vos thèmes dans le répertoire %s.';
$strNotNumber = 'Ce n\'est pas un nombre !';
$strNotOK = 'en erreur';
$strNotSet = 'La table <b>%s</b> est absente ou non définie dans %s';
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
$strOpenNewWindow = 'Ouvrir une nouvelle fenêtre phpMyAdmin';
$strOperations = 'Opérations';
$strOperator = 'Opérateur';
$strOptimizeTable = 'Optimiser la table';
$strOptions = 'Options';
$strOr = 'Ou';
$strOverhead = 'Perte';
$strOverwriteExisting = 'Écraser les fichiers existants';

$strPageNumber = 'Page n°:';
$strPagesToBeFlushed = 'Pages devant être vidées';
$strPaperSize = 'Taille du papier';
$strPartialImport = 'Importation partielle';
$strPartialText = 'Textes réduits';
$strPasswordChanged = 'Le mot de passe de %s a été changé.';
$strPasswordEmpty = 'Le mot de passe est vide';
$strPasswordHashing = 'Hachage du mot de passe';
$strPassword = 'Mot de passe';
$strPasswordNotSame = 'Les mots de passe doivent être identiques';
$strPdfDbSchema = 'Schema de la base "%s" - Page %s';
$strPdfInvalidTblName = 'La table "%s" n\'existe pas !';
$strPdfNoTables = 'Pas de table !';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Génère un rapport contenant les données d\'une seule table)';
$strPDFReportTitle = 'Titre du rapport';
$strPerHour = 'par heure';
$strPerMinute = 'par minute';
$strPerSecond = 'par seconde';
$strPersian = 'perse';
$strPhoneBook = 'annuaire téléphonique';
$strPHP40203 = 'Vous utilisez PHP 4.2.3, et cette version a un sérieux problème avec les caractères multi-octets (mbstring), tel que décrit sur le rapport d\'anomalies 19404 chez PHP.  Il n\'est pas recommandé d\'utiliser cette version de PHP avec phpMyAdmin.';
$strPhp = 'Créer source PHP';
$strPHPVersion = 'Version de PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Veuillez choisir la clé primaire ou un index unique';
$strPmaDocumentation = 'Documentation de phpMyAdmin';
$strPmaUriError = 'Le paramètre <tt>$cfg[\'PmaAbsoluteUri\']</tt> DOIT être renseigné dans votre fichier de configuration !';
$strPmaWiki = 'Wiki phpMyAdmin';
$strPolish = 'polonais';
$strPortrait = 'Portrait';
$strPos1 = 'Début';
$strPrevious = 'Précédent';
$strPrimaryKeyHasBeenDropped = 'La clé primaire a été effacée';
$strPrimaryKeyName = 'Le nom d\'une clé primaire doit être PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>doit et ne peut être</b> que le nom d\'une clé primaire&nbsp;!)';
$strPrimary = 'Primaire';
$strPrint = 'Imprimer';
$strPrintViewFull = 'Version imprimable (avec textes complets)';
$strPrintView = 'Version imprimable';
$strPrivDescAllPrivileges = 'Tous les privilèges sauf GRANT.';
$strPrivDescAlter = 'Permission de modifier la structure des tables existantes.';
$strPrivDescAlterRoutine = 'Permission de modifier et de supprimer des procédures stockées.';
$strPrivDescCreateDb = 'Permission de créer des bases de données et des tables.';
$strPrivDescCreateRoutine = 'Permission de créer des procédures stockées.';
$strPrivDescCreateTbl = 'Permission de créer des tables.';
$strPrivDescCreateTmpTable = 'Permission de créer des tables temporaires.';
$strPrivDescCreateUser = 'Permission de créer, supprimer et renommer des comptes utilisateurs';
$strPrivDescCreateView = 'Permission de créer des vues.';
$strPrivDescDelete = 'Permission de détruire des données';
$strPrivDescDropDb = 'Permission d\'effacer des bases de données et des tables.';
$strPrivDescDropTbl = 'Permission d\'effacer des tables.';
$strPrivDescExecute5 = 'Permission d\'exécuter des procédures stockées';
$strPrivDescExecute = 'Permission d\'exécuter des procédures. Non effectif dans cette version de MySQL.';
$strPrivDescFile = 'Permission d\'importer et d\'exporter des données à partir de / dans des fichiers.';
$strPrivDescGrant = 'Permission d\'ajouter des utilisateurs et des privilèges sans avoir besoin de recharger les privilèges.';
$strPrivDescIndex = 'Permission de créer et d\'effacer des index.';
$strPrivDescInsert = 'Permission d\'ajouter et de remplacer des données';
$strPrivDescLockTables = 'Permission de verrouiller des enregistrements dans le fil courant (unité d\'exécution).';
$strPrivDescMaxConnections = 'Limite du nombre de nouvelles connexions qu\'un utilisateur peut démarrer, par heure.';
$strPrivDescMaxQuestions = 'Limite du nombre de requêtes qu\'un utilisateur peut envoyer au serveur, par heure.';
$strPrivDescMaxUpdates = 'Limite du nombre de commandes changeant une table ou base de données, qu\'un utilisateur peut exécuter, par heure.';
$strPrivDescMaxUserConnections = 'Limite le nombre de connexions simultanées autorisées pour un utilisateur.';
$strPrivDescProcess3 = 'Permission de détruire les processus de d\'autres utilisateurs.';
$strPrivDescProcess4 = 'Permission de voir le texte complet des requêtes, dans la liste des processus.';
$strPrivDescReferences = 'Non effectif dans cette version de MySQL.';
$strPrivDescReload = 'Permission de recharger les réglages du serveur, et de vidanger la mémoire cache.';
$strPrivDescReplClient = 'Permission de demander où sont les maîtres et les esclaves (système de duplication).';
$strPrivDescReplSlave = 'Nécessaire pour les esclaves (système de duplication).';
$strPrivDescSelect = 'Permission de lire des données.';
$strPrivDescShowDb = 'Permission de voir la liste complète des noms de bases de données.';
$strPrivDescShowView = 'Permission d\'exécuter SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permission d\'arrêter le serveur MySQL.';
$strPrivDescSuper = 'Permission de se connecter, même si le nombre maximal de connexions permises a été atteint; ceci est requis pour la plupart des opérations de type administratif, par exemple les changements de variables globales ou la destruction de processus.';
$strPrivDescUpdate = 'Permission de changer des données.';
$strPrivDescUsage = 'Pas de privilèges';
$strPrivileges = 'Privilèges';
$strPrivilegesReloaded = 'Les privilèges ont été rechargés.';
$strProcedures = 'Procédures';
$strProcesses = 'Processus';
$strProcesslist = 'Liste des processus';
$strProfiling = 'Profilage';
$strProtocolVersion = 'Version du protocole';
$strPutColNames = 'Afficher les noms de champ en première ligne';

$strQBEDel = 'Effacer';
$strQBEIns = 'Ajouter';
$strQBE = 'Requête';
$strQueryCache = 'Cache des requêtes';
$strQueryFrame = 'Fenêtre SQL';
$strQueryOnDb = 'Requête SQL sur la base <b>%s</b>&nbsp;:';
$strQueryResultsOperations = 'Opérations sur les résultats de la requête';
$strQuerySQLHistory = 'Historique SQL';
$strQueryStatistics = '<b>Statistiques sur les requêtes</b>: Depuis son démarrage, %s requêtes ont été envoyées au serveur.';
$strQueryTime = 'Traitement en %01.4f sec.';
$strQueryType = 'Type de requête';
$strQueryWindowLock = 'Ne pas écraser cette requête depuis une autre fenêtre';

$strReadRequests = 'Requêtes de lecture';
$strReceived = 'Reçu';
$strRecommended = 'recommandé';
$strRecords = 'Enregistrements';
$strReferentialIntegrity = 'Vérifier l\'intégrité référentielle';
$strRefresh = 'Actualiser';
$strRelationalSchema = 'Schéma relationnel';
$strRelationDeleted = 'Relation supprimée';
$strRelationNotWorking = 'Certaines fonctionnalités ayant trait aux tables reliées sont désactivées. Pour une analyse du problème, cliquez %sici%s.';
$strRelationsForTable = 'RELATIONS POUR LA TABLE';
$strRelations = 'Relations';
$strRelationView = 'Gestion des relations';
$strReloadingThePrivileges = 'Chargement des privilèges en cours.';
$strReloadPrivileges = 'Recharger les privilèges';
$strReload = 'Recharger';
$strRemoveSelectedUsers = 'Effacer les utilisateurs sélectionnés.';
$strRenameDatabaseOK = 'La base de données %s a été renommée en %s';
$strRenameTable = '<b>Changer le nom</b> de la table pour';
$strRenameTableOK = 'La table %s se nomme maintenant %s';
$strRepairTable = 'Réparer la table';
$strReplaceNULLBy = 'Remplacer NULL par';
$strReplaceTable = 'Remplacer les données de la table avec le fichier';
$strReplication = 'Réplication';
$strReset = 'Réinitialiser les valeurs';
$strResourceLimits = 'Limites de ressources.';
$strRestartInsertion = 'Recommencer l\'insertion avec %s lignes';
$strReType = 'Entrer à nouveau';
$strRevokeAndDeleteDescr = 'Les utilisateurs auront le privilege "USAGE", jusqu\'à ce que les privilèges soient rechargés.';
$strRevokeAndDelete = 'Effacer tous les privilèges de ces utilisateurs, puis les effacer.';
$strRevokeMessage = 'Vous avez révoqué les privilèges pour %s';
$strRevoke = 'Révoquer';
$strRomanian = 'roumain';
$strRoutineReturnType = 'Type retourné';
$strRoutines = 'Procédures stockées';
$strRowLength = 'Longueur enr.';
$strRows = 'Enregistrements';
$strRowsFrom = 'enregistrement(s) à partir de l\'enregistrement n°';
$strRowSize = ' Taille enr. ';
$strRowsModeFlippedHorizontal = 'horizontal (en-têtes pivotés)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en mode %s et répéter les en-têtes à chaque groupe de %s';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Statistiques';
$strRunning = 'sur le serveur %s';
$strRunQuery = 'Exécuter la requête';
$strRunSQLQuery = 'Exécuter une ou des <b>requêtes</b> sur la base %s';
$strRunSQLQueryOnServer = 'Exécuter une ou des requêtes SQL sur le serveur %s';
$strRussian = 'russe';

$strSaveOnServer = 'Sauvegarder sur le serveur dans le répertoire %s';
$strSavePosition = 'Sauvegarder la position';
$strSave = 'Sauvegarder';
$strScaleFactorSmall = 'Veuillez augmenter l\'échelle car le schéma déborde la page';
$strSearchFormTitle = 'Effectuer une nouvelle recherche dans la base de données';
$strSearchInTables = 'Dans la(les) table(s) :';
$strSearchNeedle = 'Mot(s) ou Valeur à rechercher (passe-partout: "%") :';
$strSearchOption1 = 'au moins un mot';
$strSearchOption2 = 'tous les mots';
$strSearchOption3 = 'phrase exacte';
$strSearchOption4 = 'expression réguliére';
$strSearch = 'Rechercher';
$strSearchResultsFor = 'Résultats de la recherche de "<i>%s</i>" %s :';
$strSearchType = 'Type de recherche :';
$strSecretRequired = 'Vous devez ajouter dans le fichier de configuration une phrase de passe secrète (blowfish_secret).';
$strSelectADb = 'Choisissez une base de données';
$strSelectAll = 'Tout sélectionner';
$strSelectBinaryLog = 'Sélectionnez le log binaire à consulter';
$strSelectFields = 'Choisir les champs à afficher (au moins un)';
$strSelectForeignKey = 'Choisissez la clé étrangère';
$strSelectNumRows = 'dans la requête';
$strSelectReferencedKey = 'Sélectionnez la clé référencée';
$strSelectTables = 'Choisissez les tables';
$strSend = 'Transmettre';
$strSent = 'Envoyé';
$strServerChoice = 'Choix du serveur';
$strServerNotResponding = 'Le serveur ne répond pas.';
$strServer = 'Serveur';
$strServers = 'Serveurs';
$strServerStatusDelayedInserts = 'Insertions avec délais';
$strServerStatus = 'Informations sur le serveur';
$strServerStatusUptime = 'Ce serveur MySQL fonctionne depuis %s. Il a démarré le %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Statistiques sur le trafic</b>: Ce tableau indique le trafic réseau observé sur ce serveur MySQL depuis son démarrage.';
$strServerVars = 'Variables et réglages du serveur';
$strServerVersion = 'Version du serveur';
$strSessionStartupErrorGeneral = 'Erreur lors du démarrage de la session, veuillez vérifier les erreurs indiquées par PHP ou dans le fichier témoin du serveur web, et configurer PHP correctement.';
$strSessionValue = 'Valeur pour la session';
$strSetEnumVal = 'Les différentes valeurs des champs de type enum/set sont à spécifier sous la forme \'a\',\'b\',\'c\'...<br />Pour utiliser un caractère "\\" ou "\'" dans l\'une de ces valeurs, faites-le précéder du caractère d\'échappement "\\" (par exemple \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Afficher';
$strShowAll = 'Tout afficher';
$strShowColor = 'Couleurs';
$strShowDatadictAs = 'Orientation du dictionnaire:';
$strShowFullQueries = 'Afficher les requêtes complètes';
$strShowGrid = 'Grille';
$strShowHideLeftMenu = 'Montrer/cacher le menu de gauche';
$strShowingBookmark = 'Affichage du signet';
$strShowingPhp = 'Affichage du code PHP';
$strShowingRecords = 'Affichage des enregistrements';
$strShowingSQL = 'Affichage de la requête SQL';
$strShowOpenTables = 'Montrer les tables ouvertes';
$strShowPHPInfo = 'Afficher les informations relatives à PHP';
$strShowSlaveHosts = 'Montrer les serveurs esclaves';
$strShowSlaveStatus = 'Montrer l\'état des serveurs esclaves';
$strShowStatusBinlog_cache_disk_useDescr = 'Le nombre de transactions qui ont utilisé la cache temporaire du log binaire mais qui ont excédé la valeur de binlog_cache_size et ont utilisé un fichier temporaire pour stocker les énoncés de la transaction.';
$strShowStatusBinlog_cache_useDescr = 'Le nombre de transactions qui ont utilisé la cache temporaire du log binaire.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Le nombre de tables temporaires sur disque créées automatiquement par le serveur lors de l\'exécution d\'énoncés. Si la valeur du paramètre Created_tmp_disk_tables est trop grande, augmentez la valeur de tmp_table_size afin que les tables temporaires soient maintenues en mémoire au lieu d\'être sur disque.';
$strShowStatusCreated_tmp_filesDescr = 'Le nombre de fichiers temporaires créés par mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Le nombre de tables temporaires en mémoire créées automatiquement par le serveur lors de l\'exécution d\'énoncés.';
$strShowStatusDelayed_errorsDescr = 'Le nombre d\'enregistrements écrits avec INSERT DELAYED pour lesquels une erreur est survenue (probablement un doublon sur la clé).';
$strShowStatusDelayed_insert_threadsDescr = 'Le nombre de fils d\'exécution utilisés pour INSERT DELAYED. Un fil est utilisé pour chacune des tables sur lesquelles un INSERT DELAYED a lieu.';
$strShowStatusDelayed_writesDescr = 'Le nombre d\'enregistrements écrits via INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Le nombre de commandes FLUSH exécutées.';
$strShowStatusHandler_commitDescr = 'Le nombre de commandes COMMIT internes.';
$strShowStatusHandler_deleteDescr = 'Le nombre de fois qu\'un enregistrement a été supprimé d\'une table.';
$strShowStatusHandler_discoverDescr = 'Le serveur MySQL peut demander au moteur de données NDB Cluster s\'il connaît une table portant un certain nom. Ceci est appelé &quot;découverte&quot;. Ce paramètre indique le nombre de fois que des tables ont été découvertes.';
$strShowStatusHandler_read_firstDescr = 'Le nombre de fois que la première entrée a été lue depuis un index. Si c\'est élevé, ceci suggère que le serveur effectue beaucoup de parcours complets d\'un index; par exemple, SELECT coll FROM foo, en assumant que coll est une colonne indexée.';
$strShowStatusHandler_read_keyDescr = 'Le nombre de requêtes pour lire un enregistrement via une clé. Si élevé, c\'est une bonne indication que vos tables sont correctement indexées.';
$strShowStatusHandler_read_nextDescr = 'Le nombre de requêtes de lecture du prochain enregistrement, en ordre de clé. Ceci est augmenté si vous interrogez une colonne indexée avec un critère de fourchette ou si vous parcourez l\'index.';
$strShowStatusHandler_read_prevDescr = 'Le nombre de requêtes de lecture de l\'enregistrement précédent, en ordre de clé. Utilisé surtout pour optimiser ORDER BY ... DESC';
$strShowStatusHandler_read_rndDescr = 'Le nombre de requêtes de lecture d\'un enregistrement basée sur une position fixe. Ce nombre est élevé si vous faites de nombreuses requêtes qui nécessitent de trier les résultats. Vous avez probablement un grand nombre de requêtes qui demandent à MySQL de parcourir des tables en entier, ou vous avez des jointures qui n\'utilisent pas correctement les clés.';
$strShowStatusHandler_read_rnd_nextDescr = 'Le nombre de requêtes de lecture du prochaine enregistrement dans le fichier. Élevé si vous faites plusieurs parcours de tables. Ceci suggère que vos tables ne sont pas correctement indexées ou que vos requêtes ne sont pas écrites de façon à tirer parti des index que vous avez définis.';
$strShowStatusHandler_rollbackDescr = 'Le nombre d\'énoncés ROLLBACK internes.';
$strShowStatusHandler_updateDescr = 'Le nombre de requêtes de mise à jour d\'enregistrements.';
$strShowStatusHandler_writeDescr = 'Le nombre de requêtes d\'insertion d\'enregistrements.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Le nombre de pages contenant des données.';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Le nombre de pages contenant des données "dirty"';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Le nombre de pages de mémoire-tampon qui ont été effacées.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Le nombre de pages libres';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Le nombre de pages dans la réserve InnoDB qui sont actuellement en train d\'être lues ou écrites, ou qui ne peuvent être supprimées pour une autre raison.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Le nombre de pages occupées car elles ont été déallouées en raison de verrous sur les enregistrements. Cette valeur peut également être calculée comme suit: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Taille totale de la réserve, en pages.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Le nombre de lectures discontinues effectuées par InnoDB. Ceci survient lorsqu\'une requête doit balayer une large portion de table en ordre discontinu.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Le nombre de lectures séquentielles effectuées par InnoDB. Ceci survient quand InnoDB fait un parcours séquentiel intégral de la table.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Le nombre de requêtes de lectures "logiques" effectuées par InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Le nombre de lectures que InnoDB n\'a pu faire à partir de la réserve, menant à une lecture directe d\'une page.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalement, l\'écriture dans la réserve InnoDB se passe en arrière-plan. Cependant, s\'il est nécessaire de lire ou de créer une page et qu\'aucune page n\'est disponible, InnoDB doit attendre que des pages soient libérées. Ceci compte le nombre de fois qu\'une telle attente a été nécessaire. Si la taille de la réserve est adéquate, cette valeur devrait être petite.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Le nombre d\'écritures faites dans la réserve InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Le nombre d\'opérations fsync() faites jusqu\'à présent.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Le nombre d\'opérations fsync() actuellement en attente.';
$strShowStatusInnodb_data_pending_readsDescr = 'Le nombre actuel de lectures en attente.';
$strShowStatusInnodb_data_pending_writesDescr = 'Le nombre actuel d\'écritures en attente.';
$strShowStatusInnodb_data_readDescr = 'La quantité d\'octets lus jusqu\'à présent.';
$strShowStatusInnodb_data_readsDescr = 'Le nombre total de lectures de données.';
$strShowStatusInnodb_data_writesDescr = 'Le nombre total d\'écritures de données.';
$strShowStatusInnodb_data_writtenDescr = 'La quantité d\'octets écrits jusqu\'à présent.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Le nombre de pages utilisées pour des écritures "doublewrite".';
$strShowStatusInnodb_dblwr_writesDescr = 'Le nombre d\'écritures "doublewrite" effectuées.';
$strShowStatusInnodb_log_waitsDescr = 'Le nombre d\'attentes en raison d\'un tampon du fichier témoin trop petit; il fallait attendre qu\'il se libère avant de continuer.';
$strShowStatusInnodb_log_write_requestsDescr = 'Le nombre de requêtes d\'écritures sur le fichier témoin.';
$strShowStatusInnodb_log_writesDescr = 'Le nombre d\'écritures physiques au fichier témoin.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Le nombre d\'écritures fsync() sur le fichier témoin.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Le nombre de fsync() du fichier témoin en attente.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Le nombre d\'écritures du fichier témoin en attente.';
$strShowStatusInnodb_os_log_writtenDescr = 'Le nombre d\'octets écrits sur le fichier témoin.';
$strShowStatusInnodb_pages_createdDescr = 'Le nombre de pages créées.';
$strShowStatusInnodb_page_sizeDescr = 'La taille de page InnoDB telle que compilée (16 Ko par défaut). Plusieurs valeurs sont comptées par page; la taille de page leur permet d\'être facilement converties en octets.';
$strShowStatusInnodb_pages_readDescr = 'Le nombre de pages lues.';
$strShowStatusInnodb_pages_writtenDescr = 'Le nombre de pages écrites.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Le nombre de verrous d\'enregistrements actuellement en attente.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Le temps d\'attente moyen pour acquérir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_timeDescr = 'Le temps total utilisé pour acquérir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Le temps d\'attente maximum pour acquérir un verrou, en millisecondes.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Le nombre de fois qu\'on a dû attendre pour un verrou.';
$strShowStatusInnodb_rows_deletedDescr = 'Le nombre d\'enregistrements supprimés des tables InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Le nombre d\'enregistrements insérés dans des tables InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Le nombre d\'enregistrements lus dans des tables InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Le nombre d\'enregistrements mis à jour dans des tables InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Le nombre de blocs de clés dans la cache de clés qui ont été modifiés mais pas encore transférés sur disque.';
$strShowStatusKey_blocks_unusedDescr = 'Le nombre de blocs inutilisés dans la cache de clés. Vous pouvez utiliser cette valeur pour déterminer la proportion de la cache de clés qui est utilisée.';
$strShowStatusKey_blocks_usedDescr = 'Le nombre maximum de blocs qui ont été utilisés en même temps dans la cache de clés.';
$strShowStatusKey_read_requestsDescr = 'Le nombre de requêtes de lecture d\'un bloc de clés depuis la cache.';
$strShowStatusKey_readsDescr = 'Le nombre de lectures physiques d\'un bloc de clés depuis le disque. Si cette valeur est élevée, la taille de votre mémoire tampon de clés est trop petite. Le taux d\'échec de la cache peut être calculé par "Key reads/Key read requests".';
$strShowStatusKey_write_requestsDescr = 'Le nombre de requêtes en vue d\'écrire un bloc de clé dans la cache.';
$strShowStatusKey_writesDescr = 'Le nombre d\'écritures physiques d\'un bloc de clés vers le disque.';
$strShowStatusLast_query_costDescr = 'Le coût total de la dernière requête compilée, tel que calculé par l\'optimiseur de requêtes. Utile pour comparer le coût de diverses stratégies pour une même requête. La valeur de 0 indique qu\'aucune requête n\'a encore été compilée.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Le nombre d\'enregistrements en attente d\'écriture (INSERT DELAYED).';
$strShowStatusOpened_tablesDescr = 'Le nombre tables qui ont été ouvertes. Si trop élevé, votre cache de table est probablement trop petite.';
$strShowStatusOpen_filesDescr = 'Le nombre de fichiers qui sont ouverts.';
$strShowStatusOpen_streamsDescr = 'Le nombre de flux de données qui sont ouverts.';
$strShowStatusOpen_tablesDescr = 'Le nombre de tables qui sont ouvertes.';
$strShowStatusQcache_free_blocksDescr = 'Le nombre de blocs de mémoire libre dans la cache de requêtes.';
$strShowStatusQcache_free_memoryDescr = 'La quantité de mémoire libre dans la cache de requêtes.';
$strShowStatusQcache_hitsDescr = 'Le nombre de succès dans la cache.';
$strShowStatusQcache_insertsDescr = 'Le nombre de requêtes ajoutées à la cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'Le nombre de requêtes qui ont été retirées de la cache pour libérer de la mémoire afin de mettre en cache de nouvelles requêtes. Peut être utilisé afin de peaufiner la taille de la cache. La stratégie utilisée pour déterminer quelles requêtes seront retirées est LRU (least recently used).';
$strShowStatusQcache_not_cachedDescr = 'Le nombre de requêtes non en cache (impossible à placer en cache, ou non cachée en raison du paramètre query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Le nombre de requêtes enregistrées dans la cache.';
$strShowStatusQcache_total_blocksDescr = 'Le nombre total de blocs dans la cache de requêtes.';
$strShowStatusReset = 'Réinitialiser';
$strShowStatusRpl_statusDescr = 'L\'état de la réplication sans échec (pas encore implantée).';
$strShowStatusSelect_full_joinDescr = 'Le nombre de jointures qui n\'ont pas utilisé d\'index. Si cette valeur est supérieure à 0, vérifiez soigneusement les indexes de vos tables.';
$strShowStatusSelect_full_range_joinDescr = 'Le nombre de jointures qui ont utilisé une recherche par plage sur une table de référence.';
$strShowStatusSelect_range_checkDescr = 'Le nombre de jointures sans clés qui vérifient l\'utilisation de clé à chaque enregistrement. (Si ceci est supérieur à 0, vérifiez soigneusement les indexes de vos tables.)';
$strShowStatusSelect_rangeDescr = 'Le nombre de jointures qui ont utilisé des plages sur la première table. (Normalement non critique même si cette valeur est élevée.)';
$strShowStatusSelect_scanDescr = 'Le nombre de jointures qui ont nécessité le parcours complet de la première table.';
$strShowStatusSlave_open_temp_tablesDescr = 'Le nombre de tables temporaires actuellement ouvertes par le fil d\'exécution SQL de l\'esclave.';
$strShowStatusSlave_retried_transactionsDescr = 'Nombre de fois (depuis le démarrage) que le fil d\'exécution SQL de l\'esclave a envoyé à nouveau des transactions.';
$strShowStatusSlave_runningDescr = 'Ceci est à ON si ce serveur est un esclave connecté à un maître.';
$strShowStatusSlow_launch_threadsDescr = 'Le nombre de fils d\'exécution dont le temps de création a excédé slow_launch_time secondes.';
$strShowStatusSlow_queriesDescr = 'Le nombre de requêtes dont le temps d\'exécution a excédé long_query_time secondes.';
$strShowStatusSort_merge_passesDescr = 'Le nombre d\'opérations de fusion effectuées par l\'algorithme de tri. Si ce nombre est élevé, augmentez la valeur du paramètre sort_buffer_size.'; 
$strShowStatusSort_rangeDescr = 'Le nombre de tri effectués avec des plages.';
$strShowStatusSort_rowsDescr = 'Le nombre d\'enregistrements triés.';
$strShowStatusSort_scanDescr = 'Le nombre de tri effectués via un parcours de la table.';
$strShowStatusTable_locks_immediateDescr = 'Le nombre de fois qu\'un verrou de table a été acquis immédiatement.';
$strShowStatusTable_locks_waitedDescr = 'Le nombre de fois qu\'un verrou de table n\'a pu être acquis immédiatement, induisant un temps d\'attente. Si ce nombre est élevé et que vous éprouvez des problèmes de performance, commencez par optimiser vos requêtes, puis subdivisez vos tables ou encore utiliser la réplication.';
$strShowStatusThreads_cachedDescr = 'Le nombre de fils dans la cache des fils d\'exécution. Si cette valeur est en rouge, vous devriez augmenter la taille de cette cache.'; 
$strShowStatusThreads_connectedDescr = 'Le nombre de connexions ouvertes actuellement.';
$strShowStatusThreads_createdDescr = 'Le nombre de fils d\'exécution créés afin de gérer les connexions. Si ce nombre est trop grand, vous pourriez augmenter la valeur du paramètre thread_cache_size. (Normalement, ceci ne procure pas une amélioration perceptible de la performance si votre serveur gère correctement les fils d\'exécution.';
$strShowStatusThreads_runningDescr = 'Le nombre de fils d\'exécution non suspendus.';
$strShowTableDimension = 'Dimension des tables';
$strShowTables = 'Afficher les tables';
$strShowThisQuery = 'Réafficher la requête après exécution';
$strSimplifiedChinese = 'chinois simplifié';
$strSingly = '(à refaire après insertions/destructions)';
$strSize = 'Taille';
$strSkipQueries = 'Nombre d\'enregistrements (requêtes) à ignorer à partir du début';
$strSlovak = 'slovaque';
$strSlovenian = 'slovène';
$strSmallBigAll = 'Agrandir/réduire tout';
$strSnapToGrid = 'Accrocher à la grille';
$strSocketProblem = '(ou l\'interface de connexion ("socket") vers le serveur MySQL local n\'est pas correctement configurée)';
$strSortByKey = 'Trier sur l\'index';
$strSorting = 'Mécanisme de tri';
$strSort = 'Tri';
$strSpaceUsage = 'Espace utilisé';
$strSpanish = 'espagnol';
$strSplitWordsWithSpace = 'Séparer les mots par un espace (" ").';
$strSQLCompatibility = 'Mode de compatibilité SQL';
$strSQLExportType = 'Type d\'exportation';
$strSQLParserBugMessage = 'Il semble que vous ayiez trouvé une anomalie dans l\'analyseur syntaxique SQL. Veuillez examiner votre requête attentivement, et vérifier que vos apostrophes sont conformes. Il se pourrait aussi que vous ayiez chargé un fichier dont le contenu binaire n\'est pas entre apostrophes.  Si vous avez accès à MySQL via son interface de commande en mode ligne, vous pouvez y essayer votre requête. Le message d\'erreur présenté plus bas pourrait vous indiquer la source du problème. En dernier recours, veuillez trouver la plus courte requête possible qui cause le problème, et soumettre un rapport d\'anomalie en incluant la section à couper:';
$strSQLParserUserError = 'Il semble qu\'il y ait une erreur dans votre requête SQL. Le message ci-bas peut vous aider à en trouver la cause.';
$strSQLQuery = 'requête SQL';
$strSQLResult = 'Résultat de la requête SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificateur invalide';
$strSQPBugUnclosedQuote = 'Apostrophe non fermé';
$strSQPBugUnknownPunctuation = 'Ponctuation invalide';
$strStandInStructureForView = 'Doublure de structure pour la vue';
$strStatCheckTime = 'Dernière vérification';
$strStatCreateTime = 'Création';
$strStatement = 'Information';
$strStatisticsOverrun = 'Sur un serveur surchargé, la capacité des compteurs d\'octets peut être dépassée, auquel cas les statistiques rapportées par MySQL peuvent être inexactes.';
$strStatUpdateTime = 'Dernière modification';
$strStatus = 'État';
$strStorageEngine = 'Moteur de stockage';
$strStorageEngines = 'Moteurs de stockage';
$strStrucCSV = 'CSV';
$strStrucData = 'Structure et données';
$strStrucExcelCSV = 'CSV pour MS Excel';
$strStrucNativeExcel = 'Données MS Excel (format natif)';
$strStrucOnly = 'Structure seule';
$strStructPropose = 'Suggérer des optimisations quant à la structure de la table';
$strStructureForView = 'Structure de la vue';
$strStructure = 'Structure';
$strSubmit = 'Exécuter';
$strSuccess = 'Votre requête SQL a été exécutée avec succès';
$strSum = 'Somme';
$strSwedish = 'suédois';
$strSwitchToDatabase = 'Aller à la base de données copiée';
$strSwitchToTable = 'Aller à la table copiée';

$strTableAlreadyExists = 'La table %s existe déjà!';
$strTableComments = 'Commentaires sur la table';
$strTableEmpty = 'Le nom de la table est vide';
$strTableHasBeenDropped = 'La table %s a été effacée';
$strTableHasBeenEmptied = 'La table %s a été vidée';
$strTableHasBeenFlushed = 'La table %s a été rechargée';
$strTableIsEmpty = 'La table semble vide!';
$strTableMaintenance = '<b>Maintenance</b> de la table';
$strTableName = 'Nom de la table';
$strTableOfContents = 'Table des matières';
$strTableOptions = '<b>Options</b> pour cette table';
$strTables = '%s table(s)';
$strTableStructure = 'Structure de la table';
$strTable = 'Table';
$strTakeIt = 'utiliser celui-ci';
$strTblPrivileges = 'Privilèges spécifiques à une table';
$strTempData = 'Données temporaires';
$strTextAreaLength = 'Il est possible que ce champ<br />ne soit pas éditable<br />en raison de sa longueur';
$strThai = 'thaï';
$strThemeDefaultNotFound = 'Thème par défaut %s inexistant!';
$strThemeNoPreviewAvailable = 'Prévisualisation non disponible.';
$strThemeNotFound = 'Thème %s inexistant!';
$strThemeNoValidImgPath = 'Chemin des images inexistant pour le thème %s!';
$strThemePathNotFound = 'Chemin non trouvé pour le thème %s!';
$strTheme = 'Thème / Style';
$strThisHost = 'Ce serveur';
$strThreads = 'Fils d\'exécution';
$strThreadSuccessfullyKilled = 'Le processus %s a été éliminé.';
$strTime = 'Durée';
$strTimeoutInfo = 'L\'importation précédente a échoué en raison du temps; retransmettez et le traitement reprendra à la position %d.';
$strTimeoutNothingParsed = 'Cependant lors du dernier traitement, aucune section n\a été analysée; ceci signifie que phpMyAdmin ne pourra terminer cette importation, à moins que la limite de temps de PHP ne soit augmentée';
$strTimeoutPassed = 'La limite de temps a été atteinte; si vous voulez terminer l\'importation, soumettez à nouveau le même fichier et l\'importation continuera.';
$strToFromPage = 'de/vers la page';
$strToggleScratchboard = 'Éditeur visuel';
$strToggleSmallBig = 'Bascule agrandir/réduire';
$strToSelectRelation = 'Pour sélectionner un lien, cliquez :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'chinois traditionnel';
$strTraditionalSpanish = 'espagnol traditionnel';
$strTraffic = 'Trafic';
$strTransactionCoordinator = 'Coordonnateur des transactions';
$strTransformation_application_octetstream__download = 'Affiche un lien pour télécharger le contenu binaire d\'une colonne. La première option est le nom du fichier binaire. La seconde option est le nom de la colonne contenant le nom du fichier. Si vous utilisez la seconde option, veuillez laisser la première option vide.';
$strTransformation_application_octetstream__hex = 'Affiche une représentation hexadécimale des données. Le premier paramètre est optionnel et spécifie combien d\'espaces seront ajoutés.';
$strTransformation_image_jpeg__inline = 'Affiche une image timbre-poste cliquable; les options sont: largeur,hauteur en pixels (conserve le rapport original)';
$strTransformation_image_jpeg__link = 'Affiche un lien vers cette image';
$strTransformation_image_png__inline = 'Voir image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Affiche un champ TIME, TIMESTAMP, DATETIME ou un champ numérique contenant une valeur TIMESTAMP UNIX en tant que date formatée. La première option est le décalage (en heures) à ajouter (par défaut, 0). La seconde option sert à indiquer le format de date ou d\'heure. La troisième option détermine si vous voulez la date locale ("local") ou UTC ("utc"). Pour le format "local", le second paramètre utilise le format de la fonction PHP strftime() et pour le format "utc", il utilise la fonction gmdate().';
$strTransformation_text_plain__external = '(Linux seulement) Exécute un programme externe et lui envoit le contenu du champ via l\'entrée standard. Puis capture la sortie standard de ce programme externe. Le programme par défaut est tidy, pour un affichage embelli du code HTML.  Pour des raisons de sécurité, vous devez éditer le script libraries/transformations/text_plain__external.inc.php et y insérer les noms de programme externe possibles. La première option est le numéro du programme que vous voulez utiliser, la seconde option contient les paramètres pour ce programme. En troisième option, une valeur de 1 va convertir le résultat avec la fonction htmlspecialchars() (par défaut, 1). En option 4, une valeur de 1 va ajouter NOWRAP à la cellule affichée (par défaut, 1).';
$strTransformation_text_plain__formatted = 'Préserve le contenu original du champ, sans ajout de caractères d\'échappement.';
$strTransformation_text_plain__imagelink = 'Affiche une image et un lien, le champ contient le nom du fichier; en première option, un préfixe comme "http://domaine.com/", en seconde option, la largeur en pixels, en troisième option la hauteur en pixels.';
$strTransformation_text_plain__link = 'Affiche un lien, le champ contient le nom du fichier; en première option, un préfixe comme "http://domaine.com/", en seconde option, un titre pour le lien.';
$strTransformation_text_plain__sql = 'Affiche le texte comme une requête SQL avec embellissement de la syntaxe.';
$strTransformation_text_plain__substr = 'N\'affiche qu\'une partie du champ. En première option, la position de départ (par défaut, 0). En seconde option, le nombre de caractères à afficher (par défaut, le reste). En troisième option, des caractères à afficher à la fin du texte (par défaut: "...").';
$strTriggers = 'Déclencheurs';
$strTruncateQueries = 'Afficher les requêtes tronquées';
$strTurkish = 'turc';
$strType = 'Type';

$strUkrainian = 'ukrainien';
$strUncheckAll = 'Tout décocher';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'inconnu';
$strUnselectAll = 'Tout désélectionner';
$strUnsupportedCompressionDetected = 'Vous avez tenté d\'importer un fichier dont le mode de compression (%s) n\'est pas supporté par votre configuration PHP ou est désactivé dans celle-ci.';
$strUpdatePrivMessage = 'Vous avez modifié les privilèges pour %s.';
$strUpdateProfileMessage = 'Le profil a été modifié.';
$strUpdateQuery = 'Mise-à-jour de la requête';
$strUpdComTab = 'La documentation indique comment mettre à jour votre table Column_comments';
$strUpgrade = 'Vous devriez utiliser %s en version %s ou plus récente.';
$strUploadErrorCantWrite = 'Erreur lors de l\'écriture du fichier sur disque.';
$strUploadErrorExtension = 'Téléchargement arrêté par l\'extension.';
$strUploadErrorFormSize = 'La taille du fichier téléchargé dépasse la limite permise par la directive MAX_FILE_SIZE présente dans le formulaire HTML.';
$strUploadErrorIniSize = 'La taille du fichier téléchargé dépasse la limite permise par la directive upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'Répertoire temporaire manquant.';
$strUploadErrorPartial = 'Le fichier n\'a été que partiellement téléchargé.';
$strUploadErrorUnknown = 'Erreur inconnue durant le téléchargement.';
$strUploadLimit = 'Vous avez probablement tenté de télécharger un fichier trop volumineux. Veuillez vous référer à la %sdocumentation%s pour des façons de contourner cette limite.';
$strUploadsNotAllowed = 'Les téléchargements vers ce serveur ne sont pas permis.';
$strUsage = 'Espace';
$strUseBackquotes = 'Protéger les noms des tables et des champs par des&nbsp;"`"';
$strUsedPhpExtensions = 'Extensions PHP utilisées';
$strUseHostTable = 'Utiliser la table Host';
$strUserAlreadyExists = 'L\'utilisateur %s existe déjà!';
$strUserEmpty = 'Le nom d\'utilisateur est vide';
$strUserName = 'Nom d\'utilisateur';
$strUserNotFound = 'L\'utilisateur choisi n\'existe pas dans la table des privilèges';
$strUserOverview = 'Vue d\'ensemble des utilisateurs';
$strUsersDeleted = 'Les utilisateurs sélectionnés ont été effacés.';
$strUsersHavingAccessToDb = 'Utilisateurs ayant accès à &quot;%s&quot;';
$strUser = 'Utilisateur';
$strUseTabKey = 'Utilisez la tabulation pour aller d\'une valeur à l\'autre, ou CTRL+flèches pour aller n\'importe où';
$strUseTables = 'Utiliser les tables';
$strUseTextField = 'Entrez une valeur';
$strUseThisValue = 'Utiliser cette valeur';

$strValidateSQL = 'Valider SQL';
$strValidatorError = 'Le validateur SQL n\'a pas pu être initialisé. Vérifiez que les extensions PHP nécessaires ont bien été installées (voir la %sdocumentation%s).';
$strValue = 'Valeur';
$strVar = 'Variable';
$strVersionInformation = 'Information de version';
$strViewDump = '<b>Afficher le schéma</b> de la table';
$strViewDumpDatabases = 'Schéma et/ou contenu des bases de données';
$strViewDumpDB = 'Schéma et données de la base ';
$strViewHasBeenDropped = 'La vue %s a été supprimée';
$strViewMaxExactCount = 'Cette vue comporte plus de %d enregistrements. Veuillez vous référer à la %sdocumentation%s.';
$strViewName = 'Nom de la vue';
$strView = 'Vue';

$strWebServerUploadDirectoryError = 'Le répertoire de transfert est inaccessible';
$strWebServerUploadDirectory = 'répertoire de transfert du serveur Web';
$strWelcome = 'Bienvenue à %s ';
$strWestEuropean = 'Europe de l\'ouest';
$strWildcard = 'passepartout';
$strWindowNotFound = 'La fenêtre principale n\'a pu être mise à jour. Il est possible que vous l\'ayiez fermée, ou encore que votre navigateur bloque les mises à jour inter-fenêtres pour des raisons de sécurité.';
$strWithChecked = 'Pour la sélection :';
$strWriteRequests = 'Requêtes d\'écriture';
$strWrongUser = 'Erreur d\'utilisateur/mot de passe. Accès refusé';

$strXML = 'XML';

$strYes = 'Oui';

$strZeroRemovesTheLimit = 'Note: Une valeur de 0 (zero) enlève la limite.';
$strZip = '"zippé"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
