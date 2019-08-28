# unifbv.5seno.site-embeded-with-iframe

### Start myclone
- cd myclone
- docker build --tag="myclone" .
- docker run -p 8000:80 myclone

### Start mywebsite
- cd mywebsite
- docker build --tag="mywebsite" .
- docker run -p 8001:80 mywebsite