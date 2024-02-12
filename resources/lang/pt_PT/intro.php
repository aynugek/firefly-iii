<?php

/**
 * intro.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Ignore this comment

declare(strict_types=1);

return [
    // index
    'index_intro'                                             => 'Bem-vindo(a) à página inicial do Firefly III. Por favor, reserve um momento para ler a nossa introdução para perceber o modo de funcionamento do Firefly III.',
    'index_accounts-chart'                                    => 'Este gráfico mostra o saldo atual das suas contas de ativos. Pode selecionar as contas a aparecer aqui, nas suas preferências.',
    'index_box_out_holder'                                    => 'Esta caixa e as restantes ao lado dão-lhe um breve resumo da sua situação financeira.',
    'index_help'                                              => 'Se alguma vez precisar de ajuda com uma página ou um formulário, use este botão.',
    'index_outro'                                             => 'A maioria das páginas no Firefly III vão começar com um pequeno tutorial como este. Por favor, contacte-me quando tiver questões ou comentários. Desfrute!',
    'index_sidebar-toggle'                                    => 'Para criar transações, contas ou outras coisas, use o menu sobre este ícone.',
    'index_cash_account'                                      => 'Estas são as contas criadas até agora. Pode usar uma conta caixa para acompanhar as suas despesas em dinheiro, no entanto, não é obrigatório usar.',

    // transactions
    'transactions_create_basic_info'                          => 'Adicione a informação básica da sua transação. Origem, destino, data e descrição.',
    'transactions_create_amount_info'                         => 'Adicione a quantia da transação. Se necessário os campos atualizar-se-ão automaticamente com informações de moedas estrangeiras.',
    'transactions_create_optional_info'                       => 'Estes campos são todos opcionais. Adicionar meta-dados aqui irá ajudar a organizar melhor as suas transações.',
    'transactions_create_split'                               => 'Se quiser dividir uma transação, adicione mais divisões com este botão',

    // create account:
    'accounts_create_iban'                                    => 'Atribua IBAN\'s válidos às suas contas. Isto pode ajudar a tornar a importação de dados muito simples no futuro.',
    'accounts_create_asset_opening_balance'                   => 'As contas de ativos podem ter um saldo de abertura, desta forma indicando o início do seu historial no Firefly III.',
    'accounts_create_asset_currency'                          => 'O Firefly III suporta múltiplas moedas. Contas de ativos tem uma moeda principal, que deve ser definida aqui.',
    'accounts_create_asset_virtual'                           => 'Por vezes, pode ajudar dar à sua conta um saldo virtual: uma quantia extra, sempre adicionada ou removida do saldo real.',

    // budgets index
    'budgets_index_intro'                                     => 'Os orçamentos são usados para gerir as suas finanças e fazem parte de uma das funções principais do Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Ao gastar dinheiro esta barra vai sendo preenchida.',
    'budgets_index_navigate_periods'                          => 'Navega através de intervalos para definir os orçamentos antecipadamente.',
    'budgets_index_new_budget'                                => 'Crie novos orçamentos como achar melhor.',
    'budgets_index_list_of_budgets'                           => 'Use esta tabela para definir os valores para cada orçamento e manter o controlo dos gastos.',
    'budgets_index_outro'                                     => 'Para obter mais informações sobre orçamentos, verifique o ícone de ajuda no canto superior direito.',

    // Ignore this comment

    // reports (index)
    'reports_index_intro'                                     => 'Use estes relatórios para obter sínteses detalhadas sobre as suas finanças.',
    'reports_index_inputReportType'                           => 'Escolha um tipo de relatório. Confira as páginas de ajuda para ter a certeza do que cada relatório mostra.',
    'reports_index_inputAccountsSelect'                       => 'Pode incluir ou excluir contas de ativos conforme as suas necessidades.',
    'reports_index_inputDateRange'                            => 'O intervalo das datas depende do que quiser: 1 dia, 10 anos, ou até mais.',
    'reports_index_extra-options-box'                         => 'Dependendo do relatório que selecionou, pode selecionar filtros e opções extra aqui. Repare nesta caixa quando mudar os tipos de relatório.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Este relatório vai-lhe dar uma visão rápida e abrangente das suas finanças. Se desejar ver algo a mais, por favor não hesite em contactar-me!',
    'reports_report_audit_intro'                              => 'Este relatório vai-lhe dar informações detalhadas das suas contas de ativos.',
    'reports_report_audit_optionsBox'                         => 'Usa estes campos para mostrar ou esconder as colunas que pretenda.',

    'reports_report_category_intro'                           => 'Este relatório dar-lhe-á perspetiva sobre uma ou múltiplas categorias.',
    'reports_report_category_pieCharts'                       => 'Estes gráficos dar-lhe-ão perspetiva sobre despesas e receitas, por categoria ou por conta.',
    'reports_report_category_incomeAndExpensesChart'          => 'Este gráfico mostra-lhe as despesas e receitas por categoria.',

    'reports_report_tag_intro'                                => 'Este relatório dar-lhe-á informações de uma ou múltiplas etiquetas.',
    'reports_report_tag_pieCharts'                            => 'Estes gráficos dar-lhe-ão informações de despesas e receitas por etiqueta, conta, categoria ou orçamento.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Este gráfico mostra-lhe as suas despesas e receitas por etiqueta.',

    'reports_report_budget_intro'                             => 'Este relatório dar-lhe-á informações de um ou múltiplos orçamentos.',
    'reports_report_budget_pieCharts'                         => 'Estes gráficos dar-lhe-ão perspetiva sobre despesas por orçamento ou por conta.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Este gráfico mostra-lhe as suas despesas por orçamento.',

    // create transaction
    'transactions_create_switch_box'                          => 'Use estes botões para mudar rapidamente o tipo de transação que deseja gravar.',
    'transactions_create_ffInput_category'                    => 'Pode escrever livremente neste campo. Serão sugeridas categorias criadas previamente.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Associa o seu levantamento a um orçamento para um melhor controlo financeiro.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Use esta caixa de seleção quando o seu levantamento é noutra moeda.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Use esta caixa de seleção quando o seu depósito estiver noutra moeda.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Selecione um mealheiro e associe esta transferência às suas poupanças.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Este campo mostra-lhe quanto já poupou em cada mealheiro.',
    'piggy-banks_index_button'                                => 'Ao lado desta barra de progresso existem 2 botões (+ e -) para adicionar ou remover dinheiro de cada mealheiro.',
    'piggy-banks_index_accountStatus'                         => 'Para cada conta de ativo com pelo menos um mealheiro, o estado e listado nesta tabela.',

    // Ignore this comment

    // create piggy
    'piggy-banks_create_name'                                 => 'Qual é o seu objetivo? Um sofá novo, uma câmara, dinheiro para emergências?',
    'piggy-banks_create_date'                                 => 'Pode definir uma data alvo ou um prazo limite para o seu mealheiro.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Este gráfico mostra-lhe o histórico deste mealheiro.',
    'piggy-banks_show_piggyDetails'                           => 'Alguns detalhes sobre o seu mealheiro',
    'piggy-banks_show_piggyEvents'                            => 'Quaisquer adições ou remoções também serão listadas aqui.',

    // bill index
    'bills_index_rules'                                       => 'Aqui pode ver as regras que serão validadas se este encargo ocorrer',
    'bills_index_paid_in_period'                              => 'Este campo indica o último pagamento deste encargo.',
    'bills_index_expected_in_period'                          => 'Este campo indica para cada encargo, se e quando ocorrerá novamente.',

    // show bill
    'bills_show_billInfo'                                     => 'Esta tabela mostra alguma informação geral sobre este encargo.',
    'bills_show_billButtons'                                  => 'Usa este botão para reanalisar transações antigas para ser feita correspondência com este encargo.',
    'bills_show_billChart'                                    => 'Este gráfico mostra as transações associadas a este encargo.',

    // create bill
    'bills_create_intro'                                      => 'Use os encargos para controlar o montante de dinheiro que terá de despender em cada período. Pense nos encargos como rendas de casa, seguros ou pagamentos de hipotecas.',
    'bills_create_name'                                       => 'Use um nome descritivo como "Renda" ou "Seguro de Vida".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Selecione um montante mínimo e máximo para este encargo.',
    'bills_create_repeat_freq_holder'                         => 'A maioria dos encargos são mensais, mas pode definir outra frequência aqui.',
    'bills_create_skip_holder'                                => 'Se um encargo se repete a cada 2 semanas, o campo "saltar" deve ser colocado como "1" para saltar semana sim, semana não.',

    // rules index
    'rules_index_intro'                                       => 'O Firefly III permite-lhe gerir regras, que serão aplicadas automaticamente a qualquer transação que cria ou altere.',
    'rules_index_new_rule_group'                              => 'Pode combinar regras em grupos para uma gestão mais fácil.',
    'rules_index_new_rule'                                    => 'Crie quantas regras quiser.',
    'rules_index_prio_buttons'                                => 'Ordene-as da forma que achar melhor.',
    'rules_index_test_buttons'                                => 'Pode testar as suas regras ou aplicá-las a transações existentes.',
    'rules_index_rule-triggers'                               => 'As regras têm "gatilhos" e "ações" que pode ordenar com drag-and-drop.',
    'rules_index_outro'                                       => 'Certifique-se que consulta a página de ajuda no ícone (?) no canto superior direito!',

    // create rule:
    'rules_create_mandatory'                                  => 'Escolha um título descritivo e defina quando a regra deve ser acionada.',
    'rules_create_ruletriggerholder'                          => 'Adicione todos os gatilhos que quiser, mas tenha presente que TODOS os gatilhos têm de ocorrer para que qualquer ação seja acionada.',
    'rules_create_test_rule_triggers'                         => 'Use este botão para ver que transações podem coincidir com a sua regra.',
    'rules_create_actions'                                    => 'Defina todas as ações que quiser.',

    // Ignore this comment

    // preferences
    'preferences_index_tabs'                                  => 'Mais opções estão disponíveis atrás destas abas.',

    // currencies
    'currencies_index_intro'                                  => 'O Firefly III suporta multiplas divisas que podes mudar nesta pagina.',
    'currencies_index_default'                                => 'O Firefly III tem uma moeda predefinida.',
    'currencies_index_buttons'                                => 'Use os botões para alterar a moeda padrão ou habilitar outras moedas.',

    // create currency
    'currencies_create_code'                                  => 'Este código deve ser compatível com ISO (procure a sua nova moeda no Google).',
];
// Ignore this comment
