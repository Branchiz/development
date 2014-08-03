<?php
/* $Id: brazilian_portuguese-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */
/* translated by: Airon Luis Pereira <airon(dot)pereira(at)gmail(dot)com> */ 

$charset = 'iso-8859-1'; 
$text_dir = 'ltr';  // ('ltr' da esquerda para direita, 'rtl' da direita para esquerda)
$number_thousands_separator = ','; 
$number_decimal_separator = '.'; 
// abrevia��es para Byte, Kilo, Mega, Giga, Tera, Peta, Exa 
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB'); 

$mysql_4_1_doc_lang = 'pt';

$day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'); 
$month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'); 
// Veja http://www.php.net/manual/en/function.strftime.php para definir
// as vari�veis abaixo
$datefmt = '%B %d, %Y as %I:%M %p'; 

$timespanfmt = '%s dias, %s horas, %s minutos e %s segundos'; 

$strAbortedClients = 'Abortado'; 
$strAccessDenied = 'Acesso negado'; 
$strAccessDeniedCreateConfig = 'A prov�vel raz�o para isso � que voc� n�o criou o arquivo de configura��o. Voc� deve usar o %1$ssetup script%2$s para criar um.';
$strAccessDeniedExplanation = 'phpMyAdmin tentou se conectar no servidor MySQL e a conx�o foi recusada. Voc� deve checar o servidor, nome de usu�rio e senha no config.inc.php e se certificar que correspondam com as informa��es fornecidas pelo administrador do servidor MySQL.'; 
$strAction = 'A��o'; 
$strAddAutoIncrement = 'Adicionar valor AUTO_INCREMENT'; 
$strAddClause = 'Adicionar %s';
$strAddConstraints = 'Adicionar restri��es'; 
$strAddDeleteColumn = 'Adicionar/Remover colunas'; 
$strAddDeleteRow = 'Adicionar/Remover crit�rios de busca'; 
$strAddFields = 'Adicionar %s campo(s)'; 
$strAddHeaderComment = 'Adicionar coment�rio pessoal no cabe�alho (\\n quebra linhas)'; 
$strAddIntoComments = 'Adicionar nos coment�rios'; 
$strAddNewField = 'Adicionar novo campo'; 
$strAddPrivilegesOnDb = 'Adicionar privil�gios nas seguintes Banco de Dados'; 
$strAddPrivilegesOnTbl = 'Adicionar privil�gios nas seguintes tabelas'; 
$strAddSearchConditions = 'Condi��o de Pesquisa (complemento da cl�usula "onde"):'; 
$strAddToIndex = 'Adicionar ao �ndice &nbsp;%s&nbsp;coluna(s)'; 
$strAddUser = 'Adicionar novo usu�rio'; 
$strAddUserMessage = 'Adicionado usu�rio'; 
$strAdministration = 'Administra��o'; 
$strAffectedRows = 'Registro(s) afetado(s):'; 
$strAfter = 'Depois %s'; 
$strAfterInsertBack = 'Retornar'; 
$strAfterInsertNewInsert = 'Inserir novo registro'; 
$strAfterInsertNext = 'Editar pr�ximo registro'; 
$strAfterInsertSame = 'Voltar para esta p�gina'; 
$strAllowInterrupt = 'Permitir interromper a importa��o caso se detecte que o script demorar� perto do tempo limite. Isso pode ser um bom caminho para importar arquivos grandes, entretanto isso pode interromper as transa��es.';
$strAllTableSameWidth = 'mostrar todas as tabelas com o mesmo tamanho?'; 
$strAll = 'Todos'; 
$strAlterOrderBy = 'Alterar tabela ordenada por'; 
$strAnalyzeTable = 'Analizar tabela'; 
$strAnd = 'E'; 
$strAndThen = 'e ent�o';
$strAngularLinks = 'Links Angulares';
$strAnIndex = 'Um �ndice foi adicionado a %s'; 
$strAnyHost = 'Qualquer servidor'; 
$strAny = 'Qualquer'; 
$strAnyUser = 'Qualquer usu�rio'; 
$strApproximateCount = 'Pode ser aproximado. Veja o FAQ 3.11'; 
$strAPrimaryKey = 'Uma chave prim�ria foi adicionada a %s'; 
$strArabic = '�rabe'; 
$strArmenian = 'Arm�no'; 
$strAscending = 'Ascendente'; 
$strAtBeginningOfTable = 'No in�cio da tabela'; 
$strAtEndOfTable = 'No final da tabela'; 
$strAttr = 'Atributos'; 
$strAutomaticLayout = 'Leiaute autom�tico'; 

$strBack = 'Voltar'; 
$strBaltic = 'B�ltico'; 
$strBeginCut = 'INICIO CORTE'; 
$strBeginRaw = 'INICIO CRU'; 
$strBinary = ' Bin�rio '; 
$strBinaryDoNotEdit = ' Bin�rio - n�o edite '; 
$strBinaryLog = 'Log bin�rio'; 
$strBinLogEventType = 'Tipo de evento'; 
$strBinLogInfo = 'Informa��o'; 
$strBinLogName = 'Nome do log'; 
$strBinLogOriginalPosition = 'Posi��o original'; 
$strBinLogPosition = 'Posi��o'; 
$strBinLogServerId = 'ID do Servidor'; 
$strBookmarkAllUsers = 'Deixar qualquer usu�rio acessar esse marcador'; 
$strBookmarkCreated = 'Marcador %s criado';
$strBookmarkDeleted = 'O marcador foi removido.'; 
$strBookmarkLabel = 'Nome'; 
$strBookmarkQuery = 'Consulta SQL gravada'; 
$strBookmarkReplace = 'Substituir marcador de mesmo nome existente';
$strBookmarkThis = 'Gravar essa consulta SQL'; 
$strBookmarkView = 'Apenas visualizar'; 
$strBrowseDistinctValues = 'Navegador distingue valores';
$strBrowseForeignValues = 'Visualizar valores estrangeiros'; 
$strBrowse = 'Visualizar'; 
$strBufferPoolActivity = 'Atividade do Buffer Pool';
$strBufferPool = 'Buffer Pool';
$strBufferPoolUsage = 'Uso do Buffer Pool';
$strBufferReadMissesInPercent = 'Leitura falhou em %';
$strBufferReadMisses = 'Leitura falhou';
$strBufferWriteWaits = 'Escrever as esperas';
$strBufferWriteWaitsInPercent = 'Escrita esperada em %';
$strBulgarian = 'Bulgaro'; 
$strBusyPages = 'P�gina ocupadas';
$strBzError = 'phpMyAdmin n�o foi capaz de comprimir o dump devido a um defeito na extens�o Bz2 desta vers�o do php. � extremamente recomendado configurar a diretiva <code>$cfg[\'BZipDump\']</code> do arquivo de configura��o do phpMyAdmin para <code>FALSE</code>. Se voc� quiser usar os recursos de compress�o Bz2, voc� ter� que atualizar para uma vers�o mais nova do PHP. Veja os relat�rios de bug %s do php para detalhes.'; 
$strBzip = '"compactado com bzip"'; 

$strCalendar = 'Calend�rio'; 
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'N�o pode carregar exporta��o dos plugins, verifique sua instala��o!';
$strCanNotLoadImportPlugins = 'N�o foi poss�vel importar plugins, verifique sua instala��o!';
$strCannotLogin = 'N�o foi poss�vel se logar no servidor MySQL'; 
$strCantLoad = 'n�o carregou extens�o %s,<br />verifique a configura��es do php'; 
$strCantLoadRecodeIconv = 'N�o � poss�vel carregar <i>iconv</i> ou recodificar a extens�o necess�ria para a convers�o do Conjunto de Caracteres, configure o PHP de modo a permitir utilizar estas extens�es ou desligue a convers�o do Conjunto de Caracteres no phpMyAdmin.'; 
$strCantRenameIdxToPrimary = 'N�o foi poss�vel renomear o �ndice para "PRIMARY"!'; 
$strCantUseRecodeIconv = 'N�o � poss�vel usar <i>iconv</i> nem <i>libiconv</i> nem a fun��o <i>recode_string</i> enquanto a extens�o reportar que est� ligada. Confira a configura��o do seu php.'; 
$strCardinality = 'Cardinalidade'; 
$strCaseInsensitive = 'N�o diferencia mai�sculas/min�sculas'; 
$strCaseSensitive = 'Diferencia mai�sculas/min�sculas'; 
$strCentralEuropean = 'Europeu Central'; 
$strChange = 'Alterar'; 
$strChangeCopyModeCopy = '... manter o antigo.'; 
$strChangeCopyMode = 'Criar um novo usu�rio com os mesmos privil�gios e ...'; 
$strChangeCopyModeDeleteAndReload = ' ... apagar o antigo da tabela de usu�rios e depois recarregar os privil�gios.'; 
$strChangeCopyModeJustDelete = ' ... apagar o antigo da tabela de usu�rios.'; 
$strChangeCopyModeRevoke = ' ... revogar todos privil�gios do usu�rio antigo e depois apagar ele.'; 
$strChangeCopyUser = 'Mudar informa��es de login / Copiar usu�rio'; 
$strChangeDisplay = 'Escolha o campo para exibir'; 
$strChangePassword = 'Alterar a senha'; 
$strCharset = 'Conjunto de caracteres'; 
$strCharsetOfFile = 'Conjunto de caracteres do arquivo'; 
$strCharsetsAndCollations = 'Conjuntos de caracteres e Collations'; 
$strCharsets = 'Conjuntos de caracteres'; 
$strCheckAll = 'Marcar todos'; 
$strCheckOverhead = 'Verificar sobre-carga'; 
$strCheckPrivsLong = 'Verificar privil�gios para a Banco de Dados &quot;%s&quot;.'; 
$strCheckPrivs = 'Verificar privil�gios'; 
$strCheckTable = 'Verificar tabela'; 
$strChoosePage = 'Escolha a p�gina para editar'; 
$strColComFeat = 'Exibindo coment�rios da coluna'; 
$strCollation = 'Collation'; 
$strColumnNames = 'Nome das colunas'; 
$strColumnPrivileges = 'Privil�gios espec�ficos da coluna'; 
$strCommand = 'Comando'; 
$strComments = 'Coment�rios'; 
$strCommentsForTable = 'COMENT�RIOS PARA A TABELA'; 
$strCompatibleHashing = 'Compat�vel com MySQL&nbsp;4.0'; 
$strCompleteInserts = 'Inser��es completas'; 
$strCompression = 'Compress�o'; 
$strCompressionWillBeDetected = 'Compress�o do arquivo importado ser� automaticamente detectada de: %s';
$strConfigDefaultFileError = 'N�o foi poss�vel carregar configura��o padr�o de: "%1$s"';
$strConfigFileError = 'O phpMyAdmin n�o foi capaz de ler o arquivo de configura��o!<br />Isto pode acontecer se o php encontrar um erro no <i>parsing</i> ou se n�o conseguir encontrar o arquivo.<br />Chame o arquivo de configura��o diretamente usando o <i>link</i> abaixo e leia a(s) mensagem(ns) de erro do php. Na maior parte dos casos, trata-se de uma falta de aspas ou de um ponto e v�rgula errado.<br />Se receber uma p�gina em branco, est� tudo certo.'; 
$strConfigureTableCoord = 'Configure as coordenadas para a tabela %s'; 
$strConnectionError = 'N�o pode conectar: configura��es inv�lidas.'; 
$strConnections = 'Conex�es'; 
$strConstraintsForDumped = 'Restri��es para as tabelas dumpadas'; 
$strConstraintsForTable = 'Restri��es para a tabela'; 
$strControluserFailed = 'Conex�o para controle do usu�rio como definido nas configura��es falhou.';
$strCookiesRequired = 'Cookies devem estar ativos ap�s este ponto.'; 
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'Banco de Dados %s copiado para %s'; 
$strCopyTable = 'Copiar tabela para (Banco de Dados<b>.</b>tabela):'; 
$strCopyTableOK = 'Tabela %s copiada para %s.'; 
$strCopyTableSameNames = 'N�o pode copiar a tabela para ela mesma!'; 
$strCouldNotKill = 'phpMyAdmin n�o foi capaz de matar o processo %s. � poss�vel que ele j� esteja fechado.'; 
$strCreate = 'Criar'; 
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE antes de copiar';
$strCreateIndex = 'Criar um �ndice em&nbsp;%s&nbsp;colunas'; 
$strCreateIndexTopic = 'Criar um novo �ndice'; 
$strCreateNewDatabase = 'Criar novo Banco de Dados'; 
$strCreateNewTable = 'Criar nova tabela no Banco de Dados %s'; 
$strCreatePage = 'Criar uma nova p�gina'; 
$strCreatePdfFeat = 'Cria��o de PDFs'; 
$strCreateRelation = 'Criar relacionamento';
$strCreateTable  = 'Criar tabela';
$strCreateUserDatabase = 'Banco de Dados para usu�rio';
$strCreateUserDatabaseName = 'Criar Banco de Dados com o mesmo nome e conceder todos os privil�gios';
$strCreateUserDatabaseNone = 'Nenhum';
$strCreateUserDatabaseWildcard = 'Conceder todos os privil�gios no nome coringa (nome_do_usu�rio_%)';
$strCreationDates = 'Criar/Atualizar/Verificar datas'; 
$strCriteria = 'Crit�rio'; 
$strCroatian = 'Croata'; 
$strCSV = 'CSV';
$strCyrillic = 'Cir�lico'; 
$strCzechSlovak = 'Tcheco-Eslov�quio'; 
$strCzech = 'Tcheco'; 

