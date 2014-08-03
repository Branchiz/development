<?php
/* $Id: spanish-iso-8859-1.inc.php 11212 2008-04-23 16:28:20Z lem9 $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// Atajos para Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$mysql_5_0_doc_lang = 'es';

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
// Ver http://www.php.net/manual/es/function.strftime.php para definir
// la variable siguiente
$datefmt = '%d-%m-%Y a las %H:%M:%S';
$timespanfmt = '%s d�as, %s horas, %s minutos y %s segundos';

$strAbortedClients = 'Abortado';
$strAccessDenied = 'Acceso denegado ';
$strAccessDeniedCreateConfig = 'La raz�n m�s probable es que usted no cre� un archivo de configuraci�n. Utilice %1$ssetup script%2$s para crear una.';
$strAccessDeniedExplanation = 'phpMyAdmin intent� conectarse con el servidor MySQL, y el servidor rechaz� esta conexi�n. Deber� revisar el host, nombre de usuario y contrase�a en config.inc.php y asegurarse que corresponden con la informaci�n provista por el administrador del servidor MySQL.';
$strAction = 'Acci�n';
$strAddAutoIncrement = 'A�adir el valor AUTO_INCREMENT';
$strAddClause = 'A�ada %s';
$strAddConstraints = 'A�adir restricciones';
$strAddDeleteColumn = 'A�adir/borrar columna de criterio';
$strAddDeleteRow = 'A�adir/borrar fila de criterio';
$strAddFields = 'A�adir %s campo(s)';
$strAddHeaderComment = 'A�adir su propio comentario en el encabezado (\\n segmenta las oraciones)';
$strAddIntoComments = 'A�adir en los comentarios';
$strAddNewField = 'Insertar nuevo campo';
$strAddPrivilegesOnDb = 'A�adir privilegios a esta base de datos';
$strAddPrivilegesOnTbl = 'A�adir privilegios a esta tabla';
$strAddSearchConditions = 'Insertar las condiciones de b�squeda (cuerpo de la cl�usula "where"):';
$strAddToIndex = 'A�adir al �ndice &nbsp;%s&nbsp;columna(s)';
$strAddUser = 'Agregar un nuevo usuario';
$strAddUserMessage = 'Ha agregado un nuevo usuario.';
$strAdministration = 'Administraci�n';
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Despu�s de %s';
$strAfterInsertBack = 'Volver';
$strAfterInsertNewInsert = 'Insertar un nuevo registro';
$strAfterInsertNext = 'Editar la siguiente fila';
$strAfterInsertSame = 'Volver a esta p�gina';
$strAllowInterrupt = 'Permita la interrupci�n de la importaci�n en el caso de que el script detecte que se ha acercado a su l�mite de tiempo. Esto podr�a ser un buen m�todo para importar archivos grandes; sin embargo, puede da�ar las transacciones.';
$strAllTableSameWidth = '�Mostrar todas las tablas que tienen el mismo ancho?';
$strAll = 'Todos/as';
$strAlterOrderBy = 'Modificar el ORDER BY de la tabla';
$strAnalyzeTable = 'Analizar la tabla';
$strAndThen = 'y luego';
$strAnd = 'y luego';
$strAngularLinks = 'Enlaces angulares';
$strAnIndex = 'Se a�adi� un �ndice en %s';
$strAny = 'cualquiera';
$strAnyHost = 'Cualquier servidor';
$strAnyUser = 'Cualquier usuario';
$strApproximateCount = 'Podr�a ser aproximado.  L�ase la FAQ 3.11';
$strAPrimaryKey = 'Se a�adi� una clave primaria en %s';
$strArabic = '�rabe';
$strArmenian = 'Armenio';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla';
$strAtEndOfTable = 'Al final de la tabla';
$strAttr = 'Atributos';
$strAutomaticLayout = 'Dise�o autom�tico';

$strBack = 'Volver';
$strBaltic = 'B�ltico';
$strBeginCut = 'INICIO DEL CORTE';
$strBeginRaw = 'INICIO DEL VOLCADO';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - �no editar! ';
$strBinaryLog = 'Log binario';
$strBinLogEventType = 'Tipo de evento';
$strBinLogInfo = 'Informaci�n';
$strBinLogName = 'Nombre con el cual se registr�';
$strBinLogOriginalPosition = 'Posici�n original';
$strBinLogPosition = 'Posici�n';
$strBinLogServerId = 'ID del servidor';
$strBookmarkAllUsers = 'Permitir que todo usuario pueda acceder a este favorito';
$strBookmarkCreated = 'El favorito %s fue creado';
$strBookmarkDeleted = 'El favorito ha sido borrado.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta guardada en favoritos';
$strBookmarkReplace = 'Reemplazar el favorito existente que tenga el mismo nombre';
$strBookmarkThis = 'Guardar esta consulta en favoritos';
$strBookmarkView = 'Solamente ver';
$strBrowseDistinctValues = 'Navegar los valores distintivos';
$strBrowse = 'Examinar';
$strBrowseForeignValues = 'Mostrar los valores extranjeros';
$strBufferPoolActivity = 'Actividad de la memoria (b�fer) de tr�nsito com�n';
$strBufferPool = 'Total de memoria del b�fer'; 
$strBufferPoolUsage = 'Total de memoria del b�fer consumido'; 
$strBufferReadMissesInPercent = 'Leer los fallos en %';
$strBufferReadMisses = 'Leer los fallos';
$strBufferWriteWaits = 'Escribir las esperas';
$strBufferWriteWaitsInPercent = 'Escribir las esperas en %';
$strBulgarian = 'B�lgaro';
$strBusyPages = 'P�ginas activas'; 
$strBzError = 'Si desea usar las opciones de compresi�n Bz2, deber� actualizar su php a una versi�n m�s reciente. phpMyAdmin no fue capaz de comprimir el dump debido a que est� da�ada o inaccesible la extensi�n Bz2 en esta versi�n de php. Le recomendamos que cambie el par�metro <code>$cfg[\'BZipDump\']</code> en su archivo de configuraci�n phpMyAdmin a <code>FALSE</code>. Lea el reporte de "bugs" de php %s para mayor informaci�n.';
$strBzip = '"Comprimido con bzip"';

$strCalendar = 'Calendario';
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'No se cargaron los plugins de exportaci�n.  Por favor, �revise su instalaci�n!';
$strCanNotLoadImportPlugins = 'No se pudieron cargar los plugins de importaci�n, por favor revise su instalaci�n';
$strCannotLogin = 'El servidor MySQL no autoriz� su ingreso';
$strCantLoad = 'no se pudo cargar la extensi�n %s,<br />por favor revise su configuraci�n de PHP.';
$strCantLoadRecodeIconv = 'No se puede cargar iconv o recodificar una extensi�n necesaria para la conversi�n de juegos de caracteres, configure php para permitir el uso de estas extensiones o desactive la conversi�n de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No puede cambiar el nombre del �ndice a �PRIMARY!';
$strCantUseRecodeIconv = 'No se puede utilizar iconv ni libiconv ni la funci�n recode_string mientras se carga la extensi�n de informes. Comprueba la configuraci�n de php.';
$strCardinality = 'Cardinalidad';
$strCaseInsensitive = 'independiente de may�sculas y min�sculas';
$strCaseSensitive = 'dependiente de may�sculas y min�sculas';
$strCentralEuropean = 'Europeo central';
$strChange = 'Cambiar';
$strChangeCopyModeCopy = '...mantener el anterior.';
$strChangeCopyMode = 'Crear un nuevo usuario con los mismos privilegios y...';
$strChangeCopyModeDeleteAndReload = ' ...borrar el viejo de las tablas de usuario y luego volver a cargar los privilegios.';
$strChangeCopyModeJustDelete = ' ...borrar el viejo de las tablas de usuario.';
$strChangeCopyModeRevoke = ' ...revocar todos los privilegios activos del viejo y eliminarlo despu�s.';
$strChangeCopyUser = 'Cambiar la informaci�n de la cuenta / Copiar el usuario';
$strChangeDisplay = 'Elegir el campo a mostrar';
$strChangePassword = 'Cambio de contrase�a';
$strCharset = 'Juego de caracteres';
$strCharsetOfFile = 'Juego de caracteres del archivo:'; 
$strCharsetsAndCollations = 'Juego de caracteres y sus cotejamientos'; 
$strCharsets = 'Juegos de caracteres'; 
$strCheckAll = 'Marcar todos/as';
$strCheckOverhead = 'Marcar las tablas con residuo a depurar';
$strCheckPrivsLong = 'Revisar los privilegios para la base de datos &quot;%s&quot;.';
$strCheckPrivs = 'Revisar los privilegios';
$strCheckTable = 'Revisar la tabla';
$strChoosePage = 'Elegir la p�gina a editar';
$strColComFeat = 'Mostrando los comentarios de la columna';
$strCollation = 'Cotejamiento';
$strColumnNames = 'Nombre de las columnas';
$strColumnPrivileges = 'Privilegios espec�ficos para la columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCommentsForTable = 'COMENTARIOS PARA LA TABLA';
$strCompatibleHashing = 'Compatible con MySQL&nbsp;4.0';
$strCompleteInserts = 'Completar los INSERTS';
$strCompression = 'Compresi�n';
$strCompressionWillBeDetected = 'La compresi�n escogida para el archivo a importar se detectar� autom�ticamente de: %s';
$strConfigDefaultFileError = 'No fue posible cargar la configuraci�n predeterminada desde: "%1$s"';
$strConfigFileError = '�phpMyAdmin no puede leer el fichero de configuraci�n!<br />Esto puede suceder si php encuentra un error sint�ctico en �l o bien php no puede encontrar el fichero.<br />Intente acceder al fichero de configuraci�n directamente mediante el siguiente enlace y compruebe el(los) mensaje(s) de error que reciba. En muchas ocasiones falta una coma o punto y coma en alg�n sitio.<br />Si recibe una p�gina en blanco, todo est� correcto.';
$strConfigureTableCoord = 'Configure las coordenadas para la tabla %s';
$strConnectionError = 'No se estableci� la conexi�n: los par�metros est�n incorrectos.';
$strConnections = 'Conexiones';
$strConstraintsForDumped = 'Filtros para las tablas descargadas (dump)';
$strConstraintsForTable = 'Filtros para la tabla';
$strControluserFailed = 'La conexi�n para controluser, como est� definida en su configuraci�n, fracas�.';
$strCookiesRequired = 'Las "cookies" deben estar habilitadas.';
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'La base de datos %s ha sido copiada a %s';
$strCopyTable = 'Copiar la tabla a (base de datos<b>.</b>tabla):';
$strCopyTableOK = 'La tabla %s se copi� a %s.';
$strCopyTableSameNames = '�No es posible copiar la tabla a la misma!';
$strCouldNotKill = 'phpMyAdmin no fue capaz de destruir el proceso %s. Probablemente ya ha sido cerrado.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'CREAR BASE DE DATOS antes de copiar';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;columna(s)';
$strCreateIndexTopic = 'Crear un nuevo �ndice';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en la base de datos %s';
$strCreatePage = 'Crear una nueva p�gina';
$strCreatePdfFeat = 'Creaci�n de los PDF';
$strCreateRelation = 'Crear relaci�n';
$strCreateTable  = 'Crear tabla';
$strCreateUserDatabase = 'Base de datos para el usuario';
$strCreateUserDatabaseName = 'Crear base de datos con el mismo nombre y otorgue todos los privilegios';
$strCreateUserDatabaseNone = 'Ninguna';
$strCreateUserDatabaseWildcard = 'Otorgue todos los privilegios al nombre que contiene comod�n (username\_%)';
$strCreationDates = 'Fechas de creaci�n/actualizaci�n/revisi�n';
$strCriteria = 'Criterio';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Cir�lico';
$strCzech = 'Checo';
$strCzechSlovak = 'Checo-Eslovaco';

$strDanish = 'Dan�s';
$strDatabase = 'Base de datos';
$strDatabaseEmpty = '�El nombre de la base de datos est� vac�o!';
$strDatabaseExportOptions = 'Opciones de exportaci�n de la base de datos';
$strDatabaseHasBeenDropped = 'La base de datos %s ha sido eliminada.';
$strDatabases = 'Bases de datos';
$strDatabasesDropped = '%s bases de datos han sido eliminadas exitosamente.';
$strDatabasesStatsDisable = 'Desactivar las estad�sticas';
$strDatabasesStatsEnable = 'Activar las estad�sticas';
$strDatabasesStats = 'Estad�sticas de la base';
$strDatabasesStatsHeavyTraffic = 'Nota: Activar aqu� las estad�sticas de la base de datos podr�a causar tr�fico pesado entre el servidor web y el servidor MySQL.';
$strData = 'Datos';
$strDataDict = 'Diccionario de datos';
$strDataOnly = 'Solamente datos';
$strDataPages = 'P�ginas que contienen datos'; 
$strDBComment = 'Comentario de la base de datos: ';
$strDBCopy = 'Copiar la base de datos a';
$strDbIsEmpty = 'La base de datos, �parece estar vac�a!';
$strDbPrivileges = 'Privilegios espec�ficos para la base de datos';
$strDBRename = 'Cambiar el nombre de la base de datos a';
$strDbSpecific = 'espec�fico para la base de datos';
$strDefaultEngine = '%s es el motor de almacenamiento predeterminado en este servidor MySQL.';
$strDefault = 'Predeterminado';
$strDefaultValueHelp = 'Para valores predeterminados, por favor ingrese solamente un valor, sin caracteres de escape \"\\\" ni comillas, usando este formato: a';
$strDefragment = 'Defragmentar la tabla';
$strDelayedInserts = 'Usar "inserts" con retraso';
$strDeleteAndFlush = 'Borrar a los usuarios y luego volver a cargar los privilegios.';
$strDeleteAndFlushDescr = 'Este es el modo m�s limpio, pero volver a cargar los privilegios puede tomar tiempo.';
$strDelete = 'Borrar';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas borradas: ';
$strDeleteNoUsersSelected = '�No se han seleccionado usuarios para eliminar!';
$strDeleteRelation = 'Eliminar la relaci�n';
$strDeleting = 'Borrando %s';
$strDelimiter = 'Delimitador';
$strDelOld = 'La p�gina actual tiene referencias a tablas que ya no existen.  �Desea eliminar esas referencias?';
$strDescending = 'Descendente';
$strDescription = 'Descripci�n';
$strDesigner = 'Dise�ador';
$strDesignerHelpDisplayField = 'El campo Display se halla en color rosado. Para activar o desactivar un campo como un campo Display, d� clic en el �cono "Seleccione el campo a mostrar", luego d� clic en el nombre apropiado del campo.';
$strDictionary = 'diccionario';
$strDirectLinks = 'Enlaces directos';
$strDirtyPages = 'P�ginas que requieren ser depuradas'; 
$strDisabled = 'Deshabilitado';
$strDisableForeignChecks = 'Deshabilitar la revisi�n de las llaves extranjeras (foreign keys)';
$strDisplayFeat = 'Mostrar las opciones';  //Features = �opciones, componentes?
$strDisplayOrder = 'Mostrar en este orden:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Hacer una consulta (comod�n: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentaci�n';
$strDoYouReally = 'Realmente desea ';
$strDropDatabaseStrongWarning = '�Est� a punto de DESTRUIR una base de datos completa!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Eliminar las bases de datos que tienen los mismos nombres que los usuarios.';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDumpSaved = 'Su archivo (MySQL dump) ha sido guardado con el nombre %s.';
$strDumpXRows = 'Volcar %s filas empezando por la fila %s.';
$strDynamic = 'din�mico/a';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar las p�ginas PDF';
$strEditPrivileges = 'Editar los privilegios';
$strEffective = 'Efectivo/a';
$strEmptyResultSet = 'MySQL ha devuelto un valor vac�o (i.e., cero columnas).';
$strEmpty = 'Vaciar';
$strEnabled = 'Habilitado';
$strEncloseInTransaction = 'Incluir lo exportado en una transacci�n';
$strEndCut = 'FIN DEL CORTE';
$strEnd = 'Fin';
$strEndRaw = 'FIN DEL VOLCADO';
$strEngineAvailable = '%s est� disponible en este servidor MySQL.';
$strEngineDisabled = '%s ha sido deshabilitado para este motor de almacenamiento.';
$strEngines = 'Motores';
$strEngineUnsupported = 'Este servidor MySQL no es compatible con el motor de almacenamiento %s.'; 
$strEnglish = 'Ingl�s';
$strEnglishPrivileges = ' Nota: Los nombres de los privilegios de MySQL est�n expresados en ingl�s ';
$strError = 'Error';
$strErrorInZipFile = 'Error en el archivo ZIP:';
$strErrorRelationAdded = 'Error: no se a�adi� la relaci�n.';
$strErrorRelationExists = 'Error: la relaci�n ya existe.';
$strErrorRenamingTable = 'Error al cambiar el nombre de la tabla %1$s a %2$s';
$strErrorSaveTable = 'Error guardando las coordenadas para el Dise�ador.';
$strEscapeWildcards = 'Los comodines _ y % deben acompa�arse de \ para usarlos de manera literal';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonio';
$strEvent = 'Evento';
$strExcelEdition = 'Edici�n Excel';
$strExecuteBookmarked = 'Ejecute la consulta marcada previamente';
$strExplain = 'Explicar el SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exporte/Importe a escala';
$strExportMustBeFile = 'El formato de exportaci�n seleccionado �debe grabarse en el archivo!';
$strExtendedInserts = 'INSERTs extendidos';
$strExtra = 'Extra';

$strFailedAttempts = 'Intentos fallidos';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Se elimin� el campo %s';
$strFieldInsertFromFileTempDirNotExists = 'Se detect� un error al trasladar el archivo cargado, ver FAQ 1.11';
$strFields = 'Campos';
$strFieldsEnclosedBy = 'Campos encerrados por';
$strFieldsEscapedBy = 'Caracter de escape';
$strFieldsTerminatedBy = 'Campos terminados en';
$strFileAlreadyExists = 'El archivo %s ya existe en el servidor, cambie el nombre del archivo o revise la opci�n de sobreescritura.';
$strFileCouldNotBeRead = 'No fue posible leer el archivo';
$strFileNameTemplateDescriptionDatabase = 'nombre de la base de datos';
$strFileNameTemplateDescription = 'Este valor es interpretado usando %1$sstrftime%2$s; as�, usted puede usar cadenas de caracteres para formatear el tiempo. De manera adicional, suceder�n las siguientes transformaciones: %3$s. El texto restante se mantendr� como est�.';
$strFileNameTemplateDescriptionServer = 'nombre del servidor';
$strFileNameTemplateDescriptionTable = 'nombre de la tabla';
$strFileNameTemplate = 'Plantilla del nombre del archivo';
$strFileNameTemplateRemember = 'recordar la plantilla';
$strFiles = 'Archivos';
$strFileToImport = 'Archivo a importar';
$strFixed = 'fijo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obtiene los privilegios de los usuarios \'directamente de las tablas de privilegios MySQL\'. El contenido de estas tablas puede diferir de los privilegios que usa el servidor si es que se han realizado cambios manuales en �l. En este caso, nuevamente deber� %scargar la p�gina de privilegios%s antes de continuar.';
$strFlushQueryCache = 'Vaciar el cache de consultas';
$strFlushTables = 'Vaciar el cache de todas las tablas';
$strFlushTable = 'Vaciar el cach� de la tabla ("FLUSH")';
$strFontSize = 'Tama�o del font';
$strForeignKeyError = 'Error creando llaves extranjeras (foreign keys).  Revise los tipos de datos';
$strFormat = 'Formato';
$strFormEmpty = '�Falta un valor en el formulario!';
$strFreePages = 'P�ginas libres'; 
$strFullText = 'Textos completos';
$strFunction = 'Funci�n';
$strFunctions = 'Funciones';

$strGenBy = 'Generado por';
$strGeneralRelationFeat = 'Opciones de relaci�n general';  //Features = �opciones, componentes?
$strGenerate = 'Generar';
$strGeneratePassword = 'Generar la contrase�a';
$strGenTime = 'Tiempo de generaci�n';
$strGeorgian = 'Georgiano';
$strGerman = 'Alem�n';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegios globales';
$strGlobalValue = 'Valor global';
$strGo = 'Continuar';
$strGrantOption = 'Conceder';
$strGreek = 'Griego';
$strGzip = '"Comprimido con gzip"';

$strHandler = 'Gestor';
$strHasBeenAltered = 'fue modificada.';
$strHasBeenCreated = 'se cre�.';
$strHaveToShow = 'Debe elegir al menos una columna para mostrar';
$strHebrew = 'Hebreo';
$strHelp = 'Ayuda';
$strHexForBLOB = 'Use hexadecimal para BLOB';
$strHide         = 'Ocultar';
$strHideShowAll = 'Ocultar/mostrar todo';
$strHideShowNoRelation = 'Ocultar/mostrar Tablas que no tengan relaci�n';
$strHomepageOfficial = 'P�gina oficial de phpMyAdmin';
$strHome = 'P�gina de inicio';
$strHostEmpty = '��El nombre del servidor est� vac�o!!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'H�ngaro';

$strIcelandic = 'Island�s';
$strId = 'Identificaci�n';
$strIdxFulltext = 'Texto completo';
$strIEUnsupported = 'Internet Explorer no reconoce esa funci�n.';
$strIgnoreDuplicates = 'Ignore las filas duplicadas';
$strIgnore = 'Ignorar';
$strIgnoreInserts = 'Usar la opci�n ignore inserts';
$strImportExportCoords = 'Importar/Exportar coordenadas para el esquema PDF';
$strImportFiles = 'Importar archivos';
$strImportFormat = 'Formato del archivo importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'La importaci�n se ejecut� exitosamente, se ejecutaron %d consultas.';
$strIndexes = '�ndices';
$strIndexesSeemEqual = 'Los siguientes �ndices parecen ser id�nticos y uno de ellos debe ser removido:';
$strIndexHasBeenDropped = 'El �ndice %s ha sido eliminado';
$strIndex = '�ndice';
$strIndexName = 'Nombre del �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexWarningTable = 'Problemas con los �ndices de la tabla `%s`';
$strInnoDBAutoextendIncrementDesc = 'El tama�o a incrementar para que se extienda el ancho de una tabla capaz de autoextenderse cuando se llena.'; 
$strInnoDBAutoextendIncrement = 'Incremente el valor AUTOEXTEND'; 
$strInnoDBBufferPoolSizeDesc = 'El tama�o de la memoria intermedia (b�fer) usado por InnoDB para almacenar, en el cache, los datos e �ndices de sus tablas.';
$strInnoDBBufferPoolSize = 'Tama�o de la memoria (b�fer) de tr�nsito com�n';
$strInnoDBDataFilePath = 'Archivos de datos'; 
$strInnoDBDataHomeDirDesc = 'La parte constante de la ruta del directorio para todos los archivos de datos InnoDB.'; 
$strInnoDBDataHomeDir = 'Directorio ra�z de los datos';
$strInnoDBPages = 'p�ginas';
$strInnoDBRelationAdded = 'Se a�adi� la relaci�n InnoDB';
$strInnodbStat = 'Estado del InnoDB';
$strInsecureMySQL = 'Su archivo de configuraci�n contiene par�metros (root sin contrase�a) que corresponden a la cuenta privilegiada predeterminada de MySQL. Su servidor de MySQL est� usando estos valores, lo que constituye una vulnerabilidad.  Se le recomienda corregir esta brecha de seguridad.  Por ejemplo, desde la p�gina de inicio de phpMyAdmin seleccione Privilegios y agregue la contrase�a a root@localhost.  Deber� escribir la misma contrase�a en config.inc.php de phpMyAdmin';
$strInsertAsNewRow = 'Insertar como una nueva fila';
$strInsertedRowId = 'Se insert� la ID de la fila:';
$strInsertedRows = 'Filas insertadas:';
$strInsert = 'Insertar';
$strInternalNotNecessary = '* No es necesaria una relaci�n interna cuando tambi�n existe en InnoDB.';
$strInternalRelationAdded = 'Se a�adi� la relaci�n interna';
$strInternalRelations = 'Relaciones internas';
$strInUse = 'en uso';
$strInvalidAuthMethod = 'El m�todo de autenticaci�n no es v�lido en la configuraci�n actual:';
$strInvalidColumnCount = 'El n�mero de columnas debe ser superior a cero.';
$strInvalidColumn = '�Las columnas especificadas (%s) no son v�lidas!';
$strInvalidCSVFieldCount = 'El n�mero de campos de los datos CSV en la l�nea %d no es v�lido.';
$strInvalidCSVFormat = 'El formato de los datos CSV en la l�nea %d no es v�lido.';
$strInvalidCSVParameter = 'Par�metro no v�lido para importar CSV: %s';
$strInvalidDatabase = 'La base de datos no es v�lida';
$strInvalidFieldAddCount = 'Debe a�adir al menos un campo.';
$strInvalidFieldCount = 'La tabla debe tener al menos un campo.';
$strInvalidLDIImport = '�Este plugin no tiene soporte para importaciones comprimidas!';
$strInvalidRowNumber = '%d no es un n�mero de fila v�lido.';
$strInvalidServerHostname = 'El nombre del host no es v�lido para el servidor %1$s. Por favor, revise su configuraci�n.';
$strInvalidServerIndex = 'No es v�lido el �ndice del servidor: "%s"';
$strInvalidTableName = 'El nombre de la tabla no es v�lido';

$strJapanese = 'Japon�s';
$strJoins = 'V�nculos (Joins)';
$strJumpToDB = 'Saltar a la base de datos &quot;%s&quot;.';
$strJustDeleteDescr = 'Los usuarios &quot;borrados&quot; a�n podr�n acceder al servidor de manera usual hasta que los privilegios se hayan vuelto a cargar.';
$strJustDelete = 'Solamente borrar a los usuarios de la tabla de privilegios.';

$strKeepPass = 'No cambiar la contrase�a';
$strKeyCache = 'Cache principal';
$strKeyname = 'Nombre de la clave';
$strKill = 'Matar el proceso';
$strKnownExternalBug = 'La funcionalidad %s est� afectada por un fallo conocido, vea %s';
$strKorean = 'Coreano';

$strLandscape = 'Orientaci�n horizontal';
$strLanguage = 'Idioma';
$strLanguageUnknown = 'Idioma desconocido: %1$s.';
$strLatchedPages = 'P�ginas vinculadas';
$strLatexCaption = 'Subtitulado de la tabla';
$strLatexContent = 'Contenido de la tabla __TABLE__';
$strLatexContinuedCaption = 'Continuaci�n del subtitulado de la tabla';
$strLatexContinued = '(contin�a)';
$strLatexIncludeCaption = 'Incluir el subtitulado de la tabla';
$strLatexLabel = 'Clave de la etiqueta';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estructura de la tabla __TABLE__';
$strLatvian = 'Let�n';
$strLDI = 'CSV usando LOAD DATA';
$strLDILocal = 'Use la palabra clave LOCAL';
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por p�gina';
$strLinesTerminatedBy = 'L�neas terminadas en';
$strLinkNotFound = 'No se encontr� el enlace';
$strLinksTo = 'Enlaces a';
$strLithuanian = 'Lituano';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localizaci�n del archivo de texto';
$strLoginInformation = 'Informaci�n de la cuenta';
$strLogin = 'Iniciar sesi�n';
$strLogout = 'Salir';
$strLogPassword = 'Contrase�a:';
$strLogServer = 'Servidor';
$strLogUsername = 'Usuario:';
$strLongOperation = 'Esta operaci�n podr�a tomar alg�n tiempo. �Proceder de todas formas?';

$strMaxConnects = 'N�mero m�x. de conexiones concurrentes';
$strMaximalQueryLength = 'Longitud m�xima de la consulta creada';
$strMaximumSize = 'Tama�o m�ximo: %s%s';
$strMbExtensionMissing = 'No se hall� la extensi�n PHP mbstring y al parecer usted est� usando tipograf�a multibyte. phpMyAdmin no puede cortar correctamente las cadenas de caracteres sin la extensi�n mbstring y podr�a dar resultados inesperados.';
$strMbOverloadWarning = 'Usted ha activado mbstring.func_overload en su configuraci�n PHP. �Esta opci�n es incompatible con phpMyAdmin y podr�a causar la p�rdida de algunos datos!';
$strMIME_available_mime = 'MIME-types disponibles';
$strMIME_available_transform = 'Transformaciones disponibles';
$strMIME_description = 'Descripci�n';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'No hay una descripci�n disponible para esta transformaci�n.<br />Por favor pregunte al autor lo que %s hace.';
$strMIME_transformation_note = 'Para una lista de opciones de transformaci�n disponibles y sus transformaciones MIME-type transformations, d� clic en %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Por favor ingrese los valores para las opciones de transformaci�n usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez requiere insertar un Backslash ("\") o comilla sencilla ("\'") entre esos valores, use backslash (por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_transformation_options = 'Opciones de transformaci�n';
$strMIME_transformation = 'Transformaci�n del navegador';
$strMIMETypesForTable = 'TIPOS MIME PARA LA TABLA';
$strMIME_without = 'MIME-types impresos en it�licas no tienen una funci�n de transformaci�n adicional';
$strModifications = 'Se han guardado las modificaciones';
$strModifyIndexTopic = 'Modificar un �ndice';
$strModify = 'Modificar';
$strMoveMenu = 'Mover el Men�';
$strMoveTable = 'Mover tabla a (Base de datos<b>.</b>tabla):';
$strMoveTableOK = 'La tabla %s ha sido movida a %s.';
$strMoveTableSameNames = '�No es posible mover la tabla a la misma!';
$strMultilingual = 'multiling�e';
$strMyISAMDataPointerSizeDesc = 'El tama�o predeterminado del puntero de datos en bytes, para su uso en CREATE TABLE para las tablas MyISAM cuando no se ha especificado la opci�n MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tama�o del puntero de datos';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si el archivo temporal usado para la generaci�n r�pida de �ndices MyISAM fuese mayor que el uso del key cache por la cantidad especificada aqu�, preferir el m�todo key cache.';
$strMyISAMMaxExtraSortFileSize = 'Tama�o m�ximo de los archivos temporales durante la generaci�n del �ndice'; 
$strMyISAMMaxSortFileSizeDesc = 'El tama�o m�ximo del archivo temporal que MySQL puede generar mientras genera un nuevo �ndice MyISAM del archivo temporal (durante REPAIR TABLE, ALTER TABLE, o LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tama�o m�ximo para los archivos temporales generados durante la organizaci�n';
$strMyISAMRecoverOptionsDesc = 'La modalidad para la recuperaci�n autom�tica de tablas MyISAM ca�das catastr�ficamente, como fuera determinado mediante la opci�n al arranque del servidor --myisam-recover.'; 
$strMyISAMRecoverOptions = 'Modalidad de recuperaci�n autom�tica';
$strMyISAMRepairThreadsDesc = 'Si este valor es superior a 1, se generan en paralelo los �ndices de las tablas MyISAM (cada �ndice con su propio proceso) durante el proceso \"Reparar mediante organizaci�n\".';
$strMyISAMRepairThreads = 'Reparar los procesos'; 
$strMyISAMSortBufferSizeDesc = 'La cantidad de memoria que se asigna para organizar los �ndices MyISAM durante la operaci�n REPAIR TABLE o cuando se generan �ndices con CREATE INDEX o ALTER TABLE.';
$strMyISAMSortBufferSize = 'Organizar el tama�o del b�fer de memoria';
$strMySQLCharset = 'Juegos de caracteres de MySQL';
$strMysqlClientVersion = 'Versi�n del cliente';
$strMySQLConnectionCollation = 'Cotejamiento de las conexiones MySQL';
$strMysqlLibDiffersServerVersion = 'Su versi�n de librer�a PHP MySQL  %s es distinta de aquella de su versi�n de servidor MySQL %s. Esto puede ocasionar un comportamiento impredecible.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de tiempo de ejecuci�n de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNext = 'Pr�xima';
$strNoActivity = 'No ha habido actividad desde hace %s o m�s segundos, por favor reingrese al sitio';
$strNoDatabases = 'No hay bases de datos';
$strNoDatabasesSelected = 'No se seleccionaron bases de datos.';
$strNoDataReceived = 'No se recibieron datos para importar. O no se envi� el nombre del archivo, o el tama�o del archivo excedi� el m�ximo permitido por su configuraci�n PHP. Por favor, lea el FAQ 1.16.';
$strNoDescription = 'Sin descripci�n';
$strNoDetailsForEngine = 'No existe informaci�n detallada acerca de las condiciones en que se encuentra este motor de almacenamiento.';
$strNoDropDatabases = 'Los enunciados \"DROP DATABASE\" est�n deshabilitados.';
$strNoExplain = 'Salir de la explicaci�n del SQL';
$strNoFilesFoundInZip = '�No se hallaron archivos dentro del archivo ZIP!';
$strNoFrames = 'phpMyAdmin funciona mejor con un navegador que <b>reconoce frames</b>.';
$strNoIndex = '�No se ha definido el �ndice!';
$strNoIndexPartsDefined = '�No se han definido las partes del �ndice!';
$strNoModification = 'Sin cambios';
$strNone = 'Ninguna';
$strNo = 'No';
$strNoOptions = 'Este formato no tiene opciones';
$strNoPassword = 'Sin contrase�a';
$strNoPermission = 'El servidor web no tiene permiso para guardar el archivo %s.';
$strNoPhp = 'Sin c�digo PHP';
$strNoPrivileges = 'Sin privilegios';
$strNoRights = '�Usted no tiene suficientes privilegios para estar aqu� ahora!';
$strNoRowsSelected = 'No se seleccionaron filas';
$strNoSpace = 'No hay suficiente espacio para guardar el archivo %s.';
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNoThemeSupport = 'No existe soporte para Dise�os personalizados (Themes), por favor, revise su configuraci�n y/o sus temas en el directorio %s.';
$strNotNumber = '��sto no es un n�mero!';
$strNotOK = 'no recibi� el OK';
$strNotSet = 'La tabla <b>%s</b> no fue hallada o no fue definida en %s';
$strNoUsersFound = 'Usuario(s) no encontrado(s).';
$strNoValidateSQL = 'Salir de la validaci�n del SQL';
$strNull = 'Nulo';
$strNumberOfFields = 'N�mero de campos';
$strNumberOfTables = 'N�mero de tablas';
$strNumSearchResultsInTable = '%s resultado(s) en la tabla <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tablas';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Hoja de c�lculo Open Document';
$strOpenDocumentText = 'Texto Open Document';
$strOpenNewWindow = 'Abrir nueva ventana de phpMyAdmin';
$strOperations = 'Operaciones';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimizar la tabla';
$strOptions = 'Opciones';
$strOr = 'O';
$strOverhead = 'Residuo a depurar';
$strOverwriteExisting = 'Sobreescribir el(los) archivo(s) existente(s)';

$strPageNumber = 'N�mero de p�gina:';
$strPagesToBeFlushed = 'P�ginas que ser�n eliminadas'; 
$strPaperSize = 'Tama�o del papel';
$strPartialImport = 'Importaci�n parcial';
$strPartialText = 'Textos parciales';
$strPasswordChanged = 'La contrase�a para %s se cambi� exitosamente.';
$strPassword = 'Contrase�a';
$strPasswordEmpty = '�La contrase�a est� vac�a!';
$strPasswordHashing = 'Hashing de la contrase�a';
$strPasswordNotSame = '�Las contrase�as no coinciden!';
$strPdfDbSchema = 'Esquema de la base de datos "%s" - P�gina %s';
$strPdfInvalidTblName = '�La tabla "%s" no existe!';
$strPdfNoTables = 'No existen tablas';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genera un reporte conteniendo los datos de una sola tabla)';
$strPDFReportTitle = 'T�tulo del reporte';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPersian = 'Persa';
$strPhoneBook = 'directorio telef�nico';
$strPHP40203 = 'Usted est� usando PHP 4.2.3, el cual tiene un error de codificaci�n en cuanto a las "cadenas de caracteres multi-byte" (mbstring). Lea el reporte 19404 de PHP. No se recomienda el uso de phpMyAdmin con esta versi�n de PHP.';
$strPhp = 'Crear c�digo PHP';
$strPHPVersion = 'Versi�n de PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Por favor, seleccione la clave primaria o una clave �nica';
$strPmaDocumentation = 'Documentaci�n de phpMyAdmin';
$strPmaUriError = 'El contenido de <tt>$cfg[\'PmaAbsoluteUri\']</tt> �DEBE constar en config.inc.php!';
$strPmaWiki = 'Wiki del phpMyAdmin';
$strPolish = 'Polaco';
$strPortrait = 'Orientaci�n vertical';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimaryKeyHasBeenDropped = 'La clave primaria ha sido eliminada';
$strPrimaryKeyName = 'El nombre de la clave primaria debe ser \"PRIMARY\"';
$strPrimaryKeyWarning = '("PRIMARY" <b>exclusivamente debe</b> ser el nombre de �una clave primaria!)';
$strPrimary = 'Primaria';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Previsualizaci�n para imprimir (documento completo)';
$strPrintView = 'Vista de impresi�n';
$strPrivDescAllPrivileges = 'Incluye todos los privilegios excepto GRANT (CONCEDER).';
$strPrivDescAlter = 'Permite alterar la estructura de las tablas existentes.';
$strPrivDescAlterRoutine = 'Permite alterar y eliminar las rutinas almacenadas.';
$strPrivDescCreateDb = 'Permite crear nuevas bases de datos y tablas.';
$strPrivDescCreateRoutine = 'Permite crear el almacenamiento de rutinas.';
$strPrivDescCreateTbl = 'Permite la creaci�n de tablas nuevas.';
$strPrivDescCreateTmpTable = 'Permite la creaci�n de tablas temporales.';
$strPrivDescCreateUser = 'Permite crear, eliminar y cambiar el nombre de las cuentas de usuario.';
$strPrivDescCreateView = 'Permite crear nuevas vistas.';
$strPrivDescDelete = 'Permite borrar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos y tablas.';
$strPrivDescDropTbl = 'Permite eliminar tablas.';
$strPrivDescExecute5 = 'Permite ejecutar las rutinas almacenadas.';
$strPrivDescExecute = 'Permite ejecutar procedimientos guardados; no tiene efecto en esta versi�n de MySQL.';
$strPrivDescFile = 'Permite importar y exportar datos de y hacia archivos.';
$strPrivDescGrant = 'Permite a�adir usuarios y privilegios sin conectarse nuevamente a la tabla de privilegios.';
$strPrivDescIndex = 'Permite crear y eliminar �ndices.';
$strPrivDescInsert = 'Permite insertar y reemplazar datos.';
$strPrivDescLockTables = 'Permite poner candados a las tablas para el proceso actual.';
$strPrivDescMaxConnections = 'Limita el n�mero de conexiones nuevas que el usuario puede abrir por hora.';
$strPrivDescMaxQuestions = 'Limita el n�mero de consultas que el usuario puede enviar al servidor por hora.';
$strPrivDescMaxUpdates = 'Limita el n�mero de comandos que cambian cualquier tabla o base de datos que el usuario puede ejecutar por hora.';
$strPrivDescMaxUserConnections = 'Limita el n�mero de conexiones simult�neas que el usuario pueda tener.';
$strPrivDescProcess3 = 'Permite eliminar los procesos de otros usuarios.';
$strPrivDescProcess4 = 'Permite ver las consultas completas en la lista de procesos.';
$strPrivDescReferences = 'No tiene efecto en esta versi�n de MySQL.';
$strPrivDescReload = 'Permite volver a cargar los par�metros del servidor y depurar los cach�s del servidor.';
$strPrivDescReplClient = 'Da el derecho al usuario para preguntar d�nde est�n los "esclavos / masters".';
$strPrivDescReplSlave = 'Necesario para los "esclavos" de replicaci�n.';
$strPrivDescSelect = 'Permite leer los datos.';
$strPrivDescShowDb = 'Concede acceso a la lista completa de bases de datos.';
$strPrivDescShowView = 'Permite llevar a cabo las consultas SHOW CREATE VIEW (MOSTRAR CREAR VER).';
$strPrivDescShutdown = 'Permite desconectar el servidor.';
$strPrivDescSuper = 'Permite la conexi�n, incluso si el n�mero m�ximo de conexiones ha sido alcanzado; Necesario para la mayor parte de operaciones administrativas tales como montar par�metros de variables globales o matar procesos de otros usuarios.';
$strPrivDescUpdate = 'Permite cambiar los datos.';
$strPrivDescUsage = 'Sin privilegios.';
$strPrivileges = 'Privilegios';
$strPrivilegesReloaded = 'Los privilegios fueron cargados nuevamente de manera exitosa.';
$strProcedures = 'Procedimientos';
$strProcesses = 'Procesos';
$strProcesslist = 'Lista de procesos';
$strProfiling = 'Perfil/Perfilamiento';
$strProtocolVersion = 'Versi�n del protocolo';
$strPutColNames = 'Poner los nombres de campo en la primera hilera';

$strQBEDel = 'Borrar';
$strQBE = 'Generar una consulta';
$strQBEIns = 'Insertar';
$strQueryCache = 'Cache de consultas';
$strQueryFrame = 'Ventana de consulta';
$strQueryOnDb = 'Consulta a la base de datos <b>%s</b>:';
$strQueryResultsOperations = 'Operaciones sobre los resultados de la consulta';
$strQuerySQLHistory = 'Historial-SQL';
$strQueryStatistics = '<b>Estad�sticas de consulta</b>: Desde su inicio, %s consultas han sido enviadas al servidor.';
$strQueryTime = 'La consulta tard� %01.4f seg';
$strQueryType = 'Tipo de consulta';
$strQueryWindowLock = 'No sobreescribir esta consulta desde fuera de la ventana';

$strReadRequests = 'Lea las solicitudes';
$strReceived = 'Recibido';
$strRecommended = 'recomendado';
$strRecords = 'Registros';
$strReferentialIntegrity = 'Comprobar la integridad referencial:';
$strRefresh = 'Actualizar';
$strRelationalSchema = 'Esquema relacionado';
$strRelationDeleted = 'La relaci�n fue eliminada';
$strRelationNotWorking = 'Las opciones adicionales para trabajar con tablas vinculadas fueron desactivadas. Para saber porqu�, d� clic %saqu�%s.';  //Features = �opciones, componentes?
$strRelationsForTable = 'RELACIONES PARA LA TABLA';
$strRelations = 'Relaciones';
$strRelationView = 'Vista de relaciones';
$strReload = 'Cargar nuevamente';
$strReloadingThePrivileges = 'Cargando los privilegios nuevamente';
$strReloadPrivileges = 'Cargar los privilegios nuevamente';
$strRemoveSelectedUsers = 'Eliminar a los usuarios seleccionados';
$strRenameDatabaseOK = 'La base de datos %s ha sido cambiada de nombre a %s';
$strRenameTable = 'Cambiar el nombre de la tabla a';
$strRenameTableOK = 'Tabla %s ahora se llama %s';
$strRepairTable = 'Reparar la tabla';
$strReplaceNULLBy = 'Reemplazar NULL con';
$strReplaceTable = 'Reemplazar los datos de la tabla con los del archivo';
$strReplication = 'Replicaci�n';
$strReset = 'Reiniciar';
$strResourceLimits = 'L�mites de recursos';
$strRestartInsertion = 'Reinicie la inserci�n con %s filas';
$strReType = 'Debe volver a escribir';
$strRevokeAndDeleteDescr = 'Los usuarios a�n tendr�n el privilegio "USAGE" hasta que los privilegios se hayan vuelto a cargar.';
$strRevokeAndDelete = 'Revocar todos los privilegios activos de los usuarios y borrarlos despu�s.';
$strRevokeMessage = 'Ha revocado los privilegios para %s';
$strRevoke = 'Revocar';
$strRomanian = 'Rumano';
$strRoutineReturnType = 'Muestre el tipo';
$strRoutines = 'Rutinas';
$strRowLength = 'Longitud de la fila';
$strRows = 'Filas';
$strRowsFrom = 'filas empezando de';
$strRowSize = ' Tama�o de la fila ';
$strRowsModeFlippedHorizontal = 'horizontal (encabezados rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s y repetir los encabezados cada %s celdas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�sticas de la fila';
$strRunning = 'ejecut�ndose en %s';
$strRunQuery = 'Ejecutar la consulta';
$strRunSQLQuery = 'Ejecutar la(s) consulta(s) SQL en la base de datos %s';
$strRunSQLQueryOnServer = 'Ejecute la o las consultas SQL en el servidor %s';
$strRussian = 'Ruso';

$strSave = 'Grabar';
$strSaveOnServer = 'Guardar en el servidor, en el directorio %s ';
$strSavePosition = 'Guardar posici�n';
$strScaleFactorSmall = 'El factor de la escala es demasiado peque�o para poner el esquema en una p�gina';
$strSearch = 'Buscar';
$strSearchFormTitle = 'Buscar en la base de datos';
$strSearchInTables = 'En la(s) tabla(s):';
$strSearchNeedle = 'Palabra(s) o valor(es) a buscar (comod�n: "%"):';
$strSearchOption1 = 'al menos una de estas palabras';
$strSearchOption2 = 'Todas las palabras';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearchResultsFor = 'Resultados de la b�squeda por "<i>%s</i>" %s:';
$strSearchType = 'Encontrado:';
$strSecretRequired = 'El archivo de configuraci�n ahora necesita salvoconducto (una frase secreta) (blowfish_secret).';
$strSelectADb = 'Seleccionar una base de datos';
$strSelectAll = 'Seleccionar todo';
$strSelectBinaryLog = 'Seleccionar el log binario que desea examinar';
$strSelectFields = 'Seleccionar campos (al menos uno):';
$strSelectForeignKey = 'Seleccione la llave extranjera (foreign key)';
$strSelectNumRows = 'en la consulta';
$strSelectReferencedKey = 'Seleccione la llave de referencia';
$strSelectTables = 'Seleccionar tablas';
$strSend = 'Enviar (genera un archivo descargable)';
$strSent = 'Enviado';
$strServerChoice = 'Elecci�n del servidor';
$strServerNotResponding = 'El servidor no est� respondiendo';
$strServer = 'Servidor';
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Delayed inserts';
$strServerStatus = 'Informaci�n acerca del tiempo de ejecuci�n del proceso principal';
$strServerStatusUptime = 'Este servidor MySQL ha estado activo durante %s. Se inici� en %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Tr�fico del servidor</b>: Estas tablas muestran las estad�sticas de tr�fico en la red de este servidor MySQL desde su inicio.';
$strServerVars = 'Variables y par�metros del servidor';
$strServerVersion = 'Versi�n del servidor';
$strSessionStartupErrorGeneral = 'Hubo errores al iniciar la sesi�n.  Por favor, revise los errores en la bit�cora de su PHP y/o servidor web y configure correctamente su instalaci�n PHP.';
$strSessionValue = 'Valor de la sesi�n';
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Mostrar todo';
$strShowColor = 'Mostrar color';
$strShowDatadictAs = 'Formato del Diccionario de Datos';
$strShowFullQueries = 'Mostrar las consultas enteras';
$strShowGrid = 'Mostrar la cuadr�cula';
$strShowHideLeftMenu = 'Ocultar/mostrar men� izquierdo';
$strShowingBookmark = 'Mostrando el favorito';
$strShowingPhp = 'Mostrar como c�digo PHP';
$strShowingRecords = 'Mostrando registros ';
$strShowingSQL = 'Mostrando la consulta SQL';
$strShow = 'Mostrar';
$strShowOpenTables = 'Mostrar las tablas que est�n abiertas';
$strShowPHPInfo = 'Mostrar la informaci�n de PHP';
$strShowSlaveHosts = 'Mostrar los hosts esclavos';
$strShowSlaveStatus = 'Mostrar el estado del esclavo';
$strShowStatusBinlog_cache_disk_useDescr = 'El n�mero de transacciones que usaron el cache de log binario temporal pero que excedieron el valor del binlog_cache_size y usaron un archivo temporal para almacenar los enunciados de la transacci�n.';
$strShowStatusBinlog_cache_useDescr = 'El n�mero de transacciones que usaron el cache de log binario temporal.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'El n�mero de tablas temporales en el disco que fueron creados autom�ticamente por el servidor mientras ejecuta los enunciados. Si las tablas Created_tmp_disk_tables es grande, puede incrementar el valor de tmp_table_size para hacer que las tablas temporales se basen en memoria en lugar de basarse en disco.';
$strShowStatusCreated_tmp_filesDescr = 'El n�mero de archivos temporales que fueron creados por mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'El n�mero de tablas temporales in-memory creadas autom�ticamente por el servidor mientras se ejecutaban los enunciados.';
$strShowStatusDelayed_errorsDescr = 'El n�mero de filas escritas con INSERT DELAYED en los cuales ocurri� alg�n error (probablemente una llave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'El n�mero de procesos gestores INSERT DELAYED en uso. Cada tabla diferente en la cual uno usa INSERT DELAYED recibe su propio proceso.';
$strShowStatusDelayed_writesDescr = 'El n�mero de filas INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'El n�mero de enunciados FLUSH ejecutados.';
$strShowStatusHandler_commitDescr = 'El n�mero de enunciados COMMIT internos.';
$strShowStatusHandler_deleteDescr = 'El n�mero de veces que una fila fue eliminada de una tabla.';
$strShowStatusHandler_discoverDescr = 'El servidor MySQL puede solicitar al motor de almacenamiento NDB Cluster si conoce acerca de una tabla con un nombre dado. Esto se llama descubrimiento. Handler_discover indica el n�mero ocasiones que las tablas han sido descubiertas.';
$strShowStatusHandler_read_firstDescr = 'El n�mero de veces en que el primer registro ha sido le�do desde un �ndice. Si este valor es alto, sugiere que el servidor est� haciendo gran cantidad de escaneos completos del �ndice; por ejemplo, SELECT col1 FROM foo, asumiendo que col1 est� indizado.';
$strShowStatusHandler_read_keyDescr = 'El n�mero de solicitudes hechas para leer una fila basado en una llave. Si este valor es alto, es una buena indicaci�n de que sus consultas y tablas est�n indizadas apropiadamente.';
$strShowStatusHandler_read_nextDescr = 'El n�mero de solicitudes hechas para leer la siguiente fila en un orden clave. Este se incrementa si usted est� consultando una columna �ndice con un limitante de rango o si usted est� haciendo un escaneo del �ndice.';
$strShowStatusHandler_read_prevDescr = 'El n�mero de solicitudes hechas para leer la fila previa en un orden clave. Este m�todo de lectura se usa principalmente para optimizar a ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'El n�mero de solicitudes hechas para leer una fila basado en una posici�n fija. Este es alto si usted est� haciendo muchas consultas que requieren el reordenamiento del resultado. Usted probablemente tiene muchas consultas que requieren que MySQL escanee tablas enteras o usted debe tener v�nculos (joins) que no usan las llaves de manera apropiada.';
$strShowStatusHandler_read_rnd_nextDescr = 'El n�mero de solicitudes hechas para leer la siguiente fila en el archivo de datos. Este es alto si usted est� haciendo muchos escaneos de tablas. Generalmente, esto sugiere que sus tablas no est�n indizadas apropiadamente o que sus consultas no est�n escritas para tomar ventaja de los �ndices que tiene.';
$strShowStatusHandler_rollbackDescr = 'El n�mero de enunciados ROLLBACK internos.';
$strShowStatusHandler_updateDescr = 'El n�mero de solicitudes hechas para actualizar una fila en una tabla.';
$strShowStatusHandler_writeDescr = 'El n�mero de solicitudes hechas para insertar una fila en una tabla.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'El n�mero de p�ginas conteniendo datos (sucias o limpias).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'El n�mero de p�ginas actualmente sucias.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'El n�mero de p�ginas en la memoria (b�fer) de tr�nsito com�n que se ha solicitado sean vaciadas.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'El n�mero de p�ginas libres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'El n�mero de p�ginas aseguradas en la memoria (b�fer) de tr�nsito com�n InnoDB. Estas son p�ginas en fase de lectura o escritura o que no pueden ser vaciadas o removidas por alguna otra raz�n.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'El n�mero de p�ginas ocupadas porque han sido asignadas para overhead administrativo tales como row locks o el �ndice hash adaptativo. Este valor tambi�n puede ser calculado como Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tama�o total de la memoria (b�fer) de tr�nsito com�n, en p�ginas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'El n�mero de read-aheads InnoDB "aleatorias" iniciadas. Esto sucede cuando una consulta va a escanear una gran porci�n de una tabla pero en orden aleatorio.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'El n�mero de read-aheads InnoDB secuenciales iniciadas. Esto sucede cuando InnoDB hace un escaneo secuencial de la tabla completa.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'El n�mero de solicitudes de lectura l�gica hechas por InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'El n�mero de lecturas l�gicas que InnoDB no pudo satisfacer de la memoria (b�fer) de tr�nsito com�n y donde fue necesario hacer lectura de p�gina sencilla.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, las escrituras a la memoria de tr�nsito com�n InnoDB suceden en el trasfondo. Sin embargo, de ser necesario leer o crear una p�gina y existen p�ginas limpias disponibles, es necesario esperar que las p�ginas sean vaciadas previamente. Este contador cuenta las instancias de estas esperas. Si los par�metros del tama�o de la memoria de tr�nsito com�n se fijaron apropiadamente, este valor ser� peque�o.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'El n�mero de escrituras hechas a la memoria de tr�nsito com�n InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'El n�mero de operaciones fsync() hechas hasta el momento.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'El n�mero actual de operaciones fsync() pendientes.';
$strShowStatusInnodb_data_pending_readsDescr = 'El n�mero actual de lecturas pendientes.';
$strShowStatusInnodb_data_pending_writesDescr = 'El n�mero actual de escrituras pendientess.';
$strShowStatusInnodb_data_readDescr = 'El n�mero de datos le�dos hasta el momento, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'El n�mero total de lectura de datos.';
$strShowStatusInnodb_data_writesDescr = 'El n�mero total de escritura de datos.';
$strShowStatusInnodb_data_writtenDescr = 'La cantidad de datos escritas hasta el momento, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'El n�mero de escrituras doublewrite que se han ejecutado y el n�mero de p�ginas escritas con este prop�sito.';
$strShowStatusInnodb_dblwr_writesDescr = 'El n�mero de escrituras doublewrite que se han ejecutado y el n�mero de p�ginas escritas con este prop�sito.';
$strShowStatusInnodb_log_waitsDescr = 'El n�mero de esperas generadas porque la memoria (b�fer) log fue demasiado peque�a y hubo que esperar a que fuera vaciada antes de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'El n�mero de solicitudes de escritura al log.';
$strShowStatusInnodb_log_writesDescr = 'El n�mero de escrituras f�sicas al archivo log.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'El n�mero de escrituras fsyncs hechas al archivo log.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'El n�mero de fsyncs pendientes al archivo log.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escrituras pendientes al archivo log.';
$strShowStatusInnodb_os_log_writtenDescr = 'El n�mero de bytes escritos al archivo log.';
$strShowStatusInnodb_pages_createdDescr = 'El n�mero de p�ginas creadas.';
$strShowStatusInnodb_page_sizeDescr = 'El tama�o de p�gina InnDB precompilado (por omisi�n 16KB). Muchos valores son contados por p�ginas; el tama�o de la p�gina permite que pueda convertirse f�cilmente a bytes.';
$strShowStatusInnodb_pages_readDescr = 'El n�mero de p�ginas le�das.';
$strShowStatusInnodb_pages_writtenDescr = 'El n�mero de p�ginas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'El n�mero de row locks que actualmente est�n en espera.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'El tiempo promedio para adquirir un row lock, en milisegundos.';
$strShowStatusInnodb_row_lock_timeDescr = 'El total de tiempo invertido para adquirir los row locks, en milisegundos.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'El tiempo m�ximo para adquirir un row lock, en milisegundos.';
$strShowStatusInnodb_row_lock_waitsDescr = 'El n�mero de veces que un row lock tuvo que esperarse.';
$strShowStatusInnodb_rows_deletedDescr = 'El n�mero de filas eliminadas de tablas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'El n�mero de filas insertadas en tablas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'El n�mero de filas le�das de las tablas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'El n�mero de filas actualizadas en tablas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'El n�mero de key blocks en el key cache que han cambiado pero que a�n no han sido vaciados al disco. Antes se conoc�a como Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'El n�mero de bloques sin usar en el key cache. Puede usar este valor para determinar cu�nto del key cache est� en uso.';
$strShowStatusKey_blocks_usedDescr = 'El n�mero de bloques usados en el key cache. Este valor es un marcador de desbordamiento que indica el n�mero m�ximo de bloques que alg�n momento se llegaron a usar.';
$strShowStatusKey_read_requestsDescr = 'El n�mero de solicitudes para leer un key block desde el cache.';
$strShowStatusKey_readsDescr = 'El n�mero de lecturas f�sicas del key block desde el disco. Si el Key_reads es grande, entonces el valor key_buffer_size probablemente es demasiado peque�o. La tasa de fallos en el cache puede calcularse como Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'El n�mero de solicitudes para escribir un key block al cache.';
$strShowStatusKey_writesDescr = 'El n�mero de escrituras f�sicas a un key block al disco.';
$strShowStatusLast_query_costDescr = 'El costo total de la �ltima consulta compilada como fuera computada por el optimizador de consultas. Es �til para comparar el costo de diferentes planes de consulta para una misma consulta. El valor por omisi�n de 0 significa que ninguna consulta ha sido compilada todav�a.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'El n�mero de filas esperando ser escritas en las colas INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'El n�mero de tablas que han sido abiertas. Si el n�mero de tablas abiertas es grande, su valor del cache de tabla probablemente es muy peque�o.';
$strShowStatusOpen_filesDescr = 'El n�mero de archivos que est�n abiertos.';
$strShowStatusOpen_streamsDescr = 'El n�mero de flujos de datos que est�n abiertos (usado principalmente para alimentar a los logs).';
$strShowStatusOpen_tablesDescr = 'El n�mero de tablas que est�n abiertas.';
$strShowStatusQcache_free_blocksDescr = 'El n�mero de bloques de memoria libre en el cache de consultas.';
$strShowStatusQcache_free_memoryDescr = 'La cantidad de memoria libre para el cache de consultas.';
$strShowStatusQcache_hitsDescr = 'El n�mero de hits al cache.';
$strShowStatusQcache_insertsDescr = 'El n�mero de consultas a�adidos al cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'El n�mero de consultas que han sido removidos del cache para liberar la memoria para poner nuevas consultas en el cache. Esta informaci�n puede ayudar a afinar el tama�o del cache de consultas. El cache de consultas usa la estrategia Least Recently Used (LRU) para decidir cu�les consultas deben ser removidas del cache.';
$strShowStatusQcache_not_cachedDescr = 'El n�mero de consultas que no ingresaron al cache (porque no es posible o porque el par�metro no est� activado en query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'El n�mero de consultas registradas en el cache.';
$strShowStatusQcache_total_blocksDescr = 'El n�mero total de bloques en el cache de consultas.';
$strShowStatusReset = 'Resetear';
$strShowStatusRpl_statusDescr = 'El estado de la replicaci�n a prueba de fallos (a�n no ha sido implementada).';
$strShowStatusSelect_full_joinDescr = 'El n�mero de v�nculos (joins) que no usan �ndices. Si este valor no es 0, deber� revisar los �ndices de sus tablas cuidadosamente.';
$strShowStatusSelect_full_range_joinDescr = 'El n�mero de v�nculos (joins) que usaron b�squeda por rangos en una tabla de referencias.';
$strShowStatusSelect_range_checkDescr = 'El n�mero de v�nculos (joins) sin keys que revisan el uso de key luego de cada fila. (Si no es 0, deber� revisar los �ndices de sus tablas cuidadosamente.)';
$strShowStatusSelect_rangeDescr = 'El n�mero de v�nculos (joins) que usaron rangos en la primera tabla. (Normalmente no es cr�tico aun cuando sea grande.)';
$strShowStatusSelect_scanDescr = 'El n�mero de v�nculos (joins) que hicieron un escaneo completo de la primera tabla.';
$strShowStatusSlave_open_temp_tablesDescr = 'El n�mero de tablas temporales actualmente abiertas por el proceso SQL esclavo.';
$strShowStatusSlave_retried_transactionsDescr = 'N�mero total de veces (desde el arranque) que el proceso SQL esclavo de replicaci�n ha reintentado hacer transacciones.';
$strShowStatusSlave_runningDescr = 'Est� ENCENDIDO si este servidor es un esclavo que est� conectado a un master.';
$strShowStatusSlow_launch_threadsDescr = 'El n�mero de procesos que han tomado m�s de los segundos registrados en slow_launch_time para crear.';
$strShowStatusSlow_queriesDescr = 'El n�mero de consultas que han tomado m�s segundos que los registrados en long_query_time.';
$strShowStatusSort_merge_passesDescr = 'El n�mero de pasadas de fusi�n (merge) que el algoritmo organizar ha debido hacer. Si este valor es grande, debe considerar incrementar el valor de la varible de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'El n�mero de consultas organizar que se ejecutaron con rangos.';
$strShowStatusSort_rowsDescr = 'El n�mero de filas sorted.';
$strShowStatusSort_scanDescr = 'El n�mero de consultas organizar que se hicieron escaneando la tabla.';
$strShowStatusTable_locks_immediateDescr = 'El n�mero de veces que un table lock fue adquirido inmediatamente.';
$strShowStatusTable_locks_waitedDescr = 'El n�mero de veces que un table lock no pudo adquirirse inmediatamente y fue necesaria una espera. Si este valor es alto, y hay problemas de rendimiento, primero deber� optimizar sus consultas, y luego, ya sea partir sus tablas o usar replicaci�n.';
$strShowStatusThreads_cachedDescr = 'El n�mero de procesos en el cache de procesos. La tasa de hits al cache puede calcularse como Threads_created/Connections. Si este valor es rojo, debe incrementar su thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'El n�mero de conexiones abiertas actualmente.';
$strShowStatusThreads_createdDescr = 'El n�mero de procesos creados para manejar las conexiones. Si Threads_created es grande, querr� incrementar el valor thread_cache_size. (Normalmente esto no aporta una mejor�a notable en el rendimiento si usted tiene una buena implementaci�n de procesos.)';
$strShowStatusThreads_runningDescr = 'El n�mero de procesos que no est�n en reposo.';
$strShowTableDimension = 'Mostrar la dimensi�n de las tablas';
$strShowTables = 'Mostrar las tablas';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strSimplifiedChinese = 'Chino simplificado';
$strSingly = '(solamente)';
$strSize = 'Tama�o';
$strSkipQueries = 'N�mero de registros (consultas) a saltarse desde el inicio';
$strSlovak = 'Eslovaco'; 
$strSlovenian = 'Esloveno';
$strSmallBigAll = 'Peque�o/grande todos';
$strSnapToGrid = 'Cuadr�cula magn�tica';
$strSocketProblem = '(o el socket del servidor MySQL local no est� configurado correctamente)';
$strSortByKey = 'Organizar seg�n la clave';
$strSorting = 'Organizando (sorting)';
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado';
$strSpanish = 'Espa�ol';
$strSplitWordsWithSpace = 'Palabras separadas por un espacio (" ").';
$strSQLCompatibility = 'Modalidad compatible con SQL';
$strSQLExportType = 'Tipo de exportaci�n';
$strSQLParserBugMessage = 'Hay la posibilidad de que usted haya encontrado un error en el int�rprete de SQL. Por favor examine cuidadosamente su consulta, y verifique que las comillas est�n siendo usadas adecuadamente y hacen juego. Otra posible causa del fallo es que usted este subiendo un archivo con datos binarios por fuera del �rea de texto delimitado. Intente su consulta en la interfaz de comandos de MySQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema. Si a�n tiene problemas o el int�rprete falla en tanto que en la interfaz de comandos funciona, por favor reduzca la salida de su consulta de SQL a la consulta que genera el problema, y env�e un reporte de error con la cadena de datos en la secci�n de CORTE indicada abajo:';
$strSQLParserUserError = 'Parece haber un error en su consulta de SQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema.';
$strSQLQuery = 'consulta SQL';
$strSQLResult = 'Resultado SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'El identificador no es v�lido';
$strSQPBugUnclosedQuote = 'Comillas sin cerrar';
$strSQPBugUnknownPunctuation = 'Signo de puntuaci�n desconocido';
$strStandInStructureForView = 'Estructura Stand-in para la vista';
$strStatCheckTime = '�ltima revisi�n';
$strStatCreateTime = 'Creaci�n';
$strStatement = 'Enunciado';
$strStatisticsOverrun = 'En un servidor que se encuentra ejecutando procesos, los contadores de bytes pueden excederse.  Por tanto, las estad�sticas reportadas por el servidor MySQL pueden estar incorrectas.';
$strStatUpdateTime = '�ltima actualizaci�n';
$strStatus = 'Estado actual';
$strStorageEngine = 'Motor de almacenamiento';
$strStorageEngines = 'Motores de almacenamiento';
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucExcelCSV = 'CSV para datos de MS Excel';
$strStrucNativeExcel = 'Datos de MS Excel en formato nativo';
$strStrucOnly = '�nicamente la estructura ';
$strStructPropose = 'Planteamiento de la estructura de tabla';
$strStructure = 'Estructura';
$strStructureForView = 'Estructura para la vista';
$strSubmit = 'Enviar';
$strSuccess = 'Su consulta se ejecut� con �xito';
$strSuhosin = 'El servidor est� utilizando Suhosin. Por favor, refi�rase a %sdocumentation%s para posibles ajustes.';
$strSum = 'N�mero de filas';
$strSwedish = 'Sueco';
$strSwitchToDatabase = 'Seleccionar la base de datos copiada';
$strSwitchToTable = 'Cambiar (switch) a la tabla copiada';

$strTableAlreadyExists = '�La tabla %s ya existe!';
$strTableComments = 'Comentarios de la tabla';
$strTableEmpty = '�El nombre de la tabla est� vac�o!';
$strTableHasBeenDropped = 'Se ha eliminado la tabla %s';
$strTableHasBeenEmptied = 'Se ha vaciado la tabla %s';
$strTableHasBeenFlushed = 'Se ha vaciado el cach� de la tabla %s';
$strTableIsEmpty = 'La tabla, �parece estar vac�a!';
$strTableMaintenance = 'Mantenimiento de la tabla';
$strTableName = 'Nombre de la tabla';
$strTableOfContents = 'Tabla de contenidos';
$strTableOptions = 'Opciones de la tabla';
$strTables = '%s tabla(s)';
$strTableStructure = 'Estructura de tabla para la tabla';
$strTable = 'Tabla';
$strTakeIt = 't�melo';
$strTblPrivileges = 'Privilegios espec�ficos para la tabla';
$strTempData = 'Datos temporales';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo podr�a no ser editable ';
$strThai = 'Tailand�s';
$strThemeDefaultNotFound = '�No se hall� la plantilla de interfaz (theme) predeterminada %s!';
$strThemeNoPreviewAvailable = 'No existe una previsualizaci�n disponible.';
$strThemeNotFound = '�No se hall� la plantilla de interfaz (theme) %s!';
$strThemeNoValidImgPath = '�No se hall� la ruta de im�genes para la plantilla de interfaz (theme) %s!';
$strThemePathNotFound = '�No se hall� la ruta de la plantilla de interfaz (theme) para la plantilla %s!';
$strTheme = 'Tema / Estilo';
$strThisHost = 'Este Host';
$strThreads = 'Procesos';
$strThreadSuccessfullyKilled = 'El proceso %s fue destruido exitosamente.';
$strTimeoutInfo = 'Se agot� el tiempo de ejecuci�n en la importaci�n previa; si lo reenv�a continuar� desde la posici�n %d.';
$strTimeoutNothingParsed = 'Sin embargo, en la ejecuci�n m�s reciente no se procesaron datos.  Esto usualmente significa que phpMyAdmin no ser� capaz de completar esta importaci�n a menos que usted incremente el tiempo de ejecuci�n de php.';
$strTimeoutPassed = 'Se ha agotado el tiempo de ejecuci�n del script; si desea completar la importaci�n, por favor, reenv�e el mismo archivo y la importaci�n continuar�.';
$strTime = 'Tiempo';
$strToFromPage = 'p�gina de/a la';
$strToggleScratchboard = 'cambiar el estado del scratchboard';
$strToggleSmallBig = 'Alterne entre peque�o y grande';
$strToSelectRelation = 'Para seleccionar la relaci�n, d� clic en:';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Chino tradicional';
$strTraditionalSpanish = 'Espa�ol tradicional';
$strTraffic = 'Tr�fico';
$strTransactionCoordinator = 'Coordinador de transacci�n';
$strTransformation_application_octetstream__download = 'Mostrar un enlace para descargar los datos binarios de un campo. La primera opci�n es el nombre del archivo binario.  La segunda opci�n es un nombre de campo factible de una fila de la tabla que contiene el nombre del campo. Si usted aporta una segunda opci�n, necesariamente deber� consignar la primera opci�n a una cadena de caracteres vac�a';
$strTransformation_application_octetstream__hex = 'Muestra los datos en representaci�n hexadecimal. El primer par�metro es opcional y especifica cu�n a menudo se a�adir� espacio (2 nibbles, es decir, 1 byte de manera predeterminada).';
$strTransformation_image_jpeg__inline = 'Muestra un thumbnail que puede abrirse mediante un clic; opciones: width, height en p�xeles (mantiene la proporci�n original)';
$strTransformation_image_jpeg__link = 'Muestra un enlace a esta imagen (i.e., blob descarga directa).';
$strTransformation_image_png__inline = 'Ver imagen/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Toma un campo TIME, TIMESTAMP o DATETIME y lo formatea usando su formato de fechas local. La primera opci�n es el offset (en horas) que se a�adir� al timestamp (Predeterminado: 0). La segunda opci�n es un dateformat diferente de acuerdo con los par�metros disponibles para el strftime() del PHP. La tercera opci�n determina si usted quiere ver la fecha local o la UTC (use strings "local" o "utc") para eso. Seg�n eso, el formato de la fecha tendr� un valor diferente - para "local" mire la documentaci�n para la funci�n strftime() del PHP y para "utc" se hace usando la funci�n gmdate().';
$strTransformation_text_plain__external = 'LINUX SOLAMENTE: Ejecuta una aplicaci�n externa y alimenta el fielddata mediante input est�ndar. Retorna el output est�ndar de la aplicaci�n. El predeterminado es Tidy, para mostrar c�digo HTML agradable para la impresi�n. Por razones de seguridad, debe editar manualmente el archivo libraries/transformations/text_plain__external.inc.php e insertar las herramientas que permitir� se ejecuten. La primera opci�n ser� el n�mero del programa que querr� utilizar y la segunda opci�n son los par�metros para el programa. El tercer par�metro, de ser 1 convertir� el output usando htmlspecialchars() (el predeterminado es 1). Un cuarto par�metro, de ser 1 pondr� un NOWRAP a la celda de contenido para que todo el output se muestre sin reformatear (Predeterminado 1)';
$strTransformation_text_plain__formatted = 'Mantiene el formato original del campo. No se puede hacer Escape.';
$strTransformation_text_plain__imagelink = 'Muestra una imagen y un enlace, el campo contiene el nombre del archivo; la primera opci�n es un prefijo como "http://dominio.com/", la segunda opci�n es el ancho en p�xeles, el tercero es el alto.';
$strTransformation_text_plain__link = 'Muestra un enlace, el campo contiene el nombre del archivo; la primera opci�n es un prefijo como "http://dominio.com/", la segunda opci�n es un t�tulo para el enlace.';
$strTransformation_text_plain__sql = 'Formatea el texto como una consulta SQL y resalta la sintaxis.';
$strTransformation_text_plain__substr = 'Muestra una parte de una cadena de caracteres. La primera opci�n es el n�mero de caracteres a pasar por alto desde el principio de la cadena de caracteres (Predeterminado: 0). La segunda opci�n es el n�mero de caracteres a mostrar (Predeterminado: hasta el final de la cadena de caracteres). La tercera opci�n es la cadena de caracteres a adjuntar y/o anteponer cuando haya truncamiento (Predeterminado: "...").';
$strTriggers = '(Evento) desencadenante';
$strTruncateQueries = 'Truncar las consultas que ya se han mostrado';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraniano';
$strUncheckAll = 'Desmarcar todos';
$strUnicode = 'Unicode';
$strUnique = '�nico';
$strUnknown = 'desconocido';
$strUnselectAll = 'Deseleccionar todo';
$strUnsupportedCompressionDetected = 'Usted intent� cargar un archivo con un tipo de compresi�n desconocido (%s). Este tipo de compresi�n puede no estar implementado o quiz� no ha sido habilitado en su archivo de configuraci�n.';
$strUpdatePrivMessage = 'Ha actualizado los privilegios para %s.';
$strUpdateProfileMessage = 'Se actualiz� el perfil.';
$strUpdateQuery = 'Modificar la consulta';
$strUpdComTab = 'Para actualizar su tabla Columna_comentarios (Column_comments), por favor revise la documentaci�n';
$strUpgrade = 'Usted deber�a actualizar su %s a la versi�n %s o m�s reciente.';
$strUploadErrorCantWrite = 'No fue posible grabar el archivo al disco.';
$strUploadErrorExtension = 'La carga del archivo fue detenida por extensi�n.';
$strUploadErrorFormSize = 'El archivo que intent� cargar excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.';
$strUploadErrorIniSize = 'El archivo que intent� cargar excede la directiva upload_max_filesize en php.ini.';
$strUploadErrorNoTempDir = 'No existe una carpeta temporal.';
$strUploadErrorPartial = 'El archivo que intent� cargar no alcanz� el 100%.';
$strUploadErrorUnknown = 'Error desconocido durante la carga del archivo.';
$strUploadLimit = 'Usted probablemente intent� cargar un archivo demasiado grande.  Por favor, refi�rase a %sdocumentation%s para hallar modos de superar esta limitante.';
$strUploadsNotAllowed = 'No est� permitido subir archivos a este servidor.';
$strUsage = 'Uso';
$strUseBackquotes = 'Usar "backquotes" con tablas y nombres de campo';
$strUsedPhpExtensions = 'Extensiones PHP utilizadas';
$strUseHostTable = 'Usar la tabla Anfitri�n (Host)';
$strUserAlreadyExists = '�El usuario %s ya existe!';
$strUserEmpty = '�El nombre de usuario est� vac�o!';
$strUserName = 'Nombre de usuario';
$strUserNotFound = 'El usuario que seleccion� no se hall� en la tabla de privilegios.';
$strUserOverview = 'Vista global de usuarios';
$strUsersDeleted = 'Los usuarios seleccionados fueron borrados exitosamente.';
$strUsersHavingAccessToDb = 'Usuarios con acceso a &quot;%s&quot;';
$strUser = 'Usuario';
$strUseTabKey = 'Use la tecla TAB para saltar de un valor a otro, o CTRL+flechas para moverse a cualquier parte';
$strUseTables = 'Usar tablas';
$strUseTextField = 'Use el campo de texto';
$strUseThisValue = 'Use este valor';

$strValidateSQL = 'Validar el SQL';
$strValidatorError = 'El validador de SQL no pudo inicializarse. Por favor revise si ha instalado las extensiones php necesarias, como est�n descritas en la %sdocumentaci�n%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strVersionInformation = 'Acerca de esta versi�n';
$strViewDumpDatabases = 'Ver el volcado (schema) de la base de datos';
$strViewDumpDB = 'Ver el volcado esquema de la base de datos';
$strViewDump = 'Mostrar el volcado esquema de la tabla';
$strViewHasBeenDropped = 'Se descart� el modo de visualizaci�n %s';
$strViewMaxExactCount = 'Esta visualizaci�n tiene m�s de %s filas. Por favor, refi�rase a la %sdocumentaci�n%s.';
$strViewName = '(VIEW) VER nombre';
$strView = 'Visualizar';

$strWebServerUploadDirectory = 'directorio en el servidor web para subir los archivos';
$strWebServerUploadDirectoryError = 'No est� disponible el directorio que usted habilit� para subir las tareas';
$strWelcome = 'Bienvenido a %s';
$strWestEuropean = 'Europea occidental';
$strWildcard = 'comod�n';
$strWindowNotFound = 'La ventana del navegador no pudo actualizarse. Quiz� cerr� la ventana principal o su navegador est� bloqueando las actualizaciones en ventanas m�ltiples debido a sus par�metros de seguridad.';
$strWithChecked = 'Para los elementos que est�n marcados:';
$strWriteRequests = 'Escribir las solicitudes';
$strWrongUser = 'El nombre de usuario o la contrase�a est� equivocado. El acceso fue denegado.';

$strXML = 'XML';

$strYes = 'S�';

$strZeroRemovesTheLimit = 'Nota: si cambia los par�metros de estas opciones a 0 (cero), remueve el l�mite.';
$strZip = '"comprimido con zip"';

?>
