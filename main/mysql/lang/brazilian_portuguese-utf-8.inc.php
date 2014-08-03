<?php
/* $Id: brazilian_portuguese-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */
/* translated by: Airon Luis Pereira <airon(dot)pereira(at)gmail(dot)com> */ 

$charset = 'utf-8'; 
$allow_recoding = TRUE;
$text_dir = 'ltr';  // ('ltr' da esquerda para direita, 'rtl' da direita para esquerda)
$number_thousands_separator = ','; 
$number_decimal_separator = '.'; 
// abreviações para Byte, Kilo, Mega, Giga, Tera, Peta, Exa 
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB'); 

$mysql_4_1_doc_lang = 'pt';

$day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'); 
$month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'); 
// Veja http://www.php.net/manual/en/function.strftime.php para definir
// as variáveis abaixo
$datefmt = '%B %d, %Y as %I:%M %p'; 

$timespanfmt = '%s dias, %s horas, %s minutos e %s segundos'; 

$strAbortedClients = 'Abortado'; 
$strAccessDenied = 'Acesso negado'; 
$strAccessDeniedCreateConfig = 'A provável razão para isso é que você não criou o arquivo de configuração. Você deve usar o %1$ssetup script%2$s para criar um.';
$strAccessDeniedExplanation = 'phpMyAdmin tentou se conectar no servidor MySQL e a conxão foi recusada. Você deve checar o servidor, nome de usuário e senha no config.inc.php e se certificar que correspondam com as informações fornecidas pelo administrador do servidor MySQL.'; 
$strAction = 'Ação'; 
$strAddAutoIncrement = 'Adicionar valor AUTO_INCREMENT'; 
$strAddClause = 'Adicionar %s';
$strAddConstraints = 'Adicionar restrições'; 
$strAddDeleteColumn = 'Adicionar/Remover colunas'; 
$strAddDeleteRow = 'Adicionar/Remover critérios de busca'; 
$strAddFields = 'Adicionar %s campo(s)'; 
$strAddHeaderComment = 'Adicionar comentário pessoal no cabeçalho (\\n quebra linhas)'; 
$strAddIntoComments = 'Adicionar nos comentários'; 
$strAddNewField = 'Adicionar novo campo'; 
$strAddPrivilegesOnDb = 'Adicionar privilégios nas seguintes Banco de Dados'; 
$strAddPrivilegesOnTbl = 'Adicionar privilégios nas seguintes tabelas'; 
$strAddSearchConditions = 'Condição de Pesquisa (complemento da cláusula "onde"):'; 
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)'; 
$strAddUser = 'Adicionar novo usuário'; 
$strAddUserMessage = 'Adicionado usuário'; 
$strAdministration = 'Administração'; 
$strAffectedRows = 'Registro(s) afetado(s):'; 
$strAfter = 'Depois %s'; 
$strAfterInsertBack = 'Retornar'; 
$strAfterInsertNewInsert = 'Inserir novo registro'; 
$strAfterInsertNext = 'Editar próximo registro'; 
$strAfterInsertSame = 'Voltar para esta página'; 
$strAllowInterrupt = 'Permitir interromper a importação caso se detecte que o script demorará perto do tempo limite. Isso pode ser um bom caminho para importar arquivos grandes, entretanto isso pode interromper as transações.';
$strAllTableSameWidth = 'mostrar todas as tabelas com o mesmo tamanho?'; 
$strAll = 'Todos'; 
$strAlterOrderBy = 'Alterar tabela ordenada por'; 
$strAnalyzeTable = 'Analizar tabela'; 
$strAnd = 'E'; 
$strAndThen = 'e então';
$strAngularLinks = 'Links Angulares';
$strAnIndex = 'Um índice foi adicionado a %s'; 
$strAnyHost = 'Qualquer servidor'; 
$strAny = 'Qualquer'; 
$strAnyUser = 'Qualquer usuário'; 
$strApproximateCount = 'Pode ser aproximado. Veja o FAQ 3.11'; 
$strAPrimaryKey = 'Uma chave primária foi adicionada a %s'; 
$strArabic = 'Árabe'; 
$strArmenian = 'Armêno'; 
$strAscending = 'Ascendente'; 
$strAtBeginningOfTable = 'No início da tabela'; 
$strAtEndOfTable = 'No final da tabela'; 
$strAttr = 'Atributos'; 
$strAutomaticLayout = 'Leiaute automático'; 

$strBack = 'Voltar'; 
$strBaltic = 'Báltico'; 
$strBeginCut = 'INICIO CORTE'; 
$strBeginRaw = 'INICIO CRU'; 
$strBinary = ' Binário '; 
$strBinaryDoNotEdit = ' Binário - não edite '; 
$strBinaryLog = 'Log binário'; 
$strBinLogEventType = 'Tipo de evento'; 
$strBinLogInfo = 'Informação'; 
$strBinLogName = 'Nome do log'; 
$strBinLogOriginalPosition = 'Posição original'; 
$strBinLogPosition = 'Posição'; 
$strBinLogServerId = 'ID do Servidor'; 
$strBookmarkAllUsers = 'Deixar qualquer usuário acessar esse marcador'; 
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
$strBusyPages = 'Página ocupadas';
$strBzError = 'phpMyAdmin não foi capaz de comprimir o dump devido a um defeito na extensão Bz2 desta versão do php. É extremamente recomendado configurar a diretiva <code>$cfg[\'BZipDump\']</code> do arquivo de configuração do phpMyAdmin para <code>FALSE</code>. Se você quiser usar os recursos de compressão Bz2, você terá que atualizar para uma versão mais nova do PHP. Veja os relatórios de bug %s do php para detalhes.'; 
$strBzip = '"compactado com bzip"'; 

$strCalendar = 'Calendário'; 
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'Não pode carregar exportação dos plugins, verifique sua instalação!';
$strCanNotLoadImportPlugins = 'Não foi possível importar plugins, verifique sua instalação!';
$strCannotLogin = 'Não foi possível se logar no servidor MySQL'; 
$strCantLoad = 'não carregou extensão %s,<br />verifique a configurações do php'; 
$strCantLoadRecodeIconv = 'Não é possível carregar <i>iconv</i> ou recodificar a extensão necessária para a conversão do Conjunto de Caracteres, configure o PHP de modo a permitir utilizar estas extensões ou desligue a conversão do Conjunto de Caracteres no phpMyAdmin.'; 
$strCantRenameIdxToPrimary = 'Não foi possível renomear o índice para "PRIMARY"!'; 
$strCantUseRecodeIconv = 'Não é possível usar <i>iconv</i> nem <i>libiconv</i> nem a função <i>recode_string</i> enquanto a extensão reportar que está ligada. Confira a configuração do seu php.'; 
$strCardinality = 'Cardinalidade'; 
$strCaseInsensitive = 'Não diferencia maiúsculas/minúsculas'; 
$strCaseSensitive = 'Diferencia maiúsculas/minúsculas'; 
$strCentralEuropean = 'Europeu Central'; 
$strChange = 'Alterar'; 
$strChangeCopyModeCopy = '... manter o antigo.'; 
$strChangeCopyMode = 'Criar um novo usuário com os mesmos privilégios e ...'; 
$strChangeCopyModeDeleteAndReload = ' ... apagar o antigo da tabela de usuários e depois recarregar os privilégios.'; 
$strChangeCopyModeJustDelete = ' ... apagar o antigo da tabela de usuários.'; 
$strChangeCopyModeRevoke = ' ... revogar todos privilégios do usuário antigo e depois apagar ele.'; 
$strChangeCopyUser = 'Mudar informações de login / Copiar usuário'; 
$strChangeDisplay = 'Escolha o campo para exibir'; 
$strChangePassword = 'Alterar a senha'; 
$strCharset = 'Conjunto de caracteres'; 
$strCharsetOfFile = 'Conjunto de caracteres do arquivo'; 
$strCharsetsAndCollations = 'Conjuntos de caracteres e Collations'; 
$strCharsets = 'Conjuntos de caracteres'; 
$strCheckAll = 'Marcar todos'; 
$strCheckOverhead = 'Verificar sobre-carga'; 
$strCheckPrivsLong = 'Verificar privilégios para a Banco de Dados &quot;%s&quot;.'; 
$strCheckPrivs = 'Verificar privilégios'; 
$strCheckTable = 'Verificar tabela'; 
$strChoosePage = 'Escolha a página para editar'; 
$strColComFeat = 'Exibindo comentários da coluna'; 
$strCollation = 'Collation'; 
$strColumnNames = 'Nome das colunas'; 
$strColumnPrivileges = 'Privilégios específicos da coluna'; 
$strCommand = 'Comando'; 
$strComments = 'Comentários'; 
$strCommentsForTable = 'COMENTÁRIOS PARA A TABELA'; 
$strCompatibleHashing = 'Compatível com MySQL&nbsp;4.0'; 
$strCompleteInserts = 'Inserções completas'; 
$strCompression = 'Compressão'; 
$strCompressionWillBeDetected = 'Compressão do arquivo importado será automaticamente detectada de: %s';
$strConfigDefaultFileError = 'Não foi possível carregar configuração padrão de: "%1$s"';
$strConfigFileError = 'O phpMyAdmin não foi capaz de ler o arquivo de configuração!<br />Isto pode acontecer se o php encontrar um erro no <i>parsing</i> ou se não conseguir encontrar o arquivo.<br />Chame o arquivo de configuração diretamente usando o <i>link</i> abaixo e leia a(s) mensagem(ns) de erro do php. Na maior parte dos casos, trata-se de uma falta de aspas ou de um ponto e vírgula errado.<br />Se receber uma página em branco, está tudo certo.'; 
$strConfigureTableCoord = 'Configure as coordenadas para a tabela %s'; 
$strConnectionError = 'Não pode conectar: configurações inválidas.'; 
$strConnections = 'Conexões'; 
$strConstraintsForDumped = 'Restrições para as tabelas dumpadas'; 
$strConstraintsForTable = 'Restrições para a tabela'; 
$strControluserFailed = 'Conexão para controle do usuário como definido nas configurações falhou.';
$strCookiesRequired = 'Cookies devem estar ativos após este ponto.'; 
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'Banco de Dados %s copiado para %s'; 
$strCopyTable = 'Copiar tabela para (Banco de Dados<b>.</b>tabela):'; 
$strCopyTableOK = 'Tabela %s copiada para %s.'; 
$strCopyTableSameNames = 'Não pode copiar a tabela para ela mesma!'; 
$strCouldNotKill = 'phpMyAdmin não foi capaz de matar o processo %s. É possível que ele já esteja fechado.'; 
$strCreate = 'Criar'; 
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE antes de copiar';
$strCreateIndex = 'Criar um índice em&nbsp;%s&nbsp;colunas'; 
$strCreateIndexTopic = 'Criar um novo índice'; 
$strCreateNewDatabase = 'Criar novo Banco de Dados'; 
$strCreateNewTable = 'Criar nova tabela no Banco de Dados %s'; 
$strCreatePage = 'Criar uma nova página'; 
$strCreatePdfFeat = 'Criação de PDFs'; 
$strCreateRelation = 'Criar relacionamento';
$strCreateTable  = 'Criar tabela';
$strCreateUserDatabase = 'Banco de Dados para usuário';
$strCreateUserDatabaseName = 'Criar Banco de Dados com o mesmo nome e conceder todos os privilégios';
$strCreateUserDatabaseNone = 'Nenhum';
$strCreateUserDatabaseWildcard = 'Conceder todos os privilégios no nome coringa (nome_do_usuário_%)';
$strCreationDates = 'Criar/Atualizar/Verificar datas'; 
$strCriteria = 'Critério'; 
$strCroatian = 'Croata'; 
$strCSV = 'CSV';
$strCyrillic = 'Cirílico'; 
$strCzechSlovak = 'Tcheco-Eslováquio'; 
$strCzech = 'Tcheco'; 

