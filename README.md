# Al Mutmainnah Maa O Shishu Hospital

Al mutmainnah maa o shishu hospital's official website.

## Requirements

- PHP ^8.2
- Composer
- Node.js & NPM

## Installation

1. **Clone the repository**

   ```bash
   git clone <repository_url>
   cd example-app
   ```

2. **Setup the application**

   This project includes a convenient setup script that handles installing dependencies, setting up the environment file, generating the application key, running migrations, and building frontend assets.

   ```bash
   composer run setup
   ```

   Alternatively, you can run the steps manually:

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   npm install
   npm run build
   ```

## Development

To start the local development server (which runs the Laravel server, queue listener, logs, and Vite partially via `concurrently`):

```bash
composer run dev
```

Or you can run the servers independently:

```bash
# Start Laravel server
php artisan serve

# Watch frontend assets
npm run dev
```

## Testing

To run the application tests:

```bash
composer run test
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
