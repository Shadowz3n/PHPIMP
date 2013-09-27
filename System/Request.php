<?php
class Request{
	public static function factory($uri = TRUE, $client_params = array(), $allow_external = TRUE, $injected_routes = array()){
		if (!Request::$initial){

			if (isset($referrer)){
				$request->referrer($referrer);
			}

			if (isset($requested_with)){
				$request->requested_with($requested_with);
			}

			if (isset($body)){
				$request->body($body);
			}

			if (isset($cookies)){
				$request->cookie($cookies);
			}
		}
		else
		{
			$request = new Request($uri, $client_params, $allow_external, $injected_routes);
		}

		return $request;
	}
}
