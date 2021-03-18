<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь ласка, спробуйте відправити форму знову.',
    'This value is not a valid HTML5 color.' => 'Це значення не є допустимим кольором HTML5.',
    'Please enter a valid birthdate.' => 'Будь ласка, введіть дійсну дату народження.',
    'The selected choice is invalid.' => 'Обраний варіант недійсний.',
    'The collection is invalid.' => 'Колекція недійсна.',
    'Please select a valid color.' => 'Будь ласка, оберіть дійсний колір.',
    'Please select a valid country.' => 'Будь ласка, оберіть дійсну країну.',
    'Please select a valid currency.' => 'Будь ласка, оберіть дійсну валюту.',
    'Please choose a valid date interval.' => 'Будь ласка, оберіть дійсний інтервал дати.',
    'Please enter a valid date and time.' => 'Будь ласка, введіть дійсну дату та час.',
    'Please enter a valid date.' => 'Будь ласка, введіть дійсну дату.',
    'Please select a valid file.' => 'Будь ласка, оберіть дійсний файл.',
    'The hidden field is invalid.' => 'Приховане поле недійсне.',
    'Please enter an integer.' => 'Будь ласка, введіть ціле число.',
    'Please select a valid language.' => 'Будь ласка, оберіть дійсну мову.',
    'Please select a valid locale.' => 'Будь ласка, оберіть дійсну локаль.',
    'Please enter a valid money amount.' => 'Будь ласка, введіть дійсну суму грошей.',
    'Please enter a number.' => 'Будь ласка, введіть число.',
    'The password is invalid.' => 'Пароль недійсний.',
    'Please enter a percentage value.' => 'Будь ласка, введіть процентне значення.',
    'The values do not match.' => 'Значення не збігаються.',
    'Please enter a valid time.' => 'Будь ласка, введіть дійсний час.',
    'Please select a valid timezone.' => 'Будь ласка, оберіть дійсний часовий пояс.',
    'Please enter a valid URL.' => 'Будь ласка, введіть дійсну URL-адресу.',
    'Please enter a valid search term.' => 'Будь ласка, введіть дійсний пошуковий термін.',
    'Please provide a valid phone number.' => 'Будь ласка, введіть дійсний номер телефону.',
    'The checkbox has an invalid value.' => 'Прапорець має недійсне значення.',
    'Please enter a valid email address.' => 'Будь ласка, введіть дійсну адресу електронної пошти.',
    'Please select a valid option.' => 'Будь ласка, оберіть дійсний варіант.',
    'Please select a valid range.' => 'Будь ласка, оберіть дійсний діапазон.',
    'Please enter a valid week.' => 'Будь ласка, введіть дійсний тиждень.',
    'Bad code value' => 'Невірний код',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Помилка автентифікації.',
    'Authentication credentials could not be found.' => 'Автентифікаційні дані не знайдено.',
    'Authentication request could not be processed due to a system problem.' => 'Запит на автентифікацію не може бути опрацьовано у зв’язку з проблемою в системі.',
    'Invalid credentials.' => 'Невірні автентифікаційні дані.',
    'Cookie has already been used by someone else.' => 'Хтось інший вже використав цей сookie.',
    'Not privileged to request the resource.' => 'Відсутні права на запит цього ресурсу.',
    'Invalid CSRF token.' => 'Невірний токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не знайдено провайдера автентифікації, що підтримує токен автентифікаціії.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія недоступна, її час вийшов, або cookies вимкнено.',
    'No token could be found.' => 'Токен не знайдено.',
    'Username could not be found.' => 'Ім’я користувача не знайдено.',
    'Account has expired.' => 'Термін дії облікового запису вичерпано.',
    'Credentials have expired.' => 'Термін дії автентифікаційних даних вичерпано.',
    'Account is disabled.' => 'Обліковий запис відключено.',
    'Account is locked.' => 'Обліковий запис заблоковано.',
    'Too many failed login attempts, please try again later.' => 'Забагато невдалих спроб входу. Будь ласка, спробуйте пізніше.',
    'Invalid or expired login link.' => 'Посилання для входу недійсне, або термін його дії закінчився.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Оновити',
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