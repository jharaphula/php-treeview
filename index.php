/*Connecting to Database tempdb*/
mysql_connect('localhost', 'root');
mysql_select_db('tempdb');
 
/*Executing the select query to fetch data from table tab_treeview*/
$sqlqry="SELECT * FROM tab_treeview";
$result=mysql_query($sqlqry);
 
/*Defining an array*/
$arrayCountry = array();
 
while($row = mysql_fetch_assoc($result)){ 
$arrayCountry[$row['id']] = array("parent_id" => $row['parent_id'], "name" => $row['name']);
}
 
/*Checking is there any records in $result array*/
if(mysql_num_rows($result)!=0)
{
/*Calling the recursive function*/
buildTree($arrayCountry, 0);
}