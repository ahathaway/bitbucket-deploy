<?php
	define( "TOKEN", "ENZYhgtA129i04Jd6CWmWBpsxBIuXuURQ7Boo9bA2Yg=" );                        // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
	define( "REMOTE_REPOSITORY", "git@bitbucket.org:thrivsports/thriv-golfnow.git" );        // The SSH URL to your repository
	define( "DIR", "/home/golfmds/golfnow/golfmds/templates/view-applet_golfnow" );           // The path to your repostiroy; this must begin with a forward slash (/)
	define( "BRANCH", "golfnow" );                                                  // The branch route
	define( "LOGFILE", "deploy.log" );                                       // The name of the file you want to log to.
	define( "GIT", "/usr/bin/git" );                                         // The path to the git executable
	define( "BEFORE_PULL", "" );                                             // A command to execute before pulling
	define( "AFTER_PULL", "" );     // A command to execute after successfully pulling

require_once( "deployer.php" );
