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
    'missing_where'                   => 'Taulukosta puuttuu "where"-komento',
    'missing_update'                  => 'Taulukosta puuttuu "update"-komento',
    'invalid_where_key'               => 'JSON sisältää virheellisen avaimen "where"-komentoa varten',
    'invalid_update_key'              => 'JSON sisältää virheellisen avaimen "update"-komentoa varten',
    'invalid_query_data'              => 'Kyselysi kentässä %s:%s on virheellisiä tietoja.',
    'invalid_query_account_type'      => 'Kyselysi sisältää eri tyyppisiä tilejä, joka ei ole sallittua.',
    'invalid_query_currency'          => 'Kyselysi sisältää tilejä, joilla on erilaiset valuutta-asetukset, joka ei ole sallittua.',
    'iban'                            => 'IBAN ei ole oikeassa muodossa.',
    'zero_or_more'                    => 'Arvo ei voi olla negatiivinen.',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Arvon täytyy olla päivämäärä tai aika-arvo (ISO 8601).',
    'source_equals_destination'       => 'Lähdetili on sama kuin kohdetili - ja sehän ei käy.',
    'unique_account_number_for_user'  => 'Tämä tilinumero näyttäisi olevan jo käytössä.',
    'unique_iban_for_user'            => 'Tämä IBAN näyttäisi olevan jo käytössä.',
    'reconciled_forbidden_field'      => 'This transaction is already reconciled, you cannot change the ":field"',
    'deleted_user'                    => 'Turvallisuussyistä et pysty käyttämään tätä sähköpostiosoitetta rekisteröitymiseen.',
    'rule_trigger_value'              => 'Arvo ei kelpaa valitulle ehdolle.',
    'rule_action_value'               => 'Arvo ei kelpaa valitulle toiminnolle.',
    'file_already_attached'           => 'Kohteella on jo liite nimeltä ":name".',
    'file_attached'                   => 'Liitteen ":name" lataus onnistui.',
    'must_exist'                      => 'Tunnistetta kentässä :attribute ei löydy tietokannasta.',
    'all_accounts_equal'              => 'Kaikkien tässä kentässä olevien tilien täytyy olla samoja.',
    'group_title_mandatory'           => 'Kun tapahtumia on enemmän kuin yksi, kokonaisuudelle tarvitaan oma otsikko.',
    'transaction_types_equal'         => 'Kaikkien jaettujen osien täytyy olla samaa tyyppiä.',
    'invalid_transaction_type'        => 'Virheellinen tapahtuman tyyppi.',
    'invalid_selection'               => 'Valintasi on virheellinen.',
    'belongs_user'                    => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'      => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'at_least_one_transaction'        => 'Tarvitaan vähintään yksi tapahtuma.',
    'recurring_transaction_id'        => 'Need at least one transaction.',
    'need_id_to_match'                => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => 'Tarvitaan vähintään yksi toisto.',
    'require_repeat_until'            => 'Tarvitaan joko toistojen lukumäärä tai viimeisen toiston päivämäärä (toista kunnes). Ei molempia.',
    'require_currency_info'           => 'Ilman valuuttatietoa tämän kentän sisältö on virheellinen.',
    'not_transfer_account'            => 'Tätä tiliä ei voi käyttää siirroissa.',
    'require_currency_amount'         => 'Tämän kentän sisältö on virheellinen ilman ulkomaanvaluuttatietoa.',
    'require_foreign_currency'        => 'This field requires a number',
    'require_foreign_dest'            => 'This field value must match the currency of the destination account.',
    'require_foreign_src'             => 'This field value must match the currency of the source account.',
    'equal_description'               => 'Tapahtuman kuvaus ei saisi olla sama kuin yleiskuvaus.',
    'file_invalid_mime'               => 'Lähetettävän tiedoston ":name" tyyppi ei voi olla ":mime".',
    'file_too_large'                  => 'Tiedoston ":name" koko on liian suuri.',
    'belongs_to_user'                 => 'Arvoa :attribute ei tunnisteta.',
    'accepted'                        => 'Määritteen :attribute täytyy olla hyväksytty.',
    'bic'                             => 'Tämä ei ole kelvollinen BIC.',
    'at_least_one_trigger'            => 'Säännöllä täytyy olla ainakin yksi ehto.',
    'at_least_one_active_trigger'     => 'Säännöllä on oltava vähintään yksi aktiivinen ehto.',
    'at_least_one_action'             => 'Säännöllä täytyy olla vähintään yksi tapahtuma.',
    'at_least_one_active_action'      => 'Säännöllä on oltava vähintään yksi aktiivinen toimenpide.',
    'base64'                          => 'Tämä ei ole kelvollinen base64-koodattu data.',
    'model_id_invalid'                => 'Annettu tunniste ei kelpaa tämän mallin kanssa.',
    'less'                            => 'Määritteen :attribute täytyy olla pienempi kuin 10,000,000',
    'active_url'                      => ':attribute ei ole verkko-osoite.',
    'after'                           => 'Määritteen :attribute täytyy olla :date jälkeen oleva päivämäärä.',
    'date_after'                      => 'Aloituspäivän on oltava ennen päättymispäivää.',
    'alpha'                           => ':attribute saa sisältää ainoastaan kirjaimia.',
    'alpha_dash'                      => ':attribute saa sisältää ainoastaan kirjaimia, numeroita ja viivoja.',
    'alpha_num'                       => ':attribute saa sisältää ainoastaan kirjaimia ja numeroita.',
    'array'                           => ':attribute täytyy olla taulukko.',
    'unique_for_user'                 => 'Määritteelle :attribute on jo annettu arvo.',
    'before'                          => 'Määritteen :attribute täytyy olla päivämäärä ennen päivää :date.',
    'unique_object_for_user'          => 'Tämä nimi on jo käytössä.',
    'unique_account_for_user'         => 'Tämän niminen tili on jo käytössä.',

    // Ignore this comment

    'between.numeric'                 => 'Kentän :attribute arvon täytyy olla välillä :min ja :max.',
    'between.file'                    => 'Tiedoston :attribute koon täytyy olla välillä :min ja :max kilotavua.',
    'between.string'                  => 'Määritteen :attribute merkkijonon pituuden täytyy olla välillä :min ja :max merkkiä.',
    'between.array'                   => 'Taulukon :attribute alkioiden lukumäärän täytyy olla välillä :min ja :max.',
    'boolean'                         => 'Kentän :attribute arvon tulee olla tosi tai epätosi.',
    'confirmed'                       => 'Kentän :attribute vahvistus ei täsmää.',
    'date'                            => 'Määrite :attribute ei ole kelvollinen päivämäärä.',
    'date_format'                     => 'Kentän :attribute arvo ei vastaa muotoa :format.',
    'different'                       => ':attribute ja :other tulee olla erilaisia.',
    'digits'                          => ':attribute tulee olla :digits numeroa pitkä.',
    'digits_between'                  => 'Kentän :attribute pituuden tulee olla :min - :max numeroa.',
    'email'                           => ':attribute on oltava kelvollinen sähköpostiosoite.',
    'filled'                          => 'Määritekenttä :attribute on pakollinen.',
    'exists'                          => 'Valittu :attribute on virheellinen.',
    'image'                           => ':attribute on oltava kuva.',
    'in'                              => 'Valittu :attribute on virheellinen.',
    'integer'                         => 'Kentän :attribute arvon tulee olla numero.',
    'ip'                              => ':attribute on oltava kelvollinen IP-osoite.',
    'json'                            => 'Määritteen :attribute arvon on oltava kelvollinen JSON merkkijono.',
    'max.numeric'                     => ':attribute ei saa olla suurempi kuin :max.',
    'max.file'                        => ':attribute ei saa olla suurempi kuin :max kilotavua.',
    'max.string'                      => ':attribute ei saa olla suurempi kuin :max merkkiä.',
    'max.array'                       => 'Määritteellä :attribute saa olla enintään :max alkiota.',
    'mimes'                           => ':attribute tulee olla tiedosto jonka tyyppi on: :values.',
    'min.numeric'                     => 'Kentän :attribute arvon tulee olla vähintään :min.',
    'lte.numeric'                     => 'Määritteen :attribute arvo saa olla enintään :value.',
    'min.file'                        => 'Määritteen :attribute koon täytyy olla vähintään :min kilotavua.',
    'min.string'                      => 'Määritteen :attribute on oltava vähintään :min merkkiä.',
    'min.array'                       => 'Kentän :attribute tulee sisältää vähintään :min arvoa.',
    'not_in'                          => 'Valittu :attribute on virheellinen.',
    'numeric'                         => 'Kentän :attribute arvon tulee olla numero.',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => 'Alkuperäisen summan täytyy olla numeerinen.',
    'numeric_destination'             => 'Kohdesumman täytyy olla numeerinen.',
    'numeric_source'                  => 'Lähdesumman täytyy olla numeerinen.',
    'regex'                           => 'Määritteen :attribute muoto on virheellinen.',
    'required'                        => 'Kenttä :attribute on pakollinen.',
    'required_if'                     => 'Kenttä :attribute on pakollinen kun :other on :value.',
    'required_unless'                 => 'Kenttä :attribute vaaditaan jos :other ei sisälly arvoihin :values.',
    'required_with'                   => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_with_all'               => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_without'                => 'Kenttä :attribute on pakollinen jos arvoa :values ei ole annettu.',
    'required_without_all'            => 'Kenttä :attribute on pakollinen jos mitään arvoista :values ei ole annettu.',
    'same'                            => 'Kenttien :attribute ja :other on täsmättävä.',
    'size.numeric'                    => 'Määritteen :attribute koon on oltava :size.',
    'amount_min_over_max'             => 'Vähimmäissumma ei voi olla suurempi kuin enimmäissumma.',
    'size.file'                       => ':attribute koon tulee olla :size kilotavua.',
    'size.string'                     => ':attribute pituuden tulee olla :size merkkiä.',
    'size.array'                      => 'Kentän :attribute tulee sisältää :size arvoa.',
    'unique'                          => 'Kentän :attribute arvo ei ole uniikki.',
    'string'                          => 'Määritteen :attribute on oltava merkkijono.',
    'url'                             => 'Kentän :attribute muotoilu on virheellinen.',
    'timezone'                        => 'Kentän :attribute täytyy olla aikavyöhyke.',
    '2fa_code'                        => ':attribute-kenttä on virheellinen.',
    'dimensions'                      => 'Kentän :attribute kuvalla on virheelliset mitat.',
    'distinct'                        => 'Kentän :attribute arvo ei ole uniikki.',
    'file'                            => 'Kentän :attribute arvon tulee olla tiedosto.',
    'in_array'                        => 'Kentän :attribute arvo ei sisälly kentän :other arvoon.',
    'present'                         => 'Kenttä :attribute vaaditaan.',
    'amount_zero'                     => 'Summa yhteensä ei voi olla nolla.',
    'current_target_amount'           => 'Nykyisen summan täytyy olla tavoitesummaa pienempi.',
    'unique_piggy_bank_for_user'      => 'Säästöpossu tarvitsee yksilöllisen nimen.',
    'unique_object_group'             => 'Ryhmän nimen täytyy olla yksilöllinen',
    'starts_with'                     => 'Arvon on alettava :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Molempien tilien on oltava samaa tyyppiä',
    'same_account_currency'           => 'Molemmilla tileillä on oltava sama valuuttaasetus',

    // Ignore this comment

    'secure_password'                 => 'Tämä ei ole turvallinen salasana. Yritäpä uudestaan. Lisätietoja löydät osoitteesta https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'       => 'Virheellinen toiston tyyppi toistuville tapahtumille.',
    'valid_recurrence_rep_moment'     => 'Virheellinen arvo tämän tyyppiselle toistolle.',
    'invalid_account_info'            => 'Virheellinen tilitieto.',
    'attributes'                      => [
        'email'                   => 'sähköpostiosoite',
        'description'             => 'kuvaus',
        'amount'                  => 'summa',
        'transactions.*.amount'   => 'tapahtuman summa',
        'name'                    => 'nimi',
        'piggy_bank_id'           => 'säästöpossun tunniste',
        'targetamount'            => 'tavoitesumma',
        'opening_balance_date'    => 'avaussaldon päivämäärä',
        'opening_balance'         => 'avaussaldo',
        'match'                   => 'osuma',
        'amount_min'              => 'vähimmäissumma',
        'amount_max'              => 'enimmäissumma',
        'title'                   => 'otsikko',
        'tag'                     => 'tägi',
        'transaction_description' => 'tapahtuman kuvaus',
        'rule-action-value.1'     => 'säännön toiminnon arvo #1',
        'rule-action-value.2'     => 'säännön toiminnon arvo #2',
        'rule-action-value.3'     => 'säännön toiminnon arvo #3',
        'rule-action-value.4'     => 'säännön toiminnon arvo #4',
        'rule-action-value.5'     => 'säännön toiminnon arvo #5',
        'rule-action.1'           => 'säännön toiminto #1',
        'rule-action.2'           => 'säännön toiminto #2',
        'rule-action.3'           => 'säännön toiminto #3',
        'rule-action.4'           => 'säännön toiminto #4',
        'rule-action.5'           => 'säännön toiminto #5',
        'rule-trigger-value.1'    => 'säännön ehdon arvo #1',
        'rule-trigger-value.2'    => 'säännön ehdon arvo #2',
        'rule-trigger-value.3'    => 'säännön ehdon arvo #3',
        'rule-trigger-value.4'    => 'säännön ehdon arvo #4',
        'rule-trigger-value.5'    => 'säännön ehdon arvo #5',
        'rule-trigger.1'          => 'säännön ehto #1',
        'rule-trigger.2'          => 'säännön ehto #2',
        'rule-trigger.3'          => 'säännön ehto #3',
        'rule-trigger.4'          => 'säännön ehto #4',
        'rule-trigger.5'          => 'säännön ehto #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Tarvitset kelvollisen lähdetilin tunnuksen ja/tai kelvollisen lähdetilin nimen jatkaaksesi.',
    'withdrawal_source_bad_data'      => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'       => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'        => 'Kelvollista kohdetiliä ei löytynyt tunnuksella ":id" tai nimellä ":name".',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => 'Tarvitset kelvollisen lähdetilin tunnuksen ja/tai kelvollisen lähdetilin nimen jatkaaksesi.',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => 'Kelvollista kohdetiliä ei löytynyt tunnuksella ":id" tai nimellä ":name".',
    'deposit_dest_wrong_type'         => 'Syötetty kohdetili ei ole oikean tyyppinen.',

    // Ignore this comment

    'transfer_source_need_data'       => 'Tarvitset kelvollisen lähdetilin tunnuksen ja/tai kelvollisen lähdetilin nimen jatkaaksesi.',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => 'Kelvollista kohdetiliä ei löytynyt tunnuksella ":id" tai nimellä ":name".',
    'need_id_in_edit'                 => 'Kaikilla jaetuilla tapahtumilla täytyy olla transaction_journal_id (joko voimassaoleva tunniste tai 0).',

    'ob_source_need_data'             => 'Tarvitset kelvollisen lähdetilin tunnuksen ja/tai kelvollisen lähdetilin nimen jatkaaksesi.',
    'lc_source_need_data'             => 'Tarvitaan kelvollinen lähdetilin tunniste.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => 'Kelvollista kohdetiliä ei löytynyt tunnuksella ":id" tai nimellä ":name".',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'Et voi käyttää tätä tiliä lähdetilinä.',
    'generic_invalid_destination'     => 'Et voi käyttää tätä tiliä kohdetilinä.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => 'Määritteen :attribute arvon täytyy olla vähintään :value.',
    'gt.numeric'                      => ':attribute tulee olla suurempi kuin :value.',
    'gte.file'                        => 'Määritteen :attribute koon täytyy olla vähintään :value kilotavua.',
    'gte.string'                      => 'Määritteen :attribute pituus täytyy olla vähintään :value merkkiä.',
    'gte.array'                       => 'Määritteellä :attribute tulee olla vähintään :value alkiota.',

    'amount_required_for_auto_budget' => 'Summa on pakollinen.',
    'auto_budget_amount_positive'     => 'Summan on oltava enemmän nollaa suurempi.',

    'auto_budget_period_mandatory'    => 'Automaattisen budjetin jakso on pakollinen kenttä.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

// Ignore this comment
