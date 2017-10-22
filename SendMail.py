import codecs
import sendgrid
import os, time
from sendgrid.helpers.mail import *

sg = sendgrid.SendGridAPIClient(apikey='')

f = codecs.open("newmail.html", "r", "utf-8")
text = f.read()
s = open('test.txt', 'r')
line = s.readline()

while line:
	next_emails = line
	from_email = Email("no-reply@nskctf.ru")
	to_email = Email(next_emails)
	subject = "Приветствуем на SCTF 2017"
	content = Content("text/html", text)
	mail = Mail(from_email, subject, to_email, content)
	response = sg.client.mail.send.post(request_body=mail.get())
	print(response.status_code)
	print(line)
	line = s.readline()
	time.sleep(10)