$strDanish = 'Dinamarqu�s'; 
$strDatabase = 'Banco de Dados'; 
$strDatabaseEmpty = 'O nome do Banco de Dados est� em branco!'; 
$strDatabaseExportOptions = 'Op��es de exporta��o do Banco de Dados'; 
$strDatabaseHasBeenDropped = 'Banco de Dados %s foi eliminado.'; 
$strDatabases = 'Banco de Dados'; 
$strDatabasesDropped = 'Banco de Dados %s foi eliminado com sucesso!'; 
$strDatabasesStatsDisable = 'Disabilitar estat�sticas'; 
$strDatabasesStatsEnable = 'Habilitar estat�sticas'; 
$strDatabasesStats = 'Estat�sticas do Banco de Dados'; 
$strDatabasesStatsHeavyTraffic = 'Nota: Ativar as estat�sticas pode causar um grande volume de tr�fego de dados entre o servidor web e o servidor MySQL.'; 
$strData = 'Dados'; 
$strDataDict = 'Dicion�rio de dados'; 
$strDataOnly = 'Dados apenas'; 
$strDataPages = 'P�ginas contendo dados';
$strDBComment = 'Coment�rio do Banco de Dados: '; 
$strDBCopy = 'Copiar Banco de Dados para'; 
$strDbIsEmpty = 'Banco de Dados parece estar vazio!';
$strDbPrivileges = 'Privil�gios espec�ficos do Banco de Dados'; 
$strDBRename = 'Renomear Banco de Dados para'; 
$strDbSpecific = 'Espec�fico do Banco de Dados'; 
$strDefaultEngine = '%s � o stored engine padr�o neste servidor MySQL.';
$strDefault = 'Padr�o'; 
$strDefaultValueHelp = 'Para valores padr�o, digite um valor simples, sem barras de escape ou aspas, use este formato: a'; 
$strDefragment = 'Desfragmentar tabela'; 
$strDelayedInserts = 'Usar inser��es demoradas'; 
$strDeleteAndFlush = 'Apagar usu�rio e depois recarregar os privil�gios.'; 
$strDeleteAndFlushDescr = 'Esse � o caminho mais claro, mas recarregar os privil�gios pode demorar um pouco.'; 
$strDeleted = 'Registro eliminado'; 
$strDeletedRows = 'Registros eliminados:'; 
$strDeleteNoUsersSelected = 'Nenhum usu�rio selecionado para exclus�o!';
$strDeleteRelation = 'Apagar relacionamento';
$strDelete = 'Remover'; 
$strDeleting = 'Eliminando %s'; 
$strDelimiter = 'Delimitadores';
$strDelOld = 'A P�gina atual cont�m refer�ncias para uma tabela que n�o existe. Gostaria de eliminar estas refer�ncias?'; 
$strDescending = 'Descendente'; 
$strDescription = 'Descri��o'; 
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'O campo de exibi��o est� em rosa. Para ajustar/desajustar um campo como campo de exibi��o, clique no �cone "Escolher campo para exibi��o", ent�o clique no nome do campo apropriado.';
$strDictionary = 'dicion�rio'; 
$strDirectLinks = 'Links diretos';
$strDirtyPages = 'P�ginas sujas';
$strDisabled = 'Desabilitado'; 
$strDisableForeignChecks = 'Desabilitar verifica��o de chaves estrangeiras'; 
$strDisplayFeat = 'Exibir recursos'; 
$strDisplayOrder = 'Ordenado por:'; 
$strDisplayPDF = 'Exibir esquema PDF'; 
$strDoAQuery = 'Fa�a uma "consulta por exemplo" (coringa: "%")'; 
$strDocSQL = 'DocSQL';
$strDocu = 'Documenta��o'; 
$strDoYouReally = 'Confirmar'; 
$strDropDatabaseStrongWarning = 'Voc� est� prestes � DESTRUIR completamente o Banco de Dados!'; 
$strDrop = 'Eliminar'; 
$strDropUsersDb = 'Eliminar o Banco de Dados que possui o mesmo nome dos usu�rios.'; 
$strDumpingData = 'Extraindo dados da tabela'; 
$strDumpSaved = 'Dump foi salvo no arquivo %s.'; 
$strDumpXRows = 'Dumpar %s registros, come�ando pelo registro %s.'; 
$strDynamic = 'din�mico'; 

$strEdit = 'Editar'; 
$strEditPDFPages = 'Editar P�ginas PDF'; 
$strEditPrivileges = 'Editar Privil�gios'; 
$strEffective = 'Efetivo'; 
$strEmpty = 'Limpar'; 
$strEmptyResultSet = 'MySQL retornou um conjunto vazio (ex. zero registros).'; 
$strEnabled = 'Habilitado'; 
$strEncloseInTransaction = 'Encapsular exporta��o numa transa��o'; 
$strEndCut = 'FIM CORTE'; 
$strEnd = 'Fim'; 
$strEndRaw = 'FIM CRU'; 
$strEngineAvailable = '%s est� dispon�vel neste servidor MySQL.';
$strEngineDisabled = '%s est� desabilitado neste servidor MySQL.';
$strEngines = 'Engines'; //sem traducao
$strEngineUnsupported = 'Esse servidor MySQL n�o suporta o stored engine %s.';
$strEnglish = 'Ingl�s'; 
$strEnglishPrivileges = ' Nota: nomes de privil�gios do MySQL s�o expressos em ingl�s '; 
$strError = 'Erro'; 
$strErrorInZipFile = 'Erro no arquivo ZIP:';
$strErrorRelationAdded = 'Erro: relacionamento n�o adicionado.';
$strErrorRelationExists = 'Erro: relacionamento j� existe.';
$strErrorRenamingTable = 'Erro ao renomear tabela %1$s para %2$s';
$strErrorSaveTable = 'Erro ao salvar coordenada para o Designer.';
$strEscapeWildcards = 'Coringas _ e % precisam ser precedidos com uma \ para serem usados literalmente'; 
$strEsperanto = 'Esperanto';
$strEstonian = 'Estoniano'; 
$strEvent = 'Evento';
$strExcelEdition = 'Edi��o do Excel'; 
$strExecuteBookmarked = 'Executar consulta marcada'; 
$strExplain = 'Explicar SQL'; 
$strExport = 'Exportar'; 
$strExportImportToScale = 'Exportar/Importar para escala';
$strExportMustBeFile = 'Tipo de exporta��o selecionada tem que ser salva no arquivo!';
$strExtendedInserts = 'Inser��es extendidas'; 
$strExtra = 'Extra'; 