$strDanish = 'Dinamarquês'; 
$strDatabase = 'Banco de Dados'; 
$strDatabaseEmpty = 'O nome do Banco de Dados está em branco!'; 
$strDatabaseExportOptions = 'Opções de exportação do Banco de Dados'; 
$strDatabaseHasBeenDropped = 'Banco de Dados %s foi eliminado.'; 
$strDatabases = 'Banco de Dados'; 
$strDatabasesDropped = 'Banco de Dados %s foi eliminado com sucesso!'; 
$strDatabasesStatsDisable = 'Disabilitar estatísticas'; 
$strDatabasesStatsEnable = 'Habilitar estatísticas'; 
$strDatabasesStats = 'Estatísticas do Banco de Dados'; 
$strDatabasesStatsHeavyTraffic = 'Nota: Ativar as estatísticas pode causar um grande volume de tráfego de dados entre o servidor web e o servidor MySQL.'; 
$strData = 'Dados'; 
$strDataDict = 'Dicionário de dados'; 
$strDataOnly = 'Dados apenas'; 
$strDataPages = 'Páginas contendo dados';
$strDBComment = 'Comentário do Banco de Dados: '; 
$strDBCopy = 'Copiar Banco de Dados para'; 
$strDbIsEmpty = 'Banco de Dados parece estar vazio!';
$strDbPrivileges = 'Privilégios específicos do Banco de Dados'; 
$strDBRename = 'Renomear Banco de Dados para'; 
$strDbSpecific = 'Específico do Banco de Dados'; 
$strDefaultEngine = '%s é o stored engine padrão neste servidor MySQL.';
$strDefault = 'Padrão'; 
$strDefaultValueHelp = 'Para valores padrão, digite um valor simples, sem barras de escape ou aspas, use este formato: a'; 
$strDefragment = 'Desfragmentar tabela'; 
$strDelayedInserts = 'Usar inserções demoradas'; 
$strDeleteAndFlush = 'Apagar usuário e depois recarregar os privilégios.'; 
$strDeleteAndFlushDescr = 'Esse é o caminho mais claro, mas recarregar os privilégios pode demorar um pouco.'; 
$strDeleted = 'Registro eliminado'; 
$strDeletedRows = 'Registros eliminados:'; 
$strDeleteNoUsersSelected = 'Nenhum usuário selecionado para exclusão!';
$strDeleteRelation = 'Apagar relacionamento';
$strDelete = 'Remover'; 
$strDeleting = 'Eliminando %s'; 
$strDelimiter = 'Delimitadores';
$strDelOld = 'A Página atual contêm referências para uma tabela que não existe. Gostaria de eliminar estas referências?'; 
$strDescending = 'Descendente'; 
$strDescription = 'Descrição'; 
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'O campo de exibição está em rosa. Para ajustar/desajustar um campo como campo de exibição, clique no ícone "Escolher campo para exibição", então clique no nome do campo apropriado.';
$strDictionary = 'dicionário'; 
$strDirectLinks = 'Links diretos';
$strDirtyPages = 'Páginas sujas';
$strDisabled = 'Desabilitado'; 
$strDisableForeignChecks = 'Desabilitar verificação de chaves estrangeiras'; 
$strDisplayFeat = 'Exibir recursos'; 
$strDisplayOrder = 'Ordenado por:'; 
$strDisplayPDF = 'Exibir esquema PDF'; 
$strDoAQuery = 'Faça uma "consulta por exemplo" (coringa: "%")'; 
$strDocSQL = 'DocSQL';
$strDocu = 'Documentação'; 
$strDoYouReally = 'Confirmar'; 
$strDropDatabaseStrongWarning = 'Você está prestes à DESTRUIR completamente o Banco de Dados!'; 
$strDrop = 'Eliminar'; 
$strDropUsersDb = 'Eliminar o Banco de Dados que possui o mesmo nome dos usuários.'; 
$strDumpingData = 'Extraindo dados da tabela'; 
$strDumpSaved = 'Dump foi salvo no arquivo %s.'; 
$strDumpXRows = 'Dumpar %s registros, começando pelo registro %s.'; 
$strDynamic = 'dinâmico'; 

$strEdit = 'Editar'; 
$strEditPDFPages = 'Editar Páginas PDF'; 
$strEditPrivileges = 'Editar Privilégios'; 
$strEffective = 'Efetivo'; 
$strEmpty = 'Limpar'; 
$strEmptyResultSet = 'MySQL retornou um conjunto vazio (ex. zero registros).'; 
$strEnabled = 'Habilitado'; 
$strEncloseInTransaction = 'Encapsular exportação numa transação'; 
$strEndCut = 'FIM CORTE'; 
$strEnd = 'Fim'; 
$strEndRaw = 'FIM CRU'; 
$strEngineAvailable = '%s está disponível neste servidor MySQL.';
$strEngineDisabled = '%s está desabilitado neste servidor MySQL.';
$strEngines = 'Engines'; //sem traducao
$strEngineUnsupported = 'Esse servidor MySQL não suporta o stored engine %s.';
$strEnglish = 'Inglês'; 
$strEnglishPrivileges = ' Nota: nomes de privilégios do MySQL são expressos em inglês '; 
$strError = 'Erro'; 
$strErrorInZipFile = 'Erro no arquivo ZIP:';
$strErrorRelationAdded = 'Erro: relacionamento não adicionado.';
$strErrorRelationExists = 'Erro: relacionamento já existe.';
$strErrorRenamingTable = 'Erro ao renomear tabela %1$s para %2$s';
$strErrorSaveTable = 'Erro ao salvar coordenada para o Designer.';
$strEscapeWildcards = 'Coringas _ e % precisam ser precedidos com uma \ para serem usados literalmente'; 
$strEsperanto = 'Esperanto';
$strEstonian = 'Estoniano'; 
$strEvent = 'Evento';
$strExcelEdition = 'Edição do Excel'; 
$strExecuteBookmarked = 'Executar consulta marcada'; 
$strExplain = 'Explicar SQL'; 
$strExport = 'Exportar'; 
$strExportImportToScale = 'Exportar/Importar para escala';
$strExportMustBeFile = 'Tipo de exportação selecionada tem que ser salva no arquivo!';
$strExtendedInserts = 'Inserções extendidas'; 
$strExtra = 'Extra'; 

$strFailedAttempts = 'Tentativas falharam'; 
$strField = 'Campo'; 
$strFieldHasBeenDropped = 'Campo %s foi deletado'; 
$strFieldInsertFromFileTempDirNotExists = 'Erro ao mover o arquivo carregado, veja FAQ 1.11';
$strFields = 'Campos'; 
$strFieldsEnclosedBy = 'Campos delimitados por'; 
$strFieldsEscapedBy = 'Campos contornados por'; 
$strFieldsTerminatedBy = 'Campos terminados por'; 
$strFileAlreadyExists = 'O arquivo %s já existe no servidor, mude o nome do arquivo ou verifique sua opção de sobrescrever.'; 
$strFileCouldNotBeRead = 'O arquivo não pode ser lido'; 
$strFileNameTemplateDescriptionDatabase = 'nome do Banco de Dados';
$strFileNameTemplateDescription = 'Esse valor é interpretado usando %1$sstrftime%2$s, então você pode usar as strings de formatação de tempo. Adicionalmente a seguinte transformação ocorrerá: %3$s. Outros textos serão mantidos como são.';
$strFileNameTemplateDescriptionServer = 'nome do servidor';
$strFileNameTemplateDescriptionTable = 'nome da tabela';
$strFileNameTemplate = 'Nome do arquivo do modelo'; 
$strFileNameTemplateRemember = 'lembrar modelo'; 
$strFiles = 'Arquivos';
$strFileToImport = 'Arquivo para importar';
$strFixed = 'fixo'; 
$strFlushPrivilegesNote = 'Nota: O phpMyAdmin recebe os privilégios dos usuário diretamente da tabela de privilégios do MySQL. O conteúdo destas tabelas pode divergir dos privilégios que o servidor usa se alterações manuais forem feitas nele. Neste caso, você deve usar %sRELOAD PRIVILEGES%s antes de continuar..'; 
$strFlushQueryCache = 'Nivelar cache da consulta';  //está correto isso?
$strFlushTable = 'Limpar a tabela ("LIMPAR")'; 
$strFlushTables = 'Nivelar (fechar) todas as tabelas';  //está correto isso?
$strFontSize = 'Tamanho da fonte';
$strForeignKeyError = 'Erro na criação da chave estrangeira (cheque o tipo de dado)';
$strFormat = 'Formato'; 
$strFormEmpty = 'Faltando valores no formulário!'; 
$strFreePages = 'Páginas livres';
$strFullText = 'Textos completos'; 
$strFunction = 'Funções'; 
$strFunctions = 'Funções';

