# Agent Instructions

## Commands
- Server: `php artisan serve` & `npm run dev`
- Test: `php artisan test` (SQLite in-memory via `phpunit.xml`)
- Migrate: `php artisan migrate`
- Seed: `php artisan db:seed` (creates `admin@gmail.com` / `12345678`)
- Lint: `vendor/bin/pint`
- Config cache: `php artisan config:cache` (run after changing `.env` or `config/`)

## Architecture
- Laravel 11 + Vite + Tailwind CSS v4. Frontend: `resources/css/app.css`, `resources/js/app.js`.
- Models: `Category`, `Product`, `ProductImage`, `User`, `Booking`, `BookingItem`, `Fine`, `RentalRule`.
- Controllers: `PublicController` (all routes incl. admin), `BookingController` (booking + Midtrans).
- Cart is session-based: `session('keranjang')`.
- `Booking::$fillable` must include `payment_status` (Midtrans: `pending`, `capture`, `settlement`, `cancel`, `deny`, `expire`).
- Booking statuses: `pending`, `confirmed`, `rented`, `completed`, `cancelled`.

## Environment
- Requires `.env` with `MIDTRANS_SERVER_KEY`, `MIDTRANS_CLIENT_KEY`, `MIDTRANS_IS_PRODUCTION`.
- Run `php artisan config:cache` after editing `.env`.

## Workflow
- Do not commit unless explicitly asked. Run `vendor/bin/pint` and `php artisan test` before finishing.
