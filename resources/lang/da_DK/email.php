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
    'greeting'                                => 'Hej,',
    'closing'                                 => 'Beep bop,',
    'signature'                               => 'Firefly III Mail Robotten',
    'footer_ps'                               => 'PS: Denne besked blev sendt, fordi en anmodning fra IP :ipAddress udløste den.',

    // admin test
    'admin_test_subject'                      => 'En testbesked fra din Firefly III-installation',
    'admin_test_body'                         => 'Dette er en test besked fra din Firefly III installation. Den blev sendt til :email.',

    // Ignore this comment

    // invite
    'invitation_created_subject'              => 'En invitation er blevet oprettet',
    'invitation_created_body'                 => 'Admin bruger ":email" oprettede en brugerinvitation, som kan bruges af hvem, der står bag e-mail-adressen ":invitee". Invitationen vil være gyldig i 48 timer.',
    'invite_user_subject'                     => 'Du er blevet inviteret til at oprette en Firefly III-konto.',
    'invitation_introduction'                 => 'Du er blevet inviteret til at oprette en Firefly III-konto på **:host**. Firefly III er en personlig, self-hosted, privat personlig finanschef. Alle de seje børn bruger det.',
    'invitation_invited_by'                   => 'Du er blevet inviteret af ":admin" og denne invitation blev sendt til ":invitee". Det er dig, ikke?',
    'invitation_url'                          => 'Invitationen er gyldig i 48 timer og kan indløses ved at surfe på [Firefly III](:url). God fornøjelse!',

    // new IP
    'login_from_new_ip'                       => 'Nyt login på Firefly III',
    'slack_login_from_new_ip'                 => 'Nyt Firefly III-login fra IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III har registreret et nyt login på din konto fra en ukendt IP-adresse. Hvis du ikke tidligere har været logget ind fra IP-adressen herunder, eller dit sidste login herfra er sket for mere end 6 måneder siden - vil Firefly III advare dig.',
    'new_ip_warning'                          => 'Hvis du kan genkende IP-adressen eller login-forsøget, kan du trykt ignorere denne besked. Hvis du ikke har forsøgt at logge ind - eller ikke ved hvad det her handler om bør du verificere din password sikkerhed. Skift password og log ud af alle sessioner. For at gøre dette kan du gå til din profil side. Du har selvfølgeligt allerede 2FA slået til, ikke? Stay safe!',
    'ip_address'                              => 'IP-adresse',
    'host_name'                               => 'Host',
    'date_time'                               => 'Dato/Tid',

    // access token created
    'access_token_created_subject'            => 'Et nyt adgangstoken blev oprettet',
    'access_token_created_body'               => 'Nogen (forhåbentlig dig) har netop oprettet en ny Firefly III API Access Token til din brugerkonto.',
    'access_token_created_explanation'        => 'Med denne klient kan de gennem Firefly II APIen få adgang til **alle** dine regnskaber og financielle optegnelser.',
    'access_token_created_revoke'             => 'Hvis det ikke var dig så venligst annuller denne token så hurtigt som muligt på :url',

    // registered
    'registered_subject'                      => 'Velkommen til Firefly III!',
    'registered_subject_admin'                => 'En ny bruger er registreret',
    'admin_new_user_registered'               => 'En ny bruger er registreret. Bruger **:email** fik bruger-ID #:id.',
    'registered_welcome'                      => 'Velkomme til [Firefly III](:address). Dine registrering er gennemført, og denne email tjener til at bekræftige dette. :-)',
    'registered_pw'                           => 'Hvis du allerede har glemt din adgangskode, kan du nulstille den ved at benytte [adgangskodenulstillingsværktøjet](:address/password/reset).',
    'registered_help'                         => 'Der er et hjælpe-ikon i øverste højre hjørne af hver side. Hvis du har brug for hjælp, kan du klikke på det!',
    'registered_closing'                      => 'God fornøjelse!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Nulstilling af adgangskode:',
    'registered_doc_link'                     => 'Dokumentation:',

    // Ignore this comment

    // new version
    'new_version_email_subject'               => 'En ny Firefly III-version er tilgængelig',

    // email change
    'email_change_subject'                    => 'Din Firefly III email adresse er ændret',
    'email_change_body_to_new'                => 'Du eller nogen med adgang til din Firefly III-konto har ændret din e-mailadresse. Hvis du ikke forventede denne besked, bedes du ignorere og slette den.',
    'email_change_body_to_old'                => 'Du, eller nogen med adgang til din Firefly III-konto, har ændret din e-mailadresse. Hvis ikke dette er forventet, **skal** du klikke på nedenstående "fortryd"-link for at beskytte din konto!',
    'email_change_ignore'                     => 'Hvis du har igangsat denne ændring, kan du roligt ignorere denne besked.',
    'email_change_old'                        => 'Den forrige email adresse var: :email',
    'email_change_old_strong'                 => 'Den forrige email adresse var: **:email**',
    'email_change_new'                        => 'Den nye email adresse er: :email',
    'email_change_new_strong'                 => 'Den nye email adresse er: **:email**',
    'email_change_instructions'               => 'Du kan ikke bruge Firefly III, før du bekræfter denne ændring. Følg linket nedenfor for at gøre det.',
    'email_change_undo_link'                  => 'For at fortryde ændringen, følg dette link:',

    // OAuth token created
    'oauth_created_subject'                   => 'En ny OAuth klient er oprettet',
    'oauth_created_body'                      => 'Nogen (forhåbentligt dig) har netop oprettet en ny Firefly III API OAuth klient til din brugerkonto. Den er mærket ":name" og har callback URL`:url`.',
    'oauth_created_explanation'               => 'Med denne klient kan de gennem Firefly II APIen få adgang til **alle** dine regnskaber og financielle optegnelser.',
    'oauth_created_undo'                      => 'Hvis ikke det var dig, bedes du annullere denne klient så hurtigt som muligt på `:url`',

    // reset password
    'reset_pw_subject'                        => 'Anmodning om nulstilling af din adgangskode',
    'reset_pw_instructions'                   => 'Nogen forsøgte at nulstille din adgangskode. Hvis det var dig, bedes du følge linket nedenfor for at gøre det.',
    'reset_pw_warning'                        => '**VENLIGST** bekræft, at linket faktisk fører til den Firefly III du forventer, at det skal føre til!',

    // error
    'error_subject'                           => 'Der er opstået en fejl i Firefly III',
    'error_intro'                             => 'Der opstod en fejl i Firefly III v:version: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Fejlen var af typen ":class".',
    'error_timestamp'                         => 'Fejlen opstod ved: :time.',
    'error_location'                          => 'Denne fejl opstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med koden :code.',
    'error_user'                              => 'Fejlen opstod under brugeren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Der var ingen bruger logget ind under denne fejl, eller ingen bruger blev fundet.',
    'error_ip'                                => 'IP-adressen relateret til denne fejl er: :ip',
    'error_url'                               => 'URL er: :url',
    'error_user_agent'                        => 'Brugeragent: :userAgent',
    'error_stacktrace'                        => 'Den fulde stacktrace er nedenfor. Hvis du tror, at dette er en fejl i Firefly III, kan du videresende denne meddelelse til <a href="mailto:james@firefly-iii.org?subject=BUG!">james@ firefly-iii. rg</a>. Dette kan være behjælpeligt med at rette den fejl, du lige er stødt på.',
    'error_github_html'                       => 'Hvis du foretrækker det, kan du også rapportere et nyt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Hvis du foretrækker det, kan du også rapportere et nyt problem på https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Den fulde stacktrace er nedenfor:',
    'error_headers'                           => 'Følgende overskrifter kan også være relevante:',
    'error_post'                              => 'Dette blev indsendt af brugeren:',

    // Ignore this comment

    // report new journals
    'new_journals_subject'                    => 'Firefly III har oprettet en ny transaktion|Firefly III har oprettet :count nye transaktioner',
    'new_journals_header'                     => 'Firefly III har oprettet en transaktion for dig. Du kan finde den i din Firefly III installation:|Firefly III har oprettet :count transaktioner for dig. Du kan finde dem i din Firefly III installation:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Din regning ":name" udløber om :diff dage',
    'bill_warning_subject_now_end_date'       => 'Din regning ":name" skal afsluttes I DAG',
    'bill_warning_subject_extension_date'     => 'Din regning ":name" er sat til blive udskudt eller annulleret om :diff dage',
    'bill_warning_subject_now_extension_date' => 'Din regning ":name" er sat til at forlænges eller annulleres I DAG',
    'bill_warning_end_date'                   => 'Regningen **":name"** er sat til at stoppe den :date. Denne dato vil blive overskredet **:diff dage**.',
    'bill_warning_extension_date'             => 'Regningen **":name"** er sat til at udskudt eller annuleret den :date. Denne dato vil blive overskredet om**:diff dage**.',
    'bill_warning_end_date_zero'              => 'Regningen **":name"** er sat til at stoppe den :date. Denne dato vil blive overskredet **idag!**',
    'bill_warning_extension_date_zero'        => 'Regningen **":name"** er sat til at blive udskudt eller annuleret om :date. Denne dato vil blive overskrevet **I DAG!**',
    'bill_warning_please_action'              => 'Udfør venligt den krævede handling.',
];
// Ignore this comment
