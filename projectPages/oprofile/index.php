<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - OProfile Support";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Andrew Overholt";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Distributions OProfile plugin aims to bring the powerful call profiling
		capabilities of OProfile to Eclipse, in a manner that is easy to use for developers
		of any level of experience. Inexperienced users can, with 1 click, determine the parts
		of their code which use the most time while experienced users of OProfile can perform
		the same functions they would on the command-line but with a much more rich visualization
		of the results.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with CDT 5.0, the plugin can do the following:
		<ul>
          <li>Launch a local C/C++ application and OProfile simultaneously to start profiling (requires root password to execute OProfile commands)</li>
          <li>Automatically gather OProfile data and display in a tree viewer after a launch</li>
          <li>Configure OProfile to profile several events simultaneously with as many debug registers as the CPU/OProfile supports</li>
          <li>Configure OProfile to profile relevant shared-libraries and/or kernel modules</li>
          <li>Jump to the line-number of the corresponding source file on a double-click of a sample</li>
          <li>Prompt to save the default session on double-click</li>
          <li>View the oprofiled log</li>
          <li>One-click launch with sane defaults</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li> Robust filtering for events/sessions/images</li>
		  <li> Code-colourization (similar to <a href="http://www.eclemma.org/index.html" class="external text" title="http://www.eclemma.org/index.html" rel="nofollow">EclEmma</a>) for code hotspots</li>
          <li> Comparing two sessions/runs similar to functionality of opreport</li>
          <li> Increase test coverage</li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
			<table cellpadding="9">
				<tbody>
					<tr>
						<td>
							<a href="images/oprofile_view.png"><img src="images/oprofile_view_thumb.png"/></a>
						</td>
						<td>
							<a href="images/event_config_tab.png"><img src="images/event_config_tab_thumb.png"/></a>
						</td>
					</tr>
					<tr>
						<td style="text-align: center">
							OProfile View
						</td>
						<td style="text-align: center">
							Event Configuration Tab
						</td>
					</tr>
				</tbody>
			</table>
		</p>

		<h2>Try it out</h2>
		<p>
		  At present we have no update site, but you can check the project plugins out of SVN
		  directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
          You will need the 5 plugins under oprofile/trunk, and the 2 plugins under profiling/trunk:
<pre>     
	org.eclipse.linuxtools.oprofile.core
	org.eclipse.linuxtools.oprofile.core.linux.x86
	org.eclipse.linuxtools.oprofile.core.linux.x86_64
	org.eclipse.linuxtools.oprofile.launch
	org.eclipse.linuxtools.oprofile.ui
	org.eclipse.linuxtools.profiling.launch
	org.eclipse.linuxtools.profiling.ui
</pre>
		To install, run (as root) the script in org.eclipse.linuxtools.oprofile.core/natives/linux/scripts (currently only works on Fedora machines). This will ensure all the necessary programs are installed and create a wrapper for opcontrol to allow root authentication with the root password:
<pre>
	$ sudo ./install
</pre>

From there, run the plugin as an Eclipse Application.  So far, we have tested using Eclipse 3.4.1, CDT 5.0, OProfile 0.9.3 on Fedora 9 x86 and Fedora 10 x86_64.
		</p>
	<br/><br/><br/>
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