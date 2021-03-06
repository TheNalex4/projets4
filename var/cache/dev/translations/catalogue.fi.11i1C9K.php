<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Tämä lomake ei voi sisältää ylimääräisiä kenttiä.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ladattu tiedosto on liian iso. Ole hyvä ja lataa pienempi tiedosto.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-tarkiste on virheellinen. Ole hyvä ja yritä lähettää lomake uudestaan.',
    'This value is not a valid HTML5 color.' => 'Tämä arvo ei ole kelvollinen HTML5-väri.',
    'Please enter a valid birthdate.' => 'Syötä kelvollinen syntymäaika.',
    'The selected choice is invalid.' => 'Valittu vaihtoehto ei kelpaa.',
    'The collection is invalid.' => 'Ryhmä ei kelpaa.',
    'Please select a valid color.' => 'Valitse kelvollinen väri.',
    'Please select a valid country.' => 'Valitse kelvollinen maa.',
    'Please select a valid currency.' => 'Valitse kelvollinen valuutta.',
    'Please choose a valid date interval.' => 'Valitse kelvollinen aikaväli.',
    'Please enter a valid date and time.' => 'Syötä kelvolliset päivä ja aika.',
    'Please enter a valid date.' => 'Syötä kelvollinen päivä.',
    'Please select a valid file.' => 'Valitse kelvollinen tiedosto.',
    'The hidden field is invalid.' => 'Piilotettu kenttä ei ole kelvollinen.',
    'Please enter an integer.' => 'Syötä kokonaisluku.',
    'Please select a valid language.' => 'Valitse kelvollinen kieli.',
    'Please select a valid locale.' => 'Valitse kelvollinen kielikoodi.',
    'Please enter a valid money amount.' => 'Syötä kelvollinen rahasumma.',
    'Please enter a number.' => 'Syötä numero.',
    'The password is invalid.' => 'Salasana ei kelpaa.',
    'Please enter a percentage value.' => 'Syötä prosenttiluku.',
    'The values do not match.' => 'Arvot eivät vastaa toisiaan.',
    'Please enter a valid time.' => 'Syötä kelvollinen kellonaika.',
    'Please select a valid timezone.' => 'Valitse kelvollinen aikavyöhyke.',
    'Please enter a valid URL.' => 'Syötä kelvollinen URL.',
    'Please enter a valid search term.' => 'Syötä kelvollinen hakusana.',
    'Please provide a valid phone number.' => 'Anna kelvollinen puhelinnumero.',
    'The checkbox has an invalid value.' => 'Valintaruudun arvo ei  kelpaa.',
    'Please enter a valid email address.' => 'Syötä kelvollinen sähköpostiosoite.',
    'Please select a valid option.' => 'Valitse kelvollinen vaihtoehto.',
    'Please select a valid range.' => 'Valitse kelvollinen väli.',
    'Please enter a valid week.' => 'Syötä kelvollinen viikko.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentikointi poikkeus tapahtui.',
    'Authentication credentials could not be found.' => 'Autentikoinnin tunnistetietoja ei löydetty.',
    'Authentication request could not be processed due to a system problem.' => 'Autentikointipyyntöä ei voitu käsitellä järjestelmäongelman vuoksi.',
    'Invalid credentials.' => 'Virheelliset tunnistetiedot.',
    'Cookie has already been used by someone else.' => 'Eväste on jo jonkin muun käytössä.',
    'Not privileged to request the resource.' => 'Ei oikeutta resurssiin.',
    'Invalid CSRF token.' => 'Virheellinen CSRF tunnus.',
    'No authentication provider found to support the authentication token.' => 'Autentikointi tunnukselle ei löydetty tuettua autentikointi tarjoajaa.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sessio ei ole saatavilla, se on joko vanhentunut tai evästeet eivät ole käytössä.',
    'No token could be found.' => 'Tunnusta ei löytynyt.',
    'Username could not be found.' => 'Käyttäjätunnusta ei löydetty.',
    'Account has expired.' => 'Tili on vanhentunut.',
    'Credentials have expired.' => 'Tunnistetiedot ovat vanhentuneet.',
    'Account is disabled.' => 'Tili on poistettu käytöstä.',
    'Account is locked.' => 'Tili on lukittu.',
    'Too many failed login attempts, please try again later.' => 'Liian monta epäonnistunutta kirjautumisyritystä, yritä myöhemmin uudelleen.',
    'Invalid or expired login link.' => 'Virheellinen tai vanhentunut kirjautumislinkki.',
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
