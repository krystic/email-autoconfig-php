<?php
header('Content-Type: application/xml');
$email = filter_var($_GET["email"], FILTER_SANITIZE_EMAIL);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>PayloadContent</key>
	<array>
		<dict>
			<key>EmailAccountDescription</key>
			<string><?php echo $email ?> - SNK.art</string>
			<key>EmailAccountName</key>
			<string><?php echo $email ?></string>
			<key>EmailAccountType</key>
			<string>EmailTypeIMAP</string>
			<key>EmailAddress</key>
			<string><?php echo $email ?></string>
			<key>IncomingMailServerAuthentication</key>
			<string>EmailAuthPassword</string>
			<key>IncomingMailServerHostName</key>
			<string>em.snk.art</string>
			<key>IncomingMailServerPortNumber</key>
			<integer>993</integer>
			<key>IncomingMailServerUseSSL</key>
			<true/>
			<key>IncomingMailServerUsername</key>
			<string><?php echo $email ?></string>
			<key>OutgoingMailServerAuthentication</key>
			<string>EmailAuthPassword</string>
			<key>OutgoingMailServerHostName</key>
			<string>em.snk.art</string>
			<key>OutgoingMailServerPortNumber</key>
			<integer>587</integer>
			<key>OutgoingMailServerUseSSL</key>
			<true/>
			<key>OutgoingMailServerUsername</key>
			<string><?php echo $email ?></string>
			<key>OutgoingPasswordSameAsIncomingPassword</key>
			<true/>
			<key>PayloadDescription</key>
			<string>Email Autoconfiguration Profile</string>
			<key>PayloadDisplayName</key>
			<string><?php echo $email ?> - Email</string>
			<key>PayloadIdentifier</key>
			<string>art.snk.autoconfig</string>
			<key>PayloadType</key>
			<string>com.apple.mail.managed</string>
			<key>PayloadUUID</key>
			<string>54ea0cab-0526-4909-8ff1-b3908dc8eee8</string>
			<key>PayloadVersion</key>
			<real>1</real>
			<key>SMIMEEnablePerMessageSwitch</key>
			<false/>
			<key>SMIMEEnabled</key>
			<false/>
			<key>disableMailRecentsSyncing</key>
			<false/>
		</dict>
	</array>
	<key>PayloadDescription</key>
        <string>SNK.art Email Autoconfiguration</string>
        <key>PayloadDisplayName</key>
        <string><?php echo $email ?> - Email</string>
        <key>PayloadIdentifier</key>
        <string>art.snk.autoconfig</string>
	<key>PayloadOrganization</key>
	<string>SNK.art</string>
	<key>PayloadRemovalDisallowed</key>
	<false/>
	<key>PayloadType</key>
	<string>Configuration</string>
	<key>PayloadUUID</key>
	<string>54ea0cab-0526-4909-8ff1-b3908dc8eee8</string>
	<key>PayloadVersion</key>
	<integer>1</integer>
</dict>
</plist>
