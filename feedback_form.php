<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback_form</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #A7C7E7; 
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px; /* Adjusted container width */
            margin: 0 auto; /* Center the container */
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2, label {
            color: #343a40; /* Dark gray for better contrast */
        }

        table th, table td {
            vertical-align: middle;
            text-align: center;
        }

        button {
            background-color: #007bff;
            color: white;
        }

        .container #image {
            width: 86vh; 
            height: 30vh;
            display: block; 
            margin-left: -16px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 575.98px) {
            .container #image {
                width: 100%;        /* Make image 100% of the container on small devices */
                height: 30vh;       /* Maintain aspect ratio */
            }
        }

        @media (max-width: 767.98px) {
            .container #image {
                width: 95vh;         /* Adjust image width for tablets */
                height: 30vh;       /* Maintain aspect ratio */
            }
        }

        @media (max-width: 1024px) {
            .container #image {
                width: 90vh;         /* Adjust image width for laptops */
                height: 30vh;       /* Maintain aspect ratio */
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <img id="image" src="feedback_pic.webp" alt="feedback picture" >
        <h2 class="text-center mb-4">Submit Your Feedback</h2>
        <form action="submit_feedback.php" method="POST">
            <!-- Feedback Type -->
            <div class="form-group">
                <label>Feedback Type</label><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="radio" id="comment" name="feedback_type" value="Comment" required>
                        <label for="comment">Comment</label>
                    </div>
                    <div class="col-md-4">
                        <input type="radio" id="suggestion" name="feedback_type" value="Suggestion">
                        <label for="suggestion">Suggestion</label>
                    </div>
                    <div class="col-md-4">
                        <input type="radio" id="question" name="feedback_type" value="Question">
                        <label for="question">Question</label>
                    </div>
                </div>
            </div>

            <!-- Type of Learner -->
            <div class="form-group">
                <label for="learner_type">Which type of learner are you?</label><br>
                <div>
                    <input type="checkbox" id="visual" name="learner_type[]" value="Visual">
                    <label for="visual">Visual</label>
                </div>
                <div>
                    <input type="checkbox" id="auditory" name="learner_type[]" value="Auditory">
                    <label for="auditory">Auditory</label>
                </div>
                <div>
                    <input type="checkbox" id="hands_on" name="learner_type[]" value="Hands-On">
                    <label for="hands_on">Hands-On</label>
                </div>
                <div>
                    <input type="checkbox" id="other" name="learner_type[]" value="Other">
                    <label for="other">Other</label>
                </div>
            </div>

            <!-- Difficulty with Onboarding Tasks -->
            <div class="form-group">
                <label>How difficult was it for you to obtain information on the onboarding tasks below?</label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Not at All</th>
                            <th>Not Really</th>
                            <th>Difficult</th>
                            <th>Very Difficult</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tasks = ['Time Sheets', 'Workday Documents', 'Trainings', 'Daily Tasks'];
                        foreach ($tasks as $task):
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($task) ?></td>
                            <td><input type="radio" name="task_<?= strtolower(str_replace(' ', '_', $task)) ?>" value="Not at All" required></td>
                            <td><input type="radio" name="task_<?= strtolower(str_replace(' ', '_', $task)) ?>" value="Not Really"></td>
                            <td><input type="radio" name="task_<?= strtolower(str_replace(' ', '_', $task)) ?>" value="Difficult"></td>
                            <td><input type="radio" name="task_<?= strtolower(str_replace(' ', '_', $task)) ?>" value="Very Difficult"></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Free Text Feedback -->
            <div class="form-group">
                <label for="additional_notes">Any Feedback</label>
                <textarea class="form-control" id="additional_notes" name="additional_notes" rows="4" placeholder="Type here..." required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit Feedback</button>
            </div>
        </form>
    </div>
</body>
</html>