$strGenBy = 'Gerado por'; 
$strGeneralRelationFeat = 'Recursos de relações gerais'; 
$strGenerate = 'Gerar';
$strGeneratePassword = 'Gerar Senha';
$strGenTime = 'Tempo de Geração'; 
$strGeorgian = 'Georgiano'; 
$strGerman = 'Alemão'; 
$strGlobal = 'global'; 
$strGlobalPrivileges = 'Privilégios globais'; 
$strGlobalValue = 'Valor global'; 
$strGo = 'Executar'; 
$strGrantOption = 'Conceder/Grant'; 
$strGreek = 'Grego'; 
$strGzip = '"compactado com gzip"'; 

$strHandler = 'Alimentador';  //está correto isso? seria Gestor??
$strHasBeenAltered = 'foi alterado.'; 
$strHasBeenCreated = 'foi criado.'; 
$strHaveToShow = 'Deve escolher pelo menos uma coluna para exibir'; 
$strHebrew = 'Hebreu'; 
$strHelp = 'Ajuda';
$strHexForBLOB = 'Usar hexadecimal para BLOB';
$strHide = 'Ocultar';
$strHideShowAll = 'Ocultar/Exibir tudo';
$strHideShowNoRelation = 'Ocultar/Exibir Tabelas sem relacionamento';
$strHomepageOfficial = 'Página Oficial do phpMyAdmin'; 
$strHome = 'Principal'; 
$strHostEmpty = 'O nome do servidor está vazio!'; 
$strHost = 'Servidor'; 
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Húngaro'; 

$strIcelandic = 'Islandês'; 
$strId = 'ID'; 
$strIdxFulltext = 'Texto completo'; 
$strIEUnsupported = 'Internet Explorer não suporta esta função.';
$strIgnoreDuplicates = 'Ignorar linhas duplicadas';
$strIgnore = 'Ignorar'; 
$strIgnoreInserts = 'Usar inserções ignoradas'; 
$strImportExportCoords = 'Importar/Exportar coordenadas para esquema PDF';
$strImportFiles = 'Importar arquivos'; 
$strImportFormat = 'Formato do arquivo importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'Importação finalizada com sucesso, %d consultas executadas.';
$strIndexes = 'Índices'; 
$strIndexesSeemEqual = 'Os seguintes índices parecem ser idênticos e um deles deve ser removido:';
$strIndexHasBeenDropped = 'Índice %s foi eliminado'; 
$strIndex = 'Índice'; 
$strIndexName = 'Nome do índice:'; 
$strIndexType = 'Tipo de índice:'; 
$strIndexWarningTable = 'Problemas com o índice da tabela `%s`'; 
$strInnoDBAutoextendIncrementDesc = 'O tamanho do incremento para extender o tamanho de um tamanho de tabela autoextendida quando ela começar à ficar cheia.';
$strInnoDBAutoextendIncrement = 'Incremento autoextendido';
$strInnoDBBufferPoolSizeDesc = 'O tamanho do buffer de memória que o InnoDB usa para dados do cache e índices nas suas tabelas.';
$strInnoDBBufferPoolSize = 'Tamanho do Buffer Pool';
$strInnoDBDataFilePath = 'Arquivos de dados';
$strInnoDBDataHomeDirDesc = 'A parte comum do caminho do diretório para todos os arquivos de dados do InnoDB.';
$strInnoDBDataHomeDir = 'Diretório raiz de dados';
$strInnoDBPages = 'páginas';
$strInnoDBRelationAdded = 'Adicionado relacionamento InnoDB';
$strInnodbStat = 'Status do InnoDB'; 
$strInsecureMySQL = 'O seu arquivo de configuração contém configurações (root sem senha) que correspondem à conta privilegiada padrão do MySQL. O servidor MySQL rodando com esse padrão estará aberto a invasões, você realmente deveria corrigir este furo de segurança.'; 
$strInsertAsNewRow = 'Inserir como um novo registro'; 
$strInsertedRowId = 'Inserir ID do registro:'; 
$strInsertedRows = 'Registros inseridos:'; 
$strInsert = 'Inserir'; 
$strInternalNotNecessary = '* Não é necessária uma relação interna quando também já existe na InnoDB.'; 
$strInternalRelationAdded = 'Adicionado relacionamento Interno';
$strInternalRelations = 'Relações internas'; 
$strInUse = 'em uso'; 
$strInvalidAuthMethod = 'Método de autenticação inválido informado nas configurações:';
$strInvalidColumn = 'Coluna especificada (%s) é inválida!';
$strInvalidColumnCount = 'Contador da coluna deve ser maior que zero.';
$strInvalidCSVFieldCount = 'Contador de campo inválido na linha %d da entrada CSV.';
$strInvalidCSVFormat = 'Formato inválido na linha %d da entrada CSV.';
$strInvalidCSVParameter = 'Parâmetro inválido para importação CSV: %s';
$strInvalidDatabase = 'Banco de Dados inválido';
$strInvalidFieldAddCount = 'Você deve adicionar pelo menos um campo.';
$strInvalidFieldCount = 'Tabela deve ter pelo menos um campo.';
$strInvalidLDIImport = 'Esse plugin não suporta importações comprimidas!';
$strInvalidRowNumber = '%d não é um número de linha válido.';
$strInvalidServerHostname = 'Nome de serivdor inválido para o servidor %1$s. Verifique suas configurações.';
$strInvalidServerIndex = 'Índice de servidor inválido: "%s"';
$strInvalidTableName = 'Nome de tabela inválida';

$strJapanese = 'Japonês'; 
$strJoins = 'Junções';
$strJumpToDB = 'Ir para o Banco de Dados &quot;%s&quot;.'; 
$strJustDelete = 'Apenas apagar o usuário da tabela de privilégios'; 
$strJustDeleteDescr = 'O usuário &quot;apagado&quot; ainda podera continuar acessando o servidor normalmente até que os privilégios sejam recarregados.'; 

$strKeepPass = 'Não mudar a senha'; 
$strKeyCache = 'Chave do cache';
$strKeyname = 'Nome chave'; 
$strKill = 'Matar'; 
$strKnownExternalBug = 'A funcionalidade %s é afetada por um bug conhecido, veja %s';
$strKorean = 'Coreano'; 

$strLandscape = 'Paisagem'; 
$strLanguage = 'Linguagem';
$strLanguageUnknown = 'Linguagem desconhecida: %1$s.';
$strLatchedPages = 'Páginas trancadas';
$strLatexCaption = 'Leganda da Tabela'; 
$strLatexContent = 'Conteúdo da tabela __TABLE__'; 
$strLatexContinuedCaption = 'Continuação da legenda da tabela'; 
$strLatexContinued = '(continuação)'; 
$strLatexIncludeCaption = 'Incluir legenda da tabela'; 
$strLatexLabel = 'Rótulo da chave'; 
$strLaTeX = 'LaTeX'; 
$strLatexStructure = 'Estrutura da tabela __TABLE__'; 
$strLatvian = 'Letonês'; 
$strLDI = 'CSV usando LOAD DATA';
$strLDILocal = 'Usar palavra-chave LOCAL';
$strLengthSet = 'Tamanho/Definir*'; 
$strLimitNumRows = 'registros por página'; 
$strLinesTerminatedBy = 'Linhas terminadas por'; 
$strLinkNotFound = 'Link não encontrado'; 
$strLinksTo = 'Links para'; 
$strLithuanian = 'Lituânio'; 
$strLocalhost = 'Local'; 
$strLocationTextfile = 'Localização do arquivo texto'; 
$strLogin = 'Autenticação'; 
$strLoginInformation = 'Informação de login'; 
$strLogout = 'Sair'; 
$strLogPassword = 'Senha:'; 
$strLogServer = 'Servidor'; 
$strLogUsername = 'Usuário:'; 
$strLongOperation = 'Esta operação pode ser demorada. Deseja prosseguir?';

