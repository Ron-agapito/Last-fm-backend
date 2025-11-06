Requirements
- PHP 8.2 or higher
- Composer
- Node.js 22 or higher
- npm 10 or higher

Setup (macOS / Linux)
1. Install PHP dependencies

   `composer install`

2. Copy env file and configure

   `cp .env.example .env`
   Edit ` .env ` with your  app settings.

3. Generate app key

   `php artisan key:generate`

4. Run migrations and seed

   `php artisan migrate`

   `php artisan db:seed`

5. Install frontend dependencies and build

   `npm install`

6. Update frontend_url in .env file to match your React app URL (e.g., http://localhost:5173)

7. Update LASTFM_API_KEY and LASTFM_API_SECRET in .env file with your Last.fm API credentials.

8. Import Last.fm data

   `php artisan lastfm:import`

9. Start the development server
  
    `npm run serve`

