<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="format-detection" content="address=no;=no;telephone=no" />
<title>{{ Setting::get('app_name') }}</title>
@include('partials.email-css')
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    <table id="body" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" valign="top" class="body-cell">
                <table width="544" border="0" cellpadding="0" cellspacing="0" class="box">
                    <tr>
                        <td class="header">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="header-logo">
                                       <a href="https://www.clouda.ca/"><img src="https://www.clouda.ca/wp-content/uploads/2015/11/Cloud-A-new-600x118.jpg"></a>
                                    </td>
                                </tr>
                            </table>
                       </td>
                    </tr>
                    <tr>
                        <td class="body">
                            @yield('content')
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
