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
		public function output()
		{
?>
			<form action="<?php echo $this->m_action; ?>" method="<?php echo $this->m_method; ?>">

			<label for="id_oak_name">Oak User</label>
			<input type="text" name="oak_name" id="id_oak_name" /><br>
			<label for="id_oak_email">Oak Email</label>
			<input type="text" name="oak_email" id="id_oak_email" /><br>
			<input type="submit" name="oak_submit" value="Add Oak User!" id="id_oak_email" /><br>
			</form>
	
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
