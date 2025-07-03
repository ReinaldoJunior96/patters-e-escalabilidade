#!/bin/bash
set -e

# Espera o MySQL master estar pronto
until mysqladmin ping -h "db-master" -uroot -proot --silent; do
  sleep 1
done

# Pega status do master
MASTER_STATUS=$(mysql -hdb-master -uroot -proot -e 'SHOW MASTER STATUS\G')
FILE=$(echo "$MASTER_STATUS" | grep File: | awk '{print $2}')
POSITION=$(echo "$MASTER_STATUS" | grep Position: | awk '{print $2}')

# Configura replicação
mysql -uroot -proot -e "STOP SLAVE; CHANGE MASTER TO MASTER_HOST='db-master',MASTER_USER='repl',MASTER_PASSWORD='replpass',MASTER_LOG_FILE='$FILE',MASTER_LOG_POS=$POSITION; START SLAVE;"
