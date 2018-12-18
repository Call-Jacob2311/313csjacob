// Now running an actual webserver. In a way it is replacing Apache.

var express = require("express");

var app = express();

// This is is safe location. Where you can access static files that do not need to change / dynamic processing.
app.use(express.static("public"));

app.set("views" , "views");
app.set("view engine", "ejs");

// Request for the root path directory
// It's also a callback function. When someone reuqests this, call this function
app.get("/", function(req, res) {
    console.log("Recieved a request for the /");
    res.write("This is the root.");
    res.end();
});

/*
function handleRootRequest(req, res) {
    console.log("Recieved a request for the /");
    
    res.write("This is the root");
    res.end();
}
*/

app.get("/home", function(req, res) {
    // Controller
    console.log("Recieved a request for the home page");
    var name = getCurrentLoggedInUserAccount();
    var emailAddress = "john@email.com";
    
    var params = {username: name, email: emailAddress};

    res.render("home", params);
});

// When we swicth to Heroku, will need to change the port
app.listen(5000, function() {
    console.log("The server is up and listening at port 5000")
});

/****************
* Models
******************************/
function getCurrentLoggedInUserAccount() {
    // GetDatabase connection
    // Make sure they have premission to be on site
    return "John";
}