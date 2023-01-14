<?php

/**
 * list.php
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
    'buttons'                 => 'ボタン',
    'icon'                    => 'アイコン',
    'id'                      => 'ID',
    'create_date'             => '作成日時',
    'update_date'             => '更新日時',
    'updated_at'              => '更新日時',
    'balance_before'          => '前の残高',
    'balance_after'           => '後の残高',
    'name'                    => '名称',
    'role'                    => '役割',
    'currentBalance'          => '現在の残高',
    'linked_to_rules'         => '関連ルール',
    'active'                  => '有効',
    'percentage'              => '割合',
    'recurring_transaction'   => '繰り返しの収支',
    'next_due'                => '次の期限',
    'transaction_type'        => '種別',
    'lastActivity'            => '最終アクティビティ',
    'balanceDiff'             => '残高差',
    'other_meta_data'         => 'その他のメタデータ',
    'invited_at'              => 'Invited at',
    'expires'                 => 'Invitation expires',
    'invited_by'              => 'Invited by',
    'invite_link'             => 'Invite link',
    'account_type'            => '口座種別',
    'created_at'              => '作成日時',
    'account'                 => '口座',
    'external_url'            => '外部 URL',
    'matchingAmount'          => '金額',
    'destination'             => '宛先',
    'source'                  => '源泉',
    'next_expected_match'     => '次の一致予測',
    'automatch'               => '自動一致',

    // Ignore this comment

    'repeat_freq'             => '繰り返し',
    'description'             => '説明',
    'amount'                  => '金額',
    'date'                    => '日付',
    'interest_date'           => '利息日',
    'book_date'               => '予約日',
    'process_date'            => '処理日',
    'due_date'                => '期限日',
    'payment_date'            => '引き落とし日',
    'invoice_date'            => '領収書発行日',
    'internal_reference'      => 'システム内参考品',
    'notes'                   => '備考',
    'from'                    => 'から',
    'piggy_bank'              => '貯金箱',
    'to'                      => '受け取り',
    'budget'                  => '予算',
    'category'                => 'カテゴリ',
    'bill'                    => '請求',
    'withdrawal'              => '出金',
    'deposit'                 => '入金',
    'transfer'                => '送金',
    'type'                    => '種別',
    'completed'               => '完了',
    'iban'                    => 'IBAN',
    'account_number'          => '口座番号',
    'paid_current_period'     => 'この期間の支払い済み',
    'email'                   => 'Email',
    'registered_at'           => '登録日時',
    'is_blocked'              => 'ブロック済み',
    'is_admin'                => '管理者',
    'has_two_factor'          => '2要素認証が有効か',
    'blocked_code'            => 'ブロックコード',
    'source_account'          => '源泉口座',
    'destination_account'     => '宛先口座',
    'accounts_count'          => '口座数',
    'journals_count'          => '取引件数',
    'attachments_count'       => '添付ファイル数',
    'bills_count'             => '請求数',
    'categories_count'        => 'カテゴリ数',
    'budget_count'            => '予算数',
    'rule_and_groups_count'   => 'ルールとルールグループ数',
    'tags_count'              => 'タグの数',
    'tags'                    => 'タグ',
    'inward'                  => '内向きの説明',
    'outward'                 => '外向きの説明',
    'number_of_transactions'  => '取引件数',
    'total_amount'            => '合計金額',
    'sum'                     => '合計',
    'sum_excluding_transfers' => '合計 (送金を除く)',
    'sum_withdrawals'         => '合計出金額',
    'sum_deposits'            => '入金合計額',
    'sum_transfers'           => '合計送金額',
    'sum_reconciliations'     => '調整の合計',
    'reconcile'               => '照合',
    'sepa_ct_id'              => 'SEPA エンドツーエンド識別子',
    'sepa_ct_op'              => 'SEPA 反対のアカウント識別子',
    'sepa_db'                 => 'SEPA 委任識別子',
    'sepa_country'            => 'SEPA国',
    'sepa_cc'                 => 'SEPA 精算コード',
    'sepa_ep'                 => 'SEPA 外部目的',
    'sepa_ci'                 => 'SEPA 債権者識別子',
    'sepa_batch_id'           => 'SEPA バッチ ID',
    'external_id'             => '外部ID',
    'account_at_bunq'         => 'bunq口座',
    'file_name'               => 'ファイル名',

    // Ignore this comment

    'file_size'               => 'ファイルサイズ',
    'file_type'               => 'ファイルの種類',
    'attached_to'             => '添付先',
    'file_exists'             => 'ファイルがすでに存在しています',
    'spectre_bank'            => '銀行',
    'spectre_last_use'        => '最終ログイン',
    'spectre_status'          => '状態',
    'bunq_payment_id'         => 'bunq 支払いID',
    'repetitions'             => '繰り返し',
    'title'                   => 'タイトル',
    'transaction_s'           => '取引',
    'field'                   => '項目',
    'value'                   => '数値',
    'interest'                => '利息',
    'interest_period'         => '利息期間',
    'liability_type'          => '債務種別',
    'liability_direction'     => '債務の出入',
    'end_date'                => '終了日',
    'payment_info'            => '支払情報',
    'expected_info'           => '次の予想される取引',
    'start_date'              => '開始日',
    'trigger'                 => 'Trigger',
    'response'                => 'Response',
    'delivery'                => 'Delivery',
    'url'                     => 'URL',
    'secret'                  => 'Secret',

];
// Ignore this comment
