const port = process.env.port || 3000;

const express = require('express');
const app = express();

const users = require('./api/user');

app.use(express.json());
app.use('/api/v1/users', users);

app.get('/moujasse', (req, res)=>{
    res.send('hello world');
}); 

app.listen(port, ()=>console.log(`Listening on port : ${port}`));


