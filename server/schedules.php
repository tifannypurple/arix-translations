<?php 

return [
    'schedules' => 'Agendamentos',
    'manage-schedules' => 'Gerenciar agendamentos',
    'create-schedule' => 'Criar agendamento',
    'name' => 'Nome',
    'last-run-at' => 'Última execução em',
    'next-run-at' => 'Próxima execução em',
    'status' => 'Status',
    'active' => 'Ativo',
    'inactive' => 'Inativo',
    'processing' => 'Processando',
    'manage-schedule' => 'Gerenciar agendamento',
    'new-task' => 'Nova Tarefa',
    'run-now' => 'Executar Agora',
    'editBtn' => 'Editar',
    'n/a' => 'n/a',
    'never' => 'nunca',

    'no-schedules' => 'Não há agendamentos configurados para este servidor.',
    'ignore-files-folders' => 'Ignorando arquivos e pastas',
    'continues-on-failure' => 'Continua em caso de falha',
    'later' => 'posteriormente',

    'minute' => 'Minuto',
    'hour' => 'Hora',
    'day' => 'Dia',
    'week' => 'Semana',
    'day-of-month' => 'Dia do mês',
    'month' => 'Mês',
    'day-of-week' => 'Dia da semana',

    'deleteTask' => [
        'title' => 'Confirmar exclusão da tarefa',
        'description' => 'Tem certeza de que deseja excluir esta tarefa? Esta ação não pode ser desfeita.',
        'delete' => 'Excluir Tarefa'
    ],
    'delete' => [
        'title' => 'Excluir Agendamento',
        'description' => 'Todas as tarefas serão removidas e quaisquer processos em execução serão encerrados.',
        'delete' => 'Excluir'
    ],
    'edit' => [
        'title' => 'Editar agendamento',
        'title-2' => 'Criar novo agendamento',

        'description' => 'O sistema de agendamento suporta o uso da sintaxe Cronjob ao definir quando as tarefas devem começar a ser executadas. Use os campos acima para especificar quando essas tarefas devem começar a ser executadas.',
        
        'name' => 'Nome do agendamento',
        'name-description' => 'Um identificador legível para este agendamento.',
        'cheatsheet' => 'Mostrar Dicas',
        'cheatsheet-description' => 'Mostrar a folha de dicas cron para alguns exemplos',
        'online-when-online' => 'Somente Quando o Servidor Estiver Online',
        'online-when-online-description' => 'Executar este agendamento apenas quando o servidor estiver em um estado de execução.',
        'enabled' => 'Agendamento Ativado',
        'enabled-description' => 'Este agendamento será executado automaticamente se ativado.',

        'save-changes' => 'Salvar alterações',
    ],
    'cheatsheet' => [
        'example' => 'Exemplos',
        'every-5-minutes' => 'a cada 5 minutos',
        'every-hour' => 'a cada hora',
        'hour-range' => 'intervalo de horas',
        'once-a-day' => 'uma vez por dia',
        'every-monday' => 'toda segunda-feira',
        'special-characters' => 'Caracteres Especiais',
        'any-value' => 'qualquer valor',
        'value-list-separator' => 'separador de lista de valores',
        'range-values' => 'valores de intervalo',
        'step-values' => 'valores de passo',
    ],
    'task' => [
        'message' => 'Uma tarefa de backup não pode ser criada quando o limite de backup do servidor está definido como 0.',
        'edit-task' => 'Editar Tarefa',
        'save-changes' => 'Salvar Alterações',
        'create-task' => 'Criar Tarefa',
        'action' => 'Ação',
        'send-command' => 'Enviar comando',
        'send-power-action' => 'Enviar ação de energia',
        'create-backup' => 'Criar backup',
        'offset' => 'Deslocamento de tempo (em segundos)',
        'offset-description' => 'O tempo de espera após a execução da tarefa anterior antes de executar esta. Se esta for a primeira tarefa em um agendamento, isso não será aplicado.',
        'payload' => 'Carga',
        'ignored-files' => 'Arquivos Ignorados',
        'ignored-files-description' => 'Opcional. Inclua os arquivos e pastas a serem excluídos neste backup. Por padrão, o conteúdo do seu arquivo .pteroignore será usado. Se você atingiu seu limite de backup, o backup mais antigo será rotacionado.',
        'start-server' => 'Iniciar o servidor',
        'stop-server' => 'Parar o servidor',
        'restart-server' => 'Reiniciar o servidor',
        'kill-server' => 'Terminar o servidor',
        'continue-on-failure' => 'Continuar em Caso de Falha',
        'continue-on-failure-description' => 'Tarefas futuras serão executadas quando esta tarefa falhar.',
    ],
];