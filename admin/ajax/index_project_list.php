<?php
    include ('../includes/authentication.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $response = array();

        // Define the user ID (you should validate and sanitize user input here)
        $userID = $_SESSION['auth_user']['user_id'];

        // Fetch recent project data for today
        $date = date('Y-m-d');
        $query_project1 = "SELECT *, DATE_FORMAT(project.date, '%m-%d-%Y %h:%i:%s %p') as date_created FROM project WHERE project.user_id = '$userID' AND DATE(project.date) = '$date'";
        $query_project1_run = mysqli_query($con, $query_project1);

        $response['recentprojects_today'] = mysqli_fetch_all($query_project1_run, MYSQLI_ASSOC);

        // Fetch recent project data for the month
        $query_project2 = "SELECT *, DATE_FORMAT(project.date, '%m-%d-%Y %h:%i:%s %p') as date_created FROM project WHERE project.user_id = '$userID' AND project.date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND project.date < CURDATE()";
        $query_project2_run = mysqli_query($con, $query_project2);

        $response['recentprojects_month'] = mysqli_fetch_all($query_project2_run, MYSQLI_ASSOC);

        // Fetch recent project data for the year
        $query_project3 = "SELECT *, DATE_FORMAT(project.date, '%m-%d-%Y %h:%i:%s %p') as date_created FROM project WHERE project.user_id = '$userID' AND project.date >= DATE_SUB(CURDATE(), INTERVAL 365 DAY) AND project.date < CURDATE()";
        $query_project3_run = mysqli_query($con, $query_project3);

        $response['recentprojects_year'] = mysqli_fetch_all($query_project3_run, MYSQLI_ASSOC);

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Handle other HTTP methods if needed
    }
?>