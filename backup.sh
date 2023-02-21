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
    touch log-cron/log-$varDate.md
    chmod 775 log-cron/log-$varDate.md
    logging="log-cron/log-$varDate.md"
    if [ -d "log-cron/cron-$varDate" ]
    then 
        mkdir log-cron/cron-$varDate-old
        chmod 775 log-cron/cron-$varDate-old
        cp -r log-cron/cron-$varDate log-cron/cron-$varDate-old/
        rm -r log-cron/cron-$varDate
        directoryCreator
    else
        mkdir cron-$varDate
        chmod 775 cron-$varDate
        mv cron-$varDate log-cron/
        site="log-cron/cron-$varDate"
    fi
cronSchedule
}
    #what does the cron do:
    cronSchedule(){
    zip -v -r docker-compose-$varDate.zip docker-compose >> $logging
    chmod 775 docker-compose-$varDate.zip
    mv docker-compose-$varDate.zip $site/docker-compose-$varDate.zip
    }
#Back to main()    
checkerLog
