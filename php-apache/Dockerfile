# Usa a imagem oficial do PHP com Apache.
FROM php:8.3-apache

# Primeiro, atualiza a lista de pacotes disponíveis e suas versões 
# com 'apt-get update', se este comando for bem-sucedido executa 
# 'apt-get install -y libpq-dev' que instala 'libpq-dev', pacote de 
# desenvolvimento para o PostgreSQL, que é necessário para compilar a
# extensão 'pdo_pgsql', que permite que o PHP se conecte a bancos de dados
# PostgreSQL. Se este último comando for bem-sucedido, então é executado 
# 'docker-php-ext-install pdo pdo_pgsql' que instala as extensões do PHP 
# pdo e pdo_pgsql para conexão com PostgreSQL.
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia o arquivo index.php para o diretório padrão 
# do Apache.
COPY . /var/www/html/

# Informa ao Docker que o container irá escutar na 
# porta 80.
EXPOSE 80
