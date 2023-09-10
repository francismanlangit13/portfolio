<?php
    if (!defined('DB_SERVER')) {
        include("../../initialize.php");
    }
    
    // DB connection parameters
    $host = DB_SERVER;
    $user = DB_USERNAME;
    $password = DB_PASSWORD;
    $db = DB_NAME;

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    
    try {
        $con = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        $response = array(
            "error" => true,
            "message" => $e->getMessage()
        );
        echo json_encode($response);
        exit();
    }

    // Reading values
    $draw = isset($_POST['draw']) ? $_POST['draw'] : 1;
    $row = isset($_POST['start']) ? $_POST['start'] : 0;
    $rowperpage = isset($_POST['length']) ? $_POST['length'] : 10;
    $columnIndex = isset($_POST['order'][0]['column']) ? $_POST['order'][0]['column'] : 0;
    $columnName = isset($_POST['columns'][$columnIndex]['data']) ? $_POST['columns'][$columnIndex]['data'] : 'id';
    $columnSortOrder = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'asc';
    $searchValue = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';

    $searchArray = array();

    // Search
    $searchQuery = "";
    if (!empty($searchValue)) {
        $searchQuery = " AND (project_id LIKE :project_id OR
            name LIKE :name OR
            description LIKE :description OR
            type LIKE :type OR
            url LIKE :url OR
            date LIKE :date OR
            status_name LIKE :status_name)
        ";
        $searchArray = array(
            'project_id' => "%$searchValue%",
            'name' => "%$searchValue%",
            'description' => "%$searchValue%",
            'type' => "%$searchValue%",
            'url' => "%$searchValue%",
            'date' => "%$searchValue%",
            'status_name' => "%$searchValue%"
        );
    }

    try {
        // Total number of records without filtering
        $userID = $_SESSION['auth_user'] ['user_id'];
        $stmt = $con->prepare("SELECT COUNT(*) AS allcount FROM project WHERE user_id = '$userID'");
        $stmt->execute();
        $records = $stmt->fetch();
        $totalRecords = $records['allcount'];

        // Total number of records with filtering
        $stmt = $con->prepare("SELECT COUNT(*) AS allcount FROM project INNER JOIN status ON project.status_id = status.status_id WHERE user_id = '$userID'" . $searchQuery);
        $stmt->execute($searchArray);
        $records = $stmt->fetch();
        $totalRecordwithFilter = $records['allcount'];

        // Fetch records
        $stmt = $con->prepare("SELECT * FROM project INNER JOIN status ON project.status_id = status.status_id WHERE user_id = '$userID'" . $searchQuery . " ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit, :offset");

        // Bind values
        $stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
        foreach ($searchArray as $key => $search) {
            $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
        }

        $stmt->execute();
        $empRecords = $stmt->fetchAll();

        $data = array();

        foreach ($empRecords as $row) {
            $data[] = array(
                "project_id" => $row['project_id'],
                "name" => $row['name'],
                "description" => $row['description'],
                "type" => $row['type'],
                "url" => $row['url'],
                "date" => $row['date'],
                "status_name" => $row['status_name']
            );
        }

        // Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );
        echo json_encode($response);
    } catch (PDOException $e) {
        $response = array(
            "error" => true,
            "message" => $e->getMessage()
        );
        echo json_encode($response);
    }
?>