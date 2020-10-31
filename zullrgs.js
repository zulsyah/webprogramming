const express = require("express")
const epf = require("express-php-fpm").default
const https = require('https');
const fs = require('fs');

const credentials = {
  key: fs.readFileSync('ssl/10.10.2.231.key'),
  cert: fs.readFileSync('ssl/10.10.2.231.crt')
};

const options = {
    // root of your php files
    documentRoot: __dirname + "/",
   
    // extra env variables
    env: {},
   
    // connection to your php-fpm server
    socketOptions: { port: 9000 },
}

const cnc = express()
const httpRedirect = express();

cnc.use("/", epf(options))

// set up a route to redirect http to https
httpRedirect.use(function(req, res, next) {
  if(!req.secure) {
    // console.log("redirect to HTTPS");
    return res.redirect(['https://', req.get('Host'), req.url].join(''));
  }
  next();
});

httpRedirect.listen(80);

var server = https.createServer(credentials,cnc);
server.listen(443, () => console.log('eMooVit CNC is running in HTTPS mode'));