<?php

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: LICENSE.html
*/

	define('QA_MYSQL_HOSTNAME', 'srvc46.turhost.com'); // try '127.0.0.1' or 'localhost' if MySQL on same server
	define('QA_MYSQL_USERNAME', 'fidatekf_vstream_admin');
	define('QA_MYSQL_PASSWORD', 'YmB*cdaJL.Cm');
	define('QA_MYSQL_DATABASE', 'fidatekf_vstream_db');

	define('QA_MYSQL_TABLE_PREFIX', 'qa_');	
	define('QA_EXTERNAL_USERS', false);

	define('QA_HTML_COMPRESSION', true);
	define('QA_MAX_LIMIT_START', 19999);
	define('QA_IGNORED_WORDS_FREQ', 10000);
	define('QA_ALLOW_UNINDEXED_QUERIES', false);
	define('QA_OPTIMIZE_LOCAL_DB', false);
	define('QA_OPTIMIZE_DISTANT_DB', false);
	define('QA_PERSISTENT_CONN_DB', false);
	define('QA_DEBUG_PERFORMANCE', false);

	
