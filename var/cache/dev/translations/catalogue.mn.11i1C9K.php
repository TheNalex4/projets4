<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
    'This value is not a valid HTML5 color.' => 'Энэ утга зөв HTML5 өнгө биш байна.',
    'Please enter a valid birthdate.' => 'Зөв төрсөн он сар оруулна уу.',
    'The selected choice is invalid.' => 'Сонгосон утга буруу байна.',
    'The collection is invalid.' => 'Цуглуулга буруу байна.',
    'Please select a valid color.' => 'Үнэн зөв өнгө сонгоно уу.',
    'Please select a valid country.' => 'Үнэн зөв улс сонгоно уу.',
    'Please select a valid currency.' => 'Үнэн зөв мөнгөн тэмдэгт сонгоно уу.',
    'Please choose a valid date interval.' => 'Үнэн зөв цагын зай сонгоно уу.',
    'Please enter a valid date and time.' => 'Үнэн зөв он цаг оруулна уу.',
    'Please enter a valid date.' => 'Үнэн зөв он цаг өдөр оруулна уу.',
    'Please select a valid file.' => 'Үнэн зөв файл сонгоно уу.',
    'The hidden field is invalid.' => 'Нууц талбарын утга буруу байна.',
    'Please enter an integer.' => 'Бүхэл тоо оруулна уу.',
    'Please select a valid language.' => 'Үнэн зөв хэл сонгоно уу.',
    'Please select a valid locale.' => 'Үнэн зөв бүс сонгоно уу.',
    'Please enter a valid money amount.' => 'Үнэн зөв мөнгөний хэмжээ сонгоно уу.',
    'Please enter a number.' => 'Тоо оруулна уу.',
    'The password is invalid.' => 'Нууц үг буруу байна.',
    'Please enter a percentage value.' => 'Хувь утга оруулна уу.',
    'The values do not match.' => 'Утга хоорондоо таарахгүй байна.',
    'Please enter a valid time.' => 'Үнэн зөв цаг оруулна уу.',
    'Please select a valid timezone.' => 'Үнэн зөв цагын бүс оруулна уу.',
    'Please enter a valid URL.' => 'Үнэн зөв URL оруулна уу.',
    'Please enter a valid search term.' => 'Үнэн зөв хайх утга оруулна уу.',
    'Please provide a valid phone number.' => 'Үнэн зөв утасны дугаар оруулна уу.',
    'The checkbox has an invalid value.' => 'Сонгох хайрцаг буруу утгатай байна.',
    'Please enter a valid email address.' => 'Үнэн зөв и-мэйл хаяг оруулна уу.',
    'Please select a valid option.' => 'Үнэн зөв сонголт сонгоно уу.',
    'Please select a valid range.' => 'Үнэн зөв хязгаарын утга сонгоно уу.',
    'Please enter a valid week.' => 'Үнэн зөв долоо хоног сонгоно уу.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Нэвтрэх хүсэлтийн алдаа гарав.',
    'Authentication credentials could not be found.' => 'Нэвтрэх эрхийн мэдээлэл олдсонгүй.',
    'Authentication request could not be processed due to a system problem.' => 'Системийн алдаанаас болон нэвтрэх хүсэлтийг гүйцэтгэх боломжгүй байна.',
    'Invalid credentials.' => 'Буруу нэвтрэх эрхийн мэдээлэл.',
    'Cookie has already been used by someone else.' => 'Күүки файлыг аль хэдийн өөр хүн хэрэглэж байна.',
    'Not privileged to request the resource.' => 'Энэхүү мэдээллийг авах эрх хүрэхгүй байна.',
    'Invalid CSRF token.' => 'Тохиромжгүй CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Нэвтрэх токенг дэмжих нэвтрэх эрхийн хангагч олдсонгүй.',
    'No  available, it either timed out or cookies are not enabled.' => 'Хэрэглэгчийн session олдсонгүй, хугацаа нь дууссан эсвэл күүки идэвхижүүлээгүй байна.',
    'No token could be found.' => 'Токен олдсонгүй.',
    'Username could not be found.' => 'Нэвтрэх нэр олсонгүй.',
    'Account has expired.' => 'Бүртгэлийн хугацаа дууссан байна.',
    'Credentials have expired.' => 'Нэвтрэх эрхийн хугацаа дууссан байна.',
    'Account is disabled.' => 'Бүртгэлийг хаасан байна.',
    'Account is locked.' => 'Бүртгэлийг цоожилсон байна.',
    'Too many failed login attempts, please try again later.' => 'Хэтэрхий олон амжилтгүй оролдлого, түр хүлээгээд дахин оролдоно уу.',
    'Invalid or expired login link.' => 'Буруу эсвэл хугацаа нь дууссан нэвтрэх зам.',
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