$strFailedAttempts = 'Tentativas falharam'; 
$strField = 'Campo'; 
$strFieldHasBeenDropped = 'Campo %s foi deletado'; 
$strFieldInsertFromFileTempDirNotExists = 'Erro ao mover o arquivo carregado, veja FAQ 1.11';
$strFields = 'Campos'; 
$strFieldsEnclosedBy = 'Campos delimitados por'; 
$strFieldsEscapedBy = 'Campos contornados por'; 
$strFieldsTerminatedBy = 'Campos terminados por'; 
$strFileAlreadyExists = 'O arquivo %s j� existe no servidor, mude o nome do arquivo ou verifique sua op��o de sobrescrever.'; 
$strFileCouldNotBeRead = 'O arquivo n�o pode ser lido'; 
$strFileNameTemplateDescriptionDatabase = 'nome do Banco de Dados';
$strFileNameTemplateDescription = 'Esse valor � interpretado usando %1$sstrftime%2$s, ent�o voc� pode usar as strings de formata��o de tempo. Adicionalmente a seguinte transforma��o ocorrer�: %3$s. Outros textos ser�o mantidos como s�o.';
$strFileNameTemplateDescriptionServer = 'nome do servidor';
$strFileNameTemplateDescriptionTable = 'nome da tabela';
$strFileNameTemplate = 'Nome do arquivo do modelo'; 
$strFileNameTemplateRemember = 'lembrar modelo'; 
$strFiles = 'Arquivos';
$strFileToImport = 'Arquivo para importar';
$strFixed = 'fixo'; 
$strFlushPrivilegesNote = 'Nota: O phpMyAdmin recebe os privil�gios dos usu�rio diretamente da tabela de privil�gios do MySQL. O conte�do destas tabelas pode divergir dos privil�gios que o servidor usa se altera��es manuais forem feitas nele. Neste caso, voc� deve usar %sRELOAD PRIVILEGES%s antes de continuar..'; 
$strFlushQueryCache = 'Nivelar cache da consulta';  //est� correto isso?
$strFlushTable = 'Limpar a tabela ("LIMPAR")'; 
$strFlushTables = 'Nivelar (fechar) todas as tabelas';  //est� correto isso?
$strFontSize = 'Tamanho da fonte';
$strForeignKeyError = 'Erro na cria��o da chave estrangeira (cheque o tipo de dado)';
$strFormat = 'Formato'; 
$strFormEmpty = 'Faltando valores no formul�rio!'; 
$strFreePages = 'P�ginas livres';
$strFullText = 'Textos completos'; 
$strFunction = 'Fun��es'; 
$strFunctions = 'Fun��es';

$strGenBy = 'Gerado por'; 
$strGeneralRelationFeat = 'Recursos de rela��es gerais'; 
$strGenerate = 'Gerar';
$strGeneratePassword = 'Gerar Senha';
$strGenTime = 'Tempo de Gera��o'; 
$strGeorgian = 'Georgiano'; 
$strGerman = 'Alem�o'; 
$strGlobal = 'global'; 
$strGlobalPrivileges = 'Privil�gios globais'; 
$strGlobalValue = 'Valor global'; 
$strGo = 'Executar'; 
$strGrantOption = 'Conceder/Grant'; 
$strGreek = 'Grego'; 
$strGzip = '"compactado com gzip"'; 

$strHandler = 'Alimentador';  //est� correto isso? seria Gestor??
$strHasBeenAltered = 'foi alterado.'; 
$strHasBeenCreated = 'foi criado.'; 
$strHaveToShow = 'Deve escolher pelo menos uma coluna para exibir'; 
$strHebrew = 'Hebreu'; 
$strHelp = 'Ajuda';
$strHexForBLOB = 'Usar hexadecimal para BLOB';
$strHide = 'Ocultar';
$strHideShowAll = 'Ocultar/Exibir tudo';
$strHideShowNoRelation = 'Ocultar/Exibir Tabelas sem relacionamento';
$strHomepageOfficial = 'P�gina Oficial do phpMyAdmin'; 
$strHome = 'Principal'; 
$strHostEmpty = 'O nome do servidor est� vazio!'; 
$strHost = 'Servidor'; 
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'H�ngaro'; 

$strIcelandic = 'Island�s'; 
$strId = 'ID'; 
$strIdxFulltext = 'Texto completo'; 
$strIEUnsupported = 'Internet Explorer n�o suporta esta fun��o.';
$strIgnoreDuplicates = 'Ignorar linhas duplicadas';
$strIgnore = 'Ignorar'; 
$strIgnoreInserts = 'Usar inser��es ignoradas'; 
$strImportExportCoords = 'Importar/Exportar coordenadas para esquema PDF';
$strImportFiles = 'Importar arquivos'; 
$strImportFormat = 'Formato do arquivo importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'Importa��o finalizada com sucesso, %d consultas executadas.';
$strIndexes = '�ndices'; 
$strIndexesSeemEqual = 'Os seguintes �ndices parecem ser id�nticos e um deles deve ser removido:';
$strIndexHasBeenDropped = '�ndice %s foi eliminado'; 
$strIndex = '�ndice'; 
$strIndexName = 'Nome do �ndice:'; 
$strIndexType = 'Tipo de �ndice:'; 
$strIndexWarningTable = 'Problemas com o �ndice da tabela `%s`'; 
$strInnoDBAutoextendIncrementDesc = 'O tamanho do incremento para extender o tamanho de um tamanho de tabela autoextendida quando ela come�ar � ficar cheia.';
$strInnoDBAutoextendIncrement = 'Incremento autoextendido';
$strInnoDBBufferPoolSizeDesc = 'O tamanho do buffer de mem�ria que o InnoDB usa para dados do cache e �ndices nas suas tabelas.';
$strInnoDBBufferPoolSize = 'Tamanho do Buffer Pool';
$strInnoDBDataFilePath = 'Arquivos de dados';
$strInnoDBDataHomeDirDesc = 'A parte comum do caminho do diret�rio para todos os arquivos de dados do InnoDB.';
$strInnoDBDataHomeDir = 'Diret�rio raiz de dados';
$strInnoDBPages = 'p�ginas';
$strInnoDBRelationAdded = 'Adicionado relacionamento InnoDB';
$strInnodbStat = 'Status do InnoDB'; 
$strInsecureMySQL = 'O seu arquivo de configura��o cont�m configura��es (root sem senha) que correspondem � conta privilegiada padr�o do MySQL. O servidor MySQL rodando com esse padr�o estar� aberto a invas�es, voc� realmente deveria corrigir este furo de seguran�a.'; 
$strInsertAsNewRow = 'Inserir como um novo registro'; 
$strInsertedRowId = 'Inserir ID do registro:'; 
$strInsertedRows = 'Registros inseridos:'; 
$strInsert = 'Inserir'; 
$strInternalNotNecessary = '* N�o � necess�ria uma rela��o interna quando tamb�m j� existe na InnoDB.'; 
$strInternalRelationAdded = 'Adicionado relacionamento Interno';
$strInternalRelations = 'Rela��es internas'; 
$strInUse = 'em uso'; 
$strInvalidAuthMethod = 'M�todo de autentica��o inv�lido informado nas configura��es:';
$strInvalidColumn = 'Coluna especificada (%s) � inv�lida!';
$strInvalidColumnCount = 'Contador da coluna deve ser maior que zero.';
$strInvalidCSVFieldCount = 'Contador de campo inv�lido na linha %d da entrada CSV.';
$strInvalidCSVFormat = 'Formato inv�lido na linha %d da entrada CSV.';
$strInvalidCSVParameter = 'Par�metro inv�lido para importa��o CSV: %s';
$strInvalidDatabase = 'Banco de Dados inv�lido';
$strInvalidFieldAddCount = 'Voc� deve adicionar pelo menos um campo.';
$strInvalidFieldCount = 'Tabela deve ter pelo menos um campo.';
$strInvalidLDIImport = 'Esse plugin n�o suporta importa��es comprimidas!';
$strInvalidRowNumber = '%d n�o � um n�mero de linha v�lido.';
$strInvalidServerHostname = 'Nome de serivdor inv�lido para o servidor %1$s. Verifique suas configura��es.';
$strInvalidServerIndex = '�ndice de servidor inv�lido: "%s"';
$strInvalidTableName = 'Nome de tabela inv�lida';

$strJapanese = 'Japon�s'; 
$strJoins = 'Jun��es';
$strJumpToDB = 'Ir para o Banco de Dados &quot;%s&quot;.'; 
$strJustDelete = 'Apenas apagar o usu�rio da tabela de privil�gios'; 
$strJustDeleteDescr = 'O usu�rio &quot;apagado&quot; ainda podera continuar acessando o servidor normalmente at� que os privil�gios sejam recarregados.'; 

$strKeepPass = 'N�o mudar a senha'; 
$strKeyCache = 'Chave do cache';
$strKeyname = 'Nome chave'; 
$strKill = 'Matar'; 
$strKnownExternalBug = 'A funcionalidade %s � afetada por um bug conhecido, veja %s';
$strKorean = 'Coreano'; 

$strLandscape = 'Paisagem'; 
$strLanguage = 'Linguagem';
$strLanguageUnknown = 'Linguagem desconhecida: %1$s.';
$strLatchedPages = 'P�ginas trancadas';
$strLatexCaption = 'Leganda da Tabela'; 
$strLatexContent = 'Conte�do da tabela __TABLE__'; 
$strLatexContinuedCaption = 'Continua��o da legenda da tabela'; 
$strLatexContinued = '(continua��o)'; 
$strLatexIncludeCaption = 'Incluir legenda da tabela'; 
$strLatexLabel = 'R�tulo da chave'; 
$strLaTeX = 'LaTeX'; 
$strLatexStructure = 'Estrutura da tabela __TABLE__'; 
$strLatvian = 'Leton�s'; 
$strLDI = 'CSV usando LOAD DATA';
$strLDILocal = 'Usar palavra-chave LOCAL';
$strLengthSet = 'Tamanho/Definir*'; 
$strLimitNumRows = 'registros por p�gina'; 
$strLinesTerminatedBy = 'Linhas terminadas por'; 
$strLinkNotFound = 'Link n�o encontrado'; 
$strLinksTo = 'Links para'; 
$strLithuanian = 'Litu�nio'; 
$strLocalhost = 'Local'; 
$strLocationTextfile = 'Localiza��o do arquivo texto'; 
$strLogin = 'Autentica��o'; 
$strLoginInformation = 'Informa��o de login'; 
$strLogout = 'Sair'; 
$strLogPassword = 'Senha:'; 
$strLogServer = 'Servidor'; 
$strLogUsername = 'Usu�rio:'; 
$strLongOperation = 'Esta opera��o pode ser demorada. Deseja prosseguir?';

