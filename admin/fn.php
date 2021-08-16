<?php

function del($tname, $fname, $value)
{
	$del = " delete from $tname where $fname = '" . $value . "' ";
	mysql_query($del);
}
