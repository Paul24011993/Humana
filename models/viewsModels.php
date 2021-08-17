<?php

	class viewsModels{
		protected function get_views_models($views){
			
			$accepted_routes = array(
				"home",
			);
			if(in_array($views, $accepted_routes)){
				// Si el archivo existe
				if(is_file(ABSPATH . "views/contents/" . $views . ".php")){
					$content = ABSPATH . "views/contents/" . $views . ".php";
					
				}else{
					// Si no exixte la pagina nos envia al login
					$content = "login";
				}
			} else {
			

				if($views == "login"){
					$content = "login";
				} else if($views == "index"){
					$content = "login";
				} else{
					$content = "404";
				}

			}
			return $content;
		}
	}