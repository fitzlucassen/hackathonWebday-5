<?php
	ini_set('display_errors', 0);
	
	if(Request::isPost()){
		$data = Request::cleanRequest();

		$text = $data['message'];
		$Text = new Text($text);
		$results = [
			'words' = $Text->countWords(),
			'letters' = $Text->countLetters(),
			'sections' = $Text->countSections()
		]

	}
	die();
?>