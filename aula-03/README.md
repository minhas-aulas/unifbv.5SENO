# unifbv.5SENO aula-03

### Start XSS PHP

- cd xss-php
- docker build -t xss-php .
- docker run -d -p 8080:80 xss-php

<script>
  alert(1)
</script>

<script>
  document.body.style.backgroundColor = "red";
</script>

### Start XSS Rails

- cd xss-rails
- docker build -t xss-rails .
- docker run -d -p 3000:3000 xss-rails

### Start XSS Wordpress

- cd xss-wordpress
- docker-compose up

### Start Space Invaders

- cd space-invaders
- docker build -t space-invaders .
- docker run -d -p 8081:80 space-invaders

### XSS change bg color

### XSS inject iframe

<script>
  var iframe    = document.createElement('iframe');
  iframe.src    = 'http://127.0.0.1:8081';
  iframe.width  = '800';
  iframe.height = '585';
  document.body.appendChild(iframe);
</script>

