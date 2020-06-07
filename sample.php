<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>VSFTPD(8) :: RUM</title>
	</head>
	<body>
		<div class="container-fluid">

			<?php
				require('navbar.php');
			?>

			<div class="row" id="title">
				<div class="col-sm-3" id="left_title">
					<h1>VSFTPD(8)</h1>
				</div>
				<div class="col-sm-6" id="center_title">
					<h1>BSD System Manager's Manual</h1>
				</div>
				<div class="col-sm-3" id="right_title">
					<h1>VSFTPD(8)</h1>
				</div>
			</div>
			<div class="row" id="page">
				<div class="col-sm-12 subtitle">
					<h2>NAME</h2>
				</div>
				<div class="col-sm-12 text">
					<p>
						<b>vsftpd</b> — Very Secure FTP Daemon
					</p>
				</div>
				<div class="col-sm-12 subtitle">
					<h2>DESCRIPTION</h2>
				</div>
				<div class="col-sm-12 text">
					<p>
						vsftpd is the Very Secure File Transfer Protocol Daemon. The server can be launched via a “super-server” such as inetd(8) or xinetd(8).  Alternatively, vsftpd can be launched in standalone mode, in which case vsftpd itself will listen on the network. This latter mode is easier to use, and recommended. It is activated by setting listen=YES in /etc/vsftpd.conf. Direct execution of the vsftpd binary will then launch the FTP service ready for immediate client connections.
					</p>
				</div>
				<div class="col-sm-12 subtitle">
					<h2>OPTIONS</h2>
				</div>
				<div class="col-sm-12 text">
					<p>
						An optional configuration file or files may be given on the command line. These files must be owned as root if running as root. Any command line option not starting with a "-" character is treated as a config file that will be loaded. Note that config files are loaded in the strict order that they are encountered on the command line.  If no config files are specified, the default configuration file of /etc/vsftpd.conf will be loaded, after all other command line options are processed.
					</p>
					<p>
						Supported options are:
					</p>
					<div class="row">
						<div class="col-sm-6 param">
							<p>
								-v
							</p>
						</div>
						<div class="col-sm-6 define">
							<p>Print the version information and exit, even if other options are
	             encountered.
	             			</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 param">
							<p>-ooption=value</p>
						</div>
						<div class="col-sm-6 define">
							<p>
								Set a single option, value pair as per the format in the config
             file. Multiple -o options are supported, and they are applied in
             strict order relative to their appearance on the command line,
             including intermingling with loading of config files.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 subtitle">
					<h2>EXAMPLES</h2>
				</div>
				<div class="col-sm-12 text">
					<p>
						<pre>vsftpd -olisten=NO /etc/vsftpd.conf -oftpd_banner=blah</pre>
					</p>
					<p>
						That example overrides vsftpd's built-in default for the "listen" option to be NO, but then loads /etc/vsftpd.conf which may override that setting. Finally, the "ftpd_banner" setting is set to "blah", which overrides any default vsftpd setting and any identical setting that was in the config file.
					</p>
				</div>
				<div class="col-sm-12 subtitle">
					<h2>SEE ALSO</h2>
				</div>
				<div class="col-sm-12 text">
					<p>
						<a href="http://2ch.hk" title="vsftpd.conf(5)">vsftpd.conf(5)</a>
					</p>
				</div>
				<div class="col-sm-12 date">
					<p>
						March 8, 2001
					</p>
				</div>
			</div>
		</div>
	</body>
</html>