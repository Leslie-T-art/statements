<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .left-heading {
            font-size: 1.2em;
            font-weight: bold;
        }
        
        .right-image {
            max-width: 100px; /* Adjust image width as needed */
            height: auto; /* Maintain aspect ratio */
        }
        
        .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .left-partition, .right-partition {
            width: 48%;
        }
        
        .left-partition p, .right-partition p {
            margin: 0;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            border-top: 3px solid midnightblue; /* Double the width */
            border-bottom: 3px solid midnightblue; /* Double the width */
            color: midnightblue;
            font-weight: normal; /* Unbold the headers */
            font-size: 0.875em; 
        }
        
        th:first-child {
            border-left: none;
        }
        
        th:last-child {
            border-right: none;
        }
        
        .digital-stamp {
            width: 300px;
            height: 200px;
            border: 2px solid #000;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .stamp-details {
            font-size: 12px;
            line-height: 1.4;
            margin-top: 10px;
        }
        
        .stamp-details p {
            margin: 5px 0;
        }
        
        .stamp-date {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
    <title>Midnight Blue Striped Table</title>
</head>
<body>
    <div class="header">
        <div class="left-heading">
            <h2>STATEMENT OF ACCOUNT</h2>
        </div>
        <div class="right-image">
            <img src="path/to/your/image.jpg" alt="Image Description">
        </div>
    </div>
    
    <div class="details">
        <div class="left-partition">
            <p>Name</p>
            <p>HOUSE NUMBER</p>
            <p>TOTAL DEPOSITS</p>
            <p>TOTAL WITHDRAWALS</p>
        </div>
        <div class="right-partition">
            <p>STATEMENT DATE</p>
            <p>BRANCH NAME</p>
            <p>ACCOUNT TYPE</p>
            <p>ACCOUNT NUMBER</p>
        </div>
    </div>

    <br/>

    <div class="digital-stamp">
        <div class="stamp-date">
            Date: <?php echo date('m/d/Y'); ?>
        </div>
        <div class="stamp-details">
            <p>NMB BANK LIMITED</p>
            <p>EMAIL: enquiries@nmbz.co.zw</p>
            <p>THIS IS AN AUTHORIZED DIGITAL STAMP</p>
            <p>TEL: (+263) (242) 759651-9</p>
        </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Header 1</th>
                <th>Header 2</th>
                <th>Header 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1, Cell 1</td>
                <td>Row 1, Cell 2</td>
                <td>Row 1, Cell 3</td>
            </tr>
            <tr>
                <td>Row 2, Cell 1</td>
                <td>Row 2, Cell 2</td>
                <td>Row 2, Cell 3</td>
            </tr>
            <tr>
                <td>Row 3, Cell 1</td>
                <td>Row 3, Cell 2</td>
                <td>Row 3, Cell 3</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
