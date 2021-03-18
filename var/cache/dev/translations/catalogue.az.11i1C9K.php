<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Bu formada əlavə sahə olmamalıdır.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklənən fayl çox böyükdür. Lütfən daha kiçik fayl yükləyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nişanı yanlışdır. Lütfen formanı yenidən göndərin.',
    'This value is not a valid HTML5 color.' => 'Bu dəyər doğru bir HTML5 rəngi deyil.',
    'Please enter a valid birthdate.' => 'Zəhmət olmasa doğru bir doğum günü daxil edin.',
    'The selected choice is invalid.' => 'Seçilmiş seçim doğru deyil.',
    'The collection is invalid.' => 'Kolleksiya doğru deyil.',
    'Please select a valid color.' => 'Zəhmət olmasa doğru bir rəng seçin.',
    'Please select a valid country.' => 'Zəhmət olmasa doğru bir ölkə seçin.',
    'Please select a valid currency.' => 'Zəhmət olmasa doğru bir valyuta seçin.',
    'Please choose a valid date interval.' => 'Zəhmət olmasa doğru bir tarix aralığı seçin.',
    'Please enter a valid date and time.' => 'Zəhmət olmasa doğru bir tarix ve saat daxil edin.',
    'Please enter a valid date.' => 'Zəhmət olmasa doğru bir tarix daxil edin.',
    'Please select a valid file.' => 'Zəhmət olmasa doğru bir fayl seçin.',
    'The hidden field is invalid.' => 'Gizli sahə doğru deyil.',
    'Please enter an integer.' => 'Zəhmət olmasa bir tam ədəd daxil edin.',
    'Please select a valid language.' => 'Zəhmət olmasa doğru bir dil seçin.',
    'Please select a valid locale.' => 'Zəhmət olmasa doğru bir yer seçin.',
    'Please enter a valid money amount.' => 'Zəhmət olmasa doğru bir pul miqdarı daxil edin.',
    'Please enter a number.' => 'Zəhmət olmasa doğru bir rəqəm daxil edin.',
    'The password is invalid.' => 'Parol doğru deyil.',
    'Please enter a percentage value.' => 'Zəhmət olmasa doğru bir faiz dəyəri daxil edin.',
    'The values do not match.' => 'Dəyərlər örtüşmür.',
    'Please enter a valid time.' => 'Zəhmət olmasa doğru bir saat daxil edin.',
    'Please select a valid timezone.' => 'Zəhmət olmasa doğru bir saat qurşağı seçin.',
    'Please enter a valid URL.' => 'Zəhmət olmasa doğru bir URL daxil edin.',
    'Please enter a valid search term.' => 'Zəhmət olmasa doğru bir axtarış termini daxil edin.',
    'Please provide a valid phone number.' => 'Zəhmət olmasa doğru bir telefon nömrəsi seçin.',
    'The checkbox has an invalid value.' => 'Seçim qutusunda doğru olmayan dəyər var.',
    'Please enter a valid email address.' => 'Zəhmət olmasa doğru bir e-poçt seçin.',
    'Please select a valid option.' => 'Zəhmət olmasa doğru bir variant seçin.',
    'Please select a valid range.' => 'Zəhmət olmasa doğru bir aralıq seçin.',
    'Please enter a valid week.' => 'Zəhmət olmasa doğru bir həftə seçin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Doğrulama istisnası baş verdi.',
    'Authentication credentials could not be found.' => 'Doğrulama məlumatları tapılmadı.',
    'Authentication request could not be processed due to a system problem.' => 'Sistem xətası səbəbilə doğrulama istəyi emal edilə bilmədi.',
    'Invalid credentials.' => 'Yanlış məlumat.',
    'Cookie has already been used by someone else.' => 'Kuki başqası tərəfindən istifadə edilib.',
    'Not privileged to request the resource.' => 'Resurs istəyi üçün imtiyaz yoxdur.',
    'Invalid CSRF token.' => 'Yanlış CSRF nişanı.',
    'No authentication provider found to support the authentication token.' => 'Doğrulama nişanını dəstəkləyəcək provayder tapılmadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Uyğun seans yoxdur, vaxtı keçib və ya kuki aktiv deyil.',
    'No token could be found.' => 'Nişan tapılmadı.',
    'Username could not be found.' => 'İstifadəçi adı tapılmadı.',
    'Account has expired.' => 'Hesabın istifadə müddəti bitib.',
    'Credentials have expired.' => 'Məlumatların istifadə müddəti bitib.',
    'Account is disabled.' => 'Hesab qeyri-aktiv edilib.',
    'Account is locked.' => 'Hesab kilitlənib.',
    'Too many failed login attempts, please try again later.' => 'Çoxlu uğursuz giriş təşəbbüsü, zəhmət olmasa daha sonra yeniden yoxlayın.',
    'Invalid or expired login link.' => 'Yanlış və ya müddəti keçmiş giriş keçidi.',
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