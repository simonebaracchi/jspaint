<?
/*
    jsPaint v0.1 - a web-based drawing tool
    Copyright (C) 2009 Simone Baracchi

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
include("config.php");

function connetti_al_db() {
	global $db_host, $db_user, $db_pass, $db_name;
	$connessione = mysql_connect($db_host, $db_user, $db_pass)
	       or die("Connection refused by database<br>" . mysql_error() . "<br>(" . $db_user . ")");
	mysql_select_db($db_name) or die("Database selection unsuccessful<br>" . mysql_error());
	return $connessione;
}
?>
