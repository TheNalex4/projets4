<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'This value is not a valid HTML5 color.' => 'ערך זה אינו צבע HTML5 חוקי.',
    'Please enter a valid birthdate.' => 'נא להזין את תאריך לידה תקני.',
    'The selected choice is invalid.' => 'הבחירה שנבחרה אינה חוקית.',
    'The collection is invalid.' => 'האוסף אינו חוקי.',
    'Please select a valid color.' => 'אנא בחר צבע חוקי.',
    'Please select a valid country.' => 'אנא בחר מדינה חוקית.',
    'Please select a valid currency.' => 'אנא בחר מטבע חוקי.',
    'Please choose a valid date interval.' => 'אנא בחר מרווח תאריכים חוקי.',
    'Please enter a valid date and time.' => 'אנא הזן תאריך ושעה תקנים.',
    'Please enter a valid date.' => 'נא להזין תאריך חוקי.',
    'Please select a valid file.' => 'אנא בחר קובץ חוקי.',
    'The hidden field is invalid.' => 'השדה הנסתר אינו חוקי.',
    'Please enter an integer.' => 'אנא הזן מספר שלם.',
    'Please select a valid language.' => 'אנא בחר שפה חוקי.',
    'Please select a valid locale.' => 'אנא בחר שפה מקומית.',
    'Please enter a valid money amount.' => 'אנא הזן סכום כסף חוקי.',
    'Please enter a number.' => 'אנא הזן מספר.',
    'The password is invalid.' => 'הסיסמה אינה חוקית.',
    'Please enter a percentage value.' => 'אנא הזן ערך באחוזים.',
    'The values do not match.' => 'הערכים אינם תואמים.',
    'Please enter a valid time.' => 'אנא הזן שעה חוקי.',
    'Please select a valid timezone.' => 'אנא בחר אזור זמן חוקי.',
    'Please enter a valid URL.' => 'נא להזין את כתובת אתר חוקית.',
    'Please enter a valid search term.' => 'אנא הזן מונח חיפוש חוקי.',
    'Please provide a valid phone number.' => 'אנא ספק מספר טלפון חוקי.',
    'The checkbox has an invalid value.' => 'לתיבת הסימון יש ערך לא חוקי.',
    'Please enter a valid email address.' => 'אנא הזן כתובת דוא"ל תקנית.',
    'Please select a valid option.' => 'אנא בחר אפשרות חוקית.',
    'Please select a valid range.' => 'אנא בחר טווח חוקי.',
    'Please enter a valid week.' => 'אנא הזן שבוע תקף.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'שגיאה באימות',
    'Authentication credentials could not be found.' => 'פרטי זיהוי לא נמצאו.',
    'Authentication request could not be processed due to a system problem.' => 'לא ניתן היה לעבד את בקשת אימות בגלל בעיית מערכת.',
    'Invalid credentials.' => 'שם משתמש או סיסמא שגויים.',
    'Cookie has already been used by someone else.' => 'עוגיה כבר שומשה.',
    'Not privileged to request the resource.' => 'אין הרשאה מתאימה.',
    'Invalid CSRF token.' => 'אסימון CSRF לא חוקי.',
    'No authentication provider found to support the authentication token.' => 'לא נמצא ספק אימות המתאימה לבקשה.',
    'No session available, it either timed out or cookies are not enabled.' => 'אין סיישן זמין, או שתם הזמן הקצוב או העוגיות אינן מופעלות.',
    'No token could be found.' => 'הטוקן לא נמצא.',
    'Username could not be found.' => 'שם משתמש לא נמצא.',
    'Account has expired.' => 'החשבון פג תוקף.',
    'Credentials have expired.' => 'פרטי התחברות פקעו תוקף.',
    'Account is disabled.' => 'החשבון מבוטל.',
    'Account is locked.' => 'החשבון נעול.',
    'Too many failed login attempts, please try again later.' => 'יותר מדי ניסיונות כניסה כושלים, אנא נסה שוב מאוחר יותר.',
    'Invalid or expired login link.' => 'קישור כניסה לא חוקי או שפג תוקפו.',
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
