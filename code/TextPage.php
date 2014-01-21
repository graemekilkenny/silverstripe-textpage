<?php
class TextPage extends Page {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class TextPage_Controller extends Page_Controller {

	public function init() {
      	if(Director::fileExists(project() . "/css/textpage.css")) {
         	Requirements::css(project() . "/css/textpage.css");
      	} else {
         	Requirements::css("TextPage/css/textpage.css");
      	}
      	parent::init();   
    }
	

}
