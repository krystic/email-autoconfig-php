<?php
$raw = file_get_contents('php://input');
$matches = array();
preg_match('/<EMailAddress>(.*)<\/EMailAddress>/', $raw, $matches);
header('Content-Type: application/xml');
?>
<Autodiscover xmlns="http://schemas.microsoft.com/exchange/autodiscover/responseschema/2006">
  <Response xmlns="http://schemas.microsoft.com/exchange/autodiscover/outlook/responseschema/2006a">
    <User>
      <DisplayName>SNK.art Email</DisplayName>
    </User>
    <Account>
      <AccountType>email</AccountType>
      <Action>settings</Action>
      <Protocol>
        <Type>IMAP</Type>
        <Server>em.snk.art</Server>
        <Port>993</Port>
        <DomainRequired>off</DomainRequired>
        <SPA>off</SPA>
        <SSL>on</SSL>
        <AuthRequired>on</AuthRequired>
        <LoginName><?php echo $matches[1]; ?></LoginName>
      </Protocol>
      <Protocol>
        <Type>SMTP</Type>
        <Server>em.snk.art</Server>
        <Port>587</Port>
        <DomainRequired>off</DomainRequired>
        <SPA>off</SPA>
        <SSL>on</SSL>
        <Encryption>TLS</Encryption>
        <AuthRequired>on</AuthRequired>
        <UsePOPAuth>on</UsePOPAuth>
        <LoginName><?php echo $matches[1]; ?></LoginName>
      </Protocol>
    </Account>
  </Response>
</Autodiscover>