$strMaxConnects = 'm�x. de conex�es concorrentes';
$strMaximalQueryLength = 'Tamanho m�ximo da consulta gerada';
$strMaximumSize = 'Tamanho m�ximo: %s%s'; 
$strMbExtensionMissing = 'A extens�o mbstring do PHP n�o foi encontrada e voc� parece estar usando conjuntos de caracteres multibyte. Sem a extens�o mbstring o phpMyAdmin n�o ser� capaz de dividir as strings corretamente isso pode causar resultados inesperados.'; 
$strMbOverloadWarning = 'Voc� habilitou mbstring.func_overload nas configura��es do PHP. Essa op��o � incompat�vel com o phpMyAdmin e certamente causar� a perda de algum dado!'; 
$strMIME_available_mime = 'MIME-type dispon�veis'; 
$strMIME_available_transform = 'Transforma��es dispon�veis'; 
$strMIME_description = 'Descri��o'; 
$strMIME_MIMEtype = 'MIME-type'; // MIME-types nao tem traducao
$strMIME_nodescription = 'Sem descri��o dispon�vel para essa transforma��o.<br />Pergunte ao autor o que %s faz.'; 
$strMIME_transformation_note = 'Para uma lista de op��es de transforma��o dispon�veis e suas transforma��es MIME-type, clique em %sdescri��o de transforma��es%s'; 
$strMIME_transformation_options_note = 'Digite os valores para as op��es de transforma��o usando este formato: \'a\', 100, b,\'c\'...<br />Se por acaso precisar inserir uma contra-barra ("\") ou aspas ("\'") no meio desses valores, fa�a-o usando outra contra-barra (por exemplo \'\\\\xyz\' ou \'a\\\'b\').'; 
$strMIME_transformation_options = 'Op��es de transforma��o'; 
$strMIME_transformation = 'Transforma��es do navegador'; 
$strMIMETypesForTable = 'MIME-TYPES PARA AS TABELAS'; 
$strMIME_without = 'MIME-types em it�lico n�o t�m uma fun��o de transforma��o separada'; 
$strModifications = 'Modifica��es foram salvas'; 
$strModifyIndexTopic = 'Modificar um �ndice'; 
$strModify = 'Modificar'; 
$strMoveMenu = 'Mover Menu';
$strMoveTable = 'Mover tabela para (Banco de Dados<b>.</b>tabela):'; 
$strMoveTableOK = 'Tabela %s foi movida para %s.'; 
$strMoveTableSameNames = 'N�o pode mover a tabela para ela mesma!'; 
$strMultilingual = 'multi-linguagem'; 
$strMyISAMDataPointerSizeDesc = 'O tamanho padr�o do ponteiro em bytes, para ser usado por CREATE TABLE para tabelas MyISAM quando a op��o MAX_ROWS n�o � especificada.';
$strMyISAMDataPointerSize = 'Tamanho do ponteiro de dados';
$strMyISAMMaxExtraSortFileSizeDesc = 'Se os arquivos tempor�rios usados para r�pida cria��o de �ndices MyISAM forem maiores do que usando a chave do cache pela quantidade especificada aqui, prefira o m�todo chave do cache.';
$strMyISAMMaxExtraSortFileSize = 'Tamanho m�ximo para arquivos tempor�rios na cria��o do �ndice';
$strMyISAMMaxSortFileSizeDesc = 'O tamanho m�ximo do arquivo tempor�rio MySQL que � permitido usar quando for recriar um �ndice MyISAM (durante REPAIR TABLE, ALTER TABLE ou LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamanho m�ximo para os arquivos tempor�rios de ordena��o';
$strMyISAMRecoverOptionsDesc = 'O modo para recupera��o autom�tica de tabelas MyISAM danificadas, como configurado pela op��o de inicializa��o do servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modo de recupera��o autom�tico';
$strMyISAMRepairThreadsDesc = 'Se este valor for maior que 1, �ndices das tabelas MyISAM s�o criados em paralelo (cada �ndice tem seu pr�prio processo) durante o Reparo pelo processo de ordena��o.';
$strMyISAMRepairThreads = 'Processos de reparo';
$strMyISAMSortBufferSizeDesc = 'O buffer que � alocado quando s�o ordenados �ndices MyISAM durante um REPAIR TABLE ou quando s�o criados �ndices com CREATE INDEX ou ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tamanho do buffer de ordena��o';
$strMySQLCharset = 'Conjunto de caracteres MySQL'; 
$strMysqlClientVersion = 'Vers�o do cliente MySQL';
$strMySQLConnectionCollation = 'Collation de conex�o do MySQL'; // Collation nao tem traducao
$strMysqlLibDiffersServerVersion = 'Sua vers�o %s da biblioteca MySQL do PHP difere da vers�o %s do seu servidor MySQL. Isso pode causar um comportamento estranho.';
$strMySQLSaid = 'Mensagens do MySQL : '; 
$strMySQLShowProcess = 'Mostrar os Processos'; 
$strMySQLShowStatus = 'Mostrar informa��o de runtime do MySQL'; 
$strMySQLShowVars = 'Mostrar vari�veis de sistema do MySQL'; 

$strName = 'Nome'; 
$strNext = 'Pr�ximo'; 
$strNoActivity = 'Sem atividade por %s segundos ou mais, fa�a o login novamente'; 
$strNoDatabasesSelected = 'Nenhum Banco de Dados selecionado.'; 
$strNoDatabases = 'Sem bases'; 
$strNoDataReceived = 'Nenhum dado foi recebido pra importar. Tampouco um nome de arquivo foi submetido, ou o tamanho do arquivo excedeu o tamanho m�ximo permitido pelas suas configura��es do PHP. Veja FAQ 1.16.';
$strNoDescription = 'sem Descri��o'; 
$strNoDetailsForEngine = 'N�o h� nenhuma informa��o detalhada do status dispon�vel para esta storage engine.';
$strNoDropDatabases = 'O comando "DROP DATABASE" est� desabilitado.'; 
$strNoExplain = 'Pular Explica��o SQL'; 
$strNoFilesFoundInZip = 'Nenhum arquivo encontrado dentro do arquivo ZIP!';
$strNoFrames = 'phpMyAdmin � mais amig�vel com um navegador <b>capaz de exibir frames</b>.'; 
$strNoIndex = 'Nenhum �ndice definido!'; 
$strNoIndexPartsDefined = 'Nenhuma parte de �ndice definida!'; 
$strNoModification = 'Sem Mudan�a'; 
$strNo = 'N�o'; 
$strNone = 'Nenhum'; 
$strNoOptions = 'Esse formato n�o tem op��es'; 
$strNoPassword = 'Sem senha'; 
$strNoPermission = 'O servidor web n�o tem permiss�o para salvar o arquivo %s.'; 
$strNoPhp = 'sem c�digo PHP'; 
$strNoPrivileges = 'Sem privil�gios'; 
$strNoRights = 'Voc� n�o tem direitos suficientes para estar aqui agora!'; 
$strNoRowsSelected = 'Nenhum registro selecionado'; 
$strNoSpace = 'Espa�o insuficiente para salvar o arquivo %s.'; 
$strNoTablesFound = 'Nenhuma tabela encontrada no Banco de Dados'; 
$strNoThemeSupport = 'Sem suporte a Temas, verifique suas configura��es e/ou seus Temas no diret�rio %s.'; 
$strNotNumber = 'Isto n�o � um n�mero!'; 
$strNotOK = 'n�o est� OK'; 
$strNotSet = '<b>%s</b> tabela n�o encontrada ou n�o configurada em %s'; 
$strNoUsersFound = 'Nenhum usu�rio(s) encontrado.'; 
$strNoValidateSQL = 'Pular valida��o SQL'; 
$strNull = 'Nulo'; 
$strNumberOfFields = 'N�mero de arquivos';
$strNumberOfTables = 'Numero de tabelas';
$strNumSearchResultsInTable = '%s resultado(s) dentro da tabela <i>%s</i>'; 
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)'; 
$strNumTables = 'Tabelas'; 

$strOK = 'OK'; 
$strOpenDocumentSpreadsheet = 'Abrir Documento Planilha';
$strOpenDocumentText = 'Abrir Documento de Texto';
$strOpenNewWindow = 'Abrir nova janela do phpMyAdmin';
$strOperations = 'Opera��es'; 
$strOperator = 'Operador'; 
$strOptimizeTable = 'Otimizar tabela'; 
$strOptions = 'Op��es';
$strOr = 'Ou'; 
$strOverhead = 'Sobrecarga'; 
$strOverwriteExisting = 'Sobrescrever arquivo(s) existente(s)'; 

