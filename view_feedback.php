<?php
// Include database configuration
include("db.php");

// Query to select all feedback data
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa; /* Light background */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40; /* Dark gray for better contrast */
            margin-bottom: 20px;
        }

        .table {
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        thead th {
            background-color: #007bff; /* Primary blue */
            color: white;
            text-align: center;
        }

        tbody tr:hover {
            background-color: #f1f1f1; /* Light hover effect */
        }

        tbody td {
            text-align: center;
            vertical-align: middle;
        }

        /* Responsive Design */
        @media (max-width: 767.98px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <?php if ($result->num_rows > 0): ?>
        <div class="container">
            <h2 class="text-center">Feedback Data</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Feedback Type</th>
                        <th>Learner Type</th>
                        <th>Time Sheets</th>
                        <th>Workday Documents</th>
                        <th>Trainings</th>
                        <th>Daily Tasks</th>
                        <th>Additional Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['feedback_type']) ?></td>
                            <td><?= htmlspecialchars($row['learner_type']) ?></td>
                            <td><?= htmlspecialchars($row['task_time_sheets']) ?></td>
                            <td><?= htmlspecialchars($row['task_workday_documents']) ?></td>
                            <td><?= htmlspecialchars($row['task_trainings']) ?></td>
                            <td><?= htmlspecialchars($row['task_daily_tasks']) ?></td>
                            <td><?= htmlspecialchars($row['additional_notes']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="container text-center">
            <h2>No Feedback Data Found</h2>
        </div>
    <?php endif; ?>
    <?php $conn->close(); ?>
</body>
</html>
