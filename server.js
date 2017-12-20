var phpServer = require('node-php-server');

// Create a PHP Server 
phpServer.createServer({
   port: 9000,
   hostname: '127.0.0.1',
   base: '.',
   keepalive: false,
   open: false,
   bin: 'php',
   router: __dirname + '/index.php'
});

// Close server 
// phpServer.close();