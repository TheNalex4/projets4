<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
    'This value is not a valid HTML5 color.' => 'Denne verdien er ikke en gyldig HTML5-farge.',
    'Please enter a valid birthdate.' => 'Vennligst oppgi gyldig fødselsdato.',
    'The selected choice is invalid.' => 'Det valgte valget er ugyldig.',
    'The collection is invalid.' => 'Samlingen er ugyldig.',
    'Please select a valid color.' => 'Velg en gyldig farge.',
    'Please select a valid country.' => 'Vennligst velg et gyldig land.',
    'Please select a valid currency.' => 'Vennligst velg en gyldig valuta.',
    'Please choose a valid date interval.' => 'Vennligst velg et gyldig datointervall.',
    'Please enter a valid date and time.' => 'Vennligst angi en gyldig dato og tid.',
    'Please enter a valid date.' => 'Vennligst oppgi en gyldig dato.',
    'Please select a valid file.' => 'Vennligst velg en gyldig fil.',
    'The hidden field is invalid.' => 'Det skjulte feltet er ugyldig.',
    'Please enter an integer.' => 'Vennligst skriv inn et heltall.',
    'Please select a valid language.' => 'Vennligst velg et gyldig språk.',
    'Please select a valid locale.' => 'Vennligst velg et gyldig sted.',
    'Please enter a valid money amount.' => 'Vennligst angi et gyldig pengebeløp.',
    'Please enter a number.' => 'Vennligst skriv inn et nummer.',
    'The password is invalid.' => 'Passordet er ugyldig.',
    'Please enter a percentage value.' => 'Vennligst angi en prosentverdi.',
    'The values do not match.' => 'Verdiene stemmer ikke overens.',
    'Please enter a valid time.' => 'Vennligst angi et gyldig tidspunkt.',
    'Please select a valid timezone.' => 'Vennligst velg en gyldig tidssone.',
    'Please enter a valid URL.' => 'Vennligst skriv inn en gyldig URL.',
    'Please enter a valid search term.' => 'Vennligst angi et gyldig søketerm.',
    'Please provide a valid phone number.' => 'Vennligst oppgi et gyldig telefonnummer.',
    'The checkbox has an invalid value.' => 'Avkrysningsboksen har en ugyldig verdi.',
    'Please enter a valid email address.' => 'Vennligst skriv inn en gyldig e-post adresse.',
    'Please select a valid option.' => 'Vennligst velg et gyldig alternativ.',
    'Please select a valid range.' => 'Vennligst velg et gyldig område.',
    'Please enter a valid week.' => 'Vennligst skriv inn en gyldig uke.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjon.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
    'Too many failed login attempts, please try again later.' => 'For mange mislykkede påloggingsforsøk. Prøv igjen senere.',
    'Invalid or expired login link.' => 'Ugyldig eller utløpt påloggingskobling.',
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
