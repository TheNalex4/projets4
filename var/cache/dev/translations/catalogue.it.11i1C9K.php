<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Questo form non dovrebbe contenere nessun campo extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Il file caricato è troppo grande. Per favore, carica un file più piccolo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Il token CSRF non è valido. Prova a reinviare il form.',
    'This value is not a valid HTML5 color.' => 'Il valore non è un colore HTML5 valido.',
    'Please enter a valid birthdate.' => 'Per favore, inserisci una data di compleanno valida.',
    'The selected choice is invalid.' => 'La scelta selezionata non è valida.',
    'The collection is invalid.' => 'La collezione non è valida.',
    'Please select a valid color.' => 'Per favore, seleziona un colore valido.',
    'Please select a valid country.' => 'Per favore, seleziona un paese valido.',
    'Please select a valid currency.' => 'Per favore, seleziona una valuta valida.',
    'Please choose a valid date interval.' => 'Per favore, scegli a valid date interval.',
    'Please enter a valid date and time.' => 'Per favore, inserisci a valid date and time.',
    'Please enter a valid date.' => 'Per favore, inserisci a valid date.',
    'Please select a valid file.' => 'Per favore, seleziona un file valido.',
    'The hidden field is invalid.' => 'Il campo nascosto non è valido.',
    'Please enter an integer.' => 'Per favore, inserisci un numero intero.',
    'Please select a valid language.' => 'Per favore, seleziona una lingua valida.',
    'Please select a valid locale.' => 'Per favore, seleziona una lingua valida.',
    'Please enter a valid money amount.' => 'Per favore, inserisci un importo valido.',
    'Please enter a number.' => 'Per favore, inserisci un numero.',
    'The password is invalid.' => 'La password non è valida.',
    'Please enter a percentage value.' => 'Per favore, inserisci un valore percentuale.',
    'The values do not match.' => 'I valori non corrispondono.',
    'Please enter a valid time.' => 'Per favore, inserisci un orario valido.',
    'Please select a valid timezone.' => 'Per favore, seleziona un fuso orario valido.',
    'Please enter a valid URL.' => 'Per favore, inserisci un URL valido.',
    'Please enter a valid search term.' => 'Per favore, inserisci un termine di ricerca valido.',
    'Please provide a valid phone number.' => 'Per favore, indica un numero di telefono valido.',
    'The checkbox has an invalid value.' => 'La casella di selezione non ha un valore valido.',
    'Please enter a valid email address.' => 'Per favore, indica un indirizzo email valido.',
    'Please select a valid option.' => 'Per favore, seleziona un\'opzione valida.',
    'Please select a valid range.' => 'Per favore, seleziona un intervallo valido.',
    'Please enter a valid week.' => 'Per favore, inserisci una settimana valida.',
    'Bad code value' => 'Il valore non coincide',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Si è verificato un errore di autenticazione.',
    'Authentication credentials could not be found.' => 'Impossibile trovare le credenziali di autenticazione.',
    'Authentication request could not be processed due to a system problem.' => 'La richiesta di autenticazione non può essere processata a causa di un errore di sistema.',
    'Invalid credentials.' => 'Credenziali non valide.',
    'Cookie has already been used by someone else.' => 'Il cookie è già stato usato da qualcun altro.',
    'Not privileged to request the resource.' => 'Non hai i privilegi per richiedere questa risorsa.',
    'Invalid CSRF token.' => 'CSRF token non valido.',
    'No authentication provider found to support the authentication token.' => 'Non è stato trovato un valido fornitore di autenticazione per supportare il token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nessuna sessione disponibile, può essere scaduta o i cookie non sono abilitati.',
    'No token could be found.' => 'Nessun token trovato.',
    'Username could not be found.' => 'Username non trovato.',
    'Account has expired.' => 'Account scaduto.',
    'Credentials have expired.' => 'Credenziali scadute.',
    'Account is disabled.' => 'L\'account è disabilitato.',
    'Account is locked.' => 'L\'account è bloccato.',
    'Too many failed login attempts, please try again later.' => 'Troppi tentaivi di login falliti. Riprova tra un po\'.',
    'Invalid or expired login link.' => 'Link di login scaduto o non valido.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Rinnova',
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
