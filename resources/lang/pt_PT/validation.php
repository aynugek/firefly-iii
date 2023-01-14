<?php

/**
 * validation.php
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
    'missing_where'                  => 'A matriz tem em falha a cláusula-"onde"',
    'missing_update'                 => 'A matriz tem em falha a cláusula-"atualizar"',
    'invalid_where_key'              => 'JSON contém uma chave inválida para a cláusula "onde"',
    'invalid_update_key'             => 'JSON contém uma chave inválida para a cláusula "atualizar"',
    'invalid_query_data'             => 'Existem dados inválidos no campo %s:%s do seu inquérito.',
    'invalid_query_account_type'     => 'O seu inquérito contem contas de tipos diferentes, o que não é permitido.',
    'invalid_query_currency'         => 'O seu inquérito contem contas com configurações de moeda diferentes, o que não é permitido.',
    'iban'                           => 'Este IBAN não é valido.',
    'zero_or_more'                   => 'O valor não pode ser negativo.',
    'date_or_time'                   => 'O valor deve ser uma data válida ou hora (ISO 8601).',
    'source_equals_destination'      => 'A conta de origem é igual a conta de destino.',
    'unique_account_number_for_user' => 'Este numero de conta já esta em uso.',
    'unique_iban_for_user'           => 'Este IBAN já esta em uso.',
    'deleted_user'                   => 'Devido a motivos de segurança, não se pode registar com este e-mail.',
    'rule_trigger_value'             => 'Este valor e invalido para o disparador seleccionado.',
    'rule_action_value'              => 'Este valor e invalido para a accao seleccionada.',
    'file_already_attached'          => 'O ficheiro ":name" carregado ja esta anexado a este objecto.',
    'file_attached'                  => 'Ficheiro carregado com sucesso ":name".',
    'must_exist'                     => 'O ID no campo :attribute nao existe em base de dados.',
    'all_accounts_equal'             => 'Todas as contas neste campo tem de ser iguais.',
    'group_title_mandatory'          => 'Um título de grupo é obrigatório quando existe mais de uma transacção.',
    'transaction_types_equal'        => 'Todas as divisões devem ser do mesmo tipo.',
    'invalid_transaction_type'       => 'Tipo de transacção inválido.',
    'invalid_selection'              => 'A tua seleccao e invalida.',
    'belongs_user'                   => 'O valor e invalido para este campo.',
    'at_least_one_transaction'       => 'Necessita de, pelo menos, uma transaccao.',
    'at_least_one_repetition'        => 'Necessita de, pelo menos, uma repeticao.',
    'require_repeat_until'           => 'Preencher um numero de repeticoes, ou uma data de fim (repeat_until). Nao ambos.',
    'require_currency_info'          => 'O conteudo deste campo e invalido sem as informacoes da divisa.',
    'not_transfer_account'           => 'Esta conta não pode ser utilizada para transferências.',
    'require_currency_amount'        => 'O conteúdo deste campo é inválido sem a informação da moeda estrangeira.',
    'equal_description'              => 'A descricao da transaccao nao deve ser igual a descricao global.',
    'file_invalid_mime'              => 'O ficheiro ":name" e do tipo ":mime" que nao e aceite como um novo upload.',
    'file_too_large'                 => 'O ficheiro ":name" e demasiado grande.',
    'belongs_to_user'                => 'O valor de :attribute e desconhecido.',
    'accepted'                       => 'O :attribute tem de ser aceite.',
    'bic'                            => 'Este BIC nao e valido.',
    'at_least_one_trigger'           => 'A regra tem de ter, pelo menos, um disparador.',
    'at_least_one_active_trigger'    => 'Rule must have at least one active trigger.',
    'at_least_one_action'            => 'A regra tem de ter, pelo menos, uma accao.',
    'at_least_one_active_action'     => 'Rule must have at least one active action.',
    'base64'                         => 'Estes dados nao sao validos na codificacao em base648.',
    'model_id_invalid'               => 'O ID inserido e invalida para este modelo.',
    'less'                           => ':attribute tem de ser menor que 10,000,000',
    'active_url'                     => 'O :attribute nao e um URL valido.',
    'after'                          => 'I :attribute tem de ser uma data depois de :date.',
    'date_after'                     => 'A data de início deve ser anterior à data de fim.',
    'alpha'                          => 'O :attribute apenas pode conter letras.',
    'alpha_dash'                     => 'O :attribute apenas pode conter letras, numero e tracos.',
    'alpha_num'                      => 'O :attribute apenas pode conter letras e numeros.',
    'array'                          => 'O :attribute tem de ser um array.',
    'unique_for_user'                => 'Ja existe uma entrada com este :attribute.',
    'before'                         => 'O :attribute tem de ser uma data antes de :date.',
    'unique_object_for_user'         => 'Este nome ja esta em uso.',
    'unique_account_for_user'        => 'Este nome de conta ja esta em uso.',

    // Ignore this comment

    'between.numeric'                => 'O :attribute tem de estar entre :min e :max.',
    'between.file'                   => 'O :attribute tem de estar entre :min e :max kilobytes.',
    'between.string'                 => 'O :attribute tem de ter entre :min e :max caracteres.',
    'between.array'                  => 'O :attribute tem de ter entre :min e :max itens.',
    'boolean'                        => 'O campo :attribute tem de ser verdadeiro ou falso.',
    'confirmed'                      => 'A confirmacao de :attribute nao coincide.',
    'date'                           => 'A :attribute nao e uma data valida.',
    'date_format'                    => 'O :attribute nao corresponde ao formato :format.',
    'different'                      => 'O :attribute e :other tem de ser diferentes.',
    'digits'                         => 'O :attribute tem de ter :digits digitos.',
    'digits_between'                 => 'O :attribute tem de ter entre :min e :max digitos.',
    'email'                          => 'O :attribute tem de ser um email valido.',
    'filled'                         => 'O campo :attribute e obrigatorio.',
    'exists'                         => 'O :attribute seleccionado e invalido.',
    'image'                          => 'O :attribute tem de ser uma imagem.',
    'in'                             => 'O :attribute seleccionado e invalido.',
    'integer'                        => 'O :attribute tem de ser um inteiro.',
    'ip'                             => 'O :attribute tem de ser um endereco IP valido.',
    'json'                           => 'O :attribute tem de ser uma string JSON valida.',
    'max.numeric'                    => 'O :attribute nao pode ser maior que :max.',
    'max.file'                       => 'O :attribute nao pode ter mais que :max kilobytes.',
    'max.string'                     => 'O :attribute nao pode ter mais que :max caracteres.',
    'max.array'                      => 'O :attribute nao pode ter mais que :max itens.',
    'mimes'                          => 'O :attribute tem de ser um ficheiro do tipo :values.',
    'min.numeric'                    => 'O :attribute tem de ter pelo menos :min.',
    'lte.numeric'                    => 'O :attribute tem de ser menor ou igual que :value.',
    'min.file'                       => 'O :attribute tem de ter, pelo menos, :min kilobytes.',
    'min.string'                     => 'O :attribute tem de ter, pelo menos, :min caracteres.',
    'min.array'                      => 'O :attribute tem de ter, pelo menos, :min itens.',
    'not_in'                         => 'O :attribute seleccionado e invalido.',
    'numeric'                        => 'O :attribute tem de ser um numero.',
    'numeric_native'                 => 'O montante nativo tem de ser um numero.',
    'numeric_destination'            => 'O montante de destino tem de ser um numero.',
    'numeric_source'                 => 'O montante de origem tem de ser um numero.',
    'regex'                          => 'O formato do :attribute e invalido.',
    'required'                       => 'O campo :attribute e obrigatorio.',
    'required_if'                    => 'O campo :attribute e obrigatorio quando :other e :value.',
    'required_unless'                => 'O campo :attribute e obrigatorio, a menos que :other esteja em :values.',
    'required_with'                  => 'O campo :attribute e obrigatorio quando o :values esta presente.',
    'required_with_all'              => 'O campo :attribute e obrigatorio quando o :values esta presente.',
    'required_without'               => 'O campo :attribute e obrigatorio quando o :values nao esta presente.',
    'required_without_all'           => 'O campo :attribute e obrigatorio quando nenhum dos :values estao presentes.',
    'same'                           => 'O :attribute e o :other tem de corresponder.',
    'size.numeric'                   => 'O :attribute tem de ter :size.',
    'amount_min_over_max'            => 'O montante minimo nao pode ser maior que o montante maximo.',
    'size.file'                      => 'O :attribute tem de ter :size kilobytes.',
    'size.string'                    => 'O :attribute tem e ter :size caracteres.',
    'size.array'                     => 'O :attribute tem de conter :size itens.',
    'unique'                         => 'O :attribute ja foi usado.',
    'string'                         => 'O :attribute tem de ser uma string.',
    'url'                            => 'O formato do :attribute e invalido.',
    'timezone'                       => 'O :attribute tem de ser uma zona valida.',
    '2fa_code'                       => 'O campo :attribute e invalido.',
    'dimensions'                     => 'O :attribute tem dimensoes de imagens incorrectas.',
    'distinct'                       => 'O campo :attribute tem um valor duplicado.',
    'file'                           => 'O :attribute tem de ser um ficheiro.',
    'in_array'                       => 'O campo :attribute nao existe em :other.',
    'present'                        => 'O campo :attribute tem de estar presente.',
    'amount_zero'                    => 'O montante total nao pode ser 0.',
    'current_target_amount'          => 'O valor actual deve ser menor que o valor pretendido.',
    'unique_piggy_bank_for_user'     => 'O nome do mealheiro tem de ser unico.',
    'unique_object_group'            => 'O nome do grupo tem que ser único',
    'starts_with'                    => 'O valor deve começar com :values.',
    'unique_webhook'                 => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'        => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'              => 'Ambas as contas devem ser do mesmo tipo de conta',
    'same_account_currency'          => 'Ambas as contas devem ter a mesma moeda configurada',

    // Ignore this comment

    'secure_password'             => 'Esta nao e uma password segura. Tenta de novo por favor. Para mais informacoes visita https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipo de repetição inválido para transações recorrentes.',
    'valid_recurrence_rep_moment' => 'Dia invalido para este tipo de repeticao.',
    'invalid_account_info'        => 'Informação de conta invalida.',
    'attributes'                  => [
        'email'                   => 'endereco de email',
        'description'             => 'descricao',
        'amount'                  => 'montante',
        'transactions.*.amount'   => 'valor de transação',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID do mealheiro',
        'targetamount'            => 'montante alvo',
        'opening_balance_date'    => 'data do saldo inicial',
        'opening_balance'         => 'saldo inicial',
        'match'                   => 'corresponder',
        'amount_min'              => 'montante minimo',
        'amount_max'              => 'montante maximo',
        'title'                   => 'titulo',
        'tag'                     => 'etiqueta',
        'transaction_description' => 'descricao da transaccao',
        'rule-action-value.1'     => 'valor da accao da regra #1',
        'rule-action-value.2'     => 'valor da accao da regra #2',
        'rule-action-value.3'     => 'valor da accao da regra #3',
        'rule-action-value.4'     => 'valor da accao da regra #4',
        'rule-action-value.5'     => 'valor da accao da regra #5',
        'rule-action.1'           => 'accao da regra #1',
        'rule-action.2'           => 'accao da regra #2',
        'rule-action.3'           => 'accao da regra #3',
        'rule-action.4'           => 'accao da regra #4',
        'rule-action.5'           => 'accao da regra #5',
        'rule-trigger-value.1'    => 'valor de disparo da regra #1',
        'rule-trigger-value.2'    => 'valor de disparo da regra #2',
        'rule-trigger-value.3'    => 'valor de disparo da regra #3',
        'rule-trigger-value.4'    => 'valor de disparo da regra #4',
        'rule-trigger-value.5'    => 'valor de disparo da regra #5',
        'rule-trigger.1'          => 'disparo da regra #1',
        'rule-trigger.2'          => 'disparo da regra #2',
        'rule-trigger.3'          => 'disparo da regra #3',
        'rule-trigger.4'          => 'disparo da regra #4',
        'rule-trigger.5'          => 'disparo da regra #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'withdrawal_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'withdrawal_dest_need_data'   => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'withdrawal_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',

    'deposit_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'deposit_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'deposit_dest_need_data'   => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'deposit_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'deposit_dest_wrong_type'  => 'A conta de destino enviada não é do tipo correto.',

    // Ignore this comment

    'transfer_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'transfer_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'transfer_dest_need_data'   => 'É preciso ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'transfer_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',
    'need_id_in_edit'           => 'Cada divisão deve ter transaction_journal_id (ID válido ou 0).',

    'ob_source_need_data'           => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'lc_source_need_data'           => 'É necessário obter um ID de uma conta de origem válida para continuar.',
    'ob_dest_need_data'             => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'ob_dest_bad_data'              => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Não pode utilizar esta conta como conta de origem.',
    'generic_invalid_destination' => 'Não pode utilizar esta conta como conta de destino.',

    'generic_no_source'      => 'You must submit source account information.',
    'generic_no_destination' => 'You must submit destination account information.',

    'gte.numeric' => 'O :attribute deve ser maior ou igual a :value.',
    'gt.numeric'  => 'O :attribute deve ser maior que :value.',
    'gte.file'    => 'O :attribute deve ser maior ou igual a :value kilobytes.',
    'gte.string'  => 'O :attribute deve ser maior ou igual a :value caracteres.',
    'gte.array'   => 'O :attribute deve ter :value items ou mais.',

    'amount_required_for_auto_budget' => 'O montante é obrigatório.',
    'auto_budget_amount_positive'     => 'O montante deve ser maior que zero.',
    'auto_budget_period_mandatory'    => 'O período de orçamento automático é um campo obrigatório.',
];

// Ignore this comment
