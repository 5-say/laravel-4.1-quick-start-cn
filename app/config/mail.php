<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	| 邮件驱动
	|--------------------------------------------------------------------------
	|
	| Laravel supports both SMTP and PHP's "mail" function as drivers for the
	| Laravel 同时支持 SMTP 和 PHP 的 "mail" 函数来驱动
	| sending of e-mail. You may specify which one you're using throughout
	| 发送电子邮件。你可以指定一个你应用程序通用的值。
	| your application here. By default, Laravel is setup for SMTP mail.
	| 默认情况下，Laravel 将其设置为 SMTP 邮件驱动。
	|
	| Supported: "smtp", "mail", "sendmail"
	| 支持: "smtp", "mail", "sendmail"
	|
	*/

	'driver' => 'smtp',

	/*
	|--------------------------------------------------------------------------
	| SMTP Host Address
	| SMTP 主机地址
	|--------------------------------------------------------------------------
	|
	| Here you may provide the host address of the SMTP server used by your
	| 这里你可以提供一个 SMTP 服务器的主机地址，用于你的应用程序。
	| applications. A default option is provided that is compatible with
	| 已经提供了一个默认的选项是 Mailgun 邮件服务，
	| the Mailgun mail service which will provide reliable deliveries.
	| 它将提供可靠的投递支持。
	|
	*/

	'host' => 'smtp.mailgun.org',

	/*
	|--------------------------------------------------------------------------
	| SMTP Host Port
	| SMTP 主机端口
	|--------------------------------------------------------------------------
	|
	| This is the SMTP port used by your application to delivery e-mails to
	| 这是用于在你的应用程序中投递电子邮件给用户的 SMTP 端口。
	| users of your application. Like the host we have set this value to
	| 默认情况下，就像上面的 host 我们需要设置这个值
	| stay compatible with the Mailgun e-mail applications by default.
	| 以保持对 Mailgun 邮件应用程序的兼容。
	|
	*/

	'port' => 587,

	/*
	|--------------------------------------------------------------------------
	| Global "From" Address
	| 全局 "From" 地址
	|--------------------------------------------------------------------------
	|
	| You may wish for all e-mails sent by your application to be sent from
	| 你或许希望，你的应用程序发送的所有邮件，都使用
	| the same address. Here, you may specify a name and address that is
	| 相同的发送地址。这里你可以指定一个姓名和地址，这是
	| used globally for all e-mails that are sent by your application.
	| 将是全局的，被用于所有你的应用程序发送的邮件。
	|
	*/

	'from' => array('address' => null, 'name' => null),

	/*
	|--------------------------------------------------------------------------
	| E-Mail Encryption Protocol
	| 邮件加密协议
	|--------------------------------------------------------------------------
	|
	| Here you may specify the encryption protocol that should be used when
	| 这里你可以指定一个加密协议，这应该在应用程序发送邮件信息时被使用。
	| the application send e-mail messages. A sensible default using the
	| 一个明智的默认值
	| transport layer security protocol should provide great security.
	| 使用了传输层安全协议，应该可以提供极大的安全保障。
	|
	*/

	'encryption' => 'tls',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Username
	| SMTP 服务器用户名
	|--------------------------------------------------------------------------
	|
	| If your SMTP server requires a username for authentication, you should
	| 如果你的 SMTP 服务器需要一个用户名来进行认证，你应该
	| set it here. This will get used to authenticate with your server on
	| 在这里设置它。这将提供给连接你的服务器时的认证使用。
	| connection. You may also set the "password" value below this one.
	| 你还可以设置接下来的 "password" 值。
	|
	*/

	'username' => null,

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Password
	| SMTP 服务器密码
	|--------------------------------------------------------------------------
	|
	| Here you may set the password required by your SMTP server to send out
	| 这里你可以为你的应用程序，发出信息所需的 SMTP 服务器设置密码。
	| messages from your application. This will be given to the server on
	| 这将在连接时给到服务器，
	| connection so that the application will be able to send messages.
	| 以便应用程序能够发送信息。
	|
	*/

	'password' => null,

	/*
	|--------------------------------------------------------------------------
	| Sendmail System Path
	| Sendmail 系统路径
	|--------------------------------------------------------------------------
	|
	| When using the "sendmail" driver to send e-mails, we will need to know
	| 当使用 "sendmail" 驱动发送邮件时，我们将需要知道
	| the path to where Sendmail lives on this server. A default path has
	| 一个路径来找到这个服务器上的 Sendmail。这里给出了一个默认路径，
	| been provided here, which will work well on most of your systems.
	| 这在你的大多数的系统中都能够很好的工作。
	|
	*/

	'sendmail' => '/usr/sbin/sendmail -bs',

	/*
	|--------------------------------------------------------------------------
	| Mail "Pretend"
	| 邮件 "仿造"
	|--------------------------------------------------------------------------
	|
	| When this option is enabled, e-mail will not actually be sent over the
	| 当这个选项被启用，邮件将不会真的发送到网络，
	| web and will instead be written to your application's logs files so
	| 而是将被写入到你应用程序的日志文件中，
	| you may inspect the message. This is great for local development.
	| 以便你可以检查这个消息。这是本地开发的好方法。
	|
	*/

	'pretend' => false,

);
