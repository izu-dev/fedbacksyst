<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
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
            padding: 50px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
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
        

    </style>
</head>
<body>
    <div class="card">
    <form method="POST" action="logic.php">
        <h3>Name:</h3>
       <input type="text" name="name" placeholder="Enter your name"><br>
       <h3>Enter Age:</h3>
       <input type="text" name="age" placeholder="Enter your age"><br>
       <h3>Enter phone number:</h3>
       <input type="number" name="phone" placeholder="Enter your phone number"><br>

       <h3>Skills:</h3>
       <input type="text" name="skills" placeholder="skills,seperate them by commas(,)"><br>

       <h3>Summary:</h3>
       <textarea name="summary" id=""></textarea>
       <!-- <input type="password" name="password" placeholder="Enter password"> -->
       <br>
       <input type="submit" value="submit" name="submit">
       <!-- <bottun type="submit">Submit</button>  -->
       
    </form>
</div>
</body>
</html>