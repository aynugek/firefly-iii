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
    'iban'                           => 'Bu geçerli bir IBAN değil.',
    'zero_or_more'                   => 'Değer negatif olamaz.',
    'date_or_time'                   => 'Değer geçerli tarih veya zaman formatı olmalıdır (ISO 8601).',
    'source_equals_destination'      => 'Kaynak hesabın hedef hesap eşittir.',
    'unique_account_number_for_user' => 'Bu hesap numarası zaten kullanılmaktadır.',
    'unique_iban_for_user'           => 'Bu IBAN numarası zaten kullanılmaktadır.',
    'deleted_user'                   => 'Güvenlik kısıtlamaları nedeniyle, bu e-posta adresini kullanarak kayıt yapamazsınız.',
    'rule_trigger_value'             => 'Bu eylem, seçili işlem için geçersizdir.',
    'rule_action_value'              => 'Bu eylem seçili işlem için geçersizdir.',
    'file_already_attached'          => 'Yüklenen dosya ":name" zaten bu nesneye bağlı.',
    'file_attached'                  => '":name" dosyası başarıyla yüklendi.',
    'must_exist'                     => 'ID alanı :attribute veritabanın içinde yok.',
    'all_accounts_equal'             => 'Bu alandaki tüm hesapları eşit olmalıdır.',
    'group_title_mandatory'          => 'Birden fazla işlem olduğunda grup başlığı zorunludur.',
    'transaction_types_equal'        => 'Tüm bölümlemeler aynı türde olmalıdır.',
    'invalid_transaction_type'       => 'Geçersiz işlem türü.',
    'invalid_selection'              => 'Seçiminiz geçersiz.',
    'belongs_user'                   => 'Bu değer bu alan için geçerli değil.',
    'at_least_one_transaction'       => 'En az bir işlem gerekir.',
    'at_least_one_repetition'        => 'En az bir tekrarı gerekir.',
    'require_repeat_until'           => 'Require either a number of repetitions, or an end date (repeat_until). Not both.',
    'require_currency_info'          => 'Bu alanın içeriği para birimi bilgileri geçersiz.',
    'not_transfer_account'           => 'This account is not an account that can be used for transfers.',
    'require_currency_amount'        => 'The content of this field is invalid without foreign amount information.',
    'equal_description'              => 'İşlem açıklaması genel açıklama eşit değildir.',
    'file_invalid_mime'              => '":name" dosyası ":mime" türünde olup yeni bir yükleme olarak kabul edilemez.',
    'file_too_large'                 => '":name" dosyası çok büyük.',
    'belongs_to_user'                => ':attribute\'nin değeri bilinmiyor',
    'accepted'                       => ':attribute kabul edilmek zorunda.',
    'bic'                            => 'Bu BIC geçerli değilrdir.',
    'at_least_one_trigger'           => 'Kural en az bir tetikleyiciye sahip olması gerekir.',
    'at_least_one_active_trigger'    => 'Rule must have at least one active trigger.',
    'at_least_one_action'            => 'Kural en az bir eylem olması gerekir.',
    'at_least_one_active_action'     => 'Rule must have at least one active action.',
    'base64'                         => 'Bu geçerli Base64 olarak kodlanmış veri değildir.',
    'model_id_invalid'               => 'Verilen kimlik bu model için geçersiz görünüyor.',
    'less'                           => ':attribute  10.000.000 den daha az olmalıdır',
    'active_url'                     => ':attribute geçerli bir URL değil.',
    'after'                          => ':attribute :date tarihinden sonrası için tarihlendirilmelidir.',
    'date_after'                     => 'The start date must be before the end date.',
    'alpha'                          => ':attribute sadece harf içerebilir.',
    'alpha_dash'                     => ':attribute sadece harf, sayı ve kısa çizgi içerebilir.',
    'alpha_num'                      => ':attribute sadece harf ve sayı içerebilir.',
    'array'                          => ':attribute bir dizi olmalıdır.',
    'unique_for_user'                => ':attribute\'de zaten bir girdi var.',
    'before'                         => ':attribute :date tarihinden öncesi için tarihlendirilmelidir.',
    'unique_object_for_user'         => 'Bu isim zaten kullanılıyor.',
    'unique_account_for_user'        => 'Bu hesap adı zaten kullanılıyor.',

    // Ignore this comment

    'between.numeric'                => ':attribute :min ve :max arasında olmalıdır.',
    'between.file'                   => ':attribute, :min kilobayt ve :max kilobayt arasında olmalıdır.',
    'between.string'                 => ':attribute :min karakter ve :max karakter olmalıdır.',
    'between.array'                  => ':attribute :min öğe ve :max öğe olmalıdır.',
    'boolean'                        => ':attribute alanının doğru veya yanlış olması gerekir.',
    'confirmed'                      => ':attribute doğrulaması eşleşmiyor.',
    'date'                           => ':attribute geçerli bir tarih değil.',
    'date_format'                    => ':attribute :format formatına uymuyor.',
    'different'                      => ':attribute ve :other farklı olmalı.',
    'digits'                         => ':attribute :digits basamak olmalıdır.',
    'digits_between'                 => ':attribute en az :min basamak en fazla :max basamak olmalı.',
    'email'                          => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'filled'                         => ':attribute alanı gereklidir.',
    'exists'                         => 'Seçili :attribute geçersiz.',
    'image'                          => ':attribute bir resim olmalı.',
    'in'                             => 'Seçili :attribute geçersiz.',
    'integer'                        => ':attribute bir tamsayı olmalı.',
    'ip'                             => ':attribute geçerli bir IP adresi olmalı.',
    'json'                           => ':attribute geçerli bir JSON dizini olmalı.',
    'max.numeric'                    => ':attribute, :max değerinden daha büyük olamamalıdır.',
    'max.file'                       => ':attribute :max kilobayttan büyük olmamalıdır.',
    'max.string'                     => ':attribute :max karakterden büyük olmamalıdır.',
    'max.array'                      => ':attribute :max öğeden daha fazlasına sahip olamaz.',
    'mimes'                          => ':attribute :values türünde bir dosya olmalı.',
    'min.numeric'                    => ':attribute en az :min olmalıdır.',
    'lte.numeric'                    => ':attribute küçük veya eşit olması gerekir :value.',
    'min.file'                       => ':attribute en az :min kilobayt olmalıdır.',
    'min.string'                     => ':attribute en az :min karakter olmalıdır.',
    'min.array'                      => ':attribute en az :min öğe içermelidir.',
    'not_in'                         => 'Seçili :attribute geçersiz.',
    'numeric'                        => ':attribute sayı olmalıdır.',
    'numeric_native'                 => 'Yerli tutar bir sayı olması gerekir.',
    'numeric_destination'            => 'Hedef tutar bir sayı olması gerekir.',
    'numeric_source'                 => 'Kaynak tutarın bir sayı olması gerekir.',
    'regex'                          => ':attribute biçimi geçersiz.',
    'required'                       => ':attribute alanı gereklidir.',
    'required_if'                    => ':other :value iken :attribute alanı gereklidir.',
    'required_unless'                => ':other :values içinde değilse :attribute alanı gereklidir.',
    'required_with'                  => ':values mevcutken :attribute alanı gereklidir.',
    'required_with_all'              => ':values mevcutken :attribute alanı gereklidir.',
    'required_without'               => ':values mevcut değilken :attribute alanı gereklidir.',
    'required_without_all'           => 'Hiçbir :values mevcut değilken :attribute alanı gereklidir.',
    'same'                           => ':attribute ve :other eşleşmelidir.',
    'size.numeric'                   => ':attribute :size olmalıdır.',
    'amount_min_over_max'            => 'En az  tutar en fazla tutardan büyük olamaz.',
    'size.file'                      => ':attribute :size kilobyte olmalıdır.',
    'size.string'                    => ':attribute :size karakter olmalıdır.',
    'size.array'                     => ':attribute :size öğeye sahip olmalıdır.',
    'unique'                         => ':attribute zaten alınmış.',
    'string'                         => ':attribute bir dizi olmalıdır.',
    'url'                            => ':attribute biçimi geçersiz.',
    'timezone'                       => ':attribute geçerli bir bölge olmalıdır.',
    '2fa_code'                       => ':attribute alanı geçersiz.',
    'dimensions'                     => ':attribute geçersiz görüntü boyutlarına sahip.',
    'distinct'                       => ':attribute alanı yinelenen bir değere sahip.',
    'file'                           => ':attribute bir dosya olmalıdır.',
    'in_array'                       => ':attribute alanı :other içinde olamaz.',
    'present'                        => ':attribute alanı mevcut olmalıdır.',
    'amount_zero'                    => 'Toplam tutarı sıfır olamaz.',
    'current_target_amount'          => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user'     => 'Kumbara adı benzersiz olmalıdır.',
    'unique_object_group'            => 'Grup adı benzersiz olmalıdır',
    'starts_with'                    => 'Değer şununla başlamalıdır :values.',
    'unique_webhook'                 => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'        => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'              => 'Both accounts must be of the same account type',
    'same_account_currency'          => 'Both accounts must have the same currency setting',

    // Ignore this comment

    'secure_password'             => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Invalid repetition type for recurring transactions.',
    'valid_recurrence_rep_moment' => 'Invalid repetition moment for this type of repetition.',
    'invalid_account_info'        => 'Geçersiz hesap bilgileri.',
    'attributes'                  => [
        'email'                   => 'E-posta adresi',
        'description'             => 'Açıklama',
        'amount'                  => 'Tutar',
        'transactions.*.amount'   => 'transfer tutarı',
        'name'                    => 'adı',
        'piggy_bank_id'           => 'Kumbara ID',
        'targetamount'            => 'Hedef tutar',
        'opening_balance_date'    => 'açılış bakiye tarihi',
        'opening_balance'         => 'açılış Bakiyesi',
        'match'                   => 'Eşleşme',
        'amount_min'              => 'Minimum tutar',
        'amount_max'              => 'Maksimum tutar',
        'title'                   => 'başlık',
        'tag'                     => 'etiket',
        'transaction_description' => 'İşlem Açıklaması',
        'rule-action-value.1'     => 'kural eylemi değer #1',
        'rule-action-value.2'     => 'kural eylemi değer #1',
        'rule-action-value.3'     => 'kural eylem değeri #3',
        'rule-action-value.4'     => 'kural eylem değeri #4',
        'rule-action-value.5'     => 'kural eylem değeri #5',
        'rule-action.1'           => 'kural eylemi #1',
        'rule-action.2'           => 'kural eylemi #2',
        'rule-action.3'           => 'kural eylemi #3',
        'rule-action.4'           => 'kural eylemi #4',
        'rule-action.5'           => 'kural eylemi #5',
        'rule-trigger-value.1'    => 'kural tetikleyici değeri #1',
        'rule-trigger-value.2'    => 'kural tetikleyici değeri #2',
        'rule-trigger-value.3'    => 'kural tetikleyici değeri #3',
        'rule-trigger-value.4'    => 'kural tetikleyici değeri #4',
        'rule-trigger-value.5'    => 'kural tetikleyici değeri #5',
        'rule-trigger.1'          => 'kural tetikleyici #1',
        'rule-trigger.2'          => 'kural tetikleyici #2',
        'rule-trigger.3'          => 'kural tetikleyici #3',
        'rule-trigger.4'          => 'kural tetikleyici #4',
        'rule-trigger.5'          => 'kural tetikleyici #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'withdrawal_source_bad_data'  => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'deposit_source_bad_data'  => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'deposit_dest_wrong_type'  => 'The submitted destination account is not of the right type.',

    // Ignore this comment

    'transfer_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'transfer_source_bad_data'  => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'need_id_in_edit'           => 'Each split must have transaction_journal_id (either valid ID or 0).',

    'ob_source_need_data'           => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'lc_source_need_data'           => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'             => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'You can\'t use this account as the source account.',
    'generic_invalid_destination' => 'You can\'t use this account as the destination account.',

    'generic_no_source'      => 'You must submit source account information.',
    'generic_no_destination' => 'You must submit destination account information.',

    'gte.numeric' => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'  => 'The :attribute must be greater than :value.',
    'gte.file'    => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'  => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'   => 'The :attribute must have :value items or more.',

    'amount_required_for_auto_budget' => 'The amount is required.',
    'auto_budget_amount_positive'     => 'The amount must be more than zero.',
    'auto_budget_period_mandatory'    => 'The auto budget period is a mandatory field.',
];

// Ignore this comment
