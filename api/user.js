const express = require('express');
const Joi = require('joi');

const router = express.Router();

const queries = require('../db/queries');



router.get('/', (req, res)=>{
    queries.getAll().then(users => {
        res.json(users);
    });
});

router.get('/:id', (req, res)=>{
    var user = users.find(u=> u.id === parseInt(req.params.id));
   if(!user) res.status(404).send('User not found');
    res.send(user);
}); 

router.post('/', (req, res)=> {
    //check data
    const {error} = validateUser(req.body); // result.eroor
    console.log(error);
    //si mauvaise entrée :
    if(error) return res.status(400).send(error.details[0].message);
    const user = {
        id: users.length +1,
        name: req.body.name
    };
    users.push(user);
    res.send(user);
});

router.put('/:id', (req, res)=>{
    //On cherche la data
    var user = users.find(u => u.id === parseInt(req.params.id));
    //pas data = 404
    if(!user) return res.status(404).send('WRONG WAY MY FRIEND');
    // on check la data
    const {error} = validateUser(req.body); // result.eroor
    console.log(error);
    //si mauvaise entrée :
    if(error) return res.status(400).send(error.details[0].message);
    user.name = req.body.name;
    res.send(user);
});

router.delete('/:id', (req,res)=>{
    //on check
    //existe ou pas
    var user = users.find(u=> u.id === parseInt(req.params.id));
    if(!user) return res.status(404).send("Cette personne n'existe pas");
    //delete
    const index = users.indexOf(user);
    users.splice(index, 1);
    //return course :id supprimée
    res.send(user+"Deleted");
});

function validateUser(user){
    const schema = {
        name: Joi.string().min(2).required()
    };
    return Joi.validate(user, schema);
}

module.exports = router;