<?php
// Include database configuration
include("db.php");

// Get the form data
$feedback_type = $_POST['feedback_type'] ?? '';
$learner_type = isset($_POST['learner_type']) ? implode(', ', $_POST['learner_type']) : '';
$task_time_sheets = $_POST['task_time_sheets'] ?? '';
$task_workday_documents = $_POST['task_workday_documents'] ?? '';
$task_trainings = $_POST['task_trainings'] ?? '';
$task_daily_tasks = $_POST['task_daily_tasks'] ?? '';
$additional_notes = $_POST['additional_notes'] ?? '';

// Prepare SQL query
$sql = "INSERT INTO feedback (feedback_type, learner_type, task_time_sheets, task_workday_documents, task_trainings, task_daily_tasks, additional_notes) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $feedback_type, $learner_type, $task_time_sheets, $task_workday_documents, $task_trainings, $task_daily_tasks, $additional_notes);

// Execute the query
if ($stmt->execute()) {
    // Redirect to the home page after successful submission
    header("Location: home.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
