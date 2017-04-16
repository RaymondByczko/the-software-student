<?php
/*
 * @file OakDatabase.php
 * @location thesoftwarestudent/sandbox20170413/lib/
 * @author Raymond Byczko
 * @company self
 * @purpose This php file presents a class providing database for Oak.
 * @change_history 2017-04-14 April 14, 2017, Added validation_form.
 */
?>
<?php
	class OakDatabase
	{
		private $m_dbfile = NULL;
		private $m_dbh = NULL;

		public function __construct($dbfile)
		{
			$this->m_dbfile = $dbfile;
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
			$query = 'CREATE TABLE submissions (';
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
			$query .= $email."', ";
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
	}
?>
