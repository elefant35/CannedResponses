<?php
/*Globals*/
/*Functions*/
function sanit($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$ticket = sanit($_POST['ticket']);
$name = sanit($_POST['fullname']);
$canned = sanit($_POST['canned']);
}
else
{
die("Please go back to the main Page");

}
if($canned == 0)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

For security reasons, we cannot discuss any account information over email. For this reason, we ask that you give us a call at 503-725-4357 or stop by in person at SMSU room 18 and we can get this issue resolved. Please refer to ticket number $ticket when you speak with us.

Thanks,".'</textarea>');
}
if($canned == 1)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

We’d like to make an appointment for a technician to come out and work on this issue. Please give us a call at 503-725-4357 during our open hours of 8 am–7 pm, Monday–Friday. Please refer to ticket number $ticket when you speak with us.

Let us know if you have any further questions or concerns.

Thanks,</textarea>");
}
if($canned == 2)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

It has been some time since we last heard from you. This ticket will now be marked as resolved and closed.

If you still require further assistance, feel free to reopen this ticket by responding to this message.

Thanks,</textarea>");
}
if($canned == 3)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

One year after the end of a student’s last class here at PSU, their ODIN account expires and they lose access to PSU Mail, D2L, campus computers, and other PSU resources. Six months beyond this initial period, the account is deleted and all information within it will be lost. 

You will always have access to your records and the ability to register for classes at banweb.pdx.edu by logging in with the 'Alumni and Former PSU Faculty, Staff and Students Students' option in the lower left. Registering for classes will make your account active.

If you can’t log into banweb.pdx.edu, please visit oam.pdx.edu and use the Forgot your password tool to reset your password. Then you can use your ID number and new password at banweb.pdx.edu. If this does not work, give us a call at 503-725-4357 and we can help you access your account. If you call, please be sure to give the person you speak with your ticket number, $ticket.

For more information about the Odin Account lifecycle, please visit the following website:

http://www.pdx.edu/oit/odin-account-standard

Does this answer your questions about the expiration of your account?

Thanks,</textarea>");
}
if($canned == 4)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

You can reset your password by logging in at http://oam.pdx.edu/, which should take you immediately to a page that will have you create a new one that will be good for another 180 days. You can also try the 'Forgot Password' option, which will allow you to reset the password with a text message or email.

If you are still having trouble logging in, we can reset your password manually, but for security reasons we cannot send any account information over email. For this reason, we ask that you call us at 503-725-4357 if you are not able to log in at http://oam.pdx.edu/ so we can further assist you with this issue. Please refer to ticket number $ticket when you speak with a representative.

Thanks,</textarea>");
}
if($canned == 5)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

The message you sent us is a phishing attempt. If you clicked the link in the email, call our PSU number at 503-725-4357 and refer to the ticket number in the subject line of this email so that we can reset your password and make sure your account is safe. Thank you for being alert and aware and for checking with us!

To learn how to report phishing messages to Google directly, visit http://www.pdx.edu/oit/reporting-phishing-in-psu-gmail. For a wealth of other information about spotting phishing and protecting yourself online, visit our website at www.pdx.edu/oit/phishing-attacks.

We will forward your message to our security team. You can forward additional phishing attempts directly to abuse@pdx.edu.

Thanks,</textarea>");
}
if($canned == 6)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

Thank you for letting us know about this phishing attempt. 

To learn how to report phishing messages to Google directly, visit http://www.pdx.edu/oit/reporting-phishing-in-psu-gmail. For a wealth of other information about spotting phishing and protecting yourself online, visit our website at www.pdx.edu/oit/phishing-attacks.

We will forward your message to our security team. You can forward additional phishing attempts directly to abuse@pdx.edu.

