let mysql = require("mysql");

let connection = mysql.createConnection({
  host     : '127.0.0.1', 
  user     : 'root',
  password : '',
  database : 'form_ noticias' 
});

connection.connect(function(err) {
  if (err) { 
    throw err;
  } else {
    console.log("Conexión exitosa a la base de datos");
  }
});