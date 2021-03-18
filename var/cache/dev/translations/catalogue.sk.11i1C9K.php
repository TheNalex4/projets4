<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sk', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Polia by nemali obsahovať ďalšie prvky.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Odoslaný súbor je príliš veľký. Prosím odošlite súbor s menšou veľkosťou.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Prosím skúste znovu odoslať formulár.',
    'This value is not a valid HTML5 color.' => 'Táto hodnota nie je platná HTML5 farba.',
    'Please enter a valid birthdate.' => 'Prosím zadajte platný dátum narodenia.',
    'The selected choice is invalid.' => 'Vybraná možnosť je neplatná.',
    'The collection is invalid.' => 'Kolekcia je neplatná.',
    'Please select a valid color.' => 'Prosím vyberte platnú farbu.',
    'Please select a valid country.' => 'Prosím vyberte platnú krajinu.',
    'Please select a valid currency.' => 'Prosím vyberte platnú menu.',
    'Please choose a valid date interval.' => 'Prosím vyberte platný rozsah dát.',
    'Please enter a valid date and time.' => 'Prosím zadajte platný dátum a čas.',
    'Please enter a valid date.' => 'Prosím zadajte platný dátum.',
    'Please select a valid file.' => 'Prosím vyberte platný súbor.',
    'The hidden field is invalid.' => 'Skryté pole je neplatné.',
    'Please enter an integer.' => 'Prosím zadajte celé číslo.',
    'Please select a valid language.' => 'Prosím vyberte platný jazyk.',
    'Please select a valid locale.' => 'Prosím vyberte platné miestne nastavenia.',
    'Please enter a valid money amount.' => 'Prosím zadajte platnú čiastku.',
    'Please enter a number.' => 'Prosím zadajte číslo.',
    'The password is invalid.' => 'Heslo je neprávne.',
    'Please enter a percentage value.' => 'Prosím zadajte percentuálnu hodnotu.',
    'The values do not match.' => 'Hodnoty nie sú zhodné.',
    'Please enter a valid time.' => 'Prosím zadajte platný čas.',
    'Please select a valid timezone.' => 'Prosím vyberte platné časové pásmo.',
    'Please enter a valid URL.' => 'Prosím zadajte platnú URL.',
    'Please enter a valid search term.' => 'Prosím zadajte platný vyhľadávací výraz.',
    'Please provide a valid phone number.' => 'Prosím zadajte platné telefónne číslo.',
    'The checkbox has an invalid value.' => 'Zaškrtávacie políčko má neplatnú hodnotu.',
    'Please enter a valid email address.' => 'Prosím zadajte platnú emailovú adresu.',
    'Please select a valid option.' => 'Prosím vyberte platnú možnosť.',
    'Please select a valid range.' => 'Prosím vyberte platný rozsah.',
    'Please enter a valid week.' => 'Prosím zadajte platný týždeň.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Pri overovaní došlo k chybe.',
    'Authentication credentials could not be found.' => 'Overovacie údaje neboli nájdené.',
    'Authentication request could not be processed due to a system problem.' => 'Požiadavok na overenie nemohol byť spracovaný kvôli systémovej chybe.',
    'Invalid credentials.' => 'Neplatné prihlasovacie údaje.',
    'Cookie has already been used by someone else.' => 'Cookie už bolo použité niekým iným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnenie pristupovať k prostriedku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovateľ pre overovací token nebol nájdený.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session nie je k dispozíci, vypršala jej platnosť, alebo sú zakázané cookies.',
    'No token could be found.' => 'Token nebol nájdený.',
    'Username could not be found.' => 'Prihlasovacie meno nebolo nájdené.',
    'Account has expired.' => 'Platnosť účtu skončila.',
    'Credentials have expired.' => 'Platnosť prihlasovacích údajov skončila.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
    'Too many failed login attempts, please try again later.' => 'Príliš mnoho neúspešných pokusov o prihlásenie. Skúste to prosím znovu neskôr.',
    'Invalid or expired login link.' => 'Neplatný alebo expirovaný odkaz na prihlásenie.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
    'Bad code value' => 'Code does not match',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renew',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
