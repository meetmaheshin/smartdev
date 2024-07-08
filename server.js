
/**
 * npm install
 * npm install express
 * npm install socket.io
 */

require('dotenv').config();
const express = require('express');
const cors = require('cors');
const app = express();
var fs = require( 'fs' );

var http = require('http');
var https = require('https');
server = http.createServer(app);
if(process.env.APP_ENV === 'production'){
    var httpsOptions = {
        key: fs.readFileSync('/etc/letsencrypt/live/smartdev3.com/privkey.pem'),     
        cert: fs.readFileSync('/etc/letsencrypt/live/smartdev3.com/fullchain.pem'),  
        requestCert: false,     
        rejectUnauthorized: false
    };
    server = https.createServer(httpsOptions, app);
    app.use(cors())
}
const io = require('socket.io')(server,{
    cors:{origin:"*"}
});
global.io = io;
// socket.on means receiving message
// socket.emit means sending msg

global.users = [];

io.on('connection', (socket) => {
    var connectedId = '';
    socket.on('join', function (data) {
        socket.join(data.id);
        connectedId= data.id;
        users[data.id] = socket.id;
    });
    socket.on('user_connected', function (data) {
        users[data.sender_id] = socket.id;
        io.emit("user_connected",data)
        io.emit("updateUserStatus", {'users':users,'chatStatus':1,'user_id':connectedId});
    });


    socket.on('sendNotification', (data) => {
      io.emit('new_notification', data);
    });
    
    // socket.on('send_message_mew', (data) => {
    //     io.to(data.receiver_id).emit('send_message_dashboard_new', data);
    // });
    
 
    // listen from client
    socket.on("send_message",function(data){
        io.to(data.receiver_id).emit('new_message', data);
        io.to(data.receiver_id).emit('send_message_dashboard_new', data);
    });

    socket.on('disconnect', (socket) => {
        let i = users.indexOf(socket.id);
        users.splice(i,1,0);
          // REMOVE FROM SOCKET USERS
        // io.emit("updateUserStatus", {'users':users,'chatStatus':0,'user_id':connectedId});
    });
})

const port = 4000

server.listen(port, () => {
    console.log('Server is running. Port: '+port)
});
