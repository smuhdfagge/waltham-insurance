# Waltham Insurance Brokers Ltd.

Marketing website for Waltham Insurance Brokers Ltd., aligned with the public website at [waltham.com.ng](https://waltham.com.ng).

## Run locally

1. Copy `.env.example` to `.env` and configure the database and mail values.
2. Run `composer install` and `npm install`.
3. Run `php artisan key:generate`.
4. Run `php artisan migrate`. To seed an initial administrator, set `WALTHAM_ADMIN_EMAIL` and `WALTHAM_ADMIN_PASSWORD` in `.env`, then run `php artisan db:seed`.
5. Run `npm run build` and `php artisan serve`.

## Public pages

- `/` — home
- `/about` — company history and background
- `/what-we-do` — approach and expertise
- `/vision-mission` — vision and mission
- `/directors` — board of directors
- `/management` — management biographies
- `/services` — insurance classes and service descriptions
- `/proposal` — proposal process
- `/contact` — contact details and enquiry form

Public page content and the shared header/footer are copied from the corresponding public Waltham pages. The official Waltham logo is in `public/logo.png`; the matching compiled site styles and navigation script are in `public/waltham/assets`.

## Company details

- Waltham Insurance Brokers Ltd.
- Incorporated in 1990; registration number 410208
- Head office: 27, Mahatma Ghandi Street, off Lord Lugard Street, Area 11, Garki, FCT, Abuja
- Phone: 08036613580 / 08067713959
- Email: info@waltham.com.ng
- Licensed by NAICOM; member of NCRIB

## Contact form

The public form stores enquiries in the existing Laravel database and queues an email to the configured company address. Configure a working mail transport and queue worker before production use.

## Deployment

Use PHP 8.2+ and Composer. Set `APP_ENV=production`, `APP_DEBUG=false`, configure the database and mail transport, and ensure `storage` and `bootstrap/cache` are writable. Run `php artisan optimize` after deployment.
