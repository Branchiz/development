<?php
/* $Id: spanish-utf-8.inc.php 11212 2008-04-23 16:28:20Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
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
$timespanfmt = '%s días, %s horas, %s minutos y %s segundos';

$strAbortedClients = 'Abortado';
$strAccessDenied = 'Acceso denegado ';
$strAccessDeniedCreateConfig = 'La razón más probable es que usted no creó un archivo de configuración. Utilice %1$ssetup script%2$s para crear una.';
$strAccessDeniedExplanation = 'phpMyAdmin intentó conectarse con el servidor MySQL, y el servidor rechazó esta conexión. Deberá revisar el host, nombre de usuario y contraseña en config.inc.php y asegurarse que corresponden con la información provista por el administrador del servidor MySQL.';
$strAction = 'Acción';
$strAddAutoIncrement = 'Añadir el valor AUTO_INCREMENT';
$strAddClause = 'Añada %s';
$strAddConstraints = 'Añadir restricciones';
$strAddDeleteColumn = 'Añadir/borrar columna de criterio';
$strAddDeleteRow = 'Añadir/borrar fila de criterio';
$strAddFields = 'Añadir %s campo(s)';
$strAddHeaderComment = 'Añadir su propio comentario en el encabezado (\\n segmenta las oraciones)';
$strAddIntoComments = 'Añadir en los comentarios';
$strAddNewField = 'Insertar nuevo campo';
$strAddPrivilegesOnDb = 'Añadir privilegios a esta base de datos';
$strAddPrivilegesOnTbl = 'Añadir privilegios a esta tabla';
$strAddSearchConditions = 'Insertar las condiciones de búsqueda (cuerpo de la cláusula "where"):';
$strAddToIndex = 'Añadir al índice &nbsp;%s&nbsp;columna(s)';
$strAddUser = 'Agregar un nuevo usuario';
$strAddUserMessage = 'Ha agregado un nuevo usuario.';
$strAdministration = 'Administración';
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Después de %s';
$strAfterInsertBack = 'Volver';
$strAfterInsertNewInsert = 'Insertar un nuevo registro';
$strAfterInsertNext = 'Editar la siguiente fila';
$strAfterInsertSame = 'Volver a esta página';
$strAllowInterrupt = 'Permita la interrupción de la importación en el caso de que el script detecte que se ha acercado a su límite de tiempo. Esto podría ser un buen método para importar archivos grandes; sin embargo, puede dañar las transacciones.';
$strAllTableSameWidth = '¿Mostrar todas las tablas que tienen el mismo ancho?';
$strAll = 'Todos/as';
$strAlterOrderBy = 'Modificar el ORDER BY de la tabla';
$strAnalyzeTable = 'Analizar la tabla';
$strAndThen = 'y luego';
$strAnd = 'y luego';
$strAngularLinks = 'Enlaces angulares';
$strAnIndex = 'Se añadió un índice en %s';
$strAny = 'cualquiera';
$strAnyHost = 'Cualquier servidor';
$strAnyUser = 'Cualquier usuario';
$strApproximateCount = 'Podría ser aproximado.  Léase la FAQ 3.11';
$strAPrimaryKey = 'Se añadió una clave primaria en %s';
$strArabic = 'Árabe';
$strArmenian = 'Armenio';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla';
$strAtEndOfTable = 'Al final de la tabla';
$strAttr = 'Atributos';
$strAutomaticLayout = 'Diseño automático';

$strBack = 'Volver';
$strBaltic = 'Báltico';
$strBeginCut = 'INICIO DEL CORTE';
$strBeginRaw = 'INICIO DEL VOLCADO';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - ¡no editar! ';
$strBinaryLog = 'Log binario';
$strBinLogEventType = 'Tipo de evento';
$strBinLogInfo = 'Información';
$strBinLogName = 'Nombre con el cual se registró';
$strBinLogOriginalPosition = 'Posición original';
$strBinLogPosition = 'Posición';
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
$strBufferPoolActivity = 'Actividad de la memoria (búfer) de tránsito común';
$strBufferPool = 'Total de memoria del búfer'; 
$strBufferPoolUsage = 'Total de memoria del búfer consumido'; 
$strBufferReadMissesInPercent = 'Leer los fallos en %';
$strBufferReadMisses = 'Leer los fallos';
$strBufferWriteWaits = 'Escribir las esperas';
$strBufferWriteWaitsInPercent = 'Escribir las esperas en %';
$strBulgarian = 'Búlgaro';
$strBusyPages = 'Páginas activas'; 
$strBzError = 'Si desea usar las opciones de compresión Bz2, deberá actualizar su php a una versión más reciente. phpMyAdmin no fue capaz de comprimir el dump debido a que está dañada o inaccesible la extensión Bz2 en esta versión de php. Le recomendamos que cambie el parámetro <code>$cfg[\'BZipDump\']</code> en su archivo de configuración phpMyAdmin a <code>FALSE</code>. Lea el reporte de "bugs" de php %s para mayor información.';
$strBzip = '"Comprimido con bzip"';

$strCalendar = 'Calendario';
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'No se cargaron los plugins de exportación.  Por favor, ¡revise su instalación!';
$strCanNotLoadImportPlugins = 'No se pudieron cargar los plugins de importación, por favor revise su instalación';
$strCannotLogin = 'El servidor MySQL no autorizó su ingreso';
$strCantLoad = 'no se pudo cargar la extensión %s,<br />por favor revise su configuración de PHP.';
$strCantLoadRecodeIconv = 'No se puede cargar iconv o recodificar una extensión necesaria para la conversión de juegos de caracteres, configure php para permitir el uso de estas extensiones o desactive la conversión de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No puede cambiar el nombre del índice a ¡PRIMARY!';
$strCantUseRecodeIconv = 'No se puede utilizar iconv ni libiconv ni la función recode_string mientras se carga la extensión de informes. Comprueba la configuración de php.';
$strCardinality = 'Cardinalidad';
$strCaseInsensitive = 'independiente de mayúsculas y minúsculas';
$strCaseSensitive = 'dependiente de mayúsculas y minúsculas';
$strCentralEuropean = 'Europeo central';
$strChange = 'Cambiar';
$strChangeCopyModeCopy = '...mantener el anterior.';
$strChangeCopyMode = 'Crear un nuevo usuario con los mismos privilegios y...';
$strChangeCopyModeDeleteAndReload = ' ...borrar el viejo de las tablas de usuario y luego volver a cargar los privilegios.';
$strChangeCopyModeJustDelete = ' ...borrar el viejo de las tablas de usuario.';
$strChangeCopyModeRevoke = ' ...revocar todos los privilegios activos del viejo y eliminarlo después.';
$strChangeCopyUser = 'Cambiar la información de la cuenta / Copiar el usuario';
$strChangeDisplay = 'Elegir el campo a mostrar';
$strChangePassword = 'Cambio de contraseña';
$strCharset = 'Juego de caracteres';
$strCharsetOfFile = 'Juego de caracteres del archivo:'; 
$strCharsetsAndCollations = 'Juego de caracteres y sus cotejamientos'; 
$strCharsets = 'Juegos de caracteres'; 
$strCheckAll = 'Marcar todos/as';
$strCheckOverhead = 'Marcar las tablas con residuo a depurar';
$strCheckPrivsLong = 'Revisar los privilegios para la base de datos &quot;%s&quot;.';
$strCheckPrivs = 'Revisar los privilegios';
$strCheckTable = 'Revisar la tabla';
$strChoosePage = 'Elegir la página a editar';
$strColComFeat = 'Mostrando los comentarios de la columna';
$strCollation = 'Cotejamiento';
$strColumnNames = 'Nombre de las columnas';
$strColumnPrivileges = 'Privilegios específicos para la columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCommentsForTable = 'COMENTARIOS PARA LA TABLA';
$strCompatibleHashing = 'Compatible con MySQL&nbsp;4.0';
$strCompleteInserts = 'Completar los INSERTS';
$strCompression = 'Compresión';
$strCompressionWillBeDetected = 'La compresión escogida para el archivo a importar se detectará automáticamente de: %s';
$strConfigDefaultFileError = 'No fue posible cargar la configuración predeterminada desde: "%1$s"';
$strConfigFileError = '¡phpMyAdmin no puede leer el fichero de configuración!<br />Esto puede suceder si php encuentra un error sintáctico en él o bien php no puede encontrar el fichero.<br />Intente acceder al fichero de configuración directamente mediante el siguiente enlace y compruebe el(los) mensaje(s) de error que reciba. En muchas ocasiones falta una coma o punto y coma en algún sitio.<br />Si recibe una página en blanco, todo está correcto.';
$strConfigureTableCoord = 'Configure las coordenadas para la tabla %s';
$strConnectionError = 'No se estableció la conexión: los parámetros están incorrectos.';
$strConnections = 'Conexiones';
$strConstraintsForDumped = 'Filtros para las tablas descargadas (dump)';
$strConstraintsForTable = 'Filtros para la tabla';
$strControluserFailed = 'La conexión para controluser, como está definida en su configuración, fracasó.';
$strCookiesRequired = 'Las "cookies" deben estar habilitadas.';
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'La base de datos %s ha sido copiada a %s';
$strCopyTable = 'Copiar la tabla a (base de datos<b>.</b>tabla):';
$strCopyTableOK = 'La tabla %s se copió a %s.';
$strCopyTableSameNames = '¡No es posible copiar la tabla a la misma!';
$strCouldNotKill = 'phpMyAdmin no fue capaz de destruir el proceso %s. Probablemente ya ha sido cerrado.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'CREAR BASE DE DATOS antes de copiar';
$strCreateIndex = 'Crear un índice en&nbsp;%s&nbsp;columna(s)';
$strCreateIndexTopic = 'Crear un nuevo índice';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en la base de datos %s';
$strCreatePage = 'Crear una nueva página';
$strCreatePdfFeat = 'Creación de los PDF';
$strCreateRelation = 'Crear relación';
$strCreateTable  = 'Crear tabla';
$strCreateUserDatabase = 'Base de datos para el usuario';
$strCreateUserDatabaseName = 'Crear base de datos con el mismo nombre y otorgue todos los privilegios';
$strCreateUserDatabaseNone = 'Ninguna';
$strCreateUserDatabaseWildcard = 'Otorgue todos los privilegios al nombre que contiene comodín (username\_%)';
$strCreationDates = 'Fechas de creación/actualización/revisión';
$strCriteria = 'Criterio';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Cirílico';
$strCzech = 'Checo';
$strCzechSlovak = 'Checo-Eslovaco';

$strDanish = 'Danés';
$strDatabase = 'Base de datos';
$strDatabaseEmpty = '¡El nombre de la base de datos está vacío!';
$strDatabaseExportOptions = 'Opciones de exportación de la base de datos';
$strDatabaseHasBeenDropped = 'La base de datos %s ha sido eliminada.';
$strDatabases = 'Bases de datos';
$strDatabasesDropped = '%s bases de datos han sido eliminadas exitosamente.';
$strDatabasesStatsDisable = 'Desactivar las estadísticas';
$strDatabasesStatsEnable = 'Activar las estadísticas';
$strDatabasesStats = 'Estadísticas de la base';
$strDatabasesStatsHeavyTraffic = 'Nota: Activar aquí las estadísticas de la base de datos podría causar tráfico pesado entre el servidor web y el servidor MySQL.';
$strData = 'Datos';
$strDataDict = 'Diccionario de datos';
$strDataOnly = 'Solamente datos';
$strDataPages = 'Páginas que contienen datos'; 
$strDBComment = 'Comentario de la base de datos: ';
$strDBCopy = 'Copiar la base de datos a';
$strDbIsEmpty = 'La base de datos, ¡parece estar vacía!';
$strDbPrivileges = 'Privilegios específicos para la base de datos';
$strDBRename = 'Cambiar el nombre de la base de datos a';
$strDbSpecific = 'específico para la base de datos';
$strDefaultEngine = '%s es el motor de almacenamiento predeterminado en este servidor MySQL.';
$strDefault = 'Predeterminado';
$strDefaultValueHelp = 'Para valores predeterminados, por favor ingrese solamente un valor, sin caracteres de escape \"\\\" ni comillas, usando este formato: a';
$strDefragment = 'Defragmentar la tabla';
$strDelayedInserts = 'Usar "inserts" con retraso';
$strDeleteAndFlush = 'Borrar a los usuarios y luego volver a cargar los privilegios.';
$strDeleteAndFlushDescr = 'Este es el modo más limpio, pero volver a cargar los privilegios puede tomar tiempo.';
$strDelete = 'Borrar';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas borradas: ';
$strDeleteNoUsersSelected = '¡No se han seleccionado usuarios para eliminar!';
$strDeleteRelation = 'Eliminar la relación';
$strDeleting = 'Borrando %s';
$strDelimiter = 'Delimitador';
$strDelOld = 'La página actual tiene referencias a tablas que ya no existen.  ¿Desea eliminar esas referencias?';
$strDescending = 'Descendente';
$strDescription = 'Descripción';
$strDesigner = 'Diseñador';
$strDesignerHelpDisplayField = 'El campo Display se halla en color rosado. Para activar o desactivar un campo como un campo Display, dé clic en el ícono "Seleccione el campo a mostrar", luego dé clic en el nombre apropiado del campo.';
$strDictionary = 'diccionario';
$strDirectLinks = 'Enlaces directos';
$strDirtyPages = 'Páginas que requieren ser depuradas'; 
$strDisabled = 'Deshabilitado';
$strDisableForeignChecks = 'Deshabilitar la revisión de las llaves extranjeras (foreign keys)';
$strDisplayFeat = 'Mostrar las opciones';  //Features = ¿opciones, componentes?
$strDisplayOrder = 'Mostrar en este orden:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Hacer una consulta (comodín: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentación';
$strDoYouReally = 'Realmente desea ';
$strDropDatabaseStrongWarning = '¡Está a punto de DESTRUIR una base de datos completa!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Eliminar las bases de datos que tienen los mismos nombres que los usuarios.';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDumpSaved = 'Su archivo (MySQL dump) ha sido guardado con el nombre %s.';
$strDumpXRows = 'Volcar %s filas empezando por la fila %s.';
$strDynamic = 'dinámico/a';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar las páginas PDF';
$strEditPrivileges = 'Editar los privilegios';
$strEffective = 'Efectivo/a';
$strEmptyResultSet = 'MySQL ha devuelto un valor vacío (i.e., cero columnas).';
$strEmpty = 'Vaciar';
$strEnabled = 'Habilitado';
$strEncloseInTransaction = 'Incluir lo exportado en una transacción';
$strEndCut = 'FIN DEL CORTE';
$strEnd = 'Fin';
$strEndRaw = 'FIN DEL VOLCADO';
$strEngineAvailable = '%s está disponible en este servidor MySQL.';
$strEngineDisabled = '%s ha sido deshabilitado para este motor de almacenamiento.';
$strEngines = 'Motores';
$strEngineUnsupported = 'Este servidor MySQL no es compatible con el motor de almacenamiento %s.'; 
$strEnglish = 'Inglés';
$strEnglishPrivileges = ' Nota: Los nombres de los privilegios de MySQL están expresados en inglés ';
$strError = 'Error';
$strErrorInZipFile = 'Error en el archivo ZIP:';
$strErrorRelationAdded = 'Error: no se añadió la relación.';
$strErrorRelationExists = 'Error: la relación ya existe.';
$strErrorRenamingTable = 'Error al cambiar el nombre de la tabla %1$s a %2$s';
$strErrorSaveTable = 'Error guardando las coordenadas para el Diseñador.';
$strEscapeWildcards = 'Los comodines _ y % deben acompañarse de \ para usarlos de manera literal';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonio';
$strEvent = 'Evento';
$strExcelEdition = 'Edición Excel';
$strExecuteBookmarked = 'Ejecute la consulta marcada previamente';
$strExplain = 'Explicar el SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exporte/Importe a escala';
$strExportMustBeFile = 'El formato de exportación seleccionado ¡debe grabarse en el archivo!';
$strExtendedInserts = 'INSERTs extendidos';
$strExtra = 'Extra';

$strFailedAttempts = 'Intentos fallidos';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Se eliminó el campo %s';
$strFieldInsertFromFileTempDirNotExists = 'Se detectó un error al trasladar el archivo cargado, ver FAQ 1.11';
$strFields = 'Campos';
$strFieldsEnclosedBy = 'Campos encerrados por';
$strFieldsEscapedBy = 'Caracter de escape';
$strFieldsTerminatedBy = 'Campos terminados en';
$strFileAlreadyExists = 'El archivo %s ya existe en el servidor, cambie el nombre del archivo o revise la opción de sobreescritura.';
$strFileCouldNotBeRead = 'No fue posible leer el archivo';
$strFileNameTemplateDescriptionDatabase = 'nombre de la base de datos';
$strFileNameTemplateDescription = 'Este valor es interpretado usando %1$sstrftime%2$s; así, usted puede usar cadenas de caracteres para formatear el tiempo. De manera adicional, sucederán las siguientes transformaciones: %3$s. El texto restante se mantendrá como está.';
$strFileNameTemplateDescriptionServer = 'nombre del servidor';
$strFileNameTemplateDescriptionTable = 'nombre de la tabla';
$strFileNameTemplate = 'Plantilla del nombre del archivo';
$strFileNameTemplateRemember = 'recordar la plantilla';
$strFiles = 'Archivos';
$strFileToImport = 'Archivo a importar';
$strFixed = 'fijo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obtiene los privilegios de los usuarios \'directamente de las tablas de privilegios MySQL\'. El contenido de estas tablas puede diferir de los privilegios que usa el servidor si es que se han realizado cambios manuales en él. En este caso, nuevamente deberá %scargar la página de privilegios%s antes de continuar.';
$strFlushQueryCache = 'Vaciar el cache de consultas';
$strFlushTables = 'Vaciar el cache de todas las tablas';
$strFlushTable = 'Vaciar el caché de la tabla ("FLUSH")';
$strFontSize = 'Tamaño del font';
$strForeignKeyError = 'Error creando llaves extranjeras (foreign keys).  Revise los tipos de datos';
$strFormat = 'Formato';
$strFormEmpty = '¡Falta un valor en el formulario!';
$strFreePages = 'Páginas libres'; 
$strFullText = 'Textos completos';
$strFunction = 'Función';
$strFunctions = 'Funciones';

$strGenBy = 'Generado por';
$strGeneralRelationFeat = 'Opciones de relación general';  //Features = ¿opciones, componentes?
$strGenerate = 'Generar';
$strGeneratePassword = 'Generar la contraseña';
$strGenTime = 'Tiempo de generación';
$strGeorgian = 'Georgiano';
$strGerman = 'Alemán';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegios globales';
$strGlobalValue = 'Valor global';
$strGo = 'Continuar';
$strGrantOption = 'Conceder';
$strGreek = 'Griego';
$strGzip = '"Comprimido con gzip"';

$strHandler = 'Gestor';
$strHasBeenAltered = 'fue modificada.';
$strHasBeenCreated = 'se creó.';
$strHaveToShow = 'Debe elegir al menos una columna para mostrar';
$strHebrew = 'Hebreo';
$strHelp = 'Ayuda';
$strHexForBLOB = 'Use hexadecimal para BLOB';
$strHide         = 'Ocultar';
$strHideShowAll = 'Ocultar/mostrar todo';
$strHideShowNoRelation = 'Ocultar/mostrar Tablas que no tengan relación';
$strHomepageOfficial = 'Página oficial de phpMyAdmin';
$strHome = 'Página de inicio';
$strHostEmpty = '¡¡El nombre del servidor está vacío!!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Húngaro';

$strIcelandic = 'Islandés';
$strId = 'Identificación';
$strIdxFulltext = 'Texto completo';
$strIEUnsupported = 'Internet Explorer no reconoce esa función.';
$strIgnoreDuplicates = 'Ignore las filas duplicadas';
$strIgnore = 'Ignorar';
$strIgnoreInserts = 'Usar la opción ignore inserts';
$strImportExportCoords = 'Importar/Exportar coordenadas para el esquema PDF';
$strImportFiles = 'Importar archivos';
$strImportFormat = 'Formato del archivo importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'La importación se ejecutó exitosamente, se ejecutaron %d consultas.';
$strIndexes = 'Índices';
$strIndexesSeemEqual = 'Los siguientes índices parecen ser idénticos y uno de ellos debe ser removido:';
$strIndexHasBeenDropped = 'El índice %s ha sido eliminado';
$strIndex = 'Índice';
$strIndexName = 'Nombre del índice&nbsp;:';
$strIndexType = 'Tipo de índice&nbsp;:';
$strIndexWarningTable = 'Problemas con los índices de la tabla `%s`';
$strInnoDBAutoextendIncrementDesc = 'El tamaño a incrementar para que se extienda el ancho de una tabla capaz de autoextenderse cuando se llena.'; 
$strInnoDBAutoextendIncrement = 'Incremente el valor AUTOEXTEND'; 
$strInnoDBBufferPoolSizeDesc = 'El tamaño de la memoria intermedia (búfer) usado por InnoDB para almacenar, en el cache, los datos e índices de sus tablas.';
$strInnoDBBufferPoolSize = 'Tamaño de la memoria (búfer) de tránsito común';
$strInnoDBDataFilePath = 'Archivos de datos'; 
$strInnoDBDataHomeDirDesc = 'La parte constante de la ruta del directorio para todos los archivos de datos InnoDB.'; 
$strInnoDBDataHomeDir = 'Directorio raíz de los datos';
$strInnoDBPages = 'páginas';
$strInnoDBRelationAdded = 'Se añadió la relación InnoDB';
$strInnodbStat = 'Estado del InnoDB';
$strInsecureMySQL = 'Su archivo de configuración contiene parámetros (root sin contraseña) que corresponden a la cuenta privilegiada predeterminada de MySQL. Su servidor de MySQL está usando estos valores, lo que constituye una vulnerabilidad.  Se le recomienda corregir esta brecha de seguridad.  Por ejemplo, desde la página de inicio de phpMyAdmin seleccione Privilegios y agregue la contraseña a root@localhost.  Deberá escribir la misma contraseña en config.inc.php de phpMyAdmin';
$strInsertAsNewRow = 'Insertar como una nueva fila';
$strInsertedRowId = 'Se insertó la ID de la fila:';
$strInsertedRows = 'Filas insertadas:';
$strInsert = 'Insertar';
$strInternalNotNecessary = '* No es necesaria una relación interna cuando también existe en InnoDB.';
$strInternalRelationAdded = 'Se añadió la relación interna';
$strInternalRelations = 'Relaciones internas';
$strInUse = 'en uso';
$strInvalidAuthMethod = 'El método de autenticación no es válido en la configuración actual:';
$strInvalidColumnCount = 'El número de columnas debe ser superior a cero.';
$strInvalidColumn = '¡Las columnas especificadas (%s) no son válidas!';
$strInvalidCSVFieldCount = 'El número de campos de los datos CSV en la línea %d no es válido.';
$strInvalidCSVFormat = 'El formato de los datos CSV en la línea %d no es válido.';
$strInvalidCSVParameter = 'Parámetro no válido para importar CSV: %s';
$strInvalidDatabase = 'La base de datos no es válida';
$strInvalidFieldAddCount = 'Debe añadir al menos un campo.';
$strInvalidFieldCount = 'La tabla debe tener al menos un campo.';
$strInvalidLDIImport = '¡Este plugin no tiene soporte para importaciones comprimidas!';
$strInvalidRowNumber = '%d no es un número de fila válido.';
$strInvalidServerHostname = 'El nombre del host no es válido para el servidor %1$s. Por favor, revise su configuración.';
$strInvalidServerIndex = 'No es válido el índice del servidor: "%s"';
$strInvalidTableName = 'El nombre de la tabla no es válido';

$strJapanese = 'Japonés';
$strJoins = 'Vínculos (Joins)';
$strJumpToDB = 'Saltar a la base de datos &quot;%s&quot;.';
$strJustDeleteDescr = 'Los usuarios &quot;borrados&quot; aún podrán acceder al servidor de manera usual hasta que los privilegios se hayan vuelto a cargar.';
$strJustDelete = 'Solamente borrar a los usuarios de la tabla de privilegios.';

$strKeepPass = 'No cambiar la contraseña';
$strKeyCache = 'Cache principal';
$strKeyname = 'Nombre de la clave';
$strKill = 'Matar el proceso';
$strKnownExternalBug = 'La funcionalidad %s está afectada por un fallo conocido, vea %s';
$strKorean = 'Coreano';

$strLandscape = 'Orientación horizontal';
$strLanguage = 'Idioma';
$strLanguageUnknown = 'Idioma desconocido: %1$s.';
$strLatchedPages = 'Páginas vinculadas';
$strLatexCaption = 'Subtitulado de la tabla';
$strLatexContent = 'Contenido de la tabla __TABLE__';
$strLatexContinuedCaption = 'Continuación del subtitulado de la tabla';
$strLatexContinued = '(continúa)';
$strLatexIncludeCaption = 'Incluir el subtitulado de la tabla';
$strLatexLabel = 'Clave de la etiqueta';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estructura de la tabla __TABLE__';
$strLatvian = 'Letón';
$strLDI = 'CSV usando LOAD DATA';
$strLDILocal = 'Use la palabra clave LOCAL';
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por página';
$strLinesTerminatedBy = 'Líneas terminadas en';
$strLinkNotFound = 'No se encontró el enlace';
$strLinksTo = 'Enlaces a';
$strLithuanian = 'Lituano';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localización del archivo de texto';
$strLoginInformation = 'Información de la cuenta';
$strLogin = 'Iniciar sesión';
$strLogout = 'Salir';
$strLogPassword = 'Contraseña:';
$strLogServer = 'Servidor';
$strLogUsername = 'Usuario:';
$strLongOperation = 'Esta operación podría tomar algún tiempo. ¿Proceder de todas formas?';

$strMaxConnects = 'Número máx. de conexiones concurrentes';
$strMaximalQueryLength = 'Longitud máxima de la consulta creada';
$strMaximumSize = 'Tamaño máximo: %s%s';
$strMbExtensionMissing = 'No se halló la extensión PHP mbstring y al parecer usted está usando tipografía multibyte. phpMyAdmin no puede cortar correctamente las cadenas de caracteres sin la extensión mbstring y podría dar resultados inesperados.';
$strMbOverloadWarning = 'Usted ha activado mbstring.func_overload en su configuración PHP. ¡Esta opción es incompatible con phpMyAdmin y podría causar la pérdida de algunos datos!';
$strMIME_available_mime = 'MIME-types disponibles';
$strMIME_available_transform = 'Transformaciones disponibles';
$strMIME_description = 'Descripción';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'No hay una descripción disponible para esta transformación.<br />Por favor pregunte al autor lo que %s hace.';
$strMIME_transformation_note = 'Para una lista de opciones de transformación disponibles y sus transformaciones MIME-type transformations, dé clic en %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Por favor ingrese los valores para las opciones de transformación usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez requiere insertar un Backslash ("\") o comilla sencilla ("\'") entre esos valores, use backslash (por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_transformation_options = 'Opciones de transformación';
$strMIME_transformation = 'Transformación del navegador';
$strMIMETypesForTable = 'TIPOS MIME PARA LA TABLA';
$strMIME_without = 'MIME-types impresos en itálicas no tienen una función de transformación adicional';
$strModifications = 'Se han guardado las modificaciones';
$strModifyIndexTopic = 'Modificar un índice';
$strModify = 'Modificar';
$strMoveMenu = 'Mover el Menú';
$strMoveTable = 'Mover tabla a (Base de datos<b>.</b>tabla):';
$strMoveTableOK = 'La tabla %s ha sido movida a %s.';
$strMoveTableSameNames = '¡No es posible mover la tabla a la misma!';
$strMultilingual = 'multilingüe';
$strMyISAMDataPointerSizeDesc = 'El tamaño predeterminado del puntero de datos en bytes, para su uso en CREATE TABLE para las tablas MyISAM cuando no se ha especificado la opción MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tamaño del puntero de datos';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si el archivo temporal usado para la generación rápida de índices MyISAM fuese mayor que el uso del key cache por la cantidad especificada aquí, preferir el método key cache.';
$strMyISAMMaxExtraSortFileSize = 'Tamaño máximo de los archivos temporales durante la generación del índice'; 
$strMyISAMMaxSortFileSizeDesc = 'El tamaño máximo del archivo temporal que MySQL puede generar mientras genera un nuevo índice MyISAM del archivo temporal (durante REPAIR TABLE, ALTER TABLE, o LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamaño máximo para los archivos temporales generados durante la organización';
$strMyISAMRecoverOptionsDesc = 'La modalidad para la recuperación automática de tablas MyISAM caídas catastróficamente, como fuera determinado mediante la opción al arranque del servidor --myisam-recover.'; 
$strMyISAMRecoverOptions = 'Modalidad de recuperación automática';
$strMyISAMRepairThreadsDesc = 'Si este valor es superior a 1, se generan en paralelo los índices de las tablas MyISAM (cada índice con su propio proceso) durante el proceso \"Reparar mediante organización\".';
$strMyISAMRepairThreads = 'Reparar los procesos'; 
$strMyISAMSortBufferSizeDesc = 'La cantidad de memoria que se asigna para organizar los índices MyISAM durante la operación REPAIR TABLE o cuando se generan índices con CREATE INDEX o ALTER TABLE.';
$strMyISAMSortBufferSize = 'Organizar el tamaño del búfer de memoria';
$strMySQLCharset = 'Juegos de caracteres de MySQL';
$strMysqlClientVersion = 'Versión del cliente';
$strMySQLConnectionCollation = 'Cotejamiento de las conexiones MySQL';
$strMysqlLibDiffersServerVersion = 'Su versión de librería PHP MySQL  %s es distinta de aquella de su versión de servidor MySQL %s. Esto puede ocasionar un comportamiento impredecible.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar información de tiempo de ejecución de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNext = 'Próxima';
$strNoActivity = 'No ha habido actividad desde hace %s o más segundos, por favor reingrese al sitio';
$strNoDatabases = 'No hay bases de datos';
$strNoDatabasesSelected = 'No se seleccionaron bases de datos.';
$strNoDataReceived = 'No se recibieron datos para importar. O no se envió el nombre del archivo, o el tamaño del archivo excedió el máximo permitido por su configuración PHP. Por favor, lea el FAQ 1.16.';
$strNoDescription = 'Sin descripción';
$strNoDetailsForEngine = 'No existe información detallada acerca de las condiciones en que se encuentra este motor de almacenamiento.';
$strNoDropDatabases = 'Los enunciados \"DROP DATABASE\" están deshabilitados.';
$strNoExplain = 'Salir de la explicación del SQL';
$strNoFilesFoundInZip = '¡No se hallaron archivos dentro del archivo ZIP!';
$strNoFrames = 'phpMyAdmin funciona mejor con un navegador que <b>reconoce frames</b>.';
$strNoIndex = '¡No se ha definido el índice!';
$strNoIndexPartsDefined = '¡No se han definido las partes del índice!';
$strNoModification = 'Sin cambios';
$strNone = 'Ninguna';
$strNo = 'No';
$strNoOptions = 'Este formato no tiene opciones';
$strNoPassword = 'Sin contraseña';
$strNoPermission = 'El servidor web no tiene permiso para guardar el archivo %s.';
$strNoPhp = 'Sin código PHP';
$strNoPrivileges = 'Sin privilegios';
$strNoRights = '¡Usted no tiene suficientes privilegios para estar aquí ahora!';
$strNoRowsSelected = 'No se seleccionaron filas';
$strNoSpace = 'No hay suficiente espacio para guardar el archivo %s.';
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNoThemeSupport = 'No existe soporte para Diseños personalizados (Themes), por favor, revise su configuración y/o sus temas en el directorio %s.';
$strNotNumber = '¡Ésto no es un número!';
$strNotOK = 'no recibió el OK';
$strNotSet = 'La tabla <b>%s</b> no fue hallada o no fue definida en %s';
$strNoUsersFound = 'Usuario(s) no encontrado(s).';
$strNoValidateSQL = 'Salir de la validación del SQL';
$strNull = 'Nulo';
$strNumberOfFields = 'Número de campos';
$strNumberOfTables = 'Número de tablas';
$strNumSearchResultsInTable = '%s resultado(s) en la tabla <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tablas';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Hoja de cálculo Open Document';
$strOpenDocumentText = 'Texto Open Document';
$strOpenNewWindow = 'Abrir nueva ventana de phpMyAdmin';
$strOperations = 'Operaciones';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimizar la tabla';
$strOptions = 'Opciones';
$strOr = 'O';
$strOverhead = 'Residuo a depurar';
$strOverwriteExisting = 'Sobreescribir el(los) archivo(s) existente(s)';

$strPageNumber = 'Número de página:';
$strPagesToBeFlushed = 'Páginas que serán eliminadas'; 
$strPaperSize = 'Tamaño del papel';
$strPartialImport = 'Importación parcial';
$strPartialText = 'Textos parciales';
$strPasswordChanged = 'La contraseña para %s se cambió exitosamente.';
$strPassword = 'Contraseña';
$strPasswordEmpty = '¡La contraseña está vacía!';
$strPasswordHashing = 'Hashing de la contraseña';
$strPasswordNotSame = '¡Las contraseñas no coinciden!';
$strPdfDbSchema = 'Esquema de la base de datos "%s" - Página %s';
$strPdfInvalidTblName = '¡La tabla "%s" no existe!';
$strPdfNoTables = 'No existen tablas';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genera un reporte conteniendo los datos de una sola tabla)';
$strPDFReportTitle = 'Título del reporte';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPersian = 'Persa';
$strPhoneBook = 'directorio telefónico';
$strPHP40203 = 'Usted está usando PHP 4.2.3, el cual tiene un error de codificación en cuanto a las "cadenas de caracteres multi-byte" (mbstring). Lea el reporte 19404 de PHP. No se recomienda el uso de phpMyAdmin con esta versión de PHP.';
$strPhp = 'Crear código PHP';
$strPHPVersion = 'Versión de PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Por favor, seleccione la clave primaria o una clave única';
$strPmaDocumentation = 'Documentación de phpMyAdmin';
$strPmaUriError = 'El contenido de <tt>$cfg[\'PmaAbsoluteUri\']</tt> ¡DEBE constar en config.inc.php!';
$strPmaWiki = 'Wiki del phpMyAdmin';
$strPolish = 'Polaco';
$strPortrait = 'Orientación vertical';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimaryKeyHasBeenDropped = 'La clave primaria ha sido eliminada';
$strPrimaryKeyName = 'El nombre de la clave primaria debe ser \"PRIMARY\"';
$strPrimaryKeyWarning = '("PRIMARY" <b>exclusivamente debe</b> ser el nombre de ¡una clave primaria!)';
$strPrimary = 'Primaria';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Previsualización para imprimir (documento completo)';
$strPrintView = 'Vista de impresión';
$strPrivDescAllPrivileges = 'Incluye todos los privilegios excepto GRANT (CONCEDER).';
$strPrivDescAlter = 'Permite alterar la estructura de las tablas existentes.';
$strPrivDescAlterRoutine = 'Permite alterar y eliminar las rutinas almacenadas.';
$strPrivDescCreateDb = 'Permite crear nuevas bases de datos y tablas.';
$strPrivDescCreateRoutine = 'Permite crear el almacenamiento de rutinas.';
$strPrivDescCreateTbl = 'Permite la creación de tablas nuevas.';
$strPrivDescCreateTmpTable = 'Permite la creación de tablas temporales.';
$strPrivDescCreateUser = 'Permite crear, eliminar y cambiar el nombre de las cuentas de usuario.';
$strPrivDescCreateView = 'Permite crear nuevas vistas.';
$strPrivDescDelete = 'Permite borrar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos y tablas.';
$strPrivDescDropTbl = 'Permite eliminar tablas.';
$strPrivDescExecute5 = 'Permite ejecutar las rutinas almacenadas.';
$strPrivDescExecute = 'Permite ejecutar procedimientos guardados; no tiene efecto en esta versión de MySQL.';
$strPrivDescFile = 'Permite importar y exportar datos de y hacia archivos.';
$strPrivDescGrant = 'Permite añadir usuarios y privilegios sin conectarse nuevamente a la tabla de privilegios.';
$strPrivDescIndex = 'Permite crear y eliminar índices.';
$strPrivDescInsert = 'Permite insertar y reemplazar datos.';
$strPrivDescLockTables = 'Permite poner candados a las tablas para el proceso actual.';
$strPrivDescMaxConnections = 'Limita el número de conexiones nuevas que el usuario puede abrir por hora.';
$strPrivDescMaxQuestions = 'Limita el número de consultas que el usuario puede enviar al servidor por hora.';
$strPrivDescMaxUpdates = 'Limita el número de comandos que cambian cualquier tabla o base de datos que el usuario puede ejecutar por hora.';
$strPrivDescMaxUserConnections = 'Limita el número de conexiones simultáneas que el usuario pueda tener.';
$strPrivDescProcess3 = 'Permite eliminar los procesos de otros usuarios.';
$strPrivDescProcess4 = 'Permite ver las consultas completas en la lista de procesos.';
$strPrivDescReferences = 'No tiene efecto en esta versión de MySQL.';
$strPrivDescReload = 'Permite volver a cargar los parámetros del servidor y depurar los cachés del servidor.';
$strPrivDescReplClient = 'Da el derecho al usuario para preguntar dónde están los "esclavos / masters".';
$strPrivDescReplSlave = 'Necesario para los "esclavos" de replicación.';
$strPrivDescSelect = 'Permite leer los datos.';
$strPrivDescShowDb = 'Concede acceso a la lista completa de bases de datos.';
$strPrivDescShowView = 'Permite llevar a cabo las consultas SHOW CREATE VIEW (MOSTRAR CREAR VER).';
$strPrivDescShutdown = 'Permite desconectar el servidor.';
$strPrivDescSuper = 'Permite la conexión, incluso si el número máximo de conexiones ha sido alcanzado; Necesario para la mayor parte de operaciones administrativas tales como montar parámetros de variables globales o matar procesos de otros usuarios.';
$strPrivDescUpdate = 'Permite cambiar los datos.';
$strPrivDescUsage = 'Sin privilegios.';
$strPrivileges = 'Privilegios';
$strPrivilegesReloaded = 'Los privilegios fueron cargados nuevamente de manera exitosa.';
$strProcedures = 'Procedimientos';
$strProcesses = 'Procesos';
$strProcesslist = 'Lista de procesos';
$strProfiling = 'Perfil/Perfilamiento';
$strProtocolVersion = 'Versión del protocolo';
$strPutColNames = 'Poner los nombres de campo en la primera hilera';

$strQBEDel = 'Borrar';
$strQBE = 'Generar una consulta';
$strQBEIns = 'Insertar';
$strQueryCache = 'Cache de consultas';
$strQueryFrame = 'Ventana de consulta';
$strQueryOnDb = 'Consulta a la base de datos <b>%s</b>:';
$strQueryResultsOperations = 'Operaciones sobre los resultados de la consulta';
$strQuerySQLHistory = 'Historial-SQL';
$strQueryStatistics = '<b>Estadísticas de consulta</b>: Desde su inicio, %s consultas han sido enviadas al servidor.';
$strQueryTime = 'La consulta tardó %01.4f seg';
$strQueryType = 'Tipo de consulta';
$strQueryWindowLock = 'No sobreescribir esta consulta desde fuera de la ventana';

$strReadRequests = 'Lea las solicitudes';
$strReceived = 'Recibido';
$strRecommended = 'recomendado';
$strRecords = 'Registros';
$strReferentialIntegrity = 'Comprobar la integridad referencial:';
$strRefresh = 'Actualizar';
$strRelationalSchema = 'Esquema relacionado';
$strRelationDeleted = 'La relación fue eliminada';
$strRelationNotWorking = 'Las opciones adicionales para trabajar con tablas vinculadas fueron desactivadas. Para saber porqué, dé clic %saquí%s.';  //Features = ¿opciones, componentes?
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
$strReplication = 'Replicación';
$strReset = 'Reiniciar';
$strResourceLimits = 'Límites de recursos';
$strRestartInsertion = 'Reinicie la inserción con %s filas';
$strReType = 'Debe volver a escribir';
$strRevokeAndDeleteDescr = 'Los usuarios aún tendrán el privilegio "USAGE" hasta que los privilegios se hayan vuelto a cargar.';
$strRevokeAndDelete = 'Revocar todos los privilegios activos de los usuarios y borrarlos después.';
$strRevokeMessage = 'Ha revocado los privilegios para %s';
$strRevoke = 'Revocar';
$strRomanian = 'Rumano';
$strRoutineReturnType = 'Muestre el tipo';
$strRoutines = 'Rutinas';
$strRowLength = 'Longitud de la fila';
$strRows = 'Filas';
$strRowsFrom = 'filas empezando de';
$strRowSize = ' Tamaño de la fila ';
$strRowsModeFlippedHorizontal = 'horizontal (encabezados rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s y repetir los encabezados cada %s celdas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadísticas de la fila';
$strRunning = 'ejecutándose en %s';
$strRunQuery = 'Ejecutar la consulta';
$strRunSQLQuery = 'Ejecutar la(s) consulta(s) SQL en la base de datos %s';
$strRunSQLQueryOnServer = 'Ejecute la o las consultas SQL en el servidor %s';
$strRussian = 'Ruso';

$strSave = 'Grabar';
$strSaveOnServer = 'Guardar en el servidor, en el directorio %s ';
$strSavePosition = 'Guardar posición';
$strScaleFactorSmall = 'El factor de la escala es demasiado pequeño para poner el esquema en una página';
$strSearch = 'Buscar';
$strSearchFormTitle = 'Buscar en la base de datos';
$strSearchInTables = 'En la(s) tabla(s):';
$strSearchNeedle = 'Palabra(s) o valor(es) a buscar (comodín: "%"):';
$strSearchOption1 = 'al menos una de estas palabras';
$strSearchOption2 = 'Todas las palabras';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'como expresión regular';
$strSearchResultsFor = 'Resultados de la búsqueda por "<i>%s</i>" %s:';
$strSearchType = 'Encontrado:';
$strSecretRequired = 'El archivo de configuración ahora necesita salvoconducto (una frase secreta) (blowfish_secret).';
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
$strServerChoice = 'Elección del servidor';
$strServerNotResponding = 'El servidor no está respondiendo';
$strServer = 'Servidor';
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Delayed inserts';
$strServerStatus = 'Información acerca del tiempo de ejecución del proceso principal';
$strServerStatusUptime = 'Este servidor MySQL ha estado activo durante %s. Se inició en %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Tráfico del servidor</b>: Estas tablas muestran las estadísticas de tráfico en la red de este servidor MySQL desde su inicio.';
$strServerVars = 'Variables y parámetros del servidor';
$strServerVersion = 'Versión del servidor';
$strSessionStartupErrorGeneral = 'Hubo errores al iniciar la sesión.  Por favor, revise los errores en la bitácora de su PHP y/o servidor web y configure correctamente su instalación PHP.';
$strSessionValue = 'Valor de la sesión';
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Mostrar todo';
$strShowColor = 'Mostrar color';
$strShowDatadictAs = 'Formato del Diccionario de Datos';
$strShowFullQueries = 'Mostrar las consultas enteras';
$strShowGrid = 'Mostrar la cuadrícula';
$strShowHideLeftMenu = 'Ocultar/mostrar menú izquierdo';
$strShowingBookmark = 'Mostrando el favorito';
$strShowingPhp = 'Mostrar como código PHP';
$strShowingRecords = 'Mostrando registros ';
$strShowingSQL = 'Mostrando la consulta SQL';
$strShow = 'Mostrar';
$strShowOpenTables = 'Mostrar las tablas que están abiertas';
$strShowPHPInfo = 'Mostrar la información de PHP';
$strShowSlaveHosts = 'Mostrar los hosts esclavos';
$strShowSlaveStatus = 'Mostrar el estado del esclavo';
$strShowStatusBinlog_cache_disk_useDescr = 'El número de transacciones que usaron el cache de log binario temporal pero que excedieron el valor del binlog_cache_size y usaron un archivo temporal para almacenar los enunciados de la transacción.';
$strShowStatusBinlog_cache_useDescr = 'El número de transacciones que usaron el cache de log binario temporal.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'El número de tablas temporales en el disco que fueron creados automáticamente por el servidor mientras ejecuta los enunciados. Si las tablas Created_tmp_disk_tables es grande, puede incrementar el valor de tmp_table_size para hacer que las tablas temporales se basen en memoria en lugar de basarse en disco.';
$strShowStatusCreated_tmp_filesDescr = 'El número de archivos temporales que fueron creados por mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'El número de tablas temporales in-memory creadas automáticamente por el servidor mientras se ejecutaban los enunciados.';
$strShowStatusDelayed_errorsDescr = 'El número de filas escritas con INSERT DELAYED en los cuales ocurrió algún error (probablemente una llave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'El número de procesos gestores INSERT DELAYED en uso. Cada tabla diferente en la cual uno usa INSERT DELAYED recibe su propio proceso.';
$strShowStatusDelayed_writesDescr = 'El número de filas INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'El número de enunciados FLUSH ejecutados.';
$strShowStatusHandler_commitDescr = 'El número de enunciados COMMIT internos.';
$strShowStatusHandler_deleteDescr = 'El número de veces que una fila fue eliminada de una tabla.';
$strShowStatusHandler_discoverDescr = 'El servidor MySQL puede solicitar al motor de almacenamiento NDB Cluster si conoce acerca de una tabla con un nombre dado. Esto se llama descubrimiento. Handler_discover indica el número ocasiones que las tablas han sido descubiertas.';
$strShowStatusHandler_read_firstDescr = 'El número de veces en que el primer registro ha sido leído desde un índice. Si este valor es alto, sugiere que el servidor está haciendo gran cantidad de escaneos completos del índice; por ejemplo, SELECT col1 FROM foo, asumiendo que col1 está indizado.';
$strShowStatusHandler_read_keyDescr = 'El número de solicitudes hechas para leer una fila basado en una llave. Si este valor es alto, es una buena indicación de que sus consultas y tablas están indizadas apropiadamente.';
$strShowStatusHandler_read_nextDescr = 'El número de solicitudes hechas para leer la siguiente fila en un orden clave. Este se incrementa si usted está consultando una columna índice con un limitante de rango o si usted está haciendo un escaneo del índice.';
$strShowStatusHandler_read_prevDescr = 'El número de solicitudes hechas para leer la fila previa en un orden clave. Este método de lectura se usa principalmente para optimizar a ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'El número de solicitudes hechas para leer una fila basado en una posición fija. Este es alto si usted está haciendo muchas consultas que requieren el reordenamiento del resultado. Usted probablemente tiene muchas consultas que requieren que MySQL escanee tablas enteras o usted debe tener vínculos (joins) que no usan las llaves de manera apropiada.';
$strShowStatusHandler_read_rnd_nextDescr = 'El número de solicitudes hechas para leer la siguiente fila en el archivo de datos. Este es alto si usted está haciendo muchos escaneos de tablas. Generalmente, esto sugiere que sus tablas no están indizadas apropiadamente o que sus consultas no están escritas para tomar ventaja de los índices que tiene.';
$strShowStatusHandler_rollbackDescr = 'El número de enunciados ROLLBACK internos.';
$strShowStatusHandler_updateDescr = 'El número de solicitudes hechas para actualizar una fila en una tabla.';
$strShowStatusHandler_writeDescr = 'El número de solicitudes hechas para insertar una fila en una tabla.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'El número de páginas conteniendo datos (sucias o limpias).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'El número de páginas actualmente sucias.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'El número de páginas en la memoria (búfer) de tránsito común que se ha solicitado sean vaciadas.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'El número de páginas libres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'El número de páginas aseguradas en la memoria (búfer) de tránsito común InnoDB. Estas son páginas en fase de lectura o escritura o que no pueden ser vaciadas o removidas por alguna otra razón.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'El número de páginas ocupadas porque han sido asignadas para overhead administrativo tales como row locks o el índice hash adaptativo. Este valor también puede ser calculado como Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamaño total de la memoria (búfer) de tránsito común, en páginas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'El número de read-aheads InnoDB "aleatorias" iniciadas. Esto sucede cuando una consulta va a escanear una gran porción de una tabla pero en orden aleatorio.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'El número de read-aheads InnoDB secuenciales iniciadas. Esto sucede cuando InnoDB hace un escaneo secuencial de la tabla completa.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'El número de solicitudes de lectura lógica hechas por InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'El número de lecturas lógicas que InnoDB no pudo satisfacer de la memoria (búfer) de tránsito común y donde fue necesario hacer lectura de página sencilla.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, las escrituras a la memoria de tránsito común InnoDB suceden en el trasfondo. Sin embargo, de ser necesario leer o crear una página y existen páginas limpias disponibles, es necesario esperar que las páginas sean vaciadas previamente. Este contador cuenta las instancias de estas esperas. Si los parámetros del tamaño de la memoria de tránsito común se fijaron apropiadamente, este valor será pequeño.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'El número de escrituras hechas a la memoria de tránsito común InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'El número de operaciones fsync() hechas hasta el momento.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'El número actual de operaciones fsync() pendientes.';
$strShowStatusInnodb_data_pending_readsDescr = 'El número actual de lecturas pendientes.';
$strShowStatusInnodb_data_pending_writesDescr = 'El número actual de escrituras pendientess.';
$strShowStatusInnodb_data_readDescr = 'El número de datos leídos hasta el momento, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'El número total de lectura de datos.';
$strShowStatusInnodb_data_writesDescr = 'El número total de escritura de datos.';
$strShowStatusInnodb_data_writtenDescr = 'La cantidad de datos escritas hasta el momento, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'El número de escrituras doublewrite que se han ejecutado y el número de páginas escritas con este propósito.';
$strShowStatusInnodb_dblwr_writesDescr = 'El número de escrituras doublewrite que se han ejecutado y el número de páginas escritas con este propósito.';
$strShowStatusInnodb_log_waitsDescr = 'El número de esperas generadas porque la memoria (búfer) log fue demasiado pequeña y hubo que esperar a que fuera vaciada antes de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'El número de solicitudes de escritura al log.';
$strShowStatusInnodb_log_writesDescr = 'El número de escrituras físicas al archivo log.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'El número de escrituras fsyncs hechas al archivo log.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'El número de fsyncs pendientes al archivo log.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escrituras pendientes al archivo log.';
$strShowStatusInnodb_os_log_writtenDescr = 'El número de bytes escritos al archivo log.';
$strShowStatusInnodb_pages_createdDescr = 'El número de páginas creadas.';
$strShowStatusInnodb_page_sizeDescr = 'El tamaño de página InnDB precompilado (por omisión 16KB). Muchos valores son contados por páginas; el tamaño de la página permite que pueda convertirse fácilmente a bytes.';
$strShowStatusInnodb_pages_readDescr = 'El número de páginas leídas.';
$strShowStatusInnodb_pages_writtenDescr = 'El número de páginas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'El número de row locks que actualmente están en espera.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'El tiempo promedio para adquirir un row lock, en milisegundos.';
$strShowStatusInnodb_row_lock_timeDescr = 'El total de tiempo invertido para adquirir los row locks, en milisegundos.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'El tiempo máximo para adquirir un row lock, en milisegundos.';
$strShowStatusInnodb_row_lock_waitsDescr = 'El número de veces que un row lock tuvo que esperarse.';
$strShowStatusInnodb_rows_deletedDescr = 'El número de filas eliminadas de tablas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'El número de filas insertadas en tablas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'El número de filas leídas de las tablas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'El número de filas actualizadas en tablas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'El número de key blocks en el key cache que han cambiado pero que aún no han sido vaciados al disco. Antes se conocía como Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'El número de bloques sin usar en el key cache. Puede usar este valor para determinar cuánto del key cache está en uso.';
$strShowStatusKey_blocks_usedDescr = 'El número de bloques usados en el key cache. Este valor es un marcador de desbordamiento que indica el número máximo de bloques que algún momento se llegaron a usar.';
$strShowStatusKey_read_requestsDescr = 'El número de solicitudes para leer un key block desde el cache.';
$strShowStatusKey_readsDescr = 'El número de lecturas físicas del key block desde el disco. Si el Key_reads es grande, entonces el valor key_buffer_size probablemente es demasiado pequeño. La tasa de fallos en el cache puede calcularse como Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'El número de solicitudes para escribir un key block al cache.';
$strShowStatusKey_writesDescr = 'El número de escrituras físicas a un key block al disco.';
$strShowStatusLast_query_costDescr = 'El costo total de la última consulta compilada como fuera computada por el optimizador de consultas. Es útil para comparar el costo de diferentes planes de consulta para una misma consulta. El valor por omisión de 0 significa que ninguna consulta ha sido compilada todavía.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'El número de filas esperando ser escritas en las colas INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'El número de tablas que han sido abiertas. Si el número de tablas abiertas es grande, su valor del cache de tabla probablemente es muy pequeño.';
$strShowStatusOpen_filesDescr = 'El número de archivos que están abiertos.';
$strShowStatusOpen_streamsDescr = 'El número de flujos de datos que están abiertos (usado principalmente para alimentar a los logs).';
$strShowStatusOpen_tablesDescr = 'El número de tablas que están abiertas.';
$strShowStatusQcache_free_blocksDescr = 'El número de bloques de memoria libre en el cache de consultas.';
$strShowStatusQcache_free_memoryDescr = 'La cantidad de memoria libre para el cache de consultas.';
$strShowStatusQcache_hitsDescr = 'El número de hits al cache.';
$strShowStatusQcache_insertsDescr = 'El número de consultas añadidos al cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'El número de consultas que han sido removidos del cache para liberar la memoria para poner nuevas consultas en el cache. Esta información puede ayudar a afinar el tamaño del cache de consultas. El cache de consultas usa la estrategia Least Recently Used (LRU) para decidir cuáles consultas deben ser removidas del cache.';
$strShowStatusQcache_not_cachedDescr = 'El número de consultas que no ingresaron al cache (porque no es posible o porque el parámetro no está activado en query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'El número de consultas registradas en el cache.';
$strShowStatusQcache_total_blocksDescr = 'El número total de bloques en el cache de consultas.';
$strShowStatusReset = 'Resetear';
$strShowStatusRpl_statusDescr = 'El estado de la replicación a prueba de fallos (aún no ha sido implementada).';
$strShowStatusSelect_full_joinDescr = 'El número de vínculos (joins) que no usan índices. Si este valor no es 0, deberá revisar los índices de sus tablas cuidadosamente.';
$strShowStatusSelect_full_range_joinDescr = 'El número de vínculos (joins) que usaron búsqueda por rangos en una tabla de referencias.';
$strShowStatusSelect_range_checkDescr = 'El número de vínculos (joins) sin keys que revisan el uso de key luego de cada fila. (Si no es 0, deberá revisar los índices de sus tablas cuidadosamente.)';
$strShowStatusSelect_rangeDescr = 'El número de vínculos (joins) que usaron rangos en la primera tabla. (Normalmente no es crítico aun cuando sea grande.)';
$strShowStatusSelect_scanDescr = 'El número de vínculos (joins) que hicieron un escaneo completo de la primera tabla.';
$strShowStatusSlave_open_temp_tablesDescr = 'El número de tablas temporales actualmente abiertas por el proceso SQL esclavo.';
$strShowStatusSlave_retried_transactionsDescr = 'Número total de veces (desde el arranque) que el proceso SQL esclavo de replicación ha reintentado hacer transacciones.';
$strShowStatusSlave_runningDescr = 'Está ENCENDIDO si este servidor es un esclavo que está conectado a un master.';
$strShowStatusSlow_launch_threadsDescr = 'El número de procesos que han tomado más de los segundos registrados en slow_launch_time para crear.';
$strShowStatusSlow_queriesDescr = 'El número de consultas que han tomado más segundos que los registrados en long_query_time.';
$strShowStatusSort_merge_passesDescr = 'El número de pasadas de fusión (merge) que el algoritmo organizar ha debido hacer. Si este valor es grande, debe considerar incrementar el valor de la varible de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'El número de consultas organizar que se ejecutaron con rangos.';
$strShowStatusSort_rowsDescr = 'El número de filas sorted.';
$strShowStatusSort_scanDescr = 'El número de consultas organizar que se hicieron escaneando la tabla.';
$strShowStatusTable_locks_immediateDescr = 'El número de veces que un table lock fue adquirido inmediatamente.';
$strShowStatusTable_locks_waitedDescr = 'El número de veces que un table lock no pudo adquirirse inmediatamente y fue necesaria una espera. Si este valor es alto, y hay problemas de rendimiento, primero deberá optimizar sus consultas, y luego, ya sea partir sus tablas o usar replicación.';
$strShowStatusThreads_cachedDescr = 'El número de procesos en el cache de procesos. La tasa de hits al cache puede calcularse como Threads_created/Connections. Si este valor es rojo, debe incrementar su thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'El número de conexiones abiertas actualmente.';
$strShowStatusThreads_createdDescr = 'El número de procesos creados para manejar las conexiones. Si Threads_created es grande, querrá incrementar el valor thread_cache_size. (Normalmente esto no aporta una mejoría notable en el rendimiento si usted tiene una buena implementación de procesos.)';
$strShowStatusThreads_runningDescr = 'El número de procesos que no están en reposo.';
$strShowTableDimension = 'Mostrar la dimensión de las tablas';
$strShowTables = 'Mostrar las tablas';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strSimplifiedChinese = 'Chino simplificado';
$strSingly = '(solamente)';
$strSize = 'Tamaño';
$strSkipQueries = 'Número de registros (consultas) a saltarse desde el inicio';
$strSlovak = 'Eslovaco'; 
$strSlovenian = 'Esloveno';
$strSmallBigAll = 'Pequeño/grande todos';
$strSnapToGrid = 'Cuadrícula magnética';
$strSocketProblem = '(o el socket del servidor MySQL local no está configurado correctamente)';
$strSortByKey = 'Organizar según la clave';
$strSorting = 'Organizando (sorting)';
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado';
$strSpanish = 'Español';
$strSplitWordsWithSpace = 'Palabras separadas por un espacio (" ").';
$strSQLCompatibility = 'Modalidad compatible con SQL';
$strSQLExportType = 'Tipo de exportación';
$strSQLParserBugMessage = 'Hay la posibilidad de que usted haya encontrado un error en el intérprete de SQL. Por favor examine cuidadosamente su consulta, y verifique que las comillas están siendo usadas adecuadamente y hacen juego. Otra posible causa del fallo es que usted este subiendo un archivo con datos binarios por fuera del área de texto delimitado. Intente su consulta en la interfaz de comandos de MySQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema. Si aún tiene problemas o el intérprete falla en tanto que en la interfaz de comandos funciona, por favor reduzca la salida de su consulta de SQL a la consulta que genera el problema, y envíe un reporte de error con la cadena de datos en la sección de CORTE indicada abajo:';
$strSQLParserUserError = 'Parece haber un error en su consulta de SQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema.';
$strSQLQuery = 'consulta SQL';
$strSQLResult = 'Resultado SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'El identificador no es válido';
$strSQPBugUnclosedQuote = 'Comillas sin cerrar';
$strSQPBugUnknownPunctuation = 'Signo de puntuación desconocido';
$strStandInStructureForView = 'Estructura Stand-in para la vista';
$strStatCheckTime = 'Última revisión';
$strStatCreateTime = 'Creación';
$strStatement = 'Enunciado';
$strStatisticsOverrun = 'En un servidor que se encuentra ejecutando procesos, los contadores de bytes pueden excederse.  Por tanto, las estadísticas reportadas por el servidor MySQL pueden estar incorrectas.';
$strStatUpdateTime = 'Última actualización';
$strStatus = 'Estado actual';
$strStorageEngine = 'Motor de almacenamiento';
$strStorageEngines = 'Motores de almacenamiento';
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucExcelCSV = 'CSV para datos de MS Excel';
$strStrucNativeExcel = 'Datos de MS Excel en formato nativo';
$strStrucOnly = 'Únicamente la estructura ';
$strStructPropose = 'Planteamiento de la estructura de tabla';
$strStructure = 'Estructura';
$strStructureForView = 'Estructura para la vista';
$strSubmit = 'Enviar';
$strSuccess = 'Su consulta se ejecutó con éxito';
$strSuhosin = 'El servidor está utilizando Suhosin. Por favor, refiérase a %sdocumentation%s para posibles ajustes.';
$strSum = 'Número de filas';
$strSwedish = 'Sueco';
$strSwitchToDatabase = 'Seleccionar la base de datos copiada';
$strSwitchToTable = 'Cambiar (switch) a la tabla copiada';

$strTableAlreadyExists = '¡La tabla %s ya existe!';
$strTableComments = 'Comentarios de la tabla';
$strTableEmpty = '¡El nombre de la tabla está vacío!';
$strTableHasBeenDropped = 'Se ha eliminado la tabla %s';
$strTableHasBeenEmptied = 'Se ha vaciado la tabla %s';
$strTableHasBeenFlushed = 'Se ha vaciado el caché de la tabla %s';
$strTableIsEmpty = 'La tabla, ¡parece estar vacía!';
$strTableMaintenance = 'Mantenimiento de la tabla';
$strTableName = 'Nombre de la tabla';
$strTableOfContents = 'Tabla de contenidos';
$strTableOptions = 'Opciones de la tabla';
$strTables = '%s tabla(s)';
$strTableStructure = 'Estructura de tabla para la tabla';
$strTable = 'Tabla';
$strTakeIt = 'tómelo';
$strTblPrivileges = 'Privilegios específicos para la tabla';
$strTempData = 'Datos temporales';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo podría no ser editable ';
$strThai = 'Tailandés';
$strThemeDefaultNotFound = '¡No se halló la plantilla de interfaz (theme) predeterminada %s!';
$strThemeNoPreviewAvailable = 'No existe una previsualización disponible.';
$strThemeNotFound = '¡No se halló la plantilla de interfaz (theme) %s!';
$strThemeNoValidImgPath = '¡No se halló la ruta de imágenes para la plantilla de interfaz (theme) %s!';
$strThemePathNotFound = '¡No se halló la ruta de la plantilla de interfaz (theme) para la plantilla %s!';
$strTheme = 'Tema / Estilo';
$strThisHost = 'Este Host';
$strThreads = 'Procesos';
$strThreadSuccessfullyKilled = 'El proceso %s fue destruido exitosamente.';
$strTimeoutInfo = 'Se agotó el tiempo de ejecución en la importación previa; si lo reenvía continuará desde la posición %d.';
$strTimeoutNothingParsed = 'Sin embargo, en la ejecución más reciente no se procesaron datos.  Esto usualmente significa que phpMyAdmin no será capaz de completar esta importación a menos que usted incremente el tiempo de ejecución de php.';
$strTimeoutPassed = 'Se ha agotado el tiempo de ejecución del script; si desea completar la importación, por favor, reenvíe el mismo archivo y la importación continuará.';
$strTime = 'Tiempo';
$strToFromPage = 'página de/a la';
$strToggleScratchboard = 'cambiar el estado del scratchboard';
$strToggleSmallBig = 'Alterne entre pequeño y grande';
$strToSelectRelation = 'Para seleccionar la relación, dé clic en:';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Chino tradicional';
$strTraditionalSpanish = 'Español tradicional';
$strTraffic = 'Tráfico';
$strTransactionCoordinator = 'Coordinador de transacción';
$strTransformation_application_octetstream__download = 'Mostrar un enlace para descargar los datos binarios de un campo. La primera opción es el nombre del archivo binario.  La segunda opción es un nombre de campo factible de una fila de la tabla que contiene el nombre del campo. Si usted aporta una segunda opción, necesariamente deberá consignar la primera opción a una cadena de caracteres vacía';
$strTransformation_application_octetstream__hex = 'Muestra los datos en representación hexadecimal. El primer parámetro es opcional y especifica cuán a menudo se añadirá espacio (2 nibbles, es decir, 1 byte de manera predeterminada).';
$strTransformation_image_jpeg__inline = 'Muestra un thumbnail que puede abrirse mediante un clic; opciones: width, height en píxeles (mantiene la proporción original)';
$strTransformation_image_jpeg__link = 'Muestra un enlace a esta imagen (i.e., blob descarga directa).';
$strTransformation_image_png__inline = 'Ver imagen/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Toma un campo TIME, TIMESTAMP o DATETIME y lo formatea usando su formato de fechas local. La primera opción es el offset (en horas) que se añadirá al timestamp (Predeterminado: 0). La segunda opción es un dateformat diferente de acuerdo con los parámetros disponibles para el strftime() del PHP. La tercera opción determina si usted quiere ver la fecha local o la UTC (use strings "local" o "utc") para eso. Según eso, el formato de la fecha tendrá un valor diferente - para "local" mire la documentación para la función strftime() del PHP y para "utc" se hace usando la función gmdate().';
$strTransformation_text_plain__external = 'LINUX SOLAMENTE: Ejecuta una aplicación externa y alimenta el fielddata mediante input estándar. Retorna el output estándar de la aplicación. El predeterminado es Tidy, para mostrar código HTML agradable para la impresión. Por razones de seguridad, debe editar manualmente el archivo libraries/transformations/text_plain__external.inc.php e insertar las herramientas que permitirá se ejecuten. La primera opción será el número del programa que querrá utilizar y la segunda opción son los parámetros para el programa. El tercer parámetro, de ser 1 convertirá el output usando htmlspecialchars() (el predeterminado es 1). Un cuarto parámetro, de ser 1 pondrá un NOWRAP a la celda de contenido para que todo el output se muestre sin reformatear (Predeterminado 1)';
$strTransformation_text_plain__formatted = 'Mantiene el formato original del campo. No se puede hacer Escape.';
$strTransformation_text_plain__imagelink = 'Muestra una imagen y un enlace, el campo contiene el nombre del archivo; la primera opción es un prefijo como "http://dominio.com/", la segunda opción es el ancho en píxeles, el tercero es el alto.';
$strTransformation_text_plain__link = 'Muestra un enlace, el campo contiene el nombre del archivo; la primera opción es un prefijo como "http://dominio.com/", la segunda opción es un título para el enlace.';
$strTransformation_text_plain__sql = 'Formatea el texto como una consulta SQL y resalta la sintaxis.';
$strTransformation_text_plain__substr = 'Muestra una parte de una cadena de caracteres. La primera opción es el número de caracteres a pasar por alto desde el principio de la cadena de caracteres (Predeterminado: 0). La segunda opción es el número de caracteres a mostrar (Predeterminado: hasta el final de la cadena de caracteres). La tercera opción es la cadena de caracteres a adjuntar y/o anteponer cuando haya truncamiento (Predeterminado: "...").';
$strTriggers = '(Evento) desencadenante';
$strTruncateQueries = 'Truncar las consultas que ya se han mostrado';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraniano';
$strUncheckAll = 'Desmarcar todos';
$strUnicode = 'Unicode';
$strUnique = 'Único';
$strUnknown = 'desconocido';
$strUnselectAll = 'Deseleccionar todo';
$strUnsupportedCompressionDetected = 'Usted intentó cargar un archivo con un tipo de compresión desconocido (%s). Este tipo de compresión puede no estar implementado o quizá no ha sido habilitado en su archivo de configuración.';
$strUpdatePrivMessage = 'Ha actualizado los privilegios para %s.';
$strUpdateProfileMessage = 'Se actualizó el perfil.';
$strUpdateQuery = 'Modificar la consulta';
$strUpdComTab = 'Para actualizar su tabla Columna_comentarios (Column_comments), por favor revise la documentación';
$strUpgrade = 'Usted debería actualizar su %s a la versión %s o más reciente.';
$strUploadErrorCantWrite = 'No fue posible grabar el archivo al disco.';
$strUploadErrorExtension = 'La carga del archivo fue detenida por extensión.';
$strUploadErrorFormSize = 'El archivo que intentó cargar excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.';
$strUploadErrorIniSize = 'El archivo que intentó cargar excede la directiva upload_max_filesize en php.ini.';
$strUploadErrorNoTempDir = 'No existe una carpeta temporal.';
$strUploadErrorPartial = 'El archivo que intentó cargar no alcanzó el 100%.';
$strUploadErrorUnknown = 'Error desconocido durante la carga del archivo.';
$strUploadLimit = 'Usted probablemente intentó cargar un archivo demasiado grande.  Por favor, refiérase a %sdocumentation%s para hallar modos de superar esta limitante.';
$strUploadsNotAllowed = 'No está permitido subir archivos a este servidor.';
$strUsage = 'Uso';
$strUseBackquotes = 'Usar "backquotes" con tablas y nombres de campo';
$strUsedPhpExtensions = 'Extensiones PHP utilizadas';
$strUseHostTable = 'Usar la tabla Anfitrión (Host)';
$strUserAlreadyExists = '¡El usuario %s ya existe!';
$strUserEmpty = '¡El nombre de usuario está vacío!';
$strUserName = 'Nombre de usuario';
$strUserNotFound = 'El usuario que seleccionó no se halló en la tabla de privilegios.';
$strUserOverview = 'Vista global de usuarios';
$strUsersDeleted = 'Los usuarios seleccionados fueron borrados exitosamente.';
$strUsersHavingAccessToDb = 'Usuarios con acceso a &quot;%s&quot;';
$strUser = 'Usuario';
$strUseTabKey = 'Use la tecla TAB para saltar de un valor a otro, o CTRL+flechas para moverse a cualquier parte';
$strUseTables = 'Usar tablas';
$strUseTextField = 'Use el campo de texto';
$strUseThisValue = 'Use este valor';

$strValidateSQL = 'Validar el SQL';
$strValidatorError = 'El validador de SQL no pudo inicializarse. Por favor revise si ha instalado las extensiones php necesarias, como están descritas en la %sdocumentación%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strVersionInformation = 'Acerca de esta versión';
$strViewDumpDatabases = 'Ver el volcado (schema) de la base de datos';
$strViewDumpDB = 'Ver el volcado esquema de la base de datos';
$strViewDump = 'Mostrar el volcado esquema de la tabla';
$strViewHasBeenDropped = 'Se descartó el modo de visualización %s';
$strViewMaxExactCount = 'Esta visualización tiene más de %s filas. Por favor, refiérase a la %sdocumentación%s.';
$strViewName = '(VIEW) VER nombre';
$strView = 'Visualizar';

$strWebServerUploadDirectory = 'directorio en el servidor web para subir los archivos';
$strWebServerUploadDirectoryError = 'No está disponible el directorio que usted habilitó para subir las tareas';
$strWelcome = 'Bienvenido a %s';
$strWestEuropean = 'Europea occidental';
$strWildcard = 'comodín';
$strWindowNotFound = 'La ventana del navegador no pudo actualizarse. Quizá cerró la ventana principal o su navegador está bloqueando las actualizaciones en ventanas múltiples debido a sus parámetros de seguridad.';
$strWithChecked = 'Para los elementos que están marcados:';
$strWriteRequests = 'Escribir las solicitudes';
$strWrongUser = 'El nombre de usuario o la contraseña está equivocado. El acceso fue denegado.';

$strXML = 'XML';

$strYes = 'Sí';

$strZeroRemovesTheLimit = 'Nota: si cambia los parámetros de estas opciones a 0 (cero), remueve el límite.';
$strZip = '"comprimido con zip"';

?>
