<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Formuläret kan inte innehålla extra fält.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uppladdade filen var för stor. Försök ladda upp en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-elementet är inte giltigt. Försök att skicka formuläret igen.',
    'This value is not a valid HTML5 color.' => 'Värdet är inte en giltig HTML5-färg.',
    'Please enter a valid birthdate.' => 'Ange ett giltigt födelsedatum.',
    'The selected choice is invalid.' => 'Det valda alternativet är ogiltigt.',
    'The collection is invalid.' => 'Den här samlingen är ogiltig.',
    'Please select a valid color.' => 'Välj en giltig färg.',
    'Please select a valid country.' => 'Välj ett land.',
    'Please select a valid currency.' => 'Välj en valuta.',
    'Please choose a valid date interval.' => 'Välj ett giltigt datumintervall.',
    'Please enter a valid date and time.' => 'Ange ett giltigt datum och tid.',
    'Please enter a valid date.' => 'Ange ett giltigt datum.',
    'Please select a valid file.' => 'Välj en fil.',
    'The hidden field is invalid.' => 'Det dolda fältet är ogiltigt.',
    'Please enter an integer.' => 'Ange ett heltal.',
    'Please select a valid language.' => 'Välj språk.',
    'Please select a valid locale.' => 'Välj plats.',
    'Please enter a valid money amount.' => 'Ange en giltig summa pengar.',
    'Please enter a number.' => 'Ange en siffra.',
    'The password is invalid.' => 'Lösenordet är ogiltigt.',
    'Please enter a percentage value.' => 'Ange ett procentuellt värde.',
    'The values do not match.' => 'De angivna värdena stämmer inte överens.',
    'Please enter a valid time.' => 'Ange en giltig tid.',
    'Please select a valid timezone.' => 'Välj en tidszon.',
    'Please enter a valid URL.' => 'Ange en giltig URL.',
    'Please enter a valid search term.' => 'Ange ett giltigt sökbegrepp.',
    'Please provide a valid phone number.' => 'Ange ett giltigt telefonnummer.',
    'The checkbox has an invalid value.' => 'Kryssrutan har ett ogiltigt värde.',
    'Please enter a valid email address.' => 'Ange en giltig e-postadress.',
    'Please select a valid option.' => 'Välj ett alternativ.',
    'Please select a valid range.' => 'Välj ett intervall.',
    'Please enter a valid week.' => 'Ange en giltig vecka.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ett autentiseringsfel har inträffat.',
    'Authentication credentials could not be found.' => 'Uppgifterna för autentisering kunde inte hittas.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiseringen kunde inte genomföras på grund av systemfel.',
    'Invalid credentials.' => 'Felaktiga uppgifter.',
    'Cookie has already been used by someone else.' => 'Cookien har redan använts av någon annan.',
    'Not privileged to request the resource.' => 'Saknar rättigheter för resursen.',
    'Invalid CSRF token.' => 'Ogiltig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen leverantör för autentisering hittades för angiven autentiseringstoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session finns tillgänglig, antingen har den förfallit eller är cookies inte aktiverat.',
    'No token could be found.' => 'Ingen token kunde hittas.',
    'Username could not be found.' => 'Användarnamnet kunde inte hittas.',
    'Account has expired.' => 'Kontot har förfallit.',
    'Credentials have expired.' => 'Uppgifterna har förfallit.',
    'Account is disabled.' => 'Kontot är inaktiverat.',
    'Account is locked.' => 'Kontot är låst.',
    'Too many failed login attempts, please try again later.' => 'För många misslyckade inloggningsförsök, försök igen senare.',
    'Invalid or expired login link.' => 'Ogiltig eller utgången inloggningslänk.',
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
