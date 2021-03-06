<h1>Email Approval</h1>
<p style="font-size: 16px">Here is the link for receiving your private QrCode to {{ $companyEvent->name }}</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#EB7035" style="padding: 12px 18px 12px 18px; border-radius:3px" align="center">
                        <a href="{{ $url }}"
                           target="_blank"
                           style="font-size: 16px;
                           font-family: Helvetica, Arial, sans-serif;
                           font-weight: normal;
                           color: #ffffff; text-decoration: none;
                           display: inline-block;">
                            Approve email subscription and get QrCode &rarr;
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<p>Note that you are subscribing news and e-mails from iTravel.ist by approving this message !</p>
<p style="font-size: 10px;">If the button is not working proper you can also click here:
    <a href="{{ $url }}">{{ $url }}</a>
</p>
<a href="https://itravel.ist" target="_blank">
    <img alt="Company Logo" src="https://itravel.ist/wp-content/uploads/2020/03/g1016.png" height="75" width="auto">
</a>
<br>
<a style="font-size: 8px;" href="https://docs.google.com/forms/d/1RQXRPlYzogUixAgPT3gWcoT30MDEEb3jezMH8o9EYbE/">
    Unsubscribe
</a>