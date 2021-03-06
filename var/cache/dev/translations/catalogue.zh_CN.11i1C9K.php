<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
    'This value is not a valid HTML5 color.' => '该数值不是个有效的 HTML5 颜色。',
    'Please enter a valid birthdate.' => '请输入有效的生日日期。',
    'The selected choice is invalid.' => '所选的选项无效。',
    'The collection is invalid.' => '集合无效。',
    'Please select a valid color.' => '请选择有效的颜色。',
    'Please select a valid country.' => '请选择有效的国家。',
    'Please select a valid currency.' => '请选择有效的货币。',
    'Please choose a valid date interval.' => '请选择有效的日期间隔。',
    'Please enter a valid date and time.' => '请输入有效的日期与时间。',
    'Please enter a valid date.' => '请输入有效的日期。',
    'Please select a valid file.' => '请选择有效的文件。',
    'The hidden field is invalid.' => '隐藏字段无效。',
    'Please enter an integer.' => '请输入整数。',
    'Please select a valid language.' => '请选择有效的语言。',
    'Please select a valid locale.' => '请选择有效的语言环境。',
    'Please enter a valid money amount.' => '请输入正确的金额。',
    'Please enter a number.' => '请输入数字。',
    'The password is invalid.' => '密码无效。',
    'Please enter a percentage value.' => '请输入百分比值。',
    'The values do not match.' => '数值不匹配。',
    'Please enter a valid time.' => '请输入有效的时间。',
    'Please select a valid timezone.' => '请选择有效的时区。',
    'Please enter a valid URL.' => '请输入有效的网址。',
    'Please enter a valid search term.' => '请输入有效的搜索词。',
    'Please provide a valid phone number.' => '请提供有效的手机号码。',
    'The checkbox has an invalid value.' => '无效的选框值。',
    'Please enter a valid email address.' => '请输入有效的电子邮件地址。',
    'Please select a valid option.' => '请选择有效的选项。',
    'Please select a valid range.' => '请选择有效的范围。',
    'Please enter a valid week.' => '请输入有效的星期。',
    'Bad code value' => '验证码不正确',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
    'Too many failed login attempts, please try again later.' => '登入失败的次数过多，请稍后再试。',
    'Invalid or expired login link.' => '失效或过期的登入链接。',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => '看不清换一张？',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
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
$catalogueZh->addFallbackCatalogue($catalogueEn);

return $catalogue;
