function getAllPantryItems(callback) {
    // Get all the items in the users pantry from the DB
    
    var results = {
        items: [
            {id:1, name:"Doritos"},
            {id:2, name:"Cereal"},
            {id:3, name:"Bacon"}
        ]
    }
    
    callback(null, results);
}

function getItemById(id, callback) {
    // Get item from the pantry that matches the ID from the DB
    
    var results = {id:id, name:"Cheerios"};
    
    callback(null, results);
}

function insertNewItem(name, callback) {
    // Create a new item in the DB with the provided variables
    
    var results = {success:true};
    
    callback(null, results);
}

module.exports = {
    getAllPantryItems: getAllPantryItems,
    getItemById: getItemById,
    insertNewItem: insertNewItem
};