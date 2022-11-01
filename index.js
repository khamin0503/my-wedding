var http = require('http');
var fs = require('fs');
const port = process.env.PORT || 5000;
http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end("Welcome to GeeksforGeeks");
}).listen(port);