$strMaxConnects = 'máx. de conexões concorrentes';
$strMaximalQueryLength = 'Tamanho máximo da consulta gerada';
$strMaximumSize = 'Tamanho máximo: %s%s'; 
$strMbExtensionMissing = 'A extensão mbstring do PHP não foi encontrada e você parece estar usando conjuntos de caracteres multibyte. Sem a extensão mbstring o phpMyAdmin não será capaz de dividir as strings corretamente isso pode causar resultados inesperados.'; 
$strMbOverloadWarning = 'Você habilitou mbstring.func_overload nas configurações do PHP. Essa opção é incompatível com o phpMyAdmin e certamente causará a perda de algum dado!'; 
$strMIME_available_mime = 'MIME-type disponíveis'; 
$strMIME_available_transform = 'Transformações disponíveis'; 
$strMIME_description = 'Descrição'; 
$strMIME_MIMEtype = 'MIME-type'; // MIME-types nao tem traducao
$strMIME_nodescription = 'Sem descrição disponível para essa transformação.<br />Pergunte ao autor o que %s faz.'; 
$strMIME_transformation_note = 'Para uma lista de opções de transformação disponíveis e suas transformações MIME-type, clique em %sdescrição de transformações%s'; 
$strMIME_transformation_options_note = 'Digite os valores para as opções de transformação usando este formato: \'a\', 100, b,\'c\'...<br />Se por acaso precisar inserir uma contra-barra ("\") ou aspas ("\'") no meio desses valores, faça-o usando outra contra-barra (por exemplo \'\\\\xyz\' ou \'a\\\'b\').'; 
$strMIME_transformation_options = 'Opções de transformação'; 
$strMIME_transformation = 'Transformações do navegador'; 
$strMIMETypesForTable = 'MIME-TYPES PARA AS TABELAS'; 
$strMIME_without = 'MIME-types em itálico não têm uma função de transformação separada'; 
$strModifications = 'Modificações foram salvas'; 
$strModifyIndexTopic = 'Modificar um índice'; 
$strModify = 'Modificar'; 
$strMoveMenu = 'Mover Menu';
$strMoveTable = 'Mover tabela para (Banco de Dados<b>.</b>tabela):'; 
$strMoveTableOK = 'Tabela %s foi movida para %s.'; 
$strMoveTableSameNames = 'Não pode mover a tabela para ela mesma!'; 
$strMultilingual = 'multi-linguagem'; 
$strMyISAMDataPointerSizeDesc = 'O tamanho padrão do ponteiro em bytes, para ser usado por CREATE TABLE para tabelas MyISAM quando a opção MAX_ROWS não é especificada.';
$strMyISAMDataPointerSize = 'Tamanho do ponteiro de dados';
$strMyISAMMaxExtraSortFileSizeDesc = 'Se os arquivos temporários usados para rápida criação de índices MyISAM forem maiores do que usando a chave do cache pela quantidade especificada aqui, prefira o método chave do cache.';
$strMyISAMMaxExtraSortFileSize = 'Tamanho máximo para arquivos temporários na criação do índice';
$strMyISAMMaxSortFileSizeDesc = 'O tamanho máximo do arquivo temporário MySQL que é permitido usar quando for recriar um índice MyISAM (durante REPAIR TABLE, ALTER TABLE ou LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamanho máximo para os arquivos temporários de ordenação';
$strMyISAMRecoverOptionsDesc = 'O modo para recuperação automática de tabelas MyISAM danificadas, como configurado pela opção de inicialização do servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modo de recuperação automático';
$strMyISAMRepairThreadsDesc = 'Se este valor for maior que 1, índices das tabelas MyISAM são criados em paralelo (cada índice tem seu próprio processo) durante o Reparo pelo processo de ordenação.';
$strMyISAMRepairThreads = 'Processos de reparo';
$strMyISAMSortBufferSizeDesc = 'O buffer que é alocado quando são ordenados índices MyISAM durante um REPAIR TABLE ou quando são criados índices com CREATE INDEX ou ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tamanho do buffer de ordenação';
$strMySQLCharset = 'Conjunto de caracteres MySQL'; 
$strMysqlClientVersion = 'Versão do cliente MySQL';
$strMySQLConnectionCollation = 'Collation de conexão do MySQL'; // Collation nao tem traducao
$strMysqlLibDiffersServerVersion = 'Sua versão %s da biblioteca MySQL do PHP difere da versão %s do seu servidor MySQL. Isso pode causar um comportamento estranho.';
$strMySQLSaid = 'Mensagens do MySQL : '; 
$strMySQLShowProcess = 'Mostrar os Processos'; 
$strMySQLShowStatus = 'Mostrar informação de runtime do MySQL'; 
$strMySQLShowVars = 'Mostrar variáveis de sistema do MySQL'; 

$strName = 'Nome'; 
$strNext = 'Próximo'; 
$strNoActivity = 'Sem atividade por %s segundos ou mais, faça o login novamente'; 
$strNoDatabasesSelected = 'Nenhum Banco de Dados selecionado.'; 
$strNoDatabases = 'Sem bases'; 
$strNoDataReceived = 'Nenhum dado foi recebido pra importar. Tampouco um nome de arquivo foi submetido, ou o tamanho do arquivo excedeu o tamanho máximo permitido pelas suas configurações do PHP. Veja FAQ 1.16.';
$strNoDescription = 'sem Descrição'; 
$strNoDetailsForEngine = 'Não há nenhuma informação detalhada do status disponível para esta storage engine.';
$strNoDropDatabases = 'O comando "DROP DATABASE" está desabilitado.'; 
$strNoExplain = 'Pular Explicação SQL'; 
$strNoFilesFoundInZip = 'Nenhum arquivo encontrado dentro do arquivo ZIP!';
$strNoFrames = 'phpMyAdmin é mais amigável com um navegador <b>capaz de exibir frames</b>.'; 
$strNoIndex = 'Nenhum índice definido!'; 
$strNoIndexPartsDefined = 'Nenhuma parte de índice definida!'; 
$strNoModification = 'Sem Mudança'; 
$strNo = 'Não'; 
$strNone = 'Nenhum'; 
$strNoOptions = 'Esse formato não tem opções'; 
$strNoPassword = 'Sem senha'; 
$strNoPermission = 'O servidor web não tem permissão para salvar o arquivo %s.'; 
$strNoPhp = 'sem código PHP'; 
$strNoPrivileges = 'Sem privilégios'; 
$strNoRights = 'Você não tem direitos suficientes para estar aqui agora!'; 
$strNoRowsSelected = 'Nenhum registro selecionado'; 
$strNoSpace = 'Espaço insuficiente para salvar o arquivo %s.'; 
$strNoTablesFound = 'Nenhuma tabela encontrada no Banco de Dados'; 
$strNoThemeSupport = 'Sem suporte a Temas, verifique suas configurações e/ou seus Temas no diretório %s.'; 
$strNotNumber = 'Isto não é um número!'; 
$strNotOK = 'não está OK'; 
$strNotSet = '<b>%s</b> tabela não encontrada ou não configurada em %s'; 
$strNoUsersFound = 'Nenhum usuário(s) encontrado.'; 
$strNoValidateSQL = 'Pular validação SQL'; 
$strNull = 'Nulo'; 
$strNumberOfFields = 'Número de arquivos';
$strNumberOfTables = 'Numero de tabelas';
$strNumSearchResultsInTable = '%s resultado(s) dentro da tabela <i>%s</i>'; 
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)'; 
$strNumTables = 'Tabelas'; 

$strOK = 'OK'; 
$strOpenDocumentSpreadsheet = 'Abrir Documento Planilha';
$strOpenDocumentText = 'Abrir Documento de Texto';
$strOpenNewWindow = 'Abrir nova janela do phpMyAdmin';
$strOperations = 'Operações'; 
$strOperator = 'Operador'; 
$strOptimizeTable = 'Otimizar tabela'; 
$strOptions = 'Opções';
$strOr = 'Ou'; 
$strOverhead = 'Sobrecarga'; 
$strOverwriteExisting = 'Sobrescrever arquivo(s) existente(s)'; 

