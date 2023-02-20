#!/bin/bash

#Declaring constants
varDate=$(date '+%F')
varLoc="/root"
varPolicy=$(date -d "3 day ago" '+%F')
checkerLog(){
if [ -d log-cron ]
then
    directoryCreator
else
    mkdir log-cron
    chmod 775 log-cron
    checkerLog
fi
}
directoryCreator(){
    logging="./log-cron/log-$varDate"
    if [ -d "/root/log-cron/cron-$varDate" ]
    then 
        mkdir /root/log-cron/cron-$varDate-old
        chmod 775 /root/log-cron/cron-$varDate-old
        cp -r /root/log-cron/cron-$varDate /root/log-cron/cron-$varDate-old/
        rm -r /root/log-cron/cron-$varDate
        directoryCreator
    else
        mkdir cron-$varDate
        chmod 775 cron-$varDate
        mv cron-$varDate ./log-cron/
        site="/root/log-cron/cron-$varDate"
    fi
cronSchedule
}
    #what does the cron do:
    cronSchedule(){
    zip data-$varDate.zip $varLoc/profiles $varLoc/sites $varLoc/sql-file.env $varLoc/docker-compose.yml $varLoc/docker-containerdrup
    zip data-db-$varDate.zip $varLoc/docker/
    chmod 775 data-$varDate.zip
    chmod 775 data-db-$varDate.zip
    mv data-$varDate.zip $site/data-$varDate.zip
    mv data-db-$varDate.zip $site/data-db-$varDate.zip
    }
#Back to main()    
checkerLog
