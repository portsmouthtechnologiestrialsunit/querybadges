<?php 
namespace PTTU\QueryBadges;
use REDCap;
require_once __DIR__ . "/../../redcap_connect.php";

class QueryBadges extends \ExternalModules\AbstractExternalModule {
	// This method will be called by the redcap_project_home hook
	function redcap_project_home_page($project_id) {
    // Put your code here to get executed by the hook
		echo "<div></div>";
	}
	
	function drw_enabled($project_id) {
		$result = $this->query(
			'select data_resolution_enabled = 2 as drw from redcap_projects where project_id = ?',
			[$project_id]
		);
		if ($result->affected_rows() = 0) {
			return 0;
		} else {
			return 1;
		}
	}
}
