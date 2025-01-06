<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Invitation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .header {
            background-color: #6fda44;
            text-align: center;
            padding: 20px;
        }
        .header img {
            width: 120px;
        }
        .content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #6fda44;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Job Invitation</h1>
        </div>
        <div class="content">
            <p>Hi,</p>
            <p>
                You have been invited to submit a proposal for the following job:
            </p>
            <h2>{{ $jobDetails['name'] }}</h2>
            <p>
                <strong>Payment Type:</strong> 
                @if($jobDetails['payment_type'] === 'project')
                    Fixed Price
                @elseif($jobDetails['payment_type'] === 'hourly')
                    Hourly
                @endif
            </p>
            <p>
                <strong>Budget:</strong> 
                @if($jobDetails['payment_type'] === 'project')
                    ${{ $jobDetails['budget'] }}
                @elseif($jobDetails['payment_type'] === 'hourly')
                    ${{ $jobDetails['hourly_from'] }} - ${{ $jobDetails['hourly_to'] }} per hour
                @endif
            </p>
            <p>
                <strong>Estimated Time:</strong> {{ $jobDetails['time_estimate'] }}
            </p>
            <a href="{{ route('proposal.interview', ['id' => $jobDetails['proposal_url']]) }}" class="button">Submit Proposal</a>
        </div>
        <div class="footer">
            <p>Thanks for your time,</p>
            <p>SmartDev</p>
        </div>
    </div>
</body>
</html>