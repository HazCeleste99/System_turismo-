<?php 
/* Base controller
loads the models and views */

class Controller {
	//load model
	public function model($model){
		/* reqire model file */
		require_once '../app/Models/' . $model . '.php';

		/* instaciar model */
		return new $model;
	}

	/* load view */
	public function view($view, $data = []){
		/* check for view file */

		$files=('../app/Views/' . $view . '.php');
		
		if(file_exists($files)):
			require_once $files;
		else:
				// view does not exists
			die('La página solicitada no existe.');
		endif;
	}

}


 ?>