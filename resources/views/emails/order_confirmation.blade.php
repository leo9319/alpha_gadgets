<p>Dear {{ $client_data['full_name'] }},</p>
<p>
    This is a confirmation email of your pre-order of the <b>iPhone 11 (128GB)</b> from <b>Alpha Gadgets</b>. Keep this email safe which will work as a proof of your order. <br>You can check the status of your order by logging using the following credentials:
</p>

<table>
    <tr>
        <td><b>URL:</b></td>
        <td>{{ config('app.url') . '/login' }}</td>
    </tr>
    <tr>
        <td><b>Mobile:</b></td>
        <td>{{ $client_data['mobile'] }} (use this to login)</td>
    </tr>
    <tr>
        <td><b>Password:</b></td>
        <td>{{ $client_data['password'] }}</td>
    </tr>
</table>

<p>You can contact us at:</p>

<table>
    <tr>
        <td><b>Phone:</b></td>
        <td>{{ config('company.mobile') }}</td>
    </tr>
    <tr>
        <td><b>Email:</b></td>
        <td>{{ config('company.email') }}</td>
    </tr>
    <tr>
        <td><b>Facebook:</b></td>
        <td>{{ config('company.facebook_page_url') }}</td>
    </tr>
</table>

<p>Regards,<br>Alpha Gadgets</p>