$strPageNumber = 'Numero da página:'; 
$strPagesToBeFlushed = 'Páginas para serem niveladas';
$strPaperSize = 'Tamanho do papel'; 
$strPartialImport = 'Importação parcial';
$strPartialText = 'Textos parciais'; 
$strPasswordChanged = 'A senha para %s foi modificada com sucesso.'; 
$strPasswordEmpty = 'A senhas está em branco!'; 
$strPasswordHashing = 'Hashing da senha'; // Hashing nao tem traducao
$strPasswordNotSame = 'As senhas não são iguais!'; 
$strPassword = 'Senha'; 
$strPdfDbSchema = 'Esquema do Banco de Dados "%s" - Página %s'; 
$strPdfInvalidTblName = 'A tabela "%s" não existe!'; 
$strPdfNoTables = 'Sem tabelas'; 
$strPDF = 'PDF';
$strPDFReportExplanation = '(Gerado um relatório contendo dados da tabela simples)';
$strPDFReportTitle = 'Título do Relatório';
$strPerHour = 'por hora'; 
$strPerMinute = 'por minuto'; 
$strPerSecond = 'por segundo'; 
$strPersian = 'Pérsa'; 
$strPhoneBook = 'Agenda de telefones'; 
$strPHP40203 = 'Você está usando o PHP 4.2.3, que possui um grave defeito usando strings multi-byte (mbstring). Veja relatório 19404 de erros do PHP. Essa versão não é recomendada para uso com o phpMyAdmin.'; 
$strPhp = 'Criar código PHP'; 
$strPHPVersion = 'Versão do PHP'; 
$strPleaseSelectPrimaryOrUniqueKey = 'Por favor, selecione uma chave primária ou uma chave única';
$strPmaDocumentation = 'Documentação do phpMyAdmin '; 
$strPmaUriError = 'A variável <tt>$cfg[\'PmaAbsoluteUri\']</tt> deve ser setada'; 
$strPmaWiki = 'Wiki phpMyAdmin';
$strPolish = 'Polonês'; 
$strPortrait = 'Retrato'; 
$strPos1 = 'Início'; 
$strPrevious = 'Anterior'; 
$strPrimaryKeyHasBeenDropped = 'A chave primária foi deletada'; 
$strPrimaryKeyName = 'O nome da chave primária deve ser... "PRIMARY"!'; 
$strPrimaryKeyWarning = '("PRIMARY" <b>precisa</b> ser o nome <b>de</b> e <b>apenas da</b> chave primária!)'; 
$strPrimary = 'Primária'; 
$strPrint = 'Imprimir'; 
$strPrintViewFull = 'Ver impressão (com textos completos)'; 
$strPrintView = 'Visualização para impressão'; 
$strPrivDescAllPrivileges = 'Incluir todos os privilégios, exceto GRANT.'; 
$strPrivDescAlter = 'Permitir alterar a estrutura das tabelas existentes.'; 
$strPrivDescAlterRoutine = 'Permitir alterar e apagar stored routines.';
$strPrivDescCreateDb = 'Permitir criar novas tabelas e Banco de Dados.'; 
$strPrivDescCreateRoutine = 'Permitir criar stored routines.';
$strPrivDescCreateTbl = 'Permitir criar novas tabelas.'; 
$strPrivDescCreateTmpTable = 'Permitir criar tabelas temporárias.'; 
$strPrivDescCreateUser = 'Permitir criar, apagar e renomear contas dos usuários.';
$strPrivDescCreateView = 'Permitir criar novas visões.';
$strPrivDescDelete = 'Permitir apagar dados.'; 
$strPrivDescDropDb = 'Permitir eliminar Banco de Dados e tabelas.'; 
$strPrivDescDropTbl = 'Permitir eliminar tabelas.'; 
$strPrivDescExecute5 = 'Permitir executar stored routines.';
$strPrivDescExecute = 'Permitir rodar "stored procedures"; Sem efeitos nesta versão do MySQL.'; 
$strPrivDescFile = 'Permitir importar dados e exportar dados em arquivos.'; 
$strPrivDescGrant = 'Permitir adicionar usuários e privilégios sem recarregar a tabela de privilégios.'; 
$strPrivDescIndex = 'Permitir criar e eliminar índices.'; 
$strPrivDescInsert = 'Permitir inserir e substituir dados.'; 
$strPrivDescLockTables = 'Permitir bloquear tabelas para a processo atual.'; 
$strPrivDescMaxConnections = 'Limitar o numero de novas conexões que o usuário pode abrir por hora.'; 
$strPrivDescMaxQuestions = 'Limitar o número de consultas que podem ser enviadas ao servidor por hora.'; 
$strPrivDescMaxUpdates = 'Limitar o número de comandos que alteram Bancos de Dados ou tabelas que o usuário pode executar por hora.'; 
$strPrivDescMaxUserConnections = 'Limitar o número de conexões simultâneas que o usuário pode ter.';
$strPrivDescProcess3 = 'Permitir matar os processos de outros usuários.'; 
$strPrivDescProcess4 = 'Permitir visualizar consultas completas da lista de processos.'; 
$strPrivDescReferences = 'Sem efeitos nesta versão do MySQL.'; 
$strPrivDescReload = 'Permitir recarregar configurações do servidor e descarregar o cache do servidor.'; 
$strPrivDescReplClient = 'Permitir que o usuário pergunte onde estão os escravos / mestres.'; 
$strPrivDescReplSlave = 'Precisar dos escravos de replicação.'; 
$strPrivDescSelect = 'Permitir leitura dos dados.'; 
$strPrivDescShowDb = 'Permitir acesso completo à lista de Bancos de Dados.'; 
$strPrivDescShowView = 'Permitir executar consultas SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permitir desligar o servidor.'; 
$strPrivDescSuper = 'Permitir conectar, se o numero máximo de conexões for alcançado; Necessário para muitas operações administrativas, como setar variáveis globais e matar processos de outros usuários.'; 
$strPrivDescUpdate = 'Permitir modificar dados.'; 
$strPrivDescUsage = 'Sem privilégios.'; 
$strPrivileges = 'Privilégios'; 
$strPrivilegesReloaded = 'Os privilégios foram recarregados com sucesso.'; 
$strProcedures = 'Procedimentos';
$strProcesses = 'Processos'; 
$strProcesslist = 'Lista de processos'; 
$strProtocolVersion = 'Versão do Protocolo';
$strPutColNames = 'Colocar nome do campo na primeira linha'; 

$strQBEDel = 'Del';   // (used in tbl_qbe.php) 
$strQBEIns = 'Ins';   // (used in tbl_qbe.php) 
$strQBE = 'Procurar por exemplo'; 
$strQueryCache = 'Consulta do cache';
$strQueryFrame = 'Janela de consulta'; 
$strQueryOnDb = 'Consulta no Banco de Dados <b>%s</b>:'; 
$strQueryResultsOperations = 'Operações resultantes das consultas';
$strQuerySQLHistory = 'Histórico de consultas'; 
$strQueryStatistics = '<b>Estatísticas das consultas</b>: Desde o início, %s consultas foram enviadas para o servidor.'; 
$strQueryTime = 'Consulta levou %01.4f segundos'; 
$strQueryType = 'Tipo de consulta'; 
$strQueryWindowLock = 'Não sobrescrever esta consulta fora desta janela'; 

$strReadRequests = 'Leitura requisitada';
$strReceived = 'Recebido'; 
$strRecommended = 'recomendado';
$strRecords = 'Registros'; 
$strReferentialIntegrity = 'Verificar integridade referencial:'; 
$strRefresh = 'Atualizar'; 
$strRelationalSchema = 'Esquema relacional'; 
$strRelationDeleted = 'Relacionamento apagado';
$strRelationNotWorking = 'Os recursos adicionais para trabalhar com tabelas linkadas foram desativadas. Para descobrir o motivo clique %saqui%s.'; 
$strRelationsForTable = 'RELAÇÕES PARA A TABELA'; 
$strRelations = 'Relações'; 
$strRelationView = 'Ver relações'; 
$strReloadingThePrivileges = 'Recarregando os privilégios'; 
$strReloadPrivileges = 'Recarregar privilégios';
$strReload = 'Recarregar';
$strRemoveSelectedUsers = 'Remover os usuários selecionados'; 
$strRenameDatabaseOK = 'O Banco de Dados %s foi renomeado para %s'; 
$strRenameTableOK = 'Tabela %s renomeada para %s'; 
$strRenameTable = 'Renomear a tabela para '; 
$strRepairTable = 'Reparar tabela'; 
$strReplaceNULLBy = 'Substituir NULL por'; 
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo'; 
$strReplication = 'Replicação';
$strReset = 'Resetar'; 
$strResourceLimits = 'Limite dos recursos'; 
$strRestartInsertion = 'Reiniciar inserção com %s registros';
$strReType = 'Re-digite'; 
$strRevokeAndDeleteDescr = 'Os usuários manterão o privilégio de USAGE até que os privilégios sejam recarregados.'; 
$strRevokeAndDelete = 'Revogar todos os privilégios ativos dos usuarios e depois apagar eles.'; 
$strRevokeMessage = 'Você revogou os privilégios para %s'; 
$strRevoke = 'Revogar'; 
$strRomanian = 'Romêno'; 
$strRoutineReturnType = 'Tipo de returno';
$strRoutines = 'Rotinas';
$strRowLength = 'Tamanho do registro'; 
$strRowsFrom = 'registro(s) começando de'; 
$strRowSize = ' Tamanho do registro '; 
$strRowsModeFlippedHorizontal = 'horizontal (cabeçalhos rotacionados)'; 
$strRowsModeHorizontal = 'horizontal'; 
$strRowsModeOptions = 'no modo %s e repetindo cabeçalhos após %s células'; 
$strRowsModeVertical = 'vertical'; 
$strRows = 'Registros'; 
$strRowsStatistic = 'Estatísticas do registros'; 
$strRunning = 'Rodando em %s'; 
$strRunQuery = 'Enviar consulta SQL'; 
$strRunSQLQuery = 'Fazer consulta SQL no Banco de Dados %s'; 
$strRunSQLQueryOnServer = 'Rodar consulta(s) SQL no servidor %s';
$strRussian = 'Russo'; 

