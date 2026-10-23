<?
//voor datum weergaven in het nederlands
setlocale (LC_ALL, 'nl_NL');

/*
 * Utility routines for MySQL.
 */
 
//DB naam, niet vergeten aan te passen
$dbname = "roelengel_cases";

class MySQL_class {
    var $db, $id, $result, $rows, $data, $a_rows;
    var $user, $pass, $host;

    function Setup ($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    function Create ($db) {
        if (!$this->user) {
            $this->user = "xxx";
        }

        if (!$this->pass) {
            $this->pass = "xxx";
        }

        $this->db = $db;
        $this->id = @mysql_pconnect($this->host, $this->user, $this->pass) or
            MySQL_ErrorMsg("Unable to connect to MySQL server: $this->host : '$SERVER_NAME'");
        $this->selectdb($db);
    }

    function SelectDB ($db) {
        @mysql_select_db($db, $this->id) or
            MySQL_ErrorMsg ("Unable to select database: $db");
    }

    # Use this function is the query will return multiple rows.  Use the Fetch
    # routine to loop through those rows.
    function Query ($query) {
        $this->result = @mysql_query($query, $this->id) or
            MySQL_ErrorMsg ("Unable to perform query: $query");
        $this->rows = @mysql_num_rows($this->result);
        $this->a_rows = @mysql_affected_rows($this->result);
    }

    # Use this function if the query will only return a
    # single data element.
    function QueryItem ($query) {
        $this->result = @mysql_query($query, $this->id) or
            MySQL_ErrorMsg ("Unable to perform query: $query");
        $this->rows = @mysql_num_rows($this->result);
        $this->a_rows = @mysql_affected_rows($this->result);
        $this->data = @mysql_fetch_array($this->result);
        return($this->data[0]);
    }

    # This function is useful if the query will only return a
    # single row.
    function QueryRow ($query) {
        $this->result = @mysql_query($query, $this->id) or
            MySQL_ErrorMsg ("Unable to perform query: $query");
        $this->rows = @mysql_num_rows($this->result);
        $this->a_rows = @mysql_affected_rows($this->result);
        $this->data = @mysql_fetch_array($this->result) or
            MySQL_ErrorMsg ("Unable to fetch data from query: $query");
        return($this->data);
    }

    function Fetch ($row) {
        @mysql_data_seek($this->result, $row) or
            MySQL_ErrorMsg ("Unable to seek data row: $row");
        $this->data = @mysql_fetch_array($this->result) or
            MySQL_ErrorMsg ("Unable to fetch row: $row");
    }

    function Insert ($query) {
        $this->result = @mysql_query($query, $this->id) or
            MySQL_ErrorMsg ("Unable to perform insert: $query");
        $this->a_rows = @mysql_affected_rows($this->result);
    }


    function Update ($query) {

        $this->result = @mysql_query($query, $this->id) or

            MySQL_ErrorMsg ("Unable to perform update: $query");

        $this->a_rows = @mysql_affected_rows($this->result);

    }



    function Delete ($query) {

        $this->result = @mysql_query($query, $this->id) or

            MySQL_ErrorMsg ("Unable to perform Delete: $query");

        $this->a_rows = @mysql_affected_rows($this->result);

    }

}



/* ********************************************************************
 * MySQL_ErrorMsg
 *
 * Print out an MySQL error message
 *
 */



function MySQL_ErrorMsg ($msg) {

    # Close out a bunch of HTML constructs which might prevent
    # the HTML page from displaying the error text.
    echo("</ul></dl></ol>\n");
    echo("</table></script>\n");


    # Display the error message
    $text  = "<font color=\"#C0C0C0\"><p>Error: $msg :";
    $text .= mysql_error();
    $text .= "</font>\n";
    die($text);

}

function split_date($date, $what) {

	if($what == "y")
		return substr($date, 0, 4);
	if($what == "m")
		return substr($date, 5, 2);
	if($what == "d")
		return substr($date, 8, 2);
}

?>