#!/bin/bash
#git add .
#git commit -m "new push"
#git push
#present directory crm.etruckloads.in
cd .. 
#go one directory back
zip -r crm.etruckloads.in.zip crm.etruckloads.in


#To deploy make a zip file of crm.etruckloads.in


#create zip folder of crm.etruckloads.in
scp crm.etruckloads.in.zip root@142.93.221.86:/var/www
#send zip to server at /var/www location


#Login to server and run the following commands

ssh root@142.93.221.86

cd var/www

unzip crm.etruckloads.in.zip 

cp .env /var/www/crm.etruckloads.in
