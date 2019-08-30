# Mailing Script

A simple script for sending an email with attachment

## Installation

Install the composer dependencies

```bash
composer.phar install
```

## Usage
Fill the necessary variables. Example:
```php
$atttachment_url = 'https://docs.google.com/spreadsheets/d/FILE_ID/export?format=xlsx';
$target_email = ['user1@example.com', 'user2@example.com'];

$email_server = 'mail.example.com';
$email_port = 587;
$email_username = 'sender@example.com';
$email_name = 'Sender Man';
$email_password = 'f00b@r';

$subject_content = 'This is an email';
$body_content = 'Hi Bros, kindly see the attachment provided';

$file_name = 'attachment.xlsx';
```

How to test
```bash
php -d allow_url_fopen=true /path/to/mailer/script/main.php >/dev/null 2>&1
```

Sample usage for running the emailer every 7pm, Monday to Friday
```bash
crontab -e

0 19 * * 1-5 /usr/bin/php -d allow_url_fopen=true /path/to/mailer/script/main.php >/dev/null 2>&1
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


## License
[MIT](https://choosealicense.com/licenses/mit/)