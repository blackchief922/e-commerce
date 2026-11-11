        <?php

        class Database

        {
            public $connection;

            function __construct(array $config, string $username, string $password)
        {
            
            $dsn = "mysql:".http_build_query($config,"",";");

            $this->connection = new PDO($dsn, $username,$password, [
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
        }
public function query(string $query, array $params = [])
        {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
                return $statement;
            }

        }