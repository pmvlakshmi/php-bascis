<?php
// Note: In Drupal 8/9, to create a custom table by using hook_schema() 
// function in your Drupal module. Create the hook_schema() function inside the .install file.


use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Database\Schema;

class Queries extends ControllerBase {

  //check table name exits or not.
	public function tablename_exits_not() {
		$table_name = 'persons';
		if (\Drupal::database()->schema()->tableExists($table_name)) {
			return [
				'#markup' => 'Table exists.',
			];
		} else {
  	return [
				'#markup' => 'Table not exists.',
			];
	 }
	}

  
  // create a table with table name as "persons".
  public function createTable() {
    // Create a new table.
    $table_name = 'persons';
    // Define the schema for the table.
    $table_schema = [
      'fields' => [
          'id' => [
              'type' => 'serial',
              'unsigned' => TRUE,
              'not null' => TRUE,
          ],
          'name' => [
              'type' => 'varchar',
              'length' => 255,
              'not null' => TRUE,
          ],
          'age' => [
              'type' => 'int',
              'unsigned' => TRUE,
              'not null' => TRUE,
          ],
      ],
      'primary key' => ['id'],
    ];
    $result = Database::getConnection()->schema()->createTable($table_name, $table_schema);
    // Add a status message to indicate that the table was created successfully.
    \Drupal::messenger()->addMessage(t('Table @table created successfully', ['@table' => $table_name]));
    // Return a render array to display the status message.
    return [
      '#markup' => 'Table created successfully',
    ];
  }

  // Display list of tables in table formate.
  public function displayalltables() {
    // Connect to the default database.
   $connection = Database::getConnection();
   // OR $connection = \Drupal::database();
   // Get a list of all tables.
   $tables = $connection->schema()->findTables('%');
   // OR $tables = $connection->query("SHOW TABLES")->fetchCol();
   // Start building the table.
   $output = '<table>';
   $output .= '<tr><th>List of Table Names</th></tr>';
   // Iterate through the list of tables and add a row for each table.
   foreach ($tables as $table) {
     $output .= '<tr><td>' . $table . '</td></tr>';
   }
   // Close the table.
   $output .= '</table>';
   return [
    '#markup' => $output,
   ];
  }
}