const http = require('http');

const hostname = 'localhost';
const port = 8888;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  if (res.statusCode == 400) {return console.error(error)};
  if (req == "/home") {return };
  if (req == "/getData") {return };
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World\n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});