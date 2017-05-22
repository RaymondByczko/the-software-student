<?php
/*
 * @file OakForm.php
 * @location thesoftwarestudent/sandbox20170413/lib/
 * @author Raymond Byczko
 * @company self
 * @purpose This php file presents a class to present a form for Oak registration.
 * @change_history 2017-04-14 April 14, 2017, Added validation_form.
 * @change_history 2017-05-15 May 15, 2017, Added bootstrap grid around signup form.
 */
?>
<?php
	class OakForm
	{
		private $m_method = NULL;
		private $m_action = NULL;
		private $m_validation = TRUE;
		public function __construct($method, $action)
		{
			$this->m_method = $method;
			$this->m_action = $action;
		}
		public function validation($enable)
		{
			$this->m_validation = $enable;
		}

		/*
		 * validation_form This function produces a javascript-html fragment for the
		 * correct javascript code to call if validation is enabled.  Otherwise it
		 * returns an empty string.
		 *
		 * @note validformdata is in oakvalidate.js
		 */
		public function validation_form()
		{
			$ret_string = '';
			if ($this->m_validation)
			{
				$ret_string = 'onsubmit="validformdata();"';
				// $ret_string = 'onsubmit="dothis();"';

				// $ret_string = "onsubmit="alert('inside validate form');"";

				
				/*
				$ret_string .= 'onsubmit=';
				$ret_string .= '"';
				$ret_string .= 'alert(';
				$ret_string .= "'inside validate form'";
				$ret_string .= ');';
				$ret_string .= 'return false;"';
				*/
				
			}
			return $ret_string;
		}
		public function output()
		{
			/* if validation is enabled, bring in the javascript code we need for it. */
			/* @todo The specification of an external javascript file needs to be done elsewhere. */
			if ($this->m_validation)
			{
?>
				<!--<script type="text/javascript" src="/sandbox20170413/js/oakvalidate.js"></script>-->
<?php
			}
?>
			<div class="class_outer_oak_form">
			<div class="class_oak_form">
			<form name="oak_form" action="<?php echo $this->m_action; ?>" method="<?php echo $this->m_method; ?>" <?php echo $this->validation_form(); ?>>

			<div class="row row-eq-height" style="">
			<div class="col-md-6 col-style" style="" >
			<label for="id_oak_name">Oak User</label>
			</div>
			<div class="col-md-6 col-style" style="" >
			<input type="text" name="oak_name" id="id_oak_name" />
			</div>
			</div>
			<div class="row row-eq-height">
			<div class="col-md-6 col-style">
			<label for="id_oak_email">Oak Email</label>
			</div>
			<div class="col-md-6 col-style">
			<input type="text" name="oak_email" id="id_oak_email" />
			</div>
			</div>
			<div class="row row-eq-height">
			<div class="col-md-6 col-style">
			<input type="submit" name="oak_submit" value="Add Oak User!" id="id_oak_email" /><br>
			</div>
			<div class="col-md-6 col-style">
			</div>
			</div>
			</form>
			</div>
			</div>

			<!-- @todo This should be removed. -->
			<script type="text/javascript" src="/sandbox20170413/js/oakvalidate.js"></script>
	
<?php
		}
		/*
		 * interface_check: this method is intended to be called in the page delivered to m_action.
		 * Whether, post or get, this method will check if the appropriate superglobal variable in
		 * an array element exists.
		 *
		 * This is usually not called by the php page that actually presents the form via the output
		 * method.
		 *
		 * This method is declared static because it does not depend on object state.  It doesn't need
		 * an object to be instantiated; its actually preferred to not do so since the intention
		 * is clearer for its designed purpose.

		 */
		public static function interface_check()
		{
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if (!array_key_exists('oak_name', $_POST))
				{
					return FALSE;
				}
				if (!array_key_exists('oak_email', $_POST))
				{
					return FALSE;
				}
				return TRUE;
			}
			if ($_SERVER['REQUEST_METHOD'] == 'GET')
			{
				if (!array_key_exists('oak_name', $_GET))
				{
					return FALSE;
				}
				if (!array_key_exists('oak_email', $_GET))
				{
					return FALSE;
				}
				return TRUE;
			}

		}
	}
?>
