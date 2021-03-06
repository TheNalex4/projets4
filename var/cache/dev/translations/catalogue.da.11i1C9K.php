<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uploadede fil var for stor. Upload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-token er ugyldig. Prøv venligst at genindsende.',
    'This value is not a valid HTML5 color.' => 'Værdien er ikke en gyldig HTML5 farve.',
    'Please enter a valid birthdate.' => 'Indtast venligst en gyldig fødselsdato.',
    'The selected choice is invalid.' => 'Den valgte mulighed er ugyldig .',
    'The collection is invalid.' => 'Samlingen er ugyldig.',
    'Please select a valid color.' => 'Vælg venligst en gyldig farve.',
    'Please select a valid country.' => 'Vælg venligst et gyldigt land.',
    'Please select a valid currency.' => 'Vælg venligst en gyldig valuta.',
    'Please choose a valid date interval.' => 'Vælg venligst et gyldigt datointerval.',
    'Please enter a valid date and time.' => 'Vælg venligst en gyldig dato og tid.',
    'Please enter a valid date.' => 'Vælg venligst en gyldig dato.',
    'Please select a valid file.' => 'Vælg venligst en gyldig fil.',
    'The hidden field is invalid.' => 'Det skjulte felt er ugyldigt.',
    'Please enter an integer.' => 'Indsæt veligst et heltal.',
    'Please select a valid language.' => 'Vælg venligst et gyldigt sprog.',
    'Please select a valid locale.' => 'Vælg venligst en gyldigt sprogkode.',
    'Please enter a valid money amount.' => 'Vælg venligst et gyldigt beløb.',
    'Please enter a number.' => 'Indtast venligst et nummer.',
    'The password is invalid.' => 'Passwordet er ugyldigt.',
    'Please enter a percentage value.' => 'Indtast venligst en procentværdi.',
    'The values do not match.' => 'Værdierne er ikke ens.',
    'Please enter a valid time.' => 'Indtast venligst en gyldig tid.',
    'Please select a valid timezone.' => 'Vælg venligst en gyldig tidszone.',
    'Please enter a valid URL.' => 'Indtast venligst en gyldig URL.',
    'Please enter a valid search term.' => 'Indtast venligst et gyldigt søgeord.',
    'Please provide a valid phone number.' => 'Giv venligst et gyldigt telefonnummer.',
    'The checkbox has an invalid value.' => 'Checkboxen har en ugyldigt værdi.',
    'Please enter a valid email address.' => 'Indtast venligst en gyldig emailaddresse.',
    'Please select a valid option.' => 'Vælg venligst en gyldig mulighed.',
    'Please select a valid range.' => 'Vælg venligst et gyldigt interval .',
    'Please enter a valid week.' => 'Indtast venligst en gyldig uge.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan ikke findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
    'Too many failed login attempts, please try again later.' => 'For mange fejlede login forsøg, prøv venligst senere.',
    'Invalid or expired login link.' => 'Ugyldigt eller udløbet login link.',
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
