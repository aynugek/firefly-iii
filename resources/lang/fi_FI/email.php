<?php

/**
 * email.php
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
    // common items
    'greeting'                                => 'Hei siellä,',
    'closing'                                 => 'Beep boop,',
    'signature'                               => 'Firefly III Postirobotti',
    'footer_ps'                               => 'P.S. Tämä viesti lähetettiin, koska sitä pyydettiin osoitteesta :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Testiviesti Firefly III applikaatioltasi',
    'admin_test_body'                         => 'Tämä on testiviesti Firefly III instanssiltasi. Se lähetettiin osoitteeseen :email.',

    // Ignore this comment

    // invite
    'invitation_created_subject'              => 'An invitation has been created',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'You\'ve been invited to create a Firefly III account.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Uusi kirjautuminen Firefly III:een',
    'slack_login_from_new_ip'                 => 'Uusi Firefly III kirjautuminen IP-osoitteesta :ip (:host)',
    'new_ip_body'                             => 'Firefly III havaitsi uuden kirjautumisen tilillesi tuntemattomasta IP-osoitteesta. Jos et ole koskaan kirjautunut alla olevasta IP-osoitteesta tai edellisestä kirjautumisesta on yli kuusi kuukautta, Firefly III varoittaa sinua.',
    'new_ip_warning'                          => 'Jos tunnistat tämän IP-osoitteen tai kirjautumisen, voit ohittaa tämän viestin. Jos et ole kirjautunut, tai jos sinulla ei ole aavistustakaan mistä tässä on kyse, tarkista salasanasi turvallisuus, vaihda se ja kirjaudu ulos kaikista muista istunnoista. Voit tehdä tämän profiilisivullasi. Tietenkin sinulla on jo 2FA käytössä, eikö vain? Pysy turvassa!',
    'ip_address'                              => 'IP-osoite',
    'host_name'                               => 'Palvelin',
    'date_time'                               => 'Päivämäärä + aika',

    // access token created
    'access_token_created_subject'            => 'Uusi käyttöoikeustunnus luotiin',
    'access_token_created_body'               => 'Joku (toivottavasti sinä) loi juuri uuden Firefly III käyttöoikeustunnuksen käyttäjätilillesi.',
    'access_token_created_explanation'        => 'Tämän tunnisteen avulla heillä on pääsy **kaikkeen** kirjanpitoosi Firefly III -rajapinnan kautta.',
    'access_token_created_revoke'             => 'Jos tämä et ollut sinä, peruuta tämä tunnus mahdollisimman pian osoitteessa :url',

    // registered
    'registered_subject'                      => 'Tervetuloa Firefly III:een!',
    'registered_subject_admin'                => 'Uusi käyttäjä on rekisteröitynyt',
    'admin_new_user_registered'               => 'Uusi käyttäjä on rekisteröitynyt. Käyttäjä **:email** sai käyttäjätunnuksen #:id.',
    'registered_welcome'                      => 'Tervetuloa [Firefly III](:address). Rekisteröitymisesi onnistui, ja tämä sähköposti vahvistaa sen. Siistiä!',
    'registered_pw'                           => 'Jos olet jo unohtanut salasanasi, nollaa se käyttäen [salasanan nollaustyökalua](:address/password/reset).',
    'registered_help'                         => 'Jokaisen sivun oikeassa yläkulmassa on apukuvake. Jos tarvitset apua, napsauta sitä!',
    'registered_doc_html'                     => 'Jos et vielä ole ehtinyt, käy lukemassa [grand theory](https://docs.firefly-iii.org/about-firefly-iiii/personal-finances).',
    'registered_doc_text'                     => 'Jos et ole vielä ole lukenut, lue myös ensimmäisen käytön opas ja täydellinen kuvaus.',
    'registered_closing'                      => 'Nauti!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Salasanan nollaus:',
    'registered_doc_link'                     => 'Dokumentaatio:',

    // Ignore this comment

    // new version
    'new_version_email_subject'               => 'Uusi Firefly III versio on saatavilla',

    // email change
    'email_change_subject'                    => 'Firefly III sähköpostiosoitteesi on muuttunut',
    'email_change_body_to_new'                => 'Joko sinä, tai joku jolla on pääsy Firefly III -tilillesi, on vaihtanut sähköpostiosoitteesi. Jos et odottanut tätä viestiä, ohita ja poista se.',
    'email_change_body_to_old'                => 'Joko Sinä tai joku jolla on pääsy Firefly III -tilillesi on muuttanut sähköpostiosoitettasi. Jos tämä tuli yllätyksenä, sinun **täytyy** seurata alla olevaa "kumoa"-linkkiä suojataksesi tilisi!',
    'email_change_ignore'                     => 'Jos teit itse tämän muutoksen, voit turvallisesti ohittaa tämän viestin.',
    'email_change_old'                        => 'Vanha sähköpostiosoite oli: :email',
    'email_change_old_strong'                 => 'Vanha sähköpostiosoite oli: **:email**',
    'email_change_new'                        => 'Uusi sähköpostiosoite on: :email',
    'email_change_new_strong'                 => 'Uusi sähköpostiosoite on: **:email**',
    'email_change_instructions'               => 'Et voi käyttää Firefly III:a ennen kuin vahvistat tämän muutoksen. Ole hyvä ja seuraa alla olevaa linkkiä.',
    'email_change_undo_link'                  => 'Kumoa muutos seuraamalla linkkiä:',

    // OAuth token created
    'oauth_created_subject'                   => 'Uusi OAuth-asiakas on luotu',
    'oauth_created_body'                      => 'Joku (toivottavasti sinä) loi juuri uuden Firefly III API OAuth asiakkaan käyttäjätilillesi. Sen nimi on ":name" ja sen callback URL on `:url`.',
    'oauth_created_explanation'               => 'Tämän ohjelman avulla heillä on pääsy **kaikkeen** kirjanpitoosi Firefly III -rajapinnan kautta.',
    'oauth_created_undo'                      => 'Jos tämä et ollut sinä, peruuta tämä asiakas mahdollisimman pian osoitteessa `:url`',

    // reset password
    'reset_pw_subject'                        => 'Salasanasi nollauspyyntö',
    'reset_pw_instructions'                   => 'Joku yritti nollata salasanasi. Jos olit sinä, seuraa alla olevaa linkkiä tehdäksesi sen.',
    'reset_pw_warning'                        => '**Varmista**, että linkki todella menee siihen Firefly III:een, johon odotat sen menevän!',

    // error
    'error_subject'                           => 'Firefly III:ssa tapahtui virhe',
    'error_intro'                             => 'Firefly III v:version tapahtui virhe: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Virhe oli tyyppiä ":class".',
    'error_timestamp'                         => 'Virhe tapahtui kello: :time.',
    'error_location'                          => 'Tämä virhe tapahtui tiedostossa "<span style="font-family: monospace;">:file</span>" rivillä :line koodilla :code.',
    'error_user'                              => 'Virhe tpahtui käyttäjällä #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Virheen tapahtuessa käyttäjä ei ollut kirjautuneena tai käyttäjää ei havaittu.',
    'error_ip'                                => 'Tähän virheeseen liittyvä IP-osoite on: :ip',
    'error_url'                               => 'URL on: :url',
    'error_user_agent'                        => 'Käyttäjä-agentti: :userAgent',
    'error_stacktrace'                        => 'Täydellinen stack trace on alla. Jos tämä on bugi Firefly III:ssa, voit lähettää tämän viestin osoitteeseen <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-ii. rg</a>. Tämä voi auttaa korjaamaan juuri kohtaamasi virheen.',
    'error_github_html'                       => 'Jos haluat, voit myös avata uuden tiketin <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubissa</a>.',
    'error_github_text'                       => 'Jos haluat, voit myös avata uuden tiketin osoitteessa https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Täydellinen stack trace:',
    'error_headers'                           => 'Seuraavat otsikot voivat myös olla merkityksellisiä:',

    // Ignore this comment

    // report new journals
    'new_journals_subject'                    => 'Firefly III on luonut uuden tapahtuman|Firefly III on luonut :count uutta tapahtumaa',
    'new_journals_header'                     => 'Firefly III on luonut tapahtuman sinulle. Löydät sen Firefly III -asennuksestasi:|Firefly III on luonut sinulle :count tapahtumaa. Löydät ne Firefly III -asennuksestasi:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Laskusi ":name" on määrä päättyä :diff päivän kuluttua',
    'bill_warning_subject_now_end_date'       => 'Laskusi ":name" on määrä päättyä TÄNÄÄN',
    'bill_warning_subject_extension_date'     => 'Laskusi ":name" toistokertoja on määrä joko jatkaa tai peruuttaa :diff päivän kuluttua',
    'bill_warning_subject_now_extension_date' => 'Laskusi ":name" toistokertoja on määrä joko jatkaa tai peruuttaa TÄNÄÄN',
    'bill_warning_end_date'                   => 'Laskusi **":name"** on määrä päättyä :date. Tähän hetkeen on aikaa noin **:diff päivää**.',
    'bill_warning_extension_date'             => 'Laskusi **":name"** toistokertoja on määrä joko jatkaa tai peruuttaa :date. Tähän hetkeen on aikaa noin **:diff päivää**.',
    'bill_warning_end_date_zero'              => 'Laskusi **":name"** on määrä päättyä :date, eli **TÄNÄÄN!**',
    'bill_warning_extension_date_zero'        => 'Laskusi **":name"** toistokertoja on määrä joko jatkaa tai peruuttaa :date. Eli **TÄNÄÄN!**',
    'bill_warning_please_action'              => 'Suorita asianmukaiset toimet, ole hyvä.',

];
// Ignore this comment