$strPageNumber = 'Numero da p�gina:'; 
$strPagesToBeFlushed = 'P�ginas para serem niveladas';
$strPaperSize = 'Tamanho do papel'; 
$strPartialImport = 'Importa��o parcial';
$strPartialText = 'Textos parciais'; 
$strPasswordChanged = 'A senha para %s foi modificada com sucesso.'; 
$strPasswordEmpty = 'A senhas est� em branco!'; 
$strPasswordHashing = 'Hashing da senha'; // Hashing nao tem traducao
$strPasswordNotSame = 'As senhas n�o s�o iguais!'; 
$strPassword = 'Senha'; 
$strPdfDbSchema = 'Esquema do Banco de Dados "%s" - P�gina %s'; 
$strPdfInvalidTblName = 'A tabela "%s" n�o existe!'; 
$strPdfNoTables = 'Sem tabelas'; 
$strPDF = 'PDF';
$strPDFReportExplanation = '(Gerado um relat�rio contendo dados da tabela simples)';
$strPDFReportTitle = 'T�tulo do Relat�rio';
$strPerHour = 'por hora'; 
$strPerMinute = 'por minuto'; 
$strPerSecond = 'por segundo'; 
$strPersian = 'P�rsa'; 
$strPhoneBook = 'Agenda de telefones'; 
$strPHP40203 = 'Voc� est� usando o PHP 4.2.3, que possui um grave defeito usando strings multi-byte (mbstring). Veja relat�rio 19404 de erros do PHP. Essa vers�o n�o � recomendada para uso com o phpMyAdmin.'; 
$strPhp = 'Criar c�digo PHP'; 
$strPHPVersion = 'Vers�o do PHP'; 
$strPleaseSelectPrimaryOrUniqueKey = 'Por favor, selecione uma chave prim�ria ou uma chave �nica';
$strPmaDocumentation = 'Documenta��o do phpMyAdmin '; 
$strPmaUriError = 'A vari�vel <tt>$cfg[\'PmaAbsoluteUri\']</tt> deve ser setada'; 
$strPmaWiki = 'Wiki phpMyAdmin';
$strPolish = 'Polon�s'; 
$strPortrait = 'Retrato'; 
$strPos1 = 'In�cio'; 
$strPrevious = 'Anterior'; 
$strPrimaryKeyHasBeenDropped = 'A chave prim�ria foi deletada'; 
$strPrimaryKeyName = 'O nome da chave prim�ria deve ser... "PRIMARY"!'; 
$strPrimaryKeyWarning = '("PRIMARY" <b>precisa</b> ser o nome <b>de</b> e <b>apenas da</b> chave prim�ria!)'; 
$strPrimary = 'Prim�ria'; 
$strPrint = 'Imprimir'; 
$strPrintViewFull = 'Ver impress�o (com textos completos)'; 
$strPrintView = 'Visualiza��o para impress�o'; 
$strPrivDescAllPrivileges = 'Incluir todos os privil�gios, exceto GRANT.'; 
$strPrivDescAlter = 'Permitir alterar a estrutura das tabelas existentes.'; 
$strPrivDescAlterRoutine = 'Permitir alterar e apagar stored routines.';
$strPrivDescCreateDb = 'Permitir criar novas tabelas e Banco de Dados.'; 
$strPrivDescCreateRoutine = 'Permitir criar stored routines.';
$strPrivDescCreateTbl = 'Permitir criar novas tabelas.'; 
$strPrivDescCreateTmpTable = 'Permitir criar tabelas tempor�rias.'; 
$strPrivDescCreateUser = 'Permitir criar, apagar e renomear contas dos usu�rios.';
$strPrivDescCreateView = 'Permitir criar novas vis�es.';
$strPrivDescDelete = 'Permitir apagar dados.'; 
$strPrivDescDropDb = 'Permitir eliminar Banco de Dados e tabelas.'; 
$strPrivDescDropTbl = 'Permitir eliminar tabelas.'; 
$strPrivDescExecute5 = 'Permitir executar stored routines.';
$strPrivDescExecute = 'Permitir rodar "stored procedures"; Sem efeitos nesta vers�o do MySQL.'; 
$strPrivDescFile = 'Permitir importar dados e exportar dados em arquivos.'; 
$strPrivDescGrant = 'Permitir adicionar usu�rios e privil�gios sem recarregar a tabela de privil�gios.'; 
$strPrivDescIndex = 'Permitir criar e eliminar �ndices.'; 
$strPrivDescInsert = 'Permitir inserir e substituir dados.'; 
$strPrivDescLockTables = 'Permitir bloquear tabelas para a processo atual.'; 
$strPrivDescMaxConnections = 'Limitar o numero de novas conex�es que o usu�rio pode abrir por hora.'; 
$strPrivDescMaxQuestions = 'Limitar o n�mero de consultas que podem ser enviadas ao servidor por hora.'; 
$strPrivDescMaxUpdates = 'Limitar o n�mero de comandos que alteram Bancos de Dados ou tabelas que o usu�rio pode executar por hora.'; 
$strPrivDescMaxUserConnections = 'Limitar o n�mero de conex�es simult�neas que o usu�rio pode ter.';
$strPrivDescProcess3 = 'Permitir matar os processos de outros usu�rios.'; 
$strPrivDescProcess4 = 'Permitir visualizar consultas completas da lista de processos.'; 
$strPrivDescReferences = 'Sem efeitos nesta vers�o do MySQL.'; 
$strPrivDescReload = 'Permitir recarregar configura��es do servidor e descarregar o cache do servidor.'; 
$strPrivDescReplClient = 'Permitir que o usu�rio pergunte onde est�o os escravos / mestres.'; 
$strPrivDescReplSlave = 'Precisar dos escravos de replica��o.'; 
$strPrivDescSelect = 'Permitir leitura dos dados.'; 
$strPrivDescShowDb = 'Permitir acesso completo � lista de Bancos de Dados.'; 
$strPrivDescShowView = 'Permitir executar consultas SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permitir desligar o servidor.'; 
$strPrivDescSuper = 'Permitir conectar, se o numero m�ximo de conex�es for alcan�ado; Necess�rio para muitas opera��es administrativas, como setar vari�veis globais e matar processos de outros usu�rios.'; 
$strPrivDescUpdate = 'Permitir modificar dados.'; 
$strPrivDescUsage = 'Sem privil�gios.'; 
$strPrivileges = 'Privil�gios'; 
$strPrivilegesReloaded = 'Os privil�gios foram recarregados com sucesso.'; 
$strProcedures = 'Procedimentos';
$strProcesses = 'Processos'; 
$strProcesslist = 'Lista de processos'; 
$strProtocolVersion = 'Vers�o do Protocolo';
$strPutColNames = 'Colocar nome do campo na primeira linha'; 

$strQBEDel = 'Del';   // (used in tbl_qbe.php) 
$strQBEIns = 'Ins';   // (used in tbl_qbe.php) 
$strQBE = 'Procurar por exemplo'; 
$strQueryCache = 'Consulta do cache';
$strQueryFrame = 'Janela de consulta'; 
$strQueryOnDb = 'Consulta no Banco de Dados <b>%s</b>:'; 
$strQueryResultsOperations = 'Opera��es resultantes das consultas';
$strQuerySQLHistory = 'Hist�rico de consultas'; 
$strQueryStatistics = '<b>Estat�sticas das consultas</b>: Desde o in�cio, %s consultas foram enviadas para o servidor.'; 
$strQueryTime = 'Consulta levou %01.4f segundos'; 
$strQueryType = 'Tipo de consulta'; 
$strQueryWindowLock = 'N�o sobrescrever esta consulta fora desta janela'; 

$strReadRequests = 'Leitura requisitada';
$strReceived = 'Recebido'; 
$strRecommended = 'recomendado';
$strRecords = 'Registros'; 
$strReferentialIntegrity = 'Verificar integridade referencial:'; 
$strRefresh = 'Atualizar'; 
$strRelationalSchema = 'Esquema relacional'; 
$strRelationDeleted = 'Relacionamento apagado';
$strRelationNotWorking = 'Os recursos adicionais para trabalhar com tabelas linkadas foram desativadas. Para descobrir o motivo clique %saqui%s.'; 
$strRelationsForTable = 'RELA��ES PARA A TABELA'; 
$strRelations = 'Rela��es'; 
$strRelationView = 'Ver rela��es'; 
$strReloadingThePrivileges = 'Recarregando os privil�gios'; 
$strReloadPrivileges = 'Recarregar privil�gios';
$strReload = 'Recarregar';
$strRemoveSelectedUsers = 'Remover os usu�rios selecionados'; 
$strRenameDatabaseOK = 'O Banco de Dados %s foi renomeado para %s'; 
$strRenameTableOK = 'Tabela %s renomeada para %s'; 
$strRenameTable = 'Renomear a tabela para '; 
$strRepairTable = 'Reparar tabela'; 
$strReplaceNULLBy = 'Substituir NULL por'; 
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo'; 
$strReplication = 'Replica��o';
$strReset = 'Resetar'; 
$strResourceLimits = 'Limite dos recursos'; 
$strRestartInsertion = 'Reiniciar inser��o com %s registros';
$strReType = 'Re-digite'; 
$strRevokeAndDeleteDescr = 'Os usu�rios manter�o o privil�gio de USAGE at� que os privil�gios sejam recarregados.'; 
$strRevokeAndDelete = 'Revogar todos os privil�gios ativos dos usuarios e depois apagar eles.'; 
$strRevokeMessage = 'Voc� revogou os privil�gios para %s'; 
$strRevoke = 'Revogar'; 
$strRomanian = 'Rom�no'; 
$strRoutineReturnType = 'Tipo de returno';
$strRoutines = 'Rotinas';
$strRowLength = 'Tamanho do registro'; 
$strRowsFrom = 'registro(s) come�ando de'; 
$strRowSize = ' Tamanho do registro '; 
$strRowsModeFlippedHorizontal = 'horizontal (cabe�alhos rotacionados)'; 
$strRowsModeHorizontal = 'horizontal'; 
$strRowsModeOptions = 'no modo %s e repetindo cabe�alhos ap�s %s c�lulas'; 
$strRowsModeVertical = 'vertical'; 
$strRows = 'Registros'; 
$strRowsStatistic = 'Estat�sticas do registros'; 
$strRunning = 'Rodando em %s'; 
$strRunQuery = 'Enviar consulta SQL'; 
$strRunSQLQuery = 'Fazer consulta SQL no Banco de Dados %s'; 
$strRunSQLQueryOnServer = 'Rodar consulta(s) SQL no servidor %s';
$strRussian = 'Russo'; 

