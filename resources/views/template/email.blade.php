<h2>Hey !</h2> <br><br>

You received an email from : {{ $mailData['name'] }} <br><br>

User details: <br><br>

Name:  {{ $mailData['name'] }}<br>
Email:  {{ $mailData['email'] }}<br>
Subject:  {{ $mailData['subject'] }}<br>
Message:  {!! $mailData['message'] !!}<br><br>

Thanks
