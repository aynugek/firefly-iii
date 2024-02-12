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
    'buttons'                 => '버튼',
    'icon'                    => '아이콘',
    'id'                      => '아이디',
    'create_date'             => '생성일',
    'update_date'             => '수정일',
    'updated_at'              => '수정일',
    'balance_before'          => '이전 잔고',
    'balance_after'           => '이후 잔고',
    'name'                    => '이름',
    'role'                    => '역할',
    'currentBalance'          => '현재 잔고',
    'linked_to_rules'         => '관련 규칙',
    'active'                  => '활성 상태입니까?',
    'percentage'              => '%',
    'recurring_transaction'   => '반복 거래',
    'next_due'                => '다음 마감일',
    'transaction_type'        => '유형',
    'lastActivity'            => '마지막 활동',
    'balanceDiff'             => '잔고 차이',
    'other_meta_data'         => '다른 메타데이터',
    'invited_at'              => '초대됨',
    'expires'                 => '초대 만료됨',
    'invited_by'              => '에 의해 초대됨',
    'invite_link'             => '초대 링크',
    'account_type'            => '계정 유형',
    'created_at'              => '생성일',
    'account'                 => '계정',
    'external_url'            => '외부 URL',
    'matchingAmount'          => '금액',
    'destination'             => '대상',
    'source'                  => '소스',
    'next_expected_match'     => '다음 예상 지불일',
    'automatch'               => '자동 매칭?',

    // Ignore this comment

    'repeat_freq'             => '반복',
    'description'             => '설명',
    'amount'                  => '금액',
    'date'                    => '날짜',
    'interest_date'           => '이자 날짜',
    'book_date'               => '예약일',
    'process_date'            => '처리일',
    'due_date'                => '기한',
    'payment_date'            => '결제일',
    'invoice_date'            => '청구서 날짜',
    'internal_reference'      => '내부 참조',
    'notes'                   => '메모',
    'from'                    => '에서',
    'piggy_bank'              => '저금통',
    'to'                      => '에게',
    'budget'                  => '예산',
    'category'                => '카테고리',
    'bill'                    => '청구서',
    'withdrawal'              => '출금',
    'deposit'                 => '입금',
    'transfer'                => '이체',
    'type'                    => '유형',
    'completed'               => '완료',
    'iban'                    => 'IBAN',
    'account_number'          => '계좌 번호',
    'paid_current_period'     => '지불일',
    'email'                   => '이메일',
    'registered_at'           => '등록일',
    'is_blocked'              => '차단됨',
    'is_admin'                => '관리자',
    'has_two_factor'          => '2FA 있음',
    'blocked_code'            => '블록 코드',
    'source_account'          => '소스 계정',
    'destination_account'     => '대상 계정',
    'accounts_count'          => '계정 갯수',
    'journals_count'          => '거래 갯수',
    'attachments_count'       => '첨부파일 갯수',
    'bills_count'             => '청구서 갯수',
    'categories_count'        => '카테고리 갯수',
    'budget_count'            => '예산 갯수',
    'rule_and_groups_count'   => '규칙과 규칙 그룹 갯수',
    'tags_count'              => '태그 갯수',
    'tags'                    => '태그',
    'inward'                  => '내부 설명',
    'outward'                 => '외부 설명',
    'number_of_transactions'  => '거래 갯수',
    'total_amount'            => '전체 금액',
    'sum'                     => '합계',
    'sum_excluding_transfers' => '합계 (이체 제외)',
    'sum_withdrawals'         => '출금 합계',
    'sum_deposits'            => '입금 합계',
    'sum_transfers'           => '이체 합계',
    'sum_reconciliations'     => '조정 합계',
    'reconcile'               => '조정',
    'sepa_ct_id'              => 'SEPA 종단간 식별자',
    'sepa_ct_op'              => 'SEPA 상대 계정 식별자',
    'sepa_db'                 => 'SEPA 위임 식별자',
    'sepa_country'            => 'SEPA 국가',
    'sepa_cc'                 => 'SEPA 클리어링 코드',
    'sepa_ep'                 => 'SEPA 외부 목적',
    'sepa_ci'                 => 'SEPA 채권자 식별자',
    'sepa_batch_id'           => 'SEPA 배치 ID',
    'external_id'             => '외부 ID',
    'account_at_bunq'         => 'Bunq 계정',
    'file_name'               => '파일명',

    // Ignore this comment

    'file_size'               => '파일 크기',
    'file_type'               => '파일 형식',
    'attached_to'             => '첨부',
    'file_exists'             => '파일 존재',
    'spectre_bank'            => '은행',
    'spectre_last_use'        => '최종 로그인',
    'spectre_status'          => '상태',
    'bunq_payment_id'         => 'bunq 지불 ID',
    'repetitions'             => '반복',
    'title'                   => '제목',
    'transaction_s'           => '거래',
    'field'                   => '필드',
    'value'                   => '값',
    'interest'                => '이자',
    'interest_period'         => '이자 기간',
    'liability_type'          => '부채 유형',
    'liability_direction'     => '부채 입출금',
    'end_date'                => '종료 날짜',
    'payment_info'            => '결제 정보',
    'expected_info'           => '다음 예상 거래',
    'start_date'              => '시작일',
    'trigger'                 => '트리거',
    'response'                => '응답',
    'delivery'                => '전달',
    'url'                     => 'URL',
    'secret'                  => 'Secret',
];
// Ignore this comment