$strSaveOnServer = 'Salvar no servidor no diret�rio %s'; 
$strSavePosition = 'Salvar posi��o';
$strSave = 'Salvar'; 
$strScaleFactorSmall = 'A escala � muito pequena para ajustar o esquema em uma p�gina'; 
$strSearchFormTitle = 'Procurar no Banco de Dados'; 
$strSearchInTables = 'Dentro da(s) tabela(s):'; 
$strSearchNeedle = 'Palavra(s) ou valor(es) para procurar (coringa: "%"):'; 
$strSearchOption1 = 'pelo menos uma das palavras'; 
$strSearchOption2 = 'todas as palavras'; 
$strSearchOption3 = 'a frase exata'; 
$strSearchOption4 = 'como express�o regular'; 
$strSearch = 'Procurar'; 
$strSearchResultsFor = 'Procurar resultados por "<i>%s</i>" %s:'; 
$strSearchType = 'Encontrar:'; 
$strSecretRequired = 'O arquivo de configura��o agora precisa de uma frase secreta com senha (blowfish_secret).'; 
$strSelectADb = 'Selecionar um Banco de Dados'; 
$strSelectAll = 'Selecionar Todos'; 
$strSelectBinaryLog = 'Selecionar log bin�rio para exibir'; 
$strSelectFields = 'Selecionar os campos (no m�nimo 1)'; 
$strSelectForeignKey = 'Selecionar Chave Estrangeira';
$strSelectNumRows = 'na consulta'; 
$strSelectReferencedKey = 'Seleciona chave referenciada';
$strSelectTables = 'Tabelas selecionadas'; 
$strSend = 'Enviado'; 
$strSent = 'Enviar'; 
$strServerChoice = 'Sele��o do Servidor'; 
$strServerNotResponding = 'O servidor n�o est� respondendo'; 
$strServer = 'Servidor'; 
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Inser��es demoradas';
$strServerStatus = 'Informa��es de Runtime'; 
$strServerStatusUptime = 'Esse servidor MySQL est� rodando por %s. Ele foi iniciado em %s.'; 
$strServerTabVariables = 'Vari�veis'; 
$strServerTrafficNotes = '<b>Tr�fico do servidor</b>: Essas tabelas mostram as estat�sticas do tr�fico da rede neste servidor MySQL desde o in�cio.'; 
$strServerVars = 'Vari�veis e configura��es do servidor'; 
$strServerVersion = 'Vers�o do Servidor'; 
$strSessionStartupErrorGeneral = 'N�o p�de iniciar a sess�o sem erros, cheque os erros ocorridos nos logs do PHP e/ou do seu servidor web e configure a instala��o do PHP corretamente.';
$strSessionValue = 'Valor da sess�o'; 
$strSetEnumVal = 'Se um tipo de campo � "enum" ou "set", por favor entre valores usando este formato: \'a\',\'b\',\'c\'...<br />Se voc� for colocar uma barra contr�ria ("\") ou aspas simples ("\'") entre os valores, coloque uma barra contr�ria antes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').'; 
$strShowAll = 'Mostrar todos'; 
$strShowColor = 'Mostrar cor'; 
$strShowDatadictAs = 'Formato do dicion�rio de dados'; 
$strShowFullQueries = 'Mostrar consultas completas'; 
$strShowGrid = 'Mostrar grade'; 
$strShowHideLeftMenu = 'Exibir/Ocultar menu da esquerda';
$strShowingBookmark = 'Exibindo marcadores';
$strShowingPhp = 'Exibindo como c�digo PHP';
$strShowingRecords = 'Mostrando registros '; 
$strShowingSQL = 'Exibindo consulta SQL';
$strShow = 'Mostrar'; 
$strShowOpenTables = 'Exibir tabelas abertas';
$strShowPHPInfo = 'Mostrar informa��es do PHP'; 
$strShowSlaveHosts = 'Exibir servidores escravos';
$strShowSlaveStatus = 'Exibir status dos escravos';
$strShowStatusBinlog_cache_disk_useDescr = 'O n�mero de transa��es que usaram o cache do log bin�rio tempor�rio mas que excederam o valor do binlog_cache_size e usaram o arquivo tempor�rio para armazenar enunciados da transa��o.';
$strShowStatusBinlog_cache_useDescr = 'O n�mero de transa��es que usaram o cache do log bin�rio tempor�rio.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'O n�mero de tabelas tempor�rias no disco criadas automaticamente pelo servidor enquanto executava os enunciados. Se Created_tmp_disk_tables � grande, voc� pode aumentar o valor de tmp_table_size para fazer as tabelas tempor�rias serem baseadas na mem�ria ou inv�s de baseadas no disco';
$strShowStatusCreated_tmp_filesDescr = 'Quantos arquivos tempor�rios o MySQL tinha criado.';
$strShowStatusCreated_tmp_tablesDescr = 'O n�mero de tabelas tempor�rias na mem�ria criadas automaticamente pelo servidor enquanto executava os enunciados.';
$strShowStatusDelayed_errorsDescr = 'O n�mero de linhas escritas com INSERT DELAYED para cada erro ocorrido (provavelmente chave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'O n�mero de processos manipuladores de INSERT DELAYED em uso. Cada tabela diferente em que se usa INSERT DELAYED come�a seu pr�prio processo.';
$strShowStatusDelayed_writesDescr = 'O n�mero de linhas INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'O n�mero de enunciados FLUSH executados.';
$strShowStatusHandler_commitDescr = 'O n�mero de enunciados COMMIT internos.';
$strShowStatusHandler_deleteDescr = 'O n�mero de vezes que uma linha foi deletada de uma tabela.';
$strShowStatusHandler_discoverDescr = 'O servidor MySQL pode perguntar ao motor de armazenamento do NDB Cluster se ele sabe sobre uma tabela com um nome dado. Isto � chamado descoberta. Handler_discover indica o n�mero de vezes que tabelas foram descobertas.';
$strShowStatusHandler_read_firstDescr = 'O n�mero de vezes que a primeira entrada foi lida de um �ndice. Se isto for alto, sugere que o usu�rio est� fazendo muitas varreduras completas do �ndice; por exemplo, SELECT col1 FROM foo, supondo que col1 � um �ndice.';
$strShowStatusHandler_read_keyDescr = 'O n�mero de requisi��es para ler uma linha baseada em uma chave. Se isto for alto, � uma boa indica��o de que suas consultas e tabelas estejam corretamente indexadas.';
$strShowStatusHandler_read_nextDescr = 'O n�mero de requisi��es para ler a linha seguinte na ordem da chave. Isto � incrementado se voc� estiver consultando uma coluna do �ndice com uma restri��o da escala ou se voc� estiver fazendo uma varredura do �ndice.';
$strShowStatusHandler_read_prevDescr = 'O n�mero de requisi��es para ler a linha precedente na ordem da chave. Este m�todo de leitura � usado principalmente para otimizar ORDER BY� DESC.';
$strShowStatusHandler_read_rndDescr = 'O n�mero de requisi��es pra ler uma linha baseada em uma posi��o fixa. Isto � alto se voc� estiver fazendo muitas consultas que requerem a ordena��o do resultado. Voc� tem provavelmente muitas consultas que requerem que o MySQL fa�a a varredura de tabelas inteiras ou voc� tem jun��es que n�o usam as chaves corretamente.';
$strShowStatusHandler_read_rnd_nextDescr = 'O n�mero de requisi��es para ler a linha seguinte no arquivo de dados. Isto � alto se voc� estiver fazendo muitas varreduras da tabela. Geralmente isto sugere que suas tabelas n�o est�o corretamente indexadas ou que suas consultas n�o est�o escritas para tomar vantagem dos �ndices que voc� t�m.';
$strShowStatusHandler_rollbackDescr = 'O n�mero de enunciados ROLLBACK internos.';
$strShowStatusHandler_updateDescr = 'O n�mero de requisi��es para atualizar uma linha na tabela.';
$strShowStatusHandler_writeDescr = 'O n�mero de requisi��es para inserir uma linha na tabela.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'O n�mero de p�ginas que cont�m dados (sujos ou limpos).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'O n�mero de p�ginas atualmente sujas.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'O n�mero de p�ginas do buffer pool que foram requisitadas para serem niveladas.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'O n�mero de p�ginas livres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'O n�mero de p�ginas trancadas no buffer pool do InnoDB. Estas s�o p�ginas que est�o sendo lidas ou escritas atualmente ou aquela n�o pode ser nivelada ou removido por alguma outra raz�o.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'O n�mero de p�ginas ocupadas porque foram alocados para rotinas administrativas tais como trancamento de linhas ou �ndice hash adapt�vel. Este valor pode tamb�m ser calculado como Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamanho total do buffer pool, em p�ginas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'O n�mero de ler-adiante "aleat�rios" InnoDB iniciado. Isto acontece quando uma consulta faz a varredura de uma parcela grande de uma tabela mas na ordem aleat�ria.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'O n�mero de ler-adiante sequenciais InnoDB iniciado. Isto acontece quando o InnoDB faz uma varredura sequencial completa da tabela.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'O n�mero de requisi��es de leitura l�gica InnoDB que foram feitas.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'O n�mero de leituras l�gicas que o InnoDB n�o pode satisfer do buffer pool e teria que fazer uma leitura de p�gina simples';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, escreve para o buffer pool do InnoDB rodando em segundo plano. Entretanto, se for necess�rio ler ou criar uma p�gina e nenhuma p�gina limpa estiver dispon�vel, � necess�rio esperar as p�ginas serem niveladas primeiramente. Este contador conta inst�ncias dessas esperas. Se o tamanho do buffer pool for ajustado corretamente, este valor deve ser pequeno.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'O n�mero de escritas feitas para o buffer pool do InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'O n�mero de opera��es fsync() � fazer.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'O n�mero atual de opera��es fsync() pendentes.';
$strShowStatusInnodb_data_pending_readsDescr = 'O n�mero atual de leituras pendentes.';
$strShowStatusInnodb_data_pending_writesDescr = 'O n�mero atual de escritas pendentes.';
$strShowStatusInnodb_data_readDescr = 'O montante de leitura de dados � fazer, em bytes.';
$strShowStatusInnodb_data_readsDescr = 'O n�mero total de dados lidos.';
$strShowStatusInnodb_data_writesDescr = 'O n�mero total de dados escritos.';
$strShowStatusInnodb_data_writtenDescr = 'O montante de escrita de dados � fazer, em bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'O n�mero de escritas doublewrite que foram executadas e o n�mero de p�ginas que foram escritas para esta finalidade.';
$strShowStatusInnodb_dblwr_writesDescr = 'O n�mero de escritas doublewrite que foram executadas e o n�mero de p�ginas que foram escritas para esta finalidade.';
$strShowStatusInnodb_log_waitsDescr = 'O n�mero de esperas geradas porque o buffer do log era muito pequeno e teve que esperar que fosse nivelada antes de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'O n�mero de requisi��es de escrita de log.';
$strShowStatusInnodb_log_writesDescr = 'O n�mero de escritas f�sicas para o arquivo de log.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'O n�mero de escritas fsyncs feitas no arquivo de log.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'O n�mero de arquivos de log fsyncs pendentes.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escrita de arquivos de log pendentes.';
$strShowStatusInnodb_os_log_writtenDescr = 'O n�mero de bytes escritos para o arquivo de log.';
$strShowStatusInnodb_pages_createdDescr = 'O n�mero de p�ginas criadas.';
$strShowStatusInnodb_page_sizeDescr = 'O tamanho de p�gina compilada do InnoDB (padr�o 16KB). Muitos valores s�o contados em p�ginas; o tamanho de p�gina permite que sejam facilmente convertidos em bytes.';
$strShowStatusInnodb_pages_readDescr = 'O n�mero de p�ginas lidas.';
$strShowStatusInnodb_pages_writtenDescr = 'O n�mero de p�ginas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'O n�mero de linhas trancadas que est�o esperando atualmente.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'O tempo m�dio para recuperar uma linha trancada, em mil�segundo.';
$strShowStatusInnodb_row_lock_timeDescr = 'O tempo total gasto para recuperar linhas trancadas, em mil�segundo.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'O m�ximo de tempo para recuperar uma linha trancada, em mil�segundo.';
$strShowStatusInnodb_row_lock_waitsDescr = 'O n�mero de vezes que uma linhas trancada teve que esperar para ser escrita.';
$strShowStatusInnodb_rows_deletedDescr = 'O n�mero de linhas deletadas de tabelas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'O n�mero de linhas inseridas em tabelas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'O n�mero de linhas lidas de tabelas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'O n�mero de linhas atualizadas em tabelas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'O n�mero de blocos chave no cache chave que mudaram mas n�o foram nivelados ainda ao disco. Antes era chamado de Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'O n�mero de blocos n�o usados no cache chave. Voc� pode usar este valor para determinar quanto do cache chave est� no uso.';
$strShowStatusKey_blocks_usedDescr = 'O n�mero de blocos usados no cache chave. Este valor � uma marca d\'�gua que indica o n�mero m�ximo de blocos que estiveram sempre em uso em algum momento.';
$strShowStatusKey_read_requestsDescr = 'O n�mero de requisi��es para ler um bloco chave do cache.';
$strShowStatusKey_readsDescr = 'O n�mero de leituras f�sicas de um bloco chave do disco. Se Key_reads for alto, ent�o seu valor do key_buffer_size � provavelmente muito baixo. A taxa de falta de cache pode ser calculada como Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'O n�mero de requisi��es para escrever um bloco chave para o cache.';
$strShowStatusKey_writesDescr = 'O n�mero de escritas f�sicas para um bloco chave para o disco.';
$strShowStatusLast_query_costDescr = 'O custo total da �ltima consulta compilada como computado pelo otimizador de consultas. �til para comparar o custo de diferentes planos de consulta para a mesma consulta. O valor padr�o 0 significa que nenhuma consulta foi compilada ainda.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'O n�mero de linhas esperando para serem escritas na fila de INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'O n�mero de tabelas que devem estar abertas. Se aberta, as tabelas s�o grandes, o valor do cache de suas tabelas � provavelmente muito pequeno.';
$strShowStatusOpen_filesDescr = 'O n�mero de arquivos que est�o abertos.';
$strShowStatusOpen_streamsDescr = 'O n�mero de streams que est�o abertos (usados principalmente para log).';
$strShowStatusOpen_tablesDescr = 'O n�mero de tabelas que est�o abertas.';
$strShowStatusQcache_free_blocksDescr = 'O n�mero de blocos de mem�ria livre na consulta do cache.';
$strShowStatusQcache_free_memoryDescr = 'O montante de mem�ria livre para a consulta do cache.';
$strShowStatusQcache_hitsDescr = 'O n�mero de hits do cache.';
$strShowStatusQcache_insertsDescr = 'O n�mero de consultas adicionadas no cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'O n�mero de consultas que foram removidas do cache para liberar mem�ria para novas consultas. Essa informa��o pode ajudar voc� a ajustar o tamanho da consulta do cache. A consulta do cache usa a estrat�gia do "usado menos recentemente" (LRU - least recently used) para decidir qual consulta remover do cache.';
$strShowStatusQcache_not_cachedDescr = 'O n�mero de consultas sem cache (n�o cache�vel, ou n�o pode ser cache�vel devido � configura��o em query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'O n�mero de consultas registradas no cache.';
$strShowStatusQcache_total_blocksDescr = 'O n�mero total de blocos na consulta do cache.';
$strShowStatusReset = 'Resetar';
$strShowStatusRpl_statusDescr = 'O status da replica��o � prova de falhas (n�o implementado).';
$strShowStatusSelect_full_joinDescr = 'O n�mero de jun��es que n�o usaram �ndices. Se este valor n�o for 0, voc� deve cuidadosamente verificar os �ndices de suas tabelas.';
$strShowStatusSelect_full_range_joinDescr = 'O n�mero de jun��es que usaram uma pesquisa de escala na tabela de refer�ncia.';  //est� correto isso?
$strShowStatusSelect_range_checkDescr = 'O n�mero de jun��es sem chaves que verificam para ver se h� o uso da chave ap�s cada linha. (Se este n�o for 0, voc� deve cuidadosamente verificar os �ndices de suas tabelas.)';
$strShowStatusSelect_rangeDescr = 'O n�mero de jun��es que usaram escalas na primeira tabela. (N�o � normalmente cr�tico mesmo se este for grande.)';
$strShowStatusSelect_scanDescr = 'O n�mero jun��es que fez uma varredura completa da primeira tabela.';
$strShowStatusSlave_open_temp_tablesDescr = 'O n�mero de tabelas tempor�rias abertas atualmente pelo processo SQL escravo.';
$strShowStatusSlave_retried_transactionsDescr = 'N�mero total (desde o in�cio) de vezes que o processo SQL escravo de replica��o teve que tentar transa��es.';
$strShowStatusSlave_runningDescr = 'Isto � ON se este servidor � um escravo conectado � um mestre.';
$strShowStatusSlow_launch_threadsDescr = 'O n�mero de processos que levaram mais que slow_launch_time segundos para serem criadas.';
$strShowStatusSlow_queriesDescr = 'O n�mero de consultas que levaram mais que long_query_time segundos.';
$strShowStatusSort_merge_passesDescr = 'O n�mero de fus�es que o algoritmo de ordena��o teve que fazer. Se este valor for alto, voc� deve considerar aumentar o valor da vari�vel sort_buffer_size do sistema.';
$strShowStatusSort_rangeDescr = 'O n�mero de ordena��es que foram feitas com escalas.';  //est� correto isso? ranges = escalas??
$strShowStatusSort_rowsDescr = 'O n�mero de linhas ordenadas.';
$strShowStatusSort_scanDescr = 'O n�mero de ordena��es que foram feitas scaneando a tabela.';
$strShowStatusTable_locks_immediateDescr = 'O n�mero de vezes que uma tabela trancada foi recuperada imediatamente.';
$strShowStatusTable_locks_waitedDescr = 'O n�mero de vezes que uma tabela trancada n�o foi recuperada imediatamente e uma espera foi necess�ria. Se isso foi alto e voc� tem problemas de performance, voc� precisa primeiramente otimizar suas consultas e ent�o, ou dividir sua tabela ou usar replica��o.';
$strShowStatusThreads_cachedDescr = 'O n�mero de processos no cache de processos. A taxa de hits do cache pode ser calculada como Threads_created/conex�es. Se este valor for vermelho voc� deve aumentar seu thread_cache_size';
$strShowStatusThreads_connectedDescr = 'O n�mero de conex�es atualmente abertas.';
$strShowStatusThreads_createdDescr = 'O n�mero de processos criadas para manipular conex�es. Se Threads_created � grande, voc� deveria aumentar o valor de thread_cache_size. (Normalmente isso n�o da um aumento not�vel de performance se voc� tem uma boa implementa��o de processos.)';
$strShowStatusThreads_runningDescr = 'O n�mero de processos que n�o est�o dormindo.';
$strShowTableDimension = 'Mostrar dimens�o das tabelas'; 
$strShowTables = 'Mostrar tabelas'; 
$strShowThisQuery = ' Mostrar esta consulta SQL novamente '; 
$strSimplifiedChinese = 'Chin�s Simplificado'; 
$strSingly = '(singularmente)'; 
$strSize = 'Tamanho'; 
$strSkipQueries = 'N�mero de registros (consultas) ignoradas no in�cio';
$strSlovak = 'Eslov�quio'; 
$strSlovenian = 'Eslov�nio'; 
$strSmallBigAll = 'Tudo Pequeno/Grande';
$strSnapToGrid = 'Ajustar � grade';
$strSocketProblem = '(ou o soquete do servidor MySQL local n�o est� configurado corretamente)';
$strSortByKey = 'Ordenar pela chave'; 
$strSorting = 'Ordenando';
$strSort = 'Ordenar'; 
$strSpaceUsage = 'Uso do espa�o'; 
$strSpanish = 'Espanhol'; 
$strSplitWordsWithSpace = 'Palavras s�o separadas por um caracter de espa�o (" ").'; 
$strSQLCompatibility = 'Modo de compatibilidade SQL';
$strSQLExportType = 'Tipo de exporta��o'; 
$strSQLParserBugMessage = 'Talvez tenha encontrado um bug no analizador (parser) do SQL. Analise a sua Consulta SQL com aten��o, e verifique se as aspas est�o corretas e n�o est�o desencontradas. Outra possibilidade de falha � o fato de estar tentando subir um arquivo com sa�da bin�ria de uma �rea de texto citada. Pode tamb�m experimentar a sua consulta SQL no prompt de comandos do MySQL. A sa�da de erro do MySQL, isto se existir alguma, tamb�m poder� ajudar a diagnosticar o problema. Se continuar a ter problemas ou se o analisador (parser) falhar onde a interface da linha de comandos tiver sucesso, reduza por favor a entrada da consulta SQL at� aquele que causou o problema, e envie o relat�rio de bug com os dados do chunk da se��o CORTE abaixo:'; 
$strSQLParserUserError = 'Parece haver um erro na sua consulta SQL. A sa�da do servidor MySQL abaixo, isto se existir alguma, tamb�m poder� ajudar a diagnosticar o problema.'; 
$strSQLQuery = 'consulta SQL'; 
$strSQLResult = 'Resultado SQL'; 
$strSQL = 'SQL'; 
$strSQPBugInvalidIdentifer = 'Identificador inv�lido'; 
$strSQPBugUnclosedQuote = 'Aspas n�o fechada'; 
$strSQPBugUnknownPunctuation = 'String de pontua��o desconhecida'; 
$strStandInStructureForView = 'Estrutura stand-in para visualizar';
$strStatCheckTime = '�ltima verifica��o'; 
$strStatCreateTime = 'Cria��o'; 
$strStatement = 'Comandos'; 
$strStatisticsOverrun = 'Em servidores ocupados, os contadores de byte podem sobrecarregar, ent�o as estat�sticas como relatadas pelo servidor MySQL podem estar incorretas.';
$strStatUpdateTime = '�ltima atualiza��o'; 
$strStatus = 'Status'; 
$strStorageEngines = 'Storage Engines'; // sem traducao
$strStorageEngine = 'Storage Engine'; // sem traducao
$strStrucCSV = 'Dados CSV'; 
$strStrucData = 'Estrutura e dados'; 
$strStrucExcelCSV = 'CSV para dados MS Excel'; 
$strStrucNativeExcel = 'Dados nativos do MS Excel'; 
$strStrucOnly = 'Somente estrutura'; 
$strStructPropose = 'Propor estrutura da tabela'; 
$strStructure = 'Estrutura'; 
$strStructureForView = 'Estrutura para visualizar';
$strSubmit = 'Submeter'; 
$strSuccess = 'Seu comando SQL foi executado com sucesso'; 
$strSum = 'Soma'; 
$strSwedish = 'Su�co'; 
$strSwitchToDatabase = 'Mudar para o Banco de Dados copiado'; 
$strSwitchToTable = 'Mudar para a tabela copiada'; 

