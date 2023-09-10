<?php
    include ('../includes/authentication.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $response = array();

        // Fetch work counts for today
        $date = date('Y-m-d');
        $work1 = "SELECT COUNT(*) AS total_work_today FROM work WHERE DATE(work.date) = '$date'  AND status_id != 3";
        $work_run1 = $con->query($work1);
        $work_result1 = $work_run1->fetch_assoc();
        $response['total_work_today'] = $work_result1['total_work_today'];
        $response['percent_total_work_today'] = $response['total_work_today'] * 2;

        // Fetch work counts for the month
        $work2 = "SELECT COUNT(*) AS total_work_month FROM work WHERE work.date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND work.date <= CURDATE()  AND status_id != 3";
        $work_run2 = $con->query($work2);
        $work_result2 = $work_run2->fetch_assoc();
        $response['total_work_month'] = $work_result2['total_work_month'];
        $response['percent_total_work_month'] = $response['total_work_month'] * 2;

        // Fetch work counts for the year
        $work3 = "SELECT COUNT(*) AS total_work_year FROM work WHERE work.date >= DATE_SUB(CURDATE(), INTERVAL 365 DAY) AND work.date <= CURDATE()  AND status_id != 3";
        $work_run3 = $con->query($work3);
        $work_result3 = $work_run3->fetch_assoc();
        $response['total_work_year'] = $work_result3['total_work_year'];
        $response['percent_total_work_year'] = $response['total_work_year'] * 2;

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Handle other HTTP methods if needed
    }
?>