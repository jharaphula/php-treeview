function buildTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {
foreach ($array as $categoryId => $category) {
if ($currentParent == $category['parent_id']) {
if ($currLevel > $prevLevel) echo "<ol id='menutree'>"; 
if ($currLevel == $prevLevel) echo "</li>";
echo '<li> <label class="menu_label" for='.$categoryId.'>'.$category['name'].'</label><input type="checkbox" id='.$categoryId.' />';
if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }
$currLevel++; 
buildTree ($array, $categoryId, $currLevel, $prevLevel);
$currLevel--;   
}
}
if ($currLevel == $prevLevel) echo "</li> </ol>";
}