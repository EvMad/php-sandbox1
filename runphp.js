// import phpServer from 'php-server';
const phpServer = require('node-php-server');

const server = await phpServer({
    port: 8000,
    keepalive: false,
    open: false,
    bin: 'php',
    router: __dirname + '/server.php'
});
console.log(`PHP server running at ${server.url}`);

//close server
phpServer.close();