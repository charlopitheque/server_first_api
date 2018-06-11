const environnement = process.env.NODE_ENV ||'development';
const config = require('../knexfile');
const environnementConfig = config[environnement];
const knex = require('knex');
const connection = knex(environnementConfig);
module.exports = connection;