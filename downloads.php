<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Linux Tools Project Downloads";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p> 
		The preferred method of installation is via the 
		<a href="http://wiki.eclipse.org/Linux_Tools_Project/User_Guide#Installation">Update Manager (instructions available)</a>.
		</p>
		
		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>0.1.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/index.php/Linux_Tools_User_Guide#Installation"><img border=0 src="/linuxtools/images/icon-help.gif"></a></h3> 
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/linuxtools/new">New & Noteworthy</a> (Released 2009-02-11).
		<br>&nbsp;&nbsp;&nbsp;Requires JRE 5.0 and Eclipse 3.4.
		<br>&nbsp;&nbsp;&nbsp;Specific tools require their underlying native tools (ex. GNU Autotools, Valgrind, OProfile).
		<br>&nbsp;&nbsp;&nbsp;Other dependencies of some tools include <a href="http://eclipse.org/cdt">CDT</a> and <a href="http://eclipse.org/birt">BIRT</a>.
		<br>&nbsp;&nbsp;&nbsp;Installations via the update site will automatically get these dependencies.
		<ul> 
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/linuxtools-Master-incubation-N200901201517.zip">
					<img border=0 src="/linuxtools/images/icon-save.gif">
				</a>
				&nbsp;&nbsp;<b>download.eclipse.org/technology/linuxtools/update</b>
			</li>
		</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	   </div>
	   </div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>