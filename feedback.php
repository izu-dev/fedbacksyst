<?php
// Initialize the session if not already started
session_start();

// Initialize the feedback array in session if it doesn't exist
if (!isset($_SESSION['feedback'])) {
    $_SESSION['feedback'] = [];
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Collect form data
    $feedback = [
        'name' => $_POST['name'],
        'department' => $_POST['department'],
        'gender' => $_POST['gender'],
        'message' => $_POST['message'],
        'timestamp' => date('Y-m-d H:i:s'),
      
    ];
    
    // Add the new feedback to the session array
    $_SESSION['feedback'][] = $feedback;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            width: fit-content;
            margin: 0 auto;
            padding: 30px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        h1, h2 {
            color: #333;
            text-align:center;

        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        textarea {
            height: 100px;
        }
        
        .radio-group {
            display: flex;
            gap: 15px;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
            font-weight: bold;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        table, th, td {
            border: 1px solid #ddd;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .feedback-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Feedback System</h1>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required maxlength="100">
            </div>
            
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Lab Tech">laburatory Technician</option>
                    <option value="Banking">Banking</option>
                    <option value="HR">Human Resources</option>
                    <option value="IT">Information Technology</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Finance">Finance</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="transport and Logistic">Transport and logistic</option>
                    <option value="Nursing">Nursing</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <div>
                        <input type="radio" id="male" name="gender" value="Male" required>
                        <label for="male">Male</label>
                    </div>
                    <div>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label>
                    </div>
                    <div>
                        <input type="radio" id="other" name="gender" value="Other">
                        <label for="other">Other</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="message">Feedback Message:</label>
                <textarea id="message" name="message" required maxlength="500"></textarea>
            </div>
            
            <button type="submit" name="submit">Submit Feedback</button>
        </form>
        
        <?php if (!empty($_SESSION['feedback'])): ?>
        <div class="feedback-section">
            <h2>Submitted Feedback</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Gender</th>
                        <th>Feedback</th>
                        <th>Timestamp</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['feedback'] as $index => $item): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo ($item['name']); ?></td>
                        <td><?php echo ($item['department']); ?></td>
                        <td><?php echo ($item['gender']); ?></td>
                        <td><?php echo ($item['message']); ?></td>
                        <td><?php echo ($item['timestamp']); ?></td>
                       
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>