$strSaveOnServer = 'Salvar no servidor no diretório %s'; 
$strSavePosition = 'Salvar posição';
$strSave = 'Salvar'; 
$strScaleFactorSmall = 'A escala é muito pequena para ajustar o esquema em uma página'; 
$strSearchFormTitle = 'Procurar no Banco de Dados'; 
$strSearchInTables = 'Dentro da(s) tabela(s):'; 
$strSearchNeedle = 'Palavra(s) ou valor(es) para procurar (coringa: "%"):'; 
$strSearchOption1 = 'pelo menos uma das palavras'; 
$strSearchOption2 = 'todas as palavras'; 
$strSearchOption3 = 'a frase exata'; 
$strSearchOption4 = 'como expressão regular'; 
$strSearch = 'Procurar'; 
$strSearchResultsFor = 'Procurar resultados por "<i>%s</i>" %s:'; 
$strSearchType = 'Encontrar:'; 
$strSecretRequired = 'O arquivo de configuração agora precisa de uma frase secreta com senha (blowfish_secret).'; 
$strSelectADb = 'Selecionar um Banco de Dados'; 
$strSelectAll = 'Selecionar Todos'; 
$strSelectBinaryLog = 'Selecionar log binário para exibir'; 
$strSelectFields = 'Selecionar os campos (no mínimo 1)'; 
$strSelectForeignKey = 'Selecionar Chave Estrangeira';
$strSelectNumRows = 'na consulta'; 
$strSelectReferencedKey = 'Seleciona chave referenciada';
$strSelectTables = 'Tabelas selecionadas'; 
$strSend = 'Enviado'; 
$strSent = 'Enviar'; 
$strServerChoice = 'Seleção do Servidor'; 
$strServerNotResponding = 'O servidor não está respondendo'; 
$strServer = 'Servidor'; 
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Inserções demoradas';
$strServerStatus = 'Informações de Runtime'; 
$strServerStatusUptime = 'Esse servidor MySQL está rodando por %s. Ele foi iniciado em %s.'; 
$strServerTabVariables = 'Variáveis'; 
$strServerTrafficNotes = '<b>Tráfico do servidor</b>: Essas tabelas mostram as estatísticas do tráfico da rede neste servidor MySQL desde o início.'; 
$strServerVars = 'Variáveis e configurações do servidor'; 
$strServerVersion = 'Versão do Servidor'; 
$strSessionStartupErrorGeneral = 'Não pôde iniciar a sessão sem erros, cheque os erros ocorridos nos logs do PHP e/ou do seu servidor web e configure a instalação do PHP corretamente.';
$strSessionValue = 'Valor da sessão'; 
$strSetEnumVal = 'Se um tipo de campo é "enum" ou "set", por favor entre valores usando este formato: \'a\',\'b\',\'c\'...<br />Se você for colocar uma barra contrária ("\") ou aspas simples ("\'") entre os valores, coloque uma barra contrária antes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').'; 
$strShowAll = 'Mostrar todos'; 
$strShowColor = 'Mostrar cor'; 
$strShowDatadictAs = 'Formato do dicionário de dados'; 
$strShowFullQueries = 'Mostrar consultas completas'; 
$strShowGrid = 'Mostrar grade'; 
$strShowHideLeftMenu = 'Exibir/Ocultar menu da esquerda';
$strShowingBookmark = 'Exibindo marcadores';
$strShowingPhp = 'Exibindo como código PHP';
$strShowingRecords = 'Mostrando registros '; 
$strShowingSQL = 'Exibindo consulta SQL';
$strShow = 'Mostrar'; 
$strShowOpenTables = 'Exibir tabelas abertas';
$strShowPHPInfo = 'Mostrar informações do PHP'; 
$strShowSlaveHosts = 'Exibir servidores escravos';
$strShowSlaveStatus = 'Exibir status dos escravos';
$strShowStatusBinlog_cache_disk_useDescr = 'O número de transações que usaram o cache do log binário temporário mas que excederam o valor do binlog_cache_size e usaram o arquivo temporário para armazenar enunciados da transação.';
$strShowStatusBinlog_cache_useDescr = 'O número de transações que usaram o cache do log binário temporário.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'O número de tabelas temporárias no disco criadas automaticamente pelo servidor enquanto executava os enunciados. Se Created_tmp_disk_tables é grande, você pode aumentar o valor de tmp_table_size para fazer as tabelas temporárias serem baseadas na memória ou invés de baseadas no disco';
$strShowStatusCreated_tmp_filesDescr = 'Quantos arquivos temporários o MySQL tinha criado.';
$strShowStatusCreated_tmp_tablesDescr = 'O número de tabelas temporárias na memória criadas automaticamente pelo servidor enquanto executava os enunciados.';
$strShowStatusDelayed_errorsDescr = 'O número de linhas escritas com INSERT DELAYED para cada erro ocorrido (provavelmente chave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'O número de processos manipuladores de INSERT DELAYED em uso. Cada tabela diferente em que se usa INSERT DELAYED começa seu próprio processo.';
$strShowStatusDelayed_writesDescr = 'O número de linhas INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'O número de enunciados FLUSH executados.';
$strShowStatusHandler_commitDescr = 'O número de enunciados COMMIT internos.';
$strShowStatusHandler_deleteDescr = 'O número de vezes que uma linha foi deletada de uma tabela.';
$strShowStatusHandler_discoverDescr = 'O servidor MySQL pode perguntar ao motor de armazenamento do NDB Cluster se ele sabe sobre uma tabela com um nome dado. Isto é chamado descoberta. Handler_discover indica o número de vezes que tabelas foram descobertas.';
$strShowStatusHandler_read_firstDescr = 'O número de vezes que a primeira entrada foi lida de um índice. Se isto for alto, sugere que o usuário está fazendo muitas varreduras completas do índice; por exemplo, SELECT col1 FROM foo, supondo que col1 é um índice.';
$strShowStatusHandler_read_keyDescr = 'O número de requisições para ler uma linha baseada em uma chave. Se isto for alto, é uma boa indicação de que suas consultas e tabelas estejam corretamente indexadas.';
$strShowStatusHandler_read_nextDescr = 'O número de requisições para ler a linha seguinte na ordem da chave. Isto é incrementado se você estiver consultando uma coluna do índice com uma restrição da escala ou se você estiver fazendo uma varredura do índice.';
$strShowStatusHandler_read_prevDescr = 'O número de requisições para ler a linha precedente na ordem da chave. Este método de leitura é usado principalmente para otimizar ORDER BY DESC.';
$strShowStatusHandler_read_rndDescr = 'O número de requisições pra ler uma linha baseada em uma posição fixa. Isto é alto se você estiver fazendo muitas consultas que requerem a ordenação do resultado. Você tem provavelmente muitas consultas que requerem que o MySQL faça a varredura de tabelas inteiras ou você tem junções que não usam as chaves corretamente.';
$strShowStatusHandler_read_rnd_nextDescr = 'O número de requisições para ler a linha seguinte no arquivo de dados. Isto é alto se você estiver fazendo muitas varreduras da tabela. Geralmente isto sugere que suas tabelas não estão corretamente indexadas ou que suas consultas não estão escritas para tomar vantagem dos índices que você têm.';
$strShowStatusHandler_rollbackDescr = 'O número de enunciados ROLLBACK internos.';
$strShowStatusHandler_updateDescr = 'O número de requisições para atualizar uma linha na tabela.';
$strShowStatusHandler_writeDescr = 'O número de requisições para inserir uma linha na tabela.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'O número de páginas que contém dados (sujos ou limpos).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'O número de páginas atualmente sujas.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'O número de páginas do buffer pool que foram requisitadas para serem niveladas.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'O número de páginas livres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'O número de páginas trancadas no buffer pool do InnoDB. Estas são páginas que estão sendo lidas ou escritas atualmente ou aquela não pode ser nivelada ou removido por alguma outra razão.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'O número de páginas ocupadas porque foram alocados para rotinas administrativas tais como trancamento de linhas ou índice hash adaptável. Este valor pode também ser calculado como Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamanho total do buffer pool, em páginas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'O número de ler-adiante "aleatórios" InnoDB iniciado. Isto acontece quando uma consulta faz a varredura de uma parcela grande de uma tabela mas na ordem aleatória.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'O número de ler-adiante sequenciais InnoDB iniciado. Isto acontece quando o InnoDB faz uma varredura sequencial completa da tabela.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'O número de requisições de leitura lógica InnoDB que foram feitas.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'O número de leituras lógicas que o InnoDB não pode satisfer do buffer pool e teria que fazer uma leitura de página simples';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, escreve para o buffer pool do InnoDB rodando em segundo plano. Entretanto, se for necessário ler ou criar uma página e nenhuma página limpa estiver disponível, é necessário esperar as páginas serem niveladas primeiramente. Este contador conta instâncias dessas esperas. Se o tamanho do buffer pool for ajustado corretamente, este valor deve ser pequeno.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'O número de escritas feitas para o buffer pool do InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'O número de operações fsync() à fazer.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'O número atual de operações fsync() pendentes.';
$strShowStatusInnodb_data_pending_readsDescr = 'O número atual de leituras pendentes.';
$strShowStatusInnodb_data_pending_writesDescr = 'O número atual de escritas pendentes.';
$strShowStatusInnodb_data_readDescr = 'O montante de leitura de dados à fazer, em bytes.';
$strShowStatusInnodb_data_readsDescr = 'O número total de dados lidos.';
$strShowStatusInnodb_data_writesDescr = 'O número total de dados escritos.';
$strShowStatusInnodb_data_writtenDescr = 'O montante de escrita de dados à fazer, em bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'O número de escritas doublewrite que foram executadas e o número de páginas que foram escritas para esta finalidade.';
$strShowStatusInnodb_dblwr_writesDescr = 'O número de escritas doublewrite que foram executadas e o número de páginas que foram escritas para esta finalidade.';
$strShowStatusInnodb_log_waitsDescr = 'O número de esperas geradas porque o buffer do log era muito pequeno e teve que esperar que fosse nivelada antes de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'O número de requisições de escrita de log.';
$strShowStatusInnodb_log_writesDescr = 'O número de escritas físicas para o arquivo de log.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'O número de escritas fsyncs feitas no arquivo de log.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'O número de arquivos de log fsyncs pendentes.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escrita de arquivos de log pendentes.';
$strShowStatusInnodb_os_log_writtenDescr = 'O número de bytes escritos para o arquivo de log.';
$strShowStatusInnodb_pages_createdDescr = 'O número de páginas criadas.';
$strShowStatusInnodb_page_sizeDescr = 'O tamanho de página compilada do InnoDB (padrão 16KB). Muitos valores são contados em páginas; o tamanho de página permite que sejam facilmente convertidos em bytes.';
$strShowStatusInnodb_pages_readDescr = 'O número de páginas lidas.';
$strShowStatusInnodb_pages_writtenDescr = 'O número de páginas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'O número de linhas trancadas que estão esperando atualmente.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'O tempo médio para recuperar uma linha trancada, em milísegundo.';
$strShowStatusInnodb_row_lock_timeDescr = 'O tempo total gasto para recuperar linhas trancadas, em milísegundo.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'O máximo de tempo para recuperar uma linha trancada, em milísegundo.';
$strShowStatusInnodb_row_lock_waitsDescr = 'O número de vezes que uma linhas trancada teve que esperar para ser escrita.';
$strShowStatusInnodb_rows_deletedDescr = 'O número de linhas deletadas de tabelas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'O número de linhas inseridas em tabelas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'O número de linhas lidas de tabelas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'O número de linhas atualizadas em tabelas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'O número de blocos chave no cache chave que mudaram mas não foram nivelados ainda ao disco. Antes era chamado de Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'O número de blocos não usados no cache chave. Você pode usar este valor para determinar quanto do cache chave está no uso.';
$strShowStatusKey_blocks_usedDescr = 'O número de blocos usados no cache chave. Este valor é uma marca d\'água que indica o número máximo de blocos que estiveram sempre em uso em algum momento.';
$strShowStatusKey_read_requestsDescr = 'O número de requisições para ler um bloco chave do cache.';
$strShowStatusKey_readsDescr = 'O número de leituras físicas de um bloco chave do disco. Se Key_reads for alto, então seu valor do key_buffer_size é provavelmente muito baixo. A taxa de falta de cache pode ser calculada como Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'O número de requisições para escrever um bloco chave para o cache.';
$strShowStatusKey_writesDescr = 'O número de escritas físicas para um bloco chave para o disco.';
$strShowStatusLast_query_costDescr = 'O custo total da última consulta compilada como computado pelo otimizador de consultas. Útil para comparar o custo de diferentes planos de consulta para a mesma consulta. O valor padrão 0 significa que nenhuma consulta foi compilada ainda.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'O número de linhas esperando para serem escritas na fila de INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'O número de tabelas que devem estar abertas. Se aberta, as tabelas são grandes, o valor do cache de suas tabelas é provavelmente muito pequeno.';
$strShowStatusOpen_filesDescr = 'O número de arquivos que estão abertos.';
$strShowStatusOpen_streamsDescr = 'O número de streams que estão abertos (usados principalmente para log).';
$strShowStatusOpen_tablesDescr = 'O número de tabelas que estão abertas.';
$strShowStatusQcache_free_blocksDescr = 'O número de blocos de memória livre na consulta do cache.';
$strShowStatusQcache_free_memoryDescr = 'O montante de memória livre para a consulta do cache.';
$strShowStatusQcache_hitsDescr = 'O número de hits do cache.';
$strShowStatusQcache_insertsDescr = 'O número de consultas adicionadas no cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'O número de consultas que foram removidas do cache para liberar memória para novas consultas. Essa informação pode ajudar você a ajustar o tamanho da consulta do cache. A consulta do cache usa a estratégia do "usado menos recentemente" (LRU - least recently used) para decidir qual consulta remover do cache.';
$strShowStatusQcache_not_cachedDescr = 'O número de consultas sem cache (não cacheável, ou não pode ser cacheável devido à configuração em query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'O número de consultas registradas no cache.';
$strShowStatusQcache_total_blocksDescr = 'O número total de blocos na consulta do cache.';
$strShowStatusReset = 'Resetar';
$strShowStatusRpl_statusDescr = 'O status da replicação à prova de falhas (não implementado).';
$strShowStatusSelect_full_joinDescr = 'O número de junções que não usaram índices. Se este valor não for 0, você deve cuidadosamente verificar os índices de suas tabelas.';
$strShowStatusSelect_full_range_joinDescr = 'O número de junções que usaram uma pesquisa de escala na tabela de referência.';  //está correto isso?
$strShowStatusSelect_range_checkDescr = 'O número de junções sem chaves que verificam para ver se há o uso da chave após cada linha. (Se este não for 0, você deve cuidadosamente verificar os índices de suas tabelas.)';
$strShowStatusSelect_rangeDescr = 'O número de junções que usaram escalas na primeira tabela. (Não é normalmente crítico mesmo se este for grande.)';
$strShowStatusSelect_scanDescr = 'O número junções que fez uma varredura completa da primeira tabela.';
$strShowStatusSlave_open_temp_tablesDescr = 'O número de tabelas temporárias abertas atualmente pelo processo SQL escravo.';
$strShowStatusSlave_retried_transactionsDescr = 'Número total (desde o início) de vezes que o processo SQL escravo de replicação teve que tentar transações.';
$strShowStatusSlave_runningDescr = 'Isto é ON se este servidor é um escravo conectado à um mestre.';
$strShowStatusSlow_launch_threadsDescr = 'O número de processos que levaram mais que slow_launch_time segundos para serem criadas.';
$strShowStatusSlow_queriesDescr = 'O número de consultas que levaram mais que long_query_time segundos.';
$strShowStatusSort_merge_passesDescr = 'O número de fusões que o algoritmo de ordenação teve que fazer. Se este valor for alto, você deve considerar aumentar o valor da variável sort_buffer_size do sistema.';
$strShowStatusSort_rangeDescr = 'O número de ordenações que foram feitas com escalas.';  //está correto isso? ranges = escalas??
$strShowStatusSort_rowsDescr = 'O número de linhas ordenadas.';
$strShowStatusSort_scanDescr = 'O número de ordenações que foram feitas scaneando a tabela.';
$strShowStatusTable_locks_immediateDescr = 'O número de vezes que uma tabela trancada foi recuperada imediatamente.';
$strShowStatusTable_locks_waitedDescr = 'O número de vezes que uma tabela trancada não foi recuperada imediatamente e uma espera foi necessária. Se isso foi alto e você tem problemas de performance, você precisa primeiramente otimizar suas consultas e então, ou dividir sua tabela ou usar replicação.';
$strShowStatusThreads_cachedDescr = 'O número de processos no cache de processos. A taxa de hits do cache pode ser calculada como Threads_created/conexões. Se este valor for vermelho você deve aumentar seu thread_cache_size';
$strShowStatusThreads_connectedDescr = 'O número de conexões atualmente abertas.';
$strShowStatusThreads_createdDescr = 'O número de processos criadas para manipular conexões. Se Threads_created é grande, você deveria aumentar o valor de thread_cache_size. (Normalmente isso não da um aumento notável de performance se você tem uma boa implementação de processos.)';
$strShowStatusThreads_runningDescr = 'O número de processos que não estão dormindo.';
$strShowTableDimension = 'Mostrar dimensão das tabelas'; 
$strShowTables = 'Mostrar tabelas'; 
$strShowThisQuery = ' Mostrar esta consulta SQL novamente '; 
$strSimplifiedChinese = 'Chinês Simplificado'; 
$strSingly = '(singularmente)'; 
$strSize = 'Tamanho'; 
$strSkipQueries = 'Número de registros (consultas) ignoradas no início';
$strSlovak = 'Eslováquio'; 
$strSlovenian = 'Eslovênio'; 
$strSmallBigAll = 'Tudo Pequeno/Grande';
$strSnapToGrid = 'Ajustar à grade';
$strSocketProblem = '(ou o soquete do servidor MySQL local não está configurado corretamente)';
$strSortByKey = 'Ordenar pela chave'; 
$strSorting = 'Ordenando';
$strSort = 'Ordenar'; 
$strSpaceUsage = 'Uso do espaço'; 
$strSpanish = 'Espanhol'; 
$strSplitWordsWithSpace = 'Palavras são separadas por um caracter de espaço (" ").'; 
$strSQLCompatibility = 'Modo de compatibilidade SQL';
$strSQLExportType = 'Tipo de exportação'; 
$strSQLParserBugMessage = 'Talvez tenha encontrado um bug no analizador (parser) do SQL. Analise a sua Consulta SQL com atenção, e verifique se as aspas estão corretas e não estão desencontradas. Outra possibilidade de falha é o fato de estar tentando subir um arquivo com saída binária de uma área de texto citada. Pode também experimentar a sua consulta SQL no prompt de comandos do MySQL. A saída de erro do MySQL, isto se existir alguma, também poderá ajudar a diagnosticar o problema. Se continuar a ter problemas ou se o analisador (parser) falhar onde a interface da linha de comandos tiver sucesso, reduza por favor a entrada da consulta SQL até aquele que causou o problema, e envie o relatório de bug com os dados do chunk da seção CORTE abaixo:'; 
$strSQLParserUserError = 'Parece haver um erro na sua consulta SQL. A saída do servidor MySQL abaixo, isto se existir alguma, também poderá ajudar a diagnosticar o problema.'; 
$strSQLQuery = 'consulta SQL'; 
$strSQLResult = 'Resultado SQL'; 
$strSQL = 'SQL'; 
$strSQPBugInvalidIdentifer = 'Identificador inválido'; 
$strSQPBugUnclosedQuote = 'Aspas não fechada'; 
$strSQPBugUnknownPunctuation = 'String de pontuação desconhecida'; 
$strStandInStructureForView = 'Estrutura stand-in para visualizar';
$strStatCheckTime = 'Última verificação'; 
$strStatCreateTime = 'Criação'; 
$strStatement = 'Comandos'; 
$strStatisticsOverrun = 'Em servidores ocupados, os contadores de byte podem sobrecarregar, então as estatísticas como relatadas pelo servidor MySQL podem estar incorretas.';
$strStatUpdateTime = 'Última atualização'; 
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
$strSwedish = 'Suéco'; 
$strSwitchToDatabase = 'Mudar para o Banco de Dados copiado'; 
$strSwitchToTable = 'Mudar para a tabela copiada'; 

