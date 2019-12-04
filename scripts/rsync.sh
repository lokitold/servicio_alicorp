#!/bin/bash
# RSYNC.SH CODDEPLOY
rsync -avz --delete-after --exclude-from=/tmp/deploy-current/scripts/deploy.exclude /tmp/deploy-current/* /var/www/html/galletalaravel/
chmod -R 775 /var/www/html/galletalaravel
chown -R www-data:www-data /var/www/html/galletalaravel
#cd /dataweb/libero/3.libero.pe
#aws s3 sync --profile default --region us-east-1  /dataweb/libero/3.libero.pe/public/ s3://libero-media/public/
#composer update