<?php
// Include database connection configuration
include "db.php" ;

// Query to fetch feedback from the database
$query = "SELECT feedback_type, learner_type, task_time_sheets, task_workday_documents, task_trainings, task_communication, task_daily_tasks, additional_notes, created_at FROM feedback ORDER BY created_at DESC";
$result = $conn->query($query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Initialize an array to hold the feedback data
$feedbacks = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $feedbacks[] = $row;
    }
} else {
    echo "No feedback found.";
}

// Close the database connection
$conn->close();
?>
