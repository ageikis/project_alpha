<?php
	require_once '../view/view.php';
    require_once '../model/objects.php';

	class controller {

		protected $_view;
        protected $_model;

		public function __construct() {
			$this->_view = new view();
            $this->_model = new model();
		}

		function text( $text ) {
			$temp = "<p id='selfInput'>" . $text . "</p>";
		}

		/**
		*	SQL-Query wird noch geschrieben, dazu vermutlich von Michael
		**/

		function systemOutput() {
			$result = "SQL-Query";

			$temp = "<p>" . $result . "</p>";
		}
	}