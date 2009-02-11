<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Tools Project";
	$pageKeywords	= "Eclipse, Linux, autoconf, automake, autotools, CDT, OProfile, Valgrind, RPM, systemtap";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
	    <table border="0" cellpadding="5">
	      <tr>
	        <td valign="top">
	          <img alt="Screenshot of Linux Tools projects" border="0" src="images/mainscreenshot.png">
	        </td>
	        <td></td>
	        <td valign="top">
	          <p>
	          The Linux Tools project aims to bring a <b>full-featured C and C++ IDE</b> to Linux developers.  
	          We build on the source editing and debugging features of the
	          <a href="http://eclipse.org/cdt">CDT</a> and integrate popular native
	          development tools such as the GNU Autotools, Valgrind, OProfile, RPM, Systemtap, etc.  Current
	          projects include Autotools build integration, a Valgrind heap usage analysis tool, and an OProfile call profiling
	          tool.  In the future we hope to expand into the area of tracing tools.
	          </p>
	          <p>
	          The project also provides a place for Linux
	          distributions to collaboratively overcome issues surrounding distribution packaging of
	          Eclipse technology.  The project produces both <em>best practices</em> and tools related to
	          packaging.  One of our future goals in this area is to provide a source archive of the
	          Eclipse SDK that can be used by all Linux distributions building and distributing it.
	          </p>

	          <table border="0" cellpadding="5">
	            <tr height=9>

	            <!-- Downloads -->
	            <tr>
	              <td width=20></td>
	              <td><a href="/linuxtools/downloads.php"><img border=0 src="images/downloads.gif"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="/linuxtools/downloads.php">Downloads</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>Get our latest <b>0.1.0</b> release (<em>2009-02-11</em>)!</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <!-- Get Involved -->
	            <tr>
	              <td width=20></td>
	              <td><a href="/linuxtools/getInvolved.php"><img border=0 src="images/community.jpg"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="/linuxtools/getInvolved.php">Get Involved</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>Find out how you can get involved with the project</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <!-- Plans -->
	            <tr>
	              <td width=20></td>
	              <td><a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros"><img border=0 src="images/reference.png"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros">Plans</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>See the project plans</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <tr height=11></tr>

	          </table>

	          <!-- Project News -->
	          <div class="homeitem3col">
				<h3>Project News</h3>
				<ul>
				    <li><em>2009-02-09</em>:  Our 0.1.0 release is <a href="http://www.eclipse.org/linuxtools/downloads.php">available</a>!</li>
					<li><em>2008-12-18</em>:  Our website is being re-vamped.</li>
				</ul>
              </div>

	        </td>
	      </tr>
	    </table>
	</div>

	<div id="rightcolumn" class="sideitem" style="text-align: center">
	   <h6>Incubation</h6>
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
