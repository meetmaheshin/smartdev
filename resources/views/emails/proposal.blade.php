<!-- resources/views/emails/proposal.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>New Proposal Submitted</title>
</head>
<body>
    <h1>Hello!</h1>
    <p>I hope this email finds you well.</p>
    <p>I am pleased to inform you that I have submitted a proposal for your project titled {{$proposalSetting->projects->title}} Below are the key highlights of my proposal:</p>
    <p><strong>Cover Letter:</strong> {{ $proposalSetting->cover_letter }}</p>
    <p><strong>Duration:</strong> {{ $Duration }}</p>
    <p><strong>Earned Amount:</strong> {{ $proposalSetting->earned_amount }}</p>
    <p><strong>Charged Amount:</strong> {{ $proposalSetting->charged_amount }}</p>
    <p><a href="{{ $url }}">View Proposal</a></p>
    <p>I am excited about the opportunity to work on this project and am confident that my skills and experience make me a suitable candidate. Please feel free to reach out if you have any questions or need further information.</p>
</body>
</html>
