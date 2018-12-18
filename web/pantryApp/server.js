// Use the express library
const express = require("express");

// GET the directory path
const path = require("path");


// GET pantry controller js file
const pantryController = require("./controllers/pantryController.js");

// Get the Heroku Port. OR. Send them to local.
const PORT = process.env.PORT || 5000;

// Create node application
var app = express();

// Set up static files to be rendered to the user.
app.use(express.static(path.join(__dirname, "public")));

app.use(express.json());  // Support JSON encoded bodies
app.use(express.urlencoded({extended: true})); // Support URL encoded bodies


/*****************************
* GET REQUESTS
******************************************/
app.get("/pantryItems", pantryController.getPantryList);
app.get("/pantryItem", pantryController.getPantryItem);

/*****************************
* POST REQUESTS
******************************************/
app.post("/pantryItem", pantryController.postPantryItem);

// Example ports 8080, 5000
app.listen(PORT, function() {
    console.log("Server listening on port: " + PORT);
}); 