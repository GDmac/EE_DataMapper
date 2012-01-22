<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Testmodule for datamapper-integration By GDmac
 *
 */
 
class Datamapper_test_mcp {
	
	public $return_data;
	private $_base_url;
	
	// ==================================================================================
	public function __construct()
	{
		$this->EE =& get_instance();
		
		$this->_base_url = BASE.AMP.'C=addons_modules'.AMP.'module=datamapper_test'.AMP.'M=show_module_cp';

		$this->EE->cp->set_right_nav(array(
			'module_home'	=> $this->_base_url,
			// right nav items here.
		));

		// ~~~~~~~~~~~~~~~~~~~~~~~
		// load DataMapper library

		$this->EE->load->library('datamapper');

	}


	// ==================================================================================
	public function index()
	{
		$this->EE->cp->set_variable('cp_page_title', lang('datamapper_test_module_name'));


		// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
		// load some datamapper model(s) for this module

		$this->EE->load->model('dm_test');
		$ret = '';

		// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
		// example for updating a counter

		$count_item = new dm_test();
		$count_item->where('id',1)->get();

		$count_item->counter++;

		// name is required, uncomment to see validate error
		//$count_item->name='';

		$count_item->validate();
		
		if($count_item->valid)
		{
			$count_item->save();
		}
		else
		{
			$ret .= $count_item->error->string;
		}

		unset($count_item);		


		// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
		// example get all records

		$data = new dm_test();
		$data->get();

		$ret .= '<hr>';

		foreach($data as $obj)
		{
			$ret .= "<p>{$obj->id} : {$obj->name} : {$obj->counter}</p>";
		}



		return "<h1>Welcome to the DataMapper demo</h1>" . $ret;
	
	}



	
}
/* End of file */
