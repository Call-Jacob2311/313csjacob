const http = require('http');

const hostname = 'ec2-50-17-194-186.compute-1.amazonaws.com';
const port = 5432;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World\n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});