$strTableAlreadyExists = 'Tabela %s j� existe!';
$strTableComments = 'Coment�rios da tabela'; 
$strTableEmpty = 'O Nome da Tabela est� vazio!'; 
$strTableHasBeenDropped = 'Tabela %s foi eliminada'; 
$strTableHasBeenEmptied = 'Tabela %s foi esvaziada'; 
$strTableHasBeenFlushed = 'Tabela %s foi limpa'; 
$strTableIsEmpty = 'Tabela para estar vazia!';
$strTableMaintenance = 'Tabela de Manuten��o'; 
$strTableName = 'Nome da Tabela';
$strTableOfContents = 'Tabela de conte�dos'; 
$strTableOptions = 'Op��es da tabela'; 
$strTables = '%s tabela(s)'; 
$strTableStructure = 'Estrutura da tabela'; 
$strTable = 'Tabela'; 
$strTakeIt = 'tome'; 
$strTblPrivileges = 'Privil�gios espec�ficos da tabela'; 
$strTempData = 'Dados tempor�rios';
$strTextAreaLength = ' Por causa da sua largura,<br /> esse campo pode n�o ser edit�vel '; 
$strThai = 'Thailand�s'; 
$strThemeDefaultNotFound = 'Tema padr�o %s n�o encontrado!';
$strThemeNoPreviewAvailable = 'Nenhuma pr�-visualiza��o dispon�vel.';
$strThemeNotFound = 'Tema %s n�o encontrado!';
$strThemeNoValidImgPath = 'Encontrado caminho inv�lido para imagens para o tema %s!';
$strThemePathNotFound = 'Encontrado caminho inv�lido para o tema %s!';
$strTheme = 'Tema / Estilo'; 
$strThisHost = 'Esse Servidor'; 
$strThreads = 'Processos';
$strThreadSuccessfullyKilled = 'Processo %s foi morto com sucesso.'; 
$strTimeoutInfo = 'Importa��o anterior passou do tempo limite, depois de reenviar, ir� continuar na posi��o %d.';
$strTimeoutNothingParsed = 'Entretanto na �ltima vez nenhum dado foi passado, isso normalmente significa que o phpMyAdmin n�o � capaz de finalizar essa importa��o � menos que voc� aumente o tempo limite do PHP.';
$strTimeoutPassed = 'Script passou do tempo limite, se voc� deseja terminar a importa��o, reenvie o mesmo arquivo que a importa��o ser� resumida.';
$strTime = 'Tempo'; 
$strToFromPage = 'p�gina de/para';
$strToggleScratchboard = 'mudar o estado do Scratchboard'; //isso est� correto? mas nao descobri o q eh
$strToggleSmallBig = 'Mudar para pequeno/grande';
$strToSelectRelation = 'Para selecionar relacionamento, clique :';
$strTotal = 'total'; 
$strTotalUC = 'Total'; 
$strTraditionalChinese = 'Chin�s Tradicional'; 
$strTraditionalSpanish = 'Espanhol Traditional'; 
$strTraffic = 'Tr�fego'; 
$strTransactionCoordinator = 'Coordenador da transa��o';
$strTransformation_application_octetstream__download = 'Mostrar o link para baixar os dados bin�rios do campo. Primeira op��o � o nome do arquivo bin�rio. Segunda op��o � um poss�vel nome de campo de uma linha da tabela que cont�m o nome do arquivo. Se voc� usar a segunda op��o precisa colocar na primeira op��o uma string em branco'; 
$strTransformation_application_octetstream__hex = 'Exibir representa��o hexadecimal dos dados. Primeiro par�metro opcional especifica como frequentemente espa�os ser�o adicionados (padr�o para 2 mordidelas).';  //ta certo isso? nibbles, traduzi como mordidelas
$strTransformation_image_jpeg__inline = 'Mostrar uma miniatura clic�vel; op��es: largura,altura em pixels (mant�m a propor��o original)'; 
$strTransformation_image_jpeg__link = 'Mostrar o link para esta imagem (ex.: blob download direto).'; 
$strTransformation_image_png__inline = 'Ver imagem/jpeg: em linha'; 
$strTransformation_text_plain__dateformat = 'Exibir um TIME, TIMESTAMP, DATETIME ou campo num�rico unix timestamp formatado como data. A primeira op��o � o offset (em horas) que ser� adicionado ao timestamp (Padr�o: 0). Use a segunda op��o para especificar uma string de formata��o data/tempo diferente. A terceira op��o determina se voc� deseja ver data local ou UTC (use a string "local" ou "utc") para isso. De acordo com isso, o formatdo da data ter� valores diferentes - para "local" veja a documenta��o do PHP para fun��o strftime() e para "utc" isso � feito usando a fun��o gmdate().';
$strTransformation_text_plain__external = 'LINUX APENAS: Rode uma aplica��o externa e alimente os campos de dados pela entrada padr�o. Retorna a sa�da padr�o da aplica��o. Padr�o � Limpo, para uma bonita impress�o do c�digo HTML. Por raz�es de seguran�a, voc� deve editar manualmente o arquivo libraries/transformations/text_plain__external.inc.php e inserir as ferramentas que voc� permite rodar. A primeira op��o � o n�mero do programa que voc� quer rodar e a segunda op��o s�o os par�metros para o programa. A terceira op��o, se setada para 1 ir� converter a sa�da usando htmlspecialchars() (Padr�o � 1). A quarta op��o, se setada como 1 ir� por um NOWRAP para o conte�do da c�lula, de forma que a sa�da inteira ser� mostrada sem reformata��o(Padr�o � 1)'; 
$strTransformation_text_plain__formatted = 'Preservar a formata��o original campo. Sem escape.'; 
$strTransformation_text_plain__imagelink = 'Mostrar uma imagem e um link, o campo cont�m um nome de arquivo; primeira op��o � um prefixo tipo "http://domain.com/", segunda op��o � a largura em pixels, o terceiro � a altura.'; 
$strTransformation_text_plain__link = 'Mostrar um link, o campo cont�m o nome do arquivo, primeira op��o � um prefixo tipo "http://domain.com/", segunda op��o � um t�tulo para o link.'; 
$strTransformation_text_plain__sql = 'Formatar texto como consulta SQL com s�ntaxe colorida.';
$strTransformation_text_plain__substr = 'Mostrar apenas parte da string. Primeira op��o � um offset para definir onde a sa�da do seu texto deve iniciar (Padr�o: 0). Segunda op��o � o quanto do texto dever� ser retornado. Se estiver em branco, retorna todo o restante do texto. Terceira op��o define quais caracteres ser�o acrescentados na substring retornada (Padr�o: ...).'; 
$strTriggers = 'Gatilhos';
$strTruncateQueries = 'Truncar as consultas SQL exibidas'; 
$strTurkish = 'Turco'; 
$strType = 'Tipo'; 