$strTableAlreadyExists = 'Tabela %s já existe!';
$strTableComments = 'Comentários da tabela'; 
$strTableEmpty = 'O Nome da Tabela está vazio!'; 
$strTableHasBeenDropped = 'Tabela %s foi eliminada'; 
$strTableHasBeenEmptied = 'Tabela %s foi esvaziada'; 
$strTableHasBeenFlushed = 'Tabela %s foi limpa'; 
$strTableIsEmpty = 'Tabela para estar vazia!';
$strTableMaintenance = 'Tabela de Manutenção'; 
$strTableName = 'Nome da Tabela';
$strTableOfContents = 'Tabela de conteúdos'; 
$strTableOptions = 'Opções da tabela'; 
$strTables = '%s tabela(s)'; 
$strTableStructure = 'Estrutura da tabela'; 
$strTable = 'Tabela'; 
$strTakeIt = 'tome'; 
$strTblPrivileges = 'Privilégios específicos da tabela'; 
$strTempData = 'Dados temporários';
$strTextAreaLength = ' Por causa da sua largura,<br /> esse campo pode não ser editável '; 
$strThai = 'Thailandês'; 
$strThemeDefaultNotFound = 'Tema padrão %s não encontrado!';
$strThemeNoPreviewAvailable = 'Nenhuma pré-visualização disponível.';
$strThemeNotFound = 'Tema %s não encontrado!';
$strThemeNoValidImgPath = 'Encontrado caminho inválido para imagens para o tema %s!';
$strThemePathNotFound = 'Encontrado caminho inválido para o tema %s!';
$strTheme = 'Tema / Estilo'; 
$strThisHost = 'Esse Servidor'; 
$strThreads = 'Processos';
$strThreadSuccessfullyKilled = 'Processo %s foi morto com sucesso.'; 
$strTimeoutInfo = 'Importação anterior passou do tempo limite, depois de reenviar, irá continuar na posição %d.';
$strTimeoutNothingParsed = 'Entretanto na última vez nenhum dado foi passado, isso normalmente significa que o phpMyAdmin não é capaz de finalizar essa importação à menos que você aumente o tempo limite do PHP.';
$strTimeoutPassed = 'Script passou do tempo limite, se você deseja terminar a importação, reenvie o mesmo arquivo que a importação será resumida.';
$strTime = 'Tempo'; 
$strToFromPage = 'página de/para';
$strToggleScratchboard = 'mudar o estado do Scratchboard'; //isso está correto? mas nao descobri o q eh
$strToggleSmallBig = 'Mudar para pequeno/grande';
$strToSelectRelation = 'Para selecionar relacionamento, clique :';
$strTotal = 'total'; 
$strTotalUC = 'Total'; 
$strTraditionalChinese = 'Chinês Tradicional'; 
$strTraditionalSpanish = 'Espanhol Traditional'; 
$strTraffic = 'Tráfego'; 
$strTransactionCoordinator = 'Coordenador da transação';
$strTransformation_application_octetstream__download = 'Mostrar o link para baixar os dados binários do campo. Primeira opção é o nome do arquivo binário. Segunda opção é um possível nome de campo de uma linha da tabela que contém o nome do arquivo. Se você usar a segunda opção precisa colocar na primeira opção uma string em branco'; 
$strTransformation_application_octetstream__hex = 'Exibir representação hexadecimal dos dados. Primeiro parâmetro opcional especifica como frequentemente espaços serão adicionados (padrão para 2 mordidelas).';  //ta certo isso? nibbles, traduzi como mordidelas
$strTransformation_image_jpeg__inline = 'Mostrar uma miniatura clicável; opções: largura,altura em pixels (mantém a proporção original)'; 
$strTransformation_image_jpeg__link = 'Mostrar o link para esta imagem (ex.: blob download direto).'; 
$strTransformation_image_png__inline = 'Ver imagem/jpeg: em linha'; 
$strTransformation_text_plain__dateformat = 'Exibir um TIME, TIMESTAMP, DATETIME ou campo numérico unix timestamp formatado como data. A primeira opção é o offset (em horas) que será adicionado ao timestamp (Padrão: 0). Use a segunda opção para especificar uma string de formatação data/tempo diferente. A terceira opção determina se você deseja ver data local ou UTC (use a string "local" ou "utc") para isso. De acordo com isso, o formatdo da data terá valores diferentes - para "local" veja a documentação do PHP para função strftime() e para "utc" isso é feito usando a função gmdate().';
$strTransformation_text_plain__external = 'LINUX APENAS: Rode uma aplicação externa e alimente os campos de dados pela entrada padrão. Retorna a saída padrão da aplicação. Padrão é Limpo, para uma bonita impressão do código HTML. Por razões de segurança, você deve editar manualmente o arquivo libraries/transformations/text_plain__external.inc.php e inserir as ferramentas que você permite rodar. A primeira opção é o número do programa que você quer rodar e a segunda opção são os parâmetros para o programa. A terceira opção, se setada para 1 irá converter a saída usando htmlspecialchars() (Padrão é 1). A quarta opção, se setada como 1 irá por um NOWRAP para o conteúdo da célula, de forma que a saída inteira será mostrada sem reformatação(Padrão é 1)'; 
$strTransformation_text_plain__formatted = 'Preservar a formatação original campo. Sem escape.'; 
$strTransformation_text_plain__imagelink = 'Mostrar uma imagem e um link, o campo contém um nome de arquivo; primeira opção é um prefixo tipo "http://domain.com/", segunda opção é a largura em pixels, o terceiro é a altura.'; 
$strTransformation_text_plain__link = 'Mostrar um link, o campo contém o nome do arquivo, primeira opção é um prefixo tipo "http://domain.com/", segunda opção é um título para o link.'; 
$strTransformation_text_plain__sql = 'Formatar texto como consulta SQL com síntaxe colorida.';
$strTransformation_text_plain__substr = 'Mostrar apenas parte da string. Primeira opção é um offset para definir onde a saída do seu texto deve iniciar (Padrão: 0). Segunda opção é o quanto do texto deverá ser retornado. Se estiver em branco, retorna todo o restante do texto. Terceira opção define quais caracteres serão acrescentados na substring retornada (Padrão: ...).'; 
$strTriggers = 'Gatilhos';
$strTruncateQueries = 'Truncar as consultas SQL exibidas'; 
$strTurkish = 'Turco'; 
$strType = 'Tipo'; 

