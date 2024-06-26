
php artisan serve

npm run dev

php artisan queque:work 
//to make reverb run



//when refresh it messages will be  gone because we didn't put it to a database
// you can put it to your database in event or in components
//hehehe

BROADCAST_DRIVER=reverb
BROADCAST_CONNECTION=reverb
REVERB_SERVER_HOST=0.0.0.0
REVERB_SERVER_PORT=8080
REVERB_APP_ID=your id
REVERB_APP_KEY=your key
REVERB_APP_SECRET=your secret
REVERB_HOST=0.0.0.0
REVERB_PORT=8080
REVERB_SCHEME=http


VITE_REVERB_APP_KEY="${REVERB_APP_KEY}"
VITE_REVERB_HOST="verbose-telegram-ww5v4p6pxpgf967v-8080.app.github.dev"
VITE_REVERB_PORT=443
VITE_REVERB_SCHEME=https
