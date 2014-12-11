<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Email-адресът трябва да се предаде за валидиране чрез масив (array).';
$lang['email_invalid_address'] = 'Грешен email-адрес: %s';
$lang['email_attachment_missing'] = 'Не може да се намери прикачения файл: %s';
$lang['email_attachment_unreadable'] = 'Не може да се отвори прикачения файл: %s';
$lang['email_no_from'] = 'Не е посочен подателят на съобщението (From).';
$lang['email_no_recipients'] = 'Трябва да включите получателите: To, Cc или Bcc';
$lang['email_send_failure_phpmail'] = 'Съобщението не може да бъде изпратено чрез PHP mail(). Вашият сървър може да не е конфигуриран да изпраща поща, използвайки този метод.';
$lang['email_send_failure_sendmail'] = 'Съобщението не може да бъде изпратено чрез PHP Sendmail. Вашият сървър може да не е конфигуриран да изпраща поща, използвайки този метод.';
$lang['email_send_failure_smtp'] = 'Съобщението не може да бъде изпратено чрез PHP SMTP. Вашият сървър може да не е конфигуриран да изпраща поща, използвайки този метод.';
$lang['email_sent'] = 'Вашето съобщение е изпратено успешно и използва следния протокол: %s';
$lang['email_no_socket'] = 'Не може да се отвори връзка към Sendmail. Моля, проверете настройките.';
$lang['email_no_hostname'] = 'Не сте посочили SMTP сървър.';
$lang['email_smtp_error'] = 'Получи се следната SMTP грешка: %s';
$lang['email_no_smtp_unpw'] = 'Грешка: Трябва да посочите име и парола за SMTP.';
$lang['email_failed_smtp_login'] = 'Не може да се изпрати AUTH LOGIN. Грешка: %s';
$lang['email_smtp_auth_un'] = 'Не може да се удостовери потребителското име. Грешка: %s';
$lang['email_smtp_auth_pw'] = 'Не може да се удостовери паролата. Грешка: %s';
$lang['email_smtp_data_failure'] = 'Не могат да се изпращат данни: %s';
$lang['email_exit_status'] = 'Код на завършване: %s';

/* End of file email_lang.php */
/* Location: ./application/language/bulgarian/email_lang.php */