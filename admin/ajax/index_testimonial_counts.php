<?php
    include ('../includes/authentication.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $response = array();

        // Fetch testimonial counts for today
        $date = date('Y-m-d');
        $testimonials1 = "SELECT COUNT(*) AS total_testimonials_today FROM testimonials WHERE DATE(testimonials.date) = '$date'  AND status_id != 3";
        $testimonials_run1 = $con->query($testimonials1);
        $testimonials_result1 = $testimonials_run1->fetch_assoc();
        $response['total_testimonials_today'] = $testimonials_result1['total_testimonials_today'];
        $response['percent_total_testimonials_today'] = $response['total_testimonials_today'] * 2;

        // Fetch testimonial counts for the month
        $testimonials2 = "SELECT COUNT(*) AS total_testimonials_month FROM testimonials WHERE testimonials.date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND testimonials.date <= CURDATE()  AND status_id != 3";
        $testimonials_run2 = $con->query($testimonials2);
        $testimonials_result2 = $testimonials_run2->fetch_assoc();
        $response['total_testimonials_month'] = $testimonials_result2['total_testimonials_month'];
        $response['percent_total_testimonials_month'] = $response['total_testimonials_month'] * 2;

        // Fetch testimonial counts for the year
        $testimonials3 = "SELECT COUNT(*) AS total_testimonials_year FROM testimonials WHERE testimonials.date >= DATE_SUB(CURDATE(), INTERVAL 365 DAY) AND testimonials.date <= CURDATE()  AND status_id != 3";
        $testimonials_run3 = $con->query($testimonials3);
        $testimonials_result3 = $testimonials_run3->fetch_assoc();
        $response['total_testimonials_year'] = $testimonials_result3['total_testimonials_year'];
        $response['percent_total_testimonials_year'] = $response['total_testimonials_year'] * 2;

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Handle other HTTP methods if needed
    }
?>