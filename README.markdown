Swift Mailer Spark
====================

[Swift Mailer](http://swiftmailer.org/) is an open source PHP Mailer library.

This spark exists to quickly integrate SwiftMailer's mailing features with CodeIgniter 2.


Installation
------------

### Sparks Manager

Navigate to the root of your CodeIgniter project and run

    php tools/spark install swift-mailer

### Manually

* Navigate to your CodeIgniter project's 'sparks' folder
* Extract the swift-mailer spark here, ensure it is named 'swift-mailer'


Documentation
------------

SwiftMailer documentation can be found at http://swiftmailer.org.

You may want to start by [creating messages](http://swiftmailer.org/docs/messages.html) then follow up by [sending messages](http://swiftmailer.org/docs/sending.html).


A Quick Test Run
------------
Throw this into a controller and give it a run.  Make sure that the sendmail path is correct.

$this->load->spark('swift-mailer/0.0.1');

// create the transport
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// create the mailer that will use the transport
$mailer = Swift_Mailer::newInstance($transport);

// create the message
$message = Swift_Message::newInstance();
$message->setSubject('test');
$message->setFrom('noreply@test.com');
$message->setTo(array('youremail@testdomain.com' => 'Your Name'));
$message->setBody('This is the body.');

// send the message
$mailer->send($message);


Contact and Credit
-----------------

[Swift Mailer](http://swiftmailer.org/) was originally created and maintained by
Chris Corbyn. Paul Annesley and Christopher Thompson joined the team in 2009. In
September of 2009 Fabien Potencier took over maintenance of the project.

This spark was created and is maintained by
[Shawn McCool](http://heybigname.com), is hosted on [GitHub](http://github.com),
and is made possible by the [GetSparks](http://getsparks.org) team.  Please support their project!