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
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Ez nem egy érvényes IBAN számlaszám.',
    'zero_or_more'                   => 'Az érték nem lehet negatív.',
    'date_or_time'                   => 'Az értéknek érvényes dátum vagy időformátumúnak kell lennie (ISO 8601).',
    'source_equals_destination'      => 'A forrásszámla egyenlő a célszámlával.',
    'unique_account_number_for_user' => 'Úgy tűnik, hogy ez a számlaszám már használatban van.',
    'unique_iban_for_user'           => 'Úgy tűnik, hogy ez a számlaszám már használatban van.',
    'deleted_user'                   => 'Biztonsági megkötések miatt ezzel az email címmel nem lehet regisztrálni.',
    'rule_trigger_value'             => 'Ez az érték érvénytelen a kiválasztott eseményindítóhoz.',
    'rule_action_value'              => 'Ez az érték érvénytelen a kiválasztott művelethez.',
    'file_already_attached'          => 'A feltöltött ":name" fájl már csatolva van ehhez az objektumhoz.',
    'file_attached'                  => '":name" fájl sikeresen feltöltve.',
    'must_exist'                     => 'Az ID mező :attribute nem létezik az adatbázisban.',
    'all_accounts_equal'             => 'Ebben a mezőben minden számlának meg kell egyeznie.',
    'group_title_mandatory'          => 'A csoportcím kötelező ha egynél több tranzakció van.',
    'transaction_types_equal'        => 'Minden felosztásnak ugyanolyan típusúnak kell lennie.',
    'invalid_transaction_type'       => 'Érvénytelen tranzakciótípus.',
    'invalid_selection'              => 'Érvénytelen kiválasztás.',
    'belongs_user'                   => 'Az érték nem érvényes erre a mezőre.',
    'at_least_one_transaction'       => 'Legalább egy tranzakció szükséges.',
    'at_least_one_repetition'        => 'Legalább egy ismétlés szükséges.',
    'require_repeat_until'           => 'Legalább egy ismétlésszám vagy egy végdátum (repeat_until) kötelező. Csak az egyik.',
    'require_currency_info'          => 'Ennek a mezőnek a tartalma érvénytelen pénznem információ nélkül.',
    'not_transfer_account'           => 'Ez a fiók nem használható fel tranzakciókhoz.',
    'require_currency_amount'        => 'Ennek a mezőnek a tartalma érvénytelen devizanem információ nélkül.',
    'equal_description'              => 'A tranzakció leírása nem egyezhet meg a globális leírással.',
    'file_invalid_mime'              => '":name" fájl ":mime" típusú ami nem lehet új feltöltés.',
    'file_too_large'                 => '":name" fájl túl nagy.',
    'belongs_to_user'                => ':attribute értéke ismeretlen.',
    'accepted'                       => ':attribute attribútumot el kell fogadni.',
    'bic'                            => 'Ez nem egy érvényes BIC.',
    'at_least_one_trigger'           => 'A szabályban legalább egy eseményindítónak lennie kell.',
    'at_least_one_active_trigger'    => 'Rule must have at least one active trigger.',
    'at_least_one_action'            => 'A szabályban legalább egy műveletnek lennie kell.',
    'at_least_one_active_action'     => 'Rule must have at least one active action.',
    'base64'                         => 'Ez nem érvényes base64 kódolású adat.',
    'model_id_invalid'               => 'A megadott azonosító érvénytelennek tűnik ehhez a modellhez.',
    'less'                           => ':attribute kisebbnek kell lennie 10,000,000-nél',
    'active_url'                     => ':attribute nem egy érvényes URL.',
    'after'                          => ':attribute egy :date utáni dátum kell legyen.',
    'date_after'                     => 'The start date must be before the end date.',
    'alpha'                          => ':attribute csak betűket tartalmazhat.',
    'alpha_dash'                     => ':attribute csak számokat, betűket és kötőjeleket tartalmazhat.',
    'alpha_num'                      => ':attribute csak betűket és számokat tartalmazhat.',
    'array'                          => ':attribute egy tömb kell legyen.',
    'unique_for_user'                => ':attribute attribútumhoz már van bejegyzés.',
    'before'                         => ':attribute csak :date előtti dátum lehet.',
    'unique_object_for_user'         => 'A név már használatban van.',
    'unique_account_for_user'        => 'Ez a fióknév már használatban van.',

    // Ignore this comment

    'between.numeric'                => ':attribute :min és :max között kell legyen.',
    'between.file'                   => ':attribute :min és :max kilobájt között kell legyen.',
    'between.string'                 => ':attribute :min és :max karakter között kell legyen.',
    'between.array'                  => ':attribute :min és :max elem között kell legyen.',
    'boolean'                        => ':attribute mező csak igaz vagy hamis lehet.',
    'confirmed'                      => 'A :attribute ellenörzés nem egyezik.',
    'date'                           => ':attribute nem egy érvényes dátum.',
    'date_format'                    => ':attribute nem egyezik :format formátummal.',
    'different'                      => ':attribute és :other különböző kell legyen.',
    'digits'                         => ':attribute :digits számjegy kell legyen.',
    'digits_between'                 => ':attribute :min és :max számjegy között kell legyen.',
    'email'                          => ':attribute érvényes email cím kell legyen.',
    'filled'                         => ':attribute mező kötelező.',
    'exists'                         => 'A kiválasztott :attribute étvénytelen.',
    'image'                          => ':attribute kép kell legyen.',
    'in'                             => 'A kiválasztott :attribute étvénytelen.',
    'integer'                        => ':attribute csak egész szám lehet.',
    'ip'                             => ':attribute érvényes IP cím kell legyen.',
    'json'                           => ':attribute érvényes JSON karakterlánc kell legyen.',
    'max.numeric'                    => ':attribute nem lehet nagyobb, mint :max.',
    'max.file'                       => ':attribute nem lehet nagyobb, mint :max kilobájt.',
    'max.string'                     => ':attribute nem lehet nagyobb, mint :max karakter.',
    'max.array'                      => ':attribute nem lehet több, mint :max elem.',
    'mimes'                          => 'A :attribute ilyen fájl típusnak kell lennie: :values.',
    'min.numeric'                    => 'A :attribute legalább :min kell lenni.',
    'lte.numeric'                    => ':attribute attribútumnak :value értéknél kevesebbnek vagy vele egyenlőnek kell lennie.',
    'min.file'                       => ':attribute legalább :min kilobájt kell legyen.',
    'min.string'                     => ':attribute legalább :min karakter kell legyen.',
    'min.array'                      => ':attribute legalább :min elem kell legyen.',
    'not_in'                         => 'A kiválasztott :attribute étvénytelen.',
    'numeric'                        => ':attribute szám kell legyen.',
    'numeric_native'                 => 'A natív értéknek számnak kell lennie.',
    'numeric_destination'            => 'A cél mennyiségnek számnak kell lennie.',
    'numeric_source'                 => 'A forrás mennyiségnek számnak kell lennie.',
    'regex'                          => ':attribute attribútum formátuma érvénytelen.',
    'required'                       => ':attribute mező kötelező.',
    'required_if'                    => ':attribute mező kötelező, ha :other :value.',
    'required_unless'                => ':attribute mező kötelező, kivéve ha :other szerepel itt: :values.',
    'required_with'                  => ':attribute attribútum mező kötelező ha jelen van :values.',
    'required_with_all'              => ':attribute attribútum mező kötelező ha jelen van :values.',
    'required_without'               => ':attribute mező kötelező, ha :values nincs jelen.',
    'required_without_all'           => ':attribute mező kötelező, ha :values közül egy sincs jelen.',
    'same'                           => ':attribute és :other meg kell egyezzenek.',
    'size.numeric'                   => ':attribute attribútumnak :size méretűnek kell lennie.',
    'amount_min_over_max'            => 'A minimum mennyiség nem lehet nagyobb mint a maximális mennyiség.',
    'size.file'                      => ':attribute :size kilobájt kell legyen.',
    'size.string'                    => ':attribute :size karakter kell legyen.',
    'size.array'                     => ':attribute :size elemet kell, hogy tartalmazzon.',
    'unique'                         => ':attribute már foglalt.',
    'string'                         => ':attribute egy karakterlánc kell legyen.',
    'url'                            => ':attribute attribútum formátuma érvénytelen.',
    'timezone'                       => ':attribute érvényes zóna kell legyen.',
    '2fa_code'                       => ':attribute mező érvénytelen.',
    'dimensions'                     => ':attribute attribútum képfelbontása érvénytelen.',
    'distinct'                       => ':attribute mezőben duplikált érték van.',
    'file'                           => ':attribute egy fájl kell legyen.',
    'in_array'                       => ':attribute nem létezik itt: :other.',
    'present'                        => ':attribute mezőnek jelen kell lennie.',
    'amount_zero'                    => 'A teljes mennyiség nem lehet nulla.',
    'current_target_amount'          => 'A megadott értéknek kevesebbnek kell lennie, mint a célérték.',
    'unique_piggy_bank_for_user'     => 'A malacpersely nevének egyedinek kell lennie.',
    'unique_object_group'            => 'Csoport neve már foglalt',
    'starts_with'                    => 'The value must start with :values.',
    'unique_webhook'                 => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'        => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'              => 'Both accounts must be of the same account type',
    'same_account_currency'          => 'Both accounts must have the same currency setting',

    // Ignore this comment

    'secure_password'             => 'Ez nem biztonságos jelszó. Kérlek próbáld meg újra. További információért lásd: https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Érvénytelen ismétléstípus az ismétlődő tranzakciókhoz.',
    'valid_recurrence_rep_moment' => 'Érvénytelen ismétlési időpont ehhez az ismétléstípushoz.',
    'invalid_account_info'        => 'Érvénytelen számlainformáció.',
    'attributes'                  => [
        'email'                   => 'email cím',
        'description'             => 'leírás',
        'amount'                  => 'összeg',
        'transactions.*.amount'   => 'tranzakció összege',
        'name'                    => 'név',
        'piggy_bank_id'           => 'malacpersely azonosító',
        'targetamount'            => 'cél összeg',
        'opening_balance_date'    => 'nyitó egyenleg dátuma',
        'opening_balance'         => 'nyitó egyenleg',
        'match'                   => 'egyezés',
        'amount_min'              => 'minimális összeg',
        'amount_max'              => 'maximális összeg',
        'title'                   => 'cím',
        'tag'                     => 'címke',
        'transaction_description' => 'tranzakció leírása',
        'rule-action-value.1'     => 'szabály művelet érték #1',
        'rule-action-value.2'     => 'szabály művelet érték #2',
        'rule-action-value.3'     => 'szabály művelet érték #3',
        'rule-action-value.4'     => 'szabály művelet érték #4',
        'rule-action-value.5'     => 'szabály művelet érték #5',
        'rule-action.1'           => 'szabály művelet #1',
        'rule-action.2'           => 'szabály művelet #2',
        'rule-action.3'           => 'szabály művelet #3',
        'rule-action.4'           => 'szabály művelet #4',
        'rule-action.5'           => 'szabály művelet #5',
        'rule-trigger-value.1'    => 'szabály eseményindító érték #1',
        'rule-trigger-value.2'    => 'szabály eseményindító érték #2',
        'rule-trigger-value.3'    => 'szabály eseményindító érték #3',
        'rule-trigger-value.4'    => 'szabály eseményindító érték #4',
        'rule-trigger-value.5'    => 'szabály eseményindító érték #5',
        'rule-trigger.1'          => 'szabály eseményindító #1',
        'rule-trigger.2'          => 'szabály eseményindító #2',
        'rule-trigger.3'          => 'szabály eseményindító #3',
        'rule-trigger.4'          => 'szabály eseményindító #4',
        'rule-trigger.5'          => 'szabály eseményindító #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Egy érvényes forrásszámla azonosító és/vagy egy érvényes forrásszámla név kell a folytatáshoz.',
    'withdrawal_source_bad_data'  => 'Nem található érvényes forrásszámla ":id" azonosító vagy ":name" név keresésekor.',
    'withdrawal_dest_need_data'   => 'Egy érvényes célszámla azonosító és/vagy egy érvényes célszámla név kell a folytatáshoz.',
    'withdrawal_dest_bad_data'    => 'Nem található érvényes célszámla ":id" azonosító vagy ":name" név keresésekor.',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Egy érvényes forrásszámla azonosító és/vagy egy érvényes forrásszámla név kell a folytatáshoz.',
    'deposit_source_bad_data'  => 'Nem található érvényes forrásszámla ":id" azonosító vagy ":name" név keresésekor.',
    'deposit_dest_need_data'   => 'Egy érvényes célszámla azonosító és/vagy egy érvényes célszámla név kell a folytatáshoz.',
    'deposit_dest_bad_data'    => 'Nem található érvényes célszámla ":id" azonosító vagy ":name" név keresésekor.',
    'deposit_dest_wrong_type'  => 'A beküldött célfiók nem megfelelő típusú.',

    // Ignore this comment

    'transfer_source_need_data' => 'Egy érvényes forrásszámla azonosító és/vagy egy érvényes forrásszámla név kell a folytatáshoz.',
    'transfer_source_bad_data'  => 'Nem található érvényes forrásszámla ":id" azonosító vagy ":name" név keresésekor.',
    'transfer_dest_need_data'   => 'Egy érvényes célszámla azonosító és/vagy egy érvényes célszámla név kell a folytatáshoz.',
    'transfer_dest_bad_data'    => 'Nem található érvényes célszámla ":id" azonosító vagy ":name" név keresésekor.',
    'need_id_in_edit'           => 'Minden felosztásnak rendelkeznie kell "transaction_journal_id"-val (lehet érvényes érték vagy 0).',

    'ob_source_need_data'           => 'Egy érvényes forrásszámla azonosító és/vagy egy érvényes forrásszámla név kell a folytatáshoz.',
    'lc_source_need_data'           => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'             => 'Egy érvényes célszámla azonosító és/vagy egy érvényes célszámla név kell a folytatáshoz.',
    'ob_dest_bad_data'              => 'Nem található érvényes célszámla ":id" azonosító vagy ":name" név keresésekor.',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Nem használhatod ezt a fiókot forrásfiókként.',
    'generic_invalid_destination' => 'Nem használhatod ezt a fiókot célfiókként.',

    'generic_no_source'      => 'You must submit source account information.',
    'generic_no_destination' => 'You must submit destination account information.',

    'gte.numeric' => ':attribute attribútumnak :value értéknél nagyobbnak vagy vele egyenlőnek kell lennie.',
    'gt.numeric'  => 'A(z) :attribute nagyobb kell, hogy legyen, mint :value.',
    'gte.file'    => ':attribute attribútumnak :value kilobájtnál nagyobb vagy egyenlőnek kell lennie.',
    'gte.string'  => ':attribute attribútumnak :value karakternél nagyobb vagy egyenlőnek kell lennie.',
    'gte.array'   => 'A(z) :attribute legalább :value elemet kell, hogy tartalmazzon.',

    'amount_required_for_auto_budget' => 'Az összeg kötelező.',
    'auto_budget_amount_positive'     => 'Az értéknek nagyobbnak kell lennie nullánál.',
    'auto_budget_period_mandatory'    => 'Az auto költségvetési periódus kötelező mező.',
];

// Ignore this comment
