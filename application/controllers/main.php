<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_page');	
	}
	public function check_username()
	{	
	$username = $this->input->post('userinput');
	$password = $this->input->post('password');
	$tmpl = array ('table_open' => '<table class="mytable">');
	$this->table->set_template($tmpl);

	$this->db->query('drop table if exists temp');
	$this->db->query('create temporary table temp as (SELECT wecanuser.userName,wecanuser.passWord FROM wecanuser WHERE wecanuser.userName = "'.$username.'"  AND wecanuser.passWord ="'.$password.'"  )');
	$query = $this->db->query('select * from temp;');
	$num_rows = $query->num_rows; //$num_rows = mysql_num_rows($sq);

		if ($num_rows > 0){
			$this->home();
			//echo $num_rows;
			echo "Logged in Successfullly";
		}
		else{
			$this->index();
			echo "Incorrect Username or Password Try again!";
			//echo $username;
			//echo $num_rows;
		}
	}
		public function home()
	{	
		
		$this->load->view('header');
		$this->load->view('home');
	}

	public function orders()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('orders');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Order');
		$crud->fields('invoiceNo','date', 'custID', 'items');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('custID','customers','custID');

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")
		$crud->required_fields('invoiceNo', 'date', 'custID');

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('custID', 'CustomerID');

		$output = $crud->render();
		$this->orders_output($output);
	}

	function orders_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('orders_view.php', $output);
	}


	public function querynav()
	{
		$this->load->view('header');
		$this->load->view('querynav_view');
	}

	public function query1()
	{
		$this->load->view('header');
		$this->load->view('query1_view');
	}

	public function query2()
	{
		$this->load->view('header');
		$this->load->view('query2_view');
	}

	public function blank()
	{
		$this->load->view('header');
		$this->load->view('blank_view');
	}
public function competitors()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('competitor');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('competitor');
		$crud->fields('competitor_name','competitor_role','team_name','titles');
		$crud->required_fields('competitor_name','competitor_role','team_name','titles');
		$crud->columns('competitor_id','competitor_name','competitor_role','team_name','titles');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('team_name','team','team_name');

		$crud->set_relation('titles','titles','titles');

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('competitor_id', 'Competitor ID');

		$output = $crud->render();
		$this->competitors_output($output);
	}

	function competitors_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('competitors_view.php', $output);
	}
	public function teams()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('team');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('teams');
		$crud->fields('team_name','nfa', 'acronym','nick_name','team_active_status');
		$crud->required_fields('team_name','nfa', 'acronym','team_active_status');
	
		$crud->set_relation('team_active_status','team_active_status','team_active_status');
		$crud->display_as('team_name', 'Team Name');

		$output = $crud->render();
		$this->teams_output($output);
	}

	function teams_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('teams_view.php', $output);
	}
	public function cards()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('card');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('cards');
		$crud->fields('start_date', 'end_date','competitor_id','team_name','card_active_state');
		$crud->required_fields('start_date','end_date','competitor_id','team_name','card_active_state');
		$crud->columns('card_id','start_date','end_date','competitor_id','team_name','card_active_state');


		$crud->set_relation('competitor_id','competitor','competitor_id');
		$crud->set_relation('competitor_id','competitor','{competitor_id} - {competitor_name}');
		$crud->set_relation('card_active_state','card_active_state','card_active_state');

		$crud->set_relation('team_name','team','team_name');

		$output = $crud->render();
		$this->cards_output($output);
	}

	function cards_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('cards_view.php', $output);
	}
	public function game()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('game');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('matches');

		$crud->fields('match_date','team1','team2','stadium','card_entry');
		$crud->required_fields('match_no','match_date','team1','team2','stadium','card_entry');
		$crud->columns('match_no','match_date','team1','team2','stadium','card_entry');
		$crud->set_relation('stadium','venue','{venue_name}-{stadium_name}');
		$crud->set_relation('team1','team','team_name');
		$crud->set_relation('team2','team','team_name');
		$crud->set_relation_n_n('card_entry','authorisation','card','matchNo','cardId','card_id');

		//$crud->set_relation('stadium_name','venue','stadium_name');
		//$crud->set_relation('card','competitor','{competitor_id} - {competitor_name}');
		//$crud->set_relation('card','competitor','competitor_id');

		$output = $crud->render();
		$this->game_output($output);
	}

	function game_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('match_view.php', $output);
	}
	public function venue()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		//table name exact from database
		$crud->set_table('venue');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('venue');
		$crud->required_fields('venue_name','stadium_name');
		$output = $crud->render();
		$this->venue_output($output);
	}

	function venue_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('venue_view.php', $output);
	}

	public function authorisation()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		//table name exact from database
		$crud->set_table('authorisation');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('authorisation');
		$crud->fields('match_no','card_id');
		$crud->required_fields('match_no','card_id');
		//$crud->set_relation('match_no','match','match_no');
		$crud->set_relation('match_no','match','Match No: {match_no}  {team1} Vs {team2}');
		//$crud->set_relation('card_id','card','card_id');
		$crud->display_as('match_no','Match No ');
		//$crud->display_as('card_id','Card ID');
		$crud->set_relation_n_n('card_id', 'authorisation', 'card', 'match_no', 'card_id', 'card_id');
		$output = $crud->render();
		$this->authorisation_output($output);
	}
	function authorisation_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('authorisation_view.php', $output);
	}
	public function check_authorisation()
	{
		$this->load->view('header');
		$this->load->view('authorisation_check_view');
	}
	public function check_authorisation_output2()
	{	
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('authorisation_check_view_output.php');
	}
	public function all_main_entries()
	{
		$this->load->view('header');
		$this->load->view('all_entries_view.php');	
	}
	public function add_entries()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		//table name exact from database
		$crud->set_table('logs');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Entries');
		$crud->fields('cardId','matchNo','entry_time','venue_name','entry_successful');
		$crud->required_fields('cardId','matchNo','entry_time','venue_name','entry_successful');
		$crud->columns('cardId','matchNo','entry_time','venue_name','entry_successful');
		$crud->set_relation('cardId','card','card_id');
		$crud->set_relation('venue_name','venue','{venue_name}-{stadium_name}');
		$crud->set_relation('matchNo','game','Match No: {match_no}  {team1} Vs {team2}');
		//$crud->set_relation('matchNo','game','match_no');
		$output = $crud->render();
		$this->add_entries_output($output);
	}

	function add_entries_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('add_entries_view.php', $output);
	}
	
	function attempted_entries($output = null)
	{
		$this->load->view('header');
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('attempted_entries_view.php', $output);
	}
	function failed_entries($output = null)
	{
		$this->load->view('header');
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('failed_entries_view.php', $output);
	}
	function successful_entries($output = null)
	{
		$this->load->view('header');
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('successful_entries_view.php', $output);
	}
	function help($output = null)
	{
		$this->load->view('header');
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('help_view.php', $output);
	}
}
