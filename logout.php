<?php
include 'includes/header.php';

	/* TO-DO: Include header.php and session.php
			  Hint: Both header.php and session.php are inside the includes folder
	*/
	/* TO-DO: Include session.php to handle login sessions
              Hint: Both header.php and session.php are inside the includes folder
    */


	logout();											// Call the logout function to terminate session
	header('Location: index.php');						// Redirect to index page
	exit;												// Stop further code running
?>
