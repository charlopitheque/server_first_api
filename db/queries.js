const knex = require('./connect');

module.exports = {
    getAll(){
        return knex('users');
    }
};