<?php
header('Content-Type: application/xml');
$email = filter_var($_GET["emailaddress"], FILTER_SANITIZE_EMAIL);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<clientConfig version="1.1">
    <emailProvider id="example.org">
      <domain>snk.art</domain>
      <displayName>SNK.art Mail Service</displayName>
      <displayShortName>SNK.art Email</displayShortName>
      <incomingServer type="imap">
         <hostname>em.snk.art</hostname>
         <port>993</port>
         <socketType>SSL</socketType>
         <authentication>password-cleartext</authentication>
         <username><?php echo $email?></username>
      </incomingServer>
      <outgoingServer type="smtp">
         <hostname>em.snk.art</hostname>
         <port>587</port>
         <socketType>SSL</socketType> 
         <authentication>password-cleartext</authentication>
         <username><?php echo $email?></username>
      </outgoingServer>
    </emailProvider>
</clientConfig>
