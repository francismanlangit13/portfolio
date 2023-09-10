<?php
    include ('../includes/authentication.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $response = array();

        // Fetch project counts for today
        $date = date('Y-m-d');
        $stmt1 = "SELECT COUNT(*) AS total_projects_today FROM project WHERE DATE(project.date) = '$date' AND status_id != 3";
        $stmt_run1 = $con->query($stmt1);
        $row_result1 = $stmt_run1->fetch_assoc();
        $response['total_projects_today'] = $row_result1['total_projects_today'];
        $response['percent_total_projects_today'] = $response['total_projects_today'] * 2;

        // Fetch project counts for the month
        $stmt2 = "SELECT COUNT(*) AS total_projects_month FROM project WHERE project.date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND project.date <= CURDATE()  AND status_id != 3";
        $stmt_run2 = $con->query($stmt2);
        $row_result2 = $stmt_run2->fetch_assoc();
        $response['total_projects_month'] = $row_result2['total_projects_month'];
        $response['percent_total_projects_month'] = $response['total_projects_month'] * 2;

        // Fetch project counts for the year
        $stmt3 = "SELECT COUNT(*) AS total_projects_year FROM project WHERE project.date >= DATE_SUB(CURDATE(), INTERVAL 365 DAY) AND project.date <= CURDATE()  AND status_id != 3";
        $stmt_run3 = $con->query($stmt3);
        $row_result3 = $stmt_run3->fetch_assoc();
        $response['total_projects_year'] = $row_result3['total_projects_year'];
        $response['percent_total_projects_year'] = $response['total_projects_year'] * 2;

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Handle other HTTP methods if needed
    }
?>