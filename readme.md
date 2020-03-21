#Requirements
Laravel 6.*<br>
Unmodified `users` table<br>
SMTP server

#Modifies
`users` table<br>
Auth::user<br>
Authentification routes

#Installation
Add the package:<br>
`composer require raivovaisla/tvnet-feed`

In `config/app.php` add the package's service provider in the `providers` array:<br>
`RaivoVaisla\TvnetFeed\TvnetFeedServiceProvider::class,`

In `config/auth.php` replace default user model (`providers.users.model`) with
`RaivoVaisla\TvnetFeed\Models\User::class`

Clear config cache

Launch command<br>
`php artisan vendor:publish --provider="RaivoVaisla\TvnetFeed\TvnetFeedServiceProvider"`

Launch migrations:
`php artisan migrate`

#Usage
To view the feed you must sign up (Head over to `/register`)<br>
After registering, you must verify your email by clicking the link in the email received.<br>
After email is verified and you are authenticated, you can view the feed by going to `/feed`
