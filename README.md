Rauction

Dev notes
--------

Enable uuid support in container
-------------------------------
 
  docker-compose exec db /bin/bash 
  psql api --username api-platform
  CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
  select uuid_generate_v4();



