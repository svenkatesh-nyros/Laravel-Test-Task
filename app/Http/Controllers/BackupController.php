<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
	// index function executes on calling controller
    public function index()
    {
    	$result = array('status' => false, 'message'=> '');
    	$output = NULL;
    	$return_val = NULL;
    	$result_val;

		$databases=array("users", "students", "books"); // databases array

		for ($i=0; $i < count($databases); $i++) { 
			$result_val = $this->backupDatabase($databases[$i]); // calling backupDatabase function
		}

		// checking function return value
		if ($result_val == 0) {
			$result['status'] = true;
			$result['message'] = "Backup successful for ".strtoupper(implode(",", $databases))." databases";
		} else {
			$result['status'] = false;
			$result['message'] = "Something went wrong";
		}

		// return the final result
		return json_encode($result);
	}

	// executing backupDatabase function
	public function backupDatabase($db_name)
	{
		$filename = $db_name.'_backup_'.date('G_a_m_d_y').'.sql'; // database backup filename

		// exec function to backup databases
		$result = exec('mysqldump -u root -proot "'.$db_name.'" >/home/nyros/Desktop/bak/"'.$filename.'"', $output, $return_val);

		return $return_val;
	}
}
