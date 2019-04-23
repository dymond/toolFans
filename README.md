# laravel-starter-kit - WIP
Laravel Website Starter Kit based on v5.8

## WIP - Use at your own peril

This is a highly opinionated website setup that my team uses for creating it's websites. 


### Example `.env`:
```
APP_NAME=Laravel-Starter-Kit
APP_ENV=local
APP_KEY=base64:8jKe444HRkAlQn878IoSHmSCRV5fK5qVSjrwmQKA74Y=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=daily

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=stk
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

# Mailgun
MAILGUN_API_KEY=
MAILGUN_SECRET=
MAILGUN_DOMAIN=

# Mailchip
MAILCHIMP_APIKEY=
MAILCHIMP_LIST_ID=
MAILCHIMP_LIST_INTEREST_ID=


# Laravel Blog
BLOG_FILE_DISK=s3_public

# AWS S3 Storage
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=storage.tjmpromos.com
AWS_URL=https://storage.tjmpromos.com/
AWS_ROOT="starter-kit/"

# BACKUP DISK
AWS_BACKUP_BUCKET=tjm.backups
AWS_BACKUP_URL=https://tjm.backups.s3.amazonaws.com/

# Slack #web-admin Channel
SLACK_WEBHOOK=

# RECAPTCHA Keys
RECAPTCHA_SITEKEY=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
RECAPTCHA_SECRET=6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe

# TJM Form Request
FORM_REQUEST_API_SUBMIT_URL=https://api.tjmpromos.com/api/global/form/submit
FORM_REQUEST_API_TOKEN=${TJM_API_ACCESS_TOKEN}
FORM_REQUEST_API_SITE_ID=TEST
FORM_REQUEST_TO_API_TOGGLE=false
FORM_REQUEST_TO_EMAIL_TOGGLE=true
FORM_REQUEST_SEND_TO_EMAIL=test@example.com


```

### Generate Key and Migrate Database

```bash
php artisan key:generate

php artisan migrate

```


### Admin panel an DB

`/admin`

#### Make User

```
php artisan nova:user

```


## Helful Links

### Tailwinds CSS
[TailwindsCSS](https://tailwindcss.com)

[Awesome Tailwinds List](https://github.com/merchedhq/awesome-tailwindcss)

[tailwind-cheat-sheet](http://nerdcave.com/tailwind-cheat-sheet)

[tailwindcolorshades](https://javisperez.github.io/tailwindcolorshades/)

### Colors
[color-scheme-generator](https://adevade.github.io/color-scheme-generator/)

[paletton.com](http://paletton.com/#uid=23k0u0kt0vmdzJvl-yRx5n+GMgT)



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
