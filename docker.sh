# =================================
#   Setup application with Docker
# =================================

# - Before running this script you need to create and launch docker container with the following command:
#               -  ./vendor/bin/sail up -d

docker_compose () {

        # Docker .env file
        sed -i 's/DB_HOST=localhost/DB_HOST=mysql/g' .env;

        # Get sql files
        sql_files=$(find database/imports/ -iname *.sql);

        # MySQL container ID
        container=$(docker ps | grep mysql | awk '{print $1}');

        # Copy dump file inside the container
		for file in $sql_files; do
			fileName=$(basename $file);
			docker cp $file $container:/$fileName;
			echo "File $fileName copied to container $container";
		done

        # Drop all tables and re-run all migrations
        ./vendor/bin/sail artisan migrate:fresh;

        # Import dump file
		for file in $sql_files; do
			fileName=$(basename $file);
			echo "source $fileName" | ./vendor/bin/sail mysql;
			echo "File $fileName imported to database";
		done

        sudo chown -R "$USER":www-data storage/ bootstrap/ public/

}

docker_compose