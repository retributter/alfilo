# alfilo

# Desde donde esté el docker-compose.yml
# Normalmente está en alfilo/docker-compose

docker-compose down

# importante la -d por que es desatendido

docker-compose up -d

# Cuando estén up, simplemente, te metes en él de esta forma

docker exec -it frontend sh

# esto es para levantar el servicio Apache2, esta hard-linked

httpd

# para salir del container

exit

# para comprobar que todos nuestros docker tan bien

docker ps -a 