$strUkrainian = 'Ucraniano'; 
$strUncheckAll = 'Desmarcar todos'; 
$strUnicode = 'Unicode'; 
$strUnique = '�nico'; 
$strUnknown = 'desconhecido'; 
$strUnselectAll = 'Desmarcar Todos'; 
$strUnsupportedCompressionDetected = 'Voc� tentou carregar um arquivo com compress�o n�o suportada (%s). Pode o suporte para isso n�o ter sido implementado ou pode ter sido desabilitado por sua configura��o PHP.';
$strUpdatePrivMessage = 'Voc� mudou os privil�ios para %s.'; 
$strUpdateProfileMessage = 'A configura��o foi atualizada.'; 
$strUpdateQuery = 'Atualizar a consulta SQL'; 
$strUpdComTab = 'Consulte a documenta��o sobre como atualizar sua tabela Column_comments'; 
$strUpgrade = 'Voc� deveria atualizar para %s %s ou posterior.'; 
$strUploadErrorCantWrite = 'Falhou ao salvar arquivo no disco.';
$strUploadErrorExtension = 'Carregamento do arquivo parado pela exten��o.';
$strUploadErrorFormSize = 'O arquivo carregado excede o tamanho definido na diretriz MAX_FILE_SIZE do formul�rio HTM.';
$strUploadErrorIniSize = 'O arquivo carregado excede o tamanho definido na diretriz upload_max_filesize no php.ini.';
$strUploadErrorNoTempDir = 'Pasta tempor�ria n�o encontrada.';
$strUploadErrorPartial = 'Carregamento do arquivo foi apenas parcial.';
$strUploadErrorUnknown = 'Erro desconhecido no carregamento do arquivo.';
$strUploadLimit = 'Voc� provavelmente tentou carregar um arquivo muito grande. Veja refer�ncias na %sdocumentation%s para burlar esses limites.';
$strUploadsNotAllowed = 'N�o � permitido subir arquivos neste servidor.';
$strUsage = 'Uso'; 
$strUseBackquotes = 'Usar aspas simples nos nomes de tabelas e campos'; 
$strUsedPhpExtensions = 'Extens�es PHP usadas';
$strUseHostTable = 'Usar Tabela do Servidor'; 
$strUserAlreadyExists = 'O usu�rio %s j� existe!'; 
$strUserEmpty = 'O nome do usu�rio est� em branco!'; 
$strUserName = 'Nome do usu�rio'; 
$strUserNotFound = 'O usu�rio selecionado n�o foi encontrado na tabela de privil�gios.'; 
$strUserOverview = 'Avalia��o dos usu�rios'; 
$strUsersDeleted = 'Os usu�rios selecionados foram apagados com sucesso.'; 
$strUsersHavingAccessToDb = 'Usu�rios que t�m acesso � &quot;%s&quot;'; 
$strUser = 'Usu�rio'; 
$strUseTabKey = 'Usar a teclar TAB para se mover de valor em valor, ou CTRL+setas para mover em qualquer dire��o'; 
$strUseTables = 'Usar tabelas'; 
$strUseTextField = 'Usar campo texto'; 
$strUseThisValue = 'Usar este valor'; 

$strValidateSQL = 'Validar SQL'; 
$strValidatorError = 'O Validador SQL n�o pode ser inicializado. Verifique se voc� instalou a exten��o necess�ria do php conforme est� escrito em %sdocumentation%s.'; 
$strValue = 'Valor'; 
$strVar = 'Vari�veis'; 
$strVersionInformation = 'Informa��es da vers�o';
$strViewDumpDatabases = 'Ver dump (esquema) dos Bancos de Dados'; 
$strViewDumpDB = 'Ver o esquema do Banco de Dados'; 
$strViewDump = 'Ver o esquema da tabela'; 
$strViewHasBeenDropped = 'Vis�o %s foi apagada';
$strViewMaxExactCount = 'Essa vis�o tem mais que %s linhas. Veja refer�ncias na %sdocumentation%s.';
$strViewName = 'Nome da VIS�O';
$strView = 'Vis�o';

$strWebServerUploadDirectoryError = 'O diret�rio que voc� especificou para subir arquivos n�o foi encontrado.'; 
$strWebServerUploadDirectory = 'Servidor web subiu o diret�rio'; 
$strWelcome = 'Bem vindo ao %s'; 
$strWestEuropean = 'Oeste Europeu'; 
$strWildcard = 'coringa'; 
$strWindowNotFound = 'A janela alvo do navegador n�o pode ser atualizada. Talvez voc� tenha fechado a janela alvo ou o seu navegador tenha bloqueado a comunica��o entre janelas nas configura��es de seguran�a.'; 
$strWithChecked = 'Com marcados:'; 
$strWriteRequests = 'Escrita requisitada';
$strWrongUser = 'Usu�rio ou senha incorreta. Acesso negado.'; 

$strXML = 'XML'; 

$strYes = 'Sim'; 

$strZeroRemovesTheLimit = 'Nota: Ajustar essa op��o para 0 (zero) remove os limites.'; 
$strZip = '"compactado com zip"'; 

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
