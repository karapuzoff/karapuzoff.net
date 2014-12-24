<?
##
## Show GIT version
##
function gitversion() {
	exec('git describe --always',$version_mini_hash);
	exec('git rev-list HEAD | wc -l',$version_number);
	exec('git log -1',$line);
	$version[] = "<abbr title='$version_mini_hash[0]'>1.".trim($version_number[0])."</addr>";
	$version[] = "v1.".trim($version_number[0]).".$version_mini_hash[0] (".str_replace('commit ','',$line[0]).")";
	return $version[0];
}
?>