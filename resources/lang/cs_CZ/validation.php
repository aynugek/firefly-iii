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
    'bad_type_source'                 => 'Firefly III can\'t determine the transaction type based on this source account.',
    'bad_type_destination'            => 'Firefly III can\'t determine the transaction type based on this destination account.',
    'missing_where'                   => 'Array is missing "where"-clause',
    'missing_update'                  => 'Array is missing "update"-clause',
    'invalid_where_key'               => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'              => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'              => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'      => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'          => 'Váš dotaz obsahuje účty, které mají různá nastavení měny, což není povoleno.',
    'iban'                            => 'Toto není platný IBAN.',
    'zero_or_more'                    => 'Hodnota nemůže být záporná.',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Je třeba, aby hodnota byla platné datum nebo čas (ve formátu dle normy ISO 8601).',
    'source_equals_destination'       => 'Zdrojový účet je zároveň i cílový.',
    'unique_account_number_for_user'  => 'Zdá se, že toto číslo účtu se již používá.',
    'unique_iban_for_user'            => 'Vypadá to, že tento IBAN kód se již používá.',
    'reconciled_forbidden_field'      => 'This transaction is already reconciled, you cannot change the ":field"',
    'deleted_user'                    => 'Z bezpečnostních důvodů se nemůžete registrovat pomocí této emailové adresy.',
    'rule_trigger_value'              => 'Tato hodnota není platná pro označený spouštěč.',
    'rule_action_value'               => 'Tato hodnota je neplatná pro vybranou akci.',
    'file_already_attached'           => 'Nahraný soubor ":name" je již připojen k tomuto objektu.',
    'file_attached'                   => 'Soubor „:name“ úspěšně nahrán.',
    'must_exist'                      => 'Identifikátor v kolonce :attribute v databázi neexistuje.',
    'all_accounts_equal'              => 'Je třeba, aby všechny účty v této kolonce byly stejné.',
    'group_title_mandatory'           => 'Pokud je zde více než jedna transakce, je název skupiny třeba vyplnit.',
    'transaction_types_equal'         => 'Je třeba, aby všechna rozdělení byla stejného typu.',
    'invalid_transaction_type'        => 'Neplatný typ transakce.',
    'invalid_selection'               => 'Váš výběr je neplatný.',
    'belongs_user'                    => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'      => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'at_least_one_transaction'        => 'Potřebujete alespoň jednu transakci.',
    'recurring_transaction_id'        => 'Need at least one transaction.',
    'need_id_to_match'                => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => 'Potřebujete alespoň jedno opakování.',
    'require_repeat_until'            => 'Vyžaduje buď několik opakování nebo datum ukončení (repeat_until). Ne obojí.',
    'require_currency_info'           => 'Obsah tohoto pole je neplatný bez informace o měně.',
    'not_transfer_account'            => 'Tento účet není účet, který lze použít pro převody.',
    'require_currency_amount'         => 'Obsah tohoto pole je neplatný bez informace o měně.',
    'require_foreign_currency'        => 'This field requires a number',
    'require_foreign_dest'            => 'This field value must match the currency of the destination account.',
    'require_foreign_src'             => 'This field value must match the currency of the source account.',
    'equal_description'               => 'Popis transakce nesmí být stejný jako globální popis.',
    'file_invalid_mime'               => 'Soubor ":name" je typu ":mime", který není schválen pro nahrání.',
    'file_too_large'                  => 'Soubor ":name" je příliš velký.',
    'belongs_to_user'                 => 'Hodnota :attribute není známa.',
    'accepted'                        => 'Je potřeba potvrdit :attribute.',
    'bic'                             => 'Toto není platný BIC.',
    'at_least_one_trigger'            => 'Je třeba, aby pravidlo mělo alespoň jeden spouštěč.',
    'at_least_one_active_trigger'     => 'Rule must have at least one active trigger.',
    'at_least_one_action'             => 'Pravidlo musí obsahovat alespoň jednu akci.',
    'at_least_one_active_action'      => 'Rule must have at least one active action.',
    'base64'                          => 'Data nejsou v platném base64 kódování.',
    'model_id_invalid'                => 'Zdá se, že dané ID je neplatné pro tento model.',
    'less'                            => ':attribute musí být menší než 10.000.000',
    'active_url'                      => ':attribute není platná adresa URL.',
    'after'                           => ':attribute nemůže být dříve než :date.',
    'date_after'                      => 'Počáteční datum musí být před datem ukončení.',
    'alpha'                           => ':attribute může obsahovat pouze písmena.',
    'alpha_dash'                      => ':attribute může obsahovat pouze písmena, čísla a pomlčky.',
    'alpha_num'                       => ':attribute může obsahovat pouze písmena a čísla.',
    'array'                           => ':attribute musí být pole.',
    'unique_for_user'                 => 'Položka s tímto :attribute již existuje.',
    'before'                          => ':attribute nemůže být později než :date.',
    'unique_object_for_user'          => 'Tento název je již používán.',
    'unique_account_for_user'         => 'Tento název účtu je již používán.',

    // Ignore this comment

    'between.numeric'                 => ':attribute musí být v rozmezí :min a :max.',
    'between.file'                    => ':attribute musí být v rozmezí :min a :max kilobajtů.',
    'between.string'                  => ':attribute musí mít délku v rozmezí :min a :max znaků.',
    'between.array'                   => ':attribute musí mít mezi :min a :max položkami.',
    'boolean'                         => ':attribute musí mít hodnotu pravda nebo nepravda.',
    'confirmed'                       => 'Potvrzení :attribute se neshoduje.',
    'date'                            => ':attribute není platným datem.',
    'date_format'                     => ':attribute neodpovídá formátu :format.',
    'different'                       => ':attribute a :other se musí lišit.',
    'digits'                          => ':attribute musí obsahovat :digits číslic.',
    'digits_between'                  => ':attribute musí být v rozmezí :min a :max číslic.',
    'email'                           => ':attribute musí být platná e-mailová adresa.',
    'filled'                          => 'Pole :attribute nesmí být prázdné.',
    'exists'                          => 'Vybraný :attribute je neplatný.',
    'image'                           => 'Je třeba, aby :attribute byl obrázek.',
    'in'                              => 'Vybraný :attribute není platný.',
    'integer'                         => 'Je třeba, aby :attribute byl celé číslo.',
    'ip'                              => 'Je třeba, aby :attribute byla platná IP adresa.',
    'json'                            => 'Je třeba, aby :attribute byl platný JSON řetězec.',
    'max.numeric'                     => ':attribute nemůže být vyšší než :max.',
    'max.file'                        => ':attribute nesmí být větší než :max kilobajtů.',
    'max.string'                      => ':attribute nesmí být větší než :max znaků.',
    'max.array'                       => ':attribute nesmí obsahovat více než :max položek.',
    'mimes'                           => ':attribute musí být soubor typu: :values.',
    'min.numeric'                     => 'Je třeba, aby :attribute bylo alespoň :min.',
    'lte.numeric'                     => 'Je třeba, aby :attribute byl nižší nebo roven :value.',
    'min.file'                        => 'Je třeba, aby :attribute byl alespoň :min kilobajtů.',
    'min.string'                      => 'Je třeba, aby :attribute bylo alespoň :min znaků dlouhé.',
    'min.array'                       => ':attribute musí obsahovat alespoň :min položek.',
    'not_in'                          => 'Vybraný :attribute není platný.',
    'numeric'                         => 'Je třeba, aby :attribute byl číslo.',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => 'Je třeba, aby částka v hlavní měně bylo číslo.',
    'numeric_destination'             => 'Je třeba, aby cílová částka bylo číslo.',
    'numeric_source'                  => 'Je třeba, aby zdrojová částka bylo číslo.',
    'regex'                           => 'Formát :attribute není platný.',
    'required'                        => 'Kolonku :attribute je třeba vyplnit.',
    'required_if'                     => ':attribute je vyžadováno pokud :other je :value.',
    'required_unless'                 => ':attribute je vyžadováno pokud :other není v :values.',
    'required_with'                   => ':attribute musí být vyplněno pokud :values je zvoleno.',
    'required_with_all'               => ':attribute musí být vyplněno pokud :values je zvoleno.',
    'required_without'                => ':attribute musí být vyplněno pokud :values není zvoleno.',
    'required_without_all'            => ':attribute musí být vyplněno pokud žádná :values není zvoleno.',
    'same'                            => ':attribute a :other se musí shodovat.',
    'size.numeric'                    => 'Je třeba, aby :attribute byl :size.',
    'amount_min_over_max'             => 'Minimální částka nemůže být vyšší než maximální částka.',
    'size.file'                       => ':attribute musí mít :size kilobajtů.',
    'size.string'                     => ':attribute musí mít :size znaků.',
    'size.array'                      => ':attribute musí obsahovat :size položek.',
    'unique'                          => ':attribute již byl použit.',
    'string'                          => 'Je třeba, aby :attribute byl řetězec.',
    'url'                             => 'Formát :attribute není platný.',
    'timezone'                        => 'Je třeba, aby :attribute byla platná zóna.',
    '2fa_code'                        => 'Kolonka :attribute není platná.',
    'dimensions'                      => ':attribute nemá platné rozměry obrázku.',
    'distinct'                        => 'Kolonka :attribute má duplicitní hodnotu.',
    'file'                            => 'Je třeba, aby :attribute byl soubor.',
    'in_array'                        => 'Pole :attribute neexistuje v :other.',
    'present'                         => 'Je třeba, aby kolonka :attribute byla přítomna.',
    'amount_zero'                     => 'Celková částka nemůže být nula.',
    'current_target_amount'           => 'Aktuální částka musí být menší než cílová částka.',
    'unique_piggy_bank_for_user'      => 'Je třeba, aby se názvy pokladniček neopakovaly.',
    'unique_object_group'             => 'Název skupiny musí být jedinečný',
    'starts_with'                     => 'Hodnota musí začínat :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Oba účty musí být stejného typu',
    'same_account_currency'           => 'Oba účty musí mít stejné nastavení měny',

    // Ignore this comment

    'secure_password'                 => 'Toto není bezpečné heslo. Zkuste jiné. Více se dozvíte na http://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'       => 'Neplatný typ opakování pro opakované transakce.',
    'valid_recurrence_rep_moment'     => 'Neplatné opakování v tento moment tohoto typu opakování.',
    'invalid_account_info'            => 'Neplatná informace o účtu.',
    'attributes'                      => [
        'email'                   => 'e-mailová adresa',
        'description'             => 'popis',
        'amount'                  => 'částka',
        'transactions.*.amount'   => 'částka transakce',
        'name'                    => 'název',
        'piggy_bank_id'           => 'ID pokladničky',
        'targetamount'            => 'cílová částka',
        'opening_balance_date'    => 'počáteční datum zůstatku',
        'opening_balance'         => 'počáteční zůstatek',
        'match'                   => 'shoda',
        'amount_min'              => 'minimální částka',
        'amount_max'              => 'maximální částka',
        'title'                   => 'název',
        'tag'                     => 'štítek',
        'transaction_description' => 'popis transakce',
        'rule-action-value.1'     => 'hodnota č. 1 akce pravidla',
        'rule-action-value.2'     => 'hodnota č. 2 akce pravidla',
        'rule-action-value.3'     => 'hodnota č. 3 akce pravidla',
        'rule-action-value.4'     => 'hodnota akce pravidla č. 4',
        'rule-action-value.5'     => 'hodnota č. 5 akce pravidla',
        'rule-action.1'           => 'Akce pravidla č. 1',
        'rule-action.2'           => 'Akce pravidla č. 2',
        'rule-action.3'           => 'Akce pravidla č. 3',
        'rule-action.4'           => 'akce pravidla č. 4',
        'rule-action.5'           => 'akce pravidla č. 5',
        'rule-trigger-value.1'    => 'hodnota spouštěcího pravidla č. 1',
        'rule-trigger-value.2'    => 'hodnota spouštěcího pravidla #2',
        'rule-trigger-value.3'    => 'hodnota spouštěcího pravidla #3',
        'rule-trigger-value.4'    => 'hodnota spouštěcího pravidla #4',
        'rule-trigger-value.5'    => 'hodnota spouštěcího pravidla #5',
        'rule-trigger.1'          => 'spouštěč pravidla č. 1',
        'rule-trigger.2'          => 'spouštěč pravidla č. 2',
        'rule-trigger.3'          => 'spouštěč pravidla č. 3',
        'rule-trigger.4'          => 'spouštěč pravidla č. 4',
        'rule-trigger.5'          => 'spouštěč pravidla č. 5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Pro pokračování je potřeba získat platné ID zdrojového účtu a/nebo platný název zdrojového účtu.',
    'withdrawal_source_bad_data'      => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'       => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'        => 'Při hledání ID „:id“ nebo jména „:name“ nelze najít platný cílový účet.',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => 'Pro pokračování je potřeba získat platné ID zdrojového účtu a/nebo platný název zdrojového účtu.',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => 'Při hledání ID „:id“ nebo jména „:name“ nelze najít platný cílový účet.',
    'deposit_dest_wrong_type'         => 'Předložený cílový účet není správného typu.',

    // Ignore this comment

    'transfer_source_need_data'       => 'Pro pokračování je potřeba získat platné ID zdrojového účtu a/nebo platný název zdrojového účtu.',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => 'Při hledání ID „:id“ nebo jména „:name“ nelze najít platný cílový účet.',
    'need_id_in_edit'                 => 'Každé rozdělení musí mít transakci_journal_id (platné ID nebo 0).',

    'ob_source_need_data'             => 'Pro pokračování je potřeba získat platné ID zdrojového účtu a/nebo platný název zdrojového účtu.',
    'lc_source_need_data'             => 'Pro pokračování je třeba získat platné ID zdrojového účtu.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => 'Při hledání ID „:id“ nebo jména „:name“ nelze najít platný cílový účet.',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'Tento účet nelze použít jako zdrojový účet.',
    'generic_invalid_destination'     => 'Tento účet nelze použít jako cílový účet.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => 'Je třeba, aby :attribute byl větší nebo roven :value.',
    'gt.numeric'                      => 'Je třeba, aby :attribute byl větší než :value.',
    'gte.file'                        => 'Hodnota :attribute musí být větší nebo rovná :value kilobajtů.',
    'gte.string'                      => 'Hodnota :attribute musí být větší nebo rovná :value znaků.',
    'gte.array'                       => 'Hodnota :attribute musí obsahovat :value nebo víc položek.',

    'amount_required_for_auto_budget' => 'Částka je povinná.',
    'auto_budget_amount_positive'     => 'Částka musí být vyšší než nula.',

    'auto_budget_period_mandatory'    => 'Období automatického rozpočtu je povinné.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

// Ignore this comment
