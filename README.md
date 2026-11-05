# Waltham Insurance Brokers Ltd.

Website and admin dashboard for Waltham Insurance Brokers Ltd. (RC 410208), a NAICOM-licensed insurance broker and NCRIB member based in Garki, Abuja.

Built with Laravel 12, Livewire 3, Alpine.js and Tailwind CSS 4.

## Quick start

1. Copy `.env.example` to `.env` and set the database and mail values.
2. `composer install`
3. `npm install`
4. `php artisan key:generate`
5. Set `WALTHAM_ADMIN_EMAIL` and `WALTHAM_ADMIN_PASSWORD` in `.env` if you want the seeder to create the first administrator.
6. `php artisan migrate --seed`
7. `npm run build`
8. `php artisan serve`

Already have a database from an earlier version? Run `php artisan migrate` (adds the directors/management group to team members), then `php artisan db:seed` to load Waltham's services and people. The seeder updates records by slug or name, so it is safe to run again. Old sample services or team members it doesn't know about stay in place; remove them from the admin.

## Pages

| URL | Content |
| --- | --- |
| `/` | Home: hero, service finder, key facts, about, what we do, services, commitments, vision and mission |
| `/about`, `/what-we-do`, `/vision-mission` | Company story, approach and purpose |
| `/directors`, `/management` | Board of directors and management profiles, from the database |
| `/services`, `/services/{slug}` | All services, and a detail page per service from the database |
| `/proposal` | Our proposal for your insurances |
| `/claims` | How to notify us of a claim |
| `/contact` | Contact details, enquiry form and map |

`/our-team` redirects to `/management` and `/gallery` to `/directors`. Links such as `/contact?service=Motor%20Insurance` pre-select the subject on the contact form.

## Company details

Contact and regulatory details come from [config/company.php](config/company.php). The defaults are Waltham's published details; any of them can be overridden with `COMPANY_*` variables in `.env` (see `.env.example`). The contact form sends enquiries to `COMPANY_EMAIL` (default `info@waltham.com.ng`). Optional values such as `COMPANY_HOURS`, `COMPANY_WHATSAPP` and social links only appear on the site when set.

## Admin dashboard

Sign in at `/login` to reach `/dashboard`.

- **Overview**: content counts, enquiries over the last 14 days, status breakdown, recent enquiries and quick actions.
- **Enquiries**: search, filter by status, reply by email or phone, update status, remove.
- **Services**: add, edit and remove services. Descriptions support simple Markdown: a blank line between paragraphs, `- ` for bullet points and `### ` for sub-headings. Icons are chosen from the built-in set.
- **Directors & management**: add people to either page, with an optional photo and bio. People without a photo show their initials.
- **Users**: public sign-up is off; add accounts from **Users → Add user**.
- **My profile**: change your name, email and password.

## Design system

- Brand tokens are defined in [resources/css/app.css](resources/css/app.css): `brand` (Waltham navy `#1B348C`), `accent` (Waltham orange `#F37B0A`), `ink` (text and dark surfaces), `canvas` (page background), `line` (borders) and `alert` (errors). Changing a token restyles the public site and the admin.
- Fonts (Inter and Plus Jakarta Sans) are self-hosted through `@fontsource`.
- Shared components: [site-layout](resources/views/components/site-layout.blade.php), [page-hero](resources/views/components/page-hero.blade.php), [section-heading](resources/views/components/section-heading.blade.php), [logo](resources/views/components/logo.blade.php) and [icon](resources/views/components/icon.blade.php) (an inline SVG icon set).
- Logo files: `public/logo.png` (original artwork), `public/logo-full.png` (transparent background) and `public/logo-mark.png` (symbol only, used on dark backgrounds and for the favicon).
- Seed content lives in [database/seeders/content](database/seeders/content).

## Deployment notes

- Use PHP 8.2+ and Composer on a Linux VPS or shared hosting.
- Make sure `storage` and `bootstrap/cache` are writable.
- Set `APP_ENV=production`, `APP_DEBUG=false`, and run `php artisan optimize` before launch.
- Run `php artisan storage:link` once so uploaded team photos show.
- Run `npm run build` after pulling changes. `public/build` is not committed.
