
exports.up = function(knex, Promise) {
  return knex.schema.createTable('users', (table)=>{
    table.increments();
    table.timestamps();
    table.text('email');
    table.text('password');
    table.text('name');
    table.text('last_name');
    table.date('birth_date');
    table.text('country');
    table.text('city');
  });
};

exports.down = function(knex, Promise) {
  return knex.schema.dropTable('users');
};