$strUkrainian = 'Ucraniano'; 
$strUncheckAll = 'Desmarcar todos'; 
$strUnicode = 'Unicode'; 
$strUnique = 'Único'; 
$strUnknown = 'desconhecido'; 
$strUnselectAll = 'Desmarcar Todos'; 
$strUnsupportedCompressionDetected = 'Você tentou carregar um arquivo com compressão não suportada (%s). Pode o suporte para isso não ter sido implementado ou pode ter sido desabilitado por sua configuração PHP.';
$strUpdatePrivMessage = 'Você mudou os priviléios para %s.'; 
$strUpdateProfileMessage = 'A configuração foi atualizada.'; 
$strUpdateQuery = 'Atualizar a consulta SQL'; 
$strUpdComTab = 'Consulte a documentação sobre como atualizar sua tabela Column_comments'; 
$strUpgrade = 'Você deveria atualizar para %s %s ou posterior.'; 
$strUploadErrorCantWrite = 'Falhou ao salvar arquivo no disco.';
$strUploadErrorExtension = 'Carregamento do arquivo parado pela extenção.';
$strUploadErrorFormSize = 'O arquivo carregado excede o tamanho definido na diretriz MAX_FILE_SIZE do formulário HTM.';
$strUploadErrorIniSize = 'O arquivo carregado excede o tamanho definido na diretriz upload_max_filesize no php.ini.';
$strUploadErrorNoTempDir = 'Pasta temporária não encontrada.';
$strUploadErrorPartial = 'Carregamento do arquivo foi apenas parcial.';
$strUploadErrorUnknown = 'Erro desconhecido no carregamento do arquivo.';
$strUploadLimit = 'Você provavelmente tentou carregar um arquivo muito grande. Veja referências na %sdocumentation%s para burlar esses limites.';
$strUploadsNotAllowed = 'Não é permitido subir arquivos neste servidor.';
$strUsage = 'Uso'; 
$strUseBackquotes = 'Usar aspas simples nos nomes de tabelas e campos'; 
$strUsedPhpExtensions = 'Extensões PHP usadas';
$strUseHostTable = 'Usar Tabela do Servidor'; 
$strUserAlreadyExists = 'O usuário %s já existe!'; 
$strUserEmpty = 'O nome do usuário está em branco!'; 
$strUserName = 'Nome do usuário'; 
$strUserNotFound = 'O usuário selecionado não foi encontrado na tabela de privilégios.'; 
$strUserOverview = 'Avaliação dos usuários'; 
$strUsersDeleted = 'Os usuários selecionados foram apagados com sucesso.'; 
$strUsersHavingAccessToDb = 'Usuários que têm acesso à &quot;%s&quot;'; 
$strUser = 'Usuário'; 
$strUseTabKey = 'Usar a teclar TAB para se mover de valor em valor, ou CTRL+setas para mover em qualquer direção'; 
$strUseTables = 'Usar tabelas'; 
$strUseTextField = 'Usar campo texto'; 
$strUseThisValue = 'Usar este valor'; 

$strValidateSQL = 'Validar SQL'; 
$strValidatorError = 'O Validador SQL não pode ser inicializado. Verifique se você instalou a extenção necessária do php conforme está escrito em %sdocumentation%s.'; 
$strValue = 'Valor'; 
$strVar = 'Variáveis'; 
$strVersionInformation = 'Informações da versão';
$strViewDumpDatabases = 'Ver dump (esquema) dos Bancos de Dados'; 
$strViewDumpDB = 'Ver o esquema do Banco de Dados'; 
$strViewDump = 'Ver o esquema da tabela'; 
$strViewHasBeenDropped = 'Visão %s foi apagada';
$strViewMaxExactCount = 'Essa visão tem mais que %s linhas. Veja referências na %sdocumentation%s.';
$strViewName = 'Nome da VISÃO';
$strView = 'Visão';

$strWebServerUploadDirectoryError = 'O diretório que você especificou para subir arquivos não foi encontrado.'; 
$strWebServerUploadDirectory = 'Servidor web subiu o diretório'; 
$strWelcome = 'Bem vindo ao %s'; 
$strWestEuropean = 'Oeste Europeu'; 
$strWildcard = 'coringa'; 
$strWindowNotFound = 'A janela alvo do navegador não pode ser atualizada. Talvez você tenha fechado a janela alvo ou o seu navegador tenha bloqueado a comunicação entre janelas nas configurações de segurança.'; 
$strWithChecked = 'Com marcados:'; 
$strWriteRequests = 'Escrita requisitada';
$strWrongUser = 'Usuário ou senha incorreta. Acesso negado.'; 

$strXML = 'XML'; 

$strYes = 'Sim'; 

$strZeroRemovesTheLimit = 'Nota: Ajustar essa opção para 0 (zero) remove os limites.'; 
$strZip = '"compactado com zip"'; 

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>