Thanks,</textarea>");
}
if($canned == 7)
{
echo('<textarea cols="100" rows="20">'."Thank you for speaking with me about your account today.

As we discussed, phishing attacks are attempts by malicious individuals to gain access to your account, often using spoofed emails that look similar to legitimate communications from the Helpdesk, OIT, or other departments at PSU. If phishers are successful at tricking you into divulging information, like your passwords or financial details, they are then able to use that information to compromise other accounts you own, search your files for confidential information, and send out emails as you.

To better understand how phishing attacks work and how to avoid them in the future, please spend some time reading through the following pages: 

- Phishing Attacks (https://pdx.edu/oit/phishing-attacks) will explain how phishing attacks are designed to fool you and what to do if you think you've been targeted by one.

- Recent Phishing Emails (https://pdx.edu/oit/recent-phishing-emails) lists the most recent phishing emails that have been sent to the PSU community. This can help you to identify suspicious email you may receive in the future.  

- Understanding Web Addresses  (pdx.edu/oit/understanding-web-addresses) explains how to tell whether a website address is legitimate. Valid PSU sites will have a padlock by the website address and will begin with 'https://'. Hover over any links before you click on them, to see if they begin with 'https://' and include 'pdx.edu' in the first part of the URL.

In the future, if you receive a message you feel is suspicious, don’t hesitate to forward it to the Helpdesk (help@pdx.edu) and to OIT’s security team (abuse@pdx.edu). Receiving these messages helps us to counteract these attacks.  

Please let me know if you have any further questions or concerns about keeping your account safe.</textarea>");
}
if($canned == 8)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

It sounds like you will need to clear your browser's cache. Depending on the web browser you are using, there are several ways to do this.

Internet Explorer     (https://kb.wisc.edu/page.php?id=15141)<br>
Mozilla Firefox        (https://support.mozilla.org/en-US/kb/how-clear-firefox-cache)<br>
Google Chrome     (https://support.google.com/chrome/answer/95582?hl=en)<br>
Safari      (https://kb.iu.edu/d/ahic#safari)

Thanks,</textarea>");
}
if($canned == 9)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

Courses in D2L do not appear until the professor goes in and activates the course, so it is possible your professor has not activated the course yet. It is also possible that your professor does not intend to use D2L. If you are sure that the professor is using D2L and you are still not seeing the course, please give us a call at 503-725-4357 or stop by in person at SMSU room 18 during our open hours of 8 am–7 pm, Monday–Friday and we can investigate why the course is not showing up for you. Please refer to ticket number $ticket when you speak with a representative.

Thanks,</textarea>");
}
if($canned == 10)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

There is somewhat of a disconnect between our Odin system and Career Connect's login system—if you are having trouble logging in, the Career Center will need to add your account to Career Connect. You can contact them directly at careerconnect@pdx.edu or call them at 503-725-4005.  Once they have set up an account for you in their system, you will be able to log in with your Odin username and password.

Thanks,</textarea>");
}
if($canned == 11)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

For personal computers, we do not offer Microsoft Office for free; however faculty and staff members at PSU can purchase Microsoft Office for $10 through the Microsoft Home Use Program. To purchase Office through this program, there is an online form on the OIT website available at http://www.pdx.edu/oit/forms - 'Microsoft Home Use Program Request Form' under 'Software & Hardware.'

Please do not hesitate to contact us further if you have any additional questions.

Thanks,</textarea>");
}
if($canned == 12)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

Below is a list of step-by-step instructions for using Google's 'Import Mail and Contacts' feature.

IT IS VERY IMPORTANT TO FOLLOW THESE INSTRUCTIONS EXACTLY AS WRITTEN

1. Navigate to https://support.google.com/accounts/answer/6010255?hl=en in a web browser and follow the instructions under Option 2, clicking on 'Less secure apps' section.

2. Make sure that POP3 access is enabled in your PSU email. Click the gear icon in the upper-right corner of your PSU Email, then select 'settings'.

3. Once in the settings page, across the top you will select 'Forwarding and POP/IMAP'.

4. In the 'POP Download' section of this page, make sure that POP is enabled. If not select the 'Enable POP for all mail'.

5. With POP enabled, you will now need to log in to your personal @gmail.com address that we will be importing to.

6. From this address we will access the settings, same as before, click the gear icon in the upper-right corner, then select 'settings'.

7. Once in the settings page, select 'Accounts and Import'.

8. In the 'Import mail and contacts' section, click the link 'Import mail and contacts'.

9. In the window that pops up, 'What account do you want to import from?' field, enter your full 
PSU email address: odinusername@pdx.edu. Then select continue.

10. Enter your ODIN password in the first field. Where it asks for POP Username, make sure to enter your full PSU email address, odinusername@pdx.edu. In the POP Server field, change it to pop.gmail.com. Then select continue.

11. On the last page you can change the label that it sets to all imported mail to anything that you want (it defaults to your PSU email, but it can be changed to anything. Creates a label for all imported mail.) Leave all boxes checked on the default settings, DO NOT change these or the import WILL FAIL.

12. Select 'Start Import'.

This process runs in the background, which means you will not be required to stay logged in to either of these accounts. This process can take several days depending on the number of emails and contacts in your PSU Email.</textarea>");
}
if($canned == 13)
{
echo('<textarea cols="100" rows="20">'."Hello $name,

It is possible to change your Odin username following a legal name change.  You will need to call the Helpdesk at 503-725-4357 or stop by in person at SMSU room 18 during our open hours of 8 am–7 pm, Monday-Friday.  We will then verify your identity, give you a list of options for you to change your name to, and start the process of changing your username.  

If you do give us a call, please give the technician your ticket number $ticket which can also be found in the subject line of this email.  Having your PSU ID number on hand would also be helpful.

Thanks,</textarea>");
}
/*testing iframe*/
echo('<br><br><br><a href="https://support.oit.pdx.edu/Ticket/Update.html?Action=Respond;id='.$ticket.'">Reply to the ticket here</link>');

?>
