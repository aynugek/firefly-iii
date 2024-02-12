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
    'index_intro'                                             => 'Firefly III의 시작 페이지에 오신 것을 환영합니다. Firefly III가 어떻게 작동하는지 알고 싶다면 이 튜토리얼을 따르기 위해 시간을 내어 주세요.',
    'index_accounts-chart'                                    => '이 차트는 현재 자산 계좌의 잔액을 나타냅니다. 설정에서 나타낼 계좌를 선택할 수 있습니다.',
    'index_box_out_holder'                                    => '이 작은 상자와 옆의 상자로 현재 당신의 경제적 상황을 간단하게 볼 수 있습니다.',
    'index_help'                                              => '페이지나 입력란에서 도움이 필요하다면, 언제나 이 버튼을 눌러주세요.',
    'index_outro'                                             => '대부분의 Firefly III 페이지는 이렇게 짧은 튜토리얼로 시작할 것입니다. 질문이나 조언이 있다면 언제나 저에게 문의하세요. 감사합니다!',
    'index_sidebar-toggle'                                    => '새 거래를 만들고 계좌를 만들기 위해서는 이 아이콘 밑의 메뉴를 이용해주세요.',
    'index_cash_account'                                      => '지금까지 생성된 계좌들입니다. 현금 계정을 사용하여 현금 지출을 추적할 수 있지만 물론 필수는 아닙니다.',

    // transactions
    'transactions_create_basic_info'                          => '거래의 기본 정보를 입력합니다. 보내는 이, 받는 이, 날짜 및 설명을 입력합니다.',
    'transactions_create_amount_info'                         => '거래 금액을 입력합니다. 필요하다면 필드가 해외 금액 정보로 자동 업데이트 됩니다.',
    'transactions_create_optional_info'                       => '이 모든 필드는 선택 사항입니다. 여기에 메타데이터를 추가하면 트랜잭션을 더 체계적으로 관리할 수 있습니다.',
    'transactions_create_split'                               => '거래를 분할하려면 이 버튼을 사용하여 분할을 더 추가하세요',

    // create account:
    'accounts_create_iban'                                    => '계정에 유효한 IBAN을 부여하세요. 이렇게 하면 향후 데이터 가져오기가 매우 쉬워질 수 있습니다.',
    'accounts_create_asset_opening_balance'                   => '자산 계정에 "초기 잔고"가 있을 수 있으며, 이는 Firefly III에서 이 계정의 기록이 시작되었음을 나타냅니다.',
    'accounts_create_asset_currency'                          => 'Firefly III는 여러 통화를 지원합니다. 자산 계정에는 하나의 기본 통화가 있으며 여기에서 설정해야 합니다.',
    'accounts_create_asset_virtual'                           => '계정에 가상 잔고를 제공하는 것이 도움이 될 수 있습니다. 즉, 실제 잔액에서 항상 추가되거나 제거되는 추가 금액입니다.',

    // budgets index
    'budgets_index_intro'                                     => '예산은 재정을 관리하는 데 사용되며 Firefly III의 핵심 기능 중 하나입니다.',
    'budgets_index_see_expenses_bar'                          => '돈을 쓰면 이 막대가 서서히 채워집니다.',
    'budgets_index_navigate_periods'                          => '기간을 탐색하여 예산을 미리 쉽게 설정할 수 있습니다.',
    'budgets_index_new_budget'                                => '필요에 따라 새 예산을 만들 수 있습니다.',
    'budgets_index_list_of_budgets'                           => '이 표를 사용하여 각 예산의 금액을 설정하고 진행 상황을 확인하세요.',
    'budgets_index_outro'                                     => '예산 책정에 대해 자세히 알아보려면 오른쪽 상단의 도움말 아이콘을 확인하세요.',

    // Ignore this comment

    // reports (index)
    'reports_index_intro'                                     => '이 보고서를 사용하여 재정에 대한 자세한 인사이트를 얻으세요.',
    'reports_index_inputReportType'                           => '보고서 유형을 선택합니다. 도움말 페이지에서 각 보고서에 표시되는 내용을 확인하세요.',
    'reports_index_inputAccountsSelect'                       => '원하는 대로 자산 계정을 제외하거나 포함할 수 있습니다.',
    'reports_index_inputDateRange'                            => 'The selected date range is entirely up to you: from one day to 10 years or more.',
    'reports_index_extra-options-box'                         => '선택한 보고서에 따라 여기에서 추가 필터 및 옵션을 선택할 수 있습니다. 보고서 유형을 변경할 때 이 상자를 확인하세요.',

    // reports (reports)
    'reports_report_default_intro'                            => '이 보고서는 재정에 대한 빠르고 포괄적인 개요를 제공합니다. 다른 것을 보고 싶다면 망설이지 말고 저에게 연락하세요!',
    'reports_report_audit_intro'                              => '이 보고서는 자산 계정에 대한 자세한 전망을 제공합니다.',
    'reports_report_audit_optionsBox'                         => '체크박스를 사용하여 관심 있는 열을 표시하거나 숨길 수 있습니다.',

    'reports_report_category_intro'                           => '이 보고서는 하나 또는 그 이상의 카테고리에 대한 전망을 제공합니다.',
    'reports_report_category_pieCharts'                       => '이 차트를 통해 카테고리 또는 계정별 지출과 수입에 대한 전망을 얻을 수 있습니다.',
    'reports_report_category_incomeAndExpensesChart'          => '이 차트는 카테고리별 지출과 수입을 보여줍니다.',

    'reports_report_tag_intro'                                => '이 보고서는 하나 또는 그 이상의 태그에 대한 전망을 제공합니다.',
    'reports_report_tag_pieCharts'                            => '이 차트를 통해 태그, 계정, 카테고리 또는 예산별로 지출과 수입에 대한 전망을 얻을 수 있습니다.',
    'reports_report_tag_incomeAndExpensesChart'               => '이 차트는 태그별 지출과 수입을 보여줍니다.',

    'reports_report_budget_intro'                             => '이 보고서는 하나 또는 그 이상의 예산에 대한 전망을 제공합니다.',
    'reports_report_budget_pieCharts'                         => '이 차트를 통해 예산 또는 계정별 지출에 대한 전망을 얻을 수 있습니다.',
    'reports_report_budget_incomeAndExpensesChart'            => '이 차트는 예산별 지출을 보여줍니다.',

    // create transaction
    'transactions_create_switch_box'                          => '이 버튼으로 저장하려는 거래 유형을 빠르게 전환할 수 있습니다.',
    'transactions_create_ffInput_category'                    => '이 필드는 자유롭게 입력할 수 있습니다. 이전에 생성한 카테고리가 제안됩니다.',
    'transactions_create_withdrawal_ffInput_budget'           => '더 나은 재정 관리를 위해 출금을 예산에 연결하십시오.',
    'transactions_create_withdrawal_currency_dropdown_amount' => '다른 통화로 출금할 때 이 드롭다운을 사용하세요.',
    'transactions_create_deposit_currency_dropdown_amount'    => '다른 통화로 입금할 때 이 드롭다운을 사용하세요.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => '저금통을 선택하고 이 이체를 예금에 연결하십시오.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => '이 필드는 각 저금통에 얼마나 저축했는지를 보여줍니다.',
    'piggy-banks_index_button'                                => '이 진행률 표시줄 옆에는 각 저금통에서 돈을 추가하거나 제거하는 두 개의 버튼(+ 와 -)이 있습니다.',
    'piggy-banks_index_accountStatus'                         => '저금통이 하나 이상 있는 각 자산 계정의 상태는 이 표에 나열되어 있습니다.',

    // Ignore this comment

    // create piggy
    'piggy-banks_create_name'                                 => '목표가 무엇인가요? 새 소파, 카메라, 비상 자금인가요?',
    'piggy-banks_create_date'                                 => '저금통의 목표 날짜 또는 마감기한을 설정할 수 있습니다.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => '이 차트는 이 저금통의 이력을 보여줍니다.',
    'piggy-banks_show_piggyDetails'                           => '저금통에 대한 몇 가지 세부 정보',
    'piggy-banks_show_piggyEvents'                            => '추가 또는 제거된 항목 역시 여기에 나열됩니다.',

    // bill index
    'bills_index_rules'                                       => '여기에서 이 청구서가 적중했는지를 확인하는 규칙을 볼 수 있습니다.',
    'bills_index_paid_in_period'                              => '이 항목은 청구서가 마지막으로 지불된 시점을 나타냅니다.',
    'bills_index_expected_in_period'                          => '이 항목은 각 청구서에 대해 다음 청구서의 발생이 예상되는 시점을 표시합니다.',

    // show bill
    'bills_show_billInfo'                                     => '이 표는 이 청구서에 대한 일반적인 정보를 보여줍니다.',
    'bills_show_billButtons'                                  => '이 버튼을 사용하여 이전 거래를 다시 스캔하여 이 청구서와 일치하도록 합니다.',
    'bills_show_billChart'                                    => '이 차트는 이 청구서와 연결된 거래를 보여줍니다.',

    // create bill
    'bills_create_intro'                                      => '청구서를 사용하여 매 기간마다 납부해야 할 금액을 추적하세요. 집세, 보험료, 모기지 상환금과 같은 지출에 대해 생각해 보세요.',
    'bills_create_name'                                       => '"임대료"나 "건강 보험"과 같이 설명이 포함된 이름을 사용합니다.',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => '이 청구서의 최소 및 최대 금액을 선택합니다.',
    'bills_create_repeat_freq_holder'                         => '대부분의 청구서는 매월 반복되지만 여기에서 다른 주기를 설정할 수 있습니다.',
    'bills_create_skip_holder'                                => '청구서가 2주마다 반복되는 경우, 격주로 건너뛰려면 "건너뛰기" 항목을 "1"로 설정해야 합니다.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III를 사용하면 생성하거나 편집하는 모든 거래에 자동으로 적용되는 규칙을 관리할 수 있습니다.',
    'rules_index_new_rule_group'                              => '더 쉬운 관리를 위해 규칙을 그룹으로 결합할 수 있습니다.',
    'rules_index_new_rule'                                    => '원하는 만큼 규칙을 만듭니다.',
    'rules_index_prio_buttons'                                => '원하는 방식대로 주문하세요.',
    'rules_index_test_buttons'                                => '규칙을 테스트하거나 기존 거래에 적용할 수 있습니다.',
    'rules_index_rule-triggers'                               => '규칙은 드래그 앤 드롭으로 정렬 가능한 "트리거" 와 "작업"이 가집니다.',
    'rules_index_outro'                                       => '오른쪽 상단의 (?) 아이콘을 이용해 도움말 페이지를 확인하세요!',

    // create rule:
    'rules_create_mandatory'                                  => '설명이 포함된 제목을 선택하고 규칙이 실행될 시기를 설정합니다.',
    'rules_create_ruletriggerholder'                          => '원하는 만큼 트리거를 추가하되, 모든 트리거가 일치해야 액션이 실행된다는 점을 기억하세요.',
    'rules_create_test_rule_triggers'                         => '이 버튼을 사용하여 어떤 거래가 규칙과 일치하는지 확인합니다.',
    'rules_create_actions'                                    => '원하는 만큼 작업을 설정하세요.',

    // Ignore this comment

    // preferences
    'preferences_index_tabs'                                  => '이 탭에는 더 많은 옵션이 있습니다.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III는 여러 통화를 지원하며 이 페이지에서 변경할 수 있습니다.',
    'currencies_index_default'                                => 'Firefly III는 하나의 기본 통화를 가집니다.',
    'currencies_index_buttons'                                => '이 버튼들을 사용하여 기본 통화를 변경하거나 다른 통화를 활성화할 수 있습니다.',

    // create currency
    'currencies_create_code'                                  => '이 코드는 ISO를 준수하여야 합니다. (새로운 통화에 대해 구글 검색)',
];
// Ignore this comment
