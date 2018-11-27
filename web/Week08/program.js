var http = require('http');
var url = require('url');
var fs = require('fs')
var fileJson = require('./JsonFile.json');
var dt = require('./date');

function onRequest(req, callback){
	var q = url.parse(req.url, true).query;
	if(q.month){
		  var q = url.parse(req.url, true).query;
		  var txt = q.year + " " + q.month;
		callback(202, {"Content-Type": "text/html"}, txt);
	}
	if(req.url == '/otherPage'){
		callback(202, {"Content-Type": "text/html"}, 'The Date and time are: ' + dt.myDateTime());
	}
	if(req.url == '/home'){
		callback(202, {"Content-Type": "text/html"}, '<h1>Welcome To Your Home Page</h1>');
	}
	if(req.url == '/getData'){		
	var array = {"name":"Jacob Call","class":"cs313:01"};
		callback(202, {"Content-Type": "application/json"} , fileJson);	
	}
	if(req.url != '/home' && req.url != '/getData' && !q.month){
		callback(404, {"Content-Type": "text/html"}, '<h1>Page Not Found</h1>');
	}
}

http.createServer(function (req, res) {
	onRequest(req, function(pageStatus, type, response){
    res.writeHead(pageStatus, type);
	if(req.url == '/getData'){	
		res.write(response.name);
		res.write(' ');
		res.write(response.class);
	}
	else{
		res.write(response);
	}
	
    res.end();
	});
}).listen(8080);