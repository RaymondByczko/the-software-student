<?php
/*
 * @file OakDatabase.php
 * @location thesoftwarestudent/sandbox20170413/lib/
 * @author Raymond Byczko
 * @company self
 * @purpose This php file presents a class providing database for Oak.
 * @change_history 2017-04-14 April 14, 2017, Added validation_form.
 * @change_history 2017-05-02 May 2, 2017, Added sql for submissions table.
 * Added select method.
 */
?>
<?php
	class OakDatabase
	{
		private $m_dbfile = NULL;
		private $m_dbh = NULL;

		// m_sql_submissions: contains the string used to select from the submissions table.  It is built up
		// in the constructor for ease of understanding.
		private $m_sql_submissions = NULL;
		

		public function __construct($dbfile)
		{
			$this->m_dbfile = $dbfile;

			// I like this way of building a sql because the columns selected are seperated from the table etc.
			$this->m_sql_submissions = 'SELECT submission_id, name, email, utc_time, local_time';
			$this->m_sql_submissions .= ' ';
			$this->m_sql_submissions .= 'FROM main.submissions';
			$this->m_sql_submissions .= ' ';
			$this->m_sql_submissions .= 'ORDER by submission_id';
		}
		public function validation($enable)
		{
		}
		public function open()
		{
			$dir = 'sqlite:'.$this->m_dbfile;
			$this->m_dbh = new \PDO($dir);
			$this->m_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		private function close()
		{
		}
		public function create()
		{
			$this->create_table();
		}

		public function create_table()
		{
			$query = 'CREATE TABLE IF NOT EXISTS submissions (';
			$query .= 'submission_id integer PRIMARY KEY, ';
			$query .= 'name text NOT NULL, ';
			$query .= 'email text NOT NULL UNIQUE, ';
			$query .= 'utc_time text NOT NULL, ';
			$query .= 'local_time text NOT NULL';
			$query .= ');';
			$this->m_dbh->exec($query);
		}

		public function insert_submission($name, $email)
		{
			$query = 'INSERT INTO submissions (name, email, utc_time, local_time) ';
			$query .= 'VALUES';
 			$query .= '(';
			$query .= "'".$name."', ";
			$query .= "'".$email."', ";
 			$query .= "datetime('now'), ";
			$query .= "datetime('now', 'localtime')";
 			$query .= ');';	
			try {
				$this->m_dbh->exec($query);
			}
			catch (PDOException $e)
			{
				return 'INSERT:'.$e->getCode();
			}
			return 'INSERT:submissionok';
		}

		public function create_table_extra()
		{
			$query = 'CREATE TABLE contacts (';
			$query .= 'contact_id integer PRIMARY KEY, ';
			$query .= 'first_name text NOT NULL, ';
			$query .= 'last_name text NOT NULL, ';
			$query .= 'email text NOT NULL UNIQUE, ';
			$query .= 'phone text NOT NULL UNIQUE';
			$query .= ');';
			$this->m_dbh->exec($query);
		}
		public function output()
		{
		}
		public static function interface_check()
		{
			
		}

		/*
		 * Returns a results set of rows selected via sql.
		 * When called with no parameter, it will use a select
		 * to fetch all rows and columns from submissions.
		 */
		public function select($sql = null)
		{
			$query_sql = $sql;
			if ($sql == null)
			{
				$query_sql = $this->m_sql_submissions;
			}
			try {
				$query_results = $this->m_dbh->query($query_sql);
				return $query_results;
			}
			catch (PDOException $e)
			{
				// @todo log exception.
				// rethrow.
				throw $e;
				// @todo consider alternative method of returning.
				// return 'INSERT:'.$e->getCode();
			}
			// @todo consider alternative method of returning.
			// return 'INSERT:submissionok';

		}
	}